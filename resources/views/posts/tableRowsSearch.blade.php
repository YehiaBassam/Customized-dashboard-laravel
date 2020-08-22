@if ($total_row > 0)
@foreach ($posts as $key => $row)
<tr>
    <td>{{$key + 1}}</td>
    <td>{{$row->title}}</td>
    <td>{{$row->description}}</td>
    <td>{{ $row->created_at }}</td>
    <td>
    <a href='{{route('posts.show',$row->id)}}' class="btn btn-info">View</a>
    <a href='{!!route('posts.edit',['post'=>$row->id])!!}' class="btn btn-warning">Edit</a>
    <form method="post" action="{!!route('posts.destroy',['post'=>$row->id])!!}" class="d-inline">
    @csrf
    @method('delete')
        <button type="submit" class="btn btn-danger" id="deletebtn" onclick="return confirm('Are you sure to delete ?')">Delete</button>
    </form>
    </td>
</tr>
@endforeach

@else
    <tr>
        <td align="center" colspan="5">No Data Found</td>
    </tr>
@endif
