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

 <link rel="canonical" href="https://www.php.net/manual/en/libxml.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/libxml.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/libxml.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.libxml.php">
 <link rel="prev" href="https://www.php.net/manual/en/libxml.installation_old.php">
 <link rel="next" href="https://www.php.net/manual/en/class.libxmlerror.php">

 <link rel="alternate" href="https://www.php.net/manual/en/libxml.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/libxml.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/libxml.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/libxml.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/libxml.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/libxml.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/libxml.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/libxml.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/libxml.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/libxml.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/libxml.constants.php" hreflang="zh">

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
        <a href="class.libxmlerror.php">
          LibXMLError &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="libxml.installation_old.php">
          &laquo; Installation for PHP versions &lt; 7.4        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.libxml.php'>libxml</a></li>      </ul>
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
            <option value='en/libxml.constants.php' selected="selected">English</option>
            <option value='de/libxml.constants.php'>German</option>
            <option value='es/libxml.constants.php'>Spanish</option>
            <option value='fr/libxml.constants.php'>French</option>
            <option value='it/libxml.constants.php'>Italian</option>
            <option value='ja/libxml.constants.php'>Japanese</option>
            <option value='pt_BR/libxml.constants.php'>Brazilian Portuguese</option>
            <option value='ru/libxml.constants.php'>Russian</option>
            <option value='tr/libxml.constants.php'>Turkish</option>
            <option value='uk/libxml.constants.php'>Ukrainian</option>
            <option value='zh/libxml.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="libxml.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.libxml-biglines">
    <strong><code><a href="libxml.constants.php#constant.libxml-biglines">LIBXML_BIGLINES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Allows line numbers greater than 65535 to be reported correctly.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available as of PHP 7.0.0 with Libxml &gt;= 2.9.0
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-compact">
    <strong><code><a href="libxml.constants.php#constant.libxml-compact">LIBXML_COMPACT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Activate small nodes allocation optimization. This may speed up your
     application without needing to change the code.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.6.21
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-dtdattr">
    <strong><code><a href="libxml.constants.php#constant.libxml-dtdattr">LIBXML_DTDATTR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Default DTD attributes
    </span>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Enabling loading of DTD attributes will enable fetching of external entities.
      The <strong><code><a href="libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></code></strong> constant can be used to prevent this (only available in Libxml &gt;= 2.13.0, as of PHP 8.4.0).
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.libxml-dtdload">
    <strong><code><a href="libxml.constants.php#constant.libxml-dtdload">LIBXML_DTDLOAD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Load the external subset
    </span>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Enabling loading of external subsets will enable fetching of external entities.
      The <strong><code><a href="libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></code></strong> constant can be used to prevent this (only available in Libxml &gt;= 2.13.0, as of PHP 8.4.0).
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.libxml-dtdvalid">
    <strong><code><a href="libxml.constants.php#constant.libxml-dtdvalid">LIBXML_DTDVALID</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Validate with the DTD
    </span>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Enabling validating the DTD may facilitate XML External Entity (XXE) attacks.
      The <strong><code><a href="libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></code></strong> constant can be used to prevent this (only available in Libxml &gt;= 2.13.0, as of PHP 8.4.0).
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.libxml-html-noimplied">
    <strong><code><a href="libxml.constants.php#constant.libxml-html-noimplied">LIBXML_HTML_NOIMPLIED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets HTML_PARSE_NOIMPLIED flag, which turns off the
     automatic adding of implied html/body... elements.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.7.7 (as of PHP &gt;= 5.4.0)
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-html-nodefdtd">
    <strong><code><a href="libxml.constants.php#constant.libxml-html-nodefdtd">LIBXML_HTML_NODEFDTD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype
     being added when one is not found.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.7.8 (as of PHP &gt;= 5.4.0)
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-loaded-version">
    <strong><code><a href="libxml.constants.php#constant.libxml-loaded-version">LIBXML_LOADED_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Version of libxml&#039;s core parser module.
    </span>
   </dd>
  
  
   <dt id="constant.libxml-noblanks">
    <strong><code><a href="libxml.constants.php#constant.libxml-noblanks">LIBXML_NOBLANKS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remove blank nodes
    </span>
   </dd>
  
  
   <dt id="constant.libxml-nocdata">
    <strong><code><a href="libxml.constants.php#constant.libxml-nocdata">LIBXML_NOCDATA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Merge CDATA as text nodes
    </span>
   </dd>
  
  
   <dt id="constant.libxml-noemptytag">
    <strong><code><a href="libxml.constants.php#constant.libxml-noemptytag">LIBXML_NOEMPTYTAG</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Expand empty tags (e.g. <code class="literal">&lt;br/&gt;</code> to
     <code class="literal">&lt;br&gt;&lt;/br&gt;</code>)
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This option is currently just available in the
      <a href="domdocument.save.php" class="xref">DOMDocument::save</a> and
      <a href="domdocument.savexml.php" class="xref">DOMDocument::saveXML</a> functions.
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-noent">
    <strong><code><a href="libxml.constants.php#constant.libxml-noent">LIBXML_NOENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Substitute entities
    </span>
    <div class="caution"><strong class="caution">Caution</strong>
     <p class="simpara">
      Enabling entity substitution may facilitate XML External Entity (XXE) attacks.
     </p>
    </div>
   </dd>
  
  
   <dt id="constant.libxml-noerror">
    <strong><code><a href="libxml.constants.php#constant.libxml-noerror">LIBXML_NOERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Suppress error reports
    </span>
   </dd>
  
  
   <dt id="constant.libxml-nonet">
    <strong><code><a href="libxml.constants.php#constant.libxml-nonet">LIBXML_NONET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disable network access when loading documents
    </span>
   </dd>
  
  
   <dt id="constant.libxml-nowarning">
    <strong><code><a href="libxml.constants.php#constant.libxml-nowarning">LIBXML_NOWARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Suppress warning reports
    </span>
   </dd>
  
  
   <dt id="constant.libxml-noxmldecl">
    <strong><code><a href="libxml.constants.php#constant.libxml-noxmldecl">LIBXML_NOXMLDECL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Drop the XML declaration when saving a document
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.6.21
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-no-xxe">
    <strong><code><a href="libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disables XML External Entities (XXE) when performing entity substitution
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.13.0, as of PHP 8.4.0
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-nsclean">
    <strong><code><a href="libxml.constants.php#constant.libxml-nsclean">LIBXML_NSCLEAN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Remove redundant namespace declarations
    </span>
   </dd>
  
  
   <dt id="constant.libxml-parsehuge">
    <strong><code><a href="libxml.constants.php#constant.libxml-parsehuge">LIBXML_PARSEHUGE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects
     limits like maximum depth of a document or the entity recursion, as well as limits of the
     size of text nodes.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.7.0 (as of PHP &gt;= 5.3.2 and PHP &gt;= 5.2.12)
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-pedantic">
    <strong><code><a href="libxml.constants.php#constant.libxml-pedantic">LIBXML_PEDANTIC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Available as of PHP &gt;= 5.4.0
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-recover">
    <strong><code><a href="libxml.constants.php#constant.libxml-recover">LIBXML_RECOVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Enables recovery mode when parsing a document.
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available as of PHP 8.4.0
     </p>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.libxml-xinclude">
    <strong><code><a href="libxml.constants.php#constant.libxml-xinclude">LIBXML_XINCLUDE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Implement XInclude substitution
    </span>
   </dd>
  
  
   <dt id="constant.libxml-err-error">
    <strong><code><a href="libxml.constants.php#constant.libxml-err-error">LIBXML_ERR_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A recoverable error
    </span>
   </dd>
  
  
   <dt id="constant.libxml-err-fatal">
    <strong><code><a href="libxml.constants.php#constant.libxml-err-fatal">LIBXML_ERR_FATAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A fatal error
    </span>
   </dd>
  
  
   <dt id="constant.libxml-err-none">
    <strong><code><a href="libxml.constants.php#constant.libxml-err-none">LIBXML_ERR_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No errors
    </span>
   </dd>
  
  
   <dt id="constant.libxml-err-warning">
    <strong><code><a href="libxml.constants.php#constant.libxml-err-warning">LIBXML_ERR_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     A simple warning
    </span>
   </dd>
  
  
   <dt id="constant.libxml-version">
    <strong><code><a href="libxml.constants.php#constant.libxml-version">LIBXML_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     libxml version like 20605 or 20617
    </span>
   </dd>
  
  
   <dt id="constant.libxml-dotted-version">
    <strong><code><a href="libxml.constants.php#constant.libxml-dotted-version">LIBXML_DOTTED_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     libxml version like 2.6.5 or 2.6.17
    </span>
   </dd>
  
  
   <dt id="constant.libxml-schema-create">
    <strong><code><a href="libxml.constants.php#constant.libxml-schema-create">LIBXML_SCHEMA_CREATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Create default/fixed value nodes during XSD schema validation
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      Only available in Libxml &gt;= 2.6.14 (as of PHP &gt;= 5.5.2)
     </p>
    </p></blockquote>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/libxml/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flibxml.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=libxml.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/libxml.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102279">  <div class="votes">
    <div id="Vu102279">
    <a href="/manual/vote-note.php?id=102279&amp;page=libxml.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102279">
    <a href="/manual/vote-note.php?id=102279&amp;page=libxml.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102279" title="63% like this...">
    9
    </div>
  </div>
  <a href="#102279" class="name">
  <strong class="user"><em>@oneseventeen</em></strong></a><a class="genanchor" href="#102279"> &para;</a><div class="date" title="2011-02-05 11:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102279">
<div class="phpcode"><code><span class="html">When inserting XML DOM Elements inside existing XML DOM Elements that I loaded from an XML file using the following code, none of my new elements were formatted correctly, they just showed up on one line:<br /><br /><span class="default">&lt;?php <br />$dom </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">(</span><span class="string">'file.xml'</span><span class="keyword">); <br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="comment">//$dom-&gt;add some new elements with child nodes somewhere inside the loaded XML using insertBefore();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="comment">//output: everything looks normal but the new nodes are all on one line.<br /></span><span class="default">?&gt;<br /></span><br />I found I could pass LIBXML_NOBLANKS to the load method and it would reformat the whole document, including my added stuff:<br /><span class="default">&lt;?php <br />$dom </span><span class="keyword">= </span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">(</span><span class="string">'file.xml'</span><span class="keyword">, </span><span class="default">LIBXML_NOBLANKS</span><span class="keyword">); <br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="comment">//$dom-&gt;add some new elements with child nodes somewhere inside the loaded XML using insertBefore();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="comment">//output: everything looks newly formatted, including new nodes<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps, took me hours of trial and error to figure this out!</span></code></div>
  </div>
 </div>
  <div class="note" id="125954">  <div class="votes">
    <div id="Vu125954">
    <a href="/manual/vote-note.php?id=125954&amp;page=libxml.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125954">
    <a href="/manual/vote-note.php?id=125954&amp;page=libxml.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125954" title="75% like this...">
    4
    </div>
  </div>
  <a href="#125954" class="name">
  <strong class="user"><em>siraic at gmail dot com</em></strong></a><a class="genanchor" href="#125954"> &para;</a><div class="date" title="2021-03-24 12:10"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125954">
<div class="phpcode"><code><span class="html">The name of the constant LIBXML_NOENT is very misleading. Adding this flag actually causes the parser to load and insert the external entities. Omitting it leaves the tags untouched, which is probably what you want.</span></code></div>
  </div>
 </div>
  <div class="note" id="121876">  <div class="votes">
    <div id="Vu121876">
    <a href="/manual/vote-note.php?id=121876&amp;page=libxml.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121876">
    <a href="/manual/vote-note.php?id=121876&amp;page=libxml.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121876" title="55% like this...">
    1
    </div>
  </div>
  <a href="#121876" class="name">
  <strong class="user"><em>vetalstar at mail dot ru</em></strong></a><a class="genanchor" href="#121876"> &para;</a><div class="date" title="2017-11-16 12:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121876">
<div class="phpcode"><code><span class="html">LIBXML_DOTTED_VERSION option doesn't work.<br />libxml version: 2.9.4<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">LIBXML_DOTTED_VERSION</span><span class="keyword">;<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">'&lt;fasa_request id="1234567"/&gt;'</span><span class="keyword">, </span><span class="default">LIBXML_NOXMLDECL</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128713">  <div class="votes">
    <div id="Vu128713">
    <a href="/manual/vote-note.php?id=128713&amp;page=libxml.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128713">
    <a href="/manual/vote-note.php?id=128713&amp;page=libxml.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128713" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128713" class="name">
  <strong class="user"><em>Ismael Miguel</em></strong></a><a class="genanchor" href="#128713"> &para;</a><div class="date" title="2023-07-07 10:53"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128713">
<div class="phpcode"><code><span class="html">If you want to save without the XML declaration, and LIBXML_NOXMLDECL doesn't work for you, you can just do this:<br /><br /><span class="default">&lt;?php<br />$doc </span><span class="keyword">= new </span><span class="default">\DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">, </span><span class="string">'UTF-8'</span><span class="keyword">);<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">LIBXML_</span><span class="keyword">*);<br /><br />echo </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">firstElementChild</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This will output the XML without the XML declaration and without using the flag.<br />You also don't need to do fiddly replacements and pray that it works.</span></code></div>
  </div>
 </div>
  <div class="note" id="96128">  <div class="votes">
    <div id="Vu96128">
    <a href="/manual/vote-note.php?id=96128&amp;page=libxml.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96128">
    <a href="/manual/vote-note.php?id=96128&amp;page=libxml.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96128" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96128" class="name">
  <strong class="user"><em>zachatwork at gmail dot com</em></strong></a><a class="genanchor" href="#96128"> &para;</a><div class="date" title="2010-02-09 11:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96128">
<div class="phpcode"><code><span class="html">Note: The LIBXML_NOXMLDECL constant is defined in this library but is not supported by DOMDocument (yet).<br /><br />See also: <a href="http://bugs.php.net/bug.php?id=47137" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=47137</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">print </span><span class="string">"PHP_VERSION:      "</span><span class="keyword">.</span><span class="default">PHP_VERSION</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"LIBXML_VERSION:   "</span><span class="keyword">.</span><span class="default">LIBXML_VERSION</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="string">"LIBXML_NOXMLDECL: "</span><span class="keyword">.</span><span class="default">LIBXML_NOXMLDECL</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DomDocument</span><span class="keyword">();<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="string">"&lt;foo /&gt;"</span><span class="keyword">);<br /><br /></span><span class="comment"># This should work but doesn't.<br /><br /></span><span class="keyword">print </span><span class="string">"DOMDocument doesn't honor LIBXML_NOXMLDECL:\n"</span><span class="keyword">;<br />print </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">,</span><span class="default">LIBXML_NOXMLDECL</span><span class="keyword">);<br /><br /></span><span class="comment"># This works, and will still work after the above is fixed.<br /><br /></span><span class="keyword">print </span><span class="string">"Forwards compatible workaround:\n"</span><span class="keyword">;<br /></span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">LIBXML_NOXMLDECL</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">);<br />if(!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^\&lt;\?xml/'</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]))<br />    print </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />print </span><span class="default">$lines</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;<br /></span><br />PHP_VERSION:      5.3.1-0.dotdeb.1<br />LIBXML_VERSION:   20632<br />LIBXML_NOXMLDECL: 2<br />DOMDocument doesn't honor LIBXML_NOXMLDECL:<br />&lt;?xml version="1.0"?&gt;<br />&lt;foo/&gt;<br />Forwards compatible workaround:<br />&lt;foo/&gt;</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=libxml.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/libxml.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.libxml.php">libxml</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.libxml.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="libxml.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="libxml.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="class.libxmlerror.php" title="LibXMLError">LibXMLError</a>
                        </li>
                                                <li class="">
                            <a href="ref.libxml.php" title="libxml Functions">libxml Functions</a>
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
