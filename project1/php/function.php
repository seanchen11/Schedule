<?php

$nameErr = $genderErr = $emailErr = $schoolErr = $accountErr = $password1Err = $password2Err = $passwordErr = "";
function reg($name,$gender,$email,$school,$account,$password1,$password2,$password_md5)
{
    if($name==null)
        {
            $nameErr = "名字未填寫";
            echo"<font color='red'>$nameErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($gender==null)
        {
            $genderErr = "性別需勾選！";
            echo"<font color='red'>$genderErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($email==null)
        {
            $emailErr = "信箱未填！";
            echo"<font color='red'>$emailErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($school==null)
        {
            $schoolErr = "學校未填！";
            echo"<font color='red'>$schoolErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($account==null)
        {
            $accountErr = "帳號未填！";
            echo"<font color='red'>$accountErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($password1==null)
        {
            $password1Err = "密碼未填！";
            echo"<font color='red'>$password1Err</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($password2==null)
        {
            $password2Err = "密碼(再輸入一次)不能為空！";
            echo"<font color='red'>$password2Err</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    elseif($password1!=$password2)
        {
            $passwordErr = "錯誤！密碼輸入不一致！";
            echo"<font color='red'>$passwordErr</font>";
            echo'<meta http-equiv="refresh" content="2; url=register.php">';
        }
    else
        {
            $sql="INSERT INTO member (name, gender, email, school, account, password)
            VALUES
            ('$name','$gender','$email','$school','$account','$password_md5');";
           if(mysql_query($sql))
                {
                    echo"<font color='green'>註冊成功！</font>";
                    echo'<meta http-equiv="refresh" content="2; url=register.php">';
                }
            else
                {
                    echo"<font color='red'>註冊失敗！</font>";
                    echo'<meta http-equiv="refresh" content="2; url=register.php">';
                }
        }
}


?>
