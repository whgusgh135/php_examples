<?php

    class Post {
        // PDO Variables
        private $pdo;

        // Post Table Column
        public $id;
        public $title;
        public $body;
        public $author;
        public $created_at;

        // Constructor
        public function __construct($pdo) {
            $this->pdo = $pdo;
        }


        // Read All Posts Controller
        public function read() {
            // Create query
            $query = 'SELECT * FROM posts ORDER BY created_at DESC';

            // Prepare statement
            $stmt = $this->pdo->prepare($query);

            // Execute query
            $stmt->execute();

            return $stmt;
        }


        // Read Single Post Controller
        public function read_single() {
            // Create query
            $query = 'SELECT * FROM posts WHERE id = :id';

            // Prepare statement
            $stmt = $this->pdo->prepare($query);

            // Bind id
            $stmt->bindParam(':id', $this->id);

            // Execute query
            $stmt->execute();

            // Bind id && Execute query in one step
            // $stmt->execute([':id' => $this->id]);

            return $stmt;
        }


        // Create Post Controller
        public function create() {
            // Create query
            $query = 'INSERT INTO posts ' . 'SET
                    title = :title,
                    body = :body,
                    author = :author';

            // Prepare statement
            $stmt = $this->pdo->prepare($query);

            // Clean data
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->body = htmlspecialchars(strip_tags($this->body));
            $this->author = htmlspecialchars(strip_tags($this->author));

            // Bind data
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':body', $this->body);
            $stmt->bindParam(':author', $this->author);

            // Execute query
            if($stmt->execute()) {
                return true;
            } else {
                printf("Error: %s.\n", $stmt->error);
                return false;
            }
        }


        // Update Post Controller
        public function update() {
            // Create query
            $query = 'UPDATE posts 
                SET 
                    title = :title,
                    body = :body,
                    author = :author 
                WHERE
                    id = :id';

            // Prepare statement
            $stmt = $this->pdo->prepare($query);

            // Clean data
            $this->title = htmlspecialchars(strip_tags($this->title));
            $this->body = htmlspecialchars(strip_tags($this->body));
            $this->author = htmlspecialchars(strip_tags($this->author));
            $this->id = htmlspecialchars(strip_tags($this->id));

            // Bind data
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':body', $this->body);
            $stmt->bindParam(':author', $this->author);
            $stmt->bindParam(':id', $this->id);

            // Execute query
            if($stmt->execute()) {
                return true;
            } else {
                printf("Error: %s.\n", $stmt->error);
                return false;
            }
        }


        // Delete Post Controller
        public function delete() {
            // Create query
            $query = 'DELETE FROM posts WHERE id = :id';

            // Prepare statement
            $stmt = $this->pdo->prepare($query);

            // Clean data
            $this->id = htmlspecialchars(strip_tags($this->id));

            // Bind data
            $stmt->bindParam(':id', $this->id);

            // Execute query
            if($stmt->execute()) {
                return true;
            } else {
                printf("Error: %s.\n", $stmt->error);
                return false;
            }
        }
    }

?>