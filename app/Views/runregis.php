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
                    <?php $session = session(); ?>
                    <h5 class="user me-3 mt-1"><?php echo $session->get('name') ?></h5>
                    <a href="/welcome_message.php" class="btn btn-danger">Logout</a>
                </div>

            </div>
        </div>
    </nav>

    <h2 style="text-align:center; margin-top: 40px;">ยืนยันการสมัคร</h2>

    <form action="/runregis/regis" method="post">
        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID Card</label>
                        <input type="text" name="id_card" class="form-control" id="inputforcard" value="<?php echo $session->get('id_card');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforcard" value="<?php echo $session->get('name');  ?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputid_card" class="form-label">ID to running</label>
                        <input type="text" name="ID" class="form-control" id="inputforID" placeholder="Example : RUN0000001" value="<?= set_value('ID'); ?>">
                    </div>
                    <label>Category_run :</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="category" name="category" value="1">
                        <label class="form-check-label" for="inlineCheckbox1">FUN RUN</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="category" name="category" value="2">
                        <label class="form-check-label" for="inlineCheckbox2">MINI MARATHON</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="category" name="category" value="3">
                        <label class="form-check-label" for="inlineCheckbox3">VIP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="category" name="category" value="5">
                        <label class="form-check-label" for="inlineCheckbox3">Super VIP</label>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Register</button>
                    <a href="/index_user.php" class="btn btn-danger me-1">Cancel</a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>