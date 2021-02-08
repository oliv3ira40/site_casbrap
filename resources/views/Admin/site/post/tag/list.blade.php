@extends('Admin.layout.layout')
@section('title', 'Lista de categorias')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <table class="datatable table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Posts</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['tag_post'] as $tag_post)
                        <tr>
                            <td>
                                {{ $tag_post->id }}
                            </td>
                            <td>
                                {{ $tag_post->name }}
                            </td>
                            <td>
                                {{ $tag_post->PostsHasTagsPosts->count() }}
                            </td>
                            <td>
                                @if (in_array('adm.tag_post.edit', HelpAdmin::PermissionsUser()))
                                    <a href="{{ route('adm.tag_post.edit', $tag_post->id) }}" class="my-btn btn btn-xs btn-trans btn-warning">Editar</a>
                                @endif
                                
                                @if (in_array('adm.tag_post.alert', HelpAdmin::PermissionsUser()))
                                    <a href="{{ route('adm.tag_post.alert', $tag_post->id) }}" class="my-btn btn btn-xs btn-trans btn-danger">Excluir</a>
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