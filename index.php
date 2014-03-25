<?php
   /**
    *validation for the form
   **/
   
   $error_report=array();
   if(!$_POST['submit'])
   {
     $_POST['name']="";
     $_POST['email']="";
     $_POST['country']="";
     $error_report['name']="";
     $error_report['email']="";
     $error_report['country']="";
     $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";

    }
//echo $_SERVER['REQUEST_METHOD'];
 
   if($_SERVER['REQUEST_METHOD']=="POST")
      {
          if(empty($_POST['name'])) 
              {
                     
                  $error_report['name']="Please enter your name in the space given.";     
               }
          if(0==preg_match("/.+@.+\..+/",$_POST['email']))
              {
                       
                  $error_report['email']="Please enter a valid email address.";     
              }
          if(empty($_POST['country']))
              {
                 
                 $error_report['country']="Please enter your country name";    
              }
          
        if(count($error_report)==0)
            { 
                $name=mysql_real_escape_string($_POST['name']);
                $email=mysql_real_escape_string($_POST['email']);
                $country=mysql_real_escape_string($_POST['country']);   
               
/**
*after validation for creating data into tables

**/              
include('verification_part_rolling_adv/config.php');


//echo "after config";


// table name 
$tbl_name="registrationInformation";


// Random confirmation code 
$confirm_code=md5(uniqid(rand(5,2))); 


// values sent from form 
$name=$_POST['name'];
$email=$_POST['email'];
$country=$_POST['country'];


$password=$name.rand(1,10000);


include('verification_part_rolling_adv/createdatabasetables.php');


//echo "tables created";

mysql_select_db($db_name);

// Insert data into database 
$sql_info="INSERT INTO registrationInformation(confirm_code, name, email, password, country)VALUES('$confirm_code', '$name', '$email', '$password', '$country')";
$result=mysql_query($sql_info);
 
//echo $result;
 // echo mysql_errno();
      if(mysql_errno()==0)
           {
// if suceesfully inserted data into database, send confirmation link to email 
if($result){
// send e-mail to ...
$to=$email;

// Your subject
$subject="Your confirmation link here";

// From
$header="from: response@itbhu.net";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account and proceed further \r\n";
$message.="http://iitbhu.ac.in/rolling/verification_part_rolling_adv/verify_your_account.php?confirmcode=$confirm_code \r\n";
$message.="your password for login your account :$password";
$message.="Thankyou.";

// send email
$sentmail = mail($to,$subject,$message,$header);
}

// if not found 
else {
echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
$redirect="<html>
<div style='height:500px; position:absolute;left:180px;'>
<p style='text-align:center; font-size:20px;'>Your Confirmation link Has Been Sent To Your Email Address with your password you require for further registration.
<br/>click on the link to proceed for further registration
<br/><br/>Thankyou.
</p>
</div>
</html>";
//echo '';
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
             //include('signup-ac.php');
           }
       else
            {
                $error_report['email']="email address already exist.";
                
             }
          }
      }

function messageAlert($string)
  {
      global $error_report;
     if($error_report[$string])
       {
          return "<tr id='formError'><td colspan='5'>".$error_report[$string]."</td></tr>";
        }
        
  }

function h($string)

 {
  return htmlspecialchars($string,ENT_QUOTES);
 }
mysql_close();
?>
<html>
<title>sign up form</title>
<style type="text/css">
BODY { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; background-color: #CBD1D5; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
div{ background-color: #FFF;font-family: verdana,arial,helvetica,sans-serif;width:750pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }
.signupbox{padding-top:20pt;padding-bottom:50pt;} :P :D :* :O 
.mainheader{}
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:100pt;}
#formError {font-weight:bold;color:red;text-align:center;    }
</style>
<body>
<div class="mainheader">
<img src="/rolling/images/img1.jpg" style="width:110pt;height:110pt;"/>
<img src="/rolling/images/img2.jpg" style="width:120pt;height:110pt;float:right;

right:100px;"/>
<p class="toptitle">UNIVERSITY NAME</p>
 
</div>
<hr/>
<?php echo $redirect;?>
<div class="signupbox">
<h2><p style="padding-left:220pt;">ROLLING ADVERTISEMENT FOR FACULTY</P></h2>
<h2><p style="padding-left:245pt;"><i>(Version for demonstrating PoC)</i></P></h2>
<table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><form name="form1" method="POST" action="index.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Sign up</strong></td>
</tr>
<tr>
<td width="76">Name</td>
<td width="3">:</td>
<td width="305"><input name="name" type="text" id="name" size="30" value="<?php echo h($_POST['name']); ?>"></td>
</tr>
<?php echo messageAlert('name'); ?>
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="30" value="<?php echo h($_POST['email']); ?>"></td>
<?php echo messageAlert('email'); ?>
</tr>
<tr>
<td>Country</td>
<td>:</td>
<td><input name="country" type="text" id="country" size="30" value="<?php echo h($_POST['country']); ?>"></td>
 <?php echo messageAlert('country'); ?>
</tr>
<tr>
<td><?php echo "<a href='/rolling/login.php'><strong>login</strong></a>"?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Submit"> &nbsp;
<input type="reset" name="Reset" value="Reset"></td>
</tr>
</table>
</form></td>
</tr>
</table>
</div>
</body>
</html>
