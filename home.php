<?php
session_start();

if(!isset($_SESSION['user_session']))
{
 header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Homepage -</title>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">-->
<link href="css/style.css" rel="stylesheet" media="screen">

<!-- HEADER MAPA HTML-->

	<script type="text/javascript" src="js/jquery.latest.min.js"></script>
	<!--<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.lksMenu.js"></script>
    <link rel="stylesheet" type="text/css" href="css/lksMenuSkin2.css" />        
	<script type="text/javascript">
      	$('document').ready(function(){
  	 	$('.menul').lksMenu();
     	$('.menu2').lksMenu();
     	});
	</script>
<!-- END MENU JQUERY -->
<!-- MAPA -->
	<link href="css/default.css" rel="stylesheet" type="text/css" />
	<!--'<script type="text/javascript" src="js/jquery.latest.min.js"></script>-->
	<link href="css/demo.css" rel="stylesheet" />
	<script src="js/craftmap.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){	
			$('.demo2').craftmap({
				fullscreen: false,
				image: {
					width: 845,
					height: 560
				}
			});	
			$('.demo3').craftmap({
				fullscreen: false,
				image: {
					width: 845,
					height: 560
				}
			});	
		});		
	</script>
<!-- END MAPA -->
<!-- BARRAS CSS ANI -->
<link rel="stylesheet" type="text/css" href="css/anibarras.css" />
<!-- END BARRAS CSS ANI -->
<!-- FUNCIONES BOTONES GNRL Y LISTAS -->
<script type="text/javascript">
$(document).ready(function(){
		$("#mostrargnr").click(function(){			
			$('.boto-loc').hide();	
			$('.boto-gnrl').show();
			$('.botonselec').css('background','#01076b');
			$('.botonselec2').css('background','#4d4d4d');
			$('.botonselec2').css('opacity','0.5');
			$('.botonselec').css('opacity','1');	
			$('#mapaprin').attr('src','zzmapachubut.png');
			
			/*$('.demo2').show(); /* MAPA ORIGINAL */ /*
			$('.demo3').hide();
			$('.demo4').hide();
			$('.demo5').hide();*/
			$('.imgMap').attr('src','img/mapachubut.png');
			
			$('.botocajon1').css('background','#01076b');
		 	$('.botocajon2').css('background','#4d4d4d');
		 });
		$("#mostrarloc").click(function(){
			
			$('.boto-gnrl').hide();
			$('.boto-loc').show();
			$('.botonselec2').css('background','#01076b');
		 	$('.botonselec').css('background','#4d4d4d');
		 	$('.botocajon2').css('background','#4d4d4d');
		 	$('.botonselec').css('opacity','0.5');
		 	$('.botonselec2').css('opacity','1');
		 	
	 		$('.botocajon2').css('background','#01076b');
		 	$('.botocajon1').css('background','#4d4d4d');
		 	/*$('.imgMap').attr('src','img/zzmapachubut.png');*/
		 	
		 /*	$('.demo2').show(); /* MAPA ORIGINAL */ /*
			$('.demo3').hide();
			$('.demo4').hide();
			$('.demo5').hide();*/
			$('.imgMap').attr('src','img/mapachubut.png');
		 });
		 $("#comodoror").click(function(){
			$('.imgMap').attr('src','img/mapacomodoro.png');
		 });
		 $("#madrynr").click(function(){
			$('.imgMap').attr('src','img/mapamadryn.png');
		 });
		 $("#trelewr").click(function(){
			$('.imgMap').attr('src','img/mapatrelew.png');
		 });
		 $("#esquelr").click(function(){
			$('.imgMap').attr('src','img/mapaesquel.png');
		 });
		 $("#rawsonr").click(function(){
			$('.imgMap').attr('src','img/maparawson.png');
		 });
		 $("#conglo1r").click(function(){
			$('.imgMap').attr('src','img/mapaconglo1.png');
		 });
		 $("#conglo2r").click(function(){
			$('.imgMap').attr('src','img/mapaconglo2.png');
		 });
		 $("#conglo3r").click(function(){
			$('.imgMap').attr('src','img/mapaconglo3.png');
		 });
		 
	});
</script>
<!-- END FUNCIONES BOTONES GNRL Y LISTAS -->
<!-- FUNCIONES MAPA LISTAS GENERALES -->
<script type="text/javascript">
$(document).ready(function(){
		$("#listaz").click(function(){				
			//alert("sddsds");
			$('.imgMap').attr('src','img/mapachubut-z.png');
		 });
		 $("#listaa").click(function(){				
			$('.imgMap').attr('src','img/mapachubut-a.png');
		 	//alert("sddsds");
		 });
		 $("#listah").click(function(){				
			$('.imgMap').attr('src','img/mapachubut-h.png');
		 	//alert("sddsds");
		 });
		$("#mostrarloc").click(function(){
			$('.boto-loc').show(3000);
			$('.boto-gnrl').hide(3000);
			$('.botonselec2').css('background','#01076b');
		 	$('.botonselec').css('background','#4d4d4d');
		 	$('.botonselec').css('opacity','0.5');
		 	$('.botonselec2').css('opacity','1');
		 	/*$('.imgMap').attr('src','img/zzmapachubut.png');*/
			$('.botocajon2').css('background','#01076b');
		 	$('.botocajon1').css('background','#4d4d4d');
		 });
		 $("#feperon").click(function(){
			$('.demo2').hide();
			$('.demo3').show();
			$('.demo4').hide();
			$('.demo5').hide();
		 }); 
		 
	});
</script>
<!-- END FUNCIONES MAPA LISTAS GENERALES -->
<!-- FUNCIONES PDF -->
<script src="js/jspdf.min.js" type="text/javascript"></script>
<script type="text/javascript">

		var doc = new jsPDF();
		var specialElementHandlers = {
		    '#editor': function (element, renderer) {
		        return true;
		    }
		};
		
</script>
<script type="text/javascript">
	$(document).ready(function(){
		
		$("#cmd").click(function () {
		    doc.fromHTML($('#tutto').html(), 15, 15, {
		        'width': 170,
		            'elementHandlers': specialElementHandlers
		    },
		     function() {   doc.save('FPV-LASPASO2017.pdf');
      });
	});
});
</script>
<!-- END FUNCIONES PDF -->
<!-- END HEADER MAPA HTML-->
</head>

<body>

<ul>
    <div id="cerrarb" class='alert alert-success'>
  		<button class='close' id="closeb" data-dismiss='alert' style="float: right; background: transparent; margin-top: -2px; border: none !important;"><img src="img/close.png" alt="Cerrar"/></button>
   		<strong>Hola <?php echo $row['user_name']; ?></strong>, ¡Bienvenido a su Sistema de Visualización de Resultados de Paso 2017!
   </div>
    <a href="logout.php" target="_parent" style="text-decoration: none; border: none;"><p>Cerrar Sesión</p></a>

	<div id="contenidog">
  		<h1 style="font-size: 25px; margin-top: 0; line-height: 1.2em; margin-bottom: 15px; margin-top: 15px; font-weight: normal;">Resultados PASO 2017<br/>Frente para la Victoria</h1>
  			
    </div>

</ul>
<!--<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">-->

<!-- CONTENIDO MAPA HTML APARTE ///////////////////////////////////////////////////-->

<ul id="tutto">
	<h2><img src="img/chubutlogo.png" class="logochubu"/> <span style="margin-left: 1%; vertical-align: sub;">PROVINCIA DEL CHUBUT</span></h2>
<li style="position: relative; list-style: none;">
<div class="filtro-bus">
	<div class="botonesfiltro">
		<div class="botocajon1">
			<a class="botonselec" href="#" id="mostrargnr">FPV GENERALES</a>
		</div>  
		<div class="botocajon2">
			<a class="botonselec2" href="#" id="mostrarloc">CIUDADES Y CONGLOMERADOS</a>
		</div>	
	</div>	
</div>
	
<div class="linea-mapa"></div>
<div class="maparuli" style="float: left; position: relative;">
	
	<div class="demo2"><img id="mapaprin" src="img/mapachubut.png" class="imgMap"  />
	  <div class="marker" id="losaltares" data-coords="345, 200">
	    <h3 style="color: #1d149c !important;">Los Altares</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  
	  	<!--<div class="marker" id="loscajones" data-coords="345, 200" style="display: none;">
	    <h3>Los Altares</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >CAJOOOOOOOON</span></div>
	  </div>-->
	  
	  <div class="marker" id="lasplumas" data-coords="440, 180">
	    <h3 style="color: #1d149c !important;">Las Plumas</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span></div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">574</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">62,20%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="pasodeindios" data-coords="300, 190">
	    <h3 style="color: #1d149c !important;">Paso de Indios</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Paso de Indios</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1584</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,15%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dique" data-coords="500, 159">
	    <h3 style="color: #1d149c !important;">Dique F.A</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">206</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,05%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dejulio" data-coords="523, 159">
	    <h3 style="color: #1d149c !important;">28 de Julio</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">595</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dolavon" data-coords="545, 158">
	    <h3 style="color: #1d149c !important;">Dolavon</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">2845</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,02%%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="gaiman" data-coords="568, 157">
	    <h3 style="color: #1d149c !important; ">Gaiman</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">5900</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,27%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="elhoyo" data-coords="115, 65">
	    <h3>El Hoyo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">3667</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,04%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="epuyen" data-coords="135, 75">
	    <h3>Epuyén</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="elmaiten" data-coords="160, 55">
	    <h3>El Maiten</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="lagopuelo" data-coords="93, 55">
	    <h3>Lago Puelo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7779</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">68,50%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="rawson" data-coords="611, 160">
	    <h3 style="color: #1d149c !important;">Rawson</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">29168</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,45%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="trevelin" data-coords="100, 155">
	    <!-- 1240, 260 -->
	    <h3>Trevelin</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7905</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,55%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	
		</div>
	  <div class="marker" id="esquel" data-coords="135, 135">
	    <h3>Esquel</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">28664</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,71%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
	  <div class="marker" id="trelew" data-coords="592, 138">
	    <h3 style="color: #1d149c !important;">Trelew</h3>
	      <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div></div>
	  <div class="marker" id="madryn" data-coords="615, 105">
	    <h3>Puerto Madryn</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Biedma</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">67150</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,92%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 A "Unidad Ciudadana"</span></div> </div>
	  <div class="marker" id="comodoro" data-coords="425, 340">
	    <h3>Comodoro Rivadavia</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Escalante</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">143391</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,21%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
		<div class="marker" id="elmarisol" data-coords="410, 140">
	    <h3 style="color: #1d149c !important;">El Marisol</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">52</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">53,85%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div> </div>
		</div>
</div>
<!--- ////////////////// MAPA CENTRADO MOBILEEE ///////////////////// ---------------- -->
<div class="maparuli2" style="position: relative;">
	
	<div class="demo2"><img id="mapaprin" src="img/mapachubut.png" class="imgMap"  />
	  <div class="marker" id="losaltares" data-coords="345, 200">
	    <h3 style="color: #1d149c !important;">Los Altares</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  
	  	<!--<div class="marker" id="loscajones" data-coords="345, 200" style="display: none;">
	    <h3>Los Altares</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >CAJOOOOOOOON</span></div>
	  </div>-->
	  
	  <div class="marker" id="lasplumas" data-coords="460, 180">
	    <h3 style="color: #1d149c !important;">Las Plumas</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span></div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">574</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">62,20%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="pasodeindios" data-coords="300, 190">
	    <h3 style="color: #1d149c !important;">Paso de Indios</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Paso de Indios</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1584</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,15%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dique" data-coords="520, 159">
	    <h3 style="color: #1d149c !important;">Dique F.A</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">206</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,05%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dejulio" data-coords="543, 159">
	    <h3 style="color: #1d149c !important;">28 de Julio</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">595</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dolavon" data-coords="565, 158">
	    <h3 style="color: #1d149c !important;">Dolavon</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">2845</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,02%%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="gaiman" data-coords="588, 157">
	    <h3 style="color: #1d149c !important; ">Gaiman</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">5900</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,27%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="elhoyo" data-coords="115, 65">
	    <h3>El Hoyo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">3667</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,04%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="epuyen" data-coords="135, 75">
	    <h3>Epuyén</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="elmaiten" data-coords="160, 55">
	    <h3>El Maiten</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="lagopuelo" data-coords="98, 55">
	    <h3>Lago Puelo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7779</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">68,50%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="rawson" data-coords="631, 160">
	    <h3 style="color: #1d149c !important;">Rawson</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">29168</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,45%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="trevelin" data-coords="100, 155">
	    <!-- 1240, 260 -->
	    <h3>Trevelin</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7905</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,55%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	
		</div>
	  <div class="marker" id="esquel" data-coords="135, 135">
	    <h3>Esquel</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">28664</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,71%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
	  <div class="marker" id="trelew" data-coords="615, 138">
	    <h3 style="color: #1d149c !important;">Trelew</h3>
	      <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div></div>
	  <div class="marker" id="madryn" data-coords="635, 105">
	    <h3>Puerto Madryn</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Biedma</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">67150</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,92%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 A "Unidad Ciudadana"</span></div> </div>
	  <div class="marker" id="comodoro" data-coords="425, 340">
	    <h3>Comodoro Rivadavia</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Escalante</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">143391</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,21%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
		<div class="marker" id="elmarisol" data-coords="430, 140">
	    <h3 style="color: #1d149c !important;">El Marisol</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">52</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">53,85%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div> </div>
		</div>
</div>
<!-- //////////////////////// EN MAPA MOBILEEE ///////////////////////////////// -->
<!-- ///////////////// MAPA 2 ////////////////////////////// -->
<div class="maparuli" style="float: left; position: relative;">
<div class="demo3" style="display: none; width: 760px; /*760 */ height: 490px; /*490 */"><img id="mapaprin" src="img/mapaprimerochubut.png" class="imgMap"  />
	  <div class="marker" id="losaltares2" data-coords="345, 200">
	    <h3 style="color: #1d149c !important;">Los Altares 2//</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  
	  	<!--<div class="marker" id="loscajones" data-coords="345, 200" style="display: none;">
	    <h3>Los Altares</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >CAJOOOOOOOON</span></div>
	  </div>-->
	  
	  <div class="marker" id="lasplumas" data-coords="440, 180">
	    <h3 style="color: #1d149c !important;">Las Plumas</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span></div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">574</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">62,20%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="pasodeindios" data-coords="300, 190">
	    <h3 style="color: #1d149c !important;">Paso de Indios</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Paso de Indios</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1584</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,15%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dique" data-coords="505, 170">
	    <h3 style="color: #1d149c !important;">Dique F.A</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">206</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">65,05%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="dejulio" data-coords="525, 160">
	    <h3 style="color: #1d149c !important;">28 de Julio</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">595</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="france" data-coords="545, 160">
	    <h3 style="color: #1d149c !important;">Dolavon</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">2845</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,02%%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="gaiman" data-coords="568, 158">
	    <h3 style="color: #1d149c !important; ">Gaiman</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Gaiman</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">5900</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,27%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="elhoyo" data-coords="115, 65">
	    <h3>El Hoyo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">3667</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,04%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="epuyen" data-coords="130, 75">
	    <h3>Epuyén</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="elmaiten" data-coords="160, 55">
	    <h3>El Maiten</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">1964</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,59%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="lagopuelo" data-coords="93, 55">
	    <h3>Lago Puelo</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Cushamen</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7779</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">68,50%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	  </div>
	  <div class="marker" id="rawson" data-coords="611, 160">
	    <h3 style="color: #1d149c !important;">Rawson</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">29168</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">71,45%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div>
	  </div>
	  <div class="marker" id="trevelin" data-coords="150, 155">
	    <!-- 1240, 260 -->
	    <h3>Trevelin</h3>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">7905</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,55%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div>
	
		</div>
	  <div class="marker" id="esquel" data-coords="180, 115">
	    <h3>Esquel</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Futaleufú</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">28664</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">69,71%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
	  <div class="marker" id="trelew" data-coords="592, 138">
	    <h3 style="color: #1d149c !important;">Trelew</h3>
	      <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Rawson</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">82676</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">74,73%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div></div>
	  <div class="marker" id="madryn" data-coords="615, 105">
	    <h3>Puerto Madryn</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Biedma</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">67150</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,92%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 A "Unidad Ciudadana"</span></div> </div>
	  <div class="marker" id="comodoro" data-coords="425, 340">
	    <h3>Comodoro Rivadavia</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Escalante</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">143391</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">73,21%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " >Lista Ganadora: 501 Z "Federación Peronista"</span></div> </div>
		<div class="marker" id="elmarisol" data-coords="410, 140">
	    <h3 style="color: #1d149c !important;">El Marisol</h3>
	       <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Sec. Electoral</span> <span class="item-count animate-number semi-bold" data-value="2415" data-animation-duration="700">Martires</span> </div>
	    </div>
	    <div class="widget-stats">
	      <div class="wrapperstats"> <span class="item-title">Total de inscriptos</span> <span class="item-count animate-number semi-bold" data-value="751" data-animation-duration="700">52</span> </div>
	    </div>
	    <div class="widget-stats ">
	      <div class="wrapperstats last"> <span class="item-title">Votantes</span> <span class="item-count animate-number semi-bold" data-value="1547" data-animation-duration="700">53,85%</span> </div>
	    </div>
	    <div class="description" style="margin-top:10px"> <span class="text-white mini-description " style="color: #1d149c !important; text-transform: uppercase;" ><strong>Lista Ganadora: 501 H "Primero Chubut"</strong></span></div> </div>
		</div>
</div>
</div>
<!-- //////////END MAPA 2 ///////////////////////////////// -->




</li>
<!-- ///// MENU LATERAL JQUERY GENERAL //////////////////////////////////////////////////-->	

<li class="menulateralgnrl">   
    <div class="menul" id="menulateralgnrl">
        <ul class="boto-gnrl">
            <img src="img/fpvlogo.jpg" style="width: 17%; float: left; margin-left: 6%;" />
            <p class="li-normal" ><strong> &emsp;Precandidatura a Dip. Nacional</strong></p>
       
       
            <li>
                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
                <a href="#" id="listaz" style="margin-left: 20%; color: #2187e7 !important;">Federación Peronista<br/>
            		<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expand ani1"></span><p class="votpor"><strong>32,35%</strong></p><em class="votos"><br><strong>31.737 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
            	</a>
            </li>
            <li>
            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
                <a href="#" id="listah" style="margin-left: 20%; color: #1d149c !Important;">Primero Chubut<br/>
            	<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>21,94%</strong></p><em class="votos2"><br><strong>21.517 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
            	</a>
            </li>
            <li>
            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
                <a href="#" id="listaa" style="margin-left: 20%;">Unidad Ciudadana<br/>
            	<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expanda3 ani3"></span><p class="votpor"><strong>21,84%</strong></p><em class="votos"><br><strong>21.424 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
            	</a>
            </li>
            <li>
            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
                <a href="#" style="margin-left: 20%; color: #000 !Important;">U. Peronista por la Producción y el Trabajo<br/>
            	<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expanda4 ani4"></span><p class="votpor"><strong>12,56%</strong></p><em class="votos"><br><strong>12.322 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
            	</a>
            </li>
            <li>
            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
                <a href="#" style="margin-left: 20%; color: #000 !Important;">Blanca y Celeste<br/>
            	<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>7,60%</strong></p><em class="votos"><br><strong>7.461 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
            	</a>
            </li>
            <li>
            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
                <a href="#" style="margin-left: 20%; color: #000 !Important;">Movimiento Justicia Social<br/>
            	<!--////--------GRAFICO VOTOS /// ------------- ---->
            		<div class="content">
					    	<div class="col">
						        <div id="skill">
							        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>3,68%</strong></p><em class="votos"><br><strong>3.618 Votos</strong></em></div>  
						        </div>
					        </div>
					 </div>		
            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
            	</a>
                <ul>
                    <li><a href="http://www.resolvermatrices.com.ar">Resolver Matrices</a></li>
                    <li><a href="http://www.letrade.org">Letras de Canciones</a></li>
                    <li><a href="http://www.cheatscode.org/">Cheats Code</a></li>
                    <li><a href="http://www.solvingequations.net">Solving equations</a></li>
                </ul>
            </li>
                        
            
        </ul><!--//// -------------------- EN MENU JQUERY GENERAL ///////////////////// -->
                    	
			<!-- ///// MENU LATERAL JQUERY LOCALIDADES //////////////////////////////////////////////////-->
			
	
 			    <!--//// -------------------- MENU JQUERY LOCALIDAES ///////////////////// -->



<li class="boto-loc" id="botonera2loc">  
    <div class="menu2">
                <ul style="width: 100%;">
		            <li class="estilosmenu2">
		                <a href="#" id="comodoror">COMODORO RIVADAVIA</a>
		                <ul style="width: 100%;">
		                   
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani1"></span><p class="votpor"><strong>40,62%</strong></p><em class="votos"><br><strong>16.349 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani7"></span><p class="votpor"><strong>21%</strong></p><em class="votos"><br><strong>8.451 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
							<li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani4"></span><p class="votpor"><strong>18,80%</strong></p><em class="votos"><br><strong>7.568 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->	
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani8"></span><p class="votpor"><strong>10,61%</strong></p><em class="votos2"><br><strong>4.271 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>6,08%</strong></p><em class="votos"><br><strong>2.448 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>2,87%</strong></p><em class="votos"><br><strong>1.158 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="madrynr">PUERTO MADRYN</a>
		                <ul style="width: 100%;">
		                	<li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani3"></span><p class="votpor"><strong>27,36%</strong></p><em class="votos"><br><strong>4.505 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani9"></span><p class="votpor"><strong>26,35%</strong></p><em class="votos"><br><strong>4.339 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani10"></span><p class="votpor"><strong>24,84%</strong></p><em class="votos2"><br><strong>4.089 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani11"></span><p class="votpor"><strong>11,37%</strong></p><em class="votos"><br><strong>1.873 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani12"></span><p class="votpor"><strong>6,48%</strong></p><em class="votos"><br><strong>1.067 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->				            
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani13"></span><p class="votpor"><strong>3,58%</strong></p><em class="votos"><br><strong>590 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="trelewr">TRELEW</a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>41,98%</strong></p><em class="votos2"><br><strong>6.255 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani14"></span><p class="votpor"><strong>19,07%</strong></p><em class="votos"><br><strong>2.842 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani15"></span><p class="votpor"><strong>18,34%</strong></p><em class="votos"><br><strong>2.733 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>7,90%</strong></p><em class="votos"><br><strong>1.191 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            
				            <li class="estilosmenu22">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>6,71%</strong></p><em class="votos"><br><strong>1.001 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                	<li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>5,89%</strong></p><em class="votos"><br><strong>877 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->
				            
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="esquelr">ESQUEL / TREVELIN</a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani1"></span><p class="votpor"><strong>33,57%</strong></p><em class="votos"><br><strong>1.802 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>29,13%</strong></p><em class="votos2"><br><strong>1.564 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani16"></span><p class="votpor"><strong>21,64%</strong></p><em class="votos"><br><strong>1.162 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
							<li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani17"></span><p class="votpor"><strong>7,33%</strong></p><em class="votos"><br><strong>394 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->	
		                    
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>4,88%</strong></p><em class="votos"><br><strong>262 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani18"></span><p class="votpor"><strong>3,43%</strong></p><em class="votos"><br><strong>184 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="rawsonr">RAWSON</a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>30,74%</strong></p><em class="votos2"><br><strong>1.583 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani19"></span><p class="votpor"><strong>29,87%</strong></p><em class="votos"><br><strong>1.538 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani20"></span><p class="votpor"><strong>21,70%</strong></p><em class="votos"><br><strong>1.118 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>8,17%</strong></p><em class="votos"><br><strong>421 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani21"></span><p class="votpor"><strong>5,41%</strong></p><em class="votos"><br><strong>279 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>4,29%</strong></p><em class="votos"><br><strong>211 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                	
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="conglo1r">CONGLOMERADO 1: <br><span style="font-size: 14px; letter-spacing: 1px;">L. PUELO / El HOYO / EPUYEN / EL MAITEN</span></a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani1"></span><p class="votpor"><strong>34,84%</strong></p><em class="votos"><br><strong>1.500 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani22"></span><p class="votpor"><strong>22,53%</strong></p><em class="votos"><br><strong>970 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani23"></span><p class="votpor"><strong>20,44%</strong></p><em class="votos"><br><strong>880 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
								
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani24"></span><p class="votpor"><strong>14,49%</strong></p><em class="votos2"><br><strong>624 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>4,85%</strong></p><em class="votos"><br><strong>209 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>2,83%</strong></p><em class="votos"><br><strong>122 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="conglo2r">CONGLOMERADO 2: <br><span style="font-size: 14px; letter-spacing: 1px;">GAIMAN / DOLAVON / 28 DE JULIO / DIQUE F.A</span></a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>38,83%</strong></p><em class="votos2"><br><strong>605 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani25"></span><p class="votpor"><strong>26,82%</strong></p><em class="votos"><br><strong>418 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				            	<img src="img/uciudadana.png" style="width: 20%; float: left;"/>
				                <div class="ciudadanaunidad">Unidad Ciudadana<br/>
				            	<p class="nomcandi"> Néstor Hourcade - Mabel Del Mármol </p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda3 ani26"></span><p class="votpor"><strong>16,81%</strong></p><em class="votos"><br><strong>262 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>8,66%</strong></p><em class="votos"><br><strong>135 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani27"></span><p class="votpor"><strong>4,81%</strong></p><em class="votos"><br><strong>75 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
										        	<div><span class="expanda4 ani6"></span><p class="votpor"><strong>4,04%</strong></p><em class="votos"><br><strong>63 Votos</strong></em></div>
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>
		            <li class="estilosmenu2">
		                <a href="#" id="conglo3r">CONGLOMERADO 3: <br><span style="font-size: 14px; letter-spacing: 1px;">P. DE INDIOS / LAS PLUMAS / LOS ALTARES</span></a>
		                <ul style="width: 100%;">
		                    <li class="estilosmenu22">
				            	<img src="img/pchubut.png" style="width: 20%; float: left;"/>
				                <div class="chubutprimero">Primero Chubut<br/>
				            	<p class="nomcandi">Héctor R. González - María  "Mary" Cativa</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda2 ani2"></span><p class="votpor"><strong>42,59%</strong></p><em class="votos2"><br><strong>184 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    <li class="estilosmenu22">
				                <img src="img/fperonista.png" style="width: 20%; float: left;"/>
				                <div class="peronistafede">Federación Peronista<br/>
				                	<p class="nomcandi">José Ricardo Fueyo - Silvia Pecci</p>
				            		<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expand ani28"></span><p class="votpor"><strong>24,07%</strong></p><em class="votos"><br><strong>104 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                    
				            <li class="estilosmenu22">
				            	<img src="img/blanca.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Blanca y Celeste<br/>
				            	<p class="nomcandi">Miguel "Cone" Diaz - Angela Arrieta Y.</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani5"></span><p class="votpor"><strong>6,94%</strong></p><em class="votos"><br><strong>30 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22">
				            	<img src="img/uperonista.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Unidad Peronista por la Prod. y el Trabajo<br/>
				                <p class="nomcandi">Leandro  Moyano - Karina Lirio</p>
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani29"></span><p class="votpor"><strong>3,93</strong></p><em class="votos"><br><strong>17 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>			                
				            </li><!-- CIERRE ESTILO 22 -->
				            <li class="estilosmenu22" style="border: none !important;">
				            	<img src="img/mjusticia.png" style="width: 20%; float: left;"/>
				                <div style="margin-left: 23%; text-transform: uppercase;">Movimiento Justicia Social<br/>
				                <p class="nomcandi">"Pichón" Elías - Debora del Valle</p>	
				            	<!--////--------GRAFICO VOTOS /// ------------- ---->
				            		<div class="content">
									    	<div class="col">
										        <div id="skill">
											        <div><span class="expanda4 ani6"></span><p class="votpor"><strong>3,24%</strong></p><em class="votos"><br><strong>14 Votos</strong></em></div>  
										        </div>
									        </div>
									 </div>		
				            		<!--////-------END-GRAFICO VOTOS /// ------------- ---->	
				            	</div>
				            </li><!-- CIERRE ESTILO 22 -->
		                </ul>
		            </li>            
        </ul>
    </div>
</li>
</ul>
<div class="linea-mapa-abajo"><p class="sistemadev" style="font-size: 9px; margin-left: 6%; margin-top: -1.4%;">Sistema de Visualización online interactivo. Paso 2017</p></div>

<!--<div class="controls"> <a href="#" rel="loscajones" id="loscajones">losaltares</a> <a href="#" rel="russia">Russia</a> <a href="#" rel="argentina">Argentina</a> <a href="#" rel="australia">Australia</a> <a href="#" rel="usa">USA</a> </div>-->

<!--<div class="filtro-bus"><a class="botonparti" href="#" id="feperon">FEDERACION PERONISTA //</a>  
	<a class="botonparti" href="#" id="mostrarloc"> PRIMERO CHUBUT //</a><a class="botonparti" href="#" id="mostrarloc"> UNION CIUDADANA</a></p></div>-->	

<div class="filtro-bus2"><a href="xls/FPV-PASO-2017.xlsx" ><img src="img/excel.png" alt="logo excel"  style="width: 2%; vertical-align: middle;" /> DESCARGAR EXCEL (.XLS) </a>  
	<a href="#" id="cmd" style="margin-left: 3%;"><img src="img/pdf.png" alt="logo pdf" style="width: 2%; vertical-align: middle;" /> DESCARGAR PDF</a></p></div>


<!-- END CONTENIDO MAPA HTML APARTE ///////////////////////////////////////////////-->



</body>
</html>
