<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>
                {{-- <form class="form-inline ml-auto">
                    <div class="search-element">
                        <form action="/search" method="get">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                data-width="200" name="q">
                            <button class="btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </form> --}}
                <form action="/search" method="get">
                    <input type="search" name="q">
                    <button type="submit">Search</button>
                </form>
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
                                <a href="{{ route('customer.edit', [$item->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</x-admin-template>
