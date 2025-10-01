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

 <link rel="canonical" href="https://www.php.net/manual/en/string.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/string.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/string.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/strings.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.strings.php">

 <link rel="alternate" href="https://www.php.net/manual/en/string.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/string.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/string.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/string.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/string.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/string.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/string.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/string.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/string.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/string.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/string.constants.php" hreflang="zh">

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
        <a href="ref.strings.php">
          String Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="strings.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      </ul>
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
            <option value='en/string.constants.php' selected="selected">English</option>
            <option value='de/string.constants.php'>German</option>
            <option value='es/string.constants.php'>Spanish</option>
            <option value='fr/string.constants.php'>French</option>
            <option value='it/string.constants.php'>Italian</option>
            <option value='ja/string.constants.php'>Japanese</option>
            <option value='pt_BR/string.constants.php'>Brazilian Portuguese</option>
            <option value='ru/string.constants.php'>Russian</option>
            <option value='tr/string.constants.php'>Turkish</option>
            <option value='uk/string.constants.php'>Ukrainian</option>
            <option value='zh/string.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="string.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.crypt-salt-length">
    <strong><code><a href="string.constants.php#constant.crypt-salt-length">CRYPT_SALT_LENGTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.crypt-std-des">
    <strong><code><a href="string.constants.php#constant.crypt-std-des">CRYPT_STD_DES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether standard DES-based hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-ext-des">
    <strong><code><a href="string.constants.php#constant.crypt-ext-des">CRYPT_EXT_DES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether extended DES-based hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-md5">
    <strong><code><a href="string.constants.php#constant.crypt-md5">CRYPT_MD5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether MD5 hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-blowfish">
    <strong><code><a href="string.constants.php#constant.crypt-blowfish">CRYPT_BLOWFISH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether Blowfish hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-sha256">
    <strong><code><a href="string.constants.php#constant.crypt-sha256">CRYPT_SHA256</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether SHA-256 hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
  
   <dt id="constant.crypt-sha512">
    <strong><code><a href="string.constants.php#constant.crypt-sha512">CRYPT_SHA512</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Indicates whether SHA-512 hashes are supported in <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>. Always <code class="literal">1</code>.
    </span>
   </dd>
  
   
   <dt id="constant.html-specialchars">
    <strong><code><a href="string.constants.php#constant.html-specialchars">HTML_SPECIALCHARS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.html-entities">
    <strong><code><a href="string.constants.php#constant.html-entities">HTML_ENTITIES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-compat">
    <strong><code><a href="string.constants.php#constant.ent-compat">ENT_COMPAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-quotes">
    <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-noquotes">
    <strong><code><a href="string.constants.php#constant.ent-noquotes">ENT_NOQUOTES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-ignore">
    <strong><code><a href="string.constants.php#constant.ent-ignore">ENT_IGNORE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-substitute">
    <strong><code><a href="string.constants.php#constant.ent-substitute">ENT_SUBSTITUTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-disallowed">
    <strong><code><a href="string.constants.php#constant.ent-disallowed">ENT_DISALLOWED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-html401">
    <strong><code><a href="string.constants.php#constant.ent-html401">ENT_HTML401</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-xml1">
    <strong><code><a href="string.constants.php#constant.ent-xml1">ENT_XML1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-xhtml">
    <strong><code><a href="string.constants.php#constant.ent-xhtml">ENT_XHTML</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.ent-html5">
    <strong><code><a href="string.constants.php#constant.ent-html5">ENT_HTML5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.char-max">
    <strong><code><a href="string.constants.php#constant.char-max">CHAR_MAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.lc-ctype">
    <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Character classification and conversion affected by locale setting.
    </span>
   </dd>
  
  
   <dt id="constant.lc-numeric">
    <strong><code><a href="string.constants.php#constant.lc-numeric">LC_NUMERIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Decimal separator affected by locale setting.
    </span>
   </dd>
  
  
   <dt id="constant.lc-time">
    <strong><code><a href="string.constants.php#constant.lc-time">LC_TIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Date and time formatting affected by locale setting.
    </span>
   </dd>
  
  
   <dt id="constant.lc-collate">
    <strong><code><a href="string.constants.php#constant.lc-collate">LC_COLLATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     String comparison affected by locale setting.
    </span>
   </dd>
  
  
   <dt id="constant.lc-monetary">
    <strong><code><a href="string.constants.php#constant.lc-monetary">LC_MONETARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Monetary formatting affected by locale setting.
    </span>
   </dd>
  
  
   <dt id="constant.lc-all">
    <strong><code><a href="string.constants.php#constant.lc-all">LC_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Affects all functions that any of the other
     <strong><code><a href="string.constants.php#constant.lc-ctype">LC_<span class="replaceable">*</span></a></code></strong> constants affect.
    </span>
   </dd>
  
  
   <dt id="constant.lc-messages">
    <strong><code><a href="string.constants.php#constant.lc-messages">LC_MESSAGES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     System responses affected by locale setting.
     Available if PHP was compiled with <code class="literal">libintl</code>.
    </span>
   </dd>
  
  
   <dt id="constant.str-pad-left">
    <strong><code><a href="string.constants.php#constant.str-pad-left">STR_PAD_LEFT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.str-pad-right">
    <strong><code><a href="string.constants.php#constant.str-pad-right">STR_PAD_RIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.str-pad-both">
    <strong><code><a href="string.constants.php#constant.str-pad-both">STR_PAD_BOTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>
 <table class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title"><span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> <strong><code><a href="string.constants.php#constant.lc-time">LC_TIME</a></code></strong> Category Constants</strong>
  <tr>
   <td id="constant.abday-1">
    <strong><code><a href="string.constants.php#constant.abday-1">ABDAY_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of first day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-2">
    <strong><code><a href="string.constants.php#constant.abday-2">ABDAY_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of second day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-3">
    <strong><code><a href="string.constants.php#constant.abday-3">ABDAY_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of third day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-4">
    <strong><code><a href="string.constants.php#constant.abday-4">ABDAY_4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of fourth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-5">
    <strong><code><a href="string.constants.php#constant.abday-5">ABDAY_5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of fifth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-6">
    <strong><code><a href="string.constants.php#constant.abday-6">ABDAY_6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of sixth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abday-7">
    <strong><code><a href="string.constants.php#constant.abday-7">ABDAY_7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of seventh day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-1">
    <strong><code><a href="string.constants.php#constant.day-1">DAY_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the first day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-2">
    <strong><code><a href="string.constants.php#constant.day-2">DAY_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the second day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-3">
    <strong><code><a href="string.constants.php#constant.day-3">DAY_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the third day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-4">
    <strong><code><a href="string.constants.php#constant.day-4">DAY_4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the fourth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-5">
    <strong><code><a href="string.constants.php#constant.day-5">DAY_5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the fifth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-6">
    <strong><code><a href="string.constants.php#constant.day-6">DAY_6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the sixth day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.day-7">
    <strong><code><a href="string.constants.php#constant.day-7">DAY_7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the seventh day of the week.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-1">
    <strong><code><a href="string.constants.php#constant.abmon-1">ABMON_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the first month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-2">
    <strong><code><a href="string.constants.php#constant.abmon-2">ABMON_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the second month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-3">
    <strong><code><a href="string.constants.php#constant.abmon-3">ABMON_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the third month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-4">
    <strong><code><a href="string.constants.php#constant.abmon-4">ABMON_4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the fourth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-5">
    <strong><code><a href="string.constants.php#constant.abmon-5">ABMON_5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the fifth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-6">
    <strong><code><a href="string.constants.php#constant.abmon-6">ABMON_6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the sixth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-7">
    <strong><code><a href="string.constants.php#constant.abmon-7">ABMON_7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the seventh month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-8">
    <strong><code><a href="string.constants.php#constant.abmon-8">ABMON_8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the eighth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-9">
    <strong><code><a href="string.constants.php#constant.abmon-9">ABMON_9</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the ninth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-10">
    <strong><code><a href="string.constants.php#constant.abmon-10">ABMON_10</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the tenth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-11">
    <strong><code><a href="string.constants.php#constant.abmon-11">ABMON_11</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the eleventh month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.abmon-12">
    <strong><code><a href="string.constants.php#constant.abmon-12">ABMON_12</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Abbreviated name of the twelfth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-1">
    <strong><code><a href="string.constants.php#constant.mon-1">MON_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the first month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-2">
    <strong><code><a href="string.constants.php#constant.mon-2">MON_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the second month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-3">
    <strong><code><a href="string.constants.php#constant.mon-3">MON_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the third month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-4">
    <strong><code><a href="string.constants.php#constant.mon-4">MON_4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the fourth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-5">
    <strong><code><a href="string.constants.php#constant.mon-5">MON_5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the fifth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-6">
    <strong><code><a href="string.constants.php#constant.mon-6">MON_6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the sixth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-7">
    <strong><code><a href="string.constants.php#constant.mon-7">MON_7</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the seventh month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-8">
    <strong><code><a href="string.constants.php#constant.mon-8">MON_8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the eighth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-9">
    <strong><code><a href="string.constants.php#constant.mon-9">MON_9</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the ninth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-10">
    <strong><code><a href="string.constants.php#constant.mon-10">MON_10</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the tenth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-11">
    <strong><code><a href="string.constants.php#constant.mon-11">MON_11</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the eleventh month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-12">
    <strong><code><a href="string.constants.php#constant.mon-12">MON_12</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Name of the twelfth month of the year.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.am-str">
    <strong><code><a href="string.constants.php#constant.am-str">AM_STR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String for Ante meridian.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.pm-str">
    <strong><code><a href="string.constants.php#constant.pm-str">PM_STR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String for Post meridian.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.d-t-fmt">
    <strong><code><a href="string.constants.php#constant.d-t-fmt">D_T_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String that can be used as the format string for <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span> to represent time and date.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.d-fmt">
    <strong><code><a href="string.constants.php#constant.d-fmt">D_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String that can be used as the format string for <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span> to represent date.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.t-fmt">
    <strong><code><a href="string.constants.php#constant.t-fmt">T_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String that can be used as the format string for <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span> to represent time.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.t-fmt-ampm">
    <strong><code><a href="string.constants.php#constant.t-fmt-ampm">T_FMT_AMPM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     String that can be used as the format string for <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span> to represent time in 12-hour format with ante/post meridian.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.era">
    <strong><code><a href="string.constants.php#constant.era">ERA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Alternate era.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.era-year">
    <strong><code><a href="string.constants.php#constant.era-year">ERA_YEAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Year in alternate era format.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.era-d-t-fmt">
    <strong><code><a href="string.constants.php#constant.era-d-t-fmt">ERA_D_T_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Date and time in alternate era format (string can be used in <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span>).
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.era-d-fmt">
    <strong><code><a href="string.constants.php#constant.era-d-fmt">ERA_D_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Date in alternate era format (string can be used in <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span>).
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.era-t-fmt">
    <strong><code><a href="string.constants.php#constant.era-t-fmt">ERA_T_FMT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Time in alternate era format (string can be used in <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span>).
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.alt-digits">
    <strong><code><a href="string.constants.php#constant.alt-digits">ALT_DIGITS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Alternative symbols for digits.
    </span>
   </td>
  </tr>
 </table>
 <table class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title"><span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> <strong><code><a href="string.constants.php#constant.lc-monetary">LC_MONETARY</a></code></strong> Category Constants</strong>
  <tr>
   <td id="constant.int-curr-symbol">
    <strong><code><a href="string.constants.php#constant.int-curr-symbol">INT_CURR_SYMBOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     International currency symbol.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.currency-symbol">
    <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Local currency symbol.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.crncystr">
    <strong><code><a href="string.constants.php#constant.crncystr">CRNCYSTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Same value as <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-decimal-point">
    <strong><code><a href="string.constants.php#constant.mon-decimal-point">MON_DECIMAL_POINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Decimal point character.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-thousands-sep">
    <strong><code><a href="string.constants.php#constant.mon-thousands-sep">MON_THOUSANDS_SEP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Thousands separator (groups of three digits).
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.mon-grouping">
    <strong><code><a href="string.constants.php#constant.mon-grouping">MON_GROUPING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Like <code class="literal">&quot;grouping&quot;</code> element.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.positive-sign">
    <strong><code><a href="string.constants.php#constant.positive-sign">POSITIVE_SIGN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Sign for positive values.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.negative-sign">
    <strong><code><a href="string.constants.php#constant.negative-sign">NEGATIVE_SIGN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Sign for negative values.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.int-frac-digits">
    <strong><code><a href="string.constants.php#constant.int-frac-digits">INT_FRAC_DIGITS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     International fractional digits.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.frac-digits">
    <strong><code><a href="string.constants.php#constant.frac-digits">FRAC_DIGITS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Local fractional digits.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.p-cs-precedes">
    <strong><code><a href="string.constants.php#constant.p-cs-precedes">P_CS_PRECEDES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Returns 1 if <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> precedes a positive value.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.p-sep-by-space">
    <strong><code><a href="string.constants.php#constant.p-sep-by-space">P_SEP_BY_SPACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Returns 1 if a space separates <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> from a positive value.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.n-cs-precedes">
    <strong><code><a href="string.constants.php#constant.n-cs-precedes">N_CS_PRECEDES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Returns 1 if <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> precedes a negative value.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.n-sep-by-space">
    <strong><code><a href="string.constants.php#constant.n-sep-by-space">N_SEP_BY_SPACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Returns 1 if a space separates <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> from a negative value.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.p-sign-posn">
    <strong><code><a href="string.constants.php#constant.p-sign-posn">P_SIGN_POSN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <p class="para">
     <ul class="itemizedlist">
             <li class="listitem">
              <span class="simpara">
                Returns 0 if parentheses surround the quantity and <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
              </span>
             </li>
             <li class="listitem">
              <span class="simpara">
               Returns 1 if the sign string precedes the quantity and <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
              </span>
             </li>
             <li class="listitem">
              <span class="simpara">
               Returns 2 if the sign string follows the quantity and <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
              </span>
             </li>
             <li class="listitem">
              <span class="simpara">
               Returns 3 if the sign string immediately precedes the <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
              </span>
             </li>
             <li class="listitem">
              <span class="simpara">
               Returns 4 if the sign string immediately follows the <strong><code><a href="string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.
              </span>
             </li>
            </ul>
    </p>
   </td>
  </tr>
  <tr>
   <td id="constant.n-sign-posn">
    <strong><code><a href="string.constants.php#constant.n-sign-posn">N_SIGN_POSN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">

    </span>
   </td>
  </tr>
 </table>
 <table class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title"><span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> <strong><code><a href="string.constants.php#constant.lc-numeric">LC_NUMERIC</a></code></strong> Category Constants</strong>
  <tr>
   <td id="constant.decimal-point">
    <strong><code><a href="string.constants.php#constant.decimal-point">DECIMAL_POINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Decimal point character.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.radixchar">
    <strong><code><a href="string.constants.php#constant.radixchar">RADIXCHAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Same value as <strong><code><a href="string.constants.php#constant.decimal-point">DECIMAL_POINT</a></code></strong>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.thousands-sep">
    <strong><code><a href="string.constants.php#constant.thousands-sep">THOUSANDS_SEP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Separator character for thousands (groups of three digits).
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.thousep">
    <strong><code><a href="string.constants.php#constant.thousep">THOUSEP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Same value as <strong><code><a href="string.constants.php#constant.thousands-sep">THOUSANDS_SEP</a></code></strong>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.grouping">
    <strong><code><a href="string.constants.php#constant.grouping">GROUPING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">

    </span>
   </td>
  </tr>
 </table>
 <table class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title"><span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> <strong><code><a href="string.constants.php#constant.lc-messages">LC_MESSAGES</a></code></strong> Category Constants</strong>
  <tr>
   <td id="constant.yesexpr">
    <strong><code><a href="string.constants.php#constant.yesexpr">YESEXPR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Regex string for matching <code class="literal">&quot;yes&quot;</code> input.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.noexpr">
    <strong><code><a href="string.constants.php#constant.noexpr">NOEXPR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Regex string for matching <code class="literal">&quot;no&quot;</code> input.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.yesstr">
    <strong><code><a href="string.constants.php#constant.yesstr">YESSTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Output string for <code class="literal">&quot;yes&quot;</code>.
    </span>
   </td>
  </tr>
  <tr>
   <td id="constant.nostr">
    <strong><code><a href="string.constants.php#constant.nostr">NOSTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Output string for <code class="literal">&quot;no&quot;</code>.
    </span>
   </td>
  </tr>
 </table>
 <table class="doctable table">
      <tr>
       <th>Constants</th>
       <th>Description</th>
      </tr>
  <strong class="title"><span class="function"><a href="function.nl-langinfo.php" class="function">nl_langinfo()</a></span> <strong><code><a href="string.constants.php#constant.lc-ctype">LC_CTYPE</a></code></strong> Category Constants</strong>
  <tr>
   <td id="constant.codeset">
    <strong><code><a href="string.constants.php#constant.codeset">CODESET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </td>
   <td>
    <span class="simpara">
     Return a string with the name of the character encoding.
    </span>
   </td>
  </tr>
 </table>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fstring.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=string.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/string.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.strings.php">Strings</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.strings.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="strings.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="string.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.strings.php" title="String Functions">String Functions</a>
                        </li>
                                                <li class="">
                            <a href="changelog.strings.php" title="Changelog">Changelog</a>
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
