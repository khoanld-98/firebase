<table class="table">
    <thead>
    <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">content</th>
            <th scope="col">content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($value as $key => $values)
        <tr>
            <th>1</th>
           @foreach($values as $keys => $valuess )
                <th scope="row">{{ $valuess }}</th>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
