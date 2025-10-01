<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward incompatible changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration70.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration70.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration70.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration70.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration70.php">
 <link rel="next" href="https://www.php.net/manual/en/migration70.new-features.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration70.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration70.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration70.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration70.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration70.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration70.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration70.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration70.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration70.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration70.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration70.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward incompatible changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward incompatible changes - Manual" />
<meta name="twitter:description" content="Backward incompatible changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward incompatible changes - Manual" />
<meta itemprop="description" content="Backward incompatible changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward incompatible changes" />

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
        <a href="migration70.new-features.php">
          New features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration70.php">
          &laquo; Migrating from PHP 5.6.x to PHP 7.0.x        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration70.php'>Migrating from PHP 5.6.x to PHP 7.0.x</a></li>      </ul>
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
            <option value='en/migration70.incompatible.php' selected="selected">English</option>
            <option value='de/migration70.incompatible.php'>German</option>
            <option value='es/migration70.incompatible.php'>Spanish</option>
            <option value='fr/migration70.incompatible.php'>French</option>
            <option value='it/migration70.incompatible.php'>Italian</option>
            <option value='ja/migration70.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration70.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration70.incompatible.php'>Russian</option>
            <option value='tr/migration70.incompatible.php'>Turkish</option>
            <option value='uk/migration70.incompatible.php'>Ukrainian</option>
            <option value='zh/migration70.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration70.incompatible" class="sect1">
 <h2 class="title">Backward incompatible changes</h2>

 


<div class="sect2" id="migration70.incompatible.error-handling">
 <h3 class="title">Changes to error and exception handling</h3>

 <p class="para">
  Many fatal and recoverable fatal errors have been converted to exceptions in
  PHP 7. These error exceptions inherit from the <span class="classname"><a href="class.error.php" class="classname">Error</a></span>
  class, which itself implements the <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span>
  interface (the new base interface all exceptions inherit).
 </p>

 <p class="para">
  This means that custom error handlers may no longer be triggered because
  exceptions may be thrown instead (causing new fatal errors for uncaught
  <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exceptions).
 </p>

 <p class="para">
  A fuller description of how errors operate in PHP 7 can be found
  <a href="language.errors.php7.php" class="link">on the PHP 7 errors page</a>. This
  migration guide will merely enumerate the changes that affect backward
  compatibility.
 </p>

 <div class="sect3" id="migration70.incompatible.error-handling.set-exception-handler">
  <h4 class="title">
   <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span> is no longer guaranteed to
   receive <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> objects
  </h4>

  <p class="para">
   Code that implements an exception handler registered with
   <span class="function"><a href="function.set-exception-handler.php" class="function">set_exception_handler()</a></span> using a type declaration of
   <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> will cause a fatal error when an
   <span class="classname"><a href="class.error.php" class="classname">Error</a></span> object is thrown.
  </p>

  <p class="para">
   If the handler needs to work on both PHP 5 and 7, you should remove the
   type declaration from the handler, while code that is being migrated to
   work on PHP 7 exclusively can simply replace the
   <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> type declaration with
   <span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span> instead.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// PHP 5 era code that will break.<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">handler</span><span style="color: #007700">(</span><span style="color: #0000BB">Exception $e</span><span style="color: #007700">) { </span><span style="color: #FF8000">/* ... */ </span><span style="color: #007700">}<br /></span><span style="color: #0000BB">set_exception_handler</span><span style="color: #007700">(</span><span style="color: #DD0000">'handler'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// PHP 5 and 7 compatible.<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$e</span><span style="color: #007700">) { </span><span style="color: #FF8000">/* ... */ </span><span style="color: #007700">}<br /><br /></span><span style="color: #FF8000">// PHP 7 only.<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">handler</span><span style="color: #007700">(</span><span style="color: #0000BB">Throwable $e</span><span style="color: #007700">) { </span><span style="color: #FF8000">/* ... */ </span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.error-handling.constructors">
  <h4 class="title">Internal constructors always throw exceptions on failure</h4>

  <p class="para">
   Previously, some internal classes would return <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or an unusable object
   when the constructor failed. All internal classes will now throw an
   <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> in this case in the same way that user
   classes already had to.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.error-handling.parse">
  <h4 class="title">Parse errors throw <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span></h4>

  <p class="para">
   Parser errors now throw a <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> object. Error
   handling for <span class="function"><a href="function.eval.php" class="function">eval()</a></span> should now include a <a href="language.exceptions.php#language.exceptions.catch" class="link"><code class="literal">catch</code></a> block
   that can handle this error.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.error-handling.strict">
  <h4 class="title">E_STRICT notices severity changes</h4>

  <p class="para">
   All of the <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> notices have been reclassified to
   other levels. <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> constant is retained, so calls like
   <code class="literal">error_reporting(E_ALL|E_STRICT)</code> will not cause an error.
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong><strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> notices severity changes</strong></caption>
     
      <thead>
       <tr>
        <th>Situation</th>
        <th>New level/behaviour</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td>Indexing by a resource</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong></td>
       </tr>

       <tr>
        <td>Abstract static methods</td>
        <td>Notice removed, triggers no error</td>
       </tr>

       <tr>
        <td>&quot;Redefining&quot; a constructor</td>
        <td>Notice removed, triggers no error</td>
       </tr>

       <tr>
        <td>Signature mismatch during inheritance</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong></td>
       </tr>

       <tr>
        <td>Same (compatible) property in two used traits</td>
        <td>Notice removed, triggers no error</td>
       </tr>

       <tr>
        <td>Accessing static property non-statically</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong></td>
       </tr>

       <tr>
        <td>Only variables should be assigned by reference</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong></td>
       </tr>

       <tr>
        <td>Only variables should be passed by reference</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong></td>
       </tr>

       <tr>
        <td>Calling non-static methods statically</td>
        <td><strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong></td>
       </tr>

      </tbody>
     
    </table>

   </p>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.variable-handling">
 <h3 class="title">Changes to variable handling</h3>

 <p class="para">
  PHP 7 now uses an abstract syntax tree when parsing source files. This has
  permitted many improvements to the language which were previously
  impossible due to limitations in the parser used in earlier versions of
  PHP, but has resulted in the removal of a few special cases for consistency
  reasons, which has resulted in backward compatibility breaks. These cases
  are detailed in this section.
 </p>

 <div class="sect3" id="migration70.incompatible.variable-handling.indirect">
  <h4 class="title">
   Changes to the handling of indirect variables, properties, and methods
  </h4>

  <p class="para">
   Indirect access to variables, properties, and methods will now be
   evaluated strictly in left-to-right order, as opposed to the previous mix
   of special cases. The table below shows how the order of evaluation has
   changed.
  </p>

  <p class="para">
   <table class="doctable table">
    <caption><strong>Old and new evaluation of indirect expressions</strong></caption>
    
     <thead>
      <tr>
       <th>Expression</th>
       <th>PHP 5 interpretation</th>
       <th>PHP 7 interpretation</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>
        <code class="code">$$foo[&#039;bar&#039;][&#039;baz&#039;]</code>
       </td>
       <td>
        <code class="code">${$foo[&#039;bar&#039;][&#039;baz&#039;]}</code>
       </td>
       <td>
        <code class="code">($$foo)[&#039;bar&#039;][&#039;baz&#039;]</code>
       </td>
      </tr>

      <tr>
       <td>
        <code class="code">$foo-&gt;$bar[&#039;baz&#039;]</code>
       </td>
       <td>
        <code class="code">$foo-&gt;{$bar[&#039;baz&#039;]}</code>
       </td>
       <td>
        <code class="code">($foo-&gt;$bar)[&#039;baz&#039;]</code>
       </td>
      </tr>

      <tr>
       <td>
        <code class="code">$foo-&gt;$bar[&#039;baz&#039;]()</code>
       </td>
       <td>
        <code class="code">$foo-&gt;{$bar[&#039;baz&#039;]}()</code>
       </td>
       <td>
        <code class="code">($foo-&gt;$bar)[&#039;baz&#039;]()</code>
       </td>
      </tr>

      <tr>
       <td>
        <code class="code">Foo::$bar[&#039;baz&#039;]()</code>
       </td>
       <td>
        <code class="code">Foo::{$bar[&#039;baz&#039;]}()</code>
       </td>
       <td>
        <code class="code">(Foo::$bar)[&#039;baz&#039;]()</code>
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   Code that used the old right-to-left evaluation order must be rewritten to
   explicitly use that evaluation order with curly braces (see the above
   middle column). This will make the code both forwards compatible with PHP
   7.x and backwards compatible with PHP 5.x.
  </p>

  <p class="para">
   This also affects the <a href="language.variables.scope.php#language.variables.scope.global" class="link"><code class="literal">global</code></a> keyword. The curly brace syntax can be
   used to emulate the previous behaviour if required:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">f</span><span style="color: #007700">() {<br />    </span><span style="color: #FF8000">// Valid in PHP 5 only.<br />    </span><span style="color: #007700">global $</span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">;<br /><br />    </span><span style="color: #FF8000">// Valid in PHP 5 and 7.<br />    </span><span style="color: #007700">global ${</span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bar</span><span style="color: #007700">};<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.variable-handling.list">
  <h4 class="title">Changes to <span class="function"><a href="function.list.php" class="function">list()</a></span> handling</h4>

  <div class="sect4" id="migration70.incompatible.variable-handling.list.order">
   <h5 class="title">
    <span class="function"><a href="function.list.php" class="function">list()</a></span> no longer assigns variables in reverse order
   </h5>

   <p class="para">
    <span class="function"><a href="function.list.php" class="function">list()</a></span> will now assign values to variables in the
    order they are defined, rather than reverse order. In general, this only
    affects the case where <span class="function"><a href="function.list.php" class="function">list()</a></span> is being used in
    conjunction with the array <code class="code">[]</code> operator, as shown below:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">list(</span><span style="color: #0000BB">$a</span><span style="color: #007700">[], </span><span style="color: #0000BB">$a</span><span style="color: #007700">[], </span><span style="color: #0000BB">$a</span><span style="color: #007700">[]) = [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <p class="para">Output of the above example in PHP 5:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(3) {
  [0]=&gt;
  int(3)
  [1]=&gt;
  int(2)
  [2]=&gt;
  int(1)
}
</pre></div>
    </div>
    <p class="para">Output of the above example in PHP 7:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(3) {
  [0]=&gt;
  int(1)
  [1]=&gt;
  int(2)
  [2]=&gt;
  int(3)
}
</pre></div>
    </div>
   </div>

   <p class="para">
    In general, it is recommended not to rely on the order in which
    <span class="function"><a href="function.list.php" class="function">list()</a></span> assignments occur, as this is an implementation
    detail that may change again in the future.
   </p>
  </div>

  <div class="sect4" id="migration70.incompatible.variable-handling.list.empty">
   <h5 class="title">Empty <span class="function"><a href="function.list.php" class="function">list()</a></span> assignments have been removed</h5>

   <p class="para">
    <span class="function"><a href="function.list.php" class="function">list()</a></span> constructs can no longer be empty. The following
    are no longer allowed:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">list() = </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />list(,,) = </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br />list(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, list(), </span><span style="color: #0000BB">$y</span><span style="color: #007700">) = </span><span style="color: #0000BB">$a</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </div>

  <div class="sect4" id="migration70.incompatible.variable-handling.list.string">
   <h5 class="title"><span class="function"><a href="function.list.php" class="function">list()</a></span> cannot unpack <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s</h5>

   <p class="para">
    <span class="function"><a href="function.list.php" class="function">list()</a></span> can no longer unpack <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    variables. <span class="function"><a href="function.str-split.php" class="function">str_split()</a></span> should be used instead.
   </p>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.variable-handling.array-order">
  <h4 class="title">
   Array ordering when elements are automatically created during by reference
   assignments has changed
  </h4>

  <p class="para">
   The order of the elements in an array has changed when those elements have
   been automatically created by referencing them in a by reference
   assignment. For example:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"a"</span><span style="color: #007700">] =&amp; </span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"b"</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #DD0000">"b"</span><span style="color: #007700">] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(2) {
  [&quot;b&quot;]=&gt;
  &amp;int(1)
  [&quot;a&quot;]=&gt;
  &amp;int(1)
}
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(2) {
  [&quot;a&quot;]=&gt;
  &amp;int(1)
  [&quot;b&quot;]=&gt;
  &amp;int(1)
}
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.variable-handling.parentheses">
  <h4 class="title">
   Parentheses around function arguments no longer affect behaviour
  </h4>

  <p class="para">
   In PHP 5, using redundant parentheses around a function argument could
   quiet strict standards warnings when the function argument was passed by
   reference. The warning will now always be issued.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">getArray</span><span style="color: #007700">() {<br />    return [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">];<br />}<br /><br />function </span><span style="color: #0000BB">squareArray</span><span style="color: #007700">(array &amp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">) {<br />    foreach (</span><span style="color: #0000BB">$a </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$v </span><span style="color: #007700">**= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Generates a warning in PHP 7.<br /></span><span style="color: #0000BB">squareArray</span><span style="color: #007700">((</span><span style="color: #0000BB">getArray</span><span style="color: #007700">()));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Notice: Only variables should be passed by reference in /tmp/test.php on line 13
</pre></div>
   </div>
  </div>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.foreach">
 <h3 class="title">Changes to <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></h3>

 <p class="para">
  Minor changes have been made to the behaviour of the <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> control
  structure, primarily around the handling of the internal array pointer and
  modification of the array being iterated over.
 </p>

 <div class="sect3" id="migration70.incompatible.foreach.array-pointer">
  <h4 class="title"><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> no longer changes the internal array pointer</h4>

  <p class="para">
   Prior to PHP 7, the internal array pointer was modified while an array was
   being iterated over with <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>. This is no longer the case, as shown
   in the following example:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">current</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">));<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(1)
int(2)
bool(false)
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(0)
int(0)
int(0)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.foreach.by-value">
  <h4 class="title"><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> by-value operates on a copy of the array</h4>

  <p class="para">
   When used in the default by-value mode, <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> will now operate on a
   copy of the array being iterated rather than the array itself. This means
   that changes to the array made during iteration will not affect the values
   that are iterated.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.foreach.by-ref">
  <h4 class="title"><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> by-reference has improved iteration behaviour</h4>

  <p class="para">
   When iterating by-reference, <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a> will now do a better job of
   tracking changes to the array made during iteration. For example,
   appending to an array while iterating will now result in the appended
   values being iterated over as well:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= [</span><span style="color: #0000BB">0</span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$array </span><span style="color: #007700">as &amp;</span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$array</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">] = </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(0)
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
int(0)
int(1)
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.foreach.object">
  <h4 class="title">Iteration of non-<span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> objects</h4>

  <p class="para">
   Iterating over a non-<span class="classname"><a href="class.traversable.php" class="classname">Traversable</a></span> object will now
   have the same behaviour as iterating over by-reference arrays. This
   results in the
   <a href="migration70.incompatible.php#migration70.incompatible.foreach.by-ref" class="link">improved behaviour when modifying an array during iteration</a>
   also being applied when properties are added to or removed from the
   object.
  </p>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.integers">
 <h3 class="title">Changes to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> handling</h3>

 <div class="sect3" id="migration70.incompatible.integers.invalid-octals">
  <h4 class="title">Invalid octal literals</h4>

  <p class="para">
   Previously, octal literals that contained invalid numbers were silently
   truncated (<code class="literal">0128</code> was taken as <code class="literal">012</code>).
   Now, an invalid octal literal will cause a parse error.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.integers.negative-bitshift">
  <h4 class="title">Negative bitshifts</h4>

  <p class="para">
   Bitwise shifts by negative numbers will now throw an
   <span class="classname"><a href="class.arithmeticerror.php" class="classname">ArithmeticError</a></span>:
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">1 </span><span style="color: #007700">&gt;&gt; -</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

    <p class="para">Output of the above example in PHP 5:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
int(0)
</pre></div>
    </div>
    <p class="para">Output of the above example in PHP 7:</p>
    <div class="example-contents screen">
<div class="cdata"><pre>
Fatal error: Uncaught ArithmeticError: Bit shift by negative number in /tmp/test.php:2
Stack trace:
#0 {main}
  thrown in /tmp/test.php on line 2
</pre></div>
    </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.integers.out-of-range">
  <h4 class="title">Out of range bitshifts</h4>

  <p class="para">
   Bitwise shifts (in either direction) beyond the bit width of an
   <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> will always result in 0. Previously, the behaviour of
   such shifts was architecture dependent.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.integers.div-by-zero">
  <h4 class="title">Changes to Division By Zero</h4>

  <p class="para">
   Previously, when 0 was used as the divisor for either the divide (/) or
   modulus (%) operators, an E_WARNING would be emitted and
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> would be returned. Now, the divide operator
   returns a float as either +INF, -INF, or NAN, as specified by IEEE 754. The modulus operator E_WARNING
   has been removed and will throw a <span class="classname"><a href="class.divisionbyzeroerror.php" class="classname">DivisionByZeroError</a></span>
   exception.
  </p>
  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">/</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">/</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">%</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)

Warning: Division by zero in %s on line %d
bool(false)
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Warning: Division by zero in %s on line %d
float(INF)

Warning: Division by zero in %s on line %d
float(NAN)

PHP Fatal error:  Uncaught DivisionByZeroError: Modulo by zero in %s line %d
</pre></div>
   </div>
  </div>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.strings">
 <h3 class="title">Changes to <span class="type"><a href="language.types.string.php" class="type string">string</a></span> handling</h3>

 <div class="sect3" id="migration70.incompatible.strings.hex">
  <h4 class="title">Hexadecimal strings are no longer considered numeric</h4>

  <p class="para">
   Strings containing hexadecimal numbers are no longer considered to be
   numeric. For example:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"0x123" </span><span style="color: #007700">== </span><span style="color: #DD0000">"291"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_numeric</span><span style="color: #007700">(</span><span style="color: #DD0000">"0x123"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #DD0000">"0xe" </span><span style="color: #007700">+ </span><span style="color: #DD0000">"0x1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"0x1"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
bool(true)
bool(true)
int(15)
string(2) &quot;oo&quot;
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
bool(false)
bool(false)
int(0)

Notice: A non well formed numeric value encountered in /tmp/test.php on line 5
string(3) &quot;foo&quot;
</pre></div>
   </div>
  </div>

  <p class="para">
   <span class="function"><a href="function.filter-var.php" class="function">filter_var()</a></span> can be used to check if a
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span> contains a hexadecimal number, and also to convert a
   string of that type to an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">"0xffff"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$int </span><span style="color: #007700">= </span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_FLAG_ALLOW_HEX</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">false </span><span style="color: #007700">=== </span><span style="color: #0000BB">$int</span><span style="color: #007700">) {<br />    throw new </span><span style="color: #0000BB">Exception</span><span style="color: #007700">(</span><span style="color: #DD0000">"Invalid integer!"</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$int</span><span style="color: #007700">); </span><span style="color: #FF8000">// int(65535)<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.strings.unicode-escapes">
  <h4 class="title"><code class="literal">\u{</code> may cause errors</h4>

  <p class="para">
   Due to the addition of the new
   <a href="migration70.new-features.php#migration70.new-features.unicode-codepoint-escape-syntax" class="link">Unicode codepoint escape syntax</a>,
   strings containing a literal <code class="literal">\u{</code> followed by an invalid
   sequence will cause a fatal error. To avoid this, the leading backslash
   should be escaped.
  </p>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.removed-functions">
 <h3 class="title">Removed functions</h3>

 <div class="sect3" id="migration70.incompatible.removed-functions.call-user-method">
  <h4 class="title">
   <span class="function"><strong>call_user_method()</strong></span> and
   <span class="function"><strong>call_user_method_array()</strong></span>
  </h4>

  <p class="para">
   These functions were deprecated in PHP 4.1.0 in favour of
   <span class="function"><a href="function.call-user-func.php" class="function">call_user_func()</a></span> and
   <span class="function"><a href="function.call-user-func-array.php" class="function">call_user_func_array()</a></span>. You may also want to consider
   using
   <a href="functions.variable-functions.php" class="link">variable functions</a>
   and/or the
   <a href="functions.arguments.php#functions.variable-arg-list" class="link"><code class="literal">...</code></a>
   operator.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.ereg">
  <h4 class="title">
   All ereg* functions
  </h4>
  <p class="para">
   All <code class="literal">ereg</code> functions were removed.
   <a href="book.pcre.php" class="link">PCRE</a> is a recommended alternative.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.mcrypt">
  <h4 class="title"><a href="book.mcrypt.php" class="link">mcrypt</a> aliases</h4>

  <p class="para">
   The deprecated <span class="function"><strong>mcrypt_generic_end()</strong></span> function has been
   removed in favour of <span class="function"><a href="function.mcrypt-generic-deinit.php" class="function">mcrypt_generic_deinit()</a></span>.
  </p>

  <p class="para">
   Additionally, the deprecated <span class="function"><strong>mcrypt_ecb()</strong></span>,
   <span class="function"><strong>mcrypt_cbc()</strong></span>, <span class="function"><strong>mcrypt_cfb()</strong></span> and
   <span class="function"><strong>mcrypt_ofb()</strong></span> functions have been removed in favour of
   using <span class="function"><a href="function.mcrypt-decrypt.php" class="function">mcrypt_decrypt()</a></span> with the appropriate
   <strong><code>MCRYPT_MODE_<span class="replaceable">*</span></code></strong> constant.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.mysql">
  <h4 class="title">
   All ext/mysql functions
  </h4>
  <p class="para">
   All <a href="book.mysql.php" class="link">ext/mysql</a> functions were removed. For
   details about choosing a different MySQL API, see
   <a href="mysqlinfo.api.choosing.php" class="link">Choosing a MySQL API</a>.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.mssql">
  <h4 class="title">
   All ext/mssql functions
  </h4>
  <p class="para">
   All <code class="literal">ext/mssql</code> functions were removed.
   <ul class="simplelist">
    <li><a href="ref.pdo-sqlsrv.php" class="link">PDO_SQLSRV</a></li>
    <li><a href="ref.pdo-odbc.php" class="link">PDO_ODBC</a></li>
    <li><a href="book.sqlsrv.php" class="link">SQLSRV</a></li>
    <li><a href="book.uodbc.php" class="link">Unified ODBC API</a></li>
   </ul>
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.intl">
  <h4 class="title"><a href="book.intl.php" class="link">intl</a> aliases</h4>

  <p class="para">
   The deprecated <span class="function"><strong>datefmt_set_timezone_id()</strong></span> and
   <span class="methodname"><strong>IntlDateFormatter::setTimeZoneID()</strong></span> aliases have been
   removed in favour of <span class="function"><a href="intldateformatter.settimezone.php" class="function">datefmt_set_timezone()</a></span> and
   <span class="methodname"><a href="intldateformatter.settimezone.php" class="methodname">IntlDateFormatter::setTimeZone()</a></span>, respectively.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.magic-quotes">
  <h4 class="title"><span class="function"><strong>set_magic_quotes_runtime()</strong></span></h4>

  <p class="para">
   <span class="function"><strong>set_magic_quotes_runtime()</strong></span>, along with its alias
   <span class="function"><strong>magic_quotes_runtime()</strong></span>, have been removed. They were
   deprecated in PHP 5.3.0, and became effectively non-functional with the
   removal of magic quotes in PHP 5.4.0.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.set-socket-blocking">
  <h4 class="title"><span class="function"><strong>set_socket_blocking()</strong></span></h4>

  <p class="para">
   The deprecated <span class="function"><strong>set_socket_blocking()</strong></span> alias has been
   removed in favour of <span class="function"><a href="function.stream-set-blocking.php" class="function">stream_set_blocking()</a></span>.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.dl">
  <h4 class="title"><span class="function"><a href="function.dl.php" class="function">dl()</a></span> in PHP-FPM</h4>

  <p class="para">
   <span class="function"><a href="function.dl.php" class="function">dl()</a></span> can no longer be used in PHP-FPM. It remains
   functional in the CLI and embed SAPIs.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-functions.gd">
  <h4 class="title"><a href="book.image.php" class="link">GD</a> Type1 functions</h4>

  <p class="para">
   Support for PostScript Type1 fonts has been removed from the GD extension,
   resulting in the removal of the following functions:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsbbox()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsencodefont()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsextendfont()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsfreefont()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsloadfont()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepsslantfont()</strong></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <span class="function"><strong>imagepstext()</strong></span>
    </span>
   </li>
  </ul>

  <p class="para">
   Using TrueType fonts and their associated functions is recommended instead.
  </p>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.removed-ini-directives">
 <h3 class="title">Removed INI directives</h3>

 <div class="sect3" id="migration70.incompatible.removed-ini-directives.features">
  <h4 class="title">Removed features</h4>

  <p class="para">
   The following INI directives have been removed as their associated features
   have also been removed:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">always_populate_raw_post_data</code>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <code class="parameter">asp_tags</code>
    </span>
   </li>
  </ul>
 </div>

 <div class="sect3" id="migration70.incompatible.removed-ini-directives.xsl">
  <h4 class="title"><code class="parameter">xsl.security_prefs</code></h4>

  <p class="para">
   The <code class="parameter">xsl.security_prefs</code> directive has been removed.
   Instead, the <span class="methodname"><a href="xsltprocessor.setsecurityprefs.php" class="methodname">XsltProcessor::setSecurityPrefs()</a></span>
   method should be called to control the security preferences on a
   per-processor basis.
  </p>
 </div>
</div>



 


<div class="sect2" id="migration70.incompatible.other">
 <h3 class="title">Other backward incompatible changes</h3>

 <div class="sect3" id="migration70.incompatible.other.new-by-ref">
  <h4 class="title">New objects cannot be assigned by reference</h4>

  <p class="para">
   The result of the <a href="language.oop5.basic.php#language.oop5.basic.new" class="link"><code class="literal">new</code></a> statement can no longer be assigned to a variable
   by reference:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">=&amp; new </span><span style="color: #0000BB">C</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Deprecated: Assigning the return value of new by reference is deprecated in /tmp/test.php on line 3
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Parse error: syntax error, unexpected &#039;new&#039; (T_NEW) in /tmp/test.php on line 3
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.other.classes">
  <h4 class="title">Invalid class, interface and trait names</h4>

  <p class="para">
   The following names cannot be used to name classes, interfaces or traits:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.float.php" class="type float">float</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span>
   </li>
  </ul>

  <p class="para">
   Furthermore, the following names should not be used. Although they will not
   generate an error in PHP 7.0, they are reserved for future use and should
   be considered deprecated.
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.object.php" class="type object">object</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="type">numeric</span></span>
   </li>
  </ul>
 </div>

 <div class="sect3" id="migration70.incompatible.other.php-tags">
  <h4 class="title">ASP and script PHP tags removed</h4>

  <p class="para">
   Support for using ASP and script tags to delimit PHP code has been removed.
   The affected tags are:
  </p>

  <table class="doctable table">
   <caption><strong>Removed ASP and script tags</strong></caption>
   
    <thead>
     <tr>
      <th>Opening tag</th>
      <th>Closing tag</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="code">&lt;%</code></td>
      <td><code class="code">%&gt;</code></td>
     </tr>

     <tr>
      <td><code class="code">&lt;%=</code></td>
      <td><code class="code">%&gt;</code></td>
     </tr>

     <tr>
      <td><code class="code">&lt;script language=&quot;php&quot;&gt;</code></td>
      <td><code class="code">&lt;/script&gt;</code></td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="sect3" id="migration70.incompatible.other.incompatible-this">
  <h4 class="title">Calls from incompatible context removed</h4>

  <p class="para">
   <a href="migration56.deprecated.php#migration56.deprecated.incompatible-context" class="link">Previously deprecated in PHP 5.6</a>,
   static calls made to a non-static method with an incompatible context will
   now result in the called method having an undefined
   <code class="literal">$this</code> variable and a deprecation warning being issued.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">test</span><span style="color: #007700">() { </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">); }<br />}<br /><br /></span><span style="color: #FF8000">// Note: Does NOT extend A<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">B </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">callNonStaticMethodOfA</span><span style="color: #007700">() { </span><span style="color: #0000BB">A</span><span style="color: #007700">::</span><span style="color: #0000BB">test</span><span style="color: #007700">(); }<br />}<br /><br />(new </span><span style="color: #0000BB">B</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">callNonStaticMethodOfA</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5.6:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Deprecated: Non-static method A::test() should not be called statically, assuming $this from incompatible context in /tmp/test.php on line 8
object(B)#1 (0) {
}
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Deprecated: Non-static method A::test() should not be called statically in /tmp/test.php on line 8

Notice: Undefined variable: this in /tmp/test.php on line 3
NULL
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.other.yield">
  <h4 class="title"><a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> is now a right associative operator</h4>

  <p class="para">
   The <a href="language.generators.syntax.php#control-structures.yield" class="link"><code class="literal">yield</code></a> construct no longer requires parentheses, and has been changed
   to a right associative operator with precedence between
   <code class="literal">print</code> and <code class="literal">=&gt;</code>. This can result in
   changed behaviour:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo yield -</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Was previously interpreted as<br /></span><span style="color: #007700">echo (yield) - </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// And is now interpreted as<br /></span><span style="color: #007700">echo yield (-</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />yield </span><span style="color: #0000BB">$foo </span><span style="color: #007700">or die;<br /></span><span style="color: #FF8000">// Was previously interpreted as<br /></span><span style="color: #007700">yield (</span><span style="color: #0000BB">$foo </span><span style="color: #007700">or die);<br /></span><span style="color: #FF8000">// And is now interpreted as<br /></span><span style="color: #007700">(yield </span><span style="color: #0000BB">$foo</span><span style="color: #007700">) or die;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <p class="para">
   Parentheses can be used to disambiguate those cases.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.func-parameters">
  <h4 class="title">Functions cannot have multiple parameters with the same name</h4>

  <p class="para">
   It is no longer possible to define two or more function parameters with the
   same name. For example, the following function will trigger an
   <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$unused</span><span style="color: #007700">, </span><span style="color: #0000BB">$unused</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">//<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.other.func-parameter-modified">
  <h4 class="title">Functions inspecting arguments report the <em>current</em> parameter value</h4>

  <p class="para">
   <span class="function"><a href="function.func-get-arg.php" class="function">func_get_arg()</a></span>, <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>,
   <span class="function"><a href="function.debug-backtrace.php" class="function">debug_backtrace()</a></span> and exception backtraces will no longer
   report the original value that was passed to a parameter, but will instead
   provide the current value (which might have been modified).
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$x</span><span style="color: #007700">++;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">func_get_arg</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">));<br />}<br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);</span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">Output of the above example in PHP 5:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
1
</pre></div>
   </div>
   <p class="para">Output of the above example in PHP 7:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
2
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.other.multiple-default">
  <h4 class="title">Switch statements cannot have multiple default blocks</h4>

  <p class="para">
   It is no longer possible to define two or more default blocks in a switch
   statement. For example, the following switch statement will trigger an
   <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>:
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">switch (</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />    default:<br />    break;<br />    default:<br />    break;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect3" id="migration70.incompatible.other.http-raw-post-data">
  <h4 class="title"><var class="varname">$HTTP_RAW_POST_DATA</var> removed</h4>

  <p class="para">
   <var class="varname">$HTTP_RAW_POST_DATA</var> is no longer available. The
   <a href="wrappers.php.php#wrappers.php.input" class="link"><code class="literal">php://input</code></a>
   stream should be used instead.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.ini-comments">
  <h4 class="title"><code class="literal">#</code> comments in INI files removed</h4>

  <p class="para">
   Support for prefixing comments with <code class="literal">#</code> in INI files has been
   removed. <code class="literal">;</code> (semi-colon) should be used instead. This change
   applies to <var class="filename">php.ini</var>, as well as files handled by
   <span class="function"><a href="function.parse-ini-file.php" class="function">parse_ini_file()</a></span> and <span class="function"><a href="function.parse-ini-string.php" class="function">parse_ini_string()</a></span>.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.json-to-jsond">
  <h4 class="title">JSON extension replaced with JSOND</h4>

  <p class="para">
   The JSON extension has been replaced with JSOND, causing three minor BC
   breaks. Firstly, a number must not end in a decimal point (i.e.
   <code class="literal">34.</code> must be changed to either <code class="literal">34.0</code> or
   <code class="literal">34</code>). Secondly, when using scientific notation, the
   <code class="literal">e</code> exponent must not immediately follow a decimal point
   (i.e. <code class="literal">3.e3</code> must be changed to either
   <code class="literal">3.0e3</code> or <code class="literal">3e3</code>).
   Finally, an empty string is no longer considered valid JSON.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.internal-function-failure-overflow">
  <h4 class="title">Internal function failure on overflow</h4>

  <p class="para">
   Previously, internal functions would silently truncate numbers produced from
   float-to-integer coercions when the float was too large to represent as an
   integer. Now, an E_WARNING will be emitted and <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will be returned.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.fixes-custom-session-handler">
  <h4 class="title">Fixes to custom session handler return values</h4>

  <p class="para">
   Any predicate functions implemented by custom session handlers that return
   either <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or <code class="literal">-1</code> will be fatal errors. If any value
   from these functions other than a boolean, <code class="literal">-1</code>, or
   <code class="literal">0</code> is returned, then it will fail and an E_WARNING will be
   emitted.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.sort-order">
  <h4 class="title">Sort order of equal elements</h4>
  <p class="para">
   The internal sorting algorithm has been improved, what may result in
   different sort order of elements, which compare as equal, than before.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Don&#039;t rely on the order of elements which compare as equal; it might change
    anytime.
   </p>
  </p></blockquote>
 </div>

 <div class="sect3" id="migration70.incompatible.other.break-continue">
  <h4 class="title">Misplaced break and continue statements</h4>
  <p class="para">
   <code class="literal">break</code> and <code class="literal">continue</code> statements outside of
   a loop or <code class="literal">switch</code> control structure are now detected at
   compile-time instead of run-time as before, and trigger an
   <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.break-continue-constant">
  <h4 class="title">Constant disallowed as break and continue argument</h4>
  <p class="para">
   <code class="literal">break</code> and <code class="literal">continue</code> statements no longer
   allow their argument to be a constant, and trigger a
   <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.mhash">
  <h4 class="title">Mhash is not an extension anymore</h4>
  <p class="para">
   The Mhash extension has been fully integrated into the <a href="book.hash.php" class="link">Hash</a> extension. Therefore, it is no longer
   possible to detect Mhash support with <span class="function"><a href="function.extension-loaded.php" class="function">extension_loaded()</a></span>;
   use <span class="function"><a href="function.function-exists.php" class="function">function_exists()</a></span> instead. Furthermore, Mhash is no
   longer reported by <span class="function"><a href="function.get-loaded-extensions.php" class="function">get_loaded_extensions()</a></span> and related
   features.
  </p>
 </div>

 <div class="sect3" id="migration70.incompatible.other.declare-ticks">
  <h4 class="title">declare(ticks)</h4>
  <p class="para">
   The <a href="control-structures.declare.php#control-structures.declare.ticks" class="link">declare(ticks)</a>
   directive does no longer leak into different compilation units.
  </p>
 </div>
</div>



</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration70/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration70.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration70.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration70.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration70.php">Migrating from PHP 5.6.x to PHP 7.0.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration70.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="">
                            <a href="migration70.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration70.deprecated.php" title="Deprecated features in PHP 7.0.x">Deprecated features in PHP 7.0.x</a>
                        </li>
                                                <li class="">
                            <a href="migration70.changed-functions.php" title="Changed functions">Changed functions</a>
                        </li>
                                                <li class="">
                            <a href="migration70.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="">
                            <a href="migration70.classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration70.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration70.sapi-changes.php" title="Changes in SAPI Modules">Changes in SAPI Modules</a>
                        </li>
                                                <li class="">
                            <a href="migration70.removed-exts-sapis.php" title="Removed Extensions and SAPIs">Removed Extensions and SAPIs</a>
                        </li>
                                                <li class="">
                            <a href="migration70.other-changes.php" title="Other Changes">Other Changes</a>
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
