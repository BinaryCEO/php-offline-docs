<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: curl_setopt_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.curl-setopt-array.php">
 <link rel="shorturl" href="https://www.php.net/curl-setopt-array">
 <link rel="alternate" href="https://www.php.net/curl-setopt-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.curl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.curl-setopt.php">
 <link rel="next" href="https://www.php.net/manual/en/function.curl-share-close.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.curl-setopt-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.curl-setopt-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.curl-setopt-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.curl-setopt-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.curl-setopt-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.curl-setopt-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.curl-setopt-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.curl-setopt-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.curl-setopt-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.curl-setopt-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.curl-setopt-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set multiple options for a cURL transfer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: curl_setopt_array - Manual" />
<meta name="twitter:description" content="Set multiple options for a cURL transfer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: curl_setopt_array - Manual" />
<meta itemprop="description" content="Set multiple options for a cURL transfer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set multiple options for a cURL transfer" />

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
        <a href="function.curl-share-close.php">
          curl_share_close &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.curl-setopt.php">
          &laquo; curl_setopt        </a>
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
            <option value='en/function.curl-setopt-array.php' selected="selected">English</option>
            <option value='de/function.curl-setopt-array.php'>German</option>
            <option value='es/function.curl-setopt-array.php'>Spanish</option>
            <option value='fr/function.curl-setopt-array.php'>French</option>
            <option value='it/function.curl-setopt-array.php'>Italian</option>
            <option value='ja/function.curl-setopt-array.php'>Japanese</option>
            <option value='pt_BR/function.curl-setopt-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.curl-setopt-array.php'>Russian</option>
            <option value='tr/function.curl-setopt-array.php'>Turkish</option>
            <option value='uk/function.curl-setopt-array.php'>Ukrainian</option>
            <option value='zh/function.curl-setopt-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.curl-setopt-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">curl_setopt_array</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_setopt_array</span> &mdash; <span class="dc-title">Set multiple options for a cURL transfer</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.curl-setopt-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>curl_setopt_array</strong></span>(<span class="methodparam"><span class="type"><a href="class.curlhandle.php" class="type CurlHandle">CurlHandle</a></span> <code class="parameter">$handle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sets multiple options for a cURL session. This function is
   useful for setting a large number of cURL options without repetitively
   calling <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.curl-setopt-array-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt><code class="parameter">handle</code>
</dt><dd><p class="para">A cURL handle returned by
<span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.</p></dd>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An <span class="type"><a href="language.types.array.php" class="type array">array</a></span> specifying which options to set and their values.
       The keys should be valid <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span> constants or
       their integer equivalents.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.curl-setopt-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if all options were successfully set. If an option could
   not be successfully set, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> is immediately returned, ignoring any
   future options in the <code class="parameter">options</code> array.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.curl-setopt-array-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.curl-setopt-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4498">
    <p><strong>Example #1 
     Initializing a new cURL session and fetching a web page
    </strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// create a new cURL resource<br /></span><span style="color: #0000BB">$ch </span><span style="color: #007700">= </span><span style="color: #0000BB">curl_init</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// set URL and other appropriate options<br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array(</span><span style="color: #0000BB">CURLOPT_URL </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">,<br />                 </span><span style="color: #0000BB">CURLOPT_HEADER </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">false<br />                </span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">curl_setopt_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">, </span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// grab URL and pass it to the browser<br /></span><span style="color: #0000BB">curl_exec</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// close cURL resource, and free up system resources<br /></span><span style="color: #0000BB">curl_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$ch</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.curl-setopt-array-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    As with <span class="function"><a href="function.curl-setopt.php" class="function">curl_setopt()</a></span>, passing an array to 
    <strong><code><a href="curl.constants.php#constant.curlopt-post">CURLOPT_POST</a></code></strong> will encode the data as 
    <em>multipart/form-data</em>, while passing a 
    URL-encoded string will encode the data as 
    <em>application/x-www-form-urlencoded</em>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.curl-setopt-array-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.curl-setopt.php" class="function" rel="rdfs-seeAlso">curl_setopt()</a> - Set an option for a cURL transfer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/curl/functions/curl-setopt-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.curl-setopt-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.curl-setopt-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-setopt-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118000">  <div class="votes">
    <div id="Vu118000">
    <a href="/manual/vote-note.php?id=118000&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118000">
    <a href="/manual/vote-note.php?id=118000&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118000" title="66% like this...">
    19
    </div>
  </div>
  <a href="#118000" class="name">
  <strong class="user"><em>Lionel</em></strong></a><a class="genanchor" href="#118000"> &para;</a><div class="date" title="2015-09-17 06:58"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118000">
<div class="phpcode"><code><span class="html">If you are writing a mini API for your library, and if you are doing merging of options, remember to use the union operator (+) !<br /><br />So something like this will definitely fail. This is because array_merge effectively resets all the keys in the array into running numbers:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">post</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array) {<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">array_merge</span><span class="keyword">(array(<br />        </span><span class="default">CURLOPT_HEADER </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        .....<br />     )));<br /></span><span class="default">?&gt;<br /></span><br />Rather, this is the correct way of doing it:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">post</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= array) {<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, array(<br />        </span><span class="default">CURLOPT_HEADER </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,<br />        .....<br />     ) + (array) </span><span class="default">$options</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89850">  <div class="votes">
    <div id="Vu89850">
    <a href="/manual/vote-note.php?id=89850&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89850">
    <a href="/manual/vote-note.php?id=89850&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89850" title="62% like this...">
    19
    </div>
  </div>
  <a href="#89850" class="name">
  <strong class="user"><em>maran dot emil at gmail dot com</em></strong></a><a class="genanchor" href="#89850"> &para;</a><div class="date" title="2009-03-25 11:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89850">
<div class="phpcode"><code><span class="html">In case that you need to read SSL page content from https with curl, this function can help you:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">get_web_page</span><span class="keyword">( </span><span class="default">$url</span><span class="keyword">,</span><span class="default">$curl_data </span><span class="keyword">)
<br />{
<br />    </span><span class="default">$options </span><span class="keyword">= array(
<br />        </span><span class="default">CURLOPT_RETURNTRANSFER </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,         </span><span class="comment">// return web page
<br />        </span><span class="default">CURLOPT_HEADER         </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,        </span><span class="comment">// don't return headers
<br />        </span><span class="default">CURLOPT_FOLLOWLOCATION </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,         </span><span class="comment">// follow redirects
<br />        </span><span class="default">CURLOPT_ENCODING       </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,           </span><span class="comment">// handle all encodings
<br />        </span><span class="default">CURLOPT_USERAGENT      </span><span class="keyword">=&gt; </span><span class="string">"spider"</span><span class="keyword">,     </span><span class="comment">// who am i
<br />        </span><span class="default">CURLOPT_AUTOREFERER    </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,         </span><span class="comment">// set referer on redirect
<br />        </span><span class="default">CURLOPT_CONNECTTIMEOUT </span><span class="keyword">=&gt; </span><span class="default">120</span><span class="keyword">,          </span><span class="comment">// timeout on connect
<br />        </span><span class="default">CURLOPT_TIMEOUT        </span><span class="keyword">=&gt; </span><span class="default">120</span><span class="keyword">,          </span><span class="comment">// timeout on response
<br />        </span><span class="default">CURLOPT_MAXREDIRS      </span><span class="keyword">=&gt; </span><span class="default">10</span><span class="keyword">,           </span><span class="comment">// stop after 10 redirects
<br />        </span><span class="default">CURLOPT_POST            </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">,            </span><span class="comment">// i am sending post data
<br />           </span><span class="default">CURLOPT_POSTFIELDS     </span><span class="keyword">=&gt; </span><span class="default">$curl_data</span><span class="keyword">,    </span><span class="comment">// this are my post vars
<br />        </span><span class="default">CURLOPT_SSL_VERIFYHOST </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,            </span><span class="comment">// don't verify ssl
<br />        </span><span class="default">CURLOPT_SSL_VERIFYPEER </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,        </span><span class="comment">//
<br />        </span><span class="default">CURLOPT_VERBOSE        </span><span class="keyword">=&gt; </span><span class="default">1                </span><span class="comment">//
<br />    </span><span class="keyword">);
<br />
<br />    </span><span class="default">$ch      </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">);
<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">,</span><span class="default">$options</span><span class="keyword">);
<br />    </span><span class="default">$content </span><span class="keyword">= </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    </span><span class="default">$err     </span><span class="keyword">= </span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    </span><span class="default">$errmsg  </span><span class="keyword">= </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">) ;
<br />    </span><span class="default">$header  </span><span class="keyword">= </span><span class="default">curl_getinfo</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />
<br />  </span><span class="comment">//  $header['errno']   = $err;
<br />  //  $header['errmsg']  = $errmsg;
<br />  //  $header['content'] = $content;
<br />    </span><span class="keyword">return </span><span class="default">$header</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">$curl_data </span><span class="keyword">= </span><span class="string">"var1=60&amp;var2=test"</span><span class="keyword">;
<br /></span><span class="default">$url </span><span class="keyword">= </span><span class="string">"<a href="https://www.example.com" rel="nofollow" target="_blank">https://www.example.com</a>"</span><span class="keyword">;
<br /></span><span class="default">$response </span><span class="keyword">= </span><span class="default">get_web_page</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">,</span><span class="default">$curl_data</span><span class="keyword">);
<br />
<br />print </span><span class="string">'&lt;pre&gt;'</span><span class="keyword">;
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121308">  <div class="votes">
    <div id="Vu121308">
    <a href="/manual/vote-note.php?id=121308&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121308">
    <a href="/manual/vote-note.php?id=121308&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121308" title="57% like this...">
    3
    </div>
  </div>
  <a href="#121308" class="name">
  <strong class="user"><em>Al</em></strong></a><a class="genanchor" href="#121308"> &para;</a><div class="date" title="2017-07-03 03:39"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121308">
<div class="phpcode"><code><span class="html">You might be tempted to use array_merge with arrays where CURLOPT constants are the keys, but beware.<br /><br /><span class="default">&lt;?php<br />array_merge</span><span class="keyword">([], [</span><span class="default">CURLOPT_FOO </span><span class="keyword">=&gt; </span><span class="string">"foo"</span><span class="keyword">], [</span><span class="default">CURLOPT_BAR </span><span class="keyword">=&gt; </span><span class="string">"bar"</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />Since these constants are numeric, array_merge will happily reindex:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">[</span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">"foo"</span><span class="keyword">, </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"bar"</span><span class="keyword">];<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="68122">  <div class="votes">
    <div id="Vu68122">
    <a href="/manual/vote-note.php?id=68122&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68122">
    <a href="/manual/vote-note.php?id=68122&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68122" title="57% like this...">
    3
    </div>
  </div>
  <a href="#68122" class="name">
  <strong class="user"><em>bendavis78 at gmail dot com</em></strong></a><a class="genanchor" href="#68122"> &para;</a><div class="date" title="2006-07-13 03:58"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68122">
<div class="phpcode"><code><span class="html">You can use CURLOPT_HEADERFUNCTION  with a callback inside an object.  This makes is it easy to capture the headers for later use.  For example:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Test
<br /></span><span class="keyword">{
<br />    public </span><span class="default">$headers</span><span class="keyword">;
<br />
<br />    </span><span class="comment">//...
<br />
<br />    </span><span class="keyword">public function </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">headers </span><span class="keyword">= array();
<br />        </span><span class="default">$opts</span><span class="keyword">[</span><span class="default">CURLOPT_HEADERFUNCTION</span><span class="keyword">] = array(</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'_setHeader'</span><span class="keyword">);
<br />        </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();
<br />        </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$opts</span><span class="keyword">);
<br />        return </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />    }
<br />
<br />    private function </span><span class="default">_setHeader</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">headers</span><span class="keyword">[] = </span><span class="default">$header</span><span class="keyword">;
<br />        return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">);
<br />    }
<br />
<br />    
<br />}
<br />
<br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">Test</span><span class="keyword">();
<br /></span><span class="default">$opts </span><span class="keyword">= array(
<br />   </span><span class="comment">//... your curl opts here
<br /></span><span class="keyword">);
<br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$opts</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$test</span><span class="keyword">-&gt;</span><span class="default">headers</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />...something like that
<br />
<br />(This works in php v. 5.1.4)</span></code></div>
  </div>
 </div>
  <div class="note" id="127292">  <div class="votes">
    <div id="Vu127292">
    <a href="/manual/vote-note.php?id=127292&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127292">
    <a href="/manual/vote-note.php?id=127292&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127292" title="100% like this...">
    1
    </div>
  </div>
  <a href="#127292" class="name">
  <strong class="user"><em>mad_elf at maranelda dot org</em></strong></a><a class="genanchor" href="#127292"> &para;</a><div class="date" title="2022-07-17 11:06"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127292">
<div class="phpcode"><code><span class="html">Important note: the option CURLINFO_HEADER_OUT is *ignored* by curl_setopt_array(). You *must* use curl_setopt() to set this option.<br /><br />(True in PHP v7.3.27 at least)</span></code></div>
  </div>
 </div>
  <div class="note" id="123612">  <div class="votes">
    <div id="Vu123612">
    <a href="/manual/vote-note.php?id=123612&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123612">
    <a href="/manual/vote-note.php?id=123612&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123612" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123612" class="name">
  <strong class="user"><em>lawrence at dub3solutions dot com</em></strong></a><a class="genanchor" href="#123612"> &para;</a><div class="date" title="2019-02-13 11:23"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123612">
<div class="phpcode"><code><span class="html">This function does not mix with `curl_file_create` (`CURLFile` object) and `CURLOPT_POSTFIELDS`. Took me forever to figure out, but essentially I was getting an "Invalid filename" PHP warning and the files weren't being sent. I was able to correct the issue in a matter like so:<br /><br />curl_setopt_array($curl, $curlOpts);<br />curl_setopt($curl, CURLOPT_POSTFIELDS, $postFields);<br /><br />I removed the `$postFields` value from `$curlOpts` and set it separately using `curl_setopt`.</span></code></div>
  </div>
 </div>
  <div class="note" id="120169">  <div class="votes">
    <div id="Vu120169">
    <a href="/manual/vote-note.php?id=120169&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120169">
    <a href="/manual/vote-note.php?id=120169&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120169" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120169" class="name">
  <strong class="user"><em>Alexander</em></strong></a><a class="genanchor" href="#120169"> &para;</a><div class="date" title="2016-11-15 12:14"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120169">
<div class="phpcode"><code><span class="html">Once upon a time I've got an error like "Problem with the SSL CA cert (path? access rights?)". Since what I was doing was pretty much an administrative task with no actual security issues involved, I decided to disallow certificate validation and this is where the most interesting stuff began.<br /><br />First I did it like this and it worked:<br /><br />        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);<br />        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);<br /><br />Next I thought, "But hey, I don't want any hardcoded stuff here. Let's use it in a configurable way!". And so I did something like this:<br /><br />// in configuration<br />$CURL_OPTIONS = array(CURLOPT_SSL_VERIFYPEER =&gt; 0, CURLOPT_SSL_VERIFYHOST =&gt; 0);<br /><br />...........<br /><br />// in place of two direct calls from earlier<br />            curl_setopt_array($ch, $CURL_OPTIONS);<br /><br />And I was so happy, there was no error anymore... and do you think I was happy for a long time? If so, then you're wrong. It stopped giving an error, while it didn't start to work!<br /><br />I checked the actual data but they were allright. Then I thought: "Is it the curl_setopt_array() problem? Let's make it a cycle." The way it is mentioned in this help, actually.<br /><br />            foreach ($CURL_OPTIONS as $name =&gt; $value)<br />            {<br />                curl_setopt($ch, $name, $value);<br />            }<br /><br />And... it did not work the same way as with the curl_setopt_array() call. And the data were still allright...<br /><br />So, if by chance you can't set CURL options with the curl_setopt_array() call, then now you know what to do and you know it is definitely not you who is to blame.<br /><br />P.S.<br />By the way, the configuration used was:<br />Linux i-ween.com 3.2.0-4-amd64 #1 SMP Debian 3.2.73-2+deb7u3 x86_64<br />PHP Version 5.5.17</span></code></div>
  </div>
 </div>
  <div class="note" id="98208">  <div class="votes">
    <div id="Vu98208">
    <a href="/manual/vote-note.php?id=98208&amp;page=function.curl-setopt-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98208">
    <a href="/manual/vote-note.php?id=98208&amp;page=function.curl-setopt-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98208" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#98208" class="name">
  <strong class="user"><em>anthon at piwik dot org</em></strong></a><a class="genanchor" href="#98208"> &para;</a><div class="date" title="2010-06-01 06:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98208">
<div class="phpcode"><code><span class="html">Starting in PHP 5.2.0, CURLOPT_FOLLOWLOCATION can't be set via curl_setopt_array() (or curl_setopt()) when either safe_mode is enabled or open_basedir is set.  In these cases, the order of CURLOPT_* settings in the array can be important.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.curl-setopt-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.curl-setopt-array.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
