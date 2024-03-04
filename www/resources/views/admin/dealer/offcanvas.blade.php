<div class="offcanvas offcanvas-end" style="width: 50% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($dealer) ? 'Edit' : 'Create new' }} dealer</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($dealer))
            {!! Form::open([
                'url' => route('dealers.update', $dealer->id),
                'method' => 'PATCH',
                'id' => 'dealer-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open([
                'url' => route('dealers.store'),
                'method' => 'POST',
                'id' => 'dealer-form',
                'files' => true,
            ]) !!}
        @endif

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Dealership name', 'dealership_name', isset($dealer) ? $dealer->dealership_name : old('dealership_name'), '', ['class' => '', 'placeholder' => 'Enter dealership name'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Sort id', 'sort_id', isset($dealer) ? $dealer->sort_id : old('sort_id'), '', ['class' => ' only-number-allow', 'placeholder' => 'Enter sort id'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Name', 'contact_name', isset($dealer) ? $dealer->contact_name : old('contact_name'), '', ['class' => '', 'placeholder' => 'Enter contact name'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Number', 'contact_number', isset($dealer) ? $dealer->contact_number : old('contact_number'), '', ['class' => ' only-number-allow', 'maxlength' => 10, 'placeholder' => 'Enter contact number'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsEmail('Email', 'contact_email', isset($dealer) ? $dealer->contact_email : old('contact_email'), '', ['class' => '', 'placeholder' => 'Enter contact email'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsTextArea('Address', 'address', isset($dealer) ? $dealer->address : old('address'), '', ['class' => '', 'rows' => 2, 'placeholder' => 'Enter dealer address'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('State', 'state', isset($dealer) ? $dealer->state : old('state'), '', ['class' => '', 'placeholder' => 'Enter state '], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('City', 'city', isset($dealer) ? $dealer->city : old('city'), '', ['class' => '', 'placeholder' => 'Enter city'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Pincode', 'pincode', isset($dealer) ? $dealer->pincode : old('pincode'), '', ['class' => ' only-number-allow', 'maxlength' => 6, 'placeholder' => 'Enter pincode '], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('URL', 'url', isset($dealer) ? $dealer->url : old('url'), '', ['class' => '', 'placeholder' => 'Enter url'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Latitude', 'latitude', isset($dealer) ? $dealer->latitude : old('latitude'), '', ['class' => ' ', 'placeholder' => 'Enter latitude'], [], true) }}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::bsText('Longitude', 'longitude', isset($dealer) ? $dealer->longitude : old('longitude'), '', ['class' => ' ', 'placeholder' => 'Enter longitude '], [], true) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\DealerRequest', '#dealer-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#dealer-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#dealer-form')[0]);
        var url = $(this).attr('action');
        var method = $(this).attr('method');

        if ($(this).valid()) {
            $('#status').show();
            $('#preloader').show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                processData: false,
                contentType: false,
                type: method,
                data: formData,
                success: function(data, textStatus, jqXHR) {
                    if (!data.error) {
                        $('#status').hide();
                        $('#preloader').hide();
                        $(".divtable").html(data.view);
                        toastr.success(data.message);
                        let closeCanvas = document.querySelector('[data-bs-dismiss="offcanvas"]');
                        closeCanvas.click();
                        //location.reload();
                    } else {
                        $('#status').hide();
                        $('#preloader').hide();
                        toastr.error(data.message);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
