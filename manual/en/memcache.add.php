<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Memcache::add - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/memcache.add.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/memcache.add.php">
 <link rel="alternate" href="https://www.php.net/manual/en/memcache.add.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.memcache.php">
 <link rel="next" href="https://www.php.net/manual/en/memcache.addserver.php">

 <link rel="alternate" href="https://www.php.net/manual/en/memcache.add.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/memcache.add.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/memcache.add.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/memcache.add.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/memcache.add.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/memcache.add.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/memcache.add.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/memcache.add.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/memcache.add.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/memcache.add.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/memcache.add.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add an item to the server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Memcache::add - Manual" />
<meta name="twitter:description" content="Add an item to the server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Memcache::add - Manual" />
<meta itemprop="description" content="Add an item to the server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add an item to the server" />

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
        <a href="memcache.addserver.php">
          Memcache::addServer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.memcache.php">
          &laquo; Memcache        </a>
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
            <option value='en/memcache.add.php' selected="selected">English</option>
            <option value='de/memcache.add.php'>German</option>
            <option value='es/memcache.add.php'>Spanish</option>
            <option value='fr/memcache.add.php'>French</option>
            <option value='it/memcache.add.php'>Italian</option>
            <option value='ja/memcache.add.php'>Japanese</option>
            <option value='pt_BR/memcache.add.php'>Brazilian Portuguese</option>
            <option value='ru/memcache.add.php'>Russian</option>
            <option value='tr/memcache.add.php'>Turkish</option>
            <option value='uk/memcache.add.php'>Ukrainian</option>
            <option value='zh/memcache.add.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="memcache.add" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">Memcache::add</h1>
  <h1 class="refname">memcache_add</h1>
  <p class="verinfo">(PECL memcache &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">Memcache::add</span> -- <span class="refname">memcache_add</span> &mdash; <span class="dc-title">Add an item to the server</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-memcache.add-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>Memcache::add</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$expire</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>memcache_add</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.memcache.php" class="type Memcache">Memcache</a></span> <code class="parameter">$memcache</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$key</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flag</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$expire</code><span class="initializer"> = ?</span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

 
  <p class="para rdfs-comment">
   <span class="function"><strong>Memcache::add()</strong></span> stores variable
   <code class="parameter">var</code> with <code class="parameter">key</code> only if such 
   key doesn&#039;t exist at the server yet.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-memcache.add-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-memcache.add-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if such key already exist. For the rest
   <span class="function"><strong>Memcache::add()</strong></span> behaves similarly to
   <span class="function"><a href="memcache.set.php" class="function">Memcache::set()</a></span>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-memcache.add-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4651">
    <p><strong>Example #1 <span class="function"><strong>Memcache::add()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$memcache_obj </span><span style="color: #007700">= </span><span style="color: #0000BB">memcache_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #0000BB">11211</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* procedural API */<br /></span><span style="color: #0000BB">memcache_add</span><span style="color: #007700">(</span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">, </span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'test variable'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* OO API */<br /></span><span style="color: #0000BB">$memcache_obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">add</span><span style="color: #007700">(</span><span style="color: #DD0000">'var_key'</span><span style="color: #007700">, </span><span style="color: #DD0000">'test variable'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">30</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-memcache.add-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="memcache.set.php" class="function" rel="rdfs-seeAlso">Memcache::set()</a> - Store data at the server</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/memcache/memcache/add.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmemcache.add%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=memcache.add&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.add.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114371">  <div class="votes">
    <div id="Vu114371">
    <a href="/manual/vote-note.php?id=114371&amp;page=memcache.add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114371">
    <a href="/manual/vote-note.php?id=114371&amp;page=memcache.add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114371" title="78% like this...">
    8
    </div>
  </div>
  <a href="#114371" class="name">
  <strong class="user"><em>vasiliy at hotger dot com</em></strong></a><a class="genanchor" href="#114371"> &para;</a><div class="date" title="2014-02-13 07:49"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114371">
<div class="phpcode"><code><span class="html">It looks like add() function is truly 100% atomic, and safeadd bicycle mentioned in the other comment is useless. There are few links where developers of Memcahed explained it deeper<br /><br /><a href="http://lists.danga.com/pipermail/memcached/2008-March/006647.html" rel="nofollow" target="_blank">http://lists.danga.com/pipermail/memcached/2008-March/006647.html</a><br /><a href="http://www.serverphorums.com/read.php?9,214222" rel="nofollow" target="_blank">http://www.serverphorums.com/read.php?9,214222</a></span></code></div>
  </div>
 </div>
  <div class="note" id="96278">  <div class="votes">
    <div id="Vu96278">
    <a href="/manual/vote-note.php?id=96278&amp;page=memcache.add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96278">
    <a href="/manual/vote-note.php?id=96278&amp;page=memcache.add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96278" title="64% like this...">
    5
    </div>
  </div>
  <a href="#96278" class="name">
  <strong class="user"><em>Davide Renzi</em></strong></a><a class="genanchor" href="#96278"> &para;</a><div class="date" title="2010-02-18 01:16"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96278">
<div class="phpcode"><code><span class="html">Race conditions happen on an heavy load server when more than one thread tries to execute memcache_add.
<br />For example if thread A and thread B try to save the same key you can test that sometimes both return TRUE.
<br />To have the right behaviour you can verify that the correct value is in the assigned key:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">memcache_safeadd</span><span class="keyword">(&amp;</span><span class="default">$memcache_obj</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$flag</span><span class="keyword">, </span><span class="default">$expire</span><span class="keyword">)
<br />{
<br />    if (</span><span class="default">memcache_add</span><span class="keyword">(</span><span class="default">$memcache_obj</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$flag</span><span class="keyword">, </span><span class="default">$expire</span><span class="keyword">))
<br />    {
<br />        return (</span><span class="default">$value </span><span class="keyword">== </span><span class="default">memcache_get</span><span class="keyword">(</span><span class="default">$memcache_obj</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">));
<br />    }
<br />    return </span><span class="default">FALSE</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90537">  <div class="votes">
    <div id="Vu90537">
    <a href="/manual/vote-note.php?id=90537&amp;page=memcache.add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90537">
    <a href="/manual/vote-note.php?id=90537&amp;page=memcache.add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90537" title="58% like this...">
    3
    </div>
  </div>
  <a href="#90537" class="name">
  <strong class="user"><em>ktamas77 at gmail dot com</em></strong></a><a class="genanchor" href="#90537"> &para;</a><div class="date" title="2009-04-27 04:08"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90537">
<div class="phpcode"><code><span class="html">skeleton of a thread safe updater for an incremental counter:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$key </span><span class="keyword">= </span><span class="string">"counter"</span><span class="keyword">;
<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">increment</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />if (</span><span class="default">$value </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {
<br />   </span><span class="comment">// --- read from DB ---
<br />   </span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT value FROM database"</span><span class="keyword">;
<br />   </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);
<br />   </span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);
<br />   </span><span class="default">$db_value </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">[</span><span class="string">"value"</span><span class="keyword">];
<br />   </span><span class="default">$add_value </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">add</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$db_value </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);
<br />   if (</span><span class="default">$add_value </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) { 
<br />      </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$memcache</span><span class="keyword">-&gt;</span><span class="default">increment</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)
<br />      if (</span><span class="default">$value </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {
<br />          </span><span class="default">error_log </span><span class="keyword">(</span><span class="string">"counter update failed."</span><span class="keyword">);
<br />      }
<br />   } else { 
<br />      </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$db_value </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />   }
<br />}
<br />
<br /></span><span class="comment">// --- display counter value ---
<br /></span><span class="keyword">echo </span><span class="default">$value</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92681">  <div class="votes">
    <div id="Vu92681">
    <a href="/manual/vote-note.php?id=92681&amp;page=memcache.add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92681">
    <a href="/manual/vote-note.php?id=92681&amp;page=memcache.add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92681" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92681" class="name">
  <strong class="user"><em>matt</em></strong></a><a class="genanchor" href="#92681"> &para;</a><div class="date" title="2009-08-03 06:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92681">
<div class="phpcode"><code><span class="html">It's also good to note that add will succeed if the key exists but is expired</span></code></div>
  </div>
 </div>
  <div class="note" id="75833">  <div class="votes">
    <div id="Vu75833">
    <a href="/manual/vote-note.php?id=75833&amp;page=memcache.add&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75833">
    <a href="/manual/vote-note.php?id=75833&amp;page=memcache.add&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75833" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#75833" class="name">
  <strong class="user"><em>roberto at spadim,com dot br</em></strong></a><a class="genanchor" href="#75833"> &para;</a><div class="date" title="2007-06-17 10:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75833">
<div class="phpcode"><code><span class="html">[c.2007]
<br />if you read source code for MMC_SERIALIZED you will see at line ~1555 that [a line ~1560]
<br />!(is_string,is_long,is_double,is_bool)
<br />
<br />[is] serialized and that serialized values are flaged as MMC_SERIALIZED for return (fetch) code unserialize these values again</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=memcache.add&amp;repo=en&amp;redirect=https://www.php.net/manual/en/memcache.add.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.memcache.php">Memcache</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
