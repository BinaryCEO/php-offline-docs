<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/stream.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/stream.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/stream.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/stream.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/stream.filters.php">

 <link rel="alternate" href="https://www.php.net/manual/en/stream.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/stream.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/stream.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/stream.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/stream.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/stream.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/stream.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/stream.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/stream.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/stream.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/stream.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="stream.filters.php">
          Stream Filters &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="stream.resources.php">
          &laquo; Stream Classes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      </ul>
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
            <option value='en/stream.constants.php' selected="selected">English</option>
            <option value='de/stream.constants.php'>German</option>
            <option value='es/stream.constants.php'>Spanish</option>
            <option value='fr/stream.constants.php'>French</option>
            <option value='it/stream.constants.php'>Italian</option>
            <option value='ja/stream.constants.php'>Japanese</option>
            <option value='pt_BR/stream.constants.php'>Brazilian Portuguese</option>
            <option value='ru/stream.constants.php'>Russian</option>
            <option value='tr/stream.constants.php'>Turkish</option>
            <option value='uk/stream.constants.php'>Ukrainian</option>
            <option value='zh/stream.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="stream.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.stream-socket-client.php" class="function">stream_socket_client()</a></span>
  </strong>

  
   <dt id="constant.stream-client-async-connect">
    <strong><code><a href="stream.constants.php#constant.stream-client-async-connect">STREAM_CLIENT_ASYNC_CONNECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open client socket asynchronously.
     This option must be used together with the
     <strong><code><a href="stream.constants.php#constant.stream-client-connect">STREAM_CLIENT_CONNECT</a></code></strong> flag.
    </span>
   </dd>
  
  
   <dt id="constant.stream-client-connect">
    <strong><code><a href="stream.constants.php#constant.stream-client-connect">STREAM_CLIENT_CONNECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open client socket connection.
     Client sockets should always include this flag.
    </span>
   </dd>
  
  
   <dt id="constant.stream-client-persistent">
    <strong><code><a href="stream.constants.php#constant.stream-client-persistent">STREAM_CLIENT_PERSISTENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Client socket should remain persistent between page loads.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>
  </strong>

  
   <dt id="constant.stream-server-bind">
    <strong><code><a href="stream.constants.php#constant.stream-server-bind">STREAM_SERVER_BIND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates that a stream should bind to the specified target.
     Server sockets should always include this flag.
    </span>
   </dd>
  
  
   <dt id="constant.stream-server-listen">
    <strong><code><a href="stream.constants.php#constant.stream-server-listen">STREAM_SERVER_LISTEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates that a stream bound using
     <strong><code><a href="stream.constants.php#constant.stream-server-bind">STREAM_SERVER_BIND</a></code></strong>
     flag to start listening to the socket.
     Connection-orientated transports (such as TCP) must use this flag,
     otherwise the server socket will not be enabled.
     Using this flag for connect-less transports (such as UDP) is an error.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Values for the <code class="parameter">mode</code> parameter of
   <span class="function"><a href="function.stream-socket-shutdown.php" class="function">stream_socket_shutdown()</a></span>
  </strong>

  
   <dt id="constant.stream-shut-rd">
    <strong><code><a href="stream.constants.php#constant.stream-shut-rd">STREAM_SHUT_RD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disable further receptions.
    </span>
   </dd>
  
  
   <dt id="constant.stream-shut-wr">
    <strong><code><a href="stream.constants.php#constant.stream-shut-wr">STREAM_SHUT_WR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disable further transmissions.
    </span>
   </dd>
  
  
   <dt id="constant.stream-shut-rdwr">
    <strong><code><a href="stream.constants.php#constant.stream-shut-rdwr">STREAM_SHUT_RDWR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disable further receptions and transmissions.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">Stream Socket Transfer flags</strong>
  <p class="simpara">
   Those constants are used for the <code class="parameter">flags</code>
   parameter of the
   <span class="function"><a href="function.stream-socket-recvfrom.php" class="function">stream_socket_recvfrom()</a></span> and
   <span class="function"><a href="function.stream-socket-sendto.php" class="function">stream_socket_sendto()</a></span> functions.
  </p>

  
   <dt id="constant.stream-oob">
    <strong><code><a href="stream.constants.php#constant.stream-oob">STREAM_OOB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Process OOB (<code class="literal">out-of-band</code>) data.
    </span>
   </dd>
  
  
   <dt id="constant.stream-peek">
    <strong><code><a href="stream.constants.php#constant.stream-peek">STREAM_PEEK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Retrieve data from the socket, but do not consume the buffer.
    </span>
    <span class="simpara">
     Subsequent calls to <span class="function"><a href="function.fread.php" class="function">fread()</a></span> or
     <span class="function"><a href="function.stream-socket-recvfrom.php" class="function">stream_socket_recvfrom()</a></span> will see the same data.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Is not a valid flag for <span class="function"><a href="function.stream-socket-sendto.php" class="function">stream_socket_sendto()</a></span>.
     </span>
    </p></blockquote>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">Stream Filter constants</strong>
  <p class="simpara">
   Those constants are used for the
   <span class="function"><a href="function.stream-filter-append.php" class="function">stream_filter_append()</a></span> and
   <span class="function"><a href="function.stream-filter-prepend.php" class="function">stream_filter_prepend()</a></span> functions.
  </p>

  
   <dt id="constant.stream-filter-read">
    <strong><code><a href="stream.constants.php#constant.stream-filter-read">STREAM_FILTER_READ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicate that the specified filter should only be applied when
     <em>reading</em>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-filter-write">
    <strong><code><a href="stream.constants.php#constant.stream-filter-write">STREAM_FILTER_WRITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicate that the specified filter should only be applied when
     <em>writing</em>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-filter-all">
    <strong><code><a href="stream.constants.php#constant.stream-filter-all">STREAM_FILTER_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Equivalent to <code class="code">STREAM_FILTER_READ | STREAM_FILTER_WRITE</code>.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Stream Crypto Methods
  </strong>
  

  
   <dt id="constant.stream-crypto-method-any-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-any-client">STREAM_CRYPTO_METHOD_ANY_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Any TLS or SSL version on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv2-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv2-client">STREAM_CRYPTO_METHOD_SSLv2_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL 2 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv3-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv3-client">STREAM_CRYPTO_METHOD_SSLv3_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL 3 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv23-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv23-client">STREAM_CRYPTO_METHOD_SSLv23_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.0, 1.1 or 1.2 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tls-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tls-client">STREAM_CRYPTO_METHOD_TLS_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Any TLS version on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-0-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-0-client">STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.0 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-1-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-1-client">STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.1 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-2-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-2-client">STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.2 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-3-client">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-3-client">STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.3 on a client stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-any-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-any-server">STREAM_CRYPTO_METHOD_ANY_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Any TLS or SSL version on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv2-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv2-server">STREAM_CRYPTO_METHOD_SSLv2_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL 2 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv3-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv3-server">STREAM_CRYPTO_METHOD_SSLv3_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SSL 3 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-sslv23-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv23-server">STREAM_CRYPTO_METHOD_SSLv23_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.0, 1.1 or 1.2 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tls-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tls-server">STREAM_CRYPTO_METHOD_TLS_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Any TLS version on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-0-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-0-server">STREAM_CRYPTO_METHOD_TLSv1_0_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.0 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-1-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-1-server">STREAM_CRYPTO_METHOD_TLSv1_1_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.1 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-2-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-2-server">STREAM_CRYPTO_METHOD_TLSv1_2_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.2 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-method-tlsv1-3-server">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-3-server">STREAM_CRYPTO_METHOD_TLSv1_3_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     TLS 1.3 on a server stream.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-proto-sslv3">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-proto-sslv3">STREAM_CRYPTO_PROTO_SSLv3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv3-server">STREAM_CRYPTO_METHOD_SSLv3_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-proto-tlsv1-0">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-0">STREAM_CRYPTO_PROTO_TLSv1_0</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-0-server">STREAM_CRYPTO_METHOD_TLSv1_0_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-proto-tlsv1-1">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-1">STREAM_CRYPTO_PROTO_TLSv1_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-1-server">STREAM_CRYPTO_METHOD_TLSv1_1_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-proto-tlsv1-2">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-2">STREAM_CRYPTO_PROTO_TLSv1_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-2-server">STREAM_CRYPTO_METHOD_TLSv1_2_SERVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.stream-crypto-proto-tlsv1-3">
    <strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-3">STREAM_CRYPTO_PROTO_TLSv1_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-3-server">STREAM_CRYPTO_METHOD_TLSv1_3_SERVER</a></code></strong>.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Unused internal constants
  </strong>

  
   <dt id="constant.stream-must-seek">
    <strong><code><a href="stream.constants.php#constant.stream-must-seek">STREAM_MUST_SEEK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ensure stream is seekable.
     This may result in a copy of the stream being created.
    </span>
   </dd>
  
  
   <dt id="constant.stream-ignore-url">
    <strong><code><a href="stream.constants.php#constant.stream-ignore-url">STREAM_IGNORE_URL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Do not use plugin wrappers.
    </span>
   </dd>
  
 </dl>

 
 <div class="simplesect">
  <h3 class="title">
   Constants used with <span class="function"><a href="function.stream-socket-pair.php" class="function">stream_socket_pair()</a></span>
  </h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Not all constants might be available on a given system.
   </span>
  </p></blockquote>
  <dl>
   <strong class="title">
    Constants for the <code class="parameter">domain</code> parameter
   </strong>
   
    <dt id="constant.stream-pf-inet">
     <strong><code><a href="stream.constants.php#constant.stream-pf-inet">STREAM_PF_INET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Internet Protocol Version 4 (IPv4).
     </span>
    </dd>
   
   
    <dt id="constant.stream-pf-inet6">
     <strong><code><a href="stream.constants.php#constant.stream-pf-inet6">STREAM_PF_INET6</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Internet Protocol Version 6 (IPv6).
     </span>
    </dd>
   
   
    <dt id="constant.stream-pf-unix">
     <strong><code><a href="stream.constants.php#constant.stream-pf-unix">STREAM_PF_UNIX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unix system internal protocols.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Constants for the <code class="parameter">type</code> parameter
   </strong>
   
    <dt id="constant.stream-sock-dgram">
     <strong><code><a href="stream.constants.php#constant.stream-sock-dgram">STREAM_SOCK_DGRAM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides datagrams, which are connectionless messages.
      For example: UDP.
     </span>
    </dd>
   
   
    <dt id="constant.stream-sock-raw">
     <strong><code><a href="stream.constants.php#constant.stream-sock-raw">STREAM_SOCK_RAW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a raw socket, which provides access to internal network
      protocols and interfaces.
      Usually this type of socket is just available to the root user.
     </span>
    </dd>
   
   
    <dt id="constant.stream-sock-rdm">
     <strong><code><a href="stream.constants.php#constant.stream-sock-rdm">STREAM_SOCK_RDM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a RDM (Reliably-delivered messages) socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-sock-seqpacket">
     <strong><code><a href="stream.constants.php#constant.stream-sock-seqpacket">STREAM_SOCK_SEQPACKET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a sequenced packet stream socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-sock-stream">
     <strong><code><a href="stream.constants.php#constant.stream-sock-stream">STREAM_SOCK_STREAM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides sequenced, two-way byte streams with a transmission mechanism
      for out-of-band data.
      For example: TCP.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Constants for the <code class="parameter">protocol</code> parameter
   </strong>
   
    <dt id="constant.stream-ipproto-icmp">
     <strong><code><a href="stream.constants.php#constant.stream-ipproto-icmp">STREAM_IPPROTO_ICMP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a ICMP socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-ipproto-ip">
     <strong><code><a href="stream.constants.php#constant.stream-ipproto-ip">STREAM_IPPROTO_IP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a IP socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-ipproto-raw">
     <strong><code><a href="stream.constants.php#constant.stream-ipproto-raw">STREAM_IPPROTO_RAW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a RAW socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-ipproto-tcp">
     <strong><code><a href="stream.constants.php#constant.stream-ipproto-tcp">STREAM_IPPROTO_TCP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a TCP socket.
     </span>
    </dd>
   
   
    <dt id="constant.stream-ipproto-udp">
     <strong><code><a href="stream.constants.php#constant.stream-ipproto-udp">STREAM_IPPROTO_UDP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Provides a UDP socket.
     </span>
    </dd>
   
  </dl>
 </div>

 <div class="simplesect">
  <h3 class="title">
   Constants used with <span class="function"><a href="function.stream-notification-callback.php" class="function">stream_notification_callback()</a></span>
  </h3>
  <dl>
   <strong class="title">
    Values for the <code class="parameter">notification_code</code> parameter
   </strong>

   
    <dt id="constant.stream-notify-resolve">
     <strong><code><a href="stream.constants.php#constant.stream-notify-resolve">STREAM_NOTIFY_RESOLVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A remote address required for this stream has been resolved,
      or the resolution failed.
     </span>
     <span class="simpara">
      See <code class="parameter">severity</code> for an indication of which happened.
     </span>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       Support for this notification code is not yet implemented.
      </p>
     </div>
    </dd>
   
   
    <dt id="constant.stream-notify-connect">
     <strong><code><a href="stream.constants.php#constant.stream-notify-connect">STREAM_NOTIFY_CONNECT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A connection with an external resource has been established.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-auth-required">
     <strong><code><a href="stream.constants.php#constant.stream-notify-auth-required">STREAM_NOTIFY_AUTH_REQUIRED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Additional authorization is required to access the specified resource.
     </span>
     <span class="simpara">
      Typical issued with <code class="parameter">severity</code> level of
      <strong><code><a href="stream.constants.php#constant.stream-notify-severity-err">STREAM_NOTIFY_SEVERITY_ERR</a></code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-mime-type-is">
     <strong><code><a href="stream.constants.php#constant.stream-notify-mime-type-is">STREAM_NOTIFY_MIME_TYPE_IS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The <code class="literal">mime-type</code> of resource has been identified.
     </span>
     <span class="simpara">
      Refer to <code class="parameter">message</code> for a description of the
      discovered type.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-file-size-is">
     <strong><code><a href="stream.constants.php#constant.stream-notify-file-size-is">STREAM_NOTIFY_FILE_SIZE_IS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The <code class="literal">size</code> of the resource has been discovered.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-redirected">
     <strong><code><a href="stream.constants.php#constant.stream-notify-redirected">STREAM_NOTIFY_REDIRECTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The external resource has redirected the stream to an alternate location.
     </span>
     <span class="simpara">
      Refer to <code class="parameter">message</code>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-progress">
     <strong><code><a href="stream.constants.php#constant.stream-notify-progress">STREAM_NOTIFY_PROGRESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates current progress of the stream transfer in
      <code class="parameter">bytes_transferred</code> and possibly
      <code class="parameter">bytes_max</code> as well.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-completed">
     <strong><code><a href="stream.constants.php#constant.stream-notify-completed">STREAM_NOTIFY_COMPLETED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      There is no more data available on the stream.
      (First implemented as of PHP 8.3.0.)
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-failure">
     <strong><code><a href="stream.constants.php#constant.stream-notify-failure">STREAM_NOTIFY_FAILURE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A generic error occurred on the stream.
     </span>
     <span class="simpara">
      Refer to <code class="parameter">message</code> and
      <code class="parameter">message_code</code> for details.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-auth-result">
     <strong><code><a href="stream.constants.php#constant.stream-notify-auth-result">STREAM_NOTIFY_AUTH_RESULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Authorization has been completed (with or without success).
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">severity</code> parameter
   </strong>

   
    <dt id="constant.stream-notify-severity-info">
     <strong><code><a href="stream.constants.php#constant.stream-notify-severity-info">STREAM_NOTIFY_SEVERITY_INFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Normal, non-error related, notification.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-severity-warn">
     <strong><code><a href="stream.constants.php#constant.stream-notify-severity-warn">STREAM_NOTIFY_SEVERITY_WARN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Non critical error condition.
      Processing may continue.
     </span>
    </dd>
   
   
    <dt id="constant.stream-notify-severity-err">
     <strong><code><a href="stream.constants.php#constant.stream-notify-severity-err">STREAM_NOTIFY_SEVERITY_ERR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A critical error occurred.
      Processing cannot continue.
     </span>
    </dd>
   
  </dl>
 </div>

 <div class="simplesect">
  <h3 class="title"><span class="classname"><a href="class.streamwrapper.php" class="classname">streamWrapper</a></span> related constants</h3>

  <dl>
   <strong class="title">
    Valid flags for <span class="function"><a href="function.stream-wrapper-register.php" class="function">stream_wrapper_register()</a></span>
   </strong>

   
    <dt id="constant.stream-is-url">
     <strong><code><a href="stream.constants.php#constant.stream-is-url">STREAM_IS_URL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates that the stream wrapper protocol is a
      <abbr title="Uniform Resource Locator">URL</abbr> protocol.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">cast_as</code> parameter of
    <span class="methodname"><a href="streamwrapper.stream-cast.php" class="methodname">streamWrapper::stream_cast()</a></span>
   </strong>

   
    <dt id="constant.stream-cast-for-select">
     <strong><code><a href="stream.constants.php#constant.stream-cast-for-select">STREAM_CAST_FOR_SELECT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates that <span class="methodname"><a href="streamwrapper.stream-cast.php" class="methodname">streamWrapper::stream_cast()</a></span>
      was called by <span class="methodname"><strong>streamWrapper::stream_select()</strong></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-cast-as-stream">
     <strong><code><a href="stream.constants.php#constant.stream-cast-as-stream">STREAM_CAST_AS_STREAM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates that <span class="methodname"><a href="streamwrapper.stream-cast.php" class="methodname">streamWrapper::stream_cast()</a></span>
      was called by any method other than
      <span class="methodname"><strong>streamWrapper::stream_select()</strong></span>.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">option</code> parameter of
    <span class="methodname"><a href="streamwrapper.stream-metadata.php" class="methodname">streamWrapper::stream_metadata()</a></span>
   </strong>

   
    <dt id="constant.stream-meta-touch">
     <strong><code><a href="stream.constants.php#constant.stream-meta-touch">STREAM_META_TOUCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.touch.php" class="function">touch()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-meta-owner">
     <strong><code><a href="stream.constants.php#constant.stream-meta-owner">STREAM_META_OWNER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.chown.php" class="function">chown()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-meta-owner-name">
     <strong><code><a href="stream.constants.php#constant.stream-meta-owner-name">STREAM_META_OWNER_NAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.chown.php" class="function">chown()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-meta-group">
     <strong><code><a href="stream.constants.php#constant.stream-meta-group">STREAM_META_GROUP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.chgrp.php" class="function">chgrp()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-meta-group-name">
     <strong><code><a href="stream.constants.php#constant.stream-meta-group-name">STREAM_META_GROUP_NAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.chgrp.php" class="function">chgrp()</a></span>.
     </span>
    </dd>
   
   
    <dt id="constant.stream-meta-access">
     <strong><code><a href="stream.constants.php#constant.stream-meta-access">STREAM_META_ACCESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a call to <span class="function"><a href="function.chmod.php" class="function">chmod()</a></span>.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Valid flags for
    <span class="methodname"><a href="streamwrapper.mkdir.php" class="methodname">streamWrapper::mkdir()</a></span>
    
    and
    <span class="methodname"><a href="streamwrapper.rmdir.php" class="methodname">streamWrapper::rmdir()</a></span>
   </strong>

   
    <dt id="constant.stream-mkdir-recursive">
     <strong><code><a href="stream.constants.php#constant.stream-mkdir-recursive">STREAM_MKDIR_RECURSIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Recursive flag for the options parameters of
      <span class="function"><a href="function.mkdir.php" class="function">mkdir()</a></span> and <span class="function"><a href="function.rmdir.php" class="function">rmdir()</a></span>.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">options</code> parameter of
    <span class="methodname"><a href="streamwrapper.stream-open.php" class="methodname">streamWrapper::stream_open()</a></span>
   </strong>

   
    <dt id="constant.stream-use-path">
     <strong><code><a href="stream.constants.php#constant.stream-use-path">STREAM_USE_PATH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Flag indicating that relative paths should use the include path to
      locate the resource.
     </span>
    </dd>
   
   
    <dt id="constant.stream-report-errors">
     <strong><code><a href="stream.constants.php#constant.stream-report-errors">STREAM_REPORT_ERRORS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Flag indicating that the stream wrapper should report errors.
      If the flag is not set, no errors should be reported.
     </span>
     <span class="simpara">
      Errors are usually reported by the use of the
      <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span> function.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">option</code> parameter of
    <span class="methodname"><a href="streamwrapper.stream-set-option.php" class="methodname">streamWrapper::stream_set_option()</a></span>
   </strong>

   
    <dt id="constant.stream-option-blocking">
     <strong><code><a href="stream.constants.php#constant.stream-option-blocking">STREAM_OPTION_BLOCKING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set blocking/non-blocking mode on a stream.
     </span>
    </dd>
   
   
    <dt id="constant.stream-option-read-buffer">
     <strong><code><a href="stream.constants.php#constant.stream-option-read-buffer">STREAM_OPTION_READ_BUFFER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set read file buffering on a stream.
     </span>
     <dl>
      <strong class="title">
       Valid option values
      </strong>
      
       <dt id="constant.stream-buffer-none">
        <strong><code><a href="stream.constants.php#constant.stream-buffer-none">STREAM_BUFFER_NONE</a></code></strong>
        (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
       </dt>
       <dd>
        <span class="simpara">
         No buffering.
        </span>
       </dd>
      
      
       <dt id="constant.stream-buffer-line">
        <strong><code><a href="stream.constants.php#constant.stream-buffer-line">STREAM_BUFFER_LINE</a></code></strong>
        (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
       </dt>
       <dd>
        <span class="simpara">
         Line buffering.
        </span>
       </dd>
      
      
       <dt id="constant.stream-buffer-full">
        <strong><code><a href="stream.constants.php#constant.stream-buffer-full">STREAM_BUFFER_FULL</a></code></strong>
        (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
       </dt>
       <dd>
        <span class="simpara">
         Full buffering.
        </span>
       </dd>
      
     </dl>
    </dd>
   
   
    <dt id="constant.stream-option-read-timeout">
     <strong><code><a href="stream.constants.php#constant.stream-option-read-timeout">STREAM_OPTION_READ_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set read file buffering on a stream.
      
     </span>
    </dd>
   
   
    <dt id="constant.stream-option-write-buffer">
     <strong><code><a href="stream.constants.php#constant.stream-option-write-buffer">STREAM_OPTION_WRITE_BUFFER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set write file buffering on a stream.
     </span>
     <span class="simpara">
      See <strong><code><a href="stream.constants.php#constant.stream-option-read-buffer">STREAM_OPTION_READ_BUFFER</a></code></strong>
      for valid buffer options.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Values for the <code class="parameter">flags</code> parameter of
    <span class="methodname"><a href="streamwrapper.url-stat.php" class="methodname">streamWrapper::url_stat()</a></span>
   </strong>

   
    <dt id="constant.stream-url-stat-link">
     <strong><code><a href="stream.constants.php#constant.stream-url-stat-link">STREAM_URL_STAT_LINK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Only information about the link itself should be returned,
      not the resource pointed to by the link.
     </span>
    </dd>
   
   
    <dt id="constant.stream-url-stat-quiet">
     <strong><code><a href="stream.constants.php#constant.stream-url-stat-quiet">STREAM_URL_STAT_QUIET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The wrapper should not raise any errors.
     </span>
    </dd>
   
  </dl>
 </div>

 <div class="simplesect">
  <h3 class="title"><span class="classname"><a href="class.php-user-filter.php" class="classname">php_user_filter</a></span> related constants</h3>

  <dl>
   <strong class="title">
    Valid return values for
    <span class="methodname"><a href="php-user-filter.filter.php" class="methodname">php_user_filter::filter()</a></span>
   </strong>

   
    <dt id="constant.psfs-pass-on">
     <strong><code><a href="stream.constants.php#constant.psfs-pass-on">PSFS_PASS_ON</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Return value indicating that the userspace filter
      returned buckets in <code class="parameter">$out</code>.
     </span>
    </dd>
   
   
    <dt id="constant.psfs-feed-me">
     <strong><code><a href="stream.constants.php#constant.psfs-feed-me">PSFS_FEED_ME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Return value indicating that the userspace filter
      did not return buckets in <code class="parameter">$out</code>.
      (i.e. No data available.)
     </span>
    </dd>
   
   
    <dt id="constant.psfs-err-fatal">
     <strong><code><a href="stream.constants.php#constant.psfs-err-fatal">PSFS_ERR_FATAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Return value indicating that the userspace filter
      encountered an unrecoverable error.
      (i.e. Invalid data received.)
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">
    Unused internal constants
   </strong>

   
    <dt id="constant.psfs-flag-normal">
     <strong><code><a href="stream.constants.php#constant.psfs-flag-normal">PSFS_FLAG_NORMAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Regular read/write.
     </span>
    </dd>
   
   
    <dt id="constant.psfs-flag-flush-inc">
     <strong><code><a href="stream.constants.php#constant.psfs-flag-flush-inc">PSFS_FLAG_FLUSH_INC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      An incremental flush.
     </span>
    </dd>
   
   
    <dt id="constant.psfs-flag-flush-close">
     <strong><code><a href="stream.constants.php#constant.psfs-flag-flush-close">PSFS_FLAG_FLUSH_CLOSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Final flush prior to closing.
     </span>
    </dd>
   
  </dl>
 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fstream.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=stream.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/stream.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.stream.php">Streams</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.stream.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="stream.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="stream.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="stream.filters.php" title="Stream Filters">Stream Filters</a>
                        </li>
                                                <li class="">
                            <a href="stream.contexts.php" title="Stream Contexts">Stream Contexts</a>
                        </li>
                                                <li class="">
                            <a href="stream.errors.php" title="Stream Errors">Stream Errors</a>
                        </li>
                                                <li class="">
                            <a href="stream.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.php-user-filter.php" title="php_&#8203;user_&#8203;filter">php_&#8203;user_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="class.streamwrapper.php" title="streamWrapper">streamWrapper</a>
                        </li>
                                                <li class="">
                            <a href="ref.stream.php" title="Stream Functions">Stream Functions</a>
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
