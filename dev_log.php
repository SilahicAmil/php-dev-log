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



// and display under post w/ styling

$comments_url = "https://dummyjson.com/comments";

$comments_contents =  file_get_contents($comments_url);

$decoded_json = json_decode($comments_contents, true);


$article_url = "https://dummyjson.com/posts";

$article_contents = file_get_contents($article_url);

$decoded_article = json_decode($article_contents, true);


?>

<?php require "includes/header.php" ?>
<?php if ($article) : ?>
    <div class="container">
        <article>
            <!-- -> is used for objects. since from getDevLogFromID we use PDO::CLASS we can use it here 
        instead of the assoc array -->
            <h2><?= htmlspecialchars($article->title ?? "") ?></h2>
            <p><?= htmlspecialchars($article->content ?? "") ?></p>
            <h2>Description</h2>
            <?php foreach ($decoded_article["posts"] as $val) : ?>
                <?php if ($val["id"] == $article->id) : ?>
                    <p class="fs-4 mt-4"></p><?= $val["body"] ?></p>
                <?php endif; ?>
            <?php endforeach; ?>
            <p id="show-more-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sit tempore repellat
                molestias, earum
                quidem qui voluptatem commodi quisquam. Nostrum, quos beatae pariatur vero voluptate perferendis corporis
                tenetur quisquam repudiandae.</p>
            <a href="delete_log.php?id=<?= $article->id ?>"><button class="btn btn-primary">Delete Log</button></a>
            <button id="show-more-content" class="btn btn-primary">Show More</button>
        </article>
        <h3 class="mt-4">Comments</h3>
        <?php foreach ($decoded_json["comments"] as $val) : ?>
            <?php if ($val["id"] == $article->id) : ?>
                <p class="fs-4 mt-4"></p><?= $val["user"]["username"] . ": " . $val["body"] ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p>No Article Found! :(</p>
<?php endif; ?>
<?php require "includes/footer.php" ?>