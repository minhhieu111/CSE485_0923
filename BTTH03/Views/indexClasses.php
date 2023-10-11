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
            <h1 class=" row justify-content-center">Danh Sách Lớp</h1>
        </div>
        
        <div class="row justify-content-between">
            <div class="col-md-3">
                <a href="/index.php" class="me-3 text-decoration-none text-dark">Danh sách Sinh Viên</a>
                <a href="/index.php?page=Classes" class="text-decoration-none text-dark">Danh sách Lớp</a>
                
            </div>
            
            <a href="/Views/AddClasses.php" style="border: 1px solid;" class="btn text-info col-md-2">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Class</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($ListStu as $list){
                        ?>
                    <tr>
                        <th scope="row"><?=$list->getId();?></th>
                        <td><?=$list->getTenLop();?></td>
                        <td><a href="/index.php?page=Classes&fun=idClasses&Id=<?=$list->getId()?>"><i class='bi bi-pencil-fill'></i></a></td>
                        <td><a class="text-danger" href="/index.php?page=Classes&fun=delete&Id=<?=$list->getId()?>"  ><i class='bi bi-trash3-fill' ></i></a></td>
                    </tr>

                        <?php
                    }
                ?>
                
            </tbody>
    </table>

    </div>
</body>
</html>