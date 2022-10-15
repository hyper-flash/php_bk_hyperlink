<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vidurl = $_POST['vidurl'];
    $type = $_POST['type'];
    
?>
<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.7/plyr.css">
    <script src="https://cdn.plyr.io/3.6.7/plyr.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">
    </script>
    <style>
    :root {
        --plyr-color-main: #3accae;
        --plyr-video-control-color: #ffffff;
    }
    </style>

    <script>
    const _0xc2afa9 = _0x5a46;

    function _0x4c53() {
        const _0x1cfcf9 = ['#player', 'player', '9103374OsBvnU', '.js-forward', '38476mvmfKF', '1258856aqdMFt',
            '5123247GhkBzw', '.js-play', 'querySelector', '548734tejcnZ', '27wRLYyd', '655ZbbSmG', '18599ShDfOC',
            'click', '5840WdmETH', 'addEventListener', '10059320BjHvBu', 'fullscreen'
        ];
        _0x4c53 = function() {
            return _0x1cfcf9;
        };
        return _0x4c53();
    }

    function _0x5a46(_0x92c304, _0x31f91c) {
        const _0x4c5388 = _0x4c53();
        return _0x5a46 = function(_0x5a4621, _0x12f32e) {
            _0x5a4621 = _0x5a4621 - 0xe8;
            let _0x554f70 = _0x4c5388[_0x5a4621];
            return _0x554f70;
        }, _0x5a46(_0x92c304, _0x31f91c);
    }(function(_0x15c7a, _0x1465c4) {
        const _0x41b792 = _0x5a46,
            _0x4af535 = _0x15c7a();
        while (!![]) {
            try {
                const _0x525041 = parseInt(_0x41b792(0xeb)) / 0x1 + -parseInt(_0x41b792(0xef)) / 0x2 + parseInt(
                    _0x41b792(0xec)) / 0x3 + parseInt(_0x41b792(0xea)) / 0x4 * (-parseInt(_0x41b792(0xf1)) /
                    0x5) + -parseInt(_0x41b792(0xe8)) / 0x6 + parseInt(_0x41b792(0xf2)) / 0x7 * (-parseInt(
                    _0x41b792(0xf4)) / 0x8) + parseInt(_0x41b792(0xf0)) / 0x9 * (parseInt(_0x41b792(0xf6)) /
                    0xa);
                if (_0x525041 === _0x1465c4) break;
                else _0x4af535['push'](_0x4af535['shift']());
            } catch (_0x536c54) {
                _0x4af535['push'](_0x4af535['shift']());
            }
        }
    }(_0x4c53, 0xf2752), document[_0xc2afa9(0xf5)]('DOMContentLoaded', () => {
        const _0x52ccd7 = _0xc2afa9,
            _0x419acf = new Plyr(_0x52ccd7(0xf8));
        window[_0x52ccd7(0xf9)] = _0x419acf;

        function _0x41d817(_0x4815ea, _0x123fb9, _0x24fbab) {
            const _0x5215fa = _0x52ccd7;
            document[_0x5215fa(0xee)](_0x4815ea)['addEventListener'](_0x123fb9, _0x24fbab, ![]);
        }
        _0x41d817(_0x52ccd7(0xed), _0x52ccd7(0xf3), () => {
            _0x419acf['play']();
        }), _0x41d817(_0x52ccd7(0xe9), _0x52ccd7(0xf3), () => {
            const _0x494284 = _0x52ccd7;
            _0x419acf[_0x494284(0xf7)]['enter']();
        });
    }));
    </script>
</head>

<body class="bg-gradient-to-r from-gray-700 via-gray-900 to-black">
    <div style="margin-left: 7%; margin-right: 7%;margin-top: 1%;">
        <video style="display: flex;" id="player" controls crossorigin playsinline
            poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" preload="auto"
            class="js-player">
            <!-- Video files -->
            <source src="<?php echo $vidurl;?>" type="<?php echo $type;?>" />

        </video>
        <button
            class="js-play mt-2 mb-2 inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
            <span class="text-sm font-medium"> Play &nbsp; &nbsp;</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z" />
            </svg>
        </button>
        <button
            class="js-forward mt-2 mb-2 inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
            <span class="text-sm font-medium"> Full Screen &nbsp; &nbsp;</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z" />
            </svg>
        </button>
    </div>

    <script>
    var controls = [
        'play-large', // The large play button in the center
        // 'restart', // Restart playback
        'rewind', // Rewind by the seek time (default 10 seconds)
        'play', // Play/pause playback
        'fast-forward', // Fast forward by the seek time (default 10 seconds)
        'progress', // The progress bar and scrubber for playback and buffering
        'current-time', // The current time of playback
        'duration', // The full duration of the media
        'mute', // Toggle mute
        'volume', // Volume control
        'fullscreen' // Toggle fullscreen
    ];

    const player = new Plyr('#player', {
        controls
    });
    </script>
</body>
<html>
<?php
} else  {
    $context = stream_context_create(
        array(
            "http" => array(
                "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36", "Content-type:application/json;charset=utf-8"
            )
        )
    );
    
    $data = file_get_contents('http://sv1.gdplayer.to/api/?dVNLdVRZd1A0MzdXNzFmWE9pT2Vjbit3S2o4dmJacmRta1JHQ0pZU2R5dWxYa2RTZW45UUpCQmh5MGtDZHpDWWhLLytUZjQ0NUNVSE96eC9UTjJtMEhWRTRVQW5EdXR6RVFnT2lxNnJsOGtObHU5bys5bHoyVFFGbEIyak1EVTZ4eUVHaExKdHgzRFAwN2Y5R2V3SElqL2dlNzJPdjhWd2RTa0ZTM3hmM1RRPTo6ZTH1YKoWGAabXEZurstokA%3D%3D', false, $context); // put the contents of the file into a variable
    
    $obj = json_decode($data, false);

    ?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    var _0x480b58 = _0x3ec3;

    function _0x3a47() {
        var _0x231a1e = ['1298930TpVakg', 'innerHTML', '95384zrsEqy', '12uWvUdw', '214LRNzxp', '11889WENbSV', 'seconds',
            '79244sxkXFh', 'submit', 'getElementById', '696332ezOAvI', '558YTvsHj', '26777366bqTjka', '10000',
            '95OzpLTc', '51135Rurdbq'
        ];
        _0x3a47 = function() {
            return _0x231a1e;
        };
        return _0x3a47();
    }(function(_0x4079db, _0x2ed120) {
        var _0x51539d = _0x3ec3,
            _0x467eef = _0x4079db();
        while (!![]) {
            try {
                var _0x2b19a2 = -parseInt(_0x51539d(0xef)) / 0x1 * (parseInt(_0x51539d(0xee)) / 0x2) + -parseInt(
                        _0x51539d(0xe9)) / 0x3 + parseInt(_0x51539d(0xf1)) / 0x4 * (parseInt(_0x51539d(0xe8)) /
                        0x5) + -parseInt(_0x51539d(0xed)) / 0x6 * (parseInt(_0x51539d(0xf4)) / 0x7) + parseInt(
                        _0x51539d(0xec)) / 0x8 * (-parseInt(_0x51539d(0xe5)) / 0x9) + parseInt(_0x51539d(0xea)) /
                    0xa + parseInt(_0x51539d(0xe6)) / 0xb;
                if (_0x2b19a2 === _0x2ed120) break;
                else _0x467eef['push'](_0x467eef['shift']());
            } catch (_0x3cfd18) {
                _0x467eef['push'](_0x467eef['shift']());
            }
        }
    }(_0x3a47, 0xae22e), setTimeout(() => {
        var _0x13605c = _0x3ec3;
        document[_0x13605c(0xf3)](_0x13605c(0xf2))['disabled'] = ![];
    }, _0x480b58(0xe7)), timeLeft = 0xa);

    function countdown() {
        var _0x49e8f7 = _0x480b58;
        timeLeft--, document['getElementById'](_0x49e8f7(0xf0))[_0x49e8f7(0xeb)] = String(timeLeft), timeLeft > 0x0 &&
            setTimeout(countdown, 0x3e8);
    }

    function _0x3ec3(_0x1c5fd8, _0x84bf57) {
        var _0x3a475c = _0x3a47();
        return _0x3ec3 = function(_0x3ec37b, _0x35b931) {
            _0x3ec37b = _0x3ec37b - 0xe5;
            var _0x395fb9 = _0x3a475c[_0x3ec37b];
            return _0x395fb9;
        }, _0x3ec3(_0x1c5fd8, _0x84bf57);
    };
    setTimeout(countdown, 0x3e8);
    </script>
</head>

<body class="bg-gray-900 text-white">
    <nav class="bg-white-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>

                </div>
            </div>
        </div>
        </div>
    </nav>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
            <div class="mx-auto max-w-3xl text-center">
                <h1
                    class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                    Understand User Flow.

                    <span class="sm:block"> Increase Conversion. </span>
                </h1>

                <p class="mx-auto mt-4 max-w-xl sm:text-xl sm:leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                    tenetur fuga ducimus numquam ea!
                </p>

                <div class="mt-8 flex flex-wrap justify-center gap-4">
                    <p
                        class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto">
                        wait &nbsp;<span id="seconds"></span>
                    </p>
                    <input type="hidden" name="vidurl" value="<?php echo $obj -> sources[0] -> file; ?>">
                    <input type="hidden" name="type" value="<?php echo $obj -> sources[0] -> type; ?>">
                    <input disabled="true" type="submit" id="submit" value="Learn More"
                        class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto">
                </div>
            </div>
        </div>
    </form>

</body>

</html>

<?php
}
?>