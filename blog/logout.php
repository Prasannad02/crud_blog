<?php
require 'config/constants.php';

// destroy all session and redirect to the login pages
session_destroy();
header('location: ' . ROOT_URL);
die();