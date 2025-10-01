<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Connections - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.quickstart.connections.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.quickstart.connections.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.connections.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mysqli.quickstart.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.quickstart.dual-interface.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.quickstart.statements.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.connections.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.quickstart.connections.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.quickstart.connections.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.quickstart.connections.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.quickstart.connections.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.quickstart.connections.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.quickstart.connections.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.quickstart.connections.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.quickstart.connections.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.quickstart.connections.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.quickstart.connections.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connections" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Connections - Manual" />
<meta name="twitter:description" content="Connections" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Connections - Manual" />
<meta itemprop="description" content="Connections" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connections" />

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
        <a href="mysqli.quickstart.statements.php">
          Executing statements &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.quickstart.dual-interface.php">
          &laquo; Dual procedural and object-oriented interface        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='mysqli.quickstart.php'>Quick start guide</a></li>      </ul>
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
            <option value='en/mysqli.quickstart.connections.php' selected="selected">English</option>
            <option value='de/mysqli.quickstart.connections.php'>German</option>
            <option value='es/mysqli.quickstart.connections.php'>Spanish</option>
            <option value='fr/mysqli.quickstart.connections.php'>French</option>
            <option value='it/mysqli.quickstart.connections.php'>Italian</option>
            <option value='ja/mysqli.quickstart.connections.php'>Japanese</option>
            <option value='pt_BR/mysqli.quickstart.connections.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.quickstart.connections.php'>Russian</option>
            <option value='tr/mysqli.quickstart.connections.php'>Turkish</option>
            <option value='uk/mysqli.quickstart.connections.php'>Ukrainian</option>
            <option value='zh/mysqli.quickstart.connections.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.quickstart.connections" class="section">
  <h2 class="title">Connections</h2>
  <p class="para">
   The MySQL server supports the use of different transport
   layers for connections. Connections use TCP/IP, Unix domain sockets or
   Windows named pipes.
  </p>
  <p class="para">
   The hostname <code class="literal">localhost</code> has a special meaning.
   It is bound to the use of Unix domain sockets.
   To open a TCP/IP connection to the localhost, <code class="literal">127.0.0.1</code> must be used
   instead of the hostname <code class="literal">localhost</code>.
  </p>
  <p class="para">
   <div class="example" id="example-1550">
    <p><strong>Example #1 Special meaning of localhost</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host_info </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">, </span><span style="color: #0000BB">3306</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">host_info </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
Localhost via UNIX socket
127.0.0.1 via TCP/IP
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>Connection parameter defaults</strong>
  </p>
  <p class="para">
   Depending on the connection function used, assorted parameters
   can be omitted. If a parameter is not provided, then the extension attempts to
   use the default values that are set in the PHP configuration file.
  </p>
  <p class="para">
   <div class="example" id="example-1551">
    <p><strong>Example #2 Setting defaults</strong></p>
    <div class="example-contents">
<div class="inicode"><pre class="inicode">mysqli.default_host=192.168.2.27
mysqli.default_user=root
mysqli.default_pw=&quot;&quot;
mysqli.default_port=3306
mysqli.default_socket=/tmp/mysql.sock</pre>
</div>
    </div>

   </div>
  </p>
  <p class="para">
   The resulting parameter values are then passed to the client library
   that is used by the extension. If the client library detects empty or unset
   parameters, then it may default to the library built-in values.
  </p>
  <p class="para">
   <strong>Built-in connection library defaults</strong>
  </p>
  <p class="para">
   If the host value is unset or empty, then the client library will
   default to a Unix socket connection on <code class="literal">localhost</code>.
   If socket is unset or empty, and a Unix socket connection is requested,
   then a connection to the default socket on <code class="literal">/tmp/mysql.sock</code>
   is attempted.
  </p>
  <p class="para">
   On Windows systems, the host name <code class="literal">.</code> is interpreted
   by the client library as an attempt to open a Windows named pipe based
   connection. In this case the socket parameter is interpreted as the pipe
   name. If not given or empty, then the socket (pipe name) defaults to
   <code class="literal">\\.\pipe\MySQL</code>.
  </p>
  <p class="para">
   If neither a Unix domain socket based not a Windows named pipe based connection
   is to be established and the port parameter value is unset, the library
   will default to port <code class="literal">3306</code>.
  </p>
  <p class="para">
   The <a href="mysqlnd.overview.php" class="link">mysqlnd</a> library and the
   MySQL Client Library (libmysqlclient) implement the same logic for determining defaults.
  </p>
  <p class="para">
   <strong>Connection options</strong>
  </p>
  <p class="para">
   Connection options are available to, for example, set
   init commands which are executed upon connect, or for requesting use of
   a certain charset. Connection options must be set before a network
   connection is established.
  </p>
  <p class="para">
   For setting a connection option, the connect operation has to be
   performed in three steps: creating a connection handle with
   <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span> or <span class="methodname"><a href="mysqli.construct.php" class="methodname">mysqli::__construct()</a></span>, 
   setting the requested options using <span class="methodname"><a href="mysqli.options.php" class="methodname">mysqli::options()</a></span>, 
   and establishing the network connection with <span class="methodname"><a href="mysqli.real-connect.php" class="methodname">mysqli::real_connect()</a></span>.
  </p>
  <p class="para">
   <strong>Connection pooling</strong>
  </p>
  <p class="para">
   The mysqli extension supports persistent database connections, which
   are a special kind of pooled connections. By default, every database
   connection opened by a script is either explicitly closed by the user during
   runtime or released automatically at the end of the script. A persistent
   connection is not. Instead it is put into a pool for later reuse, if
   a connection to the same server using the same username, password, socket, port
   and default database is opened. Reuse saves connection overhead.
  </p>
  <p class="para">
   Every PHP process is using its own mysqli connection pool.
   Depending on the web server deployment model, a PHP process may serve
   one or multiple requests. Therefore, a pooled connection may be used
   by one or more scripts subsequently.
  </p>
  <p class="para">
   <strong>Persistent connection</strong>
  </p>
  <p class="para">
   If an unused persistent connection for a given combination of host, username,
   password, socket, port and default database cannot be found in the connection pool,
   then mysqli opens a new connection. The use of persistent connections can be
   enabled and disabled using the PHP directive <a href="mysqli.configuration.php#ini.mysqli.allow-persistent" class="link">mysqli.allow_persistent</a>.
   The total number of connections opened by a script can be limited with
   <a href="mysqli.configuration.php#ini.mysqli.max-links" class="link">mysqli.max_links</a>. The maximum number of persistent connections
   per PHP process can be restricted with <a href="mysqli.configuration.php#ini.mysqli.max-persistent" class="link">mysqli.max_persistent</a>.
   Please note that the web server may spawn many PHP processes.
  </p>
  <p class="para">
   A common complain about persistent connections is that their state is
   not reset before reuse. For example, open and unfinished transactions are not
   automatically rolled back. But also, authorization changes which happened
   in the time between putting the connection into the pool and reusing it
   are not reflected. This may be seen as an unwanted side-effect. On the contrary,
   the name <code class="literal">persistent</code> may be understood as a promise
   that the state is persisted.
  </p>
  <p class="para">
   The mysqli extension supports both interpretations of a persistent connection:
   state persisted, and state reset before reuse. The default is reset.
   Before a persistent connection is reused, the mysqli extension implicitly
   calls <span class="methodname"><a href="mysqli.change-user.php" class="methodname">mysqli::change_user()</a></span> to reset the state. The
   persistent connection appears to the user as if it was just opened. No
   artifacts from previous usages are visible.
  </p>
  <p class="para">
   The <span class="methodname"><a href="mysqli.change-user.php" class="methodname">mysqli::change_user()</a></span> call is an expensive operation.
   For best performance, users may want to recompile the extension with the
   compile flag <strong><code>MYSQLI_NO_CHANGE_USER_ON_PCONNECT</code></strong> being set.
  </p>
  <p class="para">
   It is left to the user to choose between safe behavior and best performance.
   Both are valid optimization goals. For ease of use, the safe behavior has
   been made the default at the expense of maximum performance.
  </p>
  <p class="para">
   <strong>See also</strong>
  </p>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="mysqli.construct.php" class="methodname">mysqli::__construct()</a></span></li>
    <li><span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span></li>
    <li><span class="methodname"><a href="mysqli.options.php" class="methodname">mysqli::options()</a></span></li>
    <li><span class="methodname"><a href="mysqli.real-connect.php" class="methodname">mysqli::real_connect()</a></span></li>
    <li><span class="methodname"><a href="mysqli.change-user.php" class="methodname">mysqli::change_user()</a></span></li>
    <li><a href="mysqli.get-host-info.php" class="link">$mysqli::host_info</a></li>
    <li><a href="mysqli.configuration.php" class="link">MySQLi Configuration Options</a></li>
    <li><a href="features.persistent-connections.php" class="link">Persistent Database Connections</a></li>
   </ul>
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/quickstart.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.quickstart.connections%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.quickstart.connections&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.connections.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mysqli.quickstart.php">Quick start guide</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.quickstart.dual-interface.php" title="Dual procedural and object-&#8203;oriented interface">Dual procedural and object-&#8203;oriented interface</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.quickstart.connections.php" title="Connections">Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.statements.php" title="Executing statements">Executing statements</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.prepared-statements.php" title="Prepared Statements">Prepared Statements</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.stored-procedures.php" title="Stored Procedures">Stored Procedures</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.multiple-statement.php" title="Multiple Statements">Multiple Statements</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.transactions.php" title="API support for transactions">API support for transactions</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.metadata.php" title="Metadata">Metadata</a>
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
