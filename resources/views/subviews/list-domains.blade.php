<table class="table">
    <thead>
    <tr>
        <th scope="col">Site</th>
        <th scope="col">Ip</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($result as $item)
        <tr>
        <td>{{ $item->domain  }}</td>
        <td>{{ $item->ip }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
