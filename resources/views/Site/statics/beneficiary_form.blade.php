@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Formulários Beneficiários
@stop

@section('content')

    <main>
    	<div class="container margin_60_35">
			<div class="main_title">
				<h1>FORMULÁRIOS BENEFICIÁRIOS</h1><hr>
			</div>
			
			<div class="col-md-12" style="">
				<ul>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a1_proposta_de_inscricao-Selo-ANS.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Proposta_de_Inscricao', 'value': 1});"><i class="icon-doc-text"></i> Proposta de Inscrição</a>
						- <a href="{{ asset('pages/beneficiary_form/a1_proposta_de_inscricao-Selo-ANS.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a2_inclusao_exclusao_dependentes-Selo-ANS.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Inclusao_ou_exclusao_de_Dependentes', 'value': 1});"><i class="icon-doc-text"></i> Inclusão ou Exclusão de Dependentes</a>
						- <a href="{{ asset('pages/beneficiary_form/a2_inclusao_exclusao_dependentes-Selo-ANS.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/CASEMBRAPA_REEMBOLSO_2020.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Solicitacao_de_reembolso_de_despesas', 'value': 1});"><i class="icon-doc-text"></i> Solicitação de Reembolso de Despesas</a>
						- <a href="{{ asset('pages/beneficiary_form/CASEMBRAPA_REEMBOLSO_2020.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a4_solicitacao_de_desligamento_do_pam_2016.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Solicitacao_de_desligamento', 'value': 1});"><i class="icon-doc-text"></i> Solicitacao de Desligamento do PAM</a>
						- <a href="{{ asset('pages/beneficiary_form/a4_solicitacao_de_desligamento_do_pam_2016.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/Autorizacao-de-Desconto-CERES-agosto-2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Autorizacao_dE_desconto_CERES', 'value': 1});"><i class="icon-doc-text"></i> Autorização de Desconto CERES</a>
						- <a href="{{ asset('pages/beneficiary_form/Autorizacao-de-Desconto-CERES-agosto-2019.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a7_declaracao_de_conhecimento_sobre_procedimentos_de_laqueadura_e_vasectomia.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Dec_Conhecimento_laqueadura_vasectomia', 'value': 1});"><i class="icon-doc-text"></i> Declaração de Conhecimento sobre Procedimentos de Laqueadura e Vasectomia</a>
						- <a href="{{ asset('pages/beneficiary_form/a7_declaracao_de_conhecimento_sobre_procedimentos_de_laqueadura_e_vasectomia.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/Termo_Opcao_Aposentado_2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_Termo_opcao_aposentado', 'value': 1});"><i class="icon-doc-text"></i> Termo Opção Aposentado</a>
						- <a href="{{ asset('pages/beneficiary_form/Termo_Opcao_Aposentado_2019.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/Termo-de-Compromisso-para-Dependentes-Maiores-de-21-2017.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_compromisso_dependentes_maior_21', 'value': 1});"><i class="icon-doc-text"></i> Termo de Compromisso para Dependentes Maiores de 21</a>
						- <a href="{{ asset('pages/beneficiary_form/Termo-de-Compromisso-para-Dependentes-Maiores-de-21-2017.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a9_termo_opcao_demitido_sem_justa_causa_2020_v2.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_termo_opcao_demitido_sem_justa_causa', 'value': 1});"><i class="icon-doc-text"></i> Termo opção Demitido sem Justa Causa</a>
						- <a href="{{ asset('pages/beneficiary_form/a9_termo_opcao_demitido_sem_justa_causa_2020_v2.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a11_Formulario-de-atualizacao-cadastral_2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_form_atualizacao_cadastral', 'value': 1});"><i class="icon-doc-text"></i> Formulário de Atualização Cadastral</a>
						- <a href="{{ asset('pages/beneficiary_form/a11_Formulario-de-atualizacao-cadastral_2019.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/a12_formulario_de_reinscricao-Selo-ANS.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_form_reinscricao', 'value': 1});"><i class="icon-doc-text"></i> Formulário de Reinscrição</a>
						- <a href="{{ asset('pages/beneficiary_form/a12_formulario_de_reinscricao-Selo-ANS.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/termo-de-permanencia-contrato-suspenso_2020_v2.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'PDF_termo_de_permanencia_contrato-suspenso', 'value': 1});"><i class="icon-doc-text"></i> Termo de Permanência Contrato Suspenso </a>
						- <a href="{{ asset('pages/beneficiary_form/termo-de-permanencia-contrato-suspenso_2020_v2.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
					<li>
						<a href="{{ asset('pages/beneficiary_form/Termo-de-Opcao-de-Permanencia-PDI-julho-2019.pdf') }}" target="_blank" onclick="gtag('event', 'Baixar',{'event_category': 'Formulários Cadastrais', 'event_label': 'Termo-de-Opcao-de-Permanencia-PDI', 'value': 1});"><i class="icon-doc-text"></i> Termo de Opção de Permanência PDI</a>
						- <a href="{{ asset('pages/beneficiary_form/Termo-de-Opcao-de-Permanencia-PDI-julho-2019.pdf') }}" download>
							<i class="fa fa-download"></i>
						</a>
					</li>
				</ul>
			</div>

			<div class="text-center">
				<a href="{{ route('site.recipient') }}" class="btn_1 medium border-r-0">Voltar</a>
			</div>
	   </div>
    </main>
@endsection
























