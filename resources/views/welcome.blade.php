{{--
@if($itemCount = count($items))
    <p>{{$itemCount}} kinds of fruits are here.</p>
@else
    <p>There's nothing!</p>
@endif
------------------------------------------------
<ul>
    @forelse($items as $item)
        <li>{{ $item }}</li>
    @empty
        <li>There's nothing!</li>
    @endforelse
</ul>
--------------------------------------------

@section('content')
    <p>Content Section</p>
@endsection

----------------------------------------------
--}}
@extends('layouts.master')

@section('style')
    <style>
        body {background: green; color: white;}
    </style>
@endsection

@section('content')
    @include('partials.footer')
@endsection

@section('script')
    <script>
        alert("Script Section");
    </script>
@endsection


