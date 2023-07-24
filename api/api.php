<?php
include 'model.php';
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type:application/json');
$json = file_get_contents('php://input');
$data = json_decode($json);
$type = isset($_GET['type'])?$_GET['type']:'';
$method = $_SERVER['REQUEST_METHOD'];

if ($method == "GET" && $type == "getProduct"){
    print_r(getProduct());
}
else if ($method == "GET" && $type == "getCategory"){
    print_r(getCategory());
}
else if ($method == "GET" && $type == "deleteProduct"){
    $id = isset($_GET['p_id'])?$_GET['p_id']:'';
    print_r(deleteProduct($id));
}
else if ($method == "POST" && $type == "login"){
            print_r(loginCheck($data));
}
else if ($method == "POST" && $type == "signup"){
    print_r(signup($data));
}
else if ($method == "POST" && $type == "update_password"){
    print_r(update_password($data));
}
else if ($method == "GET" && $type == "single_product"){
    print_r(getSingleProduct());
}
else if ($method == "POST" && $type == "add_cart"){
    print_r(addCart($data));
}
else if ($method == "GET" && $type == "delete_cart"){
    $id = isset($_GET['p_id'])?$_GET['p_id']:'';
    print_r(deleteCart($id));
}
else if ($method == "POST" && $type == "update_cart"){
    print_r(updateCart($data));
}
else if ($method == "GET" && $type == "all_cart"){
    $user_id = isset($_GET['user_id'])?$_GET['user_id']:'';
    print_r(getAllCart($user_id));
}

else if ($method == "POST" && $type == "checkout"){
    print_r(checkout($data));
}

else if ($method == "GET" && $type == "about"){
    print_r(about());
}
else if ($method == "POST" && $type == "add_employee"){
    print_r(addEmployee($data));
}
else if ($method == "GET" && $type == "delete_employee"){
    print_r(deleteEmployee());
}
else if ($method == "POST" && $type == "update_employee"){
    print_r(updateEmployee($data));
}

else if ($method == "GET" && $type == "get_employee"){
    print_r(getEmployee());
}
else if ($method == "GET" && $type == "get_single_employee"){
    print_r(getSingleEmployee());
}



?>