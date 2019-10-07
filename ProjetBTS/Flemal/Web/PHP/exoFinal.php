<?php
  
  define('LOGIN','Ohazzar');  
  define('PASSWORD','azertyuiop'); 
  $message = 'Bienvenue';    
  if(!empty($_POST))
  {  
    echo "empty post";
    if(empty($_POST['login']))
    {

      echo "empty post login";
      $message = 'Indiquer votre login';
    }
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Indiquer votre mot de passe';
    }   
      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Login erreur ';
    }  
      elseif($_POST['motDePasse'] !== PASSWORD)
    {
      $message = 'Mot de passe non valide';
    }
      else
    {    
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>

    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
      <fieldset>
        <legend>Identifiant</legend>
          <p>
            <label for="login">Login :</label> 
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p>
          <p>
            <label for="password">Mot de passe :</label> 
            <input type="password" name="motDePasse" id="password" value="" /> 
            <input type="submit" name="submit" value="Identification" />
          </p>
      </fieldset>
    </form>
    <br> <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a> 
  </body>
</html>