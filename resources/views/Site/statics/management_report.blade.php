@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Relatórios de Gestão
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
				<h2>RELATÓRIOS DE GESTÃO</h2>
			</div>
			<div class="row">

				<div class="col-lg-6">
					<div style="min-height: 285px;" class="box_badges">
						<h3>AVANÇOS DA GESTÃO 2016</h3>
						<p>PERÍODO JAN A DEZ DE 2016</p>
						<p>A Caixa de Assistência dos Empregados da Empresa Brasileira de Pesquisa Agropecuária – Casembrapa publica o Relatório de Gestão do exercício de Janeiro de 2016 a Dezembro de 2016 em um novo formato resumido.</p><br>
						<center><div class="text-center"><a href="{{ asset('pages/management_report/avancos-da-gestao-2016-casembrapa.pdf') }}" target="_blank" class="btn_1">Ver Relatótio</a></div></center><br>
					</div>
				</div>
				<div class="col-lg-6">
					<div style="min-height: 285px;" class="box_badges">
						<h3>RELATÓRIO DE GESTÃO 2016</h3>
						<p>PERÍODO 2013 / 2016</p>
						<p>A Caixa de Assistência dos Empregados da Empresa Brasileira de Pesquisa Agropecuária – Casembrapa publica o Relatório de Gestão do exercício de abril de 2013 a abril de 2016.</p><br>
						<center><div class="text-center"><a href="{{ asset('pages/management_report/Casembrapa_relatorio_de_gestao_2013-2016_web.pdf') }}" target="_blank" class="btn_1">Ver Relatótio</a></div></center><br>
					</div>
				</div>

			</div>
			<!--/row-->
		</div>
		<!-- /container -->

        

    </main>
@endsection