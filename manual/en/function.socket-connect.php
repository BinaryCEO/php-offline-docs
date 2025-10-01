<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-connect.php">
 <link rel="shorturl" href="https://www.php.net/socket-connect">
 <link rel="alternate" href="https://www.php.net/socket-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-cmsg-space.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initiates a connection on a socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_connect - Manual" />
<meta name="twitter:description" content="Initiates a connection on a socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_connect - Manual" />
<meta itemprop="description" content="Initiates a connection on a socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initiates a connection on a socket" />

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
        <a href="function.socket-create.php">
          socket_create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-cmsg-space.php">
          &laquo; socket_cmsg_space        </a>
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
            <option value='en/function.socket-connect.php' selected="selected">English</option>
            <option value='de/function.socket-connect.php'>German</option>
            <option value='es/function.socket-connect.php'>Spanish</option>
            <option value='fr/function.socket-connect.php'>French</option>
            <option value='it/function.socket-connect.php'>Italian</option>
            <option value='ja/function.socket-connect.php'>Japanese</option>
            <option value='pt_BR/function.socket-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-connect.php'>Russian</option>
            <option value='tr/function.socket-connect.php'>Turkish</option>
            <option value='uk/function.socket-connect.php'>Ukrainian</option>
            <option value='zh/function.socket-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_connect</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_connect</span> &mdash; <span class="dc-title">Initiates a connection on a socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_connect</strong></span>(<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$address</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$port</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Initiate a connection to <code class="parameter">address</code> using the <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance
   <code class="parameter">socket</code>, which must be <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span>
   instance created with <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance created with
       <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">address</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">address</code> parameter is either an IPv4 address
       in dotted-quad notation (e.g. <code class="literal">127.0.0.1</code>) if 
       <code class="parameter">socket</code> is <strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong>, a valid 
       IPv6 address (e.g. <code class="literal">::1</code>) if IPv6 support is enabled and 
       <code class="parameter">socket</code> is <strong><code><a href="sockets.constants.php#constant.af-inet6">AF_INET6</a></code></strong>
       or the pathname of a Unix domain socket, if the socket family is
       <strong><code><a href="sockets.constants.php#constant.af-unix">AF_UNIX</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">port</code> parameter is only used and is mandatory
       when connecting to an <strong><code><a href="sockets.constants.php#constant.af-inet">AF_INET</a></code></strong> or an 
       <strong><code><a href="sockets.constants.php#constant.af-inet6">AF_INET6</a></code></strong> socket, and designates
       the port on the remote host to which a connection should be made.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure. The error code can be retrieved with
   <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>. This code may be passed to
   <span class="function"><a href="function.socket-strerror.php" class="function">socket_strerror()</a></span> to get a textual explanation of the
   error.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If the socket is non-blocking then this function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> with an
    error <code class="literal">Operation now in progress</code>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-connect-changelog">
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
   <code class="parameter">socket</code> is a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance now;
   previously, it was a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
  </td>
 </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">port</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-bind.php" class="function" rel="rdfs-seeAlso">socket_bind()</a> - Binds a name to a socket</span></li>
    <li><span class="function"><a href="function.socket-listen.php" class="function" rel="rdfs-seeAlso">socket_listen()</a> - Listens for a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-create.php" class="function" rel="rdfs-seeAlso">socket_create()</a> - Create a socket (endpoint for communication)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="33512">  <div class="votes">
    <div id="Vu33512">
    <a href="/manual/vote-note.php?id=33512&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33512">
    <a href="/manual/vote-note.php?id=33512&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33512" title="66% like this...">
    9
    </div>
  </div>
  <a href="#33512" class="name">
  <strong class="user"><em>w at ff dot st</em></strong></a><a class="genanchor" href="#33512"> &para;</a><div class="date" title="2003-06-28 02:20"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33512">
<div class="phpcode"><code><span class="html">man page for connect :<br /> EINPROGRESS<br />The socket is non-blocking and the connection cannot be completed immediately.  It is possible to select(2) or poll(2) for completion by selecting the socket for writing. After select indicates  writability,  use  getsockopt(2)  to read the SO_ERROR option at level SOL_SOCKET to determine whether connect completed successfully (SO_ERROR is zero) or unsuccessfully (SO_ERROR is one of the usual error codes listed here, explaining the reason for the failure).<br /><br />use socket_getoption($socket,SOL_SOCKET,SO_ERROR) . If you get value 115, it is connecting. If you get value different than 115 and 0, that means that an error has occured (see what error with socket_strerror()).<br /><br />However, I don't know how does that works under Windows, maybe it wont work at all. It is supposed to work under Linux (man pages said that).</span></code></div>
  </div>
 </div>
  <div class="note" id="31701">  <div class="votes">
    <div id="Vu31701">
    <a href="/manual/vote-note.php?id=31701&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31701">
    <a href="/manual/vote-note.php?id=31701&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31701" title="55% like this...">
    5
    </div>
  </div>
  <a href="#31701" class="name">
  <strong class="user"><em>greg at mtechsolutions dot ca</em></strong></a><a class="genanchor" href="#31701"> &para;</a><div class="date" title="2003-04-30 02:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31701">
<div class="phpcode"><code><span class="html">If you're using non-blocking, be sure not to turn it on until after you connect, otherwise you will get the mesasge:<br /><br />PHP Warning:  socket_connect() unable to connect [115]: Operation now in progress in file.php on line 123<br /><br />and socket_connect() will return false (even though it will connect).</span></code></div>
  </div>
 </div>
  <div class="note" id="120981">  <div class="votes">
    <div id="Vu120981">
    <a href="/manual/vote-note.php?id=120981&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120981">
    <a href="/manual/vote-note.php?id=120981&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120981" title="66% like this...">
    1
    </div>
  </div>
  <a href="#120981" class="name">
  <strong class="user"><em>tacapi at canela dot com</em></strong></a><a class="genanchor" href="#120981"> &para;</a><div class="date" title="2017-04-13 12:35"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120981">
<div class="phpcode"><code><span class="html">Just a heads up guys: make sure you're passing a properly formatted IP to your ping and socket functions.<br /><br />E.g.: 192.168.0.18 -&gt; OK<br />      192.168.0.018 -&gt; Will result in "Unkwown host"<br /><br />I was getting a 11004 error and could not solve it until I realized that was the problem.<br /><br />(Pode ser que seja útil para alguém: verifique que o IP passado por parâmetro para o seu ping e funções socket é um endereço de IP corretamente formatado)</span></code></div>
  </div>
 </div>
  <div class="note" id="93310">  <div class="votes">
    <div id="Vu93310">
    <a href="/manual/vote-note.php?id=93310&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93310">
    <a href="/manual/vote-note.php?id=93310&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93310" title="57% like this...">
    3
    </div>
  </div>
  <a href="#93310" class="name">
  <strong class="user"><em>jerrywilborn at gmail dot com</em></strong></a><a class="genanchor" href="#93310"> &para;</a><div class="date" title="2009-09-02 09:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93310">
<div class="phpcode"><code><span class="html">This will print the banner from a true 'telnet' server (router, switch, host, etc).<br /><br />$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);<br />socket_connect($socket, '127.0.0.1', 23);<br /><br />while (TRUE) {<br />        $r = array($socket);<br />        $c = socket_select($r, $w = NULL, $e = NULL, 5);<br /><br />        foreach ($r as $read_socket) {<br />                if ($r = negotiate($read_socket)) {<br />                        var_dump($r);<br />                        exit;<br />                }<br />        }<br />}<br /><br />function negotiate ($socket) {<br />        socket_recv($socket, $buffer, 1024, 0);<br /><br />        for ($chr = 0; $chr &lt; strlen($buffer); $chr++) {<br />                if ($buffer[$chr] == chr(255)) {<br /><br />                        $send = (isset($send) ? $send . $buffer[$chr] : $buffer[$chr]);<br /><br />                        $chr++;<br />                        if (in_array($buffer[$chr], array(chr(251), chr(252)))) $send .= chr(254);<br />                        if (in_array($buffer[$chr], array(chr(253), chr(254)))) $send .= chr(252);<br /><br />                        $chr++;<br />                        $send .= $buffer[$chr];<br />                } else {<br />                        break;<br />                }<br />        }<br /><br />        if (isset($send)) socket_send($socket, $send, strlen($send), 0);<br />        if ($chr - 1 &lt; strlen($buffer)) return substr($buffer, $chr);<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="103492">  <div class="votes">
    <div id="Vu103492">
    <a href="/manual/vote-note.php?id=103492&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103492">
    <a href="/manual/vote-note.php?id=103492&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103492" title="56% like this...">
    3
    </div>
  </div>
  <a href="#103492" class="name">
  <strong class="user"><em>Cedar Myers</em></strong></a><a class="genanchor" href="#103492"> &para;</a><div class="date" title="2011-04-15 10:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103492">
<div class="phpcode"><code><span class="html">It seems that timeout values can be specified by setting the SO_SNDTIMEO option before calling socket_connect():
<br />
<br /><span class="default">&lt;?php
<br />socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_SNDTIMEO</span><span class="keyword">, array(</span><span class="string">'sec' </span><span class="keyword">=&gt; </span><span class="default">$seconds</span><span class="keyword">, </span><span class="string">'usec' </span><span class="keyword">=&gt; </span><span class="default">$milliseconds</span><span class="keyword">));
<br /></span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">)</span><span class="comment">//...
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85795">  <div class="votes">
    <div id="Vu85795">
    <a href="/manual/vote-note.php?id=85795&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85795">
    <a href="/manual/vote-note.php?id=85795&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85795" title="60% like this...">
    2
    </div>
  </div>
  <a href="#85795" class="name">
  <strong class="user"><em>maganap</em></strong></a><a class="genanchor" href="#85795"> &para;</a><div class="date" title="2008-09-18 12:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85795">
<div class="phpcode"><code><span class="html">Hi there!<br /><br />For the TCP connections: socket_create(AF_INET, SOCK_STREAM, SOL_TCP);<br />In case you're having problems in socket_connect() with socket_strerror() = "Permission denied", you may be having a SELinux config issue.<br /><br />Check if SELinux is enabled:<br /># /usr/sbin/sestatus -v<br />In case it is, you can just type the command:<br /># setsebool httpd_can_network_connect=1<br /><br />That's it... I read you had to reboot, but I didn't and it worked fine anyway. More info, you may check:<br /><a href="http://arkiv.netbsd.se/?ml=squirrelmail-users&amp;a=2005-11&amp;t=1523021" rel="nofollow" target="_blank">http://arkiv.netbsd.se/?ml=squirrelmail-users&amp;a=2005-11&amp;t=1523021</a></span></code></div>
  </div>
 </div>
  <div class="note" id="90286">  <div class="votes">
    <div id="Vu90286">
    <a href="/manual/vote-note.php?id=90286&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90286">
    <a href="/manual/vote-note.php?id=90286&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90286" title="58% like this...">
    2
    </div>
  </div>
  <a href="#90286" class="name">
  <strong class="user"><em>vshih at yahoo</em></strong></a><a class="genanchor" href="#90286"> &para;</a><div class="date" title="2009-04-14 12:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90286">
<div class="phpcode"><code><span class="html">rbarnes' tip is helpful, but I found that I needed to add a check for SOCKET_EISCONN in the while loop:<br /><br />    ...<br />    $error = socket_last_error();<br /><br />    if ($error == SOCKET_EISCONN) {<br />        $connected = true;<br />        break;<br />    }<br />    ...<br /><br />At least on Mac OS X 10.5.</span></code></div>
  </div>
 </div>
  <div class="note" id="84465">  <div class="votes">
    <div id="Vu84465">
    <a href="/manual/vote-note.php?id=84465&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84465">
    <a href="/manual/vote-note.php?id=84465&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84465" title="57% like this...">
    2
    </div>
  </div>
  <a href="#84465" class="name">
  <strong class="user"><em>rbarnes at fake dot com</em></strong></a><a class="genanchor" href="#84465"> &para;</a><div class="date" title="2008-07-15 10:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84465">
<div class="phpcode"><code><span class="html">Here is an example of a non-blocking connect which should perform quite a bit faster than the one posted by Seymour below:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">msConnectSocket</span><span class="keyword">(</span><span class="default">$remote</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">) {
<br />        </span><span class="comment"># this works whether $remote is a hostname or IP
<br />        </span><span class="default">$ip </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        if( !</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^\d+\.\d+\.\d+\.\d+$/'</span><span class="keyword">, </span><span class="default">$remote</span><span class="keyword">) ) {
<br />            </span><span class="default">$ip </span><span class="keyword">= </span><span class="default">gethostbyname</span><span class="keyword">(</span><span class="default">$remote</span><span class="keyword">);
<br />            if (</span><span class="default">$ip </span><span class="keyword">== </span><span class="default">$remote</span><span class="keyword">) {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Error Connecting Socket: Unknown host"</span><span class="keyword">;
<br />                return </span><span class="default">NULL</span><span class="keyword">;
<br />            }
<br />        } else </span><span class="default">$ip </span><span class="keyword">= </span><span class="default">$remote</span><span class="keyword">;
<br />
<br />        if (!(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK </span><span class="keyword">= @</span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">))) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Error Creating Socket: "</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">());
<br />            return </span><span class="default">NULL</span><span class="keyword">;
<br />        }
<br />
<br />        </span><span class="default">socket_set_nonblock</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK</span><span class="keyword">);
<br />
<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;
<br />        </span><span class="default">$attempts </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$timeout </span><span class="keyword">*= </span><span class="default">1000</span><span class="keyword">;  </span><span class="comment">// adjust because we sleeping in 1 millisecond increments
<br />        </span><span class="default">$connected</span><span class="keyword">;
<br />        while (!(</span><span class="default">$connected </span><span class="keyword">= @</span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK</span><span class="keyword">, </span><span class="default">$remote</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">+</span><span class="default">0</span><span class="keyword">)) &amp;&amp; </span><span class="default">$attempts</span><span class="keyword">++ &lt; </span><span class="default">$timeout</span><span class="keyword">) {
<br />            </span><span class="default">$error </span><span class="keyword">= </span><span class="default">socket_last_error</span><span class="keyword">();
<br />            if (</span><span class="default">$error </span><span class="keyword">!= </span><span class="default">SOCKET_EINPROGRESS </span><span class="keyword">&amp;&amp; </span><span class="default">$error </span><span class="keyword">!= </span><span class="default">SOCKET_EALREADY</span><span class="keyword">) {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Error Connecting Socket: "</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">);
<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK</span><span class="keyword">);
<br />                return </span><span class="default">NULL</span><span class="keyword">;
<br />            }
<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">);
<br />        }
<br />
<br />        if (!</span><span class="default">$connected</span><span class="keyword">) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">errstr </span><span class="keyword">= </span><span class="string">"Error Connecting Socket: Connect Timed Out After </span><span class="default">$timeout</span><span class="string"> seconds. "</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">());
<br />            </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK</span><span class="keyword">);
<br />            return </span><span class="default">NULL</span><span class="keyword">;
<br />        }
<br />        
<br />        </span><span class="default">socket_set_block</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_SOCK</span><span class="keyword">);
<br />
<br />        return </span><span class="default">1</span><span class="keyword">;      
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94350">  <div class="votes">
    <div id="Vu94350">
    <a href="/manual/vote-note.php?id=94350&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94350">
    <a href="/manual/vote-note.php?id=94350&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94350" title="52% like this...">
    1
    </div>
  </div>
  <a href="#94350" class="name">
  <strong class="user"><em>peter at videoripper dot org</em></strong></a><a class="genanchor" href="#94350"> &para;</a><div class="date" title="2009-10-29 11:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94350">
<div class="phpcode"><code><span class="html">This will give you a simple port-checker.<br /><br />Note that on production-machines, you might want to alter the error reporting-level, <br />since unsuccessful connects will give you a "No connection could be made because <br />the target machine actively refused it"-error in the log.<br /><br />Under Windows, make sure you enable the php_sockets.dll extension in your php.ini.<br /><br /><span class="default">&lt;?php  <br />  $address</span><span class="keyword">=</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">];<br />  <br />  if (isset(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">]) and<br />      (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">])==</span><span class="default">0</span><span class="keyword">))<br />    </span><span class="default">$port</span><span class="keyword">=</span><span class="default">$_REQUEST</span><span class="keyword">[</span><span class="string">'port'</span><span class="keyword">];<br />  else<br />    unset(</span><span class="default">$port</span><span class="keyword">);<br />    <br />  if (isset(</span><span class="default">$port</span><span class="keyword">) and<br />      (</span><span class="default">$socket</span><span class="keyword">=</span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">)) and<br />      (</span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">)))<br />    {<br />      </span><span class="default">$text</span><span class="keyword">=</span><span class="string">"Connection successful on IP </span><span class="default">$address</span><span class="string">, port </span><span class="default">$port</span><span class="string">"</span><span class="keyword">;<br />      </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />    }<br />  else<br />    </span><span class="default">$text</span><span class="keyword">=</span><span class="string">"Unable to connect&lt;pre&gt;"</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()).</span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />    <br />  echo </span><span class="string">"&lt;html&gt;&lt;head&gt;&lt;/head&gt;&lt;body&gt;"</span><span class="keyword">.<br />       </span><span class="default">$text</span><span class="keyword">.<br />       </span><span class="string">"&lt;/body&gt;&lt;/html&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Greetz,<br /><br />Peter.</span></code></div>
  </div>
 </div>
  <div class="note" id="101909">  <div class="votes">
    <div id="Vu101909">
    <a href="/manual/vote-note.php?id=101909&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101909">
    <a href="/manual/vote-note.php?id=101909&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101909" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101909" class="name">
  <strong class="user"><em>thewanderer</em></strong></a><a class="genanchor" href="#101909"> &para;</a><div class="date" title="2011-01-17 10:55"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101909">
<div class="phpcode"><code><span class="html">Note that as of PHP5.3 it is not possible to send IPv6 multicast to link-local addresses, because socket_connect() is just a trimmed-down version of connect() and does not support passing sin6_scope_id - the scope ID is required when sending packets to ff02::1 (all-nodes), for example.<br />At first I thought I needed to bind the socket to the device using SO_BINDTODEVICE option (undefined constant in PHP - use numeric value 25), but it makes no difference, only requires root privileges to produce no usable results.<br />Also, if you think you are sending multicast packets to link local addresses just because socket_sendto() returns a positive number of bytes, you might be wrong - just returning success does not mean that packets are sent over any link at all. In my test case I was sending to ff02::1, I could detect no errors, but Wireshark showed no packets. They end up in void.<br />This is irrelevant to the handling of local reception sockets, so UDP listeners should still work as usual with IPv6/UDP. You might want to resort to C for implementing multicasters, though.</span></code></div>
  </div>
 </div>
  <div class="note" id="36223">  <div class="votes">
    <div id="Vu36223">
    <a href="/manual/vote-note.php?id=36223&amp;page=function.socket-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36223">
    <a href="/manual/vote-note.php?id=36223&amp;page=function.socket-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36223" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#36223" class="name">
  <strong class="user"><em>seymour@itsyourdomain</em></strong></a><a class="genanchor" href="#36223"> &para;</a><div class="date" title="2003-10-01 12:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36223">
<div class="phpcode"><code><span class="html">here's how you can implement timeouts with the socket functions. <br /><br />this example works for blocking sockets but will work for both blocking and nonblocking with minor modifications. first call to connect in nonblocking mode returns 115 EINPROGRESS, additional calls return 114 EALREADY if the connection has not already failed or succeeded. once the connection succeeds, the socket resource will be returned.<br /><br />&lt;?<br />    $host = "127.0.0.1";<br />    $port = "80";<br />    $timeout = 15;  //timeout in seconds<br /><br />    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)<br />      or die("Unable to create socket\n");<br /><br />    socket_set_nonblock($socket)<br />      or die("Unable to set nonblock on socket\n");<br /><br />    $time = time();<br />    while (!@socket_connect($socket, $host, $port))<br />    {<br />      $err = socket_last_error($socket);<br />      if ($err == 115 || $err == 114)<br />      {<br />        if ((time() - $time) &gt;= $timeout)<br />        {<br />          socket_close($socket);<br />          die("Connection timed out.\n");<br />        }<br />        sleep(1);<br />        continue;<br />      }<br />      die(socket_strerror($err) . "\n");<br />    }<br /><br />    socket_set_block($this-&gt;socket)<br />      or die("Unable to set block on socket\n");<br />?&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-connect.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.socket-connect.php" title="socket_&#8203;connect">socket_&#8203;connect</a>
                        </li>
                                                <li class="">
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
