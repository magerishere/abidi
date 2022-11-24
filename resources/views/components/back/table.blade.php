<table id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
    <tr>
        @foreach($heads as $head)
            <th>{{$head}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    {{$slot}}
    </tbody>
</table>
