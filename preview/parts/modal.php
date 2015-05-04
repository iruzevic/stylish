<div id="block_modal" class="block_wrap">
    <div class="block scrollto_scale">
        <h1 class="title">Modal Window Scale Show</h1>
        <p class="desc">Modal window to open, add data-slide="scale" to scale open.</p>
        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
        <div class="content">
            <a href="#" class="btn open_modal auto_width" data-modal="Modal1">Open Modal</a>

            <div class="modal" data-modal="Modal1" data-slide="scale">
                <div class="m_overlay"></div>
                <div class="m_wrap">
                    <div class="m_content_wrap">
                        <div class="m_content">
                            <a class="close_modal" href="#"></a>
                            Content
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="source">
            <pre class="brush: xml;">
                <a href="#" class="btn open_modal" data-modal="Modal1">Open Modal</a>
                <div class="modal" data-modal="Modal1" data-slide="scale">
                    <div class="m_overlay"></div>
                    <div class="m_wrap">
                        <div class="m_content_wrap">
                            <div class="m_content">
                                <a class="close_modal" href="#"></a>
                                Content
                            </div>
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
            <a href="#" class="btn open_modal auto_width" data-modal="Modal2">Open Modal</a>
            <div class="modal" data-modal="Modal2" data-slide="top">
                <div class="m_overlay"></div>
                <div class="m_wrap">
                    <div class="m_content_wrap">
                        <div class="m_content">
                            <a class="close_modal" href="#"></a>
                            Content
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <a href="#" class="btn open_modal" data-modal="Modal2">Open Modal</a>

                <div class="modal" data-modal="Modal2" data-slide="top">
                    <div class="m_overlay"></div>
                    <div class="m_wrap">
                        <div class="m_content_wrap">
                            <div class="m_content">
                                <a class="close_modal" href="#"></a>
                                Content
                            </div>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </div>
    <div class="block scrollto_full">
        <h1 class="title">Modal Window Full size</h1>
        <p class="desc">Modal window to open, data-size="full"</p>
        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
        <div class="content">
            <a href="#" class="btn open_modal auto_width" data-modal="Modal3">Open Modal</a>
            <div class="modal" data-modal="Modal3" data-slide="scale" data-size="full">
                <div class="m_overlay"></div>
                <div class="m_wrap">
                    <div class="m_content_wrap">
                        <div class="m_content">
                            <a class="close_modal" href="#"></a>
                            Content
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <a href="#" class="btn open_modal" data-modal="Modal3">Open Modal</a>

                <div class="modal" data-modal="Modal3" data-slide="scale" data-size="full">
                    <div class="m_overlay"></div>
                    <div class="m_wrap">
                        <div class="m_content_wrap">
                            <div class="m_content">
                                <a class="close_modal" href="#"></a>
                                Content
                            </div>
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
                    <li>Modal - Attribute <strong>data-slide</strong> sets the way the modal is going to open - Scale or Top</li>
                    <li>Modal - Attribute <strong>data-close-on-overlay</strong> true or false.</li>
                    <li>Modal - Attribute <strong>data-close-on-esc</strong> true or false.</li>
                    <li>Modal - Attribute <strong>data-close-on-btn</strong> true or false.</li>
                </ul>
            </li>
        </ul>
    </div>
</div>