@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-eye me-2"></i>Show Book</h3>
        </div>
        
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" readonly>{{ $book->description  }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" value="{{ $book->price }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Author Name</label>
                    <input type="text" name="Authorname" class="form-control" value="{{ $author->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="Studentname" class="form-control" value="{{ isset($student) ? $student->name : 'Not assigned to student' }}" readonly>
                </div>

                <div class="d-flex justify-content-end">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection