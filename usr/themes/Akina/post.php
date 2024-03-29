<?php $this->need('header.php'); ?>

<!-- 文章部分 -->
<div class="blank"></div>
<div class="headertop"></div>
<style type="text/css">.site-content {padding-top:0px !important}</style>
<?php if($this->hidden): ?>
<!-- 判断文章是否加密 -->
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<article class="hentry">
		<!-- 加密文章输出 -->
		<div class="entry-content">
		<?php $this->content(); ?>
		</div>
<?php else: ?>
<!-- 不是加密文章 -->

<div class="pattern-center">
    <div class="pattern-attachment-img" style="background-image: url('/images/<?php echo mt_rand(1,22); ?>.jpg');background-size: 1920px 768px;background-position-y:-50px">
    	
    </div>
    <header class="pattern-header"><h1 class="entry-title"><?php $this->title() ?></h1></header>
</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area" style="padding-top: 7%">
		<main id="main" class="site-main" role="main">
		<article class="hentry">
		<!-- 文章头部 -->
		<header class="entry-header">
		<!-- 标题输出 -->
		<h1 class="entry-title"><?php $this->title() ?></h1>
		<hr>
		<div class="breadcrumbs">	
			<div itemscope itemtype="http://schema.org/WebPage" id="crumbs">当前位置: <a itemprop="breadcrumb" href="<?php $this->options ->siteUrl(); ?>">Home</a> » <?php print_r($this->category());?> » 
			</div>
		</div>	
		</header>
		<!-- 正文输出 -->
		<div class="markdown-body">
		<?php $this->content(); ?>
		</div>
		<!-- 文章底部 -->
		<footer class="post-footer">
			<!-- 赞助按钮 -->
			<div class="donate">
			<a>赏</a>
				<ul class="donate_inner">
					<li class="wedonate"><img src="<?php echo theurl; ?>images/donate/.jpg"></li>
					<li class="alidonate"><img src="<?php echo theurl; ?>images/donate/.jpg"></li>
				</ul>
			</div>
			<!-- 阅读次数 -->
			<div class="post-like">
				<a href="javascript:;" data-action="ding" data-id="58" class="specsZan ">
					<i class="iconfont">&#xe612;</i>
					<span class="count"><?php echo Postviews($this); ?></span>
				</a>
			</div>
			<!-- 分享按钮 -->
			<div class="post-share">
				<ul class="sharehidden">
					<li><a href="http://qr.liantu.com/api.php?text=<?php $this->permalink(); ?>" onclick="window.open(this.href, 'renren-share', 'width=490,height=700');return false;" class="s-weixin"><img src="<?php echo theurl; ?>images/wechat.png"/></a></li>
					<li><a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink(); ?>/&title=<?php $this->title() ?>" onclick="window.open(this.href, 'weibo-share', 'width=730,height=500');return false;" class="s-qq"><img src="<?php echo theurl; ?>images/qzone.png"/></a></li>
					<li><a href="http://service.weibo.com/share/share.php?url=<?php $this->permalink(); ?>/&title=<?php $this->title() ?>" onclick="window.open(this.href, 'weibo-share', 'width=550,height=235');return false;" class="s-sina"><img src="<?php echo theurl; ?>images/sina.png"/></a></li>
					<li><a href="http://shuo.douban.com/!service/share?<?php $this->permalink(); ?>/&title=<?php $this->title() ?>" onclick="window.open(this.href, 'renren-share', 'width=490,height=600');return false;" class="s-douban"><img src="<?php echo theurl; ?>images/douban.png"/></a></li>
				</ul>
				<i class="iconfont show-share">&#xe60c;</i>
			</div>
			
			<!-- 文章标签 -->
			<div class="post-tags">
				<i class="iconfont">&#xe602;</i>
				<?php if(  count($this->tags) == 0 ): ?>
					<?php $this->category('', true, 'none'); ?>
				<?php else: ?>
					<?php $this->tags('', true, ' none'); ?>
				<?php endif; ?>
			</div>
		</footer>
		</article>
		<!-- 版权声明 -->
		<div class="open-message">
			<p>声明：<?php $this->options->title() ?>|版权所有，违者必究|如未注明，均为原创</p>
			<p>转载：转载请注明原文链接 - <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></p>	
		</div>
		<!-- 相邻文章 -->
		<section class="post-squares nextprev">
			<?php theNextPrev($this); ?>
		</section>
<?php endif; ?>
<!-- 判断文章加密结束 -->
		<!-- 个人信息 -->
		<section class="author-profile">
			<div class="info" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
				<div class="pf-gavtar">
					<div class="pf-tou" >
						<a><img src="//q.qlogo.cn/g?b=qq&nk=<?php $this->options->QQ();?>&s=100"></a>
					</div>
				</div>
				<div class="meta">
					<span class="title">Author</span>
					<h3 itemprop="name">
						<a href="/" itemprop="url" rel="author"><?php $this->author(); ?></a>
					</h3>
				</div>
			</div>
			<p><i class="iconfont">&#xe61a;</i><?php $this->options->NOTICE();?></p>
		</section>
		</main>
	</div>
</div>
<?php if($this->hidden): ?>
<?php else: ?>
<!--评论输出地方-->
<?php $this->need('comments.php'); ?>
<?php endif; ?>
</div>
</section>
<?php $this->need('footer.php'); ?>
<script>

	$(document).scroll(function () {
		var scroHs = $(document).scrollTop();
		var top = 0
		if(scroHs <450){
			var top = 50-parseInt((scroHs/900)*100)
		}

		$('.pattern-attachment-img').css('background-position-y','-'+top+'px')
	})

</script>