<?php
include 'api.php';

// Perform query
    $sql = "SELECT * FROM `sales_invoice`";
    // $sql_result = mysqli_query($conn,$sql);
    $result = $conn -> query($sql);
    
    while($row = $result -> fetch_array(MYSQLI_NUM)){
        $hasil[] = array(
            'id' => $row[0],
            'name' => $row[1],
            'tanggal' => $row[2],
            'total_penjualan' => $row[3]
        );
    }

    $data['data']['result'] = $hasil;
    echo json_encode($data);
?>