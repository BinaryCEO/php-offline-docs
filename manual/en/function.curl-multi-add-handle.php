<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_multi_add_handle - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-multi-add-handle.php">
 <link rel="shorturl" href="https://www.php.net/curl-multi-add-handle">
 <link rel="alternate" href="https://www.php.net/curl-multi-add-handle" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-init.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-multi-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-multi-add-handle.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-multi-add-handle.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-multi-add-handle.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-multi-add-handle.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-multi-add-handle.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-multi-add-handle.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-multi-add-handle.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-multi-add-handle.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-multi-add-handle.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-multi-add-handle.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-multi-add-handle.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Add a normal cURL handle to a cURL multi handle" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_multi_add_handle - Manual" />
<meta name="twitter:description" content="Add a normal cURL handle to a cURL multi handle" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_multi_add_handle - Manual" />
<meta itemprop="description" content="Add a normal cURL handle to a cURL multi handle" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Add a normal cURL handle to a cURL multi handle" />

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
        <a href="function.curl-multi-close.php">
          curl_multi_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-init.php">
          &laquo; curl_init        </a>
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
            <option value='en/function.curl-multi-add-handle.php' selected="selected">English</option>
            <option value='de/function.curl-multi-add-handle.php'>German</option>
            <option value='es/function.curl-multi-add-handle.php'>Spanish</option>
            <option value='fr/function.curl-multi-add-handle.php'>French</option>
            <option value='it/function.curl-multi-add-handle.php'>Italian</option>
            <option value='ja/function.curl-multi-add-handle.php'>Japanese</option>
            <option value='pt_BR/function.curl-multi-add-handle.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-multi-add-handle.php'>Russian</option>
            <option value='tr/function.curl-multi-add-handle.php'>Turkish</option>
            <option value='uk/function.curl-multi-add-handle.php'>Ukrainian</option>
            <option value='zh/function.curl-multi-add-handle.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-multi-add-handle" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_multi_add_handle</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_add_handle</span> &mdash; <span class="dc-title">Add a normal cURL handle to a cURL multi handle</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.curl-multi-add-handle-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_multi_add_handle</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlmultihandle.php" class="type CurlMultiHandle">CurlMultiHandle</a></span> <code class="parameter">$multi_handle</code></span>, <span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Adds the <code class="parameter">handle</code> handle to the multi handle 
   <code class="parameter">multi_handle</code>
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.curl-multi-add-handle-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">multi_handle</code>
</dt><dd><p class="para">A cURL multi handle returned by
<span class="function"><a href="function.curl-multi-init.php" class="function">curl_multi_init()</a></span>.</p></dd>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-add-handle-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns 0 on success, or one of the <strong><code><a href="curl.constants.php#constant.curlm-added-already">CURLM_<span class="replaceable">*</span></a></code></strong> errors
   code.
  </p>
 </div>

 
 <div class="refsect1 changelog" id="refsect1-function.curl-multi-add-handle-changelog">
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


 <div class="refsect1 seealso" id="refsect1-function.curl-multi-add-handle-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-multi-remove-handle.php" class="function" rel="rdfs-seeAlso">curl_multi_remove_handle()</a> - Remove a handle from a set of cURL handles</span></li>
    <li><span class="function"><a href="function.curl-multi-init.php" class="function" rel="rdfs-seeAlso">curl_multi_init()</a> - Returns a new cURL multi handle</span></li>
    <li><span class="function"><a href="function.curl-init.php" class="function" rel="rdfs-seeAlso">curl_init()</a> - Initialize a cURL session</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-multi-add-handle.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-multi-add-handle%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-multi-add-handle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-add-handle.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110922">  <div class="votes">
    <div id="Vu110922">
    <a href="/manual/vote-note.php?id=110922&amp;page=function.curl-multi-add-handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110922">
    <a href="/manual/vote-note.php?id=110922&amp;page=function.curl-multi-add-handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110922" title="64% like this...">
    9
    </div>
  </div>
  <a href="#110922" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#110922"> &para;</a><div class="date" title="2012-12-24 06:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110922">
<div class="phpcode"><code><span class="html">The 'do' loop in this example will cycle indefinitely until all curl downloads complete, needlessly using CPU cycles.  A much better way is to block while dowloads are in progress.  Refer to the example code on the curl_multi_exec() page instead, which does this!</span></code></div>
  </div>
 </div>
  <div class="note" id="122964">  <div class="votes">
    <div id="Vu122964">
    <a href="/manual/vote-note.php?id=122964&amp;page=function.curl-multi-add-handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122964">
    <a href="/manual/vote-note.php?id=122964&amp;page=function.curl-multi-add-handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122964" title="61% like this...">
    3
    </div>
  </div>
  <a href="#122964" class="name">
  <strong class="user"><em>3315954155 at libero dot it</em></strong></a><a class="genanchor" href="#122964"> &para;</a><div class="date" title="2018-07-20 04:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122964">
<div class="phpcode"><code><span class="html">Sometime with arrays and loops (i.e. for or do while or foreach) curl_multi_init  loses some hits, to work around this problem  it is necessary to divide the loop into two parts: the start with key number zero and than, all the rest. In this way the curl_multi_init doesn't lose any hits. I did a lot of test and it seems to work well enough. <br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">set_option</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">){<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">,  </span><span class="default">$y</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">CURLOPT_FOLLOWLOCATION</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">CURLOPT_ENCODING</span><span class="keyword">, </span><span class="string">"gzip,deflate"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$nodes </span><span class="keyword">= array(</span><span class="string">'<a href="http://php.net/manual/it/function.curl-multi-add-handle.php" rel="nofollow" target="_blank">http://php.net/manual/it/function.curl-multi-add-handle.php</a>'</span><span class="keyword">, <br /></span><span class="string">'<a href="http://php.net/manual/en/function.curl-multi-init.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.curl-multi-init.php</a>'</span><span class="keyword">, <br /></span><span class="string">'<a href="http://php.net/manual/en/function.curl-multi-setopt.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.curl-multi-setopt.php</a>'<br /></span><span class="keyword">);<br /><br /></span><span class="default">$node_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$nodes</span><span class="keyword">);<br /><br /></span><span class="default">$curl_arr </span><span class="keyword">= array();<br /></span><span class="default">$master </span><span class="keyword">= </span><span class="default">curl_multi_init</span><span class="keyword">();<br /></span><span class="comment">/*<br />now I put the first part of the array with the start key number zero, add all     <br />options and add the curl_multi_add_handle;                                               <br />it is necessary to detach this first part to avoid to lose some handles and than running <br /> the loop with the start key number one.                                                  <br />In this way the curl_multi_init doesn't lose anything and seems to be very stable.       <br />*/   <br />    </span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$nodes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">set_option</span><span class="keyword">(</span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$nodes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">, </span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    <br /><br /></span><span class="comment">/*  <br />now the loop can start with key number one                              <br />*/<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />do {<br />    if (</span><span class="default">$i</span><span class="keyword">!==</span><span class="default">0</span><span class="keyword">){<br /> <br />    </span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$nodes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">set_option</span><span class="keyword">(</span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$nodes</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    </span><span class="default">curl_multi_add_handle</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">, </span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />    }<br /></span><span class="default">$i</span><span class="keyword">++;    <br />}while(</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$node_count</span><span class="keyword">);<br /><br /></span><span class="default">$running </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />do {<br />    </span><span class="default">curl_multi_exec</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">,</span><span class="default">$running</span><span class="keyword">);<br />} while(</span><span class="default">$running</span><span class="keyword">);<br /><br /></span><span class="default">$results </span><span class="keyword">= array();<br /></span><span class="default">$q </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />do{<br /> </span><span class="default">$results</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">] = </span><span class="default">curl_multi_getcontent</span><span class="keyword">(</span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">]);<br /> </span><span class="default">curl_multi_remove_handle</span><span class="keyword">(</span><span class="default">$master</span><span class="keyword">, </span><span class="default">$curl_arr</span><span class="keyword">[</span><span class="default">$q</span><span class="keyword">]);<br /></span><span class="default">$q</span><span class="keyword">++;    <br />}while(</span><span class="default">$q </span><span class="keyword">&lt; </span><span class="default">$node_count</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$results </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br /> echo </span><span class="default">$value</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122596">  <div class="votes">
    <div id="Vu122596">
    <a href="/manual/vote-note.php?id=122596&amp;page=function.curl-multi-add-handle&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122596">
    <a href="/manual/vote-note.php?id=122596&amp;page=function.curl-multi-add-handle&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122596" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#122596" class="name">
  <strong class="user"><em>kamsamlt888 at gmail dot com</em></strong></a><a class="genanchor" href="#122596"> &para;</a><div class="date" title="2018-04-06 09:47"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122596">
<div class="phpcode"><code><span class="html">$nodes = array('<a href="http://www.google.com" rel="nofollow" target="_blank">http://www.google.com</a>', '<a href="http://www.microsoft.com" rel="nofollow" target="_blank">http://www.microsoft.com</a>', '<a href="http://yahoo.com" rel="nofollow" target="_blank">http://yahoo.com</a>');<br />$node_count = count($nodes);<br /><br />$curl_arr = array();<br />$master = curl_multi_init();<br /><br />for($i = 0; $i &lt; $node_count; $i++)<br />{<br />    $url =$nodes[$i];<br />    $curl_arr[$i] = curl_init($url);<br />    curl_setopt($curl_arr[$i], CURLOPT_RETURNTRANSFER, true);<br />    curl_multi_add_handle($master, $curl_arr[$i]);<br />}<br /><br />do {<br />    curl_multi_exec($master,$running);<br />} while($running &gt; 0);<br /><br />echo "results: ";<br />for($i = 0; $i &lt; $node_count; $i++)<br />{<br />    $results = curl_multi_getcontent  ( $curl_arr[$i]  );<br />    echo( $i . "\n" . $results . "\n");<br />}<br />echo 'done';</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-multi-add-handle&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-multi-add-handle.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
