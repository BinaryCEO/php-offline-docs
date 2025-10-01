<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: apache_request_headers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.apache-request-headers.php">
 <link rel="shorturl" href="https://www.php.net/apache-request-headers">
 <link rel="alternate" href="https://www.php.net/apache-request-headers" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.apache-note.php">
 <link rel="next" href="https://www.php.net/manual/en/function.apache-response-headers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.apache-request-headers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.apache-request-headers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.apache-request-headers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.apache-request-headers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.apache-request-headers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.apache-request-headers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.apache-request-headers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.apache-request-headers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.apache-request-headers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.apache-request-headers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.apache-request-headers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch all HTTP request headers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: apache_request_headers - Manual" />
<meta name="twitter:description" content="Fetch all HTTP request headers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: apache_request_headers - Manual" />
<meta itemprop="description" content="Fetch all HTTP request headers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch all HTTP request headers" />

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
        <a href="function.apache-response-headers.php">
          apache_response_headers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.apache-note.php">
          &laquo; apache_note        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.server.php'>Server Specific Extensions</a></li>      <li><a href='book.apache.php'>Apache</a></li>      <li><a href='ref.apache.php'>Apache Functions</a></li>      </ul>
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
            <option value='en/function.apache-request-headers.php' selected="selected">English</option>
            <option value='de/function.apache-request-headers.php'>German</option>
            <option value='es/function.apache-request-headers.php'>Spanish</option>
            <option value='fr/function.apache-request-headers.php'>French</option>
            <option value='it/function.apache-request-headers.php'>Italian</option>
            <option value='ja/function.apache-request-headers.php'>Japanese</option>
            <option value='pt_BR/function.apache-request-headers.php'>Brazilian Portuguese</option>
            <option value='ru/function.apache-request-headers.php'>Russian</option>
            <option value='tr/function.apache-request-headers.php'>Turkish</option>
            <option value='uk/function.apache-request-headers.php'>Ukrainian</option>
            <option value='zh/function.apache-request-headers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.apache-request-headers" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">apache_request_headers</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">apache_request_headers</span> &mdash; <span class="dc-title">Fetch all HTTP request headers</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.apache-request-headers-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>apache_request_headers</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Fetches all HTTP request headers from the current request. Works in the
   Apache, FastCGI, CLI, and FPM webservers.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.apache-request-headers-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.apache-request-headers-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An associative array of all the HTTP headers in the current request.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.apache-request-headers-changelog">
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
       <td>7.3.0</td>
       <td>
        This function became available in the FPM SAPI.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.apache-request-headers-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4993">
    <p><strong>Example #1 <span class="function"><strong>apache_request_headers()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$headers </span><span style="color: #007700">= </span><span style="color: #0000BB">apache_request_headers</span><span style="color: #007700">();<br /><br />foreach (</span><span style="color: #0000BB">$headers </span><span style="color: #007700">as </span><span style="color: #0000BB">$header </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$header</span><span style="color: #DD0000">: </span><span style="color: #0000BB">$value</span><span style="color: #DD0000"> &lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Accept: */*
Accept-Language: en-us
Accept-Encoding: gzip, deflate
User-Agent: Mozilla/4.0
Host: www.example.com
Connection: Keep-Alive</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.apache-request-headers-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You can also get at the value of the common <abbr title="Common Gateway Interface">CGI</abbr> variables by
    reading them from the environment, which works whether or not
    you are using PHP as an <span class="productname">Apache</span> module. Use
    <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> to see a list of all of the available
    <a href="language.variables.predefined.php" class="link">environment variables</a>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.apache-request-headers-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.apache-response-headers.php" class="function" rel="rdfs-seeAlso">apache_response_headers()</a> - Fetch all HTTP response headers</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/apache/functions/apache-request-headers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.apache-request-headers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.apache-request-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-request-headers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="124236">  <div class="votes">
    <div id="Vu124236">
    <a href="/manual/vote-note.php?id=124236&amp;page=function.apache-request-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124236">
    <a href="/manual/vote-note.php?id=124236&amp;page=function.apache-request-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124236" title="68% like this...">
    14
    </div>
  </div>
  <a href="#124236" class="name">
  <strong class="user"><em>Tel</em></strong></a><a class="genanchor" href="#124236"> &para;</a><div class="date" title="2019-09-26 01:54"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124236">
<div class="phpcode"><code><span class="html">Although we expect to see headers in mixed case, the standard RFC2616 demands that "field names are case-insensitive". PHP delivers the headers exactly untouched in whatever way the client sent them. Potentially you should expect to get any type of uppercase or lowercase or mixed.<br /><br />Thus, if you want to be standards compliant, you must loop through every key and check it in a case-insensitive manner, instead of doing the obvious thing and using the name of the header as an array index.</span></code></div>
  </div>
 </div>
  <div class="note" id="74592">  <div class="votes">
    <div id="Vu74592">
    <a href="/manual/vote-note.php?id=74592&amp;page=function.apache-request-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74592">
    <a href="/manual/vote-note.php?id=74592&amp;page=function.apache-request-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74592" title="62% like this...">
    10
    </div>
  </div>
  <a href="#74592" class="name">
  <strong class="user"><em>callum85 at notspam dot msn dot com</em></strong></a><a class="genanchor" href="#74592"> &para;</a><div class="date" title="2007-04-18 11:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74592">
<div class="phpcode"><code><span class="html">There is a simple way to get request headers from Apache even on PHP running as a CGI. As far as I know, it's the only way to get the headers "If-Modified-Since" and "If-None-Match" when apache_request_headers() isn't available. You need mod_rewrite, which most web hosts seem to have enabled. Put this in an .htacess file in your web root:<br /><br />RewriteEngine on<br />RewriteRule .* - [E=HTTP_IF_MODIFIED_SINCE:%{HTTP:If-Modified-Since}]<br />RewriteRule .* - [E=HTTP_IF_NONE_MATCH:%{HTTP:If-None-Match}]<br /><br />The headers are then available in PHP as<br /><span class="default">&lt;?php<br />  $_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_IF_MODIFIED_SINCE'</span><span class="keyword">];<br />  </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_IF_NONE_MATCH'</span><span class="keyword">];<br /></span><span class="default">?&gt;<br /></span><br />I've tested this on PHP/5.1.6, on both Apache/2.2.3/Win32 and Apache/2.0.54/Unix, and it works perfectly.<br /><br />Note: if you use RewriteRules already for clean URLs, you need to put the above rules AFTER your existing ones.</span></code></div>
  </div>
 </div>
  <div class="note" id="70810">  <div class="votes">
    <div id="Vu70810">
    <a href="/manual/vote-note.php?id=70810&amp;page=function.apache-request-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70810">
    <a href="/manual/vote-note.php?id=70810&amp;page=function.apache-request-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70810" title="57% like this...">
    9
    </div>
  </div>
  <a href="#70810" class="name">
  <strong class="user"><em>limalopex.eisfux.de</em></strong></a><a class="genanchor" href="#70810"> &para;</a><div class="date" title="2006-10-29 09:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70810">
<div class="phpcode"><code><span class="html">I didn't found a replacement for apache_request_headers() in PHP::Compat (<a href="http://pear.php.net/package/PHP_Compat" rel="nofollow" target="_blank">http://pear.php.net/package/PHP_Compat</a>) so I wrote my own:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'apache_request_headers'</span><span class="keyword">) ) {<br /></span><span class="comment">///<br /></span><span class="keyword">function </span><span class="default">apache_request_headers</span><span class="keyword">() {<br />  </span><span class="default">$arh </span><span class="keyword">= array();<br />  </span><span class="default">$rx_http </span><span class="keyword">= </span><span class="string">'/\AHTTP_/'</span><span class="keyword">;<br />  foreach(</span><span class="default">$_SERVER </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />    if( </span><span class="default">preg_match</span><span class="keyword">(</span><span class="default">$rx_http</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) ) {<br />      </span><span class="default">$arh_key </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$rx_http</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">);<br />      </span><span class="default">$rx_matches </span><span class="keyword">= array();<br />      </span><span class="comment">// do some nasty string manipulations to restore the original letter case<br />      // this should work in most cases<br />      </span><span class="default">$rx_matches </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'_'</span><span class="keyword">, </span><span class="default">$arh_key</span><span class="keyword">);<br />      if( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$rx_matches</span><span class="keyword">) &gt; </span><span class="default">0 </span><span class="keyword">and </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$arh_key</span><span class="keyword">) &gt; </span><span class="default">2 </span><span class="keyword">) {<br />        foreach(</span><span class="default">$rx_matches </span><span class="keyword">as </span><span class="default">$ak_key </span><span class="keyword">=&gt; </span><span class="default">$ak_val</span><span class="keyword">) </span><span class="default">$rx_matches</span><span class="keyword">[</span><span class="default">$ak_key</span><span class="keyword">] = </span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">$ak_val</span><span class="keyword">);<br />        </span><span class="default">$arh_key </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$rx_matches</span><span class="keyword">);<br />      }<br />      </span><span class="default">$arh</span><span class="keyword">[</span><span class="default">$arh_key</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />    }<br />  }<br />  return( </span><span class="default">$arh </span><span class="keyword">);<br />}<br /></span><span class="comment">///<br /></span><span class="keyword">}<br /></span><span class="comment">///<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116645">  <div class="votes">
    <div id="Vu116645">
    <a href="/manual/vote-note.php?id=116645&amp;page=function.apache-request-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116645">
    <a href="/manual/vote-note.php?id=116645&amp;page=function.apache-request-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116645" title="57% like this...">
    4
    </div>
  </div>
  <a href="#116645" class="name">
  <strong class="user"><em>egocentryk</em></strong></a><a class="genanchor" href="#116645"> &para;</a><div class="date" title="2015-02-03 11:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116645">
<div class="phpcode"><code><span class="html">Superglobal $_SERVER,  used in all patches for missing getallheaders() contains only truly basic headers.  To pass ANY header into PHP in any httpd environment, including CGI/FCGI just add rule (any number of rules) into .htaccess:<br /><br />RewriteRule .* - [E=HTTP_MY_HEADER:%{HTTP:My-Header}]<br /><br />and the header with it's value will appear for PHP as <br /><span class="default">&lt;?php </span><span class="keyword">print </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_MY_HEADER'</span><span class="keyword">]; </span><span class="default">?&gt;<br /></span><br />And... just couldn't hold off. Rewrtiting $_SERVER keys for replacing missing function really does not require RegExps, preg_matches or evals... Try this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getallheaders</span><span class="keyword">() { <br />  foreach(</span><span class="default">$_SERVER </span><span class="keyword">as </span><span class="default">$K</span><span class="keyword">=&gt;</span><span class="default">$V</span><span class="keyword">){</span><span class="default">$a</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'_' </span><span class="keyword">,</span><span class="default">$K</span><span class="keyword">); <br />      if(</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">)==</span><span class="string">'HTTP'</span><span class="keyword">){ <br />           </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,function(&amp;</span><span class="default">$v</span><span class="keyword">){</span><span class="default">$v</span><span class="keyword">=</span><span class="default">ucfirst</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">));});<br />       </span><span class="default">$retval</span><span class="keyword">[</span><span class="default">join</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">,</span><span class="default">$a</span><span class="keyword">)]=</span><span class="default">$V</span><span class="keyword">;} <br />    } return </span><span class="default">$retval</span><span class="keyword">; }<br /> </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128020">  <div class="votes">
    <div id="Vu128020">
    <a href="/manual/vote-note.php?id=128020&amp;page=function.apache-request-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128020">
    <a href="/manual/vote-note.php?id=128020&amp;page=function.apache-request-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128020" title="57% like this...">
    1
    </div>
  </div>
  <a href="#128020" class="name">
  <strong class="user"><em>gilles at sdv dot fr</em></strong></a><a class="genanchor" href="#128020"> &para;</a><div class="date" title="2022-12-15 11:12"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128020">
<div class="phpcode"><code><span class="html">The function apache_request_headers, doesn't exist in FCGI PHP-FPM<br /><br />Use this patch : <a href="https://gist.github.com/rmpel/11583cfddfcc9705578428e3a2ee3dc1" rel="nofollow" target="_blank">https://gist.github.com/rmpel/11583cfddfcc9705578428e3a2ee3dc1</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Drop-in replacement for apache_request_headers() when it's not available<br /><br /></span><span class="keyword">if ( ! </span><span class="default">function_exists</span><span class="keyword">( </span><span class="string">'apache_request_headers' </span><span class="keyword">) ) {<br />    function </span><span class="default">apache_request_headers</span><span class="keyword">() {<br />        static </span><span class="default">$arrHttpHeaders</span><span class="keyword">;<br />        if ( ! </span><span class="default">$arrHttpHeaders </span><span class="keyword">) {<br /><br />            </span><span class="comment">// Based on: <a href="http://www.iana.org/assignments/message-headers/message-headers.xml#perm-headers" rel="nofollow" target="_blank">http://www.iana.org/assignments/message-headers/message-headers.xml#perm-headers</a><br />            </span><span class="default">$arrCasedHeaders </span><span class="keyword">= array(<br />                </span><span class="comment">// HTTP<br />                </span><span class="string">'Dasl'             </span><span class="keyword">=&gt; </span><span class="string">'DASL'</span><span class="keyword">,<br />                </span><span class="string">'Dav'              </span><span class="keyword">=&gt; </span><span class="string">'DAV'</span><span class="keyword">,<br />                </span><span class="string">'Etag'             </span><span class="keyword">=&gt; </span><span class="string">'ETag'</span><span class="keyword">,<br />                </span><span class="string">'Mime-Version'     </span><span class="keyword">=&gt; </span><span class="string">'MIME-Version'</span><span class="keyword">,<br />                </span><span class="string">'Slug'             </span><span class="keyword">=&gt; </span><span class="string">'SLUG'</span><span class="keyword">,<br />                </span><span class="string">'Te'               </span><span class="keyword">=&gt; </span><span class="string">'TE'</span><span class="keyword">,<br />                </span><span class="string">'Www-Authenticate' </span><span class="keyword">=&gt; </span><span class="string">'WWW-Authenticate'</span><span class="keyword">,<br />                </span><span class="comment">// MIME<br />                </span><span class="string">'Content-Md5'      </span><span class="keyword">=&gt; </span><span class="string">'Content-MD5'</span><span class="keyword">,<br />                </span><span class="string">'Content-Id'       </span><span class="keyword">=&gt; </span><span class="string">'Content-ID'</span><span class="keyword">,<br />                </span><span class="string">'Content-Features' </span><span class="keyword">=&gt; </span><span class="string">'Content-features'</span><span class="keyword">,<br />            );<br />            </span><span class="default">$arrHttpHeaders  </span><span class="keyword">= array();<br /><br />            foreach ( </span><span class="default">$_SERVER </span><span class="keyword">as </span><span class="default">$strKey </span><span class="keyword">=&gt; </span><span class="default">$mixValue </span><span class="keyword">) {<br />                if ( </span><span class="string">'HTTP_' </span><span class="keyword">!== </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$strKey</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">) ) {<br />                    continue;<br />                }<br /><br />                </span><span class="default">$strHeaderKey </span><span class="keyword">= </span><span class="default">strtolower</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$strKey</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">) );<br /><br />                if ( </span><span class="default">0 </span><span class="keyword">&lt; </span><span class="default">substr_count</span><span class="keyword">( </span><span class="default">$strHeaderKey</span><span class="keyword">, </span><span class="string">'_' </span><span class="keyword">) ) {<br />                    </span><span class="default">$arrHeaderKey </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">( </span><span class="string">'_'</span><span class="keyword">, </span><span class="default">$strHeaderKey </span><span class="keyword">);<br />                    </span><span class="default">$arrHeaderKey </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">( </span><span class="string">'ucfirst'</span><span class="keyword">, </span><span class="default">$arrHeaderKey </span><span class="keyword">);<br />                    </span><span class="default">$strHeaderKey </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">( </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$arrHeaderKey </span><span class="keyword">);<br />                } else {<br />                    </span><span class="default">$strHeaderKey </span><span class="keyword">= </span><span class="default">ucfirst</span><span class="keyword">( </span><span class="default">$strHeaderKey </span><span class="keyword">);<br />                }<br /><br />                if ( </span><span class="default">array_key_exists</span><span class="keyword">( </span><span class="default">$strHeaderKey</span><span class="keyword">, </span><span class="default">$arrCasedHeaders </span><span class="keyword">) ) {<br />                    </span><span class="default">$strHeaderKey </span><span class="keyword">= </span><span class="default">$arrCasedHeaders</span><span class="keyword">[ </span><span class="default">$strHeaderKey </span><span class="keyword">];<br />                }<br /><br />                </span><span class="default">$arrHttpHeaders</span><span class="keyword">[ </span><span class="default">$strHeaderKey </span><span class="keyword">] = </span><span class="default">$mixValue</span><span class="keyword">;<br />            }<br /><br />            </span><span class="comment">/** in case you need authorization and your hosting provider has not fixed this for you:<br />             * VHOST-Config:<br />             * FastCgiExternalServer line needs    -pass-header Authorization<br />             *<br />             * .htaccess or VHOST-config file needs:<br />             * SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1<br />             * to add the Authorization header to the environment for further processing<br />             */<br />            </span><span class="keyword">if ( ! empty( </span><span class="default">$arrHttpHeaders</span><span class="keyword">[</span><span class="string">'Authorization'</span><span class="keyword">] ) ) {<br />                </span><span class="comment">// in case of Authorization, but the values not propagated properly, do so :)<br />                </span><span class="keyword">if ( ! isset( </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_AUTH_USER'</span><span class="keyword">] ) ) {<br />                    list( </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_AUTH_USER'</span><span class="keyword">], </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_AUTH_PW'</span><span class="keyword">] ) = </span><span class="default">explode</span><span class="keyword">( </span><span class="string">':'</span><span class="keyword">, </span><span class="default">base64_decode</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_AUTHORIZATION'</span><span class="keyword">], </span><span class="default">6 </span><span class="keyword">) ) );<br />                }<br />            }<br />        }<br /><br />        return </span><span class="default">$arrHttpHeaders</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// execute now so other scripts have little chance to taint the information in $_SERVER<br />    // the data is cached, so multiple retrievals of the headers will not cause further impact on performance.<br />    </span><span class="default">apache_request_headers</span><span class="keyword">();<br />}</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.apache-request-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-request-headers.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.apache.php">Apache Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.apache-child-terminate.php" title="apache_&#8203;child_&#8203;terminate">apache_&#8203;child_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-modules.php" title="apache_&#8203;get_&#8203;modules">apache_&#8203;get_&#8203;modules</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-get-version.php" title="apache_&#8203;get_&#8203;version">apache_&#8203;get_&#8203;version</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-getenv.php" title="apache_&#8203;getenv">apache_&#8203;getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-lookup-uri.php" title="apache_&#8203;lookup_&#8203;uri">apache_&#8203;lookup_&#8203;uri</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-note.php" title="apache_&#8203;note">apache_&#8203;note</a>
                        </li>
                                                <li class="current">
                            <a href="function.apache-request-headers.php" title="apache_&#8203;request_&#8203;headers">apache_&#8203;request_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-response-headers.php" title="apache_&#8203;response_&#8203;headers">apache_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.apache-setenv.php" title="apache_&#8203;setenv">apache_&#8203;setenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getallheaders.php" title="getallheaders">getallheaders</a>
                        </li>
                                                <li class="">
                            <a href="function.virtual.php" title="virtual">virtual</a>
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
