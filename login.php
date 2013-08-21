<?php
include('includes/config.inc.php');
if (isset($_POST['mail']))
{
    $myusername=$_POST['mail']; 
    $mypassword=$_POST['password']; 

    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysql_real_escape_string($myusername);
    $mypassword = mysql_real_escape_string($mypassword);
    $mypassword = pwd_encode($mypassword);
    $sql="SELECT * FROM users WHERE mail='$myusername' and password='$mypassword'";
    $result=mysql_query($sql);

    $count=mysql_num_rows($result);

    if($count==1)
    {
        $_SESSION['login']=$myusername;
        redirect_to('admin.php');
    }
    else 
    {
        $smarty->assign('error', 'Invalid username and/or password.');
    }
}
$smarty->display("$theme/login.tpl");
?>
