ma<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
<div class="mb-1">
    @php($value = !empty($value)?explode(',',$value):[])
    @if(!empty($options))
        @foreach($options as $key => $option)
            <div class="form-check {{isset($attributes['rows'])?$attributes['rows']:''}}">
                {!! Form::checkbox($name.'[]',$key,in_array($key,$value),array_merge_recursive(['class'=>'form-check-input'],$attributes)); !!}

                <label for="{{$name.'-label'}}" class="form-check-label">{!!$option!!}</label>
            </div>
        @endforeach
    @endif
</div>
@error($name)
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror
