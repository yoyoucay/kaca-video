<div class="container my-5" style="max-width:720px;">
    <div class="card px-5 py-5">
        <div class="card-body">
            <h5 class="card-title">Register</h5>
            <?= form_open('register'); ?>

                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" name="full_name" class="form-control" id="fullname" placeholder="Masukkan nama lengkapmu">
					<?= form_error('full_name'); ?>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Hanya bisa angka dan huruf"  autocorrect="off" autocapitalize="none">
					<?= form_error('username'); ?>
                </div>

                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukan email yang valid">
					<?= form_error('email'); ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Masukan kata sandi anda">
					<?= form_error('password'); ?>
                </div>

                <div class="form-group">
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi kata sandi">
					<?= form_error('password2'); ?>
                </div>

                <button type="submit" class="btn btn-raised btn-primary btn-block">Submit</button>
			<?= form_close(); ?>
            <span class="card-text">
                Sudah punya akun? <a href="login">Klik disini!</a>
            </span>
        </div>
    </div>
</div>