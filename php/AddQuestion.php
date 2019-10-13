<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

			Código PHP para añadir una pregunta sin imagen
      <?php 
        require_once('DbConfig.php');
        $conexion = mysqli_connect($server, $user, $pass, $basededatos);
        
        $email = $_POST['email'];
        $pregunta = $_POST['website'];
        $respc = $_POST['respc'];
        $resp1 = $_POST['resp1'];
        $resp2 = $_POST['resp2'];
        $resp3 = $_POST['resp3'];
        $tema = $_POST['tema'];
        $complejidad = $_POST['nivel'];

        echo "$email <br>";
        echo "$pregunta <br>";
        echo "$respc <br>";
        echo "$resp1 <br>";
        echo "$resp2 <br>";
        echo "$resp3 <br>";
        echo "$tema <br>";
        echo "$complejidad <br>";      
        
        $sql = "INSERT INTO preguntas(email, pregunta, correcta, incorrecta1, incorrecta2, incorrecta3, tematica, complejidad) 
                VALUES('$email', '$pregunta', '$respc', '$resp1', '$resp2', '$resp3', '$tema', '$complejidad')";

        if($conexion->query($sql) === TRUE){
          echo "FUNCIONA LOCOOOOOOOO";
          echo "<p><a href='ShowQuestions.php'>Pulsa para ver las preguntas</a></p>";
        } else {
          echo "Error, algo salio mal loco";
        }

        $conexion->close();
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
