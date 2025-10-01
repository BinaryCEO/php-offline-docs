<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli_result::free - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli-result.free.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli-result.free.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.free.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli-result.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli-result.field-seek.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli-result.getiterator.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli-result.free.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli-result.free.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli-result.free.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli-result.free.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli-result.free.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli-result.free.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli-result.free.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli-result.free.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli-result.free.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli-result.free.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli-result.free.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Frees the memory associated with a result" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli_result::free - Manual" />
<meta name="twitter:description" content="Frees the memory associated with a result" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli_result::free - Manual" />
<meta itemprop="description" content="Frees the memory associated with a result" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Frees the memory associated with a result" />

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
        <a href="mysqli-result.getiterator.php">
          mysqli_result::getIterator &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli-result.field-seek.php">
          &laquo; mysqli_result::field_seek        </a>
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
            <option value='en/mysqli-result.free.php' selected="selected">English</option>
            <option value='de/mysqli-result.free.php'>German</option>
            <option value='es/mysqli-result.free.php'>Spanish</option>
            <option value='fr/mysqli-result.free.php'>French</option>
            <option value='it/mysqli-result.free.php'>Italian</option>
            <option value='ja/mysqli-result.free.php'>Japanese</option>
            <option value='pt_BR/mysqli-result.free.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli-result.free.php'>Russian</option>
            <option value='tr/mysqli-result.free.php'>Turkish</option>
            <option value='uk/mysqli-result.free.php'>Ukrainian</option>
            <option value='zh/mysqli-result.free.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli-result.free" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli_result::free</h1>
  <h1 class="refname">mysqli_result::close</h1>
  <h1 class="refname">mysqli_result::free_result</h1>
  <h1 class="refname">mysqli_free_result</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli_result::free</span> -- <span class="refname">mysqli_result::close</span> -- <span class="refname">mysqli_result::free_result</span> -- <span class="refname">mysqli_free_result</span> &mdash; <span class="dc-title">Frees the memory associated with a result</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli-result.free-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli_result::free</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>mysqli_result::close</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><strong>mysqli_result::free_result</strong></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_free_result</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span> <code class="parameter">$result</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Frees the memory associated with the result.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli-result.free-parameters">
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


 <div class="refsect1 returnvalues" id="refsect1-mysqli-result.free-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli-result.free-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.query.php" class="function" rel="rdfs-seeAlso">mysqli_query()</a> - Performs a query on the database</span></li>
    <li><span class="function"><a href="mysqli-stmt.get-result.php" class="function" rel="rdfs-seeAlso">mysqli_stmt_get_result()</a> - Gets a result set from a prepared statement as a mysqli_result object</span></li>
    <li><span class="function"><a href="mysqli.store-result.php" class="function" rel="rdfs-seeAlso">mysqli_store_result()</a> - Transfers a result set from the last query</span></li>
    <li><span class="function"><a href="mysqli.use-result.php" class="function" rel="rdfs-seeAlso">mysqli_use_result()</a> - Initiate a result set retrieval</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli_result/free.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli-result.free%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli-result.free&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.free.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123708">  <div class="votes">
    <div id="Vu123708">
    <a href="/manual/vote-note.php?id=123708&amp;page=mysqli-result.free&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123708">
    <a href="/manual/vote-note.php?id=123708&amp;page=mysqli-result.free&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123708" title="70% like this...">
    19
    </div>
  </div>
  <a href="#123708" class="name">
  <strong class="user"><em>jack_action100 at hotmail dot example dot com</em></strong></a><a class="genanchor" href="#123708"> &para;</a><div class="date" title="2019-03-20 12:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123708">
<div class="phpcode"><code><span class="html">If you are STILL getting this error, even after freeing your results:<br />Internal SQL Bug: 2014, Commands out of sync; you can't run this command now<br /><br />You may have a stored procedure in your query.   A procedure can return more than one result set, and it will always return one extra empty result set that carries some meta information on the procedure call itself, especially error information. ( source:  <a href="https://bugs.mysql.com/bug.php?id=71044" rel="nofollow" target="_blank">https://bugs.mysql.com/bug.php?id=71044</a> )<br /><br />While calling single procedures, with one SELECT in them, using mysqli-&gt;query("CALL `stored_procedure`();"), I had to do the following to make it work between two calls:<br /><br /><span class="default">&lt;?php<br />$result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It has no negative impact if you are not calling a stored procedure.</span></code></div>
  </div>
 </div>
  <div class="note" id="126623">  <div class="votes">
    <div id="Vu126623">
    <a href="/manual/vote-note.php?id=126623&amp;page=mysqli-result.free&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126623">
    <a href="/manual/vote-note.php?id=126623&amp;page=mysqli-result.free&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126623" title="57% like this...">
    1
    </div>
  </div>
  <a href="#126623" class="name">
  <strong class="user"><em>polygon dot co dot in at gmail dot com</em></strong></a><a class="genanchor" href="#126623"> &para;</a><div class="date" title="2021-11-19 10:16"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126623">
<div class="phpcode"><code><span class="html">We should free the mysql results using mysqli_free_result respectively or else this will consume your server RAM resource.<br /><br />This is demonstrated as below<br /><br /><span class="default">&lt;?php<br /><br />$link </span><span class="keyword">= </span><span class="default">mysqli_connect</span><span class="keyword">(</span><span class="string">'Hostname'</span><span class="keyword">,</span><span class="string">'Username'</span><span class="keyword">,</span><span class="string">'Password'</span><span class="keyword">,</span><span class="string">'Database'</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;br/&gt;Memory Usage Before Query = '</span><span class="keyword">.</span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">// 449464 bytes<br /><br /></span><span class="default">$resultResource </span><span class="keyword">= </span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$link</span><span class="keyword">, </span><span class="string">'SELECT * FROM test'</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;br/&gt;Memory Usage after Query = '</span><span class="keyword">.</span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">// 466528 bytes<br /><br /></span><span class="default">$result </span><span class="keyword">= array();<br />while (</span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">mysqli_fetch_assoc</span><span class="keyword">(</span><span class="default">$resultResource</span><span class="keyword">)) {}<br /><br />echo </span><span class="string">'&lt;br/&gt;&lt;br/&gt;Memory Usage Before Free Result = '</span><span class="keyword">.</span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">// 474208 bytes<br /><br /></span><span class="default">mysqli_free_result</span><span class="keyword">(</span><span class="default">$resultResource</span><span class="keyword">);<br /><br />echo </span><span class="string">'&lt;br/&gt;Memory Usage After Free Result = '</span><span class="keyword">.</span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">); </span><span class="comment">// 457336 bytes<br /><br /></span><span class="default">?&gt;<br /></span><br />Output below.<br /><br />Memory Usage Before Query = 449464<br />Memory Usage after Query = 466528<br /><br />Memory Usage Before Free Result = 474208<br />Memory Usage After Free Result = 457336<br /><br />So, One can observer there is memory usage after the query is executed. The results are returned by DB server to the web server instantaniously once the query execution is over. The results present on web server are then processed for fetching from the resource link on web server.<br /><br />Also this is observed that there is lesser memory usage after using mysqli_free_result because the resources stored on web server for respective query are freed by providing respective resource link.</span></code></div>
  </div>
 </div>
  <div class="note" id="95357">  <div class="votes">
    <div id="Vu95357">
    <a href="/manual/vote-note.php?id=95357&amp;page=mysqli-result.free&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95357">
    <a href="/manual/vote-note.php?id=95357&amp;page=mysqli-result.free&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95357" title="51% like this...">
    2
    </div>
  </div>
  <a href="#95357" class="name">
  <strong class="user"><em>Vector at ionisis dot com</em></strong></a><a class="genanchor" href="#95357"> &para;</a><div class="date" title="2009-12-28 05:17"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95357">
<div class="phpcode"><code><span class="html">If you are getting this error:
<br />Internal SQL Bug: 2014, Commands out of sync; you can't run this command now
<br />
<br />Then you never called mysqli_result::free(), mysqli_result::free_result(), mysqli_result::close(), or mysqli_free_result() in your script, and must call it before executing another stored procedure.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli-result.free&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli-result.free.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
