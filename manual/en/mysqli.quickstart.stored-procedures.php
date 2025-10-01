<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Stored Procedures - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mysqli.quickstart.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.quickstart.stored-procedures.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.quickstart.stored-procedures.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.quickstart.stored-procedures.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.quickstart.stored-procedures.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.quickstart.stored-procedures.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.quickstart.stored-procedures.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.quickstart.stored-procedures.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.quickstart.stored-procedures.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.quickstart.stored-procedures.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.quickstart.stored-procedures.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Stored Procedures" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Stored Procedures - Manual" />
<meta name="twitter:description" content="Stored Procedures" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Stored Procedures - Manual" />
<meta itemprop="description" content="Stored Procedures" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Stored Procedures" />

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
        <a href="mysqli.quickstart.multiple-statement.php">
          Multiple Statements &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.quickstart.prepared-statements.php">
          &laquo; Prepared Statements        </a>
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
            <option value='en/mysqli.quickstart.stored-procedures.php' selected="selected">English</option>
            <option value='de/mysqli.quickstart.stored-procedures.php'>German</option>
            <option value='es/mysqli.quickstart.stored-procedures.php'>Spanish</option>
            <option value='fr/mysqli.quickstart.stored-procedures.php'>French</option>
            <option value='it/mysqli.quickstart.stored-procedures.php'>Italian</option>
            <option value='ja/mysqli.quickstart.stored-procedures.php'>Japanese</option>
            <option value='pt_BR/mysqli.quickstart.stored-procedures.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.quickstart.stored-procedures.php'>Russian</option>
            <option value='tr/mysqli.quickstart.stored-procedures.php'>Turkish</option>
            <option value='uk/mysqli.quickstart.stored-procedures.php'>Ukrainian</option>
            <option value='zh/mysqli.quickstart.stored-procedures.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.quickstart.stored-procedures" class="section">
  <h2 class="title">Stored Procedures</h2>
  <p class="para">
   The MySQL database supports stored procedures. A stored procedure is a
   subroutine stored in the database catalog. Applications can call and
   execute the stored procedure. The <code class="literal">CALL</code>
   SQL statement is used to execute a stored procedure.
  </p>
  <p class="para">
   <strong>Parameter</strong>
  </p>
  <p class="para">
   Stored procedures can have <code class="literal">IN</code>,
   <code class="literal">INOUT</code> and <code class="literal">OUT</code> parameters,
   depending on the MySQL version. The mysqli interface has no special
   notion for the different kinds of parameters.
  </p>
  <p class="para">
   <strong>IN parameter</strong>
  </p>
  <p class="para">
   Input parameters are provided with the <code class="literal">CALL</code> statement.
   Please, make sure values are escaped correctly.
  </p>
  <p class="para">
   <div class="example" id="example-1564">
    <p><strong>Example #1 Calling a stored procedure</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP PROCEDURE IF EXISTS p"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL p(1)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id FROM test"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">());</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [&quot;id&quot;]=&gt;
  string(1) &quot;1&quot;
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>INOUT/OUT parameter</strong>
  </p>
  <p class="para">
   The values of <code class="literal">INOUT</code>/<code class="literal">OUT</code>
   parameters are accessed using session variables.
  </p>
  <p class="para">
   <div class="example" id="example-1565">
    <p><strong>Example #2 Using session variables</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP PROCEDURE IF EXISTS p"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "Hi!" INTO msg; END;'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SET @msg = ''"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL p(@msg)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT @msg as _p_out"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">();<br />echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'_p_out'</span><span style="color: #007700">];</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
Hi!
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Application and framework developers may be able to provide a more convenient
   API using a mix of session variables and databased catalog inspection.
   However, please note the possible performance impact of a custom
   solution based on catalog inspection.
  </p>
  <p class="para">
   <strong>Handling result sets</strong>
  </p>
  <p class="para">
   Stored procedures can return result sets. Result sets returned from a
   stored procedure cannot be fetched correctly using <span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span>.
   The <span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span> function combines statement execution
   and fetching the first result set into a buffered result set, if any.
   However, there are additional stored procedure result sets hidden
   from the user which cause <span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span> to fail
   returning the user expected result sets.
  </p>
  <p class="para">
   Result sets returned from a stored procedure are fetched using
   <span class="methodname"><a href="mysqli.real-query.php" class="methodname">mysqli::real_query()</a></span> or <span class="methodname"><a href="mysqli.multi-query.php" class="methodname">mysqli::multi_query()</a></span>.
   Both functions allow fetching any number of result sets returned by a
   statement, such as <code class="literal">CALL</code>. Failing to fetch all
   result sets returned by a stored procedure causes an error.
  </p>
  <p class="para">
   <div class="example" id="example-1566">
    <p><strong>Example #3 Fetching results from stored procedures</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id) VALUES (1), (2), (3)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP PROCEDURE IF EXISTS p"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multi_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL p()"</span><span style="color: #007700">);<br /><br />do {<br />    if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"---\n"</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_all</span><span style="color: #007700">());<br />        </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br />    }<br />} while (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next_result</span><span style="color: #007700">());</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
---
array(3) {
  [0]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;1&quot;
  }
  [1]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;2&quot;
  }
  [2]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;3&quot;
  }
}
---
array(3) {
  [0]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;2&quot;
  }
  [1]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;3&quot;
  }
  [2]=&gt;
  array(1) {
    [0]=&gt;
    string(1) &quot;4&quot;
  }
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>Use of prepared statements</strong>
  </p>
  <p class="para">
   No special handling is required when using the prepared statement
   interface for fetching results from the same stored procedure as above.
   The prepared statement and non-prepared statement interfaces are similar.
   Please note, that not every MYSQL server version may support
   preparing the <code class="literal">CALL</code> SQL statement.
  </p>
  <p class="para">
   <div class="example" id="example-1567">
    <p><strong>Example #4 Stored Procedures and Prepared Statements</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id) VALUES (1), (2), (3)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP PROCEDURE IF EXISTS p"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL p()"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />do {<br />    if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_result</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"---\n"</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_all</span><span style="color: #007700">());<br />        </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br />    }<br />} while (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next_result</span><span style="color: #007700">());</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
---
array(3) {
  [0]=&gt;
  array(1) {
    [0]=&gt;
    int(1)
  }
  [1]=&gt;
  array(1) {
    [0]=&gt;
    int(2)
  }
  [2]=&gt;
  array(1) {
    [0]=&gt;
    int(3)
  }
}
---
array(3) {
  [0]=&gt;
  array(1) {
    [0]=&gt;
    int(2)
  }
  [1]=&gt;
  array(1) {
    [0]=&gt;
    int(3)
  }
  [2]=&gt;
  array(1) {
    [0]=&gt;
    int(4)
  }
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Of course, use of the bind API for fetching is supported as well.
  </p>
  <p class="para">
   <div class="example" id="example-1568">
    <p><strong>Example #5 Stored Procedures and Prepared Statements using bind API</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id) VALUES (1), (2), (3)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP PROCEDURE IF EXISTS p"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"CALL p()"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br />do {<br />    if (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$id_out</span><span style="color: #007700">);<br />        while (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">()) {<br />            echo </span><span style="color: #DD0000">"id = </span><span style="color: #0000BB">$id_out</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />        }<br />    }<br />} while (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next_result</span><span style="color: #007700">());</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
id = 1
id = 2
id = 3
id = 2
id = 3
id = 4
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>See also</strong>
  </p>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span></li>
    <li><span class="methodname"><a href="mysqli.multi-query.php" class="methodname">mysqli::multi_query()</a></span></li>
    <li><span class="methodname"><a href="mysqli.next-result.php" class="methodname">mysqli::next_result()</a></span></li>
    <li><span class="methodname"><a href="mysqli.more-results.php" class="methodname">mysqli::more_results()</a></span></li>
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.quickstart.stored-procedures%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.quickstart.stored-procedures&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124017">  <div class="votes">
    <div id="Vu124017">
    <a href="/manual/vote-note.php?id=124017&amp;page=mysqli.quickstart.stored-procedures&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124017">
    <a href="/manual/vote-note.php?id=124017&amp;page=mysqli.quickstart.stored-procedures&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124017" title="52% like this...">
    2
    </div>
  </div>
  <a href="#124017" class="name">
  <strong class="user"><em>Valverde</em></strong></a><a class="genanchor" href="#124017"> &para;</a><div class="date" title="2019-07-05 08:16"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124017">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// Store procedure call without params<br /><br /></span><span class="default">$MyConnection </span><span class="keyword">= new </span><span class="default">mysqli </span><span class="keyword">(</span><span class="string">"DB_SERVER"</span><span class="keyword">, </span><span class="string">"DB_USER"</span><span class="keyword">, </span><span class="string">"DB_PASS"</span><span class="keyword">, </span><span class="string">"DB_NAME"</span><span class="keyword">);<br /><br /></span><span class="default">mysqli_multi_query </span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">, </span><span class="string">"CALL MyStoreProcedure"</span><span class="keyword">) OR DIE (</span><span class="default">mysqli_error</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">));<br /><br />while (</span><span class="default">mysqli_more_results</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">)) {<br /><br />       if (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_store_result</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">)) {<br /><br />              while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysqli_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) {<br /><br />                     </span><span class="comment">// i.e.: DBTableFieldName="userID"<br />                     </span><span class="keyword">echo </span><span class="string">"row = "</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">[</span><span class="string">"DBTableFieldName"</span><span class="keyword">].</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />                     ....<br /><br />              }<br />              </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />       }<br />       </span><span class="default">mysqli_next_result</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />}<br /></span><span class="default">?&gt;<br /></span>*******************************************************************<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Store procedure call using params<br /><br /></span><span class="default">$MyConnection </span><span class="keyword">= new </span><span class="default">mysqli </span><span class="keyword">(</span><span class="string">"DB_SERVER"</span><span class="keyword">, </span><span class="string">"DB_USER"</span><span class="keyword">, </span><span class="string">"DB_PASS"</span><span class="keyword">, </span><span class="string">"DB_NAME"</span><span class="keyword">);<br /><br /></span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$MyConnection </span><span class="keyword">,</span><span class="string">"SET @p0='"</span><span class="keyword">.</span><span class="default">$MyParam1</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);<br /></span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$MyConnection </span><span class="keyword">,</span><span class="string">"SET @p1='"</span><span class="keyword">.</span><span class="default">$MyParam2</span><span class="keyword">.</span><span class="string">"'"</span><span class="keyword">);<br /></span><span class="default">mysqli_multi_query </span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">, </span><span class="string">"CALL MyStoreProcedure (@p0,@p1)"</span><span class="keyword">) OR DIE (</span><span class="default">mysqli_error</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">));<br /><br />while (</span><span class="default">mysqli_more_results</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">)) {<br /><br />       if (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_store_result</span><span class="keyword">(</span><span class="default">$MyConnection</span><span class="keyword">)) {<br /><br />              while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysqli_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) {<br /><br />                     </span><span class="comment">// i.e.: DBTableFieldName="userID"<br />                     </span><span class="keyword">echo </span><span class="string">"row = "</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">[</span><span class="string">"DBTableFieldName"</span><span class="keyword">].</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />                     ....<br /><br />              }<br />              </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />       }<br />       </span><span class="default">mysqli_next_result</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.quickstart.stored-procedures&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mysqli.quickstart.php">Quick start guide</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.quickstart.dual-interface.php" title="Dual procedural and object-&#8203;oriented interface">Dual procedural and object-&#8203;oriented interface</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.connections.php" title="Connections">Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.statements.php" title="Executing statements">Executing statements</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.prepared-statements.php" title="Prepared Statements">Prepared Statements</a>
                        </li>
                                                <li class="current">
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
