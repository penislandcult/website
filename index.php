<!DOCTYPE html>
<html>
 <title>Homepage</title>
 <head>
  <link rel="stylesheet" type="text/css" href="style.php" title="Style">
  <link rel="shortcut icon" href="/h/favicon.ico" type="image/x-icon">
 </head>
 <body>
  <div class="cont">
   <?php include "header.php"; ?>
   <div class="nbp">
   </div>
   <div class="content">
    <span>Pen Island Cult :: Hackers, scripters and rice</span><br>
	<span>People who pretend that they know what the fuck they're doing</span>
   </div>
   <div class="scripts">
    <table width="100%" cellspacing="0" cellpadding="2">
     <tr bgcolor="#66CC99"> 
      <td colspan="3" height="7"><span class="nbptitle">Scripts&nbsp;<a href="scripts/">>></a></td>
     </tr>
     <tr bgcolor="#ddffaa">
       <?php
       require("db.php");
 
       $sql = "SELECT id_scripts, name, url, des, date FROM scripts ORDER BY id_scripts DESC LIMIT 4";
       $result = $conn->query($sql);

       if($result->num_rows > 0)
	   {
       while($row = $result->fetch_assoc())
	   {
		   echo '<tr bgcolor="#ddffaa"><td><a href=' . $row["url"] . ' target="_blank" >' . $row["name"] . '</a></td><td>' . $row["des"] . "</td></tr>";
       }
       } else {
		   echo "No scripts";
       }
      $conn->close();
      ?>
     </tr>
    </table>
	<table width="100%" cellspacing="0" cellpadding="2">
     <tr bgcolor="#66CC99"> 
      <td colspan="3" height="7"><span class="nbptitle">Applications&nbsp;<a href="apps/">>></a></td>
     </tr>
     <tr bgcolor="#ddffaa">
       <?php
       require("db.php");
 
       $sql = "SELECT id_apps, name, url, des, date FROM apps ORDER BY id_apps DESC LIMIT 4";
       $result = $conn->query($sql);

       if($result->num_rows > 0)
	   {
       while($row = $result->fetch_assoc())
	   {
		   echo '<td><form method="get" action=' . $row["url"] . '><button type="submit">' . $row["name"] . '</button></form><tr bgcolor="#ddffaa"><td></td><td>' . $row["des"] . "</td></tr>";
       }
       } else {
		   echo "No apps";
       }
      $conn->close();
      ?>
     </tr>
    </table>
   </div>
   <?php include "footer.php"; ?>
  </div>
 </body>
</html>