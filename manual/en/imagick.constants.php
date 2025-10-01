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

 <link rel="canonical" href="https://www.php.net/manual/en/imagick.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/imagick.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/imagick.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.imagick.php">
 <link rel="prev" href="https://www.php.net/manual/en/imagick.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/imagick.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/imagick.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/imagick.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/imagick.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/imagick.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/imagick.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/imagick.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/imagick.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/imagick.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/imagick.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/imagick.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/imagick.constants.php" hreflang="zh">

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
        <a href="imagick.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="imagick.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.imagick.php'>ImageMagick</a></li>      </ul>
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
            <option value='en/imagick.constants.php' selected="selected">English</option>
            <option value='de/imagick.constants.php'>German</option>
            <option value='es/imagick.constants.php'>Spanish</option>
            <option value='fr/imagick.constants.php'>French</option>
            <option value='it/imagick.constants.php'>Italian</option>
            <option value='ja/imagick.constants.php'>Japanese</option>
            <option value='pt_BR/imagick.constants.php'>Brazilian Portuguese</option>
            <option value='ru/imagick.constants.php'>Russian</option>
            <option value='tr/imagick.constants.php'>Turkish</option>
            <option value='uk/imagick.constants.php'>Ukrainian</option>
            <option value='zh/imagick.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="imagick.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl id="imagick.constants.colortype">
  <strong class="title"><strong><code>COLOR_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para">Colortype constants. These constants are mainly used with 
   <span class="classname"><a href="class.imagickpixel.php" class="classname">ImagickPixel</a></span>.
  </p>
   
    <dt id="imagick.constants.color-black">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-black">imagick::COLOR_BLACK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Black color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-blue">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-blue">imagick::COLOR_BLUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Blue color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-cyan">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-cyan">imagick::COLOR_CYAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Cyan color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-green">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-green">imagick::COLOR_GREEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Green color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-red">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-red">imagick::COLOR_RED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Red color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-yellow">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-yellow">imagick::COLOR_YELLOW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Yellow color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-magenta">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-magenta">imagick::COLOR_MAGENTA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Magenta color
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-opacity">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-opacity">imagick::COLOR_OPACITY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Color&#039;s opacity
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-alpha">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-alpha">imagick::COLOR_ALPHA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Color&#039;s alpha
     </span>
    </dd>
   
   
    <dt id="imagick.constants.color-fuzz">
     <strong><code><a href="imagick.constants.php#imagick.constants.color-fuzz">imagick::COLOR_FUZZ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Color&#039;s fuzz
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.disposetype">
  <strong class="title"><strong><code>DISPOSE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para">Dispose type constants</p>
   
    <dt id="imagick.constants.dispose-unrecognized">
     <strong><code><a href="imagick.constants.php#imagick.constants.dispose-unrecognized">imagick::DISPOSE_UNRECOGNIZED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Unrecognized dispose type
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dispose-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.dispose-undefined">imagick::DISPOSE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Undefined dispose type
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dispose-none">
     <strong><code><a href="imagick.constants.php#imagick.constants.dispose-none">imagick::DISPOSE_NONE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      No dispose type defined
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dispose-background">
     <strong><code><a href="imagick.constants.php#imagick.constants.dispose-background">imagick::DISPOSE_BACKGROUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Dispose background
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dispose-previous">
     <strong><code><a href="imagick.constants.php#imagick.constants.dispose-previous">imagick::DISPOSE_PREVIOUS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Dispose previous
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.compositeop">
  <strong class="title"><strong><code>COMPOSITE_<span class="replaceable">*</span></code></strong> constants</strong>
  
   <dt id="imagick.constants.composite-default">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-default">imagick::COMPOSITE_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The default composite operator
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-undefined">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-undefined">imagick::COMPOSITE_UNDEFINED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Undefined composite operator
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-no">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-no">imagick::COMPOSITE_NO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No composite operator defined
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-add">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-add">imagick::COMPOSITE_ADD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The result of image + image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-atop">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-atop">imagick::COMPOSITE_ATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The result is the same shape as image, with composite image obscuring image where the image shapes overlap
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-blend">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-blend">imagick::COMPOSITE_BLEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Blends the image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-bumpmap">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-bumpmap">imagick::COMPOSITE_BUMPMAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The same as COMPOSITE_MULTIPLY, except the source is converted to grayscale first.
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-clear">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-clear">imagick::COMPOSITE_CLEAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Makes the target image transparent
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-colorburn">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-colorburn">imagick::COMPOSITE_COLORBURN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens the destination image to reflect the source image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-colordodge">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-colordodge">imagick::COMPOSITE_COLORDODGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Brightens the destination image to reflect the source image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-colorize">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-colorize">imagick::COMPOSITE_COLORIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Colorizes the target image using the composite image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copyblack">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copyblack">imagick::COMPOSITE_COPYBLACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies black from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copyblue">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copyblue">imagick::COMPOSITE_COPYBLUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies blue from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copy">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copy">imagick::COMPOSITE_COPY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies the source image on the target image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copycyan">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copycyan">imagick::COMPOSITE_COPYCYAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies cyan from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copygreen">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copygreen">imagick::COMPOSITE_COPYGREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies green from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copymagenta">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copymagenta">imagick::COMPOSITE_COPYMAGENTA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies magenta from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copyopacity">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copyopacity">imagick::COMPOSITE_COPYOPACITY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies opacity from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copyred">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copyred">imagick::COMPOSITE_COPYRED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies red from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-copyyellow">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-copyyellow">imagick::COMPOSITE_COPYYELLOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Copies yellow from the source to target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-darken">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-darken">imagick::COMPOSITE_DARKEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens the target image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dstatop">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dstatop">imagick::COMPOSITE_DSTATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the destination lying inside of the source is composited over the source and replaces the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dst">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dst">imagick::COMPOSITE_DST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The target is left untouched
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dstin">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dstin">imagick::COMPOSITE_DSTIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The parts inside the source replace the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dstout">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dstout">imagick::COMPOSITE_DSTOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The parts outside the source replace the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dstover">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dstover">imagick::COMPOSITE_DSTOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Target replaces the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-difference">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-difference">imagick::COMPOSITE_DIFFERENCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtracts the darker of the two constituent colors from the lighter
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-displace">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-displace">imagick::COMPOSITE_DISPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Shifts target image pixels as defined by the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-dissolve">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-dissolve">imagick::COMPOSITE_DISSOLVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Dissolves the source in to the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-exclusion">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-exclusion">imagick::COMPOSITE_EXCLUSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Produces an effect similar to that of imagick::COMPOSITE_DIFFERENCE, but appears as lower contrast
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-hardlight">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-hardlight">imagick::COMPOSITE_HARDLIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multiplies or screens the colors, dependent on the source color value
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-hue">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-hue">imagick::COMPOSITE_HUE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Modifies the hue of the target as defined by source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-in">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-in">imagick::COMPOSITE_IN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites source into the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-lighten">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-lighten">imagick::COMPOSITE_LIGHTEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Lightens the target as defined by source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-luminize">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-luminize">imagick::COMPOSITE_LUMINIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Luminizes the target as defined by source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-minus">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-minus">imagick::COMPOSITE_MINUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtracts the source from the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-modulate">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-modulate">imagick::COMPOSITE_MODULATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Modulates the target brightness, saturation and hue as defined by source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-multiply">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-multiply">imagick::COMPOSITE_MULTIPLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multiplies the target to the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-out">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-out">imagick::COMPOSITE_OUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites outer parts of the source on the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-over">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-over">imagick::COMPOSITE_OVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Composites source over the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-overlay">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-overlay">imagick::COMPOSITE_OVERLAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Overlays the source on the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-plus">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-plus">imagick::COMPOSITE_PLUS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Adds the source to the target
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-replace">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-replace">imagick::COMPOSITE_REPLACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Replaces the target with the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-saturate">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-saturate">imagick::COMPOSITE_SATURATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Saturates the target as defined by the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-screen">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-screen">imagick::COMPOSITE_SCREEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source and destination are complemented and then multiplied and then replace the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-softlight">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-softlight">imagick::COMPOSITE_SOFTLIGHT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Darkens or lightens the colors, dependent on the source
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-srcatop">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-srcatop">imagick::COMPOSITE_SRCATOP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying inside of the destination is composited onto the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-src">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-src">imagick::COMPOSITE_SRC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source is copied to the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-srcin">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-srcin">imagick::COMPOSITE_SRCIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying inside of the destination replaces the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-srcout">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-srcout">imagick::COMPOSITE_SRCOUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source lying outside of the destination replaces the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-srcover">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-srcover">imagick::COMPOSITE_SRCOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source replaces the destination
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-subtract">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-subtract">imagick::COMPOSITE_SUBTRACT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Subtract the colors in the source image from the destination image
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-threshold">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-threshold">imagick::COMPOSITE_THRESHOLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The source is composited on the target as defined by source threshold
    </span>
   </dd>
  
  
   <dt id="imagick.constants.composite-xor">
    <strong><code><a href="imagick.constants.php#imagick.constants.composite-xor">imagick::COMPOSITE_XOR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The part of the source that lies outside of the destination is combined with the part of the destination that lies outside of the source
    </span>
   </dd>
  
 </dl>

 <dl id="imagick.constants.montagemode">
  <strong class="title"><strong><code>MONTAGEMODE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.montagemode-frame">
     <strong><code><a href="imagick.constants.php#imagick.constants.montagemode-frame">imagick::MONTAGEMODE_FRAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.montagemode-unframe">
     <strong><code><a href="imagick.constants.php#imagick.constants.montagemode-unframe">imagick::MONTAGEMODE_UNFRAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.montagemode-concatenate">
     <strong><code><a href="imagick.constants.php#imagick.constants.montagemode-concatenate">imagick::MONTAGEMODE_CONCATENATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.styles">
  <strong class="title"><strong><code>STYLE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.style-normal">
     <strong><code><a href="imagick.constants.php#imagick.constants.style-normal">imagick::STYLE_NORMAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.style-italic">
     <strong><code><a href="imagick.constants.php#imagick.constants.style-italic">imagick::STYLE_ITALIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.style-oblique">
     <strong><code><a href="imagick.constants.php#imagick.constants.style-oblique">imagick::STYLE_OBLIQUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.style-any">
     <strong><code><a href="imagick.constants.php#imagick.constants.style-any">imagick::STYLE_ANY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.filters">
  <strong class="title"><strong><code><a href="filter.constants.php#constant.filter-flag-none">FILTER_<span class="replaceable">*</span></a></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.filter-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-undefined">imagick::FILTER_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-point">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-point">imagick::FILTER_POINT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-box">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-box">imagick::FILTER_BOX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-triangle">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-triangle">imagick::FILTER_TRIANGLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-hermite">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-hermite">imagick::FILTER_HERMITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-hanning">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-hanning">imagick::FILTER_HANNING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-hamming">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-hamming">imagick::FILTER_HAMMING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-blackman">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-blackman">imagick::FILTER_BLACKMAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-gaussian">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-gaussian">imagick::FILTER_GAUSSIAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-quadratic">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-quadratic">imagick::FILTER_QUADRATIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-cubic">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-cubic">imagick::FILTER_CUBIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-catrom">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-catrom">imagick::FILTER_CATROM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-mitchell">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-mitchell">imagick::FILTER_MITCHELL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-lanczos">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-lanczos">imagick::FILTER_LANCZOS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-bessel">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-bessel">imagick::FILTER_BESSEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.filter-sinc">
     <strong><code><a href="imagick.constants.php#imagick.constants.filter-sinc">imagick::FILTER_SINC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.imagetype">
  <strong class="title"><strong><code>IMGTYPE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.imgtype-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-undefined">imagick::IMGTYPE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-bilevel">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-bilevel">imagick::IMGTYPE_BILEVEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-grayscale">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-grayscale">imagick::IMGTYPE_GRAYSCALE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-grayscalematte">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-grayscalematte">imagick::IMGTYPE_GRAYSCALEMATTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-palette">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-palette">imagick::IMGTYPE_PALETTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-palettematte">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-palettematte">imagick::IMGTYPE_PALETTEMATTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-truecolor">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-truecolor">imagick::IMGTYPE_TRUECOLOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-truecolormatte">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-truecolormatte">imagick::IMGTYPE_TRUECOLORMATTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-colorseparation">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-colorseparation">imagick::IMGTYPE_COLORSEPARATION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-colorseparationmatte">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-colorseparationmatte">imagick::IMGTYPE_COLORSEPARATIONMATTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.imgtype-optimize">
     <strong><code><a href="imagick.constants.php#imagick.constants.imgtype-optimize">imagick::IMGTYPE_OPTIMIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.resolution">
  <strong class="title"><strong><code>RESOLUTION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.resolution-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.resolution-undefined">imagick::RESOLUTION_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resolution-pixelsperinch">
     <strong><code><a href="imagick.constants.php#imagick.constants.resolution-pixelsperinch">imagick::RESOLUTION_PIXELSPERINCH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resolution-pixelspercentimeter">
     <strong><code><a href="imagick.constants.php#imagick.constants.resolution-pixelspercentimeter">imagick::RESOLUTION_PIXELSPERCENTIMETER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.compressiontype">
  <strong class="title"><strong><code>COMPRESSION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.compression-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-undefined">imagick::COMPRESSION_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-no">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-no">imagick::COMPRESSION_NO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-bzip">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-bzip">imagick::COMPRESSION_BZIP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-fax">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-fax">imagick::COMPRESSION_FAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-group4">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-group4">imagick::COMPRESSION_GROUP4</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-jpeg">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-jpeg">imagick::COMPRESSION_JPEG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-jpeg2000">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-jpeg2000">imagick::COMPRESSION_JPEG2000</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-losslessjpeg">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-losslessjpeg">imagick::COMPRESSION_LOSSLESSJPEG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-lzw">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-lzw">imagick::COMPRESSION_LZW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-rle">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-rle">imagick::COMPRESSION_RLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-zip">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-zip">imagick::COMPRESSION_ZIP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-dxt1">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-dxt1">imagick::COMPRESSION_DXT1</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-dxt3">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-dxt3">imagick::COMPRESSION_DXT3</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.compression-dxt5">
     <strong><code><a href="imagick.constants.php#imagick.constants.compression-dxt5">imagick::COMPRESSION_DXT5</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.0 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.paint">
  <strong class="title"><strong><code>PAINT_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.paint-point">
     <strong><code><a href="imagick.constants.php#imagick.constants.paint-point">imagick::PAINT_POINT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.paint-replace">
     <strong><code><a href="imagick.constants.php#imagick.constants.paint-replace">imagick::PAINT_REPLACE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.paint-floodfill">
     <strong><code><a href="imagick.constants.php#imagick.constants.paint-floodfill">imagick::PAINT_FLOODFILL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.paint-filltoborder">
     <strong><code><a href="imagick.constants.php#imagick.constants.paint-filltoborder">imagick::PAINT_FILLTOBORDER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.paint-reset">
     <strong><code><a href="imagick.constants.php#imagick.constants.paint-reset">imagick::PAINT_RESET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.gravity">
  <strong class="title"><strong><code>GRAVITY_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.gravity-northwest">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-northwest">imagick::GRAVITY_NORTHWEST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-north">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-north">imagick::GRAVITY_NORTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-northeast">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-northeast">imagick::GRAVITY_NORTHEAST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-west">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-west">imagick::GRAVITY_WEST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-center">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-center">imagick::GRAVITY_CENTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-east">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-east">imagick::GRAVITY_EAST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-southwest">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-southwest">imagick::GRAVITY_SOUTHWEST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-south">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-south">imagick::GRAVITY_SOUTH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.gravity-southeast">
     <strong><code><a href="imagick.constants.php#imagick.constants.gravity-southeast">imagick::GRAVITY_SOUTHEAST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.stretch">
  <strong class="title"><strong><code>STRETCH_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.stretch-normal">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-normal">imagick::STRETCH_NORMAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-ultracondensed">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-ultracondensed">imagick::STRETCH_ULTRACONDENSED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-condensed">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-condensed">imagick::STRETCH_CONDENSED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-semicondensed">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-semicondensed">imagick::STRETCH_SEMICONDENSED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-semiexpanded">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-semiexpanded">imagick::STRETCH_SEMIEXPANDED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-expanded">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-expanded">imagick::STRETCH_EXPANDED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-extraexpanded">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-extraexpanded">imagick::STRETCH_EXTRAEXPANDED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-ultraexpanded">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-ultraexpanded">imagick::STRETCH_ULTRAEXPANDED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.stretch-any">
     <strong><code><a href="imagick.constants.php#imagick.constants.stretch-any">imagick::STRETCH_ANY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.align">
  <strong class="title"><strong><code>ALIGN_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.align-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.align-undefined">imagick::ALIGN_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.align-left">
     <strong><code><a href="imagick.constants.php#imagick.constants.align-left">imagick::ALIGN_LEFT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.align-center">
     <strong><code><a href="imagick.constants.php#imagick.constants.align-center">imagick::ALIGN_CENTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.align-right">
     <strong><code><a href="imagick.constants.php#imagick.constants.align-right">imagick::ALIGN_RIGHT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.decoration">
  <strong class="title"><strong><code>DECORATION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.decoration-no">
     <strong><code><a href="imagick.constants.php#imagick.constants.decoration-no">imagick::DECORATION_NO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.decoration-underline">
     <strong><code><a href="imagick.constants.php#imagick.constants.decoration-underline">imagick::DECORATION_UNDERLINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.decoration-overline">
     <strong><code><a href="imagick.constants.php#imagick.constants.decoration-overline">imagick::DECORATION_OVERLINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.decoration-linetrough">
     <strong><code><a href="imagick.constants.php#imagick.constants.decoration-linetrough">imagick::DECORATION_LINETROUGH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.noise">
  <strong class="title"><strong><code>NOISE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.noise-uniform">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-uniform">imagick::NOISE_UNIFORM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-gaussian">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-gaussian">imagick::NOISE_GAUSSIAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-multiplicativegaussian">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-multiplicativegaussian">imagick::NOISE_MULTIPLICATIVEGAUSSIAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-impulse">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-impulse">imagick::NOISE_IMPULSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-laplacian">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-laplacian">imagick::NOISE_LAPLACIAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-poisson">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-poisson">imagick::NOISE_POISSON</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.noise-random">
     <strong><code><a href="imagick.constants.php#imagick.constants.noise-random">imagick::NOISE_RANDOM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.channel">
  <strong class="title"><strong><code>CHANNEL_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.channel-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-undefined">imagick::CHANNEL_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-red">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-red">imagick::CHANNEL_RED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-gray">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-gray">imagick::CHANNEL_GRAY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-cyan">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-cyan">imagick::CHANNEL_CYAN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-green">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-green">imagick::CHANNEL_GREEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-magenta">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-magenta">imagick::CHANNEL_MAGENTA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-blue">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-blue">imagick::CHANNEL_BLUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-yellow">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-yellow">imagick::CHANNEL_YELLOW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-alpha">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-alpha">imagick::CHANNEL_ALPHA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-opacity">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-opacity">imagick::CHANNEL_OPACITY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-matte">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-matte">imagick::CHANNEL_MATTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-black">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-black">imagick::CHANNEL_BLACK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-index">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-index">imagick::CHANNEL_INDEX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-all">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-all">imagick::CHANNEL_ALL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.channel-default">
     <strong><code><a href="imagick.constants.php#imagick.constants.channel-default">imagick::CHANNEL_DEFAULT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.metric">
  <strong class="title"><strong><code>METRIC_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.metric-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-undefined">imagick::METRIC_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.metric-meanabsoluteerror">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-meanabsoluteerror">imagick::METRIC_MEANABSOLUTEERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.metric-meansquareerror">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-meansquareerror">imagick::METRIC_MEANSQUAREERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.metric-peakabsoluteerror">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-peakabsoluteerror">imagick::METRIC_PEAKABSOLUTEERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.metric-peaksignaltonoiseratio">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-peaksignaltonoiseratio">imagick::METRIC_PEAKSIGNALTONOISERATIO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.metric-rootmeansquarederror">
     <strong><code><a href="imagick.constants.php#imagick.constants.metric-rootmeansquarederror">imagick::METRIC_ROOTMEANSQUAREDERROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.pixel">
  <strong class="title"><strong><code>PIXEL_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.pixel-char">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-char">imagick::PIXEL_CHAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-double">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-double">imagick::PIXEL_DOUBLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-float">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-float">imagick::PIXEL_FLOAT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-integer">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-integer">imagick::PIXEL_INTEGER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Only available for ImageMagick &lt; 7.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-long">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-long">imagick::PIXEL_LONG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-quantum">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-quantum">imagick::PIXEL_QUANTUM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pixel-short">
     <strong><code><a href="imagick.constants.php#imagick.constants.pixel-short">imagick::PIXEL_SHORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.evaluate">
  <strong class="title"><strong><code>EVALUATE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.evaluate-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-undefined">imagick::EVALUATE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-add">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-add">imagick::EVALUATE_ADD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-and">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-and">imagick::EVALUATE_AND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-divide">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-divide">imagick::EVALUATE_DIVIDE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-leftshift">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-leftshift">imagick::EVALUATE_LEFTSHIFT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-max">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-max">imagick::EVALUATE_MAX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-min">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-min">imagick::EVALUATE_MIN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-multiply">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-multiply">imagick::EVALUATE_MULTIPLY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-or">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-or">imagick::EVALUATE_OR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-rightshift">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-rightshift">imagick::EVALUATE_RIGHTSHIFT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-set">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-set">imagick::EVALUATE_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-subtract">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-subtract">imagick::EVALUATE_SUBTRACT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-xor">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-xor">imagick::EVALUATE_XOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-pow">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-pow">imagick::EVALUATE_POW</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-log">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-log">imagick::EVALUATE_LOG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-threshold">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-threshold">imagick::EVALUATE_THRESHOLD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-thresholdblack">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-thresholdblack">imagick::EVALUATE_THRESHOLDBLACK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-thresholdwhite">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-thresholdwhite">imagick::EVALUATE_THRESHOLDWHITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-gaussiannoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-gaussiannoise">imagick::EVALUATE_GAUSSIANNOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-impulsenoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-impulsenoise">imagick::EVALUATE_IMPULSENOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-laplaciannoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-laplaciannoise">imagick::EVALUATE_LAPLACIANNOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-multiplicativenoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-multiplicativenoise">imagick::EVALUATE_MULTIPLICATIVENOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-poissonnoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-poissonnoise">imagick::EVALUATE_POISSONNOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-uniformnoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-uniformnoise">imagick::EVALUATE_UNIFORMNOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-cosine">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-cosine">imagick::EVALUATE_COSINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-sine">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-sine">imagick::EVALUATE_SINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.evaluate-addmodulus">
     <strong><code><a href="imagick.constants.php#imagick.constants.evaluate-addmodulus">imagick::EVALUATE_ADDMODULUS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.4 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.colorspace">
  <strong class="title"><strong><code>COLORSPACE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.colorspace-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-undefined">imagick::COLORSPACE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-rgb">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-rgb">imagick::COLORSPACE_RGB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-gray">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-gray">imagick::COLORSPACE_GRAY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-transparent">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-transparent">imagick::COLORSPACE_TRANSPARENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-ohta">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-ohta">imagick::COLORSPACE_OHTA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-lab">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-lab">imagick::COLORSPACE_LAB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-xyz">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-xyz">imagick::COLORSPACE_XYZ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-ycbcr">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-ycbcr">imagick::COLORSPACE_YCBCR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-ycc">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-ycc">imagick::COLORSPACE_YCC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-yiq">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-yiq">imagick::COLORSPACE_YIQ</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-ypbpr">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-ypbpr">imagick::COLORSPACE_YPBPR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-yuv">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-yuv">imagick::COLORSPACE_YUV</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-cmyk">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-cmyk">imagick::COLORSPACE_CMYK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-srgb">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-srgb">imagick::COLORSPACE_SRGB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-hsb">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-hsb">imagick::COLORSPACE_HSB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-hsl">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-hsl">imagick::COLORSPACE_HSL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-hwb">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-hwb">imagick::COLORSPACE_HWB</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-rec601luma">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-rec601luma">imagick::COLORSPACE_REC601LUMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-rec709luma">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-rec709luma">imagick::COLORSPACE_REC709LUMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-log">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-log">imagick::COLORSPACE_LOG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.colorspace-cmy">
     <strong><code><a href="imagick.constants.php#imagick.constants.colorspace-cmy">imagick::COLORSPACE_CMY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.virtualpixelmethods">
  <strong class="title"><strong><code>VIRTUALPIXELMETHOD_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.virtualpixelmethod-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-undefined">imagick::VIRTUALPIXELMETHOD_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-background">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-background">imagick::VIRTUALPIXELMETHOD_BACKGROUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-constant">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-constant">imagick::VIRTUALPIXELMETHOD_CONSTANT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-edge">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-edge">imagick::VIRTUALPIXELMETHOD_EDGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-mirror">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-mirror">imagick::VIRTUALPIXELMETHOD_MIRROR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-tile">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-tile">imagick::VIRTUALPIXELMETHOD_TILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-transparent">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-transparent">imagick::VIRTUALPIXELMETHOD_TRANSPARENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-mask">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-mask">imagick::VIRTUALPIXELMETHOD_MASK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-black">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-black">imagick::VIRTUALPIXELMETHOD_BLACK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-gray">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-gray">imagick::VIRTUALPIXELMETHOD_GRAY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-white">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-white">imagick::VIRTUALPIXELMETHOD_WHITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-horizontaltile">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-horizontaltile">imagick::VIRTUALPIXELMETHOD_HORIZONTALTILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.virtualpixelmethod-verticaltile">
     <strong><code><a href="imagick.constants.php#imagick.constants.virtualpixelmethod-verticaltile">imagick::VIRTUALPIXELMETHOD_VERTICALTILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.3 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.preview">
  <strong class="title"><strong><code>PREVIEW_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.preview-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-undefined">imagick::PREVIEW_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-rotate">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-rotate">imagick::PREVIEW_ROTATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-shear">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-shear">imagick::PREVIEW_SHEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-roll">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-roll">imagick::PREVIEW_ROLL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-hue">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-hue">imagick::PREVIEW_HUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-saturation">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-saturation">imagick::PREVIEW_SATURATION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-brightness">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-brightness">imagick::PREVIEW_BRIGHTNESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-gamma">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-gamma">imagick::PREVIEW_GAMMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-spiff">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-spiff">imagick::PREVIEW_SPIFF</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-dull">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-dull">imagick::PREVIEW_DULL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-grayscale">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-grayscale">imagick::PREVIEW_GRAYSCALE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-quantize">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-quantize">imagick::PREVIEW_QUANTIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-despeckle">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-despeckle">imagick::PREVIEW_DESPECKLE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-reducenoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-reducenoise">imagick::PREVIEW_REDUCENOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-addnoise">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-addnoise">imagick::PREVIEW_ADDNOISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-sharpen">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-sharpen">imagick::PREVIEW_SHARPEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-blur">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-blur">imagick::PREVIEW_BLUR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-threshold">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-threshold">imagick::PREVIEW_THRESHOLD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-edgedetect">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-edgedetect">imagick::PREVIEW_EDGEDETECT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-spread">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-spread">imagick::PREVIEW_SPREAD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-solarize">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-solarize">imagick::PREVIEW_SOLARIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-shade">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-shade">imagick::PREVIEW_SHADE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-raise">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-raise">imagick::PREVIEW_RAISE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-segment">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-segment">imagick::PREVIEW_SEGMENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-swirl">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-swirl">imagick::PREVIEW_SWIRL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-implode">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-implode">imagick::PREVIEW_IMPLODE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-wave">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-wave">imagick::PREVIEW_WAVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-oilpaint">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-oilpaint">imagick::PREVIEW_OILPAINT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-charcoaldrawing">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-charcoaldrawing">imagick::PREVIEW_CHARCOALDRAWING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.preview-jpeg">
     <strong><code><a href="imagick.constants.php#imagick.constants.preview-jpeg">imagick::PREVIEW_JPEG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.renderingintent">
  <strong class="title"><strong><code>RENDERINGINTENT_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.renderingintent-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.renderingintent-undefined">imagick::RENDERINGINTENT_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.renderingintent-saturation">
     <strong><code><a href="imagick.constants.php#imagick.constants.renderingintent-saturation">imagick::RENDERINGINTENT_SATURATION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.renderingintent-perceptual">
     <strong><code><a href="imagick.constants.php#imagick.constants.renderingintent-perceptual">imagick::RENDERINGINTENT_PERCEPTUAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.renderingintent-absolute">
     <strong><code><a href="imagick.constants.php#imagick.constants.renderingintent-absolute">imagick::RENDERINGINTENT_ABSOLUTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.renderingintent-relative">
     <strong><code><a href="imagick.constants.php#imagick.constants.renderingintent-relative">imagick::RENDERINGINTENT_RELATIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.interlace">
  <strong class="title"><strong><code>INTERLACE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.interlace-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-undefined">imagick::INTERLACE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-no">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-no">imagick::INTERLACE_NO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-line">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-line">imagick::INTERLACE_LINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-plane">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-plane">imagick::INTERLACE_PLANE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-partition">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-partition">imagick::INTERLACE_PARTITION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-gif">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-gif">imagick::INTERLACE_GIF</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-jpeg">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-jpeg">imagick::INTERLACE_JPEG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interlace-png">
     <strong><code><a href="imagick.constants.php#imagick.constants.interlace-png">imagick::INTERLACE_PNG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.fillrule">
  <strong class="title"><strong><code>FILLRULE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.fillrule-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.fillrule-undefined">imagick::FILLRULE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.fillrule-evenodd">
     <strong><code><a href="imagick.constants.php#imagick.constants.fillrule-evenodd">imagick::FILLRULE_EVENODD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.fillrule-nonzero">
     <strong><code><a href="imagick.constants.php#imagick.constants.fillrule-nonzero">imagick::FILLRULE_NONZERO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.pathunits">
  <strong class="title"><strong><code>PATHUNITS_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.pathunits-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.pathunits-undefined">imagick::PATHUNITS_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pathunits-userspace">
     <strong><code><a href="imagick.constants.php#imagick.constants.pathunits-userspace">imagick::PATHUNITS_USERSPACE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pathunits-userspaceonuse">
     <strong><code><a href="imagick.constants.php#imagick.constants.pathunits-userspaceonuse">imagick::PATHUNITS_USERSPACEONUSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.pathunits-objectboundingbox">
     <strong><code><a href="imagick.constants.php#imagick.constants.pathunits-objectboundingbox">imagick::PATHUNITS_OBJECTBOUNDINGBOX</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.linecap">
  <strong class="title"><strong><code>LINECAP_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.linecap-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.linecap-undefined">imagick::LINECAP_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linecap-butt">
     <strong><code><a href="imagick.constants.php#imagick.constants.linecap-butt">imagick::LINECAP_BUTT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linecap-round">
     <strong><code><a href="imagick.constants.php#imagick.constants.linecap-round">imagick::LINECAP_ROUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linecap-square">
     <strong><code><a href="imagick.constants.php#imagick.constants.linecap-square">imagick::LINECAP_SQUARE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.linejoin">
  <strong class="title"><strong><code>LINEJOIN_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.linejoin-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.linejoin-undefined">imagick::LINEJOIN_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linejoin-miter">
     <strong><code><a href="imagick.constants.php#imagick.constants.linejoin-miter">imagick::LINEJOIN_MITER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linejoin-round">
     <strong><code><a href="imagick.constants.php#imagick.constants.linejoin-round">imagick::LINEJOIN_ROUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.linejoin-bevel">
     <strong><code><a href="imagick.constants.php#imagick.constants.linejoin-bevel">imagick::LINEJOIN_BEVEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.resourcetypes">
  <strong class="title"><strong><code>RESOURCETYPE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.resourcetype-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-undefined">imagick::RESOURCETYPE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-area">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-area">imagick::RESOURCETYPE_AREA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set the maximum width * height of an image that can reside in the pixel cache memory.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-disk">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-disk">imagick::RESOURCETYPE_DISK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set maximum amount of disk space in bytes permitted for use by the pixel cache.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-file">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-file">imagick::RESOURCETYPE_FILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set maximum number of open pixel cache files.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-map">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-map">imagick::RESOURCETYPE_MAP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set maximum amount of memory map in bytes to allocate for the pixel cache.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-memory">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-memory">imagick::RESOURCETYPE_MEMORY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set maximum amount of memory in bytes to allocate for the pixel cache from the heap.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.resourcetype-thread">
     <strong><code><a href="imagick.constants.php#imagick.constants.resourcetype-thread">imagick::RESOURCETYPE_THREAD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      Set maximum parallel threads.
      This constant is available if Imagick has been compiled against ImageMagick version 6.7.8 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.layermethod">
  <strong class="title"><strong><code>LAYERMETHOD_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.layermethod-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-undefined">imagick::LAYERMETHOD_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-coalesce">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-coalesce">imagick::LAYERMETHOD_COALESCE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-compareany">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-compareany">imagick::LAYERMETHOD_COMPAREANY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-compareclear">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-compareclear">imagick::LAYERMETHOD_COMPARECLEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-compareoverlay">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-compareoverlay">imagick::LAYERMETHOD_COMPAREOVERLAY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-dispose">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-dispose">imagick::LAYERMETHOD_DISPOSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-optimize">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-optimize">imagick::LAYERMETHOD_OPTIMIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-optimizeplus">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-optimizeplus">imagick::LAYERMETHOD_OPTIMIZEPLUS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.2.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-optimizeimage">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-optimizeimage">imagick::LAYERMETHOD_OPTIMIZEIMAGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-optimizetrans">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-optimizetrans">imagick::LAYERMETHOD_OPTIMIZETRANS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-removedups">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-removedups">imagick::LAYERMETHOD_REMOVEDUPS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-removezero">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-removezero">imagick::LAYERMETHOD_REMOVEZERO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-composite">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-composite">imagick::LAYERMETHOD_COMPOSITE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-merge">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-merge">imagick::LAYERMETHOD_MERGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-flatten">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-flatten">imagick::LAYERMETHOD_FLATTEN</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.layermethod-mosaic">
     <strong><code><a href="imagick.constants.php#imagick.constants.layermethod-mosaic">imagick::LAYERMETHOD_MOSAIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.7 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.orientation">
  <strong class="title"><strong><code>ORIENTATION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.orientation-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-undefined">imagick::ORIENTATION_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-topleft">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-topleft">imagick::ORIENTATION_TOPLEFT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-topright">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-topright">imagick::ORIENTATION_TOPRIGHT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-bottomright">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-bottomright">imagick::ORIENTATION_BOTTOMRIGHT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-bottomleft">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-bottomleft">imagick::ORIENTATION_BOTTOMLEFT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-lefttop">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-lefttop">imagick::ORIENTATION_LEFTTOP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-righttop">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-righttop">imagick::ORIENTATION_RIGHTTOP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-rightbottom">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-rightbottom">imagick::ORIENTATION_RIGHTBOTTOM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.orientation-leftbottom">
     <strong><code><a href="imagick.constants.php#imagick.constants.orientation-leftbottom">imagick::ORIENTATION_LEFTBOTTOM</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.0 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.distortion">
  <strong class="title"><strong><code>DISTORTION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.distortion-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-undefined">imagick::DISTORTION_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-affine">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-affine">imagick::DISTORTION_AFFINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-affineprojection">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-affineprojection">imagick::DISTORTION_AFFINEPROJECTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-arc">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-arc">imagick::DISTORTION_ARC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-bilinear">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-bilinear">imagick::DISTORTION_BILINEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-perspective">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-perspective">imagick::DISTORTION_PERSPECTIVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-perspectiveprojection">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-perspectiveprojection">imagick::DISTORTION_PERSPECTIVEPROJECTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-scalerotatetranslate">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-scalerotatetranslate">imagick::DISTORTION_SCALEROTATETRANSLATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-polynomial">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-polynomial">imagick::DISTORTION_POLYNOMIAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-polar">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-polar">imagick::DISTORTION_POLAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-depolar">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-depolar">imagick::DISTORTION_DEPOLAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-barrel">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-barrel">imagick::DISTORTION_BARREL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-barrelinverse">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-barrelinverse">imagick::DISTORTION_BARRELINVERSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-shepards">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-shepards">imagick::DISTORTION_SHEPARDS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.distortion-sentinel">
     <strong><code><a href="imagick.constants.php#imagick.constants.distortion-sentinel">imagick::DISTORTION_SENTINEL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.alphachannel">
  <strong class="title"><strong><code>ALPHACHANNEL_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.alphachannel-activate">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-activate">imagick::ALPHACHANNEL_ACTIVATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-deactivate">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-deactivate">imagick::ALPHACHANNEL_DEACTIVATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-reset">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-reset">imagick::ALPHACHANNEL_RESET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-set">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-set">imagick::ALPHACHANNEL_SET</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.8 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-undefined">imagick::ALPHACHANNEL_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-copy">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-copy">imagick::ALPHACHANNEL_COPY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-extract">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-extract">imagick::ALPHACHANNEL_EXTRACT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-opaque">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-opaque">imagick::ALPHACHANNEL_OPAQUE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-shape">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-shape">imagick::ALPHACHANNEL_SHAPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-transparent">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-transparent">imagick::ALPHACHANNEL_TRANSPARENT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-background">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-background">imagick::ALPHACHANNEL_BACKGROUND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.5.3 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-remove">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-remove">imagick::ALPHACHANNEL_REMOVE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.7.8 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-associate">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-associate">imagick::ALPHACHANNEL_ASSOCIATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.9.0 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.alphachannel-dissociate">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-dissociate">imagick::ALPHACHANNEL_DISSOCIATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.9.0 or higher.
     </span>
    </dd>
   
     
    <dt id="imagick.constants.alphachannel-on">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-on">imagick::ALPHACHANNEL_ON</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 7.0.0 or higher.
     </span>
    </dd>
   
     
    <dt id="imagick.constants.alphachannel-off">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-off">imagick::ALPHACHANNEL_OFF</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 7.0.0 or higher.
     </span>
    </dd>
   
     
    <dt id="imagick.constants.alphachannel-discrete">
     <strong><code><a href="imagick.constants.php#imagick.constants.alphachannel-discrete">imagick::ALPHACHANNEL_DISCRETE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 7.0.0 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.sparsecolormethod">
  <strong class="title"><strong><code>SPARSECOLORMETHOD_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.sparsecolormethod-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-undefined">imagick::SPARSECOLORMETHOD_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.sparsecolormethod-barycentric">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-barycentric">imagick::SPARSECOLORMETHOD_BARYCENTRIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.sparsecolormethod-bilinear">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-bilinear">imagick::SPARSECOLORMETHOD_BILINEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.sparsecolormethod-polynomial">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-polynomial">imagick::SPARSECOLORMETHOD_POLYNOMIAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.sparsecolormethod-spepards">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-spepards">imagick::SPARSECOLORMETHOD_SPEPARDS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.sparsecolormethod-voronoi">
     <strong><code><a href="imagick.constants.php#imagick.constants.sparsecolormethod-voronoi">imagick::SPARSECOLORMETHOD_VORONOI</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.function">
  <strong class="title"><strong><code>FUNCTION_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.function-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.function-undefined">imagick::FUNCTION_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.function-polynomial">
     <strong><code><a href="imagick.constants.php#imagick.constants.function-polynomial">imagick::FUNCTION_POLYNOMIAL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.function-sinusoid">
     <strong><code><a href="imagick.constants.php#imagick.constants.function-sinusoid">imagick::FUNCTION_SINUSOID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.9 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.interpolate">
  <strong class="title"><strong><code>INTERPOLATE_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.interpolate-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-undefined">imagick::INTERPOLATE_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-average">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-average">imagick::INTERPOLATE_AVERAGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-bicubic">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-bicubic">imagick::INTERPOLATE_BICUBIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-bilinear">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-bilinear">imagick::INTERPOLATE_BILINEAR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-filter">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-filter">imagick::INTERPOLATE_FILTER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-integer">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-integer">imagick::INTERPOLATE_INTEGER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-mesh">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-mesh">imagick::INTERPOLATE_MESH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-nearestneighbor">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-nearestneighbor">imagick::INTERPOLATE_NEARESTNEIGHBOR</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.2 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.interpolate-spline">
     <strong><code><a href="imagick.constants.php#imagick.constants.interpolate-spline">imagick::INTERPOLATE_SPLINE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.3.4 or higher.
     </span>
    </dd>
   
 </dl>

 <dl id="imagick.constants.dithermethod">
  <strong class="title"><strong><code>DITHERMETHOD_<span class="replaceable">*</span></code></strong> constants</strong>
  <p class="para"/>
   
    <dt id="imagick.constants.dithermethod-undefined">
     <strong><code><a href="imagick.constants.php#imagick.constants.dithermethod-undefined">imagick::DITHERMETHOD_UNDEFINED</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dithermethod-no">
     <strong><code><a href="imagick.constants.php#imagick.constants.dithermethod-no">imagick::DITHERMETHOD_NO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dithermethod-riemersma">
     <strong><code><a href="imagick.constants.php#imagick.constants.dithermethod-riemersma">imagick::DITHERMETHOD_RIEMERSMA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
     </span>
    </dd>
   
   
    <dt id="imagick.constants.dithermethod-floydsteinberg">
     <strong><code><a href="imagick.constants.php#imagick.constants.dithermethod-floydsteinberg">imagick::DITHERMETHOD_FLOYDSTEINBERG</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <span class="simpara">
      This constant is available if Imagick has been compiled against ImageMagick version 6.4.6 or higher.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imagick/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimagick.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=imagick.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122744">  <div class="votes">
    <div id="Vu122744">
    <a href="/manual/vote-note.php?id=122744&amp;page=imagick.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122744">
    <a href="/manual/vote-note.php?id=122744&amp;page=imagick.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122744" title="75% like this...">
    2
    </div>
  </div>
  <a href="#122744" class="name">
  <strong class="user"><em>ferenczi dot krisztian at gmail dot com</em></strong></a><a class="genanchor" href="#122744"> &para;</a><div class="date" title="2018-05-18 12:38"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122744">
<div class="phpcode"><code><span class="html">The `COLOR_OPACITY` doesn't exist if you are using ImageMagick lib 7 or newer version!<br /><br />Here is the c source code:<br /><br />#if MagickLibVersion &lt; 0x700<br />    IMAGICK_REGISTER_CONST_LONG("COLOR_OPACITY", PHP_IMAGICK_COLOR_OPACITY);<br />#endif<br /><br />There isn't any information about it anywhere (or I didn't find it)! So, if you want to use it, use the 6 version of lib! You can see the current installed version of lib with this command:<br /><br />$ identify -version</span></code></div>
  </div>
 </div>
  <div class="note" id="130473">  <div class="votes">
    <div id="Vu130473">
    <a href="/manual/vote-note.php?id=130473&amp;page=imagick.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130473">
    <a href="/manual/vote-note.php?id=130473&amp;page=imagick.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130473" title="no votes...">
    0
    </div>
  </div>
  <a href="#130473" class="name">
  <strong class="user"><em>aschmidt at anamera dot net</em></strong></a><a class="genanchor" href="#130473"> &para;</a><div class="date" title="2025-09-08 12:19"><strong>22 days ago</strong></div>
  <div class="text" id="Hcom130473">
<div class="phpcode"><code><span class="html">Documentation seems to be missing an enumeration of the int values that getColorspace will return.<br /><br />Here the int values of PHP 8.4.10:<br /><br />Imagick::COLORSPACE_UNDEFINED    0<br />Imagick::COLORSPACE_CMY    1<br />Imagick::COLORSPACE_CMYK    2<br />Imagick::COLORSPACE_GRAY    3<br />Imagick::COLORSPACE_HSB    6<br />Imagick::COLORSPACE_HSL    8<br />Imagick::COLORSPACE_HWB    10<br />Imagick::COLORSPACE_LOG    15<br />Imagick::COLORSPACE_OHTA    18<br />Imagick::COLORSPACE_RGB    21<br />Imagick::COLORSPACE_SRGB    23<br />Imagick::COLORSPACE_TRANSPARENT    24<br />Imagick::COLORSPACE_XYZ    26<br />Imagick::COLORSPACE_YCBCR    27<br />Imagick::COLORSPACE_YCC    28<br />Imagick::COLORSPACE_YIQ    30<br />Imagick::COLORSPACE_YPBPR    31<br />Imagick::COLORSPACE_YUV    32<br /><br />Undefined are:<br />Imagick::COLORSPACE_LAB<br />Imagick::COLORSPACE_REC601LUMA<br />Imagick::COLORSPACE_REC709LUMA</span></code></div>
  </div>
 </div>
  <div class="note" id="121281">  <div class="votes">
    <div id="Vu121281">
    <a href="/manual/vote-note.php?id=121281&amp;page=imagick.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121281">
    <a href="/manual/vote-note.php?id=121281&amp;page=imagick.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121281" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121281" class="name">
  <strong class="user"><em>guy dot paddock at redbottledesign dot com</em></strong></a><a class="genanchor" href="#121281"> &para;</a><div class="date" title="2017-06-28 02:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121281">
<div class="phpcode"><code><span class="html">I believe the description for imagick::COMPOSITE_MINUS is incorrect. It states:<br /><br />"Subtracts the source from the target"<br /><br />But according to ImageMagick's documentation:<br /><br />"The original method name 'Minus' is a synonym for 'Minus_Dst' meaning 'minus the destination'"<br /><br />And defines "Minus_Dst" as:<br />"Src - Dest"<br /><br />So the description of "imagick::COMPOSITE_MINUS" should be "Subtracts the target from the source"</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=imagick.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/imagick.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.imagick.php">ImageMagick</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.imagick.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="imagick.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="imagick.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="imagick.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.imagick.php" title="Imagick">Imagick</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickdraw.php" title="ImagickDraw">ImagickDraw</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixel.php" title="ImagickPixel">ImagickPixel</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickpixeliterator.php" title="ImagickPixelIterator">ImagickPixelIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.imagickkernel.php" title="ImagickKernel">ImagickKernel</a>
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
