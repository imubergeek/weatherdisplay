<style>
    /* xmas snowfall */

    html:before {
        content: '';
        position: absolute;
        z-index: 0;
        left: -500px;
        top: -1000px;
        right: 0;
        bottom: 0;
        background: url(_img/s1.png);
        -webkit-animation: snow-1 10s linear infinite;
        animation: snow-1 10s linear infinite;
    }

    html:after {
        content: '';
        position: absolute;
        z-index: -1;
        left: -100px;
        top: -400px;
        right: 0;
        bottom: 0;
        background: url(_img/s2.png);
        -webkit-animation: snow-2 10s linear infinite;
        animation: snow-2 10s linear infinite;
    }

    body:after {
        content: '';
        position: absolute;
        z-index: -1;
        left: 0;
        top: -300px;
        right: -100px;
        bottom: 0;
        background: url(_img/s3.png);
        -webkit-animation: snow-3 10s linear infinite;
        animation: snow-3 10s linear infinite;
    }

    @keyframes snow-1 {
        0% {
            transform: translate3d(0, 0, 0)
        }
        50% {
            transform: translate3d(500px, 500px, 0)
        }
        100% {
            transform: translate3d(500px, 1000px, 0)
        }
    }

    @-webkit-keyframes snow-1 {
        0% {
            -webkit-transform: translate3d(0, 0, 0)
        }
        50% {
            -webkit-transform: translate3d(500px, 500px, 0)
        }
        100% {
            -webkit-transform: translate3d(500px, 1000px, 0)
        }
    }

    @keyframes snow-2 {
        0% {
            transform: translate3d(0, 0, 0)
        }
        50% {
            transform: translate3d(100px, 200px, 0)
        }
        100% {
            transform: translate3d(0, 400px, 0)
        }
    }

    @-webkit-keyframes snow-2 {
        0% {
            -webkit-transform: translate3d(0, 0, 0)
        }
        50% {
            -webkit-transform: translate3d(100px, 200px, 0)
        }
        100% {
            -webkit-transform: translate3d(0, 400px, 0)
        }
    }

    @keyframes snow-3 {
        0% {
            transform: translate3d(0, 0, 0)
        }
        50% {
            transform: translate3d(-100px, 150px, 0)
        }
        100% {
            transform: translate3d(0, 300px, 0)
        }
    }

    @-webkit-keyframes snow-3 {
        0% {
            -webkit-transform: translate3d(0, 0, 0)
        }
        50% {
            -webkit-transform: translate3d(-100px, 150px, 0)
        }
        100% {
            -webkit-transform: translate3d(0, 300px, 0)
        }
    }

</style>


<div id="snow">
</div>
