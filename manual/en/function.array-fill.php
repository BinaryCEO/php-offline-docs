<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_fill - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-fill.php">
 <link rel="shorturl" href="https://www.php.net/array-fill">
 <link rel="alternate" href="https://www.php.net/array-fill" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-diff-ukey.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-fill-keys.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-fill.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-fill.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-fill.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-fill.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-fill.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-fill.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-fill.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-fill.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-fill.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-fill.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-fill.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fill an array with values" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_fill - Manual" />
<meta name="twitter:description" content="Fill an array with values" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_fill - Manual" />
<meta itemprop="description" content="Fill an array with values" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fill an array with values" />

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
        <a href="function.array-fill-keys.php">
          array_fill_keys &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-diff-ukey.php">
          &laquo; array_diff_ukey        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-fill.php' selected="selected">English</option>
            <option value='de/function.array-fill.php'>German</option>
            <option value='es/function.array-fill.php'>Spanish</option>
            <option value='fr/function.array-fill.php'>French</option>
            <option value='it/function.array-fill.php'>Italian</option>
            <option value='ja/function.array-fill.php'>Japanese</option>
            <option value='pt_BR/function.array-fill.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-fill.php'>Russian</option>
            <option value='tr/function.array-fill.php'>Turkish</option>
            <option value='uk/function.array-fill.php'>Ukrainian</option>
            <option value='zh/function.array-fill.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-fill" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_fill</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_fill</span> &mdash; <span class="dc-title">Fill an array with values</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-fill-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_fill</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start_index</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$count</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Fills an array with
   <code class="parameter">count</code> entries of the value of the
   <code class="parameter">value</code> parameter, keys starting at the
   <code class="parameter">start_index</code> parameter.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-fill-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>

    
     <dt><code class="parameter">start_index</code></dt>
     <dd>
      <p class="para">
       The first index of the returned array.
      </p>
      <p class="para">
       If <code class="parameter">start_index</code> is negative, 
       the first index of the returned array will be 
       <code class="parameter">start_index</code> and the following 
       indices will start from zero prior to PHP 8.0.0;
       as of PHP 8.0.0, negative keys are incremented normally
       (see <a href="function.array-fill.php#function.array-fill.example.negative-start-index" class="link">example</a>).
      </p>
     </dd>
    

    
     <dt><code class="parameter">count</code></dt>
     <dd>
      <p class="para">
       Number of elements to insert.
       Must be greater than or equal to zero, and less than or equal to <code class="literal">2147483647</code>.
      </p>
     </dd>
    

    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       Value to use for filling
      </p>
     </dd>
    

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-fill-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the filled array
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.array-fill-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">count</code> is
   out of range.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-fill-changelog">
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
      <td>8.0.0</td>
      <td>
       <span class="function"><strong>array_fill()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>
       if <code class="parameter">count</code> is out of range; previously <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
       was raised, and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.array-fill-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="function.array-fill.example.basic">
    <p><strong>Example #1 <span class="function"><strong>array_fill()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">array_fill</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #DD0000">'banana'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [5]  =&gt; banana
    [6]  =&gt; banana
    [7]  =&gt; banana
    [8]  =&gt; banana
    [9]  =&gt; banana
    [10] =&gt; banana
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="function.array-fill.example.negative-start-index">
    <p><strong>Example #2 <span class="function"><strong>array_fill()</strong></span> example with a negative start index</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">array_fill</span><span style="color: #007700">(-</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #DD0000">'pear'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [-2] =&gt; pear
    [-1] =&gt; pear
    [0] =&gt; pear
    [1] =&gt; pear
)</pre>
</div>
    </div>
    <div class="example-contents"><p>Output of the above example in PHP 7:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [-2] =&gt; pear
    [0] =&gt; pear
    [1] =&gt; pear
    [2] =&gt; pear
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   Note that index <code class="literal">-1</code> is not present prior to PHP 8.0.0.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.array-fill-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   See also the <a href="language.types.array.php" class="link">Arrays</a> 
   section of manual for a detailed explanation of negative keys.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-fill-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-fill-keys.php" class="function" rel="rdfs-seeAlso">array_fill_keys()</a> - Fill an array with values, specifying keys</span></li>
    <li><span class="function"><a href="function.str-repeat.php" class="function" rel="rdfs-seeAlso">str_repeat()</a> - Repeat a string</span></li>
    <li><span class="function"><a href="function.range.php" class="function" rel="rdfs-seeAlso">range()</a> - Create an array containing a range of elements</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-fill.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-fill%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-fill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-fill.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="44636">  <div class="votes">
    <div id="Vu44636">
    <a href="/manual/vote-note.php?id=44636&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44636">
    <a href="/manual/vote-note.php?id=44636&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44636" title="75% like this...">
    82
    </div>
  </div>
  <a href="#44636" class="name">
  <strong class="user"><em>csst0266 at cs dot uoi dot gr</em></strong></a><a class="genanchor" href="#44636"> &para;</a><div class="date" title="2004-08-11 10:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44636">
<div class="phpcode"><code><span class="html">This is what I recently did to quickly create a two dimensional array (10x10), initialized to 0:<br /><br /><span class="default">&lt;?php<br />  $a </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />This should work for as many dimensions as you want, each time passing to array_fill() (as the 3rd argument) another array_fill() function.</span></code></div>
  </div>
 </div>
  <div class="note" id="115216">  <div class="votes">
    <div id="Vu115216">
    <a href="/manual/vote-note.php?id=115216&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115216">
    <a href="/manual/vote-note.php?id=115216&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115216" title="73% like this...">
    45
    </div>
  </div>
  <a href="#115216" class="name">
  <strong class="user"><em>anatoliy at ukhvanovy dot name</em></strong></a><a class="genanchor" href="#115216"> &para;</a><div class="date" title="2014-06-16 10:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115216">
<div class="phpcode"><code><span class="html">If you need negative indices:<br /><span class="default">&lt;?php<br />$b </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(-</span><span class="default">2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="string">'pear'</span><span class="keyword">);</span><span class="comment">//this is not what we want<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">array_fill_keys</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(-</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">),</span><span class="string">'pear'</span><span class="keyword">);</span><span class="comment">//these are negative indices<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Here is result of the code above:<br />Array<br />(<br />    [-2] =&gt; pear<br />    [0] =&gt; pear<br />    [1] =&gt; pear<br />    [2] =&gt; pear<br />)<br />Array<br />(<br />    [-2] =&gt; pear<br />    [-1] =&gt; pear<br />    [0] =&gt; pear<br />    [1] =&gt; pear<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="113647">  <div class="votes">
    <div id="Vu113647">
    <a href="/manual/vote-note.php?id=113647&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113647">
    <a href="/manual/vote-note.php?id=113647&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113647" title="68% like this...">
    37
    </div>
  </div>
  <a href="#113647" class="name">
  <strong class="user"><em>mchljnk at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#113647"> &para;</a><div class="date" title="2013-11-10 03:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113647">
<div class="phpcode"><code><span class="html">Using objects with array_fill may cause unexpected results. Consider the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />   public </span><span class="default">$bar </span><span class="keyword">= </span><span class="string">"banana"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//fill an array with objects<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, new </span><span class="default">Foo</span><span class="keyword">());<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="comment">/*<br />array(2) {<br />  [0]=&gt;<br />  object(Foo)#1 (1) {<br />    ["bar"]=&gt;<br />    string(6) "banana"<br />  }<br />  [1]=&gt;<br />  object(Foo)#1 (1) {<br />    ["bar"]=&gt;<br />    string(6) "banana"<br />  }<br />} */<br /><br />//now we change the attribute of the object stored in index 0<br />//this actually changes the attribute for EACH object in the ENTIRE array<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">bar </span><span class="keyword">= </span><span class="string">"apple"</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="comment">/*<br />array(2) {<br />  [0]=&gt;<br />  object(Foo)#1 (1) {<br />    ["bar"]=&gt;<br />    string(5) "apple"<br />  }<br />  [1]=&gt;<br />  object(Foo)#1 (1) {<br />    ["bar"]=&gt;<br />    string(5) "apple"<br />  }<br />}<br /> */<br /></span><span class="default">?&gt;<br /></span><br />Objects are filled in the array BY REFERENCE. They are not copied for each element in the array.</span></code></div>
  </div>
 </div>
  <div class="note" id="126204">  <div class="votes">
    <div id="Vu126204">
    <a href="/manual/vote-note.php?id=126204&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126204">
    <a href="/manual/vote-note.php?id=126204&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126204" title="71% like this...">
    3
    </div>
  </div>
  <a href="#126204" class="name">
  <strong class="user"><em>user at NOSPAM dot example dot com</em></strong></a><a class="genanchor" href="#126204"> &para;</a><div class="date" title="2021-06-30 04:28"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126204">
<div class="phpcode"><code><span class="html">As of PHP 8.0 the example code<br /><br /><span class="default">&lt;?php<br />$b </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(-</span><span class="default">2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="string">'pear'</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />now returns<br /><br />Array<br />(<br />    [-2] =&gt; pear<br />    [-1] =&gt; pear<br />    [0] =&gt; pear<br />    [1] =&gt; pear<br />)<br /><br />See <a href="https://wiki.php.net/rfc/negative_array_index" rel="nofollow" target="_blank">https://wiki.php.net/rfc/negative_array_index</a> and <a href="https://github.com/php/php-src/pull/3772" rel="nofollow" target="_blank">https://github.com/php/php-src/pull/3772</a></span></code></div>
  </div>
 </div>
  <div class="note" id="107666">  <div class="votes">
    <div id="Vu107666">
    <a href="/manual/vote-note.php?id=107666&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107666">
    <a href="/manual/vote-note.php?id=107666&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107666" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107666" class="name">
  <strong class="user"><em>miguelxpain at gmail dot com</em></strong></a><a class="genanchor" href="#107666"> &para;</a><div class="date" title="2012-02-24 06:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107666">
<div class="phpcode"><code><span class="html">I made this function named "array_getMax" that returns te maximum value and index, from array:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//using array_search_all by helenadeus at gmail dot com
<br />
<br /></span><span class="keyword">function </span><span class="default">array_search_all</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)
<br />{</span><span class="comment">#array_search_match($needle, $haystack) returns all the keys of the values that match $needle in $haystack
<br />
<br />    </span><span class="keyword">foreach (</span><span class="default">$haystack </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">) {
<br />   
<br />        if(</span><span class="default">$haystack</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]==</span><span class="default">$needle</span><span class="keyword">){
<br />       
<br />           </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">$k</span><span class="keyword">;
<br />        }
<br />    }
<br />    return (</span><span class="default">$array</span><span class="keyword">);
<br />
<br />   
<br />}
<br />
<br />function </span><span class="default">array_getMax</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">){
<br />        
<br />    </span><span class="default">$conteo</span><span class="keyword">=</span><span class="default">array_count_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />    
<br />    if( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$conteo</span><span class="keyword">)==</span><span class="default">1 </span><span class="keyword">){</span><span class="comment">//returns full array when all values are the same.
<br />        </span><span class="keyword">return  </span><span class="default">$array</span><span class="keyword">;       
<br />    }
<br />       
<br />    </span><span class="default">arsort</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />    
<br />    </span><span class="comment">//$antValue=null;
<br />    </span><span class="default">$maxValue</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;
<br />    </span><span class="default">$keyValue</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;
<br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){
<br />        if(</span><span class="default">$maxValue</span><span class="keyword">==</span><span class="default">null</span><span class="keyword">){
<br />            </span><span class="default">$maxValue</span><span class="keyword">=</span><span class="default">$value</span><span class="keyword">;
<br />            </span><span class="default">$keyValue</span><span class="keyword">=</span><span class="default">$key</span><span class="keyword">;
<br />            break;
<br />        }        
<br />    }
<br />    
<br />    </span><span class="default">$resultSearch</span><span class="keyword">=</span><span class="default">array_search_all</span><span class="keyword">(</span><span class="default">$maxValue</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">);
<br />        
<br />   return  </span><span class="default">array_fill_keys</span><span class="keyword">(</span><span class="default">$resultSearch</span><span class="keyword">, </span><span class="default">$maxValue</span><span class="keyword">);
<br />    
<br />    
<br />}
<br />
<br /></span><span class="comment">//example 
<br />  </span><span class="default">$arreglo</span><span class="keyword">=array(</span><span class="string">'e1'</span><span class="keyword">=&gt;</span><span class="default">99</span><span class="keyword">,</span><span class="string">'e2'</span><span class="keyword">=&gt;</span><span class="string">'99'</span><span class="keyword">,</span><span class="string">'e3'</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">,</span><span class="string">'e4'</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">,</span><span class="string">'e5'</span><span class="keyword">=&gt;</span><span class="default">98</span><span class="keyword">);
<br />    
<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_getMax</span><span class="keyword">(</span><span class="default">$arreglo</span><span class="keyword">));
<br />
<br /></span><span class="comment">//output
<br />/*
<br />array(2) {
<br />  ["e1"]=&gt;
<br />  int(99)
<br />  ["e2"]=&gt;
<br />  int(99)
<br />}
<br />*/
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope some one find this usefull</span></code></div>
  </div>
 </div>
  <div class="note" id="122269">  <div class="votes">
    <div id="Vu122269">
    <a href="/manual/vote-note.php?id=122269&amp;page=function.array-fill&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122269">
    <a href="/manual/vote-note.php?id=122269&amp;page=function.array-fill&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122269" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#122269" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#122269"> &para;</a><div class="date" title="2018-01-13 11:57"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122269">
<div class="phpcode"><code><span class="html">Fill missing keys in a (numerically-indexed) array with a default value<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">fill_missing_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$default </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$atleast </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />{<br />    return </span><span class="default">$array </span><span class="keyword">+ </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">$atleast</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))), </span><span class="default">$default</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-fill&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-fill.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
