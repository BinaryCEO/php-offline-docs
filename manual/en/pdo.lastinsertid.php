<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO::lastInsertId - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.lastinsertid.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.lastinsertid.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.lastinsertid.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.intransaction.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.prepare.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.lastinsertid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.lastinsertid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.lastinsertid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.lastinsertid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.lastinsertid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.lastinsertid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.lastinsertid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.lastinsertid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.lastinsertid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.lastinsertid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.lastinsertid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the ID of the last inserted row or sequence value" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO::lastInsertId - Manual" />
<meta name="twitter:description" content="Returns the ID of the last inserted row or sequence value" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO::lastInsertId - Manual" />
<meta itemprop="description" content="Returns the ID of the last inserted row or sequence value" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the ID of the last inserted row or sequence value" />

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
        <a href="pdo.prepare.php">
          PDO::prepare &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.intransaction.php">
          &laquo; PDO::inTransaction        </a>
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
            <option value='en/pdo.lastinsertid.php' selected="selected">English</option>
            <option value='de/pdo.lastinsertid.php'>German</option>
            <option value='es/pdo.lastinsertid.php'>Spanish</option>
            <option value='fr/pdo.lastinsertid.php'>French</option>
            <option value='it/pdo.lastinsertid.php'>Italian</option>
            <option value='ja/pdo.lastinsertid.php'>Japanese</option>
            <option value='pt_BR/pdo.lastinsertid.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.lastinsertid.php'>Russian</option>
            <option value='tr/pdo.lastinsertid.php'>Turkish</option>
            <option value='uk/pdo.lastinsertid.php'>Ukrainian</option>
            <option value='zh/pdo.lastinsertid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.lastinsertid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDO::lastInsertId</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDO::lastInsertId</span> &mdash; <span class="dc-title">
   Returns the ID of the last inserted row or sequence value
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdo.lastinsertid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDO::lastInsertId</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$name</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   Returns the ID of the last inserted row, or the last value from a
   sequence object, depending on the underlying driver. For example,
   <a href="ref.pdo-pgsql.php" class="link">PDO_PGSQL</a> allows the name of any
   sequence object to be specified for the <code class="parameter">name</code> parameter.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This method may not return a meaningful or consistent result across
    different PDO drivers, because the underlying database may not even
    support the notion of auto-increment fields or sequences.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-pdo.lastinsertid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       Name of the sequence object from which the ID should be returned.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdo.lastinsertid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If a sequence name was not specified for the <code class="parameter">name</code>
   parameter, <span class="methodname"><strong>PDO::lastInsertId()</strong></span> returns a
   string representing the row ID of the last row that was inserted into
   the database.
  </p>
  <p class="para">
   If a sequence name was specified for the <code class="parameter">name</code>
   parameter, <span class="methodname"><strong>PDO::lastInsertId()</strong></span> returns a
   string representing the last value retrieved from the specified sequence
   object.
  </p>
  <p class="para">
   If the PDO driver does not support this capability,
   <span class="methodname"><strong>PDO::lastInsertId()</strong></span> triggers an
   <code class="literal">IM001</code> SQLSTATE.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdo.lastinsertid-errors">
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


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo/lastinsertid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.lastinsertid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.lastinsertid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.lastinsertid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107622">  <div class="votes">
    <div id="Vu107622">
    <a href="/manual/vote-note.php?id=107622&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107622">
    <a href="/manual/vote-note.php?id=107622&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107622" title="76% like this...">
    259
    </div>
  </div>
  <a href="#107622" class="name">
  <strong class="user"><em>spark at limao dot com dot br</em></strong></a><a class="genanchor" href="#107622"> &para;</a><div class="date" title="2012-02-22 01:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107622">
<div class="phpcode"><code><span class="html">Remember, if you use a transaction you should use lastInsertId BEFORE you commit<br />otherwise it will return 0</span></code></div>
  </div>
 </div>
  <div class="note" id="122009">  <div class="votes">
    <div id="Vu122009">
    <a href="/manual/vote-note.php?id=122009&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122009">
    <a href="/manual/vote-note.php?id=122009&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122009" title="80% like this...">
    88
    </div>
  </div>
  <a href="#122009" class="name">
  <strong class="user"><em>toinenkayt (ta at ta) [iwonderr] gmail d</em></strong></a><a class="genanchor" href="#122009"> &para;</a><div class="date" title="2017-12-11 12:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122009">
<div class="phpcode"><code><span class="html">To save time for some of you.<br /><br />When using MySQL or MariaDB while inserting multiple rows in a single query (INSERT INTO table (a,b,c) VALUES (1,2,3), (2,3,4), ...) to a table with auto_increment column, PDO::lastInsertId does NOT return the autogenerated id of the last row. Instead, the FIRST generated id is returned. This may very well be explained by taking a look at MySQL and MariaDB's documentation.<br /><br />Quotations from their respective documentations, <br /><br />MySQL:<br />"With no argument, LAST_INSERT_ID() returns a BIGINT UNSIGNED (64-bit) value representing the first automatically generated value successfully inserted for an AUTO_INCREMENT column as a result of the most recently executed INSERT statement."<br /><br />MariaDB:<br />"LAST_INSERT_ID() (no arguments) returns the first automatically generated value successfully inserted for an AUTO_INCREMENT column as a result of the most recently executed INSERT statement."<br /><br />This is clearly not what lastInsertId's own documentation states. Hopefully this will save someone from debugging the cause of id mismatch.<br /><br />tl;dr (MySQL | Mariadb) + multi row insert + PDO::lastInsertId = first autogenerated id<br /><br />Behaviour tested using MariaDB 10.2.6 32-bit, PHP 5.6.31 32-bit and mysqlnd 5.0.11 running on windows 7.</span></code></div>
  </div>
 </div>
  <div class="note" id="85129">  <div class="votes">
    <div id="Vu85129">
    <a href="/manual/vote-note.php?id=85129&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85129">
    <a href="/manual/vote-note.php?id=85129&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85129" title="63% like this...">
    74
    </div>
  </div>
  <a href="#85129" class="name">
  <strong class="user"><em>Nour</em></strong></a><a class="genanchor" href="#85129"> &para;</a><div class="date" title="2008-08-15 02:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85129">
<div class="phpcode"><code><span class="html">Beware of lastInsertId() when working with transactions in mysql. The following code returns 0 instead of the insert id.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">try {
<br />    </span><span class="default">$dbh </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'mysql:host=localhost;dbname=test'</span><span class="keyword">, </span><span class="string">'username'</span><span class="keyword">, </span><span class="string">'password'</span><span class="keyword">);
<br />
<br />    </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">"INSERT INTO test (name, email) VALUES(?,?)"</span><span class="keyword">);
<br />
<br />    try {
<br />        </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();
<br />        </span><span class="default">$tmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">( array(</span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'user@example.com'</span><span class="keyword">));
<br />        </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();
<br />        print </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">lastInsertId</span><span class="keyword">();
<br />    } catch(</span><span class="default">PDOExecption $e</span><span class="keyword">) {
<br />        </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">rollback</span><span class="keyword">();
<br />        print </span><span class="string">"Error!: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;
<br />    }
<br />} catch( </span><span class="default">PDOExecption $e </span><span class="keyword">) {
<br />    print </span><span class="string">"Error!: " </span><span class="keyword">. </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">() . </span><span class="string">"&lt;/br&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />When no exception is thrown, lastInsertId returns 0. However, if lastInsertId is called before calling commit, the right id is returned.</span></code></div>
  </div>
 </div>
  <div class="note" id="105580">  <div class="votes">
    <div id="Vu105580">
    <a href="/manual/vote-note.php?id=105580&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105580">
    <a href="/manual/vote-note.php?id=105580&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105580" title="67% like this...">
    27
    </div>
  </div>
  <a href="#105580" class="name">
  <strong class="user"><em>warezthebeef at gmail dot com</em></strong></a><a class="genanchor" href="#105580"> &para;</a><div class="date" title="2011-08-29 11:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105580">
<div class="phpcode"><code><span class="html">If you're accessing MSSQL/SQL Server 2008 R2 (or higher) from Linux via FreeTDS there's a slightly neater way of getting the last insert ID than the solution(s) outlined below.<br /><br />The specific SQL involved is outlined here:<br /><br /><a href="http://msdn.microsoft.com/en-us/library/ms177564.aspx" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/ms177564.aspx</a><br /><br />So for example, with a table containing the two columns (product_id, product_name) where product_id is a uniqueidentifier or something similar you could do the following.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Assume $dbh connection handle is already established<br /><br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"INSERT INTO product (product_name) OUTPUT INSERTED.product_id VALUES (?)"</span><span class="keyword">;<br /><br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$dbh</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(array(</span><span class="string">'widgets'</span><span class="keyword">));<br /><br /></span><span class="default">$temp </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Then $temp will contain an array like:<br /><br />Array<br />(<br />    [product_id] =&gt; E1DA1CB0-676A-4CD9-A22C-90C9D4E81914<br />)<br /><br />Just be warned that there are some issues relating to how uniqueidentifier columns are handled by PDO_DBLIB/FreeTDS depending on the TDS version you choose that have only been fixed as of PHP 5.3.7.<br /><br />Information regarding this and the patch can be found here:<br /><br /><a href="https://bugs.php.net/bug.php?id=54167" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=54167</a></span></code></div>
  </div>
 </div>
  <div class="note" id="68987">  <div class="votes">
    <div id="Vu68987">
    <a href="/manual/vote-note.php?id=68987&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68987">
    <a href="/manual/vote-note.php?id=68987&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68987" title="67% like this...">
    30
    </div>
  </div>
  <a href="#68987" class="name">
  <strong class="user"><em>dave at dtracorp dot com</em></strong></a><a class="genanchor" href="#68987"> &para;</a><div class="date" title="2006-08-18 05:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68987">
<div class="phpcode"><code><span class="html">in case anyone was wondering<br />something like<br /><br />$val = 5;<br />$sql = "REPLACE table (column) VALUES (:val)";<br />$stmt = $dbh-&gt;prepare($sql);<br />$stmt-&gt;bindParam(':val', $val, PDO::PARAM_INT);<br />$stmt-&gt;execute();<br />$lastId = $dbh-&gt;lastInsertId();<br /><br />will return the last inserted id, whether the record was replaced or simply inserted<br /><br />the REPLACE syntax, simply inserts, or deletes &gt; inserts<br />so lastInsertId() still works<br /><br />refer to <a href="http://mysql.com/doc/refman/5.0/en/replace.html" rel="nofollow" target="_blank">http://mysql.com/doc/refman/5.0/en/replace.html</a><br />for REPLACE usage</span></code></div>
  </div>
 </div>
  <div class="note" id="75200">  <div class="votes">
    <div id="Vu75200">
    <a href="/manual/vote-note.php?id=75200&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75200">
    <a href="/manual/vote-note.php?id=75200&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75200" title="68% like this...">
    12
    </div>
  </div>
  <a href="#75200" class="name">
  <strong class="user"><em>Yonatan Ben-Nes</em></strong></a><a class="genanchor" href="#75200"> &para;</a><div class="date" title="2007-05-17 09:05"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75200">
<div class="phpcode"><code><span class="html">It should be mentioned that this function DOES NOT retrieve the ID (Primary key) of the row but it's OID instead.<br /><br />So if you use one of the latest PostgreSQL versions this function won't help you unless you add OID to the table specifically when you create it.</span></code></div>
  </div>
 </div>
  <div class="note" id="102614">  <div class="votes">
    <div id="Vu102614">
    <a href="/manual/vote-note.php?id=102614&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102614">
    <a href="/manual/vote-note.php?id=102614&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102614" title="66% like this...">
    17
    </div>
  </div>
  <a href="#102614" class="name">
  <strong class="user"><em>ruben02 at hotmail dot com</em></strong></a><a class="genanchor" href="#102614"> &para;</a><div class="date" title="2011-02-24 07:48"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102614">
<div class="phpcode"><code><span class="html">I think I get a nice solution in Postgres to get the ID using the RETURNING that comes with Postgress since version 8.2. In the example below, I add to my insert clause the "returning" along with the primary key of my table, then after the execute, I do a fetch getting an array with the value of the last inserted id. 
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">public function </span><span class="default">insert</span><span class="keyword">(</span><span class="default">$employee</span><span class="keyword">){
<br />
<br />        </span><span class="default">$sqlQuery </span><span class="keyword">= </span><span class="string">"INSERT INTO employee(user_id,name,address,city) VALUES(:user_id,:name,:address,:city) RETURNING employee_id"</span><span class="keyword">;
<br />
<br />        </span><span class="default">$statement </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sqlQuery</span><span class="keyword">);
<br />
<br />        </span><span class="default">$a </span><span class="keyword">=</span><span class="string">"2002-03-11 12:01AM" </span><span class="keyword">;
<br />
<br />        </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":user_id"</span><span class="keyword">, </span><span class="default">$employee</span><span class="keyword">-&gt;</span><span class="default">getUserId</span><span class="keyword">(), </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);
<br />        </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":name"</span><span class="keyword">, </span><span class="default">$employee</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(), </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);
<br />        </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":address"</span><span class="keyword">, </span><span class="default">$employee</span><span class="keyword">-&gt;</span><span class="default">getAddress</span><span class="keyword">(), </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);
<br />        </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">":city"</span><span class="keyword">, </span><span class="default">$employee</span><span class="keyword">-&gt;</span><span class="default">getCity</span><span class="keyword">(), </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);
<br />        </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();
<br />        
<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$statement</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">FETCH_ASSOC</span><span class="keyword">);
<br />        return </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"employee_id"</span><span class="keyword">];
<br />
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126675">  <div class="votes">
    <div id="Vu126675">
    <a href="/manual/vote-note.php?id=126675&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126675">
    <a href="/manual/vote-note.php?id=126675&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126675" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126675" class="name">
  <strong class="user"><em>phpmanual at NOSPAM dot headbank dot co dot uk</em></strong></a><a class="genanchor" href="#126675"> &para;</a><div class="date" title="2021-12-10 06:27"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126675">
<div class="phpcode"><code><span class="html">MySQL/MariaDB users, be aware that although this function returns a string, leading zeroes are NOT preserved if your column has ZEROFILL property.</span></code></div>
  </div>
 </div>
  <div class="note" id="120354">  <div class="votes">
    <div id="Vu120354">
    <a href="/manual/vote-note.php?id=120354&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120354">
    <a href="/manual/vote-note.php?id=120354&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120354" title="57% like this...">
    4
    </div>
  </div>
  <a href="#120354" class="name">
  <strong class="user"><em>enclaved</em></strong></a><a class="genanchor" href="#120354"> &para;</a><div class="date" title="2016-12-20 11:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120354">
<div class="phpcode"><code><span class="html">WARNING for PostgreSQL users! In response to the comment by ed at hicklinslade dot com, who wrote:<br /><br />...<br />$last_insert_id = $objPDO-&gt;lastInsertId("$strTable_id_seq);<br /><br />This does appear to function as expected. What is a little unclear to me is whether this simply returns the current value of the sequence; if it does, this isn't a particularly reliable indicator as to the id of the record your code just inserted, especially if your site or application is especially high traffic.<br />...<br /><br />NEVER ever use lastInsertId() with PostgreSQL sequences, ESPECIALLY when your application's insert/update load is high. PostgreSQL sequences are non-transactional (a natural design feature to avoid exclusive locking which otherwise produces unacceptable performance). This means that any concurrent transaction incrementing the same sequence will render the value returned by lastInsertId() invalid with respect to the last insert by your transaction. Example:<br /><br />Transaction 1 inserts with nextval('some_seq') yielding 100;<br />Concurrent transaction 2 inserts with nextval('some_seq') yielding 101;<br />Transaction 1 calls lastInsertId(), expecting 100, BUT GETS 101.<br /><br />This PDO method is braindead for PostgreSQL, always use INSERT ... RETURNING instead. Regards.</span></code></div>
  </div>
 </div>
  <div class="note" id="110037">  <div class="votes">
    <div id="Vu110037">
    <a href="/manual/vote-note.php?id=110037&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110037">
    <a href="/manual/vote-note.php?id=110037&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110037" title="57% like this...">
    4
    </div>
  </div>
  <a href="#110037" class="name">
  <strong class="user"><em>noel dot mcavoy at gmail dot com</em></strong></a><a class="genanchor" href="#110037"> &para;</a><div class="date" title="2012-09-13 07:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110037">
<div class="phpcode"><code><span class="html">This function is now compatible with the newer MS SQL driver. <a href="http://msdn.microsoft.com/en-us/library/ff628155(v=sql.105" rel="nofollow" target="_blank">http://msdn.microsoft.com/en-us/library/ff628155(v=sql.105</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="123467">  <div class="votes">
    <div id="Vu123467">
    <a href="/manual/vote-note.php?id=123467&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123467">
    <a href="/manual/vote-note.php?id=123467&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123467" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123467" class="name">
  <strong class="user"><em>nafsinvk at gmail dot com</em></strong></a><a class="genanchor" href="#123467"> &para;</a><div class="date" title="2018-12-25 07:06"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123467">
<div class="phpcode"><code><span class="html">$dbh-&gt;commit(); <br />print $dbh-&gt;lastInsertId(); <br />The above will always return zero (0)<br />So it is important to call $dbh-&gt;lastInsertId();  before commiting transaction <br /><br />the above should be modified as <br />print $dbh-&gt;lastInsertId(); <br />$dbh-&gt;commit();</span></code></div>
  </div>
 </div>
  <div class="note" id="120618">  <div class="votes">
    <div id="Vu120618">
    <a href="/manual/vote-note.php?id=120618&amp;page=pdo.lastinsertid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120618">
    <a href="/manual/vote-note.php?id=120618&amp;page=pdo.lastinsertid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120618" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120618" class="name">
  <strong class="user"><em>timer timer five at gmail dot com</em></strong></a><a class="genanchor" href="#120618"> &para;</a><div class="date" title="2017-02-08 05:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120618">
<div class="phpcode"><code><span class="html">About the connections created through classes<br /><br />eg: db::SQL()-&gt;query();<br />then db::SQL()-&gt;lastInsertId();<br /><br />it will create a new connection and will not return the last ID inserted. it is better to include a PDO connection file (or directly the logins) and work with it to get the last ID properly.<br /><br />$db = new PDO(logins);<br />$db-&gt;query();<br />$db-&gt;lastInsertId();</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.lastinsertid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.lastinsertid.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="pdo.lastinsertid.php" title="lastInsertId">lastInsertId</a>
                        </li>
                                                <li class="">
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
