<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title><?php echo ($article['current']['title']); ?>-蔡遵造博客</title><meta name="keywords" content="<?php echo ($article['current']['keywords']); ?>"/><meta property="wb:webmaster" content="3b2dfa1a5c38ed10" /><meta name="description" content="<?php echo ($article['current']['description']); ?>"/><meta http-equiv="Cache-Control" content="no-siteapp"/><meta name="author" content="baijunyao,<?php echo (C("ADMIN_EMAIL")); ?>"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/static/bootstrap-3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/static/font-awesome-4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/static/css/bjy.css">
    <link rel="stylesheet" type="text/css" href="/Template/default/Home/Public/css/index.css"><link rel="stylesheet" type="text/css" href="/Public/static/css/animate.css">
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?556db92efb8e26b5a976181f8444adb9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script><link rel="stylesheet" type="text/css" href="/Public/static/ueditor1_4_3/third-party/SyntaxHighlighter/shCoreDefault.css" /><link rel="canonical" href="<?php echo U('Home/Index/article',array('aid'=>$_GET['aid']),'',true);?>" /></head><body><header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top"><div class="container"><div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/" onclick="recordId('/',0)"><div class="hidden-xs b-nav-background"></div><ul class="b-logo-code"><li class="b-lc-start">&lt;?php</li><li class="b-lc-echo">echo</li></ul><p class="b-logo-word">'蔡遵造博客'</p><p class="b-logo-end">;</p></a></div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav b-nav-parent"><li class="hidden-xs b-nav-mobile"></li><li class="b-nav-cname <?php if(($cid) == "index"): ?>b-nav-active<?php endif; ?> " > <a href="/" onclick="recordId('/',0)">首页</a></li><?php if(is_array($categorys)): foreach($categorys as $key=>$v): ?><li class="b-nav-cname <?php if(($cid) == $v['cid']): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('Home/Index/category',array('cid'=>$v['cid']));?>" onclick="return recordId('cid',<?php echo ($v['cid']); ?>)"><?php echo ($v['cname']); ?></a></li><?php endforeach; endif; ?><li class="b-nav-cname <?php if(($cid) == "chat"): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('Home/Index/chat');?>">随言碎语</a><!--</li><li class="b-nav-cname hidden-sm  <?php if(($cid) == "git"): ?>b-nav-active<?php endif; ?> "> <a href="<?php echo U('Home/Index/git');?>">开源项目</a></li>--></ul><ul id="b-login-word" class="nav navbar-nav navbar-right"><?php if(empty($_SESSION['user']['head_img'])): ?><li class="b-nav-cname b-nav-login"><div class="hidden-xs b-login-mobile"></div> <a href="javascript:;" onclick="login()">登录</a></li><?php else: ?><li class="b-user-info"> <span><img class="b-head_img" src="<?php echo ($_SESSION['user']['head_img']); ?>" alt="<?php echo ($_SESSION['user']['nickname']); ?>" title="<?php echo ($_SESSION['user']['nickname']); ?>"/></span> <span class="b-nickname"><?php echo ($_SESSION['user']['nickname']); ?></span> <span><a href="javascript:;" onclick="logout()">退出</a></span></li><?php endif; ?></ul></div></div></header>
<div class="b-h-70"></div><div id="b-content" class="container"><div class="row"><div class="col-xs-12 col-md-12 col-lg-8"><div class="row b-article"><h1 class="col-xs-12 col-md-12 col-lg-12 b-title"><?php echo ($article['current']['title']); ?></h1><div class="col-xs-12 col-md-12 col-lg-12"><ul class="row b-metadata"><li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> <?php echo ($article['current']['author']); ?></li><li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> <?php echo (date('Y-m-d H:i:s',$article['current']['addtime'])); ?></li><li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i> <a href="<?php echo U('Home/Index/category',array('cid'=>$article['current']['category']['cid']));?>"><?php echo ($article['current']['category']['cname']); ?></a><?php if(!empty($article['current']['tag'])): ?><li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i><?php if(is_array($article['current']['tag'])): foreach($article['current']['tag'] as $key=>$v): ?><a class="b-tag-name" href="<?php echo U('Home/Index/tag',array('tid'=>$v['tid']));?>"><?php echo ($v['tname']); ?></a><?php endforeach; endif; ?></li><?php endif; ?></ul></div><div class="col-xs-12 col-md-12 col-lg-12 b-content-word"> <?php echo ($article['current']['content']); if(($article['current']['is_original']) == "1"): ?><p class="b-h-20"></p><p class="b-copyright"> <?php echo (C("COPYRIGHT_WORD")); ?></p><?php endif; ?><ul class="b-prev-next"><li class="b-prev"> 上一篇：<?php if(empty($article['prev'])): ?><span>没有了</span><?php else: ?> <a href="<?php echo ($article['prev']['url']); ?>"><?php echo ($article['prev']['title']); ?></a><?php endif; ?></li><li class="b-next"> 下一篇：<?php if(empty($article['next'])): ?><span>没有了</span><?php else: ?> <a href="<?php echo ($article['next']['url']); ?>"><?php echo ($article['next']['title']); ?></a><?php endif; ?></li></ul></div></div>pt>
    var userEmail='<?php echo ($user_email); ?>';
    tuzkiNumber=1;
</script><div class="row b-comment"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-box"> <img class="b-head-img" src="<?php if(empty($_SESSION['user']['head_img'])): ?>/Template/default/Home/Public/image/default_head_img.gif<?php else: echo ($_SESSION['user']['head_img']); endif; ?>" alt="白俊遥博客" title="白俊遥博客"><div class="b-box-textarea"><div class="b-box-content" contenteditable="true" onfocus="delete_hint(this)">请先登录后发表评论</div><ul class="b-emote-submit"><li class="b-emote"><i class="fa fa-smile-o" onclick="getTuzki(this)"></i> <input class="form-control b-email" type="text" name="email" placeholder="接收回复的email地址" value="<?php echo ($user_email); ?>"><div class="b-tuzki"></div></li><li class="b-submit-button"> <input type="button" value="评 论" aid="<?php echo ($_GET['aid']); ?>" pid="0" onclick="comment(this)"></li><li class="b-clear-float"></li></ul></div><div class="b-clear-float"></div></div><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-comment-title"><ul class="row"><li class="col-xs-6 col-sm-6 col-md-6 col-lg-6">最新评论</li><li class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">总共<span><?php echo count($comment);?></span>条评论</li></ul></div><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 b-user-comment"><?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="row b-user b-parent"><div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col"> <img class="b-user-pic js-head-img" src="/Template/default/Home/Public/image/qq_default.jpg" _src="<?php echo ($v['head_img']); ?>" alt="白俊遥博客" title="白俊遥博客"></div><div class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col b-cc-first"><p class="b-content"> <span class="b-user-name"><?php echo ($v['nickname']); ?></span>：<?php echo ($v['content']); ?></p><p class="b-date"> <?php echo date('Y-m-d H:i:s',$v['date']);?> <a href="javascript:;" aid="<?php echo ($_GET['aid']); ?>" pid="<?php echo ($v['cmtid']); ?>" username="<?php echo ($v['nickname']); ?>" onclick="reply(this)">回复</a></p><?php if(is_array($v['child'])): foreach($v['child'] as $key=>$n): ?><div class="row b-user b-child"><div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 b-pic-col"> <img class="b-user-pic js-head-img" src="/Template/default/Home/Public/image/qq_default.jpg" _src="<?php echo ($n['head_img']); ?>" alt="白俊遥博客" title="白俊遥博客"></div><ul class="col-xs-10 col-sm-11 col-md-11 col-lg-11 b-content-col"><li class="b-content"> <span class="b-reply-name"><?php echo ($n['nickname']); ?></span> <span class="b-reply">回复</span> <span class="b-user-name"><?php echo ($n['reply_name']); ?></span>：<?php echo ($n['content']); ?></li><li class="b-date"> <?php echo date('Y-m-d H:i:s',$n['date']);?> <a href="javascript:;" aid="<?php echo ($_GET['aid']); ?>" pid="<?php echo ($n['cmtid']); ?>" username="<?php echo ($n['reply_name']); ?>" onclick="reply(this)">回复</a></li><li class="b-clear-float"></li></ul></div><?php endforeach; endif; ?><div class="b-clear-float"></div></div></div><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><div class="b-border"></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></div>
</div><div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md"><div class="b-tags"><h4 class="b-title">热门标签</h4><ul class="b-all-tname"><?php $tag_i=0; if(is_array($tags)): foreach($tags as $k=>$v): $tag_i++; $tag_i=$tag_i==5?1:$tag_i; ?><li class="b-tname"> <a class="tstyle-<?php echo ($tag_i); ?>" href="<?php echo U('Home/Index/tag',array('tid'=>$v['tid']));?>" onclick="return recordId('tid',<?php echo ($v['tid']); ?>)"><?php echo ($v['tname']); ?> (<?php echo ($v['count']); ?>)</a></li><?php endforeach; endif; ?></ul></div><div class="b-recommend"><h4 class="b-title">置顶推荐</h4><p class="b-recommend-p"><?php if(is_array($recommend)): foreach($recommend as $key=>$v): ?><a class="b-recommend-a" href="<?php echo U('Home/Index/article',array('aid'=>$v['aid']));?>" target="_blank"><span class="fa fa-th-list b-black"></span> <?php echo ($v['title']); ?></a><?php endforeach; endif; ?></p></div><div class="b-link"><h4 class="b-title">最新评论</h4><div><?php if(is_array($new_comment)): foreach($new_comment as $key=>$v): ?><ul class="b-new-comment <?php if(($key) == "0"): ?>b-new-commit-first<?php endif; ?>"> <img class="b-head-img js-head-img" src="/Template/default/Home/Public/image/qq_default.jpg" _src="<?php echo ($v['head_img']); ?>" alt="<?php echo ($v['nickname']); ?>"><li class="b-nickname"> <?php echo ($v['nickname']); ?><span><?php echo ($v['date']); ?></span></li><li class="b-nc-article"> 在<a href="<?php echo U('Home/Index/article',array('aid'=>$v['aid']));?>" target="_blank"><?php echo ($v['title']); ?></a>中评论</li><li class="b-content"> <?php echo ($v['content']); ?></li></ul><?php endforeach; endif; ?></div></div><?php if(($show_link) == "1"): ?><div class="b-link"><h4 class="b-title">友情链接</h4><p><?php if(is_array($links)): foreach($links as $k=>$v): ?><a class="b-link-a" href="<?php echo ($v[url]); ?>" target="_blank"><span class="fa fa-link b-black"></span> <?php echo ($v['lname']); ?></a><?php endforeach; endif; ?></p></div><?php endif; ?><div class="b-search"><form class="form-inline" role="form" action="<?php echo U('Home/Index/search');?>" method="get"> <input class="b-search-text" type="text" name="search_word"> <input class="b-search-submit" type="submit" value="全站搜索"></form></div></div></div><div class="row"><footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><ul><li class="text-center"> ICP证：闽ICP备17016803号-1</li><li class="text-center"> 联系邮箱：751691032@qq.com<!--<?php echo (C("ADMIN_EMAIL")); ?>--></li></ul><div class="b-h-20"></div><a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a></footer></div></div><div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4></div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                <ul class="row">
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>'qq'));?>"><img
                            src="/Template/default/Home/Public/image/qq-login.png" alt="QQ登录" title="QQ登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>'sina'));?>"><img
                            src="/Template/default/Home/Public/image/sina-login.png" alt="微博登录" title="微博登录"></a></li>
<!--                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>'douban'));?>"><img
                            src="/Template/default/Home/Public/image/douban-login.png" alt="豆瓣登录" title="豆瓣登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>'renren'));?>"><img
                            src="/Template/default/Home/Public/image/renren-login.png" alt="人人登录" title="人人登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>'kaixin'));?>"><img
                            src="/Template/default/Home/Public/image/kaixin-login.png" alt="开心网登录" title="开心网登录"></a></li>
                    <li class="col-xs-6 col-md-4 col-lg-4 b-login-img"><a
                            href="<?php echo U('Home/User/oauth_login',array('type'=>''));?>"><img src="" alt="待定" title="待定"></a>
                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="/Public/static/js/jquery-2.0.0.min.js"></script>
<script>
    logoutUrl="<?php echo U('Home/User/logout');?>";
</script>
<script src="/Public/static/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="/Public/static/js/html5shiv.min.js"></script>
<script src="/Public/static/js/respond.min.js"></script>
<![endif]-->
<script src="/Public/static/pace/pace.min.js"></script>
<script src="/Template/default/Home/Public/js/index.js"></script>
<!-- 百度页面自动提交开始 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
<!-- 百度页面自动提交结束 -->

<!-- 百度统计开始 -->

<!-- 百度统计结束 --><script type="text/javascript" src="/Public/static/ueditor1_4_3/third-party/SyntaxHighlighter/shCore.js"></script><script type="text/javascript" src="/Public/static/layer-2.4/layer.js"></script><script type="text/javascript">
    SyntaxHighlighter.all();
    ajaxCommentUrl="<?php echo U('Home/Index/ajax_comment','','',true);?>";
    check_login="<?php echo U('Home/User/check_login','','',true);?>";
</script><script type="text/javascript" src="/Template/default/Home/Public/js/comment.js"></script></body></html>