<?php

    // Set Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, ContentType,
        Access-Control-Allow-Methods, Authorization, X-Requested-With');

    // Import PDO && Post Model
    include_once '../../config/Database.php';
    include_once '../../models/Post.php';

    // Instantiate DB && PDO object
    $database = new Database();
    $pdo = $database->connect();

    // Instantiate Post object
    $post = new Post($pdo);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    $post->title = $data->title;
    $post->body = $data->body;
    $post->author = $data->author;

    // Create post
    if($post->create()) {
        echo json_encode(['message' => 'Post Created']);
    } else {
        echo json_encode(['message' => 'Post Not Created']);
    }

?>