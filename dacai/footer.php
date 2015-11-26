<?php
if (!defined('__TYPECHO_ROOT_DIR__'))
	exit ;
 ?>
</div>
<footer id="footer" >
	<div  class="ct-wrap clearfix">
<span>&copy; <?php echo date('Y'); ?> <a href="<?php $this -> options -> siteUrl(); ?>"><?php $this->options->title(); ?></a></span><!--
--><span><a href="http://www.miitbeian.gov.cn/" target="_blank">* ICP备******号</a></span><!-- 
--><span><?php _e('Powered by <a href="http://www.typecho.org"  target="_blank">Typecho</a>'); ?></span><!--
--><span><?php _e('Theme by <a href="https://github.com/xng/theme-jiandian"  target="_blank">JianDan</a>'); ?></span><!--
--><div class="tj-ico"><script type="text/javascript">/*这里放网站统计的js*/</script>
</div></div>
</footer><!-- end #footer -->
<aside class="go-top"><a id="a-top">Top</a></aside>
<?php $this -> footer(); ?>
	<script type="text/javascript">var _istopshow = false;

function retopaside() {
	var stop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
	if (!_istopshow && stop > 200) {
		_istopshow = true;
		$(".go-top").fadeIn();
	}
	if (_istopshow && stop < 200) {
		_istopshow = false;
		$(".go-top").fadeOut();
	}
}
$(function() {
			try {
				hljs.initHighlightingOnLoad();
			} catch (e) {};
			$("#a-top").click(function(e) {
		e.preventDefault();
		$('html,body').animate({
			scrollTop: 0
		}, 600);
	});
	var timeout = false;
	$(window).scroll(function() {
		if (timeout) {
			clearTimeout(timeout);
		}
		timeout = setTimeout(function() {
			retopaside();
		}, 100)
	})
})</script>
</body>
</html>
