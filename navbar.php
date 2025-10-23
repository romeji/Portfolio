
<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codeply preview</title>
  <base target="_self">
  <meta name="description" content="Codeply is a free online editor for Web developers and designers with code sample snippets." />
  <meta name="google" value="notranslate">
  <link rel="shortcut icon" href="/images/jerome.png">

  
  <!--stylesheets / link tags loaded here-->


  
  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/style.css">

  

  <style type="text/css">@media (max-width: 991px) {
    .navbar-collapse {
        position: fixed;
        top: 50px;
        left: 0;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 15px;
        width: 120px; /* Pixel de la barre */
        height: 2000%;	
    }
    .navbar-collapse.collapsing {
        height: auto;
        -webkit-transition: left 0.3s ease;
        -o-transition: left 0.3s ease;
        -moz-transition: left 0.3s ease;
        transition: left 0.3s ease;
        left: -100%;
    }
    .navbar-collapse.show {
        left: 0;
        -webkit-transition: left 0.3s ease-in;
        -o-transition: left 0.3s ease-in;
        -moz-transition: left 0.3s ease-in;
        transition: left 0.3s ease-in;
    }
}</style>

</head>
<body>
  <br/><br/><br/>
  <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse navbar-custom">

	  <button onclick='swap()'
	   class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="margin-top:8px; background-color:#1984B1;">
	  <span class="navbar-toggler-icon"></span>
	  </button>

  	<a href="index.php"><img  src = 'Picture/jerome.png'  class="logo" /></a>

  <div class="collapse navbar-collapse bg-inverse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">


      <li class="nav-item active"> 
      	<div class="tab1">
          <a href="index.php" >
  			<center>	<img id="img" src="Picture/user.png" style="width:30px;"> 
    		<a class="nav-link" href="index.php" style="line-height: 8px;">Présentation</a></a></center>
    	</div>
      </li>

      <li class="nav-item">
      	<div class="tab1">
  			<center>
          <a href="Etudes.php" >
	      	<img id="img1" src="Picture/school.png" style="width:30px;"> 
	        <a class="nav-link" href="etudes.php" style="line-height: 8px;">Etudes</a></a></center>
    	</div>
	   
      </li>

      <li class="nav-item">
        <div class="tab1">
  			<center>	
          <a href="#" >
			<img id="img2" src="Picture/bag.png" style="width:30px;"> 
	        <a class="nav-link" href="portefolio.php" style="line-height: 8px;">Portfolio</a></a></center>
    	</div>
			
      </li>

      <li class="nav-item active">
        <div class="tab1">
  			<center>
          <a href="veille.php" >
	      	<img id="img3" src="Picture/veille.png" style="width:34px;"> 
	        <a class="nav-link" href="veille.php" style="line-height: 8px;">Veille</a></a></center>
    	</div>
		
      </li>

      <li class="nav-item">
        <div class="tab1">
        <center>
          <a href="contact.php" >
          <img id="img4" src="Picture/envelope.png" style="width:30px;"> 
          <a class="nav-link" href="contact.php" style="line-height: 8px;">Contact</a></a></center>
      </div>
      </li>

      <?php   
          session_start();
        if(!isset($_SESSION['pseudo'])) 
        {
        }else{
        


    }?>
      

      

    </ul>
  
    <li class="nav-item form-inline mt-3 mt-md-0">
        <div class="tab6">
          <center>
          <a href="documents/CV.pdf" >
          <img id="img5" src="Picture/cv.png"; style="width:38px;"> 
          <a class="nav-link" style="color:grey; line-height: 0px;" href="documents/CV.pdf">CV</a></a></center>
       </div>  

    </li>

    <li class="nav-item dropdown" style="padding-right:50px">
      <center>
          <img id="img6" src="Picture/inscription.png"; style="width:40px; margin-top: -30px;"> 
          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="line-height: 5px;">
          Compte
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <?php             
                    if(!isset($_SESSION['pseudo'])) 
                    {
                      echo "<a class='dropdown-item' href='inscription.php'>Inscription</a>";
                      echo "<a class='dropdown-item' href='connexion.php'>Connexion</a>";
                    }else{
                        echo  "<a class='dropdown-item' href='espaceperso.php'>Membre</a>";
                        echo  "<a class='dropdown-item' href='deconnexion.php'>Déconnexion</a>";
                    }
          ?>
        
        
        </div>
         </center>
      </li>

    
  
        
    </div>
    </nav>
  

    <script type="text/javascript">
    	function swap()
		{
			monImage = document.getElementById("img");
 			monImage1 = document.getElementById("img1");
 			monImage2 = document.getElementById("img2");
 			monImage3 = document.getElementById("img3");
 			monImage4 = document.getElementById("img4");
 			monImage5 = document.getElementById("img5");
      monImage6 = document.getElementById("img6");
      monImage7 = document.getElementById("img7");

			  if (monImage.style.display != "none" ) {
			        monImage.style.display = "none";
			        monImage1.style.display = "none";
			        monImage2.style.display = "none";
			        monImage3.style.display = "none";
			        monImage4.style.display = "none";
			        monImage5.style.display = "none";
              monImage6.style.display = "none";
              monImage7.style.display = "none";
			        document.getElementById("main").style.marginLeft = "100px";
			        document.getElementById("main1").style.marginLeft = "120px";
			      



			    } else {
			        monImage.style.display = "block";
			        monImage1.style.display = "block";
			        monImage2.style.display = "block";
			        monImage3.style.display = "block";
			        monImage4.style.display = "block";
			        monImage5.style.display = "block";
              monImage6.style.display = "block";
              monImage7.style.display = "block";
			        document.getElementById("main").style.marginLeft= "0";

			        

 				}
		}
    </script>


  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
      
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          	cacherImg():
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  
  
  
  <script>
  
  </script>

</body>
</html>