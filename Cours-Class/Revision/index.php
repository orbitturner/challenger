<?php
    include 'entete.php';
?>
</br>
    <form action="testconnexion.php" method="post">
      <div class="form-group">
        <label for="pseudo">LOGIN : </label>
        <input type="login" class="form-control" id="pseudo" name="login" aria-describedby="loginhelp" placeholder="Enter Login">
        <small id="loginhelp" class="form-text text-success"><b>We'll never share your Login with anyone else.</b></small>
      </div>
      <div class="form-group">
        <label for="InputPassword1">Password</label>
        <input type="password" class="form-control" name="pass" id="InputPassword1" placeholder="Password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Termes de Confidentialité. 💖📜🔥🤷‍</label>
      </div>
      <button type="submit" class="btn btn-primary">✔Submit✔</button>
    </form>
<!-- <form action="testconnexion.php" method="post">
    <pre>
        LOGIN:             <input type="text" name="login" required>
        MOT DE PASSE:      <input type="password" name="pass" required>
                    <input type="submit" value="SE CONNECTER">
    </pre>

</form> -->

<?php
// var_dump($_GET['log']); die();
 if(isset($_GET['log'])){
    if($_GET['log'] == 'ok'){
        // echo "CONNEXION REUSSI !";
    }else {
        echo "<font color=\"RED\"><b>IDENTIFIANT INVALIDE!</b></font>";
    }
}
?>