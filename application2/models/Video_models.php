<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_models extends CI_Model {

  public function upload(){
  $config['upload_path'] = '.././mobileweb/assets/content/';
  $config['allowed_types'] = 'avi|mp4|mpeg|webm|mkv|gif|wmv|3gp|jpg|png|jpeg';
  $config['max_size']	= '100000';
  $config['overwrite'] = FALSE;
  $config['remove_space'] = TRUE;

  $this->load->library('upload', $config); // Load konfigurasi uploadnya

  $this->upload->do_upload('input_gambar');
  $file_gambar = $this->upload->data();

  $this->upload->do_upload('input_video');
  $file_video = $this->upload->data();


  // $this->upload->do_upload('input_gambar');
  if($this->upload->do_upload('input_video') == TRUE && $this->upload->do_upload('input_gambar') == TRUE){ // Lakukan upload dan Cek jika proses upload berhasil
    // Jika berhasil :
    $return = array('result' => 'success', 'file' => $file_video, 'file1' => $file_gambar, 'error' => '');
    return $return;
  }else{
    // Jika gagal :

          $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    return $return;

// 			echo "<script>alert('Gagal upload Video. Kembali ke home..')</script>";
    }
  }

  public function save($upload){

    date_default_timezone_set('Asia/Jakarta');
  $now = date('Y-m-d H:i:s');

  $data = array(
    'title'=>$this->input->post('judul'),
    'description'=>$this->input->post('input_deskripsi'),
    'nama_file' => $upload['file']['file_name'],
    'thumbnail_file' => $upload['file1']['file_name'],
    'ukuran_file' => $upload['file']['file_size'],
    'tipe_file' => $upload['file']['file_type'],
    'user_id' => $this->input->post('user_id'),
    'created_at' => $now,
  );

  $this->db->insert('video', $data);
  }

  public function get()
  {
    $this->db->select('
    users.full_name,
    users.username,
    users.nama_avatar,
    video.id,
    video.user_id,
    video.title,
    video.thumbnail_file,
    video.nama_file,
    video.tipe_file,
    video.created_at,
    video.description');
    $this->db->from('video');
    $this->db->join('users', 'users.id = video.user_id');
    $query = $this->db->get();
    // $str = $this->db->last_query();
    // die($str);
    return $query->result_array();
  }

public function ubah($video_id)
{
    $data = array(
        'title' => $this->input->post('judul'),
        'description' => $this->input->post('deskripsi')
      );

     $this->db->where('id', $video_id);
     $this->db->update('video', $data);
}

public function hapus($video_id){
  $this->db->delete('video', array('id' => $video_id));
}
  // ======================== COMMENT ========================================

  public function get_details($video_id){
    $this->db->select('users.full_name,
    users.username,
    users.nama_avatar,
    video.id,
    video.user_id,
    video.title,
    video.nama_file,
    video.tipe_file,
    video.created_at,
    video.description');
    $this->db->from('video');
    $this->db->join('users', 'users.id = video.user_id')->where('video.id', $video_id);
    $str = $this->db->last_query();
    $query = $this->db->get();
    return $query->row_array();
    }

  public function get_comment($video_id){
  		$query = $this->db->query(
  			"SELECT
  			comment_video.id,
  			comment_video.video_id,
        users.id AS user_id,
  			users.full_name,
  			comment_video.deskripsi,
  			comment_video.created_at
  			FROM comment_video INNER JOIN users ON users.id = comment_video.user_id
  			WHERE comment_video.video_id = '".$video_id."'"
  		);
          return $query->result_array();
  	}

  public function count_comment($video_id){
        $query= $this->db->query("SELECT COUNT(id) AS jumlah_kiriman FROM `comment_video` WHERE video_id = '".$video_id."'");
        return $query->row_array();
    }

  public function set_Comment($video_id, $userid)
  	{
  			$data = array(
  				'deskripsi' => $this->input->post('comment_txt'),
  				'user_id' => $userid,
  				'video_id' => $video_id,
  			);

  			return $this->db->insert('comment_video', $data);
  	}

  public function ubah_Comment($video_id, $comment_id)
  	{
  			$data = array(
  				'deskripsi' => $this->input->post('comment_txt'),
  				'user_id' => $this->input->post('user_id'),
  				'video_id' => $video_id,
  			);

        $this->db->where('id', $comment_id);
        $this->db->update('comment_video', $data);
  	}

    public function hapus_comment($comment_id){
      $this->db->delete('comment_video', array('id' => $comment_id));
    }
  // ======================== END COMMENT ====================================


  // ======================= Check Like pada status ==========================

  public function check_like($video_id){
    $query = $this->db->query("SELECT user_id, video_id FROM likes_video WHERE user_id = '".@$_SESSION['user_id']."' AND video_id = ".$video_id."");
    return $query->result_array();
  }

  // =========================================================================

  // ============= Menghitung Jumlah Like  Pada Video dari User ============
  public function count_likeConfide($video_id){
      $query= $this->db->query("select count(video_id) AS status_like FROM likes_video WHERE video_id = ".$video_id."");
      return $query->row_array();
  }

  // =========================================================================

  // ============= Menambah Jumlah Like  Pada Video dari User. =============

  public function set_likeVideo(){

      $data = array(
          'video_id' => $this->input->post('id_status'),
          'user_id' => $this->input->post('id_user')
      );

      return $this->db->insert('likes_video', $data);
    }

  // =========================================================================

  // ========== Mengurangi Jumlah Like  Pada Confide dari User. ================

  public function set_unlikeVideo(){

      $data = array(
          'video_id' => $this->input->post('id_status'),
          'user_id' => $this->input->post('id_user')
      );

      return $this->db->delete('likes_video', $data);
    }

    // =========================================================================
}
