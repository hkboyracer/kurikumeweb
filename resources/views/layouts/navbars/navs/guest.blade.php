<style>
input::placeholder {
  color: #848484;
  opacity: 1; /* Firefox */
}

input::-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #848484;
}

input::-ms-input-placeholder { /* Microsoft Edge */
 color: #848484;
}
</style>
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container p-2 px-4">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('argon') }}/img/brand/white.png" />
        </a>
        <form class="navbar-search navbar-search-dark form-inline d-none d-md-flex pr-9">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">                    
                    <input style="background-color:#EEEEEE; color:#848484;border-top-left-radius: 35px; border-bottom-left-radius: 35px;" class="form-control" placeholder="アカウント、タグ、場所を検索" type="text">
                    <div class="input-group-prepend" style="border-top-right-radius: 35px;border-bottom-right-radius: 35px;background: #269c61;color: #fff;">
                        <span class="input-group-text"><img src="{{ asset('argon') }}/img/default-icons/general-icons/Search-Icon.png" style="width:20px"></span>
                    </div>
                </div>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav">
               
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('about-us') }}">
                        
                        <span class="nav-link-inner--text">{{ __('くりっく ME について') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('trends') }}">
                        
                        <span class="nav-link-inner--text">{{ __('トレンド ') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('stars') }}">
                        
                        <span class="nav-link-inner--text">{{ __('有名⼈') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('blog') }}">
                        
                        <span class="nav-link-inner--text">{{ __('マイページ') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        
                        <span class="nav-link-inner--text">{{ __('新規登録/ログイン') }}</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>