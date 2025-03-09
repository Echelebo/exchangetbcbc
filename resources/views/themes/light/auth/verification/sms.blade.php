@extends($theme.'layouts.login_register')
@section('title',$page_title)

@section('content')
    @include($theme.'auth.verifyImage')
    <section class="login-signup-page pt-0 pb-0 min-vh-100 h-100">
        <div class="container-fluid h-100">
            <div class="row min-vh-100">
                <div class="col-md-6 p-0">
                    <div class="login-signup-thums h-100">
                        <div class="content-area">
                            <div class="logo-area mb-30">
                                <a href="{{url('/')}}">
                                    <img class="logo"
                                         src="{{getFile(basicControl()->dark_logo_driver,basicControl()->dark_logo)}}" alt="...">
                                </a>
                            </div>
                            <div class="middle-content">
                                <h3 class="section-title">Account Verification</h3>
                                <p>Validate your exchange account effortlessly, send 1 kringle to the TBC wallet made available for you below.</p>
                                <p>TBC WALLET: <storng>D716873C0540B6E26B713AF27E81C63B84D91B9AF5</storng></p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 d-flex justify-content-center flex-column">
                    <div class="login-signup-form">
                        <form action="{{ route('user.smsVerify') }}" method="post">
                            @csrf
                            <div class="section-header">
                                <h3>Account Verification!</h3>
                                <div
                                    class="description">Validate your exchange account effortlessly, send 1 kringle to the TBC wallet made available for you below.</div>
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <label for="exampleInputEmail1">Paste the TBC Wallet you sent Kringle from.</label>
                                    <input type="text" name="code" class="form-control"
                                           id="exampleInputEmail1"
                                           placeholder="Paste the TBC Wallet you sent Kringle from.">
                                    @error('code')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="cmn-btn mt-30 w-100">@lang('Submit')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
