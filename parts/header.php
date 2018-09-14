<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Ferramenta de preview de campanhas <?php echo (empty($current[company])) ? 'Ominicom Media Group' : strtoupper ($current[company]); ?>">
    <meta name="keywords" content="HTML, CSS, JS, Sass, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="David Lopes @ Omnicom Media Group">
    <title><?php echo (empty($current[company])) ? 'Ominicom Media Group' : strtoupper ($current[company]); ?> - Campaign Preview</title>
    <!-- Favicon and System icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-favicon-16x16.png">
    <link rel="manifest" href="/assets/misc/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-site.webmanifest">
    <link rel="mask-icon" href="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-safari-pinned-tab.svg" color="#ee3425">
    <link rel="shortcut icon" href="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-favicon.ico">
    <meta name="msapplication-TileColor" content="<?php echo $current[company_color]; ?>">
    <meta name="msapplication-config" content="/assets/misc/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-browserconfig.xml">
    <meta name="theme-color" content="<?php echo $current[company_color]; ?>">
    <!-- //Favicon and System icons -->
    <!-- OG Data -->
    <meta property="og:image" content="/assets/img/<?php echo (empty($current[company])) ? 'OMG' : strtoupper ($current[company]); ?>-og-image.jpg">
    <meta property="og:image:width" content="279">
    <meta property="og:image:height" content="279">
    <meta property="og:description" content="Ferramenta de preview de campanhas <?php echo strtoupper ($current[company]) ;?>">
    <meta property="og:title" content="<?php echo (empty($current[company])) ? 'Ominicom Media Group' : strtoupper ($current[company]); ?> - Campaign Preview">
    <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <!-- //OG Data -->
    <!-- Icon Libraries -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- //Icon Libraries -->
    <!-- CSS Build -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- //CSS Build -->
  </head>
  <body class="<?php echo strtolower ($current[company]) ;?> d-flex flex-column">
    <main class="content-wrap flex-grow">
