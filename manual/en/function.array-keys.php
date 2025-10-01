<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_keys - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-keys.php">
 <link rel="shorturl" href="https://www.php.net/array-keys">
 <link rel="alternate" href="https://www.php.net/array-keys" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-key-last.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-map.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-keys.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-keys.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-keys.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-keys.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-keys.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-keys.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-keys.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-keys.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-keys.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-keys.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-keys.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return all the keys or a subset of the keys of an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_keys - Manual" />
<meta name="twitter:description" content="Return all the keys or a subset of the keys of an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_keys - Manual" />
<meta itemprop="description" content="Return all the keys or a subset of the keys of an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return all the keys or a subset of the keys of an array" />

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
        <a href="function.array-map.php">
          array_map &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-key-last.php">
          &laquo; array_key_last        </a>
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
            <option value='en/function.array-keys.php' selected="selected">English</option>
            <option value='de/function.array-keys.php'>German</option>
            <option value='es/function.array-keys.php'>Spanish</option>
            <option value='fr/function.array-keys.php'>French</option>
            <option value='it/function.array-keys.php'>Italian</option>
            <option value='ja/function.array-keys.php'>Japanese</option>
            <option value='pt_BR/function.array-keys.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-keys.php'>Russian</option>
            <option value='tr/function.array-keys.php'>Turkish</option>
            <option value='uk/function.array-keys.php'>Ukrainian</option>
            <option value='zh/function.array-keys.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-keys" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_keys</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_keys</span> &mdash; <span class="dc-title">Return all the keys or a subset of the keys of an array</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.array-keys-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_keys</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <div class="methodsynopsis dc-description"><span class="methodname"><strong>array_keys</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$filter_value</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$strict</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_keys()</strong></span> returns the keys, numeric and
   string, from the <code class="parameter">array</code>.
  </p>
  <p class="para">
   If a <code class="parameter">filter_value</code> is specified,
   then only the keys for that value are returned. Otherwise, all
   the keys from the <code class="parameter">array</code> are returned.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-keys-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       An array containing keys to return.
      </p>
     </dd>
    
    
     <dt><code class="parameter">filter_value</code></dt>
     <dd>
      <p class="para">
       If specified, then only keys containing this value are returned.
      </p>
     </dd>
    
    
     <dt><code class="parameter">strict</code></dt>
     <dd>
      <p class="para">
       Determines if strict comparison (===) should be used during the search.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-keys-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of all the keys in <code class="parameter">array</code>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-keys-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5244">
    <p><strong>Example #1 <span class="function"><strong>array_keys()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$array </span><span style="color: #007700">= array(</span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #DD0000">"color" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"red"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">, </span><span style="color: #DD0000">"blue"</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$array </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"color" </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"blue"</span><span style="color: #007700">, </span><span style="color: #DD0000">"red"</span><span style="color: #007700">, </span><span style="color: #DD0000">"green"</span><span style="color: #007700">),<br />               </span><span style="color: #DD0000">"size"  </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"small"</span><span style="color: #007700">, </span><span style="color: #DD0000">"medium"</span><span style="color: #007700">, </span><span style="color: #DD0000">"large"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_keys</span><span style="color: #007700">(</span><span style="color: #0000BB">$array</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; 0
    [1] =&gt; color
)
Array
(
    [0] =&gt; 0
    [1] =&gt; 3
    [2] =&gt; 4
)
Array
(
    [0] =&gt; color
    [1] =&gt; size
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-keys-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-values.php" class="function" rel="rdfs-seeAlso">array_values()</a> - Return all the values of an array</span></li>
    <li><span class="function"><a href="function.array-combine.php" class="function" rel="rdfs-seeAlso">array_combine()</a> - Creates an array by using one array for keys and another for its values</span></li>
    <li><span class="function"><a href="function.array-key-exists.php" class="function" rel="rdfs-seeAlso">array_key_exists()</a> - Checks if the given key or index exists in the array</span></li>
    <li><span class="function"><a href="function.array-search.php" class="function" rel="rdfs-seeAlso">array_search()</a> - Searches the array for a given value and returns the first corresponding key if successful</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-keys.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-keys%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-keys&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-keys.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="105578">  <div class="votes">
    <div id="Vu105578">
    <a href="/manual/vote-note.php?id=105578&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105578">
    <a href="/manual/vote-note.php?id=105578&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105578" title="74% like this...">
    147
    </div>
  </div>
  <a href="#105578" class="name">
  <strong class="user"><em>pat dot leblanc at gmail dot com</em></strong></a><a class="genanchor" href="#105578"> &para;</a><div class="date" title="2011-08-29 02:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105578">
<div class="phpcode"><code><span class="html">It's worth noting that if you have keys that are long integer, such as '329462291595', they will be considered as such on a 64bits system, but will be of type string on a 32 bits system.<br /><br />for example:<br /><span class="default">&lt;?php <br /><br />$importantKeys </span><span class="keyword">= array(</span><span class="string">'329462291595' </span><span class="keyword">=&gt;</span><span class="default">null</span><span class="keyword">, </span><span class="string">'ZZ291595' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">);<br /><br />foreach(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$importantKeys</span><span class="keyword">) as </span><span class="default">$key</span><span class="keyword">){<br />    echo </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />will return on a 64 bits system:<br /><span class="default">&lt;?php <br />    integer<br />    string<br />?&gt;<br /></span><br />but on a 32 bits system:<br /><span class="default">&lt;?php <br />    string<br />    string<br />?&gt;<br /></span><br />I hope it will save someone the huge headache I had :)</span></code></div>
  </div>
 </div>
  <div class="note" id="59892">  <div class="votes">
    <div id="Vu59892">
    <a href="/manual/vote-note.php?id=59892&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59892">
    <a href="/manual/vote-note.php?id=59892&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59892" title="65% like this...">
    62
    </div>
  </div>
  <a href="#59892" class="name">
  <strong class="user"><em>Sven (bitcetera.com)</em></strong></a><a class="genanchor" href="#59892"> &para;</a><div class="date" title="2005-12-19 06:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59892">
<div class="phpcode"><code><span class="html">Here's how to get the first key, the last key, the first value or the last value of a (hash) array without explicitly copying nor altering the original array:<br /><br /><span class="default">&lt;?php<br />  $array </span><span class="keyword">= array(</span><span class="string">'first'</span><span class="keyword">=&gt;</span><span class="string">'111'</span><span class="keyword">, </span><span class="string">'second'</span><span class="keyword">=&gt;</span><span class="string">'222'</span><span class="keyword">, </span><span class="string">'third'</span><span class="keyword">=&gt;</span><span class="string">'333'</span><span class="keyword">);<br /><br />  </span><span class="comment">// get the first key: returns 'first'<br />  </span><span class="keyword">print </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /><br />  </span><span class="comment">// get the last key: returns 'third'<br />  </span><span class="keyword">print </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /><br />  </span><span class="comment">// get the first value: returns '111'<br />  </span><span class="keyword">print </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /><br />  </span><span class="comment">// get the last value: returns '333'<br />  </span><span class="keyword">print </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114584">  <div class="votes">
    <div id="Vu114584">
    <a href="/manual/vote-note.php?id=114584&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114584">
    <a href="/manual/vote-note.php?id=114584&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114584" title="68% like this...">
    28
    </div>
  </div>
  <a href="#114584" class="name">
  <strong class="user"><em>Ian (maxianos at hotmail dot com)</em></strong></a><a class="genanchor" href="#114584"> &para;</a><div class="date" title="2014-03-09 03:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114584">
<div class="phpcode"><code><span class="html">There's a lot of multidimensional array_keys function out there, but each of them only merges all the keys in one flat array.<br /><br />Here's a way to find all the keys from a multidimensional  array while keeping the array structure. An optional MAXIMUM DEPTH parameter can be set for testing purpose in case of very large arrays.<br /><br />NOTE: If the sub element isn't an array, it will be ignore.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_keys_recursive</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">, </span><span class="default">$MAXDEPTH </span><span class="keyword">= </span><span class="default">INF</span><span class="keyword">, </span><span class="default">$depth </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$arrayKeys </span><span class="keyword">= array()){<br />       if(</span><span class="default">$depth </span><span class="keyword">&lt; </span><span class="default">$MAXDEPTH</span><span class="keyword">){<br />            </span><span class="default">$depth</span><span class="keyword">++;<br />            </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">);<br />            foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">){<br />                if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])){<br />                    </span><span class="default">$arrayKeys</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">array_keys_recursive</span><span class="keyword">(</span><span class="default">$myArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">], </span><span class="default">$MAXDEPTH</span><span class="keyword">, </span><span class="default">$depth</span><span class="keyword">);<br />                }<br />            }<br />        }<br /><br />        return </span><span class="default">$arrayKeys</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />EXAMPLE:<br />input:<br />array(<br />    'Player' =&gt; array(<br />        'id' =&gt; '4',<br />        'state' =&gt; 'active',<br />    ),<br />    'LevelSimulation' =&gt; array(<br />        'id' =&gt; '1',<br />        'simulation_id' =&gt; '1',<br />        'level_id' =&gt; '1',<br />        'Level' =&gt; array(<br />            'id' =&gt; '1',<br />            'city_id' =&gt; '8',<br />            'City' =&gt; array(<br />                'id' =&gt; '8',<br />                'class' =&gt; 'home',<br />            )<br />        )<br />    ),<br />    'User' =&gt; array(<br />        'id' =&gt; '48',<br />        'gender' =&gt; 'M',<br />        'group' =&gt; 'user',<br />        'username' =&gt; 'Hello'<br />    )<br />)<br /><br />output:<br />array(<br />    'Player' =&gt; array(),<br />    'LevelSimulation' =&gt; array(<br />        'Level' =&gt; array(<br />            'City' =&gt; array()<br />        )<br />    ),<br />    'User' =&gt; array()<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="113688">  <div class="votes">
    <div id="Vu113688">
    <a href="/manual/vote-note.php?id=113688&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113688">
    <a href="/manual/vote-note.php?id=113688&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113688" title="70% like this...">
    18
    </div>
  </div>
  <a href="#113688" class="name">
  <strong class="user"><em>zammit dot andrew at gmail dot com</em></strong></a><a class="genanchor" href="#113688"> &para;</a><div class="date" title="2013-11-16 04:06"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113688">
<div class="phpcode"><code><span class="html">If an array is empty (but defined), or the $search_value is not found in the array, an empty array is returned (not false, null, or -1). This may seem intuitive, especially given the documentation says an array is returned, but I needed to sanity test to be sure:<br /><br /><span class="default">&lt;?php<br /><br />$emptyArray </span><span class="keyword">= array();<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$emptyArray</span><span class="keyword">,</span><span class="default">99</span><span class="keyword">)); </span><span class="comment">// array (size=0) \ empty<br /><br /></span><span class="default">$filledArray </span><span class="keyword">= array(</span><span class="default">11</span><span class="keyword">,</span><span class="default">22</span><span class="keyword">,</span><span class="default">33</span><span class="keyword">,</span><span class="default">42</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$filledArray</span><span class="keyword">,</span><span class="default">99</span><span class="keyword">)); </span><span class="comment">// array (size=0) \ empty<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118829">  <div class="votes">
    <div id="Vu118829">
    <a href="/manual/vote-note.php?id=118829&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118829">
    <a href="/manual/vote-note.php?id=118829&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118829" title="71% like this...">
    6
    </div>
  </div>
  <a href="#118829" class="name">
  <strong class="user"><em>Robert C.</em></strong></a><a class="genanchor" href="#118829"> &para;</a><div class="date" title="2016-02-12 02:22"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118829">
<div class="phpcode"><code><span class="html">Keys from multi dimensional array to simple array<br /><br />Want to traverse an multi dimensional array and get the keys back in a single dimensional array? This will do the trick:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">public function </span><span class="default">array_walk_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$parentKey </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, &amp;</span><span class="default">$flattened_array </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br />            return </span><span class="default">$array</span><span class="keyword">;<br />        <br />        foreach( </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">) {<br />            </span><span class="default">$flattenedKeysArray</span><span class="keyword">[] = </span><span class="default">$key</span><span class="keyword">;<br />            <br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">))<br />                </span><span class="default">array_walk_keys</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">, </span><span class="default">$flattenedKeysArray</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$flattenedKeysArray</span><span class="keyword">;<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116985">  <div class="votes">
    <div id="Vu116985">
    <a href="/manual/vote-note.php?id=116985&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116985">
    <a href="/manual/vote-note.php?id=116985&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116985" title="68% like this...">
    15
    </div>
  </div>
  <a href="#116985" class="name">
  <strong class="user"><em>Paul Hirsch</em></strong></a><a class="genanchor" href="#116985"> &para;</a><div class="date" title="2015-03-30 04:31"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116985">
<div class="phpcode"><code><span class="html">It is worth noting that array_keys does not maintain the data-type of the keys when mapping them to a new array.  This created an issue with in_array and doing  a lookup on characters from a string.  NOTE:  my lookup $array has a full map of numbers and characters - upper and lower - to do an simple faux encryption with.<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(<br />     </span><span class="string">'e' </span><span class="keyword">=&gt; </span><span class="string">'ieio'<br />    </span><span class="keyword">,</span><span class="string">'1' </span><span class="keyword">=&gt; </span><span class="string">'one'<br />    </span><span class="keyword">,</span><span class="string">'2' </span><span class="keyword">=&gt; </span><span class="string">'two'<br />    </span><span class="keyword">,</span><span class="string">'0' </span><span class="keyword">=&gt; </span><span class="string">'zero'<br /></span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">);<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'1e0'</span><span class="keyword">;<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />    if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">],</span><span class="default">$keys</span><span class="keyword">,</span><span class="string">'strict'</span><span class="keyword">)) echo </span><span class="string">'dude '</span><span class="keyword">;<br />    else echo </span><span class="string">'sweet '</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br />array (size=4)<br />  'e' =&gt; string 'ieio' (length=4)<br />  1 =&gt; string 'one' (length=3)<br />  2 =&gt; string 'two' (length=3)<br />  0 =&gt; string 'zero' (length=4)<br /><br />array (size=4)<br />  0 =&gt; string 'e' (length=1)<br />  1 =&gt; int 1<br />  2 =&gt; int 2<br />  3 =&gt; int 0<br /><br />sweet dude sweet <br /><br />----  <br />expected to see:<br />dude dude dude</span></code></div>
  </div>
 </div>
  <div class="note" id="113521">  <div class="votes">
    <div id="Vu113521">
    <a href="/manual/vote-note.php?id=113521&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113521">
    <a href="/manual/vote-note.php?id=113521&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113521" title="68% like this...">
    16
    </div>
  </div>
  <a href="#113521" class="name">
  <strong class="user"><em>phpnet at holodyn dot com</em></strong></a><a class="genanchor" href="#113521"> &para;</a><div class="date" title="2013-10-24 05:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113521">
<div class="phpcode"><code><span class="html">Since 5.4 STRICT standards dictate that you cannot wrap array_keys in a function like array_shift that attempts to reference the array.  <br /><br />Invalid:<br />echo array_shift( array_keys( array('a' =&gt; 'apple') ) );<br /><br />Valid:<br />$keys = array_keys( array('a' =&gt; 'apple') );<br />echo array_shift( $keys );<br /><br />But Wait! Since PHP (currently) allows you to break a reference by wrapping a variable in parentheses, you can currently use:<br /><br />echo array_shift( ( array_keys( array('a' =&gt; 'apple') ) ) );<br /><br />However I would expect in time the PHP team will modify the rules of parentheses.</span></code></div>
  </div>
 </div>
  <div class="note" id="128810">  <div class="votes">
    <div id="Vu128810">
    <a href="/manual/vote-note.php?id=128810&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128810">
    <a href="/manual/vote-note.php?id=128810&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128810" title="66% like this...">
    1
    </div>
  </div>
  <a href="#128810" class="name">
  <strong class="user"><em>vittorh at outlook dot com</em></strong></a><a class="genanchor" href="#128810"> &para;</a><div class="date" title="2023-08-17 08:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128810">
<div class="phpcode"><code><span class="html">Hello friends<br /><br />Guys in the array_keys function manual - <a href="https://www.php.net/manual/pt_BR/function.array-keys.php" rel="nofollow" target="_blank">https://www.php.net/manual/pt_BR/function.array-keys.php</a><br /><br />it is described that in the second search parameter " $filter_value " is defined in mixed type, however in php 7.4 to version 8.1 when passing a $filter_value of type array, the function without returning false ( empty array )<br /><br />Exemple : <br /><br />$array = ['a' =&gt; 1, 'b' =&gt; 2];<br /><br />var_dump(array_keys($array,array('a','b'))); // return array(0) { }<br />var_dump(array_keys($array,array('a','b'))); // return array(0) { }<br />var_dump(array_keys($array,'a')); // return array(0) { }<br /><br />Debugging the code, I believe that the description of the $filter_value parameter is confusing, as it is understood that the value of the key in the array has to be the specified value and not the content of the key</span></code></div>
  </div>
 </div>
  <div class="note" id="62042">  <div class="votes">
    <div id="Vu62042">
    <a href="/manual/vote-note.php?id=62042&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62042">
    <a href="/manual/vote-note.php?id=62042&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62042" title="66% like this...">
    6
    </div>
  </div>
  <a href="#62042" class="name">
  <strong class="user"><em>jochem</em></strong></a><a class="genanchor" href="#62042"> &para;</a><div class="date" title="2006-02-17 04:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62042">
<div class="phpcode"><code><span class="html">might be worth noting in the docs that not all associative (string) keys are a like, output of the follow bit of code demonstrates - might be a handy introduction to automatic typecasting in php for some people (and save a few headaches):
<br />
<br /><span class="default">&lt;?php
<br />$r </span><span class="keyword">= array(</span><span class="string">"0"</span><span class="keyword">=&gt;</span><span class="string">"0"</span><span class="keyword">,</span><span class="string">"1"</span><span class="keyword">=&gt;</span><span class="string">"1"</span><span class="keyword">,</span><span class="string">"" </span><span class="keyword">=&gt;</span><span class="string">"2"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">=&gt;</span><span class="string">"3"</span><span class="keyword">);
<br />echo </span><span class="string">'how php sees this array: array("0"=&gt;"0","1"=&gt;"1","" =&gt;"2"," "=&gt;"3")'</span><span class="keyword">,</span><span class="string">"\n-----------\n"</span><span class="keyword">;
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">); </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">); </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);
<br />echo </span><span class="string">"\n-----------\n"</span><span class="keyword">,</span><span class="string">'var_dump("0","1",""," ") = '</span><span class="keyword">,</span><span class="string">"\n-----------\n"</span><span class="keyword">;
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="string">"0"</span><span class="keyword">,</span><span class="string">"1"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />OUTPUTS:
<br />
<br />how php sees this array: array("0"=&gt;"0","1"=&gt;"1","" =&gt;"2"," "=&gt;"3")
<br />-----------
<br />array(4) {
<br />  [0]=&gt;
<br />  string(1) "0"
<br />  [1]=&gt;
<br />  string(1) "1"
<br />  [""]=&gt;
<br />  string(1) "2"
<br />  [" "]=&gt;
<br />  string(1) "3"
<br />}
<br />Array
<br />(
<br />    [0] =&gt; 0
<br />    [1] =&gt; 1
<br />    [] =&gt; 2
<br />    [ ] =&gt; 3
<br />)
<br />array (
<br />  0 =&gt; '0',
<br />  1 =&gt; '1',
<br />  '' =&gt; '2',
<br />  ' ' =&gt; '3',
<br />)
<br />-----------
<br />var_dump("0","1",""," ") =
<br />-----------
<br />string(1) "0"
<br />string(1) "1"
<br />string(0) ""
<br />string(1) " "</span></code></div>
  </div>
 </div>
  <div class="note" id="119202">  <div class="votes">
    <div id="Vu119202">
    <a href="/manual/vote-note.php?id=119202&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119202">
    <a href="/manual/vote-note.php?id=119202&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119202" title="64% like this...">
    4
    </div>
  </div>
  <a href="#119202" class="name">
  <strong class="user"><em>ayyappan dot ashok at gmail dot com</em></strong></a><a class="genanchor" href="#119202"> &para;</a><div class="date" title="2016-04-19 06:18"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119202">
<div class="phpcode"><code><span class="html">Post By  Sven (59892) has to be changed<br /><br />$array = array('first'=&gt;'111', 'second'=&gt;'222', 'third'=&gt;'333');<br /><br />$rarray = array_keys($array);<br /><br />print array_shift($rarray); // first<br /><br />print array_pop($rarray); //thrid<br /><br />print array_shift($rarray); //second<br /><br />print array_pop($rarray); // no result<br /><br />Code below is not valid from 5.4.0 <br /><br />print array_shift(array_keys($array)); Throws Strict Standards Error<br /><br />Sven code works fine till 5.3.29. From 5.4.0  the standards have been changed and results too differ.<br /><br />Note :<br />Strict Standards :  Only variables should be passed by reference<br /><br />Please have look of the code in different versions<br /><br /><a href="http://sandbox.onlinephpfunctions.com/code/24b5fddf14b635f1e37db69a7edffc2cbbed55e1" rel="nofollow" target="_blank">http://sandbox.onlinephpfunctions.com/code/24b5fddf14b635f1e37db69a7edffc2cbbed55e1</a><br /><br /><a href="http://sandbox.onlinephpfunctions.com/code/f695e8f81e906b4f062b66cf9b3b83b6b620464c" rel="nofollow" target="_blank">http://sandbox.onlinephpfunctions.com/code/f695e8f81e906b4f062b66cf9b3b83b6b620464c</a></span></code></div>
  </div>
 </div>
  <div class="note" id="105890">  <div class="votes">
    <div id="Vu105890">
    <a href="/manual/vote-note.php?id=105890&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105890">
    <a href="/manual/vote-note.php?id=105890&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105890" title="62% like this...">
    13
    </div>
  </div>
  <a href="#105890" class="name">
  <strong class="user"><em>el dot quick at gmail dot com</em></strong></a><a class="genanchor" href="#105890"> &para;</a><div class="date" title="2011-09-23 08:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105890">
<div class="phpcode"><code><span class="html">Sorry for my english...
<br />
<br />I wrote a function to get keys of arrays recursivelly...
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">recursive_keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$search_value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">){
<br />
<br />        </span><span class="default">$output </span><span class="keyword">= (</span><span class="default">$search_value </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$search_value</span><span class="keyword">) : </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)) ;
<br />        foreach(</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$sub</span><span class="keyword">){
<br />            if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$sub</span><span class="keyword">)){
<br />                </span><span class="default">$output </span><span class="keyword">= (</span><span class="default">$search_value </span><span class="keyword">!== </span><span class="default">null </span><span class="keyword">? </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">recursive_keys</span><span class="keyword">(</span><span class="default">$sub</span><span class="keyword">, </span><span class="default">$search_value</span><span class="keyword">)) : </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">, </span><span class="default">recursive_keys</span><span class="keyword">(</span><span class="default">$sub</span><span class="keyword">))) ;
<br />            }
<br />        }
<br />        return </span><span class="default">$output </span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;
<br /></span>
<br />I hope it will be usefull
<br />
<br />Regards</span></code></div>
  </div>
 </div>
  <div class="note" id="88428">  <div class="votes">
    <div id="Vu88428">
    <a href="/manual/vote-note.php?id=88428&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88428">
    <a href="/manual/vote-note.php?id=88428&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88428" title="61% like this...">
    7
    </div>
  </div>
  <a href="#88428" class="name">
  <strong class="user"><em>ferrerna at gmail dot com</em></strong></a><a class="genanchor" href="#88428"> &para;</a><div class="date" title="2009-01-23 09:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88428">
<div class="phpcode"><code><span class="html">Here's a function I needed to collapse an array, in my case from a database query.  It takes an array that contains key-value pairs and returns an array where they are actually the key and value.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_collapse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) {<br />    </span><span class="default">$carr </span><span class="keyword">= array();<br />    while (</span><span class="default">$el </span><span class="keyword">= </span><span class="default">current</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)) {<br />        </span><span class="default">$carr</span><span class="keyword">[ </span><span class="default">$el</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">] ] = </span><span class="default">$el</span><span class="keyword">[</span><span class="default">$y</span><span class="keyword">];<br />        </span><span class="default">next</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$carr</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example usage (pseudo-database code):<br /><br /><span class="default">&lt;?php<br /><br />$query </span><span class="keyword">= </span><span class="default">db_query</span><span class="keyword">(</span><span class="string">'SELECT name, value FROM properties'</span><span class="keyword">);<br /><br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">db_returnAll</span><span class="keyword">(</span><span class="default">$query</span><span class="keyword">);<br /><br /></span><span class="comment">/* This will return an array like so:<br /><br />[<br />   ['name' -&gt; 'color', 'value' -&gt; 'blue'],<br />   ['name' -&gt; 'style', 'value' -&gt; 'wide-format'],<br />   ['name' -&gt; 'weight', 'value' -&gt; 3.6],<br />   ['name' -&gt; 'name', 'value' -&gt; 'Waerdthing']<br />]<br /><br />*/<br /><br /></span><span class="default">$propArr </span><span class="keyword">= </span><span class="default">array_collapse</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="string">'name'</span><span class="keyword">, </span><span class="string">'value'</span><span class="keyword">);<br /><br /></span><span class="comment">/* Now this array looks like:<br /><br />[<br />   ['color' -&gt; 'blue'],<br />   ['style' -&gt; 'wide-format'],<br />   ['weight' -&gt; 3.6],<br />   ['name' -&gt; 'Waerdthing'],<br /><br />*/<br /><br /></span><span class="default">?&gt;<br /></span><br />I found this handy for using with json_encode and am using it for my project <a href="http://squidby.com" rel="nofollow" target="_blank">http://squidby.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="29165">  <div class="votes">
    <div id="Vu29165">
    <a href="/manual/vote-note.php?id=29165&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29165">
    <a href="/manual/vote-note.php?id=29165&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29165" title="62% like this...">
    4
    </div>
  </div>
  <a href="#29165" class="name">
  <strong class="user"><em>rodrigo at NOSPAM dot dhweb dot com dot br</em></strong></a><a class="genanchor" href="#29165"> &para;</a><div class="date" title="2003-02-04 04:39"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29165">
<div class="phpcode"><code><span class="html">[Editor's note: For a complete solution to the printing of complex structures or hashes, see the PEAR::Var_Dump package: <a href="http://pear.php.net/package-info.php?pacid=103" rel="nofollow" target="_blank">http://pear.php.net/package-info.php?pacid=103</a> , use "pear install Var_Dump" to get it]
<br />
<br />This function will print all the keys of a multidimensional array in html tables.
<br />It will help to debug when you don?t have control of depths.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">show_keys</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">){
<br />
<br />   echo </span><span class="string">"&lt;table width='100%' border='1' bordercolor='#6699CC' cellspacing='0' cellpadding='5'&gt;&lt;tr valign='top'&gt;"</span><span class="keyword">;
<br />
<br />      foreach (</span><span class="default">$ar </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v </span><span class="keyword">) {
<br />
<br />         echo </span><span class="string">"&lt;td align='center' bgcolor='#EEEEEE'&gt;
<br />           &lt;table border='2' cellpadding='3'&gt;&lt;tr&gt;&lt;td bgcolor='#FFFFFF'&gt;&lt;font face='verdana' size='1'&gt;
<br />              " </span><span class="keyword">. </span><span class="default">$k </span><span class="keyword">. </span><span class="string">"
<br />           &lt;/font&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;"</span><span class="keyword">;
<br />
<br />           if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">])) {
<br />              </span><span class="default">show_keys </span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);
<br />         }
<br />
<br />         echo </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />
<br />      }
<br />
<br />   echo </span><span class="string">"&lt;/tr&gt;&lt;/table&gt;"</span><span class="keyword">;
<br />
<br />}
<br />
<br /></span><span class="comment">// Multidimensional array -&gt;
<br /></span><span class="default">$arvore </span><span class="keyword">= array();
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'1'</span><span class="keyword">] = array();
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'1'</span><span class="keyword">][</span><span class="string">'1.1'</span><span class="keyword">] = array(</span><span class="string">'1.1.1'</span><span class="keyword">, </span><span class="string">'1.1.2'</span><span class="keyword">, </span><span class="string">'1.1.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'1'</span><span class="keyword">][</span><span class="string">'1.2'</span><span class="keyword">] = array(</span><span class="string">'1.2.1'</span><span class="keyword">, </span><span class="string">'1.2.2'</span><span class="keyword">, </span><span class="string">'1.2.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'1'</span><span class="keyword">][</span><span class="string">'1.3'</span><span class="keyword">] = array(</span><span class="string">'1.3.1'</span><span class="keyword">, </span><span class="string">'1.3.2'</span><span class="keyword">, </span><span class="string">'1.3.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'2'</span><span class="keyword">] = array();
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'2'</span><span class="keyword">][</span><span class="string">'2.1'</span><span class="keyword">] = array(</span><span class="string">'2.1.1'</span><span class="keyword">, </span><span class="string">'2.1.2'</span><span class="keyword">, </span><span class="string">'2.1.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'2'</span><span class="keyword">][</span><span class="string">'2.2'</span><span class="keyword">] = array(</span><span class="string">'2.2.1'</span><span class="keyword">, </span><span class="string">'2.2.2'</span><span class="keyword">, </span><span class="string">'2.2.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'2'</span><span class="keyword">][</span><span class="string">'2.3'</span><span class="keyword">] = array(</span><span class="string">'2.3.1'</span><span class="keyword">, </span><span class="string">'2.3.2'</span><span class="keyword">, </span><span class="string">'2.3.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'3'</span><span class="keyword">] = array();
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'3'</span><span class="keyword">][</span><span class="string">'3.1'</span><span class="keyword">] = array(</span><span class="string">'3.1.1'</span><span class="keyword">, </span><span class="string">'3.1.2'</span><span class="keyword">, </span><span class="string">'3.1.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'3'</span><span class="keyword">][</span><span class="string">'3.2'</span><span class="keyword">] = array(</span><span class="string">'3.2.1'</span><span class="keyword">, </span><span class="string">'3.2.2'</span><span class="keyword">, </span><span class="string">'3.2.3'</span><span class="keyword">);
<br /></span><span class="default">$arvore</span><span class="keyword">[</span><span class="string">'3'</span><span class="keyword">][</span><span class="string">'3.3'</span><span class="keyword">] = array(</span><span class="string">'3.3.1'</span><span class="keyword">, </span><span class="string">'3.3.2'</span><span class="keyword">=&gt;array(</span><span class="string">'3.3.2.1'</span><span class="keyword">, </span><span class="string">'3.3.2.2'</span><span class="keyword">), </span><span class="string">'3.3.3'</span><span class="keyword">);
<br /></span><span class="comment">// &lt;-
<br />
<br /></span><span class="default">show_keys</span><span class="keyword">(</span><span class="default">$arvore</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="35178">  <div class="votes">
    <div id="Vu35178">
    <a href="/manual/vote-note.php?id=35178&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35178">
    <a href="/manual/vote-note.php?id=35178&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35178" title="61% like this...">
    6
    </div>
  </div>
  <a href="#35178" class="name">
  <strong class="user"><em>sip at email dot ee</em></strong></a><a class="genanchor" href="#35178"> &para;</a><div class="date" title="2003-08-22 05:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35178">
<div class="phpcode"><code><span class="html">Note, that using array_key_exists() is rather inefficient. The overhead associated with calling a function makes it slower, than using isset($array[$key]), instead of array_key_exists($key, $array)<br />using isset() is usually about 1.3 times faster, according to my tests.</span></code></div>
  </div>
 </div>
  <div class="note" id="55820">  <div class="votes">
    <div id="Vu55820">
    <a href="/manual/vote-note.php?id=55820&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55820">
    <a href="/manual/vote-note.php?id=55820&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55820" title="60% like this...">
    7
    </div>
  </div>
  <a href="#55820" class="name">
  <strong class="user"><em>ru dot dy at gmx dot net</em></strong></a><a class="genanchor" href="#55820"> &para;</a><div class="date" title="2005-08-14 09:20"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55820">
<div class="phpcode"><code><span class="html">I was looking for a function that simply unset a variable amout of values from a one-dimensional array by key. I ended up with this (returns the array itself if no further parameter than the array is given, false with no params - does not change the source array) <br /><br />usage: array_remove(array $input [, mixed key ...])<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">array_remove</span><span class="keyword">() {<br />    if (</span><span class="default">$stack </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">()) {<br />      </span><span class="default">$input </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$stack</span><span class="keyword">);<br />      foreach (</span><span class="default">$stack </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />        unset(</span><span class="default">$input</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />      }<br />      return </span><span class="default">$input</span><span class="keyword">;<br />    }<br />    return </span><span class="default">false</span><span class="keyword">;<br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br />Test:<br /><br /><span class="default">&lt;?php<br />  $a </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">=&gt;</span><span class="string">'fun'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">=&gt;</span><span class="default">3.14</span><span class="keyword">, </span><span class="string">'sub'</span><span class="keyword">=&gt; array(</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'3'</span><span class="keyword">), </span><span class="string">'d'</span><span class="keyword">=&gt;</span><span class="string">'what'</span><span class="keyword">, </span><span class="string">'e' </span><span class="keyword">=&gt; </span><span class="string">'xample'</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="string">'x'</span><span class="keyword">);<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_remove</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="string">'sub'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Output: <br /><br />Array<br />(<br />    [a] =&gt; fun<br />    [b] =&gt; 3.14<br />    [sub] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />            [2] =&gt; 3<br />        )<br /><br />    [d] =&gt; what<br />    [e] =&gt; xample<br />    [5] =&gt; x<br />)<br />Array<br />(<br />    [a] =&gt; fun<br />    [e] =&gt; xample<br />)<br /><br />Hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="124741">  <div class="votes">
    <div id="Vu124741">
    <a href="/manual/vote-note.php?id=124741&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124741">
    <a href="/manual/vote-note.php?id=124741&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124741" title="58% like this...">
    3
    </div>
  </div>
  <a href="#124741" class="name">
  <strong class="user"><em>Md. Abutaleb</em></strong></a><a class="genanchor" href="#124741"> &para;</a><div class="date" title="2020-02-20 06:19"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124741">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php  <br /></span><span class="comment"># array_keys() also return the key if it's boolean but the boolean will return as 1 or 0. It will return empty if get NULL value as key. Consider the following array: <br /><br /></span><span class="default">$a </span><span class="keyword">= array(<br />      </span><span class="string">"first_index" </span><span class="keyword">=&gt; </span><span class="string">"This is the first element"</span><span class="keyword">, <br />      </span><span class="default">true </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, <br />      </span><span class="default">false </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, <br />      </span><span class="default">4.5 </span><span class="keyword">=&gt; </span><span class="string">'Something'</span><span class="keyword">, <br />      </span><span class="string">"08" </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">, <br />      </span><span class="string">"8" </span><span class="keyword">=&gt; </span><span class="default">6</span><span class="keyword">, <br />      </span><span class="default">NULL </span><span class="keyword">=&gt; </span><span class="string">'Null key'<br />    </span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">));<br /><br />Array<br />(<br />    [</span><span class="default">0</span><span class="keyword">] =&gt; </span><span class="default">first_index<br />    </span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="default">1<br />    </span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="default">0<br />    </span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="default">4<br />    </span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] =&gt; </span><span class="default">08<br />    </span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] =&gt; </span><span class="default">8<br />    </span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] =&gt; <br />)<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120719">  <div class="votes">
    <div id="Vu120719">
    <a href="/manual/vote-note.php?id=120719&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120719">
    <a href="/manual/vote-note.php?id=120719&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120719" title="58% like this...">
    3
    </div>
  </div>
  <a href="#120719" class="name">
  <strong class="user"><em>enrique dot balleste at gmail dot com</em></strong></a><a class="genanchor" href="#120719"> &para;</a><div class="date" title="2017-03-01 09:33"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120719">
<div class="phpcode"><code><span class="html">A nice little trick to get all of the keys who have some type of value:<br /><br />$keys = array_keys($array, !null);</span></code></div>
  </div>
 </div>
  <div class="note" id="107141">  <div class="votes">
    <div id="Vu107141">
    <a href="/manual/vote-note.php?id=107141&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107141">
    <a href="/manual/vote-note.php?id=107141&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107141" title="58% like this...">
    4
    </div>
  </div>
  <a href="#107141" class="name">
  <strong class="user"><em>izzecold at live dot de</em></strong></a><a class="genanchor" href="#107141"> &para;</a><div class="date" title="2012-01-10 09:21"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107141">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/* A Function created by myself for checking multiple array keys<br />For Example u got an Array like $_SESSION and u wanna know if the keys 'user','pass','email' and 'type' exists.<br /><br />*/<br /><br /></span><span class="keyword">function </span><span class="default">mKeyChecker</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">,</span><span class="default">$keys</span><span class="keyword">=array()) {<br />    if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {<br />        </span><span class="default">$valid_keys </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        foreach(</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />            if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$arr</span><span class="keyword">)) </span><span class="default">$valid_keys</span><span class="keyword">++;<br />        }<br />        if(</span><span class="default">$valid_keys </span><span class="keyword">== </span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    } else if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">) {<br />        if(</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$arr</span><span class="keyword">)) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        } else {<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    } else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="comment">// Execution Example<br /><br /></span><span class="keyword">if(</span><span class="default">mKeyChecker</span><span class="keyword">(</span><span class="default">$_SESSION</span><span class="keyword">,array(</span><span class="string">'id'</span><span class="keyword">,</span><span class="string">'user'</span><span class="keyword">,</span><span class="string">'email'</span><span class="keyword">,</span><span class="string">'type'</span><span class="keyword">))) {<br />    echo </span><span class="string">"is!"</span><span class="keyword">;<br />} else {<br />    echo </span><span class="string">"not!"</span><span class="keyword">;    <br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78275">  <div class="votes">
    <div id="Vu78275">
    <a href="/manual/vote-note.php?id=78275&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78275">
    <a href="/manual/vote-note.php?id=78275&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78275" title="58% like this...">
    4
    </div>
  </div>
  <a href="#78275" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#78275"> &para;</a><div class="date" title="2007-10-04 06:43"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78275">
<div class="phpcode"><code><span class="html">An alternative to RQuadling at GMail dot com's array_remove() function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_remove</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$strict</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />{<br />    return </span><span class="default">array_diff_key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$strict</span><span class="keyword">)));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59539">  <div class="votes">
    <div id="Vu59539">
    <a href="/manual/vote-note.php?id=59539&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59539">
    <a href="/manual/vote-note.php?id=59539&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59539" title="57% like this...">
    7
    </div>
  </div>
  <a href="#59539" class="name">
  <strong class="user"><em>vesely at tana dot it</em></strong></a><a class="genanchor" href="#59539"> &para;</a><div class="date" title="2005-12-09 01:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59539">
<div class="phpcode"><code><span class="html">The position of an element.<br /><br />One can apply array_keys twice to get the position of an element from its key. (This is the reverse of the function by cristianDOTzuddas.) E.g., the following may output "yes, we have bananas at position 0".<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array(</span><span class="string">"banana" </span><span class="keyword">=&gt; </span><span class="string">"yellow"</span><span class="keyword">, </span><span class="string">"apple" </span><span class="keyword">= </span><span class="string">"red"</span><span class="keyword">);<br /></span><span class="default">$k </span><span class="keyword">= </span><span class="default">get_some_fruit</span><span class="keyword">();<br />if (isset(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]))<br />{<br />   list(</span><span class="default">$pos</span><span class="keyword">) = </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">), </span><span class="default">$k</span><span class="keyword">);<br />   print </span><span class="string">"yes, we have </span><span class="keyword">{</span><span class="default">$k</span><span class="keyword">}</span><span class="string">s at position </span><span class="default">$pos</span><span class="string">\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Not amazingly efficient, but I see no better alternative.</span></code></div>
  </div>
 </div>
  <div class="note" id="73992">  <div class="votes">
    <div id="Vu73992">
    <a href="/manual/vote-note.php?id=73992&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73992">
    <a href="/manual/vote-note.php?id=73992&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73992" title="55% like this...">
    4
    </div>
  </div>
  <a href="#73992" class="name">
  <strong class="user"><em>creator at mindcreations dot com</em></strong></a><a class="genanchor" href="#73992"> &para;</a><div class="date" title="2007-03-20 02:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73992">
<div class="phpcode"><code><span class="html">This function will extract keys from a multidimensional array
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">multiarray_keys</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">) {
<br />            
<br />    foreach(</span><span class="default">$ar </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {
<br />        </span><span class="default">$keys</span><span class="keyword">[] = </span><span class="default">$k</span><span class="keyword">;
<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]))
<br />            </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">multiarray_keys</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]));
<br />    }
<br />    return </span><span class="default">$keys</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example code:
<br />
<br /><span class="default">&lt;?php
<br />$array </span><span class="keyword">= array(</span><span class="string">"color" </span><span class="keyword">=&gt; array(</span><span class="string">"1stcolor" </span><span class="keyword">=&gt; </span><span class="string">"blue"</span><span class="keyword">, </span><span class="string">"2ndcolor" </span><span class="keyword">=&gt; </span><span class="string">"red"</span><span class="keyword">, </span><span class="string">"3rdcolor" </span><span class="keyword">=&gt; </span><span class="string">"green"</span><span class="keyword">),
<br />               </span><span class="string">"size"  </span><span class="keyword">=&gt; array(</span><span class="string">"small"</span><span class="keyword">, </span><span class="string">"medium"</span><span class="keyword">, </span><span class="string">"large"</span><span class="keyword">));
<br />
<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br />
<br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">multiarray_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">));
<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Example output:
<br />
<br />Array
<br />(
<br />    [color] =&gt; Array
<br />        (
<br />            [1stcolor] =&gt; blue
<br />            [2ndcolor] =&gt; red
<br />            [3rdcolor] =&gt; green
<br />        )
<br />
<br />    [size] =&gt; Array
<br />        (
<br />            [0] =&gt; small
<br />            [1] =&gt; medium
<br />            [2] =&gt; large
<br />        )
<br />
<br />)
<br />
<br />Array
<br />(
<br />    [0] =&gt; color
<br />    [1] =&gt; 1stcolor
<br />    [2] =&gt; 2ndcolor
<br />    [3] =&gt; 3rdcolor
<br />    [4] =&gt; size
<br />    [5] =&gt; 0
<br />    [6] =&gt; 1
<br />    [7] =&gt; 2
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="106973">  <div class="votes">
    <div id="Vu106973">
    <a href="/manual/vote-note.php?id=106973&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106973">
    <a href="/manual/vote-note.php?id=106973&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106973" title="52% like this...">
    1
    </div>
  </div>
  <a href="#106973" class="name">
  <strong class="user"><em>craig1231 at hotmail dot com</em></strong></a><a class="genanchor" href="#106973"> &para;</a><div class="date" title="2011-12-22 03:41"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106973">
<div class="phpcode"><code><span class="html">A needed a function to find the keys which contain part of a string, not equalling a string...<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_keys_contain</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$search_value</span><span class="keyword">, </span><span class="default">$strict </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        </span><span class="default">$tmpkeys </span><span class="keyword">= array();<br /><br />        </span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br /><br />        foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">)<br />        {<br />            if (</span><span class="default">$strict </span><span class="keyword">&amp;&amp; </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$search_value</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">)<br />                </span><span class="default">$tmpkeys</span><span class="keyword">[] = </span><span class="default">$k</span><span class="keyword">;<br />            elseif (!</span><span class="default">$strict </span><span class="keyword">&amp;&amp; </span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">, </span><span class="default">$search_value</span><span class="keyword">) !== </span><span class="default">FALSE</span><span class="keyword">)<br />                </span><span class="default">$tmpkeys</span><span class="keyword">[] = </span><span class="default">$k</span><span class="keyword">;<br />        }<br /><br />        return </span><span class="default">$tmpkeys</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55311">  <div class="votes">
    <div id="Vu55311">
    <a href="/manual/vote-note.php?id=55311&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55311">
    <a href="/manual/vote-note.php?id=55311&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55311" title="52% like this...">
    1
    </div>
  </div>
  <a href="#55311" class="name">
  <strong class="user"><em>webmaster [at] baz-x [dot] at</em></strong></a><a class="genanchor" href="#55311"> &para;</a><div class="date" title="2005-07-29 03:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55311">
<div class="phpcode"><code><span class="html">I was looking for a function that deletes either integer keys or string keys (needed for my caching).<br />As I didn't find a function I came up with my own solution.<br />I didn't find the propiest function to post to so I will post it here, hope you find it useful.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_extract</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$extract_type </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">)<br />{<br />    foreach ( </span><span class="default">$array </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value </span><span class="keyword">)<br />    {<br />        if ( </span><span class="default">$extract_type </span><span class="keyword">== </span><span class="default">1 </span><span class="keyword">&amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) )<br />        {<br />            </span><span class="comment">// delete string keys<br />            </span><span class="keyword">unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />        elseif ( </span><span class="default">$extract_type </span><span class="keyword">== </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">) )<br />        {<br />            </span><span class="comment">// delete integer keys<br />            </span><span class="keyword">unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />        }<br />    }<br /><br />    return </span><span class="default">$array</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />You can of course define constants to have a nicer look, I have chosen these: EXTR_INT = 1; EXTR_STRING = 2<br />EXTR_INT will return an array where keys are only integer while<br />EXTR_STRING will return an array where keys are only string<br /><br />Have fun with it.</span></code></div>
  </div>
 </div>
  <div class="note" id="129853">  <div class="votes">
    <div id="Vu129853">
    <a href="/manual/vote-note.php?id=129853&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129853">
    <a href="/manual/vote-note.php?id=129853&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129853" title="no votes...">
    0
    </div>
  </div>
  <a href="#129853" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#129853"> &para;</a><div class="date" title="2024-11-13 04:22"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129853">
<div class="phpcode"><code><span class="html">PHP arrays are weird. So the result of<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [<br />    </span><span class="string">'element0'</span><span class="keyword">,<br />    </span><span class="string">'element1' </span><span class="keyword">=&gt; </span><span class="string">'Hello World'</span><span class="keyword">,<br />    </span><span class="string">'element2' </span><span class="keyword">=&gt; </span><span class="default">42</span><span class="keyword">,<br />    </span><span class="string">'element3' </span><span class="keyword">=&gt; [ </span><span class="string">'aaa'</span><span class="keyword">, </span><span class="string">'bbb' </span><span class="keyword">],<br />];<br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) );<br /></span><span class="default">?&gt;<br /></span>is a surprising though correct<br />Array<br />(<br />    [0] =&gt; 0<br />    [1] =&gt; element1<br />    [2] =&gt; element2<br />    [3] =&gt; element3<br />)<br /><br />Arrays in php are really ordered key value pairs where if a value is missing it will become a value with a number as key. To get the intuitive first dimension of an array use a map with function to determine if a key is in fact an index.<br />This<br /><br /><span class="default">&lt;?php<br />$array_first </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(<br />    fn (</span><span class="default">$key</span><span class="keyword">)=&gt;<br />        </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)?</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]:</span><span class="default">$key<br />    </span><span class="keyword">,<br />    </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)<br />);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array_first</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />will show<br /><br />Array<br />(<br />    [0] =&gt; element0<br />    [1] =&gt; element1<br />    [2] =&gt; element2<br />    [3] =&gt; element3<br />)<br /><br />However in a niche case <br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= [<br />    </span><span class="string">'element0'</span><span class="keyword">,<br />    </span><span class="string">'element1' </span><span class="keyword">=&gt; </span><span class="string">'Hello World'</span><span class="keyword">,<br />    </span><span class="string">'element2' </span><span class="keyword">=&gt; </span><span class="default">42</span><span class="keyword">,<br />    </span><span class="string">'element3' </span><span class="keyword">=&gt; [ </span><span class="string">'aaa'</span><span class="keyword">, </span><span class="string">'bbb' </span><span class="keyword">],<br />    </span><span class="default">12 </span><span class="keyword">=&gt; </span><span class="string">'I\'m a field, not a key'<br /></span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span>this won't work of course and output<br />Array<br />(<br />    [0] =&gt; element0<br />    [1] =&gt; element1<br />    [2] =&gt; element2<br />    [3] =&gt; element3<br />    [4] =&gt; I'm a field, not a key<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="107797">  <div class="votes">
    <div id="Vu107797">
    <a href="/manual/vote-note.php?id=107797&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107797">
    <a href="/manual/vote-note.php?id=107797&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107797" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107797" class="name">
  <strong class="user"><em>qeremy [atta] gmail [dotta] com</em></strong></a><a class="genanchor" href="#107797"> &para;</a><div class="date" title="2012-03-05 05:50"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107797">
<div class="phpcode"><code><span class="html">Simple ways to prefixing arrays;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_keys_prefix</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$pref </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">) {<br />    </span><span class="default">$rarr </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$rarr</span><span class="keyword">[</span><span class="default">$pref</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />    }<br />    return </span><span class="default">$rarr</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">array_keys_prefix_multi</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$pref </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">) {<br />    </span><span class="default">$rarr </span><span class="keyword">= array();<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />        </span><span class="default">$rarr</span><span class="keyword">[] = </span><span class="default">array_keys_prefix</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$pref</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$rarr</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// $a = array("foo" =&gt; "FOO", "bar" =&gt; "BAR", "baz" =&gt; "BAZ"); // or<br /></span><span class="default">$a </span><span class="keyword">= array(</span><span class="string">"foo" </span><span class="keyword">=&gt; </span><span class="string">"FOO"</span><span class="keyword">, </span><span class="string">"bar" </span><span class="keyword">=&gt; </span><span class="string">"BAR"</span><span class="keyword">, </span><span class="string">"baz" </span><span class="keyword">=&gt; array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_keys_prefix</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">"my_"</span><span class="keyword">));<br /><br /></span><span class="comment">// db fetch...<br /></span><span class="default">$products </span><span class="keyword">= array(<br />    array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Foo"</span><span class="keyword">),<br />    array(</span><span class="string">"id" </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">"name" </span><span class="keyword">=&gt; </span><span class="string">"Bar"</span><span class="keyword">)<br />);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_keys_prefix_multi</span><span class="keyword">(</span><span class="default">$products</span><span class="keyword">, </span><span class="string">"product_"</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [my_foo] =&gt; FOO<br />    [my_bar] =&gt; BAR<br />    [my_baz] =&gt; Array<br />        (<br />            [0] =&gt; 1<br />            [1] =&gt; 2<br />            [2] =&gt; 3<br />        )<br /><br />)<br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [product_id] =&gt; 1<br />            [product_name] =&gt; Foo<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [product_id] =&gt; 2<br />            [product_name] =&gt; Bar<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="26796">  <div class="votes">
    <div id="Vu26796">
    <a href="/manual/vote-note.php?id=26796&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26796">
    <a href="/manual/vote-note.php?id=26796&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26796" title="50% like this...">
    0
    </div>
  </div>
  <a href="#26796" class="name">
  <strong class="user"><em>glennh at webadept dot net</em></strong></a><a class="genanchor" href="#26796"> &para;</a><div class="date" title="2002-11-13 04:03"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26796">
<div class="phpcode"><code><span class="html">All the cool notes are gone from the site. 
<br />
<br />Here's an example of how to get all the variables passed to your program using the method on this page. This prints them out so you can see what you are doing. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">while (list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each
<br /></span><span class="keyword">(${</span><span class="string">"HTTP_"</span><span class="keyword">.</span><span class="default">$REQUEST_METHOD</span><span class="keyword">.</span><span class="string">"_VARS"</span><span class="keyword">}))
<br />{
<br />        echo </span><span class="default">$key</span><span class="keyword">.</span><span class="string">" = "</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">" "</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84659">  <div class="votes">
    <div id="Vu84659">
    <a href="/manual/vote-note.php?id=84659&amp;page=function.array-keys&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84659">
    <a href="/manual/vote-note.php?id=84659&amp;page=function.array-keys&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84659" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#84659" class="name">
  <strong class="user"><em>neil at 11 out of 10</em></strong></a><a class="genanchor" href="#84659"> &para;</a><div class="date" title="2008-07-24 12:10"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84659">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/*<br /> * This function will return the keys of elements in the <br /> * haystack where the value is found in array needle<br /> */<br /><br /></span><span class="keyword">function </span><span class="default">array_value_intersect_keys</span><span class="keyword">( </span><span class="default">$array_haystack</span><span class="keyword">, </span><span class="default">$array_needle </span><span class="keyword">){<br />    </span><span class="default">$intersected </span><span class="keyword">= </span><span class="default">array_intersect</span><span class="keyword">( </span><span class="default">$array_haystack</span><span class="keyword">, </span><span class="default">$array_needle </span><span class="keyword">);<br />    return </span><span class="default">array_keys</span><span class="keyword">( </span><span class="default">$intersected </span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// usage <br /><br /></span><span class="default">$array_haystack </span><span class="keyword">= array( </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">, </span><span class="string">'red' </span><span class="keyword">=&gt; </span><span class="default">8</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="default">14 </span><span class="keyword">);<br /><br /></span><span class="default">$array_needle </span><span class="keyword">= array( </span><span class="default">2</span><span class="keyword">, </span><span class="default">8 </span><span class="keyword">);<br /><br /></span><span class="default">$array_keys_of_intersecting_values </span><span class="keyword">= </span><span class="default">array_value_intersect_keys</span><span class="keyword">( </span><span class="default">$array_haystack</span><span class="keyword">, </span><span class="default">$array_needle </span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$array_keys_of_intersecting_values </span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />returns<br />Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; red<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-keys&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-keys.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
