<em><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Admin Panel Category Flat Bootstrap Responsive Web Template | Products :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script src="product.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<li><a href="checkout.html">Delivery information</a></li>
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>

		 <!-- //header-ends -->
				
				<!--content-->
			<div> 
				<div >
		    	<h4>
				<a href="indexb.php">Home > </a>
				
				<span>Validation</span>
				</h4>
		    </div>
		   </div>
			<!--content-->
		   
		   <hr>
		</div>
</div><br>
	   
	   
	   
<?PHP
include "../core/categorieC.php";
$categorie1C=new categorieC();
$listeCategories=$categorie1C->afficherCategories();

?>
	   
	
    <div class="container">
		
		<form method="POST" action="ajoutProduit.php">
			<table>
				<input type="hidden" name="id"  >
			  <div class="form-group">
					<label>Réference : </label>
					<input type="text" id="reference" name="reference" placeholder=" Saisir Référence " style="border-radius: 5px;width: 30% " >
				   <span id="missreference"></span><br>
				</div>
				
				<div class="form-group" >
					<label>Nom : </label>
					<input type="text" id="nom" name="nom" placeholder="  Saisir Nom " style="border-radius: 5px;width: 30% "  required><span id="missnom"></span><br>
				 
				</div>
				
				<div class="form-group">
					<label>Categorie : </label>
					
				  <select name="categorie" style="border-radius: 5px;width: 30% " id="categorie" required>
					<?PHP
					foreach($listeCategories as $row){
					?>
						<option value="<?PHP echo $row['nomC']; ?>"><?PHP echo $row['nomC']; ?>
						</option>
						<?PHP } ?>
					</select><span id="misscategorie"></span><br>
				</div>
				<div class="form-group">
					<label>Prix : </label>
				  <input  type="text" id="prix" name="prix"  placeholder="saisir Prix " style="border-radius: 5px; width: 30% "required >
					 <span id="missprix"></span><br>
				</div>
			<div class="form-group">
					<label>Quantité : </label>
				  <input  type="text"  id="quantite" name="quantite" min="1" placeholder="saisir Quantité" style="border-radius: 5px; width: 30% "required >
				 <span id="missquantite"></span><br>	
			</div>
			
			<div class="form-group">
					<label>Image : </label>
				  <input  type="file"  id="image" name="image" placeholder="Image produit " style="border-radius: 5px; width: 30% " multiple >
				
			</div>
			
			
			<div class="form-group">
				
									
					<button type="submit" class="btn btn-primary" name="ajouter" id="bouton_envoi">Ajouter</button>
				
				</div>
</table>
			</form>
		
	</div>
	   
	   <script>
            var formValid = document.getElementById('bouton_envoi');
            var reference = document.getElementById('reference');
            var missreference = document.getElementById('missreference');
            var referenceValid = /^[0-9\s]+$/;
		    var nom = document.getElementById('categorie');
            var misscategorie = document.getElementById('misscategorie');
            var categorieValid = /^[a-zA-Zéèêî][a-zéèêîçà]+([-'\s][a-zA-Zéèêî][a-zéèêîçà]+)?/;
		    var nom = document.getElementById('nom');
            var missnom = document.getElementById('missnom');
            var nomValid = /^[a-zA-Zéèêî][a-zéèêîçà]+([-'\s][a-zA-Zéèêî][a-zéèêîçà]+)?/;
            var prix = document.getElementById('prix');
            var missprix = document.getElementById('missprix');
            var prixValid = /^[0-9\s]+$/;
            var quantite = document.getElementById('quantite');
            var missquantite = document.getElementById('missquantite');
            var quantiteValid = /^[1-9\s][0-9]+$/;

            
             formValid.addEventListener('click', validationreference);
            
            function validationreference(event){
                //Si le champ est vide
                if (reference.validity.valueMissing){
                    event.preventDefault();
                    missreference.textContent = 'Référence manquant';
                    missreference.style.color = 'red';
                //Si le format de données est incorrect
                }else if (referenceValid.test(reference.value) == false){
                    event.preventDefault();
                    missreference.textContent = 'Format incorrect';
                    missreference.style.color = 'orange';
                }else{   }


		   }
		   
		    formValid.addEventListener('click', validationnom);
            
            function validationnom(event){
                //Si le champ est vide
                if (nom.validity.valueMissing){
                    event.preventDefault();
                    missnom.textContent = 'Nom manquant';
                    missnom.style.color = 'red';
                //Si le format de données est incorrect
                }else if (nomValid.test(nom.value) == false){
                    event.preventDefault();
                    missnom.textContent = 'Format incorrect';
                    missnom.style.color = 'orange';
                }else{   }
            }

		   	formValid.addEventListener('click', validationcategorie);
            
            function validationcategorie(event){
                //Si le champ est vide
                if (categorie.validity.valueMissing){
                    event.preventDefault();
                    misscategorie.textContent = 'Nom manquant';
                    misscategorie.style.color = 'red';
                //Si le format de données est incorrect
                }else if (categorieValid.test(categorie.value) == false){
                    event.preventDefault();
                    misscategorie.textContent = 'Format incorrect';
                    misscategorie.style.color = 'orange';
                }else{   }
            }
		   
            
            formValid.addEventListener('click', validationprix);
            
            function validationprix(event){
                //Si le champ est vide
                if (prix.validity.valueMissing){
                    event.preventDefault();
                    missprix.textContent = 'Prix manquant';
                    missprix.style.color = 'red';
                //Si le format de données est incorrect
                }else if (prixValid.test(prix.value) == false){
                    event.preventDefault();
                    missprix.textContent = 'Format incorrect';
                    missprix.style.color = 'orange';
                }else{   }
            }
		formValid.addEventListener('click', validationquantite);
		function validationquantite(event){
                //Si le champ est vide
                if (quantite.validity.valueMissing){
                    event.preventDefault();
                    missquantite.textContent = 'quantite manquant';
                    missquantite.style.color = 'red';
                //Si le format de données est incorrect
                }else if (quantiteValid.test(quantite.value) == false){
                    event.preventDefault();
                    missquantite.textContent = 'Format incorrect';
                    missquantite.style.color = 'orange';
                }else{ 
                }
            }
        </script>
				<!--//content-inner-->
	   
	   
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					
					<div class="logo">
										<a href="indexb.php"><img src="images/logo99.png" class="img-responsive" alt=""> </a>
									</div>
					<header class="logo1">
						
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
					<br><br><br><br>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="indexb.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion des Produits</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="ajouterProduit.php">Ajouter Produit</a></li>
											<li id="menu-academico-avaliacoes" ><a href="afficherProduit.php">Afficher Produits</a></li>
											
										  </ul>
										</li>
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Gestion Catégories</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="ajoutCategorie.html">Ajouter Categorie</a></li>
											<li id="menu-academico-avaliacoes" ><a href="afficherCategorie.php">Afficher Catégorie</a></li>
											
										  </ul>
										</li>
									<li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
									<li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
									<li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
									 <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
									<li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Produit</span></a></li>
							        <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
											<li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>

										  </ul>
									 </li>
									<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>	
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
	
		   <script src="js/menu_jquery.js"></script>
</body>
</html></em>