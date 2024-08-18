<?php

class Lokasi_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('curl');
    }

    private function _curl_request($url, $method = 'GET', $data = array()) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
        if ($method === 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        } elseif ($method === 'PUT') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        } elseif ($method === 'DELETE') {
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        }
    
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    
        return $response;
    }
    

    public function get_all_lokasi() {
        $response = $this->_curl_request('http://localhost:8080/api/lokasi');
        return json_decode($response, true);
    }

    public function get_lokasi_by_id($id) {
        $response = $this->_curl_request("http://localhost:8080/api/lokasi/{$id}");
        return json_decode($response, true);
    }
    public function create_lokasi($data) {
        $url = 'http://localhost:8080/api/lokasi';
        $response = $this->_curl_request($url, 'POST', $data);
    
        // Debugging: Periksa respons dari API
        echo "Response: ";
        print_r($response);
        die();
    
        return json_decode($response, true);
    }
    
    

    public function update_lokasi($id, $data) {
        $response = $this->_curl_request("http://localhost:8080/api/lokasi/{$id}", 'PUT', $data);
        return json_decode($response, true);  // Pastikan response dikembalikan sebagai array
    }

    public function delete_lokasi($id) {
        $response = $this->_curl_request("http://localhost:8080/api/lokasi/{$id}", 'DELETE');
        return json_decode($response, true);  // Pastikan response dikembalikan sebagai array
    }
}
