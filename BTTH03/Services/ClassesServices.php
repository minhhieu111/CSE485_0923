<?php 
 include "./Models/Classes.php";
class ClassesServices{
   
    private $ListClasses;
    private $count;

  

    public function getAllClasses(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "select * from Lop";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListClasses = [];

        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
            $Classes = new Classes($row['id'],$row['tenLop']);
            $this->ListClasses[] = $Classes;

        }
        return $this->ListClasses;
    }

    public function delete_Classes($Id){
        

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "DELETE FROM Lop WHERE id = $Id;";

        try {
            $list_sql = $conn->prepare($sql);
            $list_sql->execute();
        } catch (Exception) {
            echo "<p classes='text-center'>Thanh Cong</p>";
        }

    }

    public function AddClasses($name){


        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");

            
        $sql = "insert into Lop (tenLop) values ('$name');";  
                  
        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
   

    }

    public function idClasses($Id){

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "select * from Lop where id = '$Id';";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        $row = $list_sql->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function EditClasses($tenLop,$id){


    $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
    $sql = "UPDATE Lop SET tenLop = '$tenLop'  WHERE id = $id ;";

    $list_sql = $conn->prepare($sql);
    $list_sql->execute();

    
    }
        

}