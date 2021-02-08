@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - 2ª Via do boleto
@stop

@section('content')
    <main>

        <div class="bg_color_1">
			<div class="container margin_60_60">
				<div class="main_title">
					<h1>2ª Via do boleto</h1>
					<p>
                        Leia o manual de utilização para entender como você pode imprimir a 2ª via do boleto.
                    </p>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12">
                        <h4 class="mb-0" style="text-align: justify;">Interface Banco do Brasil.</h4>
                        
                        <p style="text-align: justify;">
                            Para emissão da segunda via do boleto, o associado precisa:
                        </p>
                        <p class="m-b-10" style="text-align: justify;">
                            1 - Número de contrato Casembrapa/Banco do Brasil (1613232) + matrícula do associado com 6 dígitos (se possuir menos de 6 dígitos, acrescentar zeros a frente) + mês e ano da referência de cobrança do boleto;
                        </p>
                        <p class="m-b-10" style="text-align: justify;">
                            2 - CNPJ do Pagador/Casembrapa (08.097.092/0001-81 - digitar sem ponto e sem traço)
                        </p>
                        <p class="m-b-10" style="text-align: justify;">
                            3 - CPF do associado (digitar sem ponto e sem traço); 
                        </p>
                        <p style="text-align: justify;">
                            Se o boleto do associado estiver com vencimento para 15/12/2020 o mês e ano da referência de cobrança do boleto e mês (10) Ano (2020).
                        </p>
                    </div>
                    
                    <div class="col-md-12 p-t-20">
                        <a target="_blank" href="https://www63.bb.com.br/portalbb/boleto/boletos/hc21e,802,3322,10343.bbx" class="btn btn-block btn-info">
                            Emissão da segunda via do boleto 
                        </a>
                    </div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>

    </main>
@endsection