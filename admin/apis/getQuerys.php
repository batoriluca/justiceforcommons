<?php
include ('../includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "contactUs";
$where = "";
$orderBy = "id ASC";
$limit = "";

$productData = $db->getData($table1, $where, $orderBy, $limit);

// Store all rows in $decodedData array
// echo "<pre>";
// print_r($productData);
// die();
$n = 0;
$decodedData = [];
foreach ($productData as $row) {
    $id = $row['id'];
    $n=$n+1;
    $editBtn = '<a type="button" href="query/'.$id.'" class="btn inline-flex items-center bg-lightyellow dark:bg-lightyellow align-middle text-black dark:text-black hover:bg-yellow-600 dark:hover:bg-yellow-600 hover:text-black dark:hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg><span>Edit</span></a>';

    $decodedData[] = [
        $n,
        $row['name'],
        $row['number'],
        $row['subject'],
        $editBtn
    ];
}

// // Convert the decoded data to JSON format
$jsonData = json_encode($decodedData);

echo $jsonData;
?>