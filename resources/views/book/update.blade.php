@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-pen-to-square me-2"></i>Update Book</h3>
        </div>
        
        <div class="card-body">
            <form action="{{ route('book.edit') }}" method="post" enctype="multipart/form-data">
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
                    <input type="number" name="price" class="form-control" value="{{ $book->price }}" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" accept=".jpg, .png, .jpeg">
                </div>


                <div class="mb-3">
                    <label class="form-label">Author</label>
                    <select name="author_id" class="form-select">
                        <option selected name="author_id" value="{{ $book->authors->id }}">{{ $book->authors->name }}</option>
                        @foreach($authors as $author)
                           <option name='author_id' value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Student</label>
                    <select name="Student_id" class="form-select">
                        <option name="Student_id" selected value="{{ $book->students->id }}">{{ $book->students->name }}</option>
                        @foreach($students as $student)
                           <option name='Student_id' value="{{ $student->id }}">{{ $student->name }}</option>
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