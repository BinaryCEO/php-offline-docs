<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_num_rows - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-num-rows.php">
 <link rel="shorturl" href="https://www.php.net/odbc-num-rows">
 <link rel="alternate" href="https://www.php.net/odbc-num-rows" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-num-fields.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-pconnect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-num-rows.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-num-rows.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-num-rows.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-num-rows.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-num-rows.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-num-rows.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-num-rows.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-num-rows.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-num-rows.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-num-rows.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-num-rows.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Number of rows in a result" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_num_rows - Manual" />
<meta name="twitter:description" content="Number of rows in a result" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_num_rows - Manual" />
<meta itemprop="description" content="Number of rows in a result" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Number of rows in a result" />

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
        <a href="function.odbc-pconnect.php">
          odbc_pconnect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-num-fields.php">
          &laquo; odbc_num_fields        </a>
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
            <option value='en/function.odbc-num-rows.php' selected="selected">English</option>
            <option value='de/function.odbc-num-rows.php'>German</option>
            <option value='es/function.odbc-num-rows.php'>Spanish</option>
            <option value='fr/function.odbc-num-rows.php'>French</option>
            <option value='it/function.odbc-num-rows.php'>Italian</option>
            <option value='ja/function.odbc-num-rows.php'>Japanese</option>
            <option value='pt_BR/function.odbc-num-rows.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-num-rows.php'>Russian</option>
            <option value='tr/function.odbc-num-rows.php'>Turkish</option>
            <option value='uk/function.odbc-num-rows.php'>Ukrainian</option>
            <option value='zh/function.odbc-num-rows.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-num-rows" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_num_rows</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_num_rows</span> &mdash; <span class="dc-title">Number of rows in a result</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.odbc-num-rows-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_num_rows</strong></span>(<span class="methodparam"><span class="type">Odbc\Result</span> <code class="parameter">$statement</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Gets the number of rows in a result. For INSERT, UPDATE and DELETE
   statements <span class="function"><strong>odbc_num_rows()</strong></span> returns the number of rows
   affected.  For a SELECT clause this <em>can</em> be the number
   of rows available.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.odbc-num-rows-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
      <p class="para">
       The ODBC result object returned by <span class="function"><a href="function.odbc-exec.php" class="function">odbc_exec()</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.odbc-num-rows-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of rows in an ODBC result.
   This function will return -1 on error.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-num-rows-changelog">
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
  <code class="parameter">statement</code> expects an <span class="classname"><strong class="classname">Odbc\Result</strong></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 notes" id="refsect1-function.odbc-num-rows-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Using <span class="function"><strong>odbc_num_rows()</strong></span> to determine the number of rows
    available after a SELECT will return -1 with many drivers.
   </p>
  </p></blockquote>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-num-rows.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-num-rows%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-num-rows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-num-rows.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98836">  <div class="votes">
    <div id="Vu98836">
    <a href="/manual/vote-note.php?id=98836&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98836">
    <a href="/manual/vote-note.php?id=98836&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98836" title="56% like this...">
    6
    </div>
  </div>
  <a href="#98836" class="name">
  <strong class="user"><em>walt at brookhouse dot co dot uk</em></strong></a><a class="genanchor" href="#98836"> &para;</a><div class="date" title="2010-07-09 02:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98836">
<div class="phpcode"><code><span class="html">The easy way to count the rows in an odbc resultset where the driver returns -1 is to let SQL do the work:<br /><br /><span class="default">&lt;?php<br /><br />    $conn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"dsn"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br />    </span><span class="default">$rs </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">"SELECT Count(*) AS counter FROM tablename WHERE fieldname='" </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="string">"'"</span><span class="keyword">);<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">odbc_fetch_array</span><span class="keyword">(</span><span class="default">$rs</span><span class="keyword">);<br />    echo </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'counter'</span><span class="keyword">];<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124704">  <div class="votes">
    <div id="Vu124704">
    <a href="/manual/vote-note.php?id=124704&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124704">
    <a href="/manual/vote-note.php?id=124704&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124704" title="66% like this...">
    1
    </div>
  </div>
  <a href="#124704" class="name">
  <strong class="user"><em>j.c</em></strong></a><a class="genanchor" href="#124704"> &para;</a><div class="date" title="2020-02-10 02:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124704">
<div class="phpcode"><code><span class="html">On my server odbc_num_rows() is returning a kind of weird 48bit integer (perhaps it's a 64bit with 16bit heading zeroes...).<br />I found out that i can obtain the correct value by masking the result with 0xffffffff<br /><span class="default">&lt;?php<br />    </span><span class="comment">// your $result=odbc_exec(...)<br />    </span><span class="default">$num_rows    </span><span class="keyword">=    </span><span class="default">odbc_num_rows</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">) &amp; </span><span class="default">0xffffffff</span><span class="keyword">;<br /><br />    echo </span><span class="string">"this works for me: num rows=</span><span class="default">$num_rows</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97965">  <div class="votes">
    <div id="Vu97965">
    <a href="/manual/vote-note.php?id=97965&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97965">
    <a href="/manual/vote-note.php?id=97965&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97965" title="56% like this...">
    3
    </div>
  </div>
  <a href="#97965" class="name">
  <strong class="user"><em>chew_baka at hotmail dot com</em></strong></a><a class="genanchor" href="#97965"> &para;</a><div class="date" title="2010-05-18 02:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97965">
<div class="phpcode"><code><span class="html">None of these examples were working for me, so I came up with the following silly procedure that gives me the number of rows.  This example is crude, but you should get the idea.<br /><br /><span class="default">&lt;?php<br />$cxn </span><span class="keyword">= </span><span class="default">odbc_connect</span><span class="keyword">(</span><span class="string">"ODBC_DSN_NAME"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">);<br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT * FROM some_table'"</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$cxn</span><span class="keyword">, </span><span class="default">$sql</span><span class="keyword">);<br /></span><span class="default">$items </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /> while (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">odbc_fetch_array</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">)) <br />   {<br />       </span><span class="default">$items</span><span class="keyword">++;                           <br />   }  <br />  </span><span class="default">odbc_free_result</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />  echo </span><span class="string">"&lt;br&gt;total No. of rows: </span><span class="default">$items</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112468">  <div class="votes">
    <div id="Vu112468">
    <a href="/manual/vote-note.php?id=112468&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112468">
    <a href="/manual/vote-note.php?id=112468&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112468" title="60% like this...">
    1
    </div>
  </div>
  <a href="#112468" class="name">
  <strong class="user"><em>johnnyboyct-AT-yahoo.com</em></strong></a><a class="genanchor" href="#112468"> &para;</a><div class="date" title="2013-06-19 05:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112468">
<div class="phpcode"><code><span class="html">function best_odbc_num_rows($r1)  {<br />    ob_start(); // block printing table with results<br />    (int)$number=odbc_result_all($r1); <br />    ob_clean(); // block printing table with results<br />    return $number;<br />}<br /><br />Above is the best way to count if you are not using something like IBM Netezza and ODBC and not doing more than 100000ish records, otherwise even this method will run out of memory. <br /><br />IBM Netezza and ODBC will give you counts matching the prefetch setting in the odbc.ini file :( the default is 256 so watch out because it is accurate until that number.</span></code></div>
  </div>
 </div>
  <div class="note" id="123520">  <div class="votes">
    <div id="Vu123520">
    <a href="/manual/vote-note.php?id=123520&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123520">
    <a href="/manual/vote-note.php?id=123520&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123520" title="no votes...">
    0
    </div>
  </div>
  <a href="#123520" class="name">
  <strong class="user"><em>tom dot underwood5 at gmail dot com</em></strong></a><a class="genanchor" href="#123520"> &para;</a><div class="date" title="2019-01-15 01:56"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123520">
<div class="phpcode"><code><span class="html">sometimes if you are for example using a stored procedure rather than an actual SELECT/INSERT/UPDATE, the odbc_num_rows can return unrealiable numbers (I was getting 3 or 0 for everything). In my case I was able to determine the number of rows with the following:<br /><br />// Put the data in array <br /><br />      while ($data[] = odbc_fetch_array($result));<br /><br />// use native php function to get its size<br /><br />    $num_rows = count($data);<br />    echo $num_rows;<br /><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="114332">  <div class="votes">
    <div id="Vu114332">
    <a href="/manual/vote-note.php?id=114332&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114332">
    <a href="/manual/vote-note.php?id=114332&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114332" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114332" class="name">
  <strong class="user"><em>panchome66 at gmail dot com</em></strong></a><a class="genanchor" href="#114332"> &para;</a><div class="date" title="2014-02-09 09:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114332">
<div class="phpcode"><code><span class="html">Este codigo se probó en SQL Server 2000, no se probó en otras versiones como 2005 o 2008. Aun asi no se aplica para MySQL, porque no existe la tabla "sysindexes":<br /><br />$cnx = odbc_connect("dbSQLEmpresa","Admin","123");<br />if ($cnx)<br />{<br />    $rs = odbc_exec($cnx, "SELECT * FROM alumnos");<br />    $f = odbc_num_fields($rs);<br />    $r = odbc_num_rows($rs);<br />    $r = LFRJ_odbc_num_rows($cnx,"alumnos");<br /><br />    echo "&lt;table border = '1'&gt;";<br />    for ($i = 1; $i &lt;= $f; $i++)<br />    {<br />        $n = odbc_field_name($rs, $i);<br />        echo "&lt;th&gt;", $n, "&lt;/th&gt;";<br />    }<br />    while(odbc_fetch_row($rs))<br />    {<br />        echo "&lt;tr&gt;";<br />        for ($i = 1; $i &lt;= $f; $i++)<br />        {<br />            $d = odbc_result($rs, $i);<br />            echo "&lt;td&gt;", $d, "&lt;/td&gt;";<br />        }<br />        echo "&lt;/tr&gt;";<br />    }<br />    echo "&lt;tr&gt;&lt;td colspan = '" . $f . "'&gt;Campos(" . $f . ") Registros(" . $r . ")&lt;/td&gt;&lt;/tr&gt;";<br />    echo "&lt;/table&gt;";<br />}<br />odbc_close($cnx);<br /><br />function LFRJ_odbc_num_rows($cnx,$Tabla)  <br />{<br />    $rs = odbc_exec($cnx, "SELECT rows FROM sysindexes WHERE id = OBJECT_ID('" . $Tabla . "') AND indid &lt; 2;");<br />    return odbc_result($rs, 1);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="83900">  <div class="votes">
    <div id="Vu83900">
    <a href="/manual/vote-note.php?id=83900&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83900">
    <a href="/manual/vote-note.php?id=83900&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83900" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83900" class="name">
  <strong class="user"><em>sirio3mil at gmail dot com</em></strong></a><a class="genanchor" href="#83900"> &para;</a><div class="date" title="2008-06-17 09:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83900">
<div class="phpcode"><code><span class="html">The diference between functions used here are consierable, for example for one table with 36 columns and 806 rows the time to execute two of those functions are this:<br /><br />function using odbc odbc_result_all take 2,6 seconds<br />function using odbc_fetch_row take 0,8 seconds</span></code></div>
  </div>
 </div>
  <div class="note" id="79505">  <div class="votes">
    <div id="Vu79505">
    <a href="/manual/vote-note.php?id=79505&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79505">
    <a href="/manual/vote-note.php?id=79505&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79505" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79505" class="name">
  <strong class="user"><em>areznik at survdata dot com</em></strong></a><a class="genanchor" href="#79505"> &para;</a><div class="date" title="2007-11-30 10:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79505">
<div class="phpcode"><code><span class="html">I could have been noted before in this thread but I couldnt find it on my first search.<br /><br />This function (odbc_num_rows) returns -1 when ODBCing to MS SQL and making it hard to get the number of rows in the returned recordset. <br /><br />Two workarounds:<br />   1. When you just need to verify that any rows returned from your query you can use select count(*) as cnt from table and then just get $row['cnt']<br />   2. When you need to actually loop through the records this function returns number of rows in the recordset if and only if you include ORDER BY clause in your query statement.<br /><br />That sounds a bit annoying but thats the work around when dealing with MS SQL odbc driver I guess.<br /><br />It would be beneficial if someone explained how the Order By clause makes the difference.</span></code></div>
  </div>
 </div>
  <div class="note" id="78522">  <div class="votes">
    <div id="Vu78522">
    <a href="/manual/vote-note.php?id=78522&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78522">
    <a href="/manual/vote-note.php?id=78522&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78522" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78522" class="name">
  <strong class="user"><em>pmo@raadvst-consetatDOTbe</em></strong></a><a class="genanchor" href="#78522"> &para;</a><div class="date" title="2007-10-16 02:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78522">
<div class="phpcode"><code><span class="html">voland's function is simply great. <br />However, i would recommend the use of ob_end_clean(), to shut down completely the output buffer (can cause weird behaviour).</span></code></div>
  </div>
 </div>
  <div class="note" id="77736">  <div class="votes">
    <div id="Vu77736">
    <a href="/manual/vote-note.php?id=77736&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77736">
    <a href="/manual/vote-note.php?id=77736&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77736" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77736" class="name">
  <strong class="user"><em>nielsvandenberge at hotm dot  dot  dot  dot  dot com</em></strong></a><a class="genanchor" href="#77736"> &para;</a><div class="date" title="2007-09-11 05:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77736">
<div class="phpcode"><code><span class="html">I just tried to use the function best_odbc_num_rows($result) from voland at digitalshop dot ru, but it's not working quite well. After executing the function odbc_result_all(); the resultset has to be resetted again. <br />Resetting it with <br /><br />odbc_fetch_row($result, 0); <br /><br />is not working for me.<br /><br />I think the internal number-value of the odbc_result_all()-function is not resetted, but that's just a guess.<br /><br />when I execute the function 3 times with a resultset of 17 rows the values: 17, 34 and 51 are returned.<br /><br />His previous function useful_odbc_num_rows($result) works better (for me).</span></code></div>
  </div>
 </div>
  <div class="note" id="74125">  <div class="votes">
    <div id="Vu74125">
    <a href="/manual/vote-note.php?id=74125&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74125">
    <a href="/manual/vote-note.php?id=74125&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74125" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74125" class="name">
  <strong class="user"><em>voland at digitalshop dot ru</em></strong></a><a class="genanchor" href="#74125"> &para;</a><div class="date" title="2007-03-26 07:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74125">
<div class="phpcode"><code><span class="html">Today we find a BEST way to count number of rows with ODBC! <br /><br />function best_odbc_num_rows($r1)  {<br /><br />ob_start(); // block printing table with results<br /><br />(int)$number=odbc_result_all($r1); <br /><br />ob_clean(); // block printing table with results<br /><br />return $number;<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="73066">  <div class="votes">
    <div id="Vu73066">
    <a href="/manual/vote-note.php?id=73066&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73066">
    <a href="/manual/vote-note.php?id=73066&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73066" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73066" class="name">
  <strong class="user"><em>dm at personalcomputingsolutions dot co dot uk</em></strong></a><a class="genanchor" href="#73066"> &para;</a><div class="date" title="2007-02-07 01:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73066">
<div class="phpcode"><code><span class="html">function db_get_row($cur, $rownum){<br />if (odbc_fetch_into($cur, $row, $rownum)){<br />        return ($row);<br />    }else{<br />        return (FALSE);<br />}<br /><br />$i=1;<br />if (db_get_row($cur,1)){<br />while ($record=db_get_row($cur,$i++)){<br />do stuff<br />}else{<br />tell the user there are no results<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="110207">  <div class="votes">
    <div id="Vu110207">
    <a href="/manual/vote-note.php?id=110207&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110207">
    <a href="/manual/vote-note.php?id=110207&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110207" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#110207" class="name">
  <strong class="user"><em>pjavilla at gmail dot com</em></strong></a><a class="genanchor" href="#110207"> &para;</a><div class="date" title="2012-10-01 04:07"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110207">
<div class="phpcode"><code><span class="html">When accessing a DB2 database with PHP via the ODBC functions, beware of statements which include references to IBM's LONGDESCRIPTION table (for example, if you were - like myself - digging through IBM's Maximo product). Reading from that table usually requires error suppression, because although it works ODBC will spit out a warning message onscreen.<br /><br />When you make it part of another query however, ODBC_NUM_ROWS will always return -1. The solution is to keep any queries to LONGDESCRIPTION in a separate standalone query by itself.<br /><br />However, if you run the query though a previewer like Toad for DB2, using LONGDESCRIPTION in a larger query is fine and does show the results. It's just that you have to break the query up and segregate the query to LONGDESCRIPTION on its own if you are writing ODBC queries for PHP.<br /><br />Just a quick note for anyone else who found ODBC_NUM_RESULTS normally reliable otherwise but inexplicably always returning -1 under certain circumstances.</span></code></div>
  </div>
 </div>
  <div class="note" id="87960">  <div class="votes">
    <div id="Vu87960">
    <a href="/manual/vote-note.php?id=87960&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87960">
    <a href="/manual/vote-note.php?id=87960&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87960" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#87960" class="name">
  <strong class="user"><em>jeff at script-xs dot com</em></strong></a><a class="genanchor" href="#87960"> &para;</a><div class="date" title="2009-01-02 11:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87960">
<div class="phpcode"><code><span class="html">After minutes of frustration, I realized why odbc_num_rows was not returning the number of affected rows on a prepared update query.  I'm using ODBC to connect to Microsot SQL Server 2005.
<br />
<br />My corrected code:
<br />
<br /><span class="default">&lt;?php
<br />$query </span><span class="keyword">= </span><span class="default">odbc_prepare</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">, </span><span class="string">'UPDATE table SET cat = ? WHERE id = 1'</span><span class="keyword">);
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">odbc_execute</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">, </span><span class="default">$category</span><span class="keyword">);
<br /></span><span class="default">$affected </span><span class="keyword">= </span><span class="default">odbc_num_rows</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This code works.  I was frustrated that odbc_num_rows($result) didn't work as I expected, but instead required me to pass the original prepared query to this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="111183">  <div class="votes">
    <div id="Vu111183">
    <a href="/manual/vote-note.php?id=111183&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111183">
    <a href="/manual/vote-note.php?id=111183&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111183" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#111183" class="name">
  <strong class="user"><em>Gerd Christian Kunze</em></strong></a><a class="genanchor" href="#111183"> &para;</a><div class="date" title="2013-01-23 12:34"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111183">
<div class="phpcode"><code><span class="html">odbc_num_rows does return -1 when it shouldn't. 
<br />
<br />i used this code:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if( </span><span class="default">odbc_num_rows</span><span class="keyword">( </span><span class="default">$Result </span><span class="keyword">) ) {
<br />   while( </span><span class="default">false </span><span class="keyword">!== ( </span><span class="default">$Row </span><span class="keyword">= @</span><span class="default">odbc_fetch_array</span><span class="keyword">( </span><span class="default">$Result </span><span class="keyword">) ) ) {
<br />     </span><span class="comment">// do something with $Row
<br />   </span><span class="keyword">}
<br />}
<br />else {
<br />   return </span><span class="default">false</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />and it didn't work... obviously
<br />
<br />but this while loop will skip an empty result set anyway, so i use this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while( </span><span class="default">false </span><span class="keyword">!== ( </span><span class="default">$Row </span><span class="keyword">= @</span><span class="default">odbc_fetch_array</span><span class="keyword">( </span><span class="default">$Result </span><span class="keyword">) ) ) {
<br />  </span><span class="comment">// do something with $Row
<br /></span><span class="keyword">}
<br />if( ! </span><span class="default">odbc_num_rows</span><span class="keyword">( </span><span class="default">$Result </span><span class="keyword">) ) {
<br />   return </span><span class="default">false</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />because after processing the $Result with fetch, odbc_num_rows reports the correct count (false|0..n) ... magic :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="78857">  <div class="votes">
    <div id="Vu78857">
    <a href="/manual/vote-note.php?id=78857&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78857">
    <a href="/manual/vote-note.php?id=78857&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78857" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#78857" class="name">
  <strong class="user"><em>Nathaniel at comtel dot com dot au</em></strong></a><a class="genanchor" href="#78857"> &para;</a><div class="date" title="2007-10-30 08:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78857">
<div class="phpcode"><code><span class="html">My development computer is running XP sql2005 while the production copy sits on a server 2003R2 sql2000 computer.<br /><br />In the course of trying to get this function to work (switching from mssql to odbc) I have discovered that the ODBC driver versions are different between the two OS and that while the newer version (release date 17/2/07) that is able to be installed on 2003 handles this function fine, the older version doesn't.<br /><br />Microsoft sites suggest that Vista might also handle it (ie have the newer driver). It also says that there are no plans to release the newer driver in a installable package.<br /><br /><a href="http://support.microsoft.com/kb/892854" rel="nofollow" target="_blank">http://support.microsoft.com/kb/892854</a><br /><br />Will hopefully test with the sql2005 on server 2003R2 in the near future to confirm it is the driver helping here.</span></code></div>
  </div>
 </div>
  <div class="note" id="73637">  <div class="votes">
    <div id="Vu73637">
    <a href="/manual/vote-note.php?id=73637&amp;page=function.odbc-num-rows&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73637">
    <a href="/manual/vote-note.php?id=73637&amp;page=function.odbc-num-rows&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73637" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#73637" class="name">
  <strong class="user"><em>voland at digitalshop dot ru</em></strong></a><a class="genanchor" href="#73637"> &para;</a><div class="date" title="2007-03-05 05:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73637">
<div class="phpcode"><code><span class="html">After a hour for a searching a good alter function of odbc_num_rows... i try to write it by mysels:<br /><br />function useful_odbc_num_rows($result){<br /><br />   $num_rows=0;<br /><br />   while($temp = odbc_fetch_into($result, &amp;$counter))<br /><br />   {<br />       $num_rows++;<br />   }<br /><br />@odbc_fetch_row($result, 0);   // reset cursor<br /><br />   return $num_rows;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-num-rows&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-num-rows.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
