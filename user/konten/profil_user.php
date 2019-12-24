<?php
    include"../koneksi/koneksi.php";
    $username=$_SESSION['username'];
    $select="SELECT * FROM register WHERE username='$username'";
    $result=mysqli_query($conn,$select);
    $buff=mysqli_fetch_array($result);
?>
        <h2 align="center">PROFIL</h2><br />
        <table align="center" width="487" border="0">
            <input type="hidden" name="id" value="<?php echo $buff['id']; ?>" \>
            <tr>
                <td width="150">Nama</td>
                <td width="327">: <?php echo $buff['nama'];?></td>
            </tr>
            <tr>
                <td width="150">Username</td>
                <td>: <?php echo $buff['username'];?></td>
            </tr>
            <tr>
                <td width="150">Password</td>
                <td>: <?php echo $buff['password'];?></td>
            </tr>
            <tr>
                <td width="150">Jenis Kelamin</td>
                <td>: <?php echo $buff['jenis_kelamin'];?></td>
            </tr>
            <tr>
                <td width="150">Email</td>
                <td>: <?php echo $buff['email'];?></td>
            </tr>
            <tr>
                <td width="150">No Telp</td>
                <td>: <?php echo $buff['no_telp'];?></td>
            </tr>
             

        </table>

         <a href='?module=edit_user&id=<?php echo $buff['id'];?>'>Ubah Profil</a>
<?php

    // mysqli_close();
    // session_destroy();
?>
