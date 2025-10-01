<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: odbc_result - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.odbc-result.php">
 <link rel="shorturl" href="https://www.php.net/odbc-result">
 <link rel="alternate" href="https://www.php.net/odbc-result" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.uodbc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.odbc-procedures.php">
 <link rel="next" href="https://www.php.net/manual/en/function.odbc-result-all.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.odbc-result.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.odbc-result.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.odbc-result.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.odbc-result.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.odbc-result.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.odbc-result.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.odbc-result.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.odbc-result.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.odbc-result.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.odbc-result.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.odbc-result.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get result data" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: odbc_result - Manual" />
<meta name="twitter:description" content="Get result data" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: odbc_result - Manual" />
<meta itemprop="description" content="Get result data" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get result data" />

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
        <a href="function.odbc-result-all.php">
          odbc_result_all &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.odbc-procedures.php">
          &laquo; odbc_procedures        </a>
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
            <option value='en/function.odbc-result.php' selected="selected">English</option>
            <option value='de/function.odbc-result.php'>German</option>
            <option value='es/function.odbc-result.php'>Spanish</option>
            <option value='fr/function.odbc-result.php'>French</option>
            <option value='it/function.odbc-result.php'>Italian</option>
            <option value='ja/function.odbc-result.php'>Japanese</option>
            <option value='pt_BR/function.odbc-result.php'>Brazilian Portuguese</option>
            <option value='ru/function.odbc-result.php'>Russian</option>
            <option value='tr/function.odbc-result.php'>Turkish</option>
            <option value='uk/function.odbc-result.php'>Ukrainian</option>
            <option value='zh/function.odbc-result.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.odbc-result" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">odbc_result</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">odbc_result</span> &mdash; <span class="dc-title">Get result data</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.odbc-result-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>odbc_result</strong></span>(<span class="methodparam"><span class="type">Odbc\Result</span> <code class="parameter">$statement</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$field</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>|<span class="type"><a href="language.types.null.php" class="type null">null</a></span></span></div>

  <p class="para rdfs-comment">
   Get result data
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.odbc-result-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">statement</code></dt>
     <dd>
      <p class="para">
       The ODBC result object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">field</code></dt>
     <dd>
      <p class="para">
       The field name being retrieved. It can either be an integer containing
       the column number of the field you want; or it can be a string
       containing the name of the field.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.odbc-result-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the string contents of the field, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error, <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> for
   NULL data, or <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> for binary data.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.odbc-result-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.odbc-result-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   The first call to <span class="function"><strong>odbc_result()</strong></span> returns the
   value of the third field in the current record of the query
   result. The second function call to
   <span class="function"><strong>odbc_result()</strong></span> returns the value of the field
   whose field name is &quot;val&quot; in the current record of the query
   result. An error occurs if a column number parameter for a field
   is less than one or exceeds the number of columns (or fields) in
   the current record. Similarly, an error occurs if a field with a
   name that is not one of the fieldnames of the table(s) that
   is(are) being queried.
  </p>
  <p class="para">
   <div class="example" id="example-1105">
    <p><strong>Example #1 <span class="function"><strong>odbc_result()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$item_3   </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$Query_ID</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$item_val </span><span style="color: #007700">= </span><span style="color: #0000BB">odbc_result</span><span style="color: #007700">(</span><span style="color: #0000BB">$Query_ID</span><span style="color: #007700">, </span><span style="color: #DD0000">"val"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.odbc-result-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   Field indices start from 1. Regarding the way binary or
   long column data is returned refer to
   <span class="function"><a href="function.odbc-binmode.php" class="function">odbc_binmode()</a></span> and
   <span class="function"><a href="function.odbc-longreadlen.php" class="function">odbc_longreadlen()</a></span>.
   
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/uodbc/functions/odbc-result.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.odbc-result%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.odbc-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-result.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="6908">  <div class="votes">
    <div id="Vu6908">
    <a href="/manual/vote-note.php?id=6908&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd6908">
    <a href="/manual/vote-note.php?id=6908&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V6908" title="71% like this...">
    3
    </div>
  </div>
  <a href="#6908" class="name">
  <strong class="user"><em>dinin at fas dot harvard dot edu</em></strong></a><a class="genanchor" href="#6908"> &para;</a><div class="date" title="2000-07-21 09:35"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom6908">
<div class="phpcode"><code><span class="html">Here's a limitation that isn't mentioned anywhere (that I could see) and gave me a rather large headache for a couple of hours trying to figure out why my database wasn't initializing correctly.
<br />If you are trying to retrieve a large collection of fields from a database, be aware that odbc_result may only return up to 33 result columns.  Any more than that, and it generates a "result out of range" warning in your script.
<br />(I tried adjusting to have 32 fields, with the same bug.) It generates an error "Warning: Field index is larger than the number of fields inyour-script.php on line 70" ANY time you try to retrieve the last field of a sufficiently large record. What worked for me was just to write the last column twice... that way, the query has 34 fields, but the last two are the same. You know it'll crash if you ask for #34, but just use ODBC_result(current_query, 33) and you won't have a problem. Good luck
<br />
<br />-D</span></code></div>
  </div>
 </div>
  <div class="note" id="94364">  <div class="votes">
    <div id="Vu94364">
    <a href="/manual/vote-note.php?id=94364&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94364">
    <a href="/manual/vote-note.php?id=94364&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94364" title="58% like this...">
    3
    </div>
  </div>
  <a href="#94364" class="name">
  <strong class="user"><em>lucas at bizzfone dot nl</em></strong></a><a class="genanchor" href="#94364"> &para;</a><div class="date" title="2009-10-30 03:24"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94364">
<div class="phpcode"><code><span class="html">The odbc_result() function has an apparently little known feature that comes in very handy when retrieving large text or binary fields.<br />Consider this code snippet to retrieve a large value into a temporary file (error testing left out for clarity):<br /><br /><span class="default">&lt;?php<br />$con</span><span class="keyword">=</span><span class="default">odbc_connect</span><span class="keyword">(...);<br /></span><span class="default">$query</span><span class="keyword">=</span><span class="string">"set textsize 2147483647 "</span><span class="keyword">.<br />       </span><span class="string">"select someLargeField from ..."</span><span class="keyword">;<br /></span><span class="default">$resultset</span><span class="keyword">=</span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">,</span><span class="default">$query</span><span class="keyword">);<br /></span><span class="default">odbc_binmode</span><span class="keyword">(</span><span class="default">$resultset</span><span class="keyword">,</span><span class="default">ODBC_BINMODE_RETURN</span><span class="keyword">);<br /></span><span class="default">odbc_longreadlen</span><span class="keyword">(</span><span class="default">$resultset</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);<br />while (</span><span class="default">odbc_fetch_row</span><span class="keyword">(</span><span class="default">$resultset</span><span class="keyword">)) {<br />   </span><span class="default">$fileHandle</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/tmp/myfile'</span><span class="keyword">,</span><span class="string">'wb'</span><span class="keyword">);<br />   while ((</span><span class="default">$chunk</span><span class="keyword">=</span><span class="default">odbc_result</span><span class="keyword">(</span><span class="default">$resultset</span><span class="keyword">,</span><span class="string">'someLargeField'</span><span class="keyword">))!==</span><span class="default">false</span><span class="keyword">) {<br />      </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fileHandle</span><span class="keyword">,</span><span class="default">$chunk</span><span class="keyword">);<br />   }<br />   </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fileHandle</span><span class="keyword">);<br />   </span><span class="comment">//do something with the file<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />There are a few key points to make it work:<br />- Make sure to include "set textsize 2147483647 " in your query.<br />  Without it, MSSQL truncates large values to 4096 bytes by default.<br />  Other databases may have a similar small limit.<br />- The odbc_binmode() and odbc_longreadlen() calls are just for safety.<br />  Their defaults in php.ini are usually correct.<br />- Each odbc_result() call on a large field apparently returns the next chunk.<br />  Of course you have to read all chunks before the next odbc_fetch_row() call.<br />- When all of the large value has been read, odbc_result() will return false.<br /><br />Note: Using mssql_ instead of odbc_ functions is not a viable alternative. They don't work with chunks (AFAIK) and even crash php (overflow, segmentation fault) when the query result contains a large value.</span></code></div>
  </div>
 </div>
  <div class="note" id="28722">  <div class="votes">
    <div id="Vu28722">
    <a href="/manual/vote-note.php?id=28722&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28722">
    <a href="/manual/vote-note.php?id=28722&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28722" title="62% like this...">
    2
    </div>
  </div>
  <a href="#28722" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#28722"> &para;</a><div class="date" title="2003-01-22 06:43"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28722">
<div class="phpcode"><code><span class="html">From <a href="http://www.php.net/manual/en/function.odbc-longreadlen.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.odbc-longreadlen.php</a> but relevant here, also. <br /><br />An alternative is to adjust your php.ini file and set:<br />odbc.defaultlrl=65536<br />Or something else sufficiently large.<br />lrl = long read length<br /><br />to get around the limit on returned chars.</span></code></div>
  </div>
 </div>
  <div class="note" id="13147">  <div class="votes">
    <div id="Vu13147">
    <a href="/manual/vote-note.php?id=13147&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13147">
    <a href="/manual/vote-note.php?id=13147&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13147" title="60% like this...">
    1
    </div>
  </div>
  <a href="#13147" class="name">
  <strong class="user"><em>user at frosch dot org</em></strong></a><a class="genanchor" href="#13147"> &para;</a><div class="date" title="2001-05-30 08:55"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13147">
<div class="phpcode"><code><span class="html">Hopefully useful note on accessing TEXT fields on Windows, using PHP's ODBC support to access Sybase*. With the following code:
<br />
<br />"SELECT status AS projstatus,oid AS projident,LOWER(title) AS projtitel,startsOn AS projanfang,terminatesOn AS projende,description AS projinfo FROM Project ORDER BY projtitel ASC"
<br />
<br />I was getting a strange error:
<br />
<br />  Warning: SQL error: [INTERSOLV][ODBC SQL Server driver][SQL Server]Invalid column name 'projanfang'. , SQL state S0022 in SQLGetData in [**scriptname and path removed**] on line 126
<br />
<br />even though I was clearly selecting a field as 'projanfang'. The reason I worked out eventually is that Sybase/ODBC attempts to do a conversion on the TEXT field 'description', which fails since the limit for CONVERT is 255 characters, and TEXT is a field type with a  2 GB limit. I am not sure why it doesn't work implicitly, but it does explicitly. The following code will work without errors:
<br />
<br />  "SELECT status AS projstatus,oid AS projident,LOWER(title) AS projtitel,startsOn AS projanfang,terminatesOn AS projende,CONVERT(CHAR(255),description) AS projinfo FROM Project ORDER BY projtitel ASC"
<br />
<br />What you do if you have a need for more than 255 characters of your text field, I do not know :(. I have also tried longreadlen, but I couldn't work out how it could be used.
<br />
<br />* System details: Windows NT 4.0 SP6a, IIS 4.0, Sybase 11.5 Adaptive Enteprise, PHP 4.0.5.</span></code></div>
  </div>
 </div>
  <div class="note" id="23299">  <div class="votes">
    <div id="Vu23299">
    <a href="/manual/vote-note.php?id=23299&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23299">
    <a href="/manual/vote-note.php?id=23299&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23299" title="50% like this...">
    0
    </div>
  </div>
  <a href="#23299" class="name">
  <strong class="user"><em>murat at nospam dot robcol dot k12 dot tr</em></strong></a><a class="genanchor" href="#23299"> &para;</a><div class="date" title="2002-07-15 02:44"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23299">
<div class="phpcode"><code><span class="html">When trying to get a date/time field from an Access database, odbc_result returns the date as text (e.g. 1998-07-11 21:12:23). You may use strtotime function to convert this into a format which can be used with PHP.<br /><br />e.g.<br />echo "The date is "<br /> .date("r",strtotime(odbc_result($myquery,"mydate")));</span></code></div>
  </div>
 </div>
  <div class="note" id="9956">  <div class="votes">
    <div id="Vu9956">
    <a href="/manual/vote-note.php?id=9956&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9956">
    <a href="/manual/vote-note.php?id=9956&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9956" title="50% like this...">
    0
    </div>
  </div>
  <a href="#9956" class="name">
  <strong class="user"><em>nomail at nomail dot nomail</em></strong></a><a class="genanchor" href="#9956"> &para;</a><div class="date" title="2000-12-04 05:00"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9956">
<div class="phpcode"><code><span class="html">Problem: Function returns a max of 4095 bytes of a cell with one call.
<br />
<br />Tip: If you have a cell containing more than 4095 bytes, write a loop and call the cell over and over as long return is not "". All returns can be added up to the whole string.</span></code></div>
  </div>
 </div>
  <div class="note" id="9324">  <div class="votes">
    <div id="Vu9324">
    <a href="/manual/vote-note.php?id=9324&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9324">
    <a href="/manual/vote-note.php?id=9324&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9324" title="50% like this...">
    0
    </div>
  </div>
  <a href="#9324" class="name">
  <strong class="user"><em>dac at felspar dot com</em></strong></a><a class="genanchor" href="#9324"> &para;</a><div class="date" title="2000-10-27 07:43"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9324">
<div class="phpcode"><code><span class="html">FWIW, ADO and similar ODBC-using interfaces also cannot distinguish between A.id and B.id. The easy solution is aliasing in SQL:
<br />
<br />Consider a table "A" consisting only of the column "id". Next, consider the following query:
<br />
<br />SELECT * FROM A JOIN B ON A.id=B.id
<br />
<br />With ODBC, you'd be forced to use the numerical index, rather than the name. However, you could rewrite the query, too:
<br />
<br />SELECT A.id AS A_id, B.id AS B_id FROM A JOIN B ON A.id=B.id
<br />
<br />This can be better on three counts:
<br />
<br />Firstly, unless you really want everything in the result set, it might be faster. SQL servers can be faster with "*", but often the networking will benefit from less data (Or a smaller tuple width, if you're into database jargon).
<br />
<br />Secondly, since you're forced into thinking about what you want out of the query, you'll probably write better SQL as a result.
<br />
<br />Thirdly, if you change the query - or tables - slightly, you don't have to revisit all your code to cope with the change.
<br />
<br />Aplogies for stating the obvious, and having no imagination with my examples.</span></code></div>
  </div>
 </div>
  <div class="note" id="669">  <div class="votes">
    <div id="Vu669">
    <a href="/manual/vote-note.php?id=669&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd669">
    <a href="/manual/vote-note.php?id=669&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V669" title="50% like this...">
    0
    </div>
  </div>
  <a href="#669" class="name">
  <strong class="user"><em>jniels23 at csc dot com</em></strong></a><a class="genanchor" href="#669"> &para;</a><div class="date" title="1999-03-24 08:31"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom669">
<div class="phpcode"><code><span class="html">Beware if you have fields with the same name in a result
<br />
<br /><span class="default">&lt;?php 
<br />$res </span><span class="keyword">= </span><span class="default">odbc_exec</span><span class="keyword">(</span><span class="default">$conn</span><span class="keyword">,</span><span class="string">"select * from PeopleMR,People,Role,Organisation"</span><span class="keyword">.
<br /></span><span class="string">" WHERE PeopleMR.MeetingID = </span><span class="default">$MeetingID</span><span class="string">" </span><span class="keyword">.
<br /></span><span class="string">" ORDER BY People.Surname"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />I have the field "Name" from both TABLE Role and TABLE Organisation, as for MySQL you would do :
<br />
<br /><span class="default">&lt;?php
<br />mysql_result</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="string">"Role.Name"</span><span class="keyword">);   
<br /></span><span class="default">mysql_result</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="string">"Organisation.Name"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />but with odbc you do :
<br />
<br /><span class="default">&lt;?php odbc_result</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="string">"Name"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />this gives you the result of TABLE Role "Name" so you have to find the Field Number for the Organisation"Name" to have the correct result.</span></code></div>
  </div>
 </div>
  <div class="note" id="28678">  <div class="votes">
    <div id="Vu28678">
    <a href="/manual/vote-note.php?id=28678&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28678">
    <a href="/manual/vote-note.php?id=28678&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28678" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#28678" class="name">
  <strong class="user"><em>fate at doityourself dot com</em></strong></a><a class="genanchor" href="#28678"> &para;</a><div class="date" title="2003-01-20 09:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28678">
<div class="phpcode"><code><span class="html">if you want to quickly change a website from odbc- to mysql-data-access, you could use a simple function like this one:<br />function myresult ($cur,$nr) { <br />   return mysql_result($cur,0,mysql_field_name($cur,$nr-1)); <br />}<br />and just do a global replace from "odbc_result" to "myresult".<br /><br />beware, you should only use this if you don't care too much about performance, as this will start a query for every field you request - the better way is of course using mysql_fetch_row!</span></code></div>
  </div>
 </div>
  <div class="note" id="14445">  <div class="votes">
    <div id="Vu14445">
    <a href="/manual/vote-note.php?id=14445&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14445">
    <a href="/manual/vote-note.php?id=14445&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14445" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#14445" class="name">
  <strong class="user"><em>huevo dot SP at M dot earthling dot net</em></strong></a><a class="genanchor" href="#14445"> &para;</a><div class="date" title="2001-07-31 03:46"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14445">
<div class="phpcode"><code><span class="html">With an Access 2K database, odbc_result will only work the first time it is called on a memo field (odbc_field_type returns 'LONGCHAR').
<br />
<br />$good = odbc_result($result,'Description');
<br /># $good holds the field value
<br />$fail = odbc_result($result,'Description');
<br /># $fail holds false
<br />
<br />This tripped me up when I did something like this:
<br />
<br />for ($i=1; $i&lt;=odbc_num_fields($result); $i++) {
<br />  if(odbc_result($result,$i)){
<br />    ... more code ...
<br />    echo odbc_result($result,$i);
<br />    ... snip ...
<br />  }
<br />}
<br />
<br />For any field type except memo, this code works perfectly.  But on memo fields, odbc_result returns false on the second call and nothing is echoed.
<br />
<br />Be careful, use a temporary variable instead of multiple calls to odbc_result.  (It's good programming practice anyway)
<br />
<br />for (...) {
<br />  $temp = odbc_result($result,$i);
<br />  if($temp){
<br />    ...
<br />    echo $temp;
<br />    ...
<br />  }
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="51039">  <div class="votes">
    <div id="Vu51039">
    <a href="/manual/vote-note.php?id=51039&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51039">
    <a href="/manual/vote-note.php?id=51039&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51039" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#51039" class="name">
  <strong class="user"><em>baoshenyi at hotmail dot com</em></strong></a><a class="genanchor" href="#51039"> &para;</a><div class="date" title="2005-03-17 10:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51039">
<div class="phpcode"><code><span class="html">I use one store procedure to retrieve value of identifier, other, name, section,data and datecreated coulmns to variable from SQL server table <br /><br />using $odbc_result = odbc_exec($connect,$query); function.<br /><br />After that, I using following code,<br />for($f=1;$f&lt;=odbc_num_fields($odbc_result);$f++) {echo "&lt;td style=\"font-weight:bold\"&gt;$f ".odbc_field_name($odbc_result,$f)."&lt;/td&gt;";}<br />echo "&lt;/tr&gt;&lt;/table&gt;";<br />odbc_fetch_row($odbc_result);<br />echo odbc_result($odbc_result,1)."&lt;br&gt;";<br />echo odbc_result($odbc_result,2)."&lt;br&gt;";<br />echo odbc_result($odbc_result,3)."&lt;br&gt;";<br />echo odbc_result($odbc_result,4)."&lt;br&gt;";<br />echo odbc_result($odbc_result,5)."&lt;br&gt;";<br />echo odbc_result($odbc_result,6)."&lt;br&gt;";<br /><br />The result is as following,<br />1 identifier 2 other 3 name 4 section 5 data 6 datecreated <br />id1<br />other2<br />name3<br />section4<br />Warning: odbc_result() [function.odbc-result]: SQL error: [Microsoft][ODBC SQL Server Driver]Invalid Descriptor Index, SQL state S1002 in SQLGetData in d:\lawdepot_test\contracts\common\LicensingSQL.php on line 630<br />2005-03-16 18:12:00<br /><br />I can not get "data"(Text column) back. Firstly, I think "data" column is too long for odbc_result($odbc_result,5) function, but after I check my old colde, I found I can get the "data" back using same function odbc_result().<br /><br />I would like to hear any suggestions from you. Depressed on this question.<br /><br />Michael</span></code></div>
  </div>
 </div>
  <div class="note" id="31746">  <div class="votes">
    <div id="Vu31746">
    <a href="/manual/vote-note.php?id=31746&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31746">
    <a href="/manual/vote-note.php?id=31746&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31746" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#31746" class="name">
  <strong class="user"><em>vlad dot posea at mymail dot ro</em></strong></a><a class="genanchor" href="#31746"> &para;</a><div class="date" title="2003-05-02 04:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31746">
<div class="phpcode"><code><span class="html">i use odbc and mysql and i noticed after losing a lot of time that if you write something like this:<br />echo odbc_result($result,1); <br />....<br />echo odbc_result($result,1);<br />the second echo will fail. so it's more useful to save the result of odbc_result in a variable and use it later<br />like that: $var=odbc_result($result,1);<br />i hope this will be useful!</span></code></div>
  </div>
 </div>
  <div class="note" id="108330">  <div class="votes">
    <div id="Vu108330">
    <a href="/manual/vote-note.php?id=108330&amp;page=function.odbc-result&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108330">
    <a href="/manual/vote-note.php?id=108330&amp;page=function.odbc-result&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108330" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#108330" class="name">
  <strong class="user"><em>cgray at develop4 dot us</em></strong></a><a class="genanchor" href="#108330"> &para;</a><div class="date" title="2012-04-17 09:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108330">
<div class="phpcode"><code><span class="html">FYI: odbc_result contains the following values: TABLE_QUALIFIER    TABLE_OWNER    TABLE_NAME    COLUMN_NAME    DATA_TYPE    TYPE_NAME    PRECISION    LENGTH    SCALE    RADIX    NULLABLE    REMARKS    COLUMN_FLAGS<br /><br />I wrote the following to dump these values onto the page. I needed this to determine if the data-type for a column was something specific (eg: blob) to show a different result, instead of the actual contents. <br /><br />        $connection_string = 'OPTIM_BLOB';<br />        $user = '';<br />        $pass = '';        <br />        if (!($connect = odbc_pconnect($connection_string, $user, $pass))) {<br />            <br />        } else {<br />            echo 'Connecting to DSN, loading tables&lt;br /&gt;&lt;br /&gt;';<br />            $result = odbc_tables($myconn);<br />            $tables = array();<br />            while (odbc_fetch_row($result)){<br />                if(odbc_result($result,"TABLE_TYPE")=="TABLE") {<br />                    $TableName = odbc_result($result,"TABLE_NAME");<br />                    echo '&lt;span id="tableName"&gt;Table: '.$TableName.'&lt;/span&gt; ....&lt;br /&gt;&lt;br /&gt; ';<br />                    //--------- Show Columns in that table ---------------<br />                    $result2 = odbc_columns($myconn, '', "%", $TableName, "%");  //db connection, DB name, schema, table name, column_name);<br /><br />                    while(odbc_fetch_row($result2)){<br />                        //TABLE_QUALIFIER    TABLE_OWNER    TABLE_NAME    COLUMN_NAME    DATA_TYPE    TYPE_NAME    PRECISION    LENGTH    SCALE    RADIX    NULLABLE    REMARKS    COLUMN_FLAGS<br />                        <br />                        $COLUMN_NAME = odbc_result($result2, 4); // COLUMN_NAME<br />                        $DataType = odbc_result($result2, 6);<br />                        echo '&lt;b&gt;Column name: '.$COLUMN_NAME.'&lt;/b&gt; Type: '.$DataType.'&lt;br /&gt;&lt;br /&gt;';<br /><br />                        // everything<br />                        echo '1: '.odbc_result($result2, 1).'&lt;br /&gt;';    // TABLE_QUALIFIER<br />                        echo '2: '.odbc_result($result2, 2).'&lt;br /&gt;';    // TABLE_OWNER<br />                        echo '3: '.odbc_result($result2, 3).'&lt;br /&gt;';    // TABLE_NAME<br />                        echo '4: '.odbc_result($result2, 4).'&lt;br /&gt;';    // COLUMN_NAME<br />                        echo '5: '.odbc_result($result2, 5).'&lt;br /&gt;';    // DATA_TYPE (Number)<br />                        echo '6: '.odbc_result($result2, 6).'&lt;br /&gt;';    // TYPE_NAME (String)<br />                        echo '7: '.odbc_result($result2, 7).'&lt;br /&gt;';    // PRECISION<br />                        echo '8: '.odbc_result($result2, 8).'&lt;br /&gt;';    // LENGTH<br />                        echo '9: '.odbc_result($result2, 9).'&lt;br /&gt;';    // SCALE<br />                        echo '10: '.odbc_result($result2, 10).'&lt;br /&gt;';    // RADIX<br />                        echo '11: '.odbc_result($result2, 11).'&lt;br /&gt;';    // NULLABLE<br />                        echo '12: '.odbc_result($result2, 12).'&lt;br /&gt;';    // REMARKS<br />                        echo '13: '.odbc_result($result2, 13).'&lt;br /&gt;';    // COLUMN_FLAGS<br />                        echo '&lt;br /&gt;&lt;br /&gt;';<br />                    }<br />                }<br />            }<br />        }</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.odbc-result&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.odbc-result.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
