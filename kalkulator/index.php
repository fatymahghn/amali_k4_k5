<html>
<head>
<title>
Login page
</title>
</head>
<body>
<h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
color:#00FF00;>
<center>Simple Login Page</center>
</h1>
<center><form name="login">
Username : <input type="text" name="userid"/><br><br>
Password : <input type="password" name="pswrd"/><br><br>
<input type="button" onclick="check(this.form)" value="Login"/>
<input type="reset" value="Cancel"/><br><br>
<i>Dont have account <a href="daftar.php">Sign Up</a></i>
</form></center>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "admin" && form.pswrd.value == "admin123")
  {
    window.open('papar.php')/*opens the target page while Id & password matches*/
  }
  else if(form.userid.value == "faty" && form.pswrd.value == "faty123")
  {
    window.open('kira.php')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
</body>
</html>