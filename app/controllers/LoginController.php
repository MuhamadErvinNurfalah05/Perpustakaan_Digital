<?php 
class LoginController extends Controller
{
  public function index()
  {
    $this->view('login');
  }

  public function login()
	{
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		$data 	  = $this->model('User')->getByUsername($Username);

		// periksa ketersediaan username
		if (!empty($data)) {
			// Periksa kecocokan password
			if (password_verify($Password, $data['password'])) {
				$_SESSION['login']		= true;
				$_SESSION['username']	= $data['username'];
				$_SESSION['level']		  = $data['level'];
				$_SESSION['user_id']	  = $data['user_id'];
				redirectTo('success', 'Selamat datang kembali!', '/');
			} else {
				redirectTo('error', 'Maaf, Password salah!', '/login');
			}
		} else {
			redirectTo('error', 'Maaf, Username tidak terdaftar!', '/login');
		}
	}

  public function register()
  {
    $this->view('register');
  }

  public function registers()
  {
    if ($_POST['Password'] !== $_POST['PasswordConfirm']) {
      redirectTo('error', 'Maaf, Konfirmasi password tidak cocok!', '/login/register');
    } else {
      if ($this->model('User')->create([
        'username'      => $_POST['Username'],
        'email'         => $_POST['Email'],
        'nama_lengkap'   => $_POST['nama_lengkap'],
        'alamat'        => $_POST['alamat'],
        'no_hp'         => $_POST['no_hp'],
        'password'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'level'         => $_POST['level']
      ]) > 0) {
        redirectTo('success', 'Selamat, Registrasi berhasil', '/login/register');
      } else {
        redirectTo('error', 'Maaf, Username/Email sudah terdaftar', '/login/register');
      }
    }
  }

  public function logout()
	{
		session_destroy();
		session_unset();
		redirectTo('success', 'Selamat, Anda berhasil logout!', '/login');
	}
}