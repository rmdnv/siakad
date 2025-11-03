<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .spinner {
        width: 80px;
        height: 80px;
        border: 8px solid transparent;
        border-top: 8px solid #a855f7;
        border-right: 8px solid #c084fc;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    #preloader.fade-out {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease;
    }
</style>
<div id="preloader">
    <div class="spinner"></div>
</div>
<script>
    window.addEventListener("load", () => {
        const preloader = document.getElementById('preloader');
        setTimeout(() => {
            preloader.classList.add('fade-out');
        }, 500);
    });
</script>