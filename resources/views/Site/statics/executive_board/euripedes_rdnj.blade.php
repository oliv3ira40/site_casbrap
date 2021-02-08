@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Euripedes Rosa Do Nascimento Junior
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

		<div class="container margin_60">
			<div class="row">
				<div class="col-md-12">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">DIRETOR FINANCEIRO</a></li><li><a href="#section_1" class="active">DIRETOR FINANCEIRO</a></li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-md-4">
										<figure>
											<img src="{{ asset('pages/executive_board/euripedes_rdnj.jpg') }}" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-md-8">
										
										<h1>EURIPEDES ROSA DO NASCIMENTO JÚNIOR</h1>
										<medium>DIRETOR FINANCEIRO</medium>
										<ul class="contacts">
											{{-- <li>
												<h6>E-mail</h6>
												<a href="mailto:euripedes.junior@casembrapa.org.br" title="">euripedes.junior@casembrapa.org.br</a>
											</li> --}}
											<li>
												<h6>Telefone</h6> <a href="tel:+55 (61) 3381-0010">+55 (61) 3381-0010</a>
											</li>
											<li>
												<h3>Embrapa Sede | Brasília-DF</h3>
												<p align="justify">Mestre em Contabilidade e especialista em Auditoria e Controladoria pela Universidade de Brasília, Eurípedes Rosa do Nascimento Júnior ingressou na Embrapa em 2008, quando assumiu o cargo de analista contábil.
												<p align="justify"> Ao longo de quase 12 anos, ele atuou em diversas funções na empresa, entre as quais se destaca a de coordenador da área fiscal e tributária e gerente adjunto interino da gerência financeira e contábil. </p>
												<p align="justify">Atualmente atua, também, academicamente como professor e coordenador do curso de ciências contábeis do Centro Universitário do Distrito Federal (UDF).</p>
												<p align="justify">Atuou ainda como conselheiro fiscal da Fundação de Seguridade Social CERES e foi Conselheiro Fiscal da Fundação Nacional de Desenvolvimento do Ensino Superior Particular (Funadesp).</p>
												<p align="justify">Eurípedes Rosa do Nascimento Júnior tomou posse como diretor financeiro da Casembrapa em 14 de maio de 2020.</p><br><br>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<hr>
							<div class="text-right">
							<div class="wrapper_indent">
								
								<a href="{{ route('site.executive_board') }}" class="btn_1">Voltar</a></div>

							<!-- /wrapper indent -->

													
						</div>
					</div>
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

    </main>
@endsection