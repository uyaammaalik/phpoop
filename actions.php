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

if(isset($_POST["edit"])){
	
	$id = $_POST["id"];
	$where = array("id" => $id);
	$myArray = array(
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
    );

    if($obj->update_record("data", $where, $myArray)){
        header("location:index.php?msg=Record Updated");
		echo $result;
    }else{
        echo "failed";
    }
}

if(isset($_GET["delete"])){
	$id = $_GET["id"] ?? null;
	$where = array("id" => $id);
	
	if($obj->delete_record("data", $where)){
        header("location:index.php?msg=Record Deleted");
    }else{
        echo "failed";
    }
	
	

}
?>