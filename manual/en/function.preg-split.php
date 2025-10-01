<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: preg_split - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.preg-split.php">
 <link rel="shorturl" href="https://www.php.net/preg-split">
 <link rel="alternate" href="https://www.php.net/preg-split" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcre.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.preg-replace-callback-array.php">
 <link rel="next" href="https://www.php.net/manual/en/book.ssdeep.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.preg-split.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.preg-split.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.preg-split.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.preg-split.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.preg-split.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.preg-split.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.preg-split.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.preg-split.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.preg-split.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.preg-split.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.preg-split.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Split string by a regular expression" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: preg_split - Manual" />
<meta name="twitter:description" content="Split string by a regular expression" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: preg_split - Manual" />
<meta itemprop="description" content="Split string by a regular expression" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Split string by a regular expression" />

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
        <a href="book.ssdeep.php">
          ssdeep &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.preg-replace-callback-array.php">
          &laquo; preg_replace_callback_array        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='ref.pcre.php'>PCRE Functions</a></li>      </ul>
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
            <option value='en/function.preg-split.php' selected="selected">English</option>
            <option value='de/function.preg-split.php'>German</option>
            <option value='es/function.preg-split.php'>Spanish</option>
            <option value='fr/function.preg-split.php'>French</option>
            <option value='it/function.preg-split.php'>Italian</option>
            <option value='ja/function.preg-split.php'>Japanese</option>
            <option value='pt_BR/function.preg-split.php'>Brazilian Portuguese</option>
            <option value='ru/function.preg-split.php'>Russian</option>
            <option value='tr/function.preg-split.php'>Turkish</option>
            <option value='uk/function.preg-split.php'>Ukrainian</option>
            <option value='zh/function.preg-split.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.preg-split" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">preg_split</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">preg_split</span> &mdash; <span class="dc-title">Split string by a regular expression</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.preg-split-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>preg_split</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$subject</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Split the given string by a regular expression.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.preg-split-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">
       The pattern to search for, as a string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">subject</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       If specified, then only substrings up to <code class="parameter">limit</code>
       are returned with the rest of the string being placed in the last
       substring.  A <code class="parameter">limit</code> of -1 or 0 means &quot;no limit&quot;.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">flags</code> can be any combination of the following
       flags (combined with the <code class="literal">|</code> bitwise operator):
       <dl>
        
         <dt><strong><code><a href="pcre.constants.php#constant.preg-split-no-empty">PREG_SPLIT_NO_EMPTY</a></code></strong></dt>
         <dd>
          <span class="simpara">
          If this flag is set, only non-empty pieces will be returned by
          <span class="function"><strong>preg_split()</strong></span>.
          </span>
         </dd>
        
        
         <dt><strong><code><a href="pcre.constants.php#constant.preg-split-delim-capture">PREG_SPLIT_DELIM_CAPTURE</a></code></strong></dt>
         <dd>
          <span class="simpara">
          If this flag is set, parenthesized expression in the delimiter pattern
          will be captured and returned as well.
          </span>
         </dd>
        
        
         <dt><strong><code><a href="pcre.constants.php#constant.preg-split-offset-capture">PREG_SPLIT_OFFSET_CAPTURE</a></code></strong></dt>
         <dd>
          <p class="para">
           If this flag is set, for every occurring match the appendant string
           offset will also be returned. Note that this changes the return
           value in an array where every element is an array consisting of the
           matched string at offset <code class="literal">0</code> and its string offset
           into <code class="parameter">subject</code> at offset <code class="literal">1</code>.
          </p>
         </dd>
        
       </dl>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.preg-split-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array containing substrings of <code class="parameter">subject</code>
   split along boundaries matched by <code class="parameter">pattern</code>,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.preg-split-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
If the regex pattern passed does not compile to a valid regex, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
</p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.preg-split-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5046">
    <p><strong>Example #1 <span class="function"><strong>preg_split()</strong></span> example : Get the parts of a search string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// split the phrase by any number of commas or space characters,<br />// which include " ", \r, \t, \n and \f<br /></span><span style="color: #0000BB">$keywords </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">"/[\s,]+/"</span><span style="color: #007700">, </span><span style="color: #DD0000">"hypertext language, programming"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$keywords</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; hypertext
    [1] =&gt; language
    [2] =&gt; programming
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5047">
    <p><strong>Example #2 Splitting a string into component characters</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'string'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$chars </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'//'</span><span style="color: #007700">, </span><span style="color: #0000BB">$str</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PREG_SPLIT_NO_EMPTY</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$chars</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; s
    [1] =&gt; t
    [2] =&gt; r
    [3] =&gt; i
    [4] =&gt; n
    [5] =&gt; g
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5048">
    <p><strong>Example #3 Splitting a string into matches and their offsets</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'hypertext language programming'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$chars </span><span style="color: #007700">= </span><span style="color: #0000BB">preg_split</span><span style="color: #007700">(</span><span style="color: #DD0000">'/ /'</span><span style="color: #007700">, </span><span style="color: #0000BB">$str</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">PREG_SPLIT_OFFSET_CAPTURE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$chars</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; Array
        (
            [0] =&gt; hypertext
            [1] =&gt; 0
        )

    [1] =&gt; Array
        (
            [0] =&gt; language
            [1] =&gt; 10
        )

    [2] =&gt; Array
        (
            [0] =&gt; programming
            [1] =&gt; 19
        )

)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.preg-split-notes">
  <h3 class="title">Notes</h3>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    If you don&#039;t need the power of regular expressions, you can choose
    faster (albeit simpler) alternatives like <span class="function"><a href="function.explode.php" class="function">explode()</a></span>
    or <span class="function"><a href="function.str-split.php" class="function">str_split()</a></span>.
   </p>
  </div>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    If matching fails, an array with a single element containing the input string will be returned.
   </p>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.preg-split-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="pcre.pattern.php" class="link">PCRE Patterns</a></li>
    <li><span class="function"><a href="function.preg-quote.php" class="function" rel="rdfs-seeAlso">preg_quote()</a> - Quote regular expression characters</span></li>
    <li><span class="function"><a href="function.explode.php" class="function" rel="rdfs-seeAlso">explode()</a> - Split a string by a string</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.preg-match-all.php" class="function" rel="rdfs-seeAlso">preg_match_all()</a> - Perform a global regular expression match</span></li>
    <li><span class="function"><a href="function.preg-replace.php" class="function" rel="rdfs-seeAlso">preg_replace()</a> - Perform a regular expression search and replace</span></li>
    <li><span class="function"><a href="function.preg-last-error.php" class="function" rel="rdfs-seeAlso">preg_last_error()</a> - Returns the error code of the last PCRE regex execution</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/functions/preg-split.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.preg-split%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.preg-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-split.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94238">  <div class="votes">
    <div id="Vu94238">
    <a href="/manual/vote-note.php?id=94238&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94238">
    <a href="/manual/vote-note.php?id=94238&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94238" title="70% like this...">
    45
    </div>
  </div>
  <a href="#94238" class="name">
  <strong class="user"><em>jan dot sochor at icebolt dot info</em></strong></a><a class="genanchor" href="#94238"> &para;</a><div class="date" title="2009-10-24 03:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94238">
<div class="phpcode"><code><span class="html">Sometimes PREG_SPLIT_DELIM_CAPTURE does strange results.<br /><br /><span class="default">&lt;?php<br />$content </span><span class="keyword">= </span><span class="string">'&lt;strong&gt;Lorem ipsum dolor&lt;/strong&gt; sit &lt;img src="test.png" /&gt;amet &lt;span class="test" style="color:red"&gt;consec&lt;i&gt;tet&lt;/i&gt;uer&lt;/span&gt;.'</span><span class="keyword">;<br /></span><span class="default">$chars </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/&lt;[^&gt;]*[^\/]&gt;/i'</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY </span><span class="keyword">| </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>Produces:<br />Array<br />(<br />    [0] =&gt; Lorem ipsum dolor<br />    [1] =&gt;  sit &lt;img src="test.png" /&gt;amet <br />    [2] =&gt; consec<br />    [3] =&gt; tet<br />    [4] =&gt; uer<br />)<br /><br />So that the delimiter patterns are missing. If you wanna get these patters remember to use parentheses.<br /><br /><span class="default">&lt;?php<br />$chars </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/(&lt;[^&gt;]*[^\/]&gt;)/i'</span><span class="keyword">, </span><span class="default">$content</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY </span><span class="keyword">| </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$chars</span><span class="keyword">); </span><span class="comment">//parentheses added<br /></span><span class="default">?&gt;<br /></span>Produces:<br />Array<br />(<br />    [0] =&gt; &lt;strong&gt;<br />    [1] =&gt; Lorem ipsum dolor<br />    [2] =&gt; &lt;/strong&gt;<br />    [3] =&gt;  sit &lt;img src="test.png" /&gt;amet <br />    [4] =&gt; &lt;span class="test" style="color:red"&gt;<br />    [5] =&gt; consec<br />    [6] =&gt; &lt;i&gt;<br />    [7] =&gt; tet<br />    [8] =&gt; &lt;/i&gt;<br />    [9] =&gt; uer<br />    [10] =&gt; &lt;/span&gt;<br />    [11] =&gt; .<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="92632">  <div class="votes">
    <div id="Vu92632">
    <a href="/manual/vote-note.php?id=92632&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92632">
    <a href="/manual/vote-note.php?id=92632&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92632" title="71% like this...">
    19
    </div>
  </div>
  <a href="#92632" class="name">
  <strong class="user"><em>buzoganylaszlo at yahoo dot com</em></strong></a><a class="genanchor" href="#92632"> &para;</a><div class="date" title="2009-08-01 12:57"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92632">
<div class="phpcode"><code><span class="html">Extending m.timmermans's solution, you can use the following code as a search expression parser:<br /><br /><span class="default">&lt;?php<br />$search_expression </span><span class="keyword">= </span><span class="string">"apple bear \"Tom Cruise\" or 'Mickey Mouse' another word"</span><span class="keyword">;<br /></span><span class="default">$words </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/[\s,]*\\\"([^\\\"]+)\\\"[\s,]*|" </span><span class="keyword">. </span><span class="string">"[\s,]*'([^']+)'[\s,]*|" </span><span class="keyword">. </span><span class="string">"[\s,]+/"</span><span class="keyword">, </span><span class="default">$search_expression</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY </span><span class="keyword">| </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$words</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />The result will be:<br />Array<br />(<br />    [0] =&gt; apple<br />    [1] =&gt; bear<br />    [2] =&gt; Tom Cruise<br />    [3] =&gt; or<br />    [4] =&gt; Mickey Mouse<br />    [5] =&gt; another<br />    [6] =&gt; word<br />)<br /><br />1. Accepted delimiters: white spaces (space, tab, new line etc.) and commas.<br /><br />2. You can use either simple (') or double (") quotes for expressions which contains more than one word.</span></code></div>
  </div>
 </div>
  <div class="note" id="124158">  <div class="votes">
    <div id="Vu124158">
    <a href="/manual/vote-note.php?id=124158&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124158">
    <a href="/manual/vote-note.php?id=124158&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124158" title="76% like this...">
    9
    </div>
  </div>
  <a href="#124158" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#124158"> &para;</a><div class="date" title="2019-09-01 03:02"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124158">
<div class="phpcode"><code><span class="html">Assuming you're using UTF-8, this function can be used to separate Unicode text into individual codepoints without the need for the multibyte extension.<br /><br /><span class="default">&lt;?php<br /><br />preg_split</span><span class="keyword">(</span><span class="string">'//u'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />The words "English", "Español", and "Русский" are all seven letters long. But strlen would report string lengths 7, 8 and 14, respectively. The preg_split above would return a seven-element array in all three cases. <br /><br />It splits '한국어' into the array ['한', '국', '어'] instead of the 9-character array that str_split($text) would produce.</span></code></div>
  </div>
 </div>
  <div class="note" id="118326">  <div class="votes">
    <div id="Vu118326">
    <a href="/manual/vote-note.php?id=118326&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118326">
    <a href="/manual/vote-note.php?id=118326&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118326" title="72% like this...">
    10
    </div>
  </div>
  <a href="#118326" class="name">
  <strong class="user"><em>canadian dot in dot exile at gmail dot com</em></strong></a><a class="genanchor" href="#118326"> &para;</a><div class="date" title="2015-11-18 12:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118326">
<div class="phpcode"><code><span class="html">This regular expression will split a long string of words into an array of sub-strings, of some maximum length, but only on word-boundries.<br /><br />I use the reg-ex with preg_match_all(); but, I'm posting this example here (on the page for preg_split()) because that's where I looked when I wanted to find a way to do this.<br /><br />Hope it saves someone some time.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// example of a long string of words<br /></span><span class="default">$long_string </span><span class="keyword">= </span><span class="string">'Your IP Address will be logged with the submitted note and made public on the PHP manual user notes mailing list. The IP address is logged as part of the notes moderation process, and won\'t be shown within the PHP manual itself.'</span><span class="keyword">;<br /><br /></span><span class="comment">// "word-wrap" at, for example, 60 characters or less<br /></span><span class="default">$max_len </span><span class="keyword">= </span><span class="default">60</span><span class="keyword">;<br /><br /></span><span class="comment">// this regular expression will split $long_string on any sub-string of<br />// 1-or-more non-word characters (spaces or punctuation)<br /></span><span class="keyword">if(</span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/.{1,</span><span class="keyword">{</span><span class="default">$max_len</span><span class="keyword">}</span><span class="string">}(?=\W+)/"</span><span class="keyword">, </span><span class="default">$long_string</span><span class="keyword">, </span><span class="default">$lines</span><span class="keyword">) !== </span><span class="default">False</span><span class="keyword">) {<br /><br />    </span><span class="comment">// $lines now contains an array of sub-strings, each will be approx.<br />    // $max_len characters - depending on where the last word ended and<br />    // the number of 'non-word' characters found after the last word<br />    </span><span class="keyword">for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]); </span><span class="default">$i</span><span class="keyword">++) {<br />        echo </span><span class="string">"[</span><span class="default">$i</span><span class="string">] </span><span class="keyword">{</span><span class="default">$lines</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">]}</span><span class="string">\n"</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100729">  <div class="votes">
    <div id="Vu100729">
    <a href="/manual/vote-note.php?id=100729&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100729">
    <a href="/manual/vote-note.php?id=100729&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100729" title="65% like this...">
    15
    </div>
  </div>
  <a href="#100729" class="name">
  <strong class="user"><em>Daniel Schroeder</em></strong></a><a class="genanchor" href="#100729"> &para;</a><div class="date" title="2010-11-03 03:46"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100729">
<div class="phpcode"><code><span class="html">If you want to split by a char, but want to ignore that char in case it is escaped, use a lookbehind assertion.
<br />
<br />In this example a string will be split by ":" but "\:" will be ignored:
<br />
<br /><span class="default">&lt;?php
<br />$string</span><span class="keyword">=</span><span class="string">'a:b:c\:d'</span><span class="keyword">;
<br /></span><span class="default">$array</span><span class="keyword">=</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'#(?&lt;!\\\)\:#'</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);
<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Results into:
<br />
<br />Array
<br />(
<br />    [0] =&gt; a
<br />    [1] =&gt; b
<br />    [2] =&gt; c\:d
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="104602">  <div class="votes">
    <div id="Vu104602">
    <a href="/manual/vote-note.php?id=104602&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104602">
    <a href="/manual/vote-note.php?id=104602&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104602" title="65% like this...">
    13
    </div>
  </div>
  <a href="#104602" class="name">
  <strong class="user"><em>eric at clarinova dot com</em></strong></a><a class="genanchor" href="#104602"> &para;</a><div class="date" title="2011-06-24 03:04"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104602">
<div class="phpcode"><code><span class="html">Here is another way to split a CamelCase string, which is a simpler expression than the one using lookaheads and lookbehinds: <br /><br />preg_split('/([[:upper:]][[:lower:]]+)/', $last, null, PREG_SPLIT_DELIM_CAPTURE|PREG_SPLIT_NO_EMPTY)<br /><br />It makes the entire CamelCased word the delimiter, then returns the delimiters (PREG_SPLIT_DELIM_CAPTURE) and omits the empty values between the delimiters (PREG_SPLIT_NO_EMPTY)</span></code></div>
  </div>
 </div>
  <div class="note" id="126520">  <div class="votes">
    <div id="Vu126520">
    <a href="/manual/vote-note.php?id=126520&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126520">
    <a href="/manual/vote-note.php?id=126520&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126520" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126520" class="name">
  <strong class="user"><em>dewi at dewimorgan dot com</em></strong></a><a class="genanchor" href="#126520"> &para;</a><div class="date" title="2021-10-20 07:35"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126520">
<div class="phpcode"><code><span class="html">Beware that it is not safe to assume there are no empty values returned by PREG_SPLIT_NO_EMPTY, nor that you will see no delimiters if you use PREG_SPLIT_DELIM_CAPTURE, as there are some edge cases where these are not true.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment"># As expected, splitting a string by itself returns two empty strings:<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/x/"</span><span class="keyword">, </span><span class="string">"x"</span><span class="keyword">));<br /><br />array (<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />  </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />)<br /><br /></span><span class="comment"># But if we add PREG_SPLIT_NO_EMPTY, then instead of an empty array, we get the delimiter.<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/x/"</span><span class="keyword">, </span><span class="string">"x"</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">));<br /><br />array (<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'x'</span><span class="keyword">,<br />)<br /><br />And if </span><span class="default">we </span><span class="keyword">try </span><span class="default">to split an </span><span class="keyword">empty </span><span class="default">string</span><span class="keyword">, </span><span class="default">then instead of an </span><span class="keyword">empty array, </span><span class="default">we get an </span><span class="keyword">empty </span><span class="default">string even with PREG_SPLIT_NO_EMPTY</span><span class="keyword">.<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/x/"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">));<br /><br />array (<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">,<br />)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101109">  <div class="votes">
    <div id="Vu101109">
    <a href="/manual/vote-note.php?id=101109&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101109">
    <a href="/manual/vote-note.php?id=101109&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101109" title="62% like this...">
    6
    </div>
  </div>
  <a href="#101109" class="name">
  <strong class="user"><em>PhoneixSegovia at gmail dot com</em></strong></a><a class="genanchor" href="#101109"> &para;</a><div class="date" title="2010-11-26 04:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101109">
<div class="phpcode"><code><span class="html">You must be caution when using lookbehind to a variable match.<br />For example:<br />'/(?&lt;!\\\)\r?\n)/'<br /> to match a new line when not \ is before it don't go as spected as it match \r as the lookbehind (becouse isn't a \) and is optional before \n.<br /><br />You must use this for example:<br />'/((?&lt;!\\\|\r)\n)|((?&lt;!\\\)\r\n)/'<br />That match a alone \n (not preceded by \r or \) or a \r\n not preceded by a \.</span></code></div>
  </div>
 </div>
  <div class="note" id="51209">  <div class="votes">
    <div id="Vu51209">
    <a href="/manual/vote-note.php?id=51209&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51209">
    <a href="/manual/vote-note.php?id=51209&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51209" title="64% like this...">
    4
    </div>
  </div>
  <a href="#51209" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#51209"> &para;</a><div class="date" title="2005-03-23 08:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51209">
<div class="phpcode"><code><span class="html">preg_split() behaves differently from perl's split() if the string ends with a delimiter. This perl snippet will print 5:
<br />
<br />my @a = split(/ /, "a b c d e ");
<br />print scalar @a;
<br />
<br />The corresponding php code prints 6:
<br />
<br /><span class="default">&lt;?php </span><span class="keyword">print </span><span class="default">count</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/ /"</span><span class="keyword">, </span><span class="string">"a b c d e "</span><span class="keyword">)); </span><span class="default">?&gt;
<br /></span>
<br />This is not necessarily a bug (nowhere does the documentation say that preg_split() behaves the same as perl's split()) but it might surprise perl programmers.</span></code></div>
  </div>
 </div>
  <div class="note" id="93907">  <div class="votes">
    <div id="Vu93907">
    <a href="/manual/vote-note.php?id=93907&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93907">
    <a href="/manual/vote-note.php?id=93907&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93907" title="61% like this...">
    4
    </div>
  </div>
  <a href="#93907" class="name">
  <strong class="user"><em>php at dmi dot me dot uk</em></strong></a><a class="genanchor" href="#93907"> &para;</a><div class="date" title="2009-10-06 01:23"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom93907">
<div class="phpcode"><code><span class="html">To split a camel-cased string using preg_split() with lookaheads and lookbehinds:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">splitCamelCase</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />  return </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/(?&lt;=\\w)(?=[A-Z])/'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45982">  <div class="votes">
    <div id="Vu45982">
    <a href="/manual/vote-note.php?id=45982&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45982">
    <a href="/manual/vote-note.php?id=45982&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45982" title="57% like this...">
    7
    </div>
  </div>
  <a href="#45982" class="name">
  <strong class="user"><em>jetsoft at iinet.net.au</em></strong></a><a class="genanchor" href="#45982"> &para;</a><div class="date" title="2004-09-25 08:01"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45982">
<div class="phpcode"><code><span class="html">To clarify the "limit" parameter and the PREG_SPLIT_DELIM_CAPTURE option,
<br />
<br /><span class="default">&lt;?php
<br />$preg_split</span><span class="keyword">(</span><span class="string">'(/ /)'</span><span class="keyword">, </span><span class="string">'1 2 3 4 5 6 7 8'</span><span class="keyword">, </span><span class="default">4 </span><span class="keyword">,</span><span class="default">PREG_SPLIT_DELIM_CAPTURE </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />returns:
<br />
<br />('1', ' ', '2', ' ' , '3', ' ', '4 5 6 7 8')
<br />
<br />So you actually get 7 array items not 4</span></code></div>
  </div>
 </div>
  <div class="note" id="89649">  <div class="votes">
    <div id="Vu89649">
    <a href="/manual/vote-note.php?id=89649&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89649">
    <a href="/manual/vote-note.php?id=89649&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89649" title="60% like this...">
    3
    </div>
  </div>
  <a href="#89649" class="name">
  <strong class="user"><em>csaba at alum dot mit dot edu</em></strong></a><a class="genanchor" href="#89649"> &para;</a><div class="date" title="2009-03-17 01:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89649">
<div class="phpcode"><code><span class="html">If the task is too complicated for preg_split, preg_match_all might come in handy, since preg_split is essentially a special case.<br /><br />I wanted to split a string on a certain character (asterisk), but only if it wasn't escaped (by a preceding backslash).  Thus, I should ensure an even number of backslashes before any asterisk meant as a splitter.  Look-behind in a regular expression wouldn't work since the length of the preceding backslash sequence can't be fixed.  So I turned to preg_match_all:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// split a string at unescaped asterisks<br />// where backslash is the escape character<br /></span><span class="default">$splitter </span><span class="keyword">= </span><span class="string">"/\\*((?:[^\\\\*]|\\\\.)*)/"</span><span class="keyword">;<br /></span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$splitter</span><span class="keyword">, </span><span class="string">"*</span><span class="default">$string</span><span class="string">"</span><span class="keyword">, </span><span class="default">$aPieces</span><span class="keyword">, </span><span class="default">PREG_PATTERN_ORDER</span><span class="keyword">);<br /></span><span class="default">$aPieces </span><span class="keyword">= </span><span class="default">$aPieces</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br /></span><span class="comment">// $aPieces now contains the exploded string<br />// and unescaping can be safely done on each piece<br /></span><span class="keyword">foreach (</span><span class="default">$aPieces </span><span class="keyword">as </span><span class="default">$idx</span><span class="keyword">=&gt;</span><span class="default">$piece</span><span class="keyword">)<br />  </span><span class="default">$aPieces</span><span class="keyword">[</span><span class="default">$idx</span><span class="keyword">] = </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">"/\\\\(.)/s"</span><span class="keyword">, </span><span class="string">"$1"</span><span class="keyword">, </span><span class="default">$piece</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104618">  <div class="votes">
    <div id="Vu104618">
    <a href="/manual/vote-note.php?id=104618&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104618">
    <a href="/manual/vote-note.php?id=104618&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104618" title="56% like this...">
    3
    </div>
  </div>
  <a href="#104618" class="name">
  <strong class="user"><em>david dot binovec at gmail dot com</em></strong></a><a class="genanchor" href="#104618"> &para;</a><div class="date" title="2011-06-26 06:38"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104618">
<div class="phpcode"><code><span class="html">Limit = 1 may be confusing. The important thing is that in case of limit equals to 1 will produce only ONE substring. Ergo the only one substring will be the first one as well as the last one. Tnat the rest of the string (after the first delimiter) will be placed to the last substring. But last is the first and only one.<br /><br /><span class="default">&lt;?php<br /><br />$output </span><span class="keyword">= </span><span class="default">$preg_split</span><span class="keyword">(</span><span class="string">'(/ /)'</span><span class="keyword">, </span><span class="string">'1 2 3 4 5 6 7 8'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">); <br /><br />echo </span><span class="default">$output</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] </span><span class="comment">//will return whole string!;<br /><br /></span><span class="default">$output </span><span class="keyword">= </span><span class="default">$preg_split</span><span class="keyword">(</span><span class="string">'(/ /)'</span><span class="keyword">, </span><span class="string">'1 2 3 4 5 6 7 8'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); <br /><br />echo </span><span class="default">$output</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] </span><span class="comment">//will return 1;<br /></span><span class="keyword">echo </span><span class="default">$output</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] </span><span class="comment">//will return '2 3 4 5 6 7 8';<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114474">  <div class="votes">
    <div id="Vu114474">
    <a href="/manual/vote-note.php?id=114474&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114474">
    <a href="/manual/vote-note.php?id=114474&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114474" title="55% like this...">
    1
    </div>
  </div>
  <a href="#114474" class="name">
  <strong class="user"><em>Miller</em></strong></a><a class="genanchor" href="#114474"> &para;</a><div class="date" title="2014-02-24 05:25"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114474">
<div class="phpcode"><code><span class="html">This is a function to truncate a string of text while preserving the whitespace (for instance, getting an excerpt from an article while maintaining newlines). It will not jive well with HTML, of course.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Truncates a string of text by word count<br /> * @param string $text The text to truncate<br /> * @param int $max_words The maximum number of words<br /> * @return string The truncated text<br /> */<br /></span><span class="keyword">function </span><span class="default">limit_words </span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">, </span><span class="default">$max_words</span><span class="keyword">) {<br />    </span><span class="default">$split </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/(\s+)/'</span><span class="keyword">, </span><span class="default">$text</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br />    </span><span class="default">$truncated </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">min</span><span class="keyword">(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$split</span><span class="keyword">), </span><span class="default">$max_words</span><span class="keyword">*</span><span class="default">2</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">2</span><span class="keyword">) {<br />        </span><span class="default">$truncated </span><span class="keyword">.= </span><span class="default">$split</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="default">$split</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">];<br />    }<br />    return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$truncated</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130187">  <div class="votes">
    <div id="Vu130187">
    <a href="/manual/vote-note.php?id=130187&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130187">
    <a href="/manual/vote-note.php?id=130187&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130187" title="100% like this...">
    1
    </div>
  </div>
  <a href="#130187" class="name">
  <strong class="user"><em>virtualryzen at gmail dot com</em></strong></a><a class="genanchor" href="#130187"> &para;</a><div class="date" title="2025-03-26 05:16"><strong>6 months ago</strong></div>
  <div class="text" id="Hcom130187">
<div class="phpcode"><code><span class="html">Using the flags requires passing a limit option even if you desire no limit, use 0 or -1.<br />Otherwise the result is unexpected, as the flags, being predefined constants, are integers and will be taken as the split limit not the  flag as intended.<br /><br />echo PREG_SPLIT_DELIM_CAPTURE,' ', PREG_SPLIT_NO_EMPTY,' ', PREG_SPLIT_OFFSET_CAPTURE,"\n"; <br />echos:  2 1 4<br /><br />print_r(preg_split('//', '131.95M', PREG_SPLIT_NO_EMPTY) );<br />produces array: [ '131.95M']<br />as limit is actually set to 1<br /><br />print_r( preg_split('//', '131.95M', 0, PREG_SPLIT_NO_EMPTY) );<br />produces array: [ "1", "3", "1", ".", "9", "5", "M"]<br /><br />print_r( preg_split('/([[:alpha:]])/', '131.95M', PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY) ); <br />produces array:  [ '131.95', '']<br /><br />print_r( preg_split('/([[:alpha:]])/', '131.95M', -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY) );<br />produces array: [ '131.95', 'M']</span></code></div>
  </div>
 </div>
  <div class="note" id="127151">  <div class="votes">
    <div id="Vu127151">
    <a href="/manual/vote-note.php?id=127151&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127151">
    <a href="/manual/vote-note.php?id=127151&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127151" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127151" class="name">
  <strong class="user"><em>Walf</em></strong></a><a class="genanchor" href="#127151"> &para;</a><div class="date" title="2022-06-01 08:45"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127151">
<div class="phpcode"><code><span class="html">Using PREG_SPLIT_DELIM_CAPTURE without PREG_SPLIT_NO_EMPTY guarantees that all the odd-numbered keys in the result will contain the delimiters. This makes further processing more predictable, and empty strings can always be filtered out at the end.</span></code></div>
  </div>
 </div>
  <div class="note" id="91067">  <div class="votes">
    <div id="Vu91067">
    <a href="/manual/vote-note.php?id=91067&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91067">
    <a href="/manual/vote-note.php?id=91067&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91067" title="50% like this...">
    0
    </div>
  </div>
  <a href="#91067" class="name">
  <strong class="user"><em>kenorb at gmail dot com</em></strong></a><a class="genanchor" href="#91067"> &para;</a><div class="date" title="2009-05-23 07:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91067">
<div class="phpcode"><code><span class="html">If you need convert function arguments without default default values and references, you can try this code:<br /><br /><span class="default">&lt;?php<br />    $func_args </span><span class="keyword">= </span><span class="string">'$node, $op, $a3 = NULL, $form = array(), $a4 = NULL'<br />    </span><span class="default">$call_arg </span><span class="keyword">= </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">'@(?&lt;func_arg&gt;\$[^,= ]+)@i'</span><span class="keyword">, </span><span class="default">$func_args</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />    </span><span class="default">$call_arg </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">','</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">[</span><span class="string">'func_arg'</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span>Result: string = "$node,$op,$a3,$form,$a4"</span></code></div>
  </div>
 </div>
  <div class="note" id="116490">  <div class="votes">
    <div id="Vu116490">
    <a href="/manual/vote-note.php?id=116490&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116490">
    <a href="/manual/vote-note.php?id=116490&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116490" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#116490" class="name">
  <strong class="user"><em>markac</em></strong></a><a class="genanchor" href="#116490"> &para;</a><div class="date" title="2015-01-11 04:08"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116490">
<div class="phpcode"><code><span class="html">Split string into words.<br /><br /><span class="default">&lt;?php<br />$string </span><span class="keyword">= </span><span class="string">'This - is a, very dirty "string" :-)'</span><span class="keyword">;<br /><br /></span><span class="comment">// split into words<br /></span><span class="default">$wordlist </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/\W/'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">PREG_SPLIT_NO_EMPTY</span><span class="keyword">);<br /><br /></span><span class="comment">// returns only words that have minimum 2 chars<br /></span><span class="default">$wordlist </span><span class="keyword">= </span><span class="default">array_filter</span><span class="keyword">(</span><span class="default">$wordlist</span><span class="keyword">, function(</span><span class="default">$val</span><span class="keyword">) {<br />  return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) &gt;= </span><span class="default">2</span><span class="keyword">;<br />});<br /><br /></span><span class="comment">// print<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$wordlist</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Result:<br /><br />array (size=5)<br />  0 =&gt; string 'This' (length=4)<br />  1 =&gt; string 'is' (length=2)<br />  3 =&gt; string 'very' (length=4)<br />  4 =&gt; string 'dirty' (length=5)<br />  5 =&gt; string 'string' (length=6)</span></code></div>
  </div>
 </div>
  <div class="note" id="120149">  <div class="votes">
    <div id="Vu120149">
    <a href="/manual/vote-note.php?id=120149&amp;page=function.preg-split&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120149">
    <a href="/manual/vote-note.php?id=120149&amp;page=function.preg-split&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120149" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#120149" class="name">
  <strong class="user"><em>php at haravikk dot me</em></strong></a><a class="genanchor" href="#120149"> &para;</a><div class="date" title="2016-11-11 03:24"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120149">
<div class="phpcode"><code><span class="html">When using the PREG_SPLIT_OFFSET_CAPTURE option you will end up with all results in a single array, which is often undesirable as it means you then have to filter out any delimiters you wanted to check for but not keep.<br /><br />To get around this you can instead use preg_match_all() to perform the split. For comparison, here are two examples, both splitting around colon and semi-colon characters:<br /><br /><span class="default">&lt;?php $pieces_with_delimiters </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">'/[;:]/'</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">, </span><span class="default">PREG_SPLIT_OFFSET_CAPTURE</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php preg_match_all</span><span class="keyword">(</span><span class="string">'/([^;:]*)([;:]|$)/'</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />list(, </span><span class="default">$pieces</span><span class="keyword">, </span><span class="default">$delimiters</span><span class="keyword">) = </span><span class="default">$matches ?&gt;<br /></span><br />The latter requires a more complex pattern, but produces a much more convenient set of results to work with, depending upon what you want to do with them.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.preg-split&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.preg-split.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcre.php">PCRE Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.preg-filter.php" title="preg_&#8203;filter">preg_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-grep.php" title="preg_&#8203;grep">preg_&#8203;grep</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error.php" title="preg_&#8203;last_&#8203;error">preg_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-last-error-msg.php" title="preg_&#8203;last_&#8203;error_&#8203;msg">preg_&#8203;last_&#8203;error_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match.php" title="preg_&#8203;match">preg_&#8203;match</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-match-all.php" title="preg_&#8203;match_&#8203;all">preg_&#8203;match_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-quote.php" title="preg_&#8203;quote">preg_&#8203;quote</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace.php" title="preg_&#8203;replace">preg_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback.php" title="preg_&#8203;replace_&#8203;callback">preg_&#8203;replace_&#8203;callback</a>
                        </li>
                                                <li class="">
                            <a href="function.preg-replace-callback-array.php" title="preg_&#8203;replace_&#8203;callback_&#8203;array">preg_&#8203;replace_&#8203;callback_&#8203;array</a>
                        </li>
                                                <li class="current">
                            <a href="function.preg-split.php" title="preg_&#8203;split">preg_&#8203;split</a>
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
