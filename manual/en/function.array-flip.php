<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_flip - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-flip.php">
 <link rel="shorturl" href="https://www.php.net/array-flip">
 <link rel="alternate" href="https://www.php.net/array-flip" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-find-key.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-intersect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-flip.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-flip.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-flip.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-flip.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-flip.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-flip.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-flip.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-flip.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-flip.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-flip.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-flip.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Exchanges all keys with their associated values in an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_flip - Manual" />
<meta name="twitter:description" content="Exchanges all keys with their associated values in an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_flip - Manual" />
<meta itemprop="description" content="Exchanges all keys with their associated values in an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Exchanges all keys with their associated values in an array" />

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
        <a href="function.array-intersect.php">
          array_intersect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-find-key.php">
          &laquo; array_find_key        </a>
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
            <option value='en/function.array-flip.php' selected="selected">English</option>
            <option value='de/function.array-flip.php'>German</option>
            <option value='es/function.array-flip.php'>Spanish</option>
            <option value='fr/function.array-flip.php'>French</option>
            <option value='it/function.array-flip.php'>Italian</option>
            <option value='ja/function.array-flip.php'>Japanese</option>
            <option value='pt_BR/function.array-flip.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-flip.php'>Russian</option>
            <option value='tr/function.array-flip.php'>Turkish</option>
            <option value='uk/function.array-flip.php'>Ukrainian</option>
            <option value='zh/function.array-flip.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-flip" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_flip</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_flip</span> &mdash; <span class="dc-title">Exchanges all keys with their associated values in an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-flip-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_flip</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_flip()</strong></span> returns an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> in flip
   order, i.e. keys from <code class="parameter">array</code> become values and values
   from <code class="parameter">array</code> become keys.
  </p>
  <p class="para">
   Note that the values of <code class="parameter">array</code> need to be valid
   keys, i.e. they need to be either <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> or
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. A warning will be emitted if a value has the wrong
   type, and the key/value pair in question <em>will not be included
   in the result</em>.
  </p>
  <p class="para">
   If a value has several occurrences, the latest key will be
   used as its value, and all others will be lost.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.array-flip-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       An array of key/value pairs to be flipped.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.array-flip-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the flipped array.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.array-flip-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5233">
    <p><strong>Example #1 <span class="function"><strong>array_flip()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"oranges"</span><span style="color: #007700">, </span><span style="color: #DD0000">"apples"</span><span style="color: #007700">, </span><span style="color: #DD0000">"pears"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$flipped </span><span style="color: #007700">= </span><span style="color: #0000BB">array_flip</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$flipped</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [oranges] =&gt; 0
    [apples] =&gt; 1
    [pears] =&gt; 2
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5234">
    <p><strong>Example #2 <span class="function"><strong>array_flip()</strong></span> example : collision</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"b" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"c" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$flipped </span><span style="color: #007700">= </span><span style="color: #0000BB">array_flip</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$flipped</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [1] =&gt; b
    [2] =&gt; c
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.array-flip-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-values.php" class="function" rel="rdfs-seeAlso">array_values()</a> - Return all the values of an array</span></li>
    <li><span class="function"><a href="function.array-keys.php" class="function" rel="rdfs-seeAlso">array_keys()</a> - Return all the keys or a subset of the keys of an array</span></li>
    <li><span class="function"><a href="function.array-reverse.php" class="function" rel="rdfs-seeAlso">array_reverse()</a> - Return an array with elements in reverse order</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-flip.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-flip%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-flip&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-flip.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106895">  <div class="votes">
    <div id="Vu106895">
    <a href="/manual/vote-note.php?id=106895&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106895">
    <a href="/manual/vote-note.php?id=106895&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106895" title="80% like this...">
    160
    </div>
  </div>
  <a href="#106895" class="name">
  <strong class="user"><em>Final</em></strong></a><a class="genanchor" href="#106895"> &para;</a><div class="date" title="2011-12-16 04:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106895">
<div class="phpcode"><code><span class="html">I find this function vey useful when you have a big array and you want to know if a given value is in the array. in_array in fact becomes quite slow in such a case, but you can flip the big array and then use isset to obtain the same result in a much faster way.</span></code></div>
  </div>
 </div>
  <div class="note" id="112069">  <div class="votes">
    <div id="Vu112069">
    <a href="/manual/vote-note.php?id=112069&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112069">
    <a href="/manual/vote-note.php?id=112069&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112069" title="76% like this...">
    42
    </div>
  </div>
  <a href="#112069" class="name">
  <strong class="user"><em>Tony H</em></strong></a><a class="genanchor" href="#112069"> &para;</a><div class="date" title="2013-04-29 02:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112069">
<div class="phpcode"><code><span class="html">This function is useful when parsing a CSV file with a heading column, but the columns might vary in order or presence:<br /><br /><span class="default">&lt;?php<br /><br />$f </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"file.csv"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /><br /></span><span class="comment">/* Take the first line (the header) into an array, then flip it<br />so that the keys are the column name, and values are the<br />column index. */<br /></span><span class="default">$cols </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">));<br /><br />while (</span><span class="default">$line </span><span class="keyword">= </span><span class="default">fgetcsv</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">))<br />{<br />    </span><span class="comment">// Now we can reference CSV columns like so:<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">[</span><span class="default">$cols</span><span class="keyword">[</span><span class="string">'OrderStatus'</span><span class="keyword">]];<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />I find this better than referencing the numerical array index.</span></code></div>
  </div>
 </div>
  <div class="note" id="120731">  <div class="votes">
    <div id="Vu120731">
    <a href="/manual/vote-note.php?id=120731&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120731">
    <a href="/manual/vote-note.php?id=120731&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120731" title="80% like this...">
    13
    </div>
  </div>
  <a href="#120731" class="name">
  <strong class="user"><em>Bob Ray</em></strong></a><a class="genanchor" href="#120731"> &para;</a><div class="date" title="2017-03-03 04:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120731">
<div class="phpcode"><code><span class="html">array_flip will remove duplicate values in the original array when you flip either an associative or numeric array. As you might expect it's the earlier of two duplicates that is lost:<br /><br /><span class="default">&lt;?php<br />    $a </span><span class="keyword">= array(</span><span class="string">'one'</span><span class="keyword">, </span><span class="string">'two'</span><span class="keyword">, </span><span class="string">'one'</span><span class="keyword">); <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); <br /><br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); <br />    </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br /><br />array(3) {<br />  [0]  =&gt; string(3) "one"<br />  [1]  =&gt;  string(3) "two"<br />  [2]  =&gt;  string(3) "one"<br />}<br /><br />array(2) {<br />  'one' =&gt; int(2)<br />  'two' =&gt; int(1)<br />}<br /><br />This may be good or bad, depending on what you want, but no error is thrown.</span></code></div>
  </div>
 </div>
  <div class="note" id="116597">  <div class="votes">
    <div id="Vu116597">
    <a href="/manual/vote-note.php?id=116597&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116597">
    <a href="/manual/vote-note.php?id=116597&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116597" title="69% like this...">
    16
    </div>
  </div>
  <a href="#116597" class="name">
  <strong class="user"><em>Prabhas Gupte</em></strong></a><a class="genanchor" href="#116597"> &para;</a><div class="date" title="2015-01-27 06:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116597">
<div class="phpcode"><code><span class="html">array_flip() does not retain the data type of values, when converting them into keys. :( <br /><br /><span class="default">&lt;?php                                                                                                                                                                                                           <br />$arr </span><span class="keyword">= array(</span><span class="string">'one' </span><span class="keyword">=&gt; </span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="string">'3'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This code outputs this:<br />array(3) {<br />  ["one"]=&gt;<br />  string(1) "1"<br />  ["two"]=&gt;<br />  string(1) "2"<br />  ["three"]=&gt;<br />  string(1) "3"<br />}<br />array(3) {<br />  [1]=&gt;<br />  string(3) "one"<br />  [2]=&gt;<br />  string(3) "two"<br />  [3]=&gt;<br />  string(5) "three"<br />}<br /><br />It is valid expectation that string values "1", "2" and "3" would become string keys "1", "2" and "3".</span></code></div>
  </div>
 </div>
  <div class="note" id="74754">  <div class="votes">
    <div id="Vu74754">
    <a href="/manual/vote-note.php?id=74754&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74754">
    <a href="/manual/vote-note.php?id=74754&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74754" title="65% like this...">
    12
    </div>
  </div>
  <a href="#74754" class="name">
  <strong class="user"><em>pinkgothic at gmail dot com</em></strong></a><a class="genanchor" href="#74754"> &para;</a><div class="date" title="2007-04-26 01:37"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74754">
<div class="phpcode"><code><span class="html">In case anyone is wondering how array_flip() treats empty arrays:<br /><br /><span class="default">&lt;?php<br />print_r</span><span class="keyword">(</span><span class="default">array_flip</span><span class="keyword">(array()));<br /></span><span class="default">?&gt;<br /></span><br />results in:<br /><br />Array<br />(<br />)<br /><br />I wanted to know if it would return false and/or even chuck out an error if there were no key-value pairs to flip, despite being non-intuitive if that were the case. But (of course) everything works as expected. Just a head's up for the paranoid.</span></code></div>
  </div>
 </div>
  <div class="note" id="107097">  <div class="votes">
    <div id="Vu107097">
    <a href="/manual/vote-note.php?id=107097&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107097">
    <a href="/manual/vote-note.php?id=107097&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107097" title="59% like this...">
    5
    </div>
  </div>
  <a href="#107097" class="name">
  <strong class="user"><em>kjensen at iaff106 dot com</em></strong></a><a class="genanchor" href="#107097"> &para;</a><div class="date" title="2012-01-06 10:23"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107097">
<div class="phpcode"><code><span class="html">I needed a way to flip a multidimensional array and came up with this function to accomplish the task.  I hope it helps someone else.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">multi_array_flip</span><span class="keyword">(</span><span class="default">$arrayIn</span><span class="keyword">, </span><span class="default">$DesiredKey</span><span class="keyword">, </span><span class="default">$DesiredKey2</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">, </span><span class="default">$OrigKeyName</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) { 
<br /></span><span class="default">$ArrayOut</span><span class="keyword">=array();
<br />foreach (</span><span class="default">$arrayIn </span><span class="keyword">as </span><span class="default">$Key</span><span class="keyword">=&gt;</span><span class="default">$Value</span><span class="keyword">) 
<br />    {
<br />        </span><span class="comment">// If there is an original key that need to be preserved as data in the new array then do that if requested ($OrigKeyName=true)
<br />        </span><span class="keyword">if (</span><span class="default">$OrigKeyName</span><span class="keyword">) </span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$OrigKeyName</span><span class="keyword">]=</span><span class="default">$Key</span><span class="keyword">;
<br />        </span><span class="comment">// Require a string value in the data part of the array that is keyed to $DesiredKey
<br />        </span><span class="keyword">if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$DesiredKey</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="comment">// If $DesiredKey2 was specified then assume a multidimensional array is desired and build it
<br />        </span><span class="keyword">if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$DesiredKey2</span><span class="keyword">)) 
<br />        {
<br />            </span><span class="comment">// Require a string value in the data part of the array that is keyed to $DesiredKey2
<br />            </span><span class="keyword">if (!</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$DesiredKey2</span><span class="keyword">])) return </span><span class="default">false</span><span class="keyword">;
<br />
<br />            </span><span class="comment">// Build NEW multidimensional array
<br />            </span><span class="default">$ArrayOut</span><span class="keyword">[</span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$DesiredKey</span><span class="keyword">]][</span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$DesiredKey2</span><span class="keyword">]]=</span><span class="default">$Value</span><span class="keyword">;
<br />        }
<br />
<br />            </span><span class="comment">// Build NEW single dimention array
<br />        </span><span class="keyword">else </span><span class="default">$ArrayOut</span><span class="keyword">[</span><span class="default">$Value</span><span class="keyword">[</span><span class="default">$DesiredKey</span><span class="keyword">]][]=</span><span class="default">$Value</span><span class="keyword">;
<br />    }
<br />return </span><span class="default">$ArrayOut</span><span class="keyword">;
<br />}</span><span class="comment">//end multi_array_flip
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="47640">  <div class="votes">
    <div id="Vu47640">
    <a href="/manual/vote-note.php?id=47640&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47640">
    <a href="/manual/vote-note.php?id=47640&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47640" title="60% like this...">
    6
    </div>
  </div>
  <a href="#47640" class="name">
  <strong class="user"><em>snaury at narod dot ru</em></strong></a><a class="genanchor" href="#47640"> &para;</a><div class="date" title="2004-11-23 11:21"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47640">
<div class="phpcode"><code><span class="html">When you do array_flip, it takes the last key accurence for each value, but be aware that keys order in flipped array will be in the order, values were first seen in original array. For example, array:<br /><br />    [1] =&gt; 1<br />    [2] =&gt; 2<br />    [3] =&gt; 3<br />    [4] =&gt; 3<br />    [5] =&gt; 2<br />    [6] =&gt; 1<br />    [7] =&gt; 1<br />    [8] =&gt; 3<br />    [9] =&gt; 3<br /><br />After flipping will become:<br />(first seen value -&gt; first key)<br /><br />    [1] =&gt; 7<br />    [2] =&gt; 5<br />    [3] =&gt; 9<br /><br />And not anything like this:<br />(last seen value -&gt; last key)<br /><br />    [2] =&gt; 5<br />    [1] =&gt; 7<br />    [3] =&gt; 9<br /><br />In my application I needed to find five most recently commented entries. I had a sorted comment-id =&gt; entry-id array, and what popped in my mind is just do array_flip($array), and I thought I now would have last five entries in the array as most recently commented entry =&gt; comment pairs. In fact it wasn't (see above, as it is the order of values used). To achieve what I need I came up with the following (in case someone will need to do something like that):<br /><br />First, we need a way to flip an array, taking the first encountered key for each of values in array. You can do it with:<br /><br />  $array = array_flip(array_unique($array));<br /><br />Well, and to achieve that "last comments" effect, just do:<br /><br />  $array = array_reverse($array, true);<br />  $array = array_flip(array_unique($array));<br />  $array = array_reverse($array, true);<br /><br />In the example from the very beginning array will become:<br /><br />    [2] =&gt; 5<br />    [1] =&gt; 7<br />    [3] =&gt; 9<br /><br />Just what I (and maybe you?) need. =^_^=</span></code></div>
  </div>
 </div>
  <div class="note" id="121809">  <div class="votes">
    <div id="Vu121809">
    <a href="/manual/vote-note.php?id=121809&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121809">
    <a href="/manual/vote-note.php?id=121809&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121809" title="100% like this...">
    2
    </div>
  </div>
  <a href="#121809" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#121809"> &para;</a><div class="date" title="2017-10-30 03:19"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121809">
<div class="phpcode"><code><span class="html">Don't use this function for filtering or searching an array - PHP already has functions for exactly those purposes. If nothing else, array_flip will trash the array's elements if they're anything other than integers or non-decimal-integer strings.</span></code></div>
  </div>
 </div>
  <div class="note" id="108184">  <div class="votes">
    <div id="Vu108184">
    <a href="/manual/vote-note.php?id=108184&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108184">
    <a href="/manual/vote-note.php?id=108184&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108184" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#108184" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#108184"> &para;</a><div class="date" title="2012-04-05 10:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108184">
<div class="phpcode"><code><span class="html">Similarly, if you want the last value without affecting the pointer, you can do:<br /><br /><span class="default">&lt;?php<br /><br />$array </span><span class="keyword">= array(</span><span class="string">"one"</span><span class="keyword">,</span><span class="string">"two"</span><span class="keyword">,</span><span class="string">"three"</span><span class="keyword">);<br /><br />echo </span><span class="default">next</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// "two"<br /><br /></span><span class="default">$last </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)));<br /><br />echo </span><span class="default">$last</span><span class="keyword">;  </span><span class="comment">// "three"<br /><br /></span><span class="keyword">echo </span><span class="default">current</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// "two"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123209">  <div class="votes">
    <div id="Vu123209">
    <a href="/manual/vote-note.php?id=123209&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123209">
    <a href="/manual/vote-note.php?id=123209&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123209" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#123209" class="name">
  <strong class="user"><em>dash</em></strong></a><a class="genanchor" href="#123209"> &para;</a><div class="date" title="2018-10-08 03:27"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123209">
<div class="phpcode"><code><span class="html">Notice : array_flip can turn string into integer</span></code></div>
  </div>
 </div>
  <div class="note" id="89724">  <div class="votes">
    <div id="Vu89724">
    <a href="/manual/vote-note.php?id=89724&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89724">
    <a href="/manual/vote-note.php?id=89724&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89724" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#89724" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#89724"> &para;</a><div class="date" title="2009-03-20 02:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89724">
<div class="phpcode"><code><span class="html">Finding the longest string in an array?<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">longest_string_in_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)<br />{<br />    </span><span class="default">$mapping </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strlen'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">));<br />    return </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$mapping</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">$mapping</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Differences are obvious: returns an array of [i]all[/i] of the longest strings, instead of just picking one arbitrarily. Doesn't do the stripslashing or magic stuff because that's another job for for another function.</span></code></div>
  </div>
 </div>
  <div class="note" id="89436">  <div class="votes">
    <div id="Vu89436">
    <a href="/manual/vote-note.php?id=89436&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89436">
    <a href="/manual/vote-note.php?id=89436&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89436" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#89436" class="name">
  <strong class="user"><em>dan at aoindustries dot com</em></strong></a><a class="genanchor" href="#89436"> &para;</a><div class="date" title="2009-03-07 12:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89436">
<div class="phpcode"><code><span class="html">From an algorithmic efficiency standpoint, building an entire array of lengths to then sort to only retrieve the longest value is unnecessary work.  The following should be O(n) instead of O(n log n).  It could also be:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_longest_value</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {
<br />    </span><span class="comment">// Some don't like to initialize, I do
<br />    </span><span class="default">$longest </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;
<br />    </span><span class="default">$longestLen </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;
<br />    foreach (</span><span class="default">$array $value</span><span class="keyword">) {
<br />        </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);
<br />        if(</span><span class="default">$len</span><span class="keyword">&gt;</span><span class="default">$longestLen</span><span class="keyword">) {
<br />            </span><span class="default">$longest </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;
<br />            </span><span class="default">$longestLen </span><span class="keyword">= </span><span class="default">$len</span><span class="keyword">;
<br />        }
<br />    }
<br />    </span><span class="default">$longest </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$longest</span><span class="keyword">);
<br />    if (</span><span class="default">get_magic_quotes_gpc</span><span class="keyword">()) { return </span><span class="default">stripslashes</span><span class="keyword">(</span><span class="default">$longest</span><span class="keyword">); }
<br />    return </span><span class="default">$longest</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123224">  <div class="votes">
    <div id="Vu123224">
    <a href="/manual/vote-note.php?id=123224&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123224">
    <a href="/manual/vote-note.php?id=123224&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123224" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#123224" class="name">
  <strong class="user"><em>Ahammar Yassine</em></strong></a><a class="genanchor" href="#123224"> &para;</a><div class="date" title="2018-10-11 06:03"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123224">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />$arr </span><span class="keyword">= array(</span><span class="string">'one' </span><span class="keyword">=&gt; [</span><span class="string">'four' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">], </span><span class="string">'two' </span><span class="keyword">=&gt; </span><span class="string">'2'</span><span class="keyword">, </span><span class="string">'three' </span><span class="keyword">=&gt; </span><span class="string">'3'</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="default">$arr2 </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arr2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The above example will output:<br /><br />array(3) {<br />  ["one"]=&gt;<br />  array(1) {<br />    ["four"]=&gt;<br />    int(4)<br />  }<br />  ["two"]=&gt;<br />  string(1) "2"<br />  ["three"]=&gt;<br />  string(1) "3"<br />}<br /><br />Warning: array_flip(): Can only flip STRING and INTEGER values! in /root/test.php on line 4<br />array(2) {<br />  [2]=&gt;<br />  string(3) "two"<br />  [3]=&gt;<br />  string(5) "three"<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="114477">  <div class="votes">
    <div id="Vu114477">
    <a href="/manual/vote-note.php?id=114477&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114477">
    <a href="/manual/vote-note.php?id=114477&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114477" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#114477" class="name">
  <strong class="user"><em>grimdestripador at hotmail dot com</em></strong></a><a class="genanchor" href="#114477"> &para;</a><div class="date" title="2014-02-25 12:06"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114477">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_flip_into_subarray</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">){<br /></span><span class="default">$output </span><span class="keyword">= array();<br />foreach (</span><span class="default">$input </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$values</span><span class="keyword">){<br />    foreach (</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$output</span><span class="keyword">[</span><span class="default">$value</span><span class="keyword">][] = </span><span class="default">$key</span><span class="keyword">;<br />    }<br />}<br />return </span><span class="default">$output</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126524">  <div class="votes">
    <div id="Vu126524">
    <a href="/manual/vote-note.php?id=126524&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126524">
    <a href="/manual/vote-note.php?id=126524&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126524" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#126524" class="name">
  <strong class="user"><em>mmulej at gmail dot com</em></strong></a><a class="genanchor" href="#126524"> &para;</a><div class="date" title="2021-10-21 01:05"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126524">
<div class="phpcode"><code><span class="html">If you don't want to lose duplicates, and you're ok, with having the values in the flipped array in an array as well, you may use this:<br /><br />PHP 7.4 - ^8<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_flip_safe</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">) : array<br />{<br />    return </span><span class="default">array_reduce</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), function (</span><span class="default">$carry</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$array</span><span class="keyword">) {<br />        </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]] ??= [];<br />        </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]][] = </span><span class="default">$key</span><span class="keyword">;<br />        return </span><span class="default">$carry</span><span class="keyword">;<br />    }, []);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />PHP 7.0 - ^7.3 (Time to upgrade to PHP 8 ^^)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_flip_safe</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">) : array<br />{<br />    return </span><span class="default">array_reduce</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), function (</span><span class="default">$carry</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$array</span><span class="keyword">) {<br />        </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]] = </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]] ?? [];<br />        </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]][] = </span><span class="default">$key</span><span class="keyword">;<br />        return </span><span class="default">$carry</span><span class="keyword">;<br />    }, []);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />PHP 5.4 - ^5.6 (Just don't)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_flip_safe</span><span class="keyword">(array </span><span class="default">$array</span><span class="keyword">)<br />{<br />    return </span><span class="default">array_reduce</span><span class="keyword">(</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">), function (</span><span class="default">$carry</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) use (&amp;</span><span class="default">$array</span><span class="keyword">) {<br />        if (!isset(</span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]])<br />                </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]] = [];<br />        </span><span class="default">$carry</span><span class="keyword">[</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]][] = </span><span class="default">$key</span><span class="keyword">;<br />        return </span><span class="default">$carry</span><span class="keyword">;<br />    }, []);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119253">  <div class="votes">
    <div id="Vu119253">
    <a href="/manual/vote-note.php?id=119253&amp;page=function.array-flip&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119253">
    <a href="/manual/vote-note.php?id=119253&amp;page=function.array-flip&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119253" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#119253" class="name">
  <strong class="user"><em>info at sabastore dot net</em></strong></a><a class="genanchor" href="#119253"> &para;</a><div class="date" title="2016-04-27 08:57"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119253">
<div class="phpcode"><code><span class="html">note :: array_flip is a changer for key and value and a auto unique like array_unique :<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />sabastore<br /> */<br /></span><span class="default">$intArray1 </span><span class="keyword">= array(-</span><span class="default">4</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$intArray1</span><span class="keyword">);<br /></span><span class="default">$intArray1 </span><span class="keyword">= </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$intArray1</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$intArray1</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-flip&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-flip.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
