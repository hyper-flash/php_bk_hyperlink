
        //document.getElementById("submit").disabled = false;
        setTimeout(() => {
            document.getElementById("submit").disabled = false;
        }, "10000")
        
        timeLeft = 10;

        function countdown() {
            timeLeft--;
            document.getElementById("seconds").innerHTML = String( timeLeft );
            if (timeLeft > 0) {
                setTimeout(countdown, 1000);
            }
        };

        setTimeout(countdown, 1000);
    
    
    
    document.addEventListener('DOMContentLoaded', () => {
        // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
        const player = new Plyr('#player');

        // Expose
        window.player = player;	

        // Bind event listener
        function on(selector, type, callback) {
            document.querySelector(selector).addEventListener(type, callback, false);
        }
        // Play
        on('.js-play', 'click', () => {
            player.play();
        });
        // Forward
        on('.js-forward', 'click', () => {
            player.fullscreen.enter();
        });
    });