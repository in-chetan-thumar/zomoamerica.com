@if (!empty($label))
    <label for="{{ $name }}" class="form-label">{!! $label !!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
@endif
@php
    if (strpos($attributes['class'], 'only-number-allow')) {
        $attributes['oninput'] = "return $(this).val($(this).val().replace(/[^0-9]/g, ''))";
    }
@endphp

{{ Form::text($name, $value, array_merge_recursive(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'], $attributes)) }}
@error($name)
    <span class="invalid-feedback" style="display: inline;font-size:15px">{{ $message }}</span>
@enderror
