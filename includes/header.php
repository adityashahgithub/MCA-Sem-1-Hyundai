<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hyundai India - Move Beyond Limits</title>
    <?php 
    // Use BASE_PATH constant if defined, otherwise calculate it
    if (!defined('BASE_PATH')) {
        $base_path = '';
    } else {
        $base_path = BASE_PATH;
    }
    ?>
    <link rel="icon" type="image/svg+xml" href="<?php echo $base_path; ?>assets/favicon.svg">
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/style.css">
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="<?php echo $base_path; ?>assets/logo.svg" alt="Hyundai Logo" class="logo-img">
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#models" class="nav-link">Models</a></li>
                <li><a href="#electric" class="nav-link">Electric</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#offers" class="nav-link">Offers</a></li>
                <li><a href="#dealers" class="nav-link">Dealers</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

