<?php 
include "./Services/ClassesServices.php";

class ClassesController{

    public function index(){


        $list = new ClassesServices();
        $ListStu = $list->getAllClasses();

        include "./Views/indexClasses.php";
    }
    public function delete(){
        $Id = $_GET['Id'];
        $List = new ClassesServices();
        $List->delete_Classes($Id);
        header('location:/index.php?c=Classes?err= deleted successfully');
    }

    public function add(){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
 
            $List = new ClassesServices();
            $List->AddClasses($name);
            header('location:/index.php?c=Classes?err= amore success');
        }
    }

    public function idClasses(){
        if(isset($_GET['Id'])){
            $Id = $_GET['Id'];

             
            $List = new ClassesServices();
            $row =  $List->idClasses($Id);

           include "./Views/EditClasses.php";

        }
    }

    public function edit(){
        if(isset($_POST['id'])&isset($_POST['tenLop'])){
            $id = $_POST['id'];
            $tenLop = $_POST['tenLop'];


            $List = new ClassesServices();
            $List->EditClasses($tenLop,$id);
            header('location:/index.php?c=Classes?err= successfully repaired');
        }
    }



}