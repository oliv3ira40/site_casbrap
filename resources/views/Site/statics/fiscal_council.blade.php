@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Conselho Fiscal
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
					<h2>Conselho Fiscal</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<p align="justify">
							O Conselho Fiscal é responsável por zelar pela gestão econômico-financeira do plano de saúde. Ele é composto por quatro membros titulares e quatro membros suplentes, sendo que, dentre os titulares, dois representam os trabalhadores e dois a patrocinadora.
						</p>
					</div>
				</div>
			</div>

			<div class="container margin_60_35">
				<div class="main_title">
					<h2>Membros Titulares</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<div class="row">
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<small>Presidente</small>
										<h3>PAULO RIBEIRO RANGEL</h3>
										<p>Embrapa</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<small>&nbsp;</small>
										<h3>ALLAN CASTRO MORAES	</h3>
										<p>Embrapa</p>
									</div></div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<small>&nbsp;</small>
										<h3>JUCIMAR BARBOSA</h3>
										<p>FAEE</p>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<small>&nbsp;</small>
										<h3>JOSÉ FERREIRA</h3>
										<p>SINPAF</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container margin_60_35">
				<div class="main_title">
					<h2>Membros Suplentes</h2>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="#"><img src="{{ asset('pages/administrative_council/avatar-man.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<small>&nbsp;</small>
										<h3>AMÂNCIO DIAS DAS CHAGAS</h3>
										<p>EMBRAPA</p>
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