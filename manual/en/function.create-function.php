<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: create_function - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.create-function.php">
 <link rel="shorturl" href="https://www.php.net/create-function">
 <link rel="alternate" href="https://www.php.net/create-function" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.call-user-func-array.php">
 <link rel="next" href="https://www.php.net/manual/en/function.forward-static-call.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.create-function.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.create-function.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.create-function.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.create-function.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.create-function.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.create-function.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.create-function.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.create-function.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.create-function.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.create-function.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.create-function.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create a function dynamically by evaluating a string of code" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: create_function - Manual" />
<meta name="twitter:description" content="Create a function dynamically by evaluating a string of code" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: create_function - Manual" />
<meta itemprop="description" content="Create a function dynamically by evaluating a string of code" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create a function dynamically by evaluating a string of code" />

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
        <a href="function.forward-static-call.php">
          forward_static_call &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.call-user-func-array.php">
          &laquo; call_user_func_array        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.funchand.php'>Function Handling</a></li>      <li><a href='ref.funchand.php'>Function handling Functions</a></li>      </ul>
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
            <option value='en/function.create-function.php' selected="selected">English</option>
            <option value='de/function.create-function.php'>German</option>
            <option value='es/function.create-function.php'>Spanish</option>
            <option value='fr/function.create-function.php'>French</option>
            <option value='it/function.create-function.php'>Italian</option>
            <option value='ja/function.create-function.php'>Japanese</option>
            <option value='pt_BR/function.create-function.php'>Brazilian Portuguese</option>
            <option value='ru/function.create-function.php'>Russian</option>
            <option value='tr/function.create-function.php'>Turkish</option>
            <option value='uk/function.create-function.php'>Ukrainian</option>
            <option value='zh/function.create-function.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.create-function" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">create_function</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.1, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">create_function</span> &mdash; <span class="dc-title">Create a function dynamically by evaluating a string of code</span></p>

 </div>

 <div id="function.create-function-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 7.2.0, and <em>REMOVED</em> as of PHP 8.0.0. Relying on this function
is highly discouraged.</p></div>
 </div>

 <div class="refsect1 description" id="refsect1-function.create-function-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>create_function</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$args</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$code</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Creates a function dynamically from the parameters passed, and returns a unique name for it.
  </p>
  <div class="caution"><strong class="caution">Caution</strong>
   <p class="para">
    This function internally performs an <span class="function"><a href="function.eval.php" class="function">eval()</a></span> and as such has the
    same security issues as <span class="function"><a href="function.eval.php" class="function">eval()</a></span>. It also has bad performance
    and memory usage characteristics, because the created functions are global and
    can not be freed.
   </p>
   <p class="para">
    A native
    <a href="functions.anonymous.php" class="link">anonymous function</a> should be used instead.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.create-function-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   It is normally advisable to pass these parameters as
   <a href="language.types.string.php#language.types.string.syntax.single" class="link">single quoted</a>
   strings. If using <a href="language.types.string.php#language.types.string.syntax.double" class="link">double quoted</a>
   strings, variable names in the code need to be escaped carefully, e.g.
   <code class="literal">\$somevar</code>.
   <dl>
    
     <dt><code class="parameter">args</code></dt>
     <dd>
      <p class="para">
       The function arguments, as a single comma-separated string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">code</code></dt>
     <dd>
      <p class="para">
       The function code.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.create-function-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a unique function name as a string,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   Note that the name contains a non-printable character (<code class="literal">&quot;\0&quot;</code>),
   so care should be taken when printing the name or incorporating it in any other
   string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.create-function-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5397">
    <p><strong>Example #1 
     Creating a function dynamically, with <span class="function"><strong>create_function()</strong></span>
     or anonymous functions
    </strong></p>
    <div class="example-contents"><p>
     You can use a dynamically created function, to (for example) create a function from
     information gathered at run time. First, using <span class="function"><strong>create_function()</strong></span>:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$newfunc </span><span style="color: #007700">= </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'return "ln($a) + ln($b) = " . log($a * $b);'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$newfunc</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">M_E</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Now the same code, using an <a href="functions.anonymous.php" class="link">anonymous function</a>;
     note that the code and arguments are no longer contained in strings:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$newfunc </span><span style="color: #007700">= function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"ln(</span><span style="color: #0000BB">$a</span><span style="color: #DD0000">) + ln(</span><span style="color: #0000BB">$b</span><span style="color: #DD0000">) = " </span><span style="color: #007700">. </span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$a </span><span style="color: #007700">* </span><span style="color: #0000BB">$b</span><span style="color: #007700">); };<br />echo </span><span style="color: #0000BB">$newfunc</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">M_E</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">ln(2) + ln(2.718281828459) = 1.6931471805599</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5398">
    <p><strong>Example #2 
     Making a general processing function, with <span class="function"><strong>create_function()</strong></span>
     or anonymous functions
    </strong></p>
    <div class="example-contents"><p>
     Another use could be to have general handler function that can apply a set
     of operations to a list of parameters:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">, </span><span style="color: #0000BB">$farr</span><span style="color: #007700">)<br />{<br />    foreach (</span><span style="color: #0000BB">$farr </span><span style="color: #007700">as </span><span style="color: #0000BB">$f</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$f</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// create a bunch of math functions<br /></span><span style="color: #0000BB">$farr </span><span style="color: #007700">= array(<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$x,$y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'return "some trig: ".(sin($x) + $x*cos($y));'</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$x,$y'</span><span style="color: #007700">, </span><span style="color: #DD0000">'return "a hypotenuse: ".sqrt($x*$x + $y*$y);'</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'if ($a &gt;=0) {return "b*a^2 = ".$b*sqrt($a);} else {return false;}'</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">"return \"min(b^2+a, a^2,b) = \".min(\$a*\$a+\$b,\$b*\$b+\$a);"</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'if ($a &gt; 0 &amp;&amp; $b != 0) {return "ln(a)/b = ".log($a)/$b; } else { return false; }'</span><span style="color: #007700">)<br />);<br /><br />echo </span><span style="color: #DD0000">"\nUsing the first array of dynamic functions\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"parameters: 2.3445, M_PI\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #0000BB">2.3445</span><span style="color: #007700">, </span><span style="color: #0000BB">M_PI</span><span style="color: #007700">, </span><span style="color: #0000BB">$farr</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// now make a bunch of string processing functions<br /></span><span style="color: #0000BB">$garr </span><span style="color: #007700">= array(<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$b,$a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'if (strncmp($a, $b, 3) == 0) return "** \"$a\" '</span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">'and \"$b\"\n** Look the same to me! (looking at the first 3 chars)";'</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'return "CRCs: " . crc32($a) . ", ".crc32($b);'</span><span style="color: #007700">),<br />    </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'return "similar(a,b) = " . similar_text($a, $b, $p) . "($p%)";'</span><span style="color: #007700">)<br />);<br />echo </span><span style="color: #DD0000">"\nUsing the second array of dynamic functions\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #DD0000">"Twas brilling and the slithy toves"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Twas the night"</span><span style="color: #007700">, </span><span style="color: #0000BB">$garr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Again, here is the same code using
     <a href="functions.anonymous.php" class="link">anonymous functions</a>.
     Note that variable names in the code no longer need to be escaped,
     because they are not enclosed in a string.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">, </span><span style="color: #0000BB">$farr</span><span style="color: #007700">)<br />{<br />    foreach (</span><span style="color: #0000BB">$farr </span><span style="color: #007700">as </span><span style="color: #0000BB">$f</span><span style="color: #007700">) {<br />        echo </span><span style="color: #0000BB">$f</span><span style="color: #007700">(</span><span style="color: #0000BB">$var1</span><span style="color: #007700">, </span><span style="color: #0000BB">$var2</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// create a bunch of math functions<br /></span><span style="color: #0000BB">$farr </span><span style="color: #007700">= array(<br />    function(</span><span style="color: #0000BB">$x</span><span style="color: #007700">,</span><span style="color: #0000BB">$y</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"some trig: "</span><span style="color: #007700">.(</span><span style="color: #0000BB">sin</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) + </span><span style="color: #0000BB">$x</span><span style="color: #007700">*</span><span style="color: #0000BB">cos</span><span style="color: #007700">(</span><span style="color: #0000BB">$y</span><span style="color: #007700">)); },<br />    function(</span><span style="color: #0000BB">$x</span><span style="color: #007700">,</span><span style="color: #0000BB">$y</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"a hypotenuse: "</span><span style="color: #007700">.</span><span style="color: #0000BB">sqrt</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">*</span><span style="color: #0000BB">$x </span><span style="color: #007700">+ </span><span style="color: #0000BB">$y</span><span style="color: #007700">*</span><span style="color: #0000BB">$y</span><span style="color: #007700">); },<br />    function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt;=</span><span style="color: #0000BB">0</span><span style="color: #007700">) {return </span><span style="color: #DD0000">"b*a^2 = "</span><span style="color: #007700">.</span><span style="color: #0000BB">$b</span><span style="color: #007700">*</span><span style="color: #0000BB">sqrt</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);} else {return </span><span style="color: #0000BB">false</span><span style="color: #007700">;} },<br />    function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"min(b^2+a, a^2,b) = " </span><span style="color: #007700">. </span><span style="color: #0000BB">min</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">*</span><span style="color: #0000BB">$a</span><span style="color: #007700">+</span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">*</span><span style="color: #0000BB">$b</span><span style="color: #007700">+</span><span style="color: #0000BB">$a</span><span style="color: #007700">); },<br />    function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { if (</span><span style="color: #0000BB">$a </span><span style="color: #007700">&gt; </span><span style="color: #0000BB">0 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #0000BB">$b </span><span style="color: #007700">!= </span><span style="color: #0000BB">0</span><span style="color: #007700">) {return </span><span style="color: #DD0000">"ln(a)/b = "</span><span style="color: #007700">.</span><span style="color: #0000BB">log</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">)/</span><span style="color: #0000BB">$b</span><span style="color: #007700">; } else { return </span><span style="color: #0000BB">false</span><span style="color: #007700">; } }<br />);<br /><br />echo </span><span style="color: #DD0000">"\nUsing the first array of dynamic functions\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"parameters: 2.3445, M_PI\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #0000BB">2.3445</span><span style="color: #007700">, </span><span style="color: #0000BB">M_PI</span><span style="color: #007700">, </span><span style="color: #0000BB">$farr</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// now make a bunch of string processing functions<br /></span><span style="color: #0000BB">$garr </span><span style="color: #007700">= array(<br />    function(</span><span style="color: #0000BB">$b</span><span style="color: #007700">,</span><span style="color: #0000BB">$a</span><span style="color: #007700">) { if (</span><span style="color: #0000BB">strncmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">) == </span><span style="color: #0000BB">0</span><span style="color: #007700">) return </span><span style="color: #DD0000">"** \"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000">\" " </span><span style="color: #007700">.<br />        </span><span style="color: #DD0000">"and \"</span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\"\n** Look the same to me! (looking at the first 3 chars)"</span><span style="color: #007700">; },<br />    function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"CRCs: " </span><span style="color: #007700">. </span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">) . </span><span style="color: #DD0000">", "</span><span style="color: #007700">.</span><span style="color: #0000BB">crc32</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">); },<br />    function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { return </span><span style="color: #DD0000">"similar(a,b) = " </span><span style="color: #007700">. </span><span style="color: #0000BB">similar_text</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">, </span><span style="color: #0000BB">$p</span><span style="color: #007700">) . </span><span style="color: #DD0000">"(</span><span style="color: #0000BB">$p</span><span style="color: #DD0000">%)"</span><span style="color: #007700">; }<br />);<br />echo </span><span style="color: #DD0000">"\nUsing the second array of dynamic functions\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">process</span><span style="color: #007700">(</span><span style="color: #DD0000">"Twas brilling and the slithy toves"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Twas the night"</span><span style="color: #007700">, </span><span style="color: #0000BB">$garr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Using the first array of dynamic functions
parameters: 2.3445, M_PI
some trig: -1.6291725057799
a hypotenuse: 3.9199852871011
b*a^2 = 4.8103313314525
min(b^2+a, a^2,b) = 8.6382729035898
ln(a)/b = 0.27122299212594

Using the second array of dynamic functions
** &quot;Twas the night&quot; and &quot;Twas brilling and the slithy toves&quot;
** Look the same to me! (looking at the first 3 chars)
CRCs: 3569586014, 342550513
similar(a,b) = 11(45.833333333333%)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5399">
    <p><strong>Example #3 Using dynamic functions as callback functions</strong></p>
    <div class="example-contents"><p>
     Perhaps the most common use for dynamic functions
     is to pass them as callbacks, for example when using
     <span class="function"><a href="function.array-walk.php" class="function">array_walk()</a></span> or <span class="function"><a href="function.usort.php" class="function">usort()</a></span>.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$av </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"the "</span><span style="color: #007700">, </span><span style="color: #DD0000">"a "</span><span style="color: #007700">, </span><span style="color: #DD0000">"that "</span><span style="color: #007700">, </span><span style="color: #DD0000">"this "</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$av</span><span style="color: #007700">, </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'&amp;$v,$k'</span><span style="color: #007700">, </span><span style="color: #DD0000">'$v = $v . "mango";'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$av</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Converted to an <a href="functions.anonymous.php" class="link">anonymous function</a>:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$av </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"the "</span><span style="color: #007700">, </span><span style="color: #DD0000">"a "</span><span style="color: #007700">, </span><span style="color: #DD0000">"that "</span><span style="color: #007700">, </span><span style="color: #DD0000">"this "</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">array_walk</span><span style="color: #007700">(</span><span style="color: #0000BB">$av</span><span style="color: #007700">, function(&amp;</span><span style="color: #0000BB">$v</span><span style="color: #007700">,</span><span style="color: #0000BB">$k</span><span style="color: #007700">) { </span><span style="color: #0000BB">$v </span><span style="color: #007700">= </span><span style="color: #0000BB">$v </span><span style="color: #007700">. </span><span style="color: #DD0000">"mango"</span><span style="color: #007700">; });<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$av</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
  [0] =&gt; the mango
  [1] =&gt; a mango
  [2] =&gt; that mango
  [3] =&gt; this mango
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     Sorting strings from longest to shortest with <span class="function"><strong>create_function()</strong></span>:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sv </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"small"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a big string"</span><span style="color: #007700">, </span><span style="color: #DD0000">"larger"</span><span style="color: #007700">, </span><span style="color: #DD0000">"it is a string thing"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Original:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Sorted:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">, </span><span style="color: #0000BB">create_function</span><span style="color: #007700">(</span><span style="color: #DD0000">'$a,$b'</span><span style="color: #007700">,</span><span style="color: #DD0000">'return strlen($b) - strlen($a);'</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Converted to an <a href="functions.anonymous.php" class="link">anonymous function</a>:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$sv </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"small"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a big string"</span><span style="color: #007700">, </span><span style="color: #DD0000">"larger"</span><span style="color: #007700">, </span><span style="color: #DD0000">"it is a string thing"</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Original:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Sorted:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">usort</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">, function(</span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">) { return </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$b</span><span style="color: #007700">) - </span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">); });<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$sv</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Original:
Array
(
  [0] =&gt; small
  [1] =&gt; a big string
  [2] =&gt; larger
  [3] =&gt; it is a string thing
)
Sorted:
Array
(
  [0] =&gt; it is a string thing
  [1] =&gt; a big string
  [2] =&gt; larger
  [3] =&gt; small
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.create-function-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="functions.anonymous.php" class="link">Anonymous functions</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/functions/create-function.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.create-function%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.create-function&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.create-function.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123214">  <div class="votes">
    <div id="Vu123214">
    <a href="/manual/vote-note.php?id=123214&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123214">
    <a href="/manual/vote-note.php?id=123214&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123214" title="84% like this...">
    22
    </div>
  </div>
  <a href="#123214" class="name">
  <strong class="user"><em>tamagochi_man</em></strong></a><a class="genanchor" href="#123214"> &para;</a><div class="date" title="2018-10-09 07:44"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123214">
<div class="phpcode"><code><span class="html">Whilst it was correct 11 years ago, the statement of Dan D is not so correct any moreю Anonymous functions are now objects of a class Closure and are safely collected by garbage collector.</span></code></div>
  </div>
 </div>
  <div class="note" id="70691">  <div class="votes">
    <div id="Vu70691">
    <a href="/manual/vote-note.php?id=70691&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70691">
    <a href="/manual/vote-note.php?id=70691&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70691" title="58% like this...">
    13
    </div>
  </div>
  <a href="#70691" class="name">
  <strong class="user"><em>Dan D</em></strong></a><a class="genanchor" href="#70691"> &para;</a><div class="date" title="2006-10-23 07:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70691">
<div class="phpcode"><code><span class="html">Beware when using anonymous functions in PHP as you would in languages like Python, Ruby, Lisp or Javascript.  As was stated previously, the allocated memory is never released; they are not objects in PHP -- they are just dynamically named global functions -- so they don't have scope and are not subject to garbage collection.<br /><br />So, if you're developing anything remotely reusable (OO or otherwise), I would avoid them like the plague.  They're slow, inefficient and there's no telling if your implementation will end up in a large loop.  Mine ended up in an iteration over ~1 million records and quickly exhasted my 500MB-per-process limit.</span></code></div>
  </div>
 </div>
  <div class="note" id="69951">  <div class="votes">
    <div id="Vu69951">
    <a href="/manual/vote-note.php?id=69951&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69951">
    <a href="/manual/vote-note.php?id=69951&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69951" title="71% like this...">
    3
    </div>
  </div>
  <a href="#69951" class="name">
  <strong class="user"><em>Josh J</em></strong></a><a class="genanchor" href="#69951"> &para;</a><div class="date" title="2006-09-27 12:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69951">
<div class="phpcode"><code><span class="html">In regards to the recursion issue by info at adaniels dot nl<br /><br />Anon function recursion by referencing the function variable in the correct scope.<br /><span class="default">&lt;?php<br />$fn2 </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a'</span><span class="keyword">, </span><span class="string">'echo $a; if ($a &lt; 10) call_user_func($GLOBALS["fn2"], ++$a);'</span><span class="keyword">);<br /></span><span class="default">$fn2</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109197">  <div class="votes">
    <div id="Vu109197">
    <a href="/manual/vote-note.php?id=109197&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109197">
    <a href="/manual/vote-note.php?id=109197&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109197" title="66% like this...">
    3
    </div>
  </div>
  <a href="#109197" class="name">
  <strong class="user"><em>kak dot serpom dot po dot yaitsam at gmail dot com</em></strong></a><a class="genanchor" href="#109197"> &para;</a><div class="date" title="2012-06-27 12:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109197">
<div class="phpcode"><code><span class="html">Try this to boost performance of your scripts (increase maxCacheSize):
<br />
<br /><span class="default">&lt;?php
<br />runkit_function_copy</span><span class="keyword">(</span><span class="string">'create_function'</span><span class="keyword">, </span><span class="string">'create_function_native'</span><span class="keyword">);
<br /></span><span class="default">runkit_function_redefine</span><span class="keyword">(</span><span class="string">'create_function'</span><span class="keyword">, </span><span class="string">'$arg,$body'</span><span class="keyword">, </span><span class="string">'return __create_function($arg,$body);'</span><span class="keyword">);
<br />
<br />function </span><span class="default">__create_function</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="default">$body</span><span class="keyword">) {
<br />    static </span><span class="default">$cache </span><span class="keyword">= array();
<br />    static </span><span class="default">$maxCacheSize </span><span class="keyword">= </span><span class="default">64</span><span class="keyword">;
<br />    static </span><span class="default">$sorter</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$sorter </span><span class="keyword">=== </span><span class="default">NULL</span><span class="keyword">) {
<br />        </span><span class="default">$sorter </span><span class="keyword">= function(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">) {
<br />            if (</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">hits </span><span class="keyword">== </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">hits</span><span class="keyword">) {
<br />                return </span><span class="default">0</span><span class="keyword">;
<br />            }
<br />
<br />            return (</span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">hits </span><span class="keyword">&lt; </span><span class="default">$b</span><span class="keyword">-&gt;</span><span class="default">hits</span><span class="keyword">) ? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">;
<br />        };
<br />    }
<br />
<br />    </span><span class="default">$crc </span><span class="keyword">= </span><span class="default">crc32</span><span class="keyword">(</span><span class="default">$arg </span><span class="keyword">. </span><span class="string">"\\x00" </span><span class="keyword">. </span><span class="default">$body</span><span class="keyword">);
<br />
<br />    if (isset(</span><span class="default">$cache</span><span class="keyword">[</span><span class="default">$crc</span><span class="keyword">])) {
<br />        ++</span><span class="default">$cache</span><span class="keyword">[</span><span class="default">$crc</span><span class="keyword">][</span><span class="default">1</span><span class="keyword">];
<br />        return </span><span class="default">$cache</span><span class="keyword">[</span><span class="default">$crc</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];
<br />    }
<br />
<br />    if (</span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$cache</span><span class="keyword">) &gt;= </span><span class="default">$maxCacheSize</span><span class="keyword">) {
<br />        </span><span class="default">uasort</span><span class="keyword">(</span><span class="default">$cache</span><span class="keyword">, </span><span class="default">$sorter</span><span class="keyword">);
<br />        </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$cache</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">$cache</span><span class="keyword">[</span><span class="default">$crc</span><span class="keyword">] = array(</span><span class="default">$cb </span><span class="keyword">= eval(</span><span class="string">'return function('</span><span class="keyword">.</span><span class="default">$arg</span><span class="keyword">.</span><span class="string">'){'</span><span class="keyword">.</span><span class="default">$body</span><span class="keyword">.</span><span class="string">'};'</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">);
<br />    return </span><span class="default">$cb</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74492">  <div class="votes">
    <div id="Vu74492">
    <a href="/manual/vote-note.php?id=74492&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74492">
    <a href="/manual/vote-note.php?id=74492&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74492" title="66% like this...">
    2
    </div>
  </div>
  <a href="#74492" class="name">
  <strong class="user"><em>kkaiser at revolution-records dot net</em></strong></a><a class="genanchor" href="#74492"> &para;</a><div class="date" title="2007-04-13 01:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74492">
<div class="phpcode"><code><span class="html">In the process of migrating a PHP4 codebase to PHP5, I ran into a peculiar problem. In the library, every class was derived from a generic class called 'class_container'. 'class_container' contained an array called runtime_functions and a method called class_function that was as follows:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">class_function</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">,</span><span class="default">$code</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runtime_functions</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = </span><span class="default">create_function</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">,</span><span class="default">$code</span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />In a subclass of class_container, there was a function that utilized class_function() to store some custom lambda functions that were self-referential:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">myfunc</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$code</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">class_function</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="string">'$theobj'</span><span class="keyword">,</span><span class="string">'$this=&amp;$theobj;'</span><span class="keyword">.</span><span class="default">$code</span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />In PHP4, this worked just fine. The idea was to write blocks of code at the subclass level, such as "echo $this-&gt;id;", then simply $MYOBJ-&gt;myfunc("go","echo $this-&gt;id;"); and later call it like $MYOBJ-&gt;runtime_functions["go"]();
<br />
<br />It essentially worked exactly like binding anonymous functions to objects in Javascript.
<br />
<br />Note how the "$this" keyword had to be manually redefined for the $code block to work.
<br />
<br />In PHP5, however, you can't redeclare $this without getting a fatal error, so the code had to be updated to:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">myfunc</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$code</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">class_function</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="string">'$this'</span><span class="keyword">,</span><span class="default">$code</span><span class="keyword">);
<br />
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Apparently create_function() allows you to set $this via a function argument, allowing you to bind anonymous functions to instantiated objects. Thought it might be useful to somebody.</span></code></div>
  </div>
 </div>
  <div class="note" id="65964">  <div class="votes">
    <div id="Vu65964">
    <a href="/manual/vote-note.php?id=65964&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65964">
    <a href="/manual/vote-note.php?id=65964&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65964" title="66% like this...">
    2
    </div>
  </div>
  <a href="#65964" class="name">
  <strong class="user"><em>info at adaniels dot nl</em></strong></a><a class="genanchor" href="#65964"> &para;</a><div class="date" title="2006-05-10 03:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65964">
<div class="phpcode"><code><span class="html">Note that using __FUNCTION__ in a an anonymous function, will always result '__lambda_func'.<br /><br /><span class="default">&lt;?php<br />    $fn </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'echo __FUNCTION__;'</span><span class="keyword">);<br />    </span><span class="default">$fn</span><span class="keyword">();<br />    </span><span class="comment">// Result: __lambda_func<br />    </span><span class="keyword">echo </span><span class="default">$fn</span><span class="keyword">;<br />    </span><span class="comment">// Result: ºlambda_2 (the actual first character cannot be displayed)<br /></span><span class="default">?&gt;<br /></span><br />This means that a anonymous function can't be used recursively. The following code (recursively counting to 10) results in an error:<br /><span class="default">&lt;?php<br />    $fn2 </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a'</span><span class="keyword">, </span><span class="string">'echo $a; if ($a &lt; 10) call_user_func(__FUNCTION__, $a++);'</span><span class="keyword">);<br />    </span><span class="default">$fn2</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="comment">// Warning: call_user_func(__lambda_func) [function.call-user-func]: First argument is expected to be a valid callback in T:/test/test.php(21) : runtime-created function on line 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103080">  <div class="votes">
    <div id="Vu103080">
    <a href="/manual/vote-note.php?id=103080&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103080">
    <a href="/manual/vote-note.php?id=103080&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103080" title="55% like this...">
    1
    </div>
  </div>
  <a href="#103080" class="name">
  <strong class="user"><em>Dave H</em></strong></a><a class="genanchor" href="#103080"> &para;</a><div class="date" title="2011-03-24 06:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103080">
<div class="phpcode"><code><span class="html">The following function is very useful for creating an alias of a user function. 
<br />For built-in functions, it is less useful because default values are not available, so function aliases for built-in functions must have all parameters supplied, whether optional or not.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">create_function_alias</span><span class="keyword">(</span><span class="default">$function_name</span><span class="keyword">, </span><span class="default">$alias_name</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">function_exists</span><span class="keyword">(</span><span class="default">$alias_name</span><span class="keyword">))
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">$rf </span><span class="keyword">= new </span><span class="default">ReflectionFunction</span><span class="keyword">(</span><span class="default">$function_name</span><span class="keyword">);
<br />    </span><span class="default">$fproto </span><span class="keyword">= </span><span class="default">$alias_name</span><span class="keyword">.</span><span class="string">'('</span><span class="keyword">;
<br />    </span><span class="default">$fcall </span><span class="keyword">= </span><span class="default">$function_name</span><span class="keyword">.</span><span class="string">'('</span><span class="keyword">;
<br />    </span><span class="default">$need_comma </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />    
<br />    foreach(</span><span class="default">$rf</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">() as </span><span class="default">$param</span><span class="keyword">)
<br />    {
<br />        if(</span><span class="default">$need_comma</span><span class="keyword">)
<br />        {
<br />            </span><span class="default">$fproto </span><span class="keyword">.= </span><span class="string">','</span><span class="keyword">;
<br />            </span><span class="default">$fcall </span><span class="keyword">.= </span><span class="string">','</span><span class="keyword">;
<br />        }
<br />
<br />        </span><span class="default">$fproto </span><span class="keyword">.= </span><span class="string">'$'</span><span class="keyword">.</span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();
<br />        </span><span class="default">$fcall </span><span class="keyword">.= </span><span class="string">'$'</span><span class="keyword">.</span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();
<br />
<br />        if(</span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">isOptional</span><span class="keyword">() &amp;&amp; </span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">isDefaultValueAvailable</span><span class="keyword">())
<br />        {
<br />            </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$param</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">();
<br />            if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">))
<br />                </span><span class="default">$val </span><span class="keyword">= </span><span class="string">"'</span><span class="default">$val</span><span class="string">'"</span><span class="keyword">;
<br />            </span><span class="default">$fproto </span><span class="keyword">.= </span><span class="string">' = '</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">$need_comma </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">$fproto </span><span class="keyword">.= </span><span class="string">')'</span><span class="keyword">;
<br />    </span><span class="default">$fcall </span><span class="keyword">.= </span><span class="string">')'</span><span class="keyword">;
<br />
<br />    </span><span class="default">$f </span><span class="keyword">= </span><span class="string">"function </span><span class="default">$fproto</span><span class="string">"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;
<br />    </span><span class="default">$f </span><span class="keyword">.= </span><span class="string">'{return '</span><span class="keyword">.</span><span class="default">$fcall</span><span class="keyword">.</span><span class="string">';}'</span><span class="keyword">;
<br />
<br />    eval(</span><span class="default">$f</span><span class="keyword">);
<br />    return </span><span class="default">true</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126024">  <div class="votes">
    <div id="Vu126024">
    <a href="/manual/vote-note.php?id=126024&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126024">
    <a href="/manual/vote-note.php?id=126024&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126024" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126024" class="name">
  <strong class="user"><em>lombax85 at gmail dot com</em></strong></a><a class="genanchor" href="#126024"> &para;</a><div class="date" title="2021-04-18 02:40"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126024">
<div class="phpcode"><code><span class="html">For who *really* needs the create_function() on php8 (because of legacy code that cannot be changed easily) there is this: "composer require lombax85/create_function".</span></code></div>
  </div>
 </div>
  <div class="note" id="85391">  <div class="votes">
    <div id="Vu85391">
    <a href="/manual/vote-note.php?id=85391&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85391">
    <a href="/manual/vote-note.php?id=85391&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85391" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85391" class="name">
  <strong class="user"><em>neo at nowhere dot com</em></strong></a><a class="genanchor" href="#85391"> &para;</a><div class="date" title="2008-08-28 01:56"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85391">
<div class="phpcode"><code><span class="html">In response to kkaiser at revolution-records dot net's note, even tho PHP will allow you to use <br />&lt;?<br />$myfunc = create_function('$this', $code);<br />?&gt;<br />You can NOT use a reference to "$this" inside of the anonymous function, as PHP will complain that you are using a reference to "$this" in a non-object context.<br /><br />Currently, I have not found a work-around for this...</span></code></div>
  </div>
 </div>
  <div class="note" id="80904">  <div class="votes">
    <div id="Vu80904">
    <a href="/manual/vote-note.php?id=80904&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80904">
    <a href="/manual/vote-note.php?id=80904&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80904" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80904" class="name">
  <strong class="user"><em>Rene Saarsoo</em></strong></a><a class="genanchor" href="#80904"> &para;</a><div class="date" title="2008-02-06 02:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80904">
<div class="phpcode"><code><span class="html">Here has been some discussion about the "memory leak" create_function() can create.<br /><br />What create_function() actually does, is creating an ordinary function with name chr(0).lambda_n where n is some number:<br /><br /><span class="default">&lt;?php<br />$f </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">'return 1;'</span><span class="keyword">);<br /><br />function </span><span class="default">lambda_1</span><span class="keyword">() { return </span><span class="default">2</span><span class="keyword">; }<br /><br /></span><span class="default">$g </span><span class="keyword">= </span><span class="string">"lambda_1"</span><span class="keyword">;<br />echo </span><span class="default">$g</span><span class="keyword">(); </span><span class="comment">// outputs: 2<br /><br /></span><span class="default">$h </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">).</span><span class="string">"lambda_1"</span><span class="keyword">;<br />echo </span><span class="default">$h</span><span class="keyword">(); </span><span class="comment">// outputs: 1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77177">  <div class="votes">
    <div id="Vu77177">
    <a href="/manual/vote-note.php?id=77177&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77177">
    <a href="/manual/vote-note.php?id=77177&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77177" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77177" class="name">
  <strong class="user"><em>TSE-WebDesign</em></strong></a><a class="genanchor" href="#77177"> &para;</a><div class="date" title="2007-08-18 09:55"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77177">
<div class="phpcode"><code><span class="html">Here's how to call a runtime-created function from another runtime-created function:<br /><span class="default">&lt;?php<br />        $get_func </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$func'</span><span class="keyword">, </span><span class="string">'return substr($func,1);'</span><span class="keyword">);<br />        </span><span class="default">$get_value </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$index'</span><span class="keyword">,</span><span class="string">'return pow($index,$index);'</span><span class="keyword">);<br />        </span><span class="default">$another_func </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a'</span><span class="keyword">, </span><span class="string">'$func="\x00"."'</span><span class="keyword">.</span><span class="default">$get_func</span><span class="keyword">(</span><span class="default">$get_value</span><span class="keyword">).</span><span class="string">'";return $func($a);'</span><span class="keyword">);<br />        echo </span><span class="default">$another_func</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">); </span><span class="comment"># result is 4<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70194">  <div class="votes">
    <div id="Vu70194">
    <a href="/manual/vote-note.php?id=70194&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70194">
    <a href="/manual/vote-note.php?id=70194&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70194" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70194" class="name">
  <strong class="user"><em>Phlyst</em></strong></a><a class="genanchor" href="#70194"> &para;</a><div class="date" title="2006-10-06 05:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70194">
<div class="phpcode"><code><span class="html">In reply to info at adaniels dot nl:<br /><br />You may not be able to use __FUNCTION__ in a lambda (thanks for pointing it out; I was having that problem just now), but you can use $GLOBALS to work around it if you're assigning the function to a variable. I reimplemented array_walk_recursive() in PHP4 like this:<br /><br /><span class="default">&lt;?php<br />$array_walk_recursive </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'&amp;$array, $callback'</span><span class="keyword">,<br />    </span><span class="string">'foreach($array as $element) {<br />        if(is_array($element)) {<br />            $funky = $GLOBALS["array_walk_recursive"];<br />            $funky($element, $callback);<br />        }<br />        else {<br />            $callback($element);<br />        }<br />    }'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62577">  <div class="votes">
    <div id="Vu62577">
    <a href="/manual/vote-note.php?id=62577&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62577">
    <a href="/manual/vote-note.php?id=62577&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62577" title="50% like this...">
    0
    </div>
  </div>
  <a href="#62577" class="name">
  <strong class="user"><em>josh at janrain dot com</em></strong></a><a class="genanchor" href="#62577"> &para;</a><div class="date" title="2006-03-03 10:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62577">
<div class="phpcode"><code><span class="html">Beware! This is merely a convenience function that generates a unique name for a regular function. It is *not* a closure or even an anonymous function. It is just a regular function that gets named for you.</span></code></div>
  </div>
 </div>
  <div class="note" id="60913">  <div class="votes">
    <div id="Vu60913">
    <a href="/manual/vote-note.php?id=60913&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60913">
    <a href="/manual/vote-note.php?id=60913&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60913" title="50% like this...">
    0
    </div>
  </div>
  <a href="#60913" class="name">
  <strong class="user"><em>Joshua E Cook</em></strong></a><a class="genanchor" href="#60913"> &para;</a><div class="date" title="2006-01-19 04:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60913">
<div class="phpcode"><code><span class="html">Functions created by create_function() cannot return a value by reference.  The function below creates a function that can.  The arguments are the same as create_function().  Note that these arguments are passed, unmodified, to eval(), so be sure that data passed in is sanitized.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/** <br /> * create_ref_function<br /> * Create an anonymous (lambda-style) function<br /> * which returns a reference<br /> * see <a href="http://php.net/create_function" rel="nofollow" target="_blank">http://php.net/create_function</a><br /> */<br /></span><span class="keyword">function<br /></span><span class="default">create_ref_function</span><span class="keyword">( </span><span class="default">$args</span><span class="keyword">, </span><span class="default">$code </span><span class="keyword">)<br />{<br />    static </span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />    </span><span class="default">$functionName </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'ref_lambda_%d'</span><span class="keyword">,++</span><span class="default">$n</span><span class="keyword">);<br />    <br />    </span><span class="default">$declaration </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'function &amp;%s(%s) {%s}'</span><span class="keyword">,</span><span class="default">$functionName</span><span class="keyword">,</span><span class="default">$args</span><span class="keyword">,</span><span class="default">$body</span><span class="keyword">);<br />    <br />    eval(</span><span class="default">$declaration</span><span class="keyword">);<br />    <br />    return </span><span class="default">$functionName</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40611">  <div class="votes">
    <div id="Vu40611">
    <a href="/manual/vote-note.php?id=40611&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40611">
    <a href="/manual/vote-note.php?id=40611&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40611" title="50% like this...">
    0
    </div>
  </div>
  <a href="#40611" class="name">
  <strong class="user"><em>MagicalTux at FF.ST</em></strong></a><a class="genanchor" href="#40611"> &para;</a><div class="date" title="2004-03-09 10:25"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40611">
<div class="phpcode"><code><span class="html">neo at gothic-chat d0t de wrote :<br />Beware of memory-leaks, the garbage-collection seems to 'oversee' dynamically created functions!<br /><br />Not really...<br /><br />In fact, PHP can not "unassign" functions. So if you create a function, it won't be deleted until the end of the script, even if you unset the variable containing its name.<br /><br />If you need to change a part of a function everytime you run a loop, think of a way to make a more general function or try using eval :) (functions are made to be re-used. If you need to run your own piece of code once, eval is much better).</span></code></div>
  </div>
 </div>
  <div class="note" id="30886">  <div class="votes">
    <div id="Vu30886">
    <a href="/manual/vote-note.php?id=30886&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30886">
    <a href="/manual/vote-note.php?id=30886&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30886" title="50% like this...">
    0
    </div>
  </div>
  <a href="#30886" class="name">
  <strong class="user"><em>DB on music_ml at yahoo dot com dot ar</em></strong></a><a class="genanchor" href="#30886"> &para;</a><div class="date" title="2003-04-02 04:58"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30886">
<div class="phpcode"><code><span class="html">[EDIT by danbrown AT php DOT net: Combined user-corrected post with previous (incorrect) post.]
<br />
<br />You can't refer to a class variable from an anonymous function inside a class method using $this.  Anonymous functions don't inherit the method scope.  You'll have to do this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">AnyClass </span><span class="keyword">{
<br /> 
<br /> var </span><span class="default">$classVar </span><span class="keyword">= </span><span class="string">'some regular expression pattern'</span><span class="keyword">;
<br />
<br /> function </span><span class="default">classMethod</span><span class="keyword">() {
<br />
<br />   </span><span class="default">$_anonymFunc </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">( </span><span class="string">'$arg1, $arg2'</span><span class="keyword">, </span><span class="string">'if ( eregi($arg2, $arg1) ) { return true; } else { return false; } ' </span><span class="keyword">);
<br />
<br />   </span><span class="default">$willWork </span><span class="keyword">= </span><span class="default">$_anonymFunc</span><span class="keyword">(</span><span class="string">'some string'</span><span class="keyword">, </span><span class="default">$classVar</span><span class="keyword">);
<br /> 
<br /> }
<br />
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113275">  <div class="votes">
    <div id="Vu113275">
    <a href="/manual/vote-note.php?id=113275&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113275">
    <a href="/manual/vote-note.php?id=113275&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113275" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#113275" class="name">
  <strong class="user"><em>CertaiN</em></strong></a><a class="genanchor" href="#113275"> &para;</a><div class="date" title="2013-09-19 11:49"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113275">
<div class="phpcode"><code><span class="html">Best wapper:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">create_lambda</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">) {<br />    static </span><span class="default">$func</span><span class="keyword">;<br />    if (!isset(</span><span class="default">$func</span><span class="keyword">[</span><span class="default">$args</span><span class="keyword">][</span><span class="default">$code</span><span class="keyword">])) {<br />        </span><span class="default">$func</span><span class="keyword">[</span><span class="default">$args</span><span class="keyword">][</span><span class="default">$code</span><span class="keyword">] = </span><span class="default">create_function</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$func</span><span class="keyword">[</span><span class="default">$args</span><span class="keyword">][</span><span class="default">$code</span><span class="keyword">];<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91949">  <div class="votes">
    <div id="Vu91949">
    <a href="/manual/vote-note.php?id=91949&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91949">
    <a href="/manual/vote-note.php?id=91949&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91949" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#91949" class="name">
  <strong class="user"><em>edgar at goodforall dot eu</em></strong></a><a class="genanchor" href="#91949"> &para;</a><div class="date" title="2009-07-02 07:45"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91949">
<div class="phpcode"><code><span class="html">Just a little toy I thought up, I would like to share. Creates an anonymous function, which let you use a class  as a function.<br /><br />In php 5.3 there is support for real functors  (trough __invoke):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">createFunctor</span><span class="keyword">(</span><span class="default">$className</span><span class="keyword">){<br />        </span><span class="default">$content </span><span class="keyword">= </span><span class="string">"<br />                static \$class;<br />                if(!\$class){<br />                        \$class = new </span><span class="default">$className</span><span class="string">;<br />                }<br />                return \$class-&gt;run(\$args);<br />        "</span><span class="keyword">;<br />        </span><span class="default">$f </span><span class="keyword">= </span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$args'</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">);<br />        return </span><span class="default">$f</span><span class="keyword">;<br /><br />}<br />class </span><span class="default">test </span><span class="keyword">{<br />        public function </span><span class="default">run</span><span class="keyword">(</span><span class="default">$args</span><span class="keyword">){<br />                print </span><span class="default">$args</span><span class="keyword">;<br />        }<br />}<br /></span><span class="default">$test </span><span class="keyword">= </span><span class="default">createFunctor</span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">);<br /></span><span class="default">$test</span><span class="keyword">(</span><span class="string">'hello world'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84955">  <div class="votes">
    <div id="Vu84955">
    <a href="/manual/vote-note.php?id=84955&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84955">
    <a href="/manual/vote-note.php?id=84955&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84955" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#84955" class="name">
  <strong class="user"><em>Alan FUNG</em></strong></a><a class="genanchor" href="#84955"> &para;</a><div class="date" title="2008-08-07 12:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84955">
<div class="phpcode"><code><span class="html">$f = create_function('','echo "function defined by create_function";');<br />$f();<br /><br />result:<br />function defined by create_function<br /><br />You may define no return in function body while you are using create_function.</span></code></div>
  </div>
 </div>
  <div class="note" id="60260">  <div class="votes">
    <div id="Vu60260">
    <a href="/manual/vote-note.php?id=60260&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60260">
    <a href="/manual/vote-note.php?id=60260&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60260" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#60260" class="name">
  <strong class="user"><em>boards at gmail dot com</em></strong></a><a class="genanchor" href="#60260"> &para;</a><div class="date" title="2005-12-31 11:18"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60260">
<div class="phpcode"><code><span class="html">If you were checking to see if a function is made properly, this would be a better way of checking:<br /><br /><span class="default">&lt;?php<br />$fnc </span><span class="keyword">= @</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$arg1,$arg2,$arg3'</span><span class="keyword">, </span><span class="string">'return true;'</span><span class="keyword">);<br /></span><span class="comment"># make that function whatever you want<br /></span><span class="keyword">if (empty(</span><span class="default">$fnc</span><span class="keyword">)) {<br />  die(</span><span class="string">'Could not create function $fnc.'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment"># although, the follow will NOT work<br /></span><span class="keyword">if (empty(</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$arg'</span><span class="keyword">, </span><span class="string">'return $arg;'</span><span class="keyword">))) {<br />  die(</span><span class="string">'Could not create anonymous function.'</span><span class="keyword">);<br />}<br /></span><span class="comment"># you would get an error regarding not being able to use a<br /># return value in writeable context (i.e. a return value is <br /># a const in C, and the function empty() doesn't use a<br /># const void* parameter<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="39217">  <div class="votes">
    <div id="Vu39217">
    <a href="/manual/vote-note.php?id=39217&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39217">
    <a href="/manual/vote-note.php?id=39217&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39217" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#39217" class="name">
  <strong class="user"><em>neo at gothic-chat d0t de</em></strong></a><a class="genanchor" href="#39217"> &para;</a><div class="date" title="2004-01-20 08:54"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39217">
<div class="phpcode"><code><span class="html">Beware of memory-leaks, the garbage-collection seems to 'oversee' dynamically created functions!<br /><br />I used a function like this to replace special characters in links with their htmlentities:<br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="default">preg_replace_callback </span><span class="keyword">(<br />    </span><span class="string">"/(&lt;(frame src|a href|form action)=\")([^\"]+)(\"[^&gt;]*&gt;)/i"</span><span class="keyword">,<br />    </span><span class="default">create_function </span><span class="keyword">(<br />        </span><span class="string">'$matches'</span><span class="keyword">,<br />        </span><span class="string">'return $matches[1] . htmlentities ($matches[3]) . $matches[4];'<br />    </span><span class="keyword">),<br />    </span><span class="default">$text</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />After 1000 calls, the process used about 5MB more than before. In my situation this boosted up the memory-size of one PHP-process up to over 100MB!<br /><br />In such cases, better store the function in a global variable.</span></code></div>
  </div>
 </div>
  <div class="note" id="13841">  <div class="votes">
    <div id="Vu13841">
    <a href="/manual/vote-note.php?id=13841&amp;page=function.create-function&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13841">
    <a href="/manual/vote-note.php?id=13841&amp;page=function.create-function&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13841" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#13841" class="name">
  <strong class="user"><em>x-empt[a_t]ispep.cx</em></strong></a><a class="genanchor" href="#13841"> &para;</a><div class="date" title="2001-07-05 11:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13841">
<div class="phpcode"><code><span class="html">Create_function enables the ability to change the scope of functions.  You might have a class where it needs to define a GLOBAL function.  This is possible, like:
<br />
<br /><span class="default">&lt;?php
<br />        </span><span class="keyword">class </span><span class="default">blah </span><span class="keyword">{
<br />                function </span><span class="default">blah</span><span class="keyword">() {
<br />                        </span><span class="default">$z</span><span class="keyword">=</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$arg1string'</span><span class="keyword">,</span><span class="string">'return "function-z-".$arg1string;'</span><span class="keyword">);
<br />                        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'z'</span><span class="keyword">]=</span><span class="default">$z</span><span class="keyword">;
<br />                }
<br />        }
<br />        </span><span class="default">$blah_object</span><span class="keyword">=new </span><span class="default">blah</span><span class="keyword">;
<br />
<br />        </span><span class="default">$result</span><span class="keyword">=</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'z'</span><span class="keyword">](</span><span class="string">'Argument 1 String'</span><span class="keyword">);
<br />        echo </span><span class="default">$result</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Making a function escape it's defined scope can be useful in many situations.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.create-function&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.create-function.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.funchand.php">Function handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.call-user-func.php" title="call_&#8203;user_&#8203;func">call_&#8203;user_&#8203;func</a>
                        </li>
                                                <li class="">
                            <a href="function.call-user-func-array.php" title="call_&#8203;user_&#8203;func_&#8203;array">call_&#8203;user_&#8203;func_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call.php" title="forward_&#8203;static_&#8203;call">forward_&#8203;static_&#8203;call</a>
                        </li>
                                                <li class="">
                            <a href="function.forward-static-call-array.php" title="forward_&#8203;static_&#8203;call_&#8203;array">forward_&#8203;static_&#8203;call_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-arg.php" title="func_&#8203;get_&#8203;arg">func_&#8203;get_&#8203;arg</a>
                        </li>
                                                <li class="">
                            <a href="function.func-get-args.php" title="func_&#8203;get_&#8203;args">func_&#8203;get_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.func-num-args.php" title="func_&#8203;num_&#8203;args">func_&#8203;num_&#8203;args</a>
                        </li>
                                                <li class="">
                            <a href="function.function-exists.php" title="function_&#8203;exists">function_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-functions.php" title="get_&#8203;defined_&#8203;functions">get_&#8203;defined_&#8203;functions</a>
                        </li>
                                                <li class="">
                            <a href="function.register-shutdown-function.php" title="register_&#8203;shutdown_&#8203;function">register_&#8203;shutdown_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.register-tick-function.php" title="register_&#8203;tick_&#8203;function">register_&#8203;tick_&#8203;function</a>
                        </li>
                                                <li class="">
                            <a href="function.unregister-tick-function.php" title="unregister_&#8203;tick_&#8203;function">unregister_&#8203;tick_&#8203;function</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="current">
                        <a href="function.create-function.php" title="create_&#8203;function">create_&#8203;function</a>
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
