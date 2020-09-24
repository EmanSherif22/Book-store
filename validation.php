<?php
//clean data
function cleanData($input)
{
    $input=htmlspecialchars($input);
    $input=trim($input);
    return $input;
}


function validateData($email,$password)
{
    $isValidData=true;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "wrong email, please try again";
            $isValidData=false;
    }
    if(empty($password) || strlen($password)<6)
    {
        echo "wrong password, please try again";
             $isValidData=false;
    }
    return $isValidData;
}

function validateDataOfNewUser($username,$email,$password,$phoneNumber,$facebookAccount,$twitterAccount,$instagramAccount)
{
    $isDataRight=true;
    if(!filter_var($username,FILTER_VALIDATE_EMAIL))
    {
        echo "wrong name format, please try again";
            $isDataRight=false;
    }
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "wrong email format, please try again";
            $isDataRight=false;
    }
    if(empty($password) || strlen($password)<6)
    {
        echo "wrong password, please try again";
             $isDataRight=false;
    }
    if(!filter_var($phoneNumber,FILTER_VALIDATE_INT))
    {
        echo "wrong number format, please try again";
            $isDataRight=false;
    }
    if(!filter_var($facebookAccount,FILTER_VALIDATE_URL))
    {
        echo "wrong url format, please try again";
            $isDataRight=false;
    }
    if(!filter_var($twitterAccount,FILTER_VALIDATE_URL))
    {
        echo "wrong url format, please try again";
            $isDataRight=false;
    }
    if(!filter_var($instagramAccount,FILTER_VALIDATE_URL))
    {
        echo "wrong url format, please try again";
            $isDataRight=false;
    }
    return $isDataRight;
}



?>