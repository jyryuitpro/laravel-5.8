@extends('layout')

@section('title')
    Laravel
@endsection

@section('content')
    Laravel
@endsection

@section('data')
    <ul>
    <?php foreach ($books as $book): ?>
        <li><?php echo $book; ?></li>
    <?php endforeach; ?>
    </ul>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection
