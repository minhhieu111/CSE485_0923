<?php 
include "./Services/StudentsServices.php";
class StudentsController{

    
    public function index(){
        

        $list = new StudentsServices();
        $ListStu = $list->getAllStudents();

        include "./Views/indexStudents.php";
    }

    public function delete(){
        $Id = $_GET['Id'];
        $List = new StudentsServices();
        $List->delete_Students($Id);
        header('location:/index.php?err= deleted successfully');
    }

    public function add(){
        if(isset($_POST['name'])&isset($_POST['email'])&isset($_POST['date'])&isset($_POST['idclass'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $idclass = $_POST['idclass'];
            
            $List = new StudentsServices();
            $List->AddStudents($name,$email,$date,$idclass);
            header('location:/index.php?err= amore success');
        }
    }

    public function idStudents(){
        if(isset($_GET['Id'])){
            $Id = $_GET['Id'];

            $List = new StudentsServices();
            $row =  $List->getIDStudents($Id);

            include "./Views/EditStudents.php";

        }
    }


    public function edit(){
        if(isset($_POST['id'])&isset($_POST['name'])&isset($_POST['email'])&isset($_POST['ngaySinh'])&isset($_POST['idclass'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $ngaySinh = $_POST['ngaySinh'];
            $idLop = $_POST['idclass'];

            
            $Listr = new StudentsServices();
            $Listr->EditStudents($name,$email,$ngaySinh,$idLop,$id);
            header('location:/index.php?err= successfully repaired');
        }
    }
}