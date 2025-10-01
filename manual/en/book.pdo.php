<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.pdo.php">
 <link rel="shorturl" href="https://www.php.net/pdo">
 <link rel="alternate" href="https://www.php.net/pdo" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.abstract.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-tables.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.pdo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.pdo.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.pdo.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.pdo.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.pdo.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.pdo.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.pdo.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.pdo.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.pdo.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.pdo.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.pdo.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.pdo.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="PHP Data Objects" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO - Manual" />
<meta name="twitter:description" content="PHP Data Objects" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO - Manual" />
<meta itemprop="description" content="PHP Data Objects" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="PHP Data Objects" />

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
        <a href="intro.pdo.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-tables.php">
          &laquo; odbc_tables        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      </ul>
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
            <option value='en/book.pdo.php' selected="selected">English</option>
            <option value='de/book.pdo.php'>German</option>
            <option value='es/book.pdo.php'>Spanish</option>
            <option value='fr/book.pdo.php'>French</option>
            <option value='it/book.pdo.php'>Italian</option>
            <option value='ja/book.pdo.php'>Japanese</option>
            <option value='pt_BR/book.pdo.php'>Brazilian Portuguese</option>
            <option value='ru/book.pdo.php'>Russian</option>
            <option value='tr/book.pdo.php'>Turkish</option>
            <option value='uk/book.pdo.php'>Ukrainian</option>
            <option value='zh/book.pdo.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.pdo" class="book">
 
 <h1 class="title">PHP Data Objects</h1>
 

 
 
 

 







 






 





 

 







 







 







 








 




 




 



 





 







<ul class="chunklist chunklist_book"><li><a href="intro.pdo.php">Introduction</a></li><li><a href="pdo.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="pdo.installation.php">Installation</a></li><li><a href="pdo.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="pdo.constants.php">Predefined Constants</a></li><li><a href="pdo.connections.php">Connections and Connection management</a></li><li><a href="pdo.transactions.php">Transactions and auto-commit</a></li><li><a href="pdo.prepared-statements.php">Prepared statements and stored procedures</a></li><li><a href="pdo.error-handling.php">Errors and error handling</a></li><li><a href="pdo.lobs.php">Large Objects (LOBs)</a></li><li><a href="class.pdo.php">PDO</a> — The PDO class<ul class="chunklist chunklist_book chunklist_children"><li><a href="pdo.begintransaction.php">PDO::beginTransaction</a> — Initiates a transaction</li><li><a href="pdo.commit.php">PDO::commit</a> — Commits a transaction</li><li><a href="pdo.connect.php">PDO::connect</a> — Connect to a database and return a PDO subclass for drivers that support it</li><li><a href="pdo.construct.php">PDO::__construct</a> — Creates a PDO instance representing a connection to a database</li><li><a href="pdo.errorcode.php">PDO::errorCode</a> — Fetch the SQLSTATE associated with the last operation on the database handle</li><li><a href="pdo.errorinfo.php">PDO::errorInfo</a> — Fetch extended error information associated with the last operation on the database handle</li><li><a href="pdo.exec.php">PDO::exec</a> — Execute an SQL statement and return the number of affected rows</li><li><a href="pdo.getattribute.php">PDO::getAttribute</a> — Retrieve a database connection attribute</li><li><a href="pdo.getavailabledrivers.php">PDO::getAvailableDrivers</a> — Return an array of available PDO drivers</li><li><a href="pdo.intransaction.php">PDO::inTransaction</a> — Checks if inside a transaction</li><li><a href="pdo.lastinsertid.php">PDO::lastInsertId</a> — Returns the ID of the last inserted row or sequence value</li><li><a href="pdo.prepare.php">PDO::prepare</a> — Prepares a statement for execution and returns a statement object</li><li><a href="pdo.query.php">PDO::query</a> — Prepares and executes an SQL statement without placeholders</li><li><a href="pdo.quote.php">PDO::quote</a> — Quotes a string for use in a query</li><li><a href="pdo.rollback.php">PDO::rollBack</a> — Rolls back a transaction</li><li><a href="pdo.setattribute.php">PDO::setAttribute</a> — Set an attribute</li></ul></li><li><a href="class.pdostatement.php">PDOStatement</a> — The PDOStatement class<ul class="chunklist chunklist_book chunklist_children"><li><a href="pdostatement.bindcolumn.php">PDOStatement::bindColumn</a> — Bind a column to a PHP variable</li><li><a href="pdostatement.bindparam.php">PDOStatement::bindParam</a> — Binds a parameter to the specified variable name</li><li><a href="pdostatement.bindvalue.php">PDOStatement::bindValue</a> — Binds a value to a parameter</li><li><a href="pdostatement.closecursor.php">PDOStatement::closeCursor</a> — Closes the cursor, enabling the statement to be executed again</li><li><a href="pdostatement.columncount.php">PDOStatement::columnCount</a> — Returns the number of columns in the result set</li><li><a href="pdostatement.debugdumpparams.php">PDOStatement::debugDumpParams</a> — Dump an SQL prepared command</li><li><a href="pdostatement.errorcode.php">PDOStatement::errorCode</a> — Fetch the SQLSTATE associated with the last operation on the statement handle</li><li><a href="pdostatement.errorinfo.php">PDOStatement::errorInfo</a> — Fetch extended error information associated with the last operation on the statement handle</li><li><a href="pdostatement.execute.php">PDOStatement::execute</a> — Executes a prepared statement</li><li><a href="pdostatement.fetch.php">PDOStatement::fetch</a> — Fetches the next row from a result set</li><li><a href="pdostatement.fetchall.php">PDOStatement::fetchAll</a> — Fetches the remaining rows from a result set</li><li><a href="pdostatement.fetchcolumn.php">PDOStatement::fetchColumn</a> — Returns a single column from the next row of a result set</li><li><a href="pdostatement.fetchobject.php">PDOStatement::fetchObject</a> — Fetches the next row and returns it as an object</li><li><a href="pdostatement.getattribute.php">PDOStatement::getAttribute</a> — Retrieve a statement attribute</li><li><a href="pdostatement.getcolumnmeta.php">PDOStatement::getColumnMeta</a> — Returns metadata for a column in a result set</li><li><a href="pdostatement.getiterator.php">PDOStatement::getIterator</a> — Gets result set iterator</li><li><a href="pdostatement.nextrowset.php">PDOStatement::nextRowset</a> — Advances to the next rowset in a multi-rowset statement handle</li><li><a href="pdostatement.rowcount.php">PDOStatement::rowCount</a> — Returns the number of rows affected by the last SQL statement</li><li><a href="pdostatement.setattribute.php">PDOStatement::setAttribute</a> — Set a statement attribute</li><li><a href="pdostatement.setfetchmode.php">PDOStatement::setFetchMode</a> — Set the default fetch mode for this statement</li></ul></li><li><a href="class.pdorow.php">PDORow</a> — The PDORow class</li><li><a href="class.pdoexception.php">PDOException</a> — The PDOException class</li><li><a href="pdo.drivers.php">PDO Drivers</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ref.pdo-cubrid.php">CUBRID PDO Driver</a> — CUBRID PDO Driver (PDO_CUBRID)</li><li><a href="ref.pdo-dblib.php">MS SQL Server PDO Driver</a> — Microsoft SQL Server and Sybase PDO Driver (PDO_DBLIB)</li><li><a href="class.pdo-dblib.php">Pdo\Dblib</a> — The Pdo\Dblib class</li><li><a href="ref.pdo-firebird.php">Firebird PDO Driver</a> — Firebird PDO Driver (PDO_FIREBIRD)</li><li><a href="class.pdo-firebird.php">Pdo\Firebird</a> — The Pdo\Firebird class</li><li><a href="ref.pdo-ibm.php">IBM PDO Driver</a> — IBM PDO Driver (PDO_IBM)</li><li><a href="ref.pdo-informix.php">Informix PDO Driver</a> — Informix PDO Driver (PDO_INFORMIX)</li><li><a href="ref.pdo-mysql.php">MySQL PDO Driver</a> — MySQL PDO Driver (PDO_MYSQL)</li><li><a href="class.pdo-mysql.php">Pdo\Mysql</a> — The Pdo\Mysql class</li><li><a href="ref.pdo-sqlsrv.php">MS SQL Server PDO Driver</a> — Microsoft SQL Server PDO Driver (PDO_SQLSRV)</li><li><a href="ref.pdo-oci.php">Oracle PDO Driver</a> — Oracle PDO Driver (PDO_OCI)</li><li><a href="ref.pdo-odbc.php">ODBC and DB2 PDO Driver</a> — ODBC and DB2 PDO Driver (PDO_ODBC)</li><li><a href="class.pdo-odbc.php">Pdo\Odbc</a> — The Pdo\Odbc class</li><li><a href="ref.pdo-pgsql.php">PostgreSQL PDO Driver</a> — PostgreSQL PDO Driver (PDO_PGSQL)</li><li><a href="class.pdo-pgsql.php">Pdo\Pgsql</a> — The Pdo\Pgsql class</li><li><a href="ref.pdo-sqlite.php">SQLite PDO Driver</a> — SQLite PDO Driver (PDO_SQLITE)</li><li><a href="class.pdo-sqlite.php">Pdo\Sqlite</a> — The Pdo\Sqlite class</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.pdo%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.pdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.pdo.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="69304">  <div class="votes">
    <div id="Vu69304">
    <a href="/manual/vote-note.php?id=69304&amp;page=book.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69304">
    <a href="/manual/vote-note.php?id=69304&amp;page=book.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69304" title="55% like this...">
    118
    </div>
  </div>
  <a href="#69304" class="name">
  <strong class="user"><em>djlopez at gmx dot de</em></strong></a><a class="genanchor" href="#69304"> &para;</a><div class="date" title="2006-08-30 02:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69304">
<div class="phpcode"><code><span class="html">Please note this:<br /><br />Won't work:<br />$sth = $dbh-&gt;prepare('SELECT name, colour, calories FROM ?  WHERE calories &lt; ?');<br /><br />THIS WORKS!<br />$sth = $dbh-&gt;prepare('SELECT name, colour, calories FROM fruit WHERE calories &lt; ?');<br /><br />The parameter cannot be applied on table names!!</span></code></div>
  </div>
 </div>
  <div class="note" id="62087">  <div class="votes">
    <div id="Vu62087">
    <a href="/manual/vote-note.php?id=62087&amp;page=book.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62087">
    <a href="/manual/vote-note.php?id=62087&amp;page=book.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62087" title="53% like this...">
    8
    </div>
  </div>
  <a href="#62087" class="name">
  <strong class="user"><em>www.navin.biz</em></strong></a><a class="genanchor" href="#62087"> &para;</a><div class="date" title="2006-02-19 10:16"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62087">
<div class="phpcode"><code><span class="html">Below is an example of extending PDO &amp; PDOStatement classes:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Database </span><span class="keyword">extends </span><span class="default">PDO<br /></span><span class="keyword">{<br />    function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent</span><span class="keyword">::</span><span class="default">__construct</span><span class="keyword">(</span><span class="string">'mysql:dbname=test;host=localhost'</span><span class="keyword">, </span><span class="string">'root'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_STATEMENT_CLASS</span><span class="keyword">, array(</span><span class="string">'DBStatement'</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">)));<br />    }<br />}<br /><br />class </span><span class="default">DBStatement </span><span class="keyword">extends </span><span class="default">PDOStatement<br /></span><span class="keyword">{<br />    public </span><span class="default">$dbh</span><span class="keyword">;<br /><br />    protected function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$dbh</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbh </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">setFetchMode</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_OBJ</span><span class="keyword">);<br />    }<br />    <br />    public function </span><span class="default">foundRows</span><span class="keyword">()<br />    {<br />        </span><span class="default">$rows </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT found_rows() AS rows'</span><span class="keyword">, array(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">MYSQL_ATTR_USE_BUFFERED_QUERY </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">));<br />        </span><span class="default">$rows</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />        </span><span class="default">$rowsCount </span><span class="keyword">= </span><span class="default">$rows</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_OBJ</span><span class="keyword">)-&gt;</span><span class="default">rows</span><span class="keyword">;<br />        </span><span class="default">$rows</span><span class="keyword">-&gt;</span><span class="default">closeCursor</span><span class="keyword">();<br />        return </span><span class="default">$rowsCount</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64950">  <div class="votes">
    <div id="Vu64950">
    <a href="/manual/vote-note.php?id=64950&amp;page=book.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64950">
    <a href="/manual/vote-note.php?id=64950&amp;page=book.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64950" title="50% like this...">
    7
    </div>
  </div>
  <a href="#64950" class="name">
  <strong class="user"><em>pokojny at radlight dot com</em></strong></a><a class="genanchor" href="#64950"> &para;</a><div class="date" title="2006-04-23 08:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64950">
<div class="phpcode"><code><span class="html">I wanted to extend PDO class to store statistics of DB usage, and I faced some problems. I wanted to count number of created statements and number of their executings. So PDOStatement should have link to PDO that created it and stores the statistical info. The problem was that I didn't knew how PDO creates PDOStatement (constructor parameters and so on), so I have created these two classes:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * PHP Document Object plus<br /> * <br /> * PHP Document Object plus is library with functionality of PDO, entirely written<br /> * in PHP, so that developer can easily extend it's classes with specific functionality,<br /> * such as providing database usage statistics implemented in v1.0b<br /> * <br /> * @author Peter Pokojny<br /> * @license <a href="http://opensource.org/licenses/gpl-license.php" rel="nofollow" target="_blank">http://opensource.org/licenses/gpl-license.php</a> GNU Public License<br /> */<br />    </span><span class="keyword">class </span><span class="default">PDOp </span><span class="keyword">{<br />        protected </span><span class="default">$PDO</span><span class="keyword">;<br />        public </span><span class="default">$numExecutes</span><span class="keyword">;<br />        public </span><span class="default">$numStatements</span><span class="keyword">;<br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$driver_options</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDO </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">$driver_options</span><span class="keyword">);<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numExecutes </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numStatements </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br />        public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) {<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDO</span><span class="keyword">, </span><span class="default">$func</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">prepare</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numStatements</span><span class="keyword">++;<br />            <br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />            </span><span class="default">$PDOS </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDO</span><span class="keyword">, </span><span class="string">'prepare'</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />            <br />            return new </span><span class="default">PDOpStatement</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$PDOS</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">query</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numExecutes</span><span class="keyword">++;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numStatements</span><span class="keyword">++;<br />            <br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />            </span><span class="default">$PDOS </span><span class="keyword">= </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDO</span><span class="keyword">, </span><span class="string">'query'</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />            <br />            return new </span><span class="default">PDOpStatement</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$PDOS</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">exec</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">numExecutes</span><span class="keyword">++;<br />            <br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDO</span><span class="keyword">, </span><span class="string">'exec'</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />        }<br />    }<br />    class </span><span class="default">PDOpStatement </span><span class="keyword">implements </span><span class="default">IteratorAggregate </span><span class="keyword">{<br />        protected </span><span class="default">$PDOS</span><span class="keyword">;<br />        protected </span><span class="default">$PDOp</span><span class="keyword">;<br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$PDOp</span><span class="keyword">, </span><span class="default">$PDOS</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOp </span><span class="keyword">= </span><span class="default">$PDOp</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS </span><span class="keyword">= </span><span class="default">$PDOS</span><span class="keyword">;<br />        }<br />        public function </span><span class="default">__call</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">) {<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">, </span><span class="default">$func</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, &amp;</span><span class="default">$param</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">) {<br />            if (</span><span class="default">$type </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">)<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">);<br />            else<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">-&gt;</span><span class="default">bindColumn</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, &amp;</span><span class="default">$param</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">=</span><span class="default">NULL</span><span class="keyword">) {<br />            if (</span><span class="default">$type </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">)<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">);<br />            else<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">execute</span><span class="keyword">() {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOp</span><span class="keyword">-&gt;</span><span class="default">numExecutes</span><span class="keyword">++;<br />            </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />            return </span><span class="default">call_user_func_array</span><span class="keyword">(array(&amp;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">, </span><span class="string">'execute'</span><span class="keyword">), </span><span class="default">$args</span><span class="keyword">);<br />        }<br />        public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">-&gt;</span><span class="default">$property</span><span class="keyword">;<br />        }<br />        public function </span><span class="default">getIterator</span><span class="keyword">() {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">PDOS</span><span class="keyword">;<br />        }<br />   }<br /></span><span class="default">?&gt;<br /></span><br />Classes have properties with original PDO and PDOStatement objects, which are providing the functionality to PDOp and PDOpStatement.<br />From outside, PDOp and PDOpStatement look like PDO and PDOStatement, but also are providing wanted info.</span></code></div>
  </div>
 </div>
  <div class="note" id="125834">  <div class="votes">
    <div id="Vu125834">
    <a href="/manual/vote-note.php?id=125834&amp;page=book.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125834">
    <a href="/manual/vote-note.php?id=125834&amp;page=book.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125834" title="50% like this...">
    1
    </div>
  </div>
  <a href="#125834" class="name">
  <strong class="user"><em>wiserufferto at gmail dot com</em></strong></a><a class="genanchor" href="#125834"> &para;</a><div class="date" title="2021-02-17 02:12"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125834">
<div class="phpcode"><code><span class="html">This is a little late... but I'm old and slow.......<br />Regarding Extending PDOStatement and PDO I found that sending the PDOExtended class by reference helps:<br />    In the constructor after parent::__construct() :<br />$this-&gt;setAttribute(\PDO::ATTR_STATEMENT_CLASS,array('PDOStatementExtended', [&amp;$this]));}<br /><br />And in <br />class PDOStatementExtended extends \PDOStatement<br />{<br />  <br />  protected function __construct<br />  (<br />    \PDO &amp;$PDO,<br />   )</span></code></div>
  </div>
 </div>
  <div class="note" id="129919">  <div class="votes">
    <div id="Vu129919">
    <a href="/manual/vote-note.php?id=129919&amp;page=book.pdo&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129919">
    <a href="/manual/vote-note.php?id=129919&amp;page=book.pdo&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129919" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#129919" class="name">
  <strong class="user"><em>dougwilbourne at gmail dot com</em></strong></a><a class="genanchor" href="#129919"> &para;</a><div class="date" title="2024-12-17 02:38"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129919">
<div class="phpcode"><code><span class="html">Now that current versions of MySQL are forcing users to authenticate with caching_sha2_password instead of mysql_native_driver, I wanted to get PDO to send passwords that way.  I think the only way to do it is to make the connection over SSL. Setting up your web server and database server for SSL is way beyond the scope of this note, but after you do, remember that you will need to add an options array as the last argument in your PDO connection arguments.  At a minimum, you will need to supply the server certificate.  In a development environment with a self-signed server certificate, you will also want to bypass verification that your server certificate is 'real'.  So your options array would look like this<br /><br />$opts = [ PDO::MYSQL_ATTR_SSL_CA =&gt; $server_cert_file_path, PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT =&gt; false];<br /><br />Hope it helps!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.pdo&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.pdo.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.database.abstract.php">Abstraction Layers</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.dba.php" title="DBA">DBA</a>
                        </li>
                                                <li class="">
                            <a href="book.uodbc.php" title="ODBC">ODBC</a>
                        </li>
                                                <li class="current">
                            <a href="book.pdo.php" title="PDO">PDO</a>
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
