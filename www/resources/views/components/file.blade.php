<label for="{{$name}}" class="form-label">{!!$label!!}{!! $required ? '<span style="color: red;">*</span>' : '' !!}</label>
{{ Form::file($name,array_merge_recursive(['class' => 'form-control'],$attributes)) }}
@error($name)
<span class="invalid-feedback" style="display: inline;">{{$message}}</span>
@enderror
