<?php session_start();

define('LOGIN', 'Romain');
$message = 'Bienvenue';
if (!empty($_POST)) {
  echo "empty post";
  if (empty($_POST['login'])) {

    echo "empty post login";
    $message = 'Indiquer votre login';
  } elseif ($_POST['login'] !== LOGIN) {
    $message = 'Login Erreur ';
  } else {
    $message = 'Bienvenue ' . LOGIN . ' !';
  }
}
?>

<head>
  <title>Formulaire d'identification</title>
</head>

<body>

  <?php if (!empty($message)) : ?>
    <p><?php echo $message; ?></p>
  <?php endif; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    <fieldset>
      <legend>Identifiant</legend>
      <p>
        <label for="login">Login :</label>
        <input type="text" name="login" id="login" value="<?php if (!empty($_POST['login'])) {
                                                            echo htmlspecialchars($_POST['login'], ENT_QUOTES);
                                                          } ?>" />
      </p>
      <p>
        <input type="submit" name="submit" value="Identification" />
      </p>
    </fieldset>
  </form>
  <xmp>
    <php session_start(); define('LOGIN','Romain'); $message='Bienvenue' ; if(!empty($_POST)) { echo "empty post" ; if(empty($_POST['login'])) { echo "empty post login" ; $message='Indiquer votre login' ; } elseif($_POST['login'] !==LOGIN) { $message='Login Erreur ' ; } else { $message='Bienvenue ' . LOGIN .' !'; } } ?>

      <head>
        <title>Formulaire d'identification</title>
      </head>

      <body>

        <php if(!empty($message)) : ?>
          <p><?php echo $message; ?></p>
          <php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
              <fieldset>
                <legend>Identifiant</legend>
                <p>
                  <label for="login">Login :</label>
                  <input type="text" name="login" id="login" value="<?php if (!empty($_POST['login'])) {
                                                                      echo htmlspecialchars($_POST['login'], ENT_QUOTES);
                                                                    } ?>" />
                </p>
                <p>
                  <input type="submit" name="submit" value="Identification" />
                </p>
              </fieldset>
            </form>
  </xmp>
  <br> <a href="/ProjetBTS/Flemal/Web/index.php">Retour</a>
</body>

</html>