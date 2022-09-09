const playPauseBtn=    document.querySelector('.play-pause-btn');
const video=           document.querySelector('.video-container video');
const videoContainer=  document.querySelector('.video-container');
const videoControlsContainer=  document.querySelector('.video-controls-container');
const fullscreenBtn=   document.querySelector('.fullscreen-btn');
const miniPlayerBtn=   document.querySelector('.mini-player-btn');
const theaterBtn=      document.querySelector('.theater-btn');
const volumeSlider=    document.querySelector('.volume-slider');
const volumeBtn=    document.querySelector('.volume-btn');
const volumeContainer= document.querySelector('.volume-container');
const speedBtn = document.querySelector('.speed-btn');
const root=document.documentElement;
var timeout=undefined;
const videoControlsBackground=document.querySelector('.video-controls-background');




function createClass(name,rules){
    let style=document.createElement('style');
    document.getElementsByTagName('head')[0].appendChild(style);
    if(!(style.sheet||{}).insertRule) 
        (style.styleSheet || style.sheet).addRule(name, rules);
    else
        style.sheet.insertRule(name+"{"+rules+"}",0);
}


videoContainer.addEventListener('mouseover',e=>{
    videoControlsBackground.style.visibility="visible";
    videoControlsBackground.style.transition="visibility 0.4s ease-in-out";

    timeout=setTimeout(function(){
        videoControlsBackground.style.visibility="hidden";
    },3000);
});

videoContainer.addEventListener('mouseout',e=>{
    clearTimeout(timeout);
    videoControlsBackground.style.visibility="hidden";
    videoControlsBackground.style.transition="visibility 0.4s ease-in-out";
});

playPauseBtn.addEventListener("click",e=>{
    playPauseBtn.classList.toggle("paused",!video.paused);
    video.paused ? video.play() : video.pause();
});

video.addEventListener('pause',e=>{
    playPauseBtn.classList.add("paused");
});

document.addEventListener("fullscreenchange", () => {
    videoContainer.classList.toggle("full-screen", document.fullscreenElement);
});

fullscreenBtn.addEventListener('click',(e)=>{
    if(document.fullscreenElement==null){
        videoContainer.requestFullscreen();
        video.style.width="100%";
        video.style.height="100%";
    }else{
        document.exitFullscreen();
        video.style.width="inherit";
        video.style.height="inherit";
    }
});

miniPlayerBtn.addEventListener("click",()=>{
    if(videoContainer.classList.contains('mini-player')){
        document.exitPictureInPicture();
    }else{
        video.requestPictureInPicture();
    }
});

video.addEventListener("enterpictureinpicture", () => {
    videoContainer.classList.add("mini-player")
}); 
  
  video.addEventListener("leavepictureinpicture", () => {
    videoContainer.classList.remove("mini-player")
});

//theater

theaterBtn.addEventListener("click",e=>{
    videoContainer.classList.toggle('theater');
});


// volume

volumeSlider.addEventListener('input',function(event){
    targetRange=event.target.value*100;
    video.volume=event.target.value;
    root.style.setProperty('--volume-slider-thumb-position',targetRange + '%');
});

video.addEventListener("volumechange",(e)=>{
    volumeSlider.value=video.volume;
    videoContainer.classList.toggle('muted',video.volume==0);
    volumeSlider.dispatchEvent(new Event("input"));
});

volumeBtn.addEventListener('click',e=>{
    videoContainer.classList.toggle('muted');
    if(videoContainer.classList.contains('muted')){
        video.volume=0;
    }else{
        video.volume=1;
    }
});

volumeContainer.addEventListener('mouseover',function(e){
    volumeSlider.style['display']="block";
    volumeSlider.style.animation="sliderPopup 0.3s linear";
});

volumeContainer.addEventListener("mouseout",function(e){
    volumeSlider.style['display']="block";
});

videoControlsContainer.addEventListener('mouseleave',function(e){
    volumeSlider.style['display']="none";
});


// speed 

speedBtn.addEventListener('click',e=>{

});

