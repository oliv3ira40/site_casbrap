@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - ??
@stop

@section('content')
    <main>
      <div class="bg_color_1">
			<div class="container margin_30_30">
			    <div><img src="https://casembrapa.com.br/public/pages/extra_gen_meeting/banner-votacao.png" alt="some text" width=100% height=auto></div><br><br>
				<div class="main_title">
					<h2>Reforma Estatuaria: Convite para Assembleia Geral Virtual</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<p align="justify">
                        Assembleia acontece no mês de outubro, no canal do YouTube, acompanhe nosso site para mais informações 
                        </p>
                        <p align="justify">
                        Comunicamos a todos beneficiários que no mês de outubro acontecerá a Assembleia Geral de Caráter Eletrônico, que deliberará sobre as propostas de mudanças do Estatuto da Casembrapa. 
                        </p>
                        <p align="justify">
                        A Assembleia ocorre exclusivamente pelo meio virtual, no nosso canal do YouTube e pode ser acompanhada smartphones, tablet e computadores. O site e aplicativo da conferência é gratuito e não se faz necessário cadastro para acompanhamento da transmissão.
                        </p>
                        <p align="justify">
                        Estão aptos a votar os beneficiários que preencherem os requisitos previstos no Estatuto da Casembrapa, ou seja, aqueles que se encontram adimplentes.
                        </p>
                        <p align="justify">
                        As propostas para a Reforma Estatutária, estão apresentadas de forma comparativa, mostrando a redação original do Estatuto e as propostas de alterações que estão sendo indicadas.  
                        </p>
                        <p align="justify">
                        A votação acontecerá após a assembleia e os associados e associadas que estiverem de acordo com as propostas da alteração estatutária deverão votar APROVADO. Os associados e associadas contrários às propostas de alterações estatutárias deverá votar NÃO APROVADO Em caso de opinião não formada sobre o assunto, poderão votar EM ABSTENÇÃO.
                        
                        </p>
                        <p align="justify">
                        Para cômputo do quórum mínimo, serão necessários os votos favoráveis de 2/3 (dois terços) dos participantes da Assembleia do total de beneficiários a Casembrapa. Acompanhe nosso site para mais informações sobre a Assembleia Estatuaria, votação e período de impugnações.
                        </p>
					</div>
				</div>
            </div>
        </div>
        
        <div class="bg_color_1">
            <div class="container margin_30_30">
                <div class="main_title">
                    <h2>Lorem Ipsum is simply</h2>
                </div>
                <div class="row">
    
                    <div class="col-md-6">
                        <div class="box_badges">
                            <div id="badge_level_1" style="width: 100%; height: 280px;">
                                <a href="https://www.youtube.com/watch?v=7l5kx97EhqY" target="_blank">
                                    <iframe width="560" height="100%" src="https://www.youtube.com/embed/xUWUFZy0aSs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </a>
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box_badges">
                            <div id="badge_level_1" style="width: 100%; height: 280px;">
                                <a href="https://www.youtube.com/watch?v=7l5kx97EhqY" target="_blank">
                                    <iframe width="560" height="100%" src="https://www.youtube.com/embed/xUWUFZy0aSs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </a>
                            </div>
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, pro id zril molestie, cum ne omittam quaestio. Pri delectus conclusionemque te.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="container margin_30_30">
            <div class="row">
                <div class="col-md-12" id="faq">
                    <h4 class="nomargin_top"> ASSEMBLÉIA GERAL EXTRAORDINÁRIA </h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="payment">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#ex_1" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i> Edital 
                                    </a>
                                </h5>
                            </div>
                            <div id="ex_1" class="collapse" role="tabpanel" data-parent="#payment">
                                <div class="card-body">
                                    <embed src="{{ asset('pages/extra_gen_meeting/EDITAL_AGE.pdf') }}" width="100%" height="600" class="p-b-20" type="application/pdf">
                                </div>
                                <div>
                                    <p align="center">Não conseguiu visualizar o Edital, <a href="https://casembrapa.com.br/public/pages/extra_gen_meeting/EDITAL_AGE.pdf" target="_blank">CLIQUE AQUI </a> para realizar o download.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#ex_2" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i> Regimento 
                                    </a>
                                </h5>
                            </div>
                            <div id="ex_2" class="collapse" role="tabpanel" data-parent="#payment">
                                <div class="card-body">
                                    <embed src="{{ asset('pages/extra_gen_meeting/Regimento.pdf') }}" width="100%" height="600" class="p-b-20" type="application/pdf">
                                </div>
                                <div>
                                    <p align="center">Não conseguiu visualizar o Regimento, <a href="https://casembrapa.com.br/public/pages/extra_gen_meeting/Regimento.pdf" target="_blank">CLIQUE AQUI </a> para realizar o download.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#ex_3" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>Estatuto - Quadro comparativo
                                    </a>
                                </h5>
                            </div>
                            <div id="ex_3" class="collapse" role="tabpanel" data-parent="#payment">
                                <div class="card-body">
                                    <!--<iframe src="https://docs.google.com/gview?url=https://casembrapa.com.br/public/pages/extra_gen_meeting/Quadro_comparativo_ESTATUTO_Proposta_consolidada.pdf&embedded=true" style="width: 100%; height: 500px;" frameborder="0"></iframe>-->
                                   <embed src="{{ asset('pages/extra_gen_meeting/Quadro_comparativo_ESTATUTO_Proposta_consolidada.pdf') }}" width="100%" height="600" class="p-b-20" type="application/pdf">
                                </div>
                                <div>
                                        <p align="center">Não conseguiu visualizar o Estatuto - Quadro comparativo, <a href="https://casembrapa.com.br/public/pages/extra_gen_meeting/Quadro_comparativo_ESTATUTO_Proposta_consolidada.pdf" target="_blank">CLIQUE AQUI </a> para realizar o download.</p>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                   
                                    


    </main>
@endsection