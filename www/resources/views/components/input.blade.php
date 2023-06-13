<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
@php
    if(strpos($attributes['class'], 'only-number-allow')){
    $attributes['oninput'] = "return $(this).val($(this).val().replace(/[^0-9]/g, ''))";
    }
@endphp

@error($name)
<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
@enderror

{{ Form::text($name, $value,array_merge_recursive(['class' => 'form-control'],$attributes)) }}

