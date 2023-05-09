<?php

/**
 * Log Article
 * 
 * Get information for dev log articles
 */
class LogArticle
{
    public $id;
    public $title;
    public $content;
    public $published_at;

    /** 
     * Fetch all Dev Logs
     * 
     * @param object $conn Connection object to the DB
     * 
     * @return array An Assoc Array of all Dev Logs
     */
    public static function getAllDevLogs(object $conn): array
    {
        $sql = "SELECT * FROM logs ORDER BY published_at";

        $query = $conn->query($sql);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // get specific article on id method (ArticleDetails Page)

    // validate article method (protected method)

    // create article method
    public function createDevLogArticle(object $conn): bool
    {
        // KEY POINT TO REMEMBER
        // FOR PREPARED STATEMENTS
        // STEPS ARE
        // 1. PREPARE THE STATEMTN
        // 2. BIND THE VALUES
        // 3. EXECUTE

        $sql = "INSERT INTO logs (title, content, published_at)
                 VALUES (:title, :content, :published_at)";
        // prepare
        $stmt = $conn->prepare($sql);
        // bind
        $stmt->bindValue(":title", $this->title, PDO::PARAM_STR);
        $stmt->bindValue(":content", $this->content, PDO::PARAM_STR);


        if ($this->published_at == '') {
            $stmt->bindValue(":published_at", null, PDO::PARAM_NULL);
        } else {
            $stmt->bindValue(":published_at", $this->published_at, PDO::PARAM_STR);
        }

        // execute
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // update article method
}
