<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($user)?'View':'Create new'}} WholeSaler</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Buisness Name', 'Buisness Name',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('buisness_name',isset($user) ? $user->buisness_name:old('buisness_name'),['class' => 'form-control','id' =>'name'])!!}
                            @error('buisness_name')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('First Name', 'First Name',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('first_name',isset($user) ? $user->first_name:old('first_name'),['class' => 'form-control','id' =>'email'])!!}
                            @error('first_name')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                  <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Last Name', 'Last Name',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('last_name',isset($user) ? $user->last_name:old('last_name'),['class' => 'form-control','id' =>'email'])!!}
                            @error('last_name')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                 <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Address', 'Address',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('adress',isset($user) ? $user->adress:old('adress'),['class' => 'form-control','id' =>'email'])!!}
                            @error('adress')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                  <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('City', 'City',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('city',isset($user) ? $user->city:old('city'),['class' => 'form-control','id' =>'email'])!!}
                            @error('city')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                   <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('State', 'State',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('state',isset($user) ? $user->state:old('state'),['class' => 'form-control','id' =>'email'])!!}
                            @error('state')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                  <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('ZipCode', 'ZipCode',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('zipcode',isset($user) ? $user->zipcode:old('zipcode'),['class' => 'form-control','id' =>'email'])!!}
                            @error('zipcode')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Website', 'Website',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('website',isset($user) ? $user->website:old('website'),['class' => 'form-control','id' =>'email'])!!}
                            @error('website')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                  <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Email', 'Email',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('email',isset($user) ? $user->email:old('email'),['class' => 'form-control','id' =>'email'])!!}
                            @error('email')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Telephone', 'Telephone',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('telephone',isset($user) ? $user->telephone:old('telephone'),['class' => 'form-control','id' =>'telephone'])!!}
                            @error('telephone')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            
        <div class="row">
            
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\UserRequest', '#user-form'); !!}
<script>

    
    // Save OR UPDATE DATA
    $('#user-form').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#user-form')[0]);
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
                success: function (data, textStatus, jqXHR) {
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
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#status').hide();
                    $('#preloader').hide();
                    toastr.error('Error occurred!');
                }
            });
        }
    })
</script>
