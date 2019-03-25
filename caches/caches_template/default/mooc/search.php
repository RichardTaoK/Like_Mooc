<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <title>慕课网</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="慕课网">
    <meta name="keywords" content="慕课网">
    <meta name="author" content="">
    <meta name = "format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script type="text/javascript" src="/statics/js/flexible.js"></script>
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css" />
    <link rel="stylesheet" href="/statics/css/search_45678ed.css" />
</head>
<body >
<header >
    <div class="header focus clearfix">

        <!-- {*非一级目录 有返回键 可能有name字段 可能有搜索框*} -->
        <a class="imwap-arrow_l goback l" href=""></a>
        <a href="//m.imooc.com/account/login" class="right-box r js-header-avator">
            <i class="imwap-Center"></i>
        </a>
        <form class="search-box r clearfix js-search-box" method="post" style=" "
              action="/index.php?m=mooc&c=index&a=search">
            <div class="l search-input hasnameinput-2">
                <input type="text" class="search js-search"
                       value="<?php echo $keyword;?>" placeholder="请输入搜索关键词" name="q" id="q" >
                <div class="search-action l">
                    <a href="javascript:void(0);" class="imwap-close js-clear" style="display: none;"></a>
                    <button class="imwap-search"></button>
                </div>
            </div>
            <a href="/index.php" class="r cancel ">取消</a>
        </form>
    </div>
</header>
<div class="search-record js-search-record" style="display: none;">
</div>
<div id="wrapper">
    <div id="middle" class="container">
        <div id="pages-container">
            <div class="search-result">
                <div style="width: 100%;overflow-x: scroll;">
                <dl class="nav-list clearfix">

                    <?php $n=1; if(is_array($fields)) foreach($fields AS $k => $v) { ?>
                    <dd>
                        <a href="/index.php?m=mooc&c=index&a=search&fid=<?php echo $v['id'];?>"
                           <?php if($v['id']===$fid) { ?>class="cur"<?php } ?>><?php echo $v['name'];?></a>
                    </dd>
                    <?php $n++;}unset($n); ?>
                </dl>
                </div>

                <p class="result-count">共找到753个相关内容
                    <div class="content-box">
                <p class="type-tit">课程</p>
                <dl class="search-course-list">
                    <?php $n=1; if(is_array($lists)) foreach($lists AS $k => $v) { ?>
                    <dd>
                        <a href="/index.php?m=mooc&c=index&a=course&id=<?php echo $v['id'];?>" class="clearfix">
                            <img src="//img3.mukewang.com/szimg/5aab7f270001909810800600-360-202.jpg" class="l">
                            <div class="l search-course-info">
                                <p class="tit"><span  class='highlight'><?php echo $keyword;?></span>
                                    <?php echo $v['title'];?>
                                </p>

                                <p class="desc"><?php echo $v['description'];?></p>

                                <p class="info"><label>实战</label><span>{count<?php echo $lists;?>人在学 </span></p>
                            </div>
                        </a>
                    </dd>
                    <?php $n++;}unset($n); ?>
                </dl>
                <a href="/search/course?words=vue" class="check-type-btn">更多课程搜索结果</a>
            </div>

            <!--<div class="content-box">-->
                <!--<p class="type-tit">猿问</p>-->
                <!--<dl class="search-ques-list">-->
                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/wenda/detail/339686" class="clearfix">-->
                            <!--<p class="question"><span  class='highlight'>vue</span> 命令找不到</p>-->
                            <!--<p class="answer-user">堂堂堂堂糖糖糖童鞋 的回答</p>-->
                            <!--<p class="answer">需要全局安装vue&lt;...code...&gt;-g 是全局的意思（global）cnpm [淘宝 NPM 镜像](http://npm.taobao.org/)</p>-->
                        <!--</a>-->
                    <!--</dd>-->
                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/wenda/detail/327370" class="clearfix">-->
                            <!--<p class="question">vuejs里<span  class='highlight'>vue</span>未定义</p>-->

                            <!--<p class="answer-user">八九不离十W3C 的回答</p>-->
                            <!--<p class="answer">没有安装VUE，如下：sudo cnpm install -g vuesudo cnpm install -g vue@csp</p>-->
                        <!--</a>-->
                    <!--</dd>-->
                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/wenda/detail/346762" class="clearfix">-->
                            <!--<p class="question"><span  class='highlight'>vue</span>结合ajax</p>-->
                            <!--<p class="answer-user">abc26296 的回答</p>-->
                            <!--<p class="answer">vue中使用axios或xe-ajax</p>-->
                        <!--</a>-->
                    <!--</dd>-->
                <!--</dl>-->
                <!--<a href="/search/wenda?words=vue" class="check-type-btn">更多猿问搜索结果</a>-->
            <!--</div>-->
            <!--<div class="content-box">-->
                <!--<p class="type-tit">手记</p>-->
                <!--<dl class="search-article-list">-->
                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/article/20895" class="clearfix">-->
                            <!--<p class="question"><span  class='highlight'>vue</span>，<span  class='highlight'>vue</span>，<span  class='highlight'>vue</span>，<span  class='highlight'>vue</span>，<span  class='highlight'>vue</span>，</p>-->
                            <!--<p class="answer">1. <span  class='highlight'>vue</span> 的三个特点： 数据双向绑定，组件化，单文件组件 2、<span  class='highlight'>vue</span>的基本概念 全局api： vue.extend, vue.set 实例选项: new <span  class='highlight'>Vue</span>() el,data,compents都是<span  class='highlight'>vue</span>实例选项 实例属性和方法： vm.$on,vm.$data 在$都是<span  class='highlight'>vue</span>的实例和方法 指令：directive 内置组件：&lt;components&gt;&lt</p>-->
                        <!--</a>-->
                    <!--</dd>-->

                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/article/14811" class="clearfix">-->
                            <!--<p class="question"><span  class='highlight'>vue</span>新手入门demo vue2.0+<span  class='highlight'>vue</span>-router+vuex</p>-->
                            <!--<p class="answer"><span  class='highlight'>vue</span>新手入门demo vue2.0+<span  class='highlight'>vue</span>-router+vuex 介绍 <span  class='highlight'>vue</span>新手学习的一个项目 宠物领养 前端所用的是vue2.0+<span  class='highlight'>vue</span>-router+vuex+axios webpack的配置之前是自己写的，但看过<span  class='highlight'>vue</span>-cli后觉得那个更好，所以就用<span  class='highlight'>vue</span>-cli webpack-simple那个，个人建议新手还是用simple的版本好点 数据的话暂时还没做后端，所以用mock.js</p>-->
                        <!--</a>-->
                    <!--</dd>-->
                    <!--<dd>-->
                        <!--<a href="http://www.imooc.com/article/18616" class="clearfix">-->
                            <!--<p class="question"><span  class='highlight'>vue</span>-sell-master练习笔记</p>-->
                            <!--<p class="answer">main.js代码： import <span  class='highlight'>Vue</span> from &#039;<span  class='highlight'>vue</span>&#039;; import VueRouter from &#039;<span  class='highlight'>vue</span>-router&#039;; import VueResource from &#039;<span  class='highlight'>vue</span>-resource&#039;; import App from &#039;./App&#039;; import goods from &#039</p>-->
                        <!--</a>-->
                    <!--</dd>-->
                <!--</dl>-->
                <!--<a href="/search/article?words=vue" class="check-type-btn">更多手记搜索结果</a>-->
            <!--</div>-->
        </div>
    </div>
</div>
</div>
</body>
</html>
