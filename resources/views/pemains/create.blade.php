@extends('pemains.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Add New Pemain
                </div>
                <div class="float-end">
                    <a href="{{ route('pemains.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pemains.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">Id</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}">
                            @if ($errors->has('id'))
                                <span class="text-danger">{{ $errors->first('id') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nama_pemain" class="col-md-4 col-form-label text-md-end text-start">Nama Pemain</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('nama_pemain') is-invalid @enderror" id="nama_pemain" name="nama_pemain" value="{{ old('nama_pemain') }}">
                            @if ($errors->has('nama_pemain'))
                                <span class="text-danger">{{ $errors->first('nama_pemain') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="no_punggung" class="col-md-4 col-form-label text-md-end text-start">No Punggung</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('no_punggung') is-invalid @enderror" id="no_punggung" name="no_punggung" value="{{ old('no_punggung') }}">
                            @if ($errors->has('no_punggung'))
                                <span class="text-danger">{{ $errors->first('no_punggung') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="posisi" class="col-md-4 col-form-label text-md-end text-start">Posisi</label>
                        <div class="col-md-6">
                            <textarea class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi">{{ old('posisi') }}</textarea>
                            @if ($errors->has('posisi'))
                                <span class="text-danger">{{ $errors->first('posisi') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Pemain">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection