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
@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => '新規登録/ログイン'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
    <p class="welcome-note mt-5">新規登録・ログイン</p>
    <p class="welcome-introduction mb-6">当サイトにコンテンツのアップロードを希望する際、アカウントを作成いただいた上で
個々のアカウント通じておこなっていただきます。下記のフォームからご登録、または
ログインをお願いいたします。</p>
        <div class="row justify-content-center">
        
            <div class="col-lg-6 col-md-6">
            
                <div class="card  border-0">
                    
                    <div class="card-header bg-transparent">
                        <div class="text-muted text-left mt-2 mb-3"><small style="color:#20A564; font-size:21px;">{{ __('くりっく ME にログインする') }}</small></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('メールアドレスまたはくりっく ME I D') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required >
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('パスワード') }}" type="password" value="" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" autocomplete="off"  name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted">{{ __('パスワードを記憶する') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('ログインする') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-6 col-md-6">
            
                <div class="card border-0">
                    
                    <div class="card-header bg-transparent">
                        <div class="text-muted text-left mt-2 mb-3"><small style="color:#20A564;font-size:21px;">{{ __('メールを送信して登録する') }}</small></div>
                        
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
     
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('メールアドレス') }}" type="email" name="email" value="{{ old('email') }}" value="" required >
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('clickmeid') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('clickmeid') ? ' is-invalid' : '' }}" placeholder="{{ __('くりっく ME ID') }}" type="clickmeid" name="clickmeid" value="{{ old('clickmeid') }}" value="" required >
                                </div>
                                @if ($errors->has('clickmeid'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('clickmeid') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('パスワード') }}" type="password"  required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('パスワード（再確認') }}" type="password"  required>
                                </div>                              
                            </div>

                            <div class="form-group{{ $errors->has('birthday') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" placeholder="{{ __('⽣年⽉⽇') }}" type="text" name="birthday" value="{{ old('birthday') }}" value="" required >
                                </div>
                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group input-group-alternative mb-3">
                            <p class="p-2 pl-3 mr-5">性別 </p>
                                <div class="custom-control custom-radio p-2 pl-3 mr-4">
                                    <input name="gender" class="custom-control-input" id="male" type="radio">
                                    <label class="custom-control-label" for="male">男性</label>
                                </div>
                                <div class="custom-control custom-radio p-2 pl-3 mr-4">
                                    <input name="gender" class="custom-control-input" id="female" type="radio">
                                    <label class="custom-control-label" for="female">女性</label>
                                </div>
                                <div class="custom-control custom-radio p-2 pl-3 mr-4">
                                    <input name="gender" class="custom-control-input" id="other" type="radio">
                                    <label class="custom-control-label" for="other">その他</label>
                                </div>
                            </div>
                            <p class="red-note text-center m-4">＊ご登録いただく前に必ず一読ください＊</p>
                            <p class="red-note text-center m-4">他のアカウントで使用されているメールアドレスでご登録いただくことで、他の SNS からの投稿をくりっく ME で閲覧することが可能になります。ご登録いただく際には、メールアドレスを予めご確認ください。</p>


                            <div class="custom-control custom-control-alternative custom-checkbox text-center">
                                <input autocomplete="off" class="custom-control-input" name="terms" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span style="color:#14AE67;">{{ __('利用規約') }}</span>
                                    <span style="color:#848484;">{{ __('及び、') }}</span>
                                    <span style="color:#14AE67;">{{ __('プライバシーポリシー') }}</span>
                                    <span style="color:#848484;">{{ __('に同意します。') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="my-4 signup-btn">{{ __('送信') }}</button>
                            </div>
                            <p class="text-center mb--2" style="color:#848484;">もしくは</p>
                            <p class="text-center" style="color:#848484;">お持ちのアカウントで続行する</p>

                            <div class="text-center socialite">
                                <a href="#"><img src="{{ asset('argon') }}/img/default-icons/sns-icons/Facebook.png"/></a>
                                <a href="#"><img src="{{ asset('argon') }}/img/default-icons/sns-icons/Instagram.png"/></a>
                                <a href="#"><img src="{{ asset('argon') }}/img/default-icons/sns-icons/Twitter.png"/></a>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
