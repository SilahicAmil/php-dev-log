<?php

$conn = require "includes/db.php";
require "classes/LogArticle.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET["id"])) {
    $article = LogArticle::getDevLogFromID($conn, $_GET["id"]);

    if ($article) {
        $id = $article->id;
    } else {
        die("No Article Found");
    }
} else {
    die("Please Supply an ID");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($article->deleteDevLogArticle($conn)) {
        header("Location: index.php");
    }
}

?>

<?php require "includes/header.php"; ?>
<form method="POST">
    <button>Delete Log</button>
</form>
<?php require "includes/footer.php"; ?>