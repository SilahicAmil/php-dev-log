<?php
$conn = require "includes/db.php";
require "classes/LogArticle.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["id"])) {
    $article = LogArticle::getDevLogFromID($conn, $_GET["id"]);
} else {
    $article = null;
}



?>

<?php require "includes/header.php" ?>
<?php if ($article) : ?>
    <div class="article-container">
        <article>
            <h2><?= htmlspecialchars($article->title ?? "") ?></h2>
            <p><?= htmlspecialchars($article->content ?? "") ?></p>
            <p id="show-more-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sit tempore repellat
                molestias, earum
                quidem qui voluptatem commodi quisquam. Nostrum, quos beatae pariatur vero voluptate perferendis corporis
                tenetur quisquam repudiandae.</p>
        </article>
        <button id="show-more-content">Toggle More</button>
    </div>
<?php else : ?>
    <p>No Article Found! :(</p>
<?php endif; ?>
<?php require "includes/footer.php" ?>