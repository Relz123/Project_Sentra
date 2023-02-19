<?php
    $conn = mysqli_connect("localhost","root","","hp");
    
    function query($query){
    global $conn;
    $result= mysqli_query($conn, $query);
    $datas = [];
    while($data = mysqli_fetch_assoc($result)){
       $datas[] = $data;
    }
    return $datas;
}
?>
<?php
    function tambah_data($data_hp){
        global $conn;

        $id = $data_hp["id"];
        $merek = $data_hp["merek"];
        $jenis_gadget = $data_hp["jenis_gadget"];
        $spesifikasi = $data_hp["spesifikasi"];

        $query = "insert into daftar_hp values
        ('$id','$merek','$jenis_gadget','$spesifikasi')
        ";
    
        mysqli_query($conn,$query);
        
        return mysqli_affected_rows($conn);
    }
?>

<?php
    function hapus_data($id){
        global $conn;

        $query = "delete from daftar_hp where id='$id' ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
?>

