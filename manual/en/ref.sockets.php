<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Socket Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="shorturl" href="https://www.php.net/sockets">
 <link rel="alternate" href="https://www.php.net/sockets" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/sockets.errors.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-accept.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.sockets.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.sockets.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.sockets.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.sockets.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.sockets.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.sockets.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.sockets.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.sockets.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.sockets.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.sockets.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.sockets.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Socket Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Socket Functions - Manual" />
<meta name="twitter:description" content="Socket Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Socket Functions - Manual" />
<meta itemprop="description" content="Socket Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Socket Functions" />

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
        <a href="function.socket-accept.php">
          socket_accept &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sockets.errors.php">
          &laquo; Socket Errors        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.sockets.php'>Sockets</a></li>      </ul>
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
            <option value='en/ref.sockets.php' selected="selected">English</option>
            <option value='de/ref.sockets.php'>German</option>
            <option value='es/ref.sockets.php'>Spanish</option>
            <option value='fr/ref.sockets.php'>French</option>
            <option value='it/ref.sockets.php'>Italian</option>
            <option value='ja/ref.sockets.php'>Japanese</option>
            <option value='pt_BR/ref.sockets.php'>Brazilian Portuguese</option>
            <option value='ru/ref.sockets.php'>Russian</option>
            <option value='tr/ref.sockets.php'>Turkish</option>
            <option value='uk/ref.sockets.php'>Ukrainian</option>
            <option value='zh/ref.sockets.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.sockets" class="reference">
 <h1 class="title">Socket Functions</h1>

 














































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.socket-accept.php">socket_accept</a> — Accepts a connection on a socket</li><li><a href="function.socket-addrinfo-bind.php">socket_addrinfo_bind</a> — Create and bind to a socket from a given addrinfo</li><li><a href="function.socket-addrinfo-connect.php">socket_addrinfo_connect</a> — Create and connect to a socket from a given addrinfo</li><li><a href="function.socket-addrinfo-explain.php">socket_addrinfo_explain</a> — Get information about addrinfo</li><li><a href="function.socket-addrinfo-lookup.php">socket_addrinfo_lookup</a> — Get array with contents of getaddrinfo about the given hostname</li><li><a href="function.socket-atmark.php">socket_atmark</a> — Determines whether socket is at out-of-band mark</li><li><a href="function.socket-bind.php">socket_bind</a> — Binds a name to a socket</li><li><a href="function.socket-clear-error.php">socket_clear_error</a> — Clears the error on the socket or the last error code</li><li><a href="function.socket-close.php">socket_close</a> — Closes a Socket instance</li><li><a href="function.socket-cmsg-space.php">socket_cmsg_space</a> — Calculate message buffer size</li><li><a href="function.socket-connect.php">socket_connect</a> — Initiates a connection on a socket</li><li><a href="function.socket-create.php">socket_create</a> — Create a socket (endpoint for communication)</li><li><a href="function.socket-create-listen.php">socket_create_listen</a> — Opens a socket on port to accept connections</li><li><a href="function.socket-create-pair.php">socket_create_pair</a> — Creates a pair of indistinguishable sockets and stores them in an array</li><li><a href="function.socket-export-stream.php">socket_export_stream</a> — Export a socket into a stream that encapsulates a socket</li><li><a href="function.socket-get-option.php">socket_get_option</a> — Gets socket options for the socket</li><li><a href="function.socket-getopt.php">socket_getopt</a> — Alias of socket_get_option</li><li><a href="function.socket-getpeername.php">socket_getpeername</a> — Queries the remote side of the given socket</li><li><a href="function.socket-getsockname.php">socket_getsockname</a> — Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type</li><li><a href="function.socket-import-stream.php">socket_import_stream</a> — Import a stream</li><li><a href="function.socket-last-error.php">socket_last_error</a> — Returns the last error on the socket</li><li><a href="function.socket-listen.php">socket_listen</a> — Listens for a connection on a socket</li><li><a href="function.socket-read.php">socket_read</a> — Reads a maximum of length bytes from a socket</li><li><a href="function.socket-recv.php">socket_recv</a> — Receives data from a connected socket</li><li><a href="function.socket-recvfrom.php">socket_recvfrom</a> — Receives data from a socket whether or not it is connection-oriented</li><li><a href="function.socket-recvmsg.php">socket_recvmsg</a> — Read a message</li><li><a href="function.socket-select.php">socket_select</a> — Runs the select() system call on the given arrays of sockets with a specified timeout</li><li><a href="function.socket-send.php">socket_send</a> — Sends data to a connected socket</li><li><a href="function.socket-sendmsg.php">socket_sendmsg</a> — Send a message</li><li><a href="function.socket-sendto.php">socket_sendto</a> — Sends a message to a socket, whether it is connected or not</li><li><a href="function.socket-set-block.php">socket_set_block</a> — Sets blocking mode on a socket</li><li><a href="function.socket-set-nonblock.php">socket_set_nonblock</a> — Sets nonblocking mode for file descriptor fd</li><li><a href="function.socket-set-option.php">socket_set_option</a> — Sets socket options for the socket</li><li><a href="function.socket-setopt.php">socket_setopt</a> — Alias of socket_set_option</li><li><a href="function.socket-shutdown.php">socket_shutdown</a> — Shuts down a socket for receiving, sending, or both</li><li><a href="function.socket-strerror.php">socket_strerror</a> — Return a string describing a socket error</li><li><a href="function.socket-write.php">socket_write</a> — Write to a socket</li><li><a href="function.socket-wsaprotocol-info-export.php">socket_wsaprotocol_info_export</a> — Exports the WSAPROTOCOL_INFO Structure</li><li><a href="function.socket-wsaprotocol-info-import.php">socket_wsaprotocol_info_import</a> — Imports a Socket from another Process</li><li><a href="function.socket-wsaprotocol-info-release.php">socket_wsaprotocol_info_release</a> — Releases an exported WSAPROTOCOL_INFO Structure</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.sockets%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.sockets&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.sockets.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105735">  <div class="votes">
    <div id="Vu105735">
    <a href="/manual/vote-note.php?id=105735&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105735">
    <a href="/manual/vote-note.php?id=105735&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105735" title="55% like this...">
    15
    </div>
  </div>
  <a href="#105735" class="name">
  <strong class="user"><em>paul dot hodel at gmail dot com</em></strong></a><a class="genanchor" href="#105735"> &para;</a><div class="date" title="2011-09-10 04:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105735">
<div class="phpcode"><code><span class="html">After many non-sleep nights I got the most simple multi-client server written in PHP that really works. Ctrl+C and Ctrl+V... use as command line to test it. Enjoy it.
<br />
<br /><span class="default">&lt;?php
<br />
<br />ini_set</span><span class="keyword">(</span><span class="string">'error_reporting'</span><span class="keyword">, </span><span class="default">E_ALL </span><span class="keyword">^ </span><span class="default">E_NOTICE</span><span class="keyword">);
<br /></span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Set time limit to indefinite execution
<br /></span><span class="default">set_time_limit </span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Set the ip and port we will listen on
<br /></span><span class="default">$address </span><span class="keyword">= </span><span class="string">'10.203.9.67'</span><span class="keyword">;
<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">6901</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Create a TCP Stream socket
<br /></span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Bind the socket to an address/port
<br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">) or die(</span><span class="string">'Could not bind to address'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Start listening for connections
<br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Non block socket type
<br /></span><span class="default">socket_set_nonblock</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Loop continuously
<br /></span><span class="keyword">while (</span><span class="default">true</span><span class="keyword">)
<br />{
<br />    unset(</span><span class="default">$read</span><span class="keyword">);
<br />
<br />    </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">))
<br />    {
<br />        foreach (</span><span class="default">$client </span><span class="keyword">AS </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$read</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$v</span><span class="keyword">;
<br />
<br />            </span><span class="default">$j</span><span class="keyword">++;
<br />        }
<br />    }
<br />
<br />    </span><span class="default">$client </span><span class="keyword">= </span><span class="default">$read</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$newsock </span><span class="keyword">= @</span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">))
<br />    {
<br />        if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$newsock</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsock</span><span class="keyword">, </span><span class="string">"</span><span class="default">$j</span><span class="string">&gt;"</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />            
<br />            echo </span><span class="string">"New client connected </span><span class="default">$j</span><span class="string">"</span><span class="keyword">;
<br />
<br />            </span><span class="default">$client</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$newsock</span><span class="keyword">;
<br />
<br />            </span><span class="default">$j</span><span class="keyword">++;
<br />        }
<br />    }
<br />
<br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">))
<br />    {
<br />        foreach (</span><span class="default">$client </span><span class="keyword">AS </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)
<br />        {
<br />            if (@</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">MSG_DONTWAIT</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">)
<br />            {
<br />                unset(</span><span class="default">$client</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);
<br />
<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);
<br />            }
<br />            else
<br />            {
<br />                if (</span><span class="default">$string</span><span class="keyword">)
<br />                {
<br />                    echo </span><span class="string">"</span><span class="default">$k</span><span class="string">: </span><span class="default">$string</span><span class="string">\n"</span><span class="keyword">;
<br />                }
<br />            }
<br />        }
<br />    }
<br />
<br />    </span><span class="comment">//echo ".";
<br />
<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// Close the master sockets
<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56061">  <div class="votes">
    <div id="Vu56061">
    <a href="/manual/vote-note.php?id=56061&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56061">
    <a href="/manual/vote-note.php?id=56061&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56061" title="52% like this...">
    1
    </div>
  </div>
  <a href="#56061" class="name">
  <strong class="user"><em>philip at birk-jensen dot dk</em></strong></a><a class="genanchor" href="#56061"> &para;</a><div class="date" title="2005-08-22 06:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56061">
<div class="phpcode"><code><span class="html">I've been using the ICMP Checksum calculation function written by Khaless [at] bigpond [dot] com. But when having an odd length of data, it failed, so I made my own instead, which adds a 0 if the data length is odd:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">icmpChecksum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Add a 0 to the end of the data, if it's an "odd length"<br />    </span><span class="keyword">if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)%</span><span class="default">2</span><span class="keyword">)<br />        </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"\x00"</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Let PHP do all the dirty work<br />    </span><span class="default">$bit </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />    </span><span class="default">$sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$bit</span><span class="keyword">);<br />    <br />    </span><span class="comment">// Stolen from: Khaless [at] bigpond [dot] com<br />    // The code from the original ping program:<br />    //    sum = (sum &gt;&gt; 16) + (sum &amp; 0xffff);    /* add hi 16 to low 16 */<br />    //    sum += (sum &gt;&gt; 16);            /* add carry */<br />    // which also works fine, but it seems to me that<br />    // Khaless will work on large data.<br />    </span><span class="keyword">while (</span><span class="default">$sum</span><span class="keyword">&gt;&gt;</span><span class="default">16</span><span class="keyword">)<br />        </span><span class="default">$sum </span><span class="keyword">= (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) + (</span><span class="default">$sum </span><span class="keyword">&amp; </span><span class="default">0xffff</span><span class="keyword">);<br />    <br />    return </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, ~</span><span class="default">$sum</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77531">  <div class="votes">
    <div id="Vu77531">
    <a href="/manual/vote-note.php?id=77531&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77531">
    <a href="/manual/vote-note.php?id=77531&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77531" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77531" class="name">
  <strong class="user"><em>White-Gandalf</em></strong></a><a class="genanchor" href="#77531"> &para;</a><div class="date" title="2007-09-02 12:03"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77531">
<div class="phpcode"><code><span class="html">At the moment (2007-09), i don't find this extension in the PECL, but instead in the usual php extension directory. It needs to be included in the php-ini:<br /><br />extension = php_sockets.dll<br /><br />(or ".so" - whatever for your system).</span></code></div>
  </div>
 </div>
  <div class="note" id="84897">  <div class="votes">
    <div id="Vu84897">
    <a href="/manual/vote-note.php?id=84897&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84897">
    <a href="/manual/vote-note.php?id=84897&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84897" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#84897" class="name">
  <strong class="user"><em>davidccook+php at gmail dot com</em></strong></a><a class="genanchor" href="#84897"> &para;</a><div class="date" title="2008-08-04 09:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84897">
<div class="phpcode"><code><span class="html">Planning on sending integer values through as socket, I was surprised to find PHP only supports sending strings. <br />I came to the conclusion the only way to do it would be to create a string that would evaluate to the same byte values as the integer I wanted to send. So (after much messing about) I created a couple of functions: one to create this 'string' and one to convert a received value back to an integer.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//Converts an integer to 'byte array' (string), default to 4 'bytes' (chars)<br /></span><span class="keyword">function </span><span class="default">int2string</span><span class="keyword">(</span><span class="default">$int</span><span class="keyword">, </span><span class="default">$numbytes</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">)<br />{<br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />   for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numbytes</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />     </span><span class="default">$str </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$int </span><span class="keyword">% </span><span class="default">256</span><span class="keyword">);<br />     </span><span class="default">$int </span><span class="keyword">= </span><span class="default">$int </span><span class="keyword">/ </span><span class="default">256</span><span class="keyword">;<br />   }<br />   return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Converts a 'byte array' (string) to integer<br /></span><span class="keyword">function </span><span class="default">string2int</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)<br />{<br />   </span><span class="default">$numbytes </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />   </span><span class="default">$int </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />   for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numbytes</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />     </span><span class="default">$int </span><span class="keyword">+= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) * </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$i </span><span class="keyword">* </span><span class="default">8</span><span class="keyword">);<br />   }<br />   return </span><span class="default">$int</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Example<br /></span><span class="keyword">echo </span><span class="default">int2string</span><span class="keyword">(</span><span class="default">16705</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// 16-bit integer converts to two bytes: 65, 65; which in turn is 'AA'<br /></span><span class="keyword">echo </span><span class="default">string2int</span><span class="keyword">(</span><span class="string">'AA'</span><span class="keyword">); </span><span class="comment">//back the other way<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="66813">  <div class="votes">
    <div id="Vu66813">
    <a href="/manual/vote-note.php?id=66813&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66813">
    <a href="/manual/vote-note.php?id=66813&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66813" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#66813" class="name">
  <strong class="user"><em>aeolianmeson at NOSPAM dot blitzeclipse dot com</em></strong></a><a class="genanchor" href="#66813"> &para;</a><div class="date" title="2006-05-30 12:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66813">
<div class="phpcode"><code><span class="html">There is a fantastic book on this library called 'TCP/IP Sockets in C' (ISBN 1558608265), that covers all of the ins and outs, quirks, and everything else that goes on. It's written for C, of course, but it could have easily been written for PHP with almost no serious code differences.<br /><br />Dustin</span></code></div>
  </div>
 </div>
  <div class="note" id="42466">  <div class="votes">
    <div id="Vu42466">
    <a href="/manual/vote-note.php?id=42466&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42466">
    <a href="/manual/vote-note.php?id=42466&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42466" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#42466" class="name">
  <strong class="user"><em>noSanity</em></strong></a><a class="genanchor" href="#42466"> &para;</a><div class="date" title="2004-05-17 07:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42466">
<div class="phpcode"><code><span class="html">I have searched long and hard for a ping script that does NOT use EXEC() or SYSTEM(). So far, I have found nothing, so I decided to write my own, which was a task to say the least.<br /><br />First off, I would like to thank Khaless for their checksum function, converting it from C looked like a task in itself.<br /><br />Here is the class I wrote<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Net_Ping<br /></span><span class="keyword">{<br />  var </span><span class="default">$icmp_socket</span><span class="keyword">;<br />  var </span><span class="default">$request</span><span class="keyword">;<br />  var </span><span class="default">$request_len</span><span class="keyword">;<br />  var </span><span class="default">$reply</span><span class="keyword">;<br />  var </span><span class="default">$errstr</span><span class="keyword">;<br />  var </span><span class="default">$time</span><span class="keyword">;<br />  var </span><span class="default">$timer_start_time</span><span class="keyword">;<br />  function </span><span class="default">Net_Ping</span><span class="keyword">()<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">socket_set_block</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket</span><span class="keyword">);<br />  }<br />  <br />  function </span><span class="default">ip_checksum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />  {<br />     for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);</span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">)<br />     {<br />         if(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]) </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />         else </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'C*'</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />         </span><span class="default">$sum </span><span class="keyword">+= </span><span class="default">$bits</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />     }<br />     <br />     while (</span><span class="default">$sum</span><span class="keyword">&gt;&gt;</span><span class="default">16</span><span class="keyword">) </span><span class="default">$sum </span><span class="keyword">= (</span><span class="default">$sum </span><span class="keyword">&amp; </span><span class="default">0xffff</span><span class="keyword">) + (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">);<br />     </span><span class="default">$checksum </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'n1'</span><span class="keyword">,~</span><span class="default">$sum</span><span class="keyword">);<br />     return </span><span class="default">$checksum</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">start_time</span><span class="keyword">()<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">timer_start_time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br />  }<br />  <br />  function </span><span class="default">get_time</span><span class="keyword">(</span><span class="default">$acc</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// format start time<br />    </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">timer_start_time</span><span class="keyword">);<br />    </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">$start_time</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$start_time</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="comment">// get and format end time<br />    </span><span class="default">$end_time </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />    </span><span class="default">$end_time </span><span class="keyword">= </span><span class="default">$end_time</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] + </span><span class="default">$end_time</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    return </span><span class="default">number_format </span><span class="keyword">(</span><span class="default">$end_time </span><span class="keyword">- </span><span class="default">$start_time</span><span class="keyword">, </span><span class="default">$acc</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">Build_Packet</span><span class="keyword">()<br />  {<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="string">"abcdefghijklmnopqrstuvwabcdefghi"</span><span class="keyword">; </span><span class="comment">// the actual test data<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"\x08"</span><span class="keyword">; </span><span class="comment">// 8 echo message; 0 echo reply message<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="string">"\x00"</span><span class="keyword">; </span><span class="comment">// always 0 for this program<br />    </span><span class="default">$chksm </span><span class="keyword">= </span><span class="string">"\x00\x00"</span><span class="keyword">; </span><span class="comment">// generate checksum for icmp request<br />    </span><span class="default">$id </span><span class="keyword">= </span><span class="string">"\x00\x00"</span><span class="keyword">; </span><span class="comment">// we will have to work with this later<br />    </span><span class="default">$sqn </span><span class="keyword">= </span><span class="string">"\x00\x00"</span><span class="keyword">; </span><span class="comment">// we will have to work with this later<br /><br />    // now we need to change the checksum to the real checksum<br />    </span><span class="default">$chksm </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ip_checksum</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">.</span><span class="default">$chksm</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="default">$sqn</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">);<br /><br />    </span><span class="comment">// now lets build the actual icmp packet<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">.</span><span class="default">$chksm</span><span class="keyword">.</span><span class="default">$id</span><span class="keyword">.</span><span class="default">$sqn</span><span class="keyword">.</span><span class="default">$data</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request_len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request</span><span class="keyword">);<br />  }<br />  <br />  function </span><span class="default">Ping</span><span class="keyword">(</span><span class="default">$dst_addr</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">,</span><span class="default">$percision</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// lets catch dumb people<br />    </span><span class="keyword">if ((int)</span><span class="default">$timeout </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) </span><span class="default">$timeout</span><span class="keyword">=</span><span class="default">5</span><span class="keyword">;<br />    if ((int)</span><span class="default">$percision </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) </span><span class="default">$percision</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br />    <br />    </span><span class="comment">// set the timeout<br />    </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket</span><span class="keyword">,<br />      </span><span class="default">SOL_SOCKET</span><span class="keyword">,  </span><span class="comment">// socket level<br />      </span><span class="default">SO_RCVTIMEO</span><span class="keyword">, </span><span class="comment">// timeout option<br />      </span><span class="keyword">array(<br />       </span><span class="string">"sec"</span><span class="keyword">=&gt;</span><span class="default">$timeout</span><span class="keyword">, </span><span class="comment">// Timeout in seconds<br />       </span><span class="string">"usec"</span><span class="keyword">=&gt;</span><span class="default">0  </span><span class="comment">// I assume timeout in microseconds<br />       </span><span class="keyword">)<br />      );<br /><br />    if (</span><span class="default">$dst_addr</span><span class="keyword">)<br />    {<br />      if (@</span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket</span><span class="keyword">, </span><span class="default">$dst_addr</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">))<br />      {<br />      <br />      } else {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Cannot connect to </span><span class="default">$dst_addr</span><span class="string">"</span><span class="keyword">;<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />      }<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Build_Packet</span><span class="keyword">();<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start_time</span><span class="keyword">();<br />      </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">request_len</span><span class="keyword">);<br />      if (@</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">icmp_socket</span><span class="keyword">, &amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">reply</span><span class="keyword">, </span><span class="default">256</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">))<br />      {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">time </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">get_time</span><span class="keyword">(</span><span class="default">$percision</span><span class="keyword">);<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">time</span><span class="keyword">;<br />      } else {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Timed out"</span><span class="keyword">;<br />        return </span><span class="default">FALSE</span><span class="keyword">;<br />      }<br />    } else {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Destination address not specified"</span><span class="keyword">;<br />      return </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />  }<br />}<br /><br /></span><span class="default">$ping </span><span class="keyword">= new </span><span class="default">Net_Ping</span><span class="keyword">;<br /></span><span class="default">$ping</span><span class="keyword">-&gt;</span><span class="default">ping</span><span class="keyword">(</span><span class="string">"www.google.ca"</span><span class="keyword">);<br /><br />if (</span><span class="default">$ping</span><span class="keyword">-&gt;</span><span class="default">time</span><span class="keyword">)<br />  echo </span><span class="string">"Time: "</span><span class="keyword">.</span><span class="default">$ping</span><span class="keyword">-&gt;</span><span class="default">time</span><span class="keyword">;<br />else<br />  echo </span><span class="default">$ping</span><span class="keyword">-&gt;</span><span class="default">errstr</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope this saves some troubles.<br /><br />noSanity</span></code></div>
  </div>
 </div>
  <div class="note" id="39151">  <div class="votes">
    <div id="Vu39151">
    <a href="/manual/vote-note.php?id=39151&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39151">
    <a href="/manual/vote-note.php?id=39151&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39151" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#39151" class="name">
  <strong class="user"><em>Khaless [at] bigpond [dot] com</em></strong></a><a class="genanchor" href="#39151"> &para;</a><div class="date" title="2004-01-18 09:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39151">
<div class="phpcode"><code><span class="html">I spent a while trying to use SOCK_RAW to send ICMP request packets so i could ping. This however lead me to need the internet checksum written as a php function, which was a little hard because of the way PHP handles variable types. Anyway, to save others the effort heres what i came up with, this returns Checksum for $data<br /><br /><span class="default">&lt;?PHP<br /></span><span class="comment">// Computes Internet Checksum for $data<br />// will return a 16-bit internet checksum for $data<br /></span><span class="keyword">function </span><span class="default">inetChecksum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />{<br />    </span><span class="comment">// 32-bit accumilator, 16 bits at a time, adds odd bit on at end<br />    </span><span class="keyword">for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);</span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]) </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">]);<br />        else </span><span class="default">$bits </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'C*'</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        </span><span class="default">$sum </span><span class="keyword">+= </span><span class="default">$bits</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br />    <br />    </span><span class="comment">// Fold 32-bit sum to 16 bits <br />    </span><span class="keyword">while (</span><span class="default">$sum</span><span class="keyword">&gt;&gt;</span><span class="default">16</span><span class="keyword">) </span><span class="default">$sum </span><span class="keyword">= (</span><span class="default">$sum </span><span class="keyword">&amp; </span><span class="default">0xffff</span><span class="keyword">) + (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">);<br />    </span><span class="default">$checksum </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'n1'</span><span class="keyword">,~</span><span class="default">$sum</span><span class="keyword">);<br />    return </span><span class="default">$checksum</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />And with this i was able to construct a correct PING Request.</span></code></div>
  </div>
 </div>
  <div class="note" id="73162">  <div class="votes">
    <div id="Vu73162">
    <a href="/manual/vote-note.php?id=73162&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73162">
    <a href="/manual/vote-note.php?id=73162&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73162" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#73162" class="name">
  <strong class="user"><em>roberto at spadim dot com dot br</em></strong></a><a class="genanchor" href="#73162"> &para;</a><div class="date" title="2007-02-11 10:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73162">
<div class="phpcode"><code><span class="html">Wake on Lan , working ok without configurations, and some features<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">wake_on_lan</span><span class="keyword">(</span><span class="default">$mac</span><span class="keyword">,</span><span class="default">$addr</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">=</span><span class="default">7</span><span class="keyword">) {<br />    </span><span class="comment">//Usage<br />    //    $addr:<br />    //    You will send and broadcast tho this addres.<br />    //    Normaly you need to use the 255.255.255.255 adres, so i made it as default. So you don't need<br />    //    to do anything with this.<br />    //    Since 255.255.255.255 have permission denied problems you can use addr=false to get all broadcast address from ifconfig command<br />    //    addr can be array with broadcast IP values<br />    //    $mac:<br />    //    You will WAKE-UP this WOL-enabled computer, you need to add the MAC-addres here.<br />    //    Mac can be array too    <br />    //<br />    //Return<br />    //    TRUE:    When socked was created succesvolly and the message has been send.<br />    //    FALSE:    Something went wrong<br />    //<br />    //Example 1<br />    //    When the message has been send you will see the message "Done...."<br />    //    if ( wake_on_lan('00:00:00:00:00:00'))<br />    //        echo 'Done...';<br />    //    else<br />    //        echo 'Error while sending';<br />    //<br />    </span><span class="keyword">if (</span><span class="default">$addr</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"ifconfig | grep Bcast | cut -d \":\" -f 3 | cut -d \" \" -f 1"</span><span class="keyword">,</span><span class="default">$addr</span><span class="keyword">);<br />        </span><span class="default">$addr</span><span class="keyword">=</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">));<br />    }<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">)){<br />        </span><span class="default">$last_ret</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$ret</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />            if (</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]!==</span><span class="default">false</span><span class="keyword">)<br />                </span><span class="default">$last_ret</span><span class="keyword">=</span><span class="default">wake_on_lan</span><span class="keyword">(</span><span class="default">$mac</span><span class="keyword">,</span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">$port</span><span class="keyword">);<br />        return(</span><span class="default">$last_ret</span><span class="keyword">);<br />    }<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$mac</span><span class="keyword">)){<br />        </span><span class="default">$ret</span><span class="keyword">=array();<br />        foreach(</span><span class="default">$mac </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">v</span><span class="keyword">)<br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]=</span><span class="default">wake_on_lan</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$addr</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">);<br />        return(</span><span class="default">$ret</span><span class="keyword">);<br />    }<br />    </span><span class="comment">//Check if it's an real MAC-addres and split it into an array<br />    </span><span class="default">$mac</span><span class="keyword">=</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$mac</span><span class="keyword">);<br />    if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/([A-F0-9]{1,2}[-:]){5}[A-F0-9]{1,2}/"</span><span class="keyword">,</span><span class="default">$mac</span><span class="keyword">,</span><span class="default">$maccheck</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$addr_byte </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/[-:]/"</span><span class="keyword">,</span><span class="default">$maccheck</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />  <br />    </span><span class="comment">//Creating hardware adress<br />    </span><span class="default">$hw_addr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for (</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">&lt; </span><span class="default">6</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++)</span><span class="comment">//Changing mac adres from HEXEDECIMAL to DECIMAL<br />        </span><span class="default">$hw_addr </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$addr_byte</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">]));<br />    <br />    </span><span class="comment">//Create package data<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">),</span><span class="default">6</span><span class="keyword">);<br />    for (</span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">&lt;= </span><span class="default">16</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++)<br />        </span><span class="default">$msg </span><span class="keyword">.= </span><span class="default">$hw_addr</span><span class="keyword">;<br />    </span><span class="comment">//Sending data<br />    </span><span class="keyword">if (</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'socket_create'</span><span class="keyword">)){<br />        </span><span class="comment">//socket_create exists<br />        </span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);    </span><span class="comment">//Can create the socket<br />        </span><span class="keyword">if (</span><span class="default">$sock</span><span class="keyword">){<br />            </span><span class="default">$sock_data </span><span class="keyword">= </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_BROADCAST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); </span><span class="comment">//Set<br />            </span><span class="keyword">if (</span><span class="default">$sock_data</span><span class="keyword">){<br />                </span><span class="default">$sock_data </span><span class="keyword">= </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$addr</span><span class="keyword">,</span><span class="default">$port</span><span class="keyword">); </span><span class="comment">//Send data<br />                </span><span class="keyword">if (</span><span class="default">$sock_data</span><span class="keyword">){<br />                    </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">); </span><span class="comment">//Close socket<br />                    </span><span class="keyword">unset(</span><span class="default">$sock</span><span class="keyword">);<br />                    return(</span><span class="default">true</span><span class="keyword">);<br />                }<br />            }<br />        }<br />        @</span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />        unset(</span><span class="default">$sock</span><span class="keyword">);<br />    }<br />    </span><span class="default">$sock</span><span class="keyword">=</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"udp://" </span><span class="keyword">. </span><span class="default">$addr</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />    if(</span><span class="default">$sock</span><span class="keyword">){<br />        </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">$ret</span><span class="keyword">)<br />        return(</span><span class="default">true</span><span class="keyword">);<br />    return(</span><span class="default">false</span><span class="keyword">);    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56856">  <div class="votes">
    <div id="Vu56856">
    <a href="/manual/vote-note.php?id=56856&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56856">
    <a href="/manual/vote-note.php?id=56856&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56856" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#56856" class="name">
  <strong class="user"><em>bmatheny at mobocracy dot net</em></strong></a><a class="genanchor" href="#56856"> &para;</a><div class="date" title="2005-09-16 06:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56856">
<div class="phpcode"><code><span class="html">A multicast server can be written badly as follows:<br /><br />$bc_string = "Hello World!";<br />$sock = socket_create(AF_INET, SOCK_DGRAM, 0); <br />$opt_ret = socket_set_option($sock, 1, 6, TRUE);<br />$send_ret = socket_sendto($sock, $bc_string, strlen($bc_string), 0, '230.0.0.1', 4446);<br /><br />Checking the return types is needed, but this does allow for you to multicast from php code.</span></code></div>
  </div>
 </div>
  <div class="note" id="23096">  <div class="votes">
    <div id="Vu23096">
    <a href="/manual/vote-note.php?id=23096&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23096">
    <a href="/manual/vote-note.php?id=23096&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23096" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#23096" class="name">
  <strong class="user"><em>saryon at unfix dot org</em></strong></a><a class="genanchor" href="#23096"> &para;</a><div class="date" title="2002-07-09 09:42"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23096">
<div class="phpcode"><code><span class="html">I found this EXTREMELY useful link on the zend php <br />mailing list:<br /><br /><a href="http://www.zend.com/lists/php-dev/200205/msg00286.html" rel="nofollow" target="_blank">http://www.zend.com/lists/php-dev/200205/msg00286.html</a><br /><br />It's about being able to use multiple connections<br />in a php socket server, WITHOUT having<br />to use those threads everyone seems to be<br />so very fond of.<br />works very well :)<br />(ps: i didn't make it, so....don't say thanks to me ;),<br />thank him)</span></code></div>
  </div>
 </div>
  <div class="note" id="80397">  <div class="votes">
    <div id="Vu80397">
    <a href="/manual/vote-note.php?id=80397&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80397">
    <a href="/manual/vote-note.php?id=80397&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80397" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#80397" class="name">
  <strong class="user"><em>david dot schueler at tel-bilig dot de</em></strong></a><a class="genanchor" href="#80397"> &para;</a><div class="date" title="2008-01-14 03:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80397">
<div class="phpcode"><code><span class="html">NOTE! If you are trying to send a broadcast-message using this code you _may_ get a "Permission denied"-Error at socket_connect, even if you are running this as root on a linux box.<br /><span class="default">&lt;?php<br />$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);<br /></span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="string">"255.255.255.255"</span><span class="keyword">, </span><span class="default">10000</span><span class="keyword">);<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_BROADCAST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$buf </span><span class="keyword">= </span><span class="string">"Hello World!"</span><span class="keyword">;<br /></span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$buf</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">));<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The only workaround for this is to get the broadcast address of the interface and walk through all IPs with a for-loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="82163">  <div class="votes">
    <div id="Vu82163">
    <a href="/manual/vote-note.php?id=82163&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82163">
    <a href="/manual/vote-note.php?id=82163&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82163" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#82163" class="name">
  <strong class="user"><em>firefly2442 at hotmail dot com</em></strong></a><a class="genanchor" href="#82163"> &para;</a><div class="date" title="2008-03-29 12:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82163">
<div class="phpcode"><code><span class="html">Here's a simple script for sending messages back and forth between a server and client.  At this point, the code is fairly rough because once it enters the while loop, it doesn't stop but it can be modified and fixed.  Enjoy.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//The Server<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /></span><span class="default">$address </span><span class="keyword">= </span><span class="string">"127.0.0.1"</span><span class="keyword">;<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="string">"10000"</span><span class="keyword">;<br /> <br /><br /></span><span class="comment">/* create a socket in the AF_INET family, using SOCK_STREAM for TCP connection */<br /></span><span class="default">$mysock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br /><br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$mysock</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br /><br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$mysock</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /><br /></span><span class="default">$client </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$mysock</span><span class="keyword">);<br /><br />echo </span><span class="string">"Server started, accepting connections...\n"</span><span class="keyword">;<br /> <br /><br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">true </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$i</span><span class="keyword">++;<br />    echo </span><span class="string">"Sending </span><span class="default">$i</span><span class="string"> to client.\n"</span><span class="keyword">;<br />    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">));<br />    <br />    </span><span class="default">$input </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">);<br />    echo </span><span class="string">"Response from client is: </span><span class="default">$input</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br />}<br /><br />echo </span><span class="string">"Closing sockets..."</span><span class="keyword">;<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">);<br /><br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$mysock</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span> <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//The Client<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="default">$address </span><span class="keyword">= </span><span class="string">"127.0.0.1"</span><span class="keyword">;<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">;<br /><br /></span><span class="comment">/* Create a TCP/IP socket. */<br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br />if (</span><span class="default">$socket </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_create() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()) . </span><span class="string">"\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"socket successfully created.\n"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">"Attempting to connect to '</span><span class="default">$address</span><span class="string">' on port '</span><span class="default">$port</span><span class="string">'..."</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_connect() failed.\nReason: (</span><span class="default">$result</span><span class="string">) " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"successfully connected to </span><span class="default">$address</span><span class="string">.\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while (</span><span class="default">true </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$i</span><span class="keyword">++;<br />    echo </span><span class="string">"Sending </span><span class="default">$i</span><span class="string"> to server.\n"</span><span class="keyword">;<br />    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">));<br />    <br />    </span><span class="default">$input </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">);<br />    echo </span><span class="string">"Response from server is: </span><span class="default">$input</span><span class="string">\n"</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);<br />}<br /><br />echo </span><span class="string">"Closing socket..."</span><span class="keyword">;<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44860">  <div class="votes">
    <div id="Vu44860">
    <a href="/manual/vote-note.php?id=44860&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44860">
    <a href="/manual/vote-note.php?id=44860&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44860" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#44860" class="name">
  <strong class="user"><em>aidan at php dot net</em></strong></a><a class="genanchor" href="#44860"> &para;</a><div class="date" title="2004-08-18 05:08"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44860">
<div class="phpcode"><code><span class="html">hexdump() is a fantastic function for "dumping" packets or binary output from servers. See the below link for more information.
<br />
<br /><a href="http://aidanlister.com/repos/v/function.hexdump.php" rel="nofollow" target="_blank">http://aidanlister.com/repos/v/function.hexdump.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="28160">  <div class="votes">
    <div id="Vu28160">
    <a href="/manual/vote-note.php?id=28160&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28160">
    <a href="/manual/vote-note.php?id=28160&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28160" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#28160" class="name">
  <strong class="user"><em>talmage at usi-rpg dot com</em></strong></a><a class="genanchor" href="#28160"> &para;</a><div class="date" title="2003-01-04 12:02"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28160">
<div class="phpcode"><code><span class="html">I have spent the past two days ripping out hair trying to figure out how to prevent zombie processes w/the examples above and I just happend to find this in the manual for another lanuage, felt it neccassry to port it here.<br /><br />--begin copy--<br />van[at]webfreshener[dot]com<br />11-Oct-2002 02:53 <br /> <br />Forking your PHP daemon will cause it to zombie on exit.<br /><br />...or so I've seen on:<br />FreeBSD (PHP4.2.x)<br />Debian (PHP4.3.0-dev)<br />Darwin (PHP4.3.0-dev)<br /><br />This was tested with the example code above and other scripts created for evaluation.<br /><br />Seems adding &lt;b&gt;--enable-sigchild&lt;/b&gt; to your configure will get rid of the problem.<br /><br />Hope that saves some hair tearing :] <br /><br />--end copy--<br /><br />Thanks vam@wenfreshener.com !!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="19302">  <div class="votes">
    <div id="Vu19302">
    <a href="/manual/vote-note.php?id=19302&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19302">
    <a href="/manual/vote-note.php?id=19302&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19302" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#19302" class="name">
  <strong class="user"><em>daniel[at]lorch.cc</em></strong></a><a class="genanchor" href="#19302"> &para;</a><div class="date" title="2002-02-22 09:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19302">
<div class="phpcode"><code><span class="html">"Beej's Guide to Network Programming" is an absolutely excellent and easy to understand tutorial to socket programming. It was written for C developers, but as the socket functions in PHP are (almost) analoguous, this should not be a problem.<br /><br /><a href="http://www.ecst.csuchico.edu/~beej/guide/net/" rel="nofollow" target="_blank">http://www.ecst.csuchico.edu/~beej/guide/net/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="13230">  <div class="votes">
    <div id="Vu13230">
    <a href="/manual/vote-note.php?id=13230&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13230">
    <a href="/manual/vote-note.php?id=13230&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13230" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#13230" class="name">
  <strong class="user"><em>judeman at yahoo dot com</em></strong></a><a class="genanchor" href="#13230"> &para;</a><div class="date" title="2001-06-04 10:49"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13230">
<div class="phpcode"><code><span class="html">After several hours of working with sockets in an attempt to do UDP broadcasting, I thought a little help was in order for anyone else looking to do something similar, since it uses a number of those "undocumented" functions.  Here's how I did it:
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">// here is a basic opening of the a socket.  AF_INET specifies the internet domain.  SOCK_DGRAM 
<br />// specifies the Datagram socket type the 0 specifies that I want to use the default protcol (which in this
<br />// case is UDP)
<br />    </span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// if the file handle assigned to socket is less than 0 then opening the socket failed
<br />    </span><span class="keyword">if(</span><span class="default">$sock </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />    {
<br />        echo </span><span class="string">"socket() failed, error: " </span><span class="keyword">. </span><span class="default">strerror</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="comment">// here's where I set the socket options, this is essential to allow broadcasting.  An earlier comment (as of 
<br />// June 4th, 2001) explains what the parameters are.  For my purposes (UDP broadcasting) I need to set 
<br />// the broadcast option at the socket level to true.  In C, this done using SOL_SOCKET as the level param
<br />// (2) and SO_BROADCAST as the type param (3).  These may exist in PHP but I couldn't reference them  
<br />// so I used the values that referencing these variables in C returns (namely 1 and 6 respectively).  This 
<br />// function is basically just a wrapper to the C  function so check out the C documentation for more info
<br />    </span><span class="default">$opt_ret </span><span class="keyword">= </span><span class="default">setsockopt</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);
<br />
<br />    </span><span class="comment">// if the return value is less than one, an error occured setting the options 
<br />    </span><span class="keyword">if(</span><span class="default">$opt_ret </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />    {
<br />        echo </span><span class="string">"setsockopt() failed, error: " </span><span class="keyword">. </span><span class="default">strerror</span><span class="keyword">(</span><span class="default">$opt_ret</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="comment">// finally I am ready to broad cast something.  The sendto function allows this without any 
<br />// connections (essential for broadcasting).  So, this function sends the contents of $broadcast_string to the
<br />// general broadcast address (255.255.255.255) on port 4096.  The 0 (param 4) specifies no special
<br />// options, you can read about the options with man sendto 
<br />    </span><span class="default">$send_ret </span><span class="keyword">= </span><span class="default">sendto</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$broadcast_string</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$broadcast_string</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="string">'255.255.255.255'</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />
<br /></span><span class="comment">// if the return value is less than 0, an error has occured 
<br />    </span><span class="keyword">if(</span><span class="default">$send_ret </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />    {
<br />    echo </span><span class="string">"sendto() failed, error: " </span><span class="keyword">. </span><span class="default">strerror</span><span class="keyword">(</span><span class="default">$send_ret</span><span class="keyword">) . </span><span class="string">"&lt;BR&gt;\n"</span><span class="keyword">;            }
<br /></span><span class="comment">// be sure to close your socket when you're done 
<br /></span><span class="default">close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65052">  <div class="votes">
    <div id="Vu65052">
    <a href="/manual/vote-note.php?id=65052&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65052">
    <a href="/manual/vote-note.php?id=65052&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65052" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#65052" class="name">
  <strong class="user"><em>goldemish at tiscali dot it</em></strong></a><a class="genanchor" href="#65052"> &para;</a><div class="date" title="2006-04-24 06:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65052">
<div class="phpcode"><code><span class="html">Function to send Magic Packets for Wake on Wan (WOW) or Wake on Lan(WOL), without sockets library.<br /><br />&lt;?<br />function WakeOnLan($ip, $mac, $port)<br />{<br />        $packet = "";<br />        for($i = 0; $i &lt; 6; $i++) $packet .= chr(0xFF);<br />        for($i = 0; $i &lt; 6; $i++) $packet .= chr((int)substr($mac, $i, $i + 2));<br />        $nic = fsockopen("udp://" . $ip, $port));<br />        if($nic==false){<br />            return false;<br />            fclose($nic);<br />        }<br />        fwrite($nic, $packet);<br />        fclose($nic);<br />        return true;<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="36335">  <div class="votes">
    <div id="Vu36335">
    <a href="/manual/vote-note.php?id=36335&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36335">
    <a href="/manual/vote-note.php?id=36335&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36335" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#36335" class="name">
  <strong class="user"><em>murzik [at] pisem dot net</em></strong></a><a class="genanchor" href="#36335"> &para;</a><div class="date" title="2003-10-06 04:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36335">
<div class="phpcode"><code><span class="html">&gt;The function, that send the WakeOnLan (WOL, Magic packet) signal:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment"># Wake on LAN - (c) HotKey (at SPR dot AT), upgraded by Murzik &lt;tomurzik@inbox.ru&gt;
<br />
<br /></span><span class="default">flush</span><span class="keyword">();
<br />
<br />function </span><span class="default">WakeOnLan</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">, </span><span class="default">$mac</span><span class="keyword">)
<br />{
<br /> </span><span class="default">$addr_byte </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$mac</span><span class="keyword">);
<br /> </span><span class="default">$hw_addr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br /> for (</span><span class="default">$a</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">&lt; </span><span class="default">6</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++) </span><span class="default">$hw_addr </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$addr_byte</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">]));
<br />
<br /> </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">).</span><span class="default">chr</span><span class="keyword">(</span><span class="default">255</span><span class="keyword">);
<br />
<br /> for (</span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$a </span><span class="keyword">&lt;= </span><span class="default">16</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++)    </span><span class="default">$msg </span><span class="keyword">.= </span><span class="default">$hw_addr</span><span class="keyword">;
<br />
<br /> </span><span class="comment">// send it to the broadcast address using UDP
<br /> // SQL_BROADCAST option isn't help!!
<br /> </span><span class="default">$s </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);
<br /> if (</span><span class="default">$s </span><span class="keyword">== </span><span class="default">false</span><span class="keyword">)
<br /> {
<br />  echo </span><span class="string">"Error creating socket!\n"</span><span class="keyword">;
<br />  echo </span><span class="string">"Error code is '"</span><span class="keyword">.</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">).</span><span class="string">"' - " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">));
<br /> }
<br /> else
<br /> {
<br /> </span><span class="comment">// setting a broadcast option to socket:
<br />  </span><span class="default">$opt_ret </span><span class="keyword">=  </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);
<br />  if(</span><span class="default">$opt_ret </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)
<br />  {
<br />   echo </span><span class="string">"setsockopt() failed, error: " </span><span class="keyword">. </span><span class="default">strerror</span><span class="keyword">(</span><span class="default">$opt_ret</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;
<br />  }
<br />  </span><span class="default">$e </span><span class="keyword">= </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$addr</span><span class="keyword">, </span><span class="default">2050</span><span class="keyword">);
<br />  </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);
<br />  echo </span><span class="string">"Magic Packet sent ("</span><span class="keyword">.</span><span class="default">$e</span><span class="keyword">.</span><span class="string">") to "</span><span class="keyword">.</span><span class="default">$addr</span><span class="keyword">.</span><span class="string">", MAC="</span><span class="keyword">.</span><span class="default">$mac</span><span class="keyword">;
<br /> }
<br />}
<br />
<br /></span><span class="comment">#WakeOnLan('yourIPorDomain.dyndns.org', 'your:MAC:address');
<br />#WakeOnLan('192.168.0.2', '00:30:84:2A:90:42');
<br />#WakeOnLan('192.168.1.2', '00:05:1C:10:04:05');
<br />
<br />//if you have switch or other routing devices in LAN, sendign to
<br />// the local IP isn't helps! you need send to the broadcast address like this:
<br /></span><span class="default">WakeOnLan</span><span class="keyword">(</span><span class="string">'192.168.1.255'</span><span class="keyword">, </span><span class="string">'00:05:1C:10:04:05'</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="66284">  <div class="votes">
    <div id="Vu66284">
    <a href="/manual/vote-note.php?id=66284&amp;page=ref.sockets&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66284">
    <a href="/manual/vote-note.php?id=66284&amp;page=ref.sockets&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66284" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#66284" class="name">
  <strong class="user"><em>f.moisant</em></strong></a><a class="genanchor" href="#66284"> &para;</a><div class="date" title="2006-05-18 05:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66284">
<div class="phpcode"><code><span class="html">This function to send Magic Packet works really !!!<br /><br />/********/<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">wake</span><span class="keyword">(</span><span class="default">$ip</span><span class="keyword">, </span><span class="default">$mac</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">) <br />{<br />  </span><span class="default">$nic </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="string">"udp://" </span><span class="keyword">. </span><span class="default">$ip</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">); <br />  if(</span><span class="default">$nic</span><span class="keyword">) <br />  { <br />    </span><span class="default">$packet </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">; <br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">6</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) <br />       </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0xFF</span><span class="keyword">);<br />    for(</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">16</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />    {<br />      for(</span><span class="default">$k </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$k </span><span class="keyword">&lt; </span><span class="default">6</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">++) <br />      {<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$mac</span><span class="keyword">, </span><span class="default">$k </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$dec </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$dec</span><span class="keyword">);<br />      }<br />    }<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$nic</span><span class="keyword">, </span><span class="default">$packet</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$nic</span><span class="keyword">); <br />    if(</span><span class="default">$ret</span><span class="keyword">)<br />      return </span><span class="default">true</span><span class="keyword">; <br />  } <br />  return </span><span class="default">false</span><span class="keyword">;<br />} <br /></span><span class="default">?&gt;<br /></span><br />/********/<br /><br />Executed with:<br />wake('123.123.123.123', '112233445566', 9);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.sockets&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.sockets.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sockets.php">Sockets</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sockets.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sockets.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="sockets.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="sockets.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="sockets.errors.php" title="Socket Errors">Socket Errors</a>
                        </li>
                                                <li class="current">
                            <a href="ref.sockets.php" title="Socket Functions">Socket Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.socket.php" title="Socket">Socket</a>
                        </li>
                                                <li class="">
                            <a href="class.addressinfo.php" title="AddressInfo">AddressInfo</a>
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
