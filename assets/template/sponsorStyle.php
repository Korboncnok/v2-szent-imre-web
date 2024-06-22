<style>

.logo-slider {
    overflow: hidden;
    padding: 30px 0 0 0;
    white-space: nowrap;
    position: relative;
}

.logo-slider:hover .logos-slide {
    animation-play-state: paused;
}

.logos-slide {
    display: inline-block;
    animation: slide 45s infinite linear;
}

.logos-slide img {
    width: 229px;
    height: 104px;
    margin: 0 40px;
}

@keyframes slide {
    from {
        transform: translateX(0);
    }

    to {
        transform: translateX(-100%);
    }
}
</style>