<div class="border d-flex flex-row my-2 border-radius-3 bg-white font-poppins" style="width:{{ $width }};">
    <div class="d-flex flex-column p-2 text-center border-radius-3 text-white fs-6 font-semibold {{ $cardType=="small" ?"w-100":"w-33"}}" style="background:{{ $background }}">
        @if($cardType === "big")
        <button class="font-size-11 type-btn rounded-pill m-2">{{ $course->category}} </button>
        @endif
        <a href="/series/{{$course==null?'':$course->slug }}">
            <img class="align-self-center {{ $cardType=="big"? "mt-4 mb-5" :""}}" src="{{ $course == null ?
                 "https://laracasts.nyc3.cdn.digitaloceanspaces.com/series/thumbnails/svelte-crash-course.png" : $course->image->src}}" width="96" height="96" />
        </a>
        @if($cardType === "big")
        <strong class="font-size-11">{{ $course->difficulty }} <br> Difficulty</strong>
        <div class="d-flex justify-content-center gap-1 mt-2 mb-1">
            <span class="d-inline-block w-2 h-1 rounded bg-white"></span>
            <span class="d-inline-block w-2 h-1 rounded {{ strcasecmp($course->difficulty,"beginner")!=0 ? "bg-white":"bg-secondary opacity-50" }}"></span>
            <span class="d-inline-block w-2 h-1 rounded {{ ((strcasecmp($course->difficulty,"beginner")!=0) and (strcasecmp($course->difficulty,"intermediate")!=0)) ? "bg-white":"bg-secondary opacity-50" }}"></span>
        </div>
        @endif
    </div>


    @if($cardType != "small")
    <div class="m-3 mb-2 w-67 d-flex flex-column gap-1 border-radius-3 position-relative justify-content-between play-button {{ isset($course->description) ? "gap-4":"" }}">
        <a href="/series/{{$course->slug }}" class="font-cabin fs-5 underline-hover text-black text-decoration-none"> {{ $title }}</a>
        @if($cardType === "big")
        <p class="font-size-12 overflow-hidden max-h-100"> {{ $course->description }} </p>
        @endif
        <button class="btn rounded-pill d-none" id="play-button" onClick="getCoursePage('{{$course->slug}}')">
            <svg class="align-middle me-1" width="15px" height="15px" fill="#000">
                <use xlink:href="images/play-button.svg#Capa_1"></use>
            </svg>
            <span>Play</span>
        </button>
        <div class="font-gray font-size-10 p-2">
            <svg width="12" height="12" fill="#666">
                <use xlink:href="{{asset('images/course cards/books-icon.svg#books')}}"> </use>
            </svg>
            <span class="me-4 ms-1"> {{ $course->lessons }} lessons</span>
            <svg width="12" height="12" fill="#666">
                <use xlink:href="{{asset('images/course cards/clock-icon.svg#clock')}}"> </use>
            </svg>
            <time class="ms-1"> {{ $courseLength }} </time>
        </div>
    </div>
    @endif
    <script defer>
        function getCoursePage(courseSlug) {
            window.location.href = `/series/${courseSlug}`;
            // history.pushState('','',`/series/${courseTitle}`)
        }
    </script>
</div>
