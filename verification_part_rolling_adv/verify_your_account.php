
<?php

include("../verification_part_rolling_adv/config.php");

/**
   here we get the confirm code to verify the user
**/

echo "varification starts";

$confirmCode=$_GET['confirmcode'];

//echo $confirmCode;

$tableName="registrationInformation";
echo $tableName;

if(!mysql_select_db("$db_name"))
{

  echo "error database selection";
}

// check for confirm code if available in the table

$sql1="SELECT * FROM $tableName WHERE confirm_code='$confirmCode'";
$result1=mysql_query($sql1);

// If successfully queried

if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);


// if confirm code is found in the database we can trans fer verified member to the new table


if($count==1){

$rows=mysql_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$country=$rows['country'];

$tbl_name2="finalInformation";

echo $name;
echo $email;
echo $password;

// Insert data to the finalInformtion table from registrationInformation table

if(!mysql_select_db("$db_name"))
{

  echo "error database selection";
}

$sql2="INSERT INTO finalInformation(name, email, password, country)VALUES('$name', '$email', '$password', '$country')";

$result2=mysql_query("INSERT INTO finalInformation(name, email, password, country)VALUES('$name', '$email', '$password', '$country')");

}

// if not found passkey, display message "Wrong Confirmation code"
else {
echo "Wrong Confirmation code";
}

if($result2){

echo "<html>
<body>
<div style='margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;'>
<h1 style='text-align:center;'>FORMS FOR FURTHER REGISTRATION:</h1>
<ul style='text-align:center; font-size:20px;'>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/science.php?stv=$email&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/arts.php?stv=$email&&type=arts faculty&&nme=$name&&cntr=$country'>form for arts faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/dental.php?stv=$email&&type=dental faculty&&nme=$name&&cntr=$country'>form for dental faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/commerce.php?stv=$email&&type=commerce faculty&&nme=$name&&cntr=$country'>form for commerce faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/?stv=$email&&type=science faculty&&nme=$name&&cntr=$country'>form for  faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/.php?stv=$email&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/.php?stv=$email&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/></li>
<li><a href='http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/.php?stv=$email&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/></li>
</ul>
<p style='text-align:center; font-size:20px;'>
<br/><br/>click on the above links to proceed for further registration
<br/><br/>Thankyou.
</p>
</div>
</body>
</html>";

// Delete information of this user from table "temp_members_db" that has this passkey
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$confirmCode'";
$result3=mysql_query($sql3);

}

}
mysql_close();
?>
