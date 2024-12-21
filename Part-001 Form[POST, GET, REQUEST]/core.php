<?php
    //Also use $_POST
    $email = $_GET['email'];
    $pass = $_GET['pass'];

    //$_POST & $_GET automatic.......

    echo'Email: '.$email.'<br>';
    echo'Pass: '.$pass;
    echo '<br>'."<a href='https://www.google.co.uk/' target='_blank'>{$email}</a>";
?>