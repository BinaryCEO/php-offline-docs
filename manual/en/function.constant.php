<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: constant - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.constant.php">
 <link rel="shorturl" href="https://www.php.net/constant">
 <link rel="alternate" href="https://www.php.net/constant" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.connection-status.php">
 <link rel="next" href="https://www.php.net/manual/en/function.define.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.constant.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.constant.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.constant.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.constant.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.constant.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.constant.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.constant.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.constant.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.constant.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.constant.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.constant.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the value of a constant" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: constant - Manual" />
<meta name="twitter:description" content="Returns the value of a constant" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: constant - Manual" />
<meta itemprop="description" content="Returns the value of a constant" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the value of a constant" />

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
        <a href="function.define.php">
          define &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.connection-status.php">
          &laquo; connection_status        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.constant.php' selected="selected">English</option>
            <option value='de/function.constant.php'>German</option>
            <option value='es/function.constant.php'>Spanish</option>
            <option value='fr/function.constant.php'>French</option>
            <option value='it/function.constant.php'>Italian</option>
            <option value='ja/function.constant.php'>Japanese</option>
            <option value='pt_BR/function.constant.php'>Brazilian Portuguese</option>
            <option value='ru/function.constant.php'>Russian</option>
            <option value='tr/function.constant.php'>Turkish</option>
            <option value='uk/function.constant.php'>Ukrainian</option>
            <option value='zh/function.constant.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.constant" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">constant</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">constant</span> &mdash; <span class="dc-title">Returns the value of a constant</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.constant-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>constant</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="simpara">
   Return the value of the constant indicated by
   <code class="parameter">name</code>.
  </p>
  <p class="simpara">
   <span class="function"><strong>constant()</strong></span> is useful if you need to retrieve
   the value of a constant, but do not know its name.  I.e. it is
   stored in a variable or returned by a function.
  </p>
  <p class="simpara">
   This function works also with <a href="language.oop5.constants.php" class="link">class constants</a> and <a href="language.types.enumerations.php" class="link">enum cases</a>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.constant-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The constant name.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.constant-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value of the constant.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.constant-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If the constant is not defined, an <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception is thrown.
   Prior to PHP 8.0.0, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error was generated in that case.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.constant-changelog">
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
       If the constant is not defined, <span class="function"><strong>constant()</strong></span> now throws an
       <span class="classname"><a href="class.error.php" class="classname">Error</a></span> exception; previously an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
       was generated, and <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.constant-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3737">
    <p><strong>Example #1 Using <span class="function"><strong>constant()</strong></span> with Constants</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />define</span><span style="color: #007700">(</span><span style="color: #DD0000">"MAXSIZE"</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">MAXSIZE</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">"MAXSIZE"</span><span style="color: #007700">); </span><span style="color: #FF8000">// same thing as the previous line<br /><br /><br /></span><span style="color: #007700">interface </span><span style="color: #0000BB">bar </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">test </span><span style="color: #007700">= </span><span style="color: #DD0000">'foobar!'</span><span style="color: #007700">;<br />}<br /><br />class </span><span style="color: #0000BB">foo </span><span style="color: #007700">{<br />    const </span><span style="color: #0000BB">test </span><span style="color: #007700">= </span><span style="color: #DD0000">'foobar!'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$const </span><span style="color: #007700">= </span><span style="color: #DD0000">'test'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'bar::'</span><span style="color: #007700">. </span><span style="color: #0000BB">$const</span><span style="color: #007700">)); </span><span style="color: #FF8000">// string(7) "foobar!"<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo::'</span><span style="color: #007700">. </span><span style="color: #0000BB">$const</span><span style="color: #007700">)); </span><span style="color: #FF8000">// string(7) "foobar!"<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3738">
    <p><strong>Example #2 Using <span class="function"><strong>constant()</strong></span> with Enum Cases (as of PHP 8.1.0)</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">enum </span><span style="color: #0000BB">Suit<br /></span><span style="color: #007700">{<br />    case </span><span style="color: #0000BB">Hearts</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Diamonds</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Clubs</span><span style="color: #007700">;<br />    case </span><span style="color: #0000BB">Spades</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$case </span><span style="color: #007700">= </span><span style="color: #DD0000">'Hearts'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">constant</span><span style="color: #007700">(</span><span style="color: #DD0000">'Suit::'</span><span style="color: #007700">. </span><span style="color: #0000BB">$case</span><span style="color: #007700">)); </span><span style="color: #FF8000">// enum(Suit::Hearts)<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.constant-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.define.php" class="function" rel="rdfs-seeAlso">define()</a> - Defines a named constant</span></li>
    <li><span class="function"><a href="function.defined.php" class="function" rel="rdfs-seeAlso">defined()</a> - Checks whether a constant with the given name exists</span></li>
    <li><span class="function"><a href="function.get-defined-constants.php" class="function" rel="rdfs-seeAlso">get_defined_constants()</a> - Returns an associative array with the names of all the constants and their values</span></li>
    <li>The section on <a href="language.constants.php" class="link">Constants</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/constant.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.constant%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.constant&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.constant.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="47364">  <div class="votes">
    <div id="Vu47364">
    <a href="/manual/vote-note.php?id=47364&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47364">
    <a href="/manual/vote-note.php?id=47364&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47364" title="77% like this...">
    83
    </div>
  </div>
  <a href="#47364" class="name">
  <strong class="user"><em>Joachim Kruyswijk</em></strong></a><a class="genanchor" href="#47364"> &para;</a><div class="date" title="2004-11-13 09:12"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47364">
<div class="phpcode"><code><span class="html">The constant name can be an empty string.<br /><br />Code:<br /><br />define("", "foo");<br />echo constant("");<br /><br />Output:<br /><br />foo</span></code></div>
  </div>
 </div>
  <div class="note" id="117145">  <div class="votes">
    <div id="Vu117145">
    <a href="/manual/vote-note.php?id=117145&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117145">
    <a href="/manual/vote-note.php?id=117145&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117145" title="68% like this...">
    21
    </div>
  </div>
  <a href="#117145" class="name">
  <strong class="user"><em>t dot kmieliauskas at gmail dot com</em></strong></a><a class="genanchor" href="#117145"> &para;</a><div class="date" title="2015-04-21 02:02"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117145">
<div class="phpcode"><code><span class="html">If you are referencing class constant (either using namespaces or not, because one day you may want to start using them), you'll have the least headaches when doing it like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    const </span><span class="default">BAR </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br />&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Baz</span><span class="keyword">;<br />use </span><span class="default">\Foo </span><span class="keyword">as </span><span class="default">F</span><span class="keyword">;<br /><br />echo </span><span class="default">constant</span><span class="keyword">(</span><span class="default">F</span><span class="keyword">::class.</span><span class="string">'::BAR'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />since F::class will be dereferenced to whatever namespace shortcuts you are using (and those are way easier to refactor for IDE than just plain strings with hardcoded namespaces in string literals)</span></code></div>
  </div>
 </div>
  <div class="note" id="120113">  <div class="votes">
    <div id="Vu120113">
    <a href="/manual/vote-note.php?id=120113&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120113">
    <a href="/manual/vote-note.php?id=120113&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120113" title="66% like this...">
    10
    </div>
  </div>
  <a href="#120113" class="name">
  <strong class="user"><em>helvete at zhouba dot cz</em></strong></a><a class="genanchor" href="#120113"> &para;</a><div class="date" title="2016-11-03 11:08"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120113">
<div class="phpcode"><code><span class="html">It is worth noting, that keyword 'self' can be used for constant retrieval from within the class it is defined<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />  const </span><span class="default">PARAM_BAR </span><span class="keyword">= </span><span class="string">'baz'</span><span class="keyword">;<br /><br />  public function </span><span class="default">getConst</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">) {<br />    return </span><span class="default">constant</span><span class="keyword">(</span><span class="string">"self::</span><span class="keyword">{</span><span class="default">$name</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">);<br />  }<br />}<br /><br /></span><span class="default">$foo </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br />echo </span><span class="default">$foo</span><span class="keyword">-&gt;</span><span class="default">getConst</span><span class="keyword">(</span><span class="string">'PARAM_BAR'</span><span class="keyword">); </span><span class="comment">// prints 'baz'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111261">  <div class="votes">
    <div id="Vu111261">
    <a href="/manual/vote-note.php?id=111261&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111261">
    <a href="/manual/vote-note.php?id=111261&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111261" title="64% like this...">
    14
    </div>
  </div>
  <a href="#111261" class="name">
  <strong class="user"><em>Richard J. Turner</em></strong></a><a class="genanchor" href="#111261"> &para;</a><div class="date" title="2013-01-31 11:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111261">
<div class="phpcode"><code><span class="html">As of PHP 5.4.6 constant() pays no attention to any namespace aliases that might be defined in the file in which it's used. I.e. constant() always behaves as if it is called from the global namespace. This means that the following will not work:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    const </span><span class="default">BAR </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="keyword">namespace </span><span class="default">Baz</span><span class="keyword">;<br /><br />use </span><span class="default">\Foo </span><span class="keyword">as </span><span class="default">F</span><span class="keyword">;<br /><br />echo </span><span class="default">constant</span><span class="keyword">(</span><span class="string">'F::BAR'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />However, calling constant('Foo::BAR') will work as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="64572">  <div class="votes">
    <div id="Vu64572">
    <a href="/manual/vote-note.php?id=64572&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64572">
    <a href="/manual/vote-note.php?id=64572&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64572" title="60% like this...">
    10
    </div>
  </div>
  <a href="#64572" class="name">
  <strong class="user"><em>Trevor Blackbird &gt; yurab.com</em></strong></a><a class="genanchor" href="#64572"> &para;</a><div class="date" title="2006-04-18 02:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64572">
<div class="phpcode"><code><span class="html">Technically you can define constants with names that are not valid for variables:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// $3some is not a valid variable name<br />// This will not work<br /></span><span class="keyword">$</span><span class="default">3some </span><span class="keyword">= </span><span class="string">'invalid'</span><span class="keyword">;<br /><br /></span><span class="comment">// This works<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'3some'</span><span class="keyword">, </span><span class="string">'valid'</span><span class="keyword">);<br />echo </span><span class="default">constant</span><span class="keyword">(</span><span class="string">'3some'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Of course this is not a good practice, but PHP has got you covered.</span></code></div>
  </div>
 </div>
  <div class="note" id="72453">  <div class="votes">
    <div id="Vu72453">
    <a href="/manual/vote-note.php?id=72453&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72453">
    <a href="/manual/vote-note.php?id=72453&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72453" title="56% like this...">
    5
    </div>
  </div>
  <a href="#72453" class="name">
  <strong class="user"><em>XC</em></strong></a><a class="genanchor" href="#72453"> &para;</a><div class="date" title="2007-01-19 02:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72453">
<div class="phpcode"><code><span class="html">When you often write lines like<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'FOO'</span><span class="keyword">) &amp;&amp; </span><span class="default">constant</span><span class="keyword">(</span><span class="string">'FOO'</span><span class="keyword">) === </span><span class="string">'bar'</span><span class="keyword">)<br />{<br />...<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />to prevent errors, you can use the following function to get the value of a constant.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getconst</span><span class="keyword">(</span><span class="default">$const</span><span class="keyword">)<br />{<br />    return (</span><span class="default">defined</span><span class="keyword">(</span><span class="default">$const</span><span class="keyword">)) ? </span><span class="default">constant</span><span class="keyword">(</span><span class="default">$const</span><span class="keyword">) : </span><span class="default">null</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Finally you can check the value with<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if(</span><span class="default">getconst</span><span class="keyword">(</span><span class="string">'FOO'</span><span class="keyword">) === </span><span class="string">'bar'</span><span class="keyword">)<br />{<br />...<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />It's simply shorter.</span></code></div>
  </div>
 </div>
  <div class="note" id="31594">  <div class="votes">
    <div id="Vu31594">
    <a href="/manual/vote-note.php?id=31594&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31594">
    <a href="/manual/vote-note.php?id=31594&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31594" title="56% like this...">
    5
    </div>
  </div>
  <a href="#31594" class="name">
  <strong class="user"><em>Andre</em></strong></a><a class="genanchor" href="#31594"> &para;</a><div class="date" title="2003-04-27 01:10"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31594">
<div class="phpcode"><code><span class="html">Maybe this is useful:
<br />
<br />$file_ext is the file Extension of the image
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if ( </span><span class="default">imagetypes</span><span class="keyword">() &amp; @</span><span class="default">constant</span><span class="keyword">(</span><span class="string">'IMG_' </span><span class="keyword">. </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$file_ext</span><span class="keyword">)) )
<br />{
<br />    </span><span class="default">$file_ext </span><span class="keyword">= </span><span class="default">$file_ext </span><span class="keyword">== </span><span class="string">'jpg' </span><span class="keyword">? </span><span class="string">'jpeg' </span><span class="keyword">: </span><span class="default">$file_ext</span><span class="keyword">;
<br />    </span><span class="default">$create_func </span><span class="keyword">= </span><span class="string">'ImageCreateFrom' </span><span class="keyword">. </span><span class="default">$file_ext</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98087">  <div class="votes">
    <div id="Vu98087">
    <a href="/manual/vote-note.php?id=98087&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98087">
    <a href="/manual/vote-note.php?id=98087&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98087" title="51% like this...">
    1
    </div>
  </div>
  <a href="#98087" class="name">
  <strong class="user"><em>hellekin</em></strong></a><a class="genanchor" href="#98087"> &para;</a><div class="date" title="2010-05-25 08:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98087">
<div class="phpcode"><code><span class="html">Checking if a constant is empty is bork... <br /><br />You cannot<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">, </span><span class="string">'B'</span><span class="keyword">);<br /><br />if (empty(</span><span class="default">B</span><span class="keyword">)) </span><span class="comment">// syntax error<br /></span><span class="keyword">if (empty(</span><span class="default">constant</span><span class="keyword">(</span><span class="string">'B'</span><span class="keyword">))) </span><span class="comment">// fatal error<br /><br />// so instead, thanks to LawnGnome on IRC, you can cast the constants to boolean (empty string is false)<br /></span><span class="keyword">if (((boolean) </span><span class="default">A</span><span class="keyword">) &amp;&amp; ((boolean) </span><span class="default">B</span><span class="keyword">)) <br />  </span><span class="comment">// do stuff<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68105">  <div class="votes">
    <div id="Vu68105">
    <a href="/manual/vote-note.php?id=68105&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68105">
    <a href="/manual/vote-note.php?id=68105&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68105" title="50% like this...">
    0
    </div>
  </div>
  <a href="#68105" class="name">
  <strong class="user"><em>narada dot sage at googlemail dot com</em></strong></a><a class="genanchor" href="#68105"> &para;</a><div class="date" title="2006-07-13 06:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68105">
<div class="phpcode"><code><span class="html">To access the value of a class constant use the following technique.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">a </span><span class="keyword">{<br />    const </span><span class="default">b </span><span class="keyword">= </span><span class="string">'c'</span><span class="keyword">;<br />}<br /><br />echo </span><span class="default">constant</span><span class="keyword">(</span><span class="string">'a::b'</span><span class="keyword">);<br /><br /></span><span class="comment">// output: c<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57689">  <div class="votes">
    <div id="Vu57689">
    <a href="/manual/vote-note.php?id=57689&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57689">
    <a href="/manual/vote-note.php?id=57689&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57689" title="50% like this...">
    0
    </div>
  </div>
  <a href="#57689" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#57689"> &para;</a><div class="date" title="2005-10-11 07:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57689">
<div class="phpcode"><code><span class="html">In reply to VGR_experts_exchange at edainworks dot com<br /><br />To check if a constant is boolean, use this instead:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">TRACE </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">)  {}<br /></span><span class="default">?&gt;<br /></span><br />Much quicker and cleaner than using defined() and constant() to check for a simple boolean.<br /><br />IMO, using ($var === true) or ($var === false) instead of ($var) or (!$var) is the best way to check for booleans no matter what. Leaves no chance of ambiguity.</span></code></div>
  </div>
 </div>
  <div class="note" id="125303">  <div class="votes">
    <div id="Vu125303">
    <a href="/manual/vote-note.php?id=125303&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125303">
    <a href="/manual/vote-note.php?id=125303&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125303" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#125303" class="name">
  <strong class="user"><em>nikolays93 at ya dot ru</em></strong></a><a class="genanchor" href="#125303"> &para;</a><div class="date" title="2020-08-26 06:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125303">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">Foo</span><span class="keyword">;<br /><br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">__NAMESPACE__ </span><span class="keyword">. </span><span class="string">'\Bar'</span><span class="keyword">, </span><span class="string">'its work'</span><span class="keyword">); </span><span class="comment">// ..but IDE may make notice<br /><br /></span><span class="keyword">echo </span><span class="default">Bar</span><span class="keyword">; </span><span class="comment">// its work</span></span></code></div>
  </div>
 </div>
  <div class="note" id="98752">  <div class="votes">
    <div id="Vu98752">
    <a href="/manual/vote-note.php?id=98752&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98752">
    <a href="/manual/vote-note.php?id=98752&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98752" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#98752" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#98752"> &para;</a><div class="date" title="2010-07-05 06:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98752">
<div class="phpcode"><code><span class="html">Return constants from an object. You can filter by regexp or match by value to find a constant name from the value.<br /><br />Pretty useful sometimes.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">findConstantsFromObject</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$filter </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$find_value </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />{<br />    </span><span class="default">$reflect </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">);<br />    </span><span class="default">$constants </span><span class="keyword">= </span><span class="default">$reflect</span><span class="keyword">-&gt;</span><span class="default">getConstants</span><span class="keyword">();<br />    <br />    foreach (</span><span class="default">$constants </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">) &amp;&amp; !</span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$filter</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">))<br />        {<br />            unset(</span><span class="default">$constants</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]);<br />            continue;<br />        }<br />        <br />        if (!</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$find_value</span><span class="keyword">) &amp;&amp; </span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$find_value</span><span class="keyword">)<br />        {<br />            unset(</span><span class="default">$constants</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">]);<br />            continue;<br />        }<br />    }<br />    <br />    return </span><span class="default">$constants</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Examples :<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Example<br /></span><span class="keyword">{<br />    const </span><span class="default">GENDER_UNKNOW </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    const </span><span class="default">GENDER_FEMALE </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    const </span><span class="default">GENDER_MALE </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /><br />    const </span><span class="default">USER_OFFLINE </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    const </span><span class="default">USER_ONLINE </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$all </span><span class="keyword">= </span><span class="default">findConstantsFromObject</span><span class="keyword">(</span><span class="string">'Example'</span><span class="keyword">);<br /><br /></span><span class="default">$genders </span><span class="keyword">= </span><span class="default">findConstantsFromObject</span><span class="keyword">(</span><span class="string">'Example'</span><span class="keyword">, </span><span class="string">'/^GENDER_/'</span><span class="keyword">);<br /><br /></span><span class="default">$my_gender </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$gender_name </span><span class="keyword">= </span><span class="default">findConstantsFromObject</span><span class="keyword">(</span><span class="string">'Example'</span><span class="keyword">, </span><span class="string">'/^GENDER_/'</span><span class="keyword">, </span><span class="default">$my_gender</span><span class="keyword">);<br /><br />if (isset(</span><span class="default">$gender_name</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]))<br />{<br />    </span><span class="default">$gender_name </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'GENDER_'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">key</span><span class="keyword">(</span><span class="default">$gender_name</span><span class="keyword">));<br />}<br />else<br />{<br />    </span><span class="default">$gender_name </span><span class="keyword">= </span><span class="string">'WTF!'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105966">  <div class="votes">
    <div id="Vu105966">
    <a href="/manual/vote-note.php?id=105966&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105966">
    <a href="/manual/vote-note.php?id=105966&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105966" title="45% like this...">
    -3
    </div>
  </div>
  <a href="#105966" class="name">
  <strong class="user"><em>adam at adamhahn dot com</em></strong></a><a class="genanchor" href="#105966"> &para;</a><div class="date" title="2011-09-28 12:59"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105966">
<div class="phpcode"><code><span class="html">This function is namespace sensitive when calling class constants.<br /><br />Using:<br /><span class="default">&lt;?php </span><span class="keyword">namespace </span><span class="default">sub</span><span class="keyword">;<br /><br />class </span><span class="default">foo </span><span class="keyword">{<br />    const </span><span class="default">BAR </span><span class="keyword">= </span><span class="string">'Hello World'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">constant</span><span class="keyword">(</span><span class="string">'foo::BAR'</span><span class="keyword">); </span><span class="comment">// Error<br /><br /></span><span class="default">constant</span><span class="keyword">(</span><span class="string">'sub\foo::BAR'</span><span class="keyword">); </span><span class="comment">// works<br /><br /></span><span class="default">?&gt;<br /></span><br />This does not seem to affect constants defined with the 'define' function. Those all end up defined in the root namespace unless another namespace is implicitly defined in the string name of the constant.</span></code></div>
  </div>
 </div>
  <div class="note" id="123943">  <div class="votes">
    <div id="Vu123943">
    <a href="/manual/vote-note.php?id=123943&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123943">
    <a href="/manual/vote-note.php?id=123943&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123943" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#123943" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123943"> &para;</a><div class="date" title="2019-06-14 09:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123943">
<div class="phpcode"><code><span class="html">The use of constant() (or some other method) to ensure the your_constant was defined is particularly important when it is to be defined as either `true` or `false`.  <br /><br />For example, taken from this Stackoverflow Question  <br /><a href="https://stackoverflow.com/questions/5427886/php-undefined-constant-testing/56604602#56604602" rel="nofollow" target="_blank">https://stackoverflow.com/questions/5427886/php-undefined-constant-testing/56604602#56604602</a>)   <br /><br /> If `BOO` did NOT get defined as a constant, for some reason,<br /><br />    <span class="default">&lt;?php </span><span class="keyword">if(</span><span class="default">BOO</span><span class="keyword">) </span><span class="default">do_something</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span><br />would evaluate to `TRUE` and run anyway.  A rather unexpected result.    <br /><br />The reason is that PHP ASSUMES you "forgot" quotation marks around `BOO` when it did not see it in its list of defined constants.    <br />So it evaluates: `if ('BOO')`...   <br />Since every string, other than the empty string, is "truthy", the expression evaluates to `true` and the do_something() is run, unexpectedly.  <br /><br />If you instead use:  <br />     <span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">constant</span><span class="keyword">(</span><span class="default">BOO</span><span class="keyword">)) </span><span class="default">do_something</span><span class="keyword">() </span><span class="default">?&gt;</span>  <br /><br />then if `BOO` has not been defined, `constant(BOO)` evaluates to `null`,  <br />which is falsey, and `if (null)`... becomes `false`, so do_something() is skipped, as expected.   <br /><br />The PHP behavior regarding undefined constants is particularly glaring when having a particular constant defined is the exception, "falsey" is the default, and having a "truthy" value exposes a security issue. For example,   <br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">IS_SPECIAL_CASE</span><span class="keyword">) </span><span class="default">show_php_info</span><span class="keyword">() </span><span class="default">?&gt;</span> .  <br /><br />There are other ways around this PHP behavior, such as   <br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">BOO </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) </span><span class="default">do_something</span><span class="keyword">(); </span><span class="default">?&gt;</span>  <br />or  <br /><span class="default">&lt;?php </span><span class="keyword">if (</span><span class="default">defined</span><span class="keyword">(</span><span class="string">'BOO'</span><span class="keyword">) &amp;&amp; </span><span class="default">BOO</span><span class="keyword">) </span><span class="default">do_something</span><span class="keyword">() </span><span class="default">?&gt;</span>.   <br /><br />Note that only the version using `defined()` works without also throwing a PHP Warning  "error message."<br /><br />Here is a php repl.it demonstration: <br /><a href="https://repl.it/@sherylhohman/php-undefined-constants-beware-of-truthy-conversion?language=php_cli&amp;folderId=" rel="nofollow" target="_blank">https://repl.it/@sherylhohman/php-undefined-constants-beware-of-truthy-conversion?language=php_cli&amp;folderId=</a><br /><br />(disclosure: I also submitted an answer to the SO question linked to above)</span></code></div>
  </div>
 </div>
  <div class="note" id="97248">  <div class="votes">
    <div id="Vu97248">
    <a href="/manual/vote-note.php?id=97248&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97248">
    <a href="/manual/vote-note.php?id=97248&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97248" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#97248" class="name">
  <strong class="user"><em>dachnik</em></strong></a><a class="genanchor" href="#97248"> &para;</a><div class="date" title="2010-04-09 11:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97248">
<div class="phpcode"><code><span class="html">You can define values in your config file using the names of your defined constants, e.g. <br /><br />in your php code:<br />define("MY_CONST",999);<br /><br />in you config file:<br />my = MY_CONST <br /><br />When reading the file do this:<br /><br />$my = constant($value); // where $value is the string "MY_CONST"<br /><br />now $my holds the value of 999</span></code></div>
  </div>
 </div>
  <div class="note" id="121668">  <div class="votes">
    <div id="Vu121668">
    <a href="/manual/vote-note.php?id=121668&amp;page=function.constant&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121668">
    <a href="/manual/vote-note.php?id=121668&amp;page=function.constant&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121668" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#121668" class="name">
  <strong class="user"><em>mohammad alzoqaily</em></strong></a><a class="genanchor" href="#121668"> &para;</a><div class="date" title="2017-09-21 07:08"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121668">
<div class="phpcode"><code><span class="html">// 1)  you can store the name of constant in default variable<br /> //     and use it without identify it's name :)<br /><br />        $str= "constName";<br />      <br />        define("constName","this is constant");<br /><br />        echo constant($str);<br />       <br /><br />       output:<br />             this is constant<br /><br />// 2)  good for dynamic generating  constants<br />       <br /><br />         function generateConst( $const ,  $value , $sensitivity=TRUE )<br />             {<br />              <br />                    define( "$const" , "$value ",$sensitivity);<br />              }<br /><br />              $CONST="cost";<br />              $VALUE="100$";<br />              <br />             generateConst( $CONST , $VALUE);<br />                          <br />             echo constant($const);<br /><br />        output:<br />                100$</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.constant&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.constant.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="current">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
