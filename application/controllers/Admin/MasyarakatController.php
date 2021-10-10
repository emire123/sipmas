<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasyarakatController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        is_logged_in();
        if ($this->session->userdata('level') != 'petugas') :
            redirect('Auth/BlockedController');
        endif;
    }

    // List all your items
    public function index()
    {
        $data['title'] = 'Masyarakat';
        $data['data_masyarakat'] = $this->db->get('masyarakat')->result_array();

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
        $this->load->view('admin/masyarakat');
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }

    public function delete($nik)
    {

        $nik = htmlspecialchars($nik); // nik masyarakat

        $cek_data = $this->db->get_where('masyarakat', ['nik' => $nik])->row_array();

        if (!empty($cek_data)) :
            $resp = $this->db->delete('masyarakat', ['nik' => $nik]);

            if ($resp) :
                $this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
				Akun berhasil dihapus
				</div>');

                redirect('Admin/MasyarakatController');
            else :
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				Akun gagal dihapus!
				</div>');

                redirect('Admin/MasyarakatController');
            endif;
        else :
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
			Data tidak ada
			</div>');

            redirect('Admin/MasyarakatController');
        endif;
    }

    public function detail($nik)
    {
        $data['title'] = 'Detail Profile';
        $cek_data = $this->db->get_where('pengaduan', ['nik' => $nik])->row_array();

        if (!empty($cek_data)) :
   
         $data['user'] = $this->db->get_where('masyarakat', ['nik' =>
            $this->session->userdata('nik')])->row_array();
            $this->load->view('_part/backend_head', $data);
            $this->load->view('_part/backend_sidebar_v');
            $this->load->view('_part/backend_topbar_v',$data);
            $this->load->view('admin/detailms', $data);
            $this->load->view('_part/backend_footer_v');
            $this->load->view('_part/backend_foot');

            else :
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                data tidak ada
                </div>');

            redirect('Admin/MasyarakatController');
        endif;
    }


        public function tampil(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $alamat = $this ->input ->post ('alamat');
        $telp = $this ->input ->post('telp');
        $foto_profile = $this ->input ->post ('foto_profile');
       

        $data = array(
            
            'nama'=>$nama,
            'alamat'=>$alamat,
            'telp'=>$telp,
            'foto_profile'=>$foto_profile
            
        );
        $where = array(
            'nik'=> $nik

        );
        $this->Petugas_m->tampildata($where,$data,'masyarakat');

}
}

/* End of file LaporanController.php */
/* Location: ./application/controllers/Admin/LaporanController.php */
