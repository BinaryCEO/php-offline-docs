<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_create - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-create.php">
 <link rel="shorturl" href="https://www.php.net/socket-create">
 <link rel="alternate" href="https://www.php.net/socket-create" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-connect.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-create-listen.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-create.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-create.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-create.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-create.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-create.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-create.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-create.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-create.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-create.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-create.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-create.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a socket (endpoint for communication)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_create - Manual" />
<meta name="twitter:description" content="Create a socket (endpoint for communication)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_create - Manual" />
<meta itemprop="description" content="Create a socket (endpoint for communication)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a socket (endpoint for communication)" />

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
        <a href="function.socket-create-listen.php">
          socket_create_listen &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-connect.php">
          &laquo; socket_connect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.sockets.php'>Sockets</a></li>      <li><a href='ref.sockets.php'>Socket Functions</a></li>      </ul>
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
            <option value='en/function.socket-create.php' selected="selected">English</option>
            <option value='de/function.socket-create.php'>German</option>
            <option value='es/function.socket-create.php'>Spanish</option>
            <option value='fr/function.socket-create.php'>French</option>
            <option value='it/function.socket-create.php'>Italian</option>
            <option value='ja/function.socket-create.php'>Japanese</option>
            <option value='pt_BR/function.socket-create.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-create.php'>Russian</option>
            <option value='tr/function.socket-create.php'>Turkish</option>
            <option value='uk/function.socket-create.php'>Ukrainian</option>
            <option value='zh/function.socket-create.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-create" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_create</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_create</span> &mdash; <span class="dc-title">Create a socket (endpoint for communication)</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-create-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_create</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$domain</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$protocol</code></span>): <span class="type"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates and returns a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance, also referred to as an endpoint
   of communication. A typical network connection is made up of 2 sockets, one
   performing the role of the client, and another performing the role of the server.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-create-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">domain</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">domain</code> parameter specifies the protocol
       family to be used by the socket.
      </p>
      <table class="doctable table">
       <caption><strong>Available address/protocol families</strong></caption>
       
        <thead>
         <tr>
          <th>Domain</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong></td>
          <td>
           IPv4 Internet based protocols. TCP and UDP are common protocols of
           this protocol family.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.af-inet6">AF_INET6</a></code></strong></td>
          <td>
           IPv6 Internet based protocols. TCP and UDP are common protocols of
           this protocol family.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.af-unix">AF_UNIX</a></code></strong></td>
          <td>
           Local communication protocol family. High efficiency and low
           overhead make it a great form of IPC (Interprocess Communication).
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">type</code> parameter selects the type of communication
       to be used by the socket.
      </p>
      <table class="doctable table">
       <caption><strong>Available socket types</strong></caption>
       
        <thead>
         <tr>
          <th>Type</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></code></strong></td>
          <td>
           Provides sequenced, reliable, full-duplex, connection-based byte streams.
           An out-of-band data transmission mechanism may be supported.
           The TCP protocol is based on this socket type.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sock-dgram">SOCK_DGRAM</a></code></strong></td>
          <td>
           Supports datagrams (connectionless, unreliable messages of a fixed maximum length).
           The UDP protocol is based on this socket type.
          </td>
         </tr>

           <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sock-seqpacket">SOCK_SEQPACKET</a></code></strong></td>
          <td>
           Provides a sequenced, reliable, two-way connection-based data transmission path for
           datagrams of fixed maximum length;  a consumer is required to read an
           entire packet with each read call.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sock-raw">SOCK_RAW</a></code></strong></td>
          <td>
           Provides raw network protocol access. This special type of socket
           can be used to manually construct any type of protocol. A common use
           for this socket type is to perform ICMP requests (like ping).
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sock-rdm">SOCK_RDM</a></code></strong></td>
          <td>
           Provides a reliable datagram layer that does not guarantee ordering.
           This is most likely not implemented on your operating system.
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
    
     <dt><code class="parameter">protocol</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">protocol</code> parameter sets the specific
       protocol within the specified <code class="parameter">domain</code> to be used
       when communicating on the returned socket. The proper value can be
       retrieved by name by using <span class="function"><a href="function.getprotobyname.php" class="function">getprotobyname()</a></span>. If
       the desired protocol is TCP, or UDP the corresponding constants
       <strong><code><a href="sockets.constants.php#constant.sol-tcp">SOL_TCP</a></code></strong>, and <strong><code><a href="sockets.constants.php#constant.sol-udp">SOL_UDP</a></code></strong>
       can also be used.
      </p>
      <table class="doctable table">
       <caption><strong>Common protocols</strong></caption>
       
        <thead>
         <tr>
          <th>Name</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td>icmp</td>
          <td>
           The Internet Control Message Protocol is used primarily by gateways
           and hosts to report errors in datagram communication. The &quot;ping&quot;
           command (present in most modern operating systems) is an example
           application of ICMP.
          </td>
         </tr>

         <tr>
          <td>udp</td>
          <td>
           The User Datagram Protocol is a connectionless, unreliable,
           protocol with fixed record lengths. Due to these aspects, UDP
           requires a minimum amount of protocol overhead.
          </td>
         </tr>

         <tr>
          <td>tcp</td>
          <td>
           The Transmission Control Protocol is a reliable, connection based,
           stream oriented, full duplex protocol. TCP guarantees that all data packets
           will be received in the order in which they were sent. If any packet is somehow
           lost during communication, TCP will automatically retransmit the packet until
           the destination host acknowledges that packet. For reliability and performance
           reasons, the TCP implementation itself decides the appropriate octet boundaries
           of the underlying datagram communication layer. Therefore, TCP applications must
           allow for the possibility of partial record transmission.
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-create-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>socket_create()</strong></span> returns a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance on success,
   or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error. The actual error code can be retrieved by calling
   <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>. This error code may be passed to
   <span class="function"><a href="function.socket-strerror.php" class="function">socket_strerror()</a></span> to get a textual explanation of the
   error.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.socket-create-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an invalid <code class="parameter">domain</code> or
   <code class="parameter">type</code> is given, <span class="function"><strong>socket_create()</strong></span>
   defaults to <strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong> and
   <strong><code><a href="sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></code></strong> respectively and additionally emits an
   <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> message.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-create-changelog">
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
       On success, this function returns a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-create-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-accept.php" class="function" rel="rdfs-seeAlso">socket_accept()</a> - Accepts a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-bind.php" class="function" rel="rdfs-seeAlso">socket_bind()</a> - Binds a name to a socket</span></li>
    <li><span class="function"><a href="function.socket-connect.php" class="function" rel="rdfs-seeAlso">socket_connect()</a> - Initiates a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-listen.php" class="function" rel="rdfs-seeAlso">socket_listen()</a> - Listens for a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-last-error.php" class="function" rel="rdfs-seeAlso">socket_last_error()</a> - Returns the last error on the socket</span></li>
    <li><span class="function"><a href="function.socket-strerror.php" class="function" rel="rdfs-seeAlso">socket_strerror()</a> - Return a string describing a socket error</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-create.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-create%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-create.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="58257">  <div class="votes">
    <div id="Vu58257">
    <a href="/manual/vote-note.php?id=58257&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58257">
    <a href="/manual/vote-note.php?id=58257&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58257" title="61% like this...">
    46
    </div>
  </div>
  <a href="#58257" class="name">
  <strong class="user"><em>kyle gibson</em></strong></a><a class="genanchor" href="#58257"> &para;</a><div class="date" title="2005-10-28 05:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58257">
<div class="phpcode"><code><span class="html">Took me about 20 minutes to figure out the proper arguments to supply for a AF_UNIX socket. Anything else, and I would get a PHP warning about the 'type' not being supported. I hope this saves someone else time.<br /><br /><span class="default">&lt;?php <br />$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_UNIX</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="comment">// code<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93415">  <div class="votes">
    <div id="Vu93415">
    <a href="/manual/vote-note.php?id=93415&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93415">
    <a href="/manual/vote-note.php?id=93415&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93415" title="63% like this...">
    12
    </div>
  </div>
  <a href="#93415" class="name">
  <strong class="user"><em>rhollencamp at gmail dot com</em></strong></a><a class="genanchor" href="#93415"> &para;</a><div class="date" title="2009-09-08 09:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93415">
<div class="phpcode"><code><span class="html">Note that if you create a socket with AF_UNIX, a file will be created in the filesystem. This file is not removed when you call socket_close - you should unlink the file after you close the socket.</span></code></div>
  </div>
 </div>
  <div class="note" id="108535">  <div class="votes">
    <div id="Vu108535">
    <a href="/manual/vote-note.php?id=108535&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108535">
    <a href="/manual/vote-note.php?id=108535&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108535" title="58% like this...">
    9
    </div>
  </div>
  <a href="#108535" class="name">
  <strong class="user"><em>ab1965 at yandex dot ru</em></strong></a><a class="genanchor" href="#108535"> &para;</a><div class="date" title="2012-05-04 12:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108535">
<div class="phpcode"><code><span class="html">It took some time to understand how one PHP process can communicate with another by means of unix udp sockets. Examples of 'server' and 'client' code are given below. Server is assumed to run before client starts.<br /><br />'Server' code<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="string">'sockets'</span><span class="keyword">)) {<br />    die(</span><span class="string">'The sockets extension is not loaded.'</span><span class="keyword">);<br />}<br /></span><span class="comment">// create unix udp socket<br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_UNIX</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />if (!</span><span class="default">$socket</span><span class="keyword">)<br />        die(</span><span class="string">'Unable to create AF_UNIX socket'</span><span class="keyword">);<br /><br /></span><span class="comment">// same socket will be used in recv_from and send_to<br /></span><span class="default">$server_side_sock </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">"/server.sock"</span><span class="keyword">;<br />if (!</span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$server_side_sock</span><span class="keyword">))<br />        die(</span><span class="string">"Unable to bind to </span><span class="default">$server_side_sock</span><span class="string">"</span><span class="keyword">);<br /><br />while(</span><span class="default">1</span><span class="keyword">) </span><span class="comment">// server never exits<br /></span><span class="keyword">{<br /></span><span class="comment">// receive query<br /></span><span class="keyword">if (!</span><span class="default">socket_set_block</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">))<br />        die(</span><span class="string">'Unable to set blocking mode for socket'</span><span class="keyword">);<br /></span><span class="default">$buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$from </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />echo </span><span class="string">"Ready to receive...\n"</span><span class="keyword">;<br /></span><span class="comment">// will block to wait client query<br /></span><span class="default">$bytes_received </span><span class="keyword">= </span><span class="default">socket_recvfrom</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">, </span><span class="default">65536</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">);<br />if (</span><span class="default">$bytes_received </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">)<br />        die(</span><span class="string">'An error occured while receiving from the socket'</span><span class="keyword">);<br />echo </span><span class="string">"Received </span><span class="default">$buf</span><span class="string"> from </span><span class="default">$from</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="default">$buf </span><span class="keyword">.= </span><span class="string">"-&gt;Response"</span><span class="keyword">; </span><span class="comment">// process client query here<br /><br />// send response<br /></span><span class="keyword">if (!</span><span class="default">socket_set_nonblock</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">))<br />        die(</span><span class="string">'Unable to set nonblocking mode for socket'</span><span class="keyword">);<br /></span><span class="comment">// client side socket filename is known from client request: $from<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">);<br /></span><span class="default">$bytes_sent </span><span class="keyword">= </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">);<br />if (</span><span class="default">$bytes_sent </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">)<br />        die(</span><span class="string">'An error occured while sending to the socket'</span><span class="keyword">);<br />else if (</span><span class="default">$bytes_sent </span><span class="keyword">!= </span><span class="default">$len</span><span class="keyword">)<br />        die(</span><span class="default">$bytes_sent </span><span class="keyword">. </span><span class="string">' bytes have been sent instead of the ' </span><span class="keyword">. </span><span class="default">$len </span><span class="keyword">. </span><span class="string">' bytes expected'</span><span class="keyword">);<br />echo </span><span class="string">"Request processed\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />'Client' code<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">extension_loaded</span><span class="keyword">(</span><span class="string">'sockets'</span><span class="keyword">)) {<br />    die(</span><span class="string">'The sockets extension is not loaded.'</span><span class="keyword">);<br />}<br /></span><span class="comment">// create unix udp socket<br /></span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_UNIX</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />if (!</span><span class="default">$socket</span><span class="keyword">)<br />        die(</span><span class="string">'Unable to create AF_UNIX socket'</span><span class="keyword">);<br /><br /></span><span class="comment">// same socket will be later used in recv_from<br />// no binding is required if you wish only send and never receive<br /></span><span class="default">$client_side_sock </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">"/client.sock"</span><span class="keyword">;<br />if (!</span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$client_side_sock</span><span class="keyword">))<br />        die(</span><span class="string">"Unable to bind to </span><span class="default">$client_side_sock</span><span class="string">"</span><span class="keyword">);<br /><br /></span><span class="comment">// use socket to send data<br /></span><span class="keyword">if (!</span><span class="default">socket_set_nonblock</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">))<br />        die(</span><span class="string">'Unable to set nonblocking mode for socket'</span><span class="keyword">);<br /></span><span class="comment">// server side socket filename is known apriori<br /></span><span class="default">$server_side_sock </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">__FILE__</span><span class="keyword">).</span><span class="string">"/server.sock"</span><span class="keyword">;<br /></span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"Message"</span><span class="keyword">;<br /></span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">);<br /></span><span class="comment">// at this point 'server' process must be running and bound to receive from serv.sock<br /></span><span class="default">$bytes_sent </span><span class="keyword">= </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$server_side_sock</span><span class="keyword">);<br />if (</span><span class="default">$bytes_sent </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">)<br />        die(</span><span class="string">'An error occured while sending to the socket'</span><span class="keyword">);<br />else if (</span><span class="default">$bytes_sent </span><span class="keyword">!= </span><span class="default">$len</span><span class="keyword">)<br />        die(</span><span class="default">$bytes_sent </span><span class="keyword">. </span><span class="string">' bytes have been sent instead of the ' </span><span class="keyword">. </span><span class="default">$len </span><span class="keyword">. </span><span class="string">' bytes expected'</span><span class="keyword">);<br /><br /></span><span class="comment">// use socket to receive data<br /></span><span class="keyword">if (!</span><span class="default">socket_set_block</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">))<br />        die(</span><span class="string">'Unable to set blocking mode for socket'</span><span class="keyword">);<br /></span><span class="default">$buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$from </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="comment">// will block to wait server response<br /></span><span class="default">$bytes_received </span><span class="keyword">= </span><span class="default">socket_recvfrom</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">, </span><span class="default">65536</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$from</span><span class="keyword">);<br />if (</span><span class="default">$bytes_received </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">)<br />        die(</span><span class="string">'An error occured while receiving from the socket'</span><span class="keyword">);<br />echo </span><span class="string">"Received </span><span class="default">$buf</span><span class="string"> from </span><span class="default">$from</span><span class="string">\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// close socket and delete own .sock file<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /></span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$client_side_sock</span><span class="keyword">);<br />echo </span><span class="string">"Client exits\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101012">  <div class="votes">
    <div id="Vu101012">
    <a href="/manual/vote-note.php?id=101012&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101012">
    <a href="/manual/vote-note.php?id=101012&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101012" title="53% like this...">
    5
    </div>
  </div>
  <a href="#101012" class="name">
  <strong class="user"><em>geoff at spacevs dot com</em></strong></a><a class="genanchor" href="#101012"> &para;</a><div class="date" title="2010-11-20 01:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101012">
<div class="phpcode"><code><span class="html">Here is a ping function for PHP without using exec/system/passthrough/etc... Very useful to use to just test if a host is online before attempting to connect to it. Timeout is in seconds.<br /><br /><span class="default">&lt;?PHP<br />        </span><span class="keyword">function </span><span class="default">ping</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {<br />                </span><span class="comment">/* ICMP ping packet with a pre-calculated checksum */<br />                </span><span class="default">$package </span><span class="keyword">= </span><span class="string">"\x08\x00\x7d\x4b\x00\x00\x00\x00PingHost"</span><span class="keyword">;<br />                </span><span class="default">$socket  </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />                </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_RCVTIMEO</span><span class="keyword">, array(</span><span class="string">'sec' </span><span class="keyword">=&gt; </span><span class="default">$timeout</span><span class="keyword">, </span><span class="string">'usec' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">));<br />                </span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);<br /><br />                </span><span class="default">$ts </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />                </span><span class="default">socket_send</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$package</span><span class="keyword">, </span><span class="default">strLen</span><span class="keyword">(</span><span class="default">$package</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">);<br />                if (</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">))<br />                        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$ts</span><span class="keyword">;<br />                else    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br />                return </span><span class="default">$result</span><span class="keyword">;<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80775">  <div class="votes">
    <div id="Vu80775">
    <a href="/manual/vote-note.php?id=80775&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80775">
    <a href="/manual/vote-note.php?id=80775&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80775" title="51% like this...">
    1
    </div>
  </div>
  <a href="#80775" class="name">
  <strong class="user"><em>Jean Charles MAMMANA</em></strong></a><a class="genanchor" href="#80775"> &para;</a><div class="date" title="2008-01-31 04:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80775">
<div class="phpcode"><code><span class="html">I've written the ping() function using socket_create() with SOCK_RAW.<br />(on Unix System, you need to have the root acces to execute this function)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/// start ping.inc.php ///<br /><br /></span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"No Error"</span><span class="keyword">;<br /><br /></span><span class="comment">// timeout in ms<br /></span><span class="keyword">function </span><span class="default">ping</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">)<br />{<br />        </span><span class="default">$port </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        </span><span class="default">$datasize </span><span class="keyword">= </span><span class="default">64</span><span class="keyword">;<br />        global </span><span class="default">$g_icmp_error</span><span class="keyword">;<br />        </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"No Error"</span><span class="keyword">;<br />        </span><span class="default">$ident </span><span class="keyword">= array(</span><span class="default">ord</span><span class="keyword">(</span><span class="string">'J'</span><span class="keyword">), </span><span class="default">ord</span><span class="keyword">(</span><span class="string">'C'</span><span class="keyword">));<br />        </span><span class="default">$seq   </span><span class="keyword">= array(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">), </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">));<br /><br />     </span><span class="default">$packet </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />     </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">8</span><span class="keyword">); </span><span class="comment">// type = 8 : request<br />     </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// code = 0<br /><br />     </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// checksum init<br />     </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// checksum init<br /><br />        </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$ident</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">// identifier<br />        </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$ident</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); </span><span class="comment">// identifier<br /><br />        </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$seq</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="comment">// seq<br />        </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$seq</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); </span><span class="comment">// seq<br /><br />        </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$datasize</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />                </span><span class="default">$packet </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />        </span><span class="default">$chk </span><span class="keyword">= </span><span class="default">icmpChecksum</span><span class="keyword">(</span><span class="default">$packet</span><span class="keyword">);<br /><br />        </span><span class="default">$packet</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">$chk</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">// checksum init<br />        </span><span class="default">$packet</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] = </span><span class="default">$chk</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; </span><span class="comment">// checksum init<br /><br />        </span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">,  </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'icmp'</span><span class="keyword">));<br />        </span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br />    </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$packet</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$packet</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />    <br /><br />    </span><span class="default">$read   </span><span class="keyword">= array(</span><span class="default">$sock</span><span class="keyword">);<br />        </span><span class="default">$write  </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /><br />        </span><span class="default">$select </span><span class="keyword">= </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">* </span><span class="default">1000</span><span class="keyword">);<br />        if (</span><span class="default">$select </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">)<br />        {<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Select Error"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br />        elseif (</span><span class="default">$select </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">)<br />        {<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Timeout"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br /><br />    </span><span class="default">$recv </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$time_stop </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">();<br />    </span><span class="default">socket_recvfrom</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$recv</span><span class="keyword">, </span><span class="default">65535</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />        </span><span class="default">$recv </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'C*'</span><span class="keyword">, </span><span class="default">$recv</span><span class="keyword">);<br />        <br />        if (</span><span class="default">$recv</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] !== </span><span class="default">1</span><span class="keyword">) </span><span class="comment">// ICMP proto = 1<br />        </span><span class="keyword">{<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Not ICMP packet"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">$recv</span><span class="keyword">[</span><span class="default">21</span><span class="keyword">] !== </span><span class="default">0</span><span class="keyword">) </span><span class="comment">// ICMP response = 0<br />        </span><span class="keyword">{<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Not ICMP response"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">$ident</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] !== </span><span class="default">$recv</span><span class="keyword">[</span><span class="default">25</span><span class="keyword">] || </span><span class="default">$ident</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] !== </span><span class="default">$recv</span><span class="keyword">[</span><span class="default">26</span><span class="keyword">])<br />        {<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Bad identification number"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br />        <br />        if (</span><span class="default">$seq</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] !== </span><span class="default">$recv</span><span class="keyword">[</span><span class="default">27</span><span class="keyword">] || </span><span class="default">$seq</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] !== </span><span class="default">$recv</span><span class="keyword">[</span><span class="default">28</span><span class="keyword">])<br />        {<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Bad sequence number"</span><span class="keyword">;<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />                return -</span><span class="default">1</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$ms </span><span class="keyword">= (</span><span class="default">$time_stop </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">) * </span><span class="default">1000</span><span class="keyword">;<br />        <br />        if (</span><span class="default">$ms </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)<br />        {<br />                </span><span class="default">$g_icmp_error </span><span class="keyword">= </span><span class="string">"Response too long"</span><span class="keyword">;<br />                </span><span class="default">$ms </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /><br />        return </span><span class="default">$ms</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">icmpChecksum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)<br />{<br />        </span><span class="default">$bit </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br />        </span><span class="default">$sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$bit</span><span class="keyword">);<br /><br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) % </span><span class="default">2</span><span class="keyword">) {<br />                </span><span class="default">$temp </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'C*'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">[</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">]);<br />                </span><span class="default">$sum </span><span class="keyword">+= </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        }<br /><br />        </span><span class="default">$sum </span><span class="keyword">= (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) + (</span><span class="default">$sum </span><span class="keyword">&amp; </span><span class="default">0xffff</span><span class="keyword">);<br />        </span><span class="default">$sum </span><span class="keyword">+= (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">);<br /><br />        return </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, ~</span><span class="default">$sum</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">getLastIcmpError</span><span class="keyword">()<br />{<br />        global </span><span class="default">$g_icmp_error</span><span class="keyword">;<br />        return </span><span class="default">$g_icmp_error</span><span class="keyword">;<br />}<br /></span><span class="comment">/// end ping.inc.php ///<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81938">  <div class="votes">
    <div id="Vu81938">
    <a href="/manual/vote-note.php?id=81938&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81938">
    <a href="/manual/vote-note.php?id=81938&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81938" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#81938" class="name">
  <strong class="user"><em>alexander dot krause at ed-solutions dot de</em></strong></a><a class="genanchor" href="#81938"> &para;</a><div class="date" title="2008-03-20 12:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81938">
<div class="phpcode"><code><span class="html">On UNIX systems php needs /etc/protocols for constants like SOL_UDP and SOL_TCP.<br /><br />This file was missing on my embedded platform.</span></code></div>
  </div>
 </div>
  <div class="note" id="68709">  <div class="votes">
    <div id="Vu68709">
    <a href="/manual/vote-note.php?id=68709&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68709">
    <a href="/manual/vote-note.php?id=68709&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68709" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#68709" class="name">
  <strong class="user"><em>jens at surefoot dot com</em></strong></a><a class="genanchor" href="#68709"> &para;</a><div class="date" title="2006-08-08 05:46"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68709">
<div class="phpcode"><code><span class="html">Please be aware that RAW sockets (as used for the ping example) are restricted to root accounts on *nix systems. Since web servers hardly ever run as root, they won't work on webpages.<br /><br />On Windows based servers it should work regardless.</span></code></div>
  </div>
 </div>
  <div class="note" id="43057">  <div class="votes">
    <div id="Vu43057">
    <a href="/manual/vote-note.php?id=43057&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43057">
    <a href="/manual/vote-note.php?id=43057&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43057" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#43057" class="name">
  <strong class="user"><em>david at eder dot us</em></strong></a><a class="genanchor" href="#43057"> &para;</a><div class="date" title="2004-06-08 08:07"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43057">
<div class="phpcode"><code><span class="html">Seems there aren't any examples of UDP clients out there.  This is a tftp client.  I hope this makes someone's life easier.<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">tftp_fetch</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">)<br />  {<br />    </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);<br /><br />    </span><span class="comment">// create the request packet<br />    </span><span class="default">$packet </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) . </span><span class="default">$filename </span><span class="keyword">. </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) . </span><span class="string">'octet' </span><span class="keyword">. </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />    </span><span class="comment">// UDP is connectionless, so we just send on it.<br />    </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$packet</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$packet</span><span class="keyword">), </span><span class="default">0x100</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">69</span><span class="keyword">);<br /><br />    </span><span class="default">$buffer </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    do<br />    {<br />      </span><span class="comment">// $buffer and $port both come back with information for the ack<br />      // 516 = 4 bytes for the header + 512 bytes of data<br />      </span><span class="default">socket_recvfrom</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$buffer</span><span class="keyword">, </span><span class="default">516</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br /><br />      </span><span class="comment">// add the block number from the data packet to the ack packet<br />      </span><span class="default">$packet </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">) . </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br />      </span><span class="comment">// send ack<br />      </span><span class="default">socket_sendto</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$packet</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$packet</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br /><br />      </span><span class="comment">// append the data to the return variable<br />      // for large files this function should take a file handle as an arg<br />      </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />    }<br />    while(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">) == </span><span class="default">516</span><span class="keyword">);  </span><span class="comment">// the first non-full packet is the last.<br />    </span><span class="keyword">return </span><span class="default">$ret</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60438">  <div class="votes">
    <div id="Vu60438">
    <a href="/manual/vote-note.php?id=60438&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60438">
    <a href="/manual/vote-note.php?id=60438&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60438" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#60438" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#60438"> &para;</a><div class="date" title="2006-01-06 02:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60438">
<div class="phpcode"><code><span class="html">Here's a ping function that uses sockets instead of exec().  Note: I was unable to get socket_create() to work without running from CLI as root.  I've already calculated the package's checksum to simplify the code (the message is 'ping' but it doesn't actually matter).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">ping</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">) {<br />    </span><span class="default">$package </span><span class="keyword">= </span><span class="string">"\x08\x00\x19\x2f\x00\x00\x00\x00\x70\x69\x6e\x67"</span><span class="keyword">;<br /><br />    </span><span class="comment">/* create the socket, the last '1' denotes ICMP */    <br />    </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    <br />    </span><span class="comment">/* set socket receive timeout to 1 second */<br />    </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_RCVTIMEO</span><span class="keyword">, array(</span><span class="string">"sec" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"usec" </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">));<br />    <br />    </span><span class="comment">/* connect to socket */<br />    </span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$host</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">);<br />    <br />    </span><span class="comment">/* record start time */<br />    </span><span class="keyword">list(</span><span class="default">$start_usec</span><span class="keyword">, </span><span class="default">$start_sec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />    </span><span class="default">$start_time </span><span class="keyword">= ((float) </span><span class="default">$start_usec </span><span class="keyword">+ (float) </span><span class="default">$start_sec</span><span class="keyword">);<br />    <br />    </span><span class="default">socket_send</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$package</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$package</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">);<br />    <br />    if(@</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">)) {<br />        list(</span><span class="default">$end_usec</span><span class="keyword">, </span><span class="default">$end_sec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />        </span><span class="default">$end_time </span><span class="keyword">= ((float) </span><span class="default">$end_usec </span><span class="keyword">+ (float) </span><span class="default">$end_sec</span><span class="keyword">);<br />    <br />        </span><span class="default">$total_time </span><span class="keyword">= </span><span class="default">$end_time </span><span class="keyword">- </span><span class="default">$start_time</span><span class="keyword">;<br />        <br />        return </span><span class="default">$total_time</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="19075">  <div class="votes">
    <div id="Vu19075">
    <a href="/manual/vote-note.php?id=19075&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19075">
    <a href="/manual/vote-note.php?id=19075&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19075" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#19075" class="name">
  <strong class="user"><em>evan at coeus hyphen group dot com</em></strong></a><a class="genanchor" href="#19075"> &para;</a><div class="date" title="2002-02-14 06:33"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19075">
<div class="phpcode"><code><span class="html">Okay I talked with Richard a little (via e-mail). We agree that getprotobyname() and using the constants should be the same in functionality and speed, the use of one or the other is merely coding style. Personally, we both think the constants are prettier :).<br /><br />The eight different protocols are the ones implemented in PHP- not the total number in existance (RFC 1340 has 98).<br /><br />All we disagree on is using 0- Richard says that "accordning to the official unix/bsd sockets 0 is more than fine." I think that since 0 is a reserved number according to RFC 1320, and when used usually refers to IP, not one of it's sub-protocols (TCP, UDP, etc.)</span></code></div>
  </div>
 </div>
  <div class="note" id="120174">  <div class="votes">
    <div id="Vu120174">
    <a href="/manual/vote-note.php?id=120174&amp;page=function.socket-create&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120174">
    <a href="/manual/vote-note.php?id=120174&amp;page=function.socket-create&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120174" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#120174" class="name">
  <strong class="user"><em>Sakrizz</em></strong></a><a class="genanchor" href="#120174"> &para;</a><div class="date" title="2016-11-16 10:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120174">
<div class="phpcode"><code><span class="html">Here's a solution for icmpv6 ping with php, dropping it here in case if someone has problems with icmpv6 with php.<br /><br /><span class="default">&lt;?php<br />$host </span><span class="keyword">= </span><span class="string">"2a03:2880:f11b:83:face:b00c:0:25de"</span><span class="keyword">;<br /></span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">100000</span><span class="keyword">;<br /></span><span class="default">$count </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />echo </span><span class="string">"Latency: "</span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">1000 </span><span class="keyword">* </span><span class="default">pingv6</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">),</span><span class="default">5</span><span class="keyword">) .</span><span class="string">" ms \n"</span><span class="keyword">;<br /><br />function </span><span class="default">pingv6</span><span class="keyword">(</span><span class="default">$target</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">) {<br />    echo </span><span class="string">"target is ipv6 address, "</span><span class="keyword">. </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'ipv6-icmp'</span><span class="keyword">). </span><span class="string">" \n"</span><span class="keyword">;<br />    </span><span class="comment">/* create the socket, the last '1' denotes ICMP */<br />    </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET6</span><span class="keyword">, </span><span class="default">SOCK_RAW</span><span class="keyword">, </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'ipv6-icmp'</span><span class="keyword">));<br />    </span><span class="comment">/* set socket receive timeout to 1 second */<br />    </span><span class="default">$sec</span><span class="keyword">=</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$timeout</span><span class="keyword">/</span><span class="default">1000</span><span class="keyword">);<br />    </span><span class="default">$usec</span><span class="keyword">=</span><span class="default">$timeout</span><span class="keyword">%</span><span class="default">1000</span><span class="keyword">*</span><span class="default">1000</span><span class="keyword">;<br />    </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_RCVTIMEO</span><span class="keyword">, array(</span><span class="string">"sec"</span><span class="keyword">=&gt;</span><span class="default">$sec</span><span class="keyword">, </span><span class="string">"usec"</span><span class="keyword">=&gt;</span><span class="default">$usec</span><span class="keyword">));<br />    </span><span class="comment">/* socket package parameters */<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"\x80"</span><span class="keyword">;<br />    </span><span class="default">$seqNumber </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">/</span><span class="default">256</span><span class="keyword">)%</span><span class="default">256</span><span class="keyword">) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">%</span><span class="default">256</span><span class="keyword">);<br />    </span><span class="default">$checksum</span><span class="keyword">= </span><span class="string">"\x00\x00"</span><span class="keyword">;<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="string">"\x00"</span><span class="keyword">;<br />    </span><span class="default">$identifier </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">)) . </span><span class="default">chr</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">255</span><span class="keyword">));<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"!\"#$%&amp;'()*+,-./1234567"</span><span class="keyword">;<br />    </span><span class="default">$package </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">.</span><span class="default">$checksum</span><span class="keyword">.</span><span class="default">$identifier</span><span class="keyword">.</span><span class="default">$seqNumber</span><span class="keyword">.</span><span class="default">$msg</span><span class="keyword">;<br />        </span><span class="default">$checksum </span><span class="keyword">= </span><span class="default">icmpChecksum</span><span class="keyword">(</span><span class="default">$package</span><span class="keyword">);<br />        </span><span class="default">$package </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">.</span><span class="default">$checksum</span><span class="keyword">.</span><span class="default">$identifier</span><span class="keyword">.</span><span class="default">$seqNumber</span><span class="keyword">.</span><span class="default">$msg</span><span class="keyword">;<br />    </span><span class="comment">/* socket connect */<br />    </span><span class="keyword">if(@</span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">)){<br />        for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />                list(</span><span class="default">$start_usec</span><span class="keyword">, </span><span class="default">$start_sec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />                </span><span class="default">$start_time </span><span class="keyword">= ((float) </span><span class="default">$start_usec </span><span class="keyword">+ (float) </span><span class="default">$start_sec</span><span class="keyword">);<br />                </span><span class="default">$startTime </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />                </span><span class="default">socket_send</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$package</span><span class="keyword">, </span><span class="default">strLen</span><span class="keyword">(</span><span class="default">$package</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">);<br />                while (</span><span class="default">$startTime </span><span class="keyword">+ </span><span class="default">$timeout</span><span class="keyword">*</span><span class="default">1000 </span><span class="keyword">&gt; </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)){<br />                        if(</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">255</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />                                list(</span><span class="default">$end_usec</span><span class="keyword">, </span><span class="default">$end_sec</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">microtime</span><span class="keyword">());<br />                                </span><span class="default">$end_time </span><span class="keyword">= ((float) </span><span class="default">$end_usec </span><span class="keyword">+ (float) </span><span class="default">$end_sec</span><span class="keyword">);<br />                                </span><span class="default">$total_time </span><span class="keyword">= </span><span class="default">$end_time </span><span class="keyword">- </span><span class="default">$start_time</span><span class="keyword">;<br />                                echo </span><span class="string">"round trip time ("</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">"): "</span><span class="keyword">. </span><span class="default">$total_time </span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />                                return </span><span class="default">$total_time</span><span class="keyword">;<br />                                break;<br />                        }else{<br />                                return </span><span class="string">"null"</span><span class="keyword">;<br />                                echo </span><span class="string">"Timed out ("</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">"), Got no echo reply\n"</span><span class="keyword">;<br />                                break;<br />                        }<br />                }<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$interval</span><span class="keyword">*</span><span class="default">1000</span><span class="keyword">);<br />        }<br />        </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />    }<br />}<br /><br />function </span><span class="default">icmpChecksum</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">){<br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)%</span><span class="default">2</span><span class="keyword">) </span><span class="default">$data </span><span class="keyword">.= </span><span class="string">"\x00"</span><span class="keyword">;<br /></span><span class="default">$bit </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">$sum </span><span class="keyword">= </span><span class="default">array_sum</span><span class="keyword">(</span><span class="default">$bit</span><span class="keyword">);<br />while (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">)<br />  </span><span class="default">$sum </span><span class="keyword">= (</span><span class="default">$sum </span><span class="keyword">&gt;&gt; </span><span class="default">16</span><span class="keyword">) + (</span><span class="default">$sum </span><span class="keyword">&amp; </span><span class="default">0xffff</span><span class="keyword">);<br />return </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'n*'</span><span class="keyword">, ~</span><span class="default">$sum</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-create&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-create.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sockets.php">Socket Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.socket-accept.php" title="socket_&#8203;accept">socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-bind.php" title="socket_&#8203;addrinfo_&#8203;bind">socket_&#8203;addrinfo_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-connect.php" title="socket_&#8203;addrinfo_&#8203;connect">socket_&#8203;addrinfo_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-explain.php" title="socket_&#8203;addrinfo_&#8203;explain">socket_&#8203;addrinfo_&#8203;explain</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-lookup.php" title="socket_&#8203;addrinfo_&#8203;lookup">socket_&#8203;addrinfo_&#8203;lookup</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-atmark.php" title="socket_&#8203;atmark">socket_&#8203;atmark</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-bind.php" title="socket_&#8203;bind">socket_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-clear-error.php" title="socket_&#8203;clear_&#8203;error">socket_&#8203;clear_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-close.php" title="socket_&#8203;close">socket_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-cmsg-space.php" title="socket_&#8203;cmsg_&#8203;space">socket_&#8203;cmsg_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-connect.php" title="socket_&#8203;connect">socket_&#8203;connect</a>
                        </li>
                                                <li class="current">
                            <a href="function.socket-create.php" title="socket_&#8203;create">socket_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-listen.php" title="socket_&#8203;create_&#8203;listen">socket_&#8203;create_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-pair.php" title="socket_&#8203;create_&#8203;pair">socket_&#8203;create_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-export-stream.php" title="socket_&#8203;export_&#8203;stream">socket_&#8203;export_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-option.php" title="socket_&#8203;get_&#8203;option">socket_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getopt.php" title="socket_&#8203;getopt">socket_&#8203;getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getpeername.php" title="socket_&#8203;getpeername">socket_&#8203;getpeername</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getsockname.php" title="socket_&#8203;getsockname">socket_&#8203;getsockname</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-import-stream.php" title="socket_&#8203;import_&#8203;stream">socket_&#8203;import_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-last-error.php" title="socket_&#8203;last_&#8203;error">socket_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-listen.php" title="socket_&#8203;listen">socket_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-read.php" title="socket_&#8203;read">socket_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recv.php" title="socket_&#8203;recv">socket_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvfrom.php" title="socket_&#8203;recvfrom">socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvmsg.php" title="socket_&#8203;recvmsg">socket_&#8203;recvmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-select.php" title="socket_&#8203;select">socket_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-send.php" title="socket_&#8203;send">socket_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendmsg.php" title="socket_&#8203;sendmsg">socket_&#8203;sendmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendto.php" title="socket_&#8203;sendto">socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-block.php" title="socket_&#8203;set_&#8203;block">socket_&#8203;set_&#8203;block</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-nonblock.php" title="socket_&#8203;set_&#8203;nonblock">socket_&#8203;set_&#8203;nonblock</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-option.php" title="socket_&#8203;set_&#8203;option">socket_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-setopt.php" title="socket_&#8203;setopt">socket_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-shutdown.php" title="socket_&#8203;shutdown">socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-strerror.php" title="socket_&#8203;strerror">socket_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-write.php" title="socket_&#8203;write">socket_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-export.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;export">socket_&#8203;wsaprotocol_&#8203;info_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-import.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;import">socket_&#8203;wsaprotocol_&#8203;info_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-release.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;release">socket_&#8203;wsaprotocol_&#8203;info_&#8203;release</a>
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
