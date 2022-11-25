
                <form action="{{$action}}"  @class([
        "form-horizontal",
        "form-label-left",
        "d-inline-table" => $isFlat
        ]) method="{{$method}}" >
                    @csrf
                    {{$slot}}
                    @unless($isFlat)
                    <div class="form-group">
                            <button type="submit" class="btn btn-success">ارسال</button>
                            <button type="button" class="btn btn-secondary">انصراف</button>
                    </div>
                    @endunless

                </form>

