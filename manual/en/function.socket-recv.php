<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_recv - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-recv.php">
 <link rel="shorturl" href="https://www.php.net/socket-recv">
 <link rel="alternate" href="https://www.php.net/socket-recv" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-read.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-recvfrom.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-recv.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-recv.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-recv.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-recv.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-recv.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-recv.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-recv.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-recv.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-recv.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-recv.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-recv.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Receives data from a connected socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_recv - Manual" />
<meta name="twitter:description" content="Receives data from a connected socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_recv - Manual" />
<meta itemprop="description" content="Receives data from a connected socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Receives data from a connected socket" />

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
        <a href="function.socket-recvfrom.php">
          socket_recvfrom &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-read.php">
          &laquo; socket_read        </a>
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
            <option value='en/function.socket-recv.php' selected="selected">English</option>
            <option value='de/function.socket-recv.php'>German</option>
            <option value='es/function.socket-recv.php'>Spanish</option>
            <option value='fr/function.socket-recv.php'>French</option>
            <option value='it/function.socket-recv.php'>Italian</option>
            <option value='ja/function.socket-recv.php'>Japanese</option>
            <option value='pt_BR/function.socket-recv.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-recv.php'>Russian</option>
            <option value='tr/function.socket-recv.php'>Turkish</option>
            <option value='uk/function.socket-recv.php'>Ukrainian</option>
            <option value='zh/function.socket-recv.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-recv" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_recv</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_recv</span> &mdash; <span class="dc-title">Receives data from a connected socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-recv-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_recv</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter reference">&$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code></span><br>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>socket_recv()</strong></span> function receives
   <code class="parameter">length</code> bytes of data in <code class="parameter">data</code> from
   <code class="parameter">socket</code>. <span class="function"><strong>socket_recv()</strong></span> can
   be used to gather data from connected sockets. Additionally, one or
   more flags can be specified to modify the behaviour of the
   function.
  </p>
  <p class="para">
   <code class="parameter">data</code> is passed by reference, so it must be
   specified as a variable in the argument list. Data read from
   <code class="parameter">socket</code> by <span class="function"><strong>socket_recv()</strong></span>
   will be returned in <code class="parameter">data</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-recv-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">socket</code> must be a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance previously
       created by <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>.
      </p>
     </dd>
    

    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The data received will be fetched to the variable specified with
       <code class="parameter">data</code>. If an error occurs, if the
       connection is reset, or if no data is
       available, <code class="parameter">data</code> will be set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </p>
     </dd>
    

    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       Up to <code class="parameter">length</code> bytes will be fetched from remote host.
      </p>
     </dd>
    

    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The value of <code class="parameter">flags</code> can be any combination of 
       the following flags, joined with the binary OR (<code class="literal">|</code>)
       operator.
      </p>
      
      <table class="doctable table">
       <caption><strong>Possible values for <code class="parameter">flags</code></strong></caption>
       
        <thead>
         <tr>
          <th>Flag</th>
          <th>Description</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.msg-oob">MSG_OOB</a></code></strong></td>
          <td>
           Process out-of-band data.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.msg-peek">MSG_PEEK</a></code></strong></td>
          <td>
           Receive data from the beginning of the receive queue without
           removing it from the queue.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.msg-waitall">MSG_WAITALL</a></code></strong></td>
          <td>
           Block until at least <code class="parameter">length</code> are received.
           However, if a signal is caught or the remote host disconnects, the
           function may return less data.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.msg-dontwait">MSG_DONTWAIT</a></code></strong></td>
          <td>
           With this flag set, the function returns even if it would normally
           have blocked.
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
        
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-recv-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>socket_recv()</strong></span> returns the number of bytes received,
   or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if there was an error. The actual error code can be retrieved by 
   calling <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>. This error code may be
   passed to <span class="function"><a href="function.socket-strerror.php" class="function">socket_strerror()</a></span> to get a textual explanation
   of the error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-recv-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.socket-recv-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4802">
    <p><strong>Example #1 <span class="function"><strong>socket_recv()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     This example is a simple rewrite of the first example from
     <a href="sockets.examples.php" class="xref">Examples</a> to
     use <span class="function"><strong>socket_recv()</strong></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"&lt;h2&gt;TCP/IP Connection&lt;/h2&gt;\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Get the port for the WWW service. */<br /></span><span style="color: #0000BB">$service_port </span><span style="color: #007700">= </span><span style="color: #0000BB">getservbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tcp'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Get the IP address for the target host. */<br /></span><span style="color: #0000BB">$address </span><span style="color: #007700">= </span><span style="color: #0000BB">gethostbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www.example.com'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Create a TCP/IP socket. */<br /></span><span style="color: #0000BB">$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create</span><span style="color: #007700">(</span><span style="color: #0000BB">AF_INET</span><span style="color: #007700">, </span><span style="color: #0000BB">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_TCP</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$socket </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_create() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br />}<br /><br />echo </span><span style="color: #DD0000">"Attempting to connect to '</span><span style="color: #0000BB">$address</span><span style="color: #DD0000">' on port '</span><span style="color: #0000BB">$service_port</span><span style="color: #DD0000">'..."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$address</span><span style="color: #007700">, </span><span style="color: #0000BB">$service_port</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"socket_connect() failed.\nReason: (</span><span style="color: #0000BB">$result</span><span style="color: #DD0000">) " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">= </span><span style="color: #DD0000">"HEAD / HTTP/1.1\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Host: www.example.com\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$out </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Sending HTTP HEAD request..."</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">socket_write</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$in</span><span style="color: #007700">, </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$in</span><span style="color: #007700">));<br />echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Reading response:\n\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$buf </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is my buffer.'</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">false </span><span style="color: #007700">!== (</span><span style="color: #0000BB">$bytes </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_recv</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">$buf</span><span style="color: #007700">, </span><span style="color: #0000BB">2048</span><span style="color: #007700">, </span><span style="color: #0000BB">MSG_WAITALL</span><span style="color: #007700">))) {<br />    echo </span><span style="color: #DD0000">"Read </span><span style="color: #0000BB">$bytes</span><span style="color: #DD0000"> bytes from socket_recv(). Closing socket..."</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"socket_recv() failed; reason: " </span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">socket_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$buf </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"OK.\n\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&lt;h2&gt;TCP/IP Connection&lt;/h2&gt;
OK.
Attempting to connect to &#039;208.77.188.166&#039; on port &#039;80&#039;...OK.
Sending HTTP HEAD request...OK.
Reading response:

Read 123 bytes from socket_recv(). Closing socket...HTTP/1.1 200 OK
Date: Mon, 14 Sep 2009 08:56:36 GMT
Server: Apache/2.2.3 (Red Hat)
Last-Modified: Tue, 15 Nov 2005 13:24:10 GMT
ETag: &quot;b80f4-1b6-80bfd280&quot;
Accept-Ranges: bytes
Content-Length: 438
Connection: close
Content-Type: text/html; charset=UTF-8

OK.</pre>
</div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-recv.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-recv%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-recv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-recv.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="47182">  <div class="votes">
    <div id="Vu47182">
    <a href="/manual/vote-note.php?id=47182&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47182">
    <a href="/manual/vote-note.php?id=47182&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47182" title="74% like this...">
    31
    </div>
  </div>
  <a href="#47182" class="name">
  <strong class="user"><em>dgk at tcde dot ru</em></strong></a><a class="genanchor" href="#47182"> &para;</a><div class="date" title="2004-11-05 03:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47182">
<div class="phpcode"><code><span class="html">I've used socket_select and socket_recv with a while loop and found myself in trouble when remote side closed connection. The code below produced infinite loop and socket_select returned immediately (which lead to high cpu time consumption).<br /><br />&lt;?<br /><br />socket_set_nonblock($my_socket);<br />$streams = array($my_socket/*, ... */);<br /><br />$lastAccess = time();<br />while (socket_select($streams, $write = NULL, $except = NULL, SLEEP_TIME_SECONDS, SLEEP_TIME_MILLISECONDS) !== FALSE) {<br />    if (in_array($my_socket, $streams)) {<br />        while (@socket_recv($my_socket, $data, 8192, 0)) {<br />            echo $data;<br />        }<br />        $lastAccess = time();<br />    } else {<br />        if (time()-$lastAccess &gt; LAST_ACCESS_TIMEOUT) {<br />            break;<br />        }<br />    }<br />    // ...<br />    $streams = array($my_socket/*, ... */);<br />}<br /><br />?&gt;<br /><br />The solution was simple, but quite hard to find because socket_recv is not documented. socket_recv returns FALSE if there is no data and 0 if the socket is widowed (disconnected by remote side). So I had just to check return value of socket_recv. The problem now sounds stupid, but I've spend some time to find it out.<br />I hope this will save some of somebody's hair ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="112728">  <div class="votes">
    <div id="Vu112728">
    <a href="/manual/vote-note.php?id=112728&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112728">
    <a href="/manual/vote-note.php?id=112728&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112728" title="84% like this...">
    13
    </div>
  </div>
  <a href="#112728" class="name">
  <strong class="user"><em>ss-130 at yandex dot ru</em></strong></a><a class="genanchor" href="#112728"> &para;</a><div class="date" title="2013-07-17 11:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112728">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$er </span><span class="keyword">= </span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">$bytes    </span><span class="keyword">= </span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">,</span><span class="default">$buffer</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">MSG_WAITALL</span><span class="keyword">);<br /></span><span class="default">error_reporting</span><span class="keyword">(</span><span class="default">$er</span><span class="keyword">);<br /><br /></span><span class="comment">// MEGA BUG HERE<br />// this statuses are wrong and swapped, closed socket must be with "FALSE"<br />// but in fact he swap the values:<br />// <a href="http://php.net/manual/en/function.socket-recv.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.socket-recv.php</a><br />// <br /></span><span class="keyword">if(</span><span class="default">$bytes</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">){ </span><span class="comment">// no data available, socket not closed<br />    </span><span class="keyword">echo </span><span class="string">'WS_READ_ERR1: '</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)).</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    </span><span class="comment">// print when no data available:<br />    // WS_READ_ERR1: Resource temporarily unavailable<br />    </span><span class="keyword">continue;<br />}else if(</span><span class="default">$bytes</span><span class="keyword">===</span><span class="default">0</span><span class="keyword">){ </span><span class="comment">// socket closed<br />    </span><span class="keyword">echo </span><span class="string">'WS_READ_ERR2: '</span><span class="keyword">.</span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)).</span><span class="default">PHP_EOL</span><span class="keyword">;<br />    </span><span class="comment">// print when socket closed:<br />    // WS_READ_ERR2: Success<br />    </span><span class="default">$process</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115372">  <div class="votes">
    <div id="Vu115372">
    <a href="/manual/vote-note.php?id=115372&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115372">
    <a href="/manual/vote-note.php?id=115372&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115372" title="68% like this...">
    7
    </div>
  </div>
  <a href="#115372" class="name">
  <strong class="user"><em>m_lajos at hotmail dot com</em></strong></a><a class="genanchor" href="#115372"> &para;</a><div class="date" title="2014-07-14 03:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115372">
<div class="phpcode"><code><span class="html">Workaround for the missing MSG_DONTWAIT flag according to the bug report page:<br /><br /><span class="default">&lt;?php </span><span class="keyword">if(!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'MSG_DONTWAIT'</span><span class="keyword">)) </span><span class="default">define</span><span class="keyword">(</span><span class="string">'MSG_DONTWAIT'</span><span class="keyword">, </span><span class="default">0x40</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56161">  <div class="votes">
    <div id="Vu56161">
    <a href="/manual/vote-note.php?id=56161&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56161">
    <a href="/manual/vote-note.php?id=56161&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56161" title="66% like this...">
    2
    </div>
  </div>
  <a href="#56161" class="name">
  <strong class="user"><em>rathamahata at rathamahata dot net</em></strong></a><a class="genanchor" href="#56161"> &para;</a><div class="date" title="2005-08-25 04:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56161">
<div class="phpcode"><code><span class="html">It looks like that mysterious flags are just the recv(2) flags passed to your OS syscall and nothing more...<br /><br />ext/sockets/sockets.c:PHP_FUNCTION(socket_recv)<br />...<br />        if ((retval = recv(php_sock-&gt;bsd_socket, recv_buf, len, flags)) &lt; 1) {<br />                efree(recv_buf);<br />...<br /><br />for linux you can type `man 2 recv' and you will see complete description of thouse flags.<br /><br />Sergey S. Kosrtyliov &lt;rathamahata@rathamahata.net&gt;<br /><a href="http://www.rathamahata.net/" rel="nofollow" target="_blank">http://www.rathamahata.net/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="41278">  <div class="votes">
    <div id="Vu41278">
    <a href="/manual/vote-note.php?id=41278&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41278">
    <a href="/manual/vote-note.php?id=41278&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41278" title="60% like this...">
    1
    </div>
  </div>
  <a href="#41278" class="name">
  <strong class="user"><em>bastiaan at [no-spam] megabass dot nl</em></strong></a><a class="genanchor" href="#41278"> &para;</a><div class="date" title="2004-04-05 09:35"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41278">
<div class="phpcode"><code><span class="html">in case you want to empty/unset $buffer, but failing to do so, try using 0 as flag.<br />PHP_NORMAL_READ and PHP_BINARY_READ respectively hold 1 and 2 as value.</span></code></div>
  </div>
 </div>
  <div class="note" id="107740">  <div class="votes">
    <div id="Vu107740">
    <a href="/manual/vote-note.php?id=107740&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107740">
    <a href="/manual/vote-note.php?id=107740&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107740" title="57% like this...">
    1
    </div>
  </div>
  <a href="#107740" class="name">
  <strong class="user"><em>davide dot renzi at gmail dot com</em></strong></a><a class="genanchor" href="#107740"> &para;</a><div class="date" title="2012-03-01 08:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107740">
<div class="phpcode"><code><span class="html">In PHP version 5.* there is a bug: MSG_DONTWAIT flag is not defined (see <a href="https://bugs.php.net/bug.php?id=48326" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=48326</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="123308">  <div class="votes">
    <div id="Vu123308">
    <a href="/manual/vote-note.php?id=123308&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123308">
    <a href="/manual/vote-note.php?id=123308&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123308" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123308" class="name">
  <strong class="user"><em>lexkrstn at gmail dot com</em></strong></a><a class="genanchor" href="#123308"> &para;</a><div class="date" title="2018-11-05 06:21"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123308">
<div class="phpcode"><code><span class="html">It seems like the flags are just passed to the underlying recv() function of your OS, hence there no MSG_DONTWAIT flag on Windows and you should not define it yourself in that case, it just won't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="125895">  <div class="votes">
    <div id="Vu125895">
    <a href="/manual/vote-note.php?id=125895&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125895">
    <a href="/manual/vote-note.php?id=125895&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125895" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125895" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125895"> &para;</a><div class="date" title="2021-03-10 09:49"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125895">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">Safe</span><span class="keyword">;<br /><br />use </span><span class="default">Safe\Exceptions\SocketsException</span><span class="keyword">;<br /><br /></span><span class="comment">/**<br /> * After the socket socket has been created<br /> * using socket_create, bound to a name with<br /> * socket_bind, and told to listen for connections<br /> * with socket_listen, this function will accept<br /> * incoming connections on that socket. Once a successful connection<br /> * is made, a new socket resource is returned, which may be used<br /> * for communication. If there are multiple connections queued on<br /> * the socket, the first will be used. If there are no pending<br /> * connections, socket_accept will block until<br /> * a connection becomes present. If socket<br /> * has been made non-blocking using<br /> * socket_set_blocking or<br /> * socket_set_nonblock, FALSE will be returned.<br /> *<br /> * The socket resource returned by<br /> * socket_accept may not be used to accept new<br /> * connections. The original listening socket<br /> * socket, however, remains open and may be<br /> * reused.<br /> *<br /> * @param resource $socket A valid socket resource created with socket_create.<br /> * @return resource Returns a new socket resource on success. The actual<br /> * error code can be retrieved by calling<br /> * socket_last_error. This error code may be passed to<br /> * socket_strerror to get a textual explanation of the<br /> * error.<br /> * @throws SocketsException<br /> *<br /> */<br /></span><span class="keyword">function </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)<br />{<br />    </span><span class="default">error_clear_last</span><span class="keyword">();<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">\socket_accept</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        throw </span><span class="default">SocketsException</span><span class="keyword">::</span><span class="default">createFromPhpError</span><span class="keyword">();<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/**<br /> * Create a Socket resource, and bind it to the provided AddrInfo resource.  The return<br /> * value of this function may be used with socket_listen.<br /> *<br /> * @param resource $addr Resource created from socket_addrinfo_lookup.<br /> * @return resource Returns a Socket resource on success.<br /> * @throws SocketsException<br /> *<br /> */<br /></span><span class="keyword">function </span><span class="default">socket_addrinfo_bind</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">)<br />{<br />    </span><span class="default">error_clear_last</span><span class="keyword">();<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">\socket_addrinfo_bind</span><span class="keyword">(</span><span class="default">$addr</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {<br />        throw </span><span class="default">SocketsException</span><span class="keyword">::</span><span class="default">createFromPhpError</span><span class="keyword">();<br />    }<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52552">  <div class="votes">
    <div id="Vu52552">
    <a href="/manual/vote-note.php?id=52552&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52552">
    <a href="/manual/vote-note.php?id=52552&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52552" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52552" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52552"> &para;</a><div class="date" title="2005-05-05 07:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52552">
<div class="phpcode"><code><span class="html">I'm glad that Bastion left the above post about the mysterious int flag. He just helped to fix a problem that I've spent six hours on. Here's my code:<br /><br />for($ct=1; $ct&lt;=$numrecs; $ct++) {<br />     $rec = "";<br />     $nr=socket_recv($fp,$rec,77,0);<br />     print "Rec # $ct --&gt;";<br />         print "$rec";<br />         print "&lt;br&gt;";<br />      }<br /><br />The code is pretty simple, it just loops through all my records and prints them out. All records are 77 bytes and all end with a period. The first 36 records print perfectly then at 37 things go bad. The records start to get offset. The last few characters of the 37th record end up printing on the 38th record. The data on the sending side was perfect, so I knew that the problem was with socked_recv.<br /><br />After reading the above post I tried changing the int flag. Changing the flag to 2 worked:<br />$nr=socket_recv($fp,$rec,77,2);<br /><br />Now everything lines up perfectly. I had always left int flag as 0 since it's undocumented. <br /><br />Martin K.</span></code></div>
  </div>
 </div>
  <div class="note" id="47789">  <div class="votes">
    <div id="Vu47789">
    <a href="/manual/vote-note.php?id=47789&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47789">
    <a href="/manual/vote-note.php?id=47789&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47789" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#47789" class="name">
  <strong class="user"><em>engine at [NO SPAM] illusiononly dot com</em></strong></a><a class="genanchor" href="#47789"> &para;</a><div class="date" title="2004-11-30 04:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47789">
<div class="phpcode"><code><span class="html">To read from socket both on linux and windows OS having  flash as a client I use function bellow. $length is the size of  a chunk, not the max length to read. It will continue reading until EOL char  occures or client disconnects (or in case of error), so it works for bigger packets as well.<br /><br />     function read($descriptor, $length = 1024) {<br />            $this-&gt;method = "read";<br />            if(!$client){<br />                echo("No valid socket descriptor !\n");<br />                return false;<br />            }<br />            $read ='';<br />        while(($flag=socket_recv($descriptor, $buf, $length,0))&gt;0){<br />              $asc=ord(substr($buf, -1));<br />            if ($asc==0) {<br />                $read.=substr($buf,0,-1);<br />                break;<br />            }else{<br />                $read.=$buf;<br />            }<br />        }<br />           if ($flag&lt;0){<br />            //error<br />            return false;<br />        }elseif ($flag==0){<br />            //Client disconnected<br />            return  false;<br />        }else{<br />              return $read;<br />        }<br /><br />     }</span></code></div>
  </div>
 </div>
  <div class="note" id="52582">  <div class="votes">
    <div id="Vu52582">
    <a href="/manual/vote-note.php?id=52582&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52582">
    <a href="/manual/vote-note.php?id=52582&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52582" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#52582" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52582"> &para;</a><div class="date" title="2005-05-06 04:59"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52582">
<div class="phpcode"><code><span class="html">My last post was incorrect. The int flag set to 2 apparently reset the file position pointer so what I was reading was the first record repeatedly. <br /><br />My workaroud ended up being the following:<br /><br />for($ct=1; $ct&lt;=$numrecs; $ct++) {<br />    $rec = "";<br />    $nr=socket_recv($fp,$rec,76,0);<br />        <br />    //grab the extra bytes.<br />    $terminator = "";<br />    while ($terminator != ".") {<br />        $nr=socket_recv($fp,$terminator,1,0);<br />    }<br />    <br />     $custarray[]=substr($rec,0,76);         <br />}<br /><br />Martin K.</span></code></div>
  </div>
 </div>
  <div class="note" id="115904">  <div class="votes">
    <div id="Vu115904">
    <a href="/manual/vote-note.php?id=115904&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115904">
    <a href="/manual/vote-note.php?id=115904&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115904" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#115904" class="name">
  <strong class="user"><em>cottton at i-stats dot net</em></strong></a><a class="genanchor" href="#115904"> &para;</a><div class="date" title="2014-10-13 02:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115904">
<div class="phpcode"><code><span class="html">socket_recv()<br />returns FALSE if client returned no data<br />returns 0 (zero) if client disconnected<br /><br />also (asuming case socket_select() "gave" us a "changed" socket):<br />if <br />socket_recv() returned FALSE <br />and no bytes were received <br />then<br />client "crashed" (call it disconnected).<br /><br />else if<br />socket_recv() returned 0 (zero) <br />and no bytes were received <br />then<br />client "normaly" disconnected.<br /><br />Im pretty sure -- 99.99%.<br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">receive</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">)<br />{<br />    </span><span class="comment">// !<br />    // on all following cases we assume that<br />    // socket_select() returned the current socket as "changed"<br />    // !<br /><br />    </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">; </span><span class="comment">// set your timeout<br /><br />    /* important */<br />    </span><span class="default">$socket_recv_return_values</span><span class="keyword">[</span><span class="string">'no_data_received'</span><span class="keyword">] = </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$socket_recv_return_values</span><span class="keyword">[</span><span class="string">'client_disconnected'</span><span class="keyword">] = </span><span class="default">0</span><span class="keyword">;<br /><br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    </span><span class="default">$received_data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">$received_bytes </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    </span><span class="default">socket_set_nonblock</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />    </span><span class="default">socket_clear_error</span><span class="keyword">();<br />    while(<br />        (</span><span class="default">$t_out</span><span class="keyword">=((</span><span class="default">time</span><span class="keyword">()-</span><span class="default">$start</span><span class="keyword">) &gt;= </span><span class="default">$timeout</span><span class="keyword">)) === </span><span class="default">false<br />        </span><span class="keyword">and (</span><span class="default">$read</span><span class="keyword">=@</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$buf</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) &gt;= </span><span class="default">1<br />    </span><span class="keyword">){<br />        </span><span class="default">$received_data  </span><span class="keyword">= (isset(</span><span class="default">$received_data</span><span class="keyword">)) ? </span><span class="default">$received_data </span><span class="keyword">. </span><span class="default">$buf </span><span class="keyword">: </span><span class="default">$buf</span><span class="keyword">;<br />        </span><span class="default">$received_bytes </span><span class="keyword">= (isset(</span><span class="default">$received_bytes</span><span class="keyword">)) ? </span><span class="default">$received_bytes </span><span class="keyword">+ </span><span class="default">$read </span><span class="keyword">: </span><span class="default">$read</span><span class="keyword">;<br />    }<br />    </span><span class="default">$last_error </span><span class="keyword">= </span><span class="default">socket_last_error</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br />    </span><span class="default">socket_set_block</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">);<br /><br />    if(</span><span class="default">$t_out </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">){<br />        throw new </span><span class="default">Exception</span><span class="keyword">(<br />            </span><span class="string">'timeout after ' </span><span class="keyword">. ((!</span><span class="default">$received_bytes</span><span class="keyword">) ? </span><span class="default">0 </span><span class="keyword">: </span><span class="default">$received_bytes</span><span class="keyword">) . </span><span class="string">' bytes'</span><span class="keyword">,<br />            </span><span class="default">0 </span><span class="comment">// your eCode here<br />        </span><span class="keyword">);<br />    }<br />    elseif(</span><span class="default">$last_error </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">and </span><span class="default">$last_error </span><span class="keyword">!== </span><span class="default">0</span><span class="keyword">){<br />        throw new </span><span class="default">Exception</span><span class="keyword">(<br />            </span><span class="default">socket_strerror</span><span class="keyword">(</span><span class="default">$last_error</span><span class="keyword">),<br />            </span><span class="default">$last_error<br />        </span><span class="keyword">);<br />    }<br />    else{<br />        if(</span><span class="default">$read </span><span class="keyword">=== </span><span class="default">$socket_recv_return_values</span><span class="keyword">[</span><span class="string">'no_data_received'</span><span class="keyword">]){<br />            </span><span class="comment">// client returned NO DATA<br />            // but we were in a loop and could have got some data before:<br />            </span><span class="keyword">if(</span><span class="default">$received_bytes </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">){<br />                </span><span class="comment">// client is connected but sent NO DATA ?<br />                // no:<br />                // in this case the client must be "crashed" because -<br />                // it is not possible to "send no data" (zero bytes)<br />                // socket_select() now returns this socket as "changed" "forever"<br />                </span><span class="keyword">throw new </span><span class="default">Exception</span><span class="keyword">(<br />                    </span><span class="string">'client crashed'</span><span class="keyword">,<br />                    </span><span class="default">0 </span><span class="comment">// your eCode here<br />                </span><span class="keyword">);<br />            }else{<br />                </span><span class="comment">// client returned DATA<br />                </span><span class="keyword">return </span><span class="default">$received_data</span><span class="keyword">;<br />            }<br />        }<br />        elseif(</span><span class="default">$read </span><span class="keyword">=== </span><span class="default">$socket_recv_return_values</span><span class="keyword">[</span><span class="string">'client_disconnected'</span><span class="keyword">]){<br />            </span><span class="comment">// client disconnected<br />            </span><span class="keyword">if(</span><span class="default">$received_bytes </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">){<br />                </span><span class="comment">// client disconnected before/without sending any bytes<br />                </span><span class="keyword">throw new </span><span class="default">Exception</span><span class="keyword">(<br />                    </span><span class="string">'client disconnected'</span><span class="keyword">,<br />                    </span><span class="default">0 </span><span class="comment">// your eCode here<br />                </span><span class="keyword">);<br />            }<br />            else{<br />                </span><span class="comment">// *this value* ^= $socket_recv_return_values['client_disconnected']<br />                //<br />                // client disconnected AFTER sending data (we were in a loop!)<br />                // socket_select() will return this socket "forever" as "changed" and -<br />                // socket_recv() will return *this value* "forever".<br />                // we will be "back" again "very soon" to see:<br />                //  socket_recv() returns *this value* AND no bytes received<br />                //  which results in disconnect-exception above<br />                </span><span class="keyword">return </span><span class="default">$received_data</span><span class="keyword">;<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121419">  <div class="votes">
    <div id="Vu121419">
    <a href="/manual/vote-note.php?id=121419&amp;page=function.socket-recv&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121419">
    <a href="/manual/vote-note.php?id=121419&amp;page=function.socket-recv&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121419" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#121419" class="name">
  <strong class="user"><em>e-vela at bol dot com dot br</em></strong></a><a class="genanchor" href="#121419"> &para;</a><div class="date" title="2017-07-23 07:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121419">
<div class="phpcode"><code><span class="html">Usage example for MSG_PEEK: this function tells if the socket has data available to be read, but preserving it to be read at a future moment.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Workaround for the missing define<br /></span><span class="keyword">if(!</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'MSG_DONTWAIT'</span><span class="keyword">)) </span><span class="default">define</span><span class="keyword">(</span><span class="string">'MSG_DONTWAIT'</span><span class="keyword">, </span><span class="default">0x40</span><span class="keyword">);<br /><br /></span><span class="comment">// Function to check if there is data available in the socket<br /></span><span class="keyword">function </span><span class="default">SocketHasData</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">) {<br />    </span><span class="comment">// Based on the following fact:<br />    // $result=0 -&gt; disconnected, $result=false -&gt; no data<br /><br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; </span><span class="comment">// We need a buffer, but we won't use it<br /><br />    // MSG_PEEK means to preserve data in the queue, so it can<br />    // actually be read afterwards<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">MSG_PEEK </span><span class="keyword">| </span><span class="default">MSG_DONTWAIT </span><span class="keyword">);<br /><br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">; </span><span class="comment">// If no data, returns false<br />    </span><span class="keyword">return </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// Otherwise returns true<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-recv&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-recv.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
