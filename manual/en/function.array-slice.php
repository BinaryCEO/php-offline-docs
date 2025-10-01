<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_slice - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-slice.php">
 <link rel="shorturl" href="https://www.php.net/array-slice">
 <link rel="alternate" href="https://www.php.net/array-slice" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-shift.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-splice.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-slice.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-slice.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-slice.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-slice.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-slice.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-slice.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-slice.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-slice.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-slice.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-slice.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-slice.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Extract a slice of the array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_slice - Manual" />
<meta name="twitter:description" content="Extract a slice of the array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_slice - Manual" />
<meta itemprop="description" content="Extract a slice of the array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Extract a slice of the array" />

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
        <a href="function.array-splice.php">
          array_splice &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-shift.php">
          &laquo; array_shift        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-slice.php' selected="selected">English</option>
            <option value='de/function.array-slice.php'>German</option>
            <option value='es/function.array-slice.php'>Spanish</option>
            <option value='fr/function.array-slice.php'>French</option>
            <option value='it/function.array-slice.php'>Italian</option>
            <option value='ja/function.array-slice.php'>Japanese</option>
            <option value='pt_BR/function.array-slice.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-slice.php'>Russian</option>
            <option value='tr/function.array-slice.php'>Turkish</option>
            <option value='uk/function.array-slice.php'>Ukrainian</option>
            <option value='zh/function.array-slice.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-slice" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_slice</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_slice</span> &mdash; <span class="dc-title">Extract a slice of the array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-slice-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_slice</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$array</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$preserve_keys</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_slice()</strong></span> returns the sequence of elements
   from the array <code class="parameter">array</code> as specified by the
   <code class="parameter">offset</code> and <code class="parameter">length</code>
   parameters.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-slice-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">offset</code> is non-negative, the sequence will
       start at that offset in the <code class="parameter">array</code>.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is negative, the sequence will
       start that far from the end of the <code class="parameter">array</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        The <code class="parameter">offset</code> parameter denotes the position
        in the array, not the key.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">length</code> is given and is positive,
       then the sequence will have up to that many elements in it.
      </p>
      <p class="para">
       If the array is shorter than the <code class="parameter">length</code>,
       then only the available array elements will be present.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is given and is negative then the
       sequence will stop that many elements from the end of the array.
      </p>
      <p class="para">
       If it is omitted, then the sequence will have everything
       from <code class="parameter">offset</code> up until the end of the
       <code class="parameter">array</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">preserve_keys</code></dt>
     <dd>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        <span class="function"><strong>array_slice()</strong></span> will reorder and reset the
        integer array indices by default. This behaviour can be changed
        by setting <code class="parameter">preserve_keys</code> to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
        String keys are always preserved, regardless of this parameter.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-slice-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the slice. If the offset is larger than the size of the array,
   an empty array is returned.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.array-slice-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5273">
    <p><strong>Example #1 <span class="function"><strong>array_slice()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">, </span><span style="color: #DD0000">"d"</span><span style="color: #007700">, </span><span style="color: #DD0000">"e"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">);      </span><span style="color: #FF8000">// returns "c", "d", and "e"<br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">);  </span><span style="color: #FF8000">// returns "d"<br /></span><span style="color: #0000BB">$output </span><span style="color: #007700">= </span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);   </span><span style="color: #FF8000">// returns "a", "b", and "c"<br /><br />// note the differences in the array keys<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; c
    [1] =&gt; d
)
Array
(
    [2] =&gt; c
    [3] =&gt; d
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5274">
    <p><strong>Example #2 <span class="function"><strong>array_slice()</strong></span> and one-based array</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$input </span><span style="color: #007700">= array(</span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"a"</span><span style="color: #007700">, </span><span style="color: #DD0000">"b"</span><span style="color: #007700">, </span><span style="color: #DD0000">"c"</span><span style="color: #007700">, </span><span style="color: #DD0000">"d"</span><span style="color: #007700">, </span><span style="color: #DD0000">"e"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$input</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; b
    [1] =&gt; c
)</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5275">
    <p><strong>Example #3 <span class="function"><strong>array_slice()</strong></span> and array with mixed keys</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$ar </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'apple'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'banana'</span><span style="color: #007700">, </span><span style="color: #DD0000">'42'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'pear'</span><span style="color: #007700">, </span><span style="color: #DD0000">'d'</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">'orange'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">array_slice</span><span style="color: #007700">(</span><span style="color: #0000BB">$ar</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [a] =&gt; apple
    [b] =&gt; banana
    [0] =&gt; pear
)
Array
(
    [a] =&gt; apple
    [b] =&gt; banana
    [42] =&gt; pear
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-slice-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-chunk.php" class="function" rel="rdfs-seeAlso">array_chunk()</a> - Split an array into chunks</span></li>
    <li><span class="function"><a href="function.array-splice.php" class="function" rel="rdfs-seeAlso">array_splice()</a> - Remove a portion of the array and replace it with something else</span></li>
    <li><span class="function"><a href="function.unset.php" class="function" rel="rdfs-seeAlso">unset()</a> - unset a given variable</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-slice.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-slice%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-slice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-slice.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="64122">  <div class="votes">
    <div id="Vu64122">
    <a href="/manual/vote-note.php?id=64122&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64122">
    <a href="/manual/vote-note.php?id=64122&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64122" title="67% like this...">
    51
    </div>
  </div>
  <a href="#64122" class="name">
  <strong class="user"><em>taylorbarstow at the google mail service</em></strong></a><a class="genanchor" href="#64122"> &para;</a><div class="date" title="2006-04-07 02:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64122">
<div class="phpcode"><code><span class="html">Array slice function that works with associative arrays (keys):<br /><br />function array_slice_assoc($array,$keys) {<br />    return array_intersect_key($array,array_flip($keys));<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="122200">  <div class="votes">
    <div id="Vu122200">
    <a href="/manual/vote-note.php?id=122200&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122200">
    <a href="/manual/vote-note.php?id=122200&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122200" title="73% like this...">
    7
    </div>
  </div>
  <a href="#122200" class="name">
  <strong class="user"><em>nathan dot fiscaletti at gmail dot com</em></strong></a><a class="genanchor" href="#122200"> &para;</a><div class="date" title="2017-12-30 01:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122200">
<div class="phpcode"><code><span class="html">If you want an associative version of this you can do the following:<br /><br />function array_slice_assoc($array,$keys) {<br />    return array_intersect_key($array,array_flip($keys));<br />}<br /><br />However, if you want an inverse associative version of this, just use array_diff_key instead of array_intersect_key. <br /><br />function array_slice_assoc_inverse($array,$keys) {<br />    return array_diff_key($array,array_flip($keys));<br />}<br /><br />Example:<br /><br />$arr = [<br />    'name' =&gt; 'Nathan',<br />    'age' =&gt; 20,<br />    'height' =&gt; 6<br />];<br /><br />array_slice_assoc($arr, ['name','age']);<br /><br />will return <br /><br />Array (<br />     'name' = 'Nathan',<br />     'age' = 20<br />)<br /><br />Where as<br /><br />array_slice_assoc_inverse($arr, ['name']);<br /><br />will return <br /><br />Array (<br />    'age' = 20,<br />    'height' = 6<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="112359">  <div class="votes">
    <div id="Vu112359">
    <a href="/manual/vote-note.php?id=112359&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112359">
    <a href="/manual/vote-note.php?id=112359&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112359" title="62% like this...">
    19
    </div>
  </div>
  <a href="#112359" class="name">
  <strong class="user"><em>Ray.Paseur often uses Gmail</em></strong></a><a class="genanchor" href="#112359"> &para;</a><div class="date" title="2013-06-06 02:44"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112359">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// CHOP $num ELEMENTS OFF THE FRONT OF AN ARRAY<br />// RETURN THE CHOP, SHORTENING THE SUBJECT ARRAY<br /></span><span class="keyword">function </span><span class="default">array_chop</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">)<br />{<br />    </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">);<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$num</span><span class="keyword">);<br />    return </span><span class="default">$ret</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82950">  <div class="votes">
    <div id="Vu82950">
    <a href="/manual/vote-note.php?id=82950&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82950">
    <a href="/manual/vote-note.php?id=82950&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82950" title="66% like this...">
    4
    </div>
  </div>
  <a href="#82950" class="name">
  <strong class="user"><em>ted.devito at 9gmail9 dot 99com</em></strong></a><a class="genanchor" href="#82950"> &para;</a><div class="date" title="2008-05-02 09:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82950">
<div class="phpcode"><code><span class="html">based on worldclimb's arem(), here is a recursive array value removal tool that can work with multidimensional arrays.<br /><br />function remove_from_array($array,$value){<br />    $clear = true;<br />    $holding=array();<br />   <br />    foreach($array as $k =&gt; $v){<br />        if (is_array($v)) {<br />            $holding [$k] = remove_from_array ($v, $value);<br />            }<br />        elseif ($value == $v) {<br />            $clear = false;<br />            }<br />        elseif($value != $v){<br />            $holding[$k]=$v; // removes an item by combing through the array in order and saving the good stuff<br />        }<br />    }   <br />    if ($clear) return $holding; // only pass back the holding array if we didn't find the value <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="81973">  <div class="votes">
    <div id="Vu81973">
    <a href="/manual/vote-note.php?id=81973&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81973">
    <a href="/manual/vote-note.php?id=81973&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81973" title="58% like this...">
    11
    </div>
  </div>
  <a href="#81973" class="name">
  <strong class="user"><em>worldclimb at 99gmail99 dot com</em></strong></a><a class="genanchor" href="#81973"> &para;</a><div class="date" title="2008-03-21 12:51"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81973">
<div class="phpcode"><code><span class="html">array_slice can be used to remove elements from an array but it's pretty simple to use a custom function.<br /><br />One day array_remove() might become part of PHP and will likely be a reserved function name, hence the unobvious choice for this function's names.<br /><br />&lt;?<br />function arem($array,$value){<br />    $holding=array();<br />    foreach($array as $k =&gt; $v){<br />        if($value!=$v){<br />            $holding[$k]=$v;<br />        }<br />    }    <br />    return $holding;<br />}<br /><br />function akrem($array,$key){<br />    $holding=array();<br />    foreach($array as $k =&gt; $v){<br />        if($key!=$k){<br />            $holding[$k]=$v;<br />        }<br />    }    <br />    return $holding;<br />}<br /><br />$lunch = array('sandwich' =&gt; 'cheese', 'cookie'=&gt;'oatmeal','drink' =&gt; 'tea','fruit' =&gt; 'apple');<br />echo '&lt;pre&gt;';<br />print_r($lunch);<br />$lunch=arem($lunch,'apple');<br />print_r($lunch);<br />$lunch=akrem($lunch,'sandwich');<br />print_r($lunch);<br />echo '&lt;/pre&gt;';<br />?&gt;<br /><br />(remove 9's in email)</span></code></div>
  </div>
 </div>
  <div class="note" id="128935">  <div class="votes">
    <div id="Vu128935">
    <a href="/manual/vote-note.php?id=128935&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128935">
    <a href="/manual/vote-note.php?id=128935&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128935" title="62% like this...">
    2
    </div>
  </div>
  <a href="#128935" class="name">
  <strong class="user"><em>Benjamin Sonntag</em></strong></a><a class="genanchor" href="#128935"> &para;</a><div class="date" title="2023-10-06 04:17"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom128935">
<div class="phpcode"><code><span class="html">The documentation doesn't say it, but if LENGTH is ZERO, then the result is an empty array [].</span></code></div>
  </div>
 </div>
  <div class="note" id="18741">  <div class="votes">
    <div id="Vu18741">
    <a href="/manual/vote-note.php?id=18741&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18741">
    <a href="/manual/vote-note.php?id=18741&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18741" title="57% like this...">
    8
    </div>
  </div>
  <a href="#18741" class="name">
  <strong class="user"><em>developer at i-space dot org</em></strong></a><a class="genanchor" href="#18741"> &para;</a><div class="date" title="2002-02-03 08:22"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18741">
<div class="phpcode"><code><span class="html">remember that array_slice returns an array with the current element. you must use array_slice($array, $index+1) if you want to get the next elements.</span></code></div>
  </div>
 </div>
  <div class="note" id="85695">  <div class="votes">
    <div id="Vu85695">
    <a href="/manual/vote-note.php?id=85695&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85695">
    <a href="/manual/vote-note.php?id=85695&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85695" title="57% like this...">
    5
    </div>
  </div>
  <a href="#85695" class="name">
  <strong class="user"><em>s0i0m at dreamevilconcepts dot com</em></strong></a><a class="genanchor" href="#85695"> &para;</a><div class="date" title="2008-09-12 07:53"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85695">
<div class="phpcode"><code><span class="html">Using the varname function referenced from the array_search page, submitted by dcez at land dot ru. I created a multi-dimensional array splice function. It's usage is like so:<br /><br />$array['admin'] = array('blah1', 'blah2');<br />$array['voice'] = array('blah3', 'blah4');<br />array_cut('blah4', $array);<br /><br />...Would strip blah4 from the array, no matter where the position of it was in the array ^^ Returning this...<br /><br />Array ( [admin] =&gt; Array ( [0] =&gt; blah1 [1] =&gt; blah2 ) [voice] =&gt; Array ( [0] =&gt; blah3 ) ) <br /><br />Here is the code...<br /><br /><span class="default">&lt;?php<br /><br />  </span><span class="keyword">function </span><span class="default">varname </span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)<br />  {<br />    </span><span class="comment">// varname function by dcez at land dot ru<br />    </span><span class="keyword">return (isset(</span><span class="default">$var</span><span class="keyword">)) ? </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$GLOBALS</span><span class="keyword">) : </span><span class="default">false</span><span class="keyword">;<br />  }<br /><br />  function </span><span class="default">array_cut</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">)<br />  {<br />    foreach (</span><span class="default">$haystack </span><span class="keyword">as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">)<br />    {<br />      for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />        if (</span><span class="default">$v</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] === </span><span class="default">$needle</span><span class="keyword">)<br />        {<br />          return </span><span class="default">array_splice</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="default">varname</span><span class="keyword">(</span><span class="default">$haystack</span><span class="keyword">)][</span><span class="default">$k</span><span class="keyword">], </span><span class="default">$i</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />          break; break;<br />        }<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />Check out dreamevilconcept's forum for more innovative creations!</span></code></div>
  </div>
 </div>
  <div class="note" id="117802">  <div class="votes">
    <div id="Vu117802">
    <a href="/manual/vote-note.php?id=117802&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117802">
    <a href="/manual/vote-note.php?id=117802&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117802" title="50% like this...">
    0
    </div>
  </div>
  <a href="#117802" class="name">
  <strong class="user"><em>kansey</em></strong></a><a class="genanchor" href="#117802"> &para;</a><div class="date" title="2015-08-12 09:32"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117802">
<div class="phpcode"><code><span class="html">To save the sort order of a numeric index in the array. Version php =&gt;5.5.26<br />/*<br />Example<br />*/<br /><br />$arr = array( "1" =&gt;2, "2" =&gt;3 , "3" =&gt;5 );<br /><br />print_r(array_slice($arr,1,null,true));<br /><br />/*<br />Result<br /><br />Array<br />(<br />[2] =&gt; 3<br />[3] =&gt; 5<br />)<br />*/</span></code></div>
  </div>
 </div>
  <div class="note" id="102215">  <div class="votes">
    <div id="Vu102215">
    <a href="/manual/vote-note.php?id=102215&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102215">
    <a href="/manual/vote-note.php?id=102215&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102215" title="46% like this...">
    -2
    </div>
  </div>
  <a href="#102215" class="name">
  <strong class="user"><em>xananax at yelostudio dot com</em></strong></a><a class="genanchor" href="#102215"> &para;</a><div class="date" title="2011-02-02 07:23"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102215">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Reorders an array by keys according to a list of values.<br /> * @param array $array the array to reorder. Passed by reference<br /> * @param array $list the list to reorder by<br /> * @param boolean $keepRest if set to FALSE, anything not in the $list array will be removed.<br /> * @param boolean $prepend if set to TRUE, will prepend the remaining values instead of appending them<br /> * @author xananax AT yelostudio DOT com<br /> */<br /></span><span class="keyword">function </span><span class="default">array_reorder</span><span class="keyword">(array &amp;</span><span class="default">$array</span><span class="keyword">,array </span><span class="default">$list</span><span class="keyword">,</span><span class="default">$keepRest</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">,</span><span class="default">$prepend</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">,</span><span class="default">$preserveKeys</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">){<br />    </span><span class="default">$temp </span><span class="keyword">= array();<br />    foreach(</span><span class="default">$list </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">){<br />        if(isset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])){<br />            </span><span class="default">$tempValue </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(<br />                </span><span class="default">$array</span><span class="keyword">,<br />                </span><span class="default">array_search</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">,</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)),<br />                </span><span class="default">1</span><span class="keyword">,<br />                </span><span class="default">$preserveKeys<br />            </span><span class="keyword">);<br />            </span><span class="default">$temp</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$tempValue</span><span class="keyword">);<br />            unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br />        }<br />    }<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">$keepRest </span><span class="keyword">?<br />        (</span><span class="default">$prepend</span><span class="keyword">? <br />            </span><span class="default">$array</span><span class="keyword">+</span><span class="default">$temp<br />            </span><span class="keyword">:</span><span class="default">$temp</span><span class="keyword">+</span><span class="default">$array<br />        </span><span class="keyword">)<br />        : </span><span class="default">$temp</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/** exemple ** /<br />$a = array(<br />    'a'    =&gt;    'a',<br />    'b'    =&gt;    'b',<br />    'c'    =&gt;    'c',<br />    'd'    =&gt;    'd',<br />    'e'    =&gt;    'e'<br />);<br />$order = array('c','b','a');<br /><br />array_reorder($a,$order,TRUE);<br />echo '&lt;pre&gt;';<br />print_r($a);<br />echo '&lt;/pre&gt;';<br />/** exemple end **/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56535">  <div class="votes">
    <div id="Vu56535">
    <a href="/manual/vote-note.php?id=56535&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56535">
    <a href="/manual/vote-note.php?id=56535&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56535" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#56535" class="name">
  <strong class="user"><em>andreasblixt (at) msn (dot) com</em></strong></a><a class="genanchor" href="#56535"> &para;</a><div class="date" title="2005-09-06 09:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56535">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />    </span><span class="comment">// Combines two arrays by inserting one into the other at a given position then returns the result<br />    </span><span class="keyword">function </span><span class="default">array_insert</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">, </span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">) {<br />        if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$src</span><span class="keyword">) || !</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">) || </span><span class="default">$pos </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) return </span><span class="default">FALSE</span><span class="keyword">;<br />        return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">), </span><span class="default">$src</span><span class="keyword">, </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$dest</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">));<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65711">  <div class="votes">
    <div id="Vu65711">
    <a href="/manual/vote-note.php?id=65711&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65711">
    <a href="/manual/vote-note.php?id=65711&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65711" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#65711" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#65711"> &para;</a><div class="date" title="2006-05-06 12:21"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65711">
<div class="phpcode"><code><span class="html">If you specify the fourth argument (to not reassign the keys), then there appears to be no way to get the function to return all values to the end of the array. Assigning -0 or NULL or just putting two commas in a row won't return any results.</span></code></div>
  </div>
 </div>
  <div class="note" id="73572">  <div class="votes">
    <div id="Vu73572">
    <a href="/manual/vote-note.php?id=73572&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73572">
    <a href="/manual/vote-note.php?id=73572&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73572" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#73572" class="name">
  <strong class="user"><em>aflavio at gmail dot com</em></strong></a><a class="genanchor" href="#73572"> &para;</a><div class="date" title="2007-03-01 01:43"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73572">
<div class="phpcode"><code><span class="html">/**<br />    * Remove a value from a array<br />    * @param string $val<br />    * @param array $arr<br />    * @return array $array_remval<br />    */<br />    function array_remval($val, &amp;$arr)<br />    {<br />          $array_remval = $arr;<br />          for($x=0;$x&lt;count($array_remval);$x++)<br />          {<br />              $i=array_search($val,$array_remval);<br />              if (is_numeric($i)) {<br />                  $array_temp  = array_slice($array_remval, 0, $i );<br />                $array_temp2 = array_slice($array_remval, $i+1, count($array_remval)-1 );<br />                $array_remval = array_merge($array_temp, $array_temp2);<br />              }<br />          }<br />          return $array_remval;<br />    }<br /><br />$stack=Array('apple','banana','pear','apple', 'cherry', 'apple');<br />array_remval("apple", $stack);<br /><br />//output: Array('banana','pear', 'cherry')</span></code></div>
  </div>
 </div>
  <div class="note" id="78257">  <div class="votes">
    <div id="Vu78257">
    <a href="/manual/vote-note.php?id=78257&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78257">
    <a href="/manual/vote-note.php?id=78257&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78257" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#78257" class="name">
  <strong class="user"><em>aexchecker at yahoo dot com</em></strong></a><a class="genanchor" href="#78257"> &para;</a><div class="date" title="2007-10-04 08:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78257">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * @desc<br /> * Combines two arrays by inserting one into the other at a given position then<br /> * returns the result.<br /> *<br /> * @since   2007/10/04<br /> * @version v0.7 2007/10/04 18:47:52<br /> * @author  AexChecker &lt;AexChecker@yahoo.com&gt;<br /> * @param   array $source<br /> * @param   array $destination<br /> * @param   int [optional] $offset<br /> * @param   int [optional] $length<br /> * @return  array<br /> */<br /></span><span class="keyword">function </span><span class="default">array_insert</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">) {<br />    if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">) || empty(</span><span class="default">$source</span><span class="keyword">)) {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">) &amp;&amp; !empty(</span><span class="default">$destination</span><span class="keyword">)) {<br />            return </span><span class="default">$destination</span><span class="keyword">;<br />        }<br />        return array();<br />    }<br />    if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">)) {<br />        return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">);<br />    }<br />    </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">var2int</span><span class="keyword">(</span><span class="default">$offset</span><span class="keyword">);<br />    if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)) {<br />        if (</span><span class="default">$offset </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />            return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">));<br />        }<br />        if (</span><span class="default">$offset </span><span class="keyword">=== -</span><span class="default">1</span><span class="keyword">) {<br />            return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">), </span><span class="default">$source</span><span class="keyword">);<br />        }<br />        return </span><span class="default">array_merge</span><span class="keyword">(<br />            </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">),<br />            </span><span class="default">$source</span><span class="keyword">,<br />            </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, ++</span><span class="default">$offset</span><span class="keyword">)<br />        );<br />    }<br />    if (</span><span class="default">$offset </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">));<br />    }<br />    </span><span class="default">$destination_count </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">);<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">var2int</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">);<br />    if (</span><span class="default">$offset </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        if (</span><span class="default">$destination_count </span><span class="keyword">- </span><span class="default">$offset </span><span class="keyword">&lt; </span><span class="default">1</span><span class="keyword">) {<br />            return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$source</span><span class="keyword">);<br />        }<br />    } else{<br />        if ((</span><span class="default">$t </span><span class="keyword">= </span><span class="default">$destination_count </span><span class="keyword">+ </span><span class="default">$offset</span><span class="keyword">) &lt; </span><span class="default">1</span><span class="keyword">) {<br />            return </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$source</span><span class="keyword">, </span><span class="default">$destination</span><span class="keyword">);<br />        }<br />        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$t</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$length </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$length</span><span class="keyword">+= </span><span class="default">$offset</span><span class="keyword">;<br />    } elseif (</span><span class="default">$length </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; !(</span><span class="default">$length </span><span class="keyword">* -</span><span class="default">1 </span><span class="keyword">&lt; </span><span class="default">$destination_count</span><span class="keyword">)) {<br />        return </span><span class="default">$source</span><span class="keyword">;<br />    } else {<br />        </span><span class="default">$length </span><span class="keyword">= </span><span class="default">$offset</span><span class="keyword">;<br />    }<br />    return </span><span class="default">array_merge</span><span class="keyword">(<br />        </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">),<br />        </span><span class="default">$source</span><span class="keyword">,<br />        </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$destination</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">)<br />    );<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="87002">  <div class="votes">
    <div id="Vu87002">
    <a href="/manual/vote-note.php?id=87002&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87002">
    <a href="/manual/vote-note.php?id=87002&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87002" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#87002" class="name">
  <strong class="user"><em>Mr. P</em></strong></a><a class="genanchor" href="#87002"> &para;</a><div class="date" title="2008-11-14 02:11"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87002">
<div class="phpcode"><code><span class="html">Note that offset is not the same thing as key. Offset always starts at 0, while keys might be any number.
<br />
<br />So this:
<br />
<br /><span class="default">&lt;?php print_r</span><span class="keyword">(</span><span class="default">array_slice</span><span class="keyword">(array(</span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="default">0</span><span class="keyword">, </span><span class="default">5 </span><span class="keyword">=&gt; </span><span class="default">5</span><span class="keyword">, </span><span class="default">13 </span><span class="keyword">=&gt; </span><span class="default">13</span><span class="keyword">),</span><span class="default">1</span><span class="keyword">)); </span><span class="default">?&gt;
<br /></span>
<br />will result in this:
<br />Array
<br />(
<br />    [0] =&gt; 5
<br />    [1] =&gt; 13
<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="48006">  <div class="votes">
    <div id="Vu48006">
    <a href="/manual/vote-note.php?id=48006&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48006">
    <a href="/manual/vote-note.php?id=48006&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48006" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#48006" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#48006"> &para;</a><div class="date" title="2004-12-08 01:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48006">
<div class="phpcode"><code><span class="html">Sometimes you need to pick certain non-integer and/or non-sequential keys out of an array. Consider using the array_pick() implementation below to pull specific keys, in a specific order, out of a source array:<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= array (</span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="default">1</span><span class="keyword">, </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="default">2</span><span class="keyword">, </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="default">3</span><span class="keyword">, </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="default">4</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_pick</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, array (</span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">));<br /><br /></span><span class="comment">// now:<br />// $a = array ('a' =&gt; 1, 'c' =&gt; '3');<br />// $b = array ('d' =&gt; 4, 'b' =&gt; '2');<br /><br /></span><span class="keyword">function &amp;</span><span class="default">array_pick</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">)<br />{<br />    if (! </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">)) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'First parameter must be an array'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    if (! (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">) || </span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">))) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Second parameter must be an array of keys or a scalar key'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />    if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) {<br />        </span><span class="comment">// nothing to do<br />    </span><span class="keyword">} else if (</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">)) {<br />        </span><span class="default">$keys </span><span class="keyword">= array (</span><span class="default">$keys</span><span class="keyword">);<br />    }<br /><br />    </span><span class="default">$resultArray </span><span class="keyword">= array ();<br />    foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">) {<br />        if (</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">)) {<br />            if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">)) {<br />                </span><span class="default">$resultArray</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] = </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />                unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />            }<br />        } else {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">'Supplied key is not scalar'</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />            return </span><span class="default">false</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">$resultArray</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102383">  <div class="votes">
    <div id="Vu102383">
    <a href="/manual/vote-note.php?id=102383&amp;page=function.array-slice&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102383">
    <a href="/manual/vote-note.php?id=102383&amp;page=function.array-slice&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102383" title="36% like this...">
    -5
    </div>
  </div>
  <a href="#102383" class="name">
  <strong class="user"><em>delew</em></strong></a><a class="genanchor" href="#102383"> &para;</a><div class="date" title="2011-02-11 01:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102383">
<div class="phpcode"><code><span class="html">just a little tip.<br />to preserve keys without providing length: use NULL<br /><br />array_slice($array, $my_offset, NULL, true);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-slice&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-slice.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
