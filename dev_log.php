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


// fetch comments from an api dummyjson
// and display under post w/ styling

?>

<?php require "includes/header.php" ?>
<?php if ($article) : ?>
    <div class="container">
        <article>
            <!-- -> is used for objects. since from getDevLogFromID we use PDO::CLASS we can use it here 
        instead of the assoc array -->
            <h2><?= htmlspecialchars($article->title ?? "") ?></h2>
            <p><?= htmlspecialchars($article->content ?? "") ?></p>
            <p id="show-more-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sit tempore repellat
                molestias, earum
                quidem qui voluptatem commodi quisquam. Nostrum, quos beatae pariatur vero voluptate perferendis corporis
                tenetur quisquam repudiandae.</p>
            <a href="delete_log.php?id=<?= $article->id ?>"><button class="btn btn-primary">Delete Log</button></a>
            <button id="show-more-content" class="btn btn-primary">Toggle More</button>
        </article>


    </div>
<?php else : ?>
    <p>No Article Found! :(</p>
<?php endif; ?>
<?php require "includes/footer.php" ?>