<?php

class About extends CI_Controller {

    public function index($nama = 'Mega', $pekerjaan = 'Software Developer', $umur = 23)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Page';
        $this->load->view('templates/header', $data);
        $this->load->view('about/page');
        $this->load->view('templates/footer');
    }
}