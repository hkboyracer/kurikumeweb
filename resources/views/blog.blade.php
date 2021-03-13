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

    <div class="container mt--8 pb-5">
    <div id="owl-demo" class="owl-carousel">

        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-1.png" alt="Banner 1"></div>
        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-2.png" alt="Banner 2"></div>
        <div class="item"><img src="{{ asset('argon') }}/img/default-icons/top-banners/banner-3.png" alt="Banner 3"></div>

    </div>
    <h1 class="text-center mt-5" style="color:#848484; font-size:22px;">クリックMEについて</h1>
    <p class="welcome-note mt-3" style="font-size:30px;">いま、気になっていることを検索</p>
    <p class="welcome-introduction mb-3" style="font-size:19px;">インスタグラムにログインなしで検索！</p>
    <div class="row justify-content-left">
        <p class="text-left">クリックMEはみなさんが日常的に体験した「楽しい」や「好き」を気軽に共有するスペースです。当サイトでは、インスタグラムにログインすることなく、インスタグラム内に投稿されている写真やストーリーを閲覧することができます。それに加え、リアルタイムのトレンドに関するキーワードやハッシュタグをいち早く確認し、最新のトレンドや今話題になっていることについて、クリックME内の専用掲示板に書き込むことも可能です。あのアーティストや注目のアイテム、行ってみたいお店など、気になる話題をピックアップして、盛り上げちゃいましょう︕</p>  
    </div>
    <h1 class="text-center mt-4" style="font-size:22px; color:#848484;">クリック ME 宣⾔</h1>
    </div>

@endsection
