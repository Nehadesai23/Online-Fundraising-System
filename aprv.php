<?php
include_once('db.php');
$qry="update notapproved set action='approved' where id='".$_GET['id']."'";
$res=mysqli_query($conn, $qry);
$qry="select * from notapproved where id='".$_GET['id']."'";
$res=mysqli_query($conn, $qry);
$row=mysqli_fetch_assoc($res);
$qry="insert into approved(id, reporter_name, reporter_mobile, reporter_email, reporter_address,username, password, reporter_image,action) values('".$row['id']."','".$row['reporter_name']."','".$row['reporter_mobile']."','".$row['reporter_email']."','".$row['reporter_address']."','".$row['username']."','".$row['password']."','".$row['reporter_image']."','".$row['action']."')";
$res=mysqli_query($conn, $qry);
$qry="delete from notapproved where id='".$_GET['id']."'";
$res=mysqli_query($conn, $qry);
header('location:disp_reg_reporters.php');
?>