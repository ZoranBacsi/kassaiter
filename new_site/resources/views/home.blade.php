@extends('index')

@section('content')
        <div class="row">
            <div class="col-lg-6">
                <h2>Aktuális hirdetéseink</h2>
                <ol>
                    @foreach ($hirdetes as $item)
                        <li>{{$item->story}}</li>
                    @endforeach
                </ol>
            </div>
            <div class="col-lg-6">
                <div class="row"><h2>Szentmiséink a héten</h2></div>

                @foreach ($miserend as $item)
                    @if($item->id%2 ==0)
                        <div class='row table-colored'>
                    @else
                        <div class='row'>
                    @endif
                            <div class='col-lg-2'>{{$item->date}}</div>
                            <div class='col-lg-1'>{{$item->time}}</div>
                            <div class='col-lg-5'>{{$item->story}}</div>
                            <div class='col-lg-1'>{{$item->type}}</div>
                            <div class='col-lg-3'>{{$item->priest}}</div>
                        </div>
                @endforeach
            </div>
        </div>
@endsection