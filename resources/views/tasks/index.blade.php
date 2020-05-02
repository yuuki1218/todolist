@extends('layouts.admin')

@section('title', 'Todo List')
@section('content')
<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">Folder</div>
                        <div class="panel-body">
                            <a href="#" class="btn btn-default btn-block">
                                フォルダを追加する
                            </a>
                        </div>
                        <div class="list-group">
                            @foreach ($folders as $folder)
                                <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" 
                                   class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}"
                                >
                                    {{ $folder->title }}
                                </a>
                            @endforeach
                        </div>
                    </nav>
                </div>
                <div class="colum col-md-8">
                    
                </div>
            </div>
        </div>
    </main>
</body>
@endsection