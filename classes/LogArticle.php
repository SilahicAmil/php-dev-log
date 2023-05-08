<?php

/**
 * Log Article
 * 
 * Get information for dev log articles
 */
class LogArticle
{
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

    // update article method
}