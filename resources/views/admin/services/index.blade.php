@extends('layouts.admin')

@section('title', 'Services Management')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Services Management</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- TODO: Create a responsive table to display services -->
                    <!-- Table headers: ID, Name, Description, Provider, Category, Price, Status, Actions -->

                    <!-- TODO: Loop through $services collection using @forelse -->
                    <!-- TODO: Display service information in table rows -->
                    <!-- TODO: Add status management dropdown for each service -->
                    <!-- TODO: Add view action button for each service -->
                    <!-- TODO: Handle empty services collection with @empty -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
