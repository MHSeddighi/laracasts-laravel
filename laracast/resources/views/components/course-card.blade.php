<div class="border-radius-2 border-1 d-flex flex-row">
    <div class="d-flex flex-column p-2 text-center w-25 g-2" style="background: #000;background: {{ $imageBackground }};">
        <strong>{{ $type}} </strong>
        <img src="{{ $imageSource }}"/>
        <strong>{{ $difficulty }} Difficulty</strong>
        <div>
            <!-- difficulty show -->
        </div>
    </div>
    

    @isset($title)
    <div class="d-flex flex-column p-2 text-center w-75 g-2">
        <h3> {{ $title }}</h3>
        <p> {{ $content }} </p>
        <div class="text-center">
            <img src="images/course cards/books-icon.svg"/><span>{{ $lessonNumbers}} lessons </span>
            <img src="images/course cards/clock-icon.svg"/><span>{{ $time }}</span>
        </div>
    </div>
    @endisset
</div>