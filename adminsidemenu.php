<?php

include("connect1.php");
	//$_SESSION['admin'] = 1 ;
	//$newadmin = $_SESSION['admin'];
?>

<html>
	<head>
		<title></title>
	</head>
<body>
<div id="accordian">
	<ul class="acc-menu">
		<li id="one"><a href="oridcms_panel.php">Home</a></li>
		<li id="two"><a href="newsupdate.php?admin=1">News Update </a></li>
		<li id="three"><a href="grantlist1.php?event=10">ORID Events Update</a></li>
		<!--<li id="four"><a href="quicklinkupdate.php?admin=3">Add a Quick Link</a></li>-->
		<li id="seven"><a href="grantlist1.php?call_update=4">Funding Opportunities</a></li>
		<li id="eight"><a href="grantlist1.php?roa_id=5">Research Opportunities</a></li>
		<li id="nine"><a href="grantlist1.php?ugrf_id=6">New UGRF Call</a></li>
		<li id="twelve"><a href="list.php?admin=8">Add New Staff</a></li>
		<li id="fourteen"><a href="logout.php?admin=">Log Out</a></li>
	</ul>

</div>
</body>
</html>