<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <form action="{{ route('customer.update',[$customer->id]) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $customer->name }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email" value="{{ $customer->email }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_no">Contact_no.</label>
                                <input id="contact_no" class="form-control" type="text" name="contact_no" value="{{ $customer->contact_no }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company_name">Company_name</label>
                                <input id="company_name" class="form-control" type="text" name="company_name" value="{{ $customer->company_name }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input id="address" class="form-control" type="text" name="address" value="{{ $customer->address }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user_id">User Name</label>
                                <select id="user_id" class="form-control" name="user_id">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ $user->id == $customer->user_id ? 'selected' : '' }}>{{ $user->first_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
