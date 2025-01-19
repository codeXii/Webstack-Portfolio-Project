<?php

require './myconfig/database.php';

// destroy all sessions and redirect back to index page
session_destroy();
header('location:' . ROOT_URL . 'index.php' );
die();