<html>
<title>FACULTY INFORMATION</title>
<style type="text/css">
BODY { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; background-color: white; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
<!--div{font-family: verdana,arial,helvetica,sans-serif;width:750pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}-->
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }
.mainbox{ border:2px solid red;width:1300px;}
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:250pt;}
#newgap{padding-left:33pt;}
</style>
<body>
<?php
include 'data_variables.php';
print '
<form method="post" action="form5.php">
<div class="mainbox" ><img src="http://iitbhu.ac.in/rolling/bhulogo.jpg" style="width:110pt;height:110pt;"/>
<img src="http://iitbhu.ac.in/rolling/mmm.jpg" style="width:120pt;height:110pt;float:right;right:100px;"/>
<p class="toptitle"> INDIAN INSTITUTE OF TECHNOLOGY<BR/>(BANARAS HINDU UNIVERSITY)<BR/>VARANASI-221005</p>
<hr/>
<h3 style="padding-left:300pt;text-decoration:underline;">APPLICANT APPLYING FOR FACULTY INTERVIEW</h3>
<h3 style="padding-left:200pt;text-decoration:underline;">FOR DEMO PURPOSE WE ARE PRINTING THIS PART OF THE FORM ONLY.</h3>
<BR/><BR/><label>POSITION APPLIED FOR:</label>:<label id="newgap">'.$positionApplied.'</label>
<BR/><BR/><label>NAME OF THE DEPARTMENT:</label><label id="newgap">'.$departmentName.'</label>
<BR/><BR/><label>NAME OF THE FACULTY:</label><label id="newgap">'.$facultyName.'</label>
<BR/><BR/><label>NAME OF THE CANDIDATE:</label><label id="newgap">'.$candidateName.'</label>
<BR/><BR/><label>FATHERS NAME:</label><label id="newgap">'.$fathersName.'</label>
<BR/><BR/><label>MOTHERS NAME:</label><label id="newgap">'.$mothersName.'</label>
<BR/><BR/><label>CORRESPONDENCE ADDRESS:</label><label id="newgap">'.$correspondenceAddress.'</label>
<BR/><BR/><label>PERMANENT ADDRESS:</label><label id="newgap">'.$permanentAddress.'</label>
<BR/><BR/><label>MOBILE NUMBER:</label><label id="newgap">'.$mobileNumber.'</label>
<BR/><BR/><label>FAX:</label><label id="newgap">'.$faxNumber.'</label>
<BR/><BR/><label>E-MAIL:</label><label id="newgap">'.$eMail.'</label>
<BR/><BR/><label>DATE OF BIRTH:</label><label id="newgap">'.$date_of_birth.'</label>
<BR/><BR/><label>SEX:</label><label id="newgap">'.$sex.'</label>
<BR/><BR/><label>:MARITAL STATUS:</label><label id="newgap">'.$maritalStatus.'</label>
<BR/><BR/><label>NATIONALITY:</label><label id="newgap">'.$nationality.'</label>
<BR/><BR/><label>CATEGORY:</label><label id="newgap">'.$category.'</label>
<BR/><BR/><label>PHYSICALY CHALLENGED:</label><label id="newgap">'.$physicallyChallenged.'</label>
 </div>
 <input type="button" value="print" onclick="window.print()"/>
 <input type="submit" value="next"/>
 </form>'
 ; 
?>

</body>
</html>