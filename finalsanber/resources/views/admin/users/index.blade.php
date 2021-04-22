@extends('admin.templates.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Kelola Data User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.users.create') }}"> Add New User</a>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info">
  <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info btn-sm mr-2" href="{{ route('admin.users.show',$user->id) }}" style="float: left;">Show</a>
       <a class="btn btn-primary btn-sm mr-2" href="{{ route('admin.users.edit',$user->id) }}" style="float: left;">Edit</a>
       {!! Form::open(['method' => 'DELETE','id' => 'deleteForm', 'route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['id' => 'delete', 'class' => 'btn btn-danger btn-sm']) !!}
        {!! Form::close() !!}
    </form>



    </td>
  </tr>
 @endforeach
</table>

{!! $data->render() !!}

@endsection

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href =  $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
            if (result.isConfirmed) {

                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                'Terhapus!',
                'Data berhasil dihapus!',
                'success'
                )
            }
        })

    })
</script>
