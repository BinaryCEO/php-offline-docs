<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Arrow Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/functions.arrow.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/functions.arrow.php">
 <link rel="alternate" href="https://www.php.net/manual/en/functions.arrow.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.functions.php">
 <link rel="prev" href="https://www.php.net/manual/en/functions.anonymous.php">
 <link rel="next" href="https://www.php.net/manual/en/functions.first_class_callable_syntax.php">

 <link rel="alternate" href="https://www.php.net/manual/en/functions.arrow.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/functions.arrow.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/functions.arrow.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/functions.arrow.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/functions.arrow.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/functions.arrow.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/functions.arrow.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/functions.arrow.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/functions.arrow.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/functions.arrow.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/functions.arrow.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Arrow Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Arrow Functions - Manual" />
<meta name="twitter:description" content="Arrow Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Arrow Functions - Manual" />
<meta itemprop="description" content="Arrow Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Arrow Functions" />

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
        <a href="functions.first_class_callable_syntax.php">
          First class callable syntax &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="functions.anonymous.php">
          &laquo; Anonymous functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.functions.php'>Functions</a></li>      </ul>
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
            <option value='en/functions.arrow.php' selected="selected">English</option>
            <option value='de/functions.arrow.php'>German</option>
            <option value='es/functions.arrow.php'>Spanish</option>
            <option value='fr/functions.arrow.php'>French</option>
            <option value='it/functions.arrow.php'>Italian</option>
            <option value='ja/functions.arrow.php'>Japanese</option>
            <option value='pt_BR/functions.arrow.php'>Brazilian Portuguese</option>
            <option value='ru/functions.arrow.php'>Russian</option>
            <option value='tr/functions.arrow.php'>Turkish</option>
            <option value='uk/functions.arrow.php'>Ukrainian</option>
            <option value='zh/functions.arrow.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="functions.arrow" class="sect1">
   <h2 class="title">Arrow Functions</h2>

   <p class="simpara">
    Arrow functions were introduced in PHP 7.4 as a more concise syntax for 
    <a href="functions.anonymous.php" class="link">anonymous functions</a>.
   </p>
   <p class="simpara">
    Both anonymous functions and arrow functions are implemented using the 
    <a href="class.closure.php" class="link"><span class="classname"><a href="class.closure.php" class="classname">Closure</a></span></a> class.
   </p>

   <p class="simpara">
    Arrow functions have the basic form 
    <code class="code">fn (argument_list) =&gt; expr</code>.
   </p>

   <p class="simpara">
    Arrow functions support the same features as 
    <a href="functions.anonymous.php" class="link">anonymous functions</a>, 
    except that using variables from the parent scope is always automatic.
   </p>

   <p class="simpara">
    When a variable used in the expression is defined in the parent scope 
    it will be implicitly captured by-value.
    In the following example, the functions <var class="varname">$fn1</var> and 
    <var class="varname">$fn2</var> behave the same way. 
   </p>

   <p class="para">
    <div class="example" id="example-245">
     <p><strong>Example #1 Arrow functions capture variables by value automatically</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$y </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$fn1 </span><span style="color: #007700">= fn(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x </span><span style="color: #007700">+ </span><span style="color: #0000BB">$y</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// equivalent to using $y by value:<br /></span><span style="color: #0000BB">$fn2 </span><span style="color: #007700">= function (</span><span style="color: #0000BB">$x</span><span style="color: #007700">) use (</span><span style="color: #0000BB">$y</span><span style="color: #007700">) {<br />    return </span><span style="color: #0000BB">$x </span><span style="color: #007700">+ </span><span style="color: #0000BB">$y</span><span style="color: #007700">;<br />};<br /><br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$fn1</span><span style="color: #007700">(</span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
4
</pre></div>
      </div>
    </div>
   </p>
   <p class="simpara">
    This also works if the arrow functions are nested: 
   </p>
   <p class="para">
    <div class="example" id="example-246">
     <p><strong>Example #2 Arrow functions capture variables by value automatically, even when nested</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$z </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fn </span><span style="color: #007700">= fn(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) =&gt; fn(</span><span style="color: #0000BB">$y</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x </span><span style="color: #007700">* </span><span style="color: #0000BB">$y </span><span style="color: #007700">+ </span><span style="color: #0000BB">$z</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">// Outputs 51<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$fn</span><span style="color: #007700">(</span><span style="color: #0000BB">5</span><span style="color: #007700">)(</span><span style="color: #0000BB">10</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    Similarly to anonymous functions, 
    the arrow function syntax allows arbitrary function signatures,
    including parameter and return types, default values, variadics,
    as well as by-reference passing and returning.
    All of the following are valid examples of arrow functions: 
   </p>
   <p class="para">
    <div class="example" id="example-247">
     <p><strong>Example #3 Examples of arrow functions</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">fn(array </span><span style="color: #0000BB">$x</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />static fn(</span><span style="color: #0000BB">$x</span><span style="color: #007700">): </span><span style="color: #0000BB">int </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />fn(</span><span style="color: #0000BB">$x </span><span style="color: #007700">= </span><span style="color: #0000BB">42</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />fn(&amp;</span><span style="color: #0000BB">$x</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />fn&amp;(</span><span style="color: #0000BB">$x</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">;<br />fn(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, ...</span><span style="color: #0000BB">$rest</span><span style="color: #007700">) =&gt; </span><span style="color: #0000BB">$rest</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   <p class="simpara">
    Arrow functions use by-value variable binding.
    This is roughly equivalent to performing a <code class="code">use($x)</code> for every 
    variable <var class="varname">$x</var> used inside the arrow function.
    A by-value binding means that it is not possible to modify any values 
    from the outer scope. 
    <a href="functions.anonymous.php" class="link">Anonymous functions</a> 
    can be used instead for by-ref bindings.
   </p>
   <p class="para">
    <div class="example" id="example-248">
     <p><strong>Example #4 Values from the outer scope cannot be modified by arrow functions</strong></p>
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$fn </span><span style="color: #007700">= fn() =&gt; </span><span style="color: #0000BB">$x</span><span style="color: #007700">++; </span><span style="color: #FF8000">// Has no effect<br /></span><span style="color: #0000BB">$fn</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">);  </span><span style="color: #FF8000">// Outputs 1<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
   
   <div class="sect2">
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
         <td>7.4.0</td>
         <td>
          Arrow functions became available.
         </td>
        </tr>

       </tbody>
      
     </table>

    </p>
   </div>

   <div class="sect2">
    <h3 class="title">Notes</h3>
    <blockquote class="note"><p><strong class="note">Note</strong>: 
     <span class="simpara">
      It is possible to use <span class="function"><a href="function.func-num-args.php" class="function">func_num_args()</a></span>,
      <span class="function"><a href="function.func-get-arg.php" class="function">func_get_arg()</a></span>, and <span class="function"><a href="function.func-get-args.php" class="function">func_get_args()</a></span>
      from within an arrow function.
     </span>
    </p></blockquote>
   </div>
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/functions.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunctions.arrow%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=functions.arrow&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.arrow.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125673">  <div class="votes">
    <div id="Vu125673">
    <a href="/manual/vote-note.php?id=125673&amp;page=functions.arrow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125673">
    <a href="/manual/vote-note.php?id=125673&amp;page=functions.arrow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125673" title="75% like this...">
    49
    </div>
  </div>
  <a href="#125673" class="name">
  <strong class="user"><em>InvisibleSmiley</em></strong></a><a class="genanchor" href="#125673"> &para;</a><div class="date" title="2021-01-12 08:07"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125673">
<div class="phpcode"><code><span class="html">Unlike anonymous functions, arrow functions cannot have a void return type declaration.<br /><br />May seem obvious, but if you thought you could make use of the benefits of arrow functions (using variables from the parent scope) to simplify a function or method call, keep in mind that this is only possible if you do NOT tell PHP that the arrow function does indeed return void.</span></code></div>
  </div>
 </div>
  <div class="note" id="125213">  <div class="votes">
    <div id="Vu125213">
    <a href="/manual/vote-note.php?id=125213&amp;page=functions.arrow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125213">
    <a href="/manual/vote-note.php?id=125213&amp;page=functions.arrow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125213" title="66% like this...">
    43
    </div>
  </div>
  <a href="#125213" class="name">
  <strong class="user"><em>Koushil Mankali</em></strong></a><a class="genanchor" href="#125213"> &para;</a><div class="date" title="2020-07-27 06:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125213">
<div class="phpcode"><code><span class="html">In example 4  (Values from the outer scope cannot be modified by arrow functions)<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$fn </span><span class="keyword">= fn() =&gt; </span><span class="default">$x</span><span class="keyword">++; </span><span class="comment">// Has no effect<br /></span><span class="default">$fn</span><span class="keyword">();<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);  </span><span class="comment">// Outputs 1<br /><br /></span><span class="default">?&gt;<br /></span><br />Here we can use reference variable in fn(&amp;$x) and pass the value from function call $fn($x) so that we will get the output as expected with out using Anonymous functions.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$fn </span><span class="keyword">= fn(&amp;</span><span class="default">$x</span><span class="keyword">) =&gt; </span><span class="default">$x</span><span class="keyword">++; <br /></span><span class="default">$fn</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">); <br /><br /></span><span class="default">?&gt;<br /></span><br />Output : 2 (as expected)<br /><br />But here it will not take values from parent scope automatically but we have to pass them explicitly.</span></code></div>
  </div>
 </div>
  <div class="note" id="129898">  <div class="votes">
    <div id="Vu129898">
    <a href="/manual/vote-note.php?id=129898&amp;page=functions.arrow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129898">
    <a href="/manual/vote-note.php?id=129898&amp;page=functions.arrow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129898" title="92% like this...">
    12
    </div>
  </div>
  <a href="#129898" class="name">
  <strong class="user"><em>aaronw at catalyst dot net dot nz</em></strong></a><a class="genanchor" href="#129898"> &para;</a><div class="date" title="2024-12-05 12:17"><strong>9 months ago</strong></div>
  <div class="text" id="Hcom129898">
<div class="phpcode"><code><span class="html">If you're a JavaScript developer, here are the similarities and differences to JS arrow functions:<br /><br />Same:<br />-  Makes an anonymous function<br />-  Binds the value of "$this" to its value in the parent scope.<br />    - (along with all other variables of the parent scope. See note below)<br /><br />Different:<br />- You must write "fn()" instead of just "()"<br />- The function body is limited to just ONE expression<br />    - So no multi-line function bodies with "{" and "}"<br /><br />Same and Different at the same time:<br />- Binds ALL the variables of the parent scope<br />    - In JavaScript all functions are closures, binding to the variables in their parent scope (except for "this").<br />    - But in PHP, normal anonymous functions (defined with "function() {}") do NOT get access to the parent scope, unless they explicitly declare a closure with keyword "use"<br />    - PHP arrow functions, on the other hand, automatically bind to ALL variables in the parent scope. So, this makes them behave the same as JS functions, but be aware that in PHP this is special behavior unique to arrow functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="125984">  <div class="votes">
    <div id="Vu125984">
    <a href="/manual/vote-note.php?id=125984&amp;page=functions.arrow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125984">
    <a href="/manual/vote-note.php?id=125984&amp;page=functions.arrow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125984" title="72% like this...">
    27
    </div>
  </div>
  <a href="#125984" class="name">
  <strong class="user"><em>itsunclexo at gmail dot com</em></strong></a><a class="genanchor" href="#125984"> &para;</a><div class="date" title="2021-04-04 10:13"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125984">
<div class="phpcode"><code><span class="html">As you already know, variable bindings occur in arrow functions by "by-value".  That means, an arrow function returns a copy of the value of the variable used in it from the outer scope.<br /><br />Now let us see an example of how a arrow function returns a reference instead of a copy of a value.<br /><br /><span class="default">&lt;?php<br /><br />$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br /></span><span class="default">$fn </span><span class="keyword">= fn &amp;(&amp;</span><span class="default">$x</span><span class="keyword">) =&gt; </span><span class="default">$x</span><span class="keyword">;  </span><span class="comment">// Returns a reference<br /><br /></span><span class="default">$y </span><span class="keyword">= &amp;</span><span class="default">$fn</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);  </span><span class="comment">// Now $y represents the reference<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$y</span><span class="keyword">);  </span><span class="comment">// Outputs: 0<br /><br /></span><span class="default">$y </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;  </span><span class="comment">// Changing value of $y affects $x<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">);  </span><span class="comment">// Ouputs: 3<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125239">  <div class="votes">
    <div id="Vu125239">
    <a href="/manual/vote-note.php?id=125239&amp;page=functions.arrow&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125239">
    <a href="/manual/vote-note.php?id=125239&amp;page=functions.arrow&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125239" title="64% like this...">
    15
    </div>
  </div>
  <a href="#125239" class="name">
  <strong class="user"><em>dexen dot devries at gmail dot com</em></strong></a><a class="genanchor" href="#125239"> &para;</a><div class="date" title="2020-08-03 07:39"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125239">
<div class="phpcode"><code><span class="html">Beware compact() not being able to access (import) variables from external scope (known in versions: 7.4.0, 7.4.8) (bug: <a href="https://bugs.php.net/bug.php?id=78970" rel="nofollow" target="_blank">https://bugs.php.net/bug.php?id=78970</a>).<br /><br />A workaround is available - use the variable directly; this will cause it to be imported into the arrow function's namespace and make it available to the compact() too.<br /><br /><span class="default">&lt;?php<br />$aa </span><span class="keyword">= </span><span class="default">111</span><span class="keyword">;<br /></span><span class="default">$accessing_variable_works </span><span class="keyword">= fn(</span><span class="default">$bb</span><span class="keyword">) =&gt; [ </span><span class="default">$aa</span><span class="keyword">, </span><span class="default">$bb </span><span class="keyword">];<br /></span><span class="default">$compact_is_broken </span><span class="keyword">= fn(</span><span class="default">$bb</span><span class="keyword">) =&gt; </span><span class="default">compact</span><span class="keyword">(</span><span class="string">'aa'</span><span class="keyword">, </span><span class="string">'bb'</span><span class="keyword">);<br /></span><span class="default">$compact_can_work_with_workaround </span><span class="keyword">= fn(</span><span class="default">$bb</span><span class="keyword">) =&gt; </span><span class="default">compact</span><span class="keyword">(</span><span class="string">'aa'</span><span class="keyword">, </span><span class="string">'bb'</span><span class="keyword">) + [</span><span class="string">'workaround' </span><span class="keyword">=&gt; </span><span class="default">$aa</span><span class="keyword">];<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$accessing_variable_works</span><span class="keyword">(</span><span class="default">333</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$compact_is_broken</span><span class="keyword">(</span><span class="default">555</span><span class="keyword">));<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$compact_can_work_with_workaround</span><span class="keyword">(</span><span class="default">777</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />result:<br />array(2) {<br />  [0]=&gt;<br />  int(111)<br />  [1]=&gt;<br />  int(333)<br />}<br />PHP Notice:  compact(): Undefined variable: aa in /home/m/vlt/guitar/tlb/s/public_html/index.php on line 9<br />array(1) {<br />  ["bb"]=&gt;<br />  int(555)<br />}<br />array(3) {<br />  ["aa"]=&gt;<br />  int(111)<br />  ["bb"]=&gt;<br />  int(777)<br />  ["workaround"]=&gt;<br />  int(111)<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=functions.arrow&amp;repo=en&amp;redirect=https://www.php.net/manual/en/functions.arrow.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.functions.php">Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="functions.user-defined.php" title="User-&#8203;defined functions">User-&#8203;defined functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.arguments.php" title="Function parameters and arguments">Function parameters and arguments</a>
                        </li>
                                                <li class="">
                            <a href="functions.returning-values.php" title="Returning values">Returning values</a>
                        </li>
                                                <li class="">
                            <a href="functions.variable-functions.php" title="Variable functions">Variable functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.internal.php" title="Internal (built-&#8203;in) functions">Internal (built-&#8203;in) functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.anonymous.php" title="Anonymous functions">Anonymous functions</a>
                        </li>
                                                <li class="current">
                            <a href="functions.arrow.php" title="Arrow Functions">Arrow Functions</a>
                        </li>
                                                <li class="">
                            <a href="functions.first_class_callable_syntax.php" title="First class callable syntax">First class callable syntax</a>
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
