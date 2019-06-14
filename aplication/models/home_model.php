<?php
class home_model
{
	public $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function get($table)
	{
		$this->db->query('SELECT * FROM '.$table);
		return $this->db->result_array();
	}

	public function insert_user()
	{
		$nama = $_POST['nama'];
		$tanggal = date('Y-j-n');
		$username = explode(' ', $nama);
		$username = implode('-', $username);
		$username = strtolower($username);
		$password = uniqid();
		$password = substr($password, 1, 8);
		$status = strtolower($_POST['status']);

		$this->db->insert('INSERT INTO users (id, nama, status, date_created, username, password, added_by) VALUES (:id, :nama, :status, :date_created, :username, :password, :added_by)', array(':id' => '', ':nama' => $nama, ':status' => $status, ':date_created' => $tanggal, ':username' => $username, 'password' => $password, ':added_by' => 1));

		return 1;
	}

	public function insert_jurnal()
	{
		$added_by = $_SESSION['logged_in'][2];
		$this->db->get_where("SELECT * FROM users WHERE id = $added_by");
		$data = $this->db->row_array();
		$mapel = $_POST['mapel'];
		$guru = $_POST['guru'];
		$tanggal = date('Y-j-n');
		$jumlah_siswa = $_POST['jumlah_siswa'];
		$jumlah_masuk = $_POST['jumlah_masuk'];
		$sakit = $_POST['sakit'];
		$izin = $_POST['izin'];
		$kelas = $_POST['kelas'];

		$this->db->insert('INSERT INTO jurnal (id, kelas, jumlah_siswa, jumlah_masuk, sakit, izin, mapel, guru, added_by, tanggal) VALUES (:id, :kelas, :jumlah_siswa, :jumlah_masuk, :sakit, :izin, :mapel, :guru, :added_by, :tanggal)', array(':id' => '', ':kelas' => $kelas, ':jumlah_siswa' => $jumlah_siswa, ':jumlah_masuk' => $jumlah_masuk, ':sakit' => $sakit, ':izin' => $izin, ':mapel' => $mapel, ':guru' => $guru, ':added_by' => $data['nama'], ':tanggal' => $tanggal));

		return 1;
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$this->db->query("SELECT * FROM users WHERE username = '$username'");
		$data = $this->db->row_array();

		if ($data)
		{
			if ($data['password'] == $password)
			{
				$_SESSION['logged_in'] = array($data['username'], $data['nama'], $data['id'], true, $data['status']);
				return 1;
			}

			return 2;
		} else {
			return 3;
		}
	}
}