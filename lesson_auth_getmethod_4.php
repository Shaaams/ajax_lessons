<?php

if (isset($_GET['name']) && isset($_GET['lastlogin'])){
    echo 'Hello : ' . $_GET['name'] . " AND Last Login : " . $_GET['lastlogin'] ;
}