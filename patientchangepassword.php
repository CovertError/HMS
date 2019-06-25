<?php
include("adheader.php");
session_start();

include("dbconnection.php");
if(isset($_POST[submit]))
{
	$sql = "UPDATE patient SET password='$_POST[newpassword]' WHERE password='$_POST[oldpassword]' AND patientid='$_SESSION[patientid]'";
	$qsql= mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<div class='alert alert-success'>
                            Password has been updated successfully
                        </div>
                        <script>alert('..');</script>";
	}
	else
	{
		echo "<div class='alert alert-danger'>
                            Update Failed
                        </div>
                       ";		
	}
}
?>


<div class="wrapper col4">
  <div id="container" class="card">
    <h1>Add new Change Password record</h1>
    <form method="post" action="" name="frmpatchange" onSubmit="return validateform()">
    <table class="table table-striped">
      <tbody>
      	<div class="form-line">
        <tr>
          <td width="34%">Old Password</td>
          <td width="66%"><input class="form-control" type="password" name="oldpassword" id="oldpassword" /></td>
        </tr>
    </div>
        <tr>
          <td>New Password</td>
          <td><input class="form-control" type="password" name="newpassword" id="newpassword" /></td>
        </tr>
        <tr>
          <td>Confirm Password</td>
          <td><input class="form-control" type="password" name="password" id="password" /></td>
        </tr>
        <tr>
          <td height="36" colspan="2" align="center"><input class="btn btn-default" type="submit" name="submit" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
    </form>
    <p>&nbsp;</p>
  </div>
</div>
</div>
 <div class="clear"></div>
  </div>
</div>
<?php
include("adfooter.php");
?>
<script type="application/javascript">
function validateform()
{
	if(document.frmpatchange.oldpassword.value == "")
	{
		alert("Old password should not be empty..");
		document.frmpatchange.oldpassword.focus();
		return false;
	}
	else if(document.frmpatchange.newpassword.value == "")
	{
		alert("New Password should not be empty..");
		document.frmpatchange.newpassword.focus();
		return false;
	}
	else if(document.frmpatchange.newpassword.value.length < 8)
	{
		alert("New Password length should be more than 8 characters...");
		document.frmpatchange.newpassword.focus();
		return false;
	}
	else if(document.frmpatchange.newpassword.value != document.frmpatchange.password.value )
	{
		alert(" New Password and confirm password should be equal..");
		document.frmpatchange.password.focus();
		return false;
	}
	else
	{
		return true;
	}
}
</script>
