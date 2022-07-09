@extends("layouts.app")
@section("title","about Us")

@section('content')
    <h1>About Us</h1>

    @php $no = 1 @endphp
    @foreach( $arr as $about )
        <div class="card w-25 bg-base-100 shadow-xl mt-4">
            <div class="card-body">
                {{ $no . ".". $about['data']['alamat'] }}
            </div>
        </div>
   @php $no++ @endphp
    @endforeach
@endsection