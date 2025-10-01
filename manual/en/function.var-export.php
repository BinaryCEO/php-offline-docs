<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: var_export - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.var-export.php">
 <link rel="shorturl" href="https://www.php.net/var-export">
 <link rel="alternate" href="https://www.php.net/var-export" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.var-dump.php">
 <link rel="next" href="https://www.php.net/manual/en/refs.webservice.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.var-export.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.var-export.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.var-export.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.var-export.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.var-export.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.var-export.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.var-export.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.var-export.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.var-export.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.var-export.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.var-export.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Outputs or returns a parsable string representation of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: var_export - Manual" />
<meta name="twitter:description" content="Outputs or returns a parsable string representation of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: var_export - Manual" />
<meta itemprop="description" content="Outputs or returns a parsable string representation of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Outputs or returns a parsable string representation of a variable" />

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
        <a href="refs.webservice.php">
          Web Services &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.var-dump.php">
          &laquo; var_dump        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.var-export.php' selected="selected">English</option>
            <option value='de/function.var-export.php'>German</option>
            <option value='es/function.var-export.php'>Spanish</option>
            <option value='fr/function.var-export.php'>French</option>
            <option value='it/function.var-export.php'>Italian</option>
            <option value='ja/function.var-export.php'>Japanese</option>
            <option value='pt_BR/function.var-export.php'>Brazilian Portuguese</option>
            <option value='ru/function.var-export.php'>Russian</option>
            <option value='tr/function.var-export.php'>Turkish</option>
            <option value='uk/function.var-export.php'>Ukrainian</option>
            <option value='zh/function.var-export.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.var-export" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">var_export</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">var_export</span> &mdash; <span class="dc-title">Outputs or returns a parsable string representation of a variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.var-export-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>var_export</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$return</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span></div>

  <p class="simpara">
   <span class="function"><strong>var_export()</strong></span> gets structured information about the 
   given variable. It is similar to <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>
   with one exception: the returned representation is valid PHP code.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.var-export-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable you want to export.
      </p>
     </dd>
    
    
     <dt><code class="parameter">return</code></dt>
     <dd>
      <p class="para">
       If used and set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, <span class="function"><strong>var_export()</strong></span> will return
       the variable representation instead of outputting it.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.var-export-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the variable representation when the <code class="parameter">return</code> 
   parameter is used and evaluates to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>. Otherwise, this function will
   return <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.var-export-changelog">
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
       <td>8.2.0</td>
       <td>
        Exported class names are now fully qualified; previously, the leading
        backslash was ommitted.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Now exports <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> objects as an array cast to
        an object (<code class="code">(object) array( ... )</code>), rather than using the
        nonexistent method <span class="methodname"><strong>stdClass::__setState()</strong></span>.
        The practical effect is that now <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span> is
        exportable, and the resulting code will even work on earlier versions of
        PHP.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.var-export-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5678">
    <p><strong>Example #1 <span class="function"><strong>var_export()</strong></span> Examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array (</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, array (</span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array (
  0 =&gt; 1,
  1 =&gt; 2,
  2 =&gt; 
  array (
    0 =&gt; &#039;a&#039;,
    1 =&gt; &#039;b&#039;,
    2 =&gt; &#039;c&#039;,
  ),
)</pre>
</div>
    </div>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$b </span><span style="color: #007700">= </span><span style="color: #0000BB">3.1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$v </span><span style="color: #007700">= </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">3.1</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5679">
    <p><strong>Example #2 Exporting stdClass (since PHP 7.3.0)</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$person </span><span style="color: #007700">= new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$person</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name </span><span style="color: #007700">= </span><span style="color: #DD0000">'ElePHPant ElePHPantsdotter'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$person</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">website </span><span style="color: #007700">= </span><span style="color: #DD0000">'https://php.net/elephpant.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$person</span><span style="color: #007700">);</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">(object) array(
   &#039;name&#039; =&gt; &#039;ElePHPant ElePHPantsdotter&#039;,
   &#039;website&#039; =&gt; &#039;https://php.net/elephpant.php&#039;,
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5680">
    <p><strong>Example #3 Exporting classes</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A </span><span style="color: #007700">{ public </span><span style="color: #0000BB">$var</span><span style="color: #007700">; }<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">\A::__set_state(array(
   &#039;var&#039; =&gt; 5,
))</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5681">
    <p><strong>Example #4 Using <a href="language.oop5.magic.php#object.set-state" class="link">__set_state()</a></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">A<br /></span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$var1</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$var2</span><span style="color: #007700">;<br /><br />    public static function </span><span style="color: #0000BB">__set_state</span><span style="color: #007700">(</span><span style="color: #0000BB">$an_array</span><span style="color: #007700">)<br />    {<br />        </span><span style="color: #0000BB">$obj </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var1 </span><span style="color: #007700">= </span><span style="color: #0000BB">$an_array</span><span style="color: #007700">[</span><span style="color: #DD0000">'var1'</span><span style="color: #007700">];<br />        </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var2 </span><span style="color: #007700">= </span><span style="color: #0000BB">$an_array</span><span style="color: #007700">[</span><span style="color: #DD0000">'var2'</span><span style="color: #007700">];<br />        return </span><span style="color: #0000BB">$obj</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= new </span><span style="color: #0000BB">A</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var1 </span><span style="color: #007700">= </span><span style="color: #0000BB">5</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">var2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">;<br /><br />eval(</span><span style="color: #DD0000">'$b = ' </span><span style="color: #007700">. </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">';'</span><span style="color: #007700">); </span><span style="color: #FF8000">// $b = A::__set_state(array(<br />                                            //    'var1' =&gt; 5,<br />                                            //    'var2' =&gt; 'foo',<br />                                            // ));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">object(A)#2 (2) {
  [&quot;var1&quot;]=&gt;
  int(5)
  [&quot;var2&quot;]=&gt;
  string(3) &quot;foo&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.var-export-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Variables of type <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> couldn&#039;t be exported by this
    function.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    <span class="function"><strong>var_export()</strong></span> does not handle circular references as
    it would be close to impossible to generate parsable PHP code for that.
    If you want to do something with the full representation of an array
    or object, use <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span>.
   </p>
  </p></blockquote>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    Prior to PHP 8.2.0, when <span class="function"><strong>var_export()</strong></span> exports objects,
    the leading backslash is not included in the class name of namespaced classes for maximum compatibility.
   </p>
  </div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    To be able to evaluate the PHP generated by <span class="function"><strong>var_export()</strong></span>,
    all processed objects must implement the magic <a href="language.oop5.magic.php#object.set-state" class="link">__set_state</a> method. The only exception is
    <span class="classname"><a href="class.stdclass.php" class="classname">stdClass</a></span>, which is exported using an array cast to
    an object.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.var-export-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.print-r.php" class="function" rel="rdfs-seeAlso">print_r()</a> - Prints human-readable information about a variable</span></li>
    <li><span class="function"><a href="function.serialize.php" class="function" rel="rdfs-seeAlso">serialize()</a> - Generates a storable representation of a value</span></li>
    <li><span class="function"><a href="function.var-dump.php" class="function" rel="rdfs-seeAlso">var_dump()</a> - Dumps information about a variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/var-export.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.var-export%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.var-export&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.var-export.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">21 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124194">  <div class="votes">
    <div id="Vu124194">
    <a href="/manual/vote-note.php?id=124194&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124194">
    <a href="/manual/vote-note.php?id=124194&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124194" title="88% like this...">
    33
    </div>
  </div>
  <a href="#124194" class="name">
  <strong class="user"><em>steven at nevvix dot com</em></strong></a><a class="genanchor" href="#124194"> &para;</a><div class="date" title="2019-09-13 03:52"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124194">
<div class="phpcode"><code><span class="html">I improved my previous varexport().<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * PHP var_export() with short array syntax (square brackets) indented 2 spaces.<br /> *<br /> * NOTE: The only issue is when a string value has `=&gt;\n[`, it will get converted to `=&gt; [`<br /> * @link <a href="https://www.php.net/manual/en/function.var-export.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.var-export.php</a><br /> */<br /></span><span class="keyword">function </span><span class="default">varexport</span><span class="keyword">(</span><span class="default">$expression</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="default">$export </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$expression</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />    </span><span class="default">$patterns </span><span class="keyword">= [<br />        </span><span class="string">"/array \(/" </span><span class="keyword">=&gt; </span><span class="string">'['</span><span class="keyword">,<br />        </span><span class="string">"/^([ ]*)\)(,?)$/m" </span><span class="keyword">=&gt; </span><span class="string">'$1]$2'</span><span class="keyword">,<br />        </span><span class="string">"/=&gt;[ ]?\n[ ]+\[/" </span><span class="keyword">=&gt; </span><span class="string">'=&gt; ['</span><span class="keyword">,<br />        </span><span class="string">"/([ ]*)(\'[^\']+\') =&gt; ([\[\'])/" </span><span class="keyword">=&gt; </span><span class="string">'$1$2 =&gt; $3'</span><span class="keyword">,<br />    ];<br />    </span><span class="default">$export </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$patterns</span><span class="keyword">), </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$patterns</span><span class="keyword">), </span><span class="default">$export</span><span class="keyword">);<br />    if ((bool)</span><span class="default">$return</span><span class="keyword">) return </span><span class="default">$export</span><span class="keyword">; else echo </span><span class="default">$export</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$array </span><span class="keyword">= [<br />    </span><span class="string">'str' </span><span class="keyword">=&gt; </span><span class="string">'Test<br />       spaces'</span><span class="keyword">,<br />       </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">33</span><span class="keyword">,<br />       </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,<br />       [</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="string">'d'</span><span class="keyword">,[]],<br />    </span><span class="string">'arr' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'text with spaces' </span><span class="keyword">=&gt; </span><span class="string">'[Tes\'t"s":<br /> =&gt; [<br /> =&gt; <br />  [<br />   {<br />      spaces'</span><span class="keyword">,<br />    ],<br />    </span><span class="string">"str2" </span><span class="keyword">=&gt; </span><span class="string">"Test's'<br /> } spaces"</span><span class="keyword">,<br />    </span><span class="string">'arr2' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'text with spaces' </span><span class="keyword">=&gt; [<br />            </span><span class="string">'arr3' </span><span class="keyword">=&gt; [<br />                </span><span class="string">'text with spaces' </span><span class="keyword">=&gt; </span><span class="string">'Te": "st \' =&gt; [<br />      spaces'</span><span class="keyword">,<br />            ],<br />        ],<br />    ],<br />];<br /></span><span class="default">varexport</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="comment">// Result:<br /></span><span class="keyword">```</span><span class="string"><br />[<br />  'str' =&gt; 'Test<br />       spaces',<br />  0 =&gt; 33,<br />  1 =&gt; true,<br />  2 =&gt; [<br />    0 =&gt; 3,<br />    1 =&gt; 4,<br />    2 =&gt; 'd',<br />    3 =&gt; [<br />    ],<br />  ],<br />  'arr' =&gt; [<br />    'text with spaces' =&gt; '[Tes\'t"s":<br /> =&gt; [<br /> =&gt; [<br />   {<br />      spaces',<br />  ],<br />  'str2' =&gt; 'Test\'s\'<br /> } spaces',<br />  'arr2' =&gt; [<br />    'text with spaces' =&gt; [<br />      'arr3' =&gt; [<br />        'text with spaces' =&gt; 'Te": "st \' =&gt; [<br />      spaces',<br />      ],<br />    ],<br />  ],<br />]<br /></span><span class="keyword">```<br /></span><span class="default">NOTE</span><span class="keyword">: </span><span class="default">The only issue is when a string value has </span><span class="keyword">`</span><span class="string">=&gt;\n[</span><span class="keyword">`, </span><span class="default">it will get converted to </span><span class="keyword">`</span><span class="string">=&gt; [</span><span class="keyword">`</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122853">  <div class="votes">
    <div id="Vu122853">
    <a href="/manual/vote-note.php?id=122853&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122853">
    <a href="/manual/vote-note.php?id=122853&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122853" title="81% like this...">
    28
    </div>
  </div>
  <a href="#122853" class="name">
  <strong class="user"><em>steven at nevvix dot com</em></strong></a><a class="genanchor" href="#122853"> &para;</a><div class="date" title="2018-06-18 06:24"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122853">
<div class="phpcode"><code><span class="html">/**<br /> * var_export() with square brackets and indented 4 spaces.<br /> */<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">varexport</span><span class="keyword">(</span><span class="default">$expression</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="default">$export </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$expression</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />    </span><span class="default">$export </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/^([ ]*)(.*)/m"</span><span class="keyword">, </span><span class="string">'$1$1$2'</span><span class="keyword">, </span><span class="default">$export</span><span class="keyword">);<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/\r\n|\n|\r/"</span><span class="keyword">, </span><span class="default">$export</span><span class="keyword">);<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">([</span><span class="string">"/\s*array\s\($/"</span><span class="keyword">, </span><span class="string">"/\)(,)?$/"</span><span class="keyword">, </span><span class="string">"/\s=&gt;\s$/"</span><span class="keyword">], [</span><span class="default">NULL</span><span class="keyword">, </span><span class="string">']$1'</span><span class="keyword">, </span><span class="string">' =&gt; ['</span><span class="keyword">], </span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$export </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="default">PHP_EOL</span><span class="keyword">, </span><span class="default">array_filter</span><span class="keyword">([</span><span class="string">"["</span><span class="keyword">] + </span><span class="default">$array</span><span class="keyword">));<br />    if ((bool)</span><span class="default">$return</span><span class="keyword">) return </span><span class="default">$export</span><span class="keyword">; else echo </span><span class="default">$export</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118746">  <div class="votes">
    <div id="Vu118746">
    <a href="/manual/vote-note.php?id=118746&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118746">
    <a href="/manual/vote-note.php?id=118746&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118746" title="76% like this...">
    16
    </div>
  </div>
  <a href="#118746" class="name">
  <strong class="user"><em>Mark P</em></strong></a><a class="genanchor" href="#118746"> &para;</a><div class="date" title="2016-01-29 09:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118746">
<div class="phpcode"><code><span class="html">It doesn't appear to be documented, but the behaviour of `var_export()` changed in PHP 7.<br /><br />Previously, `var_export(3.)` returned "3", now it returns "3.0".</span></code></div>
  </div>
 </div>
  <div class="note" id="113770">  <div class="votes">
    <div id="Vu113770">
    <a href="/manual/vote-note.php?id=113770&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113770">
    <a href="/manual/vote-note.php?id=113770&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113770" title="66% like this...">
    20
    </div>
  </div>
  <a href="#113770" class="name">
  <strong class="user"><em>chudinov at yahoo dot com</em></strong></a><a class="genanchor" href="#113770"> &para;</a><div class="date" title="2013-11-29 09:55"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113770">
<div class="phpcode"><code><span class="html">Looks like since version 5.4.22 var_export uses the serialize_precision ini setting, rather than the precision one used for normal output of floating-point numbers.<br />As a consequence since version 5.4.22 for example var_export(1.1) will output 1.1000000000000001 (17 is default precision value) and not 1.1 as before. <br /><br /><span class="default">&lt;?php <br /></span><span class="comment">//ouput 1.1000000000000001<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">1.1</span><span class="keyword">)<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98483">  <div class="votes">
    <div id="Vu98483">
    <a href="/manual/vote-note.php?id=98483&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98483">
    <a href="/manual/vote-note.php?id=98483&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98483" title="75% like this...">
    8
    </div>
  </div>
  <a href="#98483" class="name">
  <strong class="user"><em>4n4jmza02 at sneakemail dot com</em></strong></a><a class="genanchor" href="#98483"> &para;</a><div class="date" title="2010-06-17 04:50"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98483">
<div class="phpcode"><code><span class="html">I learned the hard way that if var_export encounters a resource handle it exports it as "NULL", even if it is a valid handle. The documentation states that a handle cannot be exported, but it does not describe what happens if you try to do so anyway.<br /><br />I had been using var_export in some debugging code while tracing a problem with a resource handle not being generated and ended up thinking that null handles were still being generated long after the problem had been fixed.</span></code></div>
  </div>
 </div>
  <div class="note" id="114094">  <div class="votes">
    <div id="Vu114094">
    <a href="/manual/vote-note.php?id=114094&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114094">
    <a href="/manual/vote-note.php?id=114094&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114094" title="67% like this...">
    12
    </div>
  </div>
  <a href="#114094" class="name">
  <strong class="user"><em>dan at coders dot co dot nz</em></strong></a><a class="genanchor" href="#114094"> &para;</a><div class="date" title="2014-01-10 02:11"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114094">
<div class="phpcode"><code><span class="html">I found that my complex type was exporting with <br />  stdClass::__set_state()<br />in places. Not only was that strange and messy, it cannot be eval()-ed back in at all. Fatal error. Doh!<br /><br />However a quick string-replace tidy-up of the result rendered it valid again.<br /><br />    $macro = var_export($data, TRUE);<br />    $macro = str_replace("stdClass::__set_state", "(object)", $macro);<br />    $macro = '$data = ' . $macro . ';';<br /><br />And now the string I output *can* be evaluated back in again.</span></code></div>
  </div>
 </div>
  <div class="note" id="54440">  <div class="votes">
    <div id="Vu54440">
    <a href="/manual/vote-note.php?id=54440&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54440">
    <a href="/manual/vote-note.php?id=54440&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54440" title="64% like this...">
    12
    </div>
  </div>
  <a href="#54440" class="name">
  <strong class="user"><em>linus at flowingcreativity dot net</em></strong></a><a class="genanchor" href="#54440"> &para;</a><div class="date" title="2005-07-04 09:50"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54440">
<div class="phpcode"><code><span class="html">&lt;roman at DIESPAM dot feather dot org dot ru&gt;, your function has inefficiencies and problems. I probably speak for everyone when I ask you to test code before you add to the manual.<br /><br />Since the issue of whitespace only comes up when exporting arrays, you can use the original var_export() for all other variable types. This function does the job, and, from the outside, works the same as var_export().<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">var_export_min</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$return </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {<br />        </span><span class="default">$toImplode </span><span class="keyword">= array();<br />        foreach (</span><span class="default">$var </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$toImplode</span><span class="keyword">[] = </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">).</span><span class="string">'=&gt;'</span><span class="keyword">.</span><span class="default">var_export_min</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />        }<br />        </span><span class="default">$code </span><span class="keyword">= </span><span class="string">'array('</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$toImplode</span><span class="keyword">).</span><span class="string">')'</span><span class="keyword">;<br />        if (</span><span class="default">$return</span><span class="keyword">) return </span><span class="default">$code</span><span class="keyword">;<br />        else echo </span><span class="default">$code</span><span class="keyword">;<br />    } else {<br />        return </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$return</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100302">  <div class="votes">
    <div id="Vu100302">
    <a href="/manual/vote-note.php?id=100302&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100302">
    <a href="/manual/vote-note.php?id=100302&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100302" title="65% like this...">
    9
    </div>
  </div>
  <a href="#100302" class="name">
  <strong class="user"><em>laszlo dot heredy at gmail dot com</em></strong></a><a class="genanchor" href="#100302"> &para;</a><div class="date" title="2010-10-06 01:57"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100302">
<div class="phpcode"><code><span class="html">Try this function instead of var_export($GLOBALS) or var_dump($GLOBALS) when all you want to know is the values of the variables you set on the current page.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">globalvars</span><span class="keyword">(){
<br />    </span><span class="default">$result</span><span class="keyword">=array();
<br />    </span><span class="default">$skip</span><span class="keyword">=array(</span><span class="string">'GLOBALS'</span><span class="keyword">,</span><span class="string">'_ENV'</span><span class="keyword">,</span><span class="string">'HTTP_ENV_VARS'</span><span class="keyword">,
<br />                        </span><span class="string">'_POST'</span><span class="keyword">,</span><span class="string">'HTTP_POST_VARS'</span><span class="keyword">,</span><span class="string">'_GET'</span><span class="keyword">,
<br />                        </span><span class="string">'HTTP_GET_VARS'</span><span class="keyword">,
<br />                        </span><span class="string">'_COOKIE'</span><span class="keyword">,
<br />                        </span><span class="string">'HTTP_COOKIE_VARS'</span><span class="keyword">,</span><span class="string">'_SERVER'</span><span class="keyword">,
<br />                        </span><span class="string">'HTTP_SERVER_VARS'</span><span class="keyword">,
<br />                        </span><span class="string">'_FILES'</span><span class="keyword">,</span><span class="string">'HTTP_POST_FILES'</span><span class="keyword">,
<br />                        </span><span class="string">'_REQUEST'</span><span class="keyword">,</span><span class="string">'HTTP_SESSION_VARS'</span><span class="keyword">,
<br />                        </span><span class="string">'_SESSION'</span><span class="keyword">);
<br />    foreach(</span><span class="default">$GLOBALS </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)
<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">,</span><span class="default">$skip</span><span class="keyword">))
<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]=</span><span class="default">$v</span><span class="keyword">;
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}</span><span class="comment">//functionglobalvars
<br />
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">globalvars</span><span class="keyword">());
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112665">  <div class="votes">
    <div id="Vu112665">
    <a href="/manual/vote-note.php?id=112665&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112665">
    <a href="/manual/vote-note.php?id=112665&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112665" title="69% like this...">
    5
    </div>
  </div>
  <a href="#112665" class="name">
  <strong class="user"><em>NitPicker</em></strong></a><a class="genanchor" href="#112665"> &para;</a><div class="date" title="2013-07-10 04:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112665">
<div class="phpcode"><code><span class="html">When it comes to HTML output (as discussed below), it's all fun and games until someone pokes their eye out with a "&lt;".<br /><br />Surround it with "&lt;pre&gt;", but do remember to wrap it in htmlspecialchars() as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="123814">  <div class="votes">
    <div id="Vu123814">
    <a href="/manual/vote-note.php?id=123814&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123814">
    <a href="/manual/vote-note.php?id=123814&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123814" title="66% like this...">
    3
    </div>
  </div>
  <a href="#123814" class="name">
  <strong class="user"><em>beverasrilakshmi at gmail dot com</em></strong></a><a class="genanchor" href="#123814"> &para;</a><div class="date" title="2019-05-01 08:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123814">
<div class="phpcode"><code><span class="html">Just for fun, trying to understand the definition of "returns parsable string"....any type of variable passed to var_export, the return value will be a typecasted as string...<br /><br /><span class="default">&lt;?php <br /><br />$var </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">); </span><span class="comment">//type is int as expected <br /></span><span class="keyword">echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /></span><span class="default">$var_after_export </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">); </span><span class="comment">//returning $var will now makes it a string<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var_after_export</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95700">  <div class="votes">
    <div id="Vu95700">
    <a href="/manual/vote-note.php?id=95700&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95700">
    <a href="/manual/vote-note.php?id=95700&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95700" title="64% like this...">
    5
    </div>
  </div>
  <a href="#95700" class="name">
  <strong class="user"><em>john dot risken at gmail dot com</em></strong></a><a class="genanchor" href="#95700"> &para;</a><div class="date" title="2010-01-16 03:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95700">
<div class="phpcode"><code><span class="html">I didn't see this simple little item anywhere in the user notes. Maybe I'm blind!
<br />
<br />Anyway, var_export and print_r both use spaces and carriage returns for formatting.  Sent to an html page, most of the formatting is lost. This simple function prints a nicely formatted array to an html screen:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">pretty_var</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">){
<br />    print </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">),array(</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,</span><span class="string">"&amp;nbsp;"</span><span class="keyword">), </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">)).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75327">  <div class="votes">
    <div id="Vu75327">
    <a href="/manual/vote-note.php?id=75327&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75327">
    <a href="/manual/vote-note.php?id=75327&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75327" title="61% like this...">
    7
    </div>
  </div>
  <a href="#75327" class="name">
  <strong class="user"><em>Glen</em></strong></a><a class="genanchor" href="#75327"> &para;</a><div class="date" title="2007-05-23 05:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75327">
<div class="phpcode"><code><span class="html">Like previously reported, i find var_export() frustrating when dealing with recursive structures.  Doing a :<br /><br /><span class="default">&lt;?php<br />var_export</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />fails.  Interestingly, var_dump() has some logic to avoid recursive references.  So :<br /><br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />works (while being more ugly).  Unlike var_export(), var_dump() has no option to return the string, so output buffering logic is required if you want to direct the output.</span></code></div>
  </div>
 </div>
  <div class="note" id="92065">  <div class="votes">
    <div id="Vu92065">
    <a href="/manual/vote-note.php?id=92065&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92065">
    <a href="/manual/vote-note.php?id=92065&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92065" title="61% like this...">
    5
    </div>
  </div>
  <a href="#92065" class="name">
  <strong class="user"><em>ravenswd at gmail dot com</em></strong></a><a class="genanchor" href="#92065"> &para;</a><div class="date" title="2009-07-07 10:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92065">
<div class="phpcode"><code><span class="html">(This replaces my note of 3-July-2009. The original version produced no output if a variable contained an empty array, or an array consisting only of empty arrays. For example, $bigarray['x'] = array(); Also, I have added a second version of the function.)<br /><br />The output can be difficult to decipher when looking at an array with many levels and many elements on each level. For example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print (</span><span class="string">'$bigarray = ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$bigarray</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will return:<br /><br />$bigarray = array(<br />... (500 lines skipped) ...<br />          'mod' =&gt; 'charlie',<br /><br />Whereas the routine below can be called with:<br /><br /><span class="default">&lt;?php<br />recursive_print </span><span class="keyword">(</span><span class="string">'$bigarray'</span><span class="keyword">, </span><span class="default">$bigarray</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />and it will return:<br /><br />$bigarray = array()<br />... (500 lines skipped) ...<br />$bigarray['foo']['bar']['0']['somethingelse']['mod'] = 'charlie'<br /><br />Here's the function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">recursive_print </span><span class="keyword">(</span><span class="default">$varname</span><span class="keyword">, </span><span class="default">$varval</span><span class="keyword">) {<br />  if (! </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$varval</span><span class="keyword">)):<br />    print </span><span class="default">$varname </span><span class="keyword">. </span><span class="string">' = ' </span><span class="keyword">. </span><span class="default">$varval </span><span class="keyword">. </span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br />  else:<br />    print </span><span class="default">$varname </span><span class="keyword">. </span><span class="string">" = array()&lt;br&gt;\n"</span><span class="keyword">;<br />    foreach (</span><span class="default">$varval </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">):<br />      </span><span class="default">recursive_print </span><span class="keyword">(</span><span class="default">$varname </span><span class="keyword">. </span><span class="string">"['" </span><span class="keyword">. </span><span class="default">$key </span><span class="keyword">. </span><span class="string">"']"</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />    endforeach;<br />  endif;<br />}<br /></span><span class="default">?&gt;<br /></span><br />For those who want a version that produces valid PHP code, use this version:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">recursive_print </span><span class="keyword">(</span><span class="default">$varname</span><span class="keyword">, </span><span class="default">$varval</span><span class="keyword">) {<br />  if (! </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$varval</span><span class="keyword">)):<br />    print </span><span class="default">$varname </span><span class="keyword">. </span><span class="string">' = ' </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$varval</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="string">";&lt;br&gt;\n"</span><span class="keyword">;<br />  else:<br />    print </span><span class="default">$varname </span><span class="keyword">. </span><span class="string">" = array();&lt;br&gt;\n"</span><span class="keyword">;<br />    foreach (</span><span class="default">$varval </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">):<br />      </span><span class="default">recursive_print </span><span class="keyword">(</span><span class="default">$varname </span><span class="keyword">. </span><span class="string">"[" </span><span class="keyword">. </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />    endforeach;<br />  endif;<br />}<br /></span><span class="default">?&gt;<br /></span><br />If your output is to a text file and not an HTML page, remove the &lt;br&gt;s.</span></code></div>
  </div>
 </div>
  <div class="note" id="110243">  <div class="votes">
    <div id="Vu110243">
    <a href="/manual/vote-note.php?id=110243&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110243">
    <a href="/manual/vote-note.php?id=110243&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110243" title="57% like this...">
    4
    </div>
  </div>
  <a href="#110243" class="name">
  <strong class="user"><em>sergei dot solomonov at gmail dot com</em></strong></a><a class="genanchor" href="#110243"> &para;</a><div class="date" title="2012-10-04 04:00"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110243">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br />$closure </span><span class="keyword">= function(){};
<br />
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$closure</span><span class="keyword">);
<br />
<br /></span><span class="comment">// output: Closure::__set_state(array())
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108094">  <div class="votes">
    <div id="Vu108094">
    <a href="/manual/vote-note.php?id=108094&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108094">
    <a href="/manual/vote-note.php?id=108094&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108094" title="57% like this...">
    4
    </div>
  </div>
  <a href="#108094" class="name">
  <strong class="user"><em>jodybrabec at gmail dot com</em></strong></a><a class="genanchor" href="#108094"> &para;</a><div class="date" title="2012-03-28 05:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108094">
<div class="phpcode"><code><span class="html">WORKAROUND for error "Nesting level too deep - recursive dependency":<br />ob_start();<br />var_dump($GLOBALS);<br />$dataDump = ob_get_clean();<br />echo $dataDump;</span></code></div>
  </div>
 </div>
  <div class="note" id="106471">  <div class="votes">
    <div id="Vu106471">
    <a href="/manual/vote-note.php?id=106471&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106471">
    <a href="/manual/vote-note.php?id=106471&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106471" title="55% like this...">
    4
    </div>
  </div>
  <a href="#106471" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#106471"> &para;</a><div class="date" title="2011-11-11 09:13"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106471">
<div class="phpcode"><code><span class="html">There is an even simpler way to have clean output from var_export and print_r in html pages:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">pretty_var</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">)<br />{ <br />    echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br />    </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br />    echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76099">  <div class="votes">
    <div id="Vu76099">
    <a href="/manual/vote-note.php?id=76099&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76099">
    <a href="/manual/vote-note.php?id=76099&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76099" title="57% like this...">
    2
    </div>
  </div>
  <a href="#76099" class="name">
  <strong class="user"><em>stangelanda at arrowquick dot com</em></strong></a><a class="genanchor" href="#76099"> &para;</a><div class="date" title="2007-06-29 04:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76099">
<div class="phpcode"><code><span class="html">I have been looking for the best method to store data in cache files.<br /><br />First, I've identified two limitations of var_export verus serialize.  It can't store internal references inside of an array and it can't store a nested object or an array containing objects before PHP 5.1.0.<br /><br />However, I could deal with both of those so I created a benchmark.  I used a single array containing from 10 to 150 indexes.  I've generate the elements' values randomly using booleans, nulls, integers, floats, and some nested arrays (the nested arrays are smaller averaging 5 elements but created similarly).  The largest percentage of elements are short strings around 10-15 characters.  While there is a small number of long strings (around 500 characters).<br /><br />Benchmarking returned these results for 1000 * [total time] / [iterations (4000 in this case)]<br /><br />serialize 3.656, 3.575, 3.68, 3.933, mean of 3.71<br />include 7.099, 5.42, 5.185, 6.076, mean of 5.95<br />eval 5.514, 5.204, 5.011, 5.788, mean of 5.38<br /><br />Meaning serialize is around 1 and a half times faster than var_export for a single large array.  include and eval were consistently very close but eval was usually a few tenths faster (eval did better this particular set of trials than usual). An opcode cache like APC might make include faster, but otherwise serialize is the best choice.</span></code></div>
  </div>
 </div>
  <div class="note" id="47674">  <div class="votes">
    <div id="Vu47674">
    <a href="/manual/vote-note.php?id=47674&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47674">
    <a href="/manual/vote-note.php?id=47674&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47674" title="57% like this...">
    2
    </div>
  </div>
  <a href="#47674" class="name">
  <strong class="user"><em>paul at worldwithoutwalls dot co dot uk</em></strong></a><a class="genanchor" href="#47674"> &para;</a><div class="date" title="2004-11-24 11:22"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47674">
<div class="phpcode"><code><span class="html">var_export() differs from print_r() for variables that are resources, with print_r() being more useful if you are using the function for debugging purposes.<br />e.g.<br /><span class="default">&lt;?php<br />$res </span><span class="keyword">= </span><span class="default">mysql_connect</span><span class="keyword">(</span><span class="default">$dbhost</span><span class="keyword">, </span><span class="default">$dbuser</span><span class="keyword">, </span><span class="default">$dbpass</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">); </span><span class="comment">//output: Resource id #14<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">); </span><span class="comment">//output: NULL<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129839">  <div class="votes">
    <div id="Vu129839">
    <a href="/manual/vote-note.php?id=129839&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129839">
    <a href="/manual/vote-note.php?id=129839&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129839" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129839" class="name">
  <strong class="user"><em>me at peterkooi dot com</em></strong></a><a class="genanchor" href="#129839"> &para;</a><div class="date" title="2024-11-06 02:02"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129839">
<div class="phpcode"><code><span class="html">A small function for exporting variables as string, supporting nested arrays, with indented output, blockquoted and with double quotes, that can be pasted back in code.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />  function </span><span class="default">_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) return </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">JSON_NUMERIC_CHECK</span><span class="keyword">);<br />    foreach(</span><span class="default">$value </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$item</span><span class="keyword">) </span><span class="default">$result </span><span class="keyword">.= (</span><span class="default">ifset</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">) ? </span><span class="string">",\r\n" </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">) : </span><span class="string">""</span><span class="keyword">) . </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) . </span><span class="string">" =&gt; " </span><span class="keyword">. </span><span class="default">_dump</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">);<br />    return </span><span class="string">"[\r\n" </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$indent </span><span class="keyword">+ </span><span class="default">2</span><span class="keyword">) . </span><span class="string">"</span><span class="default">$result</span><span class="string">\r\n" </span><span class="keyword">. </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$indent</span><span class="keyword">) . </span><span class="string">"]"</span><span class="keyword">;<br />  }<br />  return </span><span class="string">"&lt;pre&gt;" </span><span class="keyword">. </span><span class="default">htmlspecialchars</span><span class="keyword">(</span><span class="default">_dump</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) . </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="36606">  <div class="votes">
    <div id="Vu36606">
    <a href="/manual/vote-note.php?id=36606&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36606">
    <a href="/manual/vote-note.php?id=36606&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36606" title="51% like this...">
    1
    </div>
  </div>
  <a href="#36606" class="name">
  <strong class="user"><em>php_manual_note at bigredspark dot com</em></strong></a><a class="genanchor" href="#36606"> &para;</a><div class="date" title="2003-10-16 12:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36606">
<div class="phpcode"><code><span class="html">[john holmes]
<br />True, but that method would require you to open and read the file into a variable and then unserialize it into another variable.
<br />
<br />Using a file created with var_export() could simply be include()'d, which will be less code and faster. 
<br />
<br />[kaja]
<br />If you are trying to find a way to temporarily save variables into some other file, check out serialize() and unserialize() instead - this one is more useful for its readable property, very handy while debugging.
<br />
<br />[original post]
<br />If you're like me, you're wondering why a function that outputs "correct PHP syntax" is useful. This function can be useful in implementing a cache system. You can var_export() the array into a variable and write it into a file. Writing a string such as
<br />
<br /><span class="default">&lt;?php
<br />$string </span><span class="keyword">= </span><span class="string">'&lt;?php $array = ' </span><span class="keyword">. </span><span class="default">$data </span><span class="keyword">. </span><span class="string">'; ?&gt;'</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />where $data is the output of var_export() can create a file that can be easily include()d back into the script to recreate $array. 
<br />
<br />The raw output of var_export() could also be eval()d to recreate the array.
<br />
<br />---John Holmes...</span></code></div>
  </div>
 </div>
  <div class="note" id="94333">  <div class="votes">
    <div id="Vu94333">
    <a href="/manual/vote-note.php?id=94333&amp;page=function.var-export&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94333">
    <a href="/manual/vote-note.php?id=94333&amp;page=function.var-export&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94333" title="50% like this...">
    0
    </div>
  </div>
  <a href="#94333" class="name">
  <strong class="user"><em>rarioj at gmail dot com</em></strong></a><a class="genanchor" href="#94333"> &para;</a><div class="date" title="2009-10-28 10:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94333">
<div class="phpcode"><code><span class="html">NOTE: If an object Foo has __set_state() method, but if that object contains another object Bar with no __set_state() method implemented, the resulting PHP expression will not be eval()-able.<br /><br />This is an example (object Test that contains an instance of Exception).<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Test<br /></span><span class="keyword">{<br />  public </span><span class="default">$one</span><span class="keyword">;<br />  public </span><span class="default">$two</span><span class="keyword">;<br />  public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">, </span><span class="default">$two</span><span class="keyword">)<br />  {<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">one </span><span class="keyword">= </span><span class="default">$one</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">two </span><span class="keyword">= </span><span class="default">$two</span><span class="keyword">;<br />  }<br />  public static function </span><span class="default">__set_state</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">)<br />  {<br />    return new </span><span class="default">self</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="string">'one'</span><span class="keyword">], </span><span class="default">$array</span><span class="keyword">[</span><span class="string">'two'</span><span class="keyword">]);<br />  }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">(</span><span class="string">'one'</span><span class="keyword">, new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">));<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">/* $string =<br />Test::__set_state(array(<br />   'one' =&gt; 'one',<br />   'two' =&gt; <br />  Exception::__set_state(array(<br />     'message' =&gt; 'test',<br />     'string' =&gt; '',<br />     'code' =&gt; 0,<br />     'file' =&gt; 'E:\\xampp\\htdocs\\test.Q.php',<br />     'line' =&gt; 35,<br />     'trace' =&gt; <br />    array (<br />    ),<br />     'previous' =&gt; NULL,<br />  )),<br />))<br />*/<br /><br /></span><span class="keyword">eval(</span><span class="string">'$test2 = '</span><span class="keyword">.</span><span class="default">$string</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">); </span><span class="comment">// Fatal error: Call to undefined method Exception::__set_state<br /><br /></span><span class="default">?&gt;<br /></span><br />So avoid using var_export() on a complex array/object that contains other objects. Instead, use serialize() and unserialize() functions.<br /><br /><span class="default">&lt;?php<br /><br />$string </span><span class="keyword">= </span><span class="string">'unserialize('</span><span class="keyword">.</span><span class="default">var_export</span><span class="keyword">(</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">).</span><span class="string">')'</span><span class="keyword">;<br /><br />eval(</span><span class="string">'$test2 = '</span><span class="keyword">.</span><span class="default">$string</span><span class="keyword">.</span><span class="string">';'</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$test </span><span class="keyword">== </span><span class="default">$test2</span><span class="keyword">); </span><span class="comment">// bool(true)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.var-export&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.var-export.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="current">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
