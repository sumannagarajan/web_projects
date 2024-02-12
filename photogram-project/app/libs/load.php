<?php
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "/app/_templates/$name.php"; //consistent way

}
function validate_credential($username, $password)
{
    if ($username == "suman@sample.com" and $password == "password") {
        return true;
    } else {
        return false;
    }

}
