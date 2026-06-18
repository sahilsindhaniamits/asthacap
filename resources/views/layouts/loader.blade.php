<style>
    .loaderContainer{
        position: absolute;
        top: 0;
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        z-index: 10000;
        background-color: white;
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .loader {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
    }

    @keyframes arrows {

        0%,
        100% {
            color: black;
            transform: translateY(0);
        }

        50% {
            color: #3AB493;
            transform: translateY(20px);
        }
    }

    .loader span {
        --delay: 0s;
        animation: arrows 1s var(--delay) infinite ease-in;
    }
</style>

<div class="loaderContainer" id="loader">
    <div class="loader">
        <span>↓</span>
        <span style="--delay: 0.1s">↓</span>
        <span style="--delay: 0.3s">↓</span>
        <span style="--delay: 0.4s">↓</span>
        <span style="--delay: 0.5s">↓</span>
    </div>
</div>