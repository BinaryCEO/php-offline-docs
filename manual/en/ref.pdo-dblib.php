<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MS SQL Server PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-dblib.php">
 <link rel="shorturl" href="https://www.php.net/pdo-dblib">
 <link rel="alternate" href="https://www.php.net/pdo-dblib" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.cubrid-schema.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-dblib.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-dblib.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-dblib.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-dblib.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-dblib.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-dblib.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-dblib.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-dblib.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-dblib.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-dblib.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-dblib.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-dblib.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MS SQL Server PDO Driver - Manual" />
<meta name="twitter:description" content="Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MS SQL Server PDO Driver - Manual" />
<meta itemprop="description" content="Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)" />

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
        <a href="ref.pdo-dblib.connection.php">
          PDO_DBLIB DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.cubrid-schema.php">
          &laquo; PDO::cubrid_schema        </a>
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
            <option value='en/ref.pdo-dblib.php' selected="selected">English</option>
            <option value='de/ref.pdo-dblib.php'>German</option>
            <option value='es/ref.pdo-dblib.php'>Spanish</option>
            <option value='fr/ref.pdo-dblib.php'>French</option>
            <option value='it/ref.pdo-dblib.php'>Italian</option>
            <option value='ja/ref.pdo-dblib.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-dblib.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-dblib.php'>Russian</option>
            <option value='tr/ref.pdo-dblib.php'>Turkish</option>
            <option value='uk/ref.pdo-dblib.php'>Ukrainian</option>
            <option value='zh/ref.pdo-dblib.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-dblib" class="reference">
  
  <h1 class="title">Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)</h1>
  
  <div class="partintro">

   <div class="section" id="ref.pdo-dblib.intro">
   <h2 class="title">Introduction</h2>
    <p class="para">
     PDO_DBLIB is a driver that implements the <a href="intro.pdo.php" class="link">PHP
     Data Objects (PDO) interface</a> to enable access from PHP to
     Microsoft SQL Server and Sybase databases through the FreeTDS library.
    </p>
    <p class="para">
     This extension is not available anymore on Windows.
    </p>
    <p class="para">
     On Windows, you should use SqlSrv, an alternative driver for MS SQL is
     available from Microsoft: <a href="http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx" class="link external">&raquo;&nbsp;http://msdn.microsoft.com/en-us/sqlserver/ff657782.aspx
     </a>.
    </p>
    <p class="para">
     If it is not possible to use SqlSrv, you can use the
     <a href="ref.pdo-odbc.php" class="link">PDO_ODBC</a> driver to connect to
     Microsoft SQL Server and Sybase databases, as the native Windows DB-LIB
     is ancient, thread un-safe and no longer supported by Microsoft.
    </p>
   </div>
  </div>

  

 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-dblib.connection.php">PDO_DBLIB DSN</a> — Connecting to Microsoft SQL Server and Sybase databases</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_dblib/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-dblib%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-dblib&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-dblib.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118093">  <div class="votes">
    <div id="Vu118093">
    <a href="/manual/vote-note.php?id=118093&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118093">
    <a href="/manual/vote-note.php?id=118093&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118093" title="62% like this...">
    50
    </div>
  </div>
  <a href="#118093" class="name">
  <strong class="user"><em>Johankasselman at live dot com</em></strong></a><a class="genanchor" href="#118093"> &para;</a><div class="date" title="2015-10-02 01:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118093">
<div class="phpcode"><code><span class="html">Hi All, I'wrote a class to connect to MSSQL/Azure databases with Transaction support.<br /><br />Hope this can help anyone!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />*    @author     Johan Kasselman &lt;johankasselman@live.com&gt;<br />*    @since         2015-09-28    V1<br />*<br />*/<br /><br /></span><span class="keyword">class </span><span class="default">pdo_dblib_mssql</span><span class="keyword">{<br /><br />    private </span><span class="default">$db</span><span class="keyword">;<br />       private </span><span class="default">$cTransID</span><span class="keyword">;<br />       private </span><span class="default">$childTrans </span><span class="keyword">= array();<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$hostname</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">, </span><span class="default">$dbname</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">){<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hostname </span><span class="keyword">= </span><span class="default">$hostname</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">port </span><span class="keyword">= </span><span class="default">$port</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbname </span><span class="keyword">= </span><span class="default">$dbname</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">username </span><span class="keyword">= </span><span class="default">$username</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pwd </span><span class="keyword">= </span><span class="default">$pwd</span><span class="keyword">;<br /><br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connect</span><span class="keyword">();<br />        <br />    }<br /><br />    public function </span><span class="default">beginTransaction</span><span class="keyword">(){<br /><br />        </span><span class="default">$cAlphanum </span><span class="keyword">= </span><span class="string">"AaBbCc0Dd1EeF2fG3gH4hI5iJ6jK7kLlM8mN9nOoPpQqRrSsTtUuVvWwXxYyZz"</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cTransID </span><span class="keyword">= </span><span class="string">"T"</span><span class="keyword">.</span><span class="default">substr</span><span class="keyword">(</span><span class="default">str_shuffle</span><span class="keyword">(</span><span class="default">$cAlphanum</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /><br />        </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childTrans</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cTransID</span><span class="keyword">);<br /><br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"BEGIN TRAN [</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">cTransID</span><span class="string">];"</span><span class="keyword">);<br />        return </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />    }<br /><br />    public function </span><span class="default">rollBack</span><span class="keyword">(){<br />        <br />        while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childTrans</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">){<br />            </span><span class="default">$cTmp </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childTrans</span><span class="keyword">);<br />            </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"ROLLBACK TRAN [</span><span class="default">$cTmp</span><span class="string">];"</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />        }<br /><br />        return </span><span class="default">$stmt</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">commit</span><span class="keyword">(){<br /><br />        while(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childTrans</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">){<br />            </span><span class="default">$cTmp </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">childTrans</span><span class="keyword">);<br />            </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"COMMIT TRAN [</span><span class="default">$cTmp</span><span class="string">];"</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />        }<br /><br />        return  </span><span class="default">$stmt</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">close</span><span class="keyword">(){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">connect</span><span class="keyword">(){<br /><br />        try {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db </span><span class="keyword">= new </span><span class="default">PDO </span><span class="keyword">(</span><span class="string">"dblib:host=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">hostname</span><span class="string">:</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">port</span><span class="string">;dbname=</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbname</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">username</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pwd</span><span class="string">"</span><span class="keyword">);<br /><br />           <br /><br />        } catch (</span><span class="default">PDOException $e</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">logsys </span><span class="keyword">.= </span><span class="string">"Failed to get DB handle: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />        }<br /><br />    }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123063">  <div class="votes">
    <div id="Vu123063">
    <a href="/manual/vote-note.php?id=123063&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123063">
    <a href="/manual/vote-note.php?id=123063&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123063" title="63% like this...">
    3
    </div>
  </div>
  <a href="#123063" class="name">
  <strong class="user"><em>Fabian G</em></strong></a><a class="genanchor" href="#123063"> &para;</a><div class="date" title="2018-08-22 09:23"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123063">
<div class="phpcode"><code><span class="html">Instead of using Mssql or DBLib extension you should use the official extensions from Microsoft from here: <a href="https://github.com/Microsoft/msphpsql" rel="nofollow" target="_blank">https://github.com/Microsoft/msphpsql</a></span></code></div>
  </div>
 </div>
  <div class="note" id="56585">  <div class="votes">
    <div id="Vu56585">
    <a href="/manual/vote-note.php?id=56585&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56585">
    <a href="/manual/vote-note.php?id=56585&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56585" title="57% like this...">
    10
    </div>
  </div>
  <a href="#56585" class="name">
  <strong class="user"><em>graham1 dot simpson at hsbcib dot com</em></strong></a><a class="genanchor" href="#56585"> &para;</a><div class="date" title="2005-09-08 12:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56585">
<div class="phpcode"><code><span class="html">There is currently little sybase related PDO docs out there. The ones that I found often mention a spec for a dsn that is invalid. Here's how I am currently connecting to sybase ASE:<br /><br />1. Compile up freetds <a href="http://www.freetds.org" rel="nofollow" target="_blank">http://www.freetds.org</a> on top of open client;<br />2. Add the PDO and PD_DBLIB modules to php 5 as per the documentation; Note: I'm currently using the PDO-beta and PDO_DBLIB-beta;<br />3. Check mods installed ok using "pear list" and "php -m";<br /><br />The documentation often says to use "sybase:" as your DSN, this doesn't work. Use "dblib:" instead. Here's an example:<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">try {<br />    </span><span class="default">$hostname </span><span class="keyword">= </span><span class="string">"myhost"</span><span class="keyword">;<br />    </span><span class="default">$port </span><span class="keyword">= </span><span class="default">10060</span><span class="keyword">;<br />    </span><span class="default">$dbname </span><span class="keyword">= </span><span class="string">"tempdb"</span><span class="keyword">;<br />    </span><span class="default">$username </span><span class="keyword">= </span><span class="string">"dbuser"</span><span class="keyword">;<br />    </span><span class="default">$pw </span><span class="keyword">= </span><span class="string">"password"</span><span class="keyword">;<br />    </span><span class="default">$dbh </span><span class="keyword">= new </span><span class="default">PDO </span><span class="keyword">(</span><span class="string">"dblib:host=</span><span class="default">$hostname</span><span class="string">:</span><span class="default">$port</span><span class="string">;dbname=</span><span class="default">$dbname</span><span class="string">"</span><span class="keyword">,</span><span class="string">"</span><span class="default">$username</span><span class="string">"</span><span class="keyword">,</span><span class="string">"</span><span class="default">$pw</span><span class="string">"</span><span class="keyword">);<br />  } catch (</span><span class="default">PDOException $e</span><span class="keyword">) {<br />    echo </span><span class="string">"Failed to get DB handle: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">;<br />    exit;<br />  }<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"select name from master..sysdatabases where name = db_name()"</span><span class="keyword">);<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />  while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);<br />  }<br />  unset(</span><span class="default">$dbh</span><span class="keyword">); unset(</span><span class="default">$stmt</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="61090">  <div class="votes">
    <div id="Vu61090">
    <a href="/manual/vote-note.php?id=61090&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61090">
    <a href="/manual/vote-note.php?id=61090&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61090" title="61% like this...">
    3
    </div>
  </div>
  <a href="#61090" class="name">
  <strong class="user"><em>support at converters dot ru</em></strong></a><a class="genanchor" href="#61090"> &para;</a><div class="date" title="2006-01-25 05:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61090">
<div class="phpcode"><code><span class="html">If You work with MSSQL Server 7.0/2000/... under Windows and use non latin Encoding then better To use PDO_MSSQL until PDO_ODBC bugs will be fixed (MSSQL ext far more stable and usabe for PHP versions &lt;=5.1.2).<br />If your MSSQL connection use strings in OEM encoding (cp866 for russian charset) <br /><br />1. Run Microsoft Server/Client Network Utility on work PC and UNCHECK "DBLibrary options"/"Automatic ANSI to OEM conversion"<br /><br />2. Restart Web server if needed.</span></code></div>
  </div>
 </div>
  <div class="note" id="120698">  <div class="votes">
    <div id="Vu120698">
    <a href="/manual/vote-note.php?id=120698&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120698">
    <a href="/manual/vote-note.php?id=120698&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120698" title="55% like this...">
    2
    </div>
  </div>
  <a href="#120698" class="name">
  <strong class="user"><em>Vic L</em></strong></a><a class="genanchor" href="#120698"> &para;</a><div class="date" title="2017-02-23 05:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120698">
<div class="phpcode"><code><span class="html">FYI: PDO dblib module (pdo_dblib.so) was installed when I installed php-mssql in CentOS 7.  I thought php-mssql would just include the soon to be deprecated mssql PHP functions but it also contains the PDO connector.  After installing this I'm able to connect to our MSSQL 2014 DB via PDO!</span></code></div>
  </div>
 </div>
  <div class="note" id="121650">  <div class="votes">
    <div id="Vu121650">
    <a href="/manual/vote-note.php?id=121650&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121650">
    <a href="/manual/vote-note.php?id=121650&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121650" title="52% like this...">
    1
    </div>
  </div>
  <a href="#121650" class="name">
  <strong class="user"><em>fleduc dot perso at gmail dot com</em></strong></a><a class="genanchor" href="#121650"> &para;</a><div class="date" title="2017-09-18 01:29"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121650">
<div class="phpcode"><code><span class="html">Watch out!<br /><br />If you use PDO SQLSRV on windows 7, using 32 bit php on XAMMP, you might encounter driver problems : "This extension requires the Microsoft ODBC Driver 11 for SQL Server to communicate with SQL Server"<br /><br />The reason, Microsoft 32-bit ODBC driver doesn't install properly on 64-bit Windows 7.<br /><br />Check the solution to PDO SQLSRV driver problem here in StackOverflow<br /><br /><a href="https://stackoverflow.com/a/46245990/1330248" rel="nofollow" target="_blank">https://stackoverflow.com/a/46245990/1330248</a></span></code></div>
  </div>
 </div>
  <div class="note" id="109439">  <div class="votes">
    <div id="Vu109439">
    <a href="/manual/vote-note.php?id=109439&amp;page=ref.pdo-dblib&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109439">
    <a href="/manual/vote-note.php?id=109439&amp;page=ref.pdo-dblib&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109439" title="51% like this...">
    1
    </div>
  </div>
  <a href="#109439" class="name">
  <strong class="user"><em>ian at helastel dot com</em></strong></a><a class="genanchor" href="#109439"> &para;</a><div class="date" title="2012-07-17 03:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109439">
<div class="phpcode"><code><span class="html">For people with issues inserting UTF-8 / Unicode data using DBLIB, you can't do this natively - but you can workaround the problem by converting the data first.<br /><br />e.g. inserting into a nvarchar column with collation Latin1_General_CI_AS<br /><br />...<br />$res = $db-&gt;prepare($sql);<br />$res-&gt;bindValue(':value', iconv('UTF-8', 'ISO8859-1', $value);<br />...</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-dblib&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-dblib.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="pdo.drivers.php">PDO Drivers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="ref.pdo-cubrid.php" title="CUBRID PDO Driver">CUBRID PDO Driver</a>
                        </li>
                                                <li class="current">
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
