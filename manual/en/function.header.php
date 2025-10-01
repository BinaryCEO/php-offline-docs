<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: header - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.header.php">
 <link rel="shorturl" href="https://www.php.net/header">
 <link rel="alternate" href="https://www.php.net/header" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.getservbyport.php">
 <link rel="next" href="https://www.php.net/manual/en/function.header-register-callback.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.header.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.header.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.header.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.header.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.header.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.header.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.header.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.header.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.header.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.header.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.header.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send a raw HTTP header" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: header - Manual" />
<meta name="twitter:description" content="Send a raw HTTP header" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: header - Manual" />
<meta itemprop="description" content="Send a raw HTTP header" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send a raw HTTP header" />

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
        <a href="function.header-register-callback.php">
          header_register_callback &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.getservbyport.php">
          &laquo; getservbyport        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.network.php'>Network</a></li>      <li><a href='ref.network.php'>Network Functions</a></li>      </ul>
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
            <option value='en/function.header.php' selected="selected">English</option>
            <option value='de/function.header.php'>German</option>
            <option value='es/function.header.php'>Spanish</option>
            <option value='fr/function.header.php'>French</option>
            <option value='it/function.header.php'>Italian</option>
            <option value='ja/function.header.php'>Japanese</option>
            <option value='pt_BR/function.header.php'>Brazilian Portuguese</option>
            <option value='ru/function.header.php'>Russian</option>
            <option value='tr/function.header.php'>Turkish</option>
            <option value='uk/function.header.php'>Ukrainian</option>
            <option value='zh/function.header.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.header" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">header</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">header</span> &mdash; <span class="dc-title">Send a raw HTTP header</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.header-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>header</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$header</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$replace</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$response_code</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>header()</strong></span> is used to send a raw <abbr title="Hypertext Transfer Protocol">HTTP</abbr>
   header. See the <a href="https://datatracker.ietf.org/doc/html/rfc2616" class="link external">&raquo;&nbsp;HTTP/1.1 specification</a>
   for more information on <abbr title="Hypertext Transfer Protocol">HTTP</abbr> headers.
  </p>
  <p class="para">
   Remember that <span class="function"><strong>header()</strong></span> must be called before any
   actual output is sent, either by normal HTML tags, blank lines in a
   file, or from PHP. It is a very common error to read code with
   <span class="function"><a href="function.include.php" class="function">include</a></span>, or <span class="function"><a href="function.require.php" class="function">require</a></span>,
   functions, or another file access function, and have spaces or empty
   lines that are output before <span class="function"><strong>header()</strong></span> is called.
   The same problem exists when using a single PHP/HTML file.
   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">&lt;html&gt;<br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* This will give an error. Note the output<br /> * above, which is before the header() call */<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Location: http://www.example.com/'</span><span style="color: #007700">);<br />exit;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.header-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">header</code></dt>
     <dd>
      <p class="para">
       The header string.
      </p>
      <p class="para">
       There are two special-case header calls.  The first is a header
       that starts with the string &quot;<code class="literal">HTTP/</code>&quot; (case is not
       significant), which will be used to figure out the HTTP status
       code to send. For example, if you have configured Apache to
       use a PHP script to handle requests for missing files (using
       the <code class="literal">ErrorDocument</code> directive), you may want to
       make sure that your script generates the proper status code.
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This example illustrates the "HTTP/" special case<br />// Better alternatives in typical use cases include:<br />// 1. header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");<br />//    (to override http status messages for clients that are still using HTTP/1.0)<br />// 2. http_response_code(404); (to use the default message)<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"HTTP/1.1 404 Not Found"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
      <p class="para">
       The second special case is the &quot;Location:&quot; header.  Not only does
       it send this header back to the browser, but it also returns a
       <code class="literal">REDIRECT</code> (302) status code to the browser
       unless the <code class="literal">201</code> or
       a <code class="literal">3xx</code> status code has already been set.
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Location: http://www.example.com/"</span><span style="color: #007700">); </span><span style="color: #FF8000">/* Redirect browser */<br /><br />/* Make sure that code below does not get executed when we redirect. */<br /></span><span style="color: #007700">exit;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
    
     <dt><code class="parameter">replace</code></dt>
     <dd>
      <p class="para">
       The optional <code class="parameter">replace</code> parameter indicates
       whether the header should replace a previous similar header, or
       add a second header of the same type.  By default it will replace,
       but if you pass in <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> as the second argument you can force
       multiple headers of the same type.  For example:
      </p>
      <p class="para">
       <div class="informalexample">
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">'WWW-Authenticate: Negotiate'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'WWW-Authenticate: NTLM'</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
    
     <dt><code class="parameter">response_code</code></dt>
     <dd>
      <p class="para">
       Forces the HTTP response code to the specified value. Note that this
       parameter only has an effect if the <code class="parameter">header</code> is
       not empty.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.header-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.header-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   On failure to schedule the header to be sent, <span class="function"><strong>header()</strong></span>
   issues an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> level error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.header-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4725">
    <p><strong>Example #1 Download dialog</strong></p>
    <div class="example-contents"><p>
     If you want the user to be prompted to save the data you are
     sending, such as a generated PDF file, you can use the <a href="https://datatracker.ietf.org/doc/html/rfc2183" class="link external">&raquo;&nbsp;Content-Disposition</a> header to
     supply a recommended filename and force the browser to display the
     save dialog.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// We'll be outputting a PDF<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Type: application/pdf'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// It will be called downloaded.pdf<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Content-Disposition: attachment; filename="downloaded.pdf"'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The PDF source is in original.pdf<br /></span><span style="color: #0000BB">readfile</span><span style="color: #007700">(</span><span style="color: #DD0000">'original.pdf'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4726">
    <p><strong>Example #2 Caching directives</strong></p>
    <div class="example-contents"><p>
     PHP scripts often generate dynamic content that must not be cached
     by the client browser or any proxy caches between the server and the
     client browser. Many proxies and clients can be forced to disable
     caching with:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Cache-Control: no-cache, must-revalidate"</span><span style="color: #007700">); </span><span style="color: #FF8000">// HTTP/1.1<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Expires: Sat, 26 Jul 1997 05:00:00 GMT"</span><span style="color: #007700">); </span><span style="color: #FF8000">// Date in the past<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <p class="para">
       You may find that your pages aren&#039;t cached even if you don&#039;t
       output all of the headers above. There are a number of options
       that users may be able to set for their browser that change its
       default caching behavior. By sending the headers above, you should
       override any settings that may otherwise cause the output of your
       script to be cached.
      </p>
      <p class="para">
       Additionally, <span class="function"><a href="function.session-cache-limiter.php" class="function">session_cache_limiter()</a></span> and
       the <code class="literal">session.cache_limiter</code> configuration
       setting can be used to automatically generate the correct
       caching-related headers when sessions are being used.
      </p>
     </p></blockquote>
    </p></div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4727">
    <p><strong>Example #3 Setting a cookie</strong></p>
    <div class="example-contents"><p>
     <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span> provides a convenient way to set cookies.
     To set a cookie that includes attributes which <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span>
     doesn&#039;t support, <span class="function"><strong>header()</strong></span> can be used.
    </p></div>
    <div class="example-contents"><p>
     For example, the following sets a cookie that includes a
     <code class="literal">Partitioned</code> attribute.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />header</span><span style="color: #007700">(</span><span style="color: #DD0000">'Set-Cookie: name=value; Secure; Path=/; SameSite=None; Partitioned;'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.header-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Headers will only be accessible and output when a SAPI that supports them
    is in use.
   </p>
  </p></blockquote>

  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You can use output buffering to get around this problem,
    with the overhead of all of your output to the browser being buffered
    in the server until you send it. You can do this by calling
    <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span> and <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span>
    in your script, or setting the <code class="literal">output_buffering</code>
    configuration directive on in your <var class="filename">php.ini</var> or
    server configuration files.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The HTTP status header line will always be the first sent
    to the client, regardless of the actual <span class="function"><strong>header()</strong></span>
    call being the first or not. The status may be overridden
    by calling <span class="function"><strong>header()</strong></span> with a new status line
    at any time unless the HTTP headers have already been sent.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Most contemporary clients accept relative <abbr title="Uniform Resource Identifier">URI</abbr>s as argument to
    <a href="http://tools.ietf.org/html/rfc7231#section-7.1.2" class="link external">&raquo;&nbsp;Location:</a>,
    but some older clients require an absolute URI
    including the scheme, hostname and absolute path. You can usually use
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['HTTP_HOST']</a></var>,
    <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER['PHP_SELF']</a></var>
    and <span class="function"><a href="function.dirname.php" class="function">dirname()</a></span> to make an absolute URI from a
    relative one yourself:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Redirect to a different page in the current directory that was requested */<br /></span><span style="color: #0000BB">$host  </span><span style="color: #007700">= </span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'HTTP_HOST'</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$uri   </span><span style="color: #007700">= </span><span style="color: #0000BB">rtrim</span><span style="color: #007700">(</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">$_SERVER</span><span style="color: #007700">[</span><span style="color: #DD0000">'PHP_SELF'</span><span style="color: #007700">]), </span><span style="color: #DD0000">'/\\'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$extra </span><span style="color: #007700">= </span><span style="color: #DD0000">'mypage.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">header</span><span style="color: #007700">(</span><span style="color: #DD0000">"Location: http://</span><span style="color: #0000BB">$host$uri</span><span style="color: #DD0000">/</span><span style="color: #0000BB">$extra</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br />exit;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Session ID is not passed with Location header even if <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a> is
    enabled. It must by passed manually using <strong><code><a href="session.constants.php#constant.sid">SID</a></code></strong>
    constant.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.header-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.headers-sent.php" class="function" rel="rdfs-seeAlso">headers_sent()</a> - Checks if or where headers have been sent</span></li>
    <li><span class="function"><a href="function.setcookie.php" class="function" rel="rdfs-seeAlso">setcookie()</a> - Send a cookie</span></li>
    <li><span class="function"><a href="function.http-response-code.php" class="function" rel="rdfs-seeAlso">http_response_code()</a> - Get or Set the HTTP response code</span></li>
    <li><span class="function"><a href="function.header-remove.php" class="function" rel="rdfs-seeAlso">header_remove()</a> - Remove previously set headers</span></li>
    <li><span class="function"><a href="function.headers-list.php" class="function" rel="rdfs-seeAlso">headers_list()</a> - Returns a list of response headers sent (or ready to send)</span></li>
    <li>
     The section on <a href="features.http-auth.php" class="link">HTTP
     authentication</a>
    </li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/header.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.header%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.header&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.header.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">26 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92305">  <div class="votes">
    <div id="Vu92305">
    <a href="/manual/vote-note.php?id=92305&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92305">
    <a href="/manual/vote-note.php?id=92305&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92305" title="69% like this...">
    245
    </div>
  </div>
  <a href="#92305" class="name">
  <strong class="user"><em>mjt at jpeto dot net</em></strong></a><a class="genanchor" href="#92305"> &para;</a><div class="date" title="2009-07-17 11:01"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92305">
<div class="phpcode"><code><span class="html">I strongly recommend, that you use
<br />
<br />header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
<br />
<br />instead of 
<br />
<br />header("HTTP/1.1 404 Not Found");
<br />
<br />I had big troubles with an Apache/2.0.59 (Unix) answering in HTTP/1.0 while I (accidentially) added a "HTTP/1.1 200 Ok" - Header.
<br />
<br />Most of the pages were displayed correct, but on some of them apache added weird content to it:
<br />
<br />A 4-digits HexCode on top of the page (before any output of my php script), seems to be some kind of checksum, because it changes from page to page and browser to browser. (same code for same page and browser)
<br />
<br />"0" at the bottom of the page (after the complete output of my php script) 
<br />
<br />It took me quite a while to find out about the wrong protocol in the HTTP-header.</span></code></div>
  </div>
 </div>
  <div class="note" id="97114">  <div class="votes">
    <div id="Vu97114">
    <a href="/manual/vote-note.php?id=97114&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97114">
    <a href="/manual/vote-note.php?id=97114&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97114" title="68% like this...">
    168
    </div>
  </div>
  <a href="#97114" class="name">
  <strong class="user"><em>Marcel G</em></strong></a><a class="genanchor" href="#97114"> &para;</a><div class="date" title="2010-04-01 06:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97114">
<div class="phpcode"><code><span class="html">Several times this one is asked on the net but an answer could not be found in the docs on php.net ...
<br />
<br />If you want to redirect an user and tell him he will be redirected, e. g. "You will be redirected in about 5 secs. If not, click here." you cannot use header( 'Location: ...' ) as you can't sent any output before the headers are sent.
<br />
<br />So, either you have to use the HTML meta refresh thingy or you use the following:
<br />
<br /><span class="default">&lt;?php
<br />  header</span><span class="keyword">( </span><span class="string">"refresh:5;url=wherever.php" </span><span class="keyword">);
<br />  echo </span><span class="string">'You\'ll be redirected in about 5 secs. If not, click &lt;a href="wherever.php"&gt;here&lt;/a&gt;.'</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hth someone</span></code></div>
  </div>
 </div>
  <div class="note" id="78470">  <div class="votes">
    <div id="Vu78470">
    <a href="/manual/vote-note.php?id=78470&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78470">
    <a href="/manual/vote-note.php?id=78470&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78470" title="63% like this...">
    93
    </div>
  </div>
  <a href="#78470" class="name">
  <strong class="user"><em>Dylan at WeDefy dot com</em></strong></a><a class="genanchor" href="#78470"> &para;</a><div class="date" title="2007-10-13 08:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78470">
<div class="phpcode"><code><span class="html">A quick way to make redirects permanent or temporary is to make use of the $http_response_code parameter in header().<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// 301 Moved Permanently<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /foo.php"</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">,</span><span class="default">301</span><span class="keyword">);<br /><br /></span><span class="comment">// 302 Found<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /foo.php"</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">,</span><span class="default">302</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /foo.php"</span><span class="keyword">);<br /><br /></span><span class="comment">// 303 See Other<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /foo.php"</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">,</span><span class="default">303</span><span class="keyword">);<br /><br /></span><span class="comment">// 307 Temporary Redirect<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Location: /foo.php"</span><span class="keyword">,</span><span class="default">TRUE</span><span class="keyword">,</span><span class="default">307</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The HTTP status code changes the way browsers and robots handle redirects, so if you are using header(Location:) it's a good idea to set the status code at the same time.  Browsers typically re-request a 307 page every time, cache a 302 page for the session, and cache a 301 page for longer, or even indefinitely.  Search engines typically transfer "page rank" to the new location for 301 redirects, but not for 302, 303 or 307. If the status code is not specified, header('Location:') defaults to 302.</span></code></div>
  </div>
 </div>
  <div class="note" id="61903">  <div class="votes">
    <div id="Vu61903">
    <a href="/manual/vote-note.php?id=61903&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61903">
    <a href="/manual/vote-note.php?id=61903&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61903" title="61% like this...">
    42
    </div>
  </div>
  <a href="#61903" class="name">
  <strong class="user"><em>mandor at mandor dot net</em></strong></a><a class="genanchor" href="#61903"> &para;</a><div class="date" title="2006-02-14 05:14"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61903">
<div class="phpcode"><code><span class="html">When using PHP to output an image, it won't be cached by the client so if you don't want them to download the image each time they reload the page, you will need to emulate part of the HTTP protocol.<br /><br />Here's how:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Test image.<br />    </span><span class="default">$fn </span><span class="keyword">= </span><span class="string">'/test/foo.png'</span><span class="keyword">;<br /><br />    </span><span class="comment">// Getting headers sent by the client.<br />    </span><span class="default">$headers </span><span class="keyword">= </span><span class="default">apache_request_headers</span><span class="keyword">(); <br /><br />    </span><span class="comment">// Checking if the client is validating his cache and if it is current.<br />    </span><span class="keyword">if (isset(</span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'If-Modified-Since'</span><span class="keyword">]) &amp;&amp; (</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$headers</span><span class="keyword">[</span><span class="string">'If-Modified-Since'</span><span class="keyword">]) == </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">))) {<br />        </span><span class="comment">// Client's cache IS current, so we just respond '304 Not Modified'.<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Last-Modified: '</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">'D, d M Y H:i:s'</span><span class="keyword">, </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">)).</span><span class="string">' GMT'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">304</span><span class="keyword">);<br />    } else {<br />        </span><span class="comment">// Image not cached or cache outdated, we respond '200 OK' and output the image.<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Last-Modified: '</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">'D, d M Y H:i:s'</span><span class="keyword">, </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">)).</span><span class="string">' GMT'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">);<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: '</span><span class="keyword">.</span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">));<br />        </span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: image/png'</span><span class="keyword">);<br />        print </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$fn</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />That way foo.png will be properly cached by the client and you'll save bandwith. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="124489">  <div class="votes">
    <div id="Vu124489">
    <a href="/manual/vote-note.php?id=124489&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124489">
    <a href="/manual/vote-note.php?id=124489&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124489" title="63% like this...">
    12
    </div>
  </div>
  <a href="#124489" class="name">
  <strong class="user"><em>php at ober-mail dot de</em></strong></a><a class="genanchor" href="#124489"> &para;</a><div class="date" title="2019-12-07 02:14"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124489">
<div class="phpcode"><code><span class="html">Since PHP 5.4, the function `http_​response_​code()` can be used to set the response code instead of using the `header()` function, which requires to also set the correct protocol version (which can lead to problems, as seen in other comments).</span></code></div>
  </div>
 </div>
  <div class="note" id="87449">  <div class="votes">
    <div id="Vu87449">
    <a href="/manual/vote-note.php?id=87449&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87449">
    <a href="/manual/vote-note.php?id=87449&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87449" title="59% like this...">
    30
    </div>
  </div>
  <a href="#87449" class="name">
  <strong class="user"><em>bebertjean at yahoo dot fr</em></strong></a><a class="genanchor" href="#87449"> &para;</a><div class="date" title="2008-12-05 05:46"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87449">
<div class="phpcode"><code><span class="html">If using the 'header' function for the downloading of files, especially if you're passing the filename as a variable, remember to surround the filename with double quotes, otherwise you'll have problems in Firefox as soon as there's a space in the filename.<br /><br />So instead of typing:<br /><br /><span class="default">&lt;?php<br />  header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=" </span><span class="keyword">. </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />you should type:<br /><br /><span class="default">&lt;?php<br />  header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\"" </span><span class="keyword">. </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">) . </span><span class="string">"\""</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If you don't do this then when the user clicks on the link for a file named "Example file with spaces.txt", then Firefox's Save As dialog box will give it the name "Example", and it will have no extension.<br /><br />See the page called "Filenames_with_spaces_are_truncated_upon_download" at <br /><a href="http://kb.mozillazine.org/" rel="nofollow" target="_blank">http://kb.mozillazine.org/</a> for more information. (Sorry, the site won't let me post such a long link...)</span></code></div>
  </div>
 </div>
  <div class="note" id="128626">  <div class="votes">
    <div id="Vu128626">
    <a href="/manual/vote-note.php?id=128626&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128626">
    <a href="/manual/vote-note.php?id=128626&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128626" title="58% like this...">
    4
    </div>
  </div>
  <a href="#128626" class="name">
  <strong class="user"><em>Emmanuel Chazard</em></strong></a><a class="genanchor" href="#128626"> &para;</a><div class="date" title="2023-06-20 01:44"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128626">
<div class="phpcode"><code><span class="html">If you use header() to allow the user to download a file, it's very important to check the encoding of the script itself. Your script should be encoded in UTF-8, but definitely not in UTF-8-BOM! The presence of BOM will alter the file received by the user. Let the following script: <br /><br /><span class="default">&lt;?php <br /><br />$content </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'test_download.png'</span><span class="keyword">) ;<br /></span><span class="default">$name </span><span class="keyword">= </span><span class="string">'test.png' </span><span class="keyword">;<br /></span><span class="default">$size </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">) ;<br />    <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Description: File Transfer'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/octet-stream'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Cache-Control: no-cache, must-revalidate'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Expires: 0'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Disposition: attachment; filename="'</span><span class="keyword">.</span><span class="default">$name</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Length: ' </span><span class="keyword">. </span><span class="default">$size</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Pragma: public'</span><span class="keyword">);<br /><br />echo </span><span class="default">$content </span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Irrespectively from the encoding of test_download.png, when this PHP script is encoded in UTF-8-BOM, the content received by the user is different: <br />- a ZWNBSP byte (U+FEFF) is added to the beginning of the file<br />- the file content is truncated!!!<br />If it's a binary file (e.g. image, proprietary format), the file will become unreadable.</span></code></div>
  </div>
 </div>
  <div class="note" id="126235">  <div class="votes">
    <div id="Vu126235">
    <a href="/manual/vote-note.php?id=126235&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126235">
    <a href="/manual/vote-note.php?id=126235&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126235" title="58% like this...">
    3
    </div>
  </div>
  <a href="#126235" class="name">
  <strong class="user"><em>David Spector</em></strong></a><a class="genanchor" href="#126235"> &para;</a><div class="date" title="2021-07-12 12:07"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126235">
<div class="phpcode"><code><span class="html">Please note that there is no error checking for the header command, either in PHP, browsers, or Web Developer Tools.<br /><br />If you use something like "header('text/javascript');" to set the MIME type for PHP response text (such as for echoed or Included data), you will get an undiagnosed failure.<br /><br />The proper MIME-setting function is "header('Content-type: text/javascript');".</span></code></div>
  </div>
 </div>
  <div class="note" id="85146">  <div class="votes">
    <div id="Vu85146">
    <a href="/manual/vote-note.php?id=85146&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85146">
    <a href="/manual/vote-note.php?id=85146&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85146" title="55% like this...">
    12
    </div>
  </div>
  <a href="#85146" class="name">
  <strong class="user"><em>sk89q</em></strong></a><a class="genanchor" href="#85146"> &para;</a><div class="date" title="2008-08-16 11:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85146">
<div class="phpcode"><code><span class="html">You can use HTTP's etags and last modified dates to ensure that you're not sending the browser data it already has cached.
<br />
<br /><span class="default">&lt;?php
<br />$last_modified_time </span><span class="keyword">= </span><span class="default">filemtime</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br /></span><span class="default">$etag </span><span class="keyword">= </span><span class="default">md5_file</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);
<br />
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Last-Modified: "</span><span class="keyword">.</span><span class="default">gmdate</span><span class="keyword">(</span><span class="string">"D, d M Y H:i:s"</span><span class="keyword">, </span><span class="default">$last_modified_time</span><span class="keyword">).</span><span class="string">" GMT"</span><span class="keyword">);
<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Etag: </span><span class="default">$etag</span><span class="string">"</span><span class="keyword">);
<br />
<br />if (@</span><span class="default">strtotime</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_IF_MODIFIED_SINCE'</span><span class="keyword">]) == </span><span class="default">$last_modified_time </span><span class="keyword">||
<br />    </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_IF_NONE_MATCH'</span><span class="keyword">]) == </span><span class="default">$etag</span><span class="keyword">) {
<br />    </span><span class="default">header</span><span class="keyword">(</span><span class="string">"HTTP/1.1 304 Not Modified"</span><span class="keyword">);
<br />    exit;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121642">  <div class="votes">
    <div id="Vu121642">
    <a href="/manual/vote-note.php?id=121642&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121642">
    <a href="/manual/vote-note.php?id=121642&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121642" title="55% like this...">
    7
    </div>
  </div>
  <a href="#121642" class="name">
  <strong class="user"><em>David</em></strong></a><a class="genanchor" href="#121642"> &para;</a><div class="date" title="2017-09-15 04:26"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121642">
<div class="phpcode"><code><span class="html">It seems the note saying the URI must be absolute is obsolete. Found on <a href="https://en.wikipedia.org/wiki/HTTP_location" rel="nofollow" target="_blank">https://en.wikipedia.org/wiki/HTTP_location</a><br /><br />«An obsolete version of the HTTP 1.1 specifications (IETF RFC 2616) required a complete absolute URI for redirection.[2] The IETF HTTP working group found that the most popular web browsers tolerate the passing of a relative URL[3] and, consequently, the updated HTTP 1.1 specifications (IETF RFC 7231) relaxed the original constraint, allowing the use of relative URLs in Location headers.»</span></code></div>
  </div>
 </div>
  <div class="note" id="119014">  <div class="votes">
    <div id="Vu119014">
    <a href="/manual/vote-note.php?id=119014&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119014">
    <a href="/manual/vote-note.php?id=119014&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119014" title="55% like this...">
    7
    </div>
  </div>
  <a href="#119014" class="name">
  <strong class="user"><em>nospam at nospam dot com</em></strong></a><a class="genanchor" href="#119014"> &para;</a><div class="date" title="2016-03-17 08:50"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119014">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">// Response codes behaviors when using <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: /target.php'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">$code</span><span class="keyword">) </span><span class="default">to forward user to another page</span><span class="keyword">:<br /><br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">301</span><span class="keyword">;<br /></span><span class="comment">// Use when the old page has been "permanently moved and any future requests should be sent to the target page instead. PageRank may be transferred."<br /><br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">302</span><span class="keyword">; (default)<br /></span><span class="comment">// "Temporary redirect so page is only cached if indicated by a Cache-Control or Expires header field."<br /><br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">303</span><span class="keyword">;<br /></span><span class="comment">// "This method exists primarily to allow the output of a POST-activated script to redirect the user agent to a selected resource. The new URI is not a substitute reference for the originally requested resource and is not cached."<br /><br /></span><span class="default">$code </span><span class="keyword">= </span><span class="default">307</span><span class="keyword">;<br /></span><span class="comment">// Beware that when used after a form is submitted using POST, it would carry over the posted values to the next page, such if target.php contains a form processing script, it will process the submitted info again!<br /><br />// In other words, use 301 if permanent, 302 if temporary, and 303 if a results page from a submitted form.<br />// Maybe use 307 if a form processing script has moved.<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118684">  <div class="votes">
    <div id="Vu118684">
    <a href="/manual/vote-note.php?id=118684&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118684">
    <a href="/manual/vote-note.php?id=118684&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118684" title="55% like this...">
    8
    </div>
  </div>
  <a href="#118684" class="name">
  <strong class="user"><em>yjf_victor</em></strong></a><a class="genanchor" href="#118684"> &para;</a><div class="date" title="2016-01-19 02:23"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118684">
<div class="phpcode"><code><span class="html">According to the RFC 6226 (<a href="https://tools.ietf.org/html/rfc6266" rel="nofollow" target="_blank">https://tools.ietf.org/html/rfc6266</a>), the only way to send Content-Disposition Header with encoding is:<br /><br />Content-Disposition: attachment;<br />                          filename*= UTF-8''%e2%82%ac%20rates<br /><br />for backward compatibility, what should be sent is:<br /><br />Content-Disposition: attachment;<br />                          filename="EURO rates";<br />                          filename*=utf-8''%e2%82%ac%20rates<br /><br />As a result, we should use<br /><br /><span class="default">&lt;?php<br />$filename </span><span class="keyword">= </span><span class="string">'中文文件名.exe'</span><span class="keyword">;   </span><span class="comment">// a filename in Chinese characters<br /><br /></span><span class="default">$contentDispositionField </span><span class="keyword">= </span><span class="string">'Content-Disposition: attachment; '<br />    </span><span class="keyword">. </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'filename="%s"; '</span><span class="keyword">, </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">))<br />    . </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"filename*=utf-8''%s"</span><span class="keyword">, </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">));<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-Type: application/octet-stream'</span><span class="keyword">);<br /><br /></span><span class="default">header</span><span class="keyword">(</span><span class="default">$contentDispositionField</span><span class="keyword">);<br /><br /></span><span class="default">readfile</span><span class="keyword">(</span><span class="string">'file_to_download.exe'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />I have tested the code in IE6-10, firefox and Chrome.</span></code></div>
  </div>
 </div>
  <div class="note" id="122405">  <div class="votes">
    <div id="Vu122405">
    <a href="/manual/vote-note.php?id=122405&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122405">
    <a href="/manual/vote-note.php?id=122405&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122405" title="55% like this...">
    5
    </div>
  </div>
  <a href="#122405" class="name">
  <strong class="user"><em>tim at sharpwebdevelopment dot com</em></strong></a><a class="genanchor" href="#122405"> &para;</a><div class="date" title="2018-02-19 03:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122405">
<div class="phpcode"><code><span class="html">The header call can be misleading to novice php users.<br />when "header call" is stated, it refers the the top leftmost position of the file and not the "header()" function itself.<br />"&lt;?php" opening tag must be placed before anything else, even whitespace.</span></code></div>
  </div>
 </div>
  <div class="note" id="108766">  <div class="votes">
    <div id="Vu108766">
    <a href="/manual/vote-note.php?id=108766&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108766">
    <a href="/manual/vote-note.php?id=108766&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108766" title="54% like this...">
    9
    </div>
  </div>
  <a href="#108766" class="name">
  <strong class="user"><em>ben at indietorrent dot org</em></strong></a><a class="genanchor" href="#108766"> &para;</a><div class="date" title="2012-05-23 05:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108766">
<div class="phpcode"><code><span class="html">Be aware that sending binary files to the user-agent (browser) over an encrypted connection (SSL/TLS) will fail in IE (Internet Explorer) versions 5, 6, 7, and 8 if any of the following headers is included:<br /><br />Cache-control:no-store<br />Cache-control:no-cache<br /><br />See: <a href="http://support.microsoft.com/kb/323308" rel="nofollow" target="_blank">http://support.microsoft.com/kb/323308</a><br /><br />Workaround: do not send those headers.<br /><br />Also, be aware that IE versions 5, 6, 7, and 8 double-compress already-compressed files and do not reverse the process correctly, so ZIP files and similar are corrupted on download.<br /><br />Workaround: disable compression (beyond text/html) for these particular versions of IE, e.g., using Apache's "BrowserMatch" directive. The following example disables compression in all versions of IE:<br /><br />BrowserMatch ".*MSIE.*" gzip-only-text/html</span></code></div>
  </div>
 </div>
  <div class="note" id="120498">  <div class="votes">
    <div id="Vu120498">
    <a href="/manual/vote-note.php?id=120498&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120498">
    <a href="/manual/vote-note.php?id=120498&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120498" title="53% like this...">
    3
    </div>
  </div>
  <a href="#120498" class="name">
  <strong class="user"><em>chris at ocproducts dot com</em></strong></a><a class="genanchor" href="#120498"> &para;</a><div class="date" title="2017-01-21 06:59"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120498">
<div class="phpcode"><code><span class="html">Note that 'session_start' may overwrite your custom cache headers.<br />To remedy this you need to call:<br /><br />session_cache_limiter('');<br /><br />...after you set your custom cache headers. It will tell the PHP session code to not do any cache header changes of its own.</span></code></div>
  </div>
 </div>
  <div class="note" id="85254">  <div class="votes">
    <div id="Vu85254">
    <a href="/manual/vote-note.php?id=85254&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85254">
    <a href="/manual/vote-note.php?id=85254&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85254" title="53% like this...">
    8
    </div>
  </div>
  <a href="#85254" class="name">
  <strong class="user"><em>shutout2730 at yahoo dot com</em></strong></a><a class="genanchor" href="#85254"> &para;</a><div class="date" title="2008-08-21 11:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85254">
<div class="phpcode"><code><span class="html">It is important to note that headers are actually sent when the first byte is output to the browser. If you are replacing headers in your scripts, this means that the placement of echo/print statements and output buffers may actually impact which headers are sent. In the case of redirects, if you forget to terminate your script after sending the header, adding a buffer or sending a character may change which page your users are sent to.<br /><br />This redirects to 2.html since the second header replaces the first.<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"location: 1.html"</span><span class="keyword">); <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"location: 2.html"</span><span class="keyword">); </span><span class="comment">//replaces 1.html<br /></span><span class="default">?&gt;<br /></span><br />This redirects to 1.html since the header is sent as soon as the echo happens. You also won't see any "headers already sent" errors because the browser follows the redirect before it can display the error.<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"location: 1.html"</span><span class="keyword">);<br />echo </span><span class="string">"send data"</span><span class="keyword">; <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"location: 2.html"</span><span class="keyword">); </span><span class="comment">//1.html already sent <br /></span><span class="default">?&gt;<br /></span><br />Wrapping the previous example in an output buffer actually changes the behavior of the script! This is because headers aren't sent until the output buffer is flushed.<br /><br /><span class="default">&lt;?php<br />ob_start</span><span class="keyword">();<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"location: 1.html"</span><span class="keyword">); <br />echo </span><span class="string">"send data"</span><span class="keyword">; <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"location: 2.html"</span><span class="keyword">); </span><span class="comment">//replaces 1.html<br /></span><span class="default">ob_end_flush</span><span class="keyword">(); </span><span class="comment">//now the headers are sent<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="37645">  <div class="votes">
    <div id="Vu37645">
    <a href="/manual/vote-note.php?id=37645&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37645">
    <a href="/manual/vote-note.php?id=37645&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37645" title="53% like this...">
    6
    </div>
  </div>
  <a href="#37645" class="name">
  <strong class="user"><em>jp at webgraphe dot com</em></strong></a><a class="genanchor" href="#37645"> &para;</a><div class="date" title="2003-11-21 03:56"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37645">
<div class="phpcode"><code><span class="html">A call to session_write_close() before the statement
<br />
<br /><span class="default">&lt;?php
<br />    header</span><span class="keyword">(</span><span class="string">"Location: URL"</span><span class="keyword">);
<br />    exit();
<br /></span><span class="default">?&gt;
<br /></span>
<br />is recommended if you want to be sure the session is updated before proceeding to the redirection.
<br />
<br />We encountered a situation where the script accessed by the redirection wasn't loading the session correctly because the precedent script hadn't the time to update it (we used a database handler).
<br />
<br />JP.</span></code></div>
  </div>
 </div>
  <div class="note" id="94118">  <div class="votes">
    <div id="Vu94118">
    <a href="/manual/vote-note.php?id=94118&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94118">
    <a href="/manual/vote-note.php?id=94118&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94118" title="51% like this...">
    3
    </div>
  </div>
  <a href="#94118" class="name">
  <strong class="user"><em>dev at omikrosys dot com</em></strong></a><a class="genanchor" href="#94118"> &para;</a><div class="date" title="2009-10-16 10:45"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94118">
<div class="phpcode"><code><span class="html">Just to inform you all, do not get confused between Content-Transfer-Encoding and Content-Encoding<br /><br />Content-Transfer-Encoding specifies the encoding used to transfer the data within the HTTP protocol, like raw binary or base64. (binary is more compact than base64. base64 having 33% overhead).<br />Eg Use:- header('Content-Transfer-Encoding: binary');<br /><br />Content-Encoding is used to apply things like gzip compression to the content/data.<br />Eg Use:- header('Content-Encoding: gzip');</span></code></div>
  </div>
 </div>
  <div class="note" id="96017">  <div class="votes">
    <div id="Vu96017">
    <a href="/manual/vote-note.php?id=96017&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96017">
    <a href="/manual/vote-note.php?id=96017&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96017" title="51% like this...">
    2
    </div>
  </div>
  <a href="#96017" class="name">
  <strong class="user"><em>Refugnic</em></strong></a><a class="genanchor" href="#96017"> &para;</a><div class="date" title="2010-02-03 05:43"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96017">
<div class="phpcode"><code><span class="html">My files are in a compressed state (bz2). When the user clicks the link, I want them to get the uncompressed version of the file.<br /><br />After decompressing the file, I ran into the problem, that the download dialog would always pop up, even when I told the dialog to 'Always perform this operation with this file type'.<br /><br />As I found out, the problem was in the header directive 'Content-Disposition', namely the 'attachment' directive.<br /><br />If you want your browser to simulate a plain link to a file, either change 'attachment' to 'inline' or omit it alltogether and you'll be fine.<br /><br />This took me a while to figure out and I hope it will help someone else out there, who runs into the same problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="122279">  <div class="votes">
    <div id="Vu122279">
    <a href="/manual/vote-note.php?id=122279&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122279">
    <a href="/manual/vote-note.php?id=122279&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122279" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#122279" class="name">
  <strong class="user"><em>razvan_bc at yahoo dot com</em></strong></a><a class="genanchor" href="#122279"> &para;</a><div class="date" title="2018-01-17 05:20"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122279">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/* This will give an error. Note the output<br /> * above, which is before the header() call */<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Location: <a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">);<br />exit;<br /></span><span class="default">?&gt;<br /></span><br />this example is pretty good BUT in time you use "exit" the parser will still work to decide what's happening next the "exit" 's action should do ('cause if you check the manual exit works in others situations too).<br />SO MY POINT IS : you should use :<br /><span class="default">&lt;?php<br /><br />header</span><span class="keyword">(</span><span class="string">'Location: <a href="http://www.example.com/" rel="nofollow" target="_blank">http://www.example.com/</a>'</span><span class="keyword">);<br />die();<br /><br /></span><span class="default">?&gt;<br /></span>'CAUSE all die function does is to stop the script ,there is no other place for interpretation and the scope you choose to break the action of your script is quickly DONE!!!<br /><br />there are many situations  with others examples and the right choose for small parts of your scrips that make differences when you write your php framework at well! <br /><br />Thanks Rasmus Lerdorf and his team to wrap off parts of unusual php functionality ,php 7 roolez!!!!!</span></code></div>
  </div>
 </div>
  <div class="note" id="92620">  <div class="votes">
    <div id="Vu92620">
    <a href="/manual/vote-note.php?id=92620&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92620">
    <a href="/manual/vote-note.php?id=92620&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92620" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92620" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#92620"> &para;</a><div class="date" title="2009-07-31 08:02"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92620">
<div class="phpcode"><code><span class="html">I just want to add, becuase I see here lots of wrong formated headers.
<br />
<br />1. All used headers have first letters uppercase, so you MUST follow this. For example:
<br />
<br />Location, not location
<br />Content-Type, not content-type, nor CONTENT-TYPE
<br />
<br />2. Then there MUST be colon and space, like
<br />
<br />good: header("Content-Type: text/plain");
<br />wrong: header("Content-Type:text/plain");
<br />
<br />3. Location header MUST be absolute uri with scheme, domain, port, path, etc.
<br />
<br />good: header("Location: <a href="http://www.example.com/something.php?a=1" rel="nofollow" target="_blank">http://www.example.com/something.php?a=1</a>");
<br />
<br />4. Relative URIs are NOT allowed
<br />
<br />wrong:  Location: /something.php?a=1
<br />wrong:  Location: ?a=1
<br />
<br />It will make proxy server and http clients happier.</span></code></div>
  </div>
 </div>
  <div class="note" id="86554">  <div class="votes">
    <div id="Vu86554">
    <a href="/manual/vote-note.php?id=86554&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86554">
    <a href="/manual/vote-note.php?id=86554&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86554" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86554" class="name">
  <strong class="user"><em>mzheng[no-spam-thx] at ariba dot com</em></strong></a><a class="genanchor" href="#86554"> &para;</a><div class="date" title="2008-10-23 08:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86554">
<div class="phpcode"><code><span class="html">For large files (100+ MBs), I found that it is essential to flush the file content ASAP, otherwise the download dialog doesn't show until a long time or never. <br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=" </span><span class="keyword">. </span><span class="default">urlencode</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));    <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/force-download"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/octet-stream"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Type: application/download"</span><span class="keyword">);<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Description: File Transfer"</span><span class="keyword">);             <br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: " </span><span class="keyword">. </span><span class="default">filesize</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">));<br /></span><span class="default">flush</span><span class="keyword">(); </span><span class="comment">// this doesn't really matter.<br /><br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">); <br />while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />{<br />    echo </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">65536</span><span class="keyword">); <br />    </span><span class="default">flush</span><span class="keyword">(); </span><span class="comment">// this is essential for large downloads<br /></span><span class="keyword">}  <br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116323">  <div class="votes">
    <div id="Vu116323">
    <a href="/manual/vote-note.php?id=116323&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116323">
    <a href="/manual/vote-note.php?id=116323&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116323" title="49% like this...">
    -2
    </div>
  </div>
  <a href="#116323" class="name">
  <strong class="user"><em>Vinay Kotekar</em></strong></a><a class="genanchor" href="#116323"> &para;</a><div class="date" title="2014-12-12 01:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116323">
<div class="phpcode"><code><span class="html">Saving php file in ANSI  no isuess but when saving the file in UTF-8 format for various reasons remember to save the file without any BOM ( byte-order mark) support.<br />Otherwise you will face problem of headers not being properly sent <br />eg. <br /><span class="default">&lt;?php header</span><span class="keyword">(</span><span class="string">"Set-Cookie: name=user"</span><span class="keyword">);</span><span class="default">?&gt;<br /></span><br />Would give something like this :-<br /><br />Warning: Cannot modify header information - headers already sent by (output started at C:\www\info.php:1) in C:\www\info.php on line 1</span></code></div>
  </div>
 </div>
  <div class="note" id="99190">  <div class="votes">
    <div id="Vu99190">
    <a href="/manual/vote-note.php?id=99190&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99190">
    <a href="/manual/vote-note.php?id=99190&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99190" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#99190" class="name">
  <strong class="user"><em>Cody G.</em></strong></a><a class="genanchor" href="#99190"> &para;</a><div class="date" title="2010-08-01 09:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99190">
<div class="phpcode"><code><span class="html">After lots of research and testing, I'd like to share my findings about my problems with Internet Explorer and file downloads.<br /><br />  Take a look at this code, which replicates the normal download of a Javascript:<br /><br /><span class="default">&lt;?php<br /> </span><span class="keyword">if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"HTTP_USER_AGENT"</span><span class="keyword">],</span><span class="string">"MSIE"</span><span class="keyword">)==</span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: text/javascript"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: inline; filename=\"download.js\""</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.</span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"my-file.js"</span><span class="keyword">));<br /> } else {<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-type: application/force-download"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Disposition: attachment; filename=\"download.js\""</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Content-Length: "</span><span class="keyword">.</span><span class="default">filesize</span><span class="keyword">(</span><span class="string">"my-file.js"</span><span class="keyword">));<br /> }<br /> </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Expires: Fri, 01 Jan 2010 05:00:00 GMT"</span><span class="keyword">);<br /> if(</span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">"HTTP_USER_AGENT"</span><span class="keyword">],</span><span class="string">"MSIE"</span><span class="keyword">)==</span><span class="default">false</span><span class="keyword">) {<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Cache-Control: no-cache"</span><span class="keyword">);<br />  </span><span class="default">header</span><span class="keyword">(</span><span class="string">"Pragma: no-cache"</span><span class="keyword">);<br /> }<br /> include(</span><span class="string">"my-file.js"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Now let me explain:<br /><br />  I start out by checking for IE, then if not IE, I set Content-type (case-sensitive) to JS and set Content-Disposition (every header is case-sensitive from now on) to inline, because most browsers outside of IE like to display JS inline. (User may change settings). The Content-Length header is required by some browsers to activate download box. Then, if it is IE, the "application/force-download" Content-type is sometimes required to show the download box. Use this if you don't want your PDF to display in the browser (in IE). I use it here to make sure the box opens. Anyway, I set the Content-Disposition to attachment because I already know that the box will appear. Then I have the Content-Length again.<br /><br />  Now, here's my big point. I have the Cache-Control and Pragma headers sent only if not IE. THESE HEADERS WILL PREVENT DOWNLOAD ON IE!!! Only use the Expires header, after all, it will require the file to be downloaded again the next time. This is not a bug! IE stores downloads in the Temporary Internet Files folder until the download is complete. I know this because once I downloaded a huge file to My Documents, but the Download Dialog box put it in the Temp folder and moved it at the end. Just think about it. If IE requires the file to be downloaded to the Temp folder, setting the Cache-Control and Pragma headers will cause an error!<br /><br />I hope this saves someone some time!<br />~Cody G.</span></code></div>
  </div>
 </div>
  <div class="note" id="94114">  <div class="votes">
    <div id="Vu94114">
    <a href="/manual/vote-note.php?id=94114&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94114">
    <a href="/manual/vote-note.php?id=94114&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94114" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#94114" class="name">
  <strong class="user"><em>scott at lucentminds dot com</em></strong></a><a class="genanchor" href="#94114"> &para;</a><div class="date" title="2009-10-16 04:42"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94114">
<div class="phpcode"><code><span class="html">If you want to remove a header and keep it from being sent as part of the header response, just provide nothing as the header value after the header name. For example...<br /><br />PHP, by default, always returns the following header:<br /><br />"Content-Type: text/html"<br /><br />Which your entire header response will look like<br /><br />HTTP/1.1 200 OK<br />Server: Apache/2.2.11 (Unix)<br />X-Powered-By: PHP/5.2.8<br />Date: Fri, 16 Oct 2009 23:05:07 GMT<br />Content-Type: text/html; charset=UTF-8<br />Connection: close<br /><br />If you call the header name with no value like so...<br /><br /><span class="default">&lt;?php<br /><br />    header</span><span class="keyword">( </span><span class="string">'Content-Type:' </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Your headers now look like this:<br /><br />HTTP/1.1 200 OK<br />Server: Apache/2.2.11 (Unix)<br />X-Powered-By: PHP/5.2.8<br />Date: Fri, 16 Oct 2009 23:05:07 GMT<br />Connection: close</span></code></div>
  </div>
 </div>
  <div class="note" id="124753">  <div class="votes">
    <div id="Vu124753">
    <a href="/manual/vote-note.php?id=124753&amp;page=function.header&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124753">
    <a href="/manual/vote-note.php?id=124753&amp;page=function.header&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124753" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#124753" class="name">
  <strong class="user"><em>Angelica Perduta</em></strong></a><a class="genanchor" href="#124753"> &para;</a><div class="date" title="2020-02-24 11:20"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124753">
<div class="phpcode"><code><span class="html">I made a script that generates an optimized image for use on web pages using a 404 script to resize and reduce original images, but on some servers it was generating the image but then not using it due to some kind of cache somewhere of the 404 status. I managed to get it to work with the following and although I don't quite understand it, I hope my posting here does help others with similar issues:<br /><br />    header_remove();<br />    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");<br />    header("Cache-Control: post-check=0, pre-check=0", false);<br />    header("Pragma: no-cache");<br />    // ... and then try redirecting<br />    // 201 = The request has been fulfilled, resulting in the creation of a new resource however it's still not loading<br />    // 302 "moved temporarily" does seems to load it!<br />    header("location:$dst", FALSE, 302); // redirect to the file now we have it</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.header&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.header.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.network.php">Network Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.checkdnsrr.php" title="checkdnsrr">checkdnsrr</a>
                        </li>
                                                <li class="">
                            <a href="function.closelog.php" title="closelog">closelog</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-check-record.php" title="dns_&#8203;check_&#8203;record">dns_&#8203;check_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-mx.php" title="dns_&#8203;get_&#8203;mx">dns_&#8203;get_&#8203;mx</a>
                        </li>
                                                <li class="">
                            <a href="function.dns-get-record.php" title="dns_&#8203;get_&#8203;record">dns_&#8203;get_&#8203;record</a>
                        </li>
                                                <li class="">
                            <a href="function.fsockopen.php" title="fsockopen">fsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyaddr.php" title="gethostbyaddr">gethostbyaddr</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbyname.php" title="gethostbyname">gethostbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostbynamel.php" title="gethostbynamel">gethostbynamel</a>
                        </li>
                                                <li class="">
                            <a href="function.gethostname.php" title="gethostname">gethostname</a>
                        </li>
                                                <li class="">
                            <a href="function.getmxrr.php" title="getmxrr">getmxrr</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobyname.php" title="getprotobyname">getprotobyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getprotobynumber.php" title="getprotobynumber">getprotobynumber</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyname.php" title="getservbyname">getservbyname</a>
                        </li>
                                                <li class="">
                            <a href="function.getservbyport.php" title="getservbyport">getservbyport</a>
                        </li>
                                                <li class="current">
                            <a href="function.header.php" title="header">header</a>
                        </li>
                                                <li class="">
                            <a href="function.header-register-callback.php" title="header_&#8203;register_&#8203;callback">header_&#8203;register_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.header-remove.php" title="header_&#8203;remove">header_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-list.php" title="headers_&#8203;list">headers_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.headers-sent.php" title="headers_&#8203;sent">headers_&#8203;sent</a>
                        </li>
                                                <li class="">
                            <a href="function.http-clear-last-response-headers.php" title="http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;clear_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-get-last-response-headers.php" title="http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers">http_&#8203;get_&#8203;last_&#8203;response_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.http-response-code.php" title="http_&#8203;response_&#8203;code">http_&#8203;response_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-ntop.php" title="inet_&#8203;ntop">inet_&#8203;ntop</a>
                        </li>
                                                <li class="">
                            <a href="function.inet-pton.php" title="inet_&#8203;pton">inet_&#8203;pton</a>
                        </li>
                                                <li class="">
                            <a href="function.ip2long.php" title="ip2long">ip2long</a>
                        </li>
                                                <li class="">
                            <a href="function.long2ip.php" title="long2ip">long2ip</a>
                        </li>
                                                <li class="">
                            <a href="function.net-get-interfaces.php" title="net_&#8203;get_&#8203;interfaces">net_&#8203;get_&#8203;interfaces</a>
                        </li>
                                                <li class="">
                            <a href="function.openlog.php" title="openlog">openlog</a>
                        </li>
                                                <li class="">
                            <a href="function.pfsockopen.php" title="pfsockopen">pfsockopen</a>
                        </li>
                                                <li class="">
                            <a href="function.request-parse-body.php" title="request_&#8203;parse_&#8203;body">request_&#8203;parse_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.setcookie.php" title="setcookie">setcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.setrawcookie.php" title="setrawcookie">setrawcookie</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-status.php" title="socket_&#8203;get_&#8203;status">socket_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-blocking.php" title="socket_&#8203;set_&#8203;blocking">socket_&#8203;set_&#8203;blocking</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-timeout.php" title="socket_&#8203;set_&#8203;timeout">socket_&#8203;set_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.syslog.php" title="syslog">syslog</a>
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
