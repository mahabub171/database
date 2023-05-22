 <?php   
 //database.php  
 class Databases{  
      public $con;  
      public $error; 
      public function __construct()  
      {  

           $this->con = mysqli_connect("localhost", "root", "", "demo");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  

        public function dis()  
      {  
          // code extend; 
      } 

  function real_escape_string($field){
   return "`".str_replace("`","``",$field)."`";
}

     public function insert($data)  
      { 
 
$columns = implode(", ",array_keys($data));
//$link = mysqli_connect("localhost", "root", "", "demo");
$escaped_values = array_map(array($this->con, 'real_escape_string'), array_values($data));

$values  = implode("', '", $escaped_values);

$sql = "INSERT INTO `info`(Name,Status,Salesperson,Updated,Created,Email,Phone,Share_Reserved,Investment_Amount,Pipeline,Yearly_Income,Accredited_Investor,Address,State,Gender,Age,Referral_Source,Payment_Method,Notes,Order_ID,Internet_Access,Approved,Duplicate,Ex) VALUES ('$values')";
     mysqli_query($this->con,$sql);
      }
} 
 ?>  