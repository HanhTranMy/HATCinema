<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/sidebar_user.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/general.css">
    <link rel="stylesheet" href="./css/card.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/button2.css">


    <title>Menber -Bapnuoc HAT Cinema</title>
</head>

<body>

    <!-- Start a nav -->
    <div class="heading">
        <!-- Navbar -->
        <?php include_once('./navbar.php') ?>
    </div>
    <!-- End a nav -->

    <!-- Start a body -->

<div class="container-fluid" style="margin-top:150px">
    <div class="row">
        <div class="col-sm-3">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <img src="./img/picAdmin.png" alt="" class="avatar-user">
                        <button class="button-css1">Chi Pu</button>
                    </div>
        
                    <div class="col-12">
                        <button class="button-css">Phim c???a t??i</button>
                    </div>
        
                    <div class="col-12">
                        <img src="./img/ic-bapnuoc.png" alt="" class="avatar-user">
                        <button class="button-css">B???p n?????c</button>
                    </div>
        
                    <div class="col-12">
                        <img src="./img/ic_star.png" alt="" class="avatar-user">
                        <button class="button-css">Th??? th??nh vi??n</button>
                    </div>
        
                    <div class="col-12">
                        <img src="./img/ic_thongtin.png" alt="" class="avatar-user">
                        <button class="button-css">Th??ng tin c?? nh??n</button>
                    </div>
        
                    <div class="col-12">
                        <img src="./img/ic_logout.png" alt="" class="avatar-user">
                        <button class="button-css logout-btn">????ng xu???t</button>
                    </div>
                   
                </div>
                
            </div>
        </div>
        <div class="col-sm-6">
            <div class="container">
                <div class="col-12 row m-0 p-0">
                    <div class="buttonA">
                        <div class="btn"><a href="#">S???n ph???m ???? mua</a></div>
                        <div class="btn"><a href="#" >S???n ph???m y??u th??ch</a></div>
                        <div class="btn"><a href="#" >????nh gi??</a></div>
                    </div>

                                     
<?php
// nhac may ban lam trang admin, luc add phim phai cho anh dai dien chu
                            $data = getAllData('SElECT * FROM bapnuoc', 1);
    foreach($data as $item ){
        ?>
      <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/<?=$item['anh']?>" alt="Card image" width="300px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text"><?=$item['tenSP']?></h4>
                                    <p class="card-text overflow-text"><?=$item['gia']?> VND</p>
                                </a>
                            </div>
                        </div>
                    </div>

<?php    } ?>
 



              
                    <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/21.jpg" alt="Card image" width="300px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text">B???p n?????c</h4>
                                    <p class="card-text overflow-text">Some example text.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/20.jpg" alt="Card image" width="300px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text">B???p n?????c</h4>
                                    <p class="card-text overflow-text">Some example text.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/21.jpg" alt="Card image" width="300px" height="200px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text">B???p n?????c</h4>
                                    <p class="card-text overflow-text">Some example text.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/22.jpg" alt="Card image" width="300px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text">B???p n?????c</h4>
                                    <p class="card-text overflow-text">Some example text.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pt-3 col-lg-4 p-0 pr-lg-1 pl-md-2 pl-lg-0">
                        <div class="card" >
                            <img class="card-img-top" src="./img/23.jpg" alt="Card image" width="300px">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="card-title overflow-text">B???p n?????c</h4>
                                    <p class="card-text overflow-text">Some example text.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                
                
                </div>
            </div>
        </div>

        
        <div class="col-sm-3">
            <div class="ads">
                <h3 class= "textads"> M??n m???i</h3> 
                <div class="row-2">
                    <div class="imgads">
                        <div class="card" >
                            <img class="card-img-top" src="./img/20.jpg" alt="Card image" width="200px">
                        </div>
                    </div>
                    <div class="imgads">
                        <div class="card" >
                            <img class="card-img-top" src="./img/21.jpg" alt="Card image" width="200px">
                        </div>
                    </div> 
                 </div>
                 <h3 class= "textads" > B??n ch???y</h3> 
                <div class="row-2">
                    <div class="imgads">
                        <div class="card" >
                            <img class="card-img-top" src="./img/22.jpg" alt="Card image" width="200px">
                        </div>
                    </div>
                    <div class="imgads">
                        <div class="card" >
                            <img class="card-img-top" src="./img/23.jpg" alt="Card image" width="200px">
                        </div>
                    </div> 
                 </div>
            </div>
        </div>
    </div>
</div>

    <!-- End a body -->

    <!-- Start a footer -->
    <?php include_once('./footer.php') ?>
    <!-- End a footer -->
</body>

</html>