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

 <link rel="canonical" href="https://www.php.net/manual/en/image.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/image.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/image.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.image.php">
 <link rel="prev" href="https://www.php.net/manual/en/image.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/image.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/image.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/image.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/image.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/image.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/image.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/image.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/image.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/image.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/image.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/image.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/image.constants.php" hreflang="zh">

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
        <a href="image.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="image.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      </ul>
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
            <option value='en/image.constants.php' selected="selected">English</option>
            <option value='de/image.constants.php'>German</option>
            <option value='es/image.constants.php'>Spanish</option>
            <option value='fr/image.constants.php'>French</option>
            <option value='it/image.constants.php'>Italian</option>
            <option value='ja/image.constants.php'>Japanese</option>
            <option value='pt_BR/image.constants.php'>Brazilian Portuguese</option>
            <option value='ru/image.constants.php'>Russian</option>
            <option value='tr/image.constants.php'>Turkish</option>
            <option value='uk/image.constants.php'>Ukrainian</option>
            <option value='zh/image.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="image.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.gd-version">
    <strong><code><a href="image.constants.php#constant.gd-version">GD_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The GD version PHP was compiled against.
    </span>
   </dd>
  

  
   <dt id="constant.gd-major-version">
    <strong><code><a href="image.constants.php#constant.gd-major-version">GD_MAJOR_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The GD major version PHP was compiled against.
    </span>
   </dd>
  

  
   <dt id="constant.gd-minor-version">
    <strong><code><a href="image.constants.php#constant.gd-minor-version">GD_MINOR_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The GD minor version PHP was compiled against.
    </span>
   </dd>
  

  
   <dt id="constant.gd-release-version">
    <strong><code><a href="image.constants.php#constant.gd-release-version">GD_RELEASE_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The GD release version PHP was compiled against.
    </span>
   </dd>
  

  
   <dt id="constant.gd-extra-version">
    <strong><code><a href="image.constants.php#constant.gd-extra-version">GD_EXTRA_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The GD &quot;extra&quot; version (beta/rc..) PHP was compiled against.
    </span>
   </dd>
  

  
   <dt id="constant.gd-bundled">
    <strong><code><a href="image.constants.php#constant.gd-bundled">GD_BUNDLED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     When the bundled version of GD is used this is 1 otherwise
     its set to 0.
    </span>
   </dd>
  

  
   <dt id="constant.img-avif">
    <strong><code><a href="image.constants.php#constant.img-avif">IMG_AVIF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
    <span class="simpara">
     (Available as of PHP 8.1.0)
    </span>
   </dd>
  
  
   <dt id="constant.img-bmp">
    <strong><code><a href="image.constants.php#constant.img-bmp">IMG_BMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-gif">
    <strong><code><a href="image.constants.php#constant.img-gif">IMG_GIF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-jpg">
    <strong><code><a href="image.constants.php#constant.img-jpg">IMG_JPG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-jpeg">
    <strong><code><a href="image.constants.php#constant.img-jpeg">IMG_JPEG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This constant has the same value as <strong><code><a href="image.constants.php#constant.img-jpg">IMG_JPG</a></code></strong>
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.img-png">
    <strong><code><a href="image.constants.php#constant.img-png">IMG_PNG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-tga">
    <strong><code><a href="image.constants.php#constant.img-tga">IMG_TGA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
    <span class="simpara">
     (Available as of PHP 7.4.0)
    </span>
   </dd>
  
  
   <dt id="constant.img-wbmp">
    <strong><code><a href="image.constants.php#constant.img-wbmp">IMG_WBMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-xpm">
    <strong><code><a href="image.constants.php#constant.img-xpm">IMG_XPM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
   </dd>
  
  
   <dt id="constant.img-webp">
    <strong><code><a href="image.constants.php#constant.img-webp">IMG_WEBP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used as a return value by <span class="function"><a href="function.imagetypes.php" class="function">imagetypes()</a></span>
</span>
    <span class="simpara">
     (Available as of PHP 7.0.10)
    </span>
   </dd>
  
  
   <dt id="constant.img-webp-lossless">
    <strong><code><a href="image.constants.php#constant.img-webp-lossless">IMG_WEBP_LOSSLESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     (Available as of PHP 8.1.0)
    </span>
   </dd>
  
  
   <dt id="constant.img-color-tiled">
    <strong><code><a href="image.constants.php#constant.img-color-tiled">IMG_COLOR_TILED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special color option which can be used instead of a color allocated with
    <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span> or
    <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>.
</span>
   </dd>
  
  
   <dt id="constant.img-color-styled">
    <strong><code><a href="image.constants.php#constant.img-color-styled">IMG_COLOR_STYLED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special color option which can be used instead of a color allocated with
    <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span> or
    <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>.
</span>
   </dd>
  
  
   <dt id="constant.img-color-brushed">
    <strong><code><a href="image.constants.php#constant.img-color-brushed">IMG_COLOR_BRUSHED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special color option which can be used instead of a color allocated with
    <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span> or
    <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>.
</span>
   </dd>
  
  
   <dt id="constant.img-color-styledbrushed">
    <strong><code><a href="image.constants.php#constant.img-color-styledbrushed">IMG_COLOR_STYLEDBRUSHED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special color option which can be used instead of a color allocated with
    <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span> or
    <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>.
</span>
   </dd>
  
  
   <dt id="constant.img-color-transparent">
    <strong><code><a href="image.constants.php#constant.img-color-transparent">IMG_COLOR_TRANSPARENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special color option which can be used instead of a color allocated with
    <span class="function"><a href="function.imagecolorallocate.php" class="function">imagecolorallocate()</a></span> or
    <span class="function"><a href="function.imagecolorallocatealpha.php" class="function">imagecolorallocatealpha()</a></span>.
</span>
   </dd>
  
  
   <dt id="constant.img-affine-translate">
    <strong><code><a href="image.constants.php#constant.img-affine-translate">IMG_AFFINE_TRANSLATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    An affine transformation type constant used by the <span class="function"><a href="function.imageaffinematrixget.php" class="function">imageaffinematrixget()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-affine-scale">
    <strong><code><a href="image.constants.php#constant.img-affine-scale">IMG_AFFINE_SCALE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    An affine transformation type constant used by the <span class="function"><a href="function.imageaffinematrixget.php" class="function">imageaffinematrixget()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-affine-rotate">
    <strong><code><a href="image.constants.php#constant.img-affine-rotate">IMG_AFFINE_ROTATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    An affine transformation type constant used by the <span class="function"><a href="function.imageaffinematrixget.php" class="function">imageaffinematrixget()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-affine-shear-horizontal">
    <strong><code><a href="image.constants.php#constant.img-affine-shear-horizontal">IMG_AFFINE_SHEAR_HORIZONTAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    An affine transformation type constant used by the <span class="function"><a href="function.imageaffinematrixget.php" class="function">imageaffinematrixget()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-affine-shear-vertical">
    <strong><code><a href="image.constants.php#constant.img-affine-shear-vertical">IMG_AFFINE_SHEAR_VERTICAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    An affine transformation type constant used by the <span class="function"><a href="function.imageaffinematrixget.php" class="function">imageaffinematrixget()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-arc-rounded">
    <strong><code><a href="image.constants.php#constant.img-arc-rounded">IMG_ARC_ROUNDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A style constant used by the <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span> function.
</span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This constant has the same value as <strong><code><a href="image.constants.php#constant.img-arc-pie">IMG_ARC_PIE</a></code></strong>
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.img-arc-pie">
    <strong><code><a href="image.constants.php#constant.img-arc-pie">IMG_ARC_PIE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A style constant used by the <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-arc-chord">
    <strong><code><a href="image.constants.php#constant.img-arc-chord">IMG_ARC_CHORD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A style constant used by the <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-arc-nofill">
    <strong><code><a href="image.constants.php#constant.img-arc-nofill">IMG_ARC_NOFILL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A style constant used by the <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-arc-edged">
    <strong><code><a href="image.constants.php#constant.img-arc-edged">IMG_ARC_EDGED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A style constant used by the <span class="function"><a href="function.imagefilledarc.php" class="function">imagefilledarc()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-gd2-raw">
    <strong><code><a href="image.constants.php#constant.img-gd2-raw">IMG_GD2_RAW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A type constant used by the <span class="function"><a href="function.imagegd2.php" class="function">imagegd2()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-gd2-compressed">
    <strong><code><a href="image.constants.php#constant.img-gd2-compressed">IMG_GD2_COMPRESSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A type constant used by the <span class="function"><a href="function.imagegd2.php" class="function">imagegd2()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-effect-replace">
    <strong><code><a href="image.constants.php#constant.img-effect-replace">IMG_EFFECT_REPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Alpha blending effect used by the <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-effect-alphablend">
    <strong><code><a href="image.constants.php#constant.img-effect-alphablend">IMG_EFFECT_ALPHABLEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Alpha blending effect used by the <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-effect-normal">
    <strong><code><a href="image.constants.php#constant.img-effect-normal">IMG_EFFECT_NORMAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Alpha blending effect used by the <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-effect-overlay">
    <strong><code><a href="image.constants.php#constant.img-effect-overlay">IMG_EFFECT_OVERLAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Alpha blending effect used by the <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-effect-multiply">
    <strong><code><a href="image.constants.php#constant.img-effect-multiply">IMG_EFFECT_MULTIPLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Alpha blending effect used by the <span class="function"><a href="function.imagelayereffect.php" class="function">imagelayereffect()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-negate">
    <strong><code><a href="image.constants.php#constant.img-filter-negate">IMG_FILTER_NEGATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-grayscale">
    <strong><code><a href="image.constants.php#constant.img-filter-grayscale">IMG_FILTER_GRAYSCALE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-brightness">
    <strong><code><a href="image.constants.php#constant.img-filter-brightness">IMG_FILTER_BRIGHTNESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-contrast">
    <strong><code><a href="image.constants.php#constant.img-filter-contrast">IMG_FILTER_CONTRAST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-colorize">
    <strong><code><a href="image.constants.php#constant.img-filter-colorize">IMG_FILTER_COLORIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-edgedetect">
    <strong><code><a href="image.constants.php#constant.img-filter-edgedetect">IMG_FILTER_EDGEDETECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-gaussian-blur">
    <strong><code><a href="image.constants.php#constant.img-filter-gaussian-blur">IMG_FILTER_GAUSSIAN_BLUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-selective-blur">
    <strong><code><a href="image.constants.php#constant.img-filter-selective-blur">IMG_FILTER_SELECTIVE_BLUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-emboss">
    <strong><code><a href="image.constants.php#constant.img-filter-emboss">IMG_FILTER_EMBOSS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-mean-removal">
    <strong><code><a href="image.constants.php#constant.img-filter-mean-removal">IMG_FILTER_MEAN_REMOVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-smooth">
    <strong><code><a href="image.constants.php#constant.img-filter-smooth">IMG_FILTER_SMOOTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-pixelate">
    <strong><code><a href="image.constants.php#constant.img-filter-pixelate">IMG_FILTER_PIXELATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.img-filter-scatter">
    <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Special GD filter used by the <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> function.
</span>
    <span class="simpara">
     (Available as of PHP 7.4.0)
    </span>
   </dd>
  
  
   <dt id="constant.imagetype-gif">
    <strong><code><a href="image.constants.php#constant.imagetype-gif">IMAGETYPE_GIF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jpeg">
    <strong><code><a href="image.constants.php#constant.imagetype-jpeg">IMAGETYPE_JPEG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jpeg2000">
    <strong><code><a href="image.constants.php#constant.imagetype-jpeg2000">IMAGETYPE_JPEG2000</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-png">
    <strong><code><a href="image.constants.php#constant.imagetype-png">IMAGETYPE_PNG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-swf">
    <strong><code><a href="image.constants.php#constant.imagetype-swf">IMAGETYPE_SWF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-psd">
    <strong><code><a href="image.constants.php#constant.imagetype-psd">IMAGETYPE_PSD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-bmp">
    <strong><code><a href="image.constants.php#constant.imagetype-bmp">IMAGETYPE_BMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-wbmp">
    <strong><code><a href="image.constants.php#constant.imagetype-wbmp">IMAGETYPE_WBMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-xbm">
    <strong><code><a href="image.constants.php#constant.imagetype-xbm">IMAGETYPE_XBM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-tiff-ii">
    <strong><code><a href="image.constants.php#constant.imagetype-tiff-ii">IMAGETYPE_TIFF_II</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-tiff-mm">
    <strong><code><a href="image.constants.php#constant.imagetype-tiff-mm">IMAGETYPE_TIFF_MM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-iff">
    <strong><code><a href="image.constants.php#constant.imagetype-iff">IMAGETYPE_IFF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jb2">
    <strong><code><a href="image.constants.php#constant.imagetype-jb2">IMAGETYPE_JB2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jpc">
    <strong><code><a href="image.constants.php#constant.imagetype-jpc">IMAGETYPE_JPC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jp2">
    <strong><code><a href="image.constants.php#constant.imagetype-jp2">IMAGETYPE_JP2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-jpx">
    <strong><code><a href="image.constants.php#constant.imagetype-jpx">IMAGETYPE_JPX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-swc">
    <strong><code><a href="image.constants.php#constant.imagetype-swc">IMAGETYPE_SWC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-ico">
    <strong><code><a href="image.constants.php#constant.imagetype-ico">IMAGETYPE_ICO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-webp">
    <strong><code><a href="image.constants.php#constant.imagetype-webp">IMAGETYPE_WEBP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
    <span class="simpara">
     (Available as of PHP 7.1.0)
    </span>
   </dd>
  
  
   <dt id="constant.imagetype-avif">
    <strong><code><a href="image.constants.php#constant.imagetype-avif">IMAGETYPE_AVIF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
    <span class="simpara">
     (Available as of PHP 8.1.0)
    </span>
   </dd>
  
  
   <dt id="constant.imagetype-unknown">
    <strong><code><a href="image.constants.php#constant.imagetype-unknown">IMAGETYPE_UNKNOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Image type constant used by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span>
    and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions.
</span>
   </dd>
  
  
   <dt id="constant.imagetype-count">
    <strong><code><a href="image.constants.php#constant.imagetype-count">IMAGETYPE_COUNT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The number of image type constants (including the &quot;unknown&quot; type)
     supported by the <span class="function"><a href="function.image-type-to-mime-type.php" class="function">image_type_to_mime_type()</a></span> and <span class="function"><a href="function.image-type-to-extension.php" class="function">image_type_to_extension()</a></span> functions
    </span>
   </dd>
  
  
   <dt id="constant.png-no-filter">
    <strong><code><a href="image.constants.php#constant.png-no-filter">PNG_NO_FILTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-filter-none">
    <strong><code><a href="image.constants.php#constant.png-filter-none">PNG_FILTER_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-filter-sub">
    <strong><code><a href="image.constants.php#constant.png-filter-sub">PNG_FILTER_SUB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-filter-up">
    <strong><code><a href="image.constants.php#constant.png-filter-up">PNG_FILTER_UP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-filter-avg">
    <strong><code><a href="image.constants.php#constant.png-filter-avg">PNG_FILTER_AVG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-filter-paeth">
    <strong><code><a href="image.constants.php#constant.png-filter-paeth">PNG_FILTER_PAETH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  
  
   <dt id="constant.png-all-filters">
    <strong><code><a href="image.constants.php#constant.png-all-filters">PNG_ALL_FILTERS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    A special PNG filter, used by the <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span> function.
</span>
   </dd>
  

  
   <dt id="constant.img-flip-vertical">
    <strong><code><a href="image.constants.php#constant.img-flip-vertical">IMG_FLIP_VERTICAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imageflip.php" class="function">imageflip()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-flip-horizontal">
    <strong><code><a href="image.constants.php#constant.img-flip-horizontal">IMG_FLIP_HORIZONTAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imageflip.php" class="function">imageflip()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-flip-both">
    <strong><code><a href="image.constants.php#constant.img-flip-both">IMG_FLIP_BOTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imageflip.php" class="function">imageflip()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bell">
    <strong><code><a href="image.constants.php#constant.img-bell">IMG_BELL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bessel">
    <strong><code><a href="image.constants.php#constant.img-bessel">IMG_BESSEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bilinear-fixed">
    <strong><code><a href="image.constants.php#constant.img-bilinear-fixed">IMG_BILINEAR_FIXED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bicubic">
    <strong><code><a href="image.constants.php#constant.img-bicubic">IMG_BICUBIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bicubic-fixed">
    <strong><code><a href="image.constants.php#constant.img-bicubic-fixed">IMG_BICUBIC_FIXED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-blackman">
    <strong><code><a href="image.constants.php#constant.img-blackman">IMG_BLACKMAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-box">
    <strong><code><a href="image.constants.php#constant.img-box">IMG_BOX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-bspline">
    <strong><code><a href="image.constants.php#constant.img-bspline">IMG_BSPLINE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-catmullrom">
    <strong><code><a href="image.constants.php#constant.img-catmullrom">IMG_CATMULLROM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-gaussian">
    <strong><code><a href="image.constants.php#constant.img-gaussian">IMG_GAUSSIAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-generalized-cubic">
    <strong><code><a href="image.constants.php#constant.img-generalized-cubic">IMG_GENERALIZED_CUBIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-hermite">
    <strong><code><a href="image.constants.php#constant.img-hermite">IMG_HERMITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-hamming">
    <strong><code><a href="image.constants.php#constant.img-hamming">IMG_HAMMING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-hanning">
    <strong><code><a href="image.constants.php#constant.img-hanning">IMG_HANNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-mitchell">
    <strong><code><a href="image.constants.php#constant.img-mitchell">IMG_MITCHELL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-power">
    <strong><code><a href="image.constants.php#constant.img-power">IMG_POWER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-quadratic">
    <strong><code><a href="image.constants.php#constant.img-quadratic">IMG_QUADRATIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-sinc">
    <strong><code><a href="image.constants.php#constant.img-sinc">IMG_SINC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-nearest-neighbour">
    <strong><code><a href="image.constants.php#constant.img-nearest-neighbour">IMG_NEAREST_NEIGHBOUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-weighted4">
    <strong><code><a href="image.constants.php#constant.img-weighted4">IMG_WEIGHTED4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  

  
   <dt id="constant.img-triangle">
    <strong><code><a href="image.constants.php#constant.img-triangle">IMG_TRIANGLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    Used together with <span class="function"><a href="function.imagesetinterpolation.php" class="function">imagesetinterpolation()</a></span>, available as of PHP 5.5.0.
</span>
   </dd>
  
  
   <dt id="constant.img-crop-black">
    <strong><code><a href="image.constants.php#constant.img-crop-black">IMG_CROP_BLACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Crops out a black background.
    </span>
   </dd>
  
  
   <dt id="constant.img-crop-default">
    <strong><code><a href="image.constants.php#constant.img-crop-default">IMG_CROP_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Same as <strong><code><a href="image.constants.php#constant.img-crop-transparent">IMG_CROP_TRANSPARENT</a></code></strong>.
     Before PHP 7.4.0, the bundled libgd fell back to <strong><code><a href="image.constants.php#constant.img-crop-sides">IMG_CROP_SIDES</a></code></strong>,
     if the image had no transparent color.
    </span>
   </dd>
  
  
   <dt id="constant.img-crop-sides">
    <strong><code><a href="image.constants.php#constant.img-crop-sides">IMG_CROP_SIDES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Uses the 4 corners of the image to attempt to detect the background to crop.
    </span>
   </dd>
  
  
   <dt id="constant.img-crop-threshold">
    <strong><code><a href="image.constants.php#constant.img-crop-threshold">IMG_CROP_THRESHOLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Crops an image using the given <code class="parameter">threshold</code>
     and <code class="parameter">color</code>.
    </span>
   </dd>
  
  
   <dt id="constant.img-crop-transparent">
    <strong><code><a href="image.constants.php#constant.img-crop-transparent">IMG_CROP_TRANSPARENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Crops out a transparent background.
    </span>
   </dd>
  
  
   <dt id="constant.img-crop-white">
    <strong><code><a href="image.constants.php#constant.img-crop-white">IMG_CROP_WHITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Crops out a white background.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/image/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimage.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=image.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/image.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105314">  <div class="votes">
    <div id="Vu105314">
    <a href="/manual/vote-note.php?id=105314&amp;page=image.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105314">
    <a href="/manual/vote-note.php?id=105314&amp;page=image.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105314" title="62% like this...">
    7
    </div>
  </div>
  <a href="#105314" class="name">
  <strong class="user"><em>webmaster at alexventure dot com</em></strong></a><a class="genanchor" href="#105314"> &para;</a><div class="date" title="2011-08-08 06:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105314">
<div class="phpcode"><code><span class="html">In case anyone is wondering what these filters are for, have a look at the W3C's specification:<br /><br /><a href="http://www.w3.org/TR/PNG-Filters.html" rel="nofollow" target="_blank">http://www.w3.org/TR/PNG-Filters.html</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=image.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/image.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.image.php">GD</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.image.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="image.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="image.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="image.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.image.php" title="GD and Image Functions">GD and Image Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.gdimage.php" title="GdImage">GdImage</a>
                        </li>
                                                <li class="">
                            <a href="class.gdfont.php" title="GdFont">GdFont</a>
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
