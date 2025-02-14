@extends('app')
@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0"><i class="fas fa-eye me-2"></i>Student Details</h3>
        </div>
        
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $student->id }}">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $student->name }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $student->email }}" readonly>
                </div>

                <div class="mb-4">
                    <label class="form-label">phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $student->phone }}" readonly>
                </div>


                <div class="mt-4">
                    <label class="form-label">Books borrowed by {{ $student->name }}</label>
                    @if($student->books->isEmpty())
                        <p>No books available for this student</p>
                    @else
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student->books as $book)
                                    <tr>
                                        <td>{{ $book->name }}</td>
                                        <td>{{ ($book->description) }}</td>
                                        <td>{{ $book->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>

                <div class="d-flex justify-content-end">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection