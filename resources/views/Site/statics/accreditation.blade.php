
@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Credenciado
@stop

@section('content')
    <main>
		
		<!-- /breadcrumb -->
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
				<aside class="col-lg-4" id="sidebar">
						<div class="box_style_cat" id="faq_box">
							<ul id="cat_nav">
								<li><a href="#home" class="active"><i class="icon-home"></i>HOME</a></li>
								<li><a href="#acesso-sistemas"><i class="icon-laptop"></i>ACESSO AOS SISTEMAS</a></li>
								<li><a href="#manuais"><i class="icon-doc-inv"></i>MANUAIS DE UTILIZAÇÃO</a></li>
								<li><a href="#suporte"><i class=" icon-cog-alt"></i>SUPORTE DOS SISTEMAS</a></li>
								<li><a href="#atualizacao"><i class="icon-arrows-cw"></i>ATUALIZAÇÃO DE CADASTRO</a></li>
								<li><a href="#calendario"><i class="icon-calendar"></i>CALENDÁRIO DE ENTREGA</a></li>
								<li><a href="#central-de-atendimento"><i class="icon-chat-empty"></i>CENTRAL DE ATENDIMENTO</a></li>
								<li><a href="{{ asset('pages/accreditation/PROCEDIMENTOS_QUE_EXIGEM_AUTORIZACAO_PREVIA.pdf') }}" target="_blank"><i class="icon-thumbs-up-alt"></i>PROCEDIMENTOS QUE PRECISAM DE AUTORIZAÇÃO PRÉVIA</a></li>
								<li><a href="https://www.ans.gov.br/arquivos/assuntos/prestadores/padrao-para-troca-de-informacao-de-saude-suplementar-tiss/padrao-tiss/Padrao_TISS_Representacao_de_Conceitos_em%20Saude_202106.zip" target="_blank"><i class="icon-doc-inv"></i>PADRÃO TISS - VERSÃO VIGENTE</a></li>
								<li>
									<a href="{{ route('site.posts.list', ['tag_post_id'=>2]) }}" target="_blank">
										<i class="icon-docs"></i>
										COMUNICADOS
									</a>
								</li>
							</ul>
						</div>
						<!--/sticky -->
				</aside>
				<!--/aside -->
				
				<div class="col-lg-8" id="faq">
					{{-- Prezados prestadores credenciados, --}}
					<div class="row" id="home">
						<div class="col-md-12">
							<div role="tablist" class="add_bottom_45 accordion">
								<h3>
									Prezados prestadores credenciados,
								</h3>
								
								<p align="justify">
									Confira abaixo o cronograma de entrega das faturas físicas e eletrônicas, para o ano de 2021:<br><br>
									<img width="100%" align="center" src="https://www.casembrapa.com.br/public/pages/accreditation/cronograma-de-entrega-de-faturas-ano-2021.png">

								</p>
								<p align="justify">
									<strong>A entrega deve ocorrer sempre no período entre o 1º e o 3º dia útil de cada mês, impreterivelmente.</strong> Lembramos que, ultrapassada a data estipulada, a apresentação das faturas passará para o mês subsequente. Os pagamentos são creditados todo dia 10 do mês seguinte.
								</p>
								<h3>
									PRESTADOR DO DF
								</h3>
								<p align="justify">
									
									Confira abaixo o cronograma de recebimento de faturas:<br><br>
									<img width="100%" align="center" src="https://www.casembrapa.com.br/public/pages/accreditation/cronograma-de-entrega-de-faturas-ano-2021_DF.png">

								</p>
								<p align="justify">
								<strong>Informamos que não serão aceitas faturas recebidas fora do prazo.</strong><br>

								Acesse <a href="https://casembrapa.com.br/public/pages/accreditation/cronograma-de-entrega-de-faturas-ano-2021.pdf">aqui </a> o calendário completo.

								</p>
								
								<p align="justify">
									Agradecemos pelos serviços dispensados ao nosso plano e colocamo-nos à disposição para mais esclarecimentos. Entre em contato conosco por e-mail: <a href="mailto:contasmedicas@casembrapa.org.br">contasmedicas@casembrapa.org.br</a> ou <a href="mailto:credenciamento@casembrapa.org.br">credenciamento@casembrapa.org.br</a>. A comunicação também pode ser feita pelos telefones (61) 3181-0010, opção 2 (para quem é do Distrito Federal) e 0800-940-5560, opção 2 (para quem está fora do DF).
								</p>
								<p align="justify">
									Atenciosamente,
								</p>
								<p align="justify">
									<b>Diretoria Executiva</b>
								</p>
							</div>
						</div>
					</div>
				
					<hr>
					{{-- ACESSO AOS SISTEMAS --}}
					<div class="row" id="acesso-sistemas">
						<div class="col md-12">
							<h4 class="nomargin_top">ACESSO AOS SISTEMAS</h4>
							<div role="tablist" class="add_bottom_45 accordion">
								<p align="justify">
									Clique nos ícones
								</p>
			
								<div class="row">
									<div class="col-lg-12">
										<div class="strip_list wow fadeIn">
											<a href="http://autorizadorweb.startiss.com.br/Login.aspx?AspxAutoDetectCookieSupport=1" target="_blank">
												<h3>
													<i class="icon-ok"></i>
													Autorizador Star TISS
												</h3>
											</a>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="strip_list wow fadeIn">
											<a href="http://www.startiss.com.br/portal/loginV2.aspx" target="_blank">
												<h3>
													<i class="icon-arrows-cw"></i>
													Faturamento
												</h3>
											</a>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="strip_list wow fadeIn">
											<a href="http://galenus.casembrapa.org.br/" target="_blank">
												<h3>
													<i class="icon-users"></i>
													Auditoria Médica Galenus
												</h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>
					{{-- MANUAIS DE UTILIZAÇÃO DOS SERVIÇOS --}}
					<div class="row" id="manuais">
						<div class="col-md-12">
							<h4 class="nomargin_top">
								MANUAIS DE UTILIZAÇÃO DOS SERVIÇOS
							</h4>
							<p>
								<strong>
									Clique no link para abrir o manual desejado.
								</strong>
							</p>
							<div role="tablist" class="add_bottom_45 accordion">
								<ul class="list-marked">
									<li class="icon-doc-text-inv">
										<a href="{{ asset('pages/accreditation/Manual_do_Autorizador_Web_StarTISS.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Manuais de Utilização dos Serviços', 'event_label': 'PDF_Autorizador_StarTiss', 'value': 1});">
											Manual do Autorizador Star TISS
										</a>
									</li>
									<li class="icon-doc-text-inv">
										<a href="{{ asset('pages/accreditation/Manual_PortalUpload.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Manuais de Utilização dos Serviços', 'event_label': 'PDF_Importacao_XML', 'value': 1});">
											Manual de importação do XML (Faturamento)
										</a>
									</li>
									<li class="icon-doc-text-inv">
										<a href="{{ asset('pages/accreditation/Manual_AP_ContaWeb.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Manuais de Utilização dos Serviços', 'event_label': 'PDF_Digitacao_guias', 'value': 1});">
											Manual de digitação de guias (Faturamento)
										</a>
									</li>
									<li class="icon-doc-text-inv">
										<a href="{{ asset('pages/accreditation/Manual_Auditoria_Virtual.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Manuais de Utilização dos Serviços', 'event_label': 'PDF_Auditoria_Virtual', 'value': 1});">
											Manual da Auditoria Virtual (Auditoria Médica Galenus)
										</a>
									</li>
									<li class="icon-doc-text-inv">
										<a href="{{ asset('pages/accreditation/Manual_Auditoria_hemodialise_e_oncologia.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Manuais de Utilização dos Serviços', 'event_label': 'PDF_Auditoria_Medica_Galenos', 'value': 1});">
											Hemodiálise e Oncologia(Auditoria Médica Galenus)
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<hr>
					{{-- SUPORTE DOS SISTEMAS --}}
					<div class="row" id="suporte">
						<div class="col-md-12">
							<h4 class="nomargin_top">
								SUPORTE DOS SISTEMAS
							</h4>
							
							<div role="tablist" class="add_bottom_45 accordion">
								<div class="row">
									<div class="col-md-12">
										<div class="strip_list wow fadeIn">
											<h3>
												<i class="icon-ok"></i>
												Autorizador Web e Faturamento Star TISS
											</h3><br>
		
											<left>
												<strong>
													<a href="tel:2731497001">
														(27) 3149 7001 opção 1
													</a>
												</strong>
											</left>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="strip_list wow fadeIn">
											<h3>
												<i class="icon-arrows-cw"></i>
												Suporte Central de Autorização
											</h3><br>
		
											<left>
												<strong>
													<a href="tel:6131810010">
														(61) 3181-0010 opção 2 | opção 3
													</a>
												</strong>
											</left>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr>
					{{-- ATUALIZAÇÃO CADASTRAL --}}
					<div class="row" id="atualizacao">
						<div class="col-md-12">
							<h4 class="nomargin_top">
								ATUALIZAÇÃO CADASTRAL
							</h4>
							<div role="tablist" class="add_bottom_45 accordion">
								<p>
									Mantenha seus dados atualizados e facilite seu dia a dia.
								</p> 
								<p>
									<strong>
										Dúvidas?
									</strong>
									<br>
									<i class="icon-phone-squared"></i>  (61) 3181-0010 opção 2 <br>
									<a href="mailto:credenciamento@casembrapa.org.br">
										<i class="icon-mail-alt"></i>
										credenciamento@casembrapa.org.br
									</a>
								</p>
		
								{!! Form::open(['url'=>route('site.cadastral_update.send'), 'id'=>'contactform']) !!}
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="company_name">Razão Social</label>
												{!! Form::text('company_name', null, ['class'=>'form-control', 'id'=>'company_name']) !!}
												@if ($errors->has('company_name'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('company_name') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="fantasy_name">Nome Fantasia</label>
												{!! Form::text('fantasy_name', null, ['class'=>'form-control', 'id'=>'fantasy_name']) !!}
												@if ($errors->has('fantasy_name'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('fantasy_name') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="cpf_or_cnpj">CPF ou CNPJ</label>
												{!! Form::text('cpf_or_cnpj', null, ['class'=>'form-control', 'id'=>'cpf_or_cnpj']) !!}
												@if ($errors->has('cpf_or_cnpj'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('cpf_or_cnpj') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="address">Endereço</label>
												{!! Form::text('address', null, ['class'=>'form-control', 'id'=>'address']) !!}
												@if ($errors->has('address'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('address') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="email">E-mail</label>
												{!! Form::email('email', null, ['class'=>'form-control', 'id'=>'email']) !!}
												@if ($errors->has('email'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('email') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="telephone">Telefone</label>
												{!! Form::text('telephone', null, ['class'=>'form-control', 'id'=>'telephone']) !!}
												@if ($errors->has('telephone'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('telephone') }}
													</small>
												@endif
											</div>
										</div>
									</div>
		
									{{-- recaptcha --}}
									<div class="row">
										<div class="col-md-12">
											<div class="g-recaptcha" data-sitekey="{{ HelpSite::getSiteKayRecaptcha() }}"></div>
											@if ($errors->has('g-recaptcha-response'))
												<small class="pl-0 text-danger txt-trans-initial font-12">
													{{ $errors->first('g-recaptcha-response') }}
												</small>
											@endif
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Enviar" class="btn_1 btn-block medium border-r-0 add_top_20" id="submit-contact">
										</div>
									</div>
								{!! Form::close() !!}					
							</div>
						</div>
					</div>
					
					<hr>
					{{-- CALENDÁRIO DE ENTREGA --}}
					<div class="row" id="calendario">
						<div class="col-md-12">
							<h4 class="nomargin_top">CALENDÁRIO DE ENTREGA</h4>
							<div role="tablist" class="add_bottom_45 accordion">
								<strong>
									Envio de correspondência:
								</strong>
								<br>
								Caixa Postal 10811, CEP 70306-970<br><br>
		
								<strong>
									Endereço para entrega presencial:
								</strong><br>
								PqEB - Av. W3 Norte (Final) S/N. Prédio da Casembrapa. Brasília-DF
								<br><br>
		
								<div class="text-CENTER">
									<a href="{{ asset('pages/accreditation/cronograma-de-entrega-de-faturas-ano-2021.pdf') }}" target="_blank" class="btn_1 border-r-0">
										<i class="icon-calendar"></i>
										BAIXAR CALENDÁRIO 2021
									</a>
								</div>
							</div>
						</div>
					</div>

					<hr>
					{{-- CENTRAL DE ATENDIMENTO --}}
					<div class="row" id="central-de-atendimento">
						<div class="col-md-12">
							<h4 class="nomargin_top">CENTRAL DE ATENDIMENTO</h4>
							<div role="tablist" class="add_bottom_45 accordion">
								<p align="justify">
									Esse canal foi pensado especialmente para você, prestador de saúde credenciado à Casembrapa, obter informações sobre credenciamento, faturamento, autorização e muito mais.
								</p>
								
								{!! Form::open(['url'=>route('site.contact_form_2.send'), 'id'=>'contact_form2']) !!}
									<div class="row">
										<div class="col-md-6">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[name]">Nome</label>
												{!! Form::text('contact_form2[name]', null, ['class'=>'form-control', 'id'=>'contact_form2[name]']) !!}
												@if ($errors->has('contact_form2.name'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.name') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[telephone]">Telefone</label>
												{!! Form::text('contact_form2[telephone]', null, ['class'=>'form-control', 'id'=>'contact_form2[telephone]']) !!}
												@if ($errors->has('contact_form2.telephone'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.telephone') }}
													</small>
												@endif
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[cpf_or_cnpj]">CPF / CNPJ</label>
												{!! Form::text('contact_form2[cpf_or_cnpj]', null, ['class'=>'form-control', 'id'=>'contact_form2[cpf_or_cnpj]']) !!}
												@if ($errors->has('contact_form2.cpf_or_cnpj'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.cpf_or_cnpj') }}
													</small>
												@endif
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[subject]">Assunto</label>
												{!! Form::select('contact_form2[subject]', [
													'null'=>'Selecione...',
													'Credenciamento'=>'Credenciamento',
													'Faturamento'=>'Faturamento',
													'Autorização'=>'Autorização',
												], 'null', ['id'=>'contact_form2[subject]', 'class'=>'form-control']) !!}
												@if ($errors->has('contact_form2.subject'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.subject') }}
													</small>
												@endif
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[message]">Mensagem</label>
												{!! Form::textarea('contact_form2[message]', null, ['class'=>'form-control', 'id'=>'contact_form2[message]', 'rows'=>'5', 'style'=>'height:100px;']) !!}
												@if ($errors->has('contact_form2.message'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.message') }}
													</small>
												@endif
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group m-b-10">
												<label class="mb-0" for="contact_form2[email]">E-mail</label>
												{!! Form::email('contact_form2[email]', null, ['class'=>'form-control', 'id'=>'contact_form2[email]']) !!}
												@if ($errors->has('contact_form2.email'))
													<small class="pl-0 text-danger txt-trans-initial font-12">
														{{ $errors->first('contact_form2.email') }}
													</small>
												@endif
											</div>
										</div>
									</div>

									{{-- recaptcha --}}
									<div class="row">
										<div class="col-md-12">
											<div class="g-recaptcha" data-sitekey="{{ HelpSite::getSiteKayRecaptcha() }}"></div>
											@if ($errors->has('g-recaptcha-response'))
												<small class="pl-0 text-danger txt-trans-initial font-12">
													{{ $errors->first('g-recaptcha-response') }}
												</small>
											@endif
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Enviar Mensagem" class="btn_1 btn-block medium border-r-0 add_top_20" id="submit-contact">
										</div>
									</div>
								{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </main>
@endsection