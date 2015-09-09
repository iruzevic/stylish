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
            <div class="field">
                <div class="radio" data-group="radio_name">
                    <input type="radio" name="radio_name" id="radio1"  />
                    <label for="radio1"><i class="radio_icon"></i>Radio1</label>
                </div>
            </div>
            <div class="field">
                <div class="radio" data-group="radio_name">
                    <input type="radio" name="radio_name" id="radio2"  />
                    <label for="radio2"><i class="radio_icon"></i>Radio2</label>
                </div>

            </div>
            <div class="field">
                <div class="radio" data-group="radio_name">
                    <input type="radio" name="radio_name" id="radio3"  />
                    <label for="radio3"><i class="radio_icon"></i>Radio3</label>
                </div>
            </div>
            <div class="field">
                <div class="radio" data-group="radio_name">
                    <input type="radio" name="radio_name" id="radio4" checked="checked" />
                    <label for="radio4"><i class="radio_icon"></i>Checked</label>
                </div>
            </div>
            <div class="field">
                <div class="radio" data-group="radio_name">
                    <input type="radio" name="radio_name" id="radio5" disabled="disabled" />
                    <label for="radio5"><i class="radio_icon"></i>Disabled</label>
                </div>
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
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card1" name="card_name1" />
                    <label for="card1"><i class="checkbox_icon"></i>Check1</label>
                </div>
            </div>
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card2" name="card_name2" />
                    <label for="card2"><i class="checkbox_icon"></i>Check2</label>
                </div>
            </div>
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card3" name="card_name3" />
                    <label for="card3"><i class="checkbox_icon"></i>Check3</label>
                </div>
            </div>
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card4" name="card_name4" checked="checked" />
                    <label for="card4"><i class="checkbox_icon"></i>Checked</label>
                </div>
            </div>
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card5" name="card_name5" disabled="disabled"/>
                    <label for="card5"><i class="checkbox_icon"></i>Disabled</label>
                </div>
            </div>
            <div class="field">
                <div class="checkbox">
                    <input type="checkbox" id="card6" name="card_name6" checked="checked" disabled="disabled" />
                    <label for="card6"><i class="checkbox_icon"></i>Checked and Disabled</label>
                </div>
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
        <div class="upload">
            <div class="grid_half">
                <div class="col_8">
                    <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                    <input size="1" type="file" name="files" />
                </div>
                <div class="col_4">
                    <a class="btn " href="#">Browse</a>
                </div>
            </div>
        </div>
    </div>
    <div class="source">
        <pre class="brush: xml;">
            <div class="upload">
                <div class="grid_half">
                    <div class="col_8">
                        <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                        <input size="1" type="file" name="files" />
                    </div>
                    <div class="col_4">
                        <a class="btn " href="#">Browse</a>
                    </div>
                </div>
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
                                    select();

                                    //Accepting input ID for manual initialization.
                                    //Use to reinitialize on ajax
                                    checkbox();

                                    //Force Checbox to unset (must enter ID of input)
                                    checkbox_unset('')

                                    //Accepting input ID for manual initialization.
                                    //Use to reinitialize on ajax
                                    radio();

                                });
                            </pre>
    </div>
</div>
</div>