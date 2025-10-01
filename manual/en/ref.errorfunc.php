<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Error Handling Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="shorturl" href="https://www.php.net/errorfunc">
 <link rel="alternate" href="https://www.php.net/errorfunc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/errorfunc.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/function.debug-backtrace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.errorfunc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.errorfunc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.errorfunc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.errorfunc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.errorfunc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.errorfunc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.errorfunc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.errorfunc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.errorfunc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.errorfunc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.errorfunc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Error Handling Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Error Handling Functions - Manual" />
<meta name="twitter:description" content="Error Handling Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Error Handling Functions - Manual" />
<meta itemprop="description" content="Error Handling Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Error Handling Functions" />

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
        <a href="function.debug-backtrace.php">
          debug_backtrace &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="errorfunc.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      </ul>
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
            <option value='en/ref.errorfunc.php' selected="selected">English</option>
            <option value='de/ref.errorfunc.php'>German</option>
            <option value='es/ref.errorfunc.php'>Spanish</option>
            <option value='fr/ref.errorfunc.php'>French</option>
            <option value='it/ref.errorfunc.php'>Italian</option>
            <option value='ja/ref.errorfunc.php'>Japanese</option>
            <option value='pt_BR/ref.errorfunc.php'>Brazilian Portuguese</option>
            <option value='ru/ref.errorfunc.php'>Russian</option>
            <option value='tr/ref.errorfunc.php'>Turkish</option>
            <option value='uk/ref.errorfunc.php'>Ukrainian</option>
            <option value='zh/ref.errorfunc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.errorfunc" class="reference">
 <h1 class="title">Error Handling Functions</h1>
 <div class="partintro">
  <h1 class="title">See Also</h1>
   <p class="para">
    See also <span class="function"><a href="function.syslog.php" class="function">syslog()</a></span>.
   </p>
 </div>

 






  

































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.debug-backtrace.php">debug_backtrace</a> — Generates a backtrace</li><li><a href="function.debug-print-backtrace.php">debug_print_backtrace</a> — Prints a backtrace</li><li><a href="function.error-clear-last.php">error_clear_last</a> — Clear the most recent error</li><li><a href="function.error-get-last.php">error_get_last</a> — Get the last occurred error</li><li><a href="function.error-log.php">error_log</a> — Send an error message to the defined error handling routines</li><li><a href="function.error-reporting.php">error_reporting</a> — Sets which PHP errors are reported</li><li><a href="function.get-error-handler.php">get_error_handler</a> — Gets the user-defined error handler function</li><li><a href="function.get-exception-handler.php">get_exception_handler</a> — Gets the user-defined exception handler function</li><li><a href="function.restore-error-handler.php">restore_error_handler</a> — Restores the previous error handler function</li><li><a href="function.restore-exception-handler.php">restore_exception_handler</a> — Restores the previously defined exception handler function</li><li><a href="function.set-error-handler.php">set_error_handler</a> — Sets a user-defined error handler function</li><li><a href="function.set-exception-handler.php">set_exception_handler</a> — Sets a user-defined exception handler function</li><li><a href="function.trigger-error.php">trigger_error</a> — Generates a user-level error/warning/notice message</li><li><a href="function.user-error.php">user_error</a> — Alias of trigger_error</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.errorfunc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.errorfunc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.errorfunc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="45535">  <div class="votes">
    <div id="Vu45535">
    <a href="/manual/vote-note.php?id=45535&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45535">
    <a href="/manual/vote-note.php?id=45535&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45535" title="58% like this...">
    6
    </div>
  </div>
  <a href="#45535" class="name">
  <strong class="user"><em>ptah at se dot linux dot org</em></strong></a><a class="genanchor" href="#45535"> &para;</a><div class="date" title="2004-09-09 05:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45535">
<div class="phpcode"><code><span class="html">PHP5 only (only tested with php5.0).<br /><br />If you, for some reason, prefer exceptions over errors and have your custom error handler (set_error_handler) wrap the error into an exception you have to be careful with your script.<br /><br />Because if you, instead of just calling the exception handler, throws the exception, and having a custom exception handler (set_exception_handler). And an error is being triggered inside that exception handler, you will get a weird error:<br />"Fatal error: Exception thrown without a stack frame in Unknown on line 0"<br /><br />This error is not particulary informative, is it? :)<br /><br />This example below will cause this error.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">PHPErrorException </span><span class="keyword">extends </span><span class="default">Exception<br /></span><span class="keyword">{<br />    private </span><span class="default">$context </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    public function </span><span class="default">__construct<br />        </span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$context </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">file </span><span class="keyword">= </span><span class="default">$file</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">line </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">context </span><span class="keyword">= </span><span class="default">$context</span><span class="keyword">;<br />    }<br />};<br /><br />function </span><span class="default">error_handler</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">) {<br />    throw new </span><span class="default">PHPErrorException</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">exception_handler</span><span class="keyword">(</span><span class="default">Exception $e</span><span class="keyword">)<br />{    <br />    </span><span class="default">$errors </span><span class="keyword">= array(<br />        </span><span class="default">E_USER_ERROR        </span><span class="keyword">=&gt; </span><span class="string">"User Error"</span><span class="keyword">,<br />        </span><span class="default">E_USER_WARNING        </span><span class="keyword">=&gt; </span><span class="string">"User Warning"</span><span class="keyword">,<br />        </span><span class="default">E_USER_NOTICE        </span><span class="keyword">=&gt; </span><span class="string">"User Notice"</span><span class="keyword">,<br />        );<br />        <br />    echo </span><span class="default">$errors</span><span class="keyword">[</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getCode</span><span class="keyword">()].</span><span class="string">': '</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">().</span><span class="string">' in '</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getFile</span><span class="keyword">().<br />        </span><span class="string">' on line '</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;<br />    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">();<br />}<br /><br /></span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">'error_handler'</span><span class="keyword">);<br /></span><span class="default">set_exception_handler</span><span class="keyword">(</span><span class="string">'exception_handler'</span><span class="keyword">);<br /><br /></span><span class="comment">// Throw exception with an /unkown/ error code.<br /></span><span class="keyword">throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />There are however, easy fix for this as it's only cause is sloppy code.<br />Like one, directly call exception_handler from error_handler instead of throwing an exception. Not only does it remedy this problem, but it's also faster. Though this will cause a `regular` unhandled exception being printed and if only "designed" error messages are intended, this is not the ultimate solution.<br /><br />So, what is there to do? Make sure the code in exception_handlers doesn't cause any errors! In this case a simple isset() would have solved it.<br /><br />regards, C-A B.</span></code></div>
  </div>
 </div>
  <div class="note" id="59192">  <div class="votes">
    <div id="Vu59192">
    <a href="/manual/vote-note.php?id=59192&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59192">
    <a href="/manual/vote-note.php?id=59192&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59192" title="60% like this...">
    5
    </div>
  </div>
  <a href="#59192" class="name">
  <strong class="user"><em>tracerdx at tracerdx dot com</em></strong></a><a class="genanchor" href="#59192"> &para;</a><div class="date" title="2005-11-28 09:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59192">
<div class="phpcode"><code><span class="html">I keep seeing qualification lists for error types/error-nums as arrays; In user notes and in the manual itself. For example, in this manual entry's example, when trying to seperate behavior for the variable trace in the error report:<br /><br /><span class="default">&lt;?php </span><span class="comment">//...<br /><br />// set of errors for which a var trace will be saved<br /></span><span class="default">$user_errors </span><span class="keyword">= array(</span><span class="default">E_USER_ERROR</span><span class="keyword">, </span><span class="default">E_USER_WARNING</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">);<br /><br /></span><span class="comment">//and later...<br /><br /></span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$user_errors</span><span class="keyword">)) {<br />    </span><span class="comment">//...whatever<br /></span><span class="keyword">}<br /><br /></span><span class="comment">//... </span><span class="default">?&gt;<br /></span><br />I was under the impression that PHP error code values where bitwise flag values. Wouldn't bitwise masking be better? So I propose a slightly better way:<br /><span class="default">&lt;?php </span><span class="comment">//...<br /><br /></span><span class="default">$user_errors </span><span class="keyword">= </span><span class="default">E_USER_ERROR </span><span class="keyword">| </span><span class="default">E_USER_WARNING </span><span class="keyword">| </span><span class="default">E_USER_NOTICE</span><span class="keyword">;<br /><br /></span><span class="comment">//...blah...<br /><br /></span><span class="keyword">if (</span><span class="default">$errno </span><span class="keyword">&amp; </span><span class="default">$user_errors</span><span class="keyword">) {<br />    </span><span class="comment">//...whatever<br /></span><span class="keyword">}<br /><br /></span><span class="comment">//... </span><span class="default">?&gt;<br /></span>Or for those of you who don't like the idea of using an integer as the condition in an if statement:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if ((</span><span class="default">$errno </span><span class="keyword">&amp; </span><span class="default">$user_errors</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="comment">//...whatever<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />I think that's much more efficient than using _yet another_ array() constuct and an in_array().<br /><br />If I am wrong, and the E_* constants aren't supposed to be used in this fashion (ie, the constans aren't guaranteed to be bitwise, which would be odd since that's how they're setup in the php.ini file), then delete me. I just don't see why one should be using arrays when bitwise comparisons will work, considering the bitwise method should be MUCH more efficient.</span></code></div>
  </div>
 </div>
  <div class="note" id="72445">  <div class="votes">
    <div id="Vu72445">
    <a href="/manual/vote-note.php?id=72445&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72445">
    <a href="/manual/vote-note.php?id=72445&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72445" title="61% like this...">
    3
    </div>
  </div>
  <a href="#72445" class="name">
  <strong class="user"><em>Stephen</em></strong></a><a class="genanchor" href="#72445"> &para;</a><div class="date" title="2007-01-18 03:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72445">
<div class="phpcode"><code><span class="html">If you are using PHP as an Apache module, your default behavior may be to write PHP error messages to Apache's error log. This is because the error_log .ini directive may be set equal to "error_log" which is also the name of Apache's error log. I think this is intentional.<br /><br />However, you can separate Apache errors from PHP errors if you wish by simply setting a different value for error_log. I write mine in the /var/log folder.</span></code></div>
  </div>
 </div>
  <div class="note" id="72238">  <div class="votes">
    <div id="Vu72238">
    <a href="/manual/vote-note.php?id=72238&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72238">
    <a href="/manual/vote-note.php?id=72238&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72238" title="61% like this...">
    3
    </div>
  </div>
  <a href="#72238" class="name">
  <strong class="user"><em>mortonda at dgrmm dot net</em></strong></a><a class="genanchor" href="#72238"> &para;</a><div class="date" title="2007-01-08 05:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72238">
<div class="phpcode"><code><span class="html">Note the example code listed here calls date() every time this is called.   If you have a complex source base which calls the custom error handler often, it can end up taking quite a bit of time.  I ran a profiler on som code and discovered that 50% of the time was spent in the date function in this error handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="68642">  <div class="votes">
    <div id="Vu68642">
    <a href="/manual/vote-note.php?id=68642&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68642">
    <a href="/manual/vote-note.php?id=68642&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68642" title="55% like this...">
    2
    </div>
  </div>
  <a href="#68642" class="name">
  <strong class="user"><em>theotek AT nowhere DOT org</em></strong></a><a class="genanchor" href="#68642"> &para;</a><div class="date" title="2006-08-04 08:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68642">
<div class="phpcode"><code><span class="html">It is totally possible to use debug_backtrace() inside an error handling function. Here, take a look:<br /><br /><span class="default">&lt;?php<br />set_error_handler</span><span class="keyword">(</span><span class="string">'errorHandler'</span><span class="keyword">);<br /><br />function </span><span class="default">errorHandler</span><span class="keyword">( </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">, </span><span class="default">$errcontext</span><span class="keyword">)<br />{<br />  echo </span><span class="string">'Into '</span><span class="keyword">.</span><span class="default">__FUNCTION__</span><span class="keyword">.</span><span class="string">'() at line '</span><span class="keyword">.</span><span class="default">__LINE__</span><span class="keyword">.<br />  </span><span class="string">"\n\n---ERRNO---\n"</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).<br />  </span><span class="string">"\n\n---ERRSTR---\n"</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).<br />  </span><span class="string">"\n\n---ERRFILE---\n"</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).<br />  </span><span class="string">"\n\n---ERRLINE---\n"</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$errline</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).<br />  </span><span class="string">"\n\n---ERRCONTEXT---\n"</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$errcontext</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).<br />  </span><span class="string">"\n\nBacktrace of errorHandler()\n"</span><span class="keyword">.<br />  </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">debug_backtrace</span><span class="keyword">(), </span><span class="default">true</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">a</span><span class="keyword">( )<br />{<br />  </span><span class="comment">//echo "a()'s backtrace\n".print_r( debug_backtrace(), true);<br />  </span><span class="default">asdfasdf</span><span class="keyword">; </span><span class="comment">// oops<br /></span><span class="keyword">}<br /><br />function </span><span class="default">b</span><span class="keyword">()<br />{<br />  </span><span class="comment">//echo "b()'s backtrace\n".print_r( debug_backtrace(), true);<br />  </span><span class="default">a</span><span class="keyword">();<br />}<br /><br /></span><span class="default">b</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br /><br />&lt;raw&gt;<br /><br />Into errorhandler() at line 9<br /><br />---ERRNO---<br />8<br /><br />---ERRSTR---<br />Use of undefined constant asdfasdf - assumed 'asdfasdf'<br /><br />---ERRFILE---<br />/home/theotek/test-1.php<br /><br />---ERRLINE---<br />23<br /><br />---ERRCONTEXT---<br />Array<br />(<br />)<br /><br />Backtrace of errorHandler()<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [function] =&gt; errorhandler<br />            [args] =&gt; Array<br />                (<br />                    [0] =&gt; 8<br />                    [1] =&gt; Use of undefined constant asdfasdf - assumed 'asdfasdf'<br />                    [2] =&gt; /home/theotek/test-1.php<br />                    [3] =&gt; 23<br />                    [4] =&gt; Array<br />                        (<br />                        )<br /><br />                )<br /><br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [file] =&gt; /home/theotek/test-1.php<br />            [line] =&gt; 23<br />            [function] =&gt; a<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [file] =&gt; /home/theotek/test-1.php<br />            [line] =&gt; 30<br />            [function] =&gt; a<br />            [args] =&gt; Array<br />                (<br />                )<br /><br />        )<br /><br />    [3] =&gt; Array<br />        (<br />            [file] =&gt; /home/theotek/test-1.php<br />            [line] =&gt; 33<br />            [function] =&gt; b<br />            [args] =&gt; Array<br />                (<br />                )<br /><br />        )<br /><br />)<br /><br />&lt;/raw&gt;<br /><br />So, the first member of the backtrace's array is not really surprising, except from the missing "file" and "line" members. <br /><br />The second member of the backtrace seem the be a hook inside the zend engine that is used to trigger the error. <br /><br />Other members are the normal backtrace.</span></code></div>
  </div>
 </div>
  <div class="note" id="49438">  <div class="votes">
    <div id="Vu49438">
    <a href="/manual/vote-note.php?id=49438&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49438">
    <a href="/manual/vote-note.php?id=49438&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49438" title="55% like this...">
    2
    </div>
  </div>
  <a href="#49438" class="name">
  <strong class="user"><em>shawing at gmail dot com</em></strong></a><a class="genanchor" href="#49438"> &para;</a><div class="date" title="2005-01-27 02:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49438">
<div class="phpcode"><code><span class="html">Although the root user writes to the files 'error_log' and 'access_log', the Apache user has to own the file referenced by 'error_log = filename' or no log entries will be written.<br /><br />; From php.ini<br />; Log errors to specified file.<br />error_log = /usr/local/apache/logs/php.errors<br /><br />[root@www logs]$ ls -l /usr/local/apache/logs/php.errors<br />-rw-r--r--    1 nobody   root          27K Jan 27 16:58 php.errors</span></code></div>
  </div>
 </div>
  <div class="note" id="79199">  <div class="votes">
    <div id="Vu79199">
    <a href="/manual/vote-note.php?id=79199&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79199">
    <a href="/manual/vote-note.php?id=79199&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79199" title="54% like this...">
    1
    </div>
  </div>
  <a href="#79199" class="name">
  <strong class="user"><em>jbq at caraldi dot com</em></strong></a><a class="genanchor" href="#79199"> &para;</a><div class="date" title="2007-11-15 05:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79199">
<div class="phpcode"><code><span class="html">Precision about error_log when configured with syslog: the syslog() call is done with severity NOTICE.</span></code></div>
  </div>
 </div>
  <div class="note" id="53025">  <div class="votes">
    <div id="Vu53025">
    <a href="/manual/vote-note.php?id=53025&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53025">
    <a href="/manual/vote-note.php?id=53025&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53025" title="54% like this...">
    1
    </div>
  </div>
  <a href="#53025" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#53025"> &para;</a><div class="date" title="2005-05-20 04:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53025">
<div class="phpcode"><code><span class="html">When configuring your error log file in php.ini, you can use an absolute path or a relative path.  A relative path will be resolved based on the location of the generating script, and you'll get a log file in each directory you have scripts in.  If you want all your error messages to go to the same file, use an absolute path to the file.<br /><br />In some application development methodologies, there is the concept of an application root directory, indicated by "/" (even on Windows).  However, PHP does not seem to have this concept, and using a "/" as the initial character in a log file path produces weird behavior on Windows.<br /><br />If you are running on Windows and have set, in php.ini:<br /><br />  error_log = "/php_error.log"<br /><br />You will get some, but not all, error messages.  The file will appear at<br /><br />  c:\php_error.log<br /><br />and contain internally generated error messages, making it appear that error logging is working.  However, log messages requested by error_log() do NOT appear here, or anywhere else, making it appear that the code containing them did not get processed.<br /><br />Apparently on Windows the internally generated errors will interpret "/" as "C:\" (or possibly a different drive if you have Windows installed elsewhere - I haven't tested this).  However, the error_log process apparently can't find "/" - understandably enough - and the message is dropped silently.</span></code></div>
  </div>
 </div>
  <div class="note" id="72375">  <div class="votes">
    <div id="Vu72375">
    <a href="/manual/vote-note.php?id=72375&amp;page=ref.errorfunc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72375">
    <a href="/manual/vote-note.php?id=72375&amp;page=ref.errorfunc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72375" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#72375" class="name">
  <strong class="user"><em>petrov dot michael () gmail com</em></strong></a><a class="genanchor" href="#72375"> &para;</a><div class="date" title="2007-01-16 11:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72375">
<div class="phpcode"><code><span class="html">I have found that on servers that enforce display_errors to be off it is very inconvenient to debug syntax errors since they cause fatal startup errors. I have used the following method to bypass this limitation:<br /><br />The syntax error is inside the file "syntax.php", therefore I create a file "syntax.debug.php" with the following code:<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">,</span><span class="string">'On'</span><span class="keyword">);<br /><br />include(</span><span class="string">'syntax.php'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The 5 line file is guaranteed to be free of errors, allowing PHP to execute the directives within it before including the file which previously caused fatal startup errors. Now those fatal startup errors become run time fatal errors.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.errorfunc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.errorfunc.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.errorfunc.php">Error Handling</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.errorfunc.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="errorfunc.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="errorfunc.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="errorfunc.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.errorfunc.php" title="Error Handling Functions">Error Handling Functions</a>
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
