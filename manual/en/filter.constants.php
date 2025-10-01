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

 <link rel="canonical" href="https://www.php.net/manual/en/filter.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/filter.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/filter.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.filter.php">
 <link rel="prev" href="https://www.php.net/manual/en/filter.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/filter.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/filter.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/filter.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/filter.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/filter.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/filter.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/filter.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/filter.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/filter.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/filter.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/filter.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/filter.constants.php" hreflang="zh">

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
        <a href="filter.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="filter.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.filter.php'>Filter</a></li>      </ul>
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
            <option value='en/filter.constants.php' selected="selected">English</option>
            <option value='de/filter.constants.php'>German</option>
            <option value='es/filter.constants.php'>Spanish</option>
            <option value='fr/filter.constants.php'>French</option>
            <option value='it/filter.constants.php'>Italian</option>
            <option value='ja/filter.constants.php'>Japanese</option>
            <option value='pt_BR/filter.constants.php'>Brazilian Portuguese</option>
            <option value='ru/filter.constants.php'>Russian</option>
            <option value='tr/filter.constants.php'>Turkish</option>
            <option value='uk/filter.constants.php'>Ukrainian</option>
            <option value='zh/filter.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="filter.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

 <dl>
  <strong class="title">Input Constants</strong>
  <p class="simpara">
   These constants are used by
   <span class="function"><a href="function.filter-input.php" class="function">filter_input()</a></span> and
   <span class="function"><a href="function.filter-input-array.php" class="function">filter_input_array()</a></span>.
  </p>
  
   <dt id="constant.input-post">
    <strong><code><a href="filter.constants.php#constant.input-post">INPUT_POST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.post.php" class="link">POST</a> variables.
    </span>
   </dd>
  
  
   <dt id="constant.input-get">
    <strong><code><a href="filter.constants.php#constant.input-get">INPUT_GET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.get.php" class="link">GET</a> variables.
    </span>
   </dd>
  
  
   <dt id="constant.input-cookie">
    <strong><code><a href="filter.constants.php#constant.input-cookie">INPUT_COOKIE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.cookies.php" class="link">COOKIE</a> variables.
    </span>
   </dd>
  
  
   <dt id="constant.input-env">
    <strong><code><a href="filter.constants.php#constant.input-env">INPUT_ENV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.environment.php" class="link">ENV</a> variables.
    </span>
   </dd>
  
  
   <dt id="constant.input-server">
    <strong><code><a href="filter.constants.php#constant.input-server">INPUT_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.server.php" class="link">SERVER</a> variables.
    </span>
   </dd>
  
  
   <dt id="constant.input-session">
    <strong><code><a href="filter.constants.php#constant.input-session">INPUT_SESSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.session.php" class="link">SESSION</a> variables.
     (Removed as of PHP 8.0.0; was not implemented previously)
    </span>
   </dd>
  
  
   <dt id="constant.input-request">
    <strong><code><a href="filter.constants.php#constant.input-request">INPUT_REQUEST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     <a href="reserved.variables.request.php" class="link">REQUEST</a> variables.
     (Removed as of PHP 8.0.0; was not implemented previously)
    </span>
   </dd>
  
 </dl>

 <dl id="filter.constants.flags.generic">
  <strong class="title">Generic Filter Flags</strong>
  
   <dt id="constant.filter-flag-none">
    <strong><code><a href="filter.constants.php#constant.filter-flag-none">FILTER_FLAG_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No flags.
    </span>
   </dd>
  
  
   <dt id="constant.filter-require-scalar">
    <strong><code><a href="filter.constants.php#constant.filter-require-scalar">FILTER_REQUIRE_SCALAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Flag used to require the input of the filter to be a scalar.
    </span>
   </dd>
  
  
   <dt id="constant.filter-require-array">
    <strong><code><a href="filter.constants.php#constant.filter-require-array">FILTER_REQUIRE_ARRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Flag used to require the input of the filter to be an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-force-array">
    <strong><code><a href="filter.constants.php#constant.filter-force-array">FILTER_FORCE_ARRAY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This flags wraps scalar inputs into a one element <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
     for filters which operate on arrays.
    </span>
   </dd>
  
  
   <dt id="constant.filter-null-on-failure">
    <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> instead of <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
    </span>
    <span class="simpara">
     Usable with any validation
     <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></code></strong>
     filter.
    </span>
   </dd>
  
 </dl>

 <dl id="filter.constants.flags.sanitization">
  <strong class="title">Sanitization Filter Flags</strong>
  
   <dt id="constant.filter-flag-strip-low">
    <strong><code><a href="filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_LOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Strip characters with ASCII value less than 32.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-strip-high">
    <strong><code><a href="filter.constants.php#constant.filter-flag-strip-high">FILTER_FLAG_STRIP_HIGH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Strip characters with ASCII value greater than 127.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-strip-backtick">
    <strong><code><a href="filter.constants.php#constant.filter-flag-strip-backtick">FILTER_FLAG_STRIP_BACKTICK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Strips backtick (<code class="literal">`</code>) characters.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-encode-low">
    <strong><code><a href="filter.constants.php#constant.filter-flag-encode-low">FILTER_FLAG_ENCODE_LOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encode characters with ASCII value less than 32.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-encode-high">
    <strong><code><a href="filter.constants.php#constant.filter-flag-encode-high">FILTER_FLAG_ENCODE_HIGH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encode characters with ASCII value greater than 127.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-encode-amp">
    <strong><code><a href="filter.constants.php#constant.filter-flag-encode-amp">FILTER_FLAG_ENCODE_AMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encode <code class="literal">&amp;</code>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-no-encode-quotes">
    <strong><code><a href="filter.constants.php#constant.filter-flag-no-encode-quotes">FILTER_FLAG_NO_ENCODE_QUOTES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Singe and double quotes (<code class="literal">&#039;</code> and <code class="literal">&quot;</code>)
     will not be encoded.
    </span>
   </dd>
  
  
   <dt id="constant.filter-flag-empty-string-null">
    <strong><code><a href="filter.constants.php#constant.filter-flag-empty-string-null">FILTER_FLAG_EMPTY_STRING_NULL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     
     If sanitizing a string results in an empty string,
     convert the value to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
    </span>
   </dd>
  
 </dl>

 <dl id="filter.constants.validation">
  <strong class="title">Validation Filters</strong>

  
   <dt id="constant.filter-validate-bool">
    <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_BOOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for <code class="literal">&quot;1&quot;</code>,
     <code class="literal">&quot;true&quot;</code>,
     <code class="literal">&quot;on&quot;</code>,
     and <code class="literal">&quot;yes&quot;</code>.
    </span>
    <span class="simpara">
     Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> for <code class="literal">&quot;0&quot;</code>,
     <code class="literal">&quot;false&quot;</code>,
     <code class="literal">&quot;off&quot;</code>,
     <code class="literal">&quot;no&quot;</code>, and
     <code class="literal">&quot;&quot;</code>.
    </span>
    <span class="simpara">
     The return value for non-boolean values depends on the
     <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong>.
     If it is set, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned, otherwise <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is returned.
    </span>
    <dl id="filter.constants.validation.bool.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
    <span class="simpara">
     Available as of PHP 8.0.0.
    </span>
   </dd>
  

  
   <dt id="constant.filter-validate-boolean">
    <strong><code><a href="filter.constants.php#constant.filter-validate-boolean">FILTER_VALIDATE_BOOLEAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_BOOL</a></code></strong>.
     The alias was available prior to the introduction of its canonical
     name in PHP 8.0.0.
    </span>
   </dd>
  

  
   <dt id="constant.filter-validate-int">
    <strong><code><a href="filter.constants.php#constant.filter-validate-int">FILTER_VALIDATE_INT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the value is an integer,
     on success it is converted to type <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
    </span>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      String values are trimmed using <span class="function"><a href="function.trim.php" class="function">trim()</a></span>
      before validation.
     </span>
    </p></blockquote>

    <dl id="filter.constants.validation.int.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
     
      <dt><code class="literal">min_range</code></dt>
      <dd>
       <span class="simpara">
        Value is only valid if it is greater than or equal to the provided value.
       </span>
      </dd>
     
     
      <dt><code class="literal">max_range</code></dt>
      <dd>
       <span class="simpara">
        Value is only valid if it is less than or equal to the provided value.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.int.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-allow-octal">
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-octal">FILTER_FLAG_ALLOW_OCTAL</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        
        Allow integers in octal notation
        (<code class="literal">0[0-7]+</code>).
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-allow-hex">
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-hex">FILTER_FLAG_ALLOW_HEX</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Allow integers in hexadecimal notation
        (<code class="literal">0x[0-9a-fA-F]+</code>).
       </span>
      </dd>
     
    </dl>
   </dd>
  

  
   <dt id="constant.filter-validate-float">
    <strong><code><a href="filter.constants.php#constant.filter-validate-float">FILTER_VALIDATE_FLOAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the value is a float,
     on success it is converted to type <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
    </span>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      String values are trimmed using <span class="function"><a href="function.trim.php" class="function">trim()</a></span>
      before validation.
     </span>
    </p></blockquote>

    <dl id="filter.constants.validation.float.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
     
      <dt><code class="literal">decimal</code></dt>
      <dd>
       <span class="simpara">
        
       </span>
      </dd>
     
     
      <dt><code class="literal">min_range</code></dt>
      <dd>
       <span class="simpara">
        Value is only valid if it is greater than or equal to the provided value.
        Available as of PHP 7.4.0.
       </span>
      </dd>
     
     
      <dt><code class="literal">max_range</code></dt>
      <dd>
       <span class="simpara">
        Value is only valid if it is less than or equal to the provided value.
        Available as of PHP 7.4.0.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.float.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt>
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-thousand">FILTER_FLAG_ALLOW_THOUSAND</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Accept commas (<code class="literal">,</code>),
        which usually represent the thousand separator.
       </span>
      </dd>
     
    </dl>
   </dd>
  
  
   <dt id="constant.filter-validate-regexp">
    <strong><code><a href="filter.constants.php#constant.filter-validate-regexp">FILTER_VALIDATE_REGEXP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates value against the regular expression provided by the
     <code class="literal">regexp</code> option.
    </span>

    <dl id="filter.constants.validation.regex.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
     
      <dt><code class="literal">regexp</code></dt>
      <dd>
       <span class="simpara">
        <a href="book.pcre.php" class="link">Perl-compatible</a> regular expression.
       </span>
      </dd>
     
    </dl>
   </dd>
  

  
   <dt id="constant.filter-validate-url">
    <strong><code><a href="filter.constants.php#constant.filter-validate-url">FILTER_VALIDATE_URL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the <abbr title="Uniform Resource Locator">URL</abbr> name is valid according to
     <a href="https://datatracker.ietf.org/doc/html/rfc2396" class="link external">&raquo;&nbsp;RFC 2396</a>.
    </span>
    <dl id="filter.constants.validation.url.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.url.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-scheme-required">
       <strong><code><a href="filter.constants.php#constant.filter-flag-scheme-required">FILTER_FLAG_SCHEME_REQUIRED</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Requires the <abbr title="Uniform Resource Locator">URL</abbr> to contain a scheme part.
       </span>
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="simpara">
         <em>DEPRECATED</em> as of PHP 7.3.0 and
         <em>REMOVED</em> as of PHP 8.0.0.
         This is because it is always implied by the
         <strong><code><a href="filter.constants.php#constant.filter-validate-url">FILTER_VALIDATE_URL</a></code></strong> filter.
        </p>
       </div>
      </dd>
     
     
      <dt id="constant.filter-flag-host-required">
       <strong><code><a href="filter.constants.php#constant.filter-flag-host-required">FILTER_FLAG_HOST_REQUIRED</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Requires the <abbr title="Uniform Resource Locator">URL</abbr> to contain a host part.
       </span>
       <div class="warning"><strong class="warning">Warning</strong>
        <p class="simpara">
         <em>DEPRECATED</em> as of PHP 7.3.0 and
         <em>REMOVED</em> as of PHP 8.0.0.
         This is because it is always implied by the
         <strong><code><a href="filter.constants.php#constant.filter-validate-url">FILTER_VALIDATE_URL</a></code></strong> filter.
        </p>
       </div>
      </dd>
     
     
      <dt id="constant.filter-flag-path-required">
       <strong><code><a href="filter.constants.php#constant.filter-flag-path-required">FILTER_FLAG_PATH_REQUIRED</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Requires the <abbr title="Uniform Resource Locator">URL</abbr> to contain a path part.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-query-required">
       <strong><code><a href="filter.constants.php#constant.filter-flag-query-required">FILTER_FLAG_QUERY_REQUIRED</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Requires the <abbr title="Uniform Resource Locator">URL</abbr> to contain a query part.
       </span>
      </dd>
     
    </dl>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      A valid <abbr title="Uniform Resource Locator">URL</abbr> may not specify the
      <abbr title="Hypertext Transfer Protocol">HTTP</abbr> protocol (<code class="literal">http://</code>).
      Therefore, further validation may be required to determine if the
      <abbr title="Uniform Resource Locator">URL</abbr> uses an expected protocol,
      e.g. <code class="literal">ssh://</code> or <code class="literal">mailto:</code>.
     </p>
    </div>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      This filter only works on <abbr title="American Standard Code for Information Interchange">ASCII</abbr> <abbr title="Uniform Resource Locator">URL</abbr>s.
      This means that Internationalized Domain Names (IDN) will always be rejected.
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.filter-validate-domain">
    <strong><code><a href="filter.constants.php#constant.filter-validate-domain">FILTER_VALIDATE_DOMAIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the domain name is valid according to
     <a href="https://datatracker.ietf.org/doc/html/rfc952" class="link external">&raquo;&nbsp;RFC 952</a>,
     <a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">&raquo;&nbsp;RFC 1034</a>,
     <a href="https://datatracker.ietf.org/doc/html/rfc1035" class="link external">&raquo;&nbsp;RFC 1035</a>,
     <a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">&raquo;&nbsp;RFC 1123</a>,
     <a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">&raquo;&nbsp;RFC 2732</a>,
     and
     <a href="https://datatracker.ietf.org/doc/html/rfc2181" class="link external">&raquo;&nbsp;RFC 2181</a>.
    </span>
    <dl id="filter.constants.validation.domain.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.domain.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-hostname">
       <strong><code><a href="filter.constants.php#constant.filter-flag-hostname">FILTER_FLAG_HOSTNAME</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Require hostnames to start with an alphanumeric character and contain
        only alphanumerics or hyphens.
       </span>
      </dd>
     
    </dl>
   </dd>
  
  
   <dt id="constant.filter-validate-email">
    <strong><code><a href="filter.constants.php#constant.filter-validate-email">FILTER_VALIDATE_EMAIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the value is a &quot;valid&quot; e-mail address.
    </span>

    <span class="simpara">
     The validation is performed against the <code class="literal">addr-spec</code>
     syntax in
     <a href="https://datatracker.ietf.org/doc/html/rfc822" class="link external">&raquo;&nbsp;RFC 822</a>.
     However, comments, whitespace folding, and dotless domain names
     are not supported, and thus will be rejected.
    </span>

    <dl id="filter.constants.validation.email.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.email.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-email-unicode">
       <strong><code><a href="filter.constants.php#constant.filter-flag-email-unicode">FILTER_FLAG_EMAIL_UNICODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Accepts Unicode characters in the local part.
        Available as of PHP 7.1.0.
       </span>
      </dd>
     
    </dl>

    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Email validation is complex and the only true way to confirm an email
      is valid and exists is to send an email to the address.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.filter-validate-ip">
    <strong><code><a href="filter.constants.php#constant.filter-validate-ip">FILTER_VALIDATE_IP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Validates value as IP address.
    </p>
    <dl id="filter.constants.validation.ip.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
    <dl id="filter.constants.validation.ip.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-ipv4">
       <strong><code><a href="filter.constants.php#constant.filter-flag-ipv4">FILTER_FLAG_IPV4</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Allow IPv4 address.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-ipv6">
       <strong><code><a href="filter.constants.php#constant.filter-flag-ipv6">FILTER_FLAG_IPV6</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Allow IPv6 address.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-no-res-range">
       <strong><code><a href="filter.constants.php#constant.filter-flag-no-res-range">FILTER_FLAG_NO_RES_RANGE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Deny reserved addresses.
       </span>
       <span class="simpara">
        These are the ranges that are marked as
        <code class="literal">Reserved-By-Protocol</code> in
        <a href="https://datatracker.ietf.org/doc/html/rfc6890" class="link external">&raquo;&nbsp;RFC 6890</a>.
       </span>
       <p class="para">
        Which for IPv4 corresponds to the following ranges:
        <span class="simplelist"><code class="literal">0.0.0.0/8</code>, <code class="literal">169.254.0.0/16</code>, <code class="literal">127.0.0.0/8</code>, <code class="literal">240.0.0.0/4</code></span>.
       </p>
       <p class="para">
        And for IPv6 corresponds to the following ranges:
        <span class="simplelist"><code class="literal">::1/128</code>, <code class="literal">::/128</code>, <code class="literal">::FFFF:0:0/96</code>, <code class="literal">FE80::/10</code></span>.
       </p>
      </dd>
     
     
      <dt id="constant.filter-flag-no-priv-range">
       <strong><code><a href="filter.constants.php#constant.filter-flag-no-priv-range">FILTER_FLAG_NO_PRIV_RANGE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Deny private addresses.
       </span>
       <p class="para">
        These are IPv4 addresses which are in the following ranges:
        <span class="simplelist"><code class="literal">10.0.0.0/8</code>, <code class="literal">172.16.0.0/12</code>, <code class="literal">192.168.0.0/16</code></span>.
       </p>
       <span class="simpara">
        These are IPv6 addresses starting with
        <code class="literal">FD</code> or <code class="literal">FC</code>.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-global-range">
       <strong><code><a href="filter.constants.php#constant.filter-flag-global-range">FILTER_FLAG_GLOBAL_RANGE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Only allow global addresses.
        These can be found in
        <a href="https://datatracker.ietf.org/doc/html/rfc6890" class="link external">&raquo;&nbsp;RFC 6890</a>
        where the <code class="literal">Global</code> attribute is <code class="literal">True</code>.
        Available as of PHP 8.2.0.
       </span>
      </dd>
     
    </dl>
   </dd>
  

  
   <dt id="constant.filter-validate-mac">
    <strong><code><a href="filter.constants.php#constant.filter-validate-mac">FILTER_VALIDATE_MAC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validates whether the value is a MAC address.
    </span>

    <dl id="filter.constants.validation.mac.options">
     <strong class="title">Available options</strong>
     
      <dt><code class="literal">default</code></dt>
      <dd>
       <span class="simpara">
        Value to return in case the filter fails.
       </span>
      </dd>
     
    </dl>
   </dd>
  
 </dl>

 <dl id="filter.constants.sanitization">
  <strong class="title">Sanitizing Filters</strong>
  
   <dt id="constant.filter-unsafe-raw">
    <strong><code><a href="filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This filter does nothing.
    </span>
    <span class="simpara">
     However, it can strip or encode special characters if used together with
     the <strong><code><a href="filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_<span class="replaceable">*</span></a></code></strong>
     and <strong><code><a href="filter.constants.php#constant.filter-flag-encode-low">FILTER_FLAG_ENCODE_<span class="replaceable">*</span></a></code></strong>
     filter sanitization flags.
    </span>
   </dd>
  
  
   <dt id="constant.filter-default">
    <strong><code><a href="filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-string">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_STRING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This filter strips tags and HTML-encodes double and single quotes.
    </span>
    <span class="simpara">
     Optionally it can strip or encode specified characters if used together with
     the <strong><code><a href="filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_<span class="replaceable">*</span></a></code></strong>
     and <strong><code><a href="filter.constants.php#constant.filter-flag-encode-low">FILTER_FLAG_ENCODE_<span class="replaceable">*</span></a></code></strong>
     filter sanitization flags.
    </span>
    <span class="simpara">
     The behaviour of encoding quotes can be disabled by using the
     <strong><code><a href="filter.constants.php#constant.filter-flag-no-encode-quotes">FILTER_FLAG_NO_ENCODE_QUOTES</a></code></strong> filter flag.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      <em>Deprecated</em> as of PHP 8.1.0,
      use <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> instead.
     </p>
    </div>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      The way this filter strips tags is not equivalent to
      <span class="function"><a href="function.strip-tags.php" class="function">strip_tags()</a></span>.
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.filter-sanitize-stripped">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-stripped">FILTER_SANITIZE_STRIPPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_STRING</a></code></strong>.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      <em>Deprecated</em> as of PHP 8.1.0,
      use <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span> instead.
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.filter-sanitize-encoded">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-encoded">FILTER_SANITIZE_ENCODED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This filter URL-encodes a string.
    </span>
    <span class="simpara">
     Optionally it can strip or encode specified characters if used together with
     the <strong><code><a href="filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_<span class="replaceable">*</span></a></code></strong>
     and <strong><code><a href="filter.constants.php#constant.filter-flag-encode-low">FILTER_FLAG_ENCODE_<span class="replaceable">*</span></a></code></strong>
     filter sanitization flags.
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-special-chars">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-special-chars">FILTER_SANITIZE_SPECIAL_CHARS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     This filter HTML-encodes
     <span class="simplelist"><code class="literal">&#039;</code>, <code class="literal">&quot;</code>, <code class="literal">&lt;</code>, <code class="literal">&gt;</code>, <code class="literal">&amp;</code></span>
     and characters with an ASCII value less than 32.
    </p>
    <span class="simpara">
     Optionally it can strip specified characters if used together with
     the <strong><code><a href="filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_<span class="replaceable">*</span></a></code></strong>
     filter sanitization flags, and it can encode characters with ASCII value
     greater than 127 using <strong><code><a href="filter.constants.php#constant.filter-flag-encode-high">FILTER_FLAG_ENCODE_HIGH</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-full-special-chars">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-full-special-chars">FILTER_SANITIZE_FULL_SPECIAL_CHARS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This filter is equivalent to calling <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>
     with <strong><code><a href="string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong> set.
    </span>
    <span class="simpara">
     The behaviour of encoding quotes can be disabled by using the
     <strong><code><a href="filter.constants.php#constant.filter-flag-no-encode-quotes">FILTER_FLAG_NO_ENCODE_QUOTES</a></code></strong> filter flag.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Like <span class="function"><a href="function.htmlspecialchars.php" class="function">htmlspecialchars()</a></span>, this filter is aware of the
      <a href="ini.core.php#ini.default-charset" class="link">default_charset</a> INI setting.
      If a sequence of bytes is detected that makes up an invalid character
      in the current character set then the entire string is rejected
      resulting in a empty string being returned.
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.filter-sanitize-email">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-email">FILTER_SANITIZE_EMAIL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sanitize the string by removing all characters except
     latin letters (<code class="literal">[a-zA-Z]</code>),
     digits (<code class="literal">[0-9]</code>),
     and the special characters
     <code class="literal">!#$%&amp;&#039;*+-=?^_`{|}~@.[]</code>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-url">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-url">FILTER_SANITIZE_URL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sanitize the string by removing all characters except
     latin letters (<code class="literal">[a-zA-Z]</code>),
     digits (<code class="literal">[0-9]</code>),
     and the special characters
     <code class="literal">$-_.+!*&#039;(),{}|\\^~[]`&lt;&gt;#%&quot;;/?:@&amp;=</code>.
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-number-int">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-number-int">FILTER_SANITIZE_NUMBER_INT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sanitize the string by removing all characters except digits
     (<code class="literal">[0-9]</code>), plus sign (<code class="literal">+</code>),
     and minus sign (<code class="literal">-</code>).
    </span>
   </dd>
  
  
   <dt id="constant.filter-sanitize-number-float">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-number-float">FILTER_SANITIZE_NUMBER_FLOAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sanitize the string by removing all characters except digits
     (<code class="literal">[0-9]</code>), plus sign (<code class="literal">+</code>),
     and minus sign (<code class="literal">-</code>).
    </span>

    <dl id="filter.constants.sanitization.float.flags">
     <strong class="title">Optional Flags</strong>
     
      <dt id="constant.filter-flag-allow-fraction">
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-fraction">FILTER_FLAG_ALLOW_FRACTION</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Accept dot (<code class="literal">.</code>) character,
        which usually represents the separator between the integer and
        fractional parts.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-allow-thousand">
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-thousand">FILTER_FLAG_ALLOW_THOUSAND</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Accept commas (<code class="literal">,</code>) character,
        which usually represents the thousand separator.
       </span>
      </dd>
     
     
      <dt id="constant.filter-flag-allow-scientific">
       <strong><code><a href="filter.constants.php#constant.filter-flag-allow-scientific">FILTER_FLAG_ALLOW_SCIENTIFIC</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
       <span class="simpara">
        Accept numbers in scientific notation by allowing the
        <code class="literal">e</code> and <code class="literal">E</code> characters.
       </span>
      </dd>
     
    </dl>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      If the <strong><code><a href="filter.constants.php#constant.filter-flag-allow-fraction">FILTER_FLAG_ALLOW_FRACTION</a></code></strong> flag is not used,
      then the decimal separator is removed, altering the value received.
     </p>
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$number </span><span style="color: #007700">= </span><span style="color: #DD0000">'12.34'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_SANITIZE_NUMBER_FLOAT</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$number</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_SANITIZE_NUMBER_FLOAT</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_FLAG_ALLOW_FRACTION</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <p class="para">The above example will output:</p>
      <div class="example-contents screen">
<div class="cdata"><pre>
string(4) &quot;1234&quot;
string(5) &quot;12.34&quot;
</pre></div>
      </div>
     </div>
    </div>
   </dd>
  

  
   <dt id="constant.filter-sanitize-add-slashes">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Apply <span class="function"><a href="function.addslashes.php" class="function">addslashes()</a></span> to the input.
     Available as of PHP 7.3.0.
    </span>
   </dd>
  

  
   <dt id="constant.filter-sanitize-magic-quotes">
    <strong><code><a href="filter.constants.php#constant.filter-sanitize-magic-quotes">FILTER_SANITIZE_MAGIC_QUOTES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong>.
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      <em>DEPRECATED</em> as of PHP 7.3.0 and
      <em>REMOVED</em> as of PHP 8.0.0.
     </p>
    </div>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">User Defined Filter</strong>
  
   <dt id="constant.filter-callback">
    <strong><code><a href="filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     This filter delegates the filtering to a user defined function.
     The <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> is passed via the
     <code class="parameter">options</code> parameter as the value associated to
     the <code class="literal">&#039;options&#039;</code> key.
    </span>
    <p class="para">
     The callback should have the following signature:
     <div class="methodsynopsis dc-description">
      <span class="methodname"><span class="replaceable">callback</span></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

     <dl>
      
       <dt><code class="parameter">value</code></dt>
       <dd>
        <span class="simpara">
         The value that is being filtered.
        </span>
       </dd>
      
     </dl>
    </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      The value returned by the callback will be the value returned by
      the invoked filter function.
     </span>
    </p></blockquote>
    <div class="example" id="example-5375">
     <p><strong>Example #1 
      Example of using <strong><code><a href="filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></code></strong> to validate
      a login name
     </strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">validate_login</span><span style="color: #007700">(</span><span style="color: #0000BB">string $value</span><span style="color: #007700">): ?</span><span style="color: #0000BB">string<br /></span><span style="color: #007700">{<br />    if (</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">) &gt;= </span><span style="color: #0000BB">5 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">ctype_alnum</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">)) {<br />        return </span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />    }<br />    return </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$login </span><span style="color: #007700">= </span><span style="color: #DD0000">"val1dL0gin"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$filtered_login </span><span style="color: #007700">= </span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$login</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_CALLBACK</span><span style="color: #007700">, [</span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'validate_login'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$filtered_login</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$login </span><span style="color: #007700">= </span><span style="color: #DD0000">"f&amp;ke login"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$filtered_login </span><span style="color: #007700">= </span><span style="color: #0000BB">filter_var</span><span style="color: #007700">(</span><span style="color: #0000BB">$login</span><span style="color: #007700">, </span><span style="color: #0000BB">FILTER_CALLBACK</span><span style="color: #007700">, [</span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'validate_login'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$filtered_login</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
string(10) &quot;val1dL0gin&quot;
NULL
</pre></div>
     </div>
    </div>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      This filter cannot be used with any other filter flags, e.g.
      <strong><code><a href="filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></code></strong>.
     </p>
    </div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filter/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffilter.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=filter.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filter.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125124">  <div class="votes">
    <div id="Vu125124">
    <a href="/manual/vote-note.php?id=125124&amp;page=filter.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125124">
    <a href="/manual/vote-note.php?id=125124&amp;page=filter.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125124" title="58% like this...">
    7
    </div>
  </div>
  <a href="#125124" class="name">
  <strong class="user"><em>shaman_master at list dot ru</em></strong></a><a class="genanchor" href="#125124"> &para;</a><div class="date" title="2020-06-17 11:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125124">
<div class="phpcode"><code><span class="html">Note: FILTER_NULL_ON_FAILURE, FILTER_REQUIRE_SCALAR, FILTER_REQUIRE_ARRAY and FILTER_FORCE_ARRAY dont have prefix "FILTER_FLAG_" but they are FLAGS!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=filter.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filter.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.filter.php">Filter</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.filter.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="filter.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="filter.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="filter.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.filter.php" title="Filter Functions">Filter Functions</a>
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
