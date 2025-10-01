<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Prepared Statements - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mysqli.quickstart.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.quickstart.statements.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.quickstart.prepared-statements.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.quickstart.prepared-statements.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.quickstart.prepared-statements.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.quickstart.prepared-statements.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.quickstart.prepared-statements.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.quickstart.prepared-statements.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.quickstart.prepared-statements.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.quickstart.prepared-statements.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.quickstart.prepared-statements.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.quickstart.prepared-statements.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepared Statements" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Prepared Statements - Manual" />
<meta name="twitter:description" content="Prepared Statements" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Prepared Statements - Manual" />
<meta itemprop="description" content="Prepared Statements" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepared Statements" />

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
        <a href="mysqli.quickstart.stored-procedures.php">
          Stored Procedures &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.quickstart.statements.php">
          &laquo; Executing statements        </a>
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
            <option value='en/mysqli.quickstart.prepared-statements.php' selected="selected">English</option>
            <option value='de/mysqli.quickstart.prepared-statements.php'>German</option>
            <option value='es/mysqli.quickstart.prepared-statements.php'>Spanish</option>
            <option value='fr/mysqli.quickstart.prepared-statements.php'>French</option>
            <option value='it/mysqli.quickstart.prepared-statements.php'>Italian</option>
            <option value='ja/mysqli.quickstart.prepared-statements.php'>Japanese</option>
            <option value='pt_BR/mysqli.quickstart.prepared-statements.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.quickstart.prepared-statements.php'>Russian</option>
            <option value='tr/mysqli.quickstart.prepared-statements.php'>Turkish</option>
            <option value='uk/mysqli.quickstart.prepared-statements.php'>Ukrainian</option>
            <option value='zh/mysqli.quickstart.prepared-statements.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.quickstart.prepared-statements" class="section">
  <h2 class="title">Prepared Statements</h2>
  <p class="para">
   The MySQL database supports prepared statements. A prepared statement
   or a parameterized statement is used to execute the same statement
   repeatedly with high efficiency and protect against SQL injections.
  </p>
  <p class="para">
   <strong>Basic workflow</strong>
  </p>
  <p class="para">
   The prepared statement execution consists of two stages:
   prepare and execute. At the prepare stage a statement template is sent
   to the database server. The server performs a syntax check and initializes
   server internal resources for later use.
  </p>
  <p class="para">
   The MySQL server supports using anonymous, positional placeholder
   with <code class="literal">?</code>.
  </p>
  <p class="para">
   Prepare is followed by execute. During execute the client binds
   parameter values and sends them to the server. The server executes
   the statement with the bound values using the previously created internal resources.
  </p>
  <p class="para">
   <div class="example" id="example-1557">
    <p><strong>Example #1 Prepared statement</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Prepared statement, stage 1: prepare */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (?, ?)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Prepared statement, stage 2: bind and execute */<br /></span><span style="color: #0000BB">$id </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$label </span><span style="color: #007700">= </span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"is"</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$label</span><span style="color: #007700">); </span><span style="color: #FF8000">// "is" means that $id is bound as an integer and $label as a string<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <strong>Repeated execution</strong>
  </p>
  <p class="para">
   A prepared statement can be executed repeatedly. Upon every execution
   the current value of the bound variable is evaluated and sent to the server.
   The statement is not parsed again. The statement template is not
   transferred to the server again.
  </p>
  <p class="para">
   <div class="example" id="example-1558">
    <p><strong>Example #2 INSERT prepared once, executed multiple times</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Prepared statement, stage 1: prepare */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (?, ?)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Prepared statement, stage 2: bind and execute */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"is"</span><span style="color: #007700">, </span><span style="color: #0000BB">$id</span><span style="color: #007700">, </span><span style="color: #0000BB">$label</span><span style="color: #007700">); </span><span style="color: #FF8000">// "is" means that $id is bound as an integer and $label as a string<br /><br /></span><span style="color: #0000BB">$data </span><span style="color: #007700">= [<br />    </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Java'</span><span style="color: #007700">,<br />    </span><span style="color: #0000BB">3 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'C++'<br /></span><span style="color: #007700">];<br />foreach (</span><span style="color: #0000BB">$data </span><span style="color: #007700">as </span><span style="color: #0000BB">$id </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$label</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT id, label FROM test'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_ASSOC</span><span style="color: #007700">));</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(3) {
  [0]=&gt;
  array(2) {
    [&quot;id&quot;]=&gt;
    string(1) &quot;1&quot;
    [&quot;label&quot;]=&gt;
    string(3) &quot;PHP&quot;
  }
  [1]=&gt;
  array(2) {
    [&quot;id&quot;]=&gt;
    string(1) &quot;2&quot;
    [&quot;label&quot;]=&gt;
    string(4) &quot;Java&quot;
  }
  [2]=&gt;
  array(2) {
    [&quot;id&quot;]=&gt;
    string(1) &quot;3&quot;
    [&quot;label&quot;]=&gt;
    string(3) &quot;C++&quot;
  }
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Every prepared statement occupies server resources.
   Statements should be closed explicitly immediately after use.
   If not done explicitly, the statement will be closed when the
   statement handle is freed by PHP.
  </p>
  <p class="para">
   Using a prepared statement is not always the most efficient
   way of executing a statement. A prepared statement executed only
   once causes more client-server round-trips than a non-prepared statement.
   This is why the <code class="literal">SELECT</code> is not run as a
   prepared statement above.
  </p>
  <p class="para">
   Also, consider the use of the MySQL multi-INSERT SQL syntax for INSERTs.
   For the example, multi-INSERT requires fewer round-trips between
   the server and client than the prepared statement shown above.
  </p>
  <p class="para">	
   <div class="example" id="example-1559">	
    <p><strong>Example #3 Less round trips using multi-INSERT SQL</strong></p>	
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$values </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id) VALUES (?), (?), (?), (?)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">'iiii'</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$values</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();</span></span></code></div>
    </div>
	
   </div>	
  </p>
  <p class="para">
   <strong>Result set values data types</strong>
  </p>
  <p class="para">
   The MySQL Client Server Protocol defines a different data transfer protocol
   for prepared statements and non-prepared statements. Prepared statements
   are using the so called binary protocol. The MySQL server sends result
   set data &quot;as is&quot; in binary format. Results are not serialized into
   strings before sending. Client libraries receive binary data and try to convert the values into
   appropriate PHP data types. For example, results from an SQL
   <code class="literal">INT</code> column will be provided as PHP integer variables.
  </p>
  <p class="para">
   <div class="example" id="example-1560">
    <p><strong>Example #4 Native datatypes</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (1, 'PHP')"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, label FROM test WHERE id = 1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_result</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"id = %s (%s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">], </span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"label = %s (%s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">], </span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'label'</span><span style="color: #007700">]));</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
id = 1 (integer)
label = PHP (string)
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   This behavior differs from non-prepared statements. By default,
   non-prepared statements return all results as strings.
   This default can be changed using a connection option.
   If the connection option is used, there are no differences.
  </p>
  <p class="para">
   <strong>Fetching results using bound variables</strong>
  </p>
  <p class="para">
   Results from prepared statements can either be retrieved by
   binding output variables, or by requesting a <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> object.
  </p>
  <p class="para">
   Output variables must be bound after statement execution.
   One variable must be bound for every column of the statements result set.
  </p>
  <p class="para">
   <div class="example" id="example-1561">
    <p><strong>Example #5 Output variable binding</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (1, 'PHP')"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, label FROM test WHERE id = 1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$out_id</span><span style="color: #007700">, </span><span style="color: #0000BB">$out_label</span><span style="color: #007700">);<br /><br />while (</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"id = %s (%s), label = %s (%s)\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$out_id</span><span style="color: #007700">, </span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$out_id</span><span style="color: #007700">), </span><span style="color: #0000BB">$out_label</span><span style="color: #007700">, </span><span style="color: #0000BB">gettype</span><span style="color: #007700">(</span><span style="color: #0000BB">$out_label</span><span style="color: #007700">));<br />}</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
id = 1 (integer), label = PHP (string)
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Prepared statements return unbuffered result sets by default.
   The results of the statement are not implicitly fetched and transferred
   from the server to the client for client-side buffering. The result set
   takes server resources until all results have been fetched by the client.
   Thus it is recommended to consume results timely. If a client fails to fetch all
   results or the client closes the statement before having fetched all data,
   the data has to be fetched implicitly by <code class="literal">mysqli</code>.
  </p>
  <p class="para">
   It is also possible to buffer the results of a prepared statement
   using <span class="methodname"><a href="mysqli-stmt.store-result.php" class="methodname">mysqli_stmt::store_result()</a></span>.
  </p>
  <p class="para">
   <strong>Fetching results using mysqli_result interface</strong>
  </p>
  <p class="para">
   Instead of using bound results, results can also be retrieved through the
   mysqli_result interface. <span class="methodname"><a href="mysqli-stmt.get-result.php" class="methodname">mysqli_stmt::get_result()</a></span>
   returns a buffered result set.
  </p>
  <p class="para">
   <div class="example" id="example-1562">
    <p><strong>Example #6 Using mysqli_result to fetch results</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (1, 'PHP')"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, label FROM test WHERE id = 1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_result</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_ASSOC</span><span style="color: #007700">));</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [0]=&gt;
  array(2) {
    [&quot;id&quot;]=&gt;
    int(1)
    [&quot;label&quot;]=&gt;
    string(3) &quot;PHP&quot;
  }
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   Using the <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span> interface offers the additional benefit of
   flexible client-side result set navigation.
  </p>
  <p class="para">
   <div class="example" id="example-1563">
    <p><strong>Example #7 Buffered result set for flexible read out</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Non-prepared statement */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT, label TEXT)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"INSERT INTO test(id, label) VALUES (1, 'PHP'), (2, 'Java'), (3, 'C++')"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, label FROM test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">get_result</span><span style="color: #007700">();<br /><br />for (</span><span style="color: #0000BB">$row_no </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">num_rows </span><span style="color: #007700">- </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #0000BB">$row_no </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$row_no</span><span style="color: #007700">--) {<br />    </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">data_seek</span><span style="color: #007700">(</span><span style="color: #0000BB">$row_no</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_assoc</span><span style="color: #007700">());<br />}</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(2) {
  [&quot;id&quot;]=&gt;
  int(3)
  [&quot;label&quot;]=&gt;
  string(3) &quot;C++&quot;
}
array(2) {
  [&quot;id&quot;]=&gt;
  int(2)
  [&quot;label&quot;]=&gt;
  string(4) &quot;Java&quot;
}
array(2) {
  [&quot;id&quot;]=&gt;
  int(1)
  [&quot;label&quot;]=&gt;
  string(3) &quot;PHP&quot;
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>Escaping and SQL injection</strong>
  </p>
  <p class="para">
   Bound variables are sent to the server separately from the query and thus
   cannot interfere with it. The server uses these values directly at the point
   of execution, after the statement template is parsed. Bound parameters do not
   need to be escaped as they are never substituted into the query string
   directly. A hint must be provided to the server for the type of bound
   variable, to create an appropriate conversion. 
   See the <span class="methodname"><a href="mysqli-stmt.bind-param.php" class="methodname">mysqli_stmt::bind_param()</a></span> function for more
   information.
  </p>
  <p class="para">
   Such a separation is sometimes considered the only security feature to
   prevent SQL injection, but the same degree of security can be achieved with
   non-prepared statements, if all the values are formatted correctly. It should
   be noted that correct formatting is not the same as escaping and involves
   more logic than simple escaping. Thus, prepared statements are simply a more
   convenient and less error-prone approach to this element of database security.
  </p>
  <p class="para">
   <strong>Client-side prepared statement emulation</strong>
  </p>
  <p class="para">
   The API does not include emulation for client-side prepared statement emulation.
  </p>
  <p class="para">
   <strong>See also</strong>
  </p>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="mysqli.construct.php" class="methodname">mysqli::__construct()</a></span></li>
    <li><span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span></li>
    <li><span class="methodname"><a href="mysqli.prepare.php" class="methodname">mysqli::prepare()</a></span></li>
    <li><span class="methodname"><a href="mysqli-stmt.prepare.php" class="methodname">mysqli_stmt::prepare()</a></span></li>
    <li><span class="methodname"><a href="mysqli-stmt.execute.php" class="methodname">mysqli_stmt::execute()</a></span></li>
    <li><span class="methodname"><a href="mysqli-stmt.bind-param.php" class="methodname">mysqli_stmt::bind_param()</a></span></li>
    <li><span class="methodname"><a href="mysqli-stmt.bind-result.php" class="methodname">mysqli_stmt::bind_result()</a></span></li>
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.quickstart.prepared-statements%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.quickstart.prepared-statements&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php">＋<small>add a note</small></a></span>
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
                                                <li class="">
                            <a href="mysqli.quickstart.connections.php" title="Connections">Connections</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.quickstart.statements.php" title="Executing statements">Executing statements</a>
                        </li>
                                                <li class="current">
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
