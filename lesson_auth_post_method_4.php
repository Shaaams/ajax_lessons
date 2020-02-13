<?php

if (isset($_POST['name']) && isset($_POST['lastlogin'])){
    echo 'Hello : ' . $_POST['name'] . " AND Last Login : " . $_POST['lastlogin'] ;
}