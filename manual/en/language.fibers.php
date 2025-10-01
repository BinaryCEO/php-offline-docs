<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Fibers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.fibers.php">
 <link rel="shorturl" href="https://www.php.net/fibers">
 <link rel="alternate" href="https://www.php.net/fibers" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.exceptions.extending.php">
 <link rel="next" href="https://www.php.net/manual/en/language.generators.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.fibers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.fibers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.fibers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.fibers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.fibers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.fibers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.fibers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.fibers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.fibers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.fibers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.fibers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fibers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Fibers - Manual" />
<meta name="twitter:description" content="Fibers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Fibers - Manual" />
<meta itemprop="description" content="Fibers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fibers" />

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
        <a href="language.generators.php">
          Generators &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.exceptions.extending.php">
          &laquo; Extending Exceptions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      </ul>
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
            <option value='en/language.fibers.php' selected="selected">English</option>
            <option value='de/language.fibers.php'>German</option>
            <option value='es/language.fibers.php'>Spanish</option>
            <option value='fr/language.fibers.php'>French</option>
            <option value='it/language.fibers.php'>Italian</option>
            <option value='ja/language.fibers.php'>Japanese</option>
            <option value='pt_BR/language.fibers.php'>Brazilian Portuguese</option>
            <option value='ru/language.fibers.php'>Russian</option>
            <option value='tr/language.fibers.php'>Turkish</option>
            <option value='uk/language.fibers.php'>Ukrainian</option>
            <option value='zh/language.fibers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.fibers" class="chapter">
 <h1 class="title">Fibers</h1>


 <div class="simplesect" id="language.fibers.overview">
  <h3 class="title">Fibers overview</h3>
  <p class="verinfo">(PHP 8 &gt;= 8.1.0)</p>
  <p class="para">
   Fibers represent full-stack, interruptible functions. Fibers may be suspended from anywhere in the call-stack,
   pausing execution within the fiber until the fiber is resumed at a later time.
  </p>
  <p class="para">
   Fibers pause the entire execution stack, so the direct caller of the function does not need to change how it
   invokes the function.
  </p>
  <p class="para">
   Execution may be interrupted anywhere in the call stack using <span class="methodname"><a href="fiber.suspend.php" class="methodname">Fiber::suspend()</a></span>
   (that is, the call to <span class="methodname"><a href="fiber.suspend.php" class="methodname">Fiber::suspend()</a></span> may be in a deeply nested function or not
   even exist at all).
  </p>
  <p class="para">
   Unlike stack-less <span class="classname"><a href="class.generator.php" class="classname">Generator</a></span>s, each <span class="classname"><a href="class.fiber.php" class="classname">Fiber</a></span> has its own call stack,
   allowing them to be paused within deeply nested function calls. A function declaring an interruption point
   (that is, calling <span class="methodname"><a href="fiber.suspend.php" class="methodname">Fiber::suspend()</a></span>) need not change its return type, unlike a function using
   <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> which must return a <span class="classname"><a href="class.generator.php" class="classname">Generator</a></span> instance.
  </p>
  <p class="para">
   Fibers can be suspended in any function call, including those called from within the PHP VM, such as functions
   provided to <span class="function"><a href="function.array-map.php" class="function">array_map()</a></span> or methods called by <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> on an
   <span class="classname"><a href="class.iterator.php" class="classname">Iterator</a></span> object.
  </p>
  <p class="para">
   Once suspended, execution of the fiber may be resumed with any value using <span class="methodname"><a href="fiber.resume.php" class="methodname">Fiber::resume()</a></span>
   or by throwing an exception into the fiber using <span class="methodname"><a href="fiber.throw.php" class="methodname">Fiber::throw()</a></span>. The value is returned
   (or exception thrown) from <span class="methodname"><a href="fiber.suspend.php" class="methodname">Fiber::suspend()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Prior to PHP 8.4.0, switching fibers during the execution of an object
    <a href="language.oop5.decon.php#language.oop5.decon.destructor" class="link">destructor</a> was not
    allowed.
   </span>
  </p></blockquote> 

  <div class="example" id="language.fiber.example.basic">
   <p><strong>Example #1 Basic usage</strong></p>
   <div class="example-contents">
    <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fiber </span><span style="color: #007700">= new </span><span style="color: #0000BB">Fiber</span><span style="color: #007700">(function (): </span><span style="color: #0000BB">void </span><span style="color: #007700">{<br />   </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">Fiber</span><span style="color: #007700">::</span><span style="color: #0000BB">suspend</span><span style="color: #007700">(</span><span style="color: #DD0000">'fiber'</span><span style="color: #007700">);<br />   echo </span><span style="color: #DD0000">"Value used to resume fiber: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />});<br /><br /></span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">$fiber</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">start</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Value from fiber suspending: "</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fiber</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">resume</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
    <div class="cdata"><pre>
Value from fiber suspending: fiber
Value used to resume fiber: test
</pre></div>
   </div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/fibers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.fibers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.fibers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.fibers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="127029">  <div class="votes">
    <div id="Vu127029">
    <a href="/manual/vote-note.php?id=127029&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127029">
    <a href="/manual/vote-note.php?id=127029&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127029" title="76% like this...">
    99
    </div>
  </div>
  <a href="#127029" class="name">
  <strong class="user"><em>user at csa dot es</em></strong></a><a class="genanchor" href="#127029"> &para;</a><div class="date" title="2022-05-05 07:11"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127029">
<div class="phpcode"><code><span class="html">Perhaps not using the same variable name everywhere will be a good idea<br /><br /><span class="default">&lt;?php<br />$fiber </span><span class="keyword">= new </span><span class="default">Fiber</span><span class="keyword">(function (): </span><span class="default">void </span><span class="keyword">{<br />   </span><span class="default">$parm </span><span class="keyword">= </span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">suspend</span><span class="keyword">(</span><span class="string">'fiber'</span><span class="keyword">);<br />   echo </span><span class="string">"Value used to resume fiber: "</span><span class="keyword">, </span><span class="default">$parm</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />});<br /><br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">();<br /><br />echo </span><span class="string">"Value from fiber suspending: "</span><span class="keyword">, </span><span class="default">$res</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127282">  <div class="votes">
    <div id="Vu127282">
    <a href="/manual/vote-note.php?id=127282&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127282">
    <a href="/manual/vote-note.php?id=127282&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127282" title="75% like this...">
    44
    </div>
  </div>
  <a href="#127282" class="name">
  <strong class="user"><em>Ali Madadi</em></strong></a><a class="genanchor" href="#127282"> &para;</a><div class="date" title="2022-07-14 10:17"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127282">
<div class="phpcode"><code><span class="html">Here is a simple scheduler and thread pool that implements multithreading using fibers and tick functions in PHP 8.1 and returns the return value of each function in the pool in an array at the end.<br /><br />Note that due to some bugs, you need to register a new tick function for each "thread". Remember to unregister all of them at the end.<br /><br />The link bellow is the discussion on a bug that is going on right now (At the time of writing this). Note that based on the discussion, the ability to call Fiber::suspend() inside tick function may become forbidden in PHP 8.2+. But if the bug gets fixed, you can move register_tick_function() line to the top of the class, and this simple multithreading class in pure PHP code will work like a charm.<br /><a href="https://github.com/php/php-src/issues/8960" rel="nofollow" target="_blank">https://github.com/php/php-src/issues/8960</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br />class </span><span class="default">Thread </span><span class="keyword">{<br />  protected static </span><span class="default">$names </span><span class="keyword">= [];<br />  protected static </span><span class="default">$fibers </span><span class="keyword">= [];<br />  protected static </span><span class="default">$params </span><span class="keyword">= [];<br /><br />  public static function </span><span class="default">register</span><span class="keyword">(</span><span class="default">string</span><span class="keyword">|</span><span class="default">int $name</span><span class="keyword">, callable </span><span class="default">$callback</span><span class="keyword">, array </span><span class="default">$params</span><span class="keyword">)<br />  {<br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$names</span><span class="keyword">[]  = </span><span class="default">$name</span><span class="keyword">;<br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$fibers</span><span class="keyword">[] = new </span><span class="default">Fiber</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">);<br />    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$params</span><span class="keyword">[] = </span><span class="default">$params</span><span class="keyword">;<br />  }<br /><br />  public static function </span><span class="default">run</span><span class="keyword">() {<br />    </span><span class="default">$output </span><span class="keyword">= [];<br /><br />    while (</span><span class="default">self</span><span class="keyword">::</span><span class="default">$fibers</span><span class="keyword">) {<br />      foreach (</span><span class="default">self</span><span class="keyword">::</span><span class="default">$fibers </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$fiber</span><span class="keyword">) {<br />          try {<br />              if (!</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isStarted</span><span class="keyword">()) {<br />                  </span><span class="comment">// Register a new tick function for scheduling this fiber<br />                  </span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'Thread::scheduler'</span><span class="keyword">);<br />                  </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">(...</span><span class="default">self</span><span class="keyword">::</span><span class="default">$params</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />              } elseif (</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isTerminated</span><span class="keyword">()) {<br />                  </span><span class="default">$output</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">$names</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">getReturn</span><span class="keyword">();<br />                  unset(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$fibers</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />              } elseif (</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isSuspended</span><span class="keyword">()) {<br />                </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">();<br />              }                <br />          } catch (</span><span class="default">Throwable $e</span><span class="keyword">) {<br />              </span><span class="default">$output</span><span class="keyword">[</span><span class="default">self</span><span class="keyword">::</span><span class="default">$names</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$e</span><span class="keyword">;<br />          }<br />      }<br />    }<br /><br />    return </span><span class="default">$output</span><span class="keyword">;<br />  }<br /><br />  public static function </span><span class="default">scheduler </span><span class="keyword">() {<br />    if(</span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">getCurrent</span><span class="keyword">() === </span><span class="default">null</span><span class="keyword">) {<br />      return;<br />    }<br /><br />    </span><span class="comment">// running Fiber::suspend() in this if condition will prevent an infinite loop!<br />    </span><span class="keyword">if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$fibers</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">)<br />    {<br />      </span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">suspend</span><span class="keyword">();<br />    }<br />  }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />And here is an example code on how to use above Thread class:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// defining a non-blocking thread, so multiple calls will run in concurrent mode using above Thread class.<br /></span><span class="keyword">function </span><span class="default">thread </span><span class="keyword">(</span><span class="default">string $print</span><span class="keyword">, </span><span class="default">int $loop</span><span class="keyword">)<br />{<br />  </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$loop</span><span class="keyword">;<br />  while (</span><span class="default">$i</span><span class="keyword">--){<br />    echo </span><span class="default">$print</span><span class="keyword">;<br />  }<br /><br />  return </span><span class="string">"Thread '</span><span class="keyword">{</span><span class="default">$print</span><span class="keyword">}</span><span class="string">' finished after printing '</span><span class="keyword">{</span><span class="default">$print</span><span class="keyword">}</span><span class="string">' for </span><span class="keyword">{</span><span class="default">$loop</span><span class="keyword">}</span><span class="string"> times!"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// registering 6 Threads (A, B, C, D, E, and F)<br /></span><span class="keyword">foreach(</span><span class="default">range</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'F'</span><span class="keyword">) as </span><span class="default">$c</span><span class="keyword">) {<br />  </span><span class="default">Thread</span><span class="keyword">::</span><span class="default">register</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="string">'thread'</span><span class="keyword">, [</span><span class="default">$c</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">)]);<br />}<br /><br /></span><span class="comment">// run threads and wait until execution finishes<br /></span><span class="default">$outputs </span><span class="keyword">= </span><span class="default">Thread</span><span class="keyword">::</span><span class="default">run</span><span class="keyword">();<br /><br /></span><span class="comment">// print outputs<br /></span><span class="keyword">echo </span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="string">'-------------- RETURN VALUES --------------'</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$outputs</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The output will be something like this (but probably different):<br /><br />ABCDEFABCDEFABCDEFABCDEFABCDEFABCEFABFABFABEBEFBEFEFEFAABEABEBEFBEFFAAAAAA<br />-------------- RETURN VALUES --------------<br />Array<br />(<br />    [D] =&gt; Thread 'D' finished after printing 'D' for 5 times!<br />    [C] =&gt; Thread 'C' finished after printing 'C' for 6 times!<br />    [E] =&gt; Thread 'E' finished after printing 'E' for 15 times!<br />    [B] =&gt; Thread 'B' finished after printing 'B' for 15 times!<br />    [F] =&gt; Thread 'F' finished after printing 'F' for 15 times!<br />    [A] =&gt; Thread 'A' finished after printing 'A' for 18 times!<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="129688">  <div class="votes">
    <div id="Vu129688">
    <a href="/manual/vote-note.php?id=129688&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129688">
    <a href="/manual/vote-note.php?id=129688&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129688" title="77% like this...">
    5
    </div>
  </div>
  <a href="#129688" class="name">
  <strong class="user"><em>nikiDOTamministratoreATgmail at no dot spam</em></strong></a><a class="genanchor" href="#129688"> &para;</a><div class="date" title="2024-08-06 09:14"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129688">
<div class="phpcode"><code><span class="html">TL;DR<br /><br />The Thread class from Ali Madabi above has been eventually deprecated by the linked issue as relaying on tick functions for preemptive multi-threading simulation has been deemed "bad practice". Better ways were suggested for achieving some sort of multi-threading, such as: Revolt and AMP.<br /><br /><a href="https://github.com/php/php-src/issues/8960#issuecomment-1184249445" rel="nofollow" target="_blank">https://github.com/php/php-src/issues/8960#issuecomment-1184249445</a></span></code></div>
  </div>
 </div>
  <div class="note" id="127846">  <div class="votes">
    <div id="Vu127846">
    <a href="/manual/vote-note.php?id=127846&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127846">
    <a href="/manual/vote-note.php?id=127846&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127846" title="75% like this...">
    12
    </div>
  </div>
  <a href="#127846" class="name">
  <strong class="user"><em>nesk at xakep dot ru</em></strong></a><a class="genanchor" href="#127846"> &para;</a><div class="date" title="2022-10-24 01:21"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127846">
<div class="phpcode"><code><span class="html">I think that in some cases it makes sense to convert a Fiber to a Generator (Coroutine) for convenience. In such cases, this code will be useful:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fiber_to_coroutine</span><span class="keyword">(</span><span class="default">\Fiber $fiber</span><span class="keyword">): </span><span class="default">\Generator<br /></span><span class="keyword">{<br />    </span><span class="default">$index </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">; </span><span class="comment">// Note: Pre-increment is faster than post-increment.<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />    </span><span class="comment">// Allow an already running fiber.<br />    </span><span class="keyword">if (!</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isStarted</span><span class="keyword">()) {<br />        </span><span class="default">$value </span><span class="keyword">= yield ++</span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">// A Fiber without suspends should return the result immediately.<br />    </span><span class="keyword">if (!</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isTerminated</span><span class="keyword">()) {<br />        while (</span><span class="default">true</span><span class="keyword">) {<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br /><br />            </span><span class="comment">// The last call to "resume()" moves the execution of the<br />            // Fiber to the "return" stmt.<br />            //<br />            // So the "yield" is not needed. Skip this step and return<br />            // the result.<br />            </span><span class="keyword">if (</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isTerminated</span><span class="keyword">()) {<br />                break;<br />            }<br /><br />            </span><span class="default">$value </span><span class="keyword">= yield ++</span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">getReturn</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127125">  <div class="votes">
    <div id="Vu127125">
    <a href="/manual/vote-note.php?id=127125&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127125">
    <a href="/manual/vote-note.php?id=127125&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127125" title="68% like this...">
    20
    </div>
  </div>
  <a href="#127125" class="name">
  <strong class="user"><em>maxpanchnko at gmail dot com</em></strong></a><a class="genanchor" href="#127125"> &para;</a><div class="date" title="2022-05-22 12:16"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127125">
<div class="phpcode"><code><span class="html">One of examples, how to make multi_curl faster twice (pseudocode) using Fibers:<br /><br /><span class="default">&lt;?php<br /><br />$curlHandles </span><span class="keyword">= [];<br /></span><span class="default">$urls </span><span class="keyword">= [<br />    </span><span class="string">'<a href="https://example.com/1" rel="nofollow" target="_blank">https://example.com/1</a>'</span><span class="keyword">,<br />    </span><span class="string">'<a href="https://example.com/2" rel="nofollow" target="_blank">https://example.com/2</a>'</span><span class="keyword">,<br />    ...<br />    </span><span class="string">'<a href="https://example.com/1000" rel="nofollow" target="_blank">https://example.com/1000</a>'</span><span class="keyword">,<br />];<br /></span><span class="default">$mh </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /></span><span class="default">$mh_fiber </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /><br /></span><span class="default">$halfOfList </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$urls</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />foreach (</span><span class="default">$urls </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$url</span><span class="keyword">) {<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$curlHandles</span><span class="keyword">[] = </span><span class="default">$ch</span><span class="keyword">;<br /><br />    </span><span class="comment">// half of urls will be run in background in fiber<br />    </span><span class="default">$index </span><span class="keyword">&gt; </span><span class="default">$halfOfList </span><span class="keyword">? </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">) : </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$fiber </span><span class="keyword">= new </span><span class="default">Fiber</span><span class="keyword">(function (</span><span class="default">CurlMultiHandle $mh</span><span class="keyword">) {<br />    </span><span class="default">$still_running </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    do {<br />        </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);<br />        </span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">suspend</span><span class="keyword">();<br />    } while (</span><span class="default">$still_running</span><span class="keyword">);<br />});<br /><br /></span><span class="comment">// run curl multi exec in background while fiber is in suspend status<br /></span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">);<br /><br /></span><span class="default">$still_running </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />do {<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);<br />} while (</span><span class="default">$still_running</span><span class="keyword">);<br /><br />do {<br />    </span><span class="comment">/**<br />     * at this moment curl in fiber already finished (maybe)<br />     * so we must refresh $still_running variable with one more cycle "do while" in fiber<br />     **/<br />    </span><span class="default">$status_fiber </span><span class="keyword">= </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">();<br />} while (!</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isTerminated</span><span class="keyword">());<br /><br />foreach (</span><span class="default">$curlHandles </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$ch</span><span class="keyword">) {<br />    </span><span class="default">$index </span><span class="keyword">&gt; </span><span class="default">$halfOfList </span><span class="keyword">? </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">) : </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />}<br /></span><span class="default">curl_multi_close</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">);<br /></span><span class="default">curl_multi_close</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127383">  <div class="votes">
    <div id="Vu127383">
    <a href="/manual/vote-note.php?id=127383&amp;page=language.fibers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127383">
    <a href="/manual/vote-note.php?id=127383&amp;page=language.fibers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127383" title="60% like this...">
    5
    </div>
  </div>
  <a href="#127383" class="name">
  <strong class="user"><em>newuser</em></strong></a><a class="genanchor" href="#127383"> &para;</a><div class="date" title="2022-08-01 03:04"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127383">
<div class="phpcode"><code><span class="html">Example of the same functionality showing what is the difference between Fiber and Generator<br /><span class="default">&lt;?php<br />$gener </span><span class="keyword">= (function () use (&amp;</span><span class="default">$gener</span><span class="keyword">): </span><span class="default">Generator </span><span class="keyword">{<br />    </span><span class="default">$userfunc </span><span class="keyword">= function () use (&amp;</span><span class="default">$gener</span><span class="keyword">) : </span><span class="default">Generator </span><span class="keyword">{<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(function () use (&amp;</span><span class="default">$gener</span><span class="keyword">) {<br />            </span><span class="default">$gener</span><span class="keyword">-&gt;</span><span class="default">send</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br />        });<br />        return yield </span><span class="string">'test'</span><span class="keyword">;<br />    };<br />    </span><span class="default">$parm </span><span class="keyword">= yield from </span><span class="default">$userfunc</span><span class="keyword">();<br />    echo </span><span class="string">"Value used to resume fiber: "</span><span class="keyword">, </span><span class="default">$parm</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />})();<br /><br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$gener</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">();<br />echo </span><span class="string">"Value from fiber suspending: "</span><span class="keyword">, </span><span class="default">$res</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;<br />&lt;?php<br />$fiber </span><span class="keyword">= new </span><span class="default">Fiber</span><span class="keyword">(function () use (&amp;</span><span class="default">$fiber</span><span class="keyword">) : </span><span class="default">void </span><span class="keyword">{<br />    </span><span class="default">$userfunc </span><span class="keyword">= function () use (&amp;</span><span class="default">$fiber</span><span class="keyword">) : </span><span class="default">string </span><span class="keyword">{<br />        </span><span class="default">register_shutdown_function</span><span class="keyword">(function () use (&amp;</span><span class="default">$fiber</span><span class="keyword">) {<br />            </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br />        });<br />        return </span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">suspend</span><span class="keyword">(</span><span class="string">'fiber'</span><span class="keyword">);<br />    };<br />    </span><span class="default">$parm </span><span class="keyword">= </span><span class="default">$userfunc</span><span class="keyword">(); <br />    echo </span><span class="string">"Value used to resume fiber: "</span><span class="keyword">, </span><span class="default">$parm</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />});<br /><br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">();<br />echo </span><span class="string">"Value from fiber suspending: "</span><span class="keyword">, </span><span class="default">$res</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.fibers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.fibers.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="langref.php">Language Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.basic-syntax.php" title="Basic syntax">Basic syntax</a>
                        </li>
                                                <li class="">
                            <a href="language.types.php" title="Types">Types</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.php" title="Variables">Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.constants.php" title="Constants">Constants</a>
                        </li>
                                                <li class="">
                            <a href="language.expressions.php" title="Expressions">Expressions</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.php" title="Operators">Operators</a>
                        </li>
                                                <li class="">
                            <a href="language.control-structures.php" title="Control Structures">Control Structures</a>
                        </li>
                                                <li class="">
                            <a href="language.functions.php" title="Functions">Functions</a>
                        </li>
                                                <li class="">
                            <a href="language.oop5.php" title="Classes and Objects">Classes and Objects</a>
                        </li>
                                                <li class="">
                            <a href="language.namespaces.php" title="Namespaces">Namespaces</a>
                        </li>
                                                <li class="">
                            <a href="language.enumerations.php" title="Enumerations">Enumerations</a>
                        </li>
                                                <li class="">
                            <a href="language.errors.php" title="Errors">Errors</a>
                        </li>
                                                <li class="">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="current">
                            <a href="language.fibers.php" title="Fibers">Fibers</a>
                        </li>
                                                <li class="">
                            <a href="language.generators.php" title="Generators">Generators</a>
                        </li>
                                                <li class="">
                            <a href="language.attributes.php" title="Attributes">Attributes</a>
                        </li>
                                                <li class="">
                            <a href="language.references.php" title="References Explained">References Explained</a>
                        </li>
                                                <li class="">
                            <a href="reserved.variables.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="reserved.exceptions.php" title="Predefined Exceptions">Predefined Exceptions</a>
                        </li>
                                                <li class="">
                            <a href="reserved.interfaces.php" title="Predefined Interfaces and Classes">Predefined Interfaces and Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.attributes.php" title="Predefined Attributes">Predefined Attributes</a>
                        </li>
                                                <li class="">
                            <a href="context.php" title="Context options and parameters">Context options and parameters</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.php" title="Supported Protocols and Wrappers">Supported Protocols and Wrappers</a>
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
