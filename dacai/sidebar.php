<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="side" role="complementary">
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('标签云'); ?></h3>
       <!-- <ul class="widget-list new-posts">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>--><?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
<ul class="tags-list clearfix">
<?php while($tags->next()): ?>
    <li><a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'>#<?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('最近回复'); ?></h3>
        <ul class="widget-list">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?></li>
        <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
		<h3 class="widget-title"><?php _e('归档'); ?></h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	</section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
	<section class="widget">
		<h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
	</section>
    <?php endif; ?>
    	<section class="widget">
		<h3 class="widget-title"><?php _e('友情链接'); ?></h3>
        <ul class="widget-list youlian">
            <li><a href="http://www.dacai.me" target="_blank">大蔡点墨</a></li>
            <li><a href="http://www.11what.com" target="_blank">振哥札记</a></li>
					<li><a href="http://fb90.cn" target="_blank">海月小筑</a></li>
					<li><a href="http://yushuijiang.com/" target="_blank">小于技术分享</a></li>
					<li><a href="https://github.com/xng" target="_blank">蔡小龙的GitHub</a></li>
				</ul>
	</section>
	<aside class="widget ad">
	<a href="http://s.click.taobao.com/t?e=m%3D2%26s%3Dc16aSMPrKlMcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAuGqh70p3k6NBXua7Yni1JTk7fTK7gwT9m%2BEYZWy5mciuP81412Bd72idLuweU%2F9NhmIkXBqRClNTcEU%2BDykfuTlSg55GVX5wb6HrfO5Rkxh34mdTsZIUcAD%2Bi4rDfTRpeTIM5d0rdP%2B4UsysfR7j9ghhQs2DjqgEA%3D%3D" target="_blank">
	<img src="<?php $this->options->themeUrl('img/300-250.gif'); ?>" />
	</a>
</aside>
</div><!-- end #sidebar -->
</div>
