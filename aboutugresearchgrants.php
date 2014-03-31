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
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
a:visited{color: blue;}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />

	<title>University of Ghana Research Grants</title>

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
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

<body marginwidth="0" marginheight="0">

<div id="mainbody"><div id="maincontent">
<div id="ugoridlogo"  style="height:61px"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu" style="background:#0100666; width:991px">
	<?php include('mainmenu.php'); ?>
    <div id="fill2"></div>
    <br style="clear: left" />
</div>
<img style="margin-bottom: 5px; margin-top: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button" style="margin-top: 12px;">
<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
<div  id="ughome" align="left"></div>
<div id="search" align="right">
<form method="get" action="searchpage.php" style="width:362px;">
<input type="text" name="search"  value="" maxlength="256" size="32" />
<input type="submit" name="submit" value="Search"  />
<!--<input type="text" name="srch" alt="Search" value="" maxlength="256" size="32" />
<input type="submit" name="btn" value="Search" />
<input type="hidden" name="site" value="Orid" />
<input type="hidden" name="client" value="Orid" />
<input type="hidden" name="proxystylesheet" value="Orid" />
<input type="hidden" name="output" value="xml_no_dtd" />
<input type="hidden" name="filter" value="0" />-->
</form>
</div>
</div>
	
<!-- End css3menu.com BODY section -->
<div id="content">	
<div id="welcomeheader" style="width:745px;">UG Research Grants</div>
<p><a style="color: #000066;" href="javascript:history.go(-1)">Back</a></p>
<h2 align="center">UNIVERSITY OF GHANA RESEARCH GRANTS</h2>
<h3 align="center">SUPPORTED BY THE UNIVERSITY OF GHANA RESEARCH FUND</h3>
<hr>
<p><h4 style="color: blue">Introduction</h4>
As part of the drive to promote the University of Ghana as an institution of Research and Higher 
Learning, the University Council decided that starting from the 2008-2009 academic year, a portion 
of the University's budget shall be earmarked to encourage and promote cutting edge research from 
faculty members. As part of the continuous process of re-defining the University of Ghana as a research-driven 
university and encouraging its faculty members to actively engage in research activities that would 
enhance the image of UG, the Office of Research, Innovation and Development (ORID) has the responsibility of announcing 
a Call for Proposals every year; with support from the University of Ghana Research Fund (URF).</p>

<p>In addition to doing cutting edge research, it is the expectation is that UG will be able to fund projects that are capable of 
addressing pressing national and developmental issues and offer recommendations that would be relevant to policy 
makers and all stake holders.</p>

<p>A total of six (6) Calls for Proposals have been announced since the 2008-2009 academic year and sixty-three research 
projects have so far received funding</p>

<p><h4 style="color: blue">Level of Grants</h4>
 Currently there are three levels of grants available as follows:
<ol>
	<li><b>SEED GRANTS:</b> This is for exploratory/small proposals and would normally not exceed <b>GHC 5,000</b>. Such grants would 
	be awarded for a period not exceeding one year and are targeted at faculty members at the early stage of their career 
	to enable them to explore new ideas to apply for larger funding or bigger grants in the future. </li><br />
	<li><b>INVESTIGATOR-LED GRANTS:</b> These grants would normally not exceed <b>GHC 30,000</b> and shall be for a period of not more than 
	two years. Grants of this nature would be awarded to multi-disciplinary research project with at least one collaborator from another UG 
	department/Faculty.</li><br />
	<li><b>MULTI-DISCIPLINARY GRANTS:</b> These shall not exceed <b>GHC 100,000</b> and are for multi-disciplinary and inter-faculty research 
	projects which specifically address a national developmental issue and are also capable of shaping or influencing policy in Ghana. Grants 
	of this nature shall normally not be awarded for more than 2 years and would be awarded to a multi-disciplinary research team. Only two 
	grants will be awarded under this category for this call for proposal.</li>
</ol></p>

<p><h4 style="color: blue"> Eligibility</h4>
All grant applicants must be full-time Faculty members of the University of Ghana. Faculty members applying in the 
investigator-led and multi-disciplinary categories should have at least <b><u>A YEAR'S</u></b> service with the UG. Collaborators from 
institutions outside of UG must provide a letter of support from their institution. </p>

<p><h4 style="color: blue">Non-Eligibility</h4>
The following faculty members <b><u>are not</u></b> eligible to apply:
<ol>
	<li>Previous recipients of UGRF whose work are on-going.</li><br />
	<li>Previous recipients of UGRF who have not submitted their final technical and financial reports.</li><br />
	<li>Previous recipients of UGRF who have not published their findings in peer reviewed journals.</li>
</ol>
</p> 

<p><h4 style="color: blue">Application Procedure</h4>
The application procedure has gradually evolved from paper applications to only email submissions to a pre-defined email address. 
From the 2013-2014 academic year, the expectation is that applications for research grants will be done by using an online application 
platform.</p>

<p><h4 style="color: blue">Frequency of Calls</h4>
A call for proposals is normally made once a year. The last call for proposal was made in November 2012. The estimated date for the next call is 
September 2013.</p>

<p><h4 style="color: blue">Submission and Review of Applications</h4>
<b>Applications are reviewed using a two-step process.</b><br />
<b>Step 1:</b>An assessment by the ORID Research Administration Unit for confirmation that each proposal meets all guidelines.<br />
<b>Step 2:</b>Proposals that meet all requirements are coded and independently reviewed by reviewing panels set up by ORID.</p>

<p>Proposals are reviewed based on the following criteria:
<b><ol>
	<li>RELEVANCE OF RESEARCH QUESTION</li>
	<li>SCIENTIFIC MERIT OF METHODS, DESIGN AND ANALYTICAL FRAMEWORK</li>
	<li>POTENTIAL TO IMPACT POLICY</li>
	<li>JUSTIFICATION FOR RESOURCES</li>
	<li>CAPABILITY OF RESEARCH TEAM</li>
</ol></b>
After the review, feedback from the review is provided to all applicants. The final decision and announcement is subject to 
the approval of the ORID Management Board.</p>

<h4><a href="javascript:divHideShow('row');">General Conditions for Accessing University of Ghana Research Grants</a></h4>
<div id="row" style="display:none;">
	<ol>
		<li>The primary purpose of the UG Research Fund is to encourage faculty research output. Faculty members who have been 
		awarded grants and have not demonstrated enhanced research output as evidence by publications in refereed journals shall 
		not be eligible for another award.</li><br />
		<li>In view of the limited funds available, the UG Research Fund can only approve one proposal (<i>that meets all the requirements 
		for funding</i>) per person or multi-disciplinary team per year.</li><br />
		<li>Proposals submitted without the endorsement of the Head of Department and Faculty Dean shall not be considered.</li><br />
		<li>The decision of the ORID Management Board on proposals submitted for UG Research Funding shall be final.</li><br />
		<li>All items purchased with funds from the grant shall remain the property of the University Department/ Research 
			Institute to which the Principal Investigator is affiliated and not of the person to whom the grant is made. However, 
			the PI will have first use of any such items.</li><br />
		<li>The assistance of the University of Ghana must be acknowledged in all publications resulting from any research that it 
			finances. Copies of the publications should be forwarded to the Office of Research, Innovation and Development and 
			the University Library.</li>
	</ol>
</div>

<p><b>Please click <a href="http://orid.ug.edu.gh/update.php?ugrf_id=3" target="_blank">here</a> for information on the last call for proposal.</b></p>
</div><br>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>
</div>


</body>
</html>