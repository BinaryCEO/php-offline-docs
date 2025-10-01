<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::execute - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.execute.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.execute.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.execute.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.errorinfo.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.fetch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.execute.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.execute.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.execute.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.execute.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.execute.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.execute.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.execute.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.execute.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.execute.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.execute.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.execute.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Executes a prepared statement" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::execute - Manual" />
<meta name="twitter:description" content="Executes a prepared statement" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::execute - Manual" />
<meta itemprop="description" content="Executes a prepared statement" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Executes a prepared statement" />

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
        <a href="pdostatement.fetch.php">
          PDOStatement::fetch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.errorinfo.php">
          &laquo; PDOStatement::errorInfo        </a>
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
            <option value='en/pdostatement.execute.php' selected="selected">English</option>
            <option value='de/pdostatement.execute.php'>German</option>
            <option value='es/pdostatement.execute.php'>Spanish</option>
            <option value='fr/pdostatement.execute.php'>French</option>
            <option value='it/pdostatement.execute.php'>Italian</option>
            <option value='ja/pdostatement.execute.php'>Japanese</option>
            <option value='pt_BR/pdostatement.execute.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.execute.php'>Russian</option>
            <option value='tr/pdostatement.execute.php'>Turkish</option>
            <option value='uk/pdostatement.execute.php'>Ukrainian</option>
            <option value='zh/pdostatement.execute.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.execute" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::execute</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDOStatement::execute</span> &mdash; <span class="dc-title">
   Executes a prepared statement
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.execute-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::execute</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$params</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Execute the <a href="pdo.prepared-statements.php" class="link">prepared
   statement</a>. If the prepared statement included parameter markers, either:
   <ul class="itemizedlist">
    <li class="listitem"><p class="para"><span class="methodname"><a href="pdostatement.bindparam.php" class="methodname">PDOStatement::bindParam()</a></span> and/or
     <span class="methodname"><a href="pdostatement.bindvalue.php" class="methodname">PDOStatement::bindValue()</a></span> has to be called to bind either variables or
     values (respectively) to the parameter markers. Bound variables pass
     their value as input and receive the output value, if any, of their
     associated parameter markers</p></li>
    <li class="listitem">
     <p class="para">or an array of input-only parameter values has to be passed</p>
    </li>
   </ul>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.execute-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">params</code></dt>
     <dd>
      <p class="para">
       An array of values with as many elements as there are bound
       parameters in the SQL statement being executed.
       All values are treated as <strong><code><a href="pdo.constants.php#pdo.constants.param-str">PDO::PARAM_STR</a></code></strong>.
      </p>
      <p class="para">
       Multiple values cannot be bound to a single parameter; for example,
       it is not allowed to bind two values to a single named parameter in an IN()
       clause.
      </p>
      <p class="para">
       Binding more values than specified is not possible; if more keys exist in 
       <code class="parameter">params</code> than in the SQL specified 
       in the <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare()</a></span>, then the statement will 
       fail and an error is emitted.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdostatement.execute-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.execute-errors">
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


 <div class="refsect1 examples" id="refsect1-pdostatement.execute-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="example-1159"><p><strong>Example #1 Execute a prepared statement with a bound variable and value</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding a variable and value */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'gre'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour LIKE :colour'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #DD0000">'calories'</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Names can be prefixed with colons ":" too (optional) */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindValue</span><span style="color: #007700">(</span><span style="color: #DD0000">':colour'</span><span style="color: #007700">, </span><span style="color: #DD0000">"%</span><span style="color: #0000BB">$colour</span><span style="color: #DD0000">%"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1160"><p><strong>Example #2 Execute a prepared statement with an array of named values</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by passing an array of insert values */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'calories' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #DD0000">'colour' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$colour</span><span style="color: #007700">));<br /></span><span style="color: #FF8000">/* Array keys can be prefixed with colons ":" too (optional) */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #DD0000">':calories' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #DD0000">':colour' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$colour</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1161"><p><strong>Example #3 Execute a prepared statement with an array of positional values</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by passing an array of insert values */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; ? AND colour = ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(array(</span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1162"><p><strong>Example #4 Execute a prepared statement with variables bound to positional placeholders</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by binding PHP variables */<br /></span><span style="color: #0000BB">$calories </span><span style="color: #007700">= </span><span style="color: #0000BB">150</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$colour </span><span style="color: #007700">= </span><span style="color: #DD0000">'red'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; ? AND colour = ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">$calories</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_INT</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">bindParam</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">$colour</span><span style="color: #007700">, </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">PARAM_STR</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>

  <div class="example" id="example-1163"><p><strong>Example #5 Execute a prepared statement using array for IN clause</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement using an array of values for an IN clause */<br /></span><span style="color: #0000BB">$params </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">21</span><span style="color: #007700">, </span><span style="color: #0000BB">63</span><span style="color: #007700">, </span><span style="color: #0000BB">171</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">/* Create a string for the parameter placeholders filled to the number of params */<br /></span><span style="color: #0000BB">$place_holders </span><span style="color: #007700">= </span><span style="color: #DD0000">'?' </span><span style="color: #007700">. </span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">', ?'</span><span style="color: #007700">, </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">) - </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/*<br />    This prepares the statement with enough unnamed placeholders for every value<br />    in our $params array. The values of the $params array are then bound to the<br />    placeholders in the prepared statement when the statement is executed.<br />    This is not the same thing as using PDOStatement::bindParam() since this<br />    requires a reference to the variable. PDOStatement::execute() only binds<br />    by value instead.<br />*/<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT id, name FROM contacts WHERE id IN (</span><span style="color: #0000BB">$place_holders</span><span style="color: #DD0000">)"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </div>


 <div class="refsect1 notes" id="refsect1-pdostatement.execute-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Some drivers require to <a href="pdostatement.closecursor.php" class="link">close
    cursor</a> before executing next statement.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-pdostatement.execute-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
    <li><span class="methodname"><a href="pdostatement.bindparam.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::bindParam()</a> - Binds a parameter to the specified variable name</span></li>
    <li><span class="methodname"><a href="pdostatement.fetch.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetch()</a> - Fetches the next row from a result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchall.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchAll()</a> - Fetches the remaining rows from a result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchcolumn.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchColumn()</a> - Returns a single column from the next row of a result set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/execute.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.execute%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.execute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.execute.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="81681">  <div class="votes">
    <div id="Vu81681">
    <a href="/manual/vote-note.php?id=81681&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81681">
    <a href="/manual/vote-note.php?id=81681&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81681" title="74% like this...">
    70
    </div>
  </div>
  <a href="#81681" class="name">
  <strong class="user"><em>Jean-Lou dot Dupont at jldupont dot com</em></strong></a><a class="genanchor" href="#81681"> &para;</a><div class="date" title="2008-03-09 10:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81681">
<div class="phpcode"><code><span class="html">Hopefully this saves time for folks: one should use $count = $stmt-&gt;rowCount() after $stmt-&gt;execute() in order to really determine if any an operation such as ' update ' or ' replace ' did succeed i.e. changed some data.<br /><br />Jean-Lou Dupont.</span></code></div>
  </div>
 </div>
  <div class="note" id="97531">  <div class="votes">
    <div id="Vu97531">
    <a href="/manual/vote-note.php?id=97531&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97531">
    <a href="/manual/vote-note.php?id=97531&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97531" title="71% like this...">
    38
    </div>
  </div>
  <a href="#97531" class="name">
  <strong class="user"><em>gx</em></strong></a><a class="genanchor" href="#97531"> &para;</a><div class="date" title="2010-04-24 10:05"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97531">
<div class="phpcode"><code><span class="html">Note that you must
<br />- EITHER pass all values to bind in an array to PDOStatement::execute()
<br />- OR bind every value before with PDOStatement::bindValue(), then call PDOStatement::execute() with *no* parameter (not even "array()"!).
<br />Passing an array (empty or not) to execute() will "erase" and replace any previous bindings (and can lead to, e.g. with MySQL, "SQLSTATE[HY000]: General error: 2031" (CR_PARAMS_NOT_BOUND) if you passed an empty array).
<br />
<br />Thus the following function is incorrect in case the prepared statement has been "bound" before:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">customExecute</span><span class="keyword">(</span><span class="default">PDOStatement </span><span class="keyword">&amp;</span><span class="default">$sth</span><span class="keyword">, </span><span class="default">$params </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {
<br />    return </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />and should therefore be replaced by something like:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">customExecute</span><span class="keyword">(</span><span class="default">PDOStatement </span><span class="keyword">&amp;</span><span class="default">$sth</span><span class="keyword">, array </span><span class="default">$params </span><span class="keyword">= array()) {
<br />    if (empty(</span><span class="default">$params</span><span class="keyword">))
<br />        return </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />    return </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Also note that PDOStatement::execute() doesn't require $input_parameters to be an array.
<br />
<br />(of course, do not use it as is ^^).</span></code></div>
  </div>
 </div>
  <div class="note" id="128597">  <div class="votes">
    <div id="Vu128597">
    <a href="/manual/vote-note.php?id=128597&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128597">
    <a href="/manual/vote-note.php?id=128597&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128597" title="85% like this...">
    5
    </div>
  </div>
  <a href="#128597" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#128597"> &para;</a><div class="date" title="2023-06-08 07:48"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128597">
<div class="phpcode"><code><span class="html">Strangely the manual doesn't give a full SELECT example.<br /><br /><span class="default">&lt;?php<br /><br />$sql </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">    SELECT ALL name, calories, colour<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour<br /></span><span class="keyword">    SQL;<br /><br /></span><span class="default">$select </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="string">'calories' </span><span class="keyword">=&gt; </span><span class="default">150</span><span class="keyword">, </span><span class="string">'colour' </span><span class="keyword">=&gt; </span><span class="string">'red'</span><span class="keyword">]);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$select</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71929">  <div class="votes">
    <div id="Vu71929">
    <a href="/manual/vote-note.php?id=71929&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71929">
    <a href="/manual/vote-note.php?id=71929&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71929" title="66% like this...">
    31
    </div>
  </div>
  <a href="#71929" class="name">
  <strong class="user"><em>VolGas</em></strong></a><a class="genanchor" href="#71929"> &para;</a><div class="date" title="2006-12-22 10:38"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71929">
<div class="phpcode"><code><span class="html">An array of insert values (named parameters) don't need the prefixed colon als key-value to work.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* Execute a prepared statement by passing an array of insert values */<br /></span><span class="default">$calories </span><span class="keyword">= </span><span class="default">150</span><span class="keyword">;<br /></span><span class="default">$colour </span><span class="keyword">= </span><span class="string">'red'</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT name, colour, calories<br />   FROM fruit<br />   WHERE calories &lt; :calories AND colour = :colour'</span><span class="keyword">);<br /></span><span class="comment">// instead of:<br />//     $sth-&gt;execute(array(':calories' =&gt; $calories, ':colour' =&gt; $colour));<br />// this works fine, too:<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'calories' </span><span class="keyword">=&gt; </span><span class="default">$calories</span><span class="keyword">, </span><span class="string">'colour' </span><span class="keyword">=&gt; </span><span class="default">$colour</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />This allows to use "regular" assembled hash-tables (arrays).<br />That realy does make sense!</span></code></div>
  </div>
 </div>
  <div class="note" id="118714">  <div class="votes">
    <div id="Vu118714">
    <a href="/manual/vote-note.php?id=118714&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118714">
    <a href="/manual/vote-note.php?id=118714&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118714" title="70% like this...">
    12
    </div>
  </div>
  <a href="#118714" class="name">
  <strong class="user"><em>Ray.Paseur sometimes uses Gmail</em></strong></a><a class="genanchor" href="#118714"> &para;</a><div class="date" title="2016-01-23 07:19"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118714">
<div class="phpcode"><code><span class="html">"You cannot bind more values than specified; if more keys exist in input_parameters than in the SQL specified in the PDO::prepare(), then the statement will fail and an error is emitted."  However fewer keys may not cause an error.<br /><br />As long as the number of question marks in the query string variable matches the number of elements in the input_parameters, the query will be attempted.<br /><br />This happens even if there is extraneous information after the end of the query string.  The semicolon indicates the end of the query string; the rest of the variable is treated as a comment by the SQL engine, but counted as part of the input_parameters by PHP.<br /><br />Have a look at these two query strings.  The only difference is a typo in the second string, where a semicolon accidentally replaces a comma.  This UPDATE query will run, will be applied to all rows, and will silently damage the table.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Query is intended to UPDATE a subset of the rows based on the WHERE clause<br /> */<br /></span><span class="default">$sql  </span><span class="keyword">= </span><span class="string">"UPDATE my_table SET fname = ?, lname = ? WHERE id = ?"</span><span class="keyword">;<br /><br /></span><span class="comment">/**<br /> * Query UPDATEs all rows, ignoring everything after the semi-colon, including the WHERE clause!<br /> * <br /> * Expected (but not received):<br /> *<br /> *** Warning:  <br /> *** PDOStatement::execute(): <br /> *** SQLSTATE[HY093]: <br /> *** Invalid parameter number: number of bound variables does not match number of tokens...<br /> *<br /> */ <br />// Typo here ------------------------ |<br />//                                    V<br /></span><span class="default">$sql  </span><span class="keyword">= </span><span class="string">"UPDATE my_table SET fname = ?; lname = ? WHERE id = ?"</span><span class="keyword">; </span><span class="comment">// One token in effect<br /></span><span class="default">$pdos </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$pdos</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">( [ </span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">] );                           </span><span class="comment">// Three input_parameters<br /></span><span class="default">?&gt;<br /></span><br />PHP 5.4.45, mysqlnd 5.0.10</span></code></div>
  </div>
 </div>
  <div class="note" id="80499">  <div class="votes">
    <div id="Vu80499">
    <a href="/manual/vote-note.php?id=80499&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80499">
    <a href="/manual/vote-note.php?id=80499&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80499" title="69% like this...">
    15
    </div>
  </div>
  <a href="#80499" class="name">
  <strong class="user"><em>albright atat anre dotdot net</em></strong></a><a class="genanchor" href="#80499"> &para;</a><div class="date" title="2008-01-18 08:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80499">
<div class="phpcode"><code><span class="html">When passing an array of values to execute when your query contains question marks, note that the array must be keyed numerically from zero. If it is not, run array_values() on it to force the array to be re-keyed.<br /><br /><span class="default">&lt;?php<br />$anarray </span><span class="keyword">= array(</span><span class="default">42 </span><span class="keyword">=&gt; </span><span class="string">"foo"</span><span class="keyword">, </span><span class="default">101 </span><span class="keyword">=&gt; </span><span class="string">"bar"</span><span class="keyword">);<br /></span><span class="default">$statement </span><span class="keyword">= </span><span class="default">$dbo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM table WHERE col1 = ? AND col2 = ?"</span><span class="keyword">);<br /><br /></span><span class="comment">//This will not work<br /></span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$anarray</span><span class="keyword">);<br /><br /></span><span class="comment">//Do this to make it work<br /></span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$anarray</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103287">  <div class="votes">
    <div id="Vu103287">
    <a href="/manual/vote-note.php?id=103287&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103287">
    <a href="/manual/vote-note.php?id=103287&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103287" title="66% like this...">
    17
    </div>
  </div>
  <a href="#103287" class="name">
  <strong class="user"><em>ElTorqiro</em></strong></a><a class="genanchor" href="#103287"> &para;</a><div class="date" title="2011-04-05 02:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103287">
<div class="phpcode"><code><span class="html">When using a prepared statement to execute multiple inserts (such as in a loop etc), under sqlite the performance is dramatically improved by wrapping the loop in a transaction.
<br />
<br />I have an application that routinely inserts 30-50,000 records at a time.  Without the transaction it was taking over 150 seconds, and with it only 3.
<br />
<br />This may affect other implementations as well, and I am sure it is something that affects all databases to some extent, but I can only test with PDO sqlite.
<br />
<br />e.g.
<br />
<br /><span class="default">&lt;?php
<br />$data </span><span class="keyword">= array(
<br />  array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'John'</span><span class="keyword">, </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="string">'25'</span><span class="keyword">),
<br />  array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Wendy'</span><span class="keyword">, </span><span class="string">'age' </span><span class="keyword">=&gt; </span><span class="string">'32'</span><span class="keyword">)
<br />);
<br />
<br />try {
<br />  </span><span class="default">$pdo </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'sqlite:myfile.sqlite'</span><span class="keyword">);
<br />}
<br />
<br />catch(</span><span class="default">PDOException $e</span><span class="keyword">) {
<br />  die(</span><span class="string">'Unable to open database connection'</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$insertStatement </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'insert into mytable (name, age) values (:name, :age)'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// start transaction
<br /></span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();
<br />
<br />foreach(</span><span class="default">$data </span><span class="keyword">as &amp;</span><span class="default">$row</span><span class="keyword">) {
<br />  </span><span class="default">$insertStatement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// end transaction
<br /></span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDITED BY sobak: typofixes by Pere submitted on 12-Sep-2014 01:07]</span></code></div>
  </div>
 </div>
  <div class="note" id="111823">  <div class="votes">
    <div id="Vu111823">
    <a href="/manual/vote-note.php?id=111823&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111823">
    <a href="/manual/vote-note.php?id=111823&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111823" title="60% like this...">
    24
    </div>
  </div>
  <a href="#111823" class="name">
  <strong class="user"><em>Rami jamleh</em></strong></a><a class="genanchor" href="#111823"> &para;</a><div class="date" title="2013-04-02 11:09"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111823">
<div class="phpcode"><code><span class="html">simplified $placeholder form 
<br />
<br /><span class="default">&lt;?php
<br />
<br />$data </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'foo'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="string">'bar'</span><span class="keyword">];
<br />
<br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);
<br /></span><span class="default">$fields </span><span class="keyword">= </span><span class="string">'`'</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">'`, `'</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">).</span><span class="string">'`'</span><span class="keyword">;
<br />
<br /></span><span class="comment">#here is my way 
<br /></span><span class="default">$placeholder </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'?,'</span><span class="keyword">,</span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)),</span><span class="default">0</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">);
<br />
<br /></span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `baz`(</span><span class="default">$fields</span><span class="string">) VALUES(</span><span class="default">$placeholder</span><span class="string">)"</span><span class="keyword">)-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">));</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109041">  <div class="votes">
    <div id="Vu109041">
    <a href="/manual/vote-note.php?id=109041&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109041">
    <a href="/manual/vote-note.php?id=109041&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109041" title="66% like this...">
    8
    </div>
  </div>
  <a href="#109041" class="name">
  <strong class="user"><em>anon at anon dot com</em></strong></a><a class="genanchor" href="#109041"> &para;</a><div class="date" title="2012-06-15 09:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109041">
<div class="phpcode"><code><span class="html">If your MySQL table has 500,000+ rows and your script is failing because you have hit PHP's memory limit, set the following attribute.
<br />
<br /><span class="default">&lt;?php $this</span><span class="keyword">-&gt;</span><span class="default">pdo</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">MYSQL_ATTR_USE_BUFFERED_QUERY</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />This should make the error go away again and return memory usage back to normal.</span></code></div>
  </div>
 </div>
  <div class="note" id="126672">  <div class="votes">
    <div id="Vu126672">
    <a href="/manual/vote-note.php?id=126672&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126672">
    <a href="/manual/vote-note.php?id=126672&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126672" title="62% like this...">
    2
    </div>
  </div>
  <a href="#126672" class="name">
  <strong class="user"><em>joshuag at count-recount at dynaggelos dot com</em></strong></a><a class="genanchor" href="#126672"> &para;</a><div class="date" title="2021-12-09 05:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126672">
<div class="phpcode"><code><span class="html">It took me a long while to realize this and the documentation didn't seem very clear on using PDO_Statement::execute() on a SELECT statement type query, so I wanted to note this here. When preparing a SELECT query and then executing it using PDO_Statement::execute(), you can then simply proceed to use PDO_Statement::fetch() or PDO_Statement::fetchAll() on that same PDO_Statement object. This is no different than using PDO::query() to return a PDO_Statement object, and then calling PDO_Statement::fetch() on that object. This is because the PDO_Statement object is of course still a PDO_Statement object, and, as the PDO::query documentation (<a href="https://www.php.net/manual/en/pdo.query.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/pdo.query.php</a>) says, PDO::query also "[p]repares and executes an SQL statement."<br /><br /><span class="default">&lt;?php<br /><br />$pdo_statement </span><span class="keyword">= </span><span class="default">$my_pdo_object</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">( </span><span class="string">"SELECT * FROM `MyTable` WHERE `Field1` = 'this_string'" </span><span class="keyword">);<br /><br />if ( </span><span class="default">true </span><span class="keyword">=== </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">execute_safe_query</span><span class="keyword">( </span><span class="default">$pdo_statement </span><span class="keyword">) ) {<br /><br />    echo </span><span class="default">$pdo_statement</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">();<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108245">  <div class="votes">
    <div id="Vu108245">
    <a href="/manual/vote-note.php?id=108245&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108245">
    <a href="/manual/vote-note.php?id=108245&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108245" title="60% like this...">
    5
    </div>
  </div>
  <a href="#108245" class="name">
  <strong class="user"><em>T-Rex</em></strong></a><a class="genanchor" href="#108245"> &para;</a><div class="date" title="2012-04-11 03:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108245">
<div class="phpcode"><code><span class="html">When you try to make a query with a date, then take the whole date and not just a number.<br /><br />This Query will work fine, if you try it like this:<br />SELECT * FROM table WHERE date = 0<br /><br />But if you try it with prepared you have to take the whole date format.<br /><span class="default">&lt;?php<br />$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT * FROM table WHERE date = :date'</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">( </span><span class="default">$arArray </span><span class="keyword">);<br /><br /></span><span class="comment">//--- Wrong:<br /></span><span class="default">$arArray </span><span class="keyword">= array(</span><span class="string">":date"</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">//--- Right:<br /></span><span class="default">$arArray </span><span class="keyword">= array(</span><span class="string">":date"</span><span class="keyword">,</span><span class="string">"0000-00-00 00:00:00"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />There must be something with the mysql driver.<br /><br />best regards<br />T-Rex</span></code></div>
  </div>
 </div>
  <div class="note" id="126013">  <div class="votes">
    <div id="Vu126013">
    <a href="/manual/vote-note.php?id=126013&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126013">
    <a href="/manual/vote-note.php?id=126013&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126013" title="60% like this...">
    2
    </div>
  </div>
  <a href="#126013" class="name">
  <strong class="user"><em>danny dot panzer at gmail dot com</em></strong></a><a class="genanchor" href="#126013"> &para;</a><div class="date" title="2021-04-16 05:31"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126013">
<div class="phpcode"><code><span class="html">I have found very strange behavior for PostgreSQL:<br /><br />Outside of a transaction, you can pass boolean true/false as members of the input array and it seems to work.<br /><br />However, *inside* a transaction, boolean true works but boolean false does not. Instead, pass something "falsey" like integer 0 or string "false"</span></code></div>
  </div>
 </div>
  <div class="note" id="76966">  <div class="votes">
    <div id="Vu76966">
    <a href="/manual/vote-note.php?id=76966&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76966">
    <a href="/manual/vote-note.php?id=76966&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76966" title="59% like this...">
    7
    </div>
  </div>
  <a href="#76966" class="name">
  <strong class="user"><em>simon dot lehmann at gmx dot de</em></strong></a><a class="genanchor" href="#76966"> &para;</a><div class="date" title="2007-08-08 03:17"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76966">
<div class="phpcode"><code><span class="html">It seems, that the quoting behaviour has changed somehow between versions, as my current project was running fine on one setup, but throwing errors on another (both setups are very similar).<br /><br />Setup 1: Ubuntu 6.10, PHP 5.1.6, MySQL 5.0.24a<br />Setup 2: Ubuntu 7.04, PHP 5.2.1, MySQL 5.0.38<br /><br />The code fragment which caused problems (shortened):<br /><span class="default">&lt;?php<br />$stmt </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT col1, col2, col3 FROM tablename WHERE col4=? LIMIT ?"</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'Foo'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />On the first Setup this executes without any problems, on the second setup it generates an Error:<br /><br />SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'' at line 1<br /><br />The problem is, that $stmt-&gt;execute() quotes the number passed to the second placeholder (resulting in: ... LIMIT '1'), which is not allowed in MySQL (tested on both setups).<br /><br />To prevent this, you have to use bindParam() or bindValue() and specify a data type.</span></code></div>
  </div>
 </div>
  <div class="note" id="121030">  <div class="votes">
    <div id="Vu121030">
    <a href="/manual/vote-note.php?id=121030&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121030">
    <a href="/manual/vote-note.php?id=121030&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121030" title="57% like this...">
    3
    </div>
  </div>
  <a href="#121030" class="name">
  <strong class="user"><em>Ihor Ivanov</em></strong></a><a class="genanchor" href="#121030"> &para;</a><div class="date" title="2017-04-27 04:51"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121030">
<div class="phpcode"><code><span class="html">If one parameter name is missing or misspelled, this function throws an error of level E_WARNING, even when PDO::ATTR_ERRMODE is set to PDO::ERRMODE_SILENT!<br />In the same situation, but when PDO::ERRMODE_WARNING is set, this function throws TWO errors of level E_WARNING!<br /><br />This function does not throw any error when PDO::ERRMODE_EXCEPTION is set, instead, it throws a PDOException.<br /><br />All this applies even when you use PDOStatement::bindParam() function with misspelled parameter name and than use PDOStatement::execute();<br /><br />Tested on: Windows 10, PHP 5.5.35, mysqlnd 5.0.11, MySQL 5.6.30.<br /><br /><span class="default">&lt;?php<br />$dbh</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_ERRMODE</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ERRMODE_SILENT</span><span class="keyword">);<br /><br /></span><span class="default">$colour </span><span class="keyword">= </span><span class="string">'red'</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE colour = :colour'</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />    Notice the parameter name ':color' instead of ':colour'.<br /><br />    When PDO::ERRMODE_SILENT is set, this function throws the error:<br />    Warning: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in...<br /><br />    When PDO::ERRMODE_WARNING is set, this function throws this two errors:<br />    Warning: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in...<br />    Warning: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number in...<br />*/<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">':color' </span><span class="keyword">=&gt; </span><span class="default">$colour</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106667">  <div class="votes">
    <div id="Vu106667">
    <a href="/manual/vote-note.php?id=106667&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106667">
    <a href="/manual/vote-note.php?id=106667&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106667" title="54% like this...">
    2
    </div>
  </div>
  <a href="#106667" class="name">
  <strong class="user"><em>richard at securebucket dot com</em></strong></a><a class="genanchor" href="#106667"> &para;</a><div class="date" title="2011-11-25 01:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106667">
<div class="phpcode"><code><span class="html">Note:  Parameters don't work with a dash in the name like ":asd-asd" you can do a quick str_replace("-","_",$parameter) to fix the issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="114751">  <div class="votes">
    <div id="Vu114751">
    <a href="/manual/vote-note.php?id=114751&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114751">
    <a href="/manual/vote-note.php?id=114751&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114751" title="52% like this...">
    1
    </div>
  </div>
  <a href="#114751" class="name">
  <strong class="user"><em>Whitebeard</em></strong></a><a class="genanchor" href="#114751"> &para;</a><div class="date" title="2014-04-01 07:27"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114751">
<div class="phpcode"><code><span class="html">If you are having issues passing boolean values to be bound and are using a Postgres database... but you do not want to use bindParam for *every* *single* *parameter*, try passing the strings 't' or 'f' instead of boolean TRUE or FALSE.</span></code></div>
  </div>
 </div>
  <div class="note" id="129916">  <div class="votes">
    <div id="Vu129916">
    <a href="/manual/vote-note.php?id=129916&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129916">
    <a href="/manual/vote-note.php?id=129916&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129916" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129916" class="name">
  <strong class="user"><em>kawewong at gmail dot com</em></strong></a><a class="genanchor" href="#129916"> &para;</a><div class="date" title="2024-12-14 08:36"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129916">
<div class="phpcode"><code><span class="html">If you have a sql statement and bind value like this<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM `table`<br />#WHERE `column` = :column<br />ORDER BY `id` DESC'</span><span class="keyword">;<br /></span><span class="default">$Sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$Sth</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':column'</span><span class="keyword">, </span><span class="string">'column_value'</span><span class="keyword">);<br /></span><span class="default">$Sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />It will be working fine on PHP 8.3.latest or older. But it will be error: " Fatal error: Uncaught PDOException: SQLSTATE[HY093]: Invalid parameter number: number of bound variables does not match number of tokens" since PHP 8.4.<br /><br />The #WHERE is sql commented code but it used to work with no problem. To make it work again in PHP 8.4, comment out on the code line `//$Sth-&gt;bindValue()`.</span></code></div>
  </div>
 </div>
  <div class="note" id="84990">  <div class="votes">
    <div id="Vu84990">
    <a href="/manual/vote-note.php?id=84990&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84990">
    <a href="/manual/vote-note.php?id=84990&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84990" title="52% like this...">
    1
    </div>
  </div>
  <a href="#84990" class="name">
  <strong class="user"><em>Ant P.</em></strong></a><a class="genanchor" href="#84990"> &para;</a><div class="date" title="2008-08-08 10:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84990">
<div class="phpcode"><code><span class="html">As of 5.2.6 you still can't use this function's $input_parameters to pass a boolean to PostgreSQL. To do that, you'll have to call bindParam() with explicit types for each parameter in the query.</span></code></div>
  </div>
 </div>
  <div class="note" id="101777">  <div class="votes">
    <div id="Vu101777">
    <a href="/manual/vote-note.php?id=101777&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101777">
    <a href="/manual/vote-note.php?id=101777&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101777" title="52% like this...">
    1
    </div>
  </div>
  <a href="#101777" class="name">
  <strong class="user"><em>Robin Millette</em></strong></a><a class="genanchor" href="#101777"> &para;</a><div class="date" title="2011-01-10 06:30"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101777">
<div class="phpcode"><code><span class="html">If you're going to derive PDOStatement to extend the execute() method, you must define the signature with a default NULL argument, not an empty array.<br /><br />In otherwords:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyPDOStatement </span><span class="keyword">extends </span><span class="default">PDOStatement </span><span class="keyword">{<br />  </span><span class="comment">// ...<br /><br />  // don't use this form!<br />  // function execute($input_parameters = array()) {<br />  // use this instead:<br />  </span><span class="keyword">function </span><span class="default">execute</span><span class="keyword">(</span><span class="default">$input_parameters </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">) {<br />      </span><span class="comment">// ...<br />      </span><span class="keyword">return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$input_parameters</span><span class="keyword">);<br />  }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />As a sidenote, that's why I always set default parameter to NULL and take care of handling the actual correct default parameters in the body of the method or function. Thus, when you have to call the function with all the parameters, you know to always pass NULL for defaults.</span></code></div>
  </div>
 </div>
  <div class="note" id="98804">  <div class="votes">
    <div id="Vu98804">
    <a href="/manual/vote-note.php?id=98804&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98804">
    <a href="/manual/vote-note.php?id=98804&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98804" title="52% like this...">
    1
    </div>
  </div>
  <a href="#98804" class="name">
  <strong class="user"><em>Tony Casparro</em></strong></a><a class="genanchor" href="#98804"> &para;</a><div class="date" title="2010-07-08 10:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98804">
<div class="phpcode"><code><span class="html">We know that you can't see the final raw SQL before its parsed by the DB, but if you want to simulate the final result, this may help.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">public function </span><span class="default">showQuery</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">)<br />    {<br />        </span><span class="default">$keys </span><span class="keyword">= array();<br />        </span><span class="default">$values </span><span class="keyword">= array();<br />        <br />        </span><span class="comment"># build a regular expression for each parameter<br />        </span><span class="keyword">foreach (</span><span class="default">$params </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)<br />        {<br />            if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">))<br />            {<br />                </span><span class="default">$keys</span><span class="keyword">[] = </span><span class="string">'/:'</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">.</span><span class="string">'/'</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                </span><span class="default">$keys</span><span class="keyword">[] = </span><span class="string">'/[?]/'</span><span class="keyword">;<br />            }<br />            <br />            if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />            {<br />                </span><span class="default">$values</span><span class="keyword">[] = </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="default">$values</span><span class="keyword">[] = </span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$value </span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">;<br />            }<br />        }<br />        <br />        </span><span class="default">$query </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">, </span><span class="default">$query</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$count</span><span class="keyword">);<br />        return </span><span class="default">$query</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109030">  <div class="votes">
    <div id="Vu109030">
    <a href="/manual/vote-note.php?id=109030&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109030">
    <a href="/manual/vote-note.php?id=109030&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109030" title="51% like this...">
    1
    </div>
  </div>
  <a href="#109030" class="name">
  <strong class="user"><em>mail at horn-online-media dot de</em></strong></a><a class="genanchor" href="#109030"> &para;</a><div class="date" title="2012-06-14 10:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109030">
<div class="phpcode"><code><span class="html">hi,<br /><br />just a qick note to get started without problems when using quotation: PDO does NOT replace given variables if they are wrapped in quotationmarks, e.g.<br /><br /><span class="default">&lt;?php<br /><br />$st </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">( </span><span class="string">'<br />    INSERT INTO fruits( name, colour )<br />    VALUES( :name, ":colour" )<br />'</span><span class="keyword">;<br /></span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">( array( </span><span class="string">':name' </span><span class="keyword">=&gt; </span><span class="string">'Apple'</span><span class="keyword">, </span><span class="string">':colour' </span><span class="keyword">=&gt; </span><span class="string">'red' </span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;<br /></span><br />results in in a new fruit like<br /><br /> -&gt; Apple, :colour<br /><br />without the colour beeing replaced by "red". so leave variables WITHOUT the quotation - PDO will do.</span></code></div>
  </div>
 </div>
  <div class="note" id="125592">  <div class="votes">
    <div id="Vu125592">
    <a href="/manual/vote-note.php?id=125592&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125592">
    <a href="/manual/vote-note.php?id=125592&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125592" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125592" class="name">
  <strong class="user"><em>davidhcefx</em></strong></a><a class="genanchor" href="#125592"> &para;</a><div class="date" title="2020-12-11 05:06"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125592">
<div class="phpcode"><code><span class="html">As already pointed out by some folks, DON'T PASS ARRAYS KEYED WITH NAMES TO QUESTION MARK PARAMETERS!<br /><br /><span class="default">&lt;?php<br />$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT INTO fruit (name, colour, colories) VALUES (?, ?, ?)'</span><span class="keyword">);<br /><br /></span><span class="comment">// This is wrong!<br />// $param = array("name" =&gt; "apple", "colour" =&gt; "red", "colories" =&gt; 150);<br /><br />// Array must be keyed with integers starting from zero<br /></span><span class="default">$param </span><span class="keyword">= array(</span><span class="string">"apple"</span><span class="keyword">, </span><span class="string">"red"</span><span class="keyword">, </span><span class="default">150</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$param</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108455">  <div class="votes">
    <div id="Vu108455">
    <a href="/manual/vote-note.php?id=108455&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108455">
    <a href="/manual/vote-note.php?id=108455&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108455" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#108455" class="name">
  <strong class="user"><em>nils andre with my googelian maily accou</em></strong></a><a class="genanchor" href="#108455"> &para;</a><div class="date" title="2012-04-27 02:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108455">
<div class="phpcode"><code><span class="html">I realized that I ran into serious trouble when debugging my PHP scripts from the command line, and despite of going to fetchAll and so, I always got the error <br /><br />SQLSTATE[HY000]: General error: 2014 Cannot execute queries while other unbuffered queries are active.<br /><br />I realized that I had a double init command: <br /><br />PDO::MYSQL_ATTR_INIT_COMMAND =&gt; "SET NAMES utf8; SET CHARACTER SET utf8;"<br /><br />The first one is the better choice and removing the latter, the error is gone.</span></code></div>
  </div>
 </div>
  <div class="note" id="70414">  <div class="votes">
    <div id="Vu70414">
    <a href="/manual/vote-note.php?id=70414&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70414">
    <a href="/manual/vote-note.php?id=70414&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70414" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#70414" class="name">
  <strong class="user"><em>russel at sunraystudios dot com</em></strong></a><a class="genanchor" href="#70414"> &para;</a><div class="date" title="2006-10-15 02:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70414">
<div class="phpcode"><code><span class="html">I've used it and it returns booleans=&gt;<br />$passed = $stmt-&gt;execute();<br />if($passed){<br />echo "passed";<br />} else {<br />echo "failed";<br />}<br /><br />If the statement failed it would print failed.  You would want to use errorInfo() to get more info, but it does seem to work for me.</span></code></div>
  </div>
 </div>
  <div class="note" id="119736">  <div class="votes">
    <div id="Vu119736">
    <a href="/manual/vote-note.php?id=119736&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119736">
    <a href="/manual/vote-note.php?id=119736&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119736" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#119736" class="name">
  <strong class="user"><em>mail at tinodidriksen dot com</em></strong></a><a class="genanchor" href="#119736"> &para;</a><div class="date" title="2016-08-15 08:43"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119736">
<div class="phpcode"><code><span class="html">The example shows this to generate the needed number of question marks, which is amazingly wasteful:<br />$place_holders = implode(',', array_fill(0, count($params), '?'));<br /><br />Instead, just do:<br />$place_holders = '?'.str_repeat(',?', count($params)-1);</span></code></div>
  </div>
 </div>
  <div class="note" id="117454">  <div class="votes">
    <div id="Vu117454">
    <a href="/manual/vote-note.php?id=117454&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117454">
    <a href="/manual/vote-note.php?id=117454&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117454" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#117454" class="name">
  <strong class="user"><em>pere dot pasqual at gmail dot com</em></strong></a><a class="genanchor" href="#117454"> &para;</a><div class="date" title="2015-06-11 03:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117454">
<div class="phpcode"><code><span class="html">It's been 7 years since simon dot lehmann at gmx dot comment, but today I found myself having problems with a prepared statement involving an INSERT, PDO odbc driver for Microsoft Access and PHP 5.4.7. The prepared statement was done using the prepare + execute method, throwing an ugly<br />"SQLExecDirect[-3500] at ext\\pdo_odbc\\odbc_driver.c:247" error<br />and a<br />42000 ("Syntax error or access violation") SQLSTATE.<br /><br />He suspects what the problem is and points to a possible solution: using bindParam() or bindValue() and specify a data type.<br /><br />Well, that seems to be right identifying the source of the problem, but there is a simpler solution that worked for me, simpler and that allows you to continue using pdo::prepare() with ? as parameters and pdo::execute():<br />the only thing you have to do is, if not done before, a cast of the binded parameters to its specific type (the type that the database is expecting) before putting them in the array you pass to pdo::execute($array).<br /><br />The following code fails, throwing the error above:<br /><br /><span class="default">&lt;?php<br />$name </span><span class="keyword">= </span><span class="string">"John"</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="string">"1"</span><span class="keyword">;<br /></span><span class="default">$price </span><span class="keyword">= </span><span class="string">"1.78"</span><span class="keyword">;<br /></span><span class="default">$SQL </span><span class="keyword">= </span><span class="string">"INSERT INTO table (name, length, price) VALUES (?,?,?)"</span><span class="keyword">;<br /></span><span class="default">$arra </span><span class="keyword">= array(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$price</span><span class="keyword">);<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$msq</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$SQL</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$arra</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This one works for me like a charm:<br /><br /><span class="default">&lt;?php<br />$name </span><span class="keyword">= </span><span class="string">"John"</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= (int)</span><span class="string">"1"</span><span class="keyword">; </span><span class="comment">// the database is expecting this type<br /></span><span class="default">$price </span><span class="keyword">= (float)</span><span class="string">"1.78"</span><span class="keyword">; </span><span class="comment">// the database is expecting this type<br /></span><span class="default">$SQL </span><span class="keyword">= </span><span class="string">"INSERT INTO table (name, length, price) VALUES (?,?,?)"</span><span class="keyword">;<br /></span><span class="default">$arra </span><span class="keyword">= array(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$price</span><span class="keyword">);<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$msq</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$SQL</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$arra</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125040">  <div class="votes">
    <div id="Vu125040">
    <a href="/manual/vote-note.php?id=125040&amp;page=pdostatement.execute&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125040">
    <a href="/manual/vote-note.php?id=125040&amp;page=pdostatement.execute&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125040" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#125040" class="name">
  <strong class="user"><em>valterekholm at hotmail.com</em></strong></a><a class="genanchor" href="#125040"> &para;</a><div class="date" title="2020-05-23 11:25"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125040">
<div class="phpcode"><code><span class="html">I'm using the question-mark way when binding. I tried to use an an associative array when doing<br /><br /> $stmt-&gt;execute($values);<br /><br />having column-names as keys. I thought this would make it easier when rendering the query (as I had variable amounts of parameters).<br /><br />I found that the execute then could not work with associative array, only with numeric array (with numeric indexes).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.execute&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.execute.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
