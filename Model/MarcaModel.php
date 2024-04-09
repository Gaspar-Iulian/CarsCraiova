<?php 
class MarcaModel {
    // Properties
    private $pdo;

    // Constructor
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Method to display person's information
    public function getAllFromMarca() {
        // Prepare the SQL query
        $stmt = $this->pdo->prepare("SELECT * FROM marca");
        // Execute the query
        $stmt->execute();
        // Fetch the results (fetch as an associative array)
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Output the results
        $rows = [];
        foreach ($results as $row) {
            // Process each row
            $rows[] = $row;
        }
        return $rows;
    }
}
?>