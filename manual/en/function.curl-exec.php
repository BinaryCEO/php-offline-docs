<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-exec.php">
 <link rel="shorturl" href="https://www.php.net/curl-exec">
 <link rel="alternate" href="https://www.php.net/curl-exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-escape.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-getinfo.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform a cURL session" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_exec - Manual" />
<meta name="twitter:description" content="Perform a cURL session" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_exec - Manual" />
<meta itemprop="description" content="Perform a cURL session" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform a cURL session" />

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
        <a href="function.curl-getinfo.php">
          curl_getinfo &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-escape.php">
          &laquo; curl_escape        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.curl.php'>cURL</a></li>      <li><a href='ref.curl.php'>cURL Functions</a></li>      </ul>
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
            <option value='en/function.curl-exec.php' selected="selected">English</option>
            <option value='de/function.curl-exec.php'>German</option>
            <option value='es/function.curl-exec.php'>Spanish</option>
            <option value='fr/function.curl-exec.php'>French</option>
            <option value='it/function.curl-exec.php'>Italian</option>
            <option value='ja/function.curl-exec.php'>Japanese</option>
            <option value='pt_BR/function.curl-exec.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-exec.php'>Russian</option>
            <option value='tr/function.curl-exec.php'>Turkish</option>
            <option value='uk/function.curl-exec.php'>Ukrainian</option>
            <option value='zh/function.curl-exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_exec</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_exec</span> &mdash; <span class="dc-title">Perform a cURL session</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.curl-exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_exec</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span></div>

  <p class="para rdfs-comment">
   Execute the given cURL session.
  </p>
  <p class="para">
   This function should be called after initializing a cURL session and all
   the options for the session are set. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   On success, this function flushes the result directly to the
   <code class="literal">stdout</code> and returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
   However, if the <strong><code><a href="curl.constants.php#constant.curlopt-returntransfer">CURLOPT_RETURNTRANSFER</a></code></strong>
   option is <a href="function.curl-setopt.php" class="link">set</a>, it will return
   the result on success, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Note that response status codes which indicate errors (such as <code class="literal">404
    Not found</code>) are not regarded as failure.
    <span class="function"><a href="function.curl-getinfo.php" class="function">curl_getinfo()</a></span> can be used to check for these.
   </p>
  </p></blockquote>
 </div>

   
 <div class="refsect1 changelog" id="refsect1-function.curl-exec-changelog">
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
  <code class="parameter">handle</code> expects a <span class="classname"><a href="class.curlhandle.php" class="classname">CurlHandle</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.curl-exec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4491">
    <p><strong>Example #1 Fetching a web page</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// create a new cURL resource<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// set URL and other appropriate options<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// grab URL and pass it to the browser<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// close cURL resource, and free up system resources<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.curl-exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-multi-exec.php" class="function" rel="rdfs-seeAlso">curl_multi_exec()</a> - Run the sub-connections of the current cURL handle</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="98628">  <div class="votes">
    <div id="Vu98628">
    <a href="/manual/vote-note.php?id=98628&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98628">
    <a href="/manual/vote-note.php?id=98628&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98628" title="67% like this...">
    121
    </div>
  </div>
  <a href="#98628" class="name">
  <strong class="user"><em>David from Code2Design.com</em></strong></a><a class="genanchor" href="#98628"> &para;</a><div class="date" title="2010-06-27 07:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98628">
<div class="phpcode"><code><span class="html">Just in case anyone is looking for a a couple of simple functions [to help automate cURL processes for POST and GET queries] I thought I'd post these.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * Send a POST requst using cURL
<br /> * @param string $url to request
<br /> * @param array $post values to send
<br /> * @param array $options for cURL
<br /> * @return string
<br /> */
<br /></span><span class="keyword">function </span><span class="default">curl_post</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, array </span><span class="default">$post </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, array </span><span class="default">$options </span><span class="keyword">= array())
<br />{
<br />    </span><span class="default">$defaults </span><span class="keyword">= array(
<br />        </span><span class="default">CURLOPT_POST </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_HEADER </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_URL </span><span class="keyword">=&gt; </span><span class="default">$url</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_FRESH_CONNECT </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_FORBID_REUSE </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_TIMEOUT </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_POSTFIELDS </span><span class="keyword">=&gt; </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$post</span><span class="keyword">)
<br />    );
<br />
<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, (</span><span class="default">$options </span><span class="keyword">+ </span><span class="default">$defaults</span><span class="keyword">));
<br />    if( ! </span><span class="default">$result </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">));
<br />    }
<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">/**
<br /> * Send a GET requst using cURL
<br /> * @param string $url to request
<br /> * @param array $get values to send
<br /> * @param array $options for cURL
<br /> * @return string
<br /> */
<br /></span><span class="keyword">function </span><span class="default">curl_get</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, array </span><span class="default">$get </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, array </span><span class="default">$options </span><span class="keyword">= array())
<br />{    
<br />    </span><span class="default">$defaults </span><span class="keyword">= array(
<br />        </span><span class="default">CURLOPT_URL </span><span class="keyword">=&gt; </span><span class="default">$url</span><span class="keyword">. (</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">'?'</span><span class="keyword">) === </span><span class="default">FALSE </span><span class="keyword">? </span><span class="string">'?' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">). </span><span class="default">http_build_query</span><span class="keyword">(</span><span class="default">$get</span><span class="keyword">),
<br />        </span><span class="default">CURLOPT_HEADER </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">TRUE</span><span class="keyword">,
<br />        </span><span class="default">CURLOPT_TIMEOUT </span><span class="keyword">=&gt; </span><span class="default">4
<br />    </span><span class="keyword">);
<br />    
<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, (</span><span class="default">$options </span><span class="keyword">+ </span><span class="default">$defaults</span><span class="keyword">));
<br />    if( ! </span><span class="default">$result </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">))
<br />    {
<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">));
<br />    }
<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70123">  <div class="votes">
    <div id="Vu70123">
    <a href="/manual/vote-note.php?id=70123&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70123">
    <a href="/manual/vote-note.php?id=70123&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70123" title="67% like this...">
    34
    </div>
  </div>
  <a href="#70123" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#70123"> &para;</a><div class="date" title="2006-10-04 01:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70123">
<div class="phpcode"><code><span class="html">Be careful when using curl_exec() and the CURLOPT_RETURNTRANSFER option. According to the manual and assorted documentation:<br />Set CURLOPT_RETURNTRANSFER to TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.<br /><br />When retrieving a document with no content (ie. 0 byte file), curl_exec() will return bool(true), not an empty string. I've not seen any mention of this in the manual.<br /><br />Example code to reproduce this:<br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// fictional URL to an existing file with no data in it (ie. 0 byte file)<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="string">'<a href="http://www.example.com/empty_file.txt" rel="nofollow" target="_blank">http://www.example.com/empty_file.txt</a>'</span><span class="keyword">;<br /><br />    </span><span class="default">$curl </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    <br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br />    </span><span class="comment">// execute and return string (this should be an empty string '')<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">);<br /><br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">);<br /><br />    </span><span class="comment">// the value of $str is actually bool(true), not empty string ''<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121129">  <div class="votes">
    <div id="Vu121129">
    <a href="/manual/vote-note.php?id=121129&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121129">
    <a href="/manual/vote-note.php?id=121129&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121129" title="65% like this...">
    21
    </div>
  </div>
  <a href="#121129" class="name">
  <strong class="user"><em>turiyag</em></strong></a><a class="genanchor" href="#121129"> &para;</a><div class="date" title="2017-05-25 05:07"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121129">
<div class="phpcode"><code><span class="html">Don't disable SSL verification! You don't need to, and it's super easy to stay secure! If you found that turning off "CURLOPT_SSL_VERIFYHOST" and "CURLOPT_SSL_VERIFYPEER" solved your problem, odds are you're just on a Windows box. Takes 2 min to solve the problem. Walkthrough here:<br /><br /><a href="https://snippets.webaware.com.au/howto/stop-turning-off-curlopt_ssl_verifypeer-and-fix-your-php-config/" rel="nofollow" target="_blank">https://snippets.webaware.com.au/howto/stop-turning-off-curlopt_ssl_verifypeer-and-fix-your-php-config/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="125961">  <div class="votes">
    <div id="Vu125961">
    <a href="/manual/vote-note.php?id=125961&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125961">
    <a href="/manual/vote-note.php?id=125961&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125961" title="68% like this...">
    8
    </div>
  </div>
  <a href="#125961" class="name">
  <strong class="user"><em>jpatta at digitalgamesystems dot com</em></strong></a><a class="genanchor" href="#125961"> &para;</a><div class="date" title="2021-03-25 03:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125961">
<div class="phpcode"><code><span class="html">If you are looking the debug curl_exec, you may wish to log its details, and analyze the various time points during its execution.<br /><br />before curl_exec:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// this will produce a curl log<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_VERBOSE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLOPT_STDERR</span><span class="keyword">, </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/your/writable/app/logdir/curl.log'</span><span class="keyword">, </span><span class="string">'a+'</span><span class="keyword">)); </span><span class="comment">// a+ to append...<br /></span><span class="default">?&gt;<br /></span><br />after curl_exec, but before curl_close:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// this will extract the timing information<br />    </span><span class="default">extract</span><span class="keyword">(</span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">)); </span><span class="comment">// create metrics variables from getinfo<br />    </span><span class="default">$appconnect_time </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$curl</span><span class="keyword">, </span><span class="default">CURLINFO_APPCONNECT_TIME</span><span class="keyword">); </span><span class="comment">// request this time explicitly<br />    </span><span class="default">$downloadduration </span><span class="keyword">= </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$total_time </span><span class="keyword">- </span><span class="default">$starttransfer_time</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">); </span><span class="comment">// format, to get rid of scientific notation<br />    </span><span class="default">$namelookup_time </span><span class="keyword">= </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$namelookup_time</span><span class="keyword">, </span><span class="default">9</span><span class="keyword">);<br />    </span><span class="default">$metrics </span><span class="keyword">= </span><span class="string">"CURL...: </span><span class="default">$url</span><span class="string"> Time...: </span><span class="default">$total_time</span><span class="string"> DNS: </span><span class="default">$namelookup_time</span><span class="string"> Connect: </span><span class="default">$connect_time</span><span class="string"> SSL/SSH: </span><span class="default">$appconnect_time</span><span class="string"> PreTransfer: </span><span class="default">$pretransfer_time</span><span class="string"> StartTransfer: </span><span class="default">$starttransfer_time</span><span class="string"> Download: </span><span class="default">$downloadduration</span><span class="string">"</span><span class="keyword">;<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$metrics</span><span class="keyword">);  </span><span class="comment">// write to php-fpm default www-error.log, or append it to same log as above with file_put_contents(&lt;filename&gt;, $metrics, FILE_APPEND)<br /></span><span class="default">?&gt;<br /></span><br />Happy debugging</span></code></div>
  </div>
 </div>
  <div class="note" id="115089">  <div class="votes">
    <div id="Vu115089">
    <a href="/manual/vote-note.php?id=115089&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115089">
    <a href="/manual/vote-note.php?id=115089&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115089" title="53% like this...">
    2
    </div>
  </div>
  <a href="#115089" class="name">
  <strong class="user"><em>hablutzel1 at gmail dot com</em></strong></a><a class="genanchor" href="#115089"> &para;</a><div class="date" title="2014-05-24 05:04"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115089">
<div class="phpcode"><code><span class="html">Be always aware that CURLOPT_SSL_VERIFYPEER set to FALSE or 0 should never be used for production as it makes the link inmediately vulnerable to man-in-the-middle attack, still you can use it during development, but I would suggest that only if you KNOW what are you doing, otherwise spend some more time making requests to HTTPS sites work without resorting to set that option to FALSE or 0.</span></code></div>
  </div>
 </div>
  <div class="note" id="80442">  <div class="votes">
    <div id="Vu80442">
    <a href="/manual/vote-note.php?id=80442&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80442">
    <a href="/manual/vote-note.php?id=80442&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80442" title="48% like this...">
    -3
    </div>
  </div>
  <a href="#80442" class="name">
  <strong class="user"><em>roman dot ivasyuk at gmail dot com</em></strong></a><a class="genanchor" href="#80442"> &para;</a><div class="date" title="2008-01-16 04:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80442">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">CurlRequest<br /></span><span class="keyword">{<br />    private </span><span class="default">$ch</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * Init curl session<br />     * <br />     * $params = array('url' =&gt; '',<br />     *                    'host' =&gt; '',<br />     *                   'header' =&gt; '',<br />     *                   'method' =&gt; '',<br />     *                   'referer' =&gt; '',<br />     *                   'cookie' =&gt; '',<br />     *                   'post_fields' =&gt; '',<br />     *                    ['login' =&gt; '',]<br />     *                    ['password' =&gt; '',]      <br />     *                   'timeout' =&gt; 0<br />     *                   );<br />     */                <br />    </span><span class="keyword">public function </span><span class="default">init</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">)<br />    {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />        </span><span class="default">$user_agent </span><span class="keyword">= </span><span class="string">'Mozilla/5.0 (Windows; U; <br />Windows NT 5.1; ru; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9'</span><span class="keyword">;<br />        </span><span class="default">$header </span><span class="keyword">= array(<br />        </span><span class="string">"Accept: text/xml,application/xml,application/xhtml+xml,<br />text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5"</span><span class="keyword">,<br />        </span><span class="string">"Accept-Language: ru-ru,ru;q=0.7,en-us;q=0.5,en;q=0.3"</span><span class="keyword">,<br />        </span><span class="string">"Accept-Charset: windows-1251,utf-8;q=0.7,*;q=0.7"</span><span class="keyword">,<br />        </span><span class="string">"Keep-Alive: 300"</span><span class="keyword">);<br />        if (isset(</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">]) &amp;&amp; </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'host'</span><span class="keyword">])      </span><span class="default">$header</span><span class="keyword">[]=</span><span class="string">"Host: "</span><span class="keyword">.</span><span class="default">$host</span><span class="keyword">;<br />        if (isset(</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'header'</span><span class="keyword">]) &amp;&amp; </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'header'</span><span class="keyword">]) </span><span class="default">$header</span><span class="keyword">[]=</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'header'</span><span class="keyword">];<br />        <br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_VERBOSE </span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_HEADER </span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">);<br />        <br />        if (</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">] == </span><span class="string">"HEAD"</span><span class="keyword">) @</span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">,</span><span class="default">CURLOPT_NOBODY</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_HTTPHEADER</span><span class="keyword">, </span><span class="default">$header </span><span class="keyword">);<br />        if (</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'referer'</span><span class="keyword">])    @</span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_REFERER</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'referer'</span><span class="keyword">] );<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_USERAGENT</span><span class="keyword">, </span><span class="default">$user_agent</span><span class="keyword">);<br />        if (</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'cookie'</span><span class="keyword">])    @</span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_COOKIE</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'cookie'</span><span class="keyword">]);<br /><br />        if ( </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'method'</span><span class="keyword">] == </span><span class="string">"POST" </span><span class="keyword">)<br />        {<br />            </span><span class="default">curl_setopt</span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">, </span><span class="default">CURLOPT_POST</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />            </span><span class="default">curl_setopt</span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">, </span><span class="default">CURLOPT_POSTFIELDS</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'post_fields'</span><span class="keyword">] );<br />        }<br />        @</span><span class="default">curl_setopt</span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">]);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_SSL_VERIFYPEER</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_SSL_VERIFYHOST</span><span class="keyword">, </span><span class="default">0 </span><span class="keyword">);<br />        if (isset(</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'login'</span><span class="keyword">]) &amp; isset(</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">]))<br />            @</span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_USERPWD</span><span class="keyword">,</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'login'</span><span class="keyword">].</span><span class="string">':'</span><span class="keyword">.</span><span class="default">$params</span><span class="keyword">[</span><span class="string">'password'</span><span class="keyword">]);<br />        @</span><span class="default">curl_setopt </span><span class="keyword">( </span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch </span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">[</span><span class="string">'timeout'</span><span class="keyword">]);<br />    }<br />    <br />    </span><span class="comment">/**<br />     * Make curl request<br />     *<br />     * @return array  'header','body','curl_error','http_code','last_url'<br />     */<br />    </span><span class="keyword">public function </span><span class="default">exec</span><span class="keyword">()<br />    {<br />        </span><span class="default">$response </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ch</span><span class="keyword">);<br />        </span><span class="default">$error </span><span class="keyword">= </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ch</span><span class="keyword">);<br />        </span><span class="default">$result </span><span class="keyword">= array( </span><span class="string">'header' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, <br />                         </span><span class="string">'body' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, <br />                         </span><span class="string">'curl_error' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, <br />                         </span><span class="string">'http_code' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />                         </span><span class="string">'last_url' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">);<br />        if ( </span><span class="default">$error </span><span class="keyword">!= </span><span class="string">"" </span><span class="keyword">)<br />        {<br />            </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'curl_error'</span><span class="keyword">] = </span><span class="default">$error</span><span class="keyword">;<br />            return </span><span class="default">$result</span><span class="keyword">;<br />        }<br />        <br />        </span><span class="default">$header_size </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ch</span><span class="keyword">,</span><span class="default">CURLINFO_HEADER_SIZE</span><span class="keyword">);<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'header'</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$header_size</span><span class="keyword">);<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'body'</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$response</span><span class="keyword">, </span><span class="default">$header_size </span><span class="keyword">);<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">] = </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">,</span><span class="default">CURLINFO_HTTP_CODE</span><span class="keyword">);<br />        </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'last_url'</span><span class="keyword">] = </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$this </span><span class="keyword">-&gt; </span><span class="default">ch</span><span class="keyword">,</span><span class="default">CURLINFO_EFFECTIVE_URL</span><span class="keyword">);<br />        return </span><span class="default">$result</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example of use:<br /><span class="default">&lt;?php<br /></span><span class="keyword">..........<br />try<br />        {            <br />            </span><span class="default">$params </span><span class="keyword">= array(</span><span class="string">'url' </span><span class="keyword">=&gt; </span><span class="string">'<a href="http://www.google.com" rel="nofollow" target="_blank">http://www.google.com</a>'</span><span class="keyword">,<br />            </span><span class="string">'host' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />            </span><span class="string">'header' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />            </span><span class="string">'method' </span><span class="keyword">=&gt; </span><span class="string">'GET'</span><span class="keyword">, </span><span class="comment">// 'POST','HEAD'<br />            </span><span class="string">'referer' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />            </span><span class="string">'cookie' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />            </span><span class="string">'post_fields' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, </span><span class="comment">// 'var1=value&amp;var2=value<br />            </span><span class="string">'timeout' </span><span class="keyword">=&gt; </span><span class="default">20<br />            </span><span class="keyword">);<br />            <br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curl</span><span class="keyword">-&gt;</span><span class="default">init</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">);<br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">curl</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">();<br />            if (</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'curl_error'</span><span class="keyword">])    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'curl_error'</span><span class="keyword">]);<br />            if (</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">]!=</span><span class="string">'200'</span><span class="keyword">)    throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"HTTP Code = "</span><span class="keyword">.</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'http_code'</span><span class="keyword">]);<br />            if (!</span><span class="default">$result</span><span class="keyword">[</span><span class="string">'body'</span><span class="keyword">])        throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"Body of file is empty"</span><span class="keyword">);<br />            ...............<br />        }<br />        catch (</span><span class="default">Exception $e</span><span class="keyword">)<br />        {<br />                    echo </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getMessage</span><span class="keyword">();<br />        }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70198">  <div class="votes">
    <div id="Vu70198">
    <a href="/manual/vote-note.php?id=70198&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70198">
    <a href="/manual/vote-note.php?id=70198&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70198" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#70198" class="name">
  <strong class="user"><em>lukasl at ackleymedia dot com</em></strong></a><a class="genanchor" href="#70198"> &para;</a><div class="date" title="2006-10-06 07:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70198">
<div class="phpcode"><code><span class="html">Thank you for sharing this.  I was wondering why my result was 1.<br /><br />To get around this in a safe way, this is how I check if the result is valid.<br /><br />$ch = curl_init(); /// initialize a cURL session <br />curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);<br />$xmlResponse = curl_exec ($ch);<br />curl_close ($ch);<br /><br />if (!is_string($xmlResponse) || !strlen($xmlResponse)) {<br />    return $this-&gt;_set_error( "Failure Contacting Server" );<br />} else {<br />    return $xmlResponse;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="31582">  <div class="votes">
    <div id="Vu31582">
    <a href="/manual/vote-note.php?id=31582&amp;page=function.curl-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31582">
    <a href="/manual/vote-note.php?id=31582&amp;page=function.curl-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31582" title="41% like this...">
    -5
    </div>
  </div>
  <a href="#31582" class="name">
  <strong class="user"><em>nagyp at hunaxon dot hu</em></strong></a><a class="genanchor" href="#31582"> &para;</a><div class="date" title="2003-04-26 05:22"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31582">
<div class="phpcode"><code><span class="html">fyi:<br />It returns false if there's an error while executing the curl session, no matter how CURLOPT_RETURNTRANSFER is set.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-exec.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.curl.php">cURL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.curl-close.php" title="curl_&#8203;close">curl_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-copy-handle.php" title="curl_&#8203;copy_&#8203;handle">curl_&#8203;copy_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-errno.php" title="curl_&#8203;errno">curl_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-error.php" title="curl_&#8203;error">curl_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-escape.php" title="curl_&#8203;escape">curl_&#8203;escape</a>
                        </li>
                                                <li class="current">
                            <a href="function.curl-exec.php" title="curl_&#8203;exec">curl_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-getinfo.php" title="curl_&#8203;getinfo">curl_&#8203;getinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-init.php" title="curl_&#8203;init">curl_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-add-handle.php" title="curl_&#8203;multi_&#8203;add_&#8203;handle">curl_&#8203;multi_&#8203;add_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-close.php" title="curl_&#8203;multi_&#8203;close">curl_&#8203;multi_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-errno.php" title="curl_&#8203;multi_&#8203;errno">curl_&#8203;multi_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-exec.php" title="curl_&#8203;multi_&#8203;exec">curl_&#8203;multi_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-getcontent.php" title="curl_&#8203;multi_&#8203;getcontent">curl_&#8203;multi_&#8203;getcontent</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-info-read.php" title="curl_&#8203;multi_&#8203;info_&#8203;read">curl_&#8203;multi_&#8203;info_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-init.php" title="curl_&#8203;multi_&#8203;init">curl_&#8203;multi_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-remove-handle.php" title="curl_&#8203;multi_&#8203;remove_&#8203;handle">curl_&#8203;multi_&#8203;remove_&#8203;handle</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-select.php" title="curl_&#8203;multi_&#8203;select">curl_&#8203;multi_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-setopt.php" title="curl_&#8203;multi_&#8203;setopt">curl_&#8203;multi_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-multi-strerror.php" title="curl_&#8203;multi_&#8203;strerror">curl_&#8203;multi_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-pause.php" title="curl_&#8203;pause">curl_&#8203;pause</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-reset.php" title="curl_&#8203;reset">curl_&#8203;reset</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-setopt.php" title="curl_&#8203;setopt">curl_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-setopt-array.php" title="curl_&#8203;setopt_&#8203;array">curl_&#8203;setopt_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-close.php" title="curl_&#8203;share_&#8203;close">curl_&#8203;share_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-errno.php" title="curl_&#8203;share_&#8203;errno">curl_&#8203;share_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-init.php" title="curl_&#8203;share_&#8203;init">curl_&#8203;share_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-init-persistent.php" title="curl_&#8203;share_&#8203;init_&#8203;persistent">curl_&#8203;share_&#8203;init_&#8203;persistent</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-setopt.php" title="curl_&#8203;share_&#8203;setopt">curl_&#8203;share_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-share-strerror.php" title="curl_&#8203;share_&#8203;strerror">curl_&#8203;share_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-strerror.php" title="curl_&#8203;strerror">curl_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-unescape.php" title="curl_&#8203;unescape">curl_&#8203;unescape</a>
                        </li>
                                                <li class="">
                            <a href="function.curl_upkeep.php" title="curl_&#8203;upkeep">curl_&#8203;upkeep</a>
                        </li>
                                                <li class="">
                            <a href="function.curl-version.php" title="curl_&#8203;version">curl_&#8203;version</a>
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
