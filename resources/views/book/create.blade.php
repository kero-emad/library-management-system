@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-plus-circle me-2"></i>New Book</h3>
        </div>
        
        <div class="card-body">
            <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label">Price</label>
                    <input type="number" name="price" class="form-control" required>
                </div>


                <div class="mb-4">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" accept=".jpg, .png, .jpeg" required>
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


                <div class="mb-3">
                    <label class="form-label">Student</label>
                    <select name="Student_id" class="form-select">
                        <option disabled selected>Choose the student</option>
                        @foreach($students as $student)
                           <option name='Student_id' value="{{ $student->id }}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label class="form-label">Categories</label>
                    <select name="categories_ids[]" class="form-select" multiple>
                        <option disabled selected>Choose the categories</option>
                        @foreach($categories as $category)
                           <option name='categories_ids[]' value="{{ $category->id }}">{{ $category->name }}</option>
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