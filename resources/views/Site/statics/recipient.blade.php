@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Beneficiários
@stop

@section('content')
    <main>

		<div class="container margin_30_30">
			<div class="main_title m-b-10">
				<h1>
					BENEFICIÁRIO
					@if (\Auth::user() OR Session::has('temporary_user'))
						@php $user = HelpSite::getUserOrCasembrapaUser() @endphp
						

						<h4 class="font-18">
							{{ HelpSite::firstAndLastName()  }} -
							<a href="{{ route('site.logout') }}" class="text-danger">
								Sair
							</a>
						</h4>
					@endif
				</h1>
			</div>
		</div>
		<div class="container padding_b_30">
			<center>
				<h3>
					<i class="icon-users"></i>
					ATENDIMENTO
				</h3>
				<br>
			</center>
			
			<div class="row">
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						@if (\Auth::user() OR Session::has('temporary_user'))
							<a href="{{ route('site.wallet.digital_wallet') }}">
								<h3>
									<i class="pe-7s-id p-r-10"></i>
									CARTEIRINHA DIGITAL
								</h3>
								<p>Acesse aqui a sua carteirinha digital e a de seus dependentes</p>
							</a>
						@else
							<a href="{{ route('site.user.validate_cpf', ['target'=>'digital_wallet']) }}">
								<h3>
									<i class="pe-7s-id p-r-10"></i>
									CARTEIRINHA DIGITAL
								</h3>
								<p>Acesse aqui a sua carteirinha digital e a de seus dependentes</p>
							</a>
						@endif
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						<a href="{{ route('site.provider_replacement') }}">
							<h3>
								<i class="icon-arrows-cw"></i>
								SUBSTITUIÇÃO DE PRESTADORES
							</h3>
							<p>Veja quem ingressou e quem deixou nossa rede</p>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						<a href="{{ route('site.reciprocity_network') }}">
							<h3>
								<i class="icon-users"></i>
								REDE RECIPROCIDADE
							</h3>
							<p>Saiba quando recorrer às parceiras Cassi e Unimed</p>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">	
						<a href="http://galenus.casembrapa.org.br/" target="_blank">
							<h3>
								<i class=" icon-cog"></i>
								DESPESAS MÉDICAS / EXTRATOS / IR
							</h3>
							<p>Extratos / IR</p>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						<a href="http://galenus.casembrapa.org.br/" target="_blank">
							<h3>
								<i class=" icon-cog"></i>GUIA MÉDICO
							</h3>
							<p>Para consultas no Guia Médico, clique aqui.</p>
						</a>	
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						@if (\Auth::user() OR Session::has('temporary_user'))
							@php $user = HelpSite::getUserOrCasembrapaUser() @endphp
							@if (Storage::exists('site/boletos_bb/'.$user->registration.'.pdf') OR
								Storage::exists('site/boletos_bb/'.str_replace('99-', '', $user->registration).'.pdf'))
								@php
									$pdf_link = HelpAdmin::getStorageUrl().'site/boletos_bb/'.$user->registration.'.pdf';
									if (!Storage::exists('site/boletos_bb/'.$user->registration.'.pdf')) {
										$pdf_link = HelpAdmin::getStorageUrl().'site/boletos_bb/'.str_replace('99-', '', $user->registration).'.pdf';
									}
								@endphp

								<a href="{{ asset($pdf_link) }}" download>
									<h3>
										<i class="fa fa-file-pdf-o p-r-10"></i>
										Boleto do mês
									</h3>

									<p>
										Clique aqui para baixar o boleto
									</p>
								</a>
							@else
								<a href="#">
									<h3>
										<i class="fa fa-file-pdf-o p-r-10"></i>
										Boleto do mês
									</h3>

									<p class="text-danger">
										Boleto não disponível
									</p>
								</a>
							@endif
						@else
							<a href="{{ route('site.user.validate_cpf', ['target'=>'billet']) }}">
								<h3>
									<i class="fa fa-file-pdf-o p-r-10"></i>
									Boleto do mês
								</h3>

								<p>
									Clique aqui para fazer seu login e ter acesso ao boleto
								</p>
							</a>
						@endif
					</div>
				</div>
			</div>
		</div>

		<center>
			<h3>
				<i class="icon-cog-alt"></i>
				SERVIÇOS
			</h3>
		</center>
		<div class="container margin_30_30">
			<div class="row">
				<div class="col-lg-6">

					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						
						<a href="{{ route('site.duplicate_billet') }}"><h3><i class="icon-barcode"></i>2ª  VIA DE BOLETO</h3>
						<p>Interface Banco do Brasil. Manual de Utilização</p></a>
						
					</div>
				</div>
				<div class="col-lg-6">

					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						
						<a href="{{ route('site.beneficiary_form') }}"><h3><i class=" icon-doc-7"></i>FORMULÁRIOS CADASTRAIS</h3>
						<p>Saiba o que é preciso para solicitar serviços</p></a>
						
					</div>
				</div>
				<div class="col-lg-6">

					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						
						<a href="{{ route('site.refund') }}"><h3><i class="icon-money"></i>REEMBOLSO</h3>
						<p>Veja como funciona a restituição</p></a>
						
					</div>
				</div>
				<div class="col-lg-6">

					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						
						<a href="https://www.liviasaude.com.br/">
							<h3>
								<i class="pe-7s-headphones p-r-10"></i>Telemedicina
							</h3>
							<p>Pronto Atendimento</p>
						</a>
						
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						<a target="_blank" href="{{ asset('pages/recipients/Manual-Orientacao-Plano-Saude-spread.pdf') }}">
							<h3>
								MOCPS - Manual de Orientação para Contratação de Planos de Saúde
							</h3>
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding: 30px 15px 15px 30px; min-height: 104px;" class="strip_list wow fadeIn">
						<a target="_blank" href="{{ asset('pages/recipients/Guia-Leitura-Contratual.pdf') }}">
							<h3>
								GLC - Guia de Leitura Contratual
							</h3>
						</a>
					</div>
				</div>
				
			</div>
			<!-- /row -->
		</div>

		<div class="container padding_t_30 padding_b_60">
			<div class="row">				
				<div class="col-lg-6">
					<a href="{{ route('site.call_center') }}">
						<img src="{{asset('pages/recipients/atendimento.png')}}" width="100%">
					</a>
				</div>
				<div class="col-lg-6">
					<a href="{{ route('site.ombudsman') }}">
						<img src="{{asset('pages/recipients/ouvidoria.png')}}" width="100%">
					</a>
				</div>
			</div>
		</div>

    </main>
@endsection