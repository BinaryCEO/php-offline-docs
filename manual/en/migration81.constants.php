<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New Global Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration81.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration81.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration81.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration81.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration81.new-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration81.incompatible.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration81.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration81.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration81.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration81.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration81.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration81.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration81.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration81.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration81.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration81.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration81.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New Global Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New Global Constants - Manual" />
<meta name="twitter:description" content="New Global Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New Global Constants - Manual" />
<meta itemprop="description" content="New Global Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New Global Constants" />

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
        <a href="migration81.incompatible.php">
          Backward Incompatible Changes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration81.new-functions.php">
          &laquo; New Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration81.php'>Migrating from PHP 8.0.x to PHP 8.1.x</a></li>      </ul>
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
            <option value='en/migration81.constants.php' selected="selected">English</option>
            <option value='de/migration81.constants.php'>German</option>
            <option value='es/migration81.constants.php'>Spanish</option>
            <option value='fr/migration81.constants.php'>French</option>
            <option value='it/migration81.constants.php'>Italian</option>
            <option value='ja/migration81.constants.php'>Japanese</option>
            <option value='pt_BR/migration81.constants.php'>Brazilian Portuguese</option>
            <option value='ru/migration81.constants.php'>Russian</option>
            <option value='tr/migration81.constants.php'>Turkish</option>
            <option value='uk/migration81.constants.php'>Ukrainian</option>
            <option value='zh/migration81.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration81.constants" class="sect1">
 <h2 class="title">New Global Constants</h2>

 <div class="sect2" id="migration81.constants.curl">
  <h3 class="title">cURL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-doh-url">CURLOPT_DOH_URL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-issuercert-blob">CURLOPT_ISSUERCERT_BLOB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-issuercert">CURLOPT_PROXY_ISSUERCERT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-issuercert-blob">CURLOPT_PROXY_ISSUERCERT_BLOB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslcert-blob">CURLOPT_PROXY_SSLCERT_BLOB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslkey-blob">CURLOPT_PROXY_SSLKEY_BLOB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-sslcert-blob">CURLOPT_SSLCERT_BLOB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-sslkey-blob">CURLOPT_SSLKEY_BLOB</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.gd">
  <h3 class="title">GD</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="image.constants.php#constant.img-avif">IMG_AVIF</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="image.constants.php#constant.img-webp-lossless">IMG_WEBP_LOSSLESS</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.mysqli">
  <h3 class="title">MySQLi</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-replica">MYSQLI_REFRESH_REPLICA</a></code></strong></span>
    <p class="para">
     This constant has been added as a replacement for
     <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-slave">MYSQLI_REFRESH_SLAVE</a></code></strong>,
     in line with an upstream change in MySQL.
     The old constant is still available for backwards-compatibility reasons,
     but may be deprecated/removed in the future.
    </p>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.pcntl">
  <h3 class="title">PCNTL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pcntl.constants.php#constant.prio-darwin-bg">PRIO_DARWIN_BG</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pcntl.constants.php#constant.prio-darwin-thread">PRIO_DARWIN_THREAD</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.posix">
  <h3 class="title">POSIX</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.setrlimit.php#constant.posix-rlimit-kqueues">POSIX_RLIMIT_KQUEUES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.setrlimit.php#constant.posix-rlimit-npts">POSIX_RLIMIT_NPTS</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.sockets">
  <h3 class="title">Sockets</h3>

  <p class="para">
   The following socket options are now defined if they are supported:
  </p>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-acceptfilter">SO_ACCEPTFILTER</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-donttrunc">SO_DONTTRUNC</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-wantmore">SO_WANTMORE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-mark">SO_MARK</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.tcp-defer-accept">TCP_DEFER_ACCEPT</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.sodium">
  <h3 class="title">Sodium</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-xchacha20-noncebytes">SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-xchacha20-keybytes">SODIUM_CRYPTO_STREAM_XCHACHA20_KEYBYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-ristretto255-bytes">SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-ristretto255-scalarbytes">SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-bytes">SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-hashbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-scalarbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-nonreducedscalarbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration81.constants.tokenizer">
  <h3 class="title">Tokenizer</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="tokens.php#constant.t-readonly">T_READONLY</a></code></strong></span>
   </li>
  </ul>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration81/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration81.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration81.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration81.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration81.php">Migrating from PHP 8.0.x to PHP 8.1.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration81.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="current">
                            <a href="migration81.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration81.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration81.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.other-changes.php" title="Other Changes">Other Changes</a>
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
