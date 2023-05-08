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
<div>
    <article>
        <h2>This is the title</h2>
        <p>This is the content</p>
    </article>

    <article>
        <h2><?= $results["title"] ?></h2>
    </article>
</div>
<?php require "includes/footer.php" ?>