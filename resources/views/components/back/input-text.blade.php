@php
    $input_errors = $errors->get($name);
@endphp

<div class="form-group">
    <label for="{{$id}}">{{$label}} @if($isRequired) <span class="required">*</span> @endif :</label>
    <input type="{{$type}}" id="{{$id}}" @class([
        "form-control",
        'parsley-error' => !empty($input_errors),
        ]) name="{{$name}}"
           value="{{old($name,$value)}}"
    >
    <x-back.error
        :items="$input_errors"
    />

</div>
