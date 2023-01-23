<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <form action="{{ route('customer.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no">Contact_no.</label>
                                <input id="contact_no" class="form-control" type="text" name="contact_no">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name">Company_name</label>
                                <input id="company_name" class="form-control" type="text" name="company_name">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" class="form-control" type="text" name="address">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
