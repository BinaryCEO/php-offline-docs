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

 <link rel="canonical" href="https://www.php.net/manual/en/migration84.deprecated.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration84.deprecated.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration84.deprecated.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration84.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration84.incompatible.php">
 <link rel="next" href="https://www.php.net/manual/en/migration84.removed-extensions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration84.deprecated.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration84.deprecated.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration84.deprecated.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration84.deprecated.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration84.deprecated.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration84.deprecated.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration84.deprecated.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration84.deprecated.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration84.deprecated.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration84.deprecated.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration84.deprecated.php" hreflang="zh">

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
        <a href="migration84.removed-extensions.php">
          Removed Extensions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration84.incompatible.php">
          &laquo; Backward Incompatible Changes        </a>
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
            <option value='en/migration84.deprecated.php' selected="selected">English</option>
            <option value='de/migration84.deprecated.php'>German</option>
            <option value='es/migration84.deprecated.php'>Spanish</option>
            <option value='fr/migration84.deprecated.php'>French</option>
            <option value='it/migration84.deprecated.php'>Italian</option>
            <option value='ja/migration84.deprecated.php'>Japanese</option>
            <option value='pt_BR/migration84.deprecated.php'>Brazilian Portuguese</option>
            <option value='ru/migration84.deprecated.php'>Russian</option>
            <option value='tr/migration84.deprecated.php'>Turkish</option>
            <option value='uk/migration84.deprecated.php'>Ukrainian</option>
            <option value='zh/migration84.deprecated.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration84.deprecated" class="sect1">
 <h2 class="title">Deprecated Features</h2>

 <div class="sect2" id="migration84.deprecated.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration84.deprecated.core.implicitly-nullable-parameter">
   
   <h4 class="title">Implicitly nullable parameter</h4>

   <p class="simpara">
    A parameter&#039;s type is implicitly widened to accept <span class="type"><a href="language.types.null.php" class="type null">null</a></span>
    if the default value for it is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
   </p>

   <p class="para">
    The following code:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">T1 $a </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
    should be converted to:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">T1</span><span style="color: #007700">|</span><span style="color: #0000BB">null $a </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
    or
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(?</span><span style="color: #0000BB">T1 $a </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
   </p>

   <p class="para">
    However, if such a parameter declaration is followed by a mandatory
    parameter:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">T1 $a</span><span style="color: #007700">, </span><span style="color: #0000BB">T2 $b </span><span style="color: #007700">= </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">T3 $c</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
    It must be converted to:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">T1 $a</span><span style="color: #007700">, </span><span style="color: #0000BB">T2</span><span style="color: #007700">|</span><span style="color: #0000BB">null $b</span><span style="color: #007700">, </span><span style="color: #0000BB">T3 $c</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
    or
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">T1 $a</span><span style="color: #007700">, ?</span><span style="color: #0000BB">T2 $b</span><span style="color: #007700">, </span><span style="color: #0000BB">T3 $c</span><span style="color: #007700">) {}</span></span></code></div>
     </div>

    </div>
    as optional parameter before required ones are deprecated.
   </p>
  </div>

  <div class="sect3">
   
   <h4 class="title">Raising zero to the power of negative number</h4>

   <p class="simpara">
    Raising a number to the power of a negative number is equivalent to taking
    the reciprocal of the number raised to the positive opposite of the power.
    That is, <code class="literal">10<sup class="superscript">-2</sup></code> is the same as
    <code class="literal">1 / 10<sup class="superscript">2</sup></code>.
    Therefore raising <code class="literal">0</code> to the power of a negative number
    corresponds to dividing by <code class="literal">0</code>, i.e.
    <code class="literal">0<sup class="superscript">-2</sup></code> is the same as
    <code class="literal">1 / 0<sup class="superscript">2</sup></code>, or
    <code class="literal">1 / 0</code>. Thus, this behavior has been deprecated.
   </p>

   <p class="simpara">
    This affects the exponentiation operator <code class="literal">**</code>
    and the <span class="function"><a href="function.pow.php" class="function">pow()</a></span> function.
   </p>

   <p class="simpara">
    If the IEEE 754 semantics are desired one should use the new
    <span class="function"><a href="function.fpow.php" class="function">fpow()</a></span> function.
   </p>
  </div>

  <div class="sect3" id="migration84.deprecated.core.underscore-class-name">
   
   <h4 class="title">Using underscore <code class="literal">_</code> as class name</h4>

   <p class="para">
    Naming a class <code class="literal">_</code> is now deprecated:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">_ </span><span style="color: #007700">{}</span></span></code></div>
     </div>

    </div>
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Classes whose names start with an underscore are <em>not</em>
     deprecated:
     <div class="informalexample">
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">_MyClass </span><span style="color: #007700">{}</span></span></code></div>
      </div>

     </div>
    </p>
   </p></blockquote>
  </div>

  <div class="sect3">
   
   <h4 class="title">
    Using <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span> with
    <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong>
   </h4>

   <p class="simpara">
    Calling <span class="function"><a href="function.trigger-error.php" class="function">trigger_error()</a></span> with
    <code class="parameter">error_level</code> being equal to
    <strong><code><a href="errorfunc.constants.php#constant.e-user-error">E_USER_ERROR</a></code></strong> is now deprecated.
   </p>

   <p class="simpara">
    Such usages should be replaced by either throwing an exception,
    or calling <span class="function"><a href="function.exit.php" class="function">exit()</a></span>, whichever is more appropriate.
   </p>
  </div>

  <div class="sect3">
   
   <h4 class="title">
    The <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> constant
   </h4>

   <p class="simpara">
    Because the <strong><code><a href="errorfunc.constants.php#constant.e-strict">E_STRICT</a></code></strong> error level was removed,
    this constant is now deprecated.
   </p>
  </div>
 </div>

 <div class="sect2" id="migration84.deprecated.core.curl">
  <h3 class="title">cURL</h3>

  <p class="simpara">
   The <strong><code><a href="curl.constants.php#constant.curlopt-binarytransfer">CURLOPT_BINARYTRANSFER</a></code></strong> constant is now deprecated.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.date">
  <h3 class="title">Date</h3>

  <p class="simpara">
   The <code class="code"> DatePeriod::__construct(string $isostr, int $options = 0)</code>
   signature has been deprecated.
   Use <span class="methodname"><a href="dateperiod.createfromiso8601string.php" class="methodname">DatePeriod::createFromISO8601String()</a></span> instead.
  </p>

  
  <p class="simpara">
   The <strong><code><a href="datetime.constants.php#constant.sunfuncs-ret-timestamp">SUNFUNCS_RET_TIMESTAMP</a></code></strong>,
   <strong><code><a href="datetime.constants.php#constant.sunfuncs-ret-string">SUNFUNCS_RET_STRING</a></code></strong>,
   and <strong><code><a href="datetime.constants.php#constant.sunfuncs-ret-double">SUNFUNCS_RET_DOUBLE</a></code></strong> constants are now deprecated.
   This follows from the deprecation of the <span class="function"><a href="function.date-sunset.php" class="function">date_sunset()</a></span> and
   <span class="function"><a href="function.date-sunrise.php" class="function">date_sunrise()</a></span> functions in PHP 8.1.0.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.dba">
  <h3 class="title">DBA</h3>

  
  <p class="simpara">
   Passing <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> to <span class="function"><a href="function.dba-key-split.php" class="function">dba_key_split()</a></span> is now
   deprecated.
   It would always return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in those cases.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.dom">
  <h3 class="title">DOM</h3>

  
  <p class="simpara">
   The <strong><code><a href="dom.constants.php#constant.dom-php-err">DOM_PHP_ERR</a></code></strong> constant is now deprecated.
  </p>

  
  <p class="para">
   The following properties have been formally deprecated:
   <ul class="simplelist">
    <li><span class="property"><a href="class.domdocument.php#domdocument.props.actualencoding">DOMDocument::$actualEncoding</a></span></li>
    <li><span class="property"><a href="class.domdocument.php#domdocument.props.config">DOMDocument::$config</a></span></li>
    <li><span class="property"><a href="class.domentity.php#domentity.props.actualencoding">DOMEntity::$actualEncoding</a></span></li>
    <li><span class="property"><a href="class.domentity.php#domentity.props.encoding">DOMEntity::$encoding</a></span></li>
    <li><span class="property"><a href="class.domentity.php#domentity.props.version">DOMEntity::$version</a></span></li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.hash">
  <h3 class="title">Hash</h3>

  
  <p class="simpara">
   Passing invalid options to hash functions is now deprecated.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.intl">
  <h3 class="title">Intl</h3>

  <p class="simpara">
   Calling <span class="function"><strong>intlcal_set()</strong></span> or
   <span class="methodname"><a href="intlcalendar.set.php" class="methodname">IntlCalendar::set()</a></span>
   with more than two arguments is deprecated.
   Use either <span class="methodname"><a href="intlcalendar.setdate.php" class="methodname">IntlCalendar::setDate()</a></span> or
   <span class="methodname"><a href="intlcalendar.setdatetime.php" class="methodname">IntlCalendar::setDateTime()</a></span> instead.
  </p>

  <p class="simpara">
   Calling <span class="function"><strong>intlgregcal_create_instance()</strong></span> or
   <span class="methodname"><a href="intlgregoriancalendar.construct.php" class="methodname">IntlGregorianCalendar::__construct()</a></span>
   with more than two arguments is deprecated.
   Use either <span class="methodname"><a href="intlgregoriancalendar.createfromdate.php" class="methodname">IntlGregorianCalendar::createFromDate()</a></span> or
   <span class="methodname"><a href="intlgregoriancalendar.createfromdatetime.php" class="methodname">IntlGregorianCalendar::createFromDateTime()</a></span> instead.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.ldap">
  <h3 class="title">LDAP</h3>

  <p class="simpara">
   Calling <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>
   with more than two arguments is deprecated.
   Use <span class="function"><a href="function.ldap-connect-wallet.php" class="function">ldap_connect_wallet()</a></span> instead.
  </p>

  <p class="simpara">
   Calling <span class="function"><a href="function.ldap-exop.php" class="function">ldap_exop()</a></span>
   with more than four arguments is deprecated.
   Use <span class="function"><a href="function.ldap-exop-sync.php" class="function">ldap_exop_sync()</a></span> instead.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.mysqli">
  <h3 class="title">MySQLi</h3>

  
  <p class="simpara">
   The <span class="function"><a href="mysqli.ping.php" class="function">mysqli_ping()</a></span> function and
   <span class="methodname"><a href="mysqli.ping.php" class="methodname">mysqli::ping()</a></span> method
   are now deprecated as the reconnect feature was removed in PHP 8.2.0.
  </p>

  
  <p class="simpara">
   The <span class="function"><a href="mysqli.kill.php" class="function">mysqli_kill()</a></span> function and
   <span class="methodname"><a href="mysqli.kill.php" class="methodname">mysqli::kill()</a></span> method
   are now deprecated.
   If this functionality is needed a SQL <code class="literal">KILL</code> command
   can be used instead.
  </p>

  
  <p class="simpara">
   The <span class="function"><a href="mysqli.refresh.php" class="function">mysqli_refresh()</a></span> function and
   <span class="methodname"><a href="mysqli.refresh.php" class="methodname">mysqli::refresh()</a></span> method
   are now deprecated.
   If this functionality is needed a SQL <code class="literal">FLUSH</code> command
   can be used instead.
   All <strong><code><a href="mysqli.constants.php#constant.mysqli-refresh-grant">MYSQLI_REFRESH_<span class="replaceable">*</span></a></code></strong>
   constants have been deprecated as well.
  </p>

  
  <p class="simpara">
   Passing the <code class="parameter">mode</code> parameter to
   <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span> explicitly has been deprecated.
   As the <strong><code><a href="mysqli.constants.php#constant.mysqli-store-result-copy-data">MYSQLI_STORE_RESULT_COPY_DATA</a></code></strong> constant was
   only used in conjunction with this function it has also been deprecated.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.pdo-pgsql">
  <h3 class="title">PDO_PGSQL</h3>

  <p class="simpara">
   Using escaped question marks (<code class="literal">??</code>) inside
   dollar-quoted strings is deprecated.
   Because PDO_PGSQL now has its own SQL parser with dollar-quoted strings
   support, it is no longer necessary to escape question marks inside them.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.pgsql">
  <h3 class="title">PGSQL</h3>

  <p class="simpara">
   The 2 arguments signature of <span class="function"><a href="function.pg-fetch-result.php" class="function">pg_fetch_result()</a></span>,
   <span class="function"><a href="function.pg-field-prtlen.php" class="function">pg_field_prtlen()</a></span>, and
   <span class="function"><a href="function.pg-field-is-null.php" class="function">pg_field_is_null()</a></span> is now deprecated.
   Use the 3 arguments signature with <code class="parameter">row</code> set to
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> instead.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.random">
  <h3 class="title">Random</h3>

  
  <p class="simpara">
   <span class="function"><a href="function.lcg-value.php" class="function">lcg_value()</a></span> is now deprecated,
   as the function is broken in multiple ways.
   Use <span class="methodname"><a href="random-randomizer.getfloat.php" class="methodname">Random\Randomizer::getFloat()</a></span> instead.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.reflection">
  <h3 class="title">Reflection</h3>

  <p class="simpara">
   Calling <span class="methodname"><a href="reflectionmethod.construct.php" class="methodname">ReflectionMethod::__construct()</a></span>
   with one arguments is deprecated.
   Use <span class="methodname"><a href="reflectionmethod.createfrommethodname.php" class="methodname">ReflectionMethod::createFromMethodName()</a></span> instead.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.session">
  <h3 class="title">Session</h3>

  <p class="simpara">
   Calling <span class="function"><a href="function.session-set-save-handler.php" class="function">session_set_save_handler()</a></span>
   with more than two arguments is deprecated.
   Use the two arguments signature instead.
  </p>

  
  <p class="simpara">
   Changing the value of the
   <a href="session.configuration.php#ini.session.sid-length" class="link"><code class="literal">session.sid_length</code></a> and
   <a href="session.configuration.php#ini.session.sid-bits-per-character" class="link"><code class="literal">session.sid_bits_per_character</code></a>
   INI settings is deprecated.
   Update the session storage backend to accept 32 character hexadecimal
   session IDs and stop changing these two INI settings instead.
  </p>

  
  <p class="simpara">
   Changing the value of the
   <a href="session.configuration.php#ini.session.use-only-cookies" class="link"><code class="literal">session.use_only_cookies</code></a>,
   <a href="session.configuration.php#ini.session.use-trans-sid" class="link"><code class="literal">session.use_trans_sid</code></a>,
   <a href="session.configuration.php#ini.session.trans-sid-tags" class="link"><code class="literal">session.trans_sid_tags</code></a>,
   <a href="session.configuration.php#ini.session.trans-sid-hosts" class="link"><code class="literal">session.trans_sid_hosts</code></a>, and
   <a href="session.configuration.php#ini.session.referer-check" class="link"><code class="literal">session.referer_check</code></a>
   INI settings is deprecated.
   The <strong><code><a href="session.constants.php#constant.sid">SID</a></code></strong> constant is also deprecated.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.soap">
  <h3 class="title">SOAP</h3>

  
  <p class="simpara">
   Passing an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> to
   <span class="methodname"><a href="soapserver.addfunction.php" class="methodname">SoapServer::addFunction()</a></span> is now deprecated.
   If all PHP functions need to be provided flatten the array returned by
   <span class="function"><a href="function.get-defined-functions.php" class="function">get_defined_functions()</a></span>.
  </p>

  
  <p class="simpara">
   The <strong><code><a href="soap.constants.php#constant.soap-functions-all">SOAP_FUNCTIONS_ALL</a></code></strong> constant is now deprecated.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.spl">
  <h3 class="title">SPL</h3>

  <p class="simpara">
   The <span class="methodname"><a href="splfixedarray.wakeup.php" class="methodname">SplFixedArray::__wakeup()</a></span> method is now
   deprecated, as it implements
   <span class="methodname"><a href="splfixedarray.serialize.php" class="methodname">SplFixedArray::__serialize()</a></span> and
   <span class="methodname"><a href="splfixedarray.unserialize.php" class="methodname">SplFixedArray::__unserialize()</a></span>
   which need to be overwritten instead.
  </p>

  
  <p class="simpara">
   Using the default value for the <code class="parameter">escape</code> parameter for the
   <span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname">SplFileObject::setCsvControl()</a></span>,
   <span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname">SplFileObject::fputcsv()</a></span>, and
   <span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname">SplFileObject::fgetcsv()</a></span> is now deprecated.
   
   It must be passed explicitly either positionally or via named arguments.
   This does not apply to <span class="methodname"><a href="splfileobject.fputcsv.php" class="methodname">SplFileObject::fputcsv()</a></span>
   and <span class="methodname"><a href="splfileobject.fgetcsv.php" class="methodname">SplFileObject::fgetcsv()</a></span> if
   <span class="methodname"><a href="splfileobject.setcsvcontrol.php" class="methodname">SplFileObject::setCsvControl()</a></span> was used to set a
   new default value.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.standard">
  <h3 class="title">Standard</h3>

  <p class="simpara">
   Calling <span class="function"><a href="function.stream-context-set-option.php" class="function">stream_context_set_option()</a></span>
   with two arguments is deprecated.
   Use <span class="function"><a href="function.stream-context-set-options.php" class="function">stream_context_set_options()</a></span> instead.
  </p>

  
  <p class="simpara">
   Unserializing strings using the uppercase <code class="literal">S</code> tag
   with <span class="function"><a href="function.unserialize.php" class="function">unserialize()</a></span> is deprecated.
  </p>

  
  <p class="simpara">
   Using the default value for the <code class="parameter">escape</code> parameter for the
   <span class="function"><a href="function.fputcsv.php" class="function">fputcsv()</a></span>,
   <span class="function"><a href="function.fgetcsv.php" class="function">fgetcsv()</a></span>, and
   <span class="function"><a href="function.str-getcsv.php" class="function">str_getcsv()</a></span>  is now deprecated.
   
   It must be passed explicitly either positionally or via named arguments.
  </p>
 </div>

 <div class="sect2" id="migration84.deprecated.core.xml">
  <h3 class="title">XML</h3>

  
  <p class="simpara">
   The <span class="function"><a href="function.xml-set-object.php" class="function">xml_set_object()</a></span> function has been deprecated.
  </p>

  
  <p class="simpara">
   Passing non-<span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> strings to the
   <span class="function"><strong>xml_set_()</strong><span class="replaceable">*</span></span>
   functions is now deprecated.
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration84/deprecated.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration84.deprecated%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration84.deprecated&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.deprecated.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="130120">  <div class="votes">
    <div id="Vu130120">
    <a href="/manual/vote-note.php?id=130120&amp;page=migration84.deprecated&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130120">
    <a href="/manual/vote-note.php?id=130120&amp;page=migration84.deprecated&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130120" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130120" class="name">
  <strong class="user"><em>john dot fro at mailinator dot com</em></strong></a><a class="genanchor" href="#130120"> &para;</a><div class="date" title="2025-03-07 02:45"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130120">
<div class="phpcode"><code><span class="html">Try using [$this, 'method_string'] in place of 'method_string' for functions like xml_set_element_handler, etc. <br /><br />As in xml_set_element_handler($this-parser, [$this, 'method'], [$this, 'another_method']);  <br /><br />This is what the note about "callable" means--you need to reference the actual method in a callable way, not just use a string.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration84.deprecated&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration84.deprecated.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="">
                            <a href="migration84.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="current">
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
