<x-admin-template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('service.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <div class="row">

                </div>
                <form action="{{ route('service.store') }}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            @error('name')
                            <?php
                            alert()->error('Error','Name Field is required');
                            ?>
                            @enderror
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-template>
