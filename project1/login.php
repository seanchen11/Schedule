<?php
include "header.php";
?>
   <!-- Main jumbotron for a primary marketing message or call to action -->


    <div >
      <h1 id="text1">log in</h1>
      <h1 id="text2">log in</h1>
    </div><br>


    <div style="text-align: center;">
    <form  action="loginCart.php" method="post" onsubmit="return logintest()";>
           <fieldset style="text-align: center; width: 600px; margin-left: auto; margin-right: auto;">
             account:<br/>
             <input type="text" id="userid" name="account" autofocus><br/><br/>
             password:<br/>
             <input type="password" id="userpwd" name="password" ><br/><br/>
             <input  type="submit"><br/>
           </fieldset>
      </form>
    </div>



  <div class="footer">
    <p>&copy; NCCU MIS</p>
  </div>


<script src="script/logintest.js">
</script>
</body>
</html>
