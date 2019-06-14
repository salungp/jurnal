<div class="auth-wrapper">
	<div class="form-box">
		<form action="<?= base_url('home/login'); ?>" method="POST">
			<h1 class="text-subheading">Login</h1>
			<?php Flasher::get_data(); ?>
			<div class="input-group">
				<input type="text" name="username" class="form-control" required><label>USERNAME</label>
			</div>
			<div class="input-group">
				<input type="password" name="password" class="form-control" id="password" required><label>PASSWORD</label>
			</div>
			<input type="checkbox" id="showPassword"><label id="label">Show Password</label>
			<button type="submit">LOGIN</button>
		</form>
	</div>
</div>