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
        // $cover =htmlspecialchars($data["cover"]);
        $cover = upload();

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

    function upload() {
        $coverName = $_FILES['cover']['name'];
        $error = $_FILES['cover']['error'];
        $coverSize = $_FILES['cover']['size'];
        $tmpName = $_FILES['cover']['tmp_name'];

        $validCoverType = ['jpg','jpeg','png'];
        $coverType = strtolower(pathinfo($coverName,PATHINFO_EXTENSION));

        if( $error === 4 ){
            //echo "<script>alert('Anda belum memilih gambar!')</script>";
            exit("<script>alert('Anda belum memilih gambar!'); window.location = 'tambah.php'</script>");
        }
        
        if( !in_array($coverType,$validCoverType)) {
            exit("<script>alert('File yang anda pilih bukan gambar!'); window.location = 'tambah.php'</script>");
        }

        if( $coverSize > 1000000) {
            exit("<script>alert('Ukuran gambar terlalu besar!'); window.location = 'tambah.php'</script>");
        }

        $coverNameBaru = uniqid();
        $coverNameBaru .= ".";
        $coverNameBaru .= $coverType;

        echo $coverNameBaru;

        move_uploaded_file($tmpName, 'buku/' . $coverNameBaru);
        return $coverNameBaru;
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
        $coverLama = htmlspecialchars($data["coverLama"]);

        if( $_FILES['cover']['error'] === 4) {
            $cover = $coverLama;
        }
        else {
            $cover = upload();
        }

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