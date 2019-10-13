<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript" src="../js/ValidateFieldsQuestion.js"></script>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <h3>Propón una pregunta</h3>

      <p><span class="error">* Campo obligatorio</span></p>

      <form id="fquestion" name="fquestion" action="AddQuestion.php" method="POST">
        <br>
        E-mail: <input id ="em" type="text" name="email" size="25">
        <span class="error">* </span>
        <br><br>
        Pregunta: <br><input type="text" name="website" size="75">
        <span class="error">*</span>
        <br><br>
        Respuesta correcta: <br><input type="text" name="respc" size="75">
        <span class="error">*</span>  
        <br><br>
        Respuesta incorrecta 1: <br><input type="text" name="resp1" size="75">
        <span class="error">*</span>
        <br><br>
        Respuesta incorrecta 2: <br><input type="text" name="resp2" size="75">
        <span class="error">*</span>
        <br><br>
        Respuesta incorrecta 3: <br><input type="text" name="resp3" size="75">
        <span class="error">*</span>
        <br><br>
        Temática de la pregunta: <br><input type="text" name="tema" size="75">
        <span class="error">*</span>
        <br><br>       
        Complejidad de la pregunta :
        <select name= "nivel" id= "nivel" >
          <option value="1">Baja</option>
          <option value="2">Media</option>
          <option value="3">Alta</option>
        </select>  
        <span class="error">* </span>
        <br><br>  
        
 
        <input type="submit" name="submit" value="Submit">
     
        <br><br>  


      </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
