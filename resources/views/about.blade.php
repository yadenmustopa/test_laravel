@foreach ( $arr as $item )
    @if( $loop->first)
        {{-- @{{ $item["alamat"] }} --}}
    @endif
        
@endforeach
<h1>This is about page</h1>
