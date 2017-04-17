<?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

?>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--
function memloginvalidate()
{
   if(document.form1.txtusername.value == "")
     {
        alert("Please enter admin UserName.");
        document.form1.txtusername.focus();
        return false;
     }
   if(document.form1.txtpassword.value == "")
     {
        alert("Please enter admin Password.");
        document.form1.txtpassword.focus();
        return false;
     }
   }

//-->
</script></head>


<body onLoad="document.form1.txtusername.focus();" background="admin.jpg">
<table id="Outer" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" align="center" width="780">
  <tbody><tr>
    <td><table id="inner" border="0" cellpadding="3" cellspacing="3" height="100" align="center" >
      <tbody><tr>
        <td>
		<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
.mainpanel{
	color=red;
}
.mainpanel1:hover{
	color=black;
}




</style>


<table border="0" cellpadding="0" cellspacing="0">
<tbody><tr>
<td colspan="15"><img src="images/trheader.jpg" height="120" width="780"></td>
</tr>

		



      
      
		
		<table border="0" cellpadding="0" cellspacing="0" width="900">
		<tbody><tr style="height:45px;">
		<td bgcolor="#FFCC00" width="140"><div align="center"><a href="index.php" class="mainpanel mainpanel1">--> Main Panel <--</a> </div></td>
		</tr>
		
          <table border="0" cellpadding="0" cellspacing="0" align="center" width="300">
            <tbody><tr>
              <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
              <td background="images/boxtopBG.gif" width="734"></td>
              <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
            </tr>
            <tr>
              <td background="images/boxleftBG.gif"></td>
              <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
                  <tbody><tr>
                    <td colspan="2" height="4"></td>
                  </tr>
                  <tr>
                    <td height="18"><table border="0" cellpadding="0" cellspacing="0" width="100%">
                      <tbody><tr>
                        <td colspan="3" class="smalltextgrey" width="378">
						</td>
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="300">
                      <tbody><tr>
                        <form name="form1" id="form1" method="post" onSubmit="return memloginvalidate()">
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%">
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
								<div class="headtext13" align="center"><strong>Admin Login </strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="3" height="10">
								<font color="#FF0000" style="font-size:12px;">
								<?php echo $error; ?>
								</font>
								</td>
                                </tr>
                              <tr>
                               
                                <td width="115">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Admin Id</font></td>
                                <td width="3">:</td>
                                <td width="160">
								<input name="txtusername" class="forminput" id="txtusername" maxlength="20" type="text"></td>
                              </tr>
                              <tr>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Password</font></td>
                                <td>:</td>
                                <td><input name="txtpassword" class="forminput" id="txtpassword" maxlength="20" type="password"></td>
                              </tr>
							  
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input name="Submit" class="green-button" value="Login" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  </td>
                        
                      </tr>
                    </tbody></table></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                  </tr>
              </tbody></table></td>
              <td background="images/boxrightBG.gif"></td>
            </tr>
            <tr>
              <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
              <td background="images/boxbtmBG.gif" width="734"></td>
              <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
            </tr>
          </tbody></table>
          <br>
          <br></td>
      </tr>
     
      
    </tbody></table></td>
  </tr>
</tbody></table>
</td></tr></tbody></table></body></html>