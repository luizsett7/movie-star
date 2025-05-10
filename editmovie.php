<?php
require_once("templates/header.php");

require_once("models/User.php");
require_once("dao/UserDAO.php");
require_once("dao/movieDAO.php");

$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

$movieDao = new MovieDAO($conn, $BASE_URL);

if (empty($id)) {
    $message->setMessage("O filme não foi encontrado", "error", "index");
} else {
    $movie = $movieDao->findById($id);

    if (!$movie) {
        $message->setMessage("O filme não foi encontrado", "error", "index");
    }
}
?>
<div id="main-container" class="container-fluid">

</div>
<?php
require_once("templates/footer.php");
?>