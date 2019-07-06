<form action="" method="post">
    <input type="text" name="username" placeholder="Username"> <br>
    <input type="password" name="password" placeholder="Password"> <br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php
if(empty($_POST['username'])){
    echo "<script>alert('Username Tidak Boleh Kosong!')</script>";
} else {
    $user = $_POST['username'];
    if(preg_match('/^\D\w{4,8}/',trim($user))){
        echo "Format Username Benar $user <br> ";
    } else {
        echo "Format Salah, username tidak boleh di awali dengan angka dan harus berisi huruf besar huruf kecil <br>";
    }
}
if(empty($_POST['password'])){
    echo "<script>alert('Password Tidak Boleh Kosong!')</script>";
} else {
    $pass = $_POST['password'];
    if(preg_match('/[a-zA-Z+\d+\W+]{8}/',trim($pass))){
        $password = trim($pass);
        if(preg_match('/@/',trim($password))){
            echo "Format Password Benar $password <br>";
        } else {
            echo "Anda belum memasukkan tanda @ <br>";
        }
    } else {
        echo "Format Salah, Password harus menggunakan huruf kecil huruf besar dan karakter spesial <br>";
    }
}
?>
