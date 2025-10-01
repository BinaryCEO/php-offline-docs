<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: wincache_ocache_fileinfo - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.wincache-ocache-fileinfo.php">
 <link rel="shorturl" href="https://www.php.net/wincache-ocache-fileinfo">
 <link rel="alternate" href="https://www.php.net/wincache-ocache-fileinfo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.wincache.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.wincache-lock.php">
 <link rel="next" href="https://www.php.net/manual/en/function.wincache-ocache-meminfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.wincache-ocache-fileinfo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.wincache-ocache-fileinfo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.wincache-ocache-fileinfo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.wincache-ocache-fileinfo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.wincache-ocache-fileinfo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.wincache-ocache-fileinfo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.wincache-ocache-fileinfo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.wincache-ocache-fileinfo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.wincache-ocache-fileinfo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.wincache-ocache-fileinfo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.wincache-ocache-fileinfo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Retrieves information about files cached in the opcode cache" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: wincache_ocache_fileinfo - Manual" />
<meta name="twitter:description" content="Retrieves information about files cached in the opcode cache" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: wincache_ocache_fileinfo - Manual" />
<meta itemprop="description" content="Retrieves information about files cached in the opcode cache" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Retrieves information about files cached in the opcode cache" />

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
        <a href="function.wincache-ocache-meminfo.php">
          wincache_ocache_meminfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.wincache-lock.php">
          &laquo; wincache_lock        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.wincache.php'>WinCache</a></li>      <li><a href='ref.wincache.php'>WinCache Functions</a></li>      </ul>
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
            <option value='en/function.wincache-ocache-fileinfo.php' selected="selected">English</option>
            <option value='de/function.wincache-ocache-fileinfo.php'>German</option>
            <option value='es/function.wincache-ocache-fileinfo.php'>Spanish</option>
            <option value='fr/function.wincache-ocache-fileinfo.php'>French</option>
            <option value='it/function.wincache-ocache-fileinfo.php'>Italian</option>
            <option value='ja/function.wincache-ocache-fileinfo.php'>Japanese</option>
            <option value='pt_BR/function.wincache-ocache-fileinfo.php'>Brazilian Portuguese</option>
            <option value='ru/function.wincache-ocache-fileinfo.php'>Russian</option>
            <option value='tr/function.wincache-ocache-fileinfo.php'>Turkish</option>
            <option value='uk/function.wincache-ocache-fileinfo.php'>Ukrainian</option>
            <option value='zh/function.wincache-ocache-fileinfo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.wincache-ocache-fileinfo" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">wincache_ocache_fileinfo</h1>
  <p class="verinfo">(PECL wincache &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">wincache_ocache_fileinfo</span> &mdash; <span class="dc-title">
   Retrieves information about files cached in the opcode cache
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.wincache-ocache-fileinfo-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>wincache_ocache_fileinfo</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$summaryonly</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Retrieves information about opcode cache content and its usage.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function was
<em>REMOVED</em> in PHP 7.0.0.</p></div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.wincache-ocache-fileinfo-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">summaryonly</code></dt>
     <dd>
      <p class="para">
       Controls whether the returned array will contain information about individual cache entries 
       along with the opcode cache summary.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.wincache-ocache-fileinfo-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Array of meta data about opcode cache  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure
  </p>
  <p class="para">
   The array returned by this function contains the following elements:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <code class="literal">total_cache_uptime</code> - total time in seconds that the opcode cache has been active
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">total_file_count</code> - total number of files that are currently in the opcode cache
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">total_hit_count</code> - number of times the compiled opcode have been served from the cache
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">total_miss_count</code> - number of times the compiled opcode have not been found in the cache
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <code class="literal">is_local_cache</code> - true is the cache metadata is for a local cache instance, 
       false if the metadata is for the global cache
     </span>
    </li>
    <li class="listitem">
     <p class="para">
      <code class="literal">file_entries</code> - an array that contains the information about all the cached files:
      <ul class="itemizedlist">
       <li class="listitem">
        <span class="simpara">
         <code class="literal">file_name</code> - absolute file name of the cached file
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">add_time</code> - time in seconds since the file has been added to the opcode cache
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">use_time</code> - time in seconds since the file has been accessed in the opcode cache
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">last_check</code> - time in seconds since the file has been checked for modifications
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">hit_count</code> - number of times the file has been served from the cache
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">function_count</code> - number of functions in the cached file
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         <code class="literal">class_count</code> - number of classes in the cached file
        </span>
       </li>
      </ul>
     </p>
    </li>
   </ul>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.wincache-ocache-fileinfo-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-739">
    <p><strong>Example #1 A <span class="function"><strong>wincache_ocache_fileinfo()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">&lt;pre&gt;<br /><span style="color: #0000BB">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">wincache_ocache_fileinfo</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;<br /></span>&lt;/pre&gt;</span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [total_cache_uptime] =&gt; 17357
    [total_file_count] =&gt; 121
    [total_hit_count] =&gt; 36562
    [total_miss_count] =&gt; 201
    [file_entries] =&gt; Array
        (
            [1] =&gt; Array
                (
                    [file_name] =&gt; c:\inetpub\wwwroot\checkcache.php
                    [add_time] =&gt; 17356
                    [use_time] =&gt; 7
                    [last_check] =&gt; 10
                    [hit_count] =&gt; 454
                    [function_count] =&gt; 0
                    [class_count] =&gt; 1
                )
            [2] =&gt; Array (...iterates for each cached file)
        )
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.wincache-ocache-fileinfo-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.wincache-fcache-fileinfo.php" class="function" rel="rdfs-seeAlso">wincache_fcache_fileinfo()</a> - Retrieves information about files cached in the file cache</span></li>
    <li><span class="function"><a href="function.wincache-fcache-meminfo.php" class="function" rel="rdfs-seeAlso">wincache_fcache_meminfo()</a> - Retrieves information about file cache memory usage</span></li>
    <li><span class="function"><a href="function.wincache-ocache-meminfo.php" class="function" rel="rdfs-seeAlso">wincache_ocache_meminfo()</a> - Retrieves information about opcode cache memory usage</span></li>
    <li><span class="function"><a href="function.wincache-rplist-fileinfo.php" class="function" rel="rdfs-seeAlso">wincache_rplist_fileinfo()</a> - Retrieves information about resolve file path cache</span></li>
    <li><span class="function"><a href="function.wincache-rplist-meminfo.php" class="function" rel="rdfs-seeAlso">wincache_rplist_meminfo()</a> - Retrieves information about memory usage by the resolve file path cache</span></li>
    <li><span class="function"><a href="function.wincache-refresh-if-changed.php" class="function" rel="rdfs-seeAlso">wincache_refresh_if_changed()</a> - Refreshes the cache entries for the cached files</span></li>
    <li><span class="function"><a href="function.wincache-ucache-meminfo.php" class="function" rel="rdfs-seeAlso">wincache_ucache_meminfo()</a> - Retrieves information about user cache memory usage</span></li>
    <li><span class="function"><a href="function.wincache-ucache-info.php" class="function" rel="rdfs-seeAlso">wincache_ucache_info()</a> - Retrieves information about data stored in the user cache</span></li>
    <li><span class="function"><a href="function.wincache-scache-info.php" class="function" rel="rdfs-seeAlso">wincache_scache_info()</a> - Retrieves information about files cached in the session cache</span></li>
    <li><span class="function"><a href="function.wincache-scache-meminfo.php" class="function" rel="rdfs-seeAlso">wincache_scache_meminfo()</a> - Retrieves information about session cache memory usage</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/wincache/functions/wincache-ocache-fileinfo.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.wincache-ocache-fileinfo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.wincache-ocache-fileinfo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.wincache-ocache-fileinfo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.wincache.php">WinCache Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.wincache-fcache-fileinfo.php" title="wincache_&#8203;fcache_&#8203;fileinfo">wincache_&#8203;fcache_&#8203;fileinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-fcache-meminfo.php" title="wincache_&#8203;fcache_&#8203;meminfo">wincache_&#8203;fcache_&#8203;meminfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-lock.php" title="wincache_&#8203;lock">wincache_&#8203;lock</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-refresh-if-changed.php" title="wincache_&#8203;refresh_&#8203;if_&#8203;changed">wincache_&#8203;refresh_&#8203;if_&#8203;changed</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-rplist-fileinfo.php" title="wincache_&#8203;rplist_&#8203;fileinfo">wincache_&#8203;rplist_&#8203;fileinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-rplist-meminfo.php" title="wincache_&#8203;rplist_&#8203;meminfo">wincache_&#8203;rplist_&#8203;meminfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-scache-info.php" title="wincache_&#8203;scache_&#8203;info">wincache_&#8203;scache_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-scache-meminfo.php" title="wincache_&#8203;scache_&#8203;meminfo">wincache_&#8203;scache_&#8203;meminfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-add.php" title="wincache_&#8203;ucache_&#8203;add">wincache_&#8203;ucache_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-cas.php" title="wincache_&#8203;ucache_&#8203;cas">wincache_&#8203;ucache_&#8203;cas</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-clear.php" title="wincache_&#8203;ucache_&#8203;clear">wincache_&#8203;ucache_&#8203;clear</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-dec.php" title="wincache_&#8203;ucache_&#8203;dec">wincache_&#8203;ucache_&#8203;dec</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-delete.php" title="wincache_&#8203;ucache_&#8203;delete">wincache_&#8203;ucache_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-exists.php" title="wincache_&#8203;ucache_&#8203;exists">wincache_&#8203;ucache_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-get.php" title="wincache_&#8203;ucache_&#8203;get">wincache_&#8203;ucache_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-inc.php" title="wincache_&#8203;ucache_&#8203;inc">wincache_&#8203;ucache_&#8203;inc</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-info.php" title="wincache_&#8203;ucache_&#8203;info">wincache_&#8203;ucache_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-meminfo.php" title="wincache_&#8203;ucache_&#8203;meminfo">wincache_&#8203;ucache_&#8203;meminfo</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-ucache-set.php" title="wincache_&#8203;ucache_&#8203;set">wincache_&#8203;ucache_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.wincache-unlock.php" title="wincache_&#8203;unlock">wincache_&#8203;unlock</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="current">
                        <a href="function.wincache-ocache-fileinfo.php" title="wincache_&#8203;ocache_&#8203;fileinfo">wincache_&#8203;ocache_&#8203;fileinfo</a>
                    </li>
                                    <li class="">
                        <a href="function.wincache-ocache-meminfo.php" title="wincache_&#8203;ocache_&#8203;meminfo">wincache_&#8203;ocache_&#8203;meminfo</a>
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
