<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: CUBRID PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-cubrid.php">
 <link rel="shorturl" href="https://www.php.net/pdo-cubrid">
 <link rel="alternate" href="https://www.php.net/pdo-cubrid" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-cubrid.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-cubrid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-cubrid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-cubrid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-cubrid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-cubrid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-cubrid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-cubrid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-cubrid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-cubrid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-cubrid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-cubrid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="CUBRID PDO Driver (PDO_CUBRID)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: CUBRID PDO Driver - Manual" />
<meta name="twitter:description" content="CUBRID PDO Driver (PDO_CUBRID)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: CUBRID PDO Driver - Manual" />
<meta itemprop="description" content="CUBRID PDO Driver (PDO_CUBRID)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="CUBRID PDO Driver (PDO_CUBRID)" />

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
        <a href="ref.pdo-cubrid.connection.php">
          PDO_CUBRID DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.drivers.php">
          &laquo; PDO Drivers        </a>
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
            <option value='en/ref.pdo-cubrid.php' selected="selected">English</option>
            <option value='de/ref.pdo-cubrid.php'>German</option>
            <option value='es/ref.pdo-cubrid.php'>Spanish</option>
            <option value='fr/ref.pdo-cubrid.php'>French</option>
            <option value='it/ref.pdo-cubrid.php'>Italian</option>
            <option value='ja/ref.pdo-cubrid.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-cubrid.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-cubrid.php'>Russian</option>
            <option value='tr/ref.pdo-cubrid.php'>Turkish</option>
            <option value='uk/ref.pdo-cubrid.php'>Ukrainian</option>
            <option value='zh/ref.pdo-cubrid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-cubrid" class="reference">
 <h1 class="title">CUBRID PDO Driver (PDO_CUBRID)</h1>
 
 <div class="partintro">

  <div class="section" id="pdo-cubrid.intro"><h2 class="title">Introduction</h2>
   <p class="para">
    PDO_CUBRID is a driver that implements the
    <a href="intro.pdo.php" class="link">PHP Data Objects (PDO) interface</a>
    to enable access from PHP to CUBRID databases.
   </p>
   <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">
    Current version of PDO_CUBRID doesn&#039;t support persistent connection now.
   </p></p></blockquote>
  </div>

  
  

<div class="section" id="ref.pdo-cubrid.installation">
 <h2 class="title">Installation</h2>
 <p class="para">
  To build the PDO_CUBRID extension, the CUBRID DBMS must be installed on the
  same system as PHP.

  PDO_CUBRID is a <a href="https://pecl.php.net/" class="link external">&raquo;&nbsp;PECL</a> extension, so follow the instructions in
  <a href="install.pecl.php" class="xref">Installation of PECL extensions</a>
  to install the PDO_CUBRID extension.
  Issue the <strong class="command">configure</strong> command to point to the location of the
  CUBRID base dir as follows:
  <div class="example-contents screen">
<div class="cdata"><pre>
   $ ./configure --with-pdo-cubrid=/path/to/CUBRID[,shared]
</pre></div>
  </div>
  The <strong class="command">configure</strong> command defaults to the value of the
  <var class="envar">CUBRID</var>
  environment variable.
 </p>
 <p class="para">
  A <abbr title="Dynamic Link Library">DLL</abbr> for this
<abbr title="PHP Extension and Application Repository">PECL</abbr> extension is currently unavailable. See also the
<a href="install.windows.building.php" class="link">building on Windows</a>
section. Detailed information about installation on Linux and
  Windows manually, please read build-guide.html in PECL package CUBRID for
  reference.
 </p>
</div>




  <div class="section" id="ref.pdo-cubrid.features">
   <h2 class="title">PDO_CUBRID Features</h2>

   <div class="section">
    <h2 class="title">Scrollable cursors</h2>
    <p class="simpara">
     PDO_CUBRID supports scrollable cursors. The default cursor type is
     forward only, and you can use parameter driver_options in
     <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare()</a></span> to change cursor type.
    </p>
   </div>

   <div class="section">
    <h2 class="title">Timeout</h2>
    <p class="simpara">
     PDO_CUBRID supports sql statement execution timeout setting;
     You can use <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span> to set timeout value.
    </p>
   </div>

   <div class="section">
    <h2 class="title">Autocommit_mode and Transaction</h2>

    <p class="simpara">
     PDO_CUBRID supports both autocommit_mode and transaction, and
     autocommit_mode is enabled by default. You can use
     <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span> to change its state.
    </p>

    <p class="simpara">
     If you use <span class="methodname"><a href="pdo.begintransaction.php" class="methodname">PDO::beginTransaction()</a></span> to begin a
     transaction, it will disable autocommit_mode automatically and
     restore it after <span class="methodname"><a href="pdo.commit.php" class="methodname">PDO::commit()</a></span> or
     <span class="methodname"><a href="pdo.rollback.php" class="methodname">PDO::rollBack()</a></span>.
    </p>

    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      Prior do disabling autocommit_mode
      any pending work is automatically committed.
     </span>
    </p></blockquote>
   </div>

   <div class="section">
    <h2 class="title">Multiple SQL Statements</h2>

    <p class="simpara">
     PDO_CUBRID supports Multiple SQL statements.
     Multiple SQL statements are separated by semicolons (<code class="literal">;</code>).
    </p>
   </div>

   <div class="section">
    <h2 class="title">Schema Information</h2>

    <p class="simpara">
     PDO_CUBRID implements <span class="methodname"><a href="pdo.cubrid-schema.php" class="methodname">PDO::cubrid_schema()</a></span>
     to get schema information.
    </p>
   </div>

   <div class="section">
    <h2 class="title">LOBs</h2>

    <p class="simpara">
     PDO_CUBRID supports BLOB/CLOB data type. The LOB in PDO is
     represented as a stream, so you can insert LOBs by binding a stream,
     and get LOBs by reading a stream returned by CUBRID PDO.
     For example:
    </p>

    <div class="example" id="example-1178">
     <p><strong>Example #1 Insert LOBs in CUBRID PDO</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'lob_test.png'</span><span style="color: #007700">, </span><span style="color: #DD0000">'rb'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql_stmt </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO lob_test(name, content) VALUES('lob_test.png', ?)"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql_stmt</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$fp</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_LOB</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <div class="example" id="example-1179">
     <p><strong>Example #2 Fetch LOBs in CUBRID PDO</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sql_stmt </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT content FROM lob_test WHERE name='lob_test.png'"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql_stmt</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">FETCH_NUM</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Content-Type: image/png"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fpassthru</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </div>

   <div class="section">
    <h2 class="title">Column meta</h2>

    <p class="para">
     The <span class="methodname"><a href="pdostatement.getcolumnmeta.php" class="methodname">PDOStatement::getColumnMeta()</a></span> in CUBRID PDO
     will return an associative array containing the following values:
     <ul class="simplelist">
      <li>type</li>
      <li>name</li>
      <li>table</li>
      <li>def</li>
      <li>precision</li>
      <li>scale</li>
      <li>not_null</li>
      <li>auto_increment</li>
      <li>unique_key</li>
      <li>multiple_key</li>
      <li>primary_key</li>
      <li>foreign_key</li>
      <li>reverse_index</li>
      <li>reverse_unique</li>
     </ul>
    </p>
   </div>

   <div class="section">
    <h2 class="title">Collection Data Type</h2>

    <p class="simpara">
     PDO_CUBRID supports SET/MULTISET/SEQUENCE data type.
     If you don&#039;t specify data type, the default data type is char.
     For example:
    </p>

    <div class="example" id="example-1180">
     <p><strong>Example #3 Insert set in CUBRID PDO with default data type.</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn_str </span><span style="color: #007700">=</span><span style="color: #DD0000">"cubrid:dbname=demodb;host=localhost;port=33000"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$cubrid_pdo </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_str</span><span style="color: #007700">, </span><span style="color: #DD0000">'dba'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE if exists test_tbl"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test_tbl (col_1 SET(VARCHAR))"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql_stmt_insert </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO test_tbl VALUES (?);"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql_stmt_insert</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"abc"</span><span style="color: #007700">,</span><span style="color: #DD0000">"def"</span><span style="color: #007700">,</span><span style="color: #DD0000">"ghi"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_NULL</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_Dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <div class="example" id="example-1181">
     <p><strong>Example #4 Specify data type when insert set in CUBRID PDO</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$conn_str </span><span style="color: #007700">=</span><span style="color: #DD0000">"cubrid:dbname=demodb;host=localhost;port=33000"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$cubrid_pdo </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #0000BB">$conn_str</span><span style="color: #007700">, </span><span style="color: #DD0000">'dba'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE if exists test_tbl"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test_tbl (col_1 SET(int))"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql_stmt_insert </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO test_tbl VALUES (?);"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$cubrid_pdo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql_stmt_insert</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">,</span><span style="color: #0000BB">2</span><span style="color: #007700">,</span><span style="color: #0000BB">3</span><span style="color: #007700">,</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #0000BB">0</span><span style="color: #007700">,</span><span style="color: #DD0000">"int"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_Dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$ret</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>

    <p class="para">
     CUBRID Bind Data Types for the fifth parameter of
     <span class="methodname"><a href="pdostatement.bindparam.php" class="methodname">PDOStatement::bindParam()</a></span>:
     <ul class="simplelist">
      <li>CHAR</li>
      <li>STRING</li>
      <li>NCHAR</li>
      <li>VARNCHAR</li>
      <li>BIT</li>
      <li>VARBIT</li>
      <li>NUMERIC</li>
      <li>NUMBER</li>
      <li>INT</li>
      <li>SHORT</li>
      <li>BIGINT</li>
      <li>MONETARY</li>
      <li>FLOAT</li>
      <li>DOUBLE</li>
      <li>DATE</li>
      <li>TIME</li>
      <li>DATETIME</li>
      <li>TIMESTAMP</li>
     </ul>
    </p>
   </div>
  </div>

   
   

<div class="section" id="pdo-cubrid.constants">
 <h2 class="title">Predefined Constants</h2>
 <p class="simpara">The constants below are defined by
this driver, and will only be available when the extension has been either
compiled into PHP or dynamically loaded at runtime. In addition, these
driver-specific constants should only be used if you are using this driver.
Using driver-specific attributes with another driver may result in
unexpected behaviour. <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> may be used to
obtain the <strong><code><a href="pdo.constants.php#pdo.constants.attr-driver-name">PDO::ATTR_DRIVER_NAME</a></code></strong> attribute to check the
driver, if your code can run against multiple drivers.</p>
  <p class="para">
   The following constants can be used when setting the database attribute.
   They can be passed to <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> or
   <span class="function"><a href="pdo.setattribute.php" class="function">PDO::setAttribute()</a></span>.
  <table class="doctable table">
   <caption><strong>PDO::CUBRID attribute flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr id="pdo.constants.cubrid-attr-isolation-level">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-attr-isolation-level">PDO::CUBRID_ATTR_ISOLATION_LEVEL</a></code></strong></td>
       <td>Transaction isolation level for the database connection.</td>
      </tr>

      <tr id="pdo.constants.cubrid-attr-lock-timeout">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-attr-lock-timeout">PDO::CUBRID_ATTR_LOCK_TIMEOUT</a></code></strong></td>
       <td>Transaction timeout in seconds.</td>
      </tr>

      <tr id="pdo.constants.cubrid-attr-max-string-length">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-attr-max-string-length">PDO::CUBRID_ATTR_MAX_STRING_LENGTH</a></code></strong></td>
       <td>Read only. The maximum string length for bit, varbit, char,
        varchar, nchar, nchar varying data types when using CUBRID PDO
        API.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when setting the transaction isolation
   level. They can be passed to <span class="function"><a href="pdo.getattribute.php" class="function">PDO::getAttribute()</a></span> or
   returned by <span class="function"><a href="pdo.setattribute.php" class="function">PDO::setAttribute()</a></span>.
  <table class="doctable table">
   <caption><strong>PDO::CUBRID isolation level flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr id="pdo.constants.tran-commit-class-uncommit-instance">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-commit-class-uncommit-instance">PDO::TRAN_COMMIT_CLASS_UNCOMMIT_INSTANCE</a></code></strong></td>
       <td>The lowest isolation level (1). A dirty, non-repeatable or
        phantom read may occur for the tuple and a non-repeatable read may
        occur for the table as well.</td>
      </tr>

      <tr id="pdo.constants.tran-commit-class-commit-instance">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-commit-class-commit-instance">PDO::TRAN_COMMIT_CLASS_COMMIT_INSTANCE</a></code></strong></td>
       <td>A relatively low isolation level (2). A dirty read does not
        occur, but non-repeatable or phantom read may occur.</td>
      </tr>

      <tr id="pdo.constants.tran-rep-class-uncommit-instance">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-rep-class-uncommit-instance">PDO::TRAN_REP_CLASS_UNCOMMIT_INSTANCE</a></code></strong></td>
       <td>The default isolation of CUBRID (3). A dirty, non-repeatable or
        phantom read may occur for the tuple, but repeatable read is ensured
        for the table.</td>
      </tr>

      <tr id="pdo.constants.tran-rep-class-commit-instance">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-rep-class-commit-instance">PDO::TRAN_REP_CLASS_COMMIT_INSTANCE</a></code></strong></td>
       <td>A relatively low isolation level (4). A dirty read does not
        occur, but non-repeatable or phantom read may.</td>
      </tr>

      <tr id="pdo.constants.tran-rep-class-rep-instance">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-rep-class-rep-instance">PDO::TRAN_REP_CLASS_REP_INSTANCE</a></code></strong></td>
       <td>A relatively high isolation level (5). A dirty or non-repeatable
       read does not occur, but a phantom read may.</td>
      </tr>

      <tr id="pdo.constants.tran-serializable">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.tran-serializable">PDO::TRAN_SERIALIZABLE</a></code></strong></td>
       <td>The highest isolation level (6). Problems concerning concurrency
       (e.g. dirty read, non-repeatable read, phantom read, etc.) do not
       occur.</td>
      </tr>

     </tbody>
    
   </table>

  </p>

  <p class="para">
   The following constants can be used when getting schema information. They
   can be passed to <span class="function"><a href="pdo.cubrid-schema.php" class="function">PDO::cubrid_schema()</a></span>.
  <table class="doctable table">
   <caption><strong>PDO::CUBRID schema flags</strong></caption>
    
     <thead>
      <tr>
       <th>Constant</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr id="pdo.constants.cubrid-sch-table">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-table">PDO::CUBRID_SCH_TABLE</a></code></strong></td>
       <td>Get name and type of table in CUBRID.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-view">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-view">PDO::CUBRID_SCH_VIEW</a></code></strong></td>
       <td>Get name and type of view in CUBRID.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-query-spec">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-query-spec">PDO::CUBRID_SCH_QUERY_SPEC</a></code></strong></td>
       <td>Get the query definition of view.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-attribute">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-attribute">PDO::CUBRID_SCH_ATTRIBUTE</a></code></strong></td>
       <td>Get the attributes of table column.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-table-attribute">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-table-attribute">PDO::CUBRID_SCH_TABLE_ATTRIBUTE</a></code></strong></td>
       <td>Get the attributes of table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-method">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-method">PDO::CUBRID_SCH_METHOD</a></code></strong></td>
       <td>Get the instance method. The instance method is a method called
       by a class instance. It is used more often than the class method
       because most operations are executed in the instance.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-table-method">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-table-method">PDO::CUBRID_SCH_TABLE_METHOD</a></code></strong></td>
       <td>Get the class method. The class method is a method called by a
        class object. It is usually used to create a new class instance or to
        initialize it. It is also used to access or update class
        attributes.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-method-file">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-method-file">PDO::CUBRID_SCH_METHOD_FILE</a></code></strong></td>
       <td>Get the information of the file where the method of the table is
        defined.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-super-table">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-super-table">PDO::CUBRID_SCH_SUPER_TABLE</a></code></strong></td>
       <td>Get the name and type of table which table inherites attributes
        from.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-sub-table">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-sub-table">PDO::CUBRID_SCH_SUB_TABLE</a></code></strong></td>
       <td>Get the name and type of table which inherites attributes from
        this table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-constraint">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-constraint">PDO::CUBRID_SCH_CONSTRAINT</a></code></strong></td>
       <td>Get the table constraints.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-trigger">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-trigger">PDO::CUBRID_SCH_TRIGGER</a></code></strong></td>
       <td>Get the table triggers.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-table-privilege">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-table-privilege">PDO::CUBRID_SCH_TABLE_PRIVILEGE</a></code></strong></td>
       <td>Get the privilege information of table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-col-privilege">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-col-privilege">PDO::CUBRID_SCH_COL_PRIVILEGE</a></code></strong></td>
       <td>Get the privilege information of column.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-direct-super-table">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-direct-super-table">PDO::CUBRID_SCH_DIRECT_SUPER_TABLE</a></code></strong></td>
       <td>Get the direct super table of table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-primary-key">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-primary-key">PDO::CUBRID_SCH_PRIMARY_KEY</a></code></strong></td>
       <td>Get the table primary key.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-imported-keys">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-imported-keys">PDO::CUBRID_SCH_IMPORTED_KEYS</a></code></strong></td>
       <td>Get imported keys of table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-exported-keys">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-exported-keys">PDO::CUBRID_SCH_EXPORTED_KEYS</a></code></strong></td>
       <td>Get exported keys of table.</td>
      </tr>

      <tr id="pdo.constants.cubrid-sch-cross-reference">
       <td><strong><code><a href="ref.pdo-cubrid.php#pdo.constants.cubrid-sch-cross-reference">PDO::CUBRID_SCH_CROSS_REFERENCE</a></code></strong></td>
       <td>Get reference relationship of tow tables.</td>
      </tr>

     </tbody>
    
   </table>

  </p>
</div>




  </div>

  

  







 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-cubrid.connection.php">PDO_CUBRID DSN</a> — Connecting to CUBRID databases</li><li><a href="pdo.cubrid-schema.php">PDO::cubrid_schema</a> — Get the requested schema information</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_cubrid/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-cubrid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-cubrid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-cubrid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
