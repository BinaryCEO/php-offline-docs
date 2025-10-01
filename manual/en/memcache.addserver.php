<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache::addServer - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcache.addserver.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcache.addserver.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcache.addserver.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcache.add.php">
 <link rel="next" href="https://www.php.net/manual/en/memcache.close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcache.addserver.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcache.addserver.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcache.addserver.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcache.addserver.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcache.addserver.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcache.addserver.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcache.addserver.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcache.addserver.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcache.addserver.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcache.addserver.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcache.addserver.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a memcached server to connection pool" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache::addServer - Manual" />
<meta name="twitter:description" content="Add a memcached server to connection pool" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache::addServer - Manual" />
<meta itemprop="description" content="Add a memcached server to connection pool" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a memcached server to connection pool" />

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
        <a href="memcache.close.php">
          Memcache::close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcache.add.php">
          &laquo; Memcache::add        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.memcache.php'>Memcache</a></li>      <li><a href='class.memcache.php'>Memcache</a></li>      </ul>
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
            <option value='en/memcache.addserver.php' selected="selected">English</option>
            <option value='de/memcache.addserver.php'>German</option>
            <option value='es/memcache.addserver.php'>Spanish</option>
            <option value='fr/memcache.addserver.php'>French</option>
            <option value='it/memcache.addserver.php'>Italian</option>
            <option value='ja/memcache.addserver.php'>Japanese</option>
            <option value='pt_BR/memcache.addserver.php'>Brazilian Portuguese</option>
            <option value='ru/memcache.addserver.php'>Russian</option>
            <option value='tr/memcache.addserver.php'>Turkish</option>
            <option value='uk/memcache.addserver.php'>Ukrainian</option>
            <option value='zh/memcache.addserver.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcache.addserver" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcache::addServer</h1>
  <h1 class="refname">memcache_add_server</h1>
  <p class="verinfo">(PECL memcache &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Memcache::addServer</span> -- <span class="refname">memcache_add_server</span> &mdash; <span class="dc-title">Add a memcached server to connection pool</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-memcache.addserver-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>Memcache::addServer</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 11211</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$persistent</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$weight</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retry_interval</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$status</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$failure_callback</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeoutms</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

    <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_add_server</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 11211</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$persistent</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$weight</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeout</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$retry_interval</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$status</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$failure_callback</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$timeoutms</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  
  <p class="para rdfs-comment">
   <span class="function"><strong>Memcache::addServer()</strong></span> adds a server to the connection pool. 
  </p>
  
  <p class="para">
   When using this method (as opposed to <span class="function"><a href="memcache.connect.php" class="function">Memcache::connect()</a></span> and 
   <span class="function"><a href="memcache.pconnect.php" class="function">Memcache::pconnect()</a></span>) the network connection is not established 
   until actually needed. Thus there is no overhead in adding a large number of servers 
   to the pool, even though they might not all be used.
  </p>
  
  <p class="para">
   Failover may occur at any stage in any of the methods, as long as other 
   servers are available the request the user won&#039;t notice. Any kind of 
   socket or Memcached server level errors (except out-of-memory) may trigger 
   the failover. Normal client errors such as adding an existing key will not 
   trigger a failover.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function has been added to Memcache version 2.0.0.
   </p>
  </p></blockquote>

 </div>


 <div class="refsect1 parameters" id="refsect1-memcache.addserver-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">host</code></dt>
     <dd>
      <p class="para">
       Point to the host where memcached is listening for connections. This parameter
       may also specify other transports like <code class="literal">unix:///path/to/memcached.sock</code>
       to use UNIX domain sockets, in this case <code class="parameter">port</code> must also
       be set to <code class="literal">0</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       Point to the port where memcached is listening for connections.
       Set this
       parameter to <code class="literal">0</code> when using UNIX domain sockets.
      </p>
      <p class="para">
       Please note: <code class="parameter">port</code> defaults to
       <a href="memcache.ini.php#ini.memcache.default-port" class="link">memcache.default_port</a>
       if not specified. For this reason it is wise to specify the port
       explicitly in this method call.
      </p>
     </dd>
    
    
     <dt><code class="parameter">persistent</code></dt>
     <dd>
      <p class="para">
       Controls the use of a persistent connection. Default to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">weight</code></dt>
     <dd>
      <p class="para">
       Number of buckets to create for this server which in turn control its
       probability of it being selected. The probability is relative to the
       total weight of all servers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">timeout</code></dt>
     <dd>
      <p class="para">
       Value in seconds which will be used for connecting to the daemon. Think
       twice before changing the default value of 1 second - you can lose all
       the advantages of caching if your connection is too slow.
      </p>
     </dd>
    
    
     <dt><code class="parameter">retry_interval</code></dt>
     <dd>
      <p class="para">
       Controls how often a failed server will be retried, the default value
       is 15 seconds. Setting this parameter to -1 disables automatic retry. 
       Neither this nor the <code class="parameter">persistent</code> parameter has any 
       effect when the extension is loaded dynamically via <span class="function"><a href="function.dl.php" class="function">dl()</a></span>.
      </p>
      <p class="para">
       Each failed connection struct has its own timeout and before it has expired 
       the struct will be skipped when selecting backends to serve a request. Once 
       expired the connection will be successfully reconnected or marked as failed 
       for another <code class="parameter">retry_interval</code> seconds. The typical 
       effect is that each web server child will retry the connection about every
       <code class="parameter">retry_interval</code> seconds when serving a page.
      </p>
     </dd>
    
    
     <dt><code class="parameter">status</code></dt>
     <dd>
      <p class="para">
       Controls if the server should be flagged as online. Setting this parameter
       to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and <code class="parameter">retry_interval</code> to -1 allows a failed 
       server to be kept in the pool so as not to affect the key distribution 
       algorithm. Requests for this server will then failover or fail immediately 
       depending on the <code class="parameter">memcache.allow_failover</code> setting.
       Default to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, meaning the server should be considered online.
      </p>
     </dd>
    
    
     <dt><code class="parameter">failure_callback</code></dt>
     <dd>
      <p class="para">
       Allows the user to specify a callback function to run upon encountering an 
       error. The callback is run before failover is attempted. The function takes 
       two parameters, the hostname and port of the failed server.
      </p>
     </dd>
    
    
     <dt><code class="parameter">timeoutms</code></dt>
     <dd>
      <p class="para">
       
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-memcache.addserver-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


<div class="refsect1 examples" id="refsect1-memcache.addserver-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4652">
    <p><strong>Example #1 <span class="function"><strong>Memcache::addServer()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* OO API */<br /><br /></span><span style="color: #0000BB">$memcache </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcache</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$memcache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$memcache</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addServer</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host2'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* procedural API */<br /><br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">memcache_add_server</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'memcache_host2'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-memcache.addserver-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    When the <code class="parameter">port</code> is unspecified, this method defaults to the
    value set of the PHP ini directive
    <a href="memcache.ini.php#ini.memcache.default-port" class="link">memcache.default_port</a>
    If this value was changed elsewhere in your application it might lead to
    unexpected results: for this reason it is wise to always specify the port
    explicitly in this method call.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-memcache.addserver-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="memcache.connect.php" class="function" rel="rdfs-seeAlso">Memcache::connect()</a> - Open memcached server connection</span></li>
    <li><span class="function"><a href="memcache.pconnect.php" class="function" rel="rdfs-seeAlso">Memcache::pconnect()</a> - Open memcached server persistent connection</span></li>
    <li><span class="function"><a href="memcache.close.php" class="function" rel="rdfs-seeAlso">Memcache::close()</a> - Close memcached server connection</span></li>
    <li><span class="function"><a href="memcache.setserverparams.php" class="function" rel="rdfs-seeAlso">Memcache::setServerParams()</a> - Changes server parameters and status at runtime</span></li>
    <li><span class="function"><a href="memcache.getserverstatus.php" class="function" rel="rdfs-seeAlso">Memcache::getServerStatus()</a> - Returns server status</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/memcache/addserver.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcache.addserver%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcache.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.addserver.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104484">  <div class="votes">
    <div id="Vu104484">
    <a href="/manual/vote-note.php?id=104484&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104484">
    <a href="/manual/vote-note.php?id=104484&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104484" title="87% like this...">
    6
    </div>
  </div>
  <a href="#104484" class="name">
  <strong class="user"><em>rstaveley at seseit dot com</em></strong></a><a class="genanchor" href="#104484"> &para;</a><div class="date" title="2011-06-17 04:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104484">
<div class="phpcode"><code><span class="html">The Memcache client library is responsible for picking the right server to set/get data. That's why addServer is what you want to use rather than connect, when you have more than one Memcache server. A subsequent set/get will then connect on demand to the appropriate instance as needs be. Disconnection to whatever servers were connected to happening when you close or your script terminates.<br /><br />Memcache instances added to your Memcache object via addServer should be added in the same order in your application to ensure that the same server is picked for use with the same key. <br /><br />A client library may be implemented to run a CRC on the key and do a modulus over the number of instances in the list to select an instance from the list for the set/get. This ensures that data is spread nicely across the nodes. <br /><br />That all works nicely behind the scenes for you in your PHP code, as long as you add your list of Memcache instances in a consistent manner with addServer.</span></code></div>
  </div>
 </div>
  <div class="note" id="105728">  <div class="votes">
    <div id="Vu105728">
    <a href="/manual/vote-note.php?id=105728&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105728">
    <a href="/manual/vote-note.php?id=105728&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105728" title="71% like this...">
    3
    </div>
  </div>
  <a href="#105728" class="name">
  <strong class="user"><em>enno dot rehling at gmail dot com</em></strong></a><a class="genanchor" href="#105728"> &para;</a><div class="date" title="2011-09-09 04:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105728">
<div class="phpcode"><code><span class="html">The $timeoutms argument can be used to specify the timeout in milliseconds, but isn't available in all versions. For example, it exists in php_memcache 2.2.6, but not in 3.0.4. In 2.2.6, if you specify it, then it overrides $timeout.<br /><br />Caveat emptor: If $timeoutms is not specified, it defaults to the value of memcache.default_timeout_ms in php.ini, which defaults to 1000 if not set. This also overrides $timeout, which has the curious effect that $timeout is always ignored in php_memcache 2.2.6 (either in favor of $timeoutms, memcache.default_timeout_ms or the value 1000, in that order of priority).</span></code></div>
  </div>
 </div>
  <div class="note" id="113527">  <div class="votes">
    <div id="Vu113527">
    <a href="/manual/vote-note.php?id=113527&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113527">
    <a href="/manual/vote-note.php?id=113527&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113527" title="62% like this...">
    2
    </div>
  </div>
  <a href="#113527" class="name">
  <strong class="user"><em>joewynn dot nz+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#113527"> &para;</a><div class="date" title="2013-10-25 10:12"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113527">
<div class="phpcode"><code><span class="html">Note that this method will always return TRUE because a connection is not actually made at call time. See this bug report for more information: <a href="https://bugs.php.net/bug.php?id=58193" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=58193</a></span></code></div>
  </div>
 </div>
  <div class="note" id="103801">  <div class="votes">
    <div id="Vu103801">
    <a href="/manual/vote-note.php?id=103801&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103801">
    <a href="/manual/vote-note.php?id=103801&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103801" title="57% like this...">
    1
    </div>
  </div>
  <a href="#103801" class="name">
  <strong class="user"><em>eu at serbannistor dot ro</em></strong></a><a class="genanchor" href="#103801"> &para;</a><div class="date" title="2011-05-04 06:30"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103801">
<div class="phpcode"><code><span class="html">Actually if you have two memcached servers from which one of them is on localhost, and the other is on a remote machine you can communicate with both even if you specify the loopback address for the local one.<br /><br /><span class="default">&lt;?php<br />$memcache_obj </span><span class="keyword">= </span><span class="default">memcache_connect</span><span class="keyword">(</span><span class="string">"127.0.0.1"</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">);<br /></span><span class="default">memcache_add_server</span><span class="keyword">(</span><span class="default">$memcache_obj</span><span class="keyword">, </span><span class="string">"memcache_remote_host"</span><span class="keyword">);<br /></span><span class="default">$memcache_obj</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'var_key'</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />This WILL communicate with both hosts but however there are two aspects that must be taken into account:<br />1. the communication will be done through different network interfaces with the two hosts. It will use the loopback interface for the "127.0.0.1" host (lo in my case on Linux) and the external interface for the "memcache_remote_host" (eth0 in my case). Only if you want to use the same network interface to communicate with both hosts you must use the external IPs of both machines (and all communication will go out through the eth0 interface).<br />2. the connection with the two hosts will be established differently because of how memcache_connect() and memcache_add_server() work. Therefore the memcache_connect() will initiate the connection to localhost through the loopback interface when it is called, while memcache_add_server() will just add the second server to the pool, but it will not send any package through the network until it's absolutely needed (for example when a memcache_set() command is issued).</span></code></div>
  </div>
 </div>
  <div class="note" id="96084">  <div class="votes">
    <div id="Vu96084">
    <a href="/manual/vote-note.php?id=96084&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96084">
    <a href="/manual/vote-note.php?id=96084&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96084" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96084" class="name">
  <strong class="user"><em>iwind dot liu at gmail dot com</em></strong></a><a class="genanchor" href="#96084"> &para;</a><div class="date" title="2010-02-08 12:14"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96084">
<div class="phpcode"><code><span class="html">The weight of the server must be greater than 0.
<br />
<br />If there is no memcached server to use, and you try to set/add variables, the apache will be crashed, with the error message "[notice] child pid 18725 exit signal Segmentation fault (11)" in error_log file.</span></code></div>
  </div>
 </div>
  <div class="note" id="82984">  <div class="votes">
    <div id="Vu82984">
    <a href="/manual/vote-note.php?id=82984&amp;page=memcache.addserver&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82984">
    <a href="/manual/vote-note.php?id=82984&amp;page=memcache.addserver&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82984" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#82984" class="name">
  <strong class="user"><em>Jean-Baptiste Quenot</em></strong></a><a class="genanchor" href="#82984"> &para;</a><div class="date" title="2008-05-05 01:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82984">
<div class="phpcode"><code><span class="html">The default value for the "weight" argument is 1</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcache.addserver&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.addserver.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.memcache.php">Memcache</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="memcache.add.php" title="add">add</a>
                        </li>
                                                <li class="current">
                            <a href="memcache.addserver.php" title="addServer">addServer</a>
                        </li>
                                                <li class="">
                            <a href="memcache.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="memcache.connect.php" title="connect">connect</a>
                        </li>
                                                <li class="">
                            <a href="memcache.decrement.php" title="decrement">decrement</a>
                        </li>
                                                <li class="">
                            <a href="memcache.delete.php" title="delete">delete</a>
                        </li>
                                                <li class="">
                            <a href="memcache.flush.php" title="flush">flush</a>
                        </li>
                                                <li class="">
                            <a href="memcache.get.php" title="get">get</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getextendedstats.php" title="getExtendedStats">getExtendedStats</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getserverstatus.php" title="getServerStatus">getServerStatus</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getstats.php" title="getStats">getStats</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getversion.php" title="getVersion">getVersion</a>
                        </li>
                                                <li class="">
                            <a href="memcache.increment.php" title="increment">increment</a>
                        </li>
                                                <li class="">
                            <a href="memcache.pconnect.php" title="pconnect">pconnect</a>
                        </li>
                                                <li class="">
                            <a href="memcache.replace.php" title="replace">replace</a>
                        </li>
                                                <li class="">
                            <a href="memcache.set.php" title="set">set</a>
                        </li>
                                                <li class="">
                            <a href="memcache.setcompressthreshold.php" title="setCompressThreshold">setCompressThreshold</a>
                        </li>
                                                <li class="">
                            <a href="memcache.setserverparams.php" title="setServerParams">setServerParams</a>
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
