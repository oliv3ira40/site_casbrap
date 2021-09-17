
@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Demonstrativo Financeiro
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
		
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>DEMONSTRATIVO FINANCEIRO</h2>
			</div>
			<div class="row justify-content-between">
				<div class="col-md-12 custom-main_title">
					<p align="justify">Anualmente a Casembrapa torna públicas as demonstrações financeiras do plano de saúde. No documento, é possível conhecer o balanço social, DRE, demonstrativo das mutações patrimoniais e fluxo de caixa. A publicação ainda traz uma análise sucinta de auditores externos sobre a saúde financeira do plano. As divulgações seguem o estabelecido pela ANS e pelo Conselho Federal de Contabilidade.</p>				
				</div>
			</div>

			<div class="row">

				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2020</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2020/01_Demonstracoes_Financeiras_2020.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '01_Demonstracoes_financeiras_2020', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a><br>

							<a href="{{ asset('pages/financial_statement/2020/02_Relatorio_de_Administracao_Casembrapa_2020.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '02_Relatorio_de_Administracao_Casembrapa_2020', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório Administrativo </a><br>

							<a href="{{ asset('pages/financial_statement/2020/03_Relatorio_Auditores_Independentes_2020.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '03_Relatorio_Auditores_Independentes_2020', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório dos Auditores Independentes </a><br>

					       <a href="{{ asset('pages/financial_statement/2020/PARECER-ANUAL-DO-CONSELHO-FISCAL-SOBRE-AS-DEMONSTRACOES-CONTABEIS-DE-2020.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'PARECER-ANUAL-DO-CONSELHO-FISCAL-SOBRE-AS-DEMONSTRACOES-CONTABEIS-DE-2020', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Parecer anual do conselho fiscal</a>
						</p>
					</div>
				</div>
			   
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2019</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2019/01_Demonstracoes_financeiras_2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '01_Demonstracoes_financeiras_2019', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a><br>

							<a href="{{ asset('pages/financial_statement/2019/02_Relatorio_de_Administracao_Casembrapa_2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '02_Relatorio_de_Administracao_Casembrapa_2019', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório Administrativo </a><br>

							<a href="{{ asset('pages/financial_statement/2019/03_Relatorio_Auditores_Independentes_2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': '03_Relatorio_Auditores_Independentes_2019', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório dos Auditores Independentes </a><br>

							<a href="{{ asset('pages/financial_statement/2019/PARECER-ANUAL-DO-CONSELHO-FISCAL-SOBRE-AS-DEMONSTRACOES-CONTABEIS-DE-2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'PARECER-ANUAL-DO-CONSELHO-FISCAL-SOBRE-AS-DEMONSTRACOES-CONTABEIS-DE-2019', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Parecer anual do conselho fiscal</a>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2018</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2018/01_Demonstracoes_financeiras_2018.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2018_Demonstracoes_financeiras', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a><br>
							<a href="{{ asset('pages/financial_statement/2018/02_Relatorio_de_Administracao_Casembrapa2018.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2018_Relatorio_Administrativo', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório Administrativo </a><br>
							<a href="{{ asset('pages/financial_statement/2018/03_Relatorio_Auditores_Independentes_2018.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2018_Relatorio_Auditores', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório dos Auditores Independentes </a>
						</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2017</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2017/demonstracoes.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2017_Doc_Fiscais', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a><br>
							<a href="{{ asset('pages/financial_statement/2017/dca.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2017_Analise_Auditores', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Análise de auditores </a><br>
						</p>						
					</div>
				</div>
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2016</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2016/casembrapa-demonstrativos-financeiros-2016.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2016_Doc_Fiscais', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a><br>
							<a href="{{ asset('pages/financial_statement/2016/casembrapa-nota-Explicativas-2016.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2016_Notas_explicativas', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Notas explicativas </a>
						</p>						
					</div>
				</div>
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2015</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2015/demostracoes2015.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2015_Doc_Fiscais', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a>
						</p>						
					</div>
				</div>
				<div class="col-lg-4">
					<div style="min-height: 188px;" class="box_badges">
						<h3 class="text-left">PERÍODO JAN A DEZ DE 2014</h3><BR>
						<p class="text-left">
							<a href="{{ asset('pages/financial_statement/2014/documentos_2014.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Demonstrativo Financeiro', 'event_label': 'Periodo_JAN_a_DEZ_2014_Doc_Fiscais', 'value': 1});"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> Demonstrações Financeiras </a>
						</p>
					</div>
				</div>
			</div>
		</div>
    </main>
@endsection