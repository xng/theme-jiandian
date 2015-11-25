<?php
/**
 * 这是基于 Typecho 0.9 系统的一套默认皮肤改造的主题
 * 
 * @package 简洁 Theme 
 * @author dacai
 * @version 1.1
 * @link  http://www.dacai.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

	<div id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <div class="post-content" itemprop="articleBody">
            	<?php if(isset($this->fields->p_i_img)){?><aside class="post-image" style="background-image:url(<?php echo $this->fields->p_i_img;?>)">
					</aside><?php }; ?>
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

    <?php $this->pageNav('前一页', '后一页'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
