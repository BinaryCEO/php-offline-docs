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

 <link rel="canonical" href="https://www.php.net/manual/en/migration83.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration83.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration83.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration83.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration83.new-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration83.incompatible.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration83.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration83.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration83.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration83.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration83.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration83.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration83.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration83.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration83.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration83.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration83.constants.php" hreflang="zh">

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
        <a href="migration83.incompatible.php">
          Backward Incompatible Changes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration83.new-functions.php">
          &laquo; New Functions        </a>
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
            <option value='en/migration83.constants.php' selected="selected">English</option>
            <option value='de/migration83.constants.php'>German</option>
            <option value='es/migration83.constants.php'>Spanish</option>
            <option value='fr/migration83.constants.php'>French</option>
            <option value='it/migration83.constants.php'>Italian</option>
            <option value='ja/migration83.constants.php'>Japanese</option>
            <option value='pt_BR/migration83.constants.php'>Brazilian Portuguese</option>
            <option value='ru/migration83.constants.php'>Russian</option>
            <option value='tr/migration83.constants.php'>Turkish</option>
            <option value='uk/migration83.constants.php'>Ukrainian</option>
            <option value='zh/migration83.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration83.constants" class="sect1">
 <h2 class="title">New Global Constants</h2>

 <div class="sect2" id="migration83.constants.curl">
  <h3 class="title">cURL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlinfo-capath">CURLINFO_CAPATH</a></code></strong> (libcurl &gt;= 7.84.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlinfo-cainfo">CURLINFO_CAINFO</a></code></strong> (libcurl &gt;= 7.84.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-mime-options">CURLOPT_MIME_OPTIONS</a></code></strong> (libcurl &gt;= 7.81.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlmimeopt-formescape">CURLMIMEOPT_FORMESCAPE</a></code></strong> (libcurl &gt;= 7.81.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-ws-options">CURLOPT_WS_OPTIONS</a></code></strong> (libcurl &gt;= 7.86.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlws-raw-mode">CURLWS_RAW_MODE</a></code></strong> (libcurl &gt;= 7.86.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-ssh-hostkeyfunction">CURLOPT_SSH_HOSTKEYFUNCTION</a></code></strong> (libcurl &gt;= 7.84.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-protocols-str">CURLOPT_PROTOCOLS_STR</a></code></strong> (libcurl &gt;= 7.85.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-redir-protocols-str">CURLOPT_REDIR_PROTOCOLS_STR</a></code></strong> (libcurl &gt;= 7.85.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-ca-cache-timeout">CURLOPT_CA_CACHE_TIMEOUT</a></code></strong> (libcurl &gt;= 7.87.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlopt-quick-exit">CURLOPT_QUICK_EXIT</a></code></strong> (libcurl &gt;= 7.87.0)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlkhmatch-ok">CURLKHMATCH_OK</a></code></strong> (libcurl &gt;= 7.19.6)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlkhmatch-mismatch">CURLKHMATCH_MISMATCH</a></code></strong> (libcurl &gt;= 7.19.6)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlkhmatch-missing">CURLKHMATCH_MISSING</a></code></strong> (libcurl &gt;= 7.19.6)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="curl.constants.php#constant.curlkhmatch-last">CURLKHMATCH_LAST</a></code></strong> (libcurl &gt;= 7.19.6)
    </span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.intl">
  <h3 class="title">Intl</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code>MIXED_NUMBERS</code></strong>
    (<span class="classname"><a href="class.spoofchecker.php" class="classname">Spoofchecker</a></span>)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code>HIDDEN_OVERLAY</code></strong>
    (<span class="classname"><a href="class.spoofchecker.php" class="classname">Spoofchecker</a></span>)</span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.openssl">
  <h3 class="title">OpenSSL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="openssl.cms.flags.php#constant.openssl-cms-oldmimetype">OPENSSL_CMS_OLDMIMETYPE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="openssl.pkcs7.flags.php#constant.pkcs7-nooldmimetype">PKCS7_NOOLDMIMETYPE</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.pcntl">
  <h3 class="title">PCNTL</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="pcntl.constants.php#constant.siginfo">SIGINFO</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.pdo-odbc">
  <h3 class="title">PDO_ODBC</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="ref.pdo-odbc.php#constant.pdo-odbc-type">PDO_ODBC_TYPE</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.posix">
  <h3 class="title">Posix</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-arg-max">POSIX_SC_ARG_MAX</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-pagesize">POSIX_SC_PAGESIZE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-nprocessors-conf">POSIX_SC_NPROCESSORS_CONF</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-nprocessors-onln">POSIX_SC_NPROCESSORS_ONLN</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-link-max">POSIX_PC_LINK_MAX</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-max-canon">POSIX_PC_MAX_CANON</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-max-input">POSIX_PC_MAX_INPUT</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-name-max">POSIX_PC_NAME_MAX</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-path-max">POSIX_PC_PATH_MAX</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-pipe-buf">POSIX_PC_PIPE_BUF</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-chown-restricted">POSIX_PC_CHOWN_RESTRICTED</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-no-trunc">POSIX_PC_NO_TRUNC</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-alloc-size-min">POSIX_PC_ALLOC_SIZE_MIN</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="posix.constants.pathconf.php#constant.posix-pc-symlink-max">POSIX_PC_SYMLINK_MAX</a></code></strong></span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.sockets">
  <h3 class="title">Sockets</h3>

  <p class="para">
   The following socket options are now defined if they are supported:
  </p>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-attach-reuseport-cbpf">SO_ATTACH_REUSEPORT_CBPF</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-detach-bpf">SO_DETACH_BPF</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-detach-filter">SO_DETACH_FILTER</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.tcp-quickack">TCP_QUICKACK</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-dontfrag">IP_DONTFRAG</a></code></strong> (FreeBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-mtu-discover">IP_MTU_DISCOVER</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-do">IP_PMTUDISC_DO</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-dont">IP_PMTUDISC_DONT</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-want">IP_PMTUDISC_WANT</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-probe">IP_PMTUDISC_PROBE</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-interface">IP_PMTUDISC_INTERFACE</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-pmtudisc-omit">IP_PMTUDISC_OMIT</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.af-divert">AF_DIVERT</a></code></strong> (FreeBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.sol-udplite">SOL_UDPLITE</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.udplite-recv-cscov">UDPLITE_RECV_CSCOV</a></code></strong></span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.udplite-send-cscov">UDPLITE_SEND_CSCOV</a></code></strong></span>
   </li>

   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-rerror">SO_RERROR</a></code></strong> (NetBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-zeroize">SO_ZEROIZE</a></code></strong> (OpenBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-splice">SO_SPLICE</a></code></strong> (OpenBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.tcp-repair">TCP_REPAIR</a></code></strong> (Linux)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.so-reuseport-lb">SO_REUSEPORT_LB</a></code></strong> (FreeBSD)</span>
   </li>
   <li class="listitem">
    <span class="simpara"><strong><code><a href="sockets.constants.php#constant.ip-bind-address-no-port">IP_BIND_ADDRESS_NO_PORT</a></code></strong> (Linux)</span>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration83.constants.zip">
  <h3 class="title">Zip</h3>

  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.er-data-length">ZipArchive::ER_DATA_LENGTH</a></code></strong> (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.er-not-allowed">ZipArchive::ER_NOT_ALLOWED</a></code></strong> (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.afl-rdonly">ZipArchive::AFL_RDONLY</a></code></strong> (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.afl-is-torrentzip">ZipArchive::AFL_IS_TORRENTZIP</a></code></strong> (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.afl-want-torrentzip">ZipArchive::AFL_WANT_TORRENTZIP</a></code></strong> (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.afl-create-or-keep-file-for-empty-archive">ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE</a></code></strong>
     (libzip &gt;= 1.10)
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.length-to-end">ZipArchive::LENGTH_TO_END</a></code></strong> as default value for
     <span class="function"><a href="ziparchive.addfile.php" class="function">ZipArchive::addFile()</a></span> and
     <span class="function"><a href="ziparchive.replacefile.php" class="function">ZipArchive::replaceFile()</a></span>
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     <strong><code><a href="zip.constants.php#ziparchive.constants.length-unchecked">ZipArchive::LENGTH_UNCHECKED</a></code></strong> (libzip &gt;= 1.10)
    </span>
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
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration83/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration83.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration83.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration83.constants.php">＋<small>add a note</small></a></span>
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
                                                <li class="current">
                            <a href="migration83.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration83.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration83.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
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
