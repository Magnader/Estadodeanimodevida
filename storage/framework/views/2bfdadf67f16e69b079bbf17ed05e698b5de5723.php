<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
</head>

<body>
	<header>
		<div class="logo">
		<img src="Imagenes/Log.jpg" width="100px" height="100px" alt="">
		</div>

		<h1 class="Titulo">Estado de Animo de Vida</h1>
	<button>Registrarse</button>
	<button>Iniciar sesión</button>
	<div>
	<ul class="nav">
		<li><a href="<?php echo e(route('home')); ?>"> Inicio</a></li>
		<li><a href="<?php echo e(route('mat')); ?>"> Material</a></li>
		<li><a href="<?php echo e(route('acde')); ?>"> Acerca de...</a></li>

	</ul>
	</div>
	<br></br>
    </header>

	<div>
		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<br></br>
<footer>El equipo más depresivo </footer>


<style>
	*{
		padding: 0px;
		margin: 0px;
	}


	.Titulo{
    color: black;
    font-family: cursive;
    padding-left: 33%;
	}

	 article{
	 	color: black;
	 	background-color: white;
	 	padding: 20px;
	 	margin: 30px;

	 }

	 .intro {
	 	margin: 30px;
	 }

    body{
	background-color: whitesmoke;
	margin: 80px;
    }

  footer{
  	background-color: skyblue;
  	padding: 3px;
  }  
  
  .nav{
	background-color: skyblue;
    margin:0;
    padding: 0;
    width: 100%;


  }
  .nav li{
	font-family: sans-serif;
    display: inline-block;
  }

  .nav li a{
    padding: 10px 20px;
    color: white;
    display: block;
    text-decoration: none;
  }


</style>


</body>
</html><?php /**PATH C:\laragon\www\Proyecto\resources\views/layout.blade.php ENDPATH**/ ?>