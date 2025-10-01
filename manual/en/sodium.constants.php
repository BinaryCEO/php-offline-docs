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

 <link rel="canonical" href="https://www.php.net/manual/en/sodium.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/sodium.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/sodium.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.sodium.php">
 <link rel="prev" href="https://www.php.net/manual/en/sodium.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.sodium.php">

 <link rel="alternate" href="https://www.php.net/manual/en/sodium.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/sodium.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/sodium.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/sodium.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/sodium.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/sodium.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/sodium.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/sodium.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/sodium.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/sodium.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/sodium.constants.php" hreflang="zh">

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
        <a href="ref.sodium.php">
          Sodium Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="sodium.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.sodium.php'>Sodium</a></li>      </ul>
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
            <option value='en/sodium.constants.php' selected="selected">English</option>
            <option value='de/sodium.constants.php'>German</option>
            <option value='es/sodium.constants.php'>Spanish</option>
            <option value='fr/sodium.constants.php'>French</option>
            <option value='it/sodium.constants.php'>Italian</option>
            <option value='ja/sodium.constants.php'>Japanese</option>
            <option value='pt_BR/sodium.constants.php'>Brazilian Portuguese</option>
            <option value='ru/sodium.constants.php'>Russian</option>
            <option value='tr/sodium.constants.php'>Turkish</option>
            <option value='uk/sodium.constants.php'>Ukrainian</option>
            <option value='zh/sodium.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="sodium.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  <dl>
   
    <dt id="constant.sodium-library-version">
     <strong><code><a href="sodium.constants.php#constant.sodium-library-version">SODIUM_LIBRARY_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-library-major-version">
     <strong><code><a href="sodium.constants.php#constant.sodium-library-major-version">SODIUM_LIBRARY_MAJOR_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-library-minor-version">
     <strong><code><a href="sodium.constants.php#constant.sodium-library-minor-version">SODIUM_LIBRARY_MINOR_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-base64-variant-original">
     <strong><code><a href="sodium.constants.php#constant.sodium-base64-variant-original">SODIUM_BASE64_VARIANT_ORIGINAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-base64-variant-original-no-padding">
     <strong><code><a href="sodium.constants.php#constant.sodium-base64-variant-original-no-padding">SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-base64-variant-urlsafe">
     <strong><code><a href="sodium.constants.php#constant.sodium-base64-variant-urlsafe">SODIUM_BASE64_VARIANT_URLSAFE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-base64-variant-urlsafe-no-padding">
     <strong><code><a href="sodium.constants.php#constant.sodium-base64-variant-urlsafe-no-padding">SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis128l-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-keybytes">SODIUM_CRYPTO_AEAD_AEGIS128L_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis128l-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-nsecbytes">SODIUM_CRYPTO_AEAD_AEGIS128L_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis128l-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-npubbytes">SODIUM_CRYPTO_AEAD_AEGIS128L_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis128l-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis128l-abytes">SODIUM_CRYPTO_AEAD_AEGIS128L_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis256-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-keybytes">SODIUM_CRYPTO_AEAD_AEGIS256_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis256-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-nsecbytes">SODIUM_CRYPTO_AEAD_AEGIS256_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis256-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-npubbytes">SODIUM_CRYPTO_AEAD_AEGIS256_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aegis256-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aegis256-abytes">SODIUM_CRYPTO_AEAD_AEGIS256_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.4.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aes256gcm-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aes256gcm-keybytes">SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aes256gcm-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aes256gcm-nsecbytes">SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aes256gcm-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aes256gcm-npubbytes">SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-aes256gcm-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-aes256gcm-abytes">SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-keybytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-nsecbytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-npubbytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-abytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-ietf-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-ietf-keybytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-ietf-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-ietf-nsecbytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-ietf-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-ietf-npubbytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-chacha20poly1305-ietf-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-chacha20poly1305-ietf-abytes">SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-xchacha20poly1305-ietf-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-xchacha20poly1305-ietf-abytes">SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-xchacha20poly1305-ietf-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-xchacha20poly1305-ietf-keybytes">SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-xchacha20poly1305-ietf-npubbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-xchacha20poly1305-ietf-npubbytes">SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-aead-xchacha20poly1305-ietf-nsecbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-aead-xchacha20poly1305-ietf-nsecbytes">SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NSECBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-auth-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-auth-bytes">SODIUM_CRYPTO_AUTH_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-auth-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-auth-keybytes">SODIUM_CRYPTO_AUTH_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-sealbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-sealbytes">SODIUM_CRYPTO_BOX_SEALBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-secretkeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-secretkeybytes">SODIUM_CRYPTO_BOX_SECRETKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-publickeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-publickeybytes">SODIUM_CRYPTO_BOX_PUBLICKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-keypairbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-keypairbytes">SODIUM_CRYPTO_BOX_KEYPAIRBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-macbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-macbytes">SODIUM_CRYPTO_BOX_MACBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-noncebytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-noncebytes">SODIUM_CRYPTO_BOX_NONCEBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-box-seedbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-box-seedbytes">SODIUM_CRYPTO_BOX_SEEDBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kdf-bytes-min">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kdf-bytes-min">SODIUM_CRYPTO_KDF_BYTES_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kdf-bytes-max">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kdf-bytes-max">SODIUM_CRYPTO_KDF_BYTES_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kdf-contextbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kdf-contextbytes">SODIUM_CRYPTO_KDF_CONTEXTBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kdf-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kdf-keybytes">SODIUM_CRYPTO_KDF_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kx-seedbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kx-seedbytes">SODIUM_CRYPTO_KX_SEEDBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kx-sessionkeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kx-sessionkeybytes">SODIUM_CRYPTO_KX_SESSIONKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kx-publickeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kx-publickeybytes">SODIUM_CRYPTO_KX_PUBLICKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kx-secretkeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kx-secretkeybytes">SODIUM_CRYPTO_KX_SECRETKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-kx-keypairbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-kx-keypairbytes">SODIUM_CRYPTO_KX_KEYPAIRBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-bytes">SODIUM_CRYPTO_GENERICHASH_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-bytes-min">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-bytes-min">SODIUM_CRYPTO_GENERICHASH_BYTES_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-bytes-max">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-bytes-max">SODIUM_CRYPTO_GENERICHASH_BYTES_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-keybytes">SODIUM_CRYPTO_GENERICHASH_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-keybytes-min">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-keybytes-min">SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-generichash-keybytes-max">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-generichash-keybytes-max">SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-alg-argon2i13">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-alg-argon2i13">SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-alg-argon2id13">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-alg-argon2id13">SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-alg-default">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-alg-default">SODIUM_CRYPTO_PWHASH_ALG_DEFAULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-saltbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-saltbytes">SODIUM_CRYPTO_PWHASH_SALTBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-strprefix">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-strprefix">SODIUM_CRYPTO_PWHASH_STRPREFIX</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-opslimit-interactive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-interactive">SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-memlimit-interactive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-interactive">SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-opslimit-moderate">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-moderate">SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-memlimit-moderate">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-moderate">SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-opslimit-sensitive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-sensitive">SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-memlimit-sensitive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-sensitive">SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-saltbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-saltbytes">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-strprefix">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-strprefix">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-opslimit-interactive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-opslimit-interactive">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-memlimit-interactive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-memlimit-interactive">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-opslimit-sensitive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-opslimit-sensitive">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-pwhash-scryptsalsa208sha256-memlimit-sensitive">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-scryptsalsa208sha256-memlimit-sensitive">SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-core-ristretto255-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-bytes">SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-core-ristretto255-hashbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-hashbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-core-ristretto255-nonreducedscalarbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-nonreducedscalarbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-core-ristretto255-scalarbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-core-ristretto255-scalarbytes">SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-scalarmult-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-bytes">SODIUM_CRYPTO_SCALARMULT_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-scalarmult-scalarbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-scalarbytes">SODIUM_CRYPTO_SCALARMULT_SCALARBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-scalarmult-ristretto255-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-ristretto255-bytes">SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-scalarmult-ristretto255-scalarbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-scalarmult-ristretto255-scalarbytes">SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-shorthash-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-shorthash-bytes">SODIUM_CRYPTO_SHORTHASH_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-shorthash-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-shorthash-keybytes">SODIUM_CRYPTO_SHORTHASH_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretbox-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretbox-keybytes">SODIUM_CRYPTO_SECRETBOX_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretbox-macbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretbox-macbytes">SODIUM_CRYPTO_SECRETBOX_MACBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretbox-noncebytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretbox-noncebytes">SODIUM_CRYPTO_SECRETBOX_NONCEBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-abytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-abytes">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-headerbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-headerbytes">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_HEADERBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-keybytes">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-messagebytes-max">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-messagebytes-max">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-tag-final">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-tag-final">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-tag-message">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-tag-message">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-tag-push">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-tag-push">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-secretstream-xchacha20poly1305-tag-rekey">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-secretstream-xchacha20poly1305-tag-rekey">SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-sign-bytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-sign-bytes">SODIUM_CRYPTO_SIGN_BYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-sign-seedbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-sign-seedbytes">SODIUM_CRYPTO_SIGN_SEEDBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-sign-publickeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-sign-publickeybytes">SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-sign-secretkeybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-sign-secretkeybytes">SODIUM_CRYPTO_SIGN_SECRETKEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-sign-keypairbytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-sign-keypairbytes">SODIUM_CRYPTO_SIGN_KEYPAIRBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-stream-noncebytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-noncebytes">SODIUM_CRYPTO_STREAM_NONCEBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-stream-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-keybytes">SODIUM_CRYPTO_STREAM_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-stream-xchacha20-keybytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-xchacha20-keybytes">SODIUM_CRYPTO_STREAM_XCHACHA20_KEYBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
   
    <dt id="constant.sodium-crypto-stream-xchacha20-noncebytes">
     <strong><code><a href="sodium.constants.php#constant.sodium-crypto-stream-xchacha20-noncebytes">SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Available as of PHP 8.1.0.
     </span>
    </dd>
   
  </dl>
 </p>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sodium/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsodium.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=sodium.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/sodium.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.sodium.php">Sodium</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.sodium.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="sodium.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="sodium.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.sodium.php" title="Sodium Functions">Sodium Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.sodiumexception.php" title="SodiumException">SodiumException</a>
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
