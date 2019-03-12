<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_models');
		$this->load->model('confide_models');
	}

	// public function view($pages = NULL)
	// {

	// 	if($pages == "user"){
	// 		show_404();
	// 	}else if(!file_exists(APPPATH."views/pages/".$pages.".php")){
	// 	    show_404();
	// 	}

	// 	if (!$this->user_models->is_LoggedIn()) {
	// 		redirect('login');
	// 	}
	// 	$data['user'] = $this->user_models->get_user('id', $_SESSION['user_id']);
	// 	$data['content'] = $this->confide_models->get_content();
	// 	$data['online'] = $this->user_models->get_online();
	// 	$this->load->view('layouts/header');
	// 	$this->load->view('layouts/navbar_top');
	// 	$this->load->view('pages/'.$pages, $data);
	// 	$this->load->view('layouts/navbar_bottom');
	// 	$this->load->view('layouts/footer');

	// }

	public function user($username = NULL)
	{
        $query = $this->user_models->get_users($username);
        if (!$query) {
			$this->load->view('layouts/header');
            $this->load->view('layouts/error');
            $this->load->view('layouts/footer');
		}else {
	    // following / followers untuk ditampikan ke page profile
		$data['count_follower'] = $this->user_models->ambil_followers($username);
		$data['count_follow'] = $this->user_models->ambil_following($username);
		$data['avatar_follower'] = $this->user_models->ambil_followers_avatar($username);
		$data['avatar_follow'] = $this->user_models->ambil_following_avatar($username);

		$data['user'] = $this->user_models->get_user('id', @$_SESSION['user_id']);
		$data['user_item'] = $this->user_models->get_users($username);
		$data['confide'] = $this->confide_models->get_confide($username);
		$data['follow'] = $this->user_models->check_follow($username);

		$data['kiriman'] = $this->user_models->jumlah_kiriman($username);
        $this->load->view('layouts/header');
		$this->load->view('user/index',$data);
		$this->load->view('layouts/footer');
		}
	}

	public function settings(){
		$data['user'] = $this->user_models->get_user('id', $_SESSION['user_id']);
		$this->load->view('layouts/header');
		$this->load->view('user/settings', $data);
		$this->load->view('layouts/footer');
	}

	public function set_settings(){
        $data['user'] = $this->user_models->get_user('id', $_SESSION['user_id']);
		$data = array();
        // $upload = $this->confide_models->avatarProfile();

        $this->form_validation->set_rules('username', 'Username', 'required|alpha|trim');
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('biodata', 'Biodata', 'max_length[120]');
		$this->form_validation->set_rules('user_lokasi', 'Lokasi', 'max_length[60]');
		$this->form_validation->set_rules('last_education', 'Last_education', 'max_length[60]');
		$this->form_validation->set_rules('work', 'Work', 'max_length[60]');

        if($this->form_validation->run() === false)
        {
            $data['user'] = $this->user_models->get_user('id', $_SESSION['user_id']);
            $this->load->view('layouts/header');
            $this->load->view('user/settings', $data);
            $this->load->view('layouts/footer');
        } else {

				$this->confide_models->set_settingsProfileZ();
				redirect('confide');
        }
	}

	public function set_Avatar(){		
		$data = array();
		$data['user'] = $this->user_models->get_user('id', $_SESSION['user_id']);
		$upload = $this->confide_models->avatarProfile();

		if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Panggil function save yang ada untuk menyimpan data ke database
			   $this->confide_models->set_Ava($upload);
			   redirect('user/'.$data['user']['username']);
		   }else if($upload['result'] == "failed"){ // Jika proses Settings tanpa mengupload foto sukses
				// Panggil function save yang ada untuk menyimpan data ke database
			   $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			   die($data['message']);			

		   }else{ // Jika proses upload gagal
			   $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			   die($data['message']);
		   } 
		} else {  
			$this->load->view('layouts/header');
			$this->load->view('user/ava_settings', $data);
			$this->load->view('layouts/footer');
		}
			

    }

	/////////////////////////////////////////
	public function settings_admin($acc_id){
		$data['user'] = $this->user_models->get_user('id', $acc_id);
		$this->load->view('layouts/header');
		$this->load->view('pages/adminsettings', $data);
		$this->load->view('layouts/footer');
	}

	public function delete_akun($acc_id)
	{
		$this->confide_models->delete_account($acc_id);

		redirect('admin');
	}

}
