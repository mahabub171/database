    <?php
      require_once 'db.php';
     
      if(ISSET($_POST['update'])){
        $id = $_POST['Id'];
        $name = $_POST['Name'];
        $status = $_POST['Status'];
        $salesperson = $_POST['Salesperson'];
        $updated = $_POST['Updated'];
        $created = $_POST['Created'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $share = $_POST['Share_Reserved'];
        $investment = $_POST['Investment_Amount'];
        $pipeline = $_POST['Pipeline'];
        $yearly = $_POST['Yearly_Income'];
        $accredite = $_POST['Accredited_Investor'];
        $address = $_POST['Address'];
        $state = $_POST['State'];
        $gender = $_POST['Gender'];
        $age = $_POST['Age'];
        $referral = $_POST['Referral_Source'];
        $payment = $_POST['Payment_Method'];
        $notes = $_POST['Notes'];
        $order_id = $_POST['Order_ID'];
        $internet = $_POST['Internet_Access'];
        $approved = $_POST['Approved'];
        $duplicate = $_POST['Duplicate'];
        $ex = $_POST['Ex'];
     
        mysqli_query($conn, "UPDATE `info` SET `Name` = '$name', `Status` = '$status', `Salesperson` = '$salesperson',`Updated` = '$updated', `Created` = '$created', `Email` = '$email',`Phone` = '$phone', `Share_Reserved` = '$share', `Investment_Amount` = '$investment', `Pipeline` = '$pipeline', `Yearly_Income` = '$yearly',`Accredited_Investor` = '$accredite', `Address` = '$address', `State` = '$state',`Gender` = '$gender', `Age` = '$age', `Referral_Source` = '$referral',`Payment_Method` = '$payment', `Notes` = '$notes', `Order_ID` = '$order_id',`Internet_Access` = '$internet', `Approved` = '$approved', `Duplicate` = '$duplicate',`Ex` = '$ex' WHERE `Id` = '$id'") or die(mysqli_error());
     
        header("location: display.php");
      }
    ?>