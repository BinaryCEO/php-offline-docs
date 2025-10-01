<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: db2_foreign_keys - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.db2-foreign-keys.php">
 <link rel="shorturl" href="https://www.php.net/db2-foreign-keys">
 <link rel="alternate" href="https://www.php.net/db2-foreign-keys" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ibm-db2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.db2-field-width.php">
 <link rel="next" href="https://www.php.net/manual/en/function.db2-free-result.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.db2-foreign-keys.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.db2-foreign-keys.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.db2-foreign-keys.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.db2-foreign-keys.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.db2-foreign-keys.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.db2-foreign-keys.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.db2-foreign-keys.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.db2-foreign-keys.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.db2-foreign-keys.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.db2-foreign-keys.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.db2-foreign-keys.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns a result set listing the foreign keys for a table" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: db2_foreign_keys - Manual" />
<meta name="twitter:description" content="Returns a result set listing the foreign keys for a table" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: db2_foreign_keys - Manual" />
<meta itemprop="description" content="Returns a result set listing the foreign keys for a table" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns a result set listing the foreign keys for a table" />

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
        <a href="function.db2-free-result.php">
          db2_free_result &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.db2-field-width.php">
          &laquo; db2_field_width        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='book.ibm-db2.php'>IBM DB2</a></li>      <li><a href='ref.ibm-db2.php'>IBM DB2 Functions</a></li>      </ul>
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
            <option value='en/function.db2-foreign-keys.php' selected="selected">English</option>
            <option value='de/function.db2-foreign-keys.php'>German</option>
            <option value='es/function.db2-foreign-keys.php'>Spanish</option>
            <option value='fr/function.db2-foreign-keys.php'>French</option>
            <option value='it/function.db2-foreign-keys.php'>Italian</option>
            <option value='ja/function.db2-foreign-keys.php'>Japanese</option>
            <option value='pt_BR/function.db2-foreign-keys.php'>Brazilian Portuguese</option>
            <option value='ru/function.db2-foreign-keys.php'>Russian</option>
            <option value='tr/function.db2-foreign-keys.php'>Turkish</option>
            <option value='uk/function.db2-foreign-keys.php'>Ukrainian</option>
            <option value='zh/function.db2-foreign-keys.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.db2-foreign-keys" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">db2_foreign_keys</h1>
  <p class="verinfo">(PECL ibm_db2 &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">db2_foreign_keys</span> &mdash; <span class="dc-title">
   Returns a result set listing the foreign keys for a table
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.db2-foreign-keys-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>db2_foreign_keys</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$connection</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$qualifier</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$schema</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$table_name</code></span><br>): <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span></div>



  <p class="para rdfs-comment">
   Returns a result set listing the foreign keys for a table.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.db2-foreign-keys-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">connection</code></dt>
     <dd>
      <p class="para">
       A valid connection to an IBM DB2, Cloudscape, or Apache Derby database.
      </p>
     </dd>
    
    
     <dt><code class="parameter">qualifier</code></dt>
     <dd>
      <p class="para">
       A qualifier for DB2 databases running on OS/390 or z/OS servers. For
       other databases, pass <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> or an empty string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">schema</code></dt>
     <dd>
      <p class="para">
       The schema which contains the tables. If <code class="parameter">schema</code>
       is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, <span class="function"><strong>db2_foreign_keys()</strong></span> matches the schema for
       the current connection.
      </p>
     </dd>
    
    
     <dt><code class="parameter">table_name</code></dt>
     <dd>
      <p class="para">
       The name of the table.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.db2-foreign-keys-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a statement resource with a result set containing rows describing
   the foreign keys for the specified table. The result set is composed of the
   following columns:
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Column name</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
       <tr>
        <td>PKTABLE_CAT</td>
        <td>
         Name of the catalog for the table containing the primary key. The
         value is NULL if this table does not have catalogs.
        </td>
       </tr>

       <tr>
        <td>PKTABLE_SCHEM</td>
        <td>
         Name of the schema for the table containing the primary key.
        </td>
       </tr>

       <tr>
        <td>PKTABLE_NAME</td>
        <td>Name of the table containing the primary key.</td>
       </tr>

       <tr>
        <td>PKCOLUMN_NAME</td>
        <td>Name of the column containing the primary key.</td>
       </tr>

       <tr>
        <td>FKTABLE_CAT</td>
        <td>
         Name of the catalog for the table containing the foreign key. The
         value is NULL if this table does not have catalogs.
        </td>
       </tr>

       <tr>
        <td>FKTABLE_SCHEM</td>
        <td>
         Name of the schema for the table containing the foreign key.
        </td>
       </tr>

       <tr>
        <td>FKTABLE_NAME</td>
        <td>Name of the table containing the foreign key.</td>
       </tr>

       <tr>
        <td>FKCOLUMN_NAME</td>
        <td>Name of the column containing the foreign key.</td>
       </tr>

       <tr>
        <td>KEY_SEQ</td>
        <td>1-indexed position of the column in the key.</td>
       </tr>

       <tr>
        <td>UPDATE_RULE</td>
        <td>
         Integer value representing the action applied to the foreign key
         when the SQL operation is UPDATE.
        </td>
       </tr>

       <tr>
        <td>DELETE_RULE</td>
        <td>
         Integer value representing the action applied to the foreign key
         when the SQL operation is DELETE.
        </td>
       </tr>

       <tr>
        <td>FK_NAME</td>
        <td>The name of the foreign key.</td>
       </tr>

       <tr>
        <td>PK_NAME</td>
        <td>The name of the primary key.</td>
       </tr>

       <tr>
        <td>DEFERRABILITY</td>
        <td>
         An integer value representing whether the foreign key deferrability is
         SQL_INITIALLY_DEFERRED, SQL_INITIALLY_IMMEDIATE, or
         SQL_NOT_DEFERRABLE.
        </td>
       </tr>

     </tbody>
    
   </table>


  </p>
 </div>


 

 <div class="refsect1 seealso" id="refsect1-function.db2-foreign-keys-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.db2-column-privileges.php" class="function" rel="rdfs-seeAlso">db2_column_privileges()</a> - Returns a result set listing the columns and associated privileges for a table</span></li>
    <li><span class="function"><a href="function.db2-columns.php" class="function" rel="rdfs-seeAlso">db2_columns()</a> - Returns a result set listing the columns and associated metadata for a table</span></li>
    <li><span class="function"><a href="function.db2-primary-keys.php" class="function" rel="rdfs-seeAlso">db2_primary_keys()</a> - Returns a result set listing primary keys for a table</span></li>
    <li><span class="function"><a href="function.db2-procedure-columns.php" class="function" rel="rdfs-seeAlso">db2_procedure_columns()</a> - Returns a result set listing stored procedure parameters</span></li>
    <li><span class="function"><a href="function.db2-procedures.php" class="function" rel="rdfs-seeAlso">db2_procedures()</a> - Returns a result set listing the stored procedures registered in a database</span></li>
    <li><span class="function"><a href="function.db2-special-columns.php" class="function" rel="rdfs-seeAlso">db2_special_columns()</a> - Returns a result set listing the unique row identifier columns for a table</span></li>
    <li><span class="function"><a href="function.db2-statistics.php" class="function" rel="rdfs-seeAlso">db2_statistics()</a> - Returns a result set listing the index and statistics for a table</span></li>
    <li><span class="function"><a href="function.db2-table-privileges.php" class="function" rel="rdfs-seeAlso">db2_table_privileges()</a> - Returns a result set listing the tables and associated privileges in a database</span></li>
    <li><span class="function"><a href="function.db2-tables.php" class="function" rel="rdfs-seeAlso">db2_tables()</a> - Returns a result set listing the tables and associated metadata in a database</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ibm_db2/functions/db2-foreign-keys.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.db2-foreign-keys%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.db2-foreign-keys&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.db2-foreign-keys.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ibm-db2.php">IBM DB2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.db2-autocommit.php" title="db2_&#8203;autocommit">db2_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-bind-param.php" title="db2_&#8203;bind_&#8203;param">db2_&#8203;bind_&#8203;param</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-client-info.php" title="db2_&#8203;client_&#8203;info">db2_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-close.php" title="db2_&#8203;close">db2_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-column-privileges.php" title="db2_&#8203;column_&#8203;privileges">db2_&#8203;column_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-columns.php" title="db2_&#8203;columns">db2_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-commit.php" title="db2_&#8203;commit">db2_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-error.php" title="db2_&#8203;conn_&#8203;error">db2_&#8203;conn_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-conn-errormsg.php" title="db2_&#8203;conn_&#8203;errormsg">db2_&#8203;conn_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-connect.php" title="db2_&#8203;connect">db2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-cursor-type.php" title="db2_&#8203;cursor_&#8203;type">db2_&#8203;cursor_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-escape-string.php" title="db2_&#8203;escape_&#8203;string">db2_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-exec.php" title="db2_&#8203;exec">db2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-execute.php" title="db2_&#8203;execute">db2_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-array.php" title="db2_&#8203;fetch_&#8203;array">db2_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-assoc.php" title="db2_&#8203;fetch_&#8203;assoc">db2_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-both.php" title="db2_&#8203;fetch_&#8203;both">db2_&#8203;fetch_&#8203;both</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-object.php" title="db2_&#8203;fetch_&#8203;object">db2_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-fetch-row.php" title="db2_&#8203;fetch_&#8203;row">db2_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-display-size.php" title="db2_&#8203;field_&#8203;display_&#8203;size">db2_&#8203;field_&#8203;display_&#8203;size</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-name.php" title="db2_&#8203;field_&#8203;name">db2_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-num.php" title="db2_&#8203;field_&#8203;num">db2_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-precision.php" title="db2_&#8203;field_&#8203;precision">db2_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-scale.php" title="db2_&#8203;field_&#8203;scale">db2_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-type.php" title="db2_&#8203;field_&#8203;type">db2_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-field-width.php" title="db2_&#8203;field_&#8203;width">db2_&#8203;field_&#8203;width</a>
                        </li>
                                                <li class="current">
                            <a href="function.db2-foreign-keys.php" title="db2_&#8203;foreign_&#8203;keys">db2_&#8203;foreign_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-result.php" title="db2_&#8203;free_&#8203;result">db2_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-free-stmt.php" title="db2_&#8203;free_&#8203;stmt">db2_&#8203;free_&#8203;stmt</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-get-option.php" title="db2_&#8203;get_&#8203;option">db2_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-last-insert-id.php" title="db2_&#8203;last_&#8203;insert_&#8203;id">db2_&#8203;last_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-lob-read.php" title="db2_&#8203;lob_&#8203;read">db2_&#8203;lob_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-next-result.php" title="db2_&#8203;next_&#8203;result">db2_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-fields.php" title="db2_&#8203;num_&#8203;fields">db2_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-num-rows.php" title="db2_&#8203;num_&#8203;rows">db2_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pclose.php" title="db2_&#8203;pclose">db2_&#8203;pclose</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-pconnect.php" title="db2_&#8203;pconnect">db2_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-prepare.php" title="db2_&#8203;prepare">db2_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-primary-keys.php" title="db2_&#8203;primary_&#8203;keys">db2_&#8203;primary_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedure-columns.php" title="db2_&#8203;procedure_&#8203;columns">db2_&#8203;procedure_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-procedures.php" title="db2_&#8203;procedures">db2_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-result.php" title="db2_&#8203;result">db2_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-rollback.php" title="db2_&#8203;rollback">db2_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-server-info.php" title="db2_&#8203;server_&#8203;info">db2_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-set-option.php" title="db2_&#8203;set_&#8203;option">db2_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-special-columns.php" title="db2_&#8203;special_&#8203;columns">db2_&#8203;special_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-statistics.php" title="db2_&#8203;statistics">db2_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-error.php" title="db2_&#8203;stmt_&#8203;error">db2_&#8203;stmt_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-stmt-errormsg.php" title="db2_&#8203;stmt_&#8203;errormsg">db2_&#8203;stmt_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-table-privileges.php" title="db2_&#8203;table_&#8203;privileges">db2_&#8203;table_&#8203;privileges</a>
                        </li>
                                                <li class="">
                            <a href="function.db2-tables.php" title="db2_&#8203;tables">db2_&#8203;tables</a>
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
