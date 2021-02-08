@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Carlos Alberto Honorato da Silva
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
								<li><a href="#section_1" class="active">DIRETOR ADMINISTRATIVO</a></li><li><a href="#section_1" class="active">Diretor Administrativo</a></li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-md-4">
										<figure>
											<img src="{{ asset('pages/executive_board/carlos_honorato.png') }}" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-md-8">
										
										<h1 style="text-transform: uppercase;">Carlos Alberto Honorato da Silva</h1>
										<medium>DIRETOR ADMINISTRATIVO</medium>
										<ul class="contacts">
											{{-- <li>
												<h6>E-mail</h6>
												<a href="mailto:marciacris@casembrapa.org.br" title="">marciacris@casembrapa.org.br</a>
											</li> --}}
											<li>
												<h6>Telefone</h6>
												<a href="tel:556133810010">+55 (61) 3381-0010</a>
											</li>
											<li>
												<h3>Embrapa Sede | Brasília-DF</h3>
												<p align="justify">
													Carlos Alberto Honorato da Silva ingressou na Embrapa em 1978. É graduado em Geografia e Estudos Sociais, técnico em Contabilidade e pós-graduado em Gestão Pública.
												</p>
												<p align="justify">
													Dentro da Embrapa, atuou no Departamento Pessoal, na Presidência, no Departamento de Informática e, por último, foi responsável pelo cartão corporativo da SGE/SPRO.
												</p>
												<p align="justify">
													Foi palestrante do "Projeto Embrapa na Escola", delegado da Crediembrapa, diretor da Seção Sindical Embrapa Sede, diretor da AEE/DF. diretor da FAEE e, por 13 anos, foi membro titular do Conselho de Administração da Casembrapa (CAD).
												</p>
												<p align="justify">
													Carlos Honorato tomou posse como Diretor Administrativo da Casembrapa em 18 de dezembro de 2020.
												</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							
							<hr>
							
							<div class="text-right"><a href="{{ route('site.executive_board') }}" class="btn_1">Voltar</a></div>

							<!-- /wrapper indent -->

							</div>
					</div>
					<!-- /section_2 -->
				</div>
				<!-- /col -->
				
			</div>
		</div>

    </main>
@endsection