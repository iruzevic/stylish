<?php include('content/head.php') ?>
<?php include('content/header.php') ?>

    <div class="block move_clean_bottom">
        <div class="b_title">
            <h1 class="title">Installation instructions</h1>
            <p class="subtitle">Set of instructions to setup framework on new project.</p>
        </div>
        <div class="b_content content_style">
            <ul class="list">
                <li>install ruby</li>
                <li>install nodeJS</li>
                <li>install compass "gem install compass"</li>
                <li>install sass "gem install sass"</li>
                <li>install grunt "npm install -g grunt-cli"</li>
                <li>go to assets folder and install dependencies "npm install grunt"</li>
            </ul>
        </div>
    </div>

    <div class="divider"></div>

    <div class="block move_clean_bottom">
        <div class="b_title">
            <h1 class="title">Steps for installation</h1>
        </div>
        <div class="b_content content_style">
            <ol class="list">
                <li>copy framework folders and files in your project folder</li>
                <li>in console go to assets folder an enter "grunt watch"</li>
                <li>and that is it, you are ready to edit files</li>
            </ol>
        </div>
    </div>

    <div class="divider"></div>

    <div class="block move_clean_bottom">
        <div class="b_title">
            <h1 class="title">Terminal commands</h1>
        </div>
        <div class="b_content content_style">
            <ul class="list">
                <li>gem install compass (installs compass)</li>
                <li>gem install sass (install sass)</li>
                <li>npm install -g grunt-cli (install grunt files)</li>
                <li>npm install</li>
                <li>grunt dev (compiles grunt file to dev instance)</li>
                <li>grunt prod (compiles grunt file to prod instance)</li>
                <li>grunt clean (cleans all grunt compiled fields)</li>
                <li>grunt watch (watches changes in grunt files)</li>
            </ul>
        </div>
    </div>
    <ul class="msg">
        <li class="notice_msg">
            <ul>
                <li>Framework is using Compass open-source framework and you can use all it's functionality.</li>
            </ul>
        </li>
    </ul>




<?php include('content/footer.php') ?>