<!DOCTYPE html>
<html>
<head>
    <title>Stylish Framework</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" />
    <link href="preview/style_preview.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="preview/favicon.ico">
    <!--[if lt IE 9]>
        <script>
            document.createElement('header');
            document.createElement('nav');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
        </script>
    <![endif]-->
</head>
<body>
<header id="header"></header>
<div id="content">
    <div class="grid_clean">
        <aside id="sidebar" class="col_3">
            <img id="logo" src="preview/logo.png" />
            <h2>Versions</h2>
            <ul>
                <li><a href="/v2" class="top_link"><i class="fa fa-star"></i>Version2</a></li>
                <li><a href="/" class="top_link current"><i class="fa fa-star"></i>Version3</a></li>
            </ul>
            <br/><br/><br/>
            <h2>Instructions</h2>
            <ul>
                <li><a href="#instructions" class="top_link"><i class="fa fa-star"></i>Instructions</a></li>
                <li><a href="#download" class="top_link"><i class="fa fa-star"></i>Download</a></li>
                <li><a href="#help" class="top_link"><i class="fa fa-star"></i>Help</a></li>
            </ul>
            <br/><br/><br/>
            <h2>Mockups</h2>
            <ul>
                <li><a href="/grid_fluid.php" class="top_link" target="_blank"><i class="fa fa-star"></i>Fluid Grid</a></li>
                <li><a href="/grid_fixed.php" class="top_link" target="_blank"><i class="fa fa-star"></i>Fixed Sidebar Grid</a></li>
                <li>
                    <a href="#form" class="top_link"><i class="fa fa-star"></i>Form Fields</a>
                    <ul>
                        <li><a href="#form" class="scoll" data-scroll="select">Select field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="radio">Radio field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="checkbox">Checkbox field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="text">Text field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="tel">Tel field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="number">Number field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="email">Email field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="url">URL field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="date">Date Time field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="password">Password field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="search">Search field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="textarea">Textarea field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="upload">Upload field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="field_error">Error field</a></li>
                        <li><a href="#form" class="scoll" data-scroll="js_form">JS manual</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#modal" class="top_link"><i class="fa fa-star"></i>Modal</a>
                    <ul>
                        <li><a href="#modal" class="scoll" data-scroll="scale">Load Scale</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="top">Load Top</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="full">Full Size</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="legacy">Legacy Mockup</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="js_section">JS manual</a></li>
                    </ul>
                </li>
                <li><a href="#breadcrumbs" class="top_link"><i class="fa fa-star"></i>Breadcrumbs</a></li>
                <li><a href="#pagination" class="top_link"><i class="fa fa-star"></i>Pagination</a></li>
                <li><a href="#buttons" class="top_link"><i class="fa fa-star"></i>Buttons</a></li>
                <li>
                    <a href="#accordion" class="top_link"><i class="fa fa-star"></i>Accordion</a>
                    <ul>
                        <li><a href="#accordion" class="scoll" data-scroll="auto">Auto Close</a></li>
                        <li><a href="#accordion" class="scoll" data-scroll="manual">Manual Close</a></li>
                    </ul>
                </li>
                <li><a href="#tabs" class="top_link"><i class="fa fa-star"></i>Tabs</a></li>
                <li><a href="#tooltip" class="top_link"><i class="fa fa-star"></i>Tooltip</a></li>
                <li><a href="#table" class="top_link"><i class="fa fa-star"></i>Table</a></li>
                <li><a href="#divider" class="top_link"><i class="fa fa-star"></i>Divider</a></li>
                <li>
                    <a href="#msg" class="top_link"><i class="fa fa-star"></i>Msg</a>
                    <ul>
                        <li><a href="#msg" class="scoll" data-scroll="msg_error">Error</a></li>
                        <li><a href="#msg" class="scoll" data-scroll="msg_success">Success</a></li>
                        <li><a href="#msg" class="scoll" data-scroll="msg_notice">Notice</a></li>
                        <li><a href="#msg" class="scoll" data-scroll="msg_warning">Warning</a></li>
                    </ul>
                </li>
                <li><a href="#navigation" class="top_link"><i class="fa fa-star"></i>Navigation</a></li>
                <li><a href="#equalHeight" class="top_link"><i class="fa fa-star"></i>Cols Equal Height</a></li>
                <li><a href="#sticky" class="top_link"><i class="fa fa-star"></i>Sticky On Scroll</a></li>
                <li>
                    <a href="#mixins" class="top_link"><i class="fa fa-star"></i>Mixins</a>
                    <ul>
                        <li><a href="#mixins" class="scoll" data-scroll="linkcolor">Link Color</a></li>
                        <li><a href="#mixins" class="scoll" data-scroll="btncolor">Button Color</a></li>
                        <li><a href="#mixins" class="scoll" data-scroll="font">Custom font</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#crossbrowser" class="top_link"><i class="fa fa-star"></i>Cross-Browser</a>
                    <ul>
                        <li><a href="#crossbrowser" class="scoll" data-scroll="ie9">IE 9 fixes</a></li>
                        <li><a href="#crossbrowser" class="scoll" data-scroll="ie8">IE 8 fixes</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <div id="main_content" class="col_9 push_3">
            <div class="container">
                <div id="block_instructions" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Installation instructions</h1>
                        <p class="desc">Set of instructions to setup framework on new project.</p>
                        <div class="content content_style">
                            <p><strong>If this is your first installation:</strong></p>
                            <ol class="list">
                                <li>install ruby (https://www.ruby-lang.org/en/downloads/)</li>
                                <li>set path variable in phpstorm settings (gem - C:\Ruby193\bin)</li>
                                <li>install compass "gem install compass"</li>
                                <li>install sass "gem install sass"</li>
                            </ol>
                            <br/><br/><br/>
                            <p><strong>Steps for installation:</strong></p>
                            <ol class="list">
                                <li>copy framework folders and files in your project folder</li>
                                <li>delete index.php, README.md and preview folder - you don't need this because is used only for preview page</li>
                                <li>open config.rb in sass folder and check settings</li>
                                <li>after any change on config file enter "compass clean" i console to clear cache</li>
                                <li>open console and move to sass folder with "cd"</li>
                                <li>in console enter "compass watch" for watching the changes in creating sass</li>
                                <li>and that is it, you are ready to edit files</li>
                            </ol>
                            <br/><br/><br/>
                            <p><strong>Steps initial setup:</strong></p>
                            <ol class="list">
                                <li>open sass/global/variables.scss and edit colors and all variables</li>
                                <li>open sass/global/buttons.scss and edit button colors</li>
                                <li>open sass/global/typography.scss and edit text colors</li>
                                <li>edit all styles if needed for default</li>
                                <li>now you are ready to add your css</li>
                            </ol>
                            <div class="divider m_bottom80 m_top80"></div>
                            <p><strong>Compass comands:</strong></p>
                            <ol class="list">
                                <li>compass install compass (install new compass project)</li>
                                <li>comapss watch (watching changes in sass folders)</li>
                                <li>compass clean (erase sass cache and add new changes)</li>
                                <li>compass version (view version of installed compass)</li>
                            </ol>
                        </div>
                        <br/>
                        <ul class="msg">
                            <li class="notice_msg">
                                <ul>
                                    <li>Framework is using Compass open-source framework and you can use all it's functionality.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="block_download" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Download</h1>
                        <p class="desc">Here are links to download and bitbucket.</p>
                        <div class="content content_style">
                            <p><strong>Download</strong></p>
                            <ul class="list">
                                <li><a href="https://bitbucket.org/mustra/stylish/downloads" target="_blank">https://bitbucket.org/mustra/stylish/downloads</a></li>
                            </ul>
                            <br/><br/><br/>
                            <p><strong>Bitbucket repository</strong></p>
                            <ul class="list">
                                <li><a href="https://bitbucket.org/mustra/stylish" target="_blank">https://bitbucket.org/mustra/stylish</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="block_help" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Help</h1>
                        <p class="desc">If you are stuck and need help please contact me.</p>
                        <div class="content content_style">
                            <p><strong>Ivan Ružević</strong></p>
                            <ul class="list">
                                <li>ruzevic.ivan@gmail.com</li>
                                <li><a href="http://www.mustra-designs.com/" target="_blank">www.mustra-designs.com</a></li>
                                <li><a href="https://www.facebook.com/mustritis" target="_blank">Facebook</a></li>
                                <li><a href="hr.linkedin.com/pub/ivan-ružević/32/623/865/" target="_blank">LinkedIn</a></li>
                                <li><a href="https://twitter.com/mustra1" target="_blank">Twitter</a></li>
                                <li>Skype: ruzevic.ivan</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php include ("preview/parts/modal.php"); ?>

                <?php include ("preview/parts/breadcrumbs.php"); ?>

                <?php include ("preview/parts/pagination.php"); ?>

                <?php include ("preview/parts/buttons.php"); ?>

                <?php include ("preview/parts/accordion.php"); ?>

                <?php include ("preview/parts/tabs.php"); ?>

                <?php include ("preview/parts/tabs.php"); ?>

                <?php include ("preview/parts/tooltip.php"); ?>

                <?php include ("preview/parts/forms.php"); ?>

                <?php include ("preview/parts/table.php"); ?>

                <?php include ("preview/parts/utilities.php"); ?>

                <?php include ("preview/parts/msg.php"); ?>

                <?php include ("preview/parts/nav.php"); ?>


                <!--
                <div class="block scrollto_manual">
                    <h1 class="title"></h1>
                    <p class="desc"></p>
                    <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                    <div class="content"></div>
                    <div class="source"></div>
                </div>
                -->
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/equalHeight.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/placeholder.min.js"></script>


<script src="preview/syntaxhighlighter/js/shCore.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushJScript.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushXml.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushSass.js" type="text/javascript"></script>
<link href="preview/syntaxhighlighter/shCoreDefault.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript">
    SyntaxHighlighter.all();
    jQuery(document).ready(function(){
        //on click open source
        jQuery('.block .open_source').click(function(e){
            e.preventDefault();
           jQuery(this).closest('.block').find('.source').slideToggle('fast');
        });

        //on load open page if there is hash
        var hash_tag = location.hash.substring(1);
        if(hash_tag != ''){
            jQuery('#block_'+hash_tag).show();
            jQuery('#sidebar ul a[href=#'+hash_tag+'].top_link').addClass('active');
            select();
        }else{
            jQuery('.block_wrap:first-child').slideDown('fast');

        }

        //open page on click
        jQuery('#sidebar ul a').click(function(e){
            jQuery('#sidebar ul a').removeClass('active');
            var id = jQuery(this).attr('href').substring(1);
            jQuery('.block_wrap').hide();
            jQuery('#block_'+id).toggle();
            jQuery(this).addClass('active');
            select();
        });

        //scroll to content
        jQuery('#sidebar ul a.scoll').click(function(){
            var id = jQuery(this).data('scroll');
            $('html, body').animate({
                scrollTop: $(".scrollto_"+id).offset().top
            }, 300);
        });
    });
</script>
</body>
</html>