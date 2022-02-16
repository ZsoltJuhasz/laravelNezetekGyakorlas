//3 ágú if bármilyen értékkel
$i = 30;
@if($i < 30 )
    Kisebb
@elseif($i = 30)
    Egyenlő
@else
    Nagyobb
@endif

//ciklus ami kiírja 1-100ig
@for($i = 0; $i<=100; i++)
    $i

//foreach
@foreach($users as $user)

@endforeach