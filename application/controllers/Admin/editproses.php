	
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class editproses extends CI_Controller
{

		public function tanggapan_detail()
	{
		$masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
		$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

		$data['petugas'] = $this->db->get('petugas')->result_array();
		if ($masyarakat == TRUE) :
			$data['user'] = $masyarakat;
		elseif ($petugas == TRUE) :
			$data['user'] = $petugas;
		endif;

		$id = htmlspecialchars($this->input->post('id', true)); // id pengaduan

		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Beri Tanggapan';
			$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_masyarakat_id(htmlspecialchars($id))->row_array();

			$this->load->view('_part/backend_head', $data);
			$this->load->view('_part/backend_sidebar_v');
			$this->load->view('_part/backend_topbar_v');
			$this->load->view('admin/tanggapan_detail');
			$this->load->view('_part/backend_footer_v');
			$this->load->view('_part/backend_foot');

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController');
		endif;
	}

	public function tanggapan_detail_result()
	{
		$masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
		$petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

		$data['petugas'] = $this->db->get('petugas')->result_array();
		if ($masyarakat == TRUE) :
			$data['user'] = $masyarakat;
		elseif ($petugas == TRUE) :
			$data['user'] = $petugas;
		endif;

		$id = htmlspecialchars($this->input->post('id', true)); // id pengaduan

		$cek_data = $this->db->get_where('pengaduan', ['id_pengaduan' => $id])->row_array();

		if (!empty($cek_data)) :

			$data['title'] = 'Detail Pengaduan';
			$data['data_pengaduan'] = $this->Pengaduan_m->data_pengaduan_tanggapan(htmlspecialchars($id))->row_array();

			$this->load->view('_part/backend_head', $data);
			$this->load->view('_part/backend_sidebar_v');
			$this->load->view('_part/backend_topbar_v');
			$this->load->view('admin/tanggapan_detail_result');
			$this->load->view('_part/backend_footer_v');
			$this->load->view('_part/backend_foot');

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('Admin/TanggapanController');
		endif;
	}
}