<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: version_compare - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.version-compare.php">
 <link rel="shorturl" href="https://www.php.net/version-compare">
 <link rel="alternate" href="https://www.php.net/version-compare" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.sys-get-temp-dir.php">
 <link rel="next" href="https://www.php.net/manual/en/function.zend-thread-id.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.version-compare.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.version-compare.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.version-compare.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.version-compare.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.version-compare.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.version-compare.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.version-compare.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.version-compare.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.version-compare.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.version-compare.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.version-compare.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Compares two &quot;PHP-standardized&quot; version number strings" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: version_compare - Manual" />
<meta name="twitter:description" content="Compares two &quot;PHP-standardized&quot; version number strings" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: version_compare - Manual" />
<meta itemprop="description" content="Compares two &quot;PHP-standardized&quot; version number strings" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Compares two &quot;PHP-standardized&quot; version number strings" />

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
        <a href="function.zend-thread-id.php">
          zend_thread_id &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.sys-get-temp-dir.php">
          &laquo; sys_get_temp_dir        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.version-compare.php' selected="selected">English</option>
            <option value='de/function.version-compare.php'>German</option>
            <option value='es/function.version-compare.php'>Spanish</option>
            <option value='fr/function.version-compare.php'>French</option>
            <option value='it/function.version-compare.php'>Italian</option>
            <option value='ja/function.version-compare.php'>Japanese</option>
            <option value='pt_BR/function.version-compare.php'>Brazilian Portuguese</option>
            <option value='ru/function.version-compare.php'>Russian</option>
            <option value='tr/function.version-compare.php'>Turkish</option>
            <option value='uk/function.version-compare.php'>Ukrainian</option>
            <option value='zh/function.version-compare.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.version-compare" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">version_compare</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">version_compare</span> &mdash; <span class="dc-title">Compares two &quot;PHP-standardized&quot; version number strings</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.version-compare-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>version_compare</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$version1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$version2</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$operator</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>version_compare()</strong></span> compares two &quot;PHP-standardized&quot;
   version number strings.
  </p>
  <p class="para">
   The function first replaces <code class="literal">_</code>, <code class="literal">-</code> and
   <code class="literal">+</code> with a dot <code class="literal">.</code> in the version
   strings and also inserts dots <code class="literal">.</code> before and after any
   non number so that for example &#039;4.3.2RC1&#039; becomes &#039;4.3.2.RC.1&#039;. Then it
   compares the parts starting from left to right. If a part contains
   special version strings these are handled in the following order:
   <code class="literal">any string not found in this list</code> &lt; 
   <code class="literal">dev</code> &lt; <code class="literal">alpha</code> =
   <code class="literal">a</code> &lt; <code class="literal">beta</code> =
   <code class="literal">b</code> &lt; <code class="literal">RC</code> =  
   <code class="literal">rc</code> &lt; <code class="literal">#</code> &lt;
   <code class="literal">pl</code> = <code class="literal">p</code>. This way not only versions
   with different levels like &#039;4.1&#039; and &#039;4.1.2&#039; can be compared but also any
   PHP specific version containing development state.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.version-compare-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">version1</code></dt>
     <dd>
      <p class="para">
       First version number.
      </p>
     </dd>
    
    
     <dt><code class="parameter">version2</code></dt>
     <dd>
      <p class="para">
       Second version number.
      </p>
     </dd>
    
    
     <dt><code class="parameter">operator</code></dt>
     <dd>
      <p class="para">
       An optional operator. The possible operators
       are: <code class="literal">&lt;</code>, <code class="literal">lt</code>,
       <code class="literal">&lt;=</code>, <code class="literal">le</code>, <code class="literal">&gt;</code>,
       <code class="literal">gt</code>, <code class="literal">&gt;=</code>, <code class="literal">ge</code>,
       <code class="literal">==</code>, <code class="literal">=</code>, <code class="literal">eq</code>,
       <code class="literal">!=</code>, <code class="literal">&lt;&gt;</code>, <code class="literal">ne</code>
       respectively.
      </p>
      <p class="para">
       This parameter is case-sensitive, values should be lowercase.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.version-compare-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   By default, <span class="function"><strong>version_compare()</strong></span> returns
   <code class="literal">-1</code> if the first version is lower than the second,
   <code class="literal">0</code> if they are equal, and
   <code class="literal">1</code> if the second is lower.
  </p>
  <p class="para">
   When using the optional <code class="parameter">operator</code> argument, the
   function will return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if the relationship is the one specified
   by the operator, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.version-compare-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   The examples below use the <strong><code><a href="reserved.constants.php#constant.php-version">PHP_VERSION</a></code></strong> constant,
   because it contains the value of the PHP version that is executing
   the code.
  </p>
  <p class="para">
   <div class="example" id="example-680">
    <p><strong>Example #1 <span class="function"><strong>version_compare()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_VERSION</span><span style="color: #007700">, </span><span style="color: #DD0000">'7.0.0'</span><span style="color: #007700">) &gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'I am at least PHP version 7.0.0, my version: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_VERSION </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_VERSION</span><span style="color: #007700">, </span><span style="color: #DD0000">'5.3.0'</span><span style="color: #007700">) &gt;= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'I am at least PHP version 5.3.0, my version: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_VERSION </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_VERSION</span><span style="color: #007700">, </span><span style="color: #DD0000">'5.0.0'</span><span style="color: #007700">, </span><span style="color: #DD0000">'&gt;='</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'I am at least PHP version 5.0.0, my version: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_VERSION </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">version_compare</span><span style="color: #007700">(</span><span style="color: #0000BB">PHP_VERSION</span><span style="color: #007700">, </span><span style="color: #DD0000">'5.0.0'</span><span style="color: #007700">, </span><span style="color: #DD0000">'&lt;'</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'I am still PHP 4, my version: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_VERSION </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.version-compare-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <strong><code><a href="reserved.constants.php#constant.php-version">PHP_VERSION</a></code></strong> constant holds current PHP version.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Note that pre-release versions, such as 5.3.0-dev, are considered
    lower than their final release counterparts (like 5.3.0).
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Special version strings such as <code class="literal">alpha</code> and
    <code class="literal">beta</code> are case sensitive. Version strings from arbitrary
    sources that do not adhere to the PHP standard may need to be lowercased
    via <span class="function"><a href="function.strtolower.php" class="function">strtolower()</a></span> before calling
    <span class="function"><strong>version_compare()</strong></span>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.version-compare-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.phpversion.php" class="function" rel="rdfs-seeAlso">phpversion()</a> - Gets the current PHP version</span></li>
    <li><span class="function"><a href="function.php-uname.php" class="function" rel="rdfs-seeAlso">php_uname()</a> - Returns information about the operating system PHP is running on</span></li>
    <li><span class="function"><a href="function.function-exists.php" class="function" rel="rdfs-seeAlso">function_exists()</a> - Return true if the given function has been defined</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/version-compare.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.version-compare%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.version-compare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.version-compare.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43452">  <div class="votes">
    <div id="Vu43452">
    <a href="/manual/vote-note.php?id=43452&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43452">
    <a href="/manual/vote-note.php?id=43452&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43452" title="73% like this...">
    21
    </div>
  </div>
  <a href="#43452" class="name">
  <strong class="user"><em>eric at themepark dot com</em></strong></a><a class="genanchor" href="#43452"> &para;</a><div class="date" title="2004-06-21 09:50"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43452">
<div class="phpcode"><code><span class="html">[editors note]
<br />snipbit fixed after comment from Matt Mullenweg
<br />
<br />--jm
<br />[/editors note]
<br />
<br />so in a nutshell... I believe it works best like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (</span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">phpversion</span><span class="keyword">(), </span><span class="string">"4.3.0"</span><span class="keyword">, </span><span class="string">"&gt;="</span><span class="keyword">)) {
<br />  </span><span class="comment">// you're on 4.3.0 or later
<br /></span><span class="keyword">} else {
<br />  </span><span class="comment">// you're not
<br /></span><span class="keyword">}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109489">  <div class="votes">
    <div id="Vu109489">
    <a href="/manual/vote-note.php?id=109489&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109489">
    <a href="/manual/vote-note.php?id=109489&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109489" title="73% like this...">
    14
    </div>
  </div>
  <a href="#109489" class="name">
  <strong class="user"><em>mindplay.dk</em></strong></a><a class="genanchor" href="#109489"> &para;</a><div class="date" title="2012-07-21 03:10"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109489">
<div class="phpcode"><code><span class="html">This little script can perhaps help you understand version comparison a little better - the output is displayed in the comment at the top. Tweak the list of versions if you need more examples...<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">#      1 lt 1.0<br />#    1.0 lt 1.01<br />#   1.01 eq 1.1<br />#    1.1 lt 1.10<br />#   1.10 gt 1.10b<br />#  1.10b lt 1.10.0<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: text/plain'</span><span class="keyword">);<br /><br /></span><span class="default">$versions </span><span class="keyword">= array(<br />  </span><span class="string">'1'</span><span class="keyword">,<br />  </span><span class="string">'1.0'</span><span class="keyword">,<br />  </span><span class="string">'1.01'</span><span class="keyword">,<br />  </span><span class="string">'1.1'</span><span class="keyword">,<br />  </span><span class="string">'1.10'</span><span class="keyword">,<br />  </span><span class="string">'1.10b'</span><span class="keyword">,<br />  </span><span class="string">'1.10.0'</span><span class="keyword">,<br />);<br /><br /></span><span class="default">$comps </span><span class="keyword">= array(<br /> -</span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'lt'</span><span class="keyword">,<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'eq'</span><span class="keyword">,<br />  </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'gt'<br /></span><span class="keyword">);<br /><br />foreach (</span><span class="default">$versions </span><span class="keyword">as </span><span class="default">$version</span><span class="keyword">) {<br />  if (isset(</span><span class="default">$last</span><span class="keyword">)) {<br />    </span><span class="default">$comp </span><span class="keyword">= </span><span class="default">version_compare</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">, </span><span class="default">$version</span><span class="keyword">);<br />    echo </span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">$last</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">) . </span><span class="string">" </span><span class="keyword">{</span><span class="default">$comps</span><span class="keyword">[</span><span class="default">$comp</span><span class="keyword">]}</span><span class="string"> </span><span class="keyword">{</span><span class="default">$version</span><span class="keyword">}</span><span class="string">\n"</span><span class="keyword">;<br />  }<br />  </span><span class="default">$last </span><span class="keyword">= </span><span class="default">$version</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89416">  <div class="votes">
    <div id="Vu89416">
    <a href="/manual/vote-note.php?id=89416&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89416">
    <a href="/manual/vote-note.php?id=89416&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89416" title="62% like this...">
    9
    </div>
  </div>
  <a href="#89416" class="name">
  <strong class="user"><em>insid0r at yahoo dot com</em></strong></a><a class="genanchor" href="#89416"> &para;</a><div class="date" title="2009-03-06 01:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89416">
<div class="phpcode"><code><span class="html">Since this function considers 1 &lt; 1.0 &lt; 1.0.0, others might find this function useful (which considers 1 == 1.0):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">//Compare two sets of versions, where major/minor/etc. releases are separated by dots.
<br />//Returns 0 if both are equal, 1 if A &gt; B, and -1 if B &lt; A.
<br /></span><span class="keyword">function </span><span class="default">version_compare2</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="string">".0"</span><span class="keyword">)); </span><span class="comment">//Split version into pieces and remove trailing .0
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">, </span><span class="string">".0"</span><span class="keyword">)); </span><span class="comment">//Split version into pieces and remove trailing .0
<br />    </span><span class="keyword">foreach (</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$depth </span><span class="keyword">=&gt; </span><span class="default">$aVal</span><span class="keyword">)
<br />    { </span><span class="comment">//Iterate over each piece of A
<br />        </span><span class="keyword">if (isset(</span><span class="default">$b</span><span class="keyword">[</span><span class="default">$depth</span><span class="keyword">]))
<br />        { </span><span class="comment">//If B matches A to this depth, compare the values
<br />            </span><span class="keyword">if (</span><span class="default">$aVal </span><span class="keyword">&gt; </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$depth</span><span class="keyword">]) return </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//Return A &gt; B
<br />            </span><span class="keyword">else if (</span><span class="default">$aVal </span><span class="keyword">&lt; </span><span class="default">$b</span><span class="keyword">[</span><span class="default">$depth</span><span class="keyword">]) return -</span><span class="default">1</span><span class="keyword">; </span><span class="comment">//Return B &gt; A
<br />            //An equal result is inconclusive at this point
<br />        </span><span class="keyword">}
<br />        else
<br />        { </span><span class="comment">//If B does not match A to this depth, then A comes after B in sort order
<br />            </span><span class="keyword">return </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//so return A &gt; B
<br />        </span><span class="keyword">}
<br />    }
<br />    </span><span class="comment">//At this point, we know that to the depth that A and B extend to, they are equivalent.
<br />    //Either the loop ended because A is shorter than B, or both are equal.
<br />    </span><span class="keyword">return (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">) &lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">)) ? -</span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106715">  <div class="votes">
    <div id="Vu106715">
    <a href="/manual/vote-note.php?id=106715&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106715">
    <a href="/manual/vote-note.php?id=106715&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106715" title="64% like this...">
    4
    </div>
  </div>
  <a href="#106715" class="name">
  <strong class="user"><em>rogier</em></strong></a><a class="genanchor" href="#106715"> &para;</a><div class="date" title="2011-11-30 08:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106715">
<div class="phpcode"><code><span class="html">Please note that supplying an operator that is not listed (e.g. ===), this function returns NULL instead of false.<br /><br />Tested on PHP5.3.0, Win32</span></code></div>
  </div>
 </div>
  <div class="note" id="118230">  <div class="votes">
    <div id="Vu118230">
    <a href="/manual/vote-note.php?id=118230&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118230">
    <a href="/manual/vote-note.php?id=118230&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118230" title="60% like this...">
    2
    </div>
  </div>
  <a href="#118230" class="name">
  <strong class="user"><em>Bob Ray</em></strong></a><a class="genanchor" href="#118230"> &para;</a><div class="date" title="2015-10-29 11:07"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118230">
<div class="phpcode"><code><span class="html">Note that both leading and trailing spaces on your version numbers can break version_compare(). <br /><br />Tested on PHP 5.6.8:<br /> <span class="default">&lt;?php<br /> </span><span class="keyword">echo  </span><span class="string">"\nShould be 0"</span><span class="keyword">;<br />echo </span><span class="string">"\n '1.0.0-pl' vs. '1.0.0-pl'  ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl'</span><span class="keyword">, </span><span class="string">'1.0.0-pl'</span><span class="keyword">);<br />echo </span><span class="string">"\n '1.0.0-pl' vs. ' 1.0.0-pl' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl'</span><span class="keyword">, </span><span class="string">' 1.0.0-pl'</span><span class="keyword">);<br />echo </span><span class="string">"\n ' 1.0.0-pl' vs. '1.0.0-pl' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">' 1.0.0-pl'</span><span class="keyword">, </span><span class="string">'1.0.0-pl'</span><span class="keyword">);<br />echo </span><span class="string">"\n '1.0.0-pl' vs. '1.0.0-pl ' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl'</span><span class="keyword">, </span><span class="string">'1.0.0-pl '</span><span class="keyword">);<br />echo </span><span class="string">"\n '1.0.0-pl ' vs. '1.0.0-pl' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl '</span><span class="keyword">, </span><span class="string">'1.0.0-pl'</span><span class="keyword">);<br /><br />echo </span><span class="string">"\n\nShould be 1"</span><span class="keyword">;<br />echo </span><span class="string">"\n '1.1.1-pl' vs. '1.0.0-pl'  ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.1.1-pl'</span><span class="keyword">, </span><span class="string">'1.0.0-pl'</span><span class="keyword">);<br />echo </span><span class="string">"\n ' 1.1.1-pl' vs. '1.0.0-pl' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">' 1.1.1-pl'</span><span class="keyword">, </span><span class="string">'1.0.0-pl'</span><span class="keyword">);<br /><br />echo </span><span class="string">"\n\nShould be -1"</span><span class="keyword">;<br />echo </span><span class="string">"\n '1.0.0-pl' vs. '1.1.1-pl'  ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl'</span><span class="keyword">, </span><span class="string">'1.1.1-pl'</span><span class="keyword">);<br />echo </span><span class="string">"\n '1.0.0-pl' vs. ' 1.1.1-pl' ---&gt; " </span><span class="keyword">. </span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'1.0.0-pl'</span><span class="keyword">, </span><span class="string">' 1.1.1-pl'</span><span class="keyword">);<br /><br />    </span><span class="comment">/* Output <br />Should be 0<br /> '1.0.0-pl' vs. '1.0.0-pl'  ---&gt; 0<br /> '1.0.0-pl' vs. ' 1.0.0-pl' ---&gt; 1<br /> ' 1.0.0-pl' vs. '1.0.0-pl' ---&gt; -1<br /> '1.0.0-pl' vs. '1.0.0-pl ' ---&gt; 1<br /> '1.0.0-pl ' vs. '1.0.0-pl' ---&gt; -1<br /><br />Should be 1<br /> '1.1.1-pl' vs. '1.0.0-pl'  ---&gt; 1<br /> ' 1.1.1-pl' vs. '1.0.0-pl' ---&gt; -1<br /><br />Should be -1<br /> '1.0.0-pl' vs. '1.1.1-pl'  ---&gt; -1<br /> '1.0.0-pl' vs. ' 1.1.1-pl' ---&gt; 1<br />    */</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75656">  <div class="votes">
    <div id="Vu75656">
    <a href="/manual/vote-note.php?id=75656&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75656">
    <a href="/manual/vote-note.php?id=75656&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75656" title="57% like this...">
    3
    </div>
  </div>
  <a href="#75656" class="name">
  <strong class="user"><em>opendb at iamvegan dot net</em></strong></a><a class="genanchor" href="#75656"> &para;</a><div class="date" title="2007-06-10 05:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75656">
<div class="phpcode"><code><span class="html">Something that may trip some folks up, but is useful to mention is that the following version comparison does not work quite as I expected:<br />    version_compare('1.0.1', '1.0pl1', '&gt;') <br /><br />However, its quite easy to get working:<br />    version_compare('1.0.1', '1.0.0pl1', '&gt;')</span></code></div>
  </div>
 </div>
  <div class="note" id="127315">  <div class="votes">
    <div id="Vu127315">
    <a href="/manual/vote-note.php?id=127315&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127315">
    <a href="/manual/vote-note.php?id=127315&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127315" title="55% like this...">
    1
    </div>
  </div>
  <a href="#127315" class="name">
  <strong class="user"><em>Lcuis</em></strong></a><a class="genanchor" href="#127315"> &para;</a><div class="date" title="2022-07-20 10:05"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127315">
<div class="phpcode"><code><span class="html">In case you need to handle more complex version numbers like alpha, beta,..., here is a little something that can help:<br /><br />function multiExplode($delimiters,$string){<br />    $pattern = '/['.preg_quote($delimiters).']/';<br />    return(preg_split( $pattern, $string ));<br />}<br /><br />function isInteger($input){<br />    return(ctype_digit(strval($input)));<br />}<br /><br />function keepIntsStartArray($arr){<br />    $nonIntMappings=[<br />        "alpha"=&gt;1,<br />        "beta"=&gt;2,<br />        "gamma"=&gt;3,<br />        "delta"=&gt;4,<br />        "epsilon"=&gt;5,<br />        "zeta"=&gt;6,<br />        "eta"=&gt;7,<br />        "theta"=&gt;8,<br />        "iota"=&gt;9,<br />        "kappa"=&gt;10,<br />        "lambda"=&gt;11,<br />        "mu"=&gt;12,<br />        "nu"=&gt;13,<br />        "xi"=&gt;14,<br />        "omicron"=&gt;15,<br />        "pi"=&gt;16,<br />        "rho"=&gt;17,<br />        "sigma"=&gt;18,<br />        "tau"=&gt;19,<br />        "upsilon"=&gt;20,<br />        "phi"=&gt;21,<br />        "chi"=&gt;22,<br />        "psi"=&gt;23,<br />        "omega"=&gt;24,<br />    ];<br />    $ret=[];<br />    foreach($arr as $i){<br />        if(!isInteger($i)){<br />            if(!array_key_exists($i,$nonIntMappings)){<br />                break;<br />            }<br />            $ret[]=$nonIntMappings[$i];<br />        }<br />        $ret[]=$i;<br />    }<br />    return($ret);<br />}<br /><br />function appVersionBigger($v1,$v2,$orEqual=false){<br />    $delimiters=".-+";<br />    $a1=keepIntsStartArray(multiExplode($delimiters,$v1));<br />    $a2=keepIntsStartArray(multiExplode($delimiters,$v2));<br />    $len=count($a1);<br />    if($len&gt;count($a2)){<br />        $len=count($a2);<br />    }<br />    for($i=0;$i&lt;$len;$i++){<br />        $n1=$a1[$i];<br />        $n2=$a2[$i];<br />        if($n1&gt;$n2){<br />            return(true);<br />        }<br />        if($n1&lt;$n2){<br />            return(false);<br />        }<br />    }<br />    if(count($a1)&gt;count($a2)){<br />        return(true);<br />    }<br />    if(count($a1)&lt;count($a2)){<br />        return(false);<br />    }<br />    return($orEqual);<br />}<br /><br />// usage examples:<br /><br />$versions=[<br />    "1.2.3-45"=&gt;"1.2.3-45",<br />    "1.2.3-44"=&gt;"1.2.3-45",<br />    "1.2.3-46"=&gt;"1.2.3-45",<br />    "1.2.3"=&gt;"1.2.3-45",<br />    "1.2.4"=&gt;"1.2.3-45",<br />    "1.2.2"=&gt;"1.2.3-45",<br />    "1.2"=&gt;"1.2.3-45",<br />    "1.3"=&gt;"1.2.3-45",<br />    "1.2.3-ios"=&gt;"1.2.3-and",<br />    "1.2-ios"=&gt;"1.2.3-and",<br />    "2-ios"=&gt;"1.2.3-and",<br />    "1.2.3-alpha"=&gt;"1.2.3-beta",<br />    "1.2.3-beta"=&gt;"1.2.3-alpha",<br />    "1-gamma"=&gt;"1.2.3-beta",<br />    "1-alpha"=&gt;"1.2.3-beta",<br />];<br /><br />foreach($versions as $v1=&gt;$v2){<br />    echo("v1: ".$v1."\tv2: ".$v2."\tgt: ".(appVersionBigger($v1,$v2,false)?"true":"false")."\tge: ".(appVersionBigger($v1,$v2,true)?"true":"false")."\n");<br />}<br /><br />// output with php version 8.1.8:<br />/*<br />v1: 1.2.3-45    v2: 1.2.3-45    gt: false    ge: true<br />v1: 1.2.3-44    v2: 1.2.3-45    gt: false    ge: false<br />v1: 1.2.3-46    v2: 1.2.3-45    gt: true    ge: true<br />v1: 1.2.3    v2: 1.2.3-45    gt: false    ge: false<br />v1: 1.2.4    v2: 1.2.3-45    gt: true    ge: true<br />v1: 1.2.2    v2: 1.2.3-45    gt: false    ge: false<br />v1: 1.2    v2: 1.2.3-45    gt: false    ge: false<br />v1: 1.3    v2: 1.2.3-45    gt: true    ge: true<br />v1: 1.2.3-ios    v2: 1.2.3-and    gt: false    ge: true<br />v1: 1.2-ios    v2: 1.2.3-and    gt: false    ge: false<br />v1: 2-ios    v2: 1.2.3-and    gt: true    ge: true<br />v1: 1.2.3-alpha    v2: 1.2.3-beta    gt: false    ge: false<br />v1: 1.2.3-beta    v2: 1.2.3-alpha    gt: true    ge: true<br />v1: 1-gamma    v2: 1.2.3-beta    gt: true    ge: true<br />v1: 1-alpha    v2: 1.2.3-beta    gt: false    ge: false<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="130400">  <div class="votes">
    <div id="Vu130400">
    <a href="/manual/vote-note.php?id=130400&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130400">
    <a href="/manual/vote-note.php?id=130400&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130400" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130400" class="name">
  <strong class="user"><em>php dot rb4ib at simplelogin dot com</em></strong></a><a class="genanchor" href="#130400"> &para;</a><div class="date" title="2025-07-01 06:07"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130400">
<div class="phpcode"><code><span class="html">While `+` is typically used to append metadata that are not supposed to be accounted for version comparison, the PHP version_compare function will actually consider that it decreases the version (by less than the least significant number) so:<br /><br />```<br />version_compare('1.0.0+something', '1.0.0', '&gt;=')<br />```<br /><br />will return `false`</span></code></div>
  </div>
 </div>
  <div class="note" id="46094">  <div class="votes">
    <div id="Vu46094">
    <a href="/manual/vote-note.php?id=46094&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46094">
    <a href="/manual/vote-note.php?id=46094&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46094" title="52% like this...">
    1
    </div>
  </div>
  <a href="#46094" class="name">
  <strong class="user"><em>arnoud at procurios dot nl</em></strong></a><a class="genanchor" href="#46094"> &para;</a><div class="date" title="2004-09-29 02:28"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom46094">
<div class="phpcode"><code><span class="html">If you're careful, this function actualy works quite nicely for comparing version numbers from programs other than PHP itself. I've used it to compare MySQL version numbers. The only issue is that version_compare doesn't recognize the 'gamma' addition that mysql uses as being later than 'alpha' or 'beta', because the latter two are treated specially. If you keep this in mind though, you should have no problems.</span></code></div>
  </div>
 </div>
  <div class="note" id="42608">  <div class="votes">
    <div id="Vu42608">
    <a href="/manual/vote-note.php?id=42608&amp;page=function.version-compare&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42608">
    <a href="/manual/vote-note.php?id=42608&amp;page=function.version-compare&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42608" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42608" class="name">
  <strong class="user"><em>sam at wyvern dot non-spammers-remove dot com dot au</em></strong></a><a class="genanchor" href="#42608"> &para;</a><div class="date" title="2004-05-23 11:18"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42608">
<div class="phpcode"><code><span class="html">Actually, it works to any degree:<br /><br /><span class="default">&lt;?php<br />version_compare</span><span class="keyword">(</span><span class="string">'1.2.3.4RC7.7'</span><span class="keyword">, </span><span class="string">'1.2.3.4RC7.8'</span><span class="keyword">)<br /></span><span class="default">version_compare</span><span class="keyword">(</span><span class="string">'8.2.50.4'</span><span class="keyword">, </span><span class="string">'8.2.52.6'</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />will both give -1 (ie the left is lower than the right).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.version-compare&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.version-compare.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="current">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
