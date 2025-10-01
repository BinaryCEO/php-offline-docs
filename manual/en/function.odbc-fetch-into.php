<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_fetch_into - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-fetch-into.php">
 <link rel="shorturl" href="https://www.php.net/odbc-fetch-into">
 <link rel="alternate" href="https://www.php.net/odbc-fetch-into" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-fetch-array.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-fetch-object.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-fetch-into.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-fetch-into.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-fetch-into.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-fetch-into.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-fetch-into.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-fetch-into.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-fetch-into.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-fetch-into.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-fetch-into.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-fetch-into.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-fetch-into.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch one result row into array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_fetch_into - Manual" />
<meta name="twitter:description" content="Fetch one result row into array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_fetch_into - Manual" />
<meta itemprop="description" content="Fetch one result row into array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch one result row into array" />

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
        <a href="function.odbc-fetch-object.php">
          odbc_fetch_object &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-fetch-array.php">
          &laquo; odbc_fetch_array        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      <li><a href='ref.uodbc.php'>ODBC Functions</a></li>      </ul>
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
            <option value='en/function.odbc-fetch-into.php' selected="selected">English</option>
            <option value='de/function.odbc-fetch-into.php'>German</option>
            <option value='es/function.odbc-fetch-into.php'>Spanish</option>
            <option value='fr/function.odbc-fetch-into.php'>French</option>
            <option value='it/function.odbc-fetch-into.php'>Italian</option>
            <option value='ja/function.odbc-fetch-into.php'>Japanese</option>
            <option value='pt_BR/function.odbc-fetch-into.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-fetch-into.php'>Russian</option>
            <option value='tr/function.odbc-fetch-into.php'>Turkish</option>
            <option value='uk/function.odbc-fetch-into.php'>Ukrainian</option>
            <option value='zh/function.odbc-fetch-into.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-fetch-into" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_fetch_into</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_fetch_into</span> &mdash; <span class="dc-title">Fetch one result row into array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.odbc-fetch-into-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_fetch_into</strong></span>(<span class="methodparam"><span class="type">Odbc\Result</span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$row</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Fetch one result row into <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.odbc-fetch-into-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
      <p class="para">
       The ODBC result object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The result <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
       that can be of any type since it will be converted to type
       array. The array will contain the column values starting at array
       index 0.
      </p>
     </dd>
    
    
     <dt><code class="parameter">row</code></dt>
     <dd>
      <p class="para">
       The row number.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.odbc-fetch-into-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of columns in the result;
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-fetch-into-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.4.0</td>
 <td>
  <code class="parameter">statement</code> expects an <span class="classname"><strong class="classname">Odbc\Result</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
      <td>8.4.0</td>
      <td>
       <code class="parameter">row</code> is now nullable.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.odbc-fetch-into-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1099">
    <p><strong>Example #1 <span class="function"><strong>odbc_fetch_into()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$rc </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #0000BB">$res_id</span><span style="color: #007700">, </span><span style="color: #0000BB">$my_array</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     or
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$rc </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_fetch_into</span><span style="color: #007700">(</span><span style="color: #0000BB">$res_id</span><span style="color: #007700">, </span><span style="color: #0000BB">$my_array</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-fetch-into.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-fetch-into%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-fetch-into&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-fetch-into.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43627">  <div class="votes">
    <div id="Vu43627">
    <a href="/manual/vote-note.php?id=43627&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43627">
    <a href="/manual/vote-note.php?id=43627&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43627" title="66% like this...">
    1
    </div>
  </div>
  <a href="#43627" class="name">
  <strong class="user"><em>php at nospamplease dot markjrubin dot com</em></strong></a><a class="genanchor" href="#43627"> &para;</a><div class="date" title="2004-06-28 12:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43627">
<div class="phpcode"><code><span class="html">Regarding free at muktimedia dot com's problem.<br /><br />We found a simple solution, just cast the text as ntext in your SQL statement.<br /><br />SELECT cast ( field_name AS NTEXT ) AS field_name<br /><br />Mark J Rubin</span></code></div>
  </div>
 </div>
  <div class="note" id="28835">  <div class="votes">
    <div id="Vu28835">
    <a href="/manual/vote-note.php?id=28835&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28835">
    <a href="/manual/vote-note.php?id=28835&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28835" title="no votes...">
    0
    </div>
  </div>
  <a href="#28835" class="name">
  <strong class="user"><em>free at muktimedia dot com</em></strong></a><a class="genanchor" href="#28835"> &para;</a><div class="date" title="2003-01-25 05:23"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28835">
<div class="phpcode"><code><span class="html">Problem w/ MSSQL 2000 (or 7 possibly):::::<br />Warning: SQL error: [Microsoft][ODBC SQL Server Driver]Invalid<br />Descriptor Index, SQL state S1002 in SQLGetData in ...<br /><br /><a href="http://bugs.php.net/bug.php?id=18514" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=18514</a> <br /><br />The above error will be seen when calling @ODBC_RESULT_ALL() on a resultset that contains a field of type 'text' (MSSQL 2K).  If you see this error in @ODBC_RESULT_ALL then surely @ODBC_FETCH_INTO() will return false when the resultset contains a field of type 'text' (MSSQL 2K) - causing headaches.<br /><br />WORKAROUND : change the field type to NTEXT (SQL 2K/7) - this is preferable in many cases (except DB storage space) since NTEXT is simply Unicode Text.<br /><br />I tried a workaround at <a href="http://www.phpbuilder.com/mail/php-db/2001071/0240.php" rel="nofollow" target="_blank">http://www.phpbuilder.com/mail/php-db/2001071/0240.php</a> but this didn't work.<br /><br />It appears PHP could benefit from an update to its ODBC libraries since 'text' and 'memo' fields are often used in Win32 environments...</span></code></div>
  </div>
 </div>
  <div class="note" id="22863">  <div class="votes">
    <div id="Vu22863">
    <a href="/manual/vote-note.php?id=22863&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22863">
    <a href="/manual/vote-note.php?id=22863&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22863" title="no votes...">
    0
    </div>
  </div>
  <a href="#22863" class="name">
  <strong class="user"><em>scott at abcoa dot com</em></strong></a><a class="genanchor" href="#22863"> &para;</a><div class="date" title="2002-07-02 11:41"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22863">
<div class="phpcode"><code><span class="html">Using odbc_fetch_into() is becoming tiresome when it had to be changed in php version 4.0.5, 4.0.6 and 4.2.x.  Also, using define() function no longer work well with 4.2.x, so define() is not reliable for odbc_fetch_into().  Time on the job to keep up with the changes is ill-advised.  Turned out the better solution is to use odbc_fetch_array and not have to deal with the hassle of updating the database, web pages, etc.  It is worth the time in the long run.<br /><br />--clip-- (old script)<br />define(CUSTOMER_ID,0);<br />define(CUSTOMER_NAME,1);<br /><br />//$rows = 1;<br /><br />if (odbc_fetch_row($result))<br />{<br />//odbc_fetch_into($result,1,&amp;$user_detail); //php 4.0.5<br />//odbc_fetch_into($result,$row,$user_detail); //php 4.0.6<br />odbc_fetch_into($result,$user_detail,1);  //php 4.2.x<br />   echo $user_detail[CUSTOMER_ID];<br />} else {<br />   echo "Failed!";<br />}<br />--clip--<br />//#########################################<br />--clip-- (new script)<br />if (odbc_fetch_row($result))<br />{<br />   while($user_detail = odbc_fetch_array($result) ) {<br />      echo $user_detail[CUSTOMER_ID];<br />   }<br />} else {<br />   echo "Failed!";<br />}<br />--clip--<br /><br />This is pretty useful when we keep adding columns to the database table.  If you combine two tables and have two columns with the same column name, then you'll need to have two seperate array, like $user_detail1 and $user_detail2, etc.  Whatever you can come up with.</span></code></div>
  </div>
 </div>
  <div class="note" id="15276">  <div class="votes">
    <div id="Vu15276">
    <a href="/manual/vote-note.php?id=15276&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15276">
    <a href="/manual/vote-note.php?id=15276&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15276" title="no votes...">
    0
    </div>
  </div>
  <a href="#15276" class="name">
  <strong class="user"><em>matt(at)lazycat(dot)org</em></strong></a><a class="genanchor" href="#15276"> &para;</a><div class="date" title="2001-09-04 06:36"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15276">
<div class="phpcode"><code><span class="html">Most annoyingly with PHP 4.0.6, the new "feature" regarding the requirement of the row number to be non-constant means that this code no longer works:
<br />
<br />$row_num = 1; $row = array();
<br />while (odbc_fetch_into($result, $row_num++, $row) {
<br />  // Stuff
<br />}
<br />
<br />So if you were wondering why, that's why. This infuriated me above all other issues I've had with PHP when I upgraded to 4.0.6
<br />Luckily the workaround is easy enough. Just use $row_num in the odbc_fetch_into() and add $row_num++ inside the while loop. But it's still very annoying! I haven't found any other functions where this is an issue..</span></code></div>
  </div>
 </div>
  <div class="note" id="1077">  <div class="votes">
    <div id="Vu1077">
    <a href="/manual/vote-note.php?id=1077&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd1077">
    <a href="/manual/vote-note.php?id=1077&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V1077" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#1077" class="name">
  <strong class="user"><em>scott at gamesonline dot com</em></strong></a><a class="genanchor" href="#1077"> &para;</a><div class="date" title="1999-07-01 08:13"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom1077">
<div class="phpcode"><code><span class="html">(Win32) When calling this function against an Access 97 table, if the second parameter is passed in as the row you wish to retrieve, it APPEARS you will keep getting the same row back, regardless of the value passed in.  Solution: Don't pass in the second parameter and everything autoincrements just fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="256">  <div class="votes">
    <div id="Vu256">
    <a href="/manual/vote-note.php?id=256&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd256">
    <a href="/manual/vote-note.php?id=256&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V256" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#256" class="name">
  <strong class="user"><em>vbhunt at silverfox dot com</em></strong></a><a class="genanchor" href="#256"> &para;</a><div class="date" title="1998-09-28 12:27"><strong>27 years ago</strong></div>
  <div class="text" id="Hcom256">
<div class="phpcode"><code><span class="html">This function interacts with odbc_result in that it appears to increment the internal record pointer for the current query result.  Thus if you use this function and desire to have the record you just fetched available for use in odbc_result; you'll have to call odbc_fetch_result again with the current row number.  This behavior can be especially confusing if your query result contains a single record.  When this is the case, use of odbc_fetch_into appears to break odbc_result.</span></code></div>
  </div>
 </div>
  <div class="note" id="103272">  <div class="votes">
    <div id="Vu103272">
    <a href="/manual/vote-note.php?id=103272&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103272">
    <a href="/manual/vote-note.php?id=103272&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103272" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#103272" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#103272"> &para;</a><div class="date" title="2011-04-05 03:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103272">
<div class="phpcode"><code><span class="html">It returns FALSE if there was an error reading the row but also when there aren't more rows available.</span></code></div>
  </div>
 </div>
  <div class="note" id="26885">  <div class="votes">
    <div id="Vu26885">
    <a href="/manual/vote-note.php?id=26885&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26885">
    <a href="/manual/vote-note.php?id=26885&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26885" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#26885" class="name">
  <strong class="user"><em>PHP at TeamBurke dot com dot NoSpam</em></strong></a><a class="genanchor" href="#26885"> &para;</a><div class="date" title="2002-11-15 08:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26885">
<div class="phpcode"><code><span class="html">DON'T START AT ROW 0<br /><br />When using odbc_fetch_into($id,$row_num,$array) don't intialize the $row_num=0.  <br /><br />Why... well if you do this and you have one record in the table you'll get an error... not a problem.  BUT, if you have more than one row in the table, there is no error and the first record in the table is lost.<br /><br />This may seem obvious, but remember that we count many things starting from 0, so doing it here made sense in my mind.  Took quite some time to solve the problem, because I had used the same method on another page, where there were multiple row records, and that page worked fine.  I just never noticed that it failed to print the first record's information.  So you can imagine my puzzlement when the code worked on one page and not the next.</span></code></div>
  </div>
 </div>
  <div class="note" id="13647">  <div class="votes">
    <div id="Vu13647">
    <a href="/manual/vote-note.php?id=13647&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13647">
    <a href="/manual/vote-note.php?id=13647&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13647" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#13647" class="name">
  <strong class="user"><em>doc at vulcanmicro dot com</em></strong></a><a class="genanchor" href="#13647"> &para;</a><div class="date" title="2001-06-26 01:47"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13647">
<div class="phpcode"><code><span class="html">Going from php 4.0.5 to php 4.0.6, the following syntax nolonger works:
<br />odbc_fetch_into($result,$start-1,&amp;$fields);
<br />In 4.0.5 it works, in 4.0.6 it produces this error:
<br />Only variables can be passed by reference
<br />The following lines DO work however:
<br />$tmp=$start-1;
<br />odbc_fetch_into($result,$tmp,&amp;$fields);</span></code></div>
  </div>
 </div>
  <div class="note" id="47488">  <div class="votes">
    <div id="Vu47488">
    <a href="/manual/vote-note.php?id=47488&amp;page=function.odbc-fetch-into&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47488">
    <a href="/manual/vote-note.php?id=47488&amp;page=function.odbc-fetch-into&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47488" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#47488" class="name">
  <strong class="user"><em>brian m</em></strong></a><a class="genanchor" href="#47488"> &para;</a><div class="date" title="2004-11-17 02:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47488">
<div class="phpcode"><code><span class="html">Here is a very simple mehod to dump SQL results into an array that can be edited and manipulated.<br />==============================================<br /><br />//Create the array:<br />$row = array(); <br />while (odbc_fetch_into($res, $row, ODBC_NUM)) {<br />    array_push($stuff,$row);<br />} <br /><br />//The results are now in an array.  To display the array as an HTML table we can use the following:<br /><br />foreach($stuff as $line){<br />    echo "&lt;tr&gt;\n";<br />    foreach($line as $field){<br />        echo "&lt;td&gt;".$field."&lt;/td&gt;\n";<br />    }<br />}<br /><br />==============================================<br />Using this method allows a person to control individual data elements in each row and field.  I am far more familiar with ASP and the getrows function but this is the closest equivalent that I have been able to find.<br /><br />I good friend and co-worker was able to determine how to get this to work.  Thanks Robby.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-fetch-into&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-fetch-into.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.uodbc.php">ODBC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.odbc-autocommit.php" title="odbc_&#8203;autocommit">odbc_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-binmode.php" title="odbc_&#8203;binmode">odbc_&#8203;binmode</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close.php" title="odbc_&#8203;close">odbc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close-all.php" title="odbc_&#8203;close_&#8203;all">odbc_&#8203;close_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columnprivileges.php" title="odbc_&#8203;columnprivileges">odbc_&#8203;columnprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connect.php" title="odbc_&#8203;connect">odbc_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-is-quoted.php" title="odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted">odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-should-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-cursor.php" title="odbc_&#8203;cursor">odbc_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-data-source.php" title="odbc_&#8203;data_&#8203;source">odbc_&#8203;data_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-do.php" title="odbc_&#8203;do">odbc_&#8203;do</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-error.php" title="odbc_&#8203;error">odbc_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-errormsg.php" title="odbc_&#8203;errormsg">odbc_&#8203;errormsg</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-exec.php" title="odbc_&#8203;exec">odbc_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-execute.php" title="odbc_&#8203;execute">odbc_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-array.php" title="odbc_&#8203;fetch_&#8203;array">odbc_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="current">
                            <a href="function.odbc-fetch-into.php" title="odbc_&#8203;fetch_&#8203;into">odbc_&#8203;fetch_&#8203;into</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-object.php" title="odbc_&#8203;fetch_&#8203;object">odbc_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-row.php" title="odbc_&#8203;fetch_&#8203;row">odbc_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-len.php" title="odbc_&#8203;field_&#8203;len">odbc_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-name.php" title="odbc_&#8203;field_&#8203;name">odbc_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-num.php" title="odbc_&#8203;field_&#8203;num">odbc_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-precision.php" title="odbc_&#8203;field_&#8203;precision">odbc_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-scale.php" title="odbc_&#8203;field_&#8203;scale">odbc_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-type.php" title="odbc_&#8203;field_&#8203;type">odbc_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-foreignkeys.php" title="odbc_&#8203;foreignkeys">odbc_&#8203;foreignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-free-result.php" title="odbc_&#8203;free_&#8203;result">odbc_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-gettypeinfo.php" title="odbc_&#8203;gettypeinfo">odbc_&#8203;gettypeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-longreadlen.php" title="odbc_&#8203;longreadlen">odbc_&#8203;longreadlen</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-next-result.php" title="odbc_&#8203;next_&#8203;result">odbc_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-fields.php" title="odbc_&#8203;num_&#8203;fields">odbc_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-rows.php" title="odbc_&#8203;num_&#8203;rows">odbc_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-pconnect.php" title="odbc_&#8203;pconnect">odbc_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-prepare.php" title="odbc_&#8203;prepare">odbc_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-primarykeys.php" title="odbc_&#8203;primarykeys">odbc_&#8203;primarykeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedurecolumns.php" title="odbc_&#8203;procedurecolumns">odbc_&#8203;procedurecolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedures.php" title="odbc_&#8203;procedures">odbc_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result.php" title="odbc_&#8203;result">odbc_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result-all.php" title="odbc_&#8203;result_&#8203;all">odbc_&#8203;result_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-rollback.php" title="odbc_&#8203;rollback">odbc_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-setoption.php" title="odbc_&#8203;setoption">odbc_&#8203;setoption</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-specialcolumns.php" title="odbc_&#8203;specialcolumns">odbc_&#8203;specialcolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-statistics.php" title="odbc_&#8203;statistics">odbc_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tableprivileges.php" title="odbc_&#8203;tableprivileges">odbc_&#8203;tableprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tables.php" title="odbc_&#8203;tables">odbc_&#8203;tables</a>
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
