<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache::set - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcache.set.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcache.set.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcache.set.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="prev" href="https://www.php.net/manual/en/memcache.replace.php">
 <link rel="next" href="https://www.php.net/manual/en/memcache.setcompressthreshold.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcache.set.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcache.set.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcache.set.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcache.set.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcache.set.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcache.set.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcache.set.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcache.set.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcache.set.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcache.set.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcache.set.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Store data at the server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache::set - Manual" />
<meta name="twitter:description" content="Store data at the server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache::set - Manual" />
<meta itemprop="description" content="Store data at the server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Store data at the server" />

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
        <a href="memcache.setcompressthreshold.php">
          Memcache::setCompressThreshold &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="memcache.replace.php">
          &laquo; Memcache::replace        </a>
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
            <option value='en/memcache.set.php' selected="selected">English</option>
            <option value='de/memcache.set.php'>German</option>
            <option value='es/memcache.set.php'>Spanish</option>
            <option value='fr/memcache.set.php'>French</option>
            <option value='it/memcache.set.php'>Italian</option>
            <option value='ja/memcache.set.php'>Japanese</option>
            <option value='pt_BR/memcache.set.php'>Brazilian Portuguese</option>
            <option value='ru/memcache.set.php'>Russian</option>
            <option value='tr/memcache.set.php'>Turkish</option>
            <option value='uk/memcache.set.php'>Ukrainian</option>
            <option value='zh/memcache.set.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcache.set" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcache::set</h1>
  <h1 class="refname">memcache_set</h1>
  <p class="verinfo">(PECL memcache &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">Memcache::set</span> -- <span class="refname">memcache_set</span> &mdash; <span class="dc-title">Store data at the server</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcache.set-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>Memcache::set</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$expire</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_set</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$expire</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>


  <p class="para rdfs-comment">
   <span class="function"><strong>Memcache::set()</strong></span> stores an item 
   <code class="parameter">var</code> with <code class="parameter">key</code> on the 
   memcached server. Parameter <code class="parameter">expire</code> is expiration 
   time in seconds. If it&#039;s 0, the item never expires (but memcached server 
   doesn&#039;t guarantee this item to be stored all the time, it could be deleted 
   from the cache to make place for other items).
   You can use <strong><code><a href="memcache.constants.php#constant.memcache-compressed">MEMCACHE_COMPRESSED</a></code></strong> constant as 
   <code class="parameter">flag</code> value if you want to use on-the-fly
   compression (uses zlib).
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Remember that resource variables (i.e. file and connection descriptors)
     cannot be stored in the cache, because they cannot be adequately
     represented in serialized state.
    </p> 
   </p></blockquote>
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-memcache.set-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">key</code></dt>
     <dd>
      <p class="para">
       The key that will be associated with the item.
      </p>
     </dd>
    
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       The variable to store. Strings and integers are stored as is, other
       types are stored serialized.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flag</code></dt>
     <dd>
      <p class="para">
       Use <strong><code><a href="memcache.constants.php#constant.memcache-compressed">MEMCACHE_COMPRESSED</a></code></strong> to store the item
       compressed (uses zlib).
      </p>
     </dd>
    
    
     <dt><code class="parameter">expire</code></dt>
     <dd>
      <p class="para">
       Expiration time of the item. If it&#039;s equal to zero, the item will never
       expire. You can also use Unix timestamp or a number of seconds starting
       from current time, but in the latter case the number of seconds may not
       exceed 2592000 (30 days).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-memcache.set-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-memcache.set-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4665">
    <p><strong>Example #1 <span class="function"><strong>Memcache::set()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* procedural API */<br /><br />/* connect to memcached server */<br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/*<br />set value of item with key 'var_key'<br />using 0 as flag value, compression is not used<br />expire time is 30 seconds<br />*/<br /></span><span style="color: #0000BB">memcache_set</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'some variable'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">memcache_get</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-4666">
    <p><strong>Example #2 <span class="function"><strong>Memcache::set()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* OO API */<br /><br /></span><span style="color: #0000BB">$memcache_obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">Memcache</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* connect to memcached server */<br /></span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'memcache_host'</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/*<br />set value of item with key 'var_key', using on-the-fly compression<br />expire time is 50 seconds<br />*/<br /></span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set</span><span style="color: #007700">(</span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'some really big variable'</span><span style="color: #007700">, </span><span style="color: #0000BB">MEMCACHE_COMPRESSED</span><span style="color: #007700">, </span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get</span><span style="color: #007700">(</span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-memcache.set-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="memcache.add.php" class="function" rel="rdfs-seeAlso">Memcache::add()</a> - Add an item to the server</span></li>
    <li><span class="function"><a href="memcache.replace.php" class="function" rel="rdfs-seeAlso">Memcache::replace()</a> - Replace value of the existing item</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/memcache/set.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcache.set%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcache.set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.set.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76524">  <div class="votes">
    <div id="Vu76524">
    <a href="/manual/vote-note.php?id=76524&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76524">
    <a href="/manual/vote-note.php?id=76524&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76524" title="73% like this...">
    11
    </div>
  </div>
  <a href="#76524" class="name">
  <strong class="user"><em>Sc00bz</em></strong></a><a class="genanchor" href="#76524"> &para;</a><div class="date" title="2007-07-19 01:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76524">
<div class="phpcode"><code><span class="html">This is just two minor things about memcache that might not be perfectly clear, the limits on key and data sizes and what happen to flags in the memcache protocol.
<br />
<br />* There is a max key size of 250 anything bigger gets truncated. There is also a (1MB - 42 bytes) limit on the data.
<br />
<br />* In the memcache protocol there is a 16bit, 32bit in newer version, flag that you can set to whatever you want because memcache doesn't do anything with the flags. The php api doesn't let you get the flags because php uses the flags for php's own use such as "MEMCACHE_COMPRESSED" and I decided to test if it was doing something because it wasn't part of the memcache protocol.
<br />
<br /><span class="default">&lt;?php
<br />$memcache </span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">();
<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(</span><span class="string">"127.0.0.1"</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">);
<br />
<br /></span><span class="comment">// Since memcache truncates the keys at 250 bytes both the get "250 a's" and "251 a's" will find the key in the cache
<br /></span><span class="keyword">echo </span><span class="string">"*** Truncate key test ***&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"set 251: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">251</span><span class="keyword">), </span><span class="string">"value"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"get 249: " </span><span class="keyword">. ((</span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">249</span><span class="keyword">))) !== </span><span class="default">false </span><span class="keyword">? </span><span class="string">"'</span><span class="default">$ret</span><span class="string">'" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"get 250: " </span><span class="keyword">. ((</span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">))) !== </span><span class="default">false </span><span class="keyword">? </span><span class="string">"'</span><span class="default">$ret</span><span class="string">'" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"get 251: " </span><span class="keyword">. ((</span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">251</span><span class="keyword">))) !== </span><span class="default">false </span><span class="keyword">? </span><span class="string">"'</span><span class="default">$ret</span><span class="string">'" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"delete: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">delete</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">250</span><span class="keyword">)) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"*** Compress value test ***&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"set 1024*1024-42: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">, </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">-</span><span class="default">42</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"set 1024*1024-41: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">, </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">-</span><span class="default">41</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"set 1024*1024 compressed: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">, </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"a"</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">*</span><span class="default">1024</span><span class="keyword">), </span><span class="default">MEMCACHE_COMPRESSED</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />echo </span><span class="string">"delete: " </span><span class="keyword">. (</span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">delete</span><span class="keyword">(</span><span class="string">"test"</span><span class="keyword">) ? </span><span class="string">"t" </span><span class="keyword">: </span><span class="string">"f"</span><span class="keyword">) . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output:
<br />*** Truncate key test ***
<br />set 251: t
<br />get 249: f
<br />get 250: 'value'
<br />get 251: 'value'
<br />delete: t
<br />
<br />*** Compress value test ***
<br />set 1024*1024-42: t
<br />set 1024*1024-41: f
<br />set 1024*1024 compressed: t
<br />delete: t</span></code></div>
  </div>
 </div>
  <div class="note" id="101989">  <div class="votes">
    <div id="Vu101989">
    <a href="/manual/vote-note.php?id=101989&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101989">
    <a href="/manual/vote-note.php?id=101989&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101989" title="78% like this...">
    8
    </div>
  </div>
  <a href="#101989" class="name">
  <strong class="user"><em>wbonde at yakabod dot com</em></strong></a><a class="genanchor" href="#101989"> &para;</a><div class="date" title="2011-01-21 12:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101989">
<div class="phpcode"><code><span class="html">The max time for expiration (without having to worry about deletions when necessary as with 0 seconds) is 2,592,000 seconds (30 days). <br /><br />Specifying an expiration value above that will return false, but will NOT throw in error so it is easy to miss.</span></code></div>
  </div>
 </div>
  <div class="note" id="84032">  <div class="votes">
    <div id="Vu84032">
    <a href="/manual/vote-note.php?id=84032&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84032">
    <a href="/manual/vote-note.php?id=84032&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84032" title="66% like this...">
    9
    </div>
  </div>
  <a href="#84032" class="name">
  <strong class="user"><em>argyleblanket</em></strong></a><a class="genanchor" href="#84032"> &para;</a><div class="date" title="2008-06-24 05:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84032">
<div class="phpcode"><code><span class="html">Using set more than once for the same key seems to have unexpected results - it does not behave as a "replace," but instead seems to "set" more than one value for the same key.  "get" may return any of the values.
<br />
<br />This was tested on a multiple-server setup - behaviour may be different if you only have one server.
<br />
<br />Remedy is to use a combination of replace and set:
<br />
<br /><span class="default">&lt;?php
<br />$result </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">replace</span><span class="keyword">( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$var </span><span class="keyword">);
<br />if( </span><span class="default">$result </span><span class="keyword">== </span><span class="default">false </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$var </span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82401">  <div class="votes">
    <div id="Vu82401">
    <a href="/manual/vote-note.php?id=82401&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82401">
    <a href="/manual/vote-note.php?id=82401&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82401" title="71% like this...">
    3
    </div>
  </div>
  <a href="#82401" class="name">
  <strong class="user"><em>Stephen from veedow.com</em></strong></a><a class="genanchor" href="#82401"> &para;</a><div class="date" title="2008-04-09 07:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82401">
<div class="phpcode"><code><span class="html">I ran into problems using the MEMCACHE_COMPRESSED flag when storing small amounts of data, such as an integers.
<br />
<br />For expample.
<br />
<br /><span class="default">&lt;?php
<br />Memcache</span><span class="keyword">::</span><span class="default">set</span><span class="keyword">(</span><span class="string">'integer'</span><span class="keyword">, </span><span class="default">123456</span><span class="keyword">, </span><span class="default">MEMCACHE_COMPRESSED</span><span class="keyword">);
<br /></span><span class="comment">//would return true
<br />
<br /></span><span class="default">Memcache</span><span class="keyword">::</span><span class="default">get</span><span class="keyword">(</span><span class="string">'integer'</span><span class="keyword">);
<br /></span><span class="comment">//would return false
<br /></span><span class="default">?&gt;
<br /></span>
<br />This problem went away when I removed the MEMCACHE_COMPRESSED flag for values that were small.</span></code></div>
  </div>
 </div>
  <div class="note" id="100971">  <div class="votes">
    <div id="Vu100971">
    <a href="/manual/vote-note.php?id=100971&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100971">
    <a href="/manual/vote-note.php?id=100971&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100971" title="62% like this...">
    2
    </div>
  </div>
  <a href="#100971" class="name">
  <strong class="user"><em>duerra at nospam dot yahoo dot com</em></strong></a><a class="genanchor" href="#100971"> &para;</a><div class="date" title="2010-11-17 04:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100971">
<div class="phpcode"><code><span class="html">If you're interested in using compression, please note that, at least for PHP version 5.3.2 and Memcache version 3.0.4, when retrieving a key who's value is a numeric or boolean type, PHP throws a notice of the following:<br /><br />Message: MemcachePool::get(): Failed to uncompress data<br /><br />The way around this is to test your variable type before setting or adding it to Memcache, or even cast it as a string.  <br /><br /><span class="default">&lt;?php<br />$key </span><span class="keyword">= </span><span class="string">'mc_key'</span><span class="keyword">;<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">12345</span><span class="keyword">;<br /></span><span class="default">$compress </span><span class="keyword">= </span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="default">false </span><span class="keyword">: </span><span class="default">MEMCACHE_COMPRESSED</span><span class="keyword">;<br /><br /></span><span class="default">$mc</span><span class="keyword">= new </span><span class="default">Memcache</span><span class="keyword">;<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">, </span><span class="default">11211</span><span class="keyword">);<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$compress</span><span class="keyword">);<br /><br />echo </span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br /><br /></span><span class="comment">//Alternative is to cast the variable<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? (string)</span><span class="default">$value </span><span class="keyword">: </span><span class="default">$value</span><span class="keyword">;<br /></span><span class="default">$mc</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">MEMCACHE_COMPRESSED</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124000">  <div class="votes">
    <div id="Vu124000">
    <a href="/manual/vote-note.php?id=124000&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124000">
    <a href="/manual/vote-note.php?id=124000&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124000" title="no votes...">
    0
    </div>
  </div>
  <a href="#124000" class="name">
  <strong class="user"><em>winmutt</em></strong></a><a class="genanchor" href="#124000"> &para;</a><div class="date" title="2019-07-01 09:19"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124000">
<div class="phpcode"><code><span class="html">The note here about replace and set is no longer valid in my testing. You can call set as many times as you want on the same key and reliably get the last written value. I tested this with 3 memcache nodes over 10000 keys.</span></code></div>
  </div>
 </div>
  <div class="note" id="121572">  <div class="votes">
    <div id="Vu121572">
    <a href="/manual/vote-note.php?id=121572&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121572">
    <a href="/manual/vote-note.php?id=121572&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121572" title="no votes...">
    0
    </div>
  </div>
  <a href="#121572" class="name">
  <strong class="user"><em>jcastromail at yahoo dot es</em></strong></a><a class="genanchor" href="#121572"> &para;</a><div class="date" title="2017-08-27 12:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121572">
<div class="phpcode"><code><span class="html">If you get the next message<br /><br />"The lowest two bytes of the flags array is reserved for pecl/memcache internal use"<br /><br />Then try the next operations:<br />a) try to use Memcached instead of Memcache.<br />b) switch the compressed value<br />  $memcache-&gt;set($key,$value,MEMCACHE_COMPRESSED)<br />  or<br />  $memcache-&gt;set($key,$value,0)</span></code></div>
  </div>
 </div>
  <div class="note" id="97502">  <div class="votes">
    <div id="Vu97502">
    <a href="/manual/vote-note.php?id=97502&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97502">
    <a href="/manual/vote-note.php?id=97502&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97502" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#97502" class="name">
  <strong class="user"><em>effeesse  gmail  com</em></strong></a><a class="genanchor" href="#97502"> &para;</a><div class="date" title="2010-04-23 01:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97502">
<div class="phpcode"><code><span class="html">if you want to cache an image created on-the-fly you can do:
<br />
<br /><span class="default">&lt;?php
<br />ob_start</span><span class="keyword">();
<br /></span><span class="default">imagepng</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">);
<br /></span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">set</span><span class="keyword">(</span><span class="string">"my_image"</span><span class="keyword">, </span><span class="default">ob_get_contents</span><span class="keyword">(), </span><span class="default">false</span><span class="keyword">, </span><span class="default">$cache_time</span><span class="keyword">);
<br /></span><span class="default">ob_end_clean</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />then you could access the chached image as simple variable:
<br /><span class="default">&lt;?php $my_image </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">get</span><span class="keyword">(</span><span class="string">"my_image"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />so, in short, you have to buffer the output</span></code></div>
  </div>
 </div>
  <div class="note" id="109862">  <div class="votes">
    <div id="Vu109862">
    <a href="/manual/vote-note.php?id=109862&amp;page=memcache.set&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109862">
    <a href="/manual/vote-note.php?id=109862&amp;page=memcache.set&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109862" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#109862" class="name">
  <strong class="user"><em>aamthor at advertzoom dot de</em></strong></a><a class="genanchor" href="#109862"> &para;</a><div class="date" title="2012-08-29 08:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109862">
<div class="phpcode"><code><span class="html">to put some things right:<br /><br />max expiration time: RTFM, it's written here.<br /><br />max amount of data: almost unlimited as long as your server can bear it.<br /><br />speed and pace: <br />well, thats another thing. We had a couple of data records which for application reasons must be kept in memory. Since the bunch of data is big and doesn't change very often, we considered caching it to memcache instead of retrieving it from the DB each and every time.<br /><br />This isn't a general advice nor any quality statement, but we did a couple of tests with serialized arrays (50 MB), compressed and uncompressed and it turned out that in our particular scenario, memcache is much slower than the DB (mySql).<br /><br />In general, one can not predict on the behavior of memcache in certain scenarios but always need to make some testing and benchmarking upfront before starting to deploy things to a live system.<br /><br />Despite of the tests above, we are still using memcache for session caching instead of file system, since there are certain other things to consider and the amount of data is always small (few KB)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcache.set&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.set.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
