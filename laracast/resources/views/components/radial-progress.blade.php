<div class="outer overflow-visible flex-grow-0 flex-shrink-0 position-relative" id="episode-{{ $episode->number }}">
    @if(strcasecmp($page,"episode")==0)
    @if($episodeNumber==$episode->number)
    <div class="inner transform-center" style="background:#B171BF;">
        <div class="opacity-1 transform-center" id="crp-click">
            <svg fill="#fff" width="15px" height="15px" fill="#fff">
                <use xlink:href="{{ asset('images/play-button2.svg') }}#play-button2"></use>
            </svg>
        </div>
    </div>
    @elseif($episode->is_public==false)
    <div class="inner transform-center" style="background:#B171BF;">
        <div class=" opacity-1 transform-center" id="crp-hover">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#fff">
                <path
                    d="M17 9.761v-4.761c0-2.761-2.238-5-5-5-2.763 0-5 2.239-5 5v4.761c-1.827 1.466-3 3.714-3 6.239 0 4.418 3.582 8 8 8s8-3.582 8-8c0-2.525-1.173-4.773-3-6.239zm-8-4.761c0-1.654 1.346-3 3-3s3 1.346 3 3v3.587c-.927-.376-1.938-.587-3-.587s-2.073.211-3 .587v-3.587zm4 11.723v2.277h-2v-2.277c-.596-.347-1-.984-1-1.723 0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723z" />
            </svg>
        </div>
    </div>
    @else
    <div class="inner transform-center  success-hover">
        <div class="transform-center" id="crp-number">{{ sprintf("%02d",$episode->number) }}</div>
        <div class="opacity-0 transform-center" id="crp-hover">
            <svg fill="#fff" width="20px" height="20px">
                <use xlink:href="{{ asset('images/success.svg') }}#success"></use>
            </svg>
        </div>
    </div>
    @endif
    @elseif(strcasecmp($page,"course")==0)
    @if($percent==100)
    <div class="inner transform-center">
        <div class="opacity-0 transform-center" id="crp-click">
            <svg fill="#fff" width="20px" height="20px">
                <use xlink:href="{{ asset('images/success.svg') }}#success"></use>
            </svg>
        </div>
    </div>
    @else
    <div class="inner transform-center  success-hover">
        <div class="transform-center " id="crp-number">{{ sprintf("%02d",$episodeNumber) }}</div>
        <div class="opacity-0 transform-center" id="crp-hover">
            <svg fill="#fff" width="20px" height="20px">
                <use xlink:href="{{ asset('images/success.svg') }}#success"></use>
            </svg>
        </div>
    </div>
    @endif
    @endif
</div>

<script defer>
    percent = {{ Js:: from($percent) }};
    if (percent > 0) {
        episodeNumber = {{ Js:: from($episode -> number) }};
        degree = percent * 360 / 100;
        outer = document.querySelector(`#episode-${episodeNumber}`);
        outer.style.background = `conic-gradient(red 0deg,red ${degree}deg,black ${degree}deg)`;
    }

</script>