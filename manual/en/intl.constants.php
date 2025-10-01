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

 <link rel="canonical" href="https://www.php.net/manual/en/intl.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/intl.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/intl.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/intl.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/intl.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/intl.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/intl.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/intl.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/intl.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/intl.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/intl.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/intl.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/intl.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/intl.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/intl.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/intl.constants.php" hreflang="zh">

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
        <a href="intl.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intl.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      </ul>
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
            <option value='en/intl.constants.php' selected="selected">English</option>
            <option value='de/intl.constants.php'>German</option>
            <option value='es/intl.constants.php'>Spanish</option>
            <option value='fr/intl.constants.php'>French</option>
            <option value='it/intl.constants.php'>Italian</option>
            <option value='ja/intl.constants.php'>Japanese</option>
            <option value='pt_BR/intl.constants.php'>Brazilian Portuguese</option>
            <option value='ru/intl.constants.php'>Russian</option>
            <option value='tr/intl.constants.php'>Turkish</option>
            <option value='uk/intl.constants.php'>Ukrainian</option>
            <option value='zh/intl.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="intl.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="para">
  <dl>
   
    <dt id="constant.intl-icu-data-version">
     <strong><code><a href="intl.constants.php#constant.intl-icu-data-version">INTL_ICU_DATA_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Data version in ICU4C.
     </span>
    </dd>
   
   
    <dt id="constant.intl-icu-version">
     <strong><code><a href="intl.constants.php#constant.intl-icu-version">INTL_ICU_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The current ICU library version as a dotted-decimal string.
     </span>
    </dd>
   
   
    <dt id="constant.intl-max-locale-len">
     <strong><code><a href="intl.constants.php#constant.intl-max-locale-len">INTL_MAX_LOCALE_LEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Limit on locale length, set to 80 in PHP code. Locale names longer
      than this limit will not be accepted.
     </span>
    </dd>
   
   
    <dt id="constant.idna-default">
     <strong><code><a href="intl.constants.php#constant.idna-default">IDNA_DEFAULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Prohibit processing of unassigned codepoints in the input for IDN
      functions and do not check if the input conforms to domain name ASCII rules.
     </span>
    </dd>
   
   
    <dt id="constant.idna-allow-unassigned">
     <strong><code><a href="intl.constants.php#constant.idna-allow-unassigned">IDNA_ALLOW_UNASSIGNED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Allow processing of unassigned codepoints in the input for IDN functions.
     </span>
    </dd>
   
   
    <dt id="constant.idna-use-std3-rules">
     <strong><code><a href="intl.constants.php#constant.idna-use-std3-rules">IDNA_USE_STD3_RULES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Check if the input for IDN functions conforms to domain name ASCII rules.
     </span>
    </dd>
   
   
    <dt id="constant.idna-check-bidi">
     <strong><code><a href="intl.constants.php#constant.idna-check-bidi">IDNA_CHECK_BIDI</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Check whether the input conforms to the BiDi rules.
      Ignored by the IDNA2003 implementation, which always performs this check.
     </span>
    </dd>
   
   
    <dt id="constant.idna-check-contextj">
     <strong><code><a href="intl.constants.php#constant.idna-check-contextj">IDNA_CHECK_CONTEXTJ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Check whether the input conforms to the CONTEXTJ rules.
      Ignored by the IDNA2003 implementation, as this check is new in IDNA2008.
     </span>
    </dd>
   
   
    <dt id="constant.idna-nontransitional-to-ascii">
     <strong><code><a href="intl.constants.php#constant.idna-nontransitional-to-ascii">IDNA_NONTRANSITIONAL_TO_ASCII</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Option for nontransitional processing in
      <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span>. Transitional processing is activated
      by default. This option is ignored by the IDNA2003 implementation.
     </span>
    </dd>
   
   
    <dt id="constant.idna-nontransitional-to-unicode">
     <strong><code><a href="intl.constants.php#constant.idna-nontransitional-to-unicode">IDNA_NONTRANSITIONAL_TO_UNICODE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Option for nontransitional processing in
      <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span>. Transitional processing is activated
      by default. This option is ignored by the IDNA2003 implementation.
     </span>
    </dd>
   
   
    <dt id="constant.intl-idna-variant-2003">
     <strong><code><a href="intl.constants.php#constant.intl-idna-variant-2003">INTL_IDNA_VARIANT_2003</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Use IDNA 2003 algorithm in <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span> and
      <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span>. This is the default.
      This constant and using the default has been deprecated as of PHP 7.2.0.
     </span>
    </dd>
   
   
    <dt id="constant.intl-idna-variant-uts46">
     <strong><code><a href="intl.constants.php#constant.intl-idna-variant-uts46">INTL_IDNA_VARIANT_UTS46</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Use UTS #46 algorithm in <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span> and
      <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span>.
      Available as of ICU 4.6.
     </span>
    </dd>
   
   
    <dt id="constant.grapheme-extr-count">
     <strong><code><a href="intl.constants.php#constant.grapheme-extr-count">GRAPHEME_EXTR_COUNT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The number of default grapheme clusters to extract.
     </span>
    </dd>
   
   
    <dt id="constant.grapheme-extr-maxbytes">
     <strong><code><a href="intl.constants.php#constant.grapheme-extr-maxbytes">GRAPHEME_EXTR_MAXBYTES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The maximum number of bytes returned.
     </span>
    </dd>
   
   
    <dt id="constant.grapheme-extr-maxchars">
     <strong><code><a href="intl.constants.php#constant.grapheme-extr-maxchars">GRAPHEME_EXTR_MAXCHARS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The maximum number of UTF-8 characters returned.
     </span>
    </dd>
   
  </dl>
  <dl id="constant.idna-errors">
   <p class="para">
    The following errors are part of a bitmask returned by the UTS #46 algorithm in
    <span class="function"><a href="function.idn-to-utf8.php" class="function">idn_to_utf8()</a></span> and <span class="function"><a href="function.idn-to-ascii.php" class="function">idn_to_ascii()</a></span>.
   </p>
   
    <dt id="constant.idna-error-empty-label">
     <strong><code><a href="intl.constants.php#constant.idna-error-empty-label">IDNA_ERROR_EMPTY_LABEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-label-too-long">
     <strong><code><a href="intl.constants.php#constant.idna-error-label-too-long">IDNA_ERROR_LABEL_TOO_LONG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-domain-name-too-long">
     <strong><code><a href="intl.constants.php#constant.idna-error-domain-name-too-long">IDNA_ERROR_DOMAIN_NAME_TOO_LONG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-leading-hyphen">
     <strong><code><a href="intl.constants.php#constant.idna-error-leading-hyphen">IDNA_ERROR_LEADING_HYPHEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-trailing-hyphen">
     <strong><code><a href="intl.constants.php#constant.idna-error-trailing-hyphen">IDNA_ERROR_TRAILING_HYPHEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-hyphen-3-4">
     <strong><code><a href="intl.constants.php#constant.idna-error-hyphen-3-4">IDNA_ERROR_HYPHEN_3_4</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-leading-combining-mark">
     <strong><code><a href="intl.constants.php#constant.idna-error-leading-combining-mark">IDNA_ERROR_LEADING_COMBINING_MARK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-disallowed">
     <strong><code><a href="intl.constants.php#constant.idna-error-disallowed">IDNA_ERROR_DISALLOWED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-punycode">
     <strong><code><a href="intl.constants.php#constant.idna-error-punycode">IDNA_ERROR_PUNYCODE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-label-has-dot">
     <strong><code><a href="intl.constants.php#constant.idna-error-label-has-dot">IDNA_ERROR_LABEL_HAS_DOT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-invalid-ace-label">
     <strong><code><a href="intl.constants.php#constant.idna-error-invalid-ace-label">IDNA_ERROR_INVALID_ACE_LABEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-bidi">
     <strong><code><a href="intl.constants.php#constant.idna-error-bidi">IDNA_ERROR_BIDI</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.idna-error-contextj">
     <strong><code><a href="intl.constants.php#constant.idna-error-contextj">IDNA_ERROR_CONTEXTJ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.uloc-actual-locale">
     <strong><code><a href="intl.constants.php#constant.uloc-actual-locale">ULOC_ACTUAL_LOCALE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The locale the data actually comes from.
     </span>
    </dd>
   
   
    <dt id="constant.uloc-valid-locale">
     <strong><code><a href="intl.constants.php#constant.uloc-valid-locale">ULOC_VALID_LOCALE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The most specific locale supported by ICU.
     </span>
    </dd>
   
   
    <dt id="constant.u-ambiguous-alias-warning">
     <strong><code><a href="intl.constants.php#constant.u-ambiguous-alias-warning">U_AMBIGUOUS_ALIAS_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This converter alias can go to different converter implementations.
     </span>
    </dd>
   
   
    <dt id="constant.u-bad-variable-definition">
     <strong><code><a href="intl.constants.php#constant.u-bad-variable-definition">U_BAD_VARIABLE_DEFINITION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Missing <code class="literal">&#039;$&#039;</code> or duplicate variable name.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-assign-error">
     <strong><code><a href="intl.constants.php#constant.u-brk-assign-error">U_BRK_ASSIGN_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Syntax error in RBBI rule assignment statement.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-brk-error-limit">U_BRK_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This must always be the last value to indicate the limit for Break Iterator failures.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-error-start">
     <strong><code><a href="intl.constants.php#constant.u-brk-error-start">U_BRK_ERROR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Start of codes indicating Break Iterator failures.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-hex-digits-expected">
     <strong><code><a href="intl.constants.php#constant.u-brk-hex-digits-expected">U_BRK_HEX_DIGITS_EXPECTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Hex digits expected as part of a escaped char in a rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-init-error">
     <strong><code><a href="intl.constants.php#constant.u-brk-init-error">U_BRK_INIT_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Initialization failure. Probable missing ICU Data.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-internal-error">
     <strong><code><a href="intl.constants.php#constant.u-brk-internal-error">U_BRK_INTERNAL_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      An internal error (bug) was detected.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-malformed-rule-tag">
     <strong><code><a href="intl.constants.php#constant.u-brk-malformed-rule-tag">U_BRK_MALFORMED_RULE_TAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The <code class="literal">{nnn}</code> tag on a rule is mal formed.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-mismatched-paren">
     <strong><code><a href="intl.constants.php#constant.u-brk-mismatched-paren">U_BRK_MISMATCHED_PAREN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Mis-matched parentheses in an RBBI rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-new-line-in-quoted-string">
     <strong><code><a href="intl.constants.php#constant.u-brk-new-line-in-quoted-string">U_BRK_NEW_LINE_IN_QUOTED_STRING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Missing closing quote in an RBBI rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-rule-empty-set">
     <strong><code><a href="intl.constants.php#constant.u-brk-rule-empty-set">U_BRK_RULE_EMPTY_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Rule contains an empty Unicode Set.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-rule-syntax">
     <strong><code><a href="intl.constants.php#constant.u-brk-rule-syntax">U_BRK_RULE_SYNTAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Syntax error in RBBI rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-semicolon-expected">
     <strong><code><a href="intl.constants.php#constant.u-brk-semicolon-expected">U_BRK_SEMICOLON_EXPECTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Missing <code class="literal">&#039;;&#039;</code> at the end of a RBBI rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-unclosed-set">
     <strong><code><a href="intl.constants.php#constant.u-brk-unclosed-set">U_BRK_UNCLOSED_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      UnicodeSet writing an RBBI rule missing a closing <code class="literal">&#039;]&#039;</code>.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-undefined-variable">
     <strong><code><a href="intl.constants.php#constant.u-brk-undefined-variable">U_BRK_UNDEFINED_VARIABLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Use of an undefined <code class="code">$Variable</code> in an RBBI rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-unrecognized-option">
     <strong><code><a href="intl.constants.php#constant.u-brk-unrecognized-option">U_BRK_UNRECOGNIZED_OPTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Option in RBBI rules not recognized.
     </span>
    </dd>
   
   
    <dt id="constant.u-brk-variable-redfinition">
     <strong><code><a href="intl.constants.php#constant.u-brk-variable-redfinition">U_BRK_VARIABLE_REDFINITION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      RBBI rule variable redefined.
     </span>
    </dd>
   
   
    <dt id="constant.u-buffer-overflow-error">
     <strong><code><a href="intl.constants.php#constant.u-buffer-overflow-error">U_BUFFER_OVERFLOW_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A result would not fit in the supplied buffer.
     </span>
    </dd>
   
   
    <dt id="constant.u-ce-not-found-error">
     <strong><code><a href="intl.constants.php#constant.u-ce-not-found-error">U_CE_NOT_FOUND_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Currently used only while setting variable top, but can be used generally.
     </span>
    </dd>
   
   
    <dt id="constant.u-collator-version-mismatch">
     <strong><code><a href="intl.constants.php#constant.u-collator-version-mismatch">U_COLLATOR_VERSION_MISMATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Collator version is not compatible with the base version.
     </span>
    </dd>
   
   
    <dt id="constant.u-different-uca-version">
     <strong><code><a href="intl.constants.php#constant.u-different-uca-version">U_DIFFERENT_UCA_VERSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      ucol_open encountered a mismatch between UCA version and collator image version,
      so the collator was constructed from rules. No impact to further function.
     </span>
    </dd>
   
   
    <dt id="constant.u-enum-out-of-sync-error">
     <strong><code><a href="intl.constants.php#constant.u-enum-out-of-sync-error">U_ENUM_OUT_OF_SYNC_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      <code class="code">UEnumeration</code> out of sync with underlying collection.
     </span>
    </dd>
   
   
    <dt id="constant.u-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-error-limit">U_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Alias of <strong><code>U_PLUGIN_ERROR_LIMIT</code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.u-error-warning-limit">
     <strong><code><a href="intl.constants.php#constant.u-error-warning-limit">U_ERROR_WARNING_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This must always be the last warning value to indicate
      the limit for UErrorCode warnings (last warning code +1).
     </span>
    </dd>
   
   
    <dt id="constant.u-error-warning-start">
     <strong><code><a href="intl.constants.php#constant.u-error-warning-start">U_ERROR_WARNING_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Start of information results (semantically successful).
     </span>
    </dd>
   
   
    <dt id="constant.u-file-access-error">
     <strong><code><a href="intl.constants.php#constant.u-file-access-error">U_FILE_ACCESS_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The requested file cannot be found.
     </span>
    </dd>
   
   
    <dt id="constant.u-fmt-parse-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-fmt-parse-error-limit">U_FMT_PARSE_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The limit for format library errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-fmt-parse-error-start">
     <strong><code><a href="intl.constants.php#constant.u-fmt-parse-error-start">U_FMT_PARSE_ERROR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Start of format library errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-idna-ace-prefix-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-ace-prefix-error">U_IDNA_ACE_PREFIX_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-check-bidi-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-check-bidi-error">U_IDNA_CHECK_BIDI_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-domain-name-too-long-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-domain-name-too-long-error">U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-idna-error-limit">U_IDNA_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-error-start">
     <strong><code><a href="intl.constants.php#constant.u-idna-error-start">U_IDNA_ERROR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-label-too-long-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-label-too-long-error">U_IDNA_LABEL_TOO_LONG_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-prohibited-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-prohibited-error">U_IDNA_PROHIBITED_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-std3-ascii-rules-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-std3-ascii-rules-error">U_IDNA_STD3_ASCII_RULES_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-unassigned-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-unassigned-error">U_IDNA_UNASSIGNED_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-verification-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-verification-error">U_IDNA_VERIFICATION_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-idna-zero-length-label-error">
     <strong><code><a href="intl.constants.php#constant.u-idna-zero-length-label-error">U_IDNA_ZERO_LENGTH_LABEL_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-argument-error">
     <strong><code><a href="intl.constants.php#constant.u-illegal-argument-error">U_ILLEGAL_ARGUMENT_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates an incorrect argument value.
     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-char-found">
     <strong><code><a href="intl.constants.php#constant.u-illegal-char-found">U_ILLEGAL_CHAR_FOUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Character conversion: Illegal input sequence.
     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-char-in-segment">
     <strong><code><a href="intl.constants.php#constant.u-illegal-char-in-segment">U_ILLEGAL_CHAR_IN_SEGMENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-character">
     <strong><code><a href="intl.constants.php#constant.u-illegal-character">U_ILLEGAL_CHARACTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A special character is outside its allowed context.
     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-escape-sequence">
     <strong><code><a href="intl.constants.php#constant.u-illegal-escape-sequence">U_ILLEGAL_ESCAPE_SEQUENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      ISO-2022 illlegal escape sequence.
     </span>
    </dd>
   
   
    <dt id="constant.u-illegal-pad-position">
     <strong><code><a href="intl.constants.php#constant.u-illegal-pad-position">U_ILLEGAL_PAD_POSITION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Pad symbol misplaced in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-index-outofbounds-error">
     <strong><code><a href="intl.constants.php#constant.u-index-outofbounds-error">U_INDEX_OUTOFBOUNDS_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Trying to access the index that is out of bounds.
     </span>
    </dd>
   
   
    <dt id="constant.u-internal-program-error">
     <strong><code><a href="intl.constants.php#constant.u-internal-program-error">U_INTERNAL_PROGRAM_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Indicates a bug in the library code.
     </span>
    </dd>
   
   
    <dt id="constant.u-internal-transliterator-error">
     <strong><code><a href="intl.constants.php#constant.u-internal-transliterator-error">U_INTERNAL_TRANSLITERATOR_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Internal transliterator system error.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-char-found">
     <strong><code><a href="intl.constants.php#constant.u-invalid-char-found">U_INVALID_CHAR_FOUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Character conversion: Unmappable input sequence. In other APIs: Invalid character.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-format-error">
     <strong><code><a href="intl.constants.php#constant.u-invalid-format-error">U_INVALID_FORMAT_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Data format is not what is expected.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-function">
     <strong><code><a href="intl.constants.php#constant.u-invalid-function">U_INVALID_FUNCTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="literal">&#039;&amp;fn()&#039;</code> rule specifies an unknown transliterator.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-id">
     <strong><code><a href="intl.constants.php#constant.u-invalid-id">U_INVALID_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="literal">&#039;::id&#039;</code> rule specifies an unknown transliterator.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-property-pattern">
     <strong><code><a href="intl.constants.php#constant.u-invalid-property-pattern">U_INVALID_PROPERTY_PATTERN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-rbt-syntax">
     <strong><code><a href="intl.constants.php#constant.u-invalid-rbt-syntax">U_INVALID_RBT_SYNTAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="literal">&#039;::id&#039;</code> rule was passed to the RuleBasedTransliterator parser.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-state-error">
     <strong><code><a href="intl.constants.php#constant.u-invalid-state-error">U_INVALID_STATE_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Requested operation can not be completed with ICU in its current state.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-table-file">
     <strong><code><a href="intl.constants.php#constant.u-invalid-table-file">U_INVALID_TABLE_FILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Conversion table file not found.
     </span>
    </dd>
   
   
    <dt id="constant.u-invalid-table-format">
     <strong><code><a href="intl.constants.php#constant.u-invalid-table-format">U_INVALID_TABLE_FORMAT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Conversion table file found, but corrupted.
     </span>
    </dd>
   
   
    <dt id="constant.u-invariant-conversion-error">
     <strong><code><a href="intl.constants.php#constant.u-invariant-conversion-error">U_INVARIANT_CONVERSION_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to convert a <code class="code">UChar*</code> string to <code class="code">char*</code>
      with the invariant converter.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-exponential-pattern">
     <strong><code><a href="intl.constants.php#constant.u-malformed-exponential-pattern">U_MALFORMED_EXPONENTIAL_PATTERN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Grouping symbol in exponent pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-pragma">
     <strong><code><a href="intl.constants.php#constant.u-malformed-pragma">U_MALFORMED_PRAGMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="literal">&#039;use&#039;</code> pragma is invalid.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-rule">
     <strong><code><a href="intl.constants.php#constant.u-malformed-rule">U_MALFORMED_RULE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Elements of a rule are misplaced.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-set">
     <strong><code><a href="intl.constants.php#constant.u-malformed-set">U_MALFORMED_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="code">UnicodeSet</code> pattern is invalid.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-symbol-reference">
     <strong><code><a href="intl.constants.php#constant.u-malformed-symbol-reference">U_MALFORMED_SYMBOL_REFERENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-unicode-escape">
     <strong><code><a href="intl.constants.php#constant.u-malformed-unicode-escape">U_MALFORMED_UNICODE_ESCAPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A Unicode escape pattern is invalid.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-variable-definition">
     <strong><code><a href="intl.constants.php#constant.u-malformed-variable-definition">U_MALFORMED_VARIABLE_DEFINITION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A variable definition is invalid.
     </span>
    </dd>
   
   
    <dt id="constant.u-malformed-variable-reference">
     <strong><code><a href="intl.constants.php#constant.u-malformed-variable-reference">U_MALFORMED_VARIABLE_REFERENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A variable reference is invalid.
     </span>
    </dd>
   
   
    <dt id="constant.u-memory-allocation-error">
     <strong><code><a href="intl.constants.php#constant.u-memory-allocation-error">U_MEMORY_ALLOCATION_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Memory allocation error.
     </span>
    </dd>
   
   
    <dt id="constant.u-message-parse-error">
     <strong><code><a href="intl.constants.php#constant.u-message-parse-error">U_MESSAGE_PARSE_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unable to parse a message (message format).
     </span>
    </dd>
   
   
    <dt id="constant.u-mismatched-segment-delimiters">
     <strong><code><a href="intl.constants.php#constant.u-mismatched-segment-delimiters">U_MISMATCHED_SEGMENT_DELIMITERS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-misplaced-anchor-start">
     <strong><code><a href="intl.constants.php#constant.u-misplaced-anchor-start">U_MISPLACED_ANCHOR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A start anchor appears at an illegal position.
     </span>
    </dd>
   
   
    <dt id="constant.u-misplaced-compound-filter">
     <strong><code><a href="intl.constants.php#constant.u-misplaced-compound-filter">U_MISPLACED_COMPOUND_FILTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A compound filter is in an invalid location.
     </span>
    </dd>
   
   
    <dt id="constant.u-misplaced-cursor-offset">
     <strong><code><a href="intl.constants.php#constant.u-misplaced-cursor-offset">U_MISPLACED_CURSOR_OFFSET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A cursor offset occurs at an illegal position.
     </span>
    </dd>
   
   
    <dt id="constant.u-misplaced-quantifier">
     <strong><code><a href="intl.constants.php#constant.u-misplaced-quantifier">U_MISPLACED_QUANTIFIER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A quantifier appears after a segment close delimiter.
     </span>
    </dd>
   
   
    <dt id="constant.u-missing-operator">
     <strong><code><a href="intl.constants.php#constant.u-missing-operator">U_MISSING_OPERATOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A rule contains no operator.
     </span>
    </dd>
   
   
    <dt id="constant.u-missing-resource-error">
     <strong><code><a href="intl.constants.php#constant.u-missing-resource-error">U_MISSING_RESOURCE_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The requested resource cannot be found.
     </span>
    </dd>
   
   
    <dt id="constant.u-missing-segment-close">
     <strong><code><a href="intl.constants.php#constant.u-missing-segment-close">U_MISSING_SEGMENT_CLOSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-ante-contexts">
     <strong><code><a href="intl.constants.php#constant.u-multiple-ante-contexts">U_MULTIPLE_ANTE_CONTEXTS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one ante context.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-compound-filters">
     <strong><code><a href="intl.constants.php#constant.u-multiple-compound-filters">U_MULTIPLE_COMPOUND_FILTERS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one compound filter.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-cursors">
     <strong><code><a href="intl.constants.php#constant.u-multiple-cursors">U_MULTIPLE_CURSORS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one cursor.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-decimal-separators">
     <strong><code><a href="intl.constants.php#constant.u-multiple-decimal-separators">U_MULTIPLE_DECIMAL_SEPARATORS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one decimal separator in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-decimal-seperators">
     <strong><code><a href="intl.constants.php#constant.u-multiple-decimal-seperators">U_MULTIPLE_DECIMAL_SEPERATORS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Alias of <strong><code><a href="intl.constants.php#constant.u-multiple-decimal-separators">U_MULTIPLE_DECIMAL_SEPARATORS</a></code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-exponential-symbols">
     <strong><code><a href="intl.constants.php#constant.u-multiple-exponential-symbols">U_MULTIPLE_EXPONENTIAL_SYMBOLS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one exponent symbol in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-pad-specifiers">
     <strong><code><a href="intl.constants.php#constant.u-multiple-pad-specifiers">U_MULTIPLE_PAD_SPECIFIERS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one pad symbol in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-percent-symbols">
     <strong><code><a href="intl.constants.php#constant.u-multiple-percent-symbols">U_MULTIPLE_PERCENT_SYMBOLS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one percent symbol in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-permill-symbols">
     <strong><code><a href="intl.constants.php#constant.u-multiple-permill-symbols">U_MULTIPLE_PERMILL_SYMBOLS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one permill symbol in number pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-multiple-post-contexts">
     <strong><code><a href="intl.constants.php#constant.u-multiple-post-contexts">U_MULTIPLE_POST_CONTEXTS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      More than one post context.
     </span>
    </dd>
   
   
    <dt id="constant.u-no-space-available">
     <strong><code><a href="intl.constants.php#constant.u-no-space-available">U_NO_SPACE_AVAILABLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      No space available for in-buffer expansion for Arabic shaping.
     </span>
    </dd>
   
   
    <dt id="constant.u-no-write-permission">
     <strong><code><a href="intl.constants.php#constant.u-no-write-permission">U_NO_WRITE_PERMISSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Attempt to modify read-only or constant data.
     </span>
    </dd>
   
   
    <dt id="constant.u-parse-error">
     <strong><code><a href="intl.constants.php#constant.u-parse-error">U_PARSE_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Equivalent to Java <code class="code">ParseException</code>.
     </span>
    </dd>
   
   
    <dt id="constant.u-parse-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-parse-error-limit">U_PARSE_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The limit for Transliterator errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-parse-error-start">
     <strong><code><a href="intl.constants.php#constant.u-parse-error-start">U_PARSE_ERROR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Start of Transliterator errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-pattern-syntax-error">
     <strong><code><a href="intl.constants.php#constant.u-pattern-syntax-error">U_PATTERN_SYNTAX_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Syntax error in format pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-primary-too-long-error">
     <strong><code><a href="intl.constants.php#constant.u-primary-too-long-error">U_PRIMARY_TOO_LONG_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      User tried to set variable top to a primary that is longer than two bytes.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-bad-escape-sequence">
     <strong><code><a href="intl.constants.php#constant.u-regex-bad-escape-sequence">U_REGEX_BAD_ESCAPE_SEQUENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unrecognized backslash escape sequence in pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-bad-interval">
     <strong><code><a href="intl.constants.php#constant.u-regex-bad-interval">U_REGEX_BAD_INTERVAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Error in <code class="literal">{min,max}</code> interval.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-regex-error-limit">U_REGEX_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This must always be the last value to indicate the limit for regexp errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-error-start">
     <strong><code><a href="intl.constants.php#constant.u-regex-error-start">U_REGEX_ERROR_START</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Start of codes indicating Regexp failures.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-internal-error">
     <strong><code><a href="intl.constants.php#constant.u-regex-internal-error">U_REGEX_INTERNAL_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      An internal error (bug) was detected.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-invalid-back-ref">
     <strong><code><a href="intl.constants.php#constant.u-regex-invalid-back-ref">U_REGEX_INVALID_BACK_REF</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Back-reference to a non-existent capture group.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-invalid-flag">
     <strong><code><a href="intl.constants.php#constant.u-regex-invalid-flag">U_REGEX_INVALID_FLAG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Invalid value for match mode flags.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-invalid-state">
     <strong><code><a href="intl.constants.php#constant.u-regex-invalid-state">U_REGEX_INVALID_STATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      <code class="code">RegexMatcher</code> in invalid state for requested operation.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-look-behind-limit">
     <strong><code><a href="intl.constants.php#constant.u-regex-look-behind-limit">U_REGEX_LOOK_BEHIND_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Look-Behind pattern matches must have a bounded maximum length.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-max-lt-min">
     <strong><code><a href="intl.constants.php#constant.u-regex-max-lt-min">U_REGEX_MAX_LT_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      In <code class="literal">{min,max}</code>, max is less than min.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-mismatched-paren">
     <strong><code><a href="intl.constants.php#constant.u-regex-mismatched-paren">U_REGEX_MISMATCHED_PAREN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Incorrectly nested parentheses in regexp pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-number-too-big">
     <strong><code><a href="intl.constants.php#constant.u-regex-number-too-big">U_REGEX_NUMBER_TOO_BIG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Decimal number is too large.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-property-syntax">
     <strong><code><a href="intl.constants.php#constant.u-regex-property-syntax">U_REGEX_PROPERTY_SYNTAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Incorrect Unicode property.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-rule-syntax">
     <strong><code><a href="intl.constants.php#constant.u-regex-rule-syntax">U_REGEX_RULE_SYNTAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Syntax error in regexp pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-set-contains-string">
     <strong><code><a href="intl.constants.php#constant.u-regex-set-contains-string">U_REGEX_SET_CONTAINS_STRING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Regexps cannot have <code class="code">UnicodeSet</code>s containing strings.
     </span>
    </dd>
   
   
    <dt id="constant.u-regex-unimplemented">
     <strong><code><a href="intl.constants.php#constant.u-regex-unimplemented">U_REGEX_UNIMPLEMENTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Use of regexp feature that is not yet implemented.
     </span>
    </dd>
   
   
    <dt id="constant.u-resource-type-mismatch">
     <strong><code><a href="intl.constants.php#constant.u-resource-type-mismatch">U_RESOURCE_TYPE_MISMATCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      An operation is requested over a resource that does not support it.
     </span>
    </dd>
   
   
    <dt id="constant.u-rule-mask-error">
     <strong><code><a href="intl.constants.php#constant.u-rule-mask-error">U_RULE_MASK_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A rule is hidden by an earlier more general rule.
     </span>
    </dd>
   
   
    <dt id="constant.u-safeclone-allocated-warning">
     <strong><code><a href="intl.constants.php#constant.u-safeclone-allocated-warning">U_SAFECLONE_ALLOCATED_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A <code class="code">SafeClone</code> operation required allocating memory (informational only).
     </span>
    </dd>
   
   
    <dt id="constant.u-sort-key-too-short-warning">
     <strong><code><a href="intl.constants.php#constant.u-sort-key-too-short-warning">U_SORT_KEY_TOO_SHORT_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Number of levels requested in <code class="code">getBound</code> is higher
      than the number of levels in the sort key.
     </span>
    </dd>
   
   
    <dt id="constant.u-standard-error-limit">
     <strong><code><a href="intl.constants.php#constant.u-standard-error-limit">U_STANDARD_ERROR_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This must always be the last value to indicate the limit for standard errors.
     </span>
    </dd>
   
   
    <dt id="constant.u-state-old-warning">
     <strong><code><a href="intl.constants.php#constant.u-state-old-warning">U_STATE_OLD_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      ICU has to use compatibility layer to construct the service.
      Expect performance/memory usage degradation.
     </span>
    </dd>
   
   
    <dt id="constant.u-state-too-old-error">
     <strong><code><a href="intl.constants.php#constant.u-state-too-old-error">U_STATE_TOO_OLD_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      ICU cannot construct a service from this state, as it is no longer supported.
     </span>
    </dd>
   
   
    <dt id="constant.u-string-not-terminated-warning">
     <strong><code><a href="intl.constants.php#constant.u-string-not-terminated-warning">U_STRING_NOT_TERMINATED_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      An output string could not be NUL-terminated because output <code class="code">length==destCapacity</code>.
     </span>
    </dd>
   
   
    <dt id="constant.u-stringprep-check-bidi-error">
     <strong><code><a href="intl.constants.php#constant.u-stringprep-check-bidi-error">U_STRINGPREP_CHECK_BIDI_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Alias of <strong><code><a href="intl.constants.php#constant.u-idna-check-bidi-error">U_IDNA_CHECK_BIDI_ERROR</a></code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.u-stringprep-prohibited-error">
     <strong><code><a href="intl.constants.php#constant.u-stringprep-prohibited-error">U_STRINGPREP_PROHIBITED_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Alias of <strong><code><a href="intl.constants.php#constant.u-idna-prohibited-error">U_IDNA_PROHIBITED_ERROR</a></code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.u-stringprep-unassigned-error">
     <strong><code><a href="intl.constants.php#constant.u-stringprep-unassigned-error">U_STRINGPREP_UNASSIGNED_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Alias of <strong><code><a href="intl.constants.php#constant.u-idna-unassigned-error">U_IDNA_UNASSIGNED_ERROR</a></code></strong>.
     </span>
    </dd>
   
   
    <dt id="constant.u-too-many-aliases-error">
     <strong><code><a href="intl.constants.php#constant.u-too-many-aliases-error">U_TOO_MANY_ALIASES_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      There are too many aliases in the path to the requested resource.
      It is very possible that a circular alias definition has occured.
     </span>
    </dd>
   
   
    <dt id="constant.u-trailing-backslash">
     <strong><code><a href="intl.constants.php#constant.u-trailing-backslash">U_TRAILING_BACKSLASH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A dangling backslash.
     </span>
    </dd>
   
   
    <dt id="constant.u-truncated-char-found">
     <strong><code><a href="intl.constants.php#constant.u-truncated-char-found">U_TRUNCATED_CHAR_FOUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Character conversion: Incomplete input sequence.
     </span>
    </dd>
   
   
    <dt id="constant.u-unclosed-segment">
     <strong><code><a href="intl.constants.php#constant.u-unclosed-segment">U_UNCLOSED_SEGMENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A closing <code class="literal">&#039;)&#039;</code> is missing.
     </span>
    </dd>
   
   
    <dt id="constant.u-undefined-segment-reference">
     <strong><code><a href="intl.constants.php#constant.u-undefined-segment-reference">U_UNDEFINED_SEGMENT_REFERENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A segment reference does not correspond to a defined segment.
     </span>
    </dd>
   
   
    <dt id="constant.u-undefined-variable">
     <strong><code><a href="intl.constants.php#constant.u-undefined-variable">U_UNDEFINED_VARIABLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A variable reference does not correspond to a defined variable.
     </span>
    </dd>
   
   
    <dt id="constant.u-unexpected-token">
     <strong><code><a href="intl.constants.php#constant.u-unexpected-token">U_UNEXPECTED_TOKEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Syntax error in format pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-unmatched-braces">
     <strong><code><a href="intl.constants.php#constant.u-unmatched-braces">U_UNMATCHED_BRACES</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Braces do not match in message pattern.
     </span>
    </dd>
   
   
    <dt id="constant.u-unquoted-special">
     <strong><code><a href="intl.constants.php#constant.u-unquoted-special">U_UNQUOTED_SPECIAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A special character was not quoted or escaped.
     </span>
    </dd>
   
   
    <dt id="constant.u-unsupported-attribute">
     <strong><code><a href="intl.constants.php#constant.u-unsupported-attribute">U_UNSUPPORTED_ATTRIBUTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-unsupported-error">
     <strong><code><a href="intl.constants.php#constant.u-unsupported-error">U_UNSUPPORTED_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Requested operation not supported in current context.
     </span>
    </dd>
   
   
    <dt id="constant.u-unsupported-escape-sequence">
     <strong><code><a href="intl.constants.php#constant.u-unsupported-escape-sequence">U_UNSUPPORTED_ESCAPE_SEQUENCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      ISO-2022 unsupported escape sequence.
     </span>
    </dd>
   
   
    <dt id="constant.u-unsupported-property">
     <strong><code><a href="intl.constants.php#constant.u-unsupported-property">U_UNSUPPORTED_PROPERTY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unused as of ICU 2.4.
     </span>
    </dd>
   
   
    <dt id="constant.u-unterminated-quote">
     <strong><code><a href="intl.constants.php#constant.u-unterminated-quote">U_UNTERMINATED_QUOTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A closing single quote is missing.
     </span>
    </dd>
   
   
    <dt id="constant.u-useless-collator-error">
     <strong><code><a href="intl.constants.php#constant.u-useless-collator-error">U_USELESS_COLLATOR_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Collator is options only and no base is specified.
     </span>
    </dd>
   
   
    <dt id="constant.u-using-default-warning">
     <strong><code><a href="intl.constants.php#constant.u-using-default-warning">U_USING_DEFAULT_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A resource bundle lookup returned a result from the root locale (not an error).
     </span>
    </dd>
   
   
    <dt id="constant.u-using-fallback-warning">
     <strong><code><a href="intl.constants.php#constant.u-using-fallback-warning">U_USING_FALLBACK_WARNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      A resource bundle lookup returned a fallback result (not an error).
     </span>
    </dd>
   
   
    <dt id="constant.u-variable-range-exhausted">
     <strong><code><a href="intl.constants.php#constant.u-variable-range-exhausted">U_VARIABLE_RANGE_EXHAUSTED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Too many stand-ins generated for the given variable range.
     </span>
    </dd>
   
   
    <dt id="constant.u-variable-range-overlap">
     <strong><code><a href="intl.constants.php#constant.u-variable-range-overlap">U_VARIABLE_RANGE_OVERLAP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      The variable range overlaps characters used in rules.
     </span>
    </dd>
   
   
    <dt id="constant.u-zero-error">
     <strong><code><a href="intl.constants.php#constant.u-zero-error">U_ZERO_ERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      No error, no warning.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fintl.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=intl.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intl.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125409">  <div class="votes">
    <div id="Vu125409">
    <a href="/manual/vote-note.php?id=125409&amp;page=intl.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125409">
    <a href="/manual/vote-note.php?id=125409&amp;page=intl.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125409" title="77% like this...">
    5
    </div>
  </div>
  <a href="#125409" class="name">
  <strong class="user"><em>PHP Guru</em></strong></a><a class="genanchor" href="#125409"> &para;</a><div class="date" title="2020-10-03 03:45"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125409">
<div class="phpcode"><code><span class="html">idn_to_ascii('faß.de');<br /><br />will return fass.de<br />(Due to Germans using the ß symbol as a contraction of ss)<br /><br />idn_to_ascii('faß.de', IDNA_NONTRANSITIONAL_TO_ASCII);<br /><br />will return xn--fa-hia.de<br />(This is the correct behavior too allow faß.de and fass.de to be registered as different domain names.)<br /><br />idn_to_utf8('xn--fa-hia.de');<br /><br />will return fass.de<br /><br />idn_to_utf8('xn--fa-hia.de', IDNA_NONTRANSITIONAL_TO_UNICODE);<br /><br />will return faß.de<br />(Again this is the correct behavior.)</span></code></div>
  </div>
 </div>
  <div class="note" id="128288">  <div class="votes">
    <div id="Vu128288">
    <a href="/manual/vote-note.php?id=128288&amp;page=intl.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128288">
    <a href="/manual/vote-note.php?id=128288&amp;page=intl.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128288" title="66% like this...">
    1
    </div>
  </div>
  <a href="#128288" class="name">
  <strong class="user"><em>rg at mejoramos dot com</em></strong></a><a class="genanchor" href="#128288"> &para;</a><div class="date" title="2023-03-05 12:12"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128288">
<div class="phpcode"><code><span class="html">to date (MARCH 2023), the version Spanish not give info about the constant `INTL_ICU_VERSION`, take a look to English version, with details about the important constant `INTL_ICU_VERSION`</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=intl.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/intl.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.intl.php">intl</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.intl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="intl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="intl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="intl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.collator.php" title="Collator">Collator</a>
                        </li>
                                                <li class="">
                            <a href="class.numberformatter.php" title="NumberFormatter">NumberFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.locale.php" title="Locale">Locale</a>
                        </li>
                                                <li class="">
                            <a href="class.normalizer.php" title="Normalizer">Normalizer</a>
                        </li>
                                                <li class="">
                            <a href="class.messageformatter.php" title="MessageFormatter">MessageFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcalendar.php" title="IntlCalendar">IntlCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlgregoriancalendar.php" title="IntlGregorianCalendar">IntlGregorianCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intltimezone.php" title="IntlTimeZone">IntlTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="class.intldateformatter.php" title="IntlDateFormatter">IntlDateFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.resourcebundle.php" title="ResourceBundle">ResourceBundle</a>
                        </li>
                                                <li class="">
                            <a href="class.spoofchecker.php" title="Spoofchecker">Spoofchecker</a>
                        </li>
                                                <li class="">
                            <a href="class.transliterator.php" title="Transliterator">Transliterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlbreakiterator.php" title="IntlBreakIterator">IntlBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlrulebasedbreakiterator.php" title="IntlRuleBasedBreakIterator">IntlRuleBasedBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcodepointbreakiterator.php" title="IntlCodePointBreakIterator">IntlCodePointBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intldatepatterngenerator.php" title="IntlDatePatternGenerator">IntlDatePatternGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlpartsiterator.php" title="IntlPartsIterator">IntlPartsIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.uconverter.php" title="UConverter">UConverter</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.grapheme.php" title="Grapheme Functions">Grapheme Functions</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.idn.php" title="IDN Functions">IDN Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.intlchar.php" title="IntlChar">IntlChar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlexception.php" title="IntlException">IntlException</a>
                        </li>
                                                <li class="">
                            <a href="class.intliterator.php" title="IntlIterator">IntlIterator</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.php" title="intl Functions">intl Functions</a>
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
