<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_chunk - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-chunk.php">
 <link rel="shorturl" href="https://www.php.net/array-chunk">
 <link rel="alternate" href="https://www.php.net/array-chunk" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-change-key-case.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-column.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-chunk.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-chunk.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-chunk.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-chunk.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-chunk.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-chunk.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-chunk.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-chunk.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-chunk.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-chunk.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-chunk.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Split an array into chunks" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_chunk - Manual" />
<meta name="twitter:description" content="Split an array into chunks" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_chunk - Manual" />
<meta itemprop="description" content="Split an array into chunks" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Split an array into chunks" />

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
        <a href="function.array-column.php">
          array_column &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-change-key-case.php">
          &laquo; array_change_key_case        </a>
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
            <option value='en/function.array-chunk.php' selected="selected">English</option>
            <option value='de/function.array-chunk.php'>German</option>
            <option value='es/function.array-chunk.php'>Spanish</option>
            <option value='fr/function.array-chunk.php'>French</option>
            <option value='it/function.array-chunk.php'>Italian</option>
            <option value='ja/function.array-chunk.php'>Japanese</option>
            <option value='pt_BR/function.array-chunk.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-chunk.php'>Russian</option>
            <option value='tr/function.array-chunk.php'>Turkish</option>
            <option value='uk/function.array-chunk.php'>Ukrainian</option>
            <option value='zh/function.array-chunk.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-chunk" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_chunk</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_chunk</span> &mdash; <span class="dc-title">Split an array into chunks</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-chunk-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_chunk</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$length</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$preserve_keys</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Chunks an array into arrays with <code class="parameter">length</code> elements.
   The last chunk may contain less than <code class="parameter">length</code> elements.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-chunk-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>

    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array to work on
      </p>
     </dd>
    

    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       The size of each chunk
      </p>
     </dd>
    

    
     <dt><code class="parameter">preserve_keys</code></dt>
     <dd>
      <p class="para">
       When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> keys will be preserved.
       Default is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> which will reindex the chunk numerically
      </p>
     </dd>
    

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-chunk-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a multidimensional numerically indexed array, starting with zero,
   with each dimension containing <code class="parameter">length</code> elements.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.array-chunk-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If <code class="parameter">length</code> is less than <code class="literal">1</code>,
   a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-chunk-changelog">
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
       If <code class="parameter">length</code> is less than <code class="literal">1</code>,
       a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> will be thrown now;
       previously, an error of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
       has been raised instead, and the function returned <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.array-chunk-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5211">
    <p><strong>Example #1 <span class="function"><strong>array_chunk()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input_array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'c'</span><span style="color: #007700">, </span><span style="color: #DD0000">'d'</span><span style="color: #007700">, </span><span style="color: #DD0000">'e'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_chunk</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_array</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_chunk</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_array</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [0] =&gt; a
            [1] =&gt; b
        )

    [1] =&gt; Array
        (
            [0] =&gt; c
            [1] =&gt; d
        )

    [2] =&gt; Array
        (
            [0] =&gt; e
        )

)
Array
(
    [0] =&gt; Array
        (
            [0] =&gt; a
            [1] =&gt; b
        )

    [1] =&gt; Array
        (
            [2] =&gt; c
            [3] =&gt; d
        )

    [2] =&gt; Array
        (
            [4] =&gt; e
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-chunk-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-slice.php" class="function" rel="rdfs-seeAlso">array_slice()</a> - Extract a slice of the array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-chunk.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-chunk%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-chunk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-chunk.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75022">  <div class="votes">
    <div id="Vu75022">
    <a href="/manual/vote-note.php?id=75022&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75022">
    <a href="/manual/vote-note.php?id=75022&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75022" title="68% like this...">
    69
    </div>
  </div>
  <a href="#75022" class="name">
  <strong class="user"><em>azspot at gmail dot com</em></strong></a><a class="genanchor" href="#75022"> &para;</a><div class="date" title="2007-05-08 04:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75022">
<div class="phpcode"><code><span class="html">Tried to use an example below (#56022) for array_chunk_fixed that would "partition" or divide an array into a desired number of split lists -- a useful procedure for "chunking" up objects or text items into columns, or partitioning any type of data resource. However, there seems to be a flaw with array_chunk_fixed — for instance, try it with a nine item list and with four partitions. It results in 3 entries with 3 items, then a blank array.<br /><br />So, here is the output of my own dabbling on the matter:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">partition</span><span class="keyword">( </span><span class="default">$list</span><span class="keyword">, </span><span class="default">$p </span><span class="keyword">) {<br />    </span><span class="default">$listlen </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">( </span><span class="default">$list </span><span class="keyword">);<br />    </span><span class="default">$partlen </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">( </span><span class="default">$listlen </span><span class="keyword">/ </span><span class="default">$p </span><span class="keyword">);<br />    </span><span class="default">$partrem </span><span class="keyword">= </span><span class="default">$listlen </span><span class="keyword">% </span><span class="default">$p</span><span class="keyword">;<br />    </span><span class="default">$partition </span><span class="keyword">= array();<br />    </span><span class="default">$mark </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    for (</span><span class="default">$px </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$px </span><span class="keyword">&lt; </span><span class="default">$p</span><span class="keyword">; </span><span class="default">$px</span><span class="keyword">++) {<br />        </span><span class="default">$incr </span><span class="keyword">= (</span><span class="default">$px </span><span class="keyword">&lt; </span><span class="default">$partrem</span><span class="keyword">) ? </span><span class="default">$partlen </span><span class="keyword">+ </span><span class="default">1 </span><span class="keyword">: </span><span class="default">$partlen</span><span class="keyword">;<br />        </span><span class="default">$partition</span><span class="keyword">[</span><span class="default">$px</span><span class="keyword">] = </span><span class="default">array_slice</span><span class="keyword">( </span><span class="default">$list</span><span class="keyword">, </span><span class="default">$mark</span><span class="keyword">, </span><span class="default">$incr </span><span class="keyword">);<br />        </span><span class="default">$mark </span><span class="keyword">+= </span><span class="default">$incr</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$partition</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$citylist </span><span class="keyword">= array( </span><span class="string">"Black Canyon City"</span><span class="keyword">, </span><span class="string">"Chandler"</span><span class="keyword">, </span><span class="string">"Flagstaff"</span><span class="keyword">, </span><span class="string">"Gilbert"</span><span class="keyword">, </span><span class="string">"Glendale"</span><span class="keyword">, </span><span class="string">"Globe"</span><span class="keyword">, </span><span class="string">"Mesa"</span><span class="keyword">, </span><span class="string">"Miami"</span><span class="keyword">,<br />                   </span><span class="string">"Phoenix"</span><span class="keyword">, </span><span class="string">"Peoria"</span><span class="keyword">, </span><span class="string">"Prescott"</span><span class="keyword">, </span><span class="string">"Scottsdale"</span><span class="keyword">, </span><span class="string">"Sun City"</span><span class="keyword">, </span><span class="string">"Surprise"</span><span class="keyword">, </span><span class="string">"Tempe"</span><span class="keyword">, </span><span class="string">"Tucson"</span><span class="keyword">, </span><span class="string">"Wickenburg" </span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">partition</span><span class="keyword">( </span><span class="default">$citylist</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">) );<br /><br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; Black Canyon City<br />            [1] =&gt; Chandler<br />            [2] =&gt; Flagstaff<br />            [3] =&gt; Gilbert<br />            [4] =&gt; Glendale<br />            [5] =&gt; Globe<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; Mesa<br />            [1] =&gt; Miami<br />            [2] =&gt; Phoenix<br />            [3] =&gt; Peoria<br />            [4] =&gt; Prescott<br />            [5] =&gt; Scottsdale<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [0] =&gt; Sun City<br />            [1] =&gt; Surprise<br />            [2] =&gt; Tempe<br />            [3] =&gt; Tucson<br />            [4] =&gt; Wickenburg<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="122907">  <div class="votes">
    <div id="Vu122907">
    <a href="/manual/vote-note.php?id=122907&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122907">
    <a href="/manual/vote-note.php?id=122907&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122907" title="72% like this...">
    25
    </div>
  </div>
  <a href="#122907" class="name">
  <strong class="user"><em>Andrew Martin</em></strong></a><a class="genanchor" href="#122907"> &para;</a><div class="date" title="2018-07-03 03:43"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122907">
<div class="phpcode"><code><span class="html">To reverse an array_chunk, use array_merge, passing the chunks as a variadic:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">];<br /><br /></span><span class="default">$chunks </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="comment">// $chunks = [[1, 2, 3], [4, 5, 6], [7, 8, 9]]<br /><br /></span><span class="default">$de_chunked </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">…$chunks</span><span class="keyword">);<br /></span><span class="comment">// $de_chunked = [1, 2, 3, 4, 5, 6, 7, 8, 9]<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98976">  <div class="votes">
    <div id="Vu98976">
    <a href="/manual/vote-note.php?id=98976&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98976">
    <a href="/manual/vote-note.php?id=98976&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98976" title="66% like this...">
    19
    </div>
  </div>
  <a href="#98976" class="name">
  <strong class="user"><em>nate at ruggfamily dot com</em></strong></a><a class="genanchor" href="#98976"> &para;</a><div class="date" title="2010-07-19 09:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98976">
<div class="phpcode"><code><span class="html">If you just want to grab one chunk from an array, you should use array_slice().</span></code></div>
  </div>
 </div>
  <div class="note" id="125632">  <div class="votes">
    <div id="Vu125632">
    <a href="/manual/vote-note.php?id=125632&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125632">
    <a href="/manual/vote-note.php?id=125632&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125632" title="70% like this...">
    8
    </div>
  </div>
  <a href="#125632" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125632"> &para;</a><div class="date" title="2020-12-28 04:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125632">
<div class="phpcode"><code><span class="html">Most easy way split array to parts<br /><br /><span class="default">&lt;?php<br /><br />$arr </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">];<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">)));<br /></span><span class="comment">// return: [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10]]<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">) / </span><span class="default">3</span><span class="keyword">)));<br /></span><span class="comment">// return: [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10]]<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63394">  <div class="votes">
    <div id="Vu63394">
    <a href="/manual/vote-note.php?id=63394&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63394">
    <a href="/manual/vote-note.php?id=63394&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63394" title="65% like this...">
    20
    </div>
  </div>
  <a href="#63394" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#63394"> &para;</a><div class="date" title="2006-03-21 04:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63394">
<div class="phpcode"><code><span class="html">Here my array_chunk_values( ) with values distributed by lines (columns are balanced as much as possible) :<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">array_chunk_vertical</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$columns</span><span class="keyword">) {<br />        </span><span class="default">$n </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) ;<br />        </span><span class="default">$per_column </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$n </span><span class="keyword">/ </span><span class="default">$columns</span><span class="keyword">) ;<br />        </span><span class="default">$rest </span><span class="keyword">= </span><span class="default">$n </span><span class="keyword">% </span><span class="default">$columns </span><span class="keyword">;<br /><br />        </span><span class="comment">// The map<br />        </span><span class="default">$per_columns </span><span class="keyword">= array( ) ;<br />        for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$columns </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />            </span><span class="default">$per_columns</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$per_column </span><span class="keyword">+ (</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$rest </span><span class="keyword">? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">) ;<br />        }<br /><br />        </span><span class="default">$tabular </span><span class="keyword">= array( ) ;<br />        foreach ( </span><span class="default">$per_columns </span><span class="keyword">as </span><span class="default">$rows </span><span class="keyword">) {<br />            for ( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$rows </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++ ) {<br />                </span><span class="default">$tabular</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][ ] = </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) ;<br />            }<br />        }<br /><br />        return </span><span class="default">$tabular </span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/plain'</span><span class="keyword">) ;<br /><br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">array_chunk_vertical</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">31</span><span class="keyword">), </span><span class="default">7</span><span class="keyword">) ;<br />    foreach ( </span><span class="default">$data </span><span class="keyword">as </span><span class="default">$row </span><span class="keyword">) {<br />        foreach ( </span><span class="default">$row </span><span class="keyword">as </span><span class="default">$value </span><span class="keyword">) {<br />            </span><span class="default">printf</span><span class="keyword">(</span><span class="string">'[%2s]'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) ;<br />        }<br />        echo </span><span class="string">"\r\n" </span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/*<br />        Output :<br /><br />        [ 1][ 6][11][16][20][24][28]<br />        [ 2][ 7][12][17][21][25][29]<br />        [ 3][ 8][13][18][22][26][30]<br />        [ 4][ 9][14][19][23][27][31]<br />        [ 5][10][15]<br />    */<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83752">  <div class="votes">
    <div id="Vu83752">
    <a href="/manual/vote-note.php?id=83752&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83752">
    <a href="/manual/vote-note.php?id=83752&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83752" title="63% like this...">
    18
    </div>
  </div>
  <a href="#83752" class="name">
  <strong class="user"><em>OIS</em></strong></a><a class="genanchor" href="#83752"> &para;</a><div class="date" title="2008-06-10 05:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83752">
<div class="phpcode"><code><span class="html">Response to azspot at gmail dot com function partition.<br /><br />$columns = 3;<br />$citylist = array('Black Canyon City', 'Chandler', 'Flagstaff', 'Gilbert', 'Glendale', 'Globe', 'Mesa', 'Miami', 'Phoenix', 'Peoria', 'Prescott', 'Scottsdale', 'Sun City', 'Surprise', 'Tempe', 'Tucson', 'Wickenburg');<br />print_r(array_chunk($citylist, ceil(count($citylist) / $columns)));<br /><br />Output:<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; Black Canyon City<br />            [1] =&gt; Chandler<br />            [2] =&gt; Flagstaff<br />            [3] =&gt; Gilbert<br />            [4] =&gt; Glendale<br />            [5] =&gt; Globe<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; Mesa<br />            [1] =&gt; Miami<br />            [2] =&gt; Phoenix<br />            [3] =&gt; Peoria<br />            [4] =&gt; Prescott<br />            [5] =&gt; Scottsdale<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [0] =&gt; Sun City<br />            [1] =&gt; Surprise<br />            [2] =&gt; Tempe<br />            [3] =&gt; Tucson<br />            [4] =&gt; Wickenburg<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="119428">  <div class="votes">
    <div id="Vu119428">
    <a href="/manual/vote-note.php?id=119428&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119428">
    <a href="/manual/vote-note.php?id=119428&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119428" title="68% like this...">
    8
    </div>
  </div>
  <a href="#119428" class="name">
  <strong class="user"><em>suisuiruyi at aliyun dot com</em></strong></a><a class="genanchor" href="#119428"> &para;</a><div class="date" title="2016-06-03 09:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119428">
<div class="phpcode"><code><span class="html">chunk array vertically<br /><br />$arr    = range(1, 19);<br />function array_chunk_vertical($arr, $percolnum){<br />    $n = count($arr);<br />    $mod    = $n % $percolnum;<br />    $cols   = floor($n / $percolnum);<br />    $mod ? $cols++ : null ;<br />    $re     = array();<br />    for($col = 0; $col &lt; $cols; $col++){<br />        for($row = 0; $row &lt; $percolnum; $row++){<br />            if($arr){<br />                $re[$row][]   = array_shift($arr);<br />            }<br />        }<br />    }<br />    return $re;<br />}<br />$result = array_chunk_vertical($arr, 6);<br />foreach($result  as $row){<br />    foreach($row as $val){<br />        echo '['.$val.']';<br />    }<br />    echo '&lt;br/&gt;';<br />}<br />/*<br />[1][7][13][19]<br />[2][8][14]<br />[3][9][15]<br />[4][10][16]<br />[5][11][17]<br />[6][12][18]<br /> */</span></code></div>
  </div>
 </div>
  <div class="note" id="118972">  <div class="votes">
    <div id="Vu118972">
    <a href="/manual/vote-note.php?id=118972&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118972">
    <a href="/manual/vote-note.php?id=118972&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118972" title="69% like this...">
    5
    </div>
  </div>
  <a href="#118972" class="name">
  <strong class="user"><em>dustin at fivetechnology dot com</em></strong></a><a class="genanchor" href="#118972"> &para;</a><div class="date" title="2016-03-10 06:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118972">
<div class="phpcode"><code><span class="html">Had need to chunk an object which implemented ArrayAccess Iterator Countable.  array_chunk wouldn't do it.  Should work for any list of things<br /><br /><span class="default">&lt;?php<br />   $listOfThings </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">,</span><span class="default">11</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">,</span><span class="default">13</span><span class="keyword">);<br />   </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">chunk_iterable</span><span class="keyword">(</span><span class="default">$listOfThings</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /><br />  function </span><span class="default">chunk_iterable</span><span class="keyword">(</span><span class="default">$listOfThings</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">) {<br />      </span><span class="default">$chunk </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      </span><span class="default">$chunks </span><span class="keyword">= </span><span class="default">array_fill</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$listOfThings</span><span class="keyword">) / </span><span class="default">$size</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">, array());<br />      </span><span class="default">$index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      foreach(</span><span class="default">$listOfThings </span><span class="keyword">as </span><span class="default">$thing</span><span class="keyword">) {<br />        if (</span><span class="default">$index </span><span class="keyword">&amp;&amp; </span><span class="default">$index </span><span class="keyword">% </span><span class="default">$size </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) </span><span class="default">$chunk</span><span class="keyword">++;<br />        </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$chunk</span><span class="keyword">][] = </span><span class="default">$thing</span><span class="keyword">;<br />        </span><span class="default">$index</span><span class="keyword">++;<br />      }<br />      return </span><span class="default">$chunks</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118063">  <div class="votes">
    <div id="Vu118063">
    <a href="/manual/vote-note.php?id=118063&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118063">
    <a href="/manual/vote-note.php?id=118063&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118063" title="69% like this...">
    5
    </div>
  </div>
  <a href="#118063" class="name">
  <strong class="user"><em>siddharthundare at gmail dot com</em></strong></a><a class="genanchor" href="#118063"> &para;</a><div class="date" title="2015-09-28 09:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118063">
<div class="phpcode"><code><span class="html">&lt;table&gt;<br />&lt;tr&gt;<br /><span class="default">&lt;?php<br /><br />$array_chunkdata </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">,</span><span class="default">11</span><span class="keyword">,</span><span class="default">12</span><span class="keyword">,</span><span class="default">13</span><span class="keyword">,</span><span class="default">14</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">,</span><span class="default">16</span><span class="keyword">,</span><span class="default">17</span><span class="keyword">,</span><span class="default">18</span><span class="keyword">,</span><span class="default">19</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">,</span><span class="default">21</span><span class="keyword">,</span><span class="default">22</span><span class="keyword">,</span><span class="default">23</span><span class="keyword">,</span><span class="default">24</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">);<br /></span><span class="default">$chunk  </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$array_chunkdata</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">$rev_counter </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /><br />function </span><span class="default">for_chunk</span><span class="keyword">(</span><span class="default">$chunk_data</span><span class="keyword">){<br /><br />    echo </span><span class="string">"&lt;td&gt;&lt;table&gt;"</span><span class="keyword">;<br /><br />      foreach(</span><span class="default">$chunk_data </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$chunk_value</span><span class="keyword">)<br />      {<br />        echo </span><span class="string">"&lt;tr&gt;&lt;td&gt;"</span><span class="keyword">;<br />        echo </span><span class="default">$chunk_value</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;/td&gt;&lt;/tr&gt;"</span><span class="keyword">;<br />      }<br />      echo </span><span class="string">"&lt;/table&gt;&lt;/td&gt;"</span><span class="keyword">;   <br /><br />}<br /><br />foreach(</span><span class="default">$chunk </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$chunk_data</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$rev_counter</span><span class="keyword">%</span><span class="default">2</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)<br />    {   <br />      </span><span class="default">for_chunk</span><span class="keyword">(</span><span class="default">$chunk_data</span><span class="keyword">);<br />    }<br />    else<br />    {<br />      </span><span class="default">$chunk_data </span><span class="keyword">=  </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$chunk_data</span><span class="keyword">);<br />      <br />      </span><span class="default">for_chunk</span><span class="keyword">(</span><span class="default">$chunk_data</span><span class="keyword">);<br />     <br />    } <br />  </span><span class="default">$rev_counter</span><span class="keyword">++;<br />}<br /></span><span class="default">?&gt;</span> <br />&lt;/tr&gt;<br />&lt;/table&gt;<br />/*<br />Output:<br />1<br />2<br />3<br />4<br />5<br />    <br />10<br />9<br />8<br />7<br />6<br />    <br />11<br />12<br />13<br />14<br />15<br />    <br />20<br />19<br />18<br />17<br />16<br />    <br />21<br />22<br />23<br />24<br />25<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="48268">  <div class="votes">
    <div id="Vu48268">
    <a href="/manual/vote-note.php?id=48268&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48268">
    <a href="/manual/vote-note.php?id=48268&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48268" title="64% like this...">
    13
    </div>
  </div>
  <a href="#48268" class="name">
  <strong class="user"><em>phpm at nreynolds dot me dot uk</em></strong></a><a class="genanchor" href="#48268"> &para;</a><div class="date" title="2004-12-17 04:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48268">
<div class="phpcode"><code><span class="html">array_chunk() is helpful when constructing tables with a known number of columns but an unknown number of values, such as a calendar month. Example:<br /><br /><span class="default">&lt;?php<br /><br />$values </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">31</span><span class="keyword">);<br /></span><span class="default">$rows </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /><br />print </span><span class="string">"&lt;table&gt;\n"</span><span class="keyword">;<br />foreach (</span><span class="default">$rows </span><span class="keyword">as </span><span class="default">$row</span><span class="keyword">) {<br />    print </span><span class="string">"&lt;tr&gt;\n"</span><span class="keyword">;<br />    foreach (</span><span class="default">$row </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">) {<br />        print </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. </span><span class="default">$value </span><span class="keyword">. </span><span class="string">"&lt;/td&gt;\n"</span><span class="keyword">;<br />    }<br />    print </span><span class="string">"&lt;/tr&gt;\n"</span><span class="keyword">;<br />}<br />print </span><span class="string">"&lt;/table&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br /><br />1 2 3 4 5 6 7 <br />8 9 10 11 12 13 14 <br />15 16 17 18 19 20 21 <br />22 23 24 25 26 27 28 <br />29 30 31 <br /><br />The other direction is possible too, with the aid of a function included at the bottom of this note. Changing this line:<br />  $rows = array_chunk($values, 7);<br /><br />To this:<br />  $rows = array_chunk_vertical($values, 7);<br /><br />Produces a vertical calendar with seven columns:<br /><br />1 6  11 16 21 26 31 <br />2 7  12 17 22 27 <br />3 8  13 18 23 28 <br />4 9  14 19 24 29 <br />5 10 15 20 25 30 <br /><br />You can also specify that $size refers to the number of rows, not columns:<br />  $rows = array_chunk_vertical($values, 7, false, false);<br /><br />Producing this:<br /><br />1 8  15 22 29 <br />2 9  16 23 30 <br />3 10 17 24 31 <br />4 11 18 25 <br />5 12 19 26 <br />6 13 20 27 <br />7 14 21 28 <br /><br />The function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_chunk_vertical</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$preserve_keys </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$size_is_horizontal </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">)<br />{<br />    </span><span class="default">$chunks </span><span class="keyword">= array();<br />    <br />    if (</span><span class="default">$size_is_horizontal</span><span class="keyword">) {<br />        </span><span class="default">$chunk_count </span><span class="keyword">= </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) / </span><span class="default">$size</span><span class="keyword">);<br />    } else {<br />        </span><span class="default">$chunk_count </span><span class="keyword">= </span><span class="default">$size</span><span class="keyword">;<br />    }<br />    <br />    for (</span><span class="default">$chunk_index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$chunk_index </span><span class="keyword">&lt; </span><span class="default">$chunk_count</span><span class="keyword">; </span><span class="default">$chunk_index</span><span class="keyword">++) {<br />        </span><span class="default">$chunks</span><span class="keyword">[] = array();<br />    }<br /><br />    </span><span class="default">$chunk_index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$preserve_keys</span><span class="keyword">) {<br />            </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$chunk_index</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$chunk_index</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        <br />        if (++</span><span class="default">$chunk_index </span><span class="keyword">== </span><span class="default">$chunk_count</span><span class="keyword">) {<br />            </span><span class="default">$chunk_index </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br />    }<br />    <br />    return </span><span class="default">$chunks</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="41347">  <div class="votes">
    <div id="Vu41347">
    <a href="/manual/vote-note.php?id=41347&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41347">
    <a href="/manual/vote-note.php?id=41347&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41347" title="63% like this...">
    6
    </div>
  </div>
  <a href="#41347" class="name">
  <strong class="user"><em>mick at vandermostvanspijk dot nl</em></strong></a><a class="genanchor" href="#41347"> &para;</a><div class="date" title="2004-04-07 03:02"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41347">
<div class="phpcode"><code><span class="html">[Editors note: This function was based on a previous function by gphemsley at nospam users dot sourceforge.net]
<br />
<br />For those of you that need array_chunk() for PHP &lt; 4.2.0, this function should do the trick:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'array_chunk'</span><span class="keyword">)) {
<br />    function </span><span class="default">array_chunk</span><span class="keyword">( </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$size</span><span class="keyword">, </span><span class="default">$preserve_keys </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {
<br />        @</span><span class="default">reset</span><span class="keyword">( </span><span class="default">$input </span><span class="keyword">);
<br />        
<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />
<br />        while( @list( </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value </span><span class="keyword">) = @</span><span class="default">each</span><span class="keyword">( </span><span class="default">$input </span><span class="keyword">) ) {
<br />            if( !( isset( </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ) ) ) {
<br />               </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = array();
<br />            }
<br />
<br />            if( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] ) &lt; </span><span class="default">$size </span><span class="keyword">) {
<br />                if( </span><span class="default">$preserve_keys </span><span class="keyword">) {
<br />                    </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />                    </span><span class="default">$j</span><span class="keyword">++;
<br />                } else {
<br />                    </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;
<br />                }
<br />            } else {
<br />                </span><span class="default">$i</span><span class="keyword">++;
<br />
<br />                if( </span><span class="default">$preserve_keys </span><span class="keyword">) {
<br />                    </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />                    </span><span class="default">$j</span><span class="keyword">++;
<br />                } else {
<br />                    </span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />                    </span><span class="default">$chunks</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$j</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;
<br />                }
<br />            }
<br />        }
<br />
<br />        return </span><span class="default">$chunks</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88501">  <div class="votes">
    <div id="Vu88501">
    <a href="/manual/vote-note.php?id=88501&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88501">
    <a href="/manual/vote-note.php?id=88501&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88501" title="61% like this...">
    8
    </div>
  </div>
  <a href="#88501" class="name">
  <strong class="user"><em>dead dot screamer at seznam dot cz</em></strong></a><a class="genanchor" href="#88501"> &para;</a><div class="date" title="2009-01-27 02:28"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88501">
<div class="phpcode"><code><span class="html">This function can be used to reverse effect of <span class="default">&lt;?php array_Chunk</span><span class="keyword">()</span><span class="default">?&gt;</span>.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_Unchunk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)<br />{<br />    return </span><span class="default">call_User_Func_Array</span><span class="keyword">(</span><span class="string">'array_Merge'</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">);<br />}<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: text/plain'</span><span class="keyword">);<br /></span><span class="default">$array</span><span class="keyword">=array(<br />    array(<br />            </span><span class="string">'Black Canyon City'</span><span class="keyword">,<br />            </span><span class="string">'Chandler'</span><span class="keyword">,<br />            </span><span class="string">'Flagstaff'</span><span class="keyword">,<br />            </span><span class="string">'Gilbert'</span><span class="keyword">,<br />            </span><span class="string">'Glendale'</span><span class="keyword">,<br />            </span><span class="string">'Globe'</span><span class="keyword">,<br />    ),<br />    array(<br />            </span><span class="string">'Mesa'</span><span class="keyword">,<br />            </span><span class="string">'Miami'</span><span class="keyword">,<br />            </span><span class="string">'Phoenix'</span><span class="keyword">,<br />            </span><span class="string">'Peoria'</span><span class="keyword">,<br />            </span><span class="string">'Prescott'</span><span class="keyword">,<br />            </span><span class="string">'Scottsdale'</span><span class="keyword">,<br />    ),<br />    array(<br />            </span><span class="string">'Sun City'</span><span class="keyword">,<br />            </span><span class="string">'Surprise'</span><span class="keyword">,<br />            </span><span class="string">'Tempe'</span><span class="keyword">,<br />            </span><span class="string">'Tucson'</span><span class="keyword">,<br />            </span><span class="string">'Wickenburg'</span><span class="keyword">,<br />    ),<br />);<br /></span><span class="default">var_Dump</span><span class="keyword">(</span><span class="default">array_Unchunk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Output:<br />array(17) {<br />  [0]=&gt;<br />  string(17) "Black Canyon City"<br />  [1]=&gt;<br />  string(8) "Chandler"<br />  [2]=&gt;<br />  string(9) "Flagstaff"<br />  [3]=&gt;<br />  string(7) "Gilbert"<br />  [4]=&gt;<br />  string(8) "Glendale"<br />  [5]=&gt;<br />  string(5) "Globe"<br />  [6]=&gt;<br />  string(4) "Mesa"<br />  [7]=&gt;<br />  string(5) "Miami"<br />  [8]=&gt;<br />  string(7) "Phoenix"<br />  [9]=&gt;<br />  string(6) "Peoria"<br />  [10]=&gt;<br />  string(8) "Prescott"<br />  [11]=&gt;<br />  string(10) "Scottsdale"<br />  [12]=&gt;<br />  string(8) "Sun City"<br />  [13]=&gt;<br />  string(8) "Surprise"<br />  [14]=&gt;<br />  string(5) "Tempe"<br />  [15]=&gt;<br />  string(6) "Tucson"<br />  [16]=&gt;<br />  string(10) "Wickenburg"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="113234">  <div class="votes">
    <div id="Vu113234">
    <a href="/manual/vote-note.php?id=113234&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113234">
    <a href="/manual/vote-note.php?id=113234&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113234" title="60% like this...">
    5
    </div>
  </div>
  <a href="#113234" class="name">
  <strong class="user"><em>stratboy</em></strong></a><a class="genanchor" href="#113234"> &para;</a><div class="date" title="2013-09-16 10:22"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113234">
<div class="phpcode"><code><span class="html">Hi, I've made  a function to split an array into chunks based on columns wanted. For example:<br /><br /><span class="default">&lt;?php $a </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />goal (say, for 3 columns):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">array(<br />   array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">),<br />   array(</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">),<br />   array(</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">)<br />);<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_array_columns</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$columns</span><span class="keyword">){<br />        <br />        </span><span class="default">$columns_map </span><span class="keyword">= array();<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$columns</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){ </span><span class="default">$columns_map</span><span class="keyword">[] = </span><span class="default">0</span><span class="keyword">; }</span><span class="comment">//init columns<br />        <br />        //create map<br />        </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />        </span><span class="default">$position </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        while(</span><span class="default">$count </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){<br />            </span><span class="default">$columns_map</span><span class="keyword">[</span><span class="default">$position</span><span class="keyword">]++;<br />            </span><span class="default">$position </span><span class="keyword">= (</span><span class="default">$position </span><span class="keyword">&lt; </span><span class="default">$columns</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">) ? ++</span><span class="default">$position </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />            </span><span class="default">$count</span><span class="keyword">--;<br />        }<br /><br />        </span><span class="comment">//chunk the array based on map<br />        </span><span class="default">$chunked </span><span class="keyword">= array();<br />        foreach(</span><span class="default">$columns_map </span><span class="keyword">as </span><span class="default">$map</span><span class="keyword">){<br />            </span><span class="default">$chunked</span><span class="keyword">[] = </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$map</span><span class="keyword">);<br />        }<br />        <br />        return </span><span class="default">$chunked</span><span class="keyword">;<br />    }</span><span class="comment">//end get_array_columns<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126074">  <div class="votes">
    <div id="Vu126074">
    <a href="/manual/vote-note.php?id=126074&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126074">
    <a href="/manual/vote-note.php?id=126074&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126074" title="60% like this...">
    1
    </div>
  </div>
  <a href="#126074" class="name">
  <strong class="user"><em>leon at valkenb dot org</em></strong></a><a class="genanchor" href="#126074"> &para;</a><div class="date" title="2021-05-13 02:24"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126074">
<div class="phpcode"><code><span class="html">With no luck finding a function; here is the one I wrote:<br />It will evenly distribute items into a fixed amount of groups but also keeps items that were sorted close together to be in the same output groups.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">distributed_array_chunk</span><span class="keyword">(array </span><span class="default">$items</span><span class="keyword">, </span><span class="default">int $groups</span><span class="keyword">, </span><span class="default">bool $preserveKeys </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br /><br />    </span><span class="default">$grouped </span><span class="keyword">= [];<br />    </span><span class="default">$groupsPerItem </span><span class="keyword">= </span><span class="default">$groups </span><span class="keyword">/  </span><span class="default">count</span><span class="keyword">(</span><span class="default">$items</span><span class="keyword">);<br />    </span><span class="default">$progress </span><span class="keyword">= </span><span class="default">0.00</span><span class="keyword">;<br /><br />    foreach (</span><span class="default">$items </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br /><br />        </span><span class="default">$index </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$progress </span><span class="keyword">+= </span><span class="default">$groupsPerItem</span><span class="keyword">);<br /><br />        if (</span><span class="default">$preserveKeys</span><span class="keyword">) {<br />            </span><span class="default">$grouped</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        else{<br />            </span><span class="default">$grouped</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">][] = </span><span class="default">$value</span><span class="keyword">;<br />        }    <br />    }<br /><br />    return </span><span class="default">$grouped</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57835">  <div class="votes">
    <div id="Vu57835">
    <a href="/manual/vote-note.php?id=57835&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57835">
    <a href="/manual/vote-note.php?id=57835&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57835" title="57% like this...">
    5
    </div>
  </div>
  <a href="#57835" class="name">
  <strong class="user"><em>magick dit crow ot gmail dit com</em></strong></a><a class="genanchor" href="#57835"> &para;</a><div class="date" title="2005-10-15 10:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57835">
<div class="phpcode"><code><span class="html">This function takes each few elements of an array and averages them together. It then places the averages in a new array. It is used to smooth out data. For example lets say you have a years worth of hit data to a site and you want to graph it by the week. Then use a bucket of 7 and graph the functions output.<br /><br />function array_bucket($array, $bucket_size)  // bucket filter<br />{<br />    if (!is_array($array)) return false; // no empty arrays<br />    $buckets=array_chunk($array,$bucket_size);  // chop up array into bucket size units<br />    foreach ($buckets as $bucket) $new_array[key($buckets])=array_sum($bucket)/count($bucket);<br />    return $new_array;  // return new smooth array<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="119185">  <div class="votes">
    <div id="Vu119185">
    <a href="/manual/vote-note.php?id=119185&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119185">
    <a href="/manual/vote-note.php?id=119185&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119185" title="54% like this...">
    2
    </div>
  </div>
  <a href="#119185" class="name">
  <strong class="user"><em>normiridium at gmail dot com</em></strong></a><a class="genanchor" href="#119185"> &para;</a><div class="date" title="2016-04-17 10:55"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119185">
<div class="phpcode"><code><span class="html">A breakdown by groups with excess:<br /><br />function array_chunk_greedy($arr, $count){<br />    $arr = array_chunk($arr, $count);<br />    if(($k = count($arr)-1) &gt; 0){    <br />        if(count($arr[$k]) &lt; $count){<br />            $arr[$k-1] = array_merge($arr[$k-1], $arr[$k]);<br />            unset($arr[$k]);<br />        }            <br />    }<br />    return $arr;    <br />}<br /><br />$arr = range(1, 13);<br />$arr = array_chunk_greedy($arr, 4);<br /><br />print_r($arr);<br /><br />[1,2,3,4,5,6,7,8,9,10,11,12,13] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12,13]<br /><br />More examples:<br /><br />[1,2,3,4,5,6,7,8,9,10,11,12] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12]<br />[1,2,3,4,5,6,7,8,9,10,11,12,13] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12,13]<br />[1,2,3,4,5,6,7,8,9,10,11,12,13,14] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12,13,14]<br />[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12,13,14,15]<br />[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16] —&gt; [1,2,3,4] [5,6,7,8] [9,10,11,12] [13,14,15,16]<br /><br />Example report:<br /><br />$arr = range(1, 45);<br />$arr = array_chunk_lazy($arr, 10);<br /><br />$arr = array_map(function($sub_value) {<br />            return implode('&lt;br&gt;', $sub_value);<br />        }, $arr);<br /><br />$title = '&lt;h2&gt;title&lt;/h2&gt;';<br />$arr = $title.implode($title, $arr).$title;<br /><br />echo $arr;</span></code></div>
  </div>
 </div>
  <div class="note" id="56022">  <div class="votes">
    <div id="Vu56022">
    <a href="/manual/vote-note.php?id=56022&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56022">
    <a href="/manual/vote-note.php?id=56022&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56022" title="50% like this...">
    0
    </div>
  </div>
  <a href="#56022" class="name">
  <strong class="user"><em>webmaster at cafe-clope dot net</em></strong></a><a class="genanchor" href="#56022"> &para;</a><div class="date" title="2005-08-20 04:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56022">
<div class="phpcode"><code><span class="html">based on the same syntax, useful about making columns :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_chunk_fixed</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">, </span><span class="default">$preserve_keys </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">) {<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) ;<br />    if(</span><span class="default">$count</span><span class="keyword">)<br />        </span><span class="default">$input </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">ceil</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">/</span><span class="default">$num</span><span class="keyword">), </span><span class="default">$preserve_keys</span><span class="keyword">) ;<br />    </span><span class="default">$input </span><span class="keyword">= </span><span class="default">array_pad</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">, array()) ;<br />    return </span><span class="default">$input </span><span class="keyword">;<br />}<br /><br /></span><span class="default">$array </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">) ;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) ;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_chunk_fixed</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)) ;<br /></span><span class="default">?&gt;<br /></span><br />---- array_chunk : fixed number of sub-items ----<br />Array(<br />    [0] =&gt; Array(<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />        )<br />    [1] =&gt; Array(<br />            [0] =&gt; 3<br />            [1] =&gt; 4<br />        )<br /><br />    [2] =&gt; Array(<br />            [0] =&gt; 5<br />        )<br />)<br /><br />---- array_chunk : fixed number of columns ----<br />Array(<br />    [0] =&gt; Array(<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />            [2] =&gt; 3<br />        )<br />    [1] =&gt; Array(<br />            [0] =&gt; 4<br />            [1] =&gt; 5<br />        )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="57843">  <div class="votes">
    <div id="Vu57843">
    <a href="/manual/vote-note.php?id=57843&amp;page=function.array-chunk&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57843">
    <a href="/manual/vote-note.php?id=57843&amp;page=function.array-chunk&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57843" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#57843" class="name">
  <strong class="user"><em>magick dit crow ot gmail dit com</em></strong></a><a class="genanchor" href="#57843"> &para;</a><div class="date" title="2005-10-16 09:50"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57843">
<div class="phpcode"><code><span class="html">Mistake key did not do what I thought. A patch.<br /><br />function array_bucket($array,$bucket_size)// bucket filter<br />{<br />    if (!is_array($array)) return false;<br />    $buckets=array_chunk($array,$bucket_size);// chop up array into bucket size units<br />    $I=0;<br />    foreach ($buckets as $bucket)<br />    {<br />        $new_array[$I++]=array_sum($bucket)/count($bucket);<br />    }<br />    return $new_array;// return new array<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-chunk&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-chunk.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
