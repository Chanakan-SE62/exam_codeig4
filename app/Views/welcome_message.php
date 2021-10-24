<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link href="index.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Grab Restaurant Application</title>

</head>
<body style="background-color: pink;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./welcome_message">Fun Run</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./welcome_message.php">หน้าหลัก</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ลงทะเบียนวิ่ง</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">FUN RUN</a></li>
                            <li><a class="dropdown-item" href="#">MINI MARATHON</a></li>
                            <li><a class="dropdown-item" href="#">VIP</a></li>
                            <li><a class="dropdown-item" href="#">Super VIP</a></li>
                        </ul>
                    </li>

                </ul>

                <div class="d-flex">
                    <a href="/register">register</a> &nbsp; &nbsp;
                    <a href="/login">login</a>
                </div>

            </div>
        </div>
    </nav>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <center>
        <div class="carousel-inner" style="width: 1200px; height: 600px;">
            <div class="carousel-item active">
                <img src="https://onceinlife.co/wp-content/uploads/2021/08/R-7-1-1000x667.jpg" class="d-block w-100" alt="..." >
            </div>
            
            <div class="carousel-item">
                <img src="https://onceinlife.co/wp-content/uploads/2021/08/R-10-1-1000x667.jpg" class="d-block w-100" alt="...">
            </div>
            
            <div class="carousel-item">
                <img src="https://www.prachachat.net/wp-content/uploads/2020/12/%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%A7%E0%B8%B4%E0%B9%88%E0%B8%87.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        </center>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <!-- 1 -->
            <div class="col-3">
                <div class="card" style="width: auto;">
                    <img src="https://i2.wp.com/waymagazine.org/wp-content/uploads/2015/01/running.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FUN RUN</h5>
                        <p class="card-text">วิ่งสนุก ลุกนั่งสบาย</p>
                        <p class="card-text">ระยะทาง : 3 KM <br> ค่าสมัคร 550 บาท</p>
                        <a href="\login" class="btn btn-primary">สมัคร</a>
                    </div>
                </div>
            </div>
            
            <!-- 2 -->
            <div class="col-3">
                <div class="card" style="width: auto;">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1530762683/attached_image_th/%E0%B8%A7%E0%B8%B4%E0%B9%88%E0%B8%87%E0%B8%A1%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%98%E0%B8%AD%E0%B8%99-%E0%B9%80%E0%B8%95%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%A1%E0%B8%95%E0%B8%B1%E0%B8%A7%E0%B9%83%E0%B8%AB-pobpad.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MINI MARATHON</h5>
                        <p class="card-text">สมัครวันนี้ วิ่งวันไหน?</p>
                        <p class="card-text">ระยะทาง : 10 KM <br> ค่าสมัคร 550 บาท</p>
                        <a href="\login" class="btn btn-primary">สมัคร</a>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="col-3">
                <div class="card" style="width: auto;">
                    <img src="https://www.ryt9.com/img/files/20181017/iqca5fd46227ad8cd487bc9ba1aeb5239b-0.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">VIP</h5>
                        <p class="card-text">วิ่งๆๆๆๆ วิ่ง ไปกับพี่ตูน</p>
                        <p class="card-text">ระยะทาง : 3/10 KM <br> ค่าสมัคร 1000 บาท</p>
                        <a href="\login" class="btn btn-primary">สมัคร</a>
                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="col-3">
                <div class="card" style="width: auto;">
                    <img src="https://miro.medium.com/max/600/1*JiEqItQkdxeC_hFKx-9ZOg.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Super VIP</h5>
                        <p class="card-text">วิ่งชาตินี้ ถึงเส้นชัยชาติหน้า</p>
                        <p class="card-text">ระยะทาง : 15 KM <br> ค่าสมัคร 1200 บาท</p>
                        <a href="\login" class="btn btn-primary">สมัคร</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="bg-light text-center text-lg-start" style="margin-top: 40px;">
        <div class="text-center p-3" style="background-color: gray;"> © FunRun by Chanakan :
            <a class="text-light" href="http://pgm.npru.ac.th/se/">http://pgm.npru.ac.th/se/</a>
        </div>
    </footer>

</body>

</html>