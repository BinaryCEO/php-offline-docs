<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Connection handling - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.connection-handling.php">
 <link rel="shorturl" href="https://www.php.net/connection-handling">
 <link rel="alternate" href="https://www.php.net/connection-handling" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/features.php">
 <link rel="prev" href="https://www.php.net/manual/en/features.remote-files.php">
 <link rel="next" href="https://www.php.net/manual/en/features.persistent-connections.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.connection-handling.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.connection-handling.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.connection-handling.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.connection-handling.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.connection-handling.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.connection-handling.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.connection-handling.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.connection-handling.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.connection-handling.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.connection-handling.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.connection-handling.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connection handling" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Connection handling - Manual" />
<meta name="twitter:description" content="Connection handling" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Connection handling - Manual" />
<meta itemprop="description" content="Connection handling" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connection handling" />

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
        <a href="features.persistent-connections.php">
          Persistent Database Connections &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="features.remote-files.php">
          &laquo; Using remote files        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='features.php'>Features</a></li>      </ul>
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
            <option value='en/features.connection-handling.php' selected="selected">English</option>
            <option value='de/features.connection-handling.php'>German</option>
            <option value='es/features.connection-handling.php'>Spanish</option>
            <option value='fr/features.connection-handling.php'>French</option>
            <option value='it/features.connection-handling.php'>Italian</option>
            <option value='ja/features.connection-handling.php'>Japanese</option>
            <option value='pt_BR/features.connection-handling.php'>Brazilian Portuguese</option>
            <option value='ru/features.connection-handling.php'>Russian</option>
            <option value='tr/features.connection-handling.php'>Turkish</option>
            <option value='uk/features.connection-handling.php'>Ukrainian</option>
            <option value='zh/features.connection-handling.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.connection-handling" class="chapter">
  <h1 class="title">Connection handling</h1>


  <p class="para">
   Internally in PHP a connection status is maintained.  There are 4
   possible states:
   <ul class="itemizedlist">
    <li class="listitem"><span class="simpara">0 - NORMAL</span></li>
    <li class="listitem"><span class="simpara">1 - ABORTED</span></li>
    <li class="listitem"><span class="simpara">2 - TIMEOUT</span></li>
    <li class="listitem"><span class="simpara">3 - ABORTED and TIMEOUT</span></li>
   </ul>
  </p>

  <p class="simpara">
   When a PHP script is running normally, the NORMAL state is active.
   If the remote client disconnects, the ABORTED state flag is
   turned on.  A remote client disconnect is usually caused by
   users hitting their STOP button.  If the PHP-imposed time limit (see
   <span class="function"><a href="function.set-time-limit.php" class="function">set_time_limit()</a></span>) is hit, the TIMEOUT state flag
   is turned on.</p>

  <p class="simpara">
   You can decide whether or not you want a client disconnect to cause
   your script to be aborted.  Sometimes it is handy to always have your
   scripts run to completion even if there is no remote browser receiving
   the output.  The default behaviour is however for your script to be
   aborted when the remote client disconnects.  This behaviour can be
   set via the ignore_user_abort <var class="filename">php.ini</var> directive as well as through
   the corresponding <code class="literal">php_value ignore_user_abort</code> Apache 
   <var class="filename">httpd.conf</var> directive or
   with the <span class="function"><a href="function.ignore-user-abort.php" class="function">ignore_user_abort()</a></span> function.  If you do
   not tell PHP to ignore a user abort and the user aborts, your script
   will terminate.  The one exception is if you have registered a shutdown
   function using <span class="function"><a href="function.register-shutdown-function.php" class="function">register_shutdown_function()</a></span>.  With a
   shutdown function, when the remote user hits his STOP button, the
   next time your script tries to output something PHP will detect that
   the connection has been aborted and the shutdown function is called.
   This shutdown function will also get called at the end of your script
   terminating normally, so to do something different in case of a client
   disconnect you can use the <span class="function"><a href="function.connection-aborted.php" class="function">connection_aborted()</a></span>
   function.  This function will return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the connection was
   aborted.</p>

  <p class="simpara">
   Your script can also be terminated by the built-in script timer.
   The default timeout is 30 seconds.  It can be changed using
   the <strong class="option unknown">max_execution_time</strong> <var class="filename">php.ini</var> directive or the corresponding
   <code class="literal">php_value max_execution_time</code> Apache <var class="filename">httpd.conf</var>
   directive as well as with
   the <span class="function"><a href="function.set-time-limit.php" class="function">set_time_limit()</a></span> function.  When the timer
   expires the script will be aborted and as with the above client
   disconnect case, if a shutdown function has been registered it will
   be called.  Within this shutdown function you can check to see if
   a timeout caused the shutdown function to be called by calling the
   <span class="function"><a href="function.connection-status.php" class="function">connection_status()</a></span> function.  This function will
   return 2 if a timeout caused the shutdown function to be called.
  </p>

  <p class="simpara">
   One thing to note is that both the ABORTED and the TIMEOUT states
   can be active at the same time.  This is possible if you tell
   PHP to ignore user aborts.  PHP will still note the fact that
   a user may have broken the connection, but the script will keep
   running.  If it then hits the time limit it will be aborted and
   your shutdown function, if any, will be called.  At this point
   you will find that <span class="function"><a href="function.connection-status.php" class="function">connection_status()</a></span>
   returns 3.
  </p>
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/features/connection-handling.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.connection-handling%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.connection-handling&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.connection-handling.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="93441">  <div class="votes">
    <div id="Vu93441">
    <a href="/manual/vote-note.php?id=93441&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93441">
    <a href="/manual/vote-note.php?id=93441&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93441" title="65% like this...">
    65
    </div>
  </div>
  <a href="#93441" class="name">
  <strong class="user"><em>tom lgold2003 at gmail dot com</em></strong></a><a class="genanchor" href="#93441"> &para;</a><div class="date" title="2009-09-09 11:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93441">
<div class="phpcode"><code><span class="html">hey, thanks to arr1, and it is very useful for me, when I need to return to the user fast and then do something else.<br /><br />When using the codes, it nearly drive me mad and I found another thing that may affect the codes:<br /><br />Content-Encoding: gzip<br /><br />This is because the zlib is on and the content will be compressed. But this will not output the buffer until all output is over.<br /><br />So, it may need to send the header to prevent this problem.<br /><br />now, the code becomes:<br /><br /><span class="default">&lt;?php<br />ob_end_clean</span><span class="keyword">();<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Connection: close\r\n"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Encoding: none\r\n"</span><span class="keyword">);<br /></span><span class="default">ignore_user_abort</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); </span><span class="comment">// optional<br /></span><span class="default">ob_start</span><span class="keyword">();<br />echo (</span><span class="string">'Text user will see'</span><span class="keyword">);<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">ob_get_length</span><span class="keyword">();<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">ob_end_flush</span><span class="keyword">();     </span><span class="comment">// Strange behaviour, will not work<br /></span><span class="default">flush</span><span class="keyword">();            </span><span class="comment">// Unless both are called !<br /></span><span class="default">ob_end_clean</span><span class="keyword">();<br /><br /></span><span class="comment">//do processing here<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br /><br />echo(</span><span class="string">'Text user will never see'</span><span class="keyword">);<br /></span><span class="comment">//do some processing<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71172">  <div class="votes">
    <div id="Vu71172">
    <a href="/manual/vote-note.php?id=71172&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71172">
    <a href="/manual/vote-note.php?id=71172&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71172" title="69% like this...">
    55
    </div>
  </div>
  <a href="#71172" class="name">
  <strong class="user"><em>arr1 at hotmail dot co dot uk</em></strong></a><a class="genanchor" href="#71172"> &para;</a><div class="date" title="2006-11-14 11:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71172">
<div class="phpcode"><code><span class="html">Closing the users browser connection whilst keeping your php script running has been an issue since 4.1, when the behaviour of register_shutdown_function() was modified so that it would not automatically close the users connection.<br /><br />sts at mail dot xubion dot hu<br />Posted the original solution:<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Connection: close"</span><span class="keyword">);<br /></span><span class="default">ob_start</span><span class="keyword">();<br /></span><span class="default">phpinfo</span><span class="keyword">();<br /></span><span class="default">$size</span><span class="keyword">=</span><span class="default">ob_get_length</span><span class="keyword">();<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /></span><span class="default">flush</span><span class="keyword">();<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">13</span><span class="keyword">);<br /></span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"do something in the background"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Which works fine until you substitute phpinfo() for <br />echo ('text I want user to see'); in which case the headers are never sent!<br /><br />The solution is to explicitly turn off output buffering and clear the buffer prior to sending your header information.<br /><br />example:<br /><br /><span class="default">&lt;?php<br /> ob_end_clean</span><span class="keyword">();<br /> </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Connection: close"</span><span class="keyword">);<br /> </span><span class="default">ignore_user_abort</span><span class="keyword">(); </span><span class="comment">// optional<br /> </span><span class="default">ob_start</span><span class="keyword">();<br /> echo (</span><span class="string">'Text the user will see'</span><span class="keyword">);<br /> </span><span class="default">$size </span><span class="keyword">= </span><span class="default">ob_get_length</span><span class="keyword">();<br /> </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);<br /> </span><span class="default">ob_end_flush</span><span class="keyword">(); </span><span class="comment">// Strange behaviour, will not work<br /> </span><span class="default">flush</span><span class="keyword">();            </span><span class="comment">// Unless both are called !<br /> // Do processing here <br /> </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">30</span><span class="keyword">);<br /> echo(</span><span class="string">'Text user will never see'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span> <br />Just spent 3 hours trying to figure this one out, hope it helps someone :)<br /><br />Tested in:<br />IE 7.5730.11<br />Mozilla Firefox 1.81</span></code></div>
  </div>
 </div>
  <div class="note" id="112843">  <div class="votes">
    <div id="Vu112843">
    <a href="/manual/vote-note.php?id=112843&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112843">
    <a href="/manual/vote-note.php?id=112843&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112843" title="67% like this...">
    38
    </div>
  </div>
  <a href="#112843" class="name">
  <strong class="user"><em>mheumann at comciencia dot cl</em></strong></a><a class="genanchor" href="#112843"> &para;</a><div class="date" title="2013-07-29 02:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112843">
<div class="phpcode"><code><span class="html">I had a lot of problems getting a redirect to work, after which my script was intended to keep working in the background. The redirect to another page of my site simply would only work once the original page had finished processing.<br /><br />I finally found out what was wrong:<br />The session only gets closed by PHP at the very end of the script, and since access to the session data is locked to prevent more than one page writing to it simultaneously, the new page cannot load until the original processing has finished.<br /><br />Solution:<br />Close the session manually when redirecting using session_write_close():<br /><br /><span class="default">&lt;?php<br />ignore_user_abort</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">$strURL </span><span class="keyword">= </span><span class="string">"PUT YOUR REDIRCT HERE"</span><span class="keyword">;<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: </span><span class="default">$strURL</span><span class="string">"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Connection: close"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Encoding: none\r\n"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: 0"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">flush</span><span class="keyword">();<br /></span><span class="default">ob_flush</span><span class="keyword">();<br /><br /></span><span class="default">session_write_close</span><span class="keyword">();<br /><br /></span><span class="comment">// Continue processing...<br /><br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />exit;<br /></span><span class="default">?&gt;<br /></span><br />But careful:<br />Make sure that your script doesn't write to the session after session_write_close(), i.e. in your background processing code.  That won't work.  Also avoid reading, remember, the next script may already have modified the data.<br /><br />So try to read out the data you need prior to redirecting.</span></code></div>
  </div>
 </div>
  <div class="note" id="45779">  <div class="votes">
    <div id="Vu45779">
    <a href="/manual/vote-note.php?id=45779&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45779">
    <a href="/manual/vote-note.php?id=45779&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45779" title="70% like this...">
    31
    </div>
  </div>
  <a href="#45779" class="name">
  <strong class="user"><em>Lee</em></strong></a><a class="genanchor" href="#45779"> &para;</a><div class="date" title="2004-09-18 03:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45779">
<div class="phpcode"><code><span class="html">The point mentioned in the last comment isn't always the case.<br /><br />If a user's connection is lost half way through an order processing script is confirming a user's credit card/adding them to a DB, etc (due to their ISP going down, network trouble... whatever) and your script tries to send back output (such as, "pre-processing order" or any other type of confirmation), then your script will abort -- and this could cause problems for your process.<br /><br />I have an order script that adds data to a InnoDB database (through MySQL) and only commits the transactions upon successful completion. Without ignore_user_abort(), I have had times when a user's connection dropped during the processing phase... and their card was charged, but they weren't added to my local DB.<br /><br />So, it's always safe to ignore any aborts if you are processing sensitive transactions that should go ahead, whether your user is "watching" on the other end or not.</span></code></div>
  </div>
 </div>
  <div class="note" id="120770">  <div class="votes">
    <div id="Vu120770">
    <a href="/manual/vote-note.php?id=120770&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120770">
    <a href="/manual/vote-note.php?id=120770&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120770" title="71% like this...">
    23
    </div>
  </div>
  <a href="#120770" class="name">
  <strong class="user"><em>Marco</em></strong></a><a class="genanchor" href="#120770"> &para;</a><div class="date" title="2017-03-08 05:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120770">
<div class="phpcode"><code><span class="html">The CONNECTION_XXX constants that are not listed here for some reason are:<br /><br />0 = CONNECTION_NORMAL<br />1 = CONNECTION_ABORTED<br />2 = CONNECTION_TIMEOUT<br />3 = CONNECTION_ABORTED &amp; CONNECTION_TIMEOUT<br /><br />Number 3 is effectively tested like this:<br />if (CONNECTION_ABORTED &amp; CONNECTION_TIMEOUT)<br />    echo 'Connection both aborted and timed out';</span></code></div>
  </div>
 </div>
  <div class="note" id="95087">  <div class="votes">
    <div id="Vu95087">
    <a href="/manual/vote-note.php?id=95087&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95087">
    <a href="/manual/vote-note.php?id=95087&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95087" title="67% like this...">
    28
    </div>
  </div>
  <a href="#95087" class="name">
  <strong class="user"><em>a1n2ton at gmail dot com</em></strong></a><a class="genanchor" href="#95087"> &para;</a><div class="date" title="2009-12-12 01:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95087">
<div class="phpcode"><code><span class="html">PHP changes directory on connection abort so code like this will not do what you want:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">abort</span><span class="keyword">()<br />{<br />     if(</span><span class="default">connection_aborted</span><span class="keyword">())<br />           </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">'file.ini'</span><span class="keyword">);<br />}<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'abort'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />actually it will delete file in apaches's root dir so if you want to unlink file in your script's dir on abort or write to it you have to store directory<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">abort</span><span class="keyword">()<br />{<br />     global </span><span class="default">$dsd</span><span class="keyword">;<br />     if(</span><span class="default">connection_aborted</span><span class="keyword">())<br />           </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$dsd</span><span class="keyword">.</span><span class="string">'/file.ini'</span><span class="keyword">);<br />}<br /></span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'abort'</span><span class="keyword">);<br /></span><span class="default">$dsd</span><span class="keyword">=</span><span class="default">getcwd</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110184">  <div class="votes">
    <div id="Vu110184">
    <a href="/manual/vote-note.php?id=110184&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110184">
    <a href="/manual/vote-note.php?id=110184&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110184" title="64% like this...">
    27
    </div>
  </div>
  <a href="#110184" class="name">
  <strong class="user"><em>Ilya Penyaev</em></strong></a><a class="genanchor" href="#110184"> &para;</a><div class="date" title="2012-09-27 06:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110184">
<div class="phpcode"><code><span class="html">I was quite stuck when trying to make my script redirect the client to another URL and then continue processing. The reason was php-fpm. All possible buffer flushes did not work, unless I called fastcgi_finish_request();<br /><br />For example:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// redirecting...<br />    </span><span class="default">ignore_user_abort</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: "</span><span class="keyword">.</span><span class="default">$redirectUrl</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Connection: close"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: 0"</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">ob_end_flush</span><span class="keyword">();<br />    </span><span class="default">flush</span><span class="keyword">();<br />    </span><span class="default">fastcgi_finish_request</span><span class="keyword">(); </span><span class="comment">// important when using php-fpm!<br />    <br />    </span><span class="default">sleep </span><span class="keyword">(</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// User won't feel this sleep because he'll already be away<br />    <br />    // do some work after user has been redirected<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107027">  <div class="votes">
    <div id="Vu107027">
    <a href="/manual/vote-note.php?id=107027&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107027">
    <a href="/manual/vote-note.php?id=107027&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107027" title="63% like this...">
    22
    </div>
  </div>
  <a href="#107027" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#107027"> &para;</a><div class="date" title="2011-12-29 05:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107027">
<div class="phpcode"><code><span class="html">This simple function outputs a string and closes the connection. It considers compression using "ob_gzhandler"
<br />
<br />It took me a little while to put this all together, mostly because setting the encoding to none, as some people noted here, didn't work.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">outputStringAndCloseConnection2</span><span class="keyword">(</span><span class="default">$stringToOutput</span><span class="keyword">)
<br />{    
<br />    </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />    </span><span class="default">ignore_user_abort</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);    
<br />    </span><span class="comment">// buffer all upcoming output - make sure we care about compression:
<br />    </span><span class="keyword">if(!</span><span class="default">ob_start</span><span class="keyword">(</span><span class="string">"ob_gzhandler"</span><span class="keyword">))
<br />        </span><span class="default">ob_start</span><span class="keyword">();         
<br />    echo </span><span class="default">$stringToOutput</span><span class="keyword">;    
<br />    </span><span class="comment">// get the size of the output
<br />    </span><span class="default">$size </span><span class="keyword">= </span><span class="default">ob_get_length</span><span class="keyword">();    
<br />    </span><span class="comment">// send headers to tell the browser to close the connection    
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: </span><span class="default">$size</span><span class="string">"</span><span class="keyword">);
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Connection: close'</span><span class="keyword">);    
<br />    </span><span class="comment">// flush all output
<br />    </span><span class="default">ob_end_flush</span><span class="keyword">();
<br />    </span><span class="default">ob_flush</span><span class="keyword">();
<br />    </span><span class="default">flush</span><span class="keyword">();    
<br />    </span><span class="comment">// close current session
<br />    </span><span class="keyword">if (</span><span class="default">session_id</span><span class="keyword">()) </span><span class="default">session_write_close</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="79134">  <div class="votes">
    <div id="Vu79134">
    <a href="/manual/vote-note.php?id=79134&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79134">
    <a href="/manual/vote-note.php?id=79134&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79134" title="62% like this...">
    22
    </div>
  </div>
  <a href="#79134" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79134"> &para;</a><div class="date" title="2007-11-13 02:06"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79134">
<div class="phpcode"><code><span class="html">in regards of posting from:<br />arr1 at hotmail dot co dot uk<br /><br />if you use/write sessions you need to do this before:<br />(otherwise it does not work)<br /><br />session_write_close();<br /><br />and if wanted:<br /><br />ignore_user_abort(TRUE);<br />instead of ignore_user_abort();</span></code></div>
  </div>
 </div>
  <div class="note" id="34800">  <div class="votes">
    <div id="Vu34800">
    <a href="/manual/vote-note.php?id=34800&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34800">
    <a href="/manual/vote-note.php?id=34800&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34800" title="64% like this...">
    19
    </div>
  </div>
  <a href="#34800" class="name">
  <strong class="user"><em>pulstar at mail dot com</em></strong></a><a class="genanchor" href="#34800"> &para;</a><div class="date" title="2003-08-06 11:32"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34800">
<div class="phpcode"><code><span class="html">These functions are very useful for example if you need to control when a visitor in your website place an order and you need to check if he/she didn't clicked the submit button twice or cancelled the submit just after have clicked the submit button. <br />If your visitor click the stop button just after have submitted it, your script may stop in the middle of the process of registering the products and do not finish the list, generating inconsistency in your database.<br />With the ignore_user_abort() function you can make your script finish everything fine and after you can check with register_shutdown_function() and connection_aborted() if the visitor cancelled the submission or lost his/her connection. If he/she did, you can set the order as not confirmed and when the visitor came back, you can present the old order again.<br />To prevent a double click of the submit button, you can disable it with javascript or in your script you can set a flag for that order, which will be recorded into the database. Before accept a new submission, the script will check if the same order was not placed before and reject it. This will work fine, as the script have finished the job before.<br />Note that if you use ob_start("callback_function") in the begin of your script, you can specify a callback function that will act like the shutdown function when our script ends and also will let you to work on the generated page before send it to the visitor.</span></code></div>
  </div>
 </div>
  <div class="note" id="82225">  <div class="votes">
    <div id="Vu82225">
    <a href="/manual/vote-note.php?id=82225&amp;page=features.connection-handling&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82225">
    <a href="/manual/vote-note.php?id=82225&amp;page=features.connection-handling&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82225" title="61% like this...">
    15
    </div>
  </div>
  <a href="#82225" class="name">
  <strong class="user"><em>Jean Charles MAMMANA</em></strong></a><a class="genanchor" href="#82225"> &para;</a><div class="date" title="2008-04-01 01:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82225">
<div class="phpcode"><code><span class="html">connection_status() return ABORTED state ONLY if the client disconnects gracefully (with STOP button). In this case the browser send the RST TCP packet that notify PHP the connection is closed.<br />But.... If the connection is stopped by networs troubles (wifi link down by exemple) the script doesn't know that the client is disconnected :(<br /><br />I've tried to use fopen("php://output") with stream_select() on writting to detect write locks (due to full buffer) but php give me this error : "cannot represent a stream of type Output as a select()able descriptor"<br /><br />So I don't know how to detect correctly network trouble connection...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=features.connection-handling&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.connection-handling.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="features.php">Features</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="features.http-auth.php" title="HTTP authentication with PHP">HTTP authentication with PHP</a>
                        </li>
                                                <li class="">
                            <a href="features.cookies.php" title="Cookies">Cookies</a>
                        </li>
                                                <li class="">
                            <a href="features.sessions.php" title="Sessions">Sessions</a>
                        </li>
                                                <li class="">
                            <a href="features.file-upload.php" title="Handling file uploads">Handling file uploads</a>
                        </li>
                                                <li class="">
                            <a href="features.remote-files.php" title="Using remote files">Using remote files</a>
                        </li>
                                                <li class="current">
                            <a href="features.connection-handling.php" title="Connection handling">Connection handling</a>
                        </li>
                                                <li class="">
                            <a href="features.persistent-connections.php" title="Persistent Database Connections">Persistent Database Connections</a>
                        </li>
                                                <li class="">
                            <a href="features.commandline.php" title="Command line usage">Command line usage</a>
                        </li>
                                                <li class="">
                            <a href="features.gc.php" title="Garbage Collection">Garbage Collection</a>
                        </li>
                                                <li class="">
                            <a href="features.dtrace.php" title="DTrace Dynamic Tracing">DTrace Dynamic Tracing</a>
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
