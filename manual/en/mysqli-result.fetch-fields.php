<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_result::fetch_fields - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-result.fetch-fields.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-result.fetch-fields.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.fetch-fields.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-result.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-result.fetch-object.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.fetch-fields.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-result.fetch-fields.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-result.fetch-fields.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-result.fetch-fields.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-result.fetch-fields.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-result.fetch-fields.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-result.fetch-fields.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-result.fetch-fields.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-result.fetch-fields.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-result.fetch-fields.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-result.fetch-fields.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns an array of objects representing the fields in a result set" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_result::fetch_fields - Manual" />
<meta name="twitter:description" content="Returns an array of objects representing the fields in a result set" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_result::fetch_fields - Manual" />
<meta itemprop="description" content="Returns an array of objects representing the fields in a result set" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns an array of objects representing the fields in a result set" />

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
        <a href="mysqli-result.fetch-object.php">
          mysqli_result::fetch_object &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-result.fetch-field-direct.php">
          &laquo; mysqli_result::fetch_field_direct        </a>
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
            <option value='en/mysqli-result.fetch-fields.php' selected="selected">English</option>
            <option value='de/mysqli-result.fetch-fields.php'>German</option>
            <option value='es/mysqli-result.fetch-fields.php'>Spanish</option>
            <option value='fr/mysqli-result.fetch-fields.php'>French</option>
            <option value='it/mysqli-result.fetch-fields.php'>Italian</option>
            <option value='ja/mysqli-result.fetch-fields.php'>Japanese</option>
            <option value='pt_BR/mysqli-result.fetch-fields.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-result.fetch-fields.php'>Russian</option>
            <option value='tr/mysqli-result.fetch-fields.php'>Turkish</option>
            <option value='uk/mysqli-result.fetch-fields.php'>Ukrainian</option>
            <option value='zh/mysqli-result.fetch-fields.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-result.fetch-fields" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_result::fetch_fields</h1>
  <h1 class="refname">mysqli_fetch_fields</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_result::fetch_fields</span> -- <span class="refname">mysqli_fetch_fields</span> &mdash; <span class="dc-title">Returns an array of objects representing the fields in a result set</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-result.fetch-fields-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_result::fetch_fields</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_fetch_fields</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span> <code class="parameter">$result</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>


  <p class="para rdfs-comment">
   This function serves an identical purpose to the 
   <span class="function"><a href="mysqli-result.fetch-field.php" class="function">mysqli_fetch_field()</a></span> function with the single
   difference that, instead of returning one object at a time for each field,
   the columns are returned as an array of objects.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-result.fetch-fields-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-mysqli-result.fetch-fields-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of objects containing field definition information.
  </p>

  <table class="doctable table">
   <caption><strong>Object properties</strong></caption>
   
    <thead>
     <tr>
      <th>Property</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>name</td>
      <td>The name of the column</td>
     </tr>

     <tr>
      <td>orgname</td>
      <td>Original column name if an alias was specified</td>
     </tr>

     <tr>
      <td>table</td>
      <td>The name of the table this field belongs to (if not calculated)</td>
     </tr>

     <tr>
      <td>orgtable</td>
      <td>Original table name if an alias was specified</td>
     </tr>

     <tr>
      <td>def</td>
      <td>Unused. Always an empty string</td>
     </tr>

     <tr>
      <td>db</td>
      <td>The name of the database</td>
     </tr>

     <tr>
      <td>catalog</td>
      <td>Unused. Always <code class="literal">&quot;def&quot;</code></td>
     </tr>

     <tr>
      <td>max_length</td>
      <td>The maximum width of the field for the result set. As of PHP 8.1, this value is always <code class="literal">0</code>.</td>
     </tr>

     <tr>
      <td>length</td>
      <td>
       The width of the field in bytes. For string columns,
       the length value varies on the connection character set. For example,
       if the character set is <code class="literal">latin1</code>, a single-byte character set,
       the length value for a <code class="literal">SELECT &#039;abc&#039;</code> query is 3.
       If the character set is <code class="literal">utf8mb4</code>, a multibyte character
       set in which characters take up to 4 bytes, the length value is 12.
      </td>
     </tr>

     <tr>
      <td>charsetnr</td>
      <td>The character set number for the field.</td>
     </tr>

     <tr>
      <td>flags</td>
      <td>An integer representing the bit-flags for the field.</td>
     </tr>

     <tr>
      <td>type</td>
      <td>The data type used for this field</td>
     </tr>

     <tr>
      <td>decimals</td>
      <td>The number of decimals for numeric fields, and the fractional seconds precision for temporal fields.</td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-mysqli-result.fetch-fields-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1666">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"root"</span><span style="color: #007700">, </span><span style="color: #DD0000">"foofoo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"sakila"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect_errno</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">connect_error</span><span style="color: #007700">);<br />    exit();<br />}<br /><br />foreach (array(</span><span style="color: #DD0000">'latin1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'utf8'</span><span style="color: #007700">) as </span><span style="color: #0000BB">$charset</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// Set character set, to show its impact on some values (e.g., length in bytes)<br />    </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">set_charset</span><span style="color: #007700">(</span><span style="color: #0000BB">$charset</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT actor_id, last_name from actor ORDER BY actor_id"</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">"======================\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"Character Set: </span><span style="color: #0000BB">$charset</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"======================\n"</span><span style="color: #007700">;<br />    <br />    if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />        </span><span style="color: #FF8000">/* Get field information for all columns */<br />        </span><span style="color: #0000BB">$finfo </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_fields</span><span style="color: #007700">();<br /><br />        foreach (</span><span style="color: #0000BB">$finfo </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Name:      %s\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table:     %s\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Max. Len:  %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max_length</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Length:    %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">length</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"charsetnr: %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">charsetnr</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Flags:     %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flags</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Type:      %d\n\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br />        }<br />        </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">free</span><span style="color: #007700">();<br />    }<br />}<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1667">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"sakila"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br />foreach (array(</span><span style="color: #DD0000">'latin1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'utf8'</span><span style="color: #007700">) as </span><span style="color: #0000BB">$charset</span><span style="color: #007700">) {<br /><br />    </span><span style="color: #FF8000">// Set character set, to show its impact on some values (e.g., length in bytes)<br />    </span><span style="color: #0000BB">mysqli_set_charset</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$charset</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT actor_id, last_name from actor ORDER BY actor_id"</span><span style="color: #007700">;<br /><br />    echo </span><span style="color: #DD0000">"======================\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"Character Set: </span><span style="color: #0000BB">$charset</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    echo </span><span style="color: #DD0000">"======================\n"</span><span style="color: #007700">;<br /><br />    if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />        </span><span style="color: #FF8000">/* Get field information for all columns */<br />        </span><span style="color: #0000BB">$finfo </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_fields</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /><br />        foreach (</span><span style="color: #0000BB">$finfo </span><span style="color: #007700">as </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Name:      %s\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table:     %s\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Max. Len:  %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max_length</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Length:    %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">length</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"charsetnr: %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">charsetnr</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Flags:     %d\n"</span><span style="color: #007700">,   </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flags</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Type:      %d\n\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br />        }<br />        </span><span style="color: #0000BB">mysqli_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">mysqli_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">======================
Character Set: latin1
======================
Name:      actor_id
Table:     actor
Max. Len:  3
Length:    5
charsetnr: 63
Flags:     49699
Type:      2

Name:      last_name
Table:     actor
Max. Len:  12
Length:    45
charsetnr: 8
Flags:     20489
Type:      253

======================
Character Set: utf8
======================
Name:      actor_id
Table:     actor
Max. Len:  3
Length:    5
charsetnr: 63
Flags:     49699
Type:      2

Name:      last_name
Table:     actor
Max. Len:  12
Length:    135
charsetnr: 33
Flags:     20489</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-result.fetch-fields-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-result.field-count.php" class="function" rel="rdfs-seeAlso">mysqli_num_fields()</a> - Gets the number of fields in the result set</span></li>
    <li><span class="function"><a href="mysqli-result.fetch-field-direct.php" class="function" rel="rdfs-seeAlso">mysqli_fetch_field_direct()</a> - Fetch meta-data for a single field</span></li>
    <li><span class="function"><a href="mysqli-result.fetch-field.php" class="function" rel="rdfs-seeAlso">mysqli_fetch_field()</a> - Returns the next field in the result set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_result/fetch-fields.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-result.fetch-fields%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-result.fetch-fields&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.fetch-fields.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101828">  <div class="votes">
    <div id="Vu101828">
    <a href="/manual/vote-note.php?id=101828&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101828">
    <a href="/manual/vote-note.php?id=101828&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101828" title="76% like this...">
    16
    </div>
  </div>
  <a href="#101828" class="name">
  <strong class="user"><em>AndrewRoz</em></strong></a><a class="genanchor" href="#101828"> &para;</a><div class="date" title="2011-01-12 08:18"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101828">
<div class="phpcode"><code><span class="html">The field info bit-flags used by MySql are:                                                                                                                                            <br /> (Thanks to ragtag at hotmail dot com)<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />       NOT_NULL_FLAG = 1                                                                              <br />       PRI_KEY_FLAG = 2                                                                               <br />       UNIQUE_KEY_FLAG = 4                                                                            <br />       BLOB_FLAG = 16                                                                                 <br />       UNSIGNED_FLAG = 32                                                                             <br />       ZEROFILL_FLAG = 64                                                                             <br />       BINARY_FLAG = 128                                                                              <br />       ENUM_FLAG = 256                                                                                <br />       AUTO_INCREMENT_FLAG = 512                                                                      <br />       TIMESTAMP_FLAG = 1024                                                                          <br />       SET_FLAG = 2048                                                                                <br />       NUM_FLAG = 32768                                                                               <br />       PART_KEY_FLAG = 16384                                                                          <br />       GROUP_FLAG = 32768                                                                             <br />       UNIQUE_FLAG = 65536<br />*/                                                                            <br /><br />// To test if a flag is set you can use &amp; like so:<br /><br />  </span><span class="default">$meta </span><span class="keyword">= </span><span class="default">$mysqli_result_object</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">();<br />  if (</span><span class="default">$meta</span><span class="keyword">-&gt;</span><span class="default">flags </span><span class="keyword">&amp; </span><span class="default">4</span><span class="keyword">) { <br />     echo </span><span class="string">'Unique key flag is set'</span><span class="keyword">; <br />  } <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114883">  <div class="votes">
    <div id="Vu114883">
    <a href="/manual/vote-note.php?id=114883&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114883">
    <a href="/manual/vote-note.php?id=114883&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114883" title="87% like this...">
    6
    </div>
  </div>
  <a href="#114883" class="name">
  <strong class="user"><em>andre at koethur dot de</em></strong></a><a class="genanchor" href="#114883"> &para;</a><div class="date" title="2014-04-20 07:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114883">
<div class="phpcode"><code><span class="html">Here are two methods for converting the 'type' and 'flags' attributes to text for debugging purposes. They both use the predefined MYSQLI_ constants to generate the text.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public static function </span><span class="default">h_type2txt</span><span class="keyword">(</span><span class="default">$type_id</span><span class="keyword">)<br />{<br />    static </span><span class="default">$types</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$types</span><span class="keyword">))<br />    {<br />        </span><span class="default">$types </span><span class="keyword">= array();<br />        </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        foreach (</span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'mysqli'</span><span class="keyword">] as </span><span class="default">$c </span><span class="keyword">=&gt; </span><span class="default">$n</span><span class="keyword">) if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^MYSQLI_TYPE_(.*)/'</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) </span><span class="default">$types</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$type_id</span><span class="keyword">, </span><span class="default">$types</span><span class="keyword">)? </span><span class="default">$types</span><span class="keyword">[</span><span class="default">$type_id</span><span class="keyword">] : </span><span class="default">NULL</span><span class="keyword">;<br />}<br /><br />public static function </span><span class="default">h_flags2txt</span><span class="keyword">(</span><span class="default">$flags_num</span><span class="keyword">)<br />{<br />    static </span><span class="default">$flags</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$flags</span><span class="keyword">))<br />    {<br />        </span><span class="default">$flags </span><span class="keyword">= array();<br />        </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        foreach (</span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'mysqli'</span><span class="keyword">] as </span><span class="default">$c </span><span class="keyword">=&gt; </span><span class="default">$n</span><span class="keyword">) if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/MYSQLI_(.*)_FLAG$/'</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">)) </span><span class="default">$flags</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$flags </span><span class="keyword">as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$t</span><span class="keyword">) if (</span><span class="default">$flags_num </span><span class="keyword">&amp; </span><span class="default">$n</span><span class="keyword">) </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$t</span><span class="keyword">;<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120045">  <div class="votes">
    <div id="Vu120045">
    <a href="/manual/vote-note.php?id=120045&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120045">
    <a href="/manual/vote-note.php?id=120045&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120045" title="70% like this...">
    4
    </div>
  </div>
  <a href="#120045" class="name">
  <strong class="user"><em>mccharles dot craven at dot dot gov</em></strong></a><a class="genanchor" href="#120045"> &para;</a><div class="date" title="2016-10-14 12:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120045">
<div class="phpcode"><code><span class="html">Those wanting to map the 'type' field in this function for use in mysqli_stmt_bind_param or to cannibalize it for their own mapping may find this function useful.<br /><br />function map_field_type_to_bind_type($field_type)<br />{<br />    switch ($field_type)<br />    {<br />    case MYSQLI_TYPE_DECIMAL:<br />    case MYSQLI_TYPE_NEWDECIMAL:<br />    case MYSQLI_TYPE_FLOAT:<br />    case MYSQLI_TYPE_DOUBLE:<br />        return 'd';<br /><br />    case MYSQLI_TYPE_BIT:<br />    case MYSQLI_TYPE_TINY:<br />    case MYSQLI_TYPE_SHORT:<br />    case MYSQLI_TYPE_LONG:<br />    case MYSQLI_TYPE_LONGLONG:<br />    case MYSQLI_TYPE_INT24:<br />    case MYSQLI_TYPE_YEAR:<br />    case MYSQLI_TYPE_ENUM:<br />        return 'i';<br /><br />    case MYSQLI_TYPE_TIMESTAMP:<br />    case MYSQLI_TYPE_DATE:<br />    case MYSQLI_TYPE_TIME:<br />    case MYSQLI_TYPE_DATETIME:<br />    case MYSQLI_TYPE_NEWDATE:<br />    case MYSQLI_TYPE_INTERVAL:<br />    case MYSQLI_TYPE_SET:<br />    case MYSQLI_TYPE_VAR_STRING:<br />    case MYSQLI_TYPE_STRING:<br />    case MYSQLI_TYPE_CHAR:<br />    case MYSQLI_TYPE_GEOMETRY:<br />        return 's';<br /><br />    case MYSQLI_TYPE_TINY_BLOB:<br />    case MYSQLI_TYPE_MEDIUM_BLOB:<br />    case MYSQLI_TYPE_LONG_BLOB:<br />    case MYSQLI_TYPE_BLOB:<br />        return 'b';<br /><br />    default:<br />        trigger_error("unknown type: $field_type");<br />        return 's';<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="113949">  <div class="votes">
    <div id="Vu113949">
    <a href="/manual/vote-note.php?id=113949&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113949">
    <a href="/manual/vote-note.php?id=113949&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113949" title="56% like this...">
    3
    </div>
  </div>
  <a href="#113949" class="name">
  <strong class="user"><em>educarme at adinet dot com dot uy</em></strong></a><a class="genanchor" href="#113949"> &para;</a><div class="date" title="2013-12-20 01:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113949">
<div class="phpcode"><code><span class="html">Codigos de tipos de datos devueltos por fetch_fields()<br /><br />Nombre        Codigo<br />tinyint_    1<br />boolean_    1<br />smallint_    2<br />int_        3<br />float_        4<br />double_        5<br />real_        5<br />timestamp_    7<br />bigint_        8<br />serial        8<br />mediumint_    9<br />date_        10<br />time_        11<br />datetime_    12<br />year_        13<br />bit_        16<br />decimal_    246<br />text_        252<br />tinytext_    252<br />mediumtext_    252<br />longtext_    252<br />tinyblob_    252<br />mediumblob_    252<br />blob_        252<br />longblob_    252<br />varchar_    253<br />varbinary_    253<br />char_        254<br />binary_        254</span></code></div>
  </div>
 </div>
  <div class="note" id="116738">  <div class="votes">
    <div id="Vu116738">
    <a href="/manual/vote-note.php?id=116738&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116738">
    <a href="/manual/vote-note.php?id=116738&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116738" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#116738" class="name">
  <strong class="user"><em>cz dot paranoiq at gmail dot com</em></strong></a><a class="genanchor" href="#116738"> &para;</a><div class="date" title="2015-02-21 09:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116738">
<div class="phpcode"><code><span class="html">complete list of flags from MySQL source code:<br /><br />NOT_NULL_FLAG   1       /* Field can't be NULL */<br />PRI_KEY_FLAG    2       /* Field is part of a primary key */<br />UNIQUE_KEY_FLAG 4       /* Field is part of a unique key */<br />MULTIPLE_KEY_FLAG 8     /* Field is part of a key */<br />BLOB_FLAG   16      /* Field is a blob */<br />UNSIGNED_FLAG   32      /* Field is unsigned */<br />ZEROFILL_FLAG   64      /* Field is zerofill */<br />BINARY_FLAG 128     /* Field is binary   */<br />ENUM_FLAG   256     /* field is an enum */<br />AUTO_INCREMENT_FLAG 512     /* field is a autoincrement field */<br />TIMESTAMP_FLAG  1024        /* Field is a timestamp */<br />SET_FLAG    2048        /* field is a set */<br />NO_DEFAULT_VALUE_FLAG 4096  /* Field doesn't have default value */<br />ON_UPDATE_NOW_FLAG 8192         /* Field is set to NOW on UPDATE */<br />NUM_FLAG    32768       /* Field is num (for clients) */<br />PART_KEY_FLAG   16384       /* Intern; Part of some key */<br />GROUP_FLAG  32768       /* Intern: Group field */<br />UNIQUE_FLAG 65536       /* Intern: Used by sql_yacc */<br />BINCMP_FLAG 131072      /* Intern: Used by sql_yacc */<br />GET_FIXED_FIELDS_FLAG (1 &lt;&lt; 18) /* Used to get fields in item tree */<br />FIELD_IN_PART_FUNC_FLAG (1 &lt;&lt; 19)/* Field part of partition func */</span></code></div>
  </div>
 </div>
  <div class="note" id="122454">  <div class="votes">
    <div id="Vu122454">
    <a href="/manual/vote-note.php?id=122454&amp;page=mysqli-result.fetch-fields&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122454">
    <a href="/manual/vote-note.php?id=122454&amp;page=mysqli-result.fetch-fields&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122454" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#122454" class="name">
  <strong class="user"><em>attand at gmail dot com</em></strong></a><a class="genanchor" href="#122454"> &para;</a><div class="date" title="2018-02-27 11:15"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122454">
<div class="phpcode"><code><span class="html">The nax_length gives counts in bytes. So if the text is utf-8, then we get incorrect result. <br /><br />We have a code snippet where we check if the maximum length of the field and the max length of data stored becomes equal. This way we can check the potential truncation of data inserted</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-result.fetch-fields&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.fetch-fields.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
                                                <li class="">
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
