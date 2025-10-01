<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_multi_exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-multi-exec.php">
 <link rel="shorturl" href="https://www.php.net/curl-multi-exec">
 <link rel="alternate" href="https://www.php.net/curl-multi-exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-multi-errno.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-multi-getcontent.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-multi-exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-multi-exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-multi-exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-multi-exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-multi-exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-multi-exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-multi-exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-multi-exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-multi-exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-multi-exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-multi-exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Run the sub-connections of the current cURL handle" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_multi_exec - Manual" />
<meta name="twitter:description" content="Run the sub-connections of the current cURL handle" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_multi_exec - Manual" />
<meta itemprop="description" content="Run the sub-connections of the current cURL handle" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Run the sub-connections of the current cURL handle" />

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
        <a href="function.curl-multi-getcontent.php">
          curl_multi_getcontent &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-multi-errno.php">
          &laquo; curl_multi_errno        </a>
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
            <option value='en/function.curl-multi-exec.php' selected="selected">English</option>
            <option value='de/function.curl-multi-exec.php'>German</option>
            <option value='es/function.curl-multi-exec.php'>Spanish</option>
            <option value='fr/function.curl-multi-exec.php'>French</option>
            <option value='it/function.curl-multi-exec.php'>Italian</option>
            <option value='ja/function.curl-multi-exec.php'>Japanese</option>
            <option value='pt_BR/function.curl-multi-exec.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-multi-exec.php'>Russian</option>
            <option value='tr/function.curl-multi-exec.php'>Turkish</option>
            <option value='uk/function.curl-multi-exec.php'>Ukrainian</option>
            <option value='zh/function.curl-multi-exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-multi-exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_multi_exec</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_exec</span> &mdash; <span class="dc-title">Run the sub-connections of the current cURL handle</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.curl-multi-exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_multi_exec</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlmultihandle.php" class="type CurlMultiHandle">CurlMultiHandle</a></span> <code class="parameter">$multi_handle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$still_running</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Processes each of the handles in the stack.  This method can be called whether or not a handle
   needs to read or write data.
  </p> 
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-multi-exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">multi_handle</code>
</dt><dd><p class="para">A cURL multi handle returned by
<span class="function"><a href="function.curl-multi-init.php" class="function">curl_multi_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">still_running</code></dt>
     <dd>
      <p class="para">
       A reference to a flag to tell whether the operations are still running.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A cURL code defined in the cURL <a href="curl.constants.php" class="link">Predefined Constants</a>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This only returns errors regarding the whole multi stack. There might still have 
    occurred problems on individual transfers even when this function returns 
    <strong><code><a href="curl.constants.php#constant.curlm-ok">CURLM_OK</a></code></strong>.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.curl-multi-exec-changelog">
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
  <code class="parameter">multi_handle</code> expects a <span class="classname"><a href="class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>
  instance now; previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.curl-multi-exec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4495">
    <p><strong>Example #1 <span class="function"><strong>curl_multi_exec()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     This example will create curl handles for a list of URLs, add them to a multi
     handle, and process them asynchronously.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$urls </span><span style="color: #007700">= [<br />    </span><span style="color: #DD0000">"https://www.php.net/"</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">"https://www.example.com/"</span><span style="color: #007700">,<br />];<br /><br /></span><span style="color: #0000BB">$mh </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_multi_init</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$map </span><span style="color: #007700">= new </span><span style="color: #0000BB">WeakMap</span><span style="color: #007700">();<br /><br />foreach (</span><span style="color: #0000BB">$urls </span><span style="color: #007700">as </span><span style="color: #0000BB">$url</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #0000BB">$url</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">curl_multi_add_handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">, </span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$ch</span><span style="color: #007700">] = </span><span style="color: #0000BB">$url</span><span style="color: #007700">;<br />}<br /><br />do {<br />    </span><span style="color: #0000BB">$status </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_multi_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">, </span><span style="color: #0000BB">$unfinishedHandles</span><span style="color: #007700">);<br />    if (</span><span style="color: #0000BB">$status </span><span style="color: #007700">!== </span><span style="color: #0000BB">CURLM_OK</span><span style="color: #007700">) {<br />        throw new </span><span style="color: #0000BB">\Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_multi_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_multi_errno</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">)));<br />    }<br /><br />    while ((</span><span style="color: #0000BB">$info </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_multi_info_read</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">)) !== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />        if (</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'msg'</span><span style="color: #007700">] === </span><span style="color: #0000BB">CURLMSG_DONE</span><span style="color: #007700">) {<br />            </span><span style="color: #0000BB">$handle </span><span style="color: #007700">= </span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'handle'</span><span style="color: #007700">];<br />            </span><span style="color: #0000BB">curl_multi_remove_handle</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">, </span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />            </span><span style="color: #0000BB">$url </span><span style="color: #007700">= </span><span style="color: #0000BB">$map</span><span style="color: #007700">[</span><span style="color: #0000BB">$handle</span><span style="color: #007700">];<br /><br />            if (</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'result'</span><span style="color: #007700">] === </span><span style="color: #0000BB">CURLE_OK</span><span style="color: #007700">) {<br />                </span><span style="color: #0000BB">$statusCode </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLINFO_HTTP_CODE</span><span style="color: #007700">);<br /><br />                echo </span><span style="color: #DD0000">"Request to </span><span style="color: #007700">{</span><span style="color: #0000BB">$url</span><span style="color: #007700">}</span><span style="color: #DD0000"> finished with HTTP status </span><span style="color: #007700">{</span><span style="color: #0000BB">$statusCode</span><span style="color: #007700">}</span><span style="color: #DD0000">:"</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />                echo </span><span style="color: #0000BB">curl_multi_getcontent</span><span style="color: #007700">(</span><span style="color: #0000BB">$handle</span><span style="color: #007700">);<br />                echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />            } else {<br />                echo </span><span style="color: #DD0000">"Request to </span><span style="color: #007700">{</span><span style="color: #0000BB">$url</span><span style="color: #007700">}</span><span style="color: #DD0000"> failed with error: "</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />                echo </span><span style="color: #0000BB">curl_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'result'</span><span style="color: #007700">]);<br />                echo </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />            }<br />        }<br />    }<br /><br />    if (</span><span style="color: #0000BB">$unfinishedHandles</span><span style="color: #007700">) {<br />        if ((</span><span style="color: #0000BB">$updatedHandles </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_multi_select</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">)) === -</span><span style="color: #0000BB">1</span><span style="color: #007700">) {<br />            throw new </span><span style="color: #0000BB">\Exception</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_multi_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">curl_multi_errno</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">)));<br />        }<br />    }<br />} while (</span><span style="color: #0000BB">$unfinishedHandles</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">curl_multi_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$mh</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.curl-multi-exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-multi-init.php" class="function" rel="rdfs-seeAlso">curl_multi_init()</a> - Returns a new cURL multi handle</span></li>
    <li><span class="function"><a href="function.curl-multi-select.php" class="function" rel="rdfs-seeAlso">curl_multi_select()</a> - Wait until reading or writing is possible for any cURL multi handle connection</span></li>
    <li><span class="function"><a href="function.curl-exec.php" class="function" rel="rdfs-seeAlso">curl_exec()</a> - Perform a cURL session</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-multi-exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-multi-exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-multi-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113002">  <div class="votes">
    <div id="Vu113002">
    <a href="/manual/vote-note.php?id=113002&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113002">
    <a href="/manual/vote-note.php?id=113002&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113002" title="64% like this...">
    69
    </div>
  </div>
  <a href="#113002" class="name">
  <strong class="user"><em>Ren</em></strong></a><a class="genanchor" href="#113002"> &para;</a><div class="date" title="2013-08-17 01:54"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113002">
<div class="phpcode"><code><span class="html">Solve CPU 100% usage, a more simple and right way:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">do {<br />    </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$running</span><span class="keyword">);<br />    </span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">);<br />} while (</span><span class="default">$running </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117831">  <div class="votes">
    <div id="Vu117831">
    <a href="/manual/vote-note.php?id=117831&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117831">
    <a href="/manual/vote-note.php?id=117831&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117831" title="72% like this...">
    27
    </div>
  </div>
  <a href="#117831" class="name">
  <strong class="user"><em>Zappie</em></strong></a><a class="genanchor" href="#117831"> &para;</a><div class="date" title="2015-08-17 08:36"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117831">
<div class="phpcode"><code><span class="html">Probably you also want to be able to download the HTML content into buffers/variables, for parsing the HTML or for other processing in your program.<br /><br />The example code on this page only outputs everything on the screen, without giving you the possibility to save the downloaded pages in string variables. Because downloading multiple pages is what I wanted to do (not a big surprise, huh? that's the reason for using multi-page parallel Curl) I was initially baffled, because this page doesn't give pointers to a guide how to do that.<br /><br />Fortunately, there's a way to download content with parallel Curl requests (just like you would do for a single download with the regular curl_exec). You need to use: <a href="http://php.net/manual/en/function.curl-multi-getcontent.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.curl-multi-getcontent.php</a><br /><br />The function curl_multi_getcontent should definitely be mentioned in the "See Also" section of curl_multi_exec. Probably most people who find their way to the docs page of curl_multi_exec, actually want to download the multiple HTML pages (or other content from the multiple parallel Curl connections) into buffers, one page per one buffer.</span></code></div>
  </div>
 </div>
  <div class="note" id="119506">  <div class="votes">
    <div id="Vu119506">
    <a href="/manual/vote-note.php?id=119506&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119506">
    <a href="/manual/vote-note.php?id=119506&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119506" title="64% like this...">
    22
    </div>
  </div>
  <a href="#119506" class="name">
  <strong class="user"><em>Silvio Garbes</em></strong></a><a class="genanchor" href="#119506"> &para;</a><div class="date" title="2016-06-24 05:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119506">
<div class="phpcode"><code><span class="html">// Todas url gravadas em array<br />$url[] = '<a href="http://www.link1.com.br" rel="nofollow" target="_blank">http://www.link1.com.br</a>';<br />$url[] = '<a href="https://www.link2.com.br" rel="nofollow" target="_blank">https://www.link2.com.br</a>';<br />$url[] = '<a href="https://www.link3.com.br" rel="nofollow" target="_blank">https://www.link3.com.br</a>';<br /><br />// Setando opção padrão para todas url e adicionando a fila para processamento<br />$mh = curl_multi_init();<br />foreach($url as $key =&gt; $value){<br />  $ch[$key] = curl_init($value);<br />  curl_setopt($ch[$key], CURLOPT_NOBODY, true);<br />  curl_setopt($ch[$key], CURLOPT_HEADER, true);<br />  curl_setopt($ch[$key], CURLOPT_RETURNTRANSFER, true);<br />  curl_setopt($ch[$key], CURLOPT_SSL_VERIFYPEER, false);<br />  curl_setopt($ch[$key], CURLOPT_SSL_VERIFYHOST, false);<br />  <br />  curl_multi_add_handle($mh,$ch[$key]);<br />}<br /><br />// Executando consulta<br />do {<br />  curl_multi_exec($mh, $running);<br />  curl_multi_select($mh);<br />} while ($running &gt; 0);<br /><br />// Obtendo dados de todas as consultas e retirando da fila<br />foreach(array_keys($ch) as $key){<br />  echo curl_getinfo($ch[$key], CURLINFO_HTTP_CODE);<br />  echo curl_getinfo($ch[$key], CURLINFO_EFFECTIVE_URL);<br />  echo "\n";<br />  <br />  curl_multi_remove_handle($mh, $ch[$key]);<br />}<br /><br />// Finalizando<br />curl_multi_close($mh);</span></code></div>
  </div>
 </div>
  <div class="note" id="123764">  <div class="votes">
    <div id="Vu123764">
    <a href="/manual/vote-note.php?id=123764&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123764">
    <a href="/manual/vote-note.php?id=123764&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123764" title="63% like this...">
    6
    </div>
  </div>
  <a href="#123764" class="name">
  <strong class="user"><em>gmail at com dot asmqb7</em></strong></a><a class="genanchor" href="#123764"> &para;</a><div class="date" title="2019-04-10 01:17"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123764">
<div class="phpcode"><code><span class="html">/!\ ATTENTION<br />/!\ Several of the non-downvoted notes on this page are using outdated info.<br /><br />The CURLM_CALL_MULTI_PERFORM return code has been defunct since circa 2012, at least seven years ago.<br /><br />Quoting the author of curl, from <a href="https://curl.haxx.se/mail/lib-2012-08/0042.html:" rel="nofollow" target="_blank">https://curl.haxx.se/mail/lib-2012-08/0042.html:</a><br /><br />&gt; CURLM_CALL_MULTI_PERFORM is deprecated and will never be returned, as documented. <br /><br />&gt; During the first decade or so of libcurl's multi interface, I never saw a single proper use of that feature. I did however see numerous mistakes and misunderstandings. That made me decide that the feature wasn't important or good enough, so since 7.20.0 CURLM_CALL_MULTI_PERFORM is no more. <br /><br />Discovered all of this thanks to <a href="https://stackoverflow.com/q/19490837/3229684," rel="nofollow" target="_blank">https://stackoverflow.com/q/19490837/3229684,</a> which suggested the following replacement while loop:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">do {<br />    </span><span class="default">$mrc </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mc</span><span class="keyword">, </span><span class="default">$active</span><span class="keyword">);<br />} while (</span><span class="default">$active </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br /><a href="https://www.google.com/search?q=CURLM_CALL_MULTI_PERFORM" rel="nofollow" target="_blank">https://www.google.com/search?q=CURLM_CALL_MULTI_PERFORM</a> &lt;-- probably the most future-proof useful link I can put here</span></code></div>
  </div>
 </div>
  <div class="note" id="124240">  <div class="votes">
    <div id="Vu124240">
    <a href="/manual/vote-note.php?id=124240&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124240">
    <a href="/manual/vote-note.php?id=124240&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124240" title="58% like this...">
    2
    </div>
  </div>
  <a href="#124240" class="name">
  <strong class="user"><em>Timo Huovinen</em></strong></a><a class="genanchor" href="#124240"> &para;</a><div class="date" title="2019-09-27 06:53"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124240">
<div class="phpcode"><code><span class="html">Just for people struggling to get this to work, here is my approach.<br />No infinite loops, no CPU 100%, speed can be tweaked.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">curl_multi_exec_full</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, &amp;</span><span class="default">$still_running</span><span class="keyword">) {<br />    do {<br />        </span><span class="default">$state </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);<br />    } while (</span><span class="default">$still_running </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$state </span><span class="keyword">=== </span><span class="default">CURLM_CALL_MULTI_PERFORM </span><span class="keyword">&amp;&amp; </span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">0.1</span><span class="keyword">));<br />    return </span><span class="default">$state</span><span class="keyword">;<br />}<br />function </span><span class="default">curl_multi_wait</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$minTime </span><span class="keyword">= </span><span class="default">0.001</span><span class="keyword">, </span><span class="default">$maxTime </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">){<br />    </span><span class="default">$umin </span><span class="keyword">= </span><span class="default">$minTime</span><span class="keyword">*</span><span class="default">1000000</span><span class="keyword">;<br /><br />    </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">$num_descriptors </span><span class="keyword">= </span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$maxTime</span><span class="keyword">);<br />    if(</span><span class="default">$num_descriptors </span><span class="keyword">=== -</span><span class="default">1</span><span class="keyword">){<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$umin</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$timespan </span><span class="keyword">= (</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$start_time</span><span class="keyword">);<br />    if(</span><span class="default">$timespan </span><span class="keyword">&lt; </span><span class="default">$umin</span><span class="keyword">){<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$umin </span><span class="keyword">- </span><span class="default">$timespan</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">$handles </span><span class="keyword">= [<br />    [<br />        </span><span class="default">CURLOPT_URL</span><span class="keyword">=&gt;</span><span class="string">"<a href="http://example.com/" rel="nofollow" target="_blank">http://example.com/</a>"</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_HEADER</span><span class="keyword">=&gt;</span><span class="default">false</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">=&gt;</span><span class="default">true</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">=&gt;</span><span class="default">false</span><span class="keyword">,<br />    ],<br />    [<br />        </span><span class="default">CURLOPT_URL</span><span class="keyword">=&gt;</span><span class="string">"<a href="http://www.php.net" rel="nofollow" target="_blank">http://www.php.net</a>"</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_HEADER</span><span class="keyword">=&gt;</span><span class="default">false</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">=&gt;</span><span class="default">true</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">=&gt;</span><span class="default">false</span><span class="keyword">,<br /><br />        </span><span class="comment">// <a href="https://stackoverflow.com/a/41135574" rel="nofollow" target="_blank">https://stackoverflow.com/a/41135574</a><br />        </span><span class="default">CURLOPT_HEADERFUNCTION</span><span class="keyword">=&gt;function(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">)<br />        {<br />            print </span><span class="string">"header from <a href="http://www.php.net:" rel="nofollow" target="_blank">http://www.php.net:</a> "</span><span class="keyword">.</span><span class="default">$header</span><span class="keyword">;<br />            return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">);<br />        }<br />    ]<br />];<br /><br /></span><span class="default">$mh </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /><br /></span><span class="default">$chandles </span><span class="keyword">= [];<br />foreach(</span><span class="default">$handles </span><span class="keyword">as </span><span class="default">$opts</span><span class="keyword">) {<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$opts</span><span class="keyword">);<br />    </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />    </span><span class="default">$chandles</span><span class="keyword">[] = </span><span class="default">$ch</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$prevRunning </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />do {<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">curl_multi_exec_full</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$running</span><span class="keyword">);<br />    if(</span><span class="default">$running </span><span class="keyword">&lt; </span><span class="default">$prevRunning</span><span class="keyword">){<br />        while (</span><span class="default">$read </span><span class="keyword">= </span><span class="default">curl_multi_info_read</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$msgs_in_queue</span><span class="keyword">)) {<br /><br />            </span><span class="default">$info </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">[</span><span class="string">'handle'</span><span class="keyword">]);<br /><br />            if(</span><span class="default">$read</span><span class="keyword">[</span><span class="string">'result'</span><span class="keyword">] !== </span><span class="default">CURLE_OK</span><span class="keyword">){<br />                print </span><span class="string">"Error: "</span><span class="keyword">.</span><span class="default">$info</span><span class="keyword">[</span><span class="string">'url'</span><span class="keyword">].</span><span class="default">PHP_EOL</span><span class="keyword">;<br />            }<br /><br />            if(</span><span class="default">$read</span><span class="keyword">[</span><span class="string">'result'</span><span class="keyword">] === </span><span class="default">CURLE_OK</span><span class="keyword">){<br />                </span><span class="comment">/*<br />                if(isset($info['redirect_url']) &amp;&amp; trim($info['redirect_url'])!==''){<br /><br />                    print "running redirect: ".$info['redirect_url'].PHP_EOL;<br />                    $ch3 = curl_init();<br />                    curl_setopt($ch3, CURLOPT_URL, $info['redirect_url']);<br />                    curl_setopt($ch3, CURLOPT_HEADER, 0);<br />                    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);<br />                    curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 0);<br />                    curl_multi_add_handle($mh,$ch3);<br />                }<br />                */<br /><br />                </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">);<br />                </span><span class="comment">//echo curl_multi_getcontent($read['handle']));<br />            </span><span class="keyword">}<br />        }<br />    }<br /><br />    if (</span><span class="default">$running </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">curl_multi_wait</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$prevRunning </span><span class="keyword">= </span><span class="default">$running</span><span class="keyword">;<br /><br />} while (</span><span class="default">$running </span><span class="keyword">&gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$status </span><span class="keyword">== </span><span class="default">CURLM_OK</span><span class="keyword">);<br />foreach(</span><span class="default">$chandles </span><span class="keyword">as </span><span class="default">$ch</span><span class="keyword">){<br />    </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />}<br /></span><span class="default">curl_multi_close</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127124">  <div class="votes">
    <div id="Vu127124">
    <a href="/manual/vote-note.php?id=127124&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127124">
    <a href="/manual/vote-note.php?id=127124&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127124" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#127124" class="name">
  <strong class="user"><em>maxpanchnko at gmail dot com</em></strong></a><a class="genanchor" href="#127124"> &para;</a><div class="date" title="2022-05-22 12:15"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127124">
<div class="phpcode"><code><span class="html">One of examples, how to make multi_curl faster twice (pseudocode) with Fibers:<br /><br /><span class="default">&lt;?php<br /><br />$curlHandles </span><span class="keyword">= [];<br /></span><span class="default">$urls </span><span class="keyword">= [<br />    </span><span class="string">'<a href="https://example.com/1" rel="nofollow" target="_blank">https://example.com/1</a>'</span><span class="keyword">,<br />    </span><span class="string">'<a href="https://example.com/2" rel="nofollow" target="_blank">https://example.com/2</a>'</span><span class="keyword">,<br />    ...<br />    </span><span class="string">'<a href="https://example.com/1000" rel="nofollow" target="_blank">https://example.com/1000</a>'</span><span class="keyword">,<br />];<br /></span><span class="default">$mh </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /></span><span class="default">$mh_fiber </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /><br /></span><span class="default">$halfOfList </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$urls</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />foreach (</span><span class="default">$urls </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$url</span><span class="keyword">) {<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);<br />    </span><span class="default">$curlHandles</span><span class="keyword">[] = </span><span class="default">$ch</span><span class="keyword">;<br /><br />    </span><span class="comment">// half of urls will be run in background in fiber<br />    </span><span class="default">$index </span><span class="keyword">&gt; </span><span class="default">$halfOfList </span><span class="keyword">? </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">) : </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$fiber </span><span class="keyword">= new </span><span class="default">Fiber</span><span class="keyword">(function (</span><span class="default">CurlMultiHandle $mh</span><span class="keyword">) {<br />    </span><span class="default">$still_running </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />    do {<br />        </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);<br />        </span><span class="default">Fiber</span><span class="keyword">::</span><span class="default">suspend</span><span class="keyword">();<br />    } while (</span><span class="default">$still_running</span><span class="keyword">);<br />});<br /><br /></span><span class="comment">// run curl multi exec in background while fiber is in suspend status<br /></span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">start</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">);<br /><br /></span><span class="default">$still_running </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />do {<br />    </span><span class="default">$status </span><span class="keyword">= </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$still_running</span><span class="keyword">);<br />} while (</span><span class="default">$still_running</span><span class="keyword">);<br /><br />do {<br />    </span><span class="comment">/**<br />     * at this moment curl in fiber already finished (maybe)<br />     * so we must refresh $still_running variable with one more cycle "do while" in fiber<br />     **/<br />    </span><span class="default">$status_fiber </span><span class="keyword">= </span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">resume</span><span class="keyword">();<br />} while (!</span><span class="default">$fiber</span><span class="keyword">-&gt;</span><span class="default">isTerminated</span><span class="keyword">());<br /><br />foreach (</span><span class="default">$curlHandles </span><span class="keyword">as </span><span class="default">$index </span><span class="keyword">=&gt; </span><span class="default">$ch</span><span class="keyword">) {<br />    </span><span class="default">$index </span><span class="keyword">&gt; </span><span class="default">$halfOfList </span><span class="keyword">? </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">) : </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$ch</span><span class="keyword">);<br />}<br /></span><span class="default">curl_multi_close</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">);<br /></span><span class="default">curl_multi_close</span><span class="keyword">(</span><span class="default">$mh_fiber</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80977">  <div class="votes">
    <div id="Vu80977">
    <a href="/manual/vote-note.php?id=80977&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80977">
    <a href="/manual/vote-note.php?id=80977&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80977" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#80977" class="name">
  <strong class="user"><em>viczbk.ru</em></strong></a><a class="genanchor" href="#80977"> &para;</a><div class="date" title="2008-02-08 08:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80977">
<div class="phpcode"><code><span class="html"><a href="http://curl.haxx.se/libcurl/c/libcurl-multi.html" rel="nofollow" target="_blank">http://curl.haxx.se/libcurl/c/libcurl-multi.html</a><br /><br />"When you've added the handles you have for the moment (you can still add new ones at any time), you start the transfers by call curl_multi_perform(3).<br /><br />curl_multi_perform(3) is asynchronous. It will only execute as little as possible and then return back control to your program. It is designed to never block. If it returns CURLM_CALL_MULTI_PERFORM you better call it again soon, as that is a signal that it still has local data to send or remote data to receive."<br /><br />So it seems the loop in sample script should look this way:<br /><br /><span class="default">&lt;?php<br />$running</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">;<br /></span><span class="comment">//execute the handles<br /></span><span class="keyword">do {<br />    while (</span><span class="default">CURLM_CALL_MULTI_PERFORM </span><span class="keyword">=== </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">, </span><span class="default">$running</span><span class="keyword">));<br />    if (!</span><span class="default">$running</span><span class="keyword">) break;<br />    while ((</span><span class="default">$res </span><span class="keyword">= </span><span class="default">curl_multi_select</span><span class="keyword">(</span><span class="default">$mh</span><span class="keyword">)) === </span><span class="default">0</span><span class="keyword">) {};<br />    if (</span><span class="default">$res </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        echo </span><span class="string">"&lt;h1&gt;select error&lt;/h1&gt;"</span><span class="keyword">;<br />        break;<br />    }<br />} while (</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This worked fine (PHP 5.2.5 @ FBSD 6.2) without running non-blocked loop and wasting CPU time.<br /><br />However this seems to be the only use of curl_multi_select, coz there's no simple way to bind it with other PHP wrappers for select syscall.</span></code></div>
  </div>
 </div>
  <div class="note" id="115990">  <div class="votes">
    <div id="Vu115990">
    <a href="/manual/vote-note.php?id=115990&amp;page=function.curl-multi-exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115990">
    <a href="/manual/vote-note.php?id=115990&amp;page=function.curl-multi-exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115990" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#115990" class="name">
  <strong class="user"><em>jorov at mail dot bg</em></strong></a><a class="genanchor" href="#115990"> &para;</a><div class="date" title="2014-10-23 03:22"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115990">
<div class="phpcode"><code><span class="html">I tried Daniel G Zylberberg's function and<br />it was not working the way it was posted.<br />I made some changes to get it work and here is what I use:<br /><br />function multiCurl($res, $options=""){<br /><br />        if(count($res)&lt;=0) return False;<br /><br />        $handles = array();<br /><br />        if(!$options) // add default options<br />            $options = array(<br />                CURLOPT_HEADER=&gt;0,<br />                CURLOPT_RETURNTRANSFER=&gt;1,<br />            );<br /><br />        // add curl options to each handle<br />        foreach($res as $k=&gt;$row){<br />            $ch{$k} = curl_init();<br />            $options[CURLOPT_URL] = $row['url'];<br />            $opt = curl_setopt_array($ch{$k}, $options);<br />            var_dump($opt);<br />            $handles[$k] = $ch{$k};<br />        }<br /><br />        $mh = curl_multi_init();<br /><br />        // add handles<br />        foreach($handles as $k =&gt; $handle){<br />            $err = curl_multi_add_handle($mh, $handle);            <br />        }<br /><br />        $running_handles = null;<br /><br />        do {<br />          curl_multi_exec($mh, $running_handles);<br />          curl_multi_select($mh);<br />        } while ($running_handles &gt; 0);<br />       <br />        foreach($res as $k=&gt;$row){<br />            $res[$k]['error'] = curl_error($handles[$k]);<br />            if(!empty($res[$k]['error']))<br />                $res[$k]['data']  = '';<br />            else<br />                $res[$k]['data']  = curl_multi_getcontent( $handles[$k] );  // get results<br /><br />            // close current handler<br />            curl_multi_remove_handle($mh, $handles[$k] );<br />        }<br />        curl_multi_close($mh);<br />        return $res; // return response<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-multi-exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-exec.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
