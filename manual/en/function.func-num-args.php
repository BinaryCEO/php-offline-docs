<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: func_num_args - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.func-num-args.php">
 <link rel="shorturl" href="https://www.php.net/func-num-args">
 <link rel="alternate" href="https://www.php.net/func-num-args" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.funchand.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.func-get-args.php">
 <link rel="next" href="https://www.php.net/manual/en/function.function-exists.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.func-num-args.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.func-num-args.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.func-num-args.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.func-num-args.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.func-num-args.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.func-num-args.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.func-num-args.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.func-num-args.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.func-num-args.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.func-num-args.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.func-num-args.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the number of arguments passed to the function" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: func_num_args - Manual" />
<meta name="twitter:description" content="Returns the number of arguments passed to the function" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: func_num_args - Manual" />
<meta itemprop="description" content="Returns the number of arguments passed to the function" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the number of arguments passed to the function" />

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
        <a href="function.function-exists.php">
          function_exists &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.func-get-args.php">
          &laquo; func_get_args        </a>
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
            <option value='en/function.func-num-args.php' selected="selected">English</option>
            <option value='de/function.func-num-args.php'>German</option>
            <option value='es/function.func-num-args.php'>Spanish</option>
            <option value='fr/function.func-num-args.php'>French</option>
            <option value='it/function.func-num-args.php'>Italian</option>
            <option value='ja/function.func-num-args.php'>Japanese</option>
            <option value='pt_BR/function.func-num-args.php'>Brazilian Portuguese</option>
            <option value='ru/function.func-num-args.php'>Russian</option>
            <option value='tr/function.func-num-args.php'>Turkish</option>
            <option value='uk/function.func-num-args.php'>Ukrainian</option>
            <option value='zh/function.func-num-args.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.func-num-args" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">func_num_args</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">func_num_args</span> &mdash; <span class="dc-title">Returns the number of arguments passed to the function</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.func-num-args-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>func_num_args</strong></span>(): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Gets the number of arguments passed to the function.
  </p>
  <p class="para">
   This function may be used in conjunction with 
   <span class="function"><a href="function.func-get-arg.php" class="function">func_get_arg()</a></span> and <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>
   to allow user-defined functions to accept variable-length argument lists.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.func-num-args-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.func-num-args-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the number of arguments passed into the current user-defined
   function.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.func-num-args-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Generates a warning if called from outside of a user-defined function.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.func-num-args-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5406">
    <p><strong>Example #1 <span class="function"><strong>func_num_args()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">foo</span><span style="color: #007700">()<br />{<br />    echo </span><span style="color: #DD0000">"Number of arguments: "</span><span style="color: #007700">, </span><span style="color: #0000BB">func_num_args</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">foo</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);   <br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Number of arguments: 3</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.func-num-args-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">As of PHP 8.0.0, the func_*() family of
functions is intended to be mostly transparent with regard to named arguments,
by treating the arguments as if they were all passed positionally,
and missing arguments are replaced with their defaults.
This function ignores the collection of unknown named variadic arguments.
Unknown named arguments which are collected can only be accessed through the variadic parameter.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.func-num-args-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="functions.arguments.php#functions.variable-arg-list" class="link"><code class="literal">...</code> syntax</a></li>
    <li><span class="function"><a href="function.func-get-arg.php" class="function" rel="rdfs-seeAlso">func_get_arg()</a> - Return an item from the argument list</span></li>
    <li><span class="function"><a href="function.func-get-args.php" class="function" rel="rdfs-seeAlso">func_get_args()</a> - Returns an array comprising a function's argument list</span></li>
    <li><span class="methodname"><a href="reflectionfunctionabstract.getnumberofparameters.php" class="methodname" rel="rdfs-seeAlso">ReflectionFunctionAbstract::getNumberOfParameters()</a> - Gets number of parameters</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/funchand/functions/func-num-args.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.func-num-args%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.func-num-args&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.func-num-args.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="56534">  <div class="votes">
    <div id="Vu56534">
    <a href="/manual/vote-note.php?id=56534&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56534">
    <a href="/manual/vote-note.php?id=56534&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56534" title="78% like this...">
    41
    </div>
  </div>
  <a href="#56534" class="name">
  <strong class="user"><em>jared at ws-db dot com</em></strong></a><a class="genanchor" href="#56534"> &para;</a><div class="date" title="2005-09-06 09:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56534">
<div class="phpcode"><code><span class="html">Just a note for anyone wondering. This function doesn't include params that have a default value, unless you pass one in to overwrite the default param value. Not sure if that makes sense, so here's an example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">helloWorld</span><span class="keyword">(</span><span class="default">$ArgA</span><span class="keyword">, </span><span class="default">$ArgB</span><span class="keyword">=</span><span class="string">"HelloWorld!"</span><span class="keyword">) {
<br />  return </span><span class="default">func_num_args</span><span class="keyword">();
<br />}
<br />
<br /></span><span class="comment">// The following will return 1
<br /></span><span class="default">$Returns1 </span><span class="keyword">= </span><span class="default">helloWorld</span><span class="keyword">(</span><span class="string">"HelloWorld!"</span><span class="keyword">);
<br />
<br /></span><span class="comment">// The following will return 2
<br /></span><span class="default">$Returns2 </span><span class="keyword">= </span><span class="default">helloWorld</span><span class="keyword">(</span><span class="string">"HelloWorld!"</span><span class="keyword">, </span><span class="string">"HowdyWorld!"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91863">  <div class="votes">
    <div id="Vu91863">
    <a href="/manual/vote-note.php?id=91863&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91863">
    <a href="/manual/vote-note.php?id=91863&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91863" title="66% like this...">
    10
    </div>
  </div>
  <a href="#91863" class="name">
  <strong class="user"><em>Dennis Robinson from basnetworks dot net</em></strong></a><a class="genanchor" href="#91863"> &para;</a><div class="date" title="2009-06-29 09:29"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91863">
<div class="phpcode"><code><span class="html">This function comes in handy, and I believe is the only solution, when you have an optional parameter that can take any type of data.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// $data can be of any type, including null<br /></span><span class="keyword">function </span><span class="default">my_function</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$data </span><span class="keyword">!== </span><span class="default">null</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Do something with $data<br />        // If you call my_function('something'), this WILL NOT be reached<br />        // If you call my_function('something', null), this WILL NOT be reached<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />The problem with the above function is that you will never be able to use null as the value for $data.  To fix this, use func_num_args() like so:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// $data can be of any type, including null<br /></span><span class="keyword">function </span><span class="default">my_function</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$data </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />    if (</span><span class="default">func_num_args</span><span class="keyword">() &gt;= </span><span class="default">2</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Do something with $data<br />        // If you call my_function('something'), this WILL NOT be reached<br />        // If you call my_function('something', null), this WILL be reached<br />    </span><span class="keyword">}<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This solution works because func_num_args() reports exactly how many arguments were passed when the function was called.  It does not take into account when default argument values are used.</span></code></div>
  </div>
 </div>
  <div class="note" id="107883">  <div class="votes">
    <div id="Vu107883">
    <a href="/manual/vote-note.php?id=107883&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107883">
    <a href="/manual/vote-note.php?id=107883&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107883" title="64% like this...">
    4
    </div>
  </div>
  <a href="#107883" class="name">
  <strong class="user"><em>luisguillermo dot quevedovelez at gmail dot com</em></strong></a><a class="genanchor" href="#107883"> &para;</a><div class="date" title="2012-03-13 07:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107883">
<div class="phpcode"><code><span class="html">I had defined a function function_name(){ ...} as a drupal callback.<br />I try to get how many params where passed<br /><br />I got a Error and my Site falls down<br /><br />I've replaced func_get_args() instead func_num_args() and my Site was restored.<br /><br />I conclude you can not use  func_num_args() in callbacks.<br /><br />Hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="20315">  <div class="votes">
    <div id="Vu20315">
    <a href="/manual/vote-note.php?id=20315&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20315">
    <a href="/manual/vote-note.php?id=20315&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20315" title="54% like this...">
    1
    </div>
  </div>
  <a href="#20315" class="name">
  <strong class="user"><em>thalis at NOSPAMcs dot pitt dot edu</em></strong></a><a class="genanchor" href="#20315"> &para;</a><div class="date" title="2002-03-29 12:05"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20315">
<div class="phpcode"><code><span class="html">The idea of func_get_args() is to construct functions of variable number of parameters like
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">var_param_func</span><span class="keyword">(){
<br />    if(</span><span class="default">func_num_args</span><span class="keyword">()==</span><span class="default">0</span><span class="keyword">){
<br />        </span><span class="comment">//do one thing
<br />    </span><span class="keyword">}
<br />    if(</span><span class="default">func_num_args</span><span class="keyword">()==</span><span class="default">1</span><span class="keyword">)
<br />        </span><span class="comment">//do another thing
<br />        //get the args with func_get_args()
<br />    </span><span class="keyword">}
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="20815">  <div class="votes">
    <div id="Vu20815">
    <a href="/manual/vote-note.php?id=20815&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20815">
    <a href="/manual/vote-note.php?id=20815&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20815" title="52% like this...">
    1
    </div>
  </div>
  <a href="#20815" class="name">
  <strong class="user"><em>ashley at dcs dot warwick dot ac dot uk</em></strong></a><a class="genanchor" href="#20815"> &para;</a><div class="date" title="2002-04-17 04:40"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20815">
<div class="phpcode"><code><span class="html">If you want to pass the parameters on intact to another function, use func_get_args and call_user_func_array (careful - this one is only available in recent PHP versions).  For example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/* Print an HTML tag.  This accepts a variable number of arguments:
<br />   the first should be the name of the tag, followed by pairs of
<br />   arguments that describe keys and values.  The values are printed
<br />   with surrounding double quote characters.  */
<br /></span><span class="keyword">function </span><span class="default">printTag</span><span class="keyword">() {
<br />  </span><span class="default">$numArgs </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();
<br />  if (</span><span class="default">$numArgs </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) die(</span><span class="string">"printTag given no arguments"</span><span class="keyword">);
<br />  
<br />  echo </span><span class="string">"&lt;" </span><span class="keyword">. </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);
<br />  for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$numArgs</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">) {
<br />    echo </span><span class="string">" " </span><span class="keyword">. </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />    if (</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">$numArgs</span><span class="keyword">)
<br />      echo </span><span class="string">"=\"" </span><span class="keyword">. </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">) . </span><span class="string">"\""</span><span class="keyword">;
<br />  }
<br />  echo </span><span class="string">"&gt;"</span><span class="keyword">;
<br />  
<br />}
<br />
<br /></span><span class="comment">/* Print an HTML tag with a newline on the end */
<br /></span><span class="keyword">function </span><span class="default">printTagNL</span><span class="keyword">() {
<br />  </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();
<br />  </span><span class="default">call_user_func_array</span><span class="keyword">(</span><span class="string">"printTag"</span><span class="keyword">, </span><span class="default">$args</span><span class="keyword">);
<br />  echo </span><span class="string">"\n"</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">printTagNL</span><span class="keyword">(</span><span class="string">"input"</span><span class="keyword">, </span><span class="string">"type"</span><span class="keyword">, </span><span class="string">"hidden"</span><span class="keyword">, </span><span class="string">"name"</span><span class="keyword">, </span><span class="string">"SORTORDER"</span><span class="keyword">, </span><span class="string">"value"</span><span class="keyword">, </span><span class="default">$columnNo</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121253">  <div class="votes">
    <div id="Vu121253">
    <a href="/manual/vote-note.php?id=121253&amp;page=function.func-num-args&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121253">
    <a href="/manual/vote-note.php?id=121253&amp;page=function.func-num-args&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121253" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121253" class="name">
  <strong class="user"><em>tongcheong77 at gmail dot com</em></strong></a><a class="genanchor" href="#121253"> &para;</a><div class="date" title="2017-06-20 06:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121253">
<div class="phpcode"><code><span class="html">If you are using PHP 7 and func_num_args is in your base class which you extended, you can pass your arguments with the 'spat' operator.<br /><br />class Sql {<br /><br />public function doGetWhere(...$args) {<br /><br />$num_args = func_num_args();<br />      $args_list = func_get_args();<br /><br />      echo '&lt;pre&gt;';<br />      var_dump($args_list);<br />      echo '&lt;pre&gt;';<br />  }<br />}<br /><br />class Member extends Sql {<br /><br />public function getWhere(...$args) {<br /><br />   $this-&gt;doGetWhere(...$args);<br /><br />      }<br />}<br /><br />$member = new Member();<br />$member-&gt;getWhere('first_name','last_name','userlevel','email','where','email','=',$sub_email);<br /><br />However, take note that if you 'new up' the 'Sql' class in your 'Member' class above, instead of extending it, you will not need to pass your arguments as a variable. Just my two cents. -Bruce tong</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.func-num-args&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.func-num-args.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                    <li class="">
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
