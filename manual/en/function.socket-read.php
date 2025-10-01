<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_read - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-read.php">
 <link rel="shorturl" href="https://www.php.net/socket-read">
 <link rel="alternate" href="https://www.php.net/socket-read" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-listen.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-recv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-read.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-read.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-read.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-read.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-read.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-read.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-read.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-read.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-read.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-read.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-read.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Reads a maximum of length bytes from a socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_read - Manual" />
<meta name="twitter:description" content="Reads a maximum of length bytes from a socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_read - Manual" />
<meta itemprop="description" content="Reads a maximum of length bytes from a socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Reads a maximum of length bytes from a socket" />

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
        <a href="function.socket-recv.php">
          socket_recv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-listen.php">
          &laquo; socket_listen        </a>
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
            <option value='en/function.socket-read.php' selected="selected">English</option>
            <option value='de/function.socket-read.php'>German</option>
            <option value='es/function.socket-read.php'>Spanish</option>
            <option value='fr/function.socket-read.php'>French</option>
            <option value='it/function.socket-read.php'>Italian</option>
            <option value='ja/function.socket-read.php'>Japanese</option>
            <option value='pt_BR/function.socket-read.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-read.php'>Russian</option>
            <option value='tr/function.socket-read.php'>Turkish</option>
            <option value='uk/function.socket-read.php'>Ukrainian</option>
            <option value='zh/function.socket-read.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-read" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_read</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_read</span> &mdash; <span class="dc-title">Reads a maximum of length bytes from a socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-read-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_read</strong></span>(<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="sockets.constants.php#constant.php-binary-read">PHP_BINARY_READ</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The function <span class="function"><strong>socket_read()</strong></span> reads from the <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance
   <code class="parameter">socket</code> created by the
   <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span> or
   <span class="function"><a href="function.socket-accept.php" class="function">socket_accept()</a></span> functions. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-read-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance created with <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>
       or <span class="function"><a href="function.socket-accept.php" class="function">socket_accept()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The maximum number of bytes read is specified by the
       <code class="parameter">length</code> parameter. Otherwise you can use
       <code class="literal">\r</code>, <code class="literal">\n</code>,
       or <code class="literal">\0</code> to end reading (depending on the <code class="parameter">mode</code>
       parameter, see below).
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Optional <code class="parameter">mode</code> parameter is a named constant:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="sockets.constants.php#constant.php-binary-read">PHP_BINARY_READ</a></code></strong> (Default) - use the system
          <code class="literal">recv()</code> function. Safe for reading binary data.
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          <strong><code><a href="sockets.constants.php#constant.php-normal-read">PHP_NORMAL_READ</a></code></strong> - reading stops at
          <code class="literal">\n</code> or <code class="literal">\r</code>.
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-read-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>socket_read()</strong></span> returns the data as a string on success,
   or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error (including if the remote host has closed the
   connection). The error code can be retrieved with
   <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>. This code may be passed to
   <span class="function"><a href="function.socket-strerror.php" class="function">socket_strerror()</a></span> to get a textual representation of
   the error.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>socket_read()</strong></span> returns a zero length string (&quot;&quot;)
    when there is no more data to read.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-read-changelog">
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

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-read-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-accept.php" class="function" rel="rdfs-seeAlso">socket_accept()</a> - Accepts a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-bind.php" class="function" rel="rdfs-seeAlso">socket_bind()</a> - Binds a name to a socket</span></li>
    <li><span class="function"><a href="function.socket-connect.php" class="function" rel="rdfs-seeAlso">socket_connect()</a> - Initiates a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-listen.php" class="function" rel="rdfs-seeAlso">socket_listen()</a> - Listens for a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-last-error.php" class="function" rel="rdfs-seeAlso">socket_last_error()</a> - Returns the last error on the socket</span></li>
    <li><span class="function"><a href="function.socket-strerror.php" class="function" rel="rdfs-seeAlso">socket_strerror()</a> - Return a string describing a socket error</span></li>
    <li><span class="function"><a href="function.socket-write.php" class="function" rel="rdfs-seeAlso">socket_write()</a> - Write to a socket</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-read.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-read%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-read.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115903">  <div class="votes">
    <div id="Vu115903">
    <a href="/manual/vote-note.php?id=115903&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115903">
    <a href="/manual/vote-note.php?id=115903&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115903" title="75% like this...">
    32
    </div>
  </div>
  <a href="#115903" class="name">
  <strong class="user"><em>cottton at i-stats dot net</em></strong></a><a class="genanchor" href="#115903"> &para;</a><div class="date" title="2014-10-12 09:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115903">
<div class="phpcode"><code><span class="html">quote:<br />"Note:<br />socket_read() returns a zero length string ("") when there is no more data to read."<br /><br />This is not true!<br /><br />In a while loop  <br />(example case few bytes to receive - just enough for 1 call, but you use a loop to be sure you received all data)<br />if you use <br />&lt;? socket_set_block($socket); ?&gt;<br />you will get:<br />1st call in loop: data<br />2nd call in loop: a block forever, if there isnt data anymore or w/e happen to the "other side"<br /><br />So ofc you want to use <br />&lt;? socket_set_nonblock($socket); ?&gt;<br />and you will get:<br />1st call in loop: data<br />2nd call in loop: socket_read() returns FALSE (bool) and socket_last_error() gives you a SOCKET_EWOULDBLOCK (<a href="http://de1.php.net/manual/de/sockets.constants.php" rel="nofollow" target="_blank">http://de1.php.net/manual/de/sockets.constants.php</a>)<br /><br />There is not a single time i got a empty string back from socket_read.<br />And im "working" on this problem(bug?) since a week or so.<br /><br />You better use socket_recv() instead.<br />(good luck)</span></code></div>
  </div>
 </div>
  <div class="note" id="25456">  <div class="votes">
    <div id="Vu25456">
    <a href="/manual/vote-note.php?id=25456&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25456">
    <a href="/manual/vote-note.php?id=25456&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25456" title="80% like this...">
    3
    </div>
  </div>
  <a href="#25456" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#25456"> &para;</a><div class="date" title="2002-09-24 11:48"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25456">
<div class="phpcode"><code><span class="html">Windows telnet sends/recieves one character at a time. Try adding PHP_NORMAL_READ to the end of socket_read, that might help.</span></code></div>
  </div>
 </div>
  <div class="note" id="75747">  <div class="votes">
    <div id="Vu75747">
    <a href="/manual/vote-note.php?id=75747&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75747">
    <a href="/manual/vote-note.php?id=75747&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75747" title="68% like this...">
    6
    </div>
  </div>
  <a href="#75747" class="name">
  <strong class="user"><em>nuitari-php at nuitari dot net</em></strong></a><a class="genanchor" href="#75747"> &para;</a><div class="date" title="2007-06-13 11:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75747">
<div class="phpcode"><code><span class="html">PHP_NORMAL_READ - reading stops at \n or \r.<br /><br />This seems to be meant literally.<br />If there is a \r, then it will stop reading, even if there is a \n right after it. You have to call the read again just to get rid of the \n.</span></code></div>
  </div>
 </div>
  <div class="note" id="72922">  <div class="votes">
    <div id="Vu72922">
    <a href="/manual/vote-note.php?id=72922&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72922">
    <a href="/manual/vote-note.php?id=72922&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72922" title="70% like this...">
    4
    </div>
  </div>
  <a href="#72922" class="name">
  <strong class="user"><em>dotpointer</em></strong></a><a class="genanchor" href="#72922"> &para;</a><div class="date" title="2007-02-04 03:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72922">
<div class="phpcode"><code><span class="html">PHP 5.2.0 / Win32 / Apache 1.3 - It seems like...<br /><br />PHP_BINARY_READ - works, but returns '', not FALSE...<br />- is blocking, until data received or connection closed<br />- does pass-through \r\n etc.<br />- returns data on data, '' on connection closed<br />- you can detect closed connection by checking for '' (not FALSE as stated i manual)<br /><br />PHP_NORMAL_READ - not working so good...<br />- is non-blocking<br />- does not pass-through \r\n etc.<br />- returns false on no-data, false on connection closed :(<br />- (no way here to detect a closed connection...?)<br />- (is this a bug? <a href="http://bugs.php.net/bug.php?id=21880" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=21880</a> )<br />- (is this a bug? <a href="http://bugs.php.net/bug.php?id=21197" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=21197</a> )<br />- (could not get data from this option at all in fact...)<br /><br />PHP_BINARY_READ seems to be the "right way to go" <br />for now. Both checking for '' and false to detect closed <br />connection is probably smart, as this "bug"(?) may <br />be fixed...</span></code></div>
  </div>
 </div>
  <div class="note" id="124492">  <div class="votes">
    <div id="Vu124492">
    <a href="/manual/vote-note.php?id=124492&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124492">
    <a href="/manual/vote-note.php?id=124492&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124492" title="66% like this...">
    2
    </div>
  </div>
  <a href="#124492" class="name">
  <strong class="user"><em>d dot bergloev at gmail dot com</em></strong></a><a class="genanchor" href="#124492"> &para;</a><div class="date" title="2019-12-07 10:04"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124492">
<div class="phpcode"><code><span class="html">Binary read is the correct way to read data in most cases, whereas "normal read", is a strange and lazy PHP built mode, that works mostly with terminal data. <br /><br />If you want to keep track of closed connections with binary read, the correct way is NOT to switch from binary to "normal", like some suggests. The correct way is to create some test scenarios and see how PHP deals with specific circumstances. <br /><br />Here is what a quick test shows, when working with non-blocking sockets. <br /><br /><span class="default">&lt;?php<br />$input </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="comment">// In most cases, error produces an empty string and not FALSE<br /></span><span class="keyword">if (</span><span class="default">$input </span><span class="keyword">=== </span><span class="default">FALSE </span><span class="keyword">|| </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />    </span><span class="default">$code </span><span class="keyword">= </span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br />    </span><span class="comment">// You MUST clear the error, or it will not change on next read<br />    </span><span class="default">socket_clear_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br />    if (</span><span class="default">$code </span><span class="keyword">== </span><span class="default">SOCKET_EAGAIN</span><span class="keyword">) {<br />        </span><span class="comment">// Nothing to read from non-blocking socket, try again later...<br /><br />    </span><span class="keyword">} else {<br />        </span><span class="comment">// Connection most likely closed, especially if $code is '0'<br />    </span><span class="keyword">}<br /><br />} else {<br />    </span><span class="comment">// Deal with the data<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />There are more errors to consider, but this will get you started.</span></code></div>
  </div>
 </div>
  <div class="note" id="42700">  <div class="votes">
    <div id="Vu42700">
    <a href="/manual/vote-note.php?id=42700&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42700">
    <a href="/manual/vote-note.php?id=42700&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42700" title="61% like this...">
    3
    </div>
  </div>
  <a href="#42700" class="name">
  <strong class="user"><em>michi at tr51 dot org</em></strong></a><a class="genanchor" href="#42700"> &para;</a><div class="date" title="2004-05-26 12:48"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42700">
<div class="phpcode"><code><span class="html">if you'd like to make a "socket_read" on a linux-system connected with a flash-client (v. 6.0 r81) you have to send a string to the connected port:<br /><br /><span class="default">&lt;?php<br /><br />   </span><span class="keyword">...  </span><span class="comment">//initialising communication<br /><br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="string">"ready to get/send data\0"</span><span class="keyword">; <br />    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);<br /><br />    </span><span class="comment">//now you can read from...<br />    </span><span class="default">$line </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">MAXLINE</span><span class="keyword">));<br /><br />    ...  </span><span class="comment">// do some stuff, finaly close connection<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120447">  <div class="votes">
    <div id="Vu120447">
    <a href="/manual/vote-note.php?id=120447&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120447">
    <a href="/manual/vote-note.php?id=120447&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120447" title="57% like this...">
    1
    </div>
  </div>
  <a href="#120447" class="name">
  <strong class="user"><em>berniev</em></strong></a><a class="genanchor" href="#120447"> &para;</a><div class="date" title="2017-01-11 03:54"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120447">
<div class="phpcode"><code><span class="html">It is not obvious from the docs or notes...<br />PHP_NORMAL_MODE is different to PHP_BINARY in that the former blocks regardless of socket_set_nonblock, the latter respects block and nonblock.</span></code></div>
  </div>
 </div>
  <div class="note" id="79853">  <div class="votes">
    <div id="Vu79853">
    <a href="/manual/vote-note.php?id=79853&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79853">
    <a href="/manual/vote-note.php?id=79853&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79853" title="55% like this...">
    1
    </div>
  </div>
  <a href="#79853" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79853"> &para;</a><div class="date" title="2007-12-15 11:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79853">
<div class="phpcode"><code><span class="html">On non-blocking connections it may not return full length requested.</span></code></div>
  </div>
 </div>
  <div class="note" id="117902">  <div class="votes">
    <div id="Vu117902">
    <a href="/manual/vote-note.php?id=117902&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117902">
    <a href="/manual/vote-note.php?id=117902&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117902" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117902" class="name">
  <strong class="user"><em>dhaubert dot ti at gmail dot com</em></strong></a><a class="genanchor" href="#117902"> &para;</a><div class="date" title="2015-08-28 03:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117902">
<div class="phpcode"><code><span class="html">A way to wait for a message response by the socket or take the first message incoming.<br /><br />Note that if the server turn offline, you have a socket resource, but while trying socket_read(), it gives you a warning message that will fill your hard drive kickly due to logging.<br /><br />The example above try read the message at best 3 times, 3 seconds sleeping for another reading. <br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">waitResponse</span><span class="keyword">(</span><span class="default">$response </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">) {<br />   </span><span class="default">$status </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />   </span><span class="default">$tries </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />   </span><span class="default">$counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />   while (</span><span class="default">$status </span><span class="keyword">== </span><span class="default">$response</span><span class="keyword">) {<br />            </span><span class="default">$status </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />            if(!</span><span class="default">$status</span><span class="keyword">){<br />               if(</span><span class="default">$counter </span><span class="keyword">&gt;= </span><span class="default">$tries</span><span class="keyword">){<br />                  break;<br />               }else{<br />                  </span><span class="default">$counter</span><span class="keyword">++;<br />                  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">);<br />               }<br />            }<br />   }<br />return </span><span class="default">$response</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103154">  <div class="votes">
    <div id="Vu103154">
    <a href="/manual/vote-note.php?id=103154&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103154">
    <a href="/manual/vote-note.php?id=103154&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103154" title="50% like this...">
    0
    </div>
  </div>
  <a href="#103154" class="name">
  <strong class="user"><em>eng.mrkto.com</em></strong></a><a class="genanchor" href="#103154"> &para;</a><div class="date" title="2011-03-29 04:42"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103154">
<div class="phpcode"><code><span class="html">It seems like in socket_* functions in BLOCKING mode where is no way to check if more than $length bytes are still available in socket (like stream_get_meta_data()['unread_bytes']).<br />So you need to choose your prefered maximum $length (like 133693415:) or use non-blocking mode (for realy big data reciving).</span></code></div>
  </div>
 </div>
  <div class="note" id="89133">  <div class="votes">
    <div id="Vu89133">
    <a href="/manual/vote-note.php?id=89133&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89133">
    <a href="/manual/vote-note.php?id=89133&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89133" title="50% like this...">
    0
    </div>
  </div>
  <a href="#89133" class="name">
  <strong class="user"><em>t33th4n at gmail dot com</em></strong></a><a class="genanchor" href="#89133"> &para;</a><div class="date" title="2009-02-23 12:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89133">
<div class="phpcode"><code><span class="html">I don't know if is it stated anywhere with this clearance, but here is the source code for detecting the connection abort/closure for sockets testing with socket_read function:
<br />
<br /><span class="default">&lt;?php
<br />$buf </span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$routes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$connectionid</span><span class="keyword">][</span><span class="string">'tunnelsrc'</span><span class="keyword">], </span><span class="default">$buffer_size</span><span class="keyword">);
<br />if (</span><span class="default">$buf </span><span class="keyword">=== </span><span class="string">''</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$routes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$connectionid</span><span class="keyword">][</span><span class="string">'disconnected'</span><span class="keyword">]=</span><span class="string">'Conenction abort at source side'</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />($buf === '') is the key :)
<br />
<br />I was making an ecrypted tunnel script with mcrypt and was annoying that i could not detect the connection abort from any side.</span></code></div>
  </div>
 </div>
  <div class="note" id="84169">  <div class="votes">
    <div id="Vu84169">
    <a href="/manual/vote-note.php?id=84169&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84169">
    <a href="/manual/vote-note.php?id=84169&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84169" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84169" class="name">
  <strong class="user"><em>tech [{at}] swatcash [{dot}] com</em></strong></a><a class="genanchor" href="#84169"> &para;</a><div class="date" title="2008-07-01 04:23"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84169">
<div class="phpcode"><code><span class="html">Messed up the end of my previous one. Corrected version here: <br /><br />a simple work around to non-blocking working with normal read is like so:<br /><br />$read = array($socket);<br />$write  = NULL;<br />$except = NULL;<br />while(1) {<br />    $num_changed_sockets = socket_select($read, $write, $except, 0, 1);<br />    if ( $num_changed_sockets &gt; '0' ) {<br />        socket_read($socket,10000,PHP_NORMAL_READ);<br />    } <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="79314">  <div class="votes">
    <div id="Vu79314">
    <a href="/manual/vote-note.php?id=79314&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79314">
    <a href="/manual/vote-note.php?id=79314&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79314" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79314" class="name">
  <strong class="user"><em>nad0r1 at hush dot ai</em></strong></a><a class="genanchor" href="#79314"> &para;</a><div class="date" title="2007-11-20 07:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79314">
<div class="phpcode"><code><span class="html">Another way to bypass the annoying thing with telnet, that send each character as a string ,is to check if the response is "\r\n", that is the string that telnet sends when the user presses enter.<br /><br />Here is an example:<br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br /></span><span class="comment">/* Allow the script to hang around waiting for connections. */<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">/* Turn on implicit output flushing so we see what we're getting<br /> * as it comes in. */<br /></span><span class="default">ob_implicit_flush</span><span class="keyword">();<br /><br /></span><span class="default">$address </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;<br /></span><span class="default">$port </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br /><br />if ((</span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_create() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br />if (</span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_bind() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br />else <br />  echo </span><span class="string">'Socket ' </span><span class="keyword">. </span><span class="default">$address </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">$port </span><span class="keyword">. </span><span class="string">" has been opened\n"</span><span class="keyword">;<br /><br />if (</span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />    echo </span><span class="string">"socket_listen() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br />else <br />   echo </span><span class="string">"Listening for new clients..\n"</span><span class="keyword">;<br /><br />   </span><span class="default">$client_id </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />do {<br />    if ((</span><span class="default">$msgsock </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) === </span><span class="default">false</span><span class="keyword">) {<br />        echo </span><span class="string">"socket_accept() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />        break;<br />    }<br />    else {<br />        </span><span class="default">$client_id </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">;<br />      echo </span><span class="string">"Client #" </span><span class="keyword">.</span><span class="default">$client_id </span><span class="keyword">.</span><span class="string">": Connect\n"</span><span class="keyword">;<br />    }<br />      <br />    </span><span class="comment">/* Send instructions. */<br />    </span><span class="default">$msg </span><span class="keyword">= </span><span class="string">"\nWelcome to the PHP Test Server. \n" </span><span class="keyword">.<br />        </span><span class="string">"To quit, type 'quit'. To shut down the server type 'shutdown'.\n"</span><span class="keyword">;<br />    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">, </span><span class="default">$msg</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">));<br /></span><span class="default">$cur_buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    do {<br />        if (</span><span class="default">false </span><span class="keyword">=== (</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">, </span><span class="default">2048</span><span class="keyword">))) {<br />            echo </span><span class="string">"socket_read() failed: reason: " </span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;<br />            break </span><span class="default">2</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">$buf </span><span class="keyword">== </span><span class="string">"\r\n"</span><span class="keyword">) {<br />        if (</span><span class="default">$cur_buf </span><span class="keyword">== </span><span class="string">'quit'</span><span class="keyword">) {<br />            echo </span><span class="string">'Client #' </span><span class="keyword">.</span><span class="default">$client_id </span><span class="keyword">.</span><span class="string">': Disconnect' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />            break;<br />        }<br />        if (</span><span class="default">$cur_buf </span><span class="keyword">== </span><span class="string">'shutdown'</span><span class="keyword">) {<br />            </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">);<br />            break </span><span class="default">2</span><span class="keyword">;<br />        }<br />        </span><span class="comment">//else {<br />       </span><span class="default">$talkback </span><span class="keyword">= </span><span class="string">"Unknown command: " </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">'\r\n'</span><span class="keyword">, </span><span class="default">$cur_buf</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br />       </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">, </span><span class="default">$talkback</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$talkback</span><span class="keyword">));<br />       </span><span class="comment">// }<br />        </span><span class="keyword">echo </span><span class="string">'Client #' </span><span class="keyword">.</span><span class="default">$client_id </span><span class="keyword">.</span><span class="string">': ' </span><span class="keyword">. </span><span class="default">$cur_buf </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">; <br />        </span><span class="default">$cur_buf </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        }<br />        else </span><span class="default">$cur_buf </span><span class="keyword">.= </span><span class="default">$buf</span><span class="keyword">;<br />    } while (</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$msgsock</span><span class="keyword">);<br />} while (</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69039">  <div class="votes">
    <div id="Vu69039">
    <a href="/manual/vote-note.php?id=69039&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69039">
    <a href="/manual/vote-note.php?id=69039&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69039" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69039" class="name">
  <strong class="user"><em>Niels laukens</em></strong></a><a class="genanchor" href="#69039"> &para;</a><div class="date" title="2006-08-21 12:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69039">
<div class="phpcode"><code><span class="html">This paragraph is confusing:<br /><br />socket_read() returns the data as a string on success, or FALSE on error (including if the remote host has closed the connection). The error code can be retrieved with socket_last_error(). This code may be passed to socket_strerror() to get a textual representation of the error.<br />Note: socket_read() returns a zero length string ("") when there is no more data to read.<br /><br />My tests (on PHP 5.1.4) show that when you socket_read() on a shutdown-socket, it returns FALSE when using PHP_NORMAL_READ, but returns "" when reading in PHP_BINARY_READ.</span></code></div>
  </div>
 </div>
  <div class="note" id="51063">  <div class="votes">
    <div id="Vu51063">
    <a href="/manual/vote-note.php?id=51063&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51063">
    <a href="/manual/vote-note.php?id=51063&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51063" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51063" class="name">
  <strong class="user"><em>Bill Kuker</em></strong></a><a class="genanchor" href="#51063"> &para;</a><div class="date" title="2005-03-18 07:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51063">
<div class="phpcode"><code><span class="html">Just a note that on my system the length seems to have an undocumented upper bound of 65536. I was being lazy and not read()ing in a while loop until I pointed it at real data ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="33719">  <div class="votes">
    <div id="Vu33719">
    <a href="/manual/vote-note.php?id=33719&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33719">
    <a href="/manual/vote-note.php?id=33719&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33719" title="50% like this...">
    0
    </div>
  </div>
  <a href="#33719" class="name">
  <strong class="user"><em>schst at php-tools dot de</em></strong></a><a class="genanchor" href="#33719"> &para;</a><div class="date" title="2003-07-04 06:19"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33719">
<div class="phpcode"><code><span class="html">You may download a generic server class at <a href="http://www.php-tools.de" rel="nofollow" target="_blank">http://www.php-tools.de</a><br />This class will accept the sockets read data from it and hands it to a callback function. Furthermore there are methods for connection handling included.</span></code></div>
  </div>
 </div>
  <div class="note" id="122941">  <div class="votes">
    <div id="Vu122941">
    <a href="/manual/vote-note.php?id=122941&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122941">
    <a href="/manual/vote-note.php?id=122941&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122941" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#122941" class="name">
  <strong class="user"><em>Arvy</em></strong></a><a class="genanchor" href="#122941"> &para;</a><div class="date" title="2018-07-13 03:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122941">
<div class="phpcode"><code><span class="html">On non-blocking sockets, the function will return "" if no data is received, and even if the client disconnects.<br /><br />If you want to check if the client disconnected, use ===.<br /><br />$ret=socket_read($socket);<br /><br />$ret=="" : connected but no data received or client disconnected<br />$ret==="" : client disconnected for sure</span></code></div>
  </div>
 </div>
  <div class="note" id="121426">  <div class="votes">
    <div id="Vu121426">
    <a href="/manual/vote-note.php?id=121426&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121426">
    <a href="/manual/vote-note.php?id=121426&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121426" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#121426" class="name">
  <strong class="user"><em>sahel dot nuri at outlook dot com</em></strong></a><a class="genanchor" href="#121426"> &para;</a><div class="date" title="2017-07-24 03:38"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121426">
<div class="phpcode"><code><span class="html">This little, important fact would save your time.<br />If you want to recognize that your client is disconnected without any message, you have to select the right flag.<br />Because, if you use the flag PHP_BINARY_READ:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">){<br />    while(</span><span class="default">$buf </span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">[, </span><span class="default">PHP_BINARY_READ </span><span class="keyword">]))<br />        if(</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">))<br />            break;<br /><br />    return </span><span class="default">$buf</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>and the users disconnects, the function will returns an empty string.<br />But if you use the flag PHP_NORMAL_READ:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">read</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">){<br />    while(</span><span class="default">$buf </span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">PHP_NORMAL_READ</span><span class="keyword">))<br />        if(</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">))<br />            break;<br /><br />    return </span><span class="default">$buf</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>the function will returns a false.<br /><br />I hope this will help you. I wasted one hour of my time to solve this problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="76069">  <div class="votes">
    <div id="Vu76069">
    <a href="/manual/vote-note.php?id=76069&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76069">
    <a href="/manual/vote-note.php?id=76069&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76069" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#76069" class="name">
  <strong class="user"><em>ein at anti-logic dot com</em></strong></a><a class="genanchor" href="#76069"> &para;</a><div class="date" title="2007-06-28 11:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76069">
<div class="phpcode"><code><span class="html">the proper way to detect a closed connection is to check socket_last_error.<br /><br />Connection reset by peer is 104 (either use socket_strerror or don't suppress errors for the time being to find these out), sooo.<br /><br />while($buffer=@socket_read($sock,512,PHP_NORMAL_READ)){<br />    echo $buffer;<br />}<br />if(socket_last_error($sock) == 104) {<br />    echo "Connection closed";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="35416">  <div class="votes">
    <div id="Vu35416">
    <a href="/manual/vote-note.php?id=35416&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35416">
    <a href="/manual/vote-note.php?id=35416&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35416" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#35416" class="name">
  <strong class="user"><em>magicking89 at hotmail dot com</em></strong></a><a class="genanchor" href="#35416"> &para;</a><div class="date" title="2003-08-30 04:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35416">
<div class="phpcode"><code><span class="html">if you want to use a non block socket you must to use socket_last_error<br /><br />if(!socket_last_error($sc)){<br />   if($buffer=socket_read($sc,512,PHP_NORMAL_READ)){<br />      echo $buffer;<br />   }<br />}<br /><br />if you use it your script wont take all your memory</span></code></div>
  </div>
 </div>
  <div class="note" id="76470">  <div class="votes">
    <div id="Vu76470">
    <a href="/manual/vote-note.php?id=76470&amp;page=function.socket-read&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76470">
    <a href="/manual/vote-note.php?id=76470&amp;page=function.socket-read&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76470" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#76470" class="name">
  <strong class="user"><em>jgbustos at gmail dot com</em></strong></a><a class="genanchor" href="#76470"> &para;</a><div class="date" title="2007-07-17 05:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76470">
<div class="phpcode"><code><span class="html">PHP on win32 developers, please look at this bug report before using the PHP_NORMAL_READ option:<br /><br /><a href="http://bugs.php.net/bug.php?id=21197" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=21197</a><br /><br />In a nutshell, using PHP_NORMAL_READ will make your calls to socket_read() return an empty buffer every time.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-read&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-read.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
