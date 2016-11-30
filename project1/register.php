<?php
include "header.php";
?>

   <!-- Main jumbotron for a primary marketing message or call to action -->

    <div >
      <h1 id="text1">Register</h1>
      <h1 id="text2">Register</h1>
    </div><br>


    <div style="text-align: center;">
    <form  action="registerCart.php"  method="post">
           <div >

             name:<br/>
             <input type="text" name="name" value>

             <span class="error" id="nameErr">名字未填！</span><br/><br/>
             gender:<br/>
             &nbsp;&nbsp;&nbsp;
             <input type="radio" value="男" name="gender" ><label>&nbsp;男生&nbsp;&nbsp;&nbsp;&nbsp;</label>
             <input type="radio" value="女" name="gender" ><label>&nbsp;女生</label>

             <span class="error" id="genderErr">性別需勾選！</span><br/><br/>
             email:<br/>
             <input type="email" name="email" value>

             <span class="error" id="emailErr">信箱未填！</span><br/><br/>
             school:<br/>
             <input type="text" name="school" value>

             <span class="error" id="schoolErr">學校未填！</span><br/><br/>
             account:<br/>
             <input type="text" name="account" autofocus value>

             <span class="error" id="accountErr">帳號未填！</span><br/><br/>
             password:<br/>
             <input type="password" name="password1" value>

             <span class="error" id="password1Err">密碼未填！</span><br/><br/>
             input your password again:<br/>
             <input type="password" name="password2" value>

             <span class="error" id="password2Err">密碼(再輸入一次)不能為空！</span><br/><br/>
             <span class="error" id="passwordErr">錯誤！密碼輸入不一致！</span>
             <input  type="submit" value="註冊"><br/>
           </div>
      </form>

      <fb:login-button scope="public_profile,email,user_friends" onlogin="checkLoginState();">
      </fb:login-button>
    </div>




  <div class="footer">
    <p>&copy; NCCU MIS</p>
  </div>

<script src="script/err.js">
</script>
</body>
</html>
