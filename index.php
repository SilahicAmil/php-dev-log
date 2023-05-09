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
<a href="new_log.php">New Dev Log Article</a>
<div class="index-wrapper">
    <div class="left-sidebar-menu">
        <img src="images/updated-profile.png" alt="Headshot Photo" class="sidebar-img">
        <div>
            <h2>Amil Silahic</h2>
            <p>Web Developer</p>
        </div>
    </div>
    <div class="article-container">
        <?php foreach ($all_logs as $article) : ?>
            <article class="index-article">
                <h2><a href="devlog.php?id=<?= $article["id"] ?>"><?= $article["title"] ?></a></h2>
                <span><?= $article["published_at"] ?></span>
                <p><?= $article["content"] ?></p>
            </article>

        <?php endforeach; ?>
    </div>
</div>

<?php require "includes/footer.php" ?>