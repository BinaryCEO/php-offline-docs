<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sodium_crypto_pwhash_str - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sodium-crypto-pwhash-str.php">
 <link rel="shorturl" href="https://www.php.net/sodium-crypto-pwhash-str">
 <link rel="alternate" href="https://www.php.net/sodium-crypto-pwhash-str" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sodium.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sodium-crypto-pwhash-str-needs-rehash.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sodium-crypto-pwhash-str.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sodium-crypto-pwhash-str.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sodium-crypto-pwhash-str.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sodium-crypto-pwhash-str.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sodium-crypto-pwhash-str.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sodium-crypto-pwhash-str.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash-str.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sodium-crypto-pwhash-str.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sodium-crypto-pwhash-str.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sodium-crypto-pwhash-str.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sodium-crypto-pwhash-str.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get an ASCII-encoded hash" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sodium_crypto_pwhash_str - Manual" />
<meta name="twitter:description" content="Get an ASCII-encoded hash" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sodium_crypto_pwhash_str - Manual" />
<meta itemprop="description" content="Get an ASCII-encoded hash" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get an ASCII-encoded hash" />

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
        <a href="function.sodium-crypto-pwhash-str-needs-rehash.php">
          sodium_crypto_pwhash_str_needs_rehash &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php">
          &laquo; sodium_crypto_pwhash_scryptsalsa208sha256_str_verify        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.sodium.php'>Sodium</a></li>      <li><a href='ref.sodium.php'>Sodium Functions</a></li>      </ul>
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
            <option value='en/function.sodium-crypto-pwhash-str.php' selected="selected">English</option>
            <option value='de/function.sodium-crypto-pwhash-str.php'>German</option>
            <option value='es/function.sodium-crypto-pwhash-str.php'>Spanish</option>
            <option value='fr/function.sodium-crypto-pwhash-str.php'>French</option>
            <option value='it/function.sodium-crypto-pwhash-str.php'>Italian</option>
            <option value='ja/function.sodium-crypto-pwhash-str.php'>Japanese</option>
            <option value='pt_BR/function.sodium-crypto-pwhash-str.php'>Brazilian Portuguese</option>
            <option value='ru/function.sodium-crypto-pwhash-str.php'>Russian</option>
            <option value='tr/function.sodium-crypto-pwhash-str.php'>Turkish</option>
            <option value='uk/function.sodium-crypto-pwhash-str.php'>Ukrainian</option>
            <option value='zh/function.sodium-crypto-pwhash-str.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sodium-crypto-pwhash-str" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sodium_crypto_pwhash_str</h1>
  <p class="verinfo">(PHP 7 &gt;= 7.2.0, PHP 8)</p><p class="refpurpose"><span class="refname">sodium_crypto_pwhash_str</span> &mdash; <span class="dc-title">Get an ASCII-encoded hash</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.sodium-crypto-pwhash-str-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sodium_crypto_pwhash_str</strong></span>(<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$password</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$opslimit</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$memlimit</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
Uses a CPU- and memory-hard hash algorithm along with a randomly-generated salt, and memory and CPU limits to generate an ASCII-encoded hash suitable for password storage.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.sodium-crypto-pwhash-str-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">password</code></dt>
    <dd>
     <p class="para">
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>; The password to generate a hash for.
     </p>
    </dd>
   
   
    <dt><code class="parameter">opslimit</code></dt>
    <dd>
     <p class="para">
      Represents a maximum amount of computations to perform. Raising this number will make the function require more CPU cycles to compute a key. There are constants available to set the operations limit to appropriate values depending on intended use, in order of strength: <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-interactive">SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</a></code></strong>, <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-moderate">SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE</a></code></strong> and <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-opslimit-sensitive">SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE</a></code></strong>.
     </p>
    </dd>
   
   
    <dt><code class="parameter">memlimit</code></dt>
    <dd>
     <p class="para">
      The maximum amount of RAM that the function will use, in bytes. There are constants to help you choose an appropriate value, in order of size: <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-interactive">SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE</a></code></strong>, <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-moderate">SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE</a></code></strong>, and <strong><code><a href="sodium.constants.php#constant.sodium-crypto-pwhash-memlimit-sensitive">SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE</a></code></strong>. Typically these should be paired with the matching opslimit values.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.sodium-crypto-pwhash-str-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the hashed password.
  </p>
  <p class="para">
   In order to produce the same password hash from the same password, the same values for <code class="parameter">opslimit</code> and <code class="parameter">memlimit</code> must be used. These are embedded within the generated hash, so
   everything that&#039;s needed to verify the hash is included. This allows
   the <span class="function"><a href="function.sodium-crypto-pwhash-str-verify.php" class="function">sodium_crypto_pwhash_str_verify()</a></span> function to verify the hash without
   needing separate storage for the other parameters.
  </p>
 </div>


  <div class="refsect1 examples" id="refsect1-function.sodium-crypto-pwhash-str-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1079">
    <p><strong>Example #1 <span class="function"><strong>sodium_crypto_pwhash_str()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'password'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">sodium_crypto_pwhash_str</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$password</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE<br /></span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">$argon2id$v=19$m=65536,t=2,p=1$oWIfdaXwWwhVmovOBc2NAQ$EbsZ+JnZyyavkafS0hoc4HdaOB0ILWZESAZ7kVGa+Iw</pre>
</div>
    </div>
   </div>
  </p> 
 </div>


 <div class="refsect1 notes" id="refsect1-function.sodium-crypto-pwhash-str-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Hashes are calculated using the Argon2ID algorithm,
    providing resistance to both GPU and side-channel attacks.
    In contrast to the <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> function,
    there is no salt parameter (a salt is generated automatically),
    and the <code class="parameter">opslimit</code> and
    <code class="parameter">memlimit</code> parameters are not optional.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.sodium-crypto-pwhash-str-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sodium-crypto-pwhash-str-verify.php" class="function" rel="rdfs-seeAlso">sodium_crypto_pwhash_str_verify()</a> - Verifies that a password matches a hash</span></li>
    <li><span class="function"><a href="function.sodium-crypto-pwhash.php" class="function" rel="rdfs-seeAlso">sodium_crypto_pwhash()</a> - Derive a key from a password, using Argon2</span></li>
    <li><span class="function"><a href="function.password-hash.php" class="function" rel="rdfs-seeAlso">password_hash()</a> - Creates a password hash</span></li>
    <li><span class="function"><a href="function.password-verify.php" class="function" rel="rdfs-seeAlso">password_verify()</a> - Verifies that a password matches a hash</span></li>
    <li><a href="https://download.libsodium.org/doc/password_hashing/the_argon2i_function.html" class="link external">&raquo;&nbsp;Libsodium Argon2 docs</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sodium/functions/sodium-crypto-pwhash-str.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sodium-crypto-pwhash-str%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sodium-crypto-pwhash-str&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sodium-crypto-pwhash-str.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125950">  <div class="votes">
    <div id="Vu125950">
    <a href="/manual/vote-note.php?id=125950&amp;page=function.sodium-crypto-pwhash-str&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125950">
    <a href="/manual/vote-note.php?id=125950&amp;page=function.sodium-crypto-pwhash-str&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125950" title="83% like this...">
    4
    </div>
  </div>
  <a href="#125950" class="name">
  <strong class="user"><em>marcus at synchromedia dot co dot uk</em></strong></a><a class="genanchor" href="#125950"> &para;</a><div class="date" title="2021-03-23 08:51"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125950">
<div class="phpcode"><code><span class="html">If you want to ensure that the hashes you generate with sodium_crypto_pwhash_str are compatible with those generated by password_hash, you need to keep an eye on that memory setting. According to the docs, the password_hash memory_cost param is given in "kibibytes", whereas sodium_crypto_pwhash_str uses bytes. I did some experiments to see what the difference is and ran into this:<br /><br />echo password_hash('password',<br />                   PASSWORD_ARGON2ID,<br />                   [<br />                       'memory_cost' =&gt; 15000,<br />                       'time_cost'   =&gt; 26,<br />                       'threads'     =&gt; 1,<br />                   ];<br /><br />echo sodium_crypto_pwhash_str(<br />        'password', 26,<br />        15000000);<br /><br />These result in:<br />$argon2id$v=19$m=15000,t=26,p=1$VG5MSkhUdEdFaGwyVG5sWA$laRHogIVAnC4ggLI8RdCDWlITTdicrdq0tK6SHGf4CI<br />$argon2id$v=19$m=14648,t=26,p=1$ClQ37/z9u7K6V1C2bkD4QA$51m8KhQQ9gujFSF+JyQR9d5QesayJiKsFmDU4HnGBHg<br /><br />Notice that the "m=" numbers are different, and also different from what we asked for. It's down to the "kibibytes" unit. If we multiply the 15000 we used for password_hash by 1,024 instead of 1,000, we get 15,360,000, and using that number gives us the expected hash params:<br /><br />echo sodium_crypto_pwhash_str(<br />        'password', 26,<br />        15360000);<br /><br />$argon2id$v=19$m=15000,t=26,p=1$Qz3pWktOvT6X/LvdAk0bgQ$KosSFPfHUtWg+ppyRs3Op5/zIV6F6iy2Q7Gom8wP29c<br /><br />This should be compatible with password_hash.<br /><br />Incidentally the numbers I'm using for the Argon2id hash params are taken from the OWASP password guide, which recommend values different from PHP's default: <a href="https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html#argon2id" rel="nofollow" target="_blank">https://cheatsheetseries.owasp.org/cheatsheets/Password_Storage_Cheat_Sheet.html#argon2id</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sodium-crypto-pwhash-str&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sodium-crypto-pwhash-str.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sodium.php">Sodium Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.sodium-add.php" title="sodium_&#8203;add">sodium_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-base642bin.php" title="sodium_&#8203;base642bin">sodium_&#8203;base642bin</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-bin2base64.php" title="sodium_&#8203;bin2base64">sodium_&#8203;bin2base64</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-bin2hex.php" title="sodium_&#8203;bin2hex">sodium_&#8203;bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-compare.php" title="sodium_&#8203;compare">sodium_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis128l-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis128l-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis128l-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis128l_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis256-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis256-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aegis256-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;aegis256_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aes256gcm-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aes256gcm-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aes256gcm-is-available.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;is_&#8203;available">sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;is_&#8203;available</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-aes256gcm-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;aes256gcm_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-ietf-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-ietf-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-ietf-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;ietf_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-chacha20poly1305-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;chacha20poly1305_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-decrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;decrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;decrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-encrypt.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;encrypt">sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;encrypt</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-aead-xchacha20poly1305-ietf-keygen.php" title="sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;keygen">sodium_&#8203;crypto_&#8203;aead_&#8203;xchacha20poly1305_&#8203;ietf_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-auth.php" title="sodium_&#8203;crypto_&#8203;auth">sodium_&#8203;crypto_&#8203;auth</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-auth-keygen.php" title="sodium_&#8203;crypto_&#8203;auth_&#8203;keygen">sodium_&#8203;crypto_&#8203;auth_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-auth-verify.php" title="sodium_&#8203;crypto_&#8203;auth_&#8203;verify">sodium_&#8203;crypto_&#8203;auth_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box.php" title="sodium_&#8203;crypto_&#8203;box">sodium_&#8203;crypto_&#8203;box</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-keypair.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;keypair">sodium_&#8203;crypto_&#8203;box_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-keypair-from-secretkey-and-publickey.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;keypair_&#8203;from_&#8203;secretkey_&#8203;and_&#8203;publickey">sodium_&#8203;crypto_&#8203;box_&#8203;keypair_&#8203;from_&#8203;secretkey_&#8203;and_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-open.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;open">sodium_&#8203;crypto_&#8203;box_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-publickey.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;publickey">sodium_&#8203;crypto_&#8203;box_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-publickey-from-secretkey.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;publickey_&#8203;from_&#8203;secretkey">sodium_&#8203;crypto_&#8203;box_&#8203;publickey_&#8203;from_&#8203;secretkey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-seal.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;seal">sodium_&#8203;crypto_&#8203;box_&#8203;seal</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-seal-open.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;seal_&#8203;open">sodium_&#8203;crypto_&#8203;box_&#8203;seal_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-secretkey.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;secretkey">sodium_&#8203;crypto_&#8203;box_&#8203;secretkey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-box-seed-keypair.php" title="sodium_&#8203;crypto_&#8203;box_&#8203;seed_&#8203;keypair">sodium_&#8203;crypto_&#8203;box_&#8203;seed_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-add.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;add">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-from-hash.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;from_&#8203;hash">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;from_&#8203;hash</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-is-valid-point.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;is_&#8203;valid_&#8203;point">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;is_&#8203;valid_&#8203;point</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-random.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;random">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;random</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-add.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;add">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-complement.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;complement">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;complement</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-invert.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;invert">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;invert</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-mul.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;mul">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;mul</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-negate.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;negate">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;negate</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-random.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;random">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;random</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-reduce.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;reduce">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-scalar-sub.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;sub">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;scalar_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-core-ristretto255-sub.php" title="sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;sub">sodium_&#8203;crypto_&#8203;core_&#8203;ristretto255_&#8203;sub</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-generichash.php" title="sodium_&#8203;crypto_&#8203;generichash">sodium_&#8203;crypto_&#8203;generichash</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-generichash-final.php" title="sodium_&#8203;crypto_&#8203;generichash_&#8203;final">sodium_&#8203;crypto_&#8203;generichash_&#8203;final</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-generichash-init.php" title="sodium_&#8203;crypto_&#8203;generichash_&#8203;init">sodium_&#8203;crypto_&#8203;generichash_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-generichash-keygen.php" title="sodium_&#8203;crypto_&#8203;generichash_&#8203;keygen">sodium_&#8203;crypto_&#8203;generichash_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-generichash-update.php" title="sodium_&#8203;crypto_&#8203;generichash_&#8203;update">sodium_&#8203;crypto_&#8203;generichash_&#8203;update</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kdf-derive-from-key.php" title="sodium_&#8203;crypto_&#8203;kdf_&#8203;derive_&#8203;from_&#8203;key">sodium_&#8203;crypto_&#8203;kdf_&#8203;derive_&#8203;from_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kdf-keygen.php" title="sodium_&#8203;crypto_&#8203;kdf_&#8203;keygen">sodium_&#8203;crypto_&#8203;kdf_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-client-session-keys.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;client_&#8203;session_&#8203;keys">sodium_&#8203;crypto_&#8203;kx_&#8203;client_&#8203;session_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-keypair.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;keypair">sodium_&#8203;crypto_&#8203;kx_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-publickey.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;publickey">sodium_&#8203;crypto_&#8203;kx_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-secretkey.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;secretkey">sodium_&#8203;crypto_&#8203;kx_&#8203;secretkey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-seed-keypair.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;seed_&#8203;keypair">sodium_&#8203;crypto_&#8203;kx_&#8203;seed_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-kx-server-session-keys.php" title="sodium_&#8203;crypto_&#8203;kx_&#8203;server_&#8203;session_&#8203;keys">sodium_&#8203;crypto_&#8203;kx_&#8203;server_&#8203;session_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash.php" title="sodium_&#8203;crypto_&#8203;pwhash">sodium_&#8203;crypto_&#8203;pwhash</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash-scryptsalsa208sha256.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256">sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash-scryptsalsa208sha256-str.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256_&#8203;str">sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash-scryptsalsa208sha256-str-verify.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256_&#8203;str_&#8203;verify">sodium_&#8203;crypto_&#8203;pwhash_&#8203;scryptsalsa208sha256_&#8203;str_&#8203;verify</a>
                        </li>
                                                <li class="current">
                            <a href="function.sodium-crypto-pwhash-str.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;str">sodium_&#8203;crypto_&#8203;pwhash_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash-str-needs-rehash.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;str_&#8203;needs_&#8203;rehash">sodium_&#8203;crypto_&#8203;pwhash_&#8203;str_&#8203;needs_&#8203;rehash</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-pwhash-str-verify.php" title="sodium_&#8203;crypto_&#8203;pwhash_&#8203;str_&#8203;verify">sodium_&#8203;crypto_&#8203;pwhash_&#8203;str_&#8203;verify</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-scalarmult.php" title="sodium_&#8203;crypto_&#8203;scalarmult">sodium_&#8203;crypto_&#8203;scalarmult</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-scalarmult-base.php" title="sodium_&#8203;crypto_&#8203;scalarmult_&#8203;base">sodium_&#8203;crypto_&#8203;scalarmult_&#8203;base</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-scalarmult-ristretto255.php" title="sodium_&#8203;crypto_&#8203;scalarmult_&#8203;ristretto255">sodium_&#8203;crypto_&#8203;scalarmult_&#8203;ristretto255</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-scalarmult-ristretto255-base.php" title="sodium_&#8203;crypto_&#8203;scalarmult_&#8203;ristretto255_&#8203;base">sodium_&#8203;crypto_&#8203;scalarmult_&#8203;ristretto255_&#8203;base</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretbox.php" title="sodium_&#8203;crypto_&#8203;secretbox">sodium_&#8203;crypto_&#8203;secretbox</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretbox-keygen.php" title="sodium_&#8203;crypto_&#8203;secretbox_&#8203;keygen">sodium_&#8203;crypto_&#8203;secretbox_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretbox-open.php" title="sodium_&#8203;crypto_&#8203;secretbox_&#8203;open">sodium_&#8203;crypto_&#8203;secretbox_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-pull.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;init_&#8203;pull">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;init_&#8203;pull</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-init-push.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;init_&#8203;push">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;init_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-keygen.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;keygen">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-pull.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;pull">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;pull</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-push.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;push">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-secretstream-xchacha20poly1305-rekey.php" title="sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;rekey">sodium_&#8203;crypto_&#8203;secretstream_&#8203;xchacha20poly1305_&#8203;rekey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-shorthash.php" title="sodium_&#8203;crypto_&#8203;shorthash">sodium_&#8203;crypto_&#8203;shorthash</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-shorthash-keygen.php" title="sodium_&#8203;crypto_&#8203;shorthash_&#8203;keygen">sodium_&#8203;crypto_&#8203;shorthash_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign.php" title="sodium_&#8203;crypto_&#8203;sign">sodium_&#8203;crypto_&#8203;sign</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-detached.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;detached">sodium_&#8203;crypto_&#8203;sign_&#8203;detached</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-ed25519-pk-to-curve25519.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;ed25519_&#8203;pk_&#8203;to_&#8203;curve25519">sodium_&#8203;crypto_&#8203;sign_&#8203;ed25519_&#8203;pk_&#8203;to_&#8203;curve25519</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-ed25519-sk-to-curve25519.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;ed25519_&#8203;sk_&#8203;to_&#8203;curve25519">sodium_&#8203;crypto_&#8203;sign_&#8203;ed25519_&#8203;sk_&#8203;to_&#8203;curve25519</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-keypair.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;keypair">sodium_&#8203;crypto_&#8203;sign_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;keypair_&#8203;from_&#8203;secretkey_&#8203;and_&#8203;publickey">sodium_&#8203;crypto_&#8203;sign_&#8203;keypair_&#8203;from_&#8203;secretkey_&#8203;and_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-open.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;open">sodium_&#8203;crypto_&#8203;sign_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-publickey.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;publickey">sodium_&#8203;crypto_&#8203;sign_&#8203;publickey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-publickey-from-secretkey.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;publickey_&#8203;from_&#8203;secretkey">sodium_&#8203;crypto_&#8203;sign_&#8203;publickey_&#8203;from_&#8203;secretkey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-secretkey.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;secretkey">sodium_&#8203;crypto_&#8203;sign_&#8203;secretkey</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-seed-keypair.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;seed_&#8203;keypair">sodium_&#8203;crypto_&#8203;sign_&#8203;seed_&#8203;keypair</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-sign-verify-detached.php" title="sodium_&#8203;crypto_&#8203;sign_&#8203;verify_&#8203;detached">sodium_&#8203;crypto_&#8203;sign_&#8203;verify_&#8203;detached</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream.php" title="sodium_&#8203;crypto_&#8203;stream">sodium_&#8203;crypto_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-keygen.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;keygen">sodium_&#8203;crypto_&#8203;stream_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-xchacha20.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20">sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-xchacha20-keygen.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;keygen">sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;keygen</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-xchacha20-xor.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;xor">sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;xor</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-xchacha20-xor-ic.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;xor_&#8203;ic">sodium_&#8203;crypto_&#8203;stream_&#8203;xchacha20_&#8203;xor_&#8203;ic</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-crypto-stream-xor.php" title="sodium_&#8203;crypto_&#8203;stream_&#8203;xor">sodium_&#8203;crypto_&#8203;stream_&#8203;xor</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-hex2bin.php" title="sodium_&#8203;hex2bin">sodium_&#8203;hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-increment.php" title="sodium_&#8203;increment">sodium_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-memcmp.php" title="sodium_&#8203;memcmp">sodium_&#8203;memcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-memzero.php" title="sodium_&#8203;memzero">sodium_&#8203;memzero</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-pad.php" title="sodium_&#8203;pad">sodium_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.sodium-unpad.php" title="sodium_&#8203;unpad">sodium_&#8203;unpad</a>
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
