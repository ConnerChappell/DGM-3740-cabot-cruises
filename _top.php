<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Cabot Cruises - <?php echo $title; ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- STYLE SHEETS -->
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<link href="css/styles.css" rel="stylesheet">


</head>

<body>
<!-- HEADER HERE -->
    <div class="headerWrapper">
        <header class="clearfix">
            <figure class="logo">
                <img src="./images/logo-example.png" alt="Cabot Cruises Logo" srcset="images/logo1-example.png 1x, images/logo2-example.png 2x, images/logo3-example.png 3x">
            </figure>
            <a href="tel:1-800-555-1234">1-800-555-1234</a>
        </header>
    </div>
    
    
<!-- NAVIGATION HERE -->
    <div class="navWrapper clearfix">
        <nav class="clearfix">
            <button id="hamburgerBtn">
                <span><i>&equiv;</i> OPEN</span>
                <span><i>&otimes;</i> CLOSE</span>
            </button>
    
            <ul id="primaryNav">
                <li><a href="index.php">Home</a></li>
                <li><a href="cruises.html">Cruises</a></li>
                <li class="parent"><a href="#">Agents</a>
                    <ul>
                        <li><a href="agent1.html">Sally Rogers</a></li>
                        <li><a href="agent2.html">Buddy Sorrell</a></li>
                    </ul>
                </li>
                <li><a href="book.html">Book</a></li> 
            </ul>

            <form class="searchBar">
                <input type="search" placeholder="Search" name="search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </nav>
    </div>
    
    
<!-- CONTENT HERE -->
<main>