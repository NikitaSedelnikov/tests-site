<div class="main">
<x-menu></x-menu>

<div align="center">
    <h2 >Поздравляем! Вы набрали {{$score}} @php if ($score == 1){echo 'балл';} elseif ($score == 2 || $score == 3 || $score == 4){ echo 'балла';} else {echo 'баллов';}@endphp!</h2>
    <p class="lead">{{$result}}</p>
</div>
</div>
