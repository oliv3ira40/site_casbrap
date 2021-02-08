@extends('Admin.layout.layout')
@section('title', 'Arquivos disponíveis')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">

                {!! Form::open(['url'=>route('adm.file.insert_files'), 'files'=>'post']) !!}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content">
                                Inserir novos arquivos (máximo 10Mbs)
                                @if ($errors->has('new_files'))
                                    <small class="text-danger txt-trans-initial font-bold">
                                        {{ $errors->first('new_files') }}
                                    </small>
                                @endif
                            </label>
                            
                            {!! Form::file('new_files[]', ['class'=>'form-control', 'multiple']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::submit('Salvar arquivos', ['class'=>'btn btn-block btn-primary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
                <br><hr>

                {{-- date('d/m/Y', filemtime($item['path_name'])) --}}
                <table class="datatable table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Arquivo</th>
                            <th class="custom_tr">Link</th>
                            <th style="width: 170px !important;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $n = count($data['all_files']) @endphp
                        @foreach ($data['all_files'] as $item)
                            <tr>
                                <td>
                                    {{ $n-- }}
                                </td>
                                <td class="custom_td">
                                    @if (date('m/d') == date('m/d', filemtime($item['path_name'])))
                                        {{ $item['basename'] }}
                                        <small class="m-l-5 badge badge-success">Arquivo novo</small>
                                    @else
                                        {{ $item['basename'] }}
                                    @endif
                                </td>
                                <td>
                                    @if (in_array($item['extension'], ['jpg', 'jpeg', 'png']))
                                        <img style="width: 100px;" src="{{ $item['full_path'] }}">
                                    @else
                                    @endif
                                </td>
                                <td class="custom_td">
                                    {{ $item['full_path'] }}
                                </td>
                                <td>
                                    <a href="{{ $item['full_path'] }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-info">Visualizar</a>
                                    <a href="{{ $item['full_path'] }}" download class="my-btn btn btn-xs btn-trans btn-success">Baixar</a>
                                    @if (in_array('adm.file.alert', HelpAdmin::permissionsUser()))
                                        <a href="{{ route('adm.file.alert', ['path' => $item['filtered_name']]) }}" class="my-btn btn btn-xs btn-trans btn-danger">Excluir</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection