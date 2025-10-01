<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: in_array - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.in-array.php">
 <link rel="shorturl" href="https://www.php.net/in-array">
 <link rel="alternate" href="https://www.php.net/in-array" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.extract.php">
 <link rel="next" href="https://www.php.net/manual/en/function.key.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.in-array.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.in-array.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.in-array.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.in-array.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.in-array.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.in-array.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.in-array.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.in-array.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.in-array.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.in-array.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.in-array.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Checks if a value exists in an array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: in_array - Manual" />
<meta name="twitter:description" content="Checks if a value exists in an array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: in_array - Manual" />
<meta itemprop="description" content="Checks if a value exists in an array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Checks if a value exists in an array" />

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
        <a href="function.key.php">
          key &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.extract.php">
          &laquo; extract        </a>
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
            <option value='en/function.in-array.php' selected="selected">English</option>
            <option value='de/function.in-array.php'>German</option>
            <option value='es/function.in-array.php'>Spanish</option>
            <option value='fr/function.in-array.php'>French</option>
            <option value='it/function.in-array.php'>Italian</option>
            <option value='ja/function.in-array.php'>Japanese</option>
            <option value='pt_BR/function.in-array.php'>Brazilian Portuguese</option>
            <option value='ru/function.in-array.php'>Russian</option>
            <option value='tr/function.in-array.php'>Turkish</option>
            <option value='uk/function.in-array.php'>Ukrainian</option>
            <option value='zh/function.in-array.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.in-array" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">in_array</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">in_array</span> &mdash; <span class="dc-title">Checks if a value exists in an array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.in-array-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>in_array</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$needle</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$haystack</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$strict</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Searches for <code class="parameter">needle</code> in <code class="parameter">haystack</code> using loose comparison
   unless <code class="parameter">strict</code> is set.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.in-array-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">needle</code></dt>
     <dd>
      <p class="para">
       The searched value.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        If <code class="parameter">needle</code> is a string, the comparison is done
        in a case-sensitive manner.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">haystack</code></dt>
     <dd>
      <p class="para">
       The array.
      </p>
     </dd>
    
    
     <dt><code class="parameter">strict</code></dt>
     <dd>
      <p class="para">
       If the third parameter <code class="parameter">strict</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
       then the <span class="function"><strong>in_array()</strong></span> function will also check the
       <a href="language.types.php" class="link">types</a> of the
       <code class="parameter">needle</code> in the <code class="parameter">haystack</code>.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Prior to PHP 8.0.0, a <code class="literal">string</code> <code class="parameter">needle</code> will match an array
        value of <code class="literal">0</code> in non-strict mode, and vice versa.  That may lead to undesireable
        results.  Similar edge cases exist for other types, as well.  If not absolutely certain of the
        types of values involved, always use the <code class="parameter">strict</code> flag to avoid unexpected behavior.
       </p>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.in-array-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">needle</code> is found in the array,
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.in-array-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5306">
    <p><strong>Example #1 <span class="function"><strong>in_array()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$os </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"Mac"</span><span style="color: #007700">, </span><span style="color: #DD0000">"NT"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Irix"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Linux"</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #DD0000">"Irix"</span><span style="color: #007700">, </span><span style="color: #0000BB">$os</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Got Irix"</span><span style="color: #007700">;<br />}<br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #DD0000">"mac"</span><span style="color: #007700">, </span><span style="color: #0000BB">$os</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Got mac"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     The second condition fails because <span class="function"><strong>in_array()</strong></span>
     is case-sensitive, so the program above will display:
    </p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Got Irix</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5307">
    <p><strong>Example #2 <span class="function"><strong>in_array()</strong></span> with strict example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'1.10'</span><span style="color: #007700">, </span><span style="color: #0000BB">12.4</span><span style="color: #007700">, </span><span style="color: #0000BB">1.13</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #DD0000">'12.4'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"'12.4' found with strict check\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">1.13</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"1.13 found with strict check\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">1.13 found with strict check</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5308">
    <p><strong>Example #3 <span class="function"><strong>in_array()</strong></span> with an array as needle</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= array(array(</span><span style="color: #DD0000">'p'</span><span style="color: #007700">, </span><span style="color: #DD0000">'h'</span><span style="color: #007700">), array(</span><span style="color: #DD0000">'p'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">), </span><span style="color: #DD0000">'o'</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'p'</span><span style="color: #007700">, </span><span style="color: #DD0000">'h'</span><span style="color: #007700">), </span><span style="color: #0000BB">$a</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"'ph' was found\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'f'</span><span style="color: #007700">, </span><span style="color: #DD0000">'i'</span><span style="color: #007700">), </span><span style="color: #0000BB">$a</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"'fi' was found\n"</span><span style="color: #007700">;<br />}<br /><br />if (</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #DD0000">'o'</span><span style="color: #007700">, </span><span style="color: #0000BB">$a</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"'o' was found\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&#039;ph&#039; was found
&#039;o&#039; was found</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.in-array-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-search.php" class="function" rel="rdfs-seeAlso">array_search()</a> - Searches the array for a given value and returns the first corresponding key if successful</span></li>
    <li><span class="function"><a href="function.isset.php" class="function" rel="rdfs-seeAlso">isset()</a> - Determine if a variable is declared and is different than null</span></li>
    <li><span class="function"><a href="function.array-key-exists.php" class="function" rel="rdfs-seeAlso">array_key_exists()</a> - Checks if the given key or index exists in the array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/in-array.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.in-array%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.in-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.in-array.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106319">  <div class="votes">
    <div id="Vu106319">
    <a href="/manual/vote-note.php?id=106319&amp;page=function.in-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106319">
    <a href="/manual/vote-note.php?id=106319&amp;page=function.in-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106319" title="77% like this...">
    418
    </div>
  </div>
  <a href="#106319" class="name">
  <strong class="user"><em>beingmrkenny at gmail dot com</em></strong></a><a class="genanchor" href="#106319"> &para;</a><div class="date" title="2011-10-27 03:35"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106319">
<div class="phpcode"><code><span class="html">Loose checking returns some crazy, counter-intuitive results when used with certain arrays. It is completely correct behaviour, due to PHP's leniency on variable types, but in "real-life" is almost useless.<br /><br />The solution is to use the strict checking option.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Example array<br /><br /></span><span class="default">$array </span><span class="keyword">= array(<br />    </span><span class="string">'egg' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />    </span><span class="string">'cheese' </span><span class="keyword">=&gt; </span><span class="default">false</span><span class="keyword">,<br />    </span><span class="string">'hair' </span><span class="keyword">=&gt; </span><span class="default">765</span><span class="keyword">,<br />    </span><span class="string">'goblins' </span><span class="keyword">=&gt; </span><span class="default">null</span><span class="keyword">,<br />    </span><span class="string">'ogres' </span><span class="keyword">=&gt; </span><span class="string">'no ogres allowed in this array'<br /></span><span class="keyword">);<br /><br /></span><span class="comment">// Loose checking -- return values are in comments<br /><br />// First three make sense, last four do not<br /><br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">765</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">763</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="string">'egg'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="string">'hhh'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(array(), </span><span class="default">$array</span><span class="keyword">); </span><span class="comment">// true<br /><br />// Strict checking<br /><br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">null</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">765</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="default">763</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="string">'egg'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">in_array</span><span class="keyword">(</span><span class="string">'hhh'</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">in_array</span><span class="keyword">(array(), </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// false<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128598">  <div class="votes">
    <div id="Vu128598">
    <a href="/manual/vote-note.php?id=128598&amp;page=function.in-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128598">
    <a href="/manual/vote-note.php?id=128598&amp;page=function.in-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128598" title="60% like this...">
    5
    </div>
  </div>
  <a href="#128598" class="name">
  <strong class="user"><em>Julian Sawicki</em></strong></a><a class="genanchor" href="#128598"> &para;</a><div class="date" title="2023-06-09 10:04"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128598">
<div class="phpcode"><code><span class="html">Here is a recursive in_array function: <br /><br /><span class="default">&lt;?php<br /><br />$myNumbers </span><span class="keyword">= [<br />    [</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">],<br />    [</span><span class="default">6</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">],<br />];<br /><br /></span><span class="default">$array </span><span class="keyword">= [<br />    </span><span class="string">'numbers' </span><span class="keyword">=&gt; </span><span class="default">$myNumbers<br /></span><span class="keyword">];<br /><br /></span><span class="comment">// Let's try to find number 7 within $array<br /></span><span class="default">$hasNumber </span><span class="keyword">= </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">7</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// bool(false)<br /></span><span class="default">$hasNumber </span><span class="keyword">= </span><span class="default">in_array_recursive</span><span class="keyword">(</span><span class="default">7</span><span class="keyword">, </span><span class="default">$array</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">); </span><span class="comment">// bool(true)<br /><br /></span><span class="keyword">function </span><span class="default">in_array_recursive</span><span class="keyword">(</span><span class="default">mixed $needle</span><span class="keyword">, array </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">bool $strict</span><span class="keyword">): </span><span class="default">bool<br /></span><span class="keyword">{<br />    foreach (</span><span class="default">$haystack </span><span class="keyword">as </span><span class="default">$element</span><span class="keyword">) {<br />        if (</span><span class="default">$element </span><span class="keyword">=== </span><span class="default">$needle</span><span class="keyword">) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$isFound </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$element</span><span class="keyword">)) {<br />            </span><span class="default">$isFound </span><span class="keyword">= </span><span class="default">in_array_recursive</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$element</span><span class="keyword">, </span><span class="default">$strict</span><span class="keyword">);<br />        }<br />        <br />        if (</span><span class="default">$isFound </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) {<br />            return </span><span class="default">true</span><span class="keyword">;<br />        }<br />    }<br /><br />    return </span><span class="default">false</span><span class="keyword">;<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129889">  <div class="votes">
    <div id="Vu129889">
    <a href="/manual/vote-note.php?id=129889&amp;page=function.in-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129889">
    <a href="/manual/vote-note.php?id=129889&amp;page=function.in-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129889" title="60% like this...">
    1
    </div>
  </div>
  <a href="#129889" class="name">
  <strong class="user"><em>eurorusty at yahoo dot ca</em></strong></a><a class="genanchor" href="#129889"> &para;</a><div class="date" title="2024-11-27 06:23"><strong>10 months ago</strong></div>
  <div class="text" id="Hcom129889">
<div class="phpcode"><code><span class="html">I'm not sure why PHP doesn't provide a way to specify a binary search. Here's an example of the performance gains, for this array size, about 50x improvement using interpreted PHP. If built in, it could probably achieve around 1000x improvement, again for this array size.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// Set up sorted array<br /></span><span class="default">$X </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">);<br />for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">50000</span><span class="keyword">; ++</span><span class="default">$j</span><span class="keyword">)<br />    </span><span class="default">$X</span><span class="keyword">[] = </span><span class="default">$X</span><span class="keyword">[</span><span class="default">$j </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">] + </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br /><br /></span><span class="comment">// Using in_array<br /></span><span class="default">$x </span><span class="keyword">= -</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$m </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; ++</span><span class="default">$j</span><span class="keyword">)<br />    </span><span class="default">$m </span><span class="keyword">+= </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">175000</span><span class="keyword">), </span><span class="default">$X</span><span class="keyword">);<br /></span><span class="default">$x </span><span class="keyword">+= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="default">$x</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br /></span><span class="comment">// Using binarySearch<br /></span><span class="default">$x </span><span class="keyword">= -</span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$m </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />for (</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">10000</span><span class="keyword">; ++</span><span class="default">$j</span><span class="keyword">)<br />    </span><span class="default">$m </span><span class="keyword">+= </span><span class="default">binarySearch</span><span class="keyword">(</span><span class="default">$X</span><span class="keyword">, </span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">175000</span><span class="keyword">));<br /></span><span class="default">$x </span><span class="keyword">+= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />echo </span><span class="default">$x</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /><br />function </span><span class="default">binarySearch</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) {<br />    </span><span class="default">$low </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$high </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />    while (</span><span class="default">$low </span><span class="keyword">&lt;= </span><span class="default">$high</span><span class="keyword">) {<br />        </span><span class="default">$pivot </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$low </span><span class="keyword">+ </span><span class="default">$high</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br />        if (</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$pivot</span><span class="keyword">] == </span><span class="default">$value</span><span class="keyword">)<br />            return </span><span class="default">true</span><span class="keyword">;<br />        if (</span><span class="default">$value </span><span class="keyword">&lt; </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$pivot</span><span class="keyword">])<br />            </span><span class="default">$high </span><span class="keyword">= </span><span class="default">$pivot </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />        else<br />            </span><span class="default">$low </span><span class="keyword">= </span><span class="default">$pivot </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />    }<br />    </span><span class="comment">// No match<br />    </span><span class="keyword">return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/* Sample outputs, first is in_array, second is binarySearch<br />1.3544600009918<br />0.026464939117432<br /><br />1.6158990859985<br />0.033976078033447<br /><br />1.5184400081635<br />0.026461124420166<br />*/</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88260">  <div class="votes">
    <div id="Vu88260">
    <a href="/manual/vote-note.php?id=88260&amp;page=function.in-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88260">
    <a href="/manual/vote-note.php?id=88260&amp;page=function.in-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88260" title="56% like this...">
    10
    </div>
  </div>
  <a href="#88260" class="name">
  <strong class="user"><em>rhill at xenu-directory dot net</em></strong></a><a class="genanchor" href="#88260"> &para;</a><div class="date" title="2009-01-17 01:05"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88260">
<div class="phpcode"><code><span class="html">I found out that in_array will *not* find an associative array within a haystack of associative arrays in strict mode if the keys were not generated in the *same order*:<br /><br /><span class="default">&lt;?php<br /><br />$needle </span><span class="keyword">= array(<br />    </span><span class="string">'fruit'</span><span class="keyword">=&gt;</span><span class="string">'banana'</span><span class="keyword">, </span><span class="string">'vegetable'</span><span class="keyword">=&gt;</span><span class="string">'carrot'<br />    </span><span class="keyword">);<br /><br /></span><span class="default">$haystack </span><span class="keyword">= array(<br />    array(</span><span class="string">'vegetable'</span><span class="keyword">=&gt;</span><span class="string">'carrot'</span><span class="keyword">, </span><span class="string">'fruit'</span><span class="keyword">=&gt;</span><span class="string">'banana'</span><span class="keyword">),<br />    array(</span><span class="string">'fruit'</span><span class="keyword">=&gt;</span><span class="string">'apple'</span><span class="keyword">, </span><span class="string">'vegetable'</span><span class="keyword">=&gt;</span><span class="string">'celery'</span><span class="keyword">)<br />    );<br /><br />echo </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">) ? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">;<br /></span><span class="comment">// Output is 'false'<br /><br /></span><span class="keyword">echo </span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$haystack</span><span class="keyword">) ? </span><span class="string">'true' </span><span class="keyword">: </span><span class="string">'false'</span><span class="keyword">;<br /></span><span class="comment">// Output is 'true'<br /><br /></span><span class="default">?&gt;<br /></span><br />I had wrongly assumed the order of the items in an associative array were irrelevant, regardless of whether 'strict' is TRUE or FALSE: The order is irrelevant *only* if not in strict mode.</span></code></div>
  </div>
 </div>
  <div class="note" id="127901">  <div class="votes">
    <div id="Vu127901">
    <a href="/manual/vote-note.php?id=127901&amp;page=function.in-array&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127901">
    <a href="/manual/vote-note.php?id=127901&amp;page=function.in-array&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127901" title="54% like this...">
    3
    </div>
  </div>
  <a href="#127901" class="name">
  <strong class="user"><em>leonhard dot radonic+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#127901"> &para;</a><div class="date" title="2022-11-08 10:26"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127901">
<div class="phpcode"><code><span class="html">I got an unexpected behavior working with in_array. I'm using following code:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// ...<br /></span><span class="default">$someId </span><span class="keyword">= </span><span class="default">getSomeId</span><span class="keyword">(); </span><span class="comment">// it gets generated/fetched by another service, so I don't know what value it will have. P.S.: it's an integer<br /><br />// The actual data in my edge-case scenario:<br />// $someId = 0;<br />// $anyArray = ['dataOne', 'dataTwo'];<br /></span><span class="keyword">if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$someId</span><span class="keyword">, </span><span class="default">$anyArray</span><span class="keyword">)) {<br />    </span><span class="comment">// do some work<br /></span><span class="keyword">}<br /></span><span class="comment">// ...<br /></span><span class="default">?&gt;<br /></span><br />With PHP7.4, in_array returns boolean true.<br />With PHP8.1, in_array returns boolean false.<br /><br />It took me quite some time to find out what's going on.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.in-array&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.in-array.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
