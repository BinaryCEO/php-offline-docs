<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::prepare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.prepare.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.prepare.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.prepare.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.poll.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.query.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.prepare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.prepare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.prepare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.prepare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.prepare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.prepare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.prepare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.prepare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.prepare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.prepare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.prepare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares an SQL statement for execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::prepare - Manual" />
<meta name="twitter:description" content="Prepares an SQL statement for execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::prepare - Manual" />
<meta itemprop="description" content="Prepares an SQL statement for execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares an SQL statement for execution" />

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
        <a href="mysqli.query.php">
          mysqli::query &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.poll.php">
          &laquo; mysqli::poll        </a>
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
            <option value='en/mysqli.prepare.php' selected="selected">English</option>
            <option value='de/mysqli.prepare.php'>German</option>
            <option value='es/mysqli.prepare.php'>Spanish</option>
            <option value='fr/mysqli.prepare.php'>French</option>
            <option value='it/mysqli.prepare.php'>Italian</option>
            <option value='ja/mysqli.prepare.php'>Japanese</option>
            <option value='pt_BR/mysqli.prepare.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.prepare.php'>Russian</option>
            <option value='tr/mysqli.prepare.php'>Turkish</option>
            <option value='uk/mysqli.prepare.php'>Ukrainian</option>
            <option value='zh/mysqli.prepare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.prepare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::prepare</h1>
  <h1 class="refname">mysqli_prepare</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::prepare</span> -- <span class="refname">mysqli_prepare</span> &mdash; <span class="dc-title">Prepares an SQL statement for execution</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.prepare-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::prepare</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_prepare</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type"><a href="class.mysqli-stmt.php" class="type mysqli_stmt">mysqli_stmt</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Prepares the SQL query, and returns a statement handle to be used for further
   operations on the statement. The query must consist of a single SQL statement.
  </p>
  <p class="para">
   The statement template can contain zero or more question mark
   (<code class="literal">?</code>) parameter markers⁠—also called placeholders.
   The parameter markers must be bound to application variables using
   <span class="function"><a href="mysqli-stmt.bind-param.php" class="function">mysqli_stmt_bind_param()</a></span> before executing the statement.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.prepare-parameters">
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
       The query, as a string. It must consist of a single SQL statement.
      </p>
      <p class="para">
       The SQL statement may contain zero or more parameter markers
       represented by question mark (<code class="literal">?</code>) characters
       at the appropriate positions.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 

       <p class="para">
        The markers are legal only in certain places in SQL statements.
        For example, they are permitted in the <code class="literal">VALUES()</code>
        list of an <code class="literal">INSERT</code> statement (to specify column
        values for a row), or in a comparison with a column in a
        <code class="literal">WHERE</code> clause to specify a comparison value.
        However, they are not permitted for identifiers (such as table or
        column names).
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.prepare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>mysqli_prepare()</strong></span> returns a statement object or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.prepare-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.prepare-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1608">
   <p><strong>Example #1 <span class="methodname"><strong>mysqli::prepare()</strong></span> example</strong></p>
   <div class="example-contents"><p>Object-oriented style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$mysqli </span><span style="color: #007700">= new </span><span style="color: #0000BB">mysqli</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"Amersfoort"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* create a prepared statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">$mysqli</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT District FROM City WHERE Name=?"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind parameters for markers */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_param</span><span style="color: #007700">(</span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* execute query */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* bind result variables */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$district</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch value */<br /></span><span style="color: #0000BB">$stmt</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetch</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s is in district %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>Procedural style</p></div>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />mysqli_report</span><span style="color: #007700">(</span><span style="color: #0000BB">MYSQLI_REPORT_ERROR </span><span style="color: #007700">| </span><span style="color: #0000BB">MYSQLI_REPORT_STRICT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_user"</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"world"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$city </span><span style="color: #007700">= </span><span style="color: #DD0000">"Amersfoort"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* create a prepared statement */<br /></span><span style="color: #0000BB">$stmt </span><span style="color: #007700">= </span><span style="color: #0000BB">mysqli_prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT District FROM City WHERE Name=?"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind parameters for markers */<br /></span><span style="color: #0000BB">mysqli_stmt_bind_param</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* execute query */<br /></span><span style="color: #0000BB">mysqli_stmt_execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* bind result variables */<br /></span><span style="color: #0000BB">mysqli_stmt_bind_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* fetch value */<br /></span><span style="color: #0000BB">mysqli_stmt_fetch</span><span style="color: #007700">(</span><span style="color: #0000BB">$stmt</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"%s is in district %s\n"</span><span style="color: #007700">, </span><span style="color: #0000BB">$city</span><span style="color: #007700">, </span><span style="color: #0000BB">$district</span><span style="color: #007700">);</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above examples will output:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Amersfoort is in district Utrecht</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.prepare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-stmt.execute.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_execute()</a> - Executes a prepared statement</span></li>
    <li><span class="function"><a href="mysqli-stmt.fetch.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_fetch()</a> - Fetch results from a prepared statement into the bound variables</span></li>
    <li><span class="function"><a href="mysqli-stmt.bind-param.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_param()</a> - Binds variables to a prepared statement as parameters</span></li>
    <li><span class="function"><a href="mysqli-stmt.bind-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_bind_result()</a> - Binds variables to a prepared statement for result storage</span></li>
    <li><span class="function"><a href="mysqli-stmt.get-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_get_result()</a> - Gets a result set from a prepared statement as a mysqli_result object</span></li>
    <li><span class="function"><a href="mysqli-stmt.close.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_close()</a> - Closes a prepared statement</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/prepare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.prepare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.prepare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107568">  <div class="votes">
    <div id="Vu107568">
    <a href="/manual/vote-note.php?id=107568&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107568">
    <a href="/manual/vote-note.php?id=107568&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107568" title="84% like this...">
    210
    </div>
  </div>
  <a href="#107568" class="name">
  <strong class="user"><em>timchampion dot NOSPAM at gmail dot com</em></strong></a><a class="genanchor" href="#107568"> &para;</a><div class="date" title="2012-02-17 08:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107568">
<div class="phpcode"><code><span class="html">Just wanted to make sure that all were aware of get_result.<br /><br />In the code sample, after execute(), perform a get_result() like this:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ... document's example code:<br /><br />    /* bind parameters for markers */<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$city</span><span class="keyword">);<br /><br />    </span><span class="comment">/* execute query */<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />    </span><span class="comment">/* instead of bind_result: */<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">();<br /><br />    </span><span class="comment">/* now you can fetch the results into an array - NICE */<br />    </span><span class="keyword">while (</span><span class="default">$myrow </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()) {<br /><br />        </span><span class="comment">// use your $myrow array as you would with any other fetch<br />        </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%s is in district %s\n"</span><span class="keyword">, </span><span class="default">$city</span><span class="keyword">, </span><span class="default">$myrow</span><span class="keyword">[</span><span class="string">'district'</span><span class="keyword">]);<br /><br />    }<br /></span><span class="default">?&gt;<br /></span><br />This is much nicer when you have a dozen or more fields coming back from your query.  Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="107200">  <div class="votes">
    <div id="Vu107200">
    <a href="/manual/vote-note.php?id=107200&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107200">
    <a href="/manual/vote-note.php?id=107200&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107200" title="73% like this...">
    58
    </div>
  </div>
  <a href="#107200" class="name">
  <strong class="user"><em>Darren</em></strong></a><a class="genanchor" href="#107200"> &para;</a><div class="date" title="2012-01-13 11:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107200">
<div class="phpcode"><code><span class="html">I wrote this function for my personal use and figured I would share it.  I am not sure if this is the appropriate forum but I wish I had this when I stumbled on to mysqli::prepare.  The function is an update of the function I posted previously.  The previous function could not handle multiple queries.
<br />
<br />For queries:
<br />Results of single queries are given as arrays[row#][associated Data Array]
<br />Results of multiple queries are given as arrays[query#][row#][associated Data Array]
<br />
<br />For queries which return an affected row#, affected rows are returned instead of (array[row#][associated Data Array])
<br />
<br />Code and example are below:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mysqli_prepared_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">,</span><span class="default">$typeDef </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">,</span><span class="default">$params </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">){
<br />  if(</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">mysqli_prepare</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">)){
<br />    if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">) == </span><span class="default">count</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)){
<br />      </span><span class="default">$params </span><span class="keyword">= array(</span><span class="default">$params</span><span class="keyword">);
<br />      </span><span class="default">$multiQuery </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;
<br />    } else {
<br />      </span><span class="default">$multiQuery </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">;
<br />    }  
<br />    
<br />    if(</span><span class="default">$typeDef</span><span class="keyword">){
<br />      </span><span class="default">$bindParams </span><span class="keyword">= array();    
<br />      </span><span class="default">$bindParamsReferences </span><span class="keyword">= array();
<br />      </span><span class="default">$bindParams </span><span class="keyword">= </span><span class="default">array_pad</span><span class="keyword">(</span><span class="default">$bindParams</span><span class="keyword">,(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)-</span><span class="default">count</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">))/</span><span class="default">count</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">),</span><span class="string">""</span><span class="keyword">);         
<br />      foreach(</span><span class="default">$bindParams </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){
<br />        </span><span class="default">$bindParamsReferences</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = &amp;</span><span class="default">$bindParams</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];  
<br />      }
<br />      </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$bindParamsReferences</span><span class="keyword">,</span><span class="default">$typeDef</span><span class="keyword">);
<br />      </span><span class="default">$bindParamsMethod </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="string">'mysqli_stmt'</span><span class="keyword">, </span><span class="string">'bind_param'</span><span class="keyword">);
<br />      </span><span class="default">$bindParamsMethod</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">,</span><span class="default">$bindParamsReferences</span><span class="keyword">);
<br />    }
<br />    
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    foreach(</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$queryKey </span><span class="keyword">=&gt; </span><span class="default">$query</span><span class="keyword">){
<br />      foreach(</span><span class="default">$bindParams </span><span class="keyword">as </span><span class="default">$paramKey </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){
<br />        </span><span class="default">$bindParams</span><span class="keyword">[</span><span class="default">$paramKey</span><span class="keyword">] = </span><span class="default">$query</span><span class="keyword">[</span><span class="default">$paramKey</span><span class="keyword">];
<br />      }
<br />      </span><span class="default">$queryResult </span><span class="keyword">= array();
<br />      if(</span><span class="default">mysqli_stmt_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){
<br />        </span><span class="default">$resultMetaData </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br />        if(</span><span class="default">$resultMetaData</span><span class="keyword">){                                                                               
<br />          </span><span class="default">$stmtRow </span><span class="keyword">= array();   
<br />          </span><span class="default">$rowReferences </span><span class="keyword">= array(); 
<br />          while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">mysqli_fetch_field</span><span class="keyword">(</span><span class="default">$resultMetaData</span><span class="keyword">)) { 
<br />            </span><span class="default">$rowReferences</span><span class="keyword">[] = &amp;</span><span class="default">$stmtRow</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]; 
<br />          }                                
<br />          </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$resultMetaData</span><span class="keyword">);
<br />          </span><span class="default">$bindResultMethod </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="string">'mysqli_stmt'</span><span class="keyword">, </span><span class="string">'bind_result'</span><span class="keyword">); 
<br />          </span><span class="default">$bindResultMethod</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">$rowReferences</span><span class="keyword">);
<br />          while(</span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){
<br />            </span><span class="default">$row </span><span class="keyword">= array();
<br />            foreach(</span><span class="default">$stmtRow </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){
<br />              </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;           
<br />            }
<br />            </span><span class="default">$queryResult</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;
<br />          }
<br />          </span><span class="default">mysqli_stmt_free_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br />        } else {
<br />          </span><span class="default">$queryResult</span><span class="keyword">[] = </span><span class="default">mysqli_stmt_affected_rows</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);
<br />        }
<br />      } else {
<br />        </span><span class="default">$queryResult</span><span class="keyword">[] = </span><span class="default">FALSE</span><span class="keyword">;
<br />      } 
<br />      </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$queryKey</span><span class="keyword">] = </span><span class="default">$queryResult</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">mysqli_stmt_close</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);   
<br />  } else {
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;
<br />  }
<br />  
<br />  if(</span><span class="default">$multiQuery</span><span class="keyword">){
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />  } else {
<br />    return </span><span class="default">$result</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />  }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example(s):
<br />For a table of firstName and lastName:
<br />John Smith
<br />Mark Smith
<br />Jack Johnson
<br />Bob Johnson
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//single query, single result
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM names WHERE firstName=? AND lastName=?"</span><span class="keyword">;
<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="string">"Bob"</span><span class="keyword">,</span><span class="string">"Johnson"</span><span class="keyword">);
<br />
<br /></span><span class="default">mysqli_prepared_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">,</span><span class="string">"ss"</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">)
<br /></span><span class="comment">/*
<br />returns array(
<br />0=&gt; array('firstName' =&gt; 'Bob', 'lastName' =&gt; 'Johnson')
<br />)
<br />*/
<br />
<br />//single query, multiple results
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM names WHERE lastName=?"</span><span class="keyword">;
<br /></span><span class="default">$params </span><span class="keyword">= array(</span><span class="string">"Smith"</span><span class="keyword">);
<br />
<br /></span><span class="default">mysqli_prepared_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">,</span><span class="string">"s"</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">)
<br /></span><span class="comment">/*
<br />returns array(
<br />0=&gt; array('firstName' =&gt; 'John', 'lastName' =&gt; 'Smith')
<br />1=&gt; array('firstName' =&gt; 'Mark', 'lastName' =&gt; 'Smith')
<br />)
<br />*/
<br />
<br />//multiple query, multiple results
<br /></span><span class="default">$query </span><span class="keyword">= </span><span class="string">"SELECT * FROM names WHERE lastName=?"</span><span class="keyword">;
<br /></span><span class="default">$params </span><span class="keyword">= array(array(</span><span class="string">"Smith"</span><span class="keyword">),array(</span><span class="string">"Johnson"</span><span class="keyword">));
<br />
<br /></span><span class="default">mysqli_prepared_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">,</span><span class="string">"s"</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">)
<br /></span><span class="comment">/*
<br />returns array(
<br />0=&gt;
<br />array(
<br />0=&gt; array('firstName' =&gt; 'John', 'lastName' =&gt; 'Smith')
<br />1=&gt; array('firstName' =&gt; 'Mark', 'lastName' =&gt; 'Smith')
<br />)
<br />1=&gt;
<br />array(
<br />0=&gt; array('firstName' =&gt; 'Jack', 'lastName' =&gt; 'Johnson')
<br />1=&gt; array('firstName' =&gt; 'Bob', 'lastName' =&gt; 'Johnson')
<br />)
<br />)
<br />*/
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope it helps =)</span></code></div>
  </div>
 </div>
  <div class="note" id="121064">  <div class="votes">
    <div id="Vu121064">
    <a href="/manual/vote-note.php?id=121064&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121064">
    <a href="/manual/vote-note.php?id=121064&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121064" title="66% like this...">
    7
    </div>
  </div>
  <a href="#121064" class="name">
  <strong class="user"><em>kritz at hrz dot tu-chemnitz dot de</em></strong></a><a class="genanchor" href="#121064"> &para;</a><div class="date" title="2017-05-10 08:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121064">
<div class="phpcode"><code><span class="html">I wasn't able to fully test the following since the server I am currently working on is missing the PHP module that allows me to call get_result on mysqli_stmt but maybe this could be helpful for someone:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Custom {@link \mysqli} class with additional functions.<br /> */<br /></span><span class="keyword">class </span><span class="default">CustomMysqli </span><span class="keyword">extends </span><span class="default">\mysqli<br /></span><span class="keyword">{<br />    </span><span class="comment">/**<br />     * Creates a prepared query, binds the given parameters and returns the result of the executed<br />     * {@link \mysqli_stmt}.<br />     * @param string $query<br />     * @param array $args<br />     * @return bool|\mysqli_result<br />     */<br />    </span><span class="keyword">public function </span><span class="default">queryPrepared</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, array </span><span class="default">$args</span><span class="keyword">)<br />    {<br />        </span><span class="default">$stmt   </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">$params </span><span class="keyword">= [];<br />        </span><span class="default">$types  </span><span class="keyword">= </span><span class="default">array_reduce</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, function (</span><span class="default">$string</span><span class="keyword">, &amp;</span><span class="default">$arg</span><span class="keyword">) use (&amp;</span><span class="default">$params</span><span class="keyword">) {<br />            </span><span class="default">$params</span><span class="keyword">[] = &amp;</span><span class="default">$arg</span><span class="keyword">;<br />            if (</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">))         </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">'d'</span><span class="keyword">;<br />            elseif (</span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">))   </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">'i'</span><span class="keyword">;<br />            elseif (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">))    </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">'s'</span><span class="keyword">;<br />            else                        </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">'b'</span><span class="keyword">;<br />            return </span><span class="default">$string</span><span class="keyword">;<br />        }, </span><span class="string">''</span><span class="keyword">);<br />        </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">, </span><span class="default">$types</span><span class="keyword">);<br /><br />        </span><span class="default">call_user_func_array</span><span class="keyword">([</span><span class="default">$stmt</span><span class="keyword">, </span><span class="string">'bind_param'</span><span class="keyword">], </span><span class="default">$params</span><span class="keyword">);<br /><br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">() ? </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">() : </span><span class="default">false</span><span class="keyword">;<br /><br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">CustomMysqli</span><span class="keyword">(</span><span class="string">'host'</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">, </span><span class="string">'database'</span><span class="keyword">, </span><span class="default">3306</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">queryPrepared</span><span class="keyword">(<br />    </span><span class="string">'SELECT * FROM table WHERE something = ? AND someotherthing = ? AND elsewhat = ?'</span><span class="keyword">,<br />    [<br />        </span><span class="string">'dunno'</span><span class="keyword">,<br />        </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="string">'dontcare'<br />    </span><span class="keyword">]<br />);<br /><br />if (isset(</span><span class="default">$result</span><span class="keyword">) &amp;&amp; </span><span class="default">$result </span><span class="keyword">instanceof </span><span class="default">\mysqli_result</span><span class="keyword">) {<br />    while (</span><span class="default">null </span><span class="keyword">!== (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">())) {<br />        echo </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">.</span><span class="default">var_debug</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'&lt;/pre&gt;'</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />NOTE: If you want to use this with a PHP version below 5.4 you have to use the old ugly array() syntax for arrays instead of the short [] syntax.</span></code></div>
  </div>
 </div>
  <div class="note" id="77107">  <div class="votes">
    <div id="Vu77107">
    <a href="/manual/vote-note.php?id=77107&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77107">
    <a href="/manual/vote-note.php?id=77107&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77107" title="67% like this...">
    10
    </div>
  </div>
  <a href="#77107" class="name">
  <strong class="user"><em>admin at xorath dot com</em></strong></a><a class="genanchor" href="#77107"> &para;</a><div class="date" title="2007-08-15 10:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77107">
<div class="phpcode"><code><span class="html">Performance note to those who wonder. I performed a test where first of all inserted about 30,000 posts with one PK:id and a varchar(20), where the varchar data was md5-hash for the current iterator value just to fill with some data.
<br />
<br />The test was performed on a dedicated ubuntu 7.04 server with apache2/php5/mysql5.0 running on Athlon 64 - 3000+ with 512MB of RAM. The queries where tested with a for-loop from 0 to 30000 first with:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">30000</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SELECT * FROM test WHERE id = </span><span class="default">$i</span><span class="string">"</span><span class="keyword">);
<br />    </span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_row</span><span class="keyword">();
<br />    echo </span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; </span><span class="comment">//prints id
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;
<br /></span>
<br />which gave a page-load time of about 3.3seconds avarage, then with this loop:
<br />
<br /><span class="default">&lt;?php
<br />$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM test WHERE id = ?"</span><span class="keyword">);
<br />for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">30000</span><span class="keyword">; ++</span><span class="default">$i </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"i"</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">, </span><span class="default">$md5</span><span class="keyword">);
<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();
<br />    echo </span><span class="default">$id</span><span class="keyword">;
<br />}
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />and the avarage page-load was lowered by 1.3sec, which means about 2.0 sec avarage! Guess the performance difference could be even greater on a more complex/larger table and more complex SQL-queries.</span></code></div>
  </div>
 </div>
  <div class="note" id="103730">  <div class="votes">
    <div id="Vu103730">
    <a href="/manual/vote-note.php?id=103730&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103730">
    <a href="/manual/vote-note.php?id=103730&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103730" title="66% like this...">
    9
    </div>
  </div>
  <a href="#103730" class="name">
  <strong class="user"><em>Codeguy</em></strong></a><a class="genanchor" href="#103730"> &para;</a><div class="date" title="2011-04-29 07:39"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103730">
<div class="phpcode"><code><span class="html">The actual purpose to use a prepared statement in sql is to cut the cost of processing queries; NOT to separate data from query. That's how it's being used w/ php NOW, not how it was designed to be used in the first place. With SQL you cut the cost of executing multiple similar queries down by using a prepared statement.. Doing so cuts out the parsing, validation and most often generates an execution plan for said query up front. Which is why they run faster in a loop, than their  IMMEDIATE Query cousins do. Do not assume that just because someone uses php and this function this way does not mean that it is THE way, or only way to do it. Although it is more secure than general queries but they are also more limited in what they can do or more precisely how you can go about doing it.</span></code></div>
  </div>
 </div>
  <div class="note" id="116489">  <div class="votes">
    <div id="Vu116489">
    <a href="/manual/vote-note.php?id=116489&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116489">
    <a href="/manual/vote-note.php?id=116489&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116489" title="64% like this...">
    7
    </div>
  </div>
  <a href="#116489" class="name">
  <strong class="user"><em>cdtreeks at gmail dot com</em></strong></a><a class="genanchor" href="#116489"> &para;</a><div class="date" title="2015-01-11 01:23"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116489">
<div class="phpcode"><code><span class="html">When executing a prepared MySQL, by default if there's an error then you'll simply get FALSE returned from your call to prepare().<br /><br />To get the full MySQL error back create a statement object before preparing your query as such:<br /><br /><span class="default">&lt;?php<br />$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"my_user"</span><span class="keyword">, </span><span class="string">"my_password"</span><span class="keyword">, </span><span class="string">"world"</span><span class="keyword">);<br /><br /></span><span class="comment">/* check connection */<br /></span><span class="keyword">if (</span><span class="default">mysqli_connect_errno</span><span class="keyword">()) {<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Connect failed: %s\n"</span><span class="keyword">, </span><span class="default">mysqli_connect_error</span><span class="keyword">());<br />    exit();<br />}<br /><br /></span><span class="default">$city </span><span class="keyword">= </span><span class="string">"Amersfoort"</span><span class="keyword">;<br /><br /></span><span class="comment">/* create a prepared statement */<br /></span><span class="default">$statement </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">stmt_init</span><span class="keyword">();<br />if (</span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT District FROM City WHERE Name=?"</span><span class="keyword">)) {<br /><br />    </span><span class="comment">/* bind parameters for marker(s) */<br />    </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">, </span><span class="default">$city</span><span class="keyword">);<br /><br />    </span><span class="comment">/* execute query */<br />    </span><span class="keyword">if (!</span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">()) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Error executing MySQL query: ' </span><span class="keyword">. </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/* bind result variables */<br />    </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">(</span><span class="default">$district</span><span class="keyword">);<br /><br />    </span><span class="comment">/* fetch value */<br />    </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br /><br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%s is in district %s\n"</span><span class="keyword">, </span><span class="default">$city</span><span class="keyword">, </span><span class="default">$district</span><span class="keyword">);<br /><br />    </span><span class="comment">/* close statement */<br />    </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">/* close connection */<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121986">  <div class="votes">
    <div id="Vu121986">
    <a href="/manual/vote-note.php?id=121986&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121986">
    <a href="/manual/vote-note.php?id=121986&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121986" title="63% like this...">
    6
    </div>
  </div>
  <a href="#121986" class="name">
  <strong class="user"><em>omidbahrami1990 at gmail dot com</em></strong></a><a class="genanchor" href="#121986"> &para;</a><div class="date" title="2017-12-06 10:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121986">
<div class="phpcode"><code><span class="html">This Is A Secure Way To Use mysqli::prepare<br />--------------------------------------------------------<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">secured_signup</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">)<br />{    <br /></span><span class="default">$connection </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="default">$dbhost</span><span class="keyword">,</span><span class="default">$dbusername</span><span class="keyword">,</span><span class="default">$dbpassword</span><span class="keyword">,</span><span class="default">$dbname</span><span class="keyword">);    <br />if (</span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">connect_error</span><span class="keyword">) <br />die(</span><span class="string">"Secured"</span><span class="keyword">);<br />    <br /></span><span class="default">$prepared </span><span class="keyword">= </span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `users` ( `username` , `password`  ) VALUES ( ? , ? ) ; "</span><span class="keyword">);<br />if(</span><span class="default">$prepared</span><span class="keyword">==</span><span class="default">false</span><span class="keyword">)<br />die(</span><span class="string">"Secured"</span><span class="keyword">);<br />    <br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">$prepared</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="string">"ss"</span><span class="keyword">,</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">);<br />if(</span><span class="default">$result</span><span class="keyword">==</span><span class="default">false</span><span class="keyword">)<br />die(</span><span class="string">"Secured"</span><span class="keyword">);<br />    <br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">$prepared</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();    <br />if(</span><span class="default">$result</span><span class="keyword">==</span><span class="default">false</span><span class="keyword">)<br />die(</span><span class="string">"Secured"</span><span class="keyword">);<br />        <br /></span><span class="default">$prepared</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">$connection</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();    <br />}<br /></span><span class="comment">/*<br />$dbhost ---&gt; DataBase IP Address<br />$dbusername ---&gt; DataBase Username<br />$dbpassword ---&gt; DataBase Password<br />$dbname ---&gt; DataBase Name<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127976">  <div class="votes">
    <div id="Vu127976">
    <a href="/manual/vote-note.php?id=127976&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127976">
    <a href="/manual/vote-note.php?id=127976&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127976" title="62% like this...">
    2
    </div>
  </div>
  <a href="#127976" class="name">
  <strong class="user"><em>urso at email dot cz</em></strong></a><a class="genanchor" href="#127976"> &para;</a><div class="date" title="2022-12-03 10:31"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127976">
<div class="phpcode"><code><span class="html">Unfortunately, the use "/* bind result variables */ $stmt-&gt;bind_result($district);" is obsolete and condemned.<br /><br /><span class="default">&lt;?php<br />$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">);<br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">character_set_name</span><span class="keyword">()!=</span><span class="string">"utf8mb4"</span><span class="keyword">) { </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">set_charset</span><span class="keyword">(</span><span class="string">"utf8mb4"</span><span class="keyword">); }<br /></span><span class="default">$secondname </span><span class="keyword">= </span><span class="string">"Ma%"</span><span class="keyword">;<br /></span><span class="default">$types </span><span class="keyword">= </span><span class="string">"s"</span><span class="keyword">;<br /></span><span class="default">$parameters </span><span class="keyword">= array(</span><span class="default">$secondname</span><span class="keyword">);<br /></span><span class="default">$myquery </span><span class="keyword">= </span><span class="string">"select * from users where secondname like ?"</span><span class="keyword">;<br />if (</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$myquery</span><span class="keyword">)) { <br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="default">$types</span><span class="keyword">, ...</span><span class="default">$parameters</span><span class="keyword">);<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">();<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />  </span><span class="default">$numrows </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">num_rows</span><span class="keyword">;<br />  while(</span><span class="default">$row </span><span class="keyword">= </span><span class="default">$result</span><span class="keyword">-&gt;</span><span class="default">fetch_assoc</span><span class="keyword">()) {<br />    echo </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">].</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'secondname'</span><span class="keyword">].</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Also, instead of '$stmt-&gt;bind_param("s", $city);', use "$stmt-&gt;bind_param($types, ...$parameters);" with array. Here the advantage of using an array ($parameters) is already obvious, instead of 5 variables, one array of 5 elements is used.<br /><br /><span class="default">&lt;?php<br />$mysqli </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"localhost"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">, </span><span class="string">"test"</span><span class="keyword">);<br />if (</span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">character_set_name</span><span class="keyword">()!=</span><span class="string">"utf8mb4"</span><span class="keyword">) { </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">set_charset</span><span class="keyword">(</span><span class="string">"utf8mb4"</span><span class="keyword">); }<br /></span><span class="default">$uid </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'uid'</span><span class="keyword">]);<br /></span><span class="default">$length</span><span class="keyword">=</span><span class="default">15</span><span class="keyword">; </span><span class="default">$account </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'account'</span><span class="keyword">]),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="string">"utf-8"</span><span class="keyword">); </span><span class="default">$account</span><span class="keyword">=</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$account</span><span class="keyword">);<br /></span><span class="default">$length</span><span class="keyword">=</span><span class="default">50</span><span class="keyword">; </span><span class="default">$password </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">]),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="string">"utf-8"</span><span class="keyword">); </span><span class="default">$password </span><span class="keyword">= </span><span class="default">password_hash</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">, </span><span class="default">PASSWORD_DEFAULT</span><span class="keyword">);<br /></span><span class="default">$length</span><span class="keyword">=</span><span class="default">25</span><span class="keyword">; </span><span class="default">$prijmeni </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'prijmeni'</span><span class="keyword">]),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="string">"utf-8"</span><span class="keyword">); </span><span class="default">$prijmeni</span><span class="keyword">=</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$prijmeni</span><span class="keyword">);<br /></span><span class="default">$length</span><span class="keyword">=</span><span class="default">25</span><span class="keyword">; </span><span class="default">$firstname </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'firstname'</span><span class="keyword">]),</span><span class="default">0</span><span class="keyword">,</span><span class="default">$length</span><span class="keyword">,</span><span class="string">"utf-8"</span><span class="keyword">); </span><span class="default">$firstname</span><span class="keyword">=</span><span class="default">strip_tags</span><span class="keyword">(</span><span class="default">$firstname</span><span class="keyword">); </span><span class="default">$firstname </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"&gt;"</span><span class="keyword">,</span><span class="string">"&lt;"</span><span class="keyword">,</span><span class="string">'"'</span><span class="keyword">), array(</span><span class="string">""</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">), </span><span class="default">$firstname</span><span class="keyword">); <br /></span><span class="default">$dotaz </span><span class="keyword">= </span><span class="string">"UPDATE users SET account = ?, password = ?, secname = ?, firstname = ? WHERE uid = ?"</span><span class="keyword">;<br /></span><span class="default">$types </span><span class="keyword">= </span><span class="string">"ssssi"</span><span class="keyword">;<br /></span><span class="default">$parameters </span><span class="keyword">= array(</span><span class="default">$account</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">,</span><span class="default">$prijmeni</span><span class="keyword">,</span><span class="default">$firstname</span><span class="keyword">,</span><span class="default">$uid</span><span class="keyword">);<br />if (</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$dotaz</span><span class="keyword">)) {<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="default">$types</span><span class="keyword">, ...</span><span class="default">$parameters</span><span class="keyword">);<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />  echo </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">affected_rows</span><span class="keyword">;<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br />}<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59945">  <div class="votes">
    <div id="Vu59945">
    <a href="/manual/vote-note.php?id=59945&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59945">
    <a href="/manual/vote-note.php?id=59945&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59945" title="64% like this...">
    5
    </div>
  </div>
  <a href="#59945" class="name">
  <strong class="user"><em>David Kramer</em></strong></a><a class="genanchor" href="#59945"> &para;</a><div class="date" title="2005-12-20 12:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59945">
<div class="phpcode"><code><span class="html">I don't think these are good examples, because the primary use of prepared queries is when you are going to call the same query in a loop, plugging in different values each time.  For instance, if you were generating a report and needed to run the same query for each line, tweaking the values in the WHERE clause, or importing data from another system.</span></code></div>
  </div>
 </div>
  <div class="note" id="116065">  <div class="votes">
    <div id="Vu116065">
    <a href="/manual/vote-note.php?id=116065&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116065">
    <a href="/manual/vote-note.php?id=116065&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116065" title="60% like this...">
    4
    </div>
  </div>
  <a href="#116065" class="name">
  <strong class="user"><em>REz</em></strong></a><a class="genanchor" href="#116065"> &para;</a><div class="date" title="2014-11-05 11:35"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116065">
<div class="phpcode"><code><span class="html">There is no reference that all data must be fetched before a new prepare call to msqli, the only help is in a 6 years old comment!<br />You have to myslqi_stmt::fetch() data until NULL is returned before you can call mysqli::prepare() again without having FALSE and no error at all in mysqli::$errno and mysqli::$error</span></code></div>
  </div>
 </div>
  <div class="note" id="107153">  <div class="votes">
    <div id="Vu107153">
    <a href="/manual/vote-note.php?id=107153&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107153">
    <a href="/manual/vote-note.php?id=107153&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107153" title="60% like this...">
    3
    </div>
  </div>
  <a href="#107153" class="name">
  <strong class="user"><em>Darren</em></strong></a><a class="genanchor" href="#107153"> &para;</a><div class="date" title="2012-01-11 03:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107153">
<div class="phpcode"><code><span class="html">For those learning mysqli::prepare and mysqli_stmt::bind_params for the first time, here is a commented block of code which executes prepared queries and returns data in a similar format to the return values of mysqli_query.  I tried to minimize unnecessary classes, objects, or overhead for two reasons:<br />1) facilitate learning<br />2) allow relativity interchangeable use with mysqli_query<br /><br />My goal is to lower the learning curve for whoever is starting out with these family of functions.  I am by no means an expert coder/scripter, so I am sure there are improvements and perhaps a few bugs, but I hope not =)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />Function: mysqli_prepared_query()<br />  Executes prepared querys given query syntax, and bind parameters<br />  Returns data in array format<br /><br />Arguments:<br />  mysqli_link<br />  mysqli_prepare query<br />  mysqli_stmt_bind_param argmuent list in the form array($typeDefinitinonString, $var1 [, mixed $... ])<br /><br />Return values:<br />  When given SELECT, SHOW, DESCRIBE or EXPLAIN statements: returns table data in the form resultArray[row number][associated field name]<br />  Returns number of rows affacted when given other queries<br />  Returns FALSE on error                        <br />*/<br /></span><span class="keyword">function </span><span class="default">mysqli_prepared_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">,</span><span class="default">$bindParams </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">){<br />  if(</span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">mysqli_prepare</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">,</span><span class="default">$sql</span><span class="keyword">)){<br />    if (</span><span class="default">$bindParams</span><span class="keyword">){                                                                                                    <br />      </span><span class="default">$bindParamsMethod </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="string">'mysqli_stmt'</span><span class="keyword">, </span><span class="string">'bind_param'</span><span class="keyword">);  </span><span class="comment">//allows for call to mysqli_stmt-&gt;bind_param using variable argument list       <br />      </span><span class="default">$bindParamsReferences </span><span class="keyword">= array();  </span><span class="comment">//will act as arguments list for mysqli_stmt-&gt;bind_param  <br />      <br />      </span><span class="default">$typeDefinitionString </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$bindParams</span><span class="keyword">);<br />      foreach(</span><span class="default">$bindParams </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$bindParamsReferences</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = &amp;</span><span class="default">$bindParams</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];  <br />      }<br />      <br />      </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$bindParamsReferences</span><span class="keyword">,</span><span class="default">$typeDefinitionString</span><span class="keyword">); </span><span class="comment">//returns typeDefinition as the first element of the string  <br />      </span><span class="default">$bindParamsMethod</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">,</span><span class="default">$bindParamsReferences</span><span class="keyword">); </span><span class="comment">//calls mysqli_stmt-&gt;bind_param suing $bindParamsRereferences as the argument list<br />    </span><span class="keyword">}<br />    if(</span><span class="default">mysqli_stmt_execute</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){<br />      </span><span class="default">$resultMetaData </span><span class="keyword">= </span><span class="default">mysqli_stmt_result_metadata</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />      if(</span><span class="default">$resultMetaData</span><span class="keyword">){                                                                               <br />        </span><span class="default">$stmtRow </span><span class="keyword">= array(); </span><span class="comment">//this will be a result row returned from mysqli_stmt_fetch($stmt)   <br />        </span><span class="default">$rowReferences </span><span class="keyword">= array();  </span><span class="comment">//this will reference $stmtRow and be passed to mysqli_bind_results <br />        </span><span class="keyword">while (</span><span class="default">$field </span><span class="keyword">= </span><span class="default">mysqli_fetch_field</span><span class="keyword">(</span><span class="default">$resultMetaData</span><span class="keyword">)) { <br />          </span><span class="default">$rowReferences</span><span class="keyword">[] = &amp;</span><span class="default">$stmtRow</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">]; <br />        }                                <br />        </span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$resultMetaData</span><span class="keyword">);<br />        </span><span class="default">$bindResultMethod </span><span class="keyword">= new </span><span class="default">ReflectionMethod</span><span class="keyword">(</span><span class="string">'mysqli_stmt'</span><span class="keyword">, </span><span class="string">'bind_result'</span><span class="keyword">); <br />        </span><span class="default">$bindResultMethod</span><span class="keyword">-&gt;</span><span class="default">invokeArgs</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">, </span><span class="default">$rowReferences</span><span class="keyword">); </span><span class="comment">//calls mysqli_stmt_bind_result($stmt,[$rowReferences]) using object-oriented style<br />        </span><span class="default">$result </span><span class="keyword">= array();<br />        while(</span><span class="default">mysqli_stmt_fetch</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">)){<br />          foreach(</span><span class="default">$stmtRow </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">){  </span><span class="comment">//variables must be assigned by value, so $result[] = $stmtRow does not work (not really sure why, something with referencing in $stmtRow)<br />            </span><span class="default">$row</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;           <br />          }<br />          </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$row</span><span class="keyword">;<br />        }<br />        </span><span class="default">mysqli_stmt_free_result</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />      } else {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysqli_stmt_affected_rows</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />      }<br />      </span><span class="default">mysqli_stmt_close</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">);<br />    } else {<br />      </span><span class="default">$result </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />    }<br />  } else {<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />  }<br />  return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Here's hoping the PHP gods don't smite me.</span></code></div>
  </div>
 </div>
  <div class="note" id="107348">  <div class="votes">
    <div id="Vu107348">
    <a href="/manual/vote-note.php?id=107348&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107348">
    <a href="/manual/vote-note.php?id=107348&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107348" title="60% like this...">
    1
    </div>
  </div>
  <a href="#107348" class="name">
  <strong class="user"><em>Bernie van&amp;#39;t Hof</em></strong></a><a class="genanchor" href="#107348"> &para;</a><div class="date" title="2012-02-02 06:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107348">
<div class="phpcode"><code><span class="html">Prepared statements are confusing in the beginning ..<br /><br />mysqli-&gt;prepare() returns a so-called statement object which is used for subsequent operations eg execute, bind_param, store_result, bind_result, fetch, etc.<br /><br />The statement object has private properties which update as each statement operation is carried out. I found these useful for understanding what is going on when writing a prepared statement function: <br /><br />affected_rows<br />insert_id<br />num_rows<br />param_count<br />field_count<br />errno<br />error<br />sqlstate<br />id<br /><br />But it took a little time to get my head around accessing them:<br /><br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br /></span><span class="comment">//       .. $stmt-&gt; operations ..<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">); </span><span class="comment">// shows null values<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">errno</span><span class="keyword">); </span><span class="comment">// note literal, displays value <br /><br />//       .. $stmt-&gt; operations ..<br /><br />// to keep a copy ..<br />// get_object_properties() won't work<br />// clone() won't work<br /></span><span class="default">$properties </span><span class="keyword">= array();<br />foreach (</span><span class="default">$stmt </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$priv</span><span class="keyword">){<br />    </span><span class="default">$properties</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">; </span><span class="comment">//    works<br />    // $properties[$name] = $priv; //    won't work, foreach can't access private properties<br /></span><span class="keyword">}<br /><br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /></span><span class="comment">// var_dump($stmt-&gt;errno) // won't work, $stmt is closed<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68795">  <div class="votes">
    <div id="Vu68795">
    <a href="/manual/vote-note.php?id=68795&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68795">
    <a href="/manual/vote-note.php?id=68795&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68795" title="58% like this...">
    3
    </div>
  </div>
  <a href="#68795" class="name">
  <strong class="user"><em>Adam</em></strong></a><a class="genanchor" href="#68795"> &para;</a><div class="date" title="2006-08-10 03:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68795">
<div class="phpcode"><code><span class="html">The purpose of prepared statements is to not include data in your SQL statements. Including them in your SQL statements is NOT safe. Always use prepared statements. They are cleaner to use (code easier to read) and not prone to SQL injections.<br /><br />Escaping strings to include in SQL statements doesn't work very well in some locales hence it is not safe.</span></code></div>
  </div>
 </div>
  <div class="note" id="65696">  <div class="votes">
    <div id="Vu65696">
    <a href="/manual/vote-note.php?id=65696&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65696">
    <a href="/manual/vote-note.php?id=65696&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65696" title="58% like this...">
    5
    </div>
  </div>
  <a href="#65696" class="name">
  <strong class="user"><em>codeFiend &lt;aeontech at gmail dot com&gt;</em></strong></a><a class="genanchor" href="#65696"> &para;</a><div class="date" title="2006-05-05 02:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65696">
<div class="phpcode"><code><span class="html">Note that single-quotes around the parameter markers _will_ prevent your statement from being prepared correctly.<br />Ex:<br /><br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO City (District) VALUES ('?')"</span><span class="keyword">);<br />echo </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">param_count</span><span class="keyword">.</span><span class="string">" parameters\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>will print 0 and fail with "Number of variables doesn't match number of parameters in prepared statement" warning when you try to bind the variables to it.<br /><br />But<br /><br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO City (District) VALUES (?)"</span><span class="keyword">);<br />echo </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">param_count</span><span class="keyword">.</span><span class="string">" parameters\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>will print 1 and function correctly.<br /><br />Very annoying, took me an hour to figure this out.</span></code></div>
  </div>
 </div>
  <div class="note" id="126071">  <div class="votes">
    <div id="Vu126071">
    <a href="/manual/vote-note.php?id=126071&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126071">
    <a href="/manual/vote-note.php?id=126071&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126071" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126071" class="name">
  <strong class="user"><em>wapharshitsingh at gmail dot com</em></strong></a><a class="genanchor" href="#126071"> &para;</a><div class="date" title="2021-05-12 03:41"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126071">
<div class="phpcode"><code><span class="html">just wanted to share here, how we can use prepare statement with the combination of ... operator effectively .<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Database</span><span class="keyword">{<br /> private function </span><span class="default">getTypeofValues</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">){<br />        if(</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">"d"</span><span class="keyword">;<br />        }elseif(</span><span class="default">is_integer</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">"i"</span><span class="keyword">;<br />        }elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)){<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">"s"</span><span class="keyword">;<br />        }else{<br />            </span><span class="default">$string </span><span class="keyword">.= </span><span class="string">"b"</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br /> public function </span><span class="default">makeQuery</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, array </span><span class="default">$values</span><span class="keyword">){<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">array_reduce</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">"getTypeOfValues"</span><span class="keyword">));<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">(</span><span class="default">$type</span><span class="keyword">, ...</span><span class="default">$values</span><span class="keyword">);<br />        </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">get_result</span><span class="keyword">();<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86025">  <div class="votes">
    <div id="Vu86025">
    <a href="/manual/vote-note.php?id=86025&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86025">
    <a href="/manual/vote-note.php?id=86025&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86025" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#86025" class="name">
  <strong class="user"><em>rafael at stiod dot com</em></strong></a><a class="genanchor" href="#86025"> &para;</a><div class="date" title="2008-09-29 04:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom86025">
<div class="phpcode"><code><span class="html">All data must be fetched before a new statement prepare</span></code></div>
  </div>
 </div>
  <div class="note" id="111266">  <div class="votes">
    <div id="Vu111266">
    <a href="/manual/vote-note.php?id=111266&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111266">
    <a href="/manual/vote-note.php?id=111266&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111266" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#111266" class="name">
  <strong class="user"><em>@runspired</em></strong></a><a class="genanchor" href="#111266"> &para;</a><div class="date" title="2013-01-31 04:42"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111266">
<div class="phpcode"><code><span class="html">I don't think this is a bug, just an unexpected behavior.  While building an API I discovered that passing INT 0 instead of STRING '0' into a prepared statement caused my script to run out of memory and produce a 500error on the webpage.<br /><br />A simplified example of this issue is below: ($_DB is a global reference to a mysqli connection)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getItem</span><span class="keyword">( </span><span class="default">$ID </span><span class="keyword">) {<br /><br />     </span><span class="default">$_STATEMENT </span><span class="keyword">= </span><span class="default">$_DB</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT item_user, item_name, item_description FROM item WHERE item_id = ?;"</span><span class="keyword">);<br /><br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">bind_param</span><span class="keyword">( </span><span class="string">'i' </span><span class="keyword">, </span><span class="default">$ID </span><span class="keyword">);<br /><br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">();<br /><br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">bind_result</span><span class="keyword">( </span><span class="default">$user </span><span class="keyword">, </span><span class="default">$name </span><span class="keyword">, </span><span class="default">$description</span><span class="keyword">);<br />     </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br /><br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">free_result</span><span class="keyword">();<br />     </span><span class="default">$_STATEMENT</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br />     return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">getItem</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">//fails!<br /></span><span class="default">getItem</span><span class="keyword">(</span><span class="string">'0'</span><span class="keyword">); </span><span class="comment">//works!<br /><br /></span><span class="default">?&gt;<br /></span><br />The best I can guess is that an INT 0 gets translated as BOOLEAN , and if this is indeed the case it should be documented above, but all efforts to get error information (via the php script) have failed.</span></code></div>
  </div>
 </div>
  <div class="note" id="92573">  <div class="votes">
    <div id="Vu92573">
    <a href="/manual/vote-note.php?id=92573&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92573">
    <a href="/manual/vote-note.php?id=92573&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92573" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#92573" class="name">
  <strong class="user"><em>sdepouw at NOSPAM dot com</em></strong></a><a class="genanchor" href="#92573"> &para;</a><div class="date" title="2009-07-29 06:03"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92573">
<div class="phpcode"><code><span class="html">I don't know how obvious this was for anyone else, but if you attempt to prepare a query for a table that doesn't exist in the database the connection currently points to (or if your query is invalid in some other way, I suppose), an object will not be returned. I only noticed this after doing some digging when I kept getting a fatal error saying that my statement variable was not an set to an instance of an object (it was probably null).<br /><br />Replace NOSPAM with nimblepros to e-mail me.</span></code></div>
  </div>
 </div>
  <div class="note" id="105039">  <div class="votes">
    <div id="Vu105039">
    <a href="/manual/vote-note.php?id=105039&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105039">
    <a href="/manual/vote-note.php?id=105039&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105039" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#105039" class="name">
  <strong class="user"><em>Zeebuck</em></strong></a><a class="genanchor" href="#105039"> &para;</a><div class="date" title="2011-07-24 12:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105039">
<div class="phpcode"><code><span class="html">I think that the purpose that it was originally built for, and the purpose that people use it for today, have diverged.  But why dwell on the original purpose?  Obviously more code has been put into prepared statements today to allow it to be used to prevent sql injections, so it is now part of the design purpose today, as well as performance on repeatable statements.</span></code></div>
  </div>
 </div>
  <div class="note" id="113387">  <div class="votes">
    <div id="Vu113387">
    <a href="/manual/vote-note.php?id=113387&amp;page=mysqli.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113387">
    <a href="/manual/vote-note.php?id=113387&amp;page=mysqli.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113387" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#113387" class="name">
  <strong class="user"><em>marmstro at gmail dot com</em></strong></a><a class="genanchor" href="#113387"> &para;</a><div class="date" title="2013-10-04 03:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113387">
<div class="phpcode"><code><span class="html">If your IDE isn't recognizing $stmt as an object of type mysqli_stmt when you use the traditional perpare:<br /><br />$stmt = mysqli_prepare($link, $query);<br /><br />The following works and is IDE friendly:<br /><br />$stmt = new mysqli_stmt($link, $query);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.prepare.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
