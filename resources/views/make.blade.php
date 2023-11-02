<div class="main">
<x-menu>
</x-menu>
<div class="make">
<div class="input-group mb-3 w-25">
    <form id="question" action="{{ url()->current() }}" method="get">
        <label for="questions" class="form-label">Количество вопросов:</label>
        <input type="number" name="questions" id="questions" value="1" min="1" class="form-control">
        <label for="questions" class="form-label">Количество вариантов результатов:</label>
        <input type="number" name="results" id="questions" value="2" min="2" class="form-control">
        <input class="btn btn-primary" type="submit" form="question" value="Показать" style="margin-top: 5px">
    </form>
</div>

    <form id="test" action="{{route('test-make-db')}}" method="post">
    @csrf
        <div style="display: flex; justify-content: space-around">
    <div class="input-group mb-3 w-25" >
        <label for="title" class="form-label" style="padding-right: 10px">Введите название теста:</label>
        <input type="text" id="title" name="title" placeholder="Название" class="form-control" required>
    </div>
    <div class="input-group mb-3 w-25">
        <label for="description" class="form-label" style="padding-right: 10px">Введите описание теста:</label>
        <textarea id="description" name="description" placeholder="Описание" class="form-control" required></textarea>
    </div>
        <input type="hidden" name="questions" value="{{request()->get('questions')}}">
        <input type="hidden" name="results" value="{{request()->get('results')}}">
        </div>
</div>
@if(request()->get('questions'))
    <div class="create-line"></div>
    @for($i=0; $i < request()->get('questions'); $i++)
        <x-make-questions :i="$i"></x-make-questions>
    @endfor
@endif
        @if(request()->get('results'))
            @for($i=1; $i <= request()->get('results'); $i++)
                <x-result-options :i="$i"></x-result-options>
            @endfor
        @endif

        @if(request()->get('questions'))
        <div align="center">
        <button class="btn btn-primary" type="submit" form="test">Завершить создание теста</button>
        </div>
        @endif
    </form>
</div>


