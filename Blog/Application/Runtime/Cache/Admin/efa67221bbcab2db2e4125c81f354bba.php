<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
    <!--头部-->
    <meta charset="utf-8" />
<title>后台管理</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="/Blog/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/font-awesome-ie7.min.css" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/ace.min.css" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="/Blog/Public/admin/assets/css/ace-ie.min.css" />
<script src="/Blog/Public/admin/assets/js/ace-extra.min.js"></script>
<script src="/Blog/Public/admin/assets/js/html5shiv.js"></script>
<script src="/Blog/Public/admin/assets/js/respond.min.js"></script>
<![endif]-->

<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<script type="text/javascript" charset="utf-8" src="/Blog/Public/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Blog/Public/admin/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Blog/Public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>

</head>

<body>
<!--顶部-->
<div class="navbar navbar-default" id="navbar" style="height: 0px">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    后台管理
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/Blog/Public/admin/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo (session('name')); ?>
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                设置
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                个人资料
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo U('Index/index_quit');?>">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <!--左侧-->
        <div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="<?php echo U('Index/index');?>">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 后台控制台 </span>
            </a>
        </li>
        <!--分类-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text">分类管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Category/category_add');?>">
                        <i class="icon-double-angle-right"></i>
                        分类添加
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Category/category_list');?>">
                        <i class="icon-double-angle-right"></i>
                        分类列表
                    </a>
                </li>
                    </ul>
                </li>
        <!--标签-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-bookmark"></i>
                <span class="menu-text">标签管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Label/label_add');?>">
                        <i class="icon-double-angle-right"></i>
                        标签添加
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Label/label_list');?>">
                        <i class="icon-double-angle-right"></i>
                        标签列表
                    </a>
                </li>
            </ul>
        </li>
        <!--博文-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-tasks"></i>
                <span class="menu-text">博文管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Article/article_add');?>">
                        <i class="icon-double-angle-right"></i>
                        博文添加
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Article/article_list');?>">
                        <i class="icon-double-angle-right"></i>
                        博文列表
                    </a>
                </li>
            </ul>
        </li>
        <!--用户-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-user"></i>
                <span class="menu-text">用户管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('User/user_list');?>">
                        <i class="icon-double-angle-right"></i>
                        用户列表
                    </a>
                </li>
            </ul>
        </li>
        <!--管理员-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-user"></i>
                <span class="menu-text">管理员管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Admin/admin_add');?>">
                        <i class="icon-double-angle-right"></i>
                        管理员添加
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Admin/admin_list');?>">
                        <i class="icon-double-angle-right"></i>
                        管理员列表
                    </a>
                </li>
            </ul>
        </li>
        <!--友情链接-->
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-link"></i>
                <span class="menu-text">友情链接管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('Link/link_add');?>">
                        <i class="icon-double-angle-right"></i>
                        友情链接添加
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Link/link_list');?>">
                        <i class="icon-double-angle-right"></i>
                        友情链接列表
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-star-half-empty"></i>
                <span class="menu-text">系统配置 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="<?php echo U('System/systemChange');?>">
                        <i class="icon-double-angle-right"></i>
                        设置
                    </a>
                </li>
            </ul>
        </li>
            </ul>
        </li>

    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">首页</a>
                    </li>
                    <li class="active">用户展示</li>
                </ul><!-- .breadcrumb -->
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">

                        <form action="<?php echo U('User/user_list');?>" method="post">
                            <input type="text" id="sou" placeholder="请输入要搜索的标签">
                            <input type="button" id="dian" onclick="page(1)" value="搜索">
                            </select>
                        </form>
                        <div class="table-responsive">
                            <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>用户id</th>
                                    <th>用户名</th>
                                    <th>手机号</th>
                                    <th>职位</th>
                                    <th>时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody id="show">
                                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>

                                        <td><?php echo ($v["id"]); ?></td>
                                        <td><?php echo ($v["username"]); ?></td>
                                        <td><?php echo ($v["tel"]); ?></td>
                                        <td><?php echo ($v["content"]); ?></td>
                                        <td><?php echo (date("Y/m/d",$v["ctime"])); ?></td>
                                        <td>
                                            <a href="javascript:;" class="btn">编辑</a>
                                            <button class="btn btn-danger">删除</button>
                                        </td>

                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                            <div id='page' align="center" style="font-size: 20px;">
                                <div id="div">
                                    <?php echo ($str); ?>
                                </div>
                            </div>
                        </div><!-- /.table-responsive -->
                    </div><!-- /span -->
                </div><!-- /row -->

            </div><!-- /.page-content -->
        </div><!-- /.main-content -->

        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        切换窄屏
                        <b></b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="/Blog/Public/admin/assets/js/jquery-2.0.3.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='/Blog/Public/admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/Blog/Public/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/Blog/Public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/Blog/Public/admin/assets/js/bootstrap.min.js"></script>
<script src="/Blog/Public/admin/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/Blog/Public/admin/assets/js/excanvas.min.js"></script>
<![endif]-->

<script src="/Blog/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Blog/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Blog/Public/admin/assets/js/chosen.jquery.min.js"></script>
<script src="/Blog/Public/admin/assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="/Blog/Public/admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/Blog/Public/admin/assets/js/date-time/bootstrap-timepicker.min.js"></script>
<script src="/Blog/Public/admin/assets/js/date-time/moment.min.js"></script>
<script src="/Blog/Public/admin/assets/js/date-time/daterangepicker.min.js"></script>
<script src="/Blog/Public/admin/assets/js/bootstrap-colorpicker.min.js"></script>
<script src="/Blog/Public/admin/assets/js/jquery.knob.min.js"></script>
<script src="/Blog/Public/admin/assets/js/jquery.autosize.min.js"></script>
<script src="/Blog/Public/admin/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="/Blog/Public/admin/assets/js/jquery.maskedinput.min.js"></script>
<script src="/Blog/Public/admin/assets/js/bootstrap-tag.min.js"></script>

<!-- ace scripts -->

<script src="/Blog/Public/admin/assets/js/ace-elements.min.js"></script>
<script src="/Blog/Public/admin/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
jQuery(function($) {
    $('#id-disable-check').on('click', function() {
        var inp = $('#form-input-readonly').get(0);
        if(inp.hasAttribute('disabled')) {
            inp.setAttribute('readonly' , 'true');
            inp.removeAttribute('disabled');
            inp.value="This text field is readonly!";
        }
        else {
            inp.setAttribute('disabled' , 'disabled');
            inp.removeAttribute('readonly');
            inp.value="This text field is disabled!";
        }
    });


    $(".chosen-select").chosen();
    $('#chosen-multiple-style').on('click', function(e){
        var target = $(e.target).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
        else $('#form-field-select-4').removeClass('tag-input-style');
    });


    $('[data-rel=tooltip]').tooltip({container:'body'});
    $('[data-rel=popover]').popover({container:'body'});

    $('textarea[class*=autosize]').autosize({append: "\n"});
    $('textarea.limited').inputlimiter({
        remText: '%n character%s remaining...',
        limitText: 'max allowed : %n.'
    });

    $.mask.definitions['~']='[+-]';
    $('.input-mask-date').mask('99/99/9999');
    $('.input-mask-phone').mask('(999) 999-9999');
    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
    $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});



    $( "#input-size-slider" ).css('width','200px').slider({
        value:1,
        range: "min",
        min: 1,
        max: 8,
        step: 1,
        slide: function( event, ui ) {
            var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
            var val = parseInt(ui.value);
            $('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
        }
    });

    $( "#input-span-slider" ).slider({
        value:1,
        range: "min",
        min: 1,
        max: 12,
        step: 1,
        slide: function( event, ui ) {
            var val = parseInt(ui.value);
            $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
        }
    });


    $( "#slider-range" ).css('height','200px').slider({
        orientation: "vertical",
        range: true,
        min: 0,
        max: 100,
        values: [ 17, 67 ],
        slide: function( event, ui ) {
            var val = ui.values[$(ui.handle).index()-1]+"";

            if(! ui.handle.firstChild ) {
                $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
            }
            $(ui.handle.firstChild).show().children().eq(1).text(val);
        }
    }).find('a').on('blur', function(){
        $(this.firstChild).hide();
    });

    $( "#slider-range-max" ).slider({
        range: "max",
        min: 1,
        max: 10,
        value: 2
    });

    $( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
        // read initial values from markup and remove that
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true

        });
    });


    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
        no_file:'No File ...',
        btn_choose:'Choose',
        btn_change:'Change',
        droppable:false,
        onchange:null,
        thumbnail:false //| true | large
        //whitelist:'gif|png|jpg|jpeg'
        //blacklist:'exe|php'
        //onchange:''
        //
    });

    $('#id-input-file-3').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'icon-cloud-upload',
        droppable:true,
        thumbnail:'small'//large | fit
        //,icon_remove:null//set null, to hide remove/reset button
        /**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
        /**,before_remove : function() {
						return true;
					}*/
        ,
        preview_error : function(filename, error_code) {
            //name of the file that failed
            //error_code values
            //1 = 'FILE_LOAD_FAILED',
            //2 = 'IMAGE_LOAD_FAILED',
            //3 = 'THUMBNAIL_FAILED'
            //alert(error_code);
        }

    }).on('change', function(){
        //console.log($(this).data('ace_input_files'));
        //console.log($(this).data('ace_input_method'));
    });


    //dynamically change allowed formats by changing before_change callback function
    $('#id-file-format').removeAttr('checked').on('change', function() {
        var before_change
        var btn_choose
        var no_icon
        if(this.checked) {
            btn_choose = "Drop images here or click to choose";
            no_icon = "icon-picture";
            before_change = function(files, dropped) {
                var allowed_files = [];
                for(var i = 0 ; i < files.length; i++) {
                    var file = files[i];
                    if(typeof file === "string") {
                        //IE8 and browsers that don't support File Object
                        if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
                    }
                    else {
                        var type = $.trim(file.type);
                        if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                || ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                ) continue;//not an image so don't keep this file
                    }

                    allowed_files.push(file);
                }
                if(allowed_files.length == 0) return false;

                return allowed_files;
            }
        }
        else {
            btn_choose = "Drop files here or click to choose";
            no_icon = "icon-cloud-upload";
            before_change = function(files, dropped) {
                return files;
            }
        }
        var file_input = $('#id-input-file-3');
        file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
        file_input.ace_file_input('reset_input');
    });




    $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
            .on('change', function(){
                //alert(this.value)
            });
    $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
    $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});



    $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
        $(this).prev().focus();
    });
    $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
        $(this).next().focus();
    });

    $('#timepicker1').timepicker({
        minuteStep: 1,
        showSeconds: true,
        showMeridian: false
    }).next().on(ace.click_event, function(){
        $(this).prev().focus();
    });

    $('#colorpicker1').colorpicker();
    $('#simple-colorpicker-1').ace_colorpicker();


    $(".knob").knob();


    //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
    var tag_input = $('#form-field-tags');
    if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) )
    {
        tag_input.tag(
                {
                    placeholder:tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                }
        );
    }
    else {
        //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
        tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
        //$('#form-field-tags').autosize({append: "\n"});
    }




    /////////
    $('#modal-form input[type=file]').ace_file_input({
        style:'well',
        btn_choose:'Drop files here or click to choose',
        btn_change:null,
        no_icon:'icon-cloud-upload',
        droppable:true,
        thumbnail:'large'
    })

    //chosen plugin inside a modal will have a zero width because the select element is originally hidden
    //and its width cannot be determined.
    //so we set the width after modal is show
    $('#modal-form').on('shown.bs.modal', function () {
        $(this).find('.chosen-container').each(function(){
            $(this).find('a:first-child').css('width' , '210px');
            $(this).find('.chosen-drop').css('width' , '210px');
            $(this).find('.chosen-search input').css('width' , '200px');
        });
    })


});
</script>
</body>
</html>
<script>
    function page(p) {
        var sou = document.getElementById('sou').value;
        var url = "<?php echo U('User/user_page');?>?p=" + p + "&sou=" + sou;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var _text = xhr.responseText;
//                console.log(xhr.responseText)

                var info = JSON.parse(_text);
                var _str='';
                for (var i in info['data']) {
                    var date= new Date(info['data'][i]['ctime']*1000);
                    var u_time=date.getFullYear() + "/" + (date.getMonth() + 1) + "/" + date.getDate();

                    _str += "<tr>" +
                            "<td>" + info['data'][i]['id'] + "</td>" +
                            "<td>" + info['data'][i]['username'] + "</td>" +
                            "<td>" + info['data'][i]['tel'] + "</td>" +
                            "<td>" + info['data'][i]['content'] + "</td>" +
                            "<td>" + u_time+"</td>" +

                            "<td> <button class='btn'>编辑</button><button class='btn btn-danger'>删除</button></td>" +
                            "</tr>"
                }

                document.getElementById('show').innerHTML = _str;
                document.getElementById('div').innerHTML = info['str'];
            }

        }
        xhr.open('get', url);
        xhr.send(null);
    }
</script>