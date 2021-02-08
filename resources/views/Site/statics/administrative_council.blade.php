@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Conselho de Administração
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

		<div class="bg_color_1">
			<div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_title">
                            <h2>Conselho de Administração</h2>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12 custom-main_title">
                                <p align="justify">
                                    O Conselho de Administração (CAD) é o órgão de deliberação superior da Casembrapa. São atribuições do CAD estabelecer políticas e diretrizes, bem como aprovar os recursos e a política de pessoal da Casembrapa. Além de realizar auditorias, inspeções ou tomadas de conta e, até mesmo, apreciar os recursos administrativos contra atos da Diretoria-Executiva.
                                </p>
                                <p align="justify">
                                    O CAD é composto por quatro membros titulares e respectivos suplentes, sendo dois membros titulares e seus suplentes representantes da Embrapa e outros dois membros e seus suplentes representantes dos associados.
                                </p>
                                <p align="justify">
                                    Representam os associados os conselheiros indicados pelo Sindicato Nacional dos Trabalhadores de Pesquisa e Desenvolvimento Agropecuário (Sinpaf) e pela Federação das Associações dos Empregados da Embrapa (Faee).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_title">
                            <h3>Membros Titulares</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <small>Presidente</small>
                                        <h3>BRUNO COELHO SOARES</h3>
                                        <p>Embrapa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-woman.png') }}" class="img-fluid" alt=""></a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <h3>GIOVANA ZAPPALA PORCARO SOUZA</h3>
                                        <p>Embrapa</p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <h3>CARLOS ALBERTO HONORATO DA SILVA</h3>
                                        <p>FAEE</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_title">
                            <h3>Membros Suplentes</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <h3>AGUARDANDO</h3>
                                        <p>Embrapa</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt="">
                                            
                                        </a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <h3>FELIPE HAUBERT PILGER</h3>
                                        <p>SINPAF</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
                                    </figure>
                                    <div class="card-members wrapper">
                                        <small>&nbsp;</small>
                                        <h3>ANTONIO WELLINGTON SOARES DE CARVALHO</h3>
                                        <p>FAEE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection