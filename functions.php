<?php
include("include/config.php");
class DB_con
{
 public function insert($fname,$lname,$city)
 {
  $res = mysql_query("INSERT users(first_name,last_name,user_city) VALUES('$fname','$lname','$city')");
  return $res;
 }
 
 public function select()
 {
   $res=mysql_query("SELECT * FROM register_emp");
  return $res;
 }

public function selectperson($id)
 {
   $res=mysql_query("SELECT * FROM register_emp where ID='$id'");
  return $res;
 }

 public function editperson($id,$name,$email,$loc,$exp,$edu,$jobrdy,$stat)
 {
   $res=mysql_query("UPDATE register_emp set firstname = '$name' where ID='$id'");
   $res=mysql_query("UPDATE register_emp set email = '$email' where ID='$id'");
   //$res=mysql_query("UPDATE register_emp set register_emp_cont = '$cont' where ID='$id'");
  // $res=mysql_query("UPDATE register_emp set register_emp_add = '$add' where ID='$id'");
   $res=mysql_query("UPDATE register_emp set city = '$loc' where ID='$id'");
   $res=mysql_query("UPDATE register_emp set userlevel = '$exp' where ID='$id'");
   $res=mysql_query("UPDATE register_emp set colg = '$edu' where ID='$id'");
   //$res=mysql_query("UPDATE register_emp set register_emp_relo = '$relo' where ID='$id'");
  // $res=mysql_query("UPDATE register_emp set register_emp_look = '$look' where ID='$id'");
  // $res=mysql_query("UPDATE register_emp set register_emp_natjob = '$natjob' where ID='$id'");
  // $res=mysql_query("UPDATE register_emp set register_emp_test = '$test' where ID='$id'");
   $res=mysql_query("UPDATE register_emp set jobready = '$jobrdy' where ID='$id'");
  // $res=mysql_query("UPDATE register_emp set register_emp_stat = '$stat' where ID='$id'");
  return $res;
 }
 public function detail($id)
 {
   $res=mysql_query("SELECT * FROM register_empdoc where ID='$id'");
  return $res;
 }
  public function editdoc($doc_id,$file)
 {
                            $getuploadfiles="";
                            $filename=$_FILES["file"]["file"];
                                            $newName = time() . '_' . $_FILES['file']['file'];
                                         $destination = 'assets/doc/' . $newName;
                                          if (move_uploaded_file($_FILES['file']['file'], $destination)) 
                                        {
                                                $getuploadfiles=$newName;
                                            }
   $res=mysql_query("UPDATE register_empdoc set doc_file = '$getuploadfiles' where ID='$doc_id'");
  return $res;
 }

//Employer Table

 public function selectemployer()
 {
   $res=mysql_query("SELECT * FROM employer");
  
  return $res;
 }

 public function selectavailableempjob()
 {
   $res=mysql_query("SELECT * FROM employer,job where employer.stat='Available' and employer.employerid=job.employerid");
  
  return $res;
 }
 
 public function recommend($jval,$val)
 {
 $res=mysql_query("insert into recommend(jobid,ID) values('$jval','$val')");
 return $res;
 }
 
 public function showrecommended($x)
 {
 $res=mysql_query("select * from recommend where ID='$x'");
 return $res;
 }
 
 public function showjobtitle($x)
 {
 $res=mysql_query("select * from job where jobid='$x'");
 return $res;
 }
 
 
public function selectcompany($id)
 {
   $res=mysql_query("SELECT * FROM employer where employerid='$id'");
  return $res;
 }
 public function showjob($id)
 {
  $res=mysql_query("SELECT * FROM job WHERE employerid='$id'");
  return $res;
 }
 public function editjob($id,$title,$desc,$opening,$indus,$postdate,$deadline)
 {
 $res=mysql_query("UPDATE job set job_title='$title' where employerid='$id'");
 $res=mysql_query("UPDATE job set job_description='$desc' where employerid='$id'");
 $res=mysql_query("UPDATE job set opening='$opening' where employerid='$id'");
 $res=mysql_query("UPDATE job set industry='$indus' where employerid='$id'");
 $res=mysql_query("UPDATE job set postdate='$postdate' where employerid='$id'");
 $res=mysql_query("UPDATE job set deadline='$deadline' where employerid='$id'");
 }
 public function editcompany($id,$name,$email,$contp,$contn,$add,$indus,$stat)
 {
   $res=mysql_query("UPDATE employer set co_name = '$name' where employerid='$id'");
   $res=mysql_query("UPDATE employer set co_email = '$email' where employerid='$id'");
   $res=mysql_query("UPDATE employer set name = '$contp' where employerid='$id'");
   $res=mysql_query("UPDATE employer set contactno = '$contn' where employerid='$id'");
   $res=mysql_query("UPDATE employer set address = '$add' where employerid='$id'");
   $res=mysql_query("UPDATE employer set about = '$indus' where employerid='$id'");
   $res=mysql_query("UPDATE employer set stat = '$stat' where employerid='$id'");
  return $res;
 }

}
?>