<?php


$error_report=array();




//$$$$$$  geting values through server



$email=$_GET['stv'];
$departmentName=$_GET['type'];
$candidateName=$_GET['nme'];
$candidateCountry=$_GET['cntr'];


echo $email;

//address for the form

$address="http://iitbhu.ac.in/rolling/form_filling_part_rolling_adv/science.php?stv=$email&&type=science faculty&&nme=$candidateName&&cntr=$candidateCountry";

//


if(!$_POST['submit'])
   {
/*
$_POST['physicaly_challenged']="";
$_POST['category']="";
$_POST['nationality']="";
$_POST['marital_status']="";
$_POST['sex']="";
$_POST['day']="";
$_POST['month']="";
$_POST['year']="";
$_POST['fax_number']="";
$_POST['mobile_number']="";
$_POST['permanent']="";
$_POST['correspondence']="";
$_POST['mothers_name']="";
$_POST['fathers_name']="";
$_POST['high_board']="";
$_POST['high_year_passing']="";
$_POST['high_subjects']="";
$_POST['high_marks']="";
$_POST['high_distinction']="";
$_POST['inter_board']="";
$_POST['inter_year_passing']="";
$_POST['inter_subjects']="";
$_POST['inter_marks']="";
$_POST['inter_distinction']="";
$_POST['ug_board']="";
$_POST['ug_year_passing']="";
$_POST['ug_subjects']="";
$_POST['ug_marks']="";
$_POST['ug_distinction']="";
$_POST['pg_board']="";
$_POST['pg_year_passing']="";
$_POST['pg_subjects']="";
$_POST['pg_marks']="";
$_POST['pg_distinction']="";
$_POST['phd_board']="";
$_POST['phd_year_passing']="";
$_POST['phd_thesis']="";
$_POST['any_other_board']="";
$_POST['any_other_year_passing']="";
$_POST['any_other_subjects']="";
$_POST['any_other_marks']="";
$_POST['any_other_distinction']="";
$_POST['jrf_name_agency']="";
$_POST['jrf_year']="";
$_POST['ls_name_agency']="";
$_POST['ls_year']="";
$error_report['name']="";
     $error_report['email']="";
     $error_report['country']="";
$error_report['mobile_number']="";
$error_report['permanent']="";
$error_report['mothers_name']="";
$error_report['fathers_name']="";
$error_report['high_board']="";
$error_report['high_year_passing']="";
$error_report['high_subjects']="";
$error_report['high_distinction']="";
$error_report['inter_board']="";
$error_report['inter_year_passing']="";
$error_report['inter_subjects']="";
$error_report['inter_marks']="";
$error_report['inter_distinction']="";
$error_report['ug_board']="";
$error_report['ug_year_passing']="";  */

     $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";

    }
//echo $_SERVER['REQUEST_METHOD'];
 
   if($_SERVER['REQUEST_METHOD']=="POST")
      {
        
          if(empty($_POST['mobile_number'])) 
              {
                     
                  $error_report['mobile_number']="Please enter your mobile number in the space given.";     
               }
			   if(empty($_POST['permanent'])) 
              {
                     
                  $error_report['permanent']="Please enter your permanent address in the space given.";     
               }
			   if(empty($_POST['mothers_name'])) 
              {
                     
                  $error_report['mothers_name']="Please enter your mothers name in the space given.";     
               }
			   if(empty($_POST['fathers_name'])) 
              {
                     
                  $error_report['fathers_name']="Please enter your fathers name in the space given.";     
               }
			   if(empty($_POST['high_board'])) 
              {
                     
                  $error_report['high_board']="Please complete the table.";     
               }
			   if(empty($_POST['high_year_passing'])) 
              {
                     
                  $error_report['high_year_passing']="Please complete the table.";     
               }
			   if(empty($_POST['high_subjects'])) 
              {
                     
                  $error_report['high_subjects']="Please complete the table.";     
               }if(empty($_POST['high_marks'])) 
              {
                     
                  $error_report['high_marks']="Please complete the table.";     
               }if(empty($_POST['high_distinction'])) 
              {
                     
                  $error_report['high_distinction']="Please complete the table.";     
               }
			   if(empty($_POST['inter_board'])) 
              {
                     
                  $error_report['inter_board']="Please complete the table.";     
               }
			   if(empty($_POST['inter_year_passing'])) 
              {
                     
                  $error_report['inter_year_passing']="Please complete the table.";     
               }
			   if(empty($_POST['inter_subjects'])) 
              {
                     
                  $error_report['inter_subjects']="Please complete the table.";     
               }
			   if(empty($_POST['inter_marks'])) 
              {
                     
                  $error_report['inter_marks']="Please complete the table.";     
               }
			   if(empty($_POST['inter_distinction'])) 
              {
                     
                  $error_report['inter_distinction']="Please complete the table.";     
               }
			   if(empty($_POST['ug_board'])) 
              {
                     
                  $error_report['ug_board']="Please complete the table.";     
               }
			   if(empty($_POST['ug_year_passing'])) 
              {
                     
                  $error_report['ug_year_passing']="Please complete the table.";     
               }
			   if(empty($_POST['ug_subjects'])) 
              {
                     
                  $error_report['ug_subjects']="Please complete the table.";     
               }
			   if(empty($_POST['ug_marks'])) 
              {
                     
                  $error_report['ug_marks']="Please complete the table.";     
               }
			   if(empty($_POST['ug_distinction'])) 
              {
                     
                  $error_report['ug_distinction']="Please complete the table.";     
               }
			   
         
        if(count($error_report)==0)
            { 
                  
                           
   
			    	 	 include("../verification_part_rolling_adv/config.php");
			      
			   	   	 include("../verification_part_rolling_adv/data_variables.php");

					$table_name=$email;

			echo $table_name;

			if(!mysql_query("select * from $table_name"))
			{
			   $result34=mysql_query("CREATE TABLE $table_name(
                           applied_position varchar(50),
                           department_name varchar(50),
                           candidate_name varchar(100),
                           fathers_name varchar(100),
                           mothers_name varchar(100),
                           correspondence_address varchar(200),
                           permanent_address varchar(200),
                           mobile_number int(11),
                           fax_number int(11),
                           _email varchar(100),
                           date_of_birth varchar(20),
                           _sex varchar(7),
                            marital_status varchar(7),
                            _nationality varchar(10),
                            _category varchar(10),
                            physically_challenged varchar(5),
                          high_school_board varchar(50),
                        high_school_year_completed int(4),
                        high_school_marks int(3),
                        high_school_distinction varchar(50),
                        high_school_subjects varchar(50),
                        intermediate_board varchar(50),
                        intermediate_year_completed int(4),
                        intermediate_marks int(3),
                        intermediate_distinction varchar(50),
                        intermediate_subjects varchar(50),
                        under_graduate_board varchar(50),
                        under_graduate_year_completed int(4),
                        under_graduate_marks int(3),
                        under_graduate_distinction varchar(50),
                        under_graduate_subjects varchar(50),
                        post_graduate_board varchar(50),
                        post_graduate_year_completed int(4),
                        post_graduate_marks int(3),
                        post_graduate_distinction varchar(50),
                        post_graduate_subjects varchar(50),
                         phd_board varchar(50),
                        phd_year_completed int(4),
                        phd_title_of_thesis varchar(50),
                          any_other_quali_board varchar(50),
                            research_publications_books_ISSN varchar(50),
                            other_conferences_name varchar(50),
                            other_conferences_category varchar(50),
                            other_conferences_date varchar(50),
                            other_conferences_venue varchar(50),
                            other_conferences_pages varchar(50),
                            other_conferences_type varchar(50),
                            other_programme_name varchar(50),
                            other_programme_category varchar(50),
                            other_programme_date varchar(50),
                            other_programme_venue varchar(50),
                               other_programme_pages varchar(50),
                            other_programme_role varchar(50),
                            other_projects_tile varchar(50),
                            other_projects_total_amount varchar(50),
                            other_projects_funding_agency varchar(50),
                            other_projects_duration varchar(50),
                            other_projects_current_status varchar(50),
			        other_patents_patents varchar(100),
                            other_editorial_name varchar(50),
                            other_editorial_publisher varchar(50),
                            other_editorial_editor varchar(50),
                            other_editorial_duration varchar(50),
                            other_thesis_title varchar(50),
                            other_thesis_name varchar(50),
                            other_thesis_award varchar(50),
                            other_thesis_supervisor varchar(50),
                            details_administration varchar(500),
                            details_work_done varchar(500),
                            details_philosophy varchar(500),
                            details_proposed_research varchar(500),
                            details_extracurricular varchar(500),
                            spouse_name varchar(50),
                            spouse_post varchar(50),
                            spouse_subject varchar(50),
                            convict_details varchar(500),
                            referees_name varchar(50),
                            referees_address varchar(50),
                            referees_professional_relationship varchar(50),
                            referees_email varchar(50),
                            referees_telephone varchar(50),
                            registration_date varchar(15),
                            registration_place varchar(50))");
			}
                     
			if($result34)
			{
							  echo 'entering form informationn';	

							  
								  include("../form_filling_part_rolling_adv/enter_form.php");


							     if($result_query)
								{		

							   $pdf_content="";

							    include('../form_filling_part_rolling_adv/science_pdf.php');

							// code for pdf generation
										

																						
								}
									      
			}                          
						  
			//}
			//end of count error if function
	}		   
}

function messageAlert($string)
  {
     global $error_report;
     if($error_report[$string])
       {
	  return "<p id='formError'>".$error_report[$string]."</p>";
	}
		
  }

function h($string)

 {
  return htmlspecialchars($string,ENT_QUOTES);
 }

?>
<html>  
<title>BANARAS HINDU UNIVERSITY,Varanasi Rolling faculty advertisement</title> 
<head>
<script type="text/javascript">

        function addRow(tableID) {

            var table = document.getElementById(tableID);
 
            var rowCount = table.rows[0].cells.length;
            var row = table.insertRow(2);
            var j;
 for (j=0;j<rowCount;j++)
      {
            var cell1 = row.insertCell(j);
            var element1 = document.createElement("input");
            element1.type = "text";
          if(tableID=="professional_experience")
		{
            	element1.size="6";
		} 
           cell1.appendChild(element1);
        }

  }
        
</script>
<style type="text/css">
BODY { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; background-color: #CBD1D5; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
div{font-family: verdana,arial,helvetica,sans-serif;width:900pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }

.header{background-color: #fff;float:center;box-shadow:3px 3px 0px 0px;}
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:190pt;}
.general_information{background-color:#fff;box-shadow:2px 2px 0px 0px;}
#main_title{padding-left:280pt;text-decoration:underline;}
.main_title_info{padding-top:20pt;padding-left:80pt;padding-bottom:20pt;}
#alerts{ color:red;}
.arrange_text {  float:right;}
.arrange_field { margin-right:350px;}
#image {border:solid 2px black;height:160px;width:150px;}
#signature_box {border:solid 2px black;height:100px;width:150px;}
</style>
</head>
<body>
	<?php
	echo "<div style='position:absolute;margin: 0px auto 0px auto;'>.$pdf_content.</div>";
	?>
	<form action="<?php echo $address;?>" ecntype="multipart/form-data" method="POST">
	<div class="header">
<img src="http://iitbhu.ac.in/rolling/images/img1.jpg" style="width:110pt;height:110pt;"/>
<img src="http://iitbhu.ac.in/rolling/images/img2.jpg" style="width:120pt;height:110pt;float:right;right:100px;"/>
<p class="toptitle"> BANARAS HINDU UNIVERSITY<BR/>VARANASI-221005</p>
 
</div>		<hr/>
	<div class="general_information">
		<br/>
		<br/>
		<label id="main_title">APPLICATION FORM(FACULTY REGISTRATION):</label><br/><br/><br/>
		<div class="main_title_info">
			<div id="image"></div>
				<p style="padding-left:400px;"><input type="file" id="image_file" name="image_file"/></p>
				<p class="arrange_field" >Position applied for:<input type="text" name="position_applied" class="arrange_text" 					id="position_applied" value="<?php echo $positionApplied;?>"/></p>
				<p class="arrange_field">Name of Department:<label class="arrange_text"><?php echo $departmentName;?></label></p>
				<p class="arrange_field">Name of the candidate:<label class="arrange_text"><?php echo $candidateName;?></label></p>
				<p class="arrange_field">Father's name:<input type="text" class="arrange_text" name="fathers_name" id="fathers_name" 					value="<?php echo h($_POST['fathers_name']); ?>"/></p>
				<p><?php echo messageAlert('fathers_name'); ?></p>
				<p class="arrange_field">Mother's Name:<input type="text" class="arrange_text" name="mothers_name" id="mothers_name" 					value="<?php echo h($_POST['mothers_name']); ?>"/></p>
				<p><?php echo messageAlert('mothers_name'); ?></p>
				<p>Address:<br/></p>
				<p class="arrange_field">Correspondence:<textarea name="correspondence" class="arrange_text" id="correspondence" 					rows="5" cols="40" /><?php echo h($_POST['correspondence']); ?></textarea></p><br/><br/><br/><br/>
				<p class="arrange_field">Permanent:<textarea name="permanent" id="permanent" class="arrange_text" rows="5" cols="40" 					><?php echo h($_POST['permanent']); ?></textarea></p><br/><br/><br/><br/>
				<p><?php echo messageAlert('permanent'); ?></p>
				<p class="arrange_field">Mobile Number:<input type="text" name="mobile_number" class="arrange_text" 					id="mobile_number"value="<?php echo h($_POST['mobile_number']); ?>"/></p>
				<p><?php echo messageAlert('mobile_number'); ?></p>
				<p class="arrange_field">fax:<input type="text" name="fax_number" id="fax_number" class="arrange_text" value="<?php 					echo h($_POST['fax_number']); ?>"/></p>
				<p class="arrange_field">e-mail:<label class="arrange_text"><?php echo $email;?></label></p>
				<p class="arrange_field">Date of Birth:(year/month/date)<select name="year" class="arrange_text" id="year">
				<option value="<?php echo h($_POST['year']); ?>"></option>
				<option value="1957">1957</option>
				<option value="1958">1958</option>
				<option value="1959">1959</option>
				<option value="1960">1960</option>
				<option value="1961">1961</option>
				<option value="1962">1962</option>
				<option value="1963">1963</option>
				<option value="1964">1964</option>
				<option value="1965">1965</option>
				<option value="1966">1966</option>
				<option value="1967">1967</option>
				<option value="1968">1968</option>
				<option value="1969">1969</option>
				<option value="1970">1970</option>
				<option value="1970">1970</option>
				<option value="1971">1971</option>
				<option value="1972">1972</option>
				<option value="1973">1973</option>
				<option value="1974">1974</option>
				<option value="1975">1975</option>
				<option value="1976">1976</option>
				<option value="1977">1977</option>
				<option value="1978">1978</option>
				<option value="1979">1979</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option></select>
				<select name="month" id="month" class="arrange_text">
				<option value="<?php echo h($_POST['month']); ?>"></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option></select>
				<select name="day" id="day" class="arrange_text">
				<option value="<?php echo h($_POST['day']); ?>"></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option></select></p>

				<p class="arrange_field">Sex:
				<input type="radio" name="sex" value="male" id="sex" class="arrange_text"/><label class="arrange_text">M</label>
				<input type="radio" name="sex" value="female" id="sex" class="arrange_text"/><label class="arrange_text">F</label></p>

				<p class="arrange_field">Marital Status:
				<input type="radio" name="marital_status" id="marital_status" value="yes" class="arrange_text"/><label class="arrange_text">Y</label>
				<input type="radio" name="marital_status" id="marital_status" value="no" class="arrange_text"/><label class="arrange_text">N</label></p>
				<p class="arrange_field">Nationality:<label class="arrange_text"><?php echo $candidateCountry;?></label></p>
				<p class="arrange_field">Category:<input type="radio" name="category" class="arrange_text" value="general" id="category"/><label class="arrange_text">General</label>
				<input type="radio" name="category" id="category" value="OBC" class="arrange_text"/><label class="arrange_text">OBC</label>
				<input type="radio" name="category" id="category" value="SC" class="arrange_text"/><label class="arrange_text">SC</label>
				<input type="radio" name="category" id="category" value="ST" class="arrange_text"/><label class="arrange_text">ST</label>
				</p>

				<p class="arrange_field">If Physically challenged:<input type="radio" name="physicaly_challenged" class="arrange_text" id="physicaly_challenged" value="yes"/><label class="arrange_text">Y</label>
				<input type="radio" name="physicaly_challenged" id="physicaly_challenged" class="arrange_text" value="no"/><label class="arrange_text">N</label></p><br/>
				<br/>
				<label id="main_title">ACADEMIC QUALIFICATIONS:</label><br/><br/><br/>
				<p><?php echo messageAlert('high_board');
				echo messageAlert('high_year_passing');
				echo messageAlert('high_subjects');
				echo messageAlert('high_marks');
				echo messageAlert('high_distinction');
				echo messageAlert('inter_board');
				echo messageAlert('inter_year_passing');
				echo messageAlert('inter_marks');
				echo messageAlert('inter_distinction');
				 ?></p>
				<table border="1px">
				<tr>
				<th columnspan="1">Name of the degree</th>
				<th columnspan="1">Board/University</th>
				<th columnspan="1">Year of passing</th>
				<th columnspan="1">Subjects</th>
				<th columnspan="1">% Marks or CGPA</th>
				<th columnspan="1">Distinction, if any</th>
				</tr>
				<tr><td>High School(10th)</td>
				<td><input type="text" name="high_board" size="10px" value="<?php echo h($_POST['high_board']); ?>"/></td>
				<td><input type="text" name="high_year_passing" size="10px" value="<?php echo h($_POST['high_year_passing']); ?>"/></td>
				<td><input type="text" name="high_subjects" size="10px" value="<?php echo h($_POST['high_subjects']); ?>"/></td>
				<td><input type="text" name="high_marks" size="10px" value="<?php echo h($_POST['high_marks']); ?>"/></td>
				<td><input type="text" name="high_distinction" size="10px" value="<?php echo h($_POST['high_distinction']); ?>"/></td>
				<td rowspan="5"></td></tr>
				<tr><td>Intermediate(12th)</td>
				<td><input type="text" name="inter_board" size="10px" value="<?php echo h($_POST['inter_board']); ?>"/></td>
				<td><input type="text" name="inter_year_passing" size="10px" value="<?php echo h($_POST['inter_year_passing']); ?>"/></td>
				<td><input type="text" name="inter_subjects" size="10px" value="<?php echo h($_POST['inter_subjects']); ?>"/></td>
				<td><input type="text" name="inter_marks" size="10px" value="<?php echo h($_POST['inter_marks']); ?>"/></td>
				<td><input type="text" name="inter_distinction" size="10px" value="<?php echo h($_POST['inter_distinction']); ?>"/></td></tr>
				<tr><td>Under-Graduate*</td>
				<td><input type="text" name="ug_board" size="10px" value="<?php echo h($_POST['ug_board']); ?>"/></td>
				<td><input type="text" name="ug_year_passing" size="10px" value="<?php echo h($_POST['ug_year_passing']); ?>"/></td>
				<td><input type="text" name="ug_subjects" size="10px" value="<?php echo h($_POST['ug_subjects']); ?>"/></td>
				<td><input type="text" name="ug_marks" size="10px" value="<?php echo h($_POST['ug_marks']); ?>"/></td>
				<td><input type="text" name="ug_distinction" size="10px" value="<?php echo h($_POST['ug_distinction']); ?>"/></td></tr>
				<tr><td>Post-Graduate *</td>
				<td><input type="text" name="pg_board" size="10px" value="<?php echo h($_POST['pg_board']); ?>"/></td>
				<td><input type="text" name="pg_year_passing" size="10px" value="<?php echo h($_POST['pg_year_passing']); ?>"/></td>
				<td><input type="text" name="pg_subjects" size="10px" value="<?php echo h($_POST['pg_subjects']); ?>"/></td>
				<td><input type="text" name="pg_marks" size="10px" value="<?php echo h($_POST['pg_marks']); ?>"/></td>
				<td><input type="text" name="pg_distinction" size="10px" value="<?php echo h($_POST['pg_distinction']); ?>"/></td></tr>
				<tr rowspan="3"><td>Ph. D.</td>
				<td><input type="text" name="phd_board" size="10px" value="<?php echo h($_POST['phd_board']); ?>"/></td>
				<td><input type="text" name="phd_year_passing" size="10px" value="<?php echo h($_POST['phd_year_passing']); ?>"/></td>
				<td colspan="3">Thesis title:<input type="text" name="phd_thesis" size="35px" value="<?php echo h($_POST['phd_thesis']); ?>"/><br/>
				</td></tr>
				<tr><td>Any other qualification*</td>
				<td><input type="text" name="any_other_board" size="10px" value="<?php echo h($_POST['any_other_board']); ?>"/></td>
				<td><input type="text" name="any_other_year_passing" size="10px" value="<?php echo h($_POST['any_other_year_passing']); ?>"/></td>
				<td><input type="text" name="any_other_subjects" size="10px" value="<?php echo h($_POST['any_other_subjects']); ?>"/></td>
				<td><input type="text" name="any_other_marks" size="10px" value="<?php echo h($_POST['any_other_marks']); ?>"/></td>
				<td><input type="text" name="any_other_distinction" size="10px" value="<?php echo h($_POST['any_other_distinction']); ?>"/></td></tr>
				<tr rowspan="2"><td>NET JRF or Equivalent </td>
				<td  colspan="3"><input type="text" name="jrf_name_agency" size="45px" value="<?php echo h($_POST['jrf_name_agency']); ?>"/></td>
				<td  colspan="2"><input type="text" name="jrf_year" size="30px" value="<?php echo h($_POST['jrf_year']); ?>"/></td>
				</tr>
				<tr rowspan="2"><td>NET LS or Equivalent</td>
				<td  colspan="3"><input type="text" name="ls_name_agency" size="45px" value="<?php echo h($_POST['ls_name_agency']); ?>"/></td>
				<td  colspan="2"><input type="text" name="ls_year" size="30px" value="<?php echo h($_POST['ls_year']); ?>"/></td>
				</tr></table>
				<p><h3> Present Designation, Place and nature of work:</h3>
				<textarea name="present_designation" id="present_designation" rows="5" cols="80" /><?php echo h($_POST['present_designation']); ?></textarea>
				</p>

				<!--code for professional experience-->

				<p><h3>Professional Experience (most recent first):</h3></p>
				<table border="1px" id="professional_experience">
				<tr>
				<th>Position </th>
				<th>Department</th>
				<th>Institution </th>
				<th>From</th>
				<th>To</th>
				<th>Nature of Work</th>
				<th>Contractual or<br/>Permanent</th>
				<th>Remarks</th>
				</tr>
				<tr>
				<td><input type="text" name="professional_position" size="6px" value="<?php echo h($_POST['professional_position']); ?>"/></td>
				<td><input type="text" name="professional_department" size="6px" value="<?php echo h($_POST['professional_department']); ?>"/></td>
				<td><input type="text" name="professional_institution" size="6px" value="<?php echo h($_POST['professional_institution']); ?>"/></td>
				<td><input type="text" name="professional_from" size="6px" value="<?php echo h($_POST['professional_from']); ?>"/></td>
				<td><input type="text" name="professional_to" size="6px" value="<?php echo h($_POST['professional_to']); ?>"/></td>
				<td><input type="text" name="professional_nature_work" size="6px" value="<?php echo h($_POST['professional_nature_work']); ?>"/></td>
				<td><input type="text" name="professional_contractual" size="6px" value="<?php echo h($_POST['professional_contractual']); ?>"/></td>
				<td><input type="text" name="professional_remarks" size="6px" value="<?php echo h($_POST['professional_remarks']); ?>"/></td>
				</tr>
				</table>
				<P><input type="button" value="more" onclick="addRow('professional_experience');"/></P>

				<!--details of awards-->

				<p><h3>Details of Professional Recognitions, Awards, Fellowships, Honours received in last 10 years</h3></p>
				<table border="1px" id="professional_award">
				<tr rowspan="2">
				<th>Type of Award<br/>(International/National/State)</th>
				<th>Name of Award</th>
				<th>Awarding Institution or Body</th>
				<th>Award Date</th></tr>
				<tr>
				<td><input type="text" name="award_type" value="<?php echo h($_POST['award_type']); ?>"/></td>
				<td><input type="text" name="award_name" value="<?php echo h($_POST['award_name']); ?>"/></td>
				<td><input type="text" name="award_institution" value="<?php echo h($_POST['award_institution']); ?>"/></td>
				<td><input type="text" name="award_date" value="<?php echo h($_POST['award_date']); ?>"/></td></tr>
				</table>
          			<P><input type="button" value="more" onclick="addRow('professional_award');"/></P>
				<!--RESEARCH PART-->

				<label id="main_title">RESEARCH:</label><br/><br/><br/>

				<!--NO OF PAPERS PUBLISHED-->
				<p><h3>Total No of Papers published/accepted in Indexed peer reviewed journals :</h3></p>
				<table border="1px" id="professional_research">
				<tr rowspan="2">
				<th>Category</th>
				<th>Total No</th>
				</tr>
				<tr>
				<td>Original articles/Review articles</td>
				<td><input type="text" name="research_original_articles" value="<?php echo h($_POST['research_original_articles']); ?>"/></td>
				</tr>
				<tr>
				<td>Commentary / Letter to editor etc
				</td>
				<td><input type="text" name="research_commentary" value="<?php echo h($_POST['research_commentary']); ?>"/></td>
				</tr>
				<tr>
				<td>Authored Books</td>
				<td><input type="text" name="research_authored" value="<?php echo h($_POST['research_authored']); ?>"/></td>
				</tr>
				<tr>
				<td>Books / chapters</td>
				<td><input type="text" name="research_books" value="<?php echo h($_POST['research_books']); ?>"/></td>
				</tr>
				<tr>
				<td>Edited Books</td>
				<td><input type="text" name="research_edited" value="<?php echo h($_POST['research_edited']); ?>"/></td>
				</tr>
				</table>
				<!--details of peer-reviewed research-->

				<p><h3>List your peer-reviewed research (original and reviews) publications from latest to oldest in last 12 years  (Do not include Abstracts/Conference proceedings or other non-peer-reviewed publications)</h3></p>
				<table border="1px" id="professional_peer">
				<tr rowspan="2">
				<th>Author/s</th>
				<th>Year</th>
				<th>Journal name</th>
				<th>Vol. no.</th>
				<th>pages</th>
				<th>Impact factor (if any) or<br/> ISSN/ISBN no.</th>
				</tr>
				<tr>
				<td><input type="text" name="peer_author" size="10px" value="<?php echo h($_POST['peer_author']); ?>"/></td>
				<td><input type="text" name="peer_year" size="10px" value="<?php echo h($_POST['peer_year']); ?>"/></td>
				<td><input type="text" name="peer_journal" size="10px" value="<?php echo h($_POST['peer_journal']); ?>"/></td>
				<td><input type="text" name="peer_vol" size="10px" value="<?php echo h($_POST['peer_vol']); ?>"/></td>
				<td><input type="text" name="peer_pages" size="10px" value="<?php echo h($_POST['peer_pages']); ?>"/></td>
				<td><input type="text" name="peer_issn" size="10px" value="<?php echo h($_POST['peer_issn']); ?>"/></td>
				</tr>
				</table>
				<P><input type="button" value="more" onclick="addRow('professional_peer');"/></P>
				<!--details of Books Authored or Edited-->

				<p><h3>Books Authored or Edited and Chapters contributed to Books in last 12 years</h3></p>
				<table border="1px" id="professional_authored">
				<tr rowspan="2">
				<th>Author/s</th>
				<th>Title of Book/Chapter</th>
				<th>Editor/s</th>
				<th>Publisher</th>
				<th>pages</th>
				<th>ISSN/ISBN no.</th>
				</tr>
				<tr>
				<td><input type="text" name="authored_author" size="10px" value="<?php echo h($_POST['authored_author']); ?>"/></td>
				<td><input type="text" name="authored_title" size="10px" value="<?php echo h($_POST['authored_title']); ?>"/></td>
				<td><input type="text" name="authored_editor" size="10px" value="<?php echo h($_POST['authored_editor']); ?>"/></td>
				<td><input type="text" name="authored_publisher" size="10px" value="<?php echo h($_POST['authored_publisher']); ?>"/></td>
				<td><input type="text" name="authored_pages" size="10px" value="<?php echo h($_POST['authored_pages']); ?>"/></td>
				<td><input type="text" name="authored_issn" size="10px" value="<?php echo h($_POST['authored_issn']); ?>"/></td>
				</tr>
				</table>
				<P><input type="button" value="more" onclick="addRow('professional_authored');"/></P>
					
				<!--19. Other Professional Activities-->

				<label id="main_title">Other Professional Activities:</label><br/><br/><br/>
				<p><h3>List of International and National Conferences attended in last 10 years</h3></p>
				<table border="1px" id="professional_conference">
				<tr rowspan="2">
				<th>Name of the event</th>
				<th>Category <br/>(International/National/State )</th>
				<th>Date</th>
				<th>Venue</th>
				<th>pages</th>
				<th>Type of presentation<br/>(Poster/oral etc ) </th>
				</tr>
				<tr>
				<td><input type="text" name="conference_name" size="10px" value="<?php echo h($_POST['conference_name']); ?>"/></td>
				<td><input type="text" name="conference_category" size="10px" value="<?php echo h($_POST['conference_category']); ?>"/></td>
				<td><input type="text" name="conference_date" size="10px" value="<?php echo h($_POST['conference_date']); ?>"/></td>
				<td><input type="text" name="conference_venue" size="10px" value="<?php echo h($_POST['conference_venue']); ?>"/></td>
				<td><input type="text" name="conference_pages" size="10px" value="<?php echo h($_POST['conference_pages']); ?>"/></td>
				<td><input type="text" name="conference_presentation" size="10px" value="<?php echo h($_POST['conference_presentation']); ?>"/></td>
				</tr>
				</table>				
				<P><input type="button" value="more" onclick="addRow('professional_conference');"/></P>

				<!--details of Conferences/Workshops/Training programme-->

				<p><h3>List of Conferences/Workshops/Training programme organized in last 10 years</h3></p>
				<table border="1px" id="professional_programme">
				<tr rowspan="2">
				<th>Name of the event</th>
				<th>Category <br/>(International/National/State )</th>
				<th>Date</th>
				<th>Venue</th>
				<th>pages</th>
				<th>Role as Organizer </th>
				</tr>
				<tr>
				<td><input type="text" name="programme_name_event" size="10px" value="<?php echo h($_POST['programme_name_event']); ?>"/></td>
				<td><input type="text" name="programme_category" size="10px" value="<?php echo h($_POST['programme_category']); ?>"/></td>
				<td><input type="text" name="programme_date" size="10px" value="<?php echo h($_POST['programme_date']); ?>"/></td>
				<td><input type="text" name="programme_venue" size="10px" value="<?php echo h($_POST['programme_venue']); ?>"/></td>
				<td><input type="text" name="programme_pages" size="10px" value="<?php echo h($_POST['programme_pages']); ?>"/></td>
				<td><input type="text" name="programme_role" size="10px" value="<?php echo h($_POST['programme_role']); ?>"/></td>
				</tr>
				</table>
				
				<P><input type="button" value="more" onclick="addRow('professional_programme');"/></P>
				<!--details of Research projects undertaken-->

				<p><h3>Research projects undertaken in last 10 years</h3></p>
				<table border="1px" id="professional_projects">
				<tr rowspan="2">
				<th>Title</th>
				<th>Total amount</th>
				<th>Funding agency</th>
				<th>Duration</th>
				<th>Current Status  (Ongoing/Completed )</th>
				</tr>
				<tr>
				<td><input type="text" name="projects_title" size="10px" value="<?php echo h($_POST['projects_title']); ?>"/></td>
				<td><input type="text" name="projects_total" size="10px" value="<?php echo h($_POST['projects_total']); ?>"/></td>
				<td><input type="text" name="projects_funding" size="10px" value="<?php echo h($_POST['projects_funding']); ?>"/></td>
				<td><input type="text" name="projects_duration" size="10px" value="<?php echo h($_POST['projects_duration']); ?>"/></td>
				<td><input type="text" name="projects_current_status" size="10px" value="<?php echo h($_POST['projects_current_status']); ?>"/></td>
				</tr>
				</table>
				<P><input type="button" value="more" onclick="addRow('professional_projects');"/></P>

				<!--details of Editor or Member of Editorial Board -->

				<p><h3>Editor or Member of Editorial Board of Indexed journal/s during the last 10 years</h3></p>
				<table border="1px" id="professional_editor">
				<tr rowspan="2">
				<th>Name of Journal</th>
				<th>Publisher</th>
				<th>Editor/Member of Editorial Board</th>
				<th>Duration</th>
				</tr>
				<tr>
				<td><input type="text" name="editor_name" size="10px" value="<?php echo h($_POST['editor_name']); ?>"/></td>
				<td><input type="text" name="editor_publisher" size="10px" value="<?php echo h($_POST['editor_publisher']); ?>"/></td>
				<td><input type="text" name="editor_member" size="10px" value="<?php echo h($_POST['editor_member']); ?>"/></td>
				<td><input type="text" name="editor_duration" size="10px" value="<?php echo h($_POST['editor_duration']); ?>"/></td>
				</tr>
				</table>
					<P><input type="button" value="more" onclick="addRow('professional_editor');"/></P>

				<!--details of M.Phil./Ph.D./M.Ch./DM/MD/MS thesis -->

				<p><h3>M.Phil./Ph.D./M.Ch./DM/MD/MS thesis  supervised during the last 10 years</h3></p>
				<table border="1px" id="professional_supervised">
				<tr rowspan="2">
				<th>Title of thesis</th>
				<th>Name of the degree</th>
				<th>Year of award</th>
				<th>Supervisor/Co-supervisor</th>
				</tr>
				<tr>
				<td><input type="text" name="supervised_title" size="10px" value="<?php echo h($_POST['supervised_title']); ?>"/></td>
				<td><input type="text" name="supervised_name" size="10px" value="<?php echo h($_POST['supervised_name']); ?>"/></td>
				<td><input type="text" name="supervised_award" size="10px" value="<?php echo h($_POST['supervised_award']); ?>"/></td>
				<td><input type="text" name="supervised_supervisor" size="10px" value="<?php echo h($_POST['supervised_supervisor']); ?>"/></td>
				</tr>
				</table>
				<P><input type="button" value="more" onclick="addRow('professional_supervised');"/></P>

				<p><h3>Details of any administrative work carried out during last 10 years:</h3>
				<textarea name="administrarive_work" id="administrarive_work" rows="5" cols="80" /><?php echo h($_POST['administrarive_work']); ?></textarea>
				</p>

				<p><h3>Statement about Work done (teaching, research and/or other professional activities related to the discipline) so far and<br/> significance of the professional contribution (Maximum 500 words) :</h3>
				<textarea name="teaching_work" id="teaching_work" rows="5" cols="80" /><?php echo h($_POST['teaching_work']); ?></textarea>
				</p>

				<p><h3>A brief statement on your philosophy about teaching (Maximum 500 words):</h3>
				<textarea name="philosophy_teaching" id="philosophy_teaching" rows="5" cols="80" /><?php echo h($_POST['philosophy_teaching']); ?></textarea>
				</p>

				<p><h3>Statement about proposed Research/Professional activity and brief outline of proposal. If selected, how you would like to<br/> develop your department and your area of interest (Maximum 500 words) :</h3>
				<textarea name="professional_activity" id="professional_activity" rows="5" cols="80" /><?php echo h($_POST['professional_activity']); ?></textarea>
				</p>

				<p><h3>Extracurricular interests:</h3>
				<textarea name="extracurricular_interests" id="extracurricular_interests" rows="5" cols="80" /><?php echo h($_POST['extracurricular_interests']); ?></textarea>
				</p>

				<p><h3>If your spouse is also applying add his/her name and subject he/she is applying.</h3>
				<table border="1px">
				<tr rowspan="2">
				<td>Spouse Name:</td>
				<td><input type="text" name="spouse_name" value="<?php echo h($_POST['spouse_name']); ?>"/></td>
				</tr>
				<tr>
				<td>Post Applied for:</td>
				<td><input type="text" name="spouse_post" value="<?php echo h($_POST['spouse_post']); ?>"/></td>
				</tr>
				<tr>
				<td>Subject:
				</td>
				<td><input type="text" name="spouse_subject" value="<?php echo h($_POST['spouse_subject']); ?>"/></td>
				</tr>
				</table>
				</p>


				<p><h3>If you have ever been convicted by any court of law or administrative body in India or abroad? If yes, provide details:</h3>
				<textarea name="convicted_court" id="convicted_court" rows="5" cols="80" /><?php  echo h($_POST['convicted_court']); ?></textarea>
				</p>


				<p><h3>Names and addresses (including e-mail id and telephone number) of three or more Referees who can provide reference on<br/> the basis of personal knowledge of the applicant; one of the Referees in the case of those applying for a post of Assistant<br/> Professor must be either the thesis supervisor or who taught the candidate for the qualifying examination</h3></p>
				<table border="1px" id="professional_referees">
				<tr rowspan="2">
				<th>Name</th>
				<th>Address</th>
				<th>Professional relationship</th>
				<th>e-mail address</th>
				<th>Telephone no.</th>
				</tr>
				<tr>
				<td><input type="text" name="referees_name" size="10px" value="<?php echo h($_POST['referees_name']); ?>"/></td>
				<td><input type="text" name="referees_address" size="10px" value="<?php echo h($_POST['referees_address']); ?>"/></td>
				<td><input type="text" name="referees_relationship" size="10px" value="<?php echo h($_POST['referees_relationship']); ?>"/></td>
				<td><input type="text" name="referees_email" size="10px" value="<?php echo h($_POST['referees_email']); ?>"/></td>
				<td><input type="text" name="referees_telephone" size="10px" value="<?php echo h($_POST['referees_telephone']); ?>"/></td>
				</tr>
				</table>
                                <P><input type="button" value="more" onclick="addRow('professional_referees');"/></P>

				<br/><br/>
				<p><h3><U>DECLARATION::</U>I have fully read and clearly understood the rules and procedure governing recruitment of faculty at B.H.U ,<br/>to which i agree.</h3></p>
				<p>date:(dd/mm/yy)<input type="text" name="date_submit" value="<?php echo h($_POST['date_submit']); ?>"/></td> <br/>
				Place:<input type="text" name="place_submit" value="<?php echo h($_POST['place_submit']); ?>"/></td></p>
				<p align="center"><input type="file" name="signature_file"/></td><br/>(Signature of the Applicant)</p>

			</div>
		</div>
	<hr/>
	<div id="next_previous">
		<input type="submit" name="submit" id="submit" value="submit"/>
	</div>


	</form>
</body>
</html>
