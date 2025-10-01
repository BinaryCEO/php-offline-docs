<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: OpenSSL changes in PHP 5.6.x - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration56.openssl.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration56.openssl.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration56.openssl.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration56.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration56.new-functions.php">
 <link rel="next" href="https://www.php.net/manual/en/migration56.extensions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration56.openssl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration56.openssl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration56.openssl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration56.openssl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration56.openssl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration56.openssl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration56.openssl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration56.openssl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration56.openssl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration56.openssl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration56.openssl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="OpenSSL changes in PHP 5.6.x" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: OpenSSL changes in PHP 5.6.x - Manual" />
<meta name="twitter:description" content="OpenSSL changes in PHP 5.6.x" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: OpenSSL changes in PHP 5.6.x - Manual" />
<meta itemprop="description" content="OpenSSL changes in PHP 5.6.x" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="OpenSSL changes in PHP 5.6.x" />

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
        <a href="migration56.extensions.php">
          Other changes to extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration56.new-functions.php">
          &laquo; New functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration56.php'>Migrating from PHP 5.5.x to PHP 5.6.x</a></li>      </ul>
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
            <option value='en/migration56.openssl.php' selected="selected">English</option>
            <option value='de/migration56.openssl.php'>German</option>
            <option value='es/migration56.openssl.php'>Spanish</option>
            <option value='fr/migration56.openssl.php'>French</option>
            <option value='it/migration56.openssl.php'>Italian</option>
            <option value='ja/migration56.openssl.php'>Japanese</option>
            <option value='pt_BR/migration56.openssl.php'>Brazilian Portuguese</option>
            <option value='ru/migration56.openssl.php'>Russian</option>
            <option value='tr/migration56.openssl.php'>Turkish</option>
            <option value='uk/migration56.openssl.php'>Ukrainian</option>
            <option value='zh/migration56.openssl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration56.openssl" class="sect1">
 <h2 class="title">OpenSSL changes in PHP 5.6.x</h2>

 <div class="sect2" id="migration56.openssl.peer-verification">
  <h3 class="title">Stream wrappers now verify peer certificates and host names by default when using SSL/TLS</h3>

  
   <p class="para">
    All encrypted client streams now enable peer verification by default. By
    default, this will use OpenSSL&#039;s default CA bundle to verify the peer
    certificate. In most cases, no changes will need to be made to communicate
    with servers with valid SSL certificates, as distributors generally
    configure OpenSSL to use known good CA bundles.
   </p>

   <p class="para">
    The default CA bundle may be overridden on a global basis by setting
    either the openssl.cafile or openssl.capath configuration setting, or on a
    per request basis by using the
    <a href="context.ssl.php#context.ssl.cafile" class="link"><code class="parameter">cafile</code></a> or
    <a href="context.ssl.php#context.ssl.capath" class="link"><code class="parameter">capath</code></a>
    context options.
   </p>

   <p class="para">
    While not recommended in general, it is possible to disable peer
    certificate verification for a request by setting the
    <a href="context.ssl.php#context.ssl.verify-peer" class="link"><code class="parameter">verify_peer</code></a>
    context option to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, and to disable peer name validation by setting
    the <a href="context.ssl.php#context.ssl.verify-peer-name" class="link"><code class="parameter">verify_peer_name</code></a>
    context option to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   </p>

 </div>

 <div class="sect2" id="migration56.openssl.fingerprint">
  <h3 class="title">Certificate fingerprints</h3>

  <p class="para">
   Support has been added for extracting and verifying certificate
   fingerprints. <span class="function"><a href="function.openssl-x509-fingerprint.php" class="function">openssl_x509_fingerprint()</a></span> has been added
   to extract a fingerprint from an X.509 certificate, and two
   <a href="context.ssl.php" class="link">SSL stream context</a> options have been
   added: <code class="literal">capture_peer_cert</code> to capture the peer&#039;s X.509
   certificate, and <code class="literal">peer_fingerprint</code> to assert that the
   peer&#039;s certificate should match the given fingerprint.
  </p>
 </div>

 <div class="sect2" id="migration56.openssl.ciphers">
  <h3 class="title">Default ciphers updated</h3>

  <p class="para">
   The default ciphers used by PHP have been updated to a more secure list
   based on the
   <a href="https://wiki.mozilla.org/Security/Server_Side_TLS#Recommended_Ciphersuite" class="link external">&raquo;&nbsp;Mozilla cipher recommendations</a>,
   with two additional exclusions: anonymous Diffie-Hellman ciphers, and RC4.
  </p>

  <p class="para">
   This list can be accessed via the new
   <strong><code><a href="openssl.ciphers.php#constant.openssl-default-stream-ciphers">OPENSSL_DEFAULT_STREAM_CIPHERS</a></code></strong> constant, and can be
   overridden (as in previous PHP versions) by setting the
   <a href="context.ssl.php#context.ssl.ciphers" class="link"><code class="parameter">ciphers</code></a>
   context option.
  </p>
 </div>

 <div class="sect2" id="migration56.openssl.tls-compression">
  <h3 class="title">Compression disabled by default</h3>

  <p class="para">
   SSL/TLS compression has been disabled by default to mitigate the CRIME
   attack. PHP 5.4.13 added a
   <a href="context.ssl.php#context.ssl.disable-compression" class="link"><code class="parameter">disable_compression</code></a>
   context option to allow compression to be disabled: this is now set to
   <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> (that is, compression is disabled) by default.
  </p>
 </div>

 <div class="sect2" id="migration56.openssl.honor-cipher-order">
  <h3 class="title">Allow servers to prefer their cipher order</h3>

  <p class="para">
   The <code class="parameter">honor_cipher_order</code> SSL context option has been
   added to allow encrypted stream servers to mitigate BEAST vulnerabilities
   by preferring the server&#039;s ciphers to the client&#039;s.
  </p>
 </div>

 <div class="sect2" id="migration56.openssl.metadata">
  <h3 class="title">Access the negotiated protocol and cipher</h3>

  <p class="para">
   The protocol and cipher that were negotiated for an encrypted stream can
   now be accessed via <span class="function"><a href="function.stream-get-meta-data.php" class="function">stream_get_meta_data()</a></span> or
   <span class="function"><a href="function.stream-context-get-options.php" class="function">stream_context_get_options()</a></span> when the
   <code class="parameter">capture_session_meta</code> SSL context option is set to
   <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">([</span><span style="color: #DD0000">'ssl' </span><span style="color: #007700">=&gt; [<br />    </span><span style="color: #DD0000">'capture_session_meta' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">TRUE<br /></span><span style="color: #007700">]]);<br /> <br /></span><span style="color: #0000BB">$html </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'https://google.com/'</span><span style="color: #007700">, </span><span style="color: #0000BB">FALSE</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$meta </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_get_options</span><span style="color: #007700">(</span><span style="color: #0000BB">$ctx</span><span style="color: #007700">)[</span><span style="color: #DD0000">'ssl'</span><span style="color: #007700">][</span><span style="color: #DD0000">'session_meta'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$meta</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(4) {
  [&quot;protocol&quot;]=&gt;
  string(5) &quot;TLSv1&quot;
  [&quot;cipher_name&quot;]=&gt;
  string(20) &quot;ECDHE-RSA-AES128-SHA&quot;
  [&quot;cipher_bits&quot;]=&gt;
  int(128)
  [&quot;cipher_version&quot;]=&gt;
  string(11) &quot;TLSv1/SSLv3&quot;
}
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.openssl.forward-secrecy">
  <h3 class="title">New options for perfect forward secrecy in encrypted stream servers</h3>

  <p class="para">
   Encrypted client streams already support perfect forward secrecy, as it is
   generally controlled by the server. PHP encrypted server streams using
   certificates capable of perfect forward secrecy do not need to take any
   additional action to enable PFS; however a number of new SSL context options
   have been added to allow more control over PFS and deal with any
   compatibility issues that may arise. 
  </p>

  <dl>
   
    <dt><code class="parameter">ecdh_curve</code></dt>
    <dd>
     <p class="para">
      This option allows the selection of a specific curve for use with ECDH
      ciphers. If not specified, <code class="literal">prime256v1</code> will be used.
     </p>
    </dd>
   
   
    <dt><code class="parameter">dh_param</code></dt>
    <dd>
     <p class="para">
      A path to a file containing parametrs for Diffie-Hellman key exchange,
      such as that created by the following command:
     </p>
     <div class="example-contents">
<div class="shellcode"><pre class="shellcode">openssl dhparam -out /path/to/my/certs/dh-2048.pem 2048</pre>
</div>
     </div>

    </dd>
   
   
    <dt><code class="parameter">single_dh_use</code></dt>
    <dd>
     <p class="para">
      If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, a new key pair will be created when using
      Diffie-Hellman parameters, thereby improving forward secrecy.
     </p>
    </dd>
   
   
    <dt><code class="parameter">single_ecdh_use</code></dt>
    <dd>
     <p class="para">
      If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, a new key pair will always be generated when ECDH
      cipher suites are negotiated. This improves forward secrecy.
     </p>
    </dd>
   
  </dl>
 </div>

 <div class="sect2" id="migration56.openssl.crypto-method">
  <h3 class="title">SSL/TLS version selection</h3>

  <p class="para">
   It is now possible to select specific versions of SSL and TLS via the
   <code class="parameter">crypto_method</code> SSL context option or by specifying a
   specific transport when creating a stream wrapper (for example, by calling
   <span class="function"><a href="function.stream-socket-client.php" class="function">stream_socket_client()</a></span> or
   <span class="function"><a href="function.stream-socket-server.php" class="function">stream_socket_server()</a></span>).
  </p>

  <p class="para">
   The <code class="parameter">crypto_method</code> SSL context option accepts a
   bitmask enumerating the protocols that are permitted, as does the
   <code class="parameter">crypto_type</code> of
   <span class="function"><a href="function.stream-socket-enable-crypto.php" class="function">stream_socket_enable_crypto()</a></span>.
   
  </p>

  <table class="segmentedlist">
   <caption><strong>Selected protocol versions and corresponding options</strong></caption>
   <thead><tr><th>Protocol(s)</th>
   <th>Client flag</th>
   <th>Server flag</th>
   <th>Transport</th>
   </tr></thead><tbody><tr class="seglistitem">
    <td class="seg">Any TLS or SSL version</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-any-client">STREAM_CRYPTO_METHOD_ANY_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-any-server">STREAM_CRYPTO_METHOD_ANY_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">ssl://</code></td>
   </tr>
   <tr class="seglistitem">
    <td class="seg">Any TLS version</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tls-client">STREAM_CRYPTO_METHOD_TLS_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tls-server">STREAM_CRYPTO_METHOD_TLS_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">tls://</code></td>
   </tr>
   <tr class="seglistitem">
    <td class="seg">TLS 1.0</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-0-client">STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-0-server">STREAM_CRYPTO_METHOD_TLSv1_0_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">tlsv1.0://</code></td>
   </tr>
   <tr class="seglistitem">
    <td class="seg">TLS 1.1</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-1-client">STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-1-server">STREAM_CRYPTO_METHOD_TLSv1_1_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">tlsv1.1://</code></td>
   </tr>
   <tr class="seglistitem">
    <td class="seg">TLS 1.2</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-2-client">STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-tlsv1-2-server">STREAM_CRYPTO_METHOD_TLSv1_2_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">tlsv1.2://</code></td>
   </tr>
   <tr class="seglistitem">
    <td class="seg">SSL 3</td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv3-client">STREAM_CRYPTO_METHOD_SSLv3_CLIENT</a></code></strong></td>
    <td class="seg"><strong><code><a href="stream.constants.php#constant.stream-crypto-method-sslv3-server">STREAM_CRYPTO_METHOD_SSLv3_SERVER</a></code></strong></td>
    <td class="seg"><code class="literal">sslv3://</code></td>
   </tr>
  </tbody></table>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Requiring TLS 1.0 or better when using file_get_contents():<br /></span><span style="color: #0000BB">$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'ssl' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'crypto_method' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">STREAM_CRYPTO_METHOD_TLS_CLIENT</span><span style="color: #007700">,<br />    ],<br />]);<br /></span><span style="color: #0000BB">$html </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'https://google.com/'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Requiring TLS 1.1 or 1.2:<br /></span><span style="color: #0000BB">$ctx </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_context_create</span><span style="color: #007700">([<br />    </span><span style="color: #DD0000">'ssl' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'crypto_method' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT </span><span style="color: #007700">|<br />                           </span><span style="color: #0000BB">STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT</span><span style="color: #007700">,<br />    ],<br />]);<br /></span><span style="color: #0000BB">$html </span><span style="color: #007700">= </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'https://google.com/'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctx</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Connecting using the tlsv1.2:// stream socket transport.<br /></span><span style="color: #0000BB">$sock </span><span style="color: #007700">= </span><span style="color: #0000BB">stream_socket_client</span><span style="color: #007700">(</span><span style="color: #DD0000">'tlsv1.2://google.com:443/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>

 <div class="sect2" id="migration56.openssl.default-certificate-paths">
  <h3 class="title"><span class="function"><a href="function.openssl-get-cert-locations.php" class="function">openssl_get_cert_locations()</a></span> added</h3>

  <p class="para">
   The <span class="function"><a href="function.openssl-get-cert-locations.php" class="function">openssl_get_cert_locations()</a></span> function has been
   added: it returns the default locations PHP will search when looking for
   CA bundles.
  </p>

  <div class="informalexample">
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">openssl_get_cert_locations</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <p class="para">The above example will output:</p>
   <div class="example-contents screen">
<div class="cdata"><pre>
array(8) {
  [&quot;default_cert_file&quot;]=&gt;
  string(21) &quot;/etc/pki/tls/cert.pem&quot;
  [&quot;default_cert_file_env&quot;]=&gt;
  string(13) &quot;SSL_CERT_FILE&quot;
  [&quot;default_cert_dir&quot;]=&gt;
  string(18) &quot;/etc/pki/tls/certs&quot;
  [&quot;default_cert_dir_env&quot;]=&gt;
  string(12) &quot;SSL_CERT_DIR&quot;
  [&quot;default_private_dir&quot;]=&gt;
  string(20) &quot;/etc/pki/tls/private&quot;
  [&quot;default_default_cert_area&quot;]=&gt;
  string(12) &quot;/etc/pki/tls&quot;
  [&quot;ini_cafile&quot;]=&gt;
  string(0) &quot;&quot;
  [&quot;ini_capath&quot;]=&gt;
  string(0) &quot;&quot;
}
</pre></div>
   </div>
  </div>
 </div>

 <div class="sect2" id="migration56.openssl.spki">
  <h3 class="title">SPKI support</h3>

  <p class="para">
   Support has been added for generating, extracting and verifying signed
   public key and challenges (SPKAC). <span class="function"><a href="function.openssl-spki-new.php" class="function">openssl_spki_new()</a></span>,
   <span class="function"><a href="function.openssl-spki-verify.php" class="function">openssl_spki_verify()</a></span>,
   <span class="function"><a href="function.openssl-spki-export-challenge.php" class="function">openssl_spki_export_challenge()</a></span>, and
   <span class="function"><a href="function.openssl-spki-export.php" class="function">openssl_spki_export()</a></span> have been added to create, verify
   export <abbr title="Privacy-Enhanced Mail">PEM</abbr> public key and associated challenge from
   SPKAC&#039;s generated from a <code class="literal">KeyGen</code> HTML5 element.
  </p>

  <dl>
   
    <dt><code class="parameter">openssl_spki_new</code></dt>
    <dd>
     <p class="para">
      Generates a new SPKAC using private key, challenge string and hashing
      algorithm.
     </p>

     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pkey </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret passphrase'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$spkac </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_spki_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'challenge string'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <p class="para">The above example will output:</p>
      <div class="example-contents screen">
<div class="cdata"><pre>
SPKAC=MIIBXjCByDCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA3L0IfUijj7+A8CPC8EmhcdNoe5fUAog7OrBdhn7EkxFButUp40P7+LiYiygYG1TmoI/a5EgsLU3s9twEz3hmgY9mYIqb/rb+SF8qlD/K6KVyUORC7Wlz1Df4L8O3DuRGzx6/+3jIW6cPBpfgH1sVuYS1vDBsP/gMMIxwTsKJ4P0CAwEAARYkYjViMzYxMTktNjY5YS00ZDljLWEyYzctMGZjNGFhMjVlMmE2MA0GCSqGSIb3DQEBAwUAA4GBAF7hu0ifzmjonhAak2FhhBRsKFDzXdKIkrWxVNe8e0bZzMrWOxFM/rqBgeH3/gtOUDRS5Fnzyq425UsTYbjfiKzxGeCYCQJb1KJ2V5Ij/mIJHZr53WYEXHQTNMGR8RPm7IxwVXVSHIgAfXsXZ9IXNbFbcaLRiSTr9/N4U+MXUWL7
</pre></div>
      </div>
     </div>
    </dd>
   

   
    <dt><code class="parameter">openssl_spki_verify</code></dt>
    <dd>
     <p class="para">
      Verifies provided SPKAC.
     </p>

     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pkey </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret passphrase'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$spkac </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_spki_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'challenge string'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">openssl_spki_verify</span><span style="color: #007700">(</span><span style="color: #0000BB">$spkac</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </dd>
   

   
    <dt><code class="parameter">openssl_spki_export_challenge</code></dt>
    <dd>
     <p class="para">
      Exports associated challenge from provided SPKAC.
     </p>

     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pkey </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret passphrase'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$spkac </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_spki_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'challenge string'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$challenge </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_spki_export_challenge</span><span style="color: #007700">(</span><span style="color: #0000BB">$spkac</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$challenge</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <p class="para">The above example will output:</p>
      <div class="example-contents screen">
<div class="cdata"><pre>
challenge string
</pre></div>
      </div>
     </div>
    </dd>
   

   
    <dt><code class="parameter">openssl_spki_export</code></dt>
    <dd>
     <p class="para">
      Exports the <abbr title="Privacy-Enhanced Mail">PEM</abbr> formatted RSA public key from SPKAC.
     </p>

     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$pkey </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_pkey_new</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">openssl_pkey_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret passphrase'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$spkac </span><span style="color: #007700">= </span><span style="color: #0000BB">openssl_spki_new</span><span style="color: #007700">(</span><span style="color: #0000BB">$pkey</span><span style="color: #007700">, </span><span style="color: #DD0000">'challenge string'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">openssl_spki_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$spkac</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <p class="para">The above example will output:</p>
      <div class="example-contents screen">
<div class="cdata"><pre>
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDcvQh9SKOPv4DwI8LwSaFx02h7
l9QCiDs6sF2GfsSTEUG61SnjQ/v4uJiLKBgbVOagj9rkSCwtTez23ATPeGaBj2Zg
ipv+tv5IXyqUP8ropXJQ5ELtbXPUN/gvw7cO5EbPHr/7eMhbpw8Gl+AfWxW5hLW8
MGw/+AwwjHBOwong/QIDAQAB
-----END PUBLIC KEY-----
</pre></div>
      </div>
     </div>
    </dd>
   
  </dl>
 </div>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration56/openssl.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration56.openssl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration56.openssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration56.openssl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration56.php">Migrating from PHP 5.5.x to PHP 5.6.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration56.incompatible.php" title="Backward incompatible changes">Backward incompatible changes</a>
                        </li>
                                                <li class="">
                            <a href="migration56.new-features.php" title="New features">New features</a>
                        </li>
                                                <li class="">
                            <a href="migration56.deprecated.php" title="Deprecated features in PHP 5.6.x">Deprecated features in PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.changed-functions.php" title="Changed functions">Changed functions</a>
                        </li>
                                                <li class="">
                            <a href="migration56.new-functions.php" title="New functions">New functions</a>
                        </li>
                                                <li class="current">
                            <a href="migration56.openssl.php" title="OpenSSL changes in PHP 5.6.x">OpenSSL changes in PHP 5.6.x</a>
                        </li>
                                                <li class="">
                            <a href="migration56.extensions.php" title="Other changes to extensions">Other changes to extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration56.constants.php" title="New global constants">New global constants</a>
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
