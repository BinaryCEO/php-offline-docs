<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::fetchObject - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.fetchobject.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.fetchobject.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetchobject.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.fetchcolumn.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.getattribute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.fetchobject.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.fetchobject.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.fetchobject.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.fetchobject.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.fetchobject.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.fetchobject.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.fetchobject.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.fetchobject.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.fetchobject.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.fetchobject.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.fetchobject.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetches the next row and returns it as an object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::fetchObject - Manual" />
<meta name="twitter:description" content="Fetches the next row and returns it as an object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::fetchObject - Manual" />
<meta itemprop="description" content="Fetches the next row and returns it as an object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetches the next row and returns it as an object" />

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
        <a href="pdostatement.getattribute.php">
          PDOStatement::getAttribute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.fetchcolumn.php">
          &laquo; PDOStatement::fetchColumn        </a>
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
            <option value='en/pdostatement.fetchobject.php' selected="selected">English</option>
            <option value='de/pdostatement.fetchobject.php'>German</option>
            <option value='es/pdostatement.fetchobject.php'>Spanish</option>
            <option value='fr/pdostatement.fetchobject.php'>French</option>
            <option value='it/pdostatement.fetchobject.php'>Italian</option>
            <option value='ja/pdostatement.fetchobject.php'>Japanese</option>
            <option value='pt_BR/pdostatement.fetchobject.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.fetchobject.php'>Russian</option>
            <option value='tr/pdostatement.fetchobject.php'>Turkish</option>
            <option value='uk/pdostatement.fetchobject.php'>Ukrainian</option>
            <option value='zh/pdostatement.fetchobject.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.fetchobject" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::fetchObject</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.2.4)</p><p class="refpurpose"><span class="refname">PDOStatement::fetchObject</span> &mdash; <span class="dc-title">Fetches the next row and returns it as an object</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.fetchobject-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::fetchObject</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$class</code><span class="initializer"> = &quot;stdClass&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$constructorArgs</code><span class="initializer"> = []</span></span>): <span class="type"><span class="type"><a href="language.types.object.php" class="type object">object</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   Fetches the next row and returns it as an object. This function is an
   alternative to <span class="methodname"><a href="pdostatement.fetch.php" class="methodname">PDOStatement::fetch()</a></span> with
   <strong><code><a href="pdo.constants.php#pdo.constants.fetch-class">PDO::FETCH_CLASS</a></code></strong> or
   <strong><code><a href="pdo.constants.php#pdo.constants.fetch-obj">PDO::FETCH_OBJ</a></code></strong> style.
  </p>
  <p class="para">
   When an object is fetched, its properties are assigned from respective
   column values, and afterwards its constructor is invoked.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-pdostatement.fetchobject-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">class</code></dt>
     <dd>
      <p class="para">
       Name of the created class.
      </p>
     </dd>
    
    
     <dt><code class="parameter">constructorArgs</code></dt>
     <dd>
      <p class="para">
       Elements of this array are passed to the constructor.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-pdostatement.fetchobject-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an instance of the required class with property names that
   correspond to the column names  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.fetchobject-errors">
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


 <div class="refsect1 seealso" id="refsect1-pdostatement.fetchobject-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdostatement.fetch.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetch()</a> - Fetches the next row from a result set</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/fetchobject.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.fetchobject%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.fetchobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetchobject.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111744">  <div class="votes">
    <div id="Vu111744">
    <a href="/manual/vote-note.php?id=111744&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111744">
    <a href="/manual/vote-note.php?id=111744&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111744" title="77% like this...">
    109
    </div>
  </div>
  <a href="#111744" class="name">
  <strong class="user"><em>rasmus at mindplay dot dk</em></strong></a><a class="genanchor" href="#111744"> &para;</a><div class="date" title="2013-03-23 09:53"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111744">
<div class="phpcode"><code><span class="html">Be warned of the rather unorthodox behavior of PDOStatement::fetchObject() which injects property-values BEFORE invoking the constructor - in other words, if your class  initializes property-values to defaults in the constructor, you will be overwriting the values injected by fetchObject() !<br /><br />A var_dump($this) in your __construct() method will reveal that property-values have been initialized prior to calling your constructor, so be careful.<br /><br />For this reason, I strongly recommend hydrating your objects manually, after retrieving the data as an array, rather than trying to have PDO apply properties directly to your objects.<br /><br />Clearly somebody thought they were being clever here - allowing you to access hydrated property-values from the constructor. Unfortunately, this is just not how OOP works - the constructor, by definition, is the first method called upon construction. <br /><br />If you need to initialize your objects after they have been constructed and hydrated, I suggest your model types implement an interface with an init() method, and you data access layer invoke this method (if implemented) after hydrating.</span></code></div>
  </div>
 </div>
  <div class="note" id="125431">  <div class="votes">
    <div id="Vu125431">
    <a href="/manual/vote-note.php?id=125431&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125431">
    <a href="/manual/vote-note.php?id=125431&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125431" title="96% like this...">
    26
    </div>
  </div>
  <a href="#125431" class="name">
  <strong class="user"><em>Val Bancer</em></strong></a><a class="genanchor" href="#125431"> &para;</a><div class="date" title="2020-10-11 03:32"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125431">
<div class="phpcode"><code><span class="html">If you want the constructor to be invoked before `fetchObject` sets the properties then `PDOStatement::fetch` method with `PDO::FETCH_PROPS_LATE` argument should be used.</span></code></div>
  </div>
 </div>
  <div class="note" id="117731">  <div class="votes">
    <div id="Vu117731">
    <a href="/manual/vote-note.php?id=117731&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117731">
    <a href="/manual/vote-note.php?id=117731&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117731" title="70% like this...">
    15
    </div>
  </div>
  <a href="#117731" class="name">
  <strong class="user"><em>beinghavingbreackfast at gmail dot com</em></strong></a><a class="genanchor" href="#117731"> &para;</a><div class="date" title="2015-07-29 08:51"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117731">
<div class="phpcode"><code><span class="html">It should be mentioned that this method can set even non-public properties. It may sound strange but it can actually be very useful when creating an object based on mysql result.<br />Consider a User class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">User </span><span class="keyword">{<br />   </span><span class="comment">// Private properties<br />   </span><span class="keyword">private </span><span class="default">$id</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">;<br /><br />   private function </span><span class="default">__construct </span><span class="keyword">() {}<br /><br />   public static function </span><span class="default">load_by_id </span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">) {<br />      </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT id, name FROM users WHERE id=?'</span><span class="keyword">);<br />      </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">([</span><span class="default">$id</span><span class="keyword">]);<br />      return </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">);<br />   }<br />   </span><span class="comment">/* same method can be written with the "name" column/property */<br /></span><span class="keyword">}<br /><br /></span><span class="default">$user </span><span class="keyword">= </span><span class="default">User</span><span class="keyword">::</span><span class="default">load_by_id</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$user</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />fetchObject() doesn't care about properties being public or not. It just passes the result to the object. Output is like:<br /><br />object(User)#3 (2) {<br />  ["id":"User":private]=&gt;<br />  string(1) "1"<br />  ["name":"User":private]=&gt;<br />  string(10) "John Smith"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="120445">  <div class="votes">
    <div id="Vu120445">
    <a href="/manual/vote-note.php?id=120445&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120445">
    <a href="/manual/vote-note.php?id=120445&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120445" title="66% like this...">
    8
    </div>
  </div>
  <a href="#120445" class="name">
  <strong class="user"><em>sebastian dot rapetti at alice dot it</em></strong></a><a class="genanchor" href="#120445"> &para;</a><div class="date" title="2017-01-10 08:00"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120445">
<div class="phpcode"><code><span class="html">PDOStatement::fetchObject() injects values as string, I needed a conversion type.<br /><br />I did it including settype() function in class constructor<br /><br />Below method that find an user by id and return user object instance:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">UserMapper </span><span class="keyword">extends </span><span class="default">MapperAbstract<br /></span><span class="keyword">{<br />    </span><span class="comment">//other code<br />    </span><span class="keyword">public function </span><span class="default">findById</span><span class="keyword">(</span><span class="default">int $userId</span><span class="keyword">)<br />    {<br />        </span><span class="default">$pdos </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dBase</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT user_id AS objectId, name, description, password, active, created, <br />        last_update AS lastUpdate FROM user WHERE user_id = :id'</span><span class="keyword">);<br /><br />        </span><span class="default">$pdos</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':id'</span><span class="keyword">, </span><span class="default">$userId</span><span class="keyword">, </span><span class="default">\PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br />        </span><span class="default">$pdos</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /><br />        return </span><span class="default">$pdos</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="string">'\DomainObjects\User'</span><span class="keyword">, array(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password</span><span class="keyword">));<br />    }<br />    </span><span class="comment">//other code<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />User class with type handling:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">User </span><span class="keyword">extends </span><span class="default">DomainObjectAbstract<br /></span><span class="keyword">{<br />   </span><span class="comment">//other code<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">Password $password</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">passwordUtility </span><span class="keyword">= </span><span class="default">$password</span><span class="keyword">;<br />        <br />        </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">objectId</span><span class="keyword">, </span><span class="string">'integer'</span><span class="keyword">);<br />        </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">active</span><span class="keyword">, </span><span class="string">'integer'</span><span class="keyword">);<br />    }<br />    </span><span class="comment">//other code<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />var_dump() of returned User instance:<br /><br /><span class="default">&lt;?php<br />object</span><span class="keyword">(</span><span class="default">DomainObjects\User</span><span class="keyword">)[</span><span class="default">18</span><span class="keyword">]<br />  public </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'root' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">4</span><span class="keyword">)<br />  public </span><span class="string">'description' </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'System User' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">11</span><span class="keyword">)<br />  public </span><span class="string">'password' </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'$2y$11$4IAn6SRaB0osPz8afZC5D.CmTrBGxnb5FQEygPjDirK9SWE/u8YuO' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">60</span><span class="keyword">)<br />  public </span><span class="string">'active' </span><span class="keyword">=&gt; </span><span class="default">int 1<br />  </span><span class="keyword">public </span><span class="string">'created' </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'2015-02-14 10:39:00' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">19</span><span class="keyword">)<br />  public </span><span class="string">'lastUpdate' </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'2016-08-30 18:46:56' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">19</span><span class="keyword">)<br />  private </span><span class="string">'passwordUtility' </span><span class="keyword">=&gt; <br />    </span><span class="default">object</span><span class="keyword">(</span><span class="default">Auth\Password</span><span class="keyword">)[</span><span class="default">13</span><span class="keyword">]<br />      protected </span><span class="string">'options' </span><span class="keyword">=&gt; <br />        array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />          </span><span class="string">'cost' </span><span class="keyword">=&gt; </span><span class="default">int 11<br />  </span><span class="keyword">protected </span><span class="string">'objectId' </span><span class="keyword">=&gt; </span><span class="default">int 1<br />?&gt;<br /></span><br />'objectId' and 'active' are now of the type required</span></code></div>
  </div>
 </div>
  <div class="note" id="118864">  <div class="votes">
    <div id="Vu118864">
    <a href="/manual/vote-note.php?id=118864&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118864">
    <a href="/manual/vote-note.php?id=118864&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118864" title="57% like this...">
    4
    </div>
  </div>
  <a href="#118864" class="name">
  <strong class="user"><em>zlk1214 at gmail dot com</em></strong></a><a class="genanchor" href="#118864"> &para;</a><div class="date" title="2016-02-18 01:41"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118864">
<div class="phpcode"><code><span class="html">You can access MySQL tables in an objective way. Suppose you have a table named Users that has fields: UserID, UserName, UserPassword, UserBirthday, you can create a PHP class extending DataObject that is associated with this table:<br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">User </span><span class="keyword">extends </span><span class="default">DataObject </span><span class="keyword">{<br />    </span><span class="comment">// name: Table Name, key: Primary Key (can be an array), auto: AUTO_INCREMENT field<br />    </span><span class="keyword">protected static </span><span class="default">$_table </span><span class="keyword">= array(</span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'Users'</span><span class="keyword">, </span><span class="string">'key' </span><span class="keyword">=&gt; </span><span class="string">'UserID'</span><span class="keyword">, </span><span class="string">'auto' </span><span class="keyword">=&gt; </span><span class="string">'UserID'</span><span class="keyword">);<br />    </span><span class="comment">// relationships between PHP properties and MySQL field names<br />    </span><span class="keyword">protected static </span><span class="default">$_propertyList </span><span class="keyword">= array(</span><span class="string">'id' </span><span class="keyword">=&gt; </span><span class="string">'UserID'</span><span class="keyword">, </span><span class="string">'name' </span><span class="keyword">=&gt; </span><span class="string">'UserName'</span><span class="keyword">, </span><span class="string">'password' </span><span class="keyword">=&gt; </span><span class="string">'UserPassword'</span><span class="keyword">, </span><span class="string">'birthday' </span><span class="keyword">=&gt; </span><span class="string">'UserBirthday'</span><span class="keyword">);<br />    <br />    </span><span class="comment">// A method that fetches all users as an array<br />    </span><span class="keyword">public static function </span><span class="default">GetAll</span><span class="keyword">() {<br />        global </span><span class="default">$dbh</span><span class="keyword">;<br />        </span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM Users'</span><span class="keyword">;<br />        </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br />        </span><span class="default">$users </span><span class="keyword">= array();<br />        while (</span><span class="default">$user </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="default">__CLASS__</span><span class="keyword">)) {<br />            </span><span class="default">$users</span><span class="keyword">[] = </span><span class="default">$user</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$users</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// Methods that fetch a specific user<br />    </span><span class="keyword">public static function </span><span class="default">GetUserByName</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {}<br />    public static function </span><span class="default">GetUserByID</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {}<br />    <br />    </span><span class="comment">// Methods for the current user object<br />    </span><span class="keyword">public function </span><span class="default">checkPassword</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">) {return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password </span><span class="keyword">== </span><span class="default">$password</span><span class="keyword">;}<br />    public function </span><span class="default">showLink</span><span class="keyword">() {return </span><span class="string">"&lt;a href=\"user.php?i=</span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">}</span><span class="string">\"&gt;</span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">}</span><span class="string">&lt;/a&gt;"</span><span class="keyword">;}<br />}<br /><br /></span><span class="comment">// Then, you can create an instance of this class to insert a row in your table<br /></span><span class="default">$user </span><span class="keyword">= new </span><span class="default">User</span><span class="keyword">();<br /></span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">name </span><span class="keyword">= </span><span class="string">'oct1158'</span><span class="keyword">;<br /></span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">password </span><span class="keyword">= </span><span class="string">'789012'</span><span class="keyword">;<br /></span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">useFunction</span><span class="keyword">(</span><span class="string">'birthday'</span><span class="keyword">, </span><span class="string">'NOW()'</span><span class="keyword">);<br />echo </span><span class="string">'Field birthday uses MySQL Function: '</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">birthday</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />if (</span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">()) {<br />    echo </span><span class="string">'New User ID: '</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Update the row<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">password </span><span class="keyword">= </span><span class="string">'112233'</span><span class="keyword">;<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">update</span><span class="keyword">();<br />} else {<br />    echo </span><span class="string">'INSERT Failed&lt;br&gt;'</span><span class="keyword">;<br />}<br /></span><span class="comment">// Get a specific user by a query<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">'SELECT * FROM Users WHERE UserName = ?'</span><span class="keyword">;<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'admin'</span><span class="keyword">));<br /></span><span class="default">$admin_user </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="string">'User'</span><span class="keyword">);<br />echo </span><span class="string">'Admin ID is '</span><span class="keyword">, </span><span class="default">$admin_user</span><span class="keyword">-&gt;</span><span class="default">id</span><span class="keyword">, </span><span class="string">'.&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'Admin Birthday is '</span><span class="keyword">, </span><span class="default">$admin_user</span><span class="keyword">-&gt;</span><span class="default">birthday</span><span class="keyword">, </span><span class="string">'.&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Get all users by a static method of that class<br /></span><span class="default">$users </span><span class="keyword">= </span><span class="default">User</span><span class="keyword">::</span><span class="default">GetAll</span><span class="keyword">();<br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$users</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="string">', '</span><span class="keyword">, </span><span class="default">$users</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">birthday</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$users</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="string">', '</span><span class="keyword">, </span><span class="default">$users</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-&gt;</span><span class="default">birthday</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="default">$users</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-&gt;</span><span class="default">name</span><span class="keyword">, </span><span class="string">', '</span><span class="keyword">, </span><span class="default">$users</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]-&gt;</span><span class="default">birthday</span><span class="keyword">, </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br /></span><span class="comment">// Create an empty user and then delete it immediately<br /></span><span class="default">$user </span><span class="keyword">= new </span><span class="default">User</span><span class="keyword">();<br /></span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">insert</span><span class="keyword">();<br /></span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">delete</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span>The DataObject class example:<br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">DataObject </span><span class="keyword">{<br />    private </span><span class="default">$changedFields </span><span class="keyword">= array(); </span><span class="comment">// list of updated fields<br />    </span><span class="keyword">private </span><span class="default">$data </span><span class="keyword">= array(); </span><span class="comment">// original row from PDOStatement<br />    </span><span class="keyword">private </span><span class="default">$funcFields </span><span class="keyword">= array(); </span><span class="comment">// fields that use MySQL functions<br />    // The properties above are private in this class, so even if in your subclass you define some properties named the same, or you associate a property of the same name with a field in your table, they will never influence these properties.<br />    </span><span class="keyword">function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">) {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">::</span><span class="default">$_propertyList</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">])) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">::</span><span class="default">$_propertyList</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">]]; </span><span class="comment">// access fields by PHP properties<br />        </span><span class="keyword">} else {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$property</span><span class="keyword">; </span><span class="comment">// throw the default PHP error<br />        </span><span class="keyword">}<br />    }<br />    function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">::</span><span class="default">$_propertyList</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">])) {<br />            </span><span class="default">$field </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">::</span><span class="default">$_propertyList</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">];<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$field</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; </span><span class="comment">// update $data<br />            <br />            // take down changed fields<br />            </span><span class="keyword">if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">changedFields</span><span class="keyword">)) {<br />                </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">changedFields</span><span class="keyword">, </span><span class="default">$field</span><span class="keyword">);<br />            }<br />            </span><span class="default">$index </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">funcFields</span><span class="keyword">);<br />            if (</span><span class="default">$index </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />                unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">funcFields</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">funcFields </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">funcFields</span><span class="keyword">);<br />            }<br />        } else {<br />            </span><span class="comment">// For fetchObject<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$property</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; </span><span class="comment">// redirect to Array $data<br />        </span><span class="keyword">}<br />    }<br />    private function </span><span class="default">checkPrimaryKey</span><span class="keyword">() {}<br />    private function </span><span class="default">clear</span><span class="keyword">() {}<br />    public function </span><span class="default">delete</span><span class="keyword">() {}<br />    public function </span><span class="default">insert</span><span class="keyword">() {}<br />    public function </span><span class="default">update</span><span class="keyword">() {}<br />    public function </span><span class="default">useFunction</span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">, </span><span class="default">$function</span><span class="keyword">) {}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117553">  <div class="votes">
    <div id="Vu117553">
    <a href="/manual/vote-note.php?id=117553&amp;page=pdostatement.fetchobject&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117553">
    <a href="/manual/vote-note.php?id=117553&amp;page=pdostatement.fetchobject&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117553" title="54% like this...">
    2
    </div>
  </div>
  <a href="#117553" class="name">
  <strong class="user"><em>dave at davidhbrown dot us</em></strong></a><a class="genanchor" href="#117553"> &para;</a><div class="date" title="2015-06-27 03:03"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117553">
<div class="phpcode"><code><span class="html">If using a namespaced class, you must provide the fully qualified class name; fetchObject does not seem to know about any "use" statements.<br /><br />This results in a PHP Fatal error: Class 'MyClass' not found...:<br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">MyNamespace\MyClass</span><span class="keyword">;<br /></span><span class="comment">// ...<br /></span><span class="default">$o </span><span class="keyword">= </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="string">'MyClass'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>This works:<br /><span class="default">&lt;?php<br /></span><span class="keyword">use </span><span class="default">MyNamespace\MyClass</span><span class="keyword">; </span><span class="comment">//still needed for my code<br />// ...<br /></span><span class="default">$o </span><span class="keyword">= </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">fetchObject</span><span class="keyword">(</span><span class="string">'MyNamespace\\MyClass'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.fetchobject&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.fetchobject.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
