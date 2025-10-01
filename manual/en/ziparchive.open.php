<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.open.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.open.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.open.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.locatename.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.registercancelcallback.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Open a ZIP file archive" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::open - Manual" />
<meta name="twitter:description" content="Open a ZIP file archive" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::open - Manual" />
<meta itemprop="description" content="Open a ZIP file archive" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Open a ZIP file archive" />

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
        <a href="ziparchive.registercancelcallback.php">
          ZipArchive::registerCancelCallback &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.locatename.php">
          &laquo; ZipArchive::locateName        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.compression.php'>Compression and Archive Extensions</a></li>      <li><a href='book.zip.php'>Zip</a></li>      <li><a href='class.ziparchive.php'>ZipArchive</a></li>      </ul>
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
            <option value='en/ziparchive.open.php' selected="selected">English</option>
            <option value='de/ziparchive.open.php'>German</option>
            <option value='es/ziparchive.open.php'>Spanish</option>
            <option value='fr/ziparchive.open.php'>French</option>
            <option value='it/ziparchive.open.php'>Italian</option>
            <option value='ja/ziparchive.open.php'>Japanese</option>
            <option value='pt_BR/ziparchive.open.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.open.php'>Russian</option>
            <option value='tr/ziparchive.open.php'>Turkish</option>
            <option value='uk/ziparchive.open.php'>Ukrainian</option>
            <option value='zh/ziparchive.open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.open" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::open</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">ZipArchive::open</span> &mdash; <span class="dc-title">Open a ZIP file archive</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-ziparchive.open-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::open</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span></div>

  <p class="para rdfs-comment">
   Opens a new or existing zip archive for reading, writing or modifying.
  </p>
  <p class="para">
   Since libzip 1.6.0, an empty file is not a valid archive any longer.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-ziparchive.open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The file name of the ZIP archive to open.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       The mode to use to open the archive.
       <ul class="itemizedlist">
        <li class="listitem">
         <p class="para">
          <strong><code><a href="zip.constants.php#ziparchive.constants.overwrite">ZipArchive::OVERWRITE</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="zip.constants.php#ziparchive.constants.create">ZipArchive::CREATE</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="zip.constants.php#ziparchive.constants.rdonly">ZipArchive::RDONLY</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="zip.constants.php#ziparchive.constants.excl">ZipArchive::EXCL</a></code></strong>
         </p>
        </li>
        <li class="listitem">
         <p class="para">
          <strong><code><a href="zip.constants.php#ziparchive.constants.checkcons">ZipArchive::CHECKCONS</a></code></strong>
         </p>
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-ziparchive.open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or one of the following error codes on error:
   <dl>
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-exists">ZipArchive::ER_EXISTS</a></code></strong></dt>
     <dd>
      <span class="simpara">File already exists.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-incons">ZipArchive::ER_INCONS</a></code></strong></dt>
     <dd>
      <span class="simpara">Zip archive inconsistent.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-inval">ZipArchive::ER_INVAL</a></code></strong></dt>
     <dd>
      <span class="simpara">Invalid argument.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-memory">ZipArchive::ER_MEMORY</a></code></strong></dt>
     <dd>
      <span class="simpara">Malloc failure.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-noent">ZipArchive::ER_NOENT</a></code></strong></dt>
     <dd>
      <span class="simpara">No such file.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-nozip">ZipArchive::ER_NOZIP</a></code></strong></dt>
     <dd>
      <span class="simpara">Not a zip archive.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-open">ZipArchive::ER_OPEN</a></code></strong></dt>
     <dd>
      <span class="simpara">Can&#039;t open file.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-read">ZipArchive::ER_READ</a></code></strong></dt>
     <dd>
      <span class="simpara">Read error.</span>
     </dd>
    
    
     <dt><strong><code><a href="zip.constants.php#ziparchive.constants.er-seek">ZipArchive::ER_SEEK</a></code></strong></dt>
     <dd>
      <span class="simpara">Seek error.</span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-ziparchive.open-examples">
  <h3 class="title">Examples</h3>
    <div class="example" id="example-938">
     <p><strong>Example #1 Open and extract</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$res </span><span style="color: #007700">=== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">extractTo</span><span style="color: #007700">(</span><span style="color: #DD0000">'test'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />} else {<br />    echo </span><span style="color: #DD0000">'failed, code:' </span><span style="color: #007700">. </span><span style="color: #0000BB">$res</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <div class="example" id="example-939">
     <p><strong>Example #2 Create an archive</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">, </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">::</span><span style="color: #0000BB">CREATE</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">$res </span><span style="color: #007700">=== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFromString</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.txt'</span><span style="color: #007700">, </span><span style="color: #DD0000">'file content goes here'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'data.txt'</span><span style="color: #007700">, </span><span style="color: #DD0000">'entryname.txt'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <div class="example" id="example-940">
     <p><strong>Example #3 Create an temporary archive</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$name </span><span style="color: #007700">= </span><span style="color: #0000BB">tempnam</span><span style="color: #007700">(</span><span style="color: #0000BB">sys_get_temp_dir</span><span style="color: #007700">(), </span><span style="color: #DD0000">"FOO"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">::</span><span style="color: #0000BB">OVERWRITE</span><span style="color: #007700">); </span><span style="color: #FF8000">/* truncate as empty file is not valid */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$res </span><span style="color: #007700">=== </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'data.txt'</span><span style="color: #007700">, </span><span style="color: #DD0000">'entryname.txt'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="88765">  <div class="votes">
    <div id="Vu88765">
    <a href="/manual/vote-note.php?id=88765&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88765">
    <a href="/manual/vote-note.php?id=88765&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88765" title="82% like this...">
    99
    </div>
  </div>
  <a href="#88765" class="name">
  <strong class="user"><em>eric at webdeveric dot com</em></strong></a><a class="genanchor" href="#88765"> &para;</a><div class="date" title="2009-02-06 07:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88765">
<div class="phpcode"><code><span class="html">With php 5.2.6, the following code created a new zip or replaced a existing zip.<br />Note that I am only using the ZIPARCHIVE::OVERWRITE flag.<br /><br /><span class="default">&lt;?php<br />    $zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />    </span><span class="default">$opened </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">( </span><span class="default">$zipFileName</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">OVERWRITE </span><span class="keyword">);<br />    if( </span><span class="default">$opened </span><span class="keyword">!== </span><span class="default">true </span><span class="keyword">){<br />        die(</span><span class="string">"cannot open </span><span class="keyword">{</span><span class="default">$zipFileName</span><span class="keyword">}</span><span class="string"> for writing."</span><span class="keyword">);<br />    }<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">( </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$contents </span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Now, with php 5.2.8, it does not work and gives this warning:<br /><br />Warning: ZipArchive::addFromString() [ziparchive.addfromstring]: Invalid or unitialized Zip object in [myfile] on line [myline]<br /><br />To fix this, you must specify the flags as create or overwrite.<br /><br /><span class="default">&lt;?php<br />    $zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />    </span><span class="default">$opened </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">( </span><span class="default">$zipFileName</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE </span><span class="keyword">| </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">OVERWRITE </span><span class="keyword">);<br />    if( </span><span class="default">$opened </span><span class="keyword">!== </span><span class="default">true </span><span class="keyword">){<br />        die(</span><span class="string">"cannot open </span><span class="keyword">{</span><span class="default">$zipFileName</span><span class="keyword">}</span><span class="string"> for writing."</span><span class="keyword">);<br />    }<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">( </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$contents </span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />When googling for the error message I found a lot of people that had it but couldn't figure out why they were getting it.<br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="117339">  <div class="votes">
    <div id="Vu117339">
    <a href="/manual/vote-note.php?id=117339&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117339">
    <a href="/manual/vote-note.php?id=117339&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117339" title="84% like this...">
    41
    </div>
  </div>
  <a href="#117339" class="name">
  <strong class="user"><em>abolfazl dot ziaratban at gmail dot com</em></strong></a><a class="genanchor" href="#117339"> &para;</a><div class="date" title="2015-05-24 04:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117339">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">#made by abolfazl ziaratban (c)<br />#license GPL<br /><br /></span><span class="keyword">class </span><span class="default">zip </span><span class="keyword">extends </span><span class="default">ZipArchive<br />    </span><span class="keyword">{<br />        public function </span><span class="default">message</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">)<br />            {<br />                switch (</span><span class="default">$code</span><span class="keyword">)<br />                    {<br />                        case </span><span class="default">0</span><span class="keyword">:<br />                        return </span><span class="string">'No error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">1</span><span class="keyword">:<br />                        return </span><span class="string">'Multi-disk zip archives not supported'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">2</span><span class="keyword">:<br />                        return </span><span class="string">'Renaming temporary file failed'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">3</span><span class="keyword">:<br />                        return </span><span class="string">'Closing zip archive failed'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">4</span><span class="keyword">:<br />                        return </span><span class="string">'Seek error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">5</span><span class="keyword">:<br />                        return </span><span class="string">'Read error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">6</span><span class="keyword">:<br />                        return </span><span class="string">'Write error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">7</span><span class="keyword">:<br />                        return </span><span class="string">'CRC error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">8</span><span class="keyword">:<br />                        return </span><span class="string">'Containing zip archive was closed'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">9</span><span class="keyword">:<br />                        return </span><span class="string">'No such file'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">10</span><span class="keyword">:<br />                        return </span><span class="string">'File already exists'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">11</span><span class="keyword">:<br />                        return </span><span class="string">'Can\'t open file'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">12</span><span class="keyword">:<br />                        return </span><span class="string">'Failure to create temporary file'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">13</span><span class="keyword">:<br />                        return </span><span class="string">'Zlib error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">14</span><span class="keyword">:<br />                        return </span><span class="string">'Malloc failure'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">15</span><span class="keyword">:<br />                        return </span><span class="string">'Entry has been changed'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">16</span><span class="keyword">:<br />                        return </span><span class="string">'Compression method not supported'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">17</span><span class="keyword">:<br />                        return </span><span class="string">'Premature EOF'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">18</span><span class="keyword">:<br />                        return </span><span class="string">'Invalid argument'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">19</span><span class="keyword">:<br />                        return </span><span class="string">'Not a zip archive'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">20</span><span class="keyword">:<br />                        return </span><span class="string">'Internal error'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">21</span><span class="keyword">:<br />                        return </span><span class="string">'Zip archive inconsistent'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">22</span><span class="keyword">:<br />                        return </span><span class="string">'Can\'t remove file'</span><span class="keyword">;<br />                        <br />                        case </span><span class="default">23</span><span class="keyword">:<br />                        return </span><span class="string">'Entry has been deleted'</span><span class="keyword">;<br />                        <br />                        default:<br />                        return </span><span class="string">'An unknown error has occurred('</span><span class="keyword">.</span><span class="default">intval</span><span class="keyword">(</span><span class="default">$code</span><span class="keyword">).</span><span class="string">')'</span><span class="keyword">;<br />                    }                <br />            }<br /><br />        public function </span><span class="default">isDir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">)<br />            {<br />                return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">) == </span><span class="string">'/'</span><span class="keyword">;<br />            }<br /><br />        public function </span><span class="default">getTree</span><span class="keyword">()<br />            {<br />                </span><span class="default">$Tree </span><span class="keyword">= array();<br />                </span><span class="default">$pathArray </span><span class="keyword">= array();<br />                for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />                    {<br />                        </span><span class="default">$path </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />                        </span><span class="default">$pathBySlash </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$path</span><span class="keyword">));<br />                        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$pathBySlash</span><span class="keyword">);<br />                        </span><span class="default">$temp </span><span class="keyword">= &amp;</span><span class="default">$Tree</span><span class="keyword">;<br />                        for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">$c</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />                            if(isset(</span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">]]))<br />                                </span><span class="default">$temp </span><span class="keyword">= &amp;</span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">]];<br />                            else<br />                                {<br />                                    </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">]] = array();<br />                                    </span><span class="default">$temp </span><span class="keyword">= &amp;</span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$j</span><span class="keyword">]];<br />                                }<br />                        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">isDir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">))<br />                            </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">]] = array();<br />                        else<br />                            </span><span class="default">$temp</span><span class="keyword">[] = </span><span class="default">$pathBySlash</span><span class="keyword">[</span><span class="default">$c</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />                    }<br />                return </span><span class="default">$Tree</span><span class="keyword">;<br />            }<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117082">  <div class="votes">
    <div id="Vu117082">
    <a href="/manual/vote-note.php?id=117082&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117082">
    <a href="/manual/vote-note.php?id=117082&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117082" title="80% like this...">
    6
    </div>
  </div>
  <a href="#117082" class="name">
  <strong class="user"><em>jekillen at prodigy net</em></strong></a><a class="genanchor" href="#117082"> &para;</a><div class="date" title="2015-04-13 07:23"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117082">
<div class="phpcode"><code><span class="html">Calling ZipArchive-&gt;open() will not create an empty zip archive file.<br />I found this out the hard way. I wrote code that produced positive<br />results: I.E. the return value from the call to ZipArchive was TRUE<br />and the empty zip file was not created. So at least call <br />ZipArchive-&gt;addFromString(&lt;filename.zip&gt;, '&lt;minimal content&gt;')<br />when creating a new zip archive file.</span></code></div>
  </div>
 </div>
  <div class="note" id="125111">  <div class="votes">
    <div id="Vu125111">
    <a href="/manual/vote-note.php?id=125111&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125111">
    <a href="/manual/vote-note.php?id=125111&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125111" title="77% like this...">
    5
    </div>
  </div>
  <a href="#125111" class="name">
  <strong class="user"><em>Fred Johnson</em></strong></a><a class="genanchor" href="#125111"> &para;</a><div class="date" title="2020-06-12 03:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125111">
<div class="phpcode"><code><span class="html">Note that ZipArchive does not support generating streaming ZIP file content (i.e. start sending data to the user as soon as you start generating it such as from a database).  This means you have to write the entire file to disk first and then send the file to the user.  Doing that can take a while depending on how much data there is, which could run up against server timeout limits.<br /><br />There are a couple of PHP userland libraries available on GitHub that can stream ZIP file content out to the user as soon as any data is written to the relevant classes.<br /><br />cubiclesoft/php-zipstreamwriter<br />maennchen/ZipStream-PHP<br /><br />Maybe a future version of ZipArchive will offer something similar.</span></code></div>
  </div>
 </div>
  <div class="note" id="87423">  <div class="votes">
    <div id="Vu87423">
    <a href="/manual/vote-note.php?id=87423&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87423">
    <a href="/manual/vote-note.php?id=87423&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87423" title="70% like this...">
    23
    </div>
  </div>
  <a href="#87423" class="name">
  <strong class="user"><em>jj at icglink dot com</em></strong></a><a class="genanchor" href="#87423"> &para;</a><div class="date" title="2008-12-04 11:09"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87423">
<div class="phpcode"><code><span class="html">if you are echoing out the output and confused about the number...maybe this will help.  i'm not totally sure it is accurate though.<br /><br />ZIPARCHIVE::ER_EXISTS - 10<br />ZIPARCHIVE::ER_INCONS - 21<br />ZIPARCHIVE::ER_INVAL - 18<br />ZIPARCHIVE::ER_MEMORY - 14<br />ZIPARCHIVE::ER_NOENT - 9<br />ZIPARCHIVE::ER_NOZIP - 19<br />ZIPARCHIVE::ER_OPEN - 11<br />ZIPARCHIVE::ER_READ - 5<br />ZIPARCHIVE::ER_SEEK - 4</span></code></div>
  </div>
 </div>
  <div class="note" id="110651">  <div class="votes">
    <div id="Vu110651">
    <a href="/manual/vote-note.php?id=110651&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110651">
    <a href="/manual/vote-note.php?id=110651&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110651" title="70% like this...">
    16
    </div>
  </div>
  <a href="#110651" class="name">
  <strong class="user"><em>walter at clevertechie dot com</em></strong></a><a class="genanchor" href="#110651"> &para;</a><div class="date" title="2012-11-17 08:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110651">
<div class="phpcode"><code><span class="html">If you have archives that you want to overwrite just use:<br /><br />ZIPARCHIVE::CREATE<br /><br />It will overwrite existing archives and at the same time create new ones if they don't already exist.<br /><br />ZIPARCHIVE::OVERWRITE won't work for both of these scenarios.<br /><br />(PHP version 5.4.4)</span></code></div>
  </div>
 </div>
  <div class="note" id="118273">  <div class="votes">
    <div id="Vu118273">
    <a href="/manual/vote-note.php?id=118273&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118273">
    <a href="/manual/vote-note.php?id=118273&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118273" title="70% like this...">
    11
    </div>
  </div>
  <a href="#118273" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118273"> &para;</a><div class="date" title="2015-11-06 09:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118273">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">// Use ZipArchive::OVERWRITE when the targetd file does not exist may lead you to an error like this<br />    // Warning: ZipArchive::addFile(): Invalid or uninitialized Zip object <br />    // try ZipArchive::OVERWRITE|ZipArchive::CREATE when you want to replace a zip archive that may not exist<br />    </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$rt</span><span class="keyword">=</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'i.zip'</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);<br />    echo </span><span class="default">$rt</span><span class="keyword">;<br />    </span><span class="comment">// when i.zip does not exist, $rt is 9, ZipArchive::ER_NOENT, or "No such file."<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="string">'wuxiancheng.cn.sql'</span><span class="keyword">,</span><span class="string">'db.sql'</span><span class="keyword">);<br />    </span><span class="comment">// triggers an error with the message "Warning: ZipArchive::addFile(): Invalid or uninitialized Zip object ..."<br />    <br />    <br />    // Use ZipArchive::OVERWRITE|ZipArchive::CREATE<br />    </span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'i.zip'</span><span class="keyword">,</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">|</span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);    <br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="string">'wuxiancheng.cn.sql'</span><span class="keyword">,</span><span class="string">'db.sql'</span><span class="keyword">);    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102849">  <div class="votes">
    <div id="Vu102849">
    <a href="/manual/vote-note.php?id=102849&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102849">
    <a href="/manual/vote-note.php?id=102849&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102849" title="71% like this...">
    3
    </div>
  </div>
  <a href="#102849" class="name">
  <strong class="user"><em>Jan Vavra</em></strong></a><a class="genanchor" href="#102849"> &para;</a><div class="date" title="2011-03-10 12:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102849">
<div class="phpcode"><code><span class="html">As discussed in <a href="http://bugs.php.net/bug.php?id=54128" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=54128</a> on Windows Server systems (2003, 2008) and IIS there is a problem when you want to unzip file stored in C:\Windows\Temp folder.<br />User of worker process IUSR_XXX has no directory listing right for C:\Windows\Temp and this is a reason why ZipArchive::open() fails with error 11 (error open). So it is not a good idea to store file for unzipping in folder defined by sys_get_temp_dir().</span></code></div>
  </div>
 </div>
  <div class="note" id="118490">  <div class="votes">
    <div id="Vu118490">
    <a href="/manual/vote-note.php?id=118490&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118490">
    <a href="/manual/vote-note.php?id=118490&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118490" title="66% like this...">
    2
    </div>
  </div>
  <a href="#118490" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118490"> &para;</a><div class="date" title="2015-12-14 10:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118490">
<div class="phpcode"><code><span class="html">ZipArchive::OVERWRITE does NOT mean an existing file would be deleted when ZipArchive::open() is called.<br /><br />In fact, the existing file will be deleted before PHP saves the zip archive on disk.<br /><br />PHP takes these steps to finish zipping:<br /><br />1. When ZipArchive::open('xx.zip') is called<br />If 'xx.zip' exists and is a zip archive, it will be opened and read as a temporary zip file, <br />If the file does not exist, and ZipArchive::CREATE is applied, php will create a temporary empty zip file<br />In these cases, ZipArchive::open() returns true, otherwise it returns an integer error code.<br />2. Adds file(s) to the temporary zip file when methods such as addFile(), addFromString() are called.<br />3. Deletes the existing file before saving the temporary zip file on disk.<br />4. Save the temporary zip file on disk<br />5.  Closes the active archive when ZipArchive::close() is called or at the end of the script<br /><br />Since PHP does NOT delete the existing file before saving the zip archive on disk, you should use unset() to delete it if you want to zip that file's containing folder and save the zip archive in that folder, otherwise you will get a larger and larger zip archive everytime you refresh the page.</span></code></div>
  </div>
 </div>
  <div class="note" id="102965">  <div class="votes">
    <div id="Vu102965">
    <a href="/manual/vote-note.php?id=102965&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102965">
    <a href="/manual/vote-note.php?id=102965&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102965" title="66% like this...">
    3
    </div>
  </div>
  <a href="#102965" class="name">
  <strong class="user"><em>sunil dt bhave at gmail dt com</em></strong></a><a class="genanchor" href="#102965"> &para;</a><div class="date" title="2011-03-16 10:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102965">
<div class="phpcode"><code><span class="html">Even though the api specifies that the flags are optional I found that I had to specify the flag ZIPARCHIVE::CREATE for an archive to be opened. <br />This is on a Windows 7 system with PHP 5.3.0</span></code></div>
  </div>
 </div>
  <div class="note" id="76136">  <div class="votes">
    <div id="Vu76136">
    <a href="/manual/vote-note.php?id=76136&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76136">
    <a href="/manual/vote-note.php?id=76136&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76136" title="64% like this...">
    5
    </div>
  </div>
  <a href="#76136" class="name">
  <strong class="user"><em>rickky at gmail dot com</em></strong></a><a class="genanchor" href="#76136"> &para;</a><div class="date" title="2007-07-02 05:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76136">
<div class="phpcode"><code><span class="html">If the directory you are writing or saving into does not have the correct permissions set, you won't get any error messages and it will look like everything worked fine... except it won't have changed!<br /><br />Instead make sure you collect the return value of ZipArchive::close(). If it is false... it didn't work.</span></code></div>
  </div>
 </div>
  <div class="note" id="114257">  <div class="votes">
    <div id="Vu114257">
    <a href="/manual/vote-note.php?id=114257&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114257">
    <a href="/manual/vote-note.php?id=114257&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114257" title="60% like this...">
    3
    </div>
  </div>
  <a href="#114257" class="name">
  <strong class="user"><em>Eric Langlois</em></strong></a><a class="genanchor" href="#114257"> &para;</a><div class="date" title="2014-01-29 09:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114257">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?PHP<br />        $zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />    </span><span class="default">$res </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'test.zip'</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);<br /><br />    if ( </span><span class="default">$res </span><span class="keyword">=== </span><span class="default">TRUE</span><span class="keyword">) {<br />               </span><span class="comment">//CODE GOES HERE<br />        <br />        </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />    } else {<br />        switch(</span><span class="default">$res</span><span class="keyword">){<br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_EXISTS</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"File already exists."</span><span class="keyword">;<br />                break;<br /><br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_INCONS</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Zip archive inconsistent."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_MEMORY</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Malloc failure."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOENT</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"No such file."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOZIP</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Not a zip archive."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_OPEN</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Can't open file."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_READ</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Read error."</span><span class="keyword">;<br />                break;<br />                <br />            case </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">ER_SEEK</span><span class="keyword">: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Seek error."</span><span class="keyword">;<br />                break;<br />            <br />            default: <br />                </span><span class="default">$ErrMsg </span><span class="keyword">= </span><span class="string">"Unknow (Code </span><span class="default">$rOpen</span><span class="string">)"</span><span class="keyword">;<br />                break;<br />                <br />            <br />        }<br />         die( </span><span class="string">'ZipArchive Error: ' </span><span class="keyword">. </span><span class="default">$ErrMsg</span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118274">  <div class="votes">
    <div id="Vu118274">
    <a href="/manual/vote-note.php?id=118274&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118274">
    <a href="/manual/vote-note.php?id=118274&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118274" title="57% like this...">
    1
    </div>
  </div>
  <a href="#118274" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118274"> &para;</a><div class="date" title="2015-11-06 09:45"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118274">
<div class="phpcode"><code><span class="html">return values of ZipArchive::open() and their values and meanings<br />ZipArchive::ER_SEEK     4    Seek error.<br />ZipArchive::ER_READ     5    Read error.<br />ZipArchive::ER_NOENT     9    No such file.<br />ZipArchive::ER_OPEN     11    Can't open file.<br />ZipArchive::ER_EXISTS     10    File already exists.<br />ZipArchive::ER_MEMORY 14    Malloc failure.<br />ZipArchive::ER_INVAL     18    Invalid argument.<br />ZipArchive::ER_NOZIP     19    Not a zip archive.<br />ZipArchive::ER_INCONS     21    Zip archive inconsistent</span></code></div>
  </div>
 </div>
  <div class="note" id="126201">  <div class="votes">
    <div id="Vu126201">
    <a href="/manual/vote-note.php?id=126201&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126201">
    <a href="/manual/vote-note.php?id=126201&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126201" title="100% like this...">
    2
    </div>
  </div>
  <a href="#126201" class="name">
  <strong class="user"><em>laacz at laacz dot lv</em></strong></a><a class="genanchor" href="#126201"> &para;</a><div class="date" title="2021-06-28 02:29"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126201">
<div class="phpcode"><code><span class="html">If on PHP 8.0+, you can use match expression to decode status code:<br /><br /><span class="default">&lt;?php<br />$archive </span><span class="keyword">= new </span><span class="default">\ZipArchive</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$archive</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'some.file.zip'</span><span class="keyword">);<br /><br /></span><span class="default">$message </span><span class="keyword">= match (</span><span class="default">$result</span><span class="keyword">) {<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_MULTIDISK   </span><span class="keyword">=&gt; </span><span class="string">'Multi-disk zip archives not supported'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_RENAME      </span><span class="keyword">=&gt; </span><span class="string">'Renaming temporary file failed'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_CLOSE       </span><span class="keyword">=&gt; </span><span class="string">'Closing zip archive failed'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_SEEK        </span><span class="keyword">=&gt; </span><span class="string">'Seek error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_READ        </span><span class="keyword">=&gt; </span><span class="string">'Read error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_WRITE       </span><span class="keyword">=&gt; </span><span class="string">'Write error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_CRC         </span><span class="keyword">=&gt; </span><span class="string">'CRC error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_ZIPCLOSED   </span><span class="keyword">=&gt; </span><span class="string">'Containing zip archive was closed'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOENT       </span><span class="keyword">=&gt; </span><span class="string">'No such file'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_EXISTS      </span><span class="keyword">=&gt; </span><span class="string">'File already exists'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_OPEN        </span><span class="keyword">=&gt; </span><span class="string">'Can\'t open file'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_TMPOPEN     </span><span class="keyword">=&gt; </span><span class="string">'Failure to create temporary file'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_ZLIB        </span><span class="keyword">=&gt; </span><span class="string">'Zlib error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_MEMORY      </span><span class="keyword">=&gt; </span><span class="string">'Malloc failure'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_CHANGED     </span><span class="keyword">=&gt; </span><span class="string">'Entry has been changed'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_COMPNOTSUPP </span><span class="keyword">=&gt; </span><span class="string">'Compression method not supported'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_EOF         </span><span class="keyword">=&gt; </span><span class="string">'Premature EOF'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_INVAL       </span><span class="keyword">=&gt; </span><span class="string">'Invalid argument'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_NOZIP       </span><span class="keyword">=&gt; </span><span class="string">'Not a zip archive'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_INTERNAL    </span><span class="keyword">=&gt; </span><span class="string">'Internal error'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_INCONS      </span><span class="keyword">=&gt; </span><span class="string">'Zip archive inconsistent'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_REMOVE      </span><span class="keyword">=&gt; </span><span class="string">'Can\'t remove file'</span><span class="keyword">,<br />    </span><span class="default">\ZipArchive</span><span class="keyword">::</span><span class="default">ER_DELETED     </span><span class="keyword">=&gt; </span><span class="string">'Entry has been deleted'</span><span class="keyword">,<br />    </span><span class="comment">// \ZipArchive::ER_OK          =&gt; 'No error',<br />    </span><span class="keyword">default                     =&gt; </span><span class="string">'No error'</span><span class="keyword">,<br />};<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126360">  <div class="votes">
    <div id="Vu126360">
    <a href="/manual/vote-note.php?id=126360&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126360">
    <a href="/manual/vote-note.php?id=126360&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126360" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126360" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126360"> &para;</a><div class="date" title="2021-08-23 11:39"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126360">
<div class="phpcode"><code><span class="html">To read a zip file contents then loop through $zip-&gt;numFiles using $zip-&gt;getNameIndex(i)<br /><br />e.g.<br /><br />            $zipfilename=$dir.DIRECTORY_SEPARATOR."test.zip";<br />            $zippedFile = new ZipArchive;<br />            $zippedFile-&gt;open($zipfilename);<br /><br />            echo "&lt;LI&gt;".$zippedFile-&gt;getFromName("mpdf-8.0.7/.gitignore")."&lt;/LI&gt;&lt;HR&gt;";<br /><br />            echo "&lt;LI&gt;Loaded $zipfilename ".$zippedFile-&gt;numFiles;<br />            for($i = 0; $i &lt; $zippedFile-&gt;numFiles; $i++) {<br />                $fn=$zippedFile-&gt;getNameIndex($i);<br />                echo "&lt;LI&gt;$i: ".$fn;<br /><br />                if ( strcmp(substr($fn, -1), DIRECTORY_SEPARATOR )==0 ) echo "... directory";<br />                else echo "... ".strlen($zippedFile-&gt;getFromIndex($i))." bytes";<br /><br />            }<br />            $zippedFile-&gt;close();</span></code></div>
  </div>
 </div>
  <div class="note" id="105590">  <div class="votes">
    <div id="Vu105590">
    <a href="/manual/vote-note.php?id=105590&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105590">
    <a href="/manual/vote-note.php?id=105590&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105590" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105590" class="name">
  <strong class="user"><em>YiiWanAB at hotmail dot com</em></strong></a><a class="genanchor" href="#105590"> &para;</a><div class="date" title="2011-08-30 10:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105590">
<div class="phpcode"><code><span class="html">Most of the time people iterate over a directory with 'opendir' or 'readdir' to add files to a zip. Like...<br /><br />while ($file = readdir($dir)) { ... $zip-&gt;addFile($file) }<br /><br />Note that $zip-&gt;addFile($file) will only work in the current directory if your at the root. You will need to add the correct path to that $file string variable to have the full file name like ...<br /><br />$zip-&gt;addFile($dir . DIRECTORY_SEPARATOR . $file); will work.<br /><br />This may identify why you may get a read error when closing the file. <br /><br />Enjoy.</span></code></div>
  </div>
 </div>
  <div class="note" id="94226">  <div class="votes">
    <div id="Vu94226">
    <a href="/manual/vote-note.php?id=94226&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94226">
    <a href="/manual/vote-note.php?id=94226&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94226" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94226" class="name">
  <strong class="user"><em>sebwoolford at gmail dot com</em></strong></a><a class="genanchor" href="#94226"> &para;</a><div class="date" title="2009-10-23 03:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94226">
<div class="phpcode"><code><span class="html">Further to what rickky at gmail dot com was saying, I've had that problem while trying to cache zip files and found that I had to set the permissions of the containing folder to 777 to get it to work.<br /><br />Because this is a potential security weakness if on a public viewable folder, I'd recommend moving the folder so that it is no longer within public_html. You can then use readfile() to output the archive to the browser, with some HTTP headers to tell the browser it is a zip file.</span></code></div>
  </div>
 </div>
  <div class="note" id="84646">  <div class="votes">
    <div id="Vu84646">
    <a href="/manual/vote-note.php?id=84646&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84646">
    <a href="/manual/vote-note.php?id=84646&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84646" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#84646" class="name">
  <strong class="user"><em>Jonathan Baltazar</em></strong></a><a class="genanchor" href="#84646"> &para;</a><div class="date" title="2008-07-23 07:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84646">
<div class="phpcode"><code><span class="html">The file name does not need to end in '.zip' if it is created using tempnam().  You just need to overwrite the file instead of trying to read it:
<br />
<br /><span class="default">&lt;?php
<br />$file </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">"tmp"</span><span class="keyword">, </span><span class="string">"zip"</span><span class="keyword">);
<br />    
<br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();
<br />
<br /></span><span class="comment">// Zip will open and overwrite the file, rather than try to read it.
<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">);
<br />
<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />
<br /></span><span class="comment">// Stream the file to the client
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/zip"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: " </span><span class="keyword">. </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\"a_zip_file.zip\""</span><span class="keyword">);
<br /></span><span class="default">readfile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />
<br /></span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92559">  <div class="votes">
    <div id="Vu92559">
    <a href="/manual/vote-note.php?id=92559&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92559">
    <a href="/manual/vote-note.php?id=92559&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92559" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#92559" class="name">
  <strong class="user"><em>michael202 at gmx dot de</em></strong></a><a class="genanchor" href="#92559"> &para;</a><div class="date" title="2009-07-29 06:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92559">
<div class="phpcode"><code><span class="html">to anyone getting an error ZIPARCHIVE::ER_READ = 5, when<br />doing $zip-&gt;open($zipfile) with a ZIP file containing a total of more then (around) 800 files (even when they are in sub-directories).<br /><br />possibly related bugs 40873, 8714:<br /><br />1. it was not an OS limit, because it worked when called from windows via samba on the same file at the same place<br /><br />2. it wasn't working under 32bit linux<br /><br />with php 5.3.0 the issue seems to be resolved.</span></code></div>
  </div>
 </div>
  <div class="note" id="84848">  <div class="votes">
    <div id="Vu84848">
    <a href="/manual/vote-note.php?id=84848&amp;page=ziparchive.open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84848">
    <a href="/manual/vote-note.php?id=84848&amp;page=ziparchive.open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84848" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#84848" class="name">
  <strong class="user"><em>azsymvelik at gmail dot com</em></strong></a><a class="genanchor" href="#84848"> &para;</a><div class="date" title="2008-08-01 01:25"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84848">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/*
<br />Hi!
<br />
<br />I made a little script about checking content and "secure repacking"
<br />*/
<br />
<br /></span><span class="default">$somefile </span><span class="keyword">= </span><span class="string">"zip.zip"</span><span class="keyword">;
<br /></span><span class="default">$someurl </span><span class="keyword">= </span><span class="string">"/some/url"
<br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;
<br /></span><span class="default">$open </span><span class="keyword">= </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$somefile</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CHECKCONS</span><span class="keyword">);
<br /></span><span class="comment">// If the archive is broken(or just another file renamed to *.zip) the function will return error on httpd under windows, so it's good to check if the archive is ok with ZIPARCHIVE::CHECKCONS
<br /></span><span class="keyword">if (</span><span class="default">$open </span><span class="keyword">=== </span><span class="default">TRUE</span><span class="keyword">) {
<br />if(!</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">extractTo</span><span class="keyword">(</span><span class="default">$someurl</span><span class="keyword">)) {
<br />die (</span><span class="string">"Error during extracting"</span><span class="keyword">);
<br />}
<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />}
<br /></span><span class="default">$new_archive_name </span><span class="keyword">= </span><span class="string">"new.zip"</span><span class="keyword">;
<br /></span><span class="default">$new_zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;
<br /></span><span class="default">$new_open </span><span class="keyword">= </span><span class="default">$new_zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$new_archive_name</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);
<br />if (</span><span class="default">$new_open </span><span class="keyword">=== </span><span class="default">TRUE</span><span class="keyword">) {
<br /></span><span class="default">$dir </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="default">$someurl</span><span class="keyword">);
<br />while (</span><span class="default">$file </span><span class="keyword">= </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">)) {
<br /> if (</span><span class="default">$file </span><span class="keyword">== </span><span class="string">"." </span><span class="keyword">|| </span><span class="default">$file </span><span class="keyword">== </span><span class="string">".."</span><span class="keyword">) { } else {
<br /> </span><span class="comment">//We do not wanna this files in the new zip archive
<br />  </span><span class="keyword">if (!</span><span class="default">$new_zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)) {
<br />     print </span><span class="default">$file</span><span class="keyword">.</span><span class="string">"was not added!&lt;br /&gt;"</span><span class="keyword">;
<br />   }
<br />  }
<br /> }
<br />}
<br /></span><span class="default">$new_zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ziparchive.open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.ziparchive.php">ZipArchive</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ziparchive.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfile.php" title="addFile">addFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addfromstring.php" title="addFromString">addFromString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addglob.php" title="addGlob">addGlob</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.addpattern.php" title="addPattern">addPattern</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.clearerror.php" title="clearError">clearError</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deleteindex.php" title="deleteIndex">deleteIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.deletename.php" title="deleteName">deleteName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.extractto.php" title="extractTo">extractTo</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchivecomment.php" title="getArchiveComment">getArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getarchiveflag.php" title="getArchiveFlag">getArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentindex.php" title="getCommentIndex">getCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getcommentname.php" title="getCommentName">getCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesindex.php" title="getExternalAttributesIndex">getExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getexternalattributesname.php" title="getExternalAttributesName">getExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromindex.php" title="getFromIndex">getFromIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getfromname.php" title="getFromName">getFromName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getnameindex.php" title="getNameIndex">getNameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstatusstring.php" title="getStatusString">getStatusString</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstream.php" title="getStream">getStream</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamindex.php" title="getStreamIndex">getStreamIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.getstreamname.php" title="getStreamName">getStreamName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.iscompressionmethoddupported.php" title="isCompressionMethodSupported">isCompressionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.isencryptionmethoddupported.php" title="isEncryptionMethodSupported">isEncryptionMethodSupported</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.locatename.php" title="locateName">locateName</a>
                        </li>
                                                <li class="current">
                            <a href="ziparchive.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registercancelcallback.php" title="registerCancelCallback">registerCancelCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.registerprogresscallback.php" title="registerProgressCallback">registerProgressCallback</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renameindex.php" title="renameIndex">renameIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.renamename.php" title="renameName">renameName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.replacefile.php" title="replaceFile">replaceFile</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchivecomment.php" title="setArchiveComment">setArchiveComment</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setarchiveflag.php" title="setArchiveFlag">setArchiveFlag</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentindex.php" title="setCommentIndex">setCommentIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcommentname.php" title="setCommentName">setCommentName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionindex.php" title="setCompressionIndex">setCompressionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setcompressionname.php" title="setCompressionName">setCompressionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionindex.php" title="setEncryptionIndex">setEncryptionIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setencryptionname.php" title="setEncryptionName">setEncryptionName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesindex.php" title="setExternalAttributesIndex">setExternalAttributesIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setexternalattributesname.php" title="setExternalAttributesName">setExternalAttributesName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimeindex.php" title="setMtimeIndex">setMtimeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setmtimename.php" title="setMtimeName">setMtimeName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.setpassword.php" title="setPassword">setPassword</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statindex.php" title="statIndex">statIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.statname.php" title="statName">statName</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeall.php" title="unchangeAll">unchangeAll</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangearchive.php" title="unchangeArchive">unchangeArchive</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangeindex.php" title="unchangeIndex">unchangeIndex</a>
                        </li>
                                                <li class="">
                            <a href="ziparchive.unchangename.php" title="unchangeName">unchangeName</a>
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
