<?php
    /*$host="localhost";
    $user="nktsin_fresh";
    $pass="dailyfresh";
    $db_name="nktsin_dailyfresh";
	
	$host="localhost";
    $user="root";
    $pass="";
    $db_name="dailyfresh";
	*/
class DB{
    public  $conn;
    public function __construct()
    {
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="emma";
    $this->conn=new mysqli($host,$user,$pass,$db_name);
    }
    
	public function select_login($command,$email,$pass){
        $all=array();
        $row=  $this->conn->prepare($command);
        $row->bind_param('ss',$email,$pass);
        $row->execute();
        $roww=$row->get_result();
        if($roww->num_rows>0){
           while($data=$roww->fetch_assoc())
            {$all[]=$data;}
          
            return $all;
        }else{return count($all);
        }
    }
    public function select($command)
    {
        $all=array();
        $row=  $this->conn->query($command);
        if($row->num_rows>0){
           
            while($data=$row->fetch_assoc())
            {
               $all[]=$data; 
            }
          
            return $all;
        }else{
            
            return count($all);
        }
    }
   
    
     public function insert($command)
    {
      if($this->conn->query($command)==TRUE)
      {
       return $this->conn->insert_id;
      }else{return FALSE;}
       
    }
    
     public function update($command)
    {
      if($this->conn->query($command)==TRUE)
      {
          return TRUE;
      }else{return FALSE;}
       
    }
    
      public function delete($command)
    {
      if($this->conn->query($command)==TRUE)
      {
          return TRUE;
      }else{return FALSE;}
       
    }
    
    
    
    
    public function countRow($command)
    {
      $row=  $this->conn->query($command);
        if($row->num_rows>0){
          return $row->num_rows;
        }else{
            return 0;}
    }
}


$db=new DB();
?>

