<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        is_logged_in();
        if ($this->session->userdata('level') != 'petugas') :
            redirect('Auth/BlockedController');
        endif;
        $this->load->model('Pengaduan_m');
    }

    // List all your items
    public function index()
    {
        $data['title'] = 'Daftar Pengaduan';
        $data['laporan'] = $this->Pengaduan_m->laporan_pengaduan()->result_array();

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $data['petugas'] = $this->db->get('petugas')->result_array();
        if ($masyarakat == TRUE) :
            $data['user'] = $masyarakat;
        elseif ($petugas == TRUE) :
            $data['user'] = $petugas;
        endif;

        $this->load->view('_part/backend_head', $data);
        $this->load->view('_part/backend_sidebar_v');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('admin/generate_laporan');
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }

    public function laporan_pengaduan()
    {
        $data['title'] = 'Cetak Laporan';
        $data['laporan'] = $this->Pengaduan_m->laporan_pengaduan()->result_array();

        $this->load->view('admin/cetak', $data);
    }
}

/* End of file LaporanController.php */
/* Location: ./application/controllers/Admin/LaporanController.php */
