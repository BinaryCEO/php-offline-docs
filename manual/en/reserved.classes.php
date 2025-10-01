<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Classes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/reserved.classes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/reserved.classes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/reserved.classes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reserved.php">
 <link rel="prev" href="https://www.php.net/manual/en/reserved.keywords.php">
 <link rel="next" href="https://www.php.net/manual/en/reserved.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/reserved.classes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/reserved.classes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/reserved.classes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/reserved.classes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/reserved.classes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/reserved.classes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/reserved.classes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/reserved.classes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/reserved.classes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/reserved.classes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/reserved.classes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Classes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Classes - Manual" />
<meta name="twitter:description" content="Predefined Classes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Classes - Manual" />
<meta itemprop="description" content="Predefined Classes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Classes" />

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
        <a href="reserved.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reserved.keywords.php">
          &laquo; List of Keywords        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='reserved.php'>List of Reserved Words</a></li>      </ul>
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
            <option value='en/reserved.classes.php' selected="selected">English</option>
            <option value='de/reserved.classes.php'>German</option>
            <option value='es/reserved.classes.php'>Spanish</option>
            <option value='fr/reserved.classes.php'>French</option>
            <option value='it/reserved.classes.php'>Italian</option>
            <option value='ja/reserved.classes.php'>Japanese</option>
            <option value='pt_BR/reserved.classes.php'>Brazilian Portuguese</option>
            <option value='ru/reserved.classes.php'>Russian</option>
            <option value='tr/reserved.classes.php'>Turkish</option>
            <option value='uk/reserved.classes.php'>Ukrainian</option>
            <option value='zh/reserved.classes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="reserved.classes" class="sect1">
   <h2 class="title">Predefined Classes</h2>
   <p class="para">
    This section lists standard predefined classes. Miscellaneous extensions
    define other classes which are described in their reference.
   </p>

   <div class="sect2" id="reserved.classes.standard">
    <h3 class="title">Standard Defined Classes</h3>

    <p class="simpara">
     These classes are defined in the standard set of functions included
     in the PHP build.
    </p>

    <dl>
     
      <dt><span class="classname"><a href="class.directory.php" class="classname">Directory</a></span></dt>
      <dd>
       <span class="simpara">
        Created by <span class="function"><a href="function.dir.php" class="function">dir()</a></span>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span></dt>
      <dd>
       <span class="simpara">
        A generic empty class created as a result of
        <a href="language.types.object.php#language.types.object.casting" class="link">typecasting
        to object</a> or various standard functions.
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.php-incomplete-class.php" class="classname">__PHP_Incomplete_Class</a></span></dt>
      <dd>
       <span class="simpara">
        Possibly created by <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.exception.php" class="classname">Exception</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.errorexception.php" class="classname">ErrorException</a></span></dt>
      <dd>
       <span class="simpara">

       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.php-user-filter.php" class="classname">php_user_filter</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.closure.php" class="classname">Closure</a></span></dt>
      <dd>
       <span class="simpara">
        The predefined final class <span class="classname"><a href="class.closure.php" class="classname">Closure</a></span>
        is used for representing <a href="functions.anonymous.php" class="link">anonymous functions</a>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.generator.php" class="classname">Generator</a></span></dt>
      <dd>
       <span class="simpara">
        The predefined final class <span class="classname"><a href="class.generator.php" class="classname">Generator</a></span>
        is used for representing <a href="language.generators.php" class="link">generators</a>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.arithmeticerror.php" class="classname">ArithmeticError</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.assertionerror.php" class="classname">AssertionError</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.divisionbyzeroerror.php" class="classname">DivisionByZeroError</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.error.php" class="classname">Error</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.throwable.php" class="classname">Throwable</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
     
      <dt><span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span></dt>
      <dd>
       <span class="simpara">
       </span>
      </dd>
     
    </dl>
   </div>

   <div class="sect2" id="reserved.classes.special">
    <h3 class="title">Special classes</h3>
    
    <p class="simpara">
     Following identifiers may not be used as a class name as they have
     special purpose.
    </p>
    
    <dl>
     
      <dt><span class="classname"><strong class="classname">self</strong></span></dt>
      <dd>
       <span class="simpara">
        <a href="language.oop5.paamayim-nekudotayim.php" class="link">Current
        class</a>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><strong class="classname">static</strong></span></dt>
      <dd>
       <span class="simpara">
        <a href="language.oop5.late-static-bindings.php" class="link">Current class in
        runtime</a>.
       </span>
      </dd>
     
     
      <dt><span class="classname"><strong class="classname">parent</strong></span></dt>
      <dd>
       <span class="simpara">
        <a href="language.oop5.paamayim-nekudotayim.php" class="link">Parent
        class</a>.
       </span>
      </dd>
     
    </dl>
   </div>

  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/reserved.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Freserved.classes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=reserved.classes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.classes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113971">  <div class="votes">
    <div id="Vu113971">
    <a href="/manual/vote-note.php?id=113971&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113971">
    <a href="/manual/vote-note.php?id=113971&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113971" title="74% like this...">
    21
    </div>
  </div>
  <a href="#113971" class="name">
  <strong class="user"><em>wyattstorch42 at outlook dot com</em></strong></a><a class="genanchor" href="#113971"> &para;</a><div class="date" title="2013-12-24 01:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113971">
<div class="phpcode"><code><span class="html">If you call var_export() on an instance of stdClass, it attempts to export it using ::__set_state(), which, for some reason, is not implemented in stdClass.<br /><br />However, casting an associative array to an object usually produces the same effect (at least, it does in my case). So I wrote an improved_var_export() function to convert instances of stdClass to (object) array () calls. If you choose to export objects of any other class, I'd advise you to implement ::__set_state().<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * An implementation of var_export() that is compatible with instances<br /> * of stdClass.<br /> * @param mixed $variable The variable you want to export<br /> * @param bool $return If used and set to true, improved_var_export()<br /> *     will return the variable representation instead of outputting it.<br /> * @return mixed|null Returns the variable representation when the<br /> *     return parameter is used and evaluates to TRUE. Otherwise, this<br /> *     function will return NULL.<br /> */<br /></span><span class="keyword">function </span><span class="default">improved_var_export </span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">, </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    if (</span><span class="default">$variable </span><span class="keyword">instanceof </span><span class="default">stdClass</span><span class="keyword">) {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'(object) '</span><span class="keyword">.</span><span class="default">improved_var_export</span><span class="keyword">(</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">);<br />    } else if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">)) {<br />        </span><span class="default">$array </span><span class="keyword">= array ();<br />        foreach (</span><span class="default">$variable </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">' =&gt; '</span><span class="keyword">.</span><span class="default">improved_var_export</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        }<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'array ('</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">).</span><span class="string">')'</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$variable</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    }<br /><br />    if (!</span><span class="default">$return</span><span class="keyword">) {<br />        print </span><span class="default">$result</span><span class="keyword">;<br />        return </span><span class="default">null</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Example usage:<br /></span><span class="default">$obj </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= </span><span class="string">'abc'</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">other </span><span class="keyword">= </span><span class="default">6.2</span><span class="keyword">;<br /></span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">arr </span><span class="keyword">= array (</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /><br /></span><span class="default">improved_var_export</span><span class="keyword">((object) array (<br />    </span><span class="string">'prop1' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="string">'prop2' </span><span class="keyword">=&gt; </span><span class="default">$obj</span><span class="keyword">,<br />    </span><span class="string">'assocArray' </span><span class="keyword">=&gt; array (<br />        </span><span class="string">'apple' </span><span class="keyword">=&gt; </span><span class="string">'good'</span><span class="keyword">,<br />        </span><span class="string">'orange' </span><span class="keyword">=&gt; </span><span class="string">'great'<br />    </span><span class="keyword">)<br />));<br /><br /></span><span class="comment">/* Output:<br />(object) array ('prop1' =&gt; true, 'prop2' =&gt; (object) array ('test' =&gt; 'abc', 'other' =&gt; 6.2, 'arr' =&gt; array (0 =&gt; 1, 1 =&gt; 2, 2 =&gt; 3)), 'assocArray' =&gt; array ('apple' =&gt; 'good', 'orange' =&gt; 'great'))<br />*/<br /></span><span class="default">?&gt;<br /></span><br />Note: This function spits out a single line of code, which is useful to save in a cache file to include/eval. It isn't formatted for readability. If you want to print a readable version for debugging purposes, then I would suggest print_r() or var_dump().</span></code></div>
  </div>
 </div>
  <div class="note" id="105404">  <div class="votes">
    <div id="Vu105404">
    <a href="/manual/vote-note.php?id=105404&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105404">
    <a href="/manual/vote-note.php?id=105404&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105404" title="66% like this...">
    22
    </div>
  </div>
  <a href="#105404" class="name">
  <strong class="user"><em>spark at limao dot com dot br</em></strong></a><a class="genanchor" href="#105404"> &para;</a><div class="date" title="2011-08-15 02:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105404">
<div class="phpcode"><code><span class="html">if you want a Dynamic class you can extend from, add atributes AND methods on the fly you can use this:<br /><span class="default">&lt;?php<br />    </span><span class="keyword">class </span><span class="default">Dynamic </span><span class="keyword">extends </span><span class="default">stdClass</span><span class="keyword">{<br />        public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">){<br />            if(!isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">})) throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Call to undefined method "</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">).</span><span class="string">"::"</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">"()"</span><span class="keyword">);<br />            </span><span class="default">$subject </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">};<br />            </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$subject</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">);<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />this will accept both arrays, strings and Closures:<br /><span class="default">&lt;?php<br />    $dynamic</span><span class="keyword">-&gt;</span><span class="default">myMethod </span><span class="keyword">= </span><span class="string">"thatFunction"</span><span class="keyword">;<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">hisMethod </span><span class="keyword">= array(</span><span class="default">$instance</span><span class="keyword">,</span><span class="string">"aMethod"</span><span class="keyword">);<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">newMethod </span><span class="keyword">= array(</span><span class="default">SomeClass</span><span class="keyword">,</span><span class="string">"staticMethod"</span><span class="keyword">);<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod </span><span class="keyword">= function(){<br />        echo </span><span class="string">"Hey there"</span><span class="keyword">;<br />    };<br /></span><span class="default">?&gt;<br /></span><br />then call them away =D</span></code></div>
  </div>
 </div>
  <div class="note" id="121622">  <div class="votes">
    <div id="Vu121622">
    <a href="/manual/vote-note.php?id=121622&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121622">
    <a href="/manual/vote-note.php?id=121622&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121622" title="76% like this...">
    11
    </div>
  </div>
  <a href="#121622" class="name">
  <strong class="user"><em>xzero at elite7hackers dot net</em></strong></a><a class="genanchor" href="#121622"> &para;</a><div class="date" title="2017-09-08 08:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121622">
<div class="phpcode"><code><span class="html">There comes improved version of amazing snippet posted by (spark at limao dot com dot br)  which allows dynamic methods generations and works as versatile extension of StdClass:<br /><br />This one is faster, optimised for closures, and will work only with closures. Compatible: &gt;= PHP 5.6<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dynamic </span><span class="keyword">extends </span><span class="default">\stdClass<br /></span><span class="keyword">{<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />        if ( ! isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">})) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Call to undefined method " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"::" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"()"</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">}-&gt;</span><span class="default">__invoke</span><span class="keyword">(... </span><span class="default">$params</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage examples:<br /><br /><span class="default">&lt;?php<br />$dynamic                </span><span class="keyword">= new </span><span class="default">Dynamic</span><span class="keyword">();<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod </span><span class="keyword">= function () {<br />    echo </span><span class="string">"Hey there"</span><span class="keyword">;<br />};<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt     </span><span class="keyword">= function (</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">) {<br />    return </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">); </span><span class="comment">// random_int($min, $max); // &lt;-- PHP7+<br /></span><span class="keyword">};<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod</span><span class="keyword">()<br />);<br /></span><span class="default">?&gt;<br /></span><br />This will accept arrays, strings and Closures but is a bit slower due to call_user_func_array<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dynamic </span><span class="keyword">extends </span><span class="default">\stdClass<br /></span><span class="keyword">{<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />        if ( ! isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">})) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Call to undefined method " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"::" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"()"</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">}, </span><span class="default">$params</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage examples:<br /><span class="default">&lt;?php<br />$dynamic                </span><span class="keyword">= new </span><span class="default">Dynamic</span><span class="keyword">();<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">myMethod      </span><span class="keyword">= </span><span class="string">"thatFunction"</span><span class="keyword">;<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">hisMethod     </span><span class="keyword">= array(</span><span class="default">$dynamic</span><span class="keyword">, </span><span class="string">"randomInt"</span><span class="keyword">);<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">newMethod     </span><span class="keyword">= array(</span><span class="default">SomeClass</span><span class="keyword">, </span><span class="string">"staticMethod"</span><span class="keyword">);<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod </span><span class="keyword">= function () {<br />    echo </span><span class="string">"Hey there"</span><span class="keyword">;<br />};<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt     </span><span class="keyword">= function (</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">) {<br />    return </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">); </span><span class="comment">// random_int($min, $max); // &lt;-- PHP7+<br /></span><span class="keyword">};<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod</span><span class="keyword">(),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">hisMethod</span><span class="keyword">()<br />);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="23601">  <div class="votes">
    <div id="Vu23601">
    <a href="/manual/vote-note.php?id=23601&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23601">
    <a href="/manual/vote-note.php?id=23601&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23601" title="62% like this...">
    7
    </div>
  </div>
  <a href="#23601" class="name">
  <strong class="user"><em>unknown</em></strong></a><a class="genanchor" href="#23601"> &para;</a><div class="date" title="2002-07-23 10:29"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23601">
<div class="phpcode"><code><span class="html">It's handy to have a array of the reserved classes.....
<br />var_dump (get_declared_classes ());</span></code></div>
  </div>
 </div>
  <div class="note" id="121621">  <div class="votes">
    <div id="Vu121621">
    <a href="/manual/vote-note.php?id=121621&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121621">
    <a href="/manual/vote-note.php?id=121621&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121621" title="66% like this...">
    3
    </div>
  </div>
  <a href="#121621" class="name">
  <strong class="user"><em>xzero at elite7hackers dot net</em></strong></a><a class="genanchor" href="#121621"> &para;</a><div class="date" title="2017-09-08 08:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121621">
<div class="phpcode"><code><span class="html">There comes improved version of amazing snippet posted by which allows dynamic methods generations and works as versatile extension of StdClass:<br /><br />This one is faster, optimised for closures, and will work only with closures. Compatible: &gt;= PHP 5.6<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dynamic </span><span class="keyword">extends </span><span class="default">\stdClass<br /></span><span class="keyword">{<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />        if ( ! isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">})) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Call to undefined method " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"::" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"()"</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">}-&gt;</span><span class="default">__invoke</span><span class="keyword">(... </span><span class="default">$params</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage examples:<br /><br /><span class="default">&lt;?php<br />$dynamic                </span><span class="keyword">= new </span><span class="default">Dynamic</span><span class="keyword">();<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod </span><span class="keyword">= function () {<br />    echo </span><span class="string">"Hey there"</span><span class="keyword">;<br />};<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt     </span><span class="keyword">= function (</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">) {<br />    return </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">); </span><span class="comment">// random_int($min, $max); // &lt;-- PHP7+<br /></span><span class="keyword">};<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod</span><span class="keyword">()<br />);<br /></span><span class="default">?&gt;<br /></span><br />This will accept arrays, strings and Closures but is a bit slower due to call_user_func_array<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Dynamic </span><span class="keyword">extends </span><span class="default">\stdClass<br /></span><span class="keyword">{<br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />        if ( ! isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">})) {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Call to undefined method " </span><span class="keyword">. </span><span class="default">__CLASS__ </span><span class="keyword">. </span><span class="string">"::" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"()"</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$key</span><span class="keyword">}, </span><span class="default">$params</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage examples:<br /><span class="default">&lt;?php<br />$dynamic                </span><span class="keyword">= new </span><span class="default">Dynamic</span><span class="keyword">();<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">myMethod      </span><span class="keyword">= </span><span class="string">"thatFunction"</span><span class="keyword">;<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">hisMethod     </span><span class="keyword">= array(</span><span class="default">$dynamic</span><span class="keyword">, </span><span class="string">"randomInt"</span><span class="keyword">);<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">newMethod     </span><span class="keyword">= array(</span><span class="default">SomeClass</span><span class="keyword">, </span><span class="string">"staticMethod"</span><span class="keyword">);<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod </span><span class="keyword">= function () {<br />    echo </span><span class="string">"Hey there"</span><span class="keyword">;<br />};<br /></span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt     </span><span class="keyword">= function (</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">) {<br />    return </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">, </span><span class="default">$max</span><span class="keyword">); </span><span class="comment">// random_int($min, $max); // &lt;-- PHP7+<br /></span><span class="keyword">};<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">randomInt</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">anotherMethod</span><span class="keyword">(),<br />    </span><span class="default">$dynamic</span><span class="keyword">-&gt;</span><span class="default">hisMethod</span><span class="keyword">()<br />);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114427">  <div class="votes">
    <div id="Vu114427">
    <a href="/manual/vote-note.php?id=114427&amp;page=reserved.classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114427">
    <a href="/manual/vote-note.php?id=114427&amp;page=reserved.classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114427" title="56% like this...">
    3
    </div>
  </div>
  <a href="#114427" class="name">
  <strong class="user"><em>Ashley Dambra</em></strong></a><a class="genanchor" href="#114427"> &para;</a><div class="date" title="2014-02-19 06:43"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114427">
<div class="phpcode"><code><span class="html">Here a simple class that allow to set anonymous function. It's an optimised class of stdClass.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">stdObject </span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(array </span><span class="default">$arguments </span><span class="keyword">= array()) {<br />        if (!empty(</span><span class="default">$arguments</span><span class="keyword">)) {<br />            foreach (</span><span class="default">$arguments </span><span class="keyword">as </span><span class="default">$property </span><span class="keyword">=&gt; </span><span class="default">$argument</span><span class="keyword">) {<br />                if (</span><span class="default">$argument </span><span class="keyword">instanceOf </span><span class="default">Closure</span><span class="keyword">) {<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$argument</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">} = </span><span class="default">$argument</span><span class="keyword">;<br />                }<br />            }<br />        }<br />    }<br /><br />    public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$method</span><span class="keyword">, </span><span class="default">$arguments</span><span class="keyword">) {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">}) &amp;&amp; </span><span class="default">is_callable</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">})) {<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;{</span><span class="default">$method</span><span class="keyword">}, </span><span class="default">$arguments</span><span class="keyword">);<br />        } else {<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Fatal error: Call to undefined method stdObject::</span><span class="keyword">{</span><span class="default">$method</span><span class="keyword">}</span><span class="string">()"</span><span class="keyword">);<br />        }<br />    }<br />}<br /><br /></span><span class="default">$person </span><span class="keyword">= new </span><span class="default">stdObject</span><span class="keyword">(array(<br />    </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"nick"</span><span class="keyword">,<br />    </span><span class="string">"age" </span><span class="keyword">=&gt; </span><span class="default">23</span><span class="keyword">,<br />    </span><span class="string">"friends" </span><span class="keyword">=&gt; array(</span><span class="string">"frank"</span><span class="keyword">, </span><span class="string">"sally"</span><span class="keyword">, </span><span class="string">"aaron"</span><span class="keyword">),<br />    </span><span class="string">"sayHi" </span><span class="keyword">=&gt; function() {<br />        return </span><span class="string">"Hello there"</span><span class="keyword">;<br />    }<br />));<br /><br /></span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">sayHi2 </span><span class="keyword">= function() {<br />    return </span><span class="string">"Hello there 2"</span><span class="keyword">;<br />};<br /><br /></span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">test </span><span class="keyword">= function() {<br />    return </span><span class="string">"test"</span><span class="keyword">;<br />};<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">(), </span><span class="default">$person</span><span class="keyword">-&gt;</span><span class="default">sayHi2</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=reserved.classes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/reserved.classes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reserved.php">List of Reserved Words</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="reserved.keywords.php" title="List of Keywords">List of Keywords</a>
                        </li>
                                                <li class="current">
                            <a href="reserved.classes.php" title="Predefined Classes">Predefined Classes</a>
                        </li>
                                                <li class="">
                            <a href="reserved.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="reserved.other-reserved-words.php" title="List of other reserved words">List of other reserved words</a>
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
