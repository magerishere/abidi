@if($session_message = session()->get('session_message'))
<div class="alert alert-{{session()->get('session_type')}} alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
    </button>
    {{$session_message}}
</div>
    @endif
