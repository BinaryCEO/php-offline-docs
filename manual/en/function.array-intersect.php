<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_intersect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-intersect.php">
 <link rel="shorturl" href="https://www.php.net/array-intersect">
 <link rel="alternate" href="https://www.php.net/array-intersect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-flip.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-intersect-assoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-intersect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-intersect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-intersect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-intersect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-intersect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-intersect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-intersect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-intersect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-intersect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-intersect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-intersect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes the intersection of arrays" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_intersect - Manual" />
<meta name="twitter:description" content="Computes the intersection of arrays" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_intersect - Manual" />
<meta itemprop="description" content="Computes the intersection of arrays" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes the intersection of arrays" />

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
        <a href="function.array-intersect-assoc.php">
          array_intersect_assoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-flip.php">
          &laquo; array_flip        </a>
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
            <option value='en/function.array-intersect.php' selected="selected">English</option>
            <option value='de/function.array-intersect.php'>German</option>
            <option value='es/function.array-intersect.php'>Spanish</option>
            <option value='fr/function.array-intersect.php'>French</option>
            <option value='it/function.array-intersect.php'>Italian</option>
            <option value='ja/function.array-intersect.php'>Japanese</option>
            <option value='pt_BR/function.array-intersect.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-intersect.php'>Russian</option>
            <option value='tr/function.array-intersect.php'>Turkish</option>
            <option value='uk/function.array-intersect.php'>Ukrainian</option>
            <option value='zh/function.array-intersect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-intersect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_intersect</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_intersect</span> &mdash; <span class="dc-title">Computes the intersection of arrays</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-intersect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_intersect</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_intersect()</strong></span> returns an array
   containing all the values of <code class="parameter">array</code>
   that are present in all the arguments.
   Note that keys are preserved.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-intersect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array with master values to check.
      </p>
     </dd>
    
    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Arrays to compare values against.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-intersect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array containing all of the values in 
   <code class="parameter">array</code> whose values exist in all of the parameters.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-intersect-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.array-intersect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5235">
    <p><strong>Example #1 <span class="function"><strong>array_intersect()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_intersect</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [a] =&gt; green
    [0] =&gt; red
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.array-intersect-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Two elements are considered equal if and only if
    <code class="literal">(string) $elem1 === (string) $elem2</code>. In words:
    when the string representation is the same.
    
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-intersect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-intersect-assoc.php" class="function" rel="rdfs-seeAlso">array_intersect_assoc()</a> - Computes the intersection of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-diff.php" class="function" rel="rdfs-seeAlso">array_diff()</a> - Computes the difference of arrays</span></li>
    <li><span class="function"><a href="function.array-diff-assoc.php" class="function" rel="rdfs-seeAlso">array_diff_assoc()</a> - Computes the difference of arrays with additional index check</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-intersect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-intersect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-intersect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-intersect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84286">  <div class="votes">
    <div id="Vu84286">
    <a href="/manual/vote-note.php?id=84286&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84286">
    <a href="/manual/vote-note.php?id=84286&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84286" title="83% like this...">
    174
    </div>
  </div>
  <a href="#84286" class="name">
  <strong class="user"><em>stuart at horuskol dot co dot uk</em></strong></a><a class="genanchor" href="#84286"> &para;</a><div class="date" title="2008-07-07 03:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84286">
<div class="phpcode"><code><span class="html">A clearer example of the key preservation of this function:<br /><br /><span class="default">&lt;?php<br /><br />$array1 </span><span class="keyword">= array(</span><span class="default">2</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">12</span><span class="keyword">);<br /></span><span class="default">$array2 </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />yields the following:<br /><br />array(3) {<br />  [0]=&gt; int(2)<br />  [1]=&gt; int(4)<br />  [2]=&gt; int(6)<br />}<br /><br />array(3) {<br />  [1]=&gt; int(2)<br />  [3]=&gt; int(4)<br />  [5]=&gt; int(6)<br />}<br /><br />This makes it important to remember which way round you passed the arrays to the function if these keys are relied on later in the script.</span></code></div>
  </div>
 </div>
  <div class="note" id="127042">  <div class="votes">
    <div id="Vu127042">
    <a href="/manual/vote-note.php?id=127042&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127042">
    <a href="/manual/vote-note.php?id=127042&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127042" title="88% like this...">
    7
    </div>
  </div>
  <a href="#127042" class="name">
  <strong class="user"><em>theking at king dot ma</em></strong></a><a class="genanchor" href="#127042"> &para;</a><div class="date" title="2022-05-09 05:44"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127042">
<div class="phpcode"><code><span class="html">I use array_intersect for a quick check of $_GET parameters;<br /><br /><span class="default">&lt;?php </span><span class="keyword">declare(</span><span class="default">strict_types</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br /><br /></span><span class="default">$_params </span><span class="keyword">= [</span><span class="string">'cust_id'</span><span class="keyword">,</span><span class="string">'prod_id'</span><span class="keyword">];<br /></span><span class="default">$_params_check </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">),</span><span class="default">$_params</span><span class="keyword">);<br />if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$_params_check</span><span class="keyword">) !== </span><span class="default">count</span><span class="keyword">(</span><span class="default">$_params</span><span class="keyword">)) {<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"HTTP/1.1 400 Bad Request"</span><span class="keyword">);<br />    die();<br />}<br /></span><span class="default">?&gt;<br /></span><br />the file will die with a 400 error if cust_id or prod_id or both are missing from $_GET. But i could be used on $_POST and $_REQUEST as  well obviously.</span></code></div>
  </div>
 </div>
  <div class="note" id="69762">  <div class="votes">
    <div id="Vu69762">
    <a href="/manual/vote-note.php?id=69762&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69762">
    <a href="/manual/vote-note.php?id=69762&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69762" title="73% like this...">
    77
    </div>
  </div>
  <a href="#69762" class="name">
  <strong class="user"><em>Niels</em></strong></a><a class="genanchor" href="#69762"> &para;</a><div class="date" title="2006-09-19 04:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69762">
<div class="phpcode"><code><span class="html">Here is a array_union($a, $b):<br /><br /><span class="default">&lt;?php<br />                                        </span><span class="comment">//  $a = 1 2 3 4<br />    </span><span class="default">$union </span><span class="keyword">=                            </span><span class="comment">//  $b =   2   4 5 6<br />        </span><span class="default">array_merge</span><span class="keyword">(<br />            </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">),    </span><span class="comment">//         2   4<br />            </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">),         </span><span class="comment">//       1   3<br />            </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">)          </span><span class="comment">//               5 6<br />        </span><span class="keyword">);                              </span><span class="comment">//  $u = 1 2 3 4 5 6<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125718">  <div class="votes">
    <div id="Vu125718">
    <a href="/manual/vote-note.php?id=125718&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125718">
    <a href="/manual/vote-note.php?id=125718&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125718" title="83% like this...">
    4
    </div>
  </div>
  <a href="#125718" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125718"> &para;</a><div class="date" title="2021-01-25 01:52"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125718">
<div class="phpcode"><code><span class="html">array_intersect             use Value, not callback<br />array_uintersect            use Value, callback receives Value<br />array_intersect_key         use Key, not callback<br />array_intersect_ukey        use Key, callback receives Key<br />array_intersect_assoc       use Both, not callback<br />array_intersect_uassoc      use Both, callback receives Key ONLY<br />array_uintersect_assoc      use Both, callback receives Value ONLY<br />array_uintersect_uassoc     use Both, One callback receives the Key, the other receives the Value.</span></code></div>
  </div>
 </div>
  <div class="note" id="92900">  <div class="votes">
    <div id="Vu92900">
    <a href="/manual/vote-note.php?id=92900&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92900">
    <a href="/manual/vote-note.php?id=92900&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92900" title="68% like this...">
    22
    </div>
  </div>
  <a href="#92900" class="name">
  <strong class="user"><em>Shawn Pyle</em></strong></a><a class="genanchor" href="#92900"> &para;</a><div class="date" title="2009-08-13 09:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92900">
<div class="phpcode"><code><span class="html">array_intersect handles duplicate items in arrays differently. If there are duplicates in the first array, all matching duplicates will be returned. If there are duplicates in any of the subsequent arrays they will not be returned. <br /><br /><span class="default">&lt;?php<br />array_intersect</span><span class="keyword">(array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">),array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)); </span><span class="comment">//=&gt; array(1,2,2)<br /></span><span class="default">array_intersect</span><span class="keyword">(array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">),array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)); </span><span class="comment">//=&gt; array(1,2)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53728">  <div class="votes">
    <div id="Vu53728">
    <a href="/manual/vote-note.php?id=53728&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53728">
    <a href="/manual/vote-note.php?id=53728&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53728" title="65% like this...">
    23
    </div>
  </div>
  <a href="#53728" class="name">
  <strong class="user"><em>sapenov at gmail dot com</em></strong></a><a class="genanchor" href="#53728"> &para;</a><div class="date" title="2005-06-10 01:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53728">
<div class="phpcode"><code><span class="html">If you need to supply arbitrary number of arguments <br />to array_intersect() or other array function, <br />use following function:<br /><br />$full=call_user_func_array('array_intersect', $any_number_of_arrays_here);</span></code></div>
  </div>
 </div>
  <div class="note" id="117289">  <div class="votes">
    <div id="Vu117289">
    <a href="/manual/vote-note.php?id=117289&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117289">
    <a href="/manual/vote-note.php?id=117289&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117289" title="65% like this...">
    11
    </div>
  </div>
  <a href="#117289" class="name">
  <strong class="user"><em>yuval at visualdomains dot com</em></strong></a><a class="genanchor" href="#117289"> &para;</a><div class="date" title="2015-05-17 01:17"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117289">
<div class="phpcode"><code><span class="html">Using isset to achieve this, is many times faster:<br /><br /><span class="default">&lt;?php<br /><br /> $m </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,</span><span class="default">1000000</span><span class="keyword">);<br />  </span><span class="default">$s </span><span class="keyword">= [</span><span class="default">2</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">];<br /><br /></span><span class="comment">// Use array_intersect to return all $m values that are also in $s<br />  </span><span class="default">$tstart </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">print_r </span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">,</span><span class="default">$s</span><span class="keyword">));<br />  </span><span class="default">$tend </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$tend </span><span class="keyword">- </span><span class="default">$tstart</span><span class="keyword">;<br />  echo </span><span class="string">"Took </span><span class="default">$time</span><span class="string">"</span><span class="keyword">;<br />  <br /> </span><span class="comment">// Use array_flip and isset to return all $m values that are also in $s<br />  </span><span class="default">$tstart </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">$f </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br /></span><span class="comment">/* $f now looks like this:<br />(<br />    [2] =&gt; 0<br />    [4] =&gt; 1<br />    [6] =&gt; 2<br />    [8] =&gt; 3<br />    [10] =&gt; 4<br />)<br />*/<br />// $u will hold the intersected values<br />  </span><span class="default">$u </span><span class="keyword">= [];<br />  foreach (</span><span class="default">$m </span><span class="keyword">as </span><span class="default">$v</span><span class="keyword">) {<br />    if (isset(</span><span class="default">$f</span><span class="keyword">[</span><span class="default">$v</span><span class="keyword">])) </span><span class="default">$u</span><span class="keyword">[] = </span><span class="default">$v</span><span class="keyword">;<br />  }<br />  </span><span class="default">print_r </span><span class="keyword">(</span><span class="default">$u</span><span class="keyword">);<br />   </span><span class="default">$tend </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">$time </span><span class="keyword">= </span><span class="default">$tend </span><span class="keyword">- </span><span class="default">$tstart</span><span class="keyword">;<br />  echo </span><span class="string">"Took </span><span class="default">$time</span><span class="string">"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Results:<br /><br />Array<br />(<br />    [1] =&gt; 2<br />    [3] =&gt; 4<br />    [5] =&gt; 6<br />    [7] =&gt; 8<br />    [9] =&gt; 10<br />)<br />Took 4.7170009613037<br />(<br />    [0] =&gt; 2<br />    [1] =&gt; 4<br />    [2] =&gt; 6<br />    [3] =&gt; 8<br />    [4] =&gt; 10<br />)<br />Took 0.056024074554443<br /><br />array_intersect: 4.717<br />array_flip+isset: 0.056</span></code></div>
  </div>
 </div>
  <div class="note" id="46544">  <div class="votes">
    <div id="Vu46544">
    <a href="/manual/vote-note.php?id=46544&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46544">
    <a href="/manual/vote-note.php?id=46544&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46544" title="65% like this...">
    16
    </div>
  </div>
  <a href="#46544" class="name">
  <strong class="user"><em>blu at dotgeek dot org</em></strong></a><a class="genanchor" href="#46544"> &para;</a><div class="date" title="2004-10-14 05:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46544">
<div class="phpcode"><code><span class="html">Note that array_intersect and array_unique doesnt work well with multidimensional arrays.<br />If you have, for example, <br /><br /><span class="default">&lt;?php<br /><br />$orders_today</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = array(</span><span class="string">'John Doe'</span><span class="keyword">, </span><span class="string">'PHP Book'</span><span class="keyword">);<br /></span><span class="default">$orders_today</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = array(</span><span class="string">'Jack Smith'</span><span class="keyword">, </span><span class="string">'Coke'</span><span class="keyword">);<br /><br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = array(</span><span class="string">'Miranda Jones'</span><span class="keyword">, </span><span class="string">'Digital Watch'</span><span class="keyword">);<br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = array(</span><span class="string">'John Doe'</span><span class="keyword">, </span><span class="string">'PHP Book'</span><span class="keyword">);<br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = array(</span><span class="string">'Z? da Silva'</span><span class="keyword">, </span><span class="string">'BMW Car'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />and wants to know if the same person bought the same thing today and yesterday and use array_intersect($orders_today, $orders_yesterday) you'll get as result:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">John Doe<br />            </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">PHP Book<br />        </span><span class="keyword">)<br /><br />    [</span><span class="default">1</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">Jack Smith<br />            </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">Coke<br />        </span><span class="keyword">)<br /><br />)<br /><br /></span><span class="default">?&gt;<br /></span><br />but we can get around that by serializing the inner arrays:<br /><span class="default">&lt;?php<br /><br />$orders_today</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">serialize</span><span class="keyword">(array(</span><span class="string">'John Doe'</span><span class="keyword">, </span><span class="string">'PHP Book'</span><span class="keyword">));<br /></span><span class="default">$orders_today</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">serialize</span><span class="keyword">(array(</span><span class="string">'Jack Smith'</span><span class="keyword">, </span><span class="string">'Coke'</span><span class="keyword">));<br /><br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">serialize</span><span class="keyword">(array(</span><span class="string">'Miranda Jones'</span><span class="keyword">, </span><span class="string">'Digital Watch'</span><span class="keyword">));<br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] = </span><span class="default">serialize</span><span class="keyword">(array(</span><span class="string">'John Doe'</span><span class="keyword">, </span><span class="string">'PHP Book'</span><span class="keyword">));<br /></span><span class="default">$orders_yesterday</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] = </span><span class="default">serialize</span><span class="keyword">(array(</span><span class="string">'Z? da Silva'</span><span class="keyword">, </span><span class="string">'Uncle Tungsten'</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />so that array_map("unserialize", array_intersect($orders_today, $orders_yesterday)) will return:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">John Doe<br />            </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">PHP Book<br />        </span><span class="keyword">)<br /><br />)<br /><br /></span><span class="default">?&gt;<br /></span><br />showing us who bought the same thing today and yesterday =)<br /><br />[]s</span></code></div>
  </div>
 </div>
  <div class="note" id="104063">  <div class="votes">
    <div id="Vu104063">
    <a href="/manual/vote-note.php?id=104063&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104063">
    <a href="/manual/vote-note.php?id=104063&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104063" title="65% like this...">
    9
    </div>
  </div>
  <a href="#104063" class="name">
  <strong class="user"><em>dml at nm dot ru</em></strong></a><a class="genanchor" href="#104063"> &para;</a><div class="date" title="2011-05-20 05:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104063">
<div class="phpcode"><code><span class="html">The built-in function returns wrong result when input arrays have duplicate values.
<br />Here is a code that works correctly:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_intersect_fixed</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">) {
<br />    </span><span class="default">$result </span><span class="keyword">= array();
<br />    foreach (</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">) {
<br />      if ((</span><span class="default">$key </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">))!==</span><span class="default">false</span><span class="keyword">) {
<br />         </span><span class="default">$result</span><span class="keyword">[] = </span><span class="default">$val</span><span class="keyword">;
<br />         unset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />      }
<br />    }
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117486">  <div class="votes">
    <div id="Vu117486">
    <a href="/manual/vote-note.php?id=117486&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117486">
    <a href="/manual/vote-note.php?id=117486&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117486" title="60% like this...">
    3
    </div>
  </div>
  <a href="#117486" class="name">
  <strong class="user"><em>matang dot dave at gmail dot com</em></strong></a><a class="genanchor" href="#117486"> &para;</a><div class="date" title="2015-06-17 02:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117486">
<div class="phpcode"><code><span class="html">Take care of value types while using array_intersect function as there is no option for strict type check as in in_array function.<br /><br />$array1 = array(true,2);<br />$array2 = array(1, 2, 3, 4, 5, 6);<br /><br />var_dump(array_intersect($array1, $array2));<br /><br />result is :<br />array(2) {<br />        [0] =&gt;  bool(true)<br />        [1]  =&gt;  int(2)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="85006">  <div class="votes">
    <div id="Vu85006">
    <a href="/manual/vote-note.php?id=85006&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85006">
    <a href="/manual/vote-note.php?id=85006&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85006" title="60% like this...">
    4
    </div>
  </div>
  <a href="#85006" class="name">
  <strong class="user"><em>Esfandiar -- e.bandari at gmail dot com</em></strong></a><a class="genanchor" href="#85006"> &para;</a><div class="date" title="2008-08-10 12:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85006">
<div class="phpcode"><code><span class="html">Regarding array union:  Here is a faster version array_union($a, $b)<br /><br />But it is not needed!  See below.<br /><br /><span class="default">&lt;?php<br />                                        </span><span class="comment">//  $a = 1 2 3 4<br />    </span><span class="default">$union </span><span class="keyword">=                            </span><span class="comment">//  $b =   2   4 5 6<br />        </span><span class="default">array_merge</span><span class="keyword">(<br />            </span><span class="default">$a</span><span class="keyword">,    <br />            </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">)          </span><span class="comment">//               5 6<br />        </span><span class="keyword">);                              </span><span class="comment">//  $u = 1 2 3 4 5 6<br /></span><span class="default">?&gt;</span> <br /><br />You get the same result with $a + $b.<br /><br />N.B. for associative array the results of $a+$b and $b+$a are different, I think array_diff_key is used.<br /><br />Cheers, E</span></code></div>
  </div>
 </div>
  <div class="note" id="81000">  <div class="votes">
    <div id="Vu81000">
    <a href="/manual/vote-note.php?id=81000&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81000">
    <a href="/manual/vote-note.php?id=81000&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81000" title="54% like this...">
    1
    </div>
  </div>
  <a href="#81000" class="name">
  <strong class="user"><em>Malte</em></strong></a><a class="genanchor" href="#81000"> &para;</a><div class="date" title="2008-02-10 10:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81000">
<div class="phpcode"><code><span class="html">Extending the posting by Terry from 07-Feb-2006 04:42:<br /><br />If you want to use this function with arrays which have sometimes the same value several times, it won't be checked if they're existing in the second array as much as in the first.<br />So I delete the value in the second array, if it's found there:<br /><br /><span class="default">&lt;?php<br />$firstarray </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$secondarray </span><span class="keyword">= array(</span><span class="default">4</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="comment">//array_intersect($firstarray, $secondarray): 1, 1, 1, 4<br /><br /></span><span class="keyword">foreach (</span><span class="default">$firstarray </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">){<br />    if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$secondarray</span><span class="keyword">)){<br />        unset(</span><span class="default">$firstarray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }else{<br />        unset(</span><span class="default">$secondarray</span><span class="keyword">[</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$secondarray</span><span class="keyword">)]);<br />    }<br />}<br /><br /></span><span class="comment">//$firstarray: 1, 1, 4<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="67661">  <div class="votes">
    <div id="Vu67661">
    <a href="/manual/vote-note.php?id=67661&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67661">
    <a href="/manual/vote-note.php?id=67661&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67661" title="53% like this...">
    1
    </div>
  </div>
  <a href="#67661" class="name">
  <strong class="user"><em>nthitz at gmail dot com</em></strong></a><a class="genanchor" href="#67661"> &para;</a><div class="date" title="2006-06-08 09:09"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67661">
<div class="phpcode"><code><span class="html">I did some trials and if you know the approximate size of the arrays then it would seem to be a lot faster to do this <span class="default">&lt;?php array_intersect</span><span class="keyword">(</span><span class="default">$smallerArray</span><span class="keyword">, </span><span class="default">$largerArray</span><span class="keyword">); </span><span class="default">?&gt;</span> Where $smallerArray is the array with lesser items. I only tested this with long strings but I would imagine that it is somewhat universal.</span></code></div>
  </div>
 </div>
  <div class="note" id="130221">  <div class="votes">
    <div id="Vu130221">
    <a href="/manual/vote-note.php?id=130221&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130221">
    <a href="/manual/vote-note.php?id=130221&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130221" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130221" class="name">
  <strong class="user"><em>ivan dot jelenic42 at gmail dot com</em></strong></a><a class="genanchor" href="#130221"> &para;</a><div class="date" title="2025-04-03 03:11"><strong>5 months ago</strong></div>
  <div class="text" id="Hcom130221">
<div class="phpcode"><code><span class="html">It preserves from the first array:<br />- keys<br />- order of elements<br />- duplicates<br /><br />Duplicates: note that if the first array has just one value, and the other array has two of those values, only one will be returned, but in the opposite case, two will be returned.<br /><br />Order of elements: it's preserved from the first array even if integer keys are out of order.<br /><br />Example:<br />________________________________<br /><span class="default">&lt;?php<br /><br />$array1 </span><span class="keyword">= [</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'cherry'</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="string">'banana'</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">'cherry'</span><span class="keyword">];<br /></span><span class="default">$array2 </span><span class="keyword">= [</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'banana'</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'cherry'</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'date'</span><span class="keyword">];<br /><br /></span><span class="default">$result1 </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">);<br /></span><span class="default">$result2 </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array1</span><span class="keyword">);<br /><br />echo </span><span class="string">"Result from array_intersect(\$array1, \$array2):\n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result1</span><span class="keyword">);<br /><br />echo </span><span class="string">"\nResult from array_intersect(\$array2, \$array1):\n"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>___________________________________________<br />Outputs:<br /><br />Result from array_intersect($array1, $array2):<br />Array<br />(<br />    [a] =&gt; cherry<br />    [b] =&gt; banana<br />    [c] =&gt; cherry<br />)<br /><br />Result from array_intersect($array2, $array1):<br />Array<br />(<br />    [1] =&gt; banana<br />    [0] =&gt; cherry<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="129109">  <div class="votes">
    <div id="Vu129109">
    <a href="/manual/vote-note.php?id=129109&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129109">
    <a href="/manual/vote-note.php?id=129109&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129109" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129109" class="name">
  <strong class="user"><em>theking2(at)king(dot)ma</em></strong></a><a class="genanchor" href="#129109"> &para;</a><div class="date" title="2023-12-16 06:21"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129109">
<div class="phpcode"><code><span class="html">A more generic parameter checking:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Check if all required parameters are present in the request<br /> *<br /> * @param  mixed $request any of $_GET, $_POST, $_REQUEST<br /> * @param  mixed $required array of required parameters<br /> * @return bool true if all required parameters are present<br /> */<br /></span><span class="keyword">function </span><span class="default">check_params</span><span class="keyword">( array </span><span class="default">$request</span><span class="keyword">, array </span><span class="default">$required </span><span class="keyword">): </span><span class="default">bool<br /></span><span class="keyword">{<br />    </span><span class="default">$check </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">( </span><span class="default">array_keys</span><span class="keyword">( </span><span class="default">$request </span><span class="keyword">), </span><span class="default">$required </span><span class="keyword">);<br />    return </span><span class="default">count</span><span class="keyword">( </span><span class="default">$check </span><span class="keyword">) === </span><span class="default">count</span><span class="keyword">( </span><span class="default">$required </span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Use this like<br /><span class="default">&lt;?php<br /></span><span class="keyword">if( !</span><span class="default">check_params</span><span class="keyword">( </span><span class="default">$_GET</span><span class="keyword">, [</span><span class="string">'cust_id'</span><span class="keyword">,</span><span class="string">'prod_id'</span><span class="keyword">] ) {<br />    </span><span class="default">header</span><span class="keyword">( </span><span class="string">"HTTP/1.1 400 Bad Request" </span><span class="keyword">);<br />    echo </span><span class="string">"Bad Request"</span><span class="keyword">;<br />    exit();<br />}<br /></span><span class="default">?&gt;<br /></span><br />Let me know if something is build in PHP already...</span></code></div>
  </div>
 </div>
  <div class="note" id="43515">  <div class="votes">
    <div id="Vu43515">
    <a href="/manual/vote-note.php?id=43515&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43515">
    <a href="/manual/vote-note.php?id=43515&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43515" title="52% like this...">
    1
    </div>
  </div>
  <a href="#43515" class="name">
  <strong class="user"><em>t dot wiltzius at insightbb dot com</em></strong></a><a class="genanchor" href="#43515"> &para;</a><div class="date" title="2004-06-23 09:33"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43515">
<div class="phpcode"><code><span class="html">I needed to compare an array with associative keys to an array that contained some of the keys to the associative array. Basically, I just wanted to return only a few of the entries in the original array, and the keys to the entries I wanted were stored in another array. This is pretty straightforward (although complicated to explain), but I couldn't find a good function for comparing values to keys. So I wrote this relatively straightforward one:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">key_values_intersect</span><span class="keyword">(</span><span class="default">$values</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">) {<br />   foreach(</span><span class="default">$keys </span><span class="keyword">AS </span><span class="default">$key</span><span class="keyword">) {<br />      </span><span class="default">$key_val_int</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$values</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />      }<br />   return </span><span class="default">$key_val_int</span><span class="keyword">;<br />   }<br /><br /></span><span class="default">$big </span><span class="keyword">= array(</span><span class="string">"first"</span><span class="keyword">=&gt;</span><span class="default">2</span><span class="keyword">,</span><span class="string">"second"</span><span class="keyword">=&gt;</span><span class="default">7</span><span class="keyword">,</span><span class="string">"third"</span><span class="keyword">=&gt;</span><span class="default">3</span><span class="keyword">,</span><span class="string">"fourth"</span><span class="keyword">=&gt;</span><span class="default">5</span><span class="keyword">);<br /></span><span class="default">$subset </span><span class="keyword">= array(</span><span class="string">"first"</span><span class="keyword">,</span><span class="string">"third"</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">key_values_intersect</span><span class="keyword">(</span><span class="default">$big</span><span class="keyword">,</span><span class="default">$subset</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />This will return:<br /><br />Array ( [first] =&gt; 2 [third] =&gt; 3 )</span></code></div>
  </div>
 </div>
  <div class="note" id="97282">  <div class="votes">
    <div id="Vu97282">
    <a href="/manual/vote-note.php?id=97282&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97282">
    <a href="/manual/vote-note.php?id=97282&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97282" title="51% like this...">
    1
    </div>
  </div>
  <a href="#97282" class="name">
  <strong class="user"><em>Yohann</em></strong></a><a class="genanchor" href="#97282"> &para;</a><div class="date" title="2010-04-12 04:36"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97282">
<div class="phpcode"><code><span class="html">I used array_intersect in order to sort an array arbitrarly:
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'three'</span><span class="keyword">, </span><span class="string">'four'</span><span class="keyword">, </span><span class="string">'five'</span><span class="keyword">, </span><span class="string">'six'</span><span class="keyword">, </span><span class="string">'seven'</span><span class="keyword">, </span><span class="string">'height'</span><span class="keyword">, </span><span class="string">'nine'</span><span class="keyword">, </span><span class="string">'ten'</span><span class="keyword">);
<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="string">'four'</span><span class="keyword">, </span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'height'</span><span class="keyword">, </span><span class="string">'five'</span><span class="keyword">)
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />will output:
<br />
<br />0 =&gt; 'one'
<br />1 =&gt; 'four'
<br />2 =&gt; 'five'
<br />3 =&gt; 'height'
<br />
<br />i hope this can help...</span></code></div>
  </div>
 </div>
  <div class="note" id="123204">  <div class="votes">
    <div id="Vu123204">
    <a href="/manual/vote-note.php?id=123204&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123204">
    <a href="/manual/vote-note.php?id=123204&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123204" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123204" class="name">
  <strong class="user"><em>zoolyka at gmail dot com</em></strong></a><a class="genanchor" href="#123204"> &para;</a><div class="date" title="2018-10-06 07:38"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123204">
<div class="phpcode"><code><span class="html">If you have to intersect arrays of unique values then using array_intersect_key is about 20 times faster, just have to flip the key value pairs of the arrays, then flip the result again.<br /><br /><span class="default">&lt;?php<br /><br />$one </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">250000</span><span class="keyword">);<br /></span><span class="default">$two </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">50000</span><span class="keyword">, </span><span class="default">150000</span><span class="keyword">);<br /><br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$intersection </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">, </span><span class="default">$two</span><span class="keyword">);<br /><br />echo </span><span class="string">"Did it in "</span><span class="keyword">.( </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start </span><span class="keyword">).</span><span class="string">" seconds.\n"</span><span class="keyword">;<br /><br /></span><span class="default">$start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$intersection </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$one</span><span class="keyword">), </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$two</span><span class="keyword">)));<br /><br />echo </span><span class="string">"Did it in "</span><span class="keyword">.( </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start </span><span class="keyword">).</span><span class="string">" seconds.\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Did it in 0.89163708686829 seconds.<br />Did it in 0.038213968276978 seconds.</span></code></div>
  </div>
 </div>
  <div class="note" id="117324">  <div class="votes">
    <div id="Vu117324">
    <a href="/manual/vote-note.php?id=117324&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117324">
    <a href="/manual/vote-note.php?id=117324&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117324" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117324" class="name">
  <strong class="user"><em>info at iridsystem dot it</em></strong></a><a class="genanchor" href="#117324"> &para;</a><div class="date" title="2015-05-21 06:16"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117324">
<div class="phpcode"><code><span class="html">This function is able to sort an array based on another array that contains the order of occurrence. The values that are not present will be transferred into the end of the resultant.<br />Questa funzione permette di ordinare i valori di un array ($tosort) basandosi sui valori contenuti in un secondo array ($base), i valori non trovati verranno posizionati alla fine dell'ordinamento senza un'ordine specifico.<br /><br />&lt;?<br />$base= array('one', 'two', 'three');<br /><br />$tosort= array('a'=&gt;'two', 'b'=&gt;'three', 'c'=&gt;'five', 'd'=&gt;'one', 'and'=&gt;'four', 'f'=&gt;'one');<br /><br />uasort($tosort, function($key1, $key2) use ($base) {<br />  $a1=array_search($key1, $base);<br />  $a2=array_search($key2, $base);<br /><br />  if ( $a1===false &amp;&amp; $a2===false ) { return 0; }<br />  else if ( $a1===false &amp;&amp; $a2 !== false) { return 1; }<br />  else if ( $a1!==false &amp;&amp; $a2 === false) {return -1;}<br /><br />  if( $a1 &gt; $a2 ) { return 1; }<br />  else if ( $a1 &lt; $a2 ) { return -1; }<br />  else if ( $a1 == $a2 ) { return 0; }        <br />});<br />var_dump($tosort);<br />/*<br />the resulting of $tosort<br />array<br />  'd' =&gt; string 'one' (length=3)<br />  'f' =&gt; string 'one' (length=3)<br />  'a' =&gt; string 'two' (length=3)<br />  'b' =&gt; string 'three' (length=3)<br />  'c' =&gt; string 'five' (length=6)<br />  'e' =&gt; string 'four' (length=7)<br />*/<br />Gabriel<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="89485">  <div class="votes">
    <div id="Vu89485">
    <a href="/manual/vote-note.php?id=89485&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89485">
    <a href="/manual/vote-note.php?id=89485&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89485" title="50% like this...">
    0
    </div>
  </div>
  <a href="#89485" class="name">
  <strong class="user"><em>Oto Brglez</em></strong></a><a class="genanchor" href="#89485"> &para;</a><div class="date" title="2009-03-10 07:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89485">
<div class="phpcode"><code><span class="html">If you wish to create intersection with arrays that are empty. Than the result of intersection is empty array.<br /><br />If you wish to change this. I sugest that you do this.<br />It simply "ignores" empty arrays. Before loop use 1st array.<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= array();<br /></span><span class="default">$a</span><span class="keyword">[] = </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">[] = </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$a</span><span class="keyword">[] = </span><span class="default">3</span><span class="keyword">;<br /><br /></span><span class="default">$b </span><span class="keyword">= array();<br /></span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$b</span><span class="keyword">[] = </span><span class="default">1</span><span class="keyword">;<br /><br /></span><span class="default">$c </span><span class="keyword">= array();<br /></span><span class="default">$c</span><span class="keyword">[] = </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$c</span><span class="keyword">[] = </span><span class="default">5</span><span class="keyword">;<br /></span><span class="default">$d </span><span class="keyword">= array();<br /><br /></span><span class="default">$kb</span><span class="keyword">=array(</span><span class="string">'a'</span><span class="keyword">,</span><span class="string">'b'</span><span class="keyword">,</span><span class="string">'c'</span><span class="keyword">,</span><span class="string">'d'</span><span class="keyword">);<br /><br /></span><span class="default">$out </span><span class="keyword">= </span><span class="default">$a</span><span class="keyword">;<br />foreach(</span><span class="default">$kb </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">){<br />    if(!empty(${</span><span class="default">$k</span><span class="keyword">})) </span><span class="default">$out </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">,${</span><span class="default">$k</span><span class="keyword">});<br />};<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">);<br /></span><span class="comment">// The result is array <br /><br />// The result is empty array<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">,</span><span class="default">$c</span><span class="keyword">,</span><span class="default">$d</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88596">  <div class="votes">
    <div id="Vu88596">
    <a href="/manual/vote-note.php?id=88596&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88596">
    <a href="/manual/vote-note.php?id=88596&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88596" title="50% like this...">
    0
    </div>
  </div>
  <a href="#88596" class="name">
  <strong class="user"><em>karl at libsyn dot com</em></strong></a><a class="genanchor" href="#88596"> &para;</a><div class="date" title="2009-01-30 09:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88596">
<div class="phpcode"><code><span class="html">Given a multidimensional array that represents AND/OR relationships (example below), you can use a recursive function with array_intersect() to see if another array matches that set of relationships.  
<br />
<br />For example: array( array( 'red' ), array( 'white', 'blue' ) ) represents "red OR ( white AND blue )".  array( 'red', array( 'white', 'blue' ) ) would work, too, BTW.
<br />
<br />If I have array( 'red' ) and I want to see if it matches the AND/OR array, I use the following function.  It returns the matched array, 
<br />but can just return a boolean if that's all you need:
<br />
<br /><span class="default">&lt;?php
<br />$needle </span><span class="keyword">= array( array( </span><span class="string">'red' </span><span class="keyword">), array( </span><span class="string">'white'</span><span class="keyword">, </span><span class="string">'blue' </span><span class="keyword">) );
<br /></span><span class="default">$haystack </span><span class="keyword">= array( </span><span class="string">'red' </span><span class="keyword">);
<br />
<br />function </span><span class="default">findMatchingArray</span><span class="keyword">( </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack </span><span class="keyword">) {
<br />    foreach( </span><span class="default">$needle </span><span class="keyword">as </span><span class="default">$element </span><span class="keyword">) {
<br />        </span><span class="default">$test_element </span><span class="keyword">= (array) </span><span class="default">$element</span><span class="keyword">;
<br />        if( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$test_element </span><span class="keyword">) == </span><span class="default">count</span><span class="keyword">( </span><span class="default">array_intersect</span><span class="keyword">( </span><span class="default">$test_element</span><span class="keyword">, </span><span class="default">$haystack </span><span class="keyword">) ) ) {
<br />            return </span><span class="default">$element</span><span class="keyword">;
<br />        }
<br />
<br />    }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Pretty tough to describe what I needed it to do, but it worked.  I don't know if anyone else out there needs something like this, but hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="61596">  <div class="votes">
    <div id="Vu61596">
    <a href="/manual/vote-note.php?id=61596&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61596">
    <a href="/manual/vote-note.php?id=61596&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61596" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#61596" class="name">
  <strong class="user"><em>terry(-at-)shuttleworths(-dot-)net</em></strong></a><a class="genanchor" href="#61596"> &para;</a><div class="date" title="2006-02-07 07:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61596">
<div class="phpcode"><code><span class="html">I couldn't get array_intersect to work with two arrays of identical objects, so I just did this:<br /><br />foreach ($firstarray as $key=&gt;$value){<br />    if (!in_array($value,$secondarray)){<br />        unset($firstarray[$key]);<br />    }<br />}<br /><br />This leaves $firstarray as the intersection.<br /><br />Seems to work fine &amp; reasonably quickly.</span></code></div>
  </div>
 </div>
  <div class="note" id="58466">  <div class="votes">
    <div id="Vu58466">
    <a href="/manual/vote-note.php?id=58466&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58466">
    <a href="/manual/vote-note.php?id=58466&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58466" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#58466" class="name">
  <strong class="user"><em>tom p</em></strong></a><a class="genanchor" href="#58466"> &para;</a><div class="date" title="2005-11-04 06:54"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58466">
<div class="phpcode"><code><span class="html">If you store a string of keys in a database field and want to match them to a static array of values, this is a quick way to do it without loops:<br /><br />&lt;?<br /><br />$vals = array("Blue","Green","Pink","Yellow");<br />$db_field = "0,2,3";<br /><br />echo implode(", ", array_flip(array_intersect(array_flip($vals), explode(",", $db_field))));<br /><br />// will output "Blue, Pink, Yellow"<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="38129">  <div class="votes">
    <div id="Vu38129">
    <a href="/manual/vote-note.php?id=38129&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38129">
    <a href="/manual/vote-note.php?id=38129&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38129" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#38129" class="name">
  <strong class="user"><em>ben at kazez dot com</em></strong></a><a class="genanchor" href="#38129"> &para;</a><div class="date" title="2003-12-09 10:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38129">
<div class="phpcode"><code><span class="html">To check whether an array $a is a subset of array $b, do the following:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$b </span><span class="keyword">+ </span><span class="default">$a</span><span class="keyword">) === </span><span class="default">$b</span><span class="keyword">)<br /></span><span class="comment">//...<br /></span><span class="default">?&gt;<br /></span><br />Actually, PHP ought to have a function that does this for you. But the above example works.</span></code></div>
  </div>
 </div>
  <div class="note" id="38879">  <div class="votes">
    <div id="Vu38879">
    <a href="/manual/vote-note.php?id=38879&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38879">
    <a href="/manual/vote-note.php?id=38879&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38879" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#38879" class="name">
  <strong class="user"><em>anbolb at boltblue dot com</em></strong></a><a class="genanchor" href="#38879"> &para;</a><div class="date" title="2004-01-09 01:11"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38879">
<div class="phpcode"><code><span class="html">This is also handy for testing an array for one of a series of acceptable elements. As a simple example, if you're expecting the query string to contain one of, say, user_id, order_id or item_id, to find out which one it is you could do this:
<br />
<br /><span class="default">&lt;?php
<br />    $valid_ids </span><span class="keyword">= array (</span><span class="string">'user_id'</span><span class="keyword">, </span><span class="string">'item_id'</span><span class="keyword">, </span><span class="string">'order_id'</span><span class="keyword">);
<br />    if (</span><span class="default">$id </span><span class="keyword">= </span><span class="default">current </span><span class="keyword">(</span><span class="default">array_intersect </span><span class="keyword">(</span><span class="default">$valid_ids</span><span class="keyword">, </span><span class="default">array_keys </span><span class="keyword">(</span><span class="default">$_GET</span><span class="keyword">))))
<br />    {
<br />        </span><span class="comment">// do some stuff with it
<br />    </span><span class="keyword">}
<br />    else
<br />        </span><span class="comment">// error - invalid id passed, or none at all
<br /></span><span class="default">?&gt;
<br /></span>
<br />...which could be useful for constructing an SQL query, or some other situation where testing for them one by one might be too clumsy.</span></code></div>
  </div>
 </div>
  <div class="note" id="123976">  <div class="votes">
    <div id="Vu123976">
    <a href="/manual/vote-note.php?id=123976&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123976">
    <a href="/manual/vote-note.php?id=123976&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123976" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#123976" class="name">
  <strong class="user"><em>Ehsan.Chavoshi.com</em></strong></a><a class="genanchor" href="#123976"> &para;</a><div class="date" title="2019-06-22 05:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123976">
<div class="phpcode"><code><span class="html">I wrote this function to recursively replace array keys with array values (flip) and fill values with defined value. it can be used for recursive array intersect functions .<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_values_to_keys_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$fill_value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />    </span><span class="default">$flipped </span><span class="keyword">= [];<br />    foreach (</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />            </span><span class="default">$flipped </span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_values_to_keys_r</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$flipped </span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">] = </span><span class="default">$fill_value</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$flipped</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="12388">  <div class="votes">
    <div id="Vu12388">
    <a href="/manual/vote-note.php?id=12388&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12388">
    <a href="/manual/vote-note.php?id=12388&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12388" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#12388" class="name">
  <strong class="user"><em>david at audiogalaxy dot com</em></strong></a><a class="genanchor" href="#12388"> &para;</a><div class="date" title="2001-04-09 04:54"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12388">
<div class="phpcode"><code><span class="html">Note that array_intersect() considers the type of the array elements when it compares them.
<br />
<br />If array_intersect() doesn't appear to be working, check your inputs using var_dump() to make sure you're not trying to intersect an array of integers with an array of strings.</span></code></div>
  </div>
 </div>
  <div class="note" id="110590">  <div class="votes">
    <div id="Vu110590">
    <a href="/manual/vote-note.php?id=110590&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110590">
    <a href="/manual/vote-note.php?id=110590&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110590" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#110590" class="name">
  <strong class="user"><em>caffinated</em></strong></a><a class="genanchor" href="#110590"> &para;</a><div class="date" title="2012-11-10 12:13"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110590">
<div class="phpcode"><code><span class="html">If you're looking for a relatively easy way to strictly intersect keys and values recursively without array key reordering, here's a simple recursive function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">array_intersect_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">)
<br />{
<br />  foreach(</span><span class="default">$array1 </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)
<br />  {
<br />    if (!isset(</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]))
<br />    {
<br />      unset(</span><span class="default">$array1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />    }
<br />    else
<br />    {
<br />      if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) 
<br />      {
<br />        </span><span class="default">$array1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_intersect_recursive</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />      }
<br />      elseif (</span><span class="default">$array2</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] !== </span><span class="default">$value</span><span class="keyword">)
<br />      {
<br />        unset(</span><span class="default">$array1</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);
<br />      }
<br />    }
<br />  }
<br />  return </span><span class="default">$array1</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91651">  <div class="votes">
    <div id="Vu91651">
    <a href="/manual/vote-note.php?id=91651&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91651">
    <a href="/manual/vote-note.php?id=91651&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91651" title="37% like this...">
    -4
    </div>
  </div>
  <a href="#91651" class="name">
  <strong class="user"><em>gary</em></strong></a><a class="genanchor" href="#91651"> &para;</a><div class="date" title="2009-06-21 12:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91651">
<div class="phpcode"><code><span class="html">i wrote this one to get over the problem i found in getting strings intersected instead of arrays as there is no function in php.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">matched_main_numbers</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$string2</span><span class="keyword">)
<br />{
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"04 16 17 20 29"</span><span class="keyword">;
<br /></span><span class="default">$arr1 </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />
<br /></span><span class="default">$string2 </span><span class="keyword">= </span><span class="string">"45 34 04 29 16"</span><span class="keyword">;
<br /></span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$string2</span><span class="keyword">);
<br />
<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">);
<br /></span><span class="default">$comma_separated </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />
<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">$comma_separated</span><span class="keyword">;
<br />
<br /></span><span class="default">$balls </span><span class="keyword">= </span><span class="string">"</span><span class="default">$comma_separated</span><span class="string">"</span><span class="keyword">;
<br /></span><span class="default">$matched_balls </span><span class="keyword">= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$balls</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">);
<br /></span><span class="default">$matched_balls </span><span class="keyword">=</span><span class="string">" </span><span class="default">$matched_balls</span><span class="string">"</span><span class="keyword">;
<br />
<br /></span><span class="default">$number_of_matched_main_balls </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);
<br /></span><span class="default">$number_of_matched_main_balls </span><span class="keyword">= (</span><span class="default">$number_of_matched_main_balls</span><span class="keyword">/</span><span class="default">2</span><span class="keyword">);
<br /></span><span class="default">$numbers </span><span class="keyword">= </span><span class="string">"You matched </span><span class="default">$number_of_matched_main_balls</span><span class="string"> main balls"</span><span class="keyword">;
<br />
<br />return </span><span class="default">$numbers</span><span class="keyword">;
<br />        
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113721">  <div class="votes">
    <div id="Vu113721">
    <a href="/manual/vote-note.php?id=113721&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113721">
    <a href="/manual/vote-note.php?id=113721&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113721" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#113721" class="name">
  <strong class="user"><em>meihao at 126 dot com</em></strong></a><a class="genanchor" href="#113721"> &para;</a><div class="date" title="2013-11-21 08:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113721">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$a</span><span class="keyword">=array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="string">'3'</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$b</span><span class="keyword">=array(</span><span class="string">'1'</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">);<br /><br /></span><span class="default">result</span><span class="keyword">:<br />array (</span><span class="default">size</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">)<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">int 1<br />  1 </span><span class="keyword">=&gt; </span><span class="default">int 2<br />  2 </span><span class="keyword">=&gt; </span><span class="default">string </span><span class="string">'3' </span><span class="keyword">(</span><span class="default">length</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="34099">  <div class="votes">
    <div id="Vu34099">
    <a href="/manual/vote-note.php?id=34099&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34099">
    <a href="/manual/vote-note.php?id=34099&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34099" title="33% like this...">
    -3
    </div>
  </div>
  <a href="#34099" class="name">
  <strong class="user"><em>Alessandro Ranellucci alex at primafila dot net</em></strong></a><a class="genanchor" href="#34099"> &para;</a><div class="date" title="2003-07-16 06:35"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34099">
<div class="phpcode"><code><span class="html">array_intersect($array1, $array2);<br />returns the same as:<br />array_diff($array1, array_diff($array1, $array2));</span></code></div>
  </div>
 </div>
  <div class="note" id="123076">  <div class="votes">
    <div id="Vu123076">
    <a href="/manual/vote-note.php?id=123076&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123076">
    <a href="/manual/vote-note.php?id=123076&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123076" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#123076" class="name">
  <strong class="user"><em>ram</em></strong></a><a class="genanchor" href="#123076"> &para;</a><div class="date" title="2018-08-23 10:08"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123076">
<div class="phpcode"><code><span class="html">$x = array('ram@hb.in', 'ram', 'rams@hb.in');<br />    $y = array('1231231231');<br />    $result=array_intersect($x,$z);<br />    $res = array_intersect($y, $z);</span></code></div>
  </div>
 </div>
  <div class="note" id="95419">  <div class="votes">
    <div id="Vu95419">
    <a href="/manual/vote-note.php?id=95419&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95419">
    <a href="/manual/vote-note.php?id=95419&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95419" title="30% like this...">
    -5
    </div>
  </div>
  <a href="#95419" class="name">
  <strong class="user"><em>189780 at gmail dot com</em></strong></a><a class="genanchor" href="#95419"> &para;</a><div class="date" title="2010-01-02 07:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95419">
<div class="phpcode"><code><span class="html">Actually array_intersect finds the dublicate values, here is my approach which is 5 times faster than built-in function array_intersect().. Give a try..
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_array_intersect</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">)
<br />{
<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />                </span><span class="default">$m</span><span class="keyword">[]=</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />                </span><span class="default">$m</span><span class="keyword">[]=</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />        </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">);
<br />        </span><span class="default">$get</span><span class="keyword">=array();
<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$m</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++)
<br />        {
<br />                if(</span><span class="default">$m</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]==</span><span class="default">$m</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">])
<br />                </span><span class="default">$get</span><span class="keyword">[]=</span><span class="default">$m</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];
<br />        }
<br />        return </span><span class="default">$get</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Barış ÇUHADAR
<br />189780@gmail.com</span></code></div>
  </div>
 </div>
  <div class="note" id="111563">  <div class="votes">
    <div id="Vu111563">
    <a href="/manual/vote-note.php?id=111563&amp;page=function.array-intersect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111563">
    <a href="/manual/vote-note.php?id=111563&amp;page=function.array-intersect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111563" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#111563" class="name">
  <strong class="user"><em>Mike Block</em></strong></a><a class="genanchor" href="#111563"> &para;</a><div class="date" title="2013-03-04 09:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111563">
<div class="phpcode"><code><span class="html">I bench-marked some uses of array_intersect and can't believe how slow it is. This isn't as elaborate, but handles most cases and is much faster:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br />examines two arrays and returns the intersected arrays with matching keys (ignores duplicate keys)<br />*/<br /></span><span class="keyword">function </span><span class="default">simple_array_intersect</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">) {<br />    </span><span class="default">$a_assoc </span><span class="keyword">= </span><span class="default">$a </span><span class="keyword">!= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    </span><span class="default">$b_assoc </span><span class="keyword">= </span><span class="default">$b </span><span class="keyword">!= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />    </span><span class="default">$ak </span><span class="keyword">= </span><span class="default">$a_assoc </span><span class="keyword">? </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) : </span><span class="default">$a</span><span class="keyword">;<br />    </span><span class="default">$bk </span><span class="keyword">= </span><span class="default">$b_assoc </span><span class="keyword">? </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">) : </span><span class="default">$b</span><span class="keyword">;<br />    </span><span class="default">$out </span><span class="keyword">= array();<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$ak</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++) { <br />        if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$ak</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">$bk</span><span class="keyword">)) {<br />            if (</span><span class="default">$a_assoc</span><span class="keyword">) {<br />                </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$ak</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]] = </span><span class="default">$a</span><span class="keyword">[</span><span class="default">$ak</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]];<br />            } else {<br />                </span><span class="default">$out</span><span class="keyword">[] = </span><span class="default">$ak</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />            }<br />        }<br />    }<br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />You can try this out with this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// create a large array (simple)<br /></span><span class="default">$first </span><span class="keyword">= array();<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">500</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">500000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$first</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />}<br /></span><span class="comment">// create a smaller array (associative)<br /></span><span class="default">$second </span><span class="keyword">= array();<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">499990</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">500000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$second</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">rand</span><span class="keyword">();<br />}<br />echo </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// built-in function<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">,</span><span class="default">$second</span><span class="keyword">));<br />echo </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// favour simple array as match<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">simple_array_intersect</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">,</span><span class="default">$second</span><span class="keyword">));<br />echo </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="comment">// favour associative keys for match<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">simple_array_intersect</span><span class="keyword">(</span><span class="default">$second</span><span class="keyword">,</span><span class="default">$first</span><span class="keyword">));<br />echo </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-intersect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-intersect.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
