<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
    <title>前端开发_web前端开发_前端开发视频教程_慕课网</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name = "format-detection" content="telephone=no">
    <meta http-equiv="Cache-Control" content="no-transform " />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script type="text/javascript" src="/statics/js/flexible.js"></script>
    <script type="text/javascript">
        var userInfo = "";
    </script>
    <link rel="canonical" href="https://www.imooc.com/course/list">
    <link rel="stylesheet" href="/statics/css/common_e75f96d.css" />
    <link rel="stylesheet" href="/statics/css/index_796fed7.css" /></head>
<body>
<header >
    <div class="header clearfix">
        <a href="/index.php" class="logo l">
            <img src="/statics/images/logo.png">
        </a>
        <a id="js-appload" href="Javascript:;" class="app-load r"><span>下载客户端</span></a>
        <?php if($userid) { ?>
        <a href="/index.php/m=mooc&c=index&a=cate&fid=1" class="right-box r js-header-avator" style="width: 40px;height: 40px">
            <img src="//img4.mukewang.com/5333a28f00019e7702100210-370-370.jpg">
        </a>
        <?php } else { ?>
        <a href="/index.php?m=member&c=index&a=login" class="right-box r js-header-avator">
            <i class="imwap-Center"></i>
        </a>
        <?php } ?>
        <i class='imwap-search index-search js-index-search'></i>
        <form class="search-box r clearfix js-search-box  " style=" display: none;"
              method="post"
              action="/index.php?m=mooc&c=index&a=search" >
            <div class="l search-input ">
                <input type="text" class="search js-search"
                       name="q" id="q" placeholder="请输入搜索关键词">
            </div>
            <a href="javascript:void(0);" class="r cancel js-cancel">取消</a>
        </form>
    </div>
</header>

<div class="search-record js-search-record" style="display: none;">
</div>
<div id="wrapper">
    <div id="middle" class="container">

        <section class="header-menu fixed">
            <ul class="clearfix">
                <li ><a href='/index.php'>首页</a></li>
                <li class="cur"><a href='/index.php?m=mooc&c=index&a=cate&fid=1'>课程</a></li>
                <li ><a href='javascript:;'>路径</a></li>
                <li><a href='javascript:;'>实战</a></li>
                <li ><a href='javascript:;'>手记</a></li>
                <li ><a href='javascript:;'>猿问</a></li>
            </ul>
        </section>
        <div class="course-block clearfix">
            <ul class="course-left">
                <?php $n=1; if(is_array($fields)) foreach($fields AS $k => $v) { ?>
                <li class="li-item">
                    <a href="/index.php?m=mooc&c=index&a=cate&fid=<?php echo $v['id'];?>"
                       <?php if($v['id']==$fid) { ?>class="active-color"<?php } ?>>

                        <?php echo $v['name'];?>

                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="course-right">
                <!-- 前端 -->
                <div class="course-right-inner">
                    <div class="web-base-blcok">
                        <div class="wbb-content">
                            <ul class="clearfix">
                                <?php $n=1; if(is_array($cates)) foreach($cates AS $k => $v) { ?>
                                <li class="course-item-w l">
                                    <a href="/index.php?m=mooc&c=index&a=x&id=<?php echo $v['id'];?>">
                                        <div class="course-img" style="background-image: url(//img.mukewang.com/59c896360001379302400240.jpg)"></div>
                                        <span class="course-label"><?php echo $v['name'];?></span>
                                    </a>
                                </li>
                                <?php $n++;}unset($n); ?>

                            </ul>
                        </div>
                    </div>
                    <div class="course-list">
                        <ul class="list-ul">
                            <?php $n=1; if(is_array($list)) foreach($list AS $k => $v) { ?>
                            <li class="c-item-li">
                                <?php if($userid) { ?>
                                <a href="/index.php?m=mooc&c=index&a=course&id=<?php echo $v['id'];?>">
                                <?php } else { ?>
                                <a href="/index.php?m=member&c=index&a=login">;
                               <?php } ?>
                                    <div class="left-img" style="background-image: url(//img3.mukewang.com/5ac3418d0001a9b806000338-590-330.jpg)">
                                    </div>
                                    <div class="right-c">
                                        <h2 class="r-title">
                                            <?php echo $v['title'];?>
                                        </h2>
                                        <p class="r-info">
                                            <span class="r-info-t">免费课程</span><span class="r-info-l">初级 · <?php echo $v['view_count'];?>人在学 </span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <div class="more-block">
                            <a href="javascript:void(0);" data-marking="fe" class="loading-more js-show-more">点击加载更多</a>
                            <div class="loding-m-wrap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/statics/js/jquery-2.1.0.min_ac9f840.js"></script>
<script type="text/javascript" src="/statics/js/common_03ec857.js"></script>
<script type="text/javascript" src="/statics/js/index_59232cc.js"></script>
<!--下面就是自己写的-->
<input type="hidden" value="<?php echo $userid;?>" id="u">
<script>
    $(function () {
        var page=2;
        var has=true;
        $('.loading-more').on('click',function () {
            if(has){
//                let url=`/index.php?m=mooc&c=index&a=more&fid=<?php echo $fid;?>&page=${page}`;
//                ajax发送请求，继续获取页面
                $.getJSON(
                    `/index.php?m=mooc&c=index&a=more&fid=<?php echo $fid;?>&page=${page}`
                ).done(function (data) {
                    if(data.length<20){
                        has=false;
                        $('.loading-more').parent().remove();
                    }
                    data.forEach((v,i)=>{
                        $(`<li class="c-item-li">
                                ${
                            $('#u').val()
                                ? '<a href="/index.php?m=mooc&c=index&a=course&id=${id}">'
                                :'<a href="/index.php?m=member&c=index&a=login">'
                        }
                                    <div class="left-img" style="background-image: url(//img3.mukewang.com/5ac3418d0001a9b806000338-590-330.jpg)">
                                    </div>
                                    <div class="right-c">
                                        <h2 class="r-title">
                                            ${v.title}
                                        </h2>
                                        <p class="r-info">
                                            <span class="r-info-t">免费课程</span><span class="r-info-l">初级 · ${v.view_count}人在学 </span>
                                        </p>
                                    </div>
                                </a>
                            </li>`).appendTo('.list-ul');
                    })
                })
            }else{
                alert('deflaut');
            }
        })
    })
</script>
</body>
</html>