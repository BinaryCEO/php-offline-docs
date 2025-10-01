<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Socket context options - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/context.socket.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/context.socket.php">
 <link rel="alternate" href="https://www.php.net/manual/en/context.socket.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/context.php">
 <link rel="prev" href="https://www.php.net/manual/en/context.php">
 <link rel="next" href="https://www.php.net/manual/en/context.http.php">

 <link rel="alternate" href="https://www.php.net/manual/en/context.socket.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/context.socket.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/context.socket.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/context.socket.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/context.socket.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/context.socket.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/context.socket.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/context.socket.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/context.socket.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/context.socket.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/context.socket.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Socket context option listing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Socket context options - Manual" />
<meta name="twitter:description" content="Socket context option listing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Socket context options - Manual" />
<meta itemprop="description" content="Socket context option listing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Socket context option listing" />

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
        <a href="context.http.php">
          HTTP context options &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="context.php">
          &laquo; Context options and parameters        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='context.php'>Context options and parameters</a></li>      </ul>
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
            <option value='en/context.socket.php' selected="selected">English</option>
            <option value='de/context.socket.php'>German</option>
            <option value='es/context.socket.php'>Spanish</option>
            <option value='fr/context.socket.php'>French</option>
            <option value='it/context.socket.php'>Italian</option>
            <option value='ja/context.socket.php'>Japanese</option>
            <option value='pt_BR/context.socket.php'>Brazilian Portuguese</option>
            <option value='ru/context.socket.php'>Russian</option>
            <option value='tr/context.socket.php'>Turkish</option>
            <option value='uk/context.socket.php'>Ukrainian</option>
            <option value='zh/context.socket.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="context.socket" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Socket context options</h1>
  <p class="refpurpose"><span class="refname">Socket context options</span> &mdash; <span class="dc-title">Socket context option listing</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-context.socket-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Socket context options are available for all wrappers that work over
   sockets, like <code class="literal">tcp</code>, <code class="literal">http</code> and
   <code class="literal">ftp</code>.
  </p>
 </div>


 <div class="refsect1 options" id="refsect1-context.socket-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <dl>
    
     <dt id="context.socket.bindto"><code class="parameter">bindto</code></dt>
     <dd>
      <p class="para">
       Used to specify the IP address (either IPv4 or IPv6) and/or the
       port number that PHP will use to access the network. The syntax
       is <code class="literal">ip:port</code> for IPv4 addresses, and
       <code class="literal">[ip]:port</code> for IPv6 addresses.
       Setting the IP or the port to <code class="literal">0</code> will let the system
       choose the IP and/or port.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        As FTP creates two socket connections during normal operation,
        the port number cannot be specified using this option.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="context.socket.backlog"><code class="parameter">backlog</code></dt>
     <dd>
      <p class="para">
       Used to  limit  the  number  of  outstanding  connections  in  the
       socket&#039;s  listen  queue.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        This is only applicable to <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="context.socket.ipv6_v6only"><code class="parameter">ipv6_v6only</code></dt>
     <dd>
      <p class="para">
       Overrides the OS default regarding mapping IPv4 into IPv6.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        This is important in particular when trying to listen on IPv4 addresses
        separately while there exists a binding on <code class="literal">[::]</code>.
       </p>
       <p class="para">
        This is only applicable to <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="context.socket.so_reuseport"><code class="parameter">so_reuseport</code></dt>
     <dd>
      <p class="para">
       Allows multiple bindings to a same ip:port pair, even from separate processes.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        This is only applicable to <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="context.socket.so_broadcast"><code class="parameter">so_broadcast</code></dt>
     <dd>
      <p class="para">
       Enables sending and receiving data to/from broadcast addresses.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        This is only applicable to <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt id="context.socket.tcp_nodelay"><code class="parameter">tcp_nodelay</code></dt>
     <dd>
      <p class="para">
       Setting this option to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> will set <code class="literal">SOL_TCP,NO_DELAY=1</code>
       appropriately, thus disabling the TCP Nagle algorithm.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-context.socket-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.1.0</td>
       <td>
        Added <code class="parameter">tcp_nodelay</code>.
       </td>
      </tr>

      <tr>
       <td>7.0.1</td>
       <td>
        Added <code class="parameter">ipv6_v6only</code>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-context.socket-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="context.socket.example-bindto">
    <p><strong>Example #1 Basic <code class="parameter">bindto</code> usage example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// connect to the internet using the '192.168.0.100' IP<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'socket' </span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">'bindto' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'192.168.0.100:0'</span><span style="color: #007700">,<br />    ),<br />);<br /><br /><br /></span><span style="color: #FF8000">// connect to the internet using the '192.168.0.100' IP and port '7000'<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'socket' </span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">'bindto' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'192.168.0.100:7000'</span><span style="color: #007700">,<br />    ),<br />);<br /><br /><br /></span><span style="color: #FF8000">// connect to the internet using the '2001:db8::1' IPv6 address<br />// and port '7000'<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'socket' </span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">'bindto' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'[2001:db8::1]:7000'</span><span style="color: #007700">,<br />    ),<br />);<br /><br /><br /></span><span style="color: #FF8000">// connect to the internet using port '7000'<br /></span><span style="color: #0000BB">$opts </span><span style="color: #007700">= array(<br />    </span><span style="color: #DD0000">'socket' </span><span style="color: #007700">=&gt; array(<br />        </span><span style="color: #DD0000">'bindto' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'0:7000'</span><span style="color: #007700">,<br />    ),<br />);<br /><br /><br /></span><span style="color: #FF8000">// create the context...<br /></span><span style="color: #0000BB">$context </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">(</span><span style="color: #0000BB">$opts</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// ...and use it to fetch the data<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$context</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/context/socket.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontext.socket%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=context.socket&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.socket.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123707">  <div class="votes">
    <div id="Vu123707">
    <a href="/manual/vote-note.php?id=123707&amp;page=context.socket&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123707">
    <a href="/manual/vote-note.php?id=123707&amp;page=context.socket&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123707" title="72% like this...">
    11
    </div>
  </div>
  <a href="#123707" class="name">
  <strong class="user"><em>mix at ater dot me</em></strong></a><a class="genanchor" href="#123707"> &para;</a><div class="date" title="2019-03-19 05:18"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123707">
<div class="phpcode"><code><span class="html">The right way for forcing IPv6 is 'bindto' =&gt; '[::]:0'</span></code></div>
  </div>
 </div>
  <div class="note" id="118209">  <div class="votes">
    <div id="Vu118209">
    <a href="/manual/vote-note.php?id=118209&amp;page=context.socket&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118209">
    <a href="/manual/vote-note.php?id=118209&amp;page=context.socket&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118209" title="55% like this...">
    5
    </div>
  </div>
  <a href="#118209" class="name">
  <strong class="user"><em>guru at jnt-finland dot fi</em></strong></a><a class="genanchor" href="#118209"> &para;</a><div class="date" title="2015-10-26 03:54"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118209">
<div class="phpcode"><code><span class="html">You can set "bindto" to "0:0" to force use IPv4 instead of IPv6. And probably "[0]:0" to force use IPv6, thou this I couldn't test.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=context.socket&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.socket.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="context.php">Context options and parameters</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="context.socket.php" title="Socket context options">Socket context options</a>
                        </li>
                                                <li class="">
                            <a href="context.http.php" title="HTTP context options">HTTP context options</a>
                        </li>
                                                <li class="">
                            <a href="context.ftp.php" title="FTP context options">FTP context options</a>
                        </li>
                                                <li class="">
                            <a href="context.ssl.php" title="SSL context options">SSL context options</a>
                        </li>
                                                <li class="">
                            <a href="context.phar.php" title="Phar context options">Phar context options</a>
                        </li>
                                                <li class="">
                            <a href="context.params.php" title="Context parameters">Context parameters</a>
                        </li>
                                                <li class="">
                            <a href="context.zip.php" title="Zip context options">Zip context options</a>
                        </li>
                                                <li class="">
                            <a href="context.zlib.php" title="Zlib context options">Zlib context options</a>
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
