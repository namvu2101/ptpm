<?php
include "connect.php";
    $search = $_POST['search'];
    if(empty($search)){
        $arr = [
            'success' => false,
            'message' => "không thành công"
            ];   
    }else{

    

    $query = "SELECT * FROM sanphammoi WHERE tensp LIKE '%".$search."%'";
    $data = mysqli_query($conn, $query);
    $result = array();
    while($row = mysqli_fetch_assoc($data)){
        $result[] = ($row);
    } 
    
    if(!empty($result)){
        $arr = [
            'success' => true,
            'message' => "thành công",
            'result' => $result 
            ];     
    }
    else{
        
        $arr = [
            'success' => false,
            'message' => "không thành công",
            'result' => $result 
            ];   
    }
}

    print_r(json_encode($arr));

?>