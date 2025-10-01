<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_null - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-null.php">
 <link rel="shorturl" href="https://www.php.net/is-null">
 <link rel="alternate" href="https://www.php.net/is-null" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-long.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-numeric.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-null.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-null.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-null.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-null.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-null.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-null.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-null.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-null.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-null.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-null.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-null.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Finds whether a variable is null" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_null - Manual" />
<meta name="twitter:description" content="Finds whether a variable is null" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_null - Manual" />
<meta itemprop="description" content="Finds whether a variable is null" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Finds whether a variable is null" />

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
        <a href="function.is-numeric.php">
          is_numeric &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-long.php">
          &laquo; is_long        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.is-null.php' selected="selected">English</option>
            <option value='de/function.is-null.php'>German</option>
            <option value='es/function.is-null.php'>Spanish</option>
            <option value='fr/function.is-null.php'>French</option>
            <option value='it/function.is-null.php'>Italian</option>
            <option value='ja/function.is-null.php'>Japanese</option>
            <option value='pt_BR/function.is-null.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-null.php'>Russian</option>
            <option value='tr/function.is-null.php'>Turkish</option>
            <option value='uk/function.is-null.php'>Ukrainian</option>
            <option value='zh/function.is-null.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-null" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_null</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_null</span> &mdash; <span class="dc-title">
   Finds whether a variable is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.is-null-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_null</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Finds whether the given variable is <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.is-null-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable being evaluated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.is-null-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">value</code> is <span class="type"><a href="language.types.null.php" class="type null">null</a></span>, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.is-null-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5655">
    <p><strong>Example #1 <span class="function"><strong>is_null()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">E_ALL</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= </span><span style="color: #0000BB">NULL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$inexistent</span><span style="color: #007700">), </span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$foo</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.is-null-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li>The <a href="language.types.null.php#language.types.null.syntax" class="link"><strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></a> type</li>
    <li><span class="function"><a href="function.isset.php" class="function" rel="rdfs-seeAlso">isset()</a> - Determine if a variable is declared and is different than null</span></li>
    <li><span class="function"><a href="function.is-bool.php" class="function" rel="rdfs-seeAlso">is_bool()</a> - Finds out whether a variable is a boolean</span></li>
    <li><span class="function"><a href="function.is-numeric.php" class="function" rel="rdfs-seeAlso">is_numeric()</a> - Finds whether a variable is a number or a numeric string</span></li>
    <li><span class="function"><a href="function.is-float.php" class="function" rel="rdfs-seeAlso">is_float()</a> - Finds whether the type of a variable is float</span></li>
    <li><span class="function"><a href="function.is-int.php" class="function" rel="rdfs-seeAlso">is_int()</a> - Find whether the type of a variable is integer</span></li>
    <li><span class="function"><a href="function.is-string.php" class="function" rel="rdfs-seeAlso">is_string()</a> - Find whether the type of a variable is string</span></li>
    <li><span class="function"><a href="function.is-object.php" class="function" rel="rdfs-seeAlso">is_object()</a> - Finds whether a variable is an object</span></li>
    <li><span class="function"><a href="function.is-array.php" class="function" rel="rdfs-seeAlso">is_array()</a> - Finds whether a variable is an array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/is-null.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-null%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-null&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-null.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="84161">  <div class="votes">
    <div id="Vu84161">
    <a href="/manual/vote-note.php?id=84161&amp;page=function.is-null&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84161">
    <a href="/manual/vote-note.php?id=84161&amp;page=function.is-null&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84161" title="76% like this...">
    341
    </div>
  </div>
  <a href="#84161" class="name">
  <strong class="user"><em>Malfist</em></strong></a><a class="genanchor" href="#84161"> &para;</a><div class="date" title="2008-07-01 07:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84161">
<div class="phpcode"><code><span class="html">Micro optimization isn't worth it.<br /><br />You had to do it ten million times to notice a difference, a little more than 2 seconds<br /><br />$a===NULL; Took: 1.2424390316s<br /> is_null($a); Took: 3.70693397522s<br /><br />difference = 2.46449494362<br />difference/10,000,000 = 0.000000246449494362<br /><br />The execution time difference between ===NULL and is_null is less than 250 nanoseconds. Go optimize something that matters.</span></code></div>
  </div>
 </div>
  <div class="note" id="87355">  <div class="votes">
    <div id="Vu87355">
    <a href="/manual/vote-note.php?id=87355&amp;page=function.is-null&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87355">
    <a href="/manual/vote-note.php?id=87355&amp;page=function.is-null&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87355" title="78% like this...">
    167
    </div>
  </div>
  <a href="#87355" class="name">
  <strong class="user"><em>george at fauxpanels dot com</em></strong></a><a class="genanchor" href="#87355"> &para;</a><div class="date" title="2008-12-01 01:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87355">
<div class="phpcode"><code><span class="html">See how php parses different values. $var is the variable.<br /><br />$var        =    NULL    ""    0    "0"    1<br /><br />strlen($var)    =    0    0    1    1    1<br />is_null($var)    =    TRUE    FALSE    FALSE    FALSE    FALSE<br />$var == ""    =    TRUE    TRUE    TRUE    FALSE    FALSE<br />!$var        =    TRUE    TRUE    TRUE    TRUE    FALSE<br />!is_null($var)    =    FALSE    TRUE    TRUE    TRUE    TRUE<br />$var != ""    =    FALSE    FALSE    FALSE    TRUE    TRUE<br />$var        =    FALSE    FALSE    FALSE    FALSE    TRUE<br /><br />Peace!</span></code></div>
  </div>
 </div>
  <div class="note" id="117344">  <div class="votes">
    <div id="Vu117344">
    <a href="/manual/vote-note.php?id=117344&amp;page=function.is-null&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117344">
    <a href="/manual/vote-note.php?id=117344&amp;page=function.is-null&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117344" title="79% like this...">
    93
    </div>
  </div>
  <a href="#117344" class="name">
  <strong class="user"><em>contact dot 01834e2c at renegade334 dot me dot uk</em></strong></a><a class="genanchor" href="#117344"> &para;</a><div class="date" title="2015-05-25 06:57"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117344">
<div class="phpcode"><code><span class="html">In PHP 7 (phpng), is_null is actually marginally faster than ===, although the performance difference between the two is far smaller.<br /><br />PHP 5.5.9<br />is_null - float(2.2381200790405)<br />===     - float(1.0024659633636)<br />=== faster by ~100ns per call<br /><br />PHP 7.0.0-dev (built: May 19 2015 10:16:06)<br />is_null - float(1.4121870994568)<br />===     - float(1.4577329158783)<br />is_null faster by ~5ns per call</span></code></div>
  </div>
 </div>
  <div class="note" id="126998">  <div class="votes">
    <div id="Vu126998">
    <a href="/manual/vote-note.php?id=126998&amp;page=function.is-null&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126998">
    <a href="/manual/vote-note.php?id=126998&amp;page=function.is-null&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126998" title="74% like this...">
    24
    </div>
  </div>
  <a href="#126998" class="name">
  <strong class="user"><em>ahamilton9</em></strong></a><a class="genanchor" href="#126998"> &para;</a><div class="date" title="2022-04-19 08:28"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126998">
<div class="phpcode"><code><span class="html">A quick test in 2022 on PHP 8.1 confirms there is still no need to micro-optimize NULL checks:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Comparison Operator<br /></span><span class="default">$before </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">1000000000 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    if(</span><span class="default">$var </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {}<br />}<br /></span><span class="default">$after </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="string">'    ===: ' </span><span class="keyword">. (</span><span class="default">$after </span><span class="keyword">- </span><span class="default">$before</span><span class="keyword">) . </span><span class="string">" seconds\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Function<br /></span><span class="default">$before </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$var </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">1000000000 </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    if(</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)) {}<br />}<br /></span><span class="default">$after </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="string">'is_null: ' </span><span class="keyword">. (</span><span class="default">$after </span><span class="keyword">- </span><span class="default">$before</span><span class="keyword">) . </span><span class="string">" seconds\n"</span><span class="keyword">;<br /><br /></span><span class="comment">//     ===: 4.1487579345703 seconds<br />// is_null: 4.1316878795624 seconds</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80409">  <div class="votes">
    <div id="Vu80409">
    <a href="/manual/vote-note.php?id=80409&amp;page=function.is-null&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80409">
    <a href="/manual/vote-note.php?id=80409&amp;page=function.is-null&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80409" title="58% like this...">
    14
    </div>
  </div>
  <a href="#80409" class="name">
  <strong class="user"><em>ai dot unstmann at combase dot de</em></strong></a><a class="genanchor" href="#80409"> &para;</a><div class="date" title="2008-01-14 12:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80409">
<div class="phpcode"><code><span class="html">For what I realized is that  is_null($var)  returns exactly the opposite of  isset($var) , except that is_null($var) throws a notice if $var hasn't been set yet.<br /><br />the following will prove that:<br /><br /><span class="default">&lt;?php<br /><br />$quirks </span><span class="keyword">= array(</span><span class="default">null</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">"\0"</span><span class="keyword">, </span><span class="string">"unset"</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$quirks </span><span class="keyword">as </span><span class="default">$var</span><span class="keyword">) {<br />    if (</span><span class="default">$var </span><span class="keyword">=== </span><span class="string">"unset"</span><span class="keyword">) unset(</span><span class="default">$var</span><span class="keyword">);<br /><br />    echo </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />    echo isset(</span><span class="default">$var</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />    echo </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />this will print out something like:<br /><br />10    // null<br />01    // true<br />01    // false<br />01    // 0<br />01    // 1<br />01    // ''<br />01    // "\0"<br />Notice:  Undefined variable: var in /srv/www/htdocs/sandbox/null/nulltest.php on line 8<br />10    // (unset)<br /><br />For the major quirky types/values is_null($var) obviously always returns the opposite of isset($var), and the notice clearly points out the faulty line with the is_null() statement. You might want to examine the return value of those functions in detail, but since both are specified to return boolean types there should be no doubt.<br /><br />A second look into the PHP specs tells that is_null() checks whether a value is null or not. So, you may pass any VALUE to it, eg. the result of a function.<br />isset() on the other hand is supposed to check for a VARIABLE's existence, which makes it a language construct rather than a function. Its sole porpuse lies in that checking. Passing anything else will result in an error.<br /><br />Knowing that, allows us to draw the following unlikely conclusion:<br /><br />isset() as a language construct is way faster, more reliable and powerful than is_null() and should be prefered over is_null(), except for when you're directly passing a function's result, which is considered bad programming practice anyways.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-null&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-null.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="current">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
