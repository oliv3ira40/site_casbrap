@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Coronavírus
@stop

@section('content')
    <main>

        <div class="container padding_t_60 padding_b_60">
			<div class="row">
                <div class="col-md-6">
                    <a target="_blank" href="https://www.liviasaude.com.br">
                        <div class="box_feat" style="padding: 20px 45px 20px 45px;">
                            <i class="pe-7s-headphones" style="font-size: 50px; color: #1ab892;"></i>
                            <h3 class="m-t-10">Telemedicina</h3>
                            <p class="font-bold mb-0 text-dark">
                                Pronto Atendimento
                            </p>
                        </div>
                    </a>

                    @foreach ($data['first_post'] as $post)
                        <div class="box_list home">
                            <figure style="height: auto;">
                                <a target="_blank" href="{{ route('site.posts.detail', $post->id) }}">
                                    <img src="{{ asset(HelpAdmin::getStorageUrl().$post->image_banner) }}" class="img-fluid" alt="">
                                </a>
                                <div class="preview">
                                    <a target="_blank" href="{{ route('site.posts.detail', $post->id) }}">
                                        <span>Leia Mais</span>
                                    </a>
                                </div>
                            </figure>
                            <div class="wrapper" style="padding: 20px 20px;">
                                {{-- <small>
                                    Autor: {{ HelpAdmin::completName($post->author) }}
                                </small> --}}
                                <h3 class="mb-0" style="text-align: justify; font-size: 16px; height: 40px;">
                                    <a class="text-dark" target="_blank" href="{{ route('site.posts.detail', $post->id) }}">
                                        {{ $post->title }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    @endforeach

                    {{-- Últimas notícias --}}
                    <div class="box_list home">
                        <div class="main_title mb-0" style="padding-top: 20px; padding-bottom: 20px; background-color: #1ab892; border-radius: 5px 5px 0 0;">
                            <h4 class="mb-0" style="font-size: 20px; color: #fff;">Últimas notícias</h4>
                        </div>

                        @foreach ($data['latest_posts'] as $post)
                            <div class="wrapper" style="padding: 14px 20px;">
                                {{-- <small>
                                    Autor: {{ HelpAdmin::completName($post->author) }}
                                </small> --}}
                                <h3 class="mb-0" style="text-align: justify; font-size: 16px; height: 40px;">
                                    <a class="text-dark" target="_blank" href="{{ route('site.posts.detail', $post->id) }}">
                                        - {{ $post->title }}
                                    </a>
                                </h3>
                            </div>
                        @endforeach
                    </div>

                    {{-- Canais de Atendimento CASEMBRAPA --}}
                    <div class="box_list home">
                        <div class="main_title mb-0" style="padding-top: 20px; padding-bottom: 20px; background-color: #1ab892; border-radius: 5px 5px 0 0;">
                            <h4 class="mb-0" style="font-size: 20px; color: #fff;">Canais de Atendimento CASEMBRAPA</h4>
                        </div>

                        <div class="col-md-12">
                            <ul class="contacts">
                                <li style="display: contents;">
                                    <h6 class="mb-0" style="padding: 10px 0;">
                                        Telefone:
                                        <a href="tel:6131810010">
                                            <small style="text-transform: unset; color: #656565;">
                                                (61) 3181-0010
                                            </small>
                                        </a>
                                        <small style="text-transform: unset; color: #656565;">
                                            / Opção 1 (DF e demais áreas com DDD 61)
                                        </small>
                                    </h6>
                                </li>
                                <li style="display: contents;">
                                    <h6 class="mb-0" style="padding: 10px 0;">
                                        Telefone:
                                        <a href="tel:08009405560">
                                            <small style="text-transform: unset; color: #656565;">
                                                0800-940-5560
                                            </small>
                                        </a>
                                        <small style="text-transform: unset; color: #656565;">
                                            / Opção 1 (Restante do país)
                                        </small>
                                    </h6>
                                </li>
                                <li style="display: contents;">
                                    <h6 class="mb-0" style="padding: 10px 0;">
                                        E-mail:
                                        <a href="mailto:atendimento@casembrapa.org.br">
                                            <small style="text-transform: unset; color: #656565;">
                                                atendimento@casembrapa.org.br
                                            </small>
                                        </a>
                                    </h6>
                                </li>
                                <li style="display: contents;">
                                    <h6 class="mb-0" style="padding: 10px 0;">
                                        Telegram:
                                        <small style="text-transform: unset; color: #656565;">
                                            Casembrapabot
                                        </small>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-6">
                    {{-- PLANO ABERTO --}}
                    <div class="box_list home">
                        <div class="main_title mb-0" style="padding-top: 20px; padding-bottom: 20px;">
                            <h4 class="mb-0" style="font-size: 20px;">PLANO ABERTO</h4>
                        </div>
    
                        <iframe style="width: 100%; height: 262px; padding: 0px 0px 0px 0px;" src="https://www.youtube.com/embed/94ZlCBDg05g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                    {{-- Casembrapa responde: --}}
                    <div class="box_feat" style="padding: 15px 20px 15px 20px; text-align: left; height: 518px; overflow: auto; margin-bottom: 30px;">
                        <div class="main_title mb-0" style="padding-top: 0px; padding-bottom: 20px;">
                            <p class="mt-0 mb-0">Atendimento após o Covid-19.</p>
                            <h4 style="font-size: 20px;">Casembrapa responde:</h4>
                        </div>
    
                        <div role="tablist" class="accordion" id="response">
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>A Casembrapa cobre exames de Covid-19? Pago coparticipação?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse1" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Sim. Os beneficiários podem se submeter ao exame para detecção do coronavírus nos lugares devidamente credenciados para esta finalidade. A cobrança aos associados por coparticipação é feita da mesma forma que por outros procedimentos, ou seja, 30% do valor contratado junto ao prestador, conforme o Regulamento da Casembrapa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse2" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Posso fazer o exame em qualquer lugar?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse2" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            O beneficiário pode realizar os exames apenas nos locais credenciados à Casembrapa para esta finalidade. Para saber quais os prestadores estão oferecendo este serviço aos nossos associados, consulte a relação disponível ao fim desta página, no quadro VEJA ONDE FAZER O EXAME PARA COVID-19.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse3" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>O que devo fazer se precisar de autorização de um procedimento?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse3" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Os atendimentos para procedimento não cirúrgicos, exame laboratoriais ou pronto atendimento foram mantidos pelos hospitais credenciados à Casembrapa. O procedimento continua o mesmo: o paciente passa por avaliação com equipe médica na unidade de saúde. Para casos de pronto atendimento, orientamos a utilizar o serviço de telemedicina pelo aplicativo Livia (<a href="https://www.liviasaude.com.br">https://www.liviasaude.com.br</a>).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse4" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>O atendimento presencial na sede da Casembrapa continua?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse4" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Não. O atendimento presencial foi suspenso em 20 de março como forma de preservar a segurança de nossos beneficiários e também de nossos colaboradores. A medida tem validade por tempo indeterminado, até quando se fizer necessário. A Casembrapa irá divulgar o retorno à normalidade de atendimento assim que possível.
                                        </p>
                                        <p style="text-align: justify;">
                                            Enquanto isso, a operadora mantém seus canais eletrônicos de atendimento - por telefone: (61) 3181-0010, opção 1 (para quem é do Distrito Federal) e 0800-940-5560, opção 1 (para quem está fora do DF);por e-mail: atendimento@casembrapa.org.br; ou pelo Telegram: Casembrapabot.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse5" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Como posso fazer contato com a Casembrapa durante o período em que o atendimento for suspenso?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse5" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Para não comprometer a assistência aos nossos beneficiários, em caso de necessidade pedimos para que façam o contato pelos nossos canais eletrônicos de atendimento. A comunicação pode ser feita pelos telefones <a href="tel:6131810010">(61) 3181-0010</a>, opção 1 (para quem é do Distrito Federal) e <a href="tel:08009405560">0800-940-5560</a>, opção 1 (para quem está fora do DF); pelo e-mail: <a href="mailto:atendimento@casembrapa.org.br">atendimento@casembrapa.org.br</a>; ou pelo Telegram: Casembrapabot.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse6" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Prestadores credenciados à Casembrapa estão oferecendo teleatendimento?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse6" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Sim. O beneficiário tem duas modalidades de opção para telemedicina. A relação com os prestadores que oferecem consulta ou sessão por videoconferência pode ser conferida neste link: <a target="_blank" href="{{ asset(HelpAdmin::getStorageUrl().'old_system_images/noticias/Documentos/Prestadores_teleatendimento_09.04.2020.pdf') }}">Prestadores_teleatendimento_09.04.2020</a>. O valor da consulta é o mesmo praticado pelo prestador para o atendimento presencial.
                                        </p>
                                        <p style="text-align: justify;">
                                            A Casembrapa também contratou um serviço que disponibiliza telemedicina aos beneficiários que precisarem de pronto atendimento. Pelo aplicativo Livia Saúde, é possível receber orientação de um médico ou agendar consulta por videoconferência, esclarecimento de dúvidas com profissional de saúde e emitir receitas e atestados médicos com certificado digital. Cada atendimento pela plataforma Livia Saúde custa R$ 68,00 (sessenta e oito reais), com cobrança de coparticipação pelos critérios previstos no Regulamento da Casembrapa, ou seja, com custo de 30% do valor final contratado junto à Casembrapa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse7" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Gostaria de fazer uma cirurgia eletiva. Consigo realizar o procedimento neste período de pandemia?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse7" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            A Agência Nacional de Saúde Suplementar (ANS) orienta que consultas, exames e cirurgias que não sejam casos de urgência e emergência sejam adiados durante o período de pandemia. A medida visa a liberar leitos a pacientes com Covid-19 e evitar que pessoas saudáveis frequentem unidades de saúde e possam vir a se contaminar. Para os casos em que for preciso realizar o procedimento, a Casembrapa mantém seus canais de atendimento eletrônico. A comunicação pode ser feita pelos telefones (61) 3181-0010, opção 1 (para quem é do Distrito Federal) e 0800-940-5560, opção 1 (para quem está fora do DF); pelo e-mail: atendimento@casembrapa.org.br; ou pelo Telegram: Casembrapabot.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse8" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Consigo atendimento de emergência durante o período de pandemia do coronavírus?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse8" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Os atendimentos de urgência/emergência foram mantidos pelos hospitais credenciados à Casembrapa. O procedimento continua o mesmo: o paciente passa por avaliação com equipe médica na unidade de saúde. Para casos de pronto atendimento, orientamos a utilizar o serviço de telemedicina pelo aplicativo Livia (<a target="_blank" href="{{ route('site.posts.detail', 250) }}">Telemedicina Casembrapa</a>).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse9" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Gostaria de fazer um exame para saber se tenho Covid-19. Como obtenho pedido médico?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse9" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            O pedido para o teste de diagnóstico do coronavírus será fornecido pelo médico após uma consulta, presencial ou remota, mas será feito apenas nos casos em que o profissional de saúde identificar necessidade de exame. As indicações para realização da testagem seguem as orientações da Agência Nacional de Saúde Suplementar (<a target="_blank" href="http://www.ans.gov.br/aans/noticias-ans/consumidor/5454-coronavirus-ans-reforca-orientacoes-a-beneficiarios-de-planos-de-saude-durante-pandemia">Coronavírus: ANS reforça orientações a beneficiários de planos de saúde durante pandemia</a>).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse10" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>O teste é indicado também para pessoas assintomáticas?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse10" class="collapse" role="tabpanel" data-parent="#response">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            A indicação do exame muda ao longo do tempo, já que o Ministério da Saúde atualiza constantemente o protocolo para a realização do exame. Os serviços de saúde estão se atualizando em tempo real quanto aos protocolos e, por esse motivo, sempre se deve respeitar a indicação médica.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CORONAVÍRUS: Entenda (FAQ) --}}
                    <div class="box_feat" style="padding: 15px 20px 15px 20px; text-align: left; height: 520px; overflow: auto; margin-bottom: 30px;">
                        <div class="main_title mb-0" style="padding-top: 20px; padding-bottom: 20px;">
                            <h4 style="font-size: 20px;">CORONAVÍRUS: Entenda (FAQ)</h4>
                        </div>
    
                        <div role="tablist" class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_1" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>O que é o coronavírus?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_1" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            A COVID-19 é uma doença causada pelo coronavírus SARS-CoV-2, que apresenta um quadro clínico que varia de infecções assintomáticas a quadros respiratórios graves. De acordo com a Organização Mundial de Saúde (OMS), a maioria dos pacientes com COVID-19 (cerca de 80%) podem ser assintomáticos e cerca de 20% dos casos podem requerer atendimento hospitalar por apresentarem dificuldade respiratória e desses casos aproximadamente 5% podem necessitar de suporte para o tratamento de insuficiência respiratória (suporte ventilatório).
                                        </p>
                                        <p style="text-align: justify;">
                                            Coronavírus é uma família de vírus que causam infecções respiratórias. O novo agente do coronavírus foi descoberto em 31/12/19 após casos registrados na China. Provoca a doença chamada de coronavírus (COVID-19).
                                        </p>
                                        <p style="text-align: justify;">
                                            Os primeiros coronavírus humanos foram isolados pela primeira vez em 1937. No entanto, foi em 1965 que o vírus foi descrito como coronavírus, em decorrência do perfil na microscopia, parecendo uma coroa.
                                        </p>
                                        <p style="text-align: justify;">
                                            A maioria das pessoas se infecta com os coronavírus comuns ao longo da vida, sendo as crianças pequenas mais propensas a se infectarem com o tipo mais comum do vírus. Os coronavírus mais comuns que infectam humanos são o alpha coronavírus 229E e NL63 e beta coronavírus OC43, HKU1.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_2" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Sintomas
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_2" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Os sintomas da COVID-19 podem variar de um simples resfriado até uma pneumonia severa. Sendo os sintomas mais comuns:
                                        </p>
                                        <ul style="list-style: unset; padding: revert;">
                                            <li>
                                                Tosse;
                                            </li>
                                            <li>
                                                Febre;
                                            </li>
                                            <li>
                                                Coriza;
                                            </li>
                                            <li>
                                                Dor de garganta;
                                            </li>
                                            <li>
                                                Dificuldade para respirar;
                                            </li>
                                        </ul>
                                        <p style="text-align: justify;">
                                            O diagnóstico da COVID-19 é realizado primeiramente pelo profissional de saúde que deve avaliar a presença de critérios clínicos:
                                        </p>
                                        <p style="text-align: justify;">
                                            Pessoa com quadro respiratório agudo, caracterizado por sensação febril ou febre, que pode ou não estar presente na hora da consulta (podendo ser relatada ao profissional de saúde), acompanhada de tosse OU dor de garganta OU coriza OU dificuldade respiratória, o que é chamado de Síndrome Gripal.
                                        </p>
                                        <p style="text-align: justify;">
                                            Pessoa com desconforto respiratório/dificuldade para respirar OU pressão persistente no tórax OU saturação de oxigênio menor do que 95% em ar ambiente OU coloração azulada dos lábios ou rosto, o que é chamado de Síndrome Respiratória Aguda Grave.
                                        </p>
                                        <p style="text-align: justify;">
                                            Caso o paciente apresente os sintomas, o profissional de saúde poderá solicitar exames laboratoriais:<br>
                                            De biologia molecular (RT-PCR em tempo real) que diagnostica tanto a COVID-19, a Influenza ou a presença de Vírus Sincicial Respiratório (VSR).
                                        </p>
                                        <p style="text-align: justify;">
                                            Imunológico (teste rápido) que detecta, ou não, a presença de anticorpos em amostras coletadas somente após o sétimo dia de início dos sintomas.
                                        </p>
                                        <p style="text-align: justify;">
                                            O diagnóstico da COVID-19 também pode ser realizado a partir de critérios como: histórico de contato próximo ou domiciliar, nos últimos 7 dias antes do aparecimento dos sintomas, com caso confirmado laboratorialmente para COVID-19 e para o qual não foi possível realizar a investigação laboratorial específica, também observados pelo profissional durante a consulta.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_3" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Como é transmitido?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_3" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de:
                                        </p>
                                        <ul style="list-style: unset; padding: revert;">
                                            <li>
                                                Toque do aperto de mão;
                                            </li>
                                            <li>
                                                Gotículas de saliva;
                                            </li>
                                            <li>
                                                Espirro;
                                            </li>
                                            <li>
                                                Tosse;
                                            </li>
                                            <li>
                                                Catarro;
                                            </li>
                                        </ul>
                                        <p style="text-align: justify;">
                                            Objetos ou superfícies contaminadas, como celulares, mesas, maçanetas, brinquedos, teclados de computador etc.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_4" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Como se proteger (prevenção)
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_4" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            As recomendações de prevenção à COVID-19 são as seguintes:
                                        </p>
                                        <ul style="list-style: unset; padding: revert;">
                                            <li>
                                                Lave com frequência as mãos até a altura dos punhos, com água e sabão, ou então higienize com álcool em gel 70%;
                                            </li>
                                            <li>
                                                Ao tossir ou espirrar, cubra nariz e boca com lenço ou com o braço, e não com as mãos;
                                            </li>
                                            <li>
                                                Evite tocar olhos, nariz e boca com as mãos não lavadas;
                                            </li>
                                            <li>
                                                Ao tocar, lave sempre as mãos como já indicado;
                                            </li>
                                            <li>
                                                Mantenha uma distância mínima de cerca de 2 metros de qualquer pessoa tossindo ou espirrando;
                                            </li>
                                            <li>
                                                Evite abraços, beijos e apertos de mãos. Adote um comportamento amigável sem contato físico, mas sempre com um sorriso no rosto;
                                            </li>
                                            <li>
                                                Higienize com frequência o celular e os brinquedos das crianças;
                                            </li>
                                            <li>
                                                Não compartilhe objetos de uso pessoal, como talheres, toalhas, pratos e copos;
                                            </li>
                                            <li>
                                                Mantenha os ambientes limpos e bem ventilados;
                                            </li>
                                            <li>
                                                Evite circulação desnecessária nas ruas, estádios, teatros, shoppings, shows, cinemas e igrejas. Se puder, fique em casa;
                                            </li>
                                            <li>
                                                Se estiver doente, evite contato físico com outras pessoas, principalmente idosos e doentes crônicos, e fique em casa até melhorar;
                                            </li>
                                            <li>
                                                Durma bem e tenha uma alimentação saudável;
                                            </li>
                                            <li>
                                                Utilize máscaras caseiras ou artesanais feitas de tecido em situações de saída de sua residência.          
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_5" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Se eu ficar doente (tratamento)
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_5" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Caso você se sinta doente, com sintomas de gripe, evite contato físico com outras pessoas, principalmente idosos e doentes crônicos e fique em casa por 14 dias.
                                        </p>
                                        <p style="text-align: justify;">
                                            Só procure um hospital de referência se estiver com falta de ar.
                                        </p>
                                        <p style="text-align: justify;">
                                            Em caso de diagnóstico positivo para COVID-19, siga as seguintes recomendações:
                                        </p>
                                        <ul style="list-style: unset; padding: revert;">
                                            <li>
                                                Fique em isolamento domiciliar;
                                            </li>
                                            <li>
                                                Utilize máscara o tempo todo;
                                            </li>
                                            <li>
                                                Se for preciso cozinhar, use máscara de proteção, cobrindo boca e nariz todo o tempo;
                                            </li>
                                            <li>
                                                Depois de usar o banheiro, nunca deixe de lavar as mãos com água e sabão e sempre limpe vaso, pia e demais superfícies com álcool ou água sanitária para desinfecção do ambiente;
                                            </li>
                                            <li>
                                                Separe toalhas de banho, garfos, facas, colheres, copos e outros objetos apenas para seu uso;
                                            </li>
                                            <li>
                                                O lixo produzido precisa ser separado e descartado;
                                            </li>
                                            <li>
                                                Sofás e cadeiras também não podem ser compartilhados e precisam ser limpos freqüentemente com água sanitária ou álcool 70%;
                                            </li>
                                            <li>
                                                Mantenha a janela aberta para circulação de ar do ambiente usado para isolamento e a porta fechada, limpe a maçaneta freqüentemente com álcool 70% ou água sanitária.
                                            </li>
                                        </ul>
                                        <p style="text-align: justify;">    
                                            Caso o paciente não more sozinho, os demais moradores da devem dormir em outro cômodo, longe da pessoa infectada, seguindo também as seguintes recomendações:
                                        </p>
                                        <ul style="list-style: unset; padding: revert;">
                                            <li>
                                                Manter a distância mínima de 1 metro entre o paciente e os demais moradores;
                                            </li>
                                            <li>
                                                Limpe os móveis da casa freqüentemente com água sanitária ou álcool 70%;
                                            </li>
                                            <li>
                                                Se uma pessoa da casa tiver diagnóstico positivo, todos os moradores ficam em isolamento por 14 dias também;
                                            </li>
                                            <li>
                                                Caso outro familiar da casa também inicie os sintomas leves, ele deve reiniciar o isolamento de 14 dias. Se os sintomas forem graves, como dificuldade para respirar, ele deve procurar orientação médica.          
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_6" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Quanto tempo o vírus sobrevive no ar ou em uma superfície?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_6" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Segundo a Organização Mundial da Saúde (OMS), ainda não é possível afirmar quanto tempo o novo coronavírus sobrevive na superfície ou no ar. Mas pesquisadores afirmam que ele parece se comportar igual aos outros tipos de coronavírus.
                                        </p>
                                        <p style="text-align: justify;">    
                                            Estudos avaliados pela OMS apontam que o vírus pode persistir nas superfícies por algumas horas ou, até mesmo, várias dias. Isto pode variar e depende das condições do local, do clima e da umidade do ambiente. A recomendação é de que, caso você desconfie que uma superfície está contaminada, limpe-a com um desinfetante e evite tocar nos olhos, na boca ou no nariz. Após isso, higienize as mãos com álcool ou lave-as com água e sabão.
                                        </p>
                                        <p style="text-align: justify;">
                                            Um estudo publicado na revista científica "New England Journal of Medicine" em 17 de março afirma que o coronavírus consegue sobreviver até 3 dias em algumas superfícies, como plástico ou aço. Já em papelão, o vírus pode ficar por até 24 horas, enquanto na superfície de cobre dura 4 horas e em poeiras, 1,1 hora.
                                        </p>
                                        <p style="text-align: justify;">
                                            As pessoas também podem pegar o novo coronavírus se respirarem gotículas de uma pessoa com Covid-19 que tosse ou exala gotículas. É por isso que é importante ficar a mais de 1 metro (3 pés) de uma pessoa doente.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_7" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Que produtos de limpeza matam o coronavírus?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_7" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            O novo coronavírus pode ser morto por produtos de limpeza desinfetantes de fácil acesso, como álcool 70%, água sanitária e até com a combinação de água e sabão.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_8" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Todas as pessoas que possuem Covid-19 apresentam os sintomas característicos da doença?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_8" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Não. Uma porcentagem estimada em menos de 20% tem sintomas que podem ser associados à Covid-19. A imensa maioria das pessoas contaminadas apresenta pouco ou nenhum sintoma da doença.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_9" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Em qual momento o beneficiário deve procurar o hospital para atendimento?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_9" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            A procura por hospitais e prontos-socorros deve acontecer somente em situações de sintomas graves, como febre alta persistente e tosse com falta de ar.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_10" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Há algum sintoma que seja indicativo exclusivo da Covid-19, que ajude a descartar sintomas de outras patologias?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_10" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Não. Todos os sintomas individualmente podem aparecer em outras doenças. É o conjunto de sintomas que caracteriza a doença.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_11" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Há uma pessoa na residência com Covid-19 confirmada. Ele deve se isolar do trabalho, mesmo não apresentando sintomas?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_11" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Sim. Todas as pessoas que possam ter tido contato com outras pessoas infectadas ou mesmo possivelmente infectadas devem fazer quarentena por, pelo menos, 14 dias. Para afastamento do trabalho, o colaborador deve consultar a política que está sendo adotada por sua empresa.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_12" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Existe comprovação de que os índices de vitamina D estão relacionados ao impacto e tratamento da Covid-19?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_12" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Não há nada comprovado.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_13" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Existe um tempo específico ou exame que confirme a cura do beneficiário pelo novo coronavírus?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_13" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            Não, ainda não.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" data-toggle="collapse" href="#collapse_faq_14" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Em qual momento o colaborador confirmado com a Covid-19 pode retornar ao trabalho?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_faq_14" class="collapse" role="tabpanel" data-parent="#faq">
                                    <div class="card-body">
                                        <p style="text-align: justify;">
                                            O retorno ao trabalho deve sempre ser avaliado pelo médico, que dirá o momento correto.          
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Veja onde fazer o exame para diagnóstico de Covid-19: --}}
                    <div class="box_feat" style="padding: 15px 20px 15px 20px; text-align: left; height: 520px; overflow: auto; margin-bottom: 30px;">
                        <div class="main_title mb-0" style="padding-top: 20px; padding-bottom: 20px;">
                            <h4 style="font-size: 20px;">Veja onde fazer o exame para diagnóstico de Covid-19:</h4>
                        </div>
            
                        <div role="tablist" class="accordion" id="states">
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_1" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Acre
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_1" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            01983802000121
                                                        </td>
                                                        <td>
                                                            BIONORTE CENTRO DE DIAGNOSTICO ANALISE E PESQUISAS CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA ALVORADA - N º 125
                                                        </td>
                                                        <td>
                                                            (68) 3224-9847
                                                        </td>
                                                        <td>
                                                            RIO BRANCO
                                                        </td>
                                                        <td>
                                                            AC
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            63601751000183
                                                        </td>
                                                        <td>
                                                            LABORATORIO DE ANALISES CLINICAS CARLOS CHAGAS
                                                        </td>
                                                        <td>
                                                            AVENIDA GETULIO VARGAS -1861
                                                        </td>
                                                        <td>
                                                            (68) 3224-4190
                                                        </td>
                                                        <td>
                                                            RIO BRANCO
                                                        </td>
                                                        <td>
                                                            AC
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            00529443000336
                                                        </td>
                                                        <td>
                                                            OBRAS SOCIAIS DA DIOCESE DE RIO BRANCO HOSPITAL SANTA JULIANA
                                                        </td>
                                                        <td>
                                                            RUA ALVORADA - N º 806
                                                        </td>
                                                        <td>
                                                            (68) 3212-4700
                                                        </td>
                                                        <td>
                                                            RIO BRANCO
                                                        </td>
                                                        <td>
                                                            AC
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_2" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Amazonas
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_2" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            4382792000167
                                                        </td>
                                                        <td>
                                                            SOCIEDADE PORTUGUESA BENEFICENTE DO AMAZONAS
                                                        </td>
                                                        <td>
                                                            AVENIDA JOAQUIM NABUCO - N º 1359
                                                        </td>
                                                        <td>
                                                            (92) 2101-2500 (92) 2101-2505 (92) 2101-2563
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5460308000133
                                                        </td>
                                                        <td>
                                                            CHECKUP HOSPITAL LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA PARAIBA - N º 500
                                                        </td>
                                                        <td>
                                                            (92) 2125-5950 (92) 2125-5951 (92) 2125-5952 (92) 2125-5959
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            84124064000194
                                                        </td>
                                                        <td>
                                                            CEDACLIN CENTRO DE DIAGNOSTICOS E ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA MACEIÓ - C - 417
                                                        </td>
                                                        <td>
                                                            (92) 3085-1184 (92) 3085-1185
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            04666863000153
                                                        </td>
                                                        <td>
                                                            HOSPITAL SANTA JULIA LTDA
                                                        </td>
                                                        <td>
                                                            RUA AYRÃO - N º 507
                                                        </td>
                                                        <td>
                                                            (92) 2121-9000 (92) 2121-9059 (92) 2121-9073 (92) 2121-9773
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            718528006565
                                                        </td>
                                                        <td>
                                                            LABORATORIO SABIN DE ANALISES CLINICAS LTDA - FILIAL MANAUS-AM
                                                        </td>
                                                        <td>
                                                            RUA RIO ITANNANA, 110 - QUADRA 67ª - CONJUNTO VIEIRA ALVES
                                                        </td>
                                                        <td>
                                                            (92) 2126-8000 (92) 3029-1092
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            21418871000108
                                                        </td>
                                                        <td>
                                                            RDB ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA JOAQUIM NABUCO - Terreo - 1359
                                                        </td>
                                                        <td>
                                                            (92) 3234-7778
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_3" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Amapá
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_3" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            4382792000167
                                                        </td>
                                                        <td>
                                                            SOCIEDADE PORTUGUESA BENEFICENTE DO AMAZONAS
                                                        </td>
                                                        <td>
                                                            AVENIDA JOAQUIM NABUCO - N º 1359
                                                        </td>
                                                        <td>
                                                            (92) 2101-2500 (92) 2101-2505 (92) 2101-2563
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5460308000133
                                                        </td>
                                                        <td>
                                                            CHECKUP HOSPITAL LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA PARAIBA - N º 500
                                                        </td>
                                                        <td>
                                                            (92) 2125-5950 (92) 2125-5951 (92) 2125-5952 (92) 2125-5959
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            84124064000194
                                                        </td>
                                                        <td>
                                                            CEDACLIN CENTRO DE DIAGNOSTICOS E ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA MACEIÓ - C - 417
                                                        </td>
                                                        <td>
                                                            (92) 3085-1184 (92) 3085-1185
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            04666863000153
                                                        </td>
                                                        <td>
                                                            HOSPITAL SANTA JULIA LTDA
                                                        </td>
                                                        <td>
                                                            RUA AYRÃO - N º 507
                                                        </td>
                                                        <td>
                                                            (92) 2121-9000 (92) 2121-9059 (92) 2121-9073 (92) 2121-9773
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            718528006565
                                                        </td>
                                                        <td>
                                                            LABORATORIO SABIN DE ANALISES CLINICAS LTDA - FILIAL MANAUS-AM
                                                        </td>
                                                        <td>
                                                            RUA RIO ITANNANA, 110 - QUADRA 67ª - CONJUNTO VIEIRA ALVES
                                                        </td>
                                                        <td>
                                                            (92) 2126-8000 (92) 3029-1092
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            21418871000108
                                                        </td>
                                                        <td>
                                                            RDB ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA JOAQUIM NABUCO - Terreo - 1359
                                                        </td>
                                                        <td>
                                                            (92) 3234-7778
                                                        </td>
                                                        <td>
                                                            MANAUS
                                                        </td>
                                                        <td>
                                                            AM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_4" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Bahia
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_4" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            05652543000107
                                                        </td>
                                                        <td>
                                                            INCAR HOSPITAL LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA BARROS E ALMEIDA - N º 409
                                                        </td>
                                                        <td>
                                                            (75) 3311-6652 (75) 3311-6663 (75) 3631-9133
                                                        </td>
                                                        <td>
                                                            SANTO ANTONIO DE JESUS
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            27372066000169
                                                        </td>
                                                        <td>
                                                            HOSPITAL SAO RAFAEL S.A
                                                        </td>
                                                        <td>
                                                            AVENIDA SÃO RAFAEL - N º 2152
                                                        </td>
                                                        <td>
                                                            (71) 3281-6231 (71) 3409-8000
                                                        </td>
                                                        <td>
                                                            SALVADOR
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4042215000126
                                                        </td>
                                                        <td>
                                                            EMBRIOLAB - LABORATORIO DE REPRODUÇAO ASSISTIDA E ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA JOSÉ PETITINGA - N º 270
                                                        </td>
                                                        <td>
                                                            (74) 3611-9345
                                                        </td>
                                                        <td>
                                                            JUAZEIRO
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            15194004000125
                                                        </td>
                                                        <td>
                                                            HOSPITAL SANTO AMARO - FUNDACAO JOSE SILVEIRA
                                                        </td>
                                                        <td>
                                                            LADEIRA CAMPO SANTO
                                                        </td>
                                                        <td>
                                                            (71) 3504-5000 (71) 3504-5155 (71) 3504-5160
                                                        </td>
                                                        <td>
                                                            SALVADOR
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            32637787000193
                                                        </td>
                                                        <td>
                                                            LABACLEN LABORATORIO DE ANALISES CLINICAS E ENDOCRINOLOGIA LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA ANTÔNIO CARLOS MAGALHÃES - 56
                                                        </td>
                                                        <td>
                                                            (71) 3261-1314
                                                        </td>
                                                        <td>
                                                            SALVADOR
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            97521551000132
                                                        </td>
                                                        <td>
                                                            LABOANALISE LABORATORIO DE ANALISES CLINICAS
                                                        </td>
                                                        <td>
                                                            RUA AUGUSTO JOSE PEREIRA
                                                        </td>
                                                        <td>
                                                            (75) 3621-2646
                                                        </td>
                                                        <td>
                                                            CRUZ DAS ALMAS
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            16274391000172
                                                        </td>
                                                        <td>
                                                            LABORATORIO ANALISE - INSTITUTO ANALISE DE PESQUISAS CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA GETULIO VARGAS, 1085
                                                        </td>
                                                        <td>
                                                            (75) 3322-4000 (75) 3322-4019
                                                        </td>
                                                        <td>
                                                            FEIRA DE SANTANA
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            15153745000249
                                                        </td>
                                                        <td>
                                                            SANTA CASA DE MISERICORDIA DA BAHIA
                                                        </td>
                                                        <td>
                                                            PRAÇA CONSELHEIRO ALMEIDA COUTO - N º 500
                                                        </td>
                                                        <td>
                                                            (71) 2203-8385 (71) 2203-8444 (71) 2203-8922
                                                        </td>
                                                        <td>
                                                            SALVADOR
                                                        </td>
                                                        <td>
                                                            BA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_5" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Ceará
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_5" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            7818313000109
                                                        </td>
                                                        <td>
                                                            SANTA CASA DE MISERICORDIA DE SOBRAL
                                                        </td>
                                                        <td>
                                                            RUA ANTONIO CRISOSTOMO DE MELO, N º 919
                                                        </td>
                                                        <td>
                                                            (88) 3677-1956 (88) 9924-3166
                                                        </td>
                                                        <td>
                                                            SOBRAL
                                                        </td>
                                                        <td>
                                                            CE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            29435005007484
                                                        </td>
                                                        <td>
                                                            ESHO- EMPRESA DE SERVICOS HOSPITALARES S.A.
                                                        </td>
                                                        <td>
                                                            RUA REPÚBLICA DO LÍBANO N º 747
                                                        </td>
                                                        <td>
                                                            (85) 4012-0012
                                                        </td>
                                                        <td>
                                                            FORTALEZA
                                                        </td>
                                                        <td>
                                                            CE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5609698000160
                                                        </td>
                                                        <td>
                                                            CENTRO LABORATORIAL ALVES AQUINO
                                                        </td>
                                                        <td>
                                                            RUA TABELIAO ANTONIO ALMEIDA, 359
                                                        </td>
                                                        <td>
                                                            (88) 3611-2486
                                                        </td>
                                                        <td>
                                                            SOBRAL
                                                        </td>
                                                        <td>
                                                            CE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            7038425000139
                                                        </td>
                                                        <td>
                                                            LABORATORIO CLEMENTINO FRAGA LTDA
                                                        </td>
                                                        <td>
                                                            RUA VASCONCELOS - N º 947
                                                        </td>
                                                        <td>
                                                            (85) 3466-7877
                                                        </td>
                                                        <td>
                                                            FORTALEZA
                                                        </td>
                                                        <td>
                                                            CE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            09472754000119
                                                        </td>
                                                        <td>
                                                            LABORATÓRIO EMILIO RIBAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA BARÃO DE STUDART -714
                                                        </td>
                                                        <td>
                                                            (85) 3457-2000
                                                        </td>
                                                        <td>
                                                            FORTALEZA
                                                        </td>
                                                        <td>
                                                            CE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_6" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Distrito Federal
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_6" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            718528000109
                                                        </td>
                                                        <td>
                                                            SABIN - LABORATORIO SABIN DE ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            QUADRA SAAN QUADRA 3, 165 - ZONA INDUSTRIAL
                                                        </td>
                                                        <td>
                                                            (61) 3329-8000 (61) 3329-8068
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            61486650038822
                                                        </td>
                                                        <td>
                                                            DIAGNOSTICOS DA AMERICA S.A
                                                        </td>
                                                        <td>
                                                            SHLS 716 CONJUNTO B BLOCO 02
                                                        </td>
                                                        <td>
                                                            (61) 3433-3209 (61) 3433-3262 (61) 4004-3883
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            38000485000196
                                                        </td>
                                                        <td>
                                                            HOSPITAL MARIA AUXILIADORA S/A
                                                        </td>
                                                        <td>
                                                            AREA ESPECIAL 16 LADO OESTE
                                                        </td>
                                                        <td>
                                                            (61) 3203-9400
                                                        </td>
                                                        <td>
                                                            GAMA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            00511816000180
                                                        </td>
                                                        <td>
                                                            HOSPITAL PRONTONORTE LTDA
                                                        </td>
                                                        <td>
                                                            SHLN 516 CONJUNTO G
                                                        </td>
                                                        <td>
                                                            (61) 3448-9100
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            00025841000153
                                                        </td>
                                                        <td>
                                                            HOSPITAL SANTA LUCIA S/A
                                                        </td>
                                                        <td>
                                                            SHLS 716 SUL CONJUNTO C
                                                        </td>
                                                        <td>
                                                            (61) 3445-0000
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            60884855002289
                                                        </td>
                                                        <td>
                                                            IMPAR SERVIÇOS HOSPITALARES S/A - HOSPITAL BRASILIA
                                                        </td>
                                                        <td>
                                                            RUA TIRADENTES, 295
                                                        </td>
                                                        <td>
                                                            (61) 3305-8201 (61) 3704-9000
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            60884855001983
                                                        </td>
                                                        <td>
                                                            IMPAR SERVIÇOS HOSPITALARES S/A - MATERNIDADE BRASILIA
                                                        </td>
                                                        <td>
                                                            QMSW 04 LOTE 01
                                                        </td>
                                                        <td>
                                                            (61) 3315-1000
                                                        </td>
                                                        <td>
                                                            BRASILIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            72576143000157
                                                        </td>
                                                        <td>
                                                            SERVICOS HOSPITALARES YUGE S/A - HOSPITAL SAO FRANCISCO
                                                        </td>
                                                        <td>
                                                            QNN 28 MODULO C AREA ESPECIAL
                                                        </td>
                                                        <td>
                                                            (61) 3378-9000
                                                        </td>
                                                        <td>
                                                            CEILANDIA
                                                        </td>
                                                        <td>
                                                            DF
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_7" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Goiás
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_7" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            61486650028940
                                                        </td>
                                                        <td>
                                                            DIAGNOSTICOS DA AMERICA S.A
                                                        </td>
                                                        <td>
                                                            AVENIDA DAS BANDEIRAS, 300, QUADRA 23 LOTE 05/06
                                                        </td>
                                                        <td>
                                                            (61) 3433 3209
                                                        </td>
                                                        <td>
                                                            APARECIDA DE GOIANIA
                                                        </td>
                                                        <td>
                                                            GO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1589621000115
                                                        </td>
                                                        <td>
                                                            LABORATORIO DR JARBAS DOLES LTDA
                                                        </td>
                                                        <td>
                                                            RUA 3-4 NUMERO 210
                                                        </td>
                                                        <td>
                                                            (62) 3223-4155
                                                        </td>
                                                        <td>
                                                            GOIANIA
                                                        </td>
                                                        <td>
                                                            GO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            01588888000198
                                                        </td>
                                                        <td>
                                                            LABORATORIO PADRAO S.A
                                                        </td>
                                                        <td>
                                                            RUA 83 - Nº 444
                                                        </td>
                                                        <td>
                                                            (62) 3221-9000 (62) 3221-9056
                                                        </td>
                                                        <td>
                                                            GOIANIA
                                                        </td>
                                                        <td>
                                                            GO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            01656123000148
                                                        </td>
                                                        <td>
                                                            SOUZA PRADO E PEIXOTO LTDA - HOSPITAL SANTA HELENA
                                                        </td>
                                                        <td>
                                                            RUA 95, 99
                                                        </td>
                                                        <td>
                                                            (62) 3219-9000
                                                        </td>
                                                        <td>
                                                            GOIANIA
                                                        </td>
                                                        <td>
                                                            GO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_8" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Maranhão
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_8" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            02284062001170
                                                        </td>
                                                        <td>
                                                            HOSPITAL ESPERANÇA SA
                                                        </td>
                                                        <td>
                                                            AVENIDA PROFESSOR CARLOS CUNHA - N º 2000
                                                        </td>
                                                        <td>
                                                            (98) 3216-7979
                                                        </td>
                                                        <td>
                                                            SAO LUIS
                                                        </td>
                                                        <td>
                                                            MA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            10445344000168
                                                        </td>
                                                        <td>
                                                            LABORATORIO CEDRO LIMITADA
                                                        </td>
                                                        <td>
                                                            AVENIDA SILVA MAIA - N º 81
                                                        </td>
                                                        <td>
                                                            (98) 2107-0800 (98) 2107-0808
                                                        </td>
                                                        <td>
                                                            SAO LUIS
                                                        </td>
                                                        <td>
                                                            MA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_9" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Minas Gerais
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_9" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            21575709000195
                                                        </td>
                                                        <td>
                                                            SANTA CASA DE MISERICORDIA DE JUIZ DE FORA
                                                        </td>
                                                        <td>
                                                            AVENIDA BARÃO DO RIO BRANCO N º 3353
                                                        </td>
                                                        <td>
                                                            (32) 3229-2222
                                                        </td>
                                                        <td>
                                                            JUIZ DE FORA
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            17214149000176
                                                        </td>
                                                        <td>
                                                            FUNDACAO FELICE ROSSO
                                                        </td>
                                                        <td>
                                                            AVENIDA DO CONTORNO N º 9530
                                                        </td>
                                                        <td>
                                                            (31) 3339-7270
                                                        </td>
                                                        <td>
                                                            BELO HORIZONTE
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            24.993.560/0001-52
                                                        </td>
                                                        <td>
                                                            IRMANDADE DE NOSSA SENHORA DAS GRAÇAS
                                                        </td>
                                                        <td>
                                                            RUA TEOFILO OTONI, 247
                                                        </td>
                                                        <td>
                                                            (31) 2107-6000
                                                        </td>
                                                        <td>
                                                            SETE LAGOAS
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            21580956000180
                                                        </td>
                                                        <td>
                                                            LABORATORIO CORTES VILELLA LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA RIO BRANCO, 2406 / 4ª ANDAR
                                                        </td>
                                                        <td>
                                                            (32) 3239-5000
                                                        </td>
                                                        <td>
                                                            JUIZ DE FORA
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            38504437000135
                                                        </td>
                                                        <td>
                                                            LABORATORIO SANTA LUCIA LTDA
                                                        </td>
                                                        <td>
                                                            RUA CANDIDO AZEREDO, 21/101
                                                        </td>
                                                        <td>
                                                            (31) 3771-9722
                                                        </td>
                                                        <td>
                                                            SETE LAGOAS
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6199859000158
                                                        </td>
                                                        <td>
                                                            NEOLAB - LABORATORIO DE ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            AV. BARAO DO RIO BRANCO - LOJA 102 - 272
                                                        </td>
                                                        <td>
                                                            (32) 32120174
                                                        </td>
                                                        <td>
                                                            JUIZ DE FORA
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            16.740.086/0001-29
                                                        </td>
                                                        <td>
                                                            SAO MARCOS – SAUDE E MEDICINA DIAGNOSTICA SA
                                                        </td>
                                                        <td>
                                                            RUA PARÁ DE MINAS, Nº 1035
                                                        </td>
                                                        <td>
                                                            (31) 2104-0100
                                                        </td>
                                                        <td>
                                                            BELO HORIZONTE
                                                        </td>
                                                        <td>
                                                            MG
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_10" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Mato Grosso do Sul
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_10" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            04524604000198
                                                        </td>
                                                        <td>
                                                            ANALYSIS DIAGNOSTICOS
                                                        </td>
                                                        <td>
                                                            RUA FREI MARIANO - N º 837
                                                        </td>
                                                        <td>
                                                            (67) 3231-1671 (67) 3232-0444 (67) 3232-8113
                                                        </td>
                                                        <td>
                                                            CORUMBA
                                                        </td>
                                                        <td>
                                                            MS
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5513982000139
                                                        </td>
                                                        <td>
                                                            LABORATORIO SABIN DE ANALISES CLINICAS EM CGDE LTDA
                                                        </td>
                                                        <td>
                                                            RUA RUI BARBOSA, Nº 3296
                                                        </td>
                                                        <td>
                                                            (67) 3047-7704
                                                        </td>
                                                        <td>
                                                            CAMPO GRANDE
                                                        </td>
                                                        <td>
                                                            MS
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_11" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Mato Grosso
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_11" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            04385488000173
                                                        </td>
                                                        <td>
                                                            MAGNANI E MAGNANI FILHO LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA DAS ITAUBAS - Nº 2912
                                                        </td>
                                                        <td>
                                                            (66) 3531-7070
                                                        </td>
                                                        <td>
                                                            SINOP
                                                        </td>
                                                        <td>
                                                            MT
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            973021000193
                                                        </td>
                                                        <td>
                                                            BIOCLINICO LABORATORIO DE ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA DOS JACARANDAS - TÉRREO - 2895
                                                        </td>
                                                        <td>
                                                            (66) 3531-7878
                                                        </td>
                                                        <td>
                                                            SINOP
                                                        </td>
                                                        <td>
                                                            MT
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            61486650041106
                                                        </td>
                                                        <td>
                                                            DIAGNOSTICO DA AMERICA S/A - CEDILAB
                                                        </td>
                                                        <td>
                                                            RUA BARÃO DE MELGAÇO, Nº 2777, 1º PISO
                                                        </td>
                                                        <td>
                                                            (65) 3319-3319 (65) 3617-5505
                                                        </td>
                                                        <td>
                                                            CUIABA
                                                        </td>
                                                        <td>
                                                            MT
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_12" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Pará
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_12" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            84154608000160
                                                        </td>
                                                        <td>
                                                            HOSPITAL PORTO DIAS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA ALMIRANTE BARROSO
                                                        </td>
                                                        <td>
                                                            (91) 3084-3000 (91) 3184-9999
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            83367342000252
                                                        </td>
                                                        <td>
                                                            ASSOCIACAO ADVENTISTA NORTE BRASILEIRA DE PREVENCAO E ASSISTENCIA A SAUDE
                                                        </td>
                                                        <td>
                                                            AVENIDA ALMIRANTE BARROSO - N º 1758
                                                        </td>
                                                        <td>
                                                            (91) 3084-7311 (91) 3084-7610 (91) 3084-8686
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            83365700000107
                                                        </td>
                                                        <td>
                                                            CEMAZA - INSTITUTO DE PATOLOGIA CLINICA LTDA
                                                        </td>
                                                        <td>
                                                            TRAVESSA CASTELO BRANCO, 912
                                                        </td>
                                                        <td>
                                                            (91) 3249-9090
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            63879381000140
                                                        </td>
                                                        <td>
                                                            HOSPITAL HSM - DIAGNOSIS CENTRO DE DIAGNOSTICOS LTDA
                                                        </td>
                                                        <td>
                                                            TRAVESSA HUMAITA N º 1598
                                                        </td>
                                                        <td>
                                                            (91) 3181-7000
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            04900985000162
                                                        </td>
                                                        <td>
                                                            HOSPITAL NOSSA SENHORA DE GUADALUPE
                                                        </td>
                                                        <td>
                                                            RUA ARCIPRESTE MANOEL TEODORO - N º 734
                                                        </td>
                                                        <td>
                                                            (91) 4005-9877 / (91) 4005-9832
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4978805000165
                                                        </td>
                                                        <td>
                                                            LABORATORIO DE PATOLOGIA CLINICA DR. PAULO CORDEIRO AZEVEDO LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA COMANDANTE BRAZ DE AGUIAR, 99
                                                        </td>
                                                        <td>
                                                            (91) 3355-8420 (91) 3355-8422
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            05481868000174
                                                        </td>
                                                        <td>
                                                            R V BRAZAO LTDA - LABORATORIO RUTH BRAZAO LTDA
                                                        </td>
                                                        <td>
                                                            TRAVESSA CASTELO BRANCO - N º 542
                                                        </td>
                                                        <td>
                                                            (91) 3181-0000 (91) 3181-0036
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            14055768000177
                                                        </td>
                                                        <td>
                                                            SOM DIAGNOSTICOS LTDA
                                                        </td>
                                                        <td>
                                                            RUA DOS MUNDURUCUS - 2427
                                                        </td>
                                                        <td>
                                                            (91) 4008-8576
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            14055768000177
                                                        </td>
                                                        <td>
                                                            SOM DIAGNOSTICOS LTDA
                                                        </td>
                                                        <td>
                                                            RUA DOS MUNDURUCUS - 2427
                                                        </td>
                                                        <td>
                                                            (91) 4008-8500
                                                        </td>
                                                        <td>
                                                            BELEM
                                                        </td>
                                                        <td>
                                                            PA
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_13" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Pernambuco
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_13" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            27049306000199
                                                        </td>
                                                        <td>
                                                            INSTITUTO MEMORIAL DO VALE
                                                        </td>
                                                        <td>
                                                            RUA TOBIAS BARRETO - anexo A - 02
                                                        </td>
                                                        <td>
                                                            (87) 3862-8900 (87) 3862-8935 (87) 3862-8941 (87) 3862-8942
                                                        </td>
                                                        <td>
                                                            PETROLINA
                                                        </td>
                                                        <td>
                                                            PE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            7931342000255
                                                        </td>
                                                        <td>
                                                            BIOANALISES LABORATORIO DE ANALISES DIAGNOSTICOS LTDA ME
                                                        </td>
                                                        <td>
                                                            RUA ANTÔNIO DE SANTANA FILHO - N º 359
                                                        </td>
                                                        <td>
                                                            (87) 3861-2011 (87) 3866-0063
                                                        </td>
                                                        <td>
                                                            PETROLINA
                                                        </td>
                                                        <td>
                                                            PE
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            11475720000120
                                                        </td>
                                                        <td>
                                                            CEDILA - CENTRO DIAGNOSTICO CLINICO E LABORATORUIAL DO SAO FRANCISCO LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA JOAQUIM NABUCO - N º 798
                                                        </td>
                                                        <td>
                                                            (87) 3983-4600
                                                        </td>
                                                        <td>
                                                            PETROLINA
                                                        </td>
                                                        <td>
                                                            PE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            35447804000118
                                                        </td>
                                                        <td>
                                                            SALUTE CENTRO DIAGNOSTICO SC
                                                        </td>
                                                        <td>
                                                            RUA MANOEL CLEMENTINO - N º 1167
                                                        </td>
                                                        <td>
                                                            (87) 3862-1536
                                                        </td>
                                                        <td>
                                                            PETROLINA
                                                        </td>
                                                        <td>
                                                            PE
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_14" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Paraíba
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_14" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            24.287.716/0001-80
                                                        </td>
                                                        <td>
                                                            CLIMEDICA - CLINICA MEDICA S/S LTDA
                                                        </td>
                                                        <td>
                                                            RUA DEPUTADO ÁLVARO GAUDÊNCIO - 235
                                                        </td>
                                                        <td>
                                                            (83) 3341-4222
                                                        </td>
                                                        <td>
                                                            CAMPINA GRANDE
                                                        </td>
                                                        <td>
                                                            PB
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            02575485000177
                                                        </td>
                                                        <td>
                                                            HEMOCLIN-CENTRO DE HEMATOLOGIA E ANALISE CLINICA LTDA
                                                        </td>
                                                        <td>
                                                            RUA SIQUEIRA CAMPOS - N º 315
                                                        </td>
                                                        <td>
                                                            (83) 3341-1162
                                                        </td>
                                                        <td>
                                                            CAMPINA GRANDE
                                                        </td>
                                                        <td>
                                                            PB
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            35439728000107
                                                        </td>
                                                        <td>
                                                            PROSANGUE - CENTRO DE ENDOCRINOLOGIA E METABOLOGIA LTDA
                                                        </td>
                                                        <td>
                                                            RUA SANDRA BORBOREMA - N º 61
                                                        </td>
                                                        <td>
                                                            (83) 2102-5521
                                                        </td>
                                                        <td>
                                                            CAMPINA GRANDE
                                                        </td>
                                                        <td>
                                                            PB
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_15" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Piauí
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_15" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1038328000160
                                                        </td>
                                                        <td>
                                                            BIOANALISE S/C LTDA
                                                        </td>
                                                        <td>
                                                            RUA DEZENOVE DE NOVEMBRO, Nº 46
                                                        </td>
                                                        <td>
                                                            (86) 3215-8585
                                                        </td>
                                                        <td>
                                                            TERESINA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            63326243000304
                                                        </td>
                                                        <td>
                                                            HOSPITAL MED IMAGEM LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA FREI SERAFIM - N º 1984
                                                        </td>
                                                        <td>
                                                            (86) 3131-1234
                                                        </td>
                                                        <td>
                                                            TERESINA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            63326243000215
                                                        </td>
                                                        <td>
                                                            HOSPITAL MED IMAGEM LTDA
                                                        </td>
                                                        <td>
                                                            RUA PAISSANDU N º 1842
                                                        </td>
                                                        <td>
                                                            (86) 3131-1234
                                                        </td>
                                                        <td>
                                                            TERESINA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            01775217000136
                                                        </td>
                                                        <td>
                                                            HOSPITAL SAO PAULO LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA LINDOLFO MONTEIRO - N º 1551
                                                        </td>
                                                        <td>
                                                            (86) 3216-9300
                                                        </td>
                                                        <td>
                                                            TERESINA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            10999381000118
                                                        </td>
                                                        <td>
                                                            LABORATORIO DE ANALISES CLINICAS BIOLAC LTDA
                                                        </td>
                                                        <td>
                                                            RUA DESEMBARGADOR PIRES DE CASTRO, 265
                                                        </td>
                                                        <td>
                                                            (86) 3233-6764
                                                        </td>
                                                        <td>
                                                            TERESINA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            18945597000102
                                                        </td>
                                                        <td>
                                                            LABORATORIO MENESES - NUNES MENESES ANALISES CLINICAS S/S
                                                        </td>
                                                        <td>
                                                            RUA ADEMAR NEVES - N º 1459
                                                        </td>
                                                        <td>
                                                            (86) 3321-1209
                                                        </td>
                                                        <td>
                                                            PARNAIBA
                                                        </td>
                                                        <td>
                                                            PI
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_16" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Paraná
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_16" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            06788751000109
                                                        </td>
                                                        <td>
                                                            CETEL - LABORATORIO CLINICO LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA BANDEIRANTES, 1117
                                                        </td>
                                                        <td>
                                                            (43) 3376-6400
                                                        </td>
                                                        <td>
                                                            LONDRINA
                                                        </td>
                                                        <td>
                                                            PR
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            76659820002367
                                                        </td>
                                                        <td>
                                                            ASSOCIAÇAO PARANAENSE DE CULTURA - HOSPITAL MARCELINO CHAMPAGNAT
                                                        </td>
                                                        <td>
                                                            AVENIDA PRESIDENTE AFONSO CAMARGO, 1399
                                                        </td>
                                                        <td>
                                                            (41) 3087-7600
                                                        </td>
                                                        <td>
                                                            CURITIBA
                                                        </td>
                                                        <td>
                                                            PR
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            61486650027979
                                                        </td>
                                                        <td>
                                                            DIAGNOSTICO DA AMERICA S/A - FRISCHMANN AISENGART
                                                        </td>
                                                        <td>
                                                            RUA ALCIDIO VIANA, 911
                                                        </td>
                                                        <td>
                                                            (41) 4004-0103
                                                        </td>
                                                        <td>
                                                            CURITIBA / SAO JOSE DOS PINHAIS
                                                        </td>
                                                        <td>
                                                            PR
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            77325488000151
                                                        </td>
                                                        <td>
                                                            LABORATORIO OSWALDO CRUZ DE ANALISES CLINICAS S/C LTDA
                                                        </td>
                                                        <td>
                                                            RUA ANTONIO MADO NOIVO, 310, 4º ANDAR JARDIM IPIRANGA
                                                        </td>
                                                        <td>
                                                            (43) 3376-6100
                                                        </td>
                                                        <td>
                                                            LONDRINA
                                                        </td>
                                                        <td>
                                                            PR
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_17" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Rio de Janeiro
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_17" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            60840055030634
                                                        </td>
                                                        <td>
                                                            FLEURY S.A - CLINICA LUIZ FELIPPE MATTOSO
                                                        </td>
                                                        <td>
                                                            RUA BAMBINA - anexo ao Hosp. da Rua Assunção, 365
                                                        </td>
                                                        <td>
                                                            50352156
                                                        </td>
                                                        <td>
                                                            RIO DE JANEIRO
                                                        </td>
                                                        <td>
                                                            RJ
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            61486650049867
                                                        </td>
                                                        <td>
                                                            DIAGNOSTICOS DA AMERICA S.A
                                                        </td>
                                                        <td>
                                                            RUA XAVIER PINHEIRO - N º 439
                                                        </td>
                                                        <td>
                                                            (21) 2672-7028 (21) 2672-7070
                                                        </td>
                                                        <td>
                                                            DUQUE DE CAXIAS
                                                        </td>
                                                        <td>
                                                            RJ
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            60840055025398
                                                        </td>
                                                        <td>
                                                            GRUPO FLEURY S.A LABS A +
                                                        </td>
                                                        <td>
                                                            AVENIDA PASTOR MARTIN LUTHER KING JR - BLOCO B - Salas 601/602
                                                        </td>
                                                        <td>
                                                            (21) 2538-3600 (21) 3175-6722 FAT
                                                        </td>
                                                        <td>
                                                            RIO DE JANEIRO
                                                        </td>
                                                        <td>
                                                            RJ
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_18" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Roraima
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_18" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            9301253000170
                                                        </td>
                                                        <td>
                                                            CLINICA MAE DE DEUS LTDA
                                                        </td>
                                                        <td>
                                                            AVENIDA MAJOR WILLIAMS N º 1782
                                                        </td>
                                                        <td>
                                                            (95) 3224-0325
                                                        </td>
                                                        <td>
                                                            BOA VISTA
                                                        </td>
                                                        <td>
                                                            RR
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            84049568000197
                                                        </td>
                                                        <td>
                                                            HEMOLAB LABORATORIO DE ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA ALFREDO CRUZ - N º 719 -1
                                                        </td>
                                                        <td>
                                                            (95) 3623-4499
                                                        </td>
                                                        <td>
                                                            BOA VISTA
                                                        </td>
                                                        <td>
                                                            RR
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            00718528012298
                                                        </td>
                                                        <td>
                                                            LABORATORIO SABIN DE ANALISES CLINICAS LTDA FILIAL BOA VISTA RR
                                                        </td>
                                                        <td>
                                                            AVENIDA VILLE ROY - N º 5441
                                                        </td>
                                                        <td>
                                                            (95) 3623-1310
                                                        </td>
                                                        <td>
                                                            BOA VISTA
                                                        </td>
                                                        <td>
                                                            RR
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_19" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Rio Grande do Sul
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_19" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            88295308000152
                                                        </td>
                                                        <td>
                                                            LABORATORIO DR ROUGET PEREZ LTDA
                                                        </td>
                                                        <td>
                                                            RUA QUINZE DE NOVEMBRO, 451
                                                        </td>
                                                        <td>
                                                            (53) 3225-4488
                                                        </td>
                                                        <td>
                                                            PELOTAS
                                                        </td>
                                                        <td>
                                                            RS
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            92030543000170
                                                        </td>
                                                        <td>
                                                            HOSPITAL DA CIDADE DE PASSO FUNDO
                                                        </td>
                                                        <td>
                                                            RUA TIRADENTES, 295
                                                        </td>
                                                        <td>
                                                            (54) 2103-3333 (54) 2103-3391
                                                        </td>
                                                        <td>
                                                            PASSO FUNDO
                                                        </td>
                                                        <td>
                                                            RS
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            88425871000106
                                                        </td>
                                                        <td>
                                                            LABORATORIO LAVOISIER LTDA
                                                        </td>
                                                        <td>
                                                            RUA TEIXEIRA SOARES, 777 SALAS 13 A 15
                                                        </td>
                                                        <td>
                                                            (54) 3317-2508
                                                        </td>
                                                        <td>
                                                            PASSO FUNDO
                                                        </td>
                                                        <td>
                                                            RS
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            92219559000125
                                                        </td>
                                                        <td>
                                                            SANTA CASA DE MISERICORDIA DE PELOTAS
                                                        </td>
                                                        <td>
                                                            PRACA PIRATININO DE ALMEIDA, 53
                                                        </td>
                                                        <td>
                                                            (53) 3284-4700
                                                        </td>
                                                        <td>
                                                            PELOTAS
                                                        </td>
                                                        <td>
                                                            RS
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_20" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>São Paulo
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_20" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <p>
                                                Não há prestadores em SP
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_21" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Sergipe
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_21" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            13.356.779/0001-24
                                                        </td>
                                                        <td>
                                                            REDE PRIMAVERA - ASSISTENCIA MEDICA HOSPITALAR LTDA.
                                                        </td>
                                                        <td>
                                                            AVENIDA MINISTRO GERALDO BARRETO SOBRAL N º 2277
                                                        </td>
                                                        <td>
                                                            (79) 2105-2463 (79) 2107-4600
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            16.456.022/0001-09
                                                        </td>
                                                        <td>
                                                            CEMISE - CENTRO DE MEDICINA INTEGRADA DE SERGIPE LTDA
                                                        </td>
                                                        <td>
                                                            RUA CONSTRUTOR JOAO ALVES, 228
                                                        </td>
                                                        <td>
                                                            (79) 3304-1000
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            13175690000161
                                                        </td>
                                                        <td>
                                                            CLINICA RENASCENCA S/A
                                                        </td>
                                                        <td>
                                                            AVENIDA GONCALO PRADO ROLLEMBERG, 1490
                                                        </td>
                                                        <td>
                                                            (79) 2107-6400
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            13.086.053/0001-19
                                                        </td>
                                                        <td>
                                                            CLINICA SANTA HELENA LTDA
                                                        </td>
                                                        <td>
                                                            RUA FREI PAULO, 331
                                                        </td>
                                                        <td>
                                                            (79) 3216-1400
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3222051000156
                                                        </td>
                                                        <td>
                                                            INSTITUTO RODOLFO NEIROTTI DE GERENCIAMENTO E PESQUISA LTDA
                                                        </td>
                                                        <td>
                                                            RUA CAMPOS N º 75
                                                        </td>
                                                        <td>
                                                            (79) 2106-5500
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            32834285000152
                                                        </td>
                                                        <td>
                                                            LABORATORIO DE PATOLOGIA CIRURGICA E CITOLOGIA LTDA
                                                        </td>
                                                        <td>
                                                            RUA LAGARTO, 2020
                                                        </td>
                                                        <td>
                                                            (79) 3214-5490
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            13.150.875/0001-11
                                                        </td>
                                                        <td>
                                                            LAMAC - LABORATORIO MEDICO DE ANALISES CLINICAS LTDA
                                                        </td>
                                                        <td>
                                                            RUA LAGARTO, 1298
                                                        </td>
                                                        <td>
                                                            (79) 2107-9709
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            74030891000165
                                                        </td>
                                                        <td>
                                                            SEMPREVIVA HOSPITAL E MATERNIDADE LTDA EPP
                                                        </td>
                                                        <td>
                                                            RUA DOUTOR JOSÉ CALUMBY N º 280
                                                        </td>
                                                        <td>
                                                            (79) 3022-9600 (79) 3022-9620
                                                        </td>
                                                        <td>
                                                            ARACAJU
                                                        </td>
                                                        <td>
                                                            SE
                                                        </td>
                                                        <td>
                                                            NÃO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" style="padding: 10px 0px;" role="tab">
                                    <h5 class="mb-0" style="font-size: 13px;">
                                        <a class="collapsed text-black" style="text-transform: uppercase;" data-toggle="collapse" href="#collapse_state_22" aria-expanded="false">
                                            <i style="padding-right: 2px;" class="indicator icon_plus_alt2"></i>Tocantins
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse_state_22" class="collapse" role="tabpanel" data-parent="#states">
                                    <div class="card-body pl-0 pt-0" style="overflow-x: auto;">
                                        <div style="width: 1000px;" class="table-responsive">
                                            <table style="width: 1000px;" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            CNPJ
                                                        </th>
                                                        <th>
                                                            Razao Social
                                                        </th>
                                                        <th>
                                                            Endereço
                                                        </th>
                                                        <th>
                                                            Telefones
                                                        </th>
                                                        <th>
                                                            Município
                                                        </th>
                                                        <th>
                                                            UF
                                                        </th>
                                                        <th>
                                                            RT PCR
                                                        </th>
                                                        <th>
                                                            SOROLOGIA
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            38148219000105
                                                        </td>
                                                        <td>
                                                            PHD LABORATORIO CLINICO LTDA
                                                        </td>
                                                        <td>
                                                            QUADRA 104 SUL, AVENIDA LO - 01 CONJUNTO 04 LOTE 33
                                                        </td>
                                                        <td>
                                                            (63) 3215-3532
                                                        </td>
                                                        <td>
                                                            PALMAS
                                                        </td>
                                                        <td>
                                                            TO
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                        <td>
                                                            SIM
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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