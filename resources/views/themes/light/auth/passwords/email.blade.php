@extends($theme.'layouts.login_register')
@section('title',__('Recover Password'))
@section('content')
    @include($theme.'auth.verifyImage')
    <section class="login-signup-page pt-0 pb-0 min-vh-100 h-100">
        <div class="container-fluid h-100">
            <div class="row min-vh-100">
                <div class="col-md-6 p-0 d-none d-md-block">
                    <div class="login-signup-thums h-100">
                        <div class="content-area">
                            <div class="logo-area mb-30">
                                <a href="{{url('/')}}">
                                    <img class="logo"
                                         src="{{getFile(basicControl()->dark_logo_driver,basicControl()->dark_logo)}}" alt="...">
                                </a>
                            </div>
                            <div class="middle-content">
                                <h3 class="section-title">@lang('Recover Password!')</h3>
                                <p>@lang('Regain access with your seamless and secure account retrieval process in just a few clicks!')</p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 d-flex justify-content-center flex-column">
                    <div class="login-signup-form">
                        <form action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="section-header">
                                <h3>@lang('Recover Password!')</h3>
                                <div
                                    class="description">@lang('Regain access with your seamless and secure account retrieval process in just a few clicks!')</div>
                            </div>
                            <div class="row g-4">
                                <div class="col-12">
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                           id="exampleInputEmail1"
                                           placeholder="@lang('Email address')">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn mt-30 w-100">@lang('Send Link')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
