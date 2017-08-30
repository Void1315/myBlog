<li><a href="{{url('/')}}" class="{{$nav['index'] or ''}}"><i class="lnr lnr-home"></i> <span>主页</span></a></li>
	<li>
		<a href="#subPages" data-toggle="collapse" class="{{$nav['word']['word']?'active':'collapsed'}}"><i class="lnr lnr-file-empty"></i> <span>文章管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
		<div id="subPages" class="collapse {{$nav['word']['word'] or ''}}">
			<ul class="nav">
				<li><a href="{{url('word')}}" class="{{$nav['word']['release'] or ''}}" >
					<i class="lnr lnr-file-add"></i>发布文章</a>
				</li>
				<li>
					<a href="#" class="{{$nav['word']['config'] or ''}}" >
						<i class="lnr lnr-cog"></i>管理文章
					</a>
				</li>
				<li>
					<a href="#" class="{{$nav['word']['other'] or ''}}">
						<i class="lnr lnr-pencil"></i>还有啥?
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li>
		<a href="#updatePages" data-toggle="collapse" class="{{$nav['update']['update']?'active':'collapsed'}}"><i class="lnr lnr-cloud-upload"></i> <span>上传管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
		<div id="updatePages" class="collapse {{$nav['update']['update'] or ''}}">
			<ul class="nav">
				<li>
					<a href="#" class="{{$nav['update']['image'] or ''}}" >
						<i class="lnr lnr-picture"></i>上传图片
					</a>
				</li>
				<li>
					<a href="#" class="{{$nav['update']['video'] or ''}}" >
						<i class="lnr lnr-film-play"></i>上传视频
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li><a href="#" class="{{$nav['tage'] or ''}}"><i class="lnr lnr-bookmark"></i><span>标签管理</span></a></li>
	<li><a href="#" class="{{$nav['config'] or ''}}" ><i class="lnr lnr-cog"></i> <span>账号管理</span></a></li>
<li><a href="####" class="{{$nav['about'] or ''}}"><i class="lnr lnr-smile"></i> <span>关于本站</span></a></li>