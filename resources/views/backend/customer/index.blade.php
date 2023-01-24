<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
                <a href="{{ route('dashboard') }}" class="btn btn-primary ml-5">Got to Dashboard</a>
                <form class="form-inline ml-auto">
                    <div class="search-element">
                        <form action="/search" method="get">
                            <input class="form-control" type="search" value="{{ $search }}" placeholder="Search"
                                aria-label="Search" data-width="200" name="q">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </form>
                {{-- <form action="/search" method="get" class="ml-auto">
                    <input type="search" name="q" type="search" placeholder="Search">
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form> --}}
            </div>
            <div class="card-body">
                <table class="table dataTable table-striped dataTable no-footer" id="table-1" role="grid"
                    aria-describedby="table-1_info">
                    <th>SN</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact_no.</th>
                    <th>Action</th>

                    @foreach ($customer as $index => $item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->contact_no }}</td>
                            <td>
                                <form action="{{ route('customer.destroy', $item->id) }}" method="post">
                                    <a href="{{ route('customer.edit', [$item->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</x-admin-template>
