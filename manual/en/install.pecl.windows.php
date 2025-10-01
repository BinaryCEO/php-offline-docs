<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Installing a PHP extension on Windows - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/install.pecl.windows.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/install.pecl.windows.php">
 <link rel="alternate" href="https://www.php.net/manual/en/install.pecl.windows.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/install.pecl.php">
 <link rel="prev" href="https://www.php.net/manual/en/install.pecl.downloads.php">
 <link rel="next" href="https://www.php.net/manual/en/install.pecl.pear.php">

 <link rel="alternate" href="https://www.php.net/manual/en/install.pecl.windows.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/install.pecl.windows.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/install.pecl.windows.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/install.pecl.windows.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/install.pecl.windows.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/install.pecl.windows.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/install.pecl.windows.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/install.pecl.windows.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/install.pecl.windows.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/install.pecl.windows.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/install.pecl.windows.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installing a PHP extension on Windows" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Installing a PHP extension on Windows - Manual" />
<meta name="twitter:description" content="Installing a PHP extension on Windows" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Installing a PHP extension on Windows - Manual" />
<meta itemprop="description" content="Installing a PHP extension on Windows" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installing a PHP extension on Windows" />

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
        <a href="install.pecl.pear.php">
          Compiling shared PECL extensions with the pecl command &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="install.pecl.downloads.php">
          &laquo; Downloading PECL extensions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='install.php'>Installation and Configuration</a></li>      <li><a href='install.pecl.php'>Installation of PECL extensions</a></li>      </ul>
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
            <option value='en/install.pecl.windows.php' selected="selected">English</option>
            <option value='de/install.pecl.windows.php'>German</option>
            <option value='es/install.pecl.windows.php'>Spanish</option>
            <option value='fr/install.pecl.windows.php'>French</option>
            <option value='it/install.pecl.windows.php'>Italian</option>
            <option value='ja/install.pecl.windows.php'>Japanese</option>
            <option value='pt_BR/install.pecl.windows.php'>Brazilian Portuguese</option>
            <option value='ru/install.pecl.windows.php'>Russian</option>
            <option value='tr/install.pecl.windows.php'>Turkish</option>
            <option value='uk/install.pecl.windows.php'>Ukrainian</option>
            <option value='zh/install.pecl.windows.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="install.pecl.windows" class="sect1">
  <h2 class="title">Installing a PHP extension on Windows</h2>
  <p class="para">
   There are two ways to load a PHP extension on Windows: either compile it into
   PHP, or load the DLL.
   Loading a pre-compiled extension is the easiest and preferred way.
  </p>
  <p class="para">
   To load an extension, it has to be available as a
   <var class="filename">.dll</var>
   file on the system.
   All the extensions are automatically and periodically compiled by the PHP
   Group (see next section for the download).
  </p>
  <p class="para">
   To compile an extension into PHP, please refer to the
   <a href="install.windows.building.php" class="link">building from source</a>
   documentation.
  </p>
  <p class="para">
   To compile a standalone extension (aka a DLL file), please refer to the
   <a href="install.windows.building.php" class="link">building from source</a>
   documentation.
   If the DLL file is available neither with the PHP distribution nor in PECL,
   it may be necessary to compile it before the extension can be used.
  </p>
  <div class="sect2" id="install.pecl.windows.find">
   <h3 class="title">Where to find an extension?</h3>
   <p class="para">
    PHP extensions are usually called <var class="filename">php_*.dll</var> (where the
    star represents the name of the extension), and they are located under the
    <var class="filename">PHP\ext</var>
    folder.
   </p>
   <p class="para">
    PHP ships with the extensions most useful to the majority of developers.
    They are called <em>bundled</em> extensions.
   </p>
   <p class="para">
    However, if the bundled extensions do not provide the needed functionality,
    one extension that does may still be found in <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a>.
    The PHP Extension Community Library (PECL) is a repository for PHP
    Extensions, providing a directory of all known extensions and hosting
    facilities for downloading and developing PHP extensions.
   </p>
   <p class="para">
    If an extension has been developed for particular uses, it may be hosted on
    PECL so that others with the same needs can benefit from it.
    A nice side effect is that it&#039;s a good chance to receive feedback,
    (hopefully) thanks, bug reports and even fixes/patches.
    Before submitting an extension for hosting on PECL, please read
    <a href="https://pecl.php.net/package-new.php" class="link external">&raquo;&nbsp;PECL submit</a>.
   </p>
  </div>

  <div class="sect2" id="install.pecl.windows.which">
   <h3 class="title">Which extension to download?</h3>
   <p class="para">
    <em>
     Many times, there will be several versions of each DLL available:
    </em>
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       Different version numbers (at least the first two numbers should match)
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Different thread safety settings
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Different processor architecture (x86, x64, ...)
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       Different debugging settings
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <code class="literal">etc.</code>
      </span>
     </li>
    </ul>
   </p>
   <p class="para">
    Keep in mind that the extension settings should match all the settings of
    the PHP executable being used.
    The following PHP script will tell <em>all</em> about the PHP
    settings:
   </p>
   <p class="para">
    <div class="example" id="example-30">
     <p><strong>Example #1 
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>
      call
     </strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />phpinfo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="para">
    Or from the command line, run:
    <div class="example-contents screen">
<div class="cdata"><pre>
drive:\path\to\php\executable\php.exe -i
</pre></div>
    </div>
   </p>
  </div>

  <div class="sect2" id="install.pecl.windows.loading">
   <h3 class="title">Loading an extension</h3>
   <p class="para">
    The most common way to load a PHP extension is to include it in
    the <var class="filename">php.ini</var> configuration file.
    Please note that many extensions are already present in the <var class="filename">php.ini</var> and
    that the semicolon only needs to be removed to activate them.
   </p>
   <p class="para">
    Note that, as of PHP 7.2.0, the extension name may be used
    instead of the extension&#039;s file name.
    As this is OS-independent and easier, especially for newcomers, it becomes
    the recommended way of specifying extensions to load.
    File names remain supported for compatibility with prior versions.
   </p>
   <div class="example-contents screen">
<div class="cdata"><pre>
;extension=php_extname.dll
</pre></div>
   </div>
   <div class="example-contents screen">
<div class="cdata"><pre>
extension=php_extname.dll
</pre></div>
   </div>
   <div class="example-contents screen">
<div class="cdata"><pre>
; As of PHP 7.2.0, prefer:
extension=extname
zend_extension=another_extension
</pre></div>
   </div>
   <p class="para">
    However, some web servers are confusing because they do not use
    the <var class="filename">php.ini</var> located alongside the PHP executable.
    To find out where the actual <var class="filename">php.ini</var> resides, look for its path
    in <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>:
   </p>
   <div class="example-contents screen">
<div class="cdata"><pre>
Configuration File (php.ini) Path  C:\WINDOWS
</pre></div>
   </div>
   <div class="example-contents screen">
<div class="cdata"><pre>
Loaded Configuration File   C:\Program Files\PHP\8.2\php.ini
</pre></div>
   </div>
   <p class="para">
    After activating an extension, save <var class="filename">php.ini</var>, restart the web server, and
    check <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> again.
    The new extension should now have its own section.
   </p>
  </div>

  <div class="sect2" id="install.pecl.windows.problemsolving">
   <h3 class="title">Resolving problems</h3>
   <p class="para">
    If the extension does not appear in <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span>,
    the logs should be checked to learn where the problem comes from.
   </p>
   <p class="para">
    If PHP is being used from the command line (CLI), the extension loading
    error can be read directly on the screen.
   </p>
   <p class="para">
    If PHP is being used with a web server, the location and format of the logs
    vary depending on the software.
    Please read the web server documentation to locate the logs, as it has
    nothing to do with PHP itself.
   </p>
   <p class="para">
    Common problems are the location of the DLL and the DLLs it depends on, the
    value of the &quot;<a href="ini.core.php#ini.extension-dir" class="link">extension_dir</a>&quot;
    setting inside <var class="filename">php.ini</var> and compile-time setting mismatches.
   </p>
   <p class="para">
    If the problem lies in a compile-time setting mismatch, probably the DLL
    downloaded is not the right one.
    Try downloading the extension again with the proper settings.
    Again, <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> can be of great help.
   </p>
  </div>

 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/install/pecl.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Finstall.pecl.windows%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=install.pecl.windows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.pecl.windows.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129124">  <div class="votes">
    <div id="Vu129124">
    <a href="/manual/vote-note.php?id=129124&amp;page=install.pecl.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129124">
    <a href="/manual/vote-note.php?id=129124&amp;page=install.pecl.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129124" title="58% like this...">
    4
    </div>
  </div>
  <a href="#129124" class="name">
  <strong class="user"><em>j dot o dot l dot a dot n at bk dot ru</em></strong></a><a class="genanchor" href="#129124"> &para;</a><div class="date" title="2023-12-24 01:43"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129124">
<div class="phpcode"><code><span class="html">In order for php to see extensions, it is necessary to specify the root folder when specifying the address to the directory with extensions in php.ini. For example extension_dir = "php/ext"</span></code></div>
  </div>
 </div>
  <div class="note" id="128103">  <div class="votes">
    <div id="Vu128103">
    <a href="/manual/vote-note.php?id=128103&amp;page=install.pecl.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128103">
    <a href="/manual/vote-note.php?id=128103&amp;page=install.pecl.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128103" title="58% like this...">
    3
    </div>
  </div>
  <a href="#128103" class="name">
  <strong class="user"><em>dario at 4assistance dot com</em></strong></a><a class="genanchor" href="#128103"> &para;</a><div class="date" title="2023-01-09 10:57"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128103">
<div class="phpcode"><code><span class="html">On windows, drop your extension's dependencies into a dir of your choice, but outside of your php install. Add that dir to a path environment variable used by your php. Add &lt;extension_name&gt;.dll to your php's extension_dir, and update your php.ini (unless you're simply testing with php's cli).</span></code></div>
  </div>
 </div>
  <div class="note" id="128153">  <div class="votes">
    <div id="Vu128153">
    <a href="/manual/vote-note.php?id=128153&amp;page=install.pecl.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128153">
    <a href="/manual/vote-note.php?id=128153&amp;page=install.pecl.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128153" title="52% like this...">
    1
    </div>
  </div>
  <a href="#128153" class="name">
  <strong class="user"><em>bk at kaelberer-aio dot de</em></strong></a><a class="genanchor" href="#128153"> &para;</a><div class="date" title="2023-01-26 06:28"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128153">
<div class="phpcode"><code><span class="html">In addition to the helpful comments of ferdnyc and dario: A few weeks ago I've set up a new W11 using PHP 8.1. (as a module) with Apache. It was working fine.<br />Today i wanted to install the PECL-extension php-amqp. This extension comes with two additional files that are said to be placed in PHPs main directory. It worked fine running from the command prompt but with Apache the extension failed with "Unable to load dynamic library 'amqp'".<br />I tried 100 ways to notate paths in php.ini and http.conf: c:, C:, \, \\, /, ". I also installed a new PHP in the root to get rid of the space in the path. It did not help.<br />When reading dario's comment i stumbeled across him mentioning "path environment variable". I checked that in Window's settings and I realized, that i had added PHP's path to the USER'S path-settings, but not to the SYSTEM'S path. That is why it worked in the command prompt but not when starting Apache as a service. After adding it there it worked fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="127567">  <div class="votes">
    <div id="Vu127567">
    <a href="/manual/vote-note.php?id=127567&amp;page=install.pecl.windows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127567">
    <a href="/manual/vote-note.php?id=127567&amp;page=install.pecl.windows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127567" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#127567" class="name">
  <strong class="user"><em>ferdnyc at gmail dot com</em></strong></a><a class="genanchor" href="#127567"> &para;</a><div class="date" title="2022-09-03 12:15"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127567">
<div class="phpcode"><code><span class="html">This is handwaved somewhat in the "Resolving problems" section, but mis-location of (non-extension) DLL files is often a problem when installing PHP extensions on Windows.<br /><br />Many PHP extensions come with not only the extension DLL, but supplementary DLLs that are required by that extension. (For example, php_luasandbox.dll comes with lua5.1.dll, the lua interpreter it sandboxes.) Those other DLLs should go into the same directory as the php.exe binary, NOT the extension directory.<br /><br />So, if php_luasandbox.dll is installed at C:\PHP8.1\ext\php_luasandbox.dll, the interpreter would be located at C:\PHP8.1\lua5.1.dll. That allows the PHP binary C:\PHP8.1\php.exe to find those additional DLLs when required.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=install.pecl.windows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/install.pecl.windows.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="install.pecl.php">Installation of PECL extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="install.pecl.intro.php" title="Introduction to PECL Installations">Introduction to PECL Installations</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.downloads.php" title="Downloading PECL extensions">Downloading PECL extensions</a>
                        </li>
                                                <li class="current">
                            <a href="install.pecl.windows.php" title="Installing a PHP extension on Windows">Installing a PHP extension on Windows</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.pear.php" title="Compiling shared PECL extensions with the pecl command">Compiling shared PECL extensions with the pecl command</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.phpize.php" title="Compiling shared PECL extensions with phpize">Compiling shared PECL extensions with phpize</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.php-config.php" title="php-&#8203;config">php-&#8203;config</a>
                        </li>
                                                <li class="">
                            <a href="install.pecl.static.php" title="Compiling PECL extensions statically into PHP">Compiling PECL extensions statically into PHP</a>
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
