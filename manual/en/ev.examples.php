<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/ev.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ev.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ev.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ev.php">
 <link rel="prev" href="https://www.php.net/manual/en/ev.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/ev.watchers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ev.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ev.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ev.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ev.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ev.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ev.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ev.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ev.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ev.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ev.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ev.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="ev.watchers.php">
          Watchers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ev.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.ev.php'>Ev</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/ev.examples.php' selected="selected">English</option>
            <option value='de/ev.examples.php'>German</option>
            <option value='es/ev.examples.php'>Spanish</option>
            <option value='fr/ev.examples.php'>French</option>
            <option value='it/ev.examples.php'>Italian</option>
            <option value='ja/ev.examples.php'>Japanese</option>
            <option value='pt_BR/ev.examples.php'>Brazilian Portuguese</option>
            <option value='ru/ev.examples.php'>Russian</option>
            <option value='tr/ev.examples.php'>Turkish</option>
            <option value='uk/ev.examples.php'>Ukrainian</option>
            <option value='zh/ev.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ev.examples" class="chapter">
 <h1 class="title">Examples</h1>

 <div class="example" id="example-3530">
  <p><strong>Example #1 Simple timers</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create and start timer firing after 2 seconds<br /></span><span style="color: #0000BB">$w1 </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, function () {<br />    echo </span><span style="color: #DD0000">"2 seconds elapsed\n"</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #FF8000">// Create and launch timer firing after 2 seconds repeating each second<br />// until we manually stop it<br /></span><span style="color: #0000BB">$w2 </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"is called every second, is launched after 2 seconds\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"iteration = "</span><span style="color: #007700">, </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">iteration</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Stop the watcher after 5 iterations<br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">iteration</span><span style="color: #007700">() == </span><span style="color: #0000BB">5 </span><span style="color: #007700">and </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Stop the watcher if further calls cause more than 10 iterations<br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">iteration</span><span style="color: #007700">() &gt;= </span><span style="color: #0000BB">10 </span><span style="color: #007700">and </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #FF8000">// Create stopped timer. It will be inactive until we start it ourselves<br /></span><span style="color: #0000BB">$w_stopped </span><span style="color: #007700">= </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">::</span><span style="color: #0000BB">createStopped</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">5</span><span style="color: #007700">, function(</span><span style="color: #0000BB">$w</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Callback of a timer created as stopped\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Stop the watcher after 2 iterations<br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">iteration</span><span style="color: #007700">() &gt;= </span><span style="color: #0000BB">2 </span><span style="color: #007700">and </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #FF8000">// Loop until Ev::stop() is called or all of watchers stop<br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Start and look if it works<br /></span><span style="color: #0000BB">$w_stopped</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">start</span><span style="color: #007700">();<br />echo </span><span style="color: #DD0000">"Run single iteration\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">RUN_ONCE</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Restart the second watcher and try to handle the same events, but don't block\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$w2</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">again</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">RUN_NOWAIT</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, function() {});<br />echo </span><span style="color: #DD0000">"Running a blocking loop\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />echo </span><span style="color: #DD0000">"END\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
2 seconds elapsed
is called every second, is launched after 2 seconds
iteration = 1
is called every second, is launched after 2 seconds
iteration = 2
is called every second, is launched after 2 seconds
iteration = 3
is called every second, is launched after 2 seconds
iteration = 4
is called every second, is launched after 2 seconds
iteration = 5
Run single iteration
Callback of a timer created as stopped
Restart the second watcher and try to handle the same events, but don&#039;t block
Running a blocking loop
is called every second, is launched after 2 seconds
iteration = 8
is called every second, is launched after 2 seconds
iteration = 9
is called every second, is launched after 2 seconds
iteration = 10
END
</pre></div>
  </div>
 </div>
 <div class="example" id="example-3531">
  <p><strong>Example #2 Periodic timer. Tick each 10.5 seconds</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvPeriodic</span><span style="color: #007700">(</span><span style="color: #0000BB">0.</span><span style="color: #007700">, </span><span style="color: #0000BB">10.5</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$revents</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">time</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3532">
  <p><strong>Example #3 Periodic timer. Use reschedule callback</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Tick each 10.5 seconds<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">reschedule_cb </span><span style="color: #007700">(</span><span style="color: #0000BB">$watcher</span><span style="color: #007700">, </span><span style="color: #0000BB">$now</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$now </span><span style="color: #007700">+ (</span><span style="color: #0000BB">10.5</span><span style="color: #007700">. - </span><span style="color: #0000BB">fmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$now</span><span style="color: #007700">, </span><span style="color: #0000BB">10.5</span><span style="color: #007700">));<br />}<br /><br /></span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvPeriodic</span><span style="color: #007700">(</span><span style="color: #0000BB">0.</span><span style="color: #007700">, </span><span style="color: #0000BB">0.</span><span style="color: #007700">, </span><span style="color: #DD0000">"reschedule_cb"</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$revents</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">time</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3533">
  <p><strong>Example #4 Periodic timer. Tick every 10.5 seconds starting at now</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Tick every 10.5 seconds starting at now<br /></span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvPeriodic</span><span style="color: #007700">(</span><span style="color: #0000BB">fmod</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">now</span><span style="color: #007700">(), </span><span style="color: #0000BB">10.5</span><span style="color: #007700">), </span><span style="color: #0000BB">10.5</span><span style="color: #007700">, </span><span style="color: #0000BB">NULL</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$revents</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">time</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3534">
  <p><strong>Example #5 Wait until STDIN is readable</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Wait until STDIN is readable<br /></span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvIo</span><span style="color: #007700">(</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">, </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">READ</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$watcher</span><span style="color: #007700">, </span><span style="color: #0000BB">$revents</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"STDIN is readable\n"</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">RUN_ONCE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3535">
  <p><strong>Example #6 Use some async I/O to access a socket</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Use some async I/O to access a socket */<br /><br />// `sockets' extension still logs warnings<br />// for EINPROGRESS, EAGAIN/EWOULDBLOCK etc.<br /></span><span style="color: #0000BB">error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ERROR</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$e_nonblocking </span><span style="color: #007700">= array (</span><span style="color: #FF8000">/*EAGAIN or EWOULDBLOCK*/</span><span style="color: #0000BB">11</span><span style="color: #007700">, </span><span style="color: #FF8000">/*EINPROGRESS*/</span><span style="color: #0000BB">115</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get the port for the WWW service<br /></span><span style="color: #0000BB">$service_port </span><span style="color: #007700">= </span><span style="color: #0000BB">getservbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tcp'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Get the IP address for the target host<br /></span><span style="color: #0000BB">$address </span><span style="color: #007700">= </span><span style="color: #0000BB">gethostbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'google.co.uk'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Create a TCP/IP socket<br /></span><span style="color: #0000BB">$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create</span><span style="color: #007700">(</span><span style="color: #0000BB">AF_INET</span><span style="color: #007700">, </span><span style="color: #0000BB">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_TCP</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$socket </span><span style="color: #007700">=== </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_create() failed: reason: "<br />        </span><span style="color: #007700">.</span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Set O_NONBLOCK flag<br /></span><span style="color: #0000BB">socket_set_nonblock</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Abort on timeout<br /></span><span style="color: #0000BB">$timeout_watcher </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">(</span><span style="color: #0000BB">10.0</span><span style="color: #007700">, </span><span style="color: #0000BB">0.</span><span style="color: #007700">, function () use (</span><span style="color: #0000BB">$socket</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">stop</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">BREAK_ALL</span><span style="color: #007700">);<br />});<br /><br /></span><span style="color: #FF8000">// Make HEAD request when the socket is writable<br /></span><span style="color: #0000BB">$write_watcher </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvIo</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">WRITE</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">)<br />    use (</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$timeout_watcher</span><span style="color: #007700">, </span><span style="color: #0000BB">$e_nonblocking</span><span style="color: #007700">)<br />{<br />    </span><span style="color: #FF8000">// Stop timeout watcher<br />    </span><span style="color: #0000BB">$timeout_watcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />    </span><span style="color: #FF8000">// Stop write watcher<br />    </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br /><br />    </span><span style="color: #0000BB">$in </span><span style="color: #007700">= </span><span style="color: #DD0000">"HEAD / HTTP/1.1\r\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Host: google.co.uk\r\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"</span><span style="color: #007700">;<br /><br />    if (!</span><span style="color: #0000BB">socket_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$in</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$in</span><span style="color: #007700">))) {<br />        </span><span style="color: #0000BB">trigger_error</span><span style="color: #007700">(</span><span style="color: #DD0000">"Failed writing </span><span style="color: #0000BB">$in</span><span style="color: #DD0000"> to socket"</span><span style="color: #007700">, </span><span style="color: #0000BB">E_USER_ERROR</span><span style="color: #007700">);<br />    }<br /><br />    </span><span style="color: #0000BB">$read_watcher </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvIo</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">READ</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$re</span><span style="color: #007700">)<br />        use (</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$e_nonblocking</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #FF8000">// Socket is readable. recv() 20 bytes using non-blocking mode<br />        </span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_recv</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$out</span><span style="color: #007700">, </span><span style="color: #0000BB">20</span><span style="color: #007700">, </span><span style="color: #0000BB">MSG_DONTWAIT</span><span style="color: #007700">);<br /><br />        if (</span><span style="color: #0000BB">$ret</span><span style="color: #007700">) {<br />            echo </span><span style="color: #0000BB">$out</span><span style="color: #007700">;<br />        } elseif (</span><span style="color: #0000BB">$ret </span><span style="color: #007700">=== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            </span><span style="color: #FF8000">// All read<br />            </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />            </span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br />            return;<br />        }<br /><br />        </span><span style="color: #FF8000">// Caught EINPROGRESS, EAGAIN, or EWOULDBLOCK<br />        </span><span style="color: #007700">if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(), </span><span style="color: #0000BB">$e_nonblocking</span><span style="color: #007700">)) {<br />            return;<br />        }<br /><br />        </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />        </span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br />    });<br /><br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$address</span><span style="color: #007700">, </span><span style="color: #0000BB">$service_port</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
HTTP/1.1 301 Moved Permanently
Location: http://www.google.co.uk/
Content-Type: text/html; charset=UTF-8
Date: Sun, 23 Dec 2012 16:08:27 GMT
Expires: Tue, 22 Jan 2013 16:08:27 GMT
Cache-Control: public, max-age=2592000
Server: gws
Content-Length: 221
X-XSS-Protection: 1; mode=block
X-Frame-Options: SAMEORIGIN
Connection: close


</pre></div>
  </div>
 </div>
 <div class="example" id="example-3536">
  <p><strong>Example #7 Embedding one loop into another</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br />* Try to get an embeddable event loop and embed it into the default event loop.<br />* If it is impossible, use the default<br />* loop. The default loop is stored in $loop_hi, while the embeddable loop is<br />* stored in $loop_lo(which is $loop_hi in the case no embeddable loop can be<br />* used).<br />*<br />* Sample translated to PHP<br />* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9<br />*/<br /></span><span style="color: #0000BB">$loop_hi </span><span style="color: #007700">= </span><span style="color: #0000BB">EvLoop</span><span style="color: #007700">::</span><span style="color: #0000BB">defaultLoop</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$loop_lo </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$embed   </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/*<br />* See if there is a chance of getting one that works<br />* (flags' value of 0 means autodetection)<br />*/<br /></span><span style="color: #0000BB">$loop_lo </span><span style="color: #007700">= </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">embeddableBackends</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">recommendedBackends</span><span style="color: #007700">()<br />    ? new </span><span style="color: #0000BB">EvLoop</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">embeddableBackends</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">recommendedBackends</span><span style="color: #007700">())<br />    : </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$loop_lo</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$embed </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvEmbed</span><span style="color: #007700">(</span><span style="color: #0000BB">$loop_lo</span><span style="color: #007700">, function () {});<br />} else {<br />    </span><span style="color: #0000BB">$loop_lo </span><span style="color: #007700">= </span><span style="color: #0000BB">$loop_hi</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3537">
  <p><strong>Example #8 Embedding loop created with kqueue backend into the default loop</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/*<br />* Check if kqueue is available but not recommended and create a kqueue backend<br />* for use with sockets (which usually work with any kqueue implementation).<br />* Store the kqueue/socket-only event loop in loop_socket. (One might optionally<br />* use EVFLAG_NOENV, too)<br />*<br />* Example borrowed from<br />* http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#Examples_CONTENT-9<br />*/<br /></span><span style="color: #0000BB">$loop        </span><span style="color: #007700">= </span><span style="color: #0000BB">EvLoop</span><span style="color: #007700">::</span><span style="color: #0000BB">defaultLoop</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$socket_loop </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$embed       </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">supportedBackends</span><span style="color: #007700">() &amp; ~</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">recommendedBackends</span><span style="color: #007700">() &amp; </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">BACKEND_KQUEUE</span><span style="color: #007700">) {<br />    if ((</span><span style="color: #0000BB">$socket_loop </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvLoop</span><span style="color: #007700">(</span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">BACKEND_KQUEUE</span><span style="color: #007700">))) {<br />        </span><span style="color: #0000BB">$embed </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvEmbed</span><span style="color: #007700">(</span><span style="color: #0000BB">$loop</span><span style="color: #007700">);<br />    }<br />}<br /><br />if (!</span><span style="color: #0000BB">$socket_loop</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$socket_loop </span><span style="color: #007700">= </span><span style="color: #0000BB">$loop</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Now use $socket_loop for all sockets, and $loop for anything else<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3538">
  <p><strong>Example #9 Handle SIGTERM signal</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvSignal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGTERM</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$watcher</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"SIGTERM received\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$watcher</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3539">
  <p><strong>Example #10 Monitor changes of /var/log/messages</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Use 10 second update interval.<br /></span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvStat</span><span style="color: #007700">(</span><span style="color: #DD0000">"/var/log/messages"</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"/var/log/messages changed\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$attr </span><span style="color: #007700">= </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attr</span><span style="color: #007700">();<br /><br />    if (</span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #DD0000">'nlink'</span><span style="color: #007700">]) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Current size: %ld\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]);<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Current atime: %ld\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #DD0000">'atime'</span><span style="color: #007700">]);<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Current mtime: %ld\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$attr</span><span style="color: #007700">[</span><span style="color: #DD0000">'mtime'</span><span style="color: #007700">]);<br />    } else {<br />        </span><span style="color: #0000BB">fprintf</span><span style="color: #007700">(</span><span style="color: #0000BB">STDERR</span><span style="color: #007700">, </span><span style="color: #DD0000">"`messages` file is not there!"</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br />    }<br />});<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3540">
  <p><strong>Example #11 Monotor changes of /var/log/messages. Avoid missing updates by means of one second delay</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$timer </span><span style="color: #007700">= </span><span style="color: #0000BB">EvTimer</span><span style="color: #007700">::</span><span style="color: #0000BB">createStopped</span><span style="color: #007700">(</span><span style="color: #0000BB">0.</span><span style="color: #007700">, </span><span style="color: #0000BB">1.02</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br /><br />    </span><span style="color: #0000BB">$stat </span><span style="color: #007700">= </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// 1 second after the most recent change of the file<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Current size: %ld\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$stat</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attr</span><span style="color: #007700">()[</span><span style="color: #DD0000">'size'</span><span style="color: #007700">]);<br />});<br /><br /></span><span style="color: #0000BB">$stat </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvStat</span><span style="color: #007700">(</span><span style="color: #DD0000">"/var/log/messages"</span><span style="color: #007700">, </span><span style="color: #0000BB">0.</span><span style="color: #007700">, function () use (</span><span style="color: #0000BB">$timer</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">// Reset timer watcher<br />    </span><span style="color: #0000BB">$timer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">again</span><span style="color: #007700">();<br />});<br /><br /></span><span style="color: #0000BB">$timer</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data </span><span style="color: #007700">= </span><span style="color: #0000BB">$stat</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
 <div class="example" id="example-3541">
  <p><strong>Example #12 Process status changes</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pid </span><span style="color: #007700">= </span><span style="color: #0000BB">pcntl_fork</span><span style="color: #007700">();<br /><br />if (</span><span style="color: #0000BB">$pid </span><span style="color: #007700">== -</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">fprintf</span><span style="color: #007700">(</span><span style="color: #0000BB">STDERR</span><span style="color: #007700">, </span><span style="color: #DD0000">"pcntl_fork failed\n"</span><span style="color: #007700">);<br />} elseif (</span><span style="color: #0000BB">$pid</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$w </span><span style="color: #007700">= new </span><span style="color: #0000BB">EvChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$pid</span><span style="color: #007700">, </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">, function (</span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$revents</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">stop</span><span style="color: #007700">();<br /><br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Process %d exited with status %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rpid</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rstatus</span><span style="color: #007700">);<br />    });<br /><br />    </span><span style="color: #0000BB">Ev</span><span style="color: #007700">::</span><span style="color: #0000BB">run</span><span style="color: #007700">();<br /><br />    </span><span style="color: #FF8000">// Protect against Zombies<br />    </span><span style="color: #0000BB">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #0000BB">$status</span><span style="color: #007700">);<br />} else {<br />    </span><span style="color: #FF8000">//Forked child<br />    </span><span style="color: #007700">exit(</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ev/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fev.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ev.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ev.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ev.php">Ev</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ev.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ev.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="ev.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ev.watchers.php" title="Watchers">Watchers</a>
                        </li>
                                                <li class="">
                            <a href="ev.watcher-callbacks.php" title="Watcher callbacks">Watcher callbacks</a>
                        </li>
                                                <li class="">
                            <a href="ev.periodic-modes.php" title="Periodic watcher operation modes">Periodic watcher operation modes</a>
                        </li>
                                                <li class="">
                            <a href="class.ev.php" title="Ev">Ev</a>
                        </li>
                                                <li class="">
                            <a href="class.evcheck.php" title="EvCheck">EvCheck</a>
                        </li>
                                                <li class="">
                            <a href="class.evchild.php" title="EvChild">EvChild</a>
                        </li>
                                                <li class="">
                            <a href="class.evembed.php" title="EvEmbed">EvEmbed</a>
                        </li>
                                                <li class="">
                            <a href="class.evfork.php" title="EvFork">EvFork</a>
                        </li>
                                                <li class="">
                            <a href="class.evidle.php" title="EvIdle">EvIdle</a>
                        </li>
                                                <li class="">
                            <a href="class.evio.php" title="EvIo">EvIo</a>
                        </li>
                                                <li class="">
                            <a href="class.evloop.php" title="EvLoop">EvLoop</a>
                        </li>
                                                <li class="">
                            <a href="class.evperiodic.php" title="EvPeriodic">EvPeriodic</a>
                        </li>
                                                <li class="">
                            <a href="class.evprepare.php" title="EvPrepare">EvPrepare</a>
                        </li>
                                                <li class="">
                            <a href="class.evsignal.php" title="EvSignal">EvSignal</a>
                        </li>
                                                <li class="">
                            <a href="class.evstat.php" title="EvStat">EvStat</a>
                        </li>
                                                <li class="">
                            <a href="class.evtimer.php" title="EvTimer">EvTimer</a>
                        </li>
                                                <li class="">
                            <a href="class.evwatcher.php" title="EvWatcher">EvWatcher</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
