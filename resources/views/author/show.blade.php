@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-eye me-2"></i>Author Details</h3>
        </div>
        
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $author->id }}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $author->name }}" readonly>
                </div>

                <div class="mb-4">
                    <label class="form-label">Email</label>
                    <input type="text" name="name" class="form-control" value="{{ $author->email }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Job description</label>
                    <textarea name="jobdescription" class="form-control" rows="4" readonly>{{ $author->jobdescription  }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bio</label>
                    <textarea name="bio" class="form-control" rows="4" readonly>{{ $author->bio  }}</textarea>
                </div>

                

                <div class="d-flex justify-content-end">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection