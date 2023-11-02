<div class="main">
<x-menu>
</x-menu>
    @foreach($tests as $test)
        <x-tests :test="$test"></x-tests>
    @endforeach
<div class="create-line"></div>
</div>
