<?php
    require_once 'app/models/models.php';
    class addAnggota extends models{
        public function __construtct(){
            parent::__construct();
        }
        public function addAnggota(){
            $model = new models();
            $dataPost = array(
                $_POST['nama'],
                $_POST['alamat'],
                $_POST['tgl_lahir'],
                $_POST['tmpt_lahir'],
                $_POST['no_telp']
            );
            $model->add('tb_anggota',$dataPost);
        }
        // var_dump($dataPost);
    }