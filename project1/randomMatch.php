<?php
  session_start();
  include("php/connect.php");
  $data=mysql_query("select * from member");
?>
<?php
include "header.php";
?>

<div class="collum">
  <table class="table" width="700" border="2" style="color:black">
    <tr class="headerrow">
      <td>name</td>
      <td>profile picture</td>
    </tr>
  <?php
  $re=mysql_query("select * from member
                   ORDER BY RAND()
                   LIMIT 1");
  $rs=mysql_fetch_row($re);
  ?>
    <tr>
      <td bgcolor="#ff5500"><?php echo $rs[1];?></td>
      <td><img width="100px" height="100px" src="<?php echo $rs[8];?>"</td>
    </tr>
  <?php

  ?>
  </table>
</div>
  <div class="footer">
    <p>&copy; NCCU MIS</p>
  </div>


<script src="script/showSlide.js">
</script>
</body>
</html>
