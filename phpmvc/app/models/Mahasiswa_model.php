<?php

class Mahasiswa_model {

    // private $mhs = [
    //     [
    //         "nama" => "Bambang Pamungkas",
    //         "nrp" => "12345678",
    //         "email" => "bambang@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Derry Gunawan",
    //         "nrp" => "13215466",
    //         "email" => "derry@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    private $dbh; //data base handler
    private $stmt;

    public function __construct() {
        //data source name
        $dsn = "mysql:host=localhost;dbname=phpmvc";

        try {
            $this->dbh = new PDO($dsn,'root','');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare("SELECT * FROM mahasiswa");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}