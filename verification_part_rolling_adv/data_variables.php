<?php

echo "entered in the data_variables";
/**

 variables for general information
**/ 
$positionApplied=$_POST['position_applied'];$departmentName=$_POST['department_name'];$facultyName=$_POST['faculty_name'];
$fathersName=$_POST['fathers_name'];$mothersName=$_POST['mothers_name'];
$correspondenceAddress=$_POST['correspondence'];$permanentAddress=$_POST['permanent'];
$mobileNumber=$_POST['mobile_number'];$faxNumber=$_POST['fax_number'];
$year=$_POST['year'];$month=$_POST['month'];$date=$_POST['day'];
$date_of_birth="'$year'/'$month'/'$date'";$sex=$_POST['sex'];$maritalStatus=$_POST['marital_status'];
$nationality=$_POST['nationality'];$physicallyChallenged=$_POST['physicaly_challenged'];

// variables for high school

$board=$_POST['high_board'];
$year_completed==$_POST['high_year_passing'];
$marks=$_POST['high_marks'];
$distinction=$_POST['high_distinction'];
$subjects=$_POST['high_subjects'];

//variables for intermediate

$boardInt=$_POST['inter_board'];
$year_completedInt=$_POST['inter_year_passing'];
$marksInt=$_POST['inter_marks'];
$distinctionInt=$_POST['inter_distinction'];
$subjectsInt=$_POST['inter_subjects'];

//variables for undergraduate

$boardug=$_POST['ug_board'];
$year_completedug=$_POST['ug_year_passing'];
$marksug=$_POST['ug_marks'];
$distinctionug=$_POST['ug_distinction'];
$subjectsug=$_POST['ug_subjects'];



//variables for postgraduate

$boardpg=$_POST['pg_board'];
$year_completedpg=$_POST['pg_year_passing'];
$markspg=$_POST['pg_marks'];
$distinctionpg=$_POST['pg_distinction'];
$subjectspg=$_POST['pg_subjects'];


//variables for phd

$boardphd=$_POST['phd_board'];
$year_completedphd=$_POST['phd_year_passing'];
$title_of_thesis=$_POST['phd_thesis'];


//variables for undergraduate

$boardany=$_POST['any_other_board'];
$year_completedany=$_POST['any_other_year_passing'];
$marksany=$_POST['any_other_marks'];
$distinctionany=$_POST['any_other_distinction'];
$subjectsany=$_POST['any_other_subjects'];


//variables for jrf

$name_of_agencyjrf=$_POST['jrf_name_agency'];
$year_completedjrf=$_POST['jrf_year'];


//variables for jrf

$name_of_agencyls=$_POST['ls_name_agency'];
$year_completedls=$_POST['ls_year'];

//variables for present

$present_designation=$_POST['present_designation'];


//variables for professional

$position=$_POST['professional_position'];
$department=$_POST['professional_department'];
$institution=$_POST['professional_institution'];
$from=$_POST['professional_from'];
$to=$_POST['professional_to'];
$nature_of_work=$_POST['professional_nature_work'];
$contractual_or_permanent=$_POST['professional_contractual'];
$salary=$_POST['professional_remarks'];
	

//

$type_of_award=$_POST['award_type'];
$name_of_award=$_POST['award_name'];
$awarding_institution=$_POST['award_institution'];
$award_date=$_POST['award_date'];

//

$original_articles=$_POST['research_original_articles'];
$commentary=$_POST['research_commentary'];
$authored_books=$_POST['research_authored'];
$books=$_POST['research_books'];
$edited_books=$_POST['research_edited'];


//

$authorp=$_POST['peer_author'];
$yearp=$_POST['peer_year'];
$journal_namep=$_POST['peer_journal'];
$vol_nop=$_POST['peer_vol'];
$pagesp=$_POST['peer_pages'];
$ISSNp=$_POST['peer_issn'];


//

$author=$_POST['authored_author'];
$title=$_POST['authored_title'];
$editor=$_POST['authored_editor'];
$publisher=$_POST['authored_publisher'];
$pages=$_POST['authored_pages'];
$ISSN=$_POST['authored_issn'];


//	

$namecon=$_POST['conference_name'];
$categorycon=$_POST['conference_category'];
$datecon=$_POST['conference_date'];
$venuecon=$_POST['conference_venue'];
$pagescon=$_POST['conference_pages'];
$typecon=$_POST['conference_presentation'];
	


//

$nameop=$_POST['programme_name_event'];
$categoryop=$_POST['programme_category'];
$dateop=$_POST['programme_date'];
$venueop=$_POST['programme_venue'];
$pagesop=$_POST['programme_pages'];
$roleop=$_POST['programme_role'];


//

$titleopr=$_POST['projects_title'];
$total_amountopr=$_POST['projects_total'];
$funding_agencyopr=$_POST['projects_funding'];
$durationopr=$_POST['projects_duration'];
$current_statusopr=$_POST['projects_current_status'];


//

$nameoer=$_POST['editor_name'];
$publisheroer=$_POST['editor_publisher'];
$editoroer=$_POST['editor_member'];
$durationoer=$_POST['editor_duration'];

//

$titleoth=$_POST['supervised_title'];
$nameoth=$_POST['supervised_name'];
$awardoth=$_POST['supervised_award'];
$supervisoroth=$_POST['supervised_supervisor'];


//

$administration=$_POST['administrarive_work'];
$work_done=$_POST['teaching_work'];
$philosophy=$_POST['philosophy_teaching'];
$proposed_research=$_POST['professional_activity'];
$extracurricular=$_POST['extracurricular_interests'];


//
$spouse_name=$_POST['extracurricular_interests'];
$spouse_post=$_POST['extracurricular_interests'];
$spouse_subject=$_POST['extracurricular_interests'];

$convict_details=$_POST['extracurricular_interests'];

$referees_name=$_POST['extracurricular_interests'];
$referees_address=$_POST['extracurricular_interests'];
$referees_professional_relationship=$_POST['extracurricular_interests'];
$referees_email=$_POST['extracurricular_interests'];
$referees_telephone=$_POST['extracurricular_interests'];
$registraton_date=$_POST['registraton_date'];
$registraton_place=$_POST['registraton_place'];


?>
