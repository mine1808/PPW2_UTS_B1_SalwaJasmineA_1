@extends('pemains.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Pemain Information
                </div>
                <div class="float-end">
                    <a href="{{ route('pemains.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pemain->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="nama_pemain" class="col-md-4 col-form-label text-md-end text-start"><strong>Nama Pemain:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pemain->nama_pemain }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="no_punggung" class="col-md-4 col-form-label text-md-end text-start"><strong>No Punggung:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pemain->no_punggung }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="posisi" class="col-md-4 col-form-label text-md-end text-start"><strong>Posisi:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $pemain->posisi }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection