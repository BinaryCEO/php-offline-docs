<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Deprecated Features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration81.deprecated.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration81.deprecated.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration81.deprecated.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration81.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration81.incompatible.php">
 <link rel="next" href="https://www.php.net/manual/en/migration81.other-changes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration81.deprecated.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration81.deprecated.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration81.deprecated.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration81.deprecated.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration81.deprecated.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration81.deprecated.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration81.deprecated.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration81.deprecated.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration81.deprecated.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration81.deprecated.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration81.deprecated.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Deprecated Features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Deprecated Features - Manual" />
<meta name="twitter:description" content="Deprecated Features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Deprecated Features - Manual" />
<meta itemprop="description" content="Deprecated Features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Deprecated Features" />

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
        <a href="migration81.other-changes.php">
          Other Changes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration81.incompatible.php">
          &laquo; Backward Incompatible Changes        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration81.php'>Migrating from PHP 8.0.x to PHP 8.1.x</a></li>      </ul>
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
            <option value='en/migration81.deprecated.php' selected="selected">English</option>
            <option value='de/migration81.deprecated.php'>German</option>
            <option value='es/migration81.deprecated.php'>Spanish</option>
            <option value='fr/migration81.deprecated.php'>French</option>
            <option value='it/migration81.deprecated.php'>Italian</option>
            <option value='ja/migration81.deprecated.php'>Japanese</option>
            <option value='pt_BR/migration81.deprecated.php'>Brazilian Portuguese</option>
            <option value='ru/migration81.deprecated.php'>Russian</option>
            <option value='tr/migration81.deprecated.php'>Turkish</option>
            <option value='uk/migration81.deprecated.php'>Ukrainian</option>
            <option value='zh/migration81.deprecated.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration81.deprecated" class="sect1">
 <h2 class="title">Deprecated Features</h2>

 <div class="sect2" id="migration81.deprecated.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration81.deprecated.core.serialize-interface">
   <h4 class="title">
    Implementing <span class="interfacename"><a href="class.serializable.php" class="interfacename">Serializable</a></span> without
    <span class="function"><strong>__serialize()</strong></span> and <span class="function"><strong>__unserialize()</strong></span>
   </h4>

   <p class="para">
    Either only the new methods should be implemented, if no support for
    PHP prior to version 7.4 is provided, or both should be implemented.
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.null-not-nullable-internal">
   <h4 class="title">Passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to non-nullable parameters of built-in functions</h4>

   <p class="para">
    Scalar types for built-in functions are nullable by default.
    This behaviour is deprecated to align with the behaviour of user-defined
    functions, where scalar types need to be marked as nullable explicitly.

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">str_contains</span><span style="color: #007700">(</span><span style="color: #DD0000">"foobar"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">// Deprecated: Passing null to parameter #2 ($needle) of type string<br />//             is deprecated<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.implicit-float-conversion">
   <h4 class="title">Implicit incompatible <span class="type"><a href="language.types.float.php" class="type float">float</a></span> to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> conversions</h4>

   <p class="para">
    The implicit conversion of <span class="type"><a href="language.types.float.php" class="type float">float</a></span> to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> which
    leads to a loss in precision is now deprecated.
    This affects <span class="type"><a href="language.types.array.php" class="type array">array</a></span> keys, <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> type declarations in coercive mode,
    and operators working on <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>s.

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">15.5</span><span style="color: #007700">]; </span><span style="color: #FF8000">// deprecated, as key value loses the 0.5 component<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">[</span><span style="color: #0000BB">15.0</span><span style="color: #007700">]; </span><span style="color: #FF8000">// ok, as 15.0 == 15<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.static-trait">
   <h4 class="title">Calling a <span class="modifier">static</span> element on a trait</h4>

   <p class="para">
    Calling a <span class="modifier">static</span> method, or accessing a
    <span class="modifier">static</span> property directly on a trait is deprecated.
    Static methods and properties should only be accessed on a class using the trait.
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.magic-sleep">
   <h4 class="title">Returning a non-<span class="type"><a href="language.types.array.php" class="type array">array</a></span> from <span class="function"><strong>__sleep()</strong></span></h4>

   <p class="para">
    Returning a value which is not an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> from
    <a href="language.oop5.magic.php#object.sleep" class="link">__sleep()</a> now generates a diagnostic.
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.void-by-ref">
   <h4 class="title">Returning by reference from a <span class="type"><span class="type"><a href="language.types.void.php" class="type void">void</a></span></span> function</h4>

   <p class="para">
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function &amp;</span><span style="color: #0000BB">test</span><span style="color: #007700">(): </span><span style="color: #0000BB">void </span><span style="color: #007700">{}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    Such a function is contradictory, and already emits the following
    <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> when called:
    <code class="literal">Only variable references should be returned by reference</code>.
   </p>
  </div>

  <div class="sect3" id="migration81.deprecated.core.autovivification-false">
   <h4 class="title">Autovivification from <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></h4>
   <p class="para">
    Autovivification is the process of creating a new <span class="type"><a href="language.types.array.php" class="type array">array</a></span> when
    appending to a value.
    Autovivification is prohibited from scalar values, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> however
    was an exception. This is now deprecated.

    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">false</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[] = </span><span style="color: #0000BB">2</span><span style="color: #007700">;   </span><span style="color: #FF8000">// deprecated<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Autovivification from <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> and undefined values is still allowed:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// From undefined<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'some value'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #DD0000">'doesNotExist'</span><span style="color: #007700">][] = </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// From null<br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$arr</span><span style="color: #007700">[] = </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </div>
    </p>
   </p></blockquote>
  </div>

 </div>

 <div class="sect2" id="migration81.deprecated.ctype">
  <h3 class="title">ctype</h3>

  <div class="sect3" id="migration81.deprecated.ctype.nonstring-arguments">
   <h4 class="title">Verifying non-string arguments</h4>

   <p class="para">
    Passing a non-string argument is deprecated.
    In the future, the argument will be interpreted as a string instead
    of an ASCII codepoint.
    Depending on the intended behavior, the argument should either be
    cast to <span class="type"><a href="language.types.string.php" class="type string">string</a></span> or an explicit call to
    <span class="function"><a href="function.chr.php" class="function">chr()</a></span> should be made.
    All <code class="literal">ctype_*()</code> functions are affected.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration81.deprecated.date">
  <h3 class="title">Date</h3>

  <p class="para">
   <span class="function"><a href="function.date-sunrise.php" class="function">date_sunrise()</a></span> and <span class="function"><a href="function.date-sunset.php" class="function">date_sunset()</a></span>
   have been deprecated in favor of <span class="function"><a href="function.date-sun-info.php" class="function">date_sun_info()</a></span>.
  </p>

  <p class="para">
   <span class="function"><a href="function.strptime.php" class="function">strptime()</a></span> has been deprecated.
   Use <span class="function"><a href="function.date-parse-from-format.php" class="function">date_parse_from_format()</a></span> instead (for locale-independent parsing),
   or <span class="methodname"><a href="intldateformatter.parse.php" class="methodname">IntlDateFormatter::parse()</a></span> (for locale-dependent parsing).
  </p>

  <p class="para">
   <span class="function"><a href="function.strftime.php" class="function">strftime()</a></span> and <span class="function"><a href="function.gmstrftime.php" class="function">gmstrftime()</a></span> have been deprecated.
   Use <span class="function"><a href="function.date.php" class="function">date()</a></span> instead (for locale-independent formatting),
   or <span class="methodname"><a href="intldateformatter.format.php" class="methodname">IntlDateFormatter::format()</a></span> (for locale-dependent formatting).
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.filter">
  <h3 class="title">Filter</h3>

  <p class="para">
   The <strong><code><a href="filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_STRING</a></code></strong> and
   <strong><code><a href="filter.constants.php#constant.filter-sanitize-stripped">FILTER_SANITIZE_STRIPPED</a></code></strong> filters are deprecated.
  </p>
  <p class="para">
   The <a href="filter.configuration.php#ini.filter.default" class="link">filter.default</a>
   INI directive is deprecated.
   
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.gd">
  <h3 class="title">GD</h3>

  <p class="para">
   The <code class="parameter">num_points</code> of <span class="function"><a href="function.imagepolygon.php" class="function">imagepolygon()</a></span>,
   <span class="function"><a href="function.imageopenpolygon.php" class="function">imageopenpolygon()</a></span> and <span class="function"><a href="function.imagefilledpolygon.php" class="function">imagefilledpolygon()</a></span>
   has been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.hash">
  <h3 class="title">Hash</h3>

  <p class="para">
   The <span class="function"><a href="function.mhash.php" class="function">mhash()</a></span>,
   <span class="function"><a href="function.mhash-keygen-s2k.php" class="function">mhash_keygen_s2k()</a></span>,
   <span class="function"><a href="function.mhash-count.php" class="function">mhash_count()</a></span>,
   <span class="function"><a href="function.mhash-get-block-size.php" class="function">mhash_get_block_size()</a></span>,
   and <span class="function"><a href="function.mhash-get-hash-name.php" class="function">mhash_get_hash_name()</a></span> have been deprecated.
   Use the <code class="literal">hash_*()</code> functions instead.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.imap">
  <h3 class="title">IMAP</h3>

  <p class="para">
   The <strong><code><a href="imap.constants.php#constant.nil">NIL</a></code></strong> constant has been deprecated.
   Use <code class="literal">0</code> instead.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.intl">
  <h3 class="title">Intl</h3>

  <p class="para">
   Calling <span class="methodname"><a href="intlcalendar.roll.php" class="methodname">IntlCalendar::roll()</a></span> with a
   <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> argument is deprecated.
   Use <code class="literal">1</code> and <code class="literal">-1</code> instead of
   <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> respectively.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.mbstring">
  <h3 class="title">Multibyte String</h3>

  <p class="para">
   Calling <span class="function"><a href="function.mb-check-encoding.php" class="function">mb_check_encoding()</a></span> without any arguments
   is deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.mysqli">
  <h3 class="title">MySQLi</h3>

  <p class="para">
   The <span class="property"><a href="class.mysqli-driver.php#mysqli-driver.props.driver-version">mysqli_driver::$driver_version</a></span> property
   has been deprecated.
   It was meaningless and outdated, use <strong><code><a href="reserved.constants.php#constant.php-version-id">PHP_VERSION_ID</a></code></strong>
   instead.
  </p>

  <p class="para">
   Calling <span class="methodname"><a href="mysqli.get-client-info.php" class="methodname">mysqli::get_client_info()</a></span> or
   <span class="function"><a href="mysqli.get-client-info.php" class="function">mysqli_get_client_info()</a></span> with the
   <code class="parameter">mysqli</code> argument has been deprecated.
   Call <span class="function"><a href="mysqli.get-client-info.php" class="function">mysqli_get_client_info()</a></span> without any arguments
   to obtain the version information of the client library.
  </p>

  <p class="para">
   The <span class="methodname"><a href="mysqli.init.php" class="methodname">mysqli::init()</a></span> method has been deprecated.
   Replace calls to <span class="methodname"><strong>parent::init()</strong></span> with
   <span class="methodname"><strong>parent::__construct()</strong></span>.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.oci8">
  <h3 class="title">OCI8</h3>

  <p class="para">
   The <a href="oci8.configuration.php#ini.oci8.old-oci-close-semantics" class="link">oci8.old_oci_close_semantics</a>
   INI directive is deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.odbc">
  <h3 class="title">ODBC</h3>

  <p class="para">
   <span class="function"><a href="function.odbc-result-all.php" class="function">odbc_result_all()</a></span> has been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.pdo">
  <h3 class="title">PDO</h3>

  <p class="para">
   The <strong><code><a href="pdo.constants.php#pdo.constants.fetch-serialize">PDO::FETCH_SERIALIZE</a></code></strong> fetch mode has been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.pgsql">
  <h3 class="title">PgSQL</h3>

  <p class="para">
   Not passing the connection argument to all <code class="literal">pgsql_*()</code>
   functions has been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.soap">
  <h3 class="title">SOAP</h3>

  <p class="para">
   The <code class="literal">ssl_method</code> option of
   <span class="methodname"><a href="soapclient.construct.php" class="methodname">SoapClient::__construct()</a></span> has been deprecated
   in favor of SSL stream context options.
   
  </p>
 </div>

 <div class="sect2" id="migration81.deprecated.standard">
  <h3 class="title">Standard</h3>

  <p class="para">
   Calling <span class="function"><a href="function.key.php" class="function">key()</a></span>, <span class="function"><a href="function.current.php" class="function">current()</a></span>,
   <span class="function"><a href="function.next.php" class="function">next()</a></span>, <span class="function"><a href="function.prev.php" class="function">prev()</a></span>,
   <span class="function"><a href="function.reset.php" class="function">reset()</a></span>, or <span class="function"><a href="function.end.php" class="function">end()</a></span>
   on <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s is deprecated.
   Either convert the <span class="type"><a href="language.types.object.php" class="type object">object</a></span> to an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> using <span class="function"><a href="function.get-mangled-object-vars.php" class="function">get_mangled_object_vars()</a></span>
   first, or use the methods provided by a class that implements
   <span class="interfacename"><a href="class.iterator.php" class="interfacename">Iterator</a></span>, such as <span class="classname"><a href="class.arrayiterator.php" class="classname">ArrayIterator</a></span>, instead.
  </p>

  <p class="para">
   The <a href="filesystem.configuration.php#ini.auto-detect-line-endings" class="link">auto_detect_line_endings</a>
   INI directive is deprecated.
   If necessary, handle <code class="literal">&quot;\r&quot;</code> line breaks manually instead.
  </p>

  <p class="para">
   The <strong><code><a href="filesystem.constants.php#constant.file-binary">FILE_BINARY</a></code></strong> and
   <strong><code><a href="filesystem.constants.php#constant.file-text">FILE_TEXT</a></code></strong> constants have been deprecated.
   They never had any effect.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration81/deprecated.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration81.deprecated%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration81.deprecated&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration81.deprecated.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration81.php">Migrating from PHP 8.0.x to PHP 8.1.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="migration81.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-classes.php" title="New Classes and Interfaces">New Classes and Interfaces</a>
                        </li>
                                                <li class="">
                            <a href="migration81.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration81.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration81.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="current">
                            <a href="migration81.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration81.other-changes.php" title="Other Changes">Other Changes</a>
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
