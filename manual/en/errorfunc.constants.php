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

 <link rel="canonical" href="https://www.php.net/manual/en/errorfunc.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/errorfunc.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/errorfunc.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/errorfunc.configuration.php">
 <link rel="next" href="https://www.php.net/manual/en/errorfunc.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/errorfunc.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/errorfunc.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/errorfunc.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/errorfunc.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/errorfunc.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/errorfunc.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/errorfunc.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/errorfunc.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/errorfunc.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/errorfunc.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/errorfunc.constants.php" hreflang="zh">

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
        <a href="errorfunc.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="errorfunc.configuration.php">
          &laquo; Runtime Configuration        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      </ul>
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
            <option value='en/errorfunc.constants.php' selected="selected">English</option>
            <option value='de/errorfunc.constants.php'>German</option>
            <option value='es/errorfunc.constants.php'>Spanish</option>
            <option value='fr/errorfunc.constants.php'>French</option>
            <option value='it/errorfunc.constants.php'>Italian</option>
            <option value='ja/errorfunc.constants.php'>Japanese</option>
            <option value='pt_BR/errorfunc.constants.php'>Brazilian Portuguese</option>
            <option value='ru/errorfunc.constants.php'>Russian</option>
            <option value='tr/errorfunc.constants.php'>Turkish</option>
            <option value='uk/errorfunc.constants.php'>Ukrainian</option>
            <option value='zh/errorfunc.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="errorfunc.constants" class="appendix">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are always available as part of the PHP core.
</p>

 <p class="simpara">
  The following constants (either the corresponding numerical value or their
  symbolic name) are used as a bitmask to specify which errors to report.
  It is possible to use
  <a href="language.operators.bitwise.php" class="link">bitwise operators</a>
  to combine these values or mask out certain types of errors.
 </p>

 <div class="tip"><strong class="tip">Tip</strong>
  <p class="simpara">
   The name of the constants can be used within <var class="filename">php.ini</var>,
   instead of the raw numerical values to which they correspond to.
   However, only the
   <code class="literal">|</code>,
   <code class="literal">~</code>,
   <code class="literal">^</code>,
   <code class="literal">!</code>,
   <code class="literal">&amp;</code>
   operators are understood within <var class="filename">php.ini</var>.
  </p>
 </div>

 <div class="warning"><strong class="warning">Warning</strong>
  <p class="simpara">
   It is not possible to use the symbolic names outside of PHP.
   For example in <var class="filename">httpd.conf</var> the computed bitmask value must be used instead.
  </p>
 </div>

 <dl id="errorfunc.constants.errorlevels">
  
   <dt id="constant.e-error">
    <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fatal run-time errors.
     These indicate errors that can not be recovered from,
     such as a memory allocation problem.
     Execution of the script is halted.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">1</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-warning">
    <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Run-time warnings (non-fatal errors).
     Execution of the script is not halted.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">2</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-parse">
    <strong><code><a href="errorfunc.constants.php#constant.e-parse">E_PARSE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Compile-time parse errors.
     Parse errors should only be generated by the parser.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">4</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-notice">
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Run-time notices.
     Indicate that the script encountered something that could indicate an error,
     but could also happen in the normal course of running a script.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">8</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-core-error">
    <strong><code><a href="errorfunc.constants.php#constant.e-core-error">E_CORE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fatal errors that occur during PHP&#039;s initial startup.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>,
     except it is generated by the core of PHP.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">16</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-core-warning">
    <strong><code><a href="errorfunc.constants.php#constant.e-core-warning">E_CORE_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Warnings (non-fatal errors) that occur during PHP&#039;s initial startup.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>,
     except it is generated by the core of PHP.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">32</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-compile-error">
    <strong><code><a href="errorfunc.constants.php#constant.e-compile-error">E_COMPILE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Fatal compile-time errors.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>,
     except it is generated by the Zend Scripting Engine.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">64</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-compile-warning">
    <strong><code><a href="errorfunc.constants.php#constant.e-compile-warning">E_COMPILE_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Compile-time warnings (non-fatal errors).
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>,
     except it is generated by the Zend Scripting Engine.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">128</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-deprecated">
    <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Run-time deprecation notices.
     Enable this to receive warnings about code
     that will not work in future versions.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">8192</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-user-error">
    <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     User-generated error message.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>,
     except it is generated in PHP code by using the PHP function
     <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span>.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">256</code>
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Usage of this constant with <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span> is
      deprecated as of PHP 8.4.0.
      It is recommended to either <a href="language.exceptions.php" class="link"><code class="literal">throw</code></a> an <span class="exceptionname"><a href="class.exception.php" class="exceptionname">Exception</a></span>
      or call <span class="function"><a href="function.exit.php" class="function">exit()</a></span> instead.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.e-user-warning">
    <strong><code><a href="errorfunc.constants.php#constant.e-user-warning">E_USER_WARNING</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     User-generated warning message.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>,
     except it is generated in PHP code by using the PHP function
     <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span>.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">512</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-user-notice">
    <strong><code><a href="errorfunc.constants.php#constant.e-user-notice">E_USER_NOTICE</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     User-generated notice message.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong>,
     except it is generated in PHP code by using the PHP function
     <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span>.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">1024</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-user-deprecated">
    <strong><code><a href="errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     User-generated deprecation message.
     This is like an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong>,
     except it is generated in PHP code by using the PHP function
     <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span>.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">16384</code>
    </span>
   </dd>
  

  
   <dt id="constant.e-strict">
    <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Run-time suggestions emitted by PHP about the executed code
     to ensure forward compatibility.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">2048</code>
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      This error level is unused,
      and has been deprecated as of PHP 8.4.0.
     </p>
    </div>
   </dd>
  

  
   <dt id="constant.e-recoverable-error">
    <strong><code><a href="errorfunc.constants.php#constant.e-recoverable-error">E_RECOVERABLE_ERROR</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Legacy engine &quot;exceptions&quot; which correspond to catchable fatal error.
     Similar to <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> but must be caught via a
     user defined error handler (see <span class="function"><a href="function.set-error-handler.php" class="function">set_error_handler()</a></span>).
     If not handled, this behaves like <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong>.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">4096</code>
    </span>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      This error level is effectively unused,
      the only case where this can happen is when interpreting an
      <span class="type"><a href="language.types.object.php" class="type object">object</a></span> as a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> fails.
      This can only happen for internal objects.
     </span>
     <span class="simpara">
      The most common example, prior to PHP 8.4.0, is using a
      <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span> instance in a conditional.
     </span>
    </p></blockquote>
   </dd>
  

  
   <dt id="constant.e-all">
    <strong><code><a href="errorfunc.constants.php#constant.e-all">E_ALL</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Bit-mask that contains every single error, warning, and notice.
    </span>
    <span class="simpara">
     Value of the constant: <code class="literal">30719</code>
    </span>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="simpara">
      Prior to PHP 8.4, the constant value was: <code class="literal">32767</code>
     </p>
    </div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ferrorfunc.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=errorfunc.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/errorfunc.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103504">  <div class="votes">
    <div id="Vu103504">
    <a href="/manual/vote-note.php?id=103504&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103504">
    <a href="/manual/vote-note.php?id=103504&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103504" title="57% like this...">
    23
    </div>
  </div>
  <a href="#103504" class="name">
  <strong class="user"><em>Andy at Azurite (co uk)</em></strong></a><a class="genanchor" href="#103504"> &para;</a><div class="date" title="2011-04-16 04:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103504">
<div class="phpcode"><code><span class="html">-1 is also semantically meaningless as a bit field, and only works in 2s-complement numeric representations.  On a 1s-complement system -1 would not set E_ERROR.  On a sign-magnitude system -1 would set nothing at all! (see e.g. <a href="http://en.wikipedia.org/wiki/Ones%27_complement" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Ones%27_complement</a>)<br /><br />If you want to set all bits, ~0 is the correct way to do it.<br /><br />But setting undefined bits could result in undefined behaviour and that means *absolutely anything* could happen :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="121911">  <div class="votes">
    <div id="Vu121911">
    <a href="/manual/vote-note.php?id=121911&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121911">
    <a href="/manual/vote-note.php?id=121911&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121911" title="68% like this...">
    15
    </div>
  </div>
  <a href="#121911" class="name">
  <strong class="user"><em>cl at viazenetti dot de</em></strong></a><a class="genanchor" href="#121911"> &para;</a><div class="date" title="2017-11-24 05:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121911">
<div class="phpcode"><code><span class="html">An other way to get all PHP errors  that are set to be reported. This code will even work, when additional error types are added in future.<br /><br /><span class="default">&lt;?php<br />$pot </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />foreach (</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">decbin</span><span class="keyword">(</span><span class="default">error_reporting</span><span class="keyword">()))) as </span><span class="default">$bit</span><span class="keyword">) {<br />    if (</span><span class="default">$bit </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {<br />        echo </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$pot</span><span class="keyword">), </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'Core'</span><span class="keyword">]). </span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$pot</span><span class="keyword">++;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109430">  <div class="votes">
    <div id="Vu109430">
    <a href="/manual/vote-note.php?id=109430&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109430">
    <a href="/manual/vote-note.php?id=109430&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109430" title="56% like this...">
    18
    </div>
  </div>
  <a href="#109430" class="name">
  <strong class="user"><em>russthom at fivegulf dot com</em></strong></a><a class="genanchor" href="#109430"> &para;</a><div class="date" title="2012-07-16 06:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109430">
<div class="phpcode"><code><span class="html">[Editor's note: fixed E_COMPILE_* cases that incorrectly returned E_CORE_* strings. Thanks josiebgoode.]
<br />
<br />The following code expands on Vlad's code to show all the flags that are set.  if not set, a blank line shows.
<br />
<br /><span class="default">&lt;?php
<br />$errLvl </span><span class="keyword">= </span><span class="default">error_reporting</span><span class="keyword">();
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">15</span><span class="keyword">;  </span><span class="default">$i</span><span class="keyword">++ ) {
<br />    print </span><span class="default">FriendlyErrorType</span><span class="keyword">(</span><span class="default">$errLvl </span><span class="keyword">&amp; </span><span class="default">pow</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">)) . </span><span class="string">"&lt;br&gt;\\n"</span><span class="keyword">; 
<br />}
<br />
<br />function </span><span class="default">FriendlyErrorType</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">)
<br />{
<br />    switch(</span><span class="default">$type</span><span class="keyword">)
<br />    {
<br />        case </span><span class="default">E_ERROR</span><span class="keyword">: </span><span class="comment">// 1 //
<br />            </span><span class="keyword">return </span><span class="string">'E_ERROR'</span><span class="keyword">;
<br />        case </span><span class="default">E_WARNING</span><span class="keyword">: </span><span class="comment">// 2 //
<br />            </span><span class="keyword">return </span><span class="string">'E_WARNING'</span><span class="keyword">;
<br />        case </span><span class="default">E_PARSE</span><span class="keyword">: </span><span class="comment">// 4 //
<br />            </span><span class="keyword">return </span><span class="string">'E_PARSE'</span><span class="keyword">;
<br />        case </span><span class="default">E_NOTICE</span><span class="keyword">: </span><span class="comment">// 8 //
<br />            </span><span class="keyword">return </span><span class="string">'E_NOTICE'</span><span class="keyword">;
<br />        case </span><span class="default">E_CORE_ERROR</span><span class="keyword">: </span><span class="comment">// 16 //
<br />            </span><span class="keyword">return </span><span class="string">'E_CORE_ERROR'</span><span class="keyword">;
<br />        case </span><span class="default">E_CORE_WARNING</span><span class="keyword">: </span><span class="comment">// 32 //
<br />            </span><span class="keyword">return </span><span class="string">'E_CORE_WARNING'</span><span class="keyword">;
<br />        case </span><span class="default">E_COMPILE_ERROR</span><span class="keyword">: </span><span class="comment">// 64 //
<br />            </span><span class="keyword">return </span><span class="string">'E_COMPILE_ERROR'</span><span class="keyword">;
<br />        case </span><span class="default">E_COMPILE_WARNING</span><span class="keyword">: </span><span class="comment">// 128 //
<br />            </span><span class="keyword">return </span><span class="string">'E_COMPILE_WARNING'</span><span class="keyword">;
<br />        case </span><span class="default">E_USER_ERROR</span><span class="keyword">: </span><span class="comment">// 256 //
<br />            </span><span class="keyword">return </span><span class="string">'E_USER_ERROR'</span><span class="keyword">;
<br />        case </span><span class="default">E_USER_WARNING</span><span class="keyword">: </span><span class="comment">// 512 //
<br />            </span><span class="keyword">return </span><span class="string">'E_USER_WARNING'</span><span class="keyword">;
<br />        case </span><span class="default">E_USER_NOTICE</span><span class="keyword">: </span><span class="comment">// 1024 //
<br />            </span><span class="keyword">return </span><span class="string">'E_USER_NOTICE'</span><span class="keyword">;
<br />        case </span><span class="default">E_STRICT</span><span class="keyword">: </span><span class="comment">// 2048 //
<br />            </span><span class="keyword">return </span><span class="string">'E_STRICT'</span><span class="keyword">;
<br />        case </span><span class="default">E_RECOVERABLE_ERROR</span><span class="keyword">: </span><span class="comment">// 4096 //
<br />            </span><span class="keyword">return </span><span class="string">'E_RECOVERABLE_ERROR'</span><span class="keyword">;
<br />        case </span><span class="default">E_DEPRECATED</span><span class="keyword">: </span><span class="comment">// 8192 //
<br />            </span><span class="keyword">return </span><span class="string">'E_DEPRECATED'</span><span class="keyword">;
<br />        case </span><span class="default">E_USER_DEPRECATED</span><span class="keyword">: </span><span class="comment">// 16384 //
<br />            </span><span class="keyword">return </span><span class="string">'E_USER_DEPRECATED'</span><span class="keyword">;
<br />    }
<br />    return </span><span class="string">""</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126465">  <div class="votes">
    <div id="Vu126465">
    <a href="/manual/vote-note.php?id=126465&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126465">
    <a href="/manual/vote-note.php?id=126465&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126465" title="61% like this...">
    13
    </div>
  </div>
  <a href="#126465" class="name">
  <strong class="user"><em>fadhilinjagi at gmail dot com</em></strong></a><a class="genanchor" href="#126465"> &para;</a><div class="date" title="2021-09-29 06:57"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126465">
<div class="phpcode"><code><span class="html">A simple and neat way to get the error level from the error code. You can even customize the error level names further.<br /><br /><span class="default">&lt;?php<br />$exceptions </span><span class="keyword">= [<br />        </span><span class="default">E_ERROR </span><span class="keyword">=&gt; </span><span class="string">"E_ERROR"</span><span class="keyword">,<br />        </span><span class="default">E_WARNING </span><span class="keyword">=&gt; </span><span class="string">"E_WARNING"</span><span class="keyword">,<br />        </span><span class="default">E_PARSE </span><span class="keyword">=&gt; </span><span class="string">"E_PARSE"</span><span class="keyword">,<br />        </span><span class="default">E_NOTICE </span><span class="keyword">=&gt; </span><span class="string">"E_NOTICE"</span><span class="keyword">,<br />        </span><span class="default">E_CORE_ERROR </span><span class="keyword">=&gt; </span><span class="string">"E_CORE_ERROR"</span><span class="keyword">,<br />        </span><span class="default">E_CORE_WARNING </span><span class="keyword">=&gt; </span><span class="string">"E_CORE_WARNING"</span><span class="keyword">,<br />        </span><span class="default">E_COMPILE_ERROR </span><span class="keyword">=&gt; </span><span class="string">"E_COMPILE_ERROR"</span><span class="keyword">,<br />        </span><span class="default">E_COMPILE_WARNING </span><span class="keyword">=&gt; </span><span class="string">"E_COMPILE_WARNING"</span><span class="keyword">,<br />        </span><span class="default">E_USER_ERROR </span><span class="keyword">=&gt; </span><span class="string">"E_USER_ERROR"</span><span class="keyword">,<br />        </span><span class="default">E_USER_WARNING </span><span class="keyword">=&gt; </span><span class="string">"E_USER_WARNING"</span><span class="keyword">,<br />        </span><span class="default">E_USER_NOTICE </span><span class="keyword">=&gt; </span><span class="string">"E_USER_NOTICE"</span><span class="keyword">,<br />        </span><span class="default">E_STRICT </span><span class="keyword">=&gt; </span><span class="string">"E_STRICT"</span><span class="keyword">,<br />        </span><span class="default">E_RECOVERABLE_ERROR </span><span class="keyword">=&gt; </span><span class="string">"E_RECOVERABLE_ERROR"</span><span class="keyword">,<br />        </span><span class="default">E_DEPRECATED </span><span class="keyword">=&gt; </span><span class="string">"E_DEPRECATED"</span><span class="keyword">,<br />        </span><span class="default">E_USER_DEPRECATED </span><span class="keyword">=&gt; </span><span class="string">"E_USER_DEPRECATED"</span><span class="keyword">,<br />        </span><span class="default">E_ALL </span><span class="keyword">=&gt; </span><span class="string">"E_ALL"<br /></span><span class="keyword">];<br /><br />echo </span><span class="default">$exceptions</span><span class="keyword">[</span><span class="string">"1"</span><span class="keyword">];<br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">256</span><span class="keyword">;<br />echo </span><span class="default">$exceptions</span><span class="keyword">[</span><span class="default">$code</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />Output:  <br />E_ERROR<br />E_USER_ERROR<br /><br />This will need updating when PHP updates the error level names. Otherwise, it works just fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="123901">  <div class="votes">
    <div id="Vu123901">
    <a href="/manual/vote-note.php?id=123901&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123901">
    <a href="/manual/vote-note.php?id=123901&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123901" title="60% like this...">
    13
    </div>
  </div>
  <a href="#123901" class="name">
  <strong class="user"><em>bbrokman at gmail dot com</em></strong></a><a class="genanchor" href="#123901"> &para;</a><div class="date" title="2019-06-01 11:14"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123901">
<div class="phpcode"><code><span class="html">A neat way to have a place in code to control error reporting configuration :)<br /><br /><span class="default">&lt;?php<br /><br />$errorsActive </span><span class="keyword">= [<br />    </span><span class="default">E_ERROR             </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_WARNING           </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_PARSE             </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_NOTICE            </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_CORE_ERROR        </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_CORE_WARNING      </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_COMPILE_ERROR     </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_COMPILE_WARNING   </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_USER_ERROR        </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_USER_WARNING      </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_USER_NOTICE       </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_STRICT            </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_RECOVERABLE_ERROR </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_DEPRECATED        </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">E_USER_DEPRECATED   </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />    </span><span class="default">E_ALL               </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />];<br /><br /></span><span class="default">error_reporting</span><span class="keyword">(<br />    </span><span class="default">array_sum</span><span class="keyword">(<br />        </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$errorsActive</span><span class="keyword">, </span><span class="default">$search </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />    )<br />);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119731">  <div class="votes">
    <div id="Vu119731">
    <a href="/manual/vote-note.php?id=119731&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119731">
    <a href="/manual/vote-note.php?id=119731&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119731" title="57% like this...">
    6
    </div>
  </div>
  <a href="#119731" class="name">
  <strong class="user"><em>kezzyhko at NOSPAM dot semysha dot ru</em></strong></a><a class="genanchor" href="#119731"> &para;</a><div class="date" title="2016-08-13 06:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119731">
<div class="phpcode"><code><span class="html">As for me, the best way to get error name by int value is that. And it's works fine for me ;)<br /><span class="default">&lt;?php<br /><br />array_flip</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'Core'</span><span class="keyword">], </span><span class="default">1</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">))[</span><span class="default">$type</span><span class="keyword">];<br /><br /></span><span class="comment">//the same in readable form<br /></span><span class="default">array_flip</span><span class="keyword">(<br />    </span><span class="default">array_slice</span><span class="keyword">(<br />        </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)[</span><span class="string">'Core'</span><span class="keyword">],<br />        </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">15</span><span class="keyword">,<br />        </span><span class="default">true<br />    </span><span class="keyword">)<br />)[</span><span class="default">$type</span><span class="keyword">]<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126451">  <div class="votes">
    <div id="Vu126451">
    <a href="/manual/vote-note.php?id=126451&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126451">
    <a href="/manual/vote-note.php?id=126451&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126451" title="54% like this...">
    2
    </div>
  </div>
  <a href="#126451" class="name">
  <strong class="user"><em>kaioker</em></strong></a><a class="genanchor" href="#126451"> &para;</a><div class="date" title="2021-09-22 07:47"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126451">
<div class="phpcode"><code><span class="html">super simple error code to human readable conversion:<br /><br />function prettycode($code){<br />    return $code == 0 ? "FATAL" : array_search($code, get_defined_constants(true)['Core']);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123958">  <div class="votes">
    <div id="Vu123958">
    <a href="/manual/vote-note.php?id=123958&amp;page=errorfunc.constants&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123958">
    <a href="/manual/vote-note.php?id=123958&amp;page=errorfunc.constants&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123958" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#123958" class="name">
  <strong class="user"><em>ErikBachmann</em></strong></a><a class="genanchor" href="#123958"> &para;</a><div class="date" title="2019-06-19 10:39"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123958">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getErrorTypeByValue</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">) {
<br />    </span><span class="default">$constants  </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />
<br />    foreach ( </span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'Core'</span><span class="keyword">] as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">) { </span><span class="comment">// Each Core constant
<br />        </span><span class="keyword">if ( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^E_/'</span><span class="keyword">, </span><span class="default">$key  </span><span class="keyword">) ) {    </span><span class="comment">// Check error constants
<br />            </span><span class="keyword">if ( </span><span class="default">$type </span><span class="keyword">== </span><span class="default">$value </span><span class="keyword">) 
<br />                return( </span><span class="string">"</span><span class="default">$key</span><span class="string">=</span><span class="default">$value</span><span class="string">"</span><span class="keyword">);
<br />        }
<br />    }
<br />}   </span><span class="comment">// getErrorTypeByValue() 
<br />
<br /></span><span class="keyword">echo </span><span class="string">"["</span><span class="keyword">.</span><span class="default">getErrorTypeByValue</span><span class="keyword">( </span><span class="default">1 </span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />echo </span><span class="string">"["</span><span class="keyword">.</span><span class="default">getErrorTypeByValue</span><span class="keyword">( </span><span class="default">0 </span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />echo </span><span class="string">"["</span><span class="keyword">.</span><span class="default">getErrorTypeByValue</span><span class="keyword">( </span><span class="default">8 </span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will give
<br />    [E_ERROR=1]
<br />    []
<br />    [E_NOTICE=8]</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=errorfunc.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/errorfunc.constants.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.errorfunc.php">Error Handling</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.errorfunc.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="errorfunc.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="errorfunc.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="errorfunc.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="ref.errorfunc.php" title="Error Handling Functions">Error Handling Functions</a>
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
