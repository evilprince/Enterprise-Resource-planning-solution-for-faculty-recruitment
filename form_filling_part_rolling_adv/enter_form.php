<?php

echo "entered in the enter_form";
//code for testing the form data 

include 'data_variables.php';
/**
   FROM HERE WE CREATE THE TABLE FOR THE 
   FACULTY REQRITMENT

   **/
echo $email;

 mysql_select_db($db_name);

$query1="INSERT INTO $email (applied_position,department_name,faculty_name,candidate_name,fathers_name,mothers_name,correspondence_address,permanent_address,mobile_number,fax_number,_email,date_of_birth,_sex,marital_status,_nationality,_category,physically_challenged,high_school_board ,
high_school_year_completed ,
high_school_marks ,
high_school_distinction ,
high_school_subjects ,
intermediate_board ,
intermediate_year_completed ,
intermediate_marks ,
intermediate_distinction ,
intermediate_subjects ,
under_graduate_board ,
under_graduate_year_completed ,
under_graduate_marks ,
under_graduate_distinction ,
under_graduate_subjects ,
post_graduate_board ,
post_graduate_year_completed ,
post_graduate_marks ,
post_graduate_distinction ,
post_graduate_subjects ,
 phd_board ,
phd_year_completed ,
phd_title_of_thesis ,
  any_other_quali_board ,
any_other_quali_year_completed ,
any_other_quali_marks ,
any_other_quali_distinction ,
any_other_quali_subjects ,
NET_JRF_year_qualified ,
NET_JRF_name_of_agency ,
NET_LS_year_qualified ,
    NET_LS_name_of_agency ,
present_present_designation ,
    professional_experience_position ,
    professional_experience_department ,
    professional_experience_institution ,
    professional_experience_from ,
    professional_experience_to ,
    professional_experience_nature_of_work ,
    professional_experience_contractual_or_permanent ,
    professional_experience_salary ,
    awards_type_of_award ,
    awards_name_of_award ,
    awards_awarding_institution ,
    awards_award_date ,
    research_publications_peer_author ,
    research_publications_peer_year ,
    research_publications_peer_journal_name ,
    research_publications_peer_vol_no ,
    research_publications_peer_pages ,
    research_publications_peer_ISSN ,
    research_publications_total_papers_original_articles ,
    research_publications_total_papers_commentary ,
    research_publications_total_papers_authored_books ,
    research_publications_total_papers_books ,
    research_publications_total_papers_edited_books ,
    research_publications_peer_author ,
    research_publications_peer_year ,
    research_publications_peer_journal_name ,
    research_publications_peer_vol_no ,
    research_publications_peer_pages ,
    research_publications_peer_ISSN ,
    research_publications_books_author ,
    research_publications_books_title ,
    research_publications_books_editor ,
    research_publications_books_publisher ,
    research_publications_books_pages ,
    research_publications_books_ISSN ,
    other_conferences_name ,
    other_conferences_category ,
    other_conferences_date ,
    other_conferences_venue ,
        other_conferences_pages ,
    other_conferences_type ,
    other_programme_name ,
    other_programme_category ,
    other_programme_date ,
    other_programme_venue ,
       other_programme_pages ,
    other_programme_role ,
    other_projects_tile ,
    other_projects_total_amount ,
    other_projects_funding_agency ,
    other_projects_duration ,
    other_projects_current_status ,
    other_patents_patents ,
    other_editorial_name ,
    other_editorial_publisher ,
    other_editorial_editor ,
    other_editorial_duration ,
    other_thesis_title ,
    other_thesis_name ,
    other_thesis_award ,
    other_thesis_supervisor,
    details_administration,
    details_work_done,
    details_philosophy,
    details_proposed_research,
    details_extracurricular,
    spouse_name,
    spouse_post,
    spouse_subject,
    convict_details,
    referees_name,
    referees_address,
    referees_professional_relationship,
    referees_email,
    referees_telephone,registration_date,registration_place)VALUES('$positionApplied', '$departmentName', '$facultyName', '$candidateName', '$fathersName', '$mothersName','$correspondenceAddress', '$permanentAddress', '$mobileNumber', '$faxNumber', '$eMail', '$date_of_birth', '$sex','$maritalStatus', '$nationality', '$category', '$physicallyChallenged',$board
,'$year_completed'
,'$marks'
,'$distinction'
,'$subjects'
,'$boardInt'
,'$year_completedInt'
,'$marksInt'
,'$distinctionInt'
,'$subjectsInt'
,'$boardug'
,'$year_completedug'
,'$marksug'
,'$distinctionug'
,'$subjectsug'
,'$boardpg'
,'$year_completedpg'
,'$markspg'
,'$distinctionpg'
,'$subjectspg'
,'$boardphd'
,'$year_completedphd'
,'$title_of_thesis'
,'$boardany'
,'$year_completedany'
,'$marksany'
,'$distinctionany'
,'$subjectsany'
,'$name_of_agencyjrf'
,'$year_completedjrf'
,'$name_of_agencyls'
,'$year_completedls'
,'$present_designation'
,'$position'
,'$department'
,'$institution'
,'$from'
,'$to'
,'$nature_of_work'
,'$contractual_or_permanent'
,'$salary'
,'$type_of_award'
,'$name_of_award'
,'$awarding_institution'
,'$award_date'
,'$original_articles'
,'$commentary'
,'$authored_books'
,'$books'
,'$edited_books'
,'$authorp'
,'$yearp'
,'$journal_namep'
,'$vol_nop'
,'$pagesp'
,'$ISSNp'
,'$author'
,'$title'
,'$editor'
,'$publisher'
,'$pages'
,'$ISSN'
,'$namecon'
,'$categorycon'
,'$datecon'
,'$venuecon'
,'$pagescon'
,'$typecon'
,'$nameop'
,'$categoryop'
,'$dateop'
,'$venueop'
,'$pagesop'
,'$roleop'
,'$titleopr'
,'$total_amountopr'
,'$funding_agencyopr'
,'$durationopr'
,'$current_statusopr'
,'$nameoer'
,'$publisheroer'
,'$editoroer'
,'$durationoer'
,'$titleoth'
,'$nameoth'
,'$awardoth','$supervisoroth'
,'$administration'
,'$work_done'
,'$philosophy'
,'$proposed_research'
,'$extracurricular'
,'$spouse_name'
,'$spouse_post'
,'$spouse_subject'
,'$convict_details'
,'$referees_name'
,'$referees_address'
,'$referees_professional_relationship'
,'$referees_email'
,'$referees_telephone'
,'$registraton_date'
,'$registraton_place'
)";


$result_query=mysql_query($query1);


if(!$result_query)
{

echo "error inserting data";

}

define("path_file","www.iitbhu.ac.in/rolling/uploads/$email/");

if(is_uploaded_file($_FILES['image_file']['tmp_name']) && is_uploaded_files($_FILES['signature_file']['tmp_name']))
{
 
   $result1=move_uploaded_file($_FILES['image_file']['tmp_name'],path_file."image$email");
   $result2=move_uploaded_file($_FILES['signature_file']['tmp_name'],path_file."signature$email");
  if($result1 && $result2)
{
  echo "file uploaded succesfully";
}
else
{
  echo "file error uploading";
}
}
else
{
  echo "error finding file";
}
 

?>
