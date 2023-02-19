<?php
    require 'project1(koneksi).php';
    if (isset($_POST["submit"])){
        if(tambah_data($_POST) > 0){
            echo"Tambah data berhasil";
        }else{
            echo"Tambah data gagal";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project 3</title>
    </head>
    <body>
        
        <h1>Tambah data gadget</h1>
        <table>
            <form action="" method="post">
                <tr>
                    <td><label for="id">id :</label></td>
                    <td><input type="text" name="id" id="id" required></td>
                </tr>
                <tr>
                    <td><label for="merek">merek :</label></td>
                    <td><input type="text" name="merek" id="merek" required></td>
                </tr>
                <tr>
                    <td><label for="jenis_gadget">Jenis gadget :</label></td>
                    <td><input type="text" name="jenis_gadget" id="jenis_gadget" required></td>
                </tr>
                <tr>
                    <td><label for="spesifikasi">Spesifikasi :</label></td>
                    <td><input type="text" name="spesifikasi" id="spesifikasi" required></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Tambah Data</button></td>
                </tr>
            </form>
        </table>
        <a href = "project2.php">Kembali ke halaman home</a>
    </body>
    </html>