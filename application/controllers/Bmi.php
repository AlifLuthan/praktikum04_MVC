<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Bmi extends CI_Controller {
        public function index() {
            // load atau memanggil model
            $this->load->model('pasien_model','pasien1');
            // object model 1
            $this->pasien1->id=1;
            $this->pasien1->kode='010001';
            $this->pasien1->nama='Faiz Fikri';
            $this->pasien1->tmp_lahir='Jakarta';
            $this->pasien1->tgl_lahir='2001-07-05';
            $this->pasien1->gender='L';
            // load Model Bmi
            $this->load->model('bmi_model','bmi1');
            $this->bmi1->tinggi=169;
            $this->bmi1->berat=64.2;
            // load Model BMIPasien
            $this->load->model('bmipasien_model','bmipasien1');
            $this->bmipasien1->id=1;
            $this->bmipasien1->tanggal='2021-04-11';
            $this->bmipasien1->pasien= $this->pasien1;
            $this->bmipasien1->bmi= $this->bmi1;

            // load atau memanggil model
            $this->load->model('pasien_model','pasien2');
            // object model 2
            $this->pasien2->id=2;
            $this->pasien2->kode='020001';
            $this->pasien2->nama='PandanWangi';
            $this->pasien2->tmp_lahir='Jakarta';
            $this->pasien2->tgl_lahir='2001-03-05';
            $this->pasien2->gender='P';
            // load Model Bmi
            $this->load->model('bmi_model','bmi2');
            $this->bmi2->tinggi=152;
            $this->bmi2->berat=40.2;
            // load Model BMIPasien
            $this->load->model('bmipasien_model','bmipasien2');
            $this->bmipasien2->id=2;
            $this->bmipasien2->tanggal='2021-04-12';
            $this->bmipasien2->pasien= $this->pasien2;
            $this->bmipasien2->bmi= $this->bmi2; 

            // load atau memanggil model
            $this->load->model('pasien_model','pasien3');
            // object model 3
            $this->pasien3->id=3;
            $this->pasien3->kode='030001';
            $this->pasien3->nama='AlifLuthan';
            $this->pasien3->tmp_lahir='Depok';
            $this->pasien3->tgl_lahir='2001-05-05';
            $this->pasien3->gender='L';
            // load Model Bmi
            $this->load->model('bmi_model','bmi3');
            $this->bmi3->tinggi=183;
            $this->bmi3->berat=84.8;
            // load Model BMIPasien
            $this->load->model('bmipasien_model','bmipasien3');
            $this->bmipasien3->id=3;
            $this->bmipasien3->tanggal='2021-04-13';
            $this->bmipasien3->pasien= $this->pasien3;
            $this->bmipasien3->bmi= $this->bmi3;
 
            // simpan object ke dalam array
            $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
            $list_bmi = [$this->bmi1, $this->bmi2, $this->bmi3];
            $list_bmipasien = [$this->bmipasien1, $this->bmipasien2, $this->bmipasien3];

            // siapin data untuk dikirim ke view
            $data['list_pasien'] = $list_pasien;
            $data['list_bmi'] = $list_bmi;
            $data['list_bmipasien'] = $list_bmipasien;

            // render view
            $this->load->view('layouts/header');
            $this->load->view('bmi/index', $data);
            $this->load->view('layouts/footer');
    }
}
?>