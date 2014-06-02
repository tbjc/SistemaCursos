<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$error = 3;
		$data['error'] = $error;
		$this->load->view('logueo', $data);
	}

	public function login(){
		$error = 0;
		//se obtienen datos de usuario y password de la vista
		$usuario = $this->input->post('usuario');
		$password = $this->input->post('password');
		if (($usuario == '') or ($password == '')) {
			//si son valores nulos
			$data['error'] = $error;
			$this->load->view('logueo', $data);
		}else{
			//se carga el modelo usuario
			$this->load->model('usuario');
			//se hace la consulta de la base de datos
			$user = $this->usuario->ObtenerUsuario($usuario);
			//se comprueban los datos
			if ($user != null) {
				//si el resultado no es nulo
				if ($password == $user[0]->pass) {
					//si la contraseña es correcta
					if ($user[0]->tipo == 'administrador') {
						$nom = $user[0]->nombre;
						$data['nom'] = $nom;
						$this->load->view('administrador',$data);
					}else if ($user[0]->tipo == 'profesor') {
						$nom = $user[0]->nombre;
						$data['nom'] = $nom;
						$this->load->view('maestro',$data);
					}else{
						$this->load->view('welcome_message');
					}
				}else{
					//si la contraseña no es correcta
					$error = 2;
					$data['error'] = $error;
					$this->load->view('logueo', $data);
				}
			}else{
				$error = 1;
				$data['error'] = $error;
				$this->load->view('logueo', $data);
			}
		}
		
	}

	public function recuperaPass(){
		$this->load->library("email");
		
		//configuracion para usar smtp con gmail
		$configGmail= array(
			'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 587,
            'smtp_user' => 'jose.tbjc@gmail.com',
            'smtp_pass' => 'tbjc.17934862',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
			);

		//configuracion para mandar el mail
		
		//carga la configuracion de gmail
		$this->email->initialize($configGmail);
		
		$correo = $this->input->post('nmail');
		//de donde se manda el correo
		$this->email->from('jose.tbjc@gmail.com', 'proyecto');
		//destino del correo
		$this->email->to($correo);
		//asunto del correo
		$this->email->subject('recuperacion de contraseña');
		//mensaje del correo
		$this->email->message('<h2>mandado de codeigniter</h2>');
		//Envio del correo
		if ($this->email->send()) {
			//si se logro mandar
			$error = 5;
			$data['error'] = $error;
			$this->load->view('logueo', $data);
		}else{
			//si no se logro mandar
			echo $this->email->print_debugger();
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */