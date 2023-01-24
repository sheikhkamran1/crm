<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('transection.create') }}" class="btn btn-primary">Add transaction</a>
                <a href="{{ route('dashboard') }}" class="btn btn-primary ml-5">Got to Dashboard</a>

            </div>
            <div class="card-body">
                @foreach ($data as $customer)
                    <div class="card">
                        <div class="card-body">
                            <address>
                                <span><i class="fa fa-user mr-2" aria-hidden="true"></i> Customer Name:
                                    {{ $customer->name }}</span> <br>
                                <span><i class="fa fa-briefcase mr-2" aria-hidden="true"></i> Company:
                                    {{ $customer->company_name }}</span> <br>
                                <span><i class="fa fa-phone mr-2" aria-hidden="true"></i> Contact:
                                    {{ $customer->contact_no }}</span> <br>
                                <span><i class="fa fa-envelope mr-2" aria-hidden="true"></i> Email:
                                    {{ $customer->email }}</span> <br>
                                <hr>
                                <h1 class="text-danger">Service</h1>

                                <table class="table">
                                    <tr>
                                        <th>Service</th>
                                        <th>Start Date</th>
                                        <th>Update Date</th>
                                        <th>Year</th>
                                        <th>Renew Date</th>
                                        <th>Fee</th>
                                    </tr>
                                    @foreach ($customer->services as $service)
                                        <tr>
                                            <td>{{ $service->name }}</td>
                                            <td>{{ $service->pivot['start_date'] }}</td>
                                            <td>{{ $service->pivot['update_date'] }}</td>
                                            <td>{{ $service->pivot['year'] }}</td>
                                            <td>{{ $service->pivot['renew_date'] }}</td>
                                            <td>{{ $service->pivot['fee'] }}</td>

                                        </tr>
                                    @endforeach
                                </table>

                                <a href="{{ route('transection.edit', $customer->id) }}"
                                    class="btn btn-primary">Edit</a>
                            </address>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-admin-template>
