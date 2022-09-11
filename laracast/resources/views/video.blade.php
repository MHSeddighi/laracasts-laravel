<div class="video-container">
    <div class="video-controls-background">
        <div class="video-handlers">
        <div class="timeline-container">
            <div class="empty">
                <div class="downloaded">
                    <div class="thumb"></div>
                    <div class="slider">

                    </div>
                </div>
            </div>
        </div>
        <div class="video-controls-container d-flex align-items-center gap-1">
            <div class="controls ">
                <button class="play-pause-btn paused ">
                    <svg class="play-icon p-1" width="24" height="24">
                        <use xlink:href="{{ asset('images/play-button2.svg#play-button2') }}"></use>
                    </svg>

                    <svg class="pause-icon" width="24" height="24">
                        <path fill="currentColor"
                            d="M8 5a2 2 0 0 0-2 2v10a2 2 0 1 0 4 0V7a2 2 0 0 0-2-2zm8 0a2 2 0 0 0-2 2v10a2 2 0 1 0 4 0V7a2 2 0 0 0-2-2z" />
                    </svg>
                </button>
            </div>

            <div class="volume-container d-flex align-items-center">
                <button class="volume-btn">
                    <svg class="volume-high-icon" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M6 7l8-5v20l-8-5v-10zm-6 10h4v-10h-4v10zm20.264-13.264l-1.497 1.497c1.847 1.783 2.983 4.157 2.983 6.767 0 2.61-1.135 4.984-2.983 6.766l1.498 1.498c2.305-2.153 3.735-5.055 3.735-8.264s-1.43-6.11-3.736-8.264zm-.489 8.264c0-2.084-.915-3.967-2.384-5.391l-1.503 1.503c1.011 1.049 1.637 2.401 1.637 3.888 0 1.488-.623 2.841-1.634 3.891l1.503 1.503c1.468-1.424 2.381-3.309 2.381-5.394z" />
                    </svg>
                    <svg class="mute-icon" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19 7.358v15.642l-8-5v-.785l8-9.857zm3-6.094l-1.548-1.264-3.446 4.247-6.006 3.753v3.646l-2 2.464v-6.11h-4v10h.843l-3.843 4.736 1.548 1.264 18.452-22.736z" />
                    </svg>

                </button>
                <input class="volume-slider" type="range" min="0" max="1" step="any" value="1">
            </div>


            <div class="duration-container">
                <div class="current-time mx-1">{{ convertSecondsToClockTime(($percent/100)*$video->duration) }}</div>
                /
                <div class="total-time mx-1">{{ convertSecondsToClockTime($video->duration) }}</div>
            </div>

            <button class="speed-btn">
                1.0x
            </button>
            <button class="captions-btn">
                <svg viewBox="0 0 24 24" height="27" wdith="27">
                    <path fill="currentColor"
                        d="M18,11H16.5V10.5H14.5V13.5H16.5V13H18V14A1,1 0 0,1 17,15H14A1,1 0 0,1 13,14V10A1,1 0 0,1 14,9H17A1,1 0 0,1 18,10M11,11H9.5V10.5H7.5V13.5H9.5V13H11V14A1,1 0 0,1 10,15H7A1,1 0 0,1 6,14V10A1,1 0 0,1 7,9H10A1,1 0 0,1 11,10M19,4H5C3.89,4 3,4.89 3,6V18A2,2 0 0,0 5,20H19A2,2 0 0,0 21,18V6C21,4.89 20.1,4 19,4Z" />
                </svg>
            </button>
            <button class="theater-btn">
                <svg class="tall" viewBox="0 0 24 24" height="24" wdith="24">
                    <path fill="currentColor"
                        d="M19 6H5c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H5V8h14v8z" />
                </svg>
                <svg class="wide" viewBox="0 0 24 24" height="24" wdith="24">
                    <path fill="currentColor"
                        d="M19 7H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm0 8H5V9h14v6z" />
                </svg>
            </button>
            <button class="mini-player-btn">
                <svg viewBox="0 0 24 24" height="26" wdith="26">
                    <path fill="currentColor"
                        d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zm-10-7h9v6h-9z" />
                </svg>
            </button>
            <button class="fullscreen-btn">
                <svg class="open" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M24 9h-2v-5h-7v-2h9v7zm-9 13v-2h7v-5h2v7h-9zm-15-7h2v5h7v2h-9v-7zm9-13v2h-7v5h-2v-7h9z" />
                </svg>

                <svg class="close" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18 3h2v4h4v2h-6v-6zm6 12v2h-4v4h-2v-6h6zm-18 6h-2v-4h-4v-2h6v6zm-6-12v-2h4v-4h2v6h-6z" />
                </svg>
            </button>
        </div>
        
    </div>
</div>
    <video class="p-4" width="inherit" height="inherit" preload="auto">
        <source src="{{ asset('storage/learn-laravel-forge-2022-Edition-01-what-is-laravel-forge.mp4') }}"
            type="video/mp4">
        Your browser does not support the video tag.
    </video>

</div>