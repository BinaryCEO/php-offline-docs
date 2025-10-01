<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Membership - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/extensions.membership.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/extensions.membership.php">
 <link rel="alternate" href="https://www.php.net/manual/en/extensions.membership.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/extensions.php">
 <link rel="prev" href="https://www.php.net/manual/en/extensions.alphabetical.php">
 <link rel="next" href="https://www.php.net/manual/en/extensions.state.php">

 <link rel="alternate" href="https://www.php.net/manual/en/extensions.membership.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/extensions.membership.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/extensions.membership.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/extensions.membership.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/extensions.membership.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/extensions.membership.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/extensions.membership.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/extensions.membership.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/extensions.membership.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/extensions.membership.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/extensions.membership.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Membership" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Membership - Manual" />
<meta name="twitter:description" content="Membership" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Membership - Manual" />
<meta itemprop="description" content="Membership" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Membership" />

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
        <a href="extensions.state.php">
          State &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="extensions.alphabetical.php">
          &laquo; Alphabetical        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='extensions.php'>Extension List/Categorization</a></li>      </ul>
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
            <option value='en/extensions.membership.php' selected="selected">English</option>
            <option value='de/extensions.membership.php'>German</option>
            <option value='es/extensions.membership.php'>Spanish</option>
            <option value='fr/extensions.membership.php'>French</option>
            <option value='it/extensions.membership.php'>Italian</option>
            <option value='ja/extensions.membership.php'>Japanese</option>
            <option value='pt_BR/extensions.membership.php'>Brazilian Portuguese</option>
            <option value='ru/extensions.membership.php'>Russian</option>
            <option value='tr/extensions.membership.php'>Turkish</option>
            <option value='uk/extensions.membership.php'>Ukrainian</option>
            <option value='zh/extensions.membership.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="extensions.membership" class="section">
  <h2 class="title">Membership</h2>

  <div class="section" id="extensions.membership.core">
   <h2 class="title">Core Extensions</h2><p class="para">These
are not actual extensions. They are part of the PHP core and cannot be
left out of a PHP binary with compilation options.</p>

   <ul class="itemizedlist">
    <li class="listitem"><p class="para"><a href="book.array.php" class="xref">Arrays</a></p></li>
    <li class="listitem"><p class="para"><a href="book.classobj.php" class="xref">Classes/Objects</a></p></li>
    <li class="listitem"><p class="para"><a href="book.datetime.php" class="xref">Date/Time</a></p></li>
    <li class="listitem"><p class="para"><a href="book.dir.php" class="xref">Directories</a></p></li>
    <li class="listitem"><p class="para"><a href="book.errorfunc.php" class="xref">Error Handling</a></p></li>
    <li class="listitem"><p class="para"><a href="book.exec.php" class="xref">Program execution</a></p></li>
    <li class="listitem"><p class="para"><a href="book.filesystem.php" class="xref">Filesystem</a></p></li>
    <li class="listitem"><p class="para"><a href="book.fpm.php" class="xref">FastCGI Process Manager</a></p></li>
    <li class="listitem"><p class="para"><a href="book.funchand.php" class="xref">Function Handling</a></p></li>
    <li class="listitem"><p class="para"><a href="book.hash.php" class="xref">Hash</a></p></li>
    <li class="listitem"><p class="para"><a href="book.info.php" class="xref">PHP Options/Info</a></p></li>
    <li class="listitem"><p class="para"><a href="book.json.php" class="xref">JSON</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mail.php" class="xref">Mail</a></p></li>
    <li class="listitem"><p class="para"><a href="book.math.php" class="xref">Math</a></p></li>
    <li class="listitem"><p class="para"><a href="book.misc.php" class="xref">Misc.</a></p></li>
    <li class="listitem"><p class="para"><a href="book.network.php" class="xref">Network</a></p></li>
    <li class="listitem"><p class="para"><a href="book.opcache.php" class="xref">OPcache</a></p></li>
    <li class="listitem"><p class="para"><a href="book.outcontrol.php" class="xref">Output Control</a></p></li>
    <li class="listitem"><p class="para"><a href="book.password.php" class="xref">Password Hashing</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pcre.php" class="xref">PCRE</a></p></li>
    <li class="listitem"><p class="para"><a href="book.random.php" class="xref">Random</a></p></li>
    <li class="listitem"><p class="para"><a href="book.reflection.php" class="xref">Reflection</a></p></li>
    <li class="listitem"><p class="para"><a href="book.spl.php" class="xref">SPL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.stream.php" class="xref">Streams</a></p></li>
    <li class="listitem"><p class="para"><a href="book.strings.php" class="xref">Strings</a></p></li>
    <li class="listitem"><p class="para"><a href="book.url.php" class="xref">URLs</a></p></li>
    <li class="listitem"><p class="para"><a href="book.var.php" class="xref">Variable handling</a></p></li>
   </ul>
  </div>

  <div class="section" id="extensions.membership.bundled">
   <h2 class="title">Bundled Extensions</h2><p class="para">These
extensions are bundled with PHP.</p>

   <ul class="itemizedlist">
    <li class="listitem"><p class="para"><a href="book.apache.php" class="xref">Apache</a></p></li>
    <li class="listitem"><p class="para"><a href="book.bc.php" class="xref">BC Math</a></p></li>
    <li class="listitem"><p class="para"><a href="book.calendar.php" class="xref">Calendar</a></p></li>
    <li class="listitem"><p class="para"><a href="book.com.php" class="xref">COM</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ctype.php" class="xref">Ctype</a></p></li>
    <li class="listitem"><p class="para"><a href="book.dba.php" class="xref">DBA</a></p></li>
    <li class="listitem"><p class="para"><a href="book.exif.php" class="xref">Exif</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ffi.php" class="xref">FFI</a></p></li>
    <li class="listitem"><p class="para"><a href="book.fileinfo.php" class="xref">Fileinfo</a></p></li>
    <li class="listitem"><p class="para"><a href="book.filter.php" class="xref">Filter</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ftp.php" class="xref">FTP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.iconv.php" class="xref">iconv</a></p></li>
    <li class="listitem"><p class="para"><a href="book.image.php" class="xref">GD</a></p></li>
    <li class="listitem"><p class="para"><a href="book.intl.php" class="xref">intl</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mbstring.php" class="xref">Multibyte String</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mhash.php" class="xref">Mhash</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pcntl.php" class="xref">PCNTL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pdo.php" class="xref">PDO</a></p></li>
    <li class="listitem"><p class="para"><a href="book.phar.php" class="xref">Phar</a></p></li>
    <li class="listitem"><p class="para"><a href="book.phpdbg.php" class="xref">phpdbg</a></p></li>
    <li class="listitem"><p class="para"><a href="book.posix.php" class="xref">POSIX</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sem.php" class="xref">Semaphore</a></p></li>
    <li class="listitem"><p class="para"><a href="book.session.php" class="xref">Sessions</a></p></li>
    <li class="listitem"><p class="para"><a href="book.shmop.php" class="xref">Shared Memory</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sockets.php" class="xref">Sockets</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sqlite3.php" class="xref">SQLite3</a></p></li>
    <li class="listitem"><p class="para"><a href="book.tokenizer.php" class="xref">Tokenizer</a></p></li>
    <li class="listitem"><p class="para"><a href="book.zlib.php" class="xref">Zlib</a></p></li>
   </ul>
  </div>

  <div class="section" id="extensions.membership.external">
   <h2 class="title">External Extensions</h2><p class="para">These
extensions are bundled with PHP but in order to compile them, external libraries will be needed.</p>

   <ul class="itemizedlist">
    <li class="listitem"><p class="para"><a href="book.bzip2.php" class="xref">Bzip2</a></p></li>
    <li class="listitem"><p class="para"><a href="book.curl.php" class="xref">cURL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.dom.php" class="xref">DOM</a></p></li>
    <li class="listitem"><p class="para"><a href="book.enchant.php" class="xref">Enchant</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gettext.php" class="xref">Gettext</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gmp.php" class="xref">GMP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ldap.php" class="xref">LDAP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.libxml.php" class="xref">libxml</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mysqli.php" class="xref">MySQLi</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mysqlnd.php" class="xref">Mysqlnd</a></p></li>
    <li class="listitem"><p class="para"><a href="book.openssl.php" class="xref">OpenSSL</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-dblib.php" class="xref">MS SQL Server PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-firebird.php" class="xref">Firebird PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-mysql.php" class="xref">MySQL PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-odbc.php" class="xref">ODBC and DB2 PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-pgsql.php" class="xref">PostgreSQL PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-sqlite.php" class="xref">SQLite PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pgsql.php" class="xref">PostgreSQL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.readline.php" class="xref">Readline</a></p></li>
    <li class="listitem"><p class="para"><a href="book.simplexml.php" class="xref">SimpleXML</a></p></li>
    <li class="listitem"><p class="para"><a href="book.snmp.php" class="xref">SNMP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.soap.php" class="xref">SOAP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sodium.php" class="xref">Sodium</a></p></li>
    <li class="listitem"><p class="para"><a href="book.tidy.php" class="xref">Tidy</a></p></li>
    <li class="listitem"><p class="para"><a href="book.uodbc.php" class="xref">ODBC</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xml.php" class="xref">XML Parser</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xmlreader.php" class="xref">XMLReader</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xmlwriter.php" class="xref">XMLWriter</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xsl.php" class="xref">XSL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.zip.php" class="xref">Zip</a></p></li>
   </ul>
  </div>

  <div class="section" id="extensions.membership.pecl">
   <h2 class="title">
PECL Extensions</h2>
<p class="para">These extensions are available from
<a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a>. They may require external libraries. More PECL extensions exist but
they are not documented in the PHP manual yet.</p>

   <ul class="itemizedlist">
    <li class="listitem"><p class="para"><a href="book.apcu.php" class="xref">APCu</a></p></li>
    <li class="listitem"><p class="para"><a href="book.cmark.php" class="xref">CommonMark</a></p></li>
    <li class="listitem"><p class="para"><a href="book.componere.php" class="xref">Componere</a></p></li>
    <li class="listitem"><p class="para"><a href="book.cubrid.php" class="xref">CUBRID</a></p></li>
    <li class="listitem"><p class="para"><a href="book.dbase.php" class="xref">dBase</a></p></li>
    <li class="listitem"><p class="para"><a href="book.dio.php" class="xref">Direct IO</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ds.php" class="xref">Data Structures</a></p></li>
    <li class="listitem"><p class="para"><a href="book.eio.php" class="xref">Eio</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ev.php" class="xref">Ev</a></p></li>
    <li class="listitem"><p class="para"><a href="book.event.php" class="xref">Event</a></p></li>
    <li class="listitem"><p class="para"><a href="book.expect.php" class="xref">Expect</a></p></li>
    <li class="listitem"><p class="para"><a href="book.fann.php" class="xref">FANN</a></p></li>
    <li class="listitem"><p class="para"><a href="book.fdf.php" class="xref">FDF</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gearman.php" class="xref">Gearman</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gender.php" class="xref">Gender</a></p></li>
    <li class="listitem"><p class="para"><a href="book.geoip.php" class="xref">GeoIP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gmagick.php" class="xref">Gmagick</a></p></li>
    <li class="listitem"><p class="para"><a href="book.gnupg.php" class="xref">GnuPG</a></p></li>
    <li class="listitem"><p class="para"><a href="book.hrtime.php" class="xref">HRTime</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ibase.php" class="xref">Firebird/InterBase</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ibm-db2.php" class="xref">IBM DB2</a></p></li>
    <li class="listitem"><p class="para"><a href="book.igbinary.php" class="xref">Igbinary</a></p></li>
    <li class="listitem"><p class="para"><a href="book.imagick.php" class="xref">ImageMagick</a></p></li>
    <li class="listitem"><p class="para"><a href="book.imap.php" class="xref">IMAP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.inotify.php" class="xref">Inotify</a></p></li>
    <li class="listitem"><p class="para"><a href="book.lua.php" class="xref">Lua</a></p></li>
    <li class="listitem"><p class="para"><a href="book.luasandbox.php" class="xref">LuaSandbox</a></p></li>
    <li class="listitem"><p class="para"><a href="book.lzf.php" class="xref">LZF</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mailparse.php" class="xref">Mailparse</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mcrypt.php" class="xref">Mcrypt</a></p></li>
    <li class="listitem"><p class="para"><a href="book.memcache.php" class="xref">Memcache</a></p></li>
    <li class="listitem"><p class="para"><a href="book.memcached.php" class="xref">Memcached</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mongodb.php" class="xref">MongoDB</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mqseries.php" class="xref">mqseries</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mysql.php" class="xref">MySQL (Original)</a></p></li>
    <li class="listitem"><p class="para"><a href="book.mysql-xdevapi.php" class="xref">Mysql_xdevapi</a></p></li>
    <li class="listitem"><p class="para"><a href="book.oauth.php" class="xref">OAuth</a></p></li>
    <li class="listitem"><p class="para"><a href="book.oci8.php" class="xref">OCI8</a></p></li>
    <li class="listitem"><p class="para"><a href="book.openal.php" class="xref">OpenAL</a></p></li>
    <li class="listitem"><p class="para"><a href="book.parallel.php" class="xref">parallel</a></p></li>
    <li class="listitem"><p class="para"><a href="book.parle.php" class="xref">Parle</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-cubrid.php" class="xref">CUBRID PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-ibm.php" class="xref">IBM PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-informix.php" class="xref">Informix PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-oci.php" class="xref">Oracle PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="ref.pdo-sqlsrv.php" class="xref">MS SQL Server PDO Driver</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ps.php" class="xref">PS</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pspell.php" class="xref">Pspell</a></p></li>
    <li class="listitem"><p class="para"><a href="book.pthreads.php" class="xref">pthreads</a></p></li>
    <li class="listitem"><p class="para"><a href="book.quickhash.php" class="xref">Quickhash</a></p></li>
    <li class="listitem"><p class="para"><a href="book.radius.php" class="xref">Radius</a></p></li>
    <li class="listitem"><p class="para"><a href="book.rar.php" class="xref">Rar</a></p></li>
    <li class="listitem"><p class="para"><a href="book.recode.php" class="xref">Recode</a></p></li>
    <li class="listitem"><p class="para"><a href="book.rnp.php" class="xref">Rnp</a></p></li>
    <li class="listitem"><p class="para"><a href="book.rpminfo.php" class="xref">RpmInfo</a></p></li>
    <li class="listitem"><p class="para"><a href="book.rrd.php" class="xref">RRD</a></p></li>
    <li class="listitem"><p class="para"><a href="book.runkit7.php" class="xref">runkit7</a></p></li>
    <li class="listitem"><p class="para"><a href="book.scoutapm.php" class="xref">ScoutAPM</a></p></li>
    <li class="listitem"><p class="para"><a href="book.seaslog.php" class="xref">Seaslog</a></p></li>
    <li class="listitem"><p class="para"><a href="book.simdjson.php" class="xref">Simdjson</a></p></li>
    <li class="listitem"><p class="para"><a href="book.solr.php" class="xref">Solr</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sqlsrv.php" class="xref">SQLSRV</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ssdeep.php" class="xref">ssdeep</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ssh2.php" class="xref">SSH2</a></p></li>
    <li class="listitem"><p class="para"><a href="book.stats.php" class="xref">Statistics</a></p></li>
    <li class="listitem"><p class="para"><a href="book.stomp.php" class="xref">Stomp</a></p></li>
    <li class="listitem"><p class="para"><a href="book.svm.php" class="xref">SVM</a></p></li>
    <li class="listitem"><p class="para"><a href="book.svn.php" class="xref">SVN</a></p></li>
    <li class="listitem"><p class="para"><a href="book.swoole.php" class="xref">Swoole</a></p></li>
    <li class="listitem"><p class="para"><a href="book.sync.php" class="xref">Sync</a></p></li>
    <li class="listitem"><p class="para"><a href="book.taint.php" class="xref">Taint</a></p></li>
    <li class="listitem"><p class="para"><a href="book.tcpwrap.php" class="xref">TCP</a></p></li>
    <li class="listitem"><p class="para"><a href="book.trader.php" class="xref">Trader</a></p></li>
    <li class="listitem"><p class="para"><a href="book.ui.php" class="xref">UI</a></p></li>
    <li class="listitem"><p class="para"><a href="book.uopz.php" class="xref">uopz</a></p></li>
    <li class="listitem"><p class="para"><a href="book.v8js.php" class="xref">V8js</a></p></li>
    <li class="listitem"><p class="para"><a href="book.var_representation.php" class="xref">var_representation</a></p></li>
    <li class="listitem"><p class="para"><a href="book.varnish.php" class="xref">Varnish</a></p></li>
    <li class="listitem"><p class="para"><a href="book.wddx.php" class="xref">WDDX</a></p></li>
    <li class="listitem"><p class="para"><a href="book.win32service.php" class="xref">win32service</a></p></li>
    <li class="listitem"><p class="para"><a href="book.wincache.php" class="xref">WinCache</a></p></li>
    <li class="listitem"><p class="para"><a href="book.wkhtmltox.php" class="xref">wkhtmltox</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xattr.php" class="xref">xattr</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xdiff.php" class="xref">xdiff</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xhprof.php" class="xref">Xhprof</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xlswriter.php" class="xref">XLSWriter</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xmldiff.php" class="xref">XMLDiff</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xmlrpc.php" class="xref">XML-RPC</a></p></li>
    <li class="listitem"><p class="para"><a href="book.xpass.php" class="xref">Xpass</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yac.php" class="xref">Yac</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yaconf.php" class="xref">Yaconf</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yaf.php" class="xref">Yaf</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yaml.php" class="xref">Yaml</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yar.php" class="xref">Yar</a></p></li>
    <li class="listitem"><p class="para"><a href="book.yaz.php" class="xref">YAZ</a></p></li>
    <li class="listitem"><p class="para"><a href="book.zmq.php" class="xref">0MQ messaging</a></p></li>
    <li class="listitem"><p class="para"><a href="book.zookeeper.php" class="xref">ZooKeeper</a></p></li>
   </ul>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/extensions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fextensions.membership%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=extensions.membership&amp;repo=en&amp;redirect=https://www.php.net/manual/en/extensions.membership.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="extensions.php">Extension List/Categorization</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="extensions.alphabetical.php" title="Alphabetical">Alphabetical</a>
                        </li>
                                                <li class="current">
                            <a href="extensions.membership.php" title="Membership">Membership</a>
                        </li>
                                                <li class="">
                            <a href="extensions.state.php" title="State">State</a>
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
