<?php
    require 'project1(koneksi).php';
    $id=$_GET["id"];
    if(hapus_data($id)>0){
        echo"
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'project2(HalamanHome).php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert ('data gagal dihapus');
        document.location.href = 'project2(HalamanHome).php';
        </script>
        ";
    }
?>