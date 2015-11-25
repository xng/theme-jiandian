<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div id="main" role="main">
        <section class="sr-result"><h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 <span>%s</span> 下的文章'),
            'search'    =>  _t('包含关键字 <span>%s</span> 的文章'),
            'tag'       =>  _t('标签 <span>%s</span> 下的文章'),
            'author'    =>  _t('<span>%s</span> 发布的文章')
        ), '', ''); ?></h3></section>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
    			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
    			  <div class="post-content" itemprop="articleBody">
            	<?php if(isset($this->fields->p_i_img)){?><a href="<?php $this->permalink() ?>" class="post-image" style="background-image:url(<?php echo $this->fields->p_i_img;?>)">
					</a><?php }; ?>
    			<?php $this->content(); ?>
            </div>
            <ul class="post-meta">
				<!--<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>-->
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
				<li>阅读 <a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->viewsNum(); ?></a></li>
			</ul>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

        <?php $this->pageNav('前一页', '后一页'); ?>
    </div><!-- end #main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
