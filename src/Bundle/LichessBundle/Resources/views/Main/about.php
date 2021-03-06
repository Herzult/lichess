<?php $view->extend('LichessBundle::layout.php') ?>

<div class="lichess_box">
    <h1 class="lichess_title">About Lichess</h1>
    <div class="lichess_text">
        <ul>
            <li>It will <em>always</em> be free</li>
            <li>It will <em>never</em> contain advertisement</li>
            <li>It will <em>always</em> be open-source</li>
        </ul>
        <p>
            The purpose of Lichess is to provide a minimalist Chess game.<br />
            It requires no registration. You don't need to create an account.<br />
            It requires no Flash and can be run from any modern web browser.<br />
        </p>
        <p>
            Lichess provides following features:
        </p>
        <ul>
            <li>Multiplayer</li>
            <li>Single player with Artificial Intelligence</li>
            <li><a href="http://en.wikipedia.org/wiki/Castling">Castling</a></li>
            <li><a href="http://en.wikipedia.org/wiki/En_passant">En passant</a></li>
            <li><a href="http://en.wikipedia.org/wiki/Promotion_%28chess%29">Promotion</a></li>
            <li><a href="http://en.wikipedia.org/wiki/Check_%28chess%29">Check</a>, <a href="http://en.wikipedia.org/wiki/Checkmate">Chekmate</a> &amp; <a href="http://en.wikipedia.org/wiki/Stale_mate">Stalemate</a> detection</li>
            <li>Move hints and validation</li>
            <li>Replay and analysis</li>
            <li>Export in PGN</li>
            <li>Translated to 13 languages, and more to come</li>
            <li>Run in any browser (excepted IE6, of course) without flash</li>
        </ul>
        <p class="license_images">
            <a href="http://www.opensource.org/"><img src="<?php echo $view['assets']->getUrl('bundle/lichess/images/opensource.png') ?>" alt="OpenSource" /></a>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img alt="Creative Commons License" src="http://i.creativecommons.org/l/by-nc/3.0/88x31.png" /></a>
        </p>
        <p>
            <span xmlns:dc="http://purl.org/dc/elements/1.1/" property="dc:title">Lichess</span> is OpenSource, and licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/">Creative Commons Attribution-NonCommercial 3.0 Unported License</a>.
        </p>
        <p>
            It means you may read the code, modify, use and distribute it.<br />
            You may NOT use it for commercial purposes. You may NOT display ads on a page where Lichess is displayed.
        </p>
        <p>
            Get source code on <a href="http://github.com/ornicar/lichess">Lichess repository</a> or <a href="http://github.com/ornicar/lichess/tarball/master">download it</a>.<br />
            Lichess is built using only Open Source software, including:
        </p>
        <ul>
            <li><a href="http://php.net">PHP 5.3.2</a> with <a href="http://symfony-reloaded.org/">Symfony2</a> &amp; <a href="http://www.phpunit.de/">PHPUnit</a></li>
            <li>JavaScript with <a href="http://jquery.com/">jQuery</a> &amp; <a href="http://jqueryui.com/">UI</a></li>
            <li><a href="http://en.wikipedia.org/wiki/HTML5">HTML5</a> &amp; <a href="http://en.wikipedia.org/wiki/Css">CSS</a></li>
            <li><a href="http://www.ubuntu.com/">Ubuntu 10.04</a>, <a href="http://nginx.org/">nginx</a> &amp; <a href="http://www.vim.org/">Vim</a></li>
            <li><a href="http://www.craftychess.com/">Crafty Chess engine</a></li>
            <li><a href="http://code.google.com/p/pgn4web/">pgn4web</a></li>
        </ul>
        <p>
            Lichess works better with a modern browser like <a href="http://www.mozilla.com/firefox/">Firefox</a>, Chrome, Safari or Opera.<br />
            To report a bug or request a new feature, please email me at <span class="js_email"></span>.<br />
            Thanks for reading.
        </p>
    </div>
    <a class="lichess_new_game" href="<?php echo $view['router']->generate('lichess_homepage') ?>">Start a new game</a>
</div>
