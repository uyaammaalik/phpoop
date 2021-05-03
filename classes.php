<?php

include("connection.php");

class DataOperation extends Database{

    public function insert_record($table, $data){
        $sql ="";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",", array_keys($data)).") VALUES ";
        $sql .= "('".implode("','", array_values($data))."')";
        
        $query = $this->con->query($sql);

        if($query){
            return true;
        }
    }

    public function fetch_record($table){
        $sql = "SELECT * FROM ".$table;
        $array = array();

        $query = $this->con->query($sql);
        while ($row = $query->fetch_assoc()) {
            $array[] = $row;
        }
        return $array;
    }

    public function select_record($table, $where){
        $sql = "";
        $condition = "";

        foreach ($where as $key => $value) {
            $condition .= $key . " = '" . $value ."' AND ";
        }
        $condition = substr($condition, 0, -5);

        $sql = "SELECT * FROM ".$table." WHERE ".$condition;
        $query = $this->con->query($sql);
        $row = $query->fetch_array();
        return $row;
    }
}


?>