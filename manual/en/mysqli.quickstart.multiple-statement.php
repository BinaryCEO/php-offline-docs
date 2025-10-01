<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Multiple Statements - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mysqli.quickstart.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.quickstart.stored-procedures.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.quickstart.transactions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.quickstart.multiple-statement.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.quickstart.multiple-statement.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.quickstart.multiple-statement.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.quickstart.multiple-statement.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.quickstart.multiple-statement.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.quickstart.multiple-statement.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.quickstart.multiple-statement.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.quickstart.multiple-statement.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.quickstart.multiple-statement.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.quickstart.multiple-statement.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Multiple Statements" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Multiple Statements - Manual" />
<meta name="twitter:description" content="Multiple Statements" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Multiple Statements - Manual" />
<meta itemprop="description" content="Multiple Statements" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Multiple Statements" />

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
        <a href="mysqli.quickstart.transactions.php">
          API support for transactions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.quickstart.stored-procedures.php">
          &laquo; Stored Procedures        </a>
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
            <option value='en/mysqli.quickstart.multiple-statement.php' selected="selected">English</option>
            <option value='de/mysqli.quickstart.multiple-statement.php'>German</option>
            <option value='es/mysqli.quickstart.multiple-statement.php'>Spanish</option>
            <option value='fr/mysqli.quickstart.multiple-statement.php'>French</option>
            <option value='it/mysqli.quickstart.multiple-statement.php'>Italian</option>
            <option value='ja/mysqli.quickstart.multiple-statement.php'>Japanese</option>
            <option value='pt_BR/mysqli.quickstart.multiple-statement.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.quickstart.multiple-statement.php'>Russian</option>
            <option value='tr/mysqli.quickstart.multiple-statement.php'>Turkish</option>
            <option value='uk/mysqli.quickstart.multiple-statement.php'>Ukrainian</option>
            <option value='zh/mysqli.quickstart.multiple-statement.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.quickstart.multiple-statement" class="section">
  <h2 class="title">Multiple Statements</h2>
  <p class="para">
   MySQL optionally allows having multiple statements in one statement string, 
   but it requires special handling.
  </p>
  <p class="para">
   Multiple statements or multi queries must be executed
   with <span class="methodname"><a href="mysqli.multi-query.php" class="methodname">mysqli::multi_query()</a></span>. The individual statements
   of the statement string are separated by semicolon.
   Then, all result sets returned by the executed statements must be fetched.
  </p>
  <p class="para">
   The MySQL server allows having statements that do return result sets and
   statements that do not return result sets in one multiple statement.
  </p>
  <p class="para">
   <div class="example" id="example-1569">
    <p><strong>Example #1 Multiple Statements</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE IF EXISTS test"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"CREATE TABLE test(id INT)"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT COUNT(*) AS _num FROM test;<br />        INSERT INTO test(id) VALUES (1); <br />        SELECT COUNT(*) AS _num FROM test; "</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multi_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /><br />do {<br />    if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_all</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_ASSOC</span><span style="color: #007700">));<br />        </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br />    }<br />} while (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next_result</span><span style="color: #007700">());</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
array(1) {
  [0]=&gt;
  array(1) {
    [&quot;_num&quot;]=&gt;
    string(1) &quot;0&quot;
  }
}
array(1) {
  [0]=&gt;
  array(1) {
    [&quot;_num&quot;]=&gt;
    string(1) &quot;1&quot;
  }
}
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>Security considerations</strong>
  </p>
  <p class="para">
   The API functions <span class="methodname"><a href="mysqli.query.php" class="methodname">mysqli::query()</a></span> and
   <span class="methodname"><a href="mysqli.real-query.php" class="methodname">mysqli::real_query()</a></span> do not set a connection flag necessary
   for activating multi queries in the server. An extra API call is used for
   multiple statements to reduce the damage of accidental SQL injection
   attacks. An attacker may try to add statements such as
   <code class="literal">; DROP DATABASE mysql</code> or <code class="literal">; SELECT SLEEP(999)</code>.
   If the attacker succeeds in adding SQL to the statement string but
   <span class="methodname"><a href="mysqli.multi-query.php" class="methodname">mysqli::multi_query()</a></span> is not used, the server will not
   execute the injected and malicious SQL statement.
  </p>
  <p class="para">
   <div class="example" id="example-1570">
    <p><strong>Example #2 SQL Injection</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #DD0000">"user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"database"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT 1; DROP TABLE mysql.user"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
PHP Fatal error:  Uncaught mysqli_sql_exception: You have an error in your SQL syntax; 
check the manual that corresponds to your MySQL server version for the right syntax to 
use near &#039;DROP TABLE mysql.user&#039; at line 1
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   <strong>Prepared statements</strong>
  </p>
  <p class="para">
   Use of the multiple statement with prepared statements is not supported.
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
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.quickstart.multiple-statement%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.quickstart.multiple-statement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="122904">  <div class="votes">
    <div id="Vu122904">
    <a href="/manual/vote-note.php?id=122904&amp;page=mysqli.quickstart.multiple-statement&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122904">
    <a href="/manual/vote-note.php?id=122904&amp;page=mysqli.quickstart.multiple-statement&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122904" title="66% like this...">
    10
    </div>
  </div>
  <a href="#122904" class="name">
  <strong class="user"><em>velthuijsen</em></strong></a><a class="genanchor" href="#122904"> &para;</a><div class="date" title="2018-07-03 07:58"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122904">
<div class="phpcode"><code><span class="html">Suggested improvement(s) to example 1.<br /><br />reasons:<br />Multi_query only returns a non false response if a data/result set is returned and only checks for the first query entered. Switching the first SELECT query with the INSERT query will result in a premature exit of the example with the message "Multi query failed: (0)".<br />The example assumes that once the first query doesn't fail that the other queries have succeeded as well. Or rather it just exits without reporting that one of the queries after the first query failed seeing that if a query fails next_result returns false.<br /><br />The changes in the example comes after the creation of the string $sql.<br /><br /><span class="default">&lt;?php<br />$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"example.com"</span><span class="keyword">, </span><span class="string">"user"</span><span class="keyword">, </span><span class="string">"password"</span><span class="keyword">, </span><span class="string">"database"</span><span class="keyword">);<br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">connect_errno</span><span class="keyword">) {<br />    echo </span><span class="string">"Failed to connect to MySQL: (" </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">connect_errno </span><span class="keyword">. </span><span class="string">") " </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">connect_error</span><span class="keyword">;<br />}<br /><br />if (!</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"DROP TABLE IF EXISTS test"</span><span class="keyword">) || !</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"CREATE TABLE test(id INT)"</span><span class="keyword">)) {<br />    echo </span><span class="string">"Table creation failed: (" </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">errno </span><span class="keyword">. </span><span class="string">") " </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT COUNT(*) AS _num FROM test; "</span><span class="keyword">;<br /></span><span class="default">$sql</span><span class="keyword">.= </span><span class="string">"INSERT INTO test(id) VALUES (1); "</span><span class="keyword">;<br /></span><span class="default">$sql</span><span class="keyword">.= </span><span class="string">"SELECT COUNT(*) AS _num FROM test; "</span><span class="keyword">;<br /><br /></span><span class="comment">// changes to example 1 start here<br /><br />// don't bother checking the result from multi_query since it will return false<br />// if the first query does not return data even if the query itself succeeds.<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br />do </span><span class="comment">// while (true); // exit only on error or when there are no more queries to process<br /></span><span class="keyword">{<br />    </span><span class="comment">// check if query currently being processed hasn't failed<br />    </span><span class="keyword">if (</span><span class="default">0 </span><span class="keyword">!== </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">errno</span><span class="keyword">)<br />    {<br />        echo </span><span class="string">"Multi query failed: (" </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">errno </span><span class="keyword">. </span><span class="string">") " </span><span class="keyword">. </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">;<br />        break;<br />    }<br /><br />    </span><span class="comment">// store and possibly process result of the query,<br />    // both store_result &amp; use_result will return false <br />    // for queries that do not return results (INSERT for example)<br />    </span><span class="keyword">if(</span><span class="default">false </span><span class="keyword">!== (</span><span class="default">$res </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">() )<br />    {<br />        </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">fetch_all</span><span class="keyword">(</span><span class="default">MYSQLI_ASSOC</span><span class="keyword">));<br />            </span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />    }<br /><br />    </span><span class="comment">// exit loop if there ar no more queries to process<br />    </span><span class="keyword">if (</span><span class="default">false </span><span class="keyword">=== (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() )<br />    {<br />        break;<br />    }<br /><br />    </span><span class="comment">// get result of the next query to process<br />    // don't bother to check for success/failure of the result<br />    // since at the start of the loop there is an error check &amp;<br />    // report block.<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()<br /><br />} while (</span><span class="default">true</span><span class="keyword">); </span><span class="comment">// exit only on error or when there are no more queries to process<br /></span><span class="default">?&gt;<br /></span><br />Note that the normal while ($mysqli-&gt;more_results() &amp;&amp; $mysqli-&gt;next_result() has been replaced by two checks and  while (true);<br />This is due to the 'problem' that next_result will return false if the query in question failed.<br />So one either needs to do one last check after the while loop to check if there was an error or one has to split up the different actions.<br />The changes in the example do the splitting.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.quickstart.multiple-statement&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.quickstart.multiple-statement.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="mysqli.quickstart.stored-procedures.php" title="Stored Procedures">Stored Procedures</a>
                        </li>
                                                <li class="current">
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
