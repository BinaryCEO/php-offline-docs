<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysqli::store_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mysqli.store-result.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mysqli.store-result.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.store-result.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.mysqli.php">
 <link rel="prev" href="https://www.php.net/manual/en/mysqli.stmt-init.php">
 <link rel="next" href="https://www.php.net/manual/en/mysqli.thread-id.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mysqli.store-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mysqli.store-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mysqli.store-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mysqli.store-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mysqli.store-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mysqli.store-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mysqli.store-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mysqli.store-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mysqli.store-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mysqli.store-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mysqli.store-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Transfers a result set from the last query" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysqli::store_result - Manual" />
<meta name="twitter:description" content="Transfers a result set from the last query" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysqli::store_result - Manual" />
<meta itemprop="description" content="Transfers a result set from the last query" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Transfers a result set from the last query" />

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
        <a href="mysqli.thread-id.php">
          mysqli::$thread_id &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mysqli.stmt-init.php">
          &laquo; mysqli::stmt_init        </a>
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
            <option value='en/mysqli.store-result.php' selected="selected">English</option>
            <option value='de/mysqli.store-result.php'>German</option>
            <option value='es/mysqli.store-result.php'>Spanish</option>
            <option value='fr/mysqli.store-result.php'>French</option>
            <option value='it/mysqli.store-result.php'>Italian</option>
            <option value='ja/mysqli.store-result.php'>Japanese</option>
            <option value='pt_BR/mysqli.store-result.php'>Brazilian Portuguese</option>
            <option value='ru/mysqli.store-result.php'>Russian</option>
            <option value='tr/mysqli.store-result.php'>Turkish</option>
            <option value='uk/mysqli.store-result.php'>Ukrainian</option>
            <option value='zh/mysqli.store-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mysqli.store-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysqli::store_result</h1>
  <h1 class="refname">mysqli_store_result</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mysqli::store_result</span> -- <span class="refname">mysqli_store_result</span> &mdash; <span class="dc-title">Transfers a result set from the last query</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-mysqli.store-result-description">
  <h3 class="title">Description</h3>
  <p class="para">Object-oriented style</p>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>mysqli::store_result</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">Procedural style</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>mysqli_store_result</strong></span>(<span class="methodparam"><span class="type"><a href="class.mysqli.php" class="type mysqli">mysqli</a></span> <code class="parameter">$mysql</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="class.mysqli-result.php" class="type mysqli_result">mysqli_result</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Transfers the result set from the last query on the database connection
   represented by the <code class="parameter">mysql</code> parameter to be used with
   the <span class="function"><a href="mysqli-result.data-seek.php" class="function">mysqli_data_seek()</a></span> function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-mysqli.store-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
   <dt>
<code class="parameter">mysql</code></dt><dd><p class="para">Procedural style only: A <span class="classname"><a href="class.mysqli.php" class="classname">mysqli</a></span> object
returned by <span class="function"><a href="function.mysqli-connect.php" class="function">mysqli_connect()</a></span> or <span class="function"><a href="mysqli.init.php" class="function">mysqli_init()</a></span>
</p></dd>
   
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The option that you want to set. As of PHP 8.1, this parameter has no effect. It can be one of the following values:
       <table id="mysqli.store-result.parameters" class="doctable table">
        <caption><strong>Valid options</strong></caption>
        
         <thead>
          <tr>
           <th>Name</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="mysqli.constants.php#constant.mysqli-store-result-copy-data">MYSQLI_STORE_RESULT_COPY_DATA</a></code></strong></td>
           <td>Copy results from the internal mysqlnd buffer into the PHP variables fetched. By default,
           mysqlnd will use a reference logic to avoid copying and duplicating results held in memory.
           For certain result sets, for example, result sets with many small rows, the copy approach can
           reduce the overall memory usage because PHP variables holding results may be
           released earlier (available with mysqlnd only)</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-mysqli.store-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a buffered result object or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>mysqli_store_result()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> in case the query
    didn&#039;t return a result set (if the query was, for example an INSERT
    statement). This function also returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if the reading of the
    result set failed. You can check if you have got an error by checking
    if <span class="function"><a href="mysqli.error.php" class="function">mysqli_error()</a></span> doesn&#039;t return an empty string, if
    <span class="function"><a href="mysqli.errno.php" class="function">mysqli_errno()</a></span> returns a non zero value, or if
    <span class="function"><a href="mysqli.field-count.php" class="function">mysqli_field_count()</a></span> returns a non zero value.
    Also possible reason for this function returning <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> after
    successful call to <span class="function"><a href="mysqli.query.php" class="function">mysqli_query()</a></span> can be too large
    result set (memory for it cannot be allocated). If
    <span class="function"><a href="mysqli.field-count.php" class="function">mysqli_field_count()</a></span> returns a non-zero value, the
    statement should have produced a non-empty result set.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-mysqli.store-result-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If mysqli error reporting is enabled (<strong><code><a href="mysqli.constants.php#constant.mysqli-report-error">MYSQLI_REPORT_ERROR</a></code></strong>) and the requested operation fails,
a warning is generated. If, in addition, the mode is set to <strong><code><a href="mysqli.constants.php#constant.mysqli-report-strict">MYSQLI_REPORT_STRICT</a></code></strong>,
a <span class="classname"><a href="class.mysqli-sql-exception.php" class="classname">mysqli_sql_exception</a></span> is thrown instead.</p>
 </div>


 <div class="refsect1 changelog" id="refsect1-mysqli.store-result-changelog">
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
       Passing the <code class="parameter">mode</code> parameter is now deprecated.
       The parameter has had no effect as of PHP 8.1.0.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-mysqli.store-result-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   See <span class="function"><a href="mysqli.multi-query.php" class="function">mysqli_multi_query()</a></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-mysqli.store-result-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Although it is always good practice to free the memory used by the result
    of a query using the <span class="function"><a href="mysqli-result.free.php" class="function">mysqli_free_result()</a></span> function,
    when transferring large result sets using the
    <span class="function"><strong>mysqli_store_result()</strong></span> this becomes particularly
    important.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-mysqli.store-result-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.real-query.php" class="function" rel="rdfs-seeAlso">mysqli_real_query()</a> - Execute an SQL query</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysqli/mysqli/store-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmysqli.store-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mysqli.store-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.store-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96048">  <div class="votes">
    <div id="Vu96048">
    <a href="/manual/vote-note.php?id=96048&amp;page=mysqli.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96048">
    <a href="/manual/vote-note.php?id=96048&amp;page=mysqli.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96048" title="58% like this...">
    11
    </div>
  </div>
  <a href="#96048" class="name">
  <strong class="user"><em>mitchind</em></strong></a><a class="genanchor" href="#96048"> &para;</a><div class="date" title="2010-02-04 08:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96048">
<div class="phpcode"><code><span class="html">After reading through original notes and example above as well as wading through the documentation, I finally got a loop to work with two stored procedures.<br /><br />Using the results of the first one as a parameter for the second one. Easier to do this way than a huge modified sequence of Inner Join queries.<br /><br />Hope this helps others...<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Connect to server and database<br /></span><span class="default">$mysqli        </span><span class="keyword">= new </span><span class="default">mysqli</span><span class="keyword">(</span><span class="string">"</span><span class="default">$dbServer</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$dbUser</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$dbPass</span><span class="string">"</span><span class="keyword">, </span><span class="string">"</span><span class="default">$dbName</span><span class="string">"</span><span class="keyword">);<br /><br /></span><span class="comment">// Open First Stored Procedure using MYSQLI_STORE_RESULT to retain for looping<br /></span><span class="default">$resultPicks </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"CALL </span><span class="default">$proc</span><span class="string"> (</span><span class="default">$searchDate</span><span class="string">, </span><span class="default">$maxRSI</span><span class="string">, </span><span class="default">$incRSI</span><span class="string">, </span><span class="default">$minMACD</span><span class="string">, </span><span class="default">$minVol</span><span class="string">, </span><span class="default">$minTrades</span><span class="string">, </span><span class="default">$minClose</span><span class="string">, </span><span class="default">$maxClose</span><span class="string">)"</span><span class="keyword">, </span><span class="default">MYSQLI_STORE_RESULT</span><span class="keyword">);<br /><br /></span><span class="comment">// process one row at a time from first SP<br /></span><span class="keyword">while(</span><span class="default">$picksRow </span><span class="keyword">= </span><span class="default">$resultPicks</span><span class="keyword">-&gt;</span><span class="default">fetch_array</span><span class="keyword">(</span><span class="default">MYSQLI_ASSOC</span><span class="keyword">)) {<br />    </span><span class="comment">// Get Parameter for next SP<br />    </span><span class="default">$symbol     </span><span class="keyword">= </span><span class="default">$picksRow</span><span class="keyword">[</span><span class="string">'Symbol'</span><span class="keyword">];<br /><br />    </span><span class="comment">// Free stored results<br />    </span><span class="default">clearStoredResults</span><span class="keyword">(</span><span class="default">$mysqli</span><span class="keyword">);<br /><br />    </span><span class="comment">// Execute second SP using value from first as a parameter (MYSQLI_USE_RESULT and free result right away)<br />    </span><span class="default">$resultData    </span><span class="keyword">= </span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"CALL prcGetLastMACDDatesBelowZero('</span><span class="default">$symbol</span><span class="string">', </span><span class="default">$searchDate</span><span class="string">)"</span><span class="keyword">, </span><span class="default">MYSQLI_USE_RESULT</span><span class="keyword">);<br />    </span><span class="default">$dataRow    </span><span class="keyword">= </span><span class="default">$resultData</span><span class="keyword">-&gt;</span><span class="default">fetch_array</span><span class="keyword">(</span><span class="default">MYSQLI_ASSOC</span><span class="keyword">);<br /><br />    </span><span class="comment">// Dump result from both related queries<br />    </span><span class="keyword">echo </span><span class="string">"&lt;p&gt;</span><span class="default">$symbol</span><span class="string"> ... Num Dates: " </span><span class="keyword">. </span><span class="default">$dataRow</span><span class="keyword">[</span><span class="string">'NumDates'</span><span class="keyword">];<br /><br />    </span><span class="comment">// Free results from second SP<br />    </span><span class="default">$resultData</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br /><br />}<br /><br /></span><span class="comment">// Free results from first SP<br /></span><span class="default">$resultPicks</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br /><br /></span><span class="comment">// close connections<br /></span><span class="default">$mysqli</span><span class="keyword">-&gt;</span><span class="default">close</span><span class="keyword">();<br /><br /></span><span class="comment">#------------------------------------------<br /></span><span class="keyword">function </span><span class="default">clearStoredResults</span><span class="keyword">(</span><span class="default">$mysqli_link</span><span class="keyword">){<br /></span><span class="comment">#------------------------------------------<br />    </span><span class="keyword">while(</span><span class="default">$mysqli_link</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()){<br />      if(</span><span class="default">$l_result </span><span class="keyword">= </span><span class="default">$mysqli_link</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">()){<br />              </span><span class="default">$l_result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />      }<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122404">  <div class="votes">
    <div id="Vu122404">
    <a href="/manual/vote-note.php?id=122404&amp;page=mysqli.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122404">
    <a href="/manual/vote-note.php?id=122404&amp;page=mysqli.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122404" title="62% like this...">
    2
    </div>
  </div>
  <a href="#122404" class="name">
  <strong class="user"><em>filippo at ecoms dot it</em></strong></a><a class="genanchor" href="#122404"> &para;</a><div class="date" title="2018-02-18 06:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122404">
<div class="phpcode"><code><span class="html">Code to handling errors:<br /><br />if ($mysqli-&gt;multi_query($query)) {<br />    $result = $mysqli-&gt;store_result();<br />    if ($mysqli-&gt;errno == 0) {<br />    <br />        /* First result set or FALSE (if the query didn't return a result set) is stored in $result */<br /><br />        while ($mysqli-&gt;more_results()) {<br />            if ($mysqli-&gt;next_result()) {<br />                $result = $mysqli-&gt;store_result();<br />                if ($mysqli-&gt;errno == 0) {<br />                    /* The result set or FALSE (see above) is stored in $result */<br />                }<br />                else {<br />                    /* Result set read error */<br />                    break;<br />                }<br />            }<br />            else {<br />                /* Error in the query */<br />            }<br />        }<br />    }<br />    else {<br />        /* First result set read error */<br />    }<br />}<br />else {<br />    /* Error in the first query */<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="92352">  <div class="votes">
    <div id="Vu92352">
    <a href="/manual/vote-note.php?id=92352&amp;page=mysqli.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92352">
    <a href="/manual/vote-note.php?id=92352&amp;page=mysqli.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92352" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#92352" class="name">
  <strong class="user"><em>Warner</em></strong></a><a class="genanchor" href="#92352"> &para;</a><div class="date" title="2009-07-21 02:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92352">
<div class="phpcode"><code><span class="html">It also seems, that executing a SET statement in multi_query() returns an extra recordset too, which one would not expect.</span></code></div>
  </div>
 </div>
  <div class="note" id="74478">  <div class="votes">
    <div id="Vu74478">
    <a href="/manual/vote-note.php?id=74478&amp;page=mysqli.store-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74478">
    <a href="/manual/vote-note.php?id=74478&amp;page=mysqli.store-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74478" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#74478" class="name">
  <strong class="user"><em>lau at goldenweb dot com dot au</em></strong></a><a class="genanchor" href="#74478"> &para;</a><div class="date" title="2007-04-13 01:29"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74478">
<div class="phpcode"><code><span class="html">Beware when using stored procedures:<br />If you connect to the database and then call dbproc A followed by a call to db proc B and then close the connection to the db, the second procedure call will not work.<br /><br />It looks like there is a bug in MYSQL or mysqli that returns an extra recordset than you would expect. It then doesn't let you call another stored procedure until you finish processing all the recordsets from the first stored procedure call. <br /><br />The solution is to simply loop through the additional recordsets between calls to db procs. Here is a function that I call between db proc calls:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">#--------------------------------<br /></span><span class="keyword">function </span><span class="default">ClearRecordsets</span><span class="keyword">(</span><span class="default">$p_Result</span><span class="keyword">){<br /></span><span class="comment">#--------------------------------<br />    </span><span class="default">$p_Result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();    <br />    while(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Mysqli</span><span class="keyword">-&gt;</span><span class="default">next_result</span><span class="keyword">()){<br />      if(</span><span class="default">$l_result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">Mysqli</span><span class="keyword">-&gt;</span><span class="default">store_result</span><span class="keyword">()){<br />              </span><span class="default">$l_result</span><span class="keyword">-&gt;</span><span class="default">free</span><span class="keyword">();<br />      }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mysqli.store-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mysqli.store-result.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
