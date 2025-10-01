<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: base_convert - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.base-convert.php">
 <link rel="shorturl" href="https://www.php.net/base-convert">
 <link rel="alternate" href="https://www.php.net/base-convert" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.atanh.php">
 <link rel="next" href="https://www.php.net/manual/en/function.bindec.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.base-convert.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.base-convert.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.base-convert.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.base-convert.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.base-convert.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.base-convert.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.base-convert.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.base-convert.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.base-convert.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.base-convert.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.base-convert.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Convert a number between arbitrary bases" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: base_convert - Manual" />
<meta name="twitter:description" content="Convert a number between arbitrary bases" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: base_convert - Manual" />
<meta itemprop="description" content="Convert a number between arbitrary bases" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Convert a number between arbitrary bases" />

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
        <a href="function.bindec.php">
          bindec &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.atanh.php">
          &laquo; atanh        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.math.php'>Math</a></li>      <li><a href='ref.math.php'>Math Functions</a></li>      </ul>
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
            <option value='en/function.base-convert.php' selected="selected">English</option>
            <option value='de/function.base-convert.php'>German</option>
            <option value='es/function.base-convert.php'>Spanish</option>
            <option value='fr/function.base-convert.php'>French</option>
            <option value='it/function.base-convert.php'>Italian</option>
            <option value='ja/function.base-convert.php'>Japanese</option>
            <option value='pt_BR/function.base-convert.php'>Brazilian Portuguese</option>
            <option value='ru/function.base-convert.php'>Russian</option>
            <option value='tr/function.base-convert.php'>Turkish</option>
            <option value='uk/function.base-convert.php'>Ukrainian</option>
            <option value='zh/function.base-convert.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.base-convert" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">base_convert</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">base_convert</span> &mdash; <span class="dc-title">Convert a number between arbitrary bases</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.base-convert-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>base_convert</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$num</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$from_base</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$to_base</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns a string containing <code class="parameter">num</code>
   represented in base <code class="parameter">to_base</code>.  The base in
   which <code class="parameter">num</code> is given is specified in
   <code class="parameter">from_base</code>.  Both
   <code class="parameter">from_base</code> and <code class="parameter">to_base</code>
   have to be between 2 and 36, inclusive.  Digits in numbers with a
   base higher than 10 will be represented with the letters a-z,
   with a meaning 10, b meaning 11 and z meaning 35.
   The case of the letters doesn&#039;t matter, i.e.
   <code class="parameter">num</code> is interpreted case-insensitively.
  </p>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    <span class="function"><strong>base_convert()</strong></span> may lose precision on large numbers
    due to properties related to the internal <span class="type"><a href="language.types.float.php" class="type float">float</a></span> type used.
    Please see the <a href="language.types.float.php" class="link">Floating point numbers</a>
    section in the manual for more specific information and limitations.
   </p>
  </div>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.base-convert-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">num</code></dt>
     <dd>
      <p class="para">
       The number to convert. Any invalid characters in
       <code class="parameter">num</code> are silently ignored.
       As of PHP 7.4.0 supplying any invalid characters is deprecated.
      </p>
     </dd>
    
    
     <dt><code class="parameter">from_base</code></dt>
     <dd>
      <p class="para">
       The base <code class="parameter">num</code> is in
      </p>
     </dd>
    
    
     <dt><code class="parameter">to_base</code></dt>
     <dd>
      <p class="para">
       The base to convert <code class="parameter">num</code> to
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.base-convert-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <code class="parameter">num</code> converted to base <code class="parameter">to_base</code>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.base-convert-changelog">
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
      <td>7.4.0</td>
      <td>
       Passing invalid characters will now generate a deprecation notice.
       The result will still be computed as if the invalid characters did not exist.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.base-convert-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3360">
    <p><strong>Example #1 <span class="function"><strong>base_convert()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$hexadecimal </span><span style="color: #007700">= </span><span style="color: #DD0000">'a37334'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">base_convert</span><span style="color: #007700">(</span><span style="color: #0000BB">$hexadecimal</span><span style="color: #007700">, </span><span style="color: #0000BB">16</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">101000110111001100110100</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.base-convert-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.intval.php" class="function" rel="rdfs-seeAlso">intval()</a> - Get the integer value of a variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/base-convert.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.base-convert%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.base-convert&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.base-convert.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106546">  <div class="votes">
    <div id="Vu106546">
    <a href="/manual/vote-note.php?id=106546&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106546">
    <a href="/manual/vote-note.php?id=106546&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106546" title="75% like this...">
    95
    </div>
  </div>
  <a href="#106546" class="name">
  <strong class="user"><em>PHPCoder at niconet2k dot com</em></strong></a><a class="genanchor" href="#106546"> &para;</a><div class="date" title="2011-11-17 10:45"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106546">
<div class="phpcode"><code><span class="html">Convert an arbitrarily large number from any base to any base.<br /><br />string convBase(string $numberInput, string $fromBaseInput, string $toBaseInput)<br />$numberInput number to convert as a string<br />$fromBaseInput base of the number to convert as a string<br />$toBaseInput base the number should be converted to as a string<br />examples for $fromBaseInput and $toBaseInput<br />'0123456789ABCDEF' for Hexadecimal (Base16)<br />'0123456789' for Decimal (Base10)<br />'01234567' for Octal (Base8)<br />'01' for Binary (Base2) <br />You can really put in whatever you want and the first character is the 0.<br />Examples:<br /><br /><span class="default">&lt;?php <br />convBase</span><span class="keyword">(</span><span class="string">'123'</span><span class="keyword">, </span><span class="string">'0123456789'</span><span class="keyword">, </span><span class="string">'01234567'</span><span class="keyword">); <br /></span><span class="comment">//Convert '123' from decimal (base10) to octal (base8).<br />//result: 173<br /><br /></span><span class="default">convBase</span><span class="keyword">(</span><span class="string">'70B1D707EAC2EDF4C6389F440C7294B51FFF57BB'</span><span class="keyword">, </span><span class="string">'0123456789ABCDEF'</span><span class="keyword">, </span><span class="string">'01'</span><span class="keyword">);<br /></span><span class="comment">//Convert '70B1D707EAC2EDF4C6389F440C7294B51FFF57BB' from hexadecimal (base16) to binary (base2).<br />//result: <br />//111000010110001110101110000011111101010110000101110<br />//110111110100110001100011100010011111010001000000110<br />//001110010100101001011010100011111111111110101011110<br />//111011<br /><br /></span><span class="default">convBase</span><span class="keyword">(</span><span class="string">'1324523453243154324542341524315432113200203012'</span><span class="keyword">, </span><span class="string">'012345'</span><span class="keyword">, </span><span class="string">'0123456789ABCDEF'</span><span class="keyword">);<br /></span><span class="comment">//Convert '1324523453243154324542341524315432113200203012' from senary (base6) to hexadecimal (base16).<br />//result: 1F9881BAD10454A8C23A838EF00F50<br /><br /></span><span class="default">convBase</span><span class="keyword">(</span><span class="string">'355927353784509896715106760'</span><span class="keyword">,</span><span class="string">'0123456789'</span><span class="keyword">,</span><span class="string">'Christopher'</span><span class="keyword">);<br /></span><span class="comment">//Convert '355927353784509896715106760' from decimal (base10) to undecimal (base11) using "Christopher" as the numbers.<br />//result: iihtspiphoeCrCeshhorsrrtrh<br /><br /></span><span class="default">convBase</span><span class="keyword">(</span><span class="string">'1C238Ab97132aAC84B72'</span><span class="keyword">,</span><span class="string">'0123456789aAbBcCdD'</span><span class="keyword">, </span><span class="string">'~!@#$%^&amp;*()'</span><span class="keyword">);<br /></span><span class="comment">//Convert'1C238Ab97132aAC84B72' from octodecimal (base18) using '0123456789aAbBcCdD' as the numbers to undecimal (base11) using '~!@#$%^&amp;*()' as the numbers.<br />//result: !%~!!*&amp;!~^!!&amp;(&amp;!~^@#@@@&amp;<br /><br /></span><span class="keyword">function </span><span class="default">convBase</span><span class="keyword">(</span><span class="default">$numberInput</span><span class="keyword">, </span><span class="default">$fromBaseInput</span><span class="keyword">, </span><span class="default">$toBaseInput</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$fromBaseInput</span><span class="keyword">==</span><span class="default">$toBaseInput</span><span class="keyword">) return </span><span class="default">$numberInput</span><span class="keyword">;<br />    </span><span class="default">$fromBase </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$fromBaseInput</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$toBase </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$toBaseInput</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$number </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$numberInput</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$fromLen</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$fromBaseInput</span><span class="keyword">);<br />    </span><span class="default">$toLen</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$toBaseInput</span><span class="keyword">);<br />    </span><span class="default">$numberLen</span><span class="keyword">=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$numberInput</span><span class="keyword">);<br />    </span><span class="default">$retval</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />    if (</span><span class="default">$toBaseInput </span><span class="keyword">== </span><span class="string">'0123456789'</span><span class="keyword">)<br />    {<br />        </span><span class="default">$retval</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;</span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$numberLen</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />            </span><span class="default">$retval </span><span class="keyword">= </span><span class="default">bcadd</span><span class="keyword">(</span><span class="default">$retval</span><span class="keyword">, </span><span class="default">bcmul</span><span class="keyword">(</span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">], </span><span class="default">$fromBase</span><span class="keyword">),</span><span class="default">bcpow</span><span class="keyword">(</span><span class="default">$fromLen</span><span class="keyword">,</span><span class="default">$numberLen</span><span class="keyword">-</span><span class="default">$i</span><span class="keyword">)));<br />        return </span><span class="default">$retval</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$fromBaseInput </span><span class="keyword">!= </span><span class="string">'0123456789'</span><span class="keyword">)<br />        </span><span class="default">$base10</span><span class="keyword">=</span><span class="default">convBase</span><span class="keyword">(</span><span class="default">$numberInput</span><span class="keyword">, </span><span class="default">$fromBaseInput</span><span class="keyword">, </span><span class="string">'0123456789'</span><span class="keyword">);<br />    else<br />        </span><span class="default">$base10 </span><span class="keyword">= </span><span class="default">$numberInput</span><span class="keyword">;<br />    if (</span><span class="default">$base10</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$toBaseInput</span><span class="keyword">))<br />        return </span><span class="default">$toBase</span><span class="keyword">[</span><span class="default">$base10</span><span class="keyword">];<br />    while(</span><span class="default">$base10 </span><span class="keyword">!= </span><span class="string">'0'</span><span class="keyword">)<br />    {<br />        </span><span class="default">$retval </span><span class="keyword">= </span><span class="default">$toBase</span><span class="keyword">[</span><span class="default">bcmod</span><span class="keyword">(</span><span class="default">$base10</span><span class="keyword">,</span><span class="default">$toLen</span><span class="keyword">)].</span><span class="default">$retval</span><span class="keyword">;<br />        </span><span class="default">$base10 </span><span class="keyword">= </span><span class="default">bcdiv</span><span class="keyword">(</span><span class="default">$base10</span><span class="keyword">,</span><span class="default">$toLen</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$retval</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115093">  <div class="votes">
    <div id="Vu115093">
    <a href="/manual/vote-note.php?id=115093&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115093">
    <a href="/manual/vote-note.php?id=115093&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115093" title="87% like this...">
    6
    </div>
  </div>
  <a href="#115093" class="name">
  <strong class="user"><em>ardavies at tiscali dot co dot uk</em></strong></a><a class="genanchor" href="#115093"> &para;</a><div class="date" title="2014-05-24 11:31"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115093">
<div class="phpcode"><code><span class="html">In order to convert base 26 (hexavigesimal) of just alphanumeric characters (A-Z), wthout integers, (as descibed at <a href="http://en.wikipedia.org/wiki/Hexavigesimal" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Hexavigesimal</a>), I found this to be useful:<br /><br />function base_convert_alpha(  $str,  $from,  $to  )<br />{<br />    $r = range( 'A', 'Z' );<br />    $clean = str_replace( $r, array_keys($r), $str );<br />    return base_convert( $clean, $from, $to );<br />}<br /><br />echo base_convert_alpha(  "BAC",  26,  10  );<br /><br />//$clean = 102 which then returns 678</span></code></div>
  </div>
 </div>
  <div class="note" id="123242">  <div class="votes">
    <div id="Vu123242">
    <a href="/manual/vote-note.php?id=123242&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123242">
    <a href="/manual/vote-note.php?id=123242&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123242" title="77% like this...">
    10
    </div>
  </div>
  <a href="#123242" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123242"> &para;</a><div class="date" title="2018-10-19 01:09"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123242">
<div class="phpcode"><code><span class="html">While not immediately clear from the description above, a negative sign is also "silently ignored".<br /><br />base_convert("-12", 10, 10)   =&gt;   12</span></code></div>
  </div>
 </div>
  <div class="note" id="51077">  <div class="votes">
    <div id="Vu51077">
    <a href="/manual/vote-note.php?id=51077&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51077">
    <a href="/manual/vote-note.php?id=51077&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51077" title="75% like this...">
    15
    </div>
  </div>
  <a href="#51077" class="name">
  <strong class="user"><em>lindsay at bitleap dot com</em></strong></a><a class="genanchor" href="#51077"> &para;</a><div class="date" title="2005-03-18 01:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51077">
<div class="phpcode"><code><span class="html">If you need to use base_convert with numbers larger then 32 bit, the following gmp implementation of base_convert should work.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*use gmp library to convert base. gmp will convert numbers &gt; 32bit*/<br /></span><span class="keyword">function </span><span class="default">gmp_convert</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$base_a</span><span class="keyword">, </span><span class="default">$base_b</span><span class="keyword">)<br />{<br />        return </span><span class="default">gmp_strval </span><span class="keyword">( </span><span class="default">gmp_init</span><span class="keyword">(</span><span class="default">$num</span><span class="keyword">, </span><span class="default">$base_a</span><span class="keyword">), </span><span class="default">$base_b </span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121573">  <div class="votes">
    <div id="Vu121573">
    <a href="/manual/vote-note.php?id=121573&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121573">
    <a href="/manual/vote-note.php?id=121573&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121573" title="66% like this...">
    2
    </div>
  </div>
  <a href="#121573" class="name">
  <strong class="user"><em>ohcc at 163 dot com</em></strong></a><a class="genanchor" href="#121573"> &para;</a><div class="date" title="2017-08-29 06:31"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121573">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    $v </span><span class="keyword">= </span><span class="default">base_convert</span><span class="keyword">(</span><span class="default">3.14</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />output: string(3) "314"</span></code></div>
  </div>
 </div>
  <div class="note" id="90320">  <div class="votes">
    <div id="Vu90320">
    <a href="/manual/vote-note.php?id=90320&amp;page=function.base-convert&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90320">
    <a href="/manual/vote-note.php?id=90320&amp;page=function.base-convert&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90320" title="64% like this...">
    4
    </div>
  </div>
  <a href="#90320" class="name">
  <strong class="user"><em>cyrilbele at yahoo dot fr</em></strong></a><a class="genanchor" href="#90320"> &para;</a><div class="date" title="2009-04-16 01:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90320">
<div class="phpcode"><code><span class="html">If you want to do sharding, at some point you will need to decide which shard to target. Here is a simple function to assign the data to a particular shard based on a key (usually identifier of the row)
<br />
<br />Here is a simple function to get the shard based on the key and the number of shards available
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getShard</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$nbShards</span><span class="keyword">) {
<br />    </span><span class="default">$num </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">base_convert</span><span class="keyword">(</span><span class="default">sha1</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">), </span><span class="default">16</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">),</span><span class="default">4</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">);
<br />    return </span><span class="default">$num</span><span class="keyword">%</span><span class="default">$nbShards</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.base-convert&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.base-convert.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.math.php">Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.abs.php" title="abs">abs</a>
                        </li>
                                                <li class="">
                            <a href="function.acos.php" title="acos">acos</a>
                        </li>
                                                <li class="">
                            <a href="function.acosh.php" title="acosh">acosh</a>
                        </li>
                                                <li class="">
                            <a href="function.asin.php" title="asin">asin</a>
                        </li>
                                                <li class="">
                            <a href="function.asinh.php" title="asinh">asinh</a>
                        </li>
                                                <li class="">
                            <a href="function.atan.php" title="atan">atan</a>
                        </li>
                                                <li class="">
                            <a href="function.atan2.php" title="atan2">atan2</a>
                        </li>
                                                <li class="">
                            <a href="function.atanh.php" title="atanh">atanh</a>
                        </li>
                                                <li class="current">
                            <a href="function.base-convert.php" title="base_&#8203;convert">base_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.bindec.php" title="bindec">bindec</a>
                        </li>
                                                <li class="">
                            <a href="function.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.cos.php" title="cos">cos</a>
                        </li>
                                                <li class="">
                            <a href="function.cosh.php" title="cosh">cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.decbin.php" title="decbin">decbin</a>
                        </li>
                                                <li class="">
                            <a href="function.dechex.php" title="dechex">dechex</a>
                        </li>
                                                <li class="">
                            <a href="function.decoct.php" title="decoct">decoct</a>
                        </li>
                                                <li class="">
                            <a href="function.deg2rad.php" title="deg2rad">deg2rad</a>
                        </li>
                                                <li class="">
                            <a href="function.exp.php" title="exp">exp</a>
                        </li>
                                                <li class="">
                            <a href="function.expm1.php" title="expm1">expm1</a>
                        </li>
                                                <li class="">
                            <a href="function.fdiv.php" title="fdiv">fdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="">
                            <a href="function.fmod.php" title="fmod">fmod</a>
                        </li>
                                                <li class="">
                            <a href="function.fpow.php" title="fpow">fpow</a>
                        </li>
                                                <li class="">
                            <a href="function.hexdec.php" title="hexdec">hexdec</a>
                        </li>
                                                <li class="">
                            <a href="function.hypot.php" title="hypot">hypot</a>
                        </li>
                                                <li class="">
                            <a href="function.intdiv.php" title="intdiv">intdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.is-finite.php" title="is_&#8203;finite">is_&#8203;finite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-infinite.php" title="is_&#8203;infinite">is_&#8203;infinite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-nan.php" title="is_&#8203;nan">is_&#8203;nan</a>
                        </li>
                                                <li class="">
                            <a href="function.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="function.log10.php" title="log10">log10</a>
                        </li>
                                                <li class="">
                            <a href="function.log1p.php" title="log1p">log1p</a>
                        </li>
                                                <li class="">
                            <a href="function.max.php" title="max">max</a>
                        </li>
                                                <li class="">
                            <a href="function.min.php" title="min">min</a>
                        </li>
                                                <li class="">
                            <a href="function.octdec.php" title="octdec">octdec</a>
                        </li>
                                                <li class="">
                            <a href="function.pi.php" title="pi">pi</a>
                        </li>
                                                <li class="">
                            <a href="function.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="function.rad2deg.php" title="rad2deg">rad2deg</a>
                        </li>
                                                <li class="">
                            <a href="function.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="function.sin.php" title="sin">sin</a>
                        </li>
                                                <li class="">
                            <a href="function.sinh.php" title="sinh">sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.tan.php" title="tan">tan</a>
                        </li>
                                                <li class="">
                            <a href="function.tanh.php" title="tanh">tanh</a>
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
