<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: parallel\Future - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.parallel-future.php">
 <link rel="shorturl" href="https://www.php.net/parallel-future">
 <link rel="alternate" href="https://www.php.net/parallel-future" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.parallel.php">
 <link rel="prev" href="https://www.php.net/manual/en/parallel-runtime.kill.php">
 <link rel="next" href="https://www.php.net/manual/en/parallel-future.cancel.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.parallel-future.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.parallel-future.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.parallel-future.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.parallel-future.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.parallel-future.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.parallel-future.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.parallel-future.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.parallel-future.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.parallel-future.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.parallel-future.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.parallel-future.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The parallel\Future class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: parallel\Future - Manual" />
<meta name="twitter:description" content="The parallel\Future class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: parallel\Future - Manual" />
<meta itemprop="description" content="The parallel\Future class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The parallel\Future class" />

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
        <a href="parallel-future.cancel.php">
          parallel\Future::cancel &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="parallel-runtime.kill.php">
          &laquo; parallel\Runtime::kill        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.parallel.php'>parallel</a></li>      </ul>
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
            <option value='en/class.parallel-future.php' selected="selected">English</option>
            <option value='de/class.parallel-future.php'>German</option>
            <option value='es/class.parallel-future.php'>Spanish</option>
            <option value='fr/class.parallel-future.php'>French</option>
            <option value='it/class.parallel-future.php'>Italian</option>
            <option value='ja/class.parallel-future.php'>Japanese</option>
            <option value='pt_BR/class.parallel-future.php'>Brazilian Portuguese</option>
            <option value='ru/class.parallel-future.php'>Russian</option>
            <option value='tr/class.parallel-future.php'>Turkish</option>
            <option value='uk/class.parallel-future.php'>Ukrainian</option>
            <option value='zh/class.parallel-future.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.parallel-future" class="reference">

 <h1 class="title">The parallel\Future class</h1>
 

 <div class="partintro"><p class="verinfo">(0.8.0)</p>

  <div class="section">
    <h2 class="title">Futures</h2>
    <p class="para">
     A Future represents the return value or uncaught exception from a task, and exposes an API for cancellation.
    </p>
     <div class="example" id="example-3608">
      <p><strong>Example #1 Example showing Future as return value</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$runtime </span><span style="color: #007700">= new </span><span style="color: #0000BB">\parallel\Runtime</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$future  </span><span style="color: #007700">= </span><span style="color: #0000BB">$runtime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(function(){<br />    return </span><span style="color: #DD0000">"World"</span><span style="color: #007700">;<br />});<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$future</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
Hello World
</pre></div>
      </div>
     </div>
    <p class="para">
     The behaviour of a future also allows it to be used as a simple synchronization point even where the task does not return a value explicitly.
    </p>
     <div class="example" id="example-3609">
      <p><strong>Example #2 Example showing Future as synchronization point</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$runtime </span><span style="color: #007700">= new </span><span style="color: #0000BB">\parallel\Runtime</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$future  </span><span style="color: #007700">= </span><span style="color: #0000BB">$runtime</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">run</span><span style="color: #007700">(function(){<br />    echo </span><span style="color: #DD0000">"in child "</span><span style="color: #007700">;<br />    for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&lt; </span><span style="color: #0000BB">500</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">++) {<br />        if (</span><span style="color: #0000BB">$i </span><span style="color: #007700">% </span><span style="color: #0000BB">10 </span><span style="color: #007700">== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">"."</span><span style="color: #007700">;<br />        }<br />    }<br />    echo </span><span style="color: #DD0000">" leaving child"</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">$future</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">value</span><span style="color: #007700">();<br />echo </span><span style="color: #DD0000">"\nparent continues\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents"><p>The above example will output
something similar to:</p></div>
      <div class="example-contents screen">
<div class="cdata"><pre>
in child .................................................. leaving child
parent continues
</pre></div>
      </div>
     </div>    
  </div>

  <div class="section" id="parallel-future.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">parallel\Future</strong>
     </span>
     {</div>

   
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Resolution */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="parallel-future.value.php" class="methodname">value</a></span>(): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* State */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-future.cancelled.php" class="methodname">cancelled</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-future.done.php" class="methodname">done</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Cancellation */</div>
    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="parallel-future.cancel.php" class="methodname">cancel</a></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


   }</div>


  </div>

 </div>

 




























<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="parallel-future.cancel.php">parallel\Future::cancel</a> — Cancellation</li><li><a href="parallel-future.cancelled.php">parallel\Future::cancelled</a> — State Detection</li><li><a href="parallel-future.done.php">parallel\Future::done</a> — State Detection</li><li><a href="parallel-future.value.php">parallel\Future::value</a> — Resolution</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/parallel/parallel.future.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.parallel-future%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.parallel-future&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-future.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126583">  <div class="votes">
    <div id="Vu126583">
    <a href="/manual/vote-note.php?id=126583&amp;page=class.parallel-future&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126583">
    <a href="/manual/vote-note.php?id=126583&amp;page=class.parallel-future&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126583" title="53% like this...">
    1
    </div>
  </div>
  <a href="#126583" class="name">
  <strong class="user"><em>Thierry Kauffmann</em></strong></a><a class="genanchor" href="#126583"> &para;</a><div class="date" title="2021-11-12 02:37"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126583">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Sample parallel Runtime/Future processing<br /> * using a generator to produce the list of items to process<br /> * <br /> * Items to process in parallel come from a generator<br /> * It could be anything : e.g fetch a mysql array, a DirectoryIterator...<br /> * Thus the number of items to process in parallel is NOT known in advance<br /> * <br /> * This algorithm attributes items to each parallel thread dynamically<br /> * As soon as a thread has finished working<br /> * It is assigned a new item to process<br /> * until all items are processed (generator closes)<br /> * <br /> * In this example we process 50 items in 5 parallel threads<br /> * It produces output in this form (output changes at each run) :<br /> * <br /> * ThreadId: 1 =&gt; Item: 1 (Start)<br /> * ThreadId: 2 =&gt; Item: 2 (Start)<br /> * ThreadId: 3 =&gt; Item: 3 (Start)<br /> * ThreadId: 4 =&gt; Item: 4 (Start)<br /> * ThreadId: 5 =&gt; Item: 5 (Start)<br /> * ThreadId: 5 =&gt; Item: 5 Sleep: 3s (End)<br /> * ThreadId: 5 =&gt; Item: 6 (Start)<br /> * ThreadId: 3 =&gt; Item: 3 Sleep: 4s (End)<br /> * ThreadId: 3 =&gt; Item: 7 (Start)<br /> * ThreadId: 2 =&gt; Item: 2 Sleep: 6s (End)<br /> * ThreadId: 2 =&gt; Item: 8 (Start)<br /> * ...<br /> * ThreadId: 4 =&gt; Item: 44 Sleep: 6s (End)<br /> * ThreadId: 4 =&gt; Item: 49 (Start)<br /> * ThreadId: 3 =&gt; Item: 46 Sleep: 5s (End)<br /> * ThreadId: 3 =&gt; Item: 50 (Start)<br /> * ThreadId: 2 =&gt; Item: 43 Sleep: 9s (End)<br /> * Destroy ThreadId: 2<br /> * ThreadId: 1 =&gt; Item: 47 Sleep: 5s (End)<br /> * Destroy ThreadId: 1<br /> * ThreadId: 4 =&gt; Item: 49 Sleep: 7s (End)<br /> * Destroy ThreadId: 4<br /> * ThreadId: 5 =&gt; Item: 48 Sleep: 10s (End)<br /> * Destroy ThreadId: 5<br /> * ThreadId: 3 =&gt; Item: 50 Sleep: 10s (End)<br /> * Destroy ThreadId: 3<br /> */<br /><br />// Generate list of items to process with a generator<br /></span><span class="keyword">function </span><span class="default">generator</span><span class="keyword">(</span><span class="default">int $item_count</span><span class="keyword">) {<br />    echo </span><span class="string">"Item count: </span><span class="default">$item_count</span><span class="string">\n"</span><span class="keyword">;<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$item_count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        yield </span><span class="default">$i</span><span class="keyword">;<br />    }<br />}<br /><br />function </span><span class="default">testConcurrency</span><span class="keyword">(</span><span class="default">int $concurrency</span><span class="keyword">, </span><span class="default">int $max_item_count</span><span class="keyword">) {<br /><br />    </span><span class="comment">// Set item_count to a random number so that each run is different<br />    </span><span class="default">$item_count</span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$max_item_count</span><span class="keyword">);<br />    </span><span class="comment">// Create generator<br />    </span><span class="default">$generator </span><span class="keyword">= </span><span class="default">generator</span><span class="keyword">(</span><span class="default">$item_count</span><span class="keyword">);<br /><br />    </span><span class="comment">// Function executing in each thread. Have a snap for a random time for example !<br />    // You could make some calculation here or transfer files or whatever...<br />    </span><span class="default">$producer </span><span class="keyword">= function (</span><span class="default">int $item_id</span><span class="keyword">) {<br />        </span><span class="default">$seconds </span><span class="keyword">= </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$seconds</span><span class="keyword">);<br />        return [</span><span class="string">'item_id' </span><span class="keyword">=&gt; </span><span class="default">$item_id</span><span class="keyword">, </span><span class="string">'sleep_seconds' </span><span class="keyword">=&gt; </span><span class="default">$seconds</span><span class="keyword">];<br />    };<br /><br />    </span><span class="comment">// Fill up threads with a single future initialized to 'false' value<br />    </span><span class="keyword">for (</span><span class="default">$thread_id </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$thread_id </span><span class="keyword">&lt;= </span><span class="default">$concurrency</span><span class="keyword">; </span><span class="default">$thread_id</span><span class="keyword">++) {<br />        </span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">] = [</span><span class="string">'runtime' </span><span class="keyword">=&gt; new </span><span class="default">\parallel\Runtime</span><span class="keyword">(), </span><span class="string">'future' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">];<br />    }<br />    <br />    </span><span class="comment">// Create infinite loop for the whole processing<br />    </span><span class="keyword">while (</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="comment">// Loop through threads until generator closes and all threads are destroyed<br />        </span><span class="keyword">foreach (</span><span class="default">$threads </span><span class="keyword">as </span><span class="default">$thread_id </span><span class="keyword">=&gt; &amp;</span><span class="default">$thread</span><span class="keyword">) {<br />            if (</span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">] === </span><span class="default">false </span><span class="keyword">and </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {<br />                </span><span class="comment">// Thread is inactive and generator still has values : run something in the thread<br />                </span><span class="default">$item_id </span><span class="keyword">= </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />                </span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">] = </span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'runtime'</span><span class="keyword">]-&gt;</span><span class="default">run</span><span class="keyword">(</span><span class="default">$producer</span><span class="keyword">, [</span><span class="default">$item_id</span><span class="keyword">]);<br />                echo </span><span class="string">"ThreadId: </span><span class="default">$thread_id</span><span class="string"> =&gt; Item: </span><span class="default">$item_id</span><span class="string"> (Start)\n"</span><span class="keyword">;<br />                </span><span class="default">$generator</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />            } elseif (</span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">] === </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="comment">// Destroy thread in case generator is closed<br />                </span><span class="keyword">echo </span><span class="string">"Destroy ThreadId: </span><span class="default">$thread_id</span><span class="string">\n"</span><span class="keyword">;<br />                unset(</span><span class="default">$threads</span><span class="keyword">[</span><span class="default">$thread_id</span><span class="keyword">]);<br />            } elseif (</span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">]-&gt;</span><span class="default">done</span><span class="keyword">()) {<br />                </span><span class="comment">// Thread finished working. Get result value.<br />                </span><span class="default">$item </span><span class="keyword">= </span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">]-&gt;</span><span class="default">value</span><span class="keyword">();<br />                echo </span><span class="string">"ThreadId: </span><span class="default">$thread_id</span><span class="string"> =&gt; Item: </span><span class="keyword">{</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'item_id'</span><span class="keyword">]}</span><span class="string"> Sleep: </span><span class="keyword">{</span><span class="default">$item</span><span class="keyword">[</span><span class="string">'sleep_seconds'</span><span class="keyword">]}</span><span class="string">s (End)\n"</span><span class="keyword">;<br />                </span><span class="comment">// Thread is ready to run again<br />                </span><span class="default">$thread</span><span class="keyword">[</span><span class="string">'future'</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />            }<br />        }<br /><br />        </span><span class="comment">// Escape infinite loop when all threads are destroyed<br />        </span><span class="keyword">if (empty(</span><span class="default">$threads</span><span class="keyword">)) break;<br />    }<br />}<br /><br /></span><span class="default">$concurrency </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$item_count </span><span class="keyword">= </span><span class="default">50</span><span class="keyword">;<br /><br /></span><span class="default">testConcurrency</span><span class="keyword">(</span><span class="default">$concurrency</span><span class="keyword">, </span><span class="default">$item_count</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=class.parallel-future&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.parallel-future.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.parallel.php">parallel</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.parallel.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="parallel.setup.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="philosophy.parallel.php" title="Philosophy">Philosophy</a>
                        </li>
                                                <li class="">
                            <a href="functional.parallel.php" title="Functional API">Functional API</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-runtime.php" title="parallel\Runtime">parallel\Runtime</a>
                        </li>
                                                <li class="current">
                            <a href="class.parallel-future.php" title="parallel\Future">parallel\Future</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-channel.php" title="parallel\Channel">parallel\Channel</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events.php" title="parallel\Events">parallel\Events</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-input.php" title="parallel\Events\Input">parallel\Events\Input</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-event.php" title="parallel\Events\Event">parallel\Events\Event</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-events-event-type.php" title="parallel\Events\Event\Type">parallel\Events\Event\Type</a>
                        </li>
                                                <li class="">
                            <a href="class.parallel-sync.php" title="parallel\Sync">parallel\Sync</a>
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
