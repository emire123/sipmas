<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        is_logged_in();
    }

    // List all your items
    public function index()
    {
        $data['title'] = 'Profile';

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        if ($masyarakat == TRUE) :
            $data['user'] = $masyarakat;
        elseif ($petugas == TRUE) :
            $data['user'] = $petugas;
        endif;

        $this->load->view('_part/backend_head', $data);
        $this->load->view('_part/backend_sidebar_v');
        $this->load->view('_part/backend_topbar_v');
        $this->load->view('user/profile');
        $this->load->view('_part/backend_footer_v');
        $this->load->view('_part/backend_foot');
    }
    public function edit()
    {
        $data['title'] = 'Profile';

        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();

        $data['petugas'] = $this->db->get('petugas')->result_array();
        if ($masyarakat == TRUE) :
            $data['user'] = $masyarakat;
        elseif ($petugas == TRUE) :
            $data['user'] = $petugas;
        endif;

        if ($this->form_validation->run() == false) {

            $this->load->view('_part/backend_head', $data);
            $this->load->view('_part/backend_sidebar_v');
            $this->load->view('_part/backend_topbar_v');
            $this->load->view('user/edit_foto', $data);
            $this->load->view('_part/backend_footer_v');
            $this->load->view('_part/backend_foot');
        } else {
            $username = $this->input->post('username');
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['foto_profile']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_profile')) {
                    $old_image = $petugas['foto_profile'];
                    if ($old_image != 'user.png') {
                        unlink(FCPATH . 'assets/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    var_dump($new_image);
                    die;
                    $this->db->set('foto_profile', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->where('username', $username);
            $this->db->update('petugas');

            redirect('User/ProfileController');
        }
    }

    public function update_foto()
    {
        $masyarakat = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $petugas = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        if ($masyarakat == TRUE) :
            $data = $masyarakat;
        elseif ($petugas == TRUE) :
            $data = $petugas;
        endif;
        $username = $this->input->post('username');

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto_profile']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_profile')) {
                $old_image = $data['foto_profile'];
                if ($old_image != 'user.png') {
                    unlink(FCPATH . 'assets/profile/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_profile', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        $this->db->where('username', $username);
        if ($masyarakat == TRUE) :
            $this->db->update('masyarakat');
        elseif ($petugas == TRUE) :
            $this->db->update('petugas');
        endif;

        redirect('User/ProfileController');
    }
}

/* End of file ProfileController.php */
/* Location: ./application/controllers/User/ProfileController.php */
