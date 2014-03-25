<?php
   /**
    *validation for the form
   **/
   
   $error_report=array();
   if(!$_POST['submit'])
   {
     $_POST['email_log']="";
     $_POST['password_log']="";
     $error_report['email_log']="";
     $error_report['password_log']="";
     $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";

    }
//echo $_SERVER['REQUEST_METHOD'];
 
   if($_SERVER['REQUEST_METHOD']=="POST")
      {
          if(empty($_POST['password_log'])) 
              {
                     
                  $error_report['password_log']="Please enter your password in the space given.";     
               }
          if(0==preg_match("/.+@.+\..+/",$_POST['email_log']))
              {
                       
                  $error_report['email_log']="Please enter a valid email address.";     
              }
         
        if(count($error_report)==0)
            { 
              
                $email_log=$_POST['email_log'];
                $password_log=$_POST['password_log'];   
  
                    
             
/**
*after validation for creating data into tables

**/              
include('verification_part_rolling_adv/config.php');

//echo "tables created";

mysql_select_db($db_name);
 
$result=mysql_query("SELECT * FROM finalInformation where email='$email_log'");

if($result)
{
   
$rows=mysql_fetch_array($result);
$password=$rows['password'];
$name=$rows['name'];
$country=$rows['country'];

//echo $password;

}
else
{
 echo 'query failed';

}

if($password==$password_log)
{
//echo $email_log;
$redirect="<html>
<div style='height:500px; position:absolute;left:180px;'>
<p style='text-align:center; font-size:20px;'>
<a href='/rolling/form_filling_part_rolling_adv/science.php?stv=$email_log&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/arts.php?stv=$email_log&&type=arts faculty&&nme=$name&&cntr=$country'>form for arts faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/dental.php?stv=$email_log&&type=dental faculty&&nme=$name&&cntr=$country'>form for dental faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/commerce.php?stv=$email_log&&type=commerce faculty&&nme=$name&&cntr=$country'>form for commerce faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/?stv=$email_log&&type=science faculty&&nme=$name&&cntr=$country'>form for  faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/.php?stv=$email_log&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/.php?stv=$email_log&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/>
<a href='/rolling/form_filling_part_rolling_adv/.php?stv=$email_log&&type=science faculty&&nme=$name&&cntr=$country'>form for science faculty</a><br/>
<br/><br/>click on the link to proceed for further registration
<br/><br/>Thankyou.
</p>
</div>
</html>";

}
else
{
  
   $error_report['password_log']="password incorrect";
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
<img src="/rolling/images/img1.jpg" style="width:100pt;height:110pt;"/>
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
<td><form name="form1" method="POST" action="login.php">
<table width="100%" border="0" cellspacing="4" cellpadding="0">
<tr>
<td colspan="3"><strong>Log In:</strong></td>
</tr>
<td>E-mail</td>
<td>:</td>
<td><input name="email_log" type="text" id="email_log" size="30" value="<?php echo h($_POST['email_log']); ?>"></td>
<?php echo messageAlert('email_log'); ?>
</tr>
<tr>
<td>password</td>
<td>:</td>
<td><input name="password_log" type="password" id="password_log" size="30" value="<?php echo h($_POST['password_log']); ?>"></td>
 <?php echo messageAlert('password_log'); ?>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="login"> &nbsp;
<input type="reset" name="Reset" value="Reset"></td>
</tr>
</table>
</form></td>
</tr>
</table>
</div>
</body>
</html>
