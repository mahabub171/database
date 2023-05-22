<?php  
 //test_class.php  
 include 'oopdb.php';  
 $data = new Databases;  
 $success_message = ''; 
 $table = 'info';

if(isset($_POST['submit'])){
$fileMimes = array(
'text/x-comma-separated-values',
'text/comma-separated-values',
'application/octet-stream',
'application/vnd.ms-excel',
'application/x-csv',
'text/x-csv',
'text/csv',
'application/csv',
'application/excel',
'application/vnd.msexcel',
'text/plain'
);


// Validate whether selected file is a CSV file
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $fileMimes))
{


// Open uploaded CSV file with read-only mode
$csvFile = fopen($_FILES['file']['tmp_name'], 'r');

// Skip the first line
fgetcsv($csvFile);

while (($getData = fgetcsv($csvFile, 1000, ',')) !== FALSE){
if($data->insert($getData))  
      {  

           $success_message = 'Post Inserted';  
      }


}
// Close opened CSV file
fclose($csvFile);
//header("Location: display.php");
  echo "Please select valid file";

}
}
     
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert data into Table using in PHP</title>  
           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.2/js/bootstrap.min.js"></script> -->  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:700px;">  
                    <form action="uplodecsvoop.php" method="post" enctype="multipart/form-data">
                     <label>Uplode CSV File</label>  
                     <input type="file" name="file" value="" />  
                     <br/>  
                     <label>Sve File</label> 
                     <br/> 
                     <input type="submit" name="submit" class="btn btn-info" value="Save" />  
                     <span class="text-success">  
                    <?php  
                     if(isset($success_message))  
                     {  
                          echo $success_message;  
                     } ?>
                     </span>  
                </form>  
           </div>  
      </body>  
     </html>