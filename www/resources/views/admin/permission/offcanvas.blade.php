<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($permission)?'Edit':'Create new'}} permission</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if(isset($permission))
            {!! Form::open(array('url' => route('permission.update',$permission->id),'method'=>'PATCH','id'=>'permission-form','files'=>true)) !!}
        @else
            {!! Form::open(array('url' => route('permission.store'),'method'=>'POST','id'=>'permission-form','files'=>true)) !!}
        @endif

            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {!!  Form::label('title', 'Title',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('title',isset($permission) ? $permission->title:old('title'),['class' => 'form-control','id' =>'title'])!!}
                            @error('title')
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
                            {!!  Form::label('name', 'Name',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('name',isset($permission) ? $permission->name:old('name'),['class' => 'form-control','id' =>'name'])!!}
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
                            {!!  Form::label('permission_label', 'Permission label',['style' =>'justify-content: right']); !!}<span
                                class="required">*</span>
                            {!! Form::text('permission_label',isset($permission) ? $permission->permission_label:old('permission_label'),['class' => 'form-control','id' =>'permission_label'])!!}
                            @error('permission_label')
                            <span style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

        <div class="row">
            <div class="col-md-12">
                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
        </form>
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\PermissionRequest', '#permission-form'); !!}
<script>
    // Save OR UPDATE DATA
    $('#permission-form').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData($('#permission-form')[0]);
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
