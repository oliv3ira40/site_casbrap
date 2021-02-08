@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Substituição de Prestadores
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

		
		<div class="container padding_t_60">
			<div class="row justify-content-between">				
				<div class="col-md-12 custom-main_title">
					<p align="justify">
						Nesta página o associado Casembrapa tem acesso aos dados dos prestadores que deixaram de atender o Plano de Saúde nos últimos 180 dias e seus respectivos substitutos, conforme RN 365 da Agência Nacional de Saúde Suplementar. Além disso, o Plano de Saúde indicará os profissionais e as empresas que foram descredenciados por não haver prestação de serviço por no mínimo 12 meses consecutivos, conforme o disposto no Art. 8º da RN 365 da ANS.
					</p>
				</div>
			
				<div class="col-lg-12" id="faq">
					<h4 class="nomargin_top">Descredenciamento</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="payment">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>CASEMBRAPA
									</a>
								</h5>
							</div>
							<div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#payment">
								<div class="card-body">
									{{-- <p>
										Franciele Cristina Tozo
									</p>
									<p>
										Razão Social: Franciele Cristina<br>
										Data de inativação: 28/12/2017<br>
										Nº de registro em Conselho:<br>
										Nome do Credenciado: Franciele Cristina<br>
										Especialidade: Psicologia<br>
										CPF: 032.631.489-07<br>
										Endereço: Rua Paulo Graeser Sobradinho, 185, Mercês, Curitiba - PR, CEP: 80510-170<br>
										Telefone: (41) 3257-4740<br><br>
										O prestador foi inativado após não haver atendimento aos nossos associados por mais de 12 meses consecutivos
									</p> --}}
									
									<p>
										<a target="_blank" href="{{ asset('pages/provider_replacement/Prestadores_Descredenciados_29-12-2020.pdf') }}">
											Clique aqui para visualizar a Exclusão/Substituição de Prestadores
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<h4 class="nomargin_top">Descredenciamento</h4>
					<div role="tablist" class="add_bottom_45 accordion" id="tips">
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a data-toggle="collapse" href="#collapseOne_tips" aria-expanded="true">
										<i class="indicator icon_plus_alt2"></i>
										Cassi
										<br>
										<small>
											A divulgação das substituições ocorridas nos prestadores das redes Cassi e Unimeds (rede indireta) será feita por meio de hiperlink, assim como o determinado pelo Art. 4º da IN DIDES nº 56
										</small>
									</a>
								</h5>
							</div>

							<div id="collapseOne_tips" class="collapse" role="tabpanel" data-parent="#tips">
								<div class="card-body">
									<a href="http://cassi.com.br" target="_blank">Cassi</a>.<br>
									A rede Cassi está disponível no site: <br><a href="http://cassi.com.br" target="_blank">cassi.com.br</a>. <br><br>
									Mais informações <br><a href="http://cassi.com.br" target="_blank">aqui</a>.<br><br><br>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" role="tab">
								<h5 class="mb-0">
									<a class="collapsed" data-toggle="collapse" href="#collapseTwo_tips" aria-expanded="false">
										<i class="indicator icon_plus_alt2"></i>
										Unimed
										<br>
										<small>
											A divulgação das substituições ocorridas nos prestadores das redes Cassi e Unimeds (rede indireta) será feita por meio de hiperlink, assim como o determinado pelo Art. 4º da IN DIDES nº 56
										</small>
									</a>
								</h5>
							</div>
							<div id="collapseTwo_tips" class="collapse" role="tabpanel" data-parent="#tips">
								<div class="card-body">
									<div class="card-body">
										<div class="table-responsive">


											<table class="table table-primary">
												<thead>
													<tr>
														<th>Unidade</th>
														<th>Cidade</th>
														<th>Contrato</th>
														<th>Contato</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Embrapa Acre</td>
														<td>
															<ul>
																<li>Rio Branco - AC</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Agrobiologia</td>
														<td>
															<ul>
																<li>Seropédica - RJ</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Agroindústria Tropical</td>
														<td>
															<ul>
																<li>Fortaleza - CE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Agroindústria Tropical</td>
														<td>
															<ul>
																<li>Rio de Janeiro - RJ</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Agrossilvipastoril</td>
														<td>
															<ul>
																<li>Sinop - MT</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Algodão</td>
														<td>
															<ul>
																<li>Campina Grande - PB</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Amazônia Ocidental</td>
														<td>
															<ul>
																<li>Manaus - AM</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Amazônia Oriental</td>
														<td>
															<ul>
																<li>Belém - PA</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Aquicultura e Sisstemas Agrícolas</td>
														<td>
															<ul>
																<li>Palmas - TO</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Caprinos e Ovinos</td>
														<td>
															<ul>
																<li>Sobral - CE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Clima Temperado</td>
														<td>
															<ul>
																<li>Pelotas - RS</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Cocais</td>
														<td>
															<ul>
																<li>São Luis - MA</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Campina Grande - PB</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Florestas</td>
														<td>
															<ul>
																<li>Colombo - PR</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Gado de Leite</td>
														<td>
															<ul>
																<li>Juiz de fora - MG</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Informática Agropecuária</td>
														<td>
															<ul>
																<li>Campinas - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Instrumentação Agropecuária</td>
														<td>
															<ul>
																<li>São Carlos - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Meio Ambiente</td>
														<td>
															<ul>
																<li>Jaguariúna - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Meio Norte</td>
														<td>
															<ul>
																<li>Teresina - PI</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Monitoramento por Satélite</td>
														<td>
															<ul>
																<li>Campinas - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Pantanal</td>
														<td>
															<ul>
																<li>Corumbá - MS</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Pecuária Sudeste</td>
														<td>
															<ul>
																<li>São Carlos - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Rondônia</td>
														<td>
															<ul>
																<li>Porto Velho - RO</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Semiárido</td>
														<td>
															<ul>
																<li>Petrolina - PE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Solos</td>
														<td>
															<ul>
																<li>Rio de Janeiro - RJ</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Campinas - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Canoinhas - SC</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Imperatriz - MA</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Passo Fundo - RS</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Londrina - PR</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Petrolina - PE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Capão do Leão - RS</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>UEP Recife</td>
														<td>
															<ul>
																<li>Recife - PE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Emepa</td>
														<td>
															<ul>
																<li>João Pessoa - PB</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>ENMPARN</td>
														<td>
															<ul>
																<li>Natal - RN</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Incaper</td>
														<td>
															<ul>
																<li>Vitória - ES</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Epamig</td>
														<td>
															<ul>
																<li>Belo Horizonte - MG</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Ipa</td>
														<td>
															<ul>
																<li>Recife - PE</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>SGTE/CNPTIA</td>
														<td>
															<ul>
																<li>Campinas - SP</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Unidade de Produção</td>
														<td>
															<ul>
																<li>Rondonópolis - MS</li>
															</ul>
														</td>
														<td>Unimed Campinas</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Uva e Vinho</td>
														<td>
															<ul>
																<li>Bento Gonçalves - RS</li>
															</ul>
														</td>
														<td>Unimed Nordeste</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Agropecuária Oeste</td>
														<td>
															<ul>
																<li>---</li>
															</ul>
														</td>
														<td>---</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Escritório de Negócios</td>
														<td>
															<ul>
																<li>Dourados - MS</li>
															</ul>
														</td>
														<td>Unimed Dourados</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Tabuleiros Costeiros</td>
														<td>
															<ul>
																<li>Aracaju – SE</li>
															</ul>
														</td>
														<td>Unimed Maceió</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Suínos e Aves</td>
														<td>
															<ul>
																<li>Concórdia – SC</li>
															</ul>
														</td>
														<td>Unimed Santa Catarina</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Pecuária Sul</td>
														<td>
															<ul>
																<li>Bagé – RS</li>
															</ul>
														</td>
														<td>Unimed Região da Campanha</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Soja</td>
														<td>
															<ul>
																<li>Londrina – PR</li>
															</ul>
														</td>
														<td>Unimed Londrina</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
														</td>
													</tr>
													<tr>
														<td>Embrapa Gado de Corte</td>
														<td>
															<ul>
																<li>Campo Grande – MS</li>
															</ul>
														</td>
														<td>Unimed Campo Grande</td>
														<td>
															<a target="_blank" href="https://www.unimed.coop.br">
																unimed.coop.br
															</a>
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
		<hr>
		<div class="text-center"><a href="{{ route('site.recipient') }}" class="btn_1">Voltar</a></div><br><br>

    </main>
@endsection