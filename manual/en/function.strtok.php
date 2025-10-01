<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strtok - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strtok.php">
 <link rel="shorturl" href="https://www.php.net/strtok">
 <link rel="alternate" href="https://www.php.net/strtok" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strstr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.strtolower.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strtok.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strtok.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strtok.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strtok.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strtok.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strtok.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strtok.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strtok.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strtok.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strtok.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strtok.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Tokenize string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strtok - Manual" />
<meta name="twitter:description" content="Tokenize string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strtok - Manual" />
<meta itemprop="description" content="Tokenize string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Tokenize string" />

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
        <a href="function.strtolower.php">
          strtolower &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strstr.php">
          &laquo; strstr        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.strtok.php' selected="selected">English</option>
            <option value='de/function.strtok.php'>German</option>
            <option value='es/function.strtok.php'>Spanish</option>
            <option value='fr/function.strtok.php'>French</option>
            <option value='it/function.strtok.php'>Italian</option>
            <option value='ja/function.strtok.php'>Japanese</option>
            <option value='pt_BR/function.strtok.php'>Brazilian Portuguese</option>
            <option value='ru/function.strtok.php'>Russian</option>
            <option value='tr/function.strtok.php'>Turkish</option>
            <option value='uk/function.strtok.php'>Ukrainian</option>
            <option value='zh/function.strtok.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strtok" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strtok</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtok</span> &mdash; <span class="dc-title">Tokenize string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strtok-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strtok</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$token</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="simpara">Alternative signature (not supported with named arguments):</p>
  <div class="methodsynopsis dc-description"><span class="methodname"><strong>strtok</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$token</code></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>strtok()</strong></span> splits a string (<code class="parameter">string</code>)
   into smaller strings (tokens), with each token being delimited by any
   character from <code class="parameter">token</code>.
   That is, if you have a string like &quot;This is an example string&quot; you
   could tokenize this string into its individual words by using the
   space character as the <code class="parameter">token</code>.
  </p>
  <p class="para">
   Note that only the first call to strtok uses the <code class="parameter">string</code> argument.
   Every subsequent call to strtok only needs the <code class="parameter">token</code> to use, as
   it keeps track of where it is in the current string.  To start
   over, or to tokenize a new string you simply call strtok with the
   <code class="parameter">string</code> argument again to initialize it.  Note that you may put
   multiple tokens in the <code class="parameter">token</code> parameter.  The string will be
   tokenized when any one of the characters in the <code class="parameter">token</code> argument is
   found.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function behaves slightly different from what one may expect being
    familiar with <span class="function"><a href="function.explode.php" class="function">explode()</a></span>. 
    First, a sequence of two or more contiguous <code class="parameter">token</code>
    characters in the parsed string is considered to be a single delimiter. 
    Also, a <code class="parameter">token</code> situated at the start or end of the
    string is ignored.
    For example, if a string <code class="literal">&quot;;aaa;;bbb;&quot;</code> is used, successive
    calls to <span class="function"><strong>strtok()</strong></span> with <code class="literal">&quot;;&quot;</code> as a
    <code class="parameter">token</code> would return strings
    &quot;aaa&quot; and &quot;bbb&quot;, and then <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
    As a result, the string will be split into only two elements, while
    <code class="literal">explode(&quot;;&quot;, $string)</code> would return an array of 5 elements.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strtok-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> being split up into smaller strings (tokens).
      </p>
     </dd>
    
    
     <dt><code class="parameter">token</code></dt>
     <dd>
      <p class="para">
       The delimiter used when splitting up <code class="parameter">string</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.strtok-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   A <span class="type"><a href="language.types.string.php" class="type string">string</a></span> token, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if no more tokens are available.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.strtok-changelog">
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
       <td>8.3.0</td>
       <td>
        Now emits <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> when <code class="parameter">token</code> is not provided.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strtok-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5173">
    <p><strong>Example #1 <span class="function"><strong>strtok()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">"This is\tan example\nstring"</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">/* Use tab and newline as tokenizing characters as well  */<br /></span><span style="color: #0000BB">$tok </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #DD0000">" \n\t"</span><span style="color: #007700">);<br /><br />while (</span><span style="color: #0000BB">$tok </span><span style="color: #007700">!== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"Word=</span><span style="color: #007700">{</span><span style="color: #0000BB">$tok</span><span style="color: #007700">}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$tok </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #DD0000">" \n\t"</span><span style="color: #007700">);<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5174">
    <p><strong>Example #2 <span class="function"><strong>strtok()</strong></span> behavior on empty part found</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$first_token  </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #DD0000">'/something'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$second_token </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #DD0000">'/'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$first_token</span><span style="color: #007700">, </span><span style="color: #0000BB">$second_token</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(9) &quot;something&quot;
    bool(false)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5175">
    <p><strong>Example #3 The difference between <span class="function"><strong>strtok()</strong></span> and <span class="function"><a href="function.explode.php" class="function">explode()</a></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= </span><span style="color: #DD0000">";aaa;;bbb;"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$parts </span><span style="color: #007700">= [];<br /></span><span style="color: #0000BB">$tok </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">, </span><span style="color: #DD0000">";"</span><span style="color: #007700">);<br />while (</span><span style="color: #0000BB">$tok </span><span style="color: #007700">!== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    </span><span style="color: #0000BB">$parts</span><span style="color: #007700">[] = </span><span style="color: #0000BB">$tok</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">$tok </span><span style="color: #007700">= </span><span style="color: #0000BB">strtok</span><span style="color: #007700">(</span><span style="color: #DD0000">";"</span><span style="color: #007700">);<br />}<br />echo </span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">),</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$parts </span><span style="color: #007700">= </span><span style="color: #0000BB">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">";"</span><span style="color: #007700">, </span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">json_encode</span><span style="color: #007700">(</span><span style="color: #0000BB">$parts</span><span style="color: #007700">),</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">[&quot;aaa&quot;,&quot;bbb&quot;]
[&quot;&quot;,&quot;aaa&quot;,&quot;&quot;,&quot;bbb&quot;,&quot;&quot;]</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.strtok-notes">
  <h3 class="title">Notes</h3>
  
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function may
return Boolean <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>, but may also return a non-Boolean value which
evaluates to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Please read the section on <a href="language.types.boolean.php" class="link">Booleans</a> for more
information. Use <a href="language.operators.comparison.php" class="link">the ===
operator</a> for testing the return value of this
function.</p></div>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.strtok-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/strtok.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strtok%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strtok&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtok.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113256">  <div class="votes">
    <div id="Vu113256">
    <a href="/manual/vote-note.php?id=113256&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113256">
    <a href="/manual/vote-note.php?id=113256&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113256" title="65% like this...">
    96
    </div>
  </div>
  <a href="#113256" class="name">
  <strong class="user"><em>eep2004 at ukr dot net</em></strong></a><a class="genanchor" href="#113256"> &para;</a><div class="date" title="2013-09-18 04:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113256">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// strtok example<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">'Hello to all of Ukraine'</span><span class="keyword">;<br />echo </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">' '</span><span class="keyword">).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Result:<br />Hello to all</span></code></div>
  </div>
 </div>
  <div class="note" id="103051">  <div class="votes">
    <div id="Vu103051">
    <a href="/manual/vote-note.php?id=103051&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103051">
    <a href="/manual/vote-note.php?id=103051&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103051" title="76% like this...">
    23
    </div>
  </div>
  <a href="#103051" class="name">
  <strong class="user"><em>elarlang at gmail dot com</em></strong></a><a class="genanchor" href="#103051"> &para;</a><div class="date" title="2011-03-22 10:45"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103051">
<div class="phpcode"><code><span class="html">If you have memory-usage critical solution, you should keep in mind, that strtok function holds input string parameter (or reference to it?) in memory after usage.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">tokenize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">) {<br />    </span><span class="default">$word </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">);<br />    while (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="comment">// do something here...<br />        </span><span class="default">$word </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$token_symbols</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span>Test-cases with handling ~10MB plain-text file:<br />Case #1 - unset $str variable<br /><span class="default">&lt;?php<br />$token_symbols </span><span class="keyword">= </span><span class="string">" \t\n"</span><span class="keyword">;<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'10MB.txt'</span><span class="keyword">); </span><span class="comment">// mem usage 9.75383758545 MB (memory_get_usage() / 1024 / 1024)); <br /></span><span class="default">tokenize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">); </span><span class="comment">// mem usage 9.75400161743 MB<br /></span><span class="keyword">unset(</span><span class="default">$str</span><span class="keyword">); </span><span class="comment">// 9.75395584106 MB<br /></span><span class="default">?&gt;<br /></span>Case #1 result: memory is still used<br /><br />Case #2 - call strtok again<br /><span class="default">&lt;?php<br />$token_symbols </span><span class="keyword">= </span><span class="string">" \t\n"</span><span class="keyword">;<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'10MB.txt'</span><span class="keyword">); </span><span class="comment">// 9.75401306152 MB<br /></span><span class="default">tokenize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">); </span><span class="comment">// 9.75417709351<br /></span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">); </span><span class="comment">// 9.75421524048<br /></span><span class="default">?&gt;<br /></span>Case #2 result: memory is still used<br /><br />Case #3 - call strtok again AND unset $str variable<br /><span class="default">&lt;?php<br />$token_symbols </span><span class="keyword">= </span><span class="string">" \t\n"</span><span class="keyword">;<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'10MB.txt'</span><span class="keyword">); </span><span class="comment">// 9.75410079956 MB<br /></span><span class="default">tokenize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">); </span><span class="comment">// 9.75426483154 MB<br /></span><span class="keyword">unset(</span><span class="default">$str</span><span class="keyword">);<br /></span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">); </span><span class="comment">// 0.0543975830078 MB<br /></span><span class="default">?&gt;<br /></span>Case #3 result: memory is free<br /><br />So, better solution for tokenize function:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">tokenize</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">, </span><span class="default">$token_reset </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="default">$word </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$token_symbols</span><span class="keyword">);<br />    while (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">$word</span><span class="keyword">) {<br />        </span><span class="comment">// do something here...<br />        </span><span class="default">$word </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$token_symbols</span><span class="keyword">);<br />    }<br /><br />    if(</span><span class="default">$token_reset</span><span class="keyword">)<br />        </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="43381">  <div class="votes">
    <div id="Vu43381">
    <a href="/manual/vote-note.php?id=43381&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43381">
    <a href="/manual/vote-note.php?id=43381&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43381" title="70% like this...">
    26
    </div>
  </div>
  <a href="#43381" class="name">
  <strong class="user"><em>manicdepressive at mindless dot com</em></strong></a><a class="genanchor" href="#43381"> &para;</a><div class="date" title="2004-06-19 06:01"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43381">
<div class="phpcode"><code><span class="html">&lt;pre&gt;<span class="default">&lt;?php<br /></span><span class="comment">/** get leading, trailing, and embedded separator tokens that were 'skipped'<br />if for some ungodly reason you are using php to implement a simple parser that <br />needs to detect nested clauses as it builds a parse tree */<br /><br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"(((alpha(beta))(gamma))"</span><span class="keyword">;<br /><br /></span><span class="default">$seps </span><span class="keyword">= </span><span class="string">'()'</span><span class="keyword">;<br /></span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">( </span><span class="default">$str</span><span class="keyword">,</span><span class="default">$seps </span><span class="keyword">); </span><span class="comment">// return false on empty string or null<br /></span><span class="default">$cur </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;      <br /></span><span class="default">$dumbDone </span><span class="keyword">= </span><span class="default">FALSE</span><span class="keyword">;<br /></span><span class="default">$done </span><span class="keyword">= (</span><span class="default">FALSE</span><span class="keyword">===</span><span class="default">$tok</span><span class="keyword">);<br />while (!</span><span class="default">$done</span><span class="keyword">) {<br />   </span><span class="comment">// process skipped tokens (if any at first iteration) (special for last)<br />   </span><span class="default">$posTok </span><span class="keyword">= </span><span class="default">$dumbDone </span><span class="keyword">? </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) : </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$tok</span><span class="keyword">, </span><span class="default">$cur </span><span class="keyword">);<br />   </span><span class="default">$skippedMany </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">( </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$cur</span><span class="keyword">, </span><span class="default">$posTok</span><span class="keyword">-</span><span class="default">$cur </span><span class="keyword">); </span><span class="comment">// false when 0 width<br />   </span><span class="default">$lenSkipped </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$skippedMany</span><span class="keyword">); </span><span class="comment">// 0 when false<br />   </span><span class="keyword">if (</span><span class="default">0</span><span class="keyword">!==</span><span class="default">$lenSkipped</span><span class="keyword">) {<br />      </span><span class="default">$last </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$skippedMany</span><span class="keyword">) -</span><span class="default">1</span><span class="keyword">;<br />      for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$last</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />         </span><span class="default">$skipped </span><span class="keyword">= </span><span class="default">$skippedMany</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />         </span><span class="default">$cur </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$skipped</span><span class="keyword">);<br />         echo </span><span class="string">"skipped: </span><span class="default">$skipped</span><span class="string">\n"</span><span class="keyword">;<br />      }<br />   }<br />   if (</span><span class="default">$dumbDone</span><span class="keyword">) break; </span><span class="comment">// this is the only place the loop is terminated<br /><br />   // process current tok<br />   </span><span class="keyword">echo </span><span class="string">"curr tok: "</span><span class="keyword">.</span><span class="default">$tok</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br /><br />   </span><span class="comment">// update cursor<br />   </span><span class="default">$cur </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$tok</span><span class="keyword">);<br /><br />   </span><span class="comment">// get any next tok<br />   </span><span class="keyword">if (!</span><span class="default">$dumbDone</span><span class="keyword">){<br />      </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$seps</span><span class="keyword">);<br />      </span><span class="default">$dumbDone </span><span class="keyword">= (</span><span class="default">FALSE</span><span class="keyword">===</span><span class="default">$tok</span><span class="keyword">); <br />      </span><span class="comment">// you're not really done till you check for trailing skipped<br />   </span><span class="keyword">}<br />};<br /></span><span class="default">?&gt;</span>&lt;/pre&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="116458">  <div class="votes">
    <div id="Vu116458">
    <a href="/manual/vote-note.php?id=116458&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116458">
    <a href="/manual/vote-note.php?id=116458&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116458" title="67% like this...">
    19
    </div>
  </div>
  <a href="#116458" class="name">
  <strong class="user"><em>eep2004 at ukr dot net</em></strong></a><a class="genanchor" href="#116458"> &para;</a><div class="date" title="2015-01-06 08:40"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116458">
<div class="phpcode"><code><span class="html">Remove GET variables from the URL<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'<a href="http://example.com/index.php?foo=1&amp;bar=2" rel="nofollow" target="_blank">http://example.com/index.php?foo=1&amp;bar=2</a>'</span><span class="keyword">, </span><span class="string">'?'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Result:<br /><a href="http://example.com/index.php" rel="nofollow" target="_blank">http://example.com/index.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="94463">  <div class="votes">
    <div id="Vu94463">
    <a href="/manual/vote-note.php?id=94463&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94463">
    <a href="/manual/vote-note.php?id=94463&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94463" title="66% like this...">
    6
    </div>
  </div>
  <a href="#94463" class="name">
  <strong class="user"><em>benighted at gmail dot com</em></strong></a><a class="genanchor" href="#94463"> &para;</a><div class="date" title="2009-11-06 06:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94463">
<div class="phpcode"><code><span class="html">Simple way to tokenize search parameters, including double or single quoted keys.  If only one quote is found, the rest of the string is assumed to be part of that token.
<br />
<br /><span class="default">&lt;?php
<br />            $token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$keywords</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">);
<br />            while (</span><span class="default">$token</span><span class="keyword">) {
<br />                </span><span class="comment">// find double quoted tokens
<br />                </span><span class="keyword">if (</span><span class="default">$token</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}==</span><span class="string">'"'</span><span class="keyword">) { </span><span class="default">$token </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">.</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'"'</span><span class="keyword">).</span><span class="string">'"'</span><span class="keyword">; }
<br />                </span><span class="comment">// find single quoted tokens
<br />                </span><span class="keyword">if (</span><span class="default">$token</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">}==</span><span class="string">"'"</span><span class="keyword">) { </span><span class="default">$token </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">.</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">).</span><span class="string">"'"</span><span class="keyword">; }
<br />
<br />                </span><span class="default">$tokens</span><span class="keyword">[] = </span><span class="default">$token</span><span class="keyword">;
<br />                </span><span class="default">$token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">);
<br />            }
<br /></span><span class="default">?&gt;
<br /></span>
<br />Use substr(1,strlen($token)) and remove the part that adds the trailing quotes if you want your output without quotes.</span></code></div>
  </div>
 </div>
  <div class="note" id="115124">  <div class="votes">
    <div id="Vu115124">
    <a href="/manual/vote-note.php?id=115124&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115124">
    <a href="/manual/vote-note.php?id=115124&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115124" title="61% like this...">
    6
    </div>
  </div>
  <a href="#115124" class="name">
  <strong class="user"><em>info at maisuma dot jp</em></strong></a><a class="genanchor" href="#115124"> &para;</a><div class="date" title="2014-05-30 08:15"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115124">
<div class="phpcode"><code><span class="html">If you want to tokenize by only one letter, explode() is much faster compared to strtok().<br /><br /><span class="default">&lt;?php<br />$str</span><span class="keyword">=</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'foo '</span><span class="keyword">,</span><span class="default">10000</span><span class="keyword">);<br /><br /></span><span class="comment">//explode()<br /></span><span class="default">$time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$arr</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="string">' '</span><span class="keyword">);<br /></span><span class="default">$time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">)-</span><span class="default">$time</span><span class="keyword">;<br />echo </span><span class="string">"explode():</span><span class="default">$time</span><span class="string"> sec."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">//strtok()<br /></span><span class="default">$time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$ret</span><span class="keyword">=</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">);<br />while(</span><span class="default">$ret</span><span class="keyword">!==</span><span class="default">FALSE</span><span class="keyword">){<br />    </span><span class="default">$ret</span><span class="keyword">=</span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">);<br />}<br /></span><span class="default">$time</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">)-</span><span class="default">$time</span><span class="keyword">;<br />echo </span><span class="string">"strtok():</span><span class="default">$time</span><span class="string"> sec."</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />The result is : (PHP 5.3.3 on CentOS)<br /><br />explode():0.001317024230957 sec.<br />strtok():0.0058917999267578 sec.<br /><br />explode() is about five times fast in short strings, too.</span></code></div>
  </div>
 </div>
  <div class="note" id="87977">  <div class="votes">
    <div id="Vu87977">
    <a href="/manual/vote-note.php?id=87977&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87977">
    <a href="/manual/vote-note.php?id=87977&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87977" title="59% like this...">
    5
    </div>
  </div>
  <a href="#87977" class="name">
  <strong class="user"><em>Logikos</em></strong></a><a class="genanchor" href="#87977"> &para;</a><div class="date" title="2009-01-03 10:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87977">
<div class="phpcode"><code><span class="html">This looks very simple, but it took me a long time to figure out so I thought I'd share it incase someone else was wanting the same thing:<br /><br />this should work similar to substr() but with tokens instead!<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* subtok(string,chr,pos,len)<br /> *<br /> * chr = chr used to seperate tokens<br /> * pos = starting postion<br /> * len = length, if negative count back from right<br /> * <br /> *  subtok('a.b.c.d.e','.',0)     = 'a.b.c.d.e'<br /> *  subtok('a.b.c.d.e','.',0,2)   = 'a.b'<br /> *  subtok('a.b.c.d.e','.',2,1)   = 'c'<br /> *  subtok('a.b.c.d.e','.',2,-1)  = 'c.d'<br /> *  subtok('a.b.c.d.e','.',-4)    = 'b.c.d.e'<br /> *  subtok('a.b.c.d.e','.',-4,2)  = 'b.c'<br /> *  subtok('a.b.c.d.e','.',-4,-1) = 'b.c.d'<br /> */<br /></span><span class="keyword">function </span><span class="default">subtok</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$chr</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">$len </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {<br />  return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">,</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="default">$chr</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">),</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />explode breaks the tokens up into an array, array slice alows you to pick then tokens you want, and then implode converts it back to a string<br /><br />although its far from a clone, this was inspired by mIRC's gettok() function</span></code></div>
  </div>
 </div>
  <div class="note" id="114349">  <div class="votes">
    <div id="Vu114349">
    <a href="/manual/vote-note.php?id=114349&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114349">
    <a href="/manual/vote-note.php?id=114349&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114349" title="58% like this...">
    3
    </div>
  </div>
  <a href="#114349" class="name">
  <strong class="user"><em>Axeia</em></strong></a><a class="genanchor" href="#114349"> &para;</a><div class="date" title="2014-02-11 05:12"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114349">
<div class="phpcode"><code><span class="html">Might be pointing out the obvious but if you'd rather use a for loop rather than a while (to keep the token strings on the same line for readability for example), it can be done. Added bonus, it doesn't put a $tok variable outside the loop itself either.<br />Downside however is that you're not able to manually free up the memory used using the technique mentioned by elarlang.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for(</span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="string">' _-.'</span><span class="keyword">); </span><span class="default">$tok</span><span class="keyword">!==</span><span class="default">false</span><span class="keyword">; </span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">' _-.'</span><span class="keyword">))<br />{<br />  echo </span><span class="string">"</span><span class="default">$tok</span><span class="string"> &lt;/br&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109415">  <div class="votes">
    <div id="Vu109415">
    <a href="/manual/vote-note.php?id=109415&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109415">
    <a href="/manual/vote-note.php?id=109415&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109415" title="58% like this...">
    2
    </div>
  </div>
  <a href="#109415" class="name">
  <strong class="user"><em>gilthans at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#109415"> &para;</a><div class="date" title="2012-07-15 06:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109415">
<div class="phpcode"><code><span class="html">Note that strtok may receive different tokens each time. Therefore, if, for example, you wish to extract several words and then the rest of the sentence:<br /><br /><span class="default">&lt;?php<br />$text </span><span class="keyword">= </span><span class="string">"13 202 5 This is a long message explaining the error codes."</span><span class="keyword">;<br /></span><span class="default">$error1 </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="string">" "</span><span class="keyword">); </span><span class="comment">//13<br /></span><span class="default">$error2 </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">); </span><span class="comment">//202<br /></span><span class="default">$error3 </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">); </span><span class="comment">//5<br /></span><span class="default">$error_message </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">); </span><span class="comment">//Notice the different token parameter<br /></span><span class="keyword">echo </span><span class="default">$error_message</span><span class="keyword">; </span><span class="comment">//This is a long message explaining the error codes.<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89421">  <div class="votes">
    <div id="Vu89421">
    <a href="/manual/vote-note.php?id=89421&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89421">
    <a href="/manual/vote-note.php?id=89421&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89421" title="56% like this...">
    3
    </div>
  </div>
  <a href="#89421" class="name">
  <strong class="user"><em>KrazyBox</em></strong></a><a class="genanchor" href="#89421"> &para;</a><div class="date" title="2009-03-06 06:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89421">
<div class="phpcode"><code><span class="html">As of the change in strtok()'s handling of empty strings, it is now useless for scripts that rely on empty data to function.<br /><br />Take for instance, a standard header. (with UNIX newlines)<br /><br />http/1.0 200 OK\n<br />Content-Type: text/html\n<br />\n<br />--HTML BODY HERE---<br /><br />When parsing this with strtok, one would wait until it found an empty string to signal the end of the header. However, because strtok now skips empty segments, it is impossible to know when the header has ended.<br />This should not be called `correct' behavior, it certainly is not. It has rendered strtok incapable of (properly) processing a very simple standard.<br /><br />This new functionality, however, does not affect Windows style headers. You would search for a line that only contains "\r"<br />This, however, is not a justification for the change.</span></code></div>
  </div>
 </div>
  <div class="note" id="93315">  <div class="votes">
    <div id="Vu93315">
    <a href="/manual/vote-note.php?id=93315&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93315">
    <a href="/manual/vote-note.php?id=93315&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93315" title="53% like this...">
    1
    </div>
  </div>
  <a href="#93315" class="name">
  <strong class="user"><em>azeem</em></strong></a><a class="genanchor" href="#93315"> &para;</a><div class="date" title="2009-09-02 12:14"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93315">
<div class="phpcode"><code><span class="html">Here is a java like StringTokenizer class using strtok function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * The string tokenizer class allows an application to break a string into tokens.<br /> *<br /> * @example The following is one example of the use of the tokenizer. The code:<br /> * &lt;code&gt;<br /> * &lt;?php<br /> *    $str = 'this is:@\t\n a test!';<br /> *    $delim = ' !@:'\t\n; // remove these chars<br /> *    $st = new StringTokenizer($str, $delim);<br /> *    while ($st-&gt;hasMoreTokens()) {<br /> *        echo $st-&gt;nextToken() . "\n";<br /> *    }<br /> *    prints the following output:<br /> *      this<br /> *      is<br /> *      a<br /> *      test<br /> * ?&gt;<br /> * &lt;/code&gt;<br /> */<br /></span><span class="keyword">class </span><span class="default">StringTokenizer </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * @var string<br />     */<br />    </span><span class="keyword">private </span><span class="default">$token</span><span class="keyword">;<br /><br />    </span><span class="comment">/**<br />     * @var string<br />     */<br />    </span><span class="keyword">private </span><span class="default">$delim</span><span class="keyword">;<br />    </span><span class="comment">/**<br />     * Constructs a string tokenizer for the specified string<br />     * @param string $str String to tokenize<br />     * @param string $delim The set of delimiters (the characters that separate tokens)<br />     * specified at creation time, default to ' '<br />     */<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="comment">/*string*/ </span><span class="default">$str</span><span class="keyword">, </span><span class="comment">/*string*/ </span><span class="default">$delim </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$delim</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delim </span><span class="keyword">= </span><span class="default">$delim</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">__destruct</span><span class="keyword">() {<br />        unset(</span><span class="default">$this</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Tests if there are more tokens available from this tokenizer's string. It<br />     * does not move the internal pointer in any way. To move the internal pointer<br />     * to the next element call nextToken()<br />     * @return boolean - true if has more tokens, false otherwise<br />     */<br />    </span><span class="keyword">public function </span><span class="default">hasMoreTokens</span><span class="keyword">() {<br />        return (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">token </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />     * Returns the next token from this string tokenizer and advances the internal<br />     * pointer by one.<br />     * @return string - next element in the tokenized string<br />     */<br />    </span><span class="keyword">public function </span><span class="default">nextToken</span><span class="keyword">() {<br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">token</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">delim</span><span class="keyword">);<br />        return </span><span class="default">$current</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128402">  <div class="votes">
    <div id="Vu128402">
    <a href="/manual/vote-note.php?id=128402&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128402">
    <a href="/manual/vote-note.php?id=128402&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128402" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128402" class="name">
  <strong class="user"><em>voojj3054 at gmail dot com</em></strong></a><a class="genanchor" href="#128402"> &para;</a><div class="date" title="2023-04-17 08:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128402">
<div class="phpcode"><code><span class="html">Hello, portuguese documentation of strtok is wrong, at this part which the example(2) is wrong.<br /><br />Exemplo #2 Comportamento antigo da strtok()<br /><span class="default">&lt;?php<br />$first_token  </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'/something'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">$second_token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">var_dump </span><span class="keyword">(</span><span class="default">$first_token</span><span class="keyword">, </span><span class="default">$second_token</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />O exemplo acima produzirá:<br /><br />    string(0) ""<br />    string(9) "something"<br /><br />(this example above, should be inverted as this:)<br /><br />Correct: <br />    string(9) "something"<br />    string(0) ""<br /><br />(exemple 3 is correct)<br />Exemplo #3 Novo comportamento da strtok()<br /><span class="default">&lt;?php<br />$first_token  </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'/something'</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">$second_token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">var_dump </span><span class="keyword">(</span><span class="default">$first_token</span><span class="keyword">, </span><span class="default">$second_token</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />O exemplo acima produzirá:<br /><br />    string(9) "something"<br />    bool(false)</span></code></div>
  </div>
 </div>
  <div class="note" id="103962">  <div class="votes">
    <div id="Vu103962">
    <a href="/manual/vote-note.php?id=103962&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103962">
    <a href="/manual/vote-note.php?id=103962&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103962" title="52% like this...">
    1
    </div>
  </div>
  <a href="#103962" class="name">
  <strong class="user"><em>pradador at me dot com</em></strong></a><a class="genanchor" href="#103962"> &para;</a><div class="date" title="2011-05-13 12:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103962">
<div class="phpcode"><code><span class="html">Here's a simple class that allows you to iterate through string tokens using a foreach loop.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * The TokenIterator class allows you to iterate through string tokens using
<br /> * the familiar foreach control structure.
<br /> * 
<br /> * Example:
<br /> * &lt;code&gt;
<br /> * &lt;?php
<br /> * $string = 'This is a test.';
<br /> * $delimiters = ' ';
<br /> * $ti = new TokenIterator($string, $delimiters);
<br /> * 
<br /> * foreach ($ti as $count =&gt; $token) {
<br /> *     echo sprintf("%d, %s\n", $count, $token); 
<br /> * }
<br /> * 
<br /> * // Prints the following output:
<br /> * // 0. This
<br /> * // 1. is
<br /> * // 2. a
<br /> * // 3. test.
<br /> * &lt;/code&gt;
<br /> */
<br /></span><span class="keyword">class </span><span class="default">TokenIterator </span><span class="keyword">implements </span><span class="default">Iterator
<br /></span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     * The string to tokenize.
<br />     * @var string
<br />     */
<br />    </span><span class="keyword">protected </span><span class="default">$_string</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">/**
<br />     * The token delimiters.
<br />     * @var string
<br />     */
<br />    </span><span class="keyword">protected </span><span class="default">$_delims</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">/**
<br />     * Stores the current token.
<br />     * @var mixed
<br />     */
<br />    </span><span class="keyword">protected </span><span class="default">$_token</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">/**
<br />     * Internal token counter.
<br />     * @var int
<br />     */
<br />    </span><span class="keyword">protected </span><span class="default">$_counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">/**
<br />     * Constructor.
<br />     * 
<br />     * @param string $string The string to tokenize.
<br />     * @param string $delims The token delimiters.
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$delims</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_string </span><span class="keyword">= </span><span class="default">$string</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_delims </span><span class="keyword">= </span><span class="default">$delims</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$delims</span><span class="keyword">);
<br />    }
<br />    
<br />    </span><span class="comment">/**
<br />     * @see Iterator::current()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">current</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_token</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="comment">/**
<br />     * @see Iterator::key()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">key</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_counter</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="comment">/**
<br />     * @see Iterator::next()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">next</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_delims</span><span class="keyword">);
<br />        
<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">valid</span><span class="keyword">()) {
<br />            ++</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_counter</span><span class="keyword">;
<br />        }
<br />    }
<br />
<br />    </span><span class="comment">/**
<br />     * @see Iterator::rewind()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">rewind</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_counter </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_token   </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_string</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_delims</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="comment">/**
<br />     * @see Iterator::valid()
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">valid</span><span class="keyword">()
<br />    {
<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_token </span><span class="keyword">!== </span><span class="default">FALSE</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129069">  <div class="votes">
    <div id="Vu129069">
    <a href="/manual/vote-note.php?id=129069&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129069">
    <a href="/manual/vote-note.php?id=129069&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129069" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129069" class="name">
  <strong class="user"><em>bohwaz</em></strong></a><a class="genanchor" href="#129069"> &para;</a><div class="date" title="2023-11-26 04:00"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129069">
<div class="phpcode"><code><span class="html">Please note that strtok memory is shared between all PHP code currently executed, even included files. This can bite you in unexpected ways if you are not careful.<br /><br />For example:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'dir/file.ext'</span><span class="keyword">;<br /></span><span class="default">$dir_name </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /><br />if (</span><span class="default">$dir_name </span><span class="keyword">!== (new </span><span class="default">Module</span><span class="keyword">)-&gt;</span><span class="default">getAllowedDirName</span><span class="keyword">()) {<br />  throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Invalid directory name'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$file_name </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Seems easy enough, but if your Module class is not loaded, this triggers the autoloader. The autoloader *MAY* use strtok inside its loading code.<br /><br />Or your Module class *MAY* use strtok inside its constructor.<br /><br />This means you will never get your $file_name correctly.<br /><br />So: you should *always* group strtok calls, without any external code between two strtok calls.<br /><br />This would be OK:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'dir/file.ext'</span><span class="keyword">;<br /></span><span class="default">$dir_name </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">$file_name </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br /><br />if (</span><span class="default">$dir_name </span><span class="keyword">!== (new </span><span class="default">Module</span><span class="keyword">)-&gt;</span><span class="default">getAllowedDirName</span><span class="keyword">()) {<br />  throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">'Invalid directory name'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This might cause issues:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'one/two#three'</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">Module</span><span class="keyword">::</span><span class="default">NAME_SEPARATOR</span><span class="keyword">);<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Because your autoloader might be using strtok.<br /><br />This would be avoided by fetching all parameters used in strtok *before* the calls:<br /><br /><span class="default">&lt;?php<br /><br />$path </span><span class="keyword">= </span><span class="string">'one/two#three'</span><span class="keyword">;<br /></span><span class="default">$separator </span><span class="keyword">= </span><span class="default">Module</span><span class="keyword">::</span><span class="default">NAME_SEPARATOR</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">, </span><span class="string">'/'</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$separator</span><span class="keyword">);<br /></span><span class="default">$c </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124067">  <div class="votes">
    <div id="Vu124067">
    <a href="/manual/vote-note.php?id=124067&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124067">
    <a href="/manual/vote-note.php?id=124067&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124067" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124067" class="name">
  <strong class="user"><em>heiangus at hotmail dot com</em></strong></a><a class="genanchor" href="#124067"> &para;</a><div class="date" title="2019-07-24 06:04"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124067">
<div class="phpcode"><code><span class="html">I found this useful for parsing user entered links in text fields.<br /><br />e.g. This is a link &lt;<a href="http://example.com&gt;" rel="nofollow" target="_blank">http://example.com&gt;</a><br /><br />    function parselink($link) {<br />        $bit1 = trim(strtok($link, '&lt;'));<br />        $bit2 = trim(strtok('&gt;')); <br />        $html = '&lt;a href="'.$bit2.'"&gt;'.$bit1.'&lt;/a&gt;';<br />        return $html; // &lt;a href="<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>"&gt;This is a link&lt;/a&gt;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="125793">  <div class="votes">
    <div id="Vu125793">
    <a href="/manual/vote-note.php?id=125793&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125793">
    <a href="/manual/vote-note.php?id=125793&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125793" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125793" class="name">
  <strong class="user"><em>David Spector</em></strong></a><a class="genanchor" href="#125793"> &para;</a><div class="date" title="2021-02-07 02:58"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125793">
<div class="phpcode"><code><span class="html">After obtaining zero or more tokens with calls to strtok, you can obtain the remainder of the input string by calling strtok with an empty string as the delimiter.</span></code></div>
  </div>
 </div>
  <div class="note" id="120170">  <div class="votes">
    <div id="Vu120170">
    <a href="/manual/vote-note.php?id=120170&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120170">
    <a href="/manual/vote-note.php?id=120170&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120170" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120170" class="name">
  <strong class="user"><em>charlie dot ded at orange dot fr</em></strong></a><a class="genanchor" href="#120170"> &para;</a><div class="date" title="2016-11-15 01:41"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120170">
<div class="phpcode"><code><span class="html">@maisuma you invert paramaters of explode() and strtok() functions, your code does not do what you expect.<br />You expect to read the input string token after token so equivalent code for strtok() is  arra_filter(explode()) because explode() return lines of empty string when several delimiters are contiguous in the read string, for example  2 whitespaces between.<br /><br />In fact strtok() is much faster (x2 at least) than arra_filter(explode()) if the read string contains several contiguous delimiters , <br /> it is slower if the read string contains one and only one delimiter between tokens.<br /><br /><span class="default">&lt;?php<br /><br />$repeat </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$delimiter </span><span class="keyword">= </span><span class="string">':'</span><span class="keyword">;<br /></span><span class="default">$str</span><span class="keyword">=</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">'foo:'</span><span class="keyword">,</span><span class="default">$repeat</span><span class="keyword">);<br /><br /></span><span class="default">$timeStrtok</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$token </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$delimiter</span><span class="keyword">);<br />while(</span><span class="default">$token</span><span class="keyword">!==</span><span class="default">FALSE</span><span class="keyword">){<br />    </span><span class="comment">//echo $token . ',';<br />    </span><span class="default">$token</span><span class="keyword">=</span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">); <br />}<br /></span><span class="default">$timeStrtok </span><span class="keyword">-=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /><br /></span><span class="default">$timeExplo</span><span class="keyword">=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="default">$delimiter</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br /></span><span class="comment">//$arr = array_filter($arr);<br /></span><span class="default">$timeExplo </span><span class="keyword">-=</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /><br /></span><span class="comment">//print_r($arr);<br /><br /></span><span class="default">$X </span><span class="keyword">= </span><span class="default">1000000</span><span class="keyword">; </span><span class="default">$unit </span><span class="keyword">= </span><span class="string">'microsec'</span><span class="keyword">;<br /><br />echo </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">' explode() : ' </span><span class="keyword">. -</span><span class="default">$timeExplo </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">.</span><span class="default">$unit </span><span class="keyword">.</span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">' strtok() :   ' </span><span class="keyword">. -</span><span class="default">$timeStrtok </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$unit </span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">$timeExplo</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(-</span><span class="default">$timeExplo</span><span class="keyword">*</span><span class="default">$X</span><span class="keyword">);<br /></span><span class="default">$timeStrtok</span><span class="keyword">=</span><span class="default">round</span><span class="keyword">(-</span><span class="default">$timeStrtok</span><span class="keyword">*</span><span class="default">$X</span><span class="keyword">);<br /><br />echo </span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">' explode() : ' </span><span class="keyword">. </span><span class="default">$timeExplo </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">.</span><span class="default">$unit </span><span class="keyword">.</span><span class="default">PHP_EOL </span><span class="keyword">. </span><span class="string">' strtok() :   ' </span><span class="keyword">. </span><span class="default">$timeStrtok </span><span class="keyword">. </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$unit </span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br />echo </span><span class="string">' ratio explode / strtok : ' </span><span class="keyword">. </span><span class="default">round</span><span class="keyword">(</span><span class="default">$timeExplo </span><span class="keyword">/ </span><span class="default">$timeStrtok</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101015">  <div class="votes">
    <div id="Vu101015">
    <a href="/manual/vote-note.php?id=101015&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101015">
    <a href="/manual/vote-note.php?id=101015&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101015" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101015" class="name">
  <strong class="user"><em>fabiolimasouto at gmail dot com</em></strong></a><a class="genanchor" href="#101015"> &para;</a><div class="date" title="2010-11-20 05:54"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101015">
<div class="phpcode"><code><span class="html">this example will hopefully help you understand how this function works:<br /><br /><span class="default">&lt;?php<br />$selector </span><span class="keyword">= </span><span class="string">'div.class#id'</span><span class="keyword">;<br /></span><span class="default">$tagname </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="default">$selector</span><span class="keyword">,</span><span class="string">'.#'</span><span class="keyword">);<br />echo </span><span class="default">$tagname</span><span class="keyword">.</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br /><br />while(</span><span class="default">$tok </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'.#'</span><span class="keyword">))<br />{<br /> echo </span><span class="default">$tok</span><span class="keyword">.</span><span class="string">'&lt;br/&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Outputs:<br />div<br />class<br />id</span></code></div>
  </div>
 </div>
  <div class="note" id="115872">  <div class="votes">
    <div id="Vu115872">
    <a href="/manual/vote-note.php?id=115872&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115872">
    <a href="/manual/vote-note.php?id=115872&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115872" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#115872" class="name">
  <strong class="user"><em>eep2004 at ukr dot net</em></strong></a><a class="genanchor" href="#115872"> &para;</a><div class="date" title="2014-10-07 10:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115872">
<div class="phpcode"><code><span class="html">Remove GET variables from the URL<br /><span class="default">&lt;?php<br />$url </span><span class="keyword">= </span><span class="default">strtok</span><span class="keyword">(</span><span class="string">'<a href="http://php.net/manual/en/ref.strings.php?foo=1&amp;bar=2" rel="nofollow" target="_blank">http://php.net/manual/en/ref.strings.php?foo=1&amp;bar=2</a>'</span><span class="keyword">, </span><span class="string">'?'</span><span class="keyword">);<br /></span><span class="comment">// $url = '<a href="http://php.net/manual/en/ref.strings.php" rel="nofollow" target="_blank">http://php.net/manual/en/ref.strings.php</a>'</span></span></code></div>
  </div>
 </div>
  <div class="note" id="62073">  <div class="votes">
    <div id="Vu62073">
    <a href="/manual/vote-note.php?id=62073&amp;page=function.strtok&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62073">
    <a href="/manual/vote-note.php?id=62073&amp;page=function.strtok&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62073" title="41% like this...">
    -2
    </div>
  </div>
  <a href="#62073" class="name">
  <strong class="user"><em>mac.com@nemo</em></strong></a><a class="genanchor" href="#62073"> &para;</a><div class="date" title="2006-02-18 01:49"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62073">
<div class="phpcode"><code><span class="html">This function takes a string and returns an array with words (delimited by spaces), also taking into account quotes, doublequotes, backticks and backslashes (for escaping stuff).<br />So<br /><br />$string = "cp   'my file' to `Judy's file`";<br />var_dump(parse_cli($string));<br /><br />would yield:<br /><br />array(4) {<br />  [0]=&gt;<br />  string(2) "cp"<br />  [1]=&gt;<br />  string(7) "my file"<br />  [2]=&gt;<br />  string(5) "to"<br />  [3]=&gt;<br />  string(11) "Judy's file"<br />}<br /><br />Way it works, runs through the string character by character, for each character looking up the action to take, based on that character and its current $state.<br />Actions can be (one or more of) adding the character/string to the current word, adding the word to the output array, and changing or (re)storing the state.<br />For example a space will become part of the current 'word' (or 'token') if $state is 'doublequoted', but it will start a new token if $state was 'unquoted'.<br />I was later told it's a "tokeniser using a finite state automaton". Who knew :-)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">#_____________________<br /># parse_cli($string) /<br /></span><span class="keyword">function </span><span class="default">parse_cli</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">) {<br />    </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'space'</span><span class="keyword">;<br />    </span><span class="default">$previous </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;     </span><span class="comment">// stores current state when encountering a backslash (which changes $state to 'escaped', but has to fall back into the previous $state afterwards)<br />    </span><span class="default">$out </span><span class="keyword">= array();     </span><span class="comment">// the return value<br />    </span><span class="default">$word </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$type </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;         </span><span class="comment">// type of character<br />    // array[states][chartypes] =&gt; actions<br />    </span><span class="default">$chart </span><span class="keyword">= array(<br />        </span><span class="string">'space'        </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">,   </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'q'</span><span class="keyword">,  </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'d'</span><span class="keyword">,  </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">,  </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'ue'</span><span class="keyword">, </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'ua'</span><span class="keyword">),<br />        </span><span class="string">'unquoted'     </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">'w '</span><span class="keyword">, </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,  </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">),<br />        </span><span class="string">'quoted'       </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'w '</span><span class="keyword">, </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,  </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">),<br />        </span><span class="string">'doublequoted' </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'w '</span><span class="keyword">, </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,  </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">),<br />        </span><span class="string">'backticked'   </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,  </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'w '</span><span class="keyword">, </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,  </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">),<br />        </span><span class="string">'escaped'      </span><span class="keyword">=&gt; array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">, </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">, </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">, </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">, </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">, </span><span class="string">'other'</span><span class="keyword">=&gt;</span><span class="string">'ap'</span><span class="keyword">));<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$char </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, array(</span><span class="string">'space'</span><span class="keyword">=&gt;</span><span class="string">' '</span><span class="keyword">, </span><span class="string">'quote'</span><span class="keyword">=&gt;</span><span class="string">'\''</span><span class="keyword">, </span><span class="string">'doublequote'</span><span class="keyword">=&gt;</span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'backtick'</span><span class="keyword">=&gt;</span><span class="string">'`'</span><span class="keyword">, </span><span class="string">'backslash'</span><span class="keyword">=&gt;</span><span class="string">'\\'</span><span class="keyword">));<br />        if (! </span><span class="default">$type</span><span class="keyword">) </span><span class="default">$type </span><span class="keyword">= </span><span class="string">'other'</span><span class="keyword">;<br />        if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">'other'</span><span class="keyword">) {<br />            </span><span class="comment">// grabs all characters that are also 'other' following the current one in one go<br />            </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/[ \'\"\`\\\]/"</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />            if (</span><span class="default">$matches</span><span class="keyword">) {<br />                </span><span class="default">$matches </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                </span><span class="default">$char </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]-</span><span class="default">$i</span><span class="keyword">); </span><span class="comment">// yep, $char length can be &gt; 1<br />                </span><span class="default">$i </span><span class="keyword">= </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;<br />            }else{<br />                </span><span class="comment">// no more match on special characters, that must mean this is the last word!<br />                // the .= hereunder is because we *might* be in the middle of a word that just contained special chars<br />                </span><span class="default">$word </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />                break; </span><span class="comment">// jumps out of the for() loop<br />            </span><span class="keyword">}<br />        }<br />        </span><span class="default">$actions </span><span class="keyword">= </span><span class="default">$chart</span><span class="keyword">[</span><span class="default">$state</span><span class="keyword">][</span><span class="default">$type</span><span class="keyword">];<br />        for(</span><span class="default">$j</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$actions</span><span class="keyword">); </span><span class="default">$j</span><span class="keyword">++) {<br />            </span><span class="default">$act </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$actions</span><span class="keyword">, </span><span class="default">$j</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">' '</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'space'</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'u'</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'unquoted'</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'q'</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'quoted'</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'d'</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'doublequoted'</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'b'</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'backticked'</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'e'</span><span class="keyword">) { </span><span class="default">$previous </span><span class="keyword">= </span><span class="default">$state</span><span class="keyword">; </span><span class="default">$state </span><span class="keyword">= </span><span class="string">'escaped'</span><span class="keyword">; }<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'a'</span><span class="keyword">) </span><span class="default">$word </span><span class="keyword">.= </span><span class="default">$char</span><span class="keyword">;<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'w'</span><span class="keyword">) { </span><span class="default">$out</span><span class="keyword">[] = </span><span class="default">$word</span><span class="keyword">; </span><span class="default">$word </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; }<br />            if (</span><span class="default">$act </span><span class="keyword">== </span><span class="string">'p'</span><span class="keyword">) </span><span class="default">$state </span><span class="keyword">= </span><span class="default">$previous</span><span class="keyword">;<br />        }<br />    }<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$word</span><span class="keyword">)) </span><span class="default">$out</span><span class="keyword">[] = </span><span class="default">$word</span><span class="keyword">;<br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strtok&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strtok.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="current">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
