@include('flash-message')
@include('layout.header', ['title' => 'Detail'])
<br>
<br>
<br>
<div class="container pt-4 bg-white">
    <h2>Postingan Anda</h2>
    <br>
    <a href="{{ route('admins.create')}}"><button class="btn btn-primary mb-3">Buat Postingan</button></a>


            
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Image</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach ($admins as $admin)   
            <tr>
                <td>{{$admin->title}}</td>
                <td>{{$admin->slug}}</td>
                <td><img src="{{asset('storage/' . $admin->image)}}" style="width: 50px;"/></td>
                <td>{{$admin->body}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('admins.edit', [$admin]) }}" >
                            <button class="btn btn-primary mr-2">
                                <i class="fa fa-edit"></i>Edit
                            </button>
                        </a>
                    
                        <form action="{{ route('admins.destroy', [$admin]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                    
                </td>
            </tr>
        @endforeach
    </table>
</div>
@include('layout.footer')