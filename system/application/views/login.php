<?php

?>
<html>
<head>
<title>Login</title>
<style language="text/css">
.login{
padding top:100px;
}
</style>
</head>
<body>
<div >
<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>
<table align="center" class="login">
<tr>
<td>User Name:</td><td><input type="text" name="uname" id="uname"></td>
 </tr>
<tr><td>Password:</td><td><input type="password" name="passwd" id="passwd"></td></tr>
<tr><td></td><td><input type="submit" value="submit" name="submit"></td></tr>
</table>

</div>
</body>
</html>
