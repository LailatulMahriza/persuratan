<?php

/**
 * Description of UserModel
 *
 * @author https://roytuts.com
 */
class UserModel extends CI_Model {

    private $user_table = 'user';

    function __construct() {
        parent::__construct();
    }

    function insert_user(
        $name,
        $instansi, 
        $address, 
        $jurusan, 
        $status, 
        $NIK,
        $perihal,
        $waktu_penelitian,
        $lokasi_penelitian,
        $tembusan_surat,
        $anggota_tim,
        $surat_pengantar,
        $proposal_penelitian,
        $fotocopy_KTP,
        $surat_kesediaan_penelitian,
        $surat_pernyataan) {
        $data = array(
            'name'                      => $name,
            'instansi'                  => $instansi, 
            'address'                   => $address, 
            'jurusan'                   => $jurusan, 
            'status'                    => $status, 
            'NIK'                       => $NIK, 
            'perihal'                   => $perihal,
            'waktu_penelitian'          => $waktu_penelitian,
            'lokasi_penelitian'         => $lokasi_penelitian,
            'tembusan_surat'            => $tembusan_surat,
            'anggota_tim'               => $anggota_tim,
            'surat_pengantar'           => $surat_pengantar,
            'proposal_penelitian'       => $proposal_penelitian,
            'fotocopy_KTP'              => $fotocopy_KTP,
            'surat_kesediaan_penelitian'=> $surat_kesediaan_penelitian,
            'surat_pernyataan'          => $surat_pernyataan

        );
        $result = $this->db->insert($this->user_table, $data);
        if ($result !== NULL) {
            return TRUE;
        }
        return FALSE;
    }

}