<!doctype html>
<html >
<head>
<meta charset="utf-8">
	<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
	<style>
	.crud
		{
			padding-left: 250px;
		}
	
	</style>

<body>
	 <div class="header-section" style="padding-left: 200px"> 
            <!-- top_bg -->
            <div class="top_bg">
          <div class="header_top">
                <div class="top_right">
              <ul>
                    <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">help</a></li>
                    |
                    <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a></li>
                    |
                    <li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery information</a></li>
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
      
	<div class="sidebar-menu" >
<div class="menu">
    <ul id="menu" >
      <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
      <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-academico-sub" >
          <li id="menu-academico-avaliacoes" ><a href="shoes.html">Shoes</a></li>
         <li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>
        </ul>
      </li>
      <li id="menu-academico" ><a href="sunglasses.html"><i class="fa fa-file-text-o"></i> <span>Sunglasses</span></a></li>
      <li><a href="sweater.html"><i class="lnr lnr-pencil"></i> <span>Sweater</span></a></li>
      <li id="menu-academico" ><a href="catalog.html"><i class="fa fa-file-text-o"></i> <span>Catalog</span></a></li>
      <li id="menu-academico" ><a href="shoes.html"><i class="lnr lnr-book"></i> <span>Shoes</span></a></li>
      <li><a href="bags.html"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
      <li><a href="products.html"><i class="lnr lnr-chart-bars"></i> <span>Watches</span></a></li>
      <li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul id="menu-academico-sub" >
          <li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
          <li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>
        </ul>
      </li>
      <li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Services</span> <span class="fa fa-angle-right" style="float: right"></span></a>
        <ul>
          <li><a href="web.html"> webs</a></li>
          <li><a href="soins.html">Soins</a></li>
        </ul>
      </li>
		 </li>
        <li id="menu-academico"><a href="afficherEmploye.php"><i class="fa fa-table"></i> <span> Employes</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="afficherEmploye.php">Afficher les employes</a></li>
            <li id="menu-academico-avaliacoes"><a href="ajoutEmploye.html">Ajouter employes</a></li>
          </ul>
        </li>
        <li id="menu-academico"><a href="afficherSoins.php"><i class="fa fa-table"></i> <span> Soins</span> <span class="fa fa-angle-right" style="float: right"></span></a>
          <ul id="menu-academico-sub">
            <li id="menu-academico-avaliacoes"><a href="afficherSoins.php">Afficher les soins</a></li>
            <li id="menu-academico-avaliacoes"><a href="ajoutSoins.html">Ajouter soins</a></li>
          </ul>
        </li>
    </ul>
  </div>
</div>



<?PHP
include "../core/soinsC.php";
$soins1C=new SoinsC();
$listeSoinss=$soins1C->afficherSoinss();

//var_dump($listeEmployes->fetchAll());
?>
	<div class="crud">
<table class="table">
<tr>
<td>Id</td>
<td>Nom</td>
<td>Type</td>
<td>Image</td>
<td>Prix</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeSoinss as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['image']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><form method="POST" action="supprimerSoins.php">
	<input type="submit" name="supprimer" value="Supprimer" class="btn btn-danger" style="border-radius: 12px">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierSoins.php?id=<?PHP echo $row['id']; ?>">
	<input type="submit" name="modifier" value="Modifier" class="btn btn-primary" style="border-radius: 12px"></a></td>
	</tr>
	<?PHP
}
?>
</table>
</div>
	<div class="fo-top-di" style="padding-left: 200px">
		<div class="foot-top">

			<div class="col-md-6 s-c">
				<li>
					<div class="fooll">
						<h1>follow us on</h1>
					</div>
				</li>
				<li>
					<div class="social-ic">
						<ul>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="facebok"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="twiter"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="goog"> </i></a>
							</li>
							<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/index.html#"><i class="be"> </i></a>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</li>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 s-c">
				<div class="stay">
					<div class="stay-left">
						<form>
							<input type="text" placeholder="Enter your email" required="">
						</form>
					</div>
					<div class="btn-1">
						<form>
							<input type="submit" value="join">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
		<div class="footer">
			<div class="col-md-3 cust">
				<h4>CUSTOMER CARE</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Help Center</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">FAQ</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">How To Buy</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Delivery</a>
				</li>
			</div>
			<div class="col-md-2 abt">
				<h4>ABOUT US</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Our Stories</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/products.html">Press</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/faq.html">Career</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/contact.html">Contact</a>
				</li>
			</div>
			<div class="col-md-2 myac">
				<h4>MY ACCOUNT</h4>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/register.html">Register</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">My Cart</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/checkout.html">Order History</a>
				</li>
				<li><a href="https://p.w3layouts.com/demos/apr-2016/12-04-2016/gretong_admin_panel/web/details.html">Payment</a>
				</li>
			</div>
			<div class="col-md-5 our-st">
				<div class="our-left">
					<h4>OUR STORES</h4>
				</div>

				<li><i class="add"> </i>Mark peter</li>
				<li><i class="phone"> </i>012-586987</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a>
				</li>
			</div>
			<div class="clearfix"> </div>
			<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
			</p>
		</div>
	</div>

	</body>
</html>