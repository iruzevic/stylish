<div id="block_tabs" class="block_wrap">
    <div class="block">
        <h1 class="title">Tabs</h1>
        <p class="desc">Tabs layout structure.  and </p>
        <a class="open_source" href="#"><i class="sy_menu"></i></a>
        <div class="content">
            <div class="tabs" data-active="1">
                <ul class="t_head nav" data-items="5">
                    <li data-tab="1">Tab 1</li>
                    <li data-tab="2">Tab 2</li>
                    <li data-tab="3">Tab 3</li>
                    <li data-tab="4">Tab 4</li>
                    <li data-tab="5">Tab 5</li>
                </ul>
                <div class="t_content" data-content="1">
                    <div class="t_content_wrap">
                        Content1
                    </div>
                </div>
                <div class="t_content" data-content="2">
                    <div class="t_content_wrap">
                        Content2
                    </div>
                </div>
                <div class="t_content" data-content="3">
                    <div class="t_content_wrap">
                        Content3
                    </div>
                </div>
                <div class="t_content" data-content="4">
                    <div class="t_content_wrap">
                        Content4
                    </div>
                </div>
                <div class="t_content" data-content="5">
                    <div class="t_content_wrap">
                        Content5
                    </div>
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
                        <li>Attribute <strong>data-items</strong> sets tabs count to set width of each item like in navigation, will not work without nav class.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <div class="tabs" data-active="1">
                    <ul class="t_head nav" data-items="5">
                        <li data-tab="1">Tab 1</li>
                        <li data-tab="2">Tab 2</li>
                        <li data-tab="3">Tab 3</li>
                        <li data-tab="4">Tab 4</li>
                        <li data-tab="5">Tab 5</li>
                    </ul>
                    <div class="t_content" data-content="1">
                        <div class="t_content_wrap">
                            Content1
                        </div>
                    </div>
                    <div class="t_content" data-content="2">
                        <div class="t_content_wrap">
                            Content2
                        </div>
                    </div>
                    <div class="t_content" data-content="3">
                        <div class="t_content_wrap">
                            Content3
                        </div>
                    </div>
                    <div class="t_content" data-content="4">
                        <div class="t_content_wrap">
                            Content4
                        </div>
                    </div>
                    <div class="t_content" data-content="5">
                        <div class="t_content_wrap">
                            Content5
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </div>
</div>