<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mysql_real_escape_string - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mysql-real-escape-string.php">
 <link rel="shorturl" href="https://www.php.net/mysql-real-escape-string">
 <link rel="alternate" href="https://www.php.net/mysql-real-escape-string" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mysql.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mysql-query.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mysql-result.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mysql-real-escape-string.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mysql-real-escape-string.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mysql-real-escape-string.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mysql-real-escape-string.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mysql-real-escape-string.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mysql-real-escape-string.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mysql-real-escape-string.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mysql-real-escape-string.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mysql-real-escape-string.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mysql-real-escape-string.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mysql-real-escape-string.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escapes special characters in a string for use in an SQL statement" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mysql_real_escape_string - Manual" />
<meta name="twitter:description" content="Escapes special characters in a string for use in an SQL statement" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mysql_real_escape_string - Manual" />
<meta itemprop="description" content="Escapes special characters in a string for use in an SQL statement" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escapes special characters in a string for use in an SQL statement" />

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
        <a href="function.mysql-result.php">
          mysql_result &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mysql-query.php">
          &laquo; mysql_query        </a>
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
            <option value='en/function.mysql-real-escape-string.php' selected="selected">English</option>
            <option value='de/function.mysql-real-escape-string.php'>German</option>
            <option value='es/function.mysql-real-escape-string.php'>Spanish</option>
            <option value='fr/function.mysql-real-escape-string.php'>French</option>
            <option value='it/function.mysql-real-escape-string.php'>Italian</option>
            <option value='ja/function.mysql-real-escape-string.php'>Japanese</option>
            <option value='pt_BR/function.mysql-real-escape-string.php'>Brazilian Portuguese</option>
            <option value='ru/function.mysql-real-escape-string.php'>Russian</option>
            <option value='tr/function.mysql-real-escape-string.php'>Turkish</option>
            <option value='uk/function.mysql-real-escape-string.php'>Ukrainian</option>
            <option value='zh/function.mysql-real-escape-string.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mysql-real-escape-string" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mysql_real_escape_string</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5)</p><p class="refpurpose"><span class="refname">mysql_real_escape_string</span> &mdash; <span class="dc-title">Escapes special characters in a string for use in an SQL statement</span></p>

 </div>

 <div id="function.mysql-real-escape-string-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">This extension was deprecated in PHP 5.5.0, and it was removed in PHP 7.0.0.
Instead, the <a href="book.mysqli.php" class="link">MySQLi</a> or <a href="ref.pdo-mysql.php" class="link">PDO_MySQL</a> extension should be used.
See also <a href="mysqlinfo.api.choosing.php" class="link">MySQL: choosing an API</a> guide.
Alternatives to this function include:</p>
   <ul class="simplelist">
    <li><span class="function"><a href="mysqli.real-escape-string.php" class="function">mysqli_real_escape_string()</a></span></li>
    <li><span class="methodname"><a href="pdo.quote.php" class="methodname">PDO::quote()</a></span></li>
   </ul>
  </div>
 </div>

 <div class="refsect1 description" id="refsect1-function.mysql-real-escape-string-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mysql_real_escape_string</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$unescaped_string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$link_identifier</code><span class="initializer"> = NULL</span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Escapes special characters in the <code class="parameter">unescaped_string</code>, 
   taking into account the current character set of the connection so that it 
   is safe to place it in a <span class="function"><a href="function.mysql-query.php" class="function">mysql_query()</a></span>. If binary data 
   is to be inserted, this function must be used.
  </p>
  <p class="para">
   <span class="function"><strong>mysql_real_escape_string()</strong></span> calls MySQL&#039;s library function
   mysql_real_escape_string, which prepends backslashes to the following characters:
   <code class="literal">\x00</code>, <code class="literal">\n</code>,
   <code class="literal">\r</code>, <code class="literal">\</code>, <code class="literal">&#039;</code>,
   <code class="literal">&quot;</code> and <code class="literal">\x1a</code>.
  </p>
  <p class="para">
   This function must always (with few exceptions) be used to make data
   safe before sending a query to MySQL.
  </p>
  
  <div class="caution"><strong class="caution">Caution</strong>
   <h1 class="title">Security: the default character set</h1>
   <p class="para">
    The character set must be set either at the server level, or with
    the API function <span class="function"><a href="function.mysql-set-charset.php" class="function">mysql_set_charset()</a></span> for it to affect
    <span class="function"><strong>mysql_real_escape_string()</strong></span>. See the concepts section
    on <a href="mysqlinfo.concepts.charset.php" class="link">character sets</a> for
    more information.
   </p>
  </div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mysql-real-escape-string-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">unescaped_string</code></dt>
     <dd>
      <p class="para">
       The string that is to be escaped.
      </p>
     </dd>
    
    <dt>
<code class="parameter">link_identifier</code></dt><dd><p class="para">The MySQL connection. If the
link identifier is not specified, the last link opened by
<span class="function"><a href="function.mysql-connect.php" class="function">mysql_connect()</a></span> is assumed. If no such link is found, it
will try to create one as if <span class="function"><a href="function.mysql-connect.php" class="function">mysql_connect()</a></span> had been called
with no arguments. If no connection is found or established, an
<strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error is generated.</p></dd>

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mysql-real-escape-string-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the escaped string, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.mysql-real-escape-string-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Executing this function without a MySQL connection present will
   also emit <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level PHP errors. Only
   execute this function with a valid MySQL connection present.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.mysql-real-escape-string-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1920">
    <p><strong>Example #1 Simple <span class="function"><strong>mysql_real_escape_string()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Connect<br /></span><span style="color: #0000BB">$link </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'mysql_host'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mysql_user'</span><span style="color: #007700">, </span><span style="color: #DD0000">'mysql_password'</span><span style="color: #007700">)<br />    OR die(</span><span style="color: #0000BB">mysql_error</span><span style="color: #007700">());<br /><br /></span><span style="color: #FF8000">// Query<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #0000BB">sprintf</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM users WHERE user='%s' AND password='%s'"</span><span style="color: #007700">,<br />            </span><span style="color: #0000BB">mysql_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$user</span><span style="color: #007700">),<br />            </span><span style="color: #0000BB">mysql_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$password</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1921">
    <p><strong>Example #2 <span class="function"><strong>mysql_real_escape_string()</strong></span> requires a connection example</strong></p>
    <div class="example-contents"><p>
     This example demonstrates what happens if a MySQL connection is not
     present when calling this function.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// We have not connected to MySQL<br /><br /></span><span style="color: #0000BB">$lastname  </span><span style="color: #007700">= </span><span style="color: #DD0000">"O'Reilly"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$_lastname </span><span style="color: #007700">= </span><span style="color: #0000BB">mysql_real_escape_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$lastname</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM actors WHERE last_name = '</span><span style="color: #0000BB">$_lastname</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$_lastname</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Warning: mysql_real_escape_string(): No such file or directory in /this/test/script.php on line 5
Warning: mysql_real_escape_string(): A link to the server could not be established in /this/test/script.php on line 5

bool(false)
string(41) &quot;SELECT * FROM actors WHERE last_name = &#039;&#039;&quot;</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-1922">
    <p><strong>Example #3 An example SQL Injection Attack</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// We didn't check $_POST['password'], it could be anything the user wanted! For example:<br /></span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'username'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'aidan'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'password'</span><span style="color: #007700">] = </span><span style="color: #DD0000">"' OR ''='"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Query database to check if there are any matching users<br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM users WHERE user='</span><span style="color: #007700">{</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'username'</span><span style="color: #007700">]}</span><span style="color: #DD0000">' AND password='</span><span style="color: #007700">{</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'password'</span><span style="color: #007700">]}</span><span style="color: #DD0000">'"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">mysql_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// This means the query sent to MySQL would be:<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$query</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

     <div class="example-contents"><p>
      The query sent to MySQL:
     </p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">SELECT * FROM users WHERE user=&#039;aidan&#039; AND password=&#039;&#039; OR &#039;&#039;=&#039;&#039;</pre>
</div>
    </div>
    <div class="example-contents"><p>
     This would allow anyone to log in without a valid password.
    </p></div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.mysql-real-escape-string-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    A MySQL connection is required before using 
    <span class="function"><strong>mysql_real_escape_string()</strong></span> otherwise an error of
    level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is generated, and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is 
    returned. If <code class="parameter">link_identifier</code> isn&#039;t defined, the
    last MySQL connection is used.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If this function is not used to escape data, the query is vulnerable to
    <a href="security.database.sql-injection.php" class="link">SQL Injection Attacks</a>.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    <span class="function"><strong>mysql_real_escape_string()</strong></span> does not escape
    <code class="literal">%</code> and <code class="literal">_</code>. These are wildcards in
    MySQL if combined with <code class="literal">LIKE</code>, <code class="literal">GRANT</code>,
    or <code class="literal">REVOKE</code>.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mysql-real-escape-string-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mysql-set-charset.php" class="function" rel="rdfs-seeAlso">mysql_set_charset()</a> - Sets the client character set</span></li>
    <li><span class="function"><a href="function.mysql-client-encoding.php" class="function" rel="rdfs-seeAlso">mysql_client_encoding()</a> - Returns the name of the character set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mysql/functions/mysql-real-escape-string.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mysql-real-escape-string%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mysql-real-escape-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mysql-real-escape-string.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="101248">  <div class="votes">
    <div id="Vu101248">
    <a href="/manual/vote-note.php?id=101248&amp;page=function.mysql-real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101248">
    <a href="/manual/vote-note.php?id=101248&amp;page=function.mysql-real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101248" title="71% like this...">
    182
    </div>
  </div>
  <a href="#101248" class="name">
  <strong class="user"><em>feedr</em></strong></a><a class="genanchor" href="#101248"> &para;</a><div class="date" title="2010-12-05 08:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101248">
<div class="phpcode"><code><span class="html">Just a little function which mimics the original mysql_real_escape_string but which doesn't need an active mysql connection. Could be implemented as a static function in a database class. Hope it helps someone.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mysql_escape_mimic</span><span class="keyword">(</span><span class="default">$inp</span><span class="keyword">) {
<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$inp</span><span class="keyword">))
<br />        return </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">__METHOD__</span><span class="keyword">, </span><span class="default">$inp</span><span class="keyword">);
<br />
<br />    if(!empty(</span><span class="default">$inp</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$inp</span><span class="keyword">)) {
<br />        return </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'\\'</span><span class="keyword">, </span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">, </span><span class="string">"'"</span><span class="keyword">, </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">"\x1a"</span><span class="keyword">), array(</span><span class="string">'\\\\'</span><span class="keyword">, </span><span class="string">'\\0'</span><span class="keyword">, </span><span class="string">'\\n'</span><span class="keyword">, </span><span class="string">'\\r'</span><span class="keyword">, </span><span class="string">"\\'"</span><span class="keyword">, </span><span class="string">'\\"'</span><span class="keyword">, </span><span class="string">'\\Z'</span><span class="keyword">), </span><span class="default">$inp</span><span class="keyword">);
<br />    }
<br />
<br />    return </span><span class="default">$inp</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108125">  <div class="votes">
    <div id="Vu108125">
    <a href="/manual/vote-note.php?id=108125&amp;page=function.mysql-real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108125">
    <a href="/manual/vote-note.php?id=108125&amp;page=function.mysql-real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108125" title="64% like this...">
    22
    </div>
  </div>
  <a href="#108125" class="name">
  <strong class="user"><em>Walter Tross</em></strong></a><a class="genanchor" href="#108125"> &para;</a><div class="date" title="2012-03-30 02:20"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108125">
<div class="phpcode"><code><span class="html">For further information:<br /><a href="http://dev.mysql.com/doc/refman/5.5/en/mysql-real-escape-string.html" rel="nofollow" target="_blank">http://dev.mysql.com/doc/refman/5.5/en/mysql-real-escape-string.html</a><br />(replace your MySQL version in the URL)</span></code></div>
  </div>
 </div>
  <div class="note" id="66836">  <div class="votes">
    <div id="Vu66836">
    <a href="/manual/vote-note.php?id=66836&amp;page=function.mysql-real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66836">
    <a href="/manual/vote-note.php?id=66836&amp;page=function.mysql-real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66836" title="63% like this...">
    31
    </div>
  </div>
  <a href="#66836" class="name">
  <strong class="user"><em>nicolas</em></strong></a><a class="genanchor" href="#66836"> &para;</a><div class="date" title="2006-05-30 01:38"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66836">
<div class="phpcode"><code><span class="html">Note that mysql_real_escape_string doesn't prepend backslashes to \x00, \n, \r, and and \x1a as mentionned in the documentation, but actually replaces the character with a MySQL acceptable representation for queries (e.g. \n is replaced with the '\n' litteral). (\, ', and " are escaped as documented) This doesn't change how you should use this function, but I think it's good to know.</span></code></div>
  </div>
 </div>
  <div class="note" id="110413">  <div class="votes">
    <div id="Vu110413">
    <a href="/manual/vote-note.php?id=110413&amp;page=function.mysql-real-escape-string&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110413">
    <a href="/manual/vote-note.php?id=110413&amp;page=function.mysql-real-escape-string&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110413" title="53% like this...">
    9
    </div>
  </div>
  <a href="#110413" class="name">
  <strong class="user"><em>sam at numbsafari dot com</em></strong></a><a class="genanchor" href="#110413"> &para;</a><div class="date" title="2012-10-19 05:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110413">
<div class="phpcode"><code><span class="html">No discussion of escaping is complete without telling everyone that you should basically never use external input to generate interpreted code. This goes for SQL statements, or anything you would call any sort of "eval" function on.
<br />
<br />So, instead of using this terribly broken function, use parametric prepared statements instead.
<br />
<br />Honestly, using user provided data to compose SQL statements should be considered professional negligence and you should be held accountable by your employer or client for not using parametric prepared statements.
<br />
<br />What does that mean?
<br />
<br />It means instead of building a SQL statement like this:
<br />
<br />"INSERT INTO X (A) VALUES(".$_POST["a"].")"
<br />
<br />You should use mysqli's prepare() function (<a href="http://php.net/manual/en/mysqli.prepare.php" rel="nofollow" target="_blank">http://php.net/manual/en/mysqli.prepare.php</a>) to execute a statement that looks like this:
<br />
<br />"INSERT INTO X (A) VALUES(?)"
<br />
<br />NB: This doesn't mean you should never generate dynamic SQL statements. What it means is that you should never use user-provided data to generate those statements. Any user-provided data should be passed through as parameters to the statement after it has been prepared.
<br />
<br />So, for example, if you are building up a little framework and want to do an insert to a table based on the request URI, it's in your best interest to not take the $_SERVER['REQUEST_URI'] value (or any part of it) and directly concatenate that with your query. Instead,  you should parse out the portion of the $_SERVER['REQUEST_URI'] value that you want, and map that through some kind of function or associative array to a non-user provided value. If the mapping produces no value, you know that something is wrong with the user provided data.
<br />
<br />Failing to follow this has been the cause of a number of SQL-injection problems in the Ruby On Rails framework, even though it uses parametric prepared statements. This is how GitHub was hacked at one point. So, no language is immune to this problem. That's why this is a general best practice and not something specific to PHP and why you should REALLY adopt it.
<br />
<br />Also, you should still do some kind of validation of the data provided by users, even when using parametric prepared statements. This is because that user-provided data will often become part of some generated HTML, and you want to ensure that the user provided data isn't going to cause security problems in the browser.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mysql-real-escape-string&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mysql-real-escape-string.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
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
                                                <li class="">
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
                                                <li class="current">
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
