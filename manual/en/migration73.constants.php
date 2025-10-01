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

 <link rel="canonical" href="https://www.php.net/manual/en/migration73.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration73.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration73.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration73.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration73.new-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration73.incompatible.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration73.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration73.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration73.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration73.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration73.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration73.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration73.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration73.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration73.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration73.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration73.constants.php" hreflang="zh">

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
        <a href="migration73.incompatible.php">
          Backward Incompatible Changes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration73.new-functions.php">
          &laquo; New Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration73.php'>Migrating from PHP 7.2.x to PHP 7.3.x</a></li>      </ul>
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
            <option value='en/migration73.constants.php' selected="selected">English</option>
            <option value='de/migration73.constants.php'>German</option>
            <option value='es/migration73.constants.php'>Spanish</option>
            <option value='fr/migration73.constants.php'>French</option>
            <option value='it/migration73.constants.php'>Italian</option>
            <option value='ja/migration73.constants.php'>Japanese</option>
            <option value='pt_BR/migration73.constants.php'>Brazilian Portuguese</option>
            <option value='ru/migration73.constants.php'>Russian</option>
            <option value='tr/migration73.constants.php'>Turkish</option>
            <option value='uk/migration73.constants.php'>Ukrainian</option>
            <option value='zh/migration73.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration73.constants" class="sect1">
 <h2 class="title">New Global Constants</h2>

 <div class="sect2" id="migration73.constants.core">
  <h3 class="title">PHP Core</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.curl">
  <h3 class="title">Client URL Library</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlauth-bearer">CURLAUTH_BEARER</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlauth-gssapi">CURLAUTH_GSSAPI</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curle-weird-server-reply">CURLE_WEIRD_SERVER_REPLY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-appconnect-time-t">CURLINFO_APPCONNECT_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-connect-time-t">CURLINFO_CONNECT_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-content-length-download-t">CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-content-length-upload-t">CURLINFO_CONTENT_LENGTH_UPLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-filetime-t">CURLINFO_FILETIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-http-version">CURLINFO_HTTP_VERSION</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-namelookup-time-t">CURLINFO_NAMELOOKUP_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-pretransfer-time-t">CURLINFO_PRETRANSFER_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-protocol">CURLINFO_PROTOCOL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-proxy-ssl-verifyresult">CURLINFO_PROXY_SSL_VERIFYRESULT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-redirect-time-t">CURLINFO_REDIRECT_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-scheme">CURLINFO_SCHEME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-size-download-t">CURLINFO_SIZE_DOWNLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-size-upload-t">CURLINFO_SIZE_UPLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-speed-download-t">CURLINFO_SPEED_DOWNLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-speed-upload-t">CURLINFO_SPEED_UPLOAD_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-starttransfer-time-t">CURLINFO_STARTTRANSFER_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlinfo-total-time-t">CURLINFO_TOTAL_TIME_T</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-lock-data-connect">CURL_LOCK_DATA_CONNECT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-lock-data-psl">CURL_LOCK_DATA_PSL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-max-read-size">CURL_MAX_READ_SIZE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_ABSTRACT_UNIX_SOCKET</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-disallow-username-in-url">CURLOPT_DISALLOW_USERNAME_IN_URL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-dns-shuffle-addresses">CURLOPT_DNS_SHUFFLE_ADDRESSES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-happy-eyeballs-timeout-ms">CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-haproxyprotocol">CURLOPT_HAPROXYPROTOCOL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-keep-sending-on-error">CURLOPT_KEEP_SENDING_ON_ERROR</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-pre-proxy">CURLOPT_PRE_PROXY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-cainfo">CURLOPT_PROXY_CAINFO</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-capath">CURLOPT_PROXY_CAPATH</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-crlfile">CURLOPT_PROXY_CRLFILE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-keypasswd">CURLOPT_PROXY_KEYPASSWD</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-pinnedpublickey">CURLOPT_PROXY_PINNEDPUBLICKEY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslcert">CURLOPT_PROXY_SSLCERT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslcerttype">CURLOPT_PROXY_SSLCERTTYPE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-cipher-list">CURLOPT_PROXY_SSL_CIPHER_LIST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslkey">CURLOPT_PROXY_SSLKEY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslkeytype">CURLOPT_PROXY_SSLKEYTYPE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-options">CURLOPT_PROXY_SSL_OPTIONS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-verifyhost">CURLOPT_PROXY_SSL_VERIFYHOST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-ssl-verifypeer">CURLOPT_PROXY_SSL_VERIFYPEER</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-sslversion">CURLOPT_PROXY_SSLVERSION</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-tls13-ciphers">CURLOPT_PROXY_TLS13_CIPHERS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-password">CURLOPT_PROXY_TLSAUTH_PASSWORD</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-type">CURLOPT_PROXY_TLSAUTH_TYPE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-proxy-tlsauth-username">CURLOPT_PROXY_TLSAUTH_USERNAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-request-target">CURLOPT_REQUEST_TARGET</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-socks5-auth">CURLOPT_SOCKS5_AUTH</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-ssh-compression">CURLOPT_SSH_COMPRESSION</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-suppress-connect-headers">CURLOPT_SUPPRESS_CONNECT_HEADERS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-timevalue-large">CURLOPT_TIMEVALUE_LARGE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlopt-tls13-ciphers">CURLOPT_TLS13_CIPHERS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlproxy-https">CURLPROXY_HTTPS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curlssh-auth-gssapi">CURLSSH_AUTH_GSSAPI</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-default">CURL_SSLVERSION_MAX_DEFAULT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-none">CURL_SSLVERSION_MAX_NONE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-tlsv1-0">CURL_SSLVERSION_MAX_TLSv1_0</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-tlsv1-1">CURL_SSLVERSION_MAX_TLSv1_1</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-tlsv1-2">CURL_SSLVERSION_MAX_TLSv1_2</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-max-tlsv1-3">CURL_SSLVERSION_MAX_TLSv1_3</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-sslversion-tlsv1-3">CURL_SSLVERSION_TLSv1_3</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-altsvc">CURL_VERSION_ALTSVC</a></code></strong> (as of PHP 7.3.6)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-asynchdns">CURL_VERSION_ASYNCHDNS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-brotli">CURL_VERSION_BROTLI</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-conv">CURL_VERSION_CONV</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-curldebug">CURL_VERSION_CURLDEBUG</a></code></strong> (as of PHP 7.3.6)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-debug">CURL_VERSION_DEBUG</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-gssapi">CURL_VERSION_GSSAPI</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-gssnegotiate">CURL_VERSION_GSSNEGOTIATE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-https-proxy">CURL_VERSION_HTTPS_PROXY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-idn">CURL_VERSION_IDN</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-largefile">CURL_VERSION_LARGEFILE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-multi-ssl">CURL_VERSION_MULTI_SSL</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-ntlm">CURL_VERSION_NTLM</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-ntlm-wb">CURL_VERSION_NTLM_WB</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-psl">CURL_VERSION_PSL</a></code></strong> (as of PHP 7.3.6)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-spnego">CURL_VERSION_SPNEGO</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-sspi">CURL_VERSION_SSPI</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="curl.constants.php#constant.curl-version-tlsauth-srp">CURL_VERSION_TLSAUTH_SRP</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.filter">
  <h3 class="title">Data Filtering</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.json">
  <h3 class="title">JavaScript Object Notation</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.ldap">
  <h3 class="title">Lightweight Directory Access Protocol</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-assert">LDAP_CONTROL_ASSERT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-managedsait">LDAP_CONTROL_MANAGEDSAIT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-proxy-authz">LDAP_CONTROL_PROXY_AUTHZ</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-subentries">LDAP_CONTROL_SUBENTRIES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-valuesreturnfilter">LDAP_CONTROL_VALUESRETURNFILTER</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-pre-read">LDAP_CONTROL_PRE_READ</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-post-read">LDAP_CONTROL_POST_READ</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-sortrequest">LDAP_CONTROL_SORTREQUEST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-sortresponse">LDAP_CONTROL_SORTRESPONSE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-pagedresults">LDAP_CONTROL_PAGEDRESULTS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-authzid-request">LDAP_CONTROL_AUTHZID_REQUEST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-authzid-response">LDAP_CONTROL_AUTHZID_RESPONSE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-sync">LDAP_CONTROL_SYNC</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-sync-state">LDAP_CONTROL_SYNC_STATE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-sync-done">LDAP_CONTROL_SYNC_DONE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-dontusecopy">LDAP_CONTROL_DONTUSECOPY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyrequest">LDAP_CONTROL_PASSWORDPOLICYREQUEST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-passwordpolicyresponse">LDAP_CONTROL_PASSWORDPOLICYRESPONSE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-incremental-values">LDAP_CONTROL_X_INCREMENTAL_VALUES</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-domain-scope">LDAP_CONTROL_X_DOMAIN_SCOPE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-permissive-modify">LDAP_CONTROL_X_PERMISSIVE_MODIFY</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-search-options">LDAP_CONTROL_X_SEARCH_OPTIONS</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-tree-delete">LDAP_CONTROL_X_TREE_DELETE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-x-extended-dn">LDAP_CONTROL_X_EXTENDED_DN</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-vlvrequest">LDAP_CONTROL_VLVREQUEST</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ldap.constants.php#constant.ldap-control-vlvresponse">LDAP_CONTROL_VLVRESPONSE</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.mbstring">
  <h3 class="title">Multibyte String</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mbstring.constants.php#constant.mb-case-fold">MB_CASE_FOLD</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mbstring.constants.php#constant.mb-case-upper-simple">MB_CASE_UPPER_SIMPLE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="mbstring.constants.php#constant.mb-case-fold-simple">MB_CASE_FOLD_SIMPLE</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.openssl">
  <h3 class="title">OpenSSL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="stream.constants.php#constant.stream-crypto-proto-sslv3">STREAM_CRYPTO_PROTO_SSLv3</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-0">STREAM_CRYPTO_PROTO_TLSv1_0</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-1">STREAM_CRYPTO_PROTO_TLSv1_1</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="stream.constants.php#constant.stream-crypto-proto-tlsv1-2">STREAM_CRYPTO_PROTO_TLSv1_2</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration73.constants.pgsql">
  <h3 class="title">PostgreSQL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-schema-name">PGSQL_DIAG_SCHEMA_NAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-table-name">PGSQL_DIAG_TABLE_NAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-column-name">PGSQL_DIAG_COLUMN_NAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-datatype-name">PGSQL_DIAG_DATATYPE_NAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-constraint-name">PGSQL_DIAG_CONSTRAINT_NAME</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pgsql.constants.php#constant.pgsql-diag-severity-nonlocalized">PGSQL_DIAG_SEVERITY_NONLOCALIZED</a></code></strong></span>
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
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration73/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration73.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration73.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration73.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration73.php">Migrating from PHP 7.2.x to PHP 7.3.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration73.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration73.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="current">
                            <a href="migration73.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration73.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration73.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.windows-support.php" title="Windows Support">Windows Support</a>
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
