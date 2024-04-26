<?php

$heading = 'Edit This Post';

require('./classes/Validator.php');
$config = require('./config.php');
$db = new Database($config['database']);

$id = $_POST['post_id'];


$post = $db->query('select * from post where id = :id', [
    'id' => $id
])->findOrFail();

$user_id = $post['authorId'];

//validation of edited post
if(is_post_request()) {

    $errors = [];

    $title = h(trim($_POST['edit_title']));
    $date = h($_POST['edit_date']);
    $time = h($_POST['edit_time']);
    $content = h(trim($_POST['edit_content']));

    $publishedAt = $date.' '.$time;

    if(empty($title)) {

        $errors[] = "Title is empty.";
    }
    if(empty($date)) {

        $errors[] = "You have to choose date.";
    }
    if(empty($time)) {

        $errors[] = "You have to choose time.";
    }

    if(empty($content)) {

        $errors[] = "Contant must be filled up.";
    }
    if(!Validator::string(strlen($content), 5, 1000)) {

        $errors[] = 'Body must have at least 5 chars to be blog post';
    }


    

    if(empty($errors)) {
        // Check if the form was submitted
        if (isset($_FILES["edit_image"])) {
            $file = $_FILES["edit_image"];

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
                // echo "Error: " . $file["error"];
                                 
                $_FILES['edit_image']['name'] = 'avatar.jpg';
                $_FILES['edit_image']['full_path'] = 'avatar.jpg';
                $_FILES['edit_image']['type'] = 'image/jpeg';
                $_FILES['edit_image']['tmp_name'] = 'C:\Users\Korisnik\AppData\Local\Temp\php3797.tmp';
                $_FILES['edit_image']['error'] = 0;
                $_FILES['edit_image']['size'] = 40653;

                
                // Specify the directory where the file will be stored
                $uploadDir = "assets/uploads/";

                // Create the uploads directory if it doesn't exist
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Generate a unique name for the file to avoid overwriting
                $fileName = $_FILES['edit_image']['name'];;

                // Move the uploaded file to the destination directory
                $targetPath = $uploadDir . $fileName;
        
                if (move_uploaded_file($file["tmp_name"], $targetPath)) {
                    echo "The file has been uploaded successfully.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
          
           
            }

        } 

            

        
        
    // var_dump($_FILES);

        $db->query('update post set authorId = :authorId, title = :title, publishedAt = :publishedAt, content = :content, img = :img where id = :id', [
            'authorId' => $user_id,
            'title' => $title,
            'publishedAt' => $publishedAt,
            'content' => $content,
            'img' => $fileName,
            'id' => $id
        ]);

       
    redirect_to('/posts');
    exit;
}
 
} else {

    echo "nije post method";
}

require ('./views/public/posts/edit.view.php');