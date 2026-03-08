<?php
defined('CONTROL') or die('<h1>Access denied<h1>');

session_destroy();

header('location: index.php?route=login');