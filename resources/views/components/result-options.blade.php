<div style="padding-top: 10px">
    <table>
        <tr>
            <td>
                <div class="row">
                <div class="col-sm" style="flex: 0 0 40px; padding: 0px;">
                <span> Диапазон баллов </span>
                </div>
                @if($i == 1)
                    <div class="col-sm"><input type="number" name="{{$i}}-ot" value="0" readonly class="form-control"></div>
                    <div class="col-sm" style="flex: 0 0 0px; padding: 0px;"><span> - </span></div>
                    <div class="col-sm"><input type="number" name="{{$i}}-do" placeholder="0" required class="form-control"></div>
                    <div class="col-sm"><textarea name="{{$i}}-result" placeholder="Результат" required class="form-control"></textarea></div>
                @elseif($i == (request()->get('results')))
                    <div class="col-sm"><input type="number" name="{{$i}}-ot" placeholder="0" required class="form-control"></div>
                    <div class="col-sm" style="flex: 0 0 0px; padding: 0px;"><span> - </span></div>
                    <div class="col-sm"><input type="number" name="{{$i}}-do" value="{{request()->get('questions')}}" readonly class="form-control"></div>
                    <div class="col-sm"><textarea name="{{$i}}-result" placeholder="Результат" required class="form-control"></textarea></div>
                @else
                    <div class="col-sm"><input type="number" name="{{$i}}-ot" placeholder="0" required class="form-control"></div>
                    <div class="col-sm" style="flex: 0 0 0px; padding: 0px;"><span> - </span></div>
                    <div class="col-sm"><input type="number" name="{{$i}}-do" placeholder="0" required class="form-control"></div>
                    <div class="col-sm"><textarea name="{{$i}}-result" placeholder="Результат" required class="form-control"></textarea></div>
                @endif
                </div>
            </td>
        </tr>
    </table>
</div>
