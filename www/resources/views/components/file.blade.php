<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
{{-- {{ Form::file($name,array_merge_recursive(['class' => $errors->has($name)?'form-control is-invalid':'form-control'],$attributes)) }} --}}
{{ Html()->file($name)->attributes(array_merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'], $attributes)) }}
@error($name)
<span class="invalid-feedback" style="display: inline;">{{$message}}</span>
@enderror
