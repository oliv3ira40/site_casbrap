        <!-- /header -->
        <header class="header_sticky custom-header">
            
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>

            @if (\Auth::user())
                @if (HelpAdmin::IsUserDeveloper() OR
                    HelpAdmin::IsUserAdministrator() OR
                    HelpAdmin::IsUserCollaborator()
                )
                @endif
            @endif
            <div style="height: 35px" class="sub-menu sub-menu-custom">
                <div class="container">
                    <ul class="ul-sub-menu-custom" style="display: inline-flex; margin-bottom: 0px; float: right;">
                        
                        <li class="btn-sub-menu">
                            <a href="{{ route('site.recipient') }}">
                                Área do Beneficiário  |
                            </a>
                        </li>
                        <li class="btn-sub-menu">
                            <a href="{{ route('site.accreditation') }}">
                                Área do Credenciado
                            </a>
                        </li>
                        @if (!\Auth::user() AND Session::has('temporary_user'))
                            <li class="btn-sub-menu">
                                <a href="{{ route('site.logout') }}">
                                    {{ HelpSite::firstAndLastName() }} - Sair
                                </a>
                            </li>
                        @elseif (!\Auth::user())
                        @else
                            <li class="btn-sub-menu">
                                <a href="#">
                                    -
                                </a>
                            </li>
                            @if (in_array('adm.index', HelpAdmin::permissionsUser()))
                                <li class="btn-sub-menu">
                                    <a href="{{ route('adm.index') }}">
                                        @if (HelpAdmin::IsUserDeveloper())
                                            ADM
                                        @elseif (HelpAdmin::IsUserAdministrator())
                                            Painel do administrador
                                        @elseif (HelpAdmin::IsUserCollaborator())
                                            Painel do colaborador
                                        @else
                                        @endif
                                    </a>
                                </li>
                            @endif
                            <li class="btn-sub-menu">
                                <a href="{{ route('site.logout') }}">
                                    Sair
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            
            <div class="container menu-site">
                <div class="row" style="margin: 0px 0px">
                    <div class="col-md-3">
                        <div class="">
                            <h1 style="margin-bottom: 0px;">
                                <a href="{{ route('site.index') }}" title="{{ HelpApplicationSetting::getAppName()->app_name }}">
                                    @if (HelpAppearanceSetting::getLogoWhiteBackground())
                                        <img class="logo-site" src="{{ asset(HelpAdmin::getStorageUrl().HelpAppearanceSetting::getLogoWhiteBackground()->logo_for_white_background) }}" alt="logomarca">
                                    @else
                                        ??
                                    @endif
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <nav id="menu" class="main-menu" style="width: 100%;">
                            <ul class="ul_menu_site" style="width: 100%;">
                                @foreach (HelpMenus::TopMenu() as $item)
                                    <li class="default_li li_menu_site">
                                        <span>
                                            <a class="a-menu-site {{ $item['class'] }}" id="{{ $item['id'] }}" href="{{ ($item['url'] != '#') ? HelpAdmin::treatsRouteUrl($item['url']) : '#' }}">
                                                {{ $item['label'] }}
                                                @if ($item['i'] != '#')
                                                    <i class="{{ $item['i'] }}"></i>
                                                @endif
                                            </a>
                                        </span>

                                        @if (isset($item['sub_menu']))
                                            <ul class="ul-menu-site">
                                                @foreach ($item['sub_menu'] as $sub_item)
                                                    <li class="li_menu_site">
                                                        @if ($sub_item['file'] != '#')
                                                            <a class="a-menu-site" target="{{ $sub_item['target'] }}" href="{{ asset($sub_item['file']) }}">
                                                                {{ $sub_item['label'] }}
                                                            </a>
                                                        @else
                                                            <a class="a-menu-site" target="{{ $sub_item['target'] }}" href="{{ ($sub_item['url'] != '#') ? HelpAdmin::treatsRouteUrl($sub_item['url']) : '#' }}">
                                                                {{ $sub_item['label'] }}
                                                            </a>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach

                                <li id="menu_search" class="hide" style="width: 90%; top: -12px;">
                                    {!! Form::open(['url'=>route('site.posts.list'), 'id'=>'form_menu_search']) !!}
                                        <div class="search_bar_list">
            								{!! Form::text('search', null, ['class'=>'form-control', 'placeholder'=>'Ex: Guia médico, Casembrapa informa, Calendário da saúde', 'style'=>'height: 40px; border: solid 1px #1ab892;']) !!}
                                            <input type="submit" value="Buscar" style="height: 40px; background-color: #1ab892;">
                                        </div>
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </nav>
                        <!-- /main-menu -->
                    </div>
                </div>
            </div>

        </header>
            <div class="bg_color_1 pt-0">
                <div class="row">
                    <div class="col-md-12 div_call_center">
                        <img style="width: 100%" src="{{ asset('pages/home/central-de-atendimento.png') }}" alt="central-de-atendimento">
                    </div>
                </div>
            </div>
        <!-- /header -->