<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: memory_get_usage - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.memory-get-usage.php">
 <link rel="shorturl" href="https://www.php.net/memory-get-usage">
 <link rel="alternate" href="https://www.php.net/memory-get-usage" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.memory-get-peak-usage.php">
 <link rel="next" href="https://www.php.net/manual/en/function.memory-reset-peak-usage.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.memory-get-usage.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.memory-get-usage.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.memory-get-usage.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.memory-get-usage.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.memory-get-usage.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.memory-get-usage.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.memory-get-usage.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.memory-get-usage.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.memory-get-usage.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.memory-get-usage.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.memory-get-usage.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the amount of memory allocated to PHP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: memory_get_usage - Manual" />
<meta name="twitter:description" content="Returns the amount of memory allocated to PHP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: memory_get_usage - Manual" />
<meta itemprop="description" content="Returns the amount of memory allocated to PHP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the amount of memory allocated to PHP" />

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
        <a href="function.memory-reset-peak-usage.php">
          memory_reset_peak_usage &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.memory-get-peak-usage.php">
          &laquo; memory_get_peak_usage        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.memory-get-usage.php' selected="selected">English</option>
            <option value='de/function.memory-get-usage.php'>German</option>
            <option value='es/function.memory-get-usage.php'>Spanish</option>
            <option value='fr/function.memory-get-usage.php'>French</option>
            <option value='it/function.memory-get-usage.php'>Italian</option>
            <option value='ja/function.memory-get-usage.php'>Japanese</option>
            <option value='pt_BR/function.memory-get-usage.php'>Brazilian Portuguese</option>
            <option value='ru/function.memory-get-usage.php'>Russian</option>
            <option value='tr/function.memory-get-usage.php'>Turkish</option>
            <option value='uk/function.memory-get-usage.php'>Ukrainian</option>
            <option value='zh/function.memory-get-usage.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.memory-get-usage" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">memory_get_usage</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">memory_get_usage</span> &mdash; <span class="dc-title">Returns the amount of memory allocated to PHP</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.memory-get-usage-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>memory_get_usage</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$real_usage</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   Returns the amount of memory, in bytes, that&#039;s currently being
   allocated to your PHP script.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.memory-get-usage-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">real_usage</code></dt>
     <dd>
      <p class="para">
       Set this to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to get total memory allocated from
       system, including unused pages. 
       If not set or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> only the used memory is reported.
      </p>
     </dd>
    
   </dl>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">PHP does not track memory that is not allocated by <code class="literal">emalloc()</code></p>
  </p></blockquote>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.memory-get-usage-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the memory amount in bytes.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.memory-get-usage-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-662">
    <p><strong>Example #1 A <span class="function"><strong>memory_get_usage()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// This is only an example, the numbers below will<br />// differ depending on your system<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 36640<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">"Hello"</span><span style="color: #007700">, </span><span style="color: #0000BB">4242</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 57960<br /><br /></span><span style="color: #007700">unset(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">memory_get_usage</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// 36744<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.memory-get-usage-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.memory-get-peak-usage.php" class="function" rel="rdfs-seeAlso">memory_get_peak_usage()</a> - Returns the peak of memory allocated by PHP</span></li>
    <li><a href="ini.core.php#ini.memory-limit" class="link">memory_limit</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/memory-get-usage.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.memory-get-usage%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.memory-get-usage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.memory-get-usage.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="96280">  <div class="votes">
    <div id="Vu96280">
    <a href="/manual/vote-note.php?id=96280&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96280">
    <a href="/manual/vote-note.php?id=96280&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96280" title="88% like this...">
    299
    </div>
  </div>
  <a href="#96280" class="name">
  <strong class="user"><em>xelozz -at- gmail.com</em></strong></a><a class="genanchor" href="#96280"> &para;</a><div class="date" title="2010-02-18 02:34"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96280">
<div class="phpcode"><code><span class="html">To get the memory usage in KB or MB<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">convert</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">)<br /> {<br />    </span><span class="default">$unit</span><span class="keyword">=array(</span><span class="string">'b'</span><span class="keyword">,</span><span class="string">'kb'</span><span class="keyword">,</span><span class="string">'mb'</span><span class="keyword">,</span><span class="string">'gb'</span><span class="keyword">,</span><span class="string">'tb'</span><span class="keyword">,</span><span class="string">'pb'</span><span class="keyword">);<br />    return @</span><span class="default">round</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">/</span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">,(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">log</span><span class="keyword">(</span><span class="default">$size</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">)))),</span><span class="default">2</span><span class="keyword">).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$unit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br /> }<br /><br />echo </span><span class="default">convert</span><span class="keyword">(</span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)); </span><span class="comment">// 123 kb<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103037">  <div class="votes">
    <div id="Vu103037">
    <a href="/manual/vote-note.php?id=103037&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103037">
    <a href="/manual/vote-note.php?id=103037&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103037" title="74% like this...">
    36
    </div>
  </div>
  <a href="#103037" class="name">
  <strong class="user"><em>Alex Aulbach</em></strong></a><a class="genanchor" href="#103037"> &para;</a><div class="date" title="2011-03-22 01:14"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103037">
<div class="phpcode"><code><span class="html">Note, that the official IEC-prefix for kilobyte, megabyte and so on are KiB, MiB, TiB and so on.<br /><br />See <a href="http://en.wikipedia.org/wiki/Tebibyte" rel="nofollow" target="_blank">http://en.wikipedia.org/wiki/Tebibyte</a><br /><br />At first glance this may sound like "What the hell? Everybody knows, that we mean 1024 not 1000 and the difference is not too big, so what?". But in about 10 years, the size of harddisks (and files on them) reaches the petabyte-limit and then the difference between PB and PiB is magnificent.<br /><br />Better to get used to it now. :)</span></code></div>
  </div>
 </div>
  <div class="note" id="93012">  <div class="votes">
    <div id="Vu93012">
    <a href="/manual/vote-note.php?id=93012&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93012">
    <a href="/manual/vote-note.php?id=93012&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93012" title="67% like this...">
    21
    </div>
  </div>
  <a href="#93012" class="name">
  <strong class="user"><em>jeff dot peck at snet dot net</em></strong></a><a class="genanchor" href="#93012"> &para;</a><div class="date" title="2009-08-19 09:22"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93012">
<div class="phpcode"><code><span class="html">To get the memory usage in KB or MB
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">echo_memory_usage</span><span class="keyword">() {
<br />        </span><span class="default">$mem_usage </span><span class="keyword">= </span><span class="default">memory_get_usage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />        
<br />        if (</span><span class="default">$mem_usage </span><span class="keyword">&lt; </span><span class="default">1024</span><span class="keyword">)
<br />            echo </span><span class="default">$mem_usage</span><span class="keyword">.</span><span class="string">" bytes"</span><span class="keyword">;
<br />        elseif (</span><span class="default">$mem_usage </span><span class="keyword">&lt; </span><span class="default">1048576</span><span class="keyword">)
<br />            echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">$mem_usage</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">).</span><span class="string">" kilobytes"</span><span class="keyword">;
<br />        else
<br />            echo </span><span class="default">round</span><span class="keyword">(</span><span class="default">$mem_usage</span><span class="keyword">/</span><span class="default">1048576</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">).</span><span class="string">" megabytes"</span><span class="keyword">;
<br />            
<br />        echo </span><span class="string">"&lt;br/&gt;"</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120665">  <div class="votes">
    <div id="Vu120665">
    <a href="/manual/vote-note.php?id=120665&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120665">
    <a href="/manual/vote-note.php?id=120665&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120665" title="60% like this...">
    12
    </div>
  </div>
  <a href="#120665" class="name">
  <strong class="user"><em>stanislav dot eckert at vizson dot de</em></strong></a><a class="genanchor" href="#120665"> &para;</a><div class="date" title="2017-02-18 03:08"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120665">
<div class="phpcode"><code><span class="html">memory_get_usage() is used to retrieve the memory allocated to PHP only (or your running script). But intuitively, many people expect to get the memory usage of the system, based on the name of the function.<br /><br />So if you need the overall memory usage, following function might be helpful. If retrieves the memory usage either in percent (without the percent sign) or in bytes by returning an array with free and overall memory of your system. Tested with Windows (7) and Linux (on an Raspberry Pi 2):<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">// Returns used memory (either in percent (without percent sign) or free and overall in bytes)<br />    </span><span class="keyword">function </span><span class="default">getServerMemoryUsage</span><span class="keyword">(</span><span class="default">$getPercentage</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">)<br />    {<br />        </span><span class="default">$memoryTotal </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />        </span><span class="default">$memoryFree </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br /><br />        if (</span><span class="default">stristr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="string">"win"</span><span class="keyword">)) {<br />            </span><span class="comment">// Get total physical memory (this is in bytes)<br />            </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"wmic ComputerSystem get TotalPhysicalMemory"</span><span class="keyword">;<br />            @</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$outputTotalPhysicalMemory</span><span class="keyword">);<br /><br />            </span><span class="comment">// Get free physical memory (this is in kibibytes!)<br />            </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"wmic OS get FreePhysicalMemory"</span><span class="keyword">;<br />            @</span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$outputFreePhysicalMemory</span><span class="keyword">);<br /><br />            if (</span><span class="default">$outputTotalPhysicalMemory </span><span class="keyword">&amp;&amp; </span><span class="default">$outputFreePhysicalMemory</span><span class="keyword">) {<br />                </span><span class="comment">// Find total value<br />                </span><span class="keyword">foreach (</span><span class="default">$outputTotalPhysicalMemory </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) {<br />                    if (</span><span class="default">$line </span><span class="keyword">&amp;&amp; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[0-9]+\$/"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)) {<br />                        </span><span class="default">$memoryTotal </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">;<br />                        break;<br />                    }<br />                }<br /><br />                </span><span class="comment">// Find free value<br />                </span><span class="keyword">foreach (</span><span class="default">$outputFreePhysicalMemory </span><span class="keyword">as </span><span class="default">$line</span><span class="keyword">) {<br />                    if (</span><span class="default">$line </span><span class="keyword">&amp;&amp; </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">"/^[0-9]+\$/"</span><span class="keyword">, </span><span class="default">$line</span><span class="keyword">)) {<br />                        </span><span class="default">$memoryFree </span><span class="keyword">= </span><span class="default">$line</span><span class="keyword">;<br />                        </span><span class="default">$memoryFree </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;  </span><span class="comment">// convert from kibibytes to bytes<br />                        </span><span class="keyword">break;<br />                    }<br />                }<br />            }<br />        }<br />        else<br />        {<br />            if (</span><span class="default">is_readable</span><span class="keyword">(</span><span class="string">"/proc/meminfo"</span><span class="keyword">))<br />            {<br />                </span><span class="default">$stats </span><span class="keyword">= @</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"/proc/meminfo"</span><span class="keyword">);<br /><br />                if (</span><span class="default">$stats </span><span class="keyword">!== </span><span class="default">false</span><span class="keyword">) {<br />                    </span><span class="comment">// Separate lines<br />                    </span><span class="default">$stats </span><span class="keyword">= </span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\r\n"</span><span class="keyword">, </span><span class="string">"\n\r"</span><span class="keyword">, </span><span class="string">"\r"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$stats</span><span class="keyword">);<br />                    </span><span class="default">$stats </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$stats</span><span class="keyword">);<br /><br />                    </span><span class="comment">// Separate values and find correct lines for total and free mem<br />                    </span><span class="keyword">foreach (</span><span class="default">$stats </span><span class="keyword">as </span><span class="default">$statLine</span><span class="keyword">) {<br />                        </span><span class="default">$statLineData </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">":"</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLine</span><span class="keyword">));<br /><br />                        </span><span class="comment">//<br />                        // Extract size (TODO: It seems that (at least) the two values for total and free memory have the unit "kB" always. Is this correct?<br />                        //<br /><br />                        // Total memory<br />                        </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">) == </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="string">"MemTotal"</span><span class="keyword">) {<br />                            </span><span class="default">$memoryTotal </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                            </span><span class="default">$memoryTotal </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$memoryTotal</span><span class="keyword">);<br />                            </span><span class="default">$memoryTotal </span><span class="keyword">= </span><span class="default">$memoryTotal</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                            </span><span class="default">$memoryTotal </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;  </span><span class="comment">// convert from kibibytes to bytes<br />                        </span><span class="keyword">}<br /><br />                        </span><span class="comment">// Free memory<br />                        </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">) == </span><span class="default">2 </span><span class="keyword">&amp;&amp; </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]) == </span><span class="string">"MemFree"</span><span class="keyword">) {<br />                            </span><span class="default">$memoryFree </span><span class="keyword">= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$statLineData</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                            </span><span class="default">$memoryFree </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$memoryFree</span><span class="keyword">);<br />                            </span><span class="default">$memoryFree </span><span class="keyword">= </span><span class="default">$memoryFree</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />                            </span><span class="default">$memoryFree </span><span class="keyword">*= </span><span class="default">1024</span><span class="keyword">;  </span><span class="comment">// convert from kibibytes to bytes<br />                        </span><span class="keyword">}<br />                    }<br />                }<br />            }<br />        }<br /><br />        if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$memoryTotal</span><span class="keyword">) || </span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$memoryFree</span><span class="keyword">)) {<br />            return </span><span class="default">null</span><span class="keyword">;<br />        } else {<br />            if (</span><span class="default">$getPercentage</span><span class="keyword">) {<br />                return (</span><span class="default">100 </span><span class="keyword">- (</span><span class="default">$memoryFree </span><span class="keyword">* </span><span class="default">100 </span><span class="keyword">/ </span><span class="default">$memoryTotal</span><span class="keyword">));<br />            } else {<br />                return array(<br />                    </span><span class="string">"total" </span><span class="keyword">=&gt; </span><span class="default">$memoryTotal</span><span class="keyword">,<br />                    </span><span class="string">"free" </span><span class="keyword">=&gt; </span><span class="default">$memoryFree</span><span class="keyword">,<br />                );<br />            }<br />        }<br />    }<br /><br />    function </span><span class="default">getNiceFileSize</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">, </span><span class="default">$binaryPrefix</span><span class="keyword">=</span><span class="default">true</span><span class="keyword">) {<br />        if (</span><span class="default">$binaryPrefix</span><span class="keyword">) {<br />            </span><span class="default">$unit</span><span class="keyword">=array(</span><span class="string">'B'</span><span class="keyword">,</span><span class="string">'KiB'</span><span class="keyword">,</span><span class="string">'MiB'</span><span class="keyword">,</span><span class="string">'GiB'</span><span class="keyword">,</span><span class="string">'TiB'</span><span class="keyword">,</span><span class="string">'PiB'</span><span class="keyword">);<br />            if (</span><span class="default">$bytes</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) return </span><span class="string">'0 ' </span><span class="keyword">. </span><span class="default">$unit</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            return @</span><span class="default">round</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">/</span><span class="default">pow</span><span class="keyword">(</span><span class="default">1024</span><span class="keyword">,(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">log</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">)))),</span><span class="default">2</span><span class="keyword">) .</span><span class="string">' '</span><span class="keyword">. (isset(</span><span class="default">$unit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) ? </span><span class="default">$unit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] : </span><span class="string">'B'</span><span class="keyword">);<br />        } else {<br />            </span><span class="default">$unit</span><span class="keyword">=array(</span><span class="string">'B'</span><span class="keyword">,</span><span class="string">'KB'</span><span class="keyword">,</span><span class="string">'MB'</span><span class="keyword">,</span><span class="string">'GB'</span><span class="keyword">,</span><span class="string">'TB'</span><span class="keyword">,</span><span class="string">'PB'</span><span class="keyword">);<br />            if (</span><span class="default">$bytes</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) return </span><span class="string">'0 ' </span><span class="keyword">. </span><span class="default">$unit</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />            return @</span><span class="default">round</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">/</span><span class="default">pow</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">,(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">floor</span><span class="keyword">(</span><span class="default">log</span><span class="keyword">(</span><span class="default">$bytes</span><span class="keyword">,</span><span class="default">1000</span><span class="keyword">)))),</span><span class="default">2</span><span class="keyword">) .</span><span class="string">' '</span><span class="keyword">. (isset(</span><span class="default">$unit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]) ? </span><span class="default">$unit</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] : </span><span class="string">'B'</span><span class="keyword">);<br />        }<br />    }<br /><br />    </span><span class="comment">// Memory usage: 4.55 GiB / 23.91 GiB (19.013557664178%)<br />    </span><span class="default">$memUsage </span><span class="keyword">= </span><span class="default">getServerMemoryUsage</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);<br />    echo </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"Memory usage: %s / %s (%s%%)"</span><span class="keyword">,<br />        </span><span class="default">getNiceFileSize</span><span class="keyword">(</span><span class="default">$memUsage</span><span class="keyword">[</span><span class="string">"total"</span><span class="keyword">] - </span><span class="default">$memUsage</span><span class="keyword">[</span><span class="string">"free"</span><span class="keyword">]),<br />        </span><span class="default">getNiceFileSize</span><span class="keyword">(</span><span class="default">$memUsage</span><span class="keyword">[</span><span class="string">"total"</span><span class="keyword">]),<br />        </span><span class="default">getServerMemoryUsage</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">)<br />    );<br /><br /></span><span class="default">?&gt;<br /></span><br />The function getNiceFileSize() is not required. Just used to shorten size in bytes.<br /><br />Note: If you need the server load (CPU usage), I wrote a nice function to get that too: <a href="http://php.net/manual/en/function.sys-getloadavg.php#118673" rel="nofollow" target="_blank">http://php.net/manual/en/function.sys-getloadavg.php#118673</a></span></code></div>
  </div>
 </div>
  <div class="note" id="47780">  <div class="votes">
    <div id="Vu47780">
    <a href="/manual/vote-note.php?id=47780&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47780">
    <a href="/manual/vote-note.php?id=47780&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47780" title="61% like this...">
    5
    </div>
  </div>
  <a href="#47780" class="name">
  <strong class="user"><em>randolphothegreat at yahoo dot com</em></strong></a><a class="genanchor" href="#47780"> &para;</a><div class="date" title="2004-11-29 01:37"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47780">
<div class="phpcode"><code><span class="html">[EDIT by danbrown AT php DOT net: This is intended by the author to only be used with PHP 4 &lt; 4.3.2.]
<br />
<br />I'd just like to point out that although sandeepc at myrealbox dot com's idea for displaying the current memory usage is a good one, it's perhaps a bad idea to pipe the entire process list through grep. A better performing method would be to select only the process we're interested in:
<br />
<br /><span class="default">&lt;?php
<br />$pid </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();
<br /></span><span class="default">error_log</span><span class="keyword">(</span><span class="string">'MEMORY USAGE (% KB PID ): ' </span><span class="keyword">. `</span><span class="string">ps --pid </span><span class="default">$pid</span><span class="string"> --no-headers -o%mem,rss,pid</span><span class="keyword">`);
<br /></span><span class="default">?&gt;
<br /></span>
<br />True, it's not much of a performance boost, but every bit helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="101104">  <div class="votes">
    <div id="Vu101104">
    <a href="/manual/vote-note.php?id=101104&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101104">
    <a href="/manual/vote-note.php?id=101104&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101104" title="57% like this...">
    5
    </div>
  </div>
  <a href="#101104" class="name">
  <strong class="user"><em>lorin dot weilenmann at gmail dot com</em></strong></a><a class="genanchor" href="#101104"> &para;</a><div class="date" title="2010-11-26 01:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101104">
<div class="phpcode"><code><span class="html">I can confirm that this function triggers a garbage collection. I have a script that exceeded 128MB of memory at some point and ended with a fatal error. I was confused, because the script dealt with some large files initially, but the memory load from that point on should have been marginal, and the error occurred at the very end.<br /><br />Those large files were dealt in a dedicated function and i even used unset() on the variable holding the file after the file was written to disk inside that function. So the memory should have been cleared twice, first after the unset() call, and second once the function ended.<br /><br />To debug the memory usage, I called memory_get_usage(true) at some points and echo-ed the memory allocation. Just by adding a few echos here and there in the script, the memory usage never exceeded 1MB overhead (on top of the current file size) and the memory error disappeared.</span></code></div>
  </div>
 </div>
  <div class="note" id="122630">  <div class="votes">
    <div id="Vu122630">
    <a href="/manual/vote-note.php?id=122630&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122630">
    <a href="/manual/vote-note.php?id=122630&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122630" title="54% like this...">
    1
    </div>
  </div>
  <a href="#122630" class="name">
  <strong class="user"><em>yousha dot a at hotmail dot com</em></strong></a><a class="genanchor" href="#122630"> &para;</a><div class="date" title="2018-04-18 08:41"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122630">
<div class="phpcode"><code><span class="html">Note that the description for `memory_get_usage` is different than it's default parameter!<br /><br />"`int memory_get_usage ([ bool $real_usage = FALSE ] )`<br />Returns the amount of memory, in bytes, that's currently being allocated to your PHP script. "<br /><br />Default parameter = `FALSE`<br /><br />WRONG description: Returns the amount of memory, in bytes, that's currently being allocated to your PHP script. <br /><br />It must be: Returns the amount of memory, in bytes, that's currently used by your PHP script.</span></code></div>
  </div>
 </div>
  <div class="note" id="42391">  <div class="votes">
    <div id="Vu42391">
    <a href="/manual/vote-note.php?id=42391&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42391">
    <a href="/manual/vote-note.php?id=42391&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42391" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42391" class="name">
  <strong class="user"><em>ad-rotator.com</em></strong></a><a class="genanchor" href="#42391"> &para;</a><div class="date" title="2004-05-14 10:31"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42391">
<div class="phpcode"><code><span class="html">The method sandeepc at myrealbox dot com posted yields larger memory usage, my guess is that it includes all the PHP interpreter/internal code and not just the script being run.<br /><br />1) Use ps command<br />MEMORY USAGE (% KB PID ):  0.8 12588 25087 -&gt; about 12MB<br />2) Use memory_get_usage() <br />int(6041952) -&gt; about 6MB</span></code></div>
  </div>
 </div>
  <div class="note" id="116860">  <div class="votes">
    <div id="Vu116860">
    <a href="/manual/vote-note.php?id=116860&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116860">
    <a href="/manual/vote-note.php?id=116860&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116860" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#116860" class="name">
  <strong class="user"><em>miami at blackcrystal dot net</em></strong></a><a class="genanchor" href="#116860"> &para;</a><div class="date" title="2015-03-11 11:46"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116860">
<div class="phpcode"><code><span class="html">Sometimes, we need all memory to run our task, we do ini_set('memory_limit',  -1 ), or maximum value we have. <br /><br />To avoid stuck of server on long and memory consuming tasks, i wrote this check. This is not the same as memory_get_usage() do, but more. It shows virtual memory amount, taken by your process. In percents.<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">getVirtualMemoryTaken</span><span class="keyword">()<br />    {<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();<br />        </span><span class="default">$a </span><span class="keyword">= `</span><span class="string">ps -p </span><span class="default">$pid</span><span class="string"> v | awk 'END{print $9}'</span><span class="keyword">`;<br />        return </span><span class="default">$a</span><span class="keyword">*</span><span class="default">1</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br />It works only in linux, tested in Ubuntu 14.<br /><br /><span class="default">&lt;?php<br />    $a </span><span class="keyword">= </span><span class="string">' '</span><span class="keyword">;<br />    do {  </span><span class="default">$a </span><span class="keyword">.= </span><span class="default">$a </span><span class="keyword">. </span><span class="default">$a</span><span class="keyword">; }<br />    while (</span><span class="default">getVirtualMemoryTaken</span><span class="keyword">() &lt; </span><span class="default">20 </span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="54758">  <div class="votes">
    <div id="Vu54758">
    <a href="/manual/vote-note.php?id=54758&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54758">
    <a href="/manual/vote-note.php?id=54758&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54758" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#54758" class="name">
  <strong class="user"><em>vesa dot kivisto at nepton dot fi</em></strong></a><a class="genanchor" href="#54758"> &para;</a><div class="date" title="2005-07-14 06:02"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54758">
<div class="phpcode"><code><span class="html">[EDIT by danbrown AT php DOT net: This function will only extend Windows versions of PHP where the server has the required third-party software.]
<br />
<br />I was unable to get the previous examples working properly and created code which works at least for me. Enjoy!
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// Please note that you'll need the pslist.exe utility from <a href="http://www.sysinternals.com/Utilities/PsTools.html" rel="nofollow" target="_blank">http://www.sysinternals.com/Utilities/PsTools.html</a>
<br />// This is because win/2000 itself does not provide a task list utility.
<br />//
<br /></span><span class="keyword">function </span><span class="default">getMemoryUsage</span><span class="keyword">() {
<br />
<br /> </span><span class="comment">// try to use PHP build in function
<br /> </span><span class="keyword">if( </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'memory_get_usage'</span><span class="keyword">) ) {
<br />  return </span><span class="default">memory_get_usage</span><span class="keyword">();
<br /> }
<br />
<br /> </span><span class="comment">// Try to get Windows memory usage via pslist command
<br /> </span><span class="keyword">if ( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) == </span><span class="string">'WIN'</span><span class="keyword">) {
<br />  
<br />  </span><span class="default">$resultRow </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;
<br />  </span><span class="default">$resultRowItemStartPosition </span><span class="keyword">= </span><span class="default">34</span><span class="keyword">;
<br />  </span><span class="default">$resultRowItemLength </span><span class="keyword">= </span><span class="default">8</span><span class="keyword">;
<br />  
<br />  </span><span class="default">$output </span><span class="keyword">= array();
<br />  </span><span class="default">exec</span><span class="keyword">(</span><span class="string">'pslist -m ' </span><span class="keyword">. </span><span class="default">getmypid</span><span class="keyword">() , </span><span class="default">$output</span><span class="keyword">);
<br />    
<br />  return </span><span class="default">trim</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">[</span><span class="default">$resultRow</span><span class="keyword">], </span><span class="default">$resultRowItemStartPosition</span><span class="keyword">, </span><span class="default">$resultRowItemLength</span><span class="keyword">)) . </span><span class="string">' KB'</span><span class="keyword">;
<br />  
<br /> }
<br />
<br /> 
<br /> </span><span class="comment">// No memory functionality available at all
<br /> </span><span class="keyword">return </span><span class="string">'&lt;b style="color: red;"&gt;no value&lt;/b&gt;'</span><span class="keyword">;
<br />  
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="64156">  <div class="votes">
    <div id="Vu64156">
    <a href="/manual/vote-note.php?id=64156&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64156">
    <a href="/manual/vote-note.php?id=64156&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64156" title="40% like this...">
    -5
    </div>
  </div>
  <a href="#64156" class="name">
  <strong class="user"><em>e dot a dot schultz at gmail dot com</em></strong></a><a class="genanchor" href="#64156"> &para;</a><div class="date" title="2006-04-08 04:41"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64156">
<div class="phpcode"><code><span class="html">This is a function that should work for both Windows XP/2003 and most distrabutions of UNIX and Mac OS X. 
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'memory_get_usage'</span><span class="keyword">) )
<br />{
<br />    function </span><span class="default">memory_get_usage</span><span class="keyword">()
<br />    {
<br />        </span><span class="comment">//If its Windows
<br />        //Tested on Win XP Pro SP2. Should work on Win 2003 Server too
<br />        //Doesn't work for 2000
<br />        //If you need it to work for 2000 look at <a href="http://us2.php.net/manual/en/function.memory-get-usage.php#54642" rel="nofollow" target="_blank">http://us2.php.net/manual/en/function.memory-get-usage.php#54642</a>
<br />        </span><span class="keyword">if ( </span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">) == </span><span class="string">'WIN'</span><span class="keyword">) 
<br />        {
<br />               if ( </span><span class="default">substr</span><span class="keyword">( </span><span class="default">PHP_OS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">3 </span><span class="keyword">) == </span><span class="string">'WIN' </span><span class="keyword">)
<br />                {
<br />                    </span><span class="default">$output </span><span class="keyword">= array();
<br />                    </span><span class="default">exec</span><span class="keyword">( </span><span class="string">'tasklist /FI "PID eq ' </span><span class="keyword">. </span><span class="default">getmypid</span><span class="keyword">() . </span><span class="string">'" /FO LIST'</span><span class="keyword">, </span><span class="default">$output </span><span class="keyword">);
<br />        
<br />                    return </span><span class="default">preg_replace</span><span class="keyword">( </span><span class="string">'/[\D]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">[</span><span class="default">5</span><span class="keyword">] ) * </span><span class="default">1024</span><span class="keyword">;
<br />                }
<br />        }else
<br />        {
<br />            </span><span class="comment">//We now assume the OS is UNIX
<br />            //Tested on Mac OS X 10.4.6 and Linux Red Hat Enterprise 4
<br />            //This should work on most UNIX systems
<br />            </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">getmypid</span><span class="keyword">();
<br />            </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"ps -eo%mem,rss,pid | grep </span><span class="default">$pid</span><span class="string">"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);
<br />            </span><span class="default">$output </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"  "</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />            </span><span class="comment">//rss is given in 1024 byte units
<br />            </span><span class="keyword">return </span><span class="default">$output</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">] * </span><span class="default">1024</span><span class="keyword">;
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53174">  <div class="votes">
    <div id="Vu53174">
    <a href="/manual/vote-note.php?id=53174&amp;page=function.memory-get-usage&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53174">
    <a href="/manual/vote-note.php?id=53174&amp;page=function.memory-get-usage&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53174" title="38% like this...">
    -4
    </div>
  </div>
  <a href="#53174" class="name">
  <strong class="user"><em>MagicalTux at FF dot st</em></strong></a><a class="genanchor" href="#53174"> &para;</a><div class="date" title="2005-05-25 12:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53174">
<div class="phpcode"><code><span class="html">When you need to get the OS, do not use $_SERVER['OS'] or $_ENV['OS'], better use PHP_OS constant !<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)==</span><span class="string">'WIN'</span><span class="keyword">) {<br />  </span><span class="comment">// [...]<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />You also have other values such as CYGWIN_NT-5.0, Linux, ... this is the best way to get system's os (anyone on linux can do an "export OS=windows")</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.memory-get-usage&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.memory-get-usage.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="current">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
