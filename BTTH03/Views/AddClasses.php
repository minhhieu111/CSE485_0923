<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="form-control bg-warning mt-3 mb-3">
            <h1 class=" row justify-content-center">Thêm Lớp</h1>
        </div>
        
            <div>
                <a href="/index.php" class="me-3 text-decoration-none text-dark">Danh sách Sinh Viên</a>
                <a href="/index.php?page=Classes" class="text-decoration-none text-dark">Danh sách Lớp</a>
                
            </div>

            <div class="container">
                    <div class="row ">
                        <form action="/index.php?page=Class&fun=add" method="post">
                            <h3 class = "text-center">Thêm Lớp</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tên Lớp</span>
                                <input type="text" class="form-control" name = 'name'>
                            </div>
                            <a href="#"><button type="submit" class="btn btn-warning mt-2 ">Thêm</button></a>
                            <a class="btn btn-warning mt-2" href="/index.php?c=Class">Quay lại</a>
                        </form>
                    </div>
                </div>
    </table>

    </div>
</body>
</html>