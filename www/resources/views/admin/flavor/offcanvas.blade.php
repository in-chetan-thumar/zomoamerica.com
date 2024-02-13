
    <div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($user) ? 'Edit' : 'Create new' }} Flavor
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($user))
            {!! Form::open([
                'url' => route('backend.product.flavors.update'),
                'method' => 'post',
                'id' => 'flavor-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('backend.product.flavors.store'), 'method' => 'POST', 'id' => 'flavor-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('Title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>

                        <input type="hidden" name="id" value="{{ isset($user->id) ? $user->id : '' }}">
                        {!! Form::text('flavor_title', isset($user) ? $user->flavor_title : old('flavor_title'), [
                            'class' => 'form-control',
                            'id' => 'name',
                        ]) !!}
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
                        {!! Form::label('Flavor Description', 'Flavor Description', ['style' => 'justify-content: right']) !!}<span class="required">*</span>

                        {!! Form::text('flavor_description', isset($user) ? $user->flavor_description : old('flavor_description'), [
                            'class' => 'form-control',
                            'id' => 'flavor_description',
                        ]) !!}
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
                        {!! Form::label('slug', 'Slug', ['style' => 'justify-content: right']) !!}<span class="required">*</span>

                        {!! Form::text('slug', isset($user) ? $user->slug : old('slug'), [
                            'class' => 'form-control',
                            'id' => 'slug',
                        ]) !!}
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
                        {{ Form::label('category_id', 'Category') }}<span class="required">*</span>
                        {!! Form::select(
                            'category_id',
                            $category,
                            (isset($user) and !empty($user->category_id)) ? $user->category_id : old('category_id'),
                            ['class' => 'form-control', 'id' => 'category_id', 'style' => 'width: 100%', 'placeholder' => 'Select Category'],
                        ) !!}

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
                        {{ Form::label('sweet', 'Sweet') }}<span class="required">*</span>
                        {!! Form::text('sweet', isset($user) ? $user->sweet : old('sweet'), [
                            'class' => 'form-control',
                            'id' => 'sweet',
                        ]) !!}
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
                        {{ Form::label('citric', 'Citric') }}<span class="required">*</span>
                        {!! Form::text('citric', isset($user) ? $user->citric : old('citric'), [
                            'class' => 'form-control',
                            'id' => 'citric',
                        ]) !!}
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
                        {{ Form::label('tobaco_intensity', 'Tobaco Intensity') }}<span class="required">*</span>
                        {!! Form::text('tobaco_intensity', isset($user) ? $user->tobaco_intensity : old('tobaco_intensity'), [
                            'class' => 'form-control',
                            'id' => 'tobaco_intensity',
                        ]) !!}
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
                        {{ Form::label('menthol', 'Menthol') }}<span class="required">*</span>
                        {!! Form::text('menthol', isset($user) ? $user->menthol : old('menthol'), [
                            'class' => 'form-control',
                            'id' => 'menthol',
                        ]) !!}
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
                        {{ Form::label('cloud_volume', 'Cloud Volume') }}<span class="required">*</span>
                        {!! Form::text('cloud_volume', isset($user) ? $user->cloud_volume : old('cloud_volume'), [
                            'class' => 'form-control',
                            'id' => 'cloud_volume',
                        ]) !!}
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
                        {{ Form::label('flavors_available', 'Flavors Available') }}<span class="required">*</span>
                        {!! Form::text('flavors_available', isset($user) ? $user->flavors_available : old('flavors_available'), [
                            'class' => 'form-control',
                            'id' => 'flavors_available',
                        ]) !!}
                        @error('flavors_available')
                            <span style="color:red">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group">
                        {{ Form::label('flavors_image', 'Flavors Image') }}<span class="required">*</span>
                        {!! Form::file('flavors_image[]', ['class' => 'form-control', 'id' => 'flavors_image', 'multiple']) !!}
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
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {{ Form::close() }}
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

