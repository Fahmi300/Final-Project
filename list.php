<?php
include 'config.php';?>
<a href="login.php"><button>Kembali</button></a>
<table border="1">
<thead>
        <tr>
            <th>Account ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Role</th>
            
        </tr>
        <tr>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);
        

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['us_id']."</td>";
            echo "<td>".$siswa['us_username']."</td>";
            echo "<td>".$siswa['us_password']."</td>";
            echo "<td>".$siswa['us_email']."</td>";
            echo "<td>".$siswa['us_role']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?s_id=".$siswa['us_id']."'>Edit</a> | ";
            echo "<a href='hapus.php?s_id=".$siswa['us_id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";

        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>