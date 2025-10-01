<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_change_key_case - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-change-key-case.php">
 <link rel="shorturl" href="https://www.php.net/array-change-key-case">
 <link rel="alternate" href="https://www.php.net/array-change-key-case" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-any.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-chunk.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-change-key-case.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-change-key-case.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-change-key-case.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-change-key-case.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-change-key-case.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-change-key-case.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-change-key-case.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-change-key-case.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-change-key-case.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-change-key-case.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-change-key-case.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Changes the case of all keys in an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_change_key_case - Manual" />
<meta name="twitter:description" content="Changes the case of all keys in an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_change_key_case - Manual" />
<meta itemprop="description" content="Changes the case of all keys in an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Changes the case of all keys in an array" />

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
        <a href="function.array-chunk.php">
          array_chunk &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-any.php">
          &laquo; array_any        </a>
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
            <option value='en/function.array-change-key-case.php' selected="selected">English</option>
            <option value='de/function.array-change-key-case.php'>German</option>
            <option value='es/function.array-change-key-case.php'>Spanish</option>
            <option value='fr/function.array-change-key-case.php'>French</option>
            <option value='it/function.array-change-key-case.php'>Italian</option>
            <option value='ja/function.array-change-key-case.php'>Japanese</option>
            <option value='pt_BR/function.array-change-key-case.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-change-key-case.php'>Russian</option>
            <option value='tr/function.array-change-key-case.php'>Turkish</option>
            <option value='uk/function.array-change-key-case.php'>Ukrainian</option>
            <option value='zh/function.array-change-key-case.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-change-key-case" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_change_key_case</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_change_key_case</span> &mdash; <span class="dc-title">Changes the case of all keys in an array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-change-key-case-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_change_key_case</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$case</code><span class="initializer"> = <strong><code><a href="array.constants.php#constant.case-lower">CASE_LOWER</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Returns an array with all keys from <code class="parameter">array</code> lowercased
   or uppercased. Numbered indices are left as is.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-change-key-case-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>

    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The array to work on
      </p>
     </dd>
    

    
     <dt><code class="parameter">case</code></dt>
     <dd>
      <p class="para">
       Either <strong><code><a href="array.constants.php#constant.case-upper">CASE_UPPER</a></code></strong> or
       <strong><code><a href="array.constants.php#constant.case-lower">CASE_LOWER</a></code></strong> (default)
      </p>
     </dd>
    

   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-change-key-case-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array with its keys lower or uppercased.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-change-key-case-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="function.array-change-key-case.example-1">
    <p><strong>Example #1 <span class="function"><strong>array_change_key_case()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input_array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"FirSt" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"SecOnd" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_change_key_case</span><span style="color: #007700">(</span><span style="color: #0000BB">$input_array</span><span style="color: #007700">, </span><span style="color: #0000BB">CASE_UPPER</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [FIRST] =&gt; 1
    [SECOND] =&gt; 4
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.array-change-key-case-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    If an array has indices that will be the same once run through this
    function (e.g. &quot;<code class="literal">keY</code>&quot; and &quot;<code class="literal">kEY</code>&quot;), 
    the value that is later in the array will override other indices.
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-change-key-case.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-change-key-case%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-change-key-case&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-change-key-case.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107715">  <div class="votes">
    <div id="Vu107715">
    <a href="/manual/vote-note.php?id=107715&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107715">
    <a href="/manual/vote-note.php?id=107715&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107715" title="53% like this...">
    25
    </div>
  </div>
  <a href="#107715" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107715"> &para;</a><div class="date" title="2012-02-28 05:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107715">
<div class="phpcode"><code><span class="html">Unicode example;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_change_key_case_unicode</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$c </span><span class="keyword">= </span><span class="default">CASE_LOWER</span><span class="keyword">) {<br />    </span><span class="default">$c </span><span class="keyword">= (</span><span class="default">$c </span><span class="keyword">== </span><span class="default">CASE_LOWER</span><span class="keyword">) ? </span><span class="default">MB_CASE_LOWER </span><span class="keyword">: </span><span class="default">MB_CASE_UPPER</span><span class="keyword">;<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">)] = </span><span class="default">$v</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">"FirSt" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"yağ" </span><span class="keyword">=&gt; </span><span class="string">"Oil"</span><span class="keyword">, </span><span class="string">"şekER" </span><span class="keyword">=&gt; </span><span class="string">"sugar"</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_change_key_case</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">CASE_UPPER</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_change_key_case_unicode</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">CASE_UPPER</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [FIRST] =&gt; 1<br />    [YAğ] =&gt; Oil<br />    [şEKER] =&gt; sugar<br />)<br />Array<br />(<br />    [FIRST] =&gt; 1<br />    [YAĞ] =&gt; Oil<br />    [ŞEKER] =&gt; sugar<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="114914">  <div class="votes">
    <div id="Vu114914">
    <a href="/manual/vote-note.php?id=114914&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114914">
    <a href="/manual/vote-note.php?id=114914&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114914" title="54% like this...">
    15
    </div>
  </div>
  <a href="#114914" class="name">
  <strong class="user"><em>xsaero00</em></strong></a><a class="genanchor" href="#114914"> &para;</a><div class="date" title="2014-04-25 05:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114914">
<div class="phpcode"><code><span class="html">Here is the most compact way to lower case keys in a multidimensional array<br /><br />function array_change_key_case_recursive($arr)<br />{<br />    return array_map(function($item){<br />        if(is_array($item))<br />            $item = array_change_key_case_recursive($item);<br />        return $item;<br />    },array_change_key_case($arr));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="124285">  <div class="votes">
    <div id="Vu124285">
    <a href="/manual/vote-note.php?id=124285&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124285">
    <a href="/manual/vote-note.php?id=124285&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124285" title="56% like this...">
    8
    </div>
  </div>
  <a href="#124285" class="name">
  <strong class="user"><em>zhangxuejiang</em></strong></a><a class="genanchor" href="#124285"> &para;</a><div class="date" title="2019-10-10 03:30"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124285">
<div class="phpcode"><code><span class="html">I improve the array_change_key_case_recursive function ,let it can lowercase or uppercase keys<br /><br />function array_change_key_case_recursive($arr, $case = CASE_LOWER)<br />{<br />    return array_map(function($item) use($case) {<br />        if(is_array($item))<br />            $item = array_change_key_case_recursive($item, $case);<br />        return $item;<br />    },array_change_key_case($arr, $case));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="125663">  <div class="votes">
    <div id="Vu125663">
    <a href="/manual/vote-note.php?id=125663&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125663">
    <a href="/manual/vote-note.php?id=125663&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125663" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125663" class="name">
  <strong class="user"><em>msegit post pl</em></strong></a><a class="genanchor" href="#125663"> &para;</a><div class="date" title="2021-01-08 07:54"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125663">
<div class="phpcode"><code><span class="html">Improved multidimensional unicode func (after qeremy):<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_change_key_case_unicode_recurs</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$c </span><span class="keyword">= </span><span class="default">CASE_LOWER</span><span class="keyword">) {<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />        </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">mb_convert_case</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, ((</span><span class="default">$c </span><span class="keyword">=== </span><span class="default">CASE_LOWER</span><span class="keyword">) ? </span><span class="default">MB_CASE_LOWER </span><span class="keyword">: </span><span class="default">MB_CASE_UPPER</span><span class="keyword">), </span><span class="string">"UTF-8"</span><span class="keyword">)] = (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) ? </span><span class="default">array_change_key_case_unicode_recurs</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$c</span><span class="keyword">) : </span><span class="default">$v </span><span class="keyword">);<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">"FirSt" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"ZażóŁć gęŚlą jaŹń" </span><span class="keyword">=&gt; array(</span><span class="string">"yağ" </span><span class="keyword">=&gt; </span><span class="string">"Oil"</span><span class="keyword">, </span><span class="string">"şekER" </span><span class="keyword">=&gt; </span><span class="string">"sugar"</span><span class="keyword">) );<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_change_key_case</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">CASE_UPPER</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_change_key_case_unicode_recurs</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">CASE_UPPER</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [FIRST] =&gt; 1<br />    [ZAżóŁć GęŚLą JAŹń] =&gt; Array<br />        (<br />            [yağ] =&gt; Oil<br />            [şekER] =&gt; sugar<br />        )<br />)<br />Array<br />(<br />    [FIRST] =&gt; 1<br />    [ZAŻÓŁĆ GĘŚLĄ JAŹŃ] =&gt; Array<br />        (<br />            [YAĞ] =&gt; Oil<br />            [ŞEKER] =&gt; sugar<br />        )<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="82522">  <div class="votes">
    <div id="Vu82522">
    <a href="/manual/vote-note.php?id=82522&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82522">
    <a href="/manual/vote-note.php?id=82522&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82522" title="50% like this...">
    1
    </div>
  </div>
  <a href="#82522" class="name">
  <strong class="user"><em>andreas dot schuhmacher87 at googlemail dot com</em></strong></a><a class="genanchor" href="#82522"> &para;</a><div class="date" title="2008-04-14 06:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82522">
<div class="phpcode"><code><span class="html">multibyte and multi-dimensional-array support, have fun!<br /><br /><span class="default">&lt;?php<br />    define</span><span class="keyword">(</span><span class="string">'ARRAY_KEY_FC_LOWERCASE'</span><span class="keyword">, </span><span class="default">25</span><span class="keyword">); </span><span class="comment">//FOO =&gt; fOO<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'ARRAY_KEY_FC_UPPERCASE'</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">); </span><span class="comment">//foo =&gt; Foo<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'ARRAY_KEY_UPPERCASE'</span><span class="keyword">, </span><span class="default">15</span><span class="keyword">); </span><span class="comment">//foo =&gt; FOO<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'ARRAY_KEY_LOWERCASE'</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">); </span><span class="comment">//FOO =&gt; foo<br />    </span><span class="default">define</span><span class="keyword">(</span><span class="string">'ARRAY_KEY_USE_MULTIBYTE'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">//use mutlibyte functions<br />    <br />    /**<br />    * change the case of array-keys<br />    *<br />    * use: array_change_key_case_ext(array('foo' =&gt; 1, 'bar' =&gt; 2), ARRAY_KEY_UPPERCASE);<br />    * result: array('FOO' =&gt; 1, 'BAR' =&gt; 2)<br />    *<br />    * @param    array<br />    * @param    int<br />    * @return     array<br />    */<br />    </span><span class="keyword">function </span><span class="default">array_change_key_case_ext</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$case </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">, </span><span class="default">$useMB </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$mbEnc </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">) {<br />        </span><span class="default">$newArray </span><span class="keyword">= array();<br />        <br />        </span><span class="comment">//for more speed define the runtime created functions in the global namespace<br />        <br />        //get function<br />        </span><span class="keyword">if(</span><span class="default">$useMB </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$function </span><span class="keyword">= </span><span class="string">'strToUpper'</span><span class="keyword">; </span><span class="comment">//default<br />            </span><span class="keyword">switch(</span><span class="default">$case</span><span class="keyword">) {<br />                </span><span class="comment">//first-char-to-lowercase<br />                </span><span class="keyword">case </span><span class="default">25</span><span class="keyword">:<br />                    </span><span class="comment">//maybee lcfirst is not callable<br />                    </span><span class="keyword">if(!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'lcfirst'</span><span class="keyword">)) <br />                        </span><span class="default">$function </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$input'</span><span class="keyword">, </span><span class="string">'<br />                            return strToLower($input[0]) . substr($input, 1, (strLen($input) - 1));<br />                        '</span><span class="keyword">);<br />                    else </span><span class="default">$function </span><span class="keyword">= </span><span class="string">'lcfirst'</span><span class="keyword">;<br />                    break;<br />                <br />                </span><span class="comment">//first-char-to-uppercase                <br />                </span><span class="keyword">case </span><span class="default">20</span><span class="keyword">:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="string">'ucfirst'</span><span class="keyword">;<br />                    break;<br />                <br />                </span><span class="comment">//lowercase<br />                </span><span class="keyword">case </span><span class="default">10</span><span class="keyword">:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="string">'strToLower'</span><span class="keyword">;<br />            }<br />        } else {<br />            </span><span class="comment">//create functions for multibyte support<br />            </span><span class="keyword">switch(</span><span class="default">$case</span><span class="keyword">) {<br />                </span><span class="comment">//first-char-to-lowercase<br />                </span><span class="keyword">case </span><span class="default">25</span><span class="keyword">:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$input'</span><span class="keyword">, </span><span class="string">'<br />                        return mb_strToLower(mb_substr($input, 0, 1, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\')) . <br />                            mb_substr($input, 1, (mb_strlen($input, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\') - 1), \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\');<br />                    '</span><span class="keyword">);<br />                    <br />                    break;<br />                <br />                </span><span class="comment">//first-char-to-uppercase<br />                </span><span class="keyword">case </span><span class="default">20</span><span class="keyword">:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$input'</span><span class="keyword">, </span><span class="string">'<br />                        return mb_strToUpper(mb_substr($input, 0, 1, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\')) . <br />                            mb_substr($input, 1, (mb_strlen($input, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\') - 1), \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\');<br />                    '</span><span class="keyword">);<br />                    <br />                    break;<br />                <br />                </span><span class="comment">//uppercase<br />                </span><span class="keyword">case </span><span class="default">15</span><span class="keyword">:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$input'</span><span class="keyword">, </span><span class="string">'<br />                        return mb_strToUpper($input, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\');<br />                    '</span><span class="keyword">);<br />                    break;<br />                <br />                </span><span class="comment">//lowercase<br />                </span><span class="keyword">default: </span><span class="comment">//case 10:<br />                    </span><span class="default">$function </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$input'</span><span class="keyword">, </span><span class="string">'<br />                        return mb_strToLower($input, \'' </span><span class="keyword">. </span><span class="default">$mbEnc </span><span class="keyword">. </span><span class="string">'\');<br />                    '</span><span class="keyword">);<br />            }<br />        }<br />        <br />        </span><span class="comment">//loop array<br />        </span><span class="keyword">foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) </span><span class="comment">//$value is an array, handle keys too<br />                </span><span class="default">$newArray</span><span class="keyword">[</span><span class="default">$function</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)] = </span><span class="default">array_change_key_case_ex</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$case</span><span class="keyword">, </span><span class="default">$useMB</span><span class="keyword">);<br />            elseif(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">))<br />                </span><span class="default">$newArray</span><span class="keyword">[</span><span class="default">$function</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)] = </span><span class="default">$value</span><span class="keyword">;<br />            else </span><span class="default">$newArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">; </span><span class="comment">//$key is not a string<br />        </span><span class="keyword">} </span><span class="comment">//end loop<br />        <br />        </span><span class="keyword">return </span><span class="default">$newArray</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124192">  <div class="votes">
    <div id="Vu124192">
    <a href="/manual/vote-note.php?id=124192&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124192">
    <a href="/manual/vote-note.php?id=124192&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124192" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#124192" class="name">
  <strong class="user"><em>shaman_master at list dot ru</em></strong></a><a class="genanchor" href="#124192"> &para;</a><div class="date" title="2019-09-12 10:10"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124192">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Convert keys in an array.<br /> * <br /> * @param array $array Source data<br /> * @param callable $callback Function name (strtolower, strtoupper, ucfirst, lcfirst, ucwords)<br /> * @return array<br /> */<br /></span><span class="keyword">function </span><span class="default">array_convert_key_case</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, callable </span><span class="default">$callback </span><span class="keyword">= </span><span class="string">'strtolower'</span><span class="keyword">)<br />{<br />    return </span><span class="default">array_combine</span><span class="keyword">(<br />        </span><span class="default">array_map</span><span class="keyword">(</span><span class="default">$callback</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)),<br />        </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)<br />    );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127715">  <div class="votes">
    <div id="Vu127715">
    <a href="/manual/vote-note.php?id=127715&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127715">
    <a href="/manual/vote-note.php?id=127715&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127715" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#127715" class="name">
  <strong class="user"><em>wendri dot net at gmail dot com</em></strong></a><a class="genanchor" href="#127715"> &para;</a><div class="date" title="2022-10-12 04:15"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127715">
<div class="phpcode"><code><span class="html">Array of partitions with always the same number of sub-array indexes.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">partitionFixedSubArray</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">, </span><span class="default">$empty_space</span><span class="keyword">)<br />{   <br />    </span><span class="default">$result </span><span class="keyword">= [];<br /><br />    if ( </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) ) {<br /><br />        </span><span class="default">$result </span><span class="keyword">= </span><span class="default">array_chunk</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />        </span><span class="default">$last_array_count </span><span class="keyword">= </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">end</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">));<br /><br />        if (</span><span class="default">$last_array_count </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">) {<br /><br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$last_array_count</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />                </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">[</span><span class="default">key</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)], </span><span class="default">$empty_space</span><span class="keyword">);<br />            }<br />        }<br />    }<br /><br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$employees </span><span class="keyword">= [<br />    </span><span class="string">"Paidi"</span><span class="keyword">,<br />    </span><span class="string">"Paijo"</span><span class="keyword">,<br />    </span><span class="string">"Darno"</span><span class="keyword">,<br />    </span><span class="string">"Kusnan"</span><span class="keyword">,<br />    </span><span class="string">"Mukidi"</span><span class="keyword">,<br />    </span><span class="string">"Sarno"</span><span class="keyword">,<br />    </span><span class="string">"Nurdin"</span><span class="keyword">,<br />    </span><span class="string">"Parmen"</span><span class="keyword">,<br />    </span><span class="string">"Sukinah"</span><span class="keyword">,<br />    </span><span class="string">"Sartini"</span><span class="keyword">,<br />    </span><span class="string">"Sukijan"</span><span class="keyword">,<br />    </span><span class="string">"Yono"</span><span class="keyword">,<br />    </span><span class="string">"Supoyo"<br /></span><span class="keyword">];<br /><br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">partitionFixedSubArray</span><span class="keyword">(</span><span class="default">$employees</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="string">"empty space"</span><span class="keyword">));<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; Paidi<br />            [1] =&gt; Paijo<br />            [2] =&gt; Darno<br />            [3] =&gt; Kusnan<br />            [4] =&gt; Mukidi<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; Sarno<br />            [1] =&gt; Nurdin<br />            [2] =&gt; Parmen<br />            [3] =&gt; Sukinah<br />            [4] =&gt; Sartini<br />        )<br /><br />    [2] =&gt; Array<br />        (<br />            [0] =&gt; Sukijan<br />            [1] =&gt; Yono<br />            [2] =&gt; Supoyo<br />            [3] =&gt; empty space<br />            [4] =&gt; empty space<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="110126">  <div class="votes">
    <div id="Vu110126">
    <a href="/manual/vote-note.php?id=110126&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110126">
    <a href="/manual/vote-note.php?id=110126&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110126" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#110126" class="name">
  <strong class="user"><em>NetPanther</em></strong></a><a class="genanchor" href="#110126"> &para;</a><div class="date" title="2012-09-22 01:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110126">
<div class="phpcode"><code><span class="html">Use this to capitalize first letter of all array keys:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">ucfirstKeys</span><span class="keyword">(&amp;</span><span class="default">$data</span><span class="keyword">)<br />{<br />  foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// Convert key<br />    </span><span class="default">$newKey </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">);<br /><br />    </span><span class="comment">// Change key if needed<br />    </span><span class="keyword">if (</span><span class="default">$newKey </span><span class="keyword">!= </span><span class="default">$key</span><span class="keyword">)<br />    {<br />      unset(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />      </span><span class="default">$data</span><span class="keyword">[</span><span class="default">$newKey</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Handle nested arrays<br />    </span><span class="keyword">if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />    {<br />      </span><span class="default">ucfirstKeys</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    }<br />  }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= array(</span><span class="string">'foo' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">, </span><span class="string">'moreFoo' </span><span class="keyword">=&gt; array(</span><span class="string">'more' </span><span class="keyword">=&gt; </span><span class="string">'foo'</span><span class="keyword">));<br /></span><span class="default">ucfirstKeys</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Result:<br />Array ( [MoreFoo] =&gt; Array ( [More] =&gt; foo ) [Foo] =&gt; bar )</span></code></div>
  </div>
 </div>
  <div class="note" id="77016">  <div class="votes">
    <div id="Vu77016">
    <a href="/manual/vote-note.php?id=77016&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77016">
    <a href="/manual/vote-note.php?id=77016&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77016" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#77016" class="name">
  <strong class="user"><em>cm at gameswelt dot de</em></strong></a><a class="genanchor" href="#77016"> &para;</a><div class="date" title="2007-08-10 04:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77016">
<div class="phpcode"><code><span class="html">I just changed the code a little bit so you havent got a code that repeats itself.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_change_key_case_secure</span><span class="keyword">(</span><span class="default">$array </span><span class="keyword">= array(), </span><span class="default">$case </span><span class="keyword">= </span><span class="default">CASE_UPPER</span><span class="keyword">){<br />    </span><span class="default">$secure </span><span class="keyword">= array();<br />    </span><span class="default">$functionWrap </span><span class="keyword">= array(</span><span class="default">CASE_UPPER </span><span class="keyword">=&gt; </span><span class="string">'strtoupper'</span><span class="keyword">,<br />                            </span><span class="default">CASE_LOWER </span><span class="keyword">=&gt; </span><span class="string">'strtolower'</span><span class="keyword">);<br />                            <br />    foreach(</span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">){<br />        if(isset(</span><span class="default">$functionWrap</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])){<br />            </span><span class="default">$key </span><span class="keyword">= </span><span class="default">$functionWrap</span><span class="keyword">[</span><span class="default">$case</span><span class="keyword">](</span><span class="default">$key</span><span class="keyword">);<br />            </span><span class="default">$secure</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">][] = </span><span class="default">$val</span><span class="keyword">;<br />        } else {<br />            die(</span><span class="string">'Not a known Type'</span><span class="keyword">);<br />        }<br />    }<br />    <br />    foreach(</span><span class="default">$secure </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">){<br />        if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$secure</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) == </span><span class="default">1</span><span class="keyword">){<br />            </span><span class="default">$secure</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        }<br />    }<br />    <br />    return </span><span class="default">$secure</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$myArray </span><span class="keyword">= array(</span><span class="string">'A' </span><span class="keyword">=&gt; </span><span class="string">'Hello'</span><span class="keyword">,<br />                    </span><span class="string">'B' </span><span class="keyword">=&gt; </span><span class="string">'World'</span><span class="keyword">,<br />                    </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'how are you?'</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br /></span><span class="default">$myArray </span><span class="keyword">= </span><span class="default">array_change_key_case_secure</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />Array<br />(<br />    [A] =&gt; Hello<br />    [B] =&gt; World<br />    [a] =&gt; how are you?<br />)<br />Array<br />(<br />    [A] =&gt; Array<br />        (<br />            [0] =&gt; Hello<br />            [1] =&gt; how are you?<br />        )<br /><br />    [B] =&gt; World<br />)<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78056">  <div class="votes">
    <div id="Vu78056">
    <a href="/manual/vote-note.php?id=78056&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78056">
    <a href="/manual/vote-note.php?id=78056&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78056" title="45% like this...">
    -5
    </div>
  </div>
  <a href="#78056" class="name">
  <strong class="user"><em>john at doe dot com</em></strong></a><a class="genanchor" href="#78056"> &para;</a><div class="date" title="2007-09-26 12:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom78056">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_change_value_case</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$case </span><span class="keyword">= </span><span class="default">CASE_LOWER</span><span class="keyword">)<br />{<br />    </span><span class="default">$aRet </span><span class="keyword">= array();<br />    <br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">))<br />    {<br />        return </span><span class="default">$aRet</span><span class="keyword">;<br />    }<br />    <br />    foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">))<br />        {<br />            </span><span class="default">$aRet</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_change_value_case</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$case</span><span class="keyword">);<br />            continue;<br />        }<br />        <br />        </span><span class="default">$aRet</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = (</span><span class="default">$case </span><span class="keyword">== </span><span class="default">CASE_UPPER </span><span class="keyword">? </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) : </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">));<br />    }<br />    <br />    return </span><span class="default">$aRet</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87367">  <div class="votes">
    <div id="Vu87367">
    <a href="/manual/vote-note.php?id=87367&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87367">
    <a href="/manual/vote-note.php?id=87367&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87367" title="44% like this...">
    -5
    </div>
  </div>
  <a href="#87367" class="name">
  <strong class="user"><em>anon at ymous dot com</em></strong></a><a class="genanchor" href="#87367"> &para;</a><div class="date" title="2008-12-02 03:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87367">
<div class="phpcode"><code><span class="html">Below is a recursive version of this function.
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="comment">/**
<br />     * A recursive array_change_key_case function.
<br />     * @param array $input
<br />     * @param integer $case
<br />     */
<br />    </span><span class="keyword">function </span><span class="default">array_change_key_case_recursive</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$case </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">){
<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)){
<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Invalid input array '</span><span class="keyword">{</span><span class="default">$array</span><span class="keyword">}</span><span class="string">'"</span><span class="keyword">,</span><span class="default">E_USER_NOTICE</span><span class="keyword">); exit;
<br />        }
<br />        </span><span class="comment">// CASE_UPPER|CASE_LOWER
<br />        </span><span class="keyword">if(</span><span class="default">null </span><span class="keyword">=== </span><span class="default">$case</span><span class="keyword">){
<br />            </span><span class="default">$case </span><span class="keyword">= </span><span class="default">CASE_LOWER</span><span class="keyword">;
<br />        }
<br />        if(!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$case</span><span class="keyword">, array(</span><span class="default">CASE_UPPER</span><span class="keyword">, </span><span class="default">CASE_LOWER</span><span class="keyword">))){
<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"Case parameter '</span><span class="keyword">{</span><span class="default">$case</span><span class="keyword">}</span><span class="string">' is invalid."</span><span class="keyword">, </span><span class="default">E_USER_NOTICE</span><span class="keyword">); exit;
<br />        }
<br />        </span><span class="default">$input </span><span class="keyword">= </span><span class="default">array_change_key_case</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$case</span><span class="keyword">);
<br />        foreach(</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$array</span><span class="keyword">){
<br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)){
<br />                </span><span class="default">$input</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_change_key_case_recursive</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$case</span><span class="keyword">);
<br />            }
<br />        }
<br />        return </span><span class="default">$input</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128786">  <div class="votes">
    <div id="Vu128786">
    <a href="/manual/vote-note.php?id=128786&amp;page=function.array-change-key-case&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128786">
    <a href="/manual/vote-note.php?id=128786&amp;page=function.array-change-key-case&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128786" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#128786" class="name">
  <strong class="user"><em>gsoft</em></strong></a><a class="genanchor" href="#128786"> &para;</a><div class="date" title="2023-08-09 09:06"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128786">
<div class="phpcode"><code><span class="html">//Array key case change recursively (Unicode):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_key_case</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">$case</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">)<br />{<br />    </span><span class="default">$ret</span><span class="keyword">=array();<br />    if ( </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) )            <br />        foreach (</span><span class="default">$data </span><span class="keyword">as </span><span class="default">$idx </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)                   <br />            </span><span class="default">$ret</span><span class="keyword">[</span><span class="default">$case </span><span class="keyword">? </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">$idx</span><span class="keyword">) : </span><span class="default">mb_strtolower</span><span class="keyword">(</span><span class="default">$idx</span><span class="keyword">)]=</span><span class="default">array_key_case</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">$case</span><span class="keyword">);            <br />    else<br />        </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">$data</span><span class="keyword">;<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-change-key-case&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-change-key-case.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
