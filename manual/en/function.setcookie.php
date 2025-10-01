<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: setcookie - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.setcookie.php">
 <link rel="shorturl" href="https://www.php.net/setcookie">
 <link rel="alternate" href="https://www.php.net/setcookie" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.network.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.request-parse-body.php">
 <link rel="next" href="https://www.php.net/manual/en/function.setrawcookie.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.setcookie.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.setcookie.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.setcookie.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.setcookie.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.setcookie.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.setcookie.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.setcookie.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.setcookie.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.setcookie.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.setcookie.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.setcookie.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Send a cookie" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: setcookie - Manual" />
<meta name="twitter:description" content="Send a cookie" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: setcookie - Manual" />
<meta itemprop="description" content="Send a cookie" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Send a cookie" />

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
        <a href="function.setrawcookie.php">
          setrawcookie &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.request-parse-body.php">
          &laquo; request_parse_body        </a>
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
            <option value='en/function.setcookie.php' selected="selected">English</option>
            <option value='de/function.setcookie.php'>German</option>
            <option value='es/function.setcookie.php'>Spanish</option>
            <option value='fr/function.setcookie.php'>French</option>
            <option value='it/function.setcookie.php'>Italian</option>
            <option value='ja/function.setcookie.php'>Japanese</option>
            <option value='pt_BR/function.setcookie.php'>Brazilian Portuguese</option>
            <option value='ru/function.setcookie.php'>Russian</option>
            <option value='tr/function.setcookie.php'>Turkish</option>
            <option value='uk/function.setcookie.php'>Ukrainian</option>
            <option value='zh/function.setcookie.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.setcookie" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">setcookie</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">setcookie</span> &mdash; <span class="dc-title">Send a cookie</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.setcookie-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>setcookie</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$expires_or_options</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$path</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$domain</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$secure</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$httponly</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">Alternative signature available as of PHP 7.3.0 (not supported with named parameters):</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>setcookie</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$name</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code><span class="initializer"> = &quot;&quot;</span></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$options</code><span class="initializer"> = []</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>setcookie()</strong></span> defines a cookie to be sent along with the
   rest of the HTTP headers. Like other headers, cookies must be sent
   <em>before</em> any output from your script (this is a
   protocol restriction). This requires that you place calls to this function
   prior to any output, including <code class="literal">&lt;html&gt;</code> and
   <code class="literal">&lt;head&gt;</code> tags as well as any whitespace.
  </p>
  <p class="para">
   Once the cookies have been set, they can be accessed on the next page load
   with the <var class="varname"><a href="reserved.variables.cookies.php" class="classname">$_COOKIE</a></var> array.
   Cookie
   values may also exist in <var class="varname"><a href="reserved.variables.request.php" class="classname">$_REQUEST</a></var>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.setcookie-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <a href="https://datatracker.ietf.org/doc/html/rfc6265" class="link external">&raquo;&nbsp;RFC 6265</a> provides the normative
   reference on how each <span class="function"><strong>setcookie()</strong></span> parameter is
   interpreted.
   <dl>
    
     <dt><code class="parameter">name</code></dt>
     <dd>
      <p class="para">
       The name of the cookie.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The value of the cookie.  This value is stored on the clients computer;
       do not store sensitive information.  Assuming the
       <code class="parameter">name</code> is <code class="literal">&#039;cookiename&#039;</code>, this
       value is retrieved through <var class="varname"><a href="reserved.variables.cookies.php" class="classname">$_COOKIE['cookiename']</a></var>
      </p>
     </dd>
    
    
     <dt><code class="parameter">expires_or_options</code></dt>
     <dd>
      <p class="para">
       The time the cookie expires.  This is a Unix timestamp so is
       in number of seconds since the epoch.
       One way to set this is by adding the number of seconds before the cookie
       should expire to the result of calling <span class="function"><a href="function.time.php" class="function">time()</a></span>.
       For instance, <code class="literal">time()+60*60*24*30</code> will set the cookie to
       expire in 30 days.
       Another option is to use the <span class="function"><a href="function.mktime.php" class="function">mktime()</a></span> function.
       If set to <code class="literal">0</code>, or omitted, the cookie will expire at
       the end of the session (when the browser closes).
      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         You may notice the <code class="parameter">expires_or_options</code> parameter takes on a
         Unix timestamp, as opposed to the date format <code class="literal">Wdy, DD-Mon-YYYY
         HH:MM:SS GMT</code>, this is because PHP does this conversion
         internally.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">path</code></dt>
     <dd>
      <p class="para">
       The path on the server in which the cookie will be available on.
       If set to <code class="literal">&#039;/&#039;</code>, the cookie will be available
       within the entire <code class="parameter">domain</code>.  If set to
       <code class="literal">&#039;/foo/&#039;</code>, the cookie will only be available
       within the <code class="literal">/foo/</code> directory and all
       sub-directories such as <code class="literal">/foo/bar/</code> of
       <code class="parameter">domain</code>.  The default value is the
       current directory that the cookie is being set in.
      </p>
     </dd>
    
    
     <dt><code class="parameter">domain</code></dt>
     <dd>
      <p class="para">
       The (sub)domain that the cookie is available to. Setting this to a
       subdomain (such as <code class="literal">&#039;www.example.com&#039;</code>) will make the
       cookie available to that subdomain and all other sub-domains of it (i.e.
       w2.www.example.com). To make the cookie available to the whole domain
       (including all subdomains of it), simply set the value to the domain
       name (<code class="literal">&#039;example.com&#039;</code>, in this case).
      </p>
      <p class="para">
       Older browsers still implementing the deprecated
       <a href="https://datatracker.ietf.org/doc/html/rfc2109" class="link external">&raquo;&nbsp;RFC 2109</a> may require a leading
       <code class="literal">.</code> to match all subdomains.
      </p>
     </dd>
    
    
     <dt><code class="parameter">secure</code></dt>
     <dd>
      <p class="para">
       Indicates that the cookie should only be transmitted over a
       secure HTTPS connection from the client. When set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the
       cookie will only be set if a secure connection exists.
       On the server-side, it&#039;s on the programmer to send this
       kind of cookie only on secure connection (e.g. with respect to
       <var class="varname"><a href="reserved.variables.server.php" class="classname">$_SERVER["HTTPS"]</a></var>).
      </p>
     </dd>
    
    
     <dt><code class="parameter">httponly</code></dt>
     <dd>
      <p class="para">
       When <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> the cookie will be made accessible only through the HTTP
       protocol. This means that the cookie won&#039;t be accessible by
       scripting languages, such as JavaScript. It has been suggested that
       this setting can effectively help to reduce identity theft through
       XSS attacks (although it is not supported by all browsers), but that
       claim is often disputed.
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       An associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span> which may have any of the keys
       <code class="literal">expires</code>, <code class="literal">path</code>, <code class="literal">domain</code>,
       <code class="literal">secure</code>, <code class="literal">httponly</code> and <code class="literal">samesite</code>.
       If any other key is present an error of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong>
       is generated. The values have the same meaning as described for the 
       parameters with the same name. The value of the <code class="literal">samesite</code>
       element should be either <code class="literal">None</code>, <code class="literal">Lax</code>
       or <code class="literal">Strict</code>.
       If any of the allowed options are not given, their default values are the
       same as the default values of the explicit parameters. If the
       <code class="literal">samesite</code> element is omitted, no SameSite cookie
       attribute is set.
      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         To set a cookie that includes attributes that aren&#039;t among the keys listed,
         use <span class="function"><a href="function.header.php" class="function">header()</a></span>.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.setcookie-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   If output exists prior to calling this function,
   <span class="function"><strong>setcookie()</strong></span> will fail and return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. If
   <span class="function"><strong>setcookie()</strong></span> successfully runs, it will return <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
   This does not indicate whether the user accepted the cookie.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.setcookie-changelog">
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
       <td>8.2.0</td>
       <td>
        The date format of the cookie is now <code class="literal">&#039;D, d M Y H:i:s \G\M\T&#039;</code>;
        previously it was <code class="literal">&#039;D, d-M-Y H:i:s T&#039;</code>.
       </td>
      </tr>

      <tr>
       <td>7.3.0</td>
       <td>
        An alternative signature supporting an <code class="parameter">options</code>
        array has been added. This signature supports also setting of the
        SameSite cookie attribute.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.setcookie-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   The following examples demonstrate some ways to send cookies.
   <div class="example" id="example-4742">
    <p><strong>Example #1 <span class="function"><strong>setcookie()</strong></span> send example</strong></p>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$value </span><span style="color: #007700">= </span><span style="color: #DD0000">'something from somewhere'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">);  </span><span style="color: #FF8000">/* expire in 1 hour */<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">, </span><span style="color: #0000BB">$value</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">()+</span><span style="color: #0000BB">3600</span><span style="color: #007700">, </span><span style="color: #DD0000">"/~rasmus/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   Note that the value portion of the cookie will automatically be
   urlencoded when you send the cookie, and when it is received, it
   is automatically decoded and assigned to a variable by the same
   name as the cookie name. If you don&#039;t want this, you can use
   <span class="function"><a href="function.setrawcookie.php" class="function">setrawcookie()</a></span> instead. To see
   the contents of our test cookie in a script, simply use one of the
   following examples:
  </p>
  <p class="para">
   <div class="informalexample">
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Print an individual cookie<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">];<br /><br /></span><span style="color: #FF8000">// Another way to debug/test is to view all cookies<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4743">
    <p><strong>Example #2 <span class="function"><strong>setcookie()</strong></span> delete example</strong></p>
    <div class="example-contents"><p>
     When deleting a cookie you should assure that the expiration date
     is in the past, to trigger the removal mechanism in your browser.
     Examples follow how to delete cookies sent in previous example:
    </p></div>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// set the expiration date to one hour ago<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">3600</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"TestCookie"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #0000BB">time</span><span style="color: #007700">() - </span><span style="color: #0000BB">3600</span><span style="color: #007700">, </span><span style="color: #DD0000">"/~rasmus/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"example.com"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-4744">
    <p><strong>Example #3 <span class="function"><strong>setcookie()</strong></span> and arrays</strong></p>
    <div class="example-contents"><p>
     You may also set array cookies by using array notation in the
     cookie name. This has the effect of setting as many cookies as
     you have array elements, but when the cookie is received by your
     script, the values are all placed in an array with the cookie&#039;s
     name:
    </p></div>
    <div class="example-contents">
     <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// set the cookies<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"cookie[three]"</span><span style="color: #007700">, </span><span style="color: #DD0000">"cookiethree"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"cookie[two]"</span><span style="color: #007700">, </span><span style="color: #DD0000">"cookietwo"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">setcookie</span><span style="color: #007700">(</span><span style="color: #DD0000">"cookie[one]"</span><span style="color: #007700">, </span><span style="color: #DD0000">"cookieone"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// after the page reloads, print them out<br /></span><span style="color: #007700">if (isset(</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">'cookie'</span><span style="color: #007700">])) {<br />    foreach (</span><span style="color: #0000BB">$_COOKIE</span><span style="color: #007700">[</span><span style="color: #DD0000">'cookie'</span><span style="color: #007700">] as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />        </span><span style="color: #0000BB">$name </span><span style="color: #007700">= </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">$value </span><span style="color: #007700">= </span><span style="color: #0000BB">htmlspecialchars</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />        echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$name</span><span style="color: #DD0000"> : </span><span style="color: #0000BB">$value</span><span style="color: #DD0000"> &lt;br /&gt;\n"</span><span style="color: #007700">;<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
     <div class="examplescode"><pre class="examplescode">three : cookiethree
two : cookietwo
one : cookieone</pre>
</div>
    </div>
   </div>
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Using separator characters such as <code class="literal">[</code> and <code class="literal">]</code>
     as part of the cookie name is not compliant to RFC 6265, section 4, but supposed
     to be supported by user agents according to RFC 6265, section 5.
    </span>
   </p></blockquote>
  </p>
 </div>

 
 <div class="refsect1 notes" id="refsect1-function.setcookie-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    You can use output buffering to send output prior to the
    call of this function, with the overhead of all of your output to the
    browser being buffered in the server until you send it. You can do this
    by calling <span class="function"><a href="function.ob-start.php" class="function">ob_start()</a></span> and
    <span class="function"><a href="function.ob-end-flush.php" class="function">ob_end_flush()</a></span> in your script, or setting the
    <code class="literal">output_buffering</code> configuration directive on in your
    <var class="filename">php.ini</var> or server configuration files.
   </p>
  </p></blockquote>
  <p class="para">
   Common Pitfalls:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      Cookies will not become visible until the next loading of a page that
      the cookie should be visible for.  To test if a cookie was successfully
      set, check for the cookie on a next loading page before the cookie
      expires.  Expire time is set via the <code class="parameter">expires_or_options</code>
      parameter.  A nice way to debug the existence of cookies is by
      simply calling <code class="literal">print_r($_COOKIE);</code>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Cookies must be deleted with the same parameters as they were set with.
      If the <code class="parameter">value</code> argument is an empty string, and all other arguments
      match a previous call to <span class="function"><strong>setcookie()</strong></span>, then the cookie with the specified
      name will be deleted from the remote client.
      This is internally achieved by setting value to <code class="literal">&#039;deleted&#039;</code> and expiration
      time in the past.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Because setting a cookie with a value of <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> will try to delete the cookie,
      you should not use boolean values. Instead, use <em>0</em> for <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      and <em>1</em> for <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Cookies names can be set as array names and will be available to your
      PHP scripts as arrays but separate cookies are stored on the user&#039;s
      system. Consider <span class="function"><a href="function.explode.php" class="function">explode()</a></span> to set one cookie with
      multiple names and values. It is not recommended to use
      <span class="function"><a href="function.serialize.php" class="function">serialize()</a></span> for this purpose, because it can result
      in security holes.
     </span>
    </li>
   </ul>
  </p>
  <p class="simpara">
   Multiple calls to <span class="function"><strong>setcookie()</strong></span> are performed in the order called.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.setcookie-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.header.php" class="function" rel="rdfs-seeAlso">header()</a> - Send a raw HTTP header</span></li>
    <li><span class="function"><a href="function.setrawcookie.php" class="function" rel="rdfs-seeAlso">setrawcookie()</a> - Send a cookie without urlencoding the cookie value</span></li>
    <li><a href="features.cookies.php" class="link">cookies section</a></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc6265" class="link external">&raquo;&nbsp;RFC 6265</a></li>
    <li><a href="https://datatracker.ietf.org/doc/html/rfc2109" class="link external">&raquo;&nbsp;RFC 2109</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/network/functions/setcookie.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.setcookie%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.setcookie&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.setcookie.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110193">  <div class="votes">
    <div id="Vu110193">
    <a href="/manual/vote-note.php?id=110193&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110193">
    <a href="/manual/vote-note.php?id=110193&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110193" title="74% like this...">
    397
    </div>
  </div>
  <a href="#110193" class="name">
  <strong class="user"><em>walterquez</em></strong></a><a class="genanchor" href="#110193"> &para;</a><div class="date" title="2012-09-28 04:43"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110193">
<div class="phpcode"><code><span class="html">Instead of this:
<br /><span class="default">&lt;?php setcookie</span><span class="keyword">( </span><span class="string">"TestCookie"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">()+(</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">) ); </span><span class="default">?&gt;
<br /></span>
<br />You can this:
<br /><span class="default">&lt;?php setcookie</span><span class="keyword">( </span><span class="string">"TestCookie"</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">strtotime</span><span class="keyword">( </span><span class="string">'+30 days' </span><span class="keyword">) ); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109173">  <div class="votes">
    <div id="Vu109173">
    <a href="/manual/vote-note.php?id=109173&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109173">
    <a href="/manual/vote-note.php?id=109173&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109173" title="76% like this...">
    275
    </div>
  </div>
  <a href="#109173" class="name">
  <strong class="user"><em>Bachsau</em></strong></a><a class="genanchor" href="#109173"> &para;</a><div class="date" title="2012-06-26 01:49"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109173">
<div class="phpcode"><code><span class="html">Want to remove a cookie?<br /><br />Many people do it the complicated way:<br />setcookie('name', 'content', time()-3600);<br /><br />But why do you make it so complicated and risk it not working, when the client's time is wrong? Why fiddle around with time();<br /><br />Here's the easiest way to unset a cookie:<br />setcookie('name', 'content', 1);<br /><br />Thats it.</span></code></div>
  </div>
 </div>
  <div class="note" id="125242">  <div class="votes">
    <div id="Vu125242">
    <a href="/manual/vote-note.php?id=125242&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125242">
    <a href="/manual/vote-note.php?id=125242&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125242" title="72% like this...">
    95
    </div>
  </div>
  <a href="#125242" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125242"> &para;</a><div class="date" title="2020-08-04 04:24"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125242">
<div class="phpcode"><code><span class="html">Just an example to clarify the use of the array options, especially since Mozilla is going to deprecate / penalise the use of SameSite = none,  which is used by default if not using array options. <br /><br /><span class="default">&lt;?php<br />$arr_cookie_options </span><span class="keyword">= array (<br />                </span><span class="string">'expires' </span><span class="keyword">=&gt; </span><span class="default">time</span><span class="keyword">() + </span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">*</span><span class="default">30</span><span class="keyword">, <br />                </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">, <br />                </span><span class="string">'domain' </span><span class="keyword">=&gt; </span><span class="string">'.example.com'</span><span class="keyword">, </span><span class="comment">// leading dot for compatibility or use subdomain<br />                </span><span class="string">'secure' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,     </span><span class="comment">// or false<br />                </span><span class="string">'httponly' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,    </span><span class="comment">// or false<br />                </span><span class="string">'samesite' </span><span class="keyword">=&gt; </span><span class="string">'None' </span><span class="comment">// None || Lax  || Strict<br />                </span><span class="keyword">);<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="string">'TestCookie'</span><span class="keyword">, </span><span class="string">'The Cookie Value'</span><span class="keyword">, </span><span class="default">$arr_cookie_options</span><span class="keyword">);    <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120794">  <div class="votes">
    <div id="Vu120794">
    <a href="/manual/vote-note.php?id=120794&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120794">
    <a href="/manual/vote-note.php?id=120794&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120794" title="64% like this...">
    24
    </div>
  </div>
  <a href="#120794" class="name">
  <strong class="user"><em>nacho at casinelli dot com</em></strong></a><a class="genanchor" href="#120794"> &para;</a><div class="date" title="2017-03-12 11:33"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120794">
<div class="phpcode"><code><span class="html">It's worth a mention: you should avoid dots on cookie names.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// this will actually set 'ace_fontSize' name:<br /></span><span class="default">setcookie</span><span class="keyword">( </span><span class="string">'ace.fontSize'</span><span class="keyword">, </span><span class="default">18 </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71591">  <div class="votes">
    <div id="Vu71591">
    <a href="/manual/vote-note.php?id=71591&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71591">
    <a href="/manual/vote-note.php?id=71591&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71591" title="64% like this...">
    36
    </div>
  </div>
  <a href="#71591" class="name">
  <strong class="user"><em>paul nospam AT nospam sitepoint dot com</em></strong></a><a class="genanchor" href="#71591"> &para;</a><div class="date" title="2006-12-06 08:59"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71591">
<div class="phpcode"><code><span class="html">Note when setting "array cookies" that a separate cookie is set for each element of the array.<br /><br />On high traffic sites, this can substantially increase the size of subsequent HTTP requests from clients (including requests for static content on the same domain).<br /><br />More importantly though, the cookie specification says that browsers need only accept 20 cookies per domain.  This limit is increased to 50 by Firefox, and to 30 by Opera, but IE6 and IE7 enforce the limit of 20 cookie per domain.  Any cookies beyond this limit will either knock out an older cookie or be ignored/rejected by the browser.</span></code></div>
  </div>
 </div>
  <div class="note" id="73107">  <div class="votes">
    <div id="Vu73107">
    <a href="/manual/vote-note.php?id=73107&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73107">
    <a href="/manual/vote-note.php?id=73107&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73107" title="61% like this...">
    42
    </div>
  </div>
  <a href="#73107" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#73107"> &para;</a><div class="date" title="2007-02-08 05:13"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73107">
<div class="phpcode"><code><span class="html">something that wasn't made clear to me here and totally confused me for a while was that domain names must contain at least two dots (.), hence 'localhost' is invalid and the browser will refuse to set the cookie! instead for localhost you should use false.<br /><br />to make your code work on both localhost and a proper domain, you can do this:<br /><br /><span class="default">&lt;?php<br /><br />$domain </span><span class="keyword">= (</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">] != </span><span class="string">'localhost'</span><span class="keyword">) ? </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_HOST'</span><span class="keyword">] : </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="string">'cookiename'</span><span class="keyword">, </span><span class="string">'data'</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">()+</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">*</span><span class="default">365</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$domain</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129695">  <div class="votes">
    <div id="Vu129695">
    <a href="/manual/vote-note.php?id=129695&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129695">
    <a href="/manual/vote-note.php?id=129695&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129695" title="60% like this...">
    2
    </div>
  </div>
  <a href="#129695" class="name">
  <strong class="user"><em>ilya at ilya dot top</em></strong></a><a class="genanchor" href="#129695"> &para;</a><div class="date" title="2024-08-09 02:35"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129695">
<div class="phpcode"><code><span class="html">In any web browser there is a very commonly used option "Open previous windows and tabs" which is disabled by default, but many people enable it.<br />When this option is active, the web browser, when closing and reopening, instead of executing the termination and starting a new session, saves and restores the current session along with session cookies and sessionStorage.<br />Both session cookies and sessionStorage, contrary to expectations, can live for a very long time until the user closes the tab before closing the web browser.<br />If you want a cookie, for example with a time offset, to be guaranteed to have a short lifetime, you should explicitly specify this short lifetime, rather than relying on self-deletion on the session cookie.</span></code></div>
  </div>
 </div>
  <div class="note" id="73484">  <div class="votes">
    <div id="Vu73484">
    <a href="/manual/vote-note.php?id=73484&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73484">
    <a href="/manual/vote-note.php?id=73484&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73484" title="59% like this...">
    16
    </div>
  </div>
  <a href="#73484" class="name">
  <strong class="user"><em>gabe at fijiwebdesign dot com</em></strong></a><a class="genanchor" href="#73484"> &para;</a><div class="date" title="2007-02-25 07:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73484">
<div class="phpcode"><code><span class="html">If you want to delete all cookies on your domain, you may want to use the value of:<br /><br /><span class="default">&lt;?php $_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_COOKIE'</span><span class="keyword">] </span><span class="default">?&gt;<br /></span><br />rather than:<br /><br /><span class="default">&lt;?php $_COOKIE ?&gt;<br /></span><br />to dertermine the cookie names. <br />If cookie names are in Array notation, eg: user[username] <br />Then PHP will automatically create a corresponding array in $_COOKIE. Instead use $_SERVER['HTTP_COOKIE'] as it mirrors the actual HTTP Request header. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// unset cookies<br /></span><span class="keyword">if (isset(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_COOKIE'</span><span class="keyword">])) {<br />    </span><span class="default">$cookies </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">';'</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_COOKIE'</span><span class="keyword">]);<br />    foreach(</span><span class="default">$cookies </span><span class="keyword">as </span><span class="default">$cookie</span><span class="keyword">) {<br />        </span><span class="default">$parts </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'='</span><span class="keyword">, </span><span class="default">$cookie</span><span class="keyword">);<br />        </span><span class="default">$name </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />        </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">()-</span><span class="default">1000</span><span class="keyword">);<br />        </span><span class="default">setcookie</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">()-</span><span class="default">1000</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115356">  <div class="votes">
    <div id="Vu115356">
    <a href="/manual/vote-note.php?id=115356&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115356">
    <a href="/manual/vote-note.php?id=115356&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115356" title="58% like this...">
    8
    </div>
  </div>
  <a href="#115356" class="name">
  <strong class="user"><em>ellert at vankoperen dot nl</em></strong></a><a class="genanchor" href="#115356"> &para;</a><div class="date" title="2014-07-10 10:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115356">
<div class="phpcode"><code><span class="html">Caveat: if you use URL RewriteRules to get stuff like this: domain.com/bla/stuf/etc into parameters, you might run into a hickup when setting cookies.<br />At least in my setup a change in one of the parameters resulted in the cookie not being 'there' anymore.<br />The fix is simple: specify the domain. '/' will usualy do fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="125241">  <div class="votes">
    <div id="Vu125241">
    <a href="/manual/vote-note.php?id=125241&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125241">
    <a href="/manual/vote-note.php?id=125241&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125241" title="56% like this...">
    8
    </div>
  </div>
  <a href="#125241" class="name">
  <strong class="user"><em>synnus at gmail dot com</em></strong></a><a class="genanchor" href="#125241"> &para;</a><div class="date" title="2020-08-03 10:04"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125241">
<div class="phpcode"><code><span class="html">The " PHPSESSID " cookie will soon be rejected because its " sameSite " attribute is set to " none " or an invalid value, and without " secure " attribute. To learn more about the "sameSite" attribute, visit <a href="https://developer.mozilla.org/docs/Web/HTTP/Headers/Set-Cookie/SameSite." rel="nofollow" target="_blank">https://developer.mozilla.org/docs/Web/HTTP/Headers/Set-Cookie/SameSite.</a><br /><br /><span class="default">&lt;?php<br /> ini_set</span><span class="keyword">(</span><span class="string">"session.cookie_secure"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /> </span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">my PHP code </span><span class="keyword">.... <br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99845">  <div class="votes">
    <div id="Vu99845">
    <a href="/manual/vote-note.php?id=99845&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99845">
    <a href="/manual/vote-note.php?id=99845&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99845" title="53% like this...">
    4
    </div>
  </div>
  <a href="#99845" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#99845"> &para;</a><div class="date" title="2010-09-10 03:20"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99845">
<div class="phpcode"><code><span class="html">A period in a cookie name (like user.name) seems to show up in the $_COOKIE array as an underscore (so user_name). This means that for example $_COOKIE["user_name"] must be used to read a cookie that has been set with setcookie("user.name" ...), which is already rather confusing. <br /><br />Furthermore the variable $_COOKIE["user_name"] will retain the value set by setcookie("user.name" ...) and no amount of calling setcookie("user_name" ...) will alter this value. This is rather trivially fixed by clearing the "user.name" cookie, but it can take a while to realize this since there's only "user_name" in $_COOKIE.<br /><br />Hope this saves someone some time.</span></code></div>
  </div>
 </div>
  <div class="note" id="91140">  <div class="votes">
    <div id="Vu91140">
    <a href="/manual/vote-note.php?id=91140&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91140">
    <a href="/manual/vote-note.php?id=91140&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91140" title="52% like this...">
    3
    </div>
  </div>
  <a href="#91140" class="name">
  <strong class="user"><em>laffen</em></strong></a><a class="genanchor" href="#91140"> &para;</a><div class="date" title="2009-05-27 01:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91140">
<div class="phpcode"><code><span class="html">Note that the $_COOKIE variable not will hold multiple cookies with the same name. It is legitimate to set two cookies with the same name to the same host where the sub domain is different. <br /><span class="default">&lt;?php<br />setcookie</span><span class="keyword">(</span><span class="string">"testcookie"</span><span class="keyword">, </span><span class="string">"value1hostonly"</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">(), </span><span class="string">"/"</span><span class="keyword">, </span><span class="string">".example.com"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">setcookie</span><span class="keyword">(</span><span class="string">"testcookie"</span><span class="keyword">, </span><span class="string">"value2subdom"</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">(), </span><span class="string">"/"</span><span class="keyword">, </span><span class="string">"subdom.example.com"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>The next request from the browser will have both cookies in the $_SERVER['HTTP_COOKIE'] variable, but only one of them will be found in the $_COOKIE variable. Requests to subdom.example.com will have both cookies, while browser request to example.com or www.example.com only sends the cookie with the "value1hostonly" value.<br /><br /><span class="default">&lt;?php<br />$kaker </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">";"</span><span class="keyword">, </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'HTTP_COOKIE'</span><span class="keyword">]);<br />foreach(</span><span class="default">$kaker </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">){<br />    </span><span class="default">$k </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"="</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />    echo </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) . </span><span class="string">" =&gt; " </span><span class="keyword">. </span><span class="default">$k</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">// output<br /></span><span class="default">testcookie </span><span class="keyword">=&gt; </span><span class="default">value1hostonly<br />testcookie </span><span class="keyword">=&gt; </span><span class="default">value2subdom<br /><br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130409">  <div class="votes">
    <div id="Vu130409">
    <a href="/manual/vote-note.php?id=130409&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130409">
    <a href="/manual/vote-note.php?id=130409&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130409" title="no votes...">
    0
    </div>
  </div>
  <a href="#130409" class="name">
  <strong class="user"><em>alexsvetalena at mail dot ru</em></strong></a><a class="genanchor" href="#130409"> &para;</a><div class="date" title="2025-07-07 01:43"><strong>2 months ago</strong></div>
  <div class="text" id="Hcom130409">
<div class="phpcode"><code><span class="html">Please keep in mind that if you call setcookie() several times during the script execution (even for the same name, domain and path), then Set-Cookie header will be sent several times, and only after receiving all of them, client browser will "merge" them, replacing first value for the cookie with the next etc.<br /><br />This may cause very large headers length sometimes, so you'll have to either increase buffers for your web server; change your code logic to determine all possibly-changing parameters values right from the start; implement some sort of global Response object keeping all the data, including cookies as well, till the end of processing (sort of optimized output beffering); or just avoid storing any large data in cookies.</span></code></div>
  </div>
 </div>
  <div class="note" id="129988">  <div class="votes">
    <div id="Vu129988">
    <a href="/manual/vote-note.php?id=129988&amp;page=function.setcookie&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129988">
    <a href="/manual/vote-note.php?id=129988&amp;page=function.setcookie&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129988" title="50% like this...">
    0
    </div>
  </div>
  <a href="#129988" class="name">
  <strong class="user"><em>steven at sovstack dot com</em></strong></a><a class="genanchor" href="#129988"> &para;</a><div class="date" title="2025-01-20 07:55"><strong>8 months ago</strong></div>
  <div class="text" id="Hcom129988">
<div class="phpcode"><code><span class="html">As of PHP 7.3, you can use this syntax:<br /><br />setcookie( $name,  $value,  $options)<br /><br />Be aware that the array in $options is not fully compatible with array key names. In other words, the order of your array values matters regardless of the array key names.<br /><br /><span class="default">&lt;?PHP<br /><br /></span><span class="comment">// Correct (with key names):<br /></span><span class="default">setcookie</span><span class="keyword">(<br />    </span><span class="string">'my_cookie'</span><span class="keyword">,<br />    </span><span class="string">'my_value'</span><span class="keyword">,<br />    [<br />        </span><span class="string">'expires' </span><span class="keyword">=&gt; </span><span class="default">time</span><span class="keyword">() + </span><span class="default">3600</span><span class="keyword">,<br />        </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">,<br />    ]<br />);<br /><br /></span><span class="comment">// Correct (without key names):<br /></span><span class="default">setcookie</span><span class="keyword">(<br />    </span><span class="string">'my_cookie'</span><span class="keyword">,<br />    </span><span class="string">'my_value'</span><span class="keyword">,<br />    [<br />        </span><span class="default">time</span><span class="keyword">() + </span><span class="default">3600</span><span class="keyword">, </span><span class="comment">// expires<br />        </span><span class="string">'/' </span><span class="comment">// path<br />    </span><span class="keyword">]<br />);<br /><br /></span><span class="comment">// Incorrect Usage (wrong order as key names are ignored):<br /></span><span class="default">setcookie</span><span class="keyword">(<br />    </span><span class="string">'my_cookie'</span><span class="keyword">,<br />    </span><span class="string">'my_value'</span><span class="keyword">,<br />    [<br />        </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'/'</span><span class="keyword">, </span><span class="comment">// WRONG: should be 2nd<br />        </span><span class="string">'expires' </span><span class="keyword">=&gt; </span><span class="default">time</span><span class="keyword">() + </span><span class="default">3600</span><span class="keyword">, </span><span class="comment">// WRONG: should be 1st<br />    </span><span class="keyword">]<br />);<br /><br /></span><span class="comment">// Here's the correct order of the $options array with default values:<br /></span><span class="default">$options </span><span class="keyword">= [<br />    </span><span class="string">'expires' </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">,<br />    </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />    </span><span class="string">'domain' </span><span class="keyword">=&gt; </span><span class="string">""</span><span class="keyword">,<br />    </span><span class="string">'secure' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,<br />    </span><span class="string">'httponly' </span><span class="keyword">=&gt; </span><span class="default">false<br /></span><span class="keyword">];<br /><br /></span><span class="default">setcookie</span><span class="keyword">(<br />    </span><span class="string">'my_cookie'</span><span class="keyword">,<br />    </span><span class="string">'my_value'</span><span class="keyword">,<br />    </span><span class="default">$options <br /></span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />If you do not provide options, the default values will be used.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.setcookie&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.setcookie.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
