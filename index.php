<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>Antevorte</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/presets/preset4.css" id="css-preset" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"><!--[if lt IE 9]><script src="js/html5shiv.js"></script><script src="js/respond.min.js"></script><![endif]-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href="images/favicon.ico" rel="shortcut icon">
</head><!--/head-->
<body>
	<!--.preloader-->
	<div class="preloader">
		<i class="fa fa-circle-o-notch fa-spin"></i>
	</div><!--/.preloader-->
	<header id="home">
		<div class="carousel slide carousel-fade" data-ride="carousel" id="home-slider">
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/1.png)">
					<div class="logo animated fadeInRightBig"></div>
					<div class="caption">
						<p class="animated fadeInRightBig">Finanční servis - Poradenství - Firemní rozvoj</p><a class="btn btn-start animated fadeInUpBig" data-scroll="" href="#services">Začněte zde</a>
					</div>
				</div>
			</div><a href="#services" id="tohash"><i class="fa fa-angle-down"></i></a>
		</div><!--/#home-slider-->
		<div class="main-nav">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">
					<h1><img alt="logo" class="img-responsive" src="images/white_logo.png"></h1></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="scroll active">
							<a href="#home">Domů</a>
						</li>
						<li class="scroll">
							<a href="#services">Služby</a>
						</li>
						<li class="scroll">
							<a href="#about-us">O nás</a>
						</li>
						<li class="scroll">
							<a href="#portfolio">Portfolio</a>
						</li>
						<li class="scroll">
							<a target="_blank" href="GDPR.pdf">GDPR</a>
						</li>
						<li class="scroll">
							<a href="#contact">Kontakt</a>
						</li>
					</ul>
				</div>
			</div>
		</div><!--/#main-nav-->
	</header><!--/#home-->
	<section id="services">
		<div class="container">
			<div class="heading wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
				<div class="row">
					<div class="text-center col-sm-8 col-sm-offset-2">
						<h2>Námi poskytované služby</h2>
						<p>Spojili jsme síly zkušených bankéřů a lektorů profesního rozvoje s vlastní manažerskou praxí a můžeme vám nabídnout:</p>
					</div>
				</div>
			</div>
			<div class="text-center our-services">
				<div class="row">
					<div id="finance-toggle-div" class="col-sm-4 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="service-icon">
							<i class="fa fa-money" onclick="showDiv()"></i>
						</div>
						<div class="service-info">
							<h3>Finance</h3>
							<div id="finance">
								<ul class="our-services">
									<li>ekonomické a finanční poradenství podnikatelských a firemních aktivit</li>
									<li>doporučení směrů investic dle ekonomické analýzy</li>
									<li>návrh a vypracování ekonomického modelu financování</li>
									<li>nastavení finančních toků (nastavení řízení cash flow)</li>
									<li>zpracování dokumentace a podkladů potřebných pro posouzení možností poskytnutí úvěrových finančních prostředků</li>
									<li>vyhledání a navržení vhodného finančního ústavu na míru</li>
									<li>poradenská činnost spojená s přípravou a realizací rychlého řešení poskytnutí bankovního úvěru</li>
									<li>kompletace a kontrola podkladů pro čerpání úvěrů</li>
									<li>monitoring pro banku vyplývající z úvěrových smluv</li>
									<li>konzultace při účetních a daňových otázkách</li>
								</ul>
							</div><a class="btn btn-start animated fadeInUpBig" data-scroll="" id="finance-toggle">Zobrazit podrobnosti</a>
						</div>
					</div>
					<div id="process-toggle-div" class="col-sm-4 wow fadeInDown" data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="service-icon">
							<i class="fa fa-puzzle-piece"></i>
						</div>
						<div class="service-info">
							<h3>Procesní a projektové poradenství</h3>
							<div id="process">
								<ul class="our-services">
									<li>analýza výrobních i nevýrobních procesů</li>
									<li>navržení změn procesů pro zvýšení efektivity, průchodnosti, rychlosti a ekonomičnosti (lean management)</li>
									<li>řízení změny předpisové dokumentace v&nbsp;návaznosti na požadované certifikace (např. ISO)</li>
									<li>nastavení projektového řízení (od zadání projektu až po jeho vyhodnocení)</li>
									<li>optimalizace výnosů a nákladů projektů</li>
									<li>restrukturalizace firmy</li>
									<li>nastavení marketingového mixu</li>
									<li>kontakty na případné dodavatele či odběratele z řad vlastních klientů nebo firem, se kterými mají naši klienti kladnou zkušenost – nastavení efektivní spolupráce mezi nimi</li>
								</ul>
							</div><a class="btn btn-start animated fadeInUpBig" data-scroll="" id="process-toggle">Zobrazit podrobnosti</a>
						</div>
					</div>
					<div id="people-toggle-div" class="col-sm-4 wow fadeInDown" data-wow-delay="550ms" data-wow-duration="1000ms">
						<div class="service-icon">
							<i class="fa fa-male"></i>
						</div>
						<div class="service-info">
							<h3>Udržitelný rozvoj lidí</h3>
							<div id="people">
								<ul class="our-services">
									<li>nastavení organizační struktury a zpětnovazebního toku informací</li>
									<li>kompetenční modely, popisy pracovních míst</li>
									<li>motivační odměňovací systémy</li>
									<li>plánování a hodnocení výkonu</li>
									<li>řízení rozvoje zaměstnanců</li>
									<li>organizace výběru manažerů, zaměstnanců</li>
									<li>personální audity, psychodiagnostika a měření potenciálu zaměstnanců</li>
									<li>školení a koučink manažerů a dalších zaměstnanců</li>
									<li>motivační programy, teambuildingy, eventy</li>
									<li>assessment a development centre, outplacement</li>
								</ul>
							</div><a class="btn btn-start animated fadeInUpBig" data-scroll="" id="people-toggle">Zobrazit podrobnosti</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#services-->
	<section class="parallax" id="about-us">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-4 vcenter">
					<div class="about-info wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
						<h2>O nás</h2>
						<p>Nejsme někdo, kdo do vaší firmy vtrhne jako povodeň, autoritativně řekne co a jak, pak zmizí a nechá všechno na vás. Najdeme bolavá místa ve vaší firmě a doporučíme vám lék a naučíme vás, jak dál pracovat tak, aby po zásahu nezůstala jizva.</p>
						<p>Nemáme rádi slovo školení. Nemáme rádi slovo kurz. Protože pro nás rozvoj vašich lidí nekončí pouze tím, že absolvují jedno, nebo dvoudenní kurz. Vždy doslova designujeme každý nový rozvojový projekt na míru potřebám vás (managementu, nebo HR), vašich lidí (účastníků rozvoje a jejich kolegů) a vaší firmy (firemní procesy).</p>
						<p>Navíc vnímáme, že lidi mají slovo „školení“ bohužel velmi často spojeno s nudnými a v podstatě ztracenými dny, kdy je jim předkládána řada „řešení“, která nejsou tvořena přiměřeně jejich znalostem, schopnostem či podmínkám a situaci ve firmě. Proto pracujeme s rozvojovými programy, či projekty, které jsou díky důkladné analýze současného stavu vypracovány s absolutně přesným zásahem do firemních a účastnických potřeb.</p>
						<p>Jmenujeme se podle antické bohyně budoucnosti – Antevorte.</p>
					</div>
				</div><!--
    --><div class="col-xs-12 col-lg-4 vcenter">
					<div class="our-skills wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
						<h2>Věnujeme se</h2>
						<div class="single-skill wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1000ms">
							<p class="lead">Financím</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="34">
									34%
								</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1000ms">
							<p class="lead">Procesnímu a projektovému poradentství</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="28">
									28%
								</div>
							</div>
						</div>
						<div class="single-skill wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1000ms">
							<p class="lead">Udržitelnému rozvoji lidí</p>
							<div class="progress">
								<div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="38">
									38%
								</div>
							</div>
						</div>
					</div>
				</div><!--
                --><div class="col-xs-12 col-lg-4 vcenter">
					<div class="about-info wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
                        <h2>Naše zásady</h2>
                        <div class="our-principle">
                            <h4>Etika</h4>ctění morálních hodnot, slušnost a absolutní zachování důvěrných informací
                        </div>
                        <div class="our-principle">
                            <h4>Empatie</h4>profesionální přizpůsobení potřebám a očekáváním
                        </div>
                        <div class="our-principle">
                            <h4>Erudice</h4>stálý vlastní profesní rozvoj, osobní praxe v rozvojových oblastech
                        </div>
                        <div class="our-principle">
                            <h4>Evaluace</h4>interaktivní řešení krok za krokem s průběžným zhodnocováním a motivací
                        </div>
                        <h4>Efektivita</h4>řešení na míru s využitím moderních, efektivních metod, žádný zbytečný čas
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->
	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
					<h2>Portfolio nejžádanějších služeb</h2>
					<p>Pro zobrazení detailu jednotlivého produktu najeďte kurzorem na obrázek</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInRightBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/1.png">
							<h3 class="overlay-header">Osobnostní rozvoj</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Osobnostní rozvoj</h3>
										<p>Rozvoj osobnostního potenciálu, který souvisí především s tím, jaký člověk je, jak vnímá dění kolem sebe, jak na něj reaguje atp.</p>
										<p>Vhodné pro každého, kdo má zájem.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/2.png">
							<h3 class="overlay-header">Komunikační dovednosti</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Komunikační dovednosti</h3>
										<p>Posílení dovedností ve zpracování a zejména následném předávání informací jiným lidem (komunikaci).</p>
										<p>Vhodné například pro manažery, obchodníky, tiskové mluvčí atp.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/3.png">
							<h3 class="overlay-header">Manažerské dovednosti</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Manažerské dovednosti</h3>
										<p>Posílení dovedností potřebných pro vedení, řízení lidí, týmu, firmy.</p>
										<p>Vhodné pro manažery, nebo potenciální nástupce a také pro jednatele malých firem a mistry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/4.png">
                            <h3 class="overlay-header">Obchodní dovednosti</h3>
                        </div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Obchodní dovednosti</h3>
										<p>Posílení dovedností potřebných pro vedení obchodního jednání, vyjednávání, komunikaci s dodavateli a odběrateli.</p>
										<p>Vhodné například pro manažery, obchodníky atp.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/5.png">
							<h3 class="overlay-header">Řízení výroby</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Řízení výroby</h3>
										<p>Speciální rozvojové téma prohlubující dovednosti a znalosti související s řízením výrobní firmy.</p>
										<p>Vhodné pro manažery výrobních firem, mistry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/6.png">
							<h3 class="overlay-header">Personalistika</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Personalistika</h3>
										<p>Speciální rozvojové téma prohlubující dovednosti a znalosti potřebné pro vedení personálního oddělení každé firmy.</p>
										<p>Vhodné pro personalisty, manažery a jednatele malých firem.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/7.png">
							<h3 class="overlay-header">Ekonomika pro manažery</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Ekonomika pro manažery</h3>
										<p>Speciální rozvojové téma prohlubující dovednosti a znalosti související s řízením ekonomiky týmu, oddělení, firmy atp.</p>
										<p>Vhodné pro manažery, jednatele atp.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/8.png">
							<h3 class="overlay-header">Procesní management</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Procesní management</h3>
										<p>Speciální rozvojové téma prohlubující dovednosti a znalosti související s řízením procesů ve firmách.</p>
										<p>Vhodné například pro manažery, jednatele firem atp.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/9.png">
							<h3 class="overlay-header">Projektový management</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Projektový management</h3>
										<p>Speciální rozvojové téma prohlubující dovednosti a znalosti potřebné pro vedení projektů.</p>
										<p>Vhodné například pro projektové manažery, manažery, jednatele firem atp.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/10.png">
							<h3 class="overlay-header">Restrukturalizace firmy</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Restrukturalizace firmy</h3>
										<p>Specializovaná analýza stávajícího stavu, návrh změn a jejich zavedení.</p>
										<p>Vhodné pro firmy hledající zefektivnění a nové směry.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/11.png">
							<h3 class="overlay-header">Zajištění financování firem</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Zajištění financování firem</h3>
										<p>Dle potřeb vytvoření systému financování, navržení vhodné finanční instituce pro jeho poskytnutí, komunikace s ní a zajištění financování.</p>
										<p>Vhodné pro firmy s rozvojovými záměry, potřebou financování či refinancování.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="folio-item wow fadeInLeftBig" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="folio-image"><img alt="" class="img-responsive" src="images/portfolio/12.png">
							<h3 class="overlay-header">Nastavení procesů ve firmě</h3>
						</div>
						<div class="overlay">
							<div class="overlay-content">
								<div class="overlay-text">
									<div class="folio-info">
										<h3>Nastavení procesů ve firmě</h3>
										<p>Analýza výrobních i nevýrobních procesů ve firmě, společné navržení jejich změn a zavedení těchto změn.</p>
										<p>Vhodné pro firmy s potřebou zefektivnit své procesy za účelem úspory nákladů, navýšení výkonu apod.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--<div id="portfolio-single-wrap">-->
		<!--<div id="portfolio-single">-->
		<!--</div>-->
		<!--</div>&lt;!&ndash; /#portfolio-single-wrap &ndash;&gt;-->
	</section><!--/#portfolio-->
	<section class="parallax" id="features">
        <?php
            $xml=simplexml_load_file("admin/stats.xml") or die("Error: Cannot create object");
        ?>
		<div class="container">
			<div class="row count">
				<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
					<i class="fa fa-users"></i>
					<h3 class="timer">
                        <?php
                        echo $xml->employees;
                        ?></h3>
					<p>proškolených zaměstnanců</p>
				</div>
				<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1000ms">
					<i class="fa fa-comments-o"></i>
					<h3 class="timer">
                        <?php
                        echo $xml->managers;
                        ?></h3>
					<p>koučovaných vyšších a top managerů</p>
				</div>
				<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-delay="700ms" data-wow-duration="1000ms">
					<i class="fa fa-car"></i>
					<h3 class="timer">
                        <?php
                        echo $xml->kilometers;
                        ?></h3>
					<p>tisíc najetých kilometrů ke klientům</p>
				</div>
				<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1000ms">
					<i class="fa fa-usd"></i>
					<h3 class="timer" id="no-break">
                        <?php
                        echo $xml->money;
                        ?></h3>
					<p>milionů Kč získaných pro firmy</p>
				</div>
			</div>
		</div>
	</section><!--/#features-->
	<section id="contact">
		<div class="wow fadeIn" data-latitude="50.077095" data-longitude="14.441656" data-wow-delay="400ms" data-wow-duration="1000ms" id="google-map"></div>
		<div class="parallax" id="contact-us">
			<div class="container">
				<div class="row">
					<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
						<h2>Kontaktujte nás</h2>
					</div>
				</div>
				<div class="contact-form wow fadeIn" data-wow-delay="600ms" data-wow-duration="1000ms">
					<div class="row">
						<div class="col-sm-6">
							<form action="mail.php" id="main-contact-form" method="POST" name="contact-form">
								<div class="row wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" id="form-name" name="form-name" placeholder="Jméno" required="required" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" id="form-email" name="form-email" placeholder="Email" required="required" type="email">
										</div>
									</div>
								</div>
								<div class="form-group">
									<input class="form-control" id="form-subject" name="form-subject" placeholder="Předmět" required="required" type="text">
								</div>
								<div class="form-group">
									<textarea class="form-control" id="form-message" name="form-message" placeholder="Zpráva" required="required" rows="4"></textarea>
								</div>
								<div class="form-group">
									<button class="btn-submit" type="submit">Odeslat</button>
								</div>
							</form>
						</div>
						<div class="col-sm-6">
							<div class="contact-info wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
								<ul class="address">
									<li><i class="fa fa-map-marker"></i> <span>Sídlo:</span> <a href="https://goo.gl/maps/Yt56cEB8JLK2">Vinohradská 2165/48, Praha 2</a></li>
									<li><i class="fa fa-home"></i> <span>Provozovna:</span> <a href="https://goo.gl/maps/K84b9kfMaUz">Luženská 2240, Rakovník</a></li>
									<li><i class="fa fa-phone"></i> <span>Telefon:</span> +420 606 634 240</li>
									<li>
										<i class="fa fa-envelope"></i> <span>Email:</span> <a href="mailto:antevorte@antevorte.cz">antevorte@antevorte.cz</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#contact-->
	<footer id="footer">
		<div class="footer-top wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
			<div class="container text-center">
				<div class="footer-logo">
					<a href="index.php"><img alt="" class="img-responsive" src="images/white_logo.png"></a>
				</div>
				<div class="social-icons">
					<ul>
						<li>
							<a class="envelope" href="mailto:antevorte@antevorte.cz"><i class="fa fa-envelope"></i></a>
						</li>
						<!--<li>-->
							<!--<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>-->
						<!--</li>-->
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>&copy; 2014 Oxygen Theme.</p>
					</div>
					<div class="col-sm-6">
						<p class="pull-right">Designed by Themeum, adjusted by Michal Kroupa, 2016</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.js" type="text/javascript">
	</script>
	<script src="js/bootstrap.min.js" type="text/javascript">
	</script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyAJBPBXzdhK7KhfJ608qtGF-I7W3xetXJc" type="text/javascript">
	</script>
	<script src="js/jquery.inview.min.js" type="text/javascript">
	</script>
	<script src="js/wow.min.js" type="text/javascript">
	</script>
	<script src="js/mousescroll.js" type="text/javascript">
	</script>
	<script src="js/smoothscroll.js" type="text/javascript">
	</script>
	<script src="js/jquery.countto.js" type="text/javascript">
	</script>
	<script src="js/lightbox.min.js" type="text/javascript">
	</script>
	<script src="js/main.js" type="text/javascript">
	</script>
</body>
</html>