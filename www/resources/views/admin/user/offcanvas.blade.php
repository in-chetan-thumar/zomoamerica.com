<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($user)?'Edit':'Create new'}} user</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

            @if(isset($user))
            {{ html()->form('PATCH', route('usermanagements.update',$user->id))
                ->id('user-form')
                ->class('row row-cols-lg-auto g-3 align-items-center')
                ->open() 
            }}
            @else
            {{ html()->form('post', route('usermanagements.store'))
                ->id('user-form')
                ->class('row row-cols-lg-auto g-3 align-items-center')
                ->open() 
            }}
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {{ html()->label('Name', 'name')
                                ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>
                            {{ html()->text('name', isset($user) ? $user->user : old('name'))
                                ->class('form-control')
                                ->id('name') 
                             }}
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
                            {{ html()->label('Email', 'email')
                                ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>
                            {{ html()->text('email', isset($user) ? $user->user : old('email'))
                                ->class('form-control')
                                ->id('email') 
                            }}
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
                            {{ html()->label('Role', 'role')
                                ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>
                            {{ html()->select('role', $roles, isset($user) ? $user->roles()->first()->id : old('role'))
                                ->class('form-select')
                                ->id('role')
                                ->placeholder('Select role')
                                
                            }}
                            
                            @error('role')
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
                {{ html()->button('Submit', 'submit')->class('btn btn-primary') }}
            </div>
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
