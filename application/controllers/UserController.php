<?php

/**
 * Description of UserController
 *
 * @author https://roytuts.com
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('usermodel');
    }

    public function index() {
        if ($this->input->post('finish')) {
            $this->form_validation->set_rules('name', 'Nama Lengkap', 'trim|required');
            $this->form_validation->set_rules('instansi', 'Universitas/Instansi/Lembaga', 'trim|required');
            $this->form_validation->set_rules('address', 'Alamat Rumah', 'trim|required');
            $this->form_validation->set_rules('jurusan', 'Jurusan/Program', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            $this->form_validation->set_rules('NIK', 'NIP/NIM/NIK', 'trim|required');
            $this->form_validation->set_rules('perihal', 'Perihal Penelitian', 'trim|required');
            $this->form_validation->set_rules('waktu_mulai_penelitian', 'Waktu/Lama Penelitian', 'trim|required');
             $this->form_validation->set_rules('waktu_selesai_penelitian', 'Waktu/Lama Penelitian', 'trim|required');
            $this->form_validation->set_rules('lokasi_penelitian', 'Lokasi/Tempat Penelitian', 'trim|required');
            $this->form_validation->set_rules('tembusan_surat', 'Tembusan Surat', 'trim|required');
            $this->form_validation->set_rules('anggota_tim', 'Anggota Tim Peneliti', 'trim|required');
            $this->form_validation->set_rules('surat_pengantar', 'Surat Pengantar', 'trim|required');
            $this->form_validation->set_rules('proposal_penelitian', 'Proposal Penelitian', 'trim|required');
            $this->form_validation->set_rules('fotocopy_KTP', 'Fotocopy KTP', 'trim|required');
            $this->form_validation->set_rules('surat_kesediaan_penelitian', 'Surat Kesediaan Penelitian', 'trim|required');
            $this->form_validation->set_rules('surat_pernyataan', 'Surat Pernyataan', 'trim|required');

            if ($this->form_validation->run() !== FALSE) {
                $result = $this->usermodel->insert_user(
                    $this->input->post('name'), 
                    $this->input->post('instansi'), 
                    $this->input->post('address'), 
                    $this->input->post('jurusan'), 
                    $this->input->post('status'), 
                    $this->input->post('NIK'), 
                    $this->input->post('perihal'),
                    $this->input->post('waktu_mulai_penelitian'),
                    $this->input->post('waktu_selesai_penelitian'),
                    $this->input->post('lokasi_penelitian'),
                    $this->input->post('tembusan_surat'),
                    $this->input->post('anggota_tim'),
                    $this->input->post('surat_pengantar'),
                    $this->input->post('proposal_penelitian'),
                    $this->input->post('fotocopy_KTP'),
                    $this->input->post('surat_kesediaan_penelitian'),
                    $this->input->post('surat_pernyataan')

                );
                $data['success'] = $result;
                $this->load->view('user', $data);
            } else {
                $this->load->view('user');
            }
        } else {
            $this->load->view('user');
        }
    }

}