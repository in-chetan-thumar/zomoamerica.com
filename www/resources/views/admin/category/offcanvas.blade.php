<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($user)?'Edit':'Create new'}} user</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if(isset($user))
            {!! Form::open(array('url' => route('backend.product.flavors.category.update',$user->id),'method'=>'POST','id'=>'user-form','files'=>true)) !!}
        @else
            {!! Form::open(array('url' => route('backend.product.flavors.category.store'),'method'=>'POST','id'=>'user-form','files'=>true)) !!}
        @endif

            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('name', 'Name',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                                
                            <input type="hidden" name="id" value="{{ isset($user->id) ? $user->id :'' }}">
                            {!! Form::text('name',isset($user) ? $user->name:old('name'),['class' => 'form-control','id' =>'name'])!!}
                            @error('name')
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
                            {!!  Form::label('slug', 'Slug',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                                
                            {!! Form::text('slug',isset($user) ? $user->slug:old('slug'),['class' => 'form-control','id' =>'slug'])!!}
                            @error('slug')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                @isset($user)
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('Status', 'Status',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::select('is_active',$status,(isset($user)) ? $user->is_active:old('is_active'),['class'=>'form-control','id'=>'role','style'=>'width: 100%','placeholder'=>'Select Status']) !!}
                            @error('is_active')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
                @endisset
            </div>
            
        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\Category', '#user-form'); !!}
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
