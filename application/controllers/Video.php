<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_models');
        $this->load->model('user_models');
    }

    public function create()
    {
      if (!empty($_POST)){
        $data = array();
        $upload = $this->Video_models->upload();

          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->Video_models->save($upload);

            // redirect('home'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            die($data['message']);
          }

          redirect('/s/video');
      } else {
        $this->load->view('layouts/header');
        $this->load->view('layouts/navbar_top');
        $this->load->view('pideo/createvideo');
        $this->load->view('layouts/footer');
      }
    }

    public function edit($video_id)
    {
      $data['content'] = $this->Video_models->get_details($video_id);
      // die(var_dump($data['content']['id']);
        if (!empty($_POST)){
          $this->Video_models->ubah($video_id);
          redirect("/s/video/".$video_id);
        }else {
          $this->load->view('pideo/updatevideo', $data);
        }
    }

    public function delete($video_id)
    {
      $this->Video_models->hapus($video_id);
      redirect('/s/video');
    }

    public function view()
    {
      $data = array(
        'content' => $this->Video_models->get(),
       );
      $this->load->view('layouts/header');
      $this->load->view('layouts/navbar_top');
      $this->load->view('pideo/homevideo', $data);
      $this->load->view('layouts/footer');
    }

    public function view_details($video_id)
    {
    	    // $query = $this->confide_models->get_details($confideid);
          //   if (!$query) {
    			// 			$this->load->view('layouts/header');
          //       $this->load->view('layouts/error');
          //       $this->load->view('layouts/footer');
          //
          //
          //   } else {

    	  $data['user'] = $this->user_models->get_user('id', @$_SESSION['user_id']); // Menampilkan Data User
    		$data['details'] = $this->Video_models->get_details($video_id); // Menampilkan Data Confide
        // die(var_dump($data['details']));
    		// $data['count_suka'] = $this->confide_models->count_likeConfide($confideid); // Menampilkan Data Jumlah Like yang terhubung dengan ID CONFIDE.
    		// $data['check_suka'] = $this->confide_models->check_like($confideid); // Menampilkan Data Like Sudah atau belum.
    		$data['comment'] = $this->Video_models->get_comment($video_id); // Menampilkan Data Comment yang terhubung dengan ID CONFIDE, ID USER.
    		$data['count_comment'] = $this->Video_models->count_comment($video_id);

    	  $this->load->view('layouts/header');
    	  $this->load->view('layouts/navbar_top');
    		$this->load->view('pideo/details', $data);
    		$this->load->view('layouts/navbar_bottom');
    		$this->load->view('layouts/footer');
            // }
    	}

      // Insert comment
      public function insert_comment()
      {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('video_id','Owner Video', 'required');
        $this->form_validation->set_rules('user_id','Owner Comment', 'required');
        $this->form_validation->set_rules('comment_txt','Deskripsi', 'required');


        if($this->form_validation->run() === FALSE){

        } else {
          $video_id = $this->input->post('video_id');
          $userid = $this->input->post('user_id');
          $this->Video_models->set_Comment($video_id, $userid);
          redirect('home');
        }
      }
      // End Insert Comment
}
