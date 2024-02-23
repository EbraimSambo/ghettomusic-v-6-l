document.addEventListener('alpine:init', () => {
    Alpine.data('player', () => ({
        playing: false,
        progress: 0,
        duration: 0,

        play() {
            this.playing = true;
            this.$refs.audio.play();
        },
        pause() {
            this.playing = false;
            this.$refs.audio.pause();
        },
        stop() {
            this.playing = false;
            this.$refs.audio.currentTime = 0; // Volta para o início
            this.$refs.audio.pause();
        },
        setVolume(volume) {
            this.$refs.audio.volume = volume;
        },
        updateProgress() {
            const currentTime = this.$refs.audio.currentTime;
            const totalDuration = this.$refs.audio.duration;
            this.progress = (currentTime / totalDuration) * 100;
        },
    }));
});
