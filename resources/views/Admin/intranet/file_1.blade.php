@extends('Admin.layout.layout')
@section('title', 'Regulamento Casembrapa')

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
                                Regulamento Casembrapa.pdf
                            </td>
                            <td>
                                15/06/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/Regulamento_Casembrapa.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
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