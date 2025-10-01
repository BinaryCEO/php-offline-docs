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

 <link rel="canonical" href="https://www.php.net/manual/en/gmagick.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/gmagick.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/gmagick.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.gmagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/gmagick.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/gmagick.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/gmagick.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/gmagick.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/gmagick.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/gmagick.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/gmagick.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/gmagick.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/gmagick.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/gmagick.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/gmagick.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/gmagick.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/gmagick.constants.php" hreflang="zh">

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
        <a href="gmagick.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="gmagick.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.gmagick.php'>Gmagick</a></li>      </ul>
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
            <option value='en/gmagick.constants.php' selected="selected">English</option>
            <option value='de/gmagick.constants.php'>German</option>
            <option value='es/gmagick.constants.php'>Spanish</option>
            <option value='fr/gmagick.constants.php'>French</option>
            <option value='it/gmagick.constants.php'>Italian</option>
            <option value='ja/gmagick.constants.php'>Japanese</option>
            <option value='pt_BR/gmagick.constants.php'>Brazilian Portuguese</option>
            <option value='ru/gmagick.constants.php'>Russian</option>
            <option value='tr/gmagick.constants.php'>Turkish</option>
            <option value='uk/gmagick.constants.php'>Ukrainian</option>
            <option value='zh/gmagick.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="gmagick.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl id="gmagick.constants.colortype">
  <strong class="title">Colortype constants</strong>
  
   <dt id="gmagick.constants.color-black">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-black">Gmagick::COLOR_BLACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Black
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-blue">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-blue">Gmagick::COLOR_BLUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Blue
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-cyan">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-cyan">Gmagick::COLOR_CYAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Cyan
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-green">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-green">Gmagick::COLOR_GREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Green
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-red">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-red">Gmagick::COLOR_RED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Red
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-yellow">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-yellow">Gmagick::COLOR_YELLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Yellow
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-magenta">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-magenta">Gmagick::COLOR_MAGENTA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Magenta
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-opacity">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-opacity">Gmagick::COLOR_OPACITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Opacity
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-alpha">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-alpha">Gmagick::COLOR_ALPHA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alpha
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.color-fuzz">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.color-fuzz">Gmagick::COLOR_FUZZ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fuzz
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.compositeop">
  <strong class="title">Composite Operator Constants</strong>
  
   <dt id="gmagick.constants.composite-default">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-default">Gmagick::COMPOSITE_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The default composite operator
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-undefined">Gmagick::COMPOSITE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Undefined composite operator
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-no">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-no">Gmagick::COMPOSITE_NO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No composite operator defined
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-add">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-add">Gmagick::COMPOSITE_ADD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The result of image + image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-atop">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-atop">Gmagick::COMPOSITE_ATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The result is the same shape as image, with composite image obscuring image where the image shapes overlap
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-blend">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-blend">Gmagick::COMPOSITE_BLEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Blends the image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-bumpmap">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-bumpmap">Gmagick::COMPOSITE_BUMPMAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-clear">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-clear">Gmagick::COMPOSITE_CLEAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Makes the target image transparent
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-colorburn">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-colorburn">Gmagick::COMPOSITE_COLORBURN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens the destination image to reflect the source image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-colordodge">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-colordodge">Gmagick::COMPOSITE_COLORDODGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Brightens the destination image to reflect the source image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-colorize">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-colorize">Gmagick::COMPOSITE_COLORIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Colorizes the target image using the composite image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copyblack">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copyblack">Gmagick::COMPOSITE_COPYBLACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies black from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copyblue">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copyblue">Gmagick::COMPOSITE_COPYBLUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies blue from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copy">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copy">Gmagick::COMPOSITE_COPY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies the source image on the target image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copycyan">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copycyan">Gmagick::COMPOSITE_COPYCYAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies cyan from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copygreen">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copygreen">Gmagick::COMPOSITE_COPYGREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies green from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copymagenta">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copymagenta">Gmagick::COMPOSITE_COPYMAGENTA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies magenta from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copyopacity">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copyopacity">Gmagick::COMPOSITE_COPYOPACITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies opacity from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copyred">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copyred">Gmagick::COMPOSITE_COPYRED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies red from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-copyyellow">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-copyyellow">Gmagick::COMPOSITE_COPYYELLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies yellow from the source to target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-darken">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-darken">Gmagick::COMPOSITE_DARKEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens the target image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dstatop">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dstatop">Gmagick::COMPOSITE_DSTATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the destination lying inside of the source is composited over the source and replaces the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dst">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dst">Gmagick::COMPOSITE_DST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The target is left untouched
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dstin">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dstin">Gmagick::COMPOSITE_DSTIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The parts inside the source replace the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dstout">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dstout">Gmagick::COMPOSITE_DSTOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The parts outside the source replace the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dstover">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dstover">Gmagick::COMPOSITE_DSTOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Target replaces the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-difference">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-difference">Gmagick::COMPOSITE_DIFFERENCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtracts the darker of the two constituent colors from the lighter
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-displace">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-displace">Gmagick::COMPOSITE_DISPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Shifts target image pixels as defined by the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-dissolve">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-dissolve">Gmagick::COMPOSITE_DISSOLVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Dissolves the source in to the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-exclusion">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-exclusion">Gmagick::COMPOSITE_EXCLUSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Produces an effect similar to that of Gmagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-hardlight">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-hardlight">Gmagick::COMPOSITE_HARDLIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multiplies or screens the colors, dependent on the source color value
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-hue">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-hue">Gmagick::COMPOSITE_HUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Modifies the hue of the target as defined by source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-in">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-in">Gmagick::COMPOSITE_IN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites source into the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-lighten">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-lighten">Gmagick::COMPOSITE_LIGHTEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Lightens the target as defined by source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-luminize">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-luminize">Gmagick::COMPOSITE_LUMINIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Luminizes the target as defined by source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-minus">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-minus">Gmagick::COMPOSITE_MINUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtracts the source from the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-modulate">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-modulate">Gmagick::COMPOSITE_MODULATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Modulates the target brightness, saturation and hue as defined by source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-multiply">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-multiply">Gmagick::COMPOSITE_MULTIPLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multiplies the target to the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-out">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-out">Gmagick::COMPOSITE_OUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites outer parts of the source on the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-over">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-over">Gmagick::COMPOSITE_OVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites source over the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-overlay">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-overlay">Gmagick::COMPOSITE_OVERLAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Overlays the source on the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-plus">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-plus">Gmagick::COMPOSITE_PLUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Adds the source to the target
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-replace">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-replace">Gmagick::COMPOSITE_REPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Replaces the target with the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-saturate">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-saturate">Gmagick::COMPOSITE_SATURATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Saturates the target as defined by the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-screen">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-screen">Gmagick::COMPOSITE_SCREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source and destination are complemented and then multiplied and then replace the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-softlight">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-softlight">Gmagick::COMPOSITE_SOFTLIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens or lightens the colors, dependent on the source
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-srcatop">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-srcatop">Gmagick::COMPOSITE_SRCATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying inside of the destination is composited onto the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-src">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-src">Gmagick::COMPOSITE_SRC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source is copied to the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-srcin">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-srcin">Gmagick::COMPOSITE_SRCIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying inside of the destination replaces the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-srcout">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-srcout">Gmagick::COMPOSITE_SRCOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying outside of the destination replaces the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-srcover">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-srcover">Gmagick::COMPOSITE_SRCOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source replaces the destination
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-subtract">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-subtract">Gmagick::COMPOSITE_SUBTRACT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtract the colors in the source image from the destination image
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-threshold">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-threshold">Gmagick::COMPOSITE_THRESHOLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source is composited on the target as defined by source threshold
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.composite-xor">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.composite-xor">Gmagick::COMPOSITE_XOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.montagemode">
  <strong class="title">Montage Mode constants</strong>
  
   <dt id="gmagick.constants.montagemode-frame">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.montagemode-frame">Gmagick::MONTAGEMODE_FRAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.montagemode-unframe">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.montagemode-unframe">Gmagick::MONTAGEMODE_UNFRAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.montagemode-concatenate">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.montagemode-concatenate">Gmagick::MONTAGEMODE_CONCATENATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.styles">
  <strong class="title">Style constants</strong>
  
   <dt id="gmagick.constants.style-normal">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.style-normal">Gmagick::STYLE_NORMAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.style-italic">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.style-italic">Gmagick::STYLE_ITALIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.style-oblique">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.style-oblique">Gmagick::STYLE_OBLIQUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.style-any">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.style-any">Gmagick::STYLE_ANY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.filters">
  <strong class="title">Filter constants</strong>
  
   <dt id="gmagick.constants.filter-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-undefined">Gmagick::FILTER_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-point">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-point">Gmagick::FILTER_POINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-box">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-box">Gmagick::FILTER_BOX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-triangle">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-triangle">Gmagick::FILTER_TRIANGLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-hermite">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-hermite">Gmagick::FILTER_HERMITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-hanning">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-hanning">Gmagick::FILTER_HANNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-hamming">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-hamming">Gmagick::FILTER_HAMMING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-blackman">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-blackman">Gmagick::FILTER_BLACKMAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-gaussian">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-gaussian">Gmagick::FILTER_GAUSSIAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-quadratic">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-quadratic">Gmagick::FILTER_QUADRATIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-cubic">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-cubic">Gmagick::FILTER_CUBIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-catrom">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-catrom">Gmagick::FILTER_CATROM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-mitchell">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-mitchell">Gmagick::FILTER_MITCHELL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-lanczos">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-lanczos">Gmagick::FILTER_LANCZOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-bessel">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-bessel">Gmagick::FILTER_BESSEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.filter-sinc">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.filter-sinc">Gmagick::FILTER_SINC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.imagetype">
  <strong class="title">Image type constants</strong>
  
   <dt id="gmagick.constants.imgtype-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-undefined">Gmagick::IMGTYPE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-bilevel">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-bilevel">Gmagick::IMGTYPE_BILEVEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-grayscale">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-grayscale">Gmagick::IMGTYPE_GRAYSCALE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-grayscalematte">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-grayscalematte">Gmagick::IMGTYPE_GRAYSCALEMATTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-palette">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-palette">Gmagick::IMGTYPE_PALETTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-palettematte">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-palettematte">Gmagick::IMGTYPE_PALETTEMATTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-truecolor">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-truecolor">Gmagick::IMGTYPE_TRUECOLOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-truecolormatte">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-truecolormatte">Gmagick::IMGTYPE_TRUECOLORMATTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-colorseparation">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-colorseparation">Gmagick::IMGTYPE_COLORSEPARATION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-colorseparationmatte">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-colorseparationmatte">Gmagick::IMGTYPE_COLORSEPARATIONMATTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.imgtype-optimize">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.imgtype-optimize">Gmagick::IMGTYPE_OPTIMIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.resolution">
  <strong class="title">Resolution constants</strong>
  
   <dt id="gmagick.constants.resolution-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resolution-undefined">Gmagick::RESOLUTION_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resolution-pixelsperinch">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resolution-pixelsperinch">Gmagick::RESOLUTION_PIXELSPERINCH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resolution-pixelspercentimeter">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resolution-pixelspercentimeter">Gmagick::RESOLUTION_PIXELSPERCENTIMETER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.compressiontype">
  <strong class="title">Compression constants</strong>
  
   <dt id="gmagick.constants.compression-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-undefined">Gmagick::COMPRESSION_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-no">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-no">Gmagick::COMPRESSION_NO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-bzip">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-bzip">Gmagick::COMPRESSION_BZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-fax">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-fax">Gmagick::COMPRESSION_FAX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-group4">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-group4">Gmagick::COMPRESSION_GROUP4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-jpeg">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-jpeg">Gmagick::COMPRESSION_JPEG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-jpeg2000">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-jpeg2000">Gmagick::COMPRESSION_JPEG2000</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-losslessjpeg">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-losslessjpeg">Gmagick::COMPRESSION_LOSSLESSJPEG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-lzw">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-lzw">Gmagick::COMPRESSION_LZW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-rle">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-rle">Gmagick::COMPRESSION_RLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.compression-zip">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.compression-zip">Gmagick::COMPRESSION_ZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.paint">
  <strong class="title">Paint constants</strong>
  
   <dt id="gmagick.constants.paint-point">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.paint-point">Gmagick::PAINT_POINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.paint-replace">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.paint-replace">Gmagick::PAINT_REPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.paint-floodfill">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.paint-floodfill">Gmagick::PAINT_FLOODFILL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.paint-filltoborder">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.paint-filltoborder">Gmagick::PAINT_FILLTOBORDER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.paint-reset">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.paint-reset">Gmagick::PAINT_RESET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.gravity">
  <strong class="title">Gravity constants</strong>
  
   <dt id="gmagick.constants.gravity-northwest">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-northwest">Gmagick::GRAVITY_NORTHWEST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-north">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-north">Gmagick::GRAVITY_NORTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-northeast">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-northeast">Gmagick::GRAVITY_NORTHEAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-west">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-west">Gmagick::GRAVITY_WEST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-center">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-center">Gmagick::GRAVITY_CENTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-east">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-east">Gmagick::GRAVITY_EAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-southwest">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-southwest">Gmagick::GRAVITY_SOUTHWEST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-south">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-south">Gmagick::GRAVITY_SOUTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.gravity-southeast">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.gravity-southeast">Gmagick::GRAVITY_SOUTHEAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.stretch">
  <strong class="title">Stretch constants</strong>
  
   <dt id="gmagick.constants.stretch-normal">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-normal">Gmagick::STRETCH_NORMAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-ultracondensed">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-ultracondensed">Gmagick::STRETCH_ULTRACONDENSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-condensed">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-condensed">Gmagick::STRETCH_CONDENSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-semicondensed">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-semicondensed">Gmagick::STRETCH_SEMICONDENSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-semiexpanded">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-semiexpanded">Gmagick::STRETCH_SEMIEXPANDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-expanded">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-expanded">Gmagick::STRETCH_EXPANDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-extraexpanded">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-extraexpanded">Gmagick::STRETCH_EXTRAEXPANDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-ultraexpanded">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-ultraexpanded">Gmagick::STRETCH_ULTRAEXPANDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.stretch-any">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.stretch-any">Gmagick::STRETCH_ANY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.align">
  <strong class="title">Align constants</strong>
  
   <dt id="gmagick.constants.align-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.align-undefined">Gmagick::ALIGN_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.align-left">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.align-left">Gmagick::ALIGN_LEFT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.align-center">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.align-center">Gmagick::ALIGN_CENTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.align-right">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.align-right">Gmagick::ALIGN_RIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.decoration">
  <strong class="title">Decoration constants</strong>
  
   <dt id="gmagick.constants.decoration-no">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.decoration-no">Gmagick::DECORATION_NO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.decoration-underline">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.decoration-underline">Gmagick::DECORATION_UNDERLINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.decoration-overline">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.decoration-overline">Gmagick::DECORATION_OVERLINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.decoration-linetrough">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.decoration-linetrough">Gmagick::DECORATION_LINETROUGH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.noise">
  <strong class="title">Noise  constants</strong>
  
   <dt id="gmagick.constants.noise-uniform">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-uniform">Gmagick::NOISE_UNIFORM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.noise-gaussian">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-gaussian">Gmagick::NOISE_GAUSSIAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.noise-multiplicativegaussian">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-multiplicativegaussian">Gmagick::NOISE_MULTIPLICATIVEGAUSSIAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.noise-impulse">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-impulse">Gmagick::NOISE_IMPULSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.noise-laplacian">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-laplacian">Gmagick::NOISE_LAPLACIAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.noise-poisson">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.noise-poisson">Gmagick::NOISE_POISSON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.channel">
  <strong class="title">Channel constants</strong>
  
   <dt id="gmagick.constants.channel-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-undefined">Gmagick::CHANNEL_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-red">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-red">Gmagick::CHANNEL_RED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-gray">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-gray">Gmagick::CHANNEL_GRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-cyan">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-cyan">Gmagick::CHANNEL_CYAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-green">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-green">Gmagick::CHANNEL_GREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-magenta">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-magenta">Gmagick::CHANNEL_MAGENTA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-blue">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-blue">Gmagick::CHANNEL_BLUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-yellow">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-yellow">Gmagick::CHANNEL_YELLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-alpha">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-alpha">Gmagick::CHANNEL_ALPHA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-opacity">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-opacity">Gmagick::CHANNEL_OPACITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-matte">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-matte">Gmagick::CHANNEL_MATTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-black">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-black">Gmagick::CHANNEL_BLACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-index">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-index">Gmagick::CHANNEL_INDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.channel-all">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.channel-all">Gmagick::CHANNEL_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.metric">
  <strong class="title">Metric constants</strong>
  
   <dt id="gmagick.constants.metric-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-undefined">Gmagick::METRIC_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.metric-meanabsoluteerror">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-meanabsoluteerror">Gmagick::METRIC_MEANABSOLUTEERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.metric-meansquareerror">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-meansquareerror">Gmagick::METRIC_MEANSQUAREERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.metric-peakabsoluteerror">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-peakabsoluteerror">Gmagick::METRIC_PEAKABSOLUTEERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.metric-peaksignaltonoiseratio">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-peaksignaltonoiseratio">Gmagick::METRIC_PEAKSIGNALTONOISERATIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.metric-rootmeansquarederror">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.metric-rootmeansquarederror">Gmagick::METRIC_ROOTMEANSQUAREDERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.pixel">
  <strong class="title">Pixel constants</strong>
  
   <dt id="gmagick.constants.pixel-char">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-char">Gmagick::PIXEL_CHAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-double">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-double">Gmagick::PIXEL_DOUBLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-float">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-float">Gmagick::PIXEL_FLOAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-integer">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-integer">Gmagick::PIXEL_INTEGER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-long">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-long">Gmagick::PIXEL_LONG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-quantum">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-quantum">Gmagick::PIXEL_QUANTUM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pixel-short">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pixel-short">Gmagick::PIXEL_SHORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.colorspace">
  <strong class="title">Colorspace constants</strong>
  
   <dt id="gmagick.constants.colorspace-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-undefined">Gmagick::COLORSPACE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-rgb">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-rgb">Gmagick::COLORSPACE_RGB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-gray">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-gray">Gmagick::COLORSPACE_GRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-transparent">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-transparent">Gmagick::COLORSPACE_TRANSPARENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-ohta">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-ohta">Gmagick::COLORSPACE_OHTA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-lab">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-lab">Gmagick::COLORSPACE_LAB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-xyz">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-xyz">Gmagick::COLORSPACE_XYZ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-ycbcr">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-ycbcr">Gmagick::COLORSPACE_YCBCR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-ycc">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-ycc">Gmagick::COLORSPACE_YCC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-yiq">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-yiq">Gmagick::COLORSPACE_YIQ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-ypbpr">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-ypbpr">Gmagick::COLORSPACE_YPBPR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-yuv">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-yuv">Gmagick::COLORSPACE_YUV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-cmyk">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-cmyk">Gmagick::COLORSPACE_CMYK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-srgb">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-srgb">Gmagick::COLORSPACE_SRGB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-hsb">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-hsb">Gmagick::COLORSPACE_HSB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-hsl">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-hsl">Gmagick::COLORSPACE_HSL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-hwb">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-hwb">Gmagick::COLORSPACE_HWB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-rec601luma">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-rec601luma">Gmagick::COLORSPACE_REC601LUMA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-rec709luma">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-rec709luma">Gmagick::COLORSPACE_REC709LUMA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.colorspace-log">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.colorspace-log">Gmagick::COLORSPACE_LOG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.virtualpixelmethods">
  <strong class="title">Virtual Pixel Method constants</strong>
  
   <dt id="gmagick.constants.virtualpixelmethod-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-undefined">Gmagick::VIRTUALPIXELMETHOD_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-background">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-background">Gmagick::VIRTUALPIXELMETHOD_BACKGROUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-constant">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-constant">Gmagick::VIRTUALPIXELMETHOD_CONSTANT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-edge">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-edge">Gmagick::VIRTUALPIXELMETHOD_EDGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-mirror">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-mirror">Gmagick::VIRTUALPIXELMETHOD_MIRROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-tile">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-tile">Gmagick::VIRTUALPIXELMETHOD_TILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.virtualpixelmethod-transparent">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.virtualpixelmethod-transparent">Gmagick::VIRTUALPIXELMETHOD_TRANSPARENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.preview">
  <strong class="title">Preview constants</strong>
  
   <dt id="gmagick.constants.preview-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-undefined">Gmagick::PREVIEW_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-rotate">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-rotate">Gmagick::PREVIEW_ROTATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-shear">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-shear">Gmagick::PREVIEW_SHEAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-roll">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-roll">Gmagick::PREVIEW_ROLL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-hue">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-hue">Gmagick::PREVIEW_HUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-saturation">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-saturation">Gmagick::PREVIEW_SATURATION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-brightness">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-brightness">Gmagick::PREVIEW_BRIGHTNESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-gamma">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-gamma">Gmagick::PREVIEW_GAMMA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-spiff">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-spiff">Gmagick::PREVIEW_SPIFF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-dull">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-dull">Gmagick::PREVIEW_DULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-grayscale">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-grayscale">Gmagick::PREVIEW_GRAYSCALE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-quantize">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-quantize">Gmagick::PREVIEW_QUANTIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-despeckle">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-despeckle">Gmagick::PREVIEW_DESPECKLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-reducenoise">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-reducenoise">Gmagick::PREVIEW_REDUCENOISE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-addnoise">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-addnoise">Gmagick::PREVIEW_ADDNOISE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-sharpen">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-sharpen">Gmagick::PREVIEW_SHARPEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-blur">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-blur">Gmagick::PREVIEW_BLUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-threshold">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-threshold">Gmagick::PREVIEW_THRESHOLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-edgedetect">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-edgedetect">Gmagick::PREVIEW_EDGEDETECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-spread">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-spread">Gmagick::PREVIEW_SPREAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-solarize">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-solarize">Gmagick::PREVIEW_SOLARIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-shade">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-shade">Gmagick::PREVIEW_SHADE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-raise">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-raise">Gmagick::PREVIEW_RAISE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-segment">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-segment">Gmagick::PREVIEW_SEGMENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-swirl">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-swirl">Gmagick::PREVIEW_SWIRL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-implode">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-implode">Gmagick::PREVIEW_IMPLODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-wave">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-wave">Gmagick::PREVIEW_WAVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-oilpaint">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-oilpaint">Gmagick::PREVIEW_OILPAINT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-charcoaldrawing">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-charcoaldrawing">Gmagick::PREVIEW_CHARCOALDRAWING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.preview-jpeg">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.preview-jpeg">Gmagick::PREVIEW_JPEG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.renderingintent">
  <strong class="title">Rendering Intent constants</strong>
  
   <dt id="gmagick.constants.renderingintent-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.renderingintent-undefined">Gmagick::RENDERINGINTENT_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.renderingintent-saturation">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.renderingintent-saturation">Gmagick::RENDERINGINTENT_SATURATION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.renderingintent-perceptual">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.renderingintent-perceptual">Gmagick::RENDERINGINTENT_PERCEPTUAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.renderingintent-absolute">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.renderingintent-absolute">Gmagick::RENDERINGINTENT_ABSOLUTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.renderingintent-relative">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.renderingintent-relative">Gmagick::RENDERINGINTENT_RELATIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.fillrule">
  <strong class="title">Fillrule constants</strong>
  
   <dt id="gmagick.constants.fillrule-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.fillrule-undefined">Gmagick::FILLRULE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.fillrule-evenodd">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.fillrule-evenodd">Gmagick::FILLRULE_EVENODD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.fillrule-nonzero">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.fillrule-nonzero">Gmagick::FILLRULE_NONZERO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.pathunits">
  <strong class="title">Pathunit constants</strong>
  
   <dt id="gmagick.constants.pathunits-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pathunits-undefined">Gmagick::PATHUNITS_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pathunits-userspace">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pathunits-userspace">Gmagick::PATHUNITS_USERSPACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pathunits-userspaceonuse">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pathunits-userspaceonuse">Gmagick::PATHUNITS_USERSPACEONUSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.pathunits-objectboundingbox">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.pathunits-objectboundingbox">Gmagick::PATHUNITS_OBJECTBOUNDINGBOX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.linecap">
  <strong class="title">Linecap constants</strong>
  
   <dt id="gmagick.constants.linecap-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linecap-undefined">Gmagick::LINECAP_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linecap-butt">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linecap-butt">Gmagick::LINECAP_BUTT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linecap-round">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linecap-round">Gmagick::LINECAP_ROUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linecap-square">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linecap-square">Gmagick::LINECAP_SQUARE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.linejoin">
  <strong class="title">Line Join constants</strong>
  
   <dt id="gmagick.constants.linejoin-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linejoin-undefined">Gmagick::LINEJOIN_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linejoin-miter">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linejoin-miter">Gmagick::LINEJOIN_MITER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linejoin-round">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linejoin-round">Gmagick::LINEJOIN_ROUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.linejoin-bevel">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.linejoin-bevel">Gmagick::LINEJOIN_BEVEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.resourcetypes">
  <strong class="title">Resourcetype constants</strong>
  
   <dt id="gmagick.constants.resourcetype-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-undefined">Gmagick::RESOURCETYPE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resourcetype-area">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-area">Gmagick::RESOURCETYPE_AREA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resourcetype-disk">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-disk">Gmagick::RESOURCETYPE_DISK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resourcetype-file">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-file">Gmagick::RESOURCETYPE_FILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resourcetype-map">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-map">Gmagick::RESOURCETYPE_MAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.resourcetype-memory">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.resourcetype-memory">Gmagick::RESOURCETYPE_MEMORY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.orientation">
  <strong class="title">Orientation constants</strong>
  
   <dt id="gmagick.constants.orientation-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-undefined">Gmagick::ORIENTATION_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-topleft">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-topleft">Gmagick::ORIENTATION_TOPLEFT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-topright">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-topright">Gmagick::ORIENTATION_TOPRIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-bottomright">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-bottomright">Gmagick::ORIENTATION_BOTTOMRIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-bottomleft">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-bottomleft">Gmagick::ORIENTATION_BOTTOMLEFT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-lefttop">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-lefttop">Gmagick::ORIENTATION_LEFTTOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-righttop">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-righttop">Gmagick::ORIENTATION_RIGHTTOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-rightbottom">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-rightbottom">Gmagick::ORIENTATION_RIGHTBOTTOM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
  
   <dt id="gmagick.constants.orientation-leftbottom">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.orientation-leftbottom">Gmagick::ORIENTATION_LEFTBOTTOM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
    </span>
   </dd>
  
 </dl>
 <dl id="gmagick.constants.interlace">
  <strong class="title">Interlace constants</strong>
  
   <dt id="gmagick.constants.interlace-undefined">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-undefined">Gmagick::INTERLACE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="gmagick.constants.interlace-no">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-no">Gmagick::INTERLACE_NO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="gmagick.constants.interlace-none">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-none">Gmagick::INTERLACE_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="gmagick.constants.interlace-line">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-line">Gmagick::INTERLACE_LINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="gmagick.constants.interlace-plane">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-plane">Gmagick::INTERLACE_PLANE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="gmagick.constants.interlace-partition">
    <strong><code><a href="gmagick.constants.php#gmagick.constants.interlace-partition">Gmagick::INTERLACE_PARTITION</a></code></strong>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/gmagick/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fgmagick.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=gmagick.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/gmagick.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.gmagick.php">Gmagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.gmagick.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="gmagick.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="gmagick.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.gmagick.php" title="Gmagick">Gmagick</a>
                        </li>
                                                <li class="">
                            <a href="class.gmagickdraw.php" title="GmagickDraw">GmagickDraw</a>
                        </li>
                                                <li class="">
                            <a href="class.gmagickpixel.php" title="GmagickPixel">GmagickPixel</a>
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
