<!DOCTYPE html>
<title data-l10n-id="title">Logo Interpreter</title>
<meta charset="utf-8">

<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, width=device-width">

<link rel="alternate" type="application/atom+xml" href="https://github.com/inexorabletash/jslogo/commits/master.atom">
<link rel="shortcut icon" href="favicon.ico">

<script src="https://cdn.rawgit.com/inexorabletash/polyfill/v0.1.29/polyfill.min.js"></script>

<!-- CodeMirror, add-ons, and Logo-specific highlighting -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/addon/runmode/runmode.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/addon/edit/closebrackets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/addon/edit/matchbrackets.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/addon/display/placeholder.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.61.1/codemirror.css">
<script src="cm/logo.js"></script>

<link rel="stylesheet" href="cm/logo.css">

<link rel="stylesheet" href="index.css">

<body class="single">


<div id="display-panel" class="panel">
  <div id="display">
    <div class="inner">
      <canvas id="sandbox" width="450" height="250">
        <span data-l10n-id="no-canvas">Your browser does not support the canvas element - sorry!</span>
      </canvas>
      <canvas id="turtle" width="450" height="250"></canvas>
      <div id="overlay"></div>
      <div id="error"></div>
    </div>
  </div>
</div>

<div id="input-panel" class="panel">
  <!-- TODO: Make this a button or anchor -->
  <div id="run"><div data-l10n-id="ip-button-run" class="label">Run</div></div>
  <div id="stop"><div data-l10n-id="ip-button-stop" class="label">Stop</div></div>
  <div id="clear"><div data-l10n-id="ip-button-clear" class="label">Clear</div></div>
  <div id="input">
    <div class="inner">
      <div id="toggle">
        <span id="expand-label">&#x2197;</span>
        <span id="collapse-label">&#x2199;</span>
      </div>
      <textarea rows="1" cols="80" placeholder="Type your code here..." data-l10n-id="logo-ta-single-line" id="logo-ta-single-line"><?php
   echo file_get_contents('programs/' . $_GET['name'] . '.lgo');
?></textarea>
      <textarea rows="20" cols="80" placeholder="Type your code here..." data-l10n-id="logo-ta-multi-line" id="logo-ta-multi-line"><?php
   echo file_get_contents('programs/' . $_GET['name'] . '.lgo');
?></textarea>
    </div>
  </div>
</div>


<div id="sidebar" class="panel examples">
  <iframe frameBorder="0" allowtransparency="true" src="language.html" class="choice" id="reference"></iframe>
  <div class="choice snippets" id="examples"></div>
  <div class="choice" id="history">
    <div style="text-align: center; padding: 5px">
      <a id="clearhistory" href="#" data-l10n-id="extras-clear-history">Clear History</a>
    </div>
    <div class="snippets"></div>
    <div class="placeholder" data-l10n-id="history-placeholder"y>
      Commands you enter will appear here so you can find, modify, and re-run them.
    </div>
  </div>
  <div class="choice" id="library">
    <div style="text-align: center; padding: 5px">
      <a id="clearlibrary" href="#" data-l10n-id="extras-clear-library">Clear Library</a>
    </div>
    <div class="snippets"></div>
  </div>
  <div class="choice" id="links" dir="ltr">

    <ul>
      <li><a target=_blank href="https://en.wikipedia.org/wiki/Logo_(programming_language)">Logo</a> according to Wikipedia
      <li><a target=_blank href="https://utdallas.edu/~veerasam/logo/">UT Dallas LOGO Workshop</a> - fun examples to try
      <li>Other Web-based Logos:
        <ul>
          <li><a target=_blank href="https://turtlespaces.org">turtleSpaces</a>
          <li><a target=_blank href="http://logo.twentygototen.org/_REo_2F2">papert - logo in your browser</a>
          <li><a target=_blank href="https://github.com/drj11/curlylogo" data-old-href="http://www.amberfrog.com/logo/">Curly Logo</a> (uses SVG).
          <li><a target=_blank href="https://blog.heroku.com/archives/2011/4/1/announcing_heroku_for_logo">Heroku for Logo</a> - based on Logo; launched April 1st, 2011
          <li><a target=_blank href="https://turtleacademy.com/">Turtle Academy</a> - The easy way to learn programming
        </ul>
      <li><a target=_blank href="http://el.media.mit.edu/logo-foundation/">The Logo Foundation</a> with links to learning resources and software
      <li><a target=_blank href="https://www.cs.berkeley.edu/~bh/logo.html">Berkeley Logo (UCBLogo)</a> is a well respected freeware interpreter
      <li><a target=_blank href="http://blog.ianbicking.org/2007/10/19/logo/">Ian Bicking on Logo</a>
      <li><a target=_blank href="http://pylogo.sourceforge.net/">PyLogo</a> is a sweet interpreter in Python
      <li><a target=_blank href="http://guyhaas.com/bfoit/itp/">Introduction to Computer Programming</a> using Logo
      </ul>
      <p style="margin-top: 2em;">
        By <a href="mailto:inexorabletash@gmail.com">Joshua Bell</a> and other
        <a target=_blank href="https://github.com/inexorabletash/jslogo/graphs/contributors">contributors</a>.
      </p>
      <p style="margin-top: 2em;">
        Syntax Highlighting by <a target=_blank href="https://codemirror.net">CodeMirror</a>.
      </p>
  </div>
  <div class="choice" id="extras">
    <ul>
      <li><a data-l10n-id="extras-download-library" id="savelibrary" href="#">Download Library</a></li>
      <li><a data-l10n-id="extras-download-drawing" id="screenshot" href="#">Download Drawing</a></li>
    </ul>
  </div>
</div>

<script src="floodfill.js"></script>
<script src="logo.js"></script>
<script src="turtle.js"></script>
<script src="dialog.js"></script>
<script src="index.js"></script>
<script src="gif.js"></script>
<!-- TogetherJS Collaboration -->
<script src="https://togetherjs.com/togetherjs-min.js"></script>

</body>
