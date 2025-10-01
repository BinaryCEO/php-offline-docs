<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Exceptions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.exceptions.php">
 <link rel="shorturl" href="https://www.php.net/exceptions">
 <link rel="alternate" href="https://www.php.net/exceptions" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/langref.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.errors.php7.php">
 <link rel="next" href="https://www.php.net/manual/en/language.exceptions.extending.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.exceptions.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.exceptions.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.exceptions.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.exceptions.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.exceptions.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.exceptions.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.exceptions.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.exceptions.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.exceptions.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.exceptions.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.exceptions.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Exceptions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Exceptions - Manual" />
<meta name="twitter:description" content="Exceptions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Exceptions - Manual" />
<meta itemprop="description" content="Exceptions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Exceptions" />

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
        <a href="language.exceptions.extending.php">
          Extending Exceptions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.errors.php7.php">
          &laquo; Errors in PHP 7        </a>
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
            <option value='en/language.exceptions.php' selected="selected">English</option>
            <option value='de/language.exceptions.php'>German</option>
            <option value='es/language.exceptions.php'>Spanish</option>
            <option value='fr/language.exceptions.php'>French</option>
            <option value='it/language.exceptions.php'>Italian</option>
            <option value='ja/language.exceptions.php'>Japanese</option>
            <option value='pt_BR/language.exceptions.php'>Brazilian Portuguese</option>
            <option value='ru/language.exceptions.php'>Russian</option>
            <option value='tr/language.exceptions.php'>Turkish</option>
            <option value='uk/language.exceptions.php'>Ukrainian</option>
            <option value='zh/language.exceptions.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.exceptions" class="chapter">
 <h1 class="title">Exceptions</h1>
<h2>Table of Contents</h2><ul class="chunklist chunklist_chapter"><li><a href="language.exceptions.extending.php">Extending Exceptions</a></li></ul>

 <p class="para">
  PHP has an exception model similar to that of other programming
  languages. An exception can be <a href="language.exceptions.php" class="link"><code class="literal">throw</code></a>n, and caught (&quot;<a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a>ed&quot;) within
  PHP. Code may be surrounded in a <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> block, to facilitate the catching
  of potential exceptions. Each <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> must have at least one corresponding
  <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> or <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block.
 </p>
 <p class="para">
  If an exception is thrown and its current function scope has no <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a>
  block, the exception will &quot;bubble up&quot; the call stack to the calling
  function until it finds a matching <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block. All <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> blocks it encounters
  along the way will be executed. If the call stack is unwound all the way to the
  global scope without encountering a matching <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block, the program will
  terminate with a fatal error unless a global exception handler has been set.
 </p>
 <p class="para">
  The thrown object must be an <a href="language.operators.type.php" class="link"><code class="literal">instanceof</code></a> <span class="interfacename"><a href="class.throwable.php" class="interfacename">Throwable</a></span>.
  Trying to throw an object that is not will result in a PHP Fatal Error.
 </p>
 <p class="para">
  As of PHP 8.0.0, the <a href="language.exceptions.php" class="link"><code class="literal">throw</code></a> keyword is an expression and may be used in any expression
  context. In prior versions it was a statement and was required to be on its own line.
 </p>

  <div id="language.exceptions.catch" class="sect1">
   <h2 class="title"><code class="literal">catch</code></h2>
   <p class="para">
    A <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block defines how to respond to a thrown exception. A <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a>
    block defines one or more types of exception or error it can handle, and
    optionally a variable to which to assign the exception. (The variable was
    required prior to PHP 8.0.0.)  The first <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block a thrown exception
    or error encounters that matches the type of the thrown object will handle
    the object.
   </p>
   <p class="para">
    Multiple <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> blocks can be used to catch different classes of
    exceptions. Normal execution (when no exception is thrown within the <a href="language.exceptions.php" class="link"><code class="literal">try</code></a>
    block) will continue after that last <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block defined in sequence.
    Exceptions can be <a href="language.exceptions.php" class="link"><code class="literal">throw</code></a>n (or re-thrown) within a <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block. If not,
    execution will continue after the <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block that was triggered.
   </p>
   <p class="para">
    When an exception is thrown, code following the statement will not be
    executed, and PHP will attempt to find the first matching <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block.
    If an exception is not caught, a PHP Fatal Error will be issued with an
    &quot;<code class="literal">Uncaught Exception ...</code>&quot; message, unless a handler has
    been defined with <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span>.
   </p>
   <p class="para">
    As of PHP 7.1.0, a <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block may specify multiple exceptions
    using the pipe (<code class="literal">|</code>) character. This is useful for when
    different exceptions from different class hierarchies are handled the
    same.
   </p>
   <p class="para">
    As of PHP 8.0.0, the variable name for a caught exception is optional.
    If not specified, the <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block will still execute but will not
    have access to the thrown object.
   </p>
  </div>

  <div id="language.exceptions.finally" class="sect1">
   <h2 class="title"><code class="literal">finally</code></h2>
   <p class="para">
    A <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block may also be specified after or
    instead of <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> blocks. Code within the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block will always be
    executed after the <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> and <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> blocks, regardless of whether an
    exception has been thrown, and before normal execution resumes.
   </p>
   <p class="para">
    One notable interaction is between the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block and a <a href="function.return.php" class="link"><code class="literal">return</code></a> statement.
    If a <a href="function.return.php" class="link"><code class="literal">return</code></a> statement is encountered inside either the <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> or the <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> blocks,
    the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block will still be executed. Moreover, the <a href="function.return.php" class="link"><code class="literal">return</code></a> statement is
    evaluated when encountered, but the result will be returned after the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block
    is executed. Additionally, if the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block also contains a <a href="function.return.php" class="link"><code class="literal">return</code></a> statement,
    the value from the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block is returned.
   </p>
   <p class="para">
    Another notable interaction is between an exception thrown from within a <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> block,
    and an exception thrown from within a <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block. If both blocks throw an exception,
    then the exception thrown from the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block will be the one that is propagated,
    and the exception thrown from the <a href="language.exceptions.php" class="link"><code class="literal">try</code></a> block will be used as its previous exception.
   </p>
  </div>

 <div id="language.exceptions.exception-handler" class="sect1">
  <h2 class="title">Global exception handler</h2>
  <p class="para">
   If an exception is allowed to bubble up to the global scope, it may be caught
   by a global exception handler if set. The <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span>
   function can set a function that will be called in place of a <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block if no
   other block is invoked. The effect is essentially the same as if the entire program
   were wrapped in a <a href="language.exceptions.php" class="link"><code class="literal">try</code></a>-<a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block with that function as the <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a>.
  </p>
 </div>

 <div id="language.exceptions.notes" class="sect1">
   <h2 class="title">Notes</h2>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Internal PHP functions mainly use
     <a href="errorfunc.configuration.php#ini.error-reporting" class="link">Error reporting</a>, only modern
     <a href="language.oop5.php" class="link">Object-oriented</a>
     extensions use exceptions. However, errors can be easily translated to
     exceptions with <a href="class.errorexception.php" class="link">ErrorException</a>.
     This technique only works with non-fatal errors, however.
    </p>
    <div class="example" id="example-410">
     <p><strong>Example #1 Converting error reporting to exceptions</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">exceptions_error_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$severity</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #0000BB">$lineno</span><span style="color: #007700">) {<br />    throw new </span><span style="color: #0000BB">ErrorException</span><span style="color: #007700">(</span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$severity</span><span style="color: #007700">, </span><span style="color: #0000BB">$filename</span><span style="color: #007700">, </span><span style="color: #0000BB">$lineno</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">set_error_handler</span><span style="color: #007700">(</span><span style="color: #DD0000">'exceptions_error_handler'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p></blockquote>
   <div class="tip"><strong class="tip">Tip</strong>
    <p class="para">
     The <a href="book.spl.php#intro.spl" class="link">Standard PHP Library (SPL)</a> provides
     a good number of <a href="spl.exceptions.php" class="link">built-in
     exceptions</a>.
    </p>
   </div>
 </div>

  <div id="language.exceptions.examples" class="sect1">
   <h2 class="title">Examples</h2>

   <div class="example" id="example-411">
    <p><strong>Example #2 Throwing an Exception</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) {<br />    if (!</span><span style="color: #0000BB">$x</span><span style="color: #007700">) {<br />        throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Division by zero.'</span><span style="color: #007700">);<br />    }<br />    return </span><span style="color: #0000BB">1</span><span style="color: #007700">/</span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />}<br /><br />try {<br />    echo </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Caught exception: '</span><span style="color: #007700">,  </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Hello World\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
0.2
Caught exception: Division by zero.
Hello World
</pre></div>
    </div>
   </div>
   <div class="example" id="example-412">
    <p><strong>Example #3 Exception handling with a <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) {<br />    if (!</span><span style="color: #0000BB">$x</span><span style="color: #007700">) {<br />        throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Division by zero.'</span><span style="color: #007700">);<br />    }<br />    return </span><span style="color: #0000BB">1</span><span style="color: #007700">/</span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />}<br /><br />try {<br />    echo </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Caught exception: '</span><span style="color: #007700">,  </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} finally {<br />    echo </span><span style="color: #DD0000">"First finally.\n"</span><span style="color: #007700">;<br />}<br /><br />try {<br />    echo </span><span style="color: #0000BB">inverse</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Caught exception: '</span><span style="color: #007700">,  </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} finally {<br />    echo </span><span style="color: #DD0000">"Second finally.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Continue execution<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Hello World\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
0.2
First finally.
Caught exception: Division by zero.
Second finally.
Hello World
</pre></div>
    </div>
   </div>
   <div class="example" id="example-413">
    <p><strong>Example #4 Interaction between the <a href="language.exceptions.php#language.exceptions.finally" class="link"><code class="literal">finally</code></a> block and <a href="function.return.php" class="link"><code class="literal">return</code></a></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />    try {<br />        throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br />    } catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />        return </span><span style="color: #DD0000">'catch'</span><span style="color: #007700">;<br />    } finally {<br />        return </span><span style="color: #DD0000">'finally'</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #0000BB">test</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
finally
</pre></div>
    </div>
   </div>
   <div class="example" id="example-414">
    <p><strong>Example #5 Nested Exception</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyException </span><span style="color: #007700">extends </span><span style="color: #0000BB">Exception </span><span style="color: #007700">{ }<br /><br />class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">testing</span><span style="color: #007700">() {<br />        try {<br />            try {<br />                throw new </span><span style="color: #0000BB">MyException</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo!'</span><span style="color: #007700">);<br />            } catch (</span><span style="color: #0000BB">MyException $e</span><span style="color: #007700">) {<br />                </span><span style="color: #FF8000">// rethrow it<br />                </span><span style="color: #007700">throw </span><span style="color: #0000BB">$e</span><span style="color: #007700">;<br />            }<br />        } catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">());<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testing</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(4) &quot;foo!&quot;
</pre></div>
    </div>
   </div>
   <div class="example" id="example-415">
    <p><strong>Example #6 Multi catch exception handling</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">MyException </span><span style="color: #007700">extends </span><span style="color: #0000BB">Exception </span><span style="color: #007700">{ }<br /><br />class </span><span style="color: #0000BB">MyOtherException </span><span style="color: #007700">extends </span><span style="color: #0000BB">Exception </span><span style="color: #007700">{ }<br /><br />class </span><span style="color: #0000BB">Test </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">testing</span><span style="color: #007700">() {<br />        try {<br />            throw new </span><span style="color: #0000BB">MyException</span><span style="color: #007700">();<br />        } catch (</span><span style="color: #0000BB">MyException </span><span style="color: #007700">| </span><span style="color: #0000BB">MyOtherException $e</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">get_class</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">));<br />        }<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Test</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">testing</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(11) &quot;MyException&quot;
</pre></div>
    </div>
   </div>
   <div class="example" id="example-416">
    <p><strong>Example #7 Omitting the caught variable</strong></p>
    <div class="example-contents"><p>Only permitted in PHP 8.0.0 and later.</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">class </span><span style="color: #0000BB">SpecificException </span><span style="color: #007700">extends </span><span style="color: #0000BB">Exception </span><span style="color: #007700">{}<br /><br />function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />    throw new </span><span style="color: #0000BB">SpecificException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Oopsie'</span><span style="color: #007700">);<br />}<br /><br />try {<br />    </span><span style="color: #0000BB">test</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">SpecificException</span><span style="color: #007700">) {<br />    print </span><span style="color: #DD0000">"A SpecificException was thrown, but we don't care about the details."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
A SpecificException was thrown, but we don&#039;t care about the details.
</pre></div>
    </div>
   </div>
   <div class="example" id="example-417">
    <p><strong>Example #8 Throw as an expression</strong></p>
    <div class="example-contents"><p>Only permitted in PHP 8.0.0 and later.</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">test</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">do_something_risky</span><span style="color: #007700">() or throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'It did not work'</span><span style="color: #007700">);<br />}<br /><br />function </span><span style="color: #0000BB">do_something_risky</span><span style="color: #007700">() {<br />    return </span><span style="color: #0000BB">false</span><span style="color: #007700">; </span><span style="color: #FF8000">// Simulate failure<br /></span><span style="color: #007700">}<br /><br />try {<br />    </span><span style="color: #0000BB">test</span><span style="color: #007700">();<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    print </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">();<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
It did not work
</pre></div>
    </div>
   </div>
   <div class="example" id="example-418">
    <p><strong>Example #9 Exception in try and in finally</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">try {<br />    try {<br />        throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">message</span><span style="color: #007700">: </span><span style="color: #DD0000">'Third'</span><span style="color: #007700">, </span><span style="color: #0000BB">previous</span><span style="color: #007700">: new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Fourth'</span><span style="color: #007700">));<br />    } finally {<br />        throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">message</span><span style="color: #007700">: </span><span style="color: #DD0000">'First'</span><span style="color: #007700">, </span><span style="color: #0000BB">previous</span><span style="color: #007700">: new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">'Second'</span><span style="color: #007700">));<br />    }<br />} catch (</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(<br />        </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),<br />        </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),<br />        </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),<br />        </span><span style="color: #0000BB">$e</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getPrevious</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">getMessage</span><span style="color: #007700">(),<br />    );<br />}</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
string(5) &quot;First&quot;
string(6) &quot;Second&quot;
string(5) &quot;Third&quot;
string(6) &quot;Fourth&quot;
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
        <a href="https://github.com/php/doc-en/blob/master/language/exceptions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.exceptions%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.exceptions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.exceptions.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91159">  <div class="votes">
    <div id="Vu91159">
    <a href="/manual/vote-note.php?id=91159&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91159">
    <a href="/manual/vote-note.php?id=91159&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91159" title="67% like this...">
    127
    </div>
  </div>
  <a href="#91159" class="name">
  <strong class="user"><em>ask at nilpo dot com</em></strong></a><a class="genanchor" href="#91159"> &para;</a><div class="date" title="2009-05-27 12:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91159">
<div class="phpcode"><code><span class="html">If you intend on creating a lot of custom exceptions, you may find this code useful.  I've created an interface and an abstract exception class that ensures that all parts of the built-in Exception class are preserved in child classes.  It also properly pushes all information back to the parent constructor ensuring that nothing is lost.  This allows you to quickly create new exceptions on the fly.  It also overrides the default __toString method with a more thorough one.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">interface </span><span class="default">IException<br /></span><span class="keyword">{<br />    </span><span class="comment">/* Protected methods inherited from Exception class */<br />    </span><span class="keyword">public function </span><span class="default">getMessage</span><span class="keyword">();                 </span><span class="comment">// Exception message <br />    </span><span class="keyword">public function </span><span class="default">getCode</span><span class="keyword">();                    </span><span class="comment">// User-defined Exception code<br />    </span><span class="keyword">public function </span><span class="default">getFile</span><span class="keyword">();                    </span><span class="comment">// Source filename<br />    </span><span class="keyword">public function </span><span class="default">getLine</span><span class="keyword">();                    </span><span class="comment">// Source line<br />    </span><span class="keyword">public function </span><span class="default">getTrace</span><span class="keyword">();                   </span><span class="comment">// An array of the backtrace()<br />    </span><span class="keyword">public function </span><span class="default">getTraceAsString</span><span class="keyword">();           </span><span class="comment">// Formated string of trace<br />    <br />    /* Overrideable methods inherited from Exception class */<br />    </span><span class="keyword">public function </span><span class="default">__toString</span><span class="keyword">();                 </span><span class="comment">// formated string for display<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$code </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">);<br />}<br /><br />abstract class </span><span class="default">CustomException </span><span class="keyword">extends </span><span class="default">Exception </span><span class="keyword">implements </span><span class="default">IException<br /></span><span class="keyword">{<br />    protected </span><span class="default">$message </span><span class="keyword">= </span><span class="string">'Unknown exception'</span><span class="keyword">;     </span><span class="comment">// Exception message<br />    </span><span class="keyword">private   </span><span class="default">$string</span><span class="keyword">;                            </span><span class="comment">// Unknown<br />    </span><span class="keyword">protected </span><span class="default">$code    </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;                       </span><span class="comment">// User-defined exception code<br />    </span><span class="keyword">protected </span><span class="default">$file</span><span class="keyword">;                              </span><span class="comment">// Source filename of exception<br />    </span><span class="keyword">protected </span><span class="default">$line</span><span class="keyword">;                              </span><span class="comment">// Source line of exception<br />    </span><span class="keyword">private   </span><span class="default">$trace</span><span class="keyword">;                             </span><span class="comment">// Unknown<br /><br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$code </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">$message</span><span class="keyword">) {<br />            throw new </span><span class="default">$this</span><span class="keyword">(</span><span class="string">'Unknown '</span><span class="keyword">. </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">));<br />        }<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br />    }<br />    <br />    public function </span><span class="default">__toString</span><span class="keyword">()<br />    {<br />        return </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">) . </span><span class="string">" '</span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">message</span><span class="keyword">}</span><span class="string">' in </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">}</span><span class="string">(</span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">line</span><span class="keyword">}</span><span class="string">)\n"<br />                                </span><span class="keyword">. </span><span class="string">"</span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">()}</span><span class="string">"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Now you can create new exceptions in one line:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">TestException </span><span class="keyword">extends </span><span class="default">CustomException </span><span class="keyword">{}<br /></span><span class="default">?&gt;<br /></span><br />Here's a test that shows that all information is properly preserved throughout the backtrace.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">exceptionTest</span><span class="keyword">()<br />{<br />    try {<br />        throw new </span><span class="default">TestException</span><span class="keyword">();<br />    }<br />    catch (</span><span class="default">TestException $e</span><span class="keyword">) {<br />        echo </span><span class="string">"Caught TestException ('</span><span class="keyword">{</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">()}</span><span class="string">')\n</span><span class="keyword">{</span><span class="default">$e</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />    }<br />    catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />        echo </span><span class="string">"Caught Exception ('</span><span class="keyword">{</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">()}</span><span class="string">')\n</span><span class="keyword">{</span><span class="default">$e</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />    }<br />}<br /><br />echo </span><span class="string">'&lt;pre&gt;' </span><span class="keyword">. </span><span class="default">exceptionTest</span><span class="keyword">() . </span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Here's a sample output:<br /><br />Caught TestException ('Unknown TestException')<br />TestException 'Unknown TestException' in C:\xampp\htdocs\CustomException\CustomException.php(31)<br />#0 C:\xampp\htdocs\CustomException\ExceptionTest.php(19): CustomException-&gt;__construct()<br />#1 C:\xampp\htdocs\CustomException\ExceptionTest.php(43): exceptionTest()<br />#2 {main}</span></code></div>
  </div>
 </div>
  <div class="note" id="103819">  <div class="votes">
    <div id="Vu103819">
    <a href="/manual/vote-note.php?id=103819&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103819">
    <a href="/manual/vote-note.php?id=103819&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103819" title="61% like this...">
    78
    </div>
  </div>
  <a href="#103819" class="name">
  <strong class="user"><em>Johan</em></strong></a><a class="genanchor" href="#103819"> &para;</a><div class="date" title="2011-05-05 01:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103819">
<div class="phpcode"><code><span class="html">Custom error handling on entire pages can avoid half rendered pages for the users:<br /><br /><span class="default">&lt;?php<br />ob_start</span><span class="keyword">();<br />try {<br />    </span><span class="comment">/*contains all page logic <br />    and throws error if needed*/<br />    </span><span class="keyword">...<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">) {<br />  </span><span class="default">ob_end_clean</span><span class="keyword">();<br />  </span><span class="default">displayErrorPage</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">());<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128869">  <div class="votes">
    <div id="Vu128869">
    <a href="/manual/vote-note.php?id=128869&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128869">
    <a href="/manual/vote-note.php?id=128869&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128869" title="73% like this...">
    11
    </div>
  </div>
  <a href="#128869" class="name">
  <strong class="user"><em>tianyiw at vip dot qq dot com</em></strong></a><a class="genanchor" href="#128869"> &para;</a><div class="date" title="2023-09-08 03:11"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128869">
<div class="phpcode"><code><span class="html">Easy to understand `finally`.<br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    try {<br />        echo </span><span class="string">"before\n"</span><span class="keyword">;<br />        </span><span class="default">1 </span><span class="keyword">/ </span><span class="default">0</span><span class="keyword">;<br />        echo </span><span class="string">"after\n"</span><span class="keyword">;<br />    } finally {<br />        echo </span><span class="string">"finally\n"</span><span class="keyword">;<br />    }<br />} catch (</span><span class="default">\Throwable</span><span class="keyword">) {<br />    echo </span><span class="string">"exception\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span># Print:<br />before<br />finally<br />exception</span></code></div>
  </div>
 </div>
  <div class="note" id="129177">  <div class="votes">
    <div id="Vu129177">
    <a href="/manual/vote-note.php?id=129177&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129177">
    <a href="/manual/vote-note.php?id=129177&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129177" title="68% like this...">
    7
    </div>
  </div>
  <a href="#129177" class="name">
  <strong class="user"><em>jlherren</em></strong></a><a class="genanchor" href="#129177"> &para;</a><div class="date" title="2024-01-19 08:24"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129177">
<div class="phpcode"><code><span class="html">As noted elsewhere, throwing an exception from the `finally` block will replace a previously thrown exception. But the original exception is magically available from the new exception's `getPrevious()`.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    try {<br />        throw new </span><span class="default">RuntimeException</span><span class="keyword">(</span><span class="string">'Exception A'</span><span class="keyword">);<br />    } finally {<br />        throw new </span><span class="default">RuntimeException</span><span class="keyword">(</span><span class="string">'Exception B'</span><span class="keyword">);<br />    }<br />}<br />catch (</span><span class="default">Throwable $exception</span><span class="keyword">) {<br />    echo </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="comment">// 'previous' is magically available!<br />    </span><span class="keyword">echo </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getPrevious</span><span class="keyword">()-&gt;</span><span class="default">getMessage</span><span class="keyword">(), </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Will print:<br /><br />Exception B<br />Exception A</span></code></div>
  </div>
 </div>
  <div class="note" id="112507">  <div class="votes">
    <div id="Vu112507">
    <a href="/manual/vote-note.php?id=112507&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112507">
    <a href="/manual/vote-note.php?id=112507&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112507" title="60% like this...">
    30
    </div>
  </div>
  <a href="#112507" class="name">
  <strong class="user"><em>Edu</em></strong></a><a class="genanchor" href="#112507"> &para;</a><div class="date" title="2013-06-24 06:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112507">
<div class="phpcode"><code><span class="html">The "finally" block can change the exception that has been throw by the catch block.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try{<br />        try {<br />                throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"Hello"</span><span class="keyword">);<br />        } catch(</span><span class="default">\Exception $e</span><span class="keyword">) {<br />                echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">" catch in\n"</span><span class="keyword">;<br />                throw </span><span class="default">$e</span><span class="keyword">;<br />        } finally {<br />                echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">" finally \n"</span><span class="keyword">;<br />                throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"Bye"</span><span class="keyword">);<br />        }<br />} catch (</span><span class="default">\Exception $e</span><span class="keyword">) {<br />        echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">" catch out\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />The output is:<br /><br />Hello catch in<br />Hello finally <br />Bye catch out</span></code></div>
  </div>
 </div>
  <div class="note" id="86476">  <div class="votes">
    <div id="Vu86476">
    <a href="/manual/vote-note.php?id=86476&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86476">
    <a href="/manual/vote-note.php?id=86476&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86476" title="62% like this...">
    24
    </div>
  </div>
  <a href="#86476" class="name">
  <strong class="user"><em>Shot (Piotr Szotkowski)</em></strong></a><a class="genanchor" href="#86476"> &para;</a><div class="date" title="2008-10-21 12:13"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86476">
<div class="phpcode"><code><span class="html">‘Normal execution (when no exception is thrown within the try block, *or when a catch matching the thrown exception’s class is not present*) will continue after that last catch block defined in sequence.’<br /><br />‘If an exception is not caught, a PHP Fatal Error will be issued with an “Uncaught Exception …” message, unless a handler has been defined with set_exception_handler().’<br /><br />These two sentences seem a bit contradicting about what happens ‘when a catch matching the thrown exception’s class is not present’ (and the second sentence is actually correct).</span></code></div>
  </div>
 </div>
  <div class="note" id="121228">  <div class="votes">
    <div id="Vu121228">
    <a href="/manual/vote-note.php?id=121228&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121228">
    <a href="/manual/vote-note.php?id=121228&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121228" title="62% like this...">
    14
    </div>
  </div>
  <a href="#121228" class="name">
  <strong class="user"><em>christof+php[AT]insypro.com</em></strong></a><a class="genanchor" href="#121228"> &para;</a><div class="date" title="2017-06-15 10:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121228">
<div class="phpcode"><code><span class="html">In case your E_WARNING type of errors aren't catchable with try/catch you can change them to another type of error like this:<br /><br /><span class="default">&lt;?php <br />    set_error_handler</span><span class="keyword">(function(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">){<br />            if(</span><span class="default">$errno </span><span class="keyword">=== </span><span class="default">E_WARNING</span><span class="keyword">){<br />                </span><span class="comment">// make it more serious than a warning so it can be caught<br />                </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">E_ERROR</span><span class="keyword">);<br />                return </span><span class="default">true</span><span class="keyword">;<br />            } else {<br />                </span><span class="comment">// fallback to default php error handler<br />                </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />            }<br />    });<br /><br />    try {<br />            </span><span class="comment">// code that might result in a E_WARNING<br />    </span><span class="keyword">} catch(</span><span class="default">Exception $e</span><span class="keyword">){<br />            </span><span class="comment">// code to handle the E_WARNING (it's actually changed to E_ERROR at this point)<br />    </span><span class="keyword">} finally {<br />            </span><span class="default">restore_error_handler</span><span class="keyword">();<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121673">  <div class="votes">
    <div id="Vu121673">
    <a href="/manual/vote-note.php?id=121673&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121673">
    <a href="/manual/vote-note.php?id=121673&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121673" title="62% like this...">
    15
    </div>
  </div>
  <a href="#121673" class="name">
  <strong class="user"><em>daviddlowe dot flimm at gmail dot com</em></strong></a><a class="genanchor" href="#121673"> &para;</a><div class="date" title="2017-09-22 01:13"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121673">
<div class="phpcode"><code><span class="html">Starting in PHP 7, the classes Exception and Error both implement the Throwable interface. This means, if you want to catch both Error instances and Exception instances, you should catch Throwable objects, like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">try {<br />    throw new </span><span class="default">Error</span><span class="keyword">( </span><span class="string">"foobar" </span><span class="keyword">);<br />    </span><span class="comment">// or:<br />    // throw new Exception( "foobar" );<br /></span><span class="keyword">}<br />catch (</span><span class="default">Throwable $e</span><span class="keyword">) {<br />    </span><span class="default">var_export</span><span class="keyword">( </span><span class="default">$e </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117029">  <div class="votes">
    <div id="Vu117029">
    <a href="/manual/vote-note.php?id=117029&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117029">
    <a href="/manual/vote-note.php?id=117029&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117029" title="61% like this...">
    16
    </div>
  </div>
  <a href="#117029" class="name">
  <strong class="user"><em>Simo</em></strong></a><a class="genanchor" href="#117029"> &para;</a><div class="date" title="2015-04-04 02:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117029">
<div class="phpcode"><code><span class="html">#3 is not a good example. inverse("0a") would not be caught since (bool) "0a" returns true, yet 1/"0a" casts the string to integer zero and attempts to perform the calculation.</span></code></div>
  </div>
 </div>
  <div class="note" id="122434">  <div class="votes">
    <div id="Vu122434">
    <a href="/manual/vote-note.php?id=122434&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122434">
    <a href="/manual/vote-note.php?id=122434&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122434" title="61% like this...">
    12
    </div>
  </div>
  <a href="#122434" class="name">
  <strong class="user"><em>mlaopane at gmail dot com</em></strong></a><a class="genanchor" href="#122434"> &para;</a><div class="date" title="2018-02-24 09:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122434">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * You can catch exceptions thrown in a deep level function<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">employee</span><span class="keyword">()<br />{<br />    throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"I am just an employee !"</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">manager</span><span class="keyword">()<br />{<br />    </span><span class="default">employee</span><span class="keyword">();<br />}<br /><br />function </span><span class="default">boss</span><span class="keyword">()<br />{<br />    try {<br />        </span><span class="default">manager</span><span class="keyword">();<br />    } catch (</span><span class="default">\Exception $e</span><span class="keyword">) {<br />        echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">boss</span><span class="keyword">(); </span><span class="comment">// output: "I am just an employee !"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115240">  <div class="votes">
    <div id="Vu115240">
    <a href="/manual/vote-note.php?id=115240&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115240">
    <a href="/manual/vote-note.php?id=115240&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115240" title="60% like this...">
    17
    </div>
  </div>
  <a href="#115240" class="name">
  <strong class="user"><em>telefoontoestel at nospam dot org</em></strong></a><a class="genanchor" href="#115240"> &para;</a><div class="date" title="2014-06-18 12:34"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115240">
<div class="phpcode"><code><span class="html">When using finally keep in mind that when a exit/die statement is used in the catch block it will NOT go through the finally block. <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    echo </span><span class="string">"try block&lt;br /&gt;"</span><span class="keyword">;<br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $ex</span><span class="keyword">) {<br />    echo </span><span class="string">"catch block&lt;br /&gt;"</span><span class="keyword">;<br />} finally {<br />    echo </span><span class="string">"finally block&lt;br /&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// try block<br />// catch block<br />// finally block<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">try {<br />    echo </span><span class="string">"try block&lt;br /&gt;"</span><span class="keyword">;<br />    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">);<br />} catch (</span><span class="default">Exception $ex</span><span class="keyword">) {<br />    echo </span><span class="string">"catch block&lt;br /&gt;"</span><span class="keyword">;<br />    exit(</span><span class="default">1</span><span class="keyword">);<br />} finally {<br />    echo </span><span class="string">"finally block&lt;br /&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// try block<br />// catch block<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116273">  <div class="votes">
    <div id="Vu116273">
    <a href="/manual/vote-note.php?id=116273&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116273">
    <a href="/manual/vote-note.php?id=116273&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116273" title="56% like this...">
    10
    </div>
  </div>
  <a href="#116273" class="name">
  <strong class="user"><em>Tom Polomsk</em></strong></a><a class="genanchor" href="#116273"> &para;</a><div class="date" title="2014-12-04 01:45"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116273">
<div class="phpcode"><code><span class="html">Contrary to the documentation it is possible in PHP 5.5 and higher use only try-finally blocks without any catch block.</span></code></div>
  </div>
 </div>
  <div class="note" id="106696">  <div class="votes">
    <div id="Vu106696">
    <a href="/manual/vote-note.php?id=106696&amp;page=language.exceptions&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106696">
    <a href="/manual/vote-note.php?id=106696&amp;page=language.exceptions&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106696" title="55% like this...">
    9
    </div>
  </div>
  <a href="#106696" class="name">
  <strong class="user"><em>Sawsan</em></strong></a><a class="genanchor" href="#106696"> &para;</a><div class="date" title="2011-11-28 09:36"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106696">
<div class="phpcode"><code><span class="html">the following is an example of a re-thrown exception and the using of getPrevious function:<br /><br /><span class="default">&lt;?php<br /><br />$name </span><span class="keyword">= </span><span class="string">"Name"</span><span class="keyword">;<br /><br /></span><span class="comment">//check if the name contains only letters, and does not contain the word name<br /><br /></span><span class="keyword">try<br />   {<br />   try<br />     {<br />      if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[^a-z]/i'</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">)) <br />       {<br />           throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"</span><span class="default">$name</span><span class="string"> contains character other than a-z A-Z"</span><span class="keyword">);<br />       }   <br />       if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">), </span><span class="string">'name'</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">)<br />       {<br />          throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"</span><span class="default">$name</span><span class="string"> contains the word name"</span><span class="keyword">);<br />       }<br />       echo </span><span class="string">"The Name is valid"</span><span class="keyword">;<br />     }<br />   catch(</span><span class="default">Exception $e</span><span class="keyword">)<br />     {<br />     throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"insert name again"</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">);<br />     }<br />   }<br /> <br />catch (</span><span class="default">Exception $e</span><span class="keyword">)<br />   {<br />   if (</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getPrevious</span><span class="keyword">())<br />   {<br />    echo </span><span class="string">"The Previous Exception is: "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getPrevious</span><span class="keyword">()-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />   }<br />   echo </span><span class="string">"The Exception is: "</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />   }<br /><br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.exceptions&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.exceptions.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="language.exceptions.php" title="Exceptions">Exceptions</a>
                        </li>
                                                <li class="">
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
