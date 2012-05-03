<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head><title>.:: PHP Server Monitor :..</title></head> <div align="center">
  <p><font color="#003366" size="6" face="Verdana, Arial, Helvetica, sans-serif"><em><strong>School Server Monitor</strong></em></font></p>
  <p><font face="Verdana, Arial, Helvetica, sans-serif"><img src="Images/server.jpg"></font></p><p></p> <font face="Verdana, Arial, Helvetica, sans-serif">
<?php
$system = ini_get('system');
$win  = (bool)  $windows;
$count = 1;

// -------------------------
// Type in the name of the servers inside the quotation marks. 
// Add or remove as many as you want but make sure they have an added "services" entry.
// -------------------------
$host[1] = "Server1";
$host[2] = "Server2";
$host[3] = "Server3";
$host[4] = "Server4";
$host[5] = "Server5";
$host[6] = "Server6";
$host[7] = "Server7";
$host[8] = "Server8";
$host[9] = "Server9";
$host[10] = "Server10";
// -------------------------
// Type in the function of each server inside the quotation marks.
// -------------------------
$services[1] = "User Documents, T: Drive";
$services[2] = "Active Directory";
$services[3] = "Backup Active Directory";
$services[4] = "Email, Webmail";
$services[5] = "Sims, Payroll, G: Drive";
$services[6] = "Sharepoint VLE 2003";
$services[7] = "Sharepoint VLE 2007 Test";
$services[8] = "Oliver Library Database";
$services[9] = "Backup, Shared Printers";
$services[10] = "User Settings";

// You don't need to edit anything beyond here
echo "<table border=\"0\" align=\"center\">";
foreach ($host as $value) 
{
	 $counter = $counter + 1;
	  echo "<tr><td width=120>$value</td>"; 
      echo '<body bgcolor="#FFFFFF" text="#000000"></body>';       
      //check target IP or domain
	  $pingreply = exec("ping -n $count $value");
	  if ( substr($pingreply, -2) == 'ms')
  		{
			#echo "<td width=60><strong><font color='#006600'>UP</font></strong></td>";
			echo "<td width=60><img src='up.png'></td>";
			echo "<td width=230>". $services[$counter] . "</td>";
		    echo "<td>Reply Speed ";
		    echo substr($pingreply, -13);
		}
	  else 
		{
			#echo "<td width=60><strong><font color='#990000'>DOWN</font></strong></td>";
			echo "<td width=60><img src='down.jpg'></td>";
			echo "<td width=230>". $services[$counter] . "</td>";
		    echo "<td>";
			echo "Timeout...";
		}
}
echo "</td></tr></table>";
?>
</font></div>
