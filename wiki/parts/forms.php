<?php include('../content/head.php') ?>
<?php include('../content/header.php') ?>

    <div class="block move_clear_bottom" id="Forms">
        <div class="b_title">
            <h1 class="title move_small_bottom">Regular Size</h1>
            <p class="subtitle">Standard multi-column responsive form - medium input field size</p>
        </div>
        <div class="b_content">
            <form>
                <div class="grid_fluid">
                    <div class="col_l_4">
                        <div class="field">
                            <label for="text">Text Field Label</label>
                            <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="tel">Phone Field Label</label>
                            <input type="tel" value="" placeholder="Placeholder phone" name="tel" id="tel" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="email">Email Field Label</label>
                            <input type="email" value="" placeholder="Placeholder email" name="email" id="email" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
               <form action="" method="">
                   <div class="field">
                       <label for="text">Text Field Label</label>
                       <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                   </div>
               </form>
            </pre>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="block move_clear_bottom" id="Forms_Large">
        <div class="b_title">
            <h1 class="title move_small_bottom">Large Size</h1>
            <p class="subtitle">Standard multi-column responsive form - large input field size</p>
        </div>
        <div class="b_content">
            <form class="input_large">
                <div class="grid_fluid">
                    <div class="col_l_4">
                        <div class="field">
                            <label for="text">Text Field Label</label>
                            <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="tel">Phone Field Label</label>
                            <input type="tel" value="" placeholder="Placeholder phone" name="tel" id="tel" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="email">Email Field Label</label>
                            <input type="email" value="" placeholder="Placeholder email" name="email" id="email" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
               <form action="" method="" class="input_large">
                   <div class="field">
                       <label for="text">Text Field Label</label>
                       <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                   </div>
               </form>
            </pre>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="block move_clear_bottom" id="Forms_Small">
        <div class="b_title">
            <h1 class="title move_small_bottom">Small Size</h1>
            <p class="subtitle">Standard multi-column responsive form - small input field size</p>
        </div>
        <div class="b_content">
            <form class="input_small">
                <div class="grid_fluid">
                    <div class="col_l_4">
                        <div class="field">
                            <label for="text">Text Field Label</label>
                            <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="tel">Phone Field Label</label>
                            <input type="tel" value="" placeholder="Placeholder phone" name="tel" id="tel" />
                        </div>
                    </div>
                    <div class="col_l_4">
                        <div class="field">
                            <label for="email">Email Field Label</label>
                            <input type="email" value="" placeholder="Placeholder email" name="email" id="email" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
               <form action="" method="" class="input_small">
                   <div class="field">
                       <label for="text">Text Field Label</label>
                       <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                   </div>
               </form>
            </pre>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="block move_clear_bottom" id="Select">
        <div class="b_title">
            <h1 class="title move_small_bottom">Select</h1>
            <p class="subtitle">Standard responsive drop-down menu with support for keyboard shortcuts</p>
        </div>
        <div class="b_content">
            <form>
                <div class="field">
                    <label for="select">Select Field Label</label>
                    <select name="select" id="select">
                        <option value="1">Value 1</option>
                        <option value="2">Value 2</option>
                        <option value="3">Value 3</option>
                        <option value="4">Value 4</option>
                    </select>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
               <form action="" method="">
                   <div class="field">
                       <label for="select">Select Field Label</label>
                       <select name="select" id="select">
                           <option value="1">Value 1</option>
                           <option value="2">Value 2</option>
                           <option value="3">Value 3</option>
                           <option value="4">Value 4</option>
                       </select>
                   </div>
               </form>
            </pre>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="grid_fluid">
        <div class="col_l_6">
            <div class="block move_clear_bottom" id="Checkbox">
                <div class="b_title">
                    <h1 class="title move_small_bottom">Checkbox</h1>
                    <p class="subtitle">Standard responsive checkbox-type input with support for keyboard shortcuts - use Space key to toggle the state</p>
                </div>
                <div class="b_content">
                    <form>
                        <div class="field">
                            <div class="checkbox">
                                <input type="checkbox" id="card1" name="card_name1" />
                                <label for="card1"><i class="checkbox_icon"></i>Check1</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="checkbox">
                                <input type="checkbox" id="card2" name="card_name2" checked="checked" />
                                <label for="card2"><i class="checkbox_icon"></i>Checked</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="checkbox">
                                <input type="checkbox" id="card3" name="card_name3" disabled="disabled"/>
                                <label for="card3"><i class="checkbox_icon"></i>Disabled</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="checkbox">
                                <input type="checkbox" id="card4" name="card_name4" checked="checked" disabled="disabled" />
                                <label for="card4"><i class="checkbox_icon"></i>Checked and Disabled</label>
                            </div>
                        </div>
                    </form>
                    <div class="spacer move_small"></div>
                    <pre class="brush: xml;">
                        <div class="checkbox">
                            <input type="checkbox" id="card1" name="card_name1" />
                            <label for="card1"><i class="checkbox_icon"></i>Check1</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" id="card3" name="card_name3" disabled="disabled"/>
                            <label for="card3"><i class="checkbox_icon"></i>Disabled</label>
                        </div>

                        <div class="checkbox">
                            <input type="checkbox" id="card4" name="card_name4" checked="checked" disabled="disabled" />
                            <label for="card4"><i class="checkbox_icon"></i>Checked and Disabled</label>
                        </div>
                    </pre>
                </div>
            </div>
        </div>
        <div class="col_l_6">
            <div class="block move_clear_bottom" id="Radio">
                <div class="b_title">
                    <h1 class="title move_small_bottom">Radio</h1>
                    <p class="subtitle">Standard responsive radio button input with support for keyboard shortcuts - use arrow keys to navigate</p>
                </div>
                <div class="b_content">
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
                                <input type="radio" name="radio_name" id="radio3" checked="checked" />
                                <label for="radio3"><i class="radio_icon"></i>Checked</label>
                            </div>
                        </div>
                        <div class="field">
                            <div class="radio" data-group="radio_name">
                                <input type="radio" name="radio_name" id="radio4" disabled="disabled" />
                                <label for="radio4"><i class="radio_icon"></i>Disabled</label>
                            </div>
                        </div>
                    </form>
                    <div class="spacer move_small"></div>
                    <pre class="brush: xml;">
                        <div class="radio" data-group="radio_name">
                            <input type="radio" name="radio_name" id="radio2"  />
                            <label for="radio2"><i class="radio_icon"></i>Radio2</label>
                        </div>

                        <div class="radio" data-group="radio_name">
                            <input type="radio" name="radio_name" id="radio3" checked="checked" />
                            <label for="radio3"><i class="radio_icon"></i>Checked</label>
                        </div>

                        <div class="radio" data-group="radio_name">
                            <input type="radio" name="radio_name" id="radio4" disabled="disabled" />
                            <label for="radio4"><i class="radio_icon"></i>Disabled</label>
                        </div>
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="block move_clear_bottom" id="Upload">
        <div class="b_title">
            <h1 class="title move_small_bottom">Upload</h1>
            <p class="subtitle">Standard responsive file upload dialog (triggered by a click on the field or the button)</p>
        </div>
        <div class="b_content">
            <form>
                <div class="field">
                    <div class="upload">
                        <div class="grid_half">
                            <div class="col_l_12">
                                <label for="file">File Upload Field Label</label>
                            </div>
                            <div class="col_l_9">
                                <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                                <input size="1" type="file" name="files" />
                            </div>
                            <div class="col_l_3">
                                <a class="btn btn_sushi_border" href="#">Browse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
                <div class="upload">
                    <div class="grid_half">
                        <div class="col_l_12">
                            <label for="file">File Upload Field Label</label>
                        </div>
                        <div class="col_l_9">
                            <input type="text" placeholder="Upload a file from your computer" autocomplete="off" />
                            <input size="1" type="file" name="files" />
                        </div>
                        <div class="col_l_3">
                            <a class="btn btn_sushi_border" href="#">Browse</a>
                        </div>
                    </div>
                </div>
            </pre>
        </div>
    </div>

    <div class="divider border_bottom"></div>

    <div class="block move_clear_bottom" id="Error">
        <div class="b_title">
            <h1 class="title move_small_bottom">Input error</h1>
            <p class="subtitle">Standard input field validation error message</p>
        </div>
        <div class="b_content">
            <form>
                <div class="field">
                    <label for="text">Text Field Label</label>
                    <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                    <div class="error">Error message</div>
                </div>
            </form>
            <div class="spacer move_small"></div>
            <pre class="brush: xml;">
                <div class="field">
                    <label for="text">Text Field Label</label>
                    <input type="text" value="" placeholder="Placeholder text" name="text" id="text" />
                    <div class="error">Error message</div>
                </div>
            </pre>
        </div>
    </div>


<?php include('../content/footer.php') ?>

