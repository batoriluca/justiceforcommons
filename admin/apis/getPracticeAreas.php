<?php
include ('../includes/dbconfig.php');
// Assuming you have already established a database connection
$db = new Database();

$table1 = "practiceAreas";
$where = "";
$orderBy = "id ASC";
$limit = "";

$productData = $db->getData($table1, $where, $orderBy, $limit);

$n = 0;
$decodedData = [];
foreach ($productData as $row) {
    $status = $row['status'];
    $id = $row['id'];
    $n=$n+1;
    $d2="'!block'";
    $editBtn = '<div x-data="modals">
    <button type="button" @click="toggle"
        class="btn inline-flex items-center bg-lightred dark:bg-lightred align-middle text-slate-100 hover:bg-red-600 hover:bg-red-600 hover:text-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
            fill="currentColor" viewBox="0 0 256 256">
            <path
                d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z">
            </path>
        </svg>
        <span>Delete</span>
    </button>
    <div class="fixed inset-0 bg-black/60 dark:bg-white/10 z-[999] hidden overflow-y-auto"
        :class="open && '.$d2.'">
        <div class="flex items-start justify-center min-h-screen px-4"
            @click.self="open = false">
            <div x-show="open" x-transition x-transition.duration.300
                class="bg-white dark:bg-black relative shadow-3xl border-0 p-0 rounded-lg overflow-hidden my-8 w-full max-w-lg">
                <div
                    class="flex bg-white dark:bg-black items-center border-b border-black/10 dark:border-white/10 justify-between px-5 py-3">
                    <h5 class="font-semibold text-lg">Important Alert !!
                    </h5>
                    <button type="button"
                        class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white"
                        @click="toggle">
                        <svg class="w-5 h-5" width="32" height="32"
                            viewbox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                fill="currentcolor" />
                            <path
                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                fill="currentcolor" />
                        </svg>
                    </button>
                </div>
                <div class="p-3">
                    <div class="text-sm text-center text-white">
                        <p>You will be not able to revert it</p>
                    </div>
                    <div class="flex justify-end items-center mt-8 gap-4">
                        <button type="button"
                            class="btn !bg-lightred !text-white" onclick="deleteProduct('.$row['id'].')"@click="toggle">Delete</button>
                        <button type="button" class="btn bg-white"
                            @click="toggle">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
    $img = '<img src="'.SERVER_HTTP_ADMIN.'media/'.$row['img'].'" class="rounded-xl w-60">';
    if($status == "Active"){
        $msgg="Deactive";
        $status ='<button type="button" onclick="toggleStatus(\''.$id.'\', \'' . $msgg . '\')" class="btn inline-flex items-center bg-lightred dark:bg-lightred align-middle text-black dark:text-black hover:bg-red-600 dark:hover:bg-red-600 hover:text-black dark:hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M228,175a8,8,0,0,1-10.92-3l-19-33.2A123.23,123.23,0,0,1,162,155.46l5.87,35.22a8,8,0,0,1-6.58,9.21A8.4,8.4,0,0,1,160,200a8,8,0,0,1-7.88-6.69l-5.77-34.58a133.06,133.06,0,0,1-36.68,0l-5.77,34.58A8,8,0,0,1,96,200a8.4,8.4,0,0,1-1.32-.11,8,8,0,0,1-6.58-9.21L94,155.46a123.23,123.23,0,0,1-36.06-16.69L39,172A8,8,0,1,1,25.06,164l20-35a153.47,153.47,0,0,1-19.3-20A8,8,0,1,1,38.22,99c16.6,20.54,45.64,45,89.78,45s73.18-24.49,89.78-45A8,8,0,1,1,230.22,109a153.47,153.47,0,0,1-19.3,20l20,35A8,8,0,0,1,228,175Z"></path></svg><span>Hide</span></button>';
    }else{
        $msgg="Active";
        $status ='<button type="button" onclick="toggleStatus(\''.$id.'\', \'' . $msgg . '\')" class="btn inline-flex items-center bg-green-900 align-middle text-zinc-50 hover:bg-green-600 hover:text-black"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 256 256"><path d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"></path></svg><span>Show</span></button>';
    }
    $decodedData[] = [
        $n,
        $row['name'],
        $img,
        $status,
        $editBtn
    ];
}

// // Convert the decoded data to JSON format
$jsonData = json_encode($decodedData);

echo $jsonData;
?>