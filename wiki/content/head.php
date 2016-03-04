<?php include('functions.php') ?>

<!DOCTYPE html>
<html lang="en" class="<?php echo $_COOKIE['sidebar_menu']; //read cookie to remember closed or opened state?>">
<head>
    <title><?php echo $pageTitle ?></title>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_skin ?>images/favicon.ico">

    <!--  CSs  -->
    <link rel="stylesheet" href="<?php echo $base_skin ?>css/style.css" >
    <link rel="stylesheet" href="<?php echo $framework_skin ?>css/style.css" >
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>

    <!--  Scripts  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?php echo $framework_skin ?>js/global_script.min.js"></script>
    <script src="<?php echo $base_skin ?>js/global_script.min.js"></script>

</head>
<body>


