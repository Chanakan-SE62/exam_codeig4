<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    
</head>
<body style="background-color: pink;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fun Run</a>
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
                    <a href="\register">register</a> &nbsp; &nbsp;
                    <a href="\login">login</a>
                </div>

            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1 style="text-align: center">Register</h1>
                <hr>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID Card</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" placeholder="Enter your id card" value="<?= set_value('id_card'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" placeholder="Enter your name" value="<?= set_value('name'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputage" class="form-label">Age</label>
                        <input type="text" name="age" class="form-control" id="inputforage" placeholder="Enter your age" value="<?= set_value('age'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" placeholder="Enter your email" value="<?= set_value('email'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <label for="inputconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword">
                    </div>
                    
                    <a href="/welcome_message.php" class="btn btn-secondary me-1" style="margin-left: 380px;">Cancle</a>
                    <button type="submit" class="btn btn-success">Register</button>
                    
                </form>
            </div>
        </div>
    </div>

    <br>

    <footer class="bg-light text-center text-lg-start" style="margin-top: 40px;">
        <div class="text-center p-3" style="background-color: gray;"> © FunRun by Chanakan :
            <a class="text-light" href="http://pgm.npru.ac.th/se/">http://pgm.npru.ac.th/se/</a>
        </div>
    </footer>
</body>
</html>


