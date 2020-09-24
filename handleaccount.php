<?php
include 'validation.php';
session_start();
// get data from form 
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneNumber=$_POST['phoneNumber'];
$facebookAccount=$_POST['facebookAccount'];
$twitterAccount=$_POST['twitterAccount'];
$instagramAccount=$_POST['instagramAccount'];

// modify the data
$email=cleanData($email);
$password=cleanData($password);

// validation 
$isValid=validateData($email,$password);
if($isValid)
{
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('location: allproducts.php');

}
$isDataRight=validateDataOfNewUser($username,$email,$password,$phoneNumber,$facebookAccount,$twitterAccount,$instagramAccount);
if($isDataRight)
{
    $_SESSION['username']=$username;
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['phoneNumber']=$phoneNumber;
    $_SESSION['facebookAccount']=$facebookAccount;
    $_SESSION['twitterAccount']=$twitterAccount;
    $_SESSION['instagramAccount']=$instagramAccount;

    header('location: allproducts.php');

}
?>