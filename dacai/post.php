<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main" role="main">
    <article class="post post-all" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <ul class="post-meta">
            <!--<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>-->
            <li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
            <li><?php $this->category(','); ?></li>
            <li>阅读 <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->viewsNum(); ?></a></li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>		<p class="zz-tips">转载请注明原文地址：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></p>
        </div>
        
<div class="dianzan">
	<div class="btn" id="btn-like" data-cid="<?php $this->cid() ?>" href="javascript:void(0)"> 赞 <span id="post-like-num"><?php $this->likesNum() ?></span></div>
</div>
        <p itemprop="keywords" class="tags"><?php _e('标签: '); ?>
        	<?php $this->tags(', ', true, 'none'); ?></p>

    
   
     <ul class="post-near clearfix">
        <li class="fl">← <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="fr"><?php $this->theNext('%s','没有了'); ?> →</li>
    </ul>
    </article>
<aside class="ad <?php if ($this->is('post')) : ?>ad-t<?php endif; ?>">
	<a href="http://s.click.taobao.com/t?e=m%3D2%26s%3D3ch4ZVf37wccQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAsrhIh3XXEEai6Fmp94qpt3k7fTK7gwT9m%2BEYZWy5mciuP81412Bd72idLuweU%2F9NhmIkXBqRClNTcEU%2BDykfuTlSg55GVX5wb6HrfO5Rkxh34mdTsZIUcD2w6Q44RZngUgmogNW4Mo5JN40IPIllNGdqD4myYuKZMYMXU3NNCg%2F" target="_blank">
	<img src="<?php $this->options->themeUrl('img/708-50.jpg'); ?>" />
	</a>
</aside>
    <?php $this->need('comments.php'); ?>
</div>

<script>
$(function(){
	$('#btn-like').click(function(){
		
		var that = $(this),num = parseInt($('#post-like-num').text()), cid = $(this).data('cid');
		if(cid===undefined) return false;
		$.get(document.location.origin+'/index.php/action/likes?cid='+cid).success(function(rs){
			if(rs.status==1){
				$('#post-like-num').text(num+1);
				dcalert(rs.msg===undefined ? '已成功为该文章点赞!' : rs.msg);
			}else{
				dcalert(rs.msg===undefined ? '操作出错!' : rs.msg);
			}
			
		});
		return false;
	});
});
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
