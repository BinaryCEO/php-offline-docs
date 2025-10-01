<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: json_decode - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.json-decode.php">
 <link rel="shorturl" href="https://www.php.net/json-decode">
 <link rel="alternate" href="https://www.php.net/json-decode" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.json.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.json.php">
 <link rel="next" href="https://www.php.net/manual/en/function.json-encode.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.json-decode.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.json-decode.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.json-decode.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.json-decode.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.json-decode.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.json-decode.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.json-decode.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.json-decode.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.json-decode.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.json-decode.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.json-decode.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Decodes a JSON string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: json_decode - Manual" />
<meta name="twitter:description" content="Decodes a JSON string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: json_decode - Manual" />
<meta itemprop="description" content="Decodes a JSON string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Decodes a JSON string" />

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
        <a href="function.json-encode.php">
          json_encode &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.json.php">
          &laquo; JSON Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.json.php'>JSON</a></li>      <li><a href='ref.json.php'>JSON Functions</a></li>      </ul>
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
            <option value='en/function.json-decode.php' selected="selected">English</option>
            <option value='de/function.json-decode.php'>German</option>
            <option value='es/function.json-decode.php'>Spanish</option>
            <option value='fr/function.json-decode.php'>French</option>
            <option value='it/function.json-decode.php'>Italian</option>
            <option value='ja/function.json-decode.php'>Japanese</option>
            <option value='pt_BR/function.json-decode.php'>Brazilian Portuguese</option>
            <option value='ru/function.json-decode.php'>Russian</option>
            <option value='tr/function.json-decode.php'>Turkish</option>
            <option value='uk/function.json-decode.php'>Ukrainian</option>
            <option value='zh/function.json-decode.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.json-decode" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">json_decode</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL json &gt;= 1.2.0)</p><p class="refpurpose"><span class="refname">json_decode</span> &mdash; <span class="dc-title">Decodes a JSON string</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.json-decode-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>json_decode</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$json</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$associative</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$depth</code><span class="initializer"> = 512</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   Takes a JSON encoded string and converts it into a PHP value.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.json-decode-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">json</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">json</code> <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being decoded.
      </p>
      <p class="para">
       This function only works with UTF-8 encoded strings.
      </p>
      
 <blockquote class="note"><p><strong class="note">Note</strong>: 
  <p class="para">
   PHP implements a superset of JSON as specified in the original
   <a href="https://datatracker.ietf.org/doc/html/rfc7159" class="link external">&raquo;&nbsp;RFC 7159</a>.
  </p>
 </p></blockquote>

     </dd>
    
    
     <dt><code class="parameter">associative</code></dt>
     <dd>
      <p class="para">
       When <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, JSON objects will be returned as
       associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s; when <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, JSON objects will be returned as <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s.
       When <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, JSON objects will be returned as associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s or
       <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s depending on whether <strong><code><a href="json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></code></strong>
       is set in the <code class="parameter">flags</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">depth</code></dt>
     <dd>
      <p class="para">
       Maximum nesting depth of the structure being decoded.
       The value must be greater than <code class="literal">0</code>,
       and less than or equal to <code class="literal">2147483647</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Bitmask of
       <strong><code><a href="json.constants.php#constant.json-bigint-as-string">JSON_BIGINT_AS_STRING</a></code></strong>,
       <strong><code><a href="json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></code></strong>,
       <strong><code><a href="json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></code></strong>,
       <strong><code><a href="json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></code></strong>,
       <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>.
       The behaviour of these constants is described on the
       <a href="json.constants.php" class="link">JSON constants</a> page.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.json-decode-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the value encoded in <code class="parameter">json</code> as an appropriate
   PHP type. Unquoted values <code class="literal">true</code>, <code class="literal">false</code>
   and <code class="literal">null</code> are returned as <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> and <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> respectively. <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned if the
   <code class="parameter">json</code> cannot be decoded or if the encoded data is
   deeper than the nesting limit.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.json-decode-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If <code class="parameter">depth</code> is outside the allowed range,
   a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown as of PHP 8.0.0,
   while previously, an error of level <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.json-decode-changelog">
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
        <strong><code><a href="json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>
        <code class="parameter">flags</code> was added.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <code class="parameter">associative</code> is nullable now.
       </td>
      </tr>

      <tr>
       <td>7.2.0</td>
       <td>
        <strong><code><a href="json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></code></strong>, and
        <strong><code><a href="json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></code></strong>
        <code class="parameter">flags</code> were added.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        An empty JSON key (&quot;&quot;) can be encoded to the empty object property
        instead of using a key with value <code class="literal">_empty_</code>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.json-decode-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3703">
    <p><strong>Example #1 <span class="function"><strong>json_decode()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"a":1,"b":2,"c":3,"d":4,"e":5}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(stdClass)#1 (5) {
    [&quot;a&quot;] =&gt; int(1)
    [&quot;b&quot;] =&gt; int(2)
    [&quot;c&quot;] =&gt; int(3)
    [&quot;d&quot;] =&gt; int(4)
    [&quot;e&quot;] =&gt; int(5)
}

array(5) {
    [&quot;a&quot;] =&gt; int(1)
    [&quot;b&quot;] =&gt; int(2)
    [&quot;c&quot;] =&gt; int(3)
    [&quot;d&quot;] =&gt; int(4)
    [&quot;e&quot;] =&gt; int(5)
}</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-3704">
    <p><strong>Example #2 Accessing invalid object properties</strong></p>
    <div class="example-contents"><p>
     Accessing elements within an object that contain characters not
     permitted under PHP&#039;s naming convention (e.g. the hyphen) can be
     accomplished by encapsulating the element name within braces and the apostrophe.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"foo-bar": 12345}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$obj </span><span style="color: #007700">= </span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">);<br />print </span><span style="color: #0000BB">$obj</span><span style="color: #007700">-&gt;{</span><span style="color: #DD0000">'foo-bar'</span><span style="color: #007700">}; </span><span style="color: #FF8000">// 12345<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3705">
    <p><strong>Example #3 common mistakes using <span class="function"><strong>json_decode()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// the following strings are valid JavaScript but not valid JSON<br /><br />// the name and value must be enclosed in double quotes<br />// single quotes are not valid <br /></span><span style="color: #0000BB">$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">"{ 'bar': 'baz' }"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br /><br />// the name must be enclosed in double quotes<br /></span><span style="color: #0000BB">$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{ bar: "baz" }'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br /><br />// trailing commas are not allowed<br /></span><span style="color: #0000BB">$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{ bar: "baz", }'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-3706">
    <p><strong>Example #4 <code class="parameter">depth</code> errors</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Encode some data with a maximum depth  of 4 (array -&gt; array -&gt; array -&gt; string)<br /></span><span style="color: #0000BB">$json </span><span style="color: #007700">= </span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(<br />    array(<br />        </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; array(<br />            </span><span style="color: #DD0000">'English' </span><span style="color: #007700">=&gt; array(<br />                </span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />                </span><span style="color: #DD0000">'January'<br />            </span><span style="color: #007700">),<br />            </span><span style="color: #DD0000">'French' </span><span style="color: #007700">=&gt; array(<br />                </span><span style="color: #DD0000">'Une'</span><span style="color: #007700">,<br />                </span><span style="color: #DD0000">'Janvier'<br />            </span><span style="color: #007700">)<br />        )<br />    )<br />);<br /><br /></span><span style="color: #FF8000">// Show the errors for different depths.<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">));<br />echo </span><span style="color: #DD0000">'Last error: '</span><span style="color: #007700">, </span><span style="color: #0000BB">json_last_error_msg</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">));<br />echo </span><span style="color: #DD0000">'Last error: '</span><span style="color: #007700">, </span><span style="color: #0000BB">json_last_error_msg</span><span style="color: #007700">(), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">array(1) {
  [1]=&gt;
  array(2) {
    [&quot;English&quot;]=&gt;
    array(2) {
      [0]=&gt;
      string(3) &quot;One&quot;
      [1]=&gt;
      string(7) &quot;January&quot;
    }
    [&quot;French&quot;]=&gt;
    array(2) {
      [0]=&gt;
      string(3) &quot;Une&quot;
      [1]=&gt;
      string(7) &quot;Janvier&quot;
    }
  }
}
Last error: No error

NULL
Last error: Maximum stack depth exceeded</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-3707">
    <p><strong>Example #5 <span class="function"><strong>json_decode()</strong></span> of large integers</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"number": 12345678901234567890}'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">json_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$json</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">512</span><span style="color: #007700">, </span><span style="color: #0000BB">JSON_BIGINT_AS_STRING</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(stdClass)#1 (1) {
  [&quot;number&quot;]=&gt;
  float(1.2345678901235E+19)
}
object(stdClass)#1 (1) {
  [&quot;number&quot;]=&gt;
  string(20) &quot;12345678901234567890&quot;
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.json-decode-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The JSON spec is not JavaScript, but a subset of JavaScript.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In the event of a failure to decode, <span class="function"><a href="function.json-last-error.php" class="function">json_last_error()</a></span>
    can be used to determine the exact nature of the error.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.json-decode-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.json-encode.php" class="function" rel="rdfs-seeAlso">json_encode()</a> - Returns the JSON representation of a value</span></li>
    <li><span class="function"><a href="function.json-last-error.php" class="function" rel="rdfs-seeAlso">json_last_error()</a> - Returns the last error occurred</span></li>
    <li><span class="function"><a href="function.json-last-error-msg.php" class="function" rel="rdfs-seeAlso">json_last_error_msg()</a> - Returns the error string of the last json_validate(), json_encode() or json_decode() call</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/json/functions/json-decode.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.json-decode%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.json-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.json-decode.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126787">  <div class="votes">
    <div id="Vu126787">
    <a href="/manual/vote-note.php?id=126787&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126787">
    <a href="/manual/vote-note.php?id=126787&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126787" title="66% like this...">
    23
    </div>
  </div>
  <a href="#126787" class="name">
  <strong class="user"><em>Lennart Hengstmengel</em></strong></a><a class="genanchor" href="#126787"> &para;</a><div class="date" title="2022-01-21 05:42"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126787">
<div class="phpcode"><code><span class="html">JSON can be decoded to PHP arrays by using the $associative = true option. Be wary that associative arrays in PHP can be a "list" or "object" when converted to/from JSON, depending on the keys (of absence of them). <br /><br />You would expect that recoding and re-encoding will always yield the same JSON string, but take this example:<br /><br />    $json = '{"0": "No", "1": "Yes"}';<br />    $array = json_decode($json, true);  // decode as associative hash<br />    print json_encode($array) . PHP_EOL;<br /><br />This will output a different JSON string than the original:<br /><br />    ["No","Yes"]<br /><br />The object has turned into an array!<br /><br />Similarly, a array that doesn't have consecutive zero based numerical indexes, will be encoded to a JSON object instead of a list.<br /><br />    $array = [<br />        'first',<br />        'second',<br />        'third',<br />    ];<br />    print json_encode($array) . PHP_EOL;<br />    // remove the second element<br />    unset($array[1]);<br />    print json_encode($array) . PHP_EOL;<br /><br />The output will be:<br /><br />    ["first","second","third"]<br />    {"0":"first","2":"third"}<br /><br />The array has turned into an object! <br /><br />In other words, decoding/encoding to/from PHP arrays is not always symmetrical, or might not always return what you expect!<br /><br />On the other hand, decoding/encoding from/to stdClass objects (the default) is always symmetrical. <br /><br />Arrays may be somewhat easier to work with/transform than objects. But especially if you need to decode, and re-encode json, it might be prudent to decode to objects and not arrays. <br /><br />If you want to enforce an array to encode to a JSON list (all array keys will be discarded), use:<br /><br />    json_encode(array_values($array));<br /><br />If you want to enforce an array to encode to a JSON object, use:<br /><br />    json_encode((object)$array);<br /><br />See also: <a href="https://www.php.net/manual/en/function.array-is-list.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/function.array-is-list.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="125505">  <div class="votes">
    <div id="Vu125505">
    <a href="/manual/vote-note.php?id=125505&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125505">
    <a href="/manual/vote-note.php?id=125505&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125505" title="53% like this...">
    5
    </div>
  </div>
  <a href="#125505" class="name">
  <strong class="user"><em>cubefox at web dot NOSPAMPLEASE dot de</em></strong></a><a class="genanchor" href="#125505"> &para;</a><div class="date" title="2020-11-11 01:18"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125505">
<div class="phpcode"><code><span class="html">Warning: As the section "return values" mentions, the return value NULL is ambiguos. To repeat, it can mean three things:<br /><br />* The input string had the value "null"<br />* There was an error while parsing the input data<br />* The encoded data was deeper than the recursion limit<br /><br />To distinguish these cases, json_last_error() can be used.</span></code></div>
  </div>
 </div>
  <div class="note" id="130026">  <div class="votes">
    <div id="Vu130026">
    <a href="/manual/vote-note.php?id=130026&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130026">
    <a href="/manual/vote-note.php?id=130026&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130026" title="50% like this...">
    0
    </div>
  </div>
  <a href="#130026" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130026"> &para;</a><div class="date" title="2025-02-14 12:16"><strong>7 months ago</strong></div>
  <div class="text" id="Hcom130026">
<div class="phpcode"><code><span class="html">When JSON_OBJECT_AS_ARRAY is true, "json_decode($json)" is the same as "json_decode($json, false)" and return object actually. <br /><br /><span class="default">&lt;?php<br />$php_constants </span><span class="keyword">= (</span><span class="default">get_defined_constants</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">));<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="default">$php_constants</span><span class="keyword">[</span><span class="string">'json'</span><span class="keyword">][</span><span class="string">'JSON_OBJECT_AS_ARRAY'</span><span class="keyword">] . </span><span class="default">PHP_EOL</span><span class="keyword">);<br /></span><span class="default">$json </span><span class="keyword">= </span><span class="string">'{"a":1,"b":2,"c":3,"d":4,"e":5}'</span><span class="keyword">;<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">);</span><span class="comment">//false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">);</span><span class="comment">//false<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /><br /></span><span class="default">$data </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">);</span><span class="comment">//true<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128221">  <div class="votes">
    <div id="Vu128221">
    <a href="/manual/vote-note.php?id=128221&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128221">
    <a href="/manual/vote-note.php?id=128221&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128221" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128221" class="name">
  <strong class="user"><em>greaties at ghvernuft dot nl</em></strong></a><a class="genanchor" href="#128221"> &para;</a><div class="date" title="2023-02-14 03:42"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128221">
<div class="phpcode"><code><span class="html">To load an object with data in json format:<br />(bugfixed my previous comment)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">loadJSON</span><span class="keyword">(</span><span class="default">$Obj</span><span class="keyword">, </span><span class="default">$json</span><span class="keyword">)<br />{<br />    </span><span class="default">$dcod </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json</span><span class="keyword">);<br />    </span><span class="default">$prop </span><span class="keyword">= </span><span class="default">get_object_vars </span><span class="keyword">( </span><span class="default">$dcod </span><span class="keyword">);<br />    foreach(</span><span class="default">$prop </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$lock</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">property_exists </span><span class="keyword">( </span><span class="default">$Obj </span><span class="keyword">,  </span><span class="default">$key </span><span class="keyword">))<br />        {<br />            if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$dcod</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">))<br />            {<br />                </span><span class="default">loadJSON</span><span class="keyword">(</span><span class="default">$Obj</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">, </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$dcod</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">));<br />            }<br />            else<br />            {<br />                </span><span class="default">$Obj</span><span class="keyword">-&gt;</span><span class="default">$key </span><span class="keyword">= </span><span class="default">$dcod</span><span class="keyword">-&gt;</span><span class="default">$key</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    return </span><span class="default">$Obj</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Tested with: <br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Name<br /></span><span class="keyword">{<br />  public </span><span class="default">$first</span><span class="keyword">;<br />  public </span><span class="default">$last</span><span class="keyword">;<br />  public function </span><span class="default">fullname</span><span class="keyword">()<br />  {<br />    return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">first </span><span class="keyword">. </span><span class="string">" " </span><span class="keyword">. </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">last</span><span class="keyword">;<br />  }<br />}<br /></span><span class="default">$json </span><span class="keyword">= </span><span class="string">'{"first":"John","last":"Smith"}'</span><span class="keyword">;<br /><br /></span><span class="default">$infull </span><span class="keyword">= </span><span class="default">loadJSON</span><span class="keyword">((new </span><span class="default">Name</span><span class="keyword">), </span><span class="default">$json</span><span class="keyword">);<br />echo </span><span class="default">$infull</span><span class="keyword">-&gt;</span><span class="default">fullname</span><span class="keyword">();</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126006">  <div class="votes">
    <div id="Vu126006">
    <a href="/manual/vote-note.php?id=126006&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126006">
    <a href="/manual/vote-note.php?id=126006&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126006" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#126006" class="name">
  <strong class="user"><em>Alien426</em></strong></a><a class="genanchor" href="#126006"> &para;</a><div class="date" title="2021-04-14 09:11"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126006">
<div class="phpcode"><code><span class="html">Browsers don't choke on integers _starting_ with BigInt (64 bits), but before that (53 bits). The introduction of BigInt to modern browsers doesn't help much, when JSON handling functions do not support it. So I am trying to remedy that. My approach is to handle the decoded array before re-encoding it to a string:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fix_large_int</span><span class="keyword">(&amp;</span><span class="default">$value</span><span class="keyword">)<br /> {<br />  if (</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) &amp;&amp; </span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">9007199254740991</span><span class="keyword">)<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">strval</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br /> }<br /></span><span class="default">$json_str </span><span class="keyword">= </span><span class="string">'{"id":[1234567890123456789,12345678901234567890]}'</span><span class="keyword">;<br /></span><span class="default">$json_arr </span><span class="keyword">= </span><span class="default">json_decode</span><span class="keyword">(</span><span class="default">$json_str</span><span class="keyword">, </span><span class="default">flags</span><span class="keyword">: </span><span class="default">JSON_BIGINT_AS_STRING </span><span class="keyword">| </span><span class="default">JSON_OBJECT_AS_ARRAY</span><span class="keyword">);<br />echo(</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$json_arr</span><span class="keyword">)); </span><span class="comment">// {"id":[1234567890123456789,"12345678901234567890"]} (BigInt is already converted to a string here)<br /></span><span class="default">array_walk_recursive</span><span class="keyword">(</span><span class="default">$json_arr</span><span class="keyword">, </span><span class="string">'fix_large_int'</span><span class="keyword">);<br />echo(</span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$json_arr</span><span class="keyword">)); </span><span class="comment">// {"id":["1234567890123456789","12345678901234567890"]}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129852">  <div class="votes">
    <div id="Vu129852">
    <a href="/manual/vote-note.php?id=129852&amp;page=function.json-decode&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129852">
    <a href="/manual/vote-note.php?id=129852&amp;page=function.json-decode&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129852" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#129852" class="name">
  <strong class="user"><em>pablo dot pazos at cabolabs dot com</em></strong></a><a class="genanchor" href="#129852"> &para;</a><div class="date" title="2024-11-13 12:33"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129852">
<div class="phpcode"><code><span class="html">The return value says "Returns the value encoded in json as an appropriate PHP type.", that seems to be the description for the json_encode.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.json-decode&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.json-decode.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.json.php">JSON Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.json-decode.php" title="json_&#8203;decode">json_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.json-encode.php" title="json_&#8203;encode">json_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.json-last-error.php" title="json_&#8203;last_&#8203;error">json_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.json-last-error-msg.php" title="json_&#8203;last_&#8203;error_&#8203;msg">json_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.json-validate.php" title="json_&#8203;validate">json_&#8203;validate</a>
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
