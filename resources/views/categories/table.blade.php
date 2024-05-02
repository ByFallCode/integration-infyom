<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="categories-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>User Created</th>
                <th>User Modified</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $categorie)
                <tr>
                    <td>{{ $categorie->name }}</td>
                    <td>{{ $categorie->user_created }}</td>
                    <td>{{ $categorie->user_modified }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['categories.destroy', $categorie->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('categories.show', [$categorie->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('categories.edit', [$categorie->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $categories])
        </div>
    </div>
</div>
