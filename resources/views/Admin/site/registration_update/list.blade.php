@extends('Admin.layout.layout')
@section('title', 'Lista de atualizações cadastrais')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                {!! Form::model($filters, ['url' => route('adm.registration_update.list')]) !!}
                    <div class="form-group">
                        <label for="search">
                            Buscar atualização cadastral
                        </label>
                        {!! Form::text('search', null, ['id'=>'search', 'class'=>'form-control']) !!}
                    </div>
                {!! Form::close() !!}
                @if (isset($filters['search']) AND $filters['search'] != null)
                    Notícia encontradas:
                    {{ $data['post']->total() }}
                    <br>
                    <a href="{{ route('adm.registration_update.list') }}">
                        <strong>
                            Remover filtro
                        </strong>
                    </a>
                    <hr class="m-b-10">
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Usuário
                            </th>
                            <th>
                                CPF
                            </th>
                            <th>
                                Matricula
                            </th>
                            <th>
                                CEP
                            </th>
                            <th>
                                País
                            </th>
                            <th>
                                Uf
                            </th>
                            <th>
                                Cidade
                            </th>
                            <th>
                                Bairro
                            </th>
                            <th>
                                Tipo logradouro
                            </th>
                            <th>
                                Logradouro
                            </th>
                            <th>
                                Número
                            </th>
                            <th>
                                Complemento
                            </th>
                            <th>
                                Tel - Celular
                            </th>
                            <th>
                                Tel - Residencial
                            </th>
                            <th>
                                Tel - Comercial
                            </th>
                            <th>
                                E-mail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['post'] as $post)
                            <tr>
                                <td>
                                    @if (HelpAdmin::getUser($post->user_id))
                                        {{ HelpAdmin::completName(HelpAdmin::getUser($post->user_id)) ?? "---" }}                                
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td>
                                    {{ $post->cpf }}
                                </td>
                                <td>
                                    {{ $post->registration }}
                                </td>
                                <td>
                                    {{ $post->zip_code }}
                                </td>
                                <td>
                                    {{ $post->country }}
                                </td>
                                <td>
                                    {{ $post->uf }}
                                </td>
                                <td>
                                    {{ $post->city }}
                                </td>
                                <td>
                                    {{ $post->district }}
                                </td>
                                <td>
                                    {{ $post->street_type }}
                                </td>
                                <td>
                                    {{ $post->public_place }}
                                </td>
                                <td>
                                    {{ $post->number }}
                                </td>
                                <td>
                                    {{ $post->complement }}
                                </td>
                                <td>
                                    {{ $post->phone }}
                                </td>
                                <td>
                                    {{ $post->cell_phone }}
                                </td>
                                <td>
                                    {{ $post->commercial_phone }}
                                </td>
                                <td>
                                    {{ $post->email }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data['post']->appends(['search' => $filters['search'] ?? ''])->links() }}
            </div>
        </div>
    </div>

@endsection