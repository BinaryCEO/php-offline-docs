<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDOStatement::rowCount - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdostatement.rowcount.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdostatement.rowcount.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.rowcount.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdostatement.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdostatement.nextrowset.php">
 <link rel="next" href="https://www.php.net/manual/en/pdostatement.setattribute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdostatement.rowcount.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdostatement.rowcount.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdostatement.rowcount.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdostatement.rowcount.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdostatement.rowcount.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdostatement.rowcount.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdostatement.rowcount.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdostatement.rowcount.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdostatement.rowcount.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdostatement.rowcount.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdostatement.rowcount.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the number of rows affected by the last SQL statement" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDOStatement::rowCount - Manual" />
<meta name="twitter:description" content="Returns the number of rows affected by the last SQL statement" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDOStatement::rowCount - Manual" />
<meta itemprop="description" content="Returns the number of rows affected by the last SQL statement" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the number of rows affected by the last SQL statement" />

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
        <a href="pdostatement.setattribute.php">
          PDOStatement::setAttribute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdostatement.nextrowset.php">
          &laquo; PDOStatement::nextRowset        </a>
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
            <option value='en/pdostatement.rowcount.php' selected="selected">English</option>
            <option value='de/pdostatement.rowcount.php'>German</option>
            <option value='es/pdostatement.rowcount.php'>Spanish</option>
            <option value='fr/pdostatement.rowcount.php'>French</option>
            <option value='it/pdostatement.rowcount.php'>Italian</option>
            <option value='ja/pdostatement.rowcount.php'>Japanese</option>
            <option value='pt_BR/pdostatement.rowcount.php'>Brazilian Portuguese</option>
            <option value='ru/pdostatement.rowcount.php'>Russian</option>
            <option value='tr/pdostatement.rowcount.php'>Turkish</option>
            <option value='uk/pdostatement.rowcount.php'>Ukrainian</option>
            <option value='zh/pdostatement.rowcount.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdostatement.rowcount" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDOStatement::rowCount</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDOStatement::rowCount</span> &mdash; <span class="dc-title">
   Returns the number of rows affected by the last SQL statement
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdostatement.rowcount-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDOStatement::rowCount</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>


  <p class="para rdfs-comment">
   <span class="methodname"><strong>PDOStatement::rowCount()</strong></span> returns the number of
   rows affected by the last DELETE, INSERT, or UPDATE statement
   executed by the corresponding <code class="literal">PDOStatement</code> object. 
  </p>
  <p class="para">
   For statements that produce result sets, such as <code class="literal">SELECT</code>,
   the behavior is undefined and can be different for each driver.
   Some databases may return the number of rows produced by that statement
   (e.g. MySQL in buffered mode), but this
   behaviour is not guaranteed for all databases and should not be relied
   on for portable applications.
  </p>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <p class="para">
      This method returns &quot;0&quot; (zero) with PostgreSQL driver when setting the
      <strong><code><a href="pdo.constants.php#pdo.constants.attr-cursor">PDO::ATTR_CURSOR</a></code></strong> statement attribute to
      <strong><code><a href="pdo.constants.php#pdo.constants.cursor-scroll">PDO::CURSOR_SCROLL</a></code></strong>.
     </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-pdostatement.rowcount-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
  <div class="refsect1 returnvalues" id="refsect1-pdostatement.rowcount-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of rows.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdostatement.rowcount-errors">
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

 
 <div class="refsect1 examples" id="refsect1-pdostatement.rowcount-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1175">
    <p><strong>Example #1 Return the number of deleted rows</strong></p>
    <div class="example-contents"><p>
     <span class="methodname"><strong>PDOStatement::rowCount()</strong></span> returns the number of
     rows affected by a DELETE, INSERT, or UPDATE statement.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Delete all rows from the FRUIT table */<br /></span><span style="color: #0000BB">$del </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">'DELETE FROM fruit'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$del</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">execute</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Return number of rows that were deleted */<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"Return number of rows that were deleted:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">$del</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rowCount</span><span style="color: #007700">();<br />print </span><span style="color: #DD0000">"Deleted </span><span style="color: #0000BB">$count</span><span style="color: #DD0000"> rows.\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Return number of rows that were deleted:
Deleted 9 rows.</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-1176">
    <p><strong>Example #2 Counting rows returned by a SELECT statement</strong></p>
    <div class="example-contents"><p>
     For most databases, <span class="methodname"><strong>PDOStatement::rowCount()</strong></span> does not
     return the number of rows affected by a SELECT statement. Instead, use
     <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query()</a></span> to issue a SELECT COUNT(*) statement
     with the same predicates as your intended SELECT statement, then use
     <span class="methodname"><a href="pdostatement.fetchcolumn.php" class="methodname">PDOStatement::fetchColumn()</a></span> to retrieve the number
     of matching rows. 
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT COUNT(*) FROM fruit WHERE calories &gt; 100"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$res </span><span style="color: #007700">= </span><span style="color: #0000BB">$conn</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$sql</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">$res</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">fetchColumn</span><span style="color: #007700">();<br /><br />print </span><span style="color: #DD0000">"There are " </span><span style="color: #007700">.  </span><span style="color: #0000BB">$count </span><span style="color: #007700">. </span><span style="color: #DD0000">" matching records."</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">There are 2 matching records.</pre>
</div>
    </div>
   </div>

  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-pdostatement.rowcount-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdostatement.columncount.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::columnCount()</a> - Returns the number of columns in the result set</span></li>
    <li><span class="methodname"><a href="pdostatement.fetchcolumn.php" class="methodname" rel="rdfs-seeAlso">PDOStatement::fetchColumn()</a> - Returns a single column from the next row of a result set</span></li>
    <li><span class="methodname"><a href="pdo.query.php" class="methodname" rel="rdfs-seeAlso">PDO::query()</a> - Prepares and executes an SQL statement without placeholders</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdostatement/rowcount.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdostatement.rowcount%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdostatement.rowcount&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.rowcount.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104930">  <div class="votes">
    <div id="Vu104930">
    <a href="/manual/vote-note.php?id=104930&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104930">
    <a href="/manual/vote-note.php?id=104930&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104930" title="75% like this...">
    89
    </div>
  </div>
  <a href="#104930" class="name">
  <strong class="user"><em>Ome Ko</em></strong></a><a class="genanchor" href="#104930"> &para;</a><div class="date" title="2011-07-16 12:08"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104930">
<div class="phpcode"><code><span class="html">When updating a Mysql table with identical values nothing's really affected so rowCount will return 0. As Mr. Perl below noted this is not always preferred behaviour and you can change it yourself since PHP 5.3.<br /><br />Just create your PDO object with <br />&lt;? php<br />$p = new PDO($dsn, $u, $p, array(PDO::MYSQL_ATTR_FOUND_ROWS =&gt; true));<br />?&gt;<br />and rowCount() will tell you how many rows your update-query actually found/matched.</span></code></div>
  </div>
 </div>
  <div class="note" id="78338">  <div class="votes">
    <div id="Vu78338">
    <a href="/manual/vote-note.php?id=78338&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78338">
    <a href="/manual/vote-note.php?id=78338&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78338" title="66% like this...">
    41
    </div>
  </div>
  <a href="#78338" class="name">
  <strong class="user"><em>Matt</em></strong></a><a class="genanchor" href="#78338"> &para;</a><div class="date" title="2007-10-07 09:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78338">
<div class="phpcode"><code><span class="html">Great, while using MySQL5, the only way to get the number of rows after doing a PDO SELECT query is to either execute a separate SELECT COUNT(*) query (or to do count($stmt-&gt;fetchAll()), which seems like a ridiculous waste of overhead and programming time.<br /><br />Another gripe I have about PDO is its inability to get the value of output parameters from stored procedures in some DBMSs, such as SQL Server.<br /><br />I'm not so sure I'm diggin' PDO yet.</span></code></div>
  </div>
 </div>
  <div class="note" id="109891">  <div class="votes">
    <div id="Vu109891">
    <a href="/manual/vote-note.php?id=109891&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109891">
    <a href="/manual/vote-note.php?id=109891&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109891" title="65% like this...">
    32
    </div>
  </div>
  <a href="#109891" class="name">
  <strong class="user"><em>Daniel Karp</em></strong></a><a class="genanchor" href="#109891"> &para;</a><div class="date" title="2012-08-31 12:09"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109891">
<div class="phpcode"><code><span class="html">Note that an INSERT ... ON DUPLICATE KEY UPDATE statement is not an INSERT statement, rowCount won't return the number or rows inserted or updated for such a statement.  For MySQL, it will return 1 if the row is inserted, and 2 if it is updated, but that may not apply to other databases.</span></code></div>
  </div>
 </div>
  <div class="note" id="107055">  <div class="votes">
    <div id="Vu107055">
    <a href="/manual/vote-note.php?id=107055&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107055">
    <a href="/manual/vote-note.php?id=107055&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107055" title="63% like this...">
    26
    </div>
  </div>
  <a href="#107055" class="name">
  <strong class="user"><em>leandro at marquesini dot com</em></strong></a><a class="genanchor" href="#107055"> &para;</a><div class="date" title="2012-01-03 10:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107055">
<div class="phpcode"><code><span class="html">To display information only when the query is not empty, I do something like this:<br /><br /><span class="default">&lt;?php<br />    $sql </span><span class="keyword">= </span><span class="string">'SELECT model FROM cars'</span><span class="keyword">;<br />    </span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br />    </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />    <br />    if (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">()) {<br />        do {<br />            echo </span><span class="default">$data</span><span class="keyword">[</span><span class="string">'model'</span><span class="keyword">] . </span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br />        } while (</span><span class="default">$data </span><span class="keyword">= </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">fetch</span><span class="keyword">());<br />    } else {<br />        echo </span><span class="string">'Empty Query'</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83586">  <div class="votes">
    <div id="Vu83586">
    <a href="/manual/vote-note.php?id=83586&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83586">
    <a href="/manual/vote-note.php?id=83586&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83586" title="64% like this...">
    18
    </div>
  </div>
  <a href="#83586" class="name">
  <strong class="user"><em>gunnrosebutpeace at gmail dot com</em></strong></a><a class="genanchor" href="#83586"> &para;</a><div class="date" title="2008-06-03 03:19"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83586">
<div class="phpcode"><code><span class="html">It'd better to use SQL_CALC_FOUND_ROWS, if you only use MySQL. It has many advantages as you could retrieve only part of result set (via LIMIT) but still get the total row count.
<br />code:
<br /><span class="default">&lt;?php
<br />$db </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="default">DSN</span><span class="keyword">...);
<br /></span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(array(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">MYSQL_USE_BUFFERED_QUERY</span><span class="keyword">=&gt;</span><span class="default">TRUE</span><span class="keyword">));
<br /></span><span class="default">$rs  </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'SELECT SQL_CALC_FOUND_ROWS * FROM table LIMIT 5,15'</span><span class="keyword">);
<br /></span><span class="default">$rs1 </span><span class="keyword">= </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">'SELECT FOUND_ROWS()'</span><span class="keyword">);
<br /></span><span class="default">$rowCount </span><span class="keyword">= (int) </span><span class="default">$rs1</span><span class="keyword">-&gt;</span><span class="default">fetchColumn</span><span class="keyword">();
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113608">  <div class="votes">
    <div id="Vu113608">
    <a href="/manual/vote-note.php?id=113608&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113608">
    <a href="/manual/vote-note.php?id=113608&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113608" title="59% like this...">
    11
    </div>
  </div>
  <a href="#113608" class="name">
  <strong class="user"><em>sERGE-01</em></strong></a><a class="genanchor" href="#113608"> &para;</a><div class="date" title="2013-11-04 12:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113608">
<div class="phpcode"><code><span class="html">In some drivers rowCount() only works when using the prepare() with PDO::CURSOR_SCROLL<br />So, you can modify PDO class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">myPDO </span><span class="keyword">extends </span><span class="default">PDO <br /></span><span class="keyword">{<br />    function </span><span class="default">query</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">$query </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">)<br />            return </span><span class="default">false</span><span class="keyword">;<br />            <br />        if(</span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, array(</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_CURSOR </span><span class="keyword">=&gt; </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">CURSOR_SCROLL</span><span class="keyword">)))<br />        {<br />            </span><span class="default">$res </span><span class="keyword">= (</span><span class="default">$values</span><span class="keyword">) ? </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">) : </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />            if(!</span><span class="default">$res</span><span class="keyword">)<br />                return </span><span class="default">false</span><span class="keyword">;<br />        }            <br />        return </span><span class="default">$sth</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Now let's test (i using php 5.2.9-2):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">TestRowCount</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">)<br />{<br />    </span><span class="default">$pdh </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">); <br />    </span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$pdh</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SELECT * FROM sys.tables"</span><span class="keyword">);<br />    print </span><span class="string">"rowCount() Standart: "</span><span class="keyword">.</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">().</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />    <br />    </span><span class="default">$pdh </span><span class="keyword">= new </span><span class="default">myPDO</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">); <br />    </span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$pdh</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"SELECT * FROM sys.tables"</span><span class="keyword">);<br />    print </span><span class="string">"rowCount() New: "</span><span class="keyword">.</span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">().</span><span class="string">"&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />    <br />    </span><span class="default">$pdh</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;    <br />}<br /><br /></span><span class="default">$db_server </span><span class="keyword">= </span><span class="string">"xxx"</span><span class="keyword">; <br /></span><span class="default">$db_name </span><span class="keyword">= </span><span class="string">"xxx"</span><span class="keyword">;<br /></span><span class="default">$db_user </span><span class="keyword">= </span><span class="string">"xxx"</span><span class="keyword">;<br /></span><span class="default">$db_pass </span><span class="keyword">= </span><span class="string">"xxx"</span><span class="keyword">;<br /><br />print </span><span class="string">"PDO_MSSQL"</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">TestRowCount</span><span class="keyword">(</span><span class="string">"mssql:host=</span><span class="default">$db_server</span><span class="string">;dbname=</span><span class="default">$db_name</span><span class="string">"</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">);<br /><br />print </span><span class="string">"MSSQL throw PDO_ODBC"</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">TestRowCount</span><span class="keyword">(</span><span class="string">"odbc:DRIVER={SQL Server};SERVER=</span><span class="default">$db_server</span><span class="string">;DATABASE=</span><span class="default">$db_name</span><span class="string">;"</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">); <br /><br />print </span><span class="string">"MS SQL driver 2.0"</span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">TestRowCount</span><span class="keyword">(</span><span class="string">"sqlsrv:server=</span><span class="default">$db_server</span><span class="string">;Database=</span><span class="default">$db_name</span><span class="string">"</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />My results:<br />-------------------<br />PDO_MSSQL<br />rowCount() Standart: 0<br />rowCount() New: 0<br /><br />MSSQL throw PDO_ODBC<br />rowCount() Standart: -1<br />rowCount() New: 53<br /><br />MS SQL driver 2.0<br />rowCount() Standart: -1<br />rowCount() New: 53<br />-------------------<br /><br />With myPDO class you can use prepared queries like:<br /><span class="default">&lt;?php<br />    $pdh </span><span class="keyword">= new </span><span class="default">myPDO</span><span class="keyword">(</span><span class="default">$dsn</span><span class="keyword">, </span><span class="default">$db_user</span><span class="keyword">, </span><span class="default">$db_pass</span><span class="keyword">);<br />    </span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$pdh</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"select * from data where id&gt;? or name like ?"</span><span class="keyword">, array(</span><span class="default">100</span><span class="keyword">, </span><span class="string">"A%"</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122854">  <div class="votes">
    <div id="Vu122854">
    <a href="/manual/vote-note.php?id=122854&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122854">
    <a href="/manual/vote-note.php?id=122854&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122854" title="60% like this...">
    5
    </div>
  </div>
  <a href="#122854" class="name">
  <strong class="user"><em>xmt at abv dot bg</em></strong></a><a class="genanchor" href="#122854"> &para;</a><div class="date" title="2018-06-19 10:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122854">
<div class="phpcode"><code><span class="html">Note: <br />=====<br />On Mysql SELECT statement with Buffered queries, rowCount will return the correct count of the items in the result set.<br />BUT if your query is unbuffered, than it will return 0. No matter if all the rows are retrieved from the result set or not (while in mysqli this behaviour is different - you will still get the number of items in the result set with unbuffered queries, but only when you retrieve all the rows from the set).<br /><br />Example:<br />========<br />$conn = new PDO("mysql:host=127.0.0.1;dbname=db", 'root', 'root');<br /><br />// use unbuffered query<br />$conn-&gt;setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);<br /><br />$stmt = $conn-&gt;query("select * from towns");<br /><br />echo $stmt-&gt;rowCount(); // will always return 0</span></code></div>
  </div>
 </div>
  <div class="note" id="113133">  <div class="votes">
    <div id="Vu113133">
    <a href="/manual/vote-note.php?id=113133&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113133">
    <a href="/manual/vote-note.php?id=113133&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113133" title="57% like this...">
    8
    </div>
  </div>
  <a href="#113133" class="name">
  <strong class="user"><em>user at nospam dot example dot com</em></strong></a><a class="genanchor" href="#113133"> &para;</a><div class="date" title="2013-09-03 06:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113133">
<div class="phpcode"><code><span class="html">MySQL does not seem to return anything in rowCount for a select statement, but you can easily and efficiently get the row count as follows:<br /><br />class db extends PDO {<br />  public function last_row_count() {<br />    return $this-&gt;query("SELECT FOUND_ROWS()")-&gt;fetchColumn();<br />  }<br />}<br /><br />$myDb = new db('mysql:host=myhost;dbname=mydb', 'login', 'password' );<br /><br />Then, after running your query:<br /><br />if ( $myDb-&gt;last_row_count() == 0 ) {<br />  echo "Do something!";<br />  }</span></code></div>
  </div>
 </div>
  <div class="note" id="116920">  <div class="votes">
    <div id="Vu116920">
    <a href="/manual/vote-note.php?id=116920&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116920">
    <a href="/manual/vote-note.php?id=116920&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116920" title="55% like this...">
    3
    </div>
  </div>
  <a href="#116920" class="name">
  <strong class="user"><em>info at buylikesandviews dot com</em></strong></a><a class="genanchor" href="#116920"> &para;</a><div class="date" title="2015-03-21 09:04"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116920">
<div class="phpcode"><code><span class="html">every good work
<br />If you use "INSERT INTO ... ON DUPLICATE KEY UPDATE" syntax, mysql_affected_rows() will return you 2 if the UPDATE was made (just as it does with the "REPLACE INTO" syntax) and 1 if the INSERT was.
<br />
<br />So if you use one SQL request to insert several rows at a time, and some are inserted, some are just updated, you won't get the real count..</span></code></div>
  </div>
 </div>
  <div class="note" id="118456">  <div class="votes">
    <div id="Vu118456">
    <a href="/manual/vote-note.php?id=118456&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118456">
    <a href="/manual/vote-note.php?id=118456&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118456" title="51% like this...">
    1
    </div>
  </div>
  <a href="#118456" class="name">
  <strong class="user"><em>lsrzj at facebook</em></strong></a><a class="genanchor" href="#118456"> &para;</a><div class="date" title="2015-12-09 02:03"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118456">
<div class="phpcode"><code><span class="html">Well, I woundn't do as suggested querying twice the database to get the count and then get the data I want. It would be simpler and would give better performance to query once and retrieve both, record count and the data itself<br /><br /><span class="default">&lt;?php<br />$sql </span><span class="keyword">= </span><span class="string">"SELECT * FROM fruit WHERE calories &gt; :calories"</span><span class="keyword">;<br /></span><span class="default">$sth </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">bindParam</span><span class="keyword">(</span><span class="string">':calories'</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />if (</span><span class="default">$res</span><span class="keyword">) {<br />    </span><span class="default">$record </span><span class="keyword">= </span><span class="default">$sth</span><span class="keyword">-&gt;</span><span class="default">fetchAll</span><span class="keyword">();<br />    </span><span class="comment">/* Check the number of rows that match the SELECT statement */<br />    </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$record</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />        foreach (</span><span class="default">$record </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">) {<br />            print </span><span class="string">"Name: " </span><span class="keyword">.  </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'NAME'</span><span class="keyword">] . </span><span class="string">"\n"</span><span class="keyword">;<br />         }<br />    }<br />    </span><span class="comment">/* No rows matched -- do something else */<br />  </span><span class="keyword">else {<br />      print </span><span class="string">"No rows matched the query."</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123744">  <div class="votes">
    <div id="Vu123744">
    <a href="/manual/vote-note.php?id=123744&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123744">
    <a href="/manual/vote-note.php?id=123744&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123744" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123744" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#123744"> &para;</a><div class="date" title="2019-04-05 12:42"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123744">
<div class="phpcode"><code><span class="html">Please note another interesting behavior with PostgreSQL.<br /><br />If you try to use rowCount() after a statement has been prepared using the PDO::ATTR_CURSOR set to PDO::CURSOR_SCROLL you will always get zero (0).<br /><br />That's because PG doesn't have any way to tell how many rows are in the cursor until it did iterate through all rows.<br /><br /><span class="default">&lt;?php<br />$st </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'SELECT NOW();'</span><span class="keyword">, [</span><span class="default">PDO</span><span class="keyword">::</span><span class="default">ATTR_CURSOR </span><span class="keyword">=&gt; </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">CURSOR_SCROLL</span><span class="keyword">]);<br /></span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$st</span><span class="keyword">-&gt;</span><span class="default">rowCount</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />Will return "0", whereas the same statement without the CURSOR_SCROLL attribute, will correctly return 1.<br /><br />Please see this bug report <a href="https://bugs.php.net/bug.php?id=77855" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=77855</a> for details.<br /><br />This documentation should be updated shortly to reflect that issue.</span></code></div>
  </div>
 </div>
  <div class="note" id="87109">  <div class="votes">
    <div id="Vu87109">
    <a href="/manual/vote-note.php?id=87109&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87109">
    <a href="/manual/vote-note.php?id=87109&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87109" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#87109" class="name">
  <strong class="user"><em>e dot sand at elisand dot com</em></strong></a><a class="genanchor" href="#87109"> &para;</a><div class="date" title="2008-11-19 11:30"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87109">
<div class="phpcode"><code><span class="html">As of SQLite 3.x, the SQLite API itself changed and now all queries are implemented using "statements".  Because of this, there is no way for PDO to know the rowCount of a SELECT result because the SQLite API itself doesn't offer this ability.<br /><br />As a workaround, I created my own rowCount() function - it's a bit of a hack and hasn't been fully tested yet (I don't know how it will work when using JOINs in SELECTs, etc...), but at least alleviates the necessity for SELECT COUNT(*)'s everywhere in your code.<br /><br />I would have preferred if it were possible to overload the rowCount() function from PDOStatement, but I don't think it's possible (or I don't know how to do it).  There's also potential room for a bit more security ensuring that $queryString is wiped clean after other query()s so that you don't get a bad result, etc...<br /><br />The actual code should be posted in the above/below post (max post limits, argh!).  If others wish to extend/perfect this method, please keep me posted with an email as to what you've done.</span></code></div>
  </div>
 </div>
  <div class="note" id="118362">  <div class="votes">
    <div id="Vu118362">
    <a href="/manual/vote-note.php?id=118362&amp;page=pdostatement.rowcount&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118362">
    <a href="/manual/vote-note.php?id=118362&amp;page=pdostatement.rowcount&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118362" title="38% like this...">
    -5
    </div>
  </div>
  <a href="#118362" class="name">
  <strong class="user"><em>@rhavendc (twitter)</em></strong></a><a class="genanchor" href="#118362"> &para;</a><div class="date" title="2015-11-23 08:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118362">
<div class="phpcode"><code><span class="html">We're having problem with these PDOStatement::fetchColumn() and PDOStatement::rowCount(). I don't know if we have alike case to others or this is just a problem in our coding. In local, the rowCount() is not giving the correct number of rows but it is working fine when uploaded to our hosting site.. while the fetchColumn() is the reverse. The fetchColumn() is working fine in local but not anymore when uploaded. I don't know what is really going on with that but I think rowCount() is the best and the others are optional to use.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdostatement.rowcount&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdostatement.rowcount.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
