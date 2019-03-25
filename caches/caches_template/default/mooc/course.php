<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <title>React响应用户输入_课程介绍</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="带你了解如何监听事件以及指定事件处理器的知识">
    <meta name="keywords" content="慕课网">
    <meta name="author" content="">
    <meta name = "format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script type="text/javascript" src="/statics/js/flexible.js"></script>
    <script type="text/javascript">
        var userInfo = "";
    </script>
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css" />
    <link rel="stylesheet" href="/statics/css/index_33d1e84.css" />
    <link rel="stylesheet" href="/statics/css/chapter_b3b840c.css">
</head>
<body >
<header >
    <div class="header clearfix">
        <!-- {*非一级目录 有返回键 可能有name字段 可能有搜索框*} -->
        <a class="imwap-arrow_l goback l" href="/index.php?m=mooc&c=index&a=cate&fid=1"></a>
        <span class='js-header-name header-name header-tit l'>
				课程介绍
			</span>
        <a href="//m.imooc.com/account/login" class="right-box r js-header-avator">
            <i class="imwap-Center"></i>
        </a>
        <a class="header-share r js-share" href="javascript:void(0);">
            <i class="imwap-share"></i>
        </a>
    </div>
</header>
<div id="wrapper">
    <div id="middle" class="container">
        <section class="banner" style='background-image: url(//img4.mukewang.com/5a9e334d0001c8be05400300-280-160.jpg)'>
            <span class="crumbs">
                课程/React.JS/前端开发
	        </span>
            <h2>
                <?php echo $course['title'];?>
            </h2>
        </section>

        <menu class='learn-menu'>
            <a href="/learn/953?mid=">介绍</a>

            <a  class="cur" href="/learn/chapter/953">章节</a>

            <a  href="/learn/qa/953?mid=">问答</a>
            <a  href="/learn/note/953?mid=">笔记</a>
        </menu>
        <div class="chapterlist">
            <?php $n=1; if(is_array($chapters)) foreach($chapters AS $k => $v) { ?>
            <dl class="">
                <dt><?php echo $v['title'];?></dt>
                <?php $n=1; if(is_array($v['sections'])) foreach($v['sections'] AS $k1 => $v1) { ?>
                <dd class="">
                    <a href="/index.php?m=mooc&c=index&a=show&id=<?php echo $v1['cid'];?>">
                        <i class="imwap-play_arrow"></i>
                        <div>
                            <?php echo $v1['title'];?>
                        </div>
                        <span class="imwap-panorama-fisheye"></span>
                    </a>

                </dd>
                <?php $n++;}unset($n); ?>
            </dl>
            <?php $n++;}unset($n); ?>
        </div>

        <a href='/index.php?m=mooc&a=show&id=<?php echo $id;?>' class='footer-link'>
            开始学习
        </a>
    </div>
</div>




<script type="text/javascript" src="/statics/js/jquery-2.1.0.min_ac9f840.js"></script>
<script type="text/javascript" src="/statics/js/common_03ec857.js"></script>
</body>
</html>