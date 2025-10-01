<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Statistics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqlnd.stats.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqlnd.stats.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.stats.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.mysqlnd.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqlnd.persist.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqlnd.notes.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqlnd.stats.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqlnd.stats.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqlnd.stats.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqlnd.stats.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqlnd.stats.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqlnd.stats.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqlnd.stats.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqlnd.stats.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqlnd.stats.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqlnd.stats.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqlnd.stats.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Statistics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Statistics - Manual" />
<meta name="twitter:description" content="Statistics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Statistics - Manual" />
<meta itemprop="description" content="Statistics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Statistics" />

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
        <a href="mysqlnd.notes.php">
          Notes &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqlnd.persist.php">
          &laquo; Persistent Connections        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqlnd.php'>Mysqlnd</a></li>      </ul>
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
            <option value='en/mysqlnd.stats.php' selected="selected">English</option>
            <option value='de/mysqlnd.stats.php'>German</option>
            <option value='es/mysqlnd.stats.php'>Spanish</option>
            <option value='fr/mysqlnd.stats.php'>French</option>
            <option value='it/mysqlnd.stats.php'>Italian</option>
            <option value='ja/mysqlnd.stats.php'>Japanese</option>
            <option value='pt_BR/mysqlnd.stats.php'>Brazilian Portuguese</option>
            <option value='ru/mysqlnd.stats.php'>Russian</option>
            <option value='tr/mysqlnd.stats.php'>Turkish</option>
            <option value='uk/mysqlnd.stats.php'>Ukrainian</option>
            <option value='zh/mysqlnd.stats.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqlnd.stats" class="chapter">
 <h1 class="title">Statistics</h1>


 <p class="para">
  MySQL Native Driver contains support for gathering statistics on the
  communication between the client and the server. The statistics
  gathered are of two main types:
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">Client statistics</span>
   </li>
   <li class="listitem">
    <span class="simpara">Connection statistics</span>
   </li>
  </ul>
 </p>
 <p class="para">
  When using the <a href="book.mysqli.php" class="link">mysqli</a> extension,
  these statistics can be obtained through two API calls:
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara"><span class="function"><a href="function.mysqli-get-client-stats.php" class="function">mysqli_get_client_stats()</a></span></span>
   </li>
   <li class="listitem">
    <span class="simpara"><span class="function"><a href="mysqli.get-connection-stats.php" class="function">mysqli_get_connection_stats()</a></span></span>
   </li>
  </ul>
 </p>

 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <span class="simpara">
   Statistics are aggregated among all extensions that use the MySQL Native
   Driver.
   For example, if the <a href="book.mysqli.php" class="link">mysqli</a>
   extension and the PDO MySQL driver are both set-up to use MySQLnd,
   then function calls from <a href="book.mysqli.php" class="link">mysqli</a>
   and method calls from PDO will affect the statistics.
  </span>
  <span class="simpara">
   There is no way to find out how much a certain API call of any extension
   that has been compiled against MySQL Native Driver has impacted a certain
   statistic.
  </span>
 </p></blockquote>

 <div id="mysqlnd.stats.retrieve" class="section">
  <h2 class="title">Retrieving statistics</h2>

  <p class="simpara">
   Client statistics can be retrieved by calling the
   <span class="function"><a href="function.mysqli-get-client-stats.php" class="function">mysqli_get_client_stats()</a></span> function.
  </p>

  <p class="simpara">
   Connection statistics can be retrieved by calling the
   <span class="function"><a href="mysqli.get-connection-stats.php" class="function">mysqli_get_connection_stats()</a></span> function.
  </p>

  <p class="simpara">
   Both functions return an associative array,
   where the name of a statistic is the key for the corresponding
   statistical data.
  </p>
 </div>

 <div id="mysqlnd.stats.statistics" class="section">
  <h2 class="title">MySQL Native Driver Statistics</h2>
  <p class="simpara">
   Most statistics are associated to a connection, but some are associated
   to the process in which case this will be mentioned.
   
  </p>
  <p class="simpara">
   The following statistics are produced by the MySQL Native Driver:
  </p>

  <dl>
   <strong class="title">Network Related Statistics</strong>

   
    <dt id="mysqlnd.stats.statistics.bytes-sent"><code class="literal">bytes_sent</code></dt>
    <dd>
     <span class="simpara">
      Number of bytes sent from PHP to the MySQL server.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received"><code class="literal">bytes_received</code></dt>
    <dd>
     <span class="simpara">
      Number of bytes received from the MySQL server.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-sent"><code class="literal">packets_sent</code></dt>
    <dd>
     <span class="simpara">
      Number of packets sent by the MySQL Client Server protocol.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received"><code class="literal">packets_received</code></dt>
    <dd>
     <span class="simpara">
      Number of packets received from the MySQL Client Server protocol.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.protocol-overhead-in"><code class="literal">protocol_overhead_in</code></dt>
    <dd>
     <span class="simpara">
      MySQL Client Server protocol overhead in bytes for incoming traffic.
      Currently only the Packet Header (4 bytes) is considered as overhead.
      <code class="code">protocol_overhead_in = packets_received * 4</code>
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.protocol-overhead-out"><code class="literal">protocol_overhead_out</code></dt>
    <dd>
     <span class="simpara">
      MySQL Client Server protocol overhead in bytes for outgoing traffic.
      Currently only the Packet Header (4 bytes) is considered as overhead.
      <code class="code">protocol_overhead_out = packets_received * 4</code>
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-ok-packet"><code class="literal">bytes_received_ok_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size of bytes of MySQL Client Server protocol OK packets received.
      OK packets can contain a status message.
      The length of the status message can vary and thus the size of an OK
      packet is not fixed.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-ok"><code class="literal">packets_received_ok</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol OK packets received.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-eof-packet"><code class="literal">bytes_received_eof_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol EOF packets received.
      EOF can vary in size depending on the server version.
      Also, EOF can transport an error message.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-eof"><code class="literal">packets_received_eof</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol EOF packets.
     </span>
     <span class="simpara">
      Like with other packet statistics the number of packets will be
      increased even if PHP does not receive the expected packet but,
      for example, an error message.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-rset-header-packet"><code class="literal">bytes_received_rset_header_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol result set header
      packets.
      The size of the packets varies depending on the payload
      (<code class="literal">LOAD LOCAL INFILE</code>, <code class="literal">INSERT</code>,
      <code class="literal">UPDATE</code>, <code class="literal">SELECT</code>, error message).
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-rset-header"><code class="literal">packets_received_rset_header</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol result set header packets.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-rset-field-meta-packet"><code class="literal">bytes_received_rset_field_meta_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol result set metadata
      (field information) packets.
      Of course the size varies with the fields in the result set.
      The packet may also transport an error or an EOF packet in case of
      COM_LIST_FIELDS.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-rset-field-meta"><code class="literal">packets_received_rset_field_meta</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol result set metadata
      (field information) packets.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-rset-row-packet"><code class="literal">bytes_received_rset_row_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol result set row data
      packets.
      The packet may also transport an error or an EOF packet.
      One can compute the number of error and EOF packets by subtracting
      <code class="literal">rows_fetched_from_server_normal</code>
      and <code class="literal">rows_fetched_from_server_ps</code>
      from <code class="literal">bytes_received_rset_row_packet</code>.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-rset-row"><code class="literal">packets_received_rset_row</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol result set row data packets.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-prepare-response-packet"><code class="literal">bytes_received_prepare_response_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol OK for Prepared
      Statement Initialization packets (prepared statement init packets).
      The packet may also transport an error.
      The packet size depends on the MySQL version.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-prepare-response"><code class="literal">packets_received_prepare_response</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol OK for Prepared Statement
      Initialization packets (prepared statement init packets).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-change-user-packet"><code class="literal">bytes_received_change_user_packet</code></dt>
    <dd>
     <span class="simpara">
      Total size in bytes of MySQL Client Server protocol COM_CHANGE_USER packets.
      The packet may also transport an error or EOF.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total size in bytes includes the size of the header packet
       (4 bytes, see protocol overhead).
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-received-change-user"><code class="literal">packets_received_change_user</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol COM_CHANGE_USER packets.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.packets-sent-command"><code class="literal">packets_sent_command</code></dt>
    <dd>
     <span class="simpara">
      Number of MySQL Client Server protocol commands sent from PHP to MySQL.
     </span>
     <span class="simpara">
      There is no way to know which specific commands and how many of
      them have been sent.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-real-data_normal"><code class="literal">bytes_received_real_data_normal</code></dt>
    <dd>
     <span class="simpara">
      Number of bytes of payload fetched by the PHP client from
      <code class="literal">mysqlnd</code> using the text protocol.
     </span>
     <span class="simpara">
      This is the size of the actual data contained in result sets that do not
      originate from prepared statements and which have been fetched by the PHP client.
     </span>
     <span class="simpara">
      Note that although a full result set may have been pulled from MySQL
      by <code class="literal">mysqlnd</code>, this statistic only counts actual data
      pulled from <code class="literal">mysqlnd</code> by the PHP client.
     </span>
     <p class="para">
      An example of a code sequence that will increase the value is as follows:
      <div class="example-contents">
<div class="cdata"><pre>
$mysqli = new mysqli();
$res = $mysqli-&gt;query(&quot;SELECT &#039;abc&#039;&quot;);
$res-&gt;fetch_assoc();
$res-&gt;close();
</pre></div>
      </div>

      Every fetch operation will increase the value.
     </p>
     <p class="para">
      However, the statistic will not be increased if the result set is only
      buffered on the client, but not fetched, such as in the following example:
      <div class="example-contents">
<div class="cdata"><pre>
$mysqli = new mysqli();
$res = $mysqli-&gt;query(&quot;SELECT &#039;abc&#039;&quot;);
$res-&gt;close();
</pre></div>
      </div>

     </p>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bytes-received-real-data-ps"><code class="literal">bytes_received_real_data_ps</code></dt>
    <dd>
     <span class="simpara">
      Number of bytes of the payload fetched by the PHP client from
      <code class="literal">mysqlnd</code> using the prepared statement protocol.
     </span>
     <span class="simpara">
      This is the size of the actual data contained in result sets that
      originate from prepared statements and which have been fetched by the PHP client.
     </span>
     <span class="simpara">
      The value will not be increased if the result set is not subsequently read by the PHP client.
     </span>
     <span class="simpara">
      Note that although a full result set may have been pulled from MySQL
      by <code class="literal">mysqlnd</code>, this statistic only counts actual data
      pulled from <code class="literal">mysqlnd</code> by the PHP client.
     </span>
     <span class="simpara">
      See also <code class="literal">bytes_received_real_data_normal</code>.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Result Set Related Statistics</strong>

   
    <dt id="mysqlnd.stats.statistics.result-set-queries"><code class="literal">result_set_queries</code></dt>
    <dd>
     <span class="simpara">
      Number of queries that have generated a result set.
      Examples of queries that generate a result set:
      <code class="literal">SELECT</code>, <code class="literal">SHOW</code>.
     </span>
     <span class="simpara">
      The statistic will not be incremented if there is an error reading
      the result set header packet from the line.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       This statistic can be used as an indirect measure for the number of
       queries PHP has sent to MySQL.
       This could help identifying a client that causes a high database load.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.non-result-set-queries"><code class="literal">non_result_set_queries</code></dt>
    <dd>
     <span class="simpara">
      Number of queries that did not generate a result set.
      Examples of queries that do not generate a result set:
      <code class="literal">INSERT</code>, <code class="literal">UPDATE</code>, <code class="literal">LOAD DATA</code>.
     </span>
     <span class="simpara">
      The statistic will not be incremented if there is an error reading
      the result set header packet from the line.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       This statistic can be used as an indirect measure for the number of
       queries PHP has sent to MySQL.
       This could help identifying a client that causes a high database load.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.no-index-used"><code class="literal">no_index_used</code></dt>
    <dd>
     <span class="simpara">
      Number of queries that have generated a result set but did not use an index.
      (See also the mysqld start option <code class="literal">--log-queries-not-using-indexes</code>).
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Those queries can be reported via an exception by calling
       <code class="code">mysqli_report(MYSQLI_REPORT_INDEX);</code>.
       It is possible to have them be reported via a warning instead by calling
       <code class="code">mysqli_report(MYSQLI_REPORT_INDEX ^ MYSQLI_REPORT_STRICT);</code>.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.bad-index-used"><code class="literal">bad_index_used</code></dt>
    <dd>
     <span class="simpara">
      Number of queries that have generated a result set and did not use a good index.
      (See also the mysqld start option <code class="literal">--log-slow-queries</code>).
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Those queries can be reported via an exception by calling
       <code class="code">mysqli_report(MYSQLI_REPORT_INDEX);</code>.
       It is possible to have them be reported via a warning instead by calling
       <code class="code">mysqli_report(MYSQLI_REPORT_INDEX ^ MYSQLI_REPORT_STRICT);</code>.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.slow-queries"><code class="literal">slow_queries</code></dt>
    <dd>
     <span class="simpara">
      SQL statements that took more than <code class="literal">long_query_time</code>
      seconds to execute and required at least
      <code class="literal">min_examined_row_limit</code> rows to be examined.
     </span>
     <div class="caution"><strong class="caution">Caution</strong>
      <p class="simpara">
       Not reported through <span class="function"><a href="function.mysqli-report.php" class="function">mysqli_report()</a></span>.
      </p>
     </div>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.buffered-sets"><code class="literal">buffered_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of buffered result sets returned by normal
      (i.e. not via a prepared statement) queries.
     </span>
     <p class="para">
      Examples of API calls that will buffer result sets on the client:
      <span class="simplelist"><span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span>, <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span>, <span class="function"><a href="mysqli-stmt.get-result.php" class="function">mysqli_stmt_get_result()</a></span></span>
     </p>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.unbuffered-sets"><code class="literal">unbuffered_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of unbuffered result sets returned by normal
      (i.e. not via a prepared statement) queries.
     </span>
     <p class="para">
      Examples of API calls that will not buffer result sets on the client:
      <span class="simplelist"><span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span></span>
     </p>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.ps-buffered-sets"><code class="literal">ps_buffered_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of buffered result sets returned by prepared statements.
     </span>
     <p class="para">
      Examples of API calls that will buffer result sets on the client:
      <span class="simplelist"><span class="function"><a href="mysqli-stmt.store-result.php" class="function">mysqli_stmt_store_result()</a></span></span>
     </p>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.ps-unbuffered-sets"><code class="literal">ps_unbuffered_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of unbuffered result sets returned by prepared statements.
     </span>
     <span class="simpara">
      By default prepared statements are unbuffered,
      thus most prepared statements will be accounted in this statistic.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.flushed-normal-sets"><code class="literal">flushed_normal_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of result sets returned by normal
      (i.e. not via a prepared statement) queries
      with unread data that have been silently flushed.
     </span>

     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Flushing happens only with unbuffered result sets.
      </span>
      <span class="simpara">
       Unbuffered result sets must be fetched completely before a new query can
       be run on the connection otherwise MySQL will throw an error.
       If the application does not fetch all rows from an unbuffered result set,
       mysqlnd does implicitly fetch the result set to clear the line.
      </span>
      <span class="simpara">
       See also <code class="literal">rows_skipped_normal</code>, <code class="literal">rows_skipped_ps</code>.
      </span>
      <p class="para">
       Some possible causes for an implicit flush:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          Faulty client application
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          Client stopped reading after it found what it was looking for
          but has made MySQL calculate more records than needed
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          Client application has stopped unexpectedly
         </span>
        </li>
       </ul>
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.flushed-ps-sets"><code class="literal">flushed_ps_sets</code></dt>
    <dd>
     <span class="simpara">
      Number of result sets from prepared statements
      with unread data that have been silently flushed.
     </span>

     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       Flushing happens only with unbuffered result sets.
      </span>
      <span class="simpara">
       Unbuffered result sets must be fetched completely before a new query can
       be run on the connection otherwise MySQL will throw an error.
       If the application does not fetch all rows from an unbuffered result set,
       mysqlnd does implicitly fetch the result set to clear the line.
      </span>
      <span class="simpara">
       See also <code class="literal">rows_skipped_normal</code>, <code class="literal">rows_skipped_ps</code>.
      </span>
      <p class="para">
       Some possible causes for an implicit flush:
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          Faulty client application
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          Client stopped reading after it found what it was looking for
          but has made MySQL calculate more records than needed
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          Client application has stopped unexpectedly
         </span>
        </li>
       </ul>
      </p>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.ps-prepared-never-executed"><code class="literal">ps_prepared_never_executed</code></dt>
    <dd>
     <span class="simpara">
      Number of statements prepared but never executed.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.ps-prepared-once-executed"><code class="literal">ps_prepared_once_executed</code></dt>
    <dd>
     <span class="simpara">
      Number of prepared statements executed only once.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-server-normal"><code class="literal">rows_fetched_from_server_normal</code></dt>
    <dt><code class="literal">rows_fetched_from_server_ps</code></dt>
    <dd>
     <span class="simpara">
      Total number of result set rows fetched from the server.
      This includes the rows which were not read by the client but
      had been implicitly fetched due to flushed unbuffered result sets.
     </span>
     <span class="simpara">
      See also <code class="literal">packets_received_rset_row</code>.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-buffered-from-server-normal"><code class="literal">rows_buffered_from_client_normal</code></dt>
    <dd>
     <span class="simpara">
      Total number of buffered rows originating from a normal query.
     </span>
     <span class="simpara">
      This is the number of rows that have been fetched from MySQL and buffered on client.
     </span>
     <p class="para">
      Examples of queries that will buffer results:
      <ul class="simplelist">
       <li><span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span></li>
       <li><span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span></li>
      </ul>
     </p>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-buffered-from-client-ps"><code class="literal">rows_buffered_from_client_ps</code></dt>
    <dd>
     <span class="simpara">
      Same as <code class="literal">rows_buffered_from_client_normal</code>
      but for prepared statements.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-client-normal-buffered"><code class="literal">rows_fetched_from_client_normal_buffered</code></dt>
    <dd>
     <span class="simpara">
      Total number of rows fetched by the client from a buffered result set
      created by a normal query.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-client-ps-buffered"><code class="literal">rows_fetched_from_client_ps_buffered</code></dt>
    <dd>
     <span class="simpara">
      Total number of rows fetched by the client from a buffered result set
      created by a prepared statement.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-client-normal-unbuffered"><code class="literal">rows_fetched_from_client_normal_unbuffered</code></dt>
    <dd>
     <span class="simpara">
      Total number of rows fetched by the client from an unbuffered result set
      created by a normal query.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-client-ps-unbuffered"><code class="literal">rows_fetched_from_client_ps_unbuffered</code></dt>
    <dd>
     <span class="simpara">
      Total number of rows fetched by the client from an unbuffered result set
      created by a prepared statement.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.rows-fetched-from-client-ps-cursor"><code class="literal">rows_fetched_from_client_ps_cursor</code></dt>
    <dd>
     <span class="simpara">
      Total number of rows fetch by the client from a cursor created by a
      prepared statement.
     </span>
    </dd>
   

   
   
    <dt id="mysqlnd.stats.statistics.rows-skipped-normal"><code class="literal">rows_skipped_normal</code></dt>
    <dt><code class="literal">rows_skipped_ps</code></dt>
    <dd>
     <span class="simpara">
      Reserved for future use (currently not supported).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.copy-on-write"><code class="literal">copy_on_write_saved</code></dt>
    <dt><code class="literal">copy_on_write_performed</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      With mysqlnd, variables returned by the extensions point into mysqlnd
      internal network result buffers.
      If the data are not changed, the fetched data is kept only once in memory.
      However, any modification to the data will require mysqlnd to perform
      a copy-on-write operation.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.free-result"><code class="literal">explicit_free_result</code></dt>
    <dt><code class="literal">implicit_free_result</code></dt>
    <dd>
     <span class="simpara">
      This is a connection and process level scope statistic.
     </span>
     <span class="simpara">
      Total number of freed result sets.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-null"><code class="literal">proto_text_fetched_null</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_NULL</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-null"><code class="literal">proto_binary_fetched_null</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_NULL</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-bit"><code class="literal">proto_text_fetched_bit</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_BIT</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-bit"><code class="literal">proto_binary_fetched_bit</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_BIT</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-tinyint"><code class="literal">proto_text_fetched_tinyint</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TINY</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-tinyint"><code class="literal">proto_binary_fetched_tinyint</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TINY</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-short"><code class="literal">proto_text_fetched_short</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_SHORT</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-short"><code class="literal">proto_binary_fetched_short</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_SHORT</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-int24"><code class="literal">proto_text_fetched_int24</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_INT24</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-int24"><code class="literal">proto_binary_fetched_int24</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_INT24</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-int"><code class="literal">proto_text_fetched_int</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_LONG</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-int"><code class="literal">proto_binary_fetched_int</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_LONG</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-bigint"><code class="literal">proto_text_fetched_bigint</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_LONGLONG</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-bigint"><code class="literal">proto_binary_fetched_bigint</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_LONGLONG</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-decimal"><code class="literal">proto_text_fetched_decimal</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DECIMAL</code>, or <code class="literal">MYSQL_TYPE_NEWDECIMAL</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-decimal"><code class="literal">proto_binary_fetched_decimal</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DECIMAL</code>, or <code class="literal">MYSQL_TYPE_NEWDECIMAL</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-float"><code class="literal">proto_text_fetched_float</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_FLOAT</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-float"><code class="literal">proto_binary_fetched_float</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_FLOAT</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-double"><code class="literal">proto_text_fetched_double</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DOUBLE</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-double"><code class="literal">proto_binary_fetched_double</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DOUBLE</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-date"><code class="literal">proto_text_fetched_date</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DATE</code>, or <code class="literal">MYSQL_TYPE_NEWDATE</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-date"><code class="literal">proto_binary_fetched_date</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DATE</code>, or <code class="literal">MYSQL_TYPE_NEWDATE</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-year"><code class="literal">proto_text_fetched_year</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_YEAR</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-year"><code class="literal">proto_binary_fetched_year</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_YEAR</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-time"><code class="literal">proto_text_fetched_time</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TIME</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-time"><code class="literal">proto_binary_fetched_time</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TIME</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-datetime"><code class="literal">proto_text_fetched_datetime</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DATETIME</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-datetime"><code class="literal">proto_binary_fetched_datetime</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_DATETIME</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-timestamp"><code class="literal">proto_text_fetched_timestamp</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TIMESTAMP</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-timestamp"><code class="literal">proto_binary_fetched_timestamp</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TIMESTAMP</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-string"><code class="literal">proto_text_fetched_string</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_STRING</code>, <code class="literal">MYSQL_TYPE_VARSTRING</code>, or <code class="literal">MYSQL_TYPE_VARCHAR</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-string"><code class="literal">proto_binary_fetched_string</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_STRING</code>, <code class="literal">MYSQL_TYPE_VARSTRING</code>, or <code class="literal">MYSQL_TYPE_VARCHAR</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-blob"><code class="literal">proto_text_fetched_blob</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TINY_BLOB</code>,
      <code class="literal">MYSQL_TYPE_MEDIUM_BLOB</code>,
      <code class="literal">MYSQL_TYPE_LONG_BLOB</code>,
      or <code class="literal">MYSQL_TYPE_BLOB</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-blob"><code class="literal">proto_binary_fetched_blob</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_TINY_BLOB</code>,
      <code class="literal">MYSQL_TYPE_MEDIUM_BLOB</code>,
      <code class="literal">MYSQL_TYPE_LONG_BLOB</code>,
      or <code class="literal">MYSQL_TYPE_BLOB</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-enum"><code class="literal">proto_text_fetched_enum</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_ENUM</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-enum"><code class="literal">proto_binary_fetched_enum</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_ENUM</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-set"><code class="literal">proto_text_fetched_set</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_SET</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-set"><code class="literal">proto_binary_fetched_set</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_SET</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-geometry"><code class="literal">proto_text_fetched_geometry</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_GEOMETRY</code>
      fetched from a normal query (MySQL text protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-geometry"><code class="literal">proto_binary_fetched_geometry</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_GEOMETRY</code>
      fetched from a prepared statement (MySQL binary protocol).
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-text-fetched-other"><code class="literal">proto_text_fetched_other</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of types
      <code class="literal">MYSQL_TYPE_<span class="replaceable">*</span></code>
      not listed previously
      fetched from a normal query (MySQL text protocol).
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       In theory, this should always be <code class="literal">0</code>.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.proto-binary-fetched-other"><code class="literal">proto_binary_fetched_other</code></dt>
    <dd>
     <span class="simpara">
      Total number of columns of type
      <code class="literal">MYSQL_TYPE_<span class="replaceable">*</span></code>
      not listed previously
      fetched from a prepared statement (MySQL binary protocol).
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       In theory, this should always be <code class="literal">0</code>.
      </span>
     </p></blockquote>
    </dd>
   

  </dl>

  <dl>
   <strong class="title">Connection Related Statistics</strong>

   
    <dt id="mysqlnd.stats.statistics.connect-success"><code class="literal">connect_success</code></dt>
    <dd>
     <span class="simpara">
      Total number of successful connection attempts.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       <code class="literal">connect_success</code> holds the sum of successful
       persistent and non-persistent connection attempts.
       Therefore, the number of successful non-persistent connection attempts
       is <code class="literal">connect_success - pconnect_success</code>.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.pconnect-success"><code class="literal">pconnect_success</code></dt>
    <dd>
     <span class="simpara">
      Total number of successful persistent connection attempts.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.connect-failure"><code class="literal">connect_failure</code></dt>
    <dd>
     <span class="simpara">
      Total number of failed connection attempts.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.reconnect"><code class="literal">reconnect</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.active-connections"><code class="literal">active_connections</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      Total number of active persistent and non-persistent connections.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       The total number of active non-persistent connections is
       <code class="literal">active_connections - active_persistent_connections</code>.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.active-persistent-connections"><code class="literal">active_persistent_connections</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      Total number of active persistent connections.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.explicit-close"><code class="literal">explicit_close</code></dt>
    <dd>
     <span class="simpara">
      Total number of explicitly closed connections.
     </span>
     <div class="example" id="example-1929">
      <p><strong>Example #1 Examples of code snippets that cause an explicit close</strong></p>
      <ul class="itemizedlist">
       <li class="listitem">
        <div class="example-contents">
<div class="cdata"><pre>
$link = new mysqli(/* ... */);
$link-&gt;close(/* ... */);
</pre></div>
        </div>

       </li>
       <li class="listitem">
        <div class="example-contents">
<div class="cdata"><pre>
$link = new mysqli(/* ... */);
$link-&gt;connect(/* ... */);
</pre></div>
        </div>

       </li>
      </ul>
     </div>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.implicit-close"><code class="literal">implicit_close</code></dt>
    <dd>
     <span class="simpara">
      Total number of implicitly closed connections.
     </span>
     <div class="example" id="example-1930">
      <p><strong>Example #2 Examples of code snippets that cause an implicit close</strong></p>
      <ul class="itemizedlist">
       <li class="listitem">
        <div class="example-contents">
<div class="cdata"><pre>
$link = new mysqli(/* ... */);
$link-&gt;real_connect(/* ... */);
</pre></div>
        </div>

       </li>
       <li class="listitem">
        <div class="example-contents">
         <code class="code">unset($link)</code>
        </div>

       </li>
       <li class="listitem">
        <span class="simpara">
         Persistent connection: pooled connection has been created with
         real_connect and there may be unknown options set - close
         implicitly to avoid returning a connection with unknown options
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         Persistent connection: ping/change_user fails and ext/mysqli
         closes the connection
        </span>
       </li>
       <li class="listitem">
        <span class="simpara">
         End of script execution: close connections that have not been
         closed by the user
        </span>
       </li>
      </ul>
     </div>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.disconnect-close"><code class="literal">disconnect_close</code></dt>
    <dd>
     <span class="simpara">
      Connection failures indicated by the C API call
      <code class="literal">mysql_real_connect</code> during an attempt to
      establish a connection.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.in-middle-of-command-close"><code class="literal">in_middle_of_command_close</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      A connection has been closed in the middle of a command execution
      (outstanding result sets not fetched, after sending a query and
      before retrieving an answer, while fetching data, while
      transferring data with LOAD DATA).
     </span>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       Unless asynchronous queries are used,
       this should only happen if the PHP application terminated unexpectedly,
       and PHP shuts down the connection automatically.
      </p>
     </div>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.init-command-executed-count"><code class="literal">init_command_executed_count</code></dt>
    <dd>
     <span class="simpara">
      Total number of init command executions.
      For example: <code class="code">mysqli_options(MYSQLI_INIT_COMMAND , $value)</code>.
     </span>
     <span class="simpara">
      The number of successful executions is
      <code class="literal">init_command_executed_count - init_command_failed_count</code>.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.init-command-failed-count"><code class="literal">init_command_failed_count</code></dt>
    <dd>
     <span class="simpara">
      Total number of failed init commands.
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title"><code class="literal">COM_*</code> Command Related Statistics</strong>

   
    <dt id="mysqlnd.stats.statistics.com"><code class="literal">com_quit</code></dt>
    <dt><code class="literal">com_init_db</code></dt>
    <dt><code class="literal">com_query</code></dt>
    <dt><code class="literal">com_field_list</code></dt>
    <dt><code class="literal">com_create_db</code></dt>
    <dt><code class="literal">com_drop_db</code></dt>
    <dt><code class="literal">com_refresh</code></dt>
    <dt><code class="literal">com_shutdown</code></dt>
    <dt><code class="literal">com_statistics</code></dt>
    <dt><code class="literal">com_process_info</code></dt>
    <dt><code class="literal">com_connect</code></dt>
    <dt><code class="literal">com_process_kill</code></dt>
    <dt><code class="literal">com_debug</code></dt>
    <dt><code class="literal">com_ping</code></dt>
    <dt><code class="literal">com_time</code></dt>
    <dt><code class="literal">com_delayed_insert</code></dt>
    <dt><code class="literal">com_change_user</code></dt>
    <dt><code class="literal">com_binlog_dump</code></dt>
    <dt><code class="literal">com_table_dump</code></dt>
    <dt><code class="literal">com_connect_out</code></dt>
    <dt><code class="literal">com_register_slave</code></dt>
    <dt><code class="literal">com_stmt_prepare</code></dt>
    <dt><code class="literal">com_stmt_execute</code></dt>
    <dt><code class="literal">com_stmt_send_long_data</code></dt>
    <dt><code class="literal">com_stmt_close</code></dt>
    <dt><code class="literal">com_stmt_reset</code></dt>
    <dt><code class="literal">com_stmt_set_option</code></dt>
    <dt><code class="literal">com_stmt_fetch</code></dt>
    <dt><code class="literal">com_daemon</code></dt>
    <dd>
     <span class="simpara">
      Total number of attempts to send a certain <code class="literal">COM_*</code>
      command from PHP to MySQL.
     </span>
     <span class="simpara">
      The statistics are incremented after checking the line and immediately
      before sending the corresponding MySQL client server protocol packet.
     </span>
     <div class="caution"><strong class="caution">Caution</strong>
      <p class="simpara">
       If MySQLnd fails to send the packet over the wire the statistics will not be decremented.
       In case of a failure MySQLnd emits a PHP warning
       <q class="quote">Error while sending %s packet. PID=%d.</q>
      </p>
     </div>

     <div class="example" id="example-1931">
      <p><strong>Example #3 Usage examples</strong></p>
      <ul class="itemizedlist">
       <li class="listitem">
        <p class="para">
         Check if PHP sends certain commands to MySQL, for example,
         check if a client sends <code class="literal">COM_PROCESS_KILL</code>
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         Calculate the average number of prepared statement executions
         by comparing <code class="literal">COM_EXECUTE</code> with
         <code class="literal">COM_PREPARE</code>
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         Check if PHP has run any non-prepared SQL statements by
         checking if <code class="literal">COM_QUERY</code> is zero
        </p>
       </li>
       <li class="listitem">
        <p class="para">
         Identify PHP scripts that run an excessive number of SQL
         statements by checking <code class="literal">COM_QUERY</code> and
         <code class="literal">COM_EXECUTE</code>
        </p>
       </li>
      </ul>
     </div>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Miscellaneous Statistics</strong>

   
    <dt id="mysqlnd.stats.statistics.stmt-close"><code class="literal">explicit_stmt_close</code></dt>
    <dt><code class="literal">implicit_stmt_close</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      Total number of closed prepared statements.
     </span>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <span class="simpara">
       A prepared statement is always explicitly closed. The only time it&#039;s closed implicitly is when preparing it fails.
      </span>
     </p></blockquote>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.memory-management"><code class="literal">mem_emalloc_count</code></dt>
    <dt><code class="literal">mem_emalloc_ammount</code></dt>
    <dt><code class="literal">mem_ecalloc_count</code></dt>
    <dt><code class="literal">mem_ecalloc_ammount</code></dt>
    <dt><code class="literal">mem_realloc_count</code></dt>
    <dt><code class="literal">mem_realloc_ammount</code></dt>
    <dt><code class="literal">mem_efree_count</code></dt>
    <dt><code class="literal">mem_malloc_count</code></dt>
    <dt><code class="literal">mem_malloc_ammount</code></dt>
    <dt><code class="literal">mem_calloc_count</code></dt>
    <dt><code class="literal">mem_calloc_ammount</code></dt>
    <dt><code class="literal">mem_ealloc_count</code></dt>
    <dt><code class="literal">mem_ealloc_ammount</code></dt>
    <dt><code class="literal">mem_free_count</code></dt>
    <dd>
     <span class="simpara">
      This is a process level scope statistic.
     </span>
     <span class="simpara">
      Memory management calls.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.command-buffer-too-small"><code class="literal">command_buffer_too_small</code></dt>
    
    <dd>
     <span class="simpara">
      Number of network command buffer extensions while sending commands from
      PHP to MySQL.
     </span>
     <span class="simpara">
      MySQLnd allocates an internal command/network buffer of
      <a href="mysqlnd.config.php#ini.mysqlnd.net-cmd-buffer-size" class="link">mysqlnd.net_cmd_buffer_size</a>
      bytes for every connection.
     </span>
     <span class="simpara">
      If a MySQL Client Server protocol command,
      e.g. <code class="literal">COM_QUERY</code> (normal query),
      does not fit into the buffer,
      MySQLnd will grow the buffer to what is needed for sending the command.
      Whenever the buffer gets extended for one connection
      <code class="literal">command_buffer_too_small</code> will be incremented by one.
     </span>
     <span class="simpara">
      If MySQLnd has to grow the buffer beyond its initial size of
      <a href="mysqlnd.config.php#ini.mysqlnd.net-cmd-buffer-size" class="link">mysqlnd.net_cmd_buffer_size</a>
      bytes for almost every connection,
      considerations to increase the default size should be made to avoid
      re-allocations.
     </span>
    </dd>
   

   
    <dt id="mysqlnd.stats.statistics.connection-reused"><code class="literal">connection_reused</code></dt>
    <dd>
     <span class="simpara">
      The total number of times a persistent connection has been reused.
     </span>
    </dd>
   
  </dl>
 </div>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqlnd/stats.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqlnd.stats%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqlnd.stats&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqlnd.stats.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.mysqlnd.php">Mysqlnd</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.mysqlnd.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.overview.php" title="Overview">Overview</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.install.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.config.php" title="Runtime Configuration">Runtime Configuration</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.incompatibilities.php" title="Incompatibilities">Incompatibilities</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.persist.php" title="Persistent Connections">Persistent Connections</a>
                        </li>
                                                <li class="current">
                            <a href="mysqlnd.stats.php" title="Statistics">Statistics</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.notes.php" title="Notes">Notes</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.memory.php" title="Memory management">Memory management</a>
                        </li>
                                                <li class="">
                            <a href="mysqlnd.plugin.php" title="MySQL Native Driver Plugin API">MySQL Native Driver Plugin API</a>
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
