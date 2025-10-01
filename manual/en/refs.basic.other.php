<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Other Basic Extensions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/refs.basic.other.php">
 <link rel="alternate" href="https://www.php.net/manual/en/refs.basic.other.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/funcref.php">
 <link rel="prev" href="https://www.php.net/manual/en/syncsharedmemory.write.php">
 <link rel="next" href="https://www.php.net/manual/en/book.geoip.php">

 <link rel="alternate" href="https://www.php.net/manual/en/refs.basic.other.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/refs.basic.other.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/refs.basic.other.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/refs.basic.other.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/refs.basic.other.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/refs.basic.other.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/refs.basic.other.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/refs.basic.other.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/refs.basic.other.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/refs.basic.other.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/refs.basic.other.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Other Basic Extensions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Other Basic Extensions - Manual" />
<meta name="twitter:description" content="Other Basic Extensions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Other Basic Extensions - Manual" />
<meta itemprop="description" content="Other Basic Extensions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Other Basic Extensions" />

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
        <a href="book.geoip.php">
          GeoIP &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="syncsharedmemory.write.php">
          &laquo; SyncSharedMemory::write        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      </ul>
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
            <option value='en/refs.basic.other.php' selected="selected">English</option>
            <option value='de/refs.basic.other.php'>German</option>
            <option value='es/refs.basic.other.php'>Spanish</option>
            <option value='fr/refs.basic.other.php'>French</option>
            <option value='it/refs.basic.other.php'>Italian</option>
            <option value='ja/refs.basic.other.php'>Japanese</option>
            <option value='pt_BR/refs.basic.other.php'>Brazilian Portuguese</option>
            <option value='ru/refs.basic.other.php'>Russian</option>
            <option value='tr/refs.basic.other.php'>Turkish</option>
            <option value='uk/refs.basic.other.php'>Ukrainian</option>
            <option value='zh/refs.basic.other.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="refs.basic.other" class="set">
   <h1 class="title">Other Basic Extensions</h1>
   



   






   



   





   



   






   






   







   



   






   




   







   

 




   

 





   







   







   






   







   






   






   
 





   






   




  <ul class="chunklist chunklist_set"><li><a href="book.geoip.php">GeoIP</a> — Geo IP Location<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.geoip.php">Introduction</a></li><li><a href="geoip.setup.php">Installing/Configuring</a></li><li><a href="geoip.constants.php">Predefined Constants</a></li><li><a href="ref.geoip.php">GeoIP Functions</a></li></ul></li><li><a href="book.fann.php">FANN</a> — FANN (Fast Artificial Neural Network)<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.fann.php">Introduction</a></li><li><a href="fann.setup.php">Installing/Configuring</a></li><li><a href="fann.constants.php">Predefined Constants</a></li><li><a href="fann.examples.php">Examples</a></li><li><a href="ref.fann.php">Fann Functions</a></li><li><a href="class.fannconnection.php">FANNConnection</a> — The FANNConnection class</li></ul></li><li><a href="book.igbinary.php">Igbinary</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.igbinary.php">Introduction</a></li><li><a href="igbinary.setup.php">Installing/Configuring</a></li><li><a href="ref.igbinary.php">Igbinary Functions</a></li></ul></li><li><a href="book.json.php">JSON</a> — JavaScript Object Notation<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.json.php">Introduction</a></li><li><a href="json.setup.php">Installing/Configuring</a></li><li><a href="json.constants.php">Predefined Constants</a></li><li><a href="class.jsonexception.php">JsonException</a> — The JsonException class</li><li><a href="class.jsonserializable.php">JsonSerializable</a> — The JsonSerializable interface</li><li><a href="ref.json.php">JSON Functions</a></li></ul></li><li><a href="book.simdjson.php">Simdjson</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.simdjson.php">Introduction</a></li><li><a href="simdjson.setup.php">Installing/Configuring</a></li><li><a href="simdjson.constants.php">Predefined Constants</a></li><li><a href="ref.simdjson.php">Simdjson Functions</a></li><li><a href="class.simdjsonexception.php">SimdJsonException</a> — The SimdJsonException class</li><li><a href="class.simdjsonvalueerror.php">SimdJsonValueError</a> — The SimdJsonValueError class</li></ul></li><li><a href="book.lua.php">Lua</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.lua.php">Introduction</a></li><li><a href="lua.setup.php">Installing/Configuring</a></li><li><a href="class.lua.php">Lua</a> — The Lua class</li><li><a href="class.luaclosure.php">LuaClosure</a> — The LuaClosure class</li></ul></li><li><a href="book.luasandbox.php">LuaSandbox</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.luasandbox.php">Introduction</a></li><li><a href="luasandbox.setup.php">Installing/Configuring</a></li><li><a href="reference.luasandbox.differences.php">Differences from Standard Lua</a></li><li><a href="luasandbox.examples.php">Examples</a></li><li><a href="class.luasandbox.php">LuaSandbox</a> — The LuaSandbox class</li><li><a href="class.luasandboxfunction.php">LuaSandboxFunction</a> — The LuaSandboxFunction class</li><li><a href="class.luasandboxerror.php">LuaSandboxError</a> — The LuaSandboxError class</li><li><a href="class.luasandboxerrorerror.php">LuaSandboxErrorError</a> — The LuaSandboxErrorError class</li><li><a href="class.luasandboxfatalerror.php">LuaSandboxFatalError</a> — The LuaSandboxFatalError class</li><li><a href="class.luasandboxmemoryerror.php">LuaSandboxMemoryError</a> — The LuaSandboxMemoryError class</li><li><a href="class.luasandboxruntimeerror.php">LuaSandboxRuntimeError</a> — The LuaSandboxRuntimeError class</li><li><a href="class.luasandboxsyntaxerror.php">LuaSandboxSyntaxError</a> — The LuaSandboxSyntaxError class</li><li><a href="class.luasandboxtimeouterror.php">LuaSandboxTimeoutError</a> — The LuaSandboxTimeoutError class</li></ul></li><li><a href="book.misc.php">Misc.</a> — Miscellaneous Functions<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.misc.php">Introduction</a></li><li><a href="misc.setup.php">Installing/Configuring</a></li><li><a href="misc.constants.php">Predefined Constants</a></li><li><a href="ref.misc.php">Misc. Functions</a></li><li><a href="changelog.misc.php">Changelog</a></li></ul></li><li><a href="book.random.php">Random</a> — Random Number Generators and Functions Related to Randomness<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.random.php">Introduction</a></li><li><a href="random.constants.php">Predefined Constants</a></li><li><a href="random.examples.php">Examples</a></li><li><a href="ref.random.php">Random Functions</a></li><li><a href="class.random-randomizer.php">Random\Randomizer</a> — The Random\Randomizer class</li><li><a href="enum.random-intervalboundary.php">Random\IntervalBoundary</a> — The Random\IntervalBoundary Enum</li><li><a href="class.random-engine.php">Random\Engine</a> — The Random\Engine interface</li><li><a href="class.random-cryptosafeengine.php">Random\CryptoSafeEngine</a> — The Random\CryptoSafeEngine interface</li><li><a href="class.random-engine-secure.php">Random\Engine\Secure</a> — The Random\Engine\Secure class</li><li><a href="class.random-engine-mt19937.php">Random\Engine\Mt19937</a> — The Random\Engine\Mt19937 class</li><li><a href="class.random-engine-pcgoneseq128xslrr64.php">Random\Engine\PcgOneseq128XslRr64</a> — The Random\Engine\PcgOneseq128XslRr64 class</li><li><a href="class.random-engine-xoshiro256starstar.php">Random\Engine\Xoshiro256StarStar</a> — The Random\Engine\Xoshiro256StarStar class</li><li><a href="class.random-randomerror.php">Random\RandomError</a> — The Random\RandomError class</li><li><a href="class.random-brokenrandomengineerror.php">Random\BrokenRandomEngineError</a> — The Random\BrokenRandomEngineError class</li><li><a href="class.random-randomexception.php">Random\RandomException</a> — The Random\RandomException class</li></ul></li><li><a href="book.seaslog.php">Seaslog</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.seaslog.php">Introduction</a></li><li><a href="seaslog.setup.php">Installing/Configuring</a></li><li><a href="seaslog.constants.php">Predefined Constants</a></li><li><a href="seaslog.examples.php">Examples</a></li><li><a href="ref.seaslog.php">Seaslog Functions</a></li><li><a href="class.seaslog.php">SeasLog</a> — The SeasLog class</li></ul></li><li><a href="book.spl.php">SPL</a> — Standard PHP Library (SPL)<ul class="chunklist chunklist_set chunklist_children"><li><a href="spl.interfaces.php">Interfaces</a></li><li><a href="spl.datastructures.php">Datastructures</a></li><li><a href="spl.exceptions.php">Exceptions</a></li><li><a href="spl.iterators.php">Iterators</a></li><li><a href="spl.files.php">File Handling</a></li><li><a href="ref.spl.php">SPL Functions</a></li></ul></li><li><a href="book.stream.php">Streams</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.stream.php">Introduction</a></li><li><a href="stream.setup.php">Installing/Configuring</a></li><li><a href="stream.constants.php">Predefined Constants</a></li><li><a href="stream.filters.php">Stream Filters</a></li><li><a href="stream.contexts.php">Stream Contexts</a></li><li><a href="stream.errors.php">Stream Errors</a></li><li><a href="stream.examples.php">Examples</a></li><li><a href="class.php-user-filter.php">php_user_filter</a> — The php_user_filter class</li><li><a href="class.streamwrapper.php">streamWrapper</a> — The streamWrapper class</li><li><a href="ref.stream.php">Stream Functions</a></li></ul></li><li><a href="book.swoole.php">Swoole</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.swoole.php">Introduction</a></li><li><a href="swoole.setup.php">Installing/Configuring</a></li><li><a href="swoole.constants.php">Predefined Constants</a></li><li><a href="ref.swoole-funcs.php">Swoole Functions</a></li><li><a href="class.swoole-async.php">Swoole\Async</a> — The Swoole\Async class</li><li><a href="class.swoole-atomic.php">Swoole\Atomic</a> — The Swoole\Atomic class</li><li><a href="class.swoole-buffer.php">Swoole\Buffer</a> — The Swoole\Buffer class</li><li><a href="class.swoole-channel.php">Swoole\Channel</a> — The Swoole\Channel class</li><li><a href="class.swoole-client.php">Swoole\Client</a> — The Swoole\Client class</li><li><a href="class.swoole-connection-iterator.php">Swoole\Connection\Iterator</a> — The Swoole\Connection\Iterator class</li><li><a href="class.swoole-coroutine.php">Swoole\Coroutine</a> — The Swoole\Coroutine class</li><li><a href="class.swoole-coroutine-lock.php">Swoole\Coroutine\Lock</a> — The Swoole\Coroutine\Lock class</li><li><a href="class.swoole-event.php">Swoole\Event</a> — The Swoole\Event class</li><li><a href="class.swoole-exception.php">Swoole\Exception</a> — The Swoole\Exception class</li><li><a href="class.swoole-http-client.php">Swoole\Http\Client</a> — The Swoole\Http\Client class</li><li><a href="class.swoole-http-request.php">Swoole\Http\Request</a> — The Swoole\Http\Request class</li><li><a href="class.swoole-http-response.php">Swoole\Http\Response</a> — The Swoole\Http\Response class</li><li><a href="class.swoole-http-server.php">Swoole\Http\Server</a> — The Swoole\Http\Server class</li><li><a href="class.swoole-lock.php">Swoole\Lock</a> — The Swoole\Lock class</li><li><a href="class.swoole-mmap.php">Swoole\Mmap</a> — The Swoole\Mmap class</li><li><a href="class.swoole-mysql.php">Swoole\MySQL</a> — The Swoole\MySQL class</li><li><a href="class.swoole-mysql-exception.php">Swoole\MySQL\Exception</a> — The Swoole\MySQL\Exception class</li><li><a href="class.swoole-process.php">Swoole\Process</a> — The Swoole\Process class</li><li><a href="class.swoole-redis-server.php">Swoole\Redis\Server</a> — The Swoole\Redis\Server class</li><li><a href="class.swoole-runtime.php">Swoole\Runtime</a> — The Swoole\Runtime class</li><li><a href="class.swoole-serialize.php">Swoole\Serialize</a> — The Swoole\Serialize class</li><li><a href="class.swoole-server.php">Swoole\Server</a> — The Swoole\Server class</li><li><a href="class.swoole-table.php">Swoole\Table</a> — The Swoole\Table class</li><li><a href="class.swoole-timer.php">Swoole\Timer</a> — The Swoole\Timer class</li><li><a href="class.swoole-websocket-frame.php">Swoole\WebSocket\Frame</a> — The Swoole\WebSocket\Frame class</li><li><a href="class.swoole-websocket-server.php">Swoole\WebSocket\Server</a> — The Swoole\WebSocket\Server class</li></ul></li><li><a href="book.tidy.php">Tidy</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.tidy.php">Introduction</a></li><li><a href="tidy.setup.php">Installing/Configuring</a></li><li><a href="tidy.constants.php">Predefined Constants</a></li><li><a href="tidy.examples.php">Examples</a></li><li><a href="class.tidy.php">tidy</a> — The tidy class</li><li><a href="class.tidynode.php">tidyNode</a> — The tidyNode class</li><li><a href="ref.tidy.php">Tidy Functions</a></li></ul></li><li><a href="book.tokenizer.php">Tokenizer</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.tokenizer.php">Introduction</a></li><li><a href="tokenizer.setup.php">Installing/Configuring</a></li><li><a href="tokenizer.constants.php">Predefined Constants</a></li><li><a href="tokenizer.examples.php">Examples</a></li><li><a href="class.phptoken.php">PhpToken</a> — The PhpToken class</li><li><a href="ref.tokenizer.php">Tokenizer Functions</a></li></ul></li><li><a href="book.url.php">URLs</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.url.php">Introduction</a></li><li><a href="url.constants.php">Predefined Constants</a></li><li><a href="ref.url.php">URL Functions</a></li></ul></li><li><a href="book.v8js.php">V8js</a> — V8 Javascript Engine Integration<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.v8js.php">Introduction</a></li><li><a href="v8js.setup.php">Installing/Configuring</a></li><li><a href="v8js.examples.php">Examples</a></li><li><a href="class.v8js.php">V8Js</a> — The V8Js class</li><li><a href="class.v8jsexception.php">V8JsException</a> — The V8JsException class</li></ul></li><li><a href="book.yaml.php">Yaml</a> — YAML Data Serialization<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.yaml.php">Introduction</a></li><li><a href="yaml.setup.php">Installing/Configuring</a></li><li><a href="yaml.constants.php">Predefined Constants</a></li><li><a href="yaml.examples.php">Examples</a></li><li><a href="yaml.callbacks.php">Callbacks</a></li><li><a href="ref.yaml.php">Yaml Functions</a></li></ul></li><li><a href="book.yaf.php">Yaf</a> — Yet Another Framework<ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.yaf.php">Introduction</a></li><li><a href="yaf.setup.php">Installing/Configuring</a></li><li><a href="yaf.constants.php">Predefined Constants</a></li><li><a href="yaf.tutorials.php">Examples</a></li><li><a href="yaf.appconfig.php">Application Configuration</a></li><li><a href="class.yaf-application.php">Yaf_Application</a> — The Yaf_Application class</li><li><a href="class.yaf-bootstrap-abstract.php">Yaf_Bootstrap_Abstract</a> — The Yaf_Bootstrap_Abstract class</li><li><a href="class.yaf-dispatcher.php">Yaf_Dispatcher</a> — The Yaf_Dispatcher class</li><li><a href="class.yaf-config-abstract.php">Yaf_Config_Abstract</a> — The Yaf_Config_Abstract class</li><li><a href="class.yaf-config-ini.php">Yaf_Config_Ini</a> — The Yaf_Config_Ini class</li><li><a href="class.yaf-config-simple.php">Yaf_Config_Simple</a> — The Yaf_Config_Simple class</li><li><a href="class.yaf-controller-abstract.php">Yaf_Controller_Abstract</a> — The Yaf_Controller_Abstract class</li><li><a href="class.yaf-action-abstract.php">Yaf_Action_Abstract</a> — The Yaf_Action_Abstract class</li><li><a href="class.yaf-view-interface.php">Yaf_View_Interface</a> — The Yaf_View_Interface class</li><li><a href="class.yaf-view-simple.php">Yaf_View_Simple</a> — The Yaf_View_Simple class</li><li><a href="class.yaf-loader.php">Yaf_Loader</a> — The Yaf_Loader class</li><li><a href="class.yaf-plugin-abstract.php">Yaf_Plugin_Abstract</a> — The Yaf_Plugin_Abstract class</li><li><a href="class.yaf-registry.php">Yaf_Registry</a> — The Yaf_Registry class</li><li><a href="class.yaf-request-abstract.php">Yaf_Request_Abstract</a> — The Yaf_Request_Abstract class</li><li><a href="class.yaf-request-http.php">Yaf_Request_Http</a> — The Yaf_Request_Http class</li><li><a href="class.yaf-request-simple.php">Yaf_Request_Simple</a> — The Yaf_Request_Simple class</li><li><a href="class.yaf-response-abstract.php">Yaf_Response_Abstract</a> — The Yaf_Response_Abstract class</li><li><a href="class.yaf-route-interface.php">Yaf_Route_Interface</a> — The Yaf_Route_Interface class</li><li><a href="class.yaf-route-map.php">Yaf_Route_Map</a> — The Yaf_Route_Map class</li><li><a href="class.yaf-route-regex.php">Yaf_Route_Regex</a> — The Yaf_Route_Regex class</li><li><a href="class.yaf-route-rewrite.php">Yaf_Route_Rewrite</a> — The Yaf_Route_Rewrite class</li><li><a href="class.yaf-router.php">Yaf_Router</a> — The Yaf_Router class</li><li><a href="class.yaf-route-simple.php">Yaf_Route_Simple</a> — The Yaf_Route_Simple class</li><li><a href="class.yaf-route-static.php">Yaf_Route_Static</a> — The Yaf_Route_Static class</li><li><a href="class.yaf-route-supervar.php">Yaf_Route_Supervar</a> — The Yaf_Route_Supervar class</li><li><a href="class.yaf-session.php">Yaf_Session</a> — The Yaf_Session class</li><li><a href="class.yaf-exception.php">Yaf_Exception</a> — The Yaf_Exception class</li><li><a href="class.yaf-exception-typeerror.php">Yaf_Exception_TypeError</a> — The Yaf_Exception_TypeError class</li><li><a href="class.yaf-exception-startuperror.php">Yaf_Exception_StartupError</a> — The Yaf_Exception_StartupError class</li><li><a href="class.yaf-exception-dispatchfailed.php">Yaf_Exception_DispatchFailed</a> — The Yaf_Exception_DispatchFailed class</li><li><a href="class.yaf-exception-routerfailed.php">Yaf_Exception_RouterFailed</a> — The Yaf_Exception_RouterFailed class</li><li><a href="class.yaf-exception-loadfailed.php">Yaf_Exception_LoadFailed</a> — The Yaf_Exception_LoadFailed class</li><li><a href="class.yaf-exception-loadfailed-module.php">Yaf_Exception_LoadFailed_Module</a> — The Yaf_Exception_LoadFailed_Module class</li><li><a href="class.yaf-exception-loadfailed-controller.php">Yaf_Exception_LoadFailed_Controller</a> — The Yaf_Exception_LoadFailed_Controller class</li><li><a href="class.yaf-exception-loadfailed-action.php">Yaf_Exception_LoadFailed_Action</a> — The Yaf_Exception_LoadFailed_Action class</li><li><a href="class.yaf-exception-loadfailed-view.php">Yaf_Exception_LoadFailed_View</a> — The Yaf_Exception_LoadFailed_View class</li></ul></li><li><a href="book.yaconf.php">Yaconf</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.yaconf.php">Introduction</a></li><li><a href="yaconf.setup.php">Installing/Configuring</a></li><li><a href="class.yaconf.php">Yaconf</a> — The Yaconf class</li></ul></li><li><a href="book.taint.php">Taint</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.taint.php">Introduction</a></li><li><a href="taint.setup.php">Installing/Configuring</a></li><li><a href="taint.detail.php">More Details</a></li><li><a href="ref.taint.php">Taint Functions</a></li></ul></li><li><a href="book.ds.php">Data Structures</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.ds.php">Introduction</a></li><li><a href="ds.setup.php">Installing/Configuring</a></li><li><a href="ds.examples.php">Examples</a></li><li><a href="class.ds-collection.php">Ds\Collection</a> — The Collection interface</li><li><a href="class.ds-hashable.php">Ds\Hashable</a> — The Hashable interface</li><li><a href="class.ds-sequence.php">Ds\Sequence</a> — The Sequence interface</li><li><a href="class.ds-vector.php">Ds\Vector</a> — The Vector class</li><li><a href="class.ds-deque.php">Ds\Deque</a> — The Deque class</li><li><a href="class.ds-map.php">Ds\Map</a> — The Map class</li><li><a href="class.ds-pair.php">Ds\Pair</a> — The Pair class</li><li><a href="class.ds-set.php">Ds\Set</a> — The Set class</li><li><a href="class.ds-stack.php">Ds\Stack</a> — The Stack class</li><li><a href="class.ds-queue.php">Ds\Queue</a> — The Queue class</li><li><a href="class.ds-priorityqueue.php">Ds\PriorityQueue</a> — The PriorityQueue class</li></ul></li><li><a href="book.var_representation.php">var_representation</a><ul class="chunklist chunklist_set chunklist_children"><li><a href="intro.var_representation.php">Introduction</a></li><li><a href="var-representation.setup.php">Installing/Configuring</a></li><li><a href="var-representation.constants.php">Predefined Constants</a></li><li><a href="ref.var-representation.php">var_representation Functions</a></li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-base/blob/master/manual.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Frefs.basic.other%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=refs.basic.other&amp;repo=en&amp;redirect=https://www.php.net/manual/en/refs.basic.other.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="funcref.php">Function Reference</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="refs.basic.php.php" title="Affecting PHP's Behaviour">Affecting PHP's Behaviour</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.audio.php" title="Audio Formats Manipulation">Audio Formats Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.auth.php" title="Authentication Services">Authentication Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.cmdline.php" title="Command Line Specific Extensions">Command Line Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.compression.php" title="Compression and Archive Extensions">Compression and Archive Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.crypto.php" title="Cryptography Extensions">Cryptography Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.database.php" title="Database Extensions">Database Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.calendar.php" title="Date and Time Related Extensions">Date and Time Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.file.php" title="File System Related Extensions">File System Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.international.php" title="Human Language and Character Encoding Support">Human Language and Character Encoding Support</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.image.php" title="Image Processing and Generation">Image Processing and Generation</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.mail.php" title="Mail Related Extensions">Mail Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.math.php" title="Mathematical Extensions">Mathematical Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.nontext.php" title="Non-&#8203;Text MIME Output">Non-&#8203;Text MIME Output</a>
                        </li>
                                                <li class="">
                            <a href="refs.fileprocess.process.php" title="Process Control Extensions">Process Control Extensions</a>
                        </li>
                                                <li class="current">
                            <a href="refs.basic.other.php" title="Other Basic Extensions">Other Basic Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.remote.other.php" title="Other Services">Other Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.search.php" title="Search Engine Extensions">Search Engine Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.server.php" title="Server Specific Extensions">Server Specific Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.session.php" title="Session Extensions">Session Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.text.php" title="Text Processing">Text Processing</a>
                        </li>
                                                <li class="">
                            <a href="refs.basic.vartype.php" title="Variable and Type Related Extensions">Variable and Type Related Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.webservice.php" title="Web Services">Web Services</a>
                        </li>
                                                <li class="">
                            <a href="refs.utilspec.windows.php" title="Windows Only Extensions">Windows Only Extensions</a>
                        </li>
                                                <li class="">
                            <a href="refs.xml.php" title="XML Manipulation">XML Manipulation</a>
                        </li>
                                                <li class="">
                            <a href="refs.ui.php" title="GUI Extensions">GUI Extensions</a>
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
