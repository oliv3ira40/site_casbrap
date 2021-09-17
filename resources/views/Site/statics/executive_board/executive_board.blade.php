@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Diretoria executiva
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
                <div class="main_title">
                    <h2>Diretoria Executiva</h2>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-12 custom-main_title">
                        <p align="justify">
                            A Diretoria Executiva é o órgão de administração da Casembrapa, ao qual compete propor e executar diretrizes e políticas aprovadas pelo Conselho de Administração, além dos demais atos necessários à gestão, nos termos do Estatuto e do Regulamento. É composta por três membros: Presidente, Diretor Financeiro e Diretor Administrativo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container margin_60_35">
                <div class="main_title">
                    <h2>Membros Titulares</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="{{ route('site.executive_board.alan_adr') }}">
                                            <img src="{{ asset('pages/executive_board/alan_adr.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div style="min-height: 130px !important;" class="card-members wrapper">
                                        <small>Presidente</small>
                                        <h3 style="min-height: 40px; text-transform: uppercase;">ALAN AUGUSTO DOS REIS</h3>
                                        <strong>
                                            <a href="{{ route('site.executive_board.alan_adr') }}">
                                                <i class="pe-7s-user"></i>Perfil
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="{{ route('site.executive_board.carlos_honorato') }}">
                                            <img src="{{ asset('pages/executive_board/carlos_honorato.png') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div style="min-height: 130px !important;" class="card-members wrapper">
                                        <small>Diretor Administrativo</small>
                                        <h3 style="min-height: 40px; text-transform: uppercase;">Carlos Alberto Honorato da Silva</h3>
                                        <strong>
                                            <a href="{{ route('site.executive_board.carlos_honorato') }}">
                                                <i class="pe-7s-user"></i>Perfil
                                            </a>
                                        </strong>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_list wow fadeIn">
                                    <figure>
                                        <a href="{{ route('site.executive_board.euripedes_rdnj') }}">
                                            <img src="{{ asset('pages/executive_board/euripedes_rdnj.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                    <div style="min-height: 130px !important;" class="card-members wrapper">
                                        <small>Diretor Financeiro</small>
                                        <h3 style="min-height: 40px; text-transform: uppercase;">EURIPEDES ROSA DO NASCIMENTO JÚNIOR</h3>
                                        <strong>
                                            <a href="{{ route('site.executive_board.euripedes_rdnj') }}">
                                                <i class="pe-7s-user"></i>Perfil
                                            </a>
                                        </strong>
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

