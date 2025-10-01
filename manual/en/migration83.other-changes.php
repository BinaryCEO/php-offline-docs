<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration83.other-changes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration83.other-changes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration83.other-changes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration83.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration83.deprecated.php">
 <link rel="next" href="https://www.php.net/manual/en/migration83.windows-support.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration83.other-changes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration83.other-changes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration83.other-changes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration83.other-changes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration83.other-changes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration83.other-changes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration83.other-changes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration83.other-changes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration83.other-changes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration83.other-changes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration83.other-changes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Changes - Manual" />
<meta name="twitter:description" content="Other Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Changes - Manual" />
<meta itemprop="description" content="Other Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Changes" />

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
        <a href="migration83.windows-support.php">
          Windows Support &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration83.deprecated.php">
          &laquo; Deprecated Features        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration83.php'>Migrating from PHP 8.2.x to PHP 8.3.x</a></li>      </ul>
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
            <option value='en/migration83.other-changes.php' selected="selected">English</option>
            <option value='de/migration83.other-changes.php'>German</option>
            <option value='es/migration83.other-changes.php'>Spanish</option>
            <option value='fr/migration83.other-changes.php'>French</option>
            <option value='it/migration83.other-changes.php'>Italian</option>
            <option value='ja/migration83.other-changes.php'>Japanese</option>
            <option value='pt_BR/migration83.other-changes.php'>Brazilian Portuguese</option>
            <option value='ru/migration83.other-changes.php'>Russian</option>
            <option value='tr/migration83.other-changes.php'>Turkish</option>
            <option value='uk/migration83.other-changes.php'>Ukrainian</option>
            <option value='zh/migration83.other-changes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration83.other-changes" class="sect1">
 <h2 class="title">Other Changes</h2>

 <div class="sect2" id="migration83.other-changes.core">
  <h3 class="title">Core changes</h3>

  <div class="sect3" id="migration83.other-changes.core.ffi">
   <h4 class="title">FFI</h4>

   <p class="para">
    <span class="methodname"><a href="ffi.load.php" class="methodname">FFI::load()</a></span> is now allowed during preloading
    when <a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a>
    is the current system user. Previously,
    calling <span class="methodname"><a href="ffi.load.php" class="methodname">FFI::load()</a></span> was not possible
    during preloading if the
    <a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a>
    directive was set.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.core.fpm">
   <h4 class="title">FPM</h4>

   <p class="para">
    FPM CLI test now fails if the socket path is longer than supported by the OS.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.core.opcache">
   <h4 class="title">Opcache</h4>

   <p class="para">
    In the CLI and phpdbg SAPIs, preloading does not require the
    <a href="opcache.configuration.php#ini.opcache.preload-user" class="link">opcache.preload_user</a>
    directive to be set anymore when running as root.
    In other SAPIs, this directive is required when running as root because
    preloading is done before the SAPI switches to an unprivileged user.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.core.streams">
   <h4 class="title">Streams</h4>

   <p class="para">
    Blocking <span class="function"><a href="function.fread.php" class="function">fread()</a></span> on a socket connection returns
    immediately if there are any buffered data instead of waiting for more data.
   </p>

   <p class="para">
    A memory stream no longer fails if the seek offset is past the end.
    Instead, the memory will be increased on the next write and the data between
    the old end and the offset is filled with zero bytes, similar to how files work.
   </p>

   <p class="para">
    <span class="function"><a href="function.stat.php" class="function">stat()</a></span> access operations like
    <span class="function"><a href="function.file-exists.php" class="function">file_exists()</a></span> and similar will now use real
    path instead of the actual stream path. This is consistent with stream
    opening.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration83.other-changes.sapi">
  <h3 class="title">Changes in SAPI Modules</h3>

  <div class="sect3" id="migration83.other-changes.sapi.cli">
   <h4 class="title">CLI</h4>

   <p class="para">
    The <strong><code><a href="reserved.constants.php#constant.stdout">STDOUT</a></code></strong>, <strong><code><a href="reserved.constants.php#constant.stderr">STDERR</a></code></strong> and
    <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong> streams are no longer closed on resource
    destruction which is mostly when the CLI finishes.
    It is however still possible to explicitly close those streams using
    <span class="function"><a href="function.fclose.php" class="function">fclose()</a></span> and similar.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration83.other-changes.functions">
  <h3 class="title">Changed Functions</h3>

  <div class="sect3" id="migration83.other-changes.functions.core">
   <h4 class="title">Core</h4>

   <p class="para">
    <span class="function"><a href="function.gc-status.php" class="function">gc_status()</a></span> has added the following 8 fields:

    <ul class="simplelist">
     <li><code class="literal">&quot;running&quot;</code> => bool</li>
     <li><code class="literal">&quot;protected&quot;</code> => bool</li>
     <li><code class="literal">&quot;full&quot;</code> => bool</li>
     <li><code class="literal">&quot;buffer_size&quot;</code> => int</li>
     <li><code class="literal">&quot;application_time&quot;</code> => float: Total application
     time, in seconds (including collector_time)</li>
     <li><code class="literal">&quot;collector_time&quot;</code> => float: Time spent collecting
     cycles, in seconds (including destructor_time and free_time)</li>
     <li><code class="literal">&quot;destructor_time&quot;</code> => float: Time spent executing
     destructors during cycle collection, in seconds</li>
     <li><code class="literal">&quot;free_time&quot;</code> => float: Time spent freeing values
     during cycle collection, in seconds</li>
    </ul>
   </p>

   <p class="para">
    <span class="function"><a href="function.class-alias.php" class="function">class_alias()</a></span> now supports creating an alias of an
    internal class.
   </p>

   <p class="para">
    Setting <a href="ini.core.php#ini.open-basedir" class="link">open_basedir</a> at runtime
    using <code class="code">ini_set(&#039;open_basedir&#039;, ...);</code> no longer accepts paths
    containing the parent directory (<code class="literal">..</code>). Previously,
    only paths starting with <code class="literal">..</code> were disallowed. This could
    easily be circumvented by prepending <code class="literal">./</code> to the path.
   </p>

   <p class="para">
    User exception handlers now catch exceptions during shutdown.
   </p>

   <p class="para">
    The resultant HTML of <span class="function"><a href="function.highlight-string.php" class="function">highlight_string()</a></span> and
    <span class="function"><a href="function.highlight-file.php" class="function">highlight_file()</a></span> has changed.
    Whitespace between outer HTML tags is removed. Newlines and spaces
    are no longer converted to HTML entities. The whole HTML is now wrapped in a
    <code class="literal">&lt;pre&gt;</code> tag. The outer <code class="literal">&lt;span&gt;</code>
    tag has been merged with the <code class="literal">&lt;code&gt;</code> tag.
   </p>

  </div>

  <div class="sect3" id="migration83.other-changes.functions.calendar">
   <h4 class="title">Calendar</h4>

   <p class="para">
    <span class="function"><a href="function.easter-date.php" class="function">easter_date()</a></span> now supports years from 1970 to
    2,000,000,000 on 64-bit systems, previously it only supported years in the
    range from 1970 to 2037.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.curl">
   <h4 class="title">Curl</h4>

   <p class="para">
    <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span> now supports two new constants:
    <strong><code><a href="curl.constants.php#constant.curlinfo-capath">CURLINFO_CAPATH</a></code></strong> and
    <strong><code><a href="curl.constants.php#constant.curlinfo-cainfo">CURLINFO_CAINFO</a></code></strong>. If option is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the following
    two additional keys are present:
    <code class="literal">&quot;capath&quot;</code> and <code class="literal">&quot;cainfo&quot;</code>.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.dom">
   <h4 class="title">DOM</h4>

   <p class="para">
    Changed <span class="methodname"><a href="domcharacterdata.appenddata.php" class="methodname">DOMCharacterData::appendData()</a></span> tentative
    return type to <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span>.
   </p>

   <p class="para">
    <span class="methodname"><a href="domdocument.loadhtml.php" class="methodname">DOMDocument::loadHTML()</a></span>,
    <span class="methodname"><a href="domdocument.loadhtmlfile.php" class="methodname">DOMDocument::loadHTMLFile()</a></span>, and
    <span class="methodname"><a href="domdocument.loadxml.php" class="methodname">DOMDocument::loadXML()</a></span> now have a tentative
    return type of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>. Previously, this was documented as having a return
    type of <code class="code">DOMDocument|bool</code>, but, as of PHP 8.0.0,
    <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>
    cannot be returned as it is no longer statically callable.
   </p>

  </div>

  <div class="sect3" id="migration83.other-changes.functions.gd">
   <h4 class="title">Gd</h4>

   <p class="para">
    The signature of <span class="function"><a href="function.imagerotate.php" class="function">imagerotate()</a></span> has changed.
    The <code class="parameter">$ignore_transparent</code> parameter has been removed,
    as it was ignored since PHP 5.5.0.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.intl">
   <h4 class="title">Intl</h4>

   <p class="para">
    <span class="function"><a href="intldateformatter.settimezone.php" class="function">datefmt_set_timezone()</a></span> (and its alias
    <span class="methodname"><a href="intldateformatter.settimezone.php" class="methodname">IntlDateformatter::setTimeZone()</a></span>)
    now returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success, previously <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> was returned.
   </p>

   <p class="para">
    <span class="methodname"><a href="intlbreakiterator.settext.php" class="methodname">IntlBreakiterator::setText()</a></span> now returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
    on failure, previously <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> was returned.
    It now returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success, previously <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> was returned.
   </p>

   <p class="para">
    <span class="methodname"><a href="intlchar.enumcharnames.php" class="methodname">IntlChar::enumCharNames()</a></span> is now returning a boolean.
    Previously it returned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on success and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   </p>

   <p class="para">
    <span class="methodname"><a href="intldateformatter.create.php" class="methodname">IntlDateFormatter::__construct()</a></span> throws an <strong><code><a href="intl.constants.php#constant.u-illegal-argument-error">U_ILLEGAL_ARGUMENT_ERROR</a></code></strong>
    exception when an invalid locale had been set.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.mbstring">
   <h4 class="title">MBString</h4>

   <p class="para">
    <span class="function"><a href="function.mb-strtolower.php" class="function">mb_strtolower()</a></span> and <span class="function"><a href="function.mb-convert-case.php" class="function">mb_convert_case()</a></span>
    implement conditional casing rules for the Greek letter sigma.
    For <span class="function"><a href="function.mb-convert-case.php" class="function">mb_convert_case()</a></span>,
    conditional casing only applies to <strong><code><a href="mbstring.constants.php#constant.mb-case-lower">MB_CASE_LOWER</a></code></strong>
    and <strong><code><a href="mbstring.constants.php#constant.mb-case-title">MB_CASE_TITLE</a></code></strong> modes, not to
    <strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong> and
    <strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong>.
   </p>

   <p class="para">
    <span class="function"><a href="function.mb-decode-mimeheader.php" class="function">mb_decode_mimeheader()</a></span> interprets underscores in
    QPrint-encoded MIME encoded words as required by RFC 2047; they are
    converted to spaces.
    Underscores must be encoded as <code class="literal">&quot;=5F&quot;</code> in such MIME
    encoded words.
   </p>

   <p class="para">
    In rare cases, <span class="function"><a href="function.mb-encode-mimeheader.php" class="function">mb_encode_mimeheader()</a></span> will transfer-encode
    its input string where it would pass it through as raw ASCII in PHP 8.2.
   </p>

   <p class="para">
    <span class="function"><a href="function.mb-encode-mimeheader.php" class="function">mb_encode_mimeheader()</a></span> no longer drops NUL (zero)
    bytes when QPrint-encoding the input string.
    This previously caused strings in certain text encodings, especially
    UTF-16 and UTF-32, to be corrupted by mb_encode_mimeheader.
   </p>

   <p class="para">
    <span class="function"><a href="function.mb-detect-encoding.php" class="function">mb_detect_encoding()</a></span>&#039;s &quot;non-strict&quot; mode now behaves
    as described in the documentation.
    Previously, it would return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the same byte (for example, the first
    byte) of the input string was invalid in all candidate encodings.
    More generally, it would eliminate candidate encodings from consideration
    when an invalid byte was seen, and if the same input byte eliminated all
    remaining encodings still under consideration, it would return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
    On the other hand, if all candidate encodings but one were eliminated
    from consideration, it would return the last remaining one without regard
    for how many encoding errors might be encountered later in the string.
    This is different from the behavior described in the documentation, which
    says: &quot;If strict is set to false, the closest matching encoding will be
    returned.&quot;
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.mysqli">
   <h4 class="title">mysqli</h4>

   <p class="para">
    <span class="function"><a href="mysqli-result.fetch-object.php" class="function">mysqli_fetch_object()</a></span> now raises a
    <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> instead of an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>
    when the <code class="parameter">$constructor_args</code> argument is non empty with
    the class not having constructor.
   </p>

   <p class="para">
    <span class="function"><a href="mysqli.poll.php" class="function">mysqli_poll()</a></span> now raises a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
    when neither the <code class="parameter">$read</code>
    nor the <code class="parameter">$error</code> arguments are passed.
   </p>

   <p class="para">
    <span class="function"><a href="mysqli-result.field-seek.php" class="function">mysqli_field_seek()</a></span> and
    <span class="methodname"><a href="mysqli-result.field-seek.php" class="methodname">mysqli_result::field_seek()</a></span> now specify the return
    type as <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span> instead of <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.odbc">
   <h4 class="title">ODBC</h4>

   <p class="para">
    <span class="function"><a href="function.odbc-autocommit.php" class="function">odbc_autocommit()</a></span> now accepts <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> for the
    <code class="parameter">$enable</code> parameter.
    Passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> has the same behaviour as passing only 1 parameter,
    namely indicating if the autocommit feature is enabled or not.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.pgsql">
   <h4 class="title">PGSQL</h4>

   <p class="para">
    <span class="function"><a href="function.pg-fetch-object.php" class="function">pg_fetch_object()</a></span> now raises a
    <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> instead of an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>
    when the <code class="parameter">$constructor_args</code> argument is non empty with
    the class not having constructor.
   </p>

   <p class="para">
    <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span> now raises a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
    instead of a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> when the table specified is invalid.
   </p>

   <p class="para">
    <span class="function"><a href="function.pg-insert.php" class="function">pg_insert()</a></span> and <span class="function"><a href="function.pg-convert.php" class="function">pg_convert()</a></span> raises
    a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> or a <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span>
    instead of a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> when the value/type of a field
    does not match properly with a PostgreSQL&#039;s type.
   </p>

   <p class="para">
    The <code class="parameter">$row</code> parameter of
    <span class="function"><a href="function.pg-fetch-result.php" class="function">pg_fetch_result()</a></span>,
    <span class="function"><a href="function.pg-field-prtlen.php" class="function">pg_field_prtlen()</a></span>, and
    <span class="function"><a href="function.pg-field-is-null.php" class="function">pg_field_is_null()</a></span> is now nullable.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.random">
   <h4 class="title">Random</h4>

   <p class="para">
    Changed <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span> and <span class="function"><a href="function.srand.php" class="function">srand()</a></span> to
    not check the number of arguments to determine whether a random seed should
    be used. Passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> will generate a random seed, <code class="literal">0</code>
    will use zero as the seed. The functions are now consistent with
    <span class="methodname"><a href="random-engine-mt19937.construct.php" class="methodname">Random\Engine\Mt19937::__construct()</a></span>.
   </p>

  </div>

  <div class="sect3" id="migration83.other-changes.functions.reflection">
   <h4 class="title">Reflection</h4>

   <p class="para">
    Return type of <span class="methodname"><a href="reflectionclass.getstaticproperties.php" class="methodname">ReflectionClass::getStaticProperties()</a></span>
    is no longer nullable.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.functions.standard">
   <h4 class="title">Standard</h4>

   <p class="para">
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>s emitted by <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span>
    have been promoted to <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
    
   </p>

   <p class="para">
    <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> now emits a new <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
    if the input contains unconsumed bytes.
    
   </p>

   <p class="para">
    <span class="function"><a href="function.array-pad.php" class="function">array_pad()</a></span> is now only limited by the maximum number of
    elements an array can have. Before, it was only possible to add at most 1048576
    elements at a time.
   </p>

   <p class="para">
    <span class="function"><a href="function.strtok.php" class="function">strtok()</a></span> raises an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> in the
    case token is not provided when starting tokenization.
   </p>

   <p class="para">
    <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> will now chain the underlying
    <span class="classname"><a href="class.random-randomexception.php" class="classname">Random\RandomException</a></span>
    as the <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>&#039;s <code class="parameter">$previous</code>
    <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> when salt generation fails.
   </p>

   <p class="para">
    If using an array as the <code class="parameter">$command</code>
    for <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span>, it must now have at least one
    non empty element. Otherwise a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
    is thrown.
   </p>

   <p class="para">
    <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if <code class="parameter">$command</code>
    array is invalid command instead of resource object that produces warning later.
    This was already the case for Windows but it is now also the case if a posix_spawn
    implementation is in use (most Linux, BSD and MacOS platforms). There are still
    some old platforms where this behavior is not changed as posix_spawn is not
    supported there.
   </p>

   <p class="para">
    <span class="function"><a href="function.array-sum.php" class="function">array_sum()</a></span> and <span class="function"><a href="function.array-product.php" class="function">array_product()</a></span> now
    warn when values in the array cannot be converted to int/float.
    Previously arrays and objects where ignored whilst every other value was
    cast to int. Moreover, objects that define a numeric cast (e.g.
    <a href="book.gmp.php" class="link">GMP</a>) are now casted instead of ignored.
    
   </p>

   <p class="para">
    The <code class="parameter">$decimals</code> of <span class="function"><a href="function.number-format.php" class="function">number_format()</a></span>
    now properly handles negative integers.
    Rounding with a negative value for <code class="parameter">$decimals</code> means
    that <code class="parameter">$num</code> is rounded to <code class="parameter">$decimals</code>
    significant digits before the decimal point.
    Previously negative <code class="parameter">$decimals</code> were silently
    ignored and the number got rounded to zero decimal places.
   </p>

   <p class="para">
    A new <code class="parameter">$before_needle</code> argument has been added to
    <span class="function"><a href="function.strrchr.php" class="function">strrchr()</a></span>. It behaves like its counterpart in the
    <span class="function"><a href="function.strstr.php" class="function">strstr()</a></span> or <span class="function"><a href="function.stristr.php" class="function">stristr()</a></span> functions.
   </p>

   <p class="para">
    <span class="function"><a href="function.str-getcsv.php" class="function">str_getcsv()</a></span> and <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span> now return
    an empty string instead of a string with a single null byte for the last field
    which only contains an unterminated enclosure.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration83.other-changes.extensions">
  <h3 class="title">Other Changes to Extensions</h3>

  <div class="sect3" id="migration83.other-changes.extensions.core">
   <h4 class="title">Core</h4>

   <p class="para">
    Using the <a href="language.operators.increment.php" class="link">increment/decrement</a>
    operators (<code class="literal">++</code>/<code class="literal">--</code>) on values of type
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> now emit warnings.
    This is because it currently has no effect, but will behave like
    <code class="code">$bool += 1</code> in the future.
   </p>

   <p class="para">
    Using the <a href="language.operators.increment.php" class="link">decrement</a>
    operator (<code class="literal">--</code>) on values of type <span class="type"><a href="language.types.null.php" class="type null">null</a></span> now emit warnings.
    This is because it currently has no effect, but will behave like
    <code class="code">$null -= 1</code> in the future.
   </p>

   <p class="para">
    Internal objects that implement an _IS_NUMBER cast but not a do_operator
    handler that overrides addition and subtraction now can be incremented
    and decrement as if one would do <code class="code">$o += 1</code> or <code class="code">$o -= 1</code>
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.extensions.dom">
   <h4 class="title">DOM</h4>

   <p class="para">
    The DOM lifetime mechanism has been reworked such that implicitly removed
    nodes can still be fetched. Previously this resulted in an exception.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.extensions.sqlite3">
   <h4 class="title">SQLite3</h4>

   <p class="para">
    The <span class="classname"><a href="class.sqlite3.php" class="classname">SQLite3</a></span> class now throws
    <span class="classname"><a href="class.sqlite3exception.php" class="classname">SQLite3Exception</a></span> (extends
    <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>) instead of <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span>.
   </p>

   <p class="para">
    The SQLite error code is now passed in the exception error code instead of
    being included in the error message.
   </p>

  </div>
 </div>

 <div class="sect2" id="migration83.other-changes.ini">
  <h3 class="title">Changes to INI File Handling</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <p class="para">
     The <code class="literal">assert.*</code> INI settings have been deprecated.
     This comprises the following INI settings:
     <ul class="simplelist">
      <li><a href="info.configuration.php#ini.assert.active" class="link">assert.active</a></li>
      <li><a href="info.configuration.php#ini.assert.bail" class="link">assert.bail</a></li>
      <li><a href="info.configuration.php#ini.assert.callback" class="link">assert.callback</a></li>
      <li><a href="info.configuration.php#ini.assert.exception" class="link">assert.exception</a></li>
      <li><a href="info.configuration.php#ini.assert.warning" class="link">assert.warning</a></li>
     </ul>
     If the value of the setting is equal to the default value, no deprecation
     notice is emitted.
     The <a href="ini.core.php#ini.zend.assertions" class="link">zend.assertions</a> INI setting
     should be used instead.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a>
    is a new INI directive to set the maximum allowed stack size.
    Possible values are <code class="literal">0</code> (detect the process or thread maximum stack size),
    <code class="literal">-1</code> (no limit), or a positive number of bytes.
    The default is <code class="literal">0</code>.
    When it is not possible to detect the process or thread maximum stack
    size, a known system default is used.
    Setting this value too high has the same effect as disabling the stack size limit.
    Fibers use
    <a href="info.configuration.php#ini.fiber.stack-size" class="link">fiber.stack_size</a>
    as maximum allowed stack size.
    An <span class="classname"><a href="class.error.php" class="classname">Error</a></span> is thrown when the process call stack exceeds
    <a href="info.configuration.php#ini.zend.max-allowed-stack-size" class="link">zend.max_allowed_stack_size</a>-<a href="info.configuration.php#ini.zend.reserved-stack-size" class="link">zend.reserved_stack_size</a>
    bytes, to prevent stack-overflow-induced segmentation faults, with
    the goal of making debugging easier.
    The stack size increases during uncontrolled recursions involving internal functions
    or the magic methods
    <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>,
    <a href="language.oop5.cloning.php#object.clone" class="link">__clone()</a>,
    <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a>,
    <a href="language.oop5.decon.php#object.destruct" class="link">__destruct()</a>.
    This is not related to stack buffer overflows, and is not a security feature.
    </p>
   </li>
   <li class="listitem">
    <p class="para">
     <a href="info.configuration.php#ini.zend.reserved-stack-size" class="link">zend.reserved_stack_size</a>
     is a new INI directive to set the reserved stack size, in bytes.
     This is subtracted from the max allowed stack size,
     as a buffer, when checking the stack size.
    </p>
   </li>
   </ul>
 </div>

 <div class="sect2" id="migration83.other-changes.performance">
  <h3 class="title">Performance</h3>

  <div class="sect3" id="migration83.other-changes.performance.dom">
   <h4 class="title">DOM</h4>

   <p class="para">
    Looping over a <span class="classname"><a href="class.domnodelist.php" class="classname">DOMNodeList</a></span> now uses caching. Therefore
    requesting items no longer takes quadratic time by default.
   </p>

   <p class="para">
    Getting text content from nodes now avoids an allocation, resulting in a
    performance gain.
   </p>

   <p class="para">
    <span class="methodname"><a href="domchildnode.remove.php" class="methodname">DOMChildNode::remove()</a></span> now runs in O(1) performance.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.performance.standard">
   <h4 class="title">Standard</h4>

   <p class="para">
    The <span class="function"><a href="function.file.php" class="function">file()</a></span> flags error check is now about 7% faster.
   </p>
  </div>

  <div class="sect3" id="migration83.other-changes.performance.spl">
   <h4 class="title">SPL</h4>

   <p class="para">
    <span class="classname"><a href="class.recursivedirectoryiterator.php" class="classname">RecursiveDirectoryIterator</a></span> now performs less I/O
    when looping over a directory.
   </p>
  </div>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration83/other-changes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration83.other-changes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration83.other-changes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration83.other-changes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration83.php">Migrating from PHP 8.2.x to PHP 8.3.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration83.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration83.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration83.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration83.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration83.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration83.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="current">
                            <a href="migration83.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration83.windows-support.php" title="Windows Support">Windows Support</a>
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
