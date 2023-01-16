      <?php /*if (isset($_POST['nom']) && isset($_POST['pass'])) {
            //echo "<h1>Bienvenue " . $_POST['nom'] . ", sur le site !</h1>";
      } ?>*/


      
      if (isset($_POST['nom'])) {
            echo "<h1>Bienvenue " . $_POST['nom'] . " !</h1>";
            echo "<p>Votre message : " . $_POST['msg'] . "</p>";
            echo "<p>Votre langue : " . $_POST['lang'] . "</p>";
            $prefs = $_POST['pref'];
            echo "<p>Vos préférences : " . implode(" ", $prefs) . "</p>";
      }
      ?>