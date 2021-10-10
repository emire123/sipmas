<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaduan_m');
	}
	public function index()
	{
        $data['laporan'] = $this->Pengaduan_m->laporan_pengaduan()->result_array();
        $this->load->view('admin/cetak',$data);
	}
}