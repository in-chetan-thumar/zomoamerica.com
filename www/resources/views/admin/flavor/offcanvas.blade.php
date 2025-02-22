
    <div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($user) ? 'Edit' : 'Create new' }} Flavor
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($user))
        {{ html()->form('POST', route('backend.product.flavors.update'))
            ->id('flavor-form')
            ->attribute('enctype', 'multipart/form-data')
            ->open() }}
        @else
        {{ html()->form('POST', route('backend.product.flavors.store'))
            ->id('flavor-form')
            ->attribute('enctype', 'multipart/form-data')
            ->open() }}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {{ html()->label('Title', 'Title')
                                ->attribute('style', 'justify-content: right') }}
                            <span class="required">*</span>

                        {{ html()->hidden('id', isset($user->id) ? $user->id : '') }}
                        {{ html()->text('flavor_title', isset($user) ? $user->flavor_title : old('flavor_title'))
                            ->class('form-control')
                            ->id('name')
                         }}
                        @error('flavor_title')
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
                        {{ html()->label('Flavor Description', 'Flavor Description')
                            ->attribute('style', 'justify-content: right') }}
                        <span class="required">*</span>

                        {{ html()->text('flavor_description', isset($user) ? $user->flavor_description : old('flavor_description'))
                            ->class('form-control')
                            ->id('flavor_description') }}
                        @error('flavor_description')
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
                        {{ html()->label('Slug', 'slug')
                            ->attribute('style', 'justify-content: right') }}
                        <span class="required">*</span>

                        {{ html()->text('slug', isset($user) ? $user->slug : old('slug'))
                        ->class('form-control')
                        ->id('slug') }}
                        @error('slug')
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
                        {{ html()->label('Category', 'category_id') }}
                        <span class="required">*</span>
                        {{html()->select(
                            'category_id',
                            $category,
                            (isset($user) && !empty($user->category_id)) ? $user->category_id : old('category_id')
                        )
                        ->class('form-control')
                        ->id('category_id')
                        ->attribute('style', 'width: 100%')
                        ->attribute('placeholder', 'Select Category') }}
                        @error('category_id')
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
                        {{ html()->label('Sweet', 'sweet') }}
                        <span class="required">*</span>
                        {{ html()->text('sweet', isset($user) ? $user->sweet : old('sweet'))
                        ->class('form-control')
                        ->id('sweet') }}
                        @error('sweet')
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
                        {{ html()->label('Citric', 'citric') }}
                        <span class="required">*</span>
                        {{ html()->text('citric', isset($user) ? $user->citric : old('citric'))
                        ->class('form-control')
                        ->id('citric') }}
                        @error('citric')
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
                        {{ html()->label('Tobaco Intensity', 'tobaco_intensity') }}
                        <span class="required">*</span>
                        {{ html()->text('tobaco_intensity', isset($user) ? $user->tobaco_intensity : old('tobaco_intensity'))
                            ->class('form-control')
                            ->id('tobaco_intensity') 
                        }}
                        @error('tobaco_intensity')
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
                        {{ html()->label('Menthol', 'menthol') }}
                        <span class="required">*</span>
                        {{ html()->text('menthol', isset($user) ? $user->menthol : old('menthol'))
                            ->class('form-control')
                            ->id('menthol')
                         }}
                        @error('menthol')
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
                        {{ html()->label('Cloud Volume', 'cloud_volume') }}
                        <span class="required">*</span>
                        {{ html()->text('cloud_volume', isset($user) ? $user->cloud_volume : old('cloud_volume'))
                            ->class('form-control')
                            ->id('cloud_volume')
                         }}
                        @error('cloud_volume')
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
                        {{ html()->label('Flavors Available', 'flavors_available') }}
                        <span class="required">*</span>
                        {{ html()->text('flavors_available', isset($user) ? $user->flavors_available : old('flavors_available'))
                            ->class('form-control')
                            ->id('flavors_available') }}
                        @error('flavors_available')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        {!! html()->label('Flavors Image', 'flavors_image') !!}
                        <span class="required">*</span>
                        {{ html()->file('flavors_image[]')
                            ->class('form-control')
                            ->id('flavors_image')
                            ->attribute('multiple', true)
                         }}
                        @error('flavors_image')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        @if (isset($flavor_image))
                            <div claass="preview" style="display: grid;grid-template-columns: repeat(3,1fr);">
                                @foreach ($flavor_image as $flavor)
                                    <div>
                                        <img src="{{ $model->getFlavorImageArray($flavor) }}" height="100">
                                        @if (!empty($model->getFlavorImageArray($flavor)))
                                            <span class="close" style="cursor:pointer"
                                                onClick="loadFile({{ $flavor->id }})">X</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-group">
                                <input class="nhsuk-checkboxes__input showHideCheckbox"
                                    name="is_active" type="checkbox"
                                    id="showHideCheckbox"
                                    value="Y"
                                    {{-- onchange="showHideCheckbox(e)" --}}
                                    aria-controls="conditional-contact-1"
                                    aria-expanded="false"
                                    @isset($user){{ $user->is_active == 'Y' ? 'checked' : '' }}@endisset
                                    >
                                    <label
                                    class="nhsuk-label nhsuk-checkboxes__label show-input-checkbox"
                                    for="">
                                    Is active
                                    </label>
                              </div>
                        </div>
                    </div>
                <div class="col-12">
                    <div class="mb-3">
                        <div class="form-group">
                            <input class="nhsuk-checkboxes__input showHideCheckbox"
                                   name="is_feature" type="checkbox"
                                   id="showHideCheckbox"
                                   value="Y"
                                   {{-- onchange="showHideCheckbox(e)" --}}
                                   aria-controls="conditional-contact-1"
                                   aria-expanded="false"
                            @isset($user){{ $user->is_feature == 'Y' ? 'checked' : '' }}@endisset
                            >
                            <label
                                class="nhsuk-label nhsuk-checkboxes__label show-input-checkbox"
                                for="">
                                Is Feature
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{ html()->button('Submit', 'submit')->class('btn btn-primary') }}
                </div>
            </div>
            {{ html()->form()->close() }}
    </div>
</div>
{!! JsValidator::formRequest('App\Http\Requests\flavors', '#flavor-form') !!}
<script>
     // Save OR UPDATE DATA
     $('#flavor-form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData($('#flavor-form')[0]);
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

