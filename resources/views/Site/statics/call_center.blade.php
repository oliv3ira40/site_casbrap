@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Central de Atendimento
@stop

@section('content')
    <main>

		<div class="container margin_60_60">
			<div class="main_title">
				<h2>Central de Atendimento</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div id="contact_info">
						<p align="justify">Esse canal foi pensado especialmente para o(a) associado(a) da Casembrapa obter informações sobre a rede de prestadores de saúde; o direito ao reembolso por despesas fora da rede; solicitar a 2ª via da carteirinha de identificação; o extrato de despesas médicas e muito mais.
						</p>
						<ul>
							<li>
								<a href="mailto:atendimento@casembrapa.org.br">atendimento@casembrapa.org.br</a><br>
							</li>
							<li>
								<a href="tel:6131810010">+55 (61) 3181-0010</a> /
								<a href="tel:08009405560">0800 940 5560</a>
							</li>
							<li>
								<p>Caixa Postal: 10811, <br>CEP 70306-970 PqEB <br>Av. W3 Norte (Final) S/N. <br> Prédio da Casembrapa. <br>Brasília-DF</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 ml-auto">
					<div class="box_general">
						<h3>Formulário de Contato</h3>
						<br>

						{!! Form::open(['url'=>route('site.contact_form.send'), 'id'=>'contact_form']) !!}
							<div class="row">
								<div class="col-md-6">
									<div class="form-group m-b-10">
										<label class="mb-0" for="name">Nome</label>
										{!! Form::text('name', null, ['class'=>'form-control', 'id'=>'name']) !!}
										@if ($errors->has('name'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('name') }}
											</small>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-b-10">
										<label class="mb-0" for="registration">Matrícula</label>
										{!! Form::text('registration', null, ['class'=>'form-control', 'id'=>'registration']) !!}
										@if ($errors->has('registration'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('registration') }}
											</small>
										@endif
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group m-b-10">
										<label class="mb-0" for="stocking_unit">Unidade de Lotação</label>
										{!! Form::text('stocking_unit', null, ['class'=>'form-control', 'id'=>'stocking_unit']) !!}
										@if ($errors->has('stocking_unit'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('stocking_unit') }}
											</small>
										@endif
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group m-b-10">
										<label class="mb-0" for="subject">Assunto</label>
										{!! Form::text('subject', null, ['class'=>'form-control', 'id'=>'subject']) !!}
										@if ($errors->has('subject'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('subject') }}
											</small>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group m-b-10">
										<label class="mb-0" for="message">Mensagem</label>
										{!! Form::textarea('message', null, ['class'=>'form-control', 'id'=>'message', 'rows'=>'5', 'style'=>'height:100px;']) !!}
										@if ($errors->has('message'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('message') }}
											</small>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group m-b-10">
										<label class="mb-0" for="email">E-mail</label>
										{!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
										@if ($errors->has('email'))
											<small class="pl-0 text-danger txt-trans-initial font-12">
												{{ $errors->first('email') }}
											</small>
										@endif
									</div>
								</div>
							</div>

							{{-- recaptcha --}}
							<div class="row">
								<div class="col-md-12">
									<div class="g-recaptcha" data-sitekey="{{ HelpSite::getSiteKayRecaptcha() }}"></div>
									@if ($errors->has('g-recaptcha-response'))
										<small class="pl-0 text-danger txt-trans-initial font-12">
											{{ $errors->first('g-recaptcha-response') }}
										</small>
									@endif
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<input type="submit" value="Enviar Mensagem" class="btn_1 btn-block medium border-r-0 add_top_20" id="submit-contact">
								</div>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>

    </main>
@endsection