<?php
include 'dbconnect.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1354px;
	height: 715px;
	z-index: 1;
	left: -10px;
	top: 3px;
	text-align: center;
}
#apDiv2 {
	position: absolute;
	width: 557px;
	height: 61px;
	z-index: 2;
	left: 350px;
	top: 11px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
	text-align: center;
	color: #009;
}
#apDiv3 {
	position: absolute;
	width: 1293px;
	height: 55px;
	z-index: 3;
	left: 43px;
	top: 98px;
}
#apDiv1 #apDiv3 table {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv3 table {
	font-size: 24px;
}
#apDiv3 table {
	font-size: 16px;
}
#apDiv3 table {
	text-align: center;
	font-weight: bold;
}
#apDiv3 table {
	font-weight: normal;
}


#apDiv4 {
	position: absolute;
	width: 202px;
	height: 28px;
	z-index: 2;
	left: 513px;
	top: 165px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
}
#apDiv5 {
	position: absolute;
	width: 200px;
	height: 117px;
	z-index: 4;
	left: 72px;
	top: 304px;
	text-align: justify;
}
#apDiv1 #apDiv5 table {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: left;
}
#apDiv6 {
	position: absolute;
	width: 826px;
	height: 509px;
	z-index: 4;
	left: 203px;
	top: 201px;
}
#apDiv7 {
	position: absolute;
	width: 815px;
	height: 497px;
	z-index: 1;
	left: 5px;
	top: 5px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 16px;
	text-align: justify;
}
#apDiv8 {
	position: absolute;
	width: 274px;
	height: 31px;
	z-index: 5;
	left: 719px;
	top: 163px;
}
#apDiv1 #apDiv6 #apDiv7 form table {
	font-size: 14px;
}
</style>
</head>

<body background="images/i1.jpg">

<div id="apDiv1">
  <div id="apDiv4">Vehicle Registration:</div>
  <div id="apDiv6">
    <div id="apDiv7">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table width="810" height="492" border="0">
        <tr>
          <td width="214">Select Vehicle Type</td>
          <td width="11">:</td>
          <td width="171"><label for="select"></label>
          <select name="vtype" id="select">
          <option value="">Select Option</option>
			<option value="two">Two Wheeler</option>
			<option value="three">Three Wheeler</option>
            <option value="four">Four Wheeler</option>
            <option value="heavy">Heavy Motor Vehicle</option>
        </select></td>
          <td width="17">&nbsp;</td>
          <td width="17">&nbsp;</td>
          <td width="17">&nbsp;</td>
          <td width="156">Car Number</td>
          <td width="10">:</td>
          <td width="159"><label for="textfield"></label>
          <input type="text" name="carnum" id="textfield" /></td>
        </tr>
        <tr>
          <td>Chasis Number</td>
          <td>:</td>
          <td><input type="text" name="chasisnum" id="textfield2" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Engine Number</td>
          <td>:</td>
          <td><input type="text" name="enginenum" id="textfield3" /></td>
        </tr>
        <tr>
          <td>Model Number</td>
          <td>:</td>
          <td><input type="text" name="modelnum" id="textfield4" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Mfg by</td>
          <td>:</td>
          <td><input type="text" name="mfdname" id="textfield5" /></td>
        </tr>
        <tr>
          <td>Year of Mfg</td>
          <td>:</td>
          <td><input type="text" name="mfddate" id="textfield6" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Number of Cylinder</td>
          <td>:</td>
          <td><input type="text" name="numcylinder" id="textfield7" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Unloader Weight</td>
          <td>:</td>
          <td><input type="text" name="weight" id="textfield8" /></td>
        </tr>
        <tr>
          <td>Seating Capacity</td>
          <td>:</td>
          <td><input type="text" name="seatcapacity" id="textfield9" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Wheelbase</td>
          <td>:</td>
          <td><input type="text" name="wheelbase" id="textfield10" /></td>
        </tr>
        <tr>
          <td>Body Type</td>
          <td>:</td>
          <td><input type="text" name="bodytype" id="textfield11" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Class</td>
          <td>:</td>
          <td><label for="select"></label>
          <select name="vclass" id="select">
          <option value="">Select Option</option>
			<option value="mcycle">MCycle</option>
			<option value="lmv">LMV</option>
            <option value="hmv">HMV</option>
            
        </select></td>
        </tr>
        <tr>
          <td>Color</td>
          <td>:</td>
          <td><input type="text" name="color" id="textfield12" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>Fuel Used</td>
          <td>:</td>
          <td><label for="select"></label>
          <select name="fuel" id="select">
          <option value="">Select Option</option>
			<option value="petrol">Petrol</option>
			<option value="diesel">Diesel</option>
            
            
        </select></td>
        </tr>
        <tr>
          <td>CC</td>
          <td>:</td>
          <td><input type="text" name="vcc" id="textfield13" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td><input type="text" name="name" id="textfield14" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><p><br />
          </p></td>
        </tr>
        <tr>
          <td>Contact</td>
          <td>:</td>
          <td><input type="text" name="contact" id="textfield16" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label for="textfield19"></label></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><input type="text" name="address" id="textfield15" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Submit" />
          <input type="reset" name="button2" id="button2" value="Reset" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
      </form>
    </div>
  </div>

  
  <div id="apDiv3">
    <table width="1150" height="52" border="0">
      <tr>
        <td width="81" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="index.php">Home</a></td>
        <td width="154" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="registration.php">Registration</a></td>
        <td width="218" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="statusr.php">Status of Registration</a></td>
        <td width="93" bgcolor="#D6D6D6"><a style="text-decoration:none;" href="user_logout.php">Logout</a></td>
      </tr>
    </table>
  </div>
<div id="apDiv2">RTO Management System</div>
</div>
</body>
</html>