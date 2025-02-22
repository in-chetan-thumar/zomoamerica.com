<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
     aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{isset($user)?'View':'Create new'}} user</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

    
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {{ html()->label('Email', 'Email')
                                ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>
                            {{ html()->text('email', isset($user) ? $user->email : old('email'))
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
                            {{ html()->label('Subject', 'Subject')
                                ->attribute('style', 'justify-content: right') }}
                             {{ html()->text('subject', isset($user) ? $user->subject : old('subject'))
                                ->class('form-control')
                                ->id('subject')
                            }}
                            @error('subject')
                            <span style="color:red">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            {{ html()->label('Message', 'Message')
                                ->attribute('style', 'justify-content: right') }}
                             {{ html()->bsTextArea('', 'message', isset($user) ? $user->message : old('message'))
                                        ->placeholder('Message')
                                        ->attribute('maxlength', 150)
                                        ->class('')
                                        ->rows(10)
                                        ->cols(30)
                            }}

                            @error('message')
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
