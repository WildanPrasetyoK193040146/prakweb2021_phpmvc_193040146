<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Wildan Prasetyo",
    //         "nrp" => "193040146",
    //         "e-mail" => "193040146@mail.unpas.ac.id",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', 'root');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM Mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}


?>