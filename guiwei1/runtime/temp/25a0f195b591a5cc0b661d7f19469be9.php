<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:109:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/public/../application/admin/view/cms/common/links.html";i:1688437394;s:97:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/application/admin/view/layout/default.html";i:1688437394;s:94:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/application/admin/view/common/meta.html";i:1688437394;s:96:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/application/admin/view/common/script.html";i:1688437394;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<meta name="referrer" content="never">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<?php if(\think\Config::get('fastadmin.adminskin')): ?>
<link href="/assets/css/skins/<?php echo \think\Config::get('fastadmin.adminskin'); ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">
<?php endif; ?>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>

    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav') && \think\Config::get('fastadmin.breadcrumb')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <?php if($auth->check('dashboard')): ?>
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                    <?php endif; ?>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null,FALSE); ?>
        <ul class="nav nav-tabs" data-field="type">
            <li class="active"><a href="#t-all" data-value="" data-toggle="tab"><?php echo __('All'); ?></a></li>
            <?php if(is_array($typeList) || $typeList instanceof \think\Collection || $typeList instanceof \think\Paginator): if( count($typeList)==0 ) : echo "" ;else: foreach($typeList as $key=>$vo): ?>
            <li><a href="#t-<?php echo $key; ?>" data-value="<?php echo $key; ?>" data-toggle="tab"><?php echo $vo; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        <?php echo build_toolbar('refresh'); ?>

                        <div class="dropdown btn-group">
                            <a class="btn btn-success btn-more dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> <?php echo __('Add'); ?></a>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a class="btn btn-dialog <?php echo $auth->check('cms/page/add')?'':'hide'; ?>" href="cms/page/add" data-title="添加单页" data-window="parent"><i class="fa fa-file fa-fw"></i> <?php echo __('添加单页'); ?></a></li>
                                <li><a class="btn btn-dialog <?php echo $auth->check('cms/special/add')?'':'hide'; ?>" href="cms/special/add" data-title="添加专题" data-window="parent"><i class="fa fa-newspaper-o fa-fw"></i> <?php echo __('添加专题'); ?></a></li>
                                <li><a class="btn btn-dialog <?php echo $auth->check('cms/diyform/add')?'':'hide'; ?>" href="cms/diyform/add" data-title="添加自定义表单" data-window="parent"><i class="fa fa-list fa-fw"></i> <?php echo __('添加自定义表单'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover"
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    require.callback = function () {
        define('backend/cms/ajax', ['jquery', 'bootstrap', 'backend', 'table', 'template'], function ($, undefined, Backend, Table, Template) {
            var Controller = {
                get_link_list: function () {
                    // 初始化表格参数配置
                    Table.api.init({});

                    var table = $("#table");

                    // 初始化表格
                    table.bootstrapTable({
                        url: 'cms/ajax/get_link_list',
                        toolbar: ".toolbar", //工具栏
                        search: false, //是否启用快速搜索
                        cache: false,
                        pageSize: 10,
                        pagination: true,
                        fixedColumns: true,
                        fixedRightNumber: 1,
                        pageList: [10, 15, 20, 25, 50, 'All'],
                        columns: [{
                            field: 'type',
                            title: '类型',
                            width: '100', table: table,
                            searchList: {page: '单页', special: '专题', diyform: '自定义表单'},
                            formatter: Table.api.formatter.status
                        }, {
                            field: 'url',
                            title: '链接',
                            width: '40%',
                            formatter: Table.api.formatter.url
                        }, {
                            field: 'name',
                            title: '名称',
                            width: '45%',
                            align: 'center',
                            valign: 'middle',
                        }, {
                            field: 'operate',
                            title: '操作',
                            align: 'center',
                            width: '80',
                            valign: 'middle',
                            formatter: function (value, row, index) {
                                return '<a href="javascript:" class="btn btn-success btn-xs btn-selectit">选择</a>';
                            }
                        }],
                    });

                    // 为表格绑定事件
                    Table.api.bindevent(table);

                    $(document).on("click", ".btn-selectit", function () {
                        Fast.api.close($(this).parent().prev().prev().find("input").val());
                        return false;
                    });

                }
            };
            return Controller;
        });
    }
</script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>
