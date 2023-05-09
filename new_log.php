<?php
require "classes/LogArticle.php";
$conn = require "includes/db.php";

// have to use these since my ini is messed up
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$article = new LogArticle();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // this is like when using useRef in react to
    // set values for the form
    $article->title = $_POST["title"];
    $article->content = $_POST["content"];
    $article->published_at = $_POST["published_at"];

    if ($article->createDevLogArticle($conn)) {
        // this should also redirect back to index.php when created
        header("Location: index.php");
    }
}

?>

<?php require "includes/header.php" ?>

<form method="POST">
    <div>
        <label for="title">Title</label>
        <!-- name is key here for getting value (equivalent to ref={} in react) -->
        <input type="text" name="title" id="title" placeholder="Article Title" value="<?= htmlspecialchars($article->title ?? "") ?>">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Article Content"><?= htmlspecialchars($article->content ?? "") ?></textarea>
    </div>

    <div>
        <label for="published_at">Published At</label>
        <input type="datetime-local" name="published_at" id="published_at" value="<?= htmlspecialchars($article->published_at ?? "") ?>">
    </div>
    <button>Save</button>
</form>

<?php require "includes/footer.php" ?>