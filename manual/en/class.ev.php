<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Ev - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.ev.php">
 <link rel="shorturl" href="https://www.php.net/ev">
 <link rel="alternate" href="https://www.php.net/ev" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ev.php">
 <link rel="prev" href="https://www.php.net/manual/en/ev.periodic-modes.php">
 <link rel="next" href="https://www.php.net/manual/en/ev.backend.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.ev.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.ev.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.ev.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.ev.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.ev.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.ev.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.ev.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.ev.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.ev.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.ev.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.ev.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Ev class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Ev - Manual" />
<meta name="twitter:description" content="The Ev class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Ev - Manual" />
<meta itemprop="description" content="The Ev class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Ev class" />

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
        <a href="ev.backend.php">
          Ev::backend &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ev.periodic-modes.php">
          &laquo; Periodic watcher operation modes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.ev.php'>Ev</a></li>      </ul>
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
            <option value='en/class.ev.php' selected="selected">English</option>
            <option value='de/class.ev.php'>German</option>
            <option value='es/class.ev.php'>Spanish</option>
            <option value='fr/class.ev.php'>French</option>
            <option value='it/class.ev.php'>Italian</option>
            <option value='ja/class.ev.php'>Japanese</option>
            <option value='pt_BR/class.ev.php'>Brazilian Portuguese</option>
            <option value='ru/class.ev.php'>Russian</option>
            <option value='tr/class.ev.php'>Turkish</option>
            <option value='uk/class.ev.php'>Ukrainian</option>
            <option value='zh/class.ev.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.ev" class="reference">
 <h1 class="title">The Ev class</h1>
 
 <div class="partintro"><p class="verinfo">(PECL ev &gt;= 0.2.0)</p>

  <div class="section" id="ev.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Ev is a static class providing access to the default loop and to some common
    operations.
   </p>
  </div>

  <div class="section" id="ev.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass">
     <strong class="classname"></strong>
    </span>

    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">Ev</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>

    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-auto"><var class="varname">FLAG_AUTO</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-noenv"><var class="varname">FLAG_NOENV</var></a></var><span class="initializer"> = 16777216</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-forkcheck"><var class="varname">FLAG_FORKCHECK</var></a></var><span class="initializer"> = 33554432</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-noinotify"><var class="varname">FLAG_NOINOTIFY</var></a></var><span class="initializer"> = 1048576</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-signalfd"><var class="varname">FLAG_SIGNALFD</var></a></var><span class="initializer"> = 2097152</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.flag-nosigmask"><var class="varname">FLAG_NOSIGMASK</var></a></var><span class="initializer"> = 4194304</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.run-nowait"><var class="varname">RUN_NOWAIT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.run-once"><var class="varname">RUN_ONCE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.break-cancel"><var class="varname">BREAK_CANCEL</var></a></var><span class="initializer"> = 0</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.break-one"><var class="varname">BREAK_ONE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.break-all"><var class="varname">BREAK_ALL</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.minpri"><var class="varname">MINPRI</var></a></var><span class="initializer"> = -2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.maxpri"><var class="varname">MAXPRI</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.read"><var class="varname">READ</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.write"><var class="varname">WRITE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.timer"><var class="varname">TIMER</var></a></var><span class="initializer"> = 256</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.periodic"><var class="varname">PERIODIC</var></a></var><span class="initializer"> = 512</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.signal"><var class="varname">SIGNAL</var></a></var><span class="initializer"> = 1024</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.child"><var class="varname">CHILD</var></a></var><span class="initializer"> = 2048</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.stat"><var class="varname">STAT</var></a></var><span class="initializer"> = 4096</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.idle"><var class="varname">IDLE</var></a></var><span class="initializer"> = 8192</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.prepare"><var class="varname">PREPARE</var></a></var><span class="initializer"> = 16384</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.check"><var class="varname">CHECK</var></a></var><span class="initializer"> = 32768</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.embed"><var class="varname">EMBED</var></a></var><span class="initializer"> = 65536</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.custom"><var class="varname">CUSTOM</var></a></var><span class="initializer"> = 16777216</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.error"><var class="varname">ERROR</var></a></var><span class="initializer"> = 2147483648</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-select"><var class="varname">BACKEND_SELECT</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-poll"><var class="varname">BACKEND_POLL</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-epoll"><var class="varname">BACKEND_EPOLL</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-kqueue"><var class="varname">BACKEND_KQUEUE</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-devpoll"><var class="varname">BACKEND_DEVPOLL</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-port"><var class="varname">BACKEND_PORT</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-all"><var class="varname">BACKEND_ALL</var></a></var><span class="initializer"> = 63</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ev.php#ev.constants.backend-mask"><var class="varname">BACKEND_MASK</var></a></var><span class="initializer"> = 65535</span>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.backend.php" class="methodname">backend</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.depth.php" class="methodname">depth</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.embeddablebackends.php" class="methodname">embeddableBackends</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.feedsignal.php" class="methodname">feedSignal</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signum</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.feedsignalevent.php" class="methodname">feedSignalEvent</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signum</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.iteration.php" class="methodname">iteration</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.now.php" class="methodname">now</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.nowupdate.php" class="methodname">nowUpdate</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.recommendedbackends.php" class="methodname">recommendedBackends</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.resume.php" class="methodname">resume</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.run.php" class="methodname">run</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.sleep.php" class="methodname">sleep</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$seconds</code>
   </span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.stop.php" class="methodname">stop</a></span>(<span class="methodparam">
    
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$how</code>
   <span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.supportedbackends.php" class="methodname">supportedBackends</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.suspend.php" class="methodname">suspend</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.time.php" class="methodname">time</a></span>(): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">final</span>
   <span class="modifier">public</span>
   <span class="modifier">static</span>
   <span class="methodname"><a href="ev.verify.php" class="methodname">verify</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

   }</div>

  </div>

  <div class="section" id="ev.constants">
   <h2 class="title">Predefined Constants</h2>

  <p class="para" id="ev.constants.loop-flags">
    Flags passed to create a loop:

    <dl>
     
      <dt id="ev.constants.flag-auto">
       <strong><code><a href="class.ev.php#ev.constants.flag-auto">Ev::FLAG_AUTO</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The default flags value
       </p>
      </dd>
     
     
      <dt id="ev.constants.flag-noenv">
       <strong><code><a href="class.ev.php#ev.constants.flag-noenv">Ev::FLAG_NOENV</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        If this flag used(or the program runs setuid or setgid),
        <code class="literal">libev</code>
        won&#039;t look at the environment variable
        <var class="varname">LIBEV_FLAGS</var>.
        Otherwise(by default),
        <var class="varname">LIBEV_FLAGS</var>
        will override the flags completely if it is found. Useful for
        performance tests and searching for bugs.
       </p>
      </dd>
     
     
      <dt id="ev.constants.flag-forkcheck">
       <strong><code><a href="class.ev.php#ev.constants.flag-forkcheck">Ev::FLAG_FORKCHECK</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Makes libev check for a fork in each iteration, instead of calling
        <span class="methodname"><a href="evloop.fork.php" class="methodname">EvLoop::fork()</a></span>
        manually. This works by calling
        <code class="literal">getpid()</code>
        on every iteration of the loop, and thus this might slow down the
        event loop with lots of loop iterations, but usually is not
        noticeable. This flag setting cannot be overridden or specified in the
        <var class="varname">LIBEV_FLAGS</var>
        environment variable.
       </p>
      </dd>
     
     
      <dt id="ev.constants.flag-noinotify">
       <strong><code><a href="class.ev.php#ev.constants.flag-noinotify">Ev::FLAG_NOINOTIFY</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        When this flag is specified,
        <code class="literal">libev</code>
        won&#039;t attempt to use the
        <code class="literal">inotify</code>
        API for its
        <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_stat_code_did_the_file_attri" class="link external">&raquo;&nbsp;ev_stat</a>
        watchers. The flag can be useful to conserve inotify file descriptors,
        as otherwise each loop using
        <code class="literal">ev_stat</code>
        watchers consumes one
        <code class="literal">inotify</code>
        handle.
       </p>
      </dd>
     
     
      <dt id="ev.constants.flag-signalfd">
       <strong><code><a href="class.ev.php#ev.constants.flag-signalfd">Ev::FLAG_SIGNALFD</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        When this flag is specified,
        <code class="literal">libev</code>
        will attempt to use the
        <code class="literal">signalfd</code>
        API for its
        <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_signal_code_signal_me_when_a" class="link external">&raquo;&nbsp;ev_signal</a>
        (and
        <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#code_ev_child_code_watch_out_for_pro" class="link external">&raquo;&nbsp;ev_child</a>)
        watchers. This API delivers signals synchronously, which makes it
        both faster and might make it possible to get the queued signal data.
        It can also simplify signal handling with threads, as long as signals
        are properly blocked in threads.
        <code class="literal">Signalfd</code>
        will not be used by default.
       </p>
      </dd>
     
     
      <dt id="ev.constants.flag-nosigmask">
       <strong><code><a href="class.ev.php#ev.constants.flag-nosigmask">Ev::FLAG_NOSIGMASK</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        When this flag is specified,
        <code class="literal">libev</code>
        will avoid to modify the signal mask. Specifically, this means having
        to make sure signals are unblocked before receiving them.
       </p>
       <p class="para">
        This behaviour is useful for custom signal handling, or handling
        signals only in specific threads.
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para" id="ev.constants.run-flags">
    Flags passed to
    <span class="methodname"><a href="ev.run.php" class="methodname">Ev::run()</a></span>,
    or
    <span class="methodname"><a href="evloop.run.php" class="methodname">EvLoop::run()</a></span>

    <dl>
     
      <dt id="ev.constants.run-nowait">
       <strong><code><a href="class.ev.php#ev.constants.run-nowait">Ev::RUN_NOWAIT</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Means that event loop will look for new events, will handle those
        events and any already outstanding ones, but will not wait and block
        the process in case there are no events and will return after one
        iteration of the loop. This is sometimes useful to poll and handle new
        events while doing lengthy calculations, to keep the program
        responsive.
       </p>
      </dd>
     
     
      <dt id="ev.constants.run-once">
       <strong><code><a href="class.ev.php#ev.constants.run-once">Ev::RUN_ONCE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Means that event loop will look for new events (waiting if necessary)
        and will handle those and any already outstanding ones. It will block
        the process until at least one new event arrives (which could be an
        event internal to libev itself, so there is no guarantee that a
        user-registered callback will be called), and will return after one
        iteration of the loop.
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para" id="ev.constants.break-flags">
    Flags passed to
    <span class="methodname"><a href="ev.stop.php" class="methodname">Ev::stop()</a></span>,
    or
    <span class="methodname"><a href="evloop.stop.php" class="methodname">EvLoop::stop()</a></span>

    <dl>
     
      <dt id="ev.constants.break-cancel">
       <strong><code><a href="class.ev.php#ev.constants.break-cancel">Ev::BREAK_CANCEL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Cancel the break operation.
       </p>
      </dd>
     
     
      <dt id="ev.constants.break-one">
       <strong><code><a href="class.ev.php#ev.constants.break-one">Ev::BREAK_ONE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Makes the innermost
        <span class="methodname"><a href="ev.run.php" class="methodname">Ev::run()</a></span>
        (or
        <span class="methodname"><a href="evloop.run.php" class="methodname">EvLoop::run()</a></span>)
        call return.
       </p>
      </dd>
     
     
      <dt id="ev.constants.break-all">
       <strong><code><a href="class.ev.php#ev.constants.break-all">Ev::BREAK_ALL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Makes all nested
        <span class="methodname"><a href="ev.run.php" class="methodname">Ev::run()</a></span>
        (or
        <span class="methodname"><a href="evloop.run.php" class="methodname">EvLoop::run()</a></span>)
        calls return.
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para" id="ev.constants.watcher-pri">
    Watcher priorities:

    <dl>
     
      <dt id="ev.constants.minpri">
       <strong><code><a href="class.ev.php#ev.constants.minpri">Ev::MINPRI</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Minimum allowed watcher priority.
       </p>
      </dd>
     
     
      <dt id="ev.constants.maxpri">
       <strong><code><a href="class.ev.php#ev.constants.maxpri">Ev::MAXPRI</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Maximum allowed watcher priority.
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para" id="ev.constants.watcher-revents">
    Bit masks of (received) events:

    <dl>
     
      <dt id="ev.constants.read">
       <strong><code><a href="class.ev.php#ev.constants.read">Ev::READ</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The file descriptor in the
        <span class="classname"><a href="class.evio.php" class="classname">EvIo</a></span>
        watcher has become readable.
       </p>
      </dd>
     
     
      <dt id="ev.constants.write">
       <strong><code><a href="class.ev.php#ev.constants.write">Ev::WRITE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The file descriptor in the
        <span class="classname"><a href="class.evio.php" class="classname">EvIo</a></span>
        watcher has become writable.
       </p>
      </dd>
     
     
      <dt id="ev.constants.timer">
       <strong><code><a href="class.ev.php#ev.constants.timer">Ev::TIMER</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <span class="classname"><a href="class.evtimer.php" class="classname">EvTimer</a></span>
        watcher has been timed out.
       </p>
      </dd>
     
     
      <dt id="ev.constants.periodic">
       <strong><code><a href="class.ev.php#ev.constants.periodic">Ev::PERIODIC</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <span class="classname"><a href="class.evperiodic.php" class="classname">EvPeriodic</a></span>
        watcher has been timed out.
       </p>
      </dd>
     
     
      <dt id="ev.constants.signal">
       <strong><code><a href="class.ev.php#ev.constants.signal">Ev::SIGNAL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        A signal specified in
        <span class="methodname"><a href="evsignal.construct.php" class="methodname">EvSignal::__construct()</a></span>
        has been received.
       </p>
      </dd>
     
     
      <dt id="ev.constants.child">
       <strong><code><a href="class.ev.php#ev.constants.child">Ev::CHILD</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The
        <code class="parameter">pid</code>
        specified in
        <span class="methodname"><a href="evchild.construct.php" class="methodname">EvChild::__construct()</a></span>
        has received a status change.
       </p>
      </dd>
     
     
      <dt id="ev.constants.stat">
       <strong><code><a href="class.ev.php#ev.constants.stat">Ev::STAT</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The path specified in
        <span class="classname"><a href="class.evstat.php" class="classname">EvStat</a></span>
        watcher changed its attributes.
       </p>
      </dd>
     
     
      <dt id="ev.constants.idle">
       <strong><code><a href="class.ev.php#ev.constants.idle">Ev::IDLE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <span class="classname"><a href="class.evidle.php" class="classname">EvIdle</a></span>
        watcher works when there is nothing to do with other watchers.
       </p>
      </dd>
     
     
      <dt id="ev.constants.prepare">
       <strong><code><a href="class.ev.php#ev.constants.prepare">Ev::PREPARE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        All
        <span class="classname"><a href="class.evprepare.php" class="classname">EvPrepare</a></span>
        watchers are invoked just before
        <span class="methodname"><a href="ev.run.php" class="methodname">Ev::run()</a></span>
        starts. Thus,
        <span class="classname"><a href="class.evprepare.php" class="classname">EvPrepare</a></span>
        watchers are the last watchers invoked before the event loop sleeps or
        polls for new events.
       </p>
      </dd>
     
     
      <dt id="ev.constants.check">
       <strong><code><a href="class.ev.php#ev.constants.check">Ev::CHECK</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        All
        <span class="classname"><a href="class.evcheck.php" class="classname">EvCheck</a></span>
        watchers are queued just after
        <span class="methodname"><a href="ev.run.php" class="methodname">Ev::run()</a></span>
        has gathered the new events, but before it queues any callbacks for
        any received events. Thus,
        <span class="classname"><a href="class.evcheck.php" class="classname">EvCheck</a></span>
        watchers will be invoked before any other watchers of the same or
        lower priority within an event loop iteration.
       </p>
      </dd>
     
     
      <dt id="ev.constants.embed">
       <strong><code><a href="class.ev.php#ev.constants.embed">Ev::EMBED</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        The embedded event loop specified in the
        <span class="classname"><a href="class.evembed.php" class="classname">EvEmbed</a></span>
        watcher needs attention.
       </p>
      </dd>
     
     
      <dt id="ev.constants.custom">
       <strong><code><a href="class.ev.php#ev.constants.custom">Ev::CUSTOM</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Not ever sent(or otherwise used) by
        <code class="literal">libev</code>
        itself, but can be freely used by
        <code class="literal">libev</code>
        users to signal watchers (e.g. via
        <span class="methodname"><a href="evwatcher.feed.php" class="methodname">EvWatcher::feed()</a></span>
        ).
       </p>
      </dd>
     
     
      <dt id="ev.constants.error">
       <strong><code><a href="class.ev.php#ev.constants.error">Ev::ERROR</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        An unspecified error has occurred, the watcher has been stopped. This
        might happen because the watcher could not be properly started because
        <code class="literal">libev</code>
        ran out of memory, a file descriptor was found to be closed or any
        other problem.
        <code class="literal">Libev</code>
        considers these application bugs. See also
        <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#ANATOMY_OF_A_WATCHER_CONTENT" class="link external">&raquo;&nbsp;ANATOMY
    OF A WATCHER</a>
       </p>
      </dd>
     
    </dl>
   </p>

   <p class="para" id="ev.constants.watcher-backends">
    Backend flags:

    <dl>
     
      <dt id="ev.constants.backend-select">
       <strong><code><a href="class.ev.php#ev.constants.backend-select">Ev::BACKEND_SELECT</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <code class="literal">select(2) backend</code>
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-poll">
       <strong><code><a href="class.ev.php#ev.constants.backend-poll">Ev::BACKEND_POLL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <code class="literal">poll(2) backend</code>
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-epoll">
       <strong><code><a href="class.ev.php#ev.constants.backend-epoll">Ev::BACKEND_EPOLL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Linux-specific
        <code class="literal">epoll(7)</code>
        backend for both pre- and post-2.6.9 kernels
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-kqueue">
       <strong><code><a href="class.ev.php#ev.constants.backend-kqueue">Ev::BACKEND_KQUEUE</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        <code class="literal">kqueue</code>
        backend used on most BSD systems.
        <span class="classname"><a href="class.evembed.php" class="classname">EvEmbed</a></span>
        watcher could be used to embed one loop(with kqueue backend) into
        another. For instance, one can try to create an event loop with
        <code class="literal">kqueue</code>
        backend and use it for sockets only.
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-devpoll">
       <strong><code><a href="class.ev.php#ev.constants.backend-devpoll">Ev::BACKEND_DEVPOLL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Solaris 8 backend. This is not implemented yet.
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-port">
       <strong><code><a href="class.ev.php#ev.constants.backend-port">Ev::BACKEND_PORT</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Solaris 10 event port mechanism with a good scaling.
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-all">
       <strong><code><a href="class.ev.php#ev.constants.backend-all">Ev::BACKEND_ALL</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Try all backends(even currupted ones). It&#039;s not recommended to use it
        explicitly. Bitwise operators should be applied here(e.g.
        <strong><code><a href="class.ev.php#ev.constants.backend-all">Ev::BACKEND_ALL</a></code></strong>
        &amp; ~
        <strong><code><a href="class.ev.php#ev.constants.backend-kqueue">Ev::BACKEND_KQUEUE</a></code></strong>)
        Use
        <span class="methodname"><a href="ev.recommendedbackends.php" class="methodname">Ev::recommendedBackends()</a></span>,
        or don&#039;t specify any backends at all.
       </p>
      </dd>
     
     
      <dt id="ev.constants.backend-mask">
       <strong><code><a href="class.ev.php#ev.constants.backend-mask">Ev::BACKEND_MASK</a></code></strong>
      </dt>
      <dd>
       <p class="para">
        Not a backend, but a mask to select all backend bits from
        <code class="parameter">flags</code>
        value to mask out any backends(e.g. when modifying the
        <var class="varname">LIBEV_FLAGS</var>
        environment variable).
       </p>
      </dd>
     
    </dl>
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     For the default loop during module initialization phase
     <code class="literal">Ev</code>
     registers
     <a href="http://pod.tst.eu/http://cvs.schmorp.de/libev/ev.pod#FUNCTIONS_CONTROLLING_EVENT_LOOPS_CO" class="link external">&raquo;&nbsp;ev_loop_fork</a>
     call by means of
     <code class="literal">pthread_atfork</code>
     (if available).
    </p>
   </p></blockquote>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     There are methods providing access to the
     <em>default event
   loop</em>
     in
     <span class="classname"><strong class="classname">Ev</strong></span>
     class(e.g.
     <span class="methodname"><a href="ev.iteration.php" class="methodname">Ev::iteration()</a></span>,
     <span class="methodname"><a href="ev.depth.php" class="methodname">Ev::depth()</a></span>
     etc.) For
     <em>custom loops</em>
     (created with
     <span class="methodname"><a href="evloop.construct.php" class="methodname">EvLoop::__construct()</a></span>)
     these values may be accessed via corresponding properties and methods
     of the
     <span class="classname"><a href="class.evloop.php" class="classname">EvLoop</a></span>
     class.
    </p>
    <p class="para">
     The instance of the default event loop itself can be fetched by means of
     <span class="methodname"><a href="evloop.defaultloop.php" class="methodname">EvLoop::defaultLoop()</a></span>
     method.
    </p>
   </p></blockquote>
  </div>

 </div>

 





















































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ev.backend.php">Ev::backend</a> — Returns an integer describing the backend used by libev</li><li><a href="ev.depth.php">Ev::depth</a> — Returns recursion depth</li><li><a href="ev.embeddablebackends.php">Ev::embeddableBackends</a> — Returns the set of backends that are embeddable in other event loops</li><li><a href="ev.feedsignal.php">Ev::feedSignal</a> — Feed a signal event info Ev</li><li><a href="ev.feedsignalevent.php">Ev::feedSignalEvent</a> — Feed signal event into the default loop</li><li><a href="ev.iteration.php">Ev::iteration</a> — Return the number of times the default event loop has polled for new
  events</li><li><a href="ev.now.php">Ev::now</a> — Returns the time when the last iteration of the default event
  loop has started</li><li><a href="ev.nowupdate.php">Ev::nowUpdate</a> — Establishes the current time by querying the kernel, updating the time
    returned by Ev::now in the progress</li><li><a href="ev.recommendedbackends.php">Ev::recommendedBackends</a> — Returns a bit mask of recommended backends for current
  platform</li><li><a href="ev.resume.php">Ev::resume</a> — Resume previously suspended default event loop</li><li><a href="ev.run.php">Ev::run</a> — Begin checking for events and calling callbacks for the default
  loop</li><li><a href="ev.sleep.php">Ev::sleep</a> — Block the process for the given number of seconds</li><li><a href="ev.stop.php">Ev::stop</a> — Stops the default event loop</li><li><a href="ev.supportedbackends.php">Ev::supportedBackends</a> — Returns the set of backends supported by current libev
  configuration</li><li><a href="ev.suspend.php">Ev::suspend</a> — Suspend the default event loop</li><li><a href="ev.time.php">Ev::time</a> — Returns the current time in fractional seconds since the epoch</li><li><a href="ev.verify.php">Ev::verify</a> — Performs internal consistency checks(for debugging)</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ev/ev.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.ev%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ev&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ev.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ev.php">Ev</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ev.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ev.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ev.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ev.watchers.php" title="Watchers">Watchers</a>
                        </li>
                                                <li class="">
                            <a href="ev.watcher-callbacks.php" title="Watcher callbacks">Watcher callbacks</a>
                        </li>
                                                <li class="">
                            <a href="ev.periodic-modes.php" title="Periodic watcher operation modes">Periodic watcher operation modes</a>
                        </li>
                                                <li class="current">
                            <a href="class.ev.php" title="Ev">Ev</a>
                        </li>
                                                <li class="">
                            <a href="class.evcheck.php" title="EvCheck">EvCheck</a>
                        </li>
                                                <li class="">
                            <a href="class.evchild.php" title="EvChild">EvChild</a>
                        </li>
                                                <li class="">
                            <a href="class.evembed.php" title="EvEmbed">EvEmbed</a>
                        </li>
                                                <li class="">
                            <a href="class.evfork.php" title="EvFork">EvFork</a>
                        </li>
                                                <li class="">
                            <a href="class.evidle.php" title="EvIdle">EvIdle</a>
                        </li>
                                                <li class="">
                            <a href="class.evio.php" title="EvIo">EvIo</a>
                        </li>
                                                <li class="">
                            <a href="class.evloop.php" title="EvLoop">EvLoop</a>
                        </li>
                                                <li class="">
                            <a href="class.evperiodic.php" title="EvPeriodic">EvPeriodic</a>
                        </li>
                                                <li class="">
                            <a href="class.evprepare.php" title="EvPrepare">EvPrepare</a>
                        </li>
                                                <li class="">
                            <a href="class.evsignal.php" title="EvSignal">EvSignal</a>
                        </li>
                                                <li class="">
                            <a href="class.evstat.php" title="EvStat">EvStat</a>
                        </li>
                                                <li class="">
                            <a href="class.evtimer.php" title="EvTimer">EvTimer</a>
                        </li>
                                                <li class="">
                            <a href="class.evwatcher.php" title="EvWatcher">EvWatcher</a>
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
