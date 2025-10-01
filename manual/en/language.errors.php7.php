<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Errors in PHP 7 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.errors.php7.php">
 <link rel="shorturl" href="https://www.php.net/errors.php7">
 <link rel="alternate" href="https://www.php.net/errors.php7" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.errors.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.errors.basics.php">
 <link rel="next" href="https://www.php.net/manual/en/language.exceptions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.errors.php7.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.errors.php7.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.errors.php7.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.errors.php7.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.errors.php7.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.errors.php7.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.errors.php7.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.errors.php7.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.errors.php7.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.errors.php7.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.errors.php7.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Errors in PHP 7" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Errors in PHP 7 - Manual" />
<meta name="twitter:description" content="Errors in PHP 7" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Errors in PHP 7 - Manual" />
<meta itemprop="description" content="Errors in PHP 7" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Errors in PHP 7" />

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
        <a href="language.exceptions.php">
          Exceptions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.errors.basics.php">
          &laquo; Basics        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.errors.php'>Errors</a></li>      </ul>
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
            <option value='en/language.errors.php7.php' selected="selected">English</option>
            <option value='de/language.errors.php7.php'>German</option>
            <option value='es/language.errors.php7.php'>Spanish</option>
            <option value='fr/language.errors.php7.php'>French</option>
            <option value='it/language.errors.php7.php'>Italian</option>
            <option value='ja/language.errors.php7.php'>Japanese</option>
            <option value='pt_BR/language.errors.php7.php'>Brazilian Portuguese</option>
            <option value='ru/language.errors.php7.php'>Russian</option>
            <option value='tr/language.errors.php7.php'>Turkish</option>
            <option value='uk/language.errors.php7.php'>Ukrainian</option>
            <option value='zh/language.errors.php7.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.errors.php7" class="sect1">
 <h2 class="title">Errors in PHP 7</h2>

 <p class="para">
  PHP 7 changes how most errors are reported by PHP. Instead of reporting
  errors through the traditional error reporting mechanism used by PHP 5, most
  errors are now reported by throwing <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions.
 </p>

 <p class="para">
  As with normal exceptions, these <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions
  will bubble up until they reach the first matching
  <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a>
  block. If there are no matching blocks, then any default exception handler
  installed with <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span> will be called,
  and if there is no default exception handler, then the exception will be
  converted to a fatal error and will be handled like a traditional error.
 </p>

 <p class="para">
  As the <span class="classname"><a href="class.error.php" class="classname">Error</a></span> hierarchy does not inherit from
  <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>, code that uses
  <code class="code">catch (Exception $e) { ... }</code> blocks to handle uncaught
  exceptions in PHP 5 will find that these <span class="classname"><a href="class.error.php" class="classname">Error</a></span>s are
  not caught by these blocks. Either a <code class="code">catch (Error $e) { ... }</code>
  block or a <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span> handler is required.
 </p>

 <div class="sect2" id="language.errors.php7.hierarchy">
  <h3 class="title"><span class="classname"><a href="class.error.php" class="classname">Error</a></span> hierarchy</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span></span>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara"><span class="classname"><a href="class.error.php" class="classname">Error</a></span></span>
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.arithmeticerror.php" class="classname">ArithmeticError</a></span></span>
        <ul class="itemizedlist">
         <li class="listitem">
          <span class="simpara"><span class="classname"><a href="class.divisionbyzeroerror.php" class="classname">DivisionByZeroError</a></span></span>
         </li>
        </ul>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.assertionerror.php" class="classname">AssertionError</a></span></span>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.compileerror.php" class="classname">CompileError</a></span></span>
        <ul class="itemizedlist">
         <li class="listitem">
          <span class="simpara"><span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span></span>
         </li>
        </ul>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span></span>
        <ul class="itemizedlist">
         <li class="listitem">
          <span class="simpara"><span class="classname"><a href="class.argumentcounterror.php" class="classname">ArgumentCountError</a></span></span>
         </li>
        </ul>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span></span>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.unhandledmatcherror.php" class="classname">UnhandledMatchError</a></span></span>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.fibererror.php" class="classname">FiberError</a></span></span>
       </li>
       <li class="listitem">
        <span class="simpara"><span class="classname"><a href="class.requestparsebodyexception.php" class="classname">RequestParseBodyException</a></span></span>
       </li>
      </ul>
     </li>
     <li class="listitem">
      <span class="simpara"><span class="classname"><a href="class.exception.php" class="classname">Exception</a></span></span>
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">...</span>
       </li>
      </ul>
     </li>
    </ul>
   </li>
  </ul>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/errors/php7.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.errors.php7%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.errors.php7&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.errors.php7.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118610">  <div class="votes">
    <div id="Vu118610">
    <a href="/manual/vote-note.php?id=118610&amp;page=language.errors.php7&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118610">
    <a href="/manual/vote-note.php?id=118610&amp;page=language.errors.php7&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118610" title="62% like this...">
    106
    </div>
  </div>
  <a href="#118610" class="name">
  <strong class="user"><em>hungry dot rahly at gmail dot com</em></strong></a><a class="genanchor" href="#118610"> &para;</a><div class="date" title="2016-01-08 12:26"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118610">
<div class="phpcode"><code><span class="html">You can catch both exceptions and errors by catching(Throwable)</span></code></div>
  </div>
 </div>
  <div class="note" id="119652">  <div class="votes">
    <div id="Vu119652">
    <a href="/manual/vote-note.php?id=119652&amp;page=language.errors.php7&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119652">
    <a href="/manual/vote-note.php?id=119652&amp;page=language.errors.php7&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119652" title="64% like this...">
    63
    </div>
  </div>
  <a href="#119652" class="name">
  <strong class="user"><em>demis dot palma at tiscali dot it</em></strong></a><a class="genanchor" href="#119652"> &para;</a><div class="date" title="2016-07-26 11:04"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119652">
<div class="phpcode"><code><span class="html">Throwable does not work on PHP 5.x.<br /><br />To catch both exceptions and errors in PHP 5.x and 7, add a catch block for Exception AFTER catching Throwable first.<br />Once PHP 5.x support is no longer needed, the block catching Exception can be removed.<br /><br />try<br />{<br />   // Code that may throw an Exception or Error.<br />}<br />catch (Throwable $t)<br />{<br />   // Executed only in PHP 7, will not match in PHP 5<br />}<br />catch (Exception $e)<br />{<br />   // Executed only in PHP 5, will not be reached in PHP 7<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124428">  <div class="votes">
    <div id="Vu124428">
    <a href="/manual/vote-note.php?id=124428&amp;page=language.errors.php7&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124428">
    <a href="/manual/vote-note.php?id=124428&amp;page=language.errors.php7&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124428" title="53% like this...">
    4
    </div>
  </div>
  <a href="#124428" class="name">
  <strong class="user"><em>diogoca at gmail dot com</em></strong></a><a class="genanchor" href="#124428"> &para;</a><div class="date" title="2019-11-24 02:38"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124428">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />set_error_handler</span><span class="keyword">(function(</span><span class="default">int $number</span><span class="keyword">, </span><span class="default">string $message</span><span class="keyword">) {<br />   echo </span><span class="string">"Handler captured error </span><span class="default">$number</span><span class="string">: '</span><span class="default">$message</span><span class="string">'" </span><span class="keyword">. </span><span class="default">PHP_EOL  </span><span class="keyword">;<br />});<br /><br />try {<br />    echo </span><span class="default">$x</span><span class="keyword">; </span><span class="comment"># notice, handled on callable<br />    </span><span class="default">pg_exec</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">); </span><span class="comment"># warning, handled on callable<br />    </span><span class="default">fho</span><span class="keyword">(); </span><span class="comment"># fatal error, stop running and catched<br /></span><span class="keyword">} catch (</span><span class="default">Throwable $e</span><span class="keyword">) {<br />    echo </span><span class="string">"Captured Throwable: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />set_error_handler will also works without try and catch</span></code></div>
  </div>
 </div>
  <div class="note" id="121497">  <div class="votes">
    <div id="Vu121497">
    <a href="/manual/vote-note.php?id=121497&amp;page=language.errors.php7&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121497">
    <a href="/manual/vote-note.php?id=121497&amp;page=language.errors.php7&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121497" title="53% like this...">
    5
    </div>
  </div>
  <a href="#121497" class="name">
  <strong class="user"><em>ryan dot jentzsch@{gmail} dot com</em></strong></a><a class="genanchor" href="#121497"> &para;</a><div class="date" title="2017-08-08 09:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121497">
<div class="phpcode"><code><span class="html">An excellent blog post on the difference between exceptions, throwables and how PHP 7 handles these can be found here: <a href="https://trowski.com/2015/06/24/throwable-exceptions-and-errors-in-php7/" rel="nofollow" target="_blank">https://trowski.com/2015/06/24/throwable-exceptions-and-errors-in-php7/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="120257">  <div class="votes">
    <div id="Vu120257">
    <a href="/manual/vote-note.php?id=120257&amp;page=language.errors.php7&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120257">
    <a href="/manual/vote-note.php?id=120257&amp;page=language.errors.php7&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120257" title="51% like this...">
    4
    </div>
  </div>
  <a href="#120257" class="name">
  <strong class="user"><em>lubaev dot ka at gmail dot com</em></strong></a><a class="genanchor" href="#120257"> &para;</a><div class="date" title="2016-12-01 05:16"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120257">
<div class="phpcode"><code><span class="html">php 7.1<br /><br />try {<br />   // Code that may throw an Exception or ArithmeticError.<br />} catch (ArithmeticError | Exception $e) {<br />   // pass<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.errors.php7&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.errors.php7.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.errors.php">Errors</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.errors.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="current">
                            <a href="language.errors.php7.php" title="Errors in PHP 7">Errors in PHP 7</a>
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
