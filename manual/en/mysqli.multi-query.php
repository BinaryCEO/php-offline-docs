<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::multi_query - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.multi-query.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.multi-query.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.multi-query.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.more-results.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.next-result.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.multi-query.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.multi-query.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.multi-query.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.multi-query.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.multi-query.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.multi-query.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.multi-query.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.multi-query.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.multi-query.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.multi-query.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.multi-query.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Performs one or more queries on the database" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::multi_query - Manual" />
<meta name="twitter:description" content="Performs one or more queries on the database" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::multi_query - Manual" />
<meta itemprop="description" content="Performs one or more queries on the database" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Performs one or more queries on the database" />

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
        <a href="mysqli.next-result.php">
          mysqli::next_result &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.more-results.php">
          &laquo; mysqli::more_results        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli.php'>mysqli</a></li>      </ul>
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
            <option value='en/mysqli.multi-query.php' selected="selected">English</option>
            <option value='de/mysqli.multi-query.php'>German</option>
            <option value='es/mysqli.multi-query.php'>Spanish</option>
            <option value='fr/mysqli.multi-query.php'>French</option>
            <option value='it/mysqli.multi-query.php'>Italian</option>
            <option value='ja/mysqli.multi-query.php'>Japanese</option>
            <option value='pt_BR/mysqli.multi-query.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.multi-query.php'>Russian</option>
            <option value='tr/mysqli.multi-query.php'>Turkish</option>
            <option value='uk/mysqli.multi-query.php'>Ukrainian</option>
            <option value='zh/mysqli.multi-query.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.multi-query" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::multi_query</h1>
  <h1 class="refname">mysqli_multi_query</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::multi_query</span> -- <span class="refname">mysqli_multi_query</span> &mdash; <span class="dc-title">Performs one or more queries on the database</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.multi-query-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::multi_query</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_multi_query</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Executes one or multiple queries which are concatenated by a semicolon.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
<h1 class="title">Security warning: SQL injection</h1><p class="para">If the query contains any variable
input then <a href="mysqli.quickstart.prepared-statements.php" class="link">parameterized
prepared statements</a> should be used instead. Alternatively, the
data must be properly formatted and all strings must be escaped using
the <span class="function"><a href="mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span>
function.</p></div>
  <p class="para">
   Queries are sent asynchronously in a single call to the database, but the
   database processes them sequentially.
   <span class="methodname"><strong>mysqli_multi_query()</strong></span> waits for the first query to
   complete before returning control to PHP. The MySQL server will then process
   the next query in the sequence. Once the next result is ready, MySQL will wait
   for the next execution of <span class="function"><a href="mysqli.next-result.php" class="function">mysqli_next_result()</a></span> from PHP.
  </p>
  <p class="para">
   It is recommended to use
   <a href="control-structures.do.while.php" class="link">do-while</a> to process multiple
   queries. The connection will be busy until all queries have completed and
   their results are fetched to PHP. No other statement can be issued on the
   same connection until all queries are processed.
   To proceed to the next query in the sequence, use
   <span class="function"><a href="mysqli.next-result.php" class="function">mysqli_next_result()</a></span>. If the next result is not ready yet,
   mysqli will wait for the response from the MySQL server.
   To check if there are more results,
   use <span class="function"><a href="mysqli.more-results.php" class="function">mysqli_more_results()</a></span>.
  </p>
  <p class="para">
   For queries which produce a result set, such as
   <code class="literal">SELECT, SHOW, DESCRIBE</code> or
   <code class="literal">EXPLAIN</code>,
   <span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span> or <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span>
   can be used to retrieve the result set. For queries which do not produce a
   result set, the same functions can be used to retrieve information such as
   the number of affected rows.
  </p>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    Executing <code class="literal">CALL</code> statements for stored procedures can
    produce multiple result sets. If the stored procedure contains
    <code class="literal">SELECT</code> statements, the result sets are returned in the
    order that they are produced as the procedure executes. In general, the
    caller cannot know how many result sets a procedure will return and must be
    prepared to retrieve multiple results. The final result from the procedure
    is a status result that includes no result set. The status indicates whether
    the procedure succeeded or an error occurred.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.multi-query-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       A string containing the queries to be executed.
       Multiple queries must be separated by a semicolon.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.multi-query-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the first statement failed.
   To retrieve subsequent errors from other statements you have to call
   <span class="function"><a href="mysqli.next-result.php" class="function">mysqli_next_result()</a></span> first.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.multi-query-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.multi-query-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1605">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli::multi_query()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT CURRENT_USER();"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">.= </span><span style="color: #DD0000">"SELECT Name FROM City ORDER BY ID LIMIT 20, 5"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* execute multi query */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">multi_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />do {<br />    </span><span style="color: #FF8000">/* store the result set in PHP */<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">store_result</span><span style="color: #007700">()) {<br />        while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_row</span><span style="color: #007700">()) {<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />        }<br />    }<br />    </span><span style="color: #FF8000">/* print divider */<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">more_results</span><span style="color: #007700">()) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"-----------------\n"</span><span style="color: #007700">);<br />    }<br />} while (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">next_result</span><span style="color: #007700">());</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT CURRENT_USER();"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">.= </span><span style="color: #DD0000">"SELECT Name FROM City ORDER BY ID LIMIT 20, 5"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* execute multi query */<br /></span><span style="color: #0000BB">mysqli_multi_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />do {<br />    </span><span style="color: #FF8000">/* store the result set in PHP */<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_store_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">)) {<br />        while (</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_row</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">)) {<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br />        }<br />    }<br />    </span><span style="color: #FF8000">/* print divider */<br />    </span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_more_results</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"-----------------\n"</span><span style="color: #007700">);<br />    }<br />} while (</span><span style="color: #0000BB">mysqli_next_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">));</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">my_user@localhost
-----------------
Amersfoort
Maastricht
Dordrecht
Leiden
Haarlemmermeer</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.multi-query-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.query.php" class="function" rel="rdfs-seeAlso">mysqli_query()</a> - Performs a query on the database</span></li>
    <li><span class="function"><a href="mysqli.use-result.php" class="function" rel="rdfs-seeAlso">mysqli_use_result()</a> - Initiate a result set retrieval</span></li>
    <li><span class="function"><a href="mysqli.store-result.php" class="function" rel="rdfs-seeAlso">mysqli_store_result()</a> - Transfers a result set from the last query</span></li>
    <li><span class="function"><a href="mysqli.next-result.php" class="function" rel="rdfs-seeAlso">mysqli_next_result()</a> - Prepare next result from multi_query</span></li>
    <li><span class="function"><a href="mysqli.more-results.php" class="function" rel="rdfs-seeAlso">mysqli_more_results()</a> - Check if there are any more query results from a multi query</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/multi-query.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.multi-query%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.multi-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.multi-query.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">23 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102837">  <div class="votes">
    <div id="Vu102837">
    <a href="/manual/vote-note.php?id=102837&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102837">
    <a href="/manual/vote-note.php?id=102837&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102837" title="84% like this...">
    158
    </div>
  </div>
  <a href="#102837" class="name">
  <strong class="user"><em>jcn50</em></strong></a><a class="genanchor" href="#102837"> &para;</a><div class="date" title="2011-03-09 05:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102837">
<div class="phpcode"><code><span class="html">WATCH OUT: if you mix $mysqli-&gt;multi_query and $mysqli-&gt;query, the latter(s) won't be executed!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// BAD CODE:<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="string">" Many SQL queries ; "</span><span class="keyword">); </span><span class="comment">// OK<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #1 ; "</span><span class="keyword">) </span><span class="comment">// not executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #2 ; "</span><span class="keyword">) </span><span class="comment">// not executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #3 ; "</span><span class="keyword">) </span><span class="comment">// not executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #4 ; "</span><span class="keyword">) </span><span class="comment">// not executed!<br /></span><span class="default">?&gt;<br /></span><br />The only way to do this correctly is:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// WORKING CODE:<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="string">" Many SQL queries ; "</span><span class="keyword">); </span><span class="comment">// OK<br /></span><span class="keyword">while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) {;} </span><span class="comment">// flush multi_queries<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #1 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #2 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #3 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #4 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113840">  <div class="votes">
    <div id="Vu113840">
    <a href="/manual/vote-note.php?id=113840&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113840">
    <a href="/manual/vote-note.php?id=113840&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113840" title="73% like this...">
    20
    </div>
  </div>
  <a href="#113840" class="name">
  <strong class="user"><em>Ivan Gabriele</em></strong></a><a class="genanchor" href="#113840"> &para;</a><div class="date" title="2013-12-07 04:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113840">
<div class="phpcode"><code><span class="html">To be able to execute a $mysqli-&gt;query() after a $mysqli-&gt;multi_query() for MySQL &gt; 5.3, I updated the code of jcn50 by this one :<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// WORKING CODE:<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="string">" Many SQL queries ; "</span><span class="keyword">); </span><span class="comment">// OK<br /><br />    </span><span class="keyword">while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) </span><span class="comment">// flush multi_queries<br />    </span><span class="keyword">{<br />        if (!</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">()) break;<br />    }<br /><br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #1 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #2 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #3 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">" SQL statement #4 ; "</span><span class="keyword">) </span><span class="comment">// now executed!<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65810">  <div class="votes">
    <div id="Vu65810">
    <a href="/manual/vote-note.php?id=65810&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65810">
    <a href="/manual/vote-note.php?id=65810&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65810" title="77% like this...">
    5
    </div>
  </div>
  <a href="#65810" class="name">
  <strong class="user"><em>info at ff dot net</em></strong></a><a class="genanchor" href="#65810"> &para;</a><div class="date" title="2006-05-08 04:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65810">
<div class="phpcode"><code><span class="html">Note that you need to use this function to call Stored Procedures!<br /><br />If you experience "lost connection to MySQL server" errors with your Stored Procedure calls then you did not fetch the 'OK' (or 'ERR') message, which is a second result-set from a Stored Procedure call. You have to fetch that result to have no problems with subsequent queries.<br /><br />Bad example, will FAIL now and then on subsequent calls:<br /><span class="default">&lt;?php<br />$sQuery</span><span class="keyword">=</span><span class="string">'CALL exampleSP('</span><span class="default">param</span><span class="string">')'</span><span class="keyword">;<br />if(!</span><span class="default">mysqli_multi_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">,</span><span class="default">$sQuery</span><span class="keyword">))<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">queryError</span><span class="keyword">();<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlResult</span><span class="keyword">=</span><span class="default">mysqli_store_result</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Working example:<br /><span class="default">&lt;?php<br />$sQuery</span><span class="keyword">=</span><span class="string">'CALL exampleSP('</span><span class="default">param</span><span class="string">')'</span><span class="keyword">;<br />if(!</span><span class="default">mysqli_multi_query</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">,</span><span class="default">$sQuery</span><span class="keyword">))<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">queryError</span><span class="keyword">();<br /></span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlResult</span><span class="keyword">=</span><span class="default">mysqli_store_result</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">);<br /><br />if(</span><span class="default">mysqli_more_results</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">))<br />  while(</span><span class="default">mysqli_next_result</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sqlLink</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Of course you can do more with the multiple results then just throwing them away, but for most this will suffice. You could for example make an "sp" function which will kill the 2nd 'ok' result.<br /><br />This nasty 'OK'-message made me spend hours trying to figure out why MySQL server was logging warnings with 'bad packets from client' and PHP mysql_error() with 'Connection lost'. It's a shame the mysqli library does catch this by just doing it for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="111126">  <div class="votes">
    <div id="Vu111126">
    <a href="/manual/vote-note.php?id=111126&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111126">
    <a href="/manual/vote-note.php?id=111126&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111126" title="73% like this...">
    9
    </div>
  </div>
  <a href="#111126" class="name">
  <strong class="user"><em>miqrogroove at gmail dot com</em></strong></a><a class="genanchor" href="#111126"> &para;</a><div class="date" title="2013-01-17 09:40"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111126">
<div class="phpcode"><code><span class="html">Here are more details about error checking and return values from multi_query().  Testing shows that there are some mysqli properties to check for each result:
<br />
<br />affected_rows
<br />errno
<br />error
<br />insert_id
<br />warning_count
<br />
<br />If error or errno are not empty then the remaining queries did not return anything, even though error and errno will appear to be empty if processing further results is continued.
<br />
<br />Also note that get_warnings() will not work with multi_query().  It can only be used after looping through all results, and it will only get the warnings for the last one of the queries and not for any others.  If you need to see or log query warning strings then you must not use multi_query(), because you can only see the warning_count value.</span></code></div>
  </div>
 </div>
  <div class="note" id="71465">  <div class="votes">
    <div id="Vu71465">
    <a href="/manual/vote-note.php?id=71465&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71465">
    <a href="/manual/vote-note.php?id=71465&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71465" title="68% like this...">
    11
    </div>
  </div>
  <a href="#71465" class="name">
  <strong class="user"><em>mjmendoza at grupzero dot tk</em></strong></a><a class="genanchor" href="#71465"> &para;</a><div class="date" title="2006-11-29 10:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71465">
<div class="phpcode"><code><span class="html">I was developing my own CMS and I was having problem with attaching the database' sql file. I thought mysqli_multi_query got bugs where it crashes my MySQL server. I tried to report the bug but it showed that it has duplicate bug reports of other developers. To my surprise, mysqli_multi_query needs to bother with result even if there's none.<br /><br />I finally got it working when I copied the sample and removed somethings. Here is what it looked liked<br /><br /><span class="default">&lt;?php<br />$link </span><span class="keyword">= </span><span class="default">mysqli_connect</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"my_user"</span><span class="keyword">, </span><span class="string">"my_password"</span><span class="keyword">, </span><span class="string">"world"</span><span class="keyword">);<br /><br /></span><span class="comment">/* check connection */<br /></span><span class="keyword">if (</span><span class="default">mysqli_connect_errno</span><span class="keyword">()) {<br />   </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Connect failed: %s\n"</span><span class="keyword">, </span><span class="default">mysqli_connect_error</span><span class="keyword">());<br />   exit();<br />}<br /><br /></span><span class="default">$query  </span><span class="keyword">= </span><span class="string">"CREATE TABLE....;...;... blah blah blah;..."</span><span class="keyword">;<br /><br /></span><span class="comment">/* execute multi query */<br /></span><span class="keyword">if (</span><span class="default">mysqli_multi_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">)) {<br />   do {<br />       </span><span class="comment">/* store first result set */<br />       </span><span class="keyword">if (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_store_result</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">)) {<br />           </span><span class="comment">//do nothing since there's nothing to handle<br />           </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />       }<br />       </span><span class="comment">/* print divider */<br />       </span><span class="keyword">if (</span><span class="default">mysqli_more_results</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">)) {<br />           </span><span class="comment">//I just kept this since it seems useful<br />           //try removing and see for yourself<br />       </span><span class="keyword">}<br />   } while (</span><span class="default">mysqli_next_result</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">));<br />}<br /><br /></span><span class="comment">/* close connection */<br /></span><span class="default">mysqli_close</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />bottom-line: I think mysql_multi_query should only be used for attaching a database. it's hard to handle results from 'SELECT' statements inside a single while loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="114544">  <div class="votes">
    <div id="Vu114544">
    <a href="/manual/vote-note.php?id=114544&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114544">
    <a href="/manual/vote-note.php?id=114544&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114544" title="66% like this...">
    2
    </div>
  </div>
  <a href="#114544" class="name">
  <strong class="user"><em>vicky dot gonsalves at outlook dot com</em></strong></a><a class="genanchor" href="#114544"> &para;</a><div class="date" title="2014-03-05 10:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114544">
<div class="phpcode"><code><span class="html">Following code can be used to resolve <br />mysqli::next_result(): There is no next result set. Please, call mysqli_more_results()/mysqli::more_results() to check whether to call this function/method <br /><br />        $query = "SELECT SOME_COLUMN FROM SOME_TABLE_NAME;";<br />        $query .= "SELECT SOME_OTHER_COLUMN FROM SOME_TABLE_NAME";<br />        /* execute multi query */<br />        if (mysqli_multi_query($this-&gt;conn, $query)) {<br />            $i = true;<br />            do {<br />                /* store first result set */<br />                if ($result = mysqli_store_result($this-&gt;conn)) {<br />                    while ($row = mysqli_fetch_row($result)) {<br />                        printf("%s\n", $row[0]);<br />                    }<br />                    mysqli_free_result($result);<br />                }<br />                /* print divider */<br />                if (mysqli_more_results($this-&gt;conn)) {<br />                    $i = true;<br />                    printf("-----------------\n");<br />                } else {<br />                    $i = false;<br />                }<br />            } while ($i &amp;&amp; mysqli_next_result($this-&gt;conn));<br />        }</span></code></div>
  </div>
 </div>
  <div class="note" id="91677">  <div class="votes">
    <div id="Vu91677">
    <a href="/manual/vote-note.php?id=91677&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91677">
    <a href="/manual/vote-note.php?id=91677&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91677" title="66% like this...">
    1
    </div>
  </div>
  <a href="#91677" class="name">
  <strong class="user"><em>Miles</em></strong></a><a class="genanchor" href="#91677"> &para;</a><div class="date" title="2009-06-22 10:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91677">
<div class="phpcode"><code><span class="html">You can use prepared statements on stored procedures.<br /><br />You just need to flush all the subsequent result sets before closing the statement... so:<br /><br />$mysqli_stmt = $mysqli-&gt;prepare(....);<br /><br />... bind, execute, bind, fetch ...<br /><br />while($mysqli-&gt;more_results())<br />{<br />    $mysqli-&gt;next_result();<br />    $discard = $mysqli-&gt;store_result();<br />}<br /><br />$mysqli_stmt-&gt;close();<br /><br />Hope that helps :o)</span></code></div>
  </div>
 </div>
  <div class="note" id="112778">  <div class="votes">
    <div id="Vu112778">
    <a href="/manual/vote-note.php?id=112778&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112778">
    <a href="/manual/vote-note.php?id=112778&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112778" title="62% like this...">
    4
    </div>
  </div>
  <a href="#112778" class="name">
  <strong class="user"><em>Lubaev K</em></strong></a><a class="genanchor" href="#112778"> &para;</a><div class="date" title="2013-07-22 09:15"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112778">
<div class="phpcode"><code><span class="html">Use generator. <br />PHP 5.5.0<br /><span class="default">&lt;?php<br /></span><span class="comment">// Quick multiQuery func.<br /></span><span class="keyword">function </span><span class="default">multiQuery</span><span class="keyword">( </span><span class="default">mysqli $mysqli</span><span class="keyword">, </span><span class="default">$query </span><span class="keyword">) {<br />    if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">( </span><span class="default">$query </span><span class="keyword">)) {<br />    do {<br />        if (</span><span class="default">$result </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">()) {<br />            while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_row</span><span class="keyword">()) {<br />                foreach (</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) yield </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">;<br />            }<br />            </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />        }<br />    } while( </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() &amp;&amp; </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">() );<br />    }<br />}<br /><br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"OPTIMIZE TABLE `question`;" </span><span class="keyword">.<br />         </span><span class="string">"LOCK TABLES `question` READ;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=2;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=7;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=8;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=9;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=11;" </span><span class="keyword">. <br />         </span><span class="string">"SELECT * FROM `question` WHERE `questionid`=12;" </span><span class="keyword">. <br />         </span><span class="string">"UNLOCK TABLES;" </span><span class="keyword">. <br />         </span><span class="string">"TRUNCATE TABLE `question`;"</span><span class="keyword">;<br /><br /></span><span class="default">$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">'localhost'</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'pswd'</span><span class="keyword">, </span><span class="string">'dbnm'</span><span class="keyword">);<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">set_charset</span><span class="keyword">(</span><span class="string">"cp1251"</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br /></span><span class="keyword">foreach ( </span><span class="default">multiQuery</span><span class="keyword">(</span><span class="default">$mysqli</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">) {<br />    echo </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span>Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="113003">  <div class="votes">
    <div id="Vu113003">
    <a href="/manual/vote-note.php?id=113003&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113003">
    <a href="/manual/vote-note.php?id=113003&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113003" title="61% like this...">
    3
    </div>
  </div>
  <a href="#113003" class="name">
  <strong class="user"><em>keksov at gmail dot com</em></strong></a><a class="genanchor" href="#113003"> &para;</a><div class="date" title="2013-08-17 06:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113003">
<div class="phpcode"><code><span class="html">If you want to create a table with triggers, procedures or functions in one multiline query you may stuck with a error -<br />#1064 - You have an error in your SQL syntax; xxx corresponds to your MySQL server version for the right syntax to use near 'DELIMITER' at line 1<br /><br />The solution is very simple - don't use DELIMITER keyword at all! So, instead of :<br /><br />DELIMITER |<br />CREATE TRIGGER $dbName.$iname BEFORE INSERT ON $table FOR EACH ROW<br />BEGIN<br />    &lt;body&gt;<br />EOT|<br />DELIMITER ;<br /><br />just use :<br /><br />CREATE TRIGGER $dbName.$iname BEFORE INSERT ON $table FOR EACH ROW<br />BEGIN<br />    &lt;body&gt;<br />EOT;<br /><br />For more information read answers at StackOverflow for question #5311141 <br /><br /><a href="http://stackoverflow.com/questions/5311141/how-to-execute-mysql-command-delimiter" rel="nofollow" target="_blank">http://stackoverflow.com/questions/5311141/how-to-execute-mysql-command-delimiter</a></span></code></div>
  </div>
 </div>
  <div class="note" id="114100">  <div class="votes">
    <div id="Vu114100">
    <a href="/manual/vote-note.php?id=114100&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114100">
    <a href="/manual/vote-note.php?id=114100&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114100" title="61% like this...">
    4
    </div>
  </div>
  <a href="#114100" class="name">
  <strong class="user"><em>skunkbad</em></strong></a><a class="genanchor" href="#114100"> &para;</a><div class="date" title="2014-01-10 08:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114100">
<div class="phpcode"><code><span class="html">I appreciate the advice from crmccar at gmail dot com regarding the proper way to check for errors, but I would get an error with his/her code. I fixed it by changing the code a little:<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">( </span><span class="string">'sql/test_' </span><span class="keyword">. </span><span class="default">$id </span><span class="keyword">. </span><span class="string">'_data.sql'</span><span class="keyword">);<br /><br /></span><span class="default">$query_array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="comment">// Run the SQL<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />if( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">( </span><span class="default">$sql </span><span class="keyword">) )<br />{<br />    do {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br /><br />        </span><span class="default">$i</span><span class="keyword">++;<br />    }<br />    while( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() ); <br />}<br /><br />if( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">errno </span><span class="keyword">)<br />{<br />    die(<br />        </span><span class="string">'&lt;h1&gt;ERROR&lt;/h1&gt;<br />        Query #' </span><span class="keyword">. ( </span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">) . </span><span class="string">' of &lt;b&gt;test_' </span><span class="keyword">. </span><span class="default">$id </span><span class="keyword">. </span><span class="string">'_data.sql&lt;/b&gt;:&lt;br /&gt;&lt;br /&gt;<br />        &lt;pre&gt;' </span><span class="keyword">. </span><span class="default">$query_array</span><span class="keyword">[ </span><span class="default">$i </span><span class="keyword">] . </span><span class="string">'&lt;/pre&gt;&lt;br /&gt;&lt;br /&gt; <br />        &lt;span style="color:red;"&gt;' </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">mysqli</span><span class="keyword">-&gt;</span><span class="default">error </span><span class="keyword">. </span><span class="string">'&lt;/span&gt;'<br />    </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106126">  <div class="votes">
    <div id="Vu106126">
    <a href="/manual/vote-note.php?id=106126&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106126">
    <a href="/manual/vote-note.php?id=106126&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106126" title="60% like this...">
    6
    </div>
  </div>
  <a href="#106126" class="name">
  <strong class="user"><em>crmccar at gmail dot com</em></strong></a><a class="genanchor" href="#106126"> &para;</a><div class="date" title="2011-10-12 06:40"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106126">
<div class="phpcode"><code><span class="html">I'd like to reinforce the correct way of catching errors from the queries executed by multi_query(), since the manual's examples don't show it and it's easy to lose UPDATEs, INSERTs, etc. without knowing it.
<br />
<br />$mysqli-&gt;next_result() will return false if it runs out of statements OR if the next statement has an error. Therefore, it's important to check for errors when the loop ends. Also, I believe it's useful to know when and where the loop broke, so consider the following code:
<br />
<br /><span class="default">&lt;?php
<br />$statements </span><span class="keyword">= array(</span><span class="string">"INSERT INTO tablename VALUES ('1', 'one')"</span><span class="keyword">, </span><span class="string">"INSERT INTO tablename VALUES ('2', 'two')"</span><span class="keyword">);
<br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">, </span><span class="default">$statements</span><span class="keyword">))) {
<br />    </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    do {
<br />        </span><span class="default">$i</span><span class="keyword">++;
<br />    } while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">());
<br />}
<br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">errno</span><span class="keyword">) {
<br />    echo </span><span class="string">"Batch execution prematurely ended on statement </span><span class="default">$i</span><span class="string">.\n"</span><span class="keyword">;
<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$statements</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The IF statement on the multi_query() call checks the first result, because next_result() starts at the second.</span></code></div>
  </div>
 </div>
  <div class="note" id="104076">  <div class="votes">
    <div id="Vu104076">
    <a href="/manual/vote-note.php?id=104076&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104076">
    <a href="/manual/vote-note.php?id=104076&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104076" title="57% like this...">
    1
    </div>
  </div>
  <a href="#104076" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#104076"> &para;</a><div class="date" title="2011-05-20 07:25"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104076">
<div class="phpcode"><code><span class="html">If your second or late query returns no result or even if your query is not a valid SQL query, more_results(); returns true in any case.</span></code></div>
  </div>
 </div>
  <div class="note" id="97354">  <div class="votes">
    <div id="Vu97354">
    <a href="/manual/vote-note.php?id=97354&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97354">
    <a href="/manual/vote-note.php?id=97354&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97354" title="55% like this...">
    1
    </div>
  </div>
  <a href="#97354" class="name">
  <strong class="user"><em>Shawn Pyle</em></strong></a><a class="genanchor" href="#97354"> &para;</a><div class="date" title="2010-04-15 09:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97354">
<div class="phpcode"><code><span class="html">Be sure to not send a set of queries that are larger than max_allowed_packet size on your MySQL server. If you do, you'll get an error like: <br />Mysql Error (1153): Got a packet bigger than 'max_allowed_packet' bytes<br /><br />To see your MySQL size limitation, run the following query: show variables like 'max_allowed_packet';<br /><br />or see <a href="http://dev.mysql.com/doc/refman/5.1/en/packet-too-large.html" rel="nofollow" target="_blank">http://dev.mysql.com/doc/refman/5.1/en/packet-too-large.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="130417">  <div class="votes">
    <div id="Vu130417">
    <a href="/manual/vote-note.php?id=130417&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130417">
    <a href="/manual/vote-note.php?id=130417&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130417" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130417" class="name">
  <strong class="user"><em>miqrogroove at gmail dot com</em></strong></a><a class="genanchor" href="#130417"> &para;</a><div class="date" title="2025-07-14 11:40"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130417">
<div class="phpcode"><code><span class="html">Follow-up about MySQL warnings with multi_query():<br /><br />Although get_warnings() will not work with multi_query(), this doesn't totally prevent retrieval of the warnings.  The workaround is to splice ';SHOW WARNINGS;' between every query.  This is necessary because the warning count(s) won't be returned until after the queries are already sent and executed.<br /><br />With that little workaround, every 2nd result set will be a warning list from the previous query.  This adds some overhead that isn't necessary in production, but can be vital for debugging any use of multi_query() during development.<br /><br />Conclusion: If you need to see or log query warning strings then you can either avoid multi_query() or you can manually pull the warning list after every query.</span></code></div>
  </div>
 </div>
  <div class="note" id="110155">  <div class="votes">
    <div id="Vu110155">
    <a href="/manual/vote-note.php?id=110155&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110155">
    <a href="/manual/vote-note.php?id=110155&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110155" title="51% like this...">
    1
    </div>
  </div>
  <a href="#110155" class="name">
  <strong class="user"><em>jlong at carouselchecks dot com</em></strong></a><a class="genanchor" href="#110155"> &para;</a><div class="date" title="2012-09-24 07:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110155">
<div class="phpcode"><code><span class="html">Getting "Error: Commands out of sync; you can't run this command now" after running a multi-query? Make sure you've cleared out the queue of results.<br /><br />Here's what I've used to discard all subsequent results from a multi-query:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">while(</span><span class="default">$dbLink</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() &amp;&amp; </span><span class="default">$dbLink</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) {<br />    </span><span class="default">$extraResult </span><span class="keyword">= </span><span class="default">$dbLink</span><span class="keyword">-&gt;</span><span class="default">use_result</span><span class="keyword">();<br />    if(</span><span class="default">$extraResult </span><span class="keyword">instanceof </span><span class="default">mysqli_result</span><span class="keyword">){<br />        </span><span class="default">$extraResult</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125255">  <div class="votes">
    <div id="Vu125255">
    <a href="/manual/vote-note.php?id=125255&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125255">
    <a href="/manual/vote-note.php?id=125255&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125255" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125255" class="name">
  <strong class="user"><em>ashteroid</em></strong></a><a class="genanchor" href="#125255"> &para;</a><div class="date" title="2020-08-08 10:57"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125255">
<div class="phpcode"><code><span class="html">To get the affected/selected row count from all queries<br /><br />$q = "UPDATE `Review` SET `order` = 1 WHERE id = 600;" // aff 1<br />       .  "UPDATE `Review` SET `order` = 600 WHERE id = 1;" //aff 1<br />    . "SELECT 0;" //for testing, aff rows == -1<br />                    ;<br />    <br />    $affcnt = 0;<br />    $rowcnt = 0;<br />        <br />    $res = $db-&gt;multi_query($q);<br />    if($res == false)<br />        Lib::throw( $q . "\n[" . $db-&gt;errno . "]\n" . $db-&gt;error . "\n" );    <br />    do<br />    {<br />        $affcnt += $db-&gt;affected_rows;<br />        if( isset($res-&gt;num_rows) )<br />            $rowcnt += $res-&gt;num_rows;<br />    }<br />    while( $db-&gt;more_results() &amp;&amp; $res = $db-&gt;next_result() );<br />    //IMPORTANT: call more_results First!, THEN next_result to get new data.<br />        <br />    return $res;</span></code></div>
  </div>
 </div>
  <div class="note" id="119658">  <div class="votes">
    <div id="Vu119658">
    <a href="/manual/vote-note.php?id=119658&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119658">
    <a href="/manual/vote-note.php?id=119658&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119658" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119658" class="name">
  <strong class="user"><em>Stjepan Brbot</em></strong></a><a class="genanchor" href="#119658"> &para;</a><div class="date" title="2016-07-27 11:12"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119658">
<div class="phpcode"><code><span class="html">This example shows how to read data from multiple stored procedures. Here I have two stored procedures proc1() and proc2() and retrieve their data into 2D array:<br /><br /><span class="default">&lt;?php<br /><br />$db</span><span class="keyword">=new </span><span class="default">mysqli</span><span class="keyword">(...);<br /><br /></span><span class="default">$sql</span><span class="keyword">=</span><span class="string">"CALL proc1(...); CALL proc2(...);"</span><span class="keyword">;<br /><br /></span><span class="default">$procs</span><span class="keyword">=[]; </span><span class="comment">//outer array for resultsets (tables)<br /></span><span class="default">$cols</span><span class="keyword">=[]; </span><span class="comment">//inner array for columns (fields)<br /><br /></span><span class="keyword">if(</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">))<br />{<br />  do<br />  {<br />    </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br />    if(</span><span class="default">$rst</span><span class="keyword">=</span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">use_result</span><span class="keyword">())<br />    {<br />      while(</span><span class="default">$row</span><span class="keyword">=</span><span class="default">$rst</span><span class="keyword">-&gt;</span><span class="default">fetch_row</span><span class="keyword">())<br />      {<br />          </span><span class="default">$cols</span><span class="keyword">[]=</span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">//fetch 1st column value<br />          </span><span class="default">$cols</span><span class="keyword">[]=</span><span class="default">$row</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]; </span><span class="comment">//fetch 2nd column value<br />      </span><span class="keyword">}<br />      </span><span class="default">$procs</span><span class="keyword">[]=</span><span class="default">$cols</span><span class="keyword">; </span><span class="comment">//add cols to procedures array<br />    </span><span class="keyword">}<br />  }<br />  while(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">db</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">());<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100018">  <div class="votes">
    <div id="Vu100018">
    <a href="/manual/vote-note.php?id=100018&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100018">
    <a href="/manual/vote-note.php?id=100018&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100018" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100018" class="name">
  <strong class="user"><em>luka8088 at owave dot net</em></strong></a><a class="genanchor" href="#100018"> &para;</a><div class="date" title="2010-09-20 10:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100018">
<div class="phpcode"><code><span class="html">if you don't iterate through all results you get "server has gone away" error message ...<br /><br />to resolve this, in php 5.2 it is enough to use<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// ok for php 5.2<br />  </span><span class="keyword">while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />to drop unwanted results, but in php 5.3 using only this throws<br /><br />mysqli::next_result(): There is no next result set. Please, call mysqli_more_results()/mysqli::more_results() to check whether to call this function/method<br /><br />so it should be replaced with<br /><br /><span class="default">&lt;?php<br />  </span><span class="comment">// ok for php 5.3<br />  </span><span class="keyword">while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() &amp;&amp; </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />I also tried but failed:<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="comment">// can create infinite look in some cases<br />  </span><span class="keyword">while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">())<br />    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br /><br />  </span><span class="comment">// also throws error in some cases<br />  </span><span class="keyword">if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">())<br />    while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">());<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85370">  <div class="votes">
    <div id="Vu85370">
    <a href="/manual/vote-note.php?id=85370&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85370">
    <a href="/manual/vote-note.php?id=85370&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85370" title="100% like this...">
    1
    </div>
  </div>
  <a href="#85370" class="name">
  <strong class="user"><em>jparedes at gmail dot com</em></strong></a><a class="genanchor" href="#85370"> &para;</a><div class="date" title="2008-08-27 09:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85370">
<div class="phpcode"><code><span class="html">It's very important that after executing mysqli_multi_query you have first process the resultsets before sending any another statement to the server, otherwise your<br />socket is still blocked.<br /><br />Please note that even if your multi statement doesn't contain SELECT queries, the server will send result packages containing errorcodes (or OK packet) for single statements.</span></code></div>
  </div>
 </div>
  <div class="note" id="81566">  <div class="votes">
    <div id="Vu81566">
    <a href="/manual/vote-note.php?id=81566&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81566">
    <a href="/manual/vote-note.php?id=81566&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81566" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#81566" class="name">
  <strong class="user"><em>undefined(AT)users(DOT)berlios(DOT)de</em></strong></a><a class="genanchor" href="#81566"> &para;</a><div class="date" title="2008-03-04 04:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81566">
<div class="phpcode"><code><span class="html">mysqli_multi_query handles MySQL Transaction on InnoDB's :-)
<br />
<br /><span class="default">&lt;?php
<br />
<br />$mysqli  </span><span class="keyword">= </span><span class="default">mysqli_connect</span><span class="keyword">( </span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"owner"</span><span class="keyword">, </span><span class="string">"pass"</span><span class="keyword">, </span><span class="string">"db"</span><span class="keyword">, </span><span class="default">3306</span><span class="keyword">, </span><span class="string">"/var/lib/mysql/mysql.sock" </span><span class="keyword">);
<br />
<br /></span><span class="default">$QUERY </span><span class="keyword">= &lt;&lt;&lt;EOT
<br /></span><span class="string">START TRANSACTION;
<br />SELECT @lng:=IF( STRCMP(`main_lang`,'de'), 'en', 'de' )
<br />FROM `main_data` WHERE  ( `main_activ` LIKE 1 ) ORDER BY `main_id` ASC;
<br />SELECT `main_id`, `main_type`, `main_title`, `main_body`, `main_modified`, `main_posted`
<br />FROM `main_data`
<br />WHERE ( `main_type` RLIKE "news|about" AND `main_lang` LIKE @lng AND `main_activ` LIKE 1 )
<br />ORDER BY `main_type` ASC;
<br />COMMIT;
<br /></span><span class="keyword">EOT;
<br />
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="default">mysqli_multi_query</span><span class="keyword">( </span><span class="default">$mysqli</span><span class="keyword">, </span><span class="default">$QUERY </span><span class="keyword">) or die( </span><span class="default">mysqli_error</span><span class="keyword">( </span><span class="default">$mysqli </span><span class="keyword">) );
<br />
<br />if( </span><span class="default">$query </span><span class="keyword">)
<br />{
<br />  do {
<br />    if( </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_store_result</span><span class="keyword">( </span><span class="default">$mysqli </span><span class="keyword">) )
<br />    {
<br />      </span><span class="default">$subresult </span><span class="keyword">= </span><span class="default">mysqli_fetch_assoc</span><span class="keyword">( </span><span class="default">$result </span><span class="keyword">);
<br />      if( ! isset( </span><span class="default">$subresult</span><span class="keyword">[</span><span class="string">'main_id'</span><span class="keyword">] ) )
<br />        continue;
<br />
<br />      foreach( </span><span class="default">$subresult </span><span class="keyword">AS </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">)
<br />      {
<br />        </span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$k </span><span class="keyword">, </span><span class="default">$v </span><span class="keyword">);
<br />      }
<br />    }
<br />  } while ( </span><span class="default">mysqli_next_result</span><span class="keyword">( </span><span class="default">$mysqli </span><span class="keyword">) );
<br />}
<br />
<br /></span><span class="default">mysqli_close</span><span class="keyword">( </span><span class="default">$mysqli </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122571">  <div class="votes">
    <div id="Vu122571">
    <a href="/manual/vote-note.php?id=122571&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122571">
    <a href="/manual/vote-note.php?id=122571&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122571" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#122571" class="name">
  <strong class="user"><em>ASchmidt at Anamera dot net</em></strong></a><a class="genanchor" href="#122571"> &para;</a><div class="date" title="2018-03-31 12:40"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122571">
<div class="phpcode"><code><span class="html">Multi-queries open the potential for a SQL injection. <br /><br />The often cited "fallback" loop:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">while ( </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">more_results</span><span class="keyword">() and </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">() ) {<br />  </span><span class="default">$rs </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">use_result</span><span class="keyword">();<br />  if( </span><span class="default">$rs </span><span class="keyword">instanceof </span><span class="default">\mysqli_result </span><span class="keyword">) {<br />      </span><span class="default">$rs</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />certainly will avoid the dreaded error 2014 "Commands out of sync; you can't run this command now" error. However, that technique will completely disregard the fact that any excess result sets are a likely indication of an infiltrated system.<br /><br />Instead, it may be wise to tightly manage the correct number of expected, individual result sets and throw an exception of more are received.<br /><br />However, it's important to understand that any closing comment (which might have been appended as one defense against command appending) will result in an EXTRA, EMPTY result set.<br /><br />Example:<br /><br />SELECT SQL_CALC_FOUND_ROWS * FROM `table` LIMIT 10; SELECT FOUND_ROWS(); --<br /><br />will produce THREE result sets:<br /><br />#1 - the ten data rows,<br />#2 - the overall row count,<br />#3 - an empty result set, where: FALSE === $db-&gt;use_result(), even though it had been TRUE === ($db-&gt;more_results() and $db-&gt;next_result() ) .</span></code></div>
  </div>
 </div>
  <div class="note" id="115325">  <div class="votes">
    <div id="Vu115325">
    <a href="/manual/vote-note.php?id=115325&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115325">
    <a href="/manual/vote-note.php?id=115325&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115325" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#115325" class="name">
  <strong class="user"><em>levani0101 at yahoo dot com</em></strong></a><a class="genanchor" href="#115325"> &para;</a><div class="date" title="2014-07-05 10:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115325">
<div class="phpcode"><code><span class="html">Please note that there is no need for the semicolon after the last query. That wasted more than hour of my time...</span></code></div>
  </div>
 </div>
  <div class="note" id="116408">  <div class="votes">
    <div id="Vu116408">
    <a href="/manual/vote-note.php?id=116408&amp;page=mysqli.multi-query&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116408">
    <a href="/manual/vote-note.php?id=116408&amp;page=mysqli.multi-query&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116408" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#116408" class="name">
  <strong class="user"><em>jesper at hermandsen dot dk</em></strong></a><a class="genanchor" href="#116408"> &para;</a><div class="date" title="2014-12-29 01:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116408">
<div class="phpcode"><code><span class="html">If you're importing a sql-file with triggers, functions, stored procedures and other stuff, you'll might be using DELIMITER in MySQL.<br />Notice: This function assumes that all delimiters are on it's own line, and that "DELIMITER" are in all caps.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">mysqli_multi_query_file</span><span class="keyword">(</span><span class="default">$mysqli</span><span class="keyword">, </span><span class="default">$filename</span><span class="keyword">) {<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">);<br />    </span><span class="comment">// remove comments<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#/\*.*?\*/#s'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br />    </span><span class="default">$sql </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/^-- .*[\r\n]*/m'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br />    if (</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'/^DELIMITER\s+(\S+)$/m'</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_SET_ORDER </span><span class="keyword">| </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">)) {<br />        </span><span class="default">$prev </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        foreach (</span><span class="default">$matches </span><span class="keyword">as </span><span class="default">$match</span><span class="keyword">) {<br />            </span><span class="default">$sqlPart </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] - </span><span class="default">$index</span><span class="keyword">);<br />            </span><span class="comment">// move cursor after the delimiter<br />            </span><span class="default">$index </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">] + </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />            if (</span><span class="default">$prev </span><span class="keyword">&amp;&amp; </span><span class="default">$prev</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] != </span><span class="string">';'</span><span class="keyword">) {<br />                </span><span class="default">$sqlPart </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$prev</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$sqlPart</span><span class="keyword">);<br />                foreach (</span><span class="default">$sqlPart </span><span class="keyword">as </span><span class="default">$part</span><span class="keyword">) {<br />                    if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">)) { </span><span class="comment">// no empty queries<br />                        </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">);<br />                    }<br />                }<br />            } else {<br />                if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sqlPart</span><span class="keyword">)) { </span><span class="comment">// no empty queries<br />                    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">$sqlPart</span><span class="keyword">);<br />                    while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) {;}<br />                }<br />            }<br />            </span><span class="default">$prev </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">;<br />        }<br />        </span><span class="comment">// run the sql after the last delimiter<br />        </span><span class="default">$sqlPart </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">)-</span><span class="default">$index</span><span class="keyword">);<br />        if (</span><span class="default">$prev </span><span class="keyword">&amp;&amp; </span><span class="default">$prev</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] != </span><span class="string">';'</span><span class="keyword">) {<br />            </span><span class="default">$sqlPart </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$prev</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="default">$sqlPart</span><span class="keyword">);<br />            foreach (</span><span class="default">$sqlPart </span><span class="keyword">as </span><span class="default">$part</span><span class="keyword">) {<br />                if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">)) {<br />                    </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">);<br />                }<br />            }<br />        } else {<br />            if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$sqlPart</span><span class="keyword">)) {<br />                </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">$sqlPart</span><span class="keyword">);<br />                while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) {;}<br />            }<br />        }<br />    } else {<br />        </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">multi_query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br />        while (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()) {;}<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.multi-query&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.multi-query.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli.php">mysqli</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli.affected-rows.php" title="$affected_&#8203;rows">$affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.autocommit.php" title="autocommit">autocommit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.begin-transaction.php" title="begin_&#8203;transaction">begin_&#8203;transaction</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.change-user.php" title="change_&#8203;user">change_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.character-set-name.php" title="character_&#8203;set_&#8203;name">character_&#8203;set_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-errno.php" title="$connect_&#8203;errno">$connect_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.connect-error.php" title="$connect_&#8203;error">$connect_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.debug.php" title="debug">debug</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.dump-debug-info.php" title="dump_&#8203;debug_&#8203;info">dump_&#8203;debug_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.errno.php" title="$errno">$errno</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error.php" title="$error">$error</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.error-list.php" title="$error_&#8203;list">$error_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.execute-query.php" title="execute_&#8203;query">execute_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-charset.php" title="get_&#8203;charset">get_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-info.php" title="$client_&#8203;info">$client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-client-version.php" title="$client_&#8203;version">$client_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-connection-stats.php" title="get_&#8203;connection_&#8203;stats">get_&#8203;connection_&#8203;stats</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-host-info.php" title="$host_&#8203;info">$host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-proto-info.php" title="$protocol_&#8203;version">$protocol_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-info.php" title="$server_&#8203;info">$server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-server-version.php" title="$server_&#8203;version">$server_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.get-warnings.php" title="get_&#8203;warnings">get_&#8203;warnings</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.info.php" title="$info">$info</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.insert-id.php" title="$insert_&#8203;id">$insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.more-results.php" title="more_&#8203;results">more_&#8203;results</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli.multi-query.php" title="multi_&#8203;query">multi_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.next-result.php" title="next_&#8203;result">next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.options.php" title="options">options</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.poll.php" title="poll">poll</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-connect.php" title="real_&#8203;connect">real_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-escape-string.php" title="real_&#8203;escape_&#8203;string">real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.real-query.php" title="real_&#8203;query">real_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.reap-async-query.php" title="reap_&#8203;async_&#8203;query">reap_&#8203;async_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.release-savepoint.php" title="release_&#8203;savepoint">release_&#8203;savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.rollback.php" title="rollback">rollback</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.savepoint.php" title="savepoint">savepoint</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.select-db.php" title="select_&#8203;db">select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.set-charset.php" title="set_&#8203;charset">set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.sqlstate.php" title="$sqlstate">$sqlstate</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.ssl-set.php" title="ssl_&#8203;set">ssl_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stat.php" title="stat">stat</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.stmt-init.php" title="stmt_&#8203;init">stmt_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.store-result.php" title="store_&#8203;result">store_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-id.php" title="$thread_&#8203;id">$thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.thread-safe.php" title="thread_&#8203;safe">thread_&#8203;safe</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.use-result.php" title="use_&#8203;result">use_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="mysqli.warning-count.php" title="$warning_&#8203;count">$warning_&#8203;count</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="mysqli.init.php" title="init">init</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.kill.php" title="kill">kill</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.ping.php" title="ping">ping</a>
                    </li>
                                    <li class="">
                        <a href="mysqli.refresh.php" title="refresh">refresh</a>
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
