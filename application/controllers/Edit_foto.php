<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_foto extends CI_Controller {

	public function edit_foto()
	{
		$this->load->view('_part/backend_head', $data);
		$this->load->view('_part/backend_sidebar_v');
		$this->load->view('_part/backend_topbar_v');
		$this->load->view('admin/edit_foto');
		$this->load->view('_part/backend_footer_v');
		$this->load->view('_part/backend_foot');
	}
}