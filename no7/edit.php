<?php
$servername = "localhost";
$database = "tessoal";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$nama = $_POST['nama'];
$hobi = $_POST['hobi'];
$kategori = $_POST['kategori'];
$id = $_POST['id'];
$sql = "UPDATE nama SET name = '".$nama."', id_hobby = '".$hobi."' , id_category='".$kategori."' WHERE id = '".$id."' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data $nama telah ditambahkan')</script>";
    echo "<script>document.location='no7c.php'</script>";
}
?>