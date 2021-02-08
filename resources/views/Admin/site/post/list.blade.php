@extends('Admin.layout.layout')
@section('title', 'Lista de notícias')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                <div class="col-md-12">
                    @if (in_array('adm.posts.excluded_list', HelpAdmin::PermissionsUser()))
                        <h4 class="m-t-0 header-title m-b-20">
                            <a class="text-white" href="{{ route('adm.posts.excluded_list') }}">
                                Lista de notícias excluidas
                            </a>
                        </h4>
                    @endif
                </div>
                <table class="datatable table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Link</th>
                            <th>Imagem</th>
                            <th>Criador por</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['post'] as $post)
                            <tr>
                                <td>
                                    {{ $post->id }}
                                </td>
                                <td>
                                    {{ str_limit($post->title, 50) }}
                                </td>
                                <td>
                                    noticias/
                                    {{ $post->id }}
                                </td>
                                <td>
                                    @if ($post->image_banner != null)
                                        <img width="100" src="{{ asset(HelpAdmin::getStorageUrl().$post->image_banner) }}">
                                    @else
                                        <img width="100" src="{{ asset(HelpAdmin::getStorageUrl().$post->image_spotlight) }}">
                                    @endif
                                </td>
                                <td>
                                    {{ HelpAdmin::completName($post->CreatedBy) }}
                                </td>
                                <td>
                                    {{ $post->StatusPost->name }}
                                </td>
                                <td>
                                    <a href="{{ route('site.posts.detail', $post->id) }}" target="_blank" class="my-btn btn btn-xs btn-trans btn-primary">Visualizar</a>
                                    
                                    @if (in_array('adm.post.edit', HelpAdmin::PermissionsUser()))
                                        <a href="{{ route('adm.post.edit', $post->id) }}" class="my-btn btn btn-xs btn-trans btn-warning">Editar</a>
                                    @endif
                                    
                                    @if (in_array('adm.post.alert', HelpAdmin::PermissionsUser()))
                                        <a href="{{ route('adm.post.alert', $post->id) }}" class="my-btn btn btn-xs btn-trans btn-danger">Excluir</a>
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