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

    public function setData($id_penyakit, $where)
    {
        $penyakit = [];
        if ($id_penyakit){
            $sql = 'SELECT * FROM penyakit' . $where . 'AND id = ?';
            $query = $this->db->query($sql,$id_penyakit)->getRowArray();
            if ($query){
                foreach ($query as $key => $val){
                    $penyakit[$key] = $val;
                }
            }
        }
        return[
            'penyakit' => $penyakit
        ];
    }

    public function saveData()
    {
        $message = [];
        $id_penyakit = '';
        $this->db->transBegin();

        if(!empty($_POST['submit'])){
            $data_db['Nama_Penyakit'] = trim($_POST['Nama_Penyakit']);
            $data_db['Definisi'] = trim($_POST['Definisi']);
            $data_db['Gejala'] = trim($_POST['Gejala']);
            $data_db['Penyebab'] = trim($_POST['Penyebab']);
            $data_db['Faktor_Resiko'] = trim($_POST['Faktor_Resiko']);
            $data_db['Komplikasi'] = trim($_POST['Komplikasi']);
            $data_db['Tata_Laksana'] = trim($_POST['Tata_Laksana']);
            $data_db['Pencegahan'] = trim($_POST['Pencegahan']);
            $data_db['Kapan_Harus_ke_Dokter'] = trim($_POST['Kapan_Harus_ke_Dokter']);
            $data_db['Referensi'] = trim($_POST['Referensi']);

            if (!empty($_POST['id'])){
                $query = $this->db->table('penyakit')->update($data_db, ['id' => $_POST['id']]);
                $id_penyakit = $_POST['id'];
            } else {
                $query = $this->db->table('penyakit')->insert($data_db);
                $id_penyakit = $this->db->insertID();
            }

            if ($this->db->transComplete()) {
                $message['status'] = 'ok';
                $message['message'] = 'Data berhasil disimpan';
            } else {
                $message['status'] = 'error';
                $message['message'] = 'Data gagal disimpan';
            }
        }
        return ['message' => $message, 'id_penyakit' => $id_penyakit];
    }
}