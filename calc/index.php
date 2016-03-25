<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="style.php">
  <script src="script.js"></script>
 </head>
 <body>
  <div class="container">
   <div class="calc">
    <table>
	 <tr>
      <form name="calc">
       <td colspan="4"><textarea rows="3" cols="35" name="result" readonly></textarea></td>
      </form>
	 </tr>
     <tr>
      <td><button id="1" onclick="myFunction(this.id)">1</button></td>
      <td><button id="2" onclick="myFunction(this.id)">2</button></td>
      <td><button id="3" onclick="myFunction(this.id)">3</button></td>
	  <td><button id="+" onclick="myFunction(this.id)">+</button></td>
     </tr>
     <tr>
      <td><button id="4" onclick="myFunction(this.id)">4</button></td>
      <td><button id="5" onclick="myFunction(this.id)">5</button></td>
      <td><button id="6" onclick="myFunction(this.id)">6</button></td>
	  <td><button id="-" onclick="myFunction(this.id)">-</button></td>
     </tr>
     <tr>
      <td><button id="7" onclick="myFunction(this.id)">7</button></td>
      <td><button id="8" onclick="myFunction(this.id)">8</button></td>
      <td><button id="9" onclick="myFunction(this.id)">9</button></td>
	  <td><button id="*" onclick="myFunction(this.id)">*</button></td>
     </tr>
     <tr>
	  <td><button id="3.141592653589793" onclick="myFunction(this.id)">π</button></td>
	  <td><button id="0" onclick="myFunction(this.id)">0</button></td>
	  <td><button id="6.283185307179586" onclick="myFunction(this.id)">τ</button></td>
	  <td><button id="/" onclick="myFunction(this.id)">/</button></td>
     </tr>
     <tr>
      <td><button id="ANS" onclick="compute()">=</button></td>
	  <td><button id="CLEAR" onclick="Clear()">c</button></td>
	  <td><button id="SQRT" onclick="sqrt()">√</button></td>
     </tr>
    </table>
   <div>
  </div>
 </body>
</html>