<?php

    // Set Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    // Import PDO && Post Model
    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    // Instantiate DB && PDO object
    $database = new Database();
    $pdo = $database->connect();

    // Instantiate Post object
    $post = new Post($pdo);

    // Result from Post SELECT Query
    $result = $post->read();

    if($result) {
        $posts_arr = array();

        // Loop through table rows and convert into array
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $post_item = array(
                'id' => $id,
                'title' => $title,
                'body' => $body,
                'author' => $author,
                'created_at' => $created_at
            );

            array_push($posts_arr, $post_item);
        }

        // Turn Array into JSON
        echo json_encode($posts_arr);
    } else {
        // No Posts
        echo json_encode(['message' => 'No Post Found']);
    }

?>