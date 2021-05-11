<!DOCTYPE html>
<html>
<head>
	<title>CV</title>	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name= "description" content="Dit is een website gemaakt door Vedat Aydin. "/>
	<meta name= "keywords" content="Vedat, Aydin CV, webdeveloper, Amsterdam"/>
	<meta name= "author" content="Vedat Aydin"/>
	<meta charset="utf-8"/>
</head>
<body>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> -->
	<!-- <script src="picture.js"></script> -->
	<!-- <script src="gsap.js"></script> -->
	<!-- <script src="gsap/gsap.min.js"></script> -->
<!-- 	<div class="xx">
	</div> -->
		<!-- <img src="cat.gif" class="cat"> -->

	<div class="container" id="allContainer">
		<div class="stars"></div>

		<!-- <img src="stars.jpg" class="stars"> -->
		<!-- <img src="gras.png" class="gras"> -->
		<div class="cat"></div>
		<div class="cat2"></div>

		<a class="download" href="cv.pdf" download>
			<button class="btn btn-light" id="downloadbtn"><i class="fa fa-download"></i> Download</button>
		</a>
		<button class="btn btn-light" id="enbtn" onclick="toggleLanguage('Nederlands')">EN</buttton>
	    <button class="btn btn-light" id="nlbtn" onclick="toggleLanguage('English')">NL</button>

	    <button class="btn btn-light" id="lightbtn" onclick="toggleMode('Dark')"><i class="fa fa-sun-o"></i></button>
	    <button class="btn btn-light" id="darkbtn" onclick="toggleMode('Light')"><i class="fa fa-moon-o"></i></button>
		<img src="images/pf.jpg" class="picture" alt="Vedat Aydin" >

		<div class="container" id="nlText">
			<div class="row">
				<div class="intro"></div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8">
					<div class="info2">				
					<h4>Personalia</h4>
					<p>Naam: Vedat Mustafa Aydin<br>
					Geboortedatum: 13 December 1996<br>
					Woonplaats: Amsterdam, Nederland</p>
					</div>
					<h4>Over Mij</h4>
					<h6 style="font-size: 16.5px;">Hallo, ik ben Vedat.</h6>
					<p>Ik heb recent mijn MBO 4 – Applicatie Ontwikkelaar diploma gehaald en ik ben op zoek naar een web development baan. Ik heb ervaring in zowel frontend als backend programmeren.  Hiervoor heb ik HTML, CSS, Javascript, PHP, Laravel en MySQL gebruikt. Daarnaast ben ik bereid en gemotiveerd om mijn kennis verder uit te breiden door nieuwe programmeer skills of tools te leren.</p> 
					
					<p>Ik kan mijzelf omschrijven als een serieus en hardwerkend persoon, met een gevoel voor humor en een rustige houding. In teamverband werken vind ik gezellig, maar ik kan ook zelfstandig mijn werk verrichten. In mijn vrije tijd vind ik het ook leuk om te programmeren, omdat ik trots ben op wat ik creëer. Bekijk mijn GitHub om voorbeelden van mijn projecten te zien</p>
					<h4>Competenties</h4>
					<ul>
						<li>Besluitvaardig</li>
						<li>Betrokken</li>
						<li>Inlevingsvermogen</li>
						<li>Integer</li>
						<li>Sociaal</li>
						<li>Leergierig</li>				
					</ul>
					
					<h4>Werkervaring</h4>
					<h5>Stage: Copavo BV</h5>
					<h6>Datum: Sept., 2018 - Jan., 2019</h6>
					<p>Copavo is een bedrijf dat zich focust op web development en marketing. Op mijn stage heb ik het bedrijfsleven leren kennen. Voor mijn opdrachten heb ik HTML, CSS, PHP, Laravel en MySQL gebruikt in een Linux(Ubuntu) omgeving. Naast het web development gedeelte heb ik ook contact gehad met klanten op de callcenter afdeling.</p>

					<h5>Vrijwilligerswerk: MGT jongerencentrum</h5>
					<h6>Datum: Sept., 2014 - Aug., 2018</h6>
					<p>Ik ben mij MGT jongerencentrum actief geweest als vrijwilliger, waarin ik onder andere les heb gegeven aan kinderen en heb geholpen met activiteiten.</p>

					<h5>Enquêteur bij stichting !WOON</h5>
					<h6>Datum: Okt., 2016 - Nov., 2016</h6>
					<p>Ik heb voor stichting !WOON meerdere buurtbewoners geënquêteerd omtrent de aankomende renovaties en huurprijsveranderingen.</p>

					<h4>Opleiding</h4>
					<h5>Applicatie ontwikkelaar niveau 4 - ROCVA</h5>
					<h6>Datum: Sept., 2017 - Jan., 2021</h6>

					<h6>Applicatie ontwikkeling</h6>
					<ul>
						<li>HTML/CSS</li>
						<li>PHP(OOP)</li>
						<li>Laravel(5-8)</li>
						<li>Javascript(vanilla & jQuery AJAX)</li>
						<li>MySQL</li>
						<li>WordPress</li>
						<li>Java(OOP)</li>
						<li>Python</li>
						<li>Mobile Application Development</li>
						<li>Linux</li>
					</ul>
					<h6>Applicatie beheer</h6>
					<ul>
						<li>VMWare</li>
						<li>Security</li>
						<li>Microsoft Office</li>		
					</ul>
					<h6>Tools</h6>
					<ul>
						<li>Github</li>
						<li>Trello</li>
					</ul>
				</div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4" id="x">
					<div class="info1">				
						<h4>Personalia</h4>
						<p>Naam: Vedat Mustafa Aydin<br>
						Geboortedatum: 13 December 1996<br>
						Woonplaats: Amsterdam, Nederland</p>

						<h4>Contact</h4>
						<div class="contact">
						<p><i class="fa fa-envelope-o"></i> <a href = "mailto: vedataydin96@hotmail.com"> vedataydin96@hotmail.com</a></p>
						<p><i class="fa fa-phone"></i> <a href="tel:+31639599017"> +31639599017</a></p>
						<p><i class="fa fa-github"></i> <a href="https://github.com/Vedat96"> GitHub</a></p>
						<p><i class="fa fa-linkedin-square"></i> <a href="https://linkedin.com/in/vedat-aydin"> LinkedIn</a></p>
						<p>
						</div>
					</div>
					<h4>Skills</h4>
					<h6>HTML/CSS</h6>
					<div class="skillbar">
					  <div class="skills html">100%</div>
					</div>
					<h6>PHP & Laravel</h6>
					<div class="skillbar">
					  <div class="skills php">85%</div>
					</div>
					<h6>WordPress</h6>
					<div class="skillbar">
					  <div class="skills wp">75%</div>
					</div>
					<h6>JavaScript</h6>
					<div class="skillbar">
					  <div class="skills js">75%</div>
					</div>
					<h6>Adobe Photoshop</h6>
					<div class="skillbar">
					  <div class="skills ap">70%</div>
					</div>
					</p>
					<p>
					<h4>Talen</h4>
					<h6>Nederlands</h6>			
					<div class="skillbar">
						<div class="skills nl">80%</div>
					</div>		
					<h6>Turks</h6>	
					<div class="skillbar">
					  <div class="skills tr">80%</div>
					</div>		
					<h6>Engels</h6>
					<div class="skillbar">
					  <div class="skills en">70%</div>
					</div>
					</p>
					<h4>Hobby's</h4>
					- Gamen<br>
					- Skateboarden
					<div class="info3">
						<p></p>
						<h4>Contact</h4>
						<p><i class="fa fa-envelope-o"></i> <a href = "mailto: vedataydin96@hotmail.com"> vedataydin96@hotmail.com</a></p>
						<p><i class="fa fa-phone"></i> <a href="tel:+31639599017"> +31639599017</a></p>
						<p><i class="fa fa-github"></i> <a href="https://github.com/Vedat96"> GitHub</a></p>
						<p><i class="fa fa-linkedin-square"></i> <a href="https://linkedin.com/in/vedat-aydin"> LinkedIn</a></p>
					</div>
				</div>
			</div>
		</div>



		<div class="container" id="enText">
			<div class="row">
				<div class="intro"></div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-8">
					<div class="info2">				
					<h4>Personalia</h4>
					<p>Name: Vedat Mustafa Aydin<br>
					Birthdate: 13 December 1996<br>
					Residence: Amsterdam, Nederland</p>
					</div>
					<h4>About Me</h4>
					<h6>Hello, I am Vedat Aydin.</h6>
					<p>I recently achieved my MBO 4 -Application Developer degree and i am looking for a web developer job. I have experience in frontend and backend programming. I used HTML, CSS , JavaScript, PHP, laravel and MySQL. Additionally i am motivated to further expand my programming skills and tools.</p>

					<p>I can describe myself as a serious and hardworking person, with a sense of humor and a calm personality. I like to work in a team, but i can also work individually. Furthermore, i enjoy to code in my free time, because it makes me proud on what I develop. Check out my GitHub to see examples of my projects</p>
					<h4>Competencies</h4>
					<ul>
						<li>Decisive</li>
						<li>Involved</li>
						<li>Empathy</li>
						<li>Integer</li>
						<li>Social</li>
						<li>Inquisitive</li>				
					</ul>
					
					<h4>Work Experience</h4>
					<h5>Internship: Copavo BV</h5>
					<h6>Date: Sept., 2018 - Jan., 2019</h6>
					<p>Copavo is a company that focuses on web development and marketing. In my internship I learned about the business life. For my project at Copavo I used HTML, CSS, PHP, Laravel, MySQL in a Linux(Ubuntu) environment. Next to web development I have also had contact with customers on the call center department.</p>

					<h5>Volunteerwork: MGT youth center</h5>
					<h6>Date: Sept., 2014 - Aug., 2018</h6>
					<p>As a volunteer for the MGT youth center I thaught children, helped them with their homework and helped with group activities hosted by MGT.</p>

					<h5>Pollster: !WOON</h5>
					<h6>Date: Oct., 2016 - Nov., 2016</h6>
					<p>For !WOON I conducted several polls regarding the upcoming renovations and rent changes.</p>

					<h4>Education</h4>
					<h5>Application Developer level 4 – ROCVA</h5>
					<h6>Date: Sept., 2017 - Jan., 2021</h6>

					<h6>Application developer</h6>
					<ul>
						<li>HTML/CSS</li>
						<li>PHP(OOP)</li>
						<li>Laravel(5-8)</li>
						<li>Javascript(vanilla & jQuery AJAX)</li>
						<li>MySQL</li>
						<li>WordPress</li>
						<li>Java(OOP)</li>
						<li>Python</li>
						<li>Mobile Application Development</li>
						<li>Linux</li>
					</ul>
					<h6>Application development</h6>
					<ul>
						<li>VMWare</li>
						<li>Security</li>
						<li>Microsoft Office</li>		
					</ul>
					<h6>Tools</h6>
					<ul>
						<li>Github</li>
						<li>Trello</li>
					</ul>
				</div>
				<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4" id="x">
					<div class="info1">				
						<h4>Personalia</h4>
						<p>Name: Vedat Mustafa Aydin<br>
						Birthdate: 13 December 1996<br>
						Residence: Amsterdam, Nederland</p>

						<h4>Contact</h4>
						<div class="contact">
						<p><i class="fa fa-envelope-o"></i> <a href = "mailto: vedataydin96@hotmail.com"> vedataydin96@hotmail.com</a></p>
						<p><i class="fa fa-phone"></i> <a href="tel:+31639599017"> +31639599017</a></p>
						<p><i class="fa fa-github"></i> <a href="https://github.com/Vedat96"> GitHub</a></p>
						<p><i class="fa fa-linkedin-square"></i> <a href="https://linkedin.com/in/vedat-aydin"> LinkedIn</a></p>
						<p>
						</div>
					</div>
					<h4>Skills</h4>
					<h6>HTML/CSS</h6>
					<div class="skillbar">
					  <div class="skills html">100%</div>
					</div>
					<h6>PHP & Laravel</h6>
					<div class="skillbar">
					  <div class="skills php">85%</div>
					</div>
					<h6>WordPress</h6>
					<div class="skillbar">
					  <div class="skills wp">75%</div>
					</div>
					<h6>JavaScript</h6>
					<div class="skillbar">
					  <div class="skills js">75%</div>
					</div>
					<h6>Adobe Photoshop</h6>
					<div class="skillbar">
					  <div class="skills ap">70%</div>
					</div>
					</p>
					<p>
					<h4>Languages</h4>
					<h6>Dutch</h6>			
					<div class="skillbar">
						<div class="skills nl">80%</div>
					</div>		
					<h6>Turkish</h6>	
					<div class="skillbar">
					  <div class="skills tr">80%</div>
					</div>		
					<h6>English</h6>
					<div class="skillbar">
					  <div class="skills en">70%</div>
					</div>
					</p>
					<h4>Hobby's</h4>
					- Gaming<br>
					- Skateboarding
					<div class="info3">
						<p></p>
						<h4>Contact</h4>
						<p><i class="fa fa-envelope-o"></i> <a href = "mailto: vedataydin96@hotmail.com"> vedataydin96@hotmail.com</a></p>
						<p><i class="fa fa-phone"></i> <a href="tel:+31639599017"> +31639599017</a></p>
						<p><i class="fa fa-github"></i> <a href="https://github.com/Vedat96"> GitHub</a></p>
						<p><i class="fa fa-linkedin-square"></i> <a href="https://linkedin.com/in/vedat-aydin"> LinkedIn</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<script src="js/main.js"></script>
</body>
</html>