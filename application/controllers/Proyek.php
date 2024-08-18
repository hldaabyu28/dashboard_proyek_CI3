<?php
class Proyek extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->library('curl');  // Muat library cURL
    }
    
    public function index() {
        $this->load->model('Proyek_model');
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $this->load->view('proyek_list', $data);
    }

    public function create() {
        if ($this->input->method() === 'post') {
            $data = array(
                'namaProyek' => $this->input->post('namaProyek'),
                'client' => $this->input->post('client'),
                'tglMulai' => $this->input->post('tglMulai'),
                'tglSelesai' => $this->input->post('tglSelesai'),
                'pimpinanProyek' => $this->input->post('pimpinanProyek'),
                'keterangan' => $this->input->post('keterangan'),
            );

            $result = $this->Proyek_model->create_proyek($data);

            if ($result) {
                redirect('proyek');  // Arahkan ke halaman proyek setelah berhasil
            } else {
                // Tangani kesalahan
                echo "Terjadi kesalahan saat menyimpan data.";
            }
        } else {
            // Jika bukan POST request
            show_404();
        }
    }

    public function edit($id) {
        $this->load->model('Proyek_model');
        if ($_POST) {
            $data = array(
                'namaProyek' => $this->input->post('namaProyek'),
                'client' => $this->input->post('client'),
                'pimpinanProyek' => $this->input->post('pimpinanProyek'),
                'tglMulai' => $this->input->post('tglMulai'),
                'tglSelesai' => $this->input->post('tglSelesai'),
                'keterangan' => $this->input->post('keterangan'),
                
            );
            $this->Proyek_model->update_proyek($id, $data);
            redirect('proyek');
        } else {
            $data['proyek'] = $this->Proyek_model->get_proyek_by_id($id);
            $this->load->view('proyek_edit', $data);
        }
    }

    public function delete($id) {
        $this->load->model('Proyek_model');
        $this->Proyek_model->delete_proyek($id);
        redirect('proyek');
    }

    public function gabung($proyekId, $lokasiId) {
        $data = array(
            'proyekId' => $proyekId,
            'lokasiId' => $lokasiId
        );
        $this->curl->simple_post('http://localhost:8080/api/proyek-lokasi', $data);
        redirect('proyek');
    }
}
