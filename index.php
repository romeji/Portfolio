<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Accueil</title>
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="Style.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		
		<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
		<script src="css/semantic.min.js"></script>
		
		

	</head>

	<body>
		
		<?php
			include("navbar.php");
		?>


		<script>
				function Fonction_decaler_gauche(x){
					x.style.right = "10%";
				}

				function Fonction_decaler_droite(x){
					x.style.right = "5%";
				}
		
		</script>

	<div id="info_user">
		<?php 
		 	if($_SESSION['photo_profil'] != '' && $_SESSION['photo_profil'] != ' ' )  {
		?>
					<img src="<?php echo $_SESSION['photo_profil']; ?>" style="width:80px; text-align: center;" alt="info_user"><br/>
		<?php 
			}else{
		?>
					<img src="Picture/user.png" style="width:80px; text-align: center;" alt="Prof.Etude;">
			<?php
			} 
		?>
		<br/>
		<FONT color="#1984B1" style="float: left; padding-left: 15px;"><B> Prenom :</b></Font>	<?php echo $_SESSION['prenom']; ?> 	<br/>
		<FONT color="#1984B1" style="float: left; padding-left: 15px;"><B> Nom :</b></Font>	 <?php echo $_SESSION['nom']; 	?> 		<br/> 	
	</div>


		<br/><br/><br/>
		<div class="container-fluid" id="main">
			<div class="container">
				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div>
							<img src="Picture/Prof.png" style="width:100px; float:left; margin-top:40px; margin-bottom:20px; margin-left:70px; margin-right:70px;" alt="Prof.Etude;">
							<div>
								<p><FONT color="#1984B1"><h5> Bonjour! </h5></FONT></p>
							
								<p>Je m'appelle Jérome LOPES je suis actuellemet en deuxième année de BTS SIO (Services Informatiques aux Organisations), spécialité SLAM (Solutions Logicielles et Applications Métier) à l'institut de Formation Appliquée à Dijon. J'ai fais mon alternance au sein de l'entreprise "SAP2I" de Longvic. Ce Portefolio va vous présenter mon parcours durant mes deux années de BTS ainsi que ma documentation sur l'épreuve E4</p>
							</div>
						</div>
					</article>
				</div>

				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<br/>
						<br/>
						
						<h4 class="heading-1"><span> <img src="Picture/bag.png" style="width:65px; padding-left:10px; padding-right: 10px; position:center; vertical-align:middle; float:center;"><FONT color="#1984B1">Compétences</span></FONT>
						</h4>
						<br/>
						<br/>
						
					</article>
				</div>

				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:20px">
						<div class="colone colonecompétence">
						<B><h5>Langages principaux</h5></B>
							<ul style="list-style-type: none; padding-left: 0px">
								<li> <img src="Picture/html.png" style="width:35px; float:left; margin-right:10px;  ">HTML 5</li> <br/>
								<li> <img src="Picture/css.ico" style="width:35px; float:left; margin-right:10px; ">CSS 3 </li> <br/>
								<li> <img src="Picture/php1.png" style="width:35px; float:left; margin-right:10px;  ">PHP </li> <br/>
								<li> <img src="Picture/vb.png" style="width:27px; float:left; margin-right:10px; ">Visual Basic </li> <br/>
								<li> <img src="Picture/java.png" style="width:27px; float:left; margin-right:10px;">Java </li> <br/>
								<li><img src="Picture/jscript.png" style="width:27px; float:left; margin-right:10px;"> Javascript</li><br/>
								<li><img src="Picture/xml.png" style="width:27px; float:left; margin-right:10px;"> XML</li>
							</ul> 
						<B><h5>Langages secondaires</h5></B>	
							<ul style="list-style-type: none; padding-left: 0px">
								<li><img src="Picture/python.png" style="width:27px; float:left; margin-right:10px;"> Pyton </li> <br/>
								 <br/>
							</ul>
						</div>
						
					</article>
					
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:20px">
						<div class="colone colonecompétence">
						<B><h5>Frameworks et Technologies</h5></B>
							<ul style="list-style-type: none; padding-left: 0px">
								<li><img src="Picture/bootstrap.png" style="width:27px; float:left; margin-right:10px; ">bootstrap</li> <br/>
								<li><img src="Picture/sf1.png" style="width:27px; float:left; margin-right:10px; ">Symfony</li> <br/>
								<li><img src="Picture/apache.png" style="width:27px; float:left; margin-right:10px; ">APACHE</li> <br/>
								
							</ul>
						</div>
					</article>
					<article class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:20px">
						<div class="colone colonecompétence">
						<B><h5>Base de données et Outils</h5></B>
							<ul style="list-style-type: none; padding-left: 0px">
								<li><img src="Picture/github.png" style="width:30px; float:left; margin-right:10px;  ">Github</li><br/>
								<li><img src="Picture/bdd.png" style="width:23px; float:left; margin-right:10px;  ">MYSQL</li> <br/>
								<li><img src="Picture/bdd.png" style="width:23px; float:left; margin-right:10px;  ">PhpMyAdmin</li>  <br/>
								<li><img src="Picture/bdd.png" style="width:23px; float:left; margin-right:10px; ">SQLite</li> <br/>
							</ul>
						<B><h5>OS Utilisés</h5></B>
							<ul style="list-style-type: none; padding-left: 0px">
								<li><img src="Picture/apple.png" style="width:25px; float:left; margin-right:10px;  ">OSX/MacOS| LION -> Sierra</li> <br/>
								<li><img src="Picture/windows.png" style="width:25px; float:left; margin-right:10px;  ">Windows| 95 -> 10</li> <br/>
								<li><img src="Picture/icon.png" style="width:25px; float:left; margin-right:10px;  ">Ubuntu | Debian | Raspbian</li> <br/>
							</ul>
						</div>
					</article>
				</div>
				
				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<br/><br/>
		 				<h4 class="heading-1"><span> <img src="Picture/school.png" style="width:75px; padding-left:10px; padding-right: 10px; position:center; vertical-align:middle; float:center;"><FONT color="#1984B1">Formations</span></FONT></h4>
		 				
		 			</article>
					
					
		 		</div>
				<a href="#" class="info"><img src="Picture/information.png" style="width:25px; margin-left:0%;">
							<span class="infobulle">Voici la liste de mes formations.</span>
				</a>
		 		

				<br/><br/><br/>


				<div class="row">
					<article class="col-xs-14 col-sm-14 col-md-6 col-lg-6">
						<div class="colone coloneformation">
							<div class="center"><br/>
								<B><h5>Licence SIO OPTION SLAM | A VENIR</h5></B>
								<p class="police_date">Septembre 2019 -> Aout 2020 </p>
							</div>
						
						</div>
					</article>


					<article class="col-xs-14 col-sm-14 col-md-6 col-lg-6">
						<div class="colone coloneformation">
							<B><h5>BTS SIO EN ALTERNANCE OPTION SLAM  |  ENTREPRISE SAP2I</h5></B>
							<p class="police_date">Septembre 2015 -> Aout 2017</p>
							<ul class="separateur">	
								<li> Réalisation de supervision Industrielle (Siemens Tia Portal)</li>
								<li> Programmation Orientée Objet (Java, Php, Vba)</li>
								<li> Mise en place de serveur Centréon Nagios</li>
								<li> Maintenance auprès des Utilisateurs </li>
							</ul>
							<p class="police_date" style="text-align:right"> SAP2I| Rue Professeur Louis Néel 
							<img src="Picture/sap2i.png" style="width:35px; vertical-align:-15px; margin-right: 20px"></p>
						</div>
					</article>
				</div>
				<br/>

				<div class="row">
					<article class="col-xs-14 col-sm-14 col-md-6 col-lg-6">
						<div class="colone coloneformation">
							<B><h5>BTS SIO ALTERNANCE OPTION SLAM | DIJON FORMATION</h5></B>
							<p class="police_date">Septembre 2015 -> Aout 2017</p>
							<ul class="separateur">
								<li> Modèle OSI/Calcul adressage IP</li>
								<li> Paramétrage CISCO (Switch Routeur...)</li>
								<li> HTML/CSS/PHP</li> 
								<li> MYSQL </li>  
							</ul>
							<p class="police_date" style="text-align:right" >Dijon Formation | Boulevard de l'Europe Quetigny
							<img src="Picture/df.png" style="width:90px; vertical-align: middle; margin-right: 20px"> </p>

						</div>
					</article>

					<article class="col-xs-14 col-sm-14 col-md-6 col-lg-6">
						<div class="colone coloneformation">
							<B><h5>BAC TECHNOLOGIQUE OPTION SIG | LYCEE SAINT BENIGNE</h5></B>
							<p class="police_date">Septembre 2012 -> Aout 2015</p>
							<ul class="separateur">
								<li> MYSQL</li>
								<li> XML</li>
								<li> HTML</li>
								<li> CSS</li>
							</ul>
							<p class="police_date" style="text-align:right"> Saint Benigne | Rue de Talant Dijon
							<img src="Picture/sb.png" style="width:20px; vertical-align:middle; margin-right: 20px"> </p>


							</script>
						</div>
					</article>
				</div>

				<div class="row">
					<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<br/><br/>
		 				<h4 class="heading-1"><span> <img src="Picture/pb.png" style="width:75px; padding-left:10px; padding-right: 20px; position:center; vertical-align:middle; float:center;"><FONT color="#1984B1">Intérêts</span></FONT></h4>
		 				
		 			</article>
		 		</div>
				<a href="#" class="info"><img src="Picture/information.png" style="width:25px; margin-left:0%;">
							<span class="infobulle">Survoler les icônes pour plus d'informations.</span>
				</a>
				<br/><br/><br/>
				<div class="row">
					<article class="col-xs-14 col-sm-14 col-md-6 col-lg-12">
					<center>
					
					<a href="#" class="info"><img class="rotate" src="Picture/laptop.png" style="width:115px; margin-left:0%;" alt="icon1"><span class="infobulle">L'informatique en général.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/hiteck.png" style="width:115px; margin-left:0%;" alt="icon2"><span class="infobulle">Le hight-tech, les smartphones..</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/coder.png" style="width:115px; margin-left:0%;" alt="icon3"><span class="infobulle">Coder, bien sûr !.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/photo.png" style="width:115px; margin-left:0%;" alt="icon4"><span class="infobulle">La photographie.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/drone.png" style="width:115px; margin-left:0%;" alt="icon5"><span class="infobulle">Piloter des engins volants.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/livre.png" style="width:115px; margin-left:0%;" alt="icon6"><span class="infobulle">Les romans, les mangas.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/movie.png" style="width:115px; margin-left:0%;" alt="icon7"><span class="infobulle">Les films et les séries.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/restaurant.png" style="width:115px; margin-left:0%;" alt="icon8"><span class="infobulle">Les bons restaurants.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/musique.png" style="width:115px; margin-left:0%;" alt="icon9"><span class="infobulle">La musique: Francaise, rock et pop.</span></a>
					<a href="#" class="info"><img class="rotate" src="Picture/ampoule.png" style="width:115px; margin-left:0%;" alt="icon10"><span class="infobulle">Chercher, trouver, innover, s'investir, réaliser divers projets.</span></a>
					</center>
					</article>
				</div>

			</div>
		</div>
</body>
<br/><br/><br/>
	

	<?php
		include("footer.php");
	?>
		
	
	

</html>
	
