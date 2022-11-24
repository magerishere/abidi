<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{$title}}
            </h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div id="alerts"></div>
            <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" id="textarea-font"
                       title="فونت"><i class="fa fa-font"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="اندازه فونت"><i
                            class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a data-edit="fontSize 5">
                                <p style="font-size:17px">بزرگ</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 3">
                                <p style="font-size:14px">معمولی</p>
                            </a>
                        </li>
                        <li>
                            <a data-edit="fontSize 1">
                                <p style="font-size:11px">کوچک</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="bold" title="درشت (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                    <a class="btn" data-edit="italic" title="ایتالیک (Ctrl/Cmd+I)"><i
                            class="fa fa-italic"></i></a>
                    <a class="btn" data-edit="strikethrough" title="خط خورده"><i
                            class="fa fa-strikethrough"></i></a>
                    <a class="btn" data-edit="underline" title="زیرخط (Ctrl/Cmd+U)"><i
                            class="fa fa-underline"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="insertunorderedlist" title="لیست دایره ای"><i
                            class="fa fa-list-ul"></i></a>
                    <a class="btn" data-edit="insertorderedlist" title="لیست عددی"><i
                            class="fa fa-list-ol"></i></a>
                    <a class="btn" data-edit="outdent" title="کاهش دندانه (Shift+Tab)"><i
                            class="fa fa-dedent"></i></a>
                    <a class="btn" data-edit="indent" title="دنداره (Tab)"><i class="fa fa-indent"></i></a>
                </div>

                <div class="btn-group">

                    <a class="btn" data-edit="justifyright" title="تراز راست (Ctrl/Cmd+R)"><i
                            class="fa fa-align-right"></i></a>
                    <a class="btn" data-edit="justifycenter" title="وسط (Ctrl/Cmd+E)"><i
                            class="fa fa-align-center"></i></a>
                    <a class="btn" data-edit="justifyleft" title="تراز چپ (Ctrl/Cmd+L)"><i
                            class="fa fa-align-left"></i></a>
                    <a class="btn" data-edit="justifyfull" title="جاستیفای (Ctrl/Cmd+J)"><i
                            class="fa fa-align-justify"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="ابرلینک"><i
                            class="fa fa-link"></i></a>
                    <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
                        <button class="btn" type="button">افزودن</button>
                    </div>
                    <a class="btn" data-edit="unlink" title="حذف ابر لینک"><i class="fa fa-cut"></i></a>
                </div>

                <div class="btn-group">
                    <a class="btn" title="افزودن تصویر (یا فقط بکشید و رها کنید)" id="pictureBtn"><i
                            class="fa fa-picture-o"></i></a>
                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn"
                           data-edit="insertImage"/>
                </div>

                <div class="btn-group">
                    <a class="btn" data-edit="undo" title="باطل کردن (Ctrl/Cmd+Z)"><i
                            class="fa fa-undo"></i></a>
                    <a class="btn" data-edit="redo" title="بازگردانی (Ctrl/Cmd+Y)"><i
                            class="fa fa-repeat"></i></a>
                </div>
            </div>

            @php
                $input_errors = $errors->get($name);
            @endphp
            <div id="editor"  placeholder="{!! $value !!}" @class([
        "editor-wrapper",
        'error' => !empty($input_errors)
        ])>

            </div>

            <textarea name="{{$name}}" id="{{$id}}" style="visibility:hidden;"></textarea>

            <br/>

            <div class="ln_solid"></div>

        </div>
    </div>
</div>
