<?php 
ob_start();//solusi header error
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tamst0re.id</title>
    <style type="text/css">
        body{
            background-color: #ebddbc;
        }

        .ada{
            color: white;
            float: left;
            font-size: 30px;
            padding: 30px 30px;
            margin-bottom: 900px;

        }

        .ada a{
            text-decoration: none;
            color: #568050;
            font-size: 40px;
            margin-bottom: 3000px;
        }

        .ada-list li {
            color: white;
            float: left;
            padding: 60px 37px;
            list-style-type: none;
            font-family: Arial;

        }

        .dua{
            font-size: 30px;
            color: #568050;
            font-family: Calibri;
            text-decoration: none;
            font-weight: bold;
            line-height: 50px;
            margin: auto;
            padding: 10px 15px;
          
        }
        .dua:hover{
            color: darkgrey;
        }

        .dua:active{
            color: green;
        }

        .sepuluh{
            font-size: 30px;
            border: 1px solid white;
            background-color: #568050;
            color: white;
            font-family: Calibri;
            text-decoration: none;
            font-weight: bold;
            line-height: 50px;
            padding: 10px 20px;
            border-radius: 30px;
        }
    
        .tiga{
            font-size: 30px;
            font-family: Calibri;
            border: 2px solid #568050;
            color: #568050;
            text-decoration: none;
            font-weight: bold;
            line-height: 50px;
            padding: 10px 15px;
            border-radius: 25px;
            margin-left: 450px;

        }

        .tiga:hover{
            color: darkgrey;
        }

        .isi{
            margin-top: 150px;
            margin-bottom: 100px;
            padding-top: 10px;
            color: #129656;
            font-size: 20px;
            font-family: calibri;
            background-color: #568050;
            margin-left: -8px;
            margin-right: -8px;
            border-radius: 50px;
            text-align: center;
            padding-right: 300px;
            padding-bottom: 100px;
        }

        h1{
            color: white;
            font-family: Calibri;
            font-size: 50px;

        }
        
        .isi p{
            font-family: Calibri;
            font-size: 20px;
            color: whitesmoke;
            margin-top: 20px;
            width: 220px;
            margin-bottom: 1px;
            text-align: left;
            margin-left: 630px;
        }
        
        .footer-logo{
            color: #568050;
            float: left;
            font-size: 30px;
            padding: 30px 30px;
            margin-bottom: 0px;
            margin-top: -100px;

        }
        input{
            border-radius: 10px;
            padding: 0px 20px;
            border-bottom: 1px solid #129656;
            margin: 0px 0px;
            margin-bottom: 20px;
            height: 40px;
            font-size: 15px;
        }
        textarea{
            border-radius: 10px;
            padding: 0px 20px;
            border-bottom: 1px solid #129656;
            margin: 0px 0px;
            margin-bottom: 20px;
            height: 40px;
            font-size: 15px;
        }
        select{
            border-radius: 10px;
            padding: 15px 61px;
            border-bottom: 1px solid black;
            margin: 0px 0px;
            margin-bottom: 20px;
            font-size: 20px;
        }
        .ini{
            text-decoration: none;
            border: 1px solid black;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 20px;
            padding-left: 20px;
            border-radius: 15px;
            color: black;
            background-color: white;
            font-size: 17px;
            margin-top: 40px;
            margin-left: 130px;
            margin-right: -60px;
            margin-bottom: 30px;
        }
        .ini:hover{
        color: darkgrey;
        }
        .nomor{
            border-radius: 10px;
            width: 50px;
            border-bottom: 1px solid #129656;
            margin-bottom: 20px;
            height: 40px;
            font-size: 15px;
        }
        .footer-logo a{
            text-decoration: none;
            color: #568050;;
            font-size: 40px;
        }
        .footer-list{
            float: right;

        }
        .footer-list li {
            padding: 25px 90px;
            color: white;
            margin-top: -40px;
            margin-bottom: -110px;
            font-size: 15px;
            list-style-type: none;

        }
        a{
            color: darkgrey;
            text-decoration: none;
            font-size: 17px;
        }
        a:hover{
            color: white;
        }
    </style>
</head>
<body>
    <div class="ada"><a href="beranda.php"> tamst0re.id</a></div>
        <div class="ada-list">
            <ul>
                <li><a class="dua" href="beranda.php">Beranda</a></li>
                <li><a class="sepuluh"href="order.php">Order</a></li>
                <li><a class="dua"href="signup2.php">Profil</a></li>                
                <li><a class="tiga" href="signin.php">LogOut</a></li>
            </ul>
        </div>

        <br>
        <div class="isi">
            <h1>Order</h1>
            <form method="post" action="">
                <p>Nama Pemesan</p><br><input type="text" name="nama" required>
                <p>No.Telepon</p><br><input type="text" name="telp" required>
                <p>Alamat Rumah (Lengkap)</p><br><textarea name="alamat" required></textarea>
                <p>Catatan (Opsional)</p><input type="text" name="catatan"><br><br>

                 <p>Tipe A<br><input class="nomor" type="text" name="tipeA" value="0" required></p>
                 <p>Tipe B<br><input class="nomor" type="text" name="tipeB" value="0"></p>
                 <p>Tipe C<br><input class="nomor" type="text" name="tipeC" value="0"></p>
                 <p>Tipe D<br><input class="nomor" type="text" name="tipeD" value="0"></p>
                 <br>
                    <input class="ini" type="submit" name="checkout" value="Checkout">
                    <input class="ini" type="reset" name="reset" value="Reset">
    </form>
<?php 
    if(isset($_POST['checkout'])){
        include 'koneksi.php';
        $benar = mysqli_query($conn, "INSERT INTO tb_pesan VALUES 
            (NULL,
                '".$_POST['nama']."',
                '".$_POST['telp']."',
                '".$_POST['alamat']."',
                '".$_POST['catatan']."',
                '".$_POST['tipeA']."',
                '".$_POST['tipeB']."',
                '".$_POST['tipeC']."',
                '".$_POST['tipeD']."')");

        if($benar){
            header('location:cek.php');
            ob_enf_fluch(); //digunakan jika header location error
        }else{
            echo 'Gagal';
        }
}

    
?>

</div>
<br>
<div class="footer-logo"><a href="beranda.php">tamst0re.id</a></div>
    <div class="footer-list">
        <ul>
            <li><a href=https://shopee.co.id/tamst0re.id?v=165&smtt=0.0.3> Shopee</a></li>
            <li><a href="https://web.whatsapp.com/send?text=Hello&phone=+6282180657801">Whatsapp</a></li>
            <li><a href="https://www.instagram.com/tamst0re.id/">Instagram</a></li>
        </ul>
    </div>
</body>
</html>
 

