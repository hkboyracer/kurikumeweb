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
    <div id="owl-demo" class="owl-carousel" style="float:left;">

        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-1.png" alt="Banner 1"></div>
        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-2.png" alt="Banner 2"></div>
        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-3.png" alt="Banner 3"></div>

    </div>
    <h1 class="text-center mt-5" style="color:#848484; font-size:30px;">いま、気になっていることを検索</h1>
    <p class="welcome-introduction mb-3" style="font-size:19px;">インスタグラムにログインなしで検索！</p>

    <div class="row py-6">
        <div class="col-md-4">
        <div class="main-info__block">
                    <div class="main-info__block-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-26.875" y1="557.891" x2="-26.875" y2="617.584" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_1_);" d="M456,464V56c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v408h-16V152c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v312h-16V248c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v216h-16V344c0-4.418-3.582-8-8-8H32c-4.418,0-8,3.582-8,8v120H0v16h480v-16H456z M40,464V352h64v112H40z M152,464V256h64v208H152z M264,464V160h64v304H264z M376,464V64h64v400H376z"></path><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-34.2285" y1="557.891" x2="-34.2285" y2="617.584" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_2_);" d="M69.656,245.656L288,27.312V72h16V0h-72v16h44.688L58.344,234.344L69.656,245.656z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </div>
                    <div class="main-info__block-text">
                        <div class="main-info__block-title">
                        さまざまなアカウントを分析
                        </div>
                        くりっく M E のアルゴリズムは Instagram, Facebook<br>
                        そして Twitter のアカウン<br>
                        トを分析し、様々なアカウントと比較します
                    </div>
                </div>
        </div>
        <div class="col-md-4">
        <div class="main-info__block">
                    <div class="main-info__block-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.252 480.252" style="enable-background:new 0 0 480.252 480.252;" xml:space="preserve"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-26.749" y1="560.307" x2="-26.749" y2="618.071" gradientTransform="matrix(8 0 0 -8 454.1181 4943.2681)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_1_);" d="M456.126,464.252v-296c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v296h-16v-184c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v184h-16v-264c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v264h-16v-152c0-4.418-3.582-8-8-8h-80c-4.418,0-8,3.582-8,8v152h-24v16h480v-16H456.126z M40.126,464.252v-144h64v144H40.126z M152.126,464.252v-256h64v256H152.126z M264.126,464.252v-176h64v176H264.126z M376.126,464.252v-288h64v288H376.126z"></path><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-26.7342" y1="560.307" x2="-26.7342" y2="618.071" gradientTransform="matrix(8 0 0 -8 454.1181 4943.2681)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_2_);" d="M72.126,224.252c22.091-0.001,39.999-17.91,39.998-40.002c0-7.842-2.306-15.512-6.63-22.054l56.624-56.632c6.49,4.343,14.119,6.67,21.928,6.688c2.355,0.001,4.705-0.205,7.024-0.616c7.611-1.334,14.667-4.86,20.304-10.144l47.464,36.488c-7.922,20.622,2.373,43.762,22.995,51.684c20.622,7.922,43.762-2.373,51.684-22.995	c4.646-12.094,3.147-25.689-4.023-36.481l56.608-56.608c18.477,12.23,43.37,7.165,55.599-11.312s7.165-43.37-11.312-55.599s-43.37-7.165-55.599,11.312c-8.886,13.425-8.886,30.862,0,44.287l-56.608,56.608c-15.855-10.48-36.895-8.356-50.336,5.08c-0.152,0.152-0.24,0.328-0.384,0.472l-46.776-35.952c8.985-20.182-0.092-43.826-20.274-52.811s-43.826,0.092-52.811,20.274	c-5.557,12.483-4.358,26.94,3.181,38.336l-56.6,56.608c-18.429-12.183-43.244-7.119-55.426,11.31s-7.119,43.244,11.31,55.426C56.609,221.946,64.281,224.252,72.126,224.252L72.126,224.252z M408.126,16.252c13.255,0,24,10.745,24,24s-10.745,24-24,24	s-24-10.745-24-24S394.871,16.252,408.126,16.252z M296.126,128.252c13.255-0.002,24.001,10.742,24.003,23.997c0.001,6.369-2.53,12.477-7.035,16.979c-9.5,9.055-24.436,9.055-33.936,0c-9.376-9.37-9.38-24.566-0.011-33.941C283.649,130.782,289.757,128.251,296.126,128.252L296.126,128.252z M164.47,58.484c3.638-5.226,9.214-8.781,15.488-9.872c1.393-0.239,2.803-0.359,4.216-0.36c4.911,0.005,9.701,1.522,13.72,4.344c10.857,7.604,13.494,22.569,5.891,33.426s-22.569,13.494-33.426,5.891c-10.857-7.604-13.494-22.569-5.891-33.426C164.469,58.486,164.469,58.485,164.47,58.484L164.47,58.484z M55.158,167.276c9.376-9.371,24.573-9.368,33.944,0.008s9.368,24.573-0.008,33.944c-9.5,9.055-24.436,9.055-33.936,0c-9.376-9.37-9.38-24.566-0.011-33.941C55.151,167.283,55.154,167.28,55.158,167.276z"></path><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </div>
                    <div class="main-info__block-text">
                        <div class="main-info__block-title">
                        気になる投稿とユーザーを予測
                        </div>
                        くりっく M E はあなたの“好き”に沿ったコンテンツ<br>
                        を提供します。あなた の残すコメントや、いいねであなたの<br>
                        “好き”を把握します。
                    </div>
                </div>
        </div>
        <div class="col-md-4">
        <div class="main-info__block">
                    <div class="main-info__block-icon">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve"><g><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-26.875" y1="555.755" x2="-26.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_1_);" d="M240,112c30.928,0,56-25.072,56-56S270.928,0,240,0s-56,25.072-56,56	C184.035,86.913,209.087,111.965,240,112z M240,16c22.091,0,40,17.909,40,40s-17.909,40-40,40s-40-17.909-40-40	C200.026,33.92,217.92,16.026,240,16z"></path><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-26.875" y1="555.755" x2="-26.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_2_);" d="M336,328V192c-0.044-39.746-32.254-71.956-72-72h-48c-39.746,0.044-71.956,32.254-72,72v136	h32v152h16V296h-16v16h-16V192c0.035-30.913,25.087-55.965,56-56h48c30.913,0.035,55.965,25.087,56,56v120h-16v-16h-16v184h16V328	H336z"></path><linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-26.875" y1="555.755" x2="-26.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_3_);" d="M232,328h16v152h-16V328z"></path></g><g><linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="-6.875" y1="555.755" x2="-6.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_4_);" d="M400,176c26.51,0,48-21.49,48-48s-21.49-48-48-48s-48,21.49-48,48	C352.026,154.499,373.501,175.974,400,176z M400,96c17.673,0,32,14.327,32,32s-14.327,32-32,32s-32-14.327-32-32S382.327,96,400,96	z"></path><linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="-4.875" y1="555.755" x2="-4.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_5_);" d="M480,240c-0.035-30.913-25.087-55.965-56-56h-72v16h72c22.08,0.026,39.974,17.92,40,40v104	h-16v-16h-16v152h16V360h32V240z"></path><linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-13.875" y1="555.755" x2="-13.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_6_);" d="M352,344h-32v16h32v120h16V328h-16V344z"></path><linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="-6.875" y1="555.755" x2="-6.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_7_);" d="M392,360h16v120h-16V360z"></path><linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="-46.875" y1="555.755" x2="-46.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_8_);" d="M80,176c26.51,0,48-21.49,48-48s-21.49-48-48-48s-48,21.49-48,48		C32.026,154.499,53.501,175.974,80,176z M80,96c17.673,0,32,14.327,32,32s-14.327,32-32,32s-32-14.327-32-32S62.327,96,80,96z"></path><linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="-48.875" y1="555.755" x2="-48.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_9_);" d="M56,200h72v-16H56c-30.913,0.035-55.965,25.087-56,56v120h32v120h16V328H32v16H16V240	C16.026,217.92,33.92,200.026,56,200z"></path><linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="-39.875" y1="555.755" x2="-39.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_10_);" d="M128,328h-16v152h16V360h32v-16h-32V328z"></path><linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="-46.875" y1="555.755" x2="-46.875" y2="616.575" gradientTransform="matrix(8 0 0 -8 455 4941)"><stop offset="0" style="stop-color:#20A564"></stop><stop offset="1" style="stop-color:#20A564"></stop></linearGradient><path style="fill:url(#SVGID_11_);" d="M72,360h16v120H72V360z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </div>
                    <div class="main-info__block-text">
                        <div class="main-info__block-title">
                        匿名で閲覧が可能！
                        </div>
                        くりっく M E はあなたの“好き”に沿ったコンテンツ<br>
                        の残すコメントや、いいねなどで、あなたの<br>
                        “好き”を把握します。
                    </div>
                </div>
        </div>
    </div>
    <h1 class="text-center mt-3 mb-5" style="color:#848484; font-size:30px;">最も人気のあるトレンド</h1>
    <div class="row mt-4">
    
        <div class="col-md-4   jl_row_1">
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


        <div class="col-md-4   jl_row_2">
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
        <div class="col-md-4   jl_row_3">
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
        <div class="col-md-4   jl_row_4">
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
        <div class="col-md-4   jl_row_5">
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
        <div class="col-md-4   jl_row_6">
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

            <div id="owl-tags" class="owl-carousel mt-5 mb-5 " style="float:left;">

<a href="#">フットボール</a>
<a href="#">私</a>
<a href="#">パーティー</a>
<a href="#">テニス</a>
<a href="#">太陽</a>
<a href="#">君は</a>
<a href="#">ファッション</a>
<a href="#">可愛い</a>
<a href="#">ホット</a>
<a href="#">赤ちゃん</a>
<a href="#">女の子</a>
<a href="#">技術</a>
<a href="#">ヌード</a>
<a href="#">素晴らしい</a>
<a href="#">フラワーズ</a>
<a href="#">男の子</a>


</div>

    </div>


    
    <div class="container mt--8" >
    <h1 class="text-center mt-8 mb-5" style="color:#848484; font-size:30px;">注目の有名人</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="user-profile text-left"><img src="/argon/img/post6-1-1-100x100.jpg" alt=""></div>
            <div class="user-description ">
                <span class="category"><a style="background-color:#20A564;color:#fff;">Techno</a></span>
                <p class="text">手をつないで世界中の旅を楽しんでください！</p>
                <span class="post-date">
                    <i class="fa fa-clock-o"></i>2021 年 02 月 12 日
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="user-profile text-left"><img src="/argon/img/post6-1-1-100x100.jpg" alt=""></div>
            <div class="user-description ">
            <span class="category"><a style="background-color:#20A564;color:#fff;">Techno</a></span>
                <p class="text">手をつないで世界中の旅を楽しんでください！</p>
                <span class="post-date">
                    <i class="fa fa-clock-o"></i>2021 年 02 月 12 日
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="user-profile text-left"><img src="/argon/img/post6-1-1-100x100.jpg" alt=""></div>
            <div class="user-description ">
            <span class="category"><a style="background-color:#20A564;color:#fff;">Techno</a></span>
                <p class="text">手をつないで世界中の旅を楽しんでください！</p>
                <span class="post-date">
                    <i class="fa fa-clock-o"></i>2021 年 02 月 12 日
                </span>
            </div>
        </div>
        <div class="col-md-4">
            <div class="user-profile text-left"><img src="/argon/img/post6-1-1-100x100.jpg" alt=""></div>
            <div class="user-description ">
            <span class="category"><a style="background-color:#20A564;color:#fff;">Techno</a></span>
                <p class="text">手をつないで世界中の旅を楽しんでください！</p>
                <span class="post-date">
                    <i class="fa fa-clock-o"></i>2021 年 02 月 12 日
                </span>
            </div>
        </div>
        
    </div>

    </div>
</div>

@endsection
