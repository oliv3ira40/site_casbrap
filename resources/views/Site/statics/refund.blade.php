@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Reembolso
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
		<!-- /breadcrumb -->
		
		<div class="container margin_60_35">
			<div class="main_title">
				<h1>REEMBOLSO</h1><br>
				<p align="justify">Associados da Casembrapa podem pedir o reembolso de despesas assistenciais realizadas fora da rede própria de prestadores. A solicitação poderá ser apresentada em até 12 meses após o procedimento médico/hospitalar em que se deseja a restituição. <a href="{{ route('site.posts.detail', 257) }}">Clique neste link</a> para ver a tabela atualizada de reembolso da Casembrapa.<br><br>
				Para pedir o reembolso é necessário preencher o formulário disponível <a href="{{ asset('pages/refound/CASEMBRAPA_REEMBOLSO_2020.pdf') }}"><strong>aqui</strong></a> ; anexar a documentação exigida, informada no verso do formulário; e enviar todo o material para: <a href="mailto:reembolso@casembrapa.org.br" title="">reembolso@casembrapa.org.br</a>.<br><br>
				A Casembrapa examina os pedidos de reembolso obedecendo aos parâmetros e valores estabelecidos nas tabelas de preços negociadas com os profissionais da rede credenciada, retirada a devida coparticipação.<br><br>
				Caso a documentação enviada esteja completa, a Casembrapa analisa o pedido e realiza o pagamento do reembolso em até 30 dias.<br><br>
				Em caso de documentação incompleta, o pedido é indeferido e a equipe da Casembrapa entra em contato com o associado(a) pelo e-mail informado no formulário de solicitação.<br><br>
				<strong>IMPORTANTE!</strong> - A nota fiscal (ou o recibo) utilizada para o reembolso de despesas assistenciais não pode ser declarada no Imposto de Renda (IR) do associado.<br><br>
				O titular pode deduzir do IR apenas o valor da nota não reembolsado. Este dado é informado pelo Plano de Saúde no “Demonstrativo de Imposto de Renda”, enviado anualmente pela Casembrapa. Ele aparece no campo “despesas não reembolsáveis”.</p>				
			</div>
			<div class="text-center"><a href="{{ route('site.recipient') }}" class="btn_1">Voltar</a></div>

			</div>
			<!--/row-->
		</div>
		<!-- /container -->
        

    </main>
@endsection