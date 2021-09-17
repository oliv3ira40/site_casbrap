@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Atualização Cadastral
@stop

@section('content')
    <main>

        <div class="container margin_60_60">
			<div class="main_title">
				<h2>Atualização Cadastral</h2>
			</div>

			<div class="m-t-10">
				{!! Form::open(['url'=>route('site.registration_update.save'), 'id'=>'contactform']) !!}
					{!! Form::hidden('user_id', \Auth::user()->id) !!}
					{!! Form::hidden('country', "Brasil") !!}

					<div class="row m-t-10">
						<div class="col-md-12">
							<h3>
								Termo de responsabilidade de uso do login e senha
							</h3>
							<ul class="mb-0">
								<li>
									Pelo presente termo, me identifico como o titular junto à Caixa de Assistência à Saúde dos Empregados da Embrapa – Casembrapa. 
								</li><br>
								<li>
									Declaro estar ciente que somente o titular poderá atualizar os dados cadastrais conforme Art.12 do regulamento do plano de assistência médica. 
								</li><br>
								<li>
									Declaro ter conhecimento das responsabilidades advindas do uso do “login” e senha de acesso, a saber:
								</li><br>
								
								<li class="p-l-10">
									a) O sistema permite identificar e rastrear o uso, em caráter de segurança e sigilo. 
								</li><br>
								<li class="p-l-10">
									b) A senha é pessoal e intransferível, o que acarreta minha responsabilidade pessoal por todo e qualquer prejuízo decorrente de sua cessão proposital a terceiros, ainda que em caráter emergencial ou por necessidade de serviço. Inclui no conceito de terceiros: familiares ou subordinados.  
								</li><br>
								<li class="p-l-10">
									c) Constitui uso indevido da referida senha: sua utilização para fins de acesso a dados e informações contrarias à finalidade da referida ferramenta; a utilização, pelo mesmo modo, da senha designada para outrem, ainda que de boa-fé e para fins lícitos; a utilização da senha de outrem com a finalidade de interferir na gestão do sistema auferindo ou produzindo vantagens pessoais, causando ou imputando prejuízo a outrem de qualquer espécie. 
								</li><br>
								<li class="p-l-10">
									d) Poderei responder civil, criminal e administrativamente pelo empréstimo e uso indevido da senha, conforme previsto no art. 299 do Código Penal Brasileiro. 
								</li><br>
								<li class="p-l-10">
									e) De acordo com a Lei Geral de Proteção de Dados (Lei nº 13.709/2018) e a Política de Proteção de Dados da Casembrapa, declaro para todos os fins o pleno consentimento com o tratamento dos meus dados informados na adesão ao plano e posteriormente, com a finalidade de manutenção de plano de saúde contratado e prestação de serviços médico-hospitalares, incluindo o compartilhamento destas informações com médicos credenciados para viabilizar o atendimento médico, bem como para fins de oferta, pela Casembrapa ou algum de seus parceiros comerciais, de serviços ou produtos.
								</li><br>
							</ul>
							{!! Form::checkbox('statement_of_responsibility', true, false, ['class'=>'form-control', 'id'=>'statement_of_responsibility', 'style'=>'width: auto; display: unset; min-height: auto; height: auto;']) !!}
							<label for="statement_of_responsibility">
								<strong>
									Li, e estou de acordo com as regras do Termo de responsabilidade de uso do login e senha*
								</strong>
							</label>
							<br>
							@if ($errors->has('statement_of_responsibility'))
								<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
									{{ $errors->first('statement_of_responsibility') }}
								</small>
							@endif
						</div>
					</div>
	
					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="zip_code">CEP*</label>
								{!! Form::text('zip_code', null, ['class'=>'form-control', 'id'=>'zip_code']) !!}
								@if ($errors->has('zip_code'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('zip_code') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="country">País*</label>
								<div class="form-control">Brasil</div>
								@if ($errors->has('country'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('country') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="uf">UF*</label>
								{!! Form::text('uf', null, ['class'=>'form-control', 'id'=>'state']) !!}
								@if ($errors->has('uf'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('uf') }}
									</small>
								@endif
							</div>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="city">Cidade*</label>
								{!! Form::text('city', null, ['class'=>'form-control', 'id'=>'city']) !!}
								@if ($errors->has('city'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('city') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="district">Bairro*</label>
								{!! Form::text('district', null, ['class'=>'form-control', 'id'=>'neighborhood']) !!}
								@if ($errors->has('district'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('district') }}
									</small>
								@endif
							</div>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="street_type">Tipo de logradouro*</label>
								{!! Form::select('street_type', $data["street_type"], null, ['class'=>'form-control', 'id'=>'street_type']) !!}
								@if ($errors->has('street_type'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('street_type') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="public_place">Logradouro*</label>
								{!! Form::text('public_place', null, ['class'=>'form-control', 'id'=>'public_place']) !!}
								@if ($errors->has('public_place'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('public_place') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="number">Número*</label>
								{!! Form::text('number', null, ['class'=>'form-control', 'id'=>'number']) !!}
								@if ($errors->has('number'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('number') }}
									</small>
								@endif
							</div>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="complement">Complemento</label>
								{!! Form::text('complement', null, ['class'=>'form-control', 'id'=>'complement']) !!}
								@if ($errors->has('complement'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('complement') }}
									</small>
								@endif
							</div>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="phone">Telefone Residencial</label>
								{!! Form::text('phone', null, ['class'=>'form-control mask_phone', 'id'=>'phone']) !!}
								@if ($errors->has('phone'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('phone') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="cell_phone">Telefone Celular*</label>
								{!! Form::text('cell_phone', null, ['class'=>'form-control mask_cell_phone', 'id'=>'cell_phone']) !!}
								@if ($errors->has('cell_phone'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('cell_phone') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="commercial_phone">Telefone Comercial</label>
								{!! Form::text('commercial_phone', null, ['class'=>'form-control mask_commercial_phone', 'id'=>'commercial_phone']) !!}
								@if ($errors->has('commercial_phone'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('commercial_phone') }}
									</small>
								@endif
							</div>
						</div>
					</div>
					
					<div class="row m-t-10">
						<div class="col-md-4">
							<div class="form-group">
								<label for="email">E-mail*</label>
								{!! Form::text('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
								@if ($errors->has('email'))
									<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
										{{ $errors->first('email') }}
									</small>
								@endif
							</div>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-12">
							<ul class="mb-0">
								<li style="line-height: 0;">
									Titular:  {{ $data["holder"]->recipient ?? Auth::user()->first_name }}
								</li><br>
								@foreach($data["dependents"] as $dependent)
									<li style="line-height: 0;">
										Dependente:  {{ $dependent }}
									</li><br>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="row m-t-10">
						<div class="col-md-12">
							<h3>
								Termo de Responsabilidade Regulamentar,<a target="_blank" href="{{ asset("/pages/priv/registration_update/termo-de-responsabilidade-das-regras-do-regulamento.pdf") }}"><strong> Clique aqui</strong></a> para acessar.
							</h3>
		
							{!! Form::checkbox('regulatory_liability_term', true, false, ['class'=>'form-control m-t-10', 'id'=>'regulatory_liability_term', 'style'=>'width: auto; display: unset; min-height: auto; height: auto;']) !!}
							<label for="regulatory_liability_term" style="display: inline;">
								<strong>
									Estou ciente e de acordo com as condições estabelecidas no Regulamento do Plano para a minha manutenção e de meus dependente(s) no Plano (se houver). 
									<br>
									Ao clicar em “concluído, enviar”, você concorda em permitir que a Casembrapa armazene e processe as informações pessoais enviadas acima para realizar a sua atualização cadastral.*
								</strong>
							</label>
							<br>
							@if ($errors->has('regulatory_liability_term'))
								<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
									{{ $errors->first('regulatory_liability_term') }}
								</small>
							@endif
						</div>
					</div>

					{{-- recaptcha --}}
					{{-- <div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="{{ HelpSite::getSiteKayRecaptcha() }}"></div>
							@if ($errors->has('g-recaptcha-response'))
								<small class="pl-0 text-danger font-bold txt-trans-initial font-12">
									{{ $errors->first('g-recaptcha-response') }}
								</small>
							@endif
						</div>
					</div> --}}
					
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Concluído, Enviar!" class="btn_1 btn-block medium border-r-0 add_top_20" id="submit-contact">
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>

    </main>
@endsection