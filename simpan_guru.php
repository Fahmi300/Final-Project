<?php
include 'config.php';

if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $pelajaran = $_POST['pelajaran'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // buat query
    $sql = "INSERT INTO user (us_username, us_password, us_email, us_role) VALUE ('$username', '$password', '$email', '$role')";
    $query = mysqli_query($db, $sql);

    $sqll = "SELECT us_id FROM user ORDER BY us_id DESC LIMIT 1";


    $result = $db->query($sqll);

    if ($result->num_rows > 0) {
        // Fetch the result as an associative array
        $row = $result->fetch_assoc();

        // The value of $row['us_id'] will be of the type that is stored in the 'us_id' column in the database
        $us_id = $row['us_id'];

        // Now, $usIdValue could be a string or an integer, depending on the data type of 'us_id' in the database.
    } else {
        // Handle the case where no rows are returned
    }

    $sql = "INSERT INTO guru (g_nama, g_jk, g_pelajaran, g_alamat,g_kontak, g_us_id) VALUE ('$nama', '$jk', '$pelajaran', '$alamat', '$kontak', '$us_id')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: list.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}
?>