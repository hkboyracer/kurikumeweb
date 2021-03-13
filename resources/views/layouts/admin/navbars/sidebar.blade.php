<div id="wrapper">

<div class="sidebar">
    <div class="sidebar_header border-b border-gray-200 from-gray-100 to-gray-50 bg-gradient-to-t  uk-visible@s"> 
        <a href="#">
            <img src="{{ asset('argon') }}/img/brand/white.png">
            <img src="{{ asset('argon') }}/img/brand/white.png" class="logo_inverse">
        </a>
        <!-- btn night mode -->
        <a href="#" id="night-mode" class="btn-night-mode" data-tippy-placement="left" title="Switch to dark mode"></a>
    </div>
    <div class="border-b border-gray-20 flex justify-between items-center p-3 pl-5 relative uk-hidden@s">
        <h3 class="text-xl"> Navigation </h3>
        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: sidebar-active"></span>
    </div>
    <div class="sidebar_inner" data-simplebar>
        <div class="flex flex-col items-center my-6 uk-visible@s">
            <div
                class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24">
                <img src="assets/images/avatars/avatar-2.jpg"
                    class="bg-gray-200 border-4 border-white rounded-full w-full h-full">
            </div>
            <a href="profile.html" class="text-xl font-medium capitalize mt-4 uk-link-reset"> Stella Johnson
                
            </a>
            <span class="text-center">@kurikumestella</span>
            <div class="flex justify-around w-full items-center text-center uk-link-reset text-gray-800 mt-6">
                <div>
                    <a href="#">
                        投稿件数
                        <div class="color-primary"> 130</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        フォロー中
                        <div class="color-primary"> 1,230</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        フォロワー
                        <div class="color-primary"> 2,430</div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="-mx-4 -mt-1 uk-visible@s">
        <ul>
            <li class="active">
                <a href="feed.html">
                <i class="uil-home-alt"></i>
                    <span> ホーム </span> </a>
            </li>
            <li>
                <a href="explore.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    
                    <span> ホットな話題 </span> </a>
            </li>
            <li>
                <a href="chat.html">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span> 検索 </span> <span class="nav-tag"> 3</span> </a>
            </li>
            <li>
                <a href="trending.html">
                <i class="icon-material-outline-notifications"></i>
                
                    <span> 通知 </span> </a>
            </li>
            <li>
                <a href="market.html">
                    <i class="icon-feather-message-circle"></i>
                    <span> メッセージ </span> </a>
            </li>
            <li>
                <a href="setting.html">
                <i class="uil-bookmark-full"></i>
                    <span> ブックマーク </span>
                </a>
                
            </li>
            <li>
                <a href="profile.html">
                <i class="icon-material-outline-shopping-cart"></i>
                    <span> ショッピング </span> </a>
            </li>
            <li>
                <a href="profile.html">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span> プロフィール </span> </a>
            </li>
            <li>
                <a href="profile.html">
                <i class="icon-feather-settings"></i>
                    <span> 設定 </span> </a>
            </li>
            <li>
                <hr class="my-2">
            </li>
            
        </ul>
        <div class="flex flex-col items-center my-6 uk-visible@s">
        
            <a href="#" class="btn-primary my-2"> 投稿する</a>
            
            <p class="color-primary mt-2">くりっく M E について </p>
            <p class="color-primary mt-2">お問い合わせ </p>
            <p class="color-primary mt-2">免責事項</p>
            <p class="color-primary mt-2">プライバシーポリシー</p>
            <p class="color-primary mt-2 mb-5">利用規約</p>


            <p class="color-primary text-left pt-8">&copy; 2021 - Kurikume.com Copyright</p>
        </div>
    </div>

    
</div>