<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Collator - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.collator.php">
 <link rel="shorturl" href="https://www.php.net/collator">
 <link rel="alternate" href="https://www.php.net/collator" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.intl.php">
 <link rel="prev" href="https://www.php.net/manual/en/intl.examples.basic.php">
 <link rel="next" href="https://www.php.net/manual/en/collator.asort.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.collator.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.collator.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.collator.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.collator.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.collator.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.collator.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.collator.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.collator.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.collator.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.collator.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.collator.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The Collator class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Collator - Manual" />
<meta name="twitter:description" content="The Collator class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Collator - Manual" />
<meta itemprop="description" content="The Collator class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The Collator class" />

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
        <a href="collator.asort.php">
          Collator::asort &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="intl.examples.basic.php">
          &laquo; Basic usage of this extension        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.intl.php'>intl</a></li>      </ul>
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
            <option value='en/class.collator.php' selected="selected">English</option>
            <option value='de/class.collator.php'>German</option>
            <option value='es/class.collator.php'>Spanish</option>
            <option value='fr/class.collator.php'>French</option>
            <option value='it/class.collator.php'>Italian</option>
            <option value='ja/class.collator.php'>Japanese</option>
            <option value='pt_BR/class.collator.php'>Brazilian Portuguese</option>
            <option value='ru/class.collator.php'>Russian</option>
            <option value='tr/class.collator.php'>Turkish</option>
            <option value='uk/class.collator.php'>Ukrainian</option>
            <option value='zh/class.collator.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.collator" class="reference">
 <h1 class="title">The Collator class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8, PECL intl &gt;= 1.0.0)</p>

  
  <div class="section" id="collator.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Provides string comparison capability with support for appropriate
    locale-sensitive sort orderings.
   </p>
  </div>
  

  <div class="section" id="collator.synopsis">
   <h2 class="title">Class synopsis</h2>

   
   <div class="classsynopsis"><div class="classsynopsisinfo">
    
     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Collator</strong></strong>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.default-value"><var class="varname">DEFAULT_VALUE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.primary"><var class="varname">PRIMARY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.secondary"><var class="varname">SECONDARY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.tertiary"><var class="varname">TERTIARY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.default-strength"><var class="varname">DEFAULT_STRENGTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.quaternary"><var class="varname">QUATERNARY</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.identical"><var class="varname">IDENTICAL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.off"><var class="varname">OFF</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.on"><var class="varname">ON</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.shifted"><var class="varname">SHIFTED</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.non-ignorable"><var class="varname">NON_IGNORABLE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.lower-first"><var class="varname">LOWER_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.upper-first"><var class="varname">UPPER_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.french-collation"><var class="varname">FRENCH_COLLATION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.alternate-handling"><var class="varname">ALTERNATE_HANDLING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.case-first"><var class="varname">CASE_FIRST</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.case-level"><var class="varname">CASE_LEVEL</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.normalization-mode"><var class="varname">NORMALIZATION_MODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.strength"><var class="varname">STRENGTH</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.hiragana-quaternary-mode"><var class="varname">HIRAGANA_QUATERNARY_MODE</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.numeric-collation"><var class="varname">NUMERIC_COLLATION</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.sort-regular"><var class="varname">SORT_REGULAR</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.sort-string"><var class="varname">SORT_STRING</var></a></var>;</div>

    <div class="fieldsynopsis"><span class="modifier">public</span>
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.collator.php#collator.constants.sort-numeric"><var class="varname">SORT_NUMERIC</var></a></var>;</div>


    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="collator.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.asort.php" class="methodname">asort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = Collator::SORT_REGULAR</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.compare.php" class="methodname">compare</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string2</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname"><a href="collator.create.php" class="methodname">create</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$locale</code></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.collator.php" class="type Collator">Collator</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.getattribute.php" class="methodname">getAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.geterrorcode.php" class="methodname">getErrorCode</a></span>(): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.geterrormessage.php" class="methodname">getErrorMessage</a></span>(): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.getlocale.php" class="methodname">getLocale</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.getsortkey.php" class="methodname">getSortKey</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.getstrength.php" class="methodname">getStrength</a></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.setattribute.php" class="methodname">setAttribute</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$attribute</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.setstrength.php" class="methodname">setStrength</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$strength</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.sort.php" class="methodname">sort</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = Collator::SORT_REGULAR</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="collator.sortwithsortkeys.php" class="methodname">sortWithSortKeys</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

   }</div>
   

  </div>

  

  

<div class="section" id="intl.collator-constants">
 <h2 class="title">Predefined Constants</h2>
 <p class="para">
  <dl>
   
    <dt id="collator.constants.french-collation">
     <strong><code><a href="class.collator.php#collator.constants.french-collation">Collator::FRENCH_COLLATION</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Sort strings with different accents from the back of the string. This
      attribute is automatically set to
      <em>On</em>
      for the French locales and a few others. Users normally would not need
      to explicitly set this attribute. There is a string comparison
      performance cost when it is set <em>On</em>,
      but sort key length is unaffected. Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
     <p class="para">
      <div class="example" id="example-2474">
       <p><strong>Example #1 FRENCH_COLLATION rules</strong></p>
       <div class="example-contents"><p>
        <ul class="simplelist">
         <li>F=OFF cote < coté < côte < côté </li>
         <li>F=ON cote < côte < coté < côté</li>
        </ul>
       </p></div>
      </div>
     </p>
    </dd>
   

   
    <dt id="collator.constants.alternate-handling">
     <strong><code><a href="class.collator.php#collator.constants.alternate-handling">Collator::ALTERNATE_HANDLING</a></code></strong>
    </dt>
    <dd>
     <p class="para">
      The Alternate attribute is used to control the handling of the so called
      variable characters in the UCA: whitespace, punctuation and symbols. If
      Alternate is set to <em>NonIgnorable</em>
      (N), then differences among these characters are of the same importance
      as differences among letters. If Alternate is set to
      <em>Shifted</em>
      (S), then these characters are of only minor importance. The
      <em>Shifted</em> value is often used in combination with
      <em>Strength</em>
      set to Quaternary. In such a case, whitespace, punctuation, and symbols
      are considered when comparing strings, but only if all other aspects of
      the strings (base letters, accents, and case) are identical. If
      Alternate is not set to Shifted, then there is no difference between a
      Strength of 3 and a Strength of 4. For more information and examples,
      see Variable_Weighting in the
      <a href="https://www.unicode.org/reports/tr10/" class="link external">&raquo;&nbsp;UCA</a>.
      The reason the Alternate values are not simply
      <em>On</em> and <em>Off</em>
      is that additional Alternate values may be added in the future. The UCA
      option Blanked is expressed with Strength set to 3, and Alternate set to
      Shifted. The default for most locales is NonIgnorable. If Shifted is
      selected, it may be slower if there are many strings that are the same
      except for punctuation; sort key length will not be affected unless the
      strength level is also increased.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.non-ignorable">Collator::NON_IGNORABLE</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.shifted">Collator::SHIFTED</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
     <p class="para">
      <div class="example" id="example-2475">
       <p><strong>Example #2 ALTERNATE_HANDLING rules</strong></p>
       <div class="example-contents"><p>
        <ul class="simplelist">
         <li>
         S=3, A=N di Silva < Di Silva < diSilva < U.S.A. < USA
         </li> 
         <li>
         S=3, A=S di Silva = diSilva < Di Silva < U.S.A. = USA
         </li> 
         <li>
         S=4, A=S di Silva < diSilva < Di Silva < U.S.A. < USA
         </li>
        </ul>
       </p></div>
      </div>
     </p>
    </dd>
   

   
    <dt id="collator.constants.case-first">
     <strong><code><a href="class.collator.php#collator.constants.case-first">Collator::CASE_FIRST</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The Case_First attribute is used to control whether uppercase letters
      come before lowercase letters or vice versa, in the absence of other
      differences in the strings. The possible values are
      <em>Uppercase_First</em>
      (U) and <em>Lowercase_First</em>
      (L), plus the standard <em>Default</em>
      and <em>Off</em>.
      There is almost no difference between the Off and Lowercase_First
      options in terms of results, so typically users will not use
      Lowercase_First: only Off or Uppercase_First. (People interested in the
      detailed differences between X and L should consult the <code class="literal">Collation
      Customization</code>). Specifying either L or U won&#039;t affect string comparison
      performance, but will affect the sort key length.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.lower-first">Collator::LOWER_FIRST</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.upper-first">Collator::UPPER_FIRST</a></code></strong></li>
       <li><strong><code>Collator:DEFAULT</code></strong></li>
      </ul>
     </p>
     <p class="para">
      <div class="example" id="example-2476">
       <p><strong>Example #3 CASE_FIRST rules</strong></p>
       <div class="example-contents"><p>
        <ul class="simplelist">
         <li>C=X or C=L "china" < "China" < "denmark" < "Denmark"</li> 
         <li>C=U "China" < "china" < "Denmark" < "denmark"</li>
        </ul>
       </p></div>
      </div>
     </p>
    </dd>
   

   
    <dt id="collator.constants.case-level">
     <strong><code><a href="class.collator.php#collator.constants.case-level">Collator::CASE_LEVEL</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The Case_Level attribute is used when ignoring accents but not case. In
      such a situation, set Strength to be <em>Primary</em>,
      and Case_Level to be <em>On</em>.
      In most locales, this setting is Off by default. There is a small
      string comparison performance and sort key impact if this attribute is
      set to be <em>On</em>.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
     <p class="para">
      <div class="example" id="example-2477">
       <p><strong>Example #4 CASE_LEVEL rules</strong></p>
       <div class="example-contents"><p>
        <ul class="simplelist">
         <li>S=1, E=X role = Role = rôle</li> 
         <li>S=1, E=O role = rôle < Role</li>
        </ul>
       </p></div>
      </div>
     </p>
    </dd>
   

   
    <dt id="collator.constants.normalization-mode">
     <strong><code><a href="class.collator.php#collator.constants.normalization-mode">Collator::NORMALIZATION_MODE</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The Normalization setting determines whether text is thoroughly
      normalized or not in comparison. Even if the setting is off (which is
      the default for many locales), text as represented in common usage will
      compare correctly (for details, see UTN #5). Only if the accent marks
      are in noncanonical order will there be a problem. If the setting is
      <em>On</em>,
      then the best results are guaranteed for all possible text input.
      There is a medium string comparison performance cost if this attribute
      is <em>On</em>,
      depending on the frequency of sequences that require normalization.
      There is no significant effect on sort key length. If the input text is
      known to be in NFD or NFKD normalization forms, there is no need to
      enable this Normalization option.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="collator.constants.strength">
     <strong><code><a href="class.collator.php#collator.constants.strength">Collator::STRENGTH</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The ICU Collation Service supports many levels of comparison (named
      &quot;Levels&quot;, but also known as &quot;Strengths&quot;). Having these categories
      enables ICU to sort strings precisely according to local conventions.
      However, by allowing the levels to be selectively employed, searching
      for a string in text can be performed with various matching conditions.
      For more detailed information, see
      <span class="function"><a href="collator.setstrength.php" class="function">collator_set_strength()</a></span> chapter.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.primary">Collator::PRIMARY</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.secondary">Collator::SECONDARY</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.tertiary">Collator::TERTIARY</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.quaternary">Collator::QUATERNARY</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.identical">Collator::IDENTICAL</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="collator.constants.hiragana-quaternary-mode">
     <strong><code><a href="class.collator.php#collator.constants.hiragana-quaternary-mode">Collator::HIRAGANA_QUATERNARY_MODE</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Compatibility with JIS x 4061 requires the introduction of an additional
      level to distinguish Hiragana and Katakana characters. If compatibility
      with that standard is required, then this attribute should be set
      <em>On</em>,
      and the strength set to Quaternary. This will affect sort key length
      and string comparison string comparison performance.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="collator.constants.numeric-collation">
     <strong><code><a href="class.collator.php#collator.constants.numeric-collation">Collator::NUMERIC_COLLATION</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      When turned on, this attribute generates a collation key for the numeric
      value of substrings of digits. This is a way to get &#039;100&#039; to sort AFTER
      &#039;2&#039;.
     </p>
     <p class="para">
      Possible values are:
      <ul class="simplelist">
       <li><strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>(default)</li>
       <li><strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong></li>
       <li><strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong></li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="collator.constants.default-value">
     <strong><code><a href="class.collator.php#collator.constants.default-value">Collator::DEFAULT_VALUE</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.primary">
     <strong><code><a href="class.collator.php#collator.constants.primary">Collator::PRIMARY</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.secondary">
     <strong><code><a href="class.collator.php#collator.constants.secondary">Collator::SECONDARY</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.tertiary">
     <strong><code><a href="class.collator.php#collator.constants.tertiary">Collator::TERTIARY</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.default-strength">
     <strong><code><a href="class.collator.php#collator.constants.default-strength">Collator::DEFAULT_STRENGTH</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.quaternary">
     <strong><code><a href="class.collator.php#collator.constants.quaternary">Collator::QUATERNARY</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.identical">
     <strong><code><a href="class.collator.php#collator.constants.identical">Collator::IDENTICAL</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.off">
     <strong><code><a href="class.collator.php#collator.constants.off">Collator::OFF</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.on">
     <strong><code><a href="class.collator.php#collator.constants.on">Collator::ON</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.shifted">
     <strong><code><a href="class.collator.php#collator.constants.shifted">Collator::SHIFTED</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.non-ignorable">
     <strong><code><a href="class.collator.php#collator.constants.non-ignorable">Collator::NON_IGNORABLE</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.lower-first">
     <strong><code><a href="class.collator.php#collator.constants.lower-first">Collator::LOWER_FIRST</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.upper-first">
     <strong><code><a href="class.collator.php#collator.constants.upper-first">Collator::UPPER_FIRST</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <span class="simpara">

     </span>
    </dd>
   

   
    <dt id="collator.constants.sort-regular">
     <strong><code><a href="class.collator.php#collator.constants.sort-regular">Collator::SORT_REGULAR</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para"/>
    </dd>
   

   
    <dt id="collator.constants.sort-string">
     <strong><code><a href="class.collator.php#collator.constants.sort-string">Collator::SORT_STRING</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para"/>
    </dd>
   

   
    <dt id="collator.constants.sort-numeric">
     <strong><code><a href="class.collator.php#collator.constants.sort-numeric">Collator::SORT_NUMERIC</a></code></strong>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para"/>
    </dd>
   
  </dl>
 </p>
</div>


  <div class="section" id="collator.changelog">
   <h2 class="title">Changelog</h2>
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.4.0</td>
       <td>
        The class constants are now typed.
       </td>
      </tr>

     </tbody>
    
   </table>

  </div>
 </div>

 






































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="collator.asort.php">Collator::asort</a> — Sort array maintaining index association</li><li><a href="collator.compare.php">Collator::compare</a> — Compare two Unicode strings</li><li><a href="collator.construct.php">Collator::__construct</a> — Create a collator</li><li><a href="collator.create.php">Collator::create</a> — Create a collator</li><li><a href="collator.getattribute.php">Collator::getAttribute</a> — Get collation attribute value</li><li><a href="collator.geterrorcode.php">Collator::getErrorCode</a> — Get collator's last error code</li><li><a href="collator.geterrormessage.php">Collator::getErrorMessage</a> — Get text for collator's last error code</li><li><a href="collator.getlocale.php">Collator::getLocale</a> — Get the locale name of the collator</li><li><a href="collator.getsortkey.php">Collator::getSortKey</a> — Get sorting key for a string</li><li><a href="collator.getstrength.php">Collator::getStrength</a> — Get current collation strength</li><li><a href="collator.setattribute.php">Collator::setAttribute</a> — Set collation attribute</li><li><a href="collator.setstrength.php">Collator::setStrength</a> — Set collation strength</li><li><a href="collator.sort.php">Collator::sort</a> — Sort array using specified collator</li><li><a href="collator.sortwithsortkeys.php">Collator::sortWithSortKeys</a> — Sort array using specified collator and sort keys</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/intl/collator.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.collator%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.collator&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.collator.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.intl.php">intl</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.intl.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="intl.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="intl.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="intl.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="class.collator.php" title="Collator">Collator</a>
                        </li>
                                                <li class="">
                            <a href="class.numberformatter.php" title="NumberFormatter">NumberFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.locale.php" title="Locale">Locale</a>
                        </li>
                                                <li class="">
                            <a href="class.normalizer.php" title="Normalizer">Normalizer</a>
                        </li>
                                                <li class="">
                            <a href="class.messageformatter.php" title="MessageFormatter">MessageFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcalendar.php" title="IntlCalendar">IntlCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlgregoriancalendar.php" title="IntlGregorianCalendar">IntlGregorianCalendar</a>
                        </li>
                                                <li class="">
                            <a href="class.intltimezone.php" title="IntlTimeZone">IntlTimeZone</a>
                        </li>
                                                <li class="">
                            <a href="class.intldateformatter.php" title="IntlDateFormatter">IntlDateFormatter</a>
                        </li>
                                                <li class="">
                            <a href="class.resourcebundle.php" title="ResourceBundle">ResourceBundle</a>
                        </li>
                                                <li class="">
                            <a href="class.spoofchecker.php" title="Spoofchecker">Spoofchecker</a>
                        </li>
                                                <li class="">
                            <a href="class.transliterator.php" title="Transliterator">Transliterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlbreakiterator.php" title="IntlBreakIterator">IntlBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlrulebasedbreakiterator.php" title="IntlRuleBasedBreakIterator">IntlRuleBasedBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlcodepointbreakiterator.php" title="IntlCodePointBreakIterator">IntlCodePointBreakIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.intldatepatterngenerator.php" title="IntlDatePatternGenerator">IntlDatePatternGenerator</a>
                        </li>
                                                <li class="">
                            <a href="class.intlpartsiterator.php" title="IntlPartsIterator">IntlPartsIterator</a>
                        </li>
                                                <li class="">
                            <a href="class.uconverter.php" title="UConverter">UConverter</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.grapheme.php" title="Grapheme Functions">Grapheme Functions</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.idn.php" title="IDN Functions">IDN Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.intlchar.php" title="IntlChar">IntlChar</a>
                        </li>
                                                <li class="">
                            <a href="class.intlexception.php" title="IntlException">IntlException</a>
                        </li>
                                                <li class="">
                            <a href="class.intliterator.php" title="IntlIterator">IntlIterator</a>
                        </li>
                                                <li class="">
                            <a href="ref.intl.php" title="intl Functions">intl Functions</a>
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
