
document.addEventListener('alpine:init', ()=>{
    Alpine.data('player', ()=>({
        playing: false,
        progress: 0,
        duration: 0,

        play(){
            this.playing = true
            this.$refs.audio.play()
        },
        pause(){
            this.playing = false
            this.$refs.audio.pause()
        },
        
    }))
})

function audioPlayer() {
    return {
      isPlaying: true,
      isRepeating: false,
          volume: 50,
      progress: 0,
      currentTime: '00:00',
      duration: '00:00',
      init() {
        this.$watch('isPlaying', (value) => {
          if (value) {
            this.$refs.audio.play();
          } else {
            this.$refs.audio.pause();
          }
        });
        this.$refs.audio.addEventListener('timeupdate', () => {
          this.updateProgress();
          this.updateTime();
        });
        this.$refs.audio.addEventListener('ended', () => {
          if (this.isRepeating) {
            this.$refs.audio.currentTime = 0;
            this.$refs.audio.play();
          } else {
            this.isPlaying = false;
          }
        });
        this.$refs.audio.addEventListener('loadedmetadata', () => {
          this.updateTime();
        });
      },
      playPause() {
        this.isPlaying = !this.isPlaying;
      },
      repeat() {
        this.isRepeating = !this.isRepeating;
      },
      setVolume() {
        this.$refs.audio.volume = this.volume / 100;
      },
      updateProgress() {
        this.progress = (this.$refs.audio.currentTime / this.$refs.audio.duration) * 100;
      },
      updateTime() {
        this.currentTime = this.formatTime(this.$refs.audio.currentTime);
        this.duration = this.formatTime(this.$refs.audio.duration);
      },
      seek() {
        this.$refs.audio.currentTime = (this.progress / 100) * this.$refs.audio.duration;
      },
      formatTime(seconds) {
        let minutes = Math.floor(seconds / 60);
        seconds = Math.floor(seconds % 60);
        if (minutes < 10) {
          minutes = '0' + minutes;
        }
        if (seconds < 10) {
          seconds = '0' + seconds;
        }
        return minutes + ':' + seconds;
      },
    };
  }