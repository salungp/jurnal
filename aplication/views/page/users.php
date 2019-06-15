<?php checked(); ?>
<?php Flasher::get_data(); ?>
<h1 class="text-subheading">Data User</h1>
<button class="btn btn-modal">+ Tambah User</button>
<div class="table-wrapper">
	<table cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Status</th>
			<th>Tanggal Dibuat</th>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php foreach ($data['users'] as $user) : ?>
			<tr>
				<td><?= $user['id']; ?></td>
				<td><?= $user['nama']; ?></td>
				<td><?= ucfirst($user['status']); ?></td>
				<td><?= $user['date_created']; ?></td>
				<td><?= $user['username']; ?></td>
				<td><?= $user['password']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<div class="box-modal">
	<div class="box">
		<h1 class="text-subheading">Tambah User</h1>
		<form action="<?= base_url('home/tambah_user'); ?>" method="POST">
			<label for="nama">Nama</label><br>
			<input type="text" name="nama" class="form-control" required="Form isian tidak boleh kosong!">
			<label for="status">Status</label><br>
			<select name="status" clas="form-control">
				<?php if ($_SESSION['logged_in'][4] == 'admin') : ?>
					<option>Admin</option>
				<?php endif; ?>
				<?php if ($_SESSION['logged_in'][4] == 'guru' || $_SESSION['logged_in'][4] == 'admin') : ?>
					<option>Guru</option>
				<?php endif; ?>
				<option>Murid</option>
			</select><br>
			<button class="btn" type="submit">Simpan</button>
			<button class="btn btn-close" type="button">Tutup</button>
		</form>
	</div>
</div>