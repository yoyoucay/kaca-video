<div class="container my-5" style="max-width:540px;">
    <div class="card px-5 py-5">
        <div class="card-body">
            <h5 class="card-title">Recovery</h5>
            <?= form_open('auth/forgot_password'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda
                        dengan orang lain.</small>
										<?= form_error('email'); ?>
                </div>
                <button type="submit" class="btn btn-raised btn-primary btn-block">Submit</button>
								<?= form_close(); ?>
            <span class="card-text">
                <a href="login">Sudah punya akun?</a><br>
                Belum punya akun? <a href="register">Klik disini!</a>
            </span>
        </div>
    </div>
</div>