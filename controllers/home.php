<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
	      parent::__construct();
	      $this->is_logged_in();
	}
	
	function is_logged_in()
	{
        $is_logged_in = $this->session->userdata('is_logged_in');
 
        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            echo "You don't have permission to access this page. ";
            echo anchor(base_url().'index.php', 'Login');
            die();
        }
	}
	
	function index()
	{
		$this->load->view('home', array('error' => ' ' ));
	}

	function upload()
	{
		$config['upload_path'] = './images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name']  = $this->session->userdata('username');

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('home', $error);
		}
		else
		{
			$error = array('error' => $this->upload->display_errors());
			echo "<script>alert('Your file was successfully uploaded!');</script>";
			$this->load->view('home', $error);
		}
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */