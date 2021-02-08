@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Alan Augusto Dos Reis
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

		<div class="container margin_60">
			<div class="row">
				<div class="col-md-12">
					<nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li>
                                    <a href="#section_1" class="active">PRESIDENTE</a>
                                </li>
                                <li>
                                    <a href="#section_1" class="active">PRESIDENTE</a>
                                </li>
							</ul>
						</div>
					</nav>
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-md-4">
										<figure>
											<img src="{{ asset('pages/executive_board/alan_adr.jpg') }}" alt="" class="img-fluid">
										</figure>
									</div>
									<div class="col-md-8">
										<h1>ALAN AUGUSTO DOS REIS</h1>
										<medium>PRESIDENTE DA CASEMBRAPA</medium>
										<ul class="contacts">
											{{-- <li>
												<h6>E-mail</h6>
												<a href="mailto:alan.reis@casembrapa.org.br" title="">alan.reis@casembrapa.org.br</a>
											</li> --}}
											<li>
                                                <h6>Telefone</h6>
                                                <a href="tel:+55 (61) 3381-0010">
                                                    +55 (61) 3381-0010
                                                </a>
                                            </li>
                                            <li><h3>Embrapa Sede | Brasília-DF</h3>							
												<p align="justify">Graduado em Ciências Contábeis e pós-graduado em Direito Tributário e Finanças Públicas, Alan Augusto dos Reis ingressou na Embrapa em 2007, desenvolvendo atividades como contador no Departamento de Administração e Finanças (DAF).</p>
												<p align="justify">Ele também colaborou como membro titular dos conselhos fiscais da Fundação Eliseu Alves e da própria Casembrapa.</p>
                                				<p align="justify">Alan Augusto dos Reis assumiu como diretor financeiro em 20 de novembro de 2017 e tomou posse como presidente da Casembrapa em 17 de fevereiro de 2020</p><br><br>
											
                           				 </li>
										</ul>
									</div>
								</div>
							</div>
							<hr>
							<div class="text-right">
                                    <a href="{{ route('site.executive_board') }}" class="btn_1">Voltar</a>
                                </div>
							</div>
					</div>
                </div>
			</div>
		</div>        

    </main>
@endsection