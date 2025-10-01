<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installation - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/image.installation.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/image.installation.php">
 <link rel="alternate" href="https://www.php.net/manual/en/image.installation.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/image.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/image.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/image.configuration.php">

 <link rel="alternate" href="https://www.php.net/manual/en/image.installation.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/image.installation.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/image.installation.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/image.installation.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/image.installation.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/image.installation.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/image.installation.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/image.installation.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/image.installation.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/image.installation.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/image.installation.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installation" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installation - Manual" />
<meta name="twitter:description" content="Installation" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installation - Manual" />
<meta itemprop="description" content="Installation" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installation" />

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
        <a href="image.configuration.php">
          Runtime Configuration &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="image.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.image.php'>Image Processing and Generation</a></li>      <li><a href='book.image.php'>GD</a></li>      <li><a href='image.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/image.installation.php' selected="selected">English</option>
            <option value='de/image.installation.php'>German</option>
            <option value='es/image.installation.php'>Spanish</option>
            <option value='fr/image.installation.php'>French</option>
            <option value='it/image.installation.php'>Italian</option>
            <option value='ja/image.installation.php'>Japanese</option>
            <option value='pt_BR/image.installation.php'>Brazilian Portuguese</option>
            <option value='ru/image.installation.php'>Russian</option>
            <option value='tr/image.installation.php'>Turkish</option>
            <option value='uk/image.installation.php'>Ukrainian</option>
            <option value='zh/image.installation.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="image.installation" class="section">
 <h2 class="title">Installation</h2>
 <p class="para">
  To enable GD-support configure PHP
  <strong class="option configure">--with-gd[=DIR]</strong>, where DIR is the GD base
  install directory. To use the recommended bundled version of the GD library,
  use the configure option
  <strong class="option configure">--with-gd</strong>.
  GD library requires <span class="productname">libpng</span> and
  <span class="productname">libjpeg</span> to compile.
  As of PHP 7.4.0, <strong class="option configure">--with-gd</strong> becomes
  <strong class="option configure">--enable-gd</strong> (whether to enable the
  extension at all) and <strong class="option configure">--with-external-gd</strong>
  (to opt into using an external <span class="productname">libgd</span>, rather than
  the bundled one).
 </p>
 <p class="para">
  In Windows, you&#039;ll include the GD DLL <var class="filename">php_gd.dll</var> as
  an extension in <var class="filename">php.ini</var>.
  Prior to PHP 8.0.0, the DLL was named <var class="filename">php_gd2.dll</var>.
 </p>

 <p class="para">
  Enhance the capabilities of GD to handle more image formats by specifying
  the <code class="literal">--with-XXXX</code> configure switch to your PHP configure
  line.
  <table class="doctable table">
   <caption><strong>Supported image formats</strong></caption>
   
    <thead>
     <tr>
      <th>Image Format</th>
      <th>Configure Switch</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">avif</code></td>
      <td>
       To enable support for avif add
       <strong class="option configure">--with-avif</strong>.
       Available as of PHP 8.1.0.
      </td>
     </tr>

     <tr>
      <td><code class="literal">jpeg</code></td>
      <td>
       To enable support for jpeg add
       <strong class="option configure">--with-jpeg-dir=DIR</strong>. Jpeg 6b, 7 or 8
       are supported.
       As of PHP 7.4.0, use <strong class="option configure">--with-jpeg</strong>
       instead.
      </td>
     </tr>

     <tr>
      <td><code class="literal">png</code></td>
      <td>
       To enable support for png add
       <strong class="option configure">--with-png-dir=DIR</strong>. Note, libpng
       requires the <a href="zlib.requirements.php" class="link">zlib library</a>,
       therefore add <strong class="option configure">--with-zlib-dir[=DIR]</strong>
       to your configure line.
       As of PHP 7.4.0, <strong class="option configure">--with-png-dir</strong> and
       <strong class="option configure">--with-zlib-dir</strong> have been removed.
       <span class="productname">libpng</span> and <span class="productname">zlib</span>
       are required.
      </td>
     </tr>

     <tr>
      <td><code class="literal">xpm</code></td>
      <td>
       To enable support for xpm add
       <strong class="option configure">--with-xpm-dir=DIR</strong>. If configure
       is not able to find the required libraries, you may add the path to
       your X11 libraries.
       As of PHP 7.4.0, use <strong class="option configure">--with-xpm</strong>
       instead.
      </td>
     </tr>

     <tr>
      <td><code class="literal">webp</code></td>
      <td>
       To enable support for webp add <strong class="option configure">--with-webp-dir=DIR</strong>.
       As of PHP 7.4.0, use <strong class="option configure">--with-webp</strong>
       instead.
      </td>
     </tr>

    </tbody>
   
  </table>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    When compiling PHP with libpng, you must use the same version that was
    linked with the GD library.
   </span>
  </p></blockquote>
 </p>
 <p class="para">
  Enhance the capabilities of GD to deal with different fonts by specifying
  the <code class="literal">--with-XXXX</code> configure switch to your PHP configure
  line.
  <table class="doctable table">
   <caption><strong>Supported font libraries</strong></caption>
   
    <thead>
     <tr>
      <th>Font library</th>
      <th>Configure Switch</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><code class="literal">FreeType 2</code></td>
      <td>
       To enable support for FreeType 2 add
       <strong class="option configure">--with-freetype-dir=DIR</strong>.
       As of PHP 7.4.0 use <strong class="option configure">--with-freetype</strong>
       instead, which relies on <span class="productname">pkg-config</span>.
      </td>
     </tr>

     <tr>
      <td><code class="literal">Native TrueType string function</code></td>
      <td>
       To enable support for native TrueType string function add
       <strong class="option configure">--enable-gd-native-ttf</strong>.
       (This option has no effect and has been removed as of PHP 7.2.0.)
      </td>
     </tr>

    </tbody>
   
  </table>

 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/image/configure.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fimage.installation%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=image.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/image.installation.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120872">  <div class="votes">
    <div id="Vu120872">
    <a href="/manual/vote-note.php?id=120872&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120872">
    <a href="/manual/vote-note.php?id=120872&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120872" title="60% like this...">
    7
    </div>
  </div>
  <a href="#120872" class="name">
  <strong class="user"><em>Qussayyon Qamaron: Qusai.zf2@gmailcom</em></strong></a><a class="genanchor" href="#120872"> &para;</a><div class="date" title="2017-03-25 05:07"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120872">
<div class="phpcode"><code><span class="html">#install under Ubuntu 16.04:<br />    * if you have access to PHP7.1:<br />        &lt;sudo&gt; apt install php7.1-gd &amp;&amp; &lt;sudo&gt; systemctl restart apache2<br />    * if you have access to PHP7.0:<br />        &lt;sudo&gt; apt install php7.0-gd &amp;&amp; &lt;sudo&gt; systemctl restart apache2<br /><br />------------------------------------------------<br />Qussayyon Qamaron: Qusai.zf2gmailcom</span></code></div>
  </div>
 </div>
  <div class="note" id="118884">  <div class="votes">
    <div id="Vu118884">
    <a href="/manual/vote-note.php?id=118884&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118884">
    <a href="/manual/vote-note.php?id=118884&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118884" title="57% like this...">
    4
    </div>
  </div>
  <a href="#118884" class="name">
  <strong class="user"><em>svestka1999 at gmail dot com</em></strong></a><a class="genanchor" href="#118884"> &para;</a><div class="date" title="2016-02-22 06:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118884">
<div class="phpcode"><code><span class="html">Instructions how to compile bundled version on Linux:<br /><a href="http://stackoverflow.com/questions/35560150/php-gd-bundled-extension-without-recompiling-php-solution" rel="nofollow" target="_blank">http://stackoverflow.com/questions/35560150/php-gd-bundled-extension-without-recompiling-php-solution</a></span></code></div>
  </div>
 </div>
  <div class="note" id="86699">  <div class="votes">
    <div id="Vu86699">
    <a href="/manual/vote-note.php?id=86699&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86699">
    <a href="/manual/vote-note.php?id=86699&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86699" title="52% like this...">
    5
    </div>
  </div>
  <a href="#86699" class="name">
  <strong class="user"><em>msc at homofaber dot com</em></strong></a><a class="genanchor" href="#86699"> &para;</a><div class="date" title="2008-10-30 07:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86699">
<div class="phpcode"><code><span class="html">It should be noted that it might be pretty easy to install gd without the need to recompile php, when using debian:
<br />
<br />apt-get install php5-gd</span></code></div>
  </div>
 </div>
  <div class="note" id="120116">  <div class="votes">
    <div id="Vu120116">
    <a href="/manual/vote-note.php?id=120116&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120116">
    <a href="/manual/vote-note.php?id=120116&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120116" title="50% like this...">
    4
    </div>
  </div>
  <a href="#120116" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#120116"> &para;</a><div class="date" title="2016-11-03 12:52"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120116">
<div class="phpcode"><code><span class="html">For all who use php 7 and ubuntu<br /><br />sudo apt-get install php7.0-gd</span></code></div>
  </div>
 </div>
  <div class="note" id="105155">  <div class="votes">
    <div id="Vu105155">
    <a href="/manual/vote-note.php?id=105155&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105155">
    <a href="/manual/vote-note.php?id=105155&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105155" title="52% like this...">
    3
    </div>
  </div>
  <a href="#105155" class="name">
  <strong class="user"><em>florian</em></strong></a><a class="genanchor" href="#105155"> &para;</a><div class="date" title="2011-07-31 02:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105155">
<div class="phpcode"><code><span class="html">People having difficulties setting the --with-libdir option needs to set it like this :<br /><br />--with-libdir=lib64<br /><br />That option works fine. Doing --with-libdir=/usr/lib64 doesn't work because the configure script prepends the --prefix option before the --with-libdir option. So, doing --with-libdir=/usr/lib64 makes the configure script to look for libs in /usr/usr/lib64, which is wrong of course, and not in /usr/lib64.</span></code></div>
  </div>
 </div>
  <div class="note" id="115676">  <div class="votes">
    <div id="Vu115676">
    <a href="/manual/vote-note.php?id=115676&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115676">
    <a href="/manual/vote-note.php?id=115676&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115676" title="50% like this...">
    3
    </div>
  </div>
  <a href="#115676" class="name">
  <strong class="user"><em>james dot a dot munsch at gmail dot com</em></strong></a><a class="genanchor" href="#115676"> &para;</a><div class="date" title="2014-09-05 10:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115676">
<div class="phpcode"><code><span class="html">sudo apt-get install php5-gd &amp;&amp; sudo service apache2 restart<br /><br />To install under Ubuntu 14.04.</span></code></div>
  </div>
 </div>
  <div class="note" id="104571">  <div class="votes">
    <div id="Vu104571">
    <a href="/manual/vote-note.php?id=104571&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104571">
    <a href="/manual/vote-note.php?id=104571&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104571" title="52% like this...">
    2
    </div>
  </div>
  <a href="#104571" class="name">
  <strong class="user"><em>Joseph Marlin</em></strong></a><a class="genanchor" href="#104571"> &para;</a><div class="date" title="2011-06-23 06:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104571">
<div class="phpcode"><code><span class="html">I also had to install the libgd package in addition to php5-gd:<br /><br />sudo apt-get install libgd2-xpm-dev*</span></code></div>
  </div>
 </div>
  <div class="note" id="123243">  <div class="votes">
    <div id="Vu123243">
    <a href="/manual/vote-note.php?id=123243&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123243">
    <a href="/manual/vote-note.php?id=123243&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123243" title="50% like this...">
    1
    </div>
  </div>
  <a href="#123243" class="name">
  <strong class="user"><em>fabrizzio at webtux dot cl</em></strong></a><a class="genanchor" href="#123243"> &para;</a><div class="date" title="2018-10-19 11:22"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123243">
<div class="phpcode"><code><span class="html">php --version if result is 7.2 version<br /><br />sudo apt-get install php7.2-gd</span></code></div>
  </div>
 </div>
  <div class="note" id="102971">  <div class="votes">
    <div id="Vu102971">
    <a href="/manual/vote-note.php?id=102971&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102971">
    <a href="/manual/vote-note.php?id=102971&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102971" title="51% like this...">
    1
    </div>
  </div>
  <a href="#102971" class="name">
  <strong class="user"><em>boly38 at gmail dot com</em></strong></a><a class="genanchor" href="#102971"> &para;</a><div class="date" title="2011-03-17 05:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102971">
<div class="phpcode"><code><span class="html">To get GD bundled under Ubuntu, the way to recompile php5 with gd is described here (french) <a href="http://doc.ubuntu-fr.org/modules_php#php5-gd" rel="nofollow" target="_blank">http://doc.ubuntu-fr.org/modules_php#php5-gd</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123701">  <div class="votes">
    <div id="Vu123701">
    <a href="/manual/vote-note.php?id=123701&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123701">
    <a href="/manual/vote-note.php?id=123701&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123701" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123701" class="name">
  <strong class="user"><em>abdulbasitsaeed</em></strong></a><a class="genanchor" href="#123701"> &para;</a><div class="date" title="2019-03-19 04:28"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123701">
<div class="phpcode"><code><span class="html">To install PHP GD extension on an Amazon Linux AMI server, with php 7:<br /><br />sudo yum install php 70-gd<br /><br />Do remember to restart Apache after the installation!<br /><br />sudo service httpd restart</span></code></div>
  </div>
 </div>
  <div class="note" id="119079">  <div class="votes">
    <div id="Vu119079">
    <a href="/manual/vote-note.php?id=119079&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119079">
    <a href="/manual/vote-note.php?id=119079&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119079" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119079" class="name">
  <strong class="user"><em>Mike K</em></strong></a><a class="genanchor" href="#119079"> &para;</a><div class="date" title="2016-03-30 07:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119079">
<div class="phpcode"><code><span class="html">On Ubuntu I was missing the libpng-dev, libjpeg-dev (and in my case) libwebp-dev libraries, all gettable with apt-get.<br /><br />Also once those libraries are installed, including --with-png-dir --with-jpeg-dir --with-webp-dir, without any values (i.e. =/dir) appeared to be valid ... though admittedly I didn't try without (in case the configure script autodetected them).</span></code></div>
  </div>
 </div>
  <div class="note" id="115989">  <div class="votes">
    <div id="Vu115989">
    <a href="/manual/vote-note.php?id=115989&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115989">
    <a href="/manual/vote-note.php?id=115989&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115989" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115989" class="name">
  <strong class="user"><em>leyluj21 at gmail dot com</em></strong></a><a class="genanchor" href="#115989"> &para;</a><div class="date" title="2014-10-23 09:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115989">
<div class="phpcode"><code><span class="html">If you are using PHPBREW , the extension is called gd.<br />So you do.<br />```<br />phpbrew ext install gd<br />```<br /><br />It will compile the extension to the core.</span></code></div>
  </div>
 </div>
  <div class="note" id="124849">  <div class="votes">
    <div id="Vu124849">
    <a href="/manual/vote-note.php?id=124849&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124849">
    <a href="/manual/vote-note.php?id=124849&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124849" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#124849" class="name">
  <strong class="user"><em>tecknovice at gmail dot com</em></strong></a><a class="genanchor" href="#124849"> &para;</a><div class="date" title="2020-03-24 08:36"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124849">
<div class="phpcode"><code><span class="html">currently is php7.2-gd<br /><br />sudo apt install php7.2-gd</span></code></div>
  </div>
 </div>
  <div class="note" id="125850">  <div class="votes">
    <div id="Vu125850">
    <a href="/manual/vote-note.php?id=125850&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125850">
    <a href="/manual/vote-note.php?id=125850&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125850" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#125850" class="name">
  <strong class="user"><em>Parmjit Singh</em></strong></a><a class="genanchor" href="#125850"> &para;</a><div class="date" title="2021-02-22 01:48"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125850">
<div class="phpcode"><code><span class="html">Installation on Pop-os No need for php5 or php7.0 etc:<br /><br />sudo apt install php-gd</span></code></div>
  </div>
 </div>
  <div class="note" id="128628">  <div class="votes">
    <div id="Vu128628">
    <a href="/manual/vote-note.php?id=128628&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128628">
    <a href="/manual/vote-note.php?id=128628&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128628" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#128628" class="name">
  <strong class="user"><em>oskari at cellarcode dot com</em></strong></a><a class="genanchor" href="#128628"> &para;</a><div class="date" title="2023-06-21 02:54"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128628">
<div class="phpcode"><code><span class="html">Note if you have php-fpm installed, you have to restart the service for the installation to show up in phpinfo output...<br /><br />systemctl restart php-fpm (or equivalent)</span></code></div>
  </div>
 </div>
  <div class="note" id="122384">  <div class="votes">
    <div id="Vu122384">
    <a href="/manual/vote-note.php?id=122384&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122384">
    <a href="/manual/vote-note.php?id=122384&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122384" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#122384" class="name">
  <strong class="user"><em>remalsha at gmail dot com</em></strong></a><a class="genanchor" href="#122384"> &para;</a><div class="date" title="2018-02-13 07:22"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122384">
<div class="phpcode"><code><span class="html">On AntergosOS ( Arch linux ) <br /><br />*first run &gt;&gt;php -v   and get current php version. In my case for PHP 7.1.14<br /><br />      sudo pacman -S php71-gd   <br /><br />then restart you apache server using,<br />     <br />      sudo systemctl restart httpd</span></code></div>
  </div>
 </div>
  <div class="note" id="103507">  <div class="votes">
    <div id="Vu103507">
    <a href="/manual/vote-note.php?id=103507&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103507">
    <a href="/manual/vote-note.php?id=103507&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103507" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#103507" class="name">
  <strong class="user"><em>octopus at logicaloctopus dot com</em></strong></a><a class="genanchor" href="#103507"> &para;</a><div class="date" title="2011-04-17 12:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103507">
<div class="phpcode"><code><span class="html">I was running PHP on a SUSE box on amazon EC2.<br />to get gd to work all I had to do was to run:<br />&gt; yast -i php5_gd<br /><br />and when that completed I just restarted apache. voila!</span></code></div>
  </div>
 </div>
  <div class="note" id="99856">  <div class="votes">
    <div id="Vu99856">
    <a href="/manual/vote-note.php?id=99856&amp;page=image.installation&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99856">
    <a href="/manual/vote-note.php?id=99856&amp;page=image.installation&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99856" title="47% like this...">
    -4
    </div>
  </div>
  <a href="#99856" class="name">
  <strong class="user"><em>elassoto at hotmail dot com</em></strong></a><a class="genanchor" href="#99856"> &para;</a><div class="date" title="2010-09-10 01:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99856">
<div class="phpcode"><code><span class="html">If you have already compiled PHP and want to recompile '--with-gd', don't forget to run 'make clean' first!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=image.installation&amp;repo=en&amp;redirect=https://www.php.net/manual/en/image.installation.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="image.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="image.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="image.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="image.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="image.resources.php" title="Resource Types">Resource Types</a>
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
