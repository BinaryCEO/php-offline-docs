<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_get_option - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-get-option.php">
 <link rel="shorturl" href="https://www.php.net/socket-get-option">
 <link rel="alternate" href="https://www.php.net/socket-get-option" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-export-stream.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-getopt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-get-option.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-get-option.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-get-option.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-get-option.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-get-option.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-get-option.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-get-option.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-get-option.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-get-option.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-get-option.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-get-option.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets socket options for the socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_get_option - Manual" />
<meta name="twitter:description" content="Gets socket options for the socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_get_option - Manual" />
<meta itemprop="description" content="Gets socket options for the socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets socket options for the socket" />

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
        <a href="function.socket-getopt.php">
          socket_getopt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-export-stream.php">
          &laquo; socket_export_stream        </a>
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
            <option value='en/function.socket-get-option.php' selected="selected">English</option>
            <option value='de/function.socket-get-option.php'>German</option>
            <option value='es/function.socket-get-option.php'>Spanish</option>
            <option value='fr/function.socket-get-option.php'>French</option>
            <option value='it/function.socket-get-option.php'>Italian</option>
            <option value='ja/function.socket-get-option.php'>Japanese</option>
            <option value='pt_BR/function.socket-get-option.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-get-option.php'>Russian</option>
            <option value='tr/function.socket-get-option.php'>Turkish</option>
            <option value='uk/function.socket-get-option.php'>Ukrainian</option>
            <option value='zh/function.socket-get-option.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-get-option" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_get_option</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_get_option</span> &mdash; <span class="dc-title">Gets socket options for the socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-get-option-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_get_option</strong></span>(<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$level</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>socket_get_option()</strong></span> function retrieves the value for
   the option specified by the <code class="parameter">option</code> parameter for the
   specified <code class="parameter">socket</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-get-option-parameters">
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
    
    
     <dt><code class="parameter">level</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">level</code> parameter specifies the protocol
       level at which the option resides. For example, to retrieve options at
       the socket level, a <code class="parameter">level</code> parameter of
       <strong><code><a href="sockets.constants.php#constant.sol-socket">SOL_SOCKET</a></code></strong> would be used. Other levels, such as
       <strong><code>TCP</code></strong>, can be used by
       specifying the protocol number of that level. Protocol numbers can be
       found by using the <span class="function"><a href="function.getprotobyname.php" class="function">getprotobyname()</a></span> function.
      </p>
     </dd>
    
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <table class="doctable table">
       <caption><strong>Available Socket Options</strong></caption>
       
        <thead>
         <tr>
          <th>Option</th>
          <th>Description</th>
          <th>Type</th>
         </tr>

        </thead>

        <tbody class="tbody">
         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-debug">SO_DEBUG</a></code></strong></td>
          <td>
           Reports whether debugging information is being recorded.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-broadcast">SO_BROADCAST</a></code></strong></td>
          <td>
           Reports whether transmission of broadcast messages is supported.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-reuseaddr">SO_REUSEADDR</a></code></strong></td>
          <td>
           Reports whether local addresses can be reused.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-reuseport">SO_REUSEPORT</a></code></strong></td>
          <td>
           Reports whether local ports can be reused.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-keepalive">SO_KEEPALIVE</a></code></strong></td>
          <td>
           Reports whether connections are kept active with periodic transmission
           of messages. If the connected socket fails to respond to these messages,
           the connection is broken and processes writing to that socket are notified
           with a SIGPIPE signal.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-linger">SO_LINGER</a></code></strong></td>
          <td>
           <p class="para">
            Reports whether the <code class="parameter">socket</code> lingers on 
            <span class="function"><a href="function.socket-close.php" class="function">socket_close()</a></span> if data is present. By default, 
            when the socket is closed, it attempts to send all unsent data.
            In the case of a connection-oriented socket, 
            <span class="function"><a href="function.socket-close.php" class="function">socket_close()</a></span> will wait for its peer to
            acknowledge the data. 
           </p>
           <p class="para">
            If <var class="varname">l_onoff</var> is non-zero and 
            <var class="varname">l_linger</var> is zero, all the 
            unsent data will be discarded and RST (reset) is sent to the 
            peer in the case of a connection-oriented socket. 
           </p>
           <p class="para">
            On the other hand, if <var class="varname">l_onoff</var> is 
            non-zero and <var class="varname">l_linger</var> is non-zero,
            <span class="function"><a href="function.socket-close.php" class="function">socket_close()</a></span> will block until all the data 
            is sent or the time specified in <var class="varname">l_linger</var>
            elapses. If the socket is non-blocking, 
            <span class="function"><a href="function.socket-close.php" class="function">socket_close()</a></span> will fail and return an error.
           </p>
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. The array will contain two keys:
           <var class="varname">l_onoff</var> and 
           <var class="varname">l_linger</var>. 
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-oobinline">SO_OOBINLINE</a></code></strong></td>
          <td>
           Reports whether the <code class="parameter">socket</code> leaves out-of-band data inline.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-sndbuf">SO_SNDBUF</a></code></strong></td>
          <td>
           Reports the size of the send buffer.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>          
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-rcvbuf">SO_RCVBUF</a></code></strong></td>
          <td>
           Reports the size of the receive buffer.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>         
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-error">SO_ERROR</a></code></strong></td>
          <td>
           Reports information about error status and clears it.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> (cannot be set by <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-type">SO_TYPE</a></code></strong></td>
          <td>
           Reports the <code class="parameter">socket</code> type (e.g. 
           <strong><code><a href="sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></code></strong>).
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> (cannot be set by <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-dontroute">SO_DONTROUTE</a></code></strong></td>
          <td>
           Reports whether outgoing messages bypass the standard routing facilities.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-rcvlowat">SO_RCVLOWAT</a></code></strong></td>
          <td>
           Reports the minimum number of bytes to process for <code class="parameter">socket</code> 
           input operations.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-rcvtimeo">SO_RCVTIMEO</a></code></strong></td>
          <td>
           Reports the timeout value for input operations.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. The array will contain two keys:
           <var class="varname">sec</var> which is the seconds part on the timeout
           value and <var class="varname">usec</var> which is the microsecond part 
           of the timeout value. 
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-sndtimeo">SO_SNDTIMEO</a></code></strong></td>
          <td>
           Reports the timeout value specifying the amount of time that an output
           function blocks because flow control prevents data from being sent.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. The array will contain two keys:
           <var class="varname">sec</var> which is the seconds part on the timeout
           value and <var class="varname">usec</var> which is the microsecond part 
           of the timeout value. 
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-sndlowat">SO_SNDLOWAT</a></code></strong></td>
          <td>
           Reports the minimum number of bytes to process for <code class="parameter">socket</code> output operations.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-nodelay">TCP_NODELAY</a></code></strong></td>
          <td>
           Reports whether the Nagle TCP algorithm is disabled.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></code></strong></td>
          <td>
           Joins a multicast group.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with keys <code class="literal">&quot;group&quot;</code>, specifying
           a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> with an IPv4 or IPv6 multicast address and
           <code class="literal">&quot;interface&quot;</code>, specifying either an interface
           number (type <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>) or a <code class="literal">string</code> with
           the interface name, like <code class="literal">&quot;eth0&quot;</code>.
           <code class="literal">0</code> can be specified to indicate the interface
           should be selected using routing rules. (can only be used in
           <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-leave-group">MCAST_LEAVE_GROUP</a></code></strong></td>
          <td>
           Leaves a multicast group.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span>. See <strong><code><a href="sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></code></strong> for
           more information. (can only be used in
           <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></code></strong></td>
          <td>
           Blocks packets arriving from a specific source to a specific
           multicast group, which must have been previously joined.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with the same keys as
           <strong><code><a href="sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></code></strong>, plus one extra key,
           <code class="literal">source</code>, which maps to a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
           specifying an IPv4 or IPv6 address of the source to be blocked.
           (can only be used in <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-unblock-source">MCAST_UNBLOCK_SOURCE</a></code></strong></td>
          <td>
           Unblocks (start receiving again) packets arriving from a specific
           source address to a specific multicast group, which must have been
           previously joined.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with the same format as
           <strong><code><a href="sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></code></strong>.
           (can only be used in <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-join-source-group">MCAST_JOIN_SOURCE_GROUP</a></code></strong></td>
          <td>
           Receive packets destined to a specific multicast group whose source
           address matches a specific value.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with the same format as
           <strong><code><a href="sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></code></strong>.
           (can only be used in <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.mcast-leave-source-group">MCAST_LEAVE_SOURCE_GROUP</a></code></strong></td>
          <td>
           Stop receiving packets destined to a specific multicast group whose
           source address matches a specific value.
          </td>
          <td>
           <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with the same format as
           <strong><code><a href="sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></code></strong>.
           (can only be used in <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>)
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></code></strong></td>
          <td>
           The outgoing interface for IPv4 multicast packets.
          </td>
          <td>
           Either <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> specifying the interface number or a
           <span class="type"><a href="language.types.string.php" class="type string">string</a></span> with an interface name, like
           <code class="literal">eth0</code>. The value <span class="type">0</span> can be used to
           indicate the routing table is to used in the interface selection.
           The function <span class="function"><strong>socket_get_option()</strong></span> returns an
           interface index.
           Note that, unlike the C API, this option does NOT take an IP
           address. This eliminates the interface difference between
           <strong><code><a href="sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></code></strong> and
           <strong><code><a href="sockets.constants.php#constant.ipv6-multicast-if">IPV6_MULTICAST_IF</a></code></strong>.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ipv6-multicast-if">IPV6_MULTICAST_IF</a></code></strong></td>
          <td>
           The outgoing interface for IPv6 multicast packets.
          </td>
          <td>
           The same as <strong><code><a href="sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></code></strong>.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></code></strong></td>
          <td>
           The multicast loopback policy for IPv4 packets enables or disables
           loopback of outgoing multicasts, which must have been previously joined.
           The effect differs, however, whether it applies on unixes or Windows,
           the former being on the receive path whereas the latter being
           on the send path.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> (either <code class="literal">0</code> or
           <code class="literal">1</code>). For <span class="function"><a href="function.socket-set-option.php" class="function">socket_set_option()</a></span>
           any value will be accepted and will be converted to a boolean
           following the usual PHP rules.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ipv6-multicast-loop">IPV6_MULTICAST_LOOP</a></code></strong></td>
          <td>
           Analogous to <strong><code><a href="sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></code></strong>, but for IPv6.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>. See <strong><code><a href="sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></code></strong>.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ip-multicast-ttl">IP_MULTICAST_TTL</a></code></strong></td>
          <td>
           The time-to-live of outgoing IPv4 multicast packets. This should be
           a value between 0 (don&#039;t leave the interface) and 255. The default
           value is 1 (only the local network is reached).
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> between 0 and 255.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.ipv6-multicast-hops">IPV6_MULTICAST_HOPS</a></code></strong></td>
          <td>
           Analogous to <strong><code><a href="sockets.constants.php#constant.ip-multicast-ttl">IP_MULTICAST_TTL</a></code></strong>, but for IPv6
           packets. The value -1 is also accepted, meaning the route default
           should be used.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> between -1 and 255.
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-mark">SO_MARK</a></code></strong></td>
          <td>
           Sets an identifier on the socket for packet filtering
           purpose on Linux.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-acceptfilter">SO_ACCEPTFILTER</a></code></strong></td>
          <td>
           Adds an accept filter on the listened socket (FreeBSD/NetBSD).
           An accept filter kernel module needs to be loaded beforehand
           on FreeBSD (e.g. accf_http).
          </td>
          <td>
           <span class="type"><a href="language.types.string.php" class="type string">string</a></span> name of the filter (length 15 max).
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-user-cookie">SO_USER_COOKIE</a></code></strong></td>
          <td>
           Sets an identifier on the socket for packet filtering
           purpose on FreeBSD.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-rtable">SO_RTABLE</a></code></strong></td>
          <td>
           Sets an identifier on the socket for packet filtering
           purpose on OpenBSD.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-donttrunc">SO_DONTTRUNC</a></code></strong></td>
          <td>
           Retain unread data.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-wantmore">SO_WANTMORE</a></code></strong></td>
          <td>
           Give a hint when more data is ready.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-defer-accept">TCP_DEFER_ACCEPT</a></code></strong></td>
          <td>
           Don&#039;t notify a listening socket until data is ready.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-incoming-cpu">SO_INCOMING_CPU</a></code></strong></td>
          <td>
           Gets/Sets the cpu affinity of a socket.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-meminfo">SO_MEMINFO</a></code></strong></td>
          <td>
           Gets all the meminfo of a socket.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-bpf-extensions">SO_BPF_EXTENSIONS</a></code></strong></td>
          <td>
           Gets the supported BPF extensions by the kernel to attach to a socket.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.so-setfib">SO_SETFIB</a></code></strong></td>
          <td>
           Sets the route table (FIB) of a socket. (FreeBSD only)
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.sol-filter">SOL_FILTER</a></code></strong></td>
          <td>
           Filters attributed to a socket. (Solaris/Illumos only)
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-keepcnt">TCP_KEEPCNT</a></code></strong></td>
          <td>
           Sets the maximum number of keepalive probes TCP should send before dropping the connection.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-keepidle">TCP_KEEPIDLE</a></code></strong></td>
          <td>
           Sets the time the connection needs to remain idle.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-keepintvl">TCP_KEEPINTVL</a></code></strong></td>
          <td>
           Sets the time between individual keepalive probes.
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-keepalive">TCP_KEEPALIVE</a></code></strong></td>
          <td>
           Sets the time the connection needs to remain idle. (macOS only)
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

         <tr>
          <td><strong><code><a href="sockets.constants.php#constant.tcp-notsent-lowat">TCP_NOTSENT_LOWAT</a></code></strong></td>
          <td>
           Sets the limit number of unsent data in write queue by the socket stream. (Linux only)
          </td>
          <td>
           <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
          </td>
         </tr>

        </tbody>
       
      </table>

     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-get-option-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value of the given option,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-get-option-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.socket-get-option-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4799">
    <p><strong>Example #1 <span class="function"><strong>socket_get_option()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create_listen</span><span style="color: #007700">(</span><span style="color: #0000BB">1223</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$linger </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'l_linger' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'l_onoff' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">socket_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #0000BB">SO_LINGER</span><span style="color: #007700">, </span><span style="color: #0000BB">$linger</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_get_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #0000BB">SO_REUSEADDR</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-get-option-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-create-listen.php" class="function" rel="rdfs-seeAlso">socket_create_listen()</a> - Opens a socket on port to accept connections</span></li>
    <li><span class="function"><a href="function.socket-set-option.php" class="function" rel="rdfs-seeAlso">socket_set_option()</a> - Sets socket options for the socket</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-get-option.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-get-option%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-get-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-get-option.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99906">  <div class="votes">
    <div id="Vu99906">
    <a href="/manual/vote-note.php?id=99906&amp;page=function.socket-get-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99906">
    <a href="/manual/vote-note.php?id=99906&amp;page=function.socket-get-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99906" title="100% like this...">
    3
    </div>
  </div>
  <a href="#99906" class="name">
  <strong class="user"><em>recycling dot sp dot am at gmail dot com</em></strong></a><a class="genanchor" href="#99906"> &para;</a><div class="date" title="2010-09-14 05:31"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99906">
<div class="phpcode"><code><span class="html">Just 2 notes here:<br />- On UNIX, If SO_DEBUG is set, the php program needs an effective user id of 0.<br />-  activating SO_OOBINLINE on a socket is equivalent to passing MSG_OOB flag to each recieving functions used with that socket (eg: socket_recv, socket_recvfrom).</span></code></div>
  </div>
 </div>
  <div class="note" id="101380">  <div class="votes">
    <div id="Vu101380">
    <a href="/manual/vote-note.php?id=101380&amp;page=function.socket-get-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101380">
    <a href="/manual/vote-note.php?id=101380&amp;page=function.socket-get-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101380" title="75% like this...">
    4
    </div>
  </div>
  <a href="#101380" class="name">
  <strong class="user"><em>Chad Lavoie</em></strong></a><a class="genanchor" href="#101380"> &para;</a><div class="date" title="2010-12-13 12:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101380">
<div class="phpcode"><code><span class="html">If using Unix Sockets, and you want to use SO_PEERCRED, you can use the number 17 for the optname (and SOL_SOCKET for the level).  The PID of the connecting process will be returned.</span></code></div>
  </div>
 </div>
  <div class="note" id="114586">  <div class="votes">
    <div id="Vu114586">
    <a href="/manual/vote-note.php?id=114586&amp;page=function.socket-get-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114586">
    <a href="/manual/vote-note.php?id=114586&amp;page=function.socket-get-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114586" title="60% like this...">
    1
    </div>
  </div>
  <a href="#114586" class="name">
  <strong class="user"><em>prennings at gmail dot com</em></strong></a><a class="genanchor" href="#114586"> &para;</a><div class="date" title="2014-03-09 08:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114586">
<div class="phpcode"><code><span class="html">I was playing around with this option to use multiply socket connections with same hostname and same port (IRC). However the socket function needed for this is SO_REUSEPORT.<br /><br />Though the majority of linux distro's does not have that yet officially implented in there distro's.<br /><br />However for debian there is an patch that can be installed to get it working:<br /><br /><a href="https://git.kernel.org/cgit/linux/kernel/git/torvalds/linux.git/commit/?id=c617f398edd4db2b8567a28e899a88f8f574798d" rel="nofollow" target="_blank">https://git.kernel.org/cgit/linux/kernel/git/torvalds/linux.git/commit/?id=c617f398edd4db2b8567a28e899a88f8f574798d</a><br /><br />it has some work but I got it working after a while (Noobie in debian) maybe some other people are facing the same problem as I was.</span></code></div>
  </div>
 </div>
  <div class="note" id="126907">  <div class="votes">
    <div id="Vu126907">
    <a href="/manual/vote-note.php?id=126907&amp;page=function.socket-get-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126907">
    <a href="/manual/vote-note.php?id=126907&amp;page=function.socket-get-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126907" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126907" class="name">
  <strong class="user"><em>skydiablo at gmx dot net</em></strong></a><a class="genanchor" href="#126907"> &para;</a><div class="date" title="2022-03-08 11:49"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126907">
<div class="phpcode"><code><span class="html">to receive UDP DHCP packets on a dedicated interface, you have to use the undocumented option SO_BINDTODEVICE:<br /><br /><span class="default">&lt;?php<br />$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);<br /><br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_BINDTODEVICE</span><span class="keyword">, </span><span class="string">'eth1'</span><span class="keyword">);<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_BROADCAST</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_REUSEADDR</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">SOL_SOCKET</span><span class="keyword">, </span><span class="default">SO_REUSEPORT</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="string">'255.255.255.255'</span><span class="keyword">, </span><span class="default">67</span><span class="keyword">);<br />while (</span><span class="default">1</span><span class="keyword">) {<br />    if (</span><span class="default">$src </span><span class="keyword">= @</span><span class="default">socket_recv</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">9999</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) {<br />        echo </span><span class="default">$data </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-get-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-get-option.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
