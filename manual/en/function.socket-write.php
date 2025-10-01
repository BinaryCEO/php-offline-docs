<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_write - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-write.php">
 <link rel="shorturl" href="https://www.php.net/socket-write">
 <link rel="alternate" href="https://www.php.net/socket-write" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-strerror.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-wsaprotocol-info-export.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-write.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-write.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-write.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-write.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-write.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-write.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-write.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-write.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-write.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-write.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-write.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Write to a socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_write - Manual" />
<meta name="twitter:description" content="Write to a socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_write - Manual" />
<meta itemprop="description" content="Write to a socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Write to a socket" />

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
        <a href="function.socket-wsaprotocol-info-export.php">
          socket_wsaprotocol_info_export &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-strerror.php">
          &laquo; socket_strerror        </a>
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
            <option value='en/function.socket-write.php' selected="selected">English</option>
            <option value='de/function.socket-write.php'>German</option>
            <option value='es/function.socket-write.php'>Spanish</option>
            <option value='fr/function.socket-write.php'>French</option>
            <option value='it/function.socket-write.php'>Italian</option>
            <option value='ja/function.socket-write.php'>Japanese</option>
            <option value='pt_BR/function.socket-write.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-write.php'>Russian</option>
            <option value='tr/function.socket-write.php'>Turkish</option>
            <option value='uk/function.socket-write.php'>Ukrainian</option>
            <option value='zh/function.socket-write.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-write" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_write</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_write</span> &mdash; <span class="dc-title">Write to a socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-write-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_write</strong></span>(<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The function <span class="function"><strong>socket_write()</strong></span> writes to the
   <code class="parameter">socket</code> from the given
   <code class="parameter">data</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-write-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       The buffer to be written.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The optional parameter <code class="parameter">length</code> can specify an
       alternate length of bytes written to the socket. If this length is
       greater than <code class="parameter">data</code>&#039;s length,
       it is silently truncated to the length of <code class="parameter">data</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-write-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of bytes successfully written to the socket or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   The error code can be retrieved with
   <span class="function"><a href="function.socket-last-error.php" class="function">socket_last_error()</a></span>. This code may be passed to
   <span class="function"><a href="function.socket-strerror.php" class="function">socket_strerror()</a></span> to get a textual explanation of the
   error.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    It is perfectly valid for <span class="function"><strong>socket_write()</strong></span> to
    return zero which means no bytes have been written. Be sure to use the
    <code class="literal">===</code> operator to check for <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in case of an
    error.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-write-changelog">
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
       <code class="parameter">length</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.socket-write-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>socket_write()</strong></span> does not necessarily write all bytes
    from <code class="parameter">data</code>. It&#039;s valid that, depending on the network
    buffers etc., only a certain amount of data, even one byte, is written
    despite <code class="parameter">data</code> being longer.
    A loop must be used to ensure that the rest of <code class="parameter">data</code>
    is transmitted.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-write-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-accept.php" class="function" rel="rdfs-seeAlso">socket_accept()</a> - Accepts a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-bind.php" class="function" rel="rdfs-seeAlso">socket_bind()</a> - Binds a name to a socket</span></li>
    <li><span class="function"><a href="function.socket-connect.php" class="function" rel="rdfs-seeAlso">socket_connect()</a> - Initiates a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-listen.php" class="function" rel="rdfs-seeAlso">socket_listen()</a> - Listens for a connection on a socket</span></li>
    <li><span class="function"><a href="function.socket-read.php" class="function" rel="rdfs-seeAlso">socket_read()</a> - Reads a maximum of length bytes from a socket</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-write.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-write%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-write&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-write.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101492">  <div class="votes">
    <div id="Vu101492">
    <a href="/manual/vote-note.php?id=101492&amp;page=function.socket-write&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101492">
    <a href="/manual/vote-note.php?id=101492&amp;page=function.socket-write&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101492" title="60% like this...">
    8
    </div>
  </div>
  <a href="#101492" class="name">
  <strong class="user"><em>revelable at hotmail dot com</em></strong></a><a class="genanchor" href="#101492"> &para;</a><div class="date" title="2010-12-20 05:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101492">
<div class="phpcode"><code><span class="html">Here we have the same function to write a socket but with improved performance.<br /><br />If the messager are not larger, they will be written entirely with a single socket_write() call. And is not needed to call the substr() function for the first bucle.<br /><br /><span class="default">&lt;?php<br />$st</span><span class="keyword">=</span><span class="string">"Message to sent"</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">);<br />        <br />    while (</span><span class="default">true</span><span class="keyword">) {<br />        <br />        </span><span class="default">$sent </span><span class="keyword">= </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">, </span><span class="default">$st</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />            <br />        if (</span><span class="default">$sent </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        <br />            break;<br />        }<br />            <br />        </span><span class="comment">// Check if the entire message has been sented<br />        </span><span class="keyword">if (</span><span class="default">$sent </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">) {<br />                <br />            </span><span class="comment">// If not sent the entire message.<br />            // Get the part of the message that has not yet been sented as message<br />            </span><span class="default">$st </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">, </span><span class="default">$sent</span><span class="keyword">);<br />                <br />            </span><span class="comment">// Get the length of the not sented part<br />            </span><span class="default">$length </span><span class="keyword">-= </span><span class="default">$sent</span><span class="keyword">;<br /><br />        } else {<br />            <br />            break;<br />        }<br />            <br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126286">  <div class="votes">
    <div id="Vu126286">
    <a href="/manual/vote-note.php?id=126286&amp;page=function.socket-write&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126286">
    <a href="/manual/vote-note.php?id=126286&amp;page=function.socket-write&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126286" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126286" class="name">
  <strong class="user"><em>anonymous</em></strong></a><a class="genanchor" href="#126286"> &para;</a><div class="date" title="2021-07-29 12:52"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126286">
<div class="phpcode"><code><span class="html">sending a few mbs or more results in incomplete transfers, send data in a loop and chunks instead, socket_write reports complete write even though it is only a partial transfer, possibly because of buffer overrun somewhere.<br /><br />$strlen=strlen($msg);<br />$totaltransferred=0;<br /><br />$blocksize=10000;<br />for ($a=0;$a&lt;$strlen;$a+=$blocksize){<br />    $part=substr($msg,$a,$blocksize);<br />    $transferred=socket_write($socket,$part,strlen($part));<br />    $totaltransferred+=$transferred;<br />}<br />    <br />if ($totaltransferred&lt;$strlen){<br />    echo "incomplete transfer";<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="24516">  <div class="votes">
    <div id="Vu24516">
    <a href="/manual/vote-note.php?id=24516&amp;page=function.socket-write&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24516">
    <a href="/manual/vote-note.php?id=24516&amp;page=function.socket-write&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24516" title="58% like this...">
    2
    </div>
  </div>
  <a href="#24516" class="name">
  <strong class="user"><em>gtk at linux dot online dot no</em></strong></a><a class="genanchor" href="#24516"> &para;</a><div class="date" title="2002-08-20 04:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24516">
<div class="phpcode"><code><span class="html">from <a href="http://www.manualy.sk/sock-faq/unix-socket-faq-2.html" rel="nofollow" target="_blank">http://www.manualy.sk/sock-faq/unix-socket-faq-2.html</a><br />read() is equivalent to recv() with a flags parameter of 0. Other values for the flags parameter change the behaviour of recv(). Similarly, write() is equivalent to send() with flags == 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="117211">  <div class="votes">
    <div id="Vu117211">
    <a href="/manual/vote-note.php?id=117211&amp;page=function.socket-write&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117211">
    <a href="/manual/vote-note.php?id=117211&amp;page=function.socket-write&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117211" title="52% like this...">
    1
    </div>
  </div>
  <a href="#117211" class="name">
  <strong class="user"><em>php at deguest dot asia</em></strong></a><a class="genanchor" href="#117211"> &para;</a><div class="date" title="2015-05-03 08:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117211">
<div class="phpcode"><code><span class="html">I often read in php docs users not checking for the php function returned value, and in the case of socket_write, I could not see here in the comment anyone botering to read on the socket the server reply.
<br />Then one user thought it would be a good idea to use usleep after a socket_write on a smtp connection.
<br />Actually, if you check the server reply, not only will it give time for the server to reply before you write again on the socket, but also this is a great opportunity to check what the server replied you.
<br />For instance, for smtp connection :
<br />In this example MAIL_SERVER, MAIL_PORT and DEBUG are constants I defined.
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">sendmail</span><span class="keyword">( </span><span class="default">$param </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$from    </span><span class="keyword">= &amp;</span><span class="default">$param</span><span class="keyword">[ </span><span class="string">'from' </span><span class="keyword">];
<br />    </span><span class="default">$to      </span><span class="keyword">= &amp;</span><span class="default">$param</span><span class="keyword">[ </span><span class="string">'to' </span><span class="keyword">];
<br />    </span><span class="default">$message </span><span class="keyword">= &amp;</span><span class="default">$param</span><span class="keyword">[ </span><span class="string">'data' </span><span class="keyword">];
<br />    
<br />    </span><span class="default">$isError </span><span class="keyword">= function( </span><span class="default">$string </span><span class="keyword">)
<br />    {
<br />        if( </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">'/^((\d)(\d{2}))/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$matches </span><span class="keyword">) )
<br />        {
<br />            if( </span><span class="default">$matches</span><span class="keyword">[ </span><span class="default">2 </span><span class="keyword">] == </span><span class="default">4 </span><span class="keyword">|| </span><span class="default">$matches</span><span class="keyword">[ </span><span class="default">2 </span><span class="keyword">] == </span><span class="default">5 </span><span class="keyword">) return( </span><span class="default">$matches</span><span class="keyword">[ </span><span class="default">1 </span><span class="keyword">] );
<br />        }
<br />        else
<br />        {
<br />            return( </span><span class="default">false </span><span class="keyword">);
<br />        }
<br />    };
<br />    
<br />    try
<br />    {
<br />        </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />        if( ( </span><span class="default">$socket </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">( </span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP </span><span class="keyword">) ) == </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to create a socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        if( !</span><span class="default">socket_connect</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">MAIL_SERVER</span><span class="keyword">, </span><span class="default">MAIL_PORT </span><span class="keyword">) ) 
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to connect to server %s: %s"</span><span class="keyword">, </span><span class="default">MAIL_SERVER</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">);
<br />        if( </span><span class="default">$read </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to read from socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        
<br />        if( </span><span class="default">socket_write</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"HELO %s\r\n"</span><span class="keyword">, </span><span class="default">gethostname</span><span class="keyword">() ) ) === </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to write to socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">);
<br />        if( </span><span class="default">$read </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to read from socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        else
<br />        {
<br />            if( ( </span><span class="default">$errCode </span><span class="keyword">= </span><span class="default">$isError</span><span class="keyword">( </span><span class="default">$read </span><span class="keyword">) ) ) throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="string">"Server responded with an error code </span><span class="default">$errCode</span><span class="string">" </span><span class="keyword">);
<br />        }
<br />        
<br />        if( </span><span class="default">socket_write</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"MAIL FROM: %s\r\n"</span><span class="keyword">, </span><span class="default">$from </span><span class="keyword">) ) === </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to write to socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        </span><span class="default">$read </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">( </span><span class="default">$socket</span><span class="keyword">, </span><span class="default">1024 </span><span class="keyword">);
<br />        if( </span><span class="default">$read </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">)
<br />        {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Unable to read from socket: %s"</span><span class="keyword">, </span><span class="default">socket_strerror</span><span class="keyword">( </span><span class="default">socket_last_error</span><span class="keyword">() ) ) );
<br />        }
<br />        else
<br />        {
<br />            if( ( </span><span class="default">$errCode </span><span class="keyword">= </span><span class="default">$isError</span><span class="keyword">( </span><span class="default">$read </span><span class="keyword">) ) ) throw new </span><span class="default">Exception</span><span class="keyword">( </span><span class="string">"Server responded with an error code </span><span class="default">$errCode</span><span class="string">" </span><span class="keyword">);
<br />        }
<br />        </span><span class="comment">/* And some more code, but not enough place in comment */
<br />        </span><span class="keyword">return( </span><span class="default">$totalWriten </span><span class="keyword">);
<br />    }
<br />    catch( </span><span class="default">Exception $e </span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$ERROR </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">( </span><span class="string">"Error sending mail message at line %d. "</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getLine</span><span class="keyword">() ) . </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();
<br />        return( </span><span class="default">false </span><span class="keyword">);
<br />    }
<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69114">  <div class="votes">
    <div id="Vu69114">
    <a href="/manual/vote-note.php?id=69114&amp;page=function.socket-write&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69114">
    <a href="/manual/vote-note.php?id=69114&amp;page=function.socket-write&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69114" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#69114" class="name">
  <strong class="user"><em>webmaster at you-are-infected dot com</em></strong></a><a class="genanchor" href="#69114"> &para;</a><div class="date" title="2006-08-23 10:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69114">
<div class="phpcode"><code><span class="html">If you connect to a Server in a way like you do with telnet or some similar protokoll you may have problems with sending data to the server. I found out that at some servers there is a different between:<br /><br /><span class="default">&lt;?php<br />    <br />    socket_write </span><span class="keyword">(</span><span class="default">$my_socket</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">, </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">));<br />    </span><span class="default">socket_write </span><span class="keyword">(</span><span class="default">$my_socket</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="default">strlen </span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">));<br />    <br /></span><span class="default">?&gt;<br /></span>witch worked at least, and <br /><span class="default">&lt;?php<br />    socket_write </span><span class="keyword">(</span><span class="default">$my_socket</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>wich made the server stop sending any data.<br /><br />I hope this helps to save a lot of time. I needed about two days to find out, that this was the problem ;)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-write&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-write.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
