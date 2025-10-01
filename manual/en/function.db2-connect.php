<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: db2_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.db2-connect.php">
 <link rel="shorturl" href="https://www.php.net/db2-connect">
 <link rel="alternate" href="https://www.php.net/db2-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ibm-db2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.db2-conn-errormsg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.db2-cursor-type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.db2-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.db2-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.db2-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.db2-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.db2-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.db2-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.db2-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.db2-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.db2-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.db2-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.db2-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a connection to a database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: db2_connect - Manual" />
<meta name="twitter:description" content="Returns a connection to a database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: db2_connect - Manual" />
<meta itemprop="description" content="Returns a connection to a database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a connection to a database" />

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
        <a href="function.db2-cursor-type.php">
          db2_cursor_type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.db2-conn-errormsg.php">
          &laquo; db2_conn_errormsg        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibm-db2.php'>IBM DB2</a></li>      <li><a href='ref.ibm-db2.php'>IBM DB2 Functions</a></li>      </ul>
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
            <option value='en/function.db2-connect.php' selected="selected">English</option>
            <option value='de/function.db2-connect.php'>German</option>
            <option value='es/function.db2-connect.php'>Spanish</option>
            <option value='fr/function.db2-connect.php'>French</option>
            <option value='it/function.db2-connect.php'>Italian</option>
            <option value='ja/function.db2-connect.php'>Japanese</option>
            <option value='pt_BR/function.db2-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.db2-connect.php'>Russian</option>
            <option value='tr/function.db2-connect.php'>Turkish</option>
            <option value='uk/function.db2-connect.php'>Ukrainian</option>
            <option value='zh/function.db2-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.db2-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">db2_connect</h1>
  <p class="verinfo">(PECL ibm_db2 &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">db2_connect</span> &mdash; <span class="dc-title">
   Returns a connection to a database
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.db2-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>db2_connect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$database</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   Creates a new connection to an IBM DB2 Universal Database, IBM Cloudscape,
   or Apache Derby database.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.db2-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">database</code></dt>
     <dd>
      <p class="para">
       For a cataloged connection to a database, <code class="parameter">database</code>
       represents the database alias in the DB2 client catalog.
      </p>
      <p class="para">
       For an uncataloged connection to a database,
       <code class="parameter">database</code> represents a complete connection
       string in the following format:
       <pre class="literallayout">DATABASE=<code class="parameter">database</code>;HOSTNAME=<code class="parameter">hostname</code>;PORT=<code class="parameter">port</code>;PROTOCOL=TCPIP;UID=<code class="parameter">username</code>;PWD=<code class="parameter">password</code>;</pre>
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         When connecting to Db2 on IBM i, the underlying system calls
         <a href="https://www.ibm.com/docs/en/i/7.5?topic=functions-sqldriverconnect-connect-data-source" class="link external">&raquo;&nbsp;SQLDriverConnect</a>,
         which only accepts DSN, UID, and PWD for the
         <a href="https://www.ibm.com/docs/en/i/7.5?topic=functions-sqldriverconnect-connect-data-source#rzadpfndvcon__title__5" class="link external">&raquo;&nbsp;connection string</a>.
         Like so:
         <pre class="literallayout">DSN=<code class="parameter">database</code>;UID=<code class="parameter">username</code>;PWD=<code class="parameter">password</code>;</pre>
        </p>
       </p></blockquote>
       where the parameters represent the following values:
       <dl>
        
         <dt><code class="parameter">database</code></dt>
         <dd>
          <p class="para">
           The name of the database.
          </p>
         </dd>
        
        
         <dt><code class="parameter">hostname</code></dt>
         <dd>
          <p class="para">
           The hostname or IP address of the database server.
          </p>
         </dd>
        
        
         <dt><code class="parameter">port</code></dt>
         <dd>
          <p class="para">
           The TCP/IP port on which the database is listening for
           requests.
          </p>
         </dd>
        
        
         <dt><code class="parameter">username</code></dt>
         <dd>
          <p class="para">
           The username with which you are connecting to the
           database.
          </p>
         </dd>
        
        
         <dt><code class="parameter">password</code></dt>
         <dd>
          <p class="para">
           The password with which you are connecting to the database.
          </p>
         </dd>
        
       </dl>
      </p>
     </dd>
    
    
     <dt><code class="parameter">username</code></dt>
     <dd>
      <p class="para">
       The username with which you are connecting to the database.
      </p>
      <p class="para">
       For uncataloged connections, you must pass a <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value or empty
       string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password with which you are connecting to the database.
      </p>
      <p class="para">
       For uncataloged connections, you must pass a <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> value or empty
       string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An associative array of connection options that affect the behavior
       of the connection, where valid array keys include:
       <dl>
        
         <dt><code class="parameter">autocommit</code></dt>
         <dd>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-on">DB2_AUTOCOMMIT_ON</a></code></strong> value turns
           autocommit on for this connection handle.
          </p>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-autocommit-off">DB2_AUTOCOMMIT_OFF</a></code></strong> value turns
           autocommit off for this connection handle.
          </p>
         </dd>
        
        
         <dt><code class="parameter">DB2_ATTR_CASE</code></dt>
         <dd>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-case-natural">DB2_CASE_NATURAL</a></code></strong> value specifies
           that column names are returned in natural case.
          </p>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-case-lower">DB2_CASE_LOWER</a></code></strong> value specifies
           that column names are returned in lower case.
          </p>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-case-upper">DB2_CASE_UPPER</a></code></strong> value specifies
           that column names are returned in upper case.
          </p>
         </dd>
        
        
         <dt><code class="parameter">CURSOR</code></dt>
         <dd>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-forward-only">DB2_FORWARD_ONLY</a></code></strong> value specifies a
           forward-only cursor for a statement resource. This is the default
           cursor type and is supported on all database servers.
          </p>
          <p class="para">
           Passing the <strong><code><a href="ibm-db2.constants.php#constant.db2-scrollable">DB2_SCROLLABLE</a></code></strong> value specifies a
           scrollable cursor for a statement resource. This mode enables
           random access to rows in a result set, but currently is supported
           only by IBM DB2 Universal Database.
          </p>
         </dd>
        
       </dl>
      </p>
      <p class="para">
       The following new option is available in ibm_db2 version 1.7.0 and later.
       <dl>
        
         <dt><code class="parameter">trustedcontext</code></dt>
         <dd>
          <p class="para">
           Passing the DB2_TRUSTED_CONTEXT_ENABLE value turns trusted context
           on for this connection handle. This parameter cannot be set using
           <span class="function"><a href="function.db2-set-option.php" class="function">db2_set_option()</a></span>.
          </p>
          <p class="para">
           This key works only if the database is cataloged (even if the
           database is local), or if you specify the full DSN when you create
           the connection.
          </p>
          <p class="para">
           To catalog the database, use following commands:
          </p>
          <p class="para">
           <pre class="literallayout">db2 catalog tcpip node loopback remote &lt;SERVERNAME&gt; server &lt;SERVICENAME&gt;
db2 catalog database &lt;LOCALDBNAME&gt; as &lt;REMOTEDBNAME&gt; at node loopback
db2 &quot;update dbm cfg using svcename &lt;SERVICENAME&gt;&quot;
db2set DB2COMM=TCPIP</pre>
          </p>
         </dd>
        
      </dl>
      </p>
      <p class="para">
       The following new i5/OS options are available in ibm_db2 version 1.5.1
       and later.
       <dl>
        
         <dt><code class="parameter">i5_lib</code></dt>
         <dd>
          <p class="para">
           A character value that indicates the default library that will be
           used for resolving unqualified file references. This is not valid
           if the connection is using system naming mode.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_naming</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_NAMING_ON</code> value turns on DB2 UDB CLI iSeries
           system naming mode. Files are qualified using the slash (/) delimiter.
           Unqualified files are resolved using the library list for the job.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_NAMING_OFF</code> value turns off DB2 UDB CLI default
           naming mode, which is SQL naming. Files are qualified using the period (.)
           delimiter. Unqualified files are resolved using either the default library
           or the current user ID.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_commit</code></dt>
         <dd>
          <p class="para">
           The <code class="parameter">i5_commit</code> attribute should be set before the
           <span class="function"><strong>db2_connect()</strong></span>. If the value is changed after the
           connection has been established, and the connection is to a remote data
           source, the change does not take effect until the next successful
           <span class="function"><strong>db2_connect()</strong></span> for the connection handle.
           <blockquote class="note"><p><strong class="note">Note</strong>: 
            <p class="para">
             The php.ini setting <code class="parameter">ibm_db2.i5_allow_commit</code>==0
             or <code class="literal">DB2_I5_TXN_NO_COMMIT</code> is the default, but may be
             overridden with the <code class="parameter">i5_commit</code> option.
            </p>
           </p></blockquote>
          </p>
          <p class="para">
           <code class="literal">DB2_I5_TXN_NO_COMMIT</code> - Commitment control is not used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_TXN_READ_UNCOMMITTED</code> - Dirty reads, nonrepeatable
           reads, and phantoms are possible.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_TXN_READ_COMMITTED</code> - Dirty reads are not possible.
           Nonrepeatable reads, and phantoms are possible.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_TXN_REPEATABLE_READ</code> - Dirty reads and nonrepeatable
           reads are not possible. Phantoms are possible.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_TXN_SERIALIZABLE</code> - Transactions are serializable.
           Dirty reads, non-repeatable reads, and phantoms are not possible
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_query_optimize</code></dt>
         <dd>
          <p class="para">
            <code class="literal">DB2_FIRST_IO</code> All queries are optimized with the goal of
            returning the first page of output as fast as possible. This goal works well
            when the output is controlled by a user who is most likely to cancel the query
            after viewing the first page of output data. Queries coded with an
            OPTIMIZE FOR nnn ROWS clause honor the goal specified by the clause.
          </p>
          <p class="para">
           <code class="literal">DB2_ALL_IO</code> All queries are optimized with the goal of running
           the entire query to completion in the shortest amount of elapsed time. This is a
           good option when the output of a query is being written to a file or report, or
           the interface is queuing the output data. Queries coded with an OPTIMIZE FOR nnn
           ROWS clause honor the goal specified by the clause. This is the default.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_dbcs_alloc</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_DBCS_ALLOC_ON</code> value turns on DB2 6X allocation scheme
           for DBCS translation column size growth.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_DBCS_ALLOC_OFF</code> value turns off DB2 6X allocation scheme
           for DBCS translation column size growth.
          </p>
          <p class="para">
           Note: php.ini setting <code class="parameter">ibm_db2.i5_dbcs_alloc</code>==0 or
           <code class="literal">DB2_I5_DBCS_ALLOC_OFF</code> is the default, but may be overridden
           with the <code class="parameter">i5_dbcs_alloc</code> option.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_date_fmt</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_FMT_ISO</code> - The International Organization for Standardization
           (ISO) date format yyyy-mm-dd is used. This is the default.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_USA</code> - The United States date format mm/dd/yyyy is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_EUR</code> - The European date format dd.mm.yyyy is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard date format
           yyyy-mm-dd is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_MDY</code> - The date format mm/dd/yyyy is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_DMY</code> - The date format dd/mm/yyyy is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_YMD</code> - The date format yy/mm/dd is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_JUL</code> - The Julian date format yy/ddd is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_JOB</code> - The job default is used.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_date_sep</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_SEP_SLASH</code> - A slash ( / ) is used as the date separator.
           This is the default.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_DASH</code> - A dash ( - ) is used as the date separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the date
           separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the date separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_BLANK</code> - A blank is used as the date separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_JOB</code> - The job default is used
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_time_fmt</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_FMT_ISO</code> - The International Organization for
           Standardization (ISO) time format hh.mm.ss is used. This is the default.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_USA</code> - The United States time format
           hh:mmxx is used, where xx is AM or PM.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_EUR</code> - The European time format hh.mm.ss
           is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_JIS</code> - The Japanese Industrial Standard
           time format hh:mm:ss is used.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_FMT_HMS</code> - The hh:mm:ss format is used.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_time_sep</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_SEP_COLON</code> - A colon ( : ) is used as the time
           separator. This is the default.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as the time
           separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the time
           separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_BLANK</code> - A blank is used as the time separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_JOB</code> - The job default is used.
          </p>
         </dd>
        
        
         <dt><code class="parameter">i5_decimal_sep</code></dt>
         <dd>
          <p class="para">
           <code class="literal">DB2_I5_SEP_PERIOD</code> - A period ( . ) is used as
           the decimal separator. This is the default.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_COMMA</code> - A comma ( , ) is used as the
           decimal separator.
          </p>
          <p class="para">
           <code class="literal">DB2_I5_SEP_JOB</code> - The job default is used.
          </p>
         </dd>
        
       </dl>
      </p>
      <p class="para">
       The following new i5/OS option is available in ibm_db2 version 1.8.0
       and later.
       <dl>
        
         <dt><code class="parameter">i5_libl</code></dt>
         <dd>
          <p class="para">
           A character value that indicates the library list that will be used for
           resolving unqualified file references. Specify the library list
           elements separated by blanks &#039;i5_libl&#039;=&gt;&quot;MYLIB YOURLIB ANYLIB&quot;.
          </p>
          <blockquote class="note"><p><strong class="note">Note</strong>: 
           <p class="para">
            <code class="parameter">i5_libl</code> calls qsys2/qcmdexc(&#039;cmd&#039;,cmdlen), which is only
            available in i5/OS V5R4 and later.
           </p>
          </p></blockquote>
         </dd>
        
       </dl>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.db2-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a connection handle resource if the connection attempt is
   successful. If the connection attempt fails, <span class="function"><strong>db2_connect()</strong></span>
   returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.db2-connect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1348">
    <p><strong>Example #1 Creating a cataloged connection</strong></p>
    <div class="example-contents"><p>
     Cataloged connections require you to have previously cataloged the target
     database through the DB2 Command Line Processor (CLP) or DB2
     Configuration Assistant.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$database</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Connection succeeded."</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">db2_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />}<br />else {<br />    echo </span><span style="color: #DD0000">"Connection failed."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connection succeeded.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1349">
    <p><strong>Example #2 Creating an uncataloged connection</strong></p>
    <div class="example-contents"><p>
     An uncataloged connection enables you to dynamically connect to a
     database.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$conn_string </span><span style="color: #007700">= </span><span style="color: #DD0000">"DRIVER={IBM DB2 ODBC DRIVER};DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;" </span><span style="color: #007700">.<br />  </span><span style="color: #DD0000">"HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;PROTOCOL=TCPIP;UID=</span><span style="color: #0000BB">$user</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$password</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_string</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Connection succeeded."</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">db2_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />}<br />else {<br />    echo </span><span style="color: #DD0000">"Connection failed."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connection succeeded.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1350">
    <p><strong>Example #3 Creating a connection with autocommit off by default</strong></p>
    <div class="example-contents"><p>
     Passing an array of options to <span class="function"><strong>db2_connect()</strong></span> enables
     you to modify the default behavior of the connection handle.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$database </span><span style="color: #007700">= </span><span style="color: #DD0000">'SAMPLE'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'autocommit' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_AUTOCOMMIT_OFF</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$database</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$conn</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Connection succeeded.\n"</span><span style="color: #007700">;<br />    if (</span><span style="color: #0000BB">db2_autocommit</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">)) {<br />         echo </span><span style="color: #DD0000">"Autocommit is on.\n"</span><span style="color: #007700">;<br />    }<br />    else {<br />         echo </span><span style="color: #DD0000">"Autocommit is off.\n"</span><span style="color: #007700">;<br />    }<br />    </span><span style="color: #0000BB">db2_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn</span><span style="color: #007700">);<br />}<br />else {<br />    echo </span><span style="color: #DD0000">"Connection failed."</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Connection succeeded.
Autocommit is off.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1351">
    <p><strong>Example #4 i5/OS best performance</strong></p>
    <div class="example-contents"><p>
     To achieve best performance for your i5/OS ibm_db2 1.5.1 PHP application
     use the default host, userid, and password for your
     <span class="function"><strong>db2_connect()</strong></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />  $library </span><span style="color: #007700">= </span><span style="color: #DD0000">"ADC"</span><span style="color: #007700">;<br />  </span><span style="color: #0000BB">$i5 </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, array(</span><span style="color: #DD0000">"i5_lib"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"qsys2"</span><span style="color: #007700">));<br />  </span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$i5</span><span style="color: #007700">,<br />       </span><span style="color: #DD0000">"select * from systables where table_schema = '</span><span style="color: #0000BB">$library</span><span style="color: #DD0000">'"</span><span style="color: #007700">);<br />  while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_fetch_both</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)) {<br />     echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'TABLE_NAME'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;/br&gt;"</span><span style="color: #007700">;<br />  }<br />  </span><span style="color: #0000BB">db2_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$i5</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">ANIMALS
NAMES
PICTURES</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1352">
    <p><strong>Example #5 Using trusted context</strong></p>
    <div class="example-contents"><p>
     The following example shows how to enable trusted context, switch
     users, and get the current user ID.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$database </span><span style="color: #007700">= </span><span style="color: #DD0000">"SAMPLE"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$hostname </span><span style="color: #007700">= </span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$port </span><span style="color: #007700">= </span><span style="color: #0000BB">50000</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$authID </span><span style="color: #007700">= </span><span style="color: #DD0000">"db2inst1"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$auth_pass </span><span style="color: #007700">= </span><span style="color: #DD0000">"ibmdb2"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$tc_user </span><span style="color: #007700">= </span><span style="color: #DD0000">"tcuser"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$tc_pass </span><span style="color: #007700">= </span><span style="color: #DD0000">"tcpassword"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$dsn </span><span style="color: #007700">= </span><span style="color: #DD0000">"DATABASE=</span><span style="color: #0000BB">$database</span><span style="color: #DD0000">;HOSTNAME=</span><span style="color: #0000BB">$hostname</span><span style="color: #DD0000">;PORT=</span><span style="color: #0000BB">$port</span><span style="color: #DD0000">;<br />  PROTOCOL=TCPIP;UID=</span><span style="color: #0000BB">$authID</span><span style="color: #DD0000">;PWD=</span><span style="color: #0000BB">$auth_pass</span><span style="color: #DD0000">;"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array (</span><span style="color: #DD0000">"trustedcontext" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">DB2_TRUSTED_CONTEXT_ENABLE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$tc_conn </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br />if(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Explicit trusted connection succeeded.\n"</span><span style="color: #007700">;<br /><br />    if(</span><span style="color: #0000BB">db2_get_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"trustedcontext"</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$userBefore </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_get_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"trusted_user"</span><span style="color: #007700">);<br /><br />        </span><span style="color: #FF8000">//Do some work as user 1.<br /><br />        //Switching to trusted user.<br />        </span><span style="color: #0000BB">$parameters </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"trusted_user" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$tc_user</span><span style="color: #007700">,<br />          </span><span style="color: #DD0000">"trusted_password" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$tcuser_pass</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_set_option </span><span style="color: #007700">(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">, </span><span style="color: #0000BB">$parameters</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />        </span><span style="color: #0000BB">$userAfter </span><span style="color: #007700">= </span><span style="color: #0000BB">db2_get_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"trusted_user"</span><span style="color: #007700">);<br />        </span><span style="color: #FF8000">//Do more work as trusted user.<br /><br />        </span><span style="color: #007700">if(</span><span style="color: #0000BB">$userBefore </span><span style="color: #007700">!= </span><span style="color: #0000BB">$userAfter</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">"User has been switched." </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        }<br />    }<br /><br />    </span><span style="color: #0000BB">db2_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$tc_conn</span><span style="color: #007700">);<br />}<br />else {<br />    echo </span><span style="color: #DD0000">"Explicit trusted connection failed.\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Explicit trusted connection succeeded.
User has been switched.</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.db2-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.db2-close.php" class="function" rel="rdfs-seeAlso">db2_close()</a> - Closes a database connection</span></li>
    <li><span class="function"><a href="function.db2-pconnect.php" class="function" rel="rdfs-seeAlso">db2_pconnect()</a> - Returns a persistent connection to a database</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ibm_db2/functions/db2-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.db2-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.db2-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118073">  <div class="votes">
    <div id="Vu118073">
    <a href="/manual/vote-note.php?id=118073&amp;page=function.db2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118073">
    <a href="/manual/vote-note.php?id=118073&amp;page=function.db2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118073" title="62% like this...">
    2
    </div>
  </div>
  <a href="#118073" class="name">
  <strong class="user"><em>d dot lanza38 at gmail dot com</em></strong></a><a class="genanchor" href="#118073"> &para;</a><div class="date" title="2015-09-29 01:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118073">
<div class="phpcode"><code><span class="html">As of 09/29/2015 when using the ibm_db2 driver and specifying an invalid library list with the 'i5_libl' option, the connection will be successfully created but with a default library list.  What happens is the connection is made and THEN the library list is attempted to be changed.  The connection will be a success but the library list change will fail without "db2_conn_error()" or "db2_conn_errormsg()" reporting anything and a default library list will be used.  However, "db2_stmt_error()" and "db2_stmt_errormsg()" will register with a value.  Also if error reporting is enable, the warning will be output to the screen.  This is not a bug, rather intended behavior according to Zend (I opened a ticked) and depending on which library list is used/swapped could lead to major problems (development VS production).  I stumbled upon this behavior when an anomaly (which I still can't explain) was imploding my library list with the character 'Z'.  I realized I was in my development environment but accessing production data as a result.  Going forward I will make sure to add this additional check for good measure.<br /><br />See below to recreate behavior:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">"display_errors"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$systemName </span><span class="keyword">= </span><span class="string">'systemName'</span><span class="keyword">;<br /></span><span class="default">$userID </span><span class="keyword">= </span><span class="string">'userName'</span><span class="keyword">;<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;<br /><br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'i5_libl'</span><span class="keyword">] = </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'Z'</span><span class="keyword">, array(<br />        </span><span class="string">'INVALID'</span><span class="keyword">,        <br />    </span><span class="string">'LIB'</span><span class="keyword">,       <br />    </span><span class="string">'LIST'</span><span class="keyword">,   <br />    </span><span class="string">'IMPLODED'</span><span class="keyword">,  <br />    </span><span class="string">'WITH'</span><span class="keyword">,   <br />    </span><span class="string">'THE'</span><span class="keyword">,      <br />    </span><span class="string">'LETTER'</span><span class="keyword">,       <br />    </span><span class="string">'Z'<br />    </span><span class="keyword">));<br /><br /></span><span class="default">$options</span><span class="keyword">[</span><span class="string">'i5_naming'</span><span class="keyword">] = </span><span class="default">DB2_I5_NAMING_ON</span><span class="keyword">;<br /><br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">db2_connect</span><span class="keyword">(</span><span class="default">$systemName</span><span class="keyword">, </span><span class="default">$userID</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="comment">//This line causes "ini_set("display_errors", 1)" to dislay this warning on the screen:<br />//Warning: db2_connect(): Statement Execute Failed in /PATH/TO/FILE/test.php on line 58<br /><br /></span><span class="keyword">if (</span><span class="default">db2_stmt_error</span><span class="keyword">()) { </span><span class="comment">//Evaluates to true<br />    </span><span class="keyword">echo </span><span class="string">"error ID: " </span><span class="keyword">. (</span><span class="default">db2_stmt_error</span><span class="keyword">()); </span><span class="comment">//Displays error code: 38501<br />    </span><span class="keyword">echo </span><span class="string">"&lt;br&gt;error message: " </span><span class="keyword">. (</span><span class="default">db2_stmt_errormsg</span><span class="keyword">()); </span><span class="comment">//Displays: Trigger program or external routine detected an error. SQLCODE=-443<br /></span><span class="keyword">}<br /><br />echo </span><span class="string">"&lt;br /&gt;|"</span><span class="keyword">.</span><span class="default">db2_conn_error</span><span class="keyword">().</span><span class="string">" ||| "</span><span class="keyword">.</span><span class="default">db2_conn_errormsg</span><span class="keyword">().</span><span class="string">"|&lt;br /&gt;"</span><span class="keyword">; </span><span class="comment">//Only "| ||| |" is displayed<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">); </span><span class="comment">//A resource ID is displayed<br /></span><span class="keyword">echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br /><br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">){<br />    echo </span><span class="string">"Boolean true&lt;br /&gt;"</span><span class="keyword">;<br />    </span><span class="comment">//never executes, but not expected since either false or a resource ID should be returned.<br />    //Plus it is clear $conn contains a resource ID from above.<br /></span><span class="keyword">}<br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">){<br />    echo </span><span class="string">"Non-Boolean true 2&lt;br /&gt;"</span><span class="keyword">; <br />    </span><span class="comment">//This always executes regardless of an accurate library list or not<br />    //I suppose "if($conn)" would evaluate to non-boolean true so this makes sense.<br /></span><span class="keyword">}<br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">== </span><span class="string">"true"</span><span class="keyword">){<br />    echo </span><span class="string">"String true"</span><span class="keyword">;<br />    </span><span class="comment">//Never executes, but not expected.<br /></span><span class="keyword">}<br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">){<br />    echo </span><span class="string">"Boolean false&lt;br /&gt;"</span><span class="keyword">;<br />    </span><span class="comment">//never executes because the connection itself was a success.<br />    //If invalid credentials were provided this executes.<br /></span><span class="keyword">}<br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">== </span><span class="default">false</span><span class="keyword">){<br />    echo </span><span class="string">"Non-Boolean false 2&lt;br /&gt;"</span><span class="keyword">;<br />    </span><span class="comment">//never executes because the connection itself was a success.<br />    //Added this here because I was unsure if a boolean false would be returned or not.<br />    //If invalid credentials were provided this executes as well.<br /></span><span class="keyword">}<br />if(isset(</span><span class="default">$conn</span><span class="keyword">) &amp;&amp; </span><span class="default">$conn </span><span class="keyword">== </span><span class="string">"false"</span><span class="keyword">){<br />    echo </span><span class="string">"String false"</span><span class="keyword">;<br />    </span><span class="comment">//never executes because the connection itself was a success.<br />    //Added this here because I was unsure if a String "false" would be returned<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.db2-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-connect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ibm-db2.php">IBM DB2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.db2-autocommit.php" title="db2_&#8203;autocommit">db2_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-bind-param.php" title="db2_&#8203;bind_&#8203;param">db2_&#8203;bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-client-info.php" title="db2_&#8203;client_&#8203;info">db2_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-close.php" title="db2_&#8203;close">db2_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-column-privileges.php" title="db2_&#8203;column_&#8203;privileges">db2_&#8203;column_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-columns.php" title="db2_&#8203;columns">db2_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-commit.php" title="db2_&#8203;commit">db2_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-error.php" title="db2_&#8203;conn_&#8203;error">db2_&#8203;conn_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-errormsg.php" title="db2_&#8203;conn_&#8203;errormsg">db2_&#8203;conn_&#8203;errormsg</a>
                        </li>
                                                <li class="current">
                            <a href="function.db2-connect.php" title="db2_&#8203;connect">db2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-cursor-type.php" title="db2_&#8203;cursor_&#8203;type">db2_&#8203;cursor_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-escape-string.php" title="db2_&#8203;escape_&#8203;string">db2_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-exec.php" title="db2_&#8203;exec">db2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-execute.php" title="db2_&#8203;execute">db2_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-array.php" title="db2_&#8203;fetch_&#8203;array">db2_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-assoc.php" title="db2_&#8203;fetch_&#8203;assoc">db2_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-both.php" title="db2_&#8203;fetch_&#8203;both">db2_&#8203;fetch_&#8203;both</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-object.php" title="db2_&#8203;fetch_&#8203;object">db2_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-row.php" title="db2_&#8203;fetch_&#8203;row">db2_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-display-size.php" title="db2_&#8203;field_&#8203;display_&#8203;size">db2_&#8203;field_&#8203;display_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-name.php" title="db2_&#8203;field_&#8203;name">db2_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-num.php" title="db2_&#8203;field_&#8203;num">db2_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-precision.php" title="db2_&#8203;field_&#8203;precision">db2_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-scale.php" title="db2_&#8203;field_&#8203;scale">db2_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-type.php" title="db2_&#8203;field_&#8203;type">db2_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-width.php" title="db2_&#8203;field_&#8203;width">db2_&#8203;field_&#8203;width</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-foreign-keys.php" title="db2_&#8203;foreign_&#8203;keys">db2_&#8203;foreign_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-result.php" title="db2_&#8203;free_&#8203;result">db2_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-stmt.php" title="db2_&#8203;free_&#8203;stmt">db2_&#8203;free_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-get-option.php" title="db2_&#8203;get_&#8203;option">db2_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-last-insert-id.php" title="db2_&#8203;last_&#8203;insert_&#8203;id">db2_&#8203;last_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-lob-read.php" title="db2_&#8203;lob_&#8203;read">db2_&#8203;lob_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-next-result.php" title="db2_&#8203;next_&#8203;result">db2_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-fields.php" title="db2_&#8203;num_&#8203;fields">db2_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-rows.php" title="db2_&#8203;num_&#8203;rows">db2_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pclose.php" title="db2_&#8203;pclose">db2_&#8203;pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pconnect.php" title="db2_&#8203;pconnect">db2_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-prepare.php" title="db2_&#8203;prepare">db2_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-primary-keys.php" title="db2_&#8203;primary_&#8203;keys">db2_&#8203;primary_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedure-columns.php" title="db2_&#8203;procedure_&#8203;columns">db2_&#8203;procedure_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedures.php" title="db2_&#8203;procedures">db2_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-result.php" title="db2_&#8203;result">db2_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-rollback.php" title="db2_&#8203;rollback">db2_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-server-info.php" title="db2_&#8203;server_&#8203;info">db2_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-set-option.php" title="db2_&#8203;set_&#8203;option">db2_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-special-columns.php" title="db2_&#8203;special_&#8203;columns">db2_&#8203;special_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-statistics.php" title="db2_&#8203;statistics">db2_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-error.php" title="db2_&#8203;stmt_&#8203;error">db2_&#8203;stmt_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-errormsg.php" title="db2_&#8203;stmt_&#8203;errormsg">db2_&#8203;stmt_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-table-privileges.php" title="db2_&#8203;table_&#8203;privileges">db2_&#8203;table_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-tables.php" title="db2_&#8203;tables">db2_&#8203;tables</a>
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
