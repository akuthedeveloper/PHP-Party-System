<?php
//This function is used for fetching all the records from the table
function Select_All_Records($table_name) {
    global $conn;
    $sql = "select * from $table_name";
    try {
        $stmt = $conn->query($sql);
        return $stmt;
    } catch (PDOException $e) {
        print $e->getMessage();
    }
}
//This function is used for fetching record with one Filter.
function Select_Record_By_One_Filter($data,$table_name){
    global $conn;
    $key = array_keys($data);
    $value = array_values($data);
    $sql = "select * from $table_name where $key[0] = '$value[0]'";
    try {
        $stmt = $conn->query($sql);
        return $stmt;
    } catch (PDOException $e) {
        print $e->getMessage();
    }
}
?>

