<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_diff - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-diff.php">
 <link rel="shorturl" href="https://www.php.net/array-diff">
 <link rel="alternate" href="https://www.php.net/array-diff" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-count-values.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-diff-assoc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-diff.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-diff.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-diff.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-diff.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-diff.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-diff.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-diff.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-diff.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-diff.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-diff.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-diff.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Computes the difference of arrays" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_diff - Manual" />
<meta name="twitter:description" content="Computes the difference of arrays" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_diff - Manual" />
<meta itemprop="description" content="Computes the difference of arrays" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Computes the difference of arrays" />

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
        <a href="function.array-diff-assoc.php">
          array_diff_assoc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-count-values.php">
          &laquo; array_count_values        </a>
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
            <option value='en/function.array-diff.php' selected="selected">English</option>
            <option value='de/function.array-diff.php'>German</option>
            <option value='es/function.array-diff.php'>Spanish</option>
            <option value='fr/function.array-diff.php'>French</option>
            <option value='it/function.array-diff.php'>Italian</option>
            <option value='ja/function.array-diff.php'>Japanese</option>
            <option value='pt_BR/function.array-diff.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-diff.php'>Russian</option>
            <option value='tr/function.array-diff.php'>Turkish</option>
            <option value='uk/function.array-diff.php'>Ukrainian</option>
            <option value='zh/function.array-diff.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-diff" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_diff</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_diff</span> &mdash; <span class="dc-title">Computes the difference of arrays</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.array-diff-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_diff</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">...$arrays</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Compares <code class="parameter">array</code> against one or more other arrays and
   returns the values in <code class="parameter">array</code> that are not present in
   any of the other arrays.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-diff-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array to compare from
      </p>
     </dd>
    
    
     <dt><code class="parameter">arrays</code></dt>
     <dd>
      <p class="para">
       Arrays to compare against
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-diff-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> containing all the entries from
   <code class="parameter">array</code> that are not present in any of the other arrays.
   Keys in the <code class="parameter">array</code> array are preserved.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.array-diff-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.array-diff-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5218">
    <p><strong>Example #1 <span class="function"><strong>array_diff()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array1 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$array2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"yellow"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$array1</span><span style="color: #007700">, </span><span style="color: #0000BB">$array2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Multiple occurrences in <var class="varname">$array1</var> are all
     treated the same way. This will output :
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [1] =&gt; blue
)</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   Two elements are considered equal if and only if
   <code class="literal">(string) $elem1 === (string) $elem2</code>. That is,
   when the <a href="language.types.string.php#language.types.string.casting" class="link">string representation</a> is the same.
  </p>

  <p class="para">
   <div class="example" id="example-5219">
    <p><strong>Example #2 <span class="function"><strong>array_diff()</strong></span> example with non-matching types</strong></p>
    <div class="example-contents">
     <div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This will generate a Notice that an array cannot be cast to a string.<br /></span><span style="color: #0000BB">$source </span><span style="color: #007700">= [</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$filter </span><span style="color: #007700">= [</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, [</span><span style="color: #0000BB">5</span><span style="color: #007700">], </span><span style="color: #0000BB">6</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">, </span><span style="color: #0000BB">$filter</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Whereas this is fine, since the objects can cast to a string.<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">S </span><span style="color: #007700">{<br />  private </span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br /><br />  public function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">string $v</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">v </span><span style="color: #007700">= </span><span style="color: #0000BB">$v</span><span style="color: #007700">;<br />  }<br /><br />  public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">() {<br />    return </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">v</span><span style="color: #007700">;<br />  }<br />}<br /><br /></span><span style="color: #0000BB">$source </span><span style="color: #007700">= [new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">), new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'b'</span><span style="color: #007700">), new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'c'</span><span style="color: #007700">)];<br /></span><span style="color: #0000BB">$filter </span><span style="color: #007700">= [new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'b'</span><span style="color: #007700">), new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'c'</span><span style="color: #007700">), new </span><span style="color: #0000BB">S</span><span style="color: #007700">(</span><span style="color: #DD0000">'d'</span><span style="color: #007700">)];<br /><br /></span><span style="color: #0000BB">$result </span><span style="color: #007700">= </span><span style="color: #0000BB">array_diff</span><span style="color: #007700">(</span><span style="color: #0000BB">$source</span><span style="color: #007700">, </span><span style="color: #0000BB">$filter</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// $result now contains one instance of S('a');<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$result</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   To use an alternate comparison function, see <span class="function"><a href="function.array-udiff.php" class="function">array_udiff()</a></span>.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.array-diff-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function only checks one dimension of a n-dimensional
    array. Of course you can check deeper dimensions by using
    <code class="literal">array_diff($array1[0], $array2[0]);</code>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-diff-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-diff-assoc.php" class="function" rel="rdfs-seeAlso">array_diff_assoc()</a> - Computes the difference of arrays with additional index check</span></li>
    <li><span class="function"><a href="function.array-udiff.php" class="function" rel="rdfs-seeAlso">array_udiff()</a> - Computes the difference of arrays by using a callback function for data comparison</span></li>
    <li><span class="function"><a href="function.array-intersect.php" class="function" rel="rdfs-seeAlso">array_intersect()</a> - Computes the intersection of arrays</span></li>
    <li><span class="function"><a href="function.array-intersect-assoc.php" class="function" rel="rdfs-seeAlso">array_intersect_assoc()</a> - Computes the intersection of arrays with additional index check</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-diff.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-diff%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-diff&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-diff.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">29 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="76484">  <div class="votes">
    <div id="Vu76484">
    <a href="/manual/vote-note.php?id=76484&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76484">
    <a href="/manual/vote-note.php?id=76484&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76484" title="77% like this...">
    261
    </div>
  </div>
  <a href="#76484" class="name">
  <strong class="user"><em>nilsandre at gmx dot de</em></strong></a><a class="genanchor" href="#76484"> &para;</a><div class="date" title="2007-07-17 09:45"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76484">
<div class="phpcode"><code><span class="html">Again, the function's description is misleading right now. I sought a function, which (mathematically) computes A - B, or, written differently, A \ B. Or, again in other words, suppose <br /><br />A := {a1, ..., an} and B:= {a1, b1, ... , bm}<br /><br />=&gt; array_diff(A,B) = {a2, ..., an}<br /><br />array_diff(A,B) returns all elements from A, which are not elements of B (= A without B).<br /><br />You should include this in the documentation more precisely, I think.</span></code></div>
  </div>
 </div>
  <div class="note" id="129782">  <div class="votes">
    <div id="Vu129782">
    <a href="/manual/vote-note.php?id=129782&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129782">
    <a href="/manual/vote-note.php?id=129782&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129782" title="88% like this...">
    7
    </div>
  </div>
  <a href="#129782" class="name">
  <strong class="user"><em>xmgr2 at protonmail dot com</em></strong></a><a class="genanchor" href="#129782"> &para;</a><div class="date" title="2024-09-27 11:36"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129782">
<div class="phpcode"><code><span class="html">The description is kinda ambiguous at first glance, one might think that the array_diff function returns the differences across *all* given arrays (which is what I was actually looking for, and that's why I was surprised that, in the example code, the result did not include "yellow").<br /><br />However, i wrote a neat oneliner to compute the differences across all given arrays:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># Returns an array with values that are unique across all of the given arrays<br /></span><span class="keyword">function </span><span class="default">array_unique_values</span><span class="keyword">(...</span><span class="default">$arrays</span><span class="keyword">) {<br />    return </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">array_count_values</span><span class="keyword">(</span><span class="default">array_merge</span><span class="keyword">(...</span><span class="default">$arrays</span><span class="keyword">)), fn(</span><span class="default">$count</span><span class="keyword">) =&gt; </span><span class="default">$count </span><span class="keyword">=== </span><span class="default">1</span><span class="keyword">));<br />}<br /><br /></span><span class="comment"># Example:<br /></span><span class="default">$array1 </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">, </span><span class="string">'d'</span><span class="keyword">];<br /></span><span class="default">$array2 </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'x'</span><span class="keyword">, </span><span class="string">'y'</span><span class="keyword">];<br /></span><span class="default">$array3 </span><span class="keyword">= [</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'y'</span><span class="keyword">, </span><span class="string">'z'</span><span class="keyword">];<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_unique_values</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">, </span><span class="default">$array3</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Result:<br />Array<br />(<br />    [0] =&gt; c<br />    [1] =&gt; d<br />    [2] =&gt; x<br />    [3] =&gt; 1<br />    [4] =&gt; z<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="68623">  <div class="votes">
    <div id="Vu68623">
    <a href="/manual/vote-note.php?id=68623&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68623">
    <a href="/manual/vote-note.php?id=68623&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68623" title="76% like this...">
    73
    </div>
  </div>
  <a href="#68623" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#68623"> &para;</a><div class="date" title="2006-08-03 12:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68623">
<div class="phpcode"><code><span class="html">array_diff provides a handy way of deleting array elements by their value, without having to unset it by key, through a lengthy foreach loop and then having to rekey the array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//pass value you wish to delete and the array to delete from<br /></span><span class="keyword">function </span><span class="default">array_delete</span><span class="keyword">( </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)<br />{<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">( </span><span class="default">$array</span><span class="keyword">, array(</span><span class="default">$value</span><span class="keyword">) );<br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120821">  <div class="votes">
    <div id="Vu120821">
    <a href="/manual/vote-note.php?id=120821&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120821">
    <a href="/manual/vote-note.php?id=120821&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120821" title="76% like this...">
    41
    </div>
  </div>
  <a href="#120821" class="name">
  <strong class="user"><em>james dot PLZNOSPAM at bush dot cc</em></strong></a><a class="genanchor" href="#120821"> &para;</a><div class="date" title="2017-03-16 01:58"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120821">
<div class="phpcode"><code><span class="html">If you want a simple way to show values that are in either array, but not both, you can use this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">arrayDiff</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">, </span><span class="default">$B</span><span class="keyword">) {<br />    </span><span class="default">$intersect </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">, </span><span class="default">$B</span><span class="keyword">);<br />    return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">, </span><span class="default">$intersect</span><span class="keyword">), </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">, </span><span class="default">$intersect</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />If you want to account for keys, use array_diff_assoc() instead; and if you want to remove empty values, use array_filter().</span></code></div>
  </div>
 </div>
  <div class="note" id="125384">  <div class="votes">
    <div id="Vu125384">
    <a href="/manual/vote-note.php?id=125384&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125384">
    <a href="/manual/vote-note.php?id=125384&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125384" title="76% like this...">
    9
    </div>
  </div>
  <a href="#125384" class="name">
  <strong class="user"><em>Al Amin Chayan (mail at chayan dot me)</em></strong></a><a class="genanchor" href="#125384"> &para;</a><div class="date" title="2020-09-21 04:17"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125384">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />   * Check If An Array Is A Subset Of Another Array<br />   *<br />   * @param  array $subset<br />   * @param  array $set<br />   * @return bool<br />   */<br /></span><span class="keyword">function </span><span class="default">is_subset</span><span class="keyword">(array </span><span class="default">$subset</span><span class="keyword">, array </span><span class="default">$set</span><span class="keyword">): </span><span class="default">bool </span><span class="keyword">{<br />     return (bool)!</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$subset</span><span class="keyword">, </span><span class="default">$set</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$u </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">];<br /></span><span class="default">$a </span><span class="keyword">= [</span><span class="default">1</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">];<br /></span><span class="default">$b </span><span class="keyword">= [</span><span class="default">6</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_subset</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$u</span><span class="keyword">)); </span><span class="comment">// true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_subset</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="default">$u</span><span class="keyword">)); </span><span class="comment">// false</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91756">  <div class="votes">
    <div id="Vu91756">
    <a href="/manual/vote-note.php?id=91756&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91756">
    <a href="/manual/vote-note.php?id=91756&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91756" title="71% like this...">
    25
    </div>
  </div>
  <a href="#91756" class="name">
  <strong class="user"><em>firegun at terra dot com dot br</em></strong></a><a class="genanchor" href="#91756"> &para;</a><div class="date" title="2009-06-24 10:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91756">
<div class="phpcode"><code><span class="html">Hello guys,
<br />
<br />I´ve been looking for a array_diff that works with recursive arrays, I´ve tried the ottodenn at gmail dot com function but to my case it doesn´t worked as expected, so I made my own. I´ve haven´t tested this extensively, but I´ll explain my scenario, and this works great at that case :D
<br />
<br />We got 2 arrays like these:
<br />
<br /><span class="default">&lt;?php
<br />$aArray1</span><span class="keyword">[</span><span class="string">'marcie'</span><span class="keyword">] = array(</span><span class="string">'banana' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'orange' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'pasta' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$aArray1</span><span class="keyword">[</span><span class="string">'kenji'</span><span class="keyword">] = array(</span><span class="string">'apple' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'pie' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'pasta' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);
<br />
<br /></span><span class="default">$aArray2</span><span class="keyword">[</span><span class="string">'marcie'</span><span class="keyword">] = array(</span><span class="string">'banana' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'orange' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />As array_diff, this function returns all the items that is in aArray1 and IS NOT at aArray2, so the result we should expect is:
<br />
<br /><span class="default">&lt;?php
<br />$aDiff</span><span class="keyword">[</span><span class="string">'marcie'</span><span class="keyword">] = array(</span><span class="string">'pasta' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">$aDiff</span><span class="keyword">[</span><span class="string">'kenji'</span><span class="keyword">] = array(</span><span class="string">'apple' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'pie' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'pasta' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Ok, now some comments about this function:
<br /> - Different from the PHP array_diff, this function DON´T uses the === operator, but the ==, so 0 is equal to '0' or false, but this can be changed with no impacts.
<br /> - This function checks the keys of the arrays, array_diff only compares the values.
<br />
<br />I realy hopes that this could help some1 as I´ve been helped a lot with some users experiences. (Just please double check if it would work for your case, as I sad I just tested to a scenario like the one I exposed)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">arrayRecursiveDiff</span><span class="keyword">(</span><span class="default">$aArray1</span><span class="keyword">, </span><span class="default">$aArray2</span><span class="keyword">) {
<br />    </span><span class="default">$aReturn </span><span class="keyword">= array();
<br />   
<br />    foreach (</span><span class="default">$aArray1 </span><span class="keyword">as </span><span class="default">$mKey </span><span class="keyword">=&gt; </span><span class="default">$mValue</span><span class="keyword">) {
<br />        if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$mKey</span><span class="keyword">, </span><span class="default">$aArray2</span><span class="keyword">)) {
<br />            if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$mValue</span><span class="keyword">)) {
<br />                </span><span class="default">$aRecursiveDiff </span><span class="keyword">= </span><span class="default">arrayRecursiveDiff</span><span class="keyword">(</span><span class="default">$mValue</span><span class="keyword">, </span><span class="default">$aArray2</span><span class="keyword">[</span><span class="default">$mKey</span><span class="keyword">]);
<br />                if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$aRecursiveDiff</span><span class="keyword">)) { </span><span class="default">$aReturn</span><span class="keyword">[</span><span class="default">$mKey</span><span class="keyword">] = </span><span class="default">$aRecursiveDiff</span><span class="keyword">; }
<br />            } else {
<br />                if (</span><span class="default">$mValue </span><span class="keyword">!= </span><span class="default">$aArray2</span><span class="keyword">[</span><span class="default">$mKey</span><span class="keyword">]) {
<br />                    </span><span class="default">$aReturn</span><span class="keyword">[</span><span class="default">$mKey</span><span class="keyword">] = </span><span class="default">$mValue</span><span class="keyword">;
<br />                }
<br />            }
<br />        } else {
<br />            </span><span class="default">$aReturn</span><span class="keyword">[</span><span class="default">$mKey</span><span class="keyword">] = </span><span class="default">$mValue</span><span class="keyword">;
<br />        }
<br />    }
<br />   
<br />    return </span><span class="default">$aReturn</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110572">  <div class="votes">
    <div id="Vu110572">
    <a href="/manual/vote-note.php?id=110572&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110572">
    <a href="/manual/vote-note.php?id=110572&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110572" title="68% like this...">
    43
    </div>
  </div>
  <a href="#110572" class="name">
  <strong class="user"><em>Jeppe Utzon</em></strong></a><a class="genanchor" href="#110572"> &para;</a><div class="date" title="2012-11-08 02:28"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110572">
<div class="phpcode"><code><span class="html">If you just need to know if two arrays' values are exactly the same (regardless of keys and order), then instead of using array_diff, this is a simple method:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">identical_values</span><span class="keyword">( </span><span class="default">$arrayA </span><span class="keyword">, </span><span class="default">$arrayB </span><span class="keyword">) {
<br />
<br />    </span><span class="default">sort</span><span class="keyword">( </span><span class="default">$arrayA </span><span class="keyword">);
<br />    </span><span class="default">sort</span><span class="keyword">( </span><span class="default">$arrayB </span><span class="keyword">);
<br />
<br />    return </span><span class="default">$arrayA </span><span class="keyword">== </span><span class="default">$arrayB</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// Examples:
<br />
<br /></span><span class="default">$array1 </span><span class="keyword">= array( </span><span class="string">"red" </span><span class="keyword">, </span><span class="string">"green" </span><span class="keyword">, </span><span class="string">"blue" </span><span class="keyword">);
<br /></span><span class="default">$array2 </span><span class="keyword">= array( </span><span class="string">"green" </span><span class="keyword">, </span><span class="string">"red" </span><span class="keyword">, </span><span class="string">"blue" </span><span class="keyword">);
<br /></span><span class="default">$array3 </span><span class="keyword">= array( </span><span class="string">"red" </span><span class="keyword">, </span><span class="string">"green" </span><span class="keyword">, </span><span class="string">"blue" </span><span class="keyword">, </span><span class="string">"yellow" </span><span class="keyword">);
<br /></span><span class="default">$array4 </span><span class="keyword">= array( </span><span class="string">"red" </span><span class="keyword">, </span><span class="string">"yellow" </span><span class="keyword">, </span><span class="string">"blue" </span><span class="keyword">);
<br /></span><span class="default">$array5 </span><span class="keyword">= array( </span><span class="string">"x" </span><span class="keyword">=&gt; </span><span class="string">"red" </span><span class="keyword">, </span><span class="string">"y" </span><span class="keyword">=&gt;  </span><span class="string">"green" </span><span class="keyword">, </span><span class="string">"z" </span><span class="keyword">=&gt; </span><span class="string">"blue" </span><span class="keyword">);
<br />
<br /></span><span class="default">identical_values</span><span class="keyword">( </span><span class="default">$array1 </span><span class="keyword">, </span><span class="default">$array2 </span><span class="keyword">);  </span><span class="comment">// true
<br /></span><span class="default">identical_values</span><span class="keyword">( </span><span class="default">$array1 </span><span class="keyword">, </span><span class="default">$array3 </span><span class="keyword">);  </span><span class="comment">// false
<br /></span><span class="default">identical_values</span><span class="keyword">( </span><span class="default">$array1 </span><span class="keyword">, </span><span class="default">$array4 </span><span class="keyword">);  </span><span class="comment">// false
<br /></span><span class="default">identical_values</span><span class="keyword">( </span><span class="default">$array1 </span><span class="keyword">, </span><span class="default">$array5 </span><span class="keyword">);  </span><span class="comment">// true
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />The function returns true only if the two arrays contain the same number of values and each value in one array has an exact duplicate in the other array. Everything else will return false.
<br />
<br />my alternative method for evaluating if two arrays contain (all) identical values:
<br />
<br /><span class="default">&lt;?php
<br />
<br />sort</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="default">$sort</span><span class="keyword">(</span><span class="default">b</span><span class="keyword">); return </span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />may be slightly faster (10-20%) than this array_diff method:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">return ( </span><span class="default">count</span><span class="keyword">( </span><span class="default">$a </span><span class="keyword">) == </span><span class="default">count</span><span class="keyword">( </span><span class="default">$b </span><span class="keyword">) &amp;&amp; !</span><span class="default">array_diff</span><span class="keyword">( </span><span class="default">$a </span><span class="keyword">, </span><span class="default">$b </span><span class="keyword">) ? </span><span class="default">true </span><span class="keyword">: </span><span class="default">false </span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />but only when the two arrays contain the same number of values and then only in some cases. Otherwise the latter method will be radically faster due to the use of a count() test before the array_diff().
<br />
<br />Also, if the two arrays contain a different number of values, then which method is faster will depend on whether both arrays need to be sorted or not. Two times sort() is a bit slower than one time array_diff(), but if one of the arrays have already been sorted, then you only have to sort the other array and this will be almost twice as fast as array_diff().
<br />
<br />Basically: 2 x sort() is slower than 1 x array_diff() is slower than 1 x sort().</span></code></div>
  </div>
 </div>
  <div class="note" id="16097">  <div class="votes">
    <div id="Vu16097">
    <a href="/manual/vote-note.php?id=16097&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16097">
    <a href="/manual/vote-note.php?id=16097&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16097" title="70% like this...">
    26
    </div>
  </div>
  <a href="#16097" class="name">
  <strong class="user"><em>SeanECoates at !donotspam!yahoo dot ca</em></strong></a><a class="genanchor" href="#16097"> &para;</a><div class="date" title="2001-10-16 10:43"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16097">
<div class="phpcode"><code><span class="html">I just came upon a really good use for array_diff(). When reading a dir(opendir;readdir), I _rarely_ want "." or ".." to be in the array of files I'm creating. Here's a simple way to remove them:
<br />
<br /><span class="default">&lt;?php
<br /> $someFiles </span><span class="keyword">= array();
<br /> </span><span class="default">$dp </span><span class="keyword">= </span><span class="default">opendir</span><span class="keyword">(</span><span class="string">"/some/dir"</span><span class="keyword">);
<br /> while(</span><span class="default">$someFiles</span><span class="keyword">[] = </span><span class="default">readdir</span><span class="keyword">(</span><span class="default">$dp</span><span class="keyword">));
<br /> </span><span class="default">closedir</span><span class="keyword">(</span><span class="default">$dp</span><span class="keyword">);
<br /> 
<br /> </span><span class="default">$removeDirs </span><span class="keyword">= array(</span><span class="string">"."</span><span class="keyword">,</span><span class="string">".."</span><span class="keyword">);
<br /> </span><span class="default">$someFiles </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$someFiles</span><span class="keyword">, </span><span class="default">$removeDirs</span><span class="keyword">);
<br /> 
<br /> foreach(</span><span class="default">$someFiles </span><span class="keyword">AS </span><span class="default">$thisFile</span><span class="keyword">) echo </span><span class="default">$thisFile</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />S</span></code></div>
  </div>
 </div>
  <div class="note" id="121254">  <div class="votes">
    <div id="Vu121254">
    <a href="/manual/vote-note.php?id=121254&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121254">
    <a href="/manual/vote-note.php?id=121254&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121254" title="68% like this...">
    8
    </div>
  </div>
  <a href="#121254" class="name">
  <strong class="user"><em>wes dot melton at gmail dot com</em></strong></a><a class="genanchor" href="#121254"> &para;</a><div class="date" title="2017-06-20 09:11"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121254">
<div class="phpcode"><code><span class="html">It's important to note that array_diff() is NOT a fast or memory-efficient function on larger arrays. <br /><br />In my experience, when I find myself running array_diff() on larger arrays (50+ k/v/pairs) I almost always realize that I'm working the problem from the wrong angle. <br /><br />Typically, when reworking the problem to not require array_diff(), especially on bigger datasets, I find significant performance improvements and optimizations.</span></code></div>
  </div>
 </div>
  <div class="note" id="107928">  <div class="votes">
    <div id="Vu107928">
    <a href="/manual/vote-note.php?id=107928&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107928">
    <a href="/manual/vote-note.php?id=107928&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107928" title="64% like this...">
    14
    </div>
  </div>
  <a href="#107928" class="name">
  <strong class="user"><em>merlyn dot tgz at gmail dot com</em></strong></a><a class="genanchor" href="#107928"> &para;</a><div class="date" title="2012-03-15 10:08"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107928">
<div class="phpcode"><code><span class="html">There is more fast implementation of array_diff, but with some limitations. If you need compare two arrays of integers or strings you can use such function:<br /><br />    public static function arrayDiffEmulation($arrayFrom, $arrayAgainst)<br />    {<br />        $arrayAgainst = array_flip($arrayAgainst);<br />        <br />        foreach ($arrayFrom as $key =&gt; $value) {<br />            if(isset($arrayAgainst[$value])) {<br />                unset($arrayFrom[$key]);<br />            }<br />        }<br />        <br />        return $arrayFrom;<br />    }<br /><br />It is ~10x faster than array_diff<br /><br />php &gt; $t = microtime(true);$a = range(0,25000); $b = range(15000,500000); $c = array_diff($a, $b);echo microtime(true) - $t;<br />4.4335179328918<br />php &gt; $t = microtime(true);$a = range(0,25000); $b = range(15000,500000); $c = arrayDiffEmulation($a, $b);echo microtime(true) - $t;<br />0.37219095230103</span></code></div>
  </div>
 </div>
  <div class="note" id="82297">  <div class="votes">
    <div id="Vu82297">
    <a href="/manual/vote-note.php?id=82297&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82297">
    <a href="/manual/vote-note.php?id=82297&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82297" title="66% like this...">
    4
    </div>
  </div>
  <a href="#82297" class="name">
  <strong class="user"><em>Tim Trefren</em></strong></a><a class="genanchor" href="#82297"> &para;</a><div class="date" title="2008-04-04 08:05"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82297">
<div class="phpcode"><code><span class="html">Here's a little wrapper for array_diff - I found myself needing to iterate through the edited array, and I didn't need to original keys for anything.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">arrayDiff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">){<br />    </span><span class="comment"># This wrapper for array_diff rekeys the array returned<br />    </span><span class="default">$valid_array </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">,</span><span class="default">$array2</span><span class="keyword">);<br />    <br />    </span><span class="comment"># reinstantiate $array1 variable <br />    </span><span class="default">$array1 </span><span class="keyword">= array();<br />    <br />    </span><span class="comment"># loop through the validated array and move elements to $array1<br />    # this is necessary because the array_diff function returns arrays that retain their original keys<br />    </span><span class="keyword">foreach (</span><span class="default">$valid_array </span><span class="keyword">as </span><span class="default">$valid</span><span class="keyword">){<br />        </span><span class="default">$array1</span><span class="keyword">[] = </span><span class="default">$valid</span><span class="keyword">;<br />        }<br />    return </span><span class="default">$array1</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117219">  <div class="votes">
    <div id="Vu117219">
    <a href="/manual/vote-note.php?id=117219&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117219">
    <a href="/manual/vote-note.php?id=117219&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117219" title="63% like this...">
    8
    </div>
  </div>
  <a href="#117219" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#117219"> &para;</a><div class="date" title="2015-05-05 06:50"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117219">
<div class="phpcode"><code><span class="html">I always wanted something like this to avoid listing all the files and folders you want to exclude in a project directory.<br /><br />function array_preg_diff($a, $p) {<br />    foreach ($a as $i =&gt; $v)<br />        if (preg_match($p, $v))<br />            unset($a[$i]);<br />    return $a;<br />}<br /><br />$relevantFiles = array_preg_diff(scandir('somedir'), '/^\./');<br /><br />instead of <br /><br />$relevantFiles = array_diff(scandir('somedir'), array('.', '..', '.idea', '.project));</span></code></div>
  </div>
 </div>
  <div class="note" id="122008">  <div class="votes">
    <div id="Vu122008">
    <a href="/manual/vote-note.php?id=122008&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122008">
    <a href="/manual/vote-note.php?id=122008&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122008" title="63% like this...">
    3
    </div>
  </div>
  <a href="#122008" class="name">
  <strong class="user"><em>Prakashgun</em></strong></a><a class="genanchor" href="#122008"> &para;</a><div class="date" title="2017-12-11 12:04"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122008">
<div class="phpcode"><code><span class="html">If duplicate value comes in the first array, that will be also included. See in the output "blue" comes twice.<br /><br /><span class="default">&lt;?php<br /><br />$array1 </span><span class="keyword">= array(</span><span class="string">"a" </span><span class="keyword">=&gt; </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">);<br /></span><span class="default">$array2 </span><span class="keyword">= array(</span><span class="string">"b" </span><span class="keyword">=&gt; </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"yellow"</span><span class="keyword">, </span><span class="string">"red"</span><span class="keyword">);<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">, </span><span class="default">$array2</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">);<br /><br /></span><span class="comment">//Output<br />//Array ( [1] =&gt; blue [3] =&gt; blue )</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82143">  <div class="votes">
    <div id="Vu82143">
    <a href="/manual/vote-note.php?id=82143&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82143">
    <a href="/manual/vote-note.php?id=82143&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82143" title="61% like this...">
    3
    </div>
  </div>
  <a href="#82143" class="name">
  <strong class="user"><em>merlinyoda at dorproject dot net</em></strong></a><a class="genanchor" href="#82143"> &para;</a><div class="date" title="2008-03-28 10:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82143">
<div class="phpcode"><code><span class="html">As touched on in kitchin's comment of 19-Jun-2007 03:49 and nilsandre at gmx dot de's comment of 17-Jul-2007 10:45, array_diff's behavior may be counter-intuitive if you aren't thinking in terms of set theory. <br /><br />array_diff() returns a *mathematical* difference (a.k.a. subtraction) of elements in array A that are in array B and *not* what elements are different between the arrays (i.e. those that elements that are in either A or B but aren't in both A and B).<br /><br />Drawing one of those Ven diagrams or Euler diagrams may help with visualization...<br /><br />As far as a function for returning what you may be expecting, here's one:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">array_xor </span><span class="keyword">(</span><span class="default">$array_a</span><span class="keyword">, </span><span class="default">$array_b</span><span class="keyword">) {<br />    </span><span class="default">$union_array </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$array_a</span><span class="keyword">, </span><span class="default">$array_b</span><span class="keyword">);<br />    </span><span class="default">$intersect_array </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$array_a</span><span class="keyword">, </span><span class="default">$array_b</span><span class="keyword">);<br />    return </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$union_array</span><span class="keyword">, </span><span class="default">$intersect_array</span><span class="keyword">)<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37527">  <div class="votes">
    <div id="Vu37527">
    <a href="/manual/vote-note.php?id=37527&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37527">
    <a href="/manual/vote-note.php?id=37527&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37527" title="60% like this...">
    5
    </div>
  </div>
  <a href="#37527" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#37527"> &para;</a><div class="date" title="2003-11-18 04:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37527">
<div class="phpcode"><code><span class="html">From the page:
<br />Note:  Please note that this function only checks one dimension of a n-dimensional array. Of course you can check deeper dimensions by using array_diff($array1[0], $array2[0]);
<br />
<br />I've found a way to bypass that. I had 2 arrays made of arrays.
<br />I wanted to extract from the first array all the arrays not found in the second array. So I used the serialize() function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_serialize</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">){
<br />  </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">my_unserialize</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">){
<br />  </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);
<br />}
<br />
<br /> </span><span class="comment">//make a copy
<br /></span><span class="default">$first_array_s </span><span class="keyword">= </span><span class="default">$first_array</span><span class="keyword">;
<br /></span><span class="default">$second_array_s </span><span class="keyword">= </span><span class="default">$second_array</span><span class="keyword">;
<br />
<br /></span><span class="comment">// serialize all sub-arrays
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$first_array_s</span><span class="keyword">,</span><span class="string">'my_serialize'</span><span class="keyword">); 
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$second_array_s</span><span class="keyword">,</span><span class="string">'my_serialize'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// array_diff the serialized versions
<br /></span><span class="default">$diff </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$first_array_s</span><span class="keyword">,</span><span class="default">$second_array_s</span><span class="keyword">);
<br />
<br /></span><span class="comment">// unserialize the result
<br /></span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">,</span><span class="string">'my_unserialize'</span><span class="keyword">);
<br />
<br /></span><span class="comment">// you've got it!
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119307">  <div class="votes">
    <div id="Vu119307">
    <a href="/manual/vote-note.php?id=119307&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119307">
    <a href="/manual/vote-note.php?id=119307&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119307" title="57% like this...">
    1
    </div>
  </div>
  <a href="#119307" class="name">
  <strong class="user"><em>emeka dot echeruo at gmail dot com</em></strong></a><a class="genanchor" href="#119307"> &para;</a><div class="date" title="2016-05-10 03:49"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119307">
<div class="phpcode"><code><span class="html">Resubmitting... the update for takes into account comparison issues  <br />Computes the difference of all the arrays<br /><span class="default">&lt;?php <br /><br /></span><span class="comment">/**<br /> * array_diffs â€” Computes the difference of all the arrays <br /> * <br /> * @param array <br /> * <br /> *    array1 - The array to compare from and against<br /> *    array2 - The array to compare from and against<br /> *    array(n) - More arrays to compare from and against<br /> *        <br /> * @return array Returns all the arrays that do contains entries that cannot be matched in any of the arrays.<br /> */<br /> <br /></span><span class="keyword">function </span><span class="default">array_diffs</span><span class="keyword">() {<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();<br />    if(</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Must provide at least 2 arrays for comparison.'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$check </span><span class="keyword">= array();<br />    </span><span class="default">$out </span><span class="keyword">= array();<br />     </span><span class="comment">//resolve comparison issue<br />    </span><span class="default">$func </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        </span><span class="default">$dbl </span><span class="keyword">= function(</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$d</span><span class="keyword">) {<br />            </span><span class="default">$e </span><span class="keyword">= </span><span class="default">0.00001</span><span class="keyword">;<br />            if(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">-</span><span class="default">$d</span><span class="keyword">) &lt; </span><span class="default">$e</span><span class="keyword">) {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />            return </span><span class="default">false</span><span class="keyword">;<br />        };<br />        if((</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'integer' </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'double'</span><span class="keyword">) || (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'double' </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'integer'</span><span class="keyword">)) {<br />            if((</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'integer' </span><span class="keyword">&amp;&amp; </span><span class="default">$dbl</span><span class="keyword">((double) </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">])) || (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'integer' </span><span class="keyword">&amp;&amp; </span><span class="default">$dbl</span><span class="keyword">((double) </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">], </span><span class="default">$a</span><span class="keyword">))) {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />        } elseif((</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'double'</span><span class="keyword">) &amp;&amp; (</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'double'</span><span class="keyword">)) {<br />            return </span><span class="default">$dbl</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]);<br />        } elseif(</span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />        return </span><span class="default">false</span><span class="keyword">;<br />    };<br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">))) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Parameters must be passed as arrays.'</span><span class="keyword">);<br />        }<br />        foreach(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">) &amp;&amp; </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">])) {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                }<br />            } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))) {<br />                </span><span class="default">$update </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                foreach(</span><span class="default">$check </span><span class="keyword">as </span><span class="default">$check_key </span><span class="keyword">=&gt; </span><span class="default">$check_value</span><span class="keyword">) {<br />                    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">])) &amp;&amp; </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check_value</span><span class="keyword">)) {<br />                        </span><span class="default">$update </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                        </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$check_key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$check_key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                    } <br />                }<br />                if(!</span><span class="default">$update</span><span class="keyword">) {<br />                    </span><span class="default">$check</span><span class="keyword">[] = array(</span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">, </span><span class="string">'count' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);<br />                }<br />            } else {<br />                if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">) &amp;&amp; </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                }<br />            }<br />        }<br />    }<br />    foreach(</span><span class="default">$check </span><span class="keyword">as </span><span class="default">$check_key </span><span class="keyword">=&gt; </span><span class="default">$check_value</span><span class="keyword">) {<br />        if(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">) {<br />           for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                foreach(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) &amp;&amp; (</span><span class="default">$value </span><span class="keyword">== (string) </span><span class="default">$check_key</span><span class="keyword">)) {<br />                        </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">] == </span><span class="default">$value</span><span class="keyword">)) {<br />                        </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    } elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">] == </span><span class="default">$value</span><span class="keyword">)) {<br />                        </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />        }<br />    }<br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116607">  <div class="votes">
    <div id="Vu116607">
    <a href="/manual/vote-note.php?id=116607&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116607">
    <a href="/manual/vote-note.php?id=116607&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116607" title="57% like this...">
    1
    </div>
  </div>
  <a href="#116607" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#116607"> &para;</a><div class="date" title="2015-01-28 04:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116607">
<div class="phpcode"><code><span class="html">If you're not getting a count(array_diff($a1,$a2))&gt;0 with something similar to the following arrays should use the php.net/array_diff_assoc function instead.<br /><br />$a1 = Array<br />(<br />    [0] =&gt; id<br />    [1] =&gt; id_1<br />    [2] =&gt; id_2<br />)<br /><br />$a2 = Array<br />(<br />    [0] =&gt; id<br />    [1] =&gt; id_2<br />    [2] =&gt; id_1<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="60975">  <div class="votes">
    <div id="Vu60975">
    <a href="/manual/vote-note.php?id=60975&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60975">
    <a href="/manual/vote-note.php?id=60975&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60975" title="57% like this...">
    3
    </div>
  </div>
  <a href="#60975" class="name">
  <strong class="user"><em>Simon Riget at paragi.dk</em></strong></a><a class="genanchor" href="#60975"> &para;</a><div class="date" title="2006-01-21 05:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60975">
<div class="phpcode"><code><span class="html">A simple multidimentional key aware array_diff function.<br />    <br /><span class="default">&lt;?php    <br /></span><span class="keyword">function </span><span class="default">arr_diff</span><span class="keyword">(</span><span class="default">$a1</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">){<br />  foreach(</span><span class="default">$a1 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">){<br />    unset(</span><span class="default">$dv</span><span class="keyword">);<br />    if(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">)){<br />      </span><span class="comment">// Compare values<br />      </span><span class="keyword">if(</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">)===</span><span class="default">false</span><span class="keyword">) </span><span class="default">$dv</span><span class="keyword">=</span><span class="default">$v</span><span class="keyword">;<br />      else if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) </span><span class="default">$dv</span><span class="keyword">=</span><span class="default">arr_diff</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />      if(</span><span class="default">$dv</span><span class="keyword">) </span><span class="default">$diff</span><span class="keyword">[]=</span><span class="default">$dv</span><span class="keyword">;<br />    }else{<br />      </span><span class="comment">// Compare noninteger keys<br />      </span><span class="keyword">if(!</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]) </span><span class="default">$dv</span><span class="keyword">=</span><span class="default">$v</span><span class="keyword">;<br />      else if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">)) </span><span class="default">$dv</span><span class="keyword">=</span><span class="default">arr_diff</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">$a2</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />      if(</span><span class="default">$dv</span><span class="keyword">) </span><span class="default">$diff</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]=</span><span class="default">$dv</span><span class="keyword">;<br />    }    <br />  }<br />  return </span><span class="default">$diff</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This function meets my immidiate needs but I'm shure it can be improved.</span></code></div>
  </div>
 </div>
  <div class="note" id="94410">  <div class="votes">
    <div id="Vu94410">
    <a href="/manual/vote-note.php?id=94410&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94410">
    <a href="/manual/vote-note.php?id=94410&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94410" title="56% like this...">
    3
    </div>
  </div>
  <a href="#94410" class="name">
  <strong class="user"><em>vojtech dot hordejcuk at gmail dot com</em></strong></a><a class="genanchor" href="#94410"> &para;</a><div class="date" title="2009-11-03 07:15"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94410">
<div class="phpcode"><code><span class="html">Based on one lad's code, I created following function for creating something like HTML diff. I hope it will be useful.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">private function </span><span class="default">diff </span><span class="keyword">(</span><span class="default">$old</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$old </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/ +/'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$old</span><span class="keyword">);
<br />  </span><span class="default">$new </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/ +/'</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">);
<br />  
<br />  </span><span class="default">$lo </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">trim </span><span class="keyword">(</span><span class="default">$old</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">);
<br />  </span><span class="default">$ln </span><span class="keyword">= </span><span class="default">explode </span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">trim </span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">);
<br />  </span><span class="default">$size </span><span class="keyword">= </span><span class="default">max </span><span class="keyword">(</span><span class="default">count </span><span class="keyword">(</span><span class="default">$lo</span><span class="keyword">), </span><span class="default">count </span><span class="keyword">(</span><span class="default">$ln</span><span class="keyword">));
<br />
<br />  </span><span class="default">$equ </span><span class="keyword">= </span><span class="default">array_intersect </span><span class="keyword">(</span><span class="default">$lo</span><span class="keyword">, </span><span class="default">$ln</span><span class="keyword">);
<br />  </span><span class="default">$ins </span><span class="keyword">= </span><span class="default">array_diff </span><span class="keyword">(</span><span class="default">$ln</span><span class="keyword">, </span><span class="default">$lo</span><span class="keyword">);
<br />  </span><span class="default">$del </span><span class="keyword">= </span><span class="default">array_diff </span><span class="keyword">(</span><span class="default">$lo</span><span class="keyword">, </span><span class="default">$ln</span><span class="keyword">);
<br />  
<br />  </span><span class="default">$out </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />  
<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$size</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />  {
<br />    if (isset (</span><span class="default">$del </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))
<br />    {
<br />      </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'&lt;p&gt;&lt;del&gt;' </span><span class="keyword">. </span><span class="default">$del </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] . </span><span class="string">'&lt;/del&gt;&lt;/p&gt;'</span><span class="keyword">;
<br />    }
<br />    
<br />    if (isset (</span><span class="default">$equ </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))
<br />    {
<br />      </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'&lt;p&gt;' </span><span class="keyword">. </span><span class="default">$equ </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] . </span><span class="string">'&lt;/p&gt;'</span><span class="keyword">;
<br />    }
<br />    
<br />    if (isset (</span><span class="default">$ins </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]))
<br />    {
<br />      </span><span class="default">$out </span><span class="keyword">.= </span><span class="string">'&lt;p&gt;&lt;ins&gt;' </span><span class="keyword">. </span><span class="default">$ins </span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] . </span><span class="string">'&lt;/ins&gt;&lt;/p&gt;'</span><span class="keyword">;
<br />    }
<br />  }
<br />  
<br />  return </span><span class="default">$out</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119273">  <div class="votes">
    <div id="Vu119273">
    <a href="/manual/vote-note.php?id=119273&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119273">
    <a href="/manual/vote-note.php?id=119273&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119273" title="55% like this...">
    2
    </div>
  </div>
  <a href="#119273" class="name">
  <strong class="user"><em>emeka at echeruo at gmail dot com</em></strong></a><a class="genanchor" href="#119273"> &para;</a><div class="date" title="2016-04-30 11:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119273">
<div class="phpcode"><code><span class="html">Resubmitting... the update for takes into account comparison issues  <br /><br />Computes the difference of all the arrays<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * array_diffs — Computes the difference of all the arrays <br /> * <br /> * @param array <br /> * <br /> *    array1 - The array to compare from and against<br /> *    array2 - The array to compare from and against<br /> *    array(n) - More arrays to compare from and against<br /> *        <br /> * @return array Returns all the arrays that do contains entries that cannot be matched in any of the arrays.  <br /> */<br /> <br /></span><span class="keyword">function </span><span class="default">array_diffs</span><span class="keyword">() {<br />    </span><span class="default">$count </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();<br />    if(</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Must provide at least 2 arrays for comparison.'</span><span class="keyword">);<br />    }<br />    </span><span class="default">$check </span><span class="keyword">= array();<br />    </span><span class="default">$out </span><span class="keyword">= array();<br />     </span><span class="comment">//resolve comparison issues in PHP<br />    </span><span class="default">$func </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {<br />        if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'integer' </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'double' </span><span class="keyword">|| </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'double' </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'integer'</span><span class="keyword">) {<br />            if(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'integer'</span><span class="keyword">) {<br />                if((double) </span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) {<br />                    return </span><span class="default">true</span><span class="keyword">;<br />                }<br />            } else {<br />                if((double) </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">] == </span><span class="default">$a</span><span class="keyword">) {<br />                    return </span><span class="default">true</span><span class="keyword">;<br />                }<br />            }<br />        } elseif(</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) == </span><span class="string">'double' </span><span class="keyword">&amp;&amp; </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) == </span><span class="string">'double'</span><span class="keyword">) {<br />            </span><span class="default">$epsilon </span><span class="keyword">= </span><span class="default">0.00001</span><span class="keyword">;<br />            if(</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$a </span><span class="keyword">- </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) &lt; </span><span class="default">$epsilon</span><span class="keyword">) {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />        } else {<br />            if(</span><span class="default">$a </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) {<br />                return </span><span class="default">true</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">false</span><span class="keyword">;<br />    };<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">))) {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Parameters must be passed as arrays.'</span><span class="keyword">);<br />        }<br />        foreach(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">) &amp;&amp; </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">])) {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                }<br />            } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))) {<br />                </span><span class="default">$update </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />                foreach(</span><span class="default">$check </span><span class="keyword">as </span><span class="default">$check_key </span><span class="keyword">=&gt; </span><span class="default">$check_value</span><span class="keyword">) {<br />                    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]))) {<br />                        if(</span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check_value</span><span class="keyword">)) {<br />                            </span><span class="default">$update </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                            </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$check_key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$check_key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                        }<br />                    } <br />                }<br />                if(!</span><span class="default">$update</span><span class="keyword">) {<br />                    </span><span class="default">$check</span><span class="keyword">[] = array(</span><span class="string">'value' </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">, </span><span class="string">'count' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">);<br />                }<br />            } else {<br />                if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">) &amp;&amp; </span><span class="default">$func</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] + </span><span class="default">1</span><span class="keyword">;<br />                } else {<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'value'</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                    </span><span class="default">$check</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                }<br />            }<br />        }<br />    }<br />    foreach(</span><span class="default">$check </span><span class="keyword">as </span><span class="default">$check_key </span><span class="keyword">=&gt; </span><span class="default">$check_value</span><span class="keyword">) {<br />        if(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] == </span><span class="default">1</span><span class="keyword">) {<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$count</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                foreach(</span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">) as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) {<br />                        if(</span><span class="default">$value </span><span class="keyword">== (string) </span><span class="default">$check_key</span><span class="keyword">) {<br />                            </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                        }<br />                    } elseif(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))) { <br />                        if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) &amp;&amp; (</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]) || </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">]))) {<br />                            if(</span><span class="default">$check_value</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">] == </span><span class="default">$value</span><span class="keyword">) {<br />                                </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                            }<br />                        }<br />                    } else {<br />                        if(</span><span class="default">$key </span><span class="keyword">== </span><span class="default">$check_key</span><span class="keyword">) {<br />                            </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />                        }<br />                    }<br />                }<br />            }<br />        }<br />    }<br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101512">  <div class="votes">
    <div id="Vu101512">
    <a href="/manual/vote-note.php?id=101512&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101512">
    <a href="/manual/vote-note.php?id=101512&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101512" title="56% like this...">
    2
    </div>
  </div>
  <a href="#101512" class="name">
  <strong class="user"><em>javierchinapequeno at yahoo dot es</em></strong></a><a class="genanchor" href="#101512"> &para;</a><div class="date" title="2010-12-21 11:21"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101512">
<div class="phpcode"><code><span class="html">Hi, I´d like to give a piece of advice to all who need to use this function to compare two arrays that have a great quantity of elements. You should sort both arrays first before comparing, it will work faster.<br />Thanks</span></code></div>
  </div>
 </div>
  <div class="note" id="116269">  <div class="votes">
    <div id="Vu116269">
    <a href="/manual/vote-note.php?id=116269&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116269">
    <a href="/manual/vote-note.php?id=116269&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116269" title="55% like this...">
    2
    </div>
  </div>
  <a href="#116269" class="name">
  <strong class="user"><em>wrey75 at gmail dot com</em></strong></a><a class="genanchor" href="#116269"> &para;</a><div class="date" title="2014-12-03 10:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116269">
<div class="phpcode"><code><span class="html">The difference is made only on the first level. If you want compare 2 arrays, you can use the code available at <a href="https://gist.github.com/wrey75/c631f6fe9c975354aec7" rel="nofollow" target="_blank">https://gist.github.com/wrey75/c631f6fe9c975354aec7</a> (including a class with an function to patch the array)<br /><br />Here the basic function:<br /><br />function my_array_diff($arr1, $arr2) {<br />        $diff = array();<br />        <br />        // Check the similarities<br />        foreach( $arr1 as $k1=&gt;$v1 ){<br />            if( isset( $arr2[$k1]) ){<br />                $v2 = $arr2[$k1];<br />                if( is_array($v1) &amp;&amp; is_array($v2) ){<br />                    // 2 arrays: just go further...<br />                    // .. and explain it's an update!<br />                    $changes = self::diff($v1, $v2);<br />                    if( count($changes) &gt; 0 ){<br />                        // If we have no change, simply ignore<br />                        $diff[$k1] = array('upd' =&gt; $changes);<br />                    }<br />                    unset($arr2[$k1]); // don't forget<br />                }<br />                else if( $v2 === $v1 ){<br />                    // unset the value on the second array<br />                    // for the "surplus"<br />                    unset( $arr2[$k1] );<br />                }<br />                else {<br />                    // Don't mind if arrays or not.<br />                    $diff[$k1] = array( 'old' =&gt; $v1, 'new'=&gt;$v2 );<br />                    unset( $arr2[$k1] );<br />                }<br />            }<br />            else {<br />                // remove information<br />                $diff[$k1] = array( 'old' =&gt; $v1 ); <br />            }<br />        }<br />        <br />        // Now, check for new stuff in $arr2<br />        reset( $arr2 ); // Don't argue it's unnecessary (even I believe you)<br />        foreach( $arr2 as $k=&gt;$v ){<br />            // OK, it is quite stupid my friend<br />            $diff[$k] = array( 'new' =&gt; $v );<br />        }<br />        return $diff;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="75731">  <div class="votes">
    <div id="Vu75731">
    <a href="/manual/vote-note.php?id=75731&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75731">
    <a href="/manual/vote-note.php?id=75731&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75731" title="56% like this...">
    2
    </div>
  </div>
  <a href="#75731" class="name">
  <strong class="user"><em>gilthans at NOgmailSPAM dot com</em></strong></a><a class="genanchor" href="#75731"> &para;</a><div class="date" title="2007-06-13 10:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75731">
<div class="phpcode"><code><span class="html">I needed a function to only remove the element the amount of times he appears in the second array. In other words, if you have Array(1, 1, 2) and Array(1), the return value should be Array(1, 2).<br />So I built this function right here:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_diff_once</span><span class="keyword">(){<br />    if((</span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">()) &lt; </span><span class="default">2</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$arr1 </span><span class="keyword">= </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br />    foreach(</span><span class="default">$arr2 </span><span class="keyword">as </span><span class="default">$remove</span><span class="keyword">){<br />        foreach(</span><span class="default">$arr1 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">){<br />            if((string)</span><span class="default">$v </span><span class="keyword">=== (string)</span><span class="default">$remove</span><span class="keyword">){ </span><span class="comment">//NOTE: if you need the diff to be STRICT, remove both the '(string)'s<br />                </span><span class="keyword">unset(</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />                break; </span><span class="comment">//That's pretty much the only difference from the real array_diff :P<br />            </span><span class="keyword">}<br />        }<br />    }<br />    </span><span class="comment">//Handle more than 2 arguments<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$args</span><span class="keyword">;<br />    while(</span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">2</span><span class="keyword">){<br />        </span><span class="default">$c</span><span class="keyword">--;<br />        </span><span class="default">$arr1 </span><span class="keyword">= </span><span class="default">array_diff_once</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">-</span><span class="default">$c</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$arr1</span><span class="keyword">;<br />}<br /></span><span class="default">$arr1 </span><span class="keyword">= Array(</span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"four"</span><span class="keyword">=&gt;</span><span class="default">4</span><span class="keyword">, </span><span class="string">"color"</span><span class="keyword">=&gt;</span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">, </span><span class="string">"name"</span><span class="keyword">=&gt;</span><span class="string">"jon"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">);<br /></span><span class="default">$arr2 </span><span class="keyword">= Array(</span><span class="string">"4"</span><span class="keyword">, </span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"green"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_diff_once</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span>This prints:<br />Array ( [1] =&gt; blue [3] =&gt; green [name] =&gt; jon [4] =&gt; green )<br /><br />Note that it removes the elements left to right, opposite to what you might expect; in my case the order of elements had no importance. Fixing that would require a small variation.</span></code></div>
  </div>
 </div>
  <div class="note" id="101613">  <div class="votes">
    <div id="Vu101613">
    <a href="/manual/vote-note.php?id=101613&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101613">
    <a href="/manual/vote-note.php?id=101613&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101613" title="53% like this...">
    1
    </div>
  </div>
  <a href="#101613" class="name">
  <strong class="user"><em>eugeny dot yakimovitch at gmail dot com</em></strong></a><a class="genanchor" href="#101613"> &para;</a><div class="date" title="2010-12-30 03:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101613">
<div class="phpcode"><code><span class="html">Note that array_diff is not equivalent to 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">fullArrayDiff</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">) 
<br />{
<br />    return </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">), </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$left</span><span class="keyword">, </span><span class="default">$right</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />since it is a set-theoretical complement as in 
<br />
<br /><a href="http://en.wikipedia.org/wiki/Complement_(set_theory" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Complement_(set_theory</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="60320">  <div class="votes">
    <div id="Vu60320">
    <a href="/manual/vote-note.php?id=60320&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60320">
    <a href="/manual/vote-note.php?id=60320&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60320" title="52% like this...">
    1
    </div>
  </div>
  <a href="#60320" class="name">
  <strong class="user"><em>Viking Coder</em></strong></a><a class="genanchor" href="#60320"> &para;</a><div class="date" title="2006-01-03 09:07"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60320">
<div class="phpcode"><code><span class="html">To anybody wanting a double-sided array_diff - mentioned by rudigier at noxx dot at. Remember, array_diff gives you everything in the first array that isn't in the subsequent arrays. <br /><br />$array1=array('blue','red','green');<br />$array2=array('blue','yellow','green');<br /><br />array_merge(array_diff($array1, $array2),array_diff($array2, $array1));<br /><br />Result<br />------<br />Array<br />(<br />    [0] =&gt; red<br />    [1] =&gt; yellow<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="94090">  <div class="votes">
    <div id="Vu94090">
    <a href="/manual/vote-note.php?id=94090&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94090">
    <a href="/manual/vote-note.php?id=94090&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94090" title="52% like this...">
    1
    </div>
  </div>
  <a href="#94090" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#94090"> &para;</a><div class="date" title="2009-10-15 11:55"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94090">
<div class="phpcode"><code><span class="html">Hi!<br />I tried hard to find a solution to a problem I'm going to explain here, and after have read all the array functions and possibilities, I had to create what I think should exist on next PHP releases.<br /><br />What I needed, it's some kind of Difference, but working with two arrays and modifying them at time, not returning an array as a result with the diference itself.<br /><br />So, as an example:<br /><br />A = 1,2,3<br />B = 2,3,4<br /><br />should NOT be:<br /><br />C = 1,4<br /><br />but:<br /><br />A = 1<br />B = 4<br /><br />so basically, I wanted to delete coincidences on both arrays.<br /><br />Now, I've some actions to do, and I know wich one I've to do with the values from one array or another.<br />With the normal DIFF I can't, because if I've an array like C=1,4, I dont know if I've to do the Action_A with 1 or with 4, but I really know that everything in A, will go to the Action_A and everithing in B, will go to Action_B. So same happens with 4, don't know wich action to apply...<br /><br />So I created this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_diff_ORG_NEW</span><span class="keyword">(&amp;</span><span class="default">$org</span><span class="keyword">, &amp;</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">=</span><span class="string">'VALUES'</span><span class="keyword">){<br />    switch(</span><span class="default">$type</span><span class="keyword">){<br />        case </span><span class="string">'VALUES'</span><span class="keyword">:<br />            </span><span class="default">$int </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$org</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">)); </span><span class="comment">//C = A ^ B<br />            </span><span class="default">$org </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$org</span><span class="keyword">, </span><span class="default">$int</span><span class="keyword">)); </span><span class="comment">//A' = A - C<br />            </span><span class="default">$new</span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$int</span><span class="keyword">)); </span><span class="comment">//B' = B - C<br />            </span><span class="keyword">break;<br />        case </span><span class="string">'KEYS'</span><span class="keyword">:<br />            </span><span class="default">$int </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_intersect_key</span><span class="keyword">(</span><span class="default">$org</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">)); </span><span class="comment">//C = A ^ B<br />            </span><span class="default">$org </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$org</span><span class="keyword">, </span><span class="default">$int</span><span class="keyword">)); </span><span class="comment">//A' = A - C<br />            </span><span class="default">$new</span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$new</span><span class="keyword">, </span><span class="default">$int</span><span class="keyword">)); </span><span class="comment">//B' = B - C<br />            </span><span class="keyword">break;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This cute, works by reference, and modifies the arrays deleting coincidences on both, and leaving intact the non coincidences.<br /><br />So a call to this will be somethin' like:<br /><br /><span class="default">&lt;?php<br />$original </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">$new </span><span class="keyword">= array(</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);<br /><br /></span><span class="default">array_diff_ORG_NEW</span><span class="keyword">(</span><span class="default">$original</span><span class="keyword">, </span><span class="default">$new</span><span class="keyword">, </span><span class="string">'VALUES'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And HERE, I'll have my arrays as I wanted:<br /><br />$original = 1<br />$new = 4<br /><br />Now, why I use it precisely?<br /><br />Imagine you've some "Events" and some users you select when create the event, can "see" this event you create. So you "share" the event with some users. Ok?<br /><br />Imagine you created and Event_A, and shared with users 1,2,3.<br /><br />Now you want to modify the event, and you decide to modify the users to share it. Imagine you change it to users 2,3,4.<br /><br />(numbers are users ID).<br /><br />So you can manage when you are going to modify, to have an array with the IDs in DDBB ($original), and then, have another array with ID's corresponding to the users to share after modifying ($new). Wich ones you've to DELETE from DDBB, and wich ones do you've to INSERT?<br /><br />If you do a simple difference or somehow, you get somethin' like C=1,4.<br />You have no clue on wich one you've to insert or delete.<br /><br />But on this way, you can know it, and that's why:<br /><br />- What keeps on $original, it's somethin not existing in $new at the beggining. So you know that all what you've inside $original, have to be deleted from DDBB because what you did in the modifying process, it's to unselect those users keeping in $original.<br />- What keeps on $new, it's something not existing in $original at the beggining. Wich means that in the modifying process you added some new users. And those have to be inserted in DDBB. So, everything keeping inside $new, have to be inserted in the DDBB.<br /><br />Conclusion:<br /><br />- Remaining in $original --&gt; delete from DB.<br />- Remaining in $new --&gt; insert into DB.<br /><br />And that's all!<br /><br />I hope you find it useful, and I encourage PHP "makers", to add in a not distant future, somethin' like this one natively, because I'm shure that I'm not the first one needing something like this.<br /><br />Best regards all,<br /><br />Light.</span></code></div>
  </div>
 </div>
  <div class="note" id="128307">  <div class="votes">
    <div id="Vu128307">
    <a href="/manual/vote-note.php?id=128307&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128307">
    <a href="/manual/vote-note.php?id=128307&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128307" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128307" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#128307"> &para;</a><div class="date" title="2023-03-13 09:23"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128307">
<div class="phpcode"><code><span class="html">I use array_diff() and array_intersect() to check the completness of a CSV file before processing :<br /><br /><span class="default">&lt;?php<br /><br />$header </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, ...</span><span class="default">$csv_options</span><span class="keyword">); </span><span class="comment">// ['id', 'name', 'sex']<br /><br /></span><span class="default">$awaited </span><span class="keyword">= [</span><span class="string">'id'</span><span class="keyword">, </span><span class="string">'name'</span><span class="keyword">, </span><span class="string">'email'</span><span class="keyword">]; </span><span class="comment">// Header cols I need in the CSV<br /><br /></span><span class="default">$present </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">, </span><span class="default">$awaited</span><span class="keyword">); </span><span class="comment">// ['id', 'name']<br /><br /></span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$present</span><span class="keyword">) &lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$awaited</span><span class="keyword">)) { </span><span class="comment">// 2 &lt; 3 =&gt; true, problem!<br />    </span><span class="default">$missing </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$present</span><span class="keyword">, </span><span class="default">$awaited</span><span class="keyword">); </span><span class="comment">// ['email']<br />    </span><span class="default">$missing </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$missing</span><span class="keyword">);<br />    echo </span><span class="string">"Missing cols: </span><span class="keyword">{</span><span class="default">$missing</span><span class="keyword">}</span><span class="string">\r\n"</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="29742">  <div class="votes">
    <div id="Vu29742">
    <a href="/manual/vote-note.php?id=29742&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29742">
    <a href="/manual/vote-note.php?id=29742&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29742" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#29742" class="name">
  <strong class="user"><em>ds2u  at the  hotmail  dot  com</em></strong></a><a class="genanchor" href="#29742"> &para;</a><div class="date" title="2003-02-23 04:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29742">
<div class="phpcode"><code><span class="html">Yes you can get rid of gaps/missing keys by using:
<br />
<br /><span class="default">&lt;?php
<br />$result </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$array1</span><span class="keyword">,</span><span class="default">$array2</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />But to drop the storage of void spaces (actually a line feed) which are irritatingly indexed when reading from files - just use difference:
<br />
<br /><span class="default">&lt;?php
<br />$array </span><span class="keyword">= array ();
<br /></span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_diff</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />dst</span></code></div>
  </div>
 </div>
  <div class="note" id="48583">  <div class="votes">
    <div id="Vu48583">
    <a href="/manual/vote-note.php?id=48583&amp;page=function.array-diff&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48583">
    <a href="/manual/vote-note.php?id=48583&amp;page=function.array-diff&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48583" title="40% like this...">
    -2
    </div>
  </div>
  <a href="#48583" class="name">
  <strong class="user"><em>j dot j dot d dot mol at ewi dot tudelft dot nl</em></strong></a><a class="genanchor" href="#48583"> &para;</a><div class="date" title="2004-12-31 12:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48583">
<div class="phpcode"><code><span class="html">Here is some code to take the difference of two arrays. It allows custom modifications like prefixing with a certain string (as shown) or custom compare functions.<br /><br /><span class="default">&lt;?php <br /> </span><span class="comment">// returns all elements in $all which are not in $used in O(n log n) time.<br />  // elements from $all are prefixed with $prefix_all.<br />  // elements from $used are prefixed with $prefix_used.<br />  </span><span class="keyword">function </span><span class="default">filter_unused</span><span class="keyword">( </span><span class="default">$all</span><span class="keyword">, </span><span class="default">$used</span><span class="keyword">, </span><span class="default">$prefix_all </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$prefix_used </span><span class="keyword">= </span><span class="string">"" </span><span class="keyword">) {<br />      </span><span class="default">$unused </span><span class="keyword">= array();<br /><br />      </span><span class="comment">// prefixes are not needed for sorting<br />      </span><span class="default">sort</span><span class="keyword">( </span><span class="default">$all </span><span class="keyword">);<br />      </span><span class="default">sort</span><span class="keyword">( </span><span class="default">$used </span><span class="keyword">);<br /><br />      </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      </span><span class="default">$u </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />      </span><span class="default">$maxa </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$all</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br />      </span><span class="default">$maxu </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$used</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br /><br />      while( </span><span class="default">true </span><span class="keyword">) {<br />          if( </span><span class="default">$a </span><span class="keyword">&gt; </span><span class="default">$maxa </span><span class="keyword">) {<br />              </span><span class="comment">// done; rest of $used isn't in $all<br />              </span><span class="keyword">break;<br />          }<br />          if( </span><span class="default">$u </span><span class="keyword">&gt; </span><span class="default">$maxu </span><span class="keyword">) {<br />              </span><span class="comment">// rest of $all is unused<br />              </span><span class="keyword">for( ; </span><span class="default">$a </span><span class="keyword">&lt;= </span><span class="default">$maxa</span><span class="keyword">; </span><span class="default">$a</span><span class="keyword">++ ) {<br />                  </span><span class="default">$unused</span><span class="keyword">[] = </span><span class="default">$all</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">];<br />              }<br />              break;<br />          }<br /><br />          if( </span><span class="default">$prefix_all</span><span class="keyword">.</span><span class="default">$all</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">] &gt; </span><span class="default">$prefix_used</span><span class="keyword">.</span><span class="default">$used</span><span class="keyword">[</span><span class="default">$u</span><span class="keyword">] ) {<br />              </span><span class="comment">// $used[$u] isn't in $all?<br />              </span><span class="default">$u</span><span class="keyword">++;<br />              continue;<br />          }<br /><br />          if( </span><span class="default">$prefix_all</span><span class="keyword">.</span><span class="default">$all</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">] == </span><span class="default">$prefix_used</span><span class="keyword">.</span><span class="default">$used</span><span class="keyword">[</span><span class="default">$u</span><span class="keyword">] ) {<br />              </span><span class="comment">// $all[$a] is used<br />              </span><span class="default">$a</span><span class="keyword">++;<br />              </span><span class="default">$u</span><span class="keyword">++;<br />              continue;<br />          }<br /><br />          </span><span class="default">$unused</span><span class="keyword">[] = </span><span class="default">$all</span><span class="keyword">[</span><span class="default">$a</span><span class="keyword">];<br /><br />          </span><span class="default">$a</span><span class="keyword">++;<br />      }<br /><br />      return </span><span class="default">$unused</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-diff&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-diff.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
