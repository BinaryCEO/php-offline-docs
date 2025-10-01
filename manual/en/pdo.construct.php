<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.connect.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.errorcode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a PDO instance representing a connection to a database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO::__construct - Manual" />
<meta name="twitter:description" content="Creates a PDO instance representing a connection to a database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO::__construct - Manual" />
<meta itemprop="description" content="Creates a PDO instance representing a connection to a database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a PDO instance representing a connection to a database" />

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
        <a href="pdo.errorcode.php">
          PDO::errorCode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.connect.php">
          &laquo; PDO::connect        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='class.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/pdo.construct.php' selected="selected">English</option>
            <option value='de/pdo.construct.php'>German</option>
            <option value='es/pdo.construct.php'>Spanish</option>
            <option value='fr/pdo.construct.php'>French</option>
            <option value='it/pdo.construct.php'>Italian</option>
            <option value='ja/pdo.construct.php'>Japanese</option>
            <option value='pt_BR/pdo.construct.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.construct.php'>Russian</option>
            <option value='tr/pdo.construct.php'>Turkish</option>
            <option value='uk/pdo.construct.php'>Ukrainian</option>
            <option value='zh/pdo.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDO::__construct</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDO::__construct</span> &mdash; <span class="dc-title">
   Creates a PDO instance representing a connection to a database
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdo.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDO::__construct</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dsn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$username</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="attribute"><a href="class.sensitiveparameter.php">#[\SensitiveParameter]</a> </span><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$password</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>)</div>

  <p class="para rdfs-comment">
   Creates a PDO instance to represent a connection to the requested
   database. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-pdo.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">dsn</code></dt>
     <dd>
      <p class="para">
       The Data Source Name, or DSN, contains the information required to
       connect to the database.
      </p>
      <p class="para">
       In general, a DSN consists of the PDO driver name, followed by a colon,
       followed by the PDO driver-specific connection syntax. Further
       information is available from the <a href="pdo.drivers.php" class="link">PDO
       driver-specific documentation</a>.
      </p>
      <p class="para">
       The <code class="parameter">dsn</code> parameter supports three
       different methods of specifying the arguments required to create
       a database connection:
      </p>
      <p class="para">
       <dl>
        <dt>Driver invocation</dt>
         <dd>
          <p class="para">
           <code class="parameter">dsn</code> contains the full DSN.
          </p>
         </dd>
        
        <dt>URI invocation</dt>
         <dd>
          <p class="para">
           <code class="parameter">dsn</code> consists of <strong class="userinput"><code>uri:</code></strong>
           followed by a URI that defines the location of a file containing
           the DSN string. The URI can specify a local file or a remote URL.
          </p>
          <p class="para"><strong class="userinput"><code>uri:file:///path/to/dsnfile</code></strong></p>
         </dd>
        
        <dt>Aliasing</dt>
         <dd>
          <p class="para">
           <code class="parameter">dsn</code> consists of a name 
           <code class="parameter">name</code> that maps to 
           <code class="code">pdo.dsn.<code class="parameter">name</code></code> in <var class="filename">php.ini</var>
           defining the DSN string.
          </p>
          <blockquote class="note"><p><strong class="note">Note</strong>: 
           <p class="para">
            The alias must be defined in <var class="filename">php.ini</var>, and not <var class="filename">.htaccess</var> or <var class="filename">httpd.conf</var>
           </p>
          </p></blockquote>
         </dd>
        
       </dl>
      </p>
     </dd>
    
    
     <dt><code class="parameter">username</code></dt>
     <dd>
      <p class="para">
       The user name for the DSN string. This parameter is optional for
       some PDO drivers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">password</code></dt>
     <dd>
      <p class="para">
       The password for the DSN string. This parameter is optional for
       some PDO drivers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       A key=&gt;value array of driver-specific connection options.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdo.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   A <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> is thrown if the attempt
   to connect to the requested database fails,
   regardless of which <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong> is currently set.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-pdo.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1131"><p><strong>Example #1 Create a PDO instance via driver invocation</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dsn </span><span style="color: #007700">= </span><span style="color: #DD0000">'mysql:dbname=testdb;host=127.0.0.1'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">'dbuser'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">'dbpass'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$dbh </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-1132"><p><strong>Example #2 Create a PDO instance via URI invocation</strong></p>
    <div class="example-contents"><p>
     The following example assumes that the file
     <var class="filename">/usr/local/dbconnect</var> exists with file permissions
     that enable PHP to read the file. The file contains the PDO DSN to
     connect to a DB2 database through the PDO_ODBC driver:
    </p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">odbc:DSN=SAMPLE;UID=john;PWD=mypass</pre>
</div>
    </div>
    <div class="example-contents"><p>
     The PHP script can then create a database connection by simply
     passing the <code class="literal">uri:</code> parameter and pointing to
     the file URI:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dsn </span><span style="color: #007700">= </span><span style="color: #DD0000">'uri:file:///usr/local/dbconnect'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$dbh </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-1133"><p><strong>Example #3 Create a PDO instance using an alias</strong></p>
    <div class="example-contents"><p>
     The following example assumes that <var class="filename">php.ini</var> contains the following
     entry to enable a connection to a MySQL database using only the
     alias <code class="literal">mydb</code>:
    </p></div>
    <div class="example-contents"><div class="inicode"><pre class="inicode">[PDO]
pdo.dsn.mydb=&quot;mysql:dbname=testdb;host=localhost&quot;</pre>
</div></div>

    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$dsn </span><span style="color: #007700">= </span><span style="color: #DD0000">'mydb'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$password </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$dbh </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$dsn</span><span style="color: #007700">, </span><span style="color: #0000BB">$user</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113498">  <div class="votes">
    <div id="Vu113498">
    <a href="/manual/vote-note.php?id=113498&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113498">
    <a href="/manual/vote-note.php?id=113498&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113498" title="62% like this...">
    123
    </div>
  </div>
  <a href="#113498" class="name">
  <strong class="user"><em>Kiipa at live dot com</em></strong></a><a class="genanchor" href="#113498"> &para;</a><div class="date" title="2013-10-19 06:46"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113498">
<div class="phpcode"><code><span class="html">To get UTF-8 charset you can specify that in the DSN.<br /><br />$link = new PDO("mysql:host=localhost;dbname=DB;charset=UTF8");</span></code></div>
  </div>
 </div>
  <div class="note" id="87231">  <div class="votes">
    <div id="Vu87231">
    <a href="/manual/vote-note.php?id=87231&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87231">
    <a href="/manual/vote-note.php?id=87231&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87231" title="59% like this...">
    41
    </div>
  </div>
  <a href="#87231" class="name">
  <strong class="user"><em>subme at interia dot pl</em></strong></a><a class="genanchor" href="#87231"> &para;</a><div class="date" title="2008-11-25 02:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87231">
<div class="phpcode"><code><span class="html">To specify a database connection port use the following DSN string<br /><br /><span class="default">&lt;?php<br />$dsn </span><span class="keyword">= </span><span class="string">'mysql:dbname=testdb;host=127.0.0.1;port=3333'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99923">  <div class="votes">
    <div id="Vu99923">
    <a href="/manual/vote-note.php?id=99923&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99923">
    <a href="/manual/vote-note.php?id=99923&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99923" title="57% like this...">
    28
    </div>
  </div>
  <a href="#99923" class="name">
  <strong class="user"><em>piotrekkr at o2 dot pl</em></strong></a><a class="genanchor" href="#99923"> &para;</a><div class="date" title="2010-09-15 12:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99923">
<div class="phpcode"><code><span class="html">To connect throught unix socket you need to use <br /><span class="default">&lt;?php<br />$dsn </span><span class="keyword">= </span><span class="string">'mysql:dbname=testdb;unix_socket=/path/to/socket'</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />You musn't specify host when using socket.</span></code></div>
  </div>
 </div>
  <div class="note" id="125292">  <div class="votes">
    <div id="Vu125292">
    <a href="/manual/vote-note.php?id=125292&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125292">
    <a href="/manual/vote-note.php?id=125292&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125292" title="61% like this...">
    7
    </div>
  </div>
  <a href="#125292" class="name">
  <strong class="user"><em>Aymeric S</em></strong></a><a class="genanchor" href="#125292"> &para;</a><div class="date" title="2020-08-20 01:34"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125292">
<div class="phpcode"><code><span class="html">When trying to connect to a local database, it seems "uri:file:///" is no longer needed. Just write the PDO pilot name followed by the absolute path of the file.<br />Example : sqlite:C:\VirtualHosts\phpliteadmin\dbs\surveillance_logeas.s3DB</span></code></div>
  </div>
 </div>
  <div class="note" id="118288">  <div class="votes">
    <div id="Vu118288">
    <a href="/manual/vote-note.php?id=118288&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118288">
    <a href="/manual/vote-note.php?id=118288&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118288" title="57% like this...">
    20
    </div>
  </div>
  <a href="#118288" class="name">
  <strong class="user"><em>daviddlavier at gmail dot com</em></strong></a><a class="genanchor" href="#118288"> &para;</a><div class="date" title="2015-11-09 12:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118288">
<div class="phpcode"><code><span class="html">I'd like to point out that in PHP 7.0 in the dsn parameter you can't use 'host=localhost' to solve this you can use 'host=127.0.0.1' instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="128169">  <div class="votes">
    <div id="Vu128169">
    <a href="/manual/vote-note.php?id=128169&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128169">
    <a href="/manual/vote-note.php?id=128169&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128169" title="60% like this...">
    5
    </div>
  </div>
  <a href="#128169" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#128169"> &para;</a><div class="date" title="2023-01-30 10:27"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128169">
<div class="phpcode"><code><span class="html">A generic pattern to connect to a mariadb or mysql database using a settings file<br /><br /><span class="default">&lt;?php<br />$_SETTINGS </span><span class="keyword">= </span><span class="default">parse_ini_file</span><span class="keyword">(</span><span class="string">'./settings.ini'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">\PDO</span><span class="keyword">(<br />  </span><span class="string">"mysql:hostname=</span><span class="keyword">{</span><span class="default">$_SETTINGS</span><span class="keyword">[</span><span class="string">'db'</span><span class="keyword">][</span><span class="string">'host'</span><span class="keyword">]}</span><span class="string">;dbname=</span><span class="keyword">{</span><span class="default">$_SETTINGS</span><span class="keyword">[</span><span class="string">'db'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]}</span><span class="string">"</span><span class="keyword">,<br />  </span><span class="default">$_SETTINGS</span><span class="keyword">[</span><span class="string">'db'</span><span class="keyword">][</span><span class="string">'user'</span><span class="keyword">],<br />  </span><span class="default">$_SETTINGS</span><span class="keyword">[</span><span class="string">'db'</span><span class="keyword">][</span><span class="string">'pass'</span><span class="keyword">],<br />  [<br />    </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">ATTR_DEFAULT_FETCH_MODE </span><span class="keyword">=&gt; </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">,<br />    </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">MYSQL_ATTR_INIT_COMMAND </span><span class="keyword">=&gt; </span><span class="string">"SET NAMES 'utf8mb4'"<br />  </span><span class="keyword">]<br />);<br /></span><span class="default">?&gt;<br /></span>You might not need the options depicted here but I find them convenient. <br /><br />Works with a settings.ini file containing for instance:<br />[db]<br />host = "localhost"<br />name = "dbname"<br />user = "dbuser"<br />pass = "dbpassword"</span></code></div>
  </div>
 </div>
  <div class="note" id="124951">  <div class="votes">
    <div id="Vu124951">
    <a href="/manual/vote-note.php?id=124951&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124951">
    <a href="/manual/vote-note.php?id=124951&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124951" title="56% like this...">
    11
    </div>
  </div>
  <a href="#124951" class="name">
  <strong class="user"><em>Francesco Montanari</em></strong></a><a class="genanchor" href="#124951"> &para;</a><div class="date" title="2020-04-27 08:16"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124951">
<div class="phpcode"><code><span class="html">Most of the information in the comment here is outdated or wrong.<br /><br />You do can use host=localhost to connect via socket, which is faster than TCP, so setting 127.0.0.1 is a performance loss.<br /><br />To use proper utf you should use utf8mb4, for example:<br /><br />$db = new PDO('mysql:host=' . DATABASE_HOST . ';dbname='. DATABASE_NAME .';charset=utf8mb4', DATABASE_USER, DATABASE_PASSWORD);</span></code></div>
  </div>
 </div>
  <div class="note" id="96325">  <div class="votes">
    <div id="Vu96325">
    <a href="/manual/vote-note.php?id=96325&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96325">
    <a href="/manual/vote-note.php?id=96325&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96325" title="52% like this...">
    13
    </div>
  </div>
  <a href="#96325" class="name">
  <strong class="user"><em>Victor T.</em></strong></a><a class="genanchor" href="#96325"> &para;</a><div class="date" title="2010-02-20 09:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96325">
<div class="phpcode"><code><span class="html">If you use the UTF-8 encoding, you have to use the fourth parameter :
<br />
<br /><span class="default">&lt;?php
<br />$db </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'mysql:host=myhost;dbname=mydb'</span><span class="keyword">, </span><span class="string">'login'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">, array(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">MYSQL_ATTR_INIT_COMMAND </span><span class="keyword">=&gt; </span><span class="string">'SET NAMES \'UTF8\''</span><span class="keyword">));
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128014">  <div class="votes">
    <div id="Vu128014">
    <a href="/manual/vote-note.php?id=128014&amp;page=pdo.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128014">
    <a href="/manual/vote-note.php?id=128014&amp;page=pdo.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128014" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#128014" class="name">
  <strong class="user"><em>Michal Stefanak</em></strong></a><a class="genanchor" href="#128014"> &para;</a><div class="date" title="2022-12-13 12:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128014">
<div class="phpcode"><code><span class="html">If you override PDO with own class and you want to implement alias from php.ini, you have to get it with `get_cfg_var` instead of `ini_get`.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">PDO </span><span class="keyword">extends </span><span class="default">\PDO<br /></span><span class="keyword">{<br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">string $dsn</span><span class="keyword">, ?</span><span class="default">string $username </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, ?</span><span class="default">string $password </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, ?array </span><span class="default">$options </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="comment">//alias<br />        </span><span class="keyword">if (!</span><span class="default">str_contains</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="string">':'</span><span class="keyword">)) {<br />            </span><span class="default">$dsn </span><span class="keyword">= </span><span class="default">get_cfg_var</span><span class="keyword">(</span><span class="string">'pdo.dsn.' </span><span class="keyword">. </span><span class="default">$dsn</span><span class="keyword">);<br />            if (!</span><span class="default">$dsn</span><span class="keyword">) {<br />                throw new </span><span class="default">PDOException</span><span class="keyword">(</span><span class="string">'Argument #1 ($dsn) must be a valid data source name'</span><span class="keyword">);<br />            }<br />        }<br /><br />        </span><span class="comment">// your additional logic<br /><br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pdo.begintransaction.php" title="beginTransaction">beginTransaction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connect.php" title="connect">connect</a>
                        </li>
                                                <li class="current">
                            <a href="pdo.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="pdo.errorcode.php" title="errorCode">errorCode</a>
                        </li>
                                                <li class="">
                            <a href="pdo.errorinfo.php" title="errorInfo">errorInfo</a>
                        </li>
                                                <li class="">
                            <a href="pdo.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="pdo.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdo.getavailabledrivers.php" title="getAvailableDrivers">getAvailableDrivers</a>
                        </li>
                                                <li class="">
                            <a href="pdo.intransaction.php" title="inTransaction">inTransaction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.lastinsertid.php" title="lastInsertId">lastInsertId</a>
                        </li>
                                                <li class="">
                            <a href="pdo.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="pdo.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="pdo.quote.php" title="quote">quote</a>
                        </li>
                                                <li class="">
                            <a href="pdo.rollback.php" title="rollBack">rollBack</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setattribute.php" title="setAttribute">setAttribute</a>
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
