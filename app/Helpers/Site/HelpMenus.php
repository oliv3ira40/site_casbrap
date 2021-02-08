<?php

	namespace App\Helpers\Site;

	/**
	* HelpMenus
	*/
	class HelpMenus
	{
		public static function TopMenu()
		{
			$action = \Request::route()->action['as'] ?? '';
			$auth_user = \Auth::user();

            return [
                // Página Inicial
                [
                    'permission'=>'#',          // permission or #
                    'label'=>'Página Inicial',  // name or ''
                    'url'=>'site.index',        // route or #
                    'file'=>'#',                // path or #
                    'target'=>'',               // target or ''
                    'id'=>'',                   // id or ''
                    'class'=>'',                // class or ''
                    'i' => '#',                  // class or #
                ],
                // // Telemedicina
                // [
                //     'permission'=>'#',
                //     'label'=>'Telemedicina',
                //     'url'=>'site.posts.list',
                //     'file'=>'#',
                //     'target'=>'',
                //     'id'=>'',
                //     'class'=>'',
                //     'i' => '#',
                // ],
                // Notícias
                [
                    'permission'=>'#',
                    'label'=>'Notícias',
                    'url'=>'site.posts.list',
                    'file'=>'#',
                    'target'=>'',
                    'id'=>'',
                    'class'=>'',
                    'i' => '#',
                ],
                // Área Institucional
                [
                    'permission'=>'#',
                    'label'=>'Área Institucional',
                    'url'=>'#',
                    'file'=>'#',
                    'target'=>'',
                    'id'=>'',
                    'class'=>'',
                    'i' => '#',

                    'sub_menu' => [
                        [
                            'permission'=>'#',
                            'label'=>'Missão, visão e valores',
                            'url'=>'site.about',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Estatuto',
                            'url'=>'#',
                            'file'=>'pages/statute/estatuto-social-da-caixa-de-assistencia-dos-empregados-da-empresa-brasileira-de-pesquisa-agropecuaria.pdf',
                            'target'=>'_blank',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Regulamento',
                            'url'=>'#',
                            'file'=>'pages/regulation/regulamento-casembrapa.pdf',
                            'target'=>'_blank',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'LGPD',
                            'url'=>'site.lgpd',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Conselho de Administração',
                            'url'=>'site.administrative_council',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Conselho Fiscal',
                            'url'=>'site.fiscal_council',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Diretoria executiva',
                            'url'=>'site.executive_board',
                            'file'=>'#',
                            'target'=>'',
                        ],
                    ],
                ],
                // Transparência
                [
                    'permission'=>'#',
                    'label'=>'Transparência',
                    'url'=>'#',
                    'file'=>'#',
                    'target'=>'',
                    'id'=>'',
                    'class'=>'',
                    'i' => '#',

                    'sub_menu' => [
                        [
                            'permission'=>'#',
                            'label'=>'Relatório de Gestão',
                            'url'=>'site.management_report',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Demonstrativos Financeiros',
                            'url'=>'site.financial_statement',
                            'file'=>'#',
                            'target'=>'',
                        ],
                    ],
                ],
                // Fale Conosco
                [
                    'permission'=>'#',
                    'label'=>'Fale Conosco',
                    'url'=>'#',
                    'file'=>'#',
                    'target'=>'',
                    'id'=>'',
                    'class'=>'',
                    'i' => '#',
                    
                    'sub_menu' => [
                        [
                            'permission'=>'#',
                            'label'=>'Beneficiários',
                            'url'=>'site.recipient',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Credenciado',
                            'url'=>'site.accreditation',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Ouvidoria',
                            'url'=>'site.ombudsman',
                            'file'=>'#',
                            'target'=>'',
                        ],
                        [
                            'permission'=>'#',
                            'label'=>'Central de atendimento',
                            'url'=>'site.call_center',
                            'file'=>'#',
                            'target'=>'',
                        ],
                    ],
                ],
                // Buscar
                [
                    'permission'=>'#',
                    'label'=>'Buscar',
                    'url'=>'#',
                    'file'=>'#',
                    'target'=>'',
                    'id'=>'btn_search',
                    'class'=>'text-primary',
                    'i' => 'fa fa-search font-18 p-l-5 icon_search_menu_site',
                ],
            ];
		}
	}