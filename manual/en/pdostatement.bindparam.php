<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::bindParam - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.bindparam.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.bindparam.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.bindparam.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.bindcolumn.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.bindvalue.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.bindparam.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.bindparam.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.bindparam.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.bindparam.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.bindparam.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.bindparam.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.bindparam.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.bindparam.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.bindparam.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.bindparam.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.bindparam.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds a parameter to the specified variable name" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::bindParam - Manual" />
<meta name="twitter:description" content="Binds a parameter to the specified variable name" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::bindParam - Manual" />
<meta itemprop="description" content="Binds a parameter to the specified variable name" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds a parameter to the specified variable name" />

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
        <a href="pdostatement.bindvalue.php">
          PDOStatement::bindValue &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.bindcolumn.php">
          &laquo; PDOStatement::bindColumn        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='class.pdostatement.php'>PDOStatement</a></li>      </ul>
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
            <option value='en/pdostatement.bindparam.php' selected="selected">English</option>
            <option value='de/pdostatement.bindparam.php'>German</option>
            <option value='es/pdostatement.bindparam.php'>Spanish</option>
            <option value='fr/pdostatement.bindparam.php'>French</option>
            <option value='it/pdostatement.bindparam.php'>Italian</option>
            <option value='ja/pdostatement.bindparam.php'>Japanese</option>
            <option value='pt_BR/pdostatement.bindparam.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.bindparam.php'>Russian</option>
            <option value='tr/pdostatement.bindparam.php'>Turkish</option>
            <option value='uk/pdostatement.bindparam.php'>Ukrainian</option>
            <option value='zh/pdostatement.bindparam.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.bindparam" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::bindParam</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDOStatement::bindParam</span> &mdash; <span class="dc-title">
   Binds a parameter to the specified variable name
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.bindparam-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::bindParam</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$param</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter reference">&$var</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = PDO::PARAM_STR</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxLength</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$driverOptions</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds a PHP variable to a corresponding named or question mark placeholder
   in the SQL statement that was used to prepare the statement.  Unlike
   <span class="methodname"><a href="pdostatement.bindvalue.php" class="methodname">PDOStatement::bindValue()</a></span>, the variable is bound as a
   reference and will only be evaluated at the time that
   <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span> is called.
  </p>
  <p class="para">
   Most parameters are input parameters, that is, parameters that are used
   in a read-only fashion to build up the query (but may nonetheless be cast
   according to <code class="parameter">type</code>).  Some drivers support the
   invocation of stored procedures that return data as output parameters,
   and some also as input/output parameters that both send in data and are
   updated to receive it.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.bindparam-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">param</code></dt>
      <dd>
       <p class="para">
        Parameter identifier. For a prepared statement using named
        placeholders, this will be a parameter name of the form
        <var class="varname">:name</var>. For a prepared statement using
        question mark placeholders, this will be the 1-indexed position of
        the parameter. 
       </p>
      </dd>
     
    
     <dt><code class="parameter">var</code></dt>
      <dd>
       <p class="para">
        Name of the PHP variable to bind to the SQL statement parameter.
       </p>
      </dd>
     
    
     <dt><code class="parameter">type</code></dt>
      <dd>
       <p class="para">
        Explicit data type for the parameter using the <a href="pdo.constants.php" class="link"><code class="literal">PDO::PARAM_*</code>
        constants</a>.
        To return an INOUT parameter from a stored procedure, 
        use the bitwise OR operator to set the <strong><code><a href="pdo.constants.php#pdo.constants.param-input-output">PDO::PARAM_INPUT_OUTPUT</a></code></strong> bits
        for the <code class="parameter">type</code> parameter.
       </p>
      </dd>
     
    
     <dt><code class="parameter">maxLength</code></dt>
      <dd>
       <p class="para">
        Length of the data type. To indicate that a parameter is an OUT
        parameter from a stored procedure, you must explicitly set the
        length.
        Meaningful only when <code class="parameter">type</code> parameter is <strong><code><a href="pdo.constants.php#pdo.constants.param-input-output">PDO::PARAM_INPUT_OUTPUT</a></code></strong>.
       </p>
      </dd>
     
    
     <dt><code class="parameter">driverOptions</code></dt>
     <dd>
      <p class="para">
         
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdostatement.bindparam-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.bindparam-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
Emits an error with level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if the attribute <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong> is set
to <strong><code><a href="pdo.constants.php#pdo.constants.errmode-warning">PDO::ERRMODE_WARNING</a></code></strong>.
</p>
<p class="para">
Throws a <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> if the attribute <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong>
is set to <strong><code><a href="pdo.constants.php#pdo.constants.errmode-exception">PDO::ERRMODE_EXCEPTION</a></code></strong>.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-pdostatement.bindparam-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1148"><p><strong>Example #1 Execute a prepared statement with named placeholders</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding PHP variables */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">'calories'</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Names can be prefixed with colons ":" too (optional) */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">':colour'</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1149"><p><strong>Example #2 Execute a prepared statement with question mark placeholders</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding PHP variables */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; ? AND colour = ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>


  <div class="example" id="example-1150"><p><strong>Example #3 Call a stored procedure with an INOUT parameter</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Call a stored procedure with an INOUT parameter */<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'CALL puree_fruit(?)'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">|</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INPUT_OUTPUT</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br />print </span><span style="color: #DD0000">"After pureeing fruit, the colour is: </span><span style="color: #0000BB">$colour</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

 </div>


 <div class="refsect1 seealso" id="refsect1-pdostatement.bindparam-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
    <li><span class="methodname"><a href="pdostatement.execute.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::execute()</a> - Executes a prepared statement</span></li>
    <li><span class="methodname"><a href="pdostatement.bindvalue.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::bindValue()</a> - Binds a value to a parameter</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/bindparam.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.bindparam%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.bindparam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.bindparam.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">23 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99698">  <div class="votes">
    <div id="Vu99698">
    <a href="/manual/vote-note.php?id=99698&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99698">
    <a href="/manual/vote-note.php?id=99698&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99698" title="84% like this...">
    249
    </div>
  </div>
  <a href="#99698" class="name">
  <strong class="user"><em>atrandafirc at yahoo dot com</em></strong></a><a class="genanchor" href="#99698"> &para;</a><div class="date" title="2010-08-31 06:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99698">
<div class="phpcode"><code><span class="html">I know this has been said before but I'll write a note on it too because I think it's important to keep in mind:<br /><br />If you use PDO bindParam to do a search with a LIKE condition you cannot put the percentages and quotes to the param placeholder '%:keyword%'.<br /><br />This is WRONG:<br />"SELECT * FROM `users` WHERE `firstname` LIKE '%:keyword%'";<br /><br />The CORRECT solution is to leave clean the placeholder like this:<br />"SELECT * FROM `users` WHERE `firstname` LIKE :keyword";<br /><br />And then add the percentages to the php variable where you store the keyword:<br />$keyword = "%".$keyword."%";<br /><br />And finally the quotes will be automatically added by PDO when executing the query so you don't have to worry about them.<br /><br />So the full example would be:<br /><span class="default">&lt;?php<br /></span><span class="comment">// Get the keyword from query string<br /></span><span class="default">$keyword </span><span class="keyword">= </span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'keyword'</span><span class="keyword">];<br /></span><span class="comment">// Prepare the command<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT * FROM `users` WHERE `firstname` LIKE :keyword'</span><span class="keyword">);<br /></span><span class="comment">// Put the percentage sing on the keyword<br /></span><span class="default">$keyword </span><span class="keyword">= </span><span class="string">"%"</span><span class="keyword">.</span><span class="default">$keyword</span><span class="keyword">.</span><span class="string">"%"</span><span class="keyword">;<br /></span><span class="comment">// Bind the parameter<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':keyword'</span><span class="keyword">, </span><span class="default">$keyword</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98145">  <div class="votes">
    <div id="Vu98145">
    <a href="/manual/vote-note.php?id=98145&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98145">
    <a href="/manual/vote-note.php?id=98145&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98145" title="73% like this...">
    175
    </div>
  </div>
  <a href="#98145" class="name">
  <strong class="user"><em>Vili</em></strong></a><a class="genanchor" href="#98145"> &para;</a><div class="date" title="2010-05-28 12:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98145">
<div class="phpcode"><code><span class="html">This works ($val by reference):<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$val</span><span class="keyword">) {<br />    </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This will fail ($val by value, because bindParam needs &amp;$variable):<br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach (</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />    </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="94711">  <div class="votes">
    <div id="Vu94711">
    <a href="/manual/vote-note.php?id=94711&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94711">
    <a href="/manual/vote-note.php?id=94711&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94711" title="73% like this...">
    53
    </div>
  </div>
  <a href="#94711" class="name">
  <strong class="user"><em>Steve M</em></strong></a><a class="genanchor" href="#94711"> &para;</a><div class="date" title="2009-11-19 11:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94711">
<div class="phpcode"><code><span class="html">Note that when using PDOStatement::bindParam an integer is changed to a string value upon PDOStatement::execute(). (Tested with MySQL). <br /><br />This can cause problems when trying to compare values using the === operator.<br /><br />Example:<br /><span class="default">&lt;?php<br />$active </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$active</span><span class="keyword">);<br /></span><span class="default">$ps</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":active"</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$active</span><span class="keyword">);<br /></span><span class="default">$ps</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$active</span><span class="keyword">);<br />if (</span><span class="default">$active </span><span class="keyword">=== </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="comment">// do something here<br />    // note: this will fail since $active is now "1"<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />results in:<br />int(1) <br />int(1) <br />string(1) "1"</span></code></div>
  </div>
 </div>
  <div class="note" id="126827">  <div class="votes">
    <div id="Vu126827">
    <a href="/manual/vote-note.php?id=126827&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126827">
    <a href="/manual/vote-note.php?id=126827&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126827" title="72% like this...">
    5
    </div>
  </div>
  <a href="#126827" class="name">
  <strong class="user"><em>jcastromail at yahoo dot es</em></strong></a><a class="genanchor" href="#126827"> &para;</a><div class="date" title="2022-02-04 02:20"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126827">
<div class="phpcode"><code><span class="html">PHP 8.1 changed the way how this method works.<br /><br />Now, the fourth method must not be null. It could be 0 (for an int) but it could not be null, otherwise, it will raise a deprecated warning.<br /><br />old:<br />$sth-&gt;bindParam('calories', $calories, PDO::PARAM_INT);<br />new:<br />$sth-&gt;bindParam('calories', $calories, PDO::PARAM_INT,0);</span></code></div>
  </div>
 </div>
  <div class="note" id="92097">  <div class="votes">
    <div id="Vu92097">
    <a href="/manual/vote-note.php?id=92097&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92097">
    <a href="/manual/vote-note.php?id=92097&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92097" title="70% like this...">
    14
    </div>
  </div>
  <a href="#92097" class="name">
  <strong class="user"><em>dhammari at q90 dot com</em></strong></a><a class="genanchor" href="#92097"> &para;</a><div class="date" title="2009-07-08 11:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92097">
<div class="phpcode"><code><span class="html">There seems to be some confusion about whether you can bind a single value to multiple identical placeholders. For example:<br /><br />$sql = "SELECT * FROM user WHERE is_admin = :myValue AND is_deleted = :myValue ";<br /><br />$params = array("myValue" =&gt; "0");<br /><br />Some users have reported that attempting to bind a single parameter to multiple placeholders yields a parameter mismatch error in PHP version 5.2.0 and earlier. Starting with version 5.2.1, however, this seems to work just fine.<br /><br />For details, see bug report 40417:<br /><a href="http://bugs.php.net/bug.php?id=40417" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=40417</a></span></code></div>
  </div>
 </div>
  <div class="note" id="113908">  <div class="votes">
    <div id="Vu113908">
    <a href="/manual/vote-note.php?id=113908&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113908">
    <a href="/manual/vote-note.php?id=113908&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113908" title="68% like this...">
    8
    </div>
  </div>
  <a href="#113908" class="name">
  <strong class="user"><em>pegas1981 at yandex dot ru</em></strong></a><a class="genanchor" href="#113908"> &para;</a><div class="date" title="2013-12-16 11:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113908">
<div class="phpcode"><code><span class="html"><a href="http://technet.microsoft.com/en-us/library/ff628166(v=sql.105" rel="nofollow" target="_blank">http://technet.microsoft.com/en-us/library/ff628166(v=sql.105</a>).aspx<br /><br />When binding null data to server columns of type varbinary, binary, or varbinary(max) you should specify binary encoding (PDO::SQLSRV_ENCODING_BINARY) using the $driver_options. See Constants for more information about encoding constants.<br />Support for PDO was added in version 2.0 of the Microsoft Drivers for PHP for SQL Server.<br /><br /> <span class="default">&lt;?php<br />$db </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'sqlsrv:server=SQLSERVERNAME;Database=own_exchange'</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"INSERT INTO dbo.files(file_name, file_source) VALUES(:file_name, :file_source)"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":file_name"</span><span class="keyword">, </span><span class="default">$files</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":file_source"</span><span class="keyword">, </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$files</span><span class="keyword">-&gt;</span><span class="default">tempName</span><span class="keyword">), </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_LOB</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">SQLSRV_ENCODING_BINARY</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109783">  <div class="votes">
    <div id="Vu109783">
    <a href="/manual/vote-note.php?id=109783&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109783">
    <a href="/manual/vote-note.php?id=109783&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109783" title="63% like this...">
    8
    </div>
  </div>
  <a href="#109783" class="name">
  <strong class="user"><em>khkiley at adamsautomation dot com</em></strong></a><a class="genanchor" href="#109783"> &para;</a><div class="date" title="2012-08-20 09:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109783">
<div class="phpcode"><code><span class="html">SQL Server 2008 R2
<br />
<br />If this was in the documentation, I didn't stumble across it. When using bound output parameters with a stored procedure, the output parameters are updated AFTER the LAST rowset has been processed.
<br />
<br />If your stored procedure does not return any rowsets (no SELECT statements) then you are set, your output parameters will be ready as soon as the stored procedure is processed.
<br />
<br />Otherwise you need to process the rows, and then:
<br /><span class="default">&lt;?php $stmt</span><span class="keyword">-&gt;</span><span class="default">nextRowset</span><span class="keyword">(); </span><span class="default">?&gt;
<br /></span>
<br />Once that is done for each returning rowset you will have access to the output parameters.</span></code></div>
  </div>
 </div>
  <div class="note" id="101764">  <div class="votes">
    <div id="Vu101764">
    <a href="/manual/vote-note.php?id=101764&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101764">
    <a href="/manual/vote-note.php?id=101764&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101764" title="62% like this...">
    10
    </div>
  </div>
  <a href="#101764" class="name">
  <strong class="user"><em>cyrylas at gmail dot com</em></strong></a><a class="genanchor" href="#101764"> &para;</a><div class="date" title="2011-01-10 01:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101764">
<div class="phpcode"><code><span class="html">Please note, that PDO format numbers according to current locale. So if, locale set number format to something else, that standard that query WILL NOT work properly.<br /><br />For example:<br />in Polish locale (pl_PL) proper decimal separator is coma (","), so: 123,45, not 123.45. If we try bind 123.45 to the query, we will end up with coma in the query.<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'pl_PL'</span><span class="keyword">);<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT name FROM products WHERE price &lt; :price'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':price'</span><span class="keyword">, </span><span class="default">123.45</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="comment">// result:<br />// SELECT name FROM products WHERE price &lt; '123,45';<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="61505">  <div class="votes">
    <div id="Vu61505">
    <a href="/manual/vote-note.php?id=61505&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61505">
    <a href="/manual/vote-note.php?id=61505&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61505" title="62% like this...">
    7
    </div>
  </div>
  <a href="#61505" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#61505"> &para;</a><div class="date" title="2006-02-05 02:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61505">
<div class="phpcode"><code><span class="html">A caution for those using bindParam() on a placeholder in a 
<br />LIKE '%...%' clause, the following code will likely not work:
<br />
<br /><span class="default">&lt;?php
<br />$q </span><span class="keyword">= </span><span class="string">"SELECT id, name FROM test WHERE name like '%:foo%'"</span><span class="keyword">;
<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="string">"carrot"</span><span class="keyword">;
<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">);
<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':foo'</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);
<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />What is needed is something like the following:
<br />
<br /><span class="default">&lt;?php
<br />$s </span><span class="keyword">= </span><span class="string">"%</span><span class="default">$s</span><span class="string">%"</span><span class="keyword">;
<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':foo'</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This should work. Tested against mysql 4.1, PHP 5.1.3.</span></code></div>
  </div>
 </div>
  <div class="note" id="111215">  <div class="votes">
    <div id="Vu111215">
    <a href="/manual/vote-note.php?id=111215&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111215">
    <a href="/manual/vote-note.php?id=111215&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111215" title="60% like this...">
    6
    </div>
  </div>
  <a href="#111215" class="name">
  <strong class="user"><em>Mike Robinson</em></strong></a><a class="genanchor" href="#111215"> &para;</a><div class="date" title="2013-01-26 11:56"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111215">
<div class="phpcode"><code><span class="html">Note that with bindParam the second parameter is passed by reference. This means that the following will produce a warning if E_STRICT is enabled:<br /><br /><span class="default">&lt;?php<br />$stmt</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">'type'</span><span class="keyword">, </span><span class="default">$object</span><span class="keyword">-&gt;</span><span class="default">getType</span><span class="keyword">());<br /><br /></span><span class="comment">// Strict Standards: Only variables should be passed by reference in /path/to/file.php on line 123<br /></span><span class="default">?&gt;<br /></span><br />If the second parameter is not an actual variable, either set the result of $object-&gt;getType(); to a variable and use that variable in bindParam or use bindValue instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="64226">  <div class="votes">
    <div id="Vu64226">
    <a href="/manual/vote-note.php?id=64226&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64226">
    <a href="/manual/vote-note.php?id=64226&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64226" title="60% like this...">
    9
    </div>
  </div>
  <a href="#64226" class="name">
  <strong class="user"><em>Filofox</em></strong></a><a class="genanchor" href="#64226"> &para;</a><div class="date" title="2006-04-10 03:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64226">
<div class="phpcode"><code><span class="html">Do not try to use the same named parameter twice in a single SQL statement, for example
<br />
<br /><span class="default">&lt;?php
<br />$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM some_table WHERE  some_value &gt; :value OR some_value &lt; :value'</span><span class="keyword">;
<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);
<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">( array( </span><span class="string">':value' </span><span class="keyword">=&gt; </span><span class="default">3 </span><span class="keyword">) );
<br /></span><span class="default">?&gt;
<br /></span>
<br />...this will return no rows and no error -- you must use each parameter once and only once. Apparently this is expected behavior (according to this bug report: <a href="http://bugs.php.net/bug.php?id=33886" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=33886</a>)  because of portability issues.</span></code></div>
  </div>
 </div>
  <div class="note" id="76357">  <div class="votes">
    <div id="Vu76357">
    <a href="/manual/vote-note.php?id=76357&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76357">
    <a href="/manual/vote-note.php?id=76357&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76357" title="59% like this...">
    4
    </div>
  </div>
  <a href="#76357" class="name">
  <strong class="user"><em>jeffwa+php at gmail dot com</em></strong></a><a class="genanchor" href="#76357"> &para;</a><div class="date" title="2007-07-11 01:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76357">
<div class="phpcode"><code><span class="html">Took me forever to find this elsewhere in the notes in the manual, so I'd thought I'd put this tidbit here to help others in the future.<br /><br />When using a LIKE search in MySQL along with a prepared statement, the *value* must have the appropriate parentheses attached before the bindParam() statement as such:<br /><br /><span class="default">&lt;?php<br />$dbc </span><span class="keyword">= </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'dbc'</span><span class="keyword">];<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT * FROM `tbl_name` WHERE tbl_col LIKE ?"</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbc</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">"%</span><span class="keyword">{</span><span class="default">$value</span><span class="keyword">}</span><span class="string">%"</span><span class="keyword">;<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Trying to use<br /><span class="default">&lt;?php<br />$stmt</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">, </span><span class="string">"%</span><span class="keyword">{</span><span class="default">$value</span><span class="keyword">}</span><span class="string">%"</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will fail.</span></code></div>
  </div>
 </div>
  <div class="note" id="115407">  <div class="votes">
    <div id="Vu115407">
    <a href="/manual/vote-note.php?id=115407&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115407">
    <a href="/manual/vote-note.php?id=115407&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115407" title="56% like this...">
    4
    </div>
  </div>
  <a href="#115407" class="name">
  <strong class="user"><em>Ofir Attia</em></strong></a><a class="genanchor" href="#115407"> &para;</a><div class="date" title="2014-07-19 06:09"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115407">
<div class="phpcode"><code><span class="html">/*<br />   method for pdo class connection, you can add your cases by    yourself and use it.<br />*/<br />class Conn{<br />....<br />....<br />private $stmt;<br />public function bind($parameter, $value, $var_type = null){<br />        if (is_null($var_type)) {<br />            switch (true) {<br />                               case is_bool($value):<br />                    $var_type = PDO::PARAM_BOOL;<br />                    break;<br />                case is_int($value):<br />                    $var_type = PDO::PARAM_INT;<br />                    break;<br />                case is_null($value):<br />                    $var_type = PDO::PARAM_NULL;<br />                    break;<br />                default:<br />                    $var_type = PDO::PARAM_STR;<br />            }<br />        }<br />        $this-&gt;stmt-&gt;bindValue($parameter, $value, $var_type);<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="95934">  <div class="votes">
    <div id="Vu95934">
    <a href="/manual/vote-note.php?id=95934&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95934">
    <a href="/manual/vote-note.php?id=95934&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95934" title="57% like this...">
    2
    </div>
  </div>
  <a href="#95934" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#95934"> &para;</a><div class="date" title="2010-01-29 03:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95934">
<div class="phpcode"><code><span class="html">if you are storing files (or binary data), using PARAM_LOB (and moreover trying to do this with Oracle), don't miss this page :<br /><br /><a href="http://php.net/manual/en/pdo.lobs.php" rel="nofollow" target="_blank">http://php.net/manual/en/pdo.lobs.php</a><br /><br />You will there notice that PDO-PGSQL and PDO-OCI don't work the same at all : not the same argument nor the same behaviour.</span></code></div>
  </div>
 </div>
  <div class="note" id="117064">  <div class="votes">
    <div id="Vu117064">
    <a href="/manual/vote-note.php?id=117064&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117064">
    <a href="/manual/vote-note.php?id=117064&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117064" title="55% like this...">
    2
    </div>
  </div>
  <a href="#117064" class="name">
  <strong class="user"><em>heather dot begazo at gmail dot com</em></strong></a><a class="genanchor" href="#117064"> &para;</a><div class="date" title="2015-04-09 05:56"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117064">
<div class="phpcode"><code><span class="html">The documentation says this about the length parameter for bindParam:  <br /><br />"To indicate that a parameter is an OUT parameter from a stored procedure, you must explicitly set the length. "<br /><br />For db2, I found that setting the length for the "INPUT_OUTPUT" parameters causes a problem for varchar parameters that are input parameters.  The problem I found is that the stored procedure was called, but varchar input parameters were set to null inside my stored procedure and as a result, the stored procedure could not work properly.  <br /><br />Here is the signature for my stored procedure:<br /><br />CREATE OR REPLACE PROCEDURE MY_SCHEMA_NAME.MY_STORED_PROCEDURE_NAME ( IN RUN_ID INTEGER,IN V_SCHEMA_NAME VARCHAR(128),<br />  OUT out_rc INTEGER,OUT out_err_message VARCHAR(100),OUT out_sqlstate CHAR(5) ,OUT out_sqlcode INT)<br /><br />Here is the php code that works:<br /><br />$command = "Call MY_SCHEMA_NAME.MY_STORED_PROCEDURE_NAME (?,?,?,?,?,?,?)";<br />$stmt = $this-&gt;GuestDb-&gt;prepare($command);<br />$stmt-&gt;bindParam(1, $RUN_ID, PDO::PARAM_INT); <br />$stmt-&gt;bindParam(2, $V_SCHEMA_NAME, PDO::PARAM_STR);<br />$stmt-&gt;bindParam(3, $V_TABNAME, PDO::PARAM_STR);<br />$stmt-&gt;bindParam(4, $out_rc, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);<br />$stmt-&gt;bindParam(5, $out_err_message, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT);<br />$stmt-&gt;bindParam(6, $out_sqlstate, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT);<br />$stmt-&gt;bindParam(7, $out_sqlcode, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT);<br /><br />Here is the php code that does not work:<br /><br />$command = "Call MY_SCHEMA_NAME.MY_STORED_PROCEDURE_NAME (?,?,?,?,?,?,?)";<br />$stmt = $this-&gt;GuestDb-&gt;prepare($command);<br />$stmt-&gt;bindParam(1, $RUN_ID, PDO::PARAM_INT,12); <br />$stmt-&gt;bindParam(2, $V_SCHEMA_NAME, PDO::PARAM_STR,128);<br />$stmt-&gt;bindParam(3, $V_TABNAME, PDO::PARAM_STR,100);<br />$stmt-&gt;bindParam(4, $out_rc, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT,12);<br />$stmt-&gt;bindParam(5, $out_err_message, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT,100);<br />$stmt-&gt;bindParam(6, $out_sqlstate, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT,6);<br />$stmt-&gt;bindParam(7, $out_sqlcode, PDO::PARAM_INT|PDO::PARAM_INPUT_OUTPUT,12);</span></code></div>
  </div>
 </div>
  <div class="note" id="116638">  <div class="votes">
    <div id="Vu116638">
    <a href="/manual/vote-note.php?id=116638&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116638">
    <a href="/manual/vote-note.php?id=116638&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116638" title="54% like this...">
    3
    </div>
  </div>
  <a href="#116638" class="name">
  <strong class="user"><em>gilhildebrand at gmail dot com</em></strong></a><a class="genanchor" href="#116638"> &para;</a><div class="date" title="2015-02-02 04:50"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116638">
<div class="phpcode"><code><span class="html">MySQL will return an error if a named placeholder has a hyphen in it:<br />UPDATE wardrobe SET `T-Shirt`=:T-SHIRT WHERE id=:id<br /><br />Will return the following error: PDOException' with message 'SQLSTATE[HY093]: Invalid parameter number: parameter was not defined'<br /><br />To resolve, just remove hyphens from named placeholders:<br />UPDATE wardrobe SET `T-Shirt`=:TSHIRT WHERE id=:id</span></code></div>
  </div>
 </div>
  <div class="note" id="116636">  <div class="votes">
    <div id="Vu116636">
    <a href="/manual/vote-note.php?id=116636&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116636">
    <a href="/manual/vote-note.php?id=116636&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116636" title="52% like this...">
    1
    </div>
  </div>
  <a href="#116636" class="name">
  <strong class="user"><em>Vladimir Kovpak</em></strong></a><a class="genanchor" href="#116636"> &para;</a><div class="date" title="2015-02-02 01:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116636">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Bind bit value:<br /> */<br /><br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM myTable WHERE level &amp; ?'</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">\App</span><span class="keyword">::</span><span class="default">pdo</span><span class="keyword">()-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">0b0101</span><span class="keyword">, </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109791">  <div class="votes">
    <div id="Vu109791">
    <a href="/manual/vote-note.php?id=109791&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109791">
    <a href="/manual/vote-note.php?id=109791&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109791" title="52% like this...">
    2
    </div>
  </div>
  <a href="#109791" class="name">
  <strong class="user"><em>flannell</em></strong></a><a class="genanchor" href="#109791"> &para;</a><div class="date" title="2012-08-21 12:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109791">
<div class="phpcode"><code><span class="html">Spent all day banging my head against a brick wall.
<br />
<br />Tried to use INOUT or OUT and getting the return variable into PHP using Mysql v5.5.16 on XAMPP.
<br />
<br />"MySQL doesn't supporting binding output parameters via its C API.  You must use SQL level variables:"
<br />
<br /><span class="default">&lt;?php
<br />$stm </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"CALL sp_mysp(:Name, :Email, @sp_result)"</span><span class="keyword">);
<br />
<br /></span><span class="default">$outputArray </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select @sp_result"</span><span class="keyword">)-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />So the 'workaround' for Mysql and PDO is to use two SQL calls.
<br />
<br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="118975">  <div class="votes">
    <div id="Vu118975">
    <a href="/manual/vote-note.php?id=118975&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118975">
    <a href="/manual/vote-note.php?id=118975&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118975" title="51% like this...">
    1
    </div>
  </div>
  <a href="#118975" class="name">
  <strong class="user"><em>Ejaz Ansari</em></strong></a><a class="genanchor" href="#118975"> &para;</a><div class="date" title="2016-03-11 03:40"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118975">
<div class="phpcode"><code><span class="html">For those who are confused on insert query using PDO-bindparam:<br /><br />$sql = $db-&gt;prepare("INSERT INTO db_fruit (id, type, colour) VALUES (? ,? ,?)");<br /><br />$sql-&gt;bindParam(1, $newId);<br />$sql-&gt;bindParam(2, $name);<br />$sql-&gt;bindParam(3, $colour);<br />$sql-&gt;execute();</span></code></div>
  </div>
 </div>
  <div class="note" id="129064">  <div class="votes">
    <div id="Vu129064">
    <a href="/manual/vote-note.php?id=129064&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129064">
    <a href="/manual/vote-note.php?id=129064&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129064" title="no votes...">
    0
    </div>
  </div>
  <a href="#129064" class="name">
  <strong class="user"><em>marco dot marsala at live dot it</em></strong></a><a class="genanchor" href="#129064"> &para;</a><div class="date" title="2023-11-23 08:26"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129064">
<div class="phpcode"><code><span class="html">Examples doesn't highlight that this works as expected:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* Execute a prepared statement by binding PHP variables */<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">'calories'</span><span class="keyword">, </span><span class="default">$calories</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="comment">/* Names can be prefixed with colons ":" too (optional) */<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':colour'</span><span class="keyword">, </span><span class="default">$colour</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">$calories </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;<br /></span><span class="default">$colour </span><span class="keyword">= </span><span class="string">'red'</span><span class="keyword">;<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />calories get set to 150 in db, colour get set to red in db, because, as documentation points out: "the variable is bound as a reference and will only be evaluated at the time that PDOStatement::execute() is called."</span></code></div>
  </div>
 </div>
  <div class="note" id="127730">  <div class="votes">
    <div id="Vu127730">
    <a href="/manual/vote-note.php?id=127730&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127730">
    <a href="/manual/vote-note.php?id=127730&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127730" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127730" class="name">
  <strong class="user"><em>weronika dot nowak dot code at gmail dot com</em></strong></a><a class="genanchor" href="#127730"> &para;</a><div class="date" title="2022-10-17 10:55"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127730">
<div class="phpcode"><code><span class="html">🧨🧨🧨<br /><span class="default">&lt;?php<br />$q </span><span class="keyword">= </span><span class="string">"SELECT id, name FROM test WHERE name like '%:foo%'"</span><span class="keyword">;<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="string">"carrot"</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':foo'</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It's true, this ⬆ won't work but you can use concatenation ⬇:<br /><br /><span class="default">&lt;?php<br />$q </span><span class="keyword">= </span><span class="string">"SELECT id, name FROM test WHERE name like '%' || <br />:foo || '%' "</span><span class="keyword">;<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="string">"carrot"</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':foo'</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75764">  <div class="votes">
    <div id="Vu75764">
    <a href="/manual/vote-note.php?id=75764&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75764">
    <a href="/manual/vote-note.php?id=75764&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75764" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75764" class="name">
  <strong class="user"><em>willie at spenlen dot com</em></strong></a><a class="genanchor" href="#75764"> &para;</a><div class="date" title="2007-06-14 11:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75764">
<div class="phpcode"><code><span class="html">If you're using the MySQL driver and have a stored procedure with an OUT or INOUT parameter, you can't (currently) use bindValue(). See <a href="http://bugs.php.net/bug.php?id=35935" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=35935</a> for a workaround.</span></code></div>
  </div>
 </div>
  <div class="note" id="122944">  <div class="votes">
    <div id="Vu122944">
    <a href="/manual/vote-note.php?id=122944&amp;page=pdostatement.bindparam&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122944">
    <a href="/manual/vote-note.php?id=122944&amp;page=pdostatement.bindparam&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122944" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#122944" class="name">
  <strong class="user"><em>Tristen Edwin</em></strong></a><a class="genanchor" href="#122944"> &para;</a><div class="date" title="2018-07-14 09:41"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122944">
<div class="phpcode"><code><span class="html">Here's how to build a dynamic WHERE LIKE at run time when the user can submit n keywords<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="string">'storyPieces'</span><span class="keyword">, </span><span class="default">$_POST</span><span class="keyword">)) {<br />    </span><span class="default">$story_pieces </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">',' </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'storyPieces'</span><span class="keyword">]);<br />        foreach(</span><span class="default">$story_pieces </span><span class="keyword">as </span><span class="default">$piece</span><span class="keyword">) {<br />        if (</span><span class="default">$conditional_count </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$where_clause </span><span class="keyword">.= </span><span class="string">'story LIKE ? '</span><span class="keyword">;<br />            </span><span class="default">$conditional_count</span><span class="keyword">++;<br />       } else {<br />            </span><span class="default">$where_clause </span><span class="keyword">.= </span><span class="string">'AND story LIKE ? '</span><span class="keyword">;<br />            </span><span class="default">$conditional_count</span><span class="keyword">++;<br />       }<br />       }<br />}<br /><br /></span><span class="comment">// then after you've prepared<br /><br /></span><span class="keyword">if (isset(</span><span class="default">$story_pieces</span><span class="keyword">)) {<br />    foreach(</span><span class="default">$story_pieces </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; &amp;</span><span class="default">$piece</span><span class="keyword">) {<br />        </span><span class="default">$piece </span><span class="keyword">= </span><span class="string">"%" </span><span class="keyword">. </span><span class="default">$piece </span><span class="keyword">. </span><span class="string">"%"</span><span class="keyword">;<br />        </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="default">$key </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$piece</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.bindparam&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.bindparam.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdostatement.php">PDOStatement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pdostatement.bindcolumn.php" title="bindColumn">bindColumn</a>
                        </li>
                                                <li class="current">
                            <a href="pdostatement.bindparam.php" title="bindParam">bindParam</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.bindvalue.php" title="bindValue">bindValue</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.closecursor.php" title="closeCursor">closeCursor</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.columncount.php" title="columnCount">columnCount</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.debugdumpparams.php" title="debugDumpParams">debugDumpParams</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.errorcode.php" title="errorCode">errorCode</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.errorinfo.php" title="errorInfo">errorInfo</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.execute.php" title="execute">execute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetch.php" title="fetch">fetch</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetchall.php" title="fetchAll">fetchAll</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetchcolumn.php" title="fetchColumn">fetchColumn</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.fetchobject.php" title="fetchObject">fetchObject</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getcolumnmeta.php" title="getColumnMeta">getColumnMeta</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.getiterator.php" title="getIterator">getIterator</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.nextrowset.php" title="nextRowset">nextRowset</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.rowcount.php" title="rowCount">rowCount</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.setattribute.php" title="setAttribute">setAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.setfetchmode.php" title="setFetchMode">setFetchMode</a>
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
