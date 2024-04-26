<?php

require('./classes/Validator.php');

$config = require('./config.php');
$db = new Database($config['database']);

$heading = '';

if(is_post_request()) {

    $errors = [];

    $author = $_SESSION['user']['id'];
    $title = h(trim($_POST['title']));
    $date = h($_POST['created_date']);
    $time = h($_POST['post_time']);
    $publishedAt = $date." ".$time;
    $content = h(trim($_POST['body']));
    $img = $_FILES['image'];

    //validate
    if(empty($title)) {
        $errors[] = "Title can't be empty.";
    }
    if(empty($date)) {
        $errors[] = "You have to choose date.";
    }
    if(empty($time)) {
        $errors[] = "You have to choose time.";
    }
    if(empty($content)) {

        $errors[] = "Content field can't be empty.";
    }
    if(empty($img)) {
        $errors[] = "You have to choose image for the post.";
    }
    if(!Validator::string(strlen($content), 5, 1000)) {
        $errors[] = 'Body must have at least 5 chars to be blog post';
    }

    if(empty($errors)) {
        // Check if the form was submitted
        if (isset($_FILES["image"])) {
            $file = $_FILES["image"];

            // Check if file was uploaded without errors
            if ($file["error"] == UPLOAD_ERR_OK) {
                // Specify the directory where the file will be stored
                $uploadDir = "assets/uploads/";

                // Create the uploads directory if it doesn't exist
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Generate a unique name for the file to avoid overwriting
                $fileName = uniqid() . '_' . basename($file["name"]);

                // Move the uploaded file to the destination directory
                $targetPath = $uploadDir . $fileName;
                if (move_uploaded_file($file["tmp_name"], $targetPath)) {
                    echo "The file has been uploaded successfully.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Error: " . $file["error"];
            }
        } 



        $db->query('insert into post(authorId, title, publishedAt, content, img) VALUES(:authorId, :title, :publishedAt, :content, :img)', [
            'authorId' => $author,
            'title' => $title,
            'publishedAt' => $publishedAt,
            'content' => $content,
            'img' => $fileName,
        ]);

        redirect_to('http://blog.test/posts?succ=You successfully added new post!');
        exit;
    }
} else {

    echo "nije post method";
}



require('./views/public/posts/create.view.php');