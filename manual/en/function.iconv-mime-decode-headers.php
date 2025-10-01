<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: iconv_mime_decode_headers - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.iconv-mime-decode-headers.php">
 <link rel="shorturl" href="https://www.php.net/iconv-mime-decode-headers">
 <link rel="alternate" href="https://www.php.net/iconv-mime-decode-headers" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.iconv.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.iconv-mime-decode.php">
 <link rel="next" href="https://www.php.net/manual/en/function.iconv-mime-encode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.iconv-mime-decode-headers.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.iconv-mime-decode-headers.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.iconv-mime-decode-headers.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.iconv-mime-decode-headers.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.iconv-mime-decode-headers.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.iconv-mime-decode-headers.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.iconv-mime-decode-headers.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.iconv-mime-decode-headers.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.iconv-mime-decode-headers.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.iconv-mime-decode-headers.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.iconv-mime-decode-headers.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decodes multiple MIME header fields at once" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: iconv_mime_decode_headers - Manual" />
<meta name="twitter:description" content="Decodes multiple MIME header fields at once" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: iconv_mime_decode_headers - Manual" />
<meta itemprop="description" content="Decodes multiple MIME header fields at once" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decodes multiple MIME header fields at once" />

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
        <a href="function.iconv-mime-encode.php">
          iconv_mime_encode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.iconv-mime-decode.php">
          &laquo; iconv_mime_decode        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.iconv.php'>iconv</a></li>      <li><a href='ref.iconv.php'>iconv Functions</a></li>      </ul>
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
            <option value='en/function.iconv-mime-decode-headers.php' selected="selected">English</option>
            <option value='de/function.iconv-mime-decode-headers.php'>German</option>
            <option value='es/function.iconv-mime-decode-headers.php'>Spanish</option>
            <option value='fr/function.iconv-mime-decode-headers.php'>French</option>
            <option value='it/function.iconv-mime-decode-headers.php'>Italian</option>
            <option value='ja/function.iconv-mime-decode-headers.php'>Japanese</option>
            <option value='pt_BR/function.iconv-mime-decode-headers.php'>Brazilian Portuguese</option>
            <option value='ru/function.iconv-mime-decode-headers.php'>Russian</option>
            <option value='tr/function.iconv-mime-decode-headers.php'>Turkish</option>
            <option value='uk/function.iconv-mime-decode-headers.php'>Ukrainian</option>
            <option value='zh/function.iconv-mime-decode-headers.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.iconv-mime-decode-headers" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">iconv_mime_decode_headers</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_mime_decode_headers</span> &mdash; <span class="dc-title">Decodes multiple <code class="literal">MIME</code> header fields at once</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.iconv-mime-decode-headers-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>iconv_mime_decode_headers</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$headers</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Decodes multiple <code class="literal">MIME</code> header fields at once.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.iconv-mime-decode-headers-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">headers</code></dt>
     <dd>
      <p class="para">
       The encoded headers, as a string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">mode</code> determines the behaviour in the event
       <span class="function"><strong>iconv_mime_decode_headers()</strong></span> encounters a malformed
       <code class="literal">MIME</code> header field. You can specify any combination
       of the following bitmasks.
       <table class="doctable table">
        <caption><strong>Bitmasks acceptable to <span class="function"><strong>iconv_mime_decode_headers()</strong></span></strong></caption>
        
         <thead>
          <tr>
           <th>Value</th>
           <th>Constant</th>
           <th>Description</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>1</td>
           <td>ICONV_MIME_DECODE_STRICT</td>
           <td>
            If set, the given header is decoded in full conformance with the
            standards defined in <a href="https://datatracker.ietf.org/doc/html/rfc2047" class="link external">&raquo;&nbsp;RFC2047</a>.
            This option is disabled by default because there are a lot of
            broken mail user agents that don&#039;t follow the specification and don&#039;t
            produce correct <code class="literal">MIME</code> headers.
           </td>
          </tr>

          <tr>
           <td>2</td>
           <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>
           <td>
            If set, <span class="function"><strong>iconv_mime_decode_headers()</strong></span>
            attempts to ignore any grammatical errors and continue to process
            a given header.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">
       The optional <code class="parameter">encoding</code> parameter specifies the
       character set to represent the result by. If omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
       <a href="iconv.configuration.php" class="link">iconv.internal_encoding</a>
       will be used.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.iconv-mime-decode-headers-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an associative array that holds a whole set of
   <code class="literal">MIME</code> header fields specified by
   <code class="parameter">headers</code> on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   if an error occurs during the decoding.
  </p>
  <p class="para">
   Each key of the return value represents an individual
   field name and the corresponding element represents a field value.
   If more than one field of the same name are present,
   <span class="function"><strong>iconv_mime_decode_headers()</strong></span> automatically incorporates
   them into a numerically indexed array in the order of occurrence.
   Note that header names are not <em>case-insensitive</em>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.iconv-mime-decode-headers-changelog">
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
       <code class="parameter">encoding</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.iconv-mime-decode-headers-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-2468">
    <p><strong>Example #1 <span class="function"><strong>iconv_mime_decode_headers()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$headers_string </span><span style="color: #007700">= &lt;&lt;&lt;EOF<br /></span><span style="color: #DD0000">Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?=<br />To: example@example.com<br />Date: Thu, 1 Jan 1970 00:00:00 +0000<br />Message-Id: &lt;example@example.com&gt;<br />Received: from localhost (localhost [127.0.0.1]) by localhost<br />    with SMTP id example for &lt;example@example.com&gt;;<br />    Thu, 1 Jan 1970 00:00:00 +0000 (UTC)<br />    (envelope-from example-return-0000-example=example.com@example.com)<br />Received: (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000<br /><br /></span><span style="color: #007700">EOF;<br /><br /></span><span style="color: #0000BB">$headers </span><span style="color: #007700">=  </span><span style="color: #0000BB">iconv_mime_decode_headers</span><span style="color: #007700">(</span><span style="color: #0000BB">$headers_string</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$headers</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [Subject] =&gt; Prüfung Prüfung
    [To] =&gt; example@example.com
    [Date] =&gt; Thu, 1 Jan 1970 00:00:00 +0000
    [Message-Id] =&gt; &lt;example@example.com&gt;
    [Received] =&gt; Array
        (
            [0] =&gt; from localhost (localhost [127.0.0.1]) by localhost with SMTP id example for &lt;example@example.com&gt;; Thu, 1 Jan 1970 00:00:00 +0000 (UTC) (envelope-from example-return-0000-example=example.com@example.com)
            [1] =&gt; (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.iconv-mime-decode-headers-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.iconv-mime-decode.php" class="function" rel="rdfs-seeAlso">iconv_mime_decode()</a> - Decodes a MIME header field</span></li>
    <li><span class="function"><a href="function.mb-decode-mimeheader.php" class="function" rel="rdfs-seeAlso">mb_decode_mimeheader()</a> - Decode string in MIME header field</span></li>
    <li><span class="function"><a href="function.imap-mime-header-decode.php" class="function" rel="rdfs-seeAlso">imap_mime_header_decode()</a> - Decode MIME header elements</span></li>
    <li><span class="function"><a href="function.imap-base64.php" class="function" rel="rdfs-seeAlso">imap_base64()</a> - Decode BASE64 encoded text</span></li>
    <li><span class="function"><a href="function.imap-qprint.php" class="function" rel="rdfs-seeAlso">imap_qprint()</a> - Convert a quoted-printable string to an 8 bit string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/iconv/functions/iconv-mime-decode-headers.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.iconv-mime-decode-headers%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.iconv-mime-decode-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-mime-decode-headers.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="129890">  <div class="votes">
    <div id="Vu129890">
    <a href="/manual/vote-note.php?id=129890&amp;page=function.iconv-mime-decode-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129890">
    <a href="/manual/vote-note.php?id=129890&amp;page=function.iconv-mime-decode-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129890" title="no votes...">
    0
    </div>
  </div>
  <a href="#129890" class="name">
  <strong class="user"><em>phpmanual at NOSPAM dot headbank dot co dot uk</em></strong></a><a class="genanchor" href="#129890"> &para;</a><div class="date" title="2024-11-29 06:25"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129890">
<div class="phpcode"><code><span class="html">Just in case this catches anyone else: If your headers string has any leading linebreaks, this function will reject it and return an empty array. If that might apply to your input, sanitise it with ltrim().<br /><br />Trailing empty lines are tolerated/ignored.<br /><br />Other quirks I noticed just now:<br /><br />1. Leading whitespace (" " or "\t") in the *first* line will be included in the header's key name in the returned array. ltrim() will prevent that too.<br /><br />2. Leading whitespace in any subsequent header (before the key) will cause that line to be appended to the preceding header's value, as though it were a run-on of that header.</span></code></div>
  </div>
 </div>
  <div class="note" id="98864">  <div class="votes">
    <div id="Vu98864">
    <a href="/manual/vote-note.php?id=98864&amp;page=function.iconv-mime-decode-headers&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98864">
    <a href="/manual/vote-note.php?id=98864&amp;page=function.iconv-mime-decode-headers&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98864" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98864" class="name">
  <strong class="user"><em>TheConstructor</em></strong></a><a class="genanchor" href="#98864"> &para;</a><div class="date" title="2010-07-12 12:07"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98864">
<div class="phpcode"><code><span class="html">If you need lower-case header-names (as I read the documentation case is not guranteed) try something like<br /><br /><span class="default">&lt;?php<br /><br />$headers_string </span><span class="keyword">= &lt;&lt;&lt;EOF<br /></span><span class="string">Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?=<br />To: example@example.com<br />Date: Thu, 1 Jan 1970 00:00:00 +0000<br />Message-Id: &lt;example@example.com&gt;<br />Received: from localhost (localhost [127.0.0.1]) by localhost<br />    with SMTP id example for &lt;example@example.com&gt;;<br />    Thu, 1 Jan 1970 00:00:00 +0000 (UTC)<br />    (envelope-from example-return-0000-example=example.com@example.com)<br />Received: (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000<br /><br /></span><span class="keyword">EOF;<br /><br /></span><span class="default">$headers </span><span class="keyword">=  </span><span class="default">iconv_mime_decode_headers</span><span class="keyword">(</span><span class="default">$headers_string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="string">"ISO-8859-1"</span><span class="keyword">);<br /><br /></span><span class="default">$headers </span><span class="keyword">= </span><span class="default">array_combine</span><span class="keyword">(</span><span class="default">array_map</span><span class="keyword">(</span><span class="string">"strtolower"</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">)), </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">));<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.iconv-mime-decode-headers&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.iconv-mime-decode-headers.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.iconv.php">iconv Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.iconv.php" title="iconv">iconv</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-get-encoding.php" title="iconv_&#8203;get_&#8203;encoding">iconv_&#8203;get_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-decode.php" title="iconv_&#8203;mime_&#8203;decode">iconv_&#8203;mime_&#8203;decode</a>
                        </li>
                                                <li class="current">
                            <a href="function.iconv-mime-decode-headers.php" title="iconv_&#8203;mime_&#8203;decode_&#8203;headers">iconv_&#8203;mime_&#8203;decode_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-mime-encode.php" title="iconv_&#8203;mime_&#8203;encode">iconv_&#8203;mime_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-set-encoding.php" title="iconv_&#8203;set_&#8203;encoding">iconv_&#8203;set_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strlen.php" title="iconv_&#8203;strlen">iconv_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strpos.php" title="iconv_&#8203;strpos">iconv_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-strrpos.php" title="iconv_&#8203;strrpos">iconv_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.iconv-substr.php" title="iconv_&#8203;substr">iconv_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.ob-iconv-handler.php" title="ob_&#8203;iconv_&#8203;handler">ob_&#8203;iconv_&#8203;handler</a>
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
