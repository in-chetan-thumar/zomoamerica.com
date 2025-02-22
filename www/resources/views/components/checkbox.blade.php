ma<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
<div class="mb-1">
    @php($value = !empty($value)?explode(',',$value):[])
    @if(!empty($options))
        @foreach($options as $key => $option)
            <div class="form-check {{isset($attributes['rows'])?$attributes['rows']:''}}">
                {{ Html()->checkbox($name.'[]', $key, in_array($key, $value))
                    ->class('form-check-input')
                    ->attributes($attributes) }}
                <label for="{{$name.'-label'}}" class="form-check-label">{!!$option!!}</label>
            </div>
        @endforeach
    @endif
</div>
@error($name)
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
