<script>
    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' night-mode';
        }
    })(window, document);
    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('night-mode');
            if (document.documentElement.classList.contains('night-mode')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);
    })(window, document);
</script>
<script src="..\..\assets\js\framework.js"></script>
<script src="..\..\assets\js\jquery-3.3.1.min.js"></script>
<script src="..\..\assets\js\simplebar.js"></script>
<script src="..\..\assets\js\main.js"></script>
<script src="..\..\assets\js\bootstrap-select.min.js"></script>