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
				<div class="main_title">
					<h2>Lorem Ipsum is simply</h2>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-12 custom-main_title">
						<p align="justify">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
                    <h4 class="nomargin_top">Lorem Ipsum is simply</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="payment">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#ex_1" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>Lorem Ipsum is simply
                                    </a>
                                </h5>
                            </div>
                            <div id="ex_1" class="collapse" role="tabpanel" data-parent="#payment">
                                <div class="card-body">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#ex_2" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>Lorem Ipsum is simply
                                    </a>
                                </h5>
                            </div>
                            <div id="ex_2" class="collapse" role="tabpanel" data-parent="#payment">
                                <div class="card-body">
                                    <iframe src="https://docs.google.com/gview?url=https://casembrapa.com.br/public/pages/lgpd/POLITICA_DE_PRIVACIDADE_BENEFICIARIO.pdf&embedded=true" style="width: 100%; height: 500px;" frameborder="0"></iframe>
                                    {{-- <embed src="{{ asset('pages/lgpd/POLITICA_DE_COOKIES_Casembrapa.pdf') }}" width="100" height="600" class="p-b-20" type="application/pdf"> --}}
                                    {{-- <embed src="https://drive.google.com/viewerng/viewer?embedded=true&url=https://casembrapa.com.br/public/pages/lgpd/POLITICA_DE_PRIVACIDADE_BENEFICIARIO.pdf" width="500" height="375" type="application/pdf"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection