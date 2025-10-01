<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: empty - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.empty.php">
 <link rel="shorturl" href="https://www.php.net/empty">
 <link rel="alternate" href="https://www.php.net/empty" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.doubleval.php">
 <link rel="next" href="https://www.php.net/manual/en/function.floatval.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.empty.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.empty.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.empty.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.empty.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.empty.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.empty.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.empty.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.empty.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.empty.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.empty.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.empty.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Determine whether a variable is empty" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: empty - Manual" />
<meta name="twitter:description" content="Determine whether a variable is empty" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: empty - Manual" />
<meta itemprop="description" content="Determine whether a variable is empty" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Determine whether a variable is empty" />

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
        <a href="function.floatval.php">
          floatval &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.doubleval.php">
          &laquo; doubleval        </a>
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
            <option value='en/function.empty.php' selected="selected">English</option>
            <option value='de/function.empty.php'>German</option>
            <option value='es/function.empty.php'>Spanish</option>
            <option value='fr/function.empty.php'>French</option>
            <option value='it/function.empty.php'>Italian</option>
            <option value='ja/function.empty.php'>Japanese</option>
            <option value='pt_BR/function.empty.php'>Brazilian Portuguese</option>
            <option value='ru/function.empty.php'>Russian</option>
            <option value='tr/function.empty.php'>Turkish</option>
            <option value='uk/function.empty.php'>Ukrainian</option>
            <option value='zh/function.empty.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.empty" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">empty</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">empty</span> &mdash; <span class="dc-title">Determine whether a variable is empty</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.empty-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>empty</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$var</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Determine whether a variable is considered to be empty. A variable is considered empty if it does not exist or if its value equals <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. <span class="function"><strong>empty()</strong></span> does not generate a warning if the variable does not exist.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.empty-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">var</code></dt>
     <dd>
      <p class="para">
       Variable to be checked
      </p>
      <p class="para">
       No warning is generated if the variable does not exist.
       That means <span class="function"><strong>empty()</strong></span> is essentially the
       concise equivalent to <strong class="command">!isset($var) || $var == false</strong>.
       This also applies to nested structures, such as a multidimensional array or chained properties.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.empty-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">var</code> does not exist or has a value that is empty or equal to zero,
   aka falsey, see <a href="language.types.boolean.php#language.types.boolean.casting" class="link">conversion to boolean</a>.
   Otherwise returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.empty-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5635">
    <p><strong>Example #1 
     A simple <span class="function"><strong>empty()</strong></span> / <span class="function"><a href="function.isset.php" class="function">isset()</a></span>
     comparison.
    </strong></p>  
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var </span><span style="color: #007700">= </span><span style="color: #0000BB">0</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Evaluates to true because $var is empty<br /></span><span style="color: #007700">if (empty(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'$var is either 0, empty, or not set at all'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #FF8000">// Evaluates as true because $var is set<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$var</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'$var is set even though it is empty'</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <div class="example" id="example-5636">
   <p><strong>Example #2 <span class="function"><strong>empty()</strong></span> on String Offsets</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$expected_array_got_string </span><span style="color: #007700">= </span><span style="color: #DD0000">'somestring'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'some_key'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0.5'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$expected_array_got_string</span><span style="color: #007700">[</span><span style="color: #DD0000">'0 Mostel'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">bool(true)
bool(false)
bool(false)
bool(true)
bool(true)</pre>
</div>
   </div>
  </div>
  <div class="example" id="example-5637">
   <p><strong>Example #3 <span class="function"><strong>empty()</strong></span> on multidimensional arrays</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$multidimensional </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">'some' </span><span style="color: #007700">=&gt; [<br />        </span><span style="color: #DD0000">'deep' </span><span style="color: #007700">=&gt; [<br />            </span><span style="color: #DD0000">'nested' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'value'<br />        </span><span style="color: #007700">]<br />    ]<br />];<br /><br />if (!empty(</span><span style="color: #0000BB">$multidimensional</span><span style="color: #007700">[</span><span style="color: #DD0000">'some'</span><span style="color: #007700">][</span><span style="color: #DD0000">'some'</span><span style="color: #007700">][</span><span style="color: #DD0000">'nested'</span><span style="color: #007700">])) {<br />    </span><span style="color: #0000BB">$someVariable </span><span style="color: #007700">= </span><span style="color: #0000BB">$multidimensional</span><span style="color: #007700">[</span><span style="color: #DD0000">'some'</span><span style="color: #007700">][</span><span style="color: #DD0000">'deep'</span><span style="color: #007700">][</span><span style="color: #DD0000">'nested'</span><span style="color: #007700">];<br />}<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$multidimensional</span><span style="color: #007700">[</span><span style="color: #DD0000">'some-undefined-key'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$multidimensional</span><span style="color: #007700">[</span><span style="color: #DD0000">'some'</span><span style="color: #007700">][</span><span style="color: #DD0000">'deep'</span><span style="color: #007700">][</span><span style="color: #DD0000">'unknown'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(empty(</span><span style="color: #0000BB">$multidimensional</span><span style="color: #007700">[</span><span style="color: #DD0000">'some'</span><span style="color: #007700">][</span><span style="color: #DD0000">'deep'</span><span style="color: #007700">][</span><span style="color: #DD0000">'nested'</span><span style="color: #007700">]));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">bool(true)
bool(true)
bool(false)</pre>
</div>
   </div>
  </div>
 </div>

 <div class="refsect1 notes" id="refsect1-function.empty-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">Because this is a
language construct and not a function, it cannot be called using
<a href="functions.variable-functions.php" class="link">variable functions</a>,
or <a href="functions.arguments.php#functions.named-arguments" class="link">named arguments</a>.</span>
</p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    When using <span class="function"><strong>empty()</strong></span> on inaccessible object properties,
    the <a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a>
    overloading method will be called, if declared.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.empty-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.isset.php" class="function" rel="rdfs-seeAlso">isset()</a> - Determine if a variable is declared and is different than null</span></li>
    <li><a href="language.oop5.overloading.php#object.isset" class="link">__isset()</a></li>
    <li><span class="function"><a href="function.unset.php" class="function" rel="rdfs-seeAlso">unset()</a> - unset a given variable</span></li>
    <li><span class="function"><a href="function.array-key-exists.php" class="function" rel="rdfs-seeAlso">array_key_exists()</a> - Checks if the given key or index exists in the array</span></li>
    <li><span class="function"><a href="function.count.php" class="function" rel="rdfs-seeAlso">count()</a> - Counts all elements in an array or in a Countable object</span></li> 
    <li><span class="function"><a href="function.strlen.php" class="function" rel="rdfs-seeAlso">strlen()</a> - Get string length</span></li>
    <li><a href="types.comparisons.php" class="link">The type comparison tables</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/empty.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.empty%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.empty&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.empty.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">36 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114267">  <div class="votes">
    <div id="Vu114267">
    <a href="/manual/vote-note.php?id=114267&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114267">
    <a href="/manual/vote-note.php?id=114267&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114267" title="82% like this...">
    256
    </div>
  </div>
  <a href="#114267" class="name">
  <strong class="user"><em>Nanhe Kumar</em></strong></a><a class="genanchor" href="#114267"> &para;</a><div class="date" title="2014-01-31 10:17"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114267">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br />* @author :  Nanhe Kumar &lt;nanhe.kumar@gmail.com&gt;<br />* List of all empty values<br />**/<br /><br /></span><span class="default">$testCase </span><span class="keyword">= array(<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />    </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />    </span><span class="default">4 </span><span class="keyword">=&gt; array(),<br />    </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">,<br />    </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="default">NULL</span><span class="keyword">,<br />    </span><span class="default">7</span><span class="keyword">=&gt;</span><span class="string">'0'</span><span class="keyword">,<br />    </span><span class="default">8</span><span class="keyword">=&gt;</span><span class="default">0</span><span class="keyword">,<br />    <br />);<br /><br />foreach (</span><span class="default">$testCase </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />    if (empty(</span><span class="default">$v</span><span class="keyword">)) {<br />        echo </span><span class="string">"&lt;br&gt; </span><span class="default">$k</span><span class="string">=&gt;</span><span class="default">$v</span><span class="string"> is empty"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="comment">/**<br />Output<br />1=&gt; is empty<br />2=&gt; is empty<br />3=&gt; is empty<br />4=&gt;Array is empty<br />5=&gt; is empty<br />6=&gt; is empty<br />7=&gt;0 is empty<br />8=&gt;0 is empty<br />**/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93117">  <div class="votes">
    <div id="Vu93117">
    <a href="/manual/vote-note.php?id=93117&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93117">
    <a href="/manual/vote-note.php?id=93117&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93117" title="63% like this...">
    96
    </div>
  </div>
  <a href="#93117" class="name">
  <strong class="user"><em>Janci</em></strong></a><a class="genanchor" href="#93117"> &para;</a><div class="date" title="2009-08-24 08:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93117">
<div class="phpcode"><code><span class="html">Please note that results of empty() when called on non-existing / non-public variables of a class are a bit confusing if using magic method __get (as previously mentioned by nahpeps at gmx dot de). Consider this example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Registry<br /></span><span class="keyword">{<br />    protected </span><span class="default">$_items </span><span class="keyword">= array();<br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        } else {<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="default">$registry </span><span class="keyword">= new </span><span class="default">Registry</span><span class="keyword">();<br /></span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">empty </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notEmpty </span><span class="keyword">= </span><span class="string">'not empty'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notExisting</span><span class="keyword">)); </span><span class="comment">// true, so far so good<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">empty</span><span class="keyword">)); </span><span class="comment">// true, so far so good<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notEmpty</span><span class="keyword">)); </span><span class="comment">// true, .. say what?<br /></span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notEmpty</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$tmp</span><span class="keyword">)); </span><span class="comment">// false as expected<br /></span><span class="default">?&gt;<br /></span><br />The result for empty($registry-&gt;notEmpty) is a bit unexpeced as the value is obviously set and non-empty. This is due to the fact that the empty() function uses __isset() magic functin in these cases. Although it's noted in the documentation above, I think it's worth mentioning in more detail as the behaviour is not straightforward. In order to achieve desired (expexted?) results, you need to add  __isset() magic function to your class:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Registry<br /></span><span class="keyword">{<br />    protected </span><span class="default">$_items </span><span class="keyword">= array();<br />    public function </span><span class="default">__set</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />        } else {<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />    }<br />    public function </span><span class="default">__isset</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)<br />    {<br />        if (isset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">])) {<br />            return (</span><span class="default">false </span><span class="keyword">=== empty(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_items</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]));<br />        } else {<br />            return </span><span class="default">null</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br /></span><span class="default">$registry </span><span class="keyword">= new </span><span class="default">Registry</span><span class="keyword">();<br /></span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">empty </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notEmpty </span><span class="keyword">= </span><span class="string">'not empty'</span><span class="keyword">;<br /><br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notExisting</span><span class="keyword">)); </span><span class="comment">// true, so far so good<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">empty</span><span class="keyword">)); </span><span class="comment">// true, so far so good<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$registry</span><span class="keyword">-&gt;</span><span class="default">notEmpty</span><span class="keyword">)); </span><span class="comment">// false, finally!<br /></span><span class="default">?&gt;<br /></span><br />It actually seems that empty() is returning negation of the __isset() magic function result, hence the negation of the empty() result in the __isset() function above.</span></code></div>
  </div>
 </div>
  <div class="note" id="103756">  <div class="votes">
    <div id="Vu103756">
    <a href="/manual/vote-note.php?id=103756&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103756">
    <a href="/manual/vote-note.php?id=103756&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103756" title="63% like this...">
    69
    </div>
  </div>
  <a href="#103756" class="name">
  <strong class="user"><em>steven at nevvix dot com</em></strong></a><a class="genanchor" href="#103756"> &para;</a><div class="date" title="2011-05-02 09:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103756">
<div class="phpcode"><code><span class="html">When you need to accept these as valid, non-empty values:<br />- 0 (0 as an integer)<br />- 0.0 (0 as a float)<br />- "0" (0 as a string)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_blank</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {<br />    return empty(</span><span class="default">$value</span><span class="keyword">) &amp;&amp; !</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is similar to Rails' blank? method.</span></code></div>
  </div>
 </div>
  <div class="note" id="123147">  <div class="votes">
    <div id="Vu123147">
    <a href="/manual/vote-note.php?id=123147&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123147">
    <a href="/manual/vote-note.php?id=123147&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123147" title="68% like this...">
    6
    </div>
  </div>
  <a href="#123147" class="name">
  <strong class="user"><em>GazetteSDF</em></strong></a><a class="genanchor" href="#123147"> &para;</a><div class="date" title="2018-09-21 09:02"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123147">
<div class="phpcode"><code><span class="html">For the verification of a form, to "block" entries such as a simple space or other, I thought of this combination:<br /><br />function isEmpty($string){<br />    $val = preg_replace('#[^A-Za-z0-9]+#', '', $string) ;<br />    $val = trim($string, '');<br />    return ($string=='') ;<br />}<br /><br />This protects entries like: ' ' ,'  -  ', '. - +', ... On entries like name, profession, ... it's helpful</span></code></div>
  </div>
 </div>
  <div class="note" id="83361">  <div class="votes">
    <div id="Vu83361">
    <a href="/manual/vote-note.php?id=83361&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83361">
    <a href="/manual/vote-note.php?id=83361&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83361" title="66% like this...">
    13
    </div>
  </div>
  <a href="#83361" class="name">
  <strong class="user"><em>tom at tomwardrop dot com</em></strong></a><a class="genanchor" href="#83361"> &para;</a><div class="date" title="2008-05-22 05:01"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83361">
<div class="phpcode"><code><span class="html">In reply to "admin at ninthcircuit dot info",<br /><br />Using str_replace is unnecessary. I would encourage the use of trim which would most likely be faster (haven't tested) and easier. Trim also takes care of other white space like line breaks and tabs. Actually, in most of the applications I code, I use a multi-dimensional array map function with trim on the Super Globals such as $_POST, $_GET and $_COOKIE as so far, there hasn't been an instance where I would want any user input to begin or end with whitespace. The good thing about doing this is that you never have to worry about 'trimming' your input which makes your code easier and more reliable (incase you forget to trim some input).</span></code></div>
  </div>
 </div>
  <div class="note" id="126263">  <div class="votes">
    <div id="Vu126263">
    <a href="/manual/vote-note.php?id=126263&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126263">
    <a href="/manual/vote-note.php?id=126263&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126263" title="64% like this...">
    12
    </div>
  </div>
  <a href="#126263" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#126263"> &para;</a><div class="date" title="2021-07-22 09:11"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126263">
<div class="phpcode"><code><span class="html">Multiple empty():<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Multiple empty().<br /> *<br /> * @param mixed[] $vars Variables to test<br /> * @return bool<br /> */<br /></span><span class="keyword">function </span><span class="default">multi_empty</span><span class="keyword">(&amp; ...</span><span class="default">$vars</span><span class="keyword">)<br />{<br />    </span><span class="comment">// no callback is supplied, all empty values will be removed<br />    </span><span class="keyword">return </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">) === [];<br />}<br /></span><span class="default">?&gt;<br /></span>example:<br /><span class="default">&lt;?php<br />$notEmptyVar </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$emptyVar </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /></span><span class="comment">// $undefinedVar - not defined<br /><br /></span><span class="default">multi_empty</span><span class="keyword">(</span><span class="default">$emptyVar</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">multi_empty</span><span class="keyword">(</span><span class="default">$emptyVar</span><span class="keyword">, </span><span class="default">$undefinedVar</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">multi_empty</span><span class="keyword">(</span><span class="default">$notEmptyVar </span><span class="keyword">, </span><span class="default">$emptyVar</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">multi_empty</span><span class="keyword">(</span><span class="default">$notEmptyVar </span><span class="keyword">, </span><span class="default">$emptyVar</span><span class="keyword">, </span><span class="default">$undefinedVar</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115692">  <div class="votes">
    <div id="Vu115692">
    <a href="/manual/vote-note.php?id=115692&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115692">
    <a href="/manual/vote-note.php?id=115692&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115692" title="63% like this...">
    16
    </div>
  </div>
  <a href="#115692" class="name">
  <strong class="user"><em>chrisdmiddleton at gmail dot com</em></strong></a><a class="genanchor" href="#115692"> &para;</a><div class="date" title="2014-09-09 08:37"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115692">
<div class="phpcode"><code><span class="html">If you want to use empty() to evaluate an expression (not a variable), and you don't have PHP 5.5+, you can do it by wrapping the call to empty in a function, like so:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_empty</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">) {<br /><br />    return empty(</span><span class="default">$var</span><span class="keyword">);<br /><br />}<br /></span><span class="default">?&gt;<br /></span>Then you can do something like<br /><span class="default">&lt;?php<br /></span><span class="keyword">if(</span><span class="default">is_empty</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)) {<br /> </span><span class="comment">/* ... */<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span>without issue, since the local variable $var is being tested rather than the expression in the function call itself.</span></code></div>
  </div>
 </div>
  <div class="note" id="116388">  <div class="votes">
    <div id="Vu116388">
    <a href="/manual/vote-note.php?id=116388&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116388">
    <a href="/manual/vote-note.php?id=116388&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116388" title="62% like this...">
    18
    </div>
  </div>
  <a href="#116388" class="name">
  <strong class="user"><em>your dot brother dot t at hotmail dot com</em></strong></a><a class="genanchor" href="#116388"> &para;</a><div class="date" title="2014-12-25 09:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116388">
<div class="phpcode"><code><span class="html">(experienced in PHP 5.6.3) The `empty()` can't evaluate `__get()` results explicitly, so the `empty()` statement bellow always renders true<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Juice </span><span class="keyword">extends </span><span class="default">Liquid</span><span class="keyword">{<br />   protected </span><span class="default">$apple</span><span class="keyword">;<br />   protected </span><span class="default">$orange</span><span class="keyword">;<br />   public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />      return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">$name</span><span class="keyword">;<br />   }<br />   public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$apple</span><span class="keyword">, </span><span class="default">$orange</span><span class="keyword">) {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">apple </span><span class="keyword">= </span><span class="default">$apple</span><span class="keyword">;<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">orange </span><span class="keyword">= </span><span class="default">$orange</span><span class="keyword">;<br />   }<br />}<br /><br />class </span><span class="default">Glass </span><span class="keyword">{<br />   protected </span><span class="default">$liquid</span><span class="keyword">;<br />   public function </span><span class="default">__get</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />      return </span><span class="default">$name </span><span class="keyword">== </span><span class="string">"liquid" </span><span class="keyword">? </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">liquid </span><span class="keyword">: </span><span class="default">false</span><span class="keyword">;<br />   }<br />   public function </span><span class="default">__construct</span><span class="keyword">() {<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">juice </span><span class="keyword">= new </span><span class="default">Juice</span><span class="keyword">(</span><span class="default">3</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br />   }<br />}<br /><br /></span><span class="default">$glass </span><span class="keyword">= new </span><span class="default">Glass</span><span class="keyword">();<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">liquid</span><span class="keyword">-&gt;</span><span class="default">apple</span><span class="keyword">));<br /><br /></span><span class="comment">/**<br /> * The output is:<br /> * bool(true)<br /> */<br /></span><span class="default">?&gt;<br /></span><br />The correct way is to force the evaluation of `__get()` first, by using extra braces around implicit statements like this:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(empty((</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">liquid</span><span class="keyword">-&gt;</span><span class="default">apple</span><span class="keyword">)));<br /><br /></span><span class="comment">/**<br /> * The output is:<br /> * bool(false)<br /> */<br /></span><span class="default">?&gt;<br /></span><br />So if you are using packages that utilize object oriented designs and magic methods like `__get()`, it's a good practice to always use double braces for `empty()` calls.</span></code></div>
  </div>
 </div>
  <div class="note" id="120871">  <div class="votes">
    <div id="Vu120871">
    <a href="/manual/vote-note.php?id=120871&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120871">
    <a href="/manual/vote-note.php?id=120871&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120871" title="61% like this...">
    13
    </div>
  </div>
  <a href="#120871" class="name">
  <strong class="user"><em>Claudio Galdiolo</em></strong></a><a class="genanchor" href="#120871"> &para;</a><div class="date" title="2017-03-25 12:20"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120871">
<div class="phpcode"><code><span class="html">Warning: an "empty" object is NOT considered to be empty<br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">(); </span><span class="comment">// "empty" object<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$var</span><span class="keyword">)); </span><span class="comment">// bool(false)<br /></span><span class="default">?&gt;<br /></span><br />I don't know if there is a standard way to test for "empty" objects, I personally use array casting:<br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= new </span><span class="default">stdClass</span><span class="keyword">(); </span><span class="comment">// "empty" object<br /></span><span class="default">$var </span><span class="keyword">= (array) </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// cast to empty array<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$var</span><span class="keyword">)); </span><span class="comment">// bool(true)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123719">  <div class="votes">
    <div id="Vu123719">
    <a href="/manual/vote-note.php?id=123719&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123719">
    <a href="/manual/vote-note.php?id=123719&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123719" title="61% like this...">
    10
    </div>
  </div>
  <a href="#123719" class="name">
  <strong class="user"><em>markmanning at gmail dot com</em></strong></a><a class="genanchor" href="#123719"> &para;</a><div class="date" title="2019-03-23 09:15"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123719">
<div class="phpcode"><code><span class="html">I normally count() an array, so I wanted to see how empty() would stack up.<br /><br /><span class="default">&lt;?php<br />    $test </span><span class="keyword">= array();<br />    </span><span class="default">$test2 </span><span class="keyword">= array();<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)  </span><span class="default">$test</span><span class="keyword">[] = </span><span class="default">$x</span><span class="keyword">;<br /><br />    </span><span class="default">$ts </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">100000000</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++)<br />    {<br />        if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">))<br />        {<br />        }<br />    }<br /><br />    echo </span><span class="string">"Time taken:  " </span><span class="keyword">. (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$ts</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />For 100,000,000 comparisons, here are the results against PHP 7.2.16 on my hardware:<br /><br />count($test):  2.697 sec<br />count($test2):  2.596 sec<br />$test === array():  2.579 sec<br />$test2 === array():  2.552 sec<br />empty($test):  3.085 sec<br />empty($test2):  3.113 sec<br /><br />In short, it doesn't matter what method is used although empty() is actually just ever so slightly slower despite it being a language construct.  YMMV.</span></code></div>
  </div>
 </div>
  <div class="note" id="91182">  <div class="votes">
    <div id="Vu91182">
    <a href="/manual/vote-note.php?id=91182&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91182">
    <a href="/manual/vote-note.php?id=91182&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91182" title="62% like this...">
    7
    </div>
  </div>
  <a href="#91182" class="name">
  <strong class="user"><em>mlibazisi mabandla</em></strong></a><a class="genanchor" href="#91182"> &para;</a><div class="date" title="2009-05-28 02:47"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91182">
<div class="phpcode"><code><span class="html">in cases when "0" is not intended to be empty, here is a simple function to safely test for an empty string (or mixed variable):
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">_empty</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">){
<br />     </span><span class="default">$string </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />     if(!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)) return empty(</span><span class="default">$string</span><span class="keyword">);
<br />     return </span><span class="default">FALSE</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107926">  <div class="votes">
    <div id="Vu107926">
    <a href="/manual/vote-note.php?id=107926&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107926">
    <a href="/manual/vote-note.php?id=107926&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107926" title="59% like this...">
    19
    </div>
  </div>
  <a href="#107926" class="name">
  <strong class="user"><em>martin dot aarhof at gmail dot com</em></strong></a><a class="genanchor" href="#107926"> &para;</a><div class="date" title="2012-03-15 08:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107926">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'            '</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$str</span><span class="keyword">)); </span><span class="comment">// boolean false<br /></span><span class="default">?&gt;<br /></span><br />So remember to trim your strings first!<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'        '</span><span class="keyword">;<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(empty(</span><span class="default">$str</span><span class="keyword">)); </span><span class="comment">// boolean true<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96997">  <div class="votes">
    <div id="Vu96997">
    <a href="/manual/vote-note.php?id=96997&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96997">
    <a href="/manual/vote-note.php?id=96997&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96997" title="60% like this...">
    10
    </div>
  </div>
  <a href="#96997" class="name">
  <strong class="user"><em>aidan1103 at yahoo dot com</em></strong></a><a class="genanchor" href="#96997"> &para;</a><div class="date" title="2010-03-26 10:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96997">
<div class="phpcode"><code><span class="html">empty() should not necessarily return the negation of the __isset() magic function result, if you set a data member to 0, isset() should return true and empty should also return true.  A simpler implementation of the __isset magic function would be:<br /><br />public function __isset($key) {<br />  return isset($this-&gt;{$key});<br />}<br /><br />I don't understand why this isn't included in stdClass and inherited by default.</span></code></div>
  </div>
 </div>
  <div class="note" id="42591">  <div class="votes">
    <div id="Vu42591">
    <a href="/manual/vote-note.php?id=42591&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42591">
    <a href="/manual/vote-note.php?id=42591&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42591" title="61% like this...">
    10
    </div>
  </div>
  <a href="#42591" class="name">
  <strong class="user"><em>paul at worldwithoutwalls dot co dot uk</em></strong></a><a class="genanchor" href="#42591"> &para;</a><div class="date" title="2004-05-22 10:09"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42591">
<div class="phpcode"><code><span class="html">Note the exceptions when it comes to decimal numbers:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">0.00</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">'0.00'</span><span class="keyword">;<br />echo (empty(</span><span class="default">$a</span><span class="keyword">)? </span><span class="string">"empty"</span><span class="keyword">: </span><span class="string">"not empty"</span><span class="keyword">); </span><span class="comment">//result empty<br /></span><span class="keyword">echo (empty(</span><span class="default">$b</span><span class="keyword">)? </span><span class="string">"empty"</span><span class="keyword">: </span><span class="string">"not empty"</span><span class="keyword">); </span><span class="comment">//result not empty<br />//BUT...<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />echo (empty(</span><span class="default">$c</span><span class="keyword">)? </span><span class="string">"empty"</span><span class="keyword">: </span><span class="string">"not empty"</span><span class="keyword">); </span><span class="comment">//result empty<br /></span><span class="default">?&gt;<br /></span><br />For those of you using MySQL, if you have a table with a column of decimal type, when you do a SELECT, your data will be returned as a string, so you'll need to do apply intval() before testing for empty.<br /><br />e.g.<br />TABLE t has columns id MEDIUMINT and d DECIMAL(4,2)<br />and contains 1 row where id=1, d=0.00<br /><span class="default">&lt;?php<br />$q </span><span class="keyword">= </span><span class="string">"SELECT * FROM t"</span><span class="keyword">;<br /></span><span class="default">$res </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">);<br /></span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">);<br />echo (empty(</span><span class="default">$row</span><span class="keyword">[</span><span class="string">'d'</span><span class="keyword">])? </span><span class="string">"empty"</span><span class="keyword">: </span><span class="string">"not empty"</span><span class="keyword">); </span><span class="comment">//result not empty<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121299">  <div class="votes">
    <div id="Vu121299">
    <a href="/manual/vote-note.php?id=121299&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121299">
    <a href="/manual/vote-note.php?id=121299&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121299" title="60% like this...">
    4
    </div>
  </div>
  <a href="#121299" class="name">
  <strong class="user"><em>wranvaud at gmail dot com</em></strong></a><a class="genanchor" href="#121299"> &para;</a><div class="date" title="2017-07-02 06:22"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121299">
<div class="phpcode"><code><span class="html">Note that if your variable only has an "end of line" (aka carriage return), PHP_EOL it is not considered as empty. Since end of lines are not always easy to spot this can be confusing.</span></code></div>
  </div>
 </div>
  <div class="note" id="100036">  <div class="votes">
    <div id="Vu100036">
    <a href="/manual/vote-note.php?id=100036&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100036">
    <a href="/manual/vote-note.php?id=100036&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100036" title="60% like this...">
    9
    </div>
  </div>
  <a href="#100036" class="name">
  <strong class="user"><em>ehsmeng</em></strong></a><a class="genanchor" href="#100036"> &para;</a><div class="date" title="2010-09-21 05:25"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom100036">
<div class="phpcode"><code><span class="html">I can't use empty() in all situations because '0' is usually not considered empty to me. I did a quick benchmark over the most common ways of testing it. '' == var suffers from '' == 0 is true so that's just there for curiosity.
<br />
<br /><span class="default">&lt;?php
<br />    $microtimeref </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="string">'asd'</span><span class="keyword">;
<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">5000000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />    {
<br />        if (</span><span class="default">0 </span><span class="keyword">== </span><span class="default">mb_strlen </span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">))
<br />        {
<br />            </span><span class="default">$a</span><span class="keyword">++;
<br />        }
<br />    }
<br />    echo </span><span class="string">"Total time 0 == mb_strlen(var): &lt;b&gt;" </span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$microtimeref</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) . </span><span class="string">'s&lt;/b&gt;&lt;br /&gt;'</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />The results:
<br />
<br />Total time 0 == mb_strlen(var): 3.141s
<br />Total time 0 === strlen(var): 2.904s
<br />Total time 0 == strlen(var): 2.878s
<br />Total time '' == var: 1.774s
<br />Total time '' === var: 1.706s
<br />Total time empty(var): 1.496s
<br />
<br />Thus '' === var will be my zero length string test.</span></code></div>
  </div>
 </div>
  <div class="note" id="85215">  <div class="votes">
    <div id="Vu85215">
    <a href="/manual/vote-note.php?id=85215&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85215">
    <a href="/manual/vote-note.php?id=85215&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85215" title="59% like this...">
    12
    </div>
  </div>
  <a href="#85215" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#85215"> &para;</a><div class="date" title="2008-08-20 02:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85215">
<div class="phpcode"><code><span class="html">To add on to what anon said, what's happening in john_jian's example seems unusual because we don't see the implicit typecasting going on behind the scenes.  What's really happening is:<br /><br />$a = '';<br />$b = 0;<br />$c = '0';<br /><br />(int)$a == $b -&gt; true, because any string that's not a number gets converted to 0<br />$b==(int)$c -&gt; true, because the int in the string gets converted<br />and<br />$a==$c -&gt; false, because they're being compared as strings, rather than integers.  (int)$a==(int)$c should return true, however.<br /><br />Note: I don't remember if PHP even *has* typecasting, much less if this is the correct syntax.  I'm just using something for the sake of examples.</span></code></div>
  </div>
 </div>
  <div class="note" id="101988">  <div class="votes">
    <div id="Vu101988">
    <a href="/manual/vote-note.php?id=101988&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101988">
    <a href="/manual/vote-note.php?id=101988&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101988" title="58% like this...">
    13
    </div>
  </div>
  <a href="#101988" class="name">
  <strong class="user"><em>phpsort</em></strong></a><a class="genanchor" href="#101988"> &para;</a><div class="date" title="2011-01-21 11:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101988">
<div class="phpcode"><code><span class="html">I'm summarising a few points on empty() with inaccessible properties, in the hope of saving others a bit of time. Using PHP 5.3.2.<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">MyClass </span><span class="keyword">{<br />    private </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />}<br /></span><span class="default">$myClass </span><span class="keyword">= new </span><span class="default">MyClass</span><span class="keyword">;<br />echo </span><span class="default">$myClass</span><span class="keyword">-&gt;</span><span class="default">foo</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>As expected, this gives "Fatal error: Cannot access private property MyClass::$foo".<br />But substitute the line<br />if (empty($myClass-&gt;foo)) echo 'foo is empty'; else echo 'foo is not empty';<br />and we get the misleading result "foo is empty". <br />There is NO ERROR OR WARNING, so this is a real gotcha. Your code will just go wrong silently, and I would say it amounts to a bug.<br />If you add two magic functions to the class:<br />public function __get($var) { return $this-&gt;$var; }<br />public function __isset($var) { return isset($this-&gt;$var); }<br />then we get the expected result. You need both functions.<br />For empty($myClass-&gt;foo), I believe PHP calls __isset, and if that is true returns the result of empty on the result of __get. (Some earlier posts wrongly suggest PHP just returns the negation of __isset).<br />BUT …<br />See the earlier post by php at lanar dot com. I confirm those results, and if you extend the test with isset($x-&gt;a-&gt;b-&gt;c) it appears that __isset is only called for the last property in the chain. Arguably another bug. empty() behaves in the same way. So things are not as clear as we might hope.<br />See also the note on empty() at<br /><a href="http://uk3.php.net/manual/en/language.oop5.overloading.php" rel="nofollow" target="_blank">http://uk3.php.net/manual/en/language.oop5.overloading.php</a><br />Clear as mud!</span></code></div>
  </div>
 </div>
  <div class="note" id="99959">  <div class="votes">
    <div id="Vu99959">
    <a href="/manual/vote-note.php?id=99959&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99959">
    <a href="/manual/vote-note.php?id=99959&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99959" title="59% like this...">
    8
    </div>
  </div>
  <a href="#99959" class="name">
  <strong class="user"><em>marko dot crni at gmail dot com</em></strong></a><a class="genanchor" href="#99959"> &para;</a><div class="date" title="2010-09-16 11:06"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99959">
<div class="phpcode"><code><span class="html">Calling non existing object property, empty($object-&gt;prop), will trigger __isset(), the same way as isset($object-&gt;prop) does, but there is one difference. If __isset() returns TRUE, another call to __get() will be made and actual return value will be result of empty() and result of __get().</span></code></div>
  </div>
 </div>
  <div class="note" id="123641">  <div class="votes">
    <div id="Vu123641">
    <a href="/manual/vote-note.php?id=123641&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123641">
    <a href="/manual/vote-note.php?id=123641&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123641" title="58% like this...">
    3
    </div>
  </div>
  <a href="#123641" class="name">
  <strong class="user"><em>fahimcseiiuc at gmail dot com</em></strong></a><a class="genanchor" href="#123641"> &para;</a><div class="date" title="2019-02-25 10:02"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123641">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />    </span><span class="comment">/*"" (an empty string)<br />      0 (0 as an integer)<br />      0.0 (0 as a float)<br />      "0" (0 as a string)<br />      NULL<br />      FALSE<br />      array() (an empty array)*/<br /><br /></span><span class="default">$anEmptyString </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />empty(</span><span class="default">$anEmptyString</span><span class="keyword">);<br />if(empty(</span><span class="default">$anEmptyString</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;         </span><span class="comment">//line break<br /><br /></span><span class="default">$anIntegerNumber </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />empty(</span><span class="default">$anIntegerNumber</span><span class="keyword">);<br />if(empty(</span><span class="default">$anIntegerNumber</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;         </span><span class="comment">//line break<br /><br /></span><span class="default">$aFloatNumber </span><span class="keyword">= </span><span class="default">0.0</span><span class="keyword">;<br />empty(</span><span class="default">$aFloatNumber</span><span class="keyword">);<br />if(empty(</span><span class="default">$aFloatNumber</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;       </span><span class="comment">//line break<br /><br /></span><span class="default">$aZeroValuedString </span><span class="keyword">= </span><span class="string">"0"</span><span class="keyword">;<br />empty(</span><span class="default">$aZeroValuedString</span><span class="keyword">);<br />if(empty(</span><span class="default">$aZeroValuedString</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;        </span><span class="comment">//line break<br /><br /></span><span class="default">$aNULL </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />empty(</span><span class="default">$aNULL</span><span class="keyword">);<br />if(empty(</span><span class="default">$aNULL</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;        </span><span class="comment">//line break<br /><br /></span><span class="default">$aBooleanFALSE </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br />empty(</span><span class="default">$aBooleanFALSE</span><span class="keyword">);<br />if(empty(</span><span class="default">$aBooleanFALSE</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;        </span><span class="comment">//line break<br /><br /></span><span class="default">$anEmptyArray </span><span class="keyword">= array();<br />empty(</span><span class="default">$anEmptyArray</span><span class="keyword">);<br />if(empty(</span><span class="default">$anEmptyArray</span><span class="keyword">) == </span><span class="default">TRUE</span><span class="keyword">){<br />    echo </span><span class="string">"TRUE"</span><span class="keyword">;<br />} else{<br />    echo </span><span class="string">"FALSE"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr&gt;"</span><span class="keyword">;       </span><span class="comment">//line break<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92308">  <div class="votes">
    <div id="Vu92308">
    <a href="/manual/vote-note.php?id=92308&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92308">
    <a href="/manual/vote-note.php?id=92308&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92308" title="57% like this...">
    17
    </div>
  </div>
  <a href="#92308" class="name">
  <strong class="user"><em>denobasis-bozic et yahoo.com</em></strong></a><a class="genanchor" href="#92308"> &para;</a><div class="date" title="2009-07-18 04:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92308">
<div class="phpcode"><code><span class="html">test if all multiarray's are empty
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">is_multiArrayEmpty</span><span class="keyword">(</span><span class="default">$multiarray</span><span class="keyword">) {
<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$multiarray</span><span class="keyword">) and !empty(</span><span class="default">$multiarray</span><span class="keyword">)){
<br />        </span><span class="default">$tmp </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$multiarray</span><span class="keyword">);
<br />            if(!</span><span class="default">is_multiArrayEmpty</span><span class="keyword">(</span><span class="default">$multiarray</span><span class="keyword">) or !</span><span class="default">is_multiArrayEmpty</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">)){
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />            }
<br />            return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />    if(empty(</span><span class="default">$multiarray</span><span class="keyword">)){
<br />        return </span><span class="default">true</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">false</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$testCase </span><span class="keyword">= array (     
<br /></span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,
<br /></span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,
<br /></span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,
<br /></span><span class="default">3 </span><span class="keyword">=&gt; array(),
<br /></span><span class="default">4 </span><span class="keyword">=&gt; array(array()),
<br /></span><span class="default">5 </span><span class="keyword">=&gt; array(array(array(array(array())))),
<br /></span><span class="default">6 </span><span class="keyword">=&gt; array(array(), array(), array(), array(), array()),
<br /></span><span class="default">7 </span><span class="keyword">=&gt; array(array(array(), array()), array(array(array(array(array(array(), array())))))),
<br /></span><span class="default">8 </span><span class="keyword">=&gt; array(</span><span class="default">null</span><span class="keyword">),
<br /></span><span class="default">9 </span><span class="keyword">=&gt; </span><span class="string">'not empty'</span><span class="keyword">,
<br /></span><span class="default">10 </span><span class="keyword">=&gt; </span><span class="string">"not empty"</span><span class="keyword">,
<br /></span><span class="default">11 </span><span class="keyword">=&gt; array(array(</span><span class="string">"not empty"</span><span class="keyword">)),
<br /></span><span class="default">12 </span><span class="keyword">=&gt; array(array(),array(</span><span class="string">"not empty"</span><span class="keyword">),array(array()))
<br />);
<br />
<br />foreach (</span><span class="default">$testCase </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$case </span><span class="keyword">) {
<br />    echo </span><span class="string">"</span><span class="default">$key</span><span class="string"> is_multiArrayEmpty= "</span><span class="keyword">.</span><span class="default">is_multiArrayEmpty</span><span class="keyword">(</span><span class="default">$case</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />OUTPUT:
<br />========
<br />
<br />0 is_multiArrayEmpty= 1
<br />1 is_multiArrayEmpty= 1
<br />2 is_multiArrayEmpty= 1
<br />3 is_multiArrayEmpty= 1
<br />4 is_multiArrayEmpty= 1
<br />5 is_multiArrayEmpty= 1
<br />6 is_multiArrayEmpty= 1
<br />7 is_multiArrayEmpty= 1
<br />8 is_multiArrayEmpty= 1
<br />9 is_multiArrayEmpty= 
<br />10 is_multiArrayEmpty= 
<br />11 is_multiArrayEmpty= 
<br />12 is_multiArrayEmpty=</span></code></div>
  </div>
 </div>
  <div class="note" id="82942">  <div class="votes">
    <div id="Vu82942">
    <a href="/manual/vote-note.php?id=82942&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82942">
    <a href="/manual/vote-note.php?id=82942&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82942" title="58% like this...">
    7
    </div>
  </div>
  <a href="#82942" class="name">
  <strong class="user"><em>Greg Hartwig</em></strong></a><a class="genanchor" href="#82942"> &para;</a><div class="date" title="2008-05-02 02:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82942">
<div class="phpcode"><code><span class="html">David from CodeXplorer:<br />&gt;&gt; The ONLY reason to use empty() is for code readability. It is the same as an IF/ELSE check.<br />&gt;&gt; So, don't bother using EMPTY in the real world.<br /><br />This is NOT true.  empty() will not generate warnings if you're testing against an undefined variable as a simple boolean check will.  On production systems, warnings are usually shut off, but they are often active on development systems.<br /><br />You could test a flag with<br />   <span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">$flagvar</span><span class="keyword">)  ... </span><span class="default">?&gt;<br /></span>but this can generate a warning if $flagvar is not set.<br /><br />Instead of <br />   <span class="default">&lt;?php </span><span class="keyword">if (isset(</span><span class="default">$flagvar</span><span class="keyword">) &amp;&amp; </span><span class="default">$flagvar</span><span class="keyword">)  ... </span><span class="default">?&gt;<br /></span>you can simply use<br />   <span class="default">&lt;?php </span><span class="keyword">if (!empty(</span><span class="default">$flagvar</span><span class="keyword">))  ... </span><span class="default">?&gt;<br /></span><br />for easy readability without warnings.</span></code></div>
  </div>
 </div>
  <div class="note" id="128069">  <div class="votes">
    <div id="Vu128069">
    <a href="/manual/vote-note.php?id=128069&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128069">
    <a href="/manual/vote-note.php?id=128069&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128069" title="57% like this...">
    2
    </div>
  </div>
  <a href="#128069" class="name">
  <strong class="user"><em>mmulej at gmail dot com</em></strong></a><a class="genanchor" href="#128069"> &para;</a><div class="date" title="2022-12-30 11:28"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128069">
<div class="phpcode"><code><span class="html">Tests on<br />- Win 11<br />- Intel(R) Core(TM) i7-8750H CPU @ 2.20GHz   2.21 GHz<br />- 64Gb RAM,<br />- PHP 8.1.10 (in Tinkerwell)<br />repeatedly show `empty` &gt; `count` &gt; `=== []`, but the margin is small and not worth the micro-optimizations.<br /><br />Note: Same results (with `$n = 10000000`) for PHP v7.4.33 using onlinephp(dot)io sandbox tool.<br /><br /><span class="default">&lt;?php<br /><br />$test </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br /></span><span class="default">$test2 </span><span class="keyword">= [];<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">1000_000_000</span><span class="keyword">;<br /><br /></span><span class="default">$t1 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">)) {}<br /></span><span class="default">$t2 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$test2</span><span class="keyword">)) {}<br /></span><span class="default">$t3 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (</span><span class="default">$test </span><span class="keyword">=== []) {}<br /></span><span class="default">$t4 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (</span><span class="default">$test2 </span><span class="keyword">=== []) {}<br /></span><span class="default">$t5 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (empty(</span><span class="default">$test</span><span class="keyword">)) {}<br /></span><span class="default">$t6 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); for (</span><span class="default">$x </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">$n</span><span class="keyword">; </span><span class="default">$x</span><span class="keyword">++) if (empty(</span><span class="default">$test2</span><span class="keyword">)) {}<br /></span><span class="default">$t7 </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br />echo </span><span class="string">"count(\$test):  " </span><span class="keyword">. (</span><span class="default">$t2 </span><span class="keyword">- </span><span class="default">$t1</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br />echo </span><span class="string">"count(\$test2): " </span><span class="keyword">. (</span><span class="default">$t3 </span><span class="keyword">- </span><span class="default">$t2</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$test === []:  " </span><span class="keyword">. (</span><span class="default">$t4 </span><span class="keyword">- </span><span class="default">$t3</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br />echo </span><span class="string">"\$test2 === []: " </span><span class="keyword">. (</span><span class="default">$t5 </span><span class="keyword">- </span><span class="default">$t4</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br />echo </span><span class="string">"empty(\$test):  " </span><span class="keyword">. (</span><span class="default">$t6 </span><span class="keyword">- </span><span class="default">$t5</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br />echo </span><span class="string">"empty(\$test2): " </span><span class="keyword">. (</span><span class="default">$t7 </span><span class="keyword">- </span><span class="default">$t6</span><span class="keyword">) . </span><span class="string">" sec\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Results:<br /><span class="default">&lt;?php<br />count</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">):  </span><span class="default">18.034885168076 sec<br />count</span><span class="keyword">(</span><span class="default">$test2</span><span class="keyword">): </span><span class="default">17.133869886398 sec<br />$test </span><span class="keyword">=== []:  </span><span class="default">20.059770107269 sec<br />$test2 </span><span class="keyword">=== []: </span><span class="default">14.204195022583 sec<br /></span><span class="keyword">empty(</span><span class="default">$test</span><span class="keyword">):  </span><span class="default">13.583840847015 sec<br /></span><span class="keyword">empty(</span><span class="default">$test2</span><span class="keyword">): </span><span class="default">12.971315145493 sec<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105722">  <div class="votes">
    <div id="Vu105722">
    <a href="/manual/vote-note.php?id=105722&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105722">
    <a href="/manual/vote-note.php?id=105722&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105722" title="57% like this...">
    10
    </div>
  </div>
  <a href="#105722" class="name">
  <strong class="user"><em>chris dot wisefool at gmail dot com</em></strong></a><a class="genanchor" href="#105722"> &para;</a><div class="date" title="2011-09-09 12:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105722">
<div class="phpcode"><code><span class="html">Note that checking the existence of a subkey of an array when that subkey does not exist but the parent does and is a string will return false for empty. 
<br />
<br />i.e. 
<br />
<br /><span class="default">&lt;?php
<br />$params </span><span class="keyword">= array(</span><span class="string">'search'</span><span class="keyword">=&gt;</span><span class="string">'1'</span><span class="keyword">);
<br />empty(</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'search'</span><span class="keyword">][</span><span class="string">'filter'</span><span class="keyword">]); </span><span class="comment"># returns false
<br /></span><span class="default">?&gt;
<br /></span>
<br />This is correct, per the documentation (<a href="http://php.net/manual/en/language.types.string.php" rel="nofollow" target="_blank">http://php.net/manual/en/language.types.string.php</a>); quite a bit down the page is the Warning: "Writing to an out of range offset pads the string with spaces. Non-integer types are converted to integer." ) I didn't receive a warning but perhaps that's correct too...depends on whether the string -&gt; integer conversion is considered "illegal": "Illegal offset type emits E_NOTICE."
<br />
<br />(i.e. since $params['search'] is a string, the 'filter' subscript is converted to 0, so the test becomes empty($params['search'][0]), which is obviously false), but it tripped me up enough to mistakenly file a bug report (which I've since closed).</span></code></div>
  </div>
 </div>
  <div class="note" id="54368">  <div class="votes">
    <div id="Vu54368">
    <a href="/manual/vote-note.php?id=54368&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54368">
    <a href="/manual/vote-note.php?id=54368&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54368" title="59% like this...">
    6
    </div>
  </div>
  <a href="#54368" class="name">
  <strong class="user"><em>jmarbas at hotmail dot com</em></strong></a><a class="genanchor" href="#54368"> &para;</a><div class="date" title="2005-07-01 09:10"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54368">
<div class="phpcode"><code><span class="html">empty($var) will return TRUE if $var is empty (according to the definition of 'empty' above) AND if $var is not set.<br /><br />I know that the statement in the "Return Values" section of the manual already says this in reverse:<br /><br />"Returns FALSE if var has a non-empty and non-zero value." <br /><br />but I was like "Why is this thing returning TRUE for unset variables???"... oh i see now... Its supposed to return TRUE for unset variables!!!<br /><br /><span class="default">&lt;?php<br />  ini_set</span><span class="keyword">(</span><span class="string">'error_reporting'</span><span class="keyword">,</span><span class="default">E_ALL</span><span class="keyword">);<br />  </span><span class="default">ini_set</span><span class="keyword">(</span><span class="string">'display_errors'</span><span class="keyword">,</span><span class="string">'1'</span><span class="keyword">);<br />  empty(</span><span class="default">$var</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119297">  <div class="votes">
    <div id="Vu119297">
    <a href="/manual/vote-note.php?id=119297&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119297">
    <a href="/manual/vote-note.php?id=119297&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119297" title="56% like this...">
    5
    </div>
  </div>
  <a href="#119297" class="name">
  <strong class="user"><em>mcfogw at gmail dot com</em></strong></a><a class="genanchor" href="#119297"> &para;</a><div class="date" title="2016-05-08 02:40"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119297">
<div class="phpcode"><code><span class="html">I'm comparing behavior of `!` and `empty()`, find an undocumented behavior here.<br /><br />just like cast-to-boolean, `empty()` cares about if SimpleXML object is made from emty tags.<br /><br />`empty(simplexml_load_string('&lt;root /&gt;'))` is TRUE<br /><br />this behavior begins from php 5.1.0~7, in 5.0.x that's FALSE<br /><br />proof here =&gt; <a href="https://3v4l.org/74Tc4" rel="nofollow" target="_blank">https://3v4l.org/74Tc4</a></span></code></div>
  </div>
 </div>
  <div class="note" id="100807">  <div class="votes">
    <div id="Vu100807">
    <a href="/manual/vote-note.php?id=100807&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100807">
    <a href="/manual/vote-note.php?id=100807&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100807" title="56% like this...">
    5
    </div>
  </div>
  <a href="#100807" class="name">
  <strong class="user"><em>e dot klerks at i-bytes dot nl</em></strong></a><a class="genanchor" href="#100807"> &para;</a><div class="date" title="2010-11-08 06:16"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100807">
<div class="phpcode"><code><span class="html">To make an empty function, which only accepts arrays, one can use type-hinting:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// emptyArray :: [a] -&gt; Bool
<br />
<br /></span><span class="keyword">function </span><span class="default">emptyArray</span><span class="keyword">(array </span><span class="default">$xs</span><span class="keyword">){
<br /> return empty(</span><span class="default">$xs</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Type hinting is a good thing to use in your code, because it makes it more easy to reason about your code. Besides that, it automatically documents the code.</span></code></div>
  </div>
 </div>
  <div class="note" id="100584">  <div class="votes">
    <div id="Vu100584">
    <a href="/manual/vote-note.php?id=100584&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100584">
    <a href="/manual/vote-note.php?id=100584&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100584" title="56% like this...">
    6
    </div>
  </div>
  <a href="#100584" class="name">
  <strong class="user"><em>rodolphe dot bodeau at free dot fr</em></strong></a><a class="genanchor" href="#100584"> &para;</a><div class="date" title="2010-10-25 06:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100584">
<div class="phpcode"><code><span class="html">Be careful, if "0" (zero as a string), 0 (zero as an integer) and -0 (minus zero as an integer) return true, "-0" (minus zero as a string (yes, I already had some customers that wrote -0 into a form field)) returns false. You need to cast your variable before testing it with the empty() function :<br /><br /><span class="default">&lt;?php<br />$var </span><span class="keyword">= </span><span class="string">"-0"</span><span class="keyword">;<br />echo empty(</span><span class="default">$var</span><span class="keyword">);  </span><span class="comment">// returns false<br /></span><span class="default">$var </span><span class="keyword">= (int) </span><span class="default">$var</span><span class="keyword">; </span><span class="comment">// casts $var as an integer<br /></span><span class="keyword">echo empty(</span><span class="default">$vat</span><span class="keyword">);  </span><span class="comment">// returns true<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127028">  <div class="votes">
    <div id="Vu127028">
    <a href="/manual/vote-note.php?id=127028&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127028">
    <a href="/manual/vote-note.php?id=127028&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127028" title="54% like this...">
    1
    </div>
  </div>
  <a href="#127028" class="name">
  <strong class="user"><em>Lukas</em></strong></a><a class="genanchor" href="#127028"> &para;</a><div class="date" title="2022-05-05 02:36"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127028">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// Difference of empty() vs. isset()<br /><br /></span><span class="default">$testCase </span><span class="keyword">= array(<br />    </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />    </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">' '</span><span class="keyword">,<br />    </span><span class="default">3 </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />    </span><span class="default">4 </span><span class="keyword">=&gt; array(),<br />    </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,<br />    </span><span class="default">6 </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="default">7 </span><span class="keyword">=&gt; </span><span class="string">'0'</span><span class="keyword">,<br />    </span><span class="default">8 </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />);<br /><br />foreach (</span><span class="default">$testCase </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />    echo </span><span class="string">"&lt;br&gt; </span><span class="default">$k</span><span class="string"> =&gt; " </span><span class="keyword">. </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) . </span><span class="string">" " </span><span class="keyword">. (empty(</span><span class="default">$v</span><span class="keyword">) ? </span><span class="string">"is empty" </span><span class="keyword">: </span><span class="string">"is not empty"</span><span class="keyword">) . </span><span class="string">" / " </span><span class="keyword">. (isset(</span><span class="default">$v</span><span class="keyword">) ? </span><span class="string">"is set" </span><span class="keyword">: </span><span class="string">"is not set"</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br />RESULT:<br /> 1 =&gt;  is empty / is set<br /> 2 =&gt;   is not empty / is set<br /> 3 =&gt;  is empty / is not set<br /> 4 =&gt; Array is empty / is set<br /> 5 =&gt;  is empty / is set<br /> 6 =&gt; 1 is not empty / is set<br /> 7 =&gt; 0 is empty / is set<br /> 8 =&gt; 0 is empty / is set<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124468">  <div class="votes">
    <div id="Vu124468">
    <a href="/manual/vote-note.php?id=124468&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124468">
    <a href="/manual/vote-note.php?id=124468&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124468" title="54% like this...">
    1
    </div>
  </div>
  <a href="#124468" class="name">
  <strong class="user"><em>pm1625637 at gmail dot com</em></strong></a><a class="genanchor" href="#124468"> &para;</a><div class="date" title="2019-12-05 02:11"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124468">
<div class="phpcode"><code><span class="html">Be careful about this  :<br /><br /><span class="default">&lt;?php<br />$del </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />echo empty(</span><span class="default">$del</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span><br />Output : 1</span></code></div>
  </div>
 </div>
  <div class="note" id="78269">  <div class="votes">
    <div id="Vu78269">
    <a href="/manual/vote-note.php?id=78269&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78269">
    <a href="/manual/vote-note.php?id=78269&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78269" title="55% like this...">
    5
    </div>
  </div>
  <a href="#78269" class="name">
  <strong class="user"><em>EllisGL</em></strong></a><a class="genanchor" href="#78269"> &para;</a><div class="date" title="2007-10-04 02:48"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78269">
<div class="phpcode"><code><span class="html">Here's what I do for the zero issue issue:<br />if($val == '' &amp;&amp; $val !== 0 &amp;&amp; $val !== '0')</span></code></div>
  </div>
 </div>
  <div class="note" id="77617">  <div class="votes">
    <div id="Vu77617">
    <a href="/manual/vote-note.php?id=77617&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77617">
    <a href="/manual/vote-note.php?id=77617&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77617" title="54% like this...">
    4
    </div>
  </div>
  <a href="#77617" class="name">
  <strong class="user"><em>rkulla2 at gmail dot com</em></strong></a><a class="genanchor" href="#77617"> &para;</a><div class="date" title="2007-09-05 03:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77617">
<div class="phpcode"><code><span class="html">Since I didn't like how empty() considers 0 and "0" to be empty (which can easily lead to bugs in your code), and since it doesn't deal with whitespace, i created the following function:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">check_not_empty</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$include_whitespace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$include_whitespace</span><span class="keyword">) {<br />        </span><span class="comment">// make it so strings containing white space are treated as empty too<br />        </span><span class="default">$s </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br />    }<br />    return (isset(</span><span class="default">$s</span><span class="keyword">) &amp;&amp; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)); </span><span class="comment">// var is set and not an empty string ''<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />Instead of saying if (!empty($var)) { // it's not empty } you can just say if (check_not_empty($var)) { // it's not empty }.<br /><br />If you want strings that only contain whitespace (such as tabs or spaces) to be treated as empty then do: check_not_empty($var, 1)<br /><br />If you want to check if a string IS empty then do: !check_not_empty($var).<br /><br />So, whenever you want to check if a form field both exists and contains a value just do: if (check_not_empty($_POST['foo'], 1))<br /><br />no need to do if (isset() &amp;&amp; !empty()) anymore =]</span></code></div>
  </div>
 </div>
  <div class="note" id="107819">  <div class="votes">
    <div id="Vu107819">
    <a href="/manual/vote-note.php?id=107819&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107819">
    <a href="/manual/vote-note.php?id=107819&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107819" title="52% like this...">
    2
    </div>
  </div>
  <a href="#107819" class="name">
  <strong class="user"><em>qeremy</em></strong></a><a class="genanchor" href="#107819"> &para;</a><div class="date" title="2012-03-07 03:33"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107819">
<div class="phpcode"><code><span class="html">Simple solution for: "Fatal error: Can't use function return value in write context in ..."<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">_empty</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) { return empty(</span><span class="default">$val</span><span class="keyword">); }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121375">  <div class="votes">
    <div id="Vu121375">
    <a href="/manual/vote-note.php?id=121375&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121375">
    <a href="/manual/vote-note.php?id=121375&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121375" title="50% like this...">
    0
    </div>
  </div>
  <a href="#121375" class="name">
  <strong class="user"><em>xzero at elite7hackers dot net</em></strong></a><a class="genanchor" href="#121375"> &para;</a><div class="date" title="2017-07-13 11:36"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121375">
<div class="phpcode"><code><span class="html">Note that empty() will return false on null byte. Eg.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Save to variable, so it works on older PHP versions<br /></span><span class="default">$null_byte </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// === \0<br /><br /></span><span class="default">var_dump</span><span class="keyword">(<br />    empty(</span><span class="default">null</span><span class="keyword">),<br />    empty(</span><span class="default">$null_byte</span><span class="keyword">)<br />);<br /></span><span class="comment">/**<br /> * Results:<br /> * <br /> * bool(true)<br /> * bool(false)<br /> */</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118981">  <div class="votes">
    <div id="Vu118981">
    <a href="/manual/vote-note.php?id=118981&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118981">
    <a href="/manual/vote-note.php?id=118981&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118981" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118981" class="name">
  <strong class="user"><em>Javier Alfonso</em></strong></a><a class="genanchor" href="#118981"> &para;</a><div class="date" title="2016-03-11 01:05"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118981">
<div class="phpcode"><code><span class="html">If you test an element of an array (like $_POST['key]), it test if the key doesn't exist or if it exist if its value is empty and never emit a warning.<br /><br />For who don't want to test what happen if passed an array element here is my test and result.<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= array();<br /></span><span class="default">$b </span><span class="keyword">= array(</span><span class="string">'key'</span><span class="keyword">);<br /></span><span class="default">$c </span><span class="keyword">= array(</span><span class="string">'key' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">$d </span><span class="keyword">= array(</span><span class="string">'key' </span><span class="keyword">=&gt; </span><span class="string">'La verdad nos hace libres'</span><span class="keyword">);<br /><br />echo (empty(</span><span class="default">$a</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">])?</span><span class="string">'A empty'</span><span class="keyword">:</span><span class="string">'A not empty'</span><span class="keyword">), </span><span class="string">' - '</span><span class="keyword">, (empty(</span><span class="default">$b</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">])?</span><span class="string">'B empty'</span><span class="keyword">:</span><span class="string">'B not empty'</span><span class="keyword">), </span><span class="string">' - '</span><span class="keyword">, (empty(</span><span class="default">$c</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">])?</span><span class="string">'C empty'</span><span class="keyword">:</span><span class="string">'C not empty'</span><span class="keyword">), </span><span class="string">' - '</span><span class="keyword">, (empty(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">'key'</span><span class="keyword">])?</span><span class="string">'D empty'</span><span class="keyword">:</span><span class="string">'D not empty'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And the result is:<br /><br />    A empty - B empty - C empty - D not empty</span></code></div>
  </div>
 </div>
  <div class="note" id="87302">  <div class="votes">
    <div id="Vu87302">
    <a href="/manual/vote-note.php?id=87302&amp;page=function.empty&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87302">
    <a href="/manual/vote-note.php?id=87302&amp;page=function.empty&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87302" title="50% like this...">
    0
    </div>
  </div>
  <a href="#87302" class="name">
  <strong class="user"><em>thomas at thomasnoest dot nl</em></strong></a><a class="genanchor" href="#87302"> &para;</a><div class="date" title="2008-11-28 01:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87302">
<div class="phpcode"><code><span class="html">Note on the selfmade empty function below:<br /><br />function_exists() returns false on language constructs and empty is a language construct.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.empty&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.empty.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
