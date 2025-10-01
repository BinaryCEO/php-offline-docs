<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_result::fetch_field_direct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-result.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-result.fetch-field.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-result.fetch-fields.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-result.fetch-field-direct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-result.fetch-field-direct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-result.fetch-field-direct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-result.fetch-field-direct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-result.fetch-field-direct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-result.fetch-field-direct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-result.fetch-field-direct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-result.fetch-field-direct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-result.fetch-field-direct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-result.fetch-field-direct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch meta-data for a single field" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_result::fetch_field_direct - Manual" />
<meta name="twitter:description" content="Fetch meta-data for a single field" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_result::fetch_field_direct - Manual" />
<meta itemprop="description" content="Fetch meta-data for a single field" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch meta-data for a single field" />

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
        <a href="mysqli-result.fetch-fields.php">
          mysqli_result::fetch_fields &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-result.fetch-field.php">
          &laquo; mysqli_result::fetch_field        </a>
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
            <option value='en/mysqli-result.fetch-field-direct.php' selected="selected">English</option>
            <option value='de/mysqli-result.fetch-field-direct.php'>German</option>
            <option value='es/mysqli-result.fetch-field-direct.php'>Spanish</option>
            <option value='fr/mysqli-result.fetch-field-direct.php'>French</option>
            <option value='it/mysqli-result.fetch-field-direct.php'>Italian</option>
            <option value='ja/mysqli-result.fetch-field-direct.php'>Japanese</option>
            <option value='pt_BR/mysqli-result.fetch-field-direct.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-result.fetch-field-direct.php'>Russian</option>
            <option value='tr/mysqli-result.fetch-field-direct.php'>Turkish</option>
            <option value='uk/mysqli-result.fetch-field-direct.php'>Ukrainian</option>
            <option value='zh/mysqli-result.fetch-field-direct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-result.fetch-field-direct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_result::fetch_field_direct</h1>
  <h1 class="refname">mysqli_fetch_field_direct</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_result::fetch_field_direct</span> -- <span class="refname">mysqli_fetch_field_direct</span> &mdash; <span class="dc-title">Fetch meta-data for a single field</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-result.fetch-field-direct-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_result::fetch_field_direct</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_fetch_field_direct</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$index</code></span>): <span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Returns an object which contains field definition information from the
   specified result set.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-result.fetch-field-direct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">result</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli-result.php" class="classname">mysqli_result</a></span>
object returned by <span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span>, <span class="function"><a href="mysqli.store-result.php" class="function">mysqli_store_result()</a></span>,
<span class="function"><a href="mysqli.use-result.php" class="function">mysqli_use_result()</a></span> or <span class="function"><a href="mysqli-stmt.get-result.php" class="function">mysqli_stmt_get_result()</a></span>.</p></dd>
    
     <dt><code class="parameter">index</code></dt>
     <dd>
      <p class="para">
       The field number. This value must be in the range from
       <code class="literal">0</code> to <code class="literal">number of fields - 1</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli-result.fetch-field-direct-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an object which contains field definition information or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   if no field information for specified <code class="parameter">index</code> is
   available.
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


 <div class="refsect1 examples" id="refsect1-mysqli-result.fetch-field-direct-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1664">
   <p><strong>Example #1 Object-oriented style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />    </span><span style="color: #FF8000">/* Get field information for column 'SurfaceArea' */<br />    </span><span style="color: #0000BB">$finfo </span><span style="color: #007700">= </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch_field_direct</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Name:     %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table:    %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"max. Len: %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max_length</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Flags:    %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flags</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Type:     %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">$result</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">close</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
  <div class="example" id="example-1665">
   <p><strong>Example #2 Procedural style</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* check connection */<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">mysqli_connect_errno</span><span style="color: #007700">()) {<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Connect failed: %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">mysqli_connect_error</span><span style="color: #007700">());<br />    exit();<br />}<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, SurfaceArea from Country ORDER BY Name LIMIT 5"</span><span style="color: #007700">;<br /><br />if (</span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #0000BB">$query</span><span style="color: #007700">)) {<br /><br />    </span><span style="color: #FF8000">/* Get field information for column 'SurfaceArea' */<br />    </span><span style="color: #0000BB">$finfo </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_fetch_field_direct</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Name:     %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Table:    %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"max. Len: %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">max_length</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Flags:    %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">flags</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Type:     %d\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$finfo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">type</span><span style="color: #007700">);<br /><br />    </span><span style="color: #0000BB">mysqli_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">/* close connection */<br /></span><span style="color: #0000BB">mysqli_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Name:     SurfaceArea
Table:    Country
max. Len: 10
Flags:    32769
Type:     4</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-result.fetch-field-direct-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-result.field-count.php" class="function" rel="rdfs-seeAlso">mysqli_num_fields()</a> - Gets the number of fields in the result set</span></li>
    <li><span class="function"><a href="mysqli-result.fetch-field.php" class="function" rel="rdfs-seeAlso">mysqli_fetch_field()</a> - Returns the next field in the result set</span></li>
    <li><span class="function"><a href="mysqli-result.fetch-fields.php" class="function" rel="rdfs-seeAlso">mysqli_fetch_fields()</a> - Returns an array of objects representing the fields in a result set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_result/fetch-field-direct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-result.fetch-field-direct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-result.fetch-field-direct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="89117">  <div class="votes">
    <div id="Vu89117">
    <a href="/manual/vote-note.php?id=89117&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89117">
    <a href="/manual/vote-note.php?id=89117&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89117" title="73% like this...">
    16
    </div>
  </div>
  <a href="#89117" class="name">
  <strong class="user"><em>daniel at summit cove dot com</em></strong></a><a class="genanchor" href="#89117"> &para;</a><div class="date" title="2009-02-22 03:36"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89117">
<div class="phpcode"><code><span class="html">Here's a bigger list of data types.  I got this by creating every type I could and calling fetch_fields():<br /><br /><span class="default">&lt;?php<br />$mysql_data_type_hash </span><span class="keyword">= array(<br />    </span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">'tinyint'</span><span class="keyword">,<br />    </span><span class="default">2</span><span class="keyword">=&gt;</span><span class="string">'smallint'</span><span class="keyword">,<br />    </span><span class="default">3</span><span class="keyword">=&gt;</span><span class="string">'int'</span><span class="keyword">,<br />    </span><span class="default">4</span><span class="keyword">=&gt;</span><span class="string">'float'</span><span class="keyword">,<br />    </span><span class="default">5</span><span class="keyword">=&gt;</span><span class="string">'double'</span><span class="keyword">,<br />    </span><span class="default">7</span><span class="keyword">=&gt;</span><span class="string">'timestamp'</span><span class="keyword">,<br />    </span><span class="default">8</span><span class="keyword">=&gt;</span><span class="string">'bigint'</span><span class="keyword">,<br />    </span><span class="default">9</span><span class="keyword">=&gt;</span><span class="string">'mediumint'</span><span class="keyword">,<br />    </span><span class="default">10</span><span class="keyword">=&gt;</span><span class="string">'date'</span><span class="keyword">,<br />    </span><span class="default">11</span><span class="keyword">=&gt;</span><span class="string">'time'</span><span class="keyword">,<br />    </span><span class="default">12</span><span class="keyword">=&gt;</span><span class="string">'datetime'</span><span class="keyword">,<br />    </span><span class="default">13</span><span class="keyword">=&gt;</span><span class="string">'year'</span><span class="keyword">,<br />    </span><span class="default">16</span><span class="keyword">=&gt;</span><span class="string">'bit'</span><span class="keyword">,<br />    </span><span class="comment">//252 is currently mapped to all text and blob types (MySQL 5.0.51a)<br />    </span><span class="default">253</span><span class="keyword">=&gt;</span><span class="string">'varchar'</span><span class="keyword">,<br />    </span><span class="default">254</span><span class="keyword">=&gt;</span><span class="string">'char'</span><span class="keyword">,<br />    </span><span class="default">246</span><span class="keyword">=&gt;</span><span class="string">'decimal'<br /></span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110777">  <div class="votes">
    <div id="Vu110777">
    <a href="/manual/vote-note.php?id=110777&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110777">
    <a href="/manual/vote-note.php?id=110777&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110777" title="81% like this...">
    7
    </div>
  </div>
  <a href="#110777" class="name">
  <strong class="user"><em>ben dot NOSPAM at NOSPAM dot seraphire dot com</em></strong></a><a class="genanchor" href="#110777"> &para;</a><div class="date" title="2012-12-06 04:01"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110777">
<div class="phpcode"><code><span class="html">This may be obvious, but the constants for the field types are already defined in PHP, and can be found in the documentation at: <a href="http://php.net/manual/en/mysqli.constants.php" rel="nofollow" target="_blank">http://php.net/manual/en/mysqli.constants.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="85771">  <div class="votes">
    <div id="Vu85771">
    <a href="/manual/vote-note.php?id=85771&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85771">
    <a href="/manual/vote-note.php?id=85771&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85771" title="80% like this...">
    6
    </div>
  </div>
  <a href="#85771" class="name">
  <strong class="user"><em>cjs at ashdowntech dot com</em></strong></a><a class="genanchor" href="#85771"> &para;</a><div class="date" title="2008-09-16 09:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85771">
<div class="phpcode"><code><span class="html">According to<br /><a href="http://www.redferni.uklinux.net/mysql/MySQL-Protocol.html" rel="nofollow" target="_blank">http://www.redferni.uklinux.net/mysql/MySQL-Protocol.html</a><br /><br />Data type values are:<br /><br />DECIMAL           0       ENUM           247<br />TINY              1       SET            248<br />SHORT             2       TINY_BLOB      249<br />LONG              3       MEDIUM_BLOB    250<br />FLOAT             4       LONG_BLOB      251<br />DOUBLE            5       BLOB           252<br />NULL              6       VAR_STRING     253<br />TIMESTAMP         7       STRING         254<br />LONGLONG          8       GEOMETRY       255<br />INT24             9<br />DATE             10<br />TIME             11<br />DATETIME         12<br />YEAR             13<br />NEWDATE          14<br /><br />Note that this is not tested and does not contain<br />all the values noted by deluxmozart</span></code></div>
  </div>
 </div>
  <div class="note" id="85707">  <div class="votes">
    <div id="Vu85707">
    <a href="/manual/vote-note.php?id=85707&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85707">
    <a href="/manual/vote-note.php?id=85707&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85707" title="77% like this...">
    5
    </div>
  </div>
  <a href="#85707" class="name">
  <strong class="user"><em>cjs at ashdowntech dot com</em></strong></a><a class="genanchor" href="#85707"> &para;</a><div class="date" title="2008-09-12 08:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85707">
<div class="phpcode"><code><span class="html">According to<br />dev.mysql.com/sources/doxygen/mysql-5.1/mysql__com_8h-source.html<br />the flag bits are:<br /> <br /> NOT_NULL_FLAG          1         /* Field can't be NULL */<br /> PRI_KEY_FLAG           2         /* Field is part of a primary key */<br /> UNIQUE_KEY_FLAG        4         /* Field is part of a unique key */<br /> MULTIPLE_KEY_FLAG      8         /* Field is part of a key */<br /> BLOB_FLAG             16         /* Field is a blob */<br /> UNSIGNED_FLAG         32         /* Field is unsigned */<br /> ZEROFILL_FLAG         64         /* Field is zerofill */<br /> BINARY_FLAG          128         /* Field is binary   */<br /> ENUM_FLAG            256         /* field is an enum */<br /> AUTO_INCREMENT_FLAG  512         /* field is a autoincrement field */<br /> TIMESTAMP_FLAG      1024         /* Field is a timestamp */</span></code></div>
  </div>
 </div>
  <div class="note" id="114882">  <div class="votes">
    <div id="Vu114882">
    <a href="/manual/vote-note.php?id=114882&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114882">
    <a href="/manual/vote-note.php?id=114882&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114882" title="62% like this...">
    2
    </div>
  </div>
  <a href="#114882" class="name">
  <strong class="user"><em>andre at koethur dot de</em></strong></a><a class="genanchor" href="#114882"> &para;</a><div class="date" title="2014-04-20 07:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114882">
<div class="phpcode"><code><span class="html">Here are two methods for converting the 'type' and 'flags' attributes to text for debugging purposes. They both use the predefined MYSQLI_ constants to generate the text.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">public static function </span><span class="default">h_type2txt</span><span class="keyword">(</span><span class="default">$type_id</span><span class="keyword">)<br />{<br />    static </span><span class="default">$types</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$types</span><span class="keyword">))<br />    {<br />        </span><span class="default">$types </span><span class="keyword">= array();<br />        </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        foreach (</span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'mysqli'</span><span class="keyword">] as </span><span class="default">$c </span><span class="keyword">=&gt; </span><span class="default">$n</span><span class="keyword">) if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/^MYSQLI_TYPE_(.*)/'</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) </span><span class="default">$types</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    return </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$type_id</span><span class="keyword">, </span><span class="default">$types</span><span class="keyword">)? </span><span class="default">$types</span><span class="keyword">[</span><span class="default">$type_id</span><span class="keyword">] : </span><span class="default">NULL</span><span class="keyword">;<br />}<br /><br />public static function </span><span class="default">h_flags2txt</span><span class="keyword">(</span><span class="default">$flags_num</span><span class="keyword">)<br />{<br />    static </span><span class="default">$flags</span><span class="keyword">;<br /><br />    if (!isset(</span><span class="default">$flags</span><span class="keyword">))<br />    {<br />        </span><span class="default">$flags </span><span class="keyword">= array();<br />        </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />        foreach (</span><span class="default">$constants</span><span class="keyword">[</span><span class="string">'mysqli'</span><span class="keyword">] as </span><span class="default">$c </span><span class="keyword">=&gt; </span><span class="default">$n</span><span class="keyword">) if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/MYSQLI_(.*)_FLAG$/'</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="default">$m</span><span class="keyword">)) if (!</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$flags</span><span class="keyword">)) </span><span class="default">$flags</span><span class="keyword">[</span><span class="default">$n</span><span class="keyword">] = </span><span class="default">$m</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$flags </span><span class="keyword">as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$t</span><span class="keyword">) if (</span><span class="default">$flags_num </span><span class="keyword">&amp; </span><span class="default">$n</span><span class="keyword">) </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$t</span><span class="keyword">;<br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115241">  <div class="votes">
    <div id="Vu115241">
    <a href="/manual/vote-note.php?id=115241&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115241">
    <a href="/manual/vote-note.php?id=115241&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115241" title="60% like this...">
    1
    </div>
  </div>
  <a href="#115241" class="name">
  <strong class="user"><em>gmx dot net at Hoffmann dot P</em></strong></a><a class="genanchor" href="#115241"> &para;</a><div class="date" title="2014-06-18 01:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115241">
<div class="phpcode"><code><span class="html">Warning!<br />This function is not only more memory consuming than expected but the consumption also depends on the size of the result set. So if you realy only want to get your field_names you might want to append " LIMIT 1" or use mysqli-&gt;unbuffered_query() to save yourself from a memory bloat.</span></code></div>
  </div>
 </div>
  <div class="note" id="93159">  <div class="votes">
    <div id="Vu93159">
    <a href="/manual/vote-note.php?id=93159&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93159">
    <a href="/manual/vote-note.php?id=93159&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93159" title="60% like this...">
    1
    </div>
  </div>
  <a href="#93159" class="name">
  <strong class="user"><em>shoresofnowhere at gmail dot com</em></strong></a><a class="genanchor" href="#93159"> &para;</a><div class="date" title="2009-08-26 03:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93159">
<div class="phpcode"><code><span class="html">Beware of the fact that the -&gt;def property NEVER gets filled with the correct default field value, so it's totally USELESS.<br /><br />This happens NOT for a bug in php (so don't go filling in a bug report), but happens BY DESIGN, since the MySQL C API call doesn't fill in this value, unless you call the mysql_list_fields() function, which Php doesn't.<br /><br />See here for reference.<br /><a href="http://dev.mysql.com/doc/refman/5.0/en/c-api-datatypes.html" rel="nofollow" target="_blank">http://dev.mysql.com/doc/refman/5.0/en/c-api-datatypes.html</a><br /><br />Also, be aware that if you're using a query which contains subqueries, the primary key/autoincrement flags do NOT get passed along, even if the field you're looking at is the primary autoincrement key of the master table:<br /><br />SELECT * from (SELECT id from areas) AS subareas<br /><br />and you'll find primary key and autoinc flags off on id field, even if id was the primary autoinc key of areas table.<br /><br />This also is by design, i think, since it's supposed that if we're using a subquery then the primary key/autoinc stuff might have no sense at all, since in the result set we can compose fileds from many different tables.<br /><br />Hoping this is useful, bye!</span></code></div>
  </div>
 </div>
  <div class="note" id="116923">  <div class="votes">
    <div id="Vu116923">
    <a href="/manual/vote-note.php?id=116923&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116923">
    <a href="/manual/vote-note.php?id=116923&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116923" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116923" class="name">
  <strong class="user"><em>anatoliy at ukhvanovy dot name</em></strong></a><a class="genanchor" href="#116923"> &para;</a><div class="date" title="2015-03-21 10:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116923">
<div class="phpcode"><code><span class="html">You can find all available data types here:<br /><a href="https://php.net/manual/ru/mysqli.constants.php" rel="nofollow" target="_blank">https://php.net/manual/ru/mysqli.constants.php</a><br />(search "MYSQLI_TYPE_" in your browser)</span></code></div>
  </div>
 </div>
  <div class="note" id="125162">  <div class="votes">
    <div id="Vu125162">
    <a href="/manual/vote-note.php?id=125162&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125162">
    <a href="/manual/vote-note.php?id=125162&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125162" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125162" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125162"> &para;</a><div class="date" title="2020-07-03 06:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125162">
<div class="phpcode"><code><span class="html">JSON type is 245 if anyone is wondering.</span></code></div>
  </div>
 </div>
  <div class="note" id="99302">  <div class="votes">
    <div id="Vu99302">
    <a href="/manual/vote-note.php?id=99302&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99302">
    <a href="/manual/vote-note.php?id=99302&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99302" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#99302" class="name">
  <strong class="user"><em>bl at example dot com</em></strong></a><a class="genanchor" href="#99302"> &para;</a><div class="date" title="2010-08-09 10:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99302">
<div class="phpcode"><code><span class="html">note that<br />"SELECT &lt;timestamp-field&gt;, ..."<br />will return the field with type 7 (timestamp) but with content like "2010-07-14 14:35:08". the point being it is a string.<br /><br />"SELECT &lt;timestamp-field&gt; + 0, ..."<br />returns a type 5 (double) but while a number, is not seconds since epoch, but a number in MySQL's "YYYYMMDDHHMMSS" format, in this example:<br />20100714143508<br /><br />(PHP 5.2.12)</span></code></div>
  </div>
 </div>
  <div class="note" id="84672">  <div class="votes">
    <div id="Vu84672">
    <a href="/manual/vote-note.php?id=84672&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84672">
    <a href="/manual/vote-note.php?id=84672&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84672" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#84672" class="name">
  <strong class="user"><em>deluxmozart at yahoo dot de</em></strong></a><a class="genanchor" href="#84672"> &para;</a><div class="date" title="2008-07-24 11:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84672">
<div class="phpcode"><code><span class="html">Here are some Numbers of Datatypes. I searched for it but i didn't find a list, where the datatypes of the numbers are listed.<br /><br />so first I can give this:<br /><br />    3    -    Int<br />    10    -    Date<br />    246    -    Decimal<br />    252    -     text<br />    253    -    VarChar<br />    254    -    Boolean</span></code></div>
  </div>
 </div>
  <div class="note" id="92996">  <div class="votes">
    <div id="Vu92996">
    <a href="/manual/vote-note.php?id=92996&amp;page=mysqli-result.fetch-field-direct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92996">
    <a href="/manual/vote-note.php?id=92996&amp;page=mysqli-result.fetch-field-direct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92996" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#92996" class="name">
  <strong class="user"><em>gcdreak at example dot com</em></strong></a><a class="genanchor" href="#92996"> &para;</a><div class="date" title="2009-08-18 03:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92996">
<div class="phpcode"><code><span class="html">I wrote a simple class to get info about fields.<br />Try it!<br /><br /><span class="default">&lt;?php<br />            </span><span class="keyword">class </span><span class="default">MysqlFieldsInfo </span><span class="keyword">implements </span><span class="default">Iterator<br />            </span><span class="keyword">{<br />                <br />                private </span><span class="default">$result</span><span class="keyword">;<br />                private </span><span class="default">$position</span><span class="keyword">;<br />                private </span><span class="default">$row</span><span class="keyword">;<br />                <br />                <br />                function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">){<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">;<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">rewind</span><span class="keyword">();    </span><span class="comment">// W $results wewnętrzny wskaźnik może być przesunięty więc powracamy do początku<br />                </span><span class="keyword">}<br />                <br />                public function </span><span class="default">current</span><span class="keyword">(){<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">row</span><span class="keyword">;<br />                }<br />                <br />                public function </span><span class="default">next</span><span class="keyword">(){<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">++;<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">row </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result</span><span class="keyword">-&gt;</span><span class="default">fetch_field</span><span class="keyword">();    <br />                }<br />                <br />                public function </span><span class="default">valid</span><span class="keyword">(){<br />                    return (boolean) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">row</span><span class="keyword">;<br />                }<br />                <br />                public function </span><span class="default">key</span><span class="keyword">(){<br />                    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position</span><span class="keyword">;<br />                }<br />                <br />                public function </span><span class="default">rewind</span><span class="keyword">(){<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">result</span><span class="keyword">-&gt;</span><span class="default">field_seek</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />                }<br />                <br />                </span><span class="comment">//    This function show data in table<br />                </span><span class="keyword">public function </span><span class="default">export</span><span class="keyword">(){<br />                    <br />                    echo </span><span class="string">'&lt;table id="db_table_info"&gt;'</span><span class="keyword">;<br />                    echo </span><span class="string">'&lt;tr&gt;<br />                                                &lt;th&gt;Name&lt;/th&gt;<br />                                                &lt;th&gt;Orgname&lt;/th&gt;<br />                                                &lt;th&gt;Table&lt;/th&gt;<br />                                                &lt;th&gt;Orgtable&lt;/th&gt;<br />                                                &lt;th&gt;Def&lt;/th&gt;<br />                                                 &lt;th&gt;Max_length&lt;/th&gt;<br />                                                 &lt;th&gt;Length&lt;/th&gt;<br />                                                 &lt;th&gt;Charsetnr&lt;/th&gt;<br />                                                 &lt;th&gt;Flags&lt;/th&gt;<br />                                                 &lt;th&gt;Type&lt;/th&gt;<br />                                                  &lt;th&gt;Decimals&lt;/th&gt;<br />                                          &lt;/tr&gt;'</span><span class="keyword">;<br />                    while(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()){<br />                        echo </span><span class="string">'&lt;tr&gt;'</span><span class="keyword">;<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\n\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">name</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">orgname</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">orgtable</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">def</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">max_length</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">length</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">charsetnr</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">flags</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">type</span><span class="keyword">);<br />                        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"\t&lt;td&gt;%s&lt;/td&gt;\n"</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">current</span><span class="keyword">()-&gt;</span><span class="default">decimals</span><span class="keyword">);<br /><br />                        echo </span><span class="string">'&lt;/tr&gt;'</span><span class="keyword">;        <br />            <br />                        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">next</span><span class="keyword">();<br />                    }<br />                    <br />                    echo </span><span class="string">'&lt;/table&gt;'</span><span class="keyword">;<br />                }<br />            }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-result.fetch-field-direct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.fetch-field-direct.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
