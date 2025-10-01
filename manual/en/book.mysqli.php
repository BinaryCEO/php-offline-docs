<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MySQLi - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.mysqli.php">
 <link rel="shorturl" href="https://www.php.net/mysqli">
 <link rel="alternate" href="https://www.php.net/mysqli" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/set.mysqlinfo.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqlinfo.concepts.charset.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.mysqli.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.mysqli.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.mysqli.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.mysqli.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.mysqli.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.mysqli.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.mysqli.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.mysqli.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.mysqli.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.mysqli.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.mysqli.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.mysqli.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="MySQL Improved Extension" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MySQLi - Manual" />
<meta name="twitter:description" content="MySQL Improved Extension" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MySQLi - Manual" />
<meta itemprop="description" content="MySQL Improved Extension" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="MySQL Improved Extension" />

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
        <a href="intro.mysqli.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqlinfo.concepts.charset.php">
          &laquo; Character sets        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      </ul>
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
            <option value='en/book.mysqli.php' selected="selected">English</option>
            <option value='de/book.mysqli.php'>German</option>
            <option value='es/book.mysqli.php'>Spanish</option>
            <option value='fr/book.mysqli.php'>French</option>
            <option value='it/book.mysqli.php'>Italian</option>
            <option value='ja/book.mysqli.php'>Japanese</option>
            <option value='pt_BR/book.mysqli.php'>Brazilian Portuguese</option>
            <option value='ru/book.mysqli.php'>Russian</option>
            <option value='tr/book.mysqli.php'>Turkish</option>
            <option value='uk/book.mysqli.php'>Ukrainian</option>
            <option value='zh/book.mysqli.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.mysqli" class="book">
 

 <h1 class="title">MySQL Improved Extension</h1>

 



 



 



 



 







 




 




 






 





 




 




 




 




 




 




 










<ul class="chunklist chunklist_book"><li><a href="intro.mysqli.php">Introduction</a></li><li><a href="mysqli.overview.php">Overview</a></li><li><a href="mysqli.quickstart.php">Quick start guide</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli.quickstart.dual-interface.php">Dual procedural and object-oriented interface</a></li><li><a href="mysqli.quickstart.connections.php">Connections</a></li><li><a href="mysqli.quickstart.statements.php">Executing statements</a></li><li><a href="mysqli.quickstart.prepared-statements.php">Prepared Statements</a></li><li><a href="mysqli.quickstart.stored-procedures.php">Stored Procedures</a></li><li><a href="mysqli.quickstart.multiple-statement.php">Multiple Statements</a></li><li><a href="mysqli.quickstart.transactions.php">API support for transactions</a></li><li><a href="mysqli.quickstart.metadata.php">Metadata</a></li></ul></li><li><a href="mysqli.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli.requirements.php">Requirements</a></li><li><a href="mysqli.installation.php">Installation</a></li><li><a href="mysqli.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="mysqli.persistconns.php">The mysqli Extension and Persistent Connections</a></li><li><a href="mysqli.constants.php">Predefined Constants</a></li><li><a href="mysqli.notes.php">Notes</a></li><li><a href="mysqli.summary.php">The MySQLi Extension Function Summary</a></li><li><a href="class.mysqli.php">mysqli</a> — The mysqli class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli.affected-rows.php">mysqli::$affected_rows</a> — Gets the number of affected rows in a previous MySQL operation</li><li><a href="mysqli.autocommit.php">mysqli::autocommit</a> — Turns on or off auto-committing database modifications</li><li><a href="mysqli.begin-transaction.php">mysqli::begin_transaction</a> — Starts a transaction</li><li><a href="mysqli.change-user.php">mysqli::change_user</a> — Changes the user of the database connection</li><li><a href="mysqli.character-set-name.php">mysqli::character_set_name</a> — Returns the current character set of the database connection</li><li><a href="mysqli.close.php">mysqli::close</a> — Closes a previously opened database connection</li><li><a href="mysqli.commit.php">mysqli::commit</a> — Commits the current transaction</li><li><a href="mysqli.connect-errno.php">mysqli::$connect_errno</a> — Returns the error code from last connect call</li><li><a href="mysqli.connect-error.php">mysqli::$connect_error</a> — Returns a description of the last connection error</li><li><a href="mysqli.construct.php">mysqli::__construct</a> — Open a new connection to the MySQL server</li><li><a href="mysqli.debug.php">mysqli::debug</a> — Performs debugging operations</li><li><a href="mysqli.dump-debug-info.php">mysqli::dump_debug_info</a> — Dump debugging information into the log</li><li><a href="mysqli.errno.php">mysqli::$errno</a> — Returns the error code for the most recent function call</li><li><a href="mysqli.error.php">mysqli::$error</a> — Returns a string description of the last error</li><li><a href="mysqli.error-list.php">mysqli::$error_list</a> — Returns a list of errors from the last command executed</li><li><a href="mysqli.execute-query.php">mysqli::execute_query</a> — Prepares, binds parameters, and executes SQL statement</li><li><a href="mysqli.field-count.php">mysqli::$field_count</a> — Returns the number of columns for the most recent query</li><li><a href="mysqli.get-charset.php">mysqli::get_charset</a> — Returns a character set object</li><li><a href="mysqli.get-client-info.php">mysqli::$client_info</a> — Get MySQL client info</li><li><a href="mysqli.get-client-version.php">mysqli::$client_version</a> — Returns the MySQL client version as an integer</li><li><a href="mysqli.get-connection-stats.php">mysqli::get_connection_stats</a> — Returns statistics about the client connection</li><li><a href="mysqli.get-host-info.php">mysqli::$host_info</a> — Returns a string representing the type of connection used</li><li><a href="mysqli.get-proto-info.php">mysqli::$protocol_version</a> — Returns the version of the MySQL protocol used</li><li><a href="mysqli.get-server-info.php">mysqli::$server_info</a> — Returns the version of the MySQL server</li><li><a href="mysqli.get-server-version.php">mysqli::$server_version</a> — Returns the version of the MySQL server as an integer</li><li><a href="mysqli.get-warnings.php">mysqli::get_warnings</a> — Get result of SHOW WARNINGS</li><li><a href="mysqli.info.php">mysqli::$info</a> — Retrieves information about the most recently executed query</li><li><a href="mysqli.init.php">mysqli::init</a> — Initializes MySQLi and returns an object for use with mysqli_real_connect()</li><li><a href="mysqli.insert-id.php">mysqli::$insert_id</a> — Returns the value generated for an AUTO_INCREMENT column by the last query</li><li><a href="mysqli.kill.php">mysqli::kill</a> — Asks the server to kill a MySQL thread</li><li><a href="mysqli.more-results.php">mysqli::more_results</a> — Check if there are any more query results from a multi query</li><li><a href="mysqli.multi-query.php">mysqli::multi_query</a> — Performs one or more queries on the database</li><li><a href="mysqli.next-result.php">mysqli::next_result</a> — Prepare next result from multi_query</li><li><a href="mysqli.options.php">mysqli::options</a> — Set options</li><li><a href="mysqli.ping.php">mysqli::ping</a> — Pings a server connection, or tries to reconnect if the connection has gone down</li><li><a href="mysqli.poll.php">mysqli::poll</a> — Poll connections</li><li><a href="mysqli.prepare.php">mysqli::prepare</a> — Prepares an SQL statement for execution</li><li><a href="mysqli.query.php">mysqli::query</a> — Performs a query on the database</li><li><a href="mysqli.real-connect.php">mysqli::real_connect</a> — Opens a connection to a mysql server</li><li><a href="mysqli.real-escape-string.php">mysqli::real_escape_string</a> — Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection</li><li><a href="mysqli.real-query.php">mysqli::real_query</a> — Execute an SQL query</li><li><a href="mysqli.reap-async-query.php">mysqli::reap_async_query</a> — Get result from async query</li><li><a href="mysqli.refresh.php">mysqli::refresh</a> — Refreshes</li><li><a href="mysqli.release-savepoint.php">mysqli::release_savepoint</a> — Removes the named savepoint from the set of savepoints of the current transaction</li><li><a href="mysqli.rollback.php">mysqli::rollback</a> — Rolls back current transaction</li><li><a href="mysqli.savepoint.php">mysqli::savepoint</a> — Set a named transaction savepoint</li><li><a href="mysqli.select-db.php">mysqli::select_db</a> — Selects the default database for database queries</li><li><a href="mysqli.set-charset.php">mysqli::set_charset</a> — Sets the client character set</li><li><a href="mysqli.sqlstate.php">mysqli::$sqlstate</a> — Returns the SQLSTATE error from previous MySQL operation</li><li><a href="mysqli.ssl-set.php">mysqli::ssl_set</a> — Used for establishing secure connections using SSL</li><li><a href="mysqli.stat.php">mysqli::stat</a> — Gets the current system status</li><li><a href="mysqli.stmt-init.php">mysqli::stmt_init</a> — Initializes a statement and returns an object for use with mysqli_stmt_prepare</li><li><a href="mysqli.store-result.php">mysqli::store_result</a> — Transfers a result set from the last query</li><li><a href="mysqli.thread-id.php">mysqli::$thread_id</a> — Returns the thread ID for the current connection</li><li><a href="mysqli.thread-safe.php">mysqli::thread_safe</a> — Returns whether thread safety is given or not</li><li><a href="mysqli.use-result.php">mysqli::use_result</a> — Initiate a result set retrieval</li><li><a href="mysqli.warning-count.php">mysqli::$warning_count</a> — Returns the number of warnings generated by the most recently executed query</li></ul></li><li><a href="class.mysqli-stmt.php">mysqli_stmt</a> — The mysqli_stmt class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli-stmt.affected-rows.php">mysqli_stmt::$affected_rows</a> — Returns the total number of rows changed, deleted, inserted, or
  matched by the last statement executed</li><li><a href="mysqli-stmt.attr-get.php">mysqli_stmt::attr_get</a> — Used to get the current value of a statement attribute</li><li><a href="mysqli-stmt.attr-set.php">mysqli_stmt::attr_set</a> — Used to modify the behavior of a prepared statement</li><li><a href="mysqli-stmt.bind-param.php">mysqli_stmt::bind_param</a> — Binds variables to a prepared statement as parameters</li><li><a href="mysqli-stmt.bind-result.php">mysqli_stmt::bind_result</a> — Binds variables to a prepared statement for result storage</li><li><a href="mysqli-stmt.close.php">mysqli_stmt::close</a> — Closes a prepared statement</li><li><a href="mysqli-stmt.construct.php">mysqli_stmt::__construct</a> — Constructs a new mysqli_stmt object</li><li><a href="mysqli-stmt.data-seek.php">mysqli_stmt::data_seek</a> — Adjusts the result pointer to an arbitrary row in the buffered result</li><li><a href="mysqli-stmt.errno.php">mysqli_stmt::$errno</a> — Returns the error code for the most recent statement call</li><li><a href="mysqli-stmt.error.php">mysqli_stmt::$error</a> — Returns a string description for last statement error</li><li><a href="mysqli-stmt.error-list.php">mysqli_stmt::$error_list</a> — Returns a list of errors from the last statement executed</li><li><a href="mysqli-stmt.execute.php">mysqli_stmt::execute</a> — Executes a prepared statement</li><li><a href="mysqli-stmt.fetch.php">mysqli_stmt::fetch</a> — Fetch results from a prepared statement into the bound variables</li><li><a href="mysqli-stmt.field-count.php">mysqli_stmt::$field_count</a> — Returns the number of columns in the given statement</li><li><a href="mysqli-stmt.free-result.php">mysqli_stmt::free_result</a> — Frees stored result memory for the given statement handle</li><li><a href="mysqli-stmt.get-result.php">mysqli_stmt::get_result</a> — Gets a result set from a prepared statement as a mysqli_result object</li><li><a href="mysqli-stmt.get-warnings.php">mysqli_stmt::get_warnings</a> — Get result of SHOW WARNINGS</li><li><a href="mysqli-stmt.insert-id.php">mysqli_stmt::$insert_id</a> — Get the ID generated from the previous INSERT operation</li><li><a href="mysqli-stmt.more-results.php">mysqli_stmt::more_results</a> — Check if there are more query results from a multiple query</li><li><a href="mysqli-stmt.next-result.php">mysqli_stmt::next_result</a> — Reads the next result from a multiple query</li><li><a href="mysqli-stmt.num-rows.php">mysqli_stmt::$num_rows</a> — Returns the number of rows fetched from the server</li><li><a href="mysqli-stmt.param-count.php">mysqli_stmt::$param_count</a> — Returns the number of parameters for the given statement</li><li><a href="mysqli-stmt.prepare.php">mysqli_stmt::prepare</a> — Prepares an SQL statement for execution</li><li><a href="mysqli-stmt.reset.php">mysqli_stmt::reset</a> — Resets a prepared statement</li><li><a href="mysqli-stmt.result-metadata.php">mysqli_stmt::result_metadata</a> — Returns result set metadata from a prepared statement</li><li><a href="mysqli-stmt.send-long-data.php">mysqli_stmt::send_long_data</a> — Send data in blocks</li><li><a href="mysqli-stmt.sqlstate.php">mysqli_stmt::$sqlstate</a> — Returns SQLSTATE error from previous statement operation</li><li><a href="mysqli-stmt.store-result.php">mysqli_stmt::store_result</a> — Stores a result set in an internal buffer</li></ul></li><li><a href="class.mysqli-result.php">mysqli_result</a> — The mysqli_result class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli-result.construct.php">mysqli_result::__construct</a> — Constructs a mysqli_result object</li><li><a href="mysqli-result.current-field.php">mysqli_result::$current_field</a> — Get current field offset of a result pointer</li><li><a href="mysqli-result.data-seek.php">mysqli_result::data_seek</a> — Adjusts the result pointer to an arbitrary row in the result</li><li><a href="mysqli-result.fetch-all.php">mysqli_result::fetch_all</a> — Fetch all result rows as an associative array, a numeric array, or both</li><li><a href="mysqli-result.fetch-array.php">mysqli_result::fetch_array</a> — Fetch the next row of a result set as an associative, a numeric array, or both</li><li><a href="mysqli-result.fetch-assoc.php">mysqli_result::fetch_assoc</a> — Fetch the next row of a result set as an associative array</li><li><a href="mysqli-result.fetch-column.php">mysqli_result::fetch_column</a> — Fetch a single column from the next row of a result set</li><li><a href="mysqli-result.fetch-field.php">mysqli_result::fetch_field</a> — Returns the next field in the result set</li><li><a href="mysqli-result.fetch-field-direct.php">mysqli_result::fetch_field_direct</a> — Fetch meta-data for a single field</li><li><a href="mysqli-result.fetch-fields.php">mysqli_result::fetch_fields</a> — Returns an array of objects representing the fields in a result set</li><li><a href="mysqli-result.fetch-object.php">mysqli_result::fetch_object</a> — Fetch the next row of a result set as an object</li><li><a href="mysqli-result.fetch-row.php">mysqli_result::fetch_row</a> — Fetch the next row of a result set as an enumerated array</li><li><a href="mysqli-result.field-count.php">mysqli_result::$field_count</a> — Gets the number of fields in the result set</li><li><a href="mysqli-result.field-seek.php">mysqli_result::field_seek</a> — Set result pointer to a specified field offset</li><li><a href="mysqli-result.free.php">mysqli_result::free</a> — Frees the memory associated with a result</li><li><a href="mysqli-result.getiterator.php">mysqli_result::getIterator</a> — Retrieve an external iterator</li><li><a href="mysqli-result.lengths.php">mysqli_result::$lengths</a> — Returns the lengths of the columns of the current row in the result set</li><li><a href="mysqli-result.num-rows.php">mysqli_result::$num_rows</a> — Gets the number of rows in the result set</li></ul></li><li><a href="class.mysqli-driver.php">mysqli_driver</a> — The mysqli_driver class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli-driver.embedded-server-end.php">mysqli_driver::embedded_server_end</a> — Stop embedded server</li><li><a href="mysqli-driver.embedded-server-start.php">mysqli_driver::embedded_server_start</a> — Initialize and start embedded server</li><li><a href="mysqli-driver.report-mode.php">mysqli_driver::$report_mode</a> — Sets mysqli error reporting mode</li></ul></li><li><a href="class.mysqli-warning.php">mysqli_warning</a> — The mysqli_warning class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli-warning.construct.php">mysqli_warning::__construct</a> — Private constructor to disallow direct instantiation</li><li><a href="mysqli-warning.next.php">mysqli_warning::next</a> — Fetch next warning</li></ul></li><li><a href="class.mysqli-sql-exception.php">mysqli_sql_exception</a> — The mysqli_sql_exception class<ul class="chunklist chunklist_book chunklist_children"><li><a href="mysqli-sql-exception.getsqlstate.php">mysqli_sql_exception::getSqlState</a> — Returns the SQLSTATE error code</li></ul></li><li><a href="ref.mysqli.php">Aliases and deprecated Mysqli Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.mysqli-connect.php">mysqli_connect</a> — Alias of mysqli::__construct</li><li><a href="function.mysqli-escape-string.php">mysqli::escape_string</a> — Alias of mysqli_real_escape_string</li><li><a href="function.mysqli-execute.php">mysqli_execute</a> — Alias of mysqli_stmt_execute</li><li><a href="function.mysqli-get-client-stats.php">mysqli_get_client_stats</a> — Returns client per-process statistics</li><li><a href="function.mysqli-get-links-stats.php">mysqli_get_links_stats</a> — Return information about open and cached links</li><li><a href="function.mysqli-report.php">mysqli_report</a> — Alias of mysqli_driver-&gt;report_mode</li><li><a href="function.mysqli-set-opt.php">mysqli::set_opt</a> — Alias of mysqli_options</li></ul></li><li><a href="changelog.mysqli.php">Changelog</a></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.mysqli%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.mysqli&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.mysqli.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="set.mysqlinfo.php">MySQL</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysql.php" title="Overview of the MySQL PHP drivers">Overview of the MySQL PHP drivers</a>
                        </li>
                                                <li class="current">
                            <a href="book.mysqli.php" title="MySQLi">MySQLi</a>
                        </li>
                                                <li class="">
                            <a href="book.mysql-xdevapi.php" title="Mysql_&#8203;xdevapi">Mysql_&#8203;xdevapi</a>
                        </li>
                                                <li class="">
                            <a href="book.mysql.php" title="MySQL (Original)">MySQL (Original)</a>
                        </li>
                                                <li class="">
                            <a href="book.mysqlnd.php" title="Mysqlnd">Mysqlnd</a>
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
