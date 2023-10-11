<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TLU Music Garden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-between mt-3 mb-3">
            <ul class="nav col-md-5">
                <li class="nav-item ms-3"><img src="image/logo.png" alt=""></li>
                <li class="nav-item mt-3"><a href="" class="btn"><p>Trang Chủ</p></a></li>
                <li class="nav-item mt-3"><a href="" class="btn"><p>Đăng Nhập</p></a></li>
            </ul>
            <ul class="nav col-md-3">
                <li><input class=" form-control mt-3" type="text" placeholder="Nội dung cần tìm"></li>
                <li><a href="" style="border: 1px solid green" class="btn mt-3 ms-2 text-success">Tìm</a></li>
            </ul>
        </div>
        <div class="row">
            <img class="col-md-12" src="image/anhto.png" alt="">
        </div>
        <div class="text-center mt-3">
            <h1 class="text-info">TOP BÀI HÁT YÊU THÍCH</h1>
        </div>

        <!-- kết nối sql -->
        <?php
            $conn = new PDO("mysql:host = localhost; dbname = BTTH01_CSE485", "root", "ace1211");

            $sql = "select * from tagia join baiviet on tagia.ma_tgia = baiviet.ma_tgia;";
            $query = $conn->prepare($sql);
            $query->execute();

            $row = $query->fetch();
        ?>

        <div>
            <ul class="nav justify-content-between">
                <li class="nav-item border rounded m-3">
                    <img src="image/lavagio.png" alt="">
                    <p class="text-center"><a href="detail.php?mabv=1" class=" text-info pt-4 bp-4">Cây, lá và gió</a>  </p>
                </li>
                <li class="nav-item border rounded m-3 ">
                    <img src="image/menthuong.png" alt="">
                    <p class="text-center"><a href="detail.php?mabv=2" class=" text-info pt-4 bp-4">Cuộc sống mến thương</a></p>
                </li>
                <li class="nav-item border rounded m-3">
                    <img src="image/longme.png" alt="">
                    <p class="text-center"><a href="detail.php?mabv=3" class=" text-info pt-4 bp-4">Lòng mẹ</a></p>
                </li>
                <li class="nav-item border rounded m-3">
                    <img src="image/phoipha.png" alt="">
                    <p class="text-center"><a href="detail.php?mabv=4" class=" text-info pt-4 bp-4">Phôi pha</a></p>
                </li>
                <li class="nav-item border rounded m-3">
                    <img src="image/tinhyeu.png" alt="">
                    <p class="text-center"><a href="detail.php?mabv=5" class=" text-info pt-4 bp-4">Nơi tình yêu bắt đầu</a></p>
                </li>
            </ul>
        </div>
        <div class="border-top">
            <h3 class="text-center p-3">TLU'S MUSIC GARDEN</h3>
        </div>
    </div>
</body>
</html>