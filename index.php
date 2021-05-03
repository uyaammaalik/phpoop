<?php

include("actions.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insert</title>
</head>

<body>

<?php
        
        if(isset($_GET["update"])){
            $id = $_GET["id"] ?? null;
            $where = array(
                "id" => $id,
                "key" => "king"
            );
        
            $row = $obj->select_record("data",$where);

            ?>
                <form action="actions.php" method="post">
                    <input type="text" name="name" id="name" vlaue="<?php echo $row["name"] ?>" ><br><br>
                    <input type="email" name="email" id="email" vlaue="<?php echo $row["email"] ?>" ><br><br>
                    <input type="password" name="password" id="password" vlaue="<?php echo $row["password"] ?>" ><br><br>
                    <input type="submit" value="Register" name="submit">
                </form>

            <?php
        }
   ?>

    <form action="actions.php" method="post">
        <input type="text" name="name" id="name" placeholder="Name"><br><br>
        <input type="email" name="email" id="email" placeholder="Email"><br><br>
        <input type="password" name="password" id="password" placeholder="Password"><br><br>
        <input type="submit" value="Register" name="submit">
    </form>
   <p>
   
    <table border="1" width="50%">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Passowrd</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            $myarray = $obj->fetch_record("data");

            foreach($myarray as $a){
                ?>
                    <tr>
                        <th><?php echo $a['name'];  ?></th>
                        <th><?php echo $a['email'];  ?></th>
                        <th><?php echo $a['password'];  ?></th>
                        <th><a href="index.php?update=1&id=<?php echo $a['id'];  ?>" >Edit</a></th>
                        <th><a href="" >Delete</a></th>
                    </tr>

                <?php

            }
        ?>



    </table>
   </p>


  
</body>
</html>