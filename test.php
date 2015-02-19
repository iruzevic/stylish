<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" />
    <title></title>
    <style>
        .container{ background-color:#fff;}
        body{ background-color: #f2f2f2}
    </style>
</head>
<body>
    <div class="container">
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>
</body>
</html>