<?php

class Login extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->model('m_login');
        $this->load->model('m_tulisan');
        $this->load->model('m_pengguna');
    }

    function index() {
        $this->load->view('v_login');
    }

    function simpan_pengguna() {
        $nama = $this->input->post('xnama');
        $jenkel = $this->input->post('xjenkel');
        $username = $this->input->post('xusername');
        $password = $this->input->post('xpassword');
        $konfirm_password = $this->input->post('xpassword2');
        $email = $this->input->post('xemail');
        $nohp = $this->input->post('xkontak');
        $level = $this->input->post('xlevel');
        
            $this->m_pengguna->simpan_pengguna_tanpa_gambar($nama, $jenkel, $username, $password, $email, $nohp, $level);
            echo $this->session->set_flashdata('msg', 'succes');
            redirect('Login');
        }
    

    function auth() {
        $username = strip_tags(str_replace("'", "", $this->input->post('username', TRUE)));
        $password = strip_tags(str_replace("'", "", $this->input->post('password', TRUE)));
        $cadmin = $this->m_login->cekadmin($username, $password);
        if ($cadmin->num_rows() > 0) {
            $xcadmin = $cadmin->row_array();
            $newdata = array(
                'idadmin' => $xcadmin['pengguna_id'],
                'username' => $xcadmin['pengguna_username'],
                'nama' => $xcadmin['pengguna_nama'],
                'level' => $xcadmin['pengguna_level'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            redirect('dashboard');
            
        } else {
            redirect('administrator/gagallogin');
        }
    }

//    function dashboard() {
//        $jum = $this->m_tulisan->berita();
//        $page = $this->uri->segment(3);
//        if (!$page):
//            $offset = 0;
//        else:
//            $offset = $page;
//        endif;
//        $limit = 6;
//        $config['base_url'] = base_url() . 'login/dashboard/';
//        $config['total_rows'] = $jum->num_rows();
//        $config['per_page'] = $limit;
//        $config['uri_segment'] = 3;
//        $config['first_link'] = 'Awal';
//        $config['last_link'] = 'Akhir';
//        $config['next_link'] = 'Next >>';
//        $config['prev_link'] = '<< Prev';
//        $this->pagination->initialize($config);
//        $x['page'] = $this->pagination->create_links();
//        $x['data'] = $this->m_tulisan->berita_perpage($offset, $limit);
//        $this->load->view('v_dashboard', $x);
//    }
    
    

    function gagallogin() {
        $url = base_url('administrator');
        echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
        redirect($url);
    }

    function logout() {
        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }

}
