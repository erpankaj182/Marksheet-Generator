<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {	color: #FFFFFF;
	font-size: 20px;
	font-weight: bold;
}
.style3 {
	font-size: 14px;
	color: #FF0000;
}
.style4 {
	color: #FF0000;
	font-weight: bold;
}

body{
    -webkit-user-select: none; /* Chrome, Opera, Safari */
    -moz-user-select: none; /* Firefox 2+ */
    -ms-user-select: none; /* IE 10+ */
    user-select: none; /* Standard syntax */
}
-->
</style>
<script type="text/javascript">
function check()
{
var n=/^[a-zA-Z]+$/;

			//1.College Name Dropdown Validations
			if(document.frm.college.selectedIndex == 0)
			{
			document.getElementById('cerror').innerHTML="**Please Select the College";
			document.frm.college.focus();
			return false;
			}
			
			else
			{
			document.getElementById('cerror').innerHTML="";
			}
			
/*-------------------------------------------------------------------------------------------------------------*/
			
			//2.Roll No. Dropdown Validations
			if(document.frm.roll_no.selectedIndex == 0)
			{
			document.getElementById('rnerror').innerHTML="**Please Select Roll Number of Student";
			document.frm.roll_no.focus();
			return false;
			}
			
			else
			{
			document.getElementById('rnerror').innerHTML="";
			}
			
/*-------------------------------------------------------------------------------------------------------------*/
			
			//3.Enrollment No. Dropdown Validations
			if(document.frm.enroll_no.selectedIndex == 0)
			{
			document.getElementById('enerror').innerHTML="**Please Select Enrollment Number";
			document.frm.enroll_no.focus();
			return false;
			}
			
			else
			{
			document.getElementById('ennerror').innerHTML="";
			}
			
/*-------------------------------------------------------------------------------------------------------------*/			
			
			//4.Name Dropdown Validations
			if(document.frm.sname.selectedIndex == 0)
			{
			document.getElementById('enerror').innerHTML="**Please Select Name of the Student";
			document.frm.sname.focus();
			return false;
			}
			
			else
			{
			document.getElementById('nerror').innerHTML="";
			}
			
/*-------------------------------------------------------------------------------------------------------------*/

			//5.Branch Dropdown Validations
			if(document.frm.branch.selectedIndex == 0)
			{
			document.getElementById('berror').innerHTML="**Please Select Branch";
			document.frm.branch.focus();
			return false;
			}
			
			else     //to clear the error if user select correct option
			{
			document.getElementById('berror').innerHTML="";
			}
			
/*-------------------------------------------------------------------------------------------------------------*/			
				
			//6.Father's Name Validations
              if(document.frm.fname.value=="" )
              {      
                  document.getElementById('ferrorname').innerHTML="**Please Enter Father's Name";
				  document.frm.fname.focus();
				  return false;
              }
			  
			  else
			  {
					if(document.frm.fname.value.search(n)==-1)
					{
					document.getElementById('ferrorname').innerHTML="**Please Enter A Valid Name";
				  	document.frm.fname.focus();
				  	return false;
					}
					
					else
					{
					document.getElementById('ferrorname').innerHTML="";
					}
			   }
			   
			   
/*-------------------------------------------------------------------------------------------------------------*/

			   //7.Mother's Name Validations
			  if(document.frm.mname.value=="" )
              {      
                  document.getElementById('merrorname').innerHTML="**Please Enter Mother's Name";
				  document.frm.mname.focus();
				  return false;
              }
			  
			  else
			  {
					if(document.frm.mname.value.search(n)==-1)
					{
					document.getElementById('merrorname').innerHTML="**Please Enter A Valid Name";
				  	document.frm.mname.focus();
				  	return false;
					}
					
					else{
					document.getElementById('ferrorname').innerHTML="";
					}
					
			   }
			   
/*-------------------------------------------------------------------------------------------------------------*/

         if(document.frm.cam1.value=="" || document.frm.cam2.value=="" ||document.frm.dldm1.value=="" ||document.frm.dldm2.value=="" ||document.frm.tefm1.value=="" ||document.frm.tefm2.value=="" ||document.frm.dbmsm1.value=="" ||document.frm.dbmsm2.value=="" ||document.frm.osm1.value=="" ||document.frm.osm2.value=="" ||document.frm.adsm1.value=="" ||document.frm.adsm2.value=="" ||document.frm.tefm1.value=="" ||document.frm.tefm1.value=="" ||document.frm.dbmslabm1.value=="" ||document.frm.dbmslabm2.value=="" ||document.frm.umlm1.value=="" ||document.frm.umlm2.value=="" ||document.frm.oslm1.value=="" ||document.frm.oslm2.value=="" ||document.frm.dhdlm1.value=="" ||document.frm.dhdlm2.value=="" )
		 {
			document.getElementById('markserror').innerHTML="**You can't Leave Any of the Marks Field Blank";
		 }
		 
}

</script>
</head>

<body>
<form action="finalMarksheet.php" method="post" name="frm" onsubmit="return check()">
  <table width="1148" height="745" border="0" align="center">
    <tr>
	     <td width="400" height="115"><img src="../images/logo.png" width="259" height="216"></td>

      <td height="80" colspan="3" bgcolor="#A80D00"><p align="center" class="style1">RAJASTHAN TECHNICAL UNIVERSITY</p>
      <p align="center" class="style1"><img src="../images/logo--hindinew.png"></p>
      <p align="center" class="style1">Marksheet Input Details  </p></td>
    </tr>
    <tr>
      <td width="400" height="24" align="left"><strong>College Name:</strong></td>
      <td colspan="2" align="left"><label>
        <select name="college">
          <option>---Select College---</option>
          <option>Swami Keshwanand Instt. of Tech.,Management And Gramothan,Jaipur</option>
          <option>Arya Instt. of Tech.,Jaipur</option>
          <option>Jaipur Engg. College And Research Center,Jaipur</option>
          <option>JECRC,UDML Engg.College,Jaipur</option>
          <option>Rajasthan Engg. College,Jaipur</option>
        </select><span class="style4" id="cerror"></span>
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><strong>Roll No.</strong></td>
      <td colspan="2" align="left"><label>
        <select name="roll_no">
          <option>---Select Roll No.---</option>
          <option>14ESKCS300</option>
          <option>14ESKCS301</option>
          <option>14ESKCS302</option>
          <option>14ESKCS303</option>
          <option>14ESKCS304</option>
          <option>14ESKCS305</option>
          <option>14ESKCS306</option>
          <option>14ESKCS307</option>
          <option>14ESKCS308</option>
          <option>14ESKCS309</option>
        </select><span class="style4" id="rnerror"></span>
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><strong>Enrollment No. </strong></td>
      <td colspan="2" align="left"><label>
        <select name="enroll_no">
          <option>---Select Enrollment No.---</option>
          <option>14E1SKCSM40P300</option>
          <option>14E1SKCSM40P301</option>
          <option>14E1SKCSM40P302</option>
          <option>14E1SKCSM40P303</option>
          <option>14E1SKCSM40P304</option>
          <option>14E1SKCSM40P305</option>
          <option>14E1SKCSM40P306</option>
          <option>14E1SKCSM40P307</option>
          <option>14E1SKCSM40P308</option>
          <option>14E1SKCSM40P309</option>
        </select><span class="style4" id="enerror"></span>
      </label></td>
    </tr>
    <tr>
      <td height="31" align="left"><strong>Name</strong></td>
      <td colspan="2" align="left"><label>
        <select name="sname">
          <option>---Select Name---</option>
          <option>Pankaj Agrawal</option>
          <option>Vaibhav Vijay</option>
          <option>Vineet Baj</option>
          <option>Pranshu Rastogi</option>
          <option>Virendra Singal</option>
          <option>Rishabh Ranjan</option>
          <option>Yaashi Aggarwal</option>
          <option>Sohel Mansori</option>
          <option>Sagar Jangid</option>
          <option>Tusar Sharma</option>
          <option>Rahul Sharma</option>
          <option>Rajesh Jangid</option>
        </select><span class="style4" id="nerror"></span>
      </label></td>
    </tr>
    <tr>
      <td height="31" align="left"><strong>Branch</strong></td>
      <td colspan="2" align="left"><label>
        <select name="branch">
          <option>---Select Branch---</option>
          <option>Computer Science</option>
          <option>Information Technology</option>
          <option>Civil Engeneering</option>
          <option>Mechanical Engineering</option>
          <option>Electrical Engineering</option>
          <option>Electronics &amp; Communication Engineering</option>
        </select><span class="style4" id="berror"></span>
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><strong>Father's Name </strong></td>
      <td colspan="2" align="left"><label>
      <input type="text" name="fname" />
      <span class="style4" id="ferrorname"></span>
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><strong>Mother's Name </strong></td>
      <td colspan="2" align="left"><input type="text" name="mname" /><span class="style4" id="merrorname"></span></td>
    </tr>
    <tr>
      <td height="28" align="left"><strong>Sub.Code And Sub Name </strong></td>
	  
      <td width="393" align="left"><p><strong>Marks1(Internal Marks)</strong></p>
      <p><span class="style3">**Should be Given Out of 20</span></p></td>
      <td width="341" align="left"><p><strong>Marks2(External Marks)</strong></p>
      <p><span class="style3">**Should be Given Out of 80</span></p></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS1A COMPUTER ARCHITECTURE</label></td>
      <td align="left"><input type="text" name="cam1" /></td>
      <td align="left"><label>
      <input type="text" name="cam2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS2A DIGITAL LOGIC DESGIN </label></td>
      <td align="left"><label>
      <input type="text" name="dldm1" />
      </label></td>
      <td align="left"><label>
      <input type="text" name="dldm2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS3A TELECOMMUNICATION FUNDAMENTALS</label></td>
      <td align="left"><label>
      <input type="text" name="tefm1" />
      </label></td>
      <td align="left"><label>
      <input type="text" name="tefm2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS4A DATABASE MANAGEMENT SYSTEMS</label></td>
      <td align="left"><label>
      <input type="text" name="dbmsm1" />
      </label></td>
      <td align="left"><label>
      <input type="text" name="dbmsm2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS5A OPERATING SYSTEMS</label></td>
      <td align="left"><label>
      <input type="text" name="osm1" />
      </label></td>
      <td align="left"><label>
      <input type="text" name="osm2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS6A.1A ADVANCED DATA STRUCTURE</label></td>
      <td align="left"><label>
      <input type="text" name="adsm1" />
      </label></td>
      <td align="left"><label>
      <input type="text" name="adsm2" />
      </label></td>
    </tr>
    <tr>
      <td height="24" colspan="3" align="left"><span class="style3">**Internal Marks (Marks 1)  and External Marks (Marks 2) Should be Given As Instructions Specified </span></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS7A DATABASE LAB</label></td>
      <td align="left"><label>
      <input type="text" name="dbmslabm1" />
      <span class="style3">Should be Given Out of 60 </span></label></td>
      <td align="left"><label>
      <input type="text" name="dbmslabm2" />
      <span class="style3">Should be Given Out of 40 </span></label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS8A SYSTEM DESIGN IN UML LAB</label></td>
      <td align="left"><label>
      <input type="text" name="umlm1" />
      <span class="style3">Should be Given Out of 45 </span></label></td>
      <td align="left"><label>
      <input type="text" name="umlm2" />
      <span class="style3">Should be Given Out of 30 </span></label></td>
    </tr>
    <tr>
      <td height="24" align="left"><label>5CS9A OPERATING SYSTEMS SIMULATION LAB </label></td>
      <td align="left"><label>
      <input type="text" name="oslm1" />
      <span class="style3">Should be Given Out of 60 </span></label></td>
      <td align="left"><label>
      <input type="text" name="oslm2" />
      <span class="style3">Should be Given Out of 40 </span></label></td>
    </tr>
    <tr>
      <td height="24" align="left">5CS10 DIGITAL HARDWARE DESIGN LAB</td>
      <td align="left"><input type="text" name="dhdlm1" />
      <span class="style3">Should be Given Out of 45 </span></td>
      <td align="left"><input type="text" name="dhdlm2" />
      <span class="style3">Should be Given Out of 30 </span></td>
    </tr>
    <tr>
      <td height="42" align="left">5CSDC DISCIPLINE &amp; EXTRA CU RRICULAR ACTIVITY </td>
      <td align="left"><input type="text" name="dis" />
      <span class="style3">Should be Given Out of 50 </span></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td height="42" colspan="3" align="left"><span class="style4" id="markserror"></span></td>
    </tr>
    <tr>
      <td height="24" colspan="3" align="left"><label>
		<div align="center">
          <input type="submit" name="Submit" value="Generate Marksheet" />
		  <br>
		  <br>
          <label>
          <input type="reset" name="Submit2" value="Reset Marksheet" />
          </label>
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
