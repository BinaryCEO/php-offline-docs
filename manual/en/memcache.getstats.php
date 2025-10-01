<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache::getStats - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcache.getstats.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcache.getstats.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcache.getstats.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcache.getserverstatus.php">
 <link rel="next" href="https://www.php.net/manual/en/memcache.getversion.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcache.getstats.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcache.getstats.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcache.getstats.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcache.getstats.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcache.getstats.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcache.getstats.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcache.getstats.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcache.getstats.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcache.getstats.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcache.getstats.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcache.getstats.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get statistics of the server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache::getStats - Manual" />
<meta name="twitter:description" content="Get statistics of the server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache::getStats - Manual" />
<meta itemprop="description" content="Get statistics of the server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get statistics of the server" />

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
        <a href="memcache.getversion.php">
          Memcache::getVersion &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcache.getserverstatus.php">
          &laquo; Memcache::getServerStatus        </a>
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
            <option value='en/memcache.getstats.php' selected="selected">English</option>
            <option value='de/memcache.getstats.php'>German</option>
            <option value='es/memcache.getstats.php'>Spanish</option>
            <option value='fr/memcache.getstats.php'>French</option>
            <option value='it/memcache.getstats.php'>Italian</option>
            <option value='ja/memcache.getstats.php'>Japanese</option>
            <option value='pt_BR/memcache.getstats.php'>Brazilian Portuguese</option>
            <option value='ru/memcache.getstats.php'>Russian</option>
            <option value='tr/memcache.getstats.php'>Turkish</option>
            <option value='uk/memcache.getstats.php'>Ukrainian</option>
            <option value='zh/memcache.getstats.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcache.getstats" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcache::getStats</h1>
  <h1 class="refname">memcache_get_stats</h1>
  <p class="verinfo">(PECL memcache &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">Memcache::getStats</span> -- <span class="refname">memcache_get_stats</span> &mdash; <span class="dc-title">Get statistics of the server</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcache.getstats-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>Memcache::getStats</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$slabid</code><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = 100</span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_get_stats</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$type</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$slabid</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = 100</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   <span class="function"><strong>Memcache::getStats()</strong></span> returns an associative array 
   with server&#039;s statistics. Array keys correspond to stats parameters and 
   values to parameter&#039;s values.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-memcache.getstats-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">type</code></dt>
     <dd>
      <p class="para">
       The type of statistics to fetch. Valid values are {reset, 
       malloc, maps, cachedump, slabs, items, sizes}. According to
       the memcached protocol spec these additional arguments &quot;are 
       subject to change for the convenience of memcache developers&quot;.
      </p>
     </dd>
    
    
     <dt><code class="parameter">slabid</code></dt>
     <dd>
      <p class="para">
       Used in conjunction with <code class="parameter">type</code> set to 
       cachedump to identify the slab to dump from. The cachedump
       command ties up the server and is strictly to be used for 
       debugging purposes.
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       Used in conjunction with <code class="parameter">type</code> set to 
       cachedump to limit the number of entries to dump.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-memcache.getstats-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array of server statistics or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-memcache.getstats-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="memcache.getversion.php" class="function" rel="rdfs-seeAlso">Memcache::getVersion()</a> - Return version of the server</span></li>
    <li><span class="function"><a href="memcache.getextendedstats.php" class="function" rel="rdfs-seeAlso">Memcache::getExtendedStats()</a> - Get statistics from all servers in pool</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/memcache/getstats.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcache.getstats%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcache.getstats&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.getstats.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69727">  <div class="votes">
    <div id="Vu69727">
    <a href="/manual/vote-note.php?id=69727&amp;page=memcache.getstats&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69727">
    <a href="/manual/vote-note.php?id=69727&amp;page=memcache.getstats&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69727" title="66% like this...">
    14
    </div>
  </div>
  <a href="#69727" class="name">
  <strong class="user"><em>mikael at synd dot info</em></strong></a><a class="genanchor" href="#69727"> &para;</a><div class="date" title="2006-09-18 12:22"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69727">
<div class="phpcode"><code><span class="html">pid                        Process id of this server process
<br />uptime                    Number of seconds this server has been running
<br />time                    Current UNIX time according to the server
<br />version                    Version string of this server
<br />rusage_user                Accumulated user time for this process
<br />rusage_system            Accumulated system time for this process
<br />curr_items                Current number of items stored by the server
<br />total_items                Total number of items stored by this server ever since it started
<br />bytes                    Current number of bytes used by this server to store items
<br />curr_connections        Number of open connections
<br />total_connections        Total number of connections opened since the server started running
<br />connection_structures    Number of connection structures allocated by the server
<br />cmd_get                    Cumulative number of retrieval requests
<br />cmd_set                    Cumulative number of storage requests
<br />get_hits                Number of keys that have been requested and found present
<br />get_misses                Number of items that have been requested and not found
<br />bytes_read                Total number of bytes read by this server from network
<br />bytes_written            Total number of bytes sent by this server to network
<br />limit_maxbytes            Number of bytes this server is allowed to use for storage.</span></code></div>
  </div>
 </div>
  <div class="note" id="89603">  <div class="votes">
    <div id="Vu89603">
    <a href="/manual/vote-note.php?id=89603&amp;page=memcache.getstats&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89603">
    <a href="/manual/vote-note.php?id=89603&amp;page=memcache.getstats&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89603" title="66% like this...">
    4
    </div>
  </div>
  <a href="#89603" class="name">
  <strong class="user"><em>Amiangshu S. Bosu</em></strong></a><a class="genanchor" href="#89603"> &para;</a><div class="date" title="2009-03-16 03:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89603">
<div class="phpcode"><code><span class="html">Here is a memcache stats analyzer method that can be used to print memcache stats in a nice informative tabular format.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">printDetails</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">){
<br />
<br />echo </span><span class="string">"&lt;table border='1'&gt;"</span><span class="keyword">;
<br />
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Memcache Server version:&lt;/td&gt;&lt;td&gt; "</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"version"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Process id of this server process &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"pid"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of seconds this server has been running &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"uptime"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Accumulated user time for this process &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"rusage_user"</span><span class="keyword">].</span><span class="string">" seconds&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Accumulated system time for this process &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"rusage_system"</span><span class="keyword">].</span><span class="string">" seconds&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Total number of items stored by this server ever since it started &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"total_items"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of open connections &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"curr_connections"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Total number of connections opened since the server started running &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"total_connections"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of connection structures allocated by the server &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"connection_structures"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Cumulative number of retrieval requests &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"cmd_get"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt; Cumulative number of storage requests &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"cmd_set"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />
<br />        </span><span class="default">$percCacheHit</span><span class="keyword">=((real)</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"get_hits"</span><span class="keyword">]/ (real)</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"cmd_get"</span><span class="keyword">] *</span><span class="default">100</span><span class="keyword">);
<br />        </span><span class="default">$percCacheHit</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(</span><span class="default">$percCacheHit</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);
<br />        </span><span class="default">$percCacheMiss</span><span class="keyword">=</span><span class="default">100</span><span class="keyword">-</span><span class="default">$percCacheHit</span><span class="keyword">;
<br />
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of keys that have been requested and found present &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"get_hits"</span><span class="keyword">].</span><span class="string">" (</span><span class="default">$percCacheHit</span><span class="string">%)&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of items that have been requested and not found &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"get_misses"</span><span class="keyword">].</span><span class="string">"(</span><span class="default">$percCacheMiss</span><span class="string">%)&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />
<br />        </span><span class="default">$MBRead</span><span class="keyword">= (real)</span><span class="default">$status</span><span class="keyword">[</span><span class="string">"bytes_read"</span><span class="keyword">]/(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">);
<br />
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Total number of bytes read by this server from network &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$MBRead</span><span class="keyword">.</span><span class="string">" Mega Bytes&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        </span><span class="default">$MBWrite</span><span class="keyword">=(real) </span><span class="default">$status</span><span class="keyword">[</span><span class="string">"bytes_written"</span><span class="keyword">]/(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">) ;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Total number of bytes sent by this server to network &lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$MBWrite</span><span class="keyword">.</span><span class="string">" Mega Bytes&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        </span><span class="default">$MBSize</span><span class="keyword">=(real) </span><span class="default">$status</span><span class="keyword">[</span><span class="string">"limit_maxbytes"</span><span class="keyword">]/(</span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">) ;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of bytes this server is allowed to use for storage.&lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$MBSize</span><span class="keyword">.</span><span class="string">" Mega Bytes&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;Number of valid items removed from cache to free memory for new items.&lt;/td&gt;&lt;td&gt;"</span><span class="keyword">.</span><span class="default">$status </span><span class="keyword">[</span><span class="string">"evictions"</span><span class="keyword">].</span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"&lt;/table&gt;"</span><span class="keyword">;
<br />
<br />    }
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Sample usage:
<br /><span class="default">&lt;?php
<br />
<br />  $memcache_obj </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;
<br />  </span><span class="default">$memcache_obj</span><span class="keyword">-&gt;</span><span class="default">addServer</span><span class="keyword">(</span><span class="string">'memcache_host'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">);
<br />   </span><span class="default">printDetails</span><span class="keyword">(</span><span class="default">$memcache_obj</span><span class="keyword">-&gt;</span><span class="default">getStats</span><span class="keyword">());
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128991">  <div class="votes">
    <div id="Vu128991">
    <a href="/manual/vote-note.php?id=128991&amp;page=memcache.getstats&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128991">
    <a href="/manual/vote-note.php?id=128991&amp;page=memcache.getstats&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128991" title="no votes...">
    0
    </div>
  </div>
  <a href="#128991" class="name">
  <strong class="user"><em>niktriant89 at gmail dot com</em></strong></a><a class="genanchor" href="#128991"> &para;</a><div class="date" title="2023-11-01 06:16"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128991">
<div class="phpcode"><code><span class="html">Official up to date Memcached explanation of stats command output on the github page:<br /><br /><a href="https://github.com/memcached/memcached/blob/master/doc/protocol.txt" rel="nofollow" target="_blank">https://github.com/memcached/memcached/blob/master/doc/protocol.txt</a><br /><br />Please check you current version</span></code></div>
  </div>
 </div>
  <div class="note" id="70705">  <div class="votes">
    <div id="Vu70705">
    <a href="/manual/vote-note.php?id=70705&amp;page=memcache.getstats&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70705">
    <a href="/manual/vote-note.php?id=70705&amp;page=memcache.getstats&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70705" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#70705" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70705"> &para;</a><div class="date" title="2006-10-24 07:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70705">
<div class="phpcode"><code><span class="html">The stats output from this function and what is output from the getExtendedStats() are identical except that getExtendedStats() provides information for all servers used.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcache.getstats&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.getstats.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="memcache.get.php" title="get">get</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getextendedstats.php" title="getExtendedStats">getExtendedStats</a>
                        </li>
                                                <li class="">
                            <a href="memcache.getserverstatus.php" title="getServerStatus">getServerStatus</a>
                        </li>
                                                <li class="current">
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
