<!DOCTYPE html>
<html>
<head>
<title>Tambah Data</title>
<style media="screen">
   body {
  background-image: url(computer_keyboard_mouse_laptop_mac_apple_66734_300x168.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  display: block;
  position: center;
  font-size: 25px;
}

   </style>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size=40></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <h3><a href="../login/logout.php">Logout!</a></h3>
</body>
</html>

<!-- PHP Script Begin -->
<?php
    require_once "../connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];


        //Tambah data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "', '" .$nama. "', '" .$alamat. "')";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo 'Data Berhasil Ditambahkan';
        }
        else {
            echo 'Gagal Menambahkan Data <br>';
            echo mysqli_error($connect);
        }
    }
    echo '<br>';
    //memanggil file record.php untuk menampilkan hasil
    require_once "./record.php";
?>