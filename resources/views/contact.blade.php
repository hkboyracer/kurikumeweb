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
@extends('layouts.app', ['class' => 'main-bg-default','pageTitle' => 'お問い合わせ'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
    <h1 class="text-center mt-5 py-3" style="color:#848484; font-size:22px;">お問い合わせ</h1>
    <p class="text-center py-3" style="color:#848484; font-size:18px;color:#848484;">何か気づいたことや、ご不明点などございましたら下記の連絡フォームからお問い合わせください。</p>

        <div class="row justify-content-center">
        
           
            <div class="col-lg-8 col-md-8">
            
                <div class="card border-0">
                    
                    <div class="card-header bg-transparent" style="background-color: #20A564 !important;">
                        <div class="text-muted text-left mt-2 mb-3"><small style="color:#fff;font-size:21px;">{{ __('お問い合わせ') }}</small></div>
                        
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
     
                        <form role="form" method="POST" action="{{ route('contact') }}">
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
                            <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-planet"></i></span>
                                    </div>
                                    <input autocomplete="off" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="{{ __(' 件名 ') }}" type="subject" name="subject" value="{{ old('subject') }}" value="" required >
                                </div>
                                @if ($errors->has('subject'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    
                                    <textarea rows="10" autocomplete="off" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="{{ __(' お問い合わせ内容 ') }}" type="message" name="message" value="{{ old('message') }}" value="" required ></textarea>
                                </div>
                                @if ($errors->has('message'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                          

                          
                          

                          
                            <div class="text-center">
                                <button type="submit" class="my-4 signup-btn">{{ __('送信する') }}</button>
                            </div>
                            

                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
