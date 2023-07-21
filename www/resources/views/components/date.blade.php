<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
{{ Form::date($name, $value,array_merge_recursive(['class' => $errors->has($name)?'form-control is-invalid':'form-control'],$attributes)) }}
@error($name)
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror

