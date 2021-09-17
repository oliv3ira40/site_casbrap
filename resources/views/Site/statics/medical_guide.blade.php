@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Guia Médico
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
					<h2>Guia Médico</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<p align="center">
							Links associações e cooperativas. <br>
							Para consultas no Guia Médico, clique no
							<strong>
								<a href="http://galenus.casembrapa.org.br/galenus/portal.html">
									Guia Médico
								</a>
							</strong>
							abaixo.
						</p>
					</div>
				</div>
			</div>

			<div class="container margin_60_35">
				
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<div class="row">
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://galenus.casembrapa.org.br/galenus/portal.html" target="_blank"><img src="{{ asset('pages/medical_guide/guia-medico.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										
										<a href="http://galenus.casembrapa.org.br/galenus/portal.html" target="_blank"><CENTER><h3>GUIA MÉDICO</h3></CENTER></a>
										
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://amaibsb.com.br/" target="_blank"><img src="{{ asset('pages/medical_guide/amai.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<a href="http://amaibsb.com.br/" target="_blank" target="_blank"><CENTER><h3>AMAI</h3></CENTER></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="https://www.amhp.com.br/" target="_blank"><img src="{{ asset('pages/medical_guide/amhp.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<a href="https://www.amhp.com.br/" target="_blank"><CENTER><h3>AMHP</h3></CENTER></a>
									</div></div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://www.coego.com.br/" target="_blank"><img src="{{ asset('pages/medical_guide/coego.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<a href="http://www.coego.com.br/" target="_blank"><CENTER><h3>COEGO</h3></CENTER></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="container margin_60_35">
				
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<div class="row">
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://www.comego.com.br/" target="_blank"><img src="{{ asset('pages/medical_guide/comego.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
									<a href="http://www.comego.com.br/" target="_blank"><CENTER><h3>COMEGO</h3></CENTER></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="https://www.coopercon.coop.br/" target="_blank"><img src="{{ asset('pages/medical_guide/coopercon.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
									<a href="https://www.coopercon.coop.br/" target="_blank"><CENTER><h3>COOPERCON</h3></CENTER></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://www.goianiaclinica.com.br/" target="_blank"><img src="{{ asset('pages/medical_guide/goiania-clinica.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
									<a href="http://www.goianiaclinica.com.br/" target="_blank"><CENTER><h3>GOIÂNIA CLÍNICA</h3></CENTER></a>
									</div></div>
							</div>
							<div class="col-md-3">
								<div class="box_list wow fadeIn">
									<figure>
										<a href="http://www.sancoop.com.br/"><img src="{{ asset('pages/medical_guide/sancoop.png') }}" class="img-fluid" alt=""></a>
									</figure>
									<div class="wrapper card-members">
										<a href="http://www.sancoop.com.br/" target="_blank"><CENTER><h3>SANCOOP</h3></CENTER></a>
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