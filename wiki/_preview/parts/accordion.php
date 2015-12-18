<div id="block_accordion" class="block_wrap">
    <div class="block  scrollto_auto">
        <h1 class="title">Accordion Auto Close</h1>
        <p class="desc">Accordion style classic behavior</p>
        <a class="open_source" href="#"><i class="sy_menu"></i></a>
        <div class="content">
            <div class="accordion" data-active="1" data-autoclose=""> <!-- Auto Close - true or false; default:true -->
                <div class="a_head" data-acc="1">Title1 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="1">Content1</div>
                <div class="a_head" data-acc="2">Title2 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="2">Content2</div>
                <div class="a_head" data-acc="3">Title3 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="3">Content3</div>
            </div>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <div class="accordion" data-active="1" data-autoclose=""> <!-- Auto Close - true or false; default:true -->
                    <div class="a_head" data-acc="1">Title1 <i class="a_state sy_arrow_down"></i></div>
                    <div class="a_content" data-content="1">Content1</div>
                    <div class="a_head" data-acc="2">Title2 <i class="a_state sy_arrow_down"></i></div>
                    <div class="a_content" data-content="2">Content2</div>
                    <div class="a_head" data-acc="3">Title3 <i class="a_state sy_arrow_down"></i></div>
                    <div class="a_content" data-content="3">Content3</div>
                </div>
            </pre>
        </div>
    </div>

    <div class="block  scrollto_manual">
        <h1 class="title">Accordion Manual Close</h1>
        <p class="desc">Accordion style if data-autoclose is false on head click won't close previous active state.</p>
        <a class="open_source" href="#"><i class="sy_menu"></i></a>
        <div class="content">
            <div class="accordion" data-active="1" data-autoclose="false"> <!-- Auto Close - true or false; default:true -->
                <div class="a_head" data-acc="1">Title1 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="1">Content1</div>
                <div class="a_head" data-acc="2">Title2 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="2">Content2</div>
                <div class="a_head" data-acc="3">Title3 <i class="a_state sy_arrow_down"></i></div>
                <div class="a_content" data-content="3">Content3</div>
            </div>
        </div>
        <div class="source">
            <pre class="brush: xml;">
                <div class="accordion" data-active="1" data-autoclose="false"> <!-- Auto Close - true or false; default:true -->
                    <div class="a_head" data-acc="1">Title1 <i class="a_state sy_arrow_down"></i></div>
                    <div class="a_content" data-content="1">Content1</div>
                    <div class="a_head" data-acc="2">Title2 <i class="a_state sy_arrow_down"></i></div>
                    <div class="a_content" data-content="2">Content2</div>
                    <div class="a_head" data-acc="3">Title3 <i class="a_state sy_arrow_down"></i></div>
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