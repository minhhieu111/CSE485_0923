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
            <h1 class=" row justify-content-center">Sửa thông tin sinh viên</h1>
        </div>
        
            <div>
                <a href="/index.php" class="me-3 text-decoration-none text-dark">Danh sách Sinh Viên</a>
                <a href="/index.php?page=Classes" class="text-decoration-none text-dark">Danh sách Lớp</a>
                
            </div>

            <div class="container">
                    <div class="row ">
                        <form action="/index.php?page=Students&fun=edit" method="POST">
                            <h3 class = "text-center">Sửa thông tin sinh viên</h3>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ID</span>
                                <input type="text" class="form-control" name = 'id' value = "<?=isset($row['id'])?$row['id']:''?>" readonly> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tên</span>
                                <input type="text" class="form-control" name = 'name' value = "<?=isset($row['tenSinhVien'])?$row['tenSinhVien']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                                <input type="email" class="form-control" name = 'email' value = "<?=isset($row['email'])?$row['email']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Ngày sinh</span>
                                <input type="date" class="form-control" name = 'ngaySinh' value = "<?=isset($row['ngaySinh'])?$row['ngaySinh']:''?>"> 
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">ID Lớp</span>
                                <input type="text" class="form-control" name = 'idclass' value = "<?=isset($row['idLop'])?$row['idLop']:''?>"> 
                            </div>
                            <button  class="btn btn-warning mt-2 ">Lưu</button>
                            <a class="btn btn-warning mt-2" href="/index.php">Quay lại</a>
                                    
                                    
                        </form>
                    </div>
                </div>
    </table>

    </div>
</body>
</html>
