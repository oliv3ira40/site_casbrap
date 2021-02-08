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
                    @foreach ($data['category_post'] as $category)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>
                                {{ $category->PostsHasCategoriesPosts->count() }}
                            </td>
                            <td>
                                @if (in_array('adm.category_post.edit', HelpAdmin::PermissionsUser()))
                                    <a href="{{ route('adm.category_post.edit', $category->id) }}" class="my-btn btn btn-xs btn-trans btn-warning">Editar</a>
                                @endif
                                
                                @if (in_array('adm.category_post.alert', HelpAdmin::PermissionsUser()))
                                    <a href="{{ route('adm.category_post.alert', $category->id) }}" class="my-btn btn btn-xs btn-trans btn-danger">Excluir</a>
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