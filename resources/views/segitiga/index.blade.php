@extends('layouts.dashboard.app')

@section('title', 'Program Segitiga')

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Halaman Program Segitiga</h4>
        <div class="flex-shrink-0">
            <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                data-bs-target="#modal-form-add-permission">
                <i class="ri-add-line"></i>
                Add
            </button>
        </div>
    </div>
    <!-- end cardheader -->
    <div class="card-body">
        <div class="text-center">
            @php
                for ($i = 1; $i <= $numbers; $i++) {
                    for ($j = $numbers - 1; $j >= $i; $j--) {
                        echo '&nbsp;&nbsp;';
                    }

                    for ($k = 1; $k <= $i; $k++) {
                        echo "$k";
                    }
                    echo '<br>';
                }
            @endphp
            <form action="{{ route('segitiga.index') }}" method="get">
                <div class="row">
                    <div class="col-md-6 row">
                        <input type="text" name="numbers" id="numbers" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-block btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
