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
<!-- should only be visible if logged in -->
<a href="new_log.php">New Dev Log Article</a>
<div class="index-wrapper">
    <div class="left-sidebar-menu" id="left-sidebar-menu">
        <img src="images/updated-profile.png" alt="Headshot Photo" class="left-sidebar-img">
        <div class="left-sidebar-menu-info">
            <h2>Amil Silahic</h2>
            <span>Web Developer</span>
        </div>
        <p id="sidebar-menu-hidden-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat expedita ex
            nihil totam eveniet veniam
            adipisci, culpa pariatur eius explicabo perferendis atque dolore nisi eaque tenetur rerum asperiores earum
            illo!</p>
        <button id="change-css-button">Show More</button>
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