<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript" src="../js/ValidateFieldsQuestion.js"></script>
  <script type="text/javascript" src="../js/ShowImageInForm.js"></script>

  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <h3>Propón una pregunta</h3>

      <p><span class="error">* Campo obligatorio</span></p>

      <form id="fquestion" name="fquestion" action="AddQuestionWithImage.php">
        <br>
        E-mail: <input id ="em" type="text" name="email" size="25">
        <span class="error">* </span>
        <br>
        Pregunta: <br><input type="text" name="website" size="75">
        <span class="error">*</span>
        <br>
        Respuesta correcta: <br><input type="text" name="resp" size="75">
        <span class="error">*</span>  
        <br>
        Respuesta incorrecta 1: <br><input type="text" name="resp" size="75">
        <span class="error">*</span>
        <br>
        Respuesta incorrecta 2: <br><input type="text" name="resp" size="75">
        <span class="error">*</span>
        <br>
        Respuesta incorrecta 3: <br><input type="text" name="resp" size="75">
        <span class="error">*</span>
        <br>
        Temática de la pregunta: <br><input type="text" name="tema" size="75">
        <span class="error">*</span>
        <br>      
        Complejidad de la pregunta :
        <select name= "nivel" id= "nivel" >
          <option value="1">Baja</option>
          <option value="2">Media</option>
          <option value="3">Alta</option>
        </select>  
        <span class="error">* </span>
        <br><br>  
        
        <input type="file" name="my_file" id="my-file">  <input type="submit" name="submit" value="Submit">
        <div id ="foto" class = "fotoo"><img id="ftt" src="" alt="your image" onerror="this.style.visibility='hidden'" height="140" width="150"/></div>
        <br><br>  

       
        <br><br>  
        <br><br>  


      </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
