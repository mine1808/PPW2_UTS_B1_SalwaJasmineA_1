@extends('pemains.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">List Pemain</div>
            <div class="card-body">
                <a href="{{ route('pemains.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Pemain</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Pemain</th>
                        <th scope="col">No Punggung</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($pemains as $pemain)
                        <tr>
                            <td>{{ $pemain->id }}</td>
                            <td>{{ $pemain->nama_pemain }}</td>
                            <td>{{ $pemain->no_punggung }}</td>
                            <td>{{ $pemain->posisi }}</td>
                            <td>
                                <form action="{{ route('pemains.destroy', $pemain->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('pemains.show', $pemain->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('pemains.edit', $pemain->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Do you want to delete this pemain?');"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Pemain Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $pemains->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection