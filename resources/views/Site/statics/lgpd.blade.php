@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - LGPD
@stop

@section('content')
    <main>

        <div class="bg_color_1">
			<div class="container margin_60_60">
				<div class="main_title">
					<h2>LEI GERAL DE PROTEÇÃO DE DADOS – LGPD</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<p align="justify">
                            A Lei Geral de Proteção de Dados Pessoais - LGPD (Lei nº 13.709/2018) estabelece diretrizes importantes e obrigatórias para a coleta, o processamento e o armazenamento de dados. O principal objetivo é garantir mais segurança, privacidade e transparência no uso de informações pessoais.
                        </p>

						<p align="justify">
                            Esta lei entrou em vigor em 18 de setembro de 2020. Diante disso, a Casembrapa tem feito adequações internas para atender a todos os requisitos da nova legislação. Nosso objetivo é ter a transparência de que os dados pessoais dos nossos beneficiários serão tratados com segurança e em cumprimento às normas legais.
                        </p>
					</div>
				</div>
            </div>
		</div>
		
		<div class="container margin_60_60">
			<div class="col-md-12 custom-main_title">
				<h3>
                    ENCARREGADO DE DADOS
                </h3>
                </br>
				<p align="justify">
                    <img style="width: 220px; float: left; margin-right: 10px;" class="icon_lgpd" src="{{ asset('pages/lgpd/Icon_Encarregado de Dados.png') }}" alt="">
                    Em cumprimento ao artigo 41 da lei 13.709/2018 - LGPD, a Casembrapa designa o funcionário Felipe Kevin Azevedo Pinto como encarregado de dados pessoais, cujo canal de comunicação é o endereço <a href="mailto:dpo@casembrapa.org.br">dpo@casembrapa.org.br</a>, por meio do qual poderá receber requisições dos titulares dos dados.
                </p>
				<p align="justify">
                    O encarregado de dados também conhecido como Data Protection Office (DPO), é o canal de comunicação entre a Casembrapa (controlador), os titulares dos dados (beneficiários) e a Autoridade Nacional de Proteção de Dados (ANPD) e deverá ser acionado em situações que envolvam dúvidas ou questionamentos sobre a proteção e utilização dos dados pessoais.
                </p>

				<p align="justify">
                    Conforme art. 41 da Lei nº 13.709/2018
                    <br>
                    § 2º As atividades do encarregado consistem em:
                </p>
                <p align="justify" class="p-l-10">
                    <strong>I -</strong>
                    Aceitar reclamações e comunicações dos titulares, prestar esclarecimentos e adotar providências;
                </p>
                <p align="justify" class="p-l-10">
                    <strong>II -</strong>
                    Receber comunicações da autoridade nacional e adotar providências;
                </p>
                <p align="justify" class="p-l-10">
                    <strong>III -</strong>
                    Orientar os funcionários e os contratados da entidade a respeito das práticas a serem tomadas em relação à proteção de dados pessoais; 
                </p>
                <p align="justify" class="p-l-10">
                    <strong>IV - </strong>
                    Executar as demais atribuições determinadas pelo controlador ou estabelecidas em normas complementares.
                </p>			
			</div>
		</div>
		
		<div class="bg_color_1">
			<div class="container margin_60_60 pb-0">
				<div class="col-md-12 custom-main_title">
					<h3>
                        Política de Privacidade
                    </h3>

                    <p align="justify">
                        Em atenção às melhores práticas de proteção e sigilo de dados, a CASEMBRAPA possui a Política de Privacidade abaixo apresentada, que descreve como coletamos, utilizamos, processamos e divulgamos as informações pessoais de nossos beneficiários e colaboradores, respeitadas as informações necessárias para garantia da segurança das informações.
                    </p>
                </div>
                <div class="col-md-12">
					<div style="padding: 30px 15px 15px 30px;" class="strip_list wow fadeIn">
						<a href="{{ asset('pages/lgpd/POLITICA_DE_PRIVACIDADE_BENEFICIARIO.pdf') }}" target="_blank">
							<h3>
								<i class="fa fa-file-pdf-o p-r-10"></i>Confira aqui nossa Política de Privacidade
							</h3>
						</a>	
					</div>
				</div>
            </div>
            
            <div class="container margin_60_60 pb-0">
				<div class="col-md-12 custom-main_title">
					<h3>
                        Política de Privacidade e Proteção de Dados - Rede Credenciada
                    </h3>

                    <p align="justify">
                        Visando a adequação dos procedimentos internos de tratamento de dados à Lei 13.979/2018, com a aplicação das melhores práticas e medidas de proteção e sigilo de dados, a Casembrapa elaborou esta Política de Privacidade, a qual descreve como os dados pessoais de nossos beneficiários, eventualmente compartilhados com nossos credenciados, podem ser tratados, dentre outras regras e condições pertinentes ao tema. Esta Política de Privacidade aplica-se a todos os credenciados.
                    </p>
                </div>
                <div class="col-md-12">
					<div style="padding: 30px 15px 15px 30px;" class="strip_list wow fadeIn">
						<a href="{{ asset('pages/lgpd/POLITICA_DE_PRIVACIDADE_E_PROTECAO_DE_DADOS_REDE_CREDENCIADA.pdf') }}" target="_blank">
							<h3>
								<i class="fa fa-file-pdf-o p-r-10"></i>Confira aqui nossa Política de Privacidade e Proteção de Dados
							</h3>
						</a>	
					</div>
				</div>
            </div>
            
            <div class="container margin_60_60 pb-0">
                <div class="col-md-12 custom-main_title">
                    <h3>
                        Política de Cookies
                    </h3>
    
                    <p align="justify">
                        Para melhorar a experiência dos usuários no site da CASEMBRAPA, utilizamos da tecnologia de cookies para coletar informações úteis e adequadas à navegação do site pelo cliente. Assim, esta Política de Cookies busca esclarecer a natureza e as finalidades destes dados coletados, garantindo segurança e transparência aos usuários, bem como a adequação do tratamento à Lei Geral de Proteção de Dados (LGPD).
                    </p>
                </div>
                <div class="col-md-12">
                    <div style="padding: 30px 15px 15px 30px;" class="strip_list wow fadeIn">
                        <a href="{{ asset('pages/lgpd/politica-de-cookies.pdf') }}" target="_blank">
                            <h3>
                                <i class="fa fa-file-pdf-o p-r-10"></i>Confira aqui nossa Política de Cookies
                            </h3>
                        </a>	
                    </div>
                </div>
            </div>
            <div class="container margin_60_60">
                <div class="col-md-12 custom-main_title">
                    <h3>
                        Política de Não-Discriminação
                    </h3>
    
                    <p align="justify">
                        A CASEMBRAPA, na condição de instituição voltada à assistência à saúde, reforça seu compromisso irrevogável para com a construção de uma sociedade pautada por relações justas e saudáveis, sempre com a premissa de que a saúde não está atrelada apenas ao bem estar físico, mas também ao bem estar emocional e às condições de realização plena das pessoas.
                    </p>
                </div>
                <div class="col-md-12">
                    <div style="padding: 30px 15px 15px 30px;" class="strip_list wow fadeIn">
                        <a href="{{ asset('pages/lgpd/politica-de-nao-discriminacao.pdf') }}" target="_blank">
                            <h3>
                                <i class="fa fa-file-pdf-o p-r-10"></i>Confira aqui nossa Política de Não-Discriminação
                            </h3>
                        </a>	
                    </div>
                </div>
            </div>
        </div>
        
		
		{{-- <div class="container margin_60_60">
			<div class="col-md-12 custom-main_title">
				<h3>
                    Plano do Perfil
                </h3>
				<p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Consta no artigo 8° do Estatuto Social da Casembrapa que a carteira de beneficiários é composta por:
                </p>
				<p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Associados Titulares: empregado ativo e ex-empregado da Embrapa, aposentado e demitido sem justa causa;
                </p>
				<p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Dependentes dos Associados Titulares:
                </p>
                <p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. cônjuge ou companheira(o);
                </p>
                <p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. filho (natural ou adotivo), ou enteado solteiro, menor de 21 anos, sem renda própria, ou se inválido, enquanto durar a invalidez;
                </p>
                <p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. filho (natural ou adotivo), ou enteado solteiro, acima de 21 anos e menor de 24 anos, sem renda própria, matriculado regularmente em curso superior;
                </p>
                <p align="justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. menor sob guarda ou tutela concedida por decisão judicial, solteiro e sem renda própria, observado o disposto nos itens b e c.
                </p>
                </br></br>
                <img style="width: 100%;" src="{{asset('pages/about/img-01-about.png')}}">
		    </div>
		</div> --}}

    </main>
@endsection