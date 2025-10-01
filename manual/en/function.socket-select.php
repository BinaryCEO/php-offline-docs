<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_select - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-select.php">
 <link rel="shorturl" href="https://www.php.net/socket-select">
 <link rel="alternate" href="https://www.php.net/socket-select" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-recvmsg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-send.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-select.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-select.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-select.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-select.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-select.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-select.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-select.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-select.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-select.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-select.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-select.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runs the select() system call on the given arrays of sockets with a specified timeout" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_select - Manual" />
<meta name="twitter:description" content="Runs the select() system call on the given arrays of sockets with a specified timeout" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_select - Manual" />
<meta itemprop="description" content="Runs the select() system call on the given arrays of sockets with a specified timeout" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runs the select() system call on the given arrays of sockets with a specified timeout" />

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
        <a href="function.socket-send.php">
          socket_send &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-recvmsg.php">
          &laquo; socket_recvmsg        </a>
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
            <option value='en/function.socket-select.php' selected="selected">English</option>
            <option value='de/function.socket-select.php'>German</option>
            <option value='es/function.socket-select.php'>Spanish</option>
            <option value='fr/function.socket-select.php'>French</option>
            <option value='it/function.socket-select.php'>Italian</option>
            <option value='ja/function.socket-select.php'>Japanese</option>
            <option value='pt_BR/function.socket-select.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-select.php'>Russian</option>
            <option value='tr/function.socket-select.php'>Turkish</option>
            <option value='uk/function.socket-select.php'>Ukrainian</option>
            <option value='zh/function.socket-select.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-select" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_select</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_select</span> &mdash; <span class="dc-title">Runs the select() system call on the given arrays of sockets with a specified timeout</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-select-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_select</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$read</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$write</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter reference">&$except</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$seconds</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$microseconds</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>socket_select()</strong></span> accepts arrays of sockets and waits for
   them to change status. Those coming with BSD sockets background will
   recognize that those socket arrays are in fact the so-called file
   descriptor sets. Three independent arrays of sockets are watched.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-select-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">read</code></dt>
     <dd>
      <p class="para">
       The sockets listed in the <code class="parameter">read</code> array will be
       watched to see if characters become available for reading (more
       precisely, to see if a read will not block - in particular, a socket
       is also ready on end-of-file, in which case a
       <span class="function"><a href="function.socket-read.php" class="function">socket_read()</a></span> will return a zero length string).
      </p>
     </dd>
    
    
     <dt><code class="parameter">write</code></dt>
     <dd>
      <p class="para">
       The sockets listed in the <code class="parameter">write</code> array will be
       watched to see if a write will not block.
      </p>
     </dd>
    
    
     <dt><code class="parameter">except</code></dt>
     <dd>
      <p class="para">
       The sockets listed in the <code class="parameter">except</code> array will be
       watched for exceptions.
      </p>
     </dd>
    
    
     <dt><code class="parameter">seconds</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">seconds</code> and <code class="parameter">microseconds</code>
       together form the <code class="literal">timeout</code> parameter. The
       <code class="literal">timeout</code> is an upper bound on the amount of time
       elapsed before <span class="function"><strong>socket_select()</strong></span> return.
       <code class="parameter">seconds</code> may be zero , causing
       <span class="function"><strong>socket_select()</strong></span> to return immediately. This is useful
       for polling. If <code class="parameter">seconds</code> is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (no timeout),
       <span class="function"><strong>socket_select()</strong></span> can block indefinitely.
      </p>
     </dd>
    
    
     <dt><code class="parameter">microseconds</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    On exit, the arrays are modified to indicate which socket
    actually changed status.
   </p>
  </div>
  <p class="para">
   You do not need to pass every array to
   <span class="function"><strong>socket_select()</strong></span>. You can leave it out and use an
   empty array or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> instead. Also do not forget that those arrays are
   passed <em>by reference</em> and will be modified after
   <span class="function"><strong>socket_select()</strong></span> returns.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Due a limitation in the current Zend Engine it is not possible to pass a
    constant modifier like <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> directly as a parameter to a function
    which expects this parameter to be passed by reference. Instead use a
    temporary variable or an expression with the leftmost member being a
    temporary variable:
    <div class="example" id="example-4804">
     <p><strong>Example #1 Using <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> with <span class="function"><strong>socket_select()</strong></span></strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$e </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">socket_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-select-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success <span class="function"><strong>socket_select()</strong></span> returns the number of
   sockets contained in the modified arrays, which may be zero if
   the timeout expires before anything interesting happens.On error <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   is returned. The error code can be retrieved with
   <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Be sure to use the <code class="literal">===</code> operator when checking for an
    error. Since the <span class="function"><strong>socket_select()</strong></span> may return 0 the
    comparison with <code class="literal">==</code> would evaluate to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>:
    <div class="example" id="example-4805">
     <p><strong>Example #2 Understanding <span class="function"><strong>socket_select()</strong></span>&#039;s result</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$e </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">false </span><span style="color: #007700">=== </span><span style="color: #0000BB">socket_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$r</span><span style="color: #007700">, </span><span style="color: #0000BB">$w</span><span style="color: #007700">, </span><span style="color: #0000BB">$e</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"socket_select() failed, reason: " </span><span style="color: #007700">.<br />        </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 examples" id="refsect1-function.socket-select-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4806">
    <p><strong>Example #3 <span class="function"><strong>socket_select()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Prepare the read array */<br /></span><span style="color: #0000BB">$read   </span><span style="color: #007700">= array(</span><span style="color: #0000BB">$socket1</span><span style="color: #007700">, </span><span style="color: #0000BB">$socket2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$write  </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$except </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$num_changed_sockets </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$read</span><span style="color: #007700">, </span><span style="color: #0000BB">$write</span><span style="color: #007700">, </span><span style="color: #0000BB">$except</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$num_changed_sockets </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">/* Error handling */<br /></span><span style="color: #007700">} else if (</span><span style="color: #0000BB">$num_changed_sockets </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    </span><span style="color: #FF8000">/* At least at one of the sockets something interesting happened */<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.socket-select-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Be aware that some socket implementations need to be handled very
    carefully. A few basic rules:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       You should always try to use <span class="function"><strong>socket_select()</strong></span>
       without timeout. Your program should have nothing to do if there is
       no data available. Code that depends on timeouts is not usually
       portable and difficult to debug.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       No socket must be added to any set if you do not intend to
       check its result after the <span class="function"><strong>socket_select()</strong></span> call,
       and respond appropriately. After <span class="function"><strong>socket_select()</strong></span>
       returns, all sockets in all arrays must be checked. Any
       socket that is available for writing must be written to, and
       any socket available for reading must be read from.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       If you read/write to a socket returns in the arrays be aware that
       they do not necessarily read/write the full amount of data you have
       requested. Be prepared to even only be able to read/write a single
       byte.
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       It&#039;s common to most socket implementations that the only exception
       caught with the <code class="parameter">except</code> array is out-of-bound
       data received on a socket.
      </span>
     </li>
    </ul>
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-select-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-read.php" class="function" rel="rdfs-seeAlso">socket_read()</a> - Reads a maximum of length bytes from a socket</span></li>
    <li><span class="function"><a href="function.socket-write.php" class="function" rel="rdfs-seeAlso">socket_write()</a> - Write to a socket</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-select.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-select%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-select.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="56241">  <div class="votes">
    <div id="Vu56241">
    <a href="/manual/vote-note.php?id=56241&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56241">
    <a href="/manual/vote-note.php?id=56241&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56241" title="74% like this...">
    49
    </div>
  </div>
  <a href="#56241" class="name">
  <strong class="user"><em>vardhan ( at ) rogers ( dot ) com</em></strong></a><a class="genanchor" href="#56241"> &para;</a><div class="date" title="2005-08-28 07:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56241">
<div class="phpcode"><code><span class="html">A simple PHP script using socket_select() to manage multiple connections.<br />connect using "telnet localhost 9050". it broadcasts your messages that you send through telnet to other users connected to the server -- sort of like a chat script<br /><br />#!/usr/local/bin/php<br /><span class="default">&lt;?php<br /><br />    $port </span><span class="keyword">= </span><span class="default">9050</span><span class="keyword">;<br />    <br />    </span><span class="comment">// create a streaming socket, of type TCP/IP<br />    </span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br />    <br />    </span><span class="comment">// set the option to reuse the port<br />    </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_REUSEADDR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    <br />    </span><span class="comment">// "bind" the socket to the address to "localhost", on port $port<br />    // so this means that all connections on this port are now our resposibility to send/recv data, disconnect, etc..<br />    </span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />    <br />    </span><span class="comment">// start listen for connections<br />    </span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /><br />    </span><span class="comment">// create a list of all the clients that will be connected to us..<br />    // add the listening socket to this list<br />    </span><span class="default">$clients </span><span class="keyword">= array(</span><span class="default">$sock</span><span class="keyword">);<br />    <br />    while (</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="comment">// create a copy, so $clients doesn't get modified by socket_select()<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$clients</span><span class="keyword">;<br />        <br />        </span><span class="comment">// get a list of all the clients that have data to be read from<br />        // if there are no clients with data, go to next iteration<br />        </span><span class="keyword">if (</span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">)<br />            continue;<br />        <br />        </span><span class="comment">// check if there is a client trying to connect<br />        </span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$read</span><span class="keyword">)) {<br />            </span><span class="comment">// accept the client, and add him to the $clients array<br />            </span><span class="default">$clients</span><span class="keyword">[] = </span><span class="default">$newsock </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />            <br />            </span><span class="comment">// send the client a welcome message<br />            </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsock</span><span class="keyword">, </span><span class="string">"no noobs, but ill make an exception :)\n"</span><span class="keyword">.<br />            </span><span class="string">"There are "</span><span class="keyword">.(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$clients</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">).</span><span class="string">" client(s) connected to the server\n"</span><span class="keyword">);<br />            <br />            </span><span class="default">socket_getpeername</span><span class="keyword">(</span><span class="default">$newsock</span><span class="keyword">, </span><span class="default">$ip</span><span class="keyword">);<br />            echo </span><span class="string">"New client connected: </span><span class="keyword">{</span><span class="default">$ip</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />            <br />            </span><span class="comment">// remove the listening socket from the clients-with-data array<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">$read</span><span class="keyword">);<br />            unset(</span><span class="default">$read</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />        <br />        </span><span class="comment">// loop through all the clients that have data to read from<br />        </span><span class="keyword">foreach (</span><span class="default">$read </span><span class="keyword">as </span><span class="default">$read_sock</span><span class="keyword">) {<br />            </span><span class="comment">// read until newline or 1024 bytes<br />            // socket_read while show errors when the client is disconnected, so silence the error messages<br />            </span><span class="default">$data </span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$read_sock</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">PHP_NORMAL_READ</span><span class="keyword">);<br />            <br />            </span><span class="comment">// check if the client is disconnected<br />            </span><span class="keyword">if (</span><span class="default">$data </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="comment">// remove client for $clients array<br />                </span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$read_sock</span><span class="keyword">, </span><span class="default">$clients</span><span class="keyword">);<br />                unset(</span><span class="default">$clients</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                echo </span><span class="string">"client disconnected.\n"</span><span class="keyword">;<br />                </span><span class="comment">// continue to the next client to read from, if any<br />                </span><span class="keyword">continue;<br />            }<br />            <br />            </span><span class="comment">// trim off the trailing/beginning white spaces<br />            </span><span class="default">$data </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />            <br />            </span><span class="comment">// check if there is any data after trimming off the spaces<br />            </span><span class="keyword">if (!empty(</span><span class="default">$data</span><span class="keyword">)) {<br />            <br />                </span><span class="comment">// send this to all the clients in the $clients array (except the first one, which is a listening socket)<br />                </span><span class="keyword">foreach (</span><span class="default">$clients </span><span class="keyword">as </span><span class="default">$send_sock</span><span class="keyword">) {<br />                <br />                    </span><span class="comment">// if its the listening sock or the client that we got the message from, go to the next one in the list<br />                    </span><span class="keyword">if (</span><span class="default">$send_sock </span><span class="keyword">== </span><span class="default">$sock </span><span class="keyword">|| </span><span class="default">$send_sock </span><span class="keyword">== </span><span class="default">$read_sock</span><span class="keyword">)<br />                        continue;<br />                    <br />                    </span><span class="comment">// write the message to the client -- add a newline character to the end of the message<br />                    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$send_sock</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />                    <br />                } </span><span class="comment">// end of broadcast foreach<br />                <br />            </span><span class="keyword">}<br />            <br />        } </span><span class="comment">// end of reading foreach<br />    </span><span class="keyword">}<br /><br />    </span><span class="comment">// close the listening socket<br />    </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119675">  <div class="votes">
    <div id="Vu119675">
    <a href="/manual/vote-note.php?id=119675&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119675">
    <a href="/manual/vote-note.php?id=119675&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119675" title="100% like this...">
    8
    </div>
  </div>
  <a href="#119675" class="name">
  <strong class="user"><em>malcolm.murphy</em></strong></a><a class="genanchor" href="#119675"> &para;</a><div class="date" title="2016-07-31 06:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119675">
<div class="phpcode"><code><span class="html">This was mentioned by [Viorel] above but I think it warrants being repeated...<br /><br />The example provided by [vardhan ( at ) rogers ( dot ) com], while otherwise exceptional, uses the value int(0) for $tv_sec which will cause the iteration to loop as fast as possible, consequently using up any available CPU time.<br /><br />*** Ideally, $tv_sec should always be set to NULL ***, especially if you are using socket_select in a loop. If you must temporarily stop listening for events to perform another task, then the timeout should be as high as possible to reduce CPU strain (another note suggested preventing 100% CPU usage by setting a low $tv_usec value, which only makes the problem slightly less worse but does not solve it).<br /><br />Setting the timeout to an explicit null value is basically the same as setting it to infinite. The script will only execute the while loop once every time there is an event.</span></code></div>
  </div>
 </div>
  <div class="note" id="45737">  <div class="votes">
    <div id="Vu45737">
    <a href="/manual/vote-note.php?id=45737&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45737">
    <a href="/manual/vote-note.php?id=45737&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45737" title="75% like this...">
    2
    </div>
  </div>
  <a href="#45737" class="name">
  <strong class="user"><em>Richard Neill</em></strong></a><a class="genanchor" href="#45737"> &para;</a><div class="date" title="2004-09-16 09:37"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45737">
<div class="phpcode"><code><span class="html">It is probably a bad idea to watch an array of sockets for input with socket_select, and then socket_read() using PHP_NORMAL_READ.<br /><br />Although this seems desirable, you can end up with a permanently blocked program, if someone sends you malformed input which is missing a trailing \n \r. Guess how I found that out.</span></code></div>
  </div>
 </div>
  <div class="note" id="102270">  <div class="votes">
    <div id="Vu102270">
    <a href="/manual/vote-note.php?id=102270&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102270">
    <a href="/manual/vote-note.php?id=102270&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102270" title="66% like this...">
    1
    </div>
  </div>
  <a href="#102270" class="name">
  <strong class="user"><em>jean at briskula dot si</em></strong></a><a class="genanchor" href="#102270"> &para;</a><div class="date" title="2011-02-04 05:03"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102270">
<div class="phpcode"><code><span class="html">As it was already said, some clients need \0 character to end transmission, for example Flash's XMLSocket.<br /><br />You should also be prepared to read less data than you have requested. <br /><br />Here is an example of a socket buffer - it's an array which has socket resources for keys and an array of a timestamp and recieved data as values.<br /><br />I find that the best practice for sending data is trailing it with a new line and zero character (\n\0), because you will probably have different types of clients which behave differently for reading data from sockets. Some need a \n to fire an event, some need \0.<br /><br />For recieving data, sometimes you will get splitted data - this can hapen because the buffer is full (in my example 8192 bytes) or it just gets broken during transmission in lower levels.<br /><br />Sometimes you can read two messages at once, but they have a zero character in between, so you can just use preg_split() to split the messages. The second message may not be complete, so you add it to your buffer.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">const </span><span class="default">message_delimiter </span><span class="keyword">= </span><span class="string">"\n\0"</span><span class="keyword">;<br /><br />    </span><span class="comment">/*<br />     * Clear socket buffers older than 1 hour<br />     */<br />    </span><span class="keyword">function </span><span class="default">clear_buffer</span><span class="keyword">() {<br />        foreach(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">) {<br />            if(</span><span class="default">time</span><span class="keyword">() - </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'ts'</span><span class="keyword">] &gt; </span><span class="default">3600</span><span class="keyword">) {<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />            }<br />        }<br />    }<br /><br />    </span><span class="comment">/*<br />     * Add data to a buffer<br />     */<br />    </span><span class="keyword">function </span><span class="default">buffer_add</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$data</span><span class="keyword">) {<br />        if(!isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">])) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">] .= </span><span class="default">$data</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'ts'</span><span class="keyword">] = </span><span class="default">time</span><span class="keyword">();<br />    }<br /><br />    function </span><span class="default">buffer_get</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">) {<br />        </span><span class="comment">// split buffer by the end of string<br />        </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\0/'</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">]);<br /><br />        </span><span class="comment">// reset buffer to the last line of input<br />        // if the buffer was sent completely, the last line of input should be<br />        // an empty string<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">]);<br /><br />        if(!empty(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">])) {<br />            </span><span class="default">debug</span><span class="keyword">(</span><span class="string">"buffer is not empty for </span><span class="default">$sock</span><span class="string">, len: "</span><span class="keyword">.</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer</span><span class="keyword">[</span><span class="default">$sock</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">]));<br />        }<br /><br />        </span><span class="comment">// remove the last line of input (incomplete data)<br />        // parse any complete data<br />        </span><span class="keyword">unset(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">]);<br /><br />        </span><span class="comment">// return only the fully sent data<br />        </span><span class="keyword">return </span><span class="default">$lines</span><span class="keyword">;<br />    }<br /><br />    function </span><span class="default">read</span><span class="keyword">(&amp;</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">=</span><span class="default">8192</span><span class="keyword">,</span><span class="default">$flag</span><span class="keyword">=</span><span class="default">MSG_DONTWAIT</span><span class="keyword">) {<br />        </span><span class="default">$lines </span><span class="keyword">= array();<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">clear_buffer</span><span class="keyword">();<br /><br />        </span><span class="default">$bytes_read </span><span class="keyword">= @</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$read_data</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">,</span><span class="default">$flag</span><span class="keyword">);<br /><br />        if (</span><span class="default">$bytes_read </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">|| </span><span class="default">$bytes_read </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">debug</span><span class="keyword">(</span><span class="string">"recv: </span><span class="default">$read_data</span><span class="string">"</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer_add</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$read_data</span><span class="keyword">);<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">buffer_get</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="comment">/*<br />     * Write to a socket<br />     * add a newline and null character at the end<br />     * some clients don't read until new line is recieved<br />     *<br />     * try to send the rest of the data if it gets truncated<br />     */<br />    </span><span class="keyword">function </span><span class="default">write</span><span class="keyword">(&amp;</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">) {<br />        </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">$msg</span><span class="keyword">.</span><span class="default">self</span><span class="keyword">::</span><span class="default">message_delimiter</span><span class="keyword">;<br />        </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">);<br />        while(</span><span class="default">true</span><span class="keyword">) {<br />            </span><span class="default">$sent </span><span class="keyword">= @</span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">$msg</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">);<br />            if(</span><span class="default">$sent </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) {<br />                return </span><span class="default">false</span><span class="keyword">;<br />            }<br />            if(</span><span class="default">$sent </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">) {<br />                </span><span class="default">$msg </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">, </span><span class="default">$sent</span><span class="keyword">);<br />                </span><span class="default">$length </span><span class="keyword">-= </span><span class="default">$sent</span><span class="keyword">;<br />                </span><span class="default">debug</span><span class="keyword">(</span><span class="string">"Message truncated: Resending: </span><span class="default">$msg</span><span class="string">"</span><span class="keyword">);<br />            } else {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85758">  <div class="votes">
    <div id="Vu85758">
    <a href="/manual/vote-note.php?id=85758&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85758">
    <a href="/manual/vote-note.php?id=85758&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85758" title="66% like this...">
    1
    </div>
  </div>
  <a href="#85758" class="name">
  <strong class="user"><em>danny at dansheps dot com</em></strong></a><a class="genanchor" href="#85758"> &para;</a><div class="date" title="2008-09-16 09:45"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85758">
<div class="phpcode"><code><span class="html">Just to add to this.  Since the information contained in the notes is somewhat old.   It appears keys are being preserved now.<br /><br />So, if you rely on knowing which keys need to be worked with and were like me and thought that it didnot preserve.  Well it does.</span></code></div>
  </div>
 </div>
  <div class="note" id="29467">  <div class="votes">
    <div id="Vu29467">
    <a href="/manual/vote-note.php?id=29467&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29467">
    <a href="/manual/vote-note.php?id=29467&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29467" title="66% like this...">
    2
    </div>
  </div>
  <a href="#29467" class="name">
  <strong class="user"><em>calimero dot NOSPAM at NOSPAM dot creatixnet dot com</em></strong></a><a class="genanchor" href="#29467"> &para;</a><div class="date" title="2003-02-14 04:36"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29467">
<div class="phpcode"><code><span class="html">Please note that the timeout parameter has important side-effects on the CPU usage of your script.<br /><br />Setting the timeout to 0 will make your CPU looping without any time to have some rest and handle other running processes on your system, causing the system load to increase heavily while your script is running.<br /><br />Personnaly, I use a value of 15 ms for this parameter. this ensures a good listening frequency while letting your system load clear.<br /><br />Example :<br />$read = array($ListeningSocket);<br />$num_changed_sockets = socket_select($read, $write = NULL, $except = NULL, 0, 10);<br /><br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="118501">  <div class="votes">
    <div id="Vu118501">
    <a href="/manual/vote-note.php?id=118501&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118501">
    <a href="/manual/vote-note.php?id=118501&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118501" title="58% like this...">
    2
    </div>
  </div>
  <a href="#118501" class="name">
  <strong class="user"><em>antti r</em></strong></a><a class="genanchor" href="#118501"> &para;</a><div class="date" title="2015-12-16 12:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118501">
<div class="phpcode"><code><span class="html">as of 12/2015 and php 5.3.3, the socket_select() maximum sockets is still 1024 and not risable by process file limits (bash ulimit -n). PHP new compilation is required to raise the limits. Or one might rather choose forking or multiple binaries.</span></code></div>
  </div>
 </div>
  <div class="note" id="98222">  <div class="votes">
    <div id="Vu98222">
    <a href="/manual/vote-note.php?id=98222&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98222">
    <a href="/manual/vote-note.php?id=98222&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98222" title="58% like this...">
    2
    </div>
  </div>
  <a href="#98222" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#98222"> &para;</a><div class="date" title="2010-06-02 09:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98222">
<div class="phpcode"><code><span class="html">The way the document describes socket_select()'s handling of sockets polled for read is rather obscure.<br /><br />It says that it checks to see if reading would not "block," but the overall description of socket_select() says it checks for a change in blocking status. Unfortunately, these are in conflict.<br /><br />If a socket already has data in the buffer, calling socket_select() on that socket would never return (assuming null timeout), and would block forever. :-( This is because the blocking status wouldn't change. It simply stays "non-blocking"<br /><br />It is important to remember NOT to select() on a socket which may already have data available.<br /><br />An example...<br /><span class="default">&lt;?php<br /></span><span class="comment">//... $socket is already here...<br /></span><span class="default">$done </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />do{<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$e </span><span class="keyword">= array();<br />    </span><span class="default">$r </span><span class="keyword">= array(</span><span class="default">$socket</span><span class="keyword">);<br />    </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">,</span><span class="default">null</span><span class="keyword">);<br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="comment">//$done = true; //Something determines that we are done reading...<br /></span><span class="keyword">}while(!</span><span class="default">$done</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>This MAY NOT work... socket_select() is always being called... but we may have data in the input buffer.<br /><br />We need to ensure that the last time we read, nothing was read... (empty buffer)<br /><span class="default">&lt;?php<br /></span><span class="comment">//... $socket is already here...<br /></span><span class="default">$done </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />do{<br />    </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">$w </span><span class="keyword">= </span><span class="default">$e </span><span class="keyword">= array();<br />    </span><span class="default">$r </span><span class="keyword">= array(</span><span class="default">$socket</span><span class="keyword">);<br />    if(</span><span class="default">$n </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$w</span><span class="keyword">,</span><span class="default">$e</span><span class="keyword">,</span><span class="default">null</span><span class="keyword">);<br />    </span><span class="default">$n </span><span class="keyword">= </span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />    </span><span class="comment">//$done = true; //Something determines that we are done reading...<br /></span><span class="keyword">}while(!</span><span class="default">$done</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111592">  <div class="votes">
    <div id="Vu111592">
    <a href="/manual/vote-note.php?id=111592&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111592">
    <a href="/manual/vote-note.php?id=111592&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111592" title="57% like this...">
    2
    </div>
  </div>
  <a href="#111592" class="name">
  <strong class="user"><em>Viorel</em></strong></a><a class="genanchor" href="#111592"> &para;</a><div class="date" title="2013-03-06 07:38"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111592">
<div class="phpcode"><code><span class="html">Probably you will want to use <br /><br />// get a list of all the clients that have data to be read from<br />// if there are no clients with data, go to next iteration<br />        if (socket_select($read, $write = NULL, $except = NULL, NULL) &lt; 1)<br />            continue;<br />            <br />instead  <br />        if (socket_select($read, $write = NULL, $except = NULL, 0) &lt; 1)<br />            continue;<br />which will hang your CPU to 100% (return immediate if nothing to be done)</span></code></div>
  </div>
 </div>
  <div class="note" id="113842">  <div class="votes">
    <div id="Vu113842">
    <a href="/manual/vote-note.php?id=113842&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113842">
    <a href="/manual/vote-note.php?id=113842&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113842" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113842" class="name">
  <strong class="user"><em>simon dot riget at gmail dot com</em></strong></a><a class="genanchor" href="#113842"> &para;</a><div class="date" title="2013-12-07 08:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113842">
<div class="phpcode"><code><span class="html">A verry simple HTTP webserver written in PHP<br />Run it in the shell with php &lt;name of file&gt; and test in in the browser with &lt;server address&gt;:8080/test<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// Reduce the amount of warnings displayed<br />  </span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">E_ALL </span><span class="keyword">^ </span><span class="default">E_NOTICE</span><span class="keyword">);<br /><br />  </span><span class="comment">// Set up socket for listening <br />  </span><span class="default">$host_socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br />  if(!</span><span class="default">$host_socket</span><span class="keyword">) die(</span><span class="string">"Failed to start event server. socket_create: "</span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()).</span><span class="string">"\n"</span><span class="keyword">);<br /><br />  </span><span class="comment">// set the option to reuse the port<br />  </span><span class="keyword">if(! </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$host_socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_REUSEADDR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) )<br />    die(</span><span class="string">"Failed to start event server. socket_set_option: "</span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()).</span><span class="string">"\n"</span><span class="keyword">);<br /><br />  </span><span class="comment">// bind host socket to localhost or 0.0.0.0 on port 8080<br />  </span><span class="keyword">if(! </span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$host_socket</span><span class="keyword">,</span><span class="string">"0.0.0.0"</span><span class="keyword">,</span><span class="default">8080</span><span class="keyword">) )<br />    die(</span><span class="string">"Failed to start event server. socket_bind: "</span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()).</span><span class="string">"\n"</span><span class="keyword">);<br /><br />  </span><span class="comment">// start listening for connections<br />  </span><span class="keyword">if(! </span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$host_socket</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">) )<br />    die(</span><span class="string">"Failed to start event server. socket_listen: "</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()).</span><span class="string">"\n"</span><span class="keyword">);<br /><br />  while (</span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="comment">// Make list of sockets to listen for changes in, including host<br />    </span><span class="default">$read </span><span class="keyword">= array(</span><span class="default">$host_socket</span><span class="keyword">);<br />         <br />    </span><span class="comment">// get a list of all the clients that have data to be read from<br />    </span><span class="default">$ready</span><span class="keyword">=@</span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />    if (</span><span class="default">$ready</span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">)<br />      die(</span><span class="string">"Failed to listen for clients: "</span><span class="keyword">. </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()));<br /><br />    </span><span class="comment">// a client request service<br />    </span><span class="keyword">elseif(</span><span class="default">$ready</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">){<br />      </span><span class="comment">// accept new client<br />      </span><span class="default">$newsocket </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$host_socket</span><span class="keyword">);<br /><br />      </span><span class="comment">// Read from socket<br />      </span><span class="default">$input </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);<br />      if(</span><span class="default">$input</span><span class="keyword">){<br />        unset(</span><span class="default">$client_header</span><span class="keyword">);<br />        </span><span class="comment">// Read headers; Split into safe lines<br />        </span><span class="default">$line</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[^A-Za-z0-9\-+\n :;=%*?.,\/_]/'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2000</span><span class="keyword">)));<br />        </span><span class="comment">// Split request line into its parts<br />        </span><span class="keyword">list(</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">"method"</span><span class="keyword">],</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">"url"</span><span class="keyword">],</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">"protocol"</span><span class="keyword">])=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />        </span><span class="comment">// Remove the request line again.<br />        </span><span class="keyword">unset(</span><span class="default">$line</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />        </span><span class="comment">// Make key=value array of headers<br />        </span><span class="keyword">foreach(</span><span class="default">$line </span><span class="keyword">as </span><span class="default">$l</span><span class="keyword">){<br />          list(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">)=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">": "</span><span class="keyword">,</span><span class="default">$l</span><span class="keyword">);<br />          if(</span><span class="default">$key</span><span class="keyword">) </span><span class="default">$client_header</span><span class="keyword">[</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)]=</span><span class="default">$val</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// Get IP of client<br />        </span><span class="default">socket_getpeername</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">, </span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'ip'</span><span class="keyword">]);<br /><br />        </span><span class="comment">// Decode url<br />        </span><span class="default">$client_header</span><span class="keyword">+=(array)</span><span class="default">parse_url</span><span class="keyword">(</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">]);<br />        </span><span class="default">parse_str</span><span class="keyword">(</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'query'</span><span class="keyword">],</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'arg'</span><span class="keyword">]);<br /><br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$client_header</span><span class="keyword">);<br /><br />        </span><span class="comment">// Serve file<br />        </span><span class="keyword">if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">],</span><span class="string">".html"</span><span class="keyword">) &amp;&amp; </span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">__DIR__</span><span class="keyword">.</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">])){<br />          echo </span><span class="string">"Sending a HTML page to client\n"</span><span class="keyword">;<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"</span><span class="default">$client_header</span><span class="keyword">[</span><span class="default">protocol</span><span class="keyword">]</span><span class="string"> 200 OK\r\n"</span><span class="keyword">);    <br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"Content-type: text/html; charset=utf-8\r\n\r\n"</span><span class="keyword">);<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">__DIR__</span><span class="keyword">.</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]).</span><span class="string">"\r\n\r\n"</span><span class="keyword">);<br />          </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">);<br />        }elseif(</span><span class="default">$client_header</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]==</span><span class="string">"/test"</span><span class="keyword">){<br />          echo </span><span class="string">"Sending test HTML page to client\n"</span><span class="keyword">;<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"&lt;!DOCTYPE HTML&gt;&lt;html&gt;&lt;head&gt;&lt;html&gt;&lt;body&gt;&lt;h1&gt;Its working!&lt;/h1&gt;Have fun\r\n"</span><span class="keyword">);<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"&lt;pre&gt;Request header: "</span><span class="keyword">. </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$client_header</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">) . </span><span class="string">"&lt;/pre&gt;\r\n"</span><span class="keyword">);<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"&lt;/body&gt;&lt;/html&gt;\r\n\r\n"</span><span class="keyword">);<br />          </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">);<br />        }else{<br />          echo </span><span class="string">"</span><span class="default">$client_header</span><span class="keyword">[</span><span class="default">protocol</span><span class="keyword">]</span><span class="string"> 404 Not Found\r\n"</span><span class="keyword">;<br />          </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">,</span><span class="string">"</span><span class="default">$client_header</span><span class="keyword">[</span><span class="default">protocol</span><span class="keyword">]</span><span class="string"> 404 Not Found\r\n\r\n"</span><span class="keyword">);   <br />          </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$newsocket</span><span class="keyword">);<br />        }<br />      }<br />    }<br />  }<br />  </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$host_socket</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97390">  <div class="votes">
    <div id="Vu97390">
    <a href="/manual/vote-note.php?id=97390&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97390">
    <a href="/manual/vote-note.php?id=97390&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97390" title="50% like this...">
    0
    </div>
  </div>
  <a href="#97390" class="name">
  <strong class="user"><em>magemerlin at list dot ru</em></strong></a><a class="genanchor" href="#97390"> &para;</a><div class="date" title="2010-04-17 03:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97390">
<div class="phpcode"><code><span class="html">If you using a Flash client - you should know some specific features:<br /><br />1) when client connects to the server - it is sending to you "&lt;policy-file-request/&gt;"."\0" string. Server should answer an XML policy file, then disconnect from this client. Code is something like <br /><br />if ('&lt;policy-file-request/&gt;'==substr($data, 0, 22))<br />                {<br />                    echo "policy requset.\n";<br />                    flush();ob_flush();<br />                    $msg = '&lt;'.'?xml version="1.0"?&gt;<br />&lt;!DOCTYPE cross-domain-policy SYSTEM "<a href="http://www.macromedia.com/xml/dtds/cross-domain-policy.dtd" rel="nofollow" target="_blank">http://www.macromedia.com/xml/dtds/cross-domain-policy.dtd</a>"&gt;<br />&lt;cross-domain-policy&gt;<br />&lt;allow-access-from domain="*" to-ports="*" /&gt;<br />&lt;/cross-domain-policy&gt;'."\0";<br />                    echo "Say to client (crossdomain.xml) ... ";<br />                    flush();ob_flush();<br />                    socket_write($read_sock, $msg, strlen($msg));<br />                    echo "OK\n";<br />                    flush();ob_flush();<br />                    <br />                    echo "Closing ... ";<br />                    flush();ob_flush();<br />                    socket_close($read_sock);<br />                    echo "OK\n";<br />                    flush();ob_flush();<br />                }<br />                else<br />                {<br />// here is normal IO operations with client<br />}<br /><br />2) every output to client should be ended with "\0" (if using XMLSocket in Flash client) - otherwise flash will not generate onData event<br /><br />Russian examples is there - <a href="http://www.flasher.ru/forum/showpost.php?p=901346&amp;postcount=7" rel="nofollow" target="_blank">http://www.flasher.ru/forum/showpost.php?p=901346&amp;postcount=7</a></span></code></div>
  </div>
 </div>
  <div class="note" id="89666">  <div class="votes">
    <div id="Vu89666">
    <a href="/manual/vote-note.php?id=89666&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89666">
    <a href="/manual/vote-note.php?id=89666&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89666" title="no votes...">
    0
    </div>
  </div>
  <a href="#89666" class="name">
  <strong class="user"><em>eidberger at jakota dot de</em></strong></a><a class="genanchor" href="#89666"> &para;</a><div class="date" title="2009-03-18 06:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89666">
<div class="phpcode"><code><span class="html">Just noticed that you have to loop socket_select () when using UDP to get all queued packets:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while (</span><span class="default">socket_select </span><span class="keyword">(</span><span class="default">$aRead</span><span class="keyword">, </span><span class="default">$aWrite</span><span class="keyword">, </span><span class="default">$aExcept</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {
<br />    foreach (</span><span class="default">$aReadUdp </span><span class="keyword">as </span><span class="default">$oSocket</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">clientReadUdp </span><span class="keyword">(</span><span class="default">$oSocket</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />That's important because every call of socket_select () on UDP brings you only one result. But there could be 10.000 results queued and if your turnarround time is to slow (server busy, other sleeps etc.), you'll never progress all results in near realtime.</span></code></div>
  </div>
 </div>
  <div class="note" id="79512">  <div class="votes">
    <div id="Vu79512">
    <a href="/manual/vote-note.php?id=79512&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79512">
    <a href="/manual/vote-note.php?id=79512&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79512" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79512" class="name">
  <strong class="user"><em>qartis at gmail dot com</em></strong></a><a class="genanchor" href="#79512"> &para;</a><div class="date" title="2007-11-30 01:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79512">
<div class="phpcode"><code><span class="html">In regards to the code posted by vardhan ( at ) rogers ( dot ) com, it appears that on the following line:<br />        if (socket_select($read, $write = NULL, $except = NULL, 0) &lt; 1)<br />the timeout parameter is accidentally set to 0, rather than NULL. This means that the select call will return immediately rather than blocking indefinitely.<br /><br />Change the socket_select line to the following for great success:<br />        if (socket_select($read, $write = NULL, $except = NULL, NULL) &lt; 1)</span></code></div>
  </div>
 </div>
  <div class="note" id="23098">  <div class="votes">
    <div id="Vu23098">
    <a href="/manual/vote-note.php?id=23098&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23098">
    <a href="/manual/vote-note.php?id=23098&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23098" title="100% like this...">
    1
    </div>
  </div>
  <a href="#23098" class="name">
  <strong class="user"><em>julian dot haupt at gmx dot de</em></strong></a><a class="genanchor" href="#23098"> &para;</a><div class="date" title="2002-07-09 10:15"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23098">
<div class="phpcode"><code><span class="html">hello,
<br />i just made a class which acts similiar to Perl's IO::Select in order to make socket selecting very easy
<br />
<br />your script should look something like that:
<br />
<br /><span class="default">&lt;?php
<br />$server </span><span class="keyword">= new </span><span class="default">Server</span><span class="keyword">;
<br /></span><span class="default">$client </span><span class="keyword">= new </span><span class="default">Client</span><span class="keyword">;
<br />
<br />for (;;) {
<br />  foreach (</span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">can_read</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">) as </span><span class="default">$socket</span><span class="keyword">) {
<br />
<br />    if (</span><span class="default">$socket </span><span class="keyword">== </span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">socket</span><span class="keyword">) {
<br />      </span><span class="comment">// New Client Socket
<br />      </span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$client</span><span class="keyword">-&gt;</span><span class="default">socket</span><span class="keyword">));
<br />    }
<br />    else {
<br />      </span><span class="comment">//there's something to read on $socket
<br />    </span><span class="keyword">}
<br />  }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />you should of course implement some routines to detect broken sockets and remove them from the select object.
<br />
<br />you can also do output buffering and check in the main-loop for sockets that are ready to write
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">select </span><span class="keyword">{
<br />  var </span><span class="default">$sockets</span><span class="keyword">;
<br />
<br />  function </span><span class="default">select</span><span class="keyword">(</span><span class="default">$sockets</span><span class="keyword">) {
<br />
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets </span><span class="keyword">= array();
<br />
<br />    foreach (</span><span class="default">$sockets </span><span class="keyword">as </span><span class="default">$socket</span><span class="keyword">) {
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);
<br />    }
<br />  }
<br />
<br />  function </span><span class="default">add</span><span class="keyword">(</span><span class="default">$add_socket</span><span class="keyword">) {
<br />    </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets</span><span class="keyword">,</span><span class="default">$add_socket</span><span class="keyword">);
<br />  }
<br />
<br />  function </span><span class="default">remove</span><span class="keyword">(</span><span class="default">$remove_socket</span><span class="keyword">) {
<br />    </span><span class="default">$sockets </span><span class="keyword">= array();
<br />
<br />    foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets </span><span class="keyword">as </span><span class="default">$socket</span><span class="keyword">) {
<br />      if(</span><span class="default">$remove_socket </span><span class="keyword">!= </span><span class="default">$socket</span><span class="keyword">)
<br />        </span><span class="default">$sockets</span><span class="keyword">[] = </span><span class="default">$socket</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets </span><span class="keyword">= </span><span class="default">$sockets</span><span class="keyword">;
<br />  }
<br />
<br />  function </span><span class="default">can_read</span><span class="keyword">(</span><span class="default">$timeout</span><span class="keyword">) {
<br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets</span><span class="keyword">;
<br />    </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">,</span><span class="default">$write </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">,</span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">);
<br />    return </span><span class="default">$read</span><span class="keyword">;
<br />  }
<br />
<br />  function </span><span class="default">can_write</span><span class="keyword">(</span><span class="default">$timeout</span><span class="keyword">) {
<br />    </span><span class="default">$write </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sockets</span><span class="keyword">;
<br />    </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">,</span><span class="default">$write</span><span class="keyword">,</span><span class="default">$except </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">);
<br />    return </span><span class="default">$write</span><span class="keyword">;
<br />  }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72547">  <div class="votes">
    <div id="Vu72547">
    <a href="/manual/vote-note.php?id=72547&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72547">
    <a href="/manual/vote-note.php?id=72547&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72547" title="no votes...">
    0
    </div>
  </div>
  <a href="#72547" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#72547"> &para;</a><div class="date" title="2007-01-23 03:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72547">
<div class="phpcode"><code><span class="html">If you want to use a simple fractional value for timeout:<br /><br /><span class="default">&lt;?php<br />socket_select</span><span class="keyword">(..., </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$timeout</span><span class="keyword">), </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$timeout</span><span class="keyword">*</span><span class="default">1000000</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64728">  <div class="votes">
    <div id="Vu64728">
    <a href="/manual/vote-note.php?id=64728&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64728">
    <a href="/manual/vote-note.php?id=64728&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64728" title="50% like this...">
    0
    </div>
  </div>
  <a href="#64728" class="name">
  <strong class="user"><em>Whosawhatsis at that google email thingy</em></strong></a><a class="genanchor" href="#64728"> &para;</a><div class="date" title="2006-04-19 07:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64728">
<div class="phpcode"><code><span class="html">Another solution to the problem of keys not being preserved is to have an additional array for looking up sockets that uses their resource identifiers as keys. This can be obtained using array_flip() in some cases, but is particularly useful if each socket is associated with an object. In this case, you can make the object's constructor add a pointer to itself to the lookup array with its socket resource identifier as a key and use the following code to execute a read method for the object associated with each socket returned by socket_select():<br /><br /><span class="default">&lt;?php<br />socket_select</span><span class="keyword">(</span><span class="default">$reads</span><span class="keyword">, </span><span class="default">$writes</span><span class="keyword">, </span><span class="default">$excepts</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$sockets </span><span class="keyword">as </span><span class="default">$socket</span><span class="keyword">) {<br />    </span><span class="default">$lookuparray</span><span class="keyword">[</span><span class="default">$socket</span><span class="keyword">]-&gt;</span><span class="default">read</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57347">  <div class="votes">
    <div id="Vu57347">
    <a href="/manual/vote-note.php?id=57347&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57347">
    <a href="/manual/vote-note.php?id=57347&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57347" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57347" class="name">
  <strong class="user"><em>crimson at NOSPAMtechnologist dot com</em></strong></a><a class="genanchor" href="#57347"> &para;</a><div class="date" title="2005-09-30 04:15"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57347">
<div class="phpcode"><code><span class="html">Note that the resulting arrays do NOT maintain keys (PHP 4.3.2) after being run through this function:<br /><br />Before:<br />Array<br />(<br />    [Client_Socket] =&gt; Resource id #6<br />    [Server_Socket] =&gt; Resource id #9<br />)<br /><br />After:<br />Array<br />(<br />    [0] =&gt; Resource id #6<br />    [1] =&gt; Resource id #9<br />)<br /><br />It would have been nice to have the keys stay to figure out which stream you need to receive from, but you'll have to use some fancy foreach loop to figure out which sockets to check.</span></code></div>
  </div>
 </div>
  <div class="note" id="52443">  <div class="votes">
    <div id="Vu52443">
    <a href="/manual/vote-note.php?id=52443&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52443">
    <a href="/manual/vote-note.php?id=52443&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52443" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52443" class="name">
  <strong class="user"><em>drenintell</em></strong></a><a class="genanchor" href="#52443"> &para;</a><div class="date" title="2005-05-01 01:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52443">
<div class="phpcode"><code><span class="html">The continuation of my my previous post on 28-Apr-2005 10:19 at<br /><a href="http://ca3.php.net/manual/en/function.socket-select.php" rel="nofollow" target="_blank">http://ca3.php.net/manual/en/function.socket-select.php</a><br /><br />Here it is: (Link is broken into 2 parts)<br /><br />'<a href="http://gtkphp.org/php_socket_select_hangs" rel="nofollow" target="_blank">http://gtkphp.org/php_socket_select_hangs</a><br />_explanation_and_solution.html'</span></code></div>
  </div>
 </div>
  <div class="note" id="58367">  <div class="votes">
    <div id="Vu58367">
    <a href="/manual/vote-note.php?id=58367&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58367">
    <a href="/manual/vote-note.php?id=58367&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58367" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#58367" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#58367"> &para;</a><div class="date" title="2005-11-01 05:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58367">
<div class="phpcode"><code><span class="html">Regarding the comment below, No, it does not, it's a system call and I believe it's rather hard to preserve keys.<br /><br />Additionally, socket_select should be used like it was a user-inputted array, that you don't know what you sent in to.<br /><br /><span class="default">&lt;?php<br />$reads </span><span class="keyword">= </span><span class="default">$clients</span><span class="keyword">;<br /></span><span class="default">$reads</span><span class="keyword">[] = </span><span class="default">$server</span><span class="keyword">;<br /><br /></span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$reads</span><span class="keyword">);<br /><br />foreach (</span><span class="default">$reads </span><span class="keyword">as </span><span class="default">$read</span><span class="keyword">) {<br />    </span><span class="comment">/* do some stuff */<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124613">  <div class="votes">
    <div id="Vu124613">
    <a href="/manual/vote-note.php?id=124613&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124613">
    <a href="/manual/vote-note.php?id=124613&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124613" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#124613" class="name">
  <strong class="user"><em>juanfe0245 at gmail dot com</em></strong></a><a class="genanchor" href="#124613"> &para;</a><div class="date" title="2020-01-14 09:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124613">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">//Creamos un socket de transmisión de tipo TCP / IP.<br /></span><span class="default">$servidorSocket</span><span class="keyword">=</span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br /></span><span class="comment">//Configuramos la opción para reutilizar el puerto.<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_REUSEADDR</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /></span><span class="comment">/*<br />    Vinculamos el socket a nuestro puerto y dirección IP.<br />    Ahora, todas las conecciones en este puerto son nuestro responsabilidad para recibir y enviar datos.<br />*/<br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">,</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="default">9000</span><span class="keyword">);<br /></span><span class="comment">//Comenzamos a escuchar conexiones.<br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">);<br /></span><span class="comment">/*<br />    Creamos un arreglo con todos los clientes que se conectarán a nuestro servidor.<br />    Añadimos nuestro socket servidor al arreglo de clientes.<br />*/<br /></span><span class="default">$clientes</span><span class="keyword">=[</span><span class="default">$servidorSocket</span><span class="keyword">];<br /></span><span class="default">$null</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br />while(</span><span class="default">true</span><span class="keyword">){<br />    </span><span class="comment">//Creamos una copia de $clientes, debido a que $clientes no se modifica por la función socket_select().<br />    </span><span class="default">$nuevoClienteLector</span><span class="keyword">=</span><span class="default">$clientes</span><span class="keyword">;<br />    </span><span class="comment">//Obtenemos una lista de todos los clientes que tienen datos para leer.<br />    </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$nuevoClienteLector</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br />    </span><span class="comment">//Verificamos si hay un cliente tratando de conectarse.<br />    </span><span class="keyword">if(</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">,</span><span class="default">$nuevoClienteLector</span><span class="keyword">)){<br />        </span><span class="comment">//Aceptamos el cliente y lo añadimos al arreglo de $clientes.<br />        </span><span class="default">$nuevoCliente</span><span class="keyword">=</span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">);<br />        echo </span><span class="string">"Socket aceptado.\n"</span><span class="keyword">;<br />        </span><span class="default">$clientes</span><span class="keyword">[]=</span><span class="default">$nuevoCliente</span><span class="keyword">;<br />        </span><span class="comment">//Obtenemos el encabezado del cliente y realizamos la comprobación del handshake.<br />        </span><span class="default">$encabezado</span><span class="keyword">=</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$nuevoCliente</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br />        </span><span class="default">handshake</span><span class="keyword">(</span><span class="default">$nuevoCliente</span><span class="keyword">,</span><span class="default">$encabezado</span><span class="keyword">);<br />        </span><span class="comment">//Eliminamos el cliente del arreglo $nuevoClienteLector.<br />        </span><span class="default">$nuevoClienteIndex</span><span class="keyword">=</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">,</span><span class="default">$nuevoClienteLector</span><span class="keyword">);<br />        unset(</span><span class="default">$nuevoClienteLector</span><span class="keyword">[</span><span class="default">$nuevoClienteIndex</span><span class="keyword">]);<br />    }<br />    </span><span class="comment">//Recorremos todos los clientes que tienen datos por leer.<br />    </span><span class="keyword">foreach(</span><span class="default">$nuevoClienteLector </span><span class="keyword">as </span><span class="default">$cliente</span><span class="keyword">){<br />        </span><span class="comment">//Recibimos información del cliente conectado.<br />        </span><span class="keyword">while(</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$cliente</span><span class="keyword">,</span><span class="default">$datosCliente</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">)&gt;=</span><span class="default">1</span><span class="keyword">){<br />            </span><span class="comment">//Decodificamos el mensaje que viene en bytes.<br />            </span><span class="default">$mensaje</span><span class="keyword">=</span><span class="default">decodificar</span><span class="keyword">(</span><span class="default">$datosCliente</span><span class="keyword">);<br />            </span><span class="comment">//Enviamos el mensaje a todos los sockets conectados.<br />            </span><span class="default">enviar</span><span class="keyword">(</span><span class="default">$clientes</span><span class="keyword">,</span><span class="default">$mensaje</span><span class="keyword">);<br />            echo </span><span class="default">$mensaje</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />            break </span><span class="default">2</span><span class="keyword">;<br />        }<br />        </span><span class="comment">//Verificamos si el cliente esta desconectado.<br />        </span><span class="default">$datosCliente</span><span class="keyword">=@</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$cliente</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">,</span><span class="default">PHP_NORMAL_READ</span><span class="keyword">);<br />        if(</span><span class="default">$datosCliente</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){<br />            </span><span class="default">$clienteIndex</span><span class="keyword">=</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$cliente</span><span class="keyword">,</span><span class="default">$clientes</span><span class="keyword">);<br />            </span><span class="comment">//Eliminamos el cliente del arreglo $clientes.<br />            </span><span class="keyword">unset(</span><span class="default">$clientes</span><span class="keyword">[</span><span class="default">$clienteIndex</span><span class="keyword">]);<br />            echo </span><span class="string">"Cliente desconectado.\n"</span><span class="keyword">;<br />        }<br />    }<br />}<br />function </span><span class="default">enviar</span><span class="keyword">(</span><span class="default">$clientes</span><span class="keyword">,</span><span class="default">$mensaje</span><span class="keyword">){<br />    </span><span class="default">$mensaje</span><span class="keyword">=</span><span class="default">codificar</span><span class="keyword">(</span><span class="default">$mensaje</span><span class="keyword">);<br />    foreach(</span><span class="default">$clientes </span><span class="keyword">as </span><span class="default">$cliente</span><span class="keyword">){<br />        @</span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$cliente</span><span class="keyword">,</span><span class="default">$mensaje</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$mensaje</span><span class="keyword">));<br />    }<br />}<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$servidorSocket</span><span class="keyword">);<br />function </span><span class="default">codificar</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">){<br />    </span><span class="default">$b1 </span><span class="keyword">= </span><span class="default">0x80 </span><span class="keyword">| (</span><span class="default">0x1 </span><span class="keyword">&amp; </span><span class="default">0x0f</span><span class="keyword">);<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">);<br />    <br />    if(</span><span class="default">$length </span><span class="keyword">&lt;= </span><span class="default">125</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CC'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    elseif(</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">125 </span><span class="keyword">&amp;&amp; </span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">65536</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CCn'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">126</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    elseif(</span><span class="default">$length </span><span class="keyword">&gt;= </span><span class="default">65536</span><span class="keyword">)<br />        </span><span class="default">$header </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'CCNN'</span><span class="keyword">, </span><span class="default">$b1</span><span class="keyword">, </span><span class="default">127</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />    return </span><span class="default">$header</span><span class="keyword">.</span><span class="default">$socketData</span><span class="keyword">;<br />}<br />function </span><span class="default">decodificar</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">) {<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) &amp; </span><span class="default">127</span><span class="keyword">;<br />    if(</span><span class="default">$length </span><span class="keyword">== </span><span class="default">126</span><span class="keyword">) {<br />        </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);<br />    }<br />    elseif(</span><span class="default">$length </span><span class="keyword">== </span><span class="default">127</span><span class="keyword">) {<br />        </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">14</span><span class="keyword">);<br />    }<br />    else {<br />        </span><span class="default">$masks </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$socketData</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />    }<br />    </span><span class="default">$socketData </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">); ++</span><span class="default">$i</span><span class="keyword">) {<br />        </span><span class="default">$socketData </span><span class="keyword">.= </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ^ </span><span class="default">$masks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">%</span><span class="default">4</span><span class="keyword">];<br />    }<br />    return </span><span class="default">$socketData</span><span class="keyword">;<br />}<br />function </span><span class="default">handshake</span><span class="keyword">(</span><span class="default">$client_socket_resource</span><span class="keyword">,</span><span class="default">$received_header</span><span class="keyword">) {<br />    </span><span class="default">$headers </span><span class="keyword">= array();<br />    </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/\r\n/"</span><span class="keyword">, </span><span class="default">$received_header</span><span class="keyword">);<br />    foreach(</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">){<br />        </span><span class="default">$line </span><span class="keyword">= </span><span class="default">chop</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\A(\S+): (.*)\z/'</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">)) </span><span class="default">$headers</span><span class="keyword">[</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]] = </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />    }<br />    </span><span class="default">$secKey </span><span class="keyword">= </span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'Sec-WebSocket-Key'</span><span class="keyword">];<br />    </span><span class="default">$secAccept </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">pack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">, </span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$secKey </span><span class="keyword">. </span><span class="string">'258EAFA5-E914-47DA-95CA-C5AB0DC85B11'</span><span class="keyword">)));<br />    </span><span class="default">$buffer  </span><span class="keyword">= </span><span class="string">"HTTP/1.1 101 Web Socket Protocol Handshake\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Upgrade: websocket\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Connection: Upgrade\r\n" </span><span class="keyword">.<br />    </span><span class="string">"Sec-WebSocket-Accept:</span><span class="default">$secAccept</span><span class="string">\r\n\r\n"</span><span class="keyword">;<br />    </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$client_socket_resource</span><span class="keyword">,</span><span class="default">$buffer</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">));<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123763">  <div class="votes">
    <div id="Vu123763">
    <a href="/manual/vote-note.php?id=123763&amp;page=function.socket-select&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123763">
    <a href="/manual/vote-note.php?id=123763&amp;page=function.socket-select&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123763" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#123763" class="name">
  <strong class="user"><em>renmengyang567 at gmail dot com</em></strong></a><a class="genanchor" href="#123763"> &para;</a><div class="date" title="2019-04-09 12:18"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123763">
<div class="phpcode"><code><span class="html">&lt;explain&gt;<br /> A simple socket-select case ^_^<br /><br /><span class="default">&lt;?php<br />$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'tcp'</span><span class="keyword">));<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_REUSEADDR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="string">'127.0.0.1'</span><span class="keyword">,</span><span class="default">5000</span><span class="keyword">);<br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$all_sock</span><span class="keyword">[(int)</span><span class="default">$sock</span><span class="keyword">] = </span><span class="default">$sock</span><span class="keyword">;<br /><br />while (</span><span class="default">true</span><span class="keyword">) { <br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$write </span><span class="keyword">= </span><span class="default">$except </span><span class="keyword">= [];<br />    </span><span class="default">$tv_sec </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">;<br />    </span><span class="default">$tv_usec </span><span class="keyword">= </span><span class="default">5000</span><span class="keyword">;<br />    </span><span class="default">$read </span><span class="keyword">= </span><span class="default">$all_sock</span><span class="keyword">;<br />    <br />    </span><span class="default">$changed </span><span class="keyword">= </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">, </span><span class="default">$write</span><span class="keyword">, </span><span class="default">$except</span><span class="keyword">, </span><span class="default">$tv_sec</span><span class="keyword">, </span><span class="default">$tv_sec</span><span class="keyword">);<br /><br />    if (</span><span class="default">false </span><span class="keyword">== </span><span class="default">$changed</span><span class="keyword">)<br />        print </span><span class="string">"[error]socket_select() failed <br />        (" </span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">()) . </span><span class="string">")\n"</span><span class="keyword">;<br /><br />    if (</span><span class="default">$changed </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">)<br />       continue;<br /><br />    </span><span class="comment">//var_dump($read);<br />    //sleep(2);<br />    </span><span class="keyword">foreach (</span><span class="default">$read </span><span class="keyword">as </span><span class="default">$rsock</span><span class="keyword">) {<br />        </span><span class="comment">// 服务端连接<br />        </span><span class="keyword">if (</span><span class="default">$rsock </span><span class="keyword">=== </span><span class="default">$sock</span><span class="keyword">) {<br />            </span><span class="default">$client </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br />            </span><span class="default">$all_sock</span><span class="keyword">[(int)</span><span class="default">$client</span><span class="keyword">] = </span><span class="default">$client</span><span class="keyword">;<br />        <br />        } else {</span><span class="comment">//客户端连接 <br />            </span><span class="default">$msg</span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$rsock</span><span class="keyword">, </span><span class="default">400</span><span class="keyword">,</span><span class="default">PHP_NORMAL_READ</span><span class="keyword">);<br />            if (</span><span class="default">$msg </span><span class="keyword">!== </span><span class="string">''</span><span class="keyword">) {<br />                </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">);<br />            } <br />        }<br />    }<br />}<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-select&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-select.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
