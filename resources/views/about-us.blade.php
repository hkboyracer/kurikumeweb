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
p {
    margin-top: 1rem;
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
    <h1 class="text-center mt-5" style="color:#20A564; font-size:22px;">いま、気になっていることを検索</h1>
    <h1 class="text-center" style="color:#20A564; font-size:14px;">インスタグラムにログインなしで検索できる！</h1>
    <p class="welcome-introduction mb-3 mt-3" style="color:#848484; font-size:19px;">くりっく M E について</p>
    <div class="row justify-content-left">
        <p class="text-left">クリックMEはみなさんが日常的に体験した「楽しい」や「好き」を気軽に共有するスペースです。当サイトでは、インスタグラムにログインすることなく、インスタグラム内に投稿されている写真やストーリーを閲覧することができます。それに加え、リアルタイムのトレンドに関するキーワードやハッシュタグをいち早く確認し、最新のトレンドや今話題になっていることについて、クリックME内の専用掲示板に書き込むことも可能です。あのアーティストや注目のアイテム、行ってみたいお店など、気になる話題をピックアップして、盛り上げちゃいましょう︕</p>  
    </div>
    <h1 class="text-center mt-4 mb-4" style="font-size:22px; color:#848484;">クリック ME 宣⾔</h1>
    
    <b>-くりっく ME を ご利⽤いただく全ての⽅へ- </b>
    <p>くりっく ME はインスタグラムを軸にしたサービスを提供しています。今後も末永く運営していくにあ たり、当サイトが掲げる⽬標につきまして、ご⼀読いただけますと幸いです。</p>
    
    <b>第⼀宣⾔ くりっく ME は⼈々のふれあいを⽬的としたプラットフォームを⽬指します</b>
    <p>SNS が定着した現代では、多種多様なサービスが個々の特⾊を持って多くの⽅に使⽤されています。そ の中でくりっく ME は、皆様のより⾝近にある「楽しさ」に焦点を当て、アットホーム感溢れるコミュ ニケーションの場を築き上げることを⽬標としています。オープンなプラットフォームだからこそ、た くさんのユーザーの皆様に楽しんでいただける場所を⽬指します。</p>
   
    <b>第⼆宣⾔ くりっく ME はインスタグラムに投稿されたすべての写真やストーリーに対してコメントを つけられるサービスを⽬指します</b>
    <p>現在、インスタグラムは投稿者から寄せられた沢⼭の写真や動画で成り⽴っています。本⽇も新たな発 ⾒や共有したい内容など、写真と動画が中⼼となって展開されています。くりっく ME ではインスタグ ラムのように写真と動画のみの収集だけではなく、投稿されたコンテンツに対して話題を盛り上げる場 所としてサービスを提供することを⽬的としています。視覚的なエンターテインメント性溢れるインス タグラムのポテンシャルを、コメントを共有する場を設けることで、新たなる可能性を追求します。</p>
   
    <b>第三宣⾔ くりっく ME はネットサービスをユーザーと双⽅向でつくりあげる場として提供します</b>
    <p>様々な SNS が存在するネット社会で、ユーザーと双⽅向で築き上げるプラットフォームはもはや必要不 可⽋と⾔っても過⾔ではありません。くりっくＭＥで最も重要なことは、当サイトでコンテンツが集ま り、より沢⼭のユーザーの皆様に安⼼してサービスをご利⽤いただくことです。コンテンツが豊富にな るためには、ネット上で⽣み出されるコンテンツに対し新しい知⾒が必要だと考えます。既存のコンテ ンツだけで終わるのではなく、そこの延⻑線上から⽣み出される新しいコンテンツの広がりを⽬指しま す。</p>
    
    <b>第四宣⾔ くりっく ME はすべてのユーザーがコンテンツに対して⾃由に書き込める場を守ります</b>
    <p>表現の⾃由は⼈としての権利です。誰もが意⾒し、その意⾒を発⾔する⾃由を持っています。くりっく ＭＥではご利⽤いただくユーザーが皆、各々の考えや意⾒、感情を安⼼して発信できる場所になるよう 最善を尽くします。ネットでサービスを展開する以上、パソコンやスマホなどの画⾯を通じた上でのコ ミュニケーションとなりますが、忘れてはならないのがコミュニケーションしている相⼿はネット上の 機械ではなく画⾯越しの⼀個⼈の⼈間だということです。くりっくＭＥでは、皆様にできる限り本サー ビスをご利⽤いただけるよう務めますため、クリックＭＥ上で不適切な⾏為や嫌がらせ、または攻撃的 な⾏為とみなした場合、表現の⾃由が損なわれる可能性があります。よって、クリック ME では脅迫や 嫌がらせなどの誹謗中傷に繋がる⾏為を禁⽌します。</p>
    
    <b>第五宣⾔ くりっく ME は安⼼、安全、尊重の環境づくりにコミットします</b>
    <p>昨今、ネットによる多くの誹謗中傷が⾒られる中、くりっくＭＥではユーザーの⼀⼈ひとりが思いやり を持って、当サービスをご利⽤いただけるような環境づくりを⽬的としています。表現の⾃由を基準と し、ユーザーのさまざまな視点の意⾒を歓迎し、尊重します。皆様が快適に本サービスをご利⽤いただ けるよう、すべてのユーザーを公平に扱うよう努めて参ります。</p>
   
   
    </div>

@endsection
