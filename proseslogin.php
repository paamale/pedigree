
<?php
    session_start();
    include"koneksi/koneksi.php";
    $query = "SELECT * FROM register WHERE (username = '".$_POST['username']."') AND (password= '".$_POST['password']."');";
    $login = mysqli_query($conn, $query);
    $rowcount = mysqli_num_rows($login);
   if($rowcount==1) {
            $buff=mysqli_fetch_assoc($login);
        if($buff['approval'] == 1){
            $_SESSION['username'] = $buff['username'];
            $_SESSION['password'] = $buff['password'];
                header('location: user/indexuser.php');
        }

        elseif ($buff['approval'] == 2) {
            $_SESSION['username'] = $buff['username'];
            $_SESSION['password'] = $buff['password'];
                header('location: admin/indexadmin.php');
        }
        elseif ($buff['approval'] == 0) {
            $_SESSION['username'] = $buff['username'];
            $_SESSION['password'] = $buff['password'];
            echo"<script>alert('Anda Belum diizinkan');window.location.href='index.php';</script>";
        }
    }

    else {
    echo"<script>alert('Anda gagal masuk');window.location.href='index.php';</script>";
    }
?>