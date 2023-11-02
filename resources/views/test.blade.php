<div class="main">
<x-menu></x-menu>

<div class="test">
    <form action="{{route('test-db', ['id'=>$test->id])}}" method="post">
        @csrf
        @foreach($questions as $key)
            <div style="padding-bottom: 20px">
            <p class="lead" style="margin-bottom: 5px">Вопрос номер {{$i+1}}</p>
            <p style="margin-bottom: 2px">{{$key->name}}</p>
            <input id="1{{$i}}" class="btn-check" type="radio" name="right{{$i}}" value="1" required autocomplete="off"><label class="btn btn-outline-primary" for="1{{$i}}">{{$key->answer1}}</label>
            <input id="2{{$i}}" class="btn-check" type="radio" name="right{{$i}}" value="2" autocomplete="off"><label class="btn btn-outline-primary" for="2{{$i}}">{{$key->answer2}}</label>
            <input id="3{{$i}}" class="btn-check" type="radio" name="right{{$i}}" value="3" autocomplete="off"><label class="btn btn-outline-primary" for="3{{$i}}">{{$key->answer3}}</label>
            <input id="4{{$i}}" class="btn-check" type="radio" name="right{{$i}}" value="4" autocomplete="off"><label class="btn btn-outline-primary" for="4{{$i}}">{{$key->answer4}}</label>
            </div>
            <input type="hidden" name="questions-value" value="{{++$i}}">
        @endforeach
        <button class="btn btn-primary" type="submit">Завершить тест</button>
    </form>
</div>
</div>

