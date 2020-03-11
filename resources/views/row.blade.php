@foreach ($row as $arr)
    @foreach ($arr as $item)
        @if ($item->isActive)
        <tr>
            <td>{{$item->age}}</td>
            <td>{{$item->eyeColor}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->company}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
        </tr>
        @endif
    @endforeach
@endforeach
