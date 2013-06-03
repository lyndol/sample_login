<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	 function sign_up()
	{
		$data = array(
			'fullname' => $this->input->post('fullname'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
			);
			
		$this->db->insert('tbl_account', $data); 
		$this->load->view('welcome_message');
	}
	
	
	function login()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('tbl_account');
		
		if($query->num_rows == 1) // if the user's credentials validated...
		{
			$data = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
		$this->session->set_userdata($data);
		redirect('home');
		}
		else
		{
			echo "Invalid Login!";
			$this->load->view('welcome_message');
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
        redirect('welcome');	
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */