<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: substr - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.substr.php">
 <link rel="shorturl" href="https://www.php.net/substr">
 <link rel="alternate" href="https://www.php.net/substr" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.strtr.php">
 <link rel="next" href="https://www.php.net/manual/en/function.substr-compare.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.substr.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.substr.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.substr.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.substr.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.substr.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.substr.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.substr.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.substr.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.substr.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.substr.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.substr.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Return part of a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: substr - Manual" />
<meta name="twitter:description" content="Return part of a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: substr - Manual" />
<meta itemprop="description" content="Return part of a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Return part of a string" />

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
        <a href="function.substr-compare.php">
          substr_compare &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.strtr.php">
          &laquo; strtr        </a>
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
            <option value='en/function.substr.php' selected="selected">English</option>
            <option value='de/function.substr.php'>German</option>
            <option value='es/function.substr.php'>Spanish</option>
            <option value='fr/function.substr.php'>French</option>
            <option value='it/function.substr.php'>Italian</option>
            <option value='ja/function.substr.php'>Japanese</option>
            <option value='pt_BR/function.substr.php'>Brazilian Portuguese</option>
            <option value='ru/function.substr.php'>Russian</option>
            <option value='tr/function.substr.php'>Turkish</option>
            <option value='uk/function.substr.php'>Ukrainian</option>
            <option value='zh/function.substr.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.substr" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">substr</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">substr</span> &mdash; <span class="dc-title">Return part of a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.substr-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>substr</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$offset</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$length</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Returns the portion of <code class="parameter">string</code> specified by the
   <code class="parameter">offset</code> and <code class="parameter">length</code> parameters.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.substr-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
    
     <dt><code class="parameter">offset</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">offset</code> is non-negative, the returned string
       will start at the <code class="parameter">offset</code>&#039;th position in
       <code class="parameter">string</code>, counting from zero. For instance,
       in the string &#039;<code class="literal">abcdef</code>&#039;, the character at
       position <code class="literal">0</code> is &#039;<code class="literal">a</code>&#039;, the
       character at position <code class="literal">2</code> is
       &#039;<code class="literal">c</code>&#039;, and so forth.
      </p>
      <p class="para">
       If <code class="parameter">offset</code> is negative, the returned string
       will start at the <code class="parameter">offset</code>&#039;th character
       from the end of <code class="parameter">string</code>.
      </p>
      <p class="para">
       If <code class="parameter">string</code> is less than
       <code class="parameter">offset</code> characters long, an empty string will be returned.
      </p>
      <p class="para">
       <div class="example" id="example-5181">
        <p><strong>Example #1 Using a negative <code class="parameter">offset</code></strong></p>
        <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// returns "f"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, -</span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;    </span><span style="color: #FF8000">// returns "ef"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// returns "d"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

       </div>
      </p>
     </dd>
    
    
     <dt><code class="parameter">length</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">length</code> is given and is positive, the string
       returned will contain at most <code class="parameter">length</code> characters
       beginning from <code class="parameter">offset</code> (depending on the length of
       <code class="parameter">string</code>).
      </p>
      <p class="para">
       If <code class="parameter">length</code> is given and is negative, then that many
       characters will be omitted from the end of <code class="parameter">string</code>
       (after the start position has been calculated when a
       <code class="parameter">offset</code> is negative).  If
       <code class="parameter">offset</code> denotes the position of this truncation or
       beyond, an empty string will be returned.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is given and is <code class="literal">0</code>,
       an empty string will be returned.
      </p>
      <p class="para">
       If <code class="parameter">length</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, the substring starting from
       <code class="parameter">offset</code> until the end of the string will be
       returned.
      </p>
      <div class="example" id="example-5182">
       <p><strong>Example #2 Using a negative <code class="parameter">length</code></strong></p>
       <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// returns "abcde"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// returns "cde"<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">, -</span><span style="color: #0000BB">4</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// returns ""; prior to PHP 8.0.0, false was returned<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, -</span><span style="color: #0000BB">3</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// returns "de"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.substr-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the extracted part of <code class="parameter">string</code>, or
   an empty string.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.substr-changelog">
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
       <code class="parameter">length</code> is nullable now.
       When <code class="parameter">length</code> is explicitly set to <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>,
       the function returns a substring finishing at the end of the string, when it previously returned an empty string.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       The function returns an empty string where it previously returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.substr-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5183">
    <p><strong>Example #3 Basic <span class="function"><strong>substr()</strong></span> usage</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;     </span><span style="color: #FF8000">// bcdef<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"abcdef"</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// bcdef; prior to PHP 8.0.0, empty string was returned<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// bcd<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// abcd<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">8</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;  </span><span style="color: #FF8000">// abcdef<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">, -</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// f<br /><br />// Accessing single characters in a string<br />// can also be achieved using "square brackets"<br /></span><span style="color: #0000BB">$string </span><span style="color: #007700">= </span><span style="color: #DD0000">'abcdef'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$string</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                 </span><span style="color: #FF8000">// a<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$string</span><span style="color: #007700">[</span><span style="color: #0000BB">3</span><span style="color: #007700">], </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;                 </span><span style="color: #FF8000">// d<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">$string</span><span style="color: #007700">[</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">)-</span><span style="color: #0000BB">1</span><span style="color: #007700">], </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; </span><span style="color: #FF8000">// f<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div> 
   <div class="example" id="example-5184">
    <p><strong>Example #4 <span class="function"><strong>substr()</strong></span> casting behaviour</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">apple </span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">() {<br />        return </span><span style="color: #DD0000">"green"</span><span style="color: #007700">;<br />    }<br />}<br /><br />echo </span><span style="color: #DD0000">"1) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">"pear"</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"2) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">54321</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"3) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(new </span><span style="color: #0000BB">apple</span><span style="color: #007700">(), </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"4) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"5) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">false</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"6) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"7) "</span><span style="color: #007700">, </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">1.2e3</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">4</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">), </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">1) &#039;pe&#039;
2) &#039;54&#039;
3) &#039;gr&#039;
4) &#039;1&#039;
5) &#039;&#039;
6) &#039;&#039;
7) &#039;1200&#039;</pre>
</div>
    </div>
   </div>
  <div class="example" id="example-5185">
   <p><strong>Example #5 Invalid Character Range</strong></p>
   <div class="example-contents"><p>
    If an invalid character range is requested, <span class="function"><strong>substr()</strong></span> returns
    an empty string as of PHP 8.0.0; previously, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> was returned instead.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>Output of the above example in PHP 8:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(0) &quot;&quot;</pre>
</div>
   </div>
   <div class="example-contents"><p>Output of the above example in PHP 7:</p></div>
   <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">bool(false)</pre>
</div>
   </div>
  </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.substr-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.strrchr.php" class="function" rel="rdfs-seeAlso">strrchr()</a> - Find the last occurrence of a character in a string</span></li>
    <li><span class="function"><a href="function.substr-replace.php" class="function" rel="rdfs-seeAlso">substr_replace()</a> - Replace text within a portion of a string</span></li>
    <li><span class="function"><a href="function.preg-match.php" class="function" rel="rdfs-seeAlso">preg_match()</a> - Perform a regular expression match</span></li>
    <li><span class="function"><a href="function.trim.php" class="function" rel="rdfs-seeAlso">trim()</a> - Strip whitespace (or other characters) from the beginning and end of a string</span></li>
    <li><span class="function"><a href="function.mb-substr.php" class="function" rel="rdfs-seeAlso">mb_substr()</a> - Get part of string</span></li>
    <li><span class="function"><a href="function.wordwrap.php" class="function" rel="rdfs-seeAlso">wordwrap()</a> - Wraps a string to a given number of characters</span></li>
    <li><a href="language.types.string.php#language.types.string.substr" class="link">String access and modification by character</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/substr.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.substr%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.substr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="90581">  <div class="votes">
    <div id="Vu90581">
    <a href="/manual/vote-note.php?id=90581&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90581">
    <a href="/manual/vote-note.php?id=90581&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90581" title="71% like this...">
    184
    </div>
  </div>
  <a href="#90581" class="name">
  <strong class="user"><em>Andreas Bur (andreas dot buro at gmail dot com)</em></strong></a><a class="genanchor" href="#90581"> &para;</a><div class="date" title="2009-04-29 06:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90581">
<div class="phpcode"><code><span class="html">For getting a substring of UTF-8 characters, I highly recommend mb_substr<br /><br /><span class="default">&lt;?php<br />        $utf8string </span><span class="keyword">= </span><span class="string">"cakeæøå"</span><span class="keyword">;<br /><br />        echo </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$utf8string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">);<br />        </span><span class="comment">// output cake#<br />        </span><span class="keyword">echo </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$utf8string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);<br />        </span><span class="comment">//output cakeæ<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112707">  <div class="votes">
    <div id="Vu112707">
    <a href="/manual/vote-note.php?id=112707&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112707">
    <a href="/manual/vote-note.php?id=112707&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112707" title="61% like this...">
    117
    </div>
  </div>
  <a href="#112707" class="name">
  <strong class="user"><em>biohazard dot ge at gmail dot com</em></strong></a><a class="genanchor" href="#112707"> &para;</a><div class="date" title="2013-07-15 02:30"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112707">
<div class="phpcode"><code><span class="html">may be by following functions will be easier to extract the needed sub parts from a string:<br /><br /><span class="default">&lt;?php<br />after </span><span class="keyword">(</span><span class="string">'@'</span><span class="keyword">, </span><span class="string">'biohazard@online.ge'</span><span class="keyword">);<br /></span><span class="comment">//returns 'online.ge'<br />//from the first occurrence of '@'<br /><br /></span><span class="default">before </span><span class="keyword">(</span><span class="string">'@'</span><span class="keyword">, </span><span class="string">'biohazard@online.ge'</span><span class="keyword">);<br /></span><span class="comment">//returns 'biohazard'<br />//from the first occurrence of '@'<br /><br /></span><span class="default">between </span><span class="keyword">(</span><span class="string">'@'</span><span class="keyword">, </span><span class="string">'.'</span><span class="keyword">, </span><span class="string">'biohazard@online.ge'</span><span class="keyword">);<br /></span><span class="comment">//returns 'online'<br />//from the first occurrence of '@'<br /><br /></span><span class="default">after_last </span><span class="keyword">(</span><span class="string">'['</span><span class="keyword">, </span><span class="string">'sin[90]*cos[180]'</span><span class="keyword">);<br /></span><span class="comment">//returns '180]'<br />//from the last occurrence of '['<br /><br /></span><span class="default">before_last </span><span class="keyword">(</span><span class="string">'['</span><span class="keyword">, </span><span class="string">'sin[90]*cos[180]'</span><span class="keyword">);<br /></span><span class="comment">//returns 'sin[90]*cos['<br />//from the last occurrence of '['<br /><br /></span><span class="default">between_last </span><span class="keyword">(</span><span class="string">'['</span><span class="keyword">, </span><span class="string">']'</span><span class="keyword">, </span><span class="string">'sin[90]*cos[180]'</span><span class="keyword">);<br /></span><span class="comment">//returns '180'<br />//from the last occurrence of '['<br /></span><span class="default">?&gt;<br /></span><br />here comes the source:<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="keyword">function </span><span class="default">after </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">)))<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">)+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">));<br />    };<br /><br />    function </span><span class="default">after_last </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />        if (!</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">strrevpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">)))<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">strrevpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">)+</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">));<br />    };<br /><br />    function </span><span class="default">before </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">));<br />    };<br /><br />    function </span><span class="default">before_last </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">strrevpos</span><span class="keyword">(</span><span class="default">$inthat</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">));<br />    };<br /><br />    function </span><span class="default">between </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$that</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />        return </span><span class="default">before </span><span class="keyword">(</span><span class="default">$that</span><span class="keyword">, </span><span class="default">after</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">));<br />    };<br /><br />    function </span><span class="default">between_last </span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">$that</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">)<br />    {<br />     return </span><span class="default">after_last</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">, </span><span class="default">before_last</span><span class="keyword">(</span><span class="default">$that</span><span class="keyword">, </span><span class="default">$inthat</span><span class="keyword">));<br />    };<br /><br /></span><span class="comment">// use strrevpos function in case your php version does not include it<br /></span><span class="keyword">function </span><span class="default">strrevpos</span><span class="keyword">(</span><span class="default">$instr</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">)<br />{<br />    </span><span class="default">$rev_pos </span><span class="keyword">= </span><span class="default">strpos </span><span class="keyword">(</span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$instr</span><span class="keyword">), </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">));<br />    if (</span><span class="default">$rev_pos</span><span class="keyword">===</span><span class="default">false</span><span class="keyword">) return </span><span class="default">false</span><span class="keyword">;<br />    else return </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$instr</span><span class="keyword">) - </span><span class="default">$rev_pos </span><span class="keyword">- </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">);<br />};<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114219">  <div class="votes">
    <div id="Vu114219">
    <a href="/manual/vote-note.php?id=114219&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114219">
    <a href="/manual/vote-note.php?id=114219&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114219" title="60% like this...">
    8
    </div>
  </div>
  <a href="#114219" class="name">
  <strong class="user"><em>fatihmertdogancan at hotmail dot com</em></strong></a><a class="genanchor" href="#114219"> &para;</a><div class="date" title="2014-01-26 08:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114219">
<div class="phpcode"><code><span class="html">[English]<br />I created python similar accesing list or string with php substr &amp; strrev functions.<br /><br />Use: str($string,$pattern)<br /><br />About the python pattern,<br /><a href="http://docs.python.org/release/1.5.1p1/tut/strings.html" rel="nofollow" target="_blank">http://docs.python.org/release/1.5.1p1/tut/strings.html</a><br /><a href="http://effbot.org/zone/python-list.htm" rel="nofollow" target="_blank">http://effbot.org/zone/python-list.htm</a><br /><br />About of pattern structures<br />[start:stop:step]<br /><br />Example,<br /><span class="default">&lt;?php<br />$s </span><span class="keyword">= </span><span class="string">"fatihmertdogancan"</span><span class="keyword">;<br />echo </span><span class="default">str</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">"1:9:-2"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />echo </span><span class="default">str</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">"1:-3:-2"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />echo </span><span class="default">str</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">"1:-11:-5"</span><span class="keyword">);<br />echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;<br />echo </span><span class="default">str</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">,</span><span class="string">"1:9:4"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Output,<br />thetoacn<br />eht<br />aom<br />htan<br /><br />This is function phpfiddle link: <a href="http://phpfiddle.org/main/code/e82-y5d" rel="nofollow" target="_blank">http://phpfiddle.org/main/code/e82-y5d</a><br /><br />or source;<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">str</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$pattern</span><span class="keyword">){<br />        </span><span class="comment">//[start:stop:step]<br />        //pattern -&gt;            ([-]?[0-9]*|\s):([-]?[0-9]*|\s):([-]?[0-9]*|\s)<br />        </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/([-]?[0-9]*|\s?):([-]?[0-9]*|\s?):?([-]?[0-9]*|\s?)/"</span><span class="keyword">, </span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">$yakala</span><span class="keyword">);<br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$yakala</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />        </span><span class="default">$stop </span><span class="keyword">= </span><span class="default">$yakala</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">];<br />        </span><span class="default">$step </span><span class="keyword">= </span><span class="default">$yakala</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">];<br />        <br />        if(empty(</span><span class="default">$start</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; </span><span class="default">$step </span><span class="keyword">== </span><span class="string">"-1"</span><span class="keyword">){</span><span class="comment">//istisna durum<br />            </span><span class="keyword">return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />        }else if(empty(</span><span class="default">$start</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$step</span><span class="keyword">)){</span><span class="comment">//istisna durum<br />            </span><span class="default">$rev </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />            </span><span class="default">$yeni </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />            if(</span><span class="default">$step</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-" </span><span class="keyword">&amp;&amp; </span><span class="default">$stop </span><span class="keyword">!= </span><span class="string">"-1"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />            </span><span class="default">$atla </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">);<br />            for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){<br />                </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$atla</span><span class="keyword">;<br />                if(isset(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">])){<br />                    </span><span class="default">$yeni </span><span class="keyword">= </span><span class="default">$yeni</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];<br />                }<br />            }<br />            if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">);<br />                </span><span class="comment">//"hepsi boş, step dolu o da +";<br />            </span><span class="keyword">}else{<br />                return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">));<br />                </span><span class="comment">//"hepsi boş, step dolu o da -";<br />            </span><span class="keyword">}<br />        }<br />        <br />        if(empty(</span><span class="default">$start</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$step</span><span class="keyword">)){<br />            return </span><span class="default">$str</span><span class="keyword">;<br />            </span><span class="comment">//"hepsi boş";<br />        </span><span class="keyword">}else if(empty(</span><span class="default">$start</span><span class="keyword">)){<br />            if(isset(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$step</span><span class="keyword">)){<br />                </span><span class="default">$rev </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$stop</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />                if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">);<br />                    </span><span class="comment">//"start ve step boş, stop dolu"<br />                </span><span class="keyword">}else{<br />                    return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">));<br />                    </span><span class="comment">//"start ve step boş, stop -1";<br />                </span><span class="keyword">}<br />            }else if(isset(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$step</span><span class="keyword">)){<br />                </span><span class="default">$rev </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$stop</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />                </span><span class="default">$yeni </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$step </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />                    if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                        return </span><span class="default">$str</span><span class="keyword">;<br />                        </span><span class="comment">//"start boş, stop ve step dolu, step 1";<br />                    </span><span class="keyword">}else{<br />                        return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$stop</span><span class="keyword">))); </span><span class="comment">//abs -&gt; mutlak değer (-5 = 5)<br />                        //"start boş, stop -, step dolu, step 1";<br />                    </span><span class="keyword">}<br />                }else{<br />                    </span><span class="default">$atla </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">);<br />                    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$atla</span><span class="keyword">;<br />                        if(isset(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">])){<br />                            </span><span class="default">$yeni </span><span class="keyword">= </span><span class="default">$yeni</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];<br />                        }<br />                    }<br />                    if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">);<br />                        </span><span class="comment">//"start boş, step ve stop dolu";<br />                    </span><span class="keyword">}else{<br />                        return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$stop</span><span class="keyword">)));<br />                        </span><span class="comment">//"start boş, step ve stop -";<br />                    </span><span class="keyword">}<br />                }<br />            }<br />        </span><span class="comment">//start boş değilse<br />        </span><span class="keyword">}else if(!empty(</span><span class="default">$start</span><span class="keyword">)){<br />            if(isset(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; empty(</span><span class="default">$step</span><span class="keyword">)){<br />                </span><span class="default">$rev </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$stop</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />                if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">);<br />                    </span><span class="comment">//return "step boş, start ve stop dolu";<br />                </span><span class="keyword">}else{<br />                    return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$stop</span><span class="keyword">)));<br />                    </span><span class="comment">//"step boş, start ve stop dolu, stop -";<br />                </span><span class="keyword">}<br />            }else if(isset(</span><span class="default">$stop</span><span class="keyword">) &amp;&amp; isset(</span><span class="default">$step</span><span class="keyword">)){<br />                <br />                </span><span class="comment">//hepsi dolu<br />                </span><span class="default">$rev </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$stop</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />                </span><span class="default">$yeni </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />                if(</span><span class="default">$step </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">){<br />                    if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">);<br />                        </span><span class="comment">//"hepsi dolu, step 1";<br />                    </span><span class="keyword">}else{<br />                        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$stop</span><span class="keyword">));<br />                        </span><span class="comment">//"hepsi dolu, step 1, stop -";<br />                    </span><span class="keyword">}<br />                }else{<br />                    if(</span><span class="default">$stop</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">"-"</span><span class="keyword">){</span><span class="default">$rev </span><span class="keyword">= </span><span class="string">"VAR"</span><span class="keyword">;}<br />                    </span><span class="default">$atla </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$step</span><span class="keyword">);<br />                    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt;= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++){<br />                        </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">*</span><span class="default">$atla</span><span class="keyword">;<br />                        if(isset(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">])){<br />                            </span><span class="default">$yeni </span><span class="keyword">= </span><span class="default">$yeni</span><span class="keyword">.</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$offset</span><span class="keyword">];<br />                        }<br />                    }<br />                    if(</span><span class="default">$rev </span><span class="keyword">!= </span><span class="string">"VAR"</span><span class="keyword">){<br />                        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$stop</span><span class="keyword">);<br />                        </span><span class="comment">//"hepsi dolu";<br />                    </span><span class="keyword">}else{<br />                        return </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$yeni</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$stop</span><span class="keyword">)));<br />                        </span><span class="comment">//"hepsi dolu, stop -";<br />                    </span><span class="keyword">}<br />                }<br />            }<br />        }<br />    }<br /></span><span class="default">?&gt;<br /></span><br />Good works..</span></code></div>
  </div>
 </div>
  <div class="note" id="113718">  <div class="votes">
    <div id="Vu113718">
    <a href="/manual/vote-note.php?id=113718&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113718">
    <a href="/manual/vote-note.php?id=113718&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113718" title="59% like this...">
    12
    </div>
  </div>
  <a href="#113718" class="name">
  <strong class="user"><em>greg at apparel dot com</em></strong></a><a class="genanchor" href="#113718"> &para;</a><div class="date" title="2013-11-20 05:28"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113718">
<div class="phpcode"><code><span class="html">Coming to PHP from classic ASP I am used to the Left() and Right() functions built into ASP so I did a quick PHPversion. hope these help someone else making the switch<br /><br />function left($str, $length) {<br />    return substr($str, 0, $length);<br />}<br /><br />function right($str, $length) {<br />    return substr($str, -$length);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="111133">  <div class="votes">
    <div id="Vu111133">
    <a href="/manual/vote-note.php?id=111133&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111133">
    <a href="/manual/vote-note.php?id=111133&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111133" title="57% like this...">
    15
    </div>
  </div>
  <a href="#111133" class="name">
  <strong class="user"><em>pugazhenthi k</em></strong></a><a class="genanchor" href="#111133"> &para;</a><div class="date" title="2013-01-18 09:57"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111133">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?Php <br /><br /></span><span class="comment">### SUB STRING  BY WORD USING substr() and strpos()  #####<br /><br />### THIS SCRIPT WILL RETURN PART OF STRING  WITHOUT WORD BREAK ###<br /><br /></span><span class="default">$description </span><span class="keyword">= </span><span class="default">‘your description here your description here your description here your description here your description here your description here your description hereyour description here your description here’  </span><span class="comment">// your description here .<br /><br /></span><span class="default">$no_letter </span><span class="keyword">= </span><span class="default">30 </span><span class="keyword">;<br /><br />if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$desctiption</span><span class="keyword">) &gt; </span><span class="default">30 </span><span class="keyword">)<br />{<br />     echo </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$description</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$description</span><span class="keyword">,</span><span class="default">’ ‘</span><span class="keyword">,</span><span class="default">30</span><span class="keyword">));             </span><span class="comment">//strpos to find ‘ ‘ after 30 characters.<br /></span><span class="keyword">}<br />else {<br />     echo </span><span class="default">$description</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121873">  <div class="votes">
    <div id="Vu121873">
    <a href="/manual/vote-note.php?id=121873&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121873">
    <a href="/manual/vote-note.php?id=121873&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121873" title="57% like this...">
    3
    </div>
  </div>
  <a href="#121873" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#121873"> &para;</a><div class="date" title="2017-11-15 01:17"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121873">
<div class="phpcode"><code><span class="html">Be aware of a slight inconsistency between substr and mb_substr<br /><br />mb_substr("", 4);      returns empty string<br /><br />substr("", 4);              returns boolean false<br /><br />tested in PHP 7.1.11 (Fedora 26) and PHP 5.4.16 (CentOS 7.4)</span></code></div>
  </div>
 </div>
  <div class="note" id="77483">  <div class="votes">
    <div id="Vu77483">
    <a href="/manual/vote-note.php?id=77483&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77483">
    <a href="/manual/vote-note.php?id=77483&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77483" title="57% like this...">
    8
    </div>
  </div>
  <a href="#77483" class="name">
  <strong class="user"><em>Petez</em></strong></a><a class="genanchor" href="#77483"> &para;</a><div class="date" title="2007-08-31 03:56"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77483">
<div class="phpcode"><code><span class="html">I wanted to work out the fastest way to get the first few characters from a string, so I ran the following experiment to compare substr, direct string access and strstr:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/* substr access */<br /></span><span class="default">beginTimer</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1500000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="default">$opening </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">11</span><span class="keyword">);<br />    if (</span><span class="default">$opening </span><span class="keyword">== </span><span class="string">'Lorem ipsum'</span><span class="keyword">){<br />        </span><span class="default">true</span><span class="keyword">;<br />    }else{<br />        </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$endtime1 </span><span class="keyword">= </span><span class="default">endTimer</span><span class="keyword">();<br /><br /></span><span class="comment">/* direct access */<br /></span><span class="default">beginTimer</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1500000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    if (</span><span class="default">$string</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] == </span><span class="string">'L' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] == </span><span class="string">'o' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">] == </span><span class="string">'r' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">] == </span><span class="string">'e' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">4</span><span class="keyword">] == </span><span class="string">'m' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] == </span><span class="string">' ' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">6</span><span class="keyword">] == </span><span class="string">'i' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">7</span><span class="keyword">] == </span><span class="string">'p' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">8</span><span class="keyword">] == </span><span class="string">'s' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">9</span><span class="keyword">] == </span><span class="string">'u' </span><span class="keyword">&amp;&amp; </span><span class="default">$string</span><span class="keyword">[</span><span class="default">10</span><span class="keyword">] == </span><span class="string">'m'</span><span class="keyword">){<br />        </span><span class="default">true</span><span class="keyword">;<br />    }else{<br />        </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$endtime2 </span><span class="keyword">= </span><span class="default">endTimer</span><span class="keyword">();<br /><br /></span><span class="comment">/* strstr access */<br /></span><span class="default">beginTimer</span><span class="keyword">();<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1500000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++){<br />    </span><span class="default">$opening </span><span class="keyword">= </span><span class="default">strstr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="string">'Lorem ipsum'</span><span class="keyword">);<br />    if (</span><span class="default">$opening </span><span class="keyword">== </span><span class="default">true</span><span class="keyword">){<br />        </span><span class="default">true</span><span class="keyword">;<br />    }else{<br />        </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">$endtime3 </span><span class="keyword">= </span><span class="default">endTimer</span><span class="keyword">();<br /><br />echo </span><span class="default">$endtime1</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$endtime2</span><span class="keyword">.</span><span class="string">"\r\n"</span><span class="keyword">.</span><span class="default">$endtime3</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The string was 6 paragraphs of Lorem Ipsum, and I was trying match the first two words. The experiment was run 3 times and averaged. The results were:<br /><br />(substr) 3.24<br />(direct access) 11.49<br />(strstr) 4.96<br /><br />(With standard deviations 0.01, 0.02 and 0.04)<br /><br />THEREFORE substr is the fastest of the three methods for getting the first few letters of a string.</span></code></div>
  </div>
 </div>
  <div class="note" id="53199">  <div class="votes">
    <div id="Vu53199">
    <a href="/manual/vote-note.php?id=53199&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53199">
    <a href="/manual/vote-note.php?id=53199&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53199" title="57% like this...">
    3
    </div>
  </div>
  <a href="#53199" class="name">
  <strong class="user"><em>bleakwind at msn dot com</em></strong></a><a class="genanchor" href="#53199"> &para;</a><div class="date" title="2005-05-25 10:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53199">
<div class="phpcode"><code><span class="html">This returns the portion of str specified by the start and length parameters..<br />It can performs multi-byte safe on number of characters. like mb_strcut() ...<br /><br />Note:<br />1.Use it like this bite_str(string str, int start, int length [,byte of on string]);<br />2.First character's position is 0. Second character position is 1, and so on...<br />3.$byte is one character length of your encoding, For example: utf-8 is "3", gb2312 and big5 is "2"...you can use the function strlen() get it... <br />Enjoy it :) ...<br /><br />--- Bleakwind<br />QQ:940641<br /><a href="http://www.weaverdream.com" rel="nofollow" target="_blank">http://www.weaverdream.com</a><br /><br />PS:I'm sorry my english is too poor... :( <br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// String intercept By Bleakwind<br />// utf-8:$byte=3 | gb2312:$byte=2 | big5:$byte=2<br /></span><span class="keyword">function </span><span class="default">bite_str</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">, </span><span class="default">$byte</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">)<br />{<br />    </span><span class="default">$str     </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$count   </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$str_len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$str_len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if ((</span><span class="default">$count</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">-</span><span class="default">$start</span><span class="keyword">)&gt;</span><span class="default">$len</span><span class="keyword">) {<br />            </span><span class="default">$str  </span><span class="keyword">.= </span><span class="string">"..."</span><span class="keyword">;<br />            break;<br />        } elseif ((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) &lt;= </span><span class="default">128</span><span class="keyword">) &amp;&amp; (</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">$start</span><span class="keyword">)) {<br />            </span><span class="default">$count</span><span class="keyword">++;<br />        } elseif ((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) &gt; </span><span class="default">128</span><span class="keyword">) &amp;&amp; (</span><span class="default">$count </span><span class="keyword">&lt; </span><span class="default">$start</span><span class="keyword">)) {<br />            </span><span class="default">$count </span><span class="keyword">= </span><span class="default">$count</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;<br />            </span><span class="default">$i     </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">+</span><span class="default">$byte</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        } elseif ((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) &lt;= </span><span class="default">128</span><span class="keyword">) &amp;&amp; (</span><span class="default">$count </span><span class="keyword">&gt;= </span><span class="default">$start</span><span class="keyword">)) {<br />            </span><span class="default">$str  </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$count</span><span class="keyword">++;<br />        } elseif ((</span><span class="default">ord</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">)) &gt; </span><span class="default">128</span><span class="keyword">) &amp;&amp; (</span><span class="default">$count </span><span class="keyword">&gt;= </span><span class="default">$start</span><span class="keyword">)) {<br />            </span><span class="default">$str  </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">$byte</span><span class="keyword">);<br />            </span><span class="default">$count </span><span class="keyword">= </span><span class="default">$count</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;<br />            </span><span class="default">$i     </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">+</span><span class="default">$byte</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$str</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Test<br /></span><span class="default">$str </span><span class="keyword">= </span><span class="string">"123456???ֽ?123456?ַ???123456??ȡ????"</span><span class="keyword">;<br />for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">30</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++){<br />    echo </span><span class="string">"&lt;br&gt;"</span><span class="keyword">.</span><span class="default">bite_str</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$i</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">);    <br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52893">  <div class="votes">
    <div id="Vu52893">
    <a href="/manual/vote-note.php?id=52893&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52893">
    <a href="/manual/vote-note.php?id=52893&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52893" title="56% like this...">
    7
    </div>
  </div>
  <a href="#52893" class="name">
  <strong class="user"><em>fanfatal at fanfatal dot pl</em></strong></a><a class="genanchor" href="#52893"> &para;</a><div class="date" title="2005-05-16 11:45"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52893">
<div class="phpcode"><code><span class="html">Hmm ... this is a script I wrote, whitch is very similar to substr, but it isn't takes html and bbcode for counting and it takes portion of string and show avoided (html &amp; bbcode) tags too ;] 
<br />Specially usefull for show part of serach result included html and bbcode tags
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * string csubstr ( string string, int start [, int length] )
<br /> *
<br /> * @author FanFataL
<br /> * @param string string
<br /> * @param int start
<br /> * @param [int length]
<br /> * @return string
<br /> */
<br /></span><span class="keyword">function </span><span class="default">csubstr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">) {
<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="string">'/(\[\w+[^\]]*?\]|\[\/\w+\]|&lt;\w+[^&gt;]*?&gt;|&lt;\/\w+&gt;)/i'</span><span class="keyword">;
<br />    </span><span class="default">$clean </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="default">$pattern</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">), </span><span class="default">$string</span><span class="keyword">);
<br />    if(!</span><span class="default">$length</span><span class="keyword">)
<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$clean</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);
<br />    else {
<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$clean</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);
<br />        </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$clean</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$length </span><span class="keyword">+ </span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">)));
<br />    }
<br />    </span><span class="default">$pattern </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(</span><span class="default">chr</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">),</span><span class="string">'(.*?)'</span><span class="keyword">,</span><span class="default">preg_quote</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">));
<br />    if(</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$pattern</span><span class="keyword">.</span><span class="string">'/is'</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">, </span><span class="default">$matched</span><span class="keyword">))
<br />        return </span><span class="default">$matched</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />    return </span><span class="default">$string</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Using this is similar to simple substr.
<br />
<br />Greatings ;]
<br />...</span></code></div>
  </div>
 </div>
  <div class="note" id="50915">  <div class="votes">
    <div id="Vu50915">
    <a href="/manual/vote-note.php?id=50915&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50915">
    <a href="/manual/vote-note.php?id=50915&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50915" title="56% like this...">
    3
    </div>
  </div>
  <a href="#50915" class="name">
  <strong class="user"><em>steve at unicycle dot co dot nz</em></strong></a><a class="genanchor" href="#50915"> &para;</a><div class="date" title="2005-03-13 09:34"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50915">
<div class="phpcode"><code><span class="html">To quickly trim an optional trailing slash off the end of a path name:<br /><br />if (substr( $path, -1 ) == '/') $path = substr( $path, 0, -1 );</span></code></div>
  </div>
 </div>
  <div class="note" id="101863">  <div class="votes">
    <div id="Vu101863">
    <a href="/manual/vote-note.php?id=101863&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101863">
    <a href="/manual/vote-note.php?id=101863&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101863" title="54% like this...">
    3
    </div>
  </div>
  <a href="#101863" class="name">
  <strong class="user"><em>nikolai dot wuestemann at t-online dot de</em></strong></a><a class="genanchor" href="#101863"> &para;</a><div class="date" title="2011-01-14 08:56"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101863">
<div class="phpcode"><code><span class="html">If you want to have a string BETWEEN two strings, just use this function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_between</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">)
<br />{
<br />  </span><span class="default">$substr </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">)+</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">), (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">) - </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">))*(-</span><span class="default">1</span><span class="keyword">));
<br />  return </span><span class="default">$substr</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">//Example:
<br />
<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"123456789"</span><span class="keyword">;
<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="string">"12"</span><span class="keyword">;
<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">"9"</span><span class="keyword">;
<br />
<br />echo </span><span class="default">get_between</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">);
<br />
<br /></span><span class="comment">//Output:
<br />//345678
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="89747">  <div class="votes">
    <div id="Vu89747">
    <a href="/manual/vote-note.php?id=89747&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89747">
    <a href="/manual/vote-note.php?id=89747&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89747" title="54% like this...">
    3
    </div>
  </div>
  <a href="#89747" class="name">
  <strong class="user"><em>link</em></strong></a><a class="genanchor" href="#89747"> &para;</a><div class="date" title="2009-03-20 07:19"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89747">
<div class="phpcode"><code><span class="html">I created some functions for entity-safe splitting+lengthcounting:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strlen_entities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)<br />{<br />    </span><span class="default">preg_match_all</span><span class="keyword">(<br />        </span><span class="string">'/((?:&amp;(?:#[0-9]{2,}|[a-z]{2,});)|(?:[^&amp;])|'</span><span class="keyword">.         <br />        </span><span class="string">'(?:&amp;(?!\w;)))s'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$textarray</span><span class="keyword">);<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />}  <br />function </span><span class="default">substr_entities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$limit</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">preg_match_all</span><span class="keyword">(<br />        </span><span class="string">'/((?:&amp;(?:#[0-9]{2,}|[a-z]{2,});)|(?:[^&amp;])|'</span><span class="keyword">.         <br />        </span><span class="string">'(?:&amp;(?!\w;)))s'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$textarray</span><span class="keyword">);<br />    </span><span class="default">$textarray </span><span class="keyword">= </span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$numchars </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$textarray</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$start</span><span class="keyword">&gt;=</span><span class="default">$numchars</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    if (</span><span class="default">$start</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$start </span><span class="keyword">= (</span><span class="default">$numchars</span><span class="keyword">)+</span><span class="default">$start</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$start</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$limit</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$end</span><span class="keyword">=</span><span class="default">$numchars</span><span class="keyword">;<br />        }<br />        elseif (</span><span class="default">$limit</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$end </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">+(</span><span class="default">$limit</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">$end </span><span class="keyword">= (</span><span class="default">$numchars</span><span class="keyword">)+</span><span class="default">$limit</span><span class="keyword">;<br />        }<br /><br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">$start</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$end</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$return </span><span class="keyword">.= </span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        }<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91351">  <div class="votes">
    <div id="Vu91351">
    <a href="/manual/vote-note.php?id=91351&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91351">
    <a href="/manual/vote-note.php?id=91351&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91351" title="54% like this...">
    2
    </div>
  </div>
  <a href="#91351" class="name">
  <strong class="user"><em>kaysar in ymail in com</em></strong></a><a class="genanchor" href="#91351"> &para;</a><div class="date" title="2009-06-07 11:58"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91351">
<div class="phpcode"><code><span class="html">Drop extensions of a file (even from a file location string)<br /><br /><span class="default">&lt;?php<br /><br />$filename </span><span class="keyword">= </span><span class="string">"c:/some dir/abc defg. hi.jklmn"</span><span class="keyword">;<br /><br />echo </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, (</span><span class="default">strlen </span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">)) - (</span><span class="default">strlen </span><span class="keyword">(</span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">,</span><span class="string">'.'</span><span class="keyword">))));<br /><br /></span><span class="default">?&gt;<br /></span><br />output: c:/some dir/abc defg. hi<br /><br />Hope it may help somebody like me.. (^_^)</span></code></div>
  </div>
 </div>
  <div class="note" id="103143">  <div class="votes">
    <div id="Vu103143">
    <a href="/manual/vote-note.php?id=103143&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103143">
    <a href="/manual/vote-note.php?id=103143&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103143" title="53% like this...">
    5
    </div>
  </div>
  <a href="#103143" class="name">
  <strong class="user"><em>slow at acedsl dot com</em></strong></a><a class="genanchor" href="#103143"> &para;</a><div class="date" title="2011-03-28 01:47"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103143">
<div class="phpcode"><code><span class="html">Anyone coming from the Python world will be accustomed to making substrings by using a "slice index" on a string.  The following function emulates basic Python string slice behavior. (A more elaborate version could be made to support array input as well as string, and the optional third "step" argument.)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">py_slice</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$slice</span><span class="keyword">) {<br />    </span><span class="default">$arg </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$slice</span><span class="keyword">);<br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    if (</span><span class="default">$start </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$start </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    }<br />    if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">) === </span><span class="default">1</span><span class="keyword">) {<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    }<br />    if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]) === </span><span class="string">''</span><span class="keyword">) {<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);<br />    }<br />    </span><span class="default">$end </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    if (</span><span class="default">$end </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$end </span><span class="keyword">+= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    }<br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">- </span><span class="default">$start</span><span class="keyword">);<br />}<br /><br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">'2'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">'2:4'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">'2:'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">':4'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">':-3'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />print </span><span class="default">py_slice</span><span class="keyword">(</span><span class="string">'abcdefg'</span><span class="keyword">, </span><span class="string">'-3:'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />The $slice parameter can be a single character index, or a range separated by a colon. The start of the range is inclusive and the end is exclusive, which may be  counterintuitive. (Eg, py_slice('abcdefg', '2:4') yields 'cd' not 'cde'). A negative range value means to count from the end of the string instead of the beginning. Both the start and end of the range may be omitted; the start defaults to 0 and the end defaults to the total length of the input.<br /><br />The output from the examples:<br />c<br />cd<br />cdefg<br />abcd<br />abcd<br />efg</span></code></div>
  </div>
 </div>
  <div class="note" id="90369">  <div class="votes">
    <div id="Vu90369">
    <a href="/manual/vote-note.php?id=90369&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90369">
    <a href="/manual/vote-note.php?id=90369&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90369" title="52% like this...">
    2
    </div>
  </div>
  <a href="#90369" class="name">
  <strong class="user"><em>webmaster at oehoeboeroe dot nl</em></strong></a><a class="genanchor" href="#90369"> &para;</a><div class="date" title="2009-04-18 02:07"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90369">
<div class="phpcode"><code><span class="html">You might expect substr('123456', 6) to return an empty string. Instead it returns boolean FALSE.
<br />
<br />This behavior should be mentioned in the Return Values section of the manual. Instead it is only mentioned in the Parameters section.
<br />
<br />If you need an empty string instead of a boolean FALSE you should typecast the result to a string.
<br />
<br /><span class="default">&lt;?php
<br />$a </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="string">'123456'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);              </span><span class="comment">// equivalent to $a = FALSE
<br /></span><span class="default">$a </span><span class="keyword">= (string) </span><span class="default">substr</span><span class="keyword">(</span><span class="string">'123456'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);   </span><span class="comment">// equivalent to $a = '';
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60548">  <div class="votes">
    <div id="Vu60548">
    <a href="/manual/vote-note.php?id=60548&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60548">
    <a href="/manual/vote-note.php?id=60548&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60548" title="53% like this...">
    2
    </div>
  </div>
  <a href="#60548" class="name">
  <strong class="user"><em>Bradley from California</em></strong></a><a class="genanchor" href="#60548"> &para;</a><div class="date" title="2006-01-10 01:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60548">
<div class="phpcode"><code><span class="html">Add on to (a function originally written by) "Matias from Argentina": str_format_number function.
<br />
<br />Just added handling of $String shorter then $Format by adding a side to start the fill and a string length to the while loop.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">str_format_number</span><span class="keyword">(</span><span class="default">$String</span><span class="keyword">, </span><span class="default">$Format</span><span class="keyword">, </span><span class="default">$Start </span><span class="keyword">= </span><span class="string">'left'</span><span class="keyword">){
<br />    </span><span class="comment">//If we want to fill from right to left incase string is shorter then format
<br />    </span><span class="keyword">if (</span><span class="default">$Start </span><span class="keyword">== </span><span class="string">'right'</span><span class="keyword">) {
<br />        </span><span class="default">$String </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$String</span><span class="keyword">);
<br />        </span><span class="default">$Format </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$Format</span><span class="keyword">); 
<br />    }
<br />    if(</span><span class="default">$Format </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">) return </span><span class="default">$String</span><span class="keyword">;
<br />    if(</span><span class="default">$String </span><span class="keyword">== </span><span class="string">''</span><span class="keyword">) return </span><span class="default">$String</span><span class="keyword">;    
<br />    </span><span class="default">$Result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$FormatPos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$StringPos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    while ((</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$Format</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">) &gt;= </span><span class="default">$FormatPos </span><span class="keyword">&amp;&amp; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$String</span><span class="keyword">) &gt; </span><span class="default">$StringPos</span><span class="keyword">) {
<br />        </span><span class="comment">//If its a number =&gt; stores it
<br />        </span><span class="keyword">if (</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$Format</span><span class="keyword">, </span><span class="default">$FormatPos</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">))) {
<br />            </span><span class="default">$Result </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$String</span><span class="keyword">, </span><span class="default">$StringPos</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />            </span><span class="default">$StringPos</span><span class="keyword">++;
<br />            </span><span class="comment">//If it is not a number =&gt; stores the caracter
<br />        </span><span class="keyword">} else {
<br />            </span><span class="default">$Result </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$Format</span><span class="keyword">, </span><span class="default">$FormatPos</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />        }
<br />        </span><span class="comment">//Next caracter at the mask.
<br />        </span><span class="default">$FormatPos</span><span class="keyword">++;
<br />    }
<br />    if (</span><span class="default">$Start </span><span class="keyword">== </span><span class="string">'right'</span><span class="keyword">) </span><span class="default">$Result </span><span class="keyword">= </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$Result</span><span class="keyword">);
<br />    return </span><span class="default">$Result</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109046">  <div class="votes">
    <div id="Vu109046">
    <a href="/manual/vote-note.php?id=109046&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109046">
    <a href="/manual/vote-note.php?id=109046&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109046" title="52% like this...">
    1
    </div>
  </div>
  <a href="#109046" class="name">
  <strong class="user"><em>pheagey at gmail dot com</em></strong></a><a class="genanchor" href="#109046"> &para;</a><div class="date" title="2012-06-15 02:27"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109046">
<div class="phpcode"><code><span class="html">Using a 0 as the last parameter for substr().
<br />
<br />As per examples
<br /><span class="default">&lt;?php $var </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />works no problem. However 
<br /><span class="default">&lt;?php $var </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br />will get you nothing. Just a quick heads up</span></code></div>
  </div>
 </div>
  <div class="note" id="54281">  <div class="votes">
    <div id="Vu54281">
    <a href="/manual/vote-note.php?id=54281&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54281">
    <a href="/manual/vote-note.php?id=54281&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54281" title="53% like this...">
    1
    </div>
  </div>
  <a href="#54281" class="name">
  <strong class="user"><em>php_net at thomas dot trella dot de</em></strong></a><a class="genanchor" href="#54281"> &para;</a><div class="date" title="2005-06-29 08:07"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54281">
<div class="phpcode"><code><span class="html">I needed to cut a string after x chars at a  html converted utf-8 text (for example Japanese text like &amp;#23344;&amp;#35632;&amp;#24368;&amp;#33072;&amp;#27440;&amp;#32591;). <br />The problem was, the different length of the signs, so I wrote the following function to handle that.<br />Perhaps it helps.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">html_cutstr </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">)<br />{<br />    if (!</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\&amp;#[0-9]*;.*/i'</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">))<br />    {<br />        </span><span class="default">$rVal </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">);<br />        break;<br />    }<br /><br />    </span><span class="default">$chars </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        if (</span><span class="default">$chars </span><span class="keyword">&gt;= </span><span class="default">$len</span><span class="keyword">)<br />        break;<br /><br />        </span><span class="default">$str_tmp </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">-</span><span class="default">$start</span><span class="keyword">);<br />        if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/\&amp;#[0-9]*;.*/i'</span><span class="keyword">, </span><span class="default">$str_tmp</span><span class="keyword">))<br />        {<br />            </span><span class="default">$chars</span><span class="keyword">++;<br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$i</span><span class="keyword">;<br />        }<br />    }<br />    </span><span class="default">$rVal </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);<br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) &gt; </span><span class="default">$start</span><span class="keyword">)<br />    </span><span class="default">$rVal </span><span class="keyword">.= </span><span class="string">" ..."</span><span class="keyword">;<br />    return </span><span class="default">$rVal</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="100678">  <div class="votes">
    <div id="Vu100678">
    <a href="/manual/vote-note.php?id=100678&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100678">
    <a href="/manual/vote-note.php?id=100678&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100678" title="52% like this...">
    1
    </div>
  </div>
  <a href="#100678" class="name">
  <strong class="user"><em>Cristianlf</em></strong></a><a class="genanchor" href="#100678"> &para;</a><div class="date" title="2010-10-29 02:10"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100678">
<div class="phpcode"><code><span class="html">I needed a function like lpad from oracle, or right from SQL
<br /> then I use this code :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">right</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$chars</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$vright </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">)-</span><span class="default">$chars</span><span class="keyword">,</span><span class="default">$chars</span><span class="keyword">);
<br />    return </span><span class="default">$vright</span><span class="keyword">;
<br />    
<br />}
<br />
<br />    echo </span><span class="default">right</span><span class="keyword">(</span><span class="string">'0r0j4152'</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Result: 
<br /> 4152
<br />------------------------------------------------
<br />This function is really simple, I just wanted to share, maybe helps someone out there.  
<br />
<br />regards,</span></code></div>
  </div>
 </div>
  <div class="note" id="92473">  <div class="votes">
    <div id="Vu92473">
    <a href="/manual/vote-note.php?id=92473&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92473">
    <a href="/manual/vote-note.php?id=92473&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92473" title="52% like this...">
    1
    </div>
  </div>
  <a href="#92473" class="name">
  <strong class="user"><em>gkhelloworld at gmail dot com</em></strong></a><a class="genanchor" href="#92473"> &para;</a><div class="date" title="2009-07-26 03:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92473">
<div class="phpcode"><code><span class="html">Shortens the filename and its expansion has seen.
<br />
<br /><span class="default">&lt;?php
<br />$file </span><span class="keyword">= </span><span class="string">"Hellothisfilehasmorethan30charactersandthisfayl.exe"</span><span class="keyword">;
<br />
<br />function </span><span class="default">funclongwords</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">)
<br />{
<br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) &gt; </span><span class="default">30</span><span class="keyword">)
<br />{
<br /></span><span class="default">$vartypesf </span><span class="keyword">= </span><span class="default">strrchr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="string">"."</span><span class="keyword">);
<br /></span><span class="default">$vartypesf_len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vartypesf</span><span class="keyword">);
<br /></span><span class="default">$word_l_w </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">);
<br /></span><span class="default">$word_r_w </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,-</span><span class="default">15</span><span class="keyword">);
<br /></span><span class="default">$word_r_a </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$word_r_w</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,-</span><span class="default">$vartypesf_len</span><span class="keyword">);
<br />
<br />return </span><span class="default">$word_l_w</span><span class="keyword">.</span><span class="string">"..."</span><span class="keyword">.</span><span class="default">$word_r_a</span><span class="keyword">.</span><span class="default">$vartypesf</span><span class="keyword">;
<br />}
<br />else
<br />return </span><span class="default">$file</span><span class="keyword">;
<br />}
<br /></span><span class="comment">// RETURN: Hellothisfileha...andthisfayl.exe
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55107">  <div class="votes">
    <div id="Vu55107">
    <a href="/manual/vote-note.php?id=55107&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55107">
    <a href="/manual/vote-note.php?id=55107&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55107" title="52% like this...">
    2
    </div>
  </div>
  <a href="#55107" class="name">
  <strong class="user"><em>frank at jkelloggs dot dk</em></strong></a><a class="genanchor" href="#55107"> &para;</a><div class="date" title="2005-07-25 02:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55107">
<div class="phpcode"><code><span class="html">Regarding the utf8_substr function from lmak: The pattern '/./u' doesn't match newline characters. This means that the substring from 0 to the total length of the string will miss the number of characters in the end matching the number of newlines in the string. To fix this one can add the s modifier (PCRE_DOTALL) in the pattern:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">utf8_substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">)<br />{<br />   </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="string">"/./su"</span><span class="keyword">, </span><span class="default">$str</span><span class="keyword">, </span><span class="default">$ar</span><span class="keyword">);<br /><br />   if(</span><span class="default">func_num_args</span><span class="keyword">() &gt;= </span><span class="default">3</span><span class="keyword">) {<br />       </span><span class="default">$end </span><span class="keyword">= </span><span class="default">func_get_arg</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />       return </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$end</span><span class="keyword">));<br />   } else {<br />       return </span><span class="default">join</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">,</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$ar</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">],</span><span class="default">$start</span><span class="keyword">));<br />   }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="84907">  <div class="votes">
    <div id="Vu84907">
    <a href="/manual/vote-note.php?id=84907&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84907">
    <a href="/manual/vote-note.php?id=84907&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84907" title="52% like this...">
    1
    </div>
  </div>
  <a href="#84907" class="name">
  <strong class="user"><em>post [at] jannik - zappe [dot] de</em></strong></a><a class="genanchor" href="#84907"> &para;</a><div class="date" title="2008-08-05 07:59"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84907">
<div class="phpcode"><code><span class="html">Just a little function to cut a string by the wanted amount. Works in both directions.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">cutString</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$amount </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">, </span><span class="default">$dir </span><span class="keyword">= </span><span class="string">"right"</span><span class="keyword">)<br />{<br />  if((</span><span class="default">$n </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">)) &gt; </span><span class="default">0</span><span class="keyword">)<br />  {<br />    if(</span><span class="default">$dir </span><span class="keyword">== </span><span class="string">"right"</span><span class="keyword">)<br />    {<br />      </span><span class="default">$start </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />      </span><span class="default">$end </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">-</span><span class="default">$amount</span><span class="keyword">;<br />    } elseif( </span><span class="default">$dir </span><span class="keyword">== </span><span class="string">"left"</span><span class="keyword">) {<br />      </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$amount</span><span class="keyword">;<br />      </span><span class="default">$end </span><span class="keyword">= </span><span class="default">$n</span><span class="keyword">;<br />    }<br />    <br />    return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">);<br />  } else return </span><span class="default">false</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Enjoy ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="95918">  <div class="votes">
    <div id="Vu95918">
    <a href="/manual/vote-note.php?id=95918&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95918">
    <a href="/manual/vote-note.php?id=95918&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95918" title="51% like this...">
    1
    </div>
  </div>
  <a href="#95918" class="name">
  <strong class="user"><em>vnonov at gmail dot com / Viktor Nonov</em></strong></a><a class="genanchor" href="#95918"> &para;</a><div class="date" title="2010-01-28 10:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95918">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//removes string from the end of other<br /><br /></span><span class="keyword">function </span><span class="default">removeFromEnd</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$stringToRemove</span><span class="keyword">) {<br />    </span><span class="default">$stringToRemoveLen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$stringToRemove</span><span class="keyword">);<br />    </span><span class="default">$stringLen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    <br />    </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$stringLen </span><span class="keyword">- </span><span class="default">$stringToRemoveLen</span><span class="keyword">;<br /><br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">);<br /><br />    return </span><span class="default">$out</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'picture.jpg.jpg'</span><span class="keyword">;<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="default">removeFromEnd</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="string">'.jpg'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86587">  <div class="votes">
    <div id="Vu86587">
    <a href="/manual/vote-note.php?id=86587&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86587">
    <a href="/manual/vote-note.php?id=86587&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86587" title="51% like this...">
    2
    </div>
  </div>
  <a href="#86587" class="name">
  <strong class="user"><em>mar dot czapla at gmail dot com</em></strong></a><a class="genanchor" href="#86587"> &para;</a><div class="date" title="2008-10-24 02:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86587">
<div class="phpcode"><code><span class="html">Here we have gr8 function which simply convert ip address to a number using substr with negative offset.
<br />You can need it if you want to compare some IP addresses converted to a numbers. 
<br />For example when using ip2country, or eliminating same range of ip addresses from your website :D
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">ip2no</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)
<br />{    
<br />    list(</span><span class="default">$A</span><span class="keyword">,</span><span class="default">$B</span><span class="keyword">,</span><span class="default">$C</span><span class="keyword">,</span><span class="default">$D</span><span class="keyword">)    =    </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);
<br />    return 
<br />        </span><span class="default">substr</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">.</span><span class="default">$A</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">).
<br />        </span><span class="default">substr</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">.</span><span class="default">$B</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">).
<br />        </span><span class="default">substr</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">.</span><span class="default">$C</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">).
<br />        </span><span class="default">substr</span><span class="keyword">(</span><span class="string">"000"</span><span class="keyword">.</span><span class="default">$D</span><span class="keyword">,-</span><span class="default">3</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">$min        </span><span class="keyword">=    </span><span class="default">ip2no</span><span class="keyword">(</span><span class="string">"10.11.1.0"</span><span class="keyword">);
<br /></span><span class="default">$max        </span><span class="keyword">=    </span><span class="default">ip2no</span><span class="keyword">(</span><span class="string">"111.11.1.0"</span><span class="keyword">);
<br /></span><span class="default">$visitor    </span><span class="keyword">=    </span><span class="default">ip2no</span><span class="keyword">(</span><span class="string">"105.1.20.200"</span><span class="keyword">);
<br />
<br />if(</span><span class="default">$min</span><span class="keyword">&lt;</span><span class="default">$visitor </span><span class="keyword">&amp;&amp; </span><span class="default">$visitor</span><span class="keyword">&lt;</span><span class="default">$max</span><span class="keyword">)    
<br />    {    echo </span><span class="string">'Welcome !'</span><span class="keyword">;    }
<br />else    
<br />    {    echo </span><span class="string">'Get out of here !'</span><span class="keyword">;    }
<br />
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="70513">  <div class="votes">
    <div id="Vu70513">
    <a href="/manual/vote-note.php?id=70513&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70513">
    <a href="/manual/vote-note.php?id=70513&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70513" title="52% like this...">
    1
    </div>
  </div>
  <a href="#70513" class="name">
  <strong class="user"><em>egingell at sisna dot com</em></strong></a><a class="genanchor" href="#70513"> &para;</a><div class="date" title="2006-10-19 03:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70513">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * string substrpos(string $str, mixed $start [[, mixed $end], boolean $ignore_case])<br /> *<br /> * If $start is a string, substrpos will return the string from the position of the first occuring $start to $end<br /> *<br /> * If $end is a string, substrpos will return the string from $start to the position of the first occuring $end<br /> *<br /> * If the first character in (string) $start or (string) $end is '-', the last occuring string will be used.<br /> *<br /> * If $ignore_case is true, substrpos will not care about the case.<br /> * If $ignore_case is false (or anything that is not (boolean) true, the function will be case sensitive.<br /> *        Both of the above: only applies if either $start or $end are strings.<br /> *<br /> * echo substrpos('This is a string with 0123456789 numbers in it.', 5, '5');<br /> *        // Prints 'is a string with 01234';<br /> *<br /> * echo substrpos('This is a string with 0123456789 numbers in it.', '5', 5);<br /> *        // Prints '56789'<br /> *<br /> * echo substrpos('This is a string with 0123456789 numbers in it and two strings.', -60, '-string')<br /> *        // Prints 's is a string with 0123456789 numbers in it and two '<br /> *<br /> * echo substrpos('This is a string with 0123456789 numbers in it and two strings.', -60, '-STRING', true)<br /> *        // Prints 's is a string with 0123456789 numbers in it and two '<br /> *<br /> * echo substrpos('This is a string with 0123456789 numbers in it and two strings.', -60, '-STRING', false)<br /> *        // Prints 's is a string with 0123456789 numbers in it and two strings.'<br /> *<br /> * Warnings:<br /> *        Since $start and $end both take either a string or an integer:<br /> *            If the character or string you are searching $str for is a number, pass it as a quoted string.<br /> *        If $end is (integer) 0, an empty string will be returned.<br /> *        Since this function takes negative strings ('-search_string'):<br /> *            If the string your using in $start or $end is a '-' or begins with a '-' escape it with a '\'.<br /> *            This only applies to the *first* character of $start or $end.<br /> */<br /><br />// Define stripos() if not defined (PHP &lt; 5).<br /></span><span class="keyword">if (!</span><span class="default">is_callable</span><span class="keyword">(</span><span class="string">"stripos"</span><span class="keyword">)) {<br />    function </span><span class="default">stripos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$needle</span><span class="keyword">, </span><span class="default">$offset </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">), </span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">$needle</span><span class="keyword">), </span><span class="default">$offset</span><span class="keyword">);<br />    }<br />}<br /><br />function </span><span class="default">substrpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$end </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">, </span><span class="default">$ignore_case </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {<br />    </span><span class="comment">// Use variable functions<br />    </span><span class="keyword">if (</span><span class="default">$ignore_case </span><span class="keyword">=== </span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="default">$strpos </span><span class="keyword">= </span><span class="string">'stripos'</span><span class="keyword">; </span><span class="comment">// stripos() is included above in case it's not defined (PHP &lt; 5).<br />    </span><span class="keyword">} else {<br />        </span><span class="default">$strpos </span><span class="keyword">= </span><span class="string">'strpos'</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// If end is false, set it to the length of $str<br />    </span><span class="keyword">if (</span><span class="default">$end </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />        </span><span class="default">$end </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// If $start is a string do what's needed to make it an integer position for substr().<br />    </span><span class="keyword">if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">)) {<br />        </span><span class="comment">// If $start begins with '-' start processing until there's no more matches and use the last one found.<br />        </span><span class="keyword">if (</span><span class="default">$start</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'-'</span><span class="keyword">) {<br />            </span><span class="comment">// Strip off the '-'<br />            </span><span class="default">$start </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$found </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            while((</span><span class="default">$curr_pos </span><span class="keyword">= </span><span class="default">$strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="default">$found </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$curr_pos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />            }<br />            if (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$pos </span><span class="keyword">-= </span><span class="default">1</span><span class="keyword">;<br />            }<br />        } else {<br />            </span><span class="comment">// If $start begins with '\-', strip off the '\'.<br />            </span><span class="keyword">if (</span><span class="default">$start</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} . </span><span class="default">$start</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">} == </span><span class="string">'\-'</span><span class="keyword">) {<br />                </span><span class="default">$start </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$start</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);<br />        }<br />        </span><span class="default">$start </span><span class="keyword">= </span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">? </span><span class="default">$pos </span><span class="keyword">: </span><span class="default">0</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Chop the string from $start to strlen($str).<br />    </span><span class="default">$str </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$start</span><span class="keyword">);<br /><br />    </span><span class="comment">// If $end is a string, do exactly what was done to $start, above.<br />    </span><span class="keyword">if (</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">)) {<br />        if (</span><span class="default">$end</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} == </span><span class="string">'-'</span><span class="keyword">) {<br />            </span><span class="default">$end </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />            </span><span class="default">$found </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />            while((</span><span class="default">$curr_pos </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">, </span><span class="default">$pos</span><span class="keyword">)) !== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="default">$found </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$curr_pos </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;<br />            }<br />            if (</span><span class="default">$found </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">) {<br />                </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />            } else {<br />                </span><span class="default">$pos </span><span class="keyword">-= </span><span class="default">1</span><span class="keyword">;<br />            }<br />        } else {<br />            if (</span><span class="default">$end</span><span class="keyword">{</span><span class="default">0</span><span class="keyword">} . </span><span class="default">$end</span><span class="keyword">{</span><span class="default">1</span><span class="keyword">} == </span><span class="string">'\-'</span><span class="keyword">) {<br />                </span><span class="default">$end </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$end</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />            }<br />            </span><span class="default">$pos </span><span class="keyword">= </span><span class="default">$strpos</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">);<br />        }<br />        </span><span class="default">$end </span><span class="keyword">= </span><span class="default">$pos </span><span class="keyword">!== </span><span class="default">false </span><span class="keyword">? </span><span class="default">$pos </span><span class="keyword">: </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">// Since $str has already been chopped at $start, we can pass 0 as the new $start for substr()<br />    </span><span class="keyword">return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$end</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="104805">  <div class="votes">
    <div id="Vu104805">
    <a href="/manual/vote-note.php?id=104805&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104805">
    <a href="/manual/vote-note.php?id=104805&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104805" title="50% like this...">
    0
    </div>
  </div>
  <a href="#104805" class="name">
  <strong class="user"><em>leon weidauer</em></strong></a><a class="genanchor" href="#104805"> &para;</a><div class="date" title="2011-07-08 01:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104805">
<div class="phpcode"><code><span class="html">When using a value of a wrong type as second parameter , substr() does not return FALSE but NULL although the docs say, it should return FALSE on error.<br /><br />Prior to PHP 5.3, substr() tries to cast the second parameter to int and doesn't throw any errors. Since PHP 5.3 a warning is thrown.</span></code></div>
  </div>
 </div>
  <div class="note" id="53605">  <div class="votes">
    <div id="Vu53605">
    <a href="/manual/vote-note.php?id=53605&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53605">
    <a href="/manual/vote-note.php?id=53605&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53605" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53605" class="name">
  <strong class="user"><em>rob NOSPAM at clancentric dot net</em></strong></a><a class="genanchor" href="#53605"> &para;</a><div class="date" title="2005-06-07 03:43"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53605">
<div class="phpcode"><code><span class="html">I have developed a function with a similar outcome to jay's
<br />
<br />Checks if the last character is or isnt a space. (does it the normal way if it is)
<br />It explodes the string into an array of seperate works, the effect is... it chops off anything after and including the last space.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">limit_string</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$charlimit</span><span class="keyword">)
<br />{
<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$charlimit</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) != </span><span class="string">' '</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">$charlimit</span><span class="keyword">);
<br />        </span><span class="default">$array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);
<br />        </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);
<br />        </span><span class="default">$new_string </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">$array</span><span class="keyword">);
<br />
<br />        return </span><span class="default">$new_string</span><span class="keyword">.</span><span class="string">'...'</span><span class="keyword">;
<br />    }
<br />    else
<br />    {    
<br />        return </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">$charlimit</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">).</span><span class="string">'...'</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51144">  <div class="votes">
    <div id="Vu51144">
    <a href="/manual/vote-note.php?id=51144&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51144">
    <a href="/manual/vote-note.php?id=51144&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51144" title="50% like this...">
    0
    </div>
  </div>
  <a href="#51144" class="name">
  <strong class="user"><em>woutermb at gmail dot com</em></strong></a><a class="genanchor" href="#51144"> &para;</a><div class="date" title="2005-03-21 11:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51144">
<div class="phpcode"><code><span class="html">Well this is a script I wrote, what it does is chop up long words with malicious meaning into several parts. This way, a chat in a table will not get stretched anymore.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">text</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$limit</span><span class="keyword">=</span><span class="default">20</span><span class="keyword">,</span><span class="default">$chop</span><span class="keyword">=</span><span class="default">10</span><span class="keyword">){<br /><br /></span><span class="default">$text </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$string</span><span class="keyword">);<br />while(list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)){<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">);<br />    if(</span><span class="default">$length </span><span class="keyword">&gt;=</span><span class="default">20</span><span class="keyword">){<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$length</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">+=</span><span class="default">10</span><span class="keyword">){<br />            </span><span class="default">$new </span><span class="keyword">.= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />            </span><span class="default">$new </span><span class="keyword">.= </span><span class="string">" "</span><span class="keyword">;<br />        }<br />         </span><span class="default">$post </span><span class="keyword">.= </span><span class="default">$new</span><span class="keyword">;<br />    }<br />    elseif(</span><span class="default">$length </span><span class="keyword">&lt;=</span><span class="default">15</span><span class="keyword">){<br />        </span><span class="default">$post </span><span class="keyword">.= </span><span class="default">$value</span><span class="keyword">;<br />    }<br />    </span><span class="default">$post </span><span class="keyword">.= </span><span class="string">" "</span><span class="keyword">;<br />}<br />return(</span><span class="default">$post</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// for example, this would return:<br /></span><span class="default">$output </span><span class="keyword">= </span><span class="default">text</span><span class="keyword">(</span><span class="string">"Well this text doesn't get cut up, yet thisssssssssssssssssssssssss one does."</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">, </span><span class="default">5</span><span class="keyword">);<br /><br />echo(</span><span class="default">$output</span><span class="keyword">); </span><span class="comment">// "Well this text doesn't get cup up, yet thiss sssss sssss sssss sssss sss one does."<br /></span><span class="default">?&gt;<br /></span><br />I hope it was useful.. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="103843">  <div class="votes">
    <div id="Vu103843">
    <a href="/manual/vote-note.php?id=103843&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103843">
    <a href="/manual/vote-note.php?id=103843&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103843" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#103843" class="name">
  <strong class="user"><em>Quicker</em></strong></a><a class="genanchor" href="#103843"> &para;</a><div class="date" title="2011-05-06 04:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103843">
<div class="phpcode"><code><span class="html">If you need to parse utf-8 strings char by char, try this one:
<br />
<br /><span class="default">&lt;?php
<br />     $utf8marker</span><span class="keyword">=</span><span class="default">chr</span><span class="keyword">(</span><span class="default">128</span><span class="keyword">);
<br />     </span><span class="default">$count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />     while(isset(</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$count</span><span class="keyword">})){
<br />       if(</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$count</span><span class="keyword">}&gt;=</span><span class="default">$utf8marker</span><span class="keyword">) {
<br />         </span><span class="default">$parsechar</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">,</span><span class="default">$count</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);
<br />         </span><span class="default">$count</span><span class="keyword">+=</span><span class="default">2</span><span class="keyword">;
<br />       } else {
<br />         </span><span class="default">$parsechar</span><span class="keyword">=</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$count</span><span class="keyword">};
<br />         </span><span class="default">$count</span><span class="keyword">++;
<br />       }
<br />       </span><span class="comment">/* do what you like with parsechar ... , eg.:*/  </span><span class="keyword">echo </span><span class="default">$parsechar</span><span class="keyword">.</span><span class="string">"&lt;BR&gt;\r\n"</span><span class="keyword">;
<br />     }
<br /></span><span class="default">?&gt;
<br /></span>
<br />- it works without mb_substr
<br />- it is fast, because it grabs characters based on indexes  when possible and avoids any count and split functions</span></code></div>
  </div>
 </div>
  <div class="note" id="53639">  <div class="votes">
    <div id="Vu53639">
    <a href="/manual/vote-note.php?id=53639&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53639">
    <a href="/manual/vote-note.php?id=53639&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53639" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#53639" class="name">
  <strong class="user"><em>ivanhoe011 at gmail dot com</em></strong></a><a class="genanchor" href="#53639"> &para;</a><div class="date" title="2005-06-07 08:31"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53639">
<div class="phpcode"><code><span class="html">If you need just a single character from the string you don't need to use substr(), just use curly braces notation:<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// both lines will output the 3rd character<br />    </span><span class="keyword">echo </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$my_string</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    echo </span><span class="default">$my_string</span><span class="keyword">{</span><span class="default">2</span><span class="keyword">};  <br /></span><span class="default">?&gt;<br /></span><br />curly braces syntax is faster and more readable IMHO..</span></code></div>
  </div>
 </div>
  <div class="note" id="89762">  <div class="votes">
    <div id="Vu89762">
    <a href="/manual/vote-note.php?id=89762&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89762">
    <a href="/manual/vote-note.php?id=89762&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89762" title="42% like this...">
    -2
    </div>
  </div>
  <a href="#89762" class="name">
  <strong class="user"><em>link</em></strong></a><a class="genanchor" href="#89762"> &para;</a><div class="date" title="2009-03-21 05:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89762">
<div class="phpcode"><code><span class="html">And as always there is bound to be a bug:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">strlen_entities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">)<br />{<br />    </span><span class="default">preg_match_all</span><span class="keyword">(<br />        </span><span class="string">'/((?:&amp;(?:#[0-9]{2,}|[a-z]{2,});)|(?:[^&amp;])|'</span><span class="keyword">.        <br />        </span><span class="string">'(?:&amp;(?!\w;)))s'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$textarray</span><span class="keyword">);<br />    return </span><span class="default">count</span><span class="keyword">(</span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />} <br />function </span><span class="default">substr_entities</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$start</span><span class="keyword">,</span><span class="default">$limit</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">preg_match_all</span><span class="keyword">(<br />        </span><span class="string">'/((?:&amp;(?:#[0-9]{2,}|[a-z]{2,});)|(?:[^&amp;])|'</span><span class="keyword">.        <br />        </span><span class="string">'(?:&amp;(?!\w;)))s'</span><span class="keyword">,</span><span class="default">$text</span><span class="keyword">,</span><span class="default">$textarray</span><span class="keyword">);<br />    </span><span class="default">$textarray </span><span class="keyword">= </span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    </span><span class="default">$numchars </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$textarray</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;<br />    if (</span><span class="default">$start</span><span class="keyword">&gt;=</span><span class="default">$numchars</span><span class="keyword">)<br />        return </span><span class="default">false</span><span class="keyword">;<br />    if (</span><span class="default">$start</span><span class="keyword">&lt;</span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="default">$start </span><span class="keyword">= (</span><span class="default">$numchars</span><span class="keyword">)+</span><span class="default">$start</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">$start</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">$limit</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$end</span><span class="keyword">=</span><span class="default">$numchars</span><span class="keyword">;<br />        }<br />        elseif (</span><span class="default">$limit</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$end </span><span class="keyword">= </span><span class="default">$start</span><span class="keyword">+(</span><span class="default">$limit</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">);<br />        }<br />        else<br />        {<br />            </span><span class="default">$end </span><span class="keyword">= (</span><span class="default">$numchars</span><span class="keyword">)+</span><span class="default">$limit</span><span class="keyword">;<br />        }<br /><br />        for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">$start</span><span class="keyword">;(</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">$end </span><span class="keyword">&amp;&amp; isset(</span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]));</span><span class="default">$i</span><span class="keyword">++)<br />        {<br />            </span><span class="default">$return </span><span class="keyword">.= </span><span class="default">$textarray</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        }<br />        return </span><span class="default">$return</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81491">  <div class="votes">
    <div id="Vu81491">
    <a href="/manual/vote-note.php?id=81491&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81491">
    <a href="/manual/vote-note.php?id=81491&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81491" title="42% like this...">
    -4
    </div>
  </div>
  <a href="#81491" class="name">
  <strong class="user"><em>kriskra at gmail dot com</em></strong></a><a class="genanchor" href="#81491"> &para;</a><div class="date" title="2008-02-29 05:21"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81491">
<div class="phpcode"><code><span class="html">The javascript charAt equivalent in php of felipe has a little bug. It's necessary to compare the type (implicit) aswell or the function returns a wrong result:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">charAt</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">) {<br />    return (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) !== </span><span class="default">false</span><span class="keyword">) ? </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">,</span><span class="default">$pos</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) : -</span><span class="default">1</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115142">  <div class="votes">
    <div id="Vu115142">
    <a href="/manual/vote-note.php?id=115142&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115142">
    <a href="/manual/vote-note.php?id=115142&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115142" title="40% like this...">
    -4
    </div>
  </div>
  <a href="#115142" class="name">
  <strong class="user"><em>Nadeem</em></strong></a><a class="genanchor" href="#115142"> &para;</a><div class="date" title="2014-06-03 08:16"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115142">
<div class="phpcode"><code><span class="html">Truncate a float number. Similar to the Excel trunc function.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">truncate_number</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">,</span><span class="default">$decimals</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">){<br />    <br />        </span><span class="default">$number</span><span class="keyword">=array();<br />        </span><span class="default">$number</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">"."</span><span class="keyword">,</span><span class="default">$val</span><span class="keyword">);            <br />        </span><span class="default">$result</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br /><br />        if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">)&gt;</span><span class="default">1</span><span class="keyword">){<br /><br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$number</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="string">"." </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">0</span><span class="keyword">,</span><span class="default">$decimals</span><span class="keyword">);  <br />            <br />        } else {<br />        <br />            </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />            <br />        }                <br /><br />        unset(</span><span class="default">$number</span><span class="keyword">);<br /><br />        return </span><span class="default">$result</span><span class="keyword">;    <br />}<br /><br />echo </span><span class="default">truncate_number</span><span class="keyword">(</span><span class="default">99.123456</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">); </span><span class="comment">//result = 99.12<br /></span><span class="keyword">echo </span><span class="default">truncate_number</span><span class="keyword">(</span><span class="default">99.123456</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">); </span><span class="comment">//result = 99.12345<br /></span><span class="keyword">echo </span><span class="default">truncate_number</span><span class="keyword">(</span><span class="default">99.123456</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">); </span><span class="comment">//result = 99.1<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="126137">  <div class="votes">
    <div id="Vu126137">
    <a href="/manual/vote-note.php?id=126137&amp;page=function.substr&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126137">
    <a href="/manual/vote-note.php?id=126137&amp;page=function.substr&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126137" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#126137" class="name">
  <strong class="user"><em>robinhood70 at live dot ca</em></strong></a><a class="genanchor" href="#126137"> &para;</a><div class="date" title="2021-06-04 05:45"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126137">
<div class="phpcode"><code><span class="html">Prior to PHP 8, specifying length with zero-length strings or non-string values as input can produce potentially unexpected results.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">foreach ([</span><span class="string">'normal'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">] as </span><span class="default">$value</span><span class="keyword">) {<br />    echo </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">)) . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br />string normal<br />boolean<br />string 1<br />boolean<br />boolean<br />*/<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.substr&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.substr.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
