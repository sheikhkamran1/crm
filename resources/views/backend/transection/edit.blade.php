<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('transection.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <form action="{{ route('transection.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="customer_id">Choose Services</label>
                                <select id="customer_id" class="form-control" name="customer_id">
                                    @foreach ($customers as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="service_id">Choose Services</label>
                                <select id="service_id" class="form-control" name="service_id[]">
                                    @foreach ($services as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start_date">Start_date.</label>
                                <input id="start_date" class="form-control" type="date" name="start_date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="update_date">Update_date</label>
                                <input id="update_date" class="form-control" type="date" name="update_date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input id="fee" class="form-control" type="number" name="fee" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input id="year" class="form-control" type="number" name="year" >
                            </div>
                        </div>




                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
