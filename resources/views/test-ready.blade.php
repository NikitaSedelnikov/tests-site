<div class="main">
<x-menu></x-menu>
<div align="center">
    <h2>{{$test->title}}</h2>
    <h4>{{$test->description}}</h4>
</div>
<div align="center">
    <a class="btn btn-primary" href="{{ route('test', ['id'=>$test->id]) }}" style="font-size:20px;">Начнем</a>
</div>
</div>
