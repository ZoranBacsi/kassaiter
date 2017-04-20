@extends('index')

@section('content')
    <div class="container">
        <ol>
        <?php
            use App\Hirdetes;

            $hirdetesek = Hirdetes::all();

            foreach ($hirdetesek as $item){
                echo "<li> $item->story </li>";
            }
        ?>
        </ol>
    </div>
@endsection