@extends('blog.layout.layout')

@section('index')

	<div class="content-body">
		<div class="container">
			<div class="row">
				<main class="col-md-8">
				@foreach($articles as $article)
					<article class="post post-1">
						<header class="entry-header">
							<h1 class="entry-title">
								<a href="single.html">{{$article->title}}</a>
							</h1>
							<div class="entry-meta">
								<span class="post-category"><a href="#">一个标签</a></span>
								<span class="post-date"><a href="#"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00">February 2, 2013</time></a></span>
								<span class="post-author"><a href="#">{{mb_strlen($article->content,'utf-8')}} 字</a></span>
								<span class="comments-link"><a href="#">我是评论数</a></span>
							</div>
						</header>
						<div class="entry-content clearfix">
							<p>{{mb_substr($article->content,0,100,'utf-8')}}</p>
							<div class="read-more cl-effect-14">
								<a href="#" class="more-link">阅读全文 <span class="meta-nav">→</span></a>
							</div>
						</div>
						<footer class="article-footer tage-box" id="app">
							<i class="icon ion-ios-pricetags tage-head"></i>
							<tage mmessage="{{$article->tage_content}}" color="{{$article->color}}"></tage>
						</footer>
					</article>
				@endforeach
				</main>
				<aside class="col-md-4">
					<div class="widget widget-recent-posts">		
						<h3 class="widget-title">近期热门文章</h3>		
						<ul>
							<li>
								<a href="#">Adaptive Vs. Responsive Layouts And Optimal Text Readability</a>
							</li>
							<li>
								<a href="#">Web Design is 95% Typography</a>
							</li>
							<li>
								<a href="#">Paper by FiftyThree</a>
							</li>
						</ul>
					</div>
					<div class="widget widget-archives">		
						<h3 class="widget-title">时间轴</h3>		
						<ul>
							<li>
								<a href="#">November 2014</a>
							</li>
							<li>
								<a href="#">September 2014</a>
							</li>
							<li>
								<a href="#">January 2013</a>
							</li>
						</ul>
					</div>

					<div class="widget widget-category">		
						<h3 class="widget-title">标签</h3>		
						<ul>
							<li>
								<a href="#">Web Design</a>
							</li>
							<li>
								<a href="#">Web Development</a>
							</li>
							<li>
								<a href="#">SEO</a>
							</li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
<!-- <script src="{{ asset('js/app.js') }}"></script> -->

@endsection
