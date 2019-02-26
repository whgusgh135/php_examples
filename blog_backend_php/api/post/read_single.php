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

    // Get id from url param
    $post->id = isset($_GET['id']) ? $_GET['id'] : die();

    // Get post
    $result = $post->read_single();

    if($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        
        extract($row);

        // this step is not required if the data received is exactly same as
        // what you want to send out
        // simply just echo json_encode($row);
        $post_item = array(
            'id' => $id,
            'title' => $title,
            'body' => $body,
            'author' => $author,
            'created_at' => $created_at
        );

        echo json_encode($post_item);

    } else {
        // No Post
        echo json_encode(['message' => 'No Post Found']);
    }

?>