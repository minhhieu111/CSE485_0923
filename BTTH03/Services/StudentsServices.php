<?php 
 include "./Models/Students.php";
class StudentsServices{
   
    private $ListStudents;
    private $count;

    public function __construct(){
        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "select * from SinhVien";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        $this->ListStudents = [];
        while ($row = $list_sql->fetch(PDO::FETCH_ASSOC) ) {
           
            $Students = new Students($row['id'],$row['tenSinhVien'],$row['email'],$row['ngaySinh'],$row['idLop']);
            $this->ListStudents[] = $Students;

        }
    }

    public function getAllStudents(){
        return $this->ListStudents;
    }


    public function delete_Students($Id){
    

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "DELETE FROM SinhVien WHERE id = $Id;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        
       


    }

    public function AddStudents($name,$email,$date,$idclass){


        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");

            
        $sql = "insert into SinhVien (tenSinhVien, email, ngaySinh, idLop) values ('$name','$email', '$date',$idclass);";  
                  
        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        

 

    }

    public function getIDStudents($Id){


        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "select * from SinhVien where id = '$Id';";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        $row = $list_sql->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    public function EditStudents($name,$email,$ngaySinh,$idLop,$id){

        $conn = new PDO("mysql:host = localhost;dbname=QuanLySinhVien", "root", "ace1211");
        $sql = "UPDATE sinhvien SET tenSinhVien = '$name' ,email ='$email' ,ngaySinh = '$ngaySinh', idLop = $idLop  WHERE id = $id ;";

        $list_sql = $conn->prepare($sql);
        $list_sql->execute();
        
        
    }

    
    
}