</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.btn").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
	<title>Display the data</title>
</head>
<body>
<table>
	<tr><td>Id</td>
		<td>Name</td>
		<td>Status</td>
		<td>Salesperson</td>
		<td>Updated</td>
		<td>Created</td>
		<td>Email</td>
		<td>Phone</td>
		<td>Share Reserved</td>
		<td>Investment Amount</td>
		<td>Pipeline</td>
		<td>Yearly Income</td>
		<td>Accredited Investor</td>
		<td>Address</td>
		<td>State</td>
		<td>Gender</td>
		<td>Age</td>
		<td>Referral Source</td>
		<td>Payment Method</td>
		<td>Notes</td>
		<td>Order ID</td>
		<td>Internet Access</td>
		<td>Approved</td>
		<td>Duplicate</td>
		<td>Ex</td>
		<td><font color='Green'>Edit</font></td>
		<td><font color='Red'>Delete</font></td>
		<td><font color='Blue'>Edit</font></td>

	</tr>

<?php
include_once 'db.php';
$sql = "SELECT * from info";
$result = $conn-> query($sql);
 
if ($result-> num_rows > 0 ){
	while ($row = $result-> fetch_assoc()) {
		echo "<tr>";
		echo "<td>". $row["Id"] . "</td>";
		echo "<td>". $row["Name"] ."</td>";
		echo "<td>". $row["Status"] . "</td>";
		echo "<td>". $row["Salesperson"] . "</td>";
		echo "<td>". $row["Updated"] ."</td>";
		echo "<td>". $row["Created"] . "</td>";
		echo "<td>". $row["Email"] . "</td>";
		echo "<td>". $row["Phone"] ."</td>";
		echo "<td>". $row["Share_Reserved"] . "</td>";
		echo "<td>". $row["Investment_Amount"] . "</td>";
		echo "<td>". $row["Pipeline"] ."</td>";
		echo "<td>". $row["Yearly_Income"] . "</td>";
		echo "<td>". $row["Accredited_Investor"] . "</td>";
		echo "<td>". $row["Address"] ."</td>";
		echo "<td>". $row["State"] . "</td>";
		echo "<td>". $row["Gender"] . "</td>";
		echo "<td>". $row["Age"] ."</td>";
		echo "<td>". $row["Referral_Source"] . "</td>";
		echo "<td>". $row["Payment_Method"] . "</td>";
		echo "<td>". $row["Notes"] . "</td>";
		echo "<td>". $row["Order_ID"] . "</td>";
		echo "<td>". $row["Internet_Access"] . "</td>";
		echo "<td>". $row["Approved"] . "</td>";
		echo "<td>". $row["Duplicate"] . "</td>";
		echo "<td>". $row["Ex"] . "</td>";

        echo "<div class='btn-group'>";
        echo "<td>";
               
                echo "<a class='btn-primary'  href='./edit.php?id=" .$row['Id'] ."'> Edit </a>";
                echo "</td>";
                echo "<td>";
                echo "<a class='btn btn-danger' href='./delete.php?id=" .$row['Id'] ."'> Delete</a>";
                echo "</td>";
                echo "</div>";
                echo "<td>";
                ?>
                          <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                <?php
                echo "</td>";
		        echo "</tr>";	

		        ?>


      <div class="modal fade" id="update_modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="POST" action="modalquary.php">
            <div class="modal-header">
              <h3 class="modal-title">Update info</h3>
            </div>
            <div class="modal-body">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="form-group">
                  <label>Name</label>
                  <input type="hidden" name="Id" id="Id" value="<?php echo $row['Id']?>"/>
                  <input type="text" name="Name" id="Name" value="<?php if(isset($row['Name'])) echo $row['Name']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" name="Status" value="<?php if(isset($row['Status'])) echo $row['Status']?>" class="form-control" required="required" />
                </div>
                <div class="form-group">
                  <label>Salesperson</label>
                  <input type="text" name="Salesperson" value="<?php if(isset($row['Salesperson'])) echo $row['Salesperson']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Updated</label>
                  <input type="text" name="Updated" value="<?php if(isset($row['Updated'])) echo $row['Updated']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Created</label>
                  <input type="text" name="Created" value="<?php if(isset($row['Created'])) echo $row['Created']?>" class="form-control" required="required" />
                </div>
                  <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="Email" value="<?php if(isset($row['Email'])) echo $row['Email']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="Phone" value="<?php if(isset($row['Phone'])) echo $row['Phone']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Share_Reserved</label>
                  <input type="text" name="Share_Reserved" value="<?php if(isset($row['Share_Reserved'])) echo $row['Share_Reserved']?>" class="form-control" required="required" />
                </div>
                <div class="form-group">
                  <label>Investment_Amount</label>
                  <input type="text" name="Investment_Amount" value="<?php if(isset($row['Investment_Amount'])) echo $row['Investment_Amount']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Pipeline</label>
                  <input type="text" name="Pipeline" value="<?php if(isset($row['Pipeline'])) echo $row['Pipeline']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Yearly_Income</label>
                  <input type="text" name="Yearly_Income" value="<?php if(isset($row['Yearly_Income'])) echo $row['Yearly_Income']?>" class="form-control" required="required" />
                </div>
                  <div class="form-group">
                  <label>Accredited_Investor</label>
                  <input type="text" name="Accredited_Investor" value="<?php if(isset($row['Accredited_Investor'])) echo $row['Accredited_Investor']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="Address" value="<?php if(isset($row['Address'])) echo $row['Address']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>State</label>
                  <input type="text" name="State" value="<?php if(isset($row['State'])) echo $row['State']?>" class="form-control" required="required" />
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <input type="text" name="Gender" value="<?php if(isset($row['Gender'])) echo $row['Gender']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Age</label>
                  <input type="text" name="Age" value="<?php if(isset($row['Age'])) echo $row['Age']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Referral_Source</label>
                  <input type="text" name="Referral_Source" value="<?php if(isset($row['Referral_Source'])) echo $row['Referral_Source']?>" class="form-control" required="required" />
                </div>
                  <div class="form-group">
                  <label>Payment_Method</label>
                  <input type="text" name="Payment_Method" value="<?php if(isset($row['Payment_Method'])) echo $row['Payment_Method']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Notes</label>
                  <input type="text" name="Notes" value="<?php if(isset($row['Notes'])) echo $row['Notes']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Order_ID</label>
                  <input type="text" name="Order_ID" value="<?php if(isset($row['Order_ID'])) echo $row['Order_ID']?>" class="form-control" required="required" />
                </div>
                <div class="form-group">
                  <label>Internet_Access</label>
                  <input type="text" name="Internet_Access" value="<?php if(isset($row['Internet_Access'])) echo $row['Internet_Access']?>" class="form-control" required="required"/>
                </div>
                  <div class="form-group">
                  <label>Approved</label>
                  <input type="text" name="Approved" value="<?php if(isset($row['Approved'])) echo $row['Approved']?>" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                  <label>Duplicate</label>
                  <input type="text" name="Duplicate" value="<?php if(isset($row['Duplicate'])) echo $row['Duplicate']?>" class="form-control" required="required" />
                </div>
                <div class="form-group">
                  <label>Ex</label>
                  <input type="text" name="Ex" value="<?php if(isset($row['Ex'])) echo $row['Ex']?>" class="form-control" required="required"/>
                </div>
              </div>
            </div>
            <div style="clear:both;"></div>
            <div class="modal-footer">
              <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
              <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php
      }
    }
	echo "</table>";
//
?>

</body>
</html>
