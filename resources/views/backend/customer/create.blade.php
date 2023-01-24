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
                                <label for="name">Enter Customer Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name">Company_name <span class="text-danger">*</span></label>
                                <input id="company_name" class="form-control" type="text" name="company_name">
                            </div>
                             @error('name')
                            <?php
                            alert()->error('Error','Please fill all the fields');
                            ?>
                            @enderror
                            @error('company_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="text" name="email"s>
                            </div>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no">Contact_no. <span class="text-danger">*</span></label>
                                <input id="contact_no" class="form-control" type="text" name="contact_no">
                            </div>
                            @error('contact_no')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <input id="address" class="form-control" type="text" name="address">
                            </div>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
