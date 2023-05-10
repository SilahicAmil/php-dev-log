<?php
$conn = require "includes/db.php";
require "classes/LogArticle.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$all_logs = LogArticle::getAllDevLogs($conn);

?>

<?php require "includes/header.php" ?>
<div class="index-wrapper">
    <div class="left-sidebar-menu" id="left-sidebar-menu">
        <img src="images/updated-profile.png" alt="Headshot Photo" class="left-sidebar-img">
        <div class="left-sidebar-menu-info">
            <h2>Amil Silahic</h2>
            <span>Web Developer</span>
        </div>
        <p id="sidebar-menu-hidden-text" class="fs-6 w-75 text-center">I am a Software Engineer / Web Developer. Check
            out some
            of my ramblings!</p>
        <button id="change-css-button" class="btn btn-primary">Show More</button>
    </div>
    <div class="article-container">
        <?php foreach ($all_logs as $article) : ?>
            <article class="index-article">
                <h2><a href="dev_log.php?id=<?= $article["id"] ?>"><?= $article["title"] ?></a></h2>
                <span><?= $article["published_at"] ?></span>
                <p><?= $article["content"] ?></p>
            </article>

        <?php endforeach; ?>
    </div>
</div>

<?php require "includes/footer.php" ?>