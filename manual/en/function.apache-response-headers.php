<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: apache_response_headers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.apache-response-headers.php">
 <link rel="shorturl" href="https://www.php.net/apache-response-headers">
 <link rel="alternate" href="https://www.php.net/apache-response-headers" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.apache.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.apache-request-headers.php">
 <link rel="next" href="https://www.php.net/manual/en/function.apache-setenv.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.apache-response-headers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.apache-response-headers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.apache-response-headers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.apache-response-headers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.apache-response-headers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.apache-response-headers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.apache-response-headers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.apache-response-headers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.apache-response-headers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.apache-response-headers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.apache-response-headers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Fetch all HTTP response headers" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: apache_response_headers - Manual" />
<meta name="twitter:description" content="Fetch all HTTP response headers" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: apache_response_headers - Manual" />
<meta itemprop="description" content="Fetch all HTTP response headers" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Fetch all HTTP response headers" />

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
        <a href="function.apache-setenv.php">
          apache_setenv &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.apache-request-headers.php">
          &laquo; apache_request_headers        </a>
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
            <option value='en/function.apache-response-headers.php' selected="selected">English</option>
            <option value='de/function.apache-response-headers.php'>German</option>
            <option value='es/function.apache-response-headers.php'>Spanish</option>
            <option value='fr/function.apache-response-headers.php'>French</option>
            <option value='it/function.apache-response-headers.php'>Italian</option>
            <option value='ja/function.apache-response-headers.php'>Japanese</option>
            <option value='pt_BR/function.apache-response-headers.php'>Brazilian Portuguese</option>
            <option value='ru/function.apache-response-headers.php'>Russian</option>
            <option value='tr/function.apache-response-headers.php'>Turkish</option>
            <option value='uk/function.apache-response-headers.php'>Ukrainian</option>
            <option value='zh/function.apache-response-headers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.apache-response-headers" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">apache_response_headers</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">apache_response_headers</span> &mdash; <span class="dc-title">Fetch all HTTP response headers</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.apache-response-headers-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>apache_response_headers</strong></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Fetch all HTTP response headers.  Works in the
   Apache, FastCGI, CLI, and FPM webservers.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.apache-response-headers-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.apache-response-headers-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   An array of all Apache response headers on success.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-function.apache-response-headers-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4994">
    <p><strong>Example #1 <span class="function"><strong>apache_response_headers()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">apache_response_headers</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [Accept-Ranges] =&gt; bytes
    [X-Powered-By] =&gt; PHP/4.3.8
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.apache-response-headers-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.apache-request-headers.php" class="function" rel="rdfs-seeAlso">apache_request_headers()</a> - Fetch all HTTP request headers</span></li>
    <li><span class="function"><a href="function.headers-sent.php" class="function" rel="rdfs-seeAlso">headers_sent()</a> - Checks if or where headers have been sent</span></li>
    <li><span class="function"><a href="function.headers-list.php" class="function" rel="rdfs-seeAlso">headers_list()</a> - Returns a list of response headers sent (or ready to send)</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/apache/functions/apache-response-headers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.apache-response-headers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.apache-response-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-response-headers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="91174">  <div class="votes">
    <div id="Vu91174">
    <a href="/manual/vote-note.php?id=91174&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91174">
    <a href="/manual/vote-note.php?id=91174&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91174" title="52% like this...">
    1
    </div>
  </div>
  <a href="#91174" class="name">
  <strong class="user"><em>Isaac Z dot  Schlueter i at foohack dot com</em></strong></a><a class="genanchor" href="#91174"> &para;</a><div class="date" title="2009-05-28 08:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91174">
<div class="phpcode"><code><span class="html">This function doesn't exist on lighttpd, so I wrote this little function to emulate it:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'apache_response_headers'</span><span class="keyword">)) {<br />    function </span><span class="default">apache_response_headers </span><span class="keyword">() {<br />        </span><span class="default">$arh </span><span class="keyword">= array();<br />        </span><span class="default">$headers </span><span class="keyword">= </span><span class="default">headers_list</span><span class="keyword">();<br />        foreach (</span><span class="default">$headers </span><span class="keyword">as </span><span class="default">$header</span><span class="keyword">) {<br />            </span><span class="default">$header </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">":"</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">);<br />            </span><span class="default">$arh</span><span class="keyword">[</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$header</span><span class="keyword">)] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">implode</span><span class="keyword">(</span><span class="string">":"</span><span class="keyword">, </span><span class="default">$header</span><span class="keyword">));<br />        }<br />        return </span><span class="default">$arh</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102506">  <div class="votes">
    <div id="Vu102506">
    <a href="/manual/vote-note.php?id=102506&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102506">
    <a href="/manual/vote-note.php?id=102506&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102506" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#102506" class="name">
  <strong class="user"><em>php at mailplus dot pl</em></strong></a><a class="genanchor" href="#102506"> &para;</a><div class="date" title="2011-02-18 01:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102506">
<div class="phpcode"><code><span class="html">I get  "Call to undefined function apache_response_headers()" when using php-cli so be aware of lack of this function CLI.<br />In my case I was trying to test my app via phpunit (command line tool of course ;)) if it sends proper headers.</span></code></div>
  </div>
 </div>
  <div class="note" id="56501">  <div class="votes">
    <div id="Vu56501">
    <a href="/manual/vote-note.php?id=56501&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56501">
    <a href="/manual/vote-note.php?id=56501&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56501" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#56501" class="name">
  <strong class="user"><em>orange</em></strong></a><a class="genanchor" href="#56501"> &para;</a><div class="date" title="2005-09-05 08:17"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56501">
<div class="phpcode"><code><span class="html">If apache_response_headers() returns an empty array, try calling flush() before and it'll get filled.</span></code></div>
  </div>
 </div>
  <div class="note" id="75338">  <div class="votes">
    <div id="Vu75338">
    <a href="/manual/vote-note.php?id=75338&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75338">
    <a href="/manual/vote-note.php?id=75338&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75338" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#75338" class="name">
  <strong class="user"><em>Daniel Lorch</em></strong></a><a class="genanchor" href="#75338"> &para;</a><div class="date" title="2007-05-24 09:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75338">
<div class="phpcode"><code><span class="html">Addendum: The code<br /><br />&lt;pre&gt;<br /><span class="default">&lt;?php<br />  print_r</span><span class="keyword">(</span><span class="default">apache_request_headers</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span>&lt;/pre&gt;<br /><br />gives me<br /><br /> Array<br /> (<br />    [X-Powered-By] =&gt; PHP/5.1.6<br /> )<br /><br />But the code<br />&lt;pre&gt;<br /><span class="default">&lt;?php<br />  ob_end_flush</span><span class="keyword">();<br />  </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">apache_request_headers</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span>&lt;/pre&gt;<br /><br />Results in<br /><br /> Array<br /> (<br />    [Content-Location] =&gt; phpinfo.de.php<br />    [Vary] =&gt; negotiate<br />    [TCN] =&gt; choice<br />    [X-Powered-By] =&gt; PHP/5.1.6<br />    [Keep-Alive] =&gt; timeout=15, max=96<br />    [Connection] =&gt; Keep-Alive<br />    [Transfer-Encoding] =&gt; chunked<br />    [Content-Type] =&gt; text/html<br />    [Content-Language] =&gt; de<br /> )</span></code></div>
  </div>
 </div>
  <div class="note" id="75337">  <div class="votes">
    <div id="Vu75337">
    <a href="/manual/vote-note.php?id=75337&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75337">
    <a href="/manual/vote-note.php?id=75337&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75337" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#75337" class="name">
  <strong class="user"><em>Daniel Lorch</em></strong></a><a class="genanchor" href="#75337"> &para;</a><div class="date" title="2007-05-24 09:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75337">
<div class="phpcode"><code><span class="html">I can confirm athlet's experience with apache_response_headers() using PHP 5.1.6. When the resulting array is empty or only contains "X-Powered-By" instead of the full list of values, you'll need to switch off output_buffering _before_ the script has been executed, for example with the following directive in .htaccess:<br /><br />php_value "output_buffering" "0"<br /><br />it _doesn't_ work when you do a you ini_set('output_buffering', 0); in your script. Not sure why that is so - it is not a bug in PHP, but probably has to do with how Apache populates the request values.</span></code></div>
  </div>
 </div>
  <div class="note" id="61363">  <div class="votes">
    <div id="Vu61363">
    <a href="/manual/vote-note.php?id=61363&amp;page=function.apache-response-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61363">
    <a href="/manual/vote-note.php?id=61363&amp;page=function.apache-response-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61363" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#61363" class="name">
  <strong class="user"><em>athlet</em></strong></a><a class="genanchor" href="#61363"> &para;</a><div class="date" title="2006-02-01 09:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61363">
<div class="phpcode"><code><span class="html">For apache_response_headers() working good, you need to set  up output_buffering = Off in php.ini</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.apache-response-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.apache-response-headers.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.apache-request-headers.php" title="apache_&#8203;request_&#8203;headers">apache_&#8203;request_&#8203;headers</a>
                        </li>
                                                <li class="current">
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
