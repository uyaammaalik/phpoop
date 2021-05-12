<?php
        include("actions.php");
		

            $id = $_GET["id"] ?? null;
		
			$where = array("id" => $id);
			
			$row = $obj->select_record("data",$where);
			
            ?>
                <form action="actions.php" method="post">
					<input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    <input type="text" name="name" id="name" value="<?php echo $row["name"] ?>" ><br><br>
                    <input type="email" name="email" id="email" value="<?php echo $row["email"] ?>" ><br><br>
                    <input type="password" name="password" id="password" value="<?php echo $row["password"] ?>" ><br><br>
                    <input type="submit" value="Update" name="edit">
                </form>

