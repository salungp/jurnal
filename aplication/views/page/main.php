<?php checked(); ?>
<?php Flasher::get_data(); ?>
<h1 class="text-subheading">Jurnal</h1>
<button class="btn btn-modal">+ Isi Jurnal</button>
<div class="table-wrapper">
	<table cellspacing="0">
		<tr>
			<th>Id</th>
			<th>Mapel</th>
			<th>Guru Pembimbing</th>
			<th>Jumlah Siswa</th>
			<th>Jumlah Masuk</th>
			<th>Sakit</th>
			<th>Izin</th>
			<th>Tanggal</th>
			<th>Dibuat Oleh</th>
		</tr>
		<?php foreach ($data['jurnal'] as $jurnal) : ?>
			<tr>
				<td><?= $jurnal['id']; ?></td>
				<td><?= $jurnal['mapel']; ?></td>
				<td><?= $jurnal['guru']; ?></td>
				<td><?= $jurnal['jumlah_siswa']; ?></td>
				<td><?= $jurnal['jumlah_masuk']; ?></td>
				<td><?= $jurnal['sakit']; ?></td>
				<td><?= $jurnal['izin']; ?></td>
				<td><?= $jurnal['tanggal']; ?></td>
				<td><?= $jurnal['added_by']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>

<div class="box-modal">
	<div class="box">
		<h1 class="text-subheading">Isi Jurnal</h1>
		<form action="<?= base_url('home/tambah_jurnal'); ?>" method="POST">
			<label for="nama">Mapel</label><br>
			<select name="mapel" clas="form-control">
				<option>Bahasa Indonesia</option>
				<option>Bahasa Jawa</option>
				<option>Bahasa Inggris</option>
				<option>Fisika</option>
				<option>Kimia</option>
				<option>Ppkn</option>
				<option>Matematika</option>
			</select><br>
			<label for="nama">Guru Pembimbing</label><br>
			<input type="text" name="guru" class="form-control" required>
			<label for="kelas">Kelas</label><br>
			<select name="kelas" clas="form-control">
				<option value="x rpl 1">x rpl 1</option>
				<option value="x rpl 2">x rpl 2</option>
				<option value="x akl 1">x akl 1</option>
				<option value="x akl 2">x akl 2</option>
				<option value="x bdp 1">x bdp 1</option>
				<option value="x bdp 2">x bdp 2</option>
			</select><br>
			<label>Jumlah Siswa</label><br>
			<input type="number" name="jumlah_siswa" class="form-control" required>
			<label>Jumlah Masuk</label><br>
			<input type="number" name="jumlah_masuk" class="form-control" required>
			<label>Sakit</label><br>
			<input type="number" name="sakit" class="form-control" required>
			<label>Izin</label><br>
			<input type="number" name="izin" class="form-control" required>
			<button class="btn" type="submit">Simpan</button>
			<button class="btn btn-close" type="button">Tutup</button>
		</form>
	</div>
</div>