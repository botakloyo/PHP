<?php 
    $con = new mysqli('localhost',"root","","crud1");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    function Query($query){
        global $con;
        $rows = [];

        $table = mysqli_query($con,$query);
        //$result = mysqli_fetch_assoc($table);

        while($row = mysqli_fetch_assoc($table)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function TambahData($data) {
        global $con;
        $nama = TidyUpString($data['name']);
        $gender = TidyUpString($data['gender']);
        $kelas = TidyUpString($data['kelas']);
        $query = mysqli_query($con,"INSERT INTO murid (name,gender,class) VALUES ('$nama','$gender','$kelas')");
    
        return mysqli_affected_rows($con);
    }

    function HapusData($id){
        global $con;
        mysqli_query($con,"DELETE FROM murid WHERE id = '$id'");
        return mysqli_affected_rows($con);
    }

    function EditData($data) {
        global $con;
        $id = TidyUpString($data['id']);
        $name = TidyUpString($data['name']);
        $gender = TidyUpString($data['gender']);
        $kelas = TidyUpString($data['kelas']);

        mysqli_query($con,"UPDATE murid SET
                            name = '$name',
                            gender = '$gender',
                            class = '$kelas'
                            WHERE id='$id'");

        return mysqli_affected_rows($con);
    }

    function TidyUpString($string){
        $string = strtolower($string);
        $string = ucwords($string);
        return $string;
    }
?>