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

 <link rel="canonical" href="https://www.php.net/manual/en/rpminfo.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/rpminfo.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/rpminfo.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.rpminfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/rpminfo.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.rpminfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/rpminfo.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/rpminfo.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/rpminfo.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/rpminfo.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/rpminfo.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/rpminfo.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/rpminfo.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/rpminfo.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/rpminfo.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/rpminfo.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/rpminfo.constants.php" hreflang="zh">

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
        <a href="ref.rpminfo.php">
          RpmInfo Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="rpminfo.installation.php">
          &laquo; Installation via PECL        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.rpminfo.php'>RpmInfo</a></li>      </ul>
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
            <option value='en/rpminfo.constants.php' selected="selected">English</option>
            <option value='de/rpminfo.constants.php'>German</option>
            <option value='es/rpminfo.constants.php'>Spanish</option>
            <option value='fr/rpminfo.constants.php'>French</option>
            <option value='it/rpminfo.constants.php'>Italian</option>
            <option value='ja/rpminfo.constants.php'>Japanese</option>
            <option value='pt_BR/rpminfo.constants.php'>Brazilian Portuguese</option>
            <option value='ru/rpminfo.constants.php'>Russian</option>
            <option value='tr/rpminfo.constants.php'>Turkish</option>
            <option value='uk/rpminfo.constants.php'>Ukrainian</option>
            <option value='zh/rpminfo.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="rpminfo.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <dl>
  <strong class="title">Miscellaneous constants</strong>
  
   <dt id="constant.rpmversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmversion">RPMVERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     System librpm version.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">RPM Senses</strong>
  
   <dt id="constant.rpmsense-any">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-any">RPMSENSE_ANY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-less">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-less">RPMSENSE_LESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-greater">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-greater">RPMSENSE_GREATER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-equal">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-equal">RPMSENSE_EQUAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-posttrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-posttrans">RPMSENSE_POSTTRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-prereq">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-prereq">RPMSENSE_PREREQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-pretrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-pretrans">RPMSENSE_PRETRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-interp">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-interp">RPMSENSE_INTERP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-script-pre">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-script-pre">RPMSENSE_SCRIPT_PRE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-script-post">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-script-post">RPMSENSE_SCRIPT_POST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-script-preun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-script-preun">RPMSENSE_SCRIPT_PREUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-script-postun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-script-postun">RPMSENSE_SCRIPT_POSTUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-script-verify">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-script-verify">RPMSENSE_SCRIPT_VERIFY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-find-requires">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-find-requires">RPMSENSE_FIND_REQUIRES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-find-provides">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-find-provides">RPMSENSE_FIND_PROVIDES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-triggerin">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-triggerin">RPMSENSE_TRIGGERIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-triggerun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-triggerun">RPMSENSE_TRIGGERUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-triggerpostun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-triggerpostun">RPMSENSE_TRIGGERPOSTUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-missingok">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-missingok">RPMSENSE_MISSINGOK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-rpmlib">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-rpmlib">RPMSENSE_RPMLIB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-triggerprein">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-triggerprein">RPMSENSE_TRIGGERPREIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-keyring">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-keyring">RPMSENSE_KEYRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmsense-config">
    <strong><code><a href="rpminfo.constants.php#constant.rpmsense-config">RPMSENSE_CONFIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">RPM Mire</strong>
  
   <dt id="constant.rpmmire-default">
    <strong><code><a href="rpminfo.constants.php#constant.rpmmire-default">RPMMIRE_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Search pattern is a regular expression with
     <code class="literal">\.</code>, <code class="literal">.*</code>,
     and <code class="literal">^...$</code> added.
    </span>
   </dd>
  
  
   <dt id="constant.rpmmire-strcmp">
    <strong><code><a href="rpminfo.constants.php#constant.rpmmire-strcmp">RPMMIRE_STRCMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Search pattern is a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>,
     using <code class="code">strcmp(3)</code>.
    </span>
   </dd>
  
  
   <dt id="constant.rpmmire-regex">
    <strong><code><a href="rpminfo.constants.php#constant.rpmmire-regex">RPMMIRE_REGEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Search pattern is a regular expression,
     using <code class="code">regcomp(3)</code>.
    </span>
   </dd>
  
  
   <dt id="constant.rpmmire-glob">
    <strong><code><a href="rpminfo.constants.php#constant.rpmmire-glob">RPMMIRE_GLOB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Search pattern is a glob expression,
     using <code class="code">fnmatch(3)</code>.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">RPM tags</strong>
  
   <dt id="constant.rpmtag-arch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-arch">RPMTAG_ARCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-archsuffix">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-archsuffix">RPMTAG_ARCHSUFFIX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.18
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-archivesize">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-archivesize">RPMTAG_ARCHIVESIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-basenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-basenames">RPMTAG_BASENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Name (not path) of files, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-bugurl">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-bugurl">RPMTAG_BUGURL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-buildarchs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-buildarchs">RPMTAG_BUILDARCHS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-buildhost">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-buildhost">RPMTAG_BUILDHOST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-buildtime">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-buildtime">RPMTAG_BUILDTIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-c">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-c">RPMTAG_C</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-changelogname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-changelogname">RPMTAG_CHANGELOGNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-changelogtext">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-changelogtext">RPMTAG_CHANGELOGTEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-changelogtime">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-changelogtime">RPMTAG_CHANGELOGTIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-classdict">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-classdict">RPMTAG_CLASSDICT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-conflictflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-conflictflags">RPMTAG_CONFLICTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-conflictname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-conflictname">RPMTAG_CONFLICTNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Conflicting dependencies, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-conflictnevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-conflictnevrs">RPMTAG_CONFLICTNEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-conflicts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-conflicts">RPMTAG_CONFLICTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-conflictversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-conflictversion">RPMTAG_CONFLICTVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-cookie">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-cookie">RPMTAG_COOKIE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-dbinstance">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-dbinstance">RPMTAG_DBINSTANCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-dependsdict">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-dependsdict">RPMTAG_DEPENDSDICT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-description">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-description">RPMTAG_DESCRIPTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-dirindexes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-dirindexes">RPMTAG_DIRINDEXES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-dirnames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-dirnames">RPMTAG_DIRNAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Directory of files, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-distribution">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-distribution">RPMTAG_DISTRIBUTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-disttag">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-disttag">RPMTAG_DISTTAG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-disturl">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-disturl">RPMTAG_DISTURL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-dsaheader">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-dsaheader">RPMTAG_DSAHEADER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-e">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-e">RPMTAG_E</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-encoding">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-encoding">RPMTAG_ENCODING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-enhanceflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-enhanceflags">RPMTAG_ENHANCEFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-enhancename">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-enhancename">RPMTAG_ENHANCENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Weak dependencies, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-enhancenevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-enhancenevrs">RPMTAG_ENHANCENEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-enhances">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-enhances">RPMTAG_ENHANCES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-enhanceversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-enhanceversion">RPMTAG_ENHANCEVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-epoch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-epoch">RPMTAG_EPOCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-epochnum">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-epochnum">RPMTAG_EPOCHNUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-evr">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-evr">RPMTAG_EVR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-excludearch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-excludearch">RPMTAG_EXCLUDEARCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-excludeos">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-excludeos">RPMTAG_EXCLUDEOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-exclusivearch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-exclusivearch">RPMTAG_EXCLUSIVEARCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-exclusiveos">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-exclusiveos">RPMTAG_EXCLUSIVEOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filecaps">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filecaps">RPMTAG_FILECAPS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileclass">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileclass">RPMTAG_FILECLASS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filecolors">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filecolors">RPMTAG_FILECOLORS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filecontexts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filecontexts">RPMTAG_FILECONTEXTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filedependsn">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filedependsn">RPMTAG_FILEDEPENDSN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filedependsx">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filedependsx">RPMTAG_FILEDEPENDSX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filedevices">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filedevices">RPMTAG_FILEDEVICES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filedigestalgo">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filedigestalgo">RPMTAG_FILEDIGESTALGO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filedigests">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filedigests">RPMTAG_FILEDIGESTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileflags">RPMTAG_FILEFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filegroupname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filegroupname">RPMTAG_FILEGROUPNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileinodes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileinodes">RPMTAG_FILEINODES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filelangs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filelangs">RPMTAG_FILELANGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filelinktos">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filelinktos">RPMTAG_FILELINKTOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filemd5s">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filemd5s">RPMTAG_FILEMD5S</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filemodes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filemodes">RPMTAG_FILEMODES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filemtimes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filemtimes">RPMTAG_FILEMTIMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filenames">RPMTAG_FILENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filenlinks">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filenlinks">RPMTAG_FILENLINKS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileprovide">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileprovide">RPMTAG_FILEPROVIDE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filerdevs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filerdevs">RPMTAG_FILERDEVS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filerequire">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filerequire">RPMTAG_FILEREQUIRE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filesignaturelength">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filesignaturelength">RPMTAG_FILESIGNATURELENGTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filesignatures">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filesignatures">RPMTAG_FILESIGNATURES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filesizes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filesizes">RPMTAG_FILESIZES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filestates">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filestates">RPMTAG_FILESTATES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerconds">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerconds">RPMTAG_FILETRIGGERCONDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerflags">RPMTAG_FILETRIGGERFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerindex">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerindex">RPMTAG_FILETRIGGERINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggername">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggername">RPMTAG_FILETRIGGERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File trigger name, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerpriorities">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerpriorities">RPMTAG_FILETRIGGERPRIORITIES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerscriptflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerscriptflags">RPMTAG_FILETRIGGERSCRIPTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerscriptprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerscriptprog">RPMTAG_FILETRIGGERSCRIPTPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerscripts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerscripts">RPMTAG_FILETRIGGERSCRIPTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggertype">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggertype">RPMTAG_FILETRIGGERTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-filetriggerversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-filetriggerversion">RPMTAG_FILETRIGGERVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileusername">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileusername">RPMTAG_FILEUSERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fileverifyflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fileverifyflags">RPMTAG_FILEVERIFYFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-fscontexts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-fscontexts">RPMTAG_FSCONTEXTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-gif">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-gif">RPMTAG_GIF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-group">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-group">RPMTAG_GROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Group of the package, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-hdrid">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-hdrid">RPMTAG_HDRID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Deprecated, use <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sha1header">RPMTAG_SHA1HEADER</a></code></strong> instead. Removed in librpm 6.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headercolor">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headercolor">RPMTAG_HEADERCOLOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headeri18ntable">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headeri18ntable">RPMTAG_HEADERI18NTABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headerimage">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headerimage">RPMTAG_HEADERIMAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headerimmutable">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headerimmutable">RPMTAG_HEADERIMMUTABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headerregions">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headerregions">RPMTAG_HEADERREGIONS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-headersignatures">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-headersignatures">RPMTAG_HEADERSIGNATURES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-icon">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-icon">RPMTAG_ICON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-installcolor">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-installcolor">RPMTAG_INSTALLCOLOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-installtid">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-installtid">RPMTAG_INSTALLTID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Installation transaction ID, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-installtime">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-installtime">RPMTAG_INSTALLTIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-instfilenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-instfilenames">RPMTAG_INSTFILENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Path of files, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-instprefixes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-instprefixes">RPMTAG_INSTPREFIXES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-license">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-license">RPMTAG_LICENSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-longarchivesize">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-longarchivesize">RPMTAG_LONGARCHIVESIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-longfilesizes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-longfilesizes">RPMTAG_LONGFILESIZES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-longsigsize">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-longsigsize">RPMTAG_LONGSIGSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-longsize">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-longsize">RPMTAG_LONGSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-modularitylabel">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-modularitylabel">RPMTAG_MODULARITYLABEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-n">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-n">RPMTAG_N</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-name">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-name">RPMTAG_NAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Package name, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nevr">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nevr">RPMTAG_NEVR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nevra">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nevra">RPMTAG_NEVRA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nopatch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nopatch">RPMTAG_NOPATCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nosource">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nosource">RPMTAG_NOSOURCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nvr">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nvr">RPMTAG_NVR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-nvra">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-nvra">RPMTAG_NVRA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-o">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-o">RPMTAG_O</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-obsoleteflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-obsoleteflags">RPMTAG_OBSOLETEFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-obsoletename">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-obsoletename">RPMTAG_OBSOLETENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Obsoleted packages, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-obsoletenevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-obsoletenevrs">RPMTAG_OBSOLETENEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-obsoletes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-obsoletes">RPMTAG_OBSOLETES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-obsoleteversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-obsoleteversion">RPMTAG_OBSOLETEVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldenhances">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldenhances">RPMTAG_OLDENHANCES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldenhancesflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldenhancesflags">RPMTAG_OLDENHANCESFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldenhancesname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldenhancesname">RPMTAG_OLDENHANCESNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldenhancesversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldenhancesversion">RPMTAG_OLDENHANCESVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldfilenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldfilenames">RPMTAG_OLDFILENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldsuggests">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldsuggests">RPMTAG_OLDSUGGESTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldsuggestsflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldsuggestsflags">RPMTAG_OLDSUGGESTSFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldsuggestsname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldsuggestsname">RPMTAG_OLDSUGGESTSNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-oldsuggestsversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-oldsuggestsversion">RPMTAG_OLDSUGGESTSVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-optflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-optflags">RPMTAG_OPTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-orderflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-orderflags">RPMTAG_ORDERFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-ordername">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-ordername">RPMTAG_ORDERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-orderversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-orderversion">RPMTAG_ORDERVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-origbasenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-origbasenames">RPMTAG_ORIGBASENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-origdirindexes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-origdirindexes">RPMTAG_ORIGDIRINDEXES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-origdirnames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-origdirnames">RPMTAG_ORIGDIRNAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-origfilenames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-origfilenames">RPMTAG_ORIGFILENAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-os">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-os">RPMTAG_OS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-p">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-p">RPMTAG_P</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-packager">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-packager">RPMTAG_PACKAGER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-patch">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-patch">RPMTAG_PATCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-patchesflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-patchesflags">RPMTAG_PATCHESFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-patchesname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-patchesname">RPMTAG_PATCHESNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-patchesversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-patchesversion">RPMTAG_PATCHESVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloadcompressor">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloadcompressor">RPMTAG_PAYLOADCOMPRESSOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloaddigest">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloaddigest">RPMTAG_PAYLOADDIGEST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloaddigestalt">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloaddigestalt">RPMTAG_PAYLOADDIGESTALT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     With librpm &gt;= 4.16.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloaddigestalgo">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloaddigestalgo">RPMTAG_PAYLOADDIGESTALGO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloadflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloadflags">RPMTAG_PAYLOADFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-payloadformat">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-payloadformat">RPMTAG_PAYLOADFORMAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-pkgid">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-pkgid">RPMTAG_PKGID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Deprecated, use <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sigmd5">RPMTAG_SIGMD5</a></code></strong> instead. Removed in librpm 6.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-platform">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-platform">RPMTAG_PLATFORM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-policies">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-policies">RPMTAG_POLICIES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-policyflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-policyflags">RPMTAG_POLICYFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-policynames">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-policynames">RPMTAG_POLICYNAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-policytypes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-policytypes">RPMTAG_POLICYTYPES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-policytypesindexes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-policytypesindexes">RPMTAG_POLICYTYPESINDEXES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postin">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postin">RPMTAG_POSTIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postinflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postinflags">RPMTAG_POSTINFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postinprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postinprog">RPMTAG_POSTINPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-posttrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-posttrans">RPMTAG_POSTTRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-posttransflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-posttransflags">RPMTAG_POSTTRANSFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-posttransprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-posttransprog">RPMTAG_POSTTRANSPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postun">RPMTAG_POSTUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postunflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postunflags">RPMTAG_POSTUNFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postunprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postunprog">RPMTAG_POSTUNPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postuntrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postuntrans">RPMTAG_POSTUNTRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postuntransflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postuntransflags">RPMTAG_POSTUNTRANSFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-postuntransprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-postuntransprog">RPMTAG_POSTUNTRANSPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-prefixes">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-prefixes">RPMTAG_PREFIXES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-prein">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-prein">RPMTAG_PREIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preinflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preinflags">RPMTAG_PREINFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preinprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preinprog">RPMTAG_PREINPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-pretrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-pretrans">RPMTAG_PRETRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-pretransflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-pretransflags">RPMTAG_PRETRANSFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-pretransprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-pretransprog">RPMTAG_PRETRANSPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preun">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preun">RPMTAG_PREUN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preunflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preunflags">RPMTAG_PREUNFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preunprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preunprog">RPMTAG_PREUNPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preuntrans">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preuntrans">RPMTAG_PREUNTRANS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preuntransflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preuntransflags">RPMTAG_PREUNTRANSFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-preuntransprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-preuntransprog">RPMTAG_PREUNTRANSPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-provideflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-provideflags">RPMTAG_PROVIDEFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-providename">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-providename">RPMTAG_PROVIDENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Provided dependencies, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-providenevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-providenevrs">RPMTAG_PROVIDENEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-provides">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-provides">RPMTAG_PROVIDES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-provideversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-provideversion">RPMTAG_PROVIDEVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-pubkeys">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-pubkeys">RPMTAG_PUBKEYS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-r">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-r">RPMTAG_R</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recommendflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recommendflags">RPMTAG_RECOMMENDFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recommendname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recommendname">RPMTAG_RECOMMENDNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Recommended weak dependencies, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recommendnevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recommendnevrs">RPMTAG_RECOMMENDNEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recommends">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recommends">RPMTAG_RECOMMENDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recommendversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recommendversion">RPMTAG_RECOMMENDVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-recontexts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-recontexts">RPMTAG_RECONTEXTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-release">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-release">RPMTAG_RELEASE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-removetid">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-removetid">RPMTAG_REMOVETID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-requireflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-requireflags">RPMTAG_REQUIREFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-requirename">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-requirename">RPMTAG_REQUIRENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Required dependencies, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-requirenevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-requirenevrs">RPMTAG_REQUIRENEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-requires">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-requires">RPMTAG_REQUIRES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-requireversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-requireversion">RPMTAG_REQUIREVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-rpmversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-rpmversion">RPMTAG_RPMVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-rsaheader">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-rsaheader">RPMTAG_RSAHEADER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sha1header">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sha1header">RPMTAG_SHA1HEADER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     SHA1 signature, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sha256header">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sha256header">RPMTAG_SHA256HEADER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-siggpg">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-siggpg">RPMTAG_SIGGPG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sigmd5">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sigmd5">RPMTAG_SIGMD5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     MD5 signature, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sigpgp">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sigpgp">RPMTAG_SIGPGP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sigsize">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sigsize">RPMTAG_SIGSIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-size">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-size">RPMTAG_SIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-source">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-source">RPMTAG_SOURCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sourcepackage">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sourcepackage">RPMTAG_SOURCEPACKAGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sourcepkgid">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sourcepkgid">RPMTAG_SOURCEPKGID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sourcerpm">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sourcerpm">RPMTAG_SOURCERPM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-spec">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-spec">RPMTAG_SPEC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.18
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-suggestflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-suggestflags">RPMTAG_SUGGESTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-suggestname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-suggestname">RPMTAG_SUGGESTNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Suggested weak dependencies, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-suggestnevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-suggestnevrs">RPMTAG_SUGGESTNEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-suggests">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-suggests">RPMTAG_SUGGESTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-suggestversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-suggestversion">RPMTAG_SUGGESTVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-summary">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-summary">RPMTAG_SUMMARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-supplementflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-supplementflags">RPMTAG_SUPPLEMENTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-supplementname">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-supplementname">RPMTAG_SUPPLEMENTNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Weak dependencies, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-supplementnevrs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-supplementnevrs">RPMTAG_SUPPLEMENTNEVRS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-supplements">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-supplements">RPMTAG_SUPPLEMENTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-supplementversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-supplementversion">RPMTAG_SUPPLEMENTVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-sysusers">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-sysusers">RPMTAG_SYSUSERS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.19
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerconds">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerconds">RPMTAG_TRANSFILETRIGGERCONDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerflags">RPMTAG_TRANSFILETRIGGERFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerindex">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerindex">RPMTAG_TRANSFILETRIGGERINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggername">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggername">RPMTAG_TRANSFILETRIGGERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Transaction file trigger name, with database index, requires librpm &gt;= 4.13.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerpriorities">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerpriorities">RPMTAG_TRANSFILETRIGGERPRIORITIES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerscriptflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerscriptflags">RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerscriptprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerscriptprog">RPMTAG_TRANSFILETRIGGERSCRIPTPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerscripts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerscripts">RPMTAG_TRANSFILETRIGGERSCRIPTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggertype">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggertype">RPMTAG_TRANSFILETRIGGERTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-transfiletriggerversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-transfiletriggerversion">RPMTAG_TRANSFILETRIGGERVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-translationurl">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-translationurl">RPMTAG_TRANSLATIONURL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.18
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerconds">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerconds">RPMTAG_TRIGGERCONDS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerflags">RPMTAG_TRIGGERFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerindex">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerindex">RPMTAG_TRIGGERINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggername">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggername">RPMTAG_TRIGGERNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Trigger name, with database index.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerscriptflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerscriptflags">RPMTAG_TRIGGERSCRIPTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerscriptprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerscriptprog">RPMTAG_TRIGGERSCRIPTPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerscripts">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerscripts">RPMTAG_TRIGGERSCRIPTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggertype">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggertype">RPMTAG_TRIGGERTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-triggerversion">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-triggerversion">RPMTAG_TRIGGERVERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-upstreamreleases">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-upstreamreleases">RPMTAG_UPSTREAMRELEASES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Requires librpm &gt;= 4.18
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-url">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-url">RPMTAG_URL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-v">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-v">RPMTAG_V</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-vcs">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-vcs">RPMTAG_VCS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-vendor">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-vendor">RPMTAG_VENDOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-verbose">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-verbose">RPMTAG_VERBOSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-verifyscript">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-verifyscript">RPMTAG_VERIFYSCRIPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-verifyscriptflags">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-verifyscriptflags">RPMTAG_VERIFYSCRIPTFLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-verifyscriptprog">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-verifyscriptprog">RPMTAG_VERIFYSCRIPTPROG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-veritysignaturealgo">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-veritysignaturealgo">RPMTAG_VERITYSIGNATUREALGO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     With librpm &gt;= 4.17.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-veritysignatures">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-veritysignatures">RPMTAG_VERITYSIGNATURES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     With librpm &gt;= 4.17.
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-version">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-version">RPMTAG_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.rpmtag-xpm">
    <strong><code><a href="rpminfo.constants.php#constant.rpmtag-xpm">RPMTAG_XPM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/rpminfo/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frpminfo.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=rpminfo.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/rpminfo.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.rpminfo.php">RpmInfo</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.rpminfo.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="rpminfo.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="rpminfo.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.rpminfo.php" title="RpmInfo Functions">RpmInfo Functions</a>
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
