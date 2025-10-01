<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache::get - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcache.get.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcache.get.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcache.get.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcache.flush.php">
 <link rel="next" href="https://www.php.net/manual/en/memcache.getextendedstats.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcache.get.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcache.get.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcache.get.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcache.get.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcache.get.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcache.get.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcache.get.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcache.get.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcache.get.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcache.get.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcache.get.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Retrieve item from the server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache::get - Manual" />
<meta name="twitter:description" content="Retrieve item from the server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache::get - Manual" />
<meta itemprop="description" content="Retrieve item from the server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Retrieve item from the server" />

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
        <a href="memcache.getextendedstats.php">
          Memcache::getExtendedStats &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcache.flush.php">
          &laquo; Memcache::flush        </a>
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
            <option value='en/memcache.get.php' selected="selected">English</option>
            <option value='de/memcache.get.php'>German</option>
            <option value='es/memcache.get.php'>Spanish</option>
            <option value='fr/memcache.get.php'>French</option>
            <option value='it/memcache.get.php'>Italian</option>
            <option value='ja/memcache.get.php'>Japanese</option>
            <option value='pt_BR/memcache.get.php'>Brazilian Portuguese</option>
            <option value='ru/memcache.get.php'>Russian</option>
            <option value='tr/memcache.get.php'>Turkish</option>
            <option value='uk/memcache.get.php'>Ukrainian</option>
            <option value='zh/memcache.get.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcache.get" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcache::get</h1>
  <h1 class="refname">memcache_get</h1>
  <p class="verinfo">(PECL memcache &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">Memcache::get</span> -- <span class="refname">memcache_get</span> &mdash; <span class="dc-title">Retrieve item from the server</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcache.get-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>Memcache::get</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$flags</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>Memcache::get</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$keys</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$flags</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_get</strong></span>(<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$flags</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_get</strong></span>(<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$keys</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$flags</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  
  <p class="para rdfs-comment">
   <span class="function"><strong>Memcache::get()</strong></span> returns previously stored data of
   an item, if such <code class="parameter">key</code> exists on the server at this
   moment.
  </p>

  <p class="para">
   You can pass array of keys to <span class="function"><strong>Memcache::get()</strong></span> to get
   array of values. The result array will contain only found key-value pairs.
  </p>
  
 </div>

  
 <div class="refsect1 parameters" id="refsect1-memcache.get-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       The key or array of keys to fetch.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       If present, flags fetched along with the values will be written to this parameter. These
       flags are the same as the ones given to for example <span class="function"><a href="memcache.set.php" class="function">Memcache::set()</a></span>.
       The lowest byte of the int is reserved for pecl/memcache internal usage (e.g. to indicate
       compression and serialization status).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-memcache.get-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value associated with the <code class="parameter">key</code> or
   an array of found key-value pairs when <code class="parameter">key</code> is an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure, <code class="parameter">key</code> is not found or
   <code class="parameter">key</code> is an empty <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-memcache.get-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4658">
    <p><strong>Example #1 <span class="function"><strong>Memcache::get()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* procedural API */<br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* OO API */<br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcache</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* <br />You also can use array of keys as a parameter.<br />If such item wasn't found at the server, the result<br />array simply will not include such key.<br />*/<br /><br />/* procedural API */<br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, Array(</span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'another_key'</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* OO API */<br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcache</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$var </span><span style="color: #007700">= </span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(Array(</span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'second_key'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/memcache/get.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcache.get%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcache.get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.get.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112056">  <div class="votes">
    <div id="Vu112056">
    <a href="/manual/vote-note.php?id=112056&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112056">
    <a href="/manual/vote-note.php?id=112056&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112056" title="77% like this...">
    12
    </div>
  </div>
  <a href="#112056" class="name">
  <strong class="user"><em>clover at fromru dot com</em></strong></a><a class="genanchor" href="#112056"> &para;</a><div class="date" title="2013-04-27 12:14"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112056">
<div class="phpcode"><code><span class="html">$flags stays untouched if $key was not found on the server, it's helpfull to determine if bool(false) was stored:<br /><br /><span class="default">&lt;?php<br /><br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">();<br /><br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="comment">// <br /></span><span class="default">$flags </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$flags</span><span class="keyword">); </span><span class="comment">// int(256) - changed to int<br /><br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">delete</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br /><br /></span><span class="default">$flags </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$flags</span><span class="keyword">); </span><span class="comment">// bool(false) - untouched<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102485">  <div class="votes">
    <div id="Vu102485">
    <a href="/manual/vote-note.php?id=102485&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102485">
    <a href="/manual/vote-note.php?id=102485&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102485" title="87% like this...">
    6
    </div>
  </div>
  <a href="#102485" class="name">
  <strong class="user"><em>Michael Brenden</em></strong></a><a class="genanchor" href="#102485"> &para;</a><div class="date" title="2011-02-17 02:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102485">
<div class="phpcode"><code><span class="html">Beware, if there's a backslash present in the key name then the results are unpredictable and random.<br /><br />I was generating keys like this:<br /><br />$mc_key = get_called_class(). $_COOKIE['crumb'];<br /><br />This works fine when get_called_class() returns CLASSNAME.<br /><br />But then I began using namespaces, and get_class_class() of course returned NAMESPACE\CLASSNAME<br /><br />Well that backslash sends Memcache into quite the tizzy.<br />No errors, mind you, just insanity.</span></code></div>
  </div>
 </div>
  <div class="note" id="112236">  <div class="votes">
    <div id="Vu112236">
    <a href="/manual/vote-note.php?id=112236&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112236">
    <a href="/manual/vote-note.php?id=112236&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112236" title="66% like this...">
    4
    </div>
  </div>
  <a href="#112236" class="name">
  <strong class="user"><em>bijay dot rungta at gmail dot com</em></strong></a><a class="genanchor" href="#112236"> &para;</a><div class="date" title="2013-05-21 06:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112236">
<div class="phpcode"><code><span class="html">Note that if you include spaces in your keys when saving Data and use array of keys to get the Data, The returned array will replace spaces with underscores in the keys. <br /><br /><span class="default">&lt;?php<br /><br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'my-key'</span><span class="keyword">, </span><span class="string">'value1'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">);<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">'key with space'</span><span class="keyword">, </span><span class="string">'value 2'</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">300</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(array(</span><span class="string">'my-key'</span><span class="keyword">, </span><span class="string">'key with space'</span><span class="keyword">))); </span><span class="comment">// Array ( [my-key] =&gt; value1 [key_with_space] =&gt; value 2 )<br /><br /></span><span class="default">?&gt;<br /></span><br />Memcache replaces spaces with underscores when saving, it does so when doing a get too, but when you do a get with single key (string) you don't notice this as it merely returns the value. But when you do a get for array of keys, you would expect the same keys in the returned array but it replaces spaces by underscores in them.</span></code></div>
  </div>
 </div>
  <div class="note" id="115870">  <div class="votes">
    <div id="Vu115870">
    <a href="/manual/vote-note.php?id=115870&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115870">
    <a href="/manual/vote-note.php?id=115870&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115870" title="60% like this...">
    1
    </div>
  </div>
  <a href="#115870" class="name">
  <strong class="user"><em>csongor at halmai dot hu</em></strong></a><a class="genanchor" href="#115870"> &para;</a><div class="date" title="2014-10-07 04:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115870">
<div class="phpcode"><code><span class="html">Avoid reading too many values from memcahce. Each get() consumes some memory. You should cache the values instead, once they are read. Illustration of bad practice:<br /><br /><span class="default">&lt;?php   </span><span class="comment">// reading from memcache leaks<br /><br />    </span><span class="default">$m </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">();<br />    </span><span class="default">$m </span><span class="keyword">-&gt; </span><span class="default">connect</span><span class="keyword">( </span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"11211" </span><span class="keyword">);<br />    </span><span class="default">$m </span><span class="keyword">-&gt; </span><span class="default">add</span><span class="keyword">(</span><span class="string">"foo"</span><span class="keyword">, </span><span class="string">"bar"</span><span class="keyword">);<br /><br />    for(;;) {  </span><span class="comment">// this "endless" loop will finish because it eats up all the memory<br />        </span><span class="default">$res </span><span class="keyword">= </span><span class="default">$m </span><span class="keyword">-&gt; </span><span class="default">get</span><span class="keyword">(</span><span class="string">"foo"</span><span class="keyword">);<br />        print </span><span class="default">memory_get_usage</span><span class="keyword">().</span><span class="string">"\n"</span><span class="keyword">;  </span><span class="comment">// this writes bigger and bigger numbers<br />    </span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84275">  <div class="votes">
    <div id="Vu84275">
    <a href="/manual/vote-note.php?id=84275&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84275">
    <a href="/manual/vote-note.php?id=84275&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84275" title="50% like this...">
    0
    </div>
  </div>
  <a href="#84275" class="name">
  <strong class="user"><em>jakub dot lopuszanski at nasza-klasa dot pl</em></strong></a><a class="genanchor" href="#84275"> &para;</a><div class="date" title="2008-07-07 07:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84275">
<div class="phpcode"><code><span class="html">If deserialization fails for some reason, that is when memcache server returned flag 1 set, but the value was not a correctly serialized PHP data,
<br />then Memcache::get acts in a following way:
<br />
<br />If it was called with a single key to retrieve, then a warning is raised, but since it was not actually a bug of a server, the warning says something confusing like "Memcached Server Error: null" and the function returns bool(false).
<br />
<br />If it was called by passing an array (even with a single element in it), then the warning is not raised and the resulting array contains a value bool(false).
<br />
<br />Since there are some buffer overrun bugs present in Memcached Server, which from time to time cause overwriting of [part of] data and therefore rendering it impossible to deserialize, make sure to check if the result of Memcache::get contains only string, or deserialized structure. If the result is bool,dobule or long, then something went wrong.</span></code></div>
  </div>
 </div>
  <div class="note" id="114227">  <div class="votes">
    <div id="Vu114227">
    <a href="/manual/vote-note.php?id=114227&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114227">
    <a href="/manual/vote-note.php?id=114227&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114227" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#114227" class="name">
  <strong class="user"><em>a dot karabiowski at gmx dot net</em></strong></a><a class="genanchor" href="#114227"> &para;</a><div class="date" title="2014-01-27 09:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114227">
<div class="phpcode"><code><span class="html">Signature is not correct.<br /><br /><span class="default">&lt;?php <br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">();<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">);<br />class </span><span class="default">Test </span><span class="keyword">{ public </span><span class="default">$property </span><span class="keyword">= </span><span class="string">"testvalue"</span><span class="keyword">; }<br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">"asdf"</span><span class="keyword">, </span><span class="default">$test</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">"asdf"</span><span class="keyword">));<br /></span><span class="comment">/* will return the object, not the string:<br />    class Test#3 (1) {<br />      public $property =&gt;<br />      string(9) "testvalue"<br />    }<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86351">  <div class="votes">
    <div id="Vu86351">
    <a href="/manual/vote-note.php?id=86351&amp;page=memcache.get&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86351">
    <a href="/manual/vote-note.php?id=86351&amp;page=memcache.get&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86351" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#86351" class="name">
  <strong class="user"><em>nate</em></strong></a><a class="genanchor" href="#86351"> &para;</a><div class="date" title="2008-10-14 08:18"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86351">
<div class="phpcode"><code><span class="html">Be aware that when using the multi-key version, Memcache::get returns bool false if no servers are configured for the pool (and possibly if other errors occur as well while attempting to fetch). Also, Memcache class throws annoying warnings on every get/set/delete-type calls if you have no servers added to the pool.
<br />
<br />The following snippet var_dump's bool false, not an empty array like you might expect.
<br />
<br /><span class="default">&lt;?php
<br />$cache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;
<br />
<br /></span><span class="comment">// no $cache-&gt;addServer calls (for example,
<br /></span><span class="default">due to temporarily disabling </span><span class="keyword">use </span><span class="default">of cache</span><span class="keyword">)
<br />
<br /></span><span class="comment">// use @ symbol to ignore warning
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(
<br />    @</span><span class="default">$cache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">))
<br />);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcache.get&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.get.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.memcache.php">Memcache</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="memcache.add.php" title="add">add</a>
                        </li>
                                                <li class="">
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
                                                <li class="current">
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
