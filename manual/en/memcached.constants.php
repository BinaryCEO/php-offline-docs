<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcached.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcached.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcached.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.memcached.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcached.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/memcached.expiration.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcached.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcached.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcached.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcached.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcached.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcached.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcached.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcached.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcached.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcached.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcached.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="memcached.expiration.php">
          Expiration Times &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcached.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcached.php'>Memcached</a></li>      </ul>
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
            <option value='en/memcached.constants.php' selected="selected">English</option>
            <option value='de/memcached.constants.php'>German</option>
            <option value='es/memcached.constants.php'>Spanish</option>
            <option value='fr/memcached.constants.php'>French</option>
            <option value='it/memcached.constants.php'>Italian</option>
            <option value='ja/memcached.constants.php'>Japanese</option>
            <option value='pt_BR/memcached.constants.php'>Brazilian Portuguese</option>
            <option value='ru/memcached.constants.php'>Russian</option>
            <option value='tr/memcached.constants.php'>Turkish</option>
            <option value='uk/memcached.constants.php'>Ukrainian</option>
            <option value='zh/memcached.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcached.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>

  
   <dt id="memcached.constants.opt-compression"><strong><code><a href="memcached.constants.php#memcached.constants.opt-compression">Memcached::OPT_COMPRESSION</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables or disables payload compression. When enabled,
     item values longer than a certain threshold (currently 2000 bytes) will be
     compressed during storage and decompressed during retrieval
     transparently. The threshold can be configured using the
     <a href="memcached.configuration.php#ini.memcached.compression-threshold" class="link">memcached.compression_threshold</a>
     ini setting.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-compression-type"><strong><code><a href="memcached.constants.php#memcached.constants.opt-compression-type">Memcached::OPT_COMPRESSION_TYPE</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the compression algorithm to use, if compression is enabled.
     The valid algorithms are <strong><code><a href="memcached.constants.php#memcached.constants.compression-fastlz">Memcached::COMPRESSION_FASTLZ</a></code></strong>,
     <strong><code><a href="memcached.constants.php#memcached.constants.compression-zlib">Memcached::COMPRESSION_ZLIB</a></code></strong> and
     <strong><code><a href="memcached.constants.php#memcached.constants.compression-zstd">Memcached::COMPRESSION_ZSTD</a></code></strong>.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <strong><code><a href="memcached.constants.php#memcached.constants.compression-fastlz">Memcached::COMPRESSION_FASTLZ</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.compression-fastlz"><strong><code><a href="memcached.constants.php#memcached.constants.compression-fastlz">Memcached::COMPRESSION_FASTLZ</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The FASTLZ compression algorithm.
    </span>
   </dd>
  

  
   <dt id="memcached.constants.compression-zlib"><strong><code><a href="memcached.constants.php#memcached.constants.compression-zlib">Memcached::COMPRESSION_ZLIB</a></code></strong></dt>
   <dd>
    <span class="simpara">The ZLIB compression algorithm.</span>
   </dd>
  

  
   <dt id="memcached.constants.compression-zstd"><strong><code><a href="memcached.constants.php#memcached.constants.compression-zstd">Memcached::COMPRESSION_ZSTD</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The ZSTD compression algorithm.
    </span>
    <span class="simpara">
     Available as of Memcached 3.3.0.
    </span>
   </dd>
  

  
   <dt id="memcached.constants.opt-compression-level"><strong><code><a href="memcached.constants.php#memcached.constants.opt-compression-level">Memcached::OPT_COMPRESSION_LEVEL</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the compression level to use, if compression is enabled.
    </span>
    <ul class="simplelist">
     <li><strong><code><a href="memcached.constants.php#memcached.constants.compression-fastlz">Memcached::COMPRESSION_FASTLZ</a></code></strong> does not support compression levels.</li>
     <li><strong><code><a href="memcached.constants.php#memcached.constants.compression-zstd">Memcached::COMPRESSION_ZSTD</a></code></strong>: minimum level is <code class="literal">-22</code> and maximum level is <code class="literal">22</code>.</li>
     <li><strong><code><a href="memcached.constants.php#memcached.constants.compression-zlib">Memcached::COMPRESSION_ZLIB</a></code></strong>: minimum level is <code class="literal">0</code> and maximum level is <code class="literal">9</code>.</li>
    </ul>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">3</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-serializer"><strong><code><a href="memcached.constants.php#memcached.constants.opt-serializer">Memcached::OPT_SERIALIZER</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the serializer to use for serializing non-scalar values.
     The valid serializers are <strong><code><a href="memcached.constants.php#memcached.constants.serializer-php">Memcached::SERIALIZER_PHP</a></code></strong>,
     <strong><code><a href="memcached.constants.php#memcached.constants.serializer-igbinary">Memcached::SERIALIZER_IGBINARY</a></code></strong>,
     <strong><code><a href="memcached.constants.php#memcached.constants.serializer-json">Memcached::SERIALIZER_JSON</a></code></strong>,
     <strong><code><a href="memcached.constants.php#memcached.constants.serializer-json-array">Memcached::SERIALIZER_JSON_ARRAY</a></code></strong> and
     <strong><code><a href="memcached.constants.php#memcached.constants.serializer-msgpack">Memcached::SERIALIZER_MSGPACK</a></code></strong>.
    </span>
    <p class="para">
     Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <strong><code><a href="memcached.constants.php#memcached.constants.serializer-igbinary">Memcached::SERIALIZER_IGBINARY</a></code></strong> if available,
     then <strong><code><a href="memcached.constants.php#memcached.constants.serializer-msgpack">Memcached::SERIALIZER_MSGPACK</a></code></strong> if available,
     then <strong><code><a href="memcached.constants.php#memcached.constants.serializer-php">Memcached::SERIALIZER_PHP</a></code></strong>.
    </p>
   </dd>
  

  
   <dt id="memcached.constants.serializer-php"><strong><code><a href="memcached.constants.php#memcached.constants.serializer-php">Memcached::SERIALIZER_PHP</a></code></strong></dt>
   <dd>
    <p class="para">The default PHP serializer.</p>
   </dd>
  

  
   <dt id="memcached.constants.serializer-igbinary"><strong><code><a href="memcached.constants.php#memcached.constants.serializer-igbinary">Memcached::SERIALIZER_IGBINARY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The <a href="book.igbinary.php" class="link">igbinary</a> serializer.
     Instead of textual representation it stores PHP data structures in a
     compact binary form, resulting in space and time gains.
    </span>
    <span class="simpara">
     This serializer is supported only if memcached is configured with
     <strong class="option unknown">--enable-memcached-igbinary</strong> option and the
     <a href="intro.igbinary.php" class="link">igbinary</a> extension is loaded.
    </span>
   </dd>
  

  
   <dt id="memcached.constants.serializer-json"><strong><code><a href="memcached.constants.php#memcached.constants.serializer-json">Memcached::SERIALIZER_JSON</a></code></strong></dt>
   <dd>
    <p class="para">The JSON serializer. This serializer deserializes JSON to an object.</p>
   </dd>
  

  
   <dt id="memcached.constants.serializer-json-array"><strong><code><a href="memcached.constants.php#memcached.constants.serializer-json-array">Memcached::SERIALIZER_JSON_ARRAY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The JSON array serializer.
     This serializer deserializes JSON to an associative array
    </span>
   </dd>
  

  
   <dt id="memcached.constants.serializer-msgpack"><strong><code><a href="memcached.constants.php#memcached.constants.serializer-msgpack">Memcached::SERIALIZER_MSGPACK</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The <a href="https://pecl.php.net/package/msgpack" class="link external">&raquo;&nbsp;MessagePack</a> serializer.
    </span>
    <span class="simpara">
     This serializer is supported only if memcached is configured with
     <strong class="option unknown">--enable-memcached-msgpack</strong> option and the
     <code class="literal">msgpack</code> extension is loaded.
    </span>
   </dd>
  

  
   <dt id="memcached.constants.opt-prefix-key"><strong><code><a href="memcached.constants.php#memcached.constants.opt-prefix-key">Memcached::OPT_PREFIX_KEY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     This can be used to create a &quot;domain&quot; for your item keys. The value
     specified here will be prefixed to each of the keys. It cannot be
     longer than <code class="literal">128</code> characters and will reduce the
     maximum available key size. The prefix is applied only to the item keys,
     not to the server keys.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.string.php" class="type string">string</a></span>, default: <code class="literal">&quot;&quot;</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-hash"><strong><code><a href="memcached.constants.php#memcached.constants.opt-hash">Memcached::OPT_HASH</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the hashing algorithm used for the item keys. The valid
     values are supplied via <strong><code><a href="memcached.constants.php#memcached.constants.hash-default">Memcached::HASH_<span class="replaceable">*</span></a></code></strong> constants.
     Each hash algorithm has its advantages and its disadvantages. Go with the
     default if you don&#039;t know or don&#039;t care.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <strong><code><a href="memcached.constants.php#memcached.constants.hash-default">Memcached::HASH_DEFAULT</a></code></strong></p>
   </dd>
  

  
   <dt id="memcached.constants.hash-default"><strong><code><a href="memcached.constants.php#memcached.constants.hash-default">Memcached::HASH_DEFAULT</a></code></strong></dt>
   <dd>
    <p class="para">The default (Jenkins one-at-a-time) item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-md5"><strong><code><a href="memcached.constants.php#memcached.constants.hash-md5">Memcached::HASH_MD5</a></code></strong></dt>
   <dd>
    <p class="para">MD5 item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-crc"><strong><code><a href="memcached.constants.php#memcached.constants.hash-crc">Memcached::HASH_CRC</a></code></strong></dt>
   <dd>
    <p class="para">CRC item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-fnv1-64"><strong><code><a href="memcached.constants.php#memcached.constants.hash-fnv1-64">Memcached::HASH_FNV1_64</a></code></strong></dt>
   <dd>
    <p class="para">FNV1_64 item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-fnv1a-64"><strong><code><a href="memcached.constants.php#memcached.constants.hash-fnv1a-64">Memcached::HASH_FNV1A_64</a></code></strong></dt>
   <dd>
    <p class="para">FNV1_64A item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-fnv1-32"><strong><code><a href="memcached.constants.php#memcached.constants.hash-fnv1-32">Memcached::HASH_FNV1_32</a></code></strong></dt>
   <dd>
    <p class="para">FNV1_32 item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-fnv1a-32"><strong><code><a href="memcached.constants.php#memcached.constants.hash-fnv1a-32">Memcached::HASH_FNV1A_32</a></code></strong></dt>
   <dd>
    <p class="para">FNV1_32A item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-hsieh"><strong><code><a href="memcached.constants.php#memcached.constants.hash-hsieh">Memcached::HASH_HSIEH</a></code></strong></dt>
   <dd>
    <p class="para">Hsieh item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.hash-murmur"><strong><code><a href="memcached.constants.php#memcached.constants.hash-murmur">Memcached::HASH_MURMUR</a></code></strong></dt>
   <dd>
    <p class="para">Murmur item key hashing algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-distribution"><strong><code><a href="memcached.constants.php#memcached.constants.opt-distribution">Memcached::OPT_DISTRIBUTION</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the method of distributing item keys to the servers.
     Currently supported methods are modulo and consistent hashing. Consistent
     hashing delivers better distribution and allows servers to be added to
     the cluster with minimal cache losses.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <strong><code><a href="memcached.constants.php#memcached.constants.distribution-modula">Memcached::DISTRIBUTION_MODULA</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.distribution-modula"><strong><code><a href="memcached.constants.php#memcached.constants.distribution-modula">Memcached::DISTRIBUTION_MODULA</a></code></strong></dt>
   <dd>
    <p class="para">Modulo-based key distribution algorithm.</p>
   </dd>
  

  
   <dt id="memcached.constants.distribution-consistent"><strong><code><a href="memcached.constants.php#memcached.constants.distribution-consistent">Memcached::DISTRIBUTION_CONSISTENT</a></code></strong></dt>
   <dd>
    <p class="para">Consistent hashing key distribution algorithm (based on libketama).</p>
   </dd>
  

  
   <dt id="memcached.constants.distribution-virtual-bucket"><strong><code><a href="memcached.constants.php#memcached.constants.distribution-virtual-bucket">Memcached::DISTRIBUTION_VIRTUAL_BUCKET</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Virtual Bucket hashing key distribution algorithm (also called vbucket).
    </span>
   </dd>
  

  
   <dt id="memcached.constants.opt-libketama-compatible"><strong><code><a href="memcached.constants.php#memcached.constants.opt-libketama-compatible">Memcached::OPT_LIBKETAMA_COMPATIBLE</a></code></strong></dt>
   <dd>
    <p class="para">
     Enables or disables compatibility with libketama-like behavior. When
     enabled, the item key hashing algorithm is set to MD5 and distribution is
     set to be weighted consistent hashing distribution. This is useful
     because other libketama-based clients (Python, Ruby, etc.) with the same
     server configuration will be able to access the keys transparently.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      It is highly recommended to enable this option if you want to use
      consistent hashing, and it may be enabled by default in future
      releases.
     </p>
    </p></blockquote>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-libketama-hash"><strong><code><a href="memcached.constants.php#memcached.constants.opt-libketama-hash">Memcached::OPT_LIBKETAMA_HASH</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the hashing algorithm for host mapping.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-tcp-keepalive"><strong><code><a href="memcached.constants.php#memcached.constants.opt-tcp-keepalive">Memcached::OPT_TCP_KEEPALIVE</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables TCP keep alive.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-buffer-writes"><strong><code><a href="memcached.constants.php#memcached.constants.opt-buffer-writes">Memcached::OPT_BUFFER_WRITES</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables or disables buffered I/O. Enabling buffered I/O causes
     storage commands to &quot;buffer&quot; instead of being sent. Any action that
     retrieves data causes this buffer to be sent to the remote connection.
     Quitting the connection or closing down the connection will also cause
     the buffered data to be pushed to the remote connection.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-binary-protocol"><strong><code><a href="memcached.constants.php#memcached.constants.opt-binary-protocol">Memcached::OPT_BINARY_PROTOCOL</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enable the use of the binary protocol. Please note that you cannot
     toggle this option on an open connection.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-no-block"><strong><code><a href="memcached.constants.php#memcached.constants.opt-no-block">Memcached::OPT_NO_BLOCK</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables or disables asynchronous I/O. This is the fastest transport
     available for storage functions.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-noreply"><strong><code><a href="memcached.constants.php#memcached.constants.opt-noreply">Memcached::OPT_NOREPLY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables or disables ignoring the result of storage commands
     (set, add, replace, append, prepend, delete, increment, decrement, etc.).
     Storage commands will be sent without spending time waiting for a reply
     (there would be no reply).
     Retrieval commands such as <span class="methodname"><a href="memcached.get.php" class="methodname">Memcached::get()</a></span> are unaffected by this setting.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-tcp-nodelay"><strong><code><a href="memcached.constants.php#memcached.constants.opt-tcp-nodelay">Memcached::OPT_TCP_NODELAY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables or disables the no-delay feature for connecting sockets (may
     be faster in some environments).
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-socket-send-size"><strong><code><a href="memcached.constants.php#memcached.constants.opt-socket-send-size">Memcached::OPT_SOCKET_SEND_SIZE</a></code></strong></dt>
   <dd>
    <span class="simpara">The maximum socket send buffer in bytes.</span>
    <p class="para">
     Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: varies by platform/kernel
     configuration.
    </p>
   </dd>
  

  
   <dt id="memcached.constants.opt-socket-recv-size"><strong><code><a href="memcached.constants.php#memcached.constants.opt-socket-recv-size">Memcached::OPT_SOCKET_RECV_SIZE</a></code></strong></dt>
   <dd>
    <span class="simpara">The maximum socket receive buffer in bytes.</span>
    <p class="para">
     Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: varies by platform/kernel
     configuration.
    </p>
   </dd>
  

  
   <dt id="memcached.constants.opt-connect-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-connect-timeout">Memcached::OPT_CONNECT_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     In non-blocking mode this set the value of the timeout during socket
     connection, in milliseconds.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">1000</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-retry-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-retry-timeout">Memcached::OPT_RETRY_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The amount of time, in seconds, to wait until retrying a failed
     connection attempt.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">2</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-dead-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-dead-timeout">Memcached::OPT_DEAD_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     The amount of time, in seconds, to wait until retrying dead servers.
     <code class="literal">0</code> means no retry.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">0</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-send-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-send-timeout">Memcached::OPT_SEND_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Socket sending timeout, in microseconds. In cases where you cannot
     use non-blocking I/O this will allow you to still have timeouts on the
     sending of data.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">0</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-recv-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-recv-timeout">Memcached::OPT_RECV_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Socket reading timeout, in microseconds. In cases where you cannot
     use non-blocking I/O this will allow you to still have timeouts on the
     reading of data.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">0</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-poll-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.opt-poll-timeout">Memcached::OPT_POLL_TIMEOUT</a></code></strong></dt>
   <dd>
    <span class="simpara">Timeout for connection polling, in milliseconds.</span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">1000</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-cache-lookups"><strong><code><a href="memcached.constants.php#memcached.constants.opt-cache-lookups">Memcached::OPT_CACHE_LOOKUPS</a></code></strong></dt>
   <dd>
    <span class="simpara">Enables or disables caching of DNS lookups.</span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-server-failure-limit"><strong><code><a href="memcached.constants.php#memcached.constants.opt-server-failure-limit">Memcached::OPT_SERVER_FAILURE_LIMIT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the failure limit for server connection attempts.
     The server will be removed after this many continuous connection failures.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">5</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-server-timeout-limit"><strong><code><a href="memcached.constants.php#memcached.constants.opt-server-timeout-limit">Memcached::OPT_SERVER_TIMEOUT_LIMIT</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Specifies the timeout limit for server connection attempts.
     The server will be removed after this many continuous connection timeouts.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">0</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-auto-eject-hosts"><strong><code><a href="memcached.constants.php#memcached.constants.opt-auto-eject-hosts">Memcached::OPT_AUTO_EJECT_HOSTS</a></code></strong></dt>
   <dd>
    <p class="para">
     Removes disabled servers from the list. Use together with
     <strong><code><a href="memcached.constants.php#memcached.constants.opt-server-failure-limit">Memcached::OPT_SERVER_FAILURE_LIMIT</a></code></strong> and
     <strong><code><a href="memcached.constants.php#memcached.constants.opt-server-timeout-limit">Memcached::OPT_SERVER_TIMEOUT_LIMIT</a></code></strong>.
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This option is replaced by
      <strong><code><a href="memcached.constants.php#memcached.constants.opt-remove-failed-servers">Memcached::OPT_REMOVE_FAILED_SERVERS</a></code></strong>.
     </p>
    </p></blockquote>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-verify-key"><strong><code><a href="memcached.constants.php#memcached.constants.opt-verify-key">Memcached::OPT_VERIFY_KEY</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Enables verification of keys by memcached.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-use-udp"><strong><code><a href="memcached.constants.php#memcached.constants.opt-use-udp">Memcached::OPT_USE_UDP</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Uses UDP instead of TCP.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-number-of-replicas"><strong><code><a href="memcached.constants.php#memcached.constants.opt-number-of-replicas">Memcached::OPT_NUMBER_OF_REPLICAS</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Stores this many replicas of each item on different servers.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, default: <code class="literal">0</code>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-randomize-replica-reads"><strong><code><a href="memcached.constants.php#memcached.constants.opt-randomize-replica-reads">Memcached::OPT_RANDOMIZE_REPLICA_READS</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Randomizes replica read server.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.opt-remove-failed-servers"><strong><code><a href="memcached.constants.php#memcached.constants.opt-remove-failed-servers">Memcached::OPT_REMOVE_FAILED_SERVERS</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Removes disabled servers from the list. Use together with
     <strong><code><a href="memcached.constants.php#memcached.constants.opt-server-failure-limit">Memcached::OPT_SERVER_FAILURE_LIMIT</a></code></strong> and
     <strong><code><a href="memcached.constants.php#memcached.constants.opt-server-timeout-limit">Memcached::OPT_SERVER_TIMEOUT_LIMIT</a></code></strong>.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>, default: <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-igbinary"><strong><code><a href="memcached.constants.php#memcached.constants.have-igbinary">Memcached::HAVE_IGBINARY</a></code></strong></dt>
   <dd>
    <span class="simpara">Indicates whether igbinary serializer support is available.</span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-json"><strong><code><a href="memcached.constants.php#memcached.constants.have-json">Memcached::HAVE_JSON</a></code></strong></dt>
   <dd>
    <span class="simpara">Indicates whether JSON serializer support is available.</span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-msgpack"><strong><code><a href="memcached.constants.php#memcached.constants.have-msgpack">Memcached::HAVE_MSGPACK</a></code></strong></dt>
   <dd>
    <span class="simpara">Indicates whether MessagePack serializer support is available.</span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-zstd"><strong><code><a href="memcached.constants.php#memcached.constants.have-zstd">Memcached::HAVE_ZSTD</a></code></strong></dt>
   <dd>
    <span class="simpara">Indicates whether ZSTD compression support is available.</span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
    <p class="para">Available as of Memcached 3.3.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-encoding"><strong><code><a href="memcached.constants.php#memcached.constants.have-encoding">Memcached::HAVE_ENCODING</a></code></strong></dt>
   <dd>
    <span class="simpara">
     Indicates whether data encryption using
     <span class="methodname"><a href="memcached.setencodingkey.php" class="methodname">Memcached::setEncodingKey()</a></span> is supported.
    </span>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
    <p class="para">Available as of Memcached 3.1.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-session"><strong><code><a href="memcached.constants.php#memcached.constants.have-session">Memcached::HAVE_SESSION</a></code></strong></dt>
   <dd>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.have-sasl"><strong><code><a href="memcached.constants.php#memcached.constants.have-sasl">Memcached::HAVE_SASL</a></code></strong></dt>
   <dd>
    <p class="para">Type: <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.</p>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.get-extended"><strong><code><a href="memcached.constants.php#memcached.constants.get-extended">Memcached::GET_EXTENDED</a></code></strong></dt>
   <dd>
    <p class="para">
     A flag for <span class="methodname"><a href="memcached.get.php" class="methodname">Memcached::get()</a></span>, <span class="methodname"><a href="memcached.getmulti.php" class="methodname">Memcached::getMulti()</a></span> and
     <span class="methodname"><a href="memcached.getmultibykey.php" class="methodname">Memcached::getMultiByKey()</a></span> to ensure that the CAS token values
     are returned as well.
    </p>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.get-preserve-order"><strong><code><a href="memcached.constants.php#memcached.constants.get-preserve-order">Memcached::GET_PRESERVE_ORDER</a></code></strong></dt>
   <dd>
    <p class="para">
     A flag for <span class="methodname"><a href="memcached.getmulti.php" class="methodname">Memcached::getMulti()</a></span> and
     <span class="methodname"><a href="memcached.getmultibykey.php" class="methodname">Memcached::getMultiByKey()</a></span> to ensure that the keys are
     returned in the same order as they were requested in. Non-existing keys
     get a default value of <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
    </p>
   </dd>
  

  
   <dt id="memcached.constants.res-success"><strong><code><a href="memcached.constants.php#memcached.constants.res-success">Memcached::RES_SUCCESS</a></code></strong></dt>
   <dd>
    <p class="para">The operation was successful.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-failure">Memcached::RES_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">The operation failed in some fashion.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-host-lookup-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-host-lookup-failure">Memcached::RES_HOST_LOOKUP_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">DNS lookup failed.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-unknown-read-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-unknown-read-failure">Memcached::RES_UNKNOWN_READ_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Failed to read network data.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-protocol-error"><strong><code><a href="memcached.constants.php#memcached.constants.res-protocol-error">Memcached::RES_PROTOCOL_ERROR</a></code></strong></dt>
   <dd>
    <p class="para">Bad command in memcached protocol.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-client-error"><strong><code><a href="memcached.constants.php#memcached.constants.res-client-error">Memcached::RES_CLIENT_ERROR</a></code></strong></dt>
   <dd>
    <p class="para">Error on the client side.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-server-error"><strong><code><a href="memcached.constants.php#memcached.constants.res-server-error">Memcached::RES_SERVER_ERROR</a></code></strong></dt>
   <dd>
    <p class="para">Error on the server side.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-write-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-write-failure">Memcached::RES_WRITE_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Failed to write network data.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-data-exists"><strong><code><a href="memcached.constants.php#memcached.constants.res-data-exists">Memcached::RES_DATA_EXISTS</a></code></strong></dt>
   <dd>
    <p class="para">Failed to do compare-and-swap: item you are trying to store has been
     modified since you last fetched it.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-notstored"><strong><code><a href="memcached.constants.php#memcached.constants.res-notstored">Memcached::RES_NOTSTORED</a></code></strong></dt>
   <dd>
    <p class="para">
     Item was not stored: but not because of an error. This normally
     means that either the condition for an &quot;add&quot; or a &quot;replace&quot; command
     wasn&#039;t met, or that the item is in a delete queue.
    </p>
   </dd>
  

  
   <dt id="memcached.constants.res-notfound"><strong><code><a href="memcached.constants.php#memcached.constants.res-notfound">Memcached::RES_NOTFOUND</a></code></strong></dt>
   <dd>
    <p class="para">
     Item with this key was not found (with &quot;get&quot; operation or &quot;cas&quot;
     operations).
    </p>
   </dd>
  

  
   <dt id="memcached.constants.res-partial-read"><strong><code><a href="memcached.constants.php#memcached.constants.res-partial-read">Memcached::RES_PARTIAL_READ</a></code></strong></dt>
   <dd>
    <p class="para">Partial network data read error.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-some-errors"><strong><code><a href="memcached.constants.php#memcached.constants.res-some-errors">Memcached::RES_SOME_ERRORS</a></code></strong></dt>
   <dd>
    <p class="para">Some errors occurred during multi-get.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-no-servers"><strong><code><a href="memcached.constants.php#memcached.constants.res-no-servers">Memcached::RES_NO_SERVERS</a></code></strong></dt>
   <dd>
    <p class="para">Server list is empty.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-end"><strong><code><a href="memcached.constants.php#memcached.constants.res-end">Memcached::RES_END</a></code></strong></dt>
   <dd>
    <p class="para">End of result set.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-errno"><strong><code><a href="memcached.constants.php#memcached.constants.res-errno">Memcached::RES_ERRNO</a></code></strong></dt>
   <dd>
    <p class="para">System error.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-buffered"><strong><code><a href="memcached.constants.php#memcached.constants.res-buffered">Memcached::RES_BUFFERED</a></code></strong></dt>
   <dd>
    <p class="para">The operation was buffered.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-timeout"><strong><code><a href="memcached.constants.php#memcached.constants.res-timeout">Memcached::RES_TIMEOUT</a></code></strong></dt>
   <dd>
    <p class="para">The operation timed out.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-bad-key-provided"><strong><code><a href="memcached.constants.php#memcached.constants.res-bad-key-provided">Memcached::RES_BAD_KEY_PROVIDED</a></code></strong></dt>
   <dd>
    <p class="para">Bad key.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-stored"><strong><code><a href="memcached.constants.php#memcached.constants.res-stored">Memcached::RES_STORED</a></code></strong></dt>
   <dd>
    <span class="simpara">Item stored.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-deleted"><strong><code><a href="memcached.constants.php#memcached.constants.res-deleted">Memcached::RES_DELETED</a></code></strong></dt>
   <dd>
    <span class="simpara">Item deleted.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-stat"><strong><code><a href="memcached.constants.php#memcached.constants.res-stat">Memcached::RES_STAT</a></code></strong></dt>
   <dd>
    <span class="simpara">Statistics.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-item"><strong><code><a href="memcached.constants.php#memcached.constants.res-item">Memcached::RES_ITEM</a></code></strong></dt>
   <dd>
    <span class="simpara">Item.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-not-supported"><strong><code><a href="memcached.constants.php#memcached.constants.res-not-supported">Memcached::RES_NOT_SUPPORTED</a></code></strong></dt>
   <dd>
    <span class="simpara">Not supported.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-fetch-notfinished"><strong><code><a href="memcached.constants.php#memcached.constants.res-fetch-notfinished">Memcached::RES_FETCH_NOTFINISHED</a></code></strong></dt>
   <dd>
    <span class="simpara">Fetch not finished.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-server-marked-dead"><strong><code><a href="memcached.constants.php#memcached.constants.res-server-marked-dead">Memcached::RES_SERVER_MARKED_DEAD</a></code></strong></dt>
   <dd>
    <span class="simpara">Server marked dead.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-unknown-stat-key"><strong><code><a href="memcached.constants.php#memcached.constants.res-unknown-stat-key">Memcached::RES_UNKNOWN_STAT_KEY</a></code></strong></dt>
   <dd>
    <span class="simpara">Unknown stat key.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-invalid-host-protocol"><strong><code><a href="memcached.constants.php#memcached.constants.res-invalid-host-protocol">Memcached::RES_INVALID_HOST_PROTOCOL</a></code></strong></dt>
   <dd>
    <span class="simpara">Invalid host protocol.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-memory-allocation-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-memory-allocation-failure">Memcached::RES_MEMORY_ALLOCATION_FAILURE</a></code></strong></dt>
   <dd>
    <span class="simpara">Memory allocation failure.</span>
   </dd>
  

  
   <dt id="memcached.constants.res-connection-socket-create-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-connection-socket-create-failure">Memcached::RES_CONNECTION_SOCKET_CREATE_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Failed to create network socket.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-payload-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-payload-failure">Memcached::RES_PAYLOAD_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Payload failure: could not compress/decompress or serialize/unserialize the value.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-auth-problem"><strong><code><a href="memcached.constants.php#memcached.constants.res-auth-problem">Memcached::RES_AUTH_PROBLEM</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-auth-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-auth-failure">Memcached::RES_AUTH_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-auth-continue"><strong><code><a href="memcached.constants.php#memcached.constants.res-auth-continue">Memcached::RES_AUTH_CONTINUE</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-e2big"><strong><code><a href="memcached.constants.php#memcached.constants.res-e2big">Memcached::RES_E2BIG</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-key-too-big"><strong><code><a href="memcached.constants.php#memcached.constants.res-key-too-big">Memcached::RES_KEY_TOO_BIG</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-server-temporarily-disabled"><strong><code><a href="memcached.constants.php#memcached.constants.res-server-temporarily-disabled">Memcached::RES_SERVER_TEMPORARILY_DISABLED</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

  
   <dt id="memcached.constants.res-server-memory-allocation-failure"><strong><code><a href="memcached.constants.php#memcached.constants.res-server-memory-allocation-failure">Memcached::RES_SERVER_MEMORY_ALLOCATION_FAILURE</a></code></strong></dt>
   <dd>
    <p class="para">Available as of Memcached 3.0.0.</p>
   </dd>
  

 </dl>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcached/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcached.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcached.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="95793">  <div class="votes">
    <div id="Vu95793">
    <a href="/manual/vote-note.php?id=95793&amp;page=memcached.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95793">
    <a href="/manual/vote-note.php?id=95793&amp;page=memcached.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95793" title="66% like this...">
    10
    </div>
  </div>
  <a href="#95793" class="name">
  <strong class="user"><em>tyliu2 at gmail dot com</em></strong></a><a class="genanchor" href="#95793"> &para;</a><div class="date" title="2010-01-21 10:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95793">
<div class="phpcode"><code><span class="html">RES_SUCCESS = 0<br />RES_FAILURE = 1<br />RES_HOST_LOOKUP_FAILURE = 2<br />RES_UNKNOWN_READ_FAILURE = 7<br />RES_PROTOCOL_ERROR = 8<br />RES_CLIENT_ERROR = 9<br />RES_SERVER_ERROR = 10<br />RES_WRITE_FAILURE = 5<br />RES_DATA_EXISTS = 12<br />RES_NOTSTORED = 14<br />RES_NOTFOUND = 16<br />RES_PARTIAL_READ = 18<br />RES_SOME_ERRORS = 19<br />RES_NO_SERVERS = 20<br />RES_END = 21<br />RES_ERRNO = 26<br />RES_BUFFERED = 32<br />RES_TIMEOUT = 31<br />RES_BAD_KEY_PROVIDED = 33<br />RES_CONNECTION_SOCKET_CREATE_FAILURE = 11<br />RES_PAYLOAD_FAILURE = -1001</span></code></div>
  </div>
 </div>
  <div class="note" id="118557">  <div class="votes">
    <div id="Vu118557">
    <a href="/manual/vote-note.php?id=118557&amp;page=memcached.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118557">
    <a href="/manual/vote-note.php?id=118557&amp;page=memcached.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118557" title="77% like this...">
    5
    </div>
  </div>
  <a href="#118557" class="name">
  <strong class="user"><em>igorsantos07 no gmail</em></strong></a><a class="genanchor" href="#118557"> &para;</a><div class="date" title="2015-12-28 07:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118557">
<div class="phpcode"><code><span class="html">As per a StackOverflow answer (<a href="http://stackoverflow.com/a/9042985/102960," rel="nofollow" target="_blank">http://stackoverflow.com/a/9042985/102960,</a> by @rid), this is the current list of Memcached Response constants:<br /><br />00 = MEMCACHED_SUCCESS<br />01 = MEMCACHED_FAILURE<br />02 = MEMCACHED_HOST_LOOKUP_FAILURE // getaddrinfo() and getnameinfo() only<br />03 = MEMCACHED_CONNECTION_FAILURE<br />04 = MEMCACHED_CONNECTION_BIND_FAILURE // DEPRECATED see MEMCACHED_HOST_LOOKUP_FAILURE<br />05 = MEMCACHED_WRITE_FAILURE<br />06 = MEMCACHED_READ_FAILURE<br />07 = MEMCACHED_UNKNOWN_READ_FAILURE<br />08 = MEMCACHED_PROTOCOL_ERROR<br />09 = MEMCACHED_CLIENT_ERROR<br />10 = MEMCACHED_SERVER_ERROR // Server returns "SERVER_ERROR"<br />11 = MEMCACHED_ERROR // Server returns "ERROR"<br />12 = MEMCACHED_DATA_EXISTS<br />13 = MEMCACHED_DATA_DOES_NOT_EXIST<br />14 = MEMCACHED_NOTSTORED<br />15 = MEMCACHED_STORED<br />16 = MEMCACHED_NOTFOUND<br />17 = MEMCACHED_MEMORY_ALLOCATION_FAILURE<br />18 = MEMCACHED_PARTIAL_READ<br />19 = MEMCACHED_SOME_ERRORS<br />20 = MEMCACHED_NO_SERVERS<br />21 = MEMCACHED_END<br />22 = MEMCACHED_DELETED<br />23 = MEMCACHED_VALUE<br />24 = MEMCACHED_STAT<br />25 = MEMCACHED_ITEM<br />26 = MEMCACHED_ERRNO<br />27 = MEMCACHED_FAIL_UNIX_SOCKET // DEPRECATED<br />28 = MEMCACHED_NOT_SUPPORTED<br />29 = MEMCACHED_NO_KEY_PROVIDED /* Deprecated. Use MEMCACHED_BAD_KEY_PROVIDED! */<br />30 = MEMCACHED_FETCH_NOTFINISHED<br />31 = MEMCACHED_TIMEOUT<br />32 = MEMCACHED_BUFFERED<br />33 = MEMCACHED_BAD_KEY_PROVIDED<br />34 = MEMCACHED_INVALID_HOST_PROTOCOL<br />35 = MEMCACHED_SERVER_MARKED_DEAD<br />36 = MEMCACHED_UNKNOWN_STAT_KEY<br />37 = MEMCACHED_E2BIG<br />38 = MEMCACHED_INVALID_ARGUMENTS<br />39 = MEMCACHED_KEY_TOO_BIG<br />40 = MEMCACHED_AUTH_PROBLEM<br />41 = MEMCACHED_AUTH_FAILURE<br />42 = MEMCACHED_AUTH_CONTINUE<br />43 = MEMCACHED_PARSE_ERROR<br />44 = MEMCACHED_PARSE_USER_ERROR<br />45 = MEMCACHED_DEPRECATED<br />46 = MEMCACHED_IN_PROGRESS<br />47 = MEMCACHED_SERVER_TEMPORARILY_DISABLED<br />48 = MEMCACHED_SERVER_MEMORY_ALLOCATION_FAILURE<br />49 = MEMCACHED_MAXIMUM_RETURN /* Always add new error code before */<br />11 = MEMCACHED_CONNECTION_SOCKET_CREATE_FAILURE = MEMCACHED_ERROR</span></code></div>
  </div>
 </div>
  <div class="note" id="120700">  <div class="votes">
    <div id="Vu120700">
    <a href="/manual/vote-note.php?id=120700&amp;page=memcached.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120700">
    <a href="/manual/vote-note.php?id=120700&amp;page=memcached.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120700" title="100% like this...">
    1
    </div>
  </div>
  <a href="#120700" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120700"> &para;</a><div class="date" title="2017-02-24 12:06"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120700">
<div class="phpcode"><code><span class="html">Note that with Memcached::OPT_BINARY_PROTOCOL enabled there is some (possibly significant) size overhead added at the TCP level.<br /><br />If you have a high volume of small values being get/set, you should analyze the effect of this option on your overall traffic size with a network tool (e.g. tcpdump) before enabling it, especially if you pay for traffic in/out of your memcache instance.</span></code></div>
  </div>
 </div>
  <div class="note" id="101601">  <div class="votes">
    <div id="Vu101601">
    <a href="/manual/vote-note.php?id=101601&amp;page=memcached.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101601">
    <a href="/manual/vote-note.php?id=101601&amp;page=memcached.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101601" title="100% like this...">
    1
    </div>
  </div>
  <a href="#101601" class="name">
  <strong class="user"><em>akenney at onesite dot com</em></strong></a><a class="genanchor" href="#101601"> &para;</a><div class="date" title="2010-12-29 08:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101601">
<div class="phpcode"><code><span class="html">Apparently there is a bug in libmemcached where connect timeout does not work when OPT_NO_BLOCK is set as well.<br /><br />The bug and related blocking bugs are discussed here:<br /><a href="https://bugs.launchpad.net/libmemcached/+bug/583031" rel="nofollow" target="_blank">https://bugs.launchpad.net/libmemcached/+bug/583031</a><br /><br />We confirmed this in libmemcached version 0.43 <br /><br />Be sure to test some memcache servers in your pool being unavailable (no route to host and memcache service down) to ensure that timeout settings are working correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="104120">  <div class="votes">
    <div id="Vu104120">
    <a href="/manual/vote-note.php?id=104120&amp;page=memcached.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104120">
    <a href="/manual/vote-note.php?id=104120&amp;page=memcached.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104120" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104120" class="name">
  <strong class="user"><em>Allen Tsai</em></strong></a><a class="genanchor" href="#104120"> &para;</a><div class="date" title="2011-05-24 03:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104120">
<div class="phpcode"><code><span class="html">Memcached::OPT_SERVER_FAILURE_LIMIT - once a server has hit this limit, the client's getResultMessage() will return "SERVER IS MARKED DEAD."  Further gets() for keys hashing to this server will continue returning this message, as will sets() hashing to the dead server.<br /><br />Version 2.0.01b supports a constant Memcached::OPT_AUTO_EJECT_HOSTS which allows automatic rebalancing of the cluster/automatic failover handling.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcached.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcached.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.memcached.php">Memcached</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.memcached.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="memcached.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="memcached.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="memcached.expiration.php" title="Expiration Times">Expiration Times</a>
                        </li>
                                                <li class="">
                            <a href="memcached.callbacks.php" title="Callbacks">Callbacks</a>
                        </li>
                                                <li class="">
                            <a href="memcached.sessions.php" title="Sessions support">Sessions support</a>
                        </li>
                                                <li class="">
                            <a href="class.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="class.memcachedexception.php" title="MemcachedException">MemcachedException</a>
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
