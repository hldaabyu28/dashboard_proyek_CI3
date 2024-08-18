<?php

class Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Lokasi_model');
    }

    public function index() {
        $data['lokasi'] = $this->Lokasi_model->get_all_lokasi();
        $this->load->view('lokasi_list', $data);
    }

    public function create() {
        if ($this->input->method() === 'post') {
            $data = array(
                'namaLokasi' => $this->input->post('namaLokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
            );
    
            // Debugging: Periksa data yang dikirim
            print_r($data);
            die();
    
            $result = $this->Lokasi_model->create_lokasi($data);
    
            if ($result) {
                redirect('lokasi');  // Arahkan ke halaman lokasi setelah berhasil
            } else {
                // Tangani kesalahan
                echo "Terjadi kesalahan saat menyimpan data.";
            }
        } else {
            $this->load->view('lokasi_create');
        }
    }

    public function edit($id) {
        if ($this->input->method() === 'post') {
            $data = array(
                'namaLokasi' => $this->input->post('namaLokasi'),
                'negara' => $this->input->post('negara'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
            );
            $this->Lokasi_model->update_lokasi($id, $data);
            redirect('lokasi');
        } else {
            $data['lokasi'] = $this->Lokasi_model->get_lokasi_by_id($id);
            if ($data['lokasi']) {
                $this->load->view('lokasi_edit', $data);
            } else {
                show_404();
            }
        }
    }

    public function delete($id) {
        $this->Lokasi_model->delete_lokasi($id);
        redirect('lokasi');
    }
}
