@extends('layouts.admin')

@section('title', 'Service Details')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Service Details</h3>
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back to Services
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- TODO: Check if $service exists using @if(isset($service)) -->
                    <!-- TODO: Create a responsive table to display service details -->
                    <!-- TODO: Display service information: ID, Name, Description, Price, Provider, Category, Status, Created/Updated dates -->
                    <!-- TODO: Add status management dropdown for the service -->
                    <!-- TODO: Handle case when service is not found with @else -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
