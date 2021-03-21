<?php

header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "", "db_kelas");

include 'function.php';

$query = mysqli_query($conn, "SELECT * FROM tb_siswa");

if( isset($_GET['method']) ) {
    $method = $_GET['method'];
    if( $method == "GetAllSiswa" ) {
        $data['result'] = query("SELECT * FROM tb_siswa");
    } 
    else if( $method == "GetSiswa") {
        if( isset($_GET['id']) ) {
            $id = abs($_GET['id']);
            $data['result'] = query("SELECT * FROM tb_siswa WHERE id='$id' ");
        }
        else {
            $error = "Id siswa tidak ada";
        }
    } 
    else if( $method == "UpdateSiswa" ) {
        if( isset($_GET['id']) && isset($_GET['nama']) && isset($_GET['gender'])) {
            $id = abs($_GET['id']);
            $nama = $_GET['nama'];
            $gender = $_GET['gender'];
            $update = update_data("UPDATE tb_siswa SET nama = '$nama', gender = '$gender' WHERE id = '$id' ");
            $data['result'] = "data berhasil diupdate";
            $data['data_siswa'] = query("SELECT * FROM tb_siswa WHERE id = '$id' ");
        }
        else {
            $error = "Data gagal ditambahkan";
        }
    }
    else if( $method == "DeleteSiswa" ) {
        if( isset($_GET['id']) ) {
            $id = abs($_GET['id']);
            $delete = update_data("DELETE  FROM tb_siswa WHERE id = '$id' ");
            $data['result'] = "Data berhasil dihapus";
        }
        else {
            $error = "Data gagal dihapus";
        }
    }
    else if( $method == "TambahData" ) {
        if( isset($_GET['id']) && isset($_GET['nama']) && isset($_GET['gender']) ) {
            $id = abs($_GET['id']);
            $nama = $_GET['nama'];
            $gender = $_GET['gender'];
            $update = update_data("INSERT INTO tb_siswa SET nama = '$nama', gender = '$gender'");
            $data['result'] = "data berhasil ditambahkan";
            $data['data_siswa'] = $_GET;
        }
    }
    
    else {
        $error = "data tidak ditemukan";
    }
    
} 
else {
    $error = "method tidak ada";
}

if( isset($data) ) {
    echo json_encode($data, 1);
}
else {
    $data['error'] = $error;
    echo json_encode($data, 1);
}
?>