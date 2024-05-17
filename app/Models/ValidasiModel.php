<?php

namespace App\Models;

class ValidasiModel extends \App\Models\BaseModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllPenyakit($where)
    {
        $sql = 'SELECT * FROM penyakit' . $where;
        $penyakit = $this->db->query($sql)->getResultArray();
        return $penyakit;
    }

    public function deletePenyakit()
    {
        $delete = $this->db->table('penyakit')->delete(['id' => $_POST['id']]);
        if ($delete){
            $message['status'] = 'ok';
            $message['message'] = 'Data berhasil dihapus';
        } else{
            $message['status'] = 'error';
            $message['message'] = 'Data gagal dihapus';
        }
        
        return $message;
    }
}