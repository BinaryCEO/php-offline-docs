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

 <link rel="canonical" href="https://www.php.net/manual/en/filesystem.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/filesystem.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/filesystem.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.filesystem.php">
 <link rel="prev" href="https://www.php.net/manual/en/filesystem.resources.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.filesystem.php">

 <link rel="alternate" href="https://www.php.net/manual/en/filesystem.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/filesystem.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/filesystem.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/filesystem.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/filesystem.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/filesystem.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/filesystem.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/filesystem.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/filesystem.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/filesystem.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/filesystem.constants.php" hreflang="zh">

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
        <a href="ref.filesystem.php">
          Filesystem Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="filesystem.resources.php">
          &laquo; Resource Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.file.php'>File System Related Extensions</a></li>      <li><a href='book.filesystem.php'>Filesystem</a></li>      </ul>
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
            <option value='en/filesystem.constants.php' selected="selected">English</option>
            <option value='de/filesystem.constants.php'>German</option>
            <option value='es/filesystem.constants.php'>Spanish</option>
            <option value='fr/filesystem.constants.php'>French</option>
            <option value='it/filesystem.constants.php'>Italian</option>
            <option value='ja/filesystem.constants.php'>Japanese</option>
            <option value='pt_BR/filesystem.constants.php'>Brazilian Portuguese</option>
            <option value='ru/filesystem.constants.php'>Russian</option>
            <option value='tr/filesystem.constants.php'>Turkish</option>
            <option value='uk/filesystem.constants.php'>Ukrainian</option>
            <option value='zh/filesystem.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="filesystem.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
 <dl>
  
   <dt id="constant.seek-set">
    <strong><code><a href="filesystem.constants.php#constant.seek-set">SEEK_SET</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.seek-cur">
    <strong><code><a href="filesystem.constants.php#constant.seek-cur">SEEK_CUR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.seek-end">
    <strong><code><a href="filesystem.constants.php#constant.seek-end">SEEK_END</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.lock-sh">
    <strong><code><a href="filesystem.constants.php#constant.lock-sh">LOCK_SH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.lock-ex">
    <strong><code><a href="filesystem.constants.php#constant.lock-ex">LOCK_EX</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.lock-un">
    <strong><code><a href="filesystem.constants.php#constant.lock-un">LOCK_UN</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
  
   <dt id="constant.lock-nb">
    <strong><code><a href="filesystem.constants.php#constant.lock-nb">LOCK_NB</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">

    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.file.php" class="function">file()</a></span>
  </strong>

  
   <dt id="constant.file-use-include-path">
    <strong><code><a href="filesystem.constants.php#constant.file-use-include-path">FILE_USE_INCLUDE_PATH</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Search for <code class="parameter">filename</code> in
     <a href="ini.core.php#ini.include-path" class="link">include_path</a>.
    </span>
   </dd>
  
  
   <dt id="constant.file-no-default-context">
    <strong><code><a href="filesystem.constants.php#constant.file-no-default-context">FILE_NO_DEFAULT_CONTEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
    </span>
   </dd>
  
  
   <dt id="constant.file-append">
    <strong><code><a href="filesystem.constants.php#constant.file-append">FILE_APPEND</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Append content to existing file.
    </span>
   </dd>
  
  
   <dt id="constant.file-ignore-new-lines">
    <strong><code><a href="filesystem.constants.php#constant.file-ignore-new-lines">FILE_IGNORE_NEW_LINES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Strip EOL characters.
    </span>
   </dd>
  
  
   <dt id="constant.file-skip-empty-lines">
    <strong><code><a href="filesystem.constants.php#constant.file-skip-empty-lines">FILE_SKIP_EMPTY_LINES</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Skip empty lines.
    </span>
   </dd>
  

  
   <dt id="constant.file-binary">
    <strong><code><a href="filesystem.constants.php#constant.file-binary">FILE_BINARY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Binary mode.
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       This constant has no effect, and is deprecated as of PHP 8.1.0.
      </p>
     </div>
    </p>
   </dd>
  

  
   <dt id="constant.file-text">
    <strong><code><a href="filesystem.constants.php#constant.file-text">FILE_TEXT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Text mode.
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       This constant has no effect, and is deprecated as of PHP 8.1.0.
      </p>
     </div>
    </p>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.glob.php" class="function">glob()</a></span>
  </strong>

  
   <dt id="constant.glob-available-flags">
    <strong><code><a href="filesystem.constants.php#constant.glob-available-flags">GLOB_AVAILABLE_FLAGS</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All <strong><code><a href="filesystem.constants.php#constant.glob-available-flags">GLOB_<span class="replaceable">*</span></a></code></strong> flags combined.
     Equivalent to <code class="literal">0</code> | <strong><code><a href="filesystem.constants.php#constant.glob-brace">GLOB_BRACE</a></code></strong> |
     <strong><code><a href="filesystem.constants.php#constant.glob-mark">GLOB_MARK</a></code></strong> | <strong><code><a href="filesystem.constants.php#constant.glob-nosort">GLOB_NOSORT</a></code></strong> |
     <strong><code><a href="filesystem.constants.php#constant.glob-nocheck">GLOB_NOCHECK</a></code></strong> | <strong><code><a href="filesystem.constants.php#constant.glob-noescape">GLOB_NOESCAPE</a></code></strong> |
     <strong><code><a href="filesystem.constants.php#constant.glob-err">GLOB_ERR</a></code></strong> | <strong><code><a href="filesystem.constants.php#constant.glob-onlydir">GLOB_ONLYDIR</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="constant.glob-brace">
    <strong><code><a href="filesystem.constants.php#constant.glob-brace">GLOB_BRACE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Expands {a,b,c} to match &#039;a&#039;, &#039;b&#039;, or &#039;c&#039;
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      <strong><code><a href="filesystem.constants.php#constant.glob-brace">GLOB_BRACE</a></code></strong> is not available on some non GNU systems,
      like Solaris or Alpine Linux.
     </span>
    </p></blockquote>
   </dd>
  
  
   <dt id="constant.glob-err">
    <strong><code><a href="filesystem.constants.php#constant.glob-err">GLOB_ERR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Stop on read errors (like unreadable directories),
     by default errors are ignored.
    </span>
   </dd>
  
  
   <dt id="constant.glob-mark">
    <strong><code><a href="filesystem.constants.php#constant.glob-mark">GLOB_MARK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Adds a slash (a backslash on Windows) to each directory returned
    </span>
   </dd>
  
  
   <dt id="constant.glob-nocheck">
    <strong><code><a href="filesystem.constants.php#constant.glob-nocheck">GLOB_NOCHECK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return the search pattern if no files matching it were found
    </span>
   </dd>
  
  
   <dt id="constant.glob-noescape">
    <strong><code><a href="filesystem.constants.php#constant.glob-noescape">GLOB_NOESCAPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Backslashes do not quote metacharacters
    </span>
   </dd>
  
  
   <dt id="constant.glob-nosort">
    <strong><code><a href="filesystem.constants.php#constant.glob-nosort">GLOB_NOSORT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return files as they appear in the directory (no sorting).
     When this flag is not used, the pathnames are sorted alphabetically
    </span>
   </dd>
  
  
   <dt id="constant.glob-onlydir">
    <strong><code><a href="filesystem.constants.php#constant.glob-onlydir">GLOB_ONLYDIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Return only directory entries which match the pattern
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.pathinfo.php" class="function">pathinfo()</a></span>
  </strong>
  
   <dt id="constant.pathinfo-all">
    <strong><code><a href="filesystem.constants.php#constant.pathinfo-all">PATHINFO_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     All parts of the pathinfo
     returned as an associative array.
    </span>
   </dd>
  
  
   <dt id="constant.pathinfo-dirname">
    <strong><code><a href="filesystem.constants.php#constant.pathinfo-dirname">PATHINFO_DIRNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The path of the directory or file.
    </span>
   </dd>
  
  
   <dt id="constant.pathinfo-basename">
    <strong><code><a href="filesystem.constants.php#constant.pathinfo-basename">PATHINFO_BASENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The name of the directory or
     the name and extension of the file.
    </span>
   </dd>
  
  
   <dt id="constant.pathinfo-extension">
    <strong><code><a href="filesystem.constants.php#constant.pathinfo-extension">PATHINFO_EXTENSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The extension of the file.
    </span>
   </dd>
  
  
   <dt id="constant.pathinfo-filename">
    <strong><code><a href="filesystem.constants.php#constant.pathinfo-filename">PATHINFO_FILENAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     The name of the file (without the extension)
     or directory.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">scanner_mode</code>s for
   <span class="function"><a href="function.parse-ini-file.php" class="function">parse_ini_file()</a></span> and
   <span class="function"><a href="function.parse-ini-string.php" class="function">parse_ini_string()</a></span>
  </strong>

  
   <dt id="constant.ini-scanner-normal">
    <strong><code><a href="filesystem.constants.php#constant.ini-scanner-normal">INI_SCANNER_NORMAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Normal INI scanner mode.
    </span>
   </dd>
  

  
   <dt id="constant.ini-scanner-raw">
    <strong><code><a href="filesystem.constants.php#constant.ini-scanner-raw">INI_SCANNER_RAW</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Raw INI scanner mode.
    </span>
   </dd>
  

  
   <dt id="constant.ini-scanner-typed">
    <strong><code><a href="filesystem.constants.php#constant.ini-scanner-typed">INI_SCANNER_TYPED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Typed INI scanner mode.
    </span>
   </dd>
  
 </dl>

 <dl>
  <strong class="title">
   Available <code class="parameter">flags</code> for
   <span class="function"><a href="function.fnmatch.php" class="function">fnmatch()</a></span>
  </strong>

  
   <dt id="constant.fnm-noescape">
    <strong><code><a href="filesystem.constants.php#constant.fnm-noescape">FNM_NOESCAPE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Disable backslash escaping.
    </span>
   </dd>
  

  
   <dt id="constant.fnm-pathname">
    <strong><code><a href="filesystem.constants.php#constant.fnm-pathname">FNM_PATHNAME</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Slash in string only matches slash in the given pattern.
    </span>
   </dd>
  

  
   <dt id="constant.fnm-period">
    <strong><code><a href="filesystem.constants.php#constant.fnm-period">FNM_PERIOD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Leading period in string must be exactly matched by period in the given pattern.
    </span>
   </dd>
  

  
   <dt id="constant.fnm-casefold">
    <strong><code><a href="filesystem.constants.php#constant.fnm-casefold">FNM_CASEFOLD</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Caseless match. Part of the GNU extension.
    </span>
   </dd>
  
 </dl>

 <dl id="filesystem.constants.upload">
  <strong class="title">PHP File Upload Constants</strong>
  
   <dt id="constant.upload-err-cant-write">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-cant-write">UPLOAD_ERR_CANT_WRITE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Failed to write file to disk.
     The value of the constant is <code class="literal">7</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-extension">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-extension">UPLOAD_ERR_EXTENSION</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     A PHP extension stopped the file upload. PHP does not
     provide a way to ascertain which extension caused the file upload to
     stop; examining the list of loaded extensions with <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> may help.
     The value of the constant is <code class="literal">8</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-form-size">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-form-size">UPLOAD_ERR_FORM_SIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     The uploaded file exceeds the <em>MAX_FILE_SIZE</em>
     directive that was specified in the HTML form.
     The value of the constant is <code class="literal">2</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-ini-size">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-ini-size">UPLOAD_ERR_INI_SIZE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     The uploaded file exceeds the
     <a href="ini.core.php#ini.upload-max-filesize" class="link">upload_max_filesize</a>
     directive in <var class="filename">php.ini</var>.
     The value of the constant is <code class="literal">1</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-no-file">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-no-file">UPLOAD_ERR_NO_FILE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     No file was uploaded.
     The value of the constant is <code class="literal">4</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-no-tmp-dir">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-no-tmp-dir">UPLOAD_ERR_NO_TMP_DIR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     Missing a temporary folder.
     The value of the constant is <code class="literal">6</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-ok">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-ok">UPLOAD_ERR_OK</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     There is no error, the file uploaded with success.
     The value of the constant is <code class="literal">0</code>.
    </p>
   </dd>
  
  
   <dt id="constant.upload-err-partial">
    <strong><code><a href="filesystem.constants.php#constant.upload-err-partial">UPLOAD_ERR_PARTIAL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <p class="para">
     The uploaded file was only partially uploaded.
     The value of the constant is <code class="literal">3</code>.
    </p>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/filesystem/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffilesystem.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=filesystem.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/filesystem.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.filesystem.php">Filesystem</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.filesystem.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="filesystem.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="filesystem.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.filesystem.php" title="Filesystem Functions">Filesystem Functions</a>
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
