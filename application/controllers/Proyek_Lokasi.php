<?php
class Proyek_Lokasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Proyek_model');
        $this->load->model('Lokasi_model');  // Pastikan model ini dimuat
    }

    public function create() {
        if ($this->input->post()) {
            $data = $this->input->post();
            $url = 'http://localhost:8080/api/proyek-lokasi';
            $response = $this->curl->simple_post($url, $data, array(CURLOPT_BUFFERSIZE => 10));
            redirect('proyek_lokasi');
        }

        $data['proyek'] = $this->Proyek_model->getAllProyek();
        $data['lokasi'] = $this->Lokasi_model->getAllLokasi();  // Mengambil data lokasi
        $this->load->view('proyek_lokasi/create', $data);
    }
}
