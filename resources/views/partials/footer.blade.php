{{--
@section('content')
@include('partials.footer')
@endsection
--}}

@section('script')
    @parent
    <script>
        alert("Script Section");
    </script>
@endsection