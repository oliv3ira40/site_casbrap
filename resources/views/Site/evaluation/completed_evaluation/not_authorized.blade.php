@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Votação não disponível
@stop

@section('content')
    <main>

        <div style="padding-top: 160px; padding-bottom: 160px;" class="container margin_120">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="confirm">
                        <div class="icon icon--order-warning svg add_bottom_15">
                            <i style="font-size: 80px;" class="pe-7s-info text-warning"></i>
                        </div>
                        <h2>Votação não disponível</h2>
                        @if (Session::has('reason'))
                            <p>
                                {{ Session::get('reason') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection