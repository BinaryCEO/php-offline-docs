<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-exec.php">
 <link rel="shorturl" href="https://www.php.net/odbc-exec">
 <link rel="alternate" href="https://www.php.net/odbc-exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-errormsg.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-execute.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Directly execute an SQL statement" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_exec - Manual" />
<meta name="twitter:description" content="Directly execute an SQL statement" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_exec - Manual" />
<meta itemprop="description" content="Directly execute an SQL statement" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Directly execute an SQL statement" />

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
        <a href="function.odbc-execute.php">
          odbc_execute &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-errormsg.php">
          &laquo; odbc_errormsg        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.abstract.php'>Abstraction Layers</a></li>      <li><a href='book.uodbc.php'>ODBC</a></li>      <li><a href='ref.uodbc.php'>ODBC Functions</a></li>      </ul>
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
            <option value='en/function.odbc-exec.php' selected="selected">English</option>
            <option value='de/function.odbc-exec.php'>German</option>
            <option value='es/function.odbc-exec.php'>Spanish</option>
            <option value='fr/function.odbc-exec.php'>French</option>
            <option value='it/function.odbc-exec.php'>Italian</option>
            <option value='ja/function.odbc-exec.php'>Japanese</option>
            <option value='pt_BR/function.odbc-exec.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-exec.php'>Russian</option>
            <option value='tr/function.odbc-exec.php'>Turkish</option>
            <option value='uk/function.odbc-exec.php'>Ukrainian</option>
            <option value='zh/function.odbc-exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_exec</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_exec</span> &mdash; <span class="dc-title">Directly execute an SQL statement</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.odbc-exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_exec</strong></span>(<span class="methodparam"><span class="type">Odbc\Connection</span> <code class="parameter">$odbc</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><span class="type">Odbc\Result</span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Sends an SQL statement to the database server.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.odbc-exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">odbc</code></dt>
     <dd>
      <p class="para">The ODBC connection object,
see <span class="function"><a href="function.odbc-connect.php" class="function">odbc_connect()</a></span> for details.</p>
     </dd>
    
    
     <dt><code class="parameter">query</code></dt>
     <dd>
      <p class="para">
       The SQL statement.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.odbc-exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an ODBC result object if the SQL command was executed
   successfully, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-function.odbc-exec-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
 <td>8.4.0</td>
 <td>
  <code class="parameter">odbc</code> expects an <span class="classname"><strong class="classname">Odbc\Connection</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

     <tr>
 <td>8.4.0</td>
 <td>
  This function returns an <span class="classname"><strong class="classname">Odbc\Result</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
 </td>
</tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">flags</code> was removed.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="refsect1 seealso" id="refsect1-function.odbc-exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.odbc-prepare.php" class="function" rel="rdfs-seeAlso">odbc_prepare()</a> - Prepares a statement for execution</span></li>
    <li><span class="function"><a href="function.odbc-execute.php" class="function" rel="rdfs-seeAlso">odbc_execute()</a> - Execute a prepared statement</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="51057">  <div class="votes">
    <div id="Vu51057">
    <a href="/manual/vote-note.php?id=51057&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51057">
    <a href="/manual/vote-note.php?id=51057&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51057" title="57% like this...">
    3
    </div>
  </div>
  <a href="#51057" class="name">
  <strong class="user"><em>james @ php-for-beginners co uk</em></strong></a><a class="genanchor" href="#51057"> &para;</a><div class="date" title="2005-03-18 04:54"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51057">
<div class="phpcode"><code><span class="html">hi all, I managed to get this little snippet working, it's pretty useful if you have long forms to be inserted into a database.<br /><br />if ( ! empty ( $_POST ) ){<br />array_pop($_POST);<br /> foreach($_POST as $key =&gt; $val){<br />  $columns .= addslashes($key) . ", ";<br />    $values .= "'" . addslashes($val) . "', ";<br />      <br /> }<br /> $values = substr_replace($values, "", -2);<br /> $columns = substr_replace($columns, "", -2);<br /> <br /> $sql = "INSERT INTO table ($columns) VALUES ($values)";<br /> echo $sql;<br /> $results = odbc_exec($conn, $sql);<br />                 if ($results){<br />              echo "Query Executed";<br />                }else {<br />              echo "Query failed " .odbc_error();<br />            }    <br />}<br /><br />Not the most secure in the world but, speeds up collecting data from large forms.</span></code></div>
  </div>
 </div>
  <div class="note" id="30986">  <div class="votes">
    <div id="Vu30986">
    <a href="/manual/vote-note.php?id=30986&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30986">
    <a href="/manual/vote-note.php?id=30986&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30986" title="58% like this...">
    2
    </div>
  </div>
  <a href="#30986" class="name">
  <strong class="user"><em>rupix at rediffmail dot com</em></strong></a><a class="genanchor" href="#30986"> &para;</a><div class="date" title="2003-04-05 07:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30986">
<div class="phpcode"><code><span class="html">I tried the following line of code<br /><br /><span class="default">&lt;?php<br />$odbc</span><span class="keyword">=</span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"pbk"</span><span class="keyword">, </span><span class="string">"root"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">) or die(</span><span class="default">odbc_errormsg</span><span class="keyword">());<br /></span><span class="default">$q</span><span class="keyword">=</span><span class="string">"insert into pbk values(\"</span><span class="default">$name</span><span class="string">\", \"</span><span class="default">$phone</span><span class="string">\")"</span><span class="keyword">;<br />print </span><span class="default">$q</span><span class="keyword">;<br /></span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">, </span><span class="default">$q</span><span class="keyword">) or die(</span><span class="string">"&lt;p&gt;"</span><span class="keyword">.</span><span class="default">odbc_errormsg</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />it does not work. However if I use single quotes instead of \" the thing runs smoothly<br /><br />thus the following would work<br /><br /><span class="default">&lt;?php<br />$odbc</span><span class="keyword">=</span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"pbk"</span><span class="keyword">, </span><span class="string">"yourworstnightmare"</span><span class="keyword">,</span><span class="string">"abracadabra"</span><span class="keyword">) or die(</span><span class="default">odbc_errormsg</span><span class="keyword">());<br /></span><span class="default">$q</span><span class="keyword">=</span><span class="string">"insert into pbk values('</span><span class="default">$name</span><span class="string">', '</span><span class="default">$phone</span><span class="string">')"</span><span class="keyword">;<br />print </span><span class="default">$q</span><span class="keyword">;<br /></span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$odbc</span><span class="keyword">, </span><span class="default">$q</span><span class="keyword">) or die(</span><span class="string">"&lt;p&gt;"</span><span class="keyword">.</span><span class="default">odbc_errormsg</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />Also having a user dsn is no good on win2k. Always have a System DSN. I don't know yet what are the implications of the same.</span></code></div>
  </div>
 </div>
  <div class="note" id="2069">  <div class="votes">
    <div id="Vu2069">
    <a href="/manual/vote-note.php?id=2069&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd2069">
    <a href="/manual/vote-note.php?id=2069&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V2069" title="57% like this...">
    1
    </div>
  </div>
  <a href="#2069" class="name">
  <strong class="user"><em>gross at arkana dot de</em></strong></a><a class="genanchor" href="#2069"> &para;</a><div class="date" title="1999-10-28 06:03"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom2069">
<div class="phpcode"><code><span class="html">If you're running NT/IIS with PHP 3.0.11 and want to use MS Access dbs with "stored procedures" you can send an ODBC SQL query like:
<br /><span class="default">&lt;?php
<br />$conn_id </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">( </span><span class="string">"odbc_test_db"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">SQL_CUR_USE_DRIVER </span><span class="keyword">);
<br /></span><span class="default">$qry_id </span><span class="keyword">= </span><span class="default">odbc_do</span><span class="keyword">( </span><span class="default">$conn_id</span><span class="keyword">, </span><span class="string">"{CALL MyQuery}" </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>This way you don't need to integrate query strings like 
<br />
<br />SELECT * FROM TblObject WHERE (((TblObject.something) Like "blahblahblah"));
<br />
<br />in the php file. You directly call the query "MyQuery" that was generated by MS Access.</span></code></div>
  </div>
 </div>
  <div class="note" id="1435">  <div class="votes">
    <div id="Vu1435">
    <a href="/manual/vote-note.php?id=1435&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd1435">
    <a href="/manual/vote-note.php?id=1435&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V1435" title="57% like this...">
    1
    </div>
  </div>
  <a href="#1435" class="name">
  <strong class="user"><em>rmkim at uwaterloo dot ca</em></strong></a><a class="genanchor" href="#1435"> &para;</a><div class="date" title="1999-08-25 11:13"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom1435">
<div class="phpcode"><code><span class="html">for Win32(NT) and MSAcess 2000, whenever you retrieve a date column/field, php will automatically convert it to 'yyyy/mm/dd hh:mm:ss' format regardless of the style of date you've denoted in Access.
<br />This seems to pose a problem when you exec SELECT, UPDATE, or DELETE queries, but strangley INSERT works fine. I've tried parsing the date into the desired format, but php still yells criteria mismatch.</span></code></div>
  </div>
 </div>
  <div class="note" id="77397">  <div class="votes">
    <div id="Vu77397">
    <a href="/manual/vote-note.php?id=77397&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77397">
    <a href="/manual/vote-note.php?id=77397&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77397" title="52% like this...">
    1
    </div>
  </div>
  <a href="#77397" class="name">
  <strong class="user"><em>mir eder</em></strong></a><a class="genanchor" href="#77397"> &para;</a><div class="date" title="2007-08-28 03:39"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77397">
<div class="phpcode"><code><span class="html">If you are having problems with truncated text fields from ODBC queries (pe. at 4096 characters), try some of the following:<br /><br />in php.ini:<br />- odbc.defaultlrl = 65536<br /><br />in your php code, before your queries:<br />- ini_set ( 'odbc.defaultlrl' , '65536' );</span></code></div>
  </div>
 </div>
  <div class="note" id="30131">  <div class="votes">
    <div id="Vu30131">
    <a href="/manual/vote-note.php?id=30131&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30131">
    <a href="/manual/vote-note.php?id=30131&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30131" title="52% like this...">
    1
    </div>
  </div>
  <a href="#30131" class="name">
  <strong class="user"><em>das_yrch at hotmail dot com</em></strong></a><a class="genanchor" href="#30131"> &para;</a><div class="date" title="2003-03-07 03:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30131">
<div class="phpcode"><code><span class="html">I tried this way to see the results of a query and it works!!<br /><br />$Conn = odbc_connect<br />("bbdd_usuaris","","",SQL_CUR_USE_ODBC );<br /><br />$result=odbc_exec($Conn,"select nom from usuaris;");<br /><br />while(odbc_fetch_row($result)){<br />         for($i=1;$i&lt;=odbc_num_fields($result);$i++){<br />        echo "Result is ".odbc_result($result,$i);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="121836">  <div class="votes">
    <div id="Vu121836">
    <a href="/manual/vote-note.php?id=121836&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121836">
    <a href="/manual/vote-note.php?id=121836&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121836" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121836" class="name">
  <strong class="user"><em>test</em></strong></a><a class="genanchor" href="#121836"> &para;</a><div class="date" title="2017-11-07 03:50"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121836">
<div class="phpcode"><code><span class="html">If eval() is the answer, you're almost certainly asking the wrong question.</span></code></div>
  </div>
 </div>
  <div class="note" id="56311">  <div class="votes">
    <div id="Vu56311">
    <a href="/manual/vote-note.php?id=56311&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56311">
    <a href="/manual/vote-note.php?id=56311&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56311" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56311" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#56311"> &para;</a><div class="date" title="2005-08-30 06:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56311">
<div class="phpcode"><code><span class="html">The following seems counterintuitive to me and so I am constantly getting burned by it.  Just thought I'd add a note for anyone else who might also get burned.<br /><br />  if (!odbc_exec("select MyValue from MyTable where Key1='x' and Key2='y'"))<br /><br />is not a good way to search for the existence of a record with Key1 = x and Key2 = y.  The odbc_exec always returns a result handle, even though there aren't any records.<br /><br />Rather, you must use one of the fetch functions to find out that the record really doesn't exist.  This should work:<br /><br />  if (!($Selhand = odbc_exec("select MyValue from MyTable where Key1='x' and Key2='y'"))<br />    || !odbc_result($Selhand, 1))</span></code></div>
  </div>
 </div>
  <div class="note" id="41770">  <div class="votes">
    <div id="Vu41770">
    <a href="/manual/vote-note.php?id=41770&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41770">
    <a href="/manual/vote-note.php?id=41770&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41770" title="50% like this...">
    0
    </div>
  </div>
  <a href="#41770" class="name">
  <strong class="user"><em>Sean Boulter</em></strong></a><a class="genanchor" href="#41770"> &para;</a><div class="date" title="2004-04-21 05:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41770">
<div class="phpcode"><code><span class="html">If a single quote exists within the field specified by your WHERE statement, ODBC fails because of a parsing error.  Although it seems intuitive, using \" around the field does not work (\"$var\").  The only solution I found was to replace all single quotes in my field with two single quotes.  ODBC interprets the first single quote as an escape character and interprets the second single quote as a literal.  Thanks to <a href="http://www.devguru.com/features/knowledge_base/A100206.html" rel="nofollow" target="_blank">http://www.devguru.com/features/knowledge_base/A100206.html</a> for this tip.</span></code></div>
  </div>
 </div>
  <div class="note" id="23612">  <div class="votes">
    <div id="Vu23612">
    <a href="/manual/vote-note.php?id=23612&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23612">
    <a href="/manual/vote-note.php?id=23612&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23612" title="50% like this...">
    0
    </div>
  </div>
  <a href="#23612" class="name">
  <strong class="user"><em>miguel dot erill at doymer dot com</em></strong></a><a class="genanchor" href="#23612"> &para;</a><div class="date" title="2002-07-23 03:33"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23612">
<div class="phpcode"><code><span class="html">In a previous contribution it was told that if you're running NT/IIS with PHP 3.0.11 you can use MS Access dbs "stored procedures".<br /><br />That was right, but if those stores procedures have parameters you have to supply them in the command line like this:<br /><br />$conn_id = odbc_connect( "odbc_test_db", "","", SQL_CUR_USE_DRIVER );<br />$qry_id = odbc_do( $conn_id, "{CALL MyQuery(".$param.")}" );</span></code></div>
  </div>
 </div>
  <div class="note" id="18406">  <div class="votes">
    <div id="Vu18406">
    <a href="/manual/vote-note.php?id=18406&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18406">
    <a href="/manual/vote-note.php?id=18406&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18406" title="50% like this...">
    0
    </div>
  </div>
  <a href="#18406" class="name">
  <strong class="user"><em>lee200082 at hotmail dot com</em></strong></a><a class="genanchor" href="#18406"> &para;</a><div class="date" title="2002-01-21 05:07"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18406">
<div class="phpcode"><code><span class="html">As an addition to the note about square brackets earlier:<br /><br />Enclosing sql field names in '[' and ']' also allows you to use MS Access reserved words like 'date' and 'field' and 'time' in your SQL query... it seems that the square brackets simply tell Access to ignore any other meaning whatever is inside them has and take them simply as field names.</span></code></div>
  </div>
 </div>
  <div class="note" id="16989">  <div class="votes">
    <div id="Vu16989">
    <a href="/manual/vote-note.php?id=16989&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16989">
    <a href="/manual/vote-note.php?id=16989&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16989" title="50% like this...">
    0
    </div>
  </div>
  <a href="#16989" class="name">
  <strong class="user"><em>sk2xml at gmx dot net</em></strong></a><a class="genanchor" href="#16989"> &para;</a><div class="date" title="2001-11-21 06:15"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16989">
<div class="phpcode"><code><span class="html">Problem: Fieldnames in SQL-Statement have blanks and [] don't work!
<br />
<br />Solution: Try "" instead
<br />
<br />Ex.: 
<br />
<br />SELECT table2.first, table1.[last name] FROM tabel1, table2 -&gt; don't work
<br />
<br />SELECT table2.first, table1.\"last name\" FROM tabel1, table2 -&gt; Try this
<br />
<br />PS: Don't forget the espace characters !!!</span></code></div>
  </div>
 </div>
  <div class="note" id="10499">  <div class="votes">
    <div id="Vu10499">
    <a href="/manual/vote-note.php?id=10499&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10499">
    <a href="/manual/vote-note.php?id=10499&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10499" title="50% like this...">
    0
    </div>
  </div>
  <a href="#10499" class="name">
  <strong class="user"><em>akchu at  at ualberta dot ca</em></strong></a><a class="genanchor" href="#10499"> &para;</a><div class="date" title="2001-01-07 08:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10499">
<div class="phpcode"><code><span class="html">ODBC/MS Access Date Fields:
<br />
<br />Matching dates in SELECT statements for MS Access requires the following format:
<br />#Y-m-d H:i:s#
<br />
<br />for example:
<br />
<br />SELECT * FROM TableName WHERE Birthdate = #2001-01-07 00:00:00#
<br />
<br />or 
<br />
<br />SELECT * FROM TableName WHERE Birthdate BETWEEN #2000-01-07 00:00:00# AND #2001-01-07 00:00:00#
<br />
<br />This took me forever to figure out.</span></code></div>
  </div>
 </div>
  <div class="note" id="9484">  <div class="votes">
    <div id="Vu9484">
    <a href="/manual/vote-note.php?id=9484&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9484">
    <a href="/manual/vote-note.php?id=9484&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9484" title="50% like this...">
    0
    </div>
  </div>
  <a href="#9484" class="name">
  <strong class="user"><em>vpil at retico dot com</em></strong></a><a class="genanchor" href="#9484"> &para;</a><div class="date" title="2000-11-06 06:24"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9484">
<div class="phpcode"><code><span class="html">Additional links to ODBC_exec:

<br />How to actually write the SQL commands:

<br /><a href="http://www.roth.net/perl/odbc/faq/" rel="nofollow" target="_blank">http://www.roth.net/perl/odbc/faq/</a>

<br /><a href="http://www.netaxs.com/~joc/perl/article/SQL.html" rel="nofollow" target="_blank">http://www.netaxs.com/~joc/perl/article/SQL.html</a>
<br />Demystifying SQL

<br />BIG REF MANUAL:

<br /><a href="http://w3.one.net/~jhoffman/sqltut.htm" rel="nofollow" target="_blank">http://w3.one.net/~jhoffman/sqltut.htm</a>

<br />Introduction to Structured Query Language

<br />Covers read, add, modify &amp; delete of data.</span></code></div>
  </div>
 </div>
  <div class="note" id="113460">  <div class="votes">
    <div id="Vu113460">
    <a href="/manual/vote-note.php?id=113460&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113460">
    <a href="/manual/vote-note.php?id=113460&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113460" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#113460" class="name">
  <strong class="user"><em>petercdow at gmail dot com</em></strong></a><a class="genanchor" href="#113460"> &para;</a><div class="date" title="2013-10-14 01:54"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113460">
<div class="phpcode"><code><span class="html">An SQL statement that contains quotes (i.e. ") instead of apostrophes (i.e. ') to delimit strings works fine in Access, however, in odbc_exec, it fails with <br /><br />[Microsoft][ODBC Microsoft Access Driver] Too few parameters. Expected 6.<br /><br />For example:<br /><br />$q = "INSERT INTO TableA (Fld1, Fld2, Fld3) VALUES('A', 'B', 'C');"<br /><br />works fine in both Access and ODBC, but<br /><br />$q = 'INSERT INTO TableA (Fld1, Fld2, Fld3) VALUES("A", "B", "C");'<br /><br />fails with the above error.</span></code></div>
  </div>
 </div>
  <div class="note" id="33112">  <div class="votes">
    <div id="Vu33112">
    <a href="/manual/vote-note.php?id=33112&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33112">
    <a href="/manual/vote-note.php?id=33112&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33112" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#33112" class="name">
  <strong class="user"><em>rob at vendorpromotions dot com</em></strong></a><a class="genanchor" href="#33112"> &para;</a><div class="date" title="2003-06-17 01:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33112">
<div class="phpcode"><code><span class="html">This opens select statements 'for update' by default in db2.  If you're using db2, you have to tack on 'for read only' at the end to select from SYSCAT.TABLES, for example, without firing an error like<br /><br />Warning: SQL error: [IBM][CLI Driver][DB2/LINUX] SQL0151N The column "MAXFREESPACESEARCH" cannot be updated. SQLSTATE=42808 , SQL state 42808 in SQLExecDirect <br /><br />For example :<br /><br />$query = odbc_exec($conn, "select * from syscat.tables for read only");<br />odbc_result_all($query);<br /><br />will work (only for db2).  I don't know about other databases.<br /><br />The select statement will work in the 'db2' command line, but not in php, because of this side effect.</span></code></div>
  </div>
 </div>
  <div class="note" id="69962">  <div class="votes">
    <div id="Vu69962">
    <a href="/manual/vote-note.php?id=69962&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69962">
    <a href="/manual/vote-note.php?id=69962&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69962" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#69962" class="name">
  <strong class="user"><em>delowing gmail dot com</em></strong></a><a class="genanchor" href="#69962"> &para;</a><div class="date" title="2006-09-27 08:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69962">
<div class="phpcode"><code><span class="html">It is easy to inject evil code into SQL statements. This wraps parameters in quotes so they are not executable. In your own stored procedures you can convert the string to numeric as needed.<br /><br />function sql_make_string($sin){<br />         return "'".str_replace("'","''",$sin)."'";<br />}<br /><br />// this may delete all data from MYTABLE<br />$evil = "734'; DELETE FROM MYTABLE; print 'ha ha";<br />$sql = "SELECT * FROM MYTABLE WHERE mykey = '$evil'";<br />$rst = odbc_exec($connection,$sql);<br /><br />// this probably will not delete the data.<br />$good = sql_make_string($evil);<br />$sql = "SELECT * FROM MYTABLE WHERE mykey =".$good<br />$rst = odbc_exec($connection,$sql);</span></code></div>
  </div>
 </div>
  <div class="note" id="53126">  <div class="votes">
    <div id="Vu53126">
    <a href="/manual/vote-note.php?id=53126&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53126">
    <a href="/manual/vote-note.php?id=53126&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53126" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#53126" class="name">
  <strong class="user"><em>fuadMD at gmail dot com</em></strong></a><a class="genanchor" href="#53126"> &para;</a><div class="date" title="2005-05-24 12:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53126">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// - This is a complete working dynamic example of using: <br />//    odbc_connect, odbc_exec, getting col Names,<br />//    odbc_fetch_row and no of rows. hope it helps<br />// - your driver should point to your MS access file<br /><br /></span><span class="default">$conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">'MSAccessDriver'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">); <br /><br /></span><span class="default">$nrows</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; <br /><br />if (</span><span class="default">$conn</span><span class="keyword">)<br />{<br /></span><span class="default">$sql </span><span class="keyword">=  </span><span class="string">"select * from </span><span class="default">$month</span><span class="string">"</span><span class="keyword">; <br /></span><span class="comment">//this function will execute the sql satament<br /></span><span class="default">$result</span><span class="keyword">=</span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /><br />echo </span><span class="string">"&lt;table  align=\"center\" border=\"1\" borderColor=\"\" cellpadding=\"0\" cellspacing=\"0\"&gt;\n"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;tr&gt; "</span><span class="keyword">;<br /></span><span class="comment">// -- print field name<br /></span><span class="default">$colName </span><span class="keyword">= </span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br />for (</span><span class="default">$j</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;= </span><span class="default">$colName</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++)<br />{<br />echo </span><span class="string">"&lt;th  align=\"left\" bgcolor=\"#CCCCCC\" &gt; &lt;font color=\"#990000\"&gt; "</span><span class="keyword">;<br />echo </span><span class="default">odbc_field_name </span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">$j </span><span class="keyword">);<br />echo </span><span class="string">"&lt;/font&gt; &lt;/th&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">$j</span><span class="keyword">=</span><span class="default">$j</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$c</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /></span><span class="comment">// end of field names<br /></span><span class="keyword">while(</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) </span><span class="comment">// getting data<br /></span><span class="keyword">{<br /> </span><span class="default">$c</span><span class="keyword">=</span><span class="default">$c</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br /> if ( </span><span class="default">$c</span><span class="keyword">%</span><span class="default">2 </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">) <br /> echo </span><span class="string">"&lt;tr bgcolor=\"#d0d0d0\" &gt;\n"</span><span class="keyword">;<br /> else <br /> echo </span><span class="string">"&lt;tr bgcolor=\"#eeeeee\"&gt;\n"</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">odbc_num_fields</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)<br />      {        <br />        echo </span><span class="string">"&lt;td&gt;"</span><span class="keyword">;<br />        echo </span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />        echo </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;         <br />        if ( </span><span class="default">$i</span><span class="keyword">%</span><span class="default">$j </span><span class="keyword">== </span><span class="default">0 </span><span class="keyword">)  <br />           {<br />            </span><span class="default">$nrows</span><span class="keyword">+=</span><span class="default">1</span><span class="keyword">; </span><span class="comment">// counting no of rows    <br />          </span><span class="keyword">}   <br />      }<br />    echo </span><span class="string">"&lt;/tr&gt;"</span><span class="keyword">;<br />} <br /><br />echo </span><span class="string">"&lt;/td&gt; &lt;/tr&gt;\n"</span><span class="keyword">;<br />echo </span><span class="string">"&lt;/table &gt;\n"</span><span class="keyword">;<br /></span><span class="comment">// --end of table  <br /></span><span class="keyword">if (</span><span class="default">$nrows</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) echo </span><span class="string">"&lt;br/&gt;&lt;center&gt; Nothing for </span><span class="default">$month</span><span class="string"> yet! Try back later&lt;/center&gt;  &lt;br/&gt;"</span><span class="keyword">; <br />else echo </span><span class="string">"&lt;br/&gt;&lt;center&gt; Total Records:  </span><span class="default">$nrows</span><span class="string"> &lt;/center&gt;  &lt;br/&gt;"</span><span class="keyword">;<br /></span><span class="default">odbc_close </span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">);<br /><br />}<br />else echo </span><span class="string">"odbc not connected &lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="9417">  <div class="votes">
    <div id="Vu9417">
    <a href="/manual/vote-note.php?id=9417&amp;page=function.odbc-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9417">
    <a href="/manual/vote-note.php?id=9417&amp;page=function.odbc-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9417" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#9417" class="name">
  <strong class="user"><em>phobo at  at  at paradise dot net dot nz</em></strong></a><a class="genanchor" href="#9417"> &para;</a><div class="date" title="2000-11-02 06:26"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9417">
<div class="phpcode"><code><span class="html">If Openlink -&gt; MS Access Database fails and gives "Driver Not Capable" error or "No tuples available" warning, use the SQL_CUR_USE_ODBC cursor when using odbc_connect()...
<br />
<br />Siggy</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-exec.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.uodbc.php">ODBC Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.odbc-autocommit.php" title="odbc_&#8203;autocommit">odbc_&#8203;autocommit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-binmode.php" title="odbc_&#8203;binmode">odbc_&#8203;binmode</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close.php" title="odbc_&#8203;close">odbc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-close-all.php" title="odbc_&#8203;close_&#8203;all">odbc_&#8203;close_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columnprivileges.php" title="odbc_&#8203;columnprivileges">odbc_&#8203;columnprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-columns.php" title="odbc_&#8203;columns">odbc_&#8203;columns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-commit.php" title="odbc_&#8203;commit">odbc_&#8203;commit</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connect.php" title="odbc_&#8203;connect">odbc_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-is-quoted.php" title="odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted">odbc_&#8203;connection_&#8203;string_&#8203;is_&#8203;quoted</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-connection-string-should-quote.php" title="odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote">odbc_&#8203;connection_&#8203;string_&#8203;should_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-cursor.php" title="odbc_&#8203;cursor">odbc_&#8203;cursor</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-data-source.php" title="odbc_&#8203;data_&#8203;source">odbc_&#8203;data_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-do.php" title="odbc_&#8203;do">odbc_&#8203;do</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-error.php" title="odbc_&#8203;error">odbc_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-errormsg.php" title="odbc_&#8203;errormsg">odbc_&#8203;errormsg</a>
                        </li>
                                                <li class="current">
                            <a href="function.odbc-exec.php" title="odbc_&#8203;exec">odbc_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-execute.php" title="odbc_&#8203;execute">odbc_&#8203;execute</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-array.php" title="odbc_&#8203;fetch_&#8203;array">odbc_&#8203;fetch_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-into.php" title="odbc_&#8203;fetch_&#8203;into">odbc_&#8203;fetch_&#8203;into</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-object.php" title="odbc_&#8203;fetch_&#8203;object">odbc_&#8203;fetch_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-fetch-row.php" title="odbc_&#8203;fetch_&#8203;row">odbc_&#8203;fetch_&#8203;row</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-len.php" title="odbc_&#8203;field_&#8203;len">odbc_&#8203;field_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-name.php" title="odbc_&#8203;field_&#8203;name">odbc_&#8203;field_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-num.php" title="odbc_&#8203;field_&#8203;num">odbc_&#8203;field_&#8203;num</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-precision.php" title="odbc_&#8203;field_&#8203;precision">odbc_&#8203;field_&#8203;precision</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-scale.php" title="odbc_&#8203;field_&#8203;scale">odbc_&#8203;field_&#8203;scale</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-field-type.php" title="odbc_&#8203;field_&#8203;type">odbc_&#8203;field_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-foreignkeys.php" title="odbc_&#8203;foreignkeys">odbc_&#8203;foreignkeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-free-result.php" title="odbc_&#8203;free_&#8203;result">odbc_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-gettypeinfo.php" title="odbc_&#8203;gettypeinfo">odbc_&#8203;gettypeinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-longreadlen.php" title="odbc_&#8203;longreadlen">odbc_&#8203;longreadlen</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-next-result.php" title="odbc_&#8203;next_&#8203;result">odbc_&#8203;next_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-fields.php" title="odbc_&#8203;num_&#8203;fields">odbc_&#8203;num_&#8203;fields</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-num-rows.php" title="odbc_&#8203;num_&#8203;rows">odbc_&#8203;num_&#8203;rows</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-pconnect.php" title="odbc_&#8203;pconnect">odbc_&#8203;pconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-prepare.php" title="odbc_&#8203;prepare">odbc_&#8203;prepare</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-primarykeys.php" title="odbc_&#8203;primarykeys">odbc_&#8203;primarykeys</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedurecolumns.php" title="odbc_&#8203;procedurecolumns">odbc_&#8203;procedurecolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-procedures.php" title="odbc_&#8203;procedures">odbc_&#8203;procedures</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result.php" title="odbc_&#8203;result">odbc_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-result-all.php" title="odbc_&#8203;result_&#8203;all">odbc_&#8203;result_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-rollback.php" title="odbc_&#8203;rollback">odbc_&#8203;rollback</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-setoption.php" title="odbc_&#8203;setoption">odbc_&#8203;setoption</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-specialcolumns.php" title="odbc_&#8203;specialcolumns">odbc_&#8203;specialcolumns</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-statistics.php" title="odbc_&#8203;statistics">odbc_&#8203;statistics</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tableprivileges.php" title="odbc_&#8203;tableprivileges">odbc_&#8203;tableprivileges</a>
                        </li>
                                                <li class="">
                            <a href="function.odbc-tables.php" title="odbc_&#8203;tables">odbc_&#8203;tables</a>
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
