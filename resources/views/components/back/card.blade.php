<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{$title}}
                </h2>
                @if(isset($header_slot))
                    {{$header_slot}}
                    @endif
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>
                {{$slot}}
            </div>
        </div>
    </div>
</div>
