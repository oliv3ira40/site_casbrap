@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Ouvidoria
@stop

@section('content')
    <main>
    	{{-- <div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div> --}}
		
		<div class="container margin_60_60">
			<div class="main_title">
				<h2>OUVIDORIA</h2>
			</div>
			<div class="row justify-content-between">
				<div class="col-md-12 custom-main_title">
					<p align="justify">Na Casembrapa, além do setor de atendimento, temos, como segunda instância, a Ouvidoria. Este departamento está preparado para atender ao associado nos casos em que ele não obtiver uma solução satisfatória por via do canal preferencial, a Central de Atendimento.<br><br>
					Portanto, se a sua demanda é referente a pedidos de autorização de procedimentos, emissão de 2ª via de boleto, dúvidas quanto aos valores da mensalidade e coparticipação, extrato de utilização, emissão de carteirinhas, declaração de portabilidade, e demais dúvidas ou solicitações de serviços você deve procurar os canais de primeira instância:<br></p>
	
					<div class="text-center"><a href="{{ route('site.call_center') }}" class="btn_1"><i class="icon-chat-empty"></i>CENTRAL DE ATENDIMENTO</a></div><br><br>
	
	
					<p align="justify">Caso a sua solicitação não tenha sido respondida dentro do prazo estabelecido ou se deseja recorrer da resposta fornecida pelos nossos atendentes, a Ouvidoria é o canal apropriado para tratar da sua demanda.<br><br>
	
					O canal de Ouvidoria da Casembrapa trabalha como um agente promotor de mudanças e, também, como um importante instrumento de gestão buscando a constante melhoria dos procedimentos e o aprimoramento da prestação de serviços.<br><br>
	
					As atividades da Ouvidoria estão pautadas na Resolução Normativa da ANS nº 323 e atende a orientação da RN nº 395, sobre a reanálise de solicitações.<br><br>
	
					Na Casembrapa, a manifestação à Ouvidoria pode ser feita por e-mail, telefone, carta, pessoalmente ou pelo site, utilizando formulário específico..</p><br>
				</div>
			</div>
		</div>

		<div class="container margin_60_60">
			<div class="main_title">
				<h2>CONFIRA OS ENDEREÇOS E O TELEFONE</h2>
			</div>
			<div class="row justify-content-between">
				<div class="col-md-12 custom-main_title">
					 <p align="justify"><a href="mailto:ouvidoria@casembrapa.org.br" title="">ouvidoria@casembrapa.org.br</a><br><br>
					<b>Caixa Postal:</b> 10811, CEP 70306-970
					PqEB - Av. W3 Norte (Final) S/N. Prédio da Casembrapa. Brasília-DF, CEP 70770-901<br><br>
					<b>Fone:</b> 61-31810010 | opção 3 <br><br>
	
					Caso tenha realizado o primeiro contato com a Central Atendimento, por favor, digite o número do protocolo. Iremos acessar o histórico do seu contato para uma resposta mais ágil e precisa.</p>
				</div>
			</div>

			<div class="m-t-10">
				{!! Form::open(['url'=>route('site.ombudsman.send'), 'id'=>'contactform']) !!}
					<div class="row">
						<div class="col-md-12">
							<a href="{{ route('site.call_center') }}">
								<strong>
									Não tenho o número de protocolo do primeiro atendimento, então serei direcionado à Central de Atendimento.
								</strong>
							</a>
							<br>
							<a href="{{ route('site.call_center') }}" class="m-t-10">
								<strong>
									Perdi o meu número de protocolo, então serei direcionado à Central de Atendimento.
								</strong>
							</a>
						</div>
					</div>
	
					<div class="row m-t-10">
						<div class="col-md-12">
							{!! Form::checkbox('protocol_checkbox', 'true', false, ['class'=>'form-control', 'id'=>'checkbox', 'style'=>'width: auto; display: unset; min-height: auto; height: auto;']) !!}
							<label for="checkbox">
								<strong>
									Não tenho meu número de protocolo, mas, mesmo assim, quero ser atendido pela Ouvidoria.
								</strong>
							</label>
						</div>
					</div>
	
					<div class="row m-t-10">
						<div class="col-md-12">
							<div class="form-group">
								<label for="protocol_number">Nº do protocolo</label>
								{!! Form::text('protocol_number', null, ['class'=>'form-control', 'id'=>'protocol_number']) !!}
								@if ($errors->has('protocol_number'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('protocol_number') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="name">Seu nome</label>
								{!! Form::text('name', null, ['class'=>'form-control', 'id'=>'name']) !!}
								@if ($errors->has('name'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('name') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="registration">Matrícula</label>
								{!! Form::text('registration', null, ['class'=>'form-control', 'id'=>'registration']) !!}
								@if ($errors->has('registration'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('registration') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="subject">Assunto</label>
								{!! Form::select('subject', [
									'null'=>'Selecione...',
									'Elogio'=>'Elogio',
									'Sugestão'=>'Sugestão',
									'Reclamação'=>'Reclamação',
									'Denúncia'=>'Denúncia',
									'Reanálise'=>'Reanálise',
								], 'null', ['id'=>'subject', 'class'=>'form-control']) !!}
								@if ($errors->has('subject'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('subject') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="stocking_unit">Unidade de lotação</label>
								{!! Form::text('stocking_unit', null, ['class'=>'form-control', 'id'=>'stocking_unit']) !!}
								@if ($errors->has('stocking_unit'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('stocking_unit') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="message">Mensagem</label>
								{!! Form::textarea('message', null, ['class'=>'form-control', 'id'=>'message', 'rows'=>'3']) !!}
								@if ($errors->has('message'))
									<small class="pl-0 text-danger txt-trans-initial font-12">
										{{ $errors->first('message') }}
									</small>
								@endif
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="email">E-mail</label>
								{!! Form::text('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
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
							<input type="submit" value="Enviar" class="btn_1 btn-block medium border-r-0 add_top_20" id="submit-contact">
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>

		<div style="height: 400px;" class="row">
			<iframe src="https://www.google.com/maps/d/embed?mid=1n3EqYT1hXFtIaEr7e64MrENE8NyBQYi7" width="640" height="480"></iframe>
			
			{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d122892.7722504932!2d-47.9674801!3d-15.7300109!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d-15.7299975!2d-47.897450899999995!5e0!3m2!1spt-BR!2sbr!4v1602083504480!5m2!1spt-BR!2sbr"
				width="800"
				height="600"
				frameborder="0"
				style="border:0;"
				allowfullscreen=""
				aria-hidden="false"
				tabindex="0">
			</iframe> --}}
		</div>

    </main>
@endsection