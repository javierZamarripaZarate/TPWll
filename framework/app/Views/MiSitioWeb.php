<html>
	<head>
		<title>Mi sitio web</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:1000px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#33B3FF;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>

		<div id="header">
		<left><h1>Javier Zamarripa Zarate</h1></left><br>
			<ul class="nav">
                
				<li><a href="cv">CV</a></li>

				<li><a href="proyecto">Proyecto academico</a></li>

				<li><a href="intereses">Intereses</a></li>

				<li><a href="datosPersonales">Datos Personales</a></li>			
				
		    </ul>
		    <br><br><br>
		    <img src="/escuela.jpg" width="455" height="250">
		</div>
	</body>
</html>