<?php 
    $conn = mysqli_connect('localhost','root','','phpdasar');

    function query($query){
        global $conn;
        $rows = [];
        $table = mysqli_query($conn,$query);

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

?>