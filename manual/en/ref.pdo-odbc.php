<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ODBC and DB2 PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-odbc.php">
 <link rel="shorturl" href="https://www.php.net/pdo-odbc">
 <link rel="alternate" href="https://www.php.net/pdo-odbc" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.pdo-oci.connection.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-odbc.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-odbc.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-odbc.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-odbc.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-odbc.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-odbc.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-odbc.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-odbc.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-odbc.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-odbc.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-odbc.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-odbc.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="ODBC and DB2 PDO Driver (PDO_ODBC)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ODBC and DB2 PDO Driver - Manual" />
<meta name="twitter:description" content="ODBC and DB2 PDO Driver (PDO_ODBC)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ODBC and DB2 PDO Driver - Manual" />
<meta itemprop="description" content="ODBC and DB2 PDO Driver (PDO_ODBC)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="ODBC and DB2 PDO Driver (PDO_ODBC)" />

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
        <a href="ref.pdo-odbc.connection.php">
          PDO_ODBC DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.pdo-oci.connection.php">
          &laquo; PDO_OCI DSN        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='pdo.drivers.php'>PDO Drivers</a></li>      </ul>
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
            <option value='en/ref.pdo-odbc.php' selected="selected">English</option>
            <option value='de/ref.pdo-odbc.php'>German</option>
            <option value='es/ref.pdo-odbc.php'>Spanish</option>
            <option value='fr/ref.pdo-odbc.php'>French</option>
            <option value='it/ref.pdo-odbc.php'>Italian</option>
            <option value='ja/ref.pdo-odbc.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-odbc.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-odbc.php'>Russian</option>
            <option value='tr/ref.pdo-odbc.php'>Turkish</option>
            <option value='uk/ref.pdo-odbc.php'>Ukrainian</option>
            <option value='zh/ref.pdo-odbc.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-odbc" class="reference">
  
  <h1 class="title">ODBC and DB2 PDO Driver (PDO_ODBC)</h1>
  
  <div class="partintro">

   <div class="section" id="ref.pdo-odbc.intro">
   <h2 class="title">Introduction</h2>
    <p class="para">
     PDO_ODBC is a driver that implements the <a href="intro.pdo.php" class="link">PHP Data
     Objects (PDO) interface</a>
     to enable access from PHP to databases through ODBC drivers or through the
     IBM DB2 Call Level Interface (DB2 CLI) library. PDO_ODBC currently supports
     three different &quot;flavours&quot; of database drivers:
     <dl>
      
       <dt>ibm-db2</dt>
       <dd>
        <p class="para">
         Supports access to IBM DB2 Universal Database, Cloudscape, and Apache
         Derby servers through the free DB2 express-C client.
        </p>
       </dd>
      
      
       <dt>unixODBC</dt>
       <dd>
        <p class="para">
         Supports access to database servers through the unixODBC driver
         manager and the database&#039;s own ODBC drivers.
        </p>
       </dd>
      
      
       <dt>generic</dt>
       <dd>
        <p class="para">
         Offers a compile option for ODBC driver managers that are not
         explicitly supported by PDO_ODBC.
        </p>
       </dd>
      
     </dl>
    </p>
    <p class="para">
     On Windows, <var class="filename">php_pdo_odbc.dll</var> has to be enabled as
     extension in <var class="filename">php.ini</var>. It is linked
     against the Windows ODBC Driver Manager so that PHP can connect to any
     database cataloged as a System DSN.
    </p>
   </div>

   
   

<div class="section" id="ref.pdo-odbc.installation">
 <h2 class="title">Installation</h2>
 <div class="procedure">
  <strong class="title">PDO_ODBC on UNIX systems</strong>
  <ol type="1"><li>
   <p class="para">
    PDO_ODBC is included in the PHP source. You can compile the
    PDO_ODBC extension as either a static or shared module using the following
    <strong class="command">configure</strong> commands.
    <dl>
     
      <dt>ibm_db2</dt>
      <dd>
       <p class="para">
        <div class="example-contents screen"><div class="cdata"><pre>
./configure --with-pdo-odbc=ibm-db2,/opt/IBM/db2/V8.1/
</pre></div></div>
        To build PDO_ODBC with the ibm-db2 flavour, you have to have
        previously installed the DB2 application development headers on the
        same machine on which you are compiling PDO_ODBC. The DB2 application
        development headers are an installable option in the DB2 servers, and
        are also available as part of the DB2 Application Development Client
        freely available for download from the IBM developerWorks 
        <a href="https://www.ibm.com/developerworks/downloads/im/db2express/index.html" class="link external">&raquo;&nbsp;website</a>.
       </p>
       <p class="para">
        If you do not supply a location for the DB2 libraries and headers to
        the <strong class="command">configure</strong> command, PDO_ODBC defaults to
        <var class="filename">/home/db2inst1/sqllib</var>.
       </p>
      </dd>
     
     
      <dt>unixODBC</dt>
      <dd>
       <p class="para">
        <div class="example-contents screen"><div class="cdata"><pre>
./configure --with-pdo-odbc=unixODBC,/usr/local
</pre></div></div>
        If you do not supply a location for the unixODBC libraries and
        headers to the <strong class="command">configure</strong> command, PDO_ODBC
        defaults to <var class="filename">/usr/local</var>.
       </p>
      </dd>
     
     
      <dt>generic</dt>
      <dd>
       <div class="example-contents screen"><div class="cdata"><pre>
./configure --with-pdo-odbc=generic,/usr/local,libname,ldflags,cflags
</pre></div></div>
      </dd>
     
    </dl>
   </p>
  </li>
 </ol></div>
</div>



   
   


<div class="section" id="pdo-odbc.global.constants">
 <h2 class="title">Predefined Constants</h2>
 <p class="simpara">The constants below are defined by
this driver, and will only be available when the extension has been either
compiled into PHP or dynamically loaded at runtime. In addition, these
driver-specific constants should only be used if you are using this driver.
Using driver-specific attributes with another driver may result in
unexpected behaviour. <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> may be used to
obtain the <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong> attribute to check the
driver, if your code can run against multiple drivers.</p>
 <dl>
  
   <dt id="constant.pdo-odbc-type">
    <strong><code><a href="ref.pdo-odbc.php#constant.pdo-odbc-type">PDO_ODBC_TYPE</a></code></strong>
    (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
   </dt>
   <dd>
    <p class="para">

    </p>
   </dd>
  
  
   <dt id="pdo.constants.odbc-attr-use-cursor-library">
    <strong><code><a href="ref.pdo-odbc.php#pdo.constants.odbc-attr-use-cursor-library">PDO::ODBC_ATTR_USE_CURSOR_LIBRARY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-odbc.php#pdo-odbc.constants.attr-use-cursor-library">Pdo\Odbc::ATTR_USE_CURSOR_LIBRARY</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.odbc-sql-use-if-needed">
    <strong><code><a href="ref.pdo-odbc.php#pdo.constants.odbc-sql-use-if-needed">PDO::ODBC_SQL_USE_IF_NEEDED</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-odbc.php#pdo-odbc.constants.sql-use-if-needed">Pdo\Odbc::SQL_USE_IF_NEEDED</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.odbc-sql-use-driver">
    <strong><code><a href="ref.pdo-odbc.php#pdo.constants.odbc-sql-use-driver">PDO::ODBC_SQL_USE_DRIVER</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-odbc.php#pdo-odbc.constants.sql-use-driver">Pdo\Odbc::SQL_USE_DRIVER</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.odbc-sql-use-odbc">
    <strong><code><a href="ref.pdo-odbc.php#pdo.constants.odbc-sql-use-odbc">PDO::ODBC_SQL_USE_ODBC</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-odbc.php#pdo-odbc.constants.sql-use-odbc">Pdo\Odbc::SQL_USE_ODBC</a></code></strong>.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.odbc-attr-assume-utf8">
    <strong><code><a href="ref.pdo-odbc.php#pdo.constants.odbc-attr-assume-utf8">PDO::ODBC_ATTR_ASSUME_UTF8</a></code></strong>
     (<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-odbc.php#pdo-odbc.constants.attr-assume-utf8">Pdo\Odbc::ATTR_ASSUME_UTF8</a></code></strong>.
    </span>
   </dd>
  
 </dl>
</div>



   
   

<div class="section" id="pdo-odbc.configuration">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>PDO_ODBC Configuration Options</strong></caption>
   
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
      <td><a href="ref.pdo-odbc.php#ini.pdo-odbc.connection-pooling" class="link">pdo_odbc.connection_pooling</a></td>
      <td>&quot;strict&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr>
      <td><a href="ref.pdo-odbc.php#ini.pdo-odbc.db2-instance-name" class="link">pdo_odbc.db2_instance_name</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
      <td>This deprecated feature <em>will</em>
certainly be <em>removed</em> in the future.</td>
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
   
   <dt id="ini.pdo-odbc.connection-pooling">
    <code class="parameter">pdo_odbc.connection_pooling</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     Whether to pool ODBC connections. Can be one of <code class="literal">&quot;strict&quot;</code>,
     <code class="literal">&quot;relaxed&quot;</code> or <code class="literal">&quot;off&quot;</code> (equals to
     <code class="literal">&quot;&quot;</code>). The parameter describes how strict the connection
     manager should be when matching connection parameters to existing pooled
     connections.  <strong class="userinput"><code>strict</code></strong> is the recommend default, and
     will result in the use of cached connections only when all the connection
     parameters match exactly.  <strong class="userinput"><code>relaxed</code></strong> will result in
     the use of cached connections when similar connection parameters are
     used.  This can result in increased use of the cache, at the risk of
     bleeding connection information between (for example) virtual hosts.
    </p>
    <p class="para">
     This setting can only be changed from the <var class="filename">php.ini</var>
     file, and affects the entire process; any other modules loaded into the
     process that use the same ODBC libraries will be affected too, including
     the <a href="ref.uodbc.php" class="link">Unified ODBC extension</a>.
    </p>
    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      <strong class="userinput"><code>relaxed</code></strong> matching should not be used on a shared
      server, for security reasons.
     </p>
    </div>
    <div class="tip"><strong class="tip">Tip</strong>
     <p class="para">
      Leave this setting at the default <strong class="userinput"><code>strict</code></strong> setting
      unless you have good reason to change it.
     </p>
    </div>
   </dd>
  
  
   <dt id="ini.pdo-odbc.db2-instance-name">
    <code class="parameter">pdo_odbc.db2_instance_name</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     If you compile PDO_ODBC using the <code class="literal">db2</code> flavour,
     this setting sets the value of the DB2INSTANCE environment variable on
     Linux and UNIX operating systems to the specified name of the DB2
     instance. This enables PDO_ODBC to resolve the location of the DB2
     libraries and make cataloged connections to DB2 databases.
    </p>
    <p class="para">
     This setting can only be changed from the <var class="filename">php.ini</var>
     file, and affects the entire process; any other modules loaded into the
     process that use the same ODBC libraries will be affected too, including
     the <a href="ref.uodbc.php" class="link">Unified ODBC extension</a>.
    </p>
    <p class="para">
     This setting has no effect on Windows.
    </p>
   </dd>
  
  
 </dl>
 </p>
</div>



  </div>

  

 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-odbc.connection.php">PDO_ODBC DSN</a> — Connecting to ODBC or DB2 databases</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_odbc/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-odbc%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-odbc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-odbc.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118722">  <div class="votes">
    <div id="Vu118722">
    <a href="/manual/vote-note.php?id=118722&amp;page=ref.pdo-odbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118722">
    <a href="/manual/vote-note.php?id=118722&amp;page=ref.pdo-odbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118722" title="60% like this...">
    9
    </div>
  </div>
  <a href="#118722" class="name">
  <strong class="user"><em>ChristianF</em></strong></a><a class="genanchor" href="#118722"> &para;</a><div class="date" title="2016-01-26 11:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118722">
<div class="phpcode"><code><span class="html">I just spent a couple of hours trying to track down the Exception "Could not find driver". This was despite having ODBC and PDO_ODBC installed, and all of the configuration seemed to be correct.<br /><br />Turned out the problem was that I used ODBC in upper-case in the dsn. As soon as I changed the dns to "odbc:database" it worked.<br /><br />As this code used to work a few months ago, this sudden case-sensitivity threw me for a loop. So in case you get this error, check the casing first.</span></code></div>
  </div>
 </div>
  <div class="note" id="93646">  <div class="votes">
    <div id="Vu93646">
    <a href="/manual/vote-note.php?id=93646&amp;page=ref.pdo-odbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93646">
    <a href="/manual/vote-note.php?id=93646&amp;page=ref.pdo-odbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93646" title="77% like this...">
    5
    </div>
  </div>
  <a href="#93646" class="name">
  <strong class="user"><em>tuomas</em></strong></a><a class="genanchor" href="#93646"> &para;</a><div class="date" title="2009-09-21 12:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93646">
<div class="phpcode"><code><span class="html">If you want to avoid installing DB2 Connect and/or PECL modules ibm_db2 and PDO_IBM, you can also use IBM DB2 databases trough unixODBC.<br /><br />If you have DB2 database on a i server you need to install IBM iAccess (<a href="http://www.ibm.com/systems/i/software/access/linux/index.html" rel="nofollow" target="_blank">http://www.ibm.com/systems/i/software/access/linux/index.html</a>) and unixODBC. Just install the libraries (rpm) and modify configurations in /etc/odbcinst.ini (sample configuration in /opt/ibm/iSeriesAccess/unixodbcregistration) and /etc/odbc.ini.<br /><br />To my experience this is much easier way than installing DB2 Connect.</span></code></div>
  </div>
 </div>
  <div class="note" id="81488">  <div class="votes">
    <div id="Vu81488">
    <a href="/manual/vote-note.php?id=81488&amp;page=ref.pdo-odbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81488">
    <a href="/manual/vote-note.php?id=81488&amp;page=ref.pdo-odbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81488" title="72% like this...">
    5
    </div>
  </div>
  <a href="#81488" class="name">
  <strong class="user"><em>ethan dot nelson at ltd dot org</em></strong></a><a class="genanchor" href="#81488"> &para;</a><div class="date" title="2008-02-29 02:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81488">
<div class="phpcode"><code><span class="html">Using SQL 2005, PDO_ODBC and datetime fields is a royal pain.  MSDN documentation on CAST CONVERT shows that there is supposed to be an implicit convert between character types and datetime types.  That's true... until you put it in a stored procedure and use variable declarations.<br /><br />For instance this fails:<br /><br />declare @date varchar;<br />SET @date = '20080101';<br />SELECT cast(@date AS datetime) AS poo<br /><br />While this succeeds:<br />declare @date varchar(19);<br />SET @date = '20080101';<br />SELECT cast(@date AS datetime) AS poo<br /><br />The PDO Driver appears to attempt an implicit conversion and so it fails whenever you try to insert data into datetime column types.<br /><br />So to workaround this nuance in SQL, declare a character column type with explicit width.  Then your implicit type conversion will work.</span></code></div>
  </div>
 </div>
  <div class="note" id="107128">  <div class="votes">
    <div id="Vu107128">
    <a href="/manual/vote-note.php?id=107128&amp;page=ref.pdo-odbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107128">
    <a href="/manual/vote-note.php?id=107128&amp;page=ref.pdo-odbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107128" title="51% like this...">
    1
    </div>
  </div>
  <a href="#107128" class="name">
  <strong class="user"><em>Ariz Jacinto</em></strong></a><a class="genanchor" href="#107128"> &para;</a><div class="date" title="2012-01-09 01:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107128">
<div class="phpcode"><code><span class="html">Using SQL Server Native Client 11.0 on Linux as a PDO_ODBC driver:
<br />
<br />Download the SQL Server Native Client 11.0 on Linux ODBC Driver:
<br /><a href="http://www.microsoft.com/download/en/details.aspx?id=28160" rel="nofollow" target="_blank">http://www.microsoft.com/download/en/details.aspx?id=28160</a>
<br />
<br />Configuration ODBC:
<br />
<br />/usr/local/etc/odbcsys.ini
<br />--
<br />[SQL Server Native Client 11.0]
<br />Description = Microsoft SQL Server ODBC Driver V1.0 for Linux
<br />Driver = /opt/microsoft/sqlncli/lib64/libsqlncli-11.0.so.1720.0
<br />UsageCount = 1
<br />
<br />/usr/local/etc/odbc.ini
<br />--
<br />[MSSQLServer]
<br />Driver = SQL Server Native Client 11.0
<br />Description = Sample Database
<br />Trace = Yes
<br />Server = 
<br />Port = 1433
<br />Database = 
<br />
<br />Test the connection:
<br />mssqltest.php
<br />--
<br /><span class="default">&lt;?php
<br />    putenv</span><span class="keyword">(</span><span class="string">'ODBCSYSINI=/usr/local/etc'</span><span class="keyword">);
<br />    </span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'ODBCINI=/usr/local/etc/odbc.ini'</span><span class="keyword">);
<br />    </span><span class="default">$username </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$password </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    try {
<br />      </span><span class="default">$dbh </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">"odbc:MSSQLServer"</span><span class="keyword">,
<br />                    </span><span class="string">"</span><span class="default">$username</span><span class="string">"</span><span class="keyword">,
<br />                    </span><span class="string">"</span><span class="default">$password</span><span class="string">"
<br />                   </span><span class="keyword">);
<br />    } catch (</span><span class="default">PDOException $exception</span><span class="keyword">) {
<br />      echo </span><span class="default">$exception</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();
<br />      exit;
<br />    }
<br />    echo </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$dbh</span><span class="keyword">);
<br />    unset(</span><span class="default">$dbh</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98716">  <div class="votes">
    <div id="Vu98716">
    <a href="/manual/vote-note.php?id=98716&amp;page=ref.pdo-odbc&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98716">
    <a href="/manual/vote-note.php?id=98716&amp;page=ref.pdo-odbc&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98716" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#98716" class="name">
  <strong class="user"><em>harry dot forum at p-boss dot com</em></strong></a><a class="genanchor" href="#98716"> &para;</a><div class="date" title="2010-07-02 04:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98716">
<div class="phpcode"><code><span class="html">MSSQL - PHP on Apache - Linux Redhat<br /><br />When using php 5.2.10 please beaware of this error:<br /><br /><a href="http://bugs.php.net/bug.php?id=42068" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=42068</a><br /><br />Standard odbc_connect will not work, you must use pdo_odbc<br /><br />Connecting to MSSQL using pdo odbc - walkthrough.. <br /><br />1. Download and configure FreeTDS with-unixodbc<br /><br />./configure --prefix=/opt/SYSfreetds --with-unixodbc<br /><br />make;make test; make install<br /><br />2. install php-odbc and unixODBC<br /><br />         php-odbc-5.2.10-1.x86_64.rpm<br />         unixODBC.x86_64.x86x64<br /><br />3. Setup ODBC links<br /><br />a)<br />Create a tds.driver file with the following contents<br /><br />  [FreeTDS]<br />  Description     = v0.63 with protocol v8.0<br />  Driver          = /opt/SYSfreetds/lib/libtdsodbc.so<br /><br />Register the ODBC driver - the tds.driver file<br /><br />  odbcinst -i -d -f tds.driver<br /><br />b)<br />Creating a tds.datasource file - ODBC Data Source with contents:<br /><br />  [SOURCENAME]<br />  Driver=FreeTDS<br />  Description=Test MS SQL Database with FreeTDS<br />  Trace=No<br />  Server=BobTheServer<br />  Port=1433<br />  TDS Version=8.0<br />  Database=youDBname<br /><br />Register the ODBC data source<br /><br />  odbcinst -i -s -f tds.datasource<br /><br />Beware that the odbc.ini file will be installed in the current users home directory. This may need to be used if you are using a webserver as the apache home directory could be different.<br /><br />Ensure .odbc.ini is in apaches home directory, possibly "/var/www"<br /><br />4. Test the ODBC link on the command line<br /><br />  isql -v SOURCENAME 'username' 'password'<br /><br />  +---------------------------------------+<br />  | Connected!                            |<br />  |                                       |<br />  | sql-statement                         |<br />  | help [tablename]                      |<br />  | quit                                  |<br />  |                                       |<br />  +---------------------------------------+<br /> SQL&gt;<br /><br />5. Edit /etc/php.ini<br /><br />  Make sure the following is set:<br />     mssql.secure_connection = On<br /> <br /><br />6. Restart apache gracefully<br /><br />7. PHP to run:<br /><br />  &lt;?<br />  $dbh= new PDO('odbc:SOURCENAME', 'username', 'password');<br />  $stmt = $dbh-&gt;prepare("$query");<br />  $stmt-&gt;execute();<br />  while ($row = $stmt-&gt;fetch()) {<br />      print_r($row);<br />  }<br />  unset($dbh); unset($stmt);<br />  ?&gt;<br /><br />Trouble-shooting:<br /><br />Please try strace/ truss if you encounter issues. It could be you are referencing wrong libraries somewhere.<br /><br />Ensure you have restarted apache once the odbc files are in place</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-odbc&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-odbc.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ref.pdo-cubrid.php" title="CUBRID PDO Driver">CUBRID PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-dblib.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-dblib.php" title="Pdo\Dblib">Pdo\Dblib</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-firebird.php" title="Firebird PDO Driver">Firebird PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-firebird.php" title="Pdo\Firebird">Pdo\Firebird</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-ibm.php" title="IBM PDO Driver">IBM PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-informix.php" title="Informix PDO Driver">Informix PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-mysql.php" title="MySQL PDO Driver">MySQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-mysql.php" title="Pdo\Mysql">Pdo\Mysql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlsrv.php" title="MS SQL Server PDO Driver">MS SQL Server PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-oci.php" title="Oracle PDO Driver">Oracle PDO Driver</a>
                        </li>
                                                <li class="current">
                            <a href="ref.pdo-odbc.php" title="ODBC and DB2 PDO Driver">ODBC and DB2 PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-odbc.php" title="Pdo\Odbc">Pdo\Odbc</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-pgsql.php" title="PostgreSQL PDO Driver">PostgreSQL PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-pgsql.php" title="Pdo\Pgsql">Pdo\Pgsql</a>
                        </li>
                                                <li class="">
                            <a href="ref.pdo-sqlite.php" title="SQLite PDO Driver">SQLite PDO Driver</a>
                        </li>
                                                <li class="">
                            <a href="class.pdo-sqlite.php" title="Pdo\Sqlite">Pdo\Sqlite</a>
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
