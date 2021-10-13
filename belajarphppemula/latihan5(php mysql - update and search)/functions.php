<?php 
    $conn = mysqli_connect('localhost','root','','phpdasar');

    function query($query){
        global $conn;
        $rows = [];
        $table = mysqli_query($conn,$query);

        //var_dump(mysqli_fetch_assoc($table));

        while($row = mysqli_fetch_assoc($table)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        global $conn;

        $judul = htmlspecialchars($data["judul"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $genre = htmlspecialchars($data["genre"]);
        $tahun = htmlspecialchars($data["tahun"]);
        $cover =htmlspecialchars($data["cover"]);

        $query = "INSERT INTO buku
                    VALUES (
                    '',
                    '$judul',
                    '$pengarang',
                    '$genre',
                    '$tahun',
                    '$cover')";

        $tambah = mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;
        $sql = mysqli_query($conn,"DELETE FROM buku WHERE id='$id'");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $judul = htmlspecialchars($data["judul"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $genre = htmlspecialchars($data["genre"]);
        $tahun = htmlspecialchars($data["tahun"]);
        $cover =htmlspecialchars($data["cover"]);

        $query = "UPDATE buku SET 
                    judul = '$judul',
                    pengarang = '$pengarang',
                    genre = '$genre',
                    rilis = '$tahun',
                    cover = '$cover'
                 WHERE id =$id";

        $ubah = mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function cari($cari) {
        global $conn;

        $queryCari = "SELECT * FROM buku WHERE 
                        judul LIKE '%$cari%' OR
                        pengarang LIKE '%$cari%' OR
                        genre LIKE '%$cari%' OR
                        rilis LIKE '%$cari%'
                        ";
        //$pencarian = mysqli_query($conn,$queryCari);
        //var_dump(mysqli_fetch_assoc($pencarian));
        return $queryCari;
    }

?>