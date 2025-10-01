<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: php:// - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/wrappers.php.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/wrappers.php.php">
 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.php.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/wrappers.php">
 <link rel="prev" href="https://www.php.net/manual/en/wrappers.ftp.php">
 <link rel="next" href="https://www.php.net/manual/en/wrappers.compression.php">

 <link rel="alternate" href="https://www.php.net/manual/en/wrappers.php.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/wrappers.php.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/wrappers.php.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/wrappers.php.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/wrappers.php.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/wrappers.php.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/wrappers.php.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/wrappers.php.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/wrappers.php.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/wrappers.php.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/wrappers.php.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Accessing various I/O streams" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: php:// - Manual" />
<meta name="twitter:description" content="Accessing various I/O streams" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: php:// - Manual" />
<meta itemprop="description" content="Accessing various I/O streams" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Accessing various I/O streams" />

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
        <a href="wrappers.compression.php">
          zlib:// &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="wrappers.ftp.php">
          &laquo; ftp://        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='wrappers.php'>Supported Protocols and Wrappers</a></li>      </ul>
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
            <option value='en/wrappers.php.php' selected="selected">English</option>
            <option value='de/wrappers.php.php'>German</option>
            <option value='es/wrappers.php.php'>Spanish</option>
            <option value='fr/wrappers.php.php'>French</option>
            <option value='it/wrappers.php.php'>Italian</option>
            <option value='ja/wrappers.php.php'>Japanese</option>
            <option value='pt_BR/wrappers.php.php'>Brazilian Portuguese</option>
            <option value='ru/wrappers.php.php'>Russian</option>
            <option value='tr/wrappers.php.php'>Turkish</option>
            <option value='uk/wrappers.php.php'>Ukrainian</option>
            <option value='zh/wrappers.php.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="wrappers.php" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">php://</h1>
  <p class="refpurpose"><span class="refname">php://</span> &mdash; <span class="dc-title">Accessing various I/O streams</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-wrappers.php-description">
  <h3 class="title">Description</h3>
  <p class="para">
   PHP provides a number of miscellaneous I/O streams that allow access to
   PHP&#039;s own input and output streams, the standard input, output and error
   file descriptors, in-memory and disk-backed temporary file streams, and
   filters that can manipulate other file resources as they are read from and
   written to.
  </p>

  <div class="refsect2 unknown-1" id="wrappers.php.std">
   <h4 class="title">php://stdin, php://stdout and php://stderr</h4>
   <p class="simpara">
    <var class="filename">php://stdin</var>, <var class="filename">php://stdout</var> and
    <var class="filename">php://stderr</var> allow direct access to the corresponding
    input or output stream of the PHP process.  The stream references a
    duplicate file descriptor, so if you open <var class="filename">php://stdin</var>
    and later close it, you close only your copy of the descriptor-the actual
    stream referenced by <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong> is unaffected.
    It is
    recommended that you simply use the constants <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong>,
    <strong><code><a href="reserved.constants.php#constant.stdout">STDOUT</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.stderr">STDERR</a></code></strong> instead of
    manually opening streams using these wrappers.
   </p>
   <p class="simpara">
    <var class="filename">php://stdin</var> is read-only, whereas
    <var class="filename">php://stdout</var> and <var class="filename">php://stderr</var> are
    write-only.
   </p>
  </div>


  <div class="refsect2 unknown-4" id="wrappers.php.input">
   <h4 class="title">php://input</h4>
   <p class="simpara">
    <var class="filename">php://input</var> is a read-only stream that allows you to
    read raw data from the request body.
    <var class="filename">php://input</var> is not available in POST requests with
    <code class="literal">enctype=&quot;multipart/form-data&quot;</code> if
    <a href="ini.core.php#ini.enable-post-data-reading" class="link">enable_post_data_reading</a>
    option is enabled.
   </p>
  </div>


  <div class="refsect2 unknown-7" id="wrappers.php.output">
   <h4 class="title">php://output</h4>
   <p class="para">
    <var class="filename">php://output</var> is a write-only stream that allows you to
    write to the output buffer mechanism in the same way as
    <span class="function"><a href="function.print.php" class="function">print</a></span> and <span class="function"><a href="function.echo.php" class="function">echo</a></span>.
   </p>
  </div>


  <div class="refsect2 unknown-10" id="wrappers.php.fd">
   <h4 class="title">php://fd</h4>
   <p class="simpara">
    <var class="filename">php://fd</var> allows direct access to the given file
    descriptor. For example, <var class="filename">php://fd/3</var> refers to file
    descriptor 3.
   </p>
  </div>


  <div class="refsect2 unknown-13" id="wrappers.php.memory">
   <h4 class="title">php://memory and php://temp</h4>
   <p class="simpara">
    <var class="filename">php://memory</var> and <var class="filename">php://temp</var> are
    read-write streams that allow temporary data to be stored in a file-like
    wrapper. One difference between the two is that
    <var class="filename">php://memory</var> will always store its data in memory,
    whereas <var class="filename">php://temp</var> will use a temporary file once the
    amount of data stored hits a predefined limit (the default is 2 MB). The
    location of this temporary file is determined in the same way as the
    <span class="function"><a href="function.sys-get-temp-dir.php" class="function">sys_get_temp_dir()</a></span> function.
   </p>
   <p class="simpara">
    The memory limit of <var class="filename">php://temp</var> can be controlled by
    appending <code class="literal">/maxmemory:NN</code>, where <code class="literal">NN</code> is
    the maximum amount of data to keep in memory before using a temporary
    file, in bytes.
   </p>
   <div class="caution"><strong class="caution">Caution</strong>
    <p class="simpara">
     Some PHP extensions may require a standard IO stream,
     and may attempt to cast a given stream to a standard IO stream.
     This cast can fail for memory streams as it requires the C
     <span class="function"><strong>fopencookie()</strong></span> function to be available.
     This C function is <em>not</em> available on Windows.
    </p>
   </div>
  </div>


  <div class="refsect2 unknown-16" id="wrappers.php.filter">
   <h4 class="title">php://filter</h4>
   <p class="simpara">
    <var class="filename">php://filter</var> is a kind of meta-wrapper designed to
    permit the application of <a href="filters.php" class="link">filters</a> to a
    stream at the time of opening.  This is useful with all-in-one file
    functions such as <span class="function"><a href="function.readfile.php" class="function">readfile()</a></span>,
    <span class="function"><a href="function.file.php" class="function">file()</a></span>, and <span class="function"><a href="function.file-get-contents.php" class="function">file_get_contents()</a></span>
    where there is otherwise no opportunity to apply a filter to the stream
    prior the contents being read.
   </p>
   <p class="para">
    The <var class="filename">php://filter</var> target takes the following parameters
    as part of its path. Multiple filter chains can be specified on one path.
    Please refer to the examples for specifics on using these parameters.
   </p>
   <p class="para">
    <table class="doctable table">
     <caption><strong>php://filter parameters</strong></caption>
     
      <thead>
       <tr>
        <th>Name</th>
        <th>Description</th>
       </tr>

      </thead>

      <tbody class="tbody">
       <tr>
        <td>
         <code class="literal">resource=&lt;stream to be filtered&gt;</code>
        </td>
        <td>
         This parameter is required. It specifies the stream that you would
         like to filter.
        </td>
       </tr>

       <tr>
        <td>
         <code class="literal">read=&lt;filter list to apply to read chain&gt;</code>
        </td>
        <td>
         This parameter is optional. One or more filter names can be provided
         here, separated by the pipe character (<code class="literal">|</code>).
        </td>
       </tr>

       <tr>
        <td>
         <code class="literal">write=&lt;filter list to apply to write chain&gt;</code>
        </td>
        <td>
         This parameter is optional. One or more filter names can be provided
         here, separated by the pipe character (<code class="literal">|</code>).
        </td>
       </tr>

       <tr>
        <td>
         <code class="literal">&lt;filter list to apply to both chains&gt;</code>
        </td>
        <td>
         Any filter lists which are not prefixed by <code class="literal">read=</code>
         or <code class="literal">write=</code> will be applied to both the read and
         write chains as appropriate.
        </td>
       </tr>

      </tbody>
     
    </table>

   </p>
  </div>

 </div>


 <div class="refsect1 options" id="refsect1-wrappers.php-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <table class="doctable table">
    <caption><strong>
     Wrapper Summary (for <code class="literal">php://filter</code>, refer to the
     summary of the wrapper being filtered)
    </strong></caption>
    
     <thead>
      <tr>
       <th>Attribute</th>
       <th>Supported</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>Restricted by <a href="filesystem.configuration.php#ini.allow-url-fopen" class="link">allow_url_fopen</a></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Restricted by <a href="filesystem.configuration.php#ini.allow-url-include" class="link">allow_url_include</a></td>
       <td>
        <code class="literal">php://input</code>,
        <code class="literal">php://stdin</code>,
        <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> only.
       </td>
      </tr>

      <tr>
       <td>Allows Reading</td>
       <td>
        <code class="literal">php://stdin</code>,
        <code class="literal">php://input</code>,
        <code class="literal">php://fd</code>,
        <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> only.
       </td>
      </tr>

      <tr>
       <td>Allows Writing</td>
       <td>
        <code class="literal">php://stdout</code>,
        <code class="literal">php://stderr</code>,
        <code class="literal">php://output</code>,
        <code class="literal">php://fd</code>,
        <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> only.
       </td>
      </tr>

      <tr>
       <td>Allows Appending</td>
       <td>
        <code class="literal">php://stdout</code>,
        <code class="literal">php://stderr</code>,
        <code class="literal">php://output</code>,
        <code class="literal">php://fd</code>,
        <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> only. (Equivalent to writing)
       </td>
      </tr>

      <tr>
       <td>Allows Simultaneous Reading and Writing</td>
       <td>
        <code class="literal">php://fd</code>,
        <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> only.
       </td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.stat.php" class="function">stat()</a></span></td>
       <td>
        No.  However, <code class="literal">php://memory</code> and
        <code class="literal">php://temp</code> support <span class="function"><a href="function.fstat.php" class="function">fstat()</a></span>.
       </td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.unlink.php" class="function">unlink()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rename.php" class="function">rename()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.mkdir.php" class="function">mkdir()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.rmdir.php" class="function">rmdir()</a></span></td>
       <td>No</td>
      </tr>

      <tr>
       <td>Supports <span class="function"><a href="function.stream-select.php" class="function">stream_select()</a></span></td>
       <td>
        <code class="literal">php://stdin</code>,
        <code class="literal">php://stdout</code>,
        <code class="literal">php://stderr</code>,
        <code class="literal">php://fd</code> and
        <code class="literal">php://temp</code> only.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>
 

 <div class="refsect1 examples" id="refsect1-wrappers.php-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-500">
   <p><strong>Example #1 php://temp/maxmemory</strong></p>
   <div class="example-contents"><p>
    This optional parameter allows setting the memory limit before
    <var class="filename">php://temp</var> starts using a temporary file.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Set the limit to 5 MB.<br /></span><span style="color: #0000BB">$fiveMBs </span><span style="color: #007700">= </span><span style="color: #0000BB">5 </span><span style="color: #007700">* </span><span style="color: #0000BB">1024 </span><span style="color: #007700">* </span><span style="color: #0000BB">1024</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://temp/maxmemory:</span><span style="color: #0000BB">$fiveMBs</span><span style="color: #DD0000">"</span><span style="color: #007700">, </span><span style="color: #DD0000">'r+'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">fputs</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #DD0000">"hello\n"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Read what we have written.<br /></span><span style="color: #0000BB">rewind</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-501">
   <p><strong>Example #2 php://filter/resource=&lt;stream to be filtered&gt;</strong></p>
   <div class="example-contents"><p>
    This parameter must be located at
    the end of your <var class="filename">php://filter</var> specification and
    should point to the stream which you want filtered.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* This is equivalent to simply:<br />  readfile("http://www.example.com");<br />  since no filters are actually specified */<br /><br /></span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://filter/resource=http://www.example.com"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-502">
   <p><strong>Example #3 php://filter/read=&lt;filter list to apply to read chain&gt;</strong></p>
   <div class="example-contents"><p>
    This parameter takes one or more
    filternames separated by the pipe character <code class="literal">|</code>.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* This will output the contents of<br />  www.example.com entirely in uppercase */<br /></span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://filter/read=string.toupper/resource=http://www.example.com"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* This will do the same as above<br />  but will also ROT13 encode it */<br /></span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://filter/read=string.toupper|string.rot13/resource=http://www.example.com"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-503">
   <p><strong>Example #4 php://filter/write=&lt;filter list to apply to write chain&gt;</strong></p>
   <div class="example-contents"><p>
    This parameter takes one or more
    filternames separated by the pipe character <code class="literal">|</code>.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* This will filter the string "Hello World"<br />  through the rot13 filter, then write to<br />  example.txt in the current directory */<br /></span><span style="color: #0000BB">file_put_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://filter/write=string.rot13/resource=example.txt"</span><span style="color: #007700">,</span><span style="color: #DD0000">"Hello World"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-504">
   <p><strong>Example #5 php://memory and php://temp are not reusable</strong></p>
   <div class="example-contents"><p>
    <var class="filename">php://memory</var> and <var class="filename">php://temp</var>
    are not reusable, i.e. after the streams have been closed there is no way
    to refer to them again.
   </p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />file_put_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://memory'</span><span style="color: #007700">, </span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'php://memory'</span><span style="color: #007700">); </span><span style="color: #FF8000">// prints nothing</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/language/wrappers/php.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fwrappers.php%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=wrappers.php&amp;repo=en&amp;redirect=https://www.php.net/manual/en/wrappers.php.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="wrappers.php">Supported Protocols and Wrappers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="wrappers.file.php" title="file://">file://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.http.php" title="http://">http://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.ftp.php" title="ftp://">ftp://</a>
                        </li>
                                                <li class="current">
                            <a href="wrappers.php.php" title="php://">php://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.compression.php" title="zlib://">zlib://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.data.php" title="data://">data://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.glob.php" title="glob://">glob://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.phar.php" title="phar://">phar://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.ssh2.php" title="ssh2://">ssh2://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.rar.php" title="rar://">rar://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.audio.php" title="ogg://">ogg://</a>
                        </li>
                                                <li class="">
                            <a href="wrappers.expect.php" title="expect://">expect://</a>
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
