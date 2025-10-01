<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::bindValue - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.bindvalue.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.bindvalue.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.bindvalue.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.bindparam.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.closecursor.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.bindvalue.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.bindvalue.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.bindvalue.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.bindvalue.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.bindvalue.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.bindvalue.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.bindvalue.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.bindvalue.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.bindvalue.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.bindvalue.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.bindvalue.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Binds a value to a parameter" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::bindValue - Manual" />
<meta name="twitter:description" content="Binds a value to a parameter" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::bindValue - Manual" />
<meta itemprop="description" content="Binds a value to a parameter" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Binds a value to a parameter" />

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
        <a href="pdostatement.closecursor.php">
          PDOStatement::closeCursor &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.bindparam.php">
          &laquo; PDOStatement::bindParam        </a>
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
            <option value='en/pdostatement.bindvalue.php' selected="selected">English</option>
            <option value='de/pdostatement.bindvalue.php'>German</option>
            <option value='es/pdostatement.bindvalue.php'>Spanish</option>
            <option value='fr/pdostatement.bindvalue.php'>French</option>
            <option value='it/pdostatement.bindvalue.php'>Italian</option>
            <option value='ja/pdostatement.bindvalue.php'>Japanese</option>
            <option value='pt_BR/pdostatement.bindvalue.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.bindvalue.php'>Russian</option>
            <option value='tr/pdostatement.bindvalue.php'>Turkish</option>
            <option value='uk/pdostatement.bindvalue.php'>Ukrainian</option>
            <option value='zh/pdostatement.bindvalue.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.bindvalue" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::bindValue</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">PDOStatement::bindValue</span> &mdash; <span class="dc-title">
   Binds a value to a parameter
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.bindvalue-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::bindValue</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$param</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code><span class="initializer"> = PDO::PARAM_STR</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Binds a value to a corresponding named or question mark placeholder
   in the SQL statement that was used to prepare the statement.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.bindvalue-parameters">
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
     
    
     <dt><code class="parameter">value</code></dt>
      <dd>
       <p class="para">
        The value to bind to the parameter.
       </p>
      </dd>
     
    
     <dt><code class="parameter">type</code></dt>
      <dd>
       <p class="para">
        Explicit data type for the parameter using the <a href="pdo.constants.php" class="link"><code class="literal">PDO::PARAM_*</code>
        constants</a>.
       </p>
      </dd>
     
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdostatement.bindvalue-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.bindvalue-errors">
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


 <div class="refsect1 examples" id="refsect1-pdostatement.bindvalue-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1151"><p><strong>Example #1 Execute a prepared statement with named placeholders</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding PHP variables */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Sets a parameter value using its name */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">'calories'</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Optionally, parameter names can also be prefixed with colons ":" */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':colour'</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1152"><p><strong>Example #2 Execute a prepared statement with question mark placeholders</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding PHP variables */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; ? AND colour = ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>


 </div>


 <div class="refsect1 seealso" id="refsect1-pdostatement.bindvalue-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
    <li><span class="methodname"><a href="pdostatement.execute.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::execute()</a> - Executes a prepared statement</span></li>
    <li><span class="methodname"><a href="pdostatement.bindparam.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::bindParam()</a> - Binds a parameter to the specified variable name</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/bindvalue.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.bindvalue%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.bindvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.bindvalue.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="80285">  <div class="votes">
    <div id="Vu80285">
    <a href="/manual/vote-note.php?id=80285&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80285">
    <a href="/manual/vote-note.php?id=80285&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80285" title="84% like this...">
    162
    </div>
  </div>
  <a href="#80285" class="name">
  <strong class="user"><em>streaky at mybrokenlogic dot com</em></strong></a><a class="genanchor" href="#80285"> &para;</a><div class="date" title="2008-01-08 02:20"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80285">
<div class="phpcode"><code><span class="html">What the bindValue() docs fail to explain without reading them _very_ carefully is that bindParam() is passed to PDO byref - whereas bindValue() isn't.<br /><br />Thus with bindValue() you can do something like $stmt-&gt;bindValue(":something", "bind this"); whereas with bindParam() it will fail because you can't pass a string by reference, for example.</span></code></div>
  </div>
 </div>
  <div class="note" id="118662">  <div class="votes">
    <div id="Vu118662">
    <a href="/manual/vote-note.php?id=118662&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118662">
    <a href="/manual/vote-note.php?id=118662&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118662" title="87% like this...">
    71
    </div>
  </div>
  <a href="#118662" class="name">
  <strong class="user"><em>D.Kellner</em></strong></a><a class="genanchor" href="#118662"> &para;</a><div class="date" title="2016-01-15 05:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118662">
<div class="phpcode"><code><span class="html">When binding parameters, apparently you can't use a placeholder twice (e.g. "select * from mails where sender=:me or recipient=:me"), you'll have to give them different names otherwise your query will return empty handed (but not fail, unfortunately).  Just in case you're struggling with something like this.</span></code></div>
  </div>
 </div>
  <div class="note" id="119935">  <div class="votes">
    <div id="Vu119935">
    <a href="/manual/vote-note.php?id=119935&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119935">
    <a href="/manual/vote-note.php?id=119935&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119935" title="78% like this...">
    31
    </div>
  </div>
  <a href="#119935" class="name">
  <strong class="user"><em>e-ruiz at git hub</em></strong></a><a class="genanchor" href="#119935"> &para;</a><div class="date" title="2016-09-23 04:40"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119935">
<div class="phpcode"><code><span class="html">Be careful when trying to validate using PDO::PARAM_INT. <br /><br />Take this sample into account:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* php --version<br /> * PHP 5.6.25 (cli) (built: Aug 24 2016 09:50:46)<br /> * Copyright (c) 1997-2016 The PHP Group<br /> * Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies<br /> */<br /><br /></span><span class="default">$id </span><span class="keyword">= </span><span class="string">'1a'</span><span class="keyword">; <br /></span><span class="default">$stm </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'select * from author where id = :id'</span><span class="keyword">);<br /></span><span class="default">$bind </span><span class="keyword">= </span><span class="default">$stm</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':id'</span><span class="keyword">, </span><span class="default">$id</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /><br /></span><span class="default">$stm</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$authors </span><span class="keyword">= </span><span class="default">$stm</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);         </span><span class="comment">// string(2)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$bind</span><span class="keyword">);       </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">((int)</span><span class="default">$id</span><span class="keyword">);    </span><span class="comment">// int(1)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)); </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$authors</span><span class="keyword">);    </span><span class="comment">// the author id=1  =(<br /><br />// remember<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">== </span><span class="string">'1'</span><span class="keyword">);    </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">=== </span><span class="string">'1'</span><span class="keyword">);   </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">=== </span><span class="string">'1a'</span><span class="keyword">);  </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">1 </span><span class="keyword">== </span><span class="string">'1a'</span><span class="keyword">);   </span><span class="comment">// true<br /></span><span class="default">?&gt;<br /></span><br />My opinion: bindValue() should test is_int() internaly first of anything, <br />It is a bug? I'm not sure.</span></code></div>
  </div>
 </div>
  <div class="note" id="95065">  <div class="votes">
    <div id="Vu95065">
    <a href="/manual/vote-note.php?id=95065&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95065">
    <a href="/manual/vote-note.php?id=95065&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95065" title="71% like this...">
    42
    </div>
  </div>
  <a href="#95065" class="name">
  <strong class="user"><em>cpd-dev</em></strong></a><a class="genanchor" href="#95065"> &para;</a><div class="date" title="2009-12-11 04:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95065">
<div class="phpcode"><code><span class="html">Although bindValue() escapes quotes it does not escape "%" and "_", so be careful when using LIKE. A malicious parameter full of %%% can dump your entire database if you don't escape the parameter yourself. PDO does not provide any other escape method to handle it.</span></code></div>
  </div>
 </div>
  <div class="note" id="104503">  <div class="votes">
    <div id="Vu104503">
    <a href="/manual/vote-note.php?id=104503&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104503">
    <a href="/manual/vote-note.php?id=104503&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104503" title="72% like this...">
    19
    </div>
  </div>
  <a href="#104503" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#104503"> &para;</a><div class="date" title="2011-06-18 08:40"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104503">
<div class="phpcode"><code><span class="html">Note that the third parameter ($data_type) in the majority of cases will not type cast the value into anything else to be used in the query, nor will it throw any sort of error if the type does not match up with the value provided. This parameter essentially has no effect whatsoever except throwing an error if it is set and is not a float, so do not think that it is adding any extra level of security to the queries.<br /><br />The two exceptions where type casting is performed:<br /><br />- if you use PDO::PDO_PARAM_INT and provide a boolean, it will be converted to a long<br />- if you use PDO::PDO_PARAM_BOOL and provide a long, it will be converted to a boolean<br /><br /><span class="default">&lt;?php<br /><br />$query </span><span class="keyword">= </span><span class="string">'SELECT * FROM `users` WHERE username = :username AND `password` = ENCRYPT( :password, `crypt_password`)'</span><span class="keyword">;<br /><br /></span><span class="default">$sth</span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br /></span><span class="comment">// First try passing a random numerical value as the third parameter<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':username'</span><span class="keyword">,</span><span class="string">'bob'</span><span class="keyword">, </span><span class="default">12345.67</span><span class="keyword">)); </span><span class="comment">// bool(true)<br /><br />// Next try passing a string using the boolean type<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':password'</span><span class="keyword">,</span><span class="string">'topsecret_pw'</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_BOOL</span><span class="keyword">)); </span><span class="comment">// bool(true)<br /><br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(); </span><span class="comment">// Query is executed successfully<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(); </span><span class="comment">// Returns the result of the query<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104939">  <div class="votes">
    <div id="Vu104939">
    <a href="/manual/vote-note.php?id=104939&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104939">
    <a href="/manual/vote-note.php?id=104939&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104939" title="66% like this...">
    18
    </div>
  </div>
  <a href="#104939" class="name">
  <strong class="user"><em>contact[at]maximeelomari.com</em></strong></a><a class="genanchor" href="#104939"> &para;</a><div class="date" title="2011-07-17 05:19"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104939">
<div class="phpcode"><code><span class="html">This function is useful for bind value on an array. You can specify the type of the value in advance with $typeArray.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @param string $req : the query on which link the values<br /> * @param array $array : associative array containing the values ​​to bind<br /> * @param array $typeArray : associative array with the desired value for its corresponding key in $array<br /> * */<br /></span><span class="keyword">function </span><span class="default">bindArrayValue</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$typeArray </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$req</span><span class="keyword">) &amp;&amp; (</span><span class="default">$req </span><span class="keyword">instanceof </span><span class="default">PDOStatement</span><span class="keyword">))<br />    {<br />        foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />        {<br />            if(</span><span class="default">$typeArray</span><span class="keyword">)<br />                </span><span class="default">$req</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">":</span><span class="default">$key</span><span class="string">"</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$typeArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />            else<br />            {<br />                if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />                    </span><span class="default">$param </span><span class="keyword">= </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">;<br />                elseif(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />                    </span><span class="default">$param </span><span class="keyword">= </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_BOOL</span><span class="keyword">;<br />                elseif(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />                    </span><span class="default">$param </span><span class="keyword">= </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_NULL</span><span class="keyword">;<br />                elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />                    </span><span class="default">$param </span><span class="keyword">= </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">;<br />                else<br />                    </span><span class="default">$param </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />                    <br />                if(</span><span class="default">$param</span><span class="keyword">)<br />                    </span><span class="default">$req</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">":</span><span class="default">$key</span><span class="string">"</span><span class="keyword">,</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$param</span><span class="keyword">);<br />            }<br />        }<br />    }<br />}<br /><br /></span><span class="comment">/**<br /> * ## EXEMPLE ##<br /> * $array = array('language' =&gt; 'php','lines' =&gt; 254, 'publish' =&gt; true);<br /> * $typeArray = array('language' =&gt; PDO::PARAM_STR,'lines' =&gt; PDO::PARAM_INT,'publish' =&gt; PDO::PARAM_BOOL);<br /> * $req = 'SELECT * FROM code WHERE language = :language AND lines = :lines AND publish = :publish';<br /> * You can bind $array like that :<br /> * bindArrayValue($array,$req,$typeArray);<br /> * The function is more useful when you use limit clause because they need an integer.<br /> * */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116721">  <div class="votes">
    <div id="Vu116721">
    <a href="/manual/vote-note.php?id=116721&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116721">
    <a href="/manual/vote-note.php?id=116721&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116721" title="57% like this...">
    4
    </div>
  </div>
  <a href="#116721" class="name">
  <strong class="user"><em>Vladimir Kovpak</em></strong></a><a class="genanchor" href="#116721"> &para;</a><div class="date" title="2015-02-19 06:11"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116721">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* Bind bit value.<br />*/<br /><br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM myTable WHERE level &amp; ?'</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">\App</span><span class="keyword">::</span><span class="default">pdo</span><span class="keyword">()-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">0b0101</span><span class="keyword">, </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115510">  <div class="votes">
    <div id="Vu115510">
    <a href="/manual/vote-note.php?id=115510&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115510">
    <a href="/manual/vote-note.php?id=115510&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115510" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115510" class="name">
  <strong class="user"><em>me at iabdullah dot info</em></strong></a><a class="genanchor" href="#115510"> &para;</a><div class="date" title="2014-08-07 09:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115510">
<div class="phpcode"><code><span class="html">The reason that we cannot define the value variable for bindValue() after calling it, is because that it binds the value to the prepared statement immediately and does not wait until the execute() to happen.<br /><br />The following code will issue a notice and prevent the query from taking place:<br /><span class="default">&lt;?php<br />    $st </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare </span><span class="keyword">(</span><span class="string">"SELECT * FROM posts WHERE id= :val "</span><span class="keyword">);<br />    </span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':val'</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);<br /><br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'2'</span><span class="keyword">;<br />    </span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>The output:<br />Notice: Undefined variable: val.<br /><br />Whereas in the case of bindParam, the evaluation of the value to the parameter will not be performed until the call of execute(). And that's to gain the benefit of reference passing.<br /><span class="default">&lt;?php<br />    $st </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare </span><span class="keyword">(</span><span class="string">"SELECT * FROM posts WHERE id = :val "</span><span class="keyword">);<br />    </span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':val'</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);<br /><br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'2'</span><span class="keyword">;<br />    </span><span class="comment">// <br />    // some code<br />    //<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="string">'3'</span><span class="keyword">; </span><span class="comment">// re-assigning the value variable<br />    </span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>works fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="93346">  <div class="votes">
    <div id="Vu93346">
    <a href="/manual/vote-note.php?id=93346&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93346">
    <a href="/manual/vote-note.php?id=93346&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93346" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93346" class="name">
  <strong class="user"><em>nicolas dot baptiste at gmail dot com</em></strong></a><a class="genanchor" href="#93346"> &para;</a><div class="date" title="2009-09-04 08:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93346">
<div class="phpcode"><code><span class="html">This actually works to bind NULL on an integer field in MySQL :<br /><br />$stm-&gt;bindValue(':param', null, PDO::PARAM_INT);</span></code></div>
  </div>
 </div>
  <div class="note" id="119956">  <div class="votes">
    <div id="Vu119956">
    <a href="/manual/vote-note.php?id=119956&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119956">
    <a href="/manual/vote-note.php?id=119956&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119956" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#119956" class="name">
  <strong class="user"><em>sageptr at gmail dot com</em></strong></a><a class="genanchor" href="#119956"> &para;</a><div class="date" title="2016-09-28 03:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119956">
<div class="phpcode"><code><span class="html">Be careful in edge cases!<br />With MySQL native prepares your integer can be wrapped around on some machines:<br /><br /><span class="default">&lt;?php<br />$x </span><span class="keyword">= </span><span class="default">2147483648</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); </span><span class="comment">// prints: int(2147483648)<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT :int AS I, :str AS S;'</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':int'</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':str'</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">) );<br /></span><span class="comment">/* prints: array(2) {<br />  ["I"]=&gt;<br />  string(11) "-2147483648"<br />  ["S"]=&gt;<br />  string(10) "2147483648"<br />} */<br /></span><span class="default">?&gt;<br /></span><br />Also, trying to bind PDO::PARAM_BOOL in MySQL with native prepares can make your query silently fail and return empty set.<br /><br />Emulated prepares work more stable in this cases, because they convert everything to strings and just decide whenever to quote argument or not to quote.</span></code></div>
  </div>
 </div>
  <div class="note" id="95328">  <div class="votes">
    <div id="Vu95328">
    <a href="/manual/vote-note.php?id=95328&amp;page=pdostatement.bindvalue&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95328">
    <a href="/manual/vote-note.php?id=95328&amp;page=pdostatement.bindvalue&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95328" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#95328" class="name">
  <strong class="user"><em>goofiq dot no dot spam at antispam dot wp dot pl</em></strong></a><a class="genanchor" href="#95328"> &para;</a><div class="date" title="2009-12-27 10:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95328">
<div class="phpcode"><code><span class="html">bindValue with data_type depend parameter name<br /><br /><span class="default">&lt;?php<br /><br />$db </span><span class="keyword">= new </span><span class="default">PDO </span><span class="keyword">(...);<br /></span><span class="default">$db </span><span class="keyword">-&gt; </span><span class="default">setAttribute </span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_STATEMENT_CLASS</span><span class="keyword">, array (</span><span class="string">'MY_PDOStatement '</span><span class="keyword">, array (</span><span class="default">$db</span><span class="keyword">)));<br /><br />class </span><span class="default">MY_PDOStatement </span><span class="keyword">extends </span><span class="default">PDOStatement </span><span class="keyword">{<br /><br />  public function </span><span class="default">execute </span><span class="keyword">(</span><span class="default">$input </span><span class="keyword">= array ()) {<br />    foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$param </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />      if (</span><span class="default">preg_match </span><span class="keyword">(</span><span class="string">'/_id$/'</span><span class="keyword">, </span><span class="default">$param</span><span class="keyword">))<br />        </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">bindValue </span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br />      else<br />        </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">bindValue </span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br />    }<br />    return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">execute </span><span class="keyword">();<br />  }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.bindvalue&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.bindvalue.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdostatement.php">PDOStatement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pdostatement.bindcolumn.php" title="bindColumn">bindColumn</a>
                        </li>
                                                <li class="">
                            <a href="pdostatement.bindparam.php" title="bindParam">bindParam</a>
                        </li>
                                                <li class="current">
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
