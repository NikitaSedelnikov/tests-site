<div style="padding-top: 10px">
<table>
    <tr>
        <td colspan="2">
            <input class="form-control" type="text" name="{{$i}}-question" id="question" placeholder="Название вопроса" required >
        </td>
    </tr>
    <tr>
        <td>
            <label for="1" class="form-label">Какой ответ верный?</label>
            <input class="btn-check" type="radio" id="1{{$i}}" name="right{{$i}}" value="1" required autocomplete="off">
            <label class="btn btn-outline-secondary" for="1{{$i}}">Верный</label>
        </td>
        <td>
            <input type="text" name="{{$i}}-answer1" id="answer" placeholder="Введите вариант ответа" class="form-control" required>
        </td>
    </tr>
    <tr>
        <td align="right">
            <input class="btn-check" type="radio" id="2{{$i}}" name="right{{$i}}" value="2" autocomplete="off">
            <label class="btn btn-outline-secondary" for="2{{$i}}">Верный</label>
        </td>
        <td>
            <input type="text" name="{{$i}}-answer2" id="answer" placeholder="Введите вариант ответа" class="form-control" required>
        </td>
    </tr>
    <tr>
        <td align="right">
            <input class="btn-check" type="radio" id="3{{$i}}" name="right{{$i}}" value="3" autocomplete="off">
            <label class="btn btn-outline-secondary" for="3{{$i}}">Верный</label>
        </td>
        <td>
            <input type="text" name="{{$i}}-answer3" id="answer" placeholder="Введите вариант ответа" class="form-control" required>
        </td>
    </tr>
    <tr>
        <td align="right">
            <input class="btn-check" type="radio" id="4{{$i}}" name="right{{$i}}" value="4" autocomplete="off">
            <label class="btn btn-outline-secondary" for="4{{$i}}">Верный</label>
        </td>
        <td>
            <input type="text" name="{{$i}}-answer4" id="answer" placeholder="Введите вариант ответа" class="form-control" required>
        </td>
    </tr>
</table>
</div>
