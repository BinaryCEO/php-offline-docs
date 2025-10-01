<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_errno - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-errno.php">
 <link rel="shorturl" href="https://www.php.net/curl-errno">
 <link rel="alternate" href="https://www.php.net/curl-errno" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-copy-handle.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-error.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-errno.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-errno.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-errno.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-errno.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-errno.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-errno.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-errno.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-errno.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-errno.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-errno.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-errno.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return the last error number" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_errno - Manual" />
<meta name="twitter:description" content="Return the last error number" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_errno - Manual" />
<meta itemprop="description" content="Return the last error number" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return the last error number" />

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
        <a href="function.curl-error.php">
          curl_error &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-copy-handle.php">
          &laquo; curl_copy_handle        </a>
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
            <option value='en/function.curl-errno.php' selected="selected">English</option>
            <option value='de/function.curl-errno.php'>German</option>
            <option value='es/function.curl-errno.php'>Spanish</option>
            <option value='fr/function.curl-errno.php'>French</option>
            <option value='it/function.curl-errno.php'>Italian</option>
            <option value='ja/function.curl-errno.php'>Japanese</option>
            <option value='pt_BR/function.curl-errno.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-errno.php'>Russian</option>
            <option value='tr/function.curl-errno.php'>Turkish</option>
            <option value='uk/function.curl-errno.php'>Ukrainian</option>
            <option value='zh/function.curl-errno.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-errno" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_errno</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_errno</span> &mdash; <span class="dc-title">Return the last error number</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.curl-errno-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_errno</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the error number for the last cURL operation.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-errno-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-errno-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the error number or <code class="literal">0</code> (zero) if no error
   occurred.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.curl-errno-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.curl-errno-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4488">
    <p><strong>Example #1 <span class="function"><strong>curl_errno()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Create a curl handle to a non-existing location<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://404.php.net/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Execute<br /></span><span style="color: #0000BB">curl_setopt</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Check if any error occurred<br /></span><span style="color: #007700">if(</span><span style="color: #0000BB">curl_errno</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">))<br />{<br />    echo </span><span style="color: #DD0000">'Curl error: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">curl_error</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">// Close handle<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.curl-errno-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-error.php" class="function" rel="rdfs-seeAlso">curl_error()</a> - Return a string containing the last error for the current session</span></li>
    <li><a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">&raquo;&nbsp;Curl error codes</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-errno.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-errno%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-errno&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-errno.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103128">  <div class="votes">
    <div id="Vu103128">
    <a href="/manual/vote-note.php?id=103128&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103128">
    <a href="/manual/vote-note.php?id=103128&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103128" title="82% like this...">
    145
    </div>
  </div>
  <a href="#103128" class="name">
  <strong class="user"><em>denis at reddodo dot com</em></strong></a><a class="genanchor" href="#103128"> &para;</a><div class="date" title="2011-03-27 03:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103128">
<div class="phpcode"><code><span class="html">if someone need more information about curl errors<br /><span class="default">&lt;?php<br />$error_codes</span><span class="keyword">=array(<br />[</span><span class="default">1</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_UNSUPPORTED_PROTOCOL'</span><span class="keyword">, <br />[</span><span class="default">2</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FAILED_INIT'</span><span class="keyword">, <br />[</span><span class="default">3</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_URL_MALFORMAT'</span><span class="keyword">, <br />[</span><span class="default">4</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_URL_MALFORMAT_USER'</span><span class="keyword">, <br />[</span><span class="default">5</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_COULDNT_RESOLVE_PROXY'</span><span class="keyword">, <br />[</span><span class="default">6</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_COULDNT_RESOLVE_HOST'</span><span class="keyword">, <br />[</span><span class="default">7</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_COULDNT_CONNECT'</span><span class="keyword">, <br />[</span><span class="default">8</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_WEIRD_SERVER_REPLY'</span><span class="keyword">,<br />[</span><span class="default">9</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_REMOTE_ACCESS_DENIED'</span><span class="keyword">,<br />[</span><span class="default">11</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_WEIRD_PASS_REPLY'</span><span class="keyword">,<br />[</span><span class="default">13</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_WEIRD_PASV_REPLY'</span><span class="keyword">,<br />[</span><span class="default">14</span><span class="keyword">]=&gt;</span><span class="string">'CURLE_FTP_WEIRD_227_FORMAT'</span><span class="keyword">,<br />[</span><span class="default">15</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_CANT_GET_HOST'</span><span class="keyword">,<br />[</span><span class="default">17</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_COULDNT_SET_TYPE'</span><span class="keyword">,<br />[</span><span class="default">18</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_PARTIAL_FILE'</span><span class="keyword">,<br />[</span><span class="default">19</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_COULDNT_RETR_FILE'</span><span class="keyword">,<br />[</span><span class="default">21</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_QUOTE_ERROR'</span><span class="keyword">,<br />[</span><span class="default">22</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_HTTP_RETURNED_ERROR'</span><span class="keyword">,<br />[</span><span class="default">23</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_WRITE_ERROR'</span><span class="keyword">,<br />[</span><span class="default">25</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_UPLOAD_FAILED'</span><span class="keyword">,<br />[</span><span class="default">26</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_READ_ERROR'</span><span class="keyword">,<br />[</span><span class="default">27</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_OUT_OF_MEMORY'</span><span class="keyword">,<br />[</span><span class="default">28</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_OPERATION_TIMEDOUT'</span><span class="keyword">,<br />[</span><span class="default">30</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_PORT_FAILED'</span><span class="keyword">,<br />[</span><span class="default">31</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_COULDNT_USE_REST'</span><span class="keyword">,<br />[</span><span class="default">33</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_RANGE_ERROR'</span><span class="keyword">,<br />[</span><span class="default">34</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_HTTP_POST_ERROR'</span><span class="keyword">,<br />[</span><span class="default">35</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CONNECT_ERROR'</span><span class="keyword">,<br />[</span><span class="default">36</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_BAD_DOWNLOAD_RESUME'</span><span class="keyword">,<br />[</span><span class="default">37</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FILE_COULDNT_READ_FILE'</span><span class="keyword">,<br />[</span><span class="default">38</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_LDAP_CANNOT_BIND'</span><span class="keyword">,<br />[</span><span class="default">39</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_LDAP_SEARCH_FAILED'</span><span class="keyword">,<br />[</span><span class="default">41</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FUNCTION_NOT_FOUND'</span><span class="keyword">,<br />[</span><span class="default">42</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_ABORTED_BY_CALLBACK'</span><span class="keyword">,<br />[</span><span class="default">43</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_BAD_FUNCTION_ARGUMENT'</span><span class="keyword">,<br />[</span><span class="default">45</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_INTERFACE_FAILED'</span><span class="keyword">,<br />[</span><span class="default">47</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TOO_MANY_REDIRECTS'</span><span class="keyword">,<br />[</span><span class="default">48</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_UNKNOWN_TELNET_OPTION'</span><span class="keyword">,<br />[</span><span class="default">49</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TELNET_OPTION_SYNTAX'</span><span class="keyword">,<br />[</span><span class="default">51</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_PEER_FAILED_VERIFICATION'</span><span class="keyword">,<br />[</span><span class="default">52</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_GOT_NOTHING'</span><span class="keyword">,<br />[</span><span class="default">53</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_ENGINE_NOTFOUND'</span><span class="keyword">,<br />[</span><span class="default">54</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_ENGINE_SETFAILED'</span><span class="keyword">,<br />[</span><span class="default">55</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SEND_ERROR'</span><span class="keyword">,<br />[</span><span class="default">56</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_RECV_ERROR'</span><span class="keyword">,<br />[</span><span class="default">58</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CERTPROBLEM'</span><span class="keyword">,<br />[</span><span class="default">59</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CIPHER'</span><span class="keyword">,<br />[</span><span class="default">60</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CACERT'</span><span class="keyword">,<br />[</span><span class="default">61</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_BAD_CONTENT_ENCODING'</span><span class="keyword">,<br />[</span><span class="default">62</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_LDAP_INVALID_URL'</span><span class="keyword">,<br />[</span><span class="default">63</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FILESIZE_EXCEEDED'</span><span class="keyword">,<br />[</span><span class="default">64</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_USE_SSL_FAILED'</span><span class="keyword">,<br />[</span><span class="default">65</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SEND_FAIL_REWIND'</span><span class="keyword">,<br />[</span><span class="default">66</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_ENGINE_INITFAILED'</span><span class="keyword">,<br />[</span><span class="default">67</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_LOGIN_DENIED'</span><span class="keyword">,<br />[</span><span class="default">68</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TFTP_NOTFOUND'</span><span class="keyword">,<br />[</span><span class="default">69</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TFTP_PERM'</span><span class="keyword">,<br />[</span><span class="default">70</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_REMOTE_DISK_FULL'</span><span class="keyword">,<br />[</span><span class="default">71</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TFTP_ILLEGAL'</span><span class="keyword">,<br />[</span><span class="default">72</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TFTP_UNKNOWNID'</span><span class="keyword">,<br />[</span><span class="default">73</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_REMOTE_FILE_EXISTS'</span><span class="keyword">,<br />[</span><span class="default">74</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_TFTP_NOSUCHUSER'</span><span class="keyword">,<br />[</span><span class="default">75</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_CONV_FAILED'</span><span class="keyword">,<br />[</span><span class="default">76</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_CONV_REQD'</span><span class="keyword">,<br />[</span><span class="default">77</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CACERT_BADFILE'</span><span class="keyword">,<br />[</span><span class="default">78</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_REMOTE_FILE_NOT_FOUND'</span><span class="keyword">,<br />[</span><span class="default">79</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSH'</span><span class="keyword">,<br />[</span><span class="default">80</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_SHUTDOWN_FAILED'</span><span class="keyword">,<br />[</span><span class="default">81</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_AGAIN'</span><span class="keyword">,<br />[</span><span class="default">82</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_CRL_BADFILE'</span><span class="keyword">,<br />[</span><span class="default">83</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_SSL_ISSUER_ERROR'</span><span class="keyword">,<br />[</span><span class="default">84</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_PRET_FAILED'</span><span class="keyword">,<br />[</span><span class="default">84</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_PRET_FAILED'</span><span class="keyword">,<br />[</span><span class="default">85</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_RTSP_CSEQ_ERROR'</span><span class="keyword">,<br />[</span><span class="default">86</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_RTSP_SESSION_ERROR'</span><span class="keyword">,<br />[</span><span class="default">87</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_FTP_BAD_FILE_LIST'</span><span class="keyword">,<br />[</span><span class="default">88</span><span class="keyword">] =&gt; </span><span class="string">'CURLE_CHUNK_FAILED'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117721">  <div class="votes">
    <div id="Vu117721">
    <a href="/manual/vote-note.php?id=117721&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117721">
    <a href="/manual/vote-note.php?id=117721&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117721" title="85% like this...">
    14
    </div>
  </div>
  <a href="#117721" class="name">
  <strong class="user"><em>nimasdj  AT yahoo [DOT] com</em></strong></a><a class="genanchor" href="#117721"> &para;</a><div class="date" title="2015-07-28 03:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117721">
<div class="phpcode"><code><span class="html">To coder.ua[at]gmail.com:<br /><br />Please note some errors have more than one constants:<br /><br />[CURLE_FTP_PARTIAL_FILE]    18<br />[CURLE_PARTIAL_FILE]    18<br /><br />[CURLE_HTTP_NOT_FOUND]    22<br />[CURLE_HTTP_RETURNED_ERROR]    22<br /><br />[CURLE_OPERATION_TIMEDOUT]    28<br />[CURLE_OPERATION_TIMEOUTED]    28<br /><br />[CURLE_BAD_DOWNLOAD_RESUME]    36<br />[CURLE_FTP_BAD_DOWNLOAD_RESUME]    36</span></code></div>
  </div>
 </div>
  <div class="note" id="91518">  <div class="votes">
    <div id="Vu91518">
    <a href="/manual/vote-note.php?id=91518&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91518">
    <a href="/manual/vote-note.php?id=91518&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91518" title="76% like this...">
    11
    </div>
  </div>
  <a href="#91518" class="name">
  <strong class="user"><em>bozo_z_clown at yahoo dot com</em></strong></a><a class="genanchor" href="#91518"> &para;</a><div class="date" title="2009-06-14 03:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91518">
<div class="phpcode"><code><span class="html">Note that you can detect errors using curl_multi_info_read() in the curl_multi_exec() loop that don't show up later using curl_errno().  This seems particularly true of connection errors.</span></code></div>
  </div>
 </div>
  <div class="note" id="125231">  <div class="votes">
    <div id="Vu125231">
    <a href="/manual/vote-note.php?id=125231&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125231">
    <a href="/manual/vote-note.php?id=125231&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125231" title="66% like this...">
    2
    </div>
  </div>
  <a href="#125231" class="name">
  <strong class="user"><em>cubefox at web dot NOSPAMPLEASE dot de</em></strong></a><a class="genanchor" href="#125231"> &para;</a><div class="date" title="2020-07-30 12:08"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125231">
<div class="phpcode"><code><span class="html">The manual above only mentions how to get an error description from the cURL handle ($ch) using curl_error():<br /><span class="default">&lt;?php<br />$description </span><span class="keyword">= </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />But you can also get a description from the error number itself using curl_strerror():<br /><span class="default">&lt;?php<br />$description </span><span class="keyword">= </span><span class="default">curl_strerror</span><span class="keyword">(</span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />The latter can be useful if you only have access to the error number but not to the cURL handle.</span></code></div>
  </div>
 </div>
  <div class="note" id="111068">  <div class="votes">
    <div id="Vu111068">
    <a href="/manual/vote-note.php?id=111068&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111068">
    <a href="/manual/vote-note.php?id=111068&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111068" title="62% like this...">
    7
    </div>
  </div>
  <a href="#111068" class="name">
  <strong class="user"><em>coder.ua[at]gmail.com</em></strong></a><a class="genanchor" href="#111068"> &para;</a><div class="date" title="2013-01-10 11:29"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111068">
<div class="phpcode"><code><span class="html">All available curl error constants and values in PHP 5.4.7 on FreeBSD 8.2-RELEASE:<br /><br />CURLE_UNSUPPORTED_PROTOCOL =&gt; 1<br />CURLE_FAILED_INIT =&gt; 2<br />CURLE_URL_MALFORMAT =&gt; 3<br />CURLE_URL_MALFORMAT_USER =&gt; 4<br />CURLE_COULDNT_RESOLVE_PROXY =&gt; 5<br />CURLE_COULDNT_RESOLVE_HOST =&gt; 6<br />CURLE_COULDNT_CONNECT =&gt; 7<br />CURLE_FTP_WEIRD_SERVER_REPLY =&gt; 8<br />CURLE_FTP_ACCESS_DENIED =&gt; 9<br />CURLE_FTP_USER_PASSWORD_INCORRECT =&gt; 10<br />CURLE_FTP_WEIRD_PASS_REPLY =&gt; 11<br />CURLE_FTP_WEIRD_USER_REPLY =&gt; 12<br />CURLE_FTP_WEIRD_PASV_REPLY =&gt; 13<br />CURLE_FTP_WEIRD_227_FORMAT =&gt; 14<br />CURLE_FTP_CANT_GET_HOST =&gt; 15<br />CURLE_FTP_CANT_RECONNECT =&gt; 16<br />CURLE_FTP_COULDNT_SET_BINARY =&gt; 17<br />CURLE_PARTIAL_FILE =&gt; 18<br />CURLE_FTP_COULDNT_RETR_FILE =&gt; 19<br />CURLE_FTP_WRITE_ERROR =&gt; 20<br />CURLE_FTP_QUOTE_ERROR =&gt; 21<br />CURLE_HTTP_NOT_FOUND =&gt; 22<br />CURLE_WRITE_ERROR =&gt; 23<br />CURLE_MALFORMAT_USER =&gt; 24<br />CURLE_FTP_COULDNT_STOR_FILE =&gt; 25<br />CURLE_READ_ERROR =&gt; 26<br />CURLE_OUT_OF_MEMORY =&gt; 27<br />CURLE_OPERATION_TIMEOUTED =&gt; 28<br />CURLE_FTP_COULDNT_SET_ASCII =&gt; 29<br />CURLE_FTP_PORT_FAILED =&gt; 30<br />CURLE_FTP_COULDNT_USE_REST =&gt; 31<br />CURLE_FTP_COULDNT_GET_SIZE =&gt; 32<br />CURLE_HTTP_RANGE_ERROR =&gt; 33<br />CURLE_HTTP_POST_ERROR =&gt; 34<br />CURLE_SSL_CONNECT_ERROR =&gt; 35<br />CURLE_FTP_BAD_DOWNLOAD_RESUME =&gt; 36<br />CURLE_FILE_COULDNT_READ_FILE =&gt; 37<br />CURLE_LDAP_CANNOT_BIND =&gt; 38<br />CURLE_LDAP_SEARCH_FAILED =&gt; 39<br />CURLE_LIBRARY_NOT_FOUND =&gt; 40<br />CURLE_FUNCTION_NOT_FOUND =&gt; 41<br />CURLE_ABORTED_BY_CALLBACK =&gt; 42<br />CURLE_BAD_FUNCTION_ARGUMENT =&gt; 43<br />CURLE_BAD_CALLING_ORDER =&gt; 44<br />CURLE_HTTP_PORT_FAILED =&gt; 45<br />CURLE_BAD_PASSWORD_ENTERED =&gt; 46<br />CURLE_TOO_MANY_REDIRECTS =&gt; 47<br />CURLE_UNKNOWN_TELNET_OPTION =&gt; 48<br />CURLE_TELNET_OPTION_SYNTAX =&gt; 49<br />CURLE_OBSOLETE =&gt; 50<br />CURLE_SSL_PEER_CERTIFICATE =&gt; 51<br />CURLE_GOT_NOTHING =&gt; 52<br />CURLE_SSL_ENGINE_NOTFOUND =&gt; 53<br />CURLE_SSL_ENGINE_SETFAILED =&gt; 54<br />CURLE_SEND_ERROR =&gt; 55<br />CURLE_RECV_ERROR =&gt; 56<br />CURLE_SHARE_IN_USE =&gt; 57<br />CURLE_SSL_CERTPROBLEM =&gt; 58<br />CURLE_SSL_CIPHER =&gt; 59<br />CURLE_SSL_CACERT =&gt; 60<br />CURLE_BAD_CONTENT_ENCODING =&gt; 61<br />CURLE_LDAP_INVALID_URL =&gt; 62<br />CURLE_FILESIZE_EXCEEDED =&gt; 63<br />CURLE_FTP_SSL_FAILED] =&gt; 64</span></code></div>
  </div>
 </div>
  <div class="note" id="106823">  <div class="votes">
    <div id="Vu106823">
    <a href="/manual/vote-note.php?id=106823&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106823">
    <a href="/manual/vote-note.php?id=106823&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106823" title="58% like this...">
    3
    </div>
  </div>
  <a href="#106823" class="name">
  <strong class="user"><em>david at liip dot ch</em></strong></a><a class="genanchor" href="#106823"> &para;</a><div class="date" title="2011-12-09 02:40"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106823">
<div class="phpcode"><code><span class="html">you should look on <a href="http://php.net/manual/en/curl.constants.php" rel="nofollow" target="_blank">http://php.net/manual/en/curl.constants.php</a> for the error codes, not on the linked official curl doc. some of the error codes are different, at least the one mentioned on the other page:<br /><br />in PHP the curl error number 28 is called<br /><br />CURLE_OPERATION_TIMEOUTED<br /><br />while in the official site is:<br /><br />CURLE_OPERATION_TIMEDOUT</span></code></div>
  </div>
 </div>
  <div class="note" id="126778">  <div class="votes">
    <div id="Vu126778">
    <a href="/manual/vote-note.php?id=126778&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126778">
    <a href="/manual/vote-note.php?id=126778&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126778" title="no votes...">
    0
    </div>
  </div>
  <a href="#126778" class="name">
  <strong class="user"><em>nono303</em></strong></a><a class="genanchor" href="#126778"> &para;</a><div class="date" title="2022-01-19 12:24"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126778">
<div class="phpcode"><code><span class="html">CURLcode v7.81 reversed array for PHP  (from \curl\include\curl\curl.h l.495)<br /><a href="https://gist.github.com/nono303/de1256f55e26fdbcc3e0d72e397ac4a1" rel="nofollow" target="_blank">https://gist.github.com/nono303/de1256f55e26fdbcc3e0d72e397ac4a1</a></span></code></div>
  </div>
 </div>
  <div class="note" id="123787">  <div class="votes">
    <div id="Vu123787">
    <a href="/manual/vote-note.php?id=123787&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123787">
    <a href="/manual/vote-note.php?id=123787&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123787" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123787" class="name">
  <strong class="user"><em>gmail@asmqb7</em></strong></a><a class="genanchor" href="#123787"> &para;</a><div class="date" title="2019-04-20 04:43"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123787">
<div class="phpcode"><code><span class="html">/!\ ATTENTION if you are using curl multi handles<br /><br />This function returns 0 in error conditions when run on curl handles accessed via curl_multi_info_read().<br /><br />You must look at the data returned by curl_multi_info_read() for the true errno. The data is over there instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="120172">  <div class="votes">
    <div id="Vu120172">
    <a href="/manual/vote-note.php?id=120172&amp;page=function.curl-errno&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120172">
    <a href="/manual/vote-note.php?id=120172&amp;page=function.curl-errno&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120172" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#120172" class="name">
  <strong class="user"><em>Eugene Kunkel</em></strong></a><a class="genanchor" href="#120172"> &para;</a><div class="date" title="2016-11-15 11:25"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120172">
<div class="phpcode"><code><span class="html">Gets a current list of all CURLE_* error constants, their applicable error messages, and their applicable error codes. Useful for making wrapper classes or for mapping cURL errors to specific Exception objects.<br /><br /><span class="default">&lt;?php<br /><br />$list   </span><span class="keyword">= </span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$list   </span><span class="keyword">= </span><span class="default">preg_grep</span><span class="keyword">(</span><span class="string">'/^CURLE_/'</span><span class="keyword">, </span><span class="default">array_flip</span><span class="keyword">(</span><span class="default">$list</span><span class="keyword">[</span><span class="string">'curl'</span><span class="keyword">]));<br /></span><span class="default">$result </span><span class="keyword">= array();<br /><br />foreach (</span><span class="default">$list </span><span class="keyword">as </span><span class="default">$const</span><span class="keyword">) {<br />    </span><span class="default">$result</span><span class="keyword">[</span><span class="default">$const</span><span class="keyword">] = array<br />    (<br />        </span><span class="string">'code'    </span><span class="keyword">=&gt; </span><span class="default">constant</span><span class="keyword">(</span><span class="default">$const</span><span class="keyword">),<br />        </span><span class="string">'message' </span><span class="keyword">=&gt; </span><span class="default">curl_strerror</span><span class="keyword">(</span><span class="default">constant</span><span class="keyword">(</span><span class="default">$const</span><span class="keyword">))<br />    );<br />}<br /><br />echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">;<br />echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />echo </span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-errno&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-errno.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
