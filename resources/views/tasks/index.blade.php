<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Create New Task
                    </div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="d-flex">
                            @csrf
                            <input type="text" class="form-control me-2" name="list" placeholder="Input Your Task">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ol class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between"
                    style="margin-bottom: 10px">
                    {{ $index + 1 }} - {{ $task->list }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="/tasks/{{ $task->id }}/edit">Edit</a>
                        <form action="/tasks/{{ $task->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>
</x-app-layout>
