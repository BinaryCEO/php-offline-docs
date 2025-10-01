<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysql_data_seek - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mysql-data-seek.php">
 <link rel="shorturl" href="https://www.php.net/mysql-data-seek">
 <link rel="alternate" href="https://www.php.net/mysql-data-seek" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mysql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mysql-create-db.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mysql-db-name.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mysql-data-seek.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mysql-data-seek.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mysql-data-seek.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mysql-data-seek.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mysql-data-seek.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mysql-data-seek.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mysql-data-seek.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mysql-data-seek.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mysql-data-seek.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mysql-data-seek.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mysql-data-seek.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Move internal result pointer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysql_data_seek - Manual" />
<meta name="twitter:description" content="Move internal result pointer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysql_data_seek - Manual" />
<meta itemprop="description" content="Move internal result pointer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Move internal result pointer" />

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
        <a href="function.mysql-db-name.php">
          mysql_db_name &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mysql-create-db.php">
          &laquo; mysql_create_db        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      <li><a href='set.mysqlinfo.php'>MySQL</a></li>      <li><a href='book.mysql.php'>MySQL (Original)</a></li>      <li><a href='ref.mysql.php'>MySQL Functions</a></li>      </ul>
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
            <option value='en/function.mysql-data-seek.php' selected="selected">English</option>
            <option value='de/function.mysql-data-seek.php'>German</option>
            <option value='es/function.mysql-data-seek.php'>Spanish</option>
            <option value='fr/function.mysql-data-seek.php'>French</option>
            <option value='it/function.mysql-data-seek.php'>Italian</option>
            <option value='ja/function.mysql-data-seek.php'>Japanese</option>
            <option value='pt_BR/function.mysql-data-seek.php'>Brazilian Portuguese</option>
            <option value='ru/function.mysql-data-seek.php'>Russian</option>
            <option value='tr/function.mysql-data-seek.php'>Turkish</option>
            <option value='uk/function.mysql-data-seek.php'>Ukrainian</option>
            <option value='zh/function.mysql-data-seek.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mysql-data-seek" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysql_data_seek</h1>
  <p class="verinfo">(PHP 4, PHP 5)</p><p class="refpurpose"><span class="refname">mysql_data_seek</span> &mdash; <span class="dc-title">Move internal result pointer</span></p>

 </div>

 <div id="function.mysql-data-seek-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0.
Instead, the <a href="book.mysqli.php" class="link">MySQLi</a> or <a href="ref.pdo-mysql.php" class="link">PDO_MySQL</a> extension should be used.
See also <a href="mysqlinfo.api.choosing.php" class="link">MySQL: choosing an API</a> guide.
Alternatives to this function include:</p>
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli-result.data-seek.php" class="function">mysqli_data_seek()</a></span></li>
    <li><strong><code><a href="pdo.constants.php#pdo.constants.fetch-ori-abs">PDO::FETCH_ORI_ABS</a></code></strong></li>
   </ul>
  </div>
 </div>

 <div class="refsect1 description" id="refsect1-function.mysql-data-seek-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mysql_data_seek</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$result</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$row_number</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>mysql_data_seek()</strong></span> moves the internal row
   pointer of the MySQL result associated with the specified result
   identifier to point to the specified row number.  The next call
   to a MySQL fetch function, such as <span class="function"><a href="function.mysql-fetch-assoc.php" class="function">mysql_fetch_assoc()</a></span>,
   would return that row.
  </p>
  <p class="para">
   <code class="parameter">row_number</code> starts at 0. The 
   <code class="parameter">row_number</code> should be a value in the range from 0 to
   <span class="function"><a href="function.mysql-num-rows.php" class="function">mysql_num_rows()</a></span> - 1. However if the result set 
   is empty (<span class="function"><a href="function.mysql-num-rows.php" class="function">mysql_num_rows()</a></span> == 0), a seek to 0 will 
   fail with an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> and 
   <span class="function"><strong>mysql_data_seek()</strong></span> will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.mysql-data-seek-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">result</code></dt><dd><p class="para">The result <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> that
is being evaluated. This result comes from a call to
<span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>.</p></dd>
    
     <dt><code class="parameter">row_number</code></dt>
     <dd>
      <p class="para">
       The desired row number of the new result pointer.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mysql-data-seek-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.mysql-data-seek-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1882">
    <p><strong>Example #1 <span class="function"><strong>mysql_data_seek()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mysql_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mysql_password'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$link</span><span style="color: #007700">) {<br />    die(</span><span style="color: #DD0000">'Could not connect: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">mysql_error</span><span style="color: #007700">());<br />}<br /></span><span style="color: #0000BB">$db_selected </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_select_db</span><span style="color: #007700">(</span><span style="color: #DD0000">'sample_db'</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$db_selected</span><span style="color: #007700">) {<br />    die(</span><span style="color: #DD0000">'Could not select database: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">mysql_error</span><span style="color: #007700">());<br />}<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT last_name, first_name FROM friends'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$result</span><span style="color: #007700">) {<br />    die(</span><span style="color: #DD0000">'Query failed: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">mysql_error</span><span style="color: #007700">());<br />}<br /></span><span style="color: #FF8000">/* fetch rows in reverse order */<br /></span><span style="color: #007700">for (</span><span style="color: #0000BB">$i </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_num_rows</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">; </span><span style="color: #0000BB">$i </span><span style="color: #007700">&gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">; </span><span style="color: #0000BB">$i</span><span style="color: #007700">--) {<br />    if (!</span><span style="color: #0000BB">mysql_data_seek</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">, </span><span style="color: #0000BB">$i</span><span style="color: #007700">)) {<br />        echo </span><span style="color: #DD0000">"Cannot seek to row </span><span style="color: #0000BB">$i</span><span style="color: #DD0000">: " </span><span style="color: #007700">. </span><span style="color: #0000BB">mysql_error</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />        continue;<br />    }<br /><br />    if (!(</span><span style="color: #0000BB">$row </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_fetch_assoc</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">))) {<br />        continue;<br />    }<br /><br />    echo </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'last_name'</span><span style="color: #007700">] . </span><span style="color: #DD0000">' ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'first_name'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">mysql_free_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mysql-data-seek-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The function <span class="function"><strong>mysql_data_seek()</strong></span> can be used in
    conjunction only with <span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>, not with
    <span class="function"><a href="function.mysql-unbuffered-query.php" class="function">mysql_unbuffered_query()</a></span>. 
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mysql-data-seek-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mysql-query.php" class="function" rel="rdfs-seeAlso">mysql_query()</a> - Send a MySQL query</span></li>
    <li><span class="function"><a href="function.mysql-num-rows.php" class="function" rel="rdfs-seeAlso">mysql_num_rows()</a> - Get number of rows in result</span></li>
    <li><span class="function"><a href="function.mysql-fetch-row.php" class="function" rel="rdfs-seeAlso">mysql_fetch_row()</a> - Get a result row as an enumerated array</span></li>
    <li><span class="function"><a href="function.mysql-fetch-assoc.php" class="function" rel="rdfs-seeAlso">mysql_fetch_assoc()</a> - Fetch a result row as an associative array</span></li>
    <li><span class="function"><a href="function.mysql-fetch-array.php" class="function" rel="rdfs-seeAlso">mysql_fetch_array()</a> - Fetch a result row as an associative array, a numeric array, or both</span></li>
    <li><span class="function"><a href="function.mysql-fetch-object.php" class="function" rel="rdfs-seeAlso">mysql_fetch_object()</a> - Fetch a result row as an object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysql/functions/mysql-data-seek.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mysql-data-seek%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mysql-data-seek&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mysql-data-seek.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mysql.php">MySQL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mysql-affected-rows.php" title="mysql_&#8203;affected_&#8203;rows">mysql_&#8203;affected_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-client-encoding.php" title="mysql_&#8203;client_&#8203;encoding">mysql_&#8203;client_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-close.php" title="mysql_&#8203;close">mysql_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-connect.php" title="mysql_&#8203;connect">mysql_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-create-db.php" title="mysql_&#8203;create_&#8203;db">mysql_&#8203;create_&#8203;db</a>
                        </li>
                                                <li class="current">
                            <a href="function.mysql-data-seek.php" title="mysql_&#8203;data_&#8203;seek">mysql_&#8203;data_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-db-name.php" title="mysql_&#8203;db_&#8203;name">mysql_&#8203;db_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-db-query.php" title="mysql_&#8203;db_&#8203;query">mysql_&#8203;db_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-drop-db.php" title="mysql_&#8203;drop_&#8203;db">mysql_&#8203;drop_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-errno.php" title="mysql_&#8203;errno">mysql_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-error.php" title="mysql_&#8203;error">mysql_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-escape-string.php" title="mysql_&#8203;escape_&#8203;string">mysql_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-array.php" title="mysql_&#8203;fetch_&#8203;array">mysql_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-assoc.php" title="mysql_&#8203;fetch_&#8203;assoc">mysql_&#8203;fetch_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-field.php" title="mysql_&#8203;fetch_&#8203;field">mysql_&#8203;fetch_&#8203;field</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-lengths.php" title="mysql_&#8203;fetch_&#8203;lengths">mysql_&#8203;fetch_&#8203;lengths</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-object.php" title="mysql_&#8203;fetch_&#8203;object">mysql_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-fetch-row.php" title="mysql_&#8203;fetch_&#8203;row">mysql_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-flags.php" title="mysql_&#8203;field_&#8203;flags">mysql_&#8203;field_&#8203;flags</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-len.php" title="mysql_&#8203;field_&#8203;len">mysql_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-name.php" title="mysql_&#8203;field_&#8203;name">mysql_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-seek.php" title="mysql_&#8203;field_&#8203;seek">mysql_&#8203;field_&#8203;seek</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-table.php" title="mysql_&#8203;field_&#8203;table">mysql_&#8203;field_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-field-type.php" title="mysql_&#8203;field_&#8203;type">mysql_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-free-result.php" title="mysql_&#8203;free_&#8203;result">mysql_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-get-client-info.php" title="mysql_&#8203;get_&#8203;client_&#8203;info">mysql_&#8203;get_&#8203;client_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-get-host-info.php" title="mysql_&#8203;get_&#8203;host_&#8203;info">mysql_&#8203;get_&#8203;host_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-get-proto-info.php" title="mysql_&#8203;get_&#8203;proto_&#8203;info">mysql_&#8203;get_&#8203;proto_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-get-server-info.php" title="mysql_&#8203;get_&#8203;server_&#8203;info">mysql_&#8203;get_&#8203;server_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-info.php" title="mysql_&#8203;info">mysql_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-insert-id.php" title="mysql_&#8203;insert_&#8203;id">mysql_&#8203;insert_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-list-dbs.php" title="mysql_&#8203;list_&#8203;dbs">mysql_&#8203;list_&#8203;dbs</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-list-fields.php" title="mysql_&#8203;list_&#8203;fields">mysql_&#8203;list_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-list-processes.php" title="mysql_&#8203;list_&#8203;processes">mysql_&#8203;list_&#8203;processes</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-list-tables.php" title="mysql_&#8203;list_&#8203;tables">mysql_&#8203;list_&#8203;tables</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-num-fields.php" title="mysql_&#8203;num_&#8203;fields">mysql_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-num-rows.php" title="mysql_&#8203;num_&#8203;rows">mysql_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-pconnect.php" title="mysql_&#8203;pconnect">mysql_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-ping.php" title="mysql_&#8203;ping">mysql_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-query.php" title="mysql_&#8203;query">mysql_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-real-escape-string.php" title="mysql_&#8203;real_&#8203;escape_&#8203;string">mysql_&#8203;real_&#8203;escape_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-result.php" title="mysql_&#8203;result">mysql_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-select-db.php" title="mysql_&#8203;select_&#8203;db">mysql_&#8203;select_&#8203;db</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-set-charset.php" title="mysql_&#8203;set_&#8203;charset">mysql_&#8203;set_&#8203;charset</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-stat.php" title="mysql_&#8203;stat">mysql_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-tablename.php" title="mysql_&#8203;tablename">mysql_&#8203;tablename</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-thread-id.php" title="mysql_&#8203;thread_&#8203;id">mysql_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.mysql-unbuffered-query.php" title="mysql_&#8203;unbuffered_&#8203;query">mysql_&#8203;unbuffered_&#8203;query</a>
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
