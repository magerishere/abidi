<div class="radio">
    <label>
        <div class="iradio_flat-green checked" style="position: relative;"><input type="radio" class="flat"
                                                                                  @checked($isChecked) name="{{$name}}"
                                                                                  value="{{$value}}"
                                                                                  style="position: absolute; opacity: 0;">
            <ins class="iCheck-helper"
                 style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
        </div> {{$label}}
    </label>
</div>
