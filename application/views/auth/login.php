<div class="container my-5" style="max-width:540px;">
    <div class="card px-5 py-5">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <?= form_open('login'); ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda
                        dengan orang lain.</small>
										<?= form_error('email'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										<?= form_error('password'); ?>
                </div>
                <button type="submit" class="btn btn-raised btn-primary btn-block">Submit</button>
            <?= form_close(); ?>
            <span class="card-text">
                <a href="forgot">Lupa kata sandi?</a><br>
                Belum punya akun? <a href="register">Klik disini!</a>
            </span>
        </div>
    </div>
</div>