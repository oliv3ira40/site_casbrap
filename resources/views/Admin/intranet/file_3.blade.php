@extends('Admin.layout.layout')
@section('title', 'Quadro Pessoal')

@section('content')
    <style>
        .img_file {
            height: 120px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>

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
                                E-mail.pdf
                            </td>
                            <td>
                                15/16/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/Quadro Pessoal/E-mail.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
                                    Ler arquivo
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">
                                QTD SETOR.pdf
                            </td>
                            <td>
                                15/16/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/Quadro Pessoal/QTD SETOR.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
                                    Ler arquivo
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">
                                Quadro Pessoal.pdf
                            </td>
                            <td>
                                15/16/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/Quadro Pessoal/Quadro Pessoal.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
                                    Ler arquivo
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">
                                Supervisor.pdf
                            </td>
                            <td>
                                15/16/2021
                            </td>
                            <td>
                                <a href="{{ asset('pages/admin/intranet/Quadro Pessoal/Supervisor.pdf') }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">
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