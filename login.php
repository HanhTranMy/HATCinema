<?php

    session_start(); 
    include_once('./utils.php');

    function login()
    {
    $email = getPOST('email');
    $pass = getPOST('password');
    $pass = md5($pass);

    if (checkAccountLogin($email, $pass)) {
        $_SESSION['username'] = $email;
        return "";
    }
    return "Email or Password is incorrect.";
    }
        if (isset($_POST['login'])) {
     $announce = login();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- link css -->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <title>Login</title>


</head>
<body>
    <div id="main">
        <div class="heading">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top mg" style="background-color:black;">  
                <div class="container-fluid">   
                    <a class="navbar-brand" href="#"><img src="./img/logo.png" width="100%" height="72px"></img></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav mr-auto heading">
                            <li class="nav-item active"><a class="nav-link text-white" href="#">MUA VÉ</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">RẠP PHIM</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">KHUYẾN MÃI</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">THÀNH VIÊN</a></li>
                            <li class="nav-item">
                                <form class="form-inline my-2 my-lg-0 test">
                                    <img src="./img/ic_search.png" alt="" class="img-search">
                                    <input class="form-control input-search" type="search" aria-label="Search" size = 35;>
                                </form>
                            </li>
                        </ul>
        
                        <ul class="nav navbar-nav mr-5 heading">
                            <li class="nav-item"><a class="nav-link text-white" href="#">Login/Đăng ký <span> <img src="./img/ic_user.png" alt="" class ="img-user"> </span></a></li>
                        </ul>  
           
                    </div>   
        
                </div>
            </nav>
        </div>

        <!-- content of page -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12 cssForm">
                        <div class="ds-form">
                           <div>
                                <div class="ds-form">
                                    <img src="./img/logo.png" alt="" width="50%" class="img-fluid mx-auto d-block"></img>
                                    <h2 class="heading-login text-white" style="font-size: 24px; line-height: 42px;">Log in to HAT</h2>
                                    <form action="" class ="format-form">
                                        <input type="text" class="login-input" name="email" placeholder="Email" style="display: block; ; padding: 10px;">
                                        <input type="text" class="login-input" name="password" placeholder="Password" style="display: block; padding: 10px;">
                                        <p class="text-white text-right">Forgot your password</p>
                                        <button type="submit" class="btn login-input ds-ic text-black background-white font-weight-600" style="padding: 15px">Login</button>
                                        <div>
                                            <p class="text-white" style=" text-align: center; background-color: #413961; padding: 10px 0px;"> or continue with </p>
                                        </div>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style = "padding:10px"><img src="./img/ic_google.png" class="logo-login">Google</button>
                                        <button type="submit" class="btn login-input ds-ic font-weight-700" style = "padding:10px"><img src="./img/ic_facebook.png" class="logo-login">Facebook</button>   
                                    </form>
                                </div>
                           </div>
                        </div>       
                    </div>

                    <div class="col-lg-2 m-auto">
                        <div class="line-vertical">
                            <div class="vl"></div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 col-md-12 ">
                        <div class="ds-form pd-form">
                            <div>
                                <div class="ds-form">
                                    <div class="ds-line">
                                        <h1 class="titleLogin mg-bottom font-weight-70">ĐĂNG NHẬP</h1>
                                        <hr class ="hr mg-bottom">
                                    </div>
                                    <h3 class="mg-bottom font-weight-300 overflow-text text-white ds-font-sm-20" style=" height: 29px;">Chào mừng đến với HAT Cinema</h3>
                                    <p class="mg-bottom font-weight-300 overflow-text text-white ds-font-sm-14" style=" color: #FFFFFF; height: 29px;">Sự hài lòng của khách hàng là mục tiêu chính của chúng tôi</p>
                                    <h2 class ="mg-bottom font-weight-600 font-size-32" style=" height: 43px; color: #FFFFFF;">Chưa có tài khoản?</h2>
                                    <a href="./signup.html" class="toSignUpPage btn">Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer of page -->
        <div class="footer">
            <div class="logo">
                <img src="./img/logo.png" alt="HAT cinema logo">
            </div>
            <div class="info">
                <div class="thong_tin_lien_he info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">THÔNG TIN LIÊN HỆ</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            Email: hatcinema@gmail.com <br>
                            Hotline: 1900 0000 <br>
                            Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày làm việc)
                        </div>
                    </div>
                </div>
                <div class="thanh_vien info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">THÀNH VIÊN</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            Thông tin tài khoản <br>
                            Lịch sử mua vé <br>
                            Đánh giá
                        </div>
                    </div>
                </div>
                <div class="dieu_khoan_su_dung info_child">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">ĐIỂU KHOẢN SỬ DỤNG</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2">
                            Điều khoản chung<br>
                            Điều khoản giao dịch<br>
                            Chính sách thanh toán<br>
                            Chính sách bảo mật<br>
                            Câu hỏi thường gặp
                        </div>
                    </div>
                </div>
                <div class="ket_noi_voi_chung_toi info_child">
                    <div class="row">
                        <div class="col-md-12 offset-md-2">KẾT NỐI VỚI CHÚNG TÔI</div>
                        <div class="col-md-8 offset-md-2 text-muted font-weight-light mt-2"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>