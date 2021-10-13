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

?>