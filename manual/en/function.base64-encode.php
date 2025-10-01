<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: base64_encode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.base64-encode.php">
 <link rel="shorturl" href="https://www.php.net/base64-encode">
 <link rel="alternate" href="https://www.php.net/base64-encode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.url.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.base64-decode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.get-headers.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.base64-encode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.base64-encode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.base64-encode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.base64-encode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.base64-encode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.base64-encode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.base64-encode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.base64-encode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.base64-encode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.base64-encode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.base64-encode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Encodes data with MIME base64" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: base64_encode - Manual" />
<meta name="twitter:description" content="Encodes data with MIME base64" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: base64_encode - Manual" />
<meta itemprop="description" content="Encodes data with MIME base64" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Encodes data with MIME base64" />

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
        <a href="function.get-headers.php">
          get_headers &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.base64-decode.php">
          &laquo; base64_decode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.url.php'>URLs</a></li>      <li><a href='ref.url.php'>URL Functions</a></li>      </ul>
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
            <option value='en/function.base64-encode.php' selected="selected">English</option>
            <option value='de/function.base64-encode.php'>German</option>
            <option value='es/function.base64-encode.php'>Spanish</option>
            <option value='fr/function.base64-encode.php'>French</option>
            <option value='it/function.base64-encode.php'>Italian</option>
            <option value='ja/function.base64-encode.php'>Japanese</option>
            <option value='pt_BR/function.base64-encode.php'>Brazilian Portuguese</option>
            <option value='ru/function.base64-encode.php'>Russian</option>
            <option value='tr/function.base64-encode.php'>Turkish</option>
            <option value='uk/function.base64-encode.php'>Ukrainian</option>
            <option value='zh/function.base64-encode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.base64-encode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">base64_encode</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">base64_encode</span> &mdash; <span class="dc-title">Encodes data with MIME base64</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.base64-encode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>base64_encode</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Encodes the given <code class="parameter">string</code> with base64.
  </p>
  <p class="para">
   This encoding is designed to make binary data survive transport through
   transport layers that are not 8-bit clean, such as mail bodies.
  </p>
  <p class="para">
   Base64-encoded data takes about 33% more space than the original
   data.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.base64-encode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The data to encode.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.base64-encode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The encoded data, as a string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.base64-encode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4128">
    <p><strong>Example #1 <span class="function"><strong>base64_encode()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is an encoded string'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">base64_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw==</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.base64-encode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.base64-decode.php" class="function" rel="rdfs-seeAlso">base64_decode()</a> - Decodes data encoded with MIME base64</span></li>
    <li><span class="function"><a href="function.chunk-split.php" class="function" rel="rdfs-seeAlso">chunk_split()</a> - Split a string into smaller chunks</span></li>
    <li><span class="function"><a href="function.convert-uuencode.php" class="function" rel="rdfs-seeAlso">convert_uuencode()</a> - Uuencode a string</span></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc2045" class="link external">&raquo;&nbsp;RFC 2045</a> section 6.8</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/url/functions/base64-encode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.base64-encode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.base64-encode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.base64-encode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">32 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="103849">  <div class="votes">
    <div id="Vu103849">
    <a href="/manual/vote-note.php?id=103849&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103849">
    <a href="/manual/vote-note.php?id=103849&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103849" title="68% like this...">
    272
    </div>
  </div>
  <a href="#103849" class="name">
  <strong class="user"><em>gutzmer at usa dot net</em></strong></a><a class="genanchor" href="#103849"> &para;</a><div class="date" title="2011-05-06 09:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103849">
<div class="phpcode"><code><span class="html">For anyone interested in the 'base64url' variant encoding, you can use this pair of functions:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {
<br />  return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">);
<br />}
<br />
<br />function </span><span class="default">base64url_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {
<br />  return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">), </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) % </span><span class="default">4</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">, </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127544">  <div class="votes">
    <div id="Vu127544">
    <a href="/manual/vote-note.php?id=127544&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127544">
    <a href="/manual/vote-note.php?id=127544&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127544" title="71% like this...">
    3
    </div>
  </div>
  <a href="#127544" class="name">
  <strong class="user"><em>Daniel Klein</em></strong></a><a class="genanchor" href="#127544"> &para;</a><div class="date" title="2022-08-27 10:11"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127544">
<div class="phpcode"><code><span class="html">Improvement on "gutzmer at usa dot net", "biziclop at vipmail dot hu", and "ivanm at duck dot com".<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">base64url_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />None of the padding for strings longer than 4 characters worked. Padding the decode function with = is unnecessary, and has been since at least PHP 5.4 (as far back as I checked before posting) so I removed it.</span></code></div>
  </div>
 </div>
  <div class="note" id="123098">  <div class="votes">
    <div id="Vu123098">
    <a href="/manual/vote-note.php?id=123098&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123098">
    <a href="/manual/vote-note.php?id=123098&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123098" title="65% like this...">
    33
    </div>
  </div>
  <a href="#123098" class="name">
  <strong class="user"><em>Rasmus Schultz</em></strong></a><a class="genanchor" href="#123098"> &para;</a><div class="date" title="2018-09-03 12:28"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123098">
<div class="phpcode"><code><span class="html">In PHP 7, the padding issue with base64_decode() is no more - the following is totally fine:<br /><br />function base64_encode_url($string) {<br />    return str_replace(['+','/','='], ['-','_',''], base64_encode($string));<br />}<br /><br />function base64_decode_url($string) {<br />    return base64_decode(str_replace(['-','_'], ['+','/'], $string));<br />}<br /><br />Checked here with random_bytes() and random lengths:<br /><br /><a href="https://3v4l.org/aEs4o" rel="nofollow" target="_blank">https://3v4l.org/aEs4o</a></span></code></div>
  </div>
 </div>
  <div class="note" id="121767">  <div class="votes">
    <div id="Vu121767">
    <a href="/manual/vote-note.php?id=121767&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121767">
    <a href="/manual/vote-note.php?id=121767&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121767" title="64% like this...">
    35
    </div>
  </div>
  <a href="#121767" class="name">
  <strong class="user"><em>biziclop at vipmail dot hu</em></strong></a><a class="genanchor" href="#121767"> &para;</a><div class="date" title="2017-10-17 04:42"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121767">
<div class="phpcode"><code><span class="html">gutzmer at usa dot net's ( <a href="http://php.net/manual/en/function.base64-encode.php#103849" rel="nofollow" target="_blank">http://php.net/manual/en/function.base64-encode.php#103849</a> ) base64url_decode() function doesn't pad longer strings with '='s. Here is a corrected version: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">){<br />  return </span><span class="default">rtrim</span><span class="keyword">( </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">base64_encode</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">), </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">base64url_decode</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">){<br />  return </span><span class="default">base64_decode</span><span class="keyword">( </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">) . </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">- ( </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">)) % </span><span class="default">4 </span><span class="keyword">));<br />}<br /><br /></span><span class="comment">// proof<br /></span><span class="keyword">for( </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$s </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">24</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">, </span><span class="default">$s </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="string">"</span><span class="default">$i</span><span class="string">"</span><span class="keyword">, -</span><span class="default">1 </span><span class="keyword">)){<br />  </span><span class="default">$base64_encoded    </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(    </span><span class="default">$s </span><span class="keyword">);<br />  </span><span class="default">$base64url_encoded </span><span class="keyword">= </span><span class="default">base64url_encode</span><span class="keyword">( </span><span class="default">$s </span><span class="keyword">);<br />  </span><span class="default">$base64url_decoded </span><span class="keyword">= </span><span class="default">base64url_decode</span><span class="keyword">( </span><span class="default">$base64url_encoded </span><span class="keyword">);<br />  </span><span class="default">$base64_restored   </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">$base64url_encoded</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">)<br />                     . </span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">,<br />                         </span><span class="default">3 </span><span class="keyword">- ( </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$base64url_encoded </span><span class="keyword">)) % </span><span class="default">4<br />                       </span><span class="keyword">);<br />  echo </span><span class="string">"</span><span class="default">$s</span><span class="string">&lt;br&gt;</span><span class="default">$base64url_decoded</span><span class="string">&lt;br&gt;</span><span class="default">$base64_encoded</span><span class="string">&lt;br&gt;</span><span class="default">$base64_restored</span><span class="string">&lt;br&gt;</span><span class="default">$base64url_encoded</span><span class="string">&lt;br&gt;&lt;br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111942">  <div class="votes">
    <div id="Vu111942">
    <a href="/manual/vote-note.php?id=111942&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111942">
    <a href="/manual/vote-note.php?id=111942&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111942" title="58% like this...">
    19
    </div>
  </div>
  <a href="#111942" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#111942"> &para;</a><div class="date" title="2013-04-15 11:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111942">
<div class="phpcode"><code><span class="html">Base64 encoding of large files.<br /><br />Base64 encoding converts triples of eight-bit symbols into quadruples of six-bit symbols. Reading the input file in chunks that are a multiple of three bytes in length results in a chunk that can be encoded independently of the rest of the input file. MIME additionally enforces a line length of 76 characters plus the CRLF. 76 characters is enough for 19 quadruples of six-bit symbols thus representing 19 triples of eight-bit symbols. Reading 57 eight-bit symbols provides exactly enough data for a complete MIME-formatted line. Finally, PHP's default buffer size is 8192 bytes - enough for 143 MIME lines' worth of input.<br /><br />So if you read from the input file in chunks of 8151 (=57*143) bytes you will get (up to) 8151 eight-bit symbols, which encode as exactly 10868 six-bit symbols, which then wrap to exactly 143 MIME-formatted lines. There is no need to retain left-over symbols (either six- or eight-bit) from one chunk to the next. Just read a chunk, encode it, write it out, and go on to the next chunk. Obviously the last chunk will probably be shorter, but encoding it is still independent of the rest.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$input_file</span><span class="keyword">))<br />{<br />    </span><span class="default">$plain </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$input_file</span><span class="keyword">, </span><span class="default">57 </span><span class="keyword">* </span><span class="default">143</span><span class="keyword">);<br />    </span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$plain</span><span class="keyword">);<br />    </span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">76</span><span class="keyword">, </span><span class="string">"\r\n"</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$output_file</span><span class="keyword">, </span><span class="default">$encoded</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Conversely, each 76-character MIME-formatted line (not counting the trailing CRLF) contains exactly enough data for 57 bytes of output without needing to retain leftover bits that need prepending to the next line. What that means is that each line can be decoded independently of the others, and the decoded chunks can then be concatenated together or written out sequentially. However, this does make the assumption that the encoded data really is MIME-formatted; without that assurance it is necessary to accept that the base64 data won't be so conveniently arranged.</span></code></div>
  </div>
 </div>
  <div class="note" id="127002">  <div class="votes">
    <div id="Vu127002">
    <a href="/manual/vote-note.php?id=127002&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127002">
    <a href="/manual/vote-note.php?id=127002&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127002" title="58% like this...">
    3
    </div>
  </div>
  <a href="#127002" class="name">
  <strong class="user"><em>ivanm at duck dot com</em></strong></a><a class="genanchor" href="#127002"> &para;</a><div class="date" title="2022-04-22 12:22"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127002">
<div class="phpcode"><code><span class="html">Slight improvement on the padding problem in gutzmer at usa dot net (<a href="https://www.php.net/manual/en/function.base64-encode.php#103849" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.base64-encode.php#103849</a>) and biziclop at vipmail dot hu (<a href="https://www.php.net/manual/en/function.base64-encode.php#121767" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.base64-encode.php#121767</a>):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">base64url_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">), </span><span class="default">4 </span><span class="keyword">- ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) % </span><span class="default">4</span><span class="keyword">) ?: </span><span class="default">4</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">, </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92762">  <div class="votes">
    <div id="Vu92762">
    <a href="/manual/vote-note.php?id=92762&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92762">
    <a href="/manual/vote-note.php?id=92762&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92762" title="58% like this...">
    17
    </div>
  </div>
  <a href="#92762" class="name">
  <strong class="user"><em>MitMacher</em></strong></a><a class="genanchor" href="#92762"> &para;</a><div class="date" title="2009-08-07 02:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92762">
<div class="phpcode"><code><span class="html">Unfortunately my "function" for encoding base64 on-the-fly from 2007 [which has been removed from the manual in favor of this post] had 2 errors!
<br />The first led to an endless loop because of a missing "$feof"-check, the second caused the rare mentioned errors when encoding failed for some reason in larger files, especially when
<br />setting fgets($fh, 2) for example. But lower values then 1024 are bad overall because they slow down the whole process, so 4096 will be fine for all purposes, I guess.
<br />The error was caused by the use of "empty()".
<br />
<br />Here comes the corrected version which I have tested for all kind of files and length (up to 4,5 Gb!) without any error:
<br />
<br /><span class="default">&lt;?php
<br />$fh </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'Input-File'</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">);
<br /></span><span class="comment">//$fh2 = fopen('Output-File', 'wb');
<br />
<br /></span><span class="default">$cache </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br /></span><span class="default">$eof </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />
<br />while (</span><span class="default">1</span><span class="keyword">) {
<br />
<br />    if (!</span><span class="default">$eof</span><span class="keyword">) {
<br />        if (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">)) {
<br />            </span><span class="default">$row </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">);
<br />        } else {
<br />            </span><span class="default">$row </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />            </span><span class="default">$eof </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    if (</span><span class="default">$cache </span><span class="keyword">!== </span><span class="string">''</span><span class="keyword">)
<br />        </span><span class="default">$row </span><span class="keyword">= </span><span class="default">$cache</span><span class="keyword">.</span><span class="default">$row</span><span class="keyword">;
<br />    elseif (</span><span class="default">$eof</span><span class="keyword">)
<br />        break;
<br />
<br />    </span><span class="default">$b64 </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$row</span><span class="keyword">);
<br />    </span><span class="default">$put </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">) &lt; </span><span class="default">76</span><span class="keyword">) {
<br />        if (</span><span class="default">$eof</span><span class="keyword">) {
<br />            </span><span class="default">$put </span><span class="keyword">= </span><span class="default">$b64</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />            </span><span class="default">$cache </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        } else {
<br />            </span><span class="default">$cache </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">;
<br />        }
<br />
<br />    } elseif (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">) &gt; </span><span class="default">76</span><span class="keyword">) {
<br />        do {
<br />            </span><span class="default">$put </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">76</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;
<br />            </span><span class="default">$b64 </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">, </span><span class="default">76</span><span class="keyword">);
<br />        } while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">) &gt; </span><span class="default">76</span><span class="keyword">);
<br />
<br />        </span><span class="default">$cache </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$b64</span><span class="keyword">);
<br />
<br />    } else {
<br />        if (!</span><span class="default">$eof </span><span class="keyword">&amp;&amp; </span><span class="default">$b64</span><span class="keyword">{</span><span class="default">75</span><span class="keyword">} == </span><span class="string">'='</span><span class="keyword">) {
<br />            </span><span class="default">$cache </span><span class="keyword">= </span><span class="default">$row</span><span class="keyword">;
<br />        } else {
<br />            </span><span class="default">$put </span><span class="keyword">= </span><span class="default">$b64</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;
<br />            </span><span class="default">$cache </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    if (</span><span class="default">$put </span><span class="keyword">!== </span><span class="string">''</span><span class="keyword">) {
<br />        echo </span><span class="default">$put</span><span class="keyword">;
<br />        </span><span class="comment">//fputs($fh2, $put);
<br />        //fputs($fh2, base64_decode($put));        // for comparing
<br />    </span><span class="keyword">}
<br />}
<br />
<br /></span><span class="comment">//fclose($fh2);
<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fh</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105200">  <div class="votes">
    <div id="Vu105200">
    <a href="/manual/vote-note.php?id=105200&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105200">
    <a href="/manual/vote-note.php?id=105200&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105200" title="56% like this...">
    19
    </div>
  </div>
  <a href="#105200" class="name">
  <strong class="user"><em>luke at lukeoliff.com</em></strong></a><a class="genanchor" href="#105200"> &para;</a><div class="date" title="2011-08-02 09:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105200">
<div class="phpcode"><code><span class="html">A function I'm using to return local images as base64 encrypted code, i.e. embedding the image source into the html request.<br /><br />This will greatly reduce your page load time as the browser will only need to send one server request for the entire page, rather than multiple requests for the HTML and the images. Requests need to be uploaded and 99% of the world are limited on their upload speed to the server.<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">base64_encode_image </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">=</span><span class="default">string</span><span class="keyword">,</span><span class="default">$filetype</span><span class="keyword">=</span><span class="default">string</span><span class="keyword">) {<br />    if (</span><span class="default">$filename</span><span class="keyword">) {<br />        </span><span class="default">$imgbinary </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">), </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br />        return </span><span class="string">'data:image/' </span><span class="keyword">. </span><span class="default">$filetype </span><span class="keyword">. </span><span class="string">';base64,' </span><span class="keyword">. </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$imgbinary</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />used as so<br /><br />&lt;style type="text/css"&gt;<br />.logo {<br />    background: url("<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">base64_encode_image </span><span class="keyword">(</span><span class="string">'img/logo.png'</span><span class="keyword">,</span><span class="string">'png'</span><span class="keyword">); </span><span class="default">?&gt;</span>") no-repeat right 5px;<br />}<br />&lt;/style&gt;<br /><br />or<br /><br />&lt;img src="<span class="default">&lt;?php </span><span class="keyword">echo </span><span class="default">base64_encode_image </span><span class="keyword">(</span><span class="string">'img/logo.png'</span><span class="keyword">,</span><span class="string">'png'</span><span class="keyword">); </span><span class="default">?&gt;</span>"/&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="63543">  <div class="votes">
    <div id="Vu63543">
    <a href="/manual/vote-note.php?id=63543&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63543">
    <a href="/manual/vote-note.php?id=63543&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63543" title="54% like this...">
    6
    </div>
  </div>
  <a href="#63543" class="name">
  <strong class="user"><em>massimo dot scamarcia at gmail dot com</em></strong></a><a class="genanchor" href="#63543"> &para;</a><div class="date" title="2006-03-23 03:02"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63543">
<div class="phpcode"><code><span class="html">function urlsafe_b64encode($string) {<br />    $data = base64_encode($string);<br />    $data = str_replace(array('+','/','='),array('-','_',''),$data);<br />    return $data;<br />}<br /><br />function urlsafe_b64decode($string) {<br />    $data = str_replace(array('-','_'),array('+','/'),$string);<br />    $mod4 = strlen($data) % 4;<br />    if ($mod4) {<br />        $data .= substr('====', $mod4);<br />    }<br />    return base64_decode($data);<br />}<br /><br />Php version of perl's MIME::Base64::URLSafe, that provides an url-safe base64 string encoding/decoding (compatible with python base64's urlsafe methods)</span></code></div>
  </div>
 </div>
  <div class="note" id="129979">  <div class="votes">
    <div id="Vu129979">
    <a href="/manual/vote-note.php?id=129979&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129979">
    <a href="/manual/vote-note.php?id=129979&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129979" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129979" class="name">
  <strong class="user"><em>theking2 at king dot ma</em></strong></a><a class="genanchor" href="#129979"> &para;</a><div class="date" title="2025-01-15 04:59"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129979">
<div class="phpcode"><code><span class="html">In lieu with biziclop answer here a small upgrade.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * convert bin to url friendly base64<br /> */<br /></span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">( </span><span class="default">string $data </span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    return </span><span class="default">rtrim</span><span class="keyword">( </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">base64_encode</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">), </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_' </span><span class="keyword">), </span><span class="string">'=' </span><span class="keyword">);<br />}<br /></span><span class="comment">/**<br /> * convert url friendly base64 to bin<br /> */<br /></span><span class="keyword">function </span><span class="default">base64url_decode</span><span class="keyword">( </span><span class="default">string $data </span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    return </span><span class="default">base64_decode</span><span class="keyword">( </span><span class="default">strtr</span><span class="keyword">( </span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/' </span><span class="keyword">) . </span><span class="default">str_repeat</span><span class="keyword">( </span><span class="string">'='</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">- ( </span><span class="default">3 </span><span class="keyword">+ </span><span class="default">strlen</span><span class="keyword">( </span><span class="default">$data </span><span class="keyword">) ) % </span><span class="default">4 </span><span class="keyword">) );<br />}<br /></span><span class="default">?&gt;<br /></span><br />This should symmetrically convert one string and back in a url save manner.</span></code></div>
  </div>
 </div>
  <div class="note" id="63667">  <div class="votes">
    <div id="Vu63667">
    <a href="/manual/vote-note.php?id=63667&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63667">
    <a href="/manual/vote-note.php?id=63667&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63667" title="51% like this...">
    1
    </div>
  </div>
  <a href="#63667" class="name">
  <strong class="user"><em>dawgeatschikin at hotmail dot com</em></strong></a><a class="genanchor" href="#63667"> &para;</a><div class="date" title="2006-03-27 08:06"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63667">
<div class="phpcode"><code><span class="html">Just a minor tweak of massimo's functions.<br /><br />&lt;?<br />$data = str_replace(array('+','/','='),array('-','_','.'),$data);<br />//replace '=' with '.' instead of with nothing, that way the process is reversible.  '.' is uri-safe according to <a href="http://www.w3.org/Addressing/URL/5_URI_BNF.html" rel="nofollow" target="_blank">http://www.w3.org/Addressing/URL/5_URI_BNF.html</a><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="63270">  <div class="votes">
    <div id="Vu63270">
    <a href="/manual/vote-note.php?id=63270&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63270">
    <a href="/manual/vote-note.php?id=63270&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63270" title="51% like this...">
    1
    </div>
  </div>
  <a href="#63270" class="name">
  <strong class="user"><em>Gabriel Malca</em></strong></a><a class="genanchor" href="#63270"> &para;</a><div class="date" title="2006-03-17 01:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63270">
<div class="phpcode"><code><span class="html">If the function doesn't exist, this is a messy but effective way of doing it:<br /><br />&lt;?<br /><br />echo bencode("Gabriel Malca");<br />// R2FicmllbCBNYWxjYQ==<br /><br />function bencode($string='') {<br />    $binval = convert_binary_str($string);<br />    $final = "";<br />    $start = 0;<br />    while ($start &lt; strlen($binval)) {<br />        if (strlen(substr($binval,$start)) &lt; 6)<br />            $binval .= str_repeat("0",6-strlen(substr($binval,$start)));<br />        $tmp = bindec(substr($binval,$start,6));<br />        if ($tmp &lt; 26)<br />            $final .= chr($tmp+65);<br />        elseif ($tmp &gt; 25 &amp;&amp; $tmp &lt; 52)<br />            $final .= chr($tmp+71);<br />        elseif ($tmp == 62)<br />            $final .= "+";<br />        elseif ($tmp == 63)<br />            $final .= "/";<br />        elseif (!$tmp)<br />            $final .= "A";<br />        else<br />            $final .= chr($tmp-4);<br />        $start += 6;<br />    }<br />    if (strlen($final)%4&gt;0)<br />        $final .= str_repeat("=",4-strlen($final)%4);<br />    return $final;<br />}<br /><br />function convert_binary_str($string) {<br />    if (strlen($string)&lt;=0) return;<br />    $tmp = decbin(ord($string[0]));<br />    $tmp = str_repeat("0",8-strlen($tmp)).$tmp;<br />    return $tmp.convert_binary_str(substr($string,1));<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="63554">  <div class="votes">
    <div id="Vu63554">
    <a href="/manual/vote-note.php?id=63554&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63554">
    <a href="/manual/vote-note.php?id=63554&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63554" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63554" class="name">
  <strong class="user"><em>massimo dot scamarcia at gmail dot com</em></strong></a><a class="genanchor" href="#63554"> &para;</a><div class="date" title="2006-03-23 07:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63554">
<div class="phpcode"><code><span class="html">$data = str_replace(array('+','/','='),array('-','_',),$data); // MIME::Base64::URLSafe implementation<br />       <br />$data = str_replace(array('+','/'),array('-','_'),$data); // Python raise "TypeError: Incorrect padding" if you remove "=" chars when decoding</span></code></div>
  </div>
 </div>
  <div class="note" id="43449">  <div class="votes">
    <div id="Vu43449">
    <a href="/manual/vote-note.php?id=43449&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43449">
    <a href="/manual/vote-note.php?id=43449&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43449" title="50% like this...">
    0
    </div>
  </div>
  <a href="#43449" class="name">
  <strong class="user"><em>juha at kuhazor dot idlegames dot com</em></strong></a><a class="genanchor" href="#43449"> &para;</a><div class="date" title="2004-06-21 08:29"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43449">
<div class="phpcode"><code><span class="html">If you use base64encoded strings as cookie names, make sure you remove '=' characters. At least Internet Explorer refuses cookie names containing '=' characters or urlencoded cookie names containing %xx character replacements. Use the function below to turn base64 encoded strings to bare alphabets (get rid of / and + characters as well)
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">base64clean</span><span class="keyword">(</span><span class="default">$base64string</span><span class="keyword">)
<br />{
<br />     </span><span class="default">$base64string </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'='</span><span class="keyword">,</span><span class="string">'+'</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">),</span><span class="string">''</span><span class="keyword">,</span><span class="default">$base64string</span><span class="keyword">); 
<br />
<br />     return </span><span class="default">$base64string</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111185">  <div class="votes">
    <div id="Vu111185">
    <a href="/manual/vote-note.php?id=111185&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111185">
    <a href="/manual/vote-note.php?id=111185&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111185" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#111185" class="name">
  <strong class="user"><em>Gerard</em></strong></a><a class="genanchor" href="#111185"> &para;</a><div class="date" title="2013-01-23 01:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111185">
<div class="phpcode"><code><span class="html">To make base64_encode encode a URL safe string compatible with .net HttpServerUtility.UrlTokenEncode function use this:
<br />
<br /><span class="default">&lt;?php
<br />url_safe_base64_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)
<br />  {
<br />    </span><span class="comment">#First base64 encode
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);
<br />
<br />    </span><span class="comment">#Base64 strings can end in several = chars. These need to be translated into a number
<br />    </span><span class="default">$no_of_eq </span><span class="keyword">= </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">"="</span><span class="keyword">);
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">);
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$data</span><span class="keyword">.</span><span class="default">$no_of_eq</span><span class="keyword">;
<br />
<br />    </span><span class="comment">#Then replace all non-url safe characters
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">'+'</span><span class="keyword">,</span><span class="string">'/'</span><span class="keyword">),array(</span><span class="string">'-'</span><span class="keyword">,</span><span class="string">'_'</span><span class="keyword">),</span><span class="default">$data</span><span class="keyword">);
<br />    return </span><span class="default">$data</span><span class="keyword">;
<br />  }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115261">  <div class="votes">
    <div id="Vu115261">
    <a href="/manual/vote-note.php?id=115261&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115261">
    <a href="/manual/vote-note.php?id=115261&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115261" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#115261" class="name">
  <strong class="user"><em>Naser Mirzaei</em></strong></a><a class="genanchor" href="#115261"> &para;</a><div class="date" title="2014-06-24 09:30"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115261">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$image </span><span class="keyword">= </span><span class="string">'example.png'</span><span class="keyword">;<br /><br /></span><span class="comment">// Read image path, convert to base64 encoding<br /></span><span class="default">$imageData </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">));<br /><br /></span><span class="comment">// Format the image SRC:  data:{mime};base64,{data};<br /></span><span class="default">$src </span><span class="keyword">= </span><span class="string">'data: '</span><span class="keyword">.</span><span class="default">mime_content_type</span><span class="keyword">(</span><span class="default">$image</span><span class="keyword">).</span><span class="string">';base64,'</span><span class="keyword">.</span><span class="default">$imageData</span><span class="keyword">;<br /><br /></span><span class="comment">// Echo out a sample image<br /></span><span class="keyword">echo </span><span class="string">"&lt;img src=\"</span><span class="default">$src</span><span class="string">\" alt=\"\" /&gt;"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82200">  <div class="votes">
    <div id="Vu82200">
    <a href="/manual/vote-note.php?id=82200&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82200">
    <a href="/manual/vote-note.php?id=82200&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82200" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#82200" class="name">
  <strong class="user"><em>Andi</em></strong></a><a class="genanchor" href="#82200"> &para;</a><div class="date" title="2008-03-31 01:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82200">
<div class="phpcode"><code><span class="html">I needed a simple way to obfuscate auto_increment primary keys in databases when they are visible to users in URIs or API calls. The users should not be able to increment the id in the URL and see the next data record in the database table.<br /><br />My solution (uses modified base64 functions by Tom):<br /><br />function base64url_encode($plainText) {<br />    <br />    $base64 = base64_encode($plainText);<br />    $base64url = strtr($base64, '+/=', '-_,');<br />    return $base64url;   <br />}<br /><br />function base64url_decode($plainText) {<br />    <br />    $base64url = strtr($plainText, '-_,', '+/=');<br />    $base64 = base64_decode($base64url);<br />    return $base64;   <br />}<br /><br />function encryptId($int, $class='') {<br />    <br />    return base64url_encode($int.'-'.substr(sha1($class.$int.encryptionKey), 0, 6));<br />}<br /><br />function decryptId($string, $class='') {<br />    <br />    $parts = explode('-', base64url_decode($string));<br />    if (count($parts) != 2) {<br />        <br />        return 0;<br />    }<br />    <br />    $int = $parts[0];<br />    return substr(sha1($class.$int.encryptionKey), 0, 6) === $parts[1]<br />        ? (int)$int<br />        : 0;<br />}<br /><br />- The optional 2nd argument is the class name, so two equal ids of different tables will not result in two equal obfuscated ids.<br /><br />- encryptionKey is a global secret key for encryption.<br /><br />- decryptId() checks if the second part of the base64 encoded string is correct.</span></code></div>
  </div>
 </div>
  <div class="note" id="71582">  <div class="votes">
    <div id="Vu71582">
    <a href="/manual/vote-note.php?id=71582&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71582">
    <a href="/manual/vote-note.php?id=71582&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71582" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#71582" class="name">
  <strong class="user"><em>Tom</em></strong></a><a class="genanchor" href="#71582"> &para;</a><div class="date" title="2006-12-06 10:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71582">
<div class="phpcode"><code><span class="html">This function supports "base64url" as described in Section 5 of RFC 4648, "Base 64 Encoding with URL and Filename Safe Alphabet"<br /><br />    <span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">base64url_encode</span><span class="keyword">(</span><span class="default">$plainText</span><span class="keyword">)<br />    {<br />        </span><span class="default">$base64 </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$plainText</span><span class="keyword">);<br />        </span><span class="default">$base64url </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$base64</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">);<br />        return (</span><span class="default">$base64url</span><span class="keyword">);    <br />    }<br />    </span><span class="default">?&gt;<br /></span><br />You may wish to rtrim (or escape) trailing ='s for use in a URI.</span></code></div>
  </div>
 </div>
  <div class="note" id="25666">  <div class="votes">
    <div id="Vu25666">
    <a href="/manual/vote-note.php?id=25666&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25666">
    <a href="/manual/vote-note.php?id=25666&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25666" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#25666" class="name">
  <strong class="user"><em>guy at bhaktiandvedanta dot com</em></strong></a><a class="genanchor" href="#25666"> &para;</a><div class="date" title="2002-10-01 05:00"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25666">
<div class="phpcode"><code><span class="html">You can use base64_encode to transfer image file into string text and then display them. I used this to store my images in a database and display them form there. First I open the files using fread, encoded the result, and stored that result in the database. Useful for creating random images. <br /><br />image.php:<br /><br />&lt;?<br /><br />header(" Content-Type: image/jpeg");<br />header(" Content-Disposition: inline");<br />$sql = "SELECT data FROM image where name='".$img."'";<br />$result = mysql_query($sql);<br />$row = mysql_fetch_row($result);<br />$image = $row[0];<br />echo base64_decode($image);<br /><br />?&gt;<br /><br />And in the html file you put:<br /><br />&lt;img src="image.php?img=test3"  border="0" alt=""&gt;<br /><br />Guy Laor</span></code></div>
  </div>
 </div>
  <div class="note" id="93375">  <div class="votes">
    <div id="Vu93375">
    <a href="/manual/vote-note.php?id=93375&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93375">
    <a href="/manual/vote-note.php?id=93375&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93375" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#93375" class="name">
  <strong class="user"><em>jonb at wobblymusic dot com</em></strong></a><a class="genanchor" href="#93375"> &para;</a><div class="date" title="2009-09-06 12:21"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93375">
<div class="phpcode"><code><span class="html">Note that some applications, such as OpenSSL's enc command, require that there be a line break every 64 characters in order for their base64 decode function to work. The following function will take care of this problem:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function (</span><span class="default">$encodeMe</span><span class="keyword">) {
<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$encodeMe</span><span class="keyword">);
<br />    </span><span class="default">$datalb </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />    while (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &gt; </span><span class="default">64</span><span class="keyword">) {
<br />        </span><span class="default">$datalb </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">64</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="default">64</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$datalb </span><span class="keyword">.= </span><span class="default">$data</span><span class="keyword">;
<br />    return </span><span class="default">$datalb</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56157">  <div class="votes">
    <div id="Vu56157">
    <a href="/manual/vote-note.php?id=56157&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56157">
    <a href="/manual/vote-note.php?id=56157&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56157" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#56157" class="name">
  <strong class="user"><em>Cristiano Calligaro</em></strong></a><a class="genanchor" href="#56157"> &para;</a><div class="date" title="2005-08-25 03:05"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56157">
<div class="phpcode"><code><span class="html">I've used base64_encode and base64_decode for file attachment both in MySQL (using a BLOB field) and MSSQL (using a TEXT field). For MSSQL remember to set in PHP.INI file both mssql.textsize and mssql.textlimit to 2147483647.<br /><br />Here's the code:<br /><br />######### MSSQL(mssql_)/MySQL(mysql_) file attach<br />$val=$HTTP_POST_FILES['lob_upload']['tmp_name'];<br />$valn=$HTTP_POST_FILES['lob_upload']['name'];<br />$valt=$HTTP_POST_FILES['lob_upload']['type'];<br /><br />$data=base64_encode(addslashes(fread(fopen($val, "r"), filesize($val))));<br /><br />mssql_connect("srv","usr","pass") or die ("");<br />mssql_select_db("db") or die ("");<br />$query = "UPDATE $table SET $field='$data', $fieldname='$valn', $fieldtype='$valt' WHERE DocID='$DocID'";<br />$result = mssql_query($query) or die(mssql_error());<br />mssql_close();<br /><br />######### MSSQL(mssql_)/MySQL(mysql_) open file attached<br />mssql_connect("srv","usr","pass") or die ("");<br />mssql_select_db("db") or die ("");<br />$query = "SELECT $field,$fieldtype FROM $table WHERE DocID='$DocID'";<br />$result = mssql_query($query) or die(mssql_error());<br />$row = mssql_fetch_array($result);<br /><br />header("Content-type: $row[1]");<br />echo stripslashes(base64_decode($row[0]));<br /><br />This strategy is good for Microsoft Word, Acrobat PDF, JPG image and so on (even zipped files!!!)</span></code></div>
  </div>
 </div>
  <div class="note" id="99842">  <div class="votes">
    <div id="Vu99842">
    <a href="/manual/vote-note.php?id=99842&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99842">
    <a href="/manual/vote-note.php?id=99842&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99842" title="46% like this...">
    -3
    </div>
  </div>
  <a href="#99842" class="name">
  <strong class="user"><em>andronick(dot)mail(dog)gmail(dot)com</em></strong></a><a class="genanchor" href="#99842"> &para;</a><div class="date" title="2010-09-09 06:28"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99842">
<div class="phpcode"><code><span class="html">output images into html:<br /><br /><span class="default">&lt;?php<br /><br />$imgfile </span><span class="keyword">= </span><span class="string">"test.gif"</span><span class="keyword">;<br /><br /></span><span class="default">$handle </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br /><br /></span><span class="default">$imgbinary </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">), </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$imgfile</span><span class="keyword">));<br /><br />echo </span><span class="string">'&lt;img src="data:image/gif;base64,' </span><span class="keyword">. </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$imgbinary</span><span class="keyword">) . </span><span class="string">'" /&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />gif - data:image/gif;base64,...<br />jpg - data:image/jpeg;base64,...<br />png - data:image/png;base64,...<br />etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="69836">  <div class="votes">
    <div id="Vu69836">
    <a href="/manual/vote-note.php?id=69836&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69836">
    <a href="/manual/vote-note.php?id=69836&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69836" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#69836" class="name">
  <strong class="user"><em>php at ianco dot co dot uk</em></strong></a><a class="genanchor" href="#69836"> &para;</a><div class="date" title="2006-09-22 08:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69836">
<div class="phpcode"><code><span class="html">I am finding a length restriction with base64_encode (or possibly with echo) in PHP 4.3.9.<br />This works ok for me:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3273</span><span class="keyword">)); </span><span class="comment">// 3273<br /></span><span class="keyword">echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3273</span><span class="keyword">))); </span><span class="comment">// 4364<br /></span><span class="keyword">echo </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3273</span><span class="keyword">)); </span><span class="comment">// LS0t repeated<br /></span><span class="default">?&gt;<br /></span>But change the length to 3274 and the third echo prints nothing.<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3274</span><span class="keyword">)); </span><span class="comment">// 3274<br /></span><span class="keyword">echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3274</span><span class="keyword">))); </span><span class="comment">// 4368<br /></span><span class="keyword">echo </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">3274</span><span class="keyword">)); </span><span class="comment">// Nothing at all printed<br /></span><span class="default">?&gt;<br /></span>This has obvious implications if you're wanting to encode a fairly large serialized array and echo it to a form field.</span></code></div>
  </div>
 </div>
  <div class="note" id="104801">  <div class="votes">
    <div id="Vu104801">
    <a href="/manual/vote-note.php?id=104801&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104801">
    <a href="/manual/vote-note.php?id=104801&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104801" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#104801" class="name">
  <strong class="user"><em>markrose at markrose dot ca</em></strong></a><a class="genanchor" href="#104801"> &para;</a><div class="date" title="2011-07-07 03:15"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104801">
<div class="phpcode"><code><span class="html">An even faster way to line-breaks every 64th character is using the chunk_split function:<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="default">chunk_split</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="default">64</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122367">  <div class="votes">
    <div id="Vu122367">
    <a href="/manual/vote-note.php?id=122367&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122367">
    <a href="/manual/vote-note.php?id=122367&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122367" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#122367" class="name">
  <strong class="user"><em>ozziez_box at hotmail dot com</em></strong></a><a class="genanchor" href="#122367"> &para;</a><div class="date" title="2018-02-07 09:31"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122367">
<div class="phpcode"><code><span class="html">Regarding base64url, you can just use:<br /><br /><span class="default">&lt;?php<br />$encodedUrl </span><span class="keyword">= </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br /></span><span class="default">$decodedUrl </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">url_decode</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71516">  <div class="votes">
    <div id="Vu71516">
    <a href="/manual/vote-note.php?id=71516&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71516">
    <a href="/manual/vote-note.php?id=71516&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71516" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#71516" class="name">
  <strong class="user"><em>eric [at] d512 [dot] com</em></strong></a><a class="genanchor" href="#71516"> &para;</a><div class="date" title="2006-12-03 07:42"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71516">
<div class="phpcode"><code><span class="html">Note that at least some Windows systems will not print a line of characters longer than a certain length unless it has line breaks of some kind.  So if you base-64 encode a file, print it back for debugging purposes, and see nothing, don't be alarmed.</span></code></div>
  </div>
 </div>
  <div class="note" id="119327">  <div class="votes">
    <div id="Vu119327">
    <a href="/manual/vote-note.php?id=119327&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119327">
    <a href="/manual/vote-note.php?id=119327&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119327" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#119327" class="name">
  <strong class="user"><em>alf at trance dot net</em></strong></a><a class="genanchor" href="#119327"> &para;</a><div class="date" title="2016-05-13 02:31"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119327">
<div class="phpcode"><code><span class="html">@gutzmer at usa dot net<br /><br />Nice idea! However...<br /><br />The function base64url_decode doesn't pad strings longer than 4 chars.<br />str_pad will only pad the string if the second argument is larger than the length of the original string. So the correct function should be:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">base64url_decode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) {<br />  </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />  return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">str_pad</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="string">'-_'</span><span class="keyword">, </span><span class="string">'+/'</span><span class="keyword">), </span><span class="default">$len </span><span class="keyword">+ </span><span class="default">$len </span><span class="keyword">% </span><span class="default">4</span><span class="keyword">, </span><span class="string">'='</span><span class="keyword">, </span><span class="default">STR_PAD_RIGHT</span><span class="keyword">));<br />} <br /><br /></span><span class="default">Note that base64_decode works fine without the padding</span><span class="keyword">, </span><span class="default">that is why your </span><span class="keyword">function </span><span class="default">works</span><span class="keyword">.</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59430">  <div class="votes">
    <div id="Vu59430">
    <a href="/manual/vote-note.php?id=59430&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59430">
    <a href="/manual/vote-note.php?id=59430&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59430" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#59430" class="name">
  <strong class="user"><em>virtuall at virtuall dot info</em></strong></a><a class="genanchor" href="#59430"> &para;</a><div class="date" title="2005-12-06 01:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59430">
<div class="phpcode"><code><span class="html">If you encode text that contains symbols like &lt; &gt; and want to send it in GET query, be sure to urlencode the result of base64_encode, as it sometimes adds a  + (and it's a special symbol) at the end:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">echo </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="string">'&lt;html&gt;'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />returns:<br /><br />PGh0bWw+<br /><br />A function like this could also be useful:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">base64_urlencode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />        return </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));<br />    };<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126301">  <div class="votes">
    <div id="Vu126301">
    <a href="/manual/vote-note.php?id=126301&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126301">
    <a href="/manual/vote-note.php?id=126301&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126301" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#126301" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#126301"> &para;</a><div class="date" title="2021-08-02 07:58"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126301">
<div class="phpcode"><code><span class="html">if you for some reason need a base10 / pure-number encode instead, encoding to some combination of 0123456789<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// base10-encode using the dictionary 0123456789<br /></span><span class="keyword">function </span><span class="default">base10_encode</span><span class="keyword">(</span><span class="default">string $str</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$imax </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$imax</span><span class="keyword">; ++ </span><span class="default">$i</span><span class="keyword">) {<br />        </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">str_pad</span><span class="keyword">((string) </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]), </span><span class="default">3</span><span class="keyword">, </span><span class="string">"0"</span><span class="keyword">, </span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="comment">// base10-decode using the dictionary 0123456789<br /></span><span class="keyword">function </span><span class="default">base10_decode</span><span class="keyword">(</span><span class="default">string $str</span><span class="keyword">): </span><span class="default">string<br /></span><span class="keyword">{<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$imax </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$imax</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">3</span><span class="keyword">) {<br />        </span><span class="comment">// notably here we are using (int) to trim away the zeroes..<br />        </span><span class="default">$ret </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">((int) </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">));<br />    }<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />it is unicode-safe and binary-safe, testing:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// simple ascii test: <br /></span><span class="default">$d</span><span class="keyword">=[];<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]=</span><span class="string">"test"</span><span class="keyword">;<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]=</span><span class="default">base10_encode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]); </span><span class="comment">// 116101115116<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]=</span><span class="default">base10_decode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]); </span><span class="comment">// test<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"corrupted"</span><span class="keyword">]=</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]!==</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]; </span><span class="comment">// false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /></span><span class="comment">// complex unicode test: <br /></span><span class="default">$d</span><span class="keyword">=[];<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]=</span><span class="string">"ˈmaʳkʊs kuːn ℕ ⊆ ℕ₀ ⊂ ℤ ⊂ ℚ ⊂ ℝ ⊂ ℂ, ⊥ &lt; a ≠ b ≡ c ≤ d ≪ ⊤ ⇒ (A ⇔ B), Σὲ γνωρίζω ἀπὸ τὴν κόψη Οὐχὶ ταὐτὰ παρίσταταί გთხოვთ ሰማይ አይታረስ ንጉሥ አይከሰስ ᚻᛖ ᚳᚹᚫᚦ ᚦᚫᛏ ᚻᛖ ᛒᚢᛞᛖ ᚩᚾ ᚦᚫᛗ ᛚᚪᚾᛞᛖ ᚾᚩᚱᚦᚹᛖᚪᚱᛞᚢᛗ ᚹᛁᚦ ᚦᚪ ᚹᛖᛥᚫ "</span><span class="keyword">;<br /></span><span class="comment">// lets add some chess for good measure<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">].=</span><span class="string">"♔♕♖♗♘♙♚♛♜♝♞🙾🙿"</span><span class="keyword">;<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]=</span><span class="default">base10_encode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]); </span><span class="comment">//<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]=</span><span class="default">base10_decode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]);<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"corrupted"</span><span class="keyword">]=</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]!==</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]; </span><span class="comment">// false, base10 is unicode safe :D<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /></span><span class="comment">// binary safety test:<br /></span><span class="default">$everything</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">0xFF</span><span class="keyword">;++</span><span class="default">$i</span><span class="keyword">){<br />    </span><span class="default">$everything</span><span class="keyword">.=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />}<br /></span><span class="default">$d</span><span class="keyword">=[];<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]=</span><span class="default">$everything</span><span class="keyword">;<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]=</span><span class="default">base10_encode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]);<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]=</span><span class="default">base10_decode</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"b10"</span><span class="keyword">]);<br /></span><span class="default">$d</span><span class="keyword">[</span><span class="string">"corrupted"</span><span class="keyword">]=</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"raw"</span><span class="keyword">]!==</span><span class="default">$d</span><span class="keyword">[</span><span class="string">"decoded"</span><span class="keyword">]; </span><span class="comment">// false :D base10 is binary safe.<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$d</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70629">  <div class="votes">
    <div id="Vu70629">
    <a href="/manual/vote-note.php?id=70629&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70629">
    <a href="/manual/vote-note.php?id=70629&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70629" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#70629" class="name">
  <strong class="user"><em>dlyaza aT yahoo DOT com</em></strong></a><a class="genanchor" href="#70629"> &para;</a><div class="date" title="2006-10-22 05:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70629">
<div class="phpcode"><code><span class="html">Using Function:<br />Output for HTML Put:<br />&lt;img src="$self?image=file" border="0" alt="file"&gt;<br />&lt;img src="$self?image=folder" border="0" alt="folder"&gt;<br /><br />function getimage ($image) {<br />    switch ($image) {<br />    case 'file':<br />        return base64_decode('R0lGODlhEQANAJEDAJmZmf///wAAAP///yH5BAHoAwMALAAAA<br />AARAA0AAAItnIGJxg0B42rsiSvCA/REmXQWhmnih3LUSGaqg35vF<br />bSXucbSabunjnMohq8CADsA');<br />    case 'folder':<br />        return base64_decode('R0lGODlhEQANAJEDAJmZmf///8zMzP///yH5BAHoAwMALAAAAA<br />ARAA0AAAIqnI+ZwKwbYgTPtIudlbwLOgCBQJYmCYrn+m3smY5v<br />Gc+0a7dhjh7ZbygAADsA');<br />    case 'hidden_file':<br />        return base64_decode('R0lGODlhEQANAJEDAMwAAP///5mZmf///yH5BAHoAwMALAAAA<br />AARAA0AAAItnIGJxg0B42rsiSvCA/REmXQWhmnih3LUSGaqg35vF<br />bSXucbSabunjnMohq8CADsA');<br />    case 'link':<br />        return base64_decode('R0lGODlhEQANAKIEAJmZmf///wAAAMwAAP///wAAAAAAAAAAA<br />CH5BAHoAwQALAAAAAARAA0AAAM5SArcrDCCQOuLcIotwgTYUll<br />NOA0DxXkmhY4shM5zsMUKTY8gNgUvW6cnAaZgxMyIM2zBLCaHlJgAADsA');<br />    case 'smiley':<br />        return base64_decode('R0lGODlhEQANAJECAAAAAP//AP///wAAACH5BAHoAwIALAAAA<br />AARAA0AAAIslI+pAu2wDAiz0jWD3hqmBzZf1VCleJQch0rkdnppB3<br />dKZuIygrMRE/oJDwUAOwA=');<br />    case 'arrow':<br />        return base64_decode('R0lGODlhEQANAIABAAAAAP///yH5BAEKAAEALAAAAAARAA0AA<br />AIdjA9wy6gNQ4pwUmav0yvn+hhJiI3mCJ6otrIkxxQAOw==');<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="118051">  <div class="votes">
    <div id="Vu118051">
    <a href="/manual/vote-note.php?id=118051&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118051">
    <a href="/manual/vote-note.php?id=118051&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118051" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#118051" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118051"> &para;</a><div class="date" title="2015-09-25 05:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118051">
<div class="phpcode"><code><span class="html">Wikipedia has a list of 8 or so variations on the last 2 characters in Base64  (<a href="https://en.wikipedia.org/wiki/Base64" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/Base64</a>). The following functions can handle all of them:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">base64_encode2</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"+/="</span><span class="keyword">) {<br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    if (</span><span class="default">$l </span><span class="keyword">=== </span><span class="default">3</span><span class="keyword">) {<br />        return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="string">"+/="</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />    } else if (</span><span class="default">$l </span><span class="keyword">=== </span><span class="default">2</span><span class="keyword">) {<br />        return </span><span class="default">rtrim</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">), </span><span class="string">"+/"</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">), </span><span class="string">'='</span><span class="keyword">);<br />    } else {<br />        throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">"Argument #2 must be 2 or 3 bytes."</span><span class="keyword">);<br />    }<br />}<br /><br />function </span><span class="default">base64_decode2</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$strict </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"+/="</span><span class="keyword">) {<br />    </span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    if (</span><span class="default">$l </span><span class="keyword">=== </span><span class="default">3</span><span class="keyword">) {    <br />        return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="string">"+/="</span><span class="keyword">), </span><span class="default">$strict</span><span class="keyword">);<br />    } else if (</span><span class="default">$l </span><span class="keyword">=== </span><span class="default">2</span><span class="keyword">) {<br />        return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="string">"+/"</span><span class="keyword">), </span><span class="default">$strict</span><span class="keyword">);<br />    } else {<br />        throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">"Argument #2 must be 2 or 3 bytes."</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example usage:<br /><br /><span class="default">&lt;?php<br />$decoded </span><span class="keyword">= </span><span class="string">"ABC123"</span><span class="keyword">;<br /><br /></span><span class="comment">// base64 XML identifier:<br /></span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode2</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">"_:"</span><span class="keyword">);<br /></span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode2</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">"_:"</span><span class="keyword">);<br /><br /></span><span class="comment">// base64 URL (RFC 6920):<br />// base64 XML name token:<br /></span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">"-_"</span><span class="keyword">)<br /></span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">"-_"</span><span class="keyword">);<br /><br /></span><span class="comment">// modified base64 XML name token:<br /></span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode2</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">".-"</span><span class="keyword">);<br /></span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode2</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">".-"</span><span class="keyword">);<br /><br /></span><span class="comment">// modified base64 for Regular Expressions:<br /></span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode2</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">"!-"</span><span class="keyword">);<br /></span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode2</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">"!-"</span><span class="keyword">);<br /><br /></span><span class="comment">// base64 used in YUI library:<br /></span><span class="default">$encoded </span><span class="keyword">= </span><span class="default">base64_encode2</span><span class="keyword">(</span><span class="default">$decoded</span><span class="keyword">, </span><span class="string">"._-"</span><span class="keyword">);<br /></span><span class="default">$decoded </span><span class="keyword">= </span><span class="default">base64_decode2</span><span class="keyword">(</span><span class="default">$encoded</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">"._-"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123170">  <div class="votes">
    <div id="Vu123170">
    <a href="/manual/vote-note.php?id=123170&amp;page=function.base64-encode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123170">
    <a href="/manual/vote-note.php?id=123170&amp;page=function.base64-encode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123170" title="30% like this...">
    -4
    </div>
  </div>
  <a href="#123170" class="name">
  <strong class="user"><em>raat1979 at gmail dot com</em></strong></a><a class="genanchor" href="#123170"> &para;</a><div class="date" title="2018-09-29 06:27"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123170">
<div class="phpcode"><code><span class="html">shortest base64url_decode (correct version)<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">base64_urldecode</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">){<br />        return </span><span class="default">base64_decode</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">,</span><span class="string">'-_'</span><span class="keyword">,</span><span class="string">'+/'</span><span class="keyword">).</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, -</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) &amp; </span><span class="default">3</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.base64-encode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.base64-encode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.url.php">URL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.base64-decode.php" title="base64_&#8203;decode">base64_&#8203;decode</a>
                        </li>
                                                <li class="current">
                            <a href="function.base64-encode.php" title="base64_&#8203;encode">base64_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.get-headers.php" title="get_&#8203;headers">get_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.get-meta-tags.php" title="get_&#8203;meta_&#8203;tags">get_&#8203;meta_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.http-build-query.php" title="http_&#8203;build_&#8203;query">http_&#8203;build_&#8203;query</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-url.php" title="parse_&#8203;url">parse_&#8203;url</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurldecode.php" title="rawurldecode">rawurldecode</a>
                        </li>
                                                <li class="">
                            <a href="function.rawurlencode.php" title="rawurlencode">rawurlencode</a>
                        </li>
                                                <li class="">
                            <a href="function.urldecode.php" title="urldecode">urldecode</a>
                        </li>
                                                <li class="">
                            <a href="function.urlencode.php" title="urlencode">urlencode</a>
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
