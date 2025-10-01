<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mb_substr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mb-substr.php">
 <link rel="shorturl" href="https://www.php.net/mb-substr">
 <link rel="alternate" href="https://www.php.net/mb-substr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mbstring.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mb-substitute-character.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mb-substr-count.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mb-substr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mb-substr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mb-substr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mb-substr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mb-substr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mb-substr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mb-substr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mb-substr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mb-substr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mb-substr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mb-substr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get part of string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mb_substr - Manual" />
<meta name="twitter:description" content="Get part of string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mb_substr - Manual" />
<meta itemprop="description" content="Get part of string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get part of string" />

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
        <a href="function.mb-substr-count.php">
          mb_substr_count &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mb-substitute-character.php">
          &laquo; mb_substitute_character        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.international.php'>Human Language and Character Encoding Support</a></li>      <li><a href='book.mbstring.php'>Multibyte String</a></li>      <li><a href='ref.mbstring.php'>Multibyte String Functions</a></li>      </ul>
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
            <option value='en/function.mb-substr.php' selected="selected">English</option>
            <option value='de/function.mb-substr.php'>German</option>
            <option value='es/function.mb-substr.php'>Spanish</option>
            <option value='fr/function.mb-substr.php'>French</option>
            <option value='it/function.mb-substr.php'>Italian</option>
            <option value='ja/function.mb-substr.php'>Japanese</option>
            <option value='pt_BR/function.mb-substr.php'>Brazilian Portuguese</option>
            <option value='ru/function.mb-substr.php'>Russian</option>
            <option value='tr/function.mb-substr.php'>Turkish</option>
            <option value='uk/function.mb-substr.php'>Ukrainian</option>
            <option value='zh/function.mb-substr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mb-substr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mb_substr</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.6, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mb_substr</span> &mdash; <span class="dc-title">Get part of string</span></p>

 </div>
   
 <div class="refsect1 description" id="refsect1-function.mb-substr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mb_substr</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$start</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Performs a multi-byte safe
   <span class="function"><a href="function.substr.php" class="function">substr()</a></span> operation based on
   number of characters. Position is
   counted from the beginning of
   <code class="parameter">string</code>. First character&#039;s position is
   0. Second character position is 1, and so on. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mb-substr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> to extract the substring from.
      </p>
     </dd>
    
    
     <dt><code class="parameter">start</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">start</code> is non-negative, the returned string
       will start at the <code class="parameter">start</code>&#039;th position in
       <code class="parameter">string</code>, counting from zero. For instance,
       in the string &#039;<code class="literal">abcdef</code>&#039;, the character at
       position <code class="literal">0</code> is &#039;<code class="literal">a</code>&#039;, the
       character at position <code class="literal">2</code> is
       &#039;<code class="literal">c</code>&#039;, and so forth.
      </p>
      <p class="para">
       If <code class="parameter">start</code> is negative, the returned string
       will start at the <code class="parameter">start</code>&#039;th character
       from the end of <code class="parameter">string</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       Maximum number of characters to use from <code class="parameter">string</code>. If
       omitted or <code class="literal">NULL</code> is passed, extract all characters to
       the end of the string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">The <code class="parameter">encoding</code>
parameter is the character encoding. If it is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the internal character
encoding value will be used.</p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mb-substr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   <span class="function"><strong>mb_substr()</strong></span> returns the portion of
   <code class="parameter">string</code> specified by the
   <code class="parameter">start</code> and
   <code class="parameter">length</code> parameters.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mb-substr-changelog">
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


 <div class="refsect1 seealso" id="refsect1-function.mb-substr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mb-strcut.php" class="function" rel="rdfs-seeAlso">mb_strcut()</a> - Get part of string</span></li>
    <li><span class="function"><a href="function.mb-internal-encoding.php" class="function" rel="rdfs-seeAlso">mb_internal_encoding()</a> - Set/Get internal character encoding</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mbstring/functions/mb-substr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mb-substr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mb-substr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-substr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117764">  <div class="votes">
    <div id="Vu117764">
    <a href="/manual/vote-note.php?id=117764&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117764">
    <a href="/manual/vote-note.php?id=117764&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117764" title="59% like this...">
    13
    </div>
  </div>
  <a href="#117764" class="name">
  <strong class="user"><em>qbolec at gmail dot com</em></strong></a><a class="genanchor" href="#117764"> &para;</a><div class="date" title="2015-08-05 03:10"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117764">
<div class="phpcode"><code><span class="html">As you often need to iterate over UTF-8 characters inside a string, you might be tempted to use mb_substr($text,$i,1).<br />The problem with this is that there is no "magic" way to find $i-th character inside UTF-8 string, other than reading it byte by byte from the begining. Thus a loop which calls mb_substr($text,$i,1) N times for all possible N values of $i, will take much longer than expected. The larger the $i gets, the longer is the search for $i-th letter. As characters are between 1 to 6 bytes long, one can convince oneself, that the execution time of such loop is actually Theta(N^2), which can be really slow even for moderately long texts.<br />One way to work around it is to first split your text into an array of letters using some smart preprocessing, and only then iterate over the array.<br />Here is the idea:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Strings<br /></span><span class="keyword">{<br />  public static function </span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">){<br />    return </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />  }<br />  public static function </span><span class="default">charAt</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">){<br />    return </span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />  }<br />  public static function </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">){<br />    if(</span><span class="default">$y</span><span class="keyword">===</span><span class="default">NULL</span><span class="keyword">){<br />      </span><span class="default">$y</span><span class="keyword">=</span><span class="default">self</span><span class="keyword">::</span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    }<br />    return </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$x</span><span class="keyword">,</span><span class="default">$y</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />  }<br />  public static function </span><span class="default">letters</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">){<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">self</span><span class="keyword">::</span><span class="default">len</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br />    if(</span><span class="default">$len</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){<br />      return array();<br />    }else if(</span><span class="default">$len </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />      return array(</span><span class="default">$a</span><span class="keyword">);<br />    }else{<br />      return </span><span class="default">Arrays</span><span class="keyword">::</span><span class="default">concat</span><span class="keyword">(<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">)),<br />        </span><span class="default">self</span><span class="keyword">::</span><span class="default">letters</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$len</span><span class="keyword">&gt;&gt;</span><span class="default">1</span><span class="keyword">))<br />      );<br />    }<br />  }<br /></span><span class="default">?&gt;<br /></span>As you can see, the Strings::letters($text) split the text recursively into two parts. Each level of the recursion requires time linear in the length of the string, and there is logarithmic number of levels, so the total runtime is O(N log N), which is still more than theoretically optimal O(N), but sadly this is the best idea I've got.</span></code></div>
  </div>
 </div>
  <div class="note" id="129132">  <div class="votes">
    <div id="Vu129132">
    <a href="/manual/vote-note.php?id=129132&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129132">
    <a href="/manual/vote-note.php?id=129132&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129132" title="75% like this...">
    2
    </div>
  </div>
  <a href="#129132" class="name">
  <strong class="user"><em>boulahdidraid18 at gmail dot com</em></strong></a><a class="genanchor" href="#129132"> &para;</a><div class="date" title="2023-12-30 11:28"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129132">
<div class="phpcode"><code><span class="html">Here is an example demonstrating the difference between `substr` and `mb_substr` functions:<br /><br />1- When working with non UTF-8 characters, both functions behave the same and give the same output:<br /><br />$str = 'abcdef';<br />echo substr($s, 0, 3); // abc<br />echo mb_substr($s, 0, 3); // abc<br /><br />2- When working with UTF-8 characters, each function will behave differently and give a different result:<br /><br />2.A- The 'substr' function works on the byte-level and with single-byte encoded characters only (doesn't support multibyte encoding). <br /><br />For example:<br /><br />$str_utf8 = utf8_encode("déjà_vu");<br /><br />If we do this:<br /><br />echo substr($str_utf8, 0, 3); // dé<br />echo substr($str_utf8, 0, 2); // d�<br /><br />=&gt; That's because the special character "é" (and "à") is internally coded with two bytes:<br /><br />PHP will start reading the first byte at index 0, which represents `d`, then move to the second byte, which is a part of the two-byte encoding of the character ` é `,  and since the length is set to 2, PHP will stop here and doesn't continue reading the third byte, so it doesn't recognize the character ` é ` and prints � instead of é.<br /><br />2.B- The 'mb_substr' function works on the character-level and supports multibyte encoded characters. This means, PHP counts the number of characters only and doesn't take into consideration the number of bytes of their encoding, for example:<br /><br />$str_utf8 = utf8_encode("déjà_vu");<br /><br />echo mb_substr($str_utf8, 0, 4, "UTF-8"); // Déjà<br />echo mb_substr($str_utf8, 1, 4, "UTF-8"); // éjà_<br />echo mb_substr($str_utf8, 6, 4, "UTF-8"); // u<br />echo mb_substr($str_utf8, 7, 4, "UTF-8"); // ''<br />echo mb_substr($str_utf8, -2, "UTF-8"); // vu<br />echo mb_substr($str_utf8, -2, 1, "UTF-8"); // v<br />echo mb_substr($str_utf8, -2, 3, "UTF-8"); // vu</span></code></div>
  </div>
 </div>
  <div class="note" id="50275">  <div class="votes">
    <div id="Vu50275">
    <a href="/manual/vote-note.php?id=50275&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50275">
    <a href="/manual/vote-note.php?id=50275&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50275" title="59% like this...">
    6
    </div>
  </div>
  <a href="#50275" class="name">
  <strong class="user"><em>drraf at tlen dot pl</em></strong></a><a class="genanchor" href="#50275"> &para;</a><div class="date" title="2005-02-23 06:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50275">
<div class="phpcode"><code><span class="html">Note: If borders are out of string - mb_string() returns empty _string_, when function substr() returns _boolean_ false in this case.<br />Keep this in mind when using "===" comparisions.<br /><br />Example code:<br /><span class="default">&lt;?php<br /><br />var_dump</span><span class="keyword">( </span><span class="default">substr</span><span class="keyword">( </span><span class="string">'abc'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) ); </span><span class="comment">// returns "false"<br /></span><span class="default">var_dump</span><span class="keyword">( </span><span class="default">mb_substr</span><span class="keyword">( </span><span class="string">'abc'</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">) ); </span><span class="comment">// returns ""<br /><br /></span><span class="default">?&gt;<br /></span><br />It's especially confusing when using mbstring with function overloading turned on.</span></code></div>
  </div>
 </div>
  <div class="note" id="106737">  <div class="votes">
    <div id="Vu106737">
    <a href="/manual/vote-note.php?id=106737&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106737">
    <a href="/manual/vote-note.php?id=106737&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106737" title="55% like this...">
    3
    </div>
  </div>
  <a href="#106737" class="name">
  <strong class="user"><em>p dot assenov at aip-solutions dot com</em></strong></a><a class="genanchor" href="#106737"> &para;</a><div class="date" title="2011-12-02 09:17"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106737">
<div class="phpcode"><code><span class="html">I'm trying to capitalize only the first character of the string and tried some of the examples above but they didn't work. It seems mb_substr() cannot calculate the length of the string in multi-byte encoding (UTF-8) and it should be set explicitly. Here is the corrected version:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">mb_ucfirst</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$enc </span><span class="keyword">= </span><span class="string">'utf-8'</span><span class="keyword">) {
<br />    return </span><span class="default">mb_strtoupper</span><span class="keyword">(</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">), </span><span class="default">$enc</span><span class="keyword">).</span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$enc</span><span class="keyword">), </span><span class="default">$enc</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />cheers!</span></code></div>
  </div>
 </div>
  <div class="note" id="55405">  <div class="votes">
    <div id="Vu55405">
    <a href="/manual/vote-note.php?id=55405&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55405">
    <a href="/manual/vote-note.php?id=55405&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55405" title="52% like this...">
    3
    </div>
  </div>
  <a href="#55405" class="name">
  <strong class="user"><em>xiaogil at yahoo dot fr</em></strong></a><a class="genanchor" href="#55405"> &para;</a><div class="date" title="2005-08-02 08:33"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55405">
<div class="phpcode"><code><span class="html">Thanks Darien from /freenode #php for the following example (a little bit changed).<br /><br />It just prints the 6th character of $string.<br />You can replace the digits by the same in japanese, chinese or whatever language to make a test, it works perfect.<br /><br /><span class="default">&lt;?php<br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">"UTF-8"</span><span class="keyword">);<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"0123456789"</span><span class="keyword">;<br /></span><span class="default">$mystring </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />echo </span><span class="default">$mystring</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />(I couldn't replace 0123456789 by chinese numbers for example here, because it's automatically converted into latin digits on this website, look : <br />&amp;#38646;&amp;#19968;&amp;#20108;&amp;#19977;&amp;#22235;<br />&amp;#20116;&amp;#20845;&amp;#19971;&amp;#20843;&amp;#20061;)<br /><br />gilv</span></code></div>
  </div>
 </div>
  <div class="note" id="129354">  <div class="votes">
    <div id="Vu129354">
    <a href="/manual/vote-note.php?id=129354&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129354">
    <a href="/manual/vote-note.php?id=129354&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129354" title="100% like this...">
    1
    </div>
  </div>
  <a href="#129354" class="name">
  <strong class="user"><em>public at luedi dot jp</em></strong></a><a class="genanchor" href="#129354"> &para;</a><div class="date" title="2024-03-25 10:17"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129354">
<div class="phpcode"><code><span class="html">Just wanted to add that not only the `start` can be a negative number, the `length` can be negative, too. And it works as expected.<br /><br />mb_substr( "1234567890", 3, -4, "UTF-8" ) =&gt; "456".<br /><br />So it cuts off the last 4 characters.</span></code></div>
  </div>
 </div>
  <div class="note" id="112070">  <div class="votes">
    <div id="Vu112070">
    <a href="/manual/vote-note.php?id=112070&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112070">
    <a href="/manual/vote-note.php?id=112070&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112070" title="50% like this...">
    0
    </div>
  </div>
  <a href="#112070" class="name">
  <strong class="user"><em>desmatic at gmail dot com</em></strong></a><a class="genanchor" href="#112070"> &para;</a><div class="date" title="2013-04-29 03:51"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112070">
<div class="phpcode"><code><span class="html">quick and dirty loop through multibyte string<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_character_classes</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">"UTF-8"</span><span class="keyword">) {<br />    </span><span class="default">$current_encoding </span><span class="keyword">= </span><span class="default">mb_internal_encoding</span><span class="keyword">();<br />    </span><span class="default">mb_internal_encoding</span><span class="keyword">(</span><span class="default">$encoding</span><span class="keyword">);<br />    </span><span class="default">$has </span><span class="keyword">= array();<br />    </span><span class="default">$stringlength </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$stringlength</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        if ((</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">"0"</span><span class="keyword">) &amp;&amp; (</span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">"9"</span><span class="keyword">)) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'numeric'</span><span class="keyword">] = </span><span class="string">"numeric"</span><span class="keyword">;<br />        } else if ((</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">"a"</span><span class="keyword">) &amp;&amp; (</span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">"z"</span><span class="keyword">)) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] = </span><span class="string">"alpha"</span><span class="keyword">;<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'alphalower'</span><span class="keyword">] = </span><span class="string">'alphalower'</span><span class="keyword">;<br />        } else if ((</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">"A"</span><span class="keyword">) &amp;&amp; (</span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">"Z"</span><span class="keyword">)) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'alpha'</span><span class="keyword">] = </span><span class="string">"alpha"</span><span class="keyword">;<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'alphaupper'</span><span class="keyword">] = </span><span class="string">"alphaupper"</span><span class="keyword">;<br />        } else if ((</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"$"</span><span class="keyword">) || (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"£"</span><span class="keyword">)) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'currency'</span><span class="keyword">] = </span><span class="string">"currency"</span><span class="keyword">;<br />        } else if ((</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"."</span><span class="keyword">) &amp;&amp; (</span><span class="default">$has</span><span class="keyword">[</span><span class="string">'decimal'</span><span class="keyword">])) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'decimals'</span><span class="keyword">] = </span><span class="string">"decimals"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"."</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'decimal'</span><span class="keyword">] = </span><span class="string">"decimal"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">","</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'comma'</span><span class="keyword">] = </span><span class="string">"comma"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"-"</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'dash'</span><span class="keyword">] = </span><span class="string">"dash"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">" "</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'space'</span><span class="keyword">] = </span><span class="string">"space"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">"/"</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'slash'</span><span class="keyword">] = </span><span class="string">"slash"</span><span class="keyword">;<br />        } else if (</span><span class="default">$c </span><span class="keyword">== </span><span class="string">":"</span><span class="keyword">) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'colon'</span><span class="keyword">] = </span><span class="string">"colon"</span><span class="keyword">;<br />        } else if ((</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">" "</span><span class="keyword">) &amp;&amp; (</span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">"~"</span><span class="keyword">)) {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'ascii'</span><span class="keyword">] = </span><span class="string">"ascii"</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$has</span><span class="keyword">[</span><span class="string">'binary'</span><span class="keyword">] = </span><span class="string">"binary"</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">mb_internal_encoding</span><span class="keyword">(</span><span class="default">$current_encoding</span><span class="keyword">);<br />    <br />    return </span><span class="default">$has</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"1234asdfA£^_{}|}~žščř"</span><span class="keyword">;<br />echo </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">get_character_classes</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">), </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Array<br />(<br />    [numeric] =&gt; numeric<br />    [alpha] =&gt; alpha<br />    [alphalower] =&gt; alphalower<br />    [alphaupper] =&gt; alphaupper<br />    [currency] =&gt; currency<br />    [ascii] =&gt; ascii<br />    [binary] =&gt; binary<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="113329">  <div class="votes">
    <div id="Vu113329">
    <a href="/manual/vote-note.php?id=113329&amp;page=function.mb-substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113329">
    <a href="/manual/vote-note.php?id=113329&amp;page=function.mb-substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113329" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#113329" class="name">
  <strong class="user"><em>sanjuro at 1up-games dot com</em></strong></a><a class="genanchor" href="#113329"> &para;</a><div class="date" title="2013-09-27 06:18"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113329">
<div class="phpcode"><code><span class="html">A serious pitfall when using mb_substr() set to HTML-ENTITIES encoding is that the function performs a number of conversions before returning the value, the worst one being that html special characters are not just counted but decoded.<br /><br /><span class="default">&lt;?php<br /><br />mb_internal_encoding</span><span class="keyword">(</span><span class="string">"ISO-8859-1"</span><span class="keyword">); echo </span><span class="default">mb_internal_encoding</span><span class="keyword">(),</span><span class="string">"\n&lt;br&gt;&lt;br&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="default">$a</span><span class="keyword">=</span><span class="string">'j&amp;uuml;st &amp;#228; &amp;quot; simple &amp;quot; &amp;#26085;&amp;#26412; &amp;lt;b&amp;gt;test&amp;lt;/b&amp;gt;'</span><span class="keyword">;<br /><br />echo </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">),</span><span class="string">"\n&lt;br&gt;&lt;br&gt;\n"</span><span class="keyword">;<br /></span><span class="comment">// page source: j&amp;uuml;st &amp;#228; &amp;quot; simple &amp;quot; &amp;#26085;&amp;#26412; &amp;lt;b&amp;gt;test&amp;lt;/b&amp;gt;<br /><br /></span><span class="keyword">echo </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">),</span><span class="string">'HTML-ENTITIES'</span><span class="keyword">);<br /></span><span class="comment">// page source: j&amp;uuml;st &amp;auml; " simple " &amp;#26085;&amp;#26412; &lt;b&gt;test&lt;/b&gt;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mb-substr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mb-substr.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mbstring.php">Multibyte String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mb-check-encoding.php" title="mb_&#8203;check_&#8203;encoding">mb_&#8203;check_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-chr.php" title="mb_&#8203;chr">mb_&#8203;chr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-case.php" title="mb_&#8203;convert_&#8203;case">mb_&#8203;convert_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-encoding.php" title="mb_&#8203;convert_&#8203;encoding">mb_&#8203;convert_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-kana.php" title="mb_&#8203;convert_&#8203;kana">mb_&#8203;convert_&#8203;kana</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-convert-variables.php" title="mb_&#8203;convert_&#8203;variables">mb_&#8203;convert_&#8203;variables</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-mimeheader.php" title="mb_&#8203;decode_&#8203;mimeheader">mb_&#8203;decode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-decode-numericentity.php" title="mb_&#8203;decode_&#8203;numericentity">mb_&#8203;decode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-encoding.php" title="mb_&#8203;detect_&#8203;encoding">mb_&#8203;detect_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-detect-order.php" title="mb_&#8203;detect_&#8203;order">mb_&#8203;detect_&#8203;order</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-mimeheader.php" title="mb_&#8203;encode_&#8203;mimeheader">mb_&#8203;encode_&#8203;mimeheader</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encode-numericentity.php" title="mb_&#8203;encode_&#8203;numericentity">mb_&#8203;encode_&#8203;numericentity</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-encoding-aliases.php" title="mb_&#8203;encoding_&#8203;aliases">mb_&#8203;encoding_&#8203;aliases</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg.php" title="mb_&#8203;ereg">mb_&#8203;ereg</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-match.php" title="mb_&#8203;ereg_&#8203;match">mb_&#8203;ereg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace.php" title="mb_&#8203;ereg_&#8203;replace">mb_&#8203;ereg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-replace-callback.php" title="mb_&#8203;ereg_&#8203;replace_&#8203;callback">mb_&#8203;ereg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search.php" title="mb_&#8203;ereg_&#8203;search">mb_&#8203;ereg_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getpos">mb_&#8203;ereg_&#8203;search_&#8203;getpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-getregs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;getregs">mb_&#8203;ereg_&#8203;search_&#8203;getregs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-init.php" title="mb_&#8203;ereg_&#8203;search_&#8203;init">mb_&#8203;ereg_&#8203;search_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-pos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;pos">mb_&#8203;ereg_&#8203;search_&#8203;pos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-regs.php" title="mb_&#8203;ereg_&#8203;search_&#8203;regs">mb_&#8203;ereg_&#8203;search_&#8203;regs</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ereg-search-setpos.php" title="mb_&#8203;ereg_&#8203;search_&#8203;setpos">mb_&#8203;ereg_&#8203;search_&#8203;setpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi.php" title="mb_&#8203;eregi">mb_&#8203;eregi</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-eregi-replace.php" title="mb_&#8203;eregi_&#8203;replace">mb_&#8203;eregi_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-get-info.php" title="mb_&#8203;get_&#8203;info">mb_&#8203;get_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-input.php" title="mb_&#8203;http_&#8203;input">mb_&#8203;http_&#8203;input</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-http-output.php" title="mb_&#8203;http_&#8203;output">mb_&#8203;http_&#8203;output</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-internal-encoding.php" title="mb_&#8203;internal_&#8203;encoding">mb_&#8203;internal_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-language.php" title="mb_&#8203;language">mb_&#8203;language</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-lcfirst.php" title="mb_&#8203;lcfirst">mb_&#8203;lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-list-encodings.php" title="mb_&#8203;list_&#8203;encodings">mb_&#8203;list_&#8203;encodings</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ltrim.php" title="mb_&#8203;ltrim">mb_&#8203;ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ord.php" title="mb_&#8203;ord">mb_&#8203;ord</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-output-handler.php" title="mb_&#8203;output_&#8203;handler">mb_&#8203;output_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-parse-str.php" title="mb_&#8203;parse_&#8203;str">mb_&#8203;parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-preferred-mime-name.php" title="mb_&#8203;preferred_&#8203;mime_&#8203;name">mb_&#8203;preferred_&#8203;mime_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-encoding.php" title="mb_&#8203;regex_&#8203;encoding">mb_&#8203;regex_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-regex-set-options.php" title="mb_&#8203;regex_&#8203;set_&#8203;options">mb_&#8203;regex_&#8203;set_&#8203;options</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-rtrim.php" title="mb_&#8203;rtrim">mb_&#8203;rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-scrub.php" title="mb_&#8203;scrub">mb_&#8203;scrub</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-send-mail.php" title="mb_&#8203;send_&#8203;mail">mb_&#8203;send_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-split.php" title="mb_&#8203;split">mb_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-pad.php" title="mb_&#8203;str_&#8203;pad">mb_&#8203;str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-str-split.php" title="mb_&#8203;str_&#8203;split">mb_&#8203;str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strcut.php" title="mb_&#8203;strcut">mb_&#8203;strcut</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strimwidth.php" title="mb_&#8203;strimwidth">mb_&#8203;strimwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stripos.php" title="mb_&#8203;stripos">mb_&#8203;stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-stristr.php" title="mb_&#8203;stristr">mb_&#8203;stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strlen.php" title="mb_&#8203;strlen">mb_&#8203;strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strpos.php" title="mb_&#8203;strpos">mb_&#8203;strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrchr.php" title="mb_&#8203;strrchr">mb_&#8203;strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrichr.php" title="mb_&#8203;strrichr">mb_&#8203;strrichr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strripos.php" title="mb_&#8203;strripos">mb_&#8203;strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strrpos.php" title="mb_&#8203;strrpos">mb_&#8203;strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strstr.php" title="mb_&#8203;strstr">mb_&#8203;strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtolower.php" title="mb_&#8203;strtolower">mb_&#8203;strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strtoupper.php" title="mb_&#8203;strtoupper">mb_&#8203;strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-strwidth.php" title="mb_&#8203;strwidth">mb_&#8203;strwidth</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substitute-character.php" title="mb_&#8203;substitute_&#8203;character">mb_&#8203;substitute_&#8203;character</a>
                        </li>
                                                <li class="current">
                            <a href="function.mb-substr.php" title="mb_&#8203;substr">mb_&#8203;substr</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-substr-count.php" title="mb_&#8203;substr_&#8203;count">mb_&#8203;substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-trim.php" title="mb_&#8203;trim">mb_&#8203;trim</a>
                        </li>
                                                <li class="">
                            <a href="function.mb-ucfirst.php" title="mb_&#8203;ucfirst">mb_&#8203;ucfirst</a>
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
