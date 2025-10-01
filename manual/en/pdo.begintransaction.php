<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO::beginTransaction - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.begintransaction.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.begintransaction.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.begintransaction.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.commit.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.begintransaction.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.begintransaction.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.begintransaction.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.begintransaction.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.begintransaction.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.begintransaction.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.begintransaction.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.begintransaction.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.begintransaction.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.begintransaction.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.begintransaction.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Initiates a transaction" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO::beginTransaction - Manual" />
<meta name="twitter:description" content="Initiates a transaction" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO::beginTransaction - Manual" />
<meta itemprop="description" content="Initiates a transaction" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Initiates a transaction" />

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
        <a href="pdo.commit.php">
          PDO::commit &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.pdo.php">
          &laquo; PDO        </a>
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
            <option value='en/pdo.begintransaction.php' selected="selected">English</option>
            <option value='de/pdo.begintransaction.php'>German</option>
            <option value='es/pdo.begintransaction.php'>Spanish</option>
            <option value='fr/pdo.begintransaction.php'>French</option>
            <option value='it/pdo.begintransaction.php'>Italian</option>
            <option value='ja/pdo.begintransaction.php'>Japanese</option>
            <option value='pt_BR/pdo.begintransaction.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.begintransaction.php'>Russian</option>
            <option value='tr/pdo.begintransaction.php'>Turkish</option>
            <option value='uk/pdo.begintransaction.php'>Ukrainian</option>
            <option value='zh/pdo.begintransaction.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.begintransaction" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDO::beginTransaction</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDO::beginTransaction</span> &mdash; <span class="dc-title">
   Initiates a transaction
  </span></p>

 </div>

 <div class="refsect1 description" id="refsect1-pdo.begintransaction-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDO::beginTransaction</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Turns off autocommit mode.  While autocommit mode is turned off, changes
   made to the database via the PDO object instance are not committed until
   you end the transaction by calling <span class="methodname"><a href="pdo.commit.php" class="methodname">PDO::commit()</a></span>.
   Calling <span class="methodname"><a href="pdo.rollback.php" class="methodname">PDO::rollBack()</a></span> will roll back all changes to
   the database and return the connection to autocommit mode.
  </p>
  <p class="para">
   Some databases, including MySQL, automatically issue an implicit
   COMMIT when a database definition language (DDL) statement such as
   DROP TABLE or CREATE TABLE is issued within a transaction. The implicit
   COMMIT will prevent you from rolling back any other changes within the
   transaction boundary.
  </p>

 </div>


 <div class="refsect1 parameters" id="refsect1-pdo.begintransaction-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-pdo.begintransaction-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-pdo.begintransaction-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.pdoexception.php" class="classname">PDOException</a></span> if there is already a transaction started or the driver does not support transactions.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">An exception is raised even when the <strong><code><a href="pdo.constants.php#pdo.constants.attr-errmode">PDO::ATTR_ERRMODE</a></code></strong> attribute is not <strong><code><a href="pdo.constants.php#pdo.constants.errmode-exception">PDO::ERRMODE_EXCEPTION</a></code></strong>.</span></p></blockquote>
 </div>


 <div class="refsect1 examples" id="refsect1-pdo.begintransaction-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1128"><p><strong>Example #1 Roll back a transaction</strong></p>
    <div class="example-contents"><p>
     The following example begins a transaction and issues two statements
     that modify the database before rolling back the changes. On MySQL,
     however, the DROP TABLE statement automatically commits the
     transaction so that none of the changes in the transaction are rolled
     back.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Begin a transaction, turning off autocommit */<br /></span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">beginTransaction</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Change the database schema and data */<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"DROP TABLE fruit"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sth </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"UPDATE dessert<br />    SET name = 'hamburger'"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Recognize mistake and roll back changes */<br /></span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">rollBack</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">/* Database connection is now back in autocommit mode */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-pdo.begintransaction-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.commit.php" class="methodname" rel="rdfs-seeAlso">PDO::commit()</a> - Commits a transaction</span></li>
    <li><span class="methodname"><a href="pdo.rollback.php" class="methodname" rel="rdfs-seeAlso">PDO::rollBack()</a> - Rolls back a transaction</span></li>
    <li><a href="pdo.transactions.php" class="link">Transactions and auto-commit</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo/begintransaction.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.begintransaction%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.begintransaction&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.begintransaction.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116669">  <div class="votes">
    <div id="Vu116669">
    <a href="/manual/vote-note.php?id=116669&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116669">
    <a href="/manual/vote-note.php?id=116669&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116669" title="66% like this...">
    55
    </div>
  </div>
  <a href="#116669" class="name">
  <strong class="user"><em>steve at fancyguy dot com</em></strong></a><a class="genanchor" href="#116669"> &para;</a><div class="date" title="2015-02-08 08:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116669">
<div class="phpcode"><code><span class="html">The nested transaction example here is great, but it's missing a key piece of the puzzle.  Commits will commit everything, I only wanted commits to actually commit when the outermost commit has been completed.  This can be done in InnoDB with savepoints.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Database </span><span class="keyword">extends </span><span class="default">PDO<br /></span><span class="keyword">{<br /><br />    protected </span><span class="default">$transactionCount </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    public function </span><span class="default">beginTransaction</span><span class="keyword">()<br />    {<br />        if (!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">++) {<br />            return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">beginTransaction</span><span class="keyword">();<br />        }<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">'SAVEPOINT trans'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">);<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">commit</span><span class="keyword">()<br />    {<br />        if (!--</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">) {<br />            return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">commit</span><span class="keyword">();<br />        }<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">rollback</span><span class="keyword">()<br />    {<br />        if (--</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">'ROLLBACK TO trans'</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">);<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />        return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">rollback</span><span class="keyword">();<br />    }<br />    <br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109753">  <div class="votes">
    <div id="Vu109753">
    <a href="/manual/vote-note.php?id=109753&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109753">
    <a href="/manual/vote-note.php?id=109753&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109753" title="63% like this...">
    31
    </div>
  </div>
  <a href="#109753" class="name">
  <strong class="user"><em>bitluni</em></strong></a><a class="genanchor" href="#109753"> &para;</a><div class="date" title="2012-08-16 09:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109753">
<div class="phpcode"><code><span class="html">You can generate problems with nested beginTransaction and commit calls.
<br />example:
<br />
<br />beginTransaction()
<br />do imprortant stuff
<br />call method
<br />    beginTransaction()
<br />    basic stuff 1
<br />    basic stuff 2
<br />    commit()
<br />do most important stuff
<br />commit()
<br />
<br />Won't work and is dangerous since you could close your transaction too early with the nested commit().
<br />
<br />There is no need to mess you code and pass like a bool which indicate if transaction is already running. You could just overload the beginTransaction() and commit() in your PDO wrapper like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Database </span><span class="keyword">extends \</span><span class="default">\PDO
<br /></span><span class="keyword">{
<br />    protected </span><span class="default">$transactionCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    function </span><span class="default">beginTransaction</span><span class="keyword">()
<br />    {
<br />        if(!</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">++)
<br />            return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">beginTransaction</span><span class="keyword">();
<br />       return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">commit</span><span class="keyword">()
<br />    {
<br />       if(!--</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter</span><span class="keyword">)
<br />           return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">commit</span><span class="keyword">();
<br />       return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">rollback</span><span class="keyword">()
<br />    {
<br />        if(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />            return </span><span class="default">parent</span><span class="keyword">::</span><span class="default">rollback</span><span class="keyword">();
<br />        }
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">transactionCounter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br /></span><span class="comment">//...
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90239">  <div class="votes">
    <div id="Vu90239">
    <a href="/manual/vote-note.php?id=90239&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90239">
    <a href="/manual/vote-note.php?id=90239&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90239" title="70% like this...">
    12
    </div>
  </div>
  <a href="#90239" class="name">
  <strong class="user"><em>rjohnson at intepro dot us</em></strong></a><a class="genanchor" href="#90239"> &para;</a><div class="date" title="2009-04-11 02:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90239">
<div class="phpcode"><code><span class="html">If you are using PDO::SQLITE and need to support a high level of concurrency with locking, try preparing your statements prior to calling beginTransaction() and you may also need to call closeCursor() on SELECT statements to prevent the driver from thinking that there are open transactions.<br /><br />Here's an example (Windows, PHP version 5.2.8).  We test this by opening 2 browser tabs to this script and running them at the same time.  If we put the beginTransaction before the prepare, the second browser tab would hit the catch block and the commit would throw another PDOException indicating that transactions were still open.<br /><br /><span class="default">&lt;?php<br />$conn </span><span class="keyword">= new </span><span class="default">PDO</span><span class="keyword">(</span><span class="string">'sqlite:C:\path\to\file.sqlite'</span><span class="keyword">);<br /></span><span class="default">$stmt </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT INTO my_table(my_id, my_value) VALUES(?, ?)'</span><span class="keyword">);<br /></span><span class="default">$waiting </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// Set a loop condition to test for<br /></span><span class="keyword">while(</span><span class="default">$waiting</span><span class="keyword">) {<br />    try {<br />        </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_INT</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">bindValue</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="string">'TEST'</span><span class="keyword">, </span><span class="default">PDO</span><span class="keyword">::</span><span class="default">PARAM_STR</span><span class="keyword">);<br />            </span><span class="default">$stmt</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        }<br />        </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();<br />        </span><span class="default">$waiting </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    } catch(</span><span class="default">PDOException $e</span><span class="keyword">) {<br />        if(</span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">(), </span><span class="string">'DATABASE IS LOCKED'</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="comment">// This should be specific to SQLite, sleep for 0.25 seconds<br />            // and try again.  We do have to commit the open transaction first though<br />            </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();<br />            </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">250000</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">rollBack</span><span class="keyword">();<br />            throw </span><span class="default">$e</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119120">  <div class="votes">
    <div id="Vu119120">
    <a href="/manual/vote-note.php?id=119120&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119120">
    <a href="/manual/vote-note.php?id=119120&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119120" title="65% like this...">
    12
    </div>
  </div>
  <a href="#119120" class="name">
  <strong class="user"><em>kesler dot alwin at gmail dot com</em></strong></a><a class="genanchor" href="#119120"> &para;</a><div class="date" title="2016-04-05 01:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119120">
<div class="phpcode"><code><span class="html">please fix in answer #116669:<br /><br />    $this-&gt;exec('ROLLBACK TO trans'.$this-&gt;transactionCounter + 1);<br /><br />with<br /><br />    $this-&gt;exec('ROLLBACK TO trans'.($this-&gt;transactionCounter + 1));</span></code></div>
  </div>
 </div>
  <div class="note" id="81022">  <div class="votes">
    <div id="Vu81022">
    <a href="/manual/vote-note.php?id=81022&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81022">
    <a href="/manual/vote-note.php?id=81022&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81022" title="65% like this...">
    13
    </div>
  </div>
  <a href="#81022" class="name">
  <strong class="user"><em>drm at melp dot nl</em></strong></a><a class="genanchor" href="#81022"> &para;</a><div class="date" title="2008-02-11 06:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81022">
<div class="phpcode"><code><span class="html">In response to "Anonymous / 20-Dec-2007 03:04"<br /><br />You could also extend the PDO class and hold a private flag to check if a transaction is already started.<br /><br />class MyPDO extends PDO {<br />   protected $hasActiveTransaction = false;<br /><br />   function beginTransaction () {<br />      if ( $this-&gt;hasActiveTransaction ) {<br />         return false;<br />      } else {<br />         $this-&gt;hasActiveTransaction = parent::beginTransaction ();<br />         return $this-&gt;hasActiveTransaction;<br />      }<br />   }<br /><br />   function commit () {<br />      parent::commit ();<br />      $this-&gt;hasActiveTransaction = false;<br />   }<br /><br />   function rollback () {<br />      parent::rollback ();<br />      $this-&gt;hasActiveTransaction = false;<br />   }<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="98309">  <div class="votes">
    <div id="Vu98309">
    <a href="/manual/vote-note.php?id=98309&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98309">
    <a href="/manual/vote-note.php?id=98309&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98309" title="63% like this...">
    8
    </div>
  </div>
  <a href="#98309" class="name">
  <strong class="user"><em>ludwig dot green at gmail dot com</em></strong></a><a class="genanchor" href="#98309"> &para;</a><div class="date" title="2010-06-08 09:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98309">
<div class="phpcode"><code><span class="html">be aware that you also can not use TRUNCATE TABLE as this statement will trigger a commit just like CREATE TABLE or DROP TABLE<br /><br />it is best to only use SELECT, UPDATE and DELETE within a transaction, all other statements may cause commits thus breaking the atomicity of your transactions and their ability to rollback<br /><br />obviously you can use DELETE FROM &lt;table&gt; instead of TRUNCATE TABLE but be aware that there are differences between both statements, for example TRUNCATE resets the auto_increment value while DELETE does not.</span></code></div>
  </div>
 </div>
  <div class="note" id="126436">  <div class="votes">
    <div id="Vu126436">
    <a href="/manual/vote-note.php?id=126436&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126436">
    <a href="/manual/vote-note.php?id=126436&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126436" title="63% like this...">
    3
    </div>
  </div>
  <a href="#126436" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#126436"> &para;</a><div class="date" title="2021-09-18 12:34"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126436">
<div class="phpcode"><code><span class="html">A way to use transaction and prepared statement to speed-up bulk INSERTs :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ...<br /><br /></span><span class="default">$insert </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">prepare</span><span class="keyword">(</span><span class="string">'INSERT INTO table (c1, c2, c3) VALUES (?, ?, ?)'</span><span class="keyword">);<br /></span><span class="default">$bulk </span><span class="keyword">= </span><span class="default">3_000</span><span class="keyword">; </span><span class="comment">// To adjust according to your data/system<br /></span><span class="default">$rows </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();<br />while (</span><span class="default">$entry </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />    </span><span class="default">$insert</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">(</span><span class="default">$entry</span><span class="keyword">);<br />    if (++</span><span class="default">$rows </span><span class="keyword">% </span><span class="default">$bulk </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();<br />        </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();<br />    }<br />}<br />if (</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">inTransaction</span><span class="keyword">()) { </span><span class="comment">// Remaining rows insertion<br />    </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">();<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119975">  <div class="votes">
    <div id="Vu119975">
    <a href="/manual/vote-note.php?id=119975&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119975">
    <a href="/manual/vote-note.php?id=119975&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119975" title="63% like this...">
    3
    </div>
  </div>
  <a href="#119975" class="name">
  <strong class="user"><em>cristian at crishk dot com</em></strong></a><a class="genanchor" href="#119975"> &para;</a><div class="date" title="2016-10-01 10:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119975">
<div class="phpcode"><code><span class="html">OK I'm finding a solution for "NESTED" transactions in MySQL, and as you know in the MySQL documentation says that it's not possible to have transactions within transactions. I was trying to use the Database class propossed here in <a href="http://php.net/manual/en/pdo.begintransaction.php" rel="nofollow" target="_blank">http://php.net/manual/en/pdo.begintransaction.php</a> but unfortunately that's wrong for many things related to the control flow that I have been solved with the following code (LOOK THE EXAMPLE AT THE END, CarOwner)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">TransactionController </span><span class="keyword">extends \</span><span class="default">\PDO </span><span class="keyword">{<br />    public static </span><span class="default">$warn_rollback_was_thrown </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    public static </span><span class="default">$transaction_rollbacked </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    public function </span><span class="default">__construct</span><span class="keyword">()<br />    {<br />        </span><span class="default">parent </span><span class="keyword">:: </span><span class="default">__construct</span><span class="keyword">( ... </span><span class="default">connection info </span><span class="keyword">... );<br />    }<br />    public static </span><span class="default">$nest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public function </span><span class="default">reset</span><span class="keyword">()<br />    {<br />        </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$transaction_rollbacked </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$warn_rollback_was_thrown </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br />    function </span><span class="default">beginTransaction</span><span class="keyword">()<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">reset</span><span class="keyword">();<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">beginTransaction</span><span class="keyword">();<br />        }<br />        </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest</span><span class="keyword">++;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">commit</span><span class="keyword">()<br />    {<br /><br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />        if (</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">&amp;&amp;<br />                !</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$transaction_rollbacked </span><span class="keyword">&amp;&amp;<br />                !</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$warn_rollback_was_thrown</span><span class="keyword">) {<br />                    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">parent </span><span class="keyword">:: </span><span class="default">commit</span><span class="keyword">();<br />                }<br />                </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest</span><span class="keyword">--;<br />                return </span><span class="default">$result</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">rollback</span><span class="keyword">()<br />    {<br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        if (</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">&gt;= </span><span class="default">0</span><span class="keyword">) {<br />            if (</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />                </span><span class="default">$result </span><span class="keyword">= </span><span class="default">parent </span><span class="keyword">:: </span><span class="default">rollback</span><span class="keyword">();<br />                </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$transaction_rollbacked </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />            else {<br />                </span><span class="default">TransactionController  </span><span class="keyword">:: </span><span class="default">$warn_rollback_was_thrown </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br />        </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest</span><span class="keyword">--;<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">transactionFailed</span><span class="keyword">()<br />    {<br />        return </span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$warn_rollback_was_thrown </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// to force rollback you can only do it from $nest = 0<br />    </span><span class="keyword">public function </span><span class="default">forceRollback</span><span class="keyword">()<br />    {<br />        if (</span><span class="default">TransactionController </span><span class="keyword">:: </span><span class="default">$nest </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">throws </span><span class="keyword">new </span><span class="default">\PDOException</span><span class="keyword">();<br />        }<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85211">  <div class="votes">
    <div id="Vu85211">
    <a href="/manual/vote-note.php?id=85211&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85211">
    <a href="/manual/vote-note.php?id=85211&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85211" title="60% like this...">
    4
    </div>
  </div>
  <a href="#85211" class="name">
  <strong class="user"><em>dbeecher at tekops dot com</em></strong></a><a class="genanchor" href="#85211"> &para;</a><div class="date" title="2008-08-20 09:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85211">
<div class="phpcode"><code><span class="html">// If you need to set an ISOLATION level or LOCK MODE it needs to be done BEFORE you make the BeginTransaction() call...<br />//<br />//  **note** you should always check result codes on operations and do error handling.  This sample code<br />//  assumes all the calls work so that the order of operations is accurate and easy to see<br />//<br />//  THIS IS using the PECL PDO::INFORMIX module, running on fedora core 6, php 5.2.4<br />//<br />//    This is the correct way to address an informix -243 error (could not position within table) when there<br />//    is no ISAM error indicating a table corruption.  A -243 can happen (if the table/indexes, etc., are ok) <br />//    if a row is locked.  The code below sets the LOCK MODE to wait 2 minutes (120 seconds) before<br />//    giving up.  In this example you get READ COMMITTED rows, if you don't need read committed<br />//    but just need to get whatever data is there (ignoring locked rows, etc.) instead of<br />//    "SET LOCK MODE TO WAIT 120" you could "SET ISOLATION TO DIRTY READ".<br />//<br />//    In informix you *must* manage how you do reads because it is very easy to trigger a<br />//    lock table overflow (which downs the instance) if you have lots of rows, are using joins<br />//    and have many updates happening.  <br />//<br /><br />// e.g.,<br /><br />$sql= "SELECT FIRST 50 * FROM mytable WHERE mystuff=1 ORDER BY myid";                    /* define SQL query */<br /><br />try                                                                                /* create an exception handler */<br />    {<br />    $dbh = new PDO("informix:host=......");<br />         <br />    if ($dbh)    /* did we connect? */<br />        {<br />        $dbh-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);<br />        $dbh-&gt;query("SET LOCK MODE TO WAIT 120")<br />        <br />        # ----------------<br />        # open transaction cursor<br />        # ----------------<br />        if    ( $dbh-&gt;beginTransaction() )                                         # explicitly open cursor<br />            {<br />            try    /* open exception handler */<br />                {<br />                $stmt = $dbh-&gt;prepare($sql, array(PDO::ATTR_CURSOR =&gt; PDO::CURSOR_SCROLL));<br /><br />                $stmt-&gt;execute();<br />                <br />                while ($row = $stmt-&gt;fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT))<br />                    {<br />                    $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\t" . $row[3] . "\t" . $row[4] . "\t" . $row[5] . "\t" . $row[6] . "\t" . $row[7] . "\n" . $row[8] ;<br />                    //print $data;<br />                    print_r($row);<br />                    };<br />                <br />                $stmt = null;<br />                }<br />            catch (PDOException $e)<br />                {<br />                print "Query Failed!\n\n";<br />                <br />                print "DBA FAIL:" . $e-&gt;getMessage();<br />                };<br />            <br />            $dbh-&gt;rollback();                                                       # abort any changes (ie. $dbh-&gt;commit()<br />            $dbh = null;                                                            # close connection<br />            }<br />        else<br />            {<br />            # we should never get here, it should go to the exception handler<br />            print "Unable to establish connection...\n\n";<br />            };<br />        };<br />    }<br />catch (Exception $e)<br />    {<br />    $dbh-&gt;rollback();<br />    echo "Failed: " . $e-&gt;getMessage();<br />    };</span></code></div>
  </div>
 </div>
  <div class="note" id="116245">  <div class="votes">
    <div id="Vu116245">
    <a href="/manual/vote-note.php?id=116245&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116245">
    <a href="/manual/vote-note.php?id=116245&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116245" title="53% like this...">
    1
    </div>
  </div>
  <a href="#116245" class="name">
  <strong class="user"><em>eddi13</em></strong></a><a class="genanchor" href="#116245"> &para;</a><div class="date" title="2014-11-28 09:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116245">
<div class="phpcode"><code><span class="html">after TRUNCATE TABLE `table`  just as DELETE FROM `table`, so if whole table was deleted, aborts the transaction. And the rollback will not be passible.</span></code></div>
  </div>
 </div>
  <div class="note" id="116262">  <div class="votes">
    <div id="Vu116262">
    <a href="/manual/vote-note.php?id=116262&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116262">
    <a href="/manual/vote-note.php?id=116262&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116262" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116262" class="name">
  <strong class="user"><em>Steel Brain</em></strong></a><a class="genanchor" href="#116262"> &para;</a><div class="date" title="2014-12-03 12:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116262">
<div class="phpcode"><code><span class="html">The example is misleading, Typically data definition language clauses (DDL) will trigger the database engine to automatically commit. It means that if you drop a table, that query will be executed regardless of the transaction.<br />Ref-Mysql:<br />    <a href="http://dev.mysql.com/doc/refman/5.0/en/implicit-commit.html" rel="nofollow" target="_blank">http://dev.mysql.com/doc/refman/5.0/en/implicit-commit.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="95353">  <div class="votes">
    <div id="Vu95353">
    <a href="/manual/vote-note.php?id=95353&amp;page=pdo.begintransaction&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95353">
    <a href="/manual/vote-note.php?id=95353&amp;page=pdo.begintransaction&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95353" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95353" class="name">
  <strong class="user"><em>geompse at gmail dot com</em></strong></a><a class="genanchor" href="#95353"> &para;</a><div class="date" title="2009-12-28 01:58"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95353">
<div class="phpcode"><code><span class="html">With Oracle, any structure statement will do an implicit commit.<br /><br />So : ALTER TABLE "my_table" DROP COLUMN "my_column";<br />Can't be rolled back !<br /><br />Hope this will save time for others</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.begintransaction&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.begintransaction.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.pdo.php">PDO</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
