<div id="block_tabs" class="block_wrap">
    <div class="block">
        <h1 class="title">Tabs</h1>
        <p class="desc">Tabs layout structure.  and </p>
        <a class="open_source" href="#"><i class="fa fa-file-code-o"></i></a>
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
                        <li>Attribute <strong>data-items</strong> sets tabs count to set width of each item like in navigation.</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <div class="tabs" data-active="1" data-tabs="5">
                    <ul class="t_head nav" data-items="5">
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