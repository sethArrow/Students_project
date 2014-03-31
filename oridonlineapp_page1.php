<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=5, IE=6, IE=7, IE=8, IE=9, IE=10" />
<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />

	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->

<style type="text/css">
html .jquerycssmenu{height: 1%;} 
td, tr {border: solid black 2px;}	
table {border-collapse: collapse; border: solid black 2px;}	/*Holly Hack for IE7 and below*/
</style>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="newmenu.css" />

	<title>Page Title Here</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="formwizard.css" media="screen" />

<script src="formwizard.js" type="text/javascript">

/***********************************************
* jQuery Form to Form Wizard- (c) Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

</script>

<script type="text/javascript">

var myform=new formtowizard({
	formid: 'feedbackform',
	persistsection: true,
	revealfx: ['slide', 500]
})

</script>
	
</head>

<body marginwidth="0" marginheight="0" width="80%">
	
<!-- End css3menu.com BODY section -->
<div id="content" align="center" style="border: 0px solid black;">

	<p><h3 align="center">UNIVERSITY OF GHANA</h3></p>
	<img src="images/ug_logo_front.jpg" width="70px" height="70px"  />
	<p>OFFICE OF RESEARCH, INNOVATION AND DEVELOPMENT
	<h3>UNIVERSITY OF GHANA RESEARCH FUND</h3>
	<h1>CALL FOR PROPOSALS</h1></p>
	<p><b>APPLICATION DEADLINE: </b></p><br />
	<form id="feedbackform" name="feedbackform" method="POST" action="onlineappdb.php">
	<!-- 1st Fieldset -->
	<fieldset class="sectionwrap">
	<legend>Step 1</legend>
	<table width="75%">
	<thead><strong>PLEASE INDICATE TYPE OF GRANT APPLICATION BY TICKING THE APPROPRIATE BOX:</strong></thead>
	<tbody>
	<tr><table>
	<tbody>
		<tr>
			<td height="50px" width="500px"><b>1. SEED FUNDING (UP TO GHC 5,000)</b></td><td width="300px" style="border: solid black 2px;">bbb</td>
		</tr>
		<tr>
			<td height="50px"><b>2. INVESTIGATOR-LED GRANTS (UP TO GHC 30,000)</b></td><td width="300px" style="border: solid black 2px;">ddd</td>
		</tr>
		<tr>
			<td height="50px"><b>3. LARGE MULTI-DISCIPLINARY GRANT (UP TO GHC 100,000)</b></td><td width="300px" style="border: solid black 2px;">fff</td>
		</tr>
	</tbody>
	</table></tr></tbody>
	</table><br /><br /><br /><br />
	<table width="75%">
		<tbody>
			<tr>
			<tr><td><b>LEAD FACULTY AND DEPARTMENT:</b><br /><textarea name="lead_dept" rows="2" cols="30"></textarea></td></tr>
			<tr><td><b>COLLABORATING FACULTIES AND DEPARTMENTS:</b><br /><textarea name="collaborating_dept" rows="2" cols="30"></textarea></td></tr>
			<tr><td><b>NAME OF PROJECT PI/ CONTACT PERSON/ COORDINATOR (PLEASE INDICATE AS APPROPRIATE BEFORE NAME):</b><br /><textarea name="pi_name" rows="2" cols="30"></textarea></td></tr>
			</tr>
		</tbody>
	</table>
	</fieldset>
	<!-- End of 1st Fieldset --><br /><br />
	<!-- 2nd Fieldset -->
	<fieldset class="sectionwrap">
	<table width="75%">
	<tbody><tr><td><h3>SUMMARY (Max. 1 page)</h3> </td></tr>
	<tr><td><textarea name="proj_summary" rows="10" cols="80"></textarea></td></tr>
	</table><br /><br /><br />
	<table width="75%">
	<tbody><tr><td><h3>PROBLEM STATEMENT (Max. 2 pages)</td></tr>
	<tr><td><textarea name="prob_statement" rows="20" cols="80"></textarea></td></tr>
	</tbody>
	</table>
	</fieldset>
	<!-- End 2nd Fieldset --><br /><br />
	<!-- 3rd Fieldset -->
	<fieldset class="sectionwrap">
	<table width="75%">
	<tbody>
	<thead><strong>DETAILED PROJECT DESCRIPTION</strong></thead>
	<tr><table width="75%">
	<tbody>
	<tr><td><strong>Goals</strong></td></tr>
	<tr><td><textarea name="goal" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Objectives</strong></td></tr>
	<tr><td><textarea name="objectives" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Specific Activities to Achieve the Objectives Indicated Above</strong></td></tr>
	<tr><td><textarea name="spec_activities" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Methodology</strong></td></tr>
	<tr><td><textarea name="method" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Expected Outputs/ Deliverables</strong></td></tr>
	<tr><td><textarea name="exp_outputs" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Work Plan and Implementation Plan</strong></td></tr>
	<tr><td><textarea name="work_plan" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Administrative/ Management Arrangements</strong></td></tr>
	<tr><td><textarea name="admin_arrangements" rows="10" cols="80"></textarea></td></tr>
	<tr><td><strong>Monitoring and Evaluation</strong></td></tr>
	<tr><td><textarea name="monitor_eval" rows="10" cols="80"></textarea></td></tr>
	</tbody></table></tr>
	</tbody>
	</table>
	</fieldset>
	<!-- End of 3rd Fieldset --><br /><br />
	<!-- 4th Fieldset -->
	<fieldset class="sectionwrap">
	<table width="75%">
	<thead><strong>DETAILS OF OTHER GRANTS HELD WHICH ARE RELATED TO THE PROPOSED RESEARCH TOPIC</strong><br /><br />Please complete the table below to provide information on other related grants which you currently hold.</thead>
	<tbody>
		<tr><td><strong>Sponsor/ Donor</strong></td><td><strong>Amount Awarded</strong><br />(Indicate Currency)</td><td><strong>Duration</strong><br />(month/ year)</td><td><strong>Research Topic/ Purpose</strong></td><tr>
		<tr><td><textarea name="sponsor_1" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded1" rows="2" cols="20"></textarea></td><td><textarea name="duration_1" rows="2" cols="20"></textarea></td><td><textarea name="research_topic1" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_2" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded2" rows="2" cols="20"></textarea></td><td><textarea name="duration_2" rows="2" cols="20"></textarea></td><td><textarea name="research_topic2" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_3" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded3" rows="2" cols="20"></textarea></td><td><textarea name="duration_3" rows="2" cols="20"></textarea></td><td><textarea name="research_topic3" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_4" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded4" rows="2" cols="20"></textarea></td><td><textarea name="duration_4" rows="2" cols="20"></textarea></td><td><textarea name="research_topic4" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_5" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded5" rows="2" cols="20"></textarea></td><td><textarea name="duration_5" rows="2" cols="20"></textarea></td><td><textarea name="research_topic5" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_6" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded6" rows="2" cols="20"></textarea></td><td><textarea name="duration_6" rows="2" cols="20"></textarea></td><td><textarea name="research_topic6" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_7" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded7" rows="2" cols="20"></textarea></td><td><textarea name="duration_7" rows="2" cols="20"></textarea></td><td><textarea name="research_topic7" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_8" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded8" rows="2" cols="20"></textarea></td><td><textarea name="duration_8" rows="2" cols="20"></textarea></td><td><textarea name="research_topic8" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_9" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded9" rows="2" cols="20"></textarea></td><td><textarea name="duration_9" rows="2" cols="20"></textarea></td><td><textarea name="research_topic9" rows="2" cols="20"></textarea></td></tr>
		<tr><td><textarea name="sponsor_10" rows="2" cols="20"></textarea></td><td><textarea name="amt_awarded10" rows="2" cols="20"></textarea></td><td><textarea name="duration_10" rows="2" cols="20"></textarea></td><td><textarea name="research_topic10" rows="2" cols="20"></textarea></td></tr>
	</tbody></table>
	</fieldset>
	<!-- End of 4th Fieldset --><br /><br />
	<!-- 5th Fieldset -->
	<fieldset class="sectionwrap">
	<table>
	<thead><strong>BUDGET STATEMENT</strong><br /><br />
	State total budget required, complete the summary table below covering main budget lines, and provide justification for key budget items.</thead>
	<tbody><tr><table>
	<thead><strong>Summary budget table</strong></thead>
	<tbody>
	<tr><td><strong>Budget Item</strong></td><td><strong>Yr 1(GHC)</strong></td><td><strong>Yr 2(GHC)</strong></td><td><strong>Total(GHC)</td></tr>
	<tr><td>1.	Project Personnel</td><td><input type="text" name="personnel_1" value="" /></td><td><input type="text" name="personnel_2" value="" /></td><td><input type="text" name="personnel_total" value="" /></td></tr>
	<tr><td>2.	Equipment</td><td><input type="text" name="equipment_1" value="" /></td><td><input type="text" name="equipment_2" value="" /></td><td><input type="text" name="equipment_total" value="" /></td></tr>
	<tr><td>3.	Consumables</td><td><input type="text" name="consumables_1" value="" /></td><td><input type="text" name="consumables_2" value="" /></td><td><input type="text" name="consumables_total" value="" /></td></tr>
	<tr><td>4.	Field Costs</td><td><input type="text" name="fieldcost_1" value="" /></td><td><input type="text" name="fieldcost_2" value="" /></td><td><input type="text" name="fieldcost_total" value="" /></td></tr>
	<tr><td>5.	Local Travel</td><td><input type="text" name="localtravel_1" value="" /></td><td><input type="text" name="localtravel_2" value="" /></td><td><input type="text" name="localtravel_total" value="" /></td></tr>
	<tr><td>6.	External/ International Travel</td><td></td><td></td><td></td></tr>
	<tr><td>7.	Dissemination (including publication)</td><td></td><td></td><td></td></tr>
	<tr><td>8.	Office & Administrative Expenditure</td><td></td><td></td><td></td></tr>
	<tr><td>9.	Contingency (5%)</td><td></td><td></td><td></td></tr>
	<tr><td style="border: 0px solid black;"><strong>GRAND TOTAL</strong></td><td style="border: 0px solid black;"></td><td style="border: 0px solid black;"></td><td></td></tr>
	</tbody>
	</table></tr></tbody>
	</table><br />
	<table>
	<thead><strong>Justification of key budget lines (as indicated above)</thead>
		<tbody>
			<tr><td>1.	Project Personnel:<br /><textarea name="personnel_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>2.	Equipment:<br /><textarea name="equipment_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>3.	Consumables:<br /><textarea name="consumable_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>4.	Field Costs:<br /><textarea name="cost_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>5.	Local Travel:<br /><textarea name="travel_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>6.	External/ International Travel:<br /><textarea name="ext_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>7.	Dissemination (including Publications):<br /><textarea name="dissemination_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>8.	Office & Administrative Expenditure:<br /><textarea name="admin_just" rows="2" cols="80"></textarea></td></tr>
			<tr><td>9.	Contingency (5%):<br /><textarea name="contingency_just" rows="2" cols="80"></textarea></td></tr>
		</tbody>
	</table>
	</fieldset>
	<!-- End of 5th Fieldset -->
	<br /><br />
	<!-- 6th Fieldset 	<fieldset class="sectionwrap">
	
	</fieldset>
	 End of 6th Fieldset -->
	</form>
</div><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br />
<div id="footer">University of Ghana || &copy; 2013</div>

</body>
</html>