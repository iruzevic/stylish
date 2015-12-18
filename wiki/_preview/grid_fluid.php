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
        .container{ background-color:#fff; padding-bottom: 30px;}
        body{ background-color: #f2f2f2; font-weight: 400; font-size: 15px; line-height: 20px;}
        h5{ padding: 20px 0; font-weight: 500}
        [class*='col_']{ text-align: justify}
    </style>
</head>
<body>

    <?php $txt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.' ?>
    <br/><br/>
    <div class="container">
        <h5>Standard grid</h5>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>


    <div class="container">
        <h5>Standard grid</h5>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_double">
        <h5>Double grid</h5>
        <div class="grid_double">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_triple">
        <h5>Triple grid</h5>
        <div class="grid_triple">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="ccol_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_half">
        <h5>Half grid</h5>
        <div class="grid_half">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_quarter">
        <h5>Quarter grid</h5>
        <div class="grid_quarter">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_clean">
        <h5>Clean grid (no gutter)</h5>
        <div class="grid_clean">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_liquid">
        <h5>Full width container</h5>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_liquid container_clean">
        <h5>Full width container with no gutter</h5>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_l_2 col_d_3 col_m_4 col_h_5 col_s_6 col_xs_12"><strong><?php echo $i; ?></strong> - <?php echo $txt; ?></div>
            <?php } ?>
        </div>
    </div>
</body>
</html>