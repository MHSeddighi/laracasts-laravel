<div class="border d-flex flex-row m-2 border-radius-3" style="width:{{ $width }};">
    <div class="d-flex flex-column p-3 text-center g-2 border-radius-3 text-white fs-6 {{ isset($title)?"w-25":"w-100"}}"  style="{{ $imageBackground }}">
        <strong class="fs-5">{{ $type}} </strong>
        <img class="align-self-center" src="{{ $imageSource }}" width="96" height="96"/>
        @isset($content)
        <strong>{{ $difficulty }} Difficulty</strong>
        <div>
            <!-- difficulty show -->
        </div>
        @endisset
    </div>


    @isset($title)
    <div class="d-flex flex-column p-2 text-center g-2 w-75">
        <h4> {{ $title }}</h4>
        <p class="fs-6"> {{ $content }} </p>
        <div class="text-center">
            <img src="images/course cards/books-icon.svg"/><span>{{ $lessonNumbers }} lessons </span>
            <img src="images/course cards/clock-icon.svg"/><span>{{ $time }}</span>
        </div>
    </div>
    @endisset
</div>
