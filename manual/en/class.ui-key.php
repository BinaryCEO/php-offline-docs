<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: UI\Key - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.ui-key.php">
 <link rel="shorturl" href="https://www.php.net/ui-key">
 <link rel="alternate" href="https://www.php.net/ui-key" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ui.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.ui-draw-line-join.php">
 <link rel="next" href="https://www.php.net/manual/en/class.ui-exception-invalidargumentexception.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.ui-key.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.ui-key.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.ui-key.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.ui-key.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.ui-key.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.ui-key.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.ui-key.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.ui-key.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.ui-key.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.ui-key.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.ui-key.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Key Identifiers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: UI\Key - Manual" />
<meta name="twitter:description" content="Key Identifiers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: UI\Key - Manual" />
<meta itemprop="description" content="Key Identifiers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Key Identifiers" />

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
        <a href="class.ui-exception-invalidargumentexception.php">
          UI\Exception\InvalidArgumentException &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.ui-draw-line-join.php">
          &laquo; UI\Draw\Line\Join        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.ui.php'>GUI Extensions</a></li>      <li><a href='book.ui.php'>UI</a></li>      </ul>
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
            <option value='en/class.ui-key.php' selected="selected">English</option>
            <option value='de/class.ui-key.php'>German</option>
            <option value='es/class.ui-key.php'>Spanish</option>
            <option value='fr/class.ui-key.php'>French</option>
            <option value='it/class.ui-key.php'>Italian</option>
            <option value='ja/class.ui-key.php'>Japanese</option>
            <option value='pt_BR/class.ui-key.php'>Brazilian Portuguese</option>
            <option value='ru/class.ui-key.php'>Russian</option>
            <option value='tr/class.ui-key.php'>Turkish</option>
            <option value='uk/class.ui-key.php'>Ukrainian</option>
            <option value='zh/class.ui-key.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.ui-key" class="reference">

 <h1 class="title">Key Identifiers</h1>
 

 <div class="partintro"><p class="verinfo">(UI 1.0.0)</p>


  <div class="section" id="ui-key.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">

   </p>
  </div>


  <div class="section" id="ui-key.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">UI\Key</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.escape"><var class="varname">Escape</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.insert"><var class="varname">Insert</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.delete"><var class="varname">Delete</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.home"><var class="varname">Home</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.end"><var class="varname">End</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.pageup"><var class="varname">PageUp</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.pagedown"><var class="varname">PageDown</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.up"><var class="varname">Up</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.down"><var class="varname">Down</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.left"><var class="varname">Left</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.right"><var class="varname">Right</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f1"><var class="varname">F1</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f2"><var class="varname">F2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f3"><var class="varname">F3</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f4"><var class="varname">F4</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f5"><var class="varname">F5</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f6"><var class="varname">F6</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f7"><var class="varname">F7</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f8"><var class="varname">F8</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f9"><var class="varname">F9</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f10"><var class="varname">F10</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f11"><var class="varname">F11</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.f12"><var class="varname">F12</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n0"><var class="varname">N0</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n1"><var class="varname">N1</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n2"><var class="varname">N2</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n3"><var class="varname">N3</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n4"><var class="varname">N4</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n5"><var class="varname">N5</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n6"><var class="varname">N6</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n7"><var class="varname">N7</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n8"><var class="varname">N8</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.n9"><var class="varname">N9</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.ndot"><var class="varname">NDot</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.nenter"><var class="varname">NEnter</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.nadd"><var class="varname">NAdd</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.nsubtract"><var class="varname">NSubtract</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.nmultiply"><var class="varname">NMultiply</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.ui-key.php#ui-key.constants.ndivide"><var class="varname">NDivide</var></a></var>;</div>


   }</div>


  </div>

  
  <div class="section" id="ui-key-stretch.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="ui-key.constants.escape"><strong><code><a href="class.ui-key.php#ui-key.constants.escape">UI\Key::Escape</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.insert"><strong><code><a href="class.ui-key.php#ui-key.constants.insert">UI\Key::Insert</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.delete"><strong><code><a href="class.ui-key.php#ui-key.constants.delete">UI\Key::Delete</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.home"><strong><code><a href="class.ui-key.php#ui-key.constants.home">UI\Key::Home</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.end"><strong><code><a href="class.ui-key.php#ui-key.constants.end">UI\Key::End</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.pageup"><strong><code><a href="class.ui-key.php#ui-key.constants.pageup">UI\Key::PageUp</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.pagedown"><strong><code><a href="class.ui-key.php#ui-key.constants.pagedown">UI\Key::PageDown</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.up"><strong><code><a href="class.ui-key.php#ui-key.constants.up">UI\Key::Up</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.down"><strong><code><a href="class.ui-key.php#ui-key.constants.down">UI\Key::Down</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.left"><strong><code><a href="class.ui-key.php#ui-key.constants.left">UI\Key::Left</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.right"><strong><code><a href="class.ui-key.php#ui-key.constants.right">UI\Key::Right</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f1"><strong><code><a href="class.ui-key.php#ui-key.constants.f1">UI\Key::F1</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f2"><strong><code><a href="class.ui-key.php#ui-key.constants.f2">UI\Key::F2</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f3"><strong><code><a href="class.ui-key.php#ui-key.constants.f3">UI\Key::F3</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f4"><strong><code><a href="class.ui-key.php#ui-key.constants.f4">UI\Key::F4</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f5"><strong><code><a href="class.ui-key.php#ui-key.constants.f5">UI\Key::F5</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f6"><strong><code><a href="class.ui-key.php#ui-key.constants.f6">UI\Key::F6</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f7"><strong><code><a href="class.ui-key.php#ui-key.constants.f7">UI\Key::F7</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f8"><strong><code><a href="class.ui-key.php#ui-key.constants.f8">UI\Key::F8</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f9"><strong><code><a href="class.ui-key.php#ui-key.constants.f9">UI\Key::F9</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f10"><strong><code><a href="class.ui-key.php#ui-key.constants.f10">UI\Key::F10</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f11"><strong><code><a href="class.ui-key.php#ui-key.constants.f11">UI\Key::F11</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.f12"><strong><code><a href="class.ui-key.php#ui-key.constants.f12">UI\Key::F12</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n0"><strong><code><a href="class.ui-key.php#ui-key.constants.n0">UI\Key::N0</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n1"><strong><code><a href="class.ui-key.php#ui-key.constants.n1">UI\Key::N1</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n2"><strong><code><a href="class.ui-key.php#ui-key.constants.n2">UI\Key::N2</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n3"><strong><code><a href="class.ui-key.php#ui-key.constants.n3">UI\Key::N3</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n4"><strong><code><a href="class.ui-key.php#ui-key.constants.n4">UI\Key::N4</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n5"><strong><code><a href="class.ui-key.php#ui-key.constants.n5">UI\Key::N5</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n6"><strong><code><a href="class.ui-key.php#ui-key.constants.n6">UI\Key::N6</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n7"><strong><code><a href="class.ui-key.php#ui-key.constants.n7">UI\Key::N7</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n8"><strong><code><a href="class.ui-key.php#ui-key.constants.n8">UI\Key::N8</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.n9"><strong><code><a href="class.ui-key.php#ui-key.constants.n9">UI\Key::N9</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.ndot"><strong><code><a href="class.ui-key.php#ui-key.constants.ndot">UI\Key::NDot</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.nenter"><strong><code><a href="class.ui-key.php#ui-key.constants.nenter">UI\Key::NEnter</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.nadd"><strong><code><a href="class.ui-key.php#ui-key.constants.nadd">UI\Key::NAdd</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.nsubtract"><strong><code><a href="class.ui-key.php#ui-key.constants.nsubtract">UI\Key::NSubtract</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.nmultiply"><strong><code><a href="class.ui-key.php#ui-key.constants.nmultiply">UI\Key::NMultiply</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    
    
     <dt id="ui-key.constants.ndivide"><strong><code><a href="class.ui-key.php#ui-key.constants.ndivide">UI\Key::NDivide</a></code></strong></dt>
     <dd>
      <span class="simpara"/>
     </dd>
    

   </dl>
  </div>

 </div>

</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ui/ui.key.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.ui-key%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.ui-key&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.ui-key.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ui.php">UI</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ui.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ui.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-point.php" title="UI\Point">UI\Point</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-size.php" title="UI\Size">UI\Size</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-window.php" title="UI\Window">UI\Window</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-control.php" title="UI\Control">UI\Control</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-menu.php" title="UI\Menu">UI\Menu</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-menuitem.php" title="UI\MenuItem">UI\MenuItem</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-area.php" title="UI\Area">UI\Area</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-executor.php" title="UI\Executor">UI\Executor</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-tab.php" title="UI\Controls\Tab">UI\Controls\Tab</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-check.php" title="UI\Controls\Check">UI\Controls\Check</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-button.php" title="UI\Controls\Button">UI\Controls\Button</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-colorbutton.php" title="UI\Controls\ColorButton">UI\Controls\ColorButton</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-label.php" title="UI\Controls\Label">UI\Controls\Label</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-entry.php" title="UI\Controls\Entry">UI\Controls\Entry</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-multilineentry.php" title="UI\Controls\MultilineEntry">UI\Controls\MultilineEntry</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-spin.php" title="UI\Controls\Spin">UI\Controls\Spin</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-slider.php" title="UI\Controls\Slider">UI\Controls\Slider</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-progress.php" title="UI\Controls\Progress">UI\Controls\Progress</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-separator.php" title="UI\Controls\Separator">UI\Controls\Separator</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-combo.php" title="UI\Controls\Combo">UI\Controls\Combo</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-editablecombo.php" title="UI\Controls\EditableCombo">UI\Controls\EditableCombo</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-radio.php" title="UI\Controls\Radio">UI\Controls\Radio</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-picker.php" title="UI\Controls\Picker">UI\Controls\Picker</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-form.php" title="UI\Controls\Form">UI\Controls\Form</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-grid.php" title="UI\Controls\Grid">UI\Controls\Grid</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-group.php" title="UI\Controls\Group">UI\Controls\Group</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-controls-box.php" title="UI\Controls\Box">UI\Controls\Box</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-pen.php" title="UI\Draw\Pen">UI\Draw\Pen</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-path.php" title="UI\Draw\Path">UI\Draw\Path</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-matrix.php" title="UI\Draw\Matrix">UI\Draw\Matrix</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-color.php" title="UI\Draw\Color">UI\Draw\Color</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-stroke.php" title="UI\Draw\Stroke">UI\Draw\Stroke</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-brush.php" title="UI\Draw\Brush">UI\Draw\Brush</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-brush-gradient.php" title="UI\Draw\Brush\Gradient">UI\Draw\Brush\Gradient</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-brush-lineargradient.php" title="UI\Draw\Brush\LinearGradient">UI\Draw\Brush\LinearGradient</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-brush-radialgradient.php" title="UI\Draw\Brush\RadialGradient">UI\Draw\Brush\RadialGradient</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-layout.php" title="UI\Draw\Text\Layout">UI\Draw\Text\Layout</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-font.php" title="UI\Draw\Text\Font">UI\Draw\Text\Font</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-font-descriptor.php" title="UI\Draw\Text\Font\Descriptor">UI\Draw\Text\Font\Descriptor</a>
                        </li>
                                                <li class="">
                            <a href="ref.ui.php" title="UI Functions">UI Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-font-weight.php" title="UI\Draw\Text\Font\Weight">UI\Draw\Text\Font\Weight</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-font-italic.php" title="UI\Draw\Text\Font\Italic">UI\Draw\Text\Font\Italic</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-text-font-stretch.php" title="UI\Draw\Text\Font\Stretch">UI\Draw\Text\Font\Stretch</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-line-cap.php" title="UI\Draw\Line\Cap">UI\Draw\Line\Cap</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-draw-line-join.php" title="UI\Draw\Line\Join">UI\Draw\Line\Join</a>
                        </li>
                                                <li class="current">
                            <a href="class.ui-key.php" title="UI\Key">UI\Key</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-exception-invalidargumentexception.php" title="UI\Exception\InvalidArgumentException">UI\Exception\InvalidArgumentException</a>
                        </li>
                                                <li class="">
                            <a href="class.ui-exception-runtimeexception.php" title="UI\Exception\RuntimeException">UI\Exception\RuntimeException</a>
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
