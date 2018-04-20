<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Result</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript">
function validate()
{
	if (document.getElementById("login_id").value=="")
	{
		alert("Please enter login ID");
		document.getElementById("login_id").focus();
		return false;
	}
	if (document.getElementById("password").value=="")
	{
		alert("Please enter password");
		document.getElementById("password").focus();
		return false;
	}
}
</script>
</head>

<body> 

<p class="head8"> Login </p>
<form name="form1" method="post" action="processuser.php" onsubmit="return validate()">
<table width="490" border="0">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID </td>
    <td width="149"><input name="login_id" type="text" id="login_id"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input name="password" type="password" id="password"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>
