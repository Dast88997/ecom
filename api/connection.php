 <?php
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="emma";
    $conn=new mysqli($host,$user,$pass,$db_name);
    if($conn->connect_error) die("connection failed");
    
    
    function select($sql){
        global $conn;
        $res = array();
        $row = $conn->query($sql);
        if($row->num_rows >0){
        while($data = $row->fetch_assoc()){
            $res[] = $data;
        }
        }
        return $res;
    }

    function insert($sql){
        global $conn;
        if($conn->query($sql)){
            return $conn->insert_id;
        }
    }


    function delete($sql){
        global $conn;
        if($conn->query($sql)){
            return true;
        }
    }

    function update($sql){
        global $conn;
        if($conn->query($sql)){
            return true;
        }
    }
	
	?>