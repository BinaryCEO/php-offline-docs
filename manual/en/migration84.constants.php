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

 <link rel="canonical" href="https://www.php.net/manual/en/migration84.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration84.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration84.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration84.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration84.new-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration84.incompatible.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration84.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration84.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration84.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration84.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration84.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration84.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration84.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration84.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration84.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration84.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration84.constants.php" hreflang="zh">

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
        <a href="migration84.incompatible.php">
          Backward Incompatible Changes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration84.new-functions.php">
          &laquo; New Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration84.php'>Migrating from PHP 8.3.x to PHP 8.4.x</a></li>      </ul>
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
            <option value='en/migration84.constants.php' selected="selected">English</option>
            <option value='de/migration84.constants.php'>German</option>
            <option value='es/migration84.constants.php'>Spanish</option>
            <option value='fr/migration84.constants.php'>French</option>
            <option value='it/migration84.constants.php'>Italian</option>
            <option value='ja/migration84.constants.php'>Japanese</option>
            <option value='pt_BR/migration84.constants.php'>Brazilian Portuguese</option>
            <option value='ru/migration84.constants.php'>Russian</option>
            <option value='tr/migration84.constants.php'>Turkish</option>
            <option value='uk/migration84.constants.php'>Ukrainian</option>
            <option value='zh/migration84.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration84.constants" class="sect1">
 <h2 class="title">New Global Constants</h2>

 <div class="sect2" id="migration84.constants.core">
  <h3 class="title">Core</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="outcontrol.constants.php#constant.php-output-handler-processed">PHP_OUTPUT_HANDLER_PROCESSED</a></code></strong>
   </li>
   <li>
    <strong><code><a href="reserved.constants.php#constant.php-sbindir">PHP_SBINDIR</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.curl">
  <h3 class="title">cURL</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="curl.constants.php#constant.curl-http-version-3">CURL_HTTP_VERSION_3</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curl-http-version-3only">CURL_HTTP_VERSION_3ONLY</a></code></strong>
   </li>
   <li>
    <strong><code>CURL_TCP_KEEPCNT</code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlopt-prereqfunction">CURLOPT_PREREQFUNCTION</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curl-prereqfunc-ok">CURL_PREREQFUNC_OK</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curl-prereqfunc-abort">CURL_PREREQFUNC_ABORT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlopt-server-response-timeout">CURLOPT_SERVER_RESPONSE_TIMEOUT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlopt-debugfunction">CURLOPT_DEBUGFUNCTION</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-text">CURLINFO_TEXT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-header-in">CURLINFO_HEADER_IN</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-data-in">CURLINFO_DATA_IN</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-data-out">CURLINFO_DATA_OUT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-ssl-data-out">CURLINFO_SSL_DATA_OUT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-ssl-data-in">CURLINFO_SSL_DATA_IN</a></code></strong>
   </li>
   <li>
    <strong><code><a href="curl.constants.php#constant.curlinfo-posttransfer-time-t">CURLINFO_POSTTRANSFER_TIME_T</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.intl">
  <h3 class="title">Intl</h3>

  <ul class="simplelist">
   <li>
    <strong><code>PATTERN</code></strong>
     (<span class="classname"><a href="class.intldateformatter.php" class="classname">IntlDateFormatter</a></span>)
   </li>
   <li>
    <strong><code>PROPERTY_IDS_UNARY_OPERATOR</code></strong>
     (<span class="classname"><a href="class.intlchar.php" class="classname">IntlChar</a></span>)
   </li>
   <li>
    <strong><code>PROPERTY_ID_COMPAT_MATH_START</code></strong>
     
   </li>
   <li>
    <strong><code>PROPERTY_ID_COMPAT_MATH_CONTINUE</code></strong>
     
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.ldap">
  <h3 class="title">LDAP</h3>

  <ul class="simplelist">
   <li>
    <strong><code>LDAP_OPT_X_TLS_PROTOCOL_MAX</code></strong>
   </li>
   <li>
    <strong><code>LDAP_OPT_X_TLS_PROTOCOL_TLS1_3</code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.libxml">
  <h3 class="title">libxml</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="libxml.constants.php#constant.libxml-recover">LIBXML_RECOVER</a></code></strong>
   </li>
   <li>
    <strong><code><a href="libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></code></strong>.
     This is used together with <strong><code><a href="libxml.constants.php#constant.libxml-noent">LIBXML_NOENT</a></code></strong>
     when entity substitution should be performed,
     while disallowing external entity loading.
     This constant is available as of libxml2 2.13.
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.mysqli">
  <h3 class="title">MySQLi</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="mysqli.constants.php#constant.mysqli-type-vector">MYSQLI_TYPE_VECTOR</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.openssl">
  <h3 class="title">OpenSSL</h3>

  <ul class="simplelist">
   <li><strong><code>X509_PURPOSE_OCSP_HELPER</code></strong></li>
   <li><strong><code>X509_PURPOSE_TIMESTAMP_SIGN</code></strong></li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.pcntl">
  <h3 class="title">PCNTL</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="pcntl.constants.php#constant.sigckpt">SIGCKPT</a></code></strong> (DragonFlyBSD only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.sigckptexit">SIGCKPTEXIT</a></code></strong> (DragonFlyBSD only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.wexited">WEXITED</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.wstopped">WSTOPPED</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.wnowait">WNOWAIT</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-all">P_ALL</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-pid">P_PID</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-pgid">P_PGID</a></code></strong>
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-pidfd">P_PIDFD</a></code></strong> (Linux only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-uid">P_UID</a></code></strong> (NetBSD/FreeBSD only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-gid">P_GID</a></code></strong> (NetBSD/FreeBSD only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-sid">P_SID</a></code></strong> (NetBSD/FreeBSD only)
   </li>
   <li>
    <strong><code><a href="pcntl.constants.php#constant.p-jailid">P_JAILID</a></code></strong> (FreeBSD only)
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.pgsql">
  <h3 class="title">PGSQL</h3>

  <ul class="simplelist">
   <li><strong><code><a href="pgsql.constants.php#constant.pgsql-tuples-chunk">PGSQL_TUPLES_CHUNK</a></code></strong></li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.posix">
  <h3 class="title">POSIX</h3>

  <ul class="simplelist">
   <li><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-child-max">POSIX_SC_CHILD_MAX</a></code></strong></li>
   <li><strong><code><a href="posix.constants.sysconf.php#constant.posix-sc-clk-tck">POSIX_SC_CLK_TCK</a></code></strong></li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.sockets">
  <h3 class="title">Sockets</h3>

  <p class="simpara">
   The following socket options are now defined if they are supported:
  </p>

  <ul class="simplelist">
   <li>
    <strong><code><a href="sockets.constants.php#constant.so-exclusiveaddruse">SO_EXCLUSIVEADDRUSE</a></code></strong> (Windows only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.sock-conn-dgram">SOCK_CONN_DGRAM</a></code></strong> (NetBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.sock-dccp">SOCK_DCCP</a></code></strong> (NetBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.tcp-syncnt">TCP_SYNCNT</a></code></strong> (Linux only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.so-exclbind">SO_EXCLBIND</a></code></strong> (Solaris/Illumos only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.so-nosigpipe">SO_NOSIGPIPE</a></code></strong> (macOS and FreeBSD)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.so-linger-sec">SO_LINGER_SEC</a></code></strong> (macOS only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.ip-portrange">IP_PORTRANGE</a></code></strong> (FreeBSD/NetBSD/OpenBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-default">IP_PORTRANGE_DEFAULT</a></code></strong> (FreeBSD/NetBSD/OpenBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-high">IP_PORTRANGE_HIGH</a></code></strong> (FreeBSD/NetBSD/OpenBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.ip-portrange-low">IP_PORTRANGE_LOW</a></code></strong> (FreeBSD/NetBSD/OpenBSD only)
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.sock-nonblock">SOCK_NONBLOCK</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.sock-cloexec">SOCK_CLOEXEC</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sockets.constants.php#constant.so-bindtoifindex">SO_BINDTOIFINDEX</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.sodium">
  <h3 class="title">Sodium</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-keybytes">SODIUM_CRYPTO_AEAD_AEGIS128L_KEYBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-nsecbytes">SODIUM_CRYPTO_AEAD_AEGIS128L_NSECBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-npubbytes">SODIUM_CRYPTO_AEAD_AEGIS128L_NPUBBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-abytes">SODIUM_CRYPTO_AEAD_AEGIS128L_ABYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-keybytes">SODIUM_CRYPTO_AEAD_AEGIS256_KEYBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-nsecbytes">SODIUM_CRYPTO_AEAD_AEGIS256_NSECBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-npubbytes">SODIUM_CRYPTO_AEAD_AEGIS256_NPUBBYTES</a></code></strong>
   </li>
   <li>
    <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-abytes">SODIUM_CRYPTO_AEAD_AEGIS256_ABYTES</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.tokenizer">
  <h3 class="title">Tokenizer</h3>
  <ul class="simplelist">
   <li>
    <strong><code><a href="tokens.php#constant.t-public-set">T_PUBLIC_SET</a></code></strong>
   </li>
   <li>
    <strong><code><a href="tokens.php#constant.t-protected-set">T_PROTECTED_SET</a></code></strong>
   </li>
   <li>
    <strong><code><a href="tokens.php#constant.t-private-set">T_PRIVATE_SET</a></code></strong>
   </li>
  </ul>
 </div>

 <div class="sect2" id="migration84.constants.xml">
  <h3 class="title">XML</h3>

  <ul class="simplelist">
   <li>
    <strong><code><a href="xml.constants.php#constant.xml-option-parse-huge">XML_OPTION_PARSE_HUGE</a></code></strong>
     which allows parsing large inputs with
     <span class="function"><a href="function.xml-parse.php" class="function">xml_parse()</a></span> and
     <span class="function"><a href="function.xml-parse-into-struct.php" class="function">xml_parse_into_struct()</a></span>.
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
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration84/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration84.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration84.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration84.php">Migrating from PHP 8.3.x to PHP 8.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration84.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-classes.php" title="New Classes, Enums, and Interfaces">New Classes, Enums, and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="current">
                            <a href="migration84.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration84.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.windows-support.php" title="Windows Support">Windows Support</a>
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
