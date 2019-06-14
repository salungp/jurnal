<?php
class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'Menu | Login';

		$this->view('templates/header', $data);
		$this->view('menu/index');
		$this->view('templates/footer');
	}

	public function main()
	{
		$data['title'] = 'Jurnal | Halaman Depan';

		$this->view('templates/sidebar', $data);
		$this->view('page/welcome');
		$this->view('templates/admin_footer');
	}

	public function jurnal()
	{
		$data['jurnal'] = $this->model('home_model')->get('jurnal');
		$data['title'] = 'Jurnal | Halaman Depan';

		$this->view('templates/sidebar', $data);
		$this->view('page/main', $data);
		$this->view('templates/admin_footer');
	}

	public function users()
	{
		$data['users'] = $this->model('home_model')->get('users');
		$data['title'] = 'Jurnal | Halaman Users';

		$this->view('templates/sidebar', $data);
		$this->view('page/users', $data);
		$this->view('templates/admin_footer');
	}

	public function tambah_user()
	{
		if ($this->model('home_model')->insert_user() > 0)
		{
			Flasher::set_data("<div class='alert-success'>Data berhasil Ditambahkan!</div>");
			redirect('home/users');
		}
	}

	public function login()
	{
		if ($this->model('home_model')->login() == 1)
		{
			Flasher::set_data("<div class='alert-success'>Data berhasil Ditambahkan!</div>");
			redirect('home/main');
		} else if ($this->model('home_model')->login() == 2)
		{
			Flasher::set_data("<div class='alert-danger'>Pasword anda salah!</div>");
			redirect('');
		} else
		{
			Flasher::set_data("<div class='alert-danger'>Maaf email anda tidak terdaftar!</div>");
			redirect('');
		}
	}

	public function name()
	{
		if (isset($_SESSION['logged_in']))
		{
			return $_SESSION['logged_in'][1];
		}
	}

	public function logout()
	{
		session_unset();
		session_destroy();
		redirect('');
	}

	public function tambah_jurnal()
	{
		if ($this->model('home_model')->insert_jurnal() > 0)
		{
			Flasher::set_data("<div class='alert-success'>Data berhasil Ditambahkan!</div>");
			redirect('home/main');
		}
	}
}