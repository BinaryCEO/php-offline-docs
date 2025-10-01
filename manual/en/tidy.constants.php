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

 <link rel="canonical" href="https://www.php.net/manual/en/tidy.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/tidy.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/tidy.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.tidy.php">
 <link rel="prev" href="https://www.php.net/manual/en/tidy.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/tidy.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/tidy.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/tidy.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/tidy.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/tidy.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/tidy.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/tidy.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/tidy.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/tidy.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/tidy.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/tidy.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/tidy.constants.php" hreflang="zh">

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
        <a href="tidy.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="tidy.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.tidy.php'>Tidy</a></li>      </ul>
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
            <option value='en/tidy.constants.php' selected="selected">English</option>
            <option value='de/tidy.constants.php'>German</option>
            <option value='es/tidy.constants.php'>Spanish</option>
            <option value='fr/tidy.constants.php'>French</option>
            <option value='it/tidy.constants.php'>Italian</option>
            <option value='ja/tidy.constants.php'>Japanese</option>
            <option value='pt_BR/tidy.constants.php'>Brazilian Portuguese</option>
            <option value='ru/tidy.constants.php'>Russian</option>
            <option value='tr/tidy.constants.php'>Turkish</option>
            <option value='uk/tidy.constants.php'>Ukrainian</option>
            <option value='zh/tidy.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="tidy.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <p class="para">
  Each <strong><code><a href="tidy.constants.php#constant.tidy-tag-unknown">TIDY_TAG_<span class="replaceable">*</span></a></code></strong> represents a HTML tag. For example,
  <strong><code><a href="tidy.constants.php#constant.tidy-tag-a">TIDY_TAG_A</a></code></strong> represents a
  <code class="literal">&quot;&lt;a href=&quot;XX&quot;&gt;link&lt;/a&gt;&quot;</code> tag.
 </p>

 <dl id="tidy.constants.tag">
  <strong class="title">tidy nodetype constants</strong>
  
   <dt id="constant.tidy-tag-unknown">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-unknown">TIDY_TAG_UNKNOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-a">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-a">TIDY_TAG_A</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-abbr">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-abbr">TIDY_TAG_ABBR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-acronym">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-acronym">TIDY_TAG_ACRONYM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-address">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-address">TIDY_TAG_ADDRESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-align">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-align">TIDY_TAG_ALIGN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-applet">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-applet">TIDY_TAG_APPLET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-area">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-area">TIDY_TAG_AREA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-article">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-article">TIDY_TAG_ARTICLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-aside">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-aside">TIDY_TAG_ASIDE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-audio">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-audio">TIDY_TAG_AUDIO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-b">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-b">TIDY_TAG_B</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-base">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-base">TIDY_TAG_BASE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-basefont">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-basefont">TIDY_TAG_BASEFONT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-bdi">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-bdi">TIDY_TAG_BDI</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-bdo">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-bdo">TIDY_TAG_BDO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-bgsound">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-bgsound">TIDY_TAG_BGSOUND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-big">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-big">TIDY_TAG_BIG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-blink">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-blink">TIDY_TAG_BLINK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-blockquote">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-blockquote">TIDY_TAG_BLOCKQUOTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-body">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-body">TIDY_TAG_BODY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-br">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-br">TIDY_TAG_BR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-button">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-button">TIDY_TAG_BUTTON</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-canvas">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-canvas">TIDY_TAG_CANVAS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-caption">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-caption">TIDY_TAG_CAPTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-center">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-center">TIDY_TAG_CENTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-cite">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-cite">TIDY_TAG_CITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-code">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-code">TIDY_TAG_CODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-col">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-col">TIDY_TAG_COL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-colgroup">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-colgroup">TIDY_TAG_COLGROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-command">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-command">TIDY_TAG_COMMAND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-comment">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-comment">TIDY_TAG_COMMENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-datalist">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-datalist">TIDY_TAG_DATALIST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dd">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dd">TIDY_TAG_DD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-del">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-del">TIDY_TAG_DEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-details">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-details">TIDY_TAG_DETAILS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dfn">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dfn">TIDY_TAG_DFN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dialog">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dialog">TIDY_TAG_DIALOG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dir">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dir">TIDY_TAG_DIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-div">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-div">TIDY_TAG_DIV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dl">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dl">TIDY_TAG_DL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-dt">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-dt">TIDY_TAG_DT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-em">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-em">TIDY_TAG_EM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-embed">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-embed">TIDY_TAG_EMBED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-fieldset">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-fieldset">TIDY_TAG_FIELDSET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-figcaption">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-figcaption">TIDY_TAG_FIGCAPTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-figure">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-figure">TIDY_TAG_FIGURE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-font">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-font">TIDY_TAG_FONT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-footer">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-footer">TIDY_TAG_FOOTER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-form">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-form">TIDY_TAG_FORM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-frame">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-frame">TIDY_TAG_FRAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-frameset">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-frameset">TIDY_TAG_FRAMESET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h1">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h1">TIDY_TAG_H1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h2">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h2">TIDY_TAG_H2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h3">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h3">TIDY_TAG_H3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h4">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h4">TIDY_TAG_H4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h5">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h5">TIDY_TAG_H5</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-h6">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-h6">TIDY_TAG_H6</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-head">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-head">TIDY_TAG_HEAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-header">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-header">TIDY_TAG_HEADER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-hgroup">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-hgroup">TIDY_TAG_HGROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-hr">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-hr">TIDY_TAG_HR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-html">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-html">TIDY_TAG_HTML</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-i">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-i">TIDY_TAG_I</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-iframe">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-iframe">TIDY_TAG_IFRAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-ilayer">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-ilayer">TIDY_TAG_ILAYER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-img">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-img">TIDY_TAG_IMG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-input">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-input">TIDY_TAG_INPUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-ins">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-ins">TIDY_TAG_INS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-isindex">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-isindex">TIDY_TAG_ISINDEX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-kbd">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-kbd">TIDY_TAG_KBD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-keygen">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-keygen">TIDY_TAG_KEYGEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-label">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-label">TIDY_TAG_LABEL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-layer">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-layer">TIDY_TAG_LAYER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-legend">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-legend">TIDY_TAG_LEGEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-li">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-li">TIDY_TAG_LI</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-link">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-link">TIDY_TAG_LINK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-listing">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-listing">TIDY_TAG_LISTING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-main">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-main">TIDY_TAG_MAIN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-map">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-map">TIDY_TAG_MAP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-mark">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-mark">TIDY_TAG_MARK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-marquee">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-marquee">TIDY_TAG_MARQUEE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-menu">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-menu">TIDY_TAG_MENU</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-menuitem">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-menuitem">TIDY_TAG_MENUITEM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-meta">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-meta">TIDY_TAG_META</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-meter">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-meter">TIDY_TAG_METER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-multicol">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-multicol">TIDY_TAG_MULTICOL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-nav">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-nav">TIDY_TAG_NAV</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-nobr">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-nobr">TIDY_TAG_NOBR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-noembed">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-noembed">TIDY_TAG_NOEMBED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-noframes">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-noframes">TIDY_TAG_NOFRAMES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-nolayer">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-nolayer">TIDY_TAG_NOLAYER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-nosave">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-nosave">TIDY_TAG_NOSAVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-noscript">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-noscript">TIDY_TAG_NOSCRIPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-object">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-object">TIDY_TAG_OBJECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-ol">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-ol">TIDY_TAG_OL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-optgroup">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-optgroup">TIDY_TAG_OPTGROUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-option">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-option">TIDY_TAG_OPTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-output">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-output">TIDY_TAG_OUTPUT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-p">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-p">TIDY_TAG_P</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-param">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-param">TIDY_TAG_PARAM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-plaintext">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-plaintext">TIDY_TAG_PLAINTEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-pre">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-pre">TIDY_TAG_PRE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-progress">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-progress">TIDY_TAG_PROGRESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-q">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-q">TIDY_TAG_Q</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-rb">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-rb">TIDY_TAG_RB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-rbc">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-rbc">TIDY_TAG_RBC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-rp">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-rp">TIDY_TAG_RP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-rt">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-rt">TIDY_TAG_RT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-rtc">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-rtc">TIDY_TAG_RTC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-ruby">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-ruby">TIDY_TAG_RUBY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-s">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-s">TIDY_TAG_S</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-samp">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-samp">TIDY_TAG_SAMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-script">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-script">TIDY_TAG_SCRIPT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-section">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-section">TIDY_TAG_SECTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-select">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-select">TIDY_TAG_SELECT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-server">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-server">TIDY_TAG_SERVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-servlet">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-servlet">TIDY_TAG_SERVLET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-small">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-small">TIDY_TAG_SMALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-source">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-source">TIDY_TAG_SOURCE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-spacer">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-spacer">TIDY_TAG_SPACER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-span">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-span">TIDY_TAG_SPAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-strike">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-strike">TIDY_TAG_STRIKE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-strong">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-strong">TIDY_TAG_STRONG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-style">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-style">TIDY_TAG_STYLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-sub">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-sub">TIDY_TAG_SUB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-summary">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-summary">TIDY_TAG_SUMMARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-sup">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-sup">TIDY_TAG_SUP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-table">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-table">TIDY_TAG_TABLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-tbody">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-tbody">TIDY_TAG_TBODY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-td">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-td">TIDY_TAG_TD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-template">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-template">TIDY_TAG_TEMPLATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-textarea">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-textarea">TIDY_TAG_TEXTAREA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-tfoot">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-tfoot">TIDY_TAG_TFOOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-th">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-th">TIDY_TAG_TH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-thead">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-thead">TIDY_TAG_THEAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-time">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-time">TIDY_TAG_TIME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-title">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-title">TIDY_TAG_TITLE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-tr">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-tr">TIDY_TAG_TR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-track">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-track">TIDY_TAG_TRACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-tt">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-tt">TIDY_TAG_TT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-u">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-u">TIDY_TAG_U</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-ul">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-ul">TIDY_TAG_UL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-var">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-var">TIDY_TAG_VAR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-video">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-video">TIDY_TAG_VIDEO</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Added in libtidy 5.0.0. Available as of PHP 7.4.0.
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-wbr">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-wbr">TIDY_TAG_WBR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.tidy-tag-xmp">
    <strong><code><a href="tidy.constants.php#constant.tidy-tag-xmp">TIDY_TAG_XMP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
 </dl>

 <dl id="tidy.constants.nodetype">
  <strong class="title">tidy nodetype constants</strong>
  
   <dt id="constant.tidy-nodetype-root">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-root">TIDY_NODETYPE_ROOT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     root node
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-doctype">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-doctype">TIDY_NODETYPE_DOCTYPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     doctype
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-comment">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-comment">TIDY_NODETYPE_COMMENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     HTML comment
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-procins">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-procins">TIDY_NODETYPE_PROCINS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Processing Instruction
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-text">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-text">TIDY_NODETYPE_TEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Text
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-start">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-start">TIDY_NODETYPE_START</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     start tag
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-end">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-end">TIDY_NODETYPE_END</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     end tag
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-startend">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-startend">TIDY_NODETYPE_STARTEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     empty tag
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-cdata">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-cdata">TIDY_NODETYPE_CDATA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     CDATA
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-section">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-section">TIDY_NODETYPE_SECTION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     XML section
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-asp">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-asp">TIDY_NODETYPE_ASP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     ASP code
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-jste">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-jste">TIDY_NODETYPE_JSTE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     JSTE code
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-php">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-php">TIDY_NODETYPE_PHP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     PHP code
    </span>
   </dd>
  
  
   <dt id="constant.tidy-nodetype-xmldecl">
    <strong><code><a href="tidy.constants.php#constant.tidy-nodetype-xmldecl">TIDY_NODETYPE_XMLDECL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     XML declaration
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
        <a href="https://github.com/php/doc-en/blob/master/reference/tidy/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ftidy.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=tidy.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/tidy.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.tidy.php">Tidy</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.tidy.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="tidy.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="tidy.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="tidy.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.tidy.php" title="tidy">tidy</a>
                        </li>
                                                <li class="">
                            <a href="class.tidynode.php" title="tidyNode">tidyNode</a>
                        </li>
                                                <li class="">
                            <a href="ref.tidy.php" title="Tidy Functions">Tidy Functions</a>
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
