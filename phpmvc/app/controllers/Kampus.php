<?php 

class Kampus extends Controller{
    public function index() {
        $data['judul'] = 'List Prodi';
        $data['kms'] = $this->model('Kampus_model')->getAllKampus();
        $this->view('templates/header', $data);
        $this->view('kampus/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail Prodi';
        $data['kms'] = $this->model('Kampus_model')->getKampusById($id);
        $this->view('templates/header', $data);
        $this->view('kampus/detail', $data);
        $this->view('templates/footer');
    }
}