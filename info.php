<form action="info.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" value="" />
<input type="submit" name="submit" value="Save" /></form>

<?php
require 'db.php';

if(isset($_POST['submit'])){
// Allowed mime types
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

// Parse data from CSV file line by line
// Parse data from CSV file line by line
while (($getData = fgetcsv($csvFile, 1000, ',')) !== FALSE)
{
// Get row data
//$id = $getData[0];
$name= $getData[0];
$status = $getData[1];
$salesper = $getData[2];
$updated = $getData[3];
$created = $getData[4];
$email = $getData[5];
$phone = $getData[6];
$share = $getData[7];
$investment = $getData[8];
$pipeline = $getData[9];
$yearly = $getData[10];
$accredite = $getData[11];
$address = $getData[12];
$state = $getData[13];
$gender = $getData[14];
$age = $getData[15];
$referral = $getData[16];
$payment = $getData[17];
$notes = $getData[18];
$order_id = $getData[19];
$internet = $getData[20];
$approved = $getData[21];
$duplicate = $getData[22];
$ex = $getData[23];
// If user already exists in the database with the same email
$query = "SELECT Email FROM info WHERE Email = '".$getData[5]."'";
//$prevResult = $conn->query($query);
$check = mysqli_query($conn, $query);
if ($check->num_rows > 0)
{
$conn->query("INSERT INTO info (Name,Status,Salesperson,Updated,Created,Email,Phone,Share_Reserved,Investment_Amount,Pipeline,Yearly_Income,Accredited_Investor,Address,State,Gender,Age,Referral_Source
,Payment_Method,Notes,Order_ID,Internet_Access,Approved,Duplicate,Ex
) VALUES ('".addslashes($name)."' , '".addslashes($status)."' , '".addslashes($salesper)."' , '".addslashes($updated)."' , '".addslashes($created)."' , '".addslashes($email)."' , '".addslashes($phone)."' , '".addslashes($share)."' , '".addslashes($investment)."' , '".addslashes($pipeline)."' , '".addslashes($yearly)."' , '".addslashes($accredite)."' , '".addslashes($address)."' , '".addslashes($state)."' , '".addslashes($gender)."' , '".addslashes($age)."' , '".addslashes($referral)."' , '".addslashes($payment)."' , '".addslashes($notes)."' , '".addslashes($order_id)."' ,  '".addslashes($internet)."' , '".addslashes($approved)."' , '".addslashes($duplicate)."' , '".addslashes($ex)."')");

}
}

// Close opened CSV file
fclose($csvFile);
//header("Location: display.php");
echo "Please select valid file";
}
}

?>
