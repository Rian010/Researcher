<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        'email' => $_POST['email'],
        'message' => $_POST['message']
    );
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents('https://formspree.io/f/mvoeqzop', false, $context);
}
?>