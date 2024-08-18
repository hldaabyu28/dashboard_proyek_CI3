<?php
class Proyek_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Muat library cURL
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

    public function get_all_proyek() {
        $response = $this->_curl_request('http://localhost:8080/api/proyek');
        return json_decode($response, true);
    }

    public function create_proyek($data) {
        $response = $this->_curl_request('http://localhost:8080/api/proyek', 'POST', $data);
        return $response;
    }

    public function update_proyek($id, $data) {
        $response = $this->_curl_request("http://localhost:8080/api/proyek/{$id}", 'PUT', $data);
        return $response;
    }

    public function delete_proyek($id) {
        $response = $this->_curl_request("http://localhost:8080/api/proyek/{$id}", 'DELETE');
        return $response;
    }

    public function get_proyek_by_id($id) {
        $response = $this->_curl_request("http://localhost:8080/api/proyek/{$id}");
        return json_decode($response, true);
    }
}
