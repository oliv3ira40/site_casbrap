@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Login
@stop

@section('content')
    <main>

        <div class="bg_color_2">
			<div class="container padding_35_35">
				<div id="login">
					<h1>
                        Faça seu login
                    </h1>
					<div class="box_form">
                        {!! Form::open(['url'=>route('site.login')]) !!}
                            @if (isset($data['old_route']))
                                {!! Form::hidden('old_route', $data['old_route']) !!}
                            @endif
                        
                            @if (Session::has('info_old_route'))
                                <div class="divider">
                                    <span class="text-danger txt-trans-initial font-bold">
                                        {{ Session::get('info_old_route') }}
                                    </span>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="cpf_or_registration">CPF ou Matrícula* (somente números)</label>
                                {!! Form::number('cpf_or_registration', null, ['class'=>'form-control', 'id'=>'cpf_or_registration', 'autofocus']) !!}
                                
                                @if ($errors->has('cpf_or_registration'))
                                    <small class="pl-0 text-danger txt-trans-initial font-12 font-bold">
                                        {{ $errors->first('cpf_or_registration') }}
                                    </small>
                                @endif
                                @if (Session::has('cpf_or_registration'))
                                    <small class="pl-0 text-danger txt-trans-initial font-12 font-bold">
                                        {{ Session::get('cpf_or_registration') }}
                                    </small>
                                @endif
                            </div>
							<div class="form-group">
                                <label for="password">Senha*</label>
                                {!! Form::text('password', null, ['class'=>'form-control', 'id'=>'password']) !!}
                                @if ($errors->has('password'))
                                    <small class="pl-0 text-danger txt-trans-initial font-12 font-bold">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                                @if (Session::has('password'))
                                    <small class="pl-0 text-danger txt-trans-initial font-12 font-bold">
                                        {{ Session::get('password') }}
                                    </small>
                                @endif
                            </div>

                            {{-- recaptcha --}}
                            <div class="row">
                                <div class="form-group col-md-12 m-b-20">
                                    <div class="g-recaptcha" data-sitekey="{{ HelpSite::getSiteKayRecaptcha() }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <small class="pl-0 text-danger txt-trans-initial font-12 font-bold">
                                            {{ $errors->first('g-recaptcha-response') }}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12 m-b-20">
                                    <a href="{{ route('site.reset_password') }}">
                                        <strong>Esqueceu sua senha?</strong>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-12 text-center mb-0">
                                    <input class="btn_1 btn-block medium border-r-0" type="submit" value="Login">
                                </div>
                            </div>
						{!! Form::close() !!}
					</div>
					{{-- <p class="text-center link_bright">Do not have an account yet? <a href="#0"><strong>Register now!</strong></a></p> --}}
				</div>
			</div>
		</div>

    </main>
@endsection