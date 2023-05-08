<?php
$conn = require "includes/db.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$sql = "SELECT * FROM logs ORDER BY published_at";

$query = $conn->query($sql);





$results = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);


?>

<?php require "includes/header.php" ?>
<div id="article-container">
    <?php foreach ($results as $article) : ?>
        <article>
            <h2><?= $article["title"] ?></h2>
            <span><?= $article["published_at"] ?></span>
            <p><?= $article["content"] ?></p>
        </article>
    <?php endforeach; ?>
</div>
</div>
<?php require "includes/footer.php" ?>