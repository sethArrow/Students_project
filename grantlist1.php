<?php 
session_start();
include('connect1.php');
if (!$_SESSION['admin'])
{
	header("Location: oridcms_panellogin.php");
	die();
}
else{}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html dir="ltr">
<head>

<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

<meta http-equiv="X-UA-Compatible" content="IE=5, IE=8, IE=9, IE=10" />

<link rel="stylesheet" type="text/css" href="jquerycssmenu.css" />
	<!-- Start css3menu.com HEAD section -->

	<link rel="stylesheet" href="thank_you_files/css3menu1/style.css" type="text/css" /><style>._css3m{display:none}</style>

	<!-- End css3menu.com HEAD section -->
	
	<style type="text/css">

	html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/

	ul {list-style-type: none}

	</style>
	<style type="text/css">
a:visited {color: blue;}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>

<script type="text/javascript" src="jquerycssmenu.js"></script>

<link rel="stylesheet" type="text/css" href="abtorid.css" />

<title>UPDATE </title>
<script type="text/javascript">
	document.cestatus = 0;
	function cecontrol(id){
		if(document.cestatus == 0){
			document.getElementById(id).style.display = "block";
			document.cestatus = 1;
		}
		else{
			document.getElementById(id).style.display = "none";
			document.cestatus = 0;
		}
	}
	cecontrol("row, row1");
</script>
<style type="text/css">
	#row{display:none;}
	#row1{display:none;}
	a:hover{color: blue; font-weight: bold;}
	a:visited {color: blue;}
</style>
<script language="javascript">
function divHideShow(divToHideOrShow)
{
	var div = document.getElementById(divToHideOrShow);
	
	if (div.style.display == "none")
	{
		div.style.display = "block";
	}
	else
	{
		div.style.display = "none";
	}
}
</script>
</head>

<body marginwidth="0" marginheight="0" >
<div id="mainbody"><div id="maincontent">

<div id="fillcolor2"></div>

<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" /></div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>


<!--<div id="homesearch">

<div  id="ughome" align="left"></div>

<div id="search" align="right">

<form method="get" action="resultspage.php">
<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="Orid" />
<input type="hidden" name="client" value="Orid" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />
</form>
</div></div>-->

<img  style="margin-top: 0px; margin-bottom: 20px;" src="images/background/divider.png" width="991px" height="31px" />

<div id="button"> <?php include('adminsidemenu.php'); ?> </div>
<!-- End css3menu.com BODY section -->

<div id="content">
	<div id="welcomeheader"> update </div>
	
<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>

	
		<?php 
			if(isset($_GET['pg_id']))
			{ 
				$pg_id = $_GET['pg_id'];
				$header = 'GRANTS';
				$query = mysql_query("SELECT * FROM grants ORDER BY grant_type DESC LIMIT 0, 10");
			?>
		<a href="#" onclick="cecontrol('row')"><h3>Grants</h3></a>
		<div id="row">
		<ul>
		<?php	while($result = mysql_fetch_assoc($query)) { ?>
			<li><a href="<?php echo 'update.php'; ?>?pg_id=<?php echo $pg_id ; ?> "><b><?php echo $result['grant_type']; ?></b></a></li><br />
			[<?php echo $result['date']; ?>]
			
			<font size="-1"><a href="newedit1.php?pg_id=<?php echo $pg_id ; ?>">edit</a>
			&nbsp; |&nbsp; <a href="newdelete.php?pg_id=<?php echo $pg_id ; ?>">delete</a></font><br /><br />
		<?php } ?>
		<p align="center"><font size="-1"><a href="updateform.php?pg_id=<?php echo $pg_id ; ?>">Add New Item </a></font></p>
		</ul>
		</div>
		<?php } elseif(isset($_GET['d_event_id']))
		{
			$query = mysql_query("SELECT * FROM drussa_events ORDER BY event_year, event_month DESC ");
		?>
		<a href="javascript:divHideShow('row');" ><b>DRUSSA Events</b></a>
		<div id="row" style="display: none; ">
			<ul style="list-style-type:none;">
		<?php while($result = mysql_fetch_assoc($query))
		{
			$event_title = $result['title'];
			$event_title = html_entity_decode($event_title, ENT_QUOTES);
			$event_title = htmlspecialchars_decode($event_title);
			$event_content = $result['content'];
			$event_content = html_entity_decode($event_content, ENT_QUOTES);
			$event_content = htmlspecialchars_decode($event_content);
		?>
			<h3><?php echo $event_title ; ?></h3>
			<font size="-1"><a href="newedit1.php?d_event_id=<?php echo $result['event_id']; ?>">edit</a>&nbsp; | &nbsp; <a href="newdelete.php?d_event_id=<?php echo $result['event_id']; ?>">delete</a></font>
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="events.php?drussaevents=2">Add New Event</a></font></p><br /><br /><br /><br />
		<?php } elseif(isset($_GET['newsletters']))
		{
			$newsletters = $_GET['newsletters'];
			$query = mysql_query("SELECT * FROM ip_newsletters ORDER BY issue_no DESC");
		?>
		<a href="javascript:divHideShow('row');"><b> Newsletters</b></a>
		<div id="row" style="display:none;">
			<ul style="list-style-type:none;">
		<?php while($result= mysql_fetch_assoc($query))
		{
			$newsletter_title = $result['title'];
			$newsletter_title = html_entity_decode($newsletter_title, ENT_QUOTES);
			$newsletter_title = htmlspecialchars_decode($newsletter_title);
		?>
			<h3><?php echo $newsletter_title ; ?></h3>
			<font size="-1"><a href="newedit1.php?newsletter_id=<?php echo $result['newsletter_id']; ?>">edit</a>&nbsp; | &nbsp; <a href="newdelete.php?newsletter_id=<?php echo $result['newsletter_id']; ?>">delete</a></font>
		<?php } ?>
		</ul></div>
		<p align="center"><font size="-1"><a href="grantlist1.php?ip_newsletter=2">Add Newsletter</a></font></p><br /><br /><br /><br />
		<?php } elseif(isset($_GET['ip_newsletter']))
				{
				?><br /><br />
				<form action="loadtodb.php" method="POST">
					<table style="border-collapse: collapse">
						<thead>Please Enter Details for Newsletter</thead>
						<tbody>
						<tr><td>Title:</td><td><input type="text" name="nletter_title" value="" maxlength="256" /></td><td></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td>Issue no:</td><td><input type="text" name="issue_no" value="" /></td><td></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td>Issue Date:</td><td><select name="day">
						<option value="31" >31</option>
						<option value="30" >30</option>
						<option value="29" >29</option>
						<option value="28" >28</option>
						<option value="27" >27</option>
						<option value="26" >26</option>
						<option value="25" >25</option>
						<option value="24" >24</option>
						<option value="23" >23</option>
						<option value="22" >22</option>
						<option value="21" >21</option>
						<option value="20" >20</option>
						<option value="19" >19</option>
						<option value="18" >18</option>
						<option value="17" >17</option>
						<option value="16" >16</option>
						<option value="15" >15</option>
						<option value="14" >14</option>
						<option value="13" >13</option>
						<option value="12" >12</option>
						<option value="11" >11</option>
						<option value="10" >10</option>
						<option value="09" >09</option>
						<option value="08" >08</option>
						<option value="07" >07</option>
						<option value="06" >06</option>
						<option value="05" >05</option>
						<option value="04" >04</option>
						<option value="03" >03</option>
						<option value="02" >02</option>
						<option value="01" selected>01</option>
						</select>&nbsp;&nbsp;<select name="month">
						<option value="December" >December</option>
						<option value="November" >November</option>
						<option value="October" >October</option>
						<option value="September" >September</option>
						<option value="August" >August</option>
						<option value="July" >July</option>
						<option value="June" >June</option>
						<option value="May" >May</option>
						<option value="April" >April</option>
						<option value="March" >March</option>
						<option value="February" >February</option>
						<option value="January" selected>January</option>
						</select>&nbsp;&nbsp;<select name="year">
						<option value="2040" >2040</option>
						<option value="2039" >2039</option>
						<option value="2038" >2038</option>
						<option value="2037" >2037</option>
						<option value="2036" >2036</option>
						<option value="2035" >2035</option>
						<option value="2034" >2034</option>
						<option value="2033" >2033</option>
						<option value="2032" >2032</option>
						<option value="2031" >2031</option>
						<option value="2030" >2030</option>
						<option value="2029" >2029</option>
						<option value="2028" >2028</option>
						<option value="2027" >2027</option>
						<option value="2026" >2026</option>
						<option value="2025" >2025</option>
						<option value="2024" >2024</option>
						<option value="2023" >2023</option>
						<option value="2022" >2022</option>
						<option value="2021" >2021</option>
						<option value="2020" >2020</option>
						<option value="2019" >2019</option>
						<option value="2018" >2018</option>
						<option value="2017" >2017</option>
						<option value="2016" >2016</option>
						<option value="2015" >2015</option>
						<option value="2014" >2014</option>
						<option value="2013" selected>2013</option>
						</select>
						</td><td></td></tr>
						<tr><td>File/Document Name:</td><td><input type="text" name="file_name" value="" /></td></tr>
						<tr><td></td><td></td><td></td></tr>
						<tr><td></td><td><input type="submit" name="newsletter_submit" value="Submit" />
						</tbody>
					</table>
				</form>
		<?php } elseif(isset($_GET['newpg_id']))
		{
			$page_id = $_GET['newpg_id'];
			$header = 'ORID PAGES' ;
			$query1 = mysql_query("SELECT * FROM orid_pages ORDER BY page_title");
			?>
		<a href="#" onclick="cecontrol('row')"><h3>ORID Pages</h3></a>
		<div id="row">
		<ul>
		<?php while($result =  mysql_fetch_assoc($query1)) { 
			$page_header = $result['page_header'];
			$page_header = html_entity_decode($page_header, ENT_QUOTES);
			$page_header = htmlspecialchars_decode($page_header);
		?>
			<h3 style="text-transform: uppercase;"><?php echo $page_header ; ?></h3>
			<font size="-1"><a href="edit.php?orid_pg_id=<?php echo $result['page_id']; ?>">edit</a>
			&nbsp; | &nbsp; <a href="delete.php?orid_pg_id=<?php echo $result['page_id']; ?>">delete</a></font>
		<?php } ?>
			<p align="center"><font size="-1"><a href="oridpages.php"> Add New Page </a></font></p>
		</ul>
		</div>
		<?php } elseif(isset($_GET['plecture_id'])) 
		{
			$lecture_id = $_GET['plecture_id'];
			$header = 'PUBLIC LECTURE' ;
			$query = mysql_query("SELECT * FROM public_lectures ORDER BY lect_type, lect_date DESC");
			?>
		
		<a href="#" onclick="cecontrol('row')"><h3>Public Lectures</h3></a>
		<div id="row">
		<ul>
		<?php while($result = mysql_fetch_assoc($query)) { 
			$lecture_type = $result['lect_type'];
			$lecture_type = html_entity_decode($lecture_type, ENT_QUOTES);
			$lecture_type = htmlspecialchars_decode($lecture_type);
			$lecture_title = $result['lect_title'];
			$lecture_title = html_entity_decode($lecture_title, ENT_QUOTES);
			$lecture_title = htmlspecialchars_decode($lecture_title);
			$lecture_date = $result['lect_date'];
			$lecture_date = html_entity_decode($lecture_date, ENT_QUOTES);
			$lecture_date = htmlspecialchars_decode($lecture_date);
			$delivered_by = $result['delivered_by'];
			$delivered_by = html_entity_decode($delivered_by, ENT_QUOTES);
			$delivered_by = htmlspecialchars_decode($delivered_by);
		?>
		
		
		<h3><?php echo $lecture_type ; ?></h3>
		<li><a href=""><b><?php echo $lecture_title ; ?></b></a><br /> by <?php echo $delivered_by ; ?></li><br />
		[<?php echo $lecture_date ; ?>]
		
		<font size="-1"><a href="newedit1.php?plecture_id=<?php echo $result['lecture_id']; ?>">edit</a>
		&nbsp; | &nbsp; <a href="newdelete.php?plecture_id=<?php echo $result['lecture_id']; ?>">delete</a></font><br /><br />
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="publiclectureupdate.php">Add New Item </a></font></p>
		<?php } elseif(isset($_GET['ugrf_id']))
		{
			$ugrf_id = $_GET['ugrf_id'];
			$header = 'UGRF CALLS';
			$query = mysql_query("SELECT * FROM ugrf_calls ORDER BY date, title DESC");
		?>
		<a href="#" onclick="cecontrol('row') "><h3>UGRF CALLS</h3></a>
		<div id="row">
		<ul>
		<?php while($result = mysql_fetch_assoc($query)){
			$call_title = $result['title'];
			$call_title = html_entity_decode($call_title, ENT_QUOTES);
			$call_title = htmlspecialchars_decode($call_title);
			$call_content = $result['content'];
			$call_content = html_entity_decode($call_content, ENT_QUOTES);
			$call_content = htmlspecialchars_decode($call_content);
		?>
		<h3><?php echo $call_title ; ?></h3>
		<font size="-1"><a href="edit.php?ugrf_id=<?php echo $result['ugrf_call_id']; ?>">edit</a>&nbsp; | &nbsp; <a href="delete.php?ugrf_id=<?php echo $result['ugrf_call_id']; ?>">delete</a></font>
		<?php } ?>
		
		</ul>		
		</div>
		<p align="center"><font size="-1"><a href="ugrfcalls.php?admin=6">Add New Call</a></font></p><br /><br />
		<?php } elseif(isset($_GET['fund_id']))
		{
			$fund_id = $_GET['fund_id'];
			$header = 'GRANT BENEFICIARIES';
			$query = mysql_query("SELECT * FROM awd_winners1 ORDER BY grant_type AND academic_year DESC");
			if(!$query) echo mysql_error();
		?>
		<a href="#" onclick="cecontrol('row')"><h3><?php echo $header ; ?></h3></a>
		<div id="row">
		<ul>
		<?php echo mysql_error(); 
		while($result = mysql_fetch_assoc($query)) { ?>
		<h3><?php echo $result['grant_type']; ?>--(<?php echo $result['academic_year']; ?>)</h3>
		<font size="-1"><a href="newedit1.php?win_id=<?php echo $result['winner1_id']; ?>">edit</a>
		&nbsp; | &nbsp; <a href="newdelete.php?win_id=<?php echo $result['winner1_id']; ?>">delete</a></font><br /><br />
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="grantwinners1.php">Add New List</a></p>
		<?php } elseif(isset($_GET['call_update']))
		{
			$call_update = $_GET['call_update'];
			$header = 'CALL FOR PROPOSALS/APPLICATIONS' ;
			$query = mysql_query("SELECT * FROM call_for_proposals ORDER BY date DESC");
			?>
		<a href="#" onclick="cecontrol('row')"><h3><?php echo $header ; ?></h3></a>
		<div id="row">
		<ul>
		<?php while($result = mysql_fetch_assoc($query)){
			$title = $result['title'];
			$title = html_entity_decode($title, ENT_QUOTES);
			$title = htmlspecialchars_decode($title);
		?>
		<h3><?php echo $title ; ?></h3>
		
		<font size="-1"><a href="newedit1.php?call_update=<?php echo $result['call_id']; ?>">edit</a>
		&nbsp; | &nbsp; <a href="newdelete.php?call_update=<?php echo $result['call_id']; ?>">delete</a></font><br /><br />
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="callupdate.php?new_call=1">Add New Call</a></p>
		<?php } elseif(isset($_GET['event']))
		{
			$event_id = $_GET['event'];
			$query = mysql_query("SELECT * FROM events ORDER BY event_year, event_month DESC");
		?>
		<a href="#" onclick="cecontrol('row')"><h3>Events</h3></a>
		<div id="row">
		<ul>
		<?php while($result = mysql_fetch_assoc($query)) 
		{
			$event_title = $result['title'];
			$event_title = html_entity_decode($event_title, ENT_QUOTES);
			$event_title = htmlspecialchars_decode($event_title);
			$event_content = $result['content'];
			$event_content = html_entity_decode($event_content, ENT_QUOTES);
			$event_content = htmlspecialchars_decode($event_content);
		?>
			<h3><?php echo $event_title ; ?></h3>
			<font size="-1"><a href="newedit1.php?event_id=<?php echo $result['event_id']; ?>">edit</a>&nbsp; | &nbsp; <a href="newdelete.php?event_id=<?php echo $result['event_id']; ?>">delete</a></font>
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="events.php?admin=2">Add New Event</a></font></p><br /><br />
		<?php } else
		{
			$roa_id = $_GET['roa_id'];
			$header = 'RESEARCH OPPORTUNITIES ALERT' ;
			$query = mysql_query("SELECT * FROM research_alerts ORDER BY title DESC");
			
			if(!$query) echo mysql_error();
		?>
		<a href="#" onclick="cecontrol('row')"><h3><?php echo $header ; ?></h3></a>
		<div id="row">
		<ul>
		<?php while($result = mysql_fetch_assoc($query)) { 
			$title = $result['title'];
			$title = html_entity_decode($title, ENT_QUOTES);
			$title = htmlspecialchars_decode($title);
		?>
			<li><a href="#"><b><?php echo $title; ?></b></a></li><br />
			
		<font size="-1"><a href="newedit1.php?roa_id=<?php echo $result['research_id']; ?>">edit</a>
		&nbsp; | &nbsp; <a href="newdelete.php?roa_id=<?php echo $result['research_id']; ?>">delete</a></font><br /><br />
		<?php } ?>
		</ul>
		</div>
		<p align="center"><font size="-1"><a href="roaupdate.php">Add New Alert</a></font></p>
		<?php } ?>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
		<br /><br /><br /><br /><br /><br /><br /><br /><br />

</div>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>

</body>

</html>
			
			