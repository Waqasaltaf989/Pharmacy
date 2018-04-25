<?php
// $cret= "create table Std_att(std_id int(6), lec_date date NOT NULL, Attend varchar(1) NOT NULL)";
//   if($con->query($cret)=== true){
//     echo "Table Created Successfuly";
//   }
//   else {
//     echo "Table Not Created".$con->error;
//   }
//    $tab_create="create table Ph_User(id int(6) primary key Auto_increment, name char(20) NOT NULL, f_name char(20) NOT NULL, Email varchar(30) NOT NULL UNIQUE, password varchar(20), dob date, gender char(10), phone varchar(20) NOT NULL, user_type char(10) )";
// if($con->query($tab_create)=== true){
//   echo "Table Created Successfuly";
// }
// else {
//   echo "Table Not Created".$con->error;
// }
//                                  //  Update column
// $sqal="alter table myuser ADD UNIQUE(email)";
// if($con->query($sqal)=== true){
//   echo "Column is updated";
// }
// else {
//   echo "Column is not updated".$con->error;
// }
//
//                                                Delete Data from  database tabel
// if(isset($_POST['Delete'])){
// $sql = "DELETE FROM myuser WHERE id>=1";
// if($con->query($sql)=== true){
//   echo "goood";
// }
// else {
//   echo "Table Not Deleted".$con->error;
// }
// }
//
//                                         Aded ne colum into table
//
// $upd="Alter table Ph_Medicine Add Price int(5)";
// if($con->query($upd)===true){
// echo "added";
// }
// else {
//   echo "Column not created";
// }
//    $tab_create="create table Ph_Medicine(M_id int(6) primary key Auto_increment, Medicine_Name char(30) NOT NULL, Provider varchar(30) NOT NULL, Quantity int(3) NOT NULL, Expiry date, Rack_NO varchar(15) )";
// if($con->query($tab_create)=== true){
//   echo "Table Created Successfuly";
// }
// else {
//   echo "Table Not Created".$con->error;
// }
// if(isset($_POST['button'])){    //trigger button click
//
//   $search=$_POST['search'];
//
// $query1="SELECT * FROM books where book_title LIKE '%{$search}%' || author_name LIKE '%{$search}%' LIMIT 1";
// $result1=mysql_query($query1);
// $srch=mysql_fetch_array($result1);}
// for ($i=2; $i <100 ; $i++) {
// $qry="insert into list (id) values('$i')";
// if($con->query($qry)===true)
// {echo "hoo gya <br>";}
// else {
//   echo "pangaa";
// }
//
// }
 ?>
