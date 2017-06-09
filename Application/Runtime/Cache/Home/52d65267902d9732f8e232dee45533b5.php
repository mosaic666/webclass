<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/kexie/Public/js/ie8-responsive-file-warning.js"></script>
    <script type="text/javascript" src="/kexie/Public/js/html5shiv.js"></script>
    <script type="text/javascript" src="/kexie/Public/js/respond.min.js"></script>
    <![endif]-->
    <title></title>

    <link href="/kexie/Public/css/css.css" rel="stylesheet" type="text/css"/>
    <link href="/kexie/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <style>
        .weizhi{height:44px;width:100%;background-color: #F1F1F1;}
        .weizhi_title{white-space:nowrap;height:44px;width:100px;padding:0 10px 0;background-color: #fff;cursor: pointer;text-align: center;line-height: 44px;}
    </style>
</head>
<body>
<div class="weizhi">
    <div class="weizhi_title">
        <span class="glyphicon glyphicon-volume-up"></span>公告详情
    </div>
</div>
<div class="container-fluid">
    <div class="row" style="margin-top: 30px;">
        <div class="col-xs-3"></div>
       <!--  <div class="col-xs-6">
            <table class="table table-bordered text-center">
                <tr class="bg-primary">
                    <th class="col-xs-6" style="text-align: center">相关文件</th>
                    <th class="col-xs-6" style="text-align: center" colspan="3">操作</th>
                </tr>
                <tr>
                    <td>文件一</td>
                    <td><a href="">预览</a></td>
                    <td><a href="">下载</a></td>
                    <td><a href="">删除</a></td>
                </tr>
            </table>
        </div> -->
        <div class="col-xs-3"></div>
    </div>
        <button  class="btn btn-default" onclick="history.go(-1)">返 回</button>
    <div class="container" style="margin-top: 30px;padding-bottom: 20px;border: 1px solid #eee;box-shadow: 1px 1px 1px #eee;">
        <h2 class="text-center"><?php echo ($data["act_title"]); ?></h2>
        <p class="text-center" style="font-size: 10px"><?php echo ($data["act_date"]); ?></p>
        <?php echo ($data["content"]); ?>
    </div>

</div>


</body>
</html>