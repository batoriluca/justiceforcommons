<?php
include ('../includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "lawsUpdates";
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
    $status = $row['status'];
    $id = $row['id'];
    $n=$n+1;
    $editBtn = '<a type="button" href="edit-law-update/'.$id.'" class="btn inline-flex items-center bg-lightyellow dark:bg-lightyellow align-middle text-black dark:text-black hover:bg-yellow-600 dark:hover:bg-yellow-600 hover:text-black dark:hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z"></path></svg><span>Edit</span></a>';

    if($status == "Active"){
        $msgg="Deactive";
        $status ='<button type="button" onclick="toggleStatus(\''.$id.'\', \'' . $msgg . '\')" class="btn inline-flex items-center bg-lightred dark:bg-lightred align-middle text-black dark:text-black hover:bg-red-600 dark:hover:bg-red-600 hover:text-black dark:hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M228,175a8,8,0,0,1-10.92-3l-19-33.2A123.23,123.23,0,0,1,162,155.46l5.87,35.22a8,8,0,0,1-6.58,9.21A8.4,8.4,0,0,1,160,200a8,8,0,0,1-7.88-6.69l-5.77-34.58a133.06,133.06,0,0,1-36.68,0l-5.77,34.58A8,8,0,0,1,96,200a8.4,8.4,0,0,1-1.32-.11,8,8,0,0,1-6.58-9.21L94,155.46a123.23,123.23,0,0,1-36.06-16.69L39,172A8,8,0,1,1,25.06,164l20-35a153.47,153.47,0,0,1-19.3-20A8,8,0,1,1,38.22,99c16.6,20.54,45.64,45,89.78,45s73.18-24.49,89.78-45A8,8,0,1,1,230.22,109a153.47,153.47,0,0,1-19.3,20l20,35A8,8,0,0,1,228,175Z"></path></svg><span>Hide</span></button>';
    }else{
        $msgg="Active";
        $status ='<button type="button" onclick="toggleStatus(\''.$id.'\', \'' . $msgg . '\')" class="btn inline-flex items-center bg-green-900 align-middle text-zinc-50 hover:bg-green-600 hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path></svg><span>Show</span></button>';
    }
    $decodedData[] = [
        $n,
        $row['title'],
        $status,
        $editBtn
    ];
}

// // Convert the decoded data to JSON format
$jsonData = json_encode($decodedData);

echo $jsonData;
?>