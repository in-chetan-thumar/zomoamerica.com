<div class="offcanvas offcanvas-end" style="width: 30% !important;" tabindex="-1" id="offcanvasCreate"
    aria-labelledby="offcanvasCreate">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCreate">{{ isset($newsdata) ? 'Edit' : 'Create Fresh' }} News Details
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        @if (isset($newsdata))
            {!! Form::open([
                'url' => route('news-list.update', $newsdata->news_id),
                'method' => 'PATCH',
                'id' => 'news-form',
                'files' => true,
            ]) !!}
        @else
            {!! Form::open(['url' => route('news-list.store'), 'method' => 'POST', 'id' => 'news-form', 'files' => true]) !!}
        @endif

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('title', 'Title', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('title', isset($newsdata) ? $newsdata->title : old('title'), ['class' => 'form-control']) !!}
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
                        {!! Form::label('slug', 'Slug', ['style' => 'justify-content: right']) !!}<span class="required">*</span>
                        {!! Form::text('slug', isset($newsdata) ? $newsdata->slug : old('slug'), ['class' => 'form-control']) !!}
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
                        {!! Form::label('link', 'Link', ['style' => 'justify-content: right']) !!}
                        {!! Form::text('link', isset($newsdata) ? $newsdata->link : old('link'), ['class' => 'form-control']) !!}
                        
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('description', 'Description', ['style' => 'justify-content: right']) !!}
                        {!! Form::textarea('description', isset($newsdata) ? $newsdata->description : old('description'), [
                            'class' => 'form-control',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-group">
                        {!! Form::label('image', 'Select Image', ['style' => 'justify-content: right']) !!}
                        <span class="required">*</span>
                        {{-- <span class="required">@if (!isset($newsdata))*@endif</span> --}}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'image']) !!}
                        <div class="preview">
                            @if (isset($newsdata->image))
                                <img style="width:30%;height:20%"
                                    src="{{ asset('storage/news/'.$newsdata->image)}}">
                            @endif
                        </div>
                        @error('image')
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
                        <input class="nhsuk-checkboxes__input"
                             name="is_active" type="checkbox"
                             value="Y"
                             aria-controls="conditional-contact-1"
                             aria-expanded="false"
                             @isset($newsdata){{ $newsdata->is_active == 'Y' ? 'checked' : '' }}@endisset
                             >
                             <label
                             class="nhsuk-label nhsuk-checkboxes__label show-input-checkbox"
                             for="">
                             Is active
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
{!! JsValidator::formRequest('App\Http\Requests\NewsRequest', '#news-form') !!}
<script>
    // Save OR UPDATE DATA
    $('#news-form').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#news-form')[0]);
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
