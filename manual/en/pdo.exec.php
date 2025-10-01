<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: PDO::exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/pdo.exec.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/pdo.exec.php">
 <link rel="alternate" href="https://www.php.net/manual/en/pdo.exec.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.pdo.php">
 <link rel="prev" href="https://www.php.net/manual/en/pdo.errorinfo.php">
 <link rel="next" href="https://www.php.net/manual/en/pdo.getattribute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/pdo.exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/pdo.exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/pdo.exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/pdo.exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/pdo.exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/pdo.exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/pdo.exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/pdo.exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/pdo.exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/pdo.exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/pdo.exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute an SQL statement and return the number of affected rows" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: PDO::exec - Manual" />
<meta name="twitter:description" content="Execute an SQL statement and return the number of affected rows" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: PDO::exec - Manual" />
<meta itemprop="description" content="Execute an SQL statement and return the number of affected rows" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute an SQL statement and return the number of affected rows" />

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
        <a href="pdo.getattribute.php">
          PDO::getAttribute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="pdo.errorinfo.php">
          &laquo; PDO::errorInfo        </a>
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
            <option value='en/pdo.exec.php' selected="selected">English</option>
            <option value='de/pdo.exec.php'>German</option>
            <option value='es/pdo.exec.php'>Spanish</option>
            <option value='fr/pdo.exec.php'>French</option>
            <option value='it/pdo.exec.php'>Italian</option>
            <option value='ja/pdo.exec.php'>Japanese</option>
            <option value='pt_BR/pdo.exec.php'>Brazilian Portuguese</option>
            <option value='ru/pdo.exec.php'>Russian</option>
            <option value='tr/pdo.exec.php'>Turkish</option>
            <option value='uk/pdo.exec.php'>Ukrainian</option>
            <option value='zh/pdo.exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="pdo.exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">PDO::exec</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8, PECL pdo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">PDO::exec</span> &mdash; <span class="dc-title">
   Execute an SQL statement and return the number of affected rows
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-pdo.exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>PDO::exec</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$statement</code></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>


  <p class="para rdfs-comment">
   <span class="methodname"><strong>PDO::exec()</strong></span> executes an SQL statement in
   a single function call, returning the number of rows affected by the
   statement.
  </p>
  <p class="para">
   <span class="methodname"><strong>PDO::exec()</strong></span> does not return results from a SELECT
   statement. For a SELECT statement that you only need to issue once
   during your program, consider issuing <span class="methodname"><a href="pdo.query.php" class="methodname">PDO::query()</a></span>.
   For a statement that you need to issue multiple times, prepare 
   a PDOStatement object with <span class="methodname"><a href="pdo.prepare.php" class="methodname">PDO::prepare()</a></span> and issue
   the statement with <span class="methodname"><a href="pdostatement.execute.php" class="methodname">PDOStatement::execute()</a></span>.
  </p>

 </div>

 <div class="refsect1 parameters" id="refsect1-pdo.exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
      <dd>
       <p class="para">
        The SQL statement to prepare and execute.
       </p>
       <p class="para">
        Data inside the query should be <a href="pdo.quote.php" class="link">properly escaped</a>.
       </p>
      </dd>
     
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-pdo.exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="methodname"><strong>PDO::exec()</strong></span> returns the number of rows that were modified
   or deleted by the SQL statement you issued. If no rows were affected, 
   <span class="methodname"><strong>PDO::exec()</strong></span> returns <code class="literal">0</code>. 
  </p>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
  <p class="para">
   The following example incorrectly relies on the return value of
   <span class="methodname"><strong>PDO::exec()</strong></span>, wherein a statement that affected 0 rows
   results in a call to <span class="function"><a href="function.die.php" class="function">die()</a></span>:
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">() or die(</span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$db</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">errorInfo</span><span style="color: #007700">(), </span><span style="color: #0000BB">true</span><span style="color: #007700">)); </span><span style="color: #FF8000">// incorrect<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </p>

 </div>


 <div class="refsect1 errors" id="refsect1-pdo.exec-errors">
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


 <div class="refsect1 examples" id="refsect1-pdo.exec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-1136">
    <p><strong>Example #1 Issuing a DELETE statement</strong></p>
    <div class="example-contents"><p>
     Count the number of rows deleted by a DELETE statement with no WHERE
     clause.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$dbh </span><span style="color: #007700">= new </span><span style="color: #0000BB">PDO</span><span style="color: #007700">(</span><span style="color: #DD0000">'odbc:sample'</span><span style="color: #007700">, </span><span style="color: #DD0000">'db2inst1'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ibmdb2'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Delete all rows from the FRUIT table */<br /></span><span style="color: #0000BB">$count </span><span style="color: #007700">= </span><span style="color: #0000BB">$dbh</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">"DELETE FROM fruit"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Return number of rows that were deleted */<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"Deleted </span><span style="color: #0000BB">$count</span><span style="color: #DD0000"> rows.\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Deleted 1 rows.</pre>
</div>
    </div>
   </div>
  </p>
 </div>



 <div class="refsect1 seealso" id="refsect1-pdo.exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="pdo.prepare.php" class="methodname" rel="rdfs-seeAlso">PDO::prepare()</a> - Prepares a statement for execution and returns a statement object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pdo/pdo/exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fpdo.exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=pdo.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="61702">  <div class="votes">
    <div id="Vu61702">
    <a href="/manual/vote-note.php?id=61702&amp;page=pdo.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61702">
    <a href="/manual/vote-note.php?id=61702&amp;page=pdo.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61702" title="66% like this...">
    41
    </div>
  </div>
  <a href="#61702" class="name">
  <strong class="user"><em>david at acz dot org</em></strong></a><a class="genanchor" href="#61702"> &para;</a><div class="date" title="2006-02-09 04:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61702">
<div class="phpcode"><code><span class="html">This function cannot be used with any queries that return results.  This includes SELECT, OPTIMIZE TABLE, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="127622">  <div class="votes">
    <div id="Vu127622">
    <a href="/manual/vote-note.php?id=127622&amp;page=pdo.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127622">
    <a href="/manual/vote-note.php?id=127622&amp;page=pdo.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127622" title="85% like this...">
    5
    </div>
  </div>
  <a href="#127622" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#127622"> &para;</a><div class="date" title="2022-09-13 03:21"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127622">
<div class="phpcode"><code><span class="html">Note that with MySQL you can detect a DUPLICATE KEY with INSERT (1 = INSERT, 2 = UPDATE) :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// MySQL specific INSERT UPDATE-like syntax<br /></span><span class="default">$sql </span><span class="keyword">= &lt;&lt;&lt;SQL<br /></span><span class="string">    INSERT INTO customers<br />    SET<br />        id = </span><span class="keyword">{</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">quote</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">)}</span><span class="string">,<br />        name = </span><span class="keyword">{</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">quote</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">)}</span><span class="string">,<br />        address = </span><span class="keyword">{</span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">quote</span><span class="keyword">(</span><span class="default">$address</span><span class="keyword">)}</span><span class="string"><br />        AS new<br />    ON DUPLICATE KEY UPDATE<br />        name = new.name,<br />        address = new.address<br /></span><span class="keyword">    SQL;<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">$pdo</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br /><br />if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="comment">// An INSERT of a new row has be done<br /></span><span class="keyword">} elseif (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">2</span><span class="keyword">) {<br />    </span><span class="comment">// An UPDATE of an existing row has be done<br /></span><span class="keyword">}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="69283">  <div class="votes">
    <div id="Vu69283">
    <a href="/manual/vote-note.php?id=69283&amp;page=pdo.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69283">
    <a href="/manual/vote-note.php?id=69283&amp;page=pdo.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69283" title="60% like this...">
    11
    </div>
  </div>
  <a href="#69283" class="name">
  <strong class="user"><em>soletan at toxa dot de</em></strong></a><a class="genanchor" href="#69283"> &para;</a><div class="date" title="2006-08-29 01:40"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69283">
<div class="phpcode"><code><span class="html">It's worth noting here, that - in addition to the hints given in docs up there - using prepare, bind and execute provides more benefits than multiply querying a statement: performance and security!<br /><br />If you insert some binary data (e.g. image file) into database using INSERT INTO ... then it may boost performance of parsing your statement since it is kept small (a few bytes, only, while the image may be several MiBytes) and there is no need to escape/quote the file's binary data to become a proper string value.<br /><br />And, finally and for example, if you want to get a more secure PHP application which isn't affectable by SQL injection attacks you _have to_ consider using prepare/execute on every statement containing data (like INSERTs or SELECTs with WHERE-clauses). Separating the statement code from related data using prepare, bind and execute is best method - fast and secure! You don't even need to escape/quote/format-check any data.</span></code></div>
  </div>
 </div>
  <div class="note" id="118156">  <div class="votes">
    <div id="Vu118156">
    <a href="/manual/vote-note.php?id=118156&amp;page=pdo.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118156">
    <a href="/manual/vote-note.php?id=118156&amp;page=pdo.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118156" title="57% like this...">
    5
    </div>
  </div>
  <a href="#118156" class="name">
  <strong class="user"><em>calin at NOSPAM dot softped dot com</em></strong></a><a class="genanchor" href="#118156"> &para;</a><div class="date" title="2015-10-16 11:20"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118156">
<div class="phpcode"><code><span class="html">PDO::eval() might return `false` for some statements (e.g. CREATE TABLE) even if the operation completed successfully, when using PDO_DBLIB and FreeTDS. So it is not a reliable way of testing the op status.<br /><br />PDO::errorInfo() can be used to test the SQLSTATE error code for '00000' (success) and '01000' (success with warning).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">execute</span><span class="keyword">(</span><span class="default">PDO $conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">) {<br />    </span><span class="default">$affected </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">);<br />    if (</span><span class="default">$affected </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$err </span><span class="keyword">= </span><span class="default">$conn</span><span class="keyword">-&gt;</span><span class="default">errorInfo</span><span class="keyword">();<br />        if (</span><span class="default">$err</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'00000' </span><span class="keyword">|| </span><span class="default">$err</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="string">'01000'</span><span class="keyword">) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$affected</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />PDO::errorInfo(): <a href="http://php.net/manual/en/pdo.errorinfo.php" rel="nofollow" target="_blank">http://php.net/manual/en/pdo.errorinfo.php</a><br />List of SQLSTATE Codes: <a href="http://www-01.ibm.com/support/knowledgecenter/SSGU8G_11.70.0/com.ibm.sqls.doc/ids_sqs_0809.htm" rel="nofollow" target="_blank">http://www-01.ibm.com/support/knowledgecenter/SSGU8G_11.70.0/com.ibm.sqls.doc/ids_sqs_0809.htm</a></span></code></div>
  </div>
 </div>
  <div class="note" id="71843">  <div class="votes">
    <div id="Vu71843">
    <a href="/manual/vote-note.php?id=71843&amp;page=pdo.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71843">
    <a href="/manual/vote-note.php?id=71843&amp;page=pdo.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71843" title="54% like this...">
    3
    </div>
  </div>
  <a href="#71843" class="name">
  <strong class="user"><em>roberto at spadim dot com dot br</em></strong></a><a class="genanchor" href="#71843"> &para;</a><div class="date" title="2006-12-18 11:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71843">
<div class="phpcode"><code><span class="html">this function don't execute multi_query<br />to get it see SQLITE_EXEC comments there is an pereg function that get all queries and execute all then an return the last one</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=pdo.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/pdo.exec.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
