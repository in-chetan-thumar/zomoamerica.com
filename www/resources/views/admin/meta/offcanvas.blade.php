<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($user) ? 'Edit' : 'Create new' }} meta detail</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($user))
        {{ html()->form('POST', route('backend.metaDetail.update'))
            ->id('meta-form')
            ->attribute('enctype', 'multipart/form-data')
            ->open() 
        }}
        @else
        {{ html()->form('POST', route('backend.metaDetail.store'))
            ->id('meta-form')
            ->attribute('enctype', 'multipart/form-data')
            ->open() 
        }}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ isset($user) ? $user->id : '' }}">
                        {{ html()->label('Meta Title', 'meta_title')
                        ->attribute('style', 'justify-content: right') }}
                        <span class="required">*</span>
                        {{ html()->text('meta_title', isset($user) ? $user->meta_title : old('meta_title'))
                            ->class('form-control')
                            ->attribute('maxlength', '50') 
                        }}
                        @error('meta_title')
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
                        {{ html()->label('Meta Description', 'meta_description')
                        ->attribute('style', 'justify-content: right') }}
                        <span class="required">*</span>
                        {{ html()->text('meta_description', isset($user) ? $user->meta_description : old('meta_description'))
                        ->class('form-control')
                        ->id('meta_description') }}
                        @error('meta_description')
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
                        {{html()->label('Meta Keyword', 'meta_keyword')
                        ->attribute('style', 'justify-content: right') }}
                        <span class="required">*</span>      
                        {{ html()->text('meta_keyword', isset($user) ? $user->meta_keyword : old('meta_keyword'))
                        ->class('form-control')
                        ->attribute('maxlength', '30') }}
                        @error('meta_keyword')
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
                        {{ html()->label('Meta Route', 'meta_route')
                        ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>
                            {{ html()->text('meta_route', isset($user) ? $user->meta_route : old('meta_route'))
                            ->class('form-control')
                            ->attribute('maxlength', '40') }}
                        @error('meta_route')
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
{!! JsValidator::formRequest('App\Http\Requests\MetatagRequest', '#meta-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#meta-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#meta-form')[0]);
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
