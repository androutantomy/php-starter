@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('breadcrumb')
    <x-dashboard.breadcrumb :title="'Dashboard'" :page="'Dashboard'" :active="'Dashboard'" :route="route('dashboard.index')" />
    <div class="card card-height-100 table-responsive">
        <!-- cardheader -->
        <div class="card-header border-bottom-dashed align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Test</h4>
            <div class="flex-shrink-0">
            </div>
        </div>
        <!-- end cardheader -->

    </div>
@endsection
