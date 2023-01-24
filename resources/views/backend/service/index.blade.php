<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('service.create') }}" class="btn btn-primary">Add service</a>
                <a href="{{ route('dashboard') }}" class="btn btn-primary ml-5">Got to Dashboard</a>

            </div>
            <div class="card-body">
                <table class="table dataTable table-striped dataTable no-footer" id="table-1" role="grid"
                    aria-describedby="table-1_info">
                    <th>SN</th>
                    <th>Name</th>
                    <th>Action</th>

                    @foreach ($service as $index => $item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a href="{{ route('service.edit', [$item->id]) }}" class="btn btn-primary">Edit</a>
                                {{-- <form action="" method="post">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('service.destroy',[$service->id]) }}" class="btn btn-danger">Delete</a>
                                    </form> --}}
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-admin-template>
