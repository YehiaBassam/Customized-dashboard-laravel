@extends('layouts.dashboard')

@section('content')
<a href="{{route('posts.create')}}" type="button" class="btn btn-success mb-3">Create Notes</a>
<h3 align="center">Total Data : <span id="total_records">{{$total_row}}</span></h3>
    <table class="table table-striped table-dark text-center">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">posted by</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
            @if ($total_row > 0)
            @foreach ($posts as $key => $row)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->user ? $row->user->name : 'user not found'}}</td>
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
            
        </tbody>
    </table>

    <div class="ml-3">
        {{ $posts->links() }}
    </div>                

<script>
$(document).ready(function(){

    function fetch_customer_data(query = '')
    {
    $.ajax({
    url:"{{ route('posts.search') }}",
    method:'GET',
    data:{query:query},
    dataType:'json',
    success:function(data)
    {
    $('thead').html(data.table_header);
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
    }
    })
    }

    $(document).on('keyup', '#search', function(){
    var query = $(this).val();
    fetch_customer_data(query);
    
    });
});
</script>
    @endsection