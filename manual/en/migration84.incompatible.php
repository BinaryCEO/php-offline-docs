<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Backward Incompatible Changes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration84.incompatible.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration84.incompatible.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration84.incompatible.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration84.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration84.constants.php">
 <link rel="next" href="https://www.php.net/manual/en/migration84.deprecated.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration84.incompatible.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration84.incompatible.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration84.incompatible.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration84.incompatible.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration84.incompatible.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration84.incompatible.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration84.incompatible.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration84.incompatible.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration84.incompatible.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration84.incompatible.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration84.incompatible.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Backward Incompatible Changes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Backward Incompatible Changes - Manual" />
<meta name="twitter:description" content="Backward Incompatible Changes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Backward Incompatible Changes - Manual" />
<meta itemprop="description" content="Backward Incompatible Changes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Backward Incompatible Changes" />

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
        <a href="migration84.deprecated.php">
          Deprecated Features &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration84.constants.php">
          &laquo; New Global Constants        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration84.php'>Migrating from PHP 8.3.x to PHP 8.4.x</a></li>      </ul>
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
            <option value='en/migration84.incompatible.php' selected="selected">English</option>
            <option value='de/migration84.incompatible.php'>German</option>
            <option value='es/migration84.incompatible.php'>Spanish</option>
            <option value='fr/migration84.incompatible.php'>French</option>
            <option value='it/migration84.incompatible.php'>Italian</option>
            <option value='ja/migration84.incompatible.php'>Japanese</option>
            <option value='pt_BR/migration84.incompatible.php'>Brazilian Portuguese</option>
            <option value='ru/migration84.incompatible.php'>Russian</option>
            <option value='tr/migration84.incompatible.php'>Turkish</option>
            <option value='uk/migration84.incompatible.php'>Ukrainian</option>
            <option value='zh/migration84.incompatible.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration84.incompatible" class="sect1">
 <h2 class="title">Backward Incompatible Changes</h2>

 <p class="simpara">
  Although not explicitly stated in this section,
  every new <a href="migration84.new-functions.php" class="link">function</a>,
  <a href="migration84.new-classes.php" class="link">class, interface, enum</a>,
  or <a href="migration84.constants.php" class="link">constant</a>
  may cause a redeclaration <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> to be thrown.
 </p>

 <div class="sect2" id="migration84.incompatible.core">
  <h3 class="title">PHP Core</h3>

  
  <div class="sect3" id="migration84.incompatible.core.exit">
   <h4 class="title"><span class="function"><a href="function.exit.php" class="function">exit()</a></span> behavioral change</h4>

   <p class="simpara">
    The <span class="function"><a href="function.exit.php" class="function">exit()</a></span> (and <span class="function"><a href="function.die.php" class="function">die()</a></span>) language
    constructs now behave more like a function.
    This means that they can now be passed like <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>s,
    
    are affected by the <code class="literal">strict_types</code> declare statement,
    and now perform the usual type coercions instead of casting any non-integer
    value to a string.
   </p>

   <p class="simpara">
    As such, passing invalid types to <span class="function"><a href="function.exit.php" class="function">exit()</a></span> and
    <span class="function"><a href="function.die.php" class="function">die()</a></span> now consistently result in a
    <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> being thrown.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.core.recursion-comparison">
   <h4 class="title">Recursion during comparison</h4>

   <p class="simpara">
    Encountering recursion during comparison now results in an
    <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span> exception instead of a
    <strong><code><a href="errorfunc.constants.php#constant.e-error">E_ERROR</a></code></strong> fatal error.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.core.readonly-indirect-modification">
   <h4 class="title">Indirect Modification of readonly Properties</h4>

   
   <p class="simpara">
    Indirect modification of readonly properties within <code class="code">__clone()</code>
    is no longer allowed, e.g. <code class="code">$ref = &amp;$this-&gt;readonly</code>.
    This was already forbidden for readonly initialization, and was an
    oversight in the &quot;readonly reinitialization during cloning&quot; implementation.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.core.constant-type-change">
   <h4 class="title">Type Change of Constants</h4>

   <p class="simpara">
    The <strong><code><a href="reserved.constants.php#constant.php-debug">PHP_DEBUG</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.php-zts">PHP_ZTS</a></code></strong>
    constants are now of type <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
    Previously they were of type <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.core.tempnam-length">
   <h4 class="title">Temporary Filename Length</h4>

   <p class="simpara">
    The name of uploaded files and files created by the
    <span class="function"><a href="function.tempnam.php" class="function">tempnam()</a></span> function are now 13 bytes longer.
    The total length is still platform-dependent.
   </p>
  </div>

  
  <div class="sect3" id="migration84.incompatible.core.e-strict">
   <h4 class="title">Removal of <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> error level</h4>

   <p class="simpara">
    The <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> error level has been removed,
    as it was no longer in use within the PHP engine.
    The <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> constant has been deprecated.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.incompatible.typed-constants">
  <h3 class="title">Extension Class Constants which are now Typed</h3>

  <p class="para">
   The following extension class constants now declare a type on their
   constants:
   <ul class="simplelist">
    <li><a href="book.datetime.php" class="link">Date</a></li>
    <li><a href="book.intl.php" class="link">Intl</a></li>
    <li><a href="book.pdo.php" class="link">PDO</a></li>
    <li><a href="book.reflection.php" class="link">Reflection</a></li>
    <li><a href="book.spl.php" class="link">SPL</a></li>
    <li><a href="book.sqlite3.php" class="link">Sqlite</a></li>
    <li><a href="book.xmlreader.php" class="link">XMLReader</a></li>
   </ul>
  </p>
 </div>

 
 <div class="sect2" id="migration84.incompatible.resource2object">
  <h3 class="title">Resource to Object Migration</h3>

  <p class="simpara">
   Several <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s have been migrated to <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s.
   Return value checks using <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> should be
   replaced with checks for <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, unless specified otherwise.
  </p>

  <div class="sect3" id="migration84.incompatible.resource2object.dba">
   <h4 class="title">DBA</h4>

   <p class="simpara">
    The <a href="book.dba.php" class="link">DBA</a> functions now accept and return
    <span class="classname"><a href="class.dba-connection.php" class="classname">Dba\Connection</a></span> objects instead of
    <code class="literal">dba_connection</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.resource2object.odbc">
   <h4 class="title">ODBC</h4>

   <p class="simpara">
    The <a href="book.uodbc.php" class="link">ODBC</a> functions now accept and return
    <span class="classname"><strong class="classname">Odbc\Result</strong></span> objects instead of
    <code class="literal">odbc_result</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
   </p>

   <p class="simpara">
    The <a href="book.uodbc.php" class="link">ODBC</a> functions now accept and return
    <span class="classname"><strong class="classname">Odbc\Connection</strong></span> objects instead of
    <code class="literal">odbc_connection</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>s.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.resource2object.soap">
   <h4 class="title">SOAP</h4>

   <p class="simpara">
    The <span class="property"><a href="class.soapclient.php#soapclient.props.httpurl">SoapClient::$httpurl</a></span> property is now a
    <span class="classname"><strong class="classname">Soap\Url</strong></span> object rather than a
    <code class="literal">soap_url</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
    Checks using <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> (i.e.
    <code class="code">is_resource($client-&gt;httpurl)</code>) should be  replaced with checks
    for <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (i.e. <code class="code">$client-&gt;httpurl !== null</code>).
   </p>
   <p class="simpara">
    The <span class="property"><a href="class.soapclient.php#soapclient.props.sdl">SoapClient::$sdl</a></span> property is now a
    <span class="classname"><strong class="classname">Soap\Sdl</strong></span> object rather than a
    <code class="literal">soap_sdl</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
    Checks using <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> (i.e.
    <code class="code">is_resource($client-&gt;sdl)</code>) should be  replaced with checks
    for <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (i.e. <code class="code">$client-&gt;sdl !== null</code>).
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.incompatible.new-warnings-exceptions">
  <h3 class="title">New warnings and exceptions</h3>

  <p class="simpara">
   New warnings and exceptions have been added which are triggered on
   programming errors, i.e. invalid values provided as arguments.
  </p>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.curl">
   <h4 class="title">Curl</h4>

   <p class="simpara">
    <span class="function"><a href="function.curl-multi-select.php" class="function">curl_multi_select()</a></span> now throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">timeout</code> parameter is less than
    <code class="literal">0</code> or greater than <strong><code><a href="reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.gd">
   <h4 class="title">Gd</h4>

   <p class="para">
    <span class="simplelist"><span class="function"><a href="function.imagejpeg.php" class="function">imagejpeg()</a></span>, <span class="function"><a href="function.imagewebp.php" class="function">imagewebp()</a></span>, <span class="function"><a href="function.imagepng.php" class="function">imagepng()</a></span>, <span class="function"><a href="function.imageavif.php" class="function">imageavif()</a></span></span>
    now throw a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> when an invalid
    <code class="parameter">quality</code> is passed.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.imageavif.php" class="function">imageavif()</a></span> will now throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if an invalid
    <code class="parameter">speed</code> parameter value is passed.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.imagescale.php" class="function">imagescale()</a></span> will now throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">width</code> or <code class="parameter">height</code>
    parameters underflows/overflows.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.imagescale.php" class="function">imagescale()</a></span> will now throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if an invalid
    <code class="parameter">mode</code> parameter value is passed.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.imagefilter.php" class="function">imagefilter()</a></span> will now throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> with the
    <strong><code><a href="image.constants.php#constant.img-filter-scatter">IMG_FILTER_SCATTER</a></code></strong> filter
    if the <code class="parameter">sub</code> or <code class="parameter">plus</code>
    parameters underflows/overflows.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.gettext">
   <h4 class="title">Gettext</h4>

   <p class="para">
    <span class="simplelist"><span class="function"><a href="function.bind-textdomain-codeset.php" class="function">bind_textdomain_codeset()</a></span>, <span class="function"><a href="function.textdomain.php" class="function">textdomain()</a></span>, <span class="function"><strong>d()</strong><span class="replaceable">*</span><a href="function.gettext.php" class="function">gettext()</a></span></span>
    now throw a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
    <code class="parameter">domain</code> is the empty string.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.intl">
   <h4 class="title">Intl</h4>

   <p class="para">
    <span class="function"><a href="resourcebundle.get.php" class="function">resourcebundle_get()</a></span>,
    <span class="methodname"><a href="resourcebundle.get.php" class="methodname">ResourceBundle::get()</a></span>, and accessing offsets on
    a <span class="classname"><a href="class.resourcebundle.php" class="classname">ResourceBundle</a></span> object now throw:
    <ul class="simplelist">
     <li>
      <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> for invalid offset types
     </li>
     <li>
      <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> for an empty <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </li>
     <li>
      <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the integer index does
      not fit in a signed 32 bit integer
     </li>
    </ul>
   </p>

   <p class="simpara">
    <span class="methodname"><a href="intldateformatter.create.php" class="methodname">IntlDateFormatter::__construct()</a></span> throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">locale</code> is invalid.
   </p>

   <p class="simpara">
    <span class="methodname"><a href="numberformatter.create.php" class="methodname">NumberFormatter::__construct()</a></span> throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">locale</code> is invalid.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.mbstring">
   <h4 class="title">MBString</h4>

   <p class="simpara">
    <span class="function"><a href="function.mb-encode-numericentity.php" class="function">mb_encode_numericentity()</a></span> and
    <span class="function"><a href="function.mb-decode-numericentity.php" class="function">mb_decode_numericentity()</a></span> now check that the
    <code class="parameter">map</code> is only composed of <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s,
    if not a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> is now thrown.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.mb-http-input.php" class="function">mb_http_input()</a></span> now always throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if <code class="parameter">type</code>
    is invalid.
   </p>

   <p class="simpara">
    <span class="function"><a href="function.mb-http-output.php" class="function">mb_http_output()</a></span> now check that the
    <code class="parameter">encoding</code> does not contain any null bytes,
    if it does a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> is now thrown.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.odbc">
   <h4 class="title">ODBC</h4>

   <p class="simpara">
    <span class="function"><a href="function.odbc-fetch-row.php" class="function">odbc_fetch_row()</a></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> when
    <code class="parameter">row</code> is less than or equal to <code class="literal">0</code>.
    A warning is now emitted in this case.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.pcntl">
   <h4 class="title">PCNTL</h4>

   <p class="para">
    The <span class="function"><a href="function.pcntl-sigprocmask.php" class="function">pcntl_sigprocmask()</a></span>,
    <span class="function"><a href="function.pcntl-sigwaitinfo.php" class="function">pcntl_sigwaitinfo()</a></span>, and
    <span class="function"><a href="function.pcntl-sigtimedwait.php" class="function">pcntl_sigtimedwait()</a></span> functions now throw:
    <ul class="simplelist">
     <li>
      A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
      <code class="parameter">signals</code> array is empty
      (except for <span class="function"><a href="function.pcntl-sigprocmask.php" class="function">pcntl_sigprocmask()</a></span> if the
      <code class="parameter">mode</code> <strong><code><a href="pcntl.constants.php#constant.sig-setmask">SIG_SETMASK</a></code></strong>)
     </li>
     <li>
      A <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> if a value of the
      <code class="parameter">signals</code> array is not an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </li>
     <li>
      A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if a value of the
      <code class="parameter">signals</code> array is not a valid signal number
     </li>
    </ul>
   </p>

   <p class="simpara">
    The <span class="function"><a href="function.pcntl-sigprocmask.php" class="function">pcntl_sigprocmask()</a></span> function now throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">mode</code> is not one of <strong><code><a href="pcntl.constants.php#constant.sig-block">SIG_BLOCK</a></code></strong>,
    <strong><code><a href="pcntl.constants.php#constant.sig-unblock">SIG_UNBLOCK</a></code></strong>, or <strong><code><a href="pcntl.constants.php#constant.sig-setmask">SIG_SETMASK</a></code></strong>.
   </p>

   <p class="para">
    The <span class="function"><a href="function.pcntl-sigtimedwait.php" class="function">pcntl_sigtimedwait()</a></span> function now throw:
    <ul class="simplelist">
     <li>
      A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
      <code class="parameter">seconds</code> is less than <code class="literal">0</code>
     </li>
     <li>
      A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
      <code class="parameter">nanoseconds</code> is less than <code class="literal">0</code>
      or greater than <code class="literal">1e9</code>
     </li>
     <li>
      A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if both
      <code class="parameter">seconds</code> and <code class="parameter">nanoseconds</code>
      are <code class="literal">0</code>
     </li>
    </ul>
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.session">
   <h4 class="title">Session</h4>

   <p class="simpara">
    Setting a non-positive value for <a href="session.configuration.php#ini.session.gc-divisor" class="link">session.gc_divisor</a>
    or a negative value for <a href="session.configuration.php#ini.session.gc-probability" class="link">session.gc_probability</a>
    now emits a warning.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.simplexml">
   <h4 class="title">SimpleXML</h4>

   <p class="simpara">
    Calling <span class="function"><a href="function.simplexml-import-dom.php" class="function">simplexml_import_dom()</a></span> with a non-XML object
    now throws a <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> instead of a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.standard">
   <h4 class="title">Standard</h4>

   <p class="simpara">
    The <span class="function"><a href="function.round.php" class="function">round()</a></span> function now validates the value of the
    <code class="parameter">mode</code> and throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> for invalid modes.
    Previously, invalid modes would have been interpreted as
    <strong><code><a href="math.constants.php#constant.php-round-half-up">PHP_ROUND_HALF_UP</a></code></strong>.
   </p>

   <p class="simpara">
    The <span class="function"><a href="function.str-getcsv.php" class="function">str_getcsv()</a></span> now throws
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>s when the
    <code class="parameter">separator</code> and <code class="parameter">enclosure</code>
    arguments are not one byte long, or if the <code class="parameter">escape</code>
    argument is not one byte long nor the empty string.
    This aligns the behaviour to be identical to the one of
    <span class="function"><a href="function.fputcsv.php" class="function">fputcsv()</a></span> and <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>.
   </p>

   <p class="simpara">
    The <span class="function"><a href="function.php-uname.php" class="function">php_uname()</a></span> function now throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if the
    <code class="parameter">mode</code> is invalid.
   </p>

   <p class="simpara">
    The <code class="literal">&quot;allowed_classes&quot;</code> option for
    <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> now throws
    <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span>s and
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>s if it is not an
    <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of class names.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.xmlreader">
   <h4 class="title">XMLReader</h4>

   <p class="simpara">
    Passing an invalid character encoding to
    <span class="methodname"><a href="xmlreader.open.php" class="methodname">XMLReader::open()</a></span> or
    <span class="methodname"><a href="xmlreader.xml.php" class="methodname">XMLReader::XML()</a></span> now throws a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>.
   </p>

   <p class="simpara">
    Passing a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing null bytes previously emitted a
    warning and now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.xmlwriter">
   <h4 class="title">XMLWriter</h4>

   <p class="simpara">
    Passing a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing null bytes previously emitted a
    warning and now throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration84.incompatible.new-warnings-exceptions.xsl">
   <h4 class="title">XSL</h4>

   <p class="simpara">
    <span class="methodname"><a href="xsltprocessor.setparameter.php" class="methodname">XSLTProcessor::setParameter()</a></span> will now throw a
    <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> when its arguments contain null
    bytes. This never actually worked correctly in the first place,
    which is why it throws an exception now.
   </p>

   <p class="simpara">
    Calling <span class="methodname"><a href="xsltprocessor.importstylesheet.php" class="methodname">XSLTProcessor::importStyleSheet()</a></span> with a
    non-XML object now throws a <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span>
    instead of a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span>.
   </p>

   
   <p class="simpara">
    Failure to call a PHP function callback during evaluation now throws
    instead of emitting a warning.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.incompatible.date">
  <h3 class="title">Date</h3>

  <p class="para">
   <code class="literal">number</code> symbols in <a href="datetime.formats.php#datetime.formats.relative" class="link">relative formats</a>
   once again accept multiple signs, e.g. <code class="literal">+-2</code>.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.dom">
  <h3 class="title">DOM</h3>

  <p class="simpara">
   Some DOM methods previously returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or a
   <span class="exceptionname"><a href="class.domexception.php" class="exceptionname">DOMException</a></span> with code
   <strong><code><a href="dom.constants.php#constant.dom-php-err">DOM_PHP_ERR</a></code></strong> if a new node could not be allocated.
   They now consistently throw a <span class="exceptionname"><a href="class.domexception.php" class="exceptionname">DOMException</a></span>
   with code <strong><code><a href="dom.constants.php#constant.dom-invalid-state-err">DOM_INVALID_STATE_ERR</a></code></strong>.
   This situation is extremely unlikely and the probability of being affected
   is low.
   As a result <span class="methodname"><a href="domimplementation.createdocument.php" class="methodname">DOMImplementation::createDocument()</a></span>
   now has a tentative return type of <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>
   
   instead of <code class="code">DOMDocument|false</code>.
  </p>

  <p class="simpara">
   Previously, <span class="classname"><a href="class.domxpath.php" class="classname">DOMXPath</a></span> objects could be cloned,
   but resulted in an unusable object.
   This is no longer possible, and cloning a <span class="classname"><a href="class.domxpath.php" class="classname">DOMXPath</a></span>
   object now throws an <span class="exceptionname"><a href="class.error.php" class="exceptionname">Error</a></span>.
  </p>

  
  <p class="simpara">
   The <span class="methodname"><strong>DOMImplementation::getFeature()</strong></span> method has been removed.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.gmp">
  <h3 class="title">GMP</h3>

  
  <p class="simpara">
   The <span class="classname"><a href="class.gmp.php" class="classname">GMP</a></span> class is now final and cannot be extended
   anymore.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.mbstring">
  <h3 class="title">MBString</h3>

  <p class="simpara">
   On invalid strings (those with encoding errors),
   <span class="function"><a href="function.mb-substr.php" class="function">mb_substr()</a></span> now interprets character indices in the same
   manner as most other mbstring functions.
   This means that character indices returned by <span class="function"><a href="function.mb-strpos.php" class="function">mb_strpos()</a></span>
   can be passed to <span class="function"><a href="function.mb-substr.php" class="function">mb_substr()</a></span>.
  </p>

  <p class="simpara">
   For SJIS-Mac (MacJapanese) strings, character indices passed to
   <span class="function"><a href="function.mb-substr.php" class="function">mb_substr()</a></span> now refer to the indices of the Unicode
   codepoints which are produced when the string is converted to Unicode.
   This is significant because around 40 SJIS-Mac characters convert to a
   sequence of multiple Unicode codepoints.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.mysqli">
  <h3 class="title">MySQLi</h3>

  <p class="simpara">
   The unused and undocumented constant
   <strong><code>MYSQLI_SET_CHARSET_DIR</code></strong> has been removed.
  </p>

  <p class="simpara">
   The <strong><code><a href="mysqli.constants.php#constant.mysqli-stmt-attr-prefetch-rows">MYSQLI_STMT_ATTR_PREFETCH_ROWS</a></code></strong> constant has been
   removed. The feature is unavailable with mysqlnd.
  </p>

  <p class="simpara">
   The <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-for-update">MYSQLI_CURSOR_TYPE_FOR_UPDATE</a></code></strong> and
   <strong><code><a href="mysqli.constants.php#constant.mysqli-cursor-type-scrollable">MYSQLI_CURSOR_TYPE_SCROLLABLE</a></code></strong> constants have been
   removed. This functionality was never implemented,
   neither with mysqlnd nor with libmysql.
  </p>

  <p class="simpara">
   The unused <strong><code><a href="mysqli.constants.php#constant.mysqli-type-interval">MYSQLI_TYPE_INTERVAL</a></code></strong> constant, which is
   currently a stub and an alias for <strong><code><a href="mysqli.constants.php#constant.mysqli-type-enum">MYSQLI_TYPE_ENUM</a></code></strong>,
   has been removed.
   
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.mysqlnd">
  <h3 class="title">MySQLnd</h3>

  <p class="simpara">
   The error code reported for MySQL server wait timeouts has been changed from
   <code class="literal">2006</code> to <code class="literal">4031</code> for MySQL server
   versions 8.0.24 and above.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.opcache">
  <h3 class="title">Opcache</h3>

  <p class="simpara">
   The maximum value of the
   <a href="opcache.configuration.php#ini.opcache.interned-strings-buffer" class="link">opcache.interned_strings_buffer</a>
   setting on 64bit architectures is now <code class="literal">32767</code>.
   Previously it was <code class="literal">4095</code>.
  </p>

  <div class="sect3">
   <h4 class="title">JIT</h4>

   <p class="simpara">
    The default configuration values for the JIT changed from
    <a href="opcache.configuration.php#ini.opcache.jit" class="link"><code class="literal">opcache.jit=tracing</code></a>
    and <a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link"><code class="literal">opcache.jit_buffer_size=0</code></a>
    to <a href="opcache.configuration.php#ini.opcache.jit" class="link"><code class="literal">opcache.jit=disable</code></a>
    and <a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link"><code class="literal">opcache.jit_buffer_size=64M</code></a>, respectively.
   </p>

   <p class="simpara">
    This does not affect the default observable behavior,
    as the JIT is still disabled by default.
    However, it is now disabled through the
    <a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a> setting,
    rather than
    <a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link">opcache.jit_buffer_size</a>.
    This may affect users who previously enabled JIT through
    <a href="opcache.configuration.php#ini.opcache.jit-buffer-size" class="link">opcache.jit_buffer_size</a>
    exclusively, without also specifying a JIT mode using
    <a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a>.
    To enable JIT compilation, set the
    <a href="opcache.configuration.php#ini.opcache.jit" class="link">opcache.jit</a> config value accordingly.
   </p>

   <p class="simpara">
    If <abbr>JIT</abbr> compilation is enabled, <abbr title="PHP: Hypertext Preprocessor">PHP</abbr> will now exit with a fatal error on
    startup if the initialization of the <abbr>JIT</abbr> compiler failed for any reason.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.incompatible.pcntl">
  <h3 class="title">PCNTL</h3>

  <p class="simpara">
   The <span class="function"><a href="function.pcntl-sigprocmask.php" class="function">pcntl_sigprocmask()</a></span>,
   <span class="function"><a href="function.pcntl-sigwaitinfo.php" class="function">pcntl_sigwaitinfo()</a></span>, and
   <span class="function"><a href="function.pcntl-sigtimedwait.php" class="function">pcntl_sigtimedwait()</a></span> functions now always
   return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   In some case previously it could return the value <code class="literal">-1</code>.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.pcre">
  <h3 class="title">PCRE</h3>

  <p class="simpara">
   The bundled pcre2lib has been updated to version 10.44.
   As a consequence, this means <code class="literal">{,3}</code> is now recognized
   as a quantifier instead of as text.
   Furthermore, the meaning of some character classes in UCP mode has changed.
   Consult the <a href="https://github.com/PCRE2Project/pcre2/blob/master/NEWS" class="link external">&raquo;&nbsp;PCRE2 Changelog</a>
   for a full changelog.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.pdo-dblib">
  <h3 class="title">PDO_DBLIB</h3>

  <p class="simpara">
   The <strong><code><a href="class.pdo-dblib.php#pdo-dblib.constants.attr-stringify-uniqueidentifier">Pdo\Dblib::ATTR_STRINGIFY_UNIQUEIDENTIFIER</a></code></strong> and
   <strong><code><a href="class.pdo-dblib.php#pdo-dblib.constants.attr-datetime-convert">Pdo\Dblib::ATTR_DATETIME_CONVERT</a></code></strong> attributes now act as
   boolean attributes instead of integer attributes.
   Thus setting the attribute via <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span>
   and retrieving it via <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span> expects
   and or return a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.pdo-firebird">
  <h3 class="title">PDO_FIREBIRD</h3>

  <p class="simpara">
   The <strong><code><a href="pdo.constants.php#pdo.constants.attr-autocommit">PDO::ATTR_AUTOCOMMIT</a></code></strong> attribute now act as
   boolean attributes instead of integer attributes.
   Thus setting the attribute via <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span>
   and retrieving it via <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span> expects
   and or return a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
  </p>

  <p class="simpara">
   The extension now exposes some Firebird C++ APIs,
   therefore building this extension now requires a C++ compiler.
   Moreover, the extension must now be compiled against fbclient 3.0 or higher.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.pdo-mysql">
  <h3 class="title">PDO_MYSQL</h3>

  <p class="simpara">
   The <strong><code><a href="pdo.constants.php#pdo.constants.attr-autocommit">PDO::ATTR_AUTOCOMMIT</a></code></strong>,
   <strong><code><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares">PDO::ATTR_EMULATE_PREPARES</a></code></strong>, and
   <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-direct-query">PDO::MYSQL_ATTR_DIRECT_QUERY</a></code></strong> attributes now act as
   boolean attributes instead of integer attributes.
   Thus setting the attribute via <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span>
   and retrieving it via <span class="methodname"><a href="pdo.getattribute.php" class="methodname">PDO::getAttribute()</a></span> expects
   and or return a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.pdo-pgsql">
  <h3 class="title">PDO_PGSQL</h3>

  <p class="simpara">
   The DSN&#039;s credentials, when set, are given priority over their PDO
   constructor counterparts, being closer to the documentation states.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.simplexml">
  <h3 class="title">SimpleXML</h3>

  <p class="simpara">
   <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> is not only a representation of an
   XML element, but it is also a <span class="classname"><a href="class.recursiveiterator.php" class="classname">RecursiveIterator</a></span>.
   Prior to PHP 8.4.0, some of its methods (e.g.
   <span class="methodname"><a href="simplexmlelement.asxml.php" class="methodname">SimpleXMLElement::asXML()</a></span> or
   <span class="methodname"><a href="simplexmlelement.getname.php" class="methodname">SimpleXMLElement::getName()</a></span>) and casting such
   instances to <span class="type"><a href="language.types.string.php" class="type string">string</a></span> would implicitly reset the iterator.
  </p>
  <p class="para">
   This could cause unexpected infinite loops as the iterator was rewound.
   For example:
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$xmlString </span><span style="color: #007700">= </span><span style="color: #DD0000">"&lt;root&gt;&lt;a&gt;&lt;b&gt;1&lt;/b&gt;&lt;b&gt;2&lt;/b&gt;&lt;b&gt;3&lt;/b&gt;&lt;/a&gt;&lt;/root&gt;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlString</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$nodes </span><span style="color: #007700">= </span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">b</span><span style="color: #007700">;<br />foreach (</span><span style="color: #0000BB">$nodes </span><span style="color: #007700">as </span><span style="color: #0000BB">$nodeData</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"nodeData: " </span><span style="color: #007700">. </span><span style="color: #0000BB">$nodeData </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />    </span><span style="color: #0000BB">$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">$nodes</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXml</span><span style="color: #007700">();<br />}</span></span></code></div>
    </div>

    <p class="simpara">
     would result in an infinite loop.
    </p>
    <div class="example-contents screen">
<div class="cdata"><pre>
nodeData: 1
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
nodeData: 2
// ...
</pre></div>
    </div>
    <p class="simpara">
     However, this behavior has now been corrected, and a
     <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> will no longer implicitly reset
     the iterator data, unless explicitly rewound.
     Meaning the previous example would now result in:
    </p>
    <div class="example-contents screen">
<div class="cdata"><pre>
nodeData: 1
nodeData: 2
nodeData: 3
</pre></div>
    </div>
   </div>
  </p>
  
 </div>

 <div class="sect2" id="migration84.incompatible.soap">
  <h3 class="title">SOAP</h3>

  <p class="simpara">
   <span class="property"><a href="class.soapclient.php#soapclient.props.typemap">SoapClient::$typemap</a></span> is now an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
   rather than a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
   Checks using <span class="function"><a href="function.is-resource.php" class="function">is_resource()</a></span> (i.e.
   <code class="code">is_resource($client-&gt;typemap)</code>) should be
   replaced with checks for <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> (i.e. <code class="code">$client-&gt;typemap !== null</code>).
  </p>

  <p class="simpara">
   The SOAP extension gained an optional dependency on the
   <a href="book.session.php" class="link">session</a> extension.
   If PHP is built without the session extension and with the
   <strong class="option unknown">--enable-rtld-now</strong> configure flag enabled,
   startup errors will now occur if the <a href="book.soap.php" class="link">SOAP</a>
   extension is also used.
   To solve this either don&#039;t use rtld-now or load the session extension.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.standard">
  <h3 class="title">Standard</h3>

  <p class="simpara">
   When using <span class="function"><a href="function.strcspn.php" class="function">strcspn()</a></span> with
   <code class="parameter">characters</code> being the empty string,
   the length of the string is now returned instead of incorrectly stopping
   at the first null byte.
   
  </p>

  <p class="simpara">
   <span class="function"><a href="function.http-build-query.php" class="function">http_build_query()</a></span> now correctly handles backed enums.
  </p>

  
  <p class="simpara">
   <span class="function"><a href="function.stream-bucket-make-writeable.php" class="function">stream_bucket_make_writeable()</a></span> and
   <span class="function"><a href="function.stream-bucket-new.php" class="function">stream_bucket_new()</a></span> will now return a
   <span class="classname"><strong class="classname">StreamBucket</strong></span> instance instead of an instance of
   <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.tidy">
  <h3 class="title">Tidy</h3>

  <p class="simpara">
   Failures in the constructor now throw exceptions rather than emitting
   warnings and having a broken object.
  </p>
 </div>

 <div class="sect2" id="migration84.incompatible.xml">
  <h3 class="title">XML</h3>

  <p class="simpara">
   The <span class="function"><strong>xml_set_()</strong><span class="replaceable">*</span><strong>_handler()</strong></span>
   functions now declare and check for an effective
   signature of <span class="type"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span> for the
   <code class="parameter">handler</code> parameters.
   Moreover, values of type <span class="type"><a href="language.types.string.php" class="type string">string</a></span> that correspond to method names,
   of object set with <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span> are now checked to
   see if the method exists on the class of the previously passed object.
   This means that <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span> must now always be
   called prior to setting method names as <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>s.
   Passing an empty string to disable the handler is still allowed,
   but deprecated.
  </p>

  <p class="simpara">
   However, as <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span> and passing
   non-<span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> strings is deprecated.
   It is recommended to change such instances with a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>
   referring to the method directly.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration84/incompatible.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration84.incompatible%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration84.incompatible&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.incompatible.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration84.php">Migrating from PHP 8.3.x to PHP 8.4.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration84.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-classes.php" title="New Classes, Enums, and Interfaces">New Classes, Enums, and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration84.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="current">
                            <a href="migration84.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration84.removed-extensions.php" title="Removed Extensions">Removed Extensions</a>
                        </li>
                                                <li class="">
                            <a href="migration84.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration84.windows-support.php" title="Windows Support">Windows Support</a>
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
