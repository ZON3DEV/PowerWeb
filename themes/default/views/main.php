
<!------------------------------------------------------------------------------------------->
<!---> 
<!--- PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)-> 
<!---> 
<!------------------------------------------------------------------------------------------->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	
	<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css"  />
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/modules.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->homeUrl; ?>/js/redmond/jquery-ui-1.8.17.custom.css" type="text/css" />
	
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/aiondatabase.js"></script>
	
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/jquery_ui.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/jquery.qtip.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>/js/highcharts/highcharts.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('*[title]').qtip({
			content: {text: false},
			style: 'dark',
			position: {
				target: 'mouse',
				adjust: {screen: true}
			}
		});  
	});
	</script>
</head>
<body>

<div id="navigation">
	<ul>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>">Startseite</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>online">Wer ist Online?</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>top">Spieler Rangliste</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>abyss">Abyss Rangliste</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>legion">Halle der Legionen</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>castle">Burg Belagerungen</a></li>
	<li><a href="<?php echo Yii::app()->homeUrl; ?>stats">Statistiken</a></li>
	<li><a href="#" title="Aion Reborn Freeshard">Community</a></li> <!-- Put your forum address here -fallenfate -->
	<?php if(!Yii::app()->user->isGuest): ?><li><a href="<?php echo Yii::app()->homeUrl; ?>logout"/>Abmelden</a></li><?php endif; ?>
	</ul>
</div>
<!-- navigation -->

<div id="header">
	<div id="logo">
		<a href="<?php echo Yii::app()->homeUrl; ?>" title="Aion Reborn Freeshard"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="logo" /></a>
	</div>
</div>
<!-- header -->

<div id="wrapper">

	<div id="sidebar_left">
		<div class="menu">
			<div class="menu_title">Navigation</div>
			<div class="menu_body">
				<ul class="menu_link">
				<li><a href="<?php echo Yii::app()->homeUrl; ?>">Startseite</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>online">Wer ist Online</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>top">Spieler Rangliste</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>abyss">Abyss Rangliste</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>legion">Halle der Legionen</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>castle">Belagerungen</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>search">Spieler suchen</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>droplist">Beuteliste</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>broker">Auktionen</a></li>
				<li><a href="<?php echo Yii::app()->homeUrl; ?>stats">Statistiken</a></li>
				</ul>
			</div>
		</div>
		<div class="menu">
			<div class="menu_title">Kontoverwaltung</div>
			<div class="menu_body">
				<?php if(Yii::app()->user->isGuest): ?>
					<?php $this->widget('application.components.WidgetLogin'); ?>
				<?php else: ?>
					<ul class="menu_link">
					<li>Logged in as <b><?php echo Yii::app()->user->name; ?></b></li>
					<?php if (Yii::app()->user->access_level >= Config::get('access_level_editor')): ?><li><a href="<?php echo Yii::app()->homeUrl; ?>admin">Administration</a></li><?php endif; ?>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>account">Mein Konto</a></li>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>pers">Meine Charaktere</a></li>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>webshop">Online Warenhaus</a></li>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>userbar">Kontrollzentrum</a></li>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>settings">Einstellungen</a></li>
					<li><a href="<?php echo Yii::app()->homeUrl; ?>logout">Abmelden</a></li>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- sidebar -->
	
	<div id="content">
		<?php echo $content; ?>
		<?php $this->widget('application.components.WidgetPvp'); ?>
	</div>
	<!-- content -->
	
	<div id="sidebar_right">
		<div class="menu">
			<div class="menu_title">Server status</div>
			<div class="menu_body">
				<div class="menu_line">Login Server: <b><?php echo Status::server('127.0.0.1', 80); ?></b></div>
				<div class="menu_line">World Server: <b><?php echo Status::server('127.0.0.1', 80); ?></b></div>
			</div>
		</div>
		<div class="menu">
			<div class="menu_title">Online (<span style="color: #FFD700;">Elyos</span>/<span style="color: #FF0000;">Asmodier</span>)</div>
			<div class="menu_body">
				<div class="menu_line">Spieler Online: <b><?php echo Status::online(); ?> (<span style="color: #CDAD00;"><?php echo Status::online_asmo(); ?></span> / <span style="color: #A52A2A;"><?php echo Status::online_ely(); ?></span>)</b></div>
			</div>
		</div>
		<div class="menu">
			<div class="menu_title">Server Support</div>
			<div class="menu_body">
				<?php $this->widget('application.components.WidgetGm'); ?>
			</div>
		</div>
		<div class="menu">
			<div class="menu_title">Werbung</div>
			<div class="menu_body">
				<div class="center mb10">
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_mmotop.png" /></a>
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_l2top.png" /></a>
				</div>
				<div class="center mb10">
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_aiontop.gif" /></a>
					<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_wartop.gif" /></a>
				</div>
				<div class="center">
					<a href="<?php echo Yii::app()->homeUrl; ?>vote/gtop/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_gtop100.jpg" /></a>
					<a href="<?php echo Yii::app()->homeUrl; ?>vote/gamesites/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_gamesites200.png" /></a>
				</div>
				<div class="center">
					<a href="<?php echo Yii::app()->homeUrl; ?>vote/xtremetop/"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner_xtremetop100.png" /></a>
				</div>
			</div>
		</div>
	</div>
	<!-- sidebar -->
	
	<div class="clear"></div>

</div>
<!-- wrapper -->

<div id="footer">
	<div class="footer">
		<div>
			<?php echo Config::copyright(); //DO NOT REMOVE (apparently, but these files were 'grabbed' anyway, weren't they?  Do whatever - fallenfate) ?>
		</div>
	</div>
</div>
<!-- footer -->

</body>
</html>