<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_intersect_key - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-intersect-key.php">
 <link rel="shorturl" href="https://www.php.net/array-intersect-key">
 <link rel="alternate" href="https://www.php.net/array-intersect-key" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-intersect-assoc.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-intersect-uassoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-intersect-key.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-intersect-key.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-intersect-key.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-intersect-key.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-intersect-key.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-intersect-key.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-intersect-key.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-intersect-key.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-intersect-key.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-intersect-key.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-intersect-key.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes the intersection of arrays using keys for comparison" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_intersect_key - Manual" />
<meta name="twitter:description" content="Computes the intersection of arrays using keys for comparison" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_intersect_key - Manual" />
<meta itemprop="description" content="Computes the intersection of arrays using keys for comparison" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes the intersection of arrays using keys for comparison" />

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
        <a href="function.array-intersect-uassoc.php">
          array_intersect_uassoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-intersect-assoc.php">
          &laquo; array_intersect_assoc        </a>
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
            <option value='en/function.array-intersect-key.php' selected="selected">English</option>
            <option value='de/function.array-intersect-key.php'>German</option>
            <option value='es/function.array-intersect-key.php'>Spanish</option>
            <option value='fr/function.array-intersect-key.php'>French</option>
            <option value='it/function.array-intersect-key.php'>Italian</option>
            <option value='ja/function.array-intersect-key.php'>Japanese</option>
            <option value='pt_BR/function.array-intersect-key.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-intersect-key.php'>Russian</option>
            <option value='tr/function.array-intersect-key.php'>Turkish</option>
            <option value='uk/function.array-intersect-key.php'>Ukrainian</option>
            <option value='zh/function.array-intersect-key.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-intersect-key" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_intersect_key</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_intersect_key</span> &mdash; <span class="dc-title">Computes the intersection of arrays using keys for comparison</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-intersect-key-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_intersect_key</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_intersect_key()</strong></span> returns an array
   containing all the entries of <code class="parameter">array</code>
   which have keys that are present in all the arguments.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-intersect-key-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array with master keys to check.
      </p>
     </dd>
    
    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Arrays to compare keys against.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-intersect-key-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array containing all the entries of 
   <code class="parameter">array</code> which have keys that are present in all
   arguments.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-intersect-key-changelog">
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
  <td>8.0.0</td>
  <td>
  This function can now be called with only one parameter.
  Formerly, at least two parameters have been required.
  </td>
</tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-intersect-key-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5237">
    <p><strong>Example #1 <span class="function"><strong>array_intersect_key()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'blue'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'red'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #DD0000">'green'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #DD0000">'purple' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'green' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">5</span><span style="color: #007700">, </span><span style="color: #DD0000">'blue' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">6</span><span style="color: #007700">, </span><span style="color: #DD0000">'yellow' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">7</span><span style="color: #007700">, </span><span style="color: #DD0000">'cyan'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">8</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">array_intersect_key</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">array(2) {
  [&quot;blue&quot;]=&gt;
  int(1)
  [&quot;green&quot;]=&gt;
  int(3)
}</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   In our example you see that only the keys <code class="literal">&#039;blue&#039;</code>
   and <code class="literal">&#039;green&#039;</code> are present in both arrays and thus
   returned. Also notice that the values for the keys
   <code class="literal">&#039;blue&#039;</code> and <code class="literal">&#039;green&#039;</code> differ between
   the two arrays. A match still occurs because only the keys are checked.
   The values returned are those of <code class="parameter">array</code>.
  </p>
  <p class="para">
   The two keys from the <code class="literal">key =&gt; value</code> pairs are
   considered equal only if
   <code class="literal">(string) $key1 === (string) $key2 </code>. In other words
   a strict type check is executed so the string representation must be
   the same.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-intersect-key-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-diff.php" class="function" rel="rdfs-seeAlso">array_diff()</a> - Computes the difference of arrays</span></li>
    <li><span class="function"><a href="function.array-udiff.php" class="function" rel="rdfs-seeAlso">array_udiff()</a> - Computes the difference of arrays by using a callback function for data comparison</span></li>
    <li><span class="function"><a href="function.array-diff-assoc.php" class="function" rel="rdfs-seeAlso">array_diff_assoc()</a> - Computes the difference of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-diff-uassoc.php" class="function" rel="rdfs-seeAlso">array_diff_uassoc()</a> - Computes the difference of arrays with additional index check which is performed by a user supplied callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-assoc.php" class="function" rel="rdfs-seeAlso">array_udiff_assoc()</a> - Computes the difference of arrays with additional index check, compares data by a callback function</span></li>
    <li><span class="function"><a href="function.array-udiff-uassoc.php" class="function" rel="rdfs-seeAlso">array_udiff_uassoc()</a> - Computes the difference of arrays with additional index check, compares data and indexes by a callback function</span></li>
    <li><span class="function"><a href="function.array-diff-key.php" class="function" rel="rdfs-seeAlso">array_diff_key()</a> - Computes the difference of arrays using keys for comparison</span></li>
    <li><span class="function"><a href="function.array-diff-ukey.php" class="function" rel="rdfs-seeAlso">array_diff_ukey()</a> - Computes the difference of arrays using a callback function on the keys for comparison</span></li>
    <li><span class="function"><a href="function.array-intersect.php" class="function" rel="rdfs-seeAlso">array_intersect()</a> - Computes the intersection of arrays</span></li>
    <li><span class="function"><a href="function.array-intersect-assoc.php" class="function" rel="rdfs-seeAlso">array_intersect_assoc()</a> - Computes the intersection of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-intersect-uassoc.php" class="function" rel="rdfs-seeAlso">array_intersect_uassoc()</a> - Computes the intersection of arrays with additional index check, compares indexes by a callback function</span></li>
    <li><span class="function"><a href="function.array-intersect-ukey.php" class="function" rel="rdfs-seeAlso">array_intersect_ukey()</a> - Computes the intersection of arrays using a callback function on the keys for comparison</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-intersect-key.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-intersect-key%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-intersect-key&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-intersect-key.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109706">  <div class="votes">
    <div id="Vu109706">
    <a href="/manual/vote-note.php?id=109706&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109706">
    <a href="/manual/vote-note.php?id=109706&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109706" title="95% like this...">
    271
    </div>
  </div>
  <a href="#109706" class="name">
  <strong class="user"><em>vladas dot dirzys at gmail dot com</em></strong></a><a class="genanchor" href="#109706"> &para;</a><div class="date" title="2012-08-13 08:03"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109706">
<div class="phpcode"><code><span class="html">Simple key white-list filter:
<br />
<br /><span class="default">&lt;?php
<br />$arr </span><span class="keyword">= array(</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">123</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">213</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="default">321</span><span class="keyword">);
<br /></span><span class="default">$allowed </span><span class="keyword">= array(</span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">);
<br />
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$allowed</span><span class="keyword">)));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Will return:
<br />Array
<br />(
<br />    [b] =&gt; 213
<br />    [c] =&gt; 321
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="126352">  <div class="votes">
    <div id="Vu126352">
    <a href="/manual/vote-note.php?id=126352&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126352">
    <a href="/manual/vote-note.php?id=126352&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126352" title="92% like this...">
    11
    </div>
  </div>
  <a href="#126352" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126352"> &para;</a><div class="date" title="2021-08-19 11:38"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126352">
<div class="phpcode"><code><span class="html">Note that the order of the keys in the returned array is the same as the order of the keys in the source array.<br /><br />To sort by the second array, then you may do so through array_replace.<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(<br />    </span><span class="string">'two'   </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />    </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,<br />    </span><span class="string">'one'   </span><span class="keyword">=&gt; </span><span class="string">'c'</span><span class="keyword">,<br />    );<br /><br /></span><span class="default">$keyswant </span><span class="keyword">= array(<br />    </span><span class="string">'one'       </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    </span><span class="string">'three'     </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    );<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">array_replace</span><span class="keyword">(</span><span class="default">$keyswant</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">), </span><span class="default">$keyswant</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />Shows:<br /><br />Array<br />(<br />    [one] =&gt; c<br />    [three] =&gt; b<br />)<br /><br />Rather than:<br /><br />Array<br />(<br />    [three] =&gt; b<br />    [one] =&gt; c<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="115006">  <div class="votes">
    <div id="Vu115006">
    <a href="/manual/vote-note.php?id=115006&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115006">
    <a href="/manual/vote-note.php?id=115006&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115006" title="88% like this...">
    21
    </div>
  </div>
  <a href="#115006" class="name">
  <strong class="user"><em>github.com/xmarcos</em></strong></a><a class="genanchor" href="#115006"> &para;</a><div class="date" title="2014-05-12 05:47"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115006">
<div class="phpcode"><code><span class="html">[Editor's note: changed array_merge_recursive() to array_replace_recursive() to fix the script]
<br />
<br />Here is a better way to merge settings using some defaults as a whitelist.
<br />
<br /><span class="default">&lt;?php
<br />
<br />$defaults </span><span class="keyword">= [
<br />    </span><span class="string">'id'            </span><span class="keyword">=&gt; </span><span class="default">123456</span><span class="keyword">,
<br />    </span><span class="string">'client_id'     </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,
<br />    </span><span class="string">'client_secret' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,
<br />    </span><span class="string">'options'       </span><span class="keyword">=&gt; [
<br />        </span><span class="string">'trusted' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,
<br />        </span><span class="string">'active'  </span><span class="keyword">=&gt; </span><span class="default">false
<br />    </span><span class="keyword">]
<br />];
<br />
<br /></span><span class="default">$options </span><span class="keyword">= [
<br />    </span><span class="string">'client_id'       </span><span class="keyword">=&gt; </span><span class="default">789</span><span class="keyword">,
<br />    </span><span class="string">'client_secret'   </span><span class="keyword">=&gt; </span><span class="string">'5ebe2294ecd0e0f08eab7690d2a6ee69'</span><span class="keyword">,
<br />    </span><span class="string">'client_password' </span><span class="keyword">=&gt; </span><span class="string">'5f4dcc3b5aa765d61d8327deb882cf99'</span><span class="keyword">, </span><span class="comment">// ignored
<br />    </span><span class="string">'client_name'     </span><span class="keyword">=&gt; </span><span class="string">'IGNORED'</span><span class="keyword">,                          </span><span class="comment">// ignored
<br />    </span><span class="string">'options'         </span><span class="keyword">=&gt; [
<br />        </span><span class="string">'active' </span><span class="keyword">=&gt; </span><span class="default">true
<br />    </span><span class="keyword">]
<br />];
<br />
<br /></span><span class="default">var_dump</span><span class="keyword">(
<br />    </span><span class="default">array_replace_recursive</span><span class="keyword">(</span><span class="default">$defaults</span><span class="keyword">, 
<br />        </span><span class="default">array_intersect_key</span><span class="keyword">(
<br />            </span><span class="default">$options</span><span class="keyword">, </span><span class="default">$defaults
<br />        </span><span class="keyword">)
<br />    )
<br />);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Output:
<br />
<br />array (size=4)
<br />    'id'            =&gt; int 123456
<br />    'client_id'     =&gt; int 789
<br />    'client_secret' =&gt; string '5ebe2294ecd0e0f08eab7690d2a6ee69' (length=32)
<br />    'options'       =&gt; 
<br />        array (size=2)
<br />            'trusted' =&gt; boolean false
<br />            'active'  =&gt; boolean true</span></code></div>
  </div>
 </div>
  <div class="note" id="104950">  <div class="votes">
    <div id="Vu104950">
    <a href="/manual/vote-note.php?id=104950&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104950">
    <a href="/manual/vote-note.php?id=104950&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104950" title="68% like this...">
    12
    </div>
  </div>
  <a href="#104950" class="name">
  <strong class="user"><em>pgl at yoyo dot org</em></strong></a><a class="genanchor" href="#104950"> &para;</a><div class="date" title="2011-07-18 08:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104950">
<div class="phpcode"><code><span class="html">Note that the order of the keys in the returned array is the same as the order of the keys in the source array. eg:<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(<br />    </span><span class="string">'two'   </span><span class="keyword">=&gt; </span><span class="string">'a'</span><span class="keyword">,<br />    </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,<br />    </span><span class="string">'one'   </span><span class="keyword">=&gt; </span><span class="string">'c'</span><span class="keyword">,<br />    );<br /><br /></span><span class="default">$keyswant </span><span class="keyword">= array(<br />    </span><span class="string">'one'       </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    </span><span class="string">'three'     </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    );<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$keyswant</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />Shows:<br /><br />Array<br />(<br />    [three] =&gt; b<br />    [one] =&gt; c<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="116806">  <div class="votes">
    <div id="Vu116806">
    <a href="/manual/vote-note.php?id=116806&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116806">
    <a href="/manual/vote-note.php?id=116806&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116806" title="63% like this...">
    3
    </div>
  </div>
  <a href="#116806" class="name">
  <strong class="user"><em>Reed Silver</em></strong></a><a class="genanchor" href="#116806"> &para;</a><div class="date" title="2015-03-02 11:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116806">
<div class="phpcode"><code><span class="html">If you want an array that has no key value pairs added from the second array:<br /><br />$new = array_intersect_key($b, $a) + $a;</span></code></div>
  </div>
 </div>
  <div class="note" id="80227">  <div class="votes">
    <div id="Vu80227">
    <a href="/manual/vote-note.php?id=80227&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80227">
    <a href="/manual/vote-note.php?id=80227&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80227" title="63% like this...">
    5
    </div>
  </div>
  <a href="#80227" class="name">
  <strong class="user"><em>CBWhiz at gmail dot com</em></strong></a><a class="genanchor" href="#80227"> &para;</a><div class="date" title="2008-01-04 02:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80227">
<div class="phpcode"><code><span class="html">I have found the following helpful:<br /><span class="default">&lt;?PHP<br /></span><span class="keyword">function </span><span class="default">array_merge_default</span><span class="keyword">(</span><span class="default">$default</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">) {<br />        </span><span class="default">$intersect </span><span class="keyword">= </span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$default</span><span class="keyword">); </span><span class="comment">//Get data for which a default exists<br />        </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$default</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">); </span><span class="comment">//Get defaults which are not present in data<br />        </span><span class="keyword">return </span><span class="default">$diff </span><span class="keyword">+ </span><span class="default">$intersect</span><span class="keyword">; </span><span class="comment">//Arrays have different keys, return the union of the two<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span>It's use is like both of the functions it uses, but keeps defaults and _only_ defaults. It's designed for key arrays, and i'm not sure how it will work on numeric indexed arrays.<br /><br />Example:<br /><span class="default">&lt;?PHP<br />$default </span><span class="keyword">= array(<br /> </span><span class="string">"one" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br /> </span><span class="string">"two" </span><span class="keyword">=&gt; </span><span class="default">2<br /></span><span class="keyword">);<br /></span><span class="default">$untrusted </span><span class="keyword">= array(<br /> </span><span class="string">"one" </span><span class="keyword">=&gt; </span><span class="default">42</span><span class="keyword">,<br /> </span><span class="string">"three" </span><span class="keyword">=&gt; </span><span class="default">3<br /></span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_merge_default</span><span class="keyword">(</span><span class="default">$default</span><span class="keyword">, </span><span class="default">$untrusted</span><span class="keyword">));<br /><br />array(</span><span class="default">2</span><span class="keyword">) {<br />  [</span><span class="string">"two"</span><span class="keyword">]=&gt;<br />  </span><span class="default">int</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">)<br />  [</span><span class="string">"one"</span><span class="keyword">]=&gt;<br />  </span><span class="default">int</span><span class="keyword">(</span><span class="default">42</span><span class="keyword">)<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="63797">  <div class="votes">
    <div id="Vu63797">
    <a href="/manual/vote-note.php?id=63797&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63797">
    <a href="/manual/vote-note.php?id=63797&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63797" title="60% like this...">
    3
    </div>
  </div>
  <a href="#63797" class="name">
  <strong class="user"><em>Anton Backer</em></strong></a><a class="genanchor" href="#63797"> &para;</a><div class="date" title="2006-03-30 11:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63797">
<div class="phpcode"><code><span class="html">Jesse: no, array_intersect_key does not accomplish the same thing as what you posted:<br /><br />array_flip (array_intersect (array_flip ($a), array_flip ($b)))<br /><br />because when the array is flipped, values become keys. having duplicate values is not a problem, but having duplicate keys is. array_flip resolves it by keeping only one of the duplicates and discarding the rest. by the time you start intersecting, you've already lost information.</span></code></div>
  </div>
 </div>
  <div class="note" id="94553">  <div class="votes">
    <div id="Vu94553">
    <a href="/manual/vote-note.php?id=94553&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94553">
    <a href="/manual/vote-note.php?id=94553&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94553" title="57% like this...">
    1
    </div>
  </div>
  <a href="#94553" class="name">
  <strong class="user"><em>chrisbloom7 at gmail dot com</em></strong></a><a class="genanchor" href="#94553"> &para;</a><div class="date" title="2009-11-11 10:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94553">
<div class="phpcode"><code><span class="html">Regarding php at keithtylerdotcom solution to emulate<br /><br /><span class="default">&lt;?php<br />$z </span><span class="keyword">= </span><span class="default">someFuncReturningAnArray</span><span class="keyword">()[</span><span class="string">'some_key'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />His recommended solution will still return an array. To get the value of a single key in an array returned by a function, simply add implode() to the recipe:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">someFuncReturningAnArray</span><span class="keyword">() {<br />  return array(<br />    </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'b'</span><span class="keyword">,<br />    </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">'d'</span><span class="keyword">,<br />    </span><span class="string">'e' </span><span class="keyword">=&gt; </span><span class="string">'f'</span><span class="keyword">,<br />    </span><span class="string">'g' </span><span class="keyword">=&gt; </span><span class="string">'h'</span><span class="keyword">,<br />    </span><span class="string">'i' </span><span class="keyword">=&gt; </span><span class="string">'j'<br />  </span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//traditional way<br /></span><span class="default">$temp </span><span class="keyword">= </span><span class="default">someFuncReturningAnArray</span><span class="keyword">();<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">$temp</span><span class="keyword">[</span><span class="string">'a'</span><span class="keyword">];<br />echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) . </span><span class="string">"\n----------\n"</span><span class="keyword">;<br /><br /></span><span class="comment">//keithtylerdotcom one-line method<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">someFuncReturningAnArray</span><span class="keyword">(), array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">));<br />echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) . </span><span class="string">"\n----------\n"</span><span class="keyword">;<br /><br /></span><span class="comment">//better one line method<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">someFuncReturningAnArray</span><span class="keyword">(), array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">)));<br />echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) . </span><span class="string">"\n----------\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93720">  <div class="votes">
    <div id="Vu93720">
    <a href="/manual/vote-note.php?id=93720&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93720">
    <a href="/manual/vote-note.php?id=93720&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93720" title="50% like this...">
    0
    </div>
  </div>
  <a href="#93720" class="name">
  <strong class="user"><em>markus dot kappe at dix dot at</em></strong></a><a class="genanchor" href="#93720"> &para;</a><div class="date" title="2009-09-24 04:43"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93720">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">/**<br />     * calculates intersection of two arrays like array_intersect_key but recursive<br />     *<br />     * @param  array/mixed  master array<br />     * @param  array        array that has the keys which should be kept in the master array<br />     * @return array/mixed  cleand master array<br />     */<br />    </span><span class="keyword">function </span><span class="default">myIntersect</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">, </span><span class="default">$mask</span><span class="keyword">) {<br />        if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">)) { return </span><span class="default">$master</span><span class="keyword">; }<br />        foreach (</span><span class="default">$master </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">) {<br />            if (!isset(</span><span class="default">$mask</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">])) { unset (</span><span class="default">$master</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]); continue; } </span><span class="comment">// remove value from $master if the key is not present in $mask<br />            </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">])) { </span><span class="default">$master</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">] = </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">myIntersect</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">], </span><span class="default">$mask</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]); } </span><span class="comment">// recurse when mask is an array<br />            // else simply keep value<br />        </span><span class="keyword">}<br />        return </span><span class="default">$master</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113332">  <div class="votes">
    <div id="Vu113332">
    <a href="/manual/vote-note.php?id=113332&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113332">
    <a href="/manual/vote-note.php?id=113332&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113332" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#113332" class="name">
  <strong class="user"><em>pixelf3hler at visualize-me dot de</em></strong></a><a class="genanchor" href="#113332"> &para;</a><div class="date" title="2013-09-28 08:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113332">
<div class="phpcode"><code><span class="html">in case you came here looking for a function that returns an array containing the values of `all` arrays with intersecting keys:<br /><span class="default">&lt;?php<br />   </span><span class="keyword">function </span><span class="default">array_merge_on_key</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) {<br />      </span><span class="default">$arrays </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">func_get_args</span><span class="keyword">(), </span><span class="default">1</span><span class="keyword">);<br />      </span><span class="default">$r </span><span class="keyword">= array();<br />      foreach(</span><span class="default">$arrays </span><span class="keyword">as &amp;</span><span class="default">$a</span><span class="keyword">) {<br />         if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">)) {<br />            </span><span class="default">$r</span><span class="keyword">[] = </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />            continue;<br />         }<br />      }<br />      return </span><span class="default">$r</span><span class="keyword">;<br />   }<br />   </span><span class="comment">// example:<br />   </span><span class="default">$array1 </span><span class="keyword">= array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">12</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Karl"</span><span class="keyword">);<br />   </span><span class="default">$array2 </span><span class="keyword">= array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Franz"</span><span class="keyword">);<br />   </span><span class="default">$array3 </span><span class="keyword">= array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">9</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Helmut"</span><span class="keyword">);<br />   </span><span class="default">$array4 </span><span class="keyword">= array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Kurt"</span><span class="keyword">);<br /><br />   </span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_merge_on_key</span><span class="keyword">(</span><span class="string">"id"</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array3</span><span class="keyword">, </span><span class="default">$array4</span><span class="keyword">);<br /><br />   echo </span><span class="default">implode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">); </span><span class="comment">// =&gt; 12,4,9,10<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89126">  <div class="votes">
    <div id="Vu89126">
    <a href="/manual/vote-note.php?id=89126&amp;page=function.array-intersect-key&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89126">
    <a href="/manual/vote-note.php?id=89126&amp;page=function.array-intersect-key&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89126" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#89126" class="name">
  <strong class="user"><em>pdemaziere at gmail dot com</em></strong></a><a class="genanchor" href="#89126"> &para;</a><div class="date" title="2009-02-23 07:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89126">
<div class="phpcode"><code><span class="html">Just a simple script if you want to use one array, which contains only zeros and ones, as mask for another one (both arrays must have the same size of course). $outcome is an array that contains only those values from $source where $mask is equal to 1.
<br />
<br /><span class="default">&lt;?php
<br />$outcome </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">( </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">), </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$mask</span><span class="keyword">)) ));
<br /></span><span class="default">?&gt;
<br /></span>
<br />PS: the array_values() function is necessary to ensure that both arrays have the same numbering/keys, otherwise your masking does not behave as you expect.
<br />
<br />Enjoy!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-intersect-key&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-intersect-key.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
