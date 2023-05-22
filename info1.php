<form action="info.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" value="" />
<input type="submit" name="submit" value="Save" /></form>

<?php
require 'db.php';

if(isset($_POST['submit'])){

if($_FILES['file']['name'])
{
$filename = explode('.', $_FILES['file']['name']);
if($filename[1] == 'csv'){
// Open uploaded CSV file with read-only mode
$csvFile = fopen($_FILES['file']['tmp_name'], 'r');

while($data = fgetcsv($csvFile))

{
$name = mysql_real_escape_string($conn, $data[0]);
    $status = mysql_real_escape_string($conn, $data[1]);
    $salesper = mysql_real_escape_string($conn, $data[2]);
    $updated = mysql_real_escape_string($conn, $data[3]);
    $created = mysql_real_escape_string($conn, $data[4]);
    $email = mysql_real_escape_string($conn, $data[5]);
    $phone = mysql_real_escape_string($conn, $data[6]);
    $share = mysql_real_escape_string($conn, $data[7]);
    $investment = mysql_real_escape_string($conn, $data[8]);
    $pipeline = mysql_real_escape_string($conn, $data[9]);
    $yearly = mysql_real_escape_string($conn, $data[10]);
    $accredite = mysql_real_escape_string($conn, $data[11]);
    $address = mysql_real_escape_string($conn, $data[12]);
    $state = mysql_real_escape_string($conn, $data[13]);
    $gender = mysql_real_escape_string($conn, $data[14]);
    $age = mysql_real_escape_string($conn, $data[15]);
    $referral = mysql_real_escape_string($conn, $data[16]);
    $payment = mysql_real_escape_string($conn, $data[17]);
    $notes = mysql_real_escape_string($conn, $data[18]);
    $order_id = mysql_real_escape_string($conn, $data[19]);
    $internet = mysql_real_escape_string($conn, $data[20]);
    $approved = mysql_real_escape_string($conn, $data[21]);
    $duplicate = mysql_real_escape_string($conn, $data[22]);
    $ex = mysql_real_escape_string($conn, $data[23]);
    $sql = "INSERT INTO info(Name,Status,Salesperson,Updated,Created,Email,Phone,Share_Reserved,Investment_Amount,Pipeline,Yearly_Income,Accredited_Investor,Address,State,Gender,Age,Referral_Source,Payment_Method,Notes,Order_ID,Internet_Access,Approved,Duplicate,Ex) VALUE ('$name','$status','$salesper','$updated','$created','$email','$phone','$share','$investment','$pipeline','$yearly','$accredite','$address','$state','$gender','$age','$referral','$payment','$notes','$order_id','$internet','$approved','$duplicate','$ex')";
    mysqli_query($conn, $sql);


}

// Close opened CSV file
fclose($csvFile);
//header("Location: display.php");
}
else
{
echo "Please select valid file";*/
}
}

?>