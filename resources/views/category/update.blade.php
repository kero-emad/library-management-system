@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-pen-to-square me-2"></i>Update Category</h3>
        </div>
        
        <div class="card-body">
            <form action="{{ route('category.edit') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $category->description  }}</textarea>
                </div>


                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection