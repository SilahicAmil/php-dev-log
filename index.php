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
<div class="container-fluid">
    <div class="mb-5 mt-5 bg-dark text-white rounded">
        <div class="d-flex-col">

            <h2 class="fs-1 text-center">Amil Silahic</h2>
            <p class="fs-4 text-center">SWE / Web Developer</p>

            <p id="sidebar-menu-hidden-text" class="fs-5 text-center">I am a Software Engineer / Web Developer.
                Check
                out some
                of my ramblings!</p>
        </div>


    </div>
    <div class="row">

        <?php foreach ($all_logs as $article) : ?>
            <article class="col">
                <h2><a href="dev_log.php?id=<?= $article["id"] ?>"><?= $article["title"] ?></a></h2>
                <?php if ($article["published_at"] == null) : ?>
                    <p>Unknown Published Date</p>
                <?php else : ?>
                    <span><?= $article["published_at"] ?></span>
                <?php endif; ?>


            </article>
        <?php endforeach; ?>

    </div>
</div>

<?php require "includes/footer.php"; ?>