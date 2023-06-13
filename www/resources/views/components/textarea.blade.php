<label for="{{$name}}" class="">{!!$label!!}{!! $required == 'true' ? '<span style="color: red;">*</span>' : '' !!}</label>
@error($name)
<span class="invalid-feedback" style="display: inline;">{{$message}}</span>
@enderror
{{ Form::textarea($name, $value,array_merge_recursive(['class' => 'form-control'],$attributes)) }}
