<div id="block_divider" class="block_wrap">
    <div class="block">
        <h1 class="title">Divider</h1>
        <p class="desc">Divider with bottom border and spacing on top or bottom. Add class m_bottom, m_top, p_top or p_bottom with number from 10-100 which corresponds to margin-top and margin-bottom. General used in content styling.</p>
        <a class="open_source" href="#"><i class="sy_menu"></i></a>
        <div class="content">
            <div class="divider m_bottom20 m_top20"></div>

            <br/>
            <br/>
            <br/>
            <ul class="msg">
                <li class="notice_msg">
                    <ul>
                        <li>Available Classes - bottom 10-100 (etc. m_bottom20) and top 10-100 (etc. m_top40).</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="source">
                            <pre class="brush: xml;">
                                <div class="divider m_bottom20 m_top20"></div>
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
        <a class="open_source" href="#"><i class="sy_menu"></i></a>
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