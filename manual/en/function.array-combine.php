<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_combine - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-combine.php">
 <link rel="shorturl" href="https://www.php.net/array-combine">
 <link rel="alternate" href="https://www.php.net/array-combine" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-column.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-count-values.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-combine.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-combine.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-combine.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-combine.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-combine.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-combine.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-combine.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-combine.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-combine.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-combine.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-combine.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates an array by using one array for keys and another for its values" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_combine - Manual" />
<meta name="twitter:description" content="Creates an array by using one array for keys and another for its values" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_combine - Manual" />
<meta itemprop="description" content="Creates an array by using one array for keys and another for its values" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates an array by using one array for keys and another for its values" />

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
        <a href="function.array-count-values.php">
          array_count_values &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-column.php">
          &laquo; array_column        </a>
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
            <option value='en/function.array-combine.php' selected="selected">English</option>
            <option value='de/function.array-combine.php'>German</option>
            <option value='es/function.array-combine.php'>Spanish</option>
            <option value='fr/function.array-combine.php'>French</option>
            <option value='it/function.array-combine.php'>Italian</option>
            <option value='ja/function.array-combine.php'>Japanese</option>
            <option value='pt_BR/function.array-combine.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-combine.php'>Russian</option>
            <option value='tr/function.array-combine.php'>Turkish</option>
            <option value='uk/function.array-combine.php'>Ukrainian</option>
            <option value='zh/function.array-combine.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-combine" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_combine</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_combine</span> &mdash; <span class="dc-title">Creates an array by using one array for keys and another for its values</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-combine-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_combine</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$keys</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$values</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Creates an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> by using the values from the
   <code class="parameter">keys</code> array as keys and the values from the
   <code class="parameter">values</code> array as the corresponding values.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-combine-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>

    
     <dt><code class="parameter">keys</code></dt>
     <dd>
      <p class="para">
       Array of keys to be used. Illegal values for key will be
       converted to <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
      </p>
     </dd>
    

    
     <dt><code class="parameter">values</code></dt>
     <dd>
      <p class="para">
       <span class="type"><a href="language.types.array.php" class="type Array">Array</a></span> of values to be used
      </p>
     </dd>
    

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-combine-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the combined <span class="type"><a href="language.types.array.php" class="type array">array</a></span>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.array-combine-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   As of PHP 8.0.0, a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown if the number of elements in
   <code class="parameter">keys</code> and <code class="parameter">values</code> does not
   match.
   Prior to PHP 8.0.0, a <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was emitted instead.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-combine-changelog">
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
       <span class="function"><strong>array_combine()</strong></span> will now throw a
       <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if the number of elements
       for each array is not equal;
       previously this function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> instead.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.array-combine-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5216">
    <p><strong>Example #1 A simple <span class="function"><strong>array_combine()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'green'</span><span style="color: #007700">, </span><span style="color: #DD0000">'red'</span><span style="color: #007700">, </span><span style="color: #DD0000">'yellow'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'avocado'</span><span style="color: #007700">, </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'banana'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$c </span><span style="color: #007700">= </span><span style="color: #0000BB">array_combine</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$c</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [green] =&gt; avocado
    [red] =&gt; apple
    [yellow] =&gt; banana
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-combine-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-merge.php" class="function" rel="rdfs-seeAlso">array_merge()</a> - Merge one or more arrays</span></li>
    <li><span class="function"><a href="function.array-walk.php" class="function" rel="rdfs-seeAlso">array_walk()</a> - Apply a user supplied function to every member of an array</span></li>
    <li><span class="function"><a href="function.array-values.php" class="function" rel="rdfs-seeAlso">array_values()</a> - Return all the values of an array</span></li>
    <li><span class="function"><a href="function.array-map.php" class="function" rel="rdfs-seeAlso">array_map()</a> - Applies the callback to the elements of the given arrays</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-combine.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-combine%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-combine&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-combine.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="111668">  <div class="votes">
    <div id="Vu111668">
    <a href="/manual/vote-note.php?id=111668&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111668">
    <a href="/manual/vote-note.php?id=111668&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111668" title="72% like this...">
    120
    </div>
  </div>
  <a href="#111668" class="name">
  <strong class="user"><em>loureirorg at gmail dot com</em></strong></a><a class="genanchor" href="#111668"> &para;</a><div class="date" title="2013-03-14 10:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111668">
<div class="phpcode"><code><span class="html">If two keys are the same, the second one prevails. <br /><br />Example:<br /><span class="default">&lt;?php<br />print_r</span><span class="keyword">(</span><span class="default">array_combine</span><span class="keyword">(Array(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">), Array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)));<br /></span><span class="default">?&gt;<br /></span>Returns:<br />Array<br />(<br />    [a] =&gt; 2<br />    [b] =&gt; 3<br />)<br /><br />But if you need to keep all values, you can use the function below:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_combine_</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">)<br />{<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$k</span><span class="keyword">) {<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][] = </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />    }<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'&amp;$v'</span><span class="keyword">, </span><span class="string">'$v = (count($v) == 1)? array_pop($v): $v;'</span><span class="keyword">));<br />    return    </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_combine_</span><span class="keyword">(Array(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">), Array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)));<br /></span><span class="default">?&gt;<br /></span>Returns:<br />Array<br />(<br />    [a] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />        )<br /><br />    [b] =&gt; 3<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="118397">  <div class="votes">
    <div id="Vu118397">
    <a href="/manual/vote-note.php?id=118397&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118397">
    <a href="/manual/vote-note.php?id=118397&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118397" title="61% like this...">
    16
    </div>
  </div>
  <a href="#118397" class="name">
  <strong class="user"><em>welcome at el hyphen mustafa</em></strong></a><a class="genanchor" href="#118397"> &para;</a><div class="date" title="2015-11-29 09:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118397">
<div class="phpcode"><code><span class="html">Further to loreiorg's script <br />in order to preserve duplicate keys when combining arrays.<br /><br />I have modified the script to use a closure instead of create_function<br /><br />Reason: see security issue flagged up in the documentation concerning create_function<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_combine_</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">){<br />    </span><span class="default">$result </span><span class="keyword">= array();<br /><br />    foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$i </span><span class="keyword">=&gt; </span><span class="default">$k</span><span class="keyword">) {<br />     </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">][] = </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />     }<br /><br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, function(&amp;</span><span class="default">$v</span><span class="keyword">){<br />     </span><span class="default">$v </span><span class="keyword">= (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) ? </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">): </span><span class="default">$v</span><span class="keyword">;<br />     });<br /><br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97863">  <div class="votes">
    <div id="Vu97863">
    <a href="/manual/vote-note.php?id=97863&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97863">
    <a href="/manual/vote-note.php?id=97863&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97863" title="61% like this...">
    13
    </div>
  </div>
  <a href="#97863" class="name">
  <strong class="user"><em>claude dot pache at gmail dot com</em></strong></a><a class="genanchor" href="#97863"> &para;</a><div class="date" title="2010-05-12 10:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97863">
<div class="phpcode"><code><span class="html">array_combine() has a strange bug/misfeature (as of PHP 5.3.2): There is no logical reason for &lt;? array_combine(array(), array()) ?&gt; throwing a warning and returning FALSE, instead of returning &lt;? array() ?&gt; (see <a href="http://bugs.php.net/bug.php?id=34857" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=34857</a>). Here is a quick workaround:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_real_combine</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />{<br />    return </span><span class="default">$a</span><span class="keyword">===array() &amp;&amp; </span><span class="default">$b</span><span class="keyword">===array() ? array() : </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85323">  <div class="votes">
    <div id="Vu85323">
    <a href="/manual/vote-note.php?id=85323&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85323">
    <a href="/manual/vote-note.php?id=85323&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85323" title="60% like this...">
    12
    </div>
  </div>
  <a href="#85323" class="name">
  <strong class="user"><em>quecoder at gmail</em></strong></a><a class="genanchor" href="#85323"> &para;</a><div class="date" title="2008-08-26 12:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85323">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="comment">// If they are not of same size, here is solution:
<br />
<br /></span><span class="default">$abbreviations </span><span class="keyword">= array(</span><span class="string">"AL"</span><span class="keyword">, </span><span class="string">"AK"</span><span class="keyword">, </span><span class="string">"AZ"</span><span class="keyword">, </span><span class="string">"AR"</span><span class="keyword">, </span><span class="string">"TX"</span><span class="keyword">, </span><span class="string">"CA"</span><span class="keyword">);
<br /></span><span class="default">$states </span><span class="keyword">= array(</span><span class="string">"Alabama"</span><span class="keyword">, </span><span class="string">"Alaska"</span><span class="keyword">, </span><span class="string">"Arizona"</span><span class="keyword">, </span><span class="string">"Arkansas"</span><span class="keyword">);
<br />function </span><span class="default">combine_arr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$acount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);
<br />    </span><span class="default">$bcount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);
<br />    </span><span class="default">$size </span><span class="keyword">= (</span><span class="default">$acount </span><span class="keyword">&gt; </span><span class="default">$bcount</span><span class="keyword">) ? </span><span class="default">$bcount </span><span class="keyword">: </span><span class="default">$acount</span><span class="keyword">;
<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);
<br />    return </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />}
<br /></span><span class="default">$combined </span><span class="keyword">= </span><span class="default">combine_arr</span><span class="keyword">(</span><span class="default">$abbreviations</span><span class="keyword">, </span><span class="default">$states</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$combined</span><span class="keyword">); 
<br />
<br /></span><span class="comment">//  Output
<br />//  Array ( [AL] =&gt; Alabama [AK] =&gt; Alaska [AZ] =&gt; Arizona 
<br />//  [AR] =&gt; Arkansas )
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106318">  <div class="votes">
    <div id="Vu106318">
    <a href="/manual/vote-note.php?id=106318&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106318">
    <a href="/manual/vote-note.php?id=106318&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106318" title="55% like this...">
    4
    </div>
  </div>
  <a href="#106318" class="name">
  <strong class="user"><em>dejiakala at gmail dot com</em></strong></a><a class="genanchor" href="#106318"> &para;</a><div class="date" title="2011-10-27 03:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106318">
<div class="phpcode"><code><span class="html">I needed to read CSV files into associative arrays with column headers as keys. Then I ran into a problem when you have empty columns at the end of a row because array_combine returns false if both arrays don't have the same number of elements. This function based on quecoder at gmail's combine_arr() below allowed me to pad either array or not when parsing my CSVs to arrays.<br />$a is the array of header columns and $b is an array of the current row retrieved with fgetcsv()<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_combine_special</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">, </span><span class="default">$pad </span><span class="keyword">= </span><span class="default">TRUE</span><span class="keyword">) {<br />    </span><span class="default">$acount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    </span><span class="default">$bcount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />    </span><span class="comment">// more elements in $a than $b but we don't want to pad either<br />    </span><span class="keyword">if (!</span><span class="default">$pad</span><span class="keyword">) {<br />        </span><span class="default">$size </span><span class="keyword">= (</span><span class="default">$acount </span><span class="keyword">&gt; </span><span class="default">$bcount</span><span class="keyword">) ? </span><span class="default">$bcount </span><span class="keyword">: </span><span class="default">$acount</span><span class="keyword">;<br />        </span><span class="default">$a </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);<br />        </span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">);<br />    } else {<br />        </span><span class="comment">// more headers than row fields<br />        </span><span class="keyword">if (</span><span class="default">$acount </span><span class="keyword">&gt; </span><span class="default">$bcount</span><span class="keyword">) {<br />            </span><span class="default">$more </span><span class="keyword">= </span><span class="default">$acount </span><span class="keyword">- </span><span class="default">$bcount</span><span class="keyword">;<br />            </span><span class="comment">// how many fields are we missing at the end of the second array?<br />            // Add empty strings to ensure arrays $a and $b have same number of elements<br />            </span><span class="default">$more </span><span class="keyword">= </span><span class="default">$acount </span><span class="keyword">- </span><span class="default">$bcount</span><span class="keyword">;<br />            for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$more</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$b</span><span class="keyword">[] = </span><span class="string">""</span><span class="keyword">;<br />            }<br />        </span><span class="comment">// more fields than headers<br />        </span><span class="keyword">} else if (</span><span class="default">$acount </span><span class="keyword">&lt; </span><span class="default">$bcount</span><span class="keyword">) {<br />            </span><span class="default">$more </span><span class="keyword">= </span><span class="default">$bcount </span><span class="keyword">- </span><span class="default">$acount</span><span class="keyword">;<br />            </span><span class="comment">// fewer elements in the first array, add extra keys        <br />            </span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$more</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">$key </span><span class="keyword">= </span><span class="string">'extra_field_0' </span><span class="keyword">. </span><span class="default">$i</span><span class="keyword">;<br />                </span><span class="default">$a</span><span class="keyword">[] = </span><span class="default">$key</span><span class="keyword">;<br />            }<br />            <br />        }<br />    }<br />    <br />    return </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103129">  <div class="votes">
    <div id="Vu103129">
    <a href="/manual/vote-note.php?id=103129&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103129">
    <a href="/manual/vote-note.php?id=103129&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103129" title="54% like this...">
    6
    </div>
  </div>
  <a href="#103129" class="name">
  <strong class="user"><em>zequez at gmail dot com</em></strong></a><a class="genanchor" href="#103129"> &para;</a><div class="date" title="2011-03-27 03:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103129">
<div class="phpcode"><code><span class="html">If two keys are the same, the second one prevails.<br />Example:<br /><span class="default">&lt;?php<br />print_r</span><span class="keyword">(</span><span class="default">array_combine</span><span class="keyword">(Array(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">), Array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)));<br /></span><span class="default">?&gt;<br /></span>Returns:<br />Array<br />(<br />    [a] =&gt; 2<br />    [b] =&gt; 3<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="97109">  <div class="votes">
    <div id="Vu97109">
    <a href="/manual/vote-note.php?id=97109&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97109">
    <a href="/manual/vote-note.php?id=97109&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97109" title="51% like this...">
    1
    </div>
  </div>
  <a href="#97109" class="name">
  <strong class="user"><em>bradentkeith at  dot dontspam dot gmail dot com</em></strong></a><a class="genanchor" href="#97109"> &para;</a><div class="date" title="2010-04-01 12:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97109">
<div class="phpcode"><code><span class="html">I needed a function that would take keys from one unequal array and combine them with the values of another. Real life application:<br />Select 4 product types.<br />Each product has a serial.<br />There are 4 sets of products.<br /><br />    <span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">array_combine2</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">) {<br />            </span><span class="default">$count1 </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">);<br />            </span><span class="default">$count2 </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">);<br />            </span><span class="default">$numofloops </span><span class="keyword">= </span><span class="default">$count2</span><span class="keyword">/</span><span class="default">$count1</span><span class="keyword">;<br />                <br />            </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            while(</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numofloops</span><span class="keyword">){<br />                </span><span class="default">$arr3 </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">, </span><span class="default">$count1</span><span class="keyword">*</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$count1</span><span class="keyword">);<br />                </span><span class="default">$arr4</span><span class="keyword">[] = </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">,</span><span class="default">$arr3</span><span class="keyword">);<br />                </span><span class="default">$i</span><span class="keyword">++;<br />            }<br />            <br />            return </span><span class="default">$arr4</span><span class="keyword">;<br />        }<br />    </span><span class="default">?&gt;<br /></span><br />Input:<br />Array<br />(<br />    [0] =&gt; SMART Board<br />    [1] =&gt; Projector<br />    [2] =&gt; Speakers<br />    [3] =&gt; Splitter<br />)<br />, Array<br />(<br />    [0] =&gt; serial to smart board1<br />    [1] =&gt; serial to projector 1<br />    [2] =&gt; serial to speakers 1<br />    [3] =&gt; serials to splitter 1<br />    [4] =&gt; serials to smart board 2<br />    [5] =&gt; serials to projector 2<br />    [6] =&gt; serials to speakers 2<br />    [7] =&gt; serials to splitter 2<br />)<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [SMART Board] =&gt; serial to smart board1<br />            [Projector] =&gt; serial to projector 1<br />            [Speakers] =&gt; serial to speakers 1<br />            [Splitter] =&gt; serials to splitter 1<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [SMART Board] =&gt; serials to smart board 2<br />            [Projector] =&gt; serials to projector 2<br />            [Speakers] =&gt; serials to speakers 2<br />            [Splitter] =&gt; serials to splitter 2<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="121415">  <div class="votes">
    <div id="Vu121415">
    <a href="/manual/vote-note.php?id=121415&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121415">
    <a href="/manual/vote-note.php?id=121415&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121415" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121415" class="name">
  <strong class="user"><em>PHPNewbie</em></strong></a><a class="genanchor" href="#121415"> &para;</a><div class="date" title="2017-07-22 06:18"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121415">
<div class="phpcode"><code><span class="html">This will seem obvious to some, but if you need to preserve a duplicate key, being you have unique vars, you can switch the array_combine around, to where the vars are the keys, and this will output correctly.<br /><br />This [default] formula auto-removes the duplicate keys.<br /><br />$i=0;<br />foreach (array_combine($keys, $vars) as $key =&gt; $var)<br />{<br />$i=$i;<br />echo($key);<br />echo " ";<br />echo($var);<br />}<br /><br />This formula accomplishes the same thing, in the same order, but the duplicate "keys" (which are now  vars) are kept.<br /><br />$i=0;<br />foreach (array_combine($vars, $keys) as $var =&gt; $key)<br />{<br />$i=$i;<br />echo($key);<br />echo " ";<br />echo($var);<br />}<br /><br />I know, I'm a newbie, but perhaps someone else will need this eventually. I couldn't find another solution anywhere.</span></code></div>
  </div>
 </div>
  <div class="note" id="116714">  <div class="votes">
    <div id="Vu116714">
    <a href="/manual/vote-note.php?id=116714&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116714">
    <a href="/manual/vote-note.php?id=116714&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116714" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116714" class="name">
  <strong class="user"><em>ilanfir at gmail dot com</em></strong></a><a class="genanchor" href="#116714"> &para;</a><div class="date" title="2015-02-15 10:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116714">
<div class="phpcode"><code><span class="html">I recently had to flip an array and group the elements by value, this snippet will do that:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">flipAndGroup</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) {<br />    </span><span class="default">$outArr </span><span class="keyword">= array();<br />    </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, function(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$outArr</span><span class="keyword">) {<br />        if(!isset(</span><span class="default">$outArr</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">]) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$outArr</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">])) {<br />            </span><span class="default">$outArr</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = [];<br />        }<br />        </span><span class="default">$outArr</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][] = </span><span class="default">$key</span><span class="keyword">;<br />    });<br />    return </span><span class="default">$outArr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />$users_countries </span><span class="keyword">= array(<br />    </span><span class="string">'username1' </span><span class="keyword">=&gt; </span><span class="string">'US'</span><span class="keyword">,<br />    </span><span class="string">'user2' </span><span class="keyword">=&gt; </span><span class="string">'US'</span><span class="keyword">,<br />    </span><span class="string">'newuser' </span><span class="keyword">=&gt; </span><span class="string">'GB'<br /></span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">flipAndGroup</span><span class="keyword">(</span><span class="default">$users_countries</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Returns:<br />Array<br />(<br />    [US] =&gt; Array<br />        (<br />            [0] =&gt; username1<br />            [1] =&gt; user2<br />        )<br /><br />    [GB] =&gt; Array<br />        (<br />            [0] =&gt; newuser<br />        )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="109449">  <div class="votes">
    <div id="Vu109449">
    <a href="/manual/vote-note.php?id=109449&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109449">
    <a href="/manual/vote-note.php?id=109449&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109449" title="50% like this...">
    0
    </div>
  </div>
  <a href="#109449" class="name">
  <strong class="user"><em>g.REMOVETHIS.vincendon AT vithemis.com</em></strong></a><a class="genanchor" href="#109449"> &para;</a><div class="date" title="2012-07-18 09:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109449">
<div class="phpcode"><code><span class="html">I was looking for a function that could combine an array to multiple one, for my MySQL GROUP_CONCAT() query, so I made this function.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">array_combine_array</span><span class="keyword">(array </span><span class="default">$keys</span><span class="keyword">)<br />    {<br />        </span><span class="default">$arrays </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br />        </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arrays</span><span class="keyword">);<br />        <br />        </span><span class="comment">/* Checking if arrays are on the same model (array('INDEX'=&gt; array()) or array()) */<br />        </span><span class="default">$check </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'is_array'</span><span class="keyword">,</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'current'</span><span class="keyword">,</span><span class="default">$arrays</span><span class="keyword">)))) === </span><span class="default">1</span><span class="keyword">;<br />        if (!</span><span class="default">$check</span><span class="keyword">) { </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Function array_combine_array() expects all parameters to be same type array or array of array'</span><span class="keyword">,</span><span class="default">E_USER_NOTICE</span><span class="keyword">); return array(); }<br />        <br />        </span><span class="comment">/* Checking the model of arrays, array('INDEX' =&gt; array()) or Array() */<br />        </span><span class="default">$assocArray </span><span class="keyword">= </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'current'</span><span class="keyword">,</span><span class="default">$arrays</span><span class="keyword">)));<br />        <br />        </span><span class="comment">/* If empty $Keys is given, we fill an empty array */<br />        </span><span class="keyword">if (empty(</span><span class="default">$keys</span><span class="keyword">)) </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">max</span><span class="keyword">((</span><span class="default">$assocArray</span><span class="keyword">) ? </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'count'</span><span class="keyword">,</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'current'</span><span class="keyword">,</span><span class="default">$arrays</span><span class="keyword">)) : </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'count'</span><span class="keyword">,</span><span class="default">$arrays</span><span class="keyword">)),</span><span class="string">'foo'</span><span class="keyword">));<br /><br />        </span><span class="comment">/* Init */<br />        </span><span class="default">$ret</span><span class="keyword">=array();</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        </span><span class="comment">/* Cycling on each keys values, making an offset for each */<br />        </span><span class="keyword">foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">)<br />        {<br />            </span><span class="comment">/* Cycling on arrays */<br />            </span><span class="keyword">foreach (</span><span class="default">$arrays </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">)<br />            {<br />                if (</span><span class="default">$assocArray</span><span class="keyword">)<br />                {<br />                    </span><span class="comment">/* Getting the index of the element */<br />                    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">);<br />                    </span><span class="comment">/* If the offset exists, we place it */<br />                    </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = isset(</span><span class="default">$k</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]) ? </span><span class="default">$k</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]:</span><span class="default">false</span><span class="keyword">;<br />                }<br />                </span><span class="comment">/* Making the array with auto-made index */<br />                </span><span class="keyword">else<br />                    </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">][] = isset(</span><span class="default">$k</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) ? </span><span class="default">$k</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]: </span><span class="default">false</span><span class="keyword">;<br />            }<br />            </span><span class="comment">/* Getting the next offset */<br />            </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />        return </span><span class="default">$ret</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/* Examples */<br />    </span><span class="default">$r </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /><br />    </span><span class="default">$a1 </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">,</span><span class="string">'two'</span><span class="keyword">,</span><span class="string">'four'</span><span class="keyword">,</span><span class="string">'ten'</span><span class="keyword">);<br />    </span><span class="default">$a2 </span><span class="keyword">= array(</span><span class="string">'un'</span><span class="keyword">,</span><span class="string">'deux'</span><span class="keyword">,</span><span class="string">'quatre'</span><span class="keyword">,</span><span class="string">'dix'</span><span class="keyword">);<br />    </span><span class="default">$a3 </span><span class="keyword">= array(</span><span class="string">'uno'</span><span class="keyword">,</span><span class="string">'dos'</span><span class="keyword">,</span><span class="string">'quatro'</span><span class="keyword">,</span><span class="string">'diez'</span><span class="keyword">);<br />     <br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_combine_array</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,array(</span><span class="string">'english' </span><span class="keyword">=&gt; </span><span class="default">$a1</span><span class="keyword">),array(</span><span class="string">'french' </span><span class="keyword">=&gt; </span><span class="default">$a2</span><span class="keyword">),array(</span><span class="string">'spanish' </span><span class="keyword">=&gt; </span><span class="default">$a3</span><span class="keyword">))); </span><span class="comment">/* Associative index, associative subarray indexes */<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_combine_array</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$a1</span><span class="keyword">,array(</span><span class="string">'french' </span><span class="keyword">=&gt; </span><span class="default">$a2</span><span class="keyword">),array(</span><span class="string">'spanish' </span><span class="keyword">=&gt; </span><span class="default">$a3</span><span class="keyword">))); </span><span class="comment">/* Ouputs Error */<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_combine_array</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">,</span><span class="default">$a1</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">,</span><span class="default">$a3</span><span class="keyword">)); </span><span class="comment">/* Associative index, auto-made subarray indexes */<br />     </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_combine_array</span><span class="keyword">(array(),array(</span><span class="string">'english' </span><span class="keyword">=&gt; </span><span class="default">$a1</span><span class="keyword">),array(</span><span class="string">'french' </span><span class="keyword">=&gt; </span><span class="default">$a2</span><span class="keyword">),array(</span><span class="string">'spanish' </span><span class="keyword">=&gt; </span><span class="default">$a3</span><span class="keyword">))); </span><span class="comment">/* Auto-made index, associative subarray indexes */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105822">  <div class="votes">
    <div id="Vu105822">
    <a href="/manual/vote-note.php?id=105822&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105822">
    <a href="/manual/vote-note.php?id=105822&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105822" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105822" class="name">
  <strong class="user"><em>Dan LaManna</em></strong></a><a class="genanchor" href="#105822"> &para;</a><div class="date" title="2011-09-17 08:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105822">
<div class="phpcode"><code><span class="html">I needed a function that truncated extra values, and only went as far as keys without throwing a warning as array_combine does.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">safeArrayCombine</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$values</span><span class="keyword">) {
<br />    </span><span class="default">$combinedArray </span><span class="keyword">= array();
<br />        
<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">, </span><span class="default">$keyCount </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$keyCount</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {
<br />         </span><span class="default">$combinedArray</span><span class="keyword">[</span><span class="default">$keys</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />    }
<br />        
<br />    return </span><span class="default">$combinedArray</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122531">  <div class="votes">
    <div id="Vu122531">
    <a href="/manual/vote-note.php?id=122531&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122531">
    <a href="/manual/vote-note.php?id=122531&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122531" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#122531" class="name">
  <strong class="user"><em>douglasrich9215 at gmail dot com</em></strong></a><a class="genanchor" href="#122531"> &para;</a><div class="date" title="2018-03-21 09:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122531">
<div class="phpcode"><code><span class="html">I had an epiphany when try to handle NON-ASSOCIATIVE array forms in my controller. This little one liner can pretty much edit ANY kind of non-associative array. For example this one just returns an array of values inputed by a new user.<br /><br />The $data value is the the json_decoded() value of a register form.<br />Here is used str_replace, you could definitely do a number of things like preg matches and other things. <br /><br />$readyToProcessForUser = array_combine(str_replace("new_user_", "", array_keys($data)), $data);<br /><br />You could also do the same for the values.<br /><br />$readyToProcessForUser = array_combine(array_keys($data), str_replace("-", "", $data));<br /><br />Or BOTH!<br />Use full if you don't want to walk an entire array and the keys through the same callback.<br /><br />$readyToProcessForUser = array_combine(array_walk('trim', array_keys($data)), array_walk('custom_callback', array_values($data)));</span></code></div>
  </div>
 </div>
  <div class="note" id="129676">  <div class="votes">
    <div id="Vu129676">
    <a href="/manual/vote-note.php?id=129676&amp;page=function.array-combine&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129676">
    <a href="/manual/vote-note.php?id=129676&amp;page=function.array-combine&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129676" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#129676" class="name">
  <strong class="user"><em>info at callismart dot com dot ng</em></strong></a><a class="genanchor" href="#129676"> &para;</a><div class="date" title="2024-07-30 08:47"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129676">
<div class="phpcode"><code><span class="html">As of PHP 8.0, array_combine throws  ValueError if the number of elements for each array is not equal;<br /><br />To be on a safer side, you can perform a check instead.<br /><br />$arrayk = array( 'key1', 'key2', 'key3' );<br />$arrayv = array( 'v1', 'v2', 'v3' );<br /><br />if ( count( $arrayk ) === count( $arrayv ) ) {<br />    echo '&lt;pre&gt;';<br />    var_dump( array_combine( $arrayk, $arrayv ) );<br />    echo '&lt;/pre&gt;';<br />} else {<br />   return false;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-combine&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-combine.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
