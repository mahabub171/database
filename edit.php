
<?php
require 'db.php';
function valid($id, $name, $status, $salesperson, $updated, $created, $email, $phone, $share, $investment, $pipeline, $yearly, $accredite, $address, $state, $gender, $age, $referral, $payment, $notes, $order_id, $internet, $approved, $duplicate, $ex, $error)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Edit Records</title>
</head>
<body>
<?php
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<form action="edit.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<table border="1">
<tr>
<td colspan="2"><b><font color='Red'>Edit Records </font></b></td>
</tr>
<tr>
<td width="179"><b><font color='#663300'>Name<em>*</em></font></b></td>
<td><label>
<input type="text" name="name" value="<?php echo $name; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Status<em>*</em></font></b></td>
<td><label>
<input type="text" name="status" value="<?php echo $status; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Salesperson<em>*</em></font></b></td>
<td><label>
<input type="text" name="salesperson" value="<?php echo $salesperson; ?>" />
</label></td>
</tr>


<tr>
<td width="179"><b><font color='#663300'>Updated<em>*</em></font></b></td>
<td><label>
<input type="text" name="updated" value="<?php echo $updated; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="address" value="<?php echo $address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Created<em>*</em></font></b></td>
<td><label>
<input type="text" name="created" value="<?php echo $created; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Email<em>*</em></font></b></td>
<td><label>
<input type="text" name="email" value="<?php echo $email; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Phone<em>*</em></font></b></td>
<td><label>
<input type="text" name="phone" value="<?php echo $phone; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Share Reserved<em>*</em></font></b></td>
<td><label>
<input type="text" name="share" value="<?php echo $share; ?>" />
</label></td>
</tr>


<tr>
<td width="179"><b><font color='#663300'>Investment Amount<em>*</em></font></b></td>
<td><label>
<input type="text" name="investment" value="<?php echo $investment; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Pipeline<em>*</em></font></b></td>
<td><label>
<input type="text" name="pipeline" value="<?php echo $address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Yearly Income<em>*</em></font></b></td>
<td><label>
<input type="text" name="yearly" value="<?php echo $yearly; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Accredited Investor<em>*</em></font></b></td>
<td><label>
<input type="text" name="accredite" value="<?php echo $accredite; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Address<em>*</em></font></b></td>
<td><label>
<input type="text" name="address" value="<?php echo $address; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>State<em>*</em></font></b></td>
<td><label>
<input type="text" name="state" value="<?php echo $state; ?>" />
</label></td>
</tr>


<tr>
<td width="179"><b><font color='#663300'>Gender<em>*</em></font></b></td>
<td><label>
<input type="text" name="gender" value="<?php echo $gender; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Age<em>*</em></font></b></td>
<td><label>
<input type="text" name="age" value="<?php echo $age; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Referral Source<em>*</em></font></b></td>
<td><label>
<input type="text" name="referral" value="<?php echo $referral; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Payment Method<em>*</em></font></b></td>
<td><label>
<input type="text" name="payment" value="<?php echo $payment; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Notes<em>*</em></font></b></td>
<td><label>
<input type="text" name="notes" value="<?php echo $notes; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Order ID<em>*</em></font></b></td>
<td><label>
<input type="text" name="order_id" value="<?php echo $order_id; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Internet Access<em>*</em></font></b></td>
<td><label>
<input type="text" name="internet" value="<?php echo $internet; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Approved<em>*</em></font></b></td>
<td><label>
<input type="text" name="approved" value="<?php echo $approved; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Duplicate<em>*</em></font></b></td>
<td><label>
<input type="text" name="duplicate" value="<?php echo $duplicate; ?>" />
</label></td>
</tr>

<tr>
<td width="179"><b><font color='#663300'>Ex<em>*</em></font></b></td>
<td><label>
<input type="text" name="ex" value="<?php echo $ex; ?>" />
</label></td>
</tr>

<tr align="Right">
<td colspan="2"><label>
<input type="submit" name="submit" value="Edit Records">
</label></td>
</tr>
</table>
</form>
</body>
</html>
<?php
}
if (isset($_POST['submit']))
{

if (is_numeric($_POST['id']))
{

$id = $_POST['id'];
$name = mysqli_real_escape_string($mysqli, htmlspecialchars($_POST['name']));
$status = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['status']));
$salesperson = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['salesperson']));
$updated = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['updated']));
$created = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['created']));
$email = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['email']));
$phone = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['phone']));
$share = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['share']));
$investment = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['investment']));
$pipeline = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['pipeline']));
$yearly = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['yearly']));
$accredite = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['accredite']));
$address = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['address']));
$state = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['state']));
$gender = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['gender']));
$age = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['age']));
$referral = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['referral']));
$payment = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['payment']));
$notes = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['notes']));
$order_id = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['order_id']));
$internet = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['internet']));
$approved = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['approved']));
$duplicate = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['duplicate']));
$ex = mysqli_real_escape_string($mysqli,htmlspecialchars($_POST['ex']));


if ($name == '' || $status == '' || $salesperson == '' || $updated == '' || $created == '' || $email == '' || $phone == '' || $share == '' || $investment == '' || $pipeline == '' || $yearly == '' || $accredite == '' || $address == '' || $state == '' || $gender == '' || $age == '' || $referral == '' || $payment == '' || $notes == '' || $order_id == '' || $internet == '' || $approved == '' || $duplicate == '' || $ex == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $name, $status, $salesperson, $updated, $created, $email, $phone, $share, $investment, $pipeline, $yearly, $accredite, $address, $state, $gender, $age, $referral, $payment, $notes, $order_id, $internet, $approved, $duplicate, $ex, $error);
}
else
{

mysqli_query($conn,"UPDATE info SET Name='$name', Status='$status', Salesperson='$salesperson', Updated = '$updated',Created = '$created', Email = '$email', Phone = '$phone', Share_Reserved = '$share', Investment_Amount = '$investment', Pipeline = '$pipeline', Yearly_Income = '$yearly', Accredited_Investor = '$accredite', Address = '$address', State = '$state', Gender = '$gender', Age = '$age', Referral_Source = '$referral', Payment_Method = '$payment', Notes = '$notes', Order_ID = '$order_id', Internet_Access = '$internet', Approved = '$approved', Duplicate = '$duplicate', Ex = '$ex' WHERE id='$id'")
or die(mysql_error());
header("Location: display.php");
}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM info WHERE id=$id")
or die(mysqli_error());
$row = mysqli_fetch_array($result);

if($row)
{
$id = $row['Id'];
$name = $row['Name'];
$status = $row['Status'];
$salesperson = $row['Salesperson'];
$updated = $row['Updated'];
$created = $row['Created'];
$email = $row['Email'];
$phone = $row['Phone'];
$share = $row['Share_Reserved'];
$investment = $row['Investment_Amount'];
$pipeline = $row['Pipeline'];
$yearly = $row['Yearly_Income'];
$accredite = $row['Accredited_Investor'];
$address = $row['Address'];
$state = $row['State'];
$gender = $row['Gender'];
$age = $row['Age'];
$referral = $row['Referral_Source'];
$payment = $row['Payment_Method'];
$notes = $row['Notes'];
$order_id = $row['Order_ID'];
$internet = $row['Internet_Access'];
$approved = $row['Approved'];
$duplicate = $row['Duplicate'];
$ex = $row['Ex'];

valid($id, $name, $status, $salesperson, $updated, $created, $email, $phone, $share, $investment, $pipeline, $yearly, $accredite, $address, $state, $gender, $age, $referral, $payment, $notes, $order_id, $internet, $approved, $duplicate, $ex, '');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
}
?>
