<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ZipArchive::addFile - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ziparchive.addfile.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/ziparchive.addfile.php">
 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addfile.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.ziparchive.php">
 <link rel="prev" href="https://www.php.net/manual/en/ziparchive.addemptydir.php">
 <link rel="next" href="https://www.php.net/manual/en/ziparchive.addfromstring.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ziparchive.addfile.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ziparchive.addfile.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ziparchive.addfile.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ziparchive.addfile.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ziparchive.addfile.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ziparchive.addfile.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ziparchive.addfile.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ziparchive.addfile.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ziparchive.addfile.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ziparchive.addfile.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ziparchive.addfile.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Adds a file to a ZIP archive from the given path" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ZipArchive::addFile - Manual" />
<meta name="twitter:description" content="Adds a file to a ZIP archive from the given path" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ZipArchive::addFile - Manual" />
<meta itemprop="description" content="Adds a file to a ZIP archive from the given path" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Adds a file to a ZIP archive from the given path" />

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
        <a href="ziparchive.addfromstring.php">
          ZipArchive::addFromString &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ziparchive.addemptydir.php">
          &laquo; ZipArchive::addEmptyDir        </a>
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
            <option value='en/ziparchive.addfile.php' selected="selected">English</option>
            <option value='de/ziparchive.addfile.php'>German</option>
            <option value='es/ziparchive.addfile.php'>Spanish</option>
            <option value='fr/ziparchive.addfile.php'>French</option>
            <option value='it/ziparchive.addfile.php'>Italian</option>
            <option value='ja/ziparchive.addfile.php'>Japanese</option>
            <option value='pt_BR/ziparchive.addfile.php'>Brazilian Portuguese</option>
            <option value='ru/ziparchive.addfile.php'>Russian</option>
            <option value='tr/ziparchive.addfile.php'>Turkish</option>
            <option value='uk/ziparchive.addfile.php'>Ukrainian</option>
            <option value='zh/ziparchive.addfile.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ziparchive.addfile" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ZipArchive::addFile</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.1.0)</p><p class="refpurpose"><span class="refname">ZipArchive::addFile</span> &mdash; <span class="dc-title">Adds a file to a ZIP archive from the given path</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-ziparchive.addfile-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>ZipArchive::addFile</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filepath</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$entryname</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code><span class="initializer"> = ZipArchive::LENGTH_TO_END</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = ZipArchive::FL_OVERWRITE</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Adds a file to a ZIP archive from a given path.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">For maximum portability, it is recommended to always use forward slashes (<code class="literal">/</code>) as directory separator in ZIP filenames.</span></p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-ziparchive.addfile-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filepath</code></dt>
     <dd>
      <p class="para">
       The path to the file to add.
      </p>
     </dd>
    
    
     <dt><code class="parameter">entryname</code></dt>
     <dd>
      <p class="para">
       If supplied and not empty, this is the local name inside the ZIP archive that will override the <code class="parameter">filepath</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">start</code></dt>
     <dd>
      <p class="para">
       For partial copy, start position.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       For partial copy, length to be copied,
       if <strong><code><a href="zip.constants.php#ziparchive.constants.length-to-end">ZipArchive::LENGTH_TO_END</a></code></strong> (0) the file size is used,
       if <strong><code><a href="zip.constants.php#ziparchive.constants.length-unchecked">ZipArchive::LENGTH_UNCHECKED</a></code></strong> the whole file is used
       (starting from <code class="parameter">start</code>).
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Bitmask consisting of
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-overwrite">ZipArchive::FL_OVERWRITE</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-guess">ZipArchive::FL_ENC_GUESS</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-utf-8">ZipArchive::FL_ENC_UTF_8</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-enc-cp437">ZipArchive::FL_ENC_CP437</a></code></strong>,
       <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong>.
       The behaviour of these constants is described on the
       <a href="zip.constants.php" class="link">ZIP constants</a> page.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-ziparchive.addfile-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-ziparchive.addfile-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.0.0, PECL zip 1.18.0</td>
       <td>
        <code class="parameter">flags</code> was added.
       </td>
      </tr>

      <tr>
       <td>8.3.0, PECL zip 1.22.1</td>
       <td>
        <strong><code><a href="zip.constants.php#ziparchive.constants.fl-open-file-now">ZipArchive::FL_OPEN_FILE_NOW</a></code></strong> was added.
       </td>
      </tr>

      <tr>
       <td>8.3.0, PECL zip 1.22.2</td>
       <td>
        <strong><code><a href="zip.constants.php#ziparchive.constants.length-to-end">ZipArchive::LENGTH_TO_END</a></code></strong> and <strong><code><a href="zip.constants.php#ziparchive.constants.length-unchecked">ZipArchive::LENGTH_UNCHECKED</a></code></strong> were added.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-ziparchive.addfile-examples">
  <h3 class="title">Examples</h3>
    <p class="para">
     This example opens a ZIP file archive
     <var class="filename">test.zip</var> and add
     the file <var class="filename">/path/to/index.txt</var>.
     as <var class="filename">newname.txt</var>.
    </p>
    <div class="example" id="example-914">
     <p><strong>Example #1 Open and add</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$zip </span><span style="color: #007700">= new </span><span style="color: #0000BB">ZipArchive</span><span style="color: #007700">;<br />if (</span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'test.zip'</span><span style="color: #007700">) === </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'/path/to/index.txt'</span><span style="color: #007700">, </span><span style="color: #DD0000">'newname.txt'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$zip</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />    echo </span><span style="color: #DD0000">'ok'</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">'failed'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>


 <div class="refsect1 notes" id="refsect1-ziparchive.addfile-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When a file is set to be added to the archive, PHP will lock the file. The
    lock is only released once the <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> object
    has been closed, either via <span class="methodname"><a href="ziparchive.close.php" class="methodname">ZipArchive::close()</a></span> or
    the <span class="classname"><a href="class.ziparchive.php" class="classname">ZipArchive</a></span> object being destroyed. This may
    prevent you from being able to delete the file being added until after the
    lock has been released.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-ziparchive.addfile-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="ziparchive.replacefile.php" class="methodname" rel="rdfs-seeAlso">ZipArchive::replaceFile()</a> - Replace file in ZIP archive with a given path</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/zip/ziparchive/addfile.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fziparchive.addfile%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ziparchive.addfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addfile.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96382">  <div class="votes">
    <div id="Vu96382">
    <a href="/manual/vote-note.php?id=96382&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96382">
    <a href="/manual/vote-note.php?id=96382&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96382" title="75% like this...">
    67
    </div>
  </div>
  <a href="#96382" class="name">
  <strong class="user"><em>jayarjo</em></strong></a><a class="genanchor" href="#96382"> &para;</a><div class="date" title="2010-02-24 01:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96382">
<div class="phpcode"><code><span class="html">It is not obvious, since there are no noticeable examples around, but you can use $localname (second parameter) to define and control file/directory structure inside the zip. Use it if you do not want files to be included with their absolute directory tree.
<br />
<br /><span class="default">&lt;?php
<br />
<br />$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$abs_path</span><span class="keyword">, </span><span class="default">$relative_path</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101605">  <div class="votes">
    <div id="Vu101605">
    <a href="/manual/vote-note.php?id=101605&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101605">
    <a href="/manual/vote-note.php?id=101605&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101605" title="85% like this...">
    35
    </div>
  </div>
  <a href="#101605" class="name">
  <strong class="user"><em>john factorial</em></strong></a><a class="genanchor" href="#101605"> &para;</a><div class="date" title="2010-12-29 12:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101605">
<div class="phpcode"><code><span class="html">Beware: calling $zip-&gt;addFile() on a file that doesn't exist will succeed and return TRUE, delaying the failure until you make the final $zip-&gt;close() call, which will return FALSE and potentially leave you scratching your head.<br /><br />If you're adding multiple files to a zip and your $zip-&gt;close() call is returning FALSE, ensure that all the files you added actually exist.<br /><br />It's also a good idea to check each file with file_exists() or is_readable() before calling $zip-&gt;addFile() on it.</span></code></div>
  </div>
 </div>
  <div class="note" id="114840">  <div class="votes">
    <div id="Vu114840">
    <a href="/manual/vote-note.php?id=114840&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114840">
    <a href="/manual/vote-note.php?id=114840&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114840" title="85% like this...">
    14
    </div>
  </div>
  <a href="#114840" class="name">
  <strong class="user"><em>frame86 at live dot com</em></strong></a><a class="genanchor" href="#114840"> &para;</a><div class="date" title="2014-04-13 04:48"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114840">
<div class="phpcode"><code><span class="html">The manual is lying.<br /><br />"In short, it means you can first delete an added file after the archive is closed. "<br /><br />Thats true but not by locking the file...<br />Warning! This method works asynchronous! <br /><br />It seems that addFile() will return TRUE if the file stat command returns correctly, but the operation itself will not happen yet.<br /><br />Instead, deleting a file is always possible. I have discovered this behaviour by using a temporary file and deleting it immediately after addFile() returns. The result was that no archive was created nor any file was added although every operation (creating,open(),addFile()) returned true before. The operation silenty fails.</span></code></div>
  </div>
 </div>
  <div class="note" id="100755">  <div class="votes">
    <div id="Vu100755">
    <a href="/manual/vote-note.php?id=100755&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100755">
    <a href="/manual/vote-note.php?id=100755&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100755" title="80% like this...">
    22
    </div>
  </div>
  <a href="#100755" class="name">
  <strong class="user"><em>aartdebruijn at gmail dot com</em></strong></a><a class="genanchor" href="#100755"> &para;</a><div class="date" title="2010-11-04 06:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100755">
<div class="phpcode"><code><span class="html">When adding a file to your zip, the file is opened and stays open.<br />When adding over 1024 files (depending on your open files limit) the server stops adding files, resulting in a status 11 in your zip Archive. There is no warning when exceeding this open files limit with addFiles.<br /><br />Check your open files with ulimit -a<br /><br />This kept me busy for some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="126929">  <div class="votes">
    <div id="Vu126929">
    <a href="/manual/vote-note.php?id=126929&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126929">
    <a href="/manual/vote-note.php?id=126929&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126929" title="75% like this...">
    2
    </div>
  </div>
  <a href="#126929" class="name">
  <strong class="user"><em>610010559 at qq dot com</em></strong></a><a class="genanchor" href="#126929"> &para;</a><div class="date" title="2022-03-16 03:52"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126929">
<div class="phpcode"><code><span class="html">there are some points  can be more clear, it take me some time to figure out. hope it can help you.<br />1.use addFile() ,method to add the file with path to zip. if the directory not exist, addFile() would auto create it.<br /><span class="default">&lt;?php<br />   </span><span class="keyword">....<br />   </span><span class="comment">//addFile would help you create the directory named not_exist_director before add the filename.txt file.<br />   </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$fileToAdd</span><span class="keyword">, </span><span class="string">'/not_exist_directory/filename.txt'</span><span class="keyword">);<br />   ...<br /></span><span class="default">?&gt;<br /></span><br />2. addFile() would overwrite the old file if exist in default.<br /><span class="default">&lt;?php<br />   </span><span class="keyword">....<br />   </span><span class="comment">//if the filename.txt is exist in the zip, addFile() would overwrite it. because the the addFile fifth param is ZipArchive::FL_OVERWRITE by default.<br />   </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$fileToAdd</span><span class="keyword">, </span><span class="string">'/filename.txt'</span><span class="keyword">);<br />   ...<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114769">  <div class="votes">
    <div id="Vu114769">
    <a href="/manual/vote-note.php?id=114769&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114769">
    <a href="/manual/vote-note.php?id=114769&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114769" title="73% like this...">
    7
    </div>
  </div>
  <a href="#114769" class="name">
  <strong class="user"><em>romuloum at hotmail dot com</em></strong></a><a class="genanchor" href="#114769"> &para;</a><div class="date" title="2014-04-03 07:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114769">
<div class="phpcode"><code><span class="html">If you have problem with windows explorer reading zipfile created by linux, try:<br />$oZip-&gt;addFile ( $file_name, " " . basename ( $file_name ) )<br />That space " " should solve.</span></code></div>
  </div>
 </div>
  <div class="note" id="116799">  <div class="votes">
    <div id="Vu116799">
    <a href="/manual/vote-note.php?id=116799&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116799">
    <a href="/manual/vote-note.php?id=116799&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116799" title="75% like this...">
    2
    </div>
  </div>
  <a href="#116799" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#116799"> &para;</a><div class="date" title="2015-03-02 11:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116799">
<div class="phpcode"><code><span class="html">2 tips:<br /><br />- The example in on this page is a bit misleading for new programmers. It works only if the ZIP archive file exists already. Don't forget to use ZipArchive::CREATE and optionally ZipArchive::OVERWRITE in the second optional parameter in the open() function.<br /><br />- If you want to add files and directories recursively (see some examples from other comments here on this page) use scandir() instead of blob() because blob() does not list hidden files like ".htaccess" for example.</span></code></div>
  </div>
 </div>
  <div class="note" id="97596">  <div class="votes">
    <div id="Vu97596">
    <a href="/manual/vote-note.php?id=97596&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97596">
    <a href="/manual/vote-note.php?id=97596&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97596" title="68% like this...">
    7
    </div>
  </div>
  <a href="#97596" class="name">
  <strong class="user"><em>camuc at camuc dot net</em></strong></a><a class="genanchor" href="#97596"> &para;</a><div class="date" title="2010-04-27 08:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97596">
<div class="phpcode"><code><span class="html">In some versions of this library you NEED to add the "localfile" parameter or the file will not show in the Zip folder.</span></code></div>
  </div>
 </div>
  <div class="note" id="84009">  <div class="votes">
    <div id="Vu84009">
    <a href="/manual/vote-note.php?id=84009&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84009">
    <a href="/manual/vote-note.php?id=84009&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84009" title="66% like this...">
    6
    </div>
  </div>
  <a href="#84009" class="name">
  <strong class="user"><em>wacher at freemail dot hu</em></strong></a><a class="genanchor" href="#84009"> &para;</a><div class="date" title="2008-06-23 01:03"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84009">
<div class="phpcode"><code><span class="html">The workaround above (file_get_contents) is very dangerous if you pack large files. (see memory limit).<br />Close/open the zip archive periodically instead of using file_get_contents().</span></code></div>
  </div>
 </div>
  <div class="note" id="89813">  <div class="votes">
    <div id="Vu89813">
    <a href="/manual/vote-note.php?id=89813&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89813">
    <a href="/manual/vote-note.php?id=89813&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89813" title="63% like this...">
    6
    </div>
  </div>
  <a href="#89813" class="name">
  <strong class="user"><em>garcia at no_span dot krautzer-lynn dot com</em></strong></a><a class="genanchor" href="#89813"> &para;</a><div class="date" title="2009-03-24 06:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89813">
<div class="phpcode"><code><span class="html">If you add files that have an absolut path, like for example:<br />/mnt/repository/my_file.pdf<br />the standard windows zip utility will not be able to extract the files. The first slash trips the zip utility. You have to add relative file paths or use a symbolic link.</span></code></div>
  </div>
 </div>
  <div class="note" id="95725">  <div class="votes">
    <div id="Vu95725">
    <a href="/manual/vote-note.php?id=95725&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95725">
    <a href="/manual/vote-note.php?id=95725&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95725" title="55% like this...">
    4
    </div>
  </div>
  <a href="#95725" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#95725"> &para;</a><div class="date" title="2010-01-18 10:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95725">
<div class="phpcode"><code><span class="html">On my system (Windows), I found that ZipArchive uses IBM850 encoding for filenames (localname). For filenames with special characters such as (é) &amp;eacute; which appears at 0xE9 in the ISO-8859-1, it is at 0x82 in IBM850. I had to call iconv('ISO-8859-1', 'IBM850', 'Québec') to get correct file names.</span></code></div>
  </div>
 </div>
  <div class="note" id="112044">  <div class="votes">
    <div id="Vu112044">
    <a href="/manual/vote-note.php?id=112044&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112044">
    <a href="/manual/vote-note.php?id=112044&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112044" title="54% like this...">
    1
    </div>
  </div>
  <a href="#112044" class="name">
  <strong class="user"><em>kris at blacksuitmedia [do/t/] c0m</em></strong></a><a class="genanchor" href="#112044"> &para;</a><div class="date" title="2013-04-25 08:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112044">
<div class="phpcode"><code><span class="html">I had a huge number of files and folders that I needed to zip on a linux web server. I was running into timeout problems and file enumerator issues, as well as file handler limit issues (ulimit). I used a script to solve u limit offered by Farzad Ghanei first (ZipArchiveImproved), but closing and reopening his way didn't do the trick for me. <br /><br />I eventually did a simple call to a $filelimit variable I created that records file handler limit I want my script to hit before it closes and reopens the file. <br /><span class="default">&lt;?php<br />$filelimit </span><span class="keyword">= </span><span class="default">255</span><span class="keyword">;<br /><br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles </span><span class="keyword">== </span><span class="default">$filelimit</span><span class="keyword">) {</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">(); </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) or die (</span><span class="string">"Error: Could not reopen Zip"</span><span class="keyword">);}<br /></span><span class="default">?&gt;<br /></span><br />This made some progress for me, timeouts were gone, but when calling<br /><span class="default">&lt;?php $zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$filepath</span><span class="keyword">, </span><span class="default">$archivefilepath</span><span class="keyword">); </span><span class="default">?&gt;<br /></span>after the reopening of the Zip, I got an error. I echoed the <span class="default">&lt;?php $zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">?&gt;</span> and found that after reopening, the numFile enum reset to '0'. <br /><br />A few more goose-chases later, I tried addFromString with some better results, but did not get it working 100% until I actually coupled addFromString with addFile! My working scripting for the add files function on massive file-folder structures looks like so: <br /><br /><span class="default">&lt;?php <br />$sourcefolder </span><span class="keyword">= /</span><span class="default">rel</span><span class="keyword">/</span><span class="default">path</span><span class="keyword">/</span><span class="default">to</span><span class="keyword">/</span><span class="default">source</span><span class="keyword">/</span><span class="default">folder</span><span class="keyword">/</span><span class="default">on</span><span class="keyword">/</span><span class="default">server</span><span class="keyword">/<br /><br /></span><span class="default">$dirlist </span><span class="keyword">= new </span><span class="default">RecursiveDirectoryIterator</span><span class="keyword">(</span><span class="default">$sourcefolder</span><span class="keyword">);<br /><br /></span><span class="default">$filelist </span><span class="keyword">= new </span><span class="default">RecursiveIteratorIterator</span><span class="keyword">(</span><span class="default">$dirlist</span><span class="keyword">);<br /><br /></span><span class="comment">//how many file can be added before a reopen is forced?<br /></span><span class="default">$filelimit </span><span class="keyword">= </span><span class="default">245</span><span class="keyword">; <br /><br /></span><span class="comment">// Defines the action<br /></span><span class="default">$file </span><span class="keyword">= </span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">"tmp"</span><span class="keyword">, </span><span class="string">"zip"</span><span class="keyword">);<br /></span><span class="default">$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br /><br /></span><span class="comment">// This creates and then gives the option to save the zip file<br /><br /></span><span class="keyword">if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">) !== </span><span class="default">TRUE</span><span class="keyword">) {<br /><br />    die (</span><span class="string">"Could not open archive"</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="comment">// adds files to the file list<br /></span><span class="keyword">foreach (</span><span class="default">$filelist </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {<br /><br />    </span><span class="comment">//fix archive paths<br />    </span><span class="default">$path </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$sourcefolder</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">); </span><span class="comment">//remove the source path from the $key to return only the file-folder structure from the root of the source folder<br />    </span><span class="keyword">if (!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)) { die(</span><span class="default">$key</span><span class="keyword">.</span><span class="string">' does not exist. Please contact your administrator or try again later.'</span><span class="keyword">); }<br />      if (!</span><span class="default">is_readable</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)) { die(</span><span class="default">$key</span><span class="keyword">.</span><span class="string">' not readable. Please contact your administrator or try again later.'</span><span class="keyword">); }     <br />          if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles </span><span class="keyword">== </span><span class="default">$filelimit</span><span class="keyword">) {</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">(); </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) or die (</span><span class="string">"Error: Could not reopen Zip"</span><span class="keyword">);}<br /><br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) or die (</span><span class="string">"ERROR: Could not add file: </span><span class="default">$key</span><span class="string"> &lt;/br&gt; numFile:"</span><span class="keyword">.</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">realpath</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">), </span><span class="default">$path</span><span class="keyword">) or die (</span><span class="string">"ERROR: Could not add file: </span><span class="default">$key</span><span class="string"> &lt;/br&gt; numFile:"</span><span class="keyword">.</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">);<br />    <br />}<br /><br /></span><span class="comment">// closes the archive<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="comment">//make local temp file a .zip, rename, and move to output dir<br /></span><span class="default">rename </span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"./" </span><span class="keyword">. </span><span class="default">$outputfolder </span><span class="keyword">. </span><span class="string">"/" </span><span class="keyword">. </span><span class="default">$zipfilename</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>I hope this may help someone else.</span></code></div>
  </div>
 </div>
  <div class="note" id="93090">  <div class="votes">
    <div id="Vu93090">
    <a href="/manual/vote-note.php?id=93090&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93090">
    <a href="/manual/vote-note.php?id=93090&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93090" title="54% like this...">
    2
    </div>
  </div>
  <a href="#93090" class="name">
  <strong class="user"><em>peter at boring dot ch</em></strong></a><a class="genanchor" href="#93090"> &para;</a><div class="date" title="2009-08-22 06:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93090">
<div class="phpcode"><code><span class="html">Here's a little extension to ZipArchive that handles directories recursively:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">Zipper </span><span class="keyword">extends </span><span class="default">ZipArchive </span><span class="keyword">{
<br />    
<br />public function </span><span class="default">addDir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">) {
<br />    print </span><span class="string">'adding ' </span><span class="keyword">. </span><span class="default">$path </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);
<br />    </span><span class="default">$nodes </span><span class="keyword">= </span><span class="default">glob</span><span class="keyword">(</span><span class="default">$path </span><span class="keyword">. </span><span class="string">'/*'</span><span class="keyword">);
<br />    foreach (</span><span class="default">$nodes </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {
<br />        print </span><span class="default">$node </span><span class="keyword">. </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;
<br />        if (</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">)) {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addDir</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);
<br />        } else if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">))  {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">);
<br />        }
<br />    }
<br />}
<br />    
<br />} </span><span class="comment">// class Zipper
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107550">  <div class="votes">
    <div id="Vu107550">
    <a href="/manual/vote-note.php?id=107550&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107550">
    <a href="/manual/vote-note.php?id=107550&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107550" title="54% like this...">
    1
    </div>
  </div>
  <a href="#107550" class="name">
  <strong class="user"><em>sp at read dot eu</em></strong></a><a class="genanchor" href="#107550"> &para;</a><div class="date" title="2012-02-16 08:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107550">
<div class="phpcode"><code><span class="html">Note that using addFile() will change the order of the files within the zip, in fact within the index of the zip. Does not matter much, except if you loop the index and use addFile() within that loop : it will likely give messy results.<br /><br />Example : <br /><span class="default">&lt;?php<br />$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'somefile.zip'</span><span class="keyword">) === </span><span class="default">TRUE</span><span class="keyword">) {<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { <br />    if (</span><span class="default">forsomereason</span><span class="keyword">()) { <br />      </span><span class="default">addFile</span><span class="keyword">(</span><span class="string">'./somenewfile.ext'</span><span class="keyword">, </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">));<br />    }<br />  }<br />}<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />This code may loop for ever, depending on your forsomereason() function, or at least you're at risk.<br /><br />Try something like this instead :<br /><br /><span class="default">&lt;?php<br />$zip </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br />if (</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'somefile.zip'</span><span class="keyword">) === </span><span class="default">TRUE</span><span class="keyword">) {<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">numFiles</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) { <br />    if (</span><span class="default">forsomereason</span><span class="keyword">()) { <br />      </span><span class="default">$couples</span><span class="keyword">[]=array(</span><span class="string">'filename'</span><span class="keyword">=&gt;</span><span class="string">'./somenewfile.ext'</span><span class="keyword">,</span><span class="string">'localname'</span><span class="keyword">=&gt;</span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">getNameIndex</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">));<br />    }<br />  }<br />}<br />foreach (</span><span class="default">$couples </span><span class="keyword">as </span><span class="default">$couple</span><span class="keyword">) </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$couple</span><span class="keyword">[</span><span class="string">'filename'</span><span class="keyword">],</span><span class="default">$couple</span><span class="keyword">[</span><span class="string">'localname'</span><span class="keyword">]);<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Hope it helps ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="118504">  <div class="votes">
    <div id="Vu118504">
    <a href="/manual/vote-note.php?id=118504&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118504">
    <a href="/manual/vote-note.php?id=118504&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118504" title="52% like this...">
    1
    </div>
  </div>
  <a href="#118504" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#118504"> &para;</a><div class="date" title="2015-12-16 05:04"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118504">
<div class="phpcode"><code><span class="html">Do NOT use ZipArchive::addFile() to append a folder.<br /><br />When a folder's path is passed to ZipArchive::addFile(), the method returns true, but ZipArchive can neither create a zip archive nor can it make any change to a existing file.<br /><br /><span class="default">&lt;?php<br />    $z </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">();<br />    if(</span><span class="default">true </span><span class="keyword">=== (</span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'./foo.zip'</span><span class="keyword">, </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">CREATE </span><span class="keyword">| </span><span class="default">ZipArchive</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">))){<br />        </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">setArchiveComment</span><span class="keyword">(</span><span class="string">'Interesting!'</span><span class="keyword">);<br />        </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="string">'domain.txt'</span><span class="keyword">, </span><span class="string">'wuxiancheng.cn'</span><span class="keyword">);<br />        </span><span class="default">$folder </span><span class="keyword">= </span><span class="string">'./test'</span><span class="keyword">;<br />        !</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">) &amp;&amp; </span><span class="default">mkdir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">); </span><span class="comment">// Create an folder for testing<br />        </span><span class="keyword">if(</span><span class="default">true </span><span class="keyword">=== </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">)){<br />            echo </span><span class="string">'success'</span><span class="keyword">; </span><span class="comment">// !!!<br />        </span><span class="keyword">}<br />        </span><span class="default">rmdir</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">);<br />        </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />        </span><span class="comment">// foo.zip will NOT be saved on disk.<br />        // If foo.zip already exists before we run this script, the file will remain unchanged.<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129597">  <div class="votes">
    <div id="Vu129597">
    <a href="/manual/vote-note.php?id=129597&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129597">
    <a href="/manual/vote-note.php?id=129597&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129597" title="no votes...">
    0
    </div>
  </div>
  <a href="#129597" class="name">
  <strong class="user"><em>theking2(at)king.ma</em></strong></a><a class="genanchor" href="#129597"> &para;</a><div class="date" title="2024-06-19 04:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129597">
<div class="phpcode"><code><span class="html">As others have pointed out ZipArchive::addFile() is asynchronous. If you want to restrict the time when adding a large number of files this is the way to do it:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//$files is an array with a horrendous amount of filenames.<br />//$fileCount the total number of files in $files e.q. count($files)<br />//$fileIndex is the file you want to start with<br />      </span><span class="keyword">for(<br />        </span><span class="default">$fileIndex </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">, </span><span class="default">$start </span><span class="keyword">= </span><span class="default">hrtime</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">);<br />        </span><span class="default">$fileIndex </span><span class="keyword">&lt; </span><span class="default">$fileCount </span><span class="keyword">and </span><span class="default">$secondsElapsed </span><span class="keyword">&lt; </span><span class="default">5.0</span><span class="keyword">;<br />        </span><span class="default">$fileIndex</span><span class="keyword">++<br />      ) {<br />        </span><span class="default">$currentfile </span><span class="keyword">= </span><span class="default">$files</span><span class="keyword">[ </span><span class="default">$fileIndex </span><span class="keyword">];<br /><br />        if( </span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$currentfile </span><span class="keyword">) ) {<br />          </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">( </span><span class="default">$currentfile </span><span class="keyword">);<br />          </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />          </span><span class="default">$secondsElapsed </span><span class="keyword">= ( </span><span class="default">hrtime</span><span class="keyword">( </span><span class="default">true </span><span class="keyword">) - </span><span class="default">$start </span><span class="keyword">) / </span><span class="default">1e+9</span><span class="keyword">;<br />        }<br /><br />      }<br /></span><span class="default">?&gt;<br /></span><br />this will keep on adding files until the time out (5.0s) arises. Without usleep(1) it will just continue until the max_excecution_time is reached.</span></code></div>
  </div>
 </div>
  <div class="note" id="123327">  <div class="votes">
    <div id="Vu123327">
    <a href="/manual/vote-note.php?id=123327&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123327">
    <a href="/manual/vote-note.php?id=123327&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123327" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123327" class="name">
  <strong class="user"><em>raja at rsdisk dot com</em></strong></a><a class="genanchor" href="#123327"> &para;</a><div class="date" title="2018-11-10 08:57"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123327">
<div class="phpcode"><code><span class="html">zip-&gt;addfile function does not add file to archive immediately. It is cued and executed at zip-&gt;close()<br /><br />I had backup files in a dir. with a foreach statement I was adding the file to an archive and then moving the files into dump dir immediately.<br /><br />This caused an error.<br /><br /><span class="default">&lt;?php<br />$dir </span><span class="keyword">= </span><span class="default">getcwd</span><span class="keyword">().</span><span class="string">'/'</span><span class="keyword">;<br /></span><span class="default">$dirContent </span><span class="keyword">= </span><span class="default">scandir</span><span class="keyword">(</span><span class="string">'./'</span><span class="keyword">);<br />foreach(</span><span class="default">$dirContent </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">)<br />    if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'.sql'</span><span class="keyword">)!==</span><span class="default">false</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"adding </span><span class="default">$file</span><span class="string"> ......"</span><span class="keyword">;<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />        </span><span class="default">$newFileName </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"done/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$newFileName</span><span class="keyword">);<br />    echo( </span><span class="string">"; file added\n"</span><span class="keyword">);<br />}<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />The $zip-&gt;close() needs to execute before moving files,<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach(</span><span class="default">$dirContent </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">)<br />    if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'.sql'</span><span class="keyword">)!==</span><span class="default">false</span><span class="keyword">)<br />{<br />    echo </span><span class="string">"adding </span><span class="default">$file</span><span class="string"> ......"</span><span class="keyword">;<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    echo( </span><span class="string">"; file added\n"</span><span class="keyword">);<br />}<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />foreach(</span><span class="default">$dirContent </span><span class="keyword">as </span><span class="default">$file</span><span class="keyword">)<br />    if(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">'.sql'</span><span class="keyword">)!==</span><span class="default">false</span><span class="keyword">)<br />{<br />    </span><span class="default">$newFileName </span><span class="keyword">= </span><span class="default">$dir</span><span class="keyword">.</span><span class="string">"done/</span><span class="default">$file</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">rename</span><span class="keyword">(</span><span class="default">$dir</span><span class="keyword">.</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$newFileName</span><span class="keyword">);<br />    echo( </span><span class="string">"</span><span class="default">$file</span><span class="string"> moved\n"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92835">  <div class="votes">
    <div id="Vu92835">
    <a href="/manual/vote-note.php?id=92835&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92835">
    <a href="/manual/vote-note.php?id=92835&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92835" title="100% like this...">
    2
    </div>
  </div>
  <a href="#92835" class="name">
  <strong class="user"><em>christophe dot braud at aquafadas dot com</em></strong></a><a class="genanchor" href="#92835"> &para;</a><div class="date" title="2009-08-11 03:10"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92835">
<div class="phpcode"><code><span class="html">If you have some warnings with ZipArchiveImproved since the last Ubuntu update, replace "self::CREATE" by "self::CREATE | self::OVERWRITE" in the reopen function<br /><br />christophe</span></code></div>
  </div>
 </div>
  <div class="note" id="88266">  <div class="votes">
    <div id="Vu88266">
    <a href="/manual/vote-note.php?id=88266&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88266">
    <a href="/manual/vote-note.php?id=88266&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88266" title="100% like this...">
    2
    </div>
  </div>
  <a href="#88266" class="name">
  <strong class="user"><em>Farzad Ghanei</em></strong></a><a class="genanchor" href="#88266"> &para;</a><div class="date" title="2009-01-18 02:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88266">
<div class="phpcode"><code><span class="html">here is a basic class that extends the ZipArchive to:<br />  * add a functionality to report the ZIP file address (I needed it and I could not find out how in ZipArchive documentation).<br />  * resolve the problem of adding so many files to the archive due file descriptor limit. the ZipArchiveImproved::addFile() handles this.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * ZipArchiveImproved extends ZipArchive to add some information about the zip file and some functionality.<br /> * <br /> *<br /> *<br /> * @author Farzad Ghanei<br /> * @uses ZipArchive<br /> * @version 1.0.0 2009-01-18<br /> */<br /><br /></span><span class="keyword">class </span><span class="default">ZipArchiveImproved </span><span class="keyword">extends </span><span class="default">ZipArchive </span><span class="keyword">{<br />    protected </span><span class="default">$_archiveFileName </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    protected </span><span class="default">$_newAddedFilesCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    protected </span><span class="default">$_newAddedFilesSize </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />    <br />    </span><span class="comment">/**<br />     * returns the name of the archive file.<br />     *<br />     * @return string<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getArchiveFileName</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_archiveFileName</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * returns the number of files that are going to be added to ZIP<br />     * without reopenning the stream to file.<br />     *<br />     * @return int<br />     */<br />    </span><span class="keyword">public function </span><span class="default">getNewAddedFilesSize</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesSize</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * sets the number of files that are going to be added to ZIP<br />     * without reopenning the stream to file. if no size is specified, default is 100.<br />     *<br />     * @param int<br />     * @return ZipArchiveImproved self reference<br />     */<br />    </span><span class="keyword">public function </span><span class="default">setNewlAddedFilesSize</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">) {<br />        if ( empty(</span><span class="default">$size</span><span class="keyword">) || !</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">) || </span><span class="default">$size </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="default">$size </span><span class="keyword">= </span><span class="default">100</span><span class="keyword">;<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesSize </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />     * opens a stream to a ZIP archive file. calls the ZipArchive::open() internally.<br />     * overwrites ZipArchive::open() to add the archiveFileName functionality.<br />     *<br />     * @param string $fileName<br />     * @param int $flags<br />     * return mixed<br />     */<br />    </span><span class="keyword">public function </span><span class="default">open</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_archiveFileName </span><span class="keyword">= </span><span class="default">$fileName</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">open</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">,</span><span class="default">$flags</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * closes the stream to ZIP archive file. calls the ZipArchive::close() internally.<br />     * overwrites ZipArchive::close() to add the archiveFileName functionality.<br />     *<br />     * @return bool<br />     */<br />    </span><span class="keyword">public function </span><span class="default">close</span><span class="keyword">() {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_archiveFileName </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">close</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">/**<br />     * closes the connection to ZIP file and openes the connection again.<br />     *<br />     * @return bool<br />     */<br />    </span><span class="keyword">public function </span><span class="default">reopen</span><span class="keyword">() {<br />        </span><span class="default">$archiveFileName </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_archiveFileName</span><span class="keyword">;<br />        if ( !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">() ) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$archiveFileName</span><span class="keyword">,</span><span class="default">self</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * adds a file to a ZIP archive from the given path. calls the ZipArchive::addFile() internally.<br />     * overwrites ZipArchive::addFile() to handle maximum file connections in operating systems.<br />     *<br />     * @param string $fileName the path to file to be added to archive<br />     * @param string [optional] $localname the name of the file in the ZIP archive<br />     * @return bool<br />     */<br />    </span><span class="keyword">public function </span><span class="default">addFile</span><span class="keyword">( </span><span class="default">$fileName </span><span class="keyword">) {<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesCounter </span><span class="keyword">&gt;= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesSize</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">reopen</span><span class="keyword">();<br />        }<br />        if ( </span><span class="default">func_num_args</span><span class="keyword">() &gt; </span><span class="default">1 </span><span class="keyword">) {<br />            </span><span class="default">$flags </span><span class="keyword">= </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$added </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">,</span><span class="default">$flags</span><span class="keyword">);<br />            if (</span><span class="default">$added</span><span class="keyword">) {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesCounter</span><span class="keyword">++;<br />            }<br />            return </span><span class="default">$added</span><span class="keyword">;<br />        }<br />        </span><span class="default">$added </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">);<br />        if (</span><span class="default">$added</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_newAddedFilesCounter</span><span class="keyword">++;<br />        }<br />        return </span><span class="default">$added</span><span class="keyword">;<br />    } </span><span class="comment">// public function addFile()<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115030">  <div class="votes">
    <div id="Vu115030">
    <a href="/manual/vote-note.php?id=115030&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115030">
    <a href="/manual/vote-note.php?id=115030&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115030" title="no votes...">
    0
    </div>
  </div>
  <a href="#115030" class="name">
  <strong class="user"><em>todd at toddwiggins dot com dot au</em></strong></a><a class="genanchor" href="#115030"> &para;</a><div class="date" title="2014-05-15 03:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115030">
<div class="phpcode"><code><span class="html">The addFile() method does not accept the "file://" protocol. Strip away "file://" and use the absolute path instead.<br /><br />I assume that it also does not accept any other protocols, I was having issues trying to add files, other functions within the application I was building required the use of the protocol.<br /><br />Also to note, the status code returned did not match any of the predefined error codes, and the status code was never the same. My assumption was a overflow on the variable as the status codes were around the minimum and maximum INT values.</span></code></div>
  </div>
 </div>
  <div class="note" id="113446">  <div class="votes">
    <div id="Vu113446">
    <a href="/manual/vote-note.php?id=113446&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113446">
    <a href="/manual/vote-note.php?id=113446&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113446" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113446" class="name">
  <strong class="user"><em>s dot eckert dot spam at gmx dot com</em></strong></a><a class="genanchor" href="#113446"> &para;</a><div class="date" title="2013-10-11 03:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113446">
<div class="phpcode"><code><span class="html">Note that there is no concept of "folders" for ZIP files. If you need to store data into folders, use forward slashes ("/") in $localname to separate folder(s) and the file name.<br /><br />Example:<br />$zip-&gt;addFile("test.txt", "mainfolder/subfolder/test.txt");</span></code></div>
  </div>
 </div>
  <div class="note" id="110513">  <div class="votes">
    <div id="Vu110513">
    <a href="/manual/vote-note.php?id=110513&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110513">
    <a href="/manual/vote-note.php?id=110513&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110513" title="50% like this...">
    0
    </div>
  </div>
  <a href="#110513" class="name">
  <strong class="user"><em>Dean Rather</em></strong></a><a class="genanchor" href="#110513"> &para;</a><div class="date" title="2012-10-31 03:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110513">
<div class="phpcode"><code><span class="html">This add directory function does not require that you create a new wrapper class, and also does not add the entire file directory tree into your zip file.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public function </span><span class="default">addDirectoryToZip</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">, </span><span class="default">$base</span><span class="keyword">)<br />{<br />    </span><span class="default">$newFolder </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$dir</span><span class="keyword">);<br />    </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addEmptyDir</span><span class="keyword">(</span><span class="default">$newFolder</span><span class="keyword">);<br />    foreach(</span><span class="default">glob</span><span class="keyword">(</span><span class="default">$dir </span><span class="keyword">. </span><span class="string">'/*'</span><span class="keyword">) as </span><span class="default">$file</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">is_dir</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">))<br />        {<br />            </span><span class="default">$zip </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addDirectoryToZip</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">, </span><span class="default">$base</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">$newFile </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$base</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">);<br />            </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">$newFile</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">$zip</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108491">  <div class="votes">
    <div id="Vu108491">
    <a href="/manual/vote-note.php?id=108491&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108491">
    <a href="/manual/vote-note.php?id=108491&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108491" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108491" class="name">
  <strong class="user"><em>shano</em></strong></a><a class="genanchor" href="#108491"> &para;</a><div class="date" title="2012-05-01 02:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108491">
<div class="phpcode"><code><span class="html">thought it might come in handy<br />recursively adds all directories and files within a directory<br /><br />class zip extends ZipArchive {<br />    <br />    public function addDirectory($dir) { // adds directory<br />        foreach(glob($dir . '/*') as $file) {<br />            if(is_dir($file))<br />                $this-&gt;addDirectory($file);<br />            else<br />                $this-&gt;addFile($file);<br />        }<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="74297">  <div class="votes">
    <div id="Vu74297">
    <a href="/manual/vote-note.php?id=74297&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74297">
    <a href="/manual/vote-note.php?id=74297&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74297" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74297" class="name">
  <strong class="user"><em>Andreas R. newsgroups2005 at geekmail de</em></strong></a><a class="genanchor" href="#74297"> &para;</a><div class="date" title="2007-04-03 06:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74297">
<div class="phpcode"><code><span class="html">Currently the number of files that can be added using addFile to the ZIP archive (until it is closed) is limited by file descriptors limit. This is an easy workaround (on the bug links below you can find another workarounds):<br /><span class="default">&lt;?php<br />    </span><span class="comment">/** work around file descriptor number limitation (to avoid failure<br />     * upon adding more than typically 253 or 1024 files to ZIP) */<br />    </span><span class="keyword">function </span><span class="default">addFileToZip</span><span class="keyword">( </span><span class="default">$zip</span><span class="keyword">, </span><span class="default">$path</span><span class="keyword">, </span><span class="default">$zipEntryName </span><span class="keyword">) {<br />        </span><span class="comment">// this would fail with status ZIPARCHIVE::ER_OPEN<br />        // after certain number of files is added since<br />        // ZipArchive internally stores the file descriptors of all the<br />        // added files and only on close writes the contents to the ZIP file<br />        // see: <a href="http://bugs.php.net/bug.php?id=40494" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=40494</a><br />        // and: <a href="http://pecl.php.net/bugs/bug.php?id=9443" rel="nofollow" target="_blank">http://pecl.php.net/bugs/bug.php?id=9443</a><br />        // return $zip-&gt;addFile( $path, $zipEntryName );<br /><br />        </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">( </span><span class="default">$path </span><span class="keyword">);<br />        if ( </span><span class="default">$contents </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">( </span><span class="default">$zipEntryName</span><span class="keyword">, </span><span class="default">$contents </span><span class="keyword">);<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122292">  <div class="votes">
    <div id="Vu122292">
    <a href="/manual/vote-note.php?id=122292&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122292">
    <a href="/manual/vote-note.php?id=122292&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122292" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#122292" class="name">
  <strong class="user"><em>gio AT giombg dot com</em></strong></a><a class="genanchor" href="#122292"> &para;</a><div class="date" title="2018-01-20 08:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122292">
<div class="phpcode"><code><span class="html">work 4 me <br /><br />$zip = new ZipArchive;<br />$zip_name = ('name.zip');<br />$path_zip = ($config['path'].'/zip/'.$zip_name);<br />$zip-&gt;open($path_zip,ZipArchive::CREATE);<br />$zip-&gt;addFile($path1.'/'.$nam1,$nam1);<br />$zip-&gt;addFile($path2.'/'.$nam2,$nam2);<br />$zip-&gt;close();<br /><br />ciao<br />GioMBG</span></code></div>
  </div>
 </div>
  <div class="note" id="108193">  <div class="votes">
    <div id="Vu108193">
    <a href="/manual/vote-note.php?id=108193&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108193">
    <a href="/manual/vote-note.php?id=108193&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108193" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#108193" class="name">
  <strong class="user"><em>ptipti at gala dot net</em></strong></a><a class="genanchor" href="#108193"> &para;</a><div class="date" title="2012-04-06 12:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108193">
<div class="phpcode"><code><span class="html">Another surprise, which took a lot of trouble. So that after you add a file to the archive it can be safely removed, took advantage of such construction:<br /><br />if (!is_file ($archive)) :<br />    $result = $zip-&gt;open ($archive, ZipArchive::CREATE);<br />else :<br />    $result = $zip-&gt;open ($archive);<br />endif;<br />if ($result === TRUE) :<br />    if (($zip-&gt;addFile ($file, $filename)) === TRUE) :<br />        $theoreticaly_added = TRUE;<br />    endif;<br />    if ((($zip-&gt;close ()) === TRUE) &amp;&amp; $theoreticaly_added) :<br />        unlink ($file);<br />    endif;<br />endif;<br /><br />Now the files will not disappear. But perhaps there is a simpler solution, which gives 100% guarantee?</span></code></div>
  </div>
 </div>
  <div class="note" id="84529">  <div class="votes">
    <div id="Vu84529">
    <a href="/manual/vote-note.php?id=84529&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84529">
    <a href="/manual/vote-note.php?id=84529&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84529" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#84529" class="name">
  <strong class="user"><em>javierseixas at gmail dt com</em></strong></a><a class="genanchor" href="#84529"> &para;</a><div class="date" title="2008-07-17 08:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84529">
<div class="phpcode"><code><span class="html">I have had several problems trying adding files, because of a path problem. The error gived was this:<br /><br />ZipArchive::addFile() [function.ZipArchive-addFile]: Unable to access &lt;path&gt;<br /><br />I used an absolute root starting by "/", and it didn't work. Try starting your path with "./" (referencing the root of your site).</span></code></div>
  </div>
 </div>
  <div class="note" id="80933">  <div class="votes">
    <div id="Vu80933">
    <a href="/manual/vote-note.php?id=80933&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80933">
    <a href="/manual/vote-note.php?id=80933&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80933" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#80933" class="name">
  <strong class="user"><em>mike at thetroubleshooters dot dk</em></strong></a><a class="genanchor" href="#80933"> &para;</a><div class="date" title="2008-02-07 07:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80933">
<div class="phpcode"><code><span class="html">What is worse is that when you run out of filedescriptors it seems to fail silently, I have not been able to find any errors in any logfiles.</span></code></div>
  </div>
 </div>
  <div class="note" id="119677">  <div class="votes">
    <div id="Vu119677">
    <a href="/manual/vote-note.php?id=119677&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119677">
    <a href="/manual/vote-note.php?id=119677&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119677" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#119677" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#119677"> &para;</a><div class="date" title="2016-08-01 01:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119677">
<div class="phpcode"><code><span class="html">如果文件名包含汉字，ZIPARCHIVE::addFile() 会导致无法将文件压缩到压缩包中，或者压缩以后文件名乱码。<br /><br />可以使用ZipArchive::addFromString()来实现。<br /><br />注意：如果操作系统是Windows，文件系统编码是gbk.<br />如果php文件的文件编码是utf-8，需要相应转码。<br /><br />ZipArchive::addFile() fails if the filename contains Chinese characters.<br /><br />ZipArchive::addFromString() should be used instead.<br /><br /><span class="default">&lt;?php<br /> <br />    $z </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">;<br /><br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="string">'吴先成.txt'</span><span class="keyword">;<br /><br />    if(</span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">CREATE</span><span class="keyword">)===</span><span class="default">true</span><span class="keyword">){<br />        </span><span class="default">$z</span><span class="keyword">-&gt;</span><span class="default">addFromString</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));<br />        </span><span class="comment">//for windows<br />        //$z-&gt;addFromString($file, file_get_contents(iconv('utf-8', 'gbk//ignore', $file)));<br />    </span><span class="keyword">}<br />    </span><span class="comment">// ...</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83124">  <div class="votes">
    <div id="Vu83124">
    <a href="/manual/vote-note.php?id=83124&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83124">
    <a href="/manual/vote-note.php?id=83124&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83124" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#83124" class="name">
  <strong class="user"><em>stanleyshilov {} gmail.com</em></strong></a><a class="genanchor" href="#83124"> &para;</a><div class="date" title="2008-05-11 12:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83124">
<div class="phpcode"><code><span class="html">It should be noted that the example provided above is not accurate.<br /><br />Unlike extractTo, zip_open does not return a boolean result, so the above example will always fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="113097">  <div class="votes">
    <div id="Vu113097">
    <a href="/manual/vote-note.php?id=113097&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113097">
    <a href="/manual/vote-note.php?id=113097&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113097" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#113097" class="name">
  <strong class="user"><em>arrtedone at gmail dot com</em></strong></a><a class="genanchor" href="#113097"> &para;</a><div class="date" title="2013-08-29 08:19"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113097">
<div class="phpcode"><code><span class="html">Note that ZipArchive::open() not return boolean value, but integer, for example :<br />$zip = new ZipArchive();<br />$filename = '/tmp/test.zip';<br />var_dum($zip-&gt;open($filename)); // return's : int (11)</span></code></div>
  </div>
 </div>
  <div class="note" id="88600">  <div class="votes">
    <div id="Vu88600">
    <a href="/manual/vote-note.php?id=88600&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88600">
    <a href="/manual/vote-note.php?id=88600&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88600" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#88600" class="name">
  <strong class="user"><em>ss at littlerain dot com</em></strong></a><a class="genanchor" href="#88600"> &para;</a><div class="date" title="2009-01-30 04:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88600">
<div class="phpcode"><code><span class="html">Note that the file isn't actually added to the archive until the $zip-&gt;close() method is called. I spent a lot of time trying to figure out why no time() went by after adding large files via $zip-&gt;addFile() but would then time out the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="97451">  <div class="votes">
    <div id="Vu97451">
    <a href="/manual/vote-note.php?id=97451&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97451">
    <a href="/manual/vote-note.php?id=97451&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97451" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#97451" class="name">
  <strong class="user"><em>pelpet at ic dot cz</em></strong></a><a class="genanchor" href="#97451"> &para;</a><div class="date" title="2010-04-20 09:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97451">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$zip</span><span class="keyword">=new </span><span class="default">ZipArchive</span><span class="keyword">;<br /></span><span class="default">$zip</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="string">'path to the file'</span><span class="keyword">, </span><span class="string">'new name of the file'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />What I have to do, when I wan't to have the file in the zip archive with it's name before archiving?<br />(Sorry, I'm from Czech Republic and I can't speak English very well, if I did anywhere mistake, so ignore that pease :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="87663">  <div class="votes">
    <div id="Vu87663">
    <a href="/manual/vote-note.php?id=87663&amp;page=ziparchive.addfile&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87663">
    <a href="/manual/vote-note.php?id=87663&amp;page=ziparchive.addfile&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87663" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#87663" class="name">
  <strong class="user"><em>marco at maranao dot ca</em></strong></a><a class="genanchor" href="#87663"> &para;</a><div class="date" title="2008-12-15 10:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87663">
<div class="phpcode"><code><span class="html">This is my workaround for the file descriptor limit by closing/opening the archive file periodically.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if(</span><span class="default">$backup </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">()) {
<br />    if(</span><span class="default">$backup</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">, </span><span class="default">ZIPARCHIVE</span><span class="keyword">::</span><span class="default">OVERWRITE</span><span class="keyword">) === </span><span class="default">true</span><span class="keyword">) {
<br />        </span><span class="default">$backup</span><span class="keyword">-&gt;</span><span class="default">addFile</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">[</span><span class="string">'realpath'</span><span class="keyword">], </span><span class="default">$file</span><span class="keyword">[</span><span class="string">'path'</span><span class="keyword">]);
<br />        if((</span><span class="default">$count</span><span class="keyword">++) == </span><span class="default">200</span><span class="keyword">) { </span><span class="comment">// the file descriptor limit
<br />            </span><span class="default">$backup</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />            if(</span><span class="default">$backup </span><span class="keyword">= new </span><span class="default">ZipArchive</span><span class="keyword">()) {
<br />                </span><span class="default">$backup</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="default">$zip</span><span class="keyword">);
<br />                </span><span class="default">$count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />            }
<br />        }
<br />    }
<br />    </span><span class="default">$backup</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope it helps someone.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ziparchive.addfile&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ziparchive.addfile.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.ziparchive.php">ZipArchive</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ziparchive.addemptydir.php" title="addEmptyDir">addEmptyDir</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
