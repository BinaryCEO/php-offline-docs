<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: range - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.range.php">
 <link rel="shorturl" href="https://www.php.net/range">
 <link rel="alternate" href="https://www.php.net/range" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.prev.php">
 <link rel="next" href="https://www.php.net/manual/en/function.reset.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.range.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.range.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.range.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.range.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.range.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.range.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.range.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.range.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.range.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.range.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.range.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create an array containing a range of elements" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: range - Manual" />
<meta name="twitter:description" content="Create an array containing a range of elements" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: range - Manual" />
<meta itemprop="description" content="Create an array containing a range of elements" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create an array containing a range of elements" />

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
        <a href="function.reset.php">
          reset &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.prev.php">
          &laquo; prev        </a>
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
            <option value='en/function.range.php' selected="selected">English</option>
            <option value='de/function.range.php'>German</option>
            <option value='es/function.range.php'>Spanish</option>
            <option value='fr/function.range.php'>French</option>
            <option value='it/function.range.php'>Italian</option>
            <option value='ja/function.range.php'>Japanese</option>
            <option value='pt_BR/function.range.php'>Brazilian Portuguese</option>
            <option value='ru/function.range.php'>Russian</option>
            <option value='tr/function.range.php'>Turkish</option>
            <option value='uk/function.range.php'>Ukrainian</option>
            <option value='zh/function.range.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.range" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">range</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">range</span> &mdash; <span class="dc-title">Create an array containing a range of elements</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.range-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>range</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$start</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$end</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.float.php" class="type float">float</a></span></span> <code class="parameter">$step</code><span class="initializer"> = 1</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   Create an array containing a range of elements.
  </p>
  <p class="para">
   If both <code class="parameter">start</code> and <code class="parameter">end</code> are
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s, and <code class="parameter">step</code> is <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   the produced array will be a sequence of bytes.
   Otherwise, the produced array will be a sequence of numbers.
  </p>
  <p class="para">
   The sequence is increasing if <code class="parameter">start</code> is less than
   equal to <code class="parameter">end</code>.
   Otherwise, the sequence is decreasing.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.range-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">start</code></dt>
     <dd>
      <p class="para">
       First value of the sequence.
      </p>
     </dd>
    
    
     <dt><code class="parameter">end</code></dt>
     <dd>
      <p class="para">
       Last possible value of the sequence.
      </p>
     </dd>
    
    
     <dt><code class="parameter">step</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">step</code> indicates by how much is the produced
       sequence progressed between values of the sequence.
      </p>
      <p class="para">
       <code class="parameter">step</code> may be negative for decreasing sequences.
      </p>
      <p class="para">
       If <code class="parameter">step</code> is a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> without a
       fractional part, it is interpreted as <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.range-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a sequence of elements as an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> with the first
   element being <code class="parameter">start</code> going up to
   <code class="parameter">end</code>, with each value of the sequence being
   <code class="parameter">step</code> values apart.
  </p>
  <p class="para">
   The last element of the returned array is either <code class="parameter">end</code>
   or the previous element of the sequence,
   depending on the value of <code class="parameter">step</code>.
  </p>
  <p class="para">
   If both <code class="parameter">start</code> and <code class="parameter">end</code> are
   <span class="type"><a href="language.types.string.php" class="type string">string</a></span>s, and <code class="parameter">step</code> is <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   the produced array will be a sequence of bytes,
   generally latin <abbr class="abbrev">ASCII</abbr> characters.
  </p>
  <p class="para">
   If at least one of <code class="parameter">start</code>, <code class="parameter">end</code>,
   or <code class="parameter">step</code> is <span class="type"><a href="language.types.float.php" class="type float">float</a></span>
   the produced array will be a sequence of <span class="type"><a href="language.types.float.php" class="type float">float</a></span>.
  </p>
  <p class="para">
   Otherwise, the produced array will be a sequence of <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.range-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <ul class="itemizedlist">
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">step</code> is <code class="literal">0</code>,
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">start</code>, <code class="parameter">end</code>,
     or <code class="parameter">step</code> is not <span class="function"><a href="function.is-finite.php" class="function">is_finite()</a></span>,
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">step</code> is negative,
     but the produced range is increasing
     (i.e. <code class="code">$start &lt;= $end</code>),
     a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is thrown.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">start</code> or <code class="parameter">end</code>
     is the empty string <code class="literal">&#039;&#039;</code>,
     an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted and
     the empty string will be interpreted as <code class="literal">0</code>.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">start</code> or <code class="parameter">end</code> is a
     non-<a href="language.types.numeric-strings.php" class="link">numeric string</a>
     with more than one byte, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">start</code> or <code class="parameter">end</code> is a string
     that is implicitly cast to an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> because the other boundary
     value is a number, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
    </span>
   </li>
   <li class="listitem">
    <span class="simpara">
     If <code class="parameter">step</code> is a <span class="type"><a href="language.types.float.php" class="type float">float</a></span>,
     and <code class="parameter">start</code> and <code class="parameter">end</code> are
     non-<a href="language.types.numeric-strings.php" class="link">numeric string</a>,
     an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is emitted.
    </span>
   </li>
  </ul>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.range-changelog">
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
      <td>8.3.0</td>
      <td>
       If both <code class="parameter">start</code> and <code class="parameter">end</code>
       are strings then <span class="function"><strong>range()</strong></span> will now always produce
       an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of bytes.
       Previously if one of the boundary values was a numeric string,
       then the other boundary value was implicitly cast to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
       <code class="parameter">start</code> or <code class="parameter">end</code>
       is a string that is implicitly cast to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
       because the other boundary value is a number.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
       <code class="parameter">start</code> or <code class="parameter">end</code>
       is a non-numeric string with more than one byte.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       An <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> is now emitted if
       <code class="parameter">start</code> or <code class="parameter">end</code>
       is the empty string.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       If <code class="parameter">step</code> is a <span class="type"><a href="language.types.float.php" class="type float">float</a></span> with no
       fractional part, it will be interpreted as an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is now thrown if
       <code class="parameter">step</code> is negative when producing an increasing
       range.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       A <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> is now thrown if
       <code class="parameter">step</code> is not finite.
      </td>
     </tr>

     <tr>
      <td>8.3.0</td>
      <td>
       A <span class="classname"><a href="class.typeerror.php" class="classname">TypeError</a></span> is now thrown if
       <code class="parameter">start</code> or <code class="parameter">end</code>
       is an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>, <span class="type"><a href="language.types.object.php" class="type object">object</a></span>, or <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
       Previously they were implicitly cast to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.range-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5323">
    <p><strong>Example #1 <span class="function"><strong>range()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">12</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">100</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #DD0000">'i'</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #DD0000">'c'</span><span style="color: #007700">, </span><span style="color: #DD0000">'a'</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #0000BB">implode</span><span style="color: #007700">(</span><span style="color: #DD0000">', '</span><span style="color: #007700">, </span><span style="color: #0000BB">range</span><span style="color: #007700">(</span><span style="color: #DD0000">'A'</span><span style="color: #007700">, </span><span style="color: #DD0000">'z'</span><span style="color: #007700">)), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12
0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100
a, b, c, d, e, f, g, h, i
c, b, a
A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z, [, \, ], ^, _, `, a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.range-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.shuffle.php" class="function" rel="rdfs-seeAlso">shuffle()</a> - Shuffle an array</span></li>
    <li><span class="function"><a href="function.array-fill.php" class="function" rel="rdfs-seeAlso">array_fill()</a> - Fill an array with values</span></li>
    <li><a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/range.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.range%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.range&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.range.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">30 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="110504">  <div class="votes">
    <div id="Vu110504">
    <a href="/manual/vote-note.php?id=110504&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110504">
    <a href="/manual/vote-note.php?id=110504&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110504" title="68% like this...">
    135
    </div>
  </div>
  <a href="#110504" class="name">
  <strong class="user"><em>Palz</em></strong></a><a class="genanchor" href="#110504"> &para;</a><div class="date" title="2012-10-29 10:59"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110504">
<div class="phpcode"><code><span class="html">To create a range array like<br /><br />Array<br />(<br />    [11] =&gt; 1<br />    [12] =&gt; 2<br />    [13] =&gt; 3<br />    [14] =&gt; 4<br />)<br /><br />combine two range arrays using array_combine:<br /><br />array_combine(range(11,14),range(1,4))</span></code></div>
  </div>
 </div>
  <div class="note" id="114493">  <div class="votes">
    <div id="Vu114493">
    <a href="/manual/vote-note.php?id=114493&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114493">
    <a href="/manual/vote-note.php?id=114493&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114493" title="65% like this...">
    14
    </div>
  </div>
  <a href="#114493" class="name">
  <strong class="user"><em>php at keith tyler dot com</em></strong></a><a class="genanchor" href="#114493"> &para;</a><div class="date" title="2014-02-26 10:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114493">
<div class="phpcode"><code><span class="html">So with the introduction of single-character ranges to the range() function, the internal function tries to be "smart", and (I am inferring from behavior here) apparently checks the type of the incoming values. If one is numeric, including numeric string, then the other is treated as numeric; if it is a non-numeric string, it is treated as zero. <br /><br />But.<br /><br />If you pass in a numeric string in such a way that is is forced to be recognized as type string and not type numeric, range() will function quite differently.<br /><br />Compare:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="default">9</span><span class="keyword">,</span><span class="string">"Q"</span><span class="keyword">));<br /></span><span class="comment">// prints 9876543210<br /><br /></span><span class="keyword">echo </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="string">"9 "</span><span class="keyword">,</span><span class="string">"Q"</span><span class="keyword">));  </span><span class="comment">//space after the 9<br />// prints 9:;&lt;=&gt;?@ABCDEFGHIJKLMNOPQ<br /><br /></span><span class="keyword">echo </span><span class="default">implode</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="string">"q"</span><span class="keyword">,</span><span class="string">"9 "</span><span class="keyword">));<br /></span><span class="comment">// prints qponmlkjihgfedcba`_^]\[ZYXWVUTSRQPONMLKJIHGFEDCBA@</span><span class="default">?&gt;</span>=&lt;;:987654<br />?&gt;<br /><br />I wouldn't call this a bug, because IMO it is even more useful than the stock usage of the function.</span></code></div>
  </div>
 </div>
  <div class="note" id="112036">  <div class="votes">
    <div id="Vu112036">
    <a href="/manual/vote-note.php?id=112036&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112036">
    <a href="/manual/vote-note.php?id=112036&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112036" title="63% like this...">
    15
    </div>
  </div>
  <a href="#112036" class="name">
  <strong class="user"><em>gtisza at gmail dot com</em></strong></a><a class="genanchor" href="#112036"> &para;</a><div class="date" title="2013-04-25 10:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112036">
<div class="phpcode"><code><span class="html">You might expect range($n, $n-1) to be an empty array (as in e.g. Python) but actually PHP will assume a step of -1 if start is larger than end.</span></code></div>
  </div>
 </div>
  <div class="note" id="118224">  <div class="votes">
    <div id="Vu118224">
    <a href="/manual/vote-note.php?id=118224&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118224">
    <a href="/manual/vote-note.php?id=118224&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118224" title="63% like this...">
    10
    </div>
  </div>
  <a href="#118224" class="name">
  <strong class="user"><em>Alien426</em></strong></a><a class="genanchor" href="#118224"> &para;</a><div class="date" title="2015-10-29 02:09"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118224">
<div class="phpcode"><code><span class="html">The function will generate an array of integers even if your numerical parameters are enclosed in quotes.<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">( </span><span class="default">range</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">) ); </span><span class="comment">// outputs  array(2) { [0]=&gt; int(1) [1]=&gt; int(2) }<br /></span><span class="default">?&gt;<br /></span><br />An easy way to get an array of strings is to map strval() to the range:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">( </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strval'</span><span class="keyword">, </span><span class="default">range</span><span class="keyword">(</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">)) ); </span><span class="comment">// outputs  array(2) { [0]=&gt; string(1) "1" [1]=&gt; string(1) "2" }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119519">  <div class="votes">
    <div id="Vu119519">
    <a href="/manual/vote-note.php?id=119519&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119519">
    <a href="/manual/vote-note.php?id=119519&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119519" title="62% like this...">
    8
    </div>
  </div>
  <a href="#119519" class="name">
  <strong class="user"><em>luca.favorido ATgmailDOT com</em></strong></a><a class="genanchor" href="#119519"> &para;</a><div class="date" title="2016-06-28 07:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119519">
<div class="phpcode"><code><span class="html">The function "range" is very useful to get an array of characters as range('C','R') does.<br /><br />At work, I had to extend the function range($a,$b) to work in this special case: with two uppercase strings $a and $b, it should return all the possible strings between $a and $b.<br />This could be used for example to get the excel column indexes.<br />e.g. <span class="default">&lt;?php range</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">,</span><span class="string">'AD'</span><span class="keyword">) ==&gt; array(</span><span class="string">'A'</span><span class="keyword">,</span><span class="string">'B'</span><span class="keyword">,</span><span class="string">'C'</span><span class="keyword">,...,</span><span class="string">'Z'</span><span class="keyword">,</span><span class="string">'AA'</span><span class="keyword">,</span><span class="string">'AB'</span><span class="keyword">,</span><span class="string">'AC'</span><span class="keyword">,</span><span class="string">'AD'</span><span class="keyword">) </span><span class="default">?&gt;<br /></span><br />So I wrote the function getrange($min,$max) that exactly does this.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">getcolumnrange</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">,</span><span class="default">$max</span><span class="keyword">){<br />      </span><span class="default">$pointer</span><span class="keyword">=</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$min</span><span class="keyword">);<br />      </span><span class="default">$output</span><span class="keyword">=array();<br />      while(</span><span class="default">positionalcomparison</span><span class="keyword">(</span><span class="default">$pointer</span><span class="keyword">,</span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$max</span><span class="keyword">))&lt;=</span><span class="default">0</span><span class="keyword">){<br />         </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">,</span><span class="default">$pointer</span><span class="keyword">);<br />         </span><span class="default">$pointer</span><span class="keyword">++;<br />      }<br />      return </span><span class="default">$output</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">positionalcomparison</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">){<br />   </span><span class="default">$a1</span><span class="keyword">=</span><span class="default">stringtointvalue</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">); </span><span class="default">$b1</span><span class="keyword">=</span><span class="default">stringtointvalue</span><span class="keyword">(</span><span class="default">$b</span><span class="keyword">);<br />   if(</span><span class="default">$a1</span><span class="keyword">&gt;</span><span class="default">$b1</span><span class="keyword">)return </span><span class="default">1</span><span class="keyword">;<br />   else if(</span><span class="default">$a1</span><span class="keyword">&lt;</span><span class="default">$b1</span><span class="keyword">)return -</span><span class="default">1</span><span class="keyword">;<br />   else return </span><span class="default">0</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/*<br />* e.g. A=1 - B=2 - Z=26 - AA=27 - CZ=104 - DA=105 - ZZ=702 - AAA=703<br />*/<br /></span><span class="keyword">function </span><span class="default">stringtointvalue</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">){<br />   </span><span class="default">$amount</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />   </span><span class="default">$strarra</span><span class="keyword">=</span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));<br /><br />   for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);</span><span class="default">$i</span><span class="keyword">++){<br />      </span><span class="default">$amount</span><span class="keyword">+=(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$strarra</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">])-</span><span class="default">64</span><span class="keyword">)*</span><span class="default">pow</span><span class="keyword">(</span><span class="default">26</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">);<br />   }<br />   return </span><span class="default">$amount</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114180">  <div class="votes">
    <div id="Vu114180">
    <a href="/manual/vote-note.php?id=114180&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114180">
    <a href="/manual/vote-note.php?id=114180&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114180" title="63% like this...">
    5
    </div>
  </div>
  <a href="#114180" class="name">
  <strong class="user"><em>jazzduck AT gmail DOT com</em></strong></a><a class="genanchor" href="#114180"> &para;</a><div class="date" title="2014-01-21 08:32"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114180">
<div class="phpcode"><code><span class="html">Despite the line above that says that the $step value should be "given as a positive number," the range() function will in fact correctly handle reversed (decrementing) ranges. For example:<br /><br /><span class="default">&lt;?php print_r</span><span class="keyword">( </span><span class="default">range</span><span class="keyword">( </span><span class="default">24</span><span class="keyword">, </span><span class="default">20 </span><span class="keyword">) ); </span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; 24<br />    [1] =&gt; 23<br />    [2] =&gt; 22<br />    [3] =&gt; 21<br />    [4] =&gt; 20<br />)<br /><br /><span class="default">&lt;?php print_r</span><span class="keyword">( </span><span class="default">range</span><span class="keyword">( </span><span class="default">20</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, -</span><span class="default">3 </span><span class="keyword">) ); </span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; 20<br />    [1] =&gt; 17<br />    [2] =&gt; 14<br />    [3] =&gt; 11<br />)<br /><br />It will actually ignore the sign of the $step argument, and determine whether to increment or decrement based purely on whether $start &gt; $end or $end &gt; $start. For example:<br /><br /><span class="default">&lt;?php print_r</span><span class="keyword">( </span><span class="default">range</span><span class="keyword">( </span><span class="default">20</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">) ); </span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; 20<br />    [1] =&gt; 17<br />    [2] =&gt; 14<br />    [3] =&gt; 11<br />)<br /><br /><span class="default">&lt;?php print_r</span><span class="keyword">( </span><span class="default">range</span><span class="keyword">( </span><span class="default">11</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">, -</span><span class="default">3 </span><span class="keyword">) ); </span><span class="default">?&gt;<br /></span>Array<br />(<br />    [0] =&gt; 11<br />    [1] =&gt; 14<br />    [2] =&gt; 17<br />    [3] =&gt; 20<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="85331">  <div class="votes">
    <div id="Vu85331">
    <a href="/manual/vote-note.php?id=85331&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85331">
    <a href="/manual/vote-note.php?id=85331&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85331" title="59% like this...">
    17
    </div>
  </div>
  <a href="#85331" class="name">
  <strong class="user"><em>ThinkMedical at Gmail dot com</em></strong></a><a class="genanchor" href="#85331"> &para;</a><div class="date" title="2008-08-26 05:11"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85331">
<div class="phpcode"><code><span class="html">foreach(range()) whilst efficiant in other languages, such as python, it is not (compared to a for) in php*.<br /><br />php is a C-inspired language and thus for is entirely in-keeping with the lanuage aethetic to use it<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//efficiant<br /></span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$end</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">+=</span><span class="default">$step</span><span class="keyword">) <br />{<br />        </span><span class="comment">//do something with array <br /></span><span class="keyword">}<br /><br /></span><span class="comment">//inefficiant<br /></span><span class="keyword">foreach(</span><span class="default">range</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$step</span><span class="keyword">) as </span><span class="default">$i</span><span class="keyword">)<br />{<br />        </span><span class="comment">//do something with array <br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />That the officiant documentation doesnt mention the for loop is strange.<br /><br />Note however, that in PHP5 foreach is faster than for when iterating without incrementing a variable.<br /><br />* My tests using microtime and 100 000 iterations consistently (~10 times) show that for is 4x faster than foreach(range()).</span></code></div>
  </div>
 </div>
  <div class="note" id="75045">  <div class="votes">
    <div id="Vu75045">
    <a href="/manual/vote-note.php?id=75045&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75045">
    <a href="/manual/vote-note.php?id=75045&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75045" title="62% like this...">
    7
    </div>
  </div>
  <a href="#75045" class="name">
  <strong class="user"><em>chris at laflash dot org</em></strong></a><a class="genanchor" href="#75045"> &para;</a><div class="date" title="2007-05-09 04:47"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75045">
<div class="phpcode"><code><span class="html">Quick HTML menus with minimum and maximum sets of years:<br /><br /><span class="default">&lt;?php <br />    </span><span class="comment">/* <br />    ** Quick HTML menus with minimum and maximum sets of years.<br />    ** @author Chris Charlton &lt;chris@laflash.org&gt;<br />    ** @license FREE!<br />    */<br /><br />    // Years range setup<br />    </span><span class="default">$year_built_min </span><span class="keyword">= </span><span class="default">1900</span><span class="keyword">;<br />    </span><span class="default">$year_built_max </span><span class="keyword">= </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>&lt;select id="yearBuiltMin" size="1"&gt;<br />    <span class="default">&lt;?php </span><span class="comment">// Generate minimum years <br /><br />        </span><span class="keyword">foreach (</span><span class="default">range</span><span class="keyword">(</span><span class="default">$year_built_min</span><span class="keyword">, </span><span class="default">$year_built_max</span><span class="keyword">) as </span><span class="default">$year</span><span class="keyword">) { </span><span class="default">?&gt;<br /></span>        &lt;option value="<span class="default">&lt;?php </span><span class="keyword">echo(</span><span class="default">$year</span><span class="keyword">); </span><span class="default">?&gt;</span>"&gt;<span class="default">&lt;?php </span><span class="keyword">echo(</span><span class="default">$year</span><span class="keyword">); </span><span class="default">?&gt;</span>&lt;/option&gt;<br />        <span class="default">&lt;?php </span><span class="keyword">} </span><span class="default">?&gt;<br /></span>&lt;/select&gt;<br /><br />&lt;select id="yearBuiltMax" size="1"&gt;<br />      <span class="default">&lt;?php </span><span class="comment">// Generate max years <br /><br />        </span><span class="keyword">foreach (</span><span class="default">range</span><span class="keyword">(</span><span class="default">$year_built_max</span><span class="keyword">, </span><span class="default">$year_built_min</span><span class="keyword">) as </span><span class="default">$year</span><span class="keyword">) { </span><span class="default">?&gt;<br /></span>        &lt;option value="<span class="default">&lt;?php </span><span class="keyword">echo(</span><span class="default">$year</span><span class="keyword">); </span><span class="default">?&gt;</span>"&gt;<span class="default">&lt;?php </span><span class="keyword">echo(</span><span class="default">$year</span><span class="keyword">); </span><span class="default">?&gt;</span>&lt;/option&gt;<br />        <span class="default">&lt;?php </span><span class="keyword">} </span><span class="default">?&gt;<br /></span>&lt;/select&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="123925">  <div class="votes">
    <div id="Vu123925">
    <a href="/manual/vote-note.php?id=123925&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123925">
    <a href="/manual/vote-note.php?id=123925&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123925" title="60% like this...">
    4
    </div>
  </div>
  <a href="#123925" class="name">
  <strong class="user"><em>ccb_bc at hotmail dot com</em></strong></a><a class="genanchor" href="#123925"> &para;</a><div class="date" title="2019-06-10 05:45"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123925">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php <br />    </span><span class="keyword">function </span><span class="default">natural_prime_numbers</span><span class="keyword">(array </span><span class="default">$range</span><span class="keyword">, </span><span class="default">bool $print_info </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) : array {<br />        </span><span class="default">$start_time </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />        </span><span class="default">$primes_numbers </span><span class="keyword">= array();<br />        </span><span class="default">$print </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        </span><span class="default">$count_range  </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$range</span><span class="keyword">);<br />        foreach(</span><span class="default">$range </span><span class="keyword">as </span><span class="default">$number</span><span class="keyword">){<br />            </span><span class="default">$values_division_number </span><span class="keyword">= array();<br />            if(</span><span class="default">$number </span><span class="keyword">=== </span><span class="default">0 </span><span class="keyword">|| </span><span class="default">$number </span><span class="keyword">=== </span><span class="default">1 </span><span class="keyword">|| !</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">)){ </span><span class="comment">// eliminate 0, 1 and other no integer<br />                </span><span class="keyword">continue;<br />            }<br />            if(</span><span class="default">$number </span><span class="keyword">!= </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$number</span><span class="keyword">%</span><span class="default">2 </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">){ </span><span class="comment">// eliminate 2 and pairs numbers<br />                </span><span class="keyword">continue;<br />            }<br />            for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$number</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />                </span><span class="default">$resultado_divisao </span><span class="keyword">= </span><span class="default">$number </span><span class="keyword">/ </span><span class="default">$i</span><span class="keyword">;<br />                </span><span class="default">$values_division_number</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$resultado_divisao</span><span class="keyword">;<br /><br />                if(</span><span class="default">$count_range </span><span class="keyword">&lt;= </span><span class="default">20</span><span class="keyword">){ </span><span class="comment">// $count_range &lt;= 20 (+ performance)<br />                    </span><span class="default">$print </span><span class="keyword">.= </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                    </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'The number '</span><span class="keyword">.</span><span class="default">$number</span><span class="keyword">.</span><span class="string">' divided by the number '</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">' is equal to: '</span><span class="keyword">.(</span><span class="default">$number </span><span class="keyword">/ </span><span class="default">$i</span><span class="keyword">);<br />                    </span><span class="default">$print </span><span class="keyword">.= </span><span class="default">$info</span><span class="keyword">;<br />                    if(</span><span class="default">$i </span><span class="keyword">=== </span><span class="default">$number</span><span class="keyword">){<br />                        </span><span class="default">$print </span><span class="keyword">.= </span><span class="default">PHP_EOL</span><span class="keyword">;<br />                    }<br />                }                    <br /><br />                </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$values_division_number</span><span class="keyword">, function(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$index</span><span class="keyword">) use (&amp;</span><span class="default">$values_division_number</span><span class="keyword">, &amp;</span><span class="default">$number</span><span class="keyword">){ </span><span class="comment">// reference change values<br />                    // eliminate floats and others numbers not are equal 1 and own number<br />                    </span><span class="keyword">if(</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) &amp;&amp; </span><span class="default">$value </span><span class="keyword">!= </span><span class="default">$number </span><span class="keyword">&amp;&amp; </span><span class="default">$value </span><span class="keyword">&gt; </span><span class="default">1</span><span class="keyword">){<br />                        unset(</span><span class="default">$values_division_number</span><span class="keyword">[</span><span class="default">$index</span><span class="keyword">]);<br />                    }<br />                });<br /><br />                </span><span class="default">$values_division_number </span><span class="keyword">= </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$values_division_number</span><span class="keyword">); </span><span class="comment">// reindex array<br /><br />                // here we want only array with 2 indexes with the values 1 and own number (rule to a natural prime number)<br />                </span><span class="keyword">if(</span><span class="default">count</span><span class="keyword">(</span><span class="default">$values_division_number</span><span class="keyword">) === </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">$values_division_number</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="default">$number </span><span class="keyword">&amp;&amp; </span><span class="default">$values_division_number</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] === </span><span class="default">1</span><span class="keyword">){<br />                    </span><span class="default">$primes_numbers</span><span class="keyword">[</span><span class="default">$number</span><span class="keyword">] = </span><span class="default">$number</span><span class="keyword">;<br />                }<br /><br />            }<br />        }<br />        return array(<br />            </span><span class="string">'length_prime_numbers' </span><span class="keyword">=&gt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$primes_numbers</span><span class="keyword">),<br />            </span><span class="string">'prime_numbers' </span><span class="keyword">=&gt; </span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$primes_numbers</span><span class="keyword">),<br />            </span><span class="string">'print' </span><span class="keyword">=&gt; </span><span class="default">$print</span><span class="keyword">,<br />            </span><span class="string">'total_time_processing' </span><span class="keyword">=&gt; (</span><span class="default">time</span><span class="keyword">() - </span><span class="default">$start_time</span><span class="keyword">).</span><span class="string">' seconds.'</span><span class="keyword">,<br />        );<br />    }<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">natural_prime_numbers</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">11</span><span class="keyword">))); </span><span class="comment">// here the range() function ;-)<br /><br />    // Result:<br />    // array (size=3)<br />    //   'length_prime_numbers' =&gt; int 5<br />    //   'prime_numbers' =&gt; <br />    //     array (size=5)<br />    //       0 =&gt; int 2<br />    //       1 =&gt; int 3<br />    //       2 =&gt; int 5<br />    //       3 =&gt; int 7<br />    //       4 =&gt; int 11<br />    //   'print' =&gt; string '<br />    // O número 2 dividido pelo número 1 é igual a: 2<br />    // O número 2 dividido pelo número 2 é igual a: 1<br /><br />    // O número 3 dividido pelo número 1 é igual a: 3<br />    // O número 3 dividido pelo número 2 é igual a: 1.5<br />    // O número 3 dividido pelo número 3 é igual a: 1<br /><br />    // O número 5 dividido pelo número 1 é igual a: 5<br />    // O número 5 dividido pelo número 2 é igual a: 2.5<br />    // O número 5 dividido pelo número 3 é igual a: 1.6666666666667<br />    // O número 5 dividido pelo número 4 é igual a: 1.25<br />    // O número 5 dividido pelo '...<br /><br />    // **************************** //<br />    //<br />    // * Remember that the function is recursive, that is: a range of 5000 takes more than 1 minute on a processor Intel® Core™ i5-8250U (3.40 GHz).<br />    //<br />    // **************************** //<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109642">  <div class="votes">
    <div id="Vu109642">
    <a href="/manual/vote-note.php?id=109642&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109642">
    <a href="/manual/vote-note.php?id=109642&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109642" title="59% like this...">
    8
    </div>
  </div>
  <a href="#109642" class="name">
  <strong class="user"><em>ktamas77 at gmail dot com</em></strong></a><a class="genanchor" href="#109642"> &para;</a><div class="date" title="2012-08-03 10:59"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109642">
<div class="phpcode"><code><span class="html">if you need zero padding, string prefixes or any other masks, then a simple combination of array_map, inline functions and sprintf is your friend.<br /><br /><span class="default">&lt;?php<br /><br />$a </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$n</span><span class="keyword">) { return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'sample_%03d'</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">); }, </span><span class="default">range</span><span class="keyword">(</span><span class="default">50</span><span class="keyword">, </span><span class="default">59</span><span class="keyword">) );<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Will result:<br /><br />Array<br />(<br />    [0] =&gt; sample_050<br />    [1] =&gt; sample_051<br />    [2] =&gt; sample_052<br />    [3] =&gt; sample_053<br />    [4] =&gt; sample_054<br />    [5] =&gt; sample_055<br />    [6] =&gt; sample_056<br />    [7] =&gt; sample_057<br />    [8] =&gt; sample_058<br />    [9] =&gt; sample_059<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="73579">  <div class="votes">
    <div id="Vu73579">
    <a href="/manual/vote-note.php?id=73579&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73579">
    <a href="/manual/vote-note.php?id=73579&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73579" title="60% like this...">
    6
    </div>
  </div>
  <a href="#73579" class="name">
  <strong class="user"><em>m0sh3 at hotmail dot com</em></strong></a><a class="genanchor" href="#73579"> &para;</a><div class="date" title="2007-03-01 05:46"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73579">
<div class="phpcode"><code><span class="html">Here's how i use it to check if array is associative or not:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)===</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">sizeof</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">)) {<br /></span><span class="comment">// not associative array<br /><br /></span><span class="keyword">} else {<br /></span><span class="comment">// associative array <br /><br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112362">  <div class="votes">
    <div id="Vu112362">
    <a href="/manual/vote-note.php?id=112362&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112362">
    <a href="/manual/vote-note.php?id=112362&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112362" title="57% like this...">
    3
    </div>
  </div>
  <a href="#112362" class="name">
  <strong class="user"><em>Ray.Paseur often uses Gmail</em></strong></a><a class="genanchor" href="#112362"> &para;</a><div class="date" title="2013-06-06 03:16"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112362">
<div class="phpcode"><code><span class="html">Interestingly, these two statements produce identical 26-character alphabet arrays.<br /><br /><span class="default">&lt;?php<br />$arr </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">,  </span><span class="string">'Z'</span><span class="keyword">);<br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'AA'</span><span class="keyword">, </span><span class="string">'ZZ'</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118659">  <div class="votes">
    <div id="Vu118659">
    <a href="/manual/vote-note.php?id=118659&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118659">
    <a href="/manual/vote-note.php?id=118659&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118659" title="57% like this...">
    2
    </div>
  </div>
  <a href="#118659" class="name">
  <strong class="user"><em>moficer at host dot sk</em></strong></a><a class="genanchor" href="#118659"> &para;</a><div class="date" title="2016-01-15 03:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118659">
<div class="phpcode"><code><span class="html">php 5.6.16<br /><br /><span class="default">&lt;?php<br />var_export</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(</span><span class="string">'Z'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">));<br /><br /></span><span class="comment">/*<br />array (<br />  0 =&gt; 'Z',<br />  1 =&gt; '[',<br />  2 =&gt; '\\',<br />  3 =&gt; ']',<br />  4 =&gt; '^',<br />  5 =&gt; '_',<br />  6 =&gt; '`',<br />  7 =&gt; 'a',<br />)<br /> */</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108767">  <div class="votes">
    <div id="Vu108767">
    <a href="/manual/vote-note.php?id=108767&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108767">
    <a href="/manual/vote-note.php?id=108767&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108767" title="55% like this...">
    9
    </div>
  </div>
  <a href="#108767" class="name">
  <strong class="user"><em>me at phpscott dot com</em></strong></a><a class="genanchor" href="#108767"> &para;</a><div class="date" title="2012-05-23 05:37"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108767">
<div class="phpcode"><code><span class="html">So, I needed a quick and dirty way to create a dropdown select for hours, minutes and seconds using 2 digit formatting, and to create those arrays of data, I combined range with array merge..
<br />
<br /><span class="default">&lt;?php
<br />$prepend </span><span class="keyword">= array(</span><span class="string">'00'</span><span class="keyword">,</span><span class="string">'01'</span><span class="keyword">,</span><span class="string">'02'</span><span class="keyword">,</span><span class="string">'03'</span><span class="keyword">,</span><span class="string">'04'</span><span class="keyword">,</span><span class="string">'05'</span><span class="keyword">,</span><span class="string">'06'</span><span class="keyword">,</span><span class="string">'07'</span><span class="keyword">,</span><span class="string">'08'</span><span class="keyword">,</span><span class="string">'09'</span><span class="keyword">);
<br /></span><span class="default">$hours     </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$prepend</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">23</span><span class="keyword">));
<br /></span><span class="default">$minutes     </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$prepend</span><span class="keyword">,</span><span class="default">range</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">59</span><span class="keyword">));
<br /></span><span class="default">$seconds     </span><span class="keyword">= </span><span class="default">$minutes</span><span class="keyword">;
<br /></span><span class="default">?&gt;
<br /></span>
<br />Super simple.</span></code></div>
  </div>
 </div>
  <div class="note" id="90605">  <div class="votes">
    <div id="Vu90605">
    <a href="/manual/vote-note.php?id=90605&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90605">
    <a href="/manual/vote-note.php?id=90605&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90605" title="57% like this...">
    3
    </div>
  </div>
  <a href="#90605" class="name">
  <strong class="user"><em>jay at NOspam dot myd3 dot com</em></strong></a><a class="genanchor" href="#90605"> &para;</a><div class="date" title="2009-04-29 05:54"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90605">
<div class="phpcode"><code><span class="html">This is a modified version of thomas' range_string() function. It's simpler, cleaner, and more robust, but it lacks the advanced features his function had, hopefully it will be of assitance to someone.<br /><br />Examples:<br /><br />    input: "1, 2, 3, 4, 5, 6" --&gt; output: 1, 2, 3, 4, 5, 6<br />    input: "1-6" --&gt; output: 1, 2, 3, 4, 5, 6<br />    input: "1-6" --&gt; output: 1, 2, 3, 4, 5, 6<br />    input: "1 - -6" --&gt; output: 1, 2, 3, 4, 5, 6<br />    input: "0 - 0" --&gt; output: 0<br />    input: "1, 4-6, 2" --&gt; output: 1, 2, 4, 5, 6<br />    input: "6,3-1" --&gt; output: 1, 2, 3, 6<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">'RANGE_ARRAY_SORT'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'RANGE_ARRAY'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'RANGE_STRING_SORT'</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">define</span><span class="keyword">(</span><span class="string">'RANGE_STRING'</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">);<br /><br />function </span><span class="default">range_string</span><span class="keyword">(</span><span class="default">$range_str</span><span class="keyword">, </span><span class="default">$output_type </span><span class="keyword">= </span><span class="default">RANGE_ARRAY_SORT</span><span class="keyword">)<br />{<br />    </span><span class="comment">// Remove spaces and nother non-essential characters<br />    </span><span class="default">$find</span><span class="keyword">[]    = </span><span class="string">"/[^\d,\-]/"</span><span class="keyword">;<br />    </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">""</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Remove duplicate hyphens<br />    </span><span class="default">$find</span><span class="keyword">[]    = </span><span class="string">"/\-+/"</span><span class="keyword">;<br />    </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">"-"</span><span class="keyword">;<br />    <br />    </span><span class="comment">// Remove duplicate commas<br />    </span><span class="default">$find</span><span class="keyword">[]    = </span><span class="string">"/\,+/"</span><span class="keyword">;<br />    </span><span class="default">$replace</span><span class="keyword">[] = </span><span class="string">","</span><span class="keyword">;<br />    <br />    </span><span class="default">$range_str </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$find</span><span class="keyword">, </span><span class="default">$replace</span><span class="keyword">, </span><span class="default">$range_str</span><span class="keyword">);<br /><br />    </span><span class="comment">// Remove any commas or hypens from the end of the string<br />    </span><span class="default">$range_str </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$range_str</span><span class="keyword">,</span><span class="string">",-"</span><span class="keyword">);<br />    <br />    </span><span class="default">$range_out </span><span class="keyword">= array();<br />    </span><span class="default">$ranges    </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">, </span><span class="default">$range_str</span><span class="keyword">);<br />    <br />    foreach(</span><span class="default">$ranges </span><span class="keyword">as </span><span class="default">$range</span><span class="keyword">)<br />    {<br />        <br />        if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$range</span><span class="keyword">) || </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$range</span><span class="keyword">) == </span><span class="default">1</span><span class="keyword">)<br />        {<br />            </span><span class="comment">// Just a number; add it to the list.<br />            </span><span class="default">$range_out</span><span class="keyword">[] = (int) </span><span class="default">$range</span><span class="keyword">;<br />        }<br />        else if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$range</span><span class="keyword">))<br />        {<br />            <br />            </span><span class="comment">// Is probably a range of values.<br />           </span><span class="default">$range_exp </span><span class="keyword">= </span><span class="default">preg_split</span><span class="keyword">(</span><span class="string">"/(\D)/"</span><span class="keyword">,</span><span class="default">$range</span><span class="keyword">,-</span><span class="default">1</span><span class="keyword">,</span><span class="default">PREG_SPLIT_DELIM_CAPTURE</span><span class="keyword">);<br />        <br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$range_exp</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            </span><span class="default">$end   </span><span class="keyword">= </span><span class="default">$range_exp</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        <br />            if(</span><span class="default">$start </span><span class="keyword">&gt; </span><span class="default">$end</span><span class="keyword">)<br />            {<br />                for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&gt;= </span><span class="default">$end</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">-= </span><span class="default">1</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$range_out</span><span class="keyword">[] = (int) </span><span class="default">$i</span><span class="keyword">;<br />                }<br />            }<br />            else<br />            {<br />                for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">$end</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">1</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$range_out</span><span class="keyword">[] = (int) </span><span class="default">$i</span><span class="keyword">;<br />                }<br />            }<br />            <br />        }<br />    }<br />    <br />    switch (</span><span class="default">$output_type</span><span class="keyword">) {<br />        case </span><span class="default">RANGE_ARRAY_SORT</span><span class="keyword">:<br />            </span><span class="default">$range_out </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$range_out</span><span class="keyword">);<br />            </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$range_out</span><span class="keyword">);<br />            <br />        case </span><span class="default">RANGE_ARRAY</span><span class="keyword">:<br />            return </span><span class="default">$range_out</span><span class="keyword">;<br />            break;<br />            <br />        case </span><span class="default">RANGE_STRING_SORT</span><span class="keyword">:<br />            </span><span class="default">$range_out </span><span class="keyword">= </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$range_out</span><span class="keyword">);<br />            </span><span class="default">sort</span><span class="keyword">(</span><span class="default">$range_out</span><span class="keyword">);<br />            <br />        case </span><span class="default">RANGE_STRING</span><span class="keyword">:<br />        <br />        default:<br />            return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">", "</span><span class="keyword">, </span><span class="default">$range_out</span><span class="keyword">);<br />            break;<br />    }<br />}<br /><br /></span><span class="comment">// Sample Usage:<br /></span><span class="default">$range </span><span class="keyword">= </span><span class="default">range_string</span><span class="keyword">(</span><span class="string">"6, 3-1"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82104">  <div class="votes">
    <div id="Vu82104">
    <a href="/manual/vote-note.php?id=82104&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82104">
    <a href="/manual/vote-note.php?id=82104&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82104" title="57% like this...">
    5
    </div>
  </div>
  <a href="#82104" class="name">
  <strong class="user"><em>captvanhalen at gmail dot com</em></strong></a><a class="genanchor" href="#82104"> &para;</a><div class="date" title="2008-03-27 10:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82104">
<div class="phpcode"><code><span class="html">Here is a home rolled range() function that uses the step feature for those unfortunate souls who cannot use PHP5:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_range</span><span class="keyword">( </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$step </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {<br /><br />    </span><span class="default">$range </span><span class="keyword">= array();<br /><br />    foreach (</span><span class="default">range</span><span class="keyword">( </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">) as </span><span class="default">$index</span><span class="keyword">) {<br /><br />        if (! ((</span><span class="default">$index </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">) % </span><span class="default">$step</span><span class="keyword">) ) {<br />            </span><span class="default">$range</span><span class="keyword">[] = </span><span class="default">$index</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">$range</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="107440">  <div class="votes">
    <div id="Vu107440">
    <a href="/manual/vote-note.php?id=107440&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107440">
    <a href="/manual/vote-note.php?id=107440&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107440" title="55% like this...">
    5
    </div>
  </div>
  <a href="#107440" class="name">
  <strong class="user"><em>dries at volta dot be</em></strong></a><a class="genanchor" href="#107440"> &para;</a><div class="date" title="2012-02-09 11:30"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107440">
<div class="phpcode"><code><span class="html">Ever wanted to generate an array with a range of column names for use in Excel file related parsing?<br />I've wrote a function that starts at the A column and adds column names up until the column you specified.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * This function creates an array with column names up until the column<br /> * you specified.<br />*/<br /></span><span class="keyword">function </span><span class="default">createColumnsArray</span><span class="keyword">(</span><span class="default">$end_column</span><span class="keyword">, </span><span class="default">$first_letters </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)<br />{<br />  </span><span class="default">$columns </span><span class="keyword">= array();<br />  </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$end_column</span><span class="keyword">);<br />  </span><span class="default">$letters </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Z'</span><span class="keyword">);<br /><br />  </span><span class="comment">// Iterate over 26 letters.<br />  </span><span class="keyword">foreach (</span><span class="default">$letters </span><span class="keyword">as </span><span class="default">$letter</span><span class="keyword">) {<br />      </span><span class="comment">// Paste the $first_letters before the next.<br />      </span><span class="default">$column </span><span class="keyword">= </span><span class="default">$first_letters </span><span class="keyword">. </span><span class="default">$letter</span><span class="keyword">;<br /><br />      </span><span class="comment">// Add the column to the final array.<br />      </span><span class="default">$columns</span><span class="keyword">[] = </span><span class="default">$column</span><span class="keyword">;<br /><br />      </span><span class="comment">// If it was the end column that was added, return the columns.<br />      </span><span class="keyword">if (</span><span class="default">$column </span><span class="keyword">== </span><span class="default">$end_column</span><span class="keyword">)<br />          return </span><span class="default">$columns</span><span class="keyword">;<br />  }<br /><br />  </span><span class="comment">// Add the column children.<br />  </span><span class="keyword">foreach (</span><span class="default">$columns </span><span class="keyword">as </span><span class="default">$column</span><span class="keyword">) {<br />      </span><span class="comment">// Don't itterate if the $end_column was already set in a previous itteration.<br />      // Stop iterating if you've reached the maximum character length.<br />      </span><span class="keyword">if (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$end_column</span><span class="keyword">, </span><span class="default">$columns</span><span class="keyword">) &amp;&amp; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$column</span><span class="keyword">) &lt; </span><span class="default">$length</span><span class="keyword">) {<br />          </span><span class="default">$new_columns </span><span class="keyword">= </span><span class="default">createColumnsArray</span><span class="keyword">(</span><span class="default">$end_column</span><span class="keyword">, </span><span class="default">$column</span><span class="keyword">);<br />          </span><span class="comment">// Merge the new columns which were created with the final columns array.<br />          </span><span class="default">$columns </span><span class="keyword">= </span><span class="default">array_merge</span><span class="keyword">(</span><span class="default">$columns</span><span class="keyword">, </span><span class="default">$new_columns</span><span class="keyword">);<br />      }<br />  }<br /><br />  return </span><span class="default">$columns</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Return an array with all column names from A until and with BI.<br /></span><span class="default">createColumnsArray</span><span class="keyword">(</span><span class="string">'BI'</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113024">  <div class="votes">
    <div id="Vu113024">
    <a href="/manual/vote-note.php?id=113024&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113024">
    <a href="/manual/vote-note.php?id=113024&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113024" title="55% like this...">
    2
    </div>
  </div>
  <a href="#113024" class="name">
  <strong class="user"><em>krdr dot mft at gmail dot com</em></strong></a><a class="genanchor" href="#113024"> &para;</a><div class="date" title="2013-08-19 09:48"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113024">
<div class="phpcode"><code><span class="html">I've been introduced with range() function not so long ago, and I found that examples about it is somewhat wrong, even inefficient:<br /><br /><span class="default">&lt;?php<br />$o </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); <br />foreach(</span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10000</span><span class="keyword">) as </span><span class="default">$val</span><span class="keyword">) { <br />    </span><span class="default">$o </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">; <br />} <br /></span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">; <br />echo </span><span class="string">'rangein: '</span><span class="keyword">.</span><span class="default">$time</span><span class="keyword">.</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">; <br /><br /></span><span class="default">$o </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br /></span><span class="default">$time_start </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); <br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10000</span><span class="keyword">);<br />foreach(</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">) { <br />    </span><span class="default">$o </span><span class="keyword">.= </span><span class="default">$val</span><span class="keyword">;  <br />} <br /></span><span class="default">$time_end </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$time </span><span class="keyword">= </span><span class="default">$time_end </span><span class="keyword">- </span><span class="default">$time_start</span><span class="keyword">; <br />echo </span><span class="string">'rangeout: '</span><span class="keyword">.</span><span class="default">$time</span><span class="keyword">.</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">; <br /><br /></span><span class="default">?&gt;<br /></span><br />Which gives results:<br /><br />rangein: 0.0025348663330078<br />rangeout: 0.0019199848175049<br /><br />In some cases difference is even bigger and proportional to the range generated. I suppose that results of range() are cached/hashed.<br /><br />Note: execution order does affects execution times, but difference still exists</span></code></div>
  </div>
 </div>
  <div class="note" id="118692">  <div class="votes">
    <div id="Vu118692">
    <a href="/manual/vote-note.php?id=118692&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118692">
    <a href="/manual/vote-note.php?id=118692&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118692" title="52% like this...">
    1
    </div>
  </div>
  <a href="#118692" class="name">
  <strong class="user"><em>qz</em></strong></a><a class="genanchor" href="#118692"> &para;</a><div class="date" title="2016-01-19 11:58"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118692">
<div class="phpcode"><code><span class="html">If you're looking to fill an array to get a hash with 0-9 numerical values, using<br />range(0,9);<br />is a faster solution compared to <br />array_fill(0, 10, '');</span></code></div>
  </div>
 </div>
  <div class="note" id="70989">  <div class="votes">
    <div id="Vu70989">
    <a href="/manual/vote-note.php?id=70989&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70989">
    <a href="/manual/vote-note.php?id=70989&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70989" title="53% like this...">
    1
    </div>
  </div>
  <a href="#70989" class="name">
  <strong class="user"><em>manuel at levante dot de</em></strong></a><a class="genanchor" href="#70989"> &para;</a><div class="date" title="2006-11-07 05:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70989">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">srange </span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">) {<br />  </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/"</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">);<br />  </span><span class="default">$n </span><span class="keyword">= array ();<br />  foreach (</span><span class="default">$a</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {<br />    </span><span class="default">$n  </span><span class="keyword">= </span><span class="default">array_merge </span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">range </span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, (empty(</span><span class="default">$a</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">])?</span><span class="default">$v</span><span class="keyword">:</span><span class="default">$a</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="default">$k</span><span class="keyword">])));<br />  }<br />  return (</span><span class="default">$n</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$s </span><span class="keyword">= </span><span class="string">'1-4 6-7 9-10'</span><span class="keyword">;<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">srange</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Return:<br />Array<br />(<br />    [0] =&gt; 1<br />    [1] =&gt; 2<br />    [2] =&gt; 3<br />    [3] =&gt; 4<br />    [4] =&gt; 6<br />    [5] =&gt; 7<br />    [6] =&gt; 9<br />    [7] =&gt; 10<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="128888">  <div class="votes">
    <div id="Vu128888">
    <a href="/manual/vote-note.php?id=128888&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128888">
    <a href="/manual/vote-note.php?id=128888&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128888" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128888" class="name">
  <strong class="user"><em>VivienG</em></strong></a><a class="genanchor" href="#128888"> &para;</a><div class="date" title="2023-09-15 12:25"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128888">
<div class="phpcode"><code><span class="html">They forgot to say something.<br />If the ending value not encounter the last sequence, the function return false.<br />In other words : <br />Given a int $n, if ( $start + $n * $step ) &lt; $end and  ( $start + ( $n + 1 ) * $step ) &gt; $end, the function doen't give the maximum possible range, it returns a boolean.<br />So the last range number HAVE TO BE the end number.</span></code></div>
  </div>
 </div>
  <div class="note" id="126749">  <div class="votes">
    <div id="Vu126749">
    <a href="/manual/vote-note.php?id=126749&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126749">
    <a href="/manual/vote-note.php?id=126749&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126749" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126749" class="name">
  <strong class="user"><em>mohammed dot hussein dot mahmoud at gmail dot com</em></strong></a><a class="genanchor" href="#126749"> &para;</a><div class="date" title="2022-01-04 06:47"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126749">
<div class="phpcode"><code><span class="html">You could use negative numbers in place of the `step` parameter. You need to make sure that the `start` is bigger than `end`. Note that range() function in php generates the range inclusive, i.e. it also includes the `end` parameter and not just up to it but not including it like most other languages.<br />The following snippet of code should explain what I mean about negative steps:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// 100, 90, 80, 70, 60, 50, 40, 30, 20, 10, 0<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, -</span><span class="default">10</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />What happens basically is that the range function does not really care about what is bigger or smaller, it just adds the step to the start and appends that to the a temp result variable as long as it did not reach the end param value. In this case, adding negative numbers is like minus (computers do that for 2's complement under the hood.) This will cause the number to go from 100 to 90 and then the function will check if 90 reached 0 yet. Since it wouldn't have done that, it will keep adding -step (-10 in that case) to the latest result (i.e. 90) and so on and so forth.<br /><br />Since range() is said to be better and faster than array_fill() I believe it was important for me to try it out and actually post this note on the official documentation just to make sure people can use this.</span></code></div>
  </div>
 </div>
  <div class="note" id="114938">  <div class="votes">
    <div id="Vu114938">
    <a href="/manual/vote-note.php?id=114938&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114938">
    <a href="/manual/vote-note.php?id=114938&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114938" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114938" class="name">
  <strong class="user"><em>lsblsb at gmx dot de</em></strong></a><a class="genanchor" href="#114938"> &para;</a><div class="date" title="2014-04-30 03:09"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114938">
<div class="phpcode"><code><span class="html">I needed a function, that creates a letter range with arbitrary length.<br />You specify via the $length parameter, how many entries you need.<br />Logic is analog to the logic of the column-titles in a calc-sheet.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br />  * create a letter range with arbitrary length<br />  * @param int $length<br />  * @return array<br />  */<br /></span><span class="keyword">function </span><span class="default">createLetterRange</span><span class="keyword">(</span><span class="default">$length</span><span class="keyword">)<br />{<br />    </span><span class="default">$range </span><span class="keyword">= array();<br />    </span><span class="default">$letters </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">, </span><span class="string">'Z'</span><span class="keyword">);<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$position </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">26</span><span class="keyword">;<br />        foreach(</span><span class="default">$letters </span><span class="keyword">as </span><span class="default">$ii </span><span class="keyword">=&gt; </span><span class="default">$letter</span><span class="keyword">)<br />        {<br />            </span><span class="default">$position</span><span class="keyword">++;<br />            if(</span><span class="default">$position </span><span class="keyword">&lt;= </span><span class="default">$length</span><span class="keyword">)<br />                </span><span class="default">$range</span><span class="keyword">[] = (</span><span class="default">$position </span><span class="keyword">&gt; </span><span class="default">26 </span><span class="keyword">? </span><span class="default">$range</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] : </span><span class="string">''</span><span class="keyword">).</span><span class="default">$letter</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$range</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52644">  <div class="votes">
    <div id="Vu52644">
    <a href="/manual/vote-note.php?id=52644&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52644">
    <a href="/manual/vote-note.php?id=52644&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52644" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52644" class="name">
  <strong class="user"><em>derek at php dot net</em></strong></a><a class="genanchor" href="#52644"> &para;</a><div class="date" title="2005-05-08 06:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52644">
<div class="phpcode"><code><span class="html">This should emulate range() a little better.
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">range_wroar</span><span class="keyword">(</span><span class="default">$low</span><span class="keyword">, </span><span class="default">$high</span><span class="keyword">, </span><span class="default">$step </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {
<br />    </span><span class="default">$arr </span><span class="keyword">= array();
<br />    </span><span class="default">$step </span><span class="keyword">= (</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)?</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">):</span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$sign </span><span class="keyword">= (</span><span class="default">$low</span><span class="keyword">&lt;=</span><span class="default">$high</span><span class="keyword">)?</span><span class="default">1</span><span class="keyword">:-</span><span class="default">1</span><span class="keyword">;
<br />    if(</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$low</span><span class="keyword">) &amp;&amp; </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$high</span><span class="keyword">)) {
<br />        </span><span class="comment">//numeric sequence
<br />        </span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= (float)</span><span class="default">$low</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$sign </span><span class="keyword">&lt;= </span><span class="default">$high</span><span class="keyword">*</span><span class="default">$sign</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$step</span><span class="keyword">*</span><span class="default">$sign</span><span class="keyword">)
<br />            </span><span class="default">$arr</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;
<br />    }    else    {
<br />        </span><span class="comment">//character sequence
<br />        </span><span class="keyword">if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$low</span><span class="keyword">)) 
<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">range</span><span class="keyword">(</span><span class="default">$low</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$step</span><span class="keyword">);
<br />        if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$high</span><span class="keyword">))
<br />            return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">range</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">$high</span><span class="keyword">, </span><span class="default">$step</span><span class="keyword">);
<br />        </span><span class="default">$low </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$low</span><span class="keyword">);
<br />        </span><span class="default">$high </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$high</span><span class="keyword">);
<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$low</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$sign </span><span class="keyword">&lt;= </span><span class="default">$high</span><span class="keyword">*</span><span class="default">$sign</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$step</span><span class="keyword">*</span><span class="default">$sign</span><span class="keyword">) {
<br />                
<br />            </span><span class="default">$arr</span><span class="keyword">[] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);
<br />        }
<br />    }
<br />    return </span><span class="default">$arr</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113327">  <div class="votes">
    <div id="Vu113327">
    <a href="/manual/vote-note.php?id=113327&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113327">
    <a href="/manual/vote-note.php?id=113327&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113327" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#113327" class="name">
  <strong class="user"><em>pyetrosafe at gmail dot com</em></strong></a><a class="genanchor" href="#113327"> &para;</a><div class="date" title="2013-09-27 01:36"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113327">
<div class="phpcode"><code><span class="html">To create a simple array or a multidimensional array with defined size and null values​​, use this expression:<br /><br /><span class="default">&lt;?php<br /><br />$SimpleArray </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$n</span><span class="keyword">) { return </span><span class="default">null</span><span class="keyword">; }, </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) );<br /></span><span class="default">$MultiArray </span><span class="keyword">= </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$n</span><span class="keyword">) { return </span><span class="default">array_map</span><span class="keyword">(function(</span><span class="default">$n</span><span class="keyword">) { return </span><span class="default">null</span><span class="keyword">; }, </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">) ); }, </span><span class="default">range</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) );<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$SimpleArray</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$MultiArray</span><span class="keyword">);<br /><br /></span><span class="comment">// And will print:<br /></span><span class="default">?&gt;<br /></span>&gt;&gt;$SimpleArray<br />array(3) {<br />  [0]=&gt;  NULL<br />  [1]=&gt;  NULL<br />  [2]=&gt;  NULL<br />}<br /><br />&gt;&gt;$MultiArray<br />array(3) {<br />  [0]=&gt;  array(2) {<br />    [0]=&gt;    NULL<br />    [1]=&gt;    NULL<br />  }<br />  [1]=&gt;  array(2) {<br />    [0]=&gt;    NULL<br />    [1]=&gt;    NULL<br />  }<br />  [2]=&gt;  array(2) {<br />    [0]=&gt;    NULL<br />    [1]=&gt;    NULL<br />  }<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="56023">  <div class="votes">
    <div id="Vu56023">
    <a href="/manual/vote-note.php?id=56023&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56023">
    <a href="/manual/vote-note.php?id=56023&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56023" title="44% like this...">
    -2
    </div>
  </div>
  <a href="#56023" class="name">
  <strong class="user"><em>emory underscore smith at hotmail</em></strong></a><a class="genanchor" href="#56023"> &para;</a><div class="date" title="2005-08-20 07:53"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56023">
<div class="phpcode"><code><span class="html">since its not stated explicitly above, thought id point out that you arent limited to using integers.<br /><br />however, be careful when doing so, as you might not get the range you expect!<br /><br />to illustrate:<br /><br /><span class="default">&lt;?php<br />$am </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">500</span><span class="keyword">,</span><span class="default">1600</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /></span><span class="default">$fm </span><span class="keyword">= </span><span class="default">range</span><span class="keyword">(</span><span class="default">88.1</span><span class="keyword">,</span><span class="default">107.9</span><span class="keyword">,</span><span class="default">.2</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$am</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$fm</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />print_r($am) yields the expected result:<br />             <br />Array<br />(<br />    [0] =&gt; 500<br />    [1] =&gt; 510<br />    [2] =&gt; 520<br />    ...<br />    [109] =&gt; 1590<br />    [110] =&gt; 1600<br />)<br /><br />print_r($fm), however, falls a bit (1%) short:<br /><br />Array<br />(<br />    [0] =&gt; 88.1<br />    [1] =&gt; 88.3<br />    [2] =&gt; 88.5<br />    ...<br />    [97] =&gt; 107.5<br />    [98] =&gt; 107.7<br />)<br />    <br />so, if you want to use a non-integral step size params for numeric ranges, be sure to account for fp representation accuracy and error accumulation; a step size of something like pi or 1/10 could spell disaster for a large range. if in doubt, use integral steps and divide ... something like <span class="default">&lt;?php range</span><span class="keyword">(</span><span class="default">88.1</span><span class="keyword">,</span><span class="default">108</span><span class="keyword">,</span><span class="default">.2</span><span class="keyword">) </span><span class="default">?&gt;</span> might work to recover 107.9, but would not be scalable like, say <span class="default">&lt;?php array_map</span><span class="keyword">(</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$x'</span><span class="keyword">,</span><span class="string">'return $x/10;'</span><span class="keyword">),</span><span class="default">range</span><span class="keyword">(</span><span class="default">881</span><span class="keyword">,</span><span class="default">1079</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">)) </span><span class="default">?&gt;</span>.<br /><br />-emory</span></code></div>
  </div>
 </div>
  <div class="note" id="60479">  <div class="votes">
    <div id="Vu60479">
    <a href="/manual/vote-note.php?id=60479&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60479">
    <a href="/manual/vote-note.php?id=60479&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60479" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#60479" class="name">
  <strong class="user"><em>subscription101 at hotmail dot com</em></strong></a><a class="genanchor" href="#60479"> &para;</a><div class="date" title="2006-01-08 06:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60479">
<div class="phpcode"><code><span class="html">A much simpler way of creating a range of even numbers is by starting with an even number:<br /><br /><span class="default">&lt;?php<br /><br />    range</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="45913">  <div class="votes">
    <div id="Vu45913">
    <a href="/manual/vote-note.php?id=45913&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45913">
    <a href="/manual/vote-note.php?id=45913&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45913" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#45913" class="name">
  <strong class="user"><em>j dot gizmo at aon dot at</em></strong></a><a class="genanchor" href="#45913"> &para;</a><div class="date" title="2004-09-23 04:23"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45913">
<div class="phpcode"><code><span class="html">i figured i'd add some more functionality to the myRange() functions below.<br />now you can, besides giving a $step parameter,<br />1. count backwards<br />2. count with letters<br />3. give whatever parameter you want, there's nothing (i know of) that will cause an endless loop (try a negative $step for the previous function....)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">myRange</span><span class="keyword">(</span><span class="default">$num1</span><span class="keyword">, </span><span class="default">$num2</span><span class="keyword">, </span><span class="default">$step</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">)<br />{<br />    if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$num1</span><span class="keyword">) &amp;&amp; </span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$num2</span><span class="keyword">))<br />    {<br />        </span><span class="comment">//we have a numeric range<br />        </span><span class="default">$step </span><span class="keyword">= ( </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">)&gt;</span><span class="default">0 </span><span class="keyword">? </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">) : </span><span class="default">1 </span><span class="keyword">); </span><span class="comment">//make $step positive<br />        </span><span class="default">$dir </span><span class="keyword">= (</span><span class="default">$num1</span><span class="keyword">&lt;=</span><span class="default">$num2 </span><span class="keyword">? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">); </span><span class="comment">//get the direction<br />        </span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= (float)</span><span class="default">$num1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$dir </span><span class="keyword">&lt;= </span><span class="default">$num2</span><span class="keyword">*</span><span class="default">$dir</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$step</span><span class="keyword">*</span><span class="default">$dir</span><span class="keyword">)<br />        {<br />            </span><span class="default">$temp</span><span class="keyword">[] = </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br />    else<br />    {<br />        </span><span class="comment">//we have a character range<br />        </span><span class="default">$num1</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">((string)</span><span class="default">$num1</span><span class="keyword">); </span><span class="comment">//convert to ascii value<br />        </span><span class="default">$num2</span><span class="keyword">=</span><span class="default">ord</span><span class="keyword">((string)</span><span class="default">$num2</span><span class="keyword">);<br />        </span><span class="default">$step </span><span class="keyword">= ( </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">)&gt;</span><span class="default">0 </span><span class="keyword">? </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">) : </span><span class="default">1 </span><span class="keyword">); </span><span class="comment">//make $step positive<br />        </span><span class="default">$dir </span><span class="keyword">= (</span><span class="default">$num1</span><span class="keyword">&lt;=</span><span class="default">$num2 </span><span class="keyword">? </span><span class="default">1 </span><span class="keyword">: -</span><span class="default">1</span><span class="keyword">); </span><span class="comment">//get direction<br />        </span><span class="keyword">for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">$num1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$dir </span><span class="keyword">&lt;= </span><span class="default">$num2</span><span class="keyword">*</span><span class="default">$dir</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">+= </span><span class="default">$step</span><span class="keyword">*</span><span class="default">$dir</span><span class="keyword">)<br />        {<br />            </span><span class="default">$temp</span><span class="keyword">[] = </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">);<br />        }<br />    }<br />    return </span><span class="default">$temp</span><span class="keyword">;<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">myRange</span><span class="keyword">( </span><span class="default">1</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">0.5 </span><span class="keyword">)); </span><span class="comment">//you can use fractional steps<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">myRange</span><span class="keyword">( </span><span class="string">"a"</span><span class="keyword">, </span><span class="string">"k"</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">)); </span><span class="comment">//or count letters<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">myRange</span><span class="keyword">( </span><span class="string">"5"</span><span class="keyword">, </span><span class="string">"9" </span><span class="keyword">)); </span><span class="comment">//numbers are detected even if hidden in strtings<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">myRange</span><span class="keyword">( </span><span class="string">"!"</span><span class="keyword">, </span><span class="string">"%"</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">/</span><span class="default">pi</span><span class="keyword">() )); </span><span class="comment">//or mess around with senseless parameters<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115933">  <div class="votes">
    <div id="Vu115933">
    <a href="/manual/vote-note.php?id=115933&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115933">
    <a href="/manual/vote-note.php?id=115933&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115933" title="35% like this...">
    -4
    </div>
  </div>
  <a href="#115933" class="name">
  <strong class="user"><em>unicod3 at hotmail dot com</em></strong></a><a class="genanchor" href="#115933"> &para;</a><div class="date" title="2014-10-15 05:43"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115933">
<div class="phpcode"><code><span class="html">a function to get column index by letter  <br /> <br />function getColumnNumber($char){<br />    $alphabet = range('a','z');<br />    $alphabet2 = range('a','z');<br />    $newAlphabet = $alphabet;<br />    foreach($alphabet as $k =&gt; $r)<br />    {<br />        foreach($alphabet2 as $row){<br />            $newAlphabet[] = $r.$row;<br />        }<br />    }<br />    $key = array_search($char, $newAlphabet);<br />    return ($key !== false) ? $key : null;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="102666">  <div class="votes">
    <div id="Vu102666">
    <a href="/manual/vote-note.php?id=102666&amp;page=function.range&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102666">
    <a href="/manual/vote-note.php?id=102666&amp;page=function.range&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102666" title="35% like this...">
    -5
    </div>
  </div>
  <a href="#102666" class="name">
  <strong class="user"><em>Aram Kocharyan</em></strong></a><a class="genanchor" href="#102666"> &para;</a><div class="date" title="2011-02-27 07:58"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102666">
<div class="phpcode"><code><span class="html">Here's a function to generate ranges from strings:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/*  Creates an array of integers based on a given range string of format "int - int"<br />    Eg. range_str('2 - 5'); */<br /></span><span class="keyword">function </span><span class="default">range_str</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'#(\\d+)\\s*-\\s*(\\d+)#'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$matches</span><span class="keyword">);<br />    if ( </span><span class="default">count</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">) == </span><span class="default">3 </span><span class="keyword">) {<br />        return </span><span class="default">range</span><span class="keyword">(</span><span class="default">$matches</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$matches</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    }<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Test<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">range_str</span><span class="keyword">(</span><span class="string">' 2 - 4 '</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />This outputs:<br /><br />Array<br />(<br />    [0] =&gt; 2<br />    [1] =&gt; 3<br />    [2] =&gt; 4<br />)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.range&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.range.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
