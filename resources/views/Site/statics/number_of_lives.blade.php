@extends('Site.layout.layout')
@section('title')
    @if (HelpApplicationSetting::getAppName())
        {{ HelpApplicationSetting::getAppName()->app_name }}
    @endif
    - Números de Vidas
@stop

@section('content')
    <main>
    
        <div class="bg_color_1">
			<div class="container margin_60_35">
    	        <iframe width="100%" height="400" src="https://app.powerbi.com/view?r=eyJrIjoiODMwZWI2NjUtZDIzZi00ODFmLWFkMjctNDk1ZWI3NGJkYWIwIiwidCI6IjFmYjgxNWRkLTc3ZDMtNGVhMi1iMjZlLTQ3NTdkNzIyMWI0YSJ9&pageName=ReportSectione461c20d263b78ad0cb8" frameborder="0" allowFullScreen="true"></iframe>
            </div>
        </div>
    </main>
@endsection