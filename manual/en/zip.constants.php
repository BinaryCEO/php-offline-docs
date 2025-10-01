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

 <link rel="canonical" href="https://www.php.net/manual/en/zip.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/zip.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/zip.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.zip.php">
 <link rel="prev" href="https://www.php.net/manual/en/zip.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/zip.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/zip.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/zip.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/zip.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/zip.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/zip.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/zip.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/zip.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/zip.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/zip.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/zip.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/zip.constants.php" hreflang="zh">

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
        <a href="zip.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="zip.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      </ul>
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
            <option value='en/zip.constants.php' selected="selected">English</option>
            <option value='de/zip.constants.php'>German</option>
            <option value='es/zip.constants.php'>Spanish</option>
            <option value='fr/zip.constants.php'>French</option>
            <option value='it/zip.constants.php'>Italian</option>
            <option value='ja/zip.constants.php'>Japanese</option>
            <option value='pt_BR/zip.constants.php'>Brazilian Portuguese</option>
            <option value='ru/zip.constants.php'>Russian</option>
            <option value='tr/zip.constants.php'>Turkish</option>
            <option value='uk/zip.constants.php'>Ukrainian</option>
            <option value='zh/zip.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="zip.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>

  <p class="para">
   <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> uses class constants. 
   There are various types of constants, main are:
   Flags (prefixed with <code class="literal">FL_</code>),
   Global flags  (prefixed with <code class="literal">AFL_</code>),
   errors (prefixed with <code class="literal">ER_</code>) and
   mode (no prefix).
  </p>

 <dl id="ziparchive.constants.mode">
  <strong class="title">Archive open modes</strong>
  
   <dt id="ziparchive.constants.create">
    <strong><code><a href="zip.constants.php#ziparchive.constants.create">ZipArchive::CREATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Create the archive if it does not exist.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.overwrite">
    <strong><code><a href="zip.constants.php#ziparchive.constants.overwrite">ZipArchive::OVERWRITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If archive exists, ignore its current contents.
     In other words, handle it the same way as an empty archive.
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.excl">
    <strong><code><a href="zip.constants.php#ziparchive.constants.excl">ZipArchive::EXCL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Error if archive already exists.
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.rdonly">
    <strong><code><a href="zip.constants.php#ziparchive.constants.rdonly">ZipArchive::RDONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open archive in read only mode.
     Available as of PHP 7.4.3 and PECL zip 1.17.1, respectively,
     if built against libzip ≥ 1.0.0.
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.checkcons">
    <strong><code><a href="zip.constants.php#ziparchive.constants.checkcons">ZipArchive::CHECKCONS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Perform additional consistency checks on the archive, and error if they fail.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.afl">
  <strong class="title">Archive global flags</strong>
  
   <dt id="ziparchive.constants.afl-rdonly">
    <strong><code><a href="zip.constants.php#ziparchive.constants.afl-rdonly">ZipArchive::AFL_RDONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Archive is read only, cannot be cleared.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.afl-is-torrentzip">
    <strong><code><a href="zip.constants.php#ziparchive.constants.afl-is-torrentzip">ZipArchive::AFL_IS_TORRENTZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Current archive is torrentzipped.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.afl-want-torrentzip">
    <strong><code><a href="zip.constants.php#ziparchive.constants.afl-want-torrentzip">ZipArchive::AFL_WANT_TORRENTZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Write archive in torrentzip format.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.afl-create-or-keep-file-for-empty-archive">
    <strong><code><a href="zip.constants.php#ziparchive.constants.afl-create-or-keep-file-for-empty-archive">ZipArchive::AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Don&#039;t remove file if archive is empty.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.fl">
  <strong class="title">Archive flags</strong>
  
   <dt id="ziparchive.constants.fl-nocase">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-nocase">ZipArchive::FL_NOCASE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore case on name lookup
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-nodir">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-nodir">ZipArchive::FL_NODIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Ignore directory component
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-compressed">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-compressed">ZipArchive::FL_COMPRESSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Read compressed data
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-unchanged">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-unchanged">ZipArchive::FL_UNCHANGED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use original data, ignoring changes.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-recompress">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-recompress">ZipArchive::FL_RECOMPRESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Force recompression of data.
     Available as of PHP 8.0.0 and PECL zip 1.18.0.
     Deprecated as of PHP 8.3.0 and PECL zip 1.22.1,
     will be removed in a future version of libzip.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-encrypted">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-encrypted">ZipArchive::FL_ENCRYPTED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Read encrypted data (implies FL_COMPRESSED).
     Available as of PHP 8.0.0 and PECL zip 1.18.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-overwrite">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-overwrite">ZipArchive::FL_OVERWRITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     If file with name exists, overwrite (replace) it.
     Available as of PHP 8.0.0 and PECL zip 1.18.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-local">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-local">ZipArchive::FL_LOCAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     In local header.
     Available as of PHP 8.0.0 and PECL zip 1.18.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-central">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-central">ZipArchive::FL_CENTRAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     In central directory.
     Available as of PHP 8.0.0 and PECL zip 1.18.0.
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.fl-enc-guess">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-guess">ZipArchive::FL_ENC_GUESS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Guess string encoding (is default). Available as of PHP 7.0.8.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-enc-raw">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-raw">ZipArchive::FL_ENC_RAW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Get unmodified string. Available as of PHP 7.0.8.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-enc-strict">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-strict">ZipArchive::FL_ENC_STRICT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Follow specification strictly. Available as of PHP 7.0.8.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-enc-utf-8">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-utf-8">ZipArchive::FL_ENC_UTF_8</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     String is UTF-8 encoded. Available as of PHP 7.0.8.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-enc-cp437">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-cp437">ZipArchive::FL_ENC_CP437</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     String is CP437 encoded. Available as of PHP 7.0.8.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.fl-open-file-now">
    <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Open the file when added instead of waiting for archive to be closed.
     Be aware of file descriptors consumption.
     Available as of PHP 8.3.0 and PECL zip 1.22.1.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.cm">
  <strong class="title">Compression modes</strong>
  
   <dt id="ziparchive.constants.cm-default">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-default">ZipArchive::CM_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     better of deflate or store.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-store">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-store">ZipArchive::CM_STORE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     stored (uncompressed).
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-shrink">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-shrink">ZipArchive::CM_SHRINK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     shrunk
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-reduce-1">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-reduce-1">ZipArchive::CM_REDUCE_1</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     reduced with factor 1
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-reduce-2">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-reduce-2">ZipArchive::CM_REDUCE_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     reduced with factor 2
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-reduce-3">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-reduce-3">ZipArchive::CM_REDUCE_3</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     reduced with factor 3
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-reduce-4">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-reduce-4">ZipArchive::CM_REDUCE_4</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     reduced with factor 4
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-implode">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-implode">ZipArchive::CM_IMPLODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     imploded
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-deflate">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-deflate">ZipArchive::CM_DEFLATE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     deflated
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-deflate64">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-deflate64">ZipArchive::CM_DEFLATE64</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     deflate64
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-pkware-implode">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-pkware-implode">ZipArchive::CM_PKWARE_IMPLODE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     PKWARE imploding
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-bzip2">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-bzip2">ZipArchive::CM_BZIP2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     BZIP2 algorithm
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-lzma">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-lzma">ZipArchive::CM_LZMA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     LZMA algorithm
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-lzma2">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-lzma2">ZipArchive::CM_LZMA2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     LZMA2 algorithm.
     Available as of PHP 7.4.3 and PECL zip 1.16.0, respectively,
     if built against libzip ≥ 1.6.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-zstd">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-zstd">ZipArchive::CM_ZSTD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Zstandard algorithm.
     Available as of PHP 8.0.0 and PECL zip 1.19.1, respectively,
     if built against libzip ≥ 1.8.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-xz">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-xz">ZipArchive::CM_XZ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     XZ algorithm.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.6.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-terse">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-terse">ZipArchive::CM_TERSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-lz77">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-lz77">ZipArchive::CM_LZ77</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-wavpack">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-wavpack">ZipArchive::CM_WAVPACK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.cm-ppmd">
    <strong><code><a href="zip.constants.php#ziparchive.constants.cm-ppmd">ZipArchive::CM_PPMD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.er">
  <strong class="title">Errors</strong>
  
   <dt id="ziparchive.constants.er-ok">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-ok">ZipArchive::ER_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No error.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-multidisk">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-multidisk">ZipArchive::ER_MULTIDISK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Multi-disk zip archives not supported.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-rename">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-rename">ZipArchive::ER_RENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Renaming temporary file failed.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-close">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-close">ZipArchive::ER_CLOSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Closing zip archive failed
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-seek">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-seek">ZipArchive::ER_SEEK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
      Seek error
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-read">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-read">ZipArchive::ER_READ</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Read error
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.er-write">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-write">ZipArchive::ER_WRITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Write error
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-crc">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-crc">ZipArchive::ER_CRC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     CRC error
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-zipclosed">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-zipclosed">ZipArchive::ER_ZIPCLOSED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Containing zip archive was closed
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-noent">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-noent">ZipArchive::ER_NOENT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No such file.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-exists">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-exists">ZipArchive::ER_EXISTS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     File already exists
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-open">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-open">ZipArchive::ER_OPEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Can&#039;t open file
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-tmpopen">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-tmpopen">ZipArchive::ER_TMPOPEN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Failure to create temporary file.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-zlib">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-zlib">ZipArchive::ER_ZLIB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Zlib error
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.er-memory">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-memory">ZipArchive::ER_MEMORY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Memory allocation failure
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.er-changed">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-changed">ZipArchive::ER_CHANGED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Entry has been changed
    </span>
   </dd>
  

  
   <dt id="ziparchive.constants.er-compnotsupp">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-compnotsupp">ZipArchive::ER_COMPNOTSUPP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Compression method not supported.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-eof">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-eof">ZipArchive::ER_EOF</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Premature EOF
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-inval">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-inval">ZipArchive::ER_INVAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Invalid argument
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-nozip">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-nozip">ZipArchive::ER_NOZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not a zip archive
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-internal">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-internal">ZipArchive::ER_INTERNAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Internal error
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-incons">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-incons">ZipArchive::ER_INCONS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Zip archive inconsistent
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-remove">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-remove">ZipArchive::ER_REMOVE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Can&#039;t remove file
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-deleted">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-deleted">ZipArchive::ER_DELETED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Entry has been deleted
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-encrnotsupp">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-encrnotsupp">ZipArchive::ER_ENCRNOTSUPP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Encryption method not supported.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-rdonly">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-rdonly">ZipArchive::ER_RDONLY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Read-only archive.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-nopasswd">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-nopasswd">ZipArchive::ER_NOPASSWD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No password provided.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-wrongpasswd">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-wrongpasswd">ZipArchive::ER_WRONGPASSWD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Wrong password provided.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-opnotsupp">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-opnotsupp">ZipArchive::ER_OPNOTSUPP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation not supported.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.0.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-inuse">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-inuse">ZipArchive::ER_INUSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Resource still in use.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.0.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-tell">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-tell">ZipArchive::ER_TELL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Tell error.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.0.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-compressed-data">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-compressed-data">ZipArchive::ER_COMPRESSED_DATA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Compressed data invalid.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.6.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-cancelled">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-cancelled">ZipArchive::ER_CANCELLED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Operation cancelled.
     Available as of PHP 7.4.3 and PECL zip 1.16.1, respectively,
     if built against libzip ≥ 1.6.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-data-length">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-data-length">ZipArchive::ER_DATA_LENGTH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Unexpected length of data.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-not-allowed">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-not-allowed">ZipArchive::ER_NOT_ALLOWED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Not allowed in torrentzip.
     Available as of PHP 8.3.0 and PECL zip 1.22.0, respectively,
     if built against libzip ≥ 1.10.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.er-truncated-zip">
    <strong><code><a href="zip.constants.php#ziparchive.constants.er-truncated-zip">ZipArchive::ER_TRUNCATED_ZIP</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Possibly truncated or corrupted zip archive.
     Available as of PHP 8.4.0 and PECL zip 1.22.4, respectively,
     if built against libzip ≥ 1.11.1.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.em">
  <strong class="title">Encryption modes</strong>
  
   <dt id="ziparchive.constants.em-none">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-none">ZipArchive::EM_NONE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     No encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.em-trad-pkware">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-trad-pkware">ZipArchive::EM_TRAD_PKWARE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Traditional PKWARE encryption. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.em-aes-128">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-aes-128">ZipArchive::EM_AES_128</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     AES 128 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively,
     if built against libzip ≥ 1.2.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.em-aes-192">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-aes-192">ZipArchive::EM_AES_192</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     AES 192 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively,
     if built against libzip ≥ 1.2.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.em-aes-256">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-aes-256">ZipArchive::EM_AES_256</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     AES 256 encryption. Available as of PHP 7.2.0 and PECL zip 1.14.0, respectively,
     if built against libzip ≥ 1.2.0.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.em-unknown">
    <strong><code><a href="zip.constants.php#ziparchive.constants.em-unknown">ZipArchive::EM_UNKNOWN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Unknown encryption algorithm. Available as of PHP 8.0.0 and PECL zip 1.19.0, respectively.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.length">
  <strong class="title">Length parameter constants</strong>
  
   <dt id="ziparchive.constants.length-to-end">
    <strong><code><a href="zip.constants.php#ziparchive.constants.length-to-end">ZipArchive::LENGTH_TO_END</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use file size, if the file grows additionnal data is ignored, if the file shrinks an error is raised (<strong><code><a href="zip.constants.php#ziparchive.constants.er-data-length">ZipArchive::ER_DATA_LENGTH</a></code></strong>).
     Available as of PHP 8.3.0 and PECL zip 1.22.2.
    </span>
   </dd>
  
  
   <dt id="ziparchive.constants.length-unchecked">
    <strong><code><a href="zip.constants.php#ziparchive.constants.length-unchecked">ZipArchive::LENGTH_UNCHECKED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Use all available data.
     Available as of PHP 8.3.0 and PECL zip 1.22.2, if built against libzip ≥ 1.10.1.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.other">
  <strong class="title">Other constants</strong>
  
   <dt id="ziparchive.constants.libzip-version">
    <strong><code><a href="zip.constants.php#ziparchive.constants.libzip-version">ZipArchive::LIBZIP_VERSION</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Zip library version. Available as of PHP 7.4.3 and PECL zip 1.16.0.
    </span>
   </dd>
  
 </dl>

 <dl id="ziparchive.constants.opsys">
  <strong class="title">Operating system constants for external attributes</strong>
  
   <dt id="ziparchive.constants.opsys-dos">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-dos">ZipArchive::OPSYS_DOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-amiga">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-amiga">ZipArchive::OPSYS_AMIGA</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-openvms">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-openvms">ZipArchive::OPSYS_OPENVMS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-unix">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-unix">ZipArchive::OPSYS_UNIX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-vm-cms">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-vm-cms">ZipArchive::OPSYS_VM_CMS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-atari-st">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-atari-st">ZipArchive::OPSYS_ATARI_ST</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-os-2">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-os-2">ZipArchive::OPSYS_OS_2</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-macintosh">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-macintosh">ZipArchive::OPSYS_MACINTOSH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-z-system">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-z-system">ZipArchive::OPSYS_Z_SYSTEM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-cpm">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-cpm">ZipArchive::OPSYS_CPM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-windows-ntfs">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-windows-ntfs">ZipArchive::OPSYS_WINDOWS_NTFS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-mvs">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-mvs">ZipArchive::OPSYS_MVS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-vse">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-vse">ZipArchive::OPSYS_VSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-acorn-risc">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-acorn-risc">ZipArchive::OPSYS_ACORN_RISC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-vfat">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-vfat">ZipArchive::OPSYS_VFAT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-alternate-mvs">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-alternate-mvs">ZipArchive::OPSYS_ALTERNATE_MVS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-beos">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-beos">ZipArchive::OPSYS_BEOS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-tandem">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-tandem">ZipArchive::OPSYS_TANDEM</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-os-4000">
    <strong><code>ZipArchive::OPSYS_OS_400</code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-os-x">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-os-x">ZipArchive::OPSYS_OS_X</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara"/>
   </dd>
  
  
   <dt id="ziparchive.constants.opsys-default">
    <strong><code><a href="zip.constants.php#ziparchive.constants.opsys-default">ZipArchive::OPSYS_DEFAULT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Since PECL zip 1.12.4
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
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fzip.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=zip.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/zip.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="83827">  <div class="votes">
    <div id="Vu83827">
    <a href="/manual/vote-note.php?id=83827&amp;page=zip.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83827">
    <a href="/manual/vote-note.php?id=83827&amp;page=zip.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83827" title="80% like this...">
    64
    </div>
  </div>
  <a href="#83827" class="name">
  <strong class="user"><em>scott at bluecamel dot eml dot cc</em></strong></a><a class="genanchor" href="#83827"> &para;</a><div class="date" title="2008-06-13 10:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83827">
<div class="phpcode"><code><span class="html">#define ZIP_ER_OK             0  /* N No error */<br />#define ZIP_ER_MULTIDISK      1  /* N Multi-disk zip archives not supported */<br />#define ZIP_ER_RENAME         2  /* S Renaming temporary file failed */<br />#define ZIP_ER_CLOSE          3  /* S Closing zip archive failed */<br />#define ZIP_ER_SEEK           4  /* S Seek error */<br />#define ZIP_ER_READ           5  /* S Read error */<br />#define ZIP_ER_WRITE          6  /* S Write error */<br />#define ZIP_ER_CRC            7  /* N CRC error */<br />#define ZIP_ER_ZIPCLOSED      8  /* N Containing zip archive was closed */<br />#define ZIP_ER_NOENT          9  /* N No such file */<br />#define ZIP_ER_EXISTS        10  /* N File already exists */<br />#define ZIP_ER_OPEN          11  /* S Can't open file */<br />#define ZIP_ER_TMPOPEN       12  /* S Failure to create temporary file */<br />#define ZIP_ER_ZLIB          13  /* Z Zlib error */<br />#define ZIP_ER_MEMORY        14  /* N Malloc failure */<br />#define ZIP_ER_CHANGED       15  /* N Entry has been changed */<br />#define ZIP_ER_COMPNOTSUPP   16  /* N Compression method not supported */<br />#define ZIP_ER_EOF           17  /* N Premature EOF */<br />#define ZIP_ER_INVAL         18  /* N Invalid argument */<br />#define ZIP_ER_NOZIP         19  /* N Not a zip archive */<br />#define ZIP_ER_INTERNAL      20  /* N Internal error */<br />#define ZIP_ER_INCONS        21  /* N Zip archive inconsistent */<br />#define ZIP_ER_REMOVE        22  /* S Can't remove file */<br />#define ZIP_ER_DELETED       23  /* N Entry has been deleted */</span></code></div>
  </div>
 </div>
  <div class="note" id="118510">  <div class="votes">
    <div id="Vu118510">
    <a href="/manual/vote-note.php?id=118510&amp;page=zip.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118510">
    <a href="/manual/vote-note.php?id=118510&amp;page=zip.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118510" title="58% like this...">
    4
    </div>
  </div>
  <a href="#118510" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118510"> &para;</a><div class="date" title="2015-12-17 08:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118510">
<div class="phpcode"><code><span class="html">0    ZIPARCHIVE::ER_OK     没有错误。<br />1    ZIPARCHIVE::ER_MULTIDISK    不支持多磁盘zip压缩包。<br />2    ZIPARCHIVE::ER_RENAME    重命名临时文件失败。<br />3    ZIPARCHIVE::ER_CLOSE    关闭zip压缩包失败。<br />4    ZIPARCHIVE::ER_SEEK    寻址错误<br />5    ZIPARCHIVE::ER_READ    读取错误<br />6    ZIPARCHIVE::ER_WRITE    写入错误<br />7    ZIPARCHIVE::ER_CRC    CRC校验失败<br />8    ZIPARCHIVE::ER_ZIPCLOSED    zip压缩包已关闭<br />9    ZIPARCHIVE::ER_NOENT    没有文件<br />10    ZIPARCHIVE::ER_EXISTS    文件已经存在<br />11    ZIPARCHIVE::ER_OPEN    不能打开文件<br />12    ZIPARCHIVE::ER_TMPOPEN    创建临时文件失败<br />13    ZIPARCHIVE::ER_ZLIB    Zlib错误<br />14    ZIPARCHIVE::ER_MEMORY    内存分配失败<br />15    ZIPARCHIVE::ER_CHANGED    条目已被改变<br />16    ZIPARCHIVE::ER_COMPNOTSUPP    不支持的压缩方式<br />17    ZIPARCHIVE::ER_EOF    过早的EOF<br />18    ZIPARCHIVE::ER_INVAL    无效的参数<br />19    ZIPARCHIVE::ER_NOZIP    不是一个zip压缩包<br />20    ZIPARCHIVE::ER_INTERNAL    Internal<br />21    ZIPARCHIVE::ER_INCONS    Zip压缩包不一致<br />22    ZIPARCHIVE::ER_REMOVE    不能移除文件<br />23    ZIPARCHIVE::ER_DELETED    条目已被删除</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=zip.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/zip.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.zip.php">Zip</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.zip.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="zip.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="zip.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="zip.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.ziparchive.php" title="ZipArchive">ZipArchive</a>
                        </li>
                                                <li class="">
                            <a href="ref.zip.php" title="Zip Functions">Zip Functions</a>
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
