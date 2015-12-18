<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" />
    <link href="preview/style_preview.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="preview/favicon.ico">
    <title>Stylish Framework - Fluid Grid</title>
    <style>
        .container{ background-color:#fff; padding-bottom: 30px; min-height: 300px}
        body{ background-color: #f2f2f2; font-weight: 400; font-size: 15px; line-height: 20px;}
        h5{ padding: 20px 0; font-weight: 500}
        .fluid_col,
        .fixed_col{ text-align: justify}
    </style>
</head>
<body>

<?php $fixed = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.' ?>
<?php $fluid = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.' ?>
<br/><br/>
<div class="container">
    <h5>Right Fixed Col</h5>
    <div class="grid_fix grid_fix_right">
        <div id="" class="fluid_col">
            <div class="fluid_wrap">
                <?php echo $fluid ?>
            </div>
        </div>
        <div id="" class="sidebar fixed_col">
            <?php echo $fixed ?>
        </div>
    </div>
</div>

<br/><br/><br/><br/>

<div class="container">
    <h5>Left Fixed Col</h5>
    <div class="grid_fix grid_fix_left">
        <div id="" class="sidebar fixed_col">
            <?php echo $fixed ?>
        </div>
        <div id="" class="fluid_col">
            <div class="fluid_wrap">
                <?php echo $fluid ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>