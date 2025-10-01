<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: stream_socket_server - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.stream-socket-server.php">
 <link rel="shorturl" href="https://www.php.net/stream-socket-server">
 <link rel="alternate" href="https://www.php.net/stream-socket-server" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.stream.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.stream-socket-sendto.php">
 <link rel="next" href="https://www.php.net/manual/en/function.stream-socket-shutdown.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.stream-socket-server.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.stream-socket-server.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.stream-socket-server.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.stream-socket-server.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.stream-socket-server.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.stream-socket-server.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.stream-socket-server.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.stream-socket-server.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.stream-socket-server.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.stream-socket-server.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.stream-socket-server.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create an Internet or Unix domain server socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: stream_socket_server - Manual" />
<meta name="twitter:description" content="Create an Internet or Unix domain server socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: stream_socket_server - Manual" />
<meta itemprop="description" content="Create an Internet or Unix domain server socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create an Internet or Unix domain server socket" />

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
        <a href="function.stream-socket-shutdown.php">
          stream_socket_shutdown &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.stream-socket-sendto.php">
          &laquo; stream_socket_sendto        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.stream.php'>Streams</a></li>      <li><a href='ref.stream.php'>Stream Functions</a></li>      </ul>
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
            <option value='en/function.stream-socket-server.php' selected="selected">English</option>
            <option value='de/function.stream-socket-server.php'>German</option>
            <option value='es/function.stream-socket-server.php'>Spanish</option>
            <option value='fr/function.stream-socket-server.php'>French</option>
            <option value='it/function.stream-socket-server.php'>Italian</option>
            <option value='ja/function.stream-socket-server.php'>Japanese</option>
            <option value='pt_BR/function.stream-socket-server.php'>Brazilian Portuguese</option>
            <option value='ru/function.stream-socket-server.php'>Russian</option>
            <option value='tr/function.stream-socket-server.php'>Turkish</option>
            <option value='uk/function.stream-socket-server.php'>Ukrainian</option>
            <option value='zh/function.stream-socket-server.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.stream-socket-server" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">stream_socket_server</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">stream_socket_server</span> &mdash; <span class="dc-title">Create an Internet or Unix domain server socket</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.stream-socket-server-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>stream_socket_server</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$address</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$error_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter reference">&$error_message</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></span> <code class="parameter">$context</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates a stream or datagram socket on the specified
   <code class="parameter">address</code>.    
  </p>
  <p class="para">
   This function only creates a socket, to begin accepting connections
   use <span class="function"><a href="function.stream-socket-accept.php" class="function">stream_socket_accept()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.stream-socket-server-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">address</code></dt>
     <dd>
      <p class="para">
       The type of socket created is determined by the transport specified
       using standard URL formatting: <code class="literal">transport://target</code>.
      </p>
      <p class="para">
       For Internet Domain sockets (<strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong>) such as TCP and UDP, the
       <code class="literal">target</code> portion of the 
       <code class="parameter">remote_socket</code> parameter should consist of a
       hostname or IP address followed by a colon and a port number.  For
       Unix domain sockets, the <code class="literal">target</code> portion should
       point to the socket file on the filesystem.
      </p>
      <p class="para">
       Depending on the environment, Unix domain sockets may not be available.
       A list of available transports can be retrieved using
       <span class="function"><a href="function.stream-get-transports.php" class="function">stream_get_transports()</a></span>. See
       <a href="transports.php" class="xref">List of Supported Socket Transports</a> for a list of bulitin transports.
      </p>
     </dd>
    
    
     <dt><code class="parameter">error_code</code></dt>
     <dd>
      <p class="para">
       If the optional <code class="parameter">error_code</code> and <code class="parameter">error_message</code>
       arguments are present they will be set to indicate the actual system
       level error that occurred in the system-level <code class="literal">socket()</code>,
       <code class="literal">bind()</code>, and <code class="literal">listen()</code> calls. If
       the value returned in <code class="parameter">error_code</code> is 
       <code class="literal">0</code> and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, it is an
       indication that the error occurred before the <code class="literal">bind()</code>
       call. This is most likely due to a problem initializing the socket. 
       Note that the <code class="parameter">error_code</code> and
       <code class="parameter">error_message</code> arguments will always be passed by reference.
      </p>
     </dd>
    
    
     <dt><code class="parameter">error_message</code></dt>
     <dd>
      <p class="para">
       See <code class="parameter">error_code</code> description.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       A bitmask field which may be set to any combination of socket creation
       flags.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        For UDP sockets, you must use <strong><code><a href="stream.constants.php#constant.stream-server-bind">STREAM_SERVER_BIND</a></code></strong> as
        the <code class="parameter">flags</code> parameter.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">context</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.stream-socket-server-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the created stream, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.stream-socket-server-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">context</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.stream-socket-server-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4076">
    <p><strong>Example #1 Using TCP server sockets</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_socket_server</span><span style="color: #007700">(</span><span style="color: #DD0000">"tcp://0.0.0.0:8000"</span><span style="color: #007700">, </span><span style="color: #0000BB">$errno</span><span style="color: #007700">, </span><span style="color: #0000BB">$errstr</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$socket</span><span style="color: #007700">) {<br />  echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$errstr</span><span style="color: #DD0000"> (</span><span style="color: #0000BB">$errno</span><span style="color: #DD0000">)&lt;br /&gt;\n"</span><span style="color: #007700">;<br />} else {<br />  while (</span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_socket_accept</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">)) {<br />    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">'The local time is ' </span><span style="color: #007700">. </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'n/j/Y g:i a'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />  }<br />  </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The example below shows how to act as a time server which can respond
   to time queries as shown in an example on <span class="function"><a href="function.stream-socket-client.php" class="function">stream_socket_client()</a></span>.
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Most systems require root access to create a server socket on a port
     below 1024.
    </span>
   </p></blockquote>
   <div class="example" id="example-4077">
    <p><strong>Example #2 Using UDP server sockets</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_socket_server</span><span style="color: #007700">(</span><span style="color: #DD0000">"udp://127.0.0.1:1113"</span><span style="color: #007700">, </span><span style="color: #0000BB">$errno</span><span style="color: #007700">, </span><span style="color: #0000BB">$errstr</span><span style="color: #007700">, </span><span style="color: #0000BB">STREAM_SERVER_BIND</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$socket</span><span style="color: #007700">) {<br />    die(</span><span style="color: #DD0000">"</span><span style="color: #0000BB">$errstr</span><span style="color: #DD0000"> (</span><span style="color: #0000BB">$errno</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br />}<br /><br />do {<br />    </span><span style="color: #0000BB">$pkt </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_socket_recvfrom</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$peer</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$peer</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">stream_socket_sendto</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D M j H:i:s Y\r\n"</span><span style="color: #007700">), </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">$peer</span><span style="color: #007700">);<br />} while (</span><span style="color: #0000BB">$pkt </span><span style="color: #007700">!== </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.stream-socket-server-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">When specifying a numerical IPv6 address
(e.g. <code class="literal">fe80::1</code>), you must enclose the IP in square
brackets—for example, <code class="literal">tcp://[fe80::1]:80</code>.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.stream-socket-server-seealso">
  <h3 class="title">See Also</h3>
  <ul class="simplelist">
   <li><span class="function"><a href="function.stream-socket-client.php" class="function" rel="rdfs-seeAlso">stream_socket_client()</a> - Open Internet or Unix domain socket connection</span></li>
   <li><span class="function"><a href="function.stream-set-blocking.php" class="function" rel="rdfs-seeAlso">stream_set_blocking()</a> - Set blocking/non-blocking mode on a stream</span></li>
   <li><span class="function"><a href="function.stream-set-timeout.php" class="function" rel="rdfs-seeAlso">stream_set_timeout()</a> - Set timeout period on a stream</span></li>
   <li><span class="function"><a href="function.fgets.php" class="function" rel="rdfs-seeAlso">fgets()</a> - Gets line from file pointer</span></li>
   <li><span class="function"><a href="function.fgetss.php" class="function" rel="rdfs-seeAlso">fgetss()</a> - Gets line from file pointer and strip HTML tags</span></li>
   <li><span class="function"><a href="function.fwrite.php" class="function" rel="rdfs-seeAlso">fwrite()</a> - Binary-safe file write</span></li>
   <li><span class="function"><a href="function.fclose.php" class="function" rel="rdfs-seeAlso">fclose()</a> - Closes an open file pointer</span></li>
   <li><span class="function"><a href="function.feof.php" class="function" rel="rdfs-seeAlso">feof()</a> - Tests for end-of-file on a file pointer</span></li>
   <li><a href="ref.curl.php" class="link">Curl extension</a></li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/stream/functions/stream-socket-server.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.stream-socket-server%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.stream-socket-server&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-socket-server.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125540">  <div class="votes">
    <div id="Vu125540">
    <a href="/manual/vote-note.php?id=125540&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125540">
    <a href="/manual/vote-note.php?id=125540&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125540" title="86% like this...">
    42
    </div>
  </div>
  <a href="#125540" class="name">
  <strong class="user"><em>Heretic86 at roadrunner dot com</em></strong></a><a class="genanchor" href="#125540"> &para;</a><div class="date" title="2020-11-25 07:27"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125540">
<div class="phpcode"><code><span class="html">This is an example of how to set up stream_socket_server to connect with multiple Secure Websockets on WSS (wss://) that uses SSL / TLS as a Transport.  <br /><br />This runs on a Windows Apache Server with a registered domain and SSL Cert from LetsEncrypt via Certbot.<br /><br />Run this script from a console "php server.php", and javascript html as a client with:<br />socket = new WebSocket('wss://php.net:1234');<br /><br /><span class="default">&lt;?php<br />$host </span><span class="keyword">= </span><span class="string">'192.168.1.2'</span><span class="keyword">;<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">1234</span><span class="keyword">;<br /></span><span class="default">$path </span><span class="keyword">= </span><span class="string">'C:/Certbot/live/php.net/'</span><span class="keyword">;<br /></span><span class="default">$transport </span><span class="keyword">= </span><span class="string">'tlsv1.3'</span><span class="keyword">;<br /></span><span class="default">$ssl </span><span class="keyword">= [</span><span class="string">'ssl' </span><span class="keyword">=&gt; [<br />          </span><span class="string">'local_cert'  </span><span class="keyword">=&gt; </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'cert.pem'</span><span class="keyword">,       </span><span class="comment">// SSL Certificate<br />          </span><span class="string">'local_pk'    </span><span class="keyword">=&gt; </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'privkey.pem'</span><span class="keyword">,    </span><span class="comment">// SSL Keyfile<br />          </span><span class="string">'disable_compression' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,             </span><span class="comment">// TLS compression attack vulnerability<br />          </span><span class="string">'verify_peer'         </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,            </span><span class="comment">// Set this to true if acting as an SSL client<br />          </span><span class="string">'ssltransport' </span><span class="keyword">=&gt; </span><span class="default">$transport</span><span class="keyword">,              </span><span class="comment">// Transport Methods such as 'tlsv1.1', tlsv1.2' <br />        </span><span class="keyword">] ];<br /></span><span class="default">$ssl_context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">(</span><span class="default">$ssl</span><span class="keyword">);<br /></span><span class="default">$server </span><span class="keyword">= </span><span class="default">stream_socket_server</span><span class="keyword">(</span><span class="default">$transport </span><span class="keyword">. </span><span class="string">'://' </span><span class="keyword">. </span><span class="default">$host </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">STREAM_SERVER_BIND</span><span class="keyword">|</span><span class="default">STREAM_SERVER_LISTEN</span><span class="keyword">, </span><span class="default">$ssl_context</span><span class="keyword">);<br />if (!</span><span class="default">$server</span><span class="keyword">) {  die(</span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)"</span><span class="keyword">); } <br /></span><span class="default">$clients </span><span class="keyword">= array(</span><span class="default">$server</span><span class="keyword">);<br /></span><span class="default">$write  </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /></span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />while (</span><span class="default">true</span><span class="keyword">) {<br />  </span><span class="default">$changed </span><span class="keyword">= </span><span class="default">$clients</span><span class="keyword">;<br />  </span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$changed</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />  if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$changed</span><span class="keyword">)) {<br />    </span><span class="default">$client </span><span class="keyword">= @</span><span class="default">stream_socket_accept</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);<br />    if (!</span><span class="default">$client</span><span class="keyword">){ continue; }<br />    </span><span class="default">$clients</span><span class="keyword">[] = </span><span class="default">$client</span><span class="keyword">;<br />    </span><span class="default">$ip </span><span class="keyword">= </span><span class="default">stream_socket_get_name</span><span class="keyword">( </span><span class="default">$client</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    echo </span><span class="string">"New Client connected from </span><span class="default">$ip</span><span class="string">\n"</span><span class="keyword">;<br />    <br />    </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$headers </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">1500</span><span class="keyword">);<br />    </span><span class="default">handshake</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$headers</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br />    </span><span class="default">send_message</span><span class="keyword">(</span><span class="default">$clients</span><span class="keyword">, </span><span class="default">mask</span><span class="keyword">(</span><span class="default">$ip </span><span class="keyword">. </span><span class="string">' connected'</span><span class="keyword">));<br />    </span><span class="default">$found_socket </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$changed</span><span class="keyword">);<br />    unset(</span><span class="default">$changed</span><span class="keyword">[</span><span class="default">$found_socket</span><span class="keyword">]);     <br />  }<br />  foreach (</span><span class="default">$changed </span><span class="keyword">as </span><span class="default">$changed_socket</span><span class="keyword">) {<br />    </span><span class="default">$ip </span><span class="keyword">= </span><span class="default">stream_socket_get_name</span><span class="keyword">( </span><span class="default">$changed_socket</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$changed_socket</span><span class="keyword">);<br />        if (</span><span class="default">$buffer </span><span class="keyword">== </span><span class="default">false</span><span class="keyword">) {<br />      echo </span><span class="string">"Client Disconnected from </span><span class="default">$ip</span><span class="string">\n"</span><span class="keyword">;<br />      @</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$changed_socket</span><span class="keyword">);<br />            </span><span class="default">$found_socket </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$changed_socket</span><span class="keyword">, </span><span class="default">$clients</span><span class="keyword">);<br />            unset(</span><span class="default">$clients</span><span class="keyword">[</span><span class="default">$found_socket</span><span class="keyword">]);<br />        }<br />    </span><span class="default">$unmasked </span><span class="keyword">= </span><span class="default">unmask</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">);<br />    if (</span><span class="default">$unmasked </span><span class="keyword">!= </span><span class="string">""</span><span class="keyword">) { echo </span><span class="string">"\nReceived a Message from </span><span class="default">$ip</span><span class="string">:\n\"</span><span class="default">$unmasked</span><span class="string">\" \n"</span><span class="keyword">; }<br />    </span><span class="default">$response </span><span class="keyword">= </span><span class="default">mask</span><span class="keyword">(</span><span class="default">$unmasked</span><span class="keyword">);<br />    </span><span class="default">send_message</span><span class="keyword">(</span><span class="default">$clients</span><span class="keyword">, </span><span class="default">$response</span><span class="keyword">);<br />  }<br />}<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);<br /><br />function </span><span class="default">unmask</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="default">$length </span><span class="keyword">= @</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &amp; </span><span class="default">127</span><span class="keyword">;<br />    if(</span><span class="default">$length </span><span class="keyword">== </span><span class="default">126</span><span class="keyword">) {    </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">); }<br />    elseif(</span><span class="default">$length </span><span class="keyword">== </span><span class="default">127</span><span class="keyword">) {    </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">); </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">14</span><span class="keyword">); }<br />    else { </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">); </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">); }<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); ++</span><span class="default">$i</span><span class="keyword">) { </span><span class="default">$text </span><span class="keyword">.= </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$masks</span><span class="keyword">[</span><span class="default">$i </span><span class="keyword">% </span><span class="default">4</span><span class="keyword">];    }<br />    return </span><span class="default">$text</span><span class="keyword">;<br />}<br />function </span><span class="default">mask</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">) {<br />    </span><span class="default">$b1 </span><span class="keyword">= </span><span class="default">0x80 </span><span class="keyword">| (</span><span class="default">0x1 </span><span class="keyword">&amp; </span><span class="default">0x0f</span><span class="keyword">);<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">);<br />    if(</span><span class="default">$length </span><span class="keyword">&lt;= </span><span class="default">125</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CC'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    elseif(</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">125 </span><span class="keyword">&amp;&amp; </span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">65536</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CCn'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">126</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    elseif(</span><span class="default">$length </span><span class="keyword">&gt;= </span><span class="default">65536</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CCNN'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    return </span><span class="default">$header</span><span class="keyword">.</span><span class="default">$text</span><span class="keyword">;<br />}<br />function </span><span class="default">handshake</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$rcvd</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">){<br />    </span><span class="default">$headers </span><span class="keyword">= array();<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/\r\n/"</span><span class="keyword">, </span><span class="default">$rcvd</span><span class="keyword">);<br />    foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">)<br />    {<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\A(\S+): (.*)\z/'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)){<br />            </span><span class="default">$headers</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] = </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        }<br />    }<br />    </span><span class="default">$secKey </span><span class="keyword">= </span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'Sec-WebSocket-Key'</span><span class="keyword">];<br />    </span><span class="default">$secAccept </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$secKey </span><span class="keyword">. </span><span class="string">'258EAFA5-E914-47DA-95CA-C5AB0DC85B11'</span><span class="keyword">)));<br />    </span><span class="comment">//hand shaking header<br />    </span><span class="default">$upgrade  </span><span class="keyword">= </span><span class="string">"HTTP/1.1 101 Web Socket Protocol Handshake\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Upgrade: websocket\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Connection: Upgrade\r\n" </span><span class="keyword">.<br />    </span><span class="string">"WebSocket-Origin: </span><span class="default">$host</span><span class="string">\r\n" </span><span class="keyword">.<br />    </span><span class="string">"WebSocket-Location: wss://</span><span class="default">$host</span><span class="string">:</span><span class="default">$port</span><span class="string">\r\n"</span><span class="keyword">.<br />    </span><span class="string">"Sec-WebSocket-Version: 13\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Sec-WebSocket-Accept:</span><span class="default">$secAccept</span><span class="string">\r\n\r\n"</span><span class="keyword">;<br />  </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">$upgrade</span><span class="keyword">);<br />}<br />function </span><span class="default">send_message</span><span class="keyword">(</span><span class="default">$clients</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">){<br />    foreach(</span><span class="default">$clients </span><span class="keyword">as </span><span class="default">$changed_socket</span><span class="keyword">){<br />    @</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$changed_socket</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118419">  <div class="votes">
    <div id="Vu118419">
    <a href="/manual/vote-note.php?id=118419&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118419">
    <a href="/manual/vote-note.php?id=118419&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118419" title="82% like this...">
    30
    </div>
  </div>
  <a href="#118419" class="name">
  <strong class="user"><em>blackmac01 at gmail dot com</em></strong></a><a class="genanchor" href="#118419"> &para;</a><div class="date" title="2015-12-03 01:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118419">
<div class="phpcode"><code><span class="html">I'm writing an HTTP server and I need SSL support, but getting this to work correctly with PHP streams took a bit of trial and error. For anyone who is trying to get an HTTP SSL server working with stream_socket_server:<br /><br />1) Your SSL context will need to contain 'local_cert'. If  you did not include your private key with your local_cert, you'll also need to specify 'local_pk' which is your RSA key.  Your keys and certs should be PEM encoded, which means base-64. If your certificate has intermediary certs, you will need to specify those in the correct order: Your signed cert, intermediary cert 1, intermediary cert 2, etc. Each cert in the list needs to validate the one above it, but you do not need to include the CA Root that your SSL signer provided; that should already be included with the client's software (i.e. trust root certs).<br /><br />You can append your private key in the file with your certs, however I keep mine in its own file. If you see the word "encrypted" when you view your key with a text viewer, you need to enter the correct passphrase and specify the context "passphrase", otherwise you can leave that one out.<br /><br />As a server, verify_peer is irrelevant and should be set to false (should always be true if you are acting as an SSL client). Both cafile and capath contexts are not needed for functioning as a SSL/TLS server, but they are needed if you are making SSL connections with PHP as the client.<br /><br />Lastly, the 'ciphers' context should be set to a list of secure ciphers. Search for "mozilla recommended ciphers" and choose the string of ciphers that works for you, because not all openssl supported ciphers are secure. I went with the "intermediate" list, which provides high security and compatibility.<br /><br />2) When you create the binding for stream_socket_server(), make sure that you choose the tcp:// wrapper. DO NOT USE ssl:// or tls://. Anything other than tcp:// will not work correctly AS A SERVER, those transports are what you use when making connections with PHP as a client. <br /><br />Remember that the encryption does not start until after an SSL handshake completes, so the server has to listen in non-encrypted mode for new connections, and encryption doesn't start until certs are exchanged and a cipher is selected. When a new connection arrives you accept it with stream_socket_accept() and then use stream_socket_enable_crypto() to start the SSL session.<br /><br />3) Keep in mind that the SSL handshake takes time, and that the stream_socket wrappers are high level and not as responsive as the socket extension due to the additional overhead they incur. For this reason you will need to enable blocking for accepting new connections.<br /><br />&lt;enable blocking on ServerListenStream&gt;<br />newConnStream = stream_socket_accept(ServerListenStream);<br />&lt;disable blocking on ServerListenStream&gt;<br /><br />&lt;enable blocking on newConnStream &gt;<br />stream_socket_enable_crypto(newConnStream, true, STREAM_CRYPTO_METHOD_SSLv23_SERVER);<br />&lt;disable blocking on newConnStream &gt;<br /><br />Note that this is mainly for HTTP. If you are trying to do something like SMTP then your script will have to react to the "starttls" command, but it would be similar to the above except that you would wait for the "starttls" command before invoking the  stream_socket_enable_crypto() function on the client's stream.<br /><br />TLS 1.0 is generally the way to go, SSLv3 is insecure and SSLv2 is buggy. If you use the mozilla recommend cipher list in your context, you'll be fine. Hope this helps someone out!</span></code></div>
  </div>
 </div>
  <div class="note" id="94749">  <div class="votes">
    <div id="Vu94749">
    <a href="/manual/vote-note.php?id=94749&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94749">
    <a href="/manual/vote-note.php?id=94749&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94749" title="89% like this...">
    22
    </div>
  </div>
  <a href="#94749" class="name">
  <strong class="user"><em>davidm at marketo dot com</em></strong></a><a class="genanchor" href="#94749"> &para;</a><div class="date" title="2009-11-22 04:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94749">
<div class="phpcode"><code><span class="html">In some specialized scenarios, you may want to create an AF_INET socket (UDP or TCP) but let the system select an unused port for you.  This is a standard feature of internet sockets but it doesn't seem to be documented how to do this for the stream_socket_server function.  It appears you can get this behavior by selecting zero for the port number, for example, my test below printed "127.0.0.1:4960".
<br />
<br /><span class="default">&lt;?php
<br />  $sock </span><span class="keyword">= </span><span class="default">stream_socket_server</span><span class="keyword">(</span><span class="string">"udp://127.0.0.1:0"</span><span class="keyword">); 
<br />  </span><span class="default">$name </span><span class="keyword">= </span><span class="default">stream_socket_get_name</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);
<br />  echo </span><span class="default">$name</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98616">  <div class="votes">
    <div id="Vu98616">
    <a href="/manual/vote-note.php?id=98616&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98616">
    <a href="/manual/vote-note.php?id=98616&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98616" title="72% like this...">
    13
    </div>
  </div>
  <a href="#98616" class="name">
  <strong class="user"><em>frxstrem</em></strong></a><a class="genanchor" href="#98616"> &para;</a><div class="date" title="2010-06-26 10:18"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98616">
<div class="phpcode"><code><span class="html">Using the OpenSSL extension, PHP can automatically generate self-signed SSL certificates, which can be used for basic authentication and encryption (although I would recommend to use a signed certificate instead) for SSL servers.<br /><br />I have extended the script by 'e at osterman dot com' to automatically create self-signed certificates:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Hello World! SSL HTTP Server.<br />// Tested on PHP 5.1.2-1+b1 (cli) (built: Mar 20 2006 04:17:24)<br /><br />// Certificate data:<br /></span><span class="default">$dn </span><span class="keyword">= array(<br />    </span><span class="string">"countryName" </span><span class="keyword">=&gt; </span><span class="string">"UK"</span><span class="keyword">,<br />    </span><span class="string">"stateOrProvinceName" </span><span class="keyword">=&gt; </span><span class="string">"Somerset"</span><span class="keyword">,<br />    </span><span class="string">"localityName" </span><span class="keyword">=&gt; </span><span class="string">"Glastonbury"</span><span class="keyword">,<br />    </span><span class="string">"organizationName" </span><span class="keyword">=&gt; </span><span class="string">"The Brain Room Limited"</span><span class="keyword">,<br />    </span><span class="string">"organizationalUnitName" </span><span class="keyword">=&gt; </span><span class="string">"PHP Documentation Team"</span><span class="keyword">,<br />    </span><span class="string">"commonName" </span><span class="keyword">=&gt; </span><span class="string">"Wez Furlong"</span><span class="keyword">,<br />    </span><span class="string">"emailAddress" </span><span class="keyword">=&gt; </span><span class="string">"wez@example.com"<br /></span><span class="keyword">);<br /><br /></span><span class="comment">// Generate certificate<br /></span><span class="default">$privkey </span><span class="keyword">= </span><span class="default">openssl_pkey_new</span><span class="keyword">();<br /></span><span class="default">$cert    </span><span class="keyword">= </span><span class="default">openssl_csr_new</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">);<br /></span><span class="default">$cert    </span><span class="keyword">= </span><span class="default">openssl_csr_sign</span><span class="keyword">(</span><span class="default">$cert</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">365</span><span class="keyword">);<br /><br /></span><span class="comment">// Generate PEM file<br /># Optionally change the passphrase from 'comet' to whatever you want, or leave it empty for no passphrase<br /></span><span class="default">$pem_passphrase </span><span class="keyword">= </span><span class="string">'comet'</span><span class="keyword">;<br /></span><span class="default">$pem </span><span class="keyword">= array();<br /></span><span class="default">openssl_x509_export</span><span class="keyword">(</span><span class="default">$cert</span><span class="keyword">, </span><span class="default">$pem</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">openssl_pkey_export</span><span class="keyword">(</span><span class="default">$privkey</span><span class="keyword">, </span><span class="default">$pem</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$pem_passphrase</span><span class="keyword">);<br /></span><span class="default">$pem </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$pem</span><span class="keyword">);<br /><br /></span><span class="comment">// Save PEM file<br /></span><span class="default">$pemfile </span><span class="keyword">= </span><span class="string">'./server.pem'</span><span class="keyword">;<br /></span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$pemfile</span><span class="keyword">, </span><span class="default">$pem</span><span class="keyword">);<br /><br /></span><span class="default">$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">();<br /><br /></span><span class="comment">// local_cert must be in PEM format<br /></span><span class="default">stream_context_set_option</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="string">'ssl'</span><span class="keyword">, </span><span class="string">'local_cert'</span><span class="keyword">, </span><span class="default">$pemfile</span><span class="keyword">);<br /></span><span class="comment">// Pass Phrase (password) of private key<br /></span><span class="default">stream_context_set_option</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="string">'ssl'</span><span class="keyword">, </span><span class="string">'passphrase'</span><span class="keyword">, </span><span class="default">$pem_passphrase</span><span class="keyword">);<br /><br /></span><span class="default">stream_context_set_option</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="string">'ssl'</span><span class="keyword">, </span><span class="string">'allow_self_signed'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">stream_context_set_option</span><span class="keyword">(</span><span class="default">$context</span><span class="keyword">, </span><span class="string">'ssl'</span><span class="keyword">, </span><span class="string">'verify_peer'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="comment">// Create the server socket<br /></span><span class="default">$server </span><span class="keyword">= </span><span class="default">stream_socket_server</span><span class="keyword">(</span><span class="string">'ssl://0.0.0.0:9001'</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">STREAM_SERVER_BIND</span><span class="keyword">|</span><span class="default">STREAM_SERVER_LISTEN</span><span class="keyword">, </span><span class="default">$context</span><span class="keyword">);<br /><br />while(</span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    print </span><span class="string">"waiting..."</span><span class="keyword">;<br />    </span><span class="default">$client </span><span class="keyword">= </span><span class="default">stream_socket_accept</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">);<br />    print </span><span class="string">"accepted " </span><span class="keyword">. </span><span class="default">stream_socket_get_name</span><span class="keyword">( </span><span class="default">$client</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />    if( </span><span class="default">$client </span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Read until double CRLF<br />        </span><span class="keyword">while( !</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\r?\n\r?\n/'</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">) )<br />            </span><span class="default">$buffer </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">, </span><span class="default">2046</span><span class="keyword">); <br />        </span><span class="comment">// Respond to client<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">,  </span><span class="string">"200 OK HTTP/1.1\r\n"<br />                         </span><span class="keyword">. </span><span class="string">"Connection: close\r\n"<br />                         </span><span class="keyword">. </span><span class="string">"Content-Type: text/html\r\n"<br />                         </span><span class="keyword">. </span><span class="string">"\r\n"<br />                         </span><span class="keyword">. </span><span class="string">"Hello World! " </span><span class="keyword">. </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)<br />                         . </span><span class="string">"&lt;pre&gt;</span><span class="keyword">{</span><span class="default">$buffer</span><span class="keyword">}</span><span class="string">&lt;/pre&gt;"</span><span class="keyword">);<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">);<br />    } else {<br />        print </span><span class="string">"error.\n"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="44501">  <div class="votes">
    <div id="Vu44501">
    <a href="/manual/vote-note.php?id=44501&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44501">
    <a href="/manual/vote-note.php?id=44501&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44501" title="62% like this...">
    9
    </div>
  </div>
  <a href="#44501" class="name">
  <strong class="user"><em>andrey at php dot net</em></strong></a><a class="genanchor" href="#44501"> &para;</a><div class="date" title="2004-08-07 09:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44501">
<div class="phpcode"><code><span class="html">Just a small example how to use this function and also stream_select() to make a server that accepts more than one connections (can have many clients connected):<br />In master we hold all opened connections. Just before calling stream select we copy the array to $read and then pass it ot stream_select(). In case that we may read from at least one socket, $read will contain socket descriptors. $master is needed not to lose references to the opened connections we have.<br />stream_server.php : <br /><span class="default">&lt;?php<br /><br />$master </span><span class="keyword">= array();<br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">stream_socket_server</span><span class="keyword">(</span><span class="string">"tcp://0.0.0.0:8000"</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">);<br />if (!</span><span class="default">$socket</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)&lt;br /&gt;\n"</span><span class="keyword">;<br />} else {<br />    </span><span class="default">$master</span><span class="keyword">[] = </span><span class="default">$socket</span><span class="keyword">;<br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$master</span><span class="keyword">;<br />    while (</span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$master</span><span class="keyword">;<br />        </span><span class="default">$mod_fd </span><span class="keyword">= </span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$_w </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$_e </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br />        if (</span><span class="default">$mod_fd </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) {<br />            break;<br />        }<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$mod_fd</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">) {<br />            if (</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] === </span><span class="default">$socket</span><span class="keyword">) {<br />                </span><span class="default">$conn </span><span class="keyword">= </span><span class="default">stream_socket_accept</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"Hello! The time is "</span><span class="keyword">.</span><span class="default">date</span><span class="keyword">(</span><span class="string">"n/j/Y g:i a"</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">);<br />                </span><span class="default">$master</span><span class="keyword">[] = </span><span class="default">$conn</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$sock_data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br />                </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sock_data</span><span class="keyword">);<br />                if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$sock_data</span><span class="keyword">) === </span><span class="default">0</span><span class="keyword">) { </span><span class="comment">// connection closed<br />                    </span><span class="default">$key_to_del </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$master</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />                    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                    unset(</span><span class="default">$master</span><span class="keyword">[</span><span class="default">$key_to_del</span><span class="keyword">]);<br />                } else if (</span><span class="default">$sock_data </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) {<br />                    echo </span><span class="string">"Something bad happened"</span><span class="keyword">;<br />                    </span><span class="default">$key_to_del </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$master</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />                    unset(</span><span class="default">$master</span><span class="keyword">[</span><span class="default">$key_to_del</span><span class="keyword">]);<br />                } else {<br />                    echo </span><span class="string">"The client has sent :"</span><span class="keyword">; </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sock_data</span><span class="keyword">);<br />                    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="string">"You have sent :["</span><span class="keyword">.</span><span class="default">$sock_data</span><span class="keyword">.</span><span class="string">"]\n"</span><span class="keyword">);<br />                    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />                     unset(</span><span class="default">$master</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$master</span><span class="keyword">)]);<br />                }<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>stream_client.php:<br /><span class="default">&lt;?php<br />$fp </span><span class="keyword">= </span><span class="default">stream_socket_client</span><span class="keyword">(</span><span class="string">"tcp://127.0.0.1:8000"</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">30</span><span class="keyword">);<br />if (!</span><span class="default">$fp</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$errstr</span><span class="string"> (</span><span class="default">$errno</span><span class="string">)&lt;br /&gt;\n"</span><span class="keyword">;<br />} else {<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="string">"Aloha"</span><span class="keyword">);<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">));<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Thanks</span></code></div>
  </div>
 </div>
  <div class="note" id="95417">  <div class="votes">
    <div id="Vu95417">
    <a href="/manual/vote-note.php?id=95417&amp;page=function.stream-socket-server&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95417">
    <a href="/manual/vote-note.php?id=95417&amp;page=function.stream-socket-server&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95417" title="66% like this...">
    4
    </div>
  </div>
  <a href="#95417" class="name">
  <strong class="user"><em>peterjb at me dot com</em></strong></a><a class="genanchor" href="#95417"> &para;</a><div class="date" title="2010-01-02 03:48"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95417">
<div class="phpcode"><code><span class="html">I had a horrible time trying to shove a TLS socket into an existing TCP program.  It appears to me that functions like stream_socket_recvfrom and stream_socket_sendto don't work with TLS/SSL (which may be obvious to PHP gurus...sorry if it is, I'm in a bit over my head here).<br /><br />In the end I ended up doing all my IO with fread() and fwrite(), which solved all my problems.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.stream-socket-server&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.stream-socket-server.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.stream.php">Stream Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.stream-bucket-append.php" title="stream_&#8203;bucket_&#8203;append">stream_&#8203;bucket_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-make-writeable.php" title="stream_&#8203;bucket_&#8203;make_&#8203;writeable">stream_&#8203;bucket_&#8203;make_&#8203;writeable</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-new.php" title="stream_&#8203;bucket_&#8203;new">stream_&#8203;bucket_&#8203;new</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-bucket-prepend.php" title="stream_&#8203;bucket_&#8203;prepend">stream_&#8203;bucket_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-create.php" title="stream_&#8203;context_&#8203;create">stream_&#8203;context_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-default.php" title="stream_&#8203;context_&#8203;get_&#8203;default">stream_&#8203;context_&#8203;get_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-options.php" title="stream_&#8203;context_&#8203;get_&#8203;options">stream_&#8203;context_&#8203;get_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-get-params.php" title="stream_&#8203;context_&#8203;get_&#8203;params">stream_&#8203;context_&#8203;get_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-default.php" title="stream_&#8203;context_&#8203;set_&#8203;default">stream_&#8203;context_&#8203;set_&#8203;default</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-option.php" title="stream_&#8203;context_&#8203;set_&#8203;option">stream_&#8203;context_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-options.php" title="stream_&#8203;context_&#8203;set_&#8203;options">stream_&#8203;context_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-context-set-params.php" title="stream_&#8203;context_&#8203;set_&#8203;params">stream_&#8203;context_&#8203;set_&#8203;params</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-copy-to-stream.php" title="stream_&#8203;copy_&#8203;to_&#8203;stream">stream_&#8203;copy_&#8203;to_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-append.php" title="stream_&#8203;filter_&#8203;append">stream_&#8203;filter_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-prepend.php" title="stream_&#8203;filter_&#8203;prepend">stream_&#8203;filter_&#8203;prepend</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-register.php" title="stream_&#8203;filter_&#8203;register">stream_&#8203;filter_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-filter-remove.php" title="stream_&#8203;filter_&#8203;remove">stream_&#8203;filter_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-contents.php" title="stream_&#8203;get_&#8203;contents">stream_&#8203;get_&#8203;contents</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-filters.php" title="stream_&#8203;get_&#8203;filters">stream_&#8203;get_&#8203;filters</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-line.php" title="stream_&#8203;get_&#8203;line">stream_&#8203;get_&#8203;line</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-meta-data.php" title="stream_&#8203;get_&#8203;meta_&#8203;data">stream_&#8203;get_&#8203;meta_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-transports.php" title="stream_&#8203;get_&#8203;transports">stream_&#8203;get_&#8203;transports</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-get-wrappers.php" title="stream_&#8203;get_&#8203;wrappers">stream_&#8203;get_&#8203;wrappers</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-is-local.php" title="stream_&#8203;is_&#8203;local">stream_&#8203;is_&#8203;local</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-isatty.php" title="stream_&#8203;isatty">stream_&#8203;isatty</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-notification-callback.php" title="stream_&#8203;notification_&#8203;callback">stream_&#8203;notification_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-register-wrapper.php" title="stream_&#8203;register_&#8203;wrapper">stream_&#8203;register_&#8203;wrapper</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-resolve-include-path.php" title="stream_&#8203;resolve_&#8203;include_&#8203;path">stream_&#8203;resolve_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-select.php" title="stream_&#8203;select">stream_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-blocking.php" title="stream_&#8203;set_&#8203;blocking">stream_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-chunk-size.php" title="stream_&#8203;set_&#8203;chunk_&#8203;size">stream_&#8203;set_&#8203;chunk_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-read-buffer.php" title="stream_&#8203;set_&#8203;read_&#8203;buffer">stream_&#8203;set_&#8203;read_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-timeout.php" title="stream_&#8203;set_&#8203;timeout">stream_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-set-write-buffer.php" title="stream_&#8203;set_&#8203;write_&#8203;buffer">stream_&#8203;set_&#8203;write_&#8203;buffer</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-accept.php" title="stream_&#8203;socket_&#8203;accept">stream_&#8203;socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-client.php" title="stream_&#8203;socket_&#8203;client">stream_&#8203;socket_&#8203;client</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-enable-crypto.php" title="stream_&#8203;socket_&#8203;enable_&#8203;crypto">stream_&#8203;socket_&#8203;enable_&#8203;crypto</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-get-name.php" title="stream_&#8203;socket_&#8203;get_&#8203;name">stream_&#8203;socket_&#8203;get_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-pair.php" title="stream_&#8203;socket_&#8203;pair">stream_&#8203;socket_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-recvfrom.php" title="stream_&#8203;socket_&#8203;recvfrom">stream_&#8203;socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-sendto.php" title="stream_&#8203;socket_&#8203;sendto">stream_&#8203;socket_&#8203;sendto</a>
                        </li>
                                                <li class="current">
                            <a href="function.stream-socket-server.php" title="stream_&#8203;socket_&#8203;server">stream_&#8203;socket_&#8203;server</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-socket-shutdown.php" title="stream_&#8203;socket_&#8203;shutdown">stream_&#8203;socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-supports-lock.php" title="stream_&#8203;supports_&#8203;lock">stream_&#8203;supports_&#8203;lock</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-register.php" title="stream_&#8203;wrapper_&#8203;register">stream_&#8203;wrapper_&#8203;register</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-restore.php" title="stream_&#8203;wrapper_&#8203;restore">stream_&#8203;wrapper_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.stream-wrapper-unregister.php" title="stream_&#8203;wrapper_&#8203;unregister">stream_&#8203;wrapper_&#8203;unregister</a>
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
