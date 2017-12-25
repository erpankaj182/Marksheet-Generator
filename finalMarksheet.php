<?php 

$college=$_REQUEST['college'];
$branch=$_REQUEST['branch'];
$roll_no=$_REQUEST['roll_no'];
$enroll_no=$_REQUEST['enroll_no'];
$name=$_REQUEST['sname'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$cam1=$_REQUEST['cam1'];
$cam2=$_REQUEST['cam2'];
$dldm1=$_REQUEST['dldm1'];
$dldm2=$_REQUEST['dldm2'];
$tefm1=$_REQUEST['tefm1'];
$tefm2=$_REQUEST['tefm2'];
$dbmsm1=$_REQUEST['dbmsm1'];
$dbmsm2=$_REQUEST['dbmsm2'];
$osm1=$_REQUEST['osm1'];
$osm2=$_REQUEST['osm2'];
$adsm1=$_REQUEST['adsm1'];
$adsm2=$_REQUEST['adsm2'];
$dbmslabm1=$_REQUEST['dbmslabm1'];
$dbmslabm2=$_REQUEST['dbmslabm2'];
$umlm1=$_REQUEST['umlm1'];
$umlm2=$_REQUEST['umlm2'];
$oslm1=$_REQUEST['oslm1'];
$oslm2=$_REQUEST['oslm2'];
$dhdlm1=$_REQUEST['dhdlm1'];
$dhdlm2=$_REQUEST['dhdlm2'];
$dis=$_REQUEST['dis'];


$tpt=$cam2+$dldm2+$tefm2+$dbmsm2+$osm2+$adsm2; //480
$tpp=$tpt/480*100;
$ttt=$cam1+$dldm1+$tefm1+$dbmsm1+$osm1+$adsm1; //120
$ttp=$ttt/120*100;
$tp=$dbmslabm1+$dbmslabm2+$umlm1+$umlm2+$oslm1+$oslm2+$dhdlm1+$dhdlm2;//350 
$tpp=$tp/350*100;
$gt=$tpt+$ttt+$tp+$dis;
$gtp=$gt/1000*100;

$disp=$dis/50*100;

if($cam1+$cam2<40 || $dldm1+$dldm2<40 ||$tefm1+$tefm2<40||$dbmsm1+$dbmsm2<40||$osm1+$osm2<40||$adsm1+$adsm2<40)
{
$resultf="FAIL";
}
else
{
$resultp="PASS";
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #0F65AF;
}
.style2 {font-size: 12px}
.style3 {font-size: 12px; color: #0F65AF; }
.style4 {color: #0F65AF}
.style6 {color: #0F65AF; font-style: italic; writing-mode: tb-rl;
 }
.style9 {font-size: 14px; color: #0F65AF; }
-->

@import url('https://fonts.googleapis.com/css?family=Raleway+Dots');
@font-face {
    font-family: myFirstFont;
    src: url(Dot_Matrix.ttf);
}
.style11 {
	color: #000000;
	font-family: 'Dot Matrix';
	font-weight: bold;
}
.style12 {color: #0F65AF; font-weight: bold; }
.style13 {
	color: #006600;
	font-weight: bold;
}
.style14 {
	color: #FF0000;
	font-weight: bold;
}
.style15 {color: #000000}

 body{
    -webkit-user-select: none; /* Chrome, Opera, Safari */
    -moz-user-select: none; /* Firefox 2+ */
    -ms-user-select: none; /* IE 10+ */
    user-select: none; /* Standard syntax */
}
</style>


</head>

<body>
<form action="" method="post">
  <table width="1041" border="0" align="center" >

    <tr>
      <td height="54" colspan="2"><img src="../images/logo.png" width="274" height="162"></td>
      <td colspan="7"><p align="center" class="style1">RAJASTHAN TECHNICAL UNIVERSITY</p>
        <p align="center" class="style1"><img src="../images/logo--hindinew.png" width="314" height="44">&nbsp;</p>
        <p align="center" class="style3">Statement of Marks Obtained at the Bachelor of Technology </p>
      <p align="center" class="style2">III SEMESTER EXAM. -2016 </p></td>
      <td colspan="4"><p><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.No.</span>:<span class="style4">M</span> 6084862 </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/09310</p></td>
    </tr>
    <tr>
      <td colspan="6"><span class="style4">Roll No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $roll_no?></span></span></td>
      <td colspan="7"><span class="style4">Enrollment No.: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $enroll_no?> </span></span></td>
    </tr>
    <tr>
      <td colspan="6"><span class="style4">Name of Candidate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $name?></span></span></td>
      <td colspan="7">BRANCH:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $branch?></span></td>
    </tr>
    <tr>
      <td colspan="13"><span class="style4">Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $fname?> </span></span></td>
    </tr>
    <tr>
      <td colspan="13"><span class="style4">Mother's Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $mname?></span></span></td>
    </tr>
    <tr>
      <td colspan="13"><span class="style4">Name of College: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $college?></span></span></td>
    </tr>
    <tr border="1">
      <td colspan="3" rowspan="2" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><div align="center"><span class="style4">Name of Subject </span></div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><div align="center"><span class="style4">Maximum Marks </span></div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><div align="center"><span class="style4">Maximum Pass Marks </span></div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><div align="center"><span class="style4">Marks Obtained </span></div></td>
	  
      <td width="67" rowspan="2" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><div align="center"><span class="style6">Remarks</span></div></td>
    </tr>
    <tr>
      <td width="50" height="77" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Final Exam.. </span></td>
	  
      <td width="62" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Term test/ Sessional </span></td>
	  
      <td width="35" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Total</span></td>
	  
      <td width="50" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Final Exam.. </span></td>
	  
      <td width="62" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Term test/ Sessional </span></td>
	  
      <td width="35" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Total</span></td>
	  
      <td width="46" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Final Exam..</span></td>
	  
      <td width="62" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Term test/ Sessional </span></td>
	  
      <td width="35" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">Total</span></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right:thin solid">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" >&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td rowspan="13" background="../images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11">THEORY PAPERS </span></td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right:thin solid">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right:thin solid">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
      <td background="../images/bgu.png">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS1A--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMPUTER ARCHITECTURE<span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png" >26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $cam2?></td>
      <td background="../images/bgu.png"><?php echo $cam1?></td>
      <td background="../images/bgu.png"><?php echo $cam1+$cam2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS2A-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIGITAL LOGIC DESGIN <span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $dldm2?></td>
      <td background="../images/bgu.png"><?php echo $dldm1?></td>
      <td background="../images/bgu.png"><?php echo $dldm1+$dldm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS3A--&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TELECOMMUNICATION FUNDAMENTALS<span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $tefm2?></td>
      <td background="../images/bgu.png"><?php echo $tefm1?></td>
      <td background="../images/bgu.png"><?php echo $tefm1+$tefm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS4A-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATABASE MANAGEMENT SYSTEMS<span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $dbmsm2?></td>
      <td background="../images/bgu.png"><?php echo $dbmsm1?></td>
      <td background="../images/bgu.png"><?php echo $dbmsm1+$dbmsm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS5A--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OPERATING SYSTEMS<span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
       <td background="../images/bgu.png"><?php echo $osm2?></td>
      <td background="../images/bgu.png"><?php echo $osm1?></td>
      <td background="../images/bgu.png"><?php echo $osm1+$osm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS6A.1A-- &nbsp;&nbsp;&nbsp;&nbsp;ADVANCED DATA STRUCTURE<span></label></td>
      <td background="../images/bgu.png">80</td>
      <td background="../images/bgu.png">20</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png" >26</td>
      <td background="../images/bgu.png"><div align="left">----</div></td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $adsm2?></td>
      <td background="../images/bgu.png"><?php echo $adsm1?></td>
      <td background="../images/bgu.png"><?php echo $adsm1+$adsm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS7A--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DATABASE LAB<span></label></td>
      <td background="../images/bgu.png">60</td>
      <td background="../images/bgu.png">40</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">12</td>
      <td background="../images/bgu.png">18</td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $dbmslabm2?></td>
      <td background="../images/bgu.png"><?php echo $dbmslabm1?></td>
      <td background="../images/bgu.png"><?php echo $dbmslabm1+$dbmslabm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS8A-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SYSTEM DESIGN IN UML LAB<span></label></td>
      <td background="../images/bgu.png">45</td>
      <td background="../images/bgu.png">30</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">75</td>
      <td background="../images/bgu.png">9</td>
      <td background="../images/bgu.png">14</td>
      <td background="../images/bgu.png" style="border-right:thin solid">30</td>
       <td background="../images/bgu.png"><?php echo $umlm2?></td>
      <td background="../images/bgu.png"><?php echo $umlm1?></td>
      <td background="../images/bgu.png"><?php echo $umlm1+$umlm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">5CS9A-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPERATING SYSTEMS SIMULATION LAB <span></label></td>
      <td background="../images/bgu.png">60</td>
      <td background="../images/bgu.png">40</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">100</td>
      <td background="../images/bgu.png">12</td>
      <td background="../images/bgu.png">18</td>
      <td background="../images/bgu.png" style="border-right:thin solid">40</td>
      <td background="../images/bgu.png"><?php echo $oslm2?></td>
      <td background="../images/bgu.png"><?php echo $oslm1?></td>
      <td background="../images/bgu.png"><?php echo $oslm1+$oslm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11">5CS10-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIGITAL HARDWARE DESIGN LAB<span></td>
      <td background="../images/bgu.png">45</td>
      <td background="../images/bgu.png">30</td>
      <td background="../images/bgu.png" style="border-right: thin solid;">75</td>
      <td background="../images/bgu.png">9</td>
      <td background="../images/bgu.png">14</td>
      <td background="../images/bgu.png" style="border-right:thin solid">30</td>
     <td background="../images/bgu.png"><?php echo $dhdlm2?></td>
      <td background="../images/bgu.png"><?php echo $dhdlm1?></td>
      <td background="../images/bgu.png"><?php echo $dhdlm1+$dhdlm2?></td>
    </tr>
    <tr>
      <td colspan="3" background="../images/bgu.png" style="border-left: thin solid; border-right: thin solid; border-bottom: thin solid"><span class="style11">5CSDC----&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISCIPLINE &amp; EXTRA CU RRICULAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ACTIVITY <span></td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right: thin solid; border-bottom:thin solid">50</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-right:thin solid;border-bottom:thin solid ">&nbsp;</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid">&nbsp;</td>
      <td background="../images/bgu.png" style="border-bottom:thin solid"><?php echo $dis?></td>
    </tr>
    
    <tr>
      <td width="263" rowspan="2" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style4">Total Marks Obtained </div></td>
	  
      <td width="64" height="81" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style12">Theory Papers </div></td>
	  
      <td width="224" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style4" ><strong>Term Test </strong></div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style4"><strong>Practicals &amp; Sessionals <br />
      </strong></div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style4" ><strong>Discipline &amp; Extra curricular Activitiy</strong></div></td>
	  
      <td colspan="4" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center" class="style4"><strong>Grand Total </strong></div></td>
    </tr>
    <tr>
      <td background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><?php echo $tpt?>/480</div></td>
	  
      <td background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid " ><div align="center"><?php echo $ttt?>/120</div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><?php echo $tp?>/350</div></td>
	  
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><?php echo $dis?>/50</div></td>
	  
      <td colspan="4" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><?php echo $gt?>/1000</div></td>
    </tr>
    <tr>
      <td background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><span class="style4">Percentage of Marks </span></td>
	  
      <td background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><strong><?php echo round($tpp,2)?>%</strong></div></td>
      <td background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><strong><?php echo round($ttp,2)?>%</strong></div></td>
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><strong><?php echo round($tpp,2)?>%</strong></div></td>
      <td colspan="3" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><strong><?php echo round($disp,2)?>%</strong></div></td>
      <td colspan="4" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><div align="center"><strong><?php echo round($gtp,2)?>%</strong></div></td>
    </tr>
    <tr>
      <td colspan="13" background="../images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><span class="style4">Result :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style13"><?php echo $resultp ?></span> <span class="style14"><?php echo $resultf ?></span>  </td>
    </tr>
    <tr>
      <td height="107" colspan="13"><p class="style4">NOTE: (The brief guidelines given below are only Indicative. For detail, the corresponding orders/notifications Issued from (into to timo mustobo referred)</p>
	  <ol>
     <li style="color:#0F65AF"> <p class="style4">Minimum passing marks in each Theory Paper 33% in Final Examination and 40% in aggregate of Term Test and Final Examination 'AND' in Practical &amp; Sessional 30% in each components taken together&quot;.</li>
	 
     <li style="color:#0F65AF">Passing in Discipline and <strong>Extra-curricular activities</strong> is not necessary but marks obtained therein will be counted in total marks / percentage obtained.<br /></li>
	 
     <li style="color:#0F65AF"> Star(*). shown against the marks denotes <strong>FAIL</strong> in that paper and &quot;G&quot; denotes Grace marks awarded in that paper to pass the examination. However.the grace marks are virtual marks which are neither to be added in Individual component/ subject nor in total/ aggregate marks obtained. The Grace marks will be awarded only if, the student appears in all the papers prescribed for the<br />
        examination.<br /></li>
      <li style="color:#0F65AF"><strong>Grace Marks</strong> to the extent of 1% of the aggregate marks prescribed tor an examination (to be raised to the next whole number) will be awarded to a student in the failed subject(s) Provided the student passes the examination by the award of such Grace Marks.<br /></li>
	  
<li style="color:#0F65AF"><strong>Promotion :</strong> A student may be promoted to the higher class only When he/She has passed atleast in 25% of the theory papers and 25% of the practical and seesional subjects. separateiy.<br /></li>

<li style="color:#0F65AF"><strong>Re-vatuation</strong> of answer books shall be permissible in not more than 25% of the theory papers (to be raised to the next whole number) in which a Student is actually appeared in examination. For revaluation, the student must submit his/her application form (through Head of the institute) to the University withln 15 days from the date of issue of mark sheets.lncomplete application  without requisite fee or received after the due date will be rejected.<br /></li>

<li style="color:#0F65AF">Answer books are not subjected to any inspection or production before any external or internal agency except at the instance of Vice-Chancellor.<br /></li>

<li style="color:#0F65AF">in case of any mistake being detected during the preparation of the marks-sheets or afterwards, the University is fully empowered to correct the same.<br /></li>

<li style="color:#0F65AF">All court cases shall be sublent to the jurisdiction of the RajasthanTechnical University Headquarter i.e. Kota and not any other place.<br /></li>

<li style="color:#0F65AF">For, any kind of improvement as per rules, the student has to apply within one month of the declaration of the result in their institutes.<br /></li>

<li style="color:#0F65AF"><strong>Term Test</strong>: A student is allowed to improve the term tests if he/she is appearing in the University Examination of that theory paper again and if falling earlier. If a student has applied tor<br />
        improvement of term tests marks, the marks secured by him/her in previous term test shall stand automatically cancelled. The marks of the latest examinations/tests shall only be considered for working out the result. it such a candidate has absented himself/herself from the test, he/she shall be treated as absent.<br /></li>

<li style="color:#0F65AF"><strong>Sessional Improvment:</strong> if the student is failing in any practical and / or sessional subject(s),he/she can apply for improvement in the sessional component provided the earlier marks in the sessional component are less than 40%. The student will be required to register in both practical and sessional components of the subject(s) and his/her marks of the latest practical &amp; sessional examination shall only be considered for working out the result.if such a student has absented himself/herelf from the test,then  he/she shall be treated as absent.</li></p></ol></td>
    </tr>
    <tr>
      <td height="107" colspan="13"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/sign1.png" width="83" height="66"></p>
        <p><span class="style4">KOTA</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4">Date</span>  18/06/16 RESULT DECLARED ON &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;16/06/2016 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4">(Prof. A.K. Dwivedi) </span></p>
        <p class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controller of Examinations </p></td>
    </tr>
    <tr>
      <td height="107" colspan="13"><div align="center"><button onClick="window.print()">Print</button></div></td>
    </tr>
  </table>
</form>
</body>
</html>
