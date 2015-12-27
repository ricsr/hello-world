<?php 
$title = "Login";
$content = '<form method="post" action='
        .htmlspecialchars($_SERVER["PHP_SELF"]).
        ' class="Text">
        <p>Username : <input type="text" name="login" value="" placeholder="Username"></p>
        <p>Password : <input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>';
        
include_once("./Model/UserModel.php");
$model = new UserModel();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $model->setUser($_POST["login"], $_POST["password"]);
    $b = $model->verifyUser();  
    $content = '<div class="Text">'.$b.'</div>';
}
include_once './Template.php';
?>