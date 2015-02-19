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
    <div class="grid_fluid">
        <aside id="sidebar" class="col_3">
            <img id="logo" src="preview/logo.png" />
            <h2>Versions</h2>
            <ul>
                <li><a href="/v2" class="top_link current"><i class="fa fa-star"></i>Version2</a></li>
                <li><a href="/" class="top_link "><i class="fa fa-star"></i>Version3</a></li>
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
                <li>
                    <a href="#modal" class="top_link"><i class="fa fa-star"></i>Modal</a>
                    <ul>
                        <li><a href="#modal" class="scoll" data-scroll="scale">Load Scale</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="left">Load Left</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="right">Load Right</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="top">Load Top</a></li>
                        <li><a href="#modal" class="scoll" data-scroll="bottom">Load Bottom</a></li>
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
                <li>
                    <a href="#grid" class="top_link"><i class="fa fa-star"></i>Grid</a>
                    <ul>
                        <li><a href="#grid" class="scoll" data-scroll="fluid_nogutter">Fluid Grid No Gutter</a></li>
                        <li><a href="#grid" class="scoll" data-scroll="fluid">Fluid Grid With Gutter</a></li>
                        <li><a href="#grid" class="scoll" data-scroll="fixed_right">Fixed Sidebar Right</a></li>
                        <li><a href="#grid" class="scoll" data-scroll="fixed_left">Fixed Sidebar Left</a></li>
                    </ul>
                </li>
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
                            <div class="divider mar_bottom80 mar_top80"></div>
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
                                <li><a href="https://bitbucket.org/mustra/stylish-framework/downloads" target="_blank">https://bitbucket.org/mustra/stylish-framework/downloads</a></li>
                            </ul>
                            <br/><br/><br/>
                            <p><strong>Bitbucket repository</strong></p>
                            <ul class="list">
                                <li><a href="https://mustra@bitbucket.org/mustra/stylish-framework.git" target="_blank">https://mustra@bitbucket.org/mustra/stylish-framework.git</a></li>
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

                <div id="block_modal" class="block_wrap">
                    <div class="block scrollto_scale">
                        <h1 class="title">Modal Window Scale Show</h1>
                        <p class="desc">Modal window to open, add data-slide="scale" to scale open.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <a href="#" class="btn open_modal auto_width" data-modal="Modal1">Open Modal</a>

                            <div class="modal" data-modal="Modal1" data-slide="scale">
                                <div class="modal_overlay"></div>
                                <div class="modal_wrap">
                                    <div class="modal_content">
                                        <a class="close_modal" href="#"></a>
                                        Content
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <a href="#" class="btn open_modal" data-modal="Modal1">Open Modal</a>


                                <div class="modal" data-modal="Modal1" data-slide="scale">
                                    <div class="modal_overlay"></div>
                                    <div class="modal_wrap">
                                        <div class="modal_content">
                                            <a class="close_modal" href="#"></a>
                                            Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_left">
                        <h1 class="title">Modal Window Left SlideIN</h1>
                        <p class="desc">Modal window to open, add data-slide="left" to slide from left.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <a href="#" class="btn open_modal auto_width" data-modal="Modal2">Open Modal</a>
                            <div class="modal" data-modal="Modal2" data-slide="left">
                                <div class="modal_overlay"></div>
                                <div class="modal_wrap">
                                    <div class="modal_content">
                                        <a class="close_modal" href="#"></a>
                                        Content
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <a href="#" class="btn open_modal" data-modal="Modal2">Open Modal</a>


                                <div class="modal" data-modal="Modal2" data-slide="left">
                                    <div class="modal_overlay"></div>
                                    <div class="modal_wrap">
                                        <div class="modal_content">
                                            <a class="close_modal" href="#"></a>
                                            Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_right">
                        <h1 class="title">Modal Window Right SlideIN</h1>
                        <p class="desc">Modal window to open, add data-slide="right" to slide from right.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <a href="#" class="btn open_modal auto_width" data-modal="Modal3">Open Modal</a>
                            <div class="modal" data-modal="Modal3" data-slide="right">
                                <div class="modal_overlay"></div>
                                <div class="modal_wrap">
                                    <div class="modal_content">
                                        <a class="close_modal" href="#"></a>
                                        Content
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <a href="#" class="btn open_modal" data-modal="Modal3">Open Modal</a>


                                <div class="modal" data-modal="Modal3" data-slide="right">
                                    <div class="modal_overlay"></div>
                                    <div class="modal_wrap">
                                        <div class="modal_content">
                                            <a class="close_modal" href="#"></a>
                                            Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_top">
                        <h1 class="title">Modal Window Top SlideIN</h1>
                        <p class="desc">Modal window to open, add data-slide="top" to slide from top.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <a href="#" class="btn open_modal auto_width" data-modal="Modal4">Open Modal</a>
                            <div class="modal" data-modal="Modal4" data-slide="top">
                                <div class="modal_overlay"></div>
                                <div class="modal_wrap">
                                    <div class="modal_content">
                                        <a class="close_modal" href="#"></a>
                                        Content
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <a href="#" class="btn open_modal" data-modal="Modal4">Open Modal</a>


                                <div class="modal" data-modal="Modal4" data-slide="top">
                                    <div class="modal_overlay"></div>
                                    <div class="modal_wrap">
                                        <div class="modal_content">
                                            <a class="close_modal" href="#"></a>
                                            Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_bottom">
                        <h1 class="title">Modal Window Bottom SlideIN</h1>
                        <p class="desc">Modal window to open, add data-slide="bottom" to slide from bottom.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <a href="#" class="btn open_modal auto_width" data-modal="Modal5">Open Modal</a>
                            <div class="modal" data-modal="Modal5" data-slide="bottom">
                                <div class="modal_overlay"></div>
                                <div class="modal_wrap">
                                    <div class="modal_content">
                                        <a class="close_modal" href="#"></a>
                                        Content
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <a href="#" class="btn open_modal" data-modal="Modal5">Open Modal</a>


                                <div class="modal" data-modal="Modal5" data-slide="bottom">
                                    <div class="modal_overlay"></div>
                                    <div class="modal_wrap">
                                        <div class="modal_content">
                                            <a class="close_modal" href="#"></a>
                                            Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_js_section">
                        <h1 class="title">Modal Window - Manual actions using JS</h1>
                        <p class="desc">Functions to use in Js, in id add data-module value and on action add open or close.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="source">
                            <pre class="brush: js;">
                                jQuery(document).ready(function(){

                                    //Open modal window, populate id field with data-modal value
                                    modal('id', 'open');

                                    //Close modal window, populate id field with data-modal value
                                    modal('id', 'close');

                                });

                            </pre>
                        </div>
                    </div>
                    <div class="block">
                        <ul class="msg">
                            <li class="notice_msg">
                                <ul>
                                    <li>Button - Attribute <strong>data-modal</strong> must be equal to <strong>data-modal</strong> on modal.</li>
                                    <li>Modal - Attribute <strong>data-slide</strong> sets the way the modal is going to open.</li>
                                    <li>Avaiable methods - <strong>Scale, Left, Right, Top, Bottom</strong></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="block_breadcrumbs" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Breadcrumbs</h1>
                        <p class="desc">Breadcrumbs style mockup</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="breadcrumbs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Last Page</a></li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="breadcrumbs">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Page 1</a></li>
                                    <li><a href="#">Page 2</a></li>
                                    <li><a href="#">Last Page</a></li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_pagination" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Pagination</h1>
                        <p class="desc">Pagination style mockup, add class current for current state.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="pagination">
                                <li><a href="#">First</a></li>
                                <li><a href="#">Prev</a></li>
                                <li><a href="#">1</a></li>
                                <li class="current"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
                                <li><a href="#">Last</a></li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="pagination">
                                    <li><a href="#">First</a></li>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="current"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                    <li><a href="#">Last</a></li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_buttons" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Buttons</h1>
                        <p class="desc">Different buttons style mockup.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">

                            <!-- Button Black -->
                            <a href="#" class="btn btn_mine_shaft">Button Black</a>
                            &nbsp;
                            <!-- Button  -->
                            <a href="#" class="btn btn_havelock_blue">Button Blue</a>
                            &nbsp;
                            <!-- Button Red -->
                            <a href="#" class="btn btn_flush_mahogany">Button Red</a>
                            &nbsp;
                            <!-- Button Green -->
                            <a href="#" class="btn btn_emerald">Button Green</a>
                            &nbsp;
                            <!-- Button Yellow -->
                            <a href="#" class="btn btn_earls_green">Button Yellow</a>
                            &nbsp;
                            <!-- Button Purple -->
                            <a href="#" class="btn btn_amethyst">Button Purple</a>
                            &nbsp;
                            <!-- Button Orange -->
                            <a href="#" class="btn btn_raw_sienna">Button Orange</a>
                            &nbsp;
                            <!-- Button Gray -->
                            <a href="#" class="btn btn_dove_gray">Button Gray</a>
                            &nbsp;
                            <!-- Button Gray Light -->
                            <a href="#" class="btn btn_dove_gray_light">Button Gray Light</a>
                            &nbsp;
                            <!-- Button Gray Lighter -->
                            <a href="#" class="btn btn_silver">Button Gray Lighter</a>
                            &nbsp;
                            <!-- Button Light -->
                            <a href="#" class="btn btn_mercury">Button Light</a>
                            &nbsp;
                            <!-- Button With No radius -->
                            <a href="#" class="btn btn_mine_shaft no_radius">Button No Radius</a>
                            <br/>
                            <!-- Button Auto width -->
                            <a href="#" class="btn btn_mine_shaft auto_width">Button Auto width</a>
                            &nbsp;
                            <br/><br/>
                            <!-- Button Rounded -->
                            <a href="#" class="btn btn_mine_shaft rounded">Button Rounded</a>
                            &nbsp;
                            <!-- Button Disabled -->
                            <a href="#" class="btn btn_mine_shaft disabled">Button Disabled</a>
                            &nbsp;
                            <!-- Button With Icon on the left -->
                            <a href="#" class="btn btn_mine_shaft btn_icon_left"><i class="sy_info_round"></i>Button With Icon</a>
                            &nbsp;
                            <!-- Button With Icon on the right -->
                            <a href="#" class="btn btn_mine_shaft btn_icon_right">Button With Icon<i class="sy_info_round"></i></a>

                        </div>
                        <div class="source">
                            <pre class="brush: xml;">

                                <!-- Button Black -->
                                <a href="#" class="btn btn_mine_shaft">Button Black</a>
                                &nbsp;
                                <!-- Button  -->
                                <a href="#" class="btn btn_havelock_blue">Button Blue</a>
                                &nbsp;
                                <!-- Button Red -->
                                <a href="#" class="btn btn_flush_mahogany">Button Red</a>
                                &nbsp;
                                <!-- Button Green -->
                                <a href="#" class="btn btn_emerald">Button Green</a>
                                &nbsp;
                                <!-- Button Yellow -->
                                <a href="#" class="btn btn_earls_green">Button Yellow</a>
                                &nbsp;
                                <!-- Button Purple -->
                                <a href="#" class="btn btn_amethyst">Button Purple</a>
                                &nbsp;
                                <!-- Button Orange -->
                                <a href="#" class="btn btn_raw_sienna">Button Orange</a>
                                &nbsp;
                                <!-- Button Gray -->
                                <a href="#" class="btn btn_dove_gray">Button Gray</a>
                                &nbsp;
                                <!-- Button Gray Light -->
                                <a href="#" class="btn btn_dove_gray_light">Button Gray Light</a>
                                &nbsp;
                                <!-- Button Gray Lighter -->
                                <a href="#" class="btn btn_silver">Button Gray Lighter</a>
                                &nbsp;
                                <!-- Button Light -->
                                <a href="#" class="btn btn_mercury">Button Light</a>
                                &nbsp;
                                <!-- Button With No radius -->
                                <a href="#" class="btn btn_mine_shaft no_radius">Button No Radius</a>
                                &nbsp;
                                <!-- Button Auto width -->
                                <a href="#" class="btn btn_mine_shaft auto_width">Button Auto width</a>
                                &nbsp;
                                <!-- Button Rounded -->
                                <a href="#" class="btn btn_mine_shaft rounded">Button Rounded</a>
                                &nbsp;
                                <!-- Button Disabled -->
                                <a href="#" class="btn btn_mine_shaft disabled">Button Disabled</a>
                                &nbsp;
                                <!-- Button With Icon on the left -->
                                <a href="#" class="btn btn_mine_shaft btn_icon_left"><i class="fa fa-life-ring"></i>Button With Icon</a>
                                &nbsp;
                                <!-- Button With Icon on the right -->
                                <a href="#" class="btn btn_mine_shaft btn_icon_right">Button With Icon<i class="fa fa-life-ring"></i></a>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_accordion" class="block_wrap">
                    <div class="block  scrollto_auto">
                        <h1 class="title">Accordion Auto Close</h1>
                        <p class="desc">Accordion style classic behavior</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="accordion" data-active="1" data-autoclose=""> <!-- Auto Close - true or false; default:true -->
                                <div class="a_head" data-acc="1">Title1 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="1">Content1</div>
                                <div class="a_head" data-acc="2">Title2 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="2">Content2</div>
                                <div class="a_head" data-acc="3">Title3 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="3">Content3</div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="accordion" data-active="1" data-autoclose=""> <!-- Auto Close - true or false; default:true -->
                                    <div class="a_head" data-acc="1">Title1 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="1">Content1</div>
                                    <div class="a_head" data-acc="2">Title2 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="2">Content2</div>
                                    <div class="a_head" data-acc="3">Title3 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="3">Content3</div>
                                </div>
                            </pre>
                        </div>
                    </div>

                    <div class="block  scrollto_manual">
                        <h1 class="title">Accordion Manual Close</h1>
                        <p class="desc">Accordion style if data-autoclose is false on head click won't close previous active state.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="accordion" data-active="1" data-autoclose="false"> <!-- Auto Close - true or false; default:true -->
                                <div class="a_head" data-acc="1">Title1 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="1">Content1</div>
                                <div class="a_head" data-acc="2">Title2 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="2">Content2</div>
                                <div class="a_head" data-acc="3">Title3 <i class="sy_arrow_down"></i></div>
                                <div class="a_content" data-content="3">Content3</div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="accordion" data-active="1" data-autoclose="false"> <!-- Auto Close - true or false; default:true -->
                                    <div class="a_head" data-acc="1">Title1 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="1">Content1</div>
                                    <div class="a_head" data-acc="2">Title2 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="2">Content2</div>
                                    <div class="a_head" data-acc="3">Title3 <i class="sy_arrow_down"></i></div>
                                    <div class="a_content" data-content="3">Content3</div>
                                </div>
                            </pre>
                        </div>
                    </div>

                    <div class="block">
                        <ul class="msg">
                            <li class="notice_msg">
                                <ul>
                                    <li>Attribute <strong>data-acc</strong> must be equal to <strong>data-content</strong></li>
                                    <li>Attribute <strong>data-active</strong> if empty will start fully closed, add id to select first active.</li>
                                    <li>Attribute <strong>data-autoclose</strong> sets is accordion auto closing. Avaiable methods: <strong>true, false</strong>.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="block_tabs" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Tabs</h1>
                        <p class="desc">Tabs layout structure.  and </p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="tabs" data-active="1" data-tabs="5">
                                <ul class="t_head">
                                    <li data-tab="1">Tab 1</li>
                                    <li data-tab="2">Tab 2</li>
                                    <li data-tab="3">Tab 3</li>
                                    <li data-tab="4">Tab 4</li>
                                    <li data-tab="5">Tab 5</li>
                                </ul>
                                <div class="t_content" data-content="1">
                                    Content1
                                </div>
                                <div class="t_content" data-content="2">
                                    Content2
                                </div>
                                <div class="t_content" data-content="3">
                                    Content3
                                </div>
                                <div class="t_content" data-content="4">
                                    Content4
                                </div>
                                <div class="t_content" data-content="5">
                                    Content5
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Attributes <strong>data-tab</strong> and <strong>data-content</strong> must match.</li>
                                        <li>Attribute <strong>data-active</strong> if empty first tab will be active if not, add id to select first active.</li>
                                        <li>Attribute <strong>data-tabs</strong> sets tabs count to set width</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="tabs" data-active="1" data-tabs="5">
                                    <ul class="t_head">
                                        <li data-tab="1">Tab 1</li>
                                        <li data-tab="2">Tab 2</li>
                                        <li data-tab="3">Tab 3</li>
                                        <li data-tab="4">Tab 4</li>
                                        <li data-tab="5">Tab 5</li>
                                    </ul>
                                    <div class="t_content" data-content="1">
                                        Content1
                                    </div>
                                    <div class="t_content" data-content="2">
                                        Content2
                                    </div>
                                    <div class="t_content" data-content="3">
                                        Content3
                                    </div>
                                    <div class="t_content" data-content="4">
                                        Content4
                                    </div>
                                    <div class="t_content" data-content="5">
                                        Content5
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_grid" class="block_wrap">
                    <div class="block scrollto_fluid_nogutter">
                        <h1 class="title">Grid Fluid No Gutter</h1>
                        <p class="desc">Fluid grid with no gutter between cols.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="grid_fluid">

                                <!-- Grid 12 cols -->
                                <div class="col_12">12</div>

                                <!-- Grid 11-1 cols -->
                                <div class="col_11">11</div>
                                <div class="col_1">1</div>

                                <!-- Grid 10-2 cols -->
                                <div class="col_10">10</div>
                                <div class="col_2">2</div>

                                <!-- Grid 9-3 cols -->
                                <div class="col_9">9</div>
                                <div class="col_3">3</div>

                                <!-- Grid 8-4 cols -->
                                <div class="col_8">8</div>
                                <div class="col_4">4</div>

                                <!-- Grid 7-5 cols -->
                                <div class="col_7">7</div>
                                <div class="col_5">5</div>

                                <!-- Grid 6-6 cols -->
                                <div class="col_6">6</div>
                                <div class="col_6">6</div>

                                <!-- Grid 1 cols -->
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="grid_fluid">

                                    <!-- Grid 12 cols -->
                                    <div class="col_12">12</div>

                                    <!-- Grid 11-1 cols -->
                                    <div class="col_11">11</div>
                                    <div class="col_1">1</div>

                                    <!-- Grid 10-2 cols -->
                                    <div class="col_10">10</div>
                                    <div class="col_2">2</div>

                                    <!-- Grid 9-3 cols -->
                                    <div class="col_9">9</div>
                                    <div class="col_3">3</div>

                                    <!-- Grid 8-4 cols -->
                                    <div class="col_8">8</div>
                                    <div class="col_4">4</div>

                                    <!-- Grid 7-5 cols -->
                                    <div class="col_7">7</div>
                                    <div class="col_5">5</div>

                                    <!-- Grid 6-6 cols -->
                                    <div class="col_6">6</div>
                                    <div class="col_6">6</div>

                                    <!-- Grid 1 cols -->
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_fluid">
                        <h1 class="title">Grid Fluid With Gutter</h1>
                        <p class="desc">Fluid grid with gutter between cols.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="grid_fluid gutter">

                                <!-- Grid 12 cols -->
                                <div class="col_12">12</div>

                                <!-- Grid 11-1 cols -->
                                <div class="col_11">11</div>
                                <div class="col_1">1</div>

                                <!-- Grid 10-2 cols -->
                                <div class="col_10">10</div>
                                <div class="col_2">2</div>

                                <!-- Grid 9-3 cols -->
                                <div class="col_9">9</div>
                                <div class="col_3">3</div>

                                <!-- Grid 8-4 cols -->
                                <div class="col_8">8</div>
                                <div class="col_4">4</div>

                                <!-- Grid 7-5 cols -->
                                <div class="col_7">7</div>
                                <div class="col_5">5</div>

                                <!-- Grid 6-6 cols -->
                                <div class="col_6">6</div>
                                <div class="col_6">6</div>

                                <!-- Grid 1 cols -->
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                                <div class="col_1">1</div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="grid_fluid gutter">

                                    <!-- Grid 12 cols -->
                                    <div class="col_12">12</div>

                                    <!-- Grid 11-1 cols -->
                                    <div class="col_11">11</div>
                                    <div class="col_1">1</div>

                                    <!-- Grid 10-2 cols -->
                                    <div class="col_10">10</div>
                                    <div class="col_2">2</div>

                                    <!-- Grid 9-3 cols -->
                                    <div class="col_9">9</div>
                                    <div class="col_3">3</div>

                                    <!-- Grid 8-4 cols -->
                                    <div class="col_8">8</div>
                                    <div class="col_4">4</div>

                                    <!-- Grid 7-5 cols -->
                                    <div class="col_7">7</div>
                                    <div class="col_5">5</div>

                                    <!-- Grid 6-6 cols -->
                                    <div class="col_6">6</div>
                                    <div class="col_6">6</div>

                                    <!-- Grid 1 cols -->
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                    <div class="col_1">1</div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_fixed_right">
                        <h1 class="title">Fixed Sidebar on Right</h1>
                        <p class="desc">Fluid Grid with Fixed sidebar on the right. After resizing the sidebar will stay fixed width and content col will resize.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="grid_fix grid_fix_right">
                                <div id="" class="fluid_col">
                                    <div class="fluid_wrap">
                                        Main Content
                                    </div>
                                </div>
                                <div id="" class="sidebar fixed_col">Sidebar</div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="grid_fix grid_fix_right">
                                    <div id="" class="fluid_col">
                                        <div class="fluid_wrap">
                                            Main Content
                                        </div>
                                    </div>
                                    <div id="" class="sidebar fixed_col">Sidebar</div>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_fixed_left">
                        <h1 class="title">Fixed Sidebar on Left</h1>
                        <p class="desc">Fluid Grid with Fixed sidebar on the left. After resizing the sidebar will stay fixed width and content col will resize.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="grid_fix grid_fix_left">
                                <div id="" class="sidebar fixed_col">Sidebar</div>
                                <div id="" class="fluid_col">
                                    <div class="fluid_wrap">
                                        Main Content
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="grid_fix grid_fix_left">
                                    <div id="" class="sidebar fixed_col">Sidebar</div>
                                    <div id="" class="fluid_col">
                                        <div class="fluid_wrap">
                                            Main Content
                                        </div>
                                    </div>
                                </div>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_form" class="block_wrap">
                    <div class="block scrollto_select">
                        <h1 class="title">Select field</h1>
                        <p class="desc">Custom select field for cross-browser suppoert.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <select>
                                <option value="1">Value 1</option>
                                <option value="2">Value 2</option>
                                <option value="3">Value 3</option>
                                <option value="4">Value 4</option>
                            </select>
                            <br/><br/><br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>If you hide and show select field using <strong>display:none</strong>, please initialise script again on show. Use <strong>select('');</strong></li>
                                        <li>if you add <strong>data-style="false"</strong> attribut to select JS will ignore this field and won't wrap it and style it.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <select>
                                    <option value="1">Value 1</option>
                                    <option value="2">Value 2</option>
                                    <option value="3">Value 3</option>
                                    <option value="4">Value 4</option>
                                </select>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_radio">
                        <h1 class="title">Radio field</h1>
                        <p class="desc">Custom radio fields for cross-browser support, checked and disabled states are supported.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <form>
                                <div class="radio field" data-group="radio_name">
                                    <input type="radio" name="radio_name" id="radio1"  />
                                    <label for="radio1"><i class="radio_icon"></i>Radio1</label>
                                </div>
                                <div class="radio field" data-group="radio_name">
                                    <input type="radio" name="radio_name" id="radio2"  />
                                    <label for="radio2"><i class="radio_icon"></i>Radio2</label>
                                </div>
                                <div class="radio field" data-group="radio_name">
                                    <input type="radio" name="radio_name" id="radio3"  />
                                    <label for="radio3"><i class="radio_icon"></i>Radio3</label>
                                </div>
                                <div class="radio field" data-group="radio_name">
                                    <input type="radio" name="radio_name" id="radio4" checked="checked" />
                                    <label for="radio4"><i class="radio_icon"></i>Checked</label>
                                </div>
                                <div class="radio field" data-group="radio_name">
                                    <input type="radio" name="radio_name" id="radio5" disabled="disabled" />
                                    <label for="radio5"><i class="radio_icon"></i>Disabled</label>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Available states: <strong>Checked</strong> and <strong>Disabled</strong>. Add to the input field.</li>
                                        <li>Attribute <strong>data-group</strong> and <strong>name</strong> must be equal on all of the fields in the radio group.</li>
                                        <li>Label <strong>for</strong> value and input <strong>id</strong> value must be equal and unique to the item.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                                <pre class="brush: xml;">
                                    <div class="radio" data-group="radio_name">
                                        <input type="radio" name="radio_name" id="radio1"  />
                                        <label for="radio1"><i class="radio_icon"></i>Radio1</label>
                                    </div>

                                    <div class="radio" data-group="radio_name">
                                        <input type="radio" name="radio_name" id="radio2"  />
                                        <label for="radio2"><i class="radio_icon"></i>Radio1</label>
                                    </div>

                                    <div class="radio" data-group="radio_name">
                                        <input type="radio" name="radio_name" id="radio3"  />
                                        <label for="radio3"><i class="radio_icon"></i>Radio1</label>
                                    </div>

                                    <div class="radio" data-group="radio_name">
                                        <input type="radio" name="radio_name" id="radio4" checked="checked" />
                                        <label for="radio4"><i class="radio_icon"></i>Checked</label>
                                    </div>

                                    <div class="radio" data-group="radio_name">
                                        <input type="radio" name="radio_name" id="radio5" disabled="disabled" />
                                        <label for="radio5"><i class="radio_icon"></i>Disabled</label>
                                    </div>
                                </pre>
                        </div>
                    </div>
                    <div class="block scrollto_checkbox">
                        <h1 class="title">Checkbox field</h1>
                        <p class="desc">Custom checkbox fields for cross-browser support, checked and disabled states are supported.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <form>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card1" name="card_name1" />
                                    <label for="card1"><i class="checkbox_icon"></i>Check1</label>
                                </div>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card2" name="card_name2" />
                                    <label for="card2"><i class="checkbox_icon"></i>Check2</label>
                                </div>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card3" name="card_name3" />
                                    <label for="card3"><i class="checkbox_icon"></i>Check3</label>
                                </div>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card4" name="card_name4" checked="checked" />
                                    <label for="card4"><i class="checkbox_icon"></i>Checked</label>
                                </div>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card5" name="card_name5" disabled="disabled"/>
                                    <label for="card5"><i class="checkbox_icon"></i>Disabled</label>
                                </div>
                                <div class="checkbox field">
                                    <input type="checkbox" id="card6" name="card_name6" checked="checked" disabled="disabled" />
                                    <label for="card6"><i class="checkbox_icon"></i>Checked and Disabled</label>
                                </div>
                            </form>
                            <br/>
                            <br/>
                            <br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Available states: <strong>Checked</strong> and <strong>Disabled</strong>. Add to the input field.</li>
                                        <li>Label <strong>for</strong> value and input <strong>id</strong> value must be equal and unique to the item.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                                <pre class="brush: xml;">
                                    <div class="checkbox">
                                        <input type="checkbox" id="card1" name="card_name1" />
                                        <label for="card1"><i class="checkbox_icon"></i>Check1</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="card2" name="card_name2" />
                                        <label for="card2"><i class="checkbox_icon"></i>Check2</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="card3" name="card_name3" />
                                        <label for="card3"><i class="checkbox_icon"></i>Check3</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="card4" name="card_name4" checked="checked" />
                                        <label for="card4"><i class="checkbox_icon"></i>Checked</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="card5" name="card_name5" disabled="disabled"/>
                                        <label for="card5"><i class="checkbox_icon"></i>Disabled</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="card6" name="card_name6" checked="checked" disabled="disabled" />
                                        <label for="card6"><i class="checkbox_icon"></i>Checked and Disabled</label>
                                    </div>
                                </pre>
                        </div>
                    </div>
                    <div class="block scrollto_text">
                        <h1 class="title">Text field</h1>
                        <p class="desc">Text field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="text" placeholder="Enter text here..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="text" placeholder="Enter text here..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_tel">
                        <h1 class="title">Telephone field</h1>
                        <p class="desc">Telephone field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="tel" placeholder="Enter phone number..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="tel" placeholder="Enter phone number..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_number">
                        <h1 class="title">Number field</h1>
                        <p class="desc">Number field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="number" placeholder="Enter number only..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="number" placeholder="Enter number only..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_email">
                        <h1 class="title">Email field</h1>
                        <p class="desc">Email field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="email" placeholder="Enter email..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="email" placeholder="Enter email..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_url">
                        <h1 class="title">Url field</h1>
                        <p class="desc">Url field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="url" placeholder="Enter url..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="url" placeholder="Enter url..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_date">
                        <h1 class="title">Date and time field</h1>
                        <p class="desc">Date and time field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="datetime" placeholder="Enter date time..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="datetime" placeholder="Enter date time..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_password">
                        <h1 class="title">Password field</h1>
                        <p class="desc">Password field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="password" placeholder="Enter password..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="password" placeholder="Enter password..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_search">
                        <h1 class="title">Search field</h1>
                        <p class="desc">Search field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <input type="search" placeholder="Enter search text..." />
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <input type="search" placeholder="Enter search text..." />
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_textarea">
                        <h1 class="title">Textarea field</h1>
                        <p class="desc">Textarea field layout</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <textarea placeholder="Enter large text..."></textarea>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <textarea placeholder="Enter large text..."></textarea>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_upload">
                        <h1 class="title">Upload field</h1>
                        <p class="desc">Custom upload field for cross-browser support.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="upload clearfix">
                                <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                                <input size="1" type="file" name="files" />
                                <a class="btn " href="#">Browse</a>
                            </div>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="upload clearfix">
                                    <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                                    <input size="1" type="file" name="files" />
                                    <a class="btn " href="#">Browse</a>
                                </div>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_field_error">
                        <h1 class="title">Error state on field</h1>
                        <p class="desc">Error state on field on submiting form.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <form>
                                <div class="field">
                                    <input type="text" placeholder="Input text placeholder..." />
                                    <div class="error">Error message</div>
                                </div>
                            </form>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <form>
                                    <div class="field">
                                        <input type="text" placeholder="Input text placeholder..." />
                                        <div class="error">Error message</div>
                                    </div>
                                </form>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_form_field">
                        <h1 class="title">Form field</h1>
                        <p class="desc">Every field in the form should be wrapped in div.field </p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <form>
                                <div class="field">
                                    <input type="text" placeholder="Input text placeholder..." />
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Input text placeholder..." />
                                </div>
                                <div class="field">
                                    <button>Submit button</button>
                                </div>
                            </form>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <form>
                                    <div class="field">
                                        <input type="text" placeholder="Input text placeholder..." />
                                    </div>
                                    <div class="field">
                                        <input type="text" placeholder="Input text placeholder..." />
                                    </div>
                                    <div class="field">
                                        <button>Submit button</button>
                                    </div>
                                </form>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_js_form">
                        <h1 class="title">Forms Fields - Manual actions using JS</h1>
                        <p class="desc">Functions to use in Js, checkbox and radio functions to use in onclick actions.</p>
                        <div class="content">
                            <pre class="brush: js;">
                                jQuery(document).ready(function(){

                                    //Accepting different container name then ".select"
                                    //Use to reinitialize on ajax
                                    select('');

                                    //Accepting input ID for manual initialization.
                                    //Use to reinitialize on ajax
                                    checkbox('');

                                    //Force Checbox to unset (must enter ID of input)
                                    checkbox_unset('')

                                    //Accepting input ID for manual initialization.
                                    //Use to reinitialize on ajax
                                    radio('');

                                });
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_table" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Table</h1>
                        <p class="desc">Table layout styling</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="acenter">Qty</th>
                                        <th>Price</th>
                                        <th class="aright">Total</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Product 1</td>
                                        <td class="acenter">10</td>
                                        <td>&euro; 20.00</td>
                                        <td class="aright">&euro; 200.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th class="acenter">Qty</th>
                                            <th>Price</th>
                                            <th class="aright">Total</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Product 1</td>
                                            <td class="acenter">10</td>
                                            <td>&euro; 20.00</td>
                                            <td class="aright">&euro; 200.00</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_divider" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Divider</h1>
                        <p class="desc">Divider with bottom border and spacing on top or bottom. Add class mar_bottom, mar_top, pad_top or pad_bottom with number from 10-100 which corresponds to margin-top and margin-bottom. General used in content styling.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="divider mar_bottom20 mar_top20"></div>

                            <br/>
                            <br/>
                            <br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Available Classes - bottom 10-100 (etc. mar_bottom20) and top 10-100 (etc. mar_top40).</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="divider mar_bottom20 mar_top20"></div>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_msg" class="block_wrap">
                    <div class="block scrollto_msg_error">
                        <h1 class="title">Msg Error</h1>
                        <p class="desc">Messages with Error color</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="msg">
                               <li class="error_msg">
                                   <ul>
                                       <li>Msg error 1</li>
                                       <li>Msg error 2</li>
                                       <li>Msg error 3</li>
                                   </ul>
                               </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="msg">
                                    <li class="error_msg">
                                        <ul>
                                            <li>Msg error 1</li>
                                            <li>Msg error 2</li>
                                            <li>Msg error 3</li>
                                        </ul>
                                    </li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_msg_success">
                        <h1 class="title">Msg Success</h1>
                        <p class="desc">Messages with Success color</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="msg">
                                <li class="success_msg">
                                    <ul>
                                        <li>Msg success 1</li>
                                        <li>Msg success 2</li>
                                        <li>Msg success 3</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="msg">
                                    <li class="success_msg">
                                        <ul>
                                            <li>Msg success 1</li>
                                            <li>Msg success 2</li>
                                            <li>Msg success 3</li>
                                        </ul>
                                    </li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_msg_notice">
                        <h1 class="title">Msg Notice</h1>
                        <p class="desc">Messages with Notice color</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Msg notice 1</li>
                                        <li>Msg notice 2</li>
                                        <li>Msg notice 3</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="msg">
                                    <li class="notice_msg">
                                        <ul>
                                            <li>Msg notice 1</li>
                                            <li>Msg notice 2</li>
                                            <li>Msg notice 3</li>
                                        </ul>
                                    </li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                    <div class="block scrollto_msg_warning">
                        <h1 class="title">Msg Warning</h1>
                        <p class="desc">Messages with Warning color</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="msg">
                                <li class="warning_msg">
                                    <ul>
                                        <li>Msg warning 1</li>
                                        <li>Msg warning 2</li>
                                        <li>Msg warning 3</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="msg">
                                    <li class="warning_msg">
                                        <ul>
                                            <li>Msg warning 1</li>
                                            <li>Msg warning 2</li>
                                            <li>Msg warning 3</li>
                                        </ul>
                                    </li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_navigation" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Navigation with float</h1>
                        <p class="desc">Structure for horizontal navigation</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="nav">
                                <li><a href="#">Link1</a></li>
                                <li><a href="#">Link2</a></li>
                                <li><a href="#">Link3</a></li>
                                <li><a href="#">Link4</a></li>
                                <li><a href="#">Link5</a></li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="nav">
                                    <li><a href="#">Link1</a></li>
                                    <li><a href="#">Link2</a></li>
                                    <li><a href="#">Link3</a></li>
                                    <li><a href="#">Link4</a></li>
                                    <li><a href="#">Link5</a></li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                    <div class="block">
                        <h1 class="title">Navigation with display inline</h1>
                        <p class="desc">Structure for horizontal navigation</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <ul class="navi">
                                <li><a href="#">Link1</a></li>
                                <li><a href="#">Link2</a></li>
                                <li><a href="#">Link3</a></li>
                                <li><a href="#">Link4</a></li>
                                <li><a href="#">Link5</a></li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <ul class="navi">
                                    <li><a href="#">Link1</a></li>
                                    <li><a href="#">Link2</a></li>
                                    <li><a href="#">Link3</a></li>
                                    <li><a href="#">Link4</a></li>
                                    <li><a href="#">Link5</a></li>
                                </ul>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_crossbrowser" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Cross-Browser</h1>
                        <p class="desc">99% of the framework is supported in modern browsers but IE9 lacks some functionality so include some scripts for fixes.</p>
                        <div class="content content_style">
                            <p>Framework is supported in all major modern browsers. Some functionality are missed in IE, but IE sucks so no matter :D</p>
                            <p><strong>We support:</strong></p>
                            <ul class="list">
                                <li>Google Chrome</li>
                                <li>Firefox</li>
                                <li>Opera</li>
                                <li>Safary</li>
                                <li>IE 9, 10, 11</li>
                            </ul>
                        </div>
                        <ul class="msg">
                            <li class="warning_msg">
                                <ul>
                                    <li>We don't support IE under 9 (5, 6, 7, 8).</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="block scrollto_ie9">
                        <h1 class="title">IE 9 fixes</h1>
                        <p class="desc">Additional fixes for IE 9 details.</p>
                        <div class="content">
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>IE9 doesn't support placeholder so include <strong>placeholder.js</strong> script.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="block scrollto_ie8">
                        <h1 class="title">IE 8 fixes</h1>
                        <p class="desc">So we don't support IE8 and less but to enable HTML5 tags just add this peace of script.</p>
                        <div class="content">
                            <pre class="brush: xml">
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
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_mixins" class="block_wrap">
                    <div class="block scrollto_linkcolor">
                        <h1 class="title">Mixin - Link Color</h1>
                        <p class="desc">Mixin for creating link color styles located in global/variables.scss</p>
                        <div class="content content_style">
                            <pre class="brush: sass;">
                                @mixin link_color($color:$primary_link_color, $color_hover:$hover_link_color);
                            </pre>
                            <br/><br/>
                            <p><strong>Variables explanation:</strong></p>
                            <ul class="list">
                                <li>$color - color of links</li>
                                <li>$color_hover - hover state color</li>
                            </ul>
                        </div>
                    </div>
                    <div class="block scrollto_btncolor">
                        <h1 class="title">Mixin - Button Color</h1>
                        <p class="desc">Mixin for creating button color styles located in global/variables.scss</p>
                        <div class="content content_style">
                            <pre class="brush: sass;">
                                @mixin btn_color($bg:$button_background_color, $text:$button_text_color, $border:false, $bg_hover:false, $text_hover:false, $border_hover:false)
                            </pre>
                            <br/><br/>
                            <p><strong>Variables explanation:</strong></p>
                            <ul class="list">
                                <li>$bg - background color</li>
                                <li>$text - text color</li>
                                <li>$border - border color</li>
                                <li>$bg_hover - background color on hover</li>
                                <li>$text_hover - text color on hover</li>
                                <li>$border_hover - border color on hover</li>
                            </ul>
                        </div>
                    </div>
                    <div class="block scrollto_font">
                        <h1 class="title">Mixin - Custom font</h1>
                        <p class="desc">Mixin for creating custom font includes global/variables.scss, include custom font in global/typography.scss</p>
                        <div class="content content_style">
                            <pre class="brush: sass;">
                                @mixin font_face($font-family, $file-path, $weight: normal, $style: normal )
                            </pre>
                            <br/><br/>
                            <p><strong>Variables explanation:</strong></p>
                            <ul class="list">
                                <li>$font-family - font name to use in font-family tags</li>
                                <li>$file-path - location relative to css file without extension</li>
                                <li>$weight - font weigth</li>
                                <li>$style - font style</li>
                            </ul>
                        </div>
                    </div>
                    <div class="block">
                        <ul class="msg">
                            <li class="notice_msg">
                                <ul>
                                    <li>Framework is using Compass open-source framework and you can use all it's mixins.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="block_equalHeight" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Cols Equal Height calculator</h1>
                        <p class="desc">To add col to equal height calculator just add data-mh="" tag and input value. You need equalHeight.js script for this to work.</p>
                        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
                        <div class="content">
                            <div class="grid_fluid gutter">
                                <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus urna lectus, sed tincidunt velit bibendum id. Cras placerat vel arcu interdum condimentum. Donec lacinia elit mi, non vestibulum justo sollicitudin non. Vivamus erat orci, iaculis vitae odio sed, efficitur tincidunt sem</div>
                                <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus urna lectus, sed tincidunt velit bibendum id. Cras placerat vel arcu interdum condimentum. Donec lacinia elit mi, non vestibulum justo sollicitudin non. Vivamus erat orci, iaculis vitae odio sed, efficitur tincidunt sem. Nunc consequat lectus non libero rutrum, at dapibus augue lacinia. Donec non metus maximus, mollis dolor quis, tincidunt sem. Phasellus eget lectus malesuada, rutrum diam in, rhoncus eros. Sed accumsan tempus turpis id convallis. </div>
                                <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            </div>
                            <br/><br/><br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>For this functionality to work you need to include <strong>equalHeight.js</strong> script</li>
                                        <li>On cols in equal height add attribute <strong>data-mh</strong>.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="source">
                            <pre class="brush: xml;">
                                <div class="grid_fluid gutter">
                                    <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus urna lectus, sed tincidunt velit bibendum id. Cras placerat vel arcu interdum condimentum. Donec lacinia elit mi, non vestibulum justo sollicitudin non. Vivamus erat orci, iaculis vitae odio sed, efficitur tincidunt sem</div>
                                    <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus urna lectus, sed tincidunt velit bibendum id. Cras placerat vel arcu interdum condimentum. Donec lacinia elit mi, non vestibulum justo sollicitudin non. Vivamus erat orci, iaculis vitae odio sed, efficitur tincidunt sem. Nunc consequat lectus non libero rutrum, at dapibus augue lacinia. Donec non metus maximus, mollis dolor quis, tincidunt sem. Phasellus eget lectus malesuada, rutrum diam in, rhoncus eros. Sed accumsan tempus turpis id convallis. </div>
                                    <div class="col_4" data-mh="group">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                            </pre>
                        </div>
                    </div>
                </div>

                <div id="block_sticky" class="block_wrap">
                    <div class="block">
                        <h1 class="title">Sticky Object on Scroll</h1>
                        <p class="desc">Make header or any other object stick to top or bottom on window scroll</p>
                        <div class="content">

                            <pre class="brush: js;">
                                jQuery(document).ready(function(){

                                    //Add class or id to function to make object sticky
                                    sticky(id)

                                });
                            </pre>
                            <br/>
                            <br/>
                            <br/>
                            <ul class="msg">
                                <li class="notice_msg">
                                    <ul>
                                        <li>Add <strong>sticky(id)</strong> function and for id input any class you want to stick and just stylize sticky class.</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

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
<script type="text/javascript" src="js/equalHeight.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/placeholder.js"></script>


<script src="preview/syntaxhighlighter/js/shCore.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushJScript.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushXml.js" type="text/javascript"></script>
<script src="preview/syntaxhighlighter/js/shBrushSass.js" type="text/javascript"></script>
<link href="preview/syntaxhighlighter/shCoreDefault.css"type="text/css" rel="stylesheet"/>
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
            select('');
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
            select('');
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