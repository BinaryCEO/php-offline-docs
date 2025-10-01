<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: floatval - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.floatval.php">
 <link rel="shorturl" href="https://www.php.net/floatval">
 <link rel="alternate" href="https://www.php.net/floatval" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.empty.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-debug-type.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.floatval.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.floatval.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.floatval.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.floatval.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.floatval.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.floatval.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.floatval.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.floatval.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.floatval.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.floatval.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.floatval.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get float value of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: floatval - Manual" />
<meta name="twitter:description" content="Get float value of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: floatval - Manual" />
<meta itemprop="description" content="Get float value of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get float value of a variable" />

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
        <a href="function.get-debug-type.php">
          get_debug_type &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.empty.php">
          &laquo; empty        </a>
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
            <option value='en/function.floatval.php' selected="selected">English</option>
            <option value='de/function.floatval.php'>German</option>
            <option value='es/function.floatval.php'>Spanish</option>
            <option value='fr/function.floatval.php'>French</option>
            <option value='it/function.floatval.php'>Italian</option>
            <option value='ja/function.floatval.php'>Japanese</option>
            <option value='pt_BR/function.floatval.php'>Brazilian Portuguese</option>
            <option value='ru/function.floatval.php'>Russian</option>
            <option value='tr/function.floatval.php'>Turkish</option>
            <option value='uk/function.floatval.php'>Ukrainian</option>
            <option value='zh/function.floatval.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.floatval" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">floatval</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">floatval</span> &mdash; <span class="dc-title">Get float value of a variable</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.floatval-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>floatval</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Gets the <span class="type"><a href="language.types.float.php" class="type float">float</a></span> value of <code class="parameter">value</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.floatval-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       May be any scalar type. <span class="function"><strong>floatval()</strong></span> should not be used
       on objects, as doing so will emit an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level
       error and return 1.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.floatval-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The float value of the given variable. Empty arrays return 0, non-empty
   arrays return 1.
  </p>
  <p class="para">
   Strings will most likely return 0 although this depends on the 
   leftmost characters of the string. The common rules of 
   <a href="language.types.float.php#language.types.float.casting" class="link">float casting</a> 
   apply.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.floatval-changelog">
  <h3 class="title">Changelog</h3>
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
       The error level when converting from object was changed from <strong><code><a href="errorfunc.constants.php#constant.e-notice">E_NOTICE</a></code></strong> to <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.floatval-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5638">
    <p><strong>Example #1 <span class="function"><strong>floatval()</strong></span> Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'122.34343The'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$float_value_of_var </span><span style="color: #007700">= </span><span style="color: #0000BB">floatval</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$float_value_of_var</span><span style="color: #007700">; </span><span style="color: #FF8000">// 122.34343<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5639">
    <p><strong>Example #2 <span class="function"><strong>floatval()</strong></span> non-numeric leftmost characters Example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$var </span><span style="color: #007700">= </span><span style="color: #DD0000">'The122.34343'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$float_value_of_var </span><span style="color: #007700">= </span><span style="color: #0000BB">floatval</span><span style="color: #007700">(</span><span style="color: #0000BB">$var</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$float_value_of_var</span><span style="color: #007700">; </span><span style="color: #FF8000">// 0<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.floatval-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.boolval.php" class="function" rel="rdfs-seeAlso">boolval()</a> - Get the boolean value of a variable</span></li>
    <li><span class="function"><a href="function.intval.php" class="function" rel="rdfs-seeAlso">intval()</a> - Get the integer value of a variable</span></li>
    <li><span class="function"><a href="function.strval.php" class="function" rel="rdfs-seeAlso">strval()</a> - Get string value of a variable</span></li>
    <li><span class="function"><a href="function.settype.php" class="function" rel="rdfs-seeAlso">settype()</a> - Set the type of a variable</span></li>
    <li><a href="language.types.type-juggling.php" class="link">Type juggling</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/floatval.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.floatval%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.floatval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.floatval.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114486">  <div class="votes">
    <div id="Vu114486">
    <a href="/manual/vote-note.php?id=114486&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114486">
    <a href="/manual/vote-note.php?id=114486&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114486" title="79% like this...">
    122
    </div>
  </div>
  <a href="#114486" class="name">
  <strong class="user"><em>brewal dot renault at gmail dot com</em></strong></a><a class="genanchor" href="#114486"> &para;</a><div class="date" title="2014-02-26 09:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114486">
<div class="phpcode"><code><span class="html">This function takes the last comma or dot (if any) to make a clean float, ignoring thousand separator, currency or any other letter :<br /><br />function tofloat($num) {<br />    $dotPos = strrpos($num, '.');<br />    $commaPos = strrpos($num, ',');<br />    $sep = (($dotPos &gt; $commaPos) &amp;&amp; $dotPos) ? $dotPos : <br />        ((($commaPos &gt; $dotPos) &amp;&amp; $commaPos) ? $commaPos : false);<br />   <br />    if (!$sep) {<br />        return floatval(preg_replace("/[^0-9]/", "", $num));<br />    } <br /><br />    return floatval(<br />        preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .<br />        preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))<br />    );<br />}<br /><br />$num = '1.999,369€';<br />var_dump(tofloat($num)); // float(1999.369)<br />$otherNum = '126,564,789.33 m²';<br />var_dump(tofloat($otherNum)); // float(126564789.33)<br /><br />Demo : <a href="http://codepad.org/NW4e9hQH" rel="nofollow" target="_blank">http://codepad.org/NW4e9hQH</a></span></code></div>
  </div>
 </div>
  <div class="note" id="52028">  <div class="votes">
    <div id="Vu52028">
    <a href="/manual/vote-note.php?id=52028&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52028">
    <a href="/manual/vote-note.php?id=52028&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52028" title="73% like this...">
    56
    </div>
  </div>
  <a href="#52028" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52028"> &para;</a><div class="date" title="2005-04-19 05:30"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52028">
<div class="phpcode"><code><span class="html">you can also use typecasting instead of functions:<br /><br />(float) $value;</span></code></div>
  </div>
 </div>
  <div class="note" id="119044">  <div class="votes">
    <div id="Vu119044">
    <a href="/manual/vote-note.php?id=119044&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119044">
    <a href="/manual/vote-note.php?id=119044&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119044" title="70% like this...">
    21
    </div>
  </div>
  <a href="#119044" class="name">
  <strong class="user"><em>Alexey M</em></strong></a><a class="genanchor" href="#119044"> &para;</a><div class="date" title="2016-03-23 02:28"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119044">
<div class="phpcode"><code><span class="html">There is much easier way to deal with formatted numbers:<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= </span><span class="string">'13,232.95'</span><span class="keyword">;<br /></span><span class="default">$var </span><span class="keyword">= (double)</span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">FILTER_SANITIZE_NUMBER_FLOAT</span><span class="keyword">, </span><span class="default">FILTER_FLAG_ALLOW_FRACTION</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>double(13232.95)</span></code></div>
  </div>
 </div>
  <div class="note" id="106367">  <div class="votes">
    <div id="Vu106367">
    <a href="/manual/vote-note.php?id=106367&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106367">
    <a href="/manual/vote-note.php?id=106367&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106367" title="67% like this...">
    26
    </div>
  </div>
  <a href="#106367" class="name">
  <strong class="user"><em>PapaPinguoin</em></strong></a><a class="genanchor" href="#106367"> &para;</a><div class="date" title="2011-10-31 07:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106367">
<div class="phpcode"><code><span class="html">To view the very large and very small numbers (eg from a database DECIMAL), without displaying scientific notation, or leading zeros.<br /><br />FR : Pour afficher les très grand et très petits nombres (ex. depuis une base de données DECIMAL), sans afficher la notation scientifique, ni les zéros non significatifs.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">floattostr</span><span class="keyword">( </span><span class="default">$val </span><span class="keyword">)<br />{<br />    </span><span class="default">preg_match</span><span class="keyword">( </span><span class="string">"#^([\+\-]|)([0-9]*)(\.([0-9]*?)|)(0*)$#"</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">), </span><span class="default">$o </span><span class="keyword">);<br />    return </span><span class="default">$o</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%d'</span><span class="keyword">,</span><span class="default">$o</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]).(</span><span class="default">$o</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]!=</span><span class="string">'.'</span><span class="keyword">?</span><span class="default">$o</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]:</span><span class="string">''</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"0000000000000001"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"1.00000000000000"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"0.00000000001000"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"0000.00010000000"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"000000010000000000.00000000000010000000000"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"-0000000000000.1"</span><span class="keyword">);<br />echo </span><span class="default">floattostr</span><span class="keyword">(</span><span class="string">"-00000001.100000"</span><span class="keyword">);<br /><br /></span><span class="comment">// result<br />// 1<br />// 1<br />// 0.00000000001<br />// 0.0001<br />// 10000000000.0000000000001<br />// -0.1<br />// -1.1<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43262">  <div class="votes">
    <div id="Vu43262">
    <a href="/manual/vote-note.php?id=43262&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43262">
    <a href="/manual/vote-note.php?id=43262&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43262" title="67% like this...">
    19
    </div>
  </div>
  <a href="#43262" class="name">
  <strong class="user"><em>anonymous at start dot be</em></strong></a><a class="genanchor" href="#43262"> &para;</a><div class="date" title="2004-06-15 07:00"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43262">
<div class="phpcode"><code><span class="html">Easier-to-grasp-function for the ',' problem.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">Getfloat</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {
<br />  if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">)) {
<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// replace dots (thousand seps) with blancs
<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// replace ',' with '.'
<br />  </span><span class="keyword">}
<br />  
<br />  if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"#([0-9\.]+)#"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">)) { </span><span class="comment">// search for number that may contain '.'
<br />    </span><span class="keyword">return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />  } else {
<br />    return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// take some last chances with floatval
<br />  </span><span class="keyword">}
<br />}
<br />
<br />echo </span><span class="default">Getfloat</span><span class="keyword">(</span><span class="string">"$ 19.332,35-"</span><span class="keyword">); </span><span class="comment">// will print: 19332.35
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92563">  <div class="votes">
    <div id="Vu92563">
    <a href="/manual/vote-note.php?id=92563&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92563">
    <a href="/manual/vote-note.php?id=92563&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92563" title="64% like this...">
    9
    </div>
  </div>
  <a href="#92563" class="name">
  <strong class="user"><em>chris at georgakopoulos dot com</em></strong></a><a class="genanchor" href="#92563"> &para;</a><div class="date" title="2009-07-29 08:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92563">
<div class="phpcode"><code><span class="html">locale aware floatval:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ParseFloat</span><span class="keyword">(</span><span class="default">$floatString</span><span class="keyword">){
<br />    </span><span class="default">$LocaleInfo </span><span class="keyword">= </span><span class="default">localeconv</span><span class="keyword">();
<br />    </span><span class="default">$floatString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$LocaleInfo</span><span class="keyword">[</span><span class="string">"mon_thousands_sep"</span><span class="keyword">] , </span><span class="string">""</span><span class="keyword">, </span><span class="default">$floatString</span><span class="keyword">);
<br />    </span><span class="default">$floatString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$LocaleInfo</span><span class="keyword">[</span><span class="string">"mon_decimal_point"</span><span class="keyword">] , </span><span class="string">"."</span><span class="keyword">, </span><span class="default">$floatString</span><span class="keyword">);
<br />    return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$floatString</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="48163">  <div class="votes">
    <div id="Vu48163">
    <a href="/manual/vote-note.php?id=48163&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48163">
    <a href="/manual/vote-note.php?id=48163&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48163" title="57% like this...">
    2
    </div>
  </div>
  <a href="#48163" class="name">
  <strong class="user"><em>pillepop2003 at yahoo dot de</em></strong></a><a class="genanchor" href="#48163"> &para;</a><div class="date" title="2004-12-14 02:38"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48163">
<div class="phpcode"><code><span class="html">Use this snippet to extract any float out of a string. You can choose how a single dot is treated with the (bool) 'single_dot_as_decimal' directive.<br />This function should be able to cover almost all floats that appear in an european environment.<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">float</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$set</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">) <br />    {            <br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/([0-9\.,-]+)/"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">))<br />        {<br />            </span><span class="comment">// Found number in $str, so set $str that number<br />            </span><span class="default">$str </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            <br />            if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">','</span><span class="keyword">)) <br />            {<br />                </span><span class="comment">// A comma exists, that makes it easy, cos we assume it separates the decimal part.<br />                </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// Erase thousand seps<br />                </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// Convert , to . for floatval command<br />                <br />                </span><span class="keyword">return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />            }<br />            else<br />            {<br />                </span><span class="comment">// No comma exists, so we have to decide, how a single dot shall be treated<br />                </span><span class="keyword">if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[0-9]*[\.]{1}[0-9-]+$/"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">) == </span><span class="default">TRUE </span><span class="keyword">&amp;&amp; </span><span class="default">$set</span><span class="keyword">[</span><span class="string">'single_dot_as_decimal'</span><span class="keyword">] == </span><span class="default">TRUE</span><span class="keyword">)<br />                {<br />                    </span><span class="comment">// Treat single dot as decimal separator<br />                    </span><span class="keyword">return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />                    <br />                }<br />                else<br />                {<br />                    </span><span class="comment">// Else, treat all dots as thousand seps<br />                    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);    </span><span class="comment">// Erase thousand seps<br />                    </span><span class="keyword">return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />                }                <br />            }<br />        }<br />        <br />        else<br />        {<br />            </span><span class="comment">// No number found, return zero<br />            </span><span class="keyword">return </span><span class="default">0</span><span class="keyword">;<br />        }<br />    }<br /><br /></span><span class="comment">// Examples<br /><br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 123,00 bar'</span><span class="keyword">); </span><span class="comment">// returns 123.00<br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 123.00 bar' </span><span class="keyword">array(</span><span class="string">'single_dot_as_decimal'</span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">)); </span><span class="comment">//returns 123.000<br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 123.00 bar' </span><span class="keyword">array(</span><span class="string">'single_dot_as_decimal'</span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">)); </span><span class="comment">//returns 123000<br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 222.123.00 bar' </span><span class="keyword">array(</span><span class="string">'single_dot_as_decimal'</span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">)); </span><span class="comment">//returns 222123000<br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 222.123.00 bar' </span><span class="keyword">array(</span><span class="string">'single_dot_as_decimal'</span><span class="keyword">=&gt; </span><span class="default">FALSE</span><span class="keyword">)); </span><span class="comment">//returns 222123000<br /><br />// The decimal part can also consist of '-'<br /></span><span class="keyword">echo </span><span class="default">float</span><span class="keyword">(</span><span class="string">'foo 123,-- bar'</span><span class="keyword">); </span><span class="comment">// returns 123.00<br /><br /></span><span class="default">?&gt;<br /></span><br />Big Up.<br />Philipp</span></code></div>
  </div>
 </div>
  <div class="note" id="69391">  <div class="votes">
    <div id="Vu69391">
    <a href="/manual/vote-note.php?id=69391&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69391">
    <a href="/manual/vote-note.php?id=69391&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69391" title="55% like this...">
    2
    </div>
  </div>
  <a href="#69391" class="name">
  <strong class="user"><em>aa at geb-team dot de</em></strong></a><a class="genanchor" href="#69391"> &para;</a><div class="date" title="2006-09-04 08:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69391">
<div class="phpcode"><code><span class="html">@pillepop2003 at yahoo dot de<br /><br /><span class="default">&lt;?php<br />float</span><span class="keyword">(</span><span class="string">'-100.00'</span><span class="keyword">, array(</span><span class="string">'single_dot_as_decimal' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">)); </span><span class="comment">// whoops, returns -10000<br /></span><span class="default">?&gt;<br /></span><br />use: "/^[0-9-]*[\.]{1}[0-9-]+$/"<br />instead of: "/^[0-9]*[\.]{1}[0-9-]+$/"</span></code></div>
  </div>
 </div>
  <div class="note" id="84590">  <div class="votes">
    <div id="Vu84590">
    <a href="/manual/vote-note.php?id=84590&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84590">
    <a href="/manual/vote-note.php?id=84590&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84590" title="54% like this...">
    3
    </div>
  </div>
  <a href="#84590" class="name">
  <strong class="user"><em>steve at opilo dot net</em></strong></a><a class="genanchor" href="#84590"> &para;</a><div class="date" title="2008-07-20 06:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84590">
<div class="phpcode"><code><span class="html">Most of the functions listed here that deal with $ and , are unnecessarily complicated. You can use ereg_replace() to strip out ALL of the characters that will cause floatval to fail in one simple line of code:
<br />
<br /><span class="default">&lt;?php $output </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"[^-0-9\.]"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$input</span><span class="keyword">)); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101666">  <div class="votes">
    <div id="Vu101666">
    <a href="/manual/vote-note.php?id=101666&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101666">
    <a href="/manual/vote-note.php?id=101666&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101666" title="52% like this...">
    1
    </div>
  </div>
  <a href="#101666" class="name">
  <strong class="user"><em>secretr at NOSPAM dot e107 dot org</em></strong></a><a class="genanchor" href="#101666"> &para;</a><div class="date" title="2011-01-03 08:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101666">
<div class="phpcode"><code><span class="html">setlocale() and floatval() duo could break your DB queries in a very simple way:<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'bg_BG'</span><span class="keyword">, </span><span class="string">'bgr_BGR'</span><span class="keyword">); <br />echo </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">0.15</span><span class="keyword">); </span><span class="comment">// output 0,15<br /></span><span class="default">?&gt;<br /></span><br />You would need simple workaround like:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">number2db</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)<br />{<br />    </span><span class="default">$larr </span><span class="keyword">= </span><span class="default">localeconv</span><span class="keyword">();<br />    </span><span class="default">$search </span><span class="keyword">= array(<br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'decimal_point'</span><span class="keyword">], <br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'mon_decimal_point'</span><span class="keyword">], <br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'thousands_sep'</span><span class="keyword">], <br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'mon_thousands_sep'</span><span class="keyword">], <br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'currency_symbol'</span><span class="keyword">], <br />        </span><span class="default">$larr</span><span class="keyword">[</span><span class="string">'int_curr_symbol'</span><span class="keyword">]<br />    );<br />    </span><span class="default">$replace </span><span class="keyword">= array(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br /><br />    return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">$search</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />}<br /><br /></span><span class="default">setlocale</span><span class="keyword">(</span><span class="default">LC_ALL</span><span class="keyword">, </span><span class="string">'bg_BG'</span><span class="keyword">, </span><span class="string">'bgr_BGR'</span><span class="keyword">); <br /></span><span class="default">$testVal </span><span class="keyword">= </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">0.15</span><span class="keyword">); </span><span class="comment">// result 0,15<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$testVal</span><span class="keyword">, </span><span class="default">number2db</span><span class="keyword">(</span><span class="default">$testVal</span><span class="keyword">));<br /><br /></span><span class="comment">// Result:<br />// float(0,15) <br />// string(4) "0.15" <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84793">  <div class="votes">
    <div id="Vu84793">
    <a href="/manual/vote-note.php?id=84793&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84793">
    <a href="/manual/vote-note.php?id=84793&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84793" title="51% like this...">
    1
    </div>
  </div>
  <a href="#84793" class="name">
  <strong class="user"><em>Michiel</em></strong></a><a class="genanchor" href="#84793"> &para;</a><div class="date" title="2008-07-30 05:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84793">
<div class="phpcode"><code><span class="html">The last getFloat() function is not completely correct.
<br />
<br />1.000.000 and 1,000,000 and its negative variants are not correctly parsed. For the sake of comparing and to make myself clear I use the name parseFloat in stead of getFloat for the new function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">parseFloat</span><span class="keyword">(</span><span class="default">$ptString</span><span class="keyword">) {
<br />            if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$ptString</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {
<br />                    return </span><span class="default">false</span><span class="keyword">;
<br />            }
<br />            
<br />            </span><span class="default">$pString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$ptString</span><span class="keyword">);
<br />            
<br />            if (</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">, </span><span class="string">","</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">)
<br />                </span><span class="default">$pString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">);
<br />            
<br />            if (</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">)
<br />                </span><span class="default">$pString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">);
<br />            
<br />            </span><span class="default">$pregResult </span><span class="keyword">= array();
<br />        
<br />            </span><span class="default">$commaset </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">,</span><span class="string">','</span><span class="keyword">);
<br />            if (</span><span class="default">$commaset </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {</span><span class="default">$commaset </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;}
<br />        
<br />            </span><span class="default">$pointset </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">);
<br />            if (</span><span class="default">$pointset </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {</span><span class="default">$pointset </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;}
<br />        
<br />            </span><span class="default">$pregResultA </span><span class="keyword">= array();
<br />            </span><span class="default">$pregResultB </span><span class="keyword">= array();
<br />        
<br />            if (</span><span class="default">$pointset </span><span class="keyword">&lt; </span><span class="default">$commaset</span><span class="keyword">) {
<br />                </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#'</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">, </span><span class="default">$pregResultA</span><span class="keyword">);
<br />            }
<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#'</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">, </span><span class="default">$pregResultB</span><span class="keyword">);
<br />            if ((isset(</span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; (!isset(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />                    || </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$preResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="default">0
<br />                    </span><span class="keyword">|| !</span><span class="default">$pointset</span><span class="keyword">))) {
<br />                </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />                </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);
<br />                </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);
<br />            }
<br />            elseif (isset(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; (!isset(</span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />                    || </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$preResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="default">0
<br />                    </span><span class="keyword">|| !</span><span class="default">$commaset</span><span class="keyword">)) {
<br />                </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />                </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);
<br />            }
<br />            else {
<br />                return </span><span class="default">false</span><span class="keyword">;
<br />            }
<br />            </span><span class="default">$result </span><span class="keyword">= (float)</span><span class="default">$numberString</span><span class="keyword">;
<br />            return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Comparing of float parsing functions with the following function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">testFloatParsing</span><span class="keyword">() {
<br />    </span><span class="default">$floatvals </span><span class="keyword">= array(
<br />        </span><span class="string">"22 000,76"</span><span class="keyword">,
<br />        </span><span class="string">"22.000,76"</span><span class="keyword">,
<br />        </span><span class="string">"22,000.76"</span><span class="keyword">,
<br />        </span><span class="string">"22 000"</span><span class="keyword">,
<br />        </span><span class="string">"22,000"</span><span class="keyword">,
<br />        </span><span class="string">"22.000"</span><span class="keyword">,
<br />        </span><span class="string">"22000.76"</span><span class="keyword">,
<br />        </span><span class="string">"22000,76"</span><span class="keyword">,
<br />        </span><span class="string">"1.022.000,76"</span><span class="keyword">,
<br />        </span><span class="string">"1,022,000.76"</span><span class="keyword">,
<br />        </span><span class="string">"1,000,000"</span><span class="keyword">,
<br />        </span><span class="string">"1.000.000"</span><span class="keyword">,
<br />        </span><span class="string">"1022000.76"</span><span class="keyword">,
<br />        </span><span class="string">"1022000,76"</span><span class="keyword">,
<br />        </span><span class="string">"1022000"</span><span class="keyword">,
<br />        </span><span class="string">"0.76"</span><span class="keyword">,
<br />        </span><span class="string">"0,76"</span><span class="keyword">,
<br />        </span><span class="string">"0.00"</span><span class="keyword">,
<br />        </span><span class="string">"0,00"</span><span class="keyword">,
<br />        </span><span class="string">"1.00"</span><span class="keyword">,
<br />        </span><span class="string">"1,00"</span><span class="keyword">,
<br />        </span><span class="string">"-22 000,76"</span><span class="keyword">,
<br />        </span><span class="string">"-22.000,76"</span><span class="keyword">,
<br />        </span><span class="string">"-22,000.76"</span><span class="keyword">,
<br />        </span><span class="string">"-22 000"</span><span class="keyword">,
<br />        </span><span class="string">"-22,000"</span><span class="keyword">,
<br />        </span><span class="string">"-22.000"</span><span class="keyword">,
<br />        </span><span class="string">"-22000.76"</span><span class="keyword">,
<br />        </span><span class="string">"-22000,76"</span><span class="keyword">,
<br />        </span><span class="string">"-1.022.000,76"</span><span class="keyword">,
<br />        </span><span class="string">"-1,022,000.76"</span><span class="keyword">,
<br />        </span><span class="string">"-1,000,000"</span><span class="keyword">,
<br />        </span><span class="string">"-1.000.000"</span><span class="keyword">,
<br />        </span><span class="string">"-1022000.76"</span><span class="keyword">,
<br />        </span><span class="string">"-1022000,76"</span><span class="keyword">,
<br />        </span><span class="string">"-1022000"</span><span class="keyword">,
<br />        </span><span class="string">"-0.76"</span><span class="keyword">,
<br />        </span><span class="string">"-0,76"</span><span class="keyword">,
<br />        </span><span class="string">"-0.00"</span><span class="keyword">,
<br />        </span><span class="string">"-0,00"</span><span class="keyword">,
<br />        </span><span class="string">"-1.00"</span><span class="keyword">,
<br />        </span><span class="string">"-1,00"
<br />    </span><span class="keyword">);
<br />    
<br />    echo </span><span class="string">"&lt;table&gt;
<br />        &lt;tr&gt;
<br />            &lt;th&gt;String&lt;/th&gt;
<br />            &lt;th&gt;floatval()&lt;/th&gt;
<br />            &lt;th&gt;getFloat()&lt;/th&gt;
<br />            &lt;th&gt;parseFloat()&lt;/th&gt;
<br />        &lt;/tr&gt;"</span><span class="keyword">;
<br />        
<br />    foreach (</span><span class="default">$floatvals </span><span class="keyword">as </span><span class="default">$fval</span><span class="keyword">) {
<br />        echo </span><span class="string">"&lt;tr&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. (string) </span><span class="default">$fval </span><span class="keyword">. </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />        
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. (float) </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$fval</span><span class="keyword">) . </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. (float) </span><span class="default">getFloat</span><span class="keyword">(</span><span class="default">$fval</span><span class="keyword">) . </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;td&gt;" </span><span class="keyword">. (float) </span><span class="default">parseFloat</span><span class="keyword">(</span><span class="default">$fval</span><span class="keyword">) . </span><span class="string">"&lt;/td&gt;"</span><span class="keyword">;
<br />        echo </span><span class="string">"&lt;/tr&gt;"</span><span class="keyword">;
<br />    }
<br />    echo </span><span class="string">"&lt;/table&gt;"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120168">  <div class="votes">
    <div id="Vu120168">
    <a href="/manual/vote-note.php?id=120168&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120168">
    <a href="/manual/vote-note.php?id=120168&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120168" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120168" class="name">
  <strong class="user"><em>pierpaolocira</em></strong></a><a class="genanchor" href="#120168"> &para;</a><div class="date" title="2016-11-15 11:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120168">
<div class="phpcode"><code><span class="html">Be aware the last tofloat($num).<br /><br />In theory it is very useful to have a function "separator-agnostic" (I think "locale based" solutions are useless if you have to parse a user file that can have a locale different to the server).<br /><br />But this can lead to misinterpretations; in short: "123,456" is "123.456" (so comma used as decimal separator) or "123456" (comma used as thousand separator).<br /><br />In any case, if you really want to use it, please don't forget that this function doesn't manage negative numbers.</span></code></div>
  </div>
 </div>
  <div class="note" id="120730">  <div class="votes">
    <div id="Vu120730">
    <a href="/manual/vote-note.php?id=120730&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120730">
    <a href="/manual/vote-note.php?id=120730&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120730" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#120730" class="name">
  <strong class="user"><em>T-Soloveychik at ya.ru</em></strong></a><a class="genanchor" href="#120730"> &para;</a><div class="date" title="2017-03-03 02:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120730">
<div class="phpcode"><code><span class="html">Float value less than 0.0001 (0.0000999999999999995) will be converted by floatval to scientific notation (exponential notation):<br /><span class="default">&lt;?php<br /><br />var_dump</span><span class="keyword">(</span><span class="default">floatval</span><span class="keyword">(</span><span class="default">0.0000999999999999995</span><span class="keyword">)); </span><span class="comment"># &gt;&gt; float(0,0001)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">floatval</span><span class="keyword">(</span><span class="string">"0.000099"</span><span class="keyword">)); </span><span class="comment"># &gt;&gt; float(9.9E-5)<br /><br /></span><span class="default">var_dump</span><span class="keyword">((string)</span><span class="default">floatval</span><span class="keyword">(</span><span class="default">0.000099</span><span class="keyword">)); </span><span class="comment"># &gt;&gt; string(6) "9.9E-5"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118195">  <div class="votes">
    <div id="Vu118195">
    <a href="/manual/vote-note.php?id=118195&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118195">
    <a href="/manual/vote-note.php?id=118195&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118195" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#118195" class="name">
  <strong class="user"><em>zfcb13 at gmail dot com</em></strong></a><a class="genanchor" href="#118195"> &para;</a><div class="date" title="2015-10-24 10:18"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118195">
<div class="phpcode"><code><span class="html">More elegant function with selection of decimal point (deafault ,):<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">floatvaldec</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$dec</span><span class="keyword">=</span><span class="string">','</span><span class="keyword">) { return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"," </span><span class="keyword">, </span><span class="string">"." </span><span class="keyword">, </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"[^-0-9</span><span class="default">$dec</span><span class="string">]"</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$v</span><span class="keyword">))); }<br /><br /></span><span class="comment">// examples:<br /></span><span class="keyword">echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">.</span><span class="default">floatvaldec</span><span class="keyword">(</span><span class="string">'somthing123.456.789,12Euro'</span><span class="keyword">) ; <br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">.</span><span class="default">floatvaldec</span><span class="keyword">(</span><span class="string">'x123,456 789.12 Euro'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">) ; <br />echo </span><span class="string">'&lt;br&gt;'</span><span class="keyword">.</span><span class="default">floatvaldec</span><span class="keyword">(</span><span class="string">'123.456 789,12$'</span><span class="keyword">) ;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31533">  <div class="votes">
    <div id="Vu31533">
    <a href="/manual/vote-note.php?id=31533&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31533">
    <a href="/manual/vote-note.php?id=31533&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31533" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#31533" class="name">
  <strong class="user"><em>Zipi</em></strong></a><a class="genanchor" href="#31533"> &para;</a><div class="date" title="2003-04-25 02:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31533">
<div class="phpcode"><code><span class="html">This function converts a string to a float no matter is the decimal separator dot (.) or comma (,). It also converts integers correctly. It takes the digits from the beginning of the string and ignores all other characters.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$strValue</span><span class="keyword">) {
<br />   </span><span class="default">$floatValue </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"(^[0-9]*)(\\.|,)([0-9]*)(.*)"</span><span class="keyword">, </span><span class="string">"\\1.\\3"</span><span class="keyword">, </span><span class="default">$strValue</span><span class="keyword">);
<br />   if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$floatValue</span><span class="keyword">)) </span><span class="default">$floatValue </span><span class="keyword">= </span><span class="default">ereg_replace</span><span class="keyword">(</span><span class="string">"(^[0-9]*)(.*)"</span><span class="keyword">, </span><span class="string">"\\1"</span><span class="keyword">, </span><span class="default">$strValue</span><span class="keyword">);
<br />   if (!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$floatValue</span><span class="keyword">)) </span><span class="default">$floatValue </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />   return </span><span class="default">$floatValue</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;
<br /></span>
<br />-Zipi (Finland)</span></code></div>
  </div>
 </div>
  <div class="note" id="30146">  <div class="votes">
    <div id="Vu30146">
    <a href="/manual/vote-note.php?id=30146&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30146">
    <a href="/manual/vote-note.php?id=30146&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30146" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#30146" class="name">
  <strong class="user"><em>jason at shadonet dot com</em></strong></a><a class="genanchor" href="#30146"> &para;</a><div class="date" title="2003-03-07 07:07"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30146">
<div class="phpcode"><code><span class="html">Instead of using floatval which only appeared in PHP 4.2 you could juse use $variable = (float)$variable<br /><br />This function doesn't seem to add any functionality that wasn't already there.</span></code></div>
  </div>
 </div>
  <div class="note" id="123303">  <div class="votes">
    <div id="Vu123303">
    <a href="/manual/vote-note.php?id=123303&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123303">
    <a href="/manual/vote-note.php?id=123303&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123303" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#123303" class="name">
  <strong class="user"><em>iliyazelenkog at gmail dot com</em></strong></a><a class="genanchor" href="#123303"> &para;</a><div class="date" title="2018-11-02 10:51"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123303">
<div class="phpcode"><code><span class="html">(float) would be more performant here (up to 6x times faster).<br /><br />intval, floatval, doubleval, strva for PHP4 functions (intval, floatval, doubleval, strval), in PHP5 use type casting construction (i.e. '(type) parameter').</span></code></div>
  </div>
 </div>
  <div class="note" id="76537">  <div class="votes">
    <div id="Vu76537">
    <a href="/manual/vote-note.php?id=76537&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76537">
    <a href="/manual/vote-note.php?id=76537&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76537" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#76537" class="name">
  <strong class="user"><em>leprau at leprau dot de</em></strong></a><a class="genanchor" href="#76537"> &para;</a><div class="date" title="2007-07-19 09:26"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76537">
<div class="phpcode"><code><span class="html">For those of you, who are looking for a function that rips the first,<br />but longest possible float (or at least integer) from a string,<br />like 123.45 from the string "Price: 123,45$"<br /><br />If no useable value is found, the function returns false.<br /><br />Checks for both comma and dot as decimal-separator,<br />but does not check for 3 digits between thousands,<br />so 1,234.5 is as valid as 1,23,4.5 (both will return 1234.5)<br /><br />12,.3 will return 12<br />1,000,000 will return 1000.0 !<br /><br />(if thousands separator is defined,<br />decimals should be defined too ... <br />in fact I was too lazy to check for that too)<br /><br />Here you go, and feel free to optimize the function ;)<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getFloat</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">) {<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">) {<br />            return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$pregResult </span><span class="keyword">= array();<br /><br />    </span><span class="default">$commaset </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">,</span><span class="string">','</span><span class="keyword">);<br />    if (</span><span class="default">$commaset </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {</span><span class="default">$commaset </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;}<br /><br />    </span><span class="default">$pointset </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$pString</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">);<br />    if (</span><span class="default">$pointset </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {</span><span class="default">$pointset </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;}<br /><br />    </span><span class="default">$pregResultA </span><span class="keyword">= array();<br />    </span><span class="default">$pregResultB </span><span class="keyword">= array();<br /><br />    if (</span><span class="default">$pointset </span><span class="keyword">&lt; </span><span class="default">$commaset</span><span class="keyword">) {<br />        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(([-]?[0-9]+(\.[0-9])?)+(,[0-9]+)?)#'</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">, </span><span class="default">$pregResultA</span><span class="keyword">);<br />    }<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(([-]?[0-9]+(,[0-9])?)+(\.[0-9]+)?)#'</span><span class="keyword">, </span><span class="default">$pString</span><span class="keyword">, </span><span class="default">$pregResultB</span><span class="keyword">);<br />    if ((isset(</span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; (!isset(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) <br />            || </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$preResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="default">0 <br />            </span><span class="keyword">|| !</span><span class="default">$pointset</span><span class="keyword">))) {<br />        </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);<br />        </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);<br />    }<br />    elseif (isset(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) &amp;&amp; (!isset(</span><span class="default">$pregResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) <br />            || </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$preResultA</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="default">0 <br />            </span><span class="keyword">|| !</span><span class="default">$commaset</span><span class="keyword">)) {<br />        </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">$pregResultB</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />        </span><span class="default">$numberString </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">,</span><span class="default">$numberString</span><span class="keyword">);<br />    }<br />    else {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    </span><span class="default">$result </span><span class="keyword">= (float)</span><span class="default">$numberString</span><span class="keyword">;<br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119550">  <div class="votes">
    <div id="Vu119550">
    <a href="/manual/vote-note.php?id=119550&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119550">
    <a href="/manual/vote-note.php?id=119550&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119550" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#119550" class="name">
  <strong class="user"><em>movila dot e dot v at gmail dot com</em></strong></a><a class="genanchor" href="#119550"> &para;</a><div class="date" title="2016-07-05 08:05"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119550">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php    <br />       $price </span><span class="keyword">= </span><span class="string">'1.299,00 EUR'</span><span class="keyword">;<br />    </span><span class="comment">//$price = 'EUR 1.299,00';<br />    //$price = '$1,745.09';<br />    //$price = '$14';<br />    //$price = '$.14';<br />    <br /><br />    </span><span class="keyword">function </span><span class="default">floatValue</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br />        if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/([0-9\.,-]+)/"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">)){<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            if( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(\.\d{1,2})$/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$dot_delim</span><span class="keyword">) ){<br />                </span><span class="default">$value </span><span class="keyword">= (float)</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />            }<br />            else if( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/(,\d{1,2})$/"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">$comma_delim</span><span class="keyword">) ){<br />                </span><span class="default">$value </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'.'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">); <br />                </span><span class="default">$value </span><span class="keyword">= (float)</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />            }<br />            else<br />                </span><span class="default">$value </span><span class="keyword">= (int)</span><span class="default">$value</span><span class="keyword">;<br />        }<br />        else {<br />            </span><span class="default">$value </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br />        return </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    <br />    echo </span><span class="default">floatValue</span><span class="keyword">(</span><span class="default">$price</span><span class="keyword">);<br /></span><span class="comment">/*<br />    1.299,00<br />    1.299,00<br />    1,745.09<br />    14<br />    0.14<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122396">  <div class="votes">
    <div id="Vu122396">
    <a href="/manual/vote-note.php?id=122396&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122396">
    <a href="/manual/vote-note.php?id=122396&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122396" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#122396" class="name">
  <strong class="user"><em>radler63 at hotmail dot com</em></strong></a><a class="genanchor" href="#122396"> &para;</a><div class="date" title="2018-02-16 12:27"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122396">
<div class="phpcode"><code><span class="html">I get the following disturbing results:<br />var_dump string(10) "﻿0.01333"<br />echo the string=﻿0.01333<br />echo (float)string=0<br />echo floatval(string)=0<br /><br />The string is an outcome of array_map('str_getcsv', file(...<br />I can't find the characters 8-10<br /><br />thanks</span></code></div>
  </div>
 </div>
  <div class="note" id="85346">  <div class="votes">
    <div id="Vu85346">
    <a href="/manual/vote-note.php?id=85346&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85346">
    <a href="/manual/vote-note.php?id=85346&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85346" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#85346" class="name">
  <strong class="user"><em>info at marc-gutt dot de</em></strong></a><a class="genanchor" href="#85346"> &para;</a><div class="date" title="2008-08-26 03:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85346">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">floatvalue</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) {
<br />     return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'#^([-]*[0-9\.,\' ]+?)((\.|,){1}([0-9-]{1,2}))*$#e'</span><span class="keyword">, </span><span class="string">"str_replace(array('.', ',', \"'\", ' '), '', '\\1') . '.\\4'"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />It is much shorter and able to handle those one, too:
<br />xx,-
<br />xx,--
<br />xx'xxx,xx
<br />
<br />After using floatvalue() you can go forward with number_format() as usual.</span></code></div>
  </div>
 </div>
  <div class="note" id="39379">  <div class="votes">
    <div id="Vu39379">
    <a href="/manual/vote-note.php?id=39379&amp;page=function.floatval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39379">
    <a href="/manual/vote-note.php?id=39379&amp;page=function.floatval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39379" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#39379" class="name">
  <strong class="user"><em>vickers at hotpop dot com</em></strong></a><a class="genanchor" href="#39379"> &para;</a><div class="date" title="2004-01-26 03:45"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39379">
<div class="phpcode"><code><span class="html">floatval() does not work with "$35,234.43", as it could not handle the '$' and the ','.  The following takes care of all values, such that only numeric and the decimal sign are input into floatval().  (It probably shows I'm an old 'c' guy)...this function only lightly tested.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">strtflt</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {
<br />    </span><span class="default">$il </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);
<br />    </span><span class="default">$flt </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    </span><span class="default">$cstr </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    
<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$il</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) {
<br />        </span><span class="default">$cstr </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$cstr</span><span class="keyword">) || </span><span class="default">$cstr </span><span class="keyword">== </span><span class="string">"."</span><span class="keyword">)
<br />            </span><span class="default">$flt </span><span class="keyword">= </span><span class="default">$flt</span><span class="keyword">.</span><span class="default">$cstr</span><span class="keyword">;
<br />    }
<br />    return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$flt</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />Richard Vickers
<br />vickers@hotpop.com</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.floatval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.floatval.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
