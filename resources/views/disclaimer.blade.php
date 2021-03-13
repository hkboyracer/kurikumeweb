@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => 'Disclaimer'])

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
 
      <h1 class="mt-5 text-center" style="color:#848484; font-size:22px;">Disclaimer - 免責事項</h1>
      <p class="welcome-introduction mb-3 text-left" style="font-size:18px;">詳細は下記に⽰しますが、当サイトに掲載された内容によって⽣じた損害等の⼀切の責任を負いかねますのでご了承ください。</p>

     

      <h2 class="py-3" style="color:#848484; font-size:20px;"> Comments ‒ 1. コメントについて</h2>
      <p>当サイトでは、次に掲げる内容を含めるコメントは、管理⼈の裁量によって承認せず、削除することがあります。</p>
      <ul class="navbar-nav">
        
        <li class='nav-item'>1. 特定の⾃然、⼈または法⼈を誹謗し、中傷するもの</li>
        <li class='nav-item'>2. 極度にわいせつな内容を含むもの</li>
        <li class='nav-item'>3. 禁制品の取引に関するものや、他者を害する⾏為の依頼など、法律によって禁⽌されている物品、⾏為の依頼や斡旋などに関するもの </li>
        <li class='nav-item'>4. その他、公序良俗に反し、または管理⼈によって承認すべきでないと認められるもの </li>
 
      
      </ul>  
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> Contents – 2. 記事の内容について</h2>
      <p>当サイトからリンクやバナーなどによって他のサイトに移動された場合、移動先サイトで提供される情報、サービス等について⼀切の責任を負いません。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;"> External Links – 3. 外部リンクについて</h2>
      <p>当サイトのコンテンツは、可能な限り正確な情報を掲載するよう努めていますが、誤情報が⼊りこんだり、古くなっていることもあります。必ずしも正確性・信頼性を保証するものではありません。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;">Copyright – 4. 著作権・肖像権について</h2>
      <p>当サイトで掲載している⽂章・画像・動画等の著作権・肖像権は各権利所有者に帰属します。万が⼀問題がある場合は、ご連絡お願いします。</p>
      
      <h2 class="py-3" style="color:#848484; font-size:20px;">Prohibition of Unauthorized Reproduction – 5. 無断転載の禁⽌について</h2>
      <p>当サイトに存在する、⽂章・画像・動画等の著作物の情報を無断転載することを禁⽌します。</p>
    
    
    
    </div>

@endsection
