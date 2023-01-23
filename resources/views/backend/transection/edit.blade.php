<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('transection.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('transection.update',$customer->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="customer_id">Customer</label>
                                <select id="customer_id" class="form-control" name="customer_id">
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == $customer->id ? 'selected' : '' }}>{{ $item->name }} - {{ $item->company_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @foreach ($data as $s)
                            <div class="card">

                                <div class="card-body">
                                    <form action="{{ route('transection.update', $customer->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="service_id">Choose Services</label>
                                                    <select id="service_id" class="form-control" name="service_id[]">
                                                        @foreach ($services as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="start_date">Start Date</label>
                                                    <input id="start_date" class="form-control" type="date"
                                                        name="start_date" value="{{ $s->pivot->start_date }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="update_date">Update Date</label>
                                                    <input id="update_date" class="form-control" type="date"
                                                        name="update_date" value="{{ $s->pivot->update_date }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fee">Yearly Fee</label>
                                                    <input id="fee" class="form-control" type="number"
                                                        name="fee" value="{{ $s->pivot->fee }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="year">For the Year eg(1 for first year, 2 for second year)</label>
                                                    <input id="year" class="form-control" type="number"
                                                        name="year" value="{{ $s->pivot->year }}">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit">Update Record</button>
                                    </form>
                                </div>

                            </div>
                        @endforeach



                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
