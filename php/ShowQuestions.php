<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      Código PHP para mostrar una tabla con las preguntas de la BD.<br>
      La tabla no incluye las imágenes

      <?php
        require_once('DbConfig.php');
        $conexion = mysqli_connect($server, $user, $pass, $basededatos);
        $sql = "SELECT * FROM preguntas";
        $result = $conexion->query($sql);

        echo "<table> <tr> <th>Autor</th> <th>Enunciado</th> <th>Respuesta</th> </tr>"

        while($row = $result->fetch_assoc()){
          echo "<tr> <td>".$row['email']."</td> <td>".$row['pregunta']."</td> <td>".$row['correcta']."</td> </tr>";
        }
        echo "</table>";

        $conexion->close();
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
