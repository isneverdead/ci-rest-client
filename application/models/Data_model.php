<?php 
use GuzzleHttp\Client;

    class Data_model extends CI_model {
        
        private $_client;
        public function __construct() {
            $this->_client = new Client([
                'base_uri' => 'localhost/kuliah/ci-rest-server/api/'
            ]);
        }
        public function getAllData() {
            $response = $this->_client->request('GET', 'mahasiswa');
            $result = json_decode($response->getBody()->getContents(), true);
            return $result['data'];
        }

        public function getDataById($id) {
            $response = $this->_client->request('GET', 'mahasiswa', [
                'query' => [
                    'id' => $id
                ]
            ]);
            $result = json_decode($response->getBody()->getContents(), true);
            return $result['data'][0];
        }

        public function tambahData() {
            $data = [
                "nama" => $this->input->post('nama', true),
                "nim" => $this->input->post('nim', true),
                "jurusan" => $this->input->post('jurusan', true),
            ];
            $response = $this->_client->request('POST', 'mahasiswa', [
                'form_params' => $data
            ]);
            $result = json_decode($response->getBody()->getContents(), true);
            return $result;
        }

        public function hapusData($id) {
            $response = $this->_client->request('DELETE', 'mahasiswa', [
                'form_params' => [
                    'id' => $id
                ]
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            return $result;
        }

        public function ubahData() {
            $data = [
                "id" => $this->input->post('id', true),
                "nama" => $this->input->post('nama', true),
                "nim" => $this->input->post('nim', true),
                "jurusan" => $this->input->post('jurusan', true),
            ];
            $response = $this->_client->request('PUT', 'mahasiswa', [
                'form_params' => $data
            ]);
            $result = json_decode($response->getBody()->getContents(), true);
            return $result;
        }

    }
?>