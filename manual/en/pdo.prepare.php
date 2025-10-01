<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO::prepare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.prepare.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.prepare.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.prepare.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.lastinsertid.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.query.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.prepare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.prepare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.prepare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.prepare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.prepare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.prepare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.prepare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.prepare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.prepare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.prepare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.prepare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prepares a statement for execution and returns a statement object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO::prepare - Manual" />
<meta name="twitter:description" content="Prepares a statement for execution and returns a statement object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO::prepare - Manual" />
<meta itemprop="description" content="Prepares a statement for execution and returns a statement object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prepares a statement for execution and returns a statement object" />

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
        <a href="pdo.query.php">
          PDO::query &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.lastinsertid.php">
          &laquo; PDO::lastInsertId        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.pdo.php'>PDO</a></li>      <li><a href='class.pdo.php'>PDO</a></li>      </ul>
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
            <option value='en/pdo.prepare.php' selected="selected">English</option>
            <option value='de/pdo.prepare.php'>German</option>
            <option value='es/pdo.prepare.php'>Spanish</option>
            <option value='fr/pdo.prepare.php'>French</option>
            <option value='it/pdo.prepare.php'>Italian</option>
            <option value='ja/pdo.prepare.php'>Japanese</option>
            <option value='pt_BR/pdo.prepare.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.prepare.php'>Russian</option>
            <option value='tr/pdo.prepare.php'>Turkish</option>
            <option value='uk/pdo.prepare.php'>Ukrainian</option>
            <option value='zh/pdo.prepare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.prepare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDO::prepare</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PHP 8,PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDO::prepare</span> &mdash; <span class="dc-title">
   Prepares a statement for execution and returns a statement object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdo.prepare-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDO::prepare</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="class.pdostatement.php" class="type PDOStatement">PDOStatement</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   Prepares an SQL statement to be executed by the
   <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span> method. The statement template can
   contain zero or more named (:name) or question mark (?) parameter markers
   for which real values will be substituted when the statement is executed.
   Both named and question mark parameter markers cannot be used within the same
   statement template; only one or the other parameter style.
   Use these parameters to bind any user-input, do not include the user-input
   directly in the query.
  </p>
  <p class="para">
   You must include a unique parameter marker for each value you wish to pass
   in to the statement when you call <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span>.
   You cannot use a named parameter marker of the same name more than once in a prepared
   statement, unless emulation mode is on.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Parameter markers can represent a complete data literal only.
    Neither part of literal, nor keyword, nor identifier, nor whatever arbitrary query 
    part can be bound using parameters. For example, you cannot bind multiple values 
    to a single parameter in the IN() clause of an SQL statement.
   </p>
  </p></blockquote>
  <p class="para">
   Calling <span class="methodname"><strong>PDO::prepare()</strong></span> and
   <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span> for statements that will be
   issued multiple times with different parameter values optimizes the
   performance of your application by allowing the driver to negotiate
   client and/or server side caching of the query plan and meta information. Also, calling <span class="methodname"><strong>PDO::prepare()</strong></span> and
   <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span> helps to prevent SQL injection attacks by eliminating the need to
   manually quote and escape the parameters.
  </p>
  <p class="para">
   PDO will emulate prepared statements/bound parameters for drivers that do
   not natively support them, and can also rewrite named or question mark
   style parameter markers to something more appropriate, if the driver
   supports one style but not the other.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    The parser used for emulated prepared statements and for
    rewriting named or question mark style parameters supports the non standard
    backslash escapes for single- and double quotes. That means that terminating
    quotes immediately preceeded by a backslash are not recognized as such, which
    may result in wrong detection of parameters causing the prepared statement to
    fail when it is executed. A work-around is to not use emulated prepares for
    such SQL queries, and to avoid rewriting of parameters by using a parameter style
    which is natively supported by the driver.
   </span>
  </p></blockquote>
  <p class="para">
    As of PHP 7.4.0, question marks can be escaped by doubling them. That means that
    the <code class="literal">??</code> string will be translated to <code class="literal">?</code>
    when sending the query to the database.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-pdo.prepare-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       This must be a valid SQL statement template for the target database server.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       This array holds one or more key=&gt;value pairs to set
       attribute values for the PDOStatement object that this method
       returns. You would most commonly use this to set the
       <code class="literal">PDO::ATTR_CURSOR</code> value to
       <code class="literal">PDO::CURSOR_SCROLL</code> to request a scrollable cursor.
       Some drivers have driver-specific options that may be set at
       prepare-time.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdo.prepare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If the database server successfully prepares the statement,
   <span class="methodname"><strong>PDO::prepare()</strong></span> returns a
   <span class="classname"><a href="class.pdostatement.php" class="classname">PDOStatement</a></span> object.
   If the database server cannot successfully prepare the statement,
   <span class="methodname"><strong>PDO::prepare()</strong></span> returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> or emits
   <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> (depending on <a href="pdo.error-handling.php" class="link">error handling</a>).
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Emulated prepared statements does not communicate with the database server
    so <span class="methodname"><strong>PDO::prepare()</strong></span> does not check the statement.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 errors" id="refsect1-pdo.prepare-errors">
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


 <div class="refsect1 examples" id="refsect1-pdo.prepare-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1139"><p><strong>Example #1 SQL statement template with named parameters</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by passing an array of values */<br /></span><span style="color: #0000BB">$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; :calories AND colour = :colour'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">, [</span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">ATTR_CURSOR </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">PDO</span><span style="color: #007700">::</span><span style="color: #0000BB">CURSOR_FWDONLY</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">'calories' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #DD0000">'colour' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'red'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #FF8000">/* Array keys can be prefixed with colons ":" too (optional) */<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">':calories' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">175</span><span style="color: #007700">, </span><span style="color: #DD0000">':colour' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'yellow'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$yellow </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-1140">
    <p><strong>Example #2 SQL statement template with question mark parameters</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Execute a prepared statement by passing an array of values */<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT name, colour, calories<br />    FROM fruit<br />    WHERE calories &lt; ? AND colour = ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #0000BB">150</span><span style="color: #007700">, </span><span style="color: #DD0000">'red'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$red </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #0000BB">175</span><span style="color: #007700">, </span><span style="color: #DD0000">'yellow'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$yellow </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-1141">
    <p><strong>Example #3 SQL statement template with question mark escaped</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* note: this is only valid on PostgreSQL databases */<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'SELECT * FROM issues WHERE tag::jsonb ?? ?'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">'feature'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$featureIssues </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">([</span><span style="color: #DD0000">'performance'</span><span style="color: #007700">]);<br /></span><span style="color: #0000BB">$performanceIssues </span><span style="color: #007700">= </span><span style="color: #0000BB">$sth</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchAll</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-pdo.prepare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.exec.php" class="methodname" rel="rdfs-seeAlso">PDO::exec()</a> - Execute an SQL statement and return the number of affected rows</span></li>
    <li><span class="methodname"><a href="pdo.query.php" class="methodname" rel="rdfs-seeAlso">PDO::query()</a> - Prepares and executes an SQL statement without placeholders</span></li>
    <li><span class="methodname"><a href="pdostatement.execute.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::execute()</a> - Executes a prepared statement</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo/prepare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.prepare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.prepare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111977">  <div class="votes">
    <div id="Vu111977">
    <a href="/manual/vote-note.php?id=111977&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111977">
    <a href="/manual/vote-note.php?id=111977&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111977" title="76% like this...">
    187
    </div>
  </div>
  <a href="#111977" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#111977"> &para;</a><div class="date" title="2013-04-18 05:23"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111977">
<div class="phpcode"><code><span class="html">To those wondering why adding quotes to around a placeholder is wrong, and why you can't use placeholders for table or column names:<br /><br />There is a common misconception about how the placeholders in prepared statements work: they are not simply substituted in as (escaped) strings, and the resulting SQL executed. Instead, a DBMS asked to "prepare" a statement comes up with a complete query plan for how it would execute that query, including which tables and indexes it would use, which will be the same regardless of how you fill in the placeholders.<br /><br />The plan for "SELECT name FROM my_table WHERE id = :value" will be the same whatever you substitute for ":value", but the seemingly similar "SELECT name FROM :table WHERE id = :value" cannot be planned, because the DBMS has no idea what table you're actually going to select from.<br /><br />Even when using "emulated prepares", PDO cannot let you use placeholders anywhere, because it would have to work out what you meant: does "Select :foo From some_table" mean ":foo" is going to be a column reference, or a literal string?<br /><br />When your query is using a dynamic column reference, you should be explicitly white-listing the columns you know to exist on the table, e.g. using a switch statement with an exception thrown in the default: clause.</span></code></div>
  </div>
 </div>
  <div class="note" id="111458">  <div class="votes">
    <div id="Vu111458">
    <a href="/manual/vote-note.php?id=111458&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111458">
    <a href="/manual/vote-note.php?id=111458&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111458" title="69% like this...">
    97
    </div>
  </div>
  <a href="#111458" class="name">
  <strong class="user"><em>Simon Le Pine</em></strong></a><a class="genanchor" href="#111458"> &para;</a><div class="date" title="2013-02-21 05:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111458">
<div class="phpcode"><code><span class="html">Hi All,<br /><br />First time posting to php.net, a little nervous.<br /><br />After a bunch of searching I've learned 2 things about prepared statements:<br />1.) It fails if you enclose in a single quote (')<br />This fails: "SELECT * FROM users WHERE email=':email'"<br />This works: "SELECT * FROM users WHERE email=:email"<br />2.) You cannot search with a prepared statement<br />This fails: "SELECT * FROM users WHERE :search=:email"<br />This succeeds: "SELECT * FROM users WHERE $search=:email"<br /><br />In my case I allow the user to enter their username or email, determine which they've entered and set $search to "username" or "email". As this value is not entered by the user there is no potential for SQL injection and thus safe to use as I have done.<br /><br />Hope that saves someone else from a lot of searching.</span></code></div>
  </div>
 </div>
  <div class="note" id="114616">  <div class="votes">
    <div id="Vu114616">
    <a href="/manual/vote-note.php?id=114616&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114616">
    <a href="/manual/vote-note.php?id=114616&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114616" title="72% like this...">
    42
    </div>
  </div>
  <a href="#114616" class="name">
  <strong class="user"><em>bg at enativ dot com</em></strong></a><a class="genanchor" href="#114616"> &para;</a><div class="date" title="2014-03-12 03:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114616">
<div class="phpcode"><code><span class="html">if you run queries in a loop, don't include $pdo-&gt;prepare() inside the loop, it will save you some resources (and time).<br /><br />prepare statement inside loop:<br />for($i=0; $i&lt;1000; $i++) {<br />    $rs = $pdo-&gt;prepare("SELECT `id` FROM `admins` WHERE `groupID` = :groupID AND `id` &lt;&gt; :id");<br />    $rs-&gt;execute([':groupID' =&gt; $group, ':id' =&gt; $id]);<br />}<br /><br />// took 0.066626071929932 microseconds<br /><br />prepare statement outside loop:<br />$rs = $pdo-&gt;prepare("SELECT `id` FROM `admins` WHERE `groupID` = :groupID AND `id` &lt;&gt; :id");<br />for($i=0; $i&lt;1000; $i++) {<br />    $rs-&gt;execute([':groupID' =&gt; $group, ':id' =&gt; $id]);<br />}<br /><br />// took 0.064448118209839 microseconds<br /><br />for 1,000 (simple) queries it took 0.002 microseconds less.<br />not much, but it worth mention.</span></code></div>
  </div>
 </div>
  <div class="note" id="91078">  <div class="votes">
    <div id="Vu91078">
    <a href="/manual/vote-note.php?id=91078&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91078">
    <a href="/manual/vote-note.php?id=91078&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91078" title="69% like this...">
    57
    </div>
  </div>
  <a href="#91078" class="name">
  <strong class="user"><em>daniel dot egeberg at gmail dot com</em></strong></a><a class="genanchor" href="#91078"> &para;</a><div class="date" title="2009-05-24 01:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91078">
<div class="phpcode"><code><span class="html">You can also pass an array of values to PDOStatement::execute(). This is also secured against SQL injection. You don't necessarily have to use bindParam() or bindValue().</span></code></div>
  </div>
 </div>
  <div class="note" id="90209">  <div class="votes">
    <div id="Vu90209">
    <a href="/manual/vote-note.php?id=90209&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90209">
    <a href="/manual/vote-note.php?id=90209&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90209" title="66% like this...">
    42
    </div>
  </div>
  <a href="#90209" class="name">
  <strong class="user"><em>admin at wdfa dot co dot uk</em></strong></a><a class="genanchor" href="#90209"> &para;</a><div class="date" title="2009-04-09 09:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90209">
<div class="phpcode"><code><span class="html">Note on the SQL injection properties of prepared statements.<br /><br />Prepared statements only project you from SQL injection IF you use the bindParam or bindValue option.<br /><br />For example if you have a table called users with two fields, username and email and someone updates their username you might run<br /><br />UPDATE `users` SET `user`='$var'<br /><br />where $var would be the user submitted text. <br /><br />Now if you did <br /><span class="default">&lt;?php<br />$a</span><span class="keyword">=new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">"mysql:host=localhost;dbname=database;"</span><span class="keyword">,</span><span class="string">"root"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"UPDATE `users` SET user='</span><span class="default">$var</span><span class="string">'"</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />and the user had entered  User', email='test for a test the injection would occur and the email would be updated to test as well as the user being updated to User.<br /><br />Using bindParam as follows<br /> <span class="default">&lt;?php<br />$var</span><span class="keyword">=</span><span class="string">"User', email='test"</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">=new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">"mysql:host=localhost;dbname=database;"</span><span class="keyword">,</span><span class="string">"root"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">=</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"UPDATE `users` SET user=:var"</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":var"</span><span class="keyword">,</span><span class="default">$var</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />The sql would be escaped and update the username to User', email='test'</span></code></div>
  </div>
 </div>
  <div class="note" id="128138">  <div class="votes">
    <div id="Vu128138">
    <a href="/manual/vote-note.php?id=128138&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128138">
    <a href="/manual/vote-note.php?id=128138&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128138" title="71% like this...">
    3
    </div>
  </div>
  <a href="#128138" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#128138"> &para;</a><div class="date" title="2023-01-21 01:42"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128138">
<div class="phpcode"><code><span class="html">There are restrictions on the placeholder string. In the following code the first execute fails with a SQLSTATE[HY093]. It is not clear exactly what characters are allowed.<br /><br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">\PDO</span><span class="keyword">(</span><span class="string">"mysql:hostname=localhost;dbname=minidwh"</span><span class="keyword">, </span><span class="string">"minidwh"</span><span class="keyword">, </span><span class="string">"Meisterstueck!"</span><span class="keyword">);<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SET NAMES 'utf8mb4'"</span><span class="keyword">);<br /><br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"DROP TABLE IF EXISTS `äëïöüß`"</span><span class="keyword">);<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"CREATE TABLE `äëïöüß` ( `id` INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`) ) ENGINE = ARIA;"</span><span class="keyword">);<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"ALTER TABLE `äëïöüß` ADD COLUMN `äëïöüß` TEXT NULL"</span><span class="keyword">);<br />try {<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `äëïöüß` (`äëïöüß`) VALUES (:äëïöüß)"</span><span class="keyword">);<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="string">':äëïöüß' </span><span class="keyword">=&gt; </span><span class="string">'test1'</span><span class="keyword">]);<br />} catch (</span><span class="default">\PDOException $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">'&lt;BR&gt;'</span><span class="keyword">;<br />}<br /><br />try {<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `äëïöüß` (`äëïöüß`) VALUES (?)"</span><span class="keyword">);<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="string">'test2'</span><span class="keyword">]);<br />} catch (</span><span class="default">\PDOException $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">'&lt;BR&gt;'</span><span class="keyword">;<br />}<br /><br />try {<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `äëïöüß` (`äëïöüß`) VALUES (:column)"</span><span class="keyword">);<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="string">':column' </span><span class="keyword">=&gt; </span><span class="string">'test3'</span><span class="keyword">]);<br />} catch (</span><span class="default">\PDOException $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">'&lt;BR&gt;'</span><span class="keyword">;<br />}<br /><br />try {<br />  </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO `äëïöüß` (`äëïöüß`) VALUES (:column)"</span><span class="keyword">);<br />  </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="string">':column'</span><span class="keyword">, </span><span class="string">'test4'</span><span class="keyword">);<br />  </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />} catch (</span><span class="default">\PDOException $e</span><span class="keyword">) {<br />  echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">'&lt;BR&gt;'</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120969">  <div class="votes">
    <div id="Vu120969">
    <a href="/manual/vote-note.php?id=120969&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120969">
    <a href="/manual/vote-note.php?id=120969&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120969" title="66% like this...">
    5
    </div>
  </div>
  <a href="#120969" class="name">
  <strong class="user"><em>Mark Simon</em></strong></a><a class="genanchor" href="#120969"> &para;</a><div class="date" title="2017-04-11 11:27"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120969">
<div class="phpcode"><code><span class="html">Many students are tempted to add single quotes around string place holders in the SQL statement, since that’s what they normally do around strings in SQL and PHP.<br /><br />I have to explain:<br /><br />Quotes are not part of the string — they are used to construct a string in the coding language. If you are creating a string literal in SQL or PHP, then it must indeed be quoted. If the string has already been created, and is being passed on, then additional quotes would be wrong at best, and mis-interpreted at worst.<br /><br />In prepared place holders, think of place holders as variables, which, whether they are strings or other values, are always written without quotes.</span></code></div>
  </div>
 </div>
  <div class="note" id="107811">  <div class="votes">
    <div id="Vu107811">
    <a href="/manual/vote-note.php?id=107811&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107811">
    <a href="/manual/vote-note.php?id=107811&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107811" title="60% like this...">
    14
    </div>
  </div>
  <a href="#107811" class="name">
  <strong class="user"><em>public at grik dot net</em></strong></a><a class="genanchor" href="#107811"> &para;</a><div class="date" title="2012-03-07 12:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107811">
<div class="phpcode"><code><span class="html">With PDO_MYSQL you need to remember about the PDO::ATTR_EMULATE_PREPARES option.<br /><br />The default value is TRUE, like<br />$dbh-&gt;setAttribute(PDO::ATTR_EMULATE_PREPARES,true); <br /><br />This means that no prepared statement is created with $dbh-&gt;prepare() call. With exec() call PDO replaces the placeholders with values itself and sends MySQL a generic query string.<br /><br />The first consequence is that the call  $dbh-&gt;prepare('garbage');<br />reports no error. You will get an SQL error during the $dbh-&gt;exec() call.<br />The second one is the SQL injection risk in special cases, like using a placeholder for the table name.<br /><br />The reason for emulation is a poor performance of MySQL with prepared statements. Emulation works significantly faster.</span></code></div>
  </div>
 </div>
  <div class="note" id="96544">  <div class="votes">
    <div id="Vu96544">
    <a href="/manual/vote-note.php?id=96544&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96544">
    <a href="/manual/vote-note.php?id=96544&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96544" title="53% like this...">
    3
    </div>
  </div>
  <a href="#96544" class="name">
  <strong class="user"><em>Robin</em></strong></a><a class="genanchor" href="#96544"> &para;</a><div class="date" title="2010-03-04 05:01"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96544">
<div class="phpcode"><code><span class="html">Use prepared statements to ensure integrity of binary data during storage and retrieval. Escaping/quoting by f.e. sqlite_escape_string() or PDO::quote() is NOT suited for binary data - only for strings of text.<br /><br />A simple test verifies perfect storage and retrieval with prepared statements:<br /><br /><span class="default">&lt;?php<br /><br />$num_values </span><span class="keyword">= </span><span class="default">10000</span><span class="keyword">;<br /><br /></span><span class="default">$db </span><span class="keyword">= new </span><span class="default">pdo</span><span class="keyword">( </span><span class="string">'sqlite::memory:' </span><span class="keyword">);<br /><br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">( </span><span class="string">'CREATE TABLE data (binary BLOB(512));' </span><span class="keyword">);<br /><br /></span><span class="comment">// generate plenty of troublesome, binary data<br /></span><span class="keyword">for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$num_values</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />{<br />    for( </span><span class="default">$val </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$c </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$c </span><span class="keyword">&lt; </span><span class="default">512</span><span class="keyword">/</span><span class="default">16</span><span class="keyword">; </span><span class="default">$c</span><span class="keyword">++ )<br />        </span><span class="default">$val </span><span class="keyword">.= </span><span class="default">md5</span><span class="keyword">( </span><span class="default">mt_rand</span><span class="keyword">(), </span><span class="default">true </span><span class="keyword">);<br />    @</span><span class="default">$binary</span><span class="keyword">[] = </span><span class="default">$val</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// insert each value by prepared statement<br /></span><span class="keyword">for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$num_values</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />    </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">( </span><span class="string">'INSERT INTO data VALUES (?);' </span><span class="keyword">)-&gt;</span><span class="default">execute</span><span class="keyword">( array(</span><span class="default">$binary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) );<br /><br /></span><span class="comment">// fetch the entire row<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">( </span><span class="string">'SELECT binary FROM data;' </span><span class="keyword">)-&gt;</span><span class="default">fetchAll</span><span class="keyword">( </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN </span><span class="keyword">);<br /><br /></span><span class="comment">// compare with original array, noting any mismatch<br /></span><span class="keyword">for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$num_values</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ )<br />    if( </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] != </span><span class="default">$binary</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ) echo </span><span class="string">"[</span><span class="default">$i</span><span class="string">] mismatch\n"</span><span class="keyword">;<br /><br /></span><span class="default">$db </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112626">  <div class="votes">
    <div id="Vu112626">
    <a href="/manual/vote-note.php?id=112626&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112626">
    <a href="/manual/vote-note.php?id=112626&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112626" title="52% like this...">
    1
    </div>
  </div>
  <a href="#112626" class="name">
  <strong class="user"><em>php dot chaska at xoxy dot net</em></strong></a><a class="genanchor" href="#112626"> &para;</a><div class="date" title="2013-07-05 08:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112626">
<div class="phpcode"><code><span class="html">Note that for Postgres, even though Postgres does support prepared statements, PHP's PDO driver NEVER sends the prepared statement to the Postgres server in advance of the call to PDO::execute().  <br /><br />Therefore, PDO::prepare() will never throw an error for things like faulty SQL syntax.  <br /><br />It also means the server will not parse and plan the SQL until the first time PDO::execute() is called, which may or may not adversely affect your optimization plans.</span></code></div>
  </div>
 </div>
  <div class="note" id="129987">  <div class="votes">
    <div id="Vu129987">
    <a href="/manual/vote-note.php?id=129987&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129987">
    <a href="/manual/vote-note.php?id=129987&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129987" title="no votes...">
    0
    </div>
  </div>
  <a href="#129987" class="name">
  <strong class="user"><em>php at bagnara dot org</em></strong></a><a class="genanchor" href="#129987"> &para;</a><div class="date" title="2025-01-19 09:13"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129987">
<div class="phpcode"><code><span class="html">As mentioned above, column and table identifiers cannot be passed as parameters in prepared queries. PDO also does not provide a method to escape and quote an identifier. The following method is what I use to escape and quote an identifier. Note that $this-&gt;pdo is a PDO object.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * Escape and quote an identifier.<br />     * <br />     * @param string $identifier Column or table name to escape and quote<br />     * @param string $quoteWith Database dependent, default backtick<br />     * @return string <br />     */<br />    </span><span class="keyword">public function<br />    </span><span class="default">quoteIdentifier</span><span class="keyword">( </span><span class="default">string $identifier</span><span class="keyword">, </span><span class="default">$quoteWith </span><span class="keyword">= </span><span class="string">'`' </span><span class="keyword">)  :  </span><span class="default">string<br />    </span><span class="keyword">{<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pdo</span><span class="keyword">-&gt;</span><span class="default">quote</span><span class="keyword">( </span><span class="default">$identifier </span><span class="keyword">) ;  </span><span class="comment">// escaped and quoted<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">( </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] ) ;            </span><span class="comment">// remove the quotes, assumes open and closing the same<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">$quoteWith </span><span class="keyword">. </span><span class="default">$s </span><span class="keyword">. </span><span class="default">$quoteWith </span><span class="keyword">; </span><span class="comment">// add new quote<br />        </span><span class="keyword">return </span><span class="default">$s </span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69291">  <div class="votes">
    <div id="Vu69291">
    <a href="/manual/vote-note.php?id=69291&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69291">
    <a href="/manual/vote-note.php?id=69291&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69291" title="52% like this...">
    2
    </div>
  </div>
  <a href="#69291" class="name">
  <strong class="user"><em>roth at egotec dot com</em></strong></a><a class="genanchor" href="#69291"> &para;</a><div class="date" title="2006-08-30 01:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69291">
<div class="phpcode"><code><span class="html">Attention using MySQL and prepared statements.<br />Using a placeholder multiple times inside a statement doesn't work. PDO just translates the first occurance und leaves the second one as is.<br /><br />select id,name from demo_de where name LIKE :name OR name=:name<br /><br />You have to use<br /><br />select id,name from demo_de where name LIKE :name OR name=:name2<br /><br />and bind name two times. I don't know if other databases (for example Oracle or MSSQL) support multiple occurances. If that's the fact, then the PDO behaviour for MySQL should be changed.</span></code></div>
  </div>
 </div>
  <div class="note" id="114251">  <div class="votes">
    <div id="Vu114251">
    <a href="/manual/vote-note.php?id=114251&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114251">
    <a href="/manual/vote-note.php?id=114251&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114251" title="50% like this...">
    1
    </div>
  </div>
  <a href="#114251" class="name">
  <strong class="user"><em>pbakhuis</em></strong></a><a class="genanchor" href="#114251"> &para;</a><div class="date" title="2014-01-29 03:42"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114251">
<div class="phpcode"><code><span class="html">Noteworthy in my opinion is that if you prepare a statement but do not bind a value to the markers it will insert null by default. e.g.<br /><span class="default">&lt;?php<br /></span><span class="comment">/** @var PDO $db */<br /></span><span class="default">$prep </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT INTO item(title, link) VALUES(:title, :link)'</span><span class="keyword">);<br /></span><span class="default">$prep</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>Will attempt to insert null, null into the item table.</span></code></div>
  </div>
 </div>
  <div class="note" id="121379">  <div class="votes">
    <div id="Vu121379">
    <a href="/manual/vote-note.php?id=121379&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121379">
    <a href="/manual/vote-note.php?id=121379&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121379" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#121379" class="name">
  <strong class="user"><em>machitgarha at outlook dot com</em></strong></a><a class="genanchor" href="#121379"> &para;</a><div class="date" title="2017-07-14 06:32"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121379">
<div class="phpcode"><code><span class="html">Hello everyone.<br /><br />I want to note that it doesn't matter where you are using a variable inside the query directly, that is not secure against SQL injections (unless performing a long security operation).<br /><br />The following example is insecure against SQL injections:<br /><br /><span class="default">&lt;?php<br /><br />$statement </span><span class="keyword">= </span><span class="default">$databaseConnection</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"SELECT * FROM `</span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'table']` WHERE </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'search_for']=:search"</span><span class="keyword">);<br /></span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":search"</span><span class="keyword">, </span><span class="default">$search</span><span class="keyword">);<br /></span><span class="default">$search </span><span class="keyword">= </span><span class="default">18</span><span class="keyword">; </span><span class="comment">// For example<br /></span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />If an attacker pass '1;-- ' as input named 'search_for', he is not a very bad attacker; because he didn't delete your data! In the above example, an attacker can do anything with connected database (unless you have restricted the connected user). Unfortunately, as Simon Le Pine mentioned, you cannot use prepared statements as other parts of a query; just can be used to search in indexes.<br /><br />Hope this helps from loosing some data.<br />Sorry for my a bit weak English!</span></code></div>
  </div>
 </div>
  <div class="note" id="108481">  <div class="votes">
    <div id="Vu108481">
    <a href="/manual/vote-note.php?id=108481&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108481">
    <a href="/manual/vote-note.php?id=108481&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108481" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#108481" class="name">
  <strong class="user"><em>orrd101 at gmail dot com</em></strong></a><a class="genanchor" href="#108481"> &para;</a><div class="date" title="2012-04-30 12:46"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108481">
<div class="phpcode"><code><span class="html">Don't just automatically use prepare() for all of your queries.<br /><br />If you are only submitting one query, using PDO::query() with PDO::quote() is much faster (about 3x faster in my test results with MySQL).  A prepared query is only faster if you are submitting thousands of identical queries at once (with different data).<br /><br />If you Google for performance comparisons you will find that this is generally consistently the case, or you can write some code and do your own comparison for your particular configuration and query scenario. But generally PDO::query() will always be faster except when submitting a large number of identical queries.  Prepared queries do have the advantage of escaping the data for you, so you have to be sure to use quote() when using query().</span></code></div>
  </div>
 </div>
  <div class="note" id="112277">  <div class="votes">
    <div id="Vu112277">
    <a href="/manual/vote-note.php?id=112277&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112277">
    <a href="/manual/vote-note.php?id=112277&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112277" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#112277" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#112277"> &para;</a><div class="date" title="2013-05-27 01:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112277">
<div class="phpcode"><code><span class="html">It is possible to prepare in advance several statements against a single connection. As long as that connection remains open the statements can be executed and fetched from as often as you like in any order; their "prepare-execute-fetch" steps can be interleaved in whichever way is best.<br /><br />So if you're likely to be using several statements often (perhaps within a loop of transactions), you may like to consider preparing all the statements you'll be using up front.</span></code></div>
  </div>
 </div>
  <div class="note" id="83281">  <div class="votes">
    <div id="Vu83281">
    <a href="/manual/vote-note.php?id=83281&amp;page=pdo.prepare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83281">
    <a href="/manual/vote-note.php?id=83281&amp;page=pdo.prepare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83281" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#83281" class="name">
  <strong class="user"><em>ak_9jsz</em></strong></a><a class="genanchor" href="#83281"> &para;</a><div class="date" title="2008-05-18 10:16"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83281">
<div class="phpcode"><code><span class="html">Using cursors doesn't work with SQLite 3.5.9. I get an error message when it gets to the execute() method.<br /><br />Some of you might be saying "duh!" but i was surprised to see TRIGGER support in SQLite, so i had to try. :)<br /><br />I wanted to use Absolute referencing on a Scrollable cursor and i only wanted one column of data. So i used this instead of a cursor.<br /><br /><span class="default">&lt;?php<br /><br />$dbo </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'sqlite:tdb'</span><span class="keyword">);<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'SELECT F1, F2 FROM tblA WHERE F1 &lt;&gt; "A";'</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$dbo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">$resColumn </span><span class="keyword">= </span><span class="default">$res</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_COLUMN</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br />for(</span><span class="default">$r</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$r</span><span class="keyword">&lt;=</span><span class="default">3</span><span class="keyword">;</span><span class="default">$r</span><span class="keyword">++)<br />    echo </span><span class="string">'Row '</span><span class="keyword">. </span><span class="default">$r </span><span class="keyword">. </span><span class="string">' returned: ' </span><span class="keyword">. </span><span class="default">$resColumn</span><span class="keyword">[</span><span class="default">$r</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">$dbo </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.prepare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.prepare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="pdo.begintransaction.php" title="beginTransaction">beginTransaction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.commit.php" title="commit">commit</a>
                        </li>
                                                <li class="">
                            <a href="pdo.connect.php" title="connect">connect</a>
                        </li>
                                                <li class="">
                            <a href="pdo.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="pdo.errorcode.php" title="errorCode">errorCode</a>
                        </li>
                                                <li class="">
                            <a href="pdo.errorinfo.php" title="errorInfo">errorInfo</a>
                        </li>
                                                <li class="">
                            <a href="pdo.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="pdo.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="pdo.getavailabledrivers.php" title="getAvailableDrivers">getAvailableDrivers</a>
                        </li>
                                                <li class="">
                            <a href="pdo.intransaction.php" title="inTransaction">inTransaction</a>
                        </li>
                                                <li class="">
                            <a href="pdo.lastinsertid.php" title="lastInsertId">lastInsertId</a>
                        </li>
                                                <li class="current">
                            <a href="pdo.prepare.php" title="prepare">prepare</a>
                        </li>
                                                <li class="">
                            <a href="pdo.query.php" title="query">query</a>
                        </li>
                                                <li class="">
                            <a href="pdo.quote.php" title="quote">quote</a>
                        </li>
                                                <li class="">
                            <a href="pdo.rollback.php" title="rollBack">rollBack</a>
                        </li>
                                                <li class="">
                            <a href="pdo.setattribute.php" title="setAttribute">setAttribute</a>
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
