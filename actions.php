<?php
include("classes.php");

$obj = new DataOperation;

if(isset($_POST["submit"])){
    $myArray = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );

    if($obj->insert_record("data",$myArray)){
        header("location:index.php?msg=Record Inserted");
    }else{
        echo "failed";
    }
}


if(isset($_GET["update"])){
    $id = $_GET["id"] ?? null;
    $where = array(
        "id" => $id,
        "key" => "king"
    );

    $row = $obj->select_record("data",$where);

    return redirect('update.php');
}
?>