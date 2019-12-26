<table class="table">
    <thead>
    <tr>
        @foreach($table as $arrs)
        <th scope="col">{{$arrs}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @for($i=1;$i<count($arr);$i++)
        <tr>
            @foreach($arr[$i] as $ars)
                <th scope="row">{{ $ars }}</th>
            @endforeach
        </tr>
    @endfor
    </tbody>
</table>
