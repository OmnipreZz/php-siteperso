

<?php
    if (isset($_POST['name']) AND isset($_POST['email'])) {
        $contact = array("name" => $_POST['name'],
                         "first_name" => $_POST['surname'],
                         "mail" => $_POST['email'],
                         "message" => $_POST['msg']);
        $jsonData = json_encode($contact);
        file_put_contents('../data/last_message.json', $jsonData);
        // file_put_contents('../data/last_message.json', $jsonData, FILE_APPEND | LOCK_EX);
        header("Location: /index.php?page=contact");
    }
?>