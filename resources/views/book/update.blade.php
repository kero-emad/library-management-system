@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-pen-to-square me-2"></i>Update Book</h3>
        </div>
        
        <div class="card-body">
            <form action="{{ route('book.edit') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $book->id }}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $book->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $book->description  }}</textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" step="0.01" value="{{ $book->price }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Author</label>
                    <select name="author_id" class="form-select">
                        <option disabled selected>Choose the author</option>
                        @foreach($authors as $author)
                           <option name='author_id' value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
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