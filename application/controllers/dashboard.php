<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_tulisan');
        $this->load->model('m_kategori');
    }

    function detail() {
        $jum = $this->m_tulisan->berita();
        $page = $this->uri->segment(3);
        if (!$page):
            $offset = 0;
        else:
            $offset = $page;
        //$config['cur_tag_open'] = '<li class="active"><a href="#">';
        endif;
        $limit = 6;
        $config['base_url'] = base_url() . 'dashboard/detail/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $this->pagination->initialize($config);
        $x['page'] = $this->pagination->create_links();
        $x['data'] = $this->m_tulisan->berita_perpage($offset, $limit);
        $x['kat'] = $this->m_kategori->get_all_kategori();
        $this->load->view('v_dashboard', $x);
    }

    function index() {
        $jum = $this->m_tulisan->berita();
        $page = $this->uri->segment(3);
        if (!$page):
            $offset = 0;
        else:
            $offset = $page;
        //$config['cur_tag_open'] = '<li class="active"><a href="#">';
        endif;
        $limit = 6;
        $config['base_url'] = base_url() . 'dashboard/detail/';
        $config['total_rows'] = $jum->num_rows();
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['next_link'] = 'Next >>';
        $config['prev_link'] = '<< Prev';
        $config['full_tag_open'] = '<ul class="pager">';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $this->pagination->initialize($config);
        $x['page'] = $this->pagination->create_links();
        $x['data'] = $this->m_tulisan->berita_perpage($offset, $limit);
        $x['kat'] = $this->m_kategori->get_all_kategori();
        $this->load->view('v_dashboard', $x);
    }

    function search() {
        $keyword = $this->input->post('search');
        echo $keyword;
        $x['data'] = $this->m_tulisan->search_tulisan($keyword);
        $this->load->view('v_dashboard', $x);
    }

    function search_by_kategori() {
        $category_id = $this->input->post('id', TRUE);
        echo $category_id;
        $data = $this->m_tulisan->get_tulisan_by_kategori($category_id)->result();
        //$this->load->view('v_dashboard', $x);
        echo json_encode($data);
    }

}
