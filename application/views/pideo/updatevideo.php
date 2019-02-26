<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Video</title>
  </head>
  <body>
    <h1>Halaman update</h1>
    <video class="embed-responsive-item" controls autoplay loop>
        <source src="<?php echo base_url("assets/content/".$content['nama_file']); ?>" type="<?php echo $content['tipe_file']; ?>">
    </video>
    <?php echo form_open('video/edit/'.$content['id']); ?>
    <input type="text" name="judul" value="<?php echo $content['title']; ?>">
    <input type="text" name="deskripsi" value="<?php echo $content['description']; ?>">
    <button type="submit"> Apply </button>
    <?php echo form_close(); ?>
  </body>
</html>
