@extends('index')

@section('content')
        <row>
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <table class="hirdetes"><tr><th colspan='5'>Szentmiséink a héten</th></tr>
                    <?php
                    use App\Miserend;

                    $miserend = Miserend::all();

                    foreach ($miserend as $item){
                        echo "<tr><td>$item->date</td><td>$item->time</td><td>$item->story</td><td>$item->type</td><td>$item->priest</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </row>
@endsection