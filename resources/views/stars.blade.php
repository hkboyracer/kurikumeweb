@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => '私たちに関しては'])

@section('content')
@include('layouts.headers.guest')

<style>
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>
<style>
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
</style>
<style>

.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.youtube {
  background: #bb0000;
  color: white;
}

</style>

<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="#" class="google"><i class="fa fa-google"></i></a> 
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>

    <div class="container mt--8 pb-5">
    <h1 class="text-center mt-5" style="color:#20A564; font-size:22px;">最新のトレンド</h1>
        <div class="row">
            <div class="form-group col-md-4 offset-8">
                <select id="inputState" class="form-control">
                    <option selected>選択...</option>
                    <option>注⽬されている投稿順</option>
                    <option>新しい投稿順</option>
                    <option>古い投稿順</option>
                    <option>閲覧数が多い順</option>
                    <option>閲覧数が少ない順</option>
                </select>
            </div>
        </div>

    <div class="row mt-4">
    
	<div class="col-md-4 blog_grid_post_style  jl_row_1">
		<div class="jl_grid_box_wrapper">
			<div class="image-post-thumb">
				<a href="http://jellywp.com/theme/disto/demo/this-is-a-great-photo-and-nice-style-for-shooting/" class="link_image featured-thumbnail" title="This is a great photo and nice for shooting">
					<img width="780" height="450" src="/argon/img/daniel-korpai-1236913-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
						<div class="background_over_image"></div>
					</a>
					<span class="meta-category-small">
						<a class="post-category-color-text" style="background:#d66300" href="http://jellywp.com/theme/disto/demo/category/science/">理科</a>
					</span>
				</div>
				<div class="post-entry-content">
					<h3 class="image-post-title">
						<a href="http://jellywp.com/theme/disto/demo/this-is-a-great-photo-and-nice-style-for-shooting/">
                        これは素晴らしい写真で、撮影に最適です</a>
					</h3>
					<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
						<span class="jl_author_img_w" itemprop="name">
							<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
								<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
							</span>
							<span class="post-date">
								<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
							</span>
						</span>
						<div class="content_post_grid">
							<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog_grid_post_style  jl_row_2">
				<div class="jl_grid_box_wrapper">
					<div class="image-post-thumb">
						<a href="http://jellywp.com/theme/disto/demo/this-big-boss-is-work-hard-and-also-play-hard-too-in-his-life/" class="link_image featured-thumbnail" title="This big boss is work hard and also play hard">
							<img width="780" height="450" src="/argon/img/s-o-c-i-a-l-c-u-t-1133933-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
								<div class="background_over_image"></div>
							</a>
							<span class="meta-category-small">
								<a class="post-category-color-text" style="background:#36c942" href="http://jellywp.com/theme/disto/demo/category/sports/">スポーツ</a>
							</span>
						</div>
						<div class="post-entry-content">
							<h3 class="image-post-title">
								<a href="http://jellywp.com/theme/disto/demo/this-big-boss-is-work-hard-and-also-play-hard-too-in-his-life/">
                                このビッグボスは一生懸命働き、また一生懸命遊ぶ</a>
							</h3>
							<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
								<span class="jl_author_img_w" itemprop="name">
									<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
										<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
									</span>
									<span class="post-date">
										<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
									</span>
								</span>
								<div class="content_post_grid">
									<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog_grid_post_style  jl_row_3">
						<div class="jl_grid_box_wrapper">
							<div class="image-post-thumb">
								<a href="http://jellywp.com/theme/disto/demo/enjoy-a-great-time-before-the-sunset-near-the-sea/" class="link_image featured-thumbnail" title="Enjoy a great view of flower before the sunset">
									<img width="780" height="450" src="/argon/img/wade-lambert-681672-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
										<div class="background_over_image"></div>
									</a>
									<span class="meta-category-small">
										<a class="post-category-color-text" style="background:#36c942" href="http://jellywp.com/theme/disto/demo/category/sports/">スポーツ</a>
									</span>
								</div>
								<div class="post-entry-content">
									<h3 class="image-post-title">
										<a href="http://jellywp.com/theme/disto/demo/enjoy-a-great-time-before-the-sunset-near-the-sea/">
                                        日没前に花の素晴らしい景色をお楽しみください</a>
									</h3>
									<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
										<span class="jl_author_img_w" itemprop="name">
											<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
												<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
											</span>
											<span class="post-date">
												<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
											</span>
										</span>
										<div class="content_post_grid">
											<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clear_line_3col_home"></div>
							<div class="col-md-4 blog_grid_post_style  jl_row_4">
								<div class="jl_grid_box_wrapper">
									<div class="image-post-thumb">
										<a href="http://jellywp.com/theme/disto/demo/we-are-best-friends-and-we-been-every-where-together/" class="link_image featured-thumbnail" title="We are best friends and we been every where">
											<img width="780" height="450" src="/argon/img/roberto-nickson-1299738-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
												<div class="background_over_image"></div>
											</a>
											<span class="meta-category-small">
												<a class="post-category-color-text" style="background:#6b34ba" href="http://jellywp.com/theme/disto/demo/category/gaming/">ゲーム</a>
											</span>
										</div>
										<div class="post-entry-content">
											<h3 class="image-post-title">
												<a href="http://jellywp.com/theme/disto/demo/we-are-best-friends-and-we-been-every-where-together/">
                                                私たちは親友であり、どこにでもいました</a>
											</h3>
											<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
												<span class="jl_author_img_w" itemprop="name">
													<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
														<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
													</span>
													<span class="post-date">
														<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
													</span>
												</span>
												<div class="content_post_grid">
													<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 blog_grid_post_style  jl_row_5">
										<div class="jl_grid_box_wrapper">
											<div class="image-post-thumb">
												<a href="http://jellywp.com/theme/disto/demo/this-thing-is-strong-and-make-your-job-more-easy/" class="link_image featured-thumbnail" title="This thing is strong and make your job good">
													<img width="780" height="450" src="/argon/img/lucas-benjamin-1326601-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
														<div class="background_over_image"></div>
													</a>
													<span class="meta-category-small">
														<a class="post-category-color-text" style="background:#ed1c1c" href="http://jellywp.com/theme/disto/demo/category/active/">アクティブ</a>
													</span>
													<span class="jl_post_type_icon">
														<i class="la la-camera"></i>
													</span>
												</div>
												<div class="post-entry-content">
													<h3 class="image-post-title">
														<a href="http://jellywp.com/theme/disto/demo/this-thing-is-strong-and-make-your-job-more-easy/">
                                                        このことは強く、あなたの仕事を良くします</a>
													</h3>
													<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
														<span class="jl_author_img_w" itemprop="name">
															<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
																<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
															</span>
															<span class="post-date">
																<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
															</span>
														</span>
														<div class="content_post_grid">
															<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 blog_grid_post_style  jl_row_6">
												<div class="jl_grid_box_wrapper">
													<div class="image-post-thumb">
														<a href="http://jellywp.com/theme/disto/demo/nice-photo-shooting-with-view-of-modern-apple-smart-watch/" class="link_image featured-thumbnail" title="Nice photo shooting with hand classic style">
															<img width="780" height="450" src="/argon/img/mikky-koopac-1056364-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" loading="lazy">
																<div class="background_over_image"></div>
															</a>
															<span class="meta-category-small">
																<a class="post-category-color-text" style="background:#0015ff" href="http://jellywp.com/theme/disto/demo/category/business/">ビジネス</a>
															</span>
														</div>
														<div class="post-entry-content">
															<h3 class="image-post-title">
																<a href="http://jellywp.com/theme/disto/demo/nice-photo-shooting-with-view-of-modern-apple-smart-watch/">
                                                                手クラシックスタイルでの素敵な写真撮影</a>
															</h3>
															<span class="jl_post_meta" itemscope="" itemprop="author" itemtype="http://schema.org/Person">
																<span class="jl_author_img_w" itemprop="name">
																	<img src="/argon/img/post6-1-1-100x100.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
																		<a href="http://jellywp.com/theme/disto/demo/author/greedt/" title="Posts by Anna Nikova" rel="author">Anna Nikova</a>
																	</span>
																	<span class="post-date">
																		<i class="fa fa-clock-o"></i>2021 年 02 月 12 日
																	</span>
																</span>
																<div class="content_post_grid">
																	<p>Lorem Ipsumは、印刷および植字業界の単なるダミーテキストです。 Lorem Ipsumは、未知の印刷業者がタイプのギャレーを取り、それをスクランブルしてタイプ標本の本を作成した1500年代以来、業界の標準的なダミーテキストでした。それは5世紀だけでなく、電子植字への飛躍も生き延び、本質的には変わっていません。 1960年代に、Lorem Ipsumのパッセージを含むLetrasetシートがリリースされ、最近では、LoremIpsumのバージョンを含む</p>
																</div>
															</div>
														</div>
													</div>
													<div class="clear_line_3col_home"></div>
												</div>
        
       
    </div>

@endsection
