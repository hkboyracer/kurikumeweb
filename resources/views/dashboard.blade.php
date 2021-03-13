@extends('layouts.admin.app', ['class' => '','pageTitle' => 'ユーザー設定'])

@section('content')
    @include('layouts.admin.headers.cards')
    
    <div class="container-fluid ">


    <div class="main_content">

<header>
    <div class="header_inner">
        <div class="left-side">
            <!-- Logo -->
            <div id="logo" class=" uk-hidden@s">
                <a href="home.html">
                    <img src="assets/images/logo-mobile.png" alt="">
                    <img src="assets/images/logo-mobile-light.png" class="logo_inverse">
                </a>
            </div>

            <div class="triger" uk-toggle="target: #wrapper ; cls: sidebar-active">
                <i class="uil-bars"></i>
            </div>

            <div class="header_search">
                <input type="text" placeholder="キーワードやハッシュタグを検索">
                <div class="icon-search">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

        </div>
        <div class="right-side lg:pr-4">
             <!-- upload -->
            <a href="#"
                class="bg-pink-500 flex font-bold hidden hover:bg-pink-600 hover:text-white inline-block items-center lg:block max-h-10 mr-4 px-4 py-2 rounded shado text-white">
                <ion-icon name="add-circle" class="-mb-1
                 mr-1 opacity-90 text-xl uilus-circle"></ion-icon> アップロード

            </a>
             <!-- upload dropdown box -->
            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small" class="header_dropdown">

                <!-- notivication header -->
                <div class="px-4 py-3 -mx-5 -mt-4 mb-5 border-b">
                    <h4>Upload Video</h4>
                </div>

                <!-- notification contents -->
                <div class="flex justify-center flex-center text-center dark:text-gray-300">

                    <div class="flex flex-col choose-upload text-center">
                       
                        <div class="bg-gray-100 border-2 border-dashed flex flex-col h-24 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                            </svg>
                        </div>

                        <p class="my-3 leading-6"> Do you have a video wants to share us <br> please upload her ..
                        </p>
                        <div uk-form-custom>
                            <input type="file">
                            <a href="#" class="button soft-warning small"> Choose file</a>
                        </div>

                        <a href="#" class="uk-text-muted mt-3 uk-link"
                            uk-toggle="target: .choose-upload ;  animation: uk-animation-slide-right-small, uk-animation-slide-left-medium; queued: true">
                            Or Import Video </a>
                    </div>

                    <div class="uk-flex uk-flex-column choose-upload" hidden>
                        <div class="mx-auto flex flex-col h-24 items-center justify-center relative w-full rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="my-3 leading-6"> Import videos from YouTube <br> Copy / Paste your video link here </p>
                        <form class="uk-grid-small" uk-grid>
                            <div class="uk-width-expand">
                                <input type="text" class="uk-input uk-form-small  bg-gray-200 dark:bg-gray-700" style="box-shadow:none" placeholder="Paste link">
                            </div>
                            <div class="uk-width-auto"> <button type="submit" class="button soft-warning -ml-2">
                                    Import </button> </div>
                        </form>
                        <a href="#" class="uk-text-muted mt-3 uk-link"
                            uk-toggle="target: .choose-upload ; animation: uk-animation-slide-left-small, uk-animation-slide-right-medium; queued: true">
                            Or Upload Video </a>
                    </div>

                </div>
                <div class="px-4 py-3 -mx-5 -mb-4 mt-5 border-t text-sm dark:border-gray-500 dark:text-gray-500">
                    Your Video size Must be Maxmium 999MB
                </div>
            </div>
            
             <!-- Notification -->

            <a href="#" class="header-links-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </a>
            <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                <h4
                    class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                    Notification </h4>
                <ul class="dropdown_scrollbar" data-simplebar>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p> <strong>Adrian Mohani</strong>  Lorem ipsum dolor cursus
                                    <span class="text-link"> Adipiscing massa convallis  </span>
                                </p>
                                <span class="time-ago"> 2 hours ago </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p>
                                    <strong>Stella Johnson</strong> Nonummy nibh euismod
                                    <span class="text-link"> Imperdiet doming </span>
                                </p>
                                <span class="time-ago"> 9 hours ago </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p>
                                    <strong>Alex Dolgove</strong>  Lorem ipsum dolor cursus
                                    <span class="text-link"> Adipiscing massa convallis  </span>
                                </p>
                                <span class="time-ago"> 12 hours ago </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p>
                                    <strong>Stella Johnson</strong> Nonummy nibh euismod
                                    <span class="text-link"> Imperdiet doming </span>
                                </p>
                                <span class="time-ago"> Yesterday </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p>
                                    <strong>Alex Dolgove</strong>  Lorem ipsum dolor cursus
                                    <span class="text-link"> Adipiscing massa convallis  </span>
                                </p>
                                <span class="time-ago"> 12 hours ago </span>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="#" class="see-all">See all</a>
            </div>

            <!-- Messages -->

            <a href="#" class="header-links-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
            </a>
            <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                <h4
                    class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                    Messages </h4>
                <ul class="dropdown_scrollbar" data-simplebar>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> John menathon </strong> <time> 6:43 PM</time>
                                <p> Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> Zara Ali </strong> <time>12:43 PM</time>
                                <p>  Sediam nonummy nibh euismod tincidunt laoreet dolore  </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> Mohamed Ali </strong> <time> Wed </time>
                                <p> Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> John menathon </strong> <time> Sun</time>
                                <p> Namliber tempor cumsoluta nobis eleifend option adipiscing </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> Zara Ali </strong> <time> Fri</time>
                                <p> Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> Mohamed Ali </strong> <time>1 Week ago</time>
                                <p>  Sediam nonummy nibh euismod tincidunt laoreet dolore  </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="#" class="see-all">See all</a>
            </div>

            <!-- profile -->

            <a href="#">
                <img src="assets/images/avatars/avatar-2.jpg" class="header-avatar" alt="">
            </a>
            <div uk-drop="mode: click;offset:9" class="header_dropdown profile_dropdown border-t">
                <ul>
                    <li><a href="#"> Account setting </a> </li>
                    <li><a href="#"> Payments </a> </li>
                    <li><a href="#"> Help </a> </li>
                    <li><a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        
                        <span>{{ __('Logout') }}</span>
                    </a></li>
                </ul>
            </div>

        </div>
    </div>
</header>

<div class="container m-auto">

<h1 class="lg:text-2xl text-lg leading-none text-gray-900 tracking-tight mb-5"> プロフィール設定 </h1>

    <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

        <!-- left sidebar-->
        <div class="space-y-5 flex-shrink-0 lg:w-7/12">

            <!-- post 1-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                    <!-- post header-->
                    <div class="flex justify-between items-center px-4 py-3">
                        <div class="flex flex-1 items-center space-x-4">
                            <span class="block capitalize font-semibold dark:text-gray-100"> 一般設定 </span>
                        </div>
                    <div>
                  
            </div>
        </div>


                <div class="py-3 px-4 space-y-3"> 

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    ユーザー名
                     <i class="icon-feather-settings fr"></i>
                     
                    </div>   
                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    メールアドレス
                     <i class="icon-feather-settings fr"></i>
                     
                    </div> 
                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    ホームページ
                     <i class="icon-feather-settings fr"></i>
                     
                    </div>  
                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    プロフィール文
                     <i class="icon-feather-settings fr"></i>
                     
                    </div>  
                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    性別
                     <i class="icon-feather-settings fr"></i>
                     
                    </div>               

                </div>

            </div> 
            <!-- post 1 end -->
            <!-- post 2-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> パスワード </span>
                    </div>
                
                </div>


                <div class="py-3 px-4 space-y-3"> 

                <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                現在のパスワード
                     <i class="icon-feather-settings fr"></i>
                     
                    </div>    
                                   

                </div>

            </div> <!-- post 2 end -->   
            <!-- post 3-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> 言語と地域 </span>
                    </div>
                 
                </div>


                <div class="py-3 px-4 space-y-3"> 

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                        表示する言語を選択する <i class="icon-feather-settings fr"></i>  
                    </div> 
                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    お住まいの国・地域 <i class="icon-feather-settings fr"></i>  
                    </div> 
                                     

                </div>

            </div> <!-- post 3 end --> 
            <!-- post 4-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> アカウント認証 </span>
                    </div>
                  
                </div>


                <div class="py-3 px-4 space-y-3"> 

                    <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                    アカウントを認証する <i class="icon-feather-settings fr"></i>  
                    </div> 
                                       

                </div>

            </div> <!-- post 4 end --> 
            <!-- post 5-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> SNS アカウント連携 </span>
                    </div>
                  
                </div>


                <div class="py-3 px-4 space-y-3"> 

                        <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                        既存の SNS アカウントを連携させる <i class="icon-feather-settings fr"></i>  
                        </div>
                        

                </div>

            </div> <!-- post 5 end --> 
            <!-- post 6-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> お支払い設定 </span>
                    </div>
                  
                </div>


                <div class="py-3 px-4 space-y-3"> 

                        <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                            お支払いの管理・登録をする <i class="icon-feather-settings fr"></i>  
                        </div>
                        

                </div>

            </div> <!-- post 6 end -->    
            <!-- post 7-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> プライバシー設定 </span>
                    </div>
                  
                </div>


                <div class="py-3 px-4 space-y-3"> 

                        <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                            アカウントプライバシーの設定 <i class="icon-feather-settings fr"></i>  
                        </div>

                </div>

            </div> <!-- post 7 end --> 
            <!-- post 8-->
            <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <span class="block capitalize font-semibold dark:text-gray-100"> アカウントの削除 </span>
                    </div>
                  
                </div>


                <div class="py-3 px-4 space-y-3"> 

                        <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                            アカウントの削除 <i class="icon-feather-settings fr"></i>  
                        </div>                  

                </div>

            </div> <!-- post 8 end -->                                                                               

 
            



        </div>

        <!-- right sidebar-->
        <div class="lg:w-5/12">

            <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

                <div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
                    <h2 class="font-semibold text-lg">あなたのおすすめのタグ</h2>      
                </div>
               
                <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
                    <div class="flex items-center justify-between py-3">
                        <div class="flex flex-1 items-center space-x-4">                           
                            <div class="flex flex-col">
                                <span class="block capitalize font-semibold"> #Johnsonsmith </span>                                
                            </div>
                        </div>
                        
                        <p>(300 Posts)</p>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <div class="flex flex-1 items-center space-x-4">                           
                            <div class="flex flex-col">
                                <span class="block capitalize font-semibold"> #Johnsonsmith </span>                                
                            </div>
                        </div>
                        
                        <p>(300 Posts)</p>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <div class="flex flex-1 items-center space-x-4">                           
                            <div class="flex flex-col">
                                <span class="block capitalize font-semibold"> #Johnsonsmith </span>                                
                            </div>
                        </div>
                        
                        <p>(300 Posts)</p>
                    </div>
                    <div class="flex items-center justify-between py-3">
                        <div class="flex flex-1 items-center space-x-4">                           
                            <div class="flex flex-col">
                                <span class="block capitalize font-semibold"> #Johnsonsmith </span>                                
                            </div>
                        </div>
                        
                        <p>(300 Posts)</p>
                    </div>

                </div>

            </div>

            <div class="mt-5 bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

<div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
    <h2 class="font-semibold text-lg">おすすめのユーザー</h2>
    <a href="#"> リフレッシュ</a>
</div>

<div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
    <div class="flex items-center justify-between py-3">
        <div class="flex flex-1 items-center space-x-4">
            <a href="profile.html">
                <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 rounded-full w-10 h-10">
            </a>
            <div class="flex flex-col">
                <span class="block capitalize font-semibold"> Johnson smith </span>
                <span class="block capitalize text-sm"> Australia </span>
            </div>
        </div>
        
        <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800 primary-color"> フォローする </a>
    </div>
    <div class="flex items-center justify-between py-3">
        <div class="flex flex-1 items-center space-x-4">
            <a href="profile.html">
                <img src="assets/images/avatars/avatar-1.jpg" class="bg-gray-200 rounded-full w-10 h-10">
            </a>
            <div class="flex flex-col">
                <span class="block capitalize font-semibold"> James Lewis </span>
                <span class="block capitalize text-sm"> Istanbul </span>
            </div>
        </div>
        <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800 primary-color" > フォローする </a>
    </div>
    <div class="flex items-center justify-between py-3">
        <div class="flex flex-1 items-center space-x-4">
            <a href="profile.html">
                <img src="assets/images/avatars/avatar-5.jpg" class="bg-gray-200 rounded-full w-10 h-10">
            </a>
            <div class="flex flex-col">
                <span class="block capitalize font-semibold"> John Michael </span>
                <span class="block capitalize text-sm"> New York </span>
            </div>
        </div>
        <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800 primary-color"> フォローする </a>
    </div>
    <div class="flex items-center justify-between py-3">
        <div class="flex flex-1 items-center space-x-4">
            <a href="profile.html">
                <img src="assets/images/avatars/avatar-7.jpg" class="bg-gray-200 rounded-full w-10 h-10">
            </a>
            <div class="flex flex-col">
                <span class="block capitalize font-semibold"> Monroe Parker </span>
                <span class="block capitalize text-sm"> Yeman </span>
            </div>
        </div>
        
        <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800 primary-color"> フォローする </a>
    </div>

</div>

</div>

            <div class="mt-5" uk-sticky="offset:28; bottom:true ; media @m">
                <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

                    <div class="bg-gray-50 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:bg-gray-800 dark:border-gray-700">
                        <h2 class="font-semibold text-lg">最新</h2>
                        <a href="explore.html"> すべてを見る</a>
                    </div>

                    <div class="grid grid-cols-2 gap-2 p-3 uk-link-reset">

                        <div class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle"> 
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img2.jpg" class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">   
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>
                        
                        <div class="bg-red-500 max-w-full h-40 rounded-lg relative overflow-hidden uk-transition-toggle"> 
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img7.jpg" class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">   
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>                             
                        
                        <div class="bg-red-500 max-w-full h-40 -mt-8 rounded-lg relative overflow-hidden uk-transition-toggle"> 
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img5.jpg" class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">   
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                        <div class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle"> 
                            <a href="#story-modal" uk-toggle>
                                <img src="assets/images/post/img3.jpg" class="w-full h-full absolute object-cover inset-0">
                            </a>
                            <div class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">   
                                <a href="#"> <i class="uil-heart"></i> 150 </a>
                                <a href="#"> <i class="uil-heart"></i> 30 </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>               


</div>

</div>






        
        @include('layouts.admin.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush