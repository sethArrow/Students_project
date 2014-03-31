<?php
session_start();
include('connect1.php');
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
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="jquerycssmenu.js"></script>
<link rel="stylesheet" type="text/css" href="abtorid.css" />
<title>UG GRANTS</title>
<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

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
	cecontrol("row, row1, row2");
</script>
<style type="text/css">
	#row{display:none;}
	#row1{display:none;}
	#row2{display:none;}
	
</style>

</head>

<body marginwidth="0" marginheight="0">

<div id="mainbody"><div id="maincontent">
<div id="fillcolor2"></div>
<div id="ugoridlogo" style="height: 61px;"><img src="images/logos/newuglogo.jpg" alt="orid logo" />
</div>
<div style="background-color:#b08b57; width: 992px; height:2px;"></div>
<div id="myjquerymenu" class="jquerycssmenu">
	<?php include('mainmenu.php'); ?>
	<div id="fill2"></div>
    <br style="clear: left" />
</div>
<img style="margin-top: 0px; margin-bottom: 0px;" src="images/background/divider.png" width="991px" height="15px" />
<div id="button">
	<?php include('sidemenu.php'); ?>
</div>

<div id="homesearch">
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
</div>
</div>

<!-- End css3menu.com BODY section -->
<div id="content">	<div id="welcomeheader">ug grant beneficiaries</div>
	<p><a style="color: #000066;" align="left" href="javascript:history.go(-1)">Back</a></p>

	<?php if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			?>
	<p align="center"><b><u>UNIVERSITY OF GHANA RESEARCH FUND AWARD WINNERS</u></b></p>
<p align="center"><b><u>2009 - 2010 ACADEMIC YEAR (1ST BATCH)</u></b></p>

<div id="schedule">
	<table border="1px" cellpadding="1" style="text-align: center; color: #000066; border-collapse: collapse;">
		<tbody>
			<tr>
				<td><h3>Name</h3></td>
				
				<td><h3>Faculty</h3></td>
				
				<td><h3>Department</h3></td>
				
				<td><h3>Research Project</h3></td>
				
				<td><h3>Amount Awarded</h3></td>
			</tr>
			
			<tr>
				<td>Dr. Helen Yitah</td>
				
				<td>Arts</td>
				
				<td>English</td>
				
				<td>Working with Texts: A Handbook for Literary Criticism</td>
				
				<td>GHC 28,880</td>
				
			</tr>
			<tr>
				<td>Prof. Kweku Osam</td>
				<td>Arts</td>
				<td>Linguistics</td>
				<td>Akan Verbs Database</td>
				<td>GHC 30,000</td>
			</tr>
			<tr>
				<td>Dr. Joana Boampong</td>
				<td>Arts</td>
				<td>Modern Languages</td>
				<td>Contemporary issues with Postcolonial African Literatures: Engaging 
					Hispanophone Perspectives</td>
				<td>GHC 8,745</td>
			</tr>
			<tr><td>Dr. Martin Adjei</td>
				<td>Arts</td>
				<td>Philosophy </td>
				<td>Conservation of Nature: Perspectives of Akan Philosophy </td>
				<td>GHC 20,580</td>
			</tr>
			<tr><td>Dr. Awo Mana Asiedu </td>
				<td>Arts</td>
				<td>Theatre Arts </td>
				<td>Mapping Regional Trends of Modern African Theatre: The Ghanaian Situation</td>
				<td>GHC 19,150</td>
			</tr>
			<tr><td>Ms. Sarah Dorgbadzi </td>
				<td>Arts</td>
				<td>Theatre Arts</td>
				<td>Ghanaian Folktales: Documentation, Structural Progression and Implications for the Theatre Practitioner</td>
				<td>GHC 29,000 </td>
			</tr>
			<tr><td>Dr. George Asare</td>
				<td>C.H.S</td>
				<td>Medical Laboratory Sciences</td>
				<td>The Effect of Phyllanthus niruri and other tropical medicinal plants on Prostate and Uterine leiomyomas</td>
				<td>GHC 20,200</td>
			</tr>
			<tr><td>Prof. E. K. Wiredu</td>
				<td>C.H.S</td>
				<td>Medical Laboratory Sciences  </td>
				<td>Molecular Epidemiology Study of Hepatitis Viruses in Relation to Liver Cirrhosis and Hepatocellular Carcinoma</td>
				<td>GHC 28,000</td>
			</tr>
			<tr><td>Dr. Kwadwo Appiahgyei-Atua</td>
				<td>Law</td>
				<td>Law</td>
				<td>Commonwealth African Approaches to International Law</td>
				<td>GHC 10,000 </td>
			</tr>
			<tr><td>Ms. Ama F. Hammond</td>
				<td>Law</td>
				<td>Law</td>
				<td>Cyber Law in Ghana</td>
				<td>GHC 4,850</td>
			</tr>
			<tr><td>Prof. Kofi Quashigah </td>
				<td>Law</td>
				<td>Law</td>
				<td>Constitutional and Administrative Law of Ghana</td>
				<td>GHC  4,970</td>
			</tr>
			<tr><td>Mr. Samuel Obeng-Manteaw</td>
				<td>Law</td>
				<td>Law</td>
				<td>Patent Law in Ghana: Critique of the past 130 years (1879-2009) and Proposals for Reform</td>
				<td>GHC 11,050</td>
			</tr>
			<tr><td>Prof. Chuks Mba</td>
				<td>R.I.P.S </td>
				<td>R.I.P.S</td>
				<td>Living Arrangements, Coping Strategies and Health Conditions of the Aged in the Era of HIV/AIDS in Ghana</td>
				<td>GHC 35,689</td>
			</tr>
			<tr><td>Dr. N. D. K. Asante</td>
				<td>Science </td>
				<td>Food Process Engineering </td>
				<td>Industrialization of the Ga kenkey Production Process; Phase 1: Optimization of Energy and Water Usage</td>
				<td>GHC 28,200</td>
			</tr>
			<tr><td>Prof. D.K. Asiedu</td>
				<td>Science</td>
				<td>Geology</td>
				<td>Geo-chemical and ND-Isotopic study of Fine-grained Metasedimentary rocks of the Paleoproterozoic Birimian</td>
				<td>GHC 23,890</td>
			</tr>
			<tr><td>Prof. Joshua Abor</td>
				<td>UGBS </td>
				<td>Finance</td>
				<td>Taxes and Corporate Borrowing: Empirical Evidence from selected African Countries</td>
				<td>GHC 13,960</td>
			</tr>
			</tbody>
	</table><br>
	
	<p align="center"><b><u>UNIVERSITY OF GHANA RESEARCH FUND AWARD WINNERS</u></b></p>
<p align="center"><b><u>2009 - 2010 ACADEMIC YEAR (2ND BATCH)</u></b></p>
<button onclick="cecontrol('row')">View/Collapse List<img src="images/navimages/navdown_blue.gif" /></button>
<div id="row">
	<table border="1px" cellpadding="1" style="text-align: center; color: #000066; border-collapse: collapse;">
		<tbody>
			<tr>
				<td><h3>Name</h3></td>
				
				<td><h3>Faculty</h3></td>
				
				<td><h3>Department</h3></td>
				
				<td><h3>Research Project</h3></td>
				
				<td><h3>Amount Awarded</h3></td>
			</tr>
			
			<tr>
				<td>Ms. Esi Sutherland & Nanbigne Edward</td>
				
				<td>Arts</td>
				
				<td>Institute of African Studies</td>
				
				<td>Shall I Tell You or Shall I Not Tell You? A Survey of Ghanaian Tales and Storytelling Traditions</td>
				
				<td>GHC 29,961.75</td>
				
			</tr>
			<tr>
				<td>Prof. J. K. Osei</td>
				<td>C.A.C.S</td>
				<td>Agricultural Research Centre- Kade</td>
				<td>Development of Appropriate In Vivo technology for Rapid Field Multiplication of Suckers for Sustainable Production of Plantain in Ghana, using Coconut Water and Indole Acetic Acid </td>
				<td>GHC  20,468</td>
			</tr>
			<tr>
				<td>Dr. George Oduro Nkansah</td>
				<td>C.A.C.S</td>
				<td>Agricultural Research Centre- Kade</td>
				<td>Avocado Improvement Programme in an Export Oriented Ghanaian Economy</td>
				<td>GHC 29,468.25</td>
			</tr>
			<tr><td>Prof. Kwame Afreh-Nuamah</td>
				<td>C.A.C.S</td>
				<td>Agricultural Research Centre- Kade </td>
				<td>Development of Sustainable and Integrated management Strategy against Fruit Safety and Environmental Protection in Citrus </td>
				<td>GHC  28,140</td>
			</tr>
			<tr><td>Dr. F. K. Saalia </td>
				<td>Engineering Sciences</td>
				<td>Food Process Engineering</td>
				<td>Studies on the Industrialization of the Pito Process Phase 1: Malting and Production of Fermented Pito</td>
				<td>GHC  29,800</td>
			</tr>
			<tr><td>Mr. Yaw Delali Bensah</td>
				<td>Engineering Sciences</td>
				<td>Material Science and Engineering</td>
				<td>Recycling Plastic Waste into Polymer-Ceramic Composites for use as Constructional Materials </td>
				<td>GHC 29,825 </td>
			</tr>
			<tr><td>Ms. Ama Gyakewaa Dadson</td>
				<td>ICT</td>
				<td>ICT Directorate</td>
				<td>The Potential of Online Technology for Visually Impaired and Blind Ghanaian Students in Tertiary Schools </td>
				<td>GHC 24,892</td>
			</tr>
			<tr><td>Dr. Augustine Ocloo</td>
				<td>Science</td>
				<td>Biochemistry</td>
				<td>Screening Ghana's Medicinal Plants for potential Mitochondrial Uncouplers and Inhibitors: A Preliminary Investigation</td>
				<td>GHC 24,391</td>
			</tr>
			<tr><td>Dr. Kweku Kyeremeh</td>
				<td>Science</td>
				<td>chemistry</td>
				<td>Investigation of secondary metabolites from Ghanaian marine organisms and their bioactivity</td>
				<td>GHC 25,500</td>
			</tr>
			<tr><td>Dr. Matilda Steiner-Asiedu </td>
				<td>Science</td>
				<td>Nutrition & Food Science</td>
				<td>Overweight/ Obesity Situation of Ghanaian Children and Adolescents: Implications for Health Promoting Interventions</td>
				<td>GHC 32,689.65</td>
			</tr>
			<tr><td>Dr. Godfred Futagbi</td>
				<td>Science</td>
				<td>Zoology </td>
				<td>Characteristics and Analysis of Paediatric Lymphomas with Special Focus on the Pathogenesis of Endemic Burkitt's Lymphoma </td>
				<td>GHC 29,100</td>
			</tr>
			<tr><td>Dr. Langbong Bimi</td>
				<td>Science</td>
				<td>Zoology </td>
				<td>Prevalence of Taeniasis in the Bunkpurugu-Yunyoo District in Northern Ghana</td>
				<td>GHC 29,557.50</td>
			</tr>
			<tr><td>Mr. Samuel Nkumbaan</td>
				<td>Social Studies</td>
				<td>Archaeology</td>
				<td>Archaeological Investigations at Tando Fagusa</td>
				<td>GHC 22,037</td>
			</tr>
			<tr><td>Dr. Linda Darkwa</td>
				<td>Social Studies</td>
				<td>LECIAD</td>
				<td>Documenting Processes of Conflict Management in Ghana</td>
				<td>GHC 24,091.2 </td>
			</tr>
			</tbody>
	</table><br>
	
		<p align="center"><b><u>UNIVERSITY OF GHANA RESEARCH FUND AWARD WINNERS</u></b></p>
<p align="center"><b><u>2010 - 2011 ACADEMIC YEAR</u></b></p>
<button onclick="cecontrol('row1')">View/Collapse List<img src="images/navimages/navdown_blue.gif" /></button>
<div id="row1">
	<table border="1px" cellpadding="1" style="text-align: center; color: #000066; border-collapse: collapse;">
		<tbody>
			<tr>
				<td><h3>Name</h3></td>
				
				<td><h3>Faculty</h3></td>
							
				<td><h3>Research Project</h3></td>
	
			</tr>
			
			<tr>
				<td>Prof. E. K. Wiredu</td>
				
				<td>SAHS</td>
				
				<td>Prevalence and Distribution of Human Papilloma Virus Genotypes among Women in North Tongu District, Volta Region, Ghana: Implication for Use of Current HPV Vaccines</td>
					
			</tr>
			<tr>
				<td>Prof. Akosua Adomako Ampofo</td>
				<td>Social Studies</td>
				<td>Changing Representation of Women in Popular Culture</td>
				
			</tr>
			<tr>
				<td>Dr. Nana Akua Anyidoho</td>
				<td>Social Studies</td>
				<td>Modelling the Career Choices of University of Ghana Students</td>
	
			</tr>
			<tr><td>Dr. Laura J. McGough</td>
				<td>SPH</td>
				<td>Mapping out Pathways of Pregnancy and Delivery: Towards Improving Maternal Health</td>
				
			</tr>
			<tr><td>Dr. A. Q. Q. Aboagye</td>
				<td>UGBS</td>
				<td>Banking Industry Structure and Economic Costs in Ghana</td>
	
			</tr>
			<tr><td>Prof. Albert G. B. Amoah</td>
				<td>UGMS</td>
				<td>Aetiopathogenesis of atherosclerosis: The Influence of Dietary Fat</td>
			
			</tr>
			<tr><td>Dr. Vera Adobea Essuman</td>
				<td>UGMS</td>
				<td>Randomised Controlled Trial of the intra-operative adjuvant Mytocin C versus 5-Flurouricil with trabeculotomy - trabeculotomy for Developmental Glaucomas</td>
			</tr>
			</tbody>
	</table>
</div>
<br>

		<p align="center"><b><u>UNIVERSITY OF GHANA RESEARCH FUND AWARD WINNERS</u></b></p>
<p align="center"><b><u>4TH CALL WINNERS</u></b></p>
<button onclick="cecontrol('row2')">View/Collapse List<img src="images/navimages/navdown_blue.gif" /></button>
<div id="row2">
	<table border="1px" cellpadding="1" style="text-align: center; color: #000066; border-collapse: collapse;">
		<tbody>
			<tr>
				<td><h3>Name</h3></td>
				
				<td><h3>Department</h3></td>
							
				<td><h3>Research Project</h3></td>
				
				<td><h3>Duration</h3></td>
				
				<td><h3>Amount(GHC)</h3></td>
	
			</tr>
			
			<tr>
				<td>Prof. B. K. Ahunu</td>
				
				<td>Animal Science</td>
				
				<td>Characterization and Breeding for a Docile and Productive Grasscutter in Ghana</td>
				
				<td>Two Years</td>
				
				<td>28,222.95</td>
				
					
			</tr>
			<tr>
				<td>Dr. Augustine Naazie</td>
				<td>Agricultural Research Centre</td>
				<td>Conservation of Indigenous Chickens in Ghana</td>
				<td>Two Years</td>
				<td>29,053.50</td>
				
			</tr>
			<tr>
				<td>Prof. Daniel Obeng-Ofori</td>
				<td>Crop Science</td>
				<td>Sustainable Forest Conservation and Alternative Community Livelihoods through Silk Farming for Poverty Alleviation in Ghana</td>
				<td>Two Years</td>
				<td>23,835</td>
			</tr>
			<tr><td>Prof. Andrew Anthony Adjei</td>
				<td>Pathology</td>
				<td>Molecular Surveillance of Hepatitis E Virus in Ghana</td>
				<td>One Year</td>
				<td>25,105.50</td>
			</tr>
			<tr><td>Mr. Isaac Anim-Baidoo</td>
				<td>Medical Laboratory Science</td>
				<td>Epidemiology, Molecular and Immunological Characterization of Glardiasis in Ghana</td>
				<td>Two Years</td>
				<td>25,437.05</td>
			</tr>
			<tr><td>Dr. George Obeng Adjei</td>
				<td>Centre for Tropical Clinical Pharmacology & Therapeutics</td>
				<td>Establishment of High Performance Chromatographic method for Measurement of Plasma Levels of selected Anti-malarial Drugs in Children with HIV or Sickle Cell Disease</td>
				<td>Fifteen Months</td>
				<td>27,720</td>
			</tr>
			<tr><td>Mr. Richard Harry Asmah</td>
				<td>Medical Laboratory Sciences</td>
				<td>Molecular Gene Effects of Oxidative Stress on Plasmodium Falciparum during Complicated and Uncomplicated Malaria</td>
				<td>Two Years</td>
				<td>28,875.00</td>
			</tr>
			<tr><td>Dr. Joseph Yaro</td>
				<td>Geography & Resource Development</td>
				<td>Assessing Adaptive Climate Change and Climate Variability in the Rural Northern Savannah of Ghana</td>
				<td>Fifteen Months</td>
				<td>28,707</td>
			</tr>
			</tbody>
	</table>
</div>
<?php } elseif(isset($_GET['win_id']))
	{
		$id = $_GET['win_id'];
		$query = mysql_query("SELECT grant_type, f_name, other_name, last_name, faculty, dept, university_of_reg1, university_of_reg2, 
							project_title, amt_awarded, year FROM awd_winners WHERE year = '2008/2009'");
		?>
		<table border="1px" style="border-collapse:collapse;">
		<tbody>
		<tr align="center" style="font-weight: bold; color: #b08b57; background-color: blue;">
			<td>Name</td><td>Faculty/Department</td><td>Thesis Title</td><td>University of Registration</td><td>Grant Amount</td><td>Thesis Status</td>
		</tr>
		<?php while($result= mysql_fetch_assoc($query)) { ?>
		<tr>
				<td><?php echo $result['f_name']." ".$result['other_name']." ".$result['last_name']; ?></td><td><?php echo $result['faculty']." ".'/'." ".$result['dept']; ?></td><td><?php echo $result['project_title']; ?></td><td><?php echo $result['university_of_reg1']; ?><br/><?php echo $result['university_of_reg2']; ?></td><td><?php echo $result['amt_awarded']; ?></td><td><?php echo $result['project_status']; ?></td>
		</tr>
		<?php } ?>
		</tbody>
		</table>
<?php }  elseif(isset($_GET['gt_id']))
	{
		$grant_id = $_GET['gt_id'];
		
		$grant_type = $_GET['grant_type'];
		$query = mysql_query("SELECT * FROM awd_winners1 WHERE grant_type = $grant_type ORDER BY academic_year DESC");
		while($result = mysql_fetch_assoc($query)) {
		$contents = $result['details'];
		$contents = html_entity_decode($contents, ENT_QUOTES);
		$contents = htmlspecialchars_decode($contents);
		
		?>
			<p><?php echo $contents ; ?></p>
		<?php } ?>
			
	<?php } elseif(isset($_GET['grant_id']))
		{
		$grant_id = $_GET['grant_id'];
		
		$grant_type = $_GET['grant_type'];
		$query = mysql_query("SELECT * FROM awd_winners1 WHERE grant_type = $grant_type ORDER BY academic_year DESC");
		while($result = mysql_fetch_assoc($query)) {
		$contents = $result['details'];
		$contents = html_entity_decode($contents, ENT_QUOTES);
		$contents = htmlspecialchars_decode($contents);
		
		?>
			<p><?php echo $contents ; ?></p>
		<?php } ?>
			
	<?php } else
	{
	
	}
	?>	
	

<br>
</div>
<div id="footer">University of Ghana || &copy; 2013</div>
</div>

</div>





</body>
</html>