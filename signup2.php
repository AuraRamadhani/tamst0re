<?php 
session_start();
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

        .header{
            color: white;
            float: left;
            font-size: 30px;
            padding: 30px 30px;
            margin-bottom: 900px;

        }

        .header a{
            text-decoration: none;
            color: #568050;
            font-size: 40px;
            margin-bottom: 3000px;
        }

        .header-list li {
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
            padding-bottom: 200px;
        }

        h1{
            color: white;
            font-family: Calibri;
            font-size: 50px;

        }
        .avatar{
            position: absolute;
            top: 58%;

           }
        img{
            width: 160px;
            height: 160px;
            border-radius: 100%;
            border: 3px solid #30442E;
            margin-right: 0px;
            margin-bottom: 50px;
        }
        .isi h3{
            font-family: Calibri;
            font-size: 30px;
            text-align: left;
            margin-left: 630px;
            color: white;
            margin-bottom: 0px;
            margin-top: 10px;
        }
        .isi p{
            font-family: Calibri;
            font-size: 25px;
            color: whitesmoke;
            margin-top: -10px;
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
    <div class="header"><a href="beranda.php"> tamst0re.id</a></div>
        <div class="header-list">
            <ul>
                <li><a class="dua" href="beranda.php">Beranda</a></li>
                <li><a class="dua"href="order.php">Order</a></li>
                <li><a class="sepuluh"href="signup2.php">Profil</a></li>
                <li><a class="tiga" href="signin.php">LogOut</a></li>
            </ul>
        </div>

        <br>
        <div class="isi">
            <h1>My Profile</h1>
            <img src="http://assets.kompasiana.com/items/album/2021/03/24/blank-profile-picture-973460-1280-605aadc08ede4874e1153a12.png?t=o&v=770">

        <h3>Username</h3><br><p><?php echo $_SESSION['nama'] ?></p><br>
        <h3>No.Telepon</h3><br><p><?php echo $_SESSION['telepon'] ?></p><br>
        <h3>Email</h3><br><p><?php echo $_SESSION['email'] ?></p>

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
</div>
 