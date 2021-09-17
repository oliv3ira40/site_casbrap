@extends('Admin.layout.layout')
@section('title', 'Estatuto Social')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Arquivos para download</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Data de atualização</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-bold">
                                Estatuto Social.pdf
                            </td>
                            <td>
                                15/16/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/estatuto-social-da-caixa-de-assistencia-dos-empregados-da-empresa-brasileira-de-pesquisa-agropecuaria.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
                                    Ler arquivo
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection