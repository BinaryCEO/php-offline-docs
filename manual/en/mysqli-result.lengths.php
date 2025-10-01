<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_result::$lengths - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-result.lengths.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-result.lengths.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.lengths.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-result.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-result.getiterator.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-result.num-rows.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.lengths.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-result.lengths.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-result.lengths.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-result.lengths.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-result.lengths.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-result.lengths.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-result.lengths.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-result.lengths.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-result.lengths.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-result.lengths.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-result.lengths.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the lengths of the columns of the current row in the result set" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_result::$lengths - Manual" />
<meta name="twitter:description" content="Returns the lengths of the columns of the current row in the result set" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_result::$lengths - Manual" />
<meta itemprop="description" content="Returns the lengths of the columns of the current row in the result set" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the lengths of the columns of the current row in the result set" />

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
        <a href="mysqli-result.num-rows.php">
          mysqli_result::$num_rows &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-result.getiterator.php">
          &laquo; mysqli_result::getIterator        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysqli.php'>MySQLi</a></li>      <li><a href='class.mysqli-result.php'>mysqli_result</a></li>      </ul>
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
            <option value='en/mysqli-result.lengths.php' selected="selected">English</option>
            <option value='de/mysqli-result.lengths.php'>German</option>
            <option value='es/mysqli-result.lengths.php'>Spanish</option>
            <option value='fr/mysqli-result.lengths.php'>French</option>
            <option value='it/mysqli-result.lengths.php'>Italian</option>
            <option value='ja/mysqli-result.lengths.php'>Japanese</option>
            <option value='pt_BR/mysqli-result.lengths.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-result.lengths.php'>Russian</option>
            <option value='tr/mysqli-result.lengths.php'>Turkish</option>
            <option value='uk/mysqli-result.lengths.php'>Ukrainian</option>
            <option value='zh/mysqli-result.lengths.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-result.lengths" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_result::$lengths</h1>
  <h1 class="refname">mysqli_fetch_lengths</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_result::$lengths</span> -- <span class="refname">mysqli_fetch_lengths</span> &mdash; <span class="dc-title">Returns the lengths of the columns of the current row in the result set</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-result.lengths-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="fieldsynopsis"><span class="type">?</span><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span><span class="type"></span></span> <var class="varname"><a href="mysqli-result.lengths.php">$mysqli_result-&gt;lengths</a></var>;</div>

  <p class="para">Procedural style</p>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mysqli_fetch_lengths</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span> <code class="parameter">$result</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>mysqli_fetch_lengths()</strong></span> function returns an array
   containing the lengths of every column of the current row within the result
   set.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-result.lengths-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">result</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span>
object returned by <span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span>, <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span>,
<span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span> or <span class="function"><a href="mysqli-stmt.get-result.php" class="function">mysqli_stmt_get_result()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-result.lengths-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array of integers representing the size of each column (not including
   any terminating null characters). <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
  <p class="para">
   <span class="function"><strong>mysqli_fetch_lengths()</strong></span> is valid only for the current
   row of the result set. It returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if you call it before calling
   mysqli_fetch_row/array/object or after retrieving all rows in the result.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-result.lengths-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1674">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * from Country ORDER BY Code LIMIT 1"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />    </span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_row</span><span style="color: #007700">();<br /><br />    </span><span style="color: #FF8000">/* display column lengths */<br />    </span><span style="color: #007700">foreach (</span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">lengths </span><span style="color: #007700">as </span><span style="color: #0000BB">$i </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Field %2d has Length %2d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />    }<br />    </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1675">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * from Country ORDER BY Code LIMIT 1"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />    </span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_row</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><br />    </span><span style="color: #FF8000">/* display column lengths */<br />    </span><span style="color: #007700">foreach (</span><span style="color: #0000BB">mysqli_fetch_lengths</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">) as </span><span style="color: #0000BB">$i </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Field %2d has Length %2d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">+</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$val</span><span style="color: #007700">);<br />    }<br />    </span><span style="color: #0000BB">mysqli_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">mysqli_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Field  1 has Length  3
Field  2 has Length  5
Field  3 has Length 13
Field  4 has Length  9
Field  5 has Length  6
Field  6 has Length  1
Field  7 has Length  6
Field  8 has Length  4
Field  9 has Length  6
Field 10 has Length  6
Field 11 has Length  5
Field 12 has Length 44
Field 13 has Length  7
Field 14 has Length  3
Field 15 has Length  2</pre>
</div>
   </div>
  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_result/lengths.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-result.lengths%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-result.lengths&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.lengths.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.mysqli-result.php">mysqli_result</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mysqli-result.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.current-field.php" title="$current_&#8203;field">$current_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.data-seek.php" title="data_&#8203;seek">data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-all.php" title="fetch_&#8203;all">fetch_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-array.php" title="fetch_&#8203;array">fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-assoc.php" title="fetch_&#8203;assoc">fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-column.php" title="fetch_&#8203;column">fetch_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-field.php" title="fetch_&#8203;field">fetch_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-field-direct.php" title="fetch_&#8203;field_&#8203;direct">fetch_&#8203;field_&#8203;direct</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-fields.php" title="fetch_&#8203;fields">fetch_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-object.php" title="fetch_&#8203;object">fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.fetch-row.php" title="fetch_&#8203;row">fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.field-count.php" title="$field_&#8203;count">$field_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.field-seek.php" title="field_&#8203;seek">field_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.free.php" title="free">free</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.getiterator.php" title="getIterator">getIterator</a>
                        </li>
                                                <li class="current">
                            <a href="mysqli-result.lengths.php" title="$lengths">$lengths</a>
                        </li>
                                                <li class="">
                            <a href="mysqli-result.num-rows.php" title="$num_&#8203;rows">$num_&#8203;rows</a>
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
