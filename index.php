<?php
$conn = require "includes/db.php";
require "classes/LogArticle.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$all_logs = LogArticle::getAllDevLogs($conn);

var_dump($all_logs);

?>

<?php require "includes/header.php" ?>
<div>
    <a href="new_log.php">New Dev Log Article</a>
    <h2 id="hide">Hidden Text</h2>
    <button id="hide-content">Hide Text</button>
</div>

<?php foreach ($all_logs as $article) : ?>

    <article id="article">
        <h2><?= $article["title"] ?></h2>
        <span><?= $article["published_at"] ?></span>
        <p><?= $article["content"] ?></p>

    </article>

<?php endforeach; ?>


<?php require "includes/footer.php" ?>