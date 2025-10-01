<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Runtime Configuration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/apcu.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/apcu.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/apcu.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/apcu.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/apcu.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/apcu.constants.php">

 <link rel="alternate" href="https://www.php.net/manual/en/apcu.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/apcu.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/apcu.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/apcu.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/apcu.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/apcu.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/apcu.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/apcu.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/apcu.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/apcu.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/apcu.configuration.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runtime Configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Runtime Configuration - Manual" />
<meta name="twitter:description" content="Runtime Configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Runtime Configuration - Manual" />
<meta itemprop="description" content="Runtime Configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runtime Configuration" />

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
        <a href="apcu.constants.php">
          Predefined Constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="apcu.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.apcu.php'>APCu</a></li>      <li><a href='apcu.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/apcu.configuration.php' selected="selected">English</option>
            <option value='de/apcu.configuration.php'>German</option>
            <option value='es/apcu.configuration.php'>Spanish</option>
            <option value='fr/apcu.configuration.php'>French</option>
            <option value='it/apcu.configuration.php'>Italian</option>
            <option value='ja/apcu.configuration.php'>Japanese</option>
            <option value='pt_BR/apcu.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/apcu.configuration.php'>Russian</option>
            <option value='tr/apcu.configuration.php'>Turkish</option>
            <option value='uk/apcu.configuration.php'>Ukrainian</option>
            <option value='zh/apcu.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="apcu.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  Although the default APCu settings are fine for many installations, serious
  users should consider tuning the following parameters.
 </p>
 <p class="para">
  There is one decision to be made configuring APCu.  
  How much memory is going to be allocated to APCu.
  The ini directive that controls this is <code class="literal">apc.shm_size</code>
  Read the sections on this carefully below.
 </p>
 <p class="para">
  Once the server is running, the <code class="literal">apc.php</code> script that
  is bundled with the extension should be copied somewhere into the docroot and
  viewed with a browser as it provides a detailed analysis of the internal 
  workings of APCu. If GD is enabled in PHP, it will even display some
  interesting graphs.</p>
  <p class="para">
  If APCu is working, the <code class="literal">Cache full count
  </code> number (on the left) will display the number of times the cache
  has reached maximum capacity and has had to evict entries to free up memory.
  During eviction, if <code class="literal">apc.ttl</code> was specified, APCu will first
  attempt to remove expired entries, i.e. entries whose TTL has either expired,
  or entries that have no TTL set and haven&#039;t been accessed in the last
  <code class="literal">apc.ttl</code> seconds. If <code class="literal">apc.ttl</code> was not set,
  or removing expired entries did not free up enough space, APCu will clear the
  entire cache.
  </p>
  <p class="para">
  The number of evictions should be minimal in a well-configured cache. If the
  cache is constantly being filled, and thusly forcefully freed, the resulting
  churning will have disparaging effects on script performance. The easiest way
  to minimize this number is to allocate more memory for APCu.
 </p>
 <p class="para">
  When APCu is compiled with mmap support (Memory Mapping), it will use only one 
  memory segment, unlike when APCu is built with SHM (SysV Shared Memory) support 
  that uses multiple memory segments. MMAP does not have a maximum limit like SHM 
  does in <code class="literal">/proc/sys/kernel/shmmax</code>. In general MMAP support is 
  recommended because it will reclaim the memory faster when the webserver is 
  restarted and all in all reduces memory allocation impact at startup.
 </p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>APCu configuration options</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Changeable</th>
      <th>Changelog</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.enabled" class="link">apc.enabled</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.shm-segments" class="link">apc.shm_segments</a></td>
      <td>1</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.shm-size" class="link">apc.shm_size</a></td>
      <td>&quot;32M&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.entries-hint" class="link">apc.entries_hint</a></td>
      <td>4096</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.ttl" class="link">apc.ttl</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.gc-ttl" class="link">apc.gc_ttl</a></td>
      <td>3600</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.mmap-file-mask" class="link">apc.mmap_file_mask</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.slam-defense" class="link">apc.slam_defense</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.enable-cli" class="link">apc.enable_cli</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.use-request-time" class="link">apc.use_request_time</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td>Prior to APCu 5.1.19, the default was <code class="literal">1</code>.</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.serializer" class="link">apc.serializer</a></td>
      <td>&quot;php&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>Prior to APCu 5.1.15, the default was <code class="literal">&quot;default&quot;</code>.</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.coredump-unmap" class="link">apc.coredump_unmap</a></td>
      <td>0</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="apcu.configuration.php#ini.apcu.preload-path" class="link">apc.preload_path</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

    </tbody>
   
  </table>

  For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>
 
 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
 
 <p class="para">
  <dl>
   
    <dt id="ini.apcu.enabled">
     <code class="parameter">apc.enabled</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      <code class="literal">apc.enabled</code> can be set to 0 to disable APC. This is
      primarily useful when APC is statically compiled
      into PHP, since there is no other way to disable
      it (when compiled as a DSO, the <code class="literal">extension</code>
      line in <code class="literal">php.ini</code> can just be commented-out).
     </p>
    </dd>
   
   
    <dt id="ini.apcu.shm-segments">
     <code class="parameter">apc.shm_segments</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The number of shared memory segments to allocate
      for the compiler cache. If APC is running out of
      shared memory but <code class="literal">apc.shm_size</code> 
      is set as high as the system allows, raising
      this value might prevent APC from exhausting its memory.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.shm-size">
     <code class="parameter">apc.shm_size</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      The size of each shared memory segment given by a shorthand notation as
      described in <a href="faq.using.php#faq.using.shorthandbytes" class="link">this FAQ</a>.
      By default, some systems (including most BSD
      variants) have very low limits on the size of a
      shared memory segment.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.entries-hint">
     <code class="parameter">apc.entries_hint</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      A &quot;hint&quot; about the number of distinct variables that might be stored.
      Set to zero or omit if not sure.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.ttl">
     <code class="parameter">apc.ttl</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Consider cache entries without an explicit TTL to be
      expired if they have not been accessed in this many
      seconds. Effectively, this allows such entries to be
      removed opportunistically during a cache insert, or
      prior to a full expunge. Note that because removal is
      opportunistic, entries can still be readable even if
      they are older than <code class="literal">apc.ttl</code> seconds.
      This setting has no effect on cache entries that have
      an explicit TTL specified.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.gc-ttl">
     <code class="parameter">apc.gc_ttl</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      The number of seconds that a cache entry may
      remain on the garbage-collection list after being removed or invalidated.
      Entries are eligible for removal if their reference count is zero,
      or they exceed this time limit.
      If set to <code class="literal">0</code>, time-based cleanup is disabled,
      and entries are only removed when their reference count drops to zero.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.mmap-file-mask">
     <code class="parameter">apc.mmap_file_mask</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      If compiled with MMAP support by using <code class="literal">--enable-mmap</code>
      this is the mktemp-style file_mask to pass to the
      mmap module for determining whether your mmap&#039;ed memory
      region is going to be file-backed or shared memory
      backed.  For straight file-backed mmap, set it to
      something like <code class="literal">/tmp/apc.XXXXXX</code>
      (exactly 6 <code class="literal">X</code>s).
      To use POSIX-style shm_open/mmap put a <code class="literal">.shm</code>
      somewhere in your mask.  e.g. <code class="literal">/apc.shm.XXXXXX</code>
      You can also set it to <code class="literal">/dev/zero</code> to use your
      kernel&#039;s <code class="literal">/dev/zero</code> interface to anonymous mmap&#039;ed
      memory. Leaving it undefined will force an anonymous mmap.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.slam-defense">
     <code class="parameter">apc.slam_defense</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      On very busy servers whenever you start the server or
      modify files you can create a race of many processes
      all trying to cache the same file at the same time.
      Setting <code class="literal">apc.slam_defense</code> to <code class="literal">1</code>
      can help prevent multiple processes from caching the
      same file simultaneously by introducing a probability
      mechanism. If the same key is attempted to be cached
      within a short period by different processes, it skips
      the caching for the current process to mitigate potential
      cache slams.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.enable-cli">
     <code class="parameter">apc.enable_cli</code>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
    </dt>
    <dd>
     <p class="para">
      Mostly for testing and debugging.  Setting this enables APC
      for the CLI version of PHP.  Under normal circumstances, it is
      not ideal to create, populate and destroy the APC cache on every
      CLI request, but for various test scenarios it is useful to be
      able to enable APC for the CLI version of PHP easily.
     </p>
    </dd>
    
   
    <dt id="ini.apcu.serializer">
     <code class="parameter">apc.serializer</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Used to configure APC to use a third party serializer.
     </p>
    </dd>
   
   
    <dt id="ini.apcu.coredump-unmap">
     <code class="parameter">apc.coredump_unmap</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables APC handling of signals, such as SIGSEGV, that write
      core files when signaled. When these signals are received,
      APC will attempt to unmap the shared memory segment in order
      to exclude it from the core file. This setting may improve
      system stability when fatal signals are received and a large 
      APC shared memory segment is configured.
     </p>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="para">
       This feature is potentially dangerous. Unmapping the shared
       memory segment in a fatal signal handler may cause undefined
       behaviour if a fatal error occurs.
      </p>
     </div>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       Although some kernels may provide a facility to ignore various
       types of shared memory when generating a core dump file, these 
       implementations may also ignore important shared memory segments
       such as the Apache scoreboard.
      </p>
     </p></blockquote>
    </dd>
   
   
    <dt id="ini.apcu.preload-path">
     <code class="parameter">apc.preload_path</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Optionally, set a path to the directory that APC will load 
      cache data at startup.
     </p>
    </dd>
   

   
    <dt id="ini.apcu.use-request-time">
     <code class="parameter">apc.use_request_time</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Use the <abbr title="Server Application Programming Interface">SAPI</abbr> request start time for
      <abbr>TTL</abbr>.
     </p>
    </dd>
   
  </dl>
 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/apcu/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fapcu.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=apcu.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/apcu.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="apcu.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="apcu.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="current">
                            <a href="apcu.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
