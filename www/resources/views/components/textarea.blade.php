<label for="{{ $name }}" class="">{!! $label !!}{!! $required == 'true' ? '<span style="color: red;">*</span>' : '' !!}</label>
{{-- {{ Form::textarea($name, $value, array_merge_recursive(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'], $attributes)) }} --}}
{{ Html()->textarea($name, $value)->attributes(array_merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'], $attributes)) }}
@error($name)
    <span class="invalid-feedback" style="display: inline;font-size:15px">{{ $message }}</span>
@enderror
