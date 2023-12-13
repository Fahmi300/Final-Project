<?php

session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
            alert('Login terlebih dahulu');
            document.location.href = 'login.php';
            </script>";
    exit;
}
include 'layout/header.php';
?>

<div class="co-penilaian">
    <div class="box-penilaian">
        <h5>Input Nilai</h5>
    </div>
    <div class="box-penilaian">
        <div class="box-penilaian-1">
            <label for="">Nama :</label>
        </div>
        <div class="box-penilaian-2">
            <input type="text" name="nama">
        </div>
        <div class="box-penilaian-3">
            <label for="">Pelajaran :</label>
        </div>
        <div class="box-penilaian-4">
            <select name="pelajaran">
                <option value="fisika">Fisika</option>
                <option value="kimia">Kimia</option>
                <option value="matematika">Matematika</option>
                <option value="biologi">Biologi</option>
            </select>
        </div>
    </div>
    <div class="box-penilaiann">
        <div class="box-penilaian-11">
            <label for="">Tugas-Ke :</label>
        </div>
        <div class="box-penilaian-22">
            <select name="tugaske">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="box-penilaian-33">
            <label for="">Kelas :</label>
        </div>
        <div class="box-penilaian-44">
            <input type="text" name="nilai">
        </div>
        <div class="box-penilaian-55">
            <label for="">Nilai :</label>
        </div>
        <div class="box-penilaian-66">
            <input type="text" name="nilai">
        </div>
    </div>
</div>


<?php
include 'layout/footer.php';
?>



