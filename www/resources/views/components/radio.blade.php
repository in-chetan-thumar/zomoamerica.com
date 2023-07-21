<label for="{{$name}}" id="label_{{$name}}">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
<div class="mb-1">
    @if(!empty($options))
        @foreach($options as $key => $option)
            <div class="form-check">
                {!! Form::radio($name,$key,$key == $value ? true:false,array_merge_recursive(['id'=>$name.$key,'class'=>'form-check-input'],$attributes)); !!}
                {{ Form::label($name.$key,$option,['class' => '']) }}
            </div>
        @endforeach
    @endif
</div>
@error($name)
<span class="invalid-feedback" style="display: inline;">{{$message}}</span>
@enderror
