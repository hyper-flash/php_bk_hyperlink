<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $vidurl = $_POST['vidurl'];
    $type = $_POST['type'];
?>
<!Doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css">
    <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <style>
    :root {
        --plyr-color-main: #3accae;
        --plyr-video-control-color: #ffffff;
    }
    </style>

    <script>
    $(document).ready(function() {
        // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
        const player = new Plyr('#player');

        // Expose
        window.player = player;
        console.log(player)
        // Bind event listener
        function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
        }
        // Play
        on('.js-play', 'click', () => {
            player.play();
        });
    });
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
} else if(isset($_GET['id'])){
    
$curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://sv1.gdplayer.to/api/?' . $_GET['id'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_USERAGENT => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36",
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,  
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  $obj = json_decode($response, false);
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    setTimeout(() => {
        document.getElementById("submit").disabled = false;
    }, "10000")

    timeLeft = 10;

    function countdown() {
        timeLeft--;
        document.getElementById("seconds").innerHTML = String(timeLeft);
        if (timeLeft > 0) {
            setTimeout(countdown, 1000);
        }
    };

    setTimeout(countdown, 1000);
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
}else{
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1
                class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                <i class="bi bi-emoji-expressionless"></i> Not Found...
            </h1>

            <p class="mx-auto mt-4 max-w-xl sm:text-xl sm:leading-relaxed">
                File Not Found...
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a
                    class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="streamtape.php">
                    Not Found
                </a>
            </div>
        </div>
    </div>

</body>

</html>

<?php
}
?>