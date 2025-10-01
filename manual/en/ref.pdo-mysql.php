<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: MySQL PDO Driver - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.pdo-mysql.php">
 <link rel="shorturl" href="https://www.php.net/pdo-mysql">
 <link rel="alternate" href="https://www.php.net/pdo-mysql" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/pdo.drivers.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.pdo-informix.connection.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.pdo-mysql.connection.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.pdo-mysql.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.pdo-mysql.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.pdo-mysql.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.pdo-mysql.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.pdo-mysql.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.pdo-mysql.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.pdo-mysql.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.pdo-mysql.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.pdo-mysql.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.pdo-mysql.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.pdo-mysql.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="MySQL PDO Driver (PDO_MYSQL)" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: MySQL PDO Driver - Manual" />
<meta name="twitter:description" content="MySQL PDO Driver (PDO_MYSQL)" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: MySQL PDO Driver - Manual" />
<meta itemprop="description" content="MySQL PDO Driver (PDO_MYSQL)" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="MySQL PDO Driver (PDO_MYSQL)" />

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
        <a href="ref.pdo-mysql.connection.php">
          PDO_MYSQL DSN &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.pdo-informix.connection.php">
          &laquo; PDO_INFORMIX DSN        </a>
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
            <option value='en/ref.pdo-mysql.php' selected="selected">English</option>
            <option value='de/ref.pdo-mysql.php'>German</option>
            <option value='es/ref.pdo-mysql.php'>Spanish</option>
            <option value='fr/ref.pdo-mysql.php'>French</option>
            <option value='it/ref.pdo-mysql.php'>Italian</option>
            <option value='ja/ref.pdo-mysql.php'>Japanese</option>
            <option value='pt_BR/ref.pdo-mysql.php'>Brazilian Portuguese</option>
            <option value='ru/ref.pdo-mysql.php'>Russian</option>
            <option value='tr/ref.pdo-mysql.php'>Turkish</option>
            <option value='uk/ref.pdo-mysql.php'>Ukrainian</option>
            <option value='zh/ref.pdo-mysql.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.pdo-mysql" class="reference">
  
  <h1 class="title">MySQL PDO Driver (PDO_MYSQL)</h1>
  
  <div class="partintro">

   <div class="section" id="ref.pdo-mysql.intro">
   <h2 class="title">Introduction</h2>
    <p class="para">
     PDO_MYSQL is a driver that implements the <a href="intro.pdo.php" class="link">PHP
     Data Objects (PDO) interface</a>
     to enable access from PHP to MySQL databases.
    </p>
    <p class="para">
     PDO_MYSQL uses emulated prepares by default.
    </p>

    <p class="para">
      <strong>MySQL 8</strong>
    </p>

    <p class="para">
     When running a PHP version before 7.1.16, or PHP 7.2 before 7.2.4, set
     MySQL 8 Server&#039;s default password plugin to <em>mysql_native_password</em>
     or else you will see errors similar to
     <em>The server requested authentication method unknown to the client [caching_sha2_password]</em>
     even when <em>caching_sha2_password</em> is not used.
    </p>
    <p class="para">
     This is because MySQL 8 defaults to caching_sha2_password, a plugin that is
     not recognized by the older PHP (mysqlnd) releases. Instead, change it by
     setting <code class="literal">default_authentication_plugin=mysql_native_password</code>
     in <var class="filename">my.cnf</var>. The <em>caching_sha2_password</em>
     plugin is fully supported as of PHP 7.4.4. For older releases, the
     <a href="book.mysql-xdevapi.php" class="link">mysql_xdevapi</a> extension does
     support it.
    </p>

    <div class="warning"><strong class="warning">Warning</strong>
     <p class="para">
      Beware: Some MySQL table types (storage engines) do not support transactions.  When
      writing transactional database code using a table type that does not support
      transactions, MySQL will pretend that a transaction was initiated successfully.
      In addition, any DDL queries issued will implicitly
      commit any pending transactions.
     </p>
    </div>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      The MySQL driver does not properly support <strong><code><a href="pdo.constants.php#pdo.constants.param-input-output">PDO::PARAM_INPUT_OUTPUT</a></code></strong>
      via <span class="methodname"><a href="pdostatement.bindparam.php" class="methodname">PDOStatement::bindParam()</a></span>; while such parameters can be used,
      they are not updated (i.e. the actual output is ignored).
     </p>
    </p></blockquote>
   </div>
   

<div class="section" id="ref.pdo-mysql.installation">
 <h2 class="title">Installation</h2>
 <p class="para">
  The common Unix distributions include binary versions of PHP that can
  be installed. Although these binary versions are typically built with
  support for the MySQL extensions, the extension libraries
  themselves may need to be installed using an additional package. Check
  the package manager that comes with your chosen distribution for
  availability.
 </p>
 
 <p class="para">
  For example, on Ubuntu the <code class="literal">php5-mysql</code> package installs
  the ext/mysql, ext/mysqli, and PDO_MYSQL PHP extensions. On CentOS, 
  the <code class="literal">php-mysql</code> package also installs these three 
  PHP extensions.
 </p>

 <p class="para">
  Alternatively, you can compile this extension yourself. Building PHP from 
  source allows you to specify the MySQL extensions you want to use, as well 
  as your choice of client library for each extension.
 </p>

 <p class="para">
  When compiling, use <strong class="option configure">--with-pdo-mysql[=DIR]</strong> to install
  the PDO MySQL extension, where the optional <code class="literal">[=DIR]</code>
  is the MySQL base library. <a href="book.mysqlnd.php" class="link">Mysqlnd</a>
  is the default library. For details about choosing a library, see
  <a href="mysqlinfo.library.choosing.php" class="link">Choosing a MySQL library</a>.
 </p>
 <p class="para">
  Optionally, the <strong class="option configure">--with-mysql-sock[=DIR]</strong> sets to location
  to the MySQL unix socket pointer for all MySQL extensions, including PDO_MYSQL. If
  unspecified, the default locations are searched.
 </p>
 <p class="para">
  Optionally, the <strong class="option configure">--with-zlib-dir[=DIR]</strong> is used to set
  the path to the libz install prefix.
 </p>
 <p class="para">
  <div class="example-contents screen">
<div class="cdata"><pre>
$ ./configure --with-pdo-mysql --with-mysql-sock=/var/mysql/mysql.sock
</pre></div>
  </div>
 </p>
 <p class="para">
  <abbr title="Secure Sockets Layer">SSL</abbr> support is enabled using the appropriate
  <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-key">Pdo\Mysql::ATTR_SSL_<span class="replaceable">*</span></a></code></strong>,
  which is equivalent to calling the
  <a href="https://dev.mysql.com/doc/c-api/8.4/en/mysql-ssl-set.html" class="link external">&raquo;&nbsp;MySQL C API function mysql_ssl_set()</a>.
  Also, SSL cannot be enabled with <span class="methodname"><a href="pdo.setattribute.php" class="methodname">PDO::setAttribute()</a></span>
  because the connection already exists.
  See also the MySQL documentation about
  <a href="https://dev.mysql.com/doc/en/using-encrypted-connections.html" class="link external">&raquo;&nbsp;connecting to MySQL with SSL</a>.
 </p>

</div>



   

<div class="section" id="ref.pdo-mysql.constants">
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
  
   <dt id="pdo.constants.mysql-attr-use-buffered-query">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-use-buffered-query">PDO::MYSQL_ATTR_USE_BUFFERED_QUERY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-use-buffered-query">Pdo\Mysql::ATTR_USE_BUFFERED_QUERY</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-local-infile">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-local-infile">PDO::MYSQL_ATTR_LOCAL_INFILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile">Pdo\Mysql::ATTR_LOCAL_INFILE</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-local-infile-directory">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-local-infile-directory">PDO::MYSQL_ATTR_LOCAL_INFILE_DIRECTORY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-local-infile-directory">Pdo\Mysql::ATTR_LOCAL_INFILE_DIRECTORY</a></code></strong>.
     Available as of PHP 8.1.0.
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-init-command">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-init-command">PDO::MYSQL_ATTR_INIT_COMMAND</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-init-command">Pdo\Mysql::ATTR_INIT_COMMAND</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-read-default-file">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-file">PDO::MYSQL_ATTR_READ_DEFAULT_FILE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-file">Pdo\Mysql::ATTR_READ_DEFAULT_FILE</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-read-default-group">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-read-default-group">PDO::MYSQL_ATTR_READ_DEFAULT_GROUP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-read-default-group">Pdo\Mysql::ATTR_READ_DEFAULT_GROUP</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-max-buffer-size">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-max-buffer-size">PDO::MYSQL_ATTR_MAX_BUFFER_SIZE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-max-buffer-size">Pdo\Mysql::ATTR_MAX_BUFFER_SIZE</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-direct-query">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-direct-query">PDO::MYSQL_ATTR_DIRECT_QUERY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="pdo.constants.php#pdo.constants.attr-emulate-prepares">PDO::ATTR_EMULATE_PREPARES</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-found-rows">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-found-rows">PDO::MYSQL_ATTR_FOUND_ROWS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-found-rows">Pdo\Mysql::ATTR_FOUND_ROWS</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-ignore-space">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ignore-space">PDO::MYSQL_ATTR_IGNORE_SPACE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ignore-space">Pdo\Mysql::ATTR_IGNORE_SPACE</a></code></strong>
    </span>
   </dd>
  
  
   <dt id="pdo.constants.mysql-attr-compress">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-compress">PDO::MYSQL_ATTR_COMPRESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-compress">Pdo\Mysql::ATTR_COMPRESS</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-server-public-key">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-server-public-key">PDO::MYSQL_ATTR_SERVER_PUBLIC_KEY</a></code></strong>
    (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-server-public-key">Pdo\Mysql::ATTR_SERVER_PUBLIC_KEY</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-ca">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-ca">PDO::MYSQL_ATTR_SSL_CA</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-ca">Pdo\Mysql::ATTR_SSL_CA</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-capath">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-capath">PDO::MYSQL_ATTR_SSL_CAPATH</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-capath">Pdo\Mysql::ATTR_SSL_CAPATH</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-cert">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-cert">PDO::MYSQL_ATTR_SSL_CERT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cert">Pdo\Mysql::ATTR_SSL_CERT</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-cipher">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-cipher">PDO::MYSQL_ATTR_SSL_CIPHER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-cipher">Pdo\Mysql::ATTR_SSL_CIPHER</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-key">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-key">PDO::MYSQL_ATTR_SSL_KEY</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-key">Pdo\Mysql::ATTR_SSL_KEY</a></code></strong>
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-ssl-verify-server-cert">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-ssl-verify-server-cert">PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-ssl-verify-server-cert">Pdo\Mysql::ATTR_SSL_VERIFY_SERVER_CERT</a></code></strong>
     Available as of PHP 7.0.18 and PHP 7.1.4.
    </span>
   </dd>
  

  
   <dt id="pdo.constants.mysql-attr-multi-statements">
    <strong><code><a href="ref.pdo-mysql.php#pdo.constants.mysql-attr-multi-statements">PDO::MYSQL_ATTR_MULTI_STATEMENTS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
   </dt>
   <dd>
    <span class="simpara">
     Alias of <strong><code><a href="class.pdo-mysql.php#pdo-mysql.constants.attr-multi-statements">Pdo\Mysql::ATTR_MULTI_STATEMENTS</a></code></strong>
    </span>
   </dd>
  

 </dl>
</div>



   

<div class="section" id="pdo-mysql.configuration">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
  <table class="doctable table">
   <caption><strong>PDO_MYSQL Configuration Options</strong></caption>
   
    <thead>
     <tr>
      <th>Name</th>
      <th>Default</th>
      <th>Changeable</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><a href="ref.pdo-mysql.php#ini.pdo-mysql.default-socket" class="link">pdo_mysql.default_socket</a></td>
      <td>&quot;/tmp/mysql.sock&quot;</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     </tr>

     <tr>
      <td><a href="ref.pdo-mysql.php#ini.pdo-mysql.debug" class="link">pdo_mysql.debug</a></td>
      <td>NULL</td>
      <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
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
   
    <dt id="ini.pdo-mysql.default-socket">
     <code class="parameter">pdo_mysql.default_socket</code>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
    </dt>
    <dd>
     <p class="para">
      Sets a Unix domain socket. This value can either be set at compile time if 
      a domain socket is found at configure. This ini setting is Unix only.
     </p>
    </dd>
   
   
    <dt id="ini.pdo-mysql.debug">
     <code class="parameter">pdo_mysql.debug</code>
     <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
    </dt>
    <dd>
     <p class="para">
      Enables debugging for PDO_MYSQL. This setting is only available when PDO_MYSQL is 
      compiled against mysqlnd and in PDO debug mode.
     </p>
    </dd>
   
  </dl>
 </p>
</div>



  </div>

  

 <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="ref.pdo-mysql.connection.php">PDO_MYSQL DSN</a> — Connecting to MySQL databases</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo_mysql/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.pdo-mysql%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.pdo-mysql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-mysql.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75583">  <div class="votes">
    <div id="Vu75583">
    <a href="/manual/vote-note.php?id=75583&amp;page=ref.pdo-mysql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75583">
    <a href="/manual/vote-note.php?id=75583&amp;page=ref.pdo-mysql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75583" title="52% like this...">
    5
    </div>
  </div>
  <a href="#75583" class="name">
  <strong class="user"><em>davey at php dot net</em></strong></a><a class="genanchor" href="#75583"> &para;</a><div class="date" title="2007-06-06 01:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75583">
<div class="phpcode"><code><span class="html">To use "PDO::MYSQL_ATTR_USE_BUFFERED_QUERY" you should call
<br />PDO::setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
<br />
<br />It will not work when passed into PDO::prepare()</span></code></div>
  </div>
 </div>
  <div class="note" id="84688">  <div class="votes">
    <div id="Vu84688">
    <a href="/manual/vote-note.php?id=84688&amp;page=ref.pdo-mysql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84688">
    <a href="/manual/vote-note.php?id=84688&amp;page=ref.pdo-mysql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84688" title="51% like this...">
    4
    </div>
  </div>
  <a href="#84688" class="name">
  <strong class="user"><em>brian at diamondsea dot com</em></strong></a><a class="genanchor" href="#84688"> &para;</a><div class="date" title="2008-07-25 11:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84688">
<div class="phpcode"><code><span class="html">SQLSTATE[HY000]: General error: 2014 Cannot execute queries while other unbuffered queries are active. ...<br /><br />After spending hours trying to track down why we were getting this error on a new server, after the same code ran fine on other servers, we found the problem to be an old MySQL _client_ library running on our web server, and a latest-version MySQL _server_ running on the database server's box.<br /><br />Upgraded the MySQL client on the web server to the current revision and the problem went away.</span></code></div>
  </div>
 </div>
  <div class="note" id="129828">  <div class="votes">
    <div id="Vu129828">
    <a href="/manual/vote-note.php?id=129828&amp;page=ref.pdo-mysql&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129828">
    <a href="/manual/vote-note.php?id=129828&amp;page=ref.pdo-mysql&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129828" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#129828" class="name">
  <strong class="user"><em>snoyes at gmail dot com</em></strong></a><a class="genanchor" href="#129828"> &para;</a><div class="date" title="2024-10-30 05:30"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129828">
<div class="phpcode"><code><span class="html">&gt; change it by setting default_authentication_plugin=mysql_native_password in my.cnf<br /><br />This only works in MySQL 8.0. The default_authentication_plugin variable has been removed from 8.4.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.pdo-mysql&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.pdo-mysql.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
