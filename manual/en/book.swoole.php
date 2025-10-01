<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Swoole - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.swoole.php">
 <link rel="shorturl" href="https://www.php.net/swoole">
 <link rel="alternate" href="https://www.php.net/swoole" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-wrapper-unregister.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.swoole.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.swoole.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.swoole.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.swoole.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.swoole.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.swoole.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.swoole.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.swoole.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.swoole.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.swoole.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.swoole.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.swoole.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Swoole" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Swoole - Manual" />
<meta name="twitter:description" content="Swoole" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Swoole - Manual" />
<meta itemprop="description" content="Swoole" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Swoole" />

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
        <a href="intro.swoole.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-wrapper-unregister.php">
          &laquo; stream_wrapper_unregister        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      </ul>
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
            <option value='en/book.swoole.php' selected="selected">English</option>
            <option value='de/book.swoole.php'>German</option>
            <option value='es/book.swoole.php'>Spanish</option>
            <option value='fr/book.swoole.php'>French</option>
            <option value='it/book.swoole.php'>Italian</option>
            <option value='ja/book.swoole.php'>Japanese</option>
            <option value='pt_BR/book.swoole.php'>Brazilian Portuguese</option>
            <option value='ru/book.swoole.php'>Russian</option>
            <option value='tr/book.swoole.php'>Turkish</option>
            <option value='uk/book.swoole.php'>Ukrainian</option>
            <option value='zh/book.swoole.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.swoole" class="book">
 
 <h1 class="title">Swoole</h1>
 
 
 
 
 
 
 




 




 

 




 






 






 






 






 






 






 






 






 
 
 
 
 






 






 






 






 






 






 






 






 






 






 






 






 






 






 






 
 






 






 






 







<ul class="chunklist chunklist_book"><li><a href="intro.swoole.php">Introduction</a></li><li><a href="swoole.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole.requirements.php">Requirements</a></li><li><a href="swoole.installation.php">Installation</a></li><li><a href="swoole.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="swoole.constants.php">Predefined Constants</a></li><li><a href="ref.swoole-funcs.php">Swoole Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.swoole-async-dns-lookup.php">swoole_async_dns_lookup</a> — Async and non-blocking hostname to IP lookup</li><li><a href="function.swoole-async-read.php">swoole_async_read</a> — Read file stream asynchronously</li><li><a href="function.swoole-async-readfile.php">swoole_async_readfile</a> — Read a file asynchronously</li><li><a href="function.swoole-async-set.php">swoole_async_set</a> — Update the async I/O options</li><li><a href="function.swoole-async-write.php">swoole_async_write</a> — Write data to a file stream asynchronously</li><li><a href="function.swoole-async-writefile.php">swoole_async_writefile</a> — Write data to a file asynchronously</li><li><a href="function.swoole-clear-error.php">swoole_clear_error</a> — Clear errors in the socket or on the last error code</li><li><a href="function.swoole-client-select.php">swoole_client_select</a> — Get the file description which are ready to read/write or error</li><li><a href="function.swoole-cpu-num.php">swoole_cpu_num</a> — Get the number of CPU</li><li><a href="function.swoole-errno.php">swoole_errno</a> — Get the error code of the latest system call</li><li><a href="function.swoole-error-log.php">swoole_error_log</a> — Output error messages to the log</li><li><a href="function.swoole-event-add.php">swoole_event_add</a> — Add new callback functions of a socket into the EventLoop</li><li><a href="function.swoole-event-defer.php">swoole_event_defer</a> — Add callback function to the next event loop</li><li><a href="function.swoole-event-del.php">swoole_event_del</a> — Remove all event callback functions of a socket</li><li><a href="function.swoole-event-exit.php">swoole_event_exit</a> — Exit the eventloop, only available at the client side</li><li><a href="function.swoole-event-set.php">swoole_event_set</a> — Update the event callback functions of a socket</li><li><a href="function.swoole-event-wait.php">swoole_event_wait</a> — Start the event loop</li><li><a href="function.swoole-event-write.php">swoole_event_write</a> — Write data to a socket</li><li><a href="function.swoole-get-local-ip.php">swoole_get_local_ip</a> — Get the IPv4 IP addresses of each NIC on the machine</li><li><a href="function.swoole-last-error.php">swoole_last_error</a> — Get the lastest error message</li><li><a href="function.swoole-load-module.php">swoole_load_module</a> — Load a swoole extension</li><li><a href="function.swoole-select.php">swoole_select</a> — Select the file descriptions which are ready to read/write or error in the eventloop</li><li><a href="function.swoole-set-process-name.php">swoole_set_process_name</a> — Set the process name</li><li><a href="function.swoole-strerror.php">swoole_strerror</a> — Convert the Errno into error messages</li><li><a href="function.swoole-timer-after.php">swoole_timer_after</a> — Trigger a one time callback function in the future</li><li><a href="function.swoole-timer-exists.php">swoole_timer_exists</a> — Check if a timer callback function is existed</li><li><a href="function.swoole-timer-tick.php">swoole_timer_tick</a> — Trigger a timer tick callback function by time interval</li><li><a href="function.swoole-version.php">swoole_version</a> — Get the version of Swoole</li></ul></li><li><a href="class.swoole-async.php">Swoole\Async</a> — The Swoole\Async class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-async.dnslookup.php">Swoole\Async::dnsLookup</a> — Async and non-blocking hostname to IP lookup.</li><li><a href="swoole-async.read.php">Swoole\Async::read</a> — Read file stream asynchronously.</li><li><a href="swoole-async.readfile.php">Swoole\Async::readFile</a> — Read a file asynchronously.</li><li><a href="swoole-async.set.php">Swoole\Async::set</a> — Update the async I/O options.</li><li><a href="swoole-async.write.php">Swoole\Async::write</a> — Write data to a file stream asynchronously.</li><li><a href="swoole-async.writefile.php">Swoole\Async::writeFile</a> — Description</li></ul></li><li><a href="class.swoole-atomic.php">Swoole\Atomic</a> — The Swoole\Atomic class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-atomic.add.php">Swoole\Atomic::add</a> — Add a number to the value to the atomic object.</li><li><a href="swoole-atomic.cmpset.php">Swoole\Atomic::cmpset</a> — Compare and set the value of the atomic object.</li><li><a href="swoole-atomic.construct.php">Swoole\Atomic::__construct</a> — Construct a swoole atomic object.</li><li><a href="swoole-atomic.get.php">Swoole\Atomic::get</a> — Get the current value of the atomic object.</li><li><a href="swoole-atomic.set.php">Swoole\Atomic::set</a> — Set a new value to the atomic object.</li><li><a href="swoole-atomic.sub.php">Swoole\Atomic::sub</a> — Subtract a number to the value of the atomic object.</li></ul></li><li><a href="class.swoole-buffer.php">Swoole\Buffer</a> — The Swoole\Buffer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-buffer.append.php">Swoole\Buffer::append</a> — Append the string or binary data at the end of the memory buffer and return the new size of memory allocated.</li><li><a href="swoole-buffer.clear.php">Swoole\Buffer::clear</a> — Reset the memory buffer.</li><li><a href="swoole-buffer.construct.php">Swoole\Buffer::__construct</a> — Fixed size memory blocks allocation.</li><li><a href="swoole-buffer.destruct.php">Swoole\Buffer::__destruct</a> — Destruct the Swoole memory buffer.</li><li><a href="swoole-buffer.expand.php">Swoole\Buffer::expand</a> — Expand the size of memory buffer.</li><li><a href="swoole-buffer.read.php">Swoole\Buffer::read</a> — Read data from the memory buffer based on offset and length.</li><li><a href="swoole-buffer.recycle.php">Swoole\Buffer::recycle</a> — Release the memory to OS which is not used by the memory buffer.</li><li><a href="swoole-buffer.substr.php">Swoole\Buffer::substr</a> — Read data from the memory buffer based on offset and length. Or remove data from the memory buffer.</li><li><a href="swoole-buffer.tostring.php">Swoole\Buffer::__toString</a> — Get the string value of the memory buffer.</li><li><a href="swoole-buffer.write.php">Swoole\Buffer::write</a> — Write data to the memory buffer. The memory allocated for the buffer will not be changed.</li></ul></li><li><a href="class.swoole-channel.php">Swoole\Channel</a> — The Swoole\Channel class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-channel.construct.php">Swoole\Channel::__construct</a> — Construct a Swoole Channel</li><li><a href="swoole-channel.destruct.php">Swoole\Channel::__destruct</a> — Destruct a Swoole channel.</li><li><a href="swoole-channel.pop.php">Swoole\Channel::pop</a> — Read and pop data from swoole channel.</li><li><a href="swoole-channel.push.php">Swoole\Channel::push</a> — Write and push data into Swoole channel.</li><li><a href="swoole-channel.stats.php">Swoole\Channel::stats</a> — Get stats of swoole channel.</li></ul></li><li><a href="class.swoole-client.php">Swoole\Client</a> — The Swoole\Client class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-client.close.php">Swoole\Client::close</a> — Close the connection established.</li><li><a href="swoole-client.connect.php">Swoole\Client::connect</a> — Connect to the remote TCP or UDP port.</li><li><a href="swoole-client.construct.php">Swoole\Client::__construct</a> — Create Swoole sync or async TCP/UDP client, with or without SSL.</li><li><a href="swoole-client.destruct.php">Swoole\Client::__destruct</a> — Destruct the Swoole client.</li><li><a href="swoole-client.getpeername.php">Swoole\Client::getpeername</a> — Get the remote socket name of the connection.</li><li><a href="swoole-client.getsockname.php">Swoole\Client::getsockname</a> — Get the local socket name of the connection.</li><li><a href="swoole-client.isconnected.php">Swoole\Client::isConnected</a> — Check if the connection is established.</li><li><a href="swoole-client.on.php">Swoole\Client::on</a> — Add callback functions triggered by events.</li><li><a href="swoole-client.pause.php">Swoole\Client::pause</a> — Pause receiving data.</li><li><a href="swoole-client.pipe.php">Swoole\Client::pipe</a> — Redirect the data to another file descriptor.</li><li><a href="swoole-client.recv.php">Swoole\Client::recv</a> — Receive data from the remote socket.</li><li><a href="swoole-client.resume.php">Swoole\Client::resume</a> — Resume receiving data.</li><li><a href="swoole-client.send.php">Swoole\Client::send</a> — Send data to the remote TCP socket.</li><li><a href="swoole-client.sendfile.php">Swoole\Client::sendfile</a> — Send file to the remote TCP socket.</li><li><a href="swoole-client.sendto.php">Swoole\Client::sendto</a> — Send data to the remote UDP address.</li><li><a href="swoole-client.set.php">Swoole\Client::set</a> — Set the Swoole client parameters before the connection is established.</li><li><a href="swoole-client.sleep.php">Swoole\Client::sleep</a> — Remove the TCP client from system event loop.</li><li><a href="swoole-client.wakeup.php">Swoole\Client::wakeup</a> — Add the TCP client back into the system event loop.</li></ul></li><li><a href="class.swoole-connection-iterator.php">Swoole\Connection\Iterator</a> — The Swoole\Connection\Iterator class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-connection-iterator.count.php">Swoole\Connection\Iterator::count</a> — Count connections.</li><li><a href="swoole-connection-iterator.current.php">Swoole\Connection\Iterator::current</a> — Return current connection entry.</li><li><a href="swoole-connection-iterator.key.php">Swoole\Connection\Iterator::key</a> — Return key of the current connection.</li><li><a href="swoole-connection-iterator.next.php">Swoole\Connection\Iterator::next</a> — Move to the next connection.</li><li><a href="swoole-connection-iterator.offsetexists.php">Swoole\Connection\Iterator::offsetExists</a> — Check if offset exists.</li><li><a href="swoole-connection-iterator.offsetget.php">Swoole\Connection\Iterator::offsetGet</a> — Offset to retrieve.</li><li><a href="swoole-connection-iterator.offsetset.php">Swoole\Connection\Iterator::offsetSet</a> — Assign a Connection to the specified offset.</li><li><a href="swoole-connection-iterator.offsetunset.php">Swoole\Connection\Iterator::offsetUnset</a> — Unset an offset.</li><li><a href="swoole-connection-iterator.rewind.php">Swoole\Connection\Iterator::rewind</a> — Rewinds iterator</li><li><a href="swoole-connection-iterator.valid.php">Swoole\Connection\Iterator::valid</a> — Check if current position is valid.</li></ul></li><li><a href="class.swoole-coroutine.php">Swoole\Coroutine</a> — The Swoole\Coroutine class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-coroutine.call-user-func.php">Swoole\Coroutine::call_user_func</a> — Call a callback given by the first parameter</li><li><a href="swoole-coroutine.call-user-func-array.php">Swoole\Coroutine::call_user_func_array</a> — Call a callback with an array of parameters</li><li><a href="swoole-coroutine.cli-wait.php">Swoole\Coroutine::cli_wait</a> — Description</li><li><a href="swoole-coroutine.create.php">Swoole\Coroutine::create</a> — Description</li><li><a href="swoole-coroutine.getuid.php">Swoole\Coroutine::getuid</a> — Description</li><li><a href="swoole-coroutine.resume.php">Swoole\Coroutine::resume</a> — Description</li><li><a href="swoole-coroutine.suspend.php">Swoole\Coroutine::suspend</a> — Description</li></ul></li><li><a href="class.swoole-coroutine-lock.php">Swoole\Coroutine\Lock</a> — The Swoole\Coroutine\Lock class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-coroutine-lock.construct.php">Swoole\Coroutine\Lock::__construct</a> — Construct a new coroutine lock</li><li><a href="swoole-coroutine-lock.lock.php">Swoole\Coroutine\Lock::lock</a> — Acquire the lock, blocking if necessary</li><li><a href="swoole-coroutine-lock.trylock.php">Swoole\Coroutine\Lock::trylock</a> — Attempt to acquire the lock without blocking</li><li><a href="swoole-coroutine-lock.unlock.php">Swoole\Coroutine\Lock::unlock</a> — Release the lock</li></ul></li><li><a href="class.swoole-event.php">Swoole\Event</a> — The Swoole\Event class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-event.add.php">Swoole\Event::add</a> — Add new callback functions of a socket into the EventLoop.</li><li><a href="swoole-event.defer.php">Swoole\Event::defer</a> — Add a callback function to the next event loop.</li><li><a href="swoole-event.del.php">Swoole\Event::del</a> — Remove all event callback functions of a socket.</li><li><a href="swoole-event.exit.php">Swoole\Event::exit</a> — Exit the eventloop, only available at client side.</li><li><a href="swoole-event.set.php">Swoole\Event::set</a> — Update the event callback functions of a socket.</li><li><a href="swoole-event.wait.php">Swoole\Event::wait</a> — Description</li><li><a href="swoole-event.write.php">Swoole\Event::write</a> — Write data to the socket.</li></ul></li><li><a href="class.swoole-exception.php">Swoole\Exception</a> — The Swoole\Exception class</li><li><a href="class.swoole-http-client.php">Swoole\Http\Client</a> — The Swoole\Http\Client class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-http-client.addfile.php">Swoole\Http\Client::addFile</a> — Add a file to the post form.</li><li><a href="swoole-http-client.close.php">Swoole\Http\Client::close</a> — Close the http connection.</li><li><a href="swoole-http-client.construct.php">Swoole\Http\Client::__construct</a> — Construct the async HTTP client.</li><li><a href="swoole-http-client.destruct.php">Swoole\Http\Client::__destruct</a> — Destruct the HTTP client.</li><li><a href="swoole-http-client.download.php">Swoole\Http\Client::download</a> — Download a file from the remote server.</li><li><a href="swoole-http-client.execute.php">Swoole\Http\Client::execute</a> — Send the HTTP request after setting the parameters.</li><li><a href="swoole-http-client.get.php">Swoole\Http\Client::get</a> — Send GET http request to the remote server.</li><li><a href="swoole-http-client.isconnected.php">Swoole\Http\Client::isConnected</a> — Check if the HTTP connection is connected.</li><li><a href="swoole-http-client.on.php">Swoole\Http\Client::on</a> — Register callback function by event name.</li><li><a href="swoole-http-client.post.php">Swoole\Http\Client::post</a> — Send POST http request to the remote server.</li><li><a href="swoole-http-client.push.php">Swoole\Http\Client::push</a> — Push data to websocket client.</li><li><a href="swoole-http-client.set.php">Swoole\Http\Client::set</a> — Update the HTTP client parameters.</li><li><a href="swoole-http-client.setcookies.php">Swoole\Http\Client::setCookies</a> — Set the http request cookies.</li><li><a href="swoole-http-client.setdata.php">Swoole\Http\Client::setData</a> — Set the HTTP request body data.</li><li><a href="swoole-http-client.setheaders.php">Swoole\Http\Client::setHeaders</a> — Set the HTTP request headers.</li><li><a href="swoole-http-client.setmethod.php">Swoole\Http\Client::setMethod</a> — Set the HTTP request method.</li><li><a href="swoole-http-client.upgrade.php">Swoole\Http\Client::upgrade</a> — Upgrade to websocket protocol.</li></ul></li><li><a href="class.swoole-http-request.php">Swoole\Http\Request</a> — The Swoole\Http\Request class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-http-request.destruct.php">Swoole\Http\Request::__destruct</a> — Destruct the HTTP request.</li><li><a href="swoole-http-request.rawcontent.php">Swoole\Http\Request::rawcontent</a> — Get the raw HTTP POST body.</li></ul></li><li><a href="class.swoole-http-response.php">Swoole\Http\Response</a> — The Swoole\Http\Response class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-http-response.cookie.php">Swoole\Http\Response::cookie</a> — Set the cookies of the HTTP response.</li><li><a href="swoole-http-response.destruct.php">Swoole\Http\Response::__destruct</a> — Destruct the HTTP response.</li><li><a href="swoole-http-response.end.php">Swoole\Http\Response::end</a> — Send data for the HTTP request and finish the response.</li><li><a href="swoole-http-response.gzip.php">Swoole\Http\Response::gzip</a> — Enable the gzip of response content.</li><li><a href="swoole-http-response.header.php">Swoole\Http\Response::header</a> — Set the HTTP response headers.</li><li><a href="swoole-http-response.initheader.php">Swoole\Http\Response::initHeader</a> — Init the HTTP response header.</li><li><a href="swoole-http-response.rawcookie.php">Swoole\Http\Response::rawcookie</a> — Set the raw cookies to the HTTP response.</li><li><a href="swoole-http-response.sendfile.php">Swoole\Http\Response::sendfile</a> — Send file through the HTTP response.</li><li><a href="swoole-http-response.status.php">Swoole\Http\Response::status</a> — Set the status code of the HTTP response.</li><li><a href="swoole-http-response.write.php">Swoole\Http\Response::write</a> — Append HTTP body content to the HTTP response.</li></ul></li><li><a href="class.swoole-http-server.php">Swoole\Http\Server</a> — The Swoole\Http\Server class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-http-server.on.php">Swoole\Http\Server::on</a> — Bind callback function to HTTP server by event name.</li><li><a href="swoole-http-server.start.php">Swoole\Http\Server::start</a> — Start the swoole http server.</li></ul></li><li><a href="class.swoole-lock.php">Swoole\Lock</a> — The Swoole\Lock class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-lock.construct.php">Swoole\Lock::__construct</a> — Construct a memory lock.</li><li><a href="swoole-lock.destruct.php">Swoole\Lock::__destruct</a> — Destroy a Swoole memory lock.</li><li><a href="swoole-lock.lock.php">Swoole\Lock::lock</a> — Try to acquire the lock. It will block if the lock is not available.</li><li><a href="swoole-lock.lock-read.php">Swoole\Lock::lock_read</a> — Lock a read-write lock for reading.</li><li><a href="swoole-lock.trylock.php">Swoole\Lock::trylock</a> — Try to acquire the lock and return straight away even the lock is not available.</li><li><a href="swoole-lock.trylock-read.php">Swoole\Lock::trylock_read</a> — Try to lock a read-write lock for reading and return straight away even the lock is not available.</li><li><a href="swoole-lock.unlock.php">Swoole\Lock::unlock</a> — Release the lock.</li></ul></li><li><a href="class.swoole-mmap.php">Swoole\Mmap</a> — The Swoole\Mmap class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-mmap.open.php">Swoole\Mmap::open</a> — Map a file into memory and return the stream resource which can be used by PHP stream operations.</li></ul></li><li><a href="class.swoole-mysql.php">Swoole\MySQL</a> — The Swoole\MySQL class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-mysql.close.php">Swoole\MySQL::close</a> — Close the async MySQL connection.</li><li><a href="swoole-mysql.connect.php">Swoole\MySQL::connect</a> — Connect to the remote MySQL server.</li><li><a href="swoole-mysql.construct.php">Swoole\MySQL::__construct</a> — Construct an async MySQL client.</li><li><a href="swoole-mysql.destruct.php">Swoole\MySQL::__destruct</a> — Destroy the async MySQL client.</li><li><a href="swoole-mysql.getbuffer.php">Swoole\MySQL::getBuffer</a> — Description</li><li><a href="swoole-mysql.on.php">Swoole\MySQL::on</a> — Register callback function based on event name.</li><li><a href="swoole-mysql.query.php">Swoole\MySQL::query</a> — Run the SQL query.</li></ul></li><li><a href="class.swoole-mysql-exception.php">Swoole\MySQL\Exception</a> — The Swoole\MySQL\Exception class</li><li><a href="class.swoole-process.php">Swoole\Process</a> — The Swoole\Process class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-process.alarm.php">Swoole\Process::alarm</a> — High precision timer which triggers signal with fixed interval.</li><li><a href="swoole-process.close.php">Swoole\Process::close</a> — Close the pipe to the child process.</li><li><a href="swoole-process.construct.php">Swoole\Process::__construct</a> — Construct a process.</li><li><a href="swoole-process.daemon.php">Swoole\Process::daemon</a> — Change the process to be a daemon process.</li><li><a href="swoole-process.destruct.php">Swoole\Process::__destruct</a> — Destroy the process.</li><li><a href="swoole-process.exec.php">Swoole\Process::exec</a> — Execute system commands.</li><li><a href="swoole-process.exit.php">Swoole\Process::exit</a> — Stop the child processes.</li><li><a href="swoole-process.freequeue.php">Swoole\Process::freeQueue</a> — Destroy the message queue created by swoole_process::useQueue.</li><li><a href="swoole-process.kill.php">Swoole\Process::kill</a> — Send signal to the child process.</li><li><a href="swoole-process.name.php">Swoole\Process::name</a> — Set name of the process.</li><li><a href="swoole-process.pop.php">Swoole\Process::pop</a> — Read and pop data from the message queue.</li><li><a href="swoole-process.push.php">Swoole\Process::push</a> — Write and push data into the message queue.</li><li><a href="swoole-process.read.php">Swoole\Process::read</a> — Read data sending to the process.</li><li><a href="swoole-process.signal.php">Swoole\Process::signal</a> — Send signal to the child processes.</li><li><a href="swoole-process.start.php">Swoole\Process::start</a> — Start the process.</li><li><a href="swoole-process.statqueue.php">Swoole\Process::statQueue</a> — Get the stats of the message queue used as the communication method between processes.</li><li><a href="swoole-process.usequeue.php">Swoole\Process::useQueue</a> — Create a message queue as the communication method between the parent process and child processes.</li><li><a href="swoole-process.wait.php">Swoole\Process::wait</a> — Wait for the events of child processes.</li><li><a href="swoole-process.write.php">Swoole\Process::write</a> — Write data into the pipe and communicate with the parent process or child processes.</li></ul></li><li><a href="class.swoole-redis-server.php">Swoole\Redis\Server</a> — The Swoole\Redis\Server class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-redis-server.format.php">Swoole\Redis\Server::format</a> — Description</li><li><a href="swoole-redis-server.sethandler.php">Swoole\Redis\Server::setHandler</a> — Description</li><li><a href="swoole-redis-server.start.php">Swoole\Redis\Server::start</a> — Description</li></ul></li><li><a href="class.swoole-runtime.php">Swoole\Runtime</a> — The Swoole\Runtime class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-runtime.enable-coroutine.php">Swoole\Runtime::enableCoroutine</a> — Enable coroutine for specified functions</li><li><a href="swoole-runtime.get-hook-flags.php">Swoole\Runtime::getHookFlags</a> — Get current hook flags</li><li><a href="swoole-runtime.set-hook-flags.php">Swoole\Runtime::setHookFlags</a> — Set hook flags for coroutine</li></ul></li><li><a href="class.swoole-serialize.php">Swoole\Serialize</a> — The Swoole\Serialize class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-serialize.pack.php">Swoole\Serialize::pack</a> — Serialize the data.</li><li><a href="swoole-serialize.unpack.php">Swoole\Serialize::unpack</a> — Unserialize the data.</li></ul></li><li><a href="class.swoole-server.php">Swoole\Server</a> — The Swoole\Server class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-server.addlistener.php">Swoole\Server::addlistener</a> — Add a new listener to the server.</li><li><a href="swoole-server.addprocess.php">Swoole\Server::addProcess</a> — Add a user defined swoole_process to the server.</li><li><a href="swoole-server.after.php">Swoole\Server::after</a> — Trigger a callback function after a period of time.</li><li><a href="swoole-server.bind.php">Swoole\Server::bind</a> — Bind the connection to a user defined user ID.</li><li><a href="swoole-server.cleartimer.php">Swoole\Server::clearTimer</a> — Stop and destroy a timer.</li><li><a href="swoole-server.close.php">Swoole\Server::close</a> — Close a connection to the client.</li><li><a href="swoole-server.confirm.php">Swoole\Server::confirm</a> — Check status of the connection.</li><li><a href="swoole-server.connection-info.php">Swoole\Server::connection_info</a> — Get the connection info by file description.</li><li><a href="swoole-server.connection-list.php">Swoole\Server::connection_list</a> — Get all of the established connections.</li><li><a href="swoole-server.construct.php">Swoole\Server::__construct</a> — Construct a Swoole server.</li><li><a href="swoole-server.defer.php">Swoole\Server::defer</a> — Delay execution of the callback function at the end of current EventLoop.</li><li><a href="swoole-server.exist.php">Swoole\Server::exist</a> — Check if the connection is existed.</li><li><a href="swoole-server.finish.php">Swoole\Server::finish</a> — Used in task process for sending result to the worker process when the task is finished.</li><li><a href="swoole-server.getclientinfo.php">Swoole\Server::getClientInfo</a> — Get the connection info by file description.</li><li><a href="swoole-server.getclientlist.php">Swoole\Server::getClientList</a> — Get all of the established connections.</li><li><a href="swoole-server.getlasterror.php">Swoole\Server::getLastError</a> — Get the error code of the most recent error.</li><li><a href="swoole-server.heartbeat.php">Swoole\Server::heartbeat</a> — Check all the connections on the server.</li><li><a href="swoole-server.listen.php">Swoole\Server::listen</a> — Listen on the given IP and port, socket type.</li><li><a href="swoole-server.on.php">Swoole\Server::on</a> — Register a callback function by event name.</li><li><a href="swoole-server.pause.php">Swoole\Server::pause</a> — Stop receiving data from the connection.</li><li><a href="swoole-server.protect.php">Swoole\Server::protect</a> — Set the connection to be protected mode.</li><li><a href="swoole-server.reload.php">Swoole\Server::reload</a> — Restart all the worker process.</li><li><a href="swoole-server.resume.php">Swoole\Server::resume</a> — Start receiving data from the connection.</li><li><a href="swoole-server.send.php">Swoole\Server::send</a> — Send data to the client.</li><li><a href="swoole-server.sendfile.php">Swoole\Server::sendfile</a> — Send file to the connection.</li><li><a href="swoole-server.sendmessage.php">Swoole\Server::sendMessage</a> — Send message to worker processes by ID.</li><li><a href="swoole-server.sendto.php">Swoole\Server::sendto</a> — Send data to the remote UDP address.</li><li><a href="swoole-server.sendwait.php">Swoole\Server::sendwait</a> — Send data to the remote socket in the blocking way.</li><li><a href="swoole-server.set.php">Swoole\Server::set</a> — Set the runtime settings of the swoole server.</li><li><a href="swoole-server.shutdown.php">Swoole\Server::shutdown</a> — Shutdown the master server process, this function can be called in worker processes.</li><li><a href="swoole-server.start.php">Swoole\Server::start</a> — Start the Swoole server.</li><li><a href="swoole-server.stats.php">Swoole\Server::stats</a> — Get the stats of the Swoole server.</li><li><a href="swoole-server.stop.php">Swoole\Server::stop</a> — Stop the Swoole server.</li><li><a href="swoole-server.task.php">Swoole\Server::task</a> — Send data to the task worker processes.</li><li><a href="swoole-server.taskwait.php">Swoole\Server::taskwait</a> — Send data to the task worker processes in blocking way.</li><li><a href="swoole-server.taskwaitmulti.php">Swoole\Server::taskWaitMulti</a> — Execute multiple tasks concurrently.</li><li><a href="swoole-server.tick.php">Swoole\Server::tick</a> — Repeats a given function at every given time-interval.</li></ul></li><li><a href="class.swoole-table.php">Swoole\Table</a> — The Swoole\Table class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-table.column.php">Swoole\Table::column</a> — Set the data type and size of the columns.</li><li><a href="swoole-table.construct.php">Swoole\Table::__construct</a> — Construct a Swoole memory table with fixed size.</li><li><a href="swoole-table.count.php">Swoole\Table::count</a> — Count the rows in the table, or count all the elements in the table if $mode = 1.</li><li><a href="swoole-table.create.php">Swoole\Table::create</a> — Create the swoole memory table.</li><li><a href="swoole-table.current.php">Swoole\Table::current</a> — Get the current row.</li><li><a href="swoole-table.decr.php">Swoole\Table::decr</a> — Decrement the value in the Swoole table by $key and $column</li><li><a href="swoole-table.del.php">Swoole\Table::del</a> — Delete a row in the Swoole table by $key</li><li><a href="swoole-table.destroy.php">Swoole\Table::destroy</a> — Destroy the Swoole table.</li><li><a href="swoole-table.exist.php">Swoole\Table::exist</a> — Check if a row is existed by $row_key.</li><li><a href="swoole-table.get.php">Swoole\Table::get</a> — Get the value in the Swoole table by $key and $field.</li><li><a href="swoole-table.incr.php">Swoole\Table::incr</a> — Increment the value by $key and $column</li><li><a href="swoole-table.key.php">Swoole\Table::key</a> — Get the key of current row.</li><li><a href="swoole-table.next.php">Swoole\Table::next</a> — Iterator the next row</li><li><a href="swoole-table.rewind.php">Swoole\Table::rewind</a> — Rewind the iterator.</li><li><a href="swoole-table.set.php">Swoole\Table::set</a> — Update a row of the table by $key.</li><li><a href="swoole-table.valid.php">Swoole\Table::valid</a> — Check if the current row is valid.</li></ul></li><li><a href="class.swoole-timer.php">Swoole\Timer</a> — The Swoole\Timer class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-timer.after.php">Swoole\Timer::after</a> — Trigger a callback function after a period of time.</li><li><a href="swoole-timer.clear.php">Swoole\Timer::clear</a> — Delete a timer by timer ID.</li><li><a href="swoole-timer.exists.php">Swoole\Timer::exists</a> — Check if a timer is existed.</li><li><a href="swoole-timer.tick.php">Swoole\Timer::tick</a> — Repeats a given function at every given time-interval.</li></ul></li><li><a href="class.swoole-websocket-frame.php">Swoole\WebSocket\Frame</a> — The Swoole\WebSocket\Frame class</li><li><a href="class.swoole-websocket-server.php">Swoole\WebSocket\Server</a> — The Swoole\WebSocket\Server class<ul class="chunklist chunklist_book chunklist_children"><li><a href="swoole-websocket-server.exist.php">Swoole\WebSocket\Server::exist</a> — Check if the file descriptor exists.</li><li><a href="swoole-websocket-server.on.php">Swoole\WebSocket\Server::on</a> — Register event callback function</li><li><a href="swoole-websocket-server.pack.php">Swoole\WebSocket\Server::pack</a> — Get a pack of binary data to send in a single frame.</li><li><a href="swoole-websocket-server.push.php">Swoole\WebSocket\Server::push</a> — Push data to the remote client.</li><li><a href="swoole-websocket-server.unpack.php">Swoole\WebSocket\Server::unpack</a> — Unpack the binary data received from the client.</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/swoole/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.swoole%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.swoole&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.swoole.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.basic.other.php">Other Basic Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.geoip.php" title="GeoIP">GeoIP</a>
                        </li>
                                                <li class="">
                            <a href="book.fann.php" title="FANN">FANN</a>
                        </li>
                                                <li class="">
                            <a href="book.igbinary.php" title="Igbinary">Igbinary</a>
                        </li>
                                                <li class="">
                            <a href="book.json.php" title="JSON">JSON</a>
                        </li>
                                                <li class="">
                            <a href="book.simdjson.php" title="Simdjson">Simdjson</a>
                        </li>
                                                <li class="">
                            <a href="book.lua.php" title="Lua">Lua</a>
                        </li>
                                                <li class="">
                            <a href="book.luasandbox.php" title="LuaSandbox">LuaSandbox</a>
                        </li>
                                                <li class="">
                            <a href="book.misc.php" title="Misc.">Misc.</a>
                        </li>
                                                <li class="">
                            <a href="book.random.php" title="Random">Random</a>
                        </li>
                                                <li class="">
                            <a href="book.seaslog.php" title="Seaslog">Seaslog</a>
                        </li>
                                                <li class="">
                            <a href="book.spl.php" title="SPL">SPL</a>
                        </li>
                                                <li class="">
                            <a href="book.stream.php" title="Streams">Streams</a>
                        </li>
                                                <li class="current">
                            <a href="book.swoole.php" title="Swoole">Swoole</a>
                        </li>
                                                <li class="">
                            <a href="book.tidy.php" title="Tidy">Tidy</a>
                        </li>
                                                <li class="">
                            <a href="book.tokenizer.php" title="Tokenizer">Tokenizer</a>
                        </li>
                                                <li class="">
                            <a href="book.url.php" title="URLs">URLs</a>
                        </li>
                                                <li class="">
                            <a href="book.v8js.php" title="V8js">V8js</a>
                        </li>
                                                <li class="">
                            <a href="book.yaml.php" title="Yaml">Yaml</a>
                        </li>
                                                <li class="">
                            <a href="book.yaf.php" title="Yaf">Yaf</a>
                        </li>
                                                <li class="">
                            <a href="book.yaconf.php" title="Yaconf">Yaconf</a>
                        </li>
                                                <li class="">
                            <a href="book.taint.php" title="Taint">Taint</a>
                        </li>
                                                <li class="">
                            <a href="book.ds.php" title="Data Structures">Data Structures</a>
                        </li>
                                                <li class="">
                            <a href="book.var_representation.php" title="var_&#8203;representation">var_&#8203;representation</a>
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
