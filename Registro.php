<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="3">
	<title>Registrar</title>
	<!---->
	<!---->
    <link rel="stylesheet" type="text/css" href="registro.css">

</head>
<body>


	<style type="text/css">

/*#menu*/ *{
margin: 0px;
padding: 0px;
list-style-type: none;
-webkit-box-sizing: border-box; /*prefijo para safary y google Chrome*/
-moz-box-sizing: border-box; /*Firefox*/
-o-box-sizing: border-box; /*Opera*/
-ms-box-sizing: border-box; /*Internet Explorer*/
box-sizing: border-box;

}

body {
	/* */
    width: 100%;
    max-width: 100%;
	background-repeat: no-repeat; /*Para que no se repita la imagen*/
	background-attachment: fixed; /*Para que la imagen quede fija*/
	background-size: cover;


}

#menu a, #menu a:visited{

display:none;
font-size: 15px;
line-height: 16px;
color: #FFFFFF;
background-color: #0D4F70;
display: block;
/*margin-right: 4px;*/
float: left;
text-align: center;
padding: 35px 109px;
text-decoration: none;
}

#menu a:hover {
color: #39B8CB;
/*background-color: #F90;*/
}

#menu .actual {
color: #333;
background-color: #FFF;
border-bottom-width: 4px;
border-bottom-style: solid;
border-bottom-color: #666;
}

header nav ul li a{

	color: #155A04;
	background: rgba(0,0,0,0.53);
	transition: 0.8s all ease;
	
}

    </style>

    <header>
          <nav>
   	
            <ul id="menu">

                <li><a href="index.html">Inicio</a> </li>
                <li><a href="estudiantes.php">Estudiantes</a></li>
                <li><a href="administrador.php">Administrador</a></li>
                <li><a href="informacion.php">Informacion</a></li>
                <li><a href="contacto.php">Contacto</a></li>
    
            </ul>

          </nav>
    </header> <br><br><br><br><br>

	<form action="Registro.php" method="post" name="form">

		<center> <h1><p>Registro</p></h1> </center><br>

		<label for="nombre" >Ingrese su Nombre:</label>
		<input type="text" id="nombre" placeholder="Nombre" name="Nombre">

		<label for="apellido" >Ingrese su Apellido:</label>
		<input type="text" id="apellido" placeholder="Apellido" name="Apellido">

		<label for="cedula" >Cédula de indentidad:</label>
		<input type="number" id="cedula" placeholder="Sin guiones, ni puntos (ej: 20950429)" name="Cedula">

		<label for="correo" >Ingrese su Correo:</label>
		<input type="emai" id="correo" placeholder="Correo electrónico" name="Correo">

		<label for="password" >Ingrese su Contraseña:</label>
		<input type="password" id="password" placeholder="Contraseña" name="Contraseña">

		<label for="passwordconf">Confirme su Contraseña Nuevamente:</label>
		<input type="password" name="passwordconf" placeholder="Contraseña Nuevamente" name="Contraseña Nuevamente">

		<br>

		<div class="Regis"><a href="index.html"><p align="right"><input type="submit"  value="Registrar"></p> </a></div><!--Texto o botones a la derecha-->

	
	</form>

</body>
</html>
