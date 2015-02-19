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
    <br/><br/>


    <div class="container">
        <br/><h5>Standard grid</h5><br/>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_double">
        <h5>Double grid</h5><br/>
        <div class="grid_double">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_triple">
        <br/><h5>Triple grid</h5><br/>
        <div class="grid_triple">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_half">
        <br/><h5>Half grid</h5><br/>
        <div class="grid_half">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_quarter">
        <br/><h5>Quarter grid</h5><br/>
        <div class="grid_quarter">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_clean">
        <br/><h5>Clean grid (no gutter)</h5><br/>
        <div class="grid_clean">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_liquid">
        <br/><h5>Full width container</h5><br/>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>

    <br/><br/><br/><br/>

    <div class="container container_liquid container_clean">
        <br/><h5>Full width container with no gutter</h5><br/>
        <div class="grid_fluid">
            <?php for($i=1;$i<=6;$i++){ ?>
                <div class="col_2 col_l_3 col_m_4 col_s_6 col_xs_12" style="text-align: justify"><strong><?php echo $i; ?></strong> - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse turpis nunc, ullamcorper et viverra in, sagittis vitae metus. Etiam gravida ex sit amet arcu convallis faucibus.</div>
            <?php } ?>
        </div>
    </div>
</body>
</html>