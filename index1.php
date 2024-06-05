<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TAS</title>
<style type="text/css">
<!--
.style2 {color: #CCCCCC}
-->
</style>
</head>

<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3"><table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="118"><img src="Image/th.jpg" width="750" height="232" /></td>
      </tr>
      <tr>
        <td><img src="Images/garis.png" width="405" height="38" /><a href="index1.php"><img src="Images/home.png" width="84" height="38" border="0" /></a><a href="?page=profil"><img src="Images/profil.png" width="84" height="38" border="0" /></a><a href="?page=download"><img src="Images/Dwonload.png" width="84" height="38" border="0" /></a><a href="?page=Contact us"><img src="Images/kontak us.png" width="93" height="38" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#CCCCCC"><marquee behavior="scroll">
	<strong>Welcome To My site</strong>
    </marquee></td>
  </tr>
  <tr>
    <td width="261"><table width="262" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#99FFFF"><div align="center"><img src="Image/bullet2.gif" width="10" height="10" /> Menu</div></td>
      </tr>
    </table></td>
    <td colspan="2" bgcolor="#333333">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#666666"><p><?php include "menu.php"; ?>&nbsp;</p>
    <p><table width="200" border="1">
      <tr>
        <td bordercolor="#FFFFFF" class="style2"><div align="center">
          <p><span class="style6">Anda Pengunjung Ke </span>: </p>
          </div></td>
      </tr>
      <tr>
        <td height="31" bordercolor="#FFFFFF" class="style2"><div align="center">
          <?php include "counter.php"; ?>
          &nbsp;</div></td>
      </tr>
    </table></p>
	<p><table width="200" height="209" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="209" bgcolor="#999999"><h1 class="style19 style6 style9">Login</h1>
		<form action="index1.php?page=insert" method="post">
			<div>
		  		<label>USERNAME :</label>
		  		<input type="text" name="username" id="username" />
		  </div>
		  <div>
		  		<label>PASSWORD :</label>
				<input type="password" name="sandi" id="sandi"/>
		</div>
		<div>
			<input type="submit" value="Login" />
		</div>
		</form>
      </tr>
    </table>    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td colspan="2" valign="top" bgcolor="#999999"><?php include "Switch_Case.php"; ?>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="177">&nbsp;</td>
    <td width="312">&nbsp;</td>
  </tr>
</table>
</body>
</html>
