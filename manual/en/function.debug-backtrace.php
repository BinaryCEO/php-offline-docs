<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: debug_backtrace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.debug-backtrace.php">
 <link rel="shorturl" href="https://www.php.net/debug-backtrace">
 <link rel="alternate" href="https://www.php.net/debug-backtrace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="next" href="https://www.php.net/manual/en/function.debug-print-backtrace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.debug-backtrace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.debug-backtrace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.debug-backtrace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.debug-backtrace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.debug-backtrace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.debug-backtrace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.debug-backtrace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.debug-backtrace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.debug-backtrace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.debug-backtrace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.debug-backtrace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Generates a backtrace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: debug_backtrace - Manual" />
<meta name="twitter:description" content="Generates a backtrace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: debug_backtrace - Manual" />
<meta itemprop="description" content="Generates a backtrace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Generates a backtrace" />

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
        <a href="function.debug-print-backtrace.php">
          debug_print_backtrace &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.errorfunc.php">
          &laquo; Error Handling Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.errorfunc.php'>Error Handling</a></li>      <li><a href='ref.errorfunc.php'>Error Handling Functions</a></li>      </ul>
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
            <option value='en/function.debug-backtrace.php' selected="selected">English</option>
            <option value='de/function.debug-backtrace.php'>German</option>
            <option value='es/function.debug-backtrace.php'>Spanish</option>
            <option value='fr/function.debug-backtrace.php'>French</option>
            <option value='it/function.debug-backtrace.php'>Italian</option>
            <option value='ja/function.debug-backtrace.php'>Japanese</option>
            <option value='pt_BR/function.debug-backtrace.php'>Brazilian Portuguese</option>
            <option value='ru/function.debug-backtrace.php'>Russian</option>
            <option value='tr/function.debug-backtrace.php'>Turkish</option>
            <option value='uk/function.debug-backtrace.php'>Ukrainian</option>
            <option value='zh/function.debug-backtrace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.debug-backtrace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">debug_backtrace</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">debug_backtrace</span> &mdash; <span class="dc-title">Generates a backtrace</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.debug-backtrace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>debug_backtrace</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.debug-backtrace-provide-object">DEBUG_BACKTRACE_PROVIDE_OBJECT</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>debug_backtrace()</strong></span> generates a PHP backtrace.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-function.debug-backtrace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       This parameter is a bitmask for the following options:
       <table class="doctable table">
        <caption><strong><span class="function"><strong>debug_backtrace()</strong></span> options</strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td>DEBUG_BACKTRACE_PROVIDE_OBJECT</td>
           <td>
            Whether or not to populate the &quot;object&quot; index.
           </td>
          </tr>

          <tr>
           <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
           <td>
            Whether or not to omit the &quot;args&quot; index, and thus all the function/method arguments,
            to save memory.
           </td>
          </tr>

         </tbody>
        
       </table>

       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <p class="para">
         There are four possible combinations:
         <table class="doctable table">
          <caption><strong><span class="function"><strong>debug_backtrace()</strong></span> options</strong></caption>
          
           <tbody class="tbody">
            <tr>
             <td><code class="code">debug_backtrace()</code></td>
             <td rowspan="3" style="vertical-align: middle;">
              Populates both indexes
             </td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT)</code></td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(1)</code></td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(0)</code></td>
             <td style="vertical-align: middle;">
              Omits index <code class="literal">&quot;object&quot;</code> and populates index <code class="literal">&quot;args&quot;</code>.
             </td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)</code></td>
             <td rowspan="2" style="vertical-align: middle;">
              Omits index <code class="literal">&quot;object&quot;</code> <em>and</em> index <code class="literal">&quot;args&quot;</code>.
             </td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(2)</code></td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT|DEBUG_BACKTRACE_IGNORE_ARGS)</code></td>
             <td rowspan="2" style="vertical-align: middle;">
              Populate index <code class="literal">&quot;object&quot;</code> <em>and</em> omit index <code class="literal">&quot;args&quot;</code>.
             </td>
            </tr>

            <tr>
             <td><code class="code">debug_backtrace(3)</code></td>
            </tr>

           </tbody>
          
         </table>

        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       This parameter can be used to limit the number of stack frames returned.
       By default (<code class="parameter">limit</code>=<code class="literal">0</code>) it returns all stack frames.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-function.debug-backtrace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of associative <span class="type"><a href="language.types.array.php" class="type array">array</a></span>s. The possible returned elements
   are as follows:
  </p>
  <p class="para">
   <table class="doctable table">
    <caption><strong>Possible returned elements from <span class="function"><strong>debug_backtrace()</strong></span></strong></caption>
    
     <thead>
      <tr>
       <th>Name</th>
       <th>Type</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>function</td>
       <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
       <td>
        The current function name.  See also
        <a href="language.constants.magic.php" class="link">__FUNCTION__</a>.
       </td>
      </tr>

      <tr>
       <td>line</td>
       <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
       <td>
        The current line number.  See also
        <a href="language.constants.magic.php" class="link">__LINE__</a>.
       </td>
      </tr>

      <tr>
       <td>file</td>
       <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
       <td>
        The current file name.  See also
        <a href="language.constants.magic.php" class="link">__FILE__</a>.
       </td>
      </tr>

      <tr>
       <td>class</td>
       <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
       <td>
        The current <a href="language.oop5.php" class="link">class</a> name.  See also
        <a href="language.constants.magic.php" class="link">__CLASS__</a>
       </td>
      </tr>

      <tr>
       <td>object</td>
       <td><span class="type"><a href="language.types.object.php" class="type object">object</a></span></td>
       <td>
        The current <a href="language.oop5.php" class="link">object</a>.
       </td>
      </tr>

      <tr>
       <td>type</td>
       <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
       <td>
        The current call type. If a method call, &quot;-&gt;&quot; is returned. If a static
        method call, &quot;::&quot; is returned. If a function call, nothing is returned.
       </td>
      </tr>

      <tr>
       <td>args</td>
       <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
       <td>
        If inside a function, this lists the functions arguments.  If
        inside an included file, this lists the included file name(s).
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.debug-backtrace-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-595">
    <p><strong>Example #1 <span class="function"><strong>debug_backtrace()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// filename: /tmp/a.php<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">a_test</span><span style="color: #007700">(</span><span style="color: #0000BB">$str</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #DD0000">"\nHi: </span><span style="color: #0000BB">$str</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">debug_backtrace</span><span style="color: #007700">());<br />}<br /><br /></span><span style="color: #0000BB">a_test</span><span style="color: #007700">(</span><span style="color: #DD0000">'friend'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;<br /></span><br /><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// filename: /tmp/b.php<br /></span><span style="color: #007700">include_once </span><span style="color: #DD0000">'/tmp/a.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     Results similar to the following when executing
     <var class="filename">/tmp/b.php</var>:
    </p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Hi: friend
array(2) {
[0]=&gt;
array(4) {
    [&quot;file&quot;] =&gt; string(10) &quot;/tmp/a.php&quot;
    [&quot;line&quot;] =&gt; int(10)
    [&quot;function&quot;] =&gt; string(6) &quot;a_test&quot;
    [&quot;args&quot;]=&gt;
    array(1) {
      [0] =&gt; &amp;string(6) &quot;friend&quot;
    }
}
[1]=&gt;
array(4) {
    [&quot;file&quot;] =&gt; string(10) &quot;/tmp/b.php&quot;
    [&quot;line&quot;] =&gt; int(2)
    [&quot;args&quot;] =&gt;
    array(1) {
      [0] =&gt; string(10) &quot;/tmp/a.php&quot;
    }
    [&quot;function&quot;] =&gt; string(12) &quot;include_once&quot;
  }
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.debug-backtrace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.trigger-error.php" class="function" rel="rdfs-seeAlso">trigger_error()</a> - Generates a user-level error/warning/notice message</span></li>
    <li><span class="function"><a href="function.debug-print-backtrace.php" class="function" rel="rdfs-seeAlso">debug_print_backtrace()</a> - Prints a backtrace</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/debug-backtrace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.debug-backtrace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.debug-backtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.debug-backtrace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">37 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112238">  <div class="votes">
    <div id="Vu112238">
    <a href="/manual/vote-note.php?id=112238&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112238">
    <a href="/manual/vote-note.php?id=112238&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112238" title="85% like this...">
    116
    </div>
  </div>
  <a href="#112238" class="name">
  <strong class="user"><em>jurchiks101 at gmail dot com</em></strong></a><a class="genanchor" href="#112238"> &para;</a><div class="date" title="2013-05-21 10:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112238">
<div class="phpcode"><code><span class="html">Here's a function I just wrote for getting a nice and comprehensible call trace. It is probably more resource-intensive than some other alternatives but it is short, understandable, and gives nice output (Exception-&gt;getTraceAsString()).<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">generateCallTrace</span><span class="keyword">()<br />{<br />    </span><span class="default">$e </span><span class="keyword">= new </span><span class="default">Exception</span><span class="keyword">();<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">());<br />    </span><span class="comment">// reverse array to make steps line up chronologically<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);<br />    </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">); </span><span class="comment">// remove {main}<br />    </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">); </span><span class="comment">// remove call to this method<br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= array();<br />    <br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />    {<br />        </span><span class="default">$result</span><span class="keyword">[] = (</span><span class="default">$i </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">)  . </span><span class="string">')' </span><span class="keyword">. </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="string">' '</span><span class="keyword">)); </span><span class="comment">// replace '#someNum' with '$i)', set the right ordering<br />    </span><span class="keyword">}<br />    <br />    return </span><span class="string">"\t" </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n\t"</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example output:<br />    1) /var/www/test/test.php(15): SomeClass-&gt;__construct()<br />    2) /var/www/test/SomeClass.class.php(36): SomeClass-&gt;callSomething()</span></code></div>
  </div>
 </div>
  <div class="note" id="34843">  <div class="votes">
    <div id="Vu34843">
    <a href="/manual/vote-note.php?id=34843&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34843">
    <a href="/manual/vote-note.php?id=34843&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34843" title="100% like this...">
    3
    </div>
  </div>
  <a href="#34843" class="name">
  <strong class="user"><em>bernyregeling AT hotmail DOT com</em></strong></a><a class="genanchor" href="#34843"> &para;</a><div class="date" title="2003-08-08 04:29"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34843">
<div class="phpcode"><code><span class="html">I wrote this function, in addition to jlim, for a nice NO-HTML output. 
<br />
<br />Thee result has similarities to a Java-error. Hope you like it. 
<br />
<br />(BTW, this function exits the script too, if debug_backtrace is displayed)
<br />------------------------------
<br />    function debug_bt()
<br />    {
<br />        if(!function_exists('debug_backtrace'))
<br />        {
<br />            echo 'function debug_backtrace does not exists'."\r\n";
<br />            return;
<br />        }
<br />        //echo '&lt;pre&gt;';
<br />        echo "\r\n".'----------------'."\r\n";
<br />        echo 'Debug backtrace:'."\r\n";
<br />        echo '----------------'."\r\n";
<br />        foreach(debug_backtrace() as $t)
<br />        {
<br />            echo "\t" . '@ ';
<br />            if(isset($t['file'])) echo basename($t['file']) . ':' . $t['line'];
<br />            else
<br />            {
<br />                // if file was not set, I assumed the functioncall
<br />                // was from PHP compiled source (ie XML-callbacks).
<br />                echo '&lt;PHP inner-code&gt;';
<br />            }
<br />
<br />            echo ' -- ';
<br />
<br />            if(isset($t['class'])) echo $t['class'] . $t['type'];
<br />
<br />            echo $t['function'];
<br />
<br />            if(isset($t['args']) &amp;&amp; sizeof($t['args']) &gt; 0) echo '(...)';
<br />            else echo '()';
<br />
<br />            echo "\r\n";
<br />        }
<br />        //echo '&lt;/pre&gt;';
<br />        exit;
<br />         }</span></code></div>
  </div>
 </div>
  <div class="note" id="119987">  <div class="votes">
    <div id="Vu119987">
    <a href="/manual/vote-note.php?id=119987&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119987">
    <a href="/manual/vote-note.php?id=119987&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119987" title="76% like this...">
    13
    </div>
  </div>
  <a href="#119987" class="name">
  <strong class="user"><em>robert at medianis dot net</em></strong></a><a class="genanchor" href="#119987"> &para;</a><div class="date" title="2016-10-04 09:42"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom119987">
<div class="phpcode"><code><span class="html">Just a short note on debug_backtrace options for PHP 5.3.6 or newer:<br /><br />debug_backtrace() - show all options<br />debug_backtrace(0) - exlude ["object"]<br />debug_backtrace(1) - same as debug_backtrace()<br />debug_backtrace(2) - exlude ["object"] AND ["args"]<br /><br />use this example and try calling debug_backtrace with different options<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">F1</span><span class="keyword">()<br />{<br />    echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    echo </span><span class="string">"in F1 now"</span><span class="keyword">;<br />    echo </span><span class="string">"&lt;pre&gt;"</span><span class="keyword">.</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">),</span><span class="default">true</span><span class="keyword">).</span><span class="string">"&lt;/pre&gt;"</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">DebugOptionsTest<br /></span><span class="keyword">{<br />    function </span><span class="default">F2</span><span class="keyword">()<br />    {<br />        echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />        echo </span><span class="string">"in F2 now"</span><span class="keyword">;<br />        </span><span class="default">F1</span><span class="keyword">();<br />    }<br /><br />}<br /><br />echo </span><span class="string">"&lt;hr /&gt;calling F1"</span><span class="keyword">;<br /></span><span class="default">F1</span><span class="keyword">();<br /><br /></span><span class="default">$c</span><span class="keyword">=new </span><span class="default">DebugOptionsTest</span><span class="keyword">();<br />echo </span><span class="string">"&lt;hr /&gt;&lt;hr /&gt;&lt;hr /&gt;calling F2"</span><span class="keyword">;<br /></span><span class="default">$c</span><span class="keyword">-&gt;</span><span class="default">F2</span><span class="keyword">(</span><span class="string">"testValue"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110917">  <div class="votes">
    <div id="Vu110917">
    <a href="/manual/vote-note.php?id=110917&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110917">
    <a href="/manual/vote-note.php?id=110917&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110917" title="77% like this...">
    5
    </div>
  </div>
  <a href="#110917" class="name">
  <strong class="user"><em>root at jackyyf dot com</em></strong></a><a class="genanchor" href="#110917"> &para;</a><div class="date" title="2012-12-22 12:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110917">
<div class="phpcode"><code><span class="html">When use register_shutdown_function, and the function called when shutting down, there are no line number nor filename information about this function, only function, class(if possible), type(if possible) and args are provided.</span></code></div>
  </div>
 </div>
  <div class="note" id="75456">  <div class="votes">
    <div id="Vu75456">
    <a href="/manual/vote-note.php?id=75456&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75456">
    <a href="/manual/vote-note.php?id=75456&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75456" title="76% like this...">
    11
    </div>
  </div>
  <a href="#75456" class="name">
  <strong class="user"><em>jsnell at e-normous dot com</em></strong></a><a class="genanchor" href="#75456"> &para;</a><div class="date" title="2007-05-30 02:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75456">
<div class="phpcode"><code><span class="html">If you are using the backtrace function in an error handler, avoid using var_export() on the args, as you will cause fatal errors in some situations, preventing you from seeing your stack trace.  Some structures will cause PHP to generate the fatal error "Nesting level too deep - recursive dependency?" This is a design feature of php, not a bug (see <a href="http://bugs.php.net/bug.php?id=30471" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=30471</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="119752">  <div class="votes">
    <div id="Vu119752">
    <a href="/manual/vote-note.php?id=119752&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119752">
    <a href="/manual/vote-note.php?id=119752&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119752" title="73% like this...">
    7
    </div>
  </div>
  <a href="#119752" class="name">
  <strong class="user"><em>Emmett Brosnan</em></strong></a><a class="genanchor" href="#119752"> &para;</a><div class="date" title="2016-08-18 08:31"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119752">
<div class="phpcode"><code><span class="html">Quick and dirty formatted output from debug_backtrace.<br /><br />$file_paths = debug_backtrace();<br />  <br />foreach($file_paths AS $file_path) {<br />  foreach($file_path AS $key =&gt; $var) {<br />    if($key == 'args') {<br />      foreach($var AS $key_arg =&gt; $var_arg) {<br />        echo $key_arg . ': ' . $var_arg . '&lt;br&gt;';<br />      }<br />    } else {<br />      echo $key . ': ' . $var . '&lt;br&gt;';<br />    }  <br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94156">  <div class="votes">
    <div id="Vu94156">
    <a href="/manual/vote-note.php?id=94156&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94156">
    <a href="/manual/vote-note.php?id=94156&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94156" title="75% like this...">
    2
    </div>
  </div>
  <a href="#94156" class="name">
  <strong class="user"><em>michael dot schramm at gmail dot com</em></strong></a><a class="genanchor" href="#94156"> &para;</a><div class="date" title="2009-10-20 12:29"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94156">
<div class="phpcode"><code><span class="html">Be carefull if you are using objects as arguments for function calls!<br /><br /><span class="default">&lt;?php<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);<br /><br />function </span><span class="default">myPrint</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">){<br />    foreach(</span><span class="default">$trace </span><span class="keyword">as </span><span class="default">$i</span><span class="keyword">=&gt;</span><span class="default">$call</span><span class="keyword">){<br />        </span><span class="comment">/**<br />         * THIS IS NEEDED! If all your objects have a __toString function it's not needed!<br />         * <br />         * Catchable fatal error: Object of class B could not be converted to string<br />         * Catchable fatal error: Object of class A could not be converted to string<br />         * Catchable fatal error: Object of class B could not be converted to string<br />         */<br />        </span><span class="keyword">if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">])) { </span><span class="default">$call</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">] = </span><span class="string">'CONVERTED OBJECT OF CLASS '</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">]); }<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">])) {<br />            foreach (</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">] AS &amp;</span><span class="default">$arg</span><span class="keyword">) {<br />                if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">)) { </span><span class="default">$arg </span><span class="keyword">= </span><span class="string">'CONVERTED OBJECT OF CLASS '</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">); }<br />            }<br />        }<br />        <br />        </span><span class="default">$trace_text</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="string">"#"</span><span class="keyword">.</span><span class="default">$i</span><span class="keyword">.</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'('</span><span class="keyword">.</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">].</span><span class="string">') '</span><span class="keyword">;<br />        </span><span class="default">$trace_text</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].= (!empty(</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">])?</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'object'</span><span class="keyword">].</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">]:</span><span class="string">''</span><span class="keyword">);<br />        </span><span class="default">$trace_text</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].= </span><span class="default">$call</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">].</span><span class="string">'('</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">,</span><span class="default">$call</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">]).</span><span class="string">')'</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$trace_text</span><span class="keyword">);<br />}<br /><br />class </span><span class="default">A</span><span class="keyword">{<br />    public function </span><span class="default">test</span><span class="keyword">(</span><span class="default">$obj</span><span class="keyword">){<br />        </span><span class="default">$obj</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br />    }<br />}<br /><br />class </span><span class="default">B</span><span class="keyword">{<br />    public function </span><span class="default">test</span><span class="keyword">(){<br />        echo </span><span class="default">myPrint</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());<br />    }<br />}<br /><br /></span><span class="default">$A </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /></span><span class="default">$B </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br /><br /></span><span class="default">$A</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">(</span><span class="default">$B</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59713">  <div class="votes">
    <div id="Vu59713">
    <a href="/manual/vote-note.php?id=59713&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59713">
    <a href="/manual/vote-note.php?id=59713&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59713" title="75% like this...">
    2
    </div>
  </div>
  <a href="#59713" class="name">
  <strong class="user"><em>http://synergy8.com</em></strong></a><a class="genanchor" href="#59713"> &para;</a><div class="date" title="2005-12-13 10:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59713">
<div class="phpcode"><code><span class="html">It should be noted that if an internal php function such as call_user_func in the backtrace, the 'file' and 'line' entries will not be set.<br /><br />Most debug tracers will use these entries.  You should place a check to see if the key exists in the array before using this function.  Otherwise notices will be generated.<br /><br /><span class="default">&lt;?php<br /><br />$arrTrace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br /><br />foreach (</span><span class="default">$arrTrace </span><span class="keyword">as </span><span class="default">$arr</span><span class="keyword">)<br />{<br />    if (!isset (</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">]))<br />    {<br />        </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">] = </span><span class="string">'[PHP Kernel]'</span><span class="keyword">;<br />    }<br /><br />    if (!isset (</span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]))<br />    {<br />        </span><span class="default">$arr</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] = </span><span class="string">''</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">// Do something<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101498">  <div class="votes">
    <div id="Vu101498">
    <a href="/manual/vote-note.php?id=101498&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101498">
    <a href="/manual/vote-note.php?id=101498&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101498" title="71% like this...">
    3
    </div>
  </div>
  <a href="#101498" class="name">
  <strong class="user"><em>Bill Getas</em></strong></a><a class="genanchor" href="#101498"> &para;</a><div class="date" title="2010-12-21 03:09"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101498">
<div class="phpcode"><code><span class="html">Here's my little updated contribution - it prints colorful output in the way I prefer.  Define a helper function isRootIp() that contains an array including your IP; then calls to bt() simply return, so you can sprinkle backtraces in live sites w/o anyone knowing.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">bt</span><span class="keyword">()
<br />{
<br />    if( ! </span><span class="default">isRootIp</span><span class="keyword">() )
<br />    {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />    </span><span class="default">array_walk</span><span class="keyword">( </span><span class="default">debug_backtrace</span><span class="keyword">(), </span><span class="default">create_function</span><span class="keyword">( </span><span class="string">'$a,$b'</span><span class="keyword">, </span><span class="string">'print "&lt;br /&gt;&lt;b&gt;". basename( $a[\'file\'] ). "&lt;/b&gt; &amp;nbsp; &lt;font color=\"red\"&gt;{$a[\'line\']}&lt;/font&gt; &amp;nbsp; &lt;font color=\"green\"&gt;{$a[\'function\']} ()&lt;/font&gt; &amp;nbsp; -- ". dirname( $a[\'file\'] ). "/";' </span><span class="keyword">) );
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111255">  <div class="votes">
    <div id="Vu111255">
    <a href="/manual/vote-note.php?id=111255&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111255">
    <a href="/manual/vote-note.php?id=111255&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111255" title="66% like this...">
    6
    </div>
  </div>
  <a href="#111255" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#111255"> &para;</a><div class="date" title="2013-01-30 08:12"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111255">
<div class="phpcode"><code><span class="html">Simple function to get a string in form "filename: [class-&gt;][function(): ]"<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">get_caller_info</span><span class="keyword">() {<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$file </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$func </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$class </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />    if (isset(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])) {<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];<br />        </span><span class="default">$func </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];<br />        if ((</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) == </span><span class="string">'include'</span><span class="keyword">) || (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$func</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) == </span><span class="string">'require'</span><span class="keyword">)) {<br />            </span><span class="default">$func </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />        }<br />    } else if (isset(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];<br />        </span><span class="default">$func </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    }<br />    if (isset(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">])) {<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">];<br />        </span><span class="default">$func </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];<br />    } else if (isset(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">])) {<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">];<br />        </span><span class="default">$func </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];<br />        </span><span class="default">$file </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];<br />    }<br />    if (</span><span class="default">$file </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) </span><span class="default">$file </span><span class="keyword">= </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />    </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$file </span><span class="keyword">. </span><span class="string">": "</span><span class="keyword">;<br />    </span><span class="default">$c </span><span class="keyword">.= (</span><span class="default">$class </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) ? </span><span class="string">":" </span><span class="keyword">. </span><span class="default">$class </span><span class="keyword">. </span><span class="string">"-&gt;" </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">;<br />    </span><span class="default">$c </span><span class="keyword">.= (</span><span class="default">$func </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">) ? </span><span class="default">$func </span><span class="keyword">. </span><span class="string">"(): " </span><span class="keyword">: </span><span class="string">""</span><span class="keyword">;<br />    return(</span><span class="default">$c</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Usage like:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">debug</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">) {<br />    echo </span><span class="default">get_caller_info</span><span class="keyword">() . </span><span class="default">$str </span><span class="keyword">. </span><span class="string">"&lt;br&gt;\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />get_caller_info() will return info about the function /class-&gt;method that called debug().</span></code></div>
  </div>
 </div>
  <div class="note" id="110237">  <div class="votes">
    <div id="Vu110237">
    <a href="/manual/vote-note.php?id=110237&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110237">
    <a href="/manual/vote-note.php?id=110237&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110237" title="66% like this...">
    6
    </div>
  </div>
  <a href="#110237" class="name">
  <strong class="user"><em>d at rren dot me</em></strong></a><a class="genanchor" href="#110237"> &para;</a><div class="date" title="2012-10-04 07:35"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110237">
<div class="phpcode"><code><span class="html">Howdy guys, just a note really - The ['args'] data within the resulting array is supplied by reference. I found myself editing the reference unknowingly which in turn shows its ugly head further down the line if you call multiple backtrace.
<br />
<br /><span class="default">&lt;?php
<br />$trace </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());
<br />
<br /></span><span class="comment">// LOOP BACKTRACE
<br /></span><span class="default">$la </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br /></span><span class="default">$lb </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);
<br />while (</span><span class="default">$la</span><span class="keyword">&lt;</span><span class="default">$lb</span><span class="keyword">){
<br />
<br />    </span><span class="comment">// DATA FROM BACKTRACE
<br />    </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];
<br />    </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">];
<br />    </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">];
<br />    </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];
<br />    </span><span class="comment">// DATA FROM BACKTRACE
<br />
<br />    // LOOP ARGUMENTS ARRAY
<br />    </span><span class="default">$ba </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$bb </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">]);
<br />    while (</span><span class="default">$ba</span><span class="keyword">&lt;</span><span class="default">$bb</span><span class="keyword">){
<br />
<br />        </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$la</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">][</span><span class="default">$ba</span><span class="keyword">] = </span><span class="string">"EDITING A REFERENCE/POINTER"</span><span class="keyword">;
<br />
<br />        </span><span class="default">$ba</span><span class="keyword">++;
<br />    }
<br />    unset(</span><span class="default">$bb</span><span class="keyword">);
<br />    unset(</span><span class="default">$ba</span><span class="keyword">);
<br />    </span><span class="comment">// LOOP ARGUMENTS ARRAY
<br />
<br />    </span><span class="default">$la</span><span class="keyword">++;
<br />}
<br />unset(</span><span class="default">$lb</span><span class="keyword">);
<br />unset(</span><span class="default">$la</span><span class="keyword">);
<br /></span><span class="comment">// LOOP BACKTRACE
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113278">  <div class="votes">
    <div id="Vu113278">
    <a href="/manual/vote-note.php?id=113278&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113278">
    <a href="/manual/vote-note.php?id=113278&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113278" title="66% like this...">
    3
    </div>
  </div>
  <a href="#113278" class="name">
  <strong class="user"><em>jonas at faceways dot se</em></strong></a><a class="genanchor" href="#113278"> &para;</a><div class="date" title="2013-09-20 07:41"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113278">
<div class="phpcode"><code><span class="html">When using debug_backtrace() to check if you're being accessed from another caller, please remember to ask debug_backtrace to only go as far as needed in depth and skip taking the entire debug object as return parameter:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">(</span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">)) == </span><span class="default">0</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// Do something<br />    </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115942">  <div class="votes">
    <div id="Vu115942">
    <a href="/manual/vote-note.php?id=115942&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115942">
    <a href="/manual/vote-note.php?id=115942&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115942" title="66% like this...">
    2
    </div>
  </div>
  <a href="#115942" class="name">
  <strong class="user"><em>anoam at yandex dot ru</em></strong></a><a class="genanchor" href="#115942"> &para;</a><div class="date" title="2014-10-17 08:12"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115942">
<div class="phpcode"><code><span class="html">It works a little bit different with resources in different PHP versions.<br /><br />For example:<br />function foo($bar)<br />{<br />  return debug_backtrace();<br />}<br /><br />$resource = fopen(__FILE__, 'r');<br />$backtrace = foo($resource);<br />echo "when resource is opened: " . gettype($backtrace[0]['args'][0]) . "\n";<br />fclose($resource);<br />echo "when resource is closed: " . gettype($backtrace[0]['args'][0]) . "\n";<br /><br />With 5.3.10 I got:<br />when resource is opened: resource<br />when resource is closed: resource<br /><br />With 5.5.9:<br />when resource is opened: resource<br />when resource is closed: unknown type<br /><br />Be carefull.</span></code></div>
  </div>
 </div>
  <div class="note" id="72534">  <div class="votes">
    <div id="Vu72534">
    <a href="/manual/vote-note.php?id=72534&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72534">
    <a href="/manual/vote-note.php?id=72534&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72534" title="66% like this...">
    1
    </div>
  </div>
  <a href="#72534" class="name">
  <strong class="user"><em>kroczu AT interia DOT pl</em></strong></a><a class="genanchor" href="#72534"> &para;</a><div class="date" title="2007-01-23 10:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72534">
<div class="phpcode"><code><span class="html">&lt;?<br />// useful and comfortable debug function<br />// it's show memory usage and time flow between calls, so we can quickly find a block of code that need optimisation...<br />// example result:<br />/*<br />debug example.php&gt; initialize<br />debug example.php&gt; code-lines: 39-41 time: 2.0002 mem: 19 KB<br />debug example.php&gt; code-lines: 41-44 time: 0.0000 mem: 19 KB<br />debug example.php&gt; code-lines: 44-51 time: 0.6343 mem: 9117 KB<br />debug example.php&gt; code-lines: 51-53 time: 0.1003 mem: 9117 KB<br />debug example.php&gt; code-lines: 53-55 time: 0.0595 mem: 49 KB<br /> */<br /><br />function debug()<br />{<br />   static $start_time = NULL;<br />   static $start_code_line = 0;<br /><br />   $call_info = array_shift( debug_backtrace() );<br />   $code_line = $call_info['line'];<br />   $file = array_pop( explode('/', $call_info['file']));<br /><br />   if( $start_time === NULL )<br />   {<br />       print "debug ".$file."&gt; initialize\n";<br />       $start_time = time() + microtime();<br />       $start_code_line = $code_line;<br />       return 0;<br />   }<br /><br />   printf("debug %s&gt; code-lines: %d-%d time: %.4f mem: %d KB\n", $file, $start_code_line, $code_line, (time() + microtime() - $start_time), ceil( memory_get_usage()/1024));<br />   $start_time = time() + microtime();<br />   $start_code_line = $code_line;<br />}<br /><br />////////////////////////////////////////////////<br />// example:<br /><br />debug();<br />sleep(2);<br />debug();<br />// soft-code...<br />$a = 3 + 5;<br />debug();<br /><br />// hard-code<br />for( $i=0; $i&lt;100000; $i++)<br />{<br />    $dummy['alamakota'.$i] = 'alamakota'.$i;<br />}<br />debug();<br />usleep(100000);<br />debug();<br />unset($dummy);<br />debug();<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="71770">  <div class="votes">
    <div id="Vu71770">
    <a href="/manual/vote-note.php?id=71770&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71770">
    <a href="/manual/vote-note.php?id=71770&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71770" title="66% like this...">
    1
    </div>
  </div>
  <a href="#71770" class="name">
  <strong class="user"><em>seaside dot ki at mac dot com</em></strong></a><a class="genanchor" href="#71770"> &para;</a><div class="date" title="2006-12-14 04:20"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71770">
<div class="phpcode"><code><span class="html">I've started creating an external debug server for PHP. A PHP app require_once's a TADebugger(), which communicates with the debug sever. Find the OS X universal binary here [PHP source sample included]:<br /><br />   <a href="http://www.turingart.com/downloads/phpDebugger.zip" rel="nofollow" target="_blank">http://www.turingart.com/downloads/phpDebugger.zip</a><br /><br />Currently, TADebugger allows to post these properties back to the debug server:<br /><br />- Call backtraces<br />- String messages<br />- Source files, which were referenced by a backtrace call<br /><br />Note, that the binary is a early version.</span></code></div>
  </div>
 </div>
  <div class="note" id="68850">  <div class="votes">
    <div id="Vu68850">
    <a href="/manual/vote-note.php?id=68850&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68850">
    <a href="/manual/vote-note.php?id=68850&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68850" title="66% like this...">
    1
    </div>
  </div>
  <a href="#68850" class="name">
  <strong class="user"><em>admin at sgssweb dot com</em></strong></a><a class="genanchor" href="#68850"> &para;</a><div class="date" title="2006-08-13 02:30"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68850">
<div class="phpcode"><code><span class="html">Surprizingly, debug_backtrace() cannot aquire arguments from the function that is used as the second or later argument of a function.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">a</span><span class="keyword">(</span><span class="default">$p</span><span class="keyword">) {<br />    </span><span class="default">$backtrace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />    <br />    if (isset(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">]))<br />        </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$backtrace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'args'</span><span class="keyword">]);<br />    else<br />        echo </span><span class="string">"Cannot aquire arguments"</span><span class="keyword">;<br />    echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    <br />    return </span><span class="default">$p</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">b</span><span class="keyword">(</span><span class="default">$p1</span><span class="keyword">, </span><span class="default">$p2</span><span class="keyword">, </span><span class="default">$p3</span><span class="keyword">) {<br />    echo </span><span class="string">"</span><span class="default">$p1</span><span class="string">, </span><span class="default">$p2</span><span class="string">, </span><span class="default">$p3</span><span class="string">"</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// This outputs:<br />//    array ( 0 =&gt; 'First a', )<br />//    Cannot aquire arguments<br />//    Cannot aquire arguments<br />//    First a, Second a, Third a<br /></span><span class="default">b</span><span class="keyword">(</span><span class="default">a</span><span class="keyword">(</span><span class="string">"First a"</span><span class="keyword">), </span><span class="default">a</span><span class="keyword">(</span><span class="string">"Second a"</span><span class="keyword">), </span><span class="default">a</span><span class="keyword">(</span><span class="string">"Third a"</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124286">  <div class="votes">
    <div id="Vu124286">
    <a href="/manual/vote-note.php?id=124286&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124286">
    <a href="/manual/vote-note.php?id=124286&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124286" title="63% like this...">
    3
    </div>
  </div>
  <a href="#124286" class="name">
  <strong class="user"><em>jcmargentina at gmail dot com</em></strong></a><a class="genanchor" href="#124286"> &para;</a><div class="date" title="2019-10-11 06:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124286">
<div class="phpcode"><code><span class="html">I want to point out that debug_backtrace() in new versions of php can detect recursion // circular references .. avoiding memory consumption.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">ParentClass </span><span class="keyword">{<br />        public function </span><span class="default">__construct</span><span class="keyword">() <br />        {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_child </span><span class="keyword">= new </span><span class="default">ChildClass</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);<br />                </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());<br />        }<br />}<br /><br />class </span><span class="default">ChildClass </span><span class="keyword">{<br />        public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">ParentClass $p</span><span class="keyword">)<br />        {<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_parent </span><span class="keyword">= </span><span class="default">$p</span><span class="keyword">;<br />        }<br />}<br /><br /></span><span class="default">$test </span><span class="keyword">= new </span><span class="default">ParentClass</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />array(1) {<br />  [0]=&gt;<br />  array(7) {<br />    ["file"]=&gt;<br />    string(23) "/home/jcm/testdebug.php"<br />    ["line"]=&gt;<br />    int(18)<br />    ["function"]=&gt;<br />    string(11) "__construct"<br />    ["class"]=&gt;<br />    string(11) "ParentClass"<br />    ["object"]=&gt;<br />    object(ParentClass)#1 (1) {<br />      ["_child"]=&gt;<br />      object(ChildClass)#2 (1) {<br />        ["_parent"]=&gt;<br />        *RECURSION*<br />      }<br />    }<br />    ["type"]=&gt;<br />    string(2) "-&gt;"<br />    ["args"]=&gt;<br />    array(0) {<br />    }<br />  }<br />}<br /><br />Attention in the *RECURSION* hint provided</span></code></div>
  </div>
 </div>
  <div class="note" id="99796">  <div class="votes">
    <div id="Vu99796">
    <a href="/manual/vote-note.php?id=99796&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99796">
    <a href="/manual/vote-note.php?id=99796&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99796" title="61% like this...">
    7
    </div>
  </div>
  <a href="#99796" class="name">
  <strong class="user"><em>kenorb at gmail dot com</em></strong></a><a class="genanchor" href="#99796"> &para;</a><div class="date" title="2010-09-07 07:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99796">
<div class="phpcode"><code><span class="html">One line of code to print simplest and shortest human readable backtrace:)<br /><span class="default">&lt;?php<br />array_walk</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">(),</span><span class="default">create_function</span><span class="keyword">(</span><span class="string">'$a,$b'</span><span class="keyword">,</span><span class="string">'print "{$a[\'function\']}()(".basename($a[\'file\']).":{$a[\'line\']}); ";'</span><span class="keyword">));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123675">  <div class="votes">
    <div id="Vu123675">
    <a href="/manual/vote-note.php?id=123675&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123675">
    <a href="/manual/vote-note.php?id=123675&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123675" title="60% like this...">
    1
    </div>
  </div>
  <a href="#123675" class="name">
  <strong class="user"><em>jake at qzdesign dot co dot uk</em></strong></a><a class="genanchor" href="#123675"> &para;</a><div class="date" title="2019-03-09 09:19"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123675">
<div class="phpcode"><code><span class="html">The `args` element contains only the arguments actually passed to the function or method.  It does not include default parameters if they were not explicitly specified.  (A least, this is the case with PHP 7.1.9.)  This is consistent with the behaviour of `func_get_args()`.</span></code></div>
  </div>
 </div>
  <div class="note" id="111581">  <div class="votes">
    <div id="Vu111581">
    <a href="/manual/vote-note.php?id=111581&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111581">
    <a href="/manual/vote-note.php?id=111581&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111581" title="57% like this...">
    2
    </div>
  </div>
  <a href="#111581" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#111581"> &para;</a><div class="date" title="2013-03-06 09:01"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111581">
<div class="phpcode"><code><span class="html">A usual entry looks like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">array(</span><span class="default">6</span><span class="keyword">) {<br />  </span><span class="string">'file' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">87</span><span class="keyword">) </span><span class="string">"DbSelector.php"<br />  'line' </span><span class="keyword">=&gt;<br />  </span><span class="default">int</span><span class="keyword">(</span><span class="default">171</span><span class="keyword">)<br />  </span><span class="string">'function' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">) </span><span class="string">"error"<br />  'class' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">42</span><span class="keyword">) </span><span class="string">"LoggingService"<br />  'type' </span><span class="keyword">=&gt;<br />  </span><span class="default">string</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">) </span><span class="string">"::"<br />  'args' </span><span class="keyword">=&gt;<br />  array(</span><span class="default">1</span><span class="keyword">) {<br />    [</span><span class="default">0</span><span class="keyword">] =&gt;<br />    </span><span class="default">string</span><span class="keyword">(</span><span class="default">27</span><span class="keyword">) </span><span class="string">"Connecting to DB: unittests"<br />  </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Be warned though that 'file' and 'class' do not reference the same thing!<br />'file' means which file calls the next step.<br />'class' is the next step being called.<br /><br />So 'file' is the caller, 'class' is the callee.</span></code></div>
  </div>
 </div>
  <div class="note" id="98909">  <div class="votes">
    <div id="Vu98909">
    <a href="/manual/vote-note.php?id=98909&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98909">
    <a href="/manual/vote-note.php?id=98909&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98909" title="57% like this...">
    1
    </div>
  </div>
  <a href="#98909" class="name">
  <strong class="user"><em>jlammertink at gmail dot com</em></strong></a><a class="genanchor" href="#98909"> &para;</a><div class="date" title="2010-07-15 02:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98909">
<div class="phpcode"><code><span class="html">I use this simple but effective function so i can see which method in the child class called the current method (in the parent class).
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">get_caller_method</span><span class="keyword">()
<br />{
<br />    </span><span class="default">$traces </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();
<br />
<br />    if (isset(</span><span class="default">$traces</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]))
<br />    {
<br />        return </span><span class="default">$traces</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">];
<br />    }
<br />
<br />    return </span><span class="default">null</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111355">  <div class="votes">
    <div id="Vu111355">
    <a href="/manual/vote-note.php?id=111355&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111355">
    <a href="/manual/vote-note.php?id=111355&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111355" title="54% like this...">
    1
    </div>
  </div>
  <a href="#111355" class="name">
  <strong class="user"><em>Gemorroj</em></strong></a><a class="genanchor" href="#111355"> &para;</a><div class="date" title="2013-02-11 09:58"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111355">
<div class="phpcode"><code><span class="html">Another variation formatting backtrace.
<br />Parameter $ignore to ignore the extra calls.
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> * Getting backtrace
<br /> *
<br /> * @param int $ignore ignore calls
<br /> *
<br /> * @return string
<br /> */
<br /></span><span class="keyword">protected function </span><span class="default">getBacktrace</span><span class="keyword">(</span><span class="default">$ignore </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    foreach (</span><span class="default">debug_backtrace</span><span class="keyword">() as </span><span class="default">$k </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {
<br />        if (</span><span class="default">$k </span><span class="keyword">&lt; </span><span class="default">$ignore</span><span class="keyword">) {
<br />            continue;
<br />        }
<br />
<br />        </span><span class="default">array_walk</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">], function (&amp;</span><span class="default">$item</span><span class="keyword">, </span><span class="default">$key</span><span class="keyword">) {
<br />            </span><span class="default">$item </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$item</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />        });
<br />
<br />        </span><span class="default">$trace </span><span class="keyword">.= </span><span class="string">'#' </span><span class="keyword">. (</span><span class="default">$k </span><span class="keyword">- </span><span class="default">$ignore</span><span class="keyword">) . </span><span class="string">' ' </span><span class="keyword">. </span><span class="default">$v</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">] . </span><span class="string">'(' </span><span class="keyword">. </span><span class="default">$v</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] . </span><span class="string">'): ' </span><span class="keyword">. (isset(</span><span class="default">$v</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">]) ? </span><span class="default">$v</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">] . </span><span class="string">'-&gt;' </span><span class="keyword">: </span><span class="string">''</span><span class="keyword">) . </span><span class="default">$v</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] . </span><span class="string">'(' </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">', '</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">]) . </span><span class="string">')' </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />    }
<br />
<br />    return </span><span class="default">$trace</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110066">  <div class="votes">
    <div id="Vu110066">
    <a href="/manual/vote-note.php?id=110066&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110066">
    <a href="/manual/vote-note.php?id=110066&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110066" title="51% like this...">
    1
    </div>
  </div>
  <a href="#110066" class="name">
  <strong class="user"><em>kexianbin at diyism dot com</em></strong></a><a class="genanchor" href="#110066"> &para;</a><div class="date" title="2012-09-16 02:26"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom110066">
<div class="phpcode"><code><span class="html">need no Xdebug or dbg.so on server, return more detailed message:<br /><br />diyism_trace.php:<br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="default">TRACES_MODE</span><span class="keyword">, </span><span class="string">'TEXTAREA'</span><span class="keyword">);</span><span class="comment">//'TEXTAREA' or 'FIREPHP'<br /></span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces.pre'</span><span class="keyword">]=array();<br />function </span><span class="default">my_array_diff</span><span class="keyword">(</span><span class="default">$arr1</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">)<br />         {foreach (</span><span class="default">$arr1 </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)<br />                  {if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">, </span><span class="default">$arr2</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">))<br />                      {unset(</span><span class="default">$arr1</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />                      }<br />                  }<br />          return </span><span class="default">$arr1</span><span class="keyword">;<br />         }<br />function </span><span class="default">my_var_export</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">$is_str</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">)<br />         {</span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/Array\s+\(/'</span><span class="keyword">, </span><span class="string">'/\[(\d+)\] =&gt; (.*)\n/'</span><span class="keyword">, </span><span class="string">'/\[([^\d].*)\] =&gt; (.*)\n/'</span><span class="keyword">), array(</span><span class="string">'array ('</span><span class="keyword">, </span><span class="string">'\1 =&gt; \'\2\''</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">'\'\1\' =&gt; \'\2\''</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">), </span><span class="default">substr</span><span class="keyword">(</span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">), </span><span class="default">0</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">));<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$rtn</span><span class="keyword">, array(</span><span class="string">"=&gt; 'array ('"</span><span class="keyword">=&gt;</span><span class="string">'=&gt; array ('</span><span class="keyword">));<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$rtn</span><span class="keyword">, array(</span><span class="string">")\n\n"</span><span class="keyword">=&gt;</span><span class="string">")\n"</span><span class="keyword">));<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$rtn</span><span class="keyword">, array(</span><span class="string">"'\n"</span><span class="keyword">=&gt;</span><span class="string">"',\n"</span><span class="keyword">, </span><span class="string">")\n"</span><span class="keyword">=&gt;</span><span class="string">"),\n"</span><span class="keyword">));<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/\n +/e'</span><span class="keyword">), array(</span><span class="string">'strtr(\'\0\', array(\'    \'=&gt;\'  \'))'</span><span class="keyword">), </span><span class="default">$rtn</span><span class="keyword">);<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$rtn</span><span class="keyword">, array(</span><span class="string">" Object',"</span><span class="keyword">=&gt;</span><span class="string">" Object'&lt;-"</span><span class="keyword">));<br />          if (</span><span class="default">$is_str</span><span class="keyword">)<br />             {return </span><span class="default">$rtn</span><span class="keyword">;<br />             }<br />          else<br />              {echo </span><span class="default">$rtn</span><span class="keyword">;<br />              }<br />         }<br />function </span><span class="default">tick_handler</span><span class="keyword">()<br />         {</span><span class="default">$tmp</span><span class="keyword">=</span><span class="default">debug_backtrace</span><span class="keyword">();<br />          </span><span class="default">$trace</span><span class="keyword">=</span><span class="default">my_array_diff</span><span class="keyword">(</span><span class="default">$tmp</span><span class="keyword">, </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces.pre'</span><span class="keyword">]);<br />          </span><span class="comment">//echo '&lt;pre&gt;';var_export($trace);echo '&lt;/pre&gt;';echo '&lt;br/&gt;'; //for debug diyism_trace.php<br />          </span><span class="default">$trace</span><span class="keyword">=</span><span class="default">array_values</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);<br />          </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces.pre'</span><span class="keyword">]=</span><span class="default">$tmp</span><span class="keyword">;<br />          if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">)&gt;</span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'/'</span><span class="keyword">.@</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">]!==@</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">][</span><span class="default">count</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">])-</span><span class="default">1</span><span class="keyword">][</span><span class="string">'key'</span><span class="keyword">]) </span><span class="comment">//filter empty array and rearrange array_values(), because some lines will trigger two tick events per line, for example: 1.last line is "some code;questmark&gt;" 2.error_reporting(...<br />             </span><span class="keyword">{for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&gt;=</span><span class="default">0</span><span class="keyword">; --</span><span class="default">$i</span><span class="keyword">)<br />                  {</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">][]=</span><span class="default">$tmp_fb</span><span class="keyword">=</span><span class="default">array_merge</span><span class="keyword">(array(</span><span class="string">'key'</span><span class="keyword">=&gt;</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">'/'</span><span class="keyword">.@</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">]), </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], array(</span><span class="string">'function'</span><span class="keyword">=&gt;</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">], array(</span><span class="string">'tick_handler'</span><span class="keyword">=&gt;</span><span class="string">'CONTINUE'</span><span class="keyword">)), </span><span class="string">'in_function'</span><span class="keyword">=&gt;@</span><span class="default">$tmp</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">][</span><span class="string">'function'</span><span class="keyword">]));<br />                   </span><span class="default">TRACES_MODE</span><span class="keyword">===</span><span class="string">'FIREPHP'</span><span class="keyword">?</span><span class="default">fb</span><span class="keyword">(</span><span class="default">trace_output</span><span class="keyword">(</span><span class="default">$tmp_fb</span><span class="keyword">), </span><span class="string">'diyism_trace:'</span><span class="keyword">.++</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'diyism_trace_no'</span><span class="keyword">]):</span><span class="string">''</span><span class="keyword">;<br />                  }<br />             }<br />         }<br />function </span><span class="default">trace_output</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">)<br />         {</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'in_function'</span><span class="keyword">]=</span><span class="default">strtr</span><span class="keyword">(@</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'in_function'</span><span class="keyword">], array(</span><span class="string">'require'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">, </span><span class="string">'require_once'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">, </span><span class="string">'include'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">, </span><span class="string">'include_once'</span><span class="keyword">=&gt;</span><span class="string">''</span><span class="keyword">));<br />          </span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">]=</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">]?</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/\n +/'</span><span class="keyword">), array(</span><span class="string">''</span><span class="keyword">), </span><span class="default">preg_replace</span><span class="keyword">(array(</span><span class="string">'/\n  \d+ =&gt; /'</span><span class="keyword">), array(</span><span class="string">''</span><span class="keyword">), </span><span class="default">substr</span><span class="keyword">(</span><span class="default">my_var_export</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">], </span><span class="default">true</span><span class="keyword">), </span><span class="default">7</span><span class="keyword">, -</span><span class="default">3</span><span class="keyword">))), array(</span><span class="string">"\r"</span><span class="keyword">=&gt;</span><span class="string">'\r'</span><span class="keyword">, </span><span class="string">"\n"</span><span class="keyword">=&gt;</span><span class="string">'\n'</span><span class="keyword">)):</span><span class="string">''</span><span class="keyword">;<br />          return </span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].(</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'in_function'</span><span class="keyword">]?</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'in_function'</span><span class="keyword">].</span><span class="string">'()'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">).</span><span class="string">'/'</span><span class="keyword">.</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">].</span><span class="string">': '</span><span class="keyword">.</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">].</span><span class="string">'('</span><span class="keyword">.</span><span class="default">$trace</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">].</span><span class="string">')'</span><span class="keyword">;<br />         }<br />function </span><span class="default">traces_output</span><span class="keyword">()<br />         {echo </span><span class="string">'&lt;textarea style="width:100%;height:300px;"&gt;'</span><span class="keyword">;<br />          </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">]=</span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">], </span><span class="default">2</span><span class="keyword">);</span><span class="comment">//remove registering tick line and requiring 'diyism_trace.php' line<br />          </span><span class="keyword">foreach (</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">'traces'</span><span class="keyword">] as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$trace</span><span class="keyword">)<br />                  {echo </span><span class="default">htmlentities</span><span class="keyword">(</span><span class="default">$k</span><span class="keyword">.</span><span class="string">':'</span><span class="keyword">.</span><span class="default">trace_output</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">);<br />                  }<br />          echo </span><span class="string">'&lt;/textarea&gt;'</span><span class="keyword">;<br />         }<br /></span><span class="default">register_tick_function</span><span class="keyword">(</span><span class="string">'tick_handler'</span><span class="keyword">);<br /></span><span class="default">TRACES_MODE</span><span class="keyword">===</span><span class="string">'TEXTAREA'</span><span class="keyword">?</span><span class="default">register_shutdown_function</span><span class="keyword">(</span><span class="string">'traces_output'</span><span class="keyword">):</span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />test.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />require </span><span class="string">'diyism_trace.php'</span><span class="keyword">;<br /><br /></span><span class="default">a</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">, array(</span><span class="string">'hello'</span><span class="keyword">));<br /></span><span class="default">1</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">b</span><span class="keyword">();<br />function </span><span class="default">a</span><span class="keyword">()<br />         {</span><span class="default">$d</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br />          </span><span class="default">b</span><span class="keyword">();<br />          </span><span class="default">$d</span><span class="keyword">=</span><span class="default">2</span><span class="keyword">;<br />         }<br />function </span><span class="default">b</span><span class="keyword">()<br />         {</span><span class="default">1</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">;<br />         }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128733">  <div class="votes">
    <div id="Vu128733">
    <a href="/manual/vote-note.php?id=128733&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128733">
    <a href="/manual/vote-note.php?id=128733&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128733" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128733" class="name">
  <strong class="user"><em>liam at N0SPAM dot boxclever dot ca</em></strong></a><a class="genanchor" href="#128733"> &para;</a><div class="date" title="2023-07-13 03:59"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128733">
<div class="phpcode"><code><span class="html">Options provided by bitmask parameters can be disabled using !<br /><br /><span class="default">&lt;?php<br />debug_backtrace</span><span class="keyword">( !</span><span class="default">DEBUG_BACKTRACE_PROVIDE_OBJECT </span><span class="keyword">| </span><span class="default">DEBUG_BACKTRACE_IGNORE_ARGS</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="99752">  <div class="votes">
    <div id="Vu99752">
    <a href="/manual/vote-note.php?id=99752&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99752">
    <a href="/manual/vote-note.php?id=99752&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99752" title="100% like this...">
    2
    </div>
  </div>
  <a href="#99752" class="name">
  <strong class="user"><em>php noob</em></strong></a><a class="genanchor" href="#99752"> &para;</a><div class="date" title="2010-09-02 08:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99752">
<div class="phpcode"><code><span class="html">Surprisingly, no one has described one of the best uses of this: dumping a variable and showing the location. When debugging, especially a big and unfamiliar system, it's a pain remembering where I added those var dumps. Also, this way there is a separator between multiple dump calls.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">dump</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">) {<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">var_export</span><span class="keyword">( </span><span class="default">$var</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    </span><span class="default">$loc </span><span class="keyword">= </span><span class="default">whereCalled</span><span class="keyword">();<br />    return </span><span class="string">"\n&lt;pre&gt;Dump: </span><span class="default">$loc</span><span class="string">\n</span><span class="default">$result</span><span class="string">&lt;/pre&gt;"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">whereCalled</span><span class="keyword">( </span><span class="default">$level </span><span class="keyword">= </span><span class="default">1 </span><span class="keyword">) {<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />    </span><span class="default">$file   </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$level</span><span class="keyword">][</span><span class="string">'file'</span><span class="keyword">];<br />    </span><span class="default">$line   </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$level</span><span class="keyword">][</span><span class="string">'line'</span><span class="keyword">];<br />    </span><span class="default">$object </span><span class="keyword">= </span><span class="default">$trace</span><span class="keyword">[</span><span class="default">$level</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">];<br />    if (</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">)) { </span><span class="default">$object </span><span class="keyword">= </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">); }<br /><br />    return </span><span class="string">"Where called: line </span><span class="default">$line</span><span class="string"> of </span><span class="default">$object</span><span class="string"> \n(in </span><span class="default">$file</span><span class="string">)"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />In addition, calling 'whereCalled()' from any function will quickly identify locations that are doing something unexpected (e.g., updating a property at the wrong time). I'm new to PHP, but have used the equivalent in Perl for years.</span></code></div>
  </div>
 </div>
  <div class="note" id="111264">  <div class="votes">
    <div id="Vu111264">
    <a href="/manual/vote-note.php?id=111264&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111264">
    <a href="/manual/vote-note.php?id=111264&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111264" title="50% like this...">
    0
    </div>
  </div>
  <a href="#111264" class="name">
  <strong class="user"><em>nyoung55 at that_google_mail.com</em></strong></a><a class="genanchor" href="#111264"> &para;</a><div class="date" title="2013-01-31 04:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111264">
<div class="phpcode"><code><span class="html">Here is a function to cleanly output the debug_backtrace to the error_log
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/*
<br /> * Send the output from a backtrace to the error_log
<br /> * @param string $message Optional message that will be sent the the error_log before the backtrace
<br /> */
<br /></span><span class="keyword">function </span><span class="default">log_trace</span><span class="keyword">(</span><span class="default">$message </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">) {
<br />    </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();
<br />    if (</span><span class="default">$message</span><span class="keyword">) {
<br />        </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">$caller </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$trace</span><span class="keyword">);
<br />    </span><span class="default">$function_name </span><span class="keyword">= </span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">];
<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%s: Called from %s:%s'</span><span class="keyword">, </span><span class="default">$function_name</span><span class="keyword">, </span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$caller</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]));
<br />    foreach (</span><span class="default">$trace </span><span class="keyword">as </span><span class="default">$entry_id </span><span class="keyword">=&gt; </span><span class="default">$entry</span><span class="keyword">) {
<br />        </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">] ? : </span><span class="string">'-'</span><span class="keyword">;
<br />        </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] = </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">] ? : </span><span class="string">'-'</span><span class="keyword">;
<br />        if (empty(</span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">])) {
<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%s %3s. %s() %s:%s'</span><span class="keyword">, </span><span class="default">$function_name</span><span class="keyword">, </span><span class="default">$entry_id </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">], </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]));
<br />        } else {
<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%s %3s. %s-&gt;%s() %s:%s'</span><span class="keyword">, </span><span class="default">$function_name</span><span class="keyword">, </span><span class="default">$entry_id </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">], </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">], </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">], </span><span class="default">$entry</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]));
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75892">  <div class="votes">
    <div id="Vu75892">
    <a href="/manual/vote-note.php?id=75892&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75892">
    <a href="/manual/vote-note.php?id=75892&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75892" title="100% like this...">
    2
    </div>
  </div>
  <a href="#75892" class="name">
  <strong class="user"><em>php at kennel17 dot co dot uk</em></strong></a><a class="genanchor" href="#75892"> &para;</a><div class="date" title="2007-06-20 09:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75892">
<div class="phpcode"><code><span class="html">Further to my previous note, the 'object' element of the array can be used to get the parent object.  So changing the get_class_static() function to the following will make the code behave as expected:<br /><br /><span class="default">&lt;?php<br />    </span><span class="keyword">function </span><span class="default">get_class_static</span><span class="keyword">() {<br />        </span><span class="default">$bt </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />    <br />        if (isset(</span><span class="default">$bt</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]))<br />            return </span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$bt</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]);<br />        else<br />            return </span><span class="default">$bt</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'class'</span><span class="keyword">];<br />    }<br /></span><span class="default">?&gt;<br /></span><br />HOWEVER, it still fails when being called statically.  Changing the last two lines of my previous example to<br /><br /><span class="default">&lt;?php<br />  foo</span><span class="keyword">::</span><span class="default">printClassName</span><span class="keyword">();<br />  </span><span class="default">bar</span><span class="keyword">::</span><span class="default">printClassName</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />...still gives the same problematic result in PHP5, but in this case the 'object' property is not set, so that technique is unavailable.</span></code></div>
  </div>
 </div>
  <div class="note" id="96418">  <div class="votes">
    <div id="Vu96418">
    <a href="/manual/vote-note.php?id=96418&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96418">
    <a href="/manual/vote-note.php?id=96418&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96418" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96418" class="name">
  <strong class="user"><em>john dot risken at gmail dot com</em></strong></a><a class="genanchor" href="#96418"> &para;</a><div class="date" title="2010-02-25 10:02"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96418">
<div class="phpcode"><code><span class="html">Everybody seems to have their favorite use.  I substitute this function for die().  It gives a message 
<br />to the user and emails me a PrettyPrint of what went wrong.  $info is set by me, 
<br />and it does a special check in the database object.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// var_format
<br />
<br /></span><span class="keyword">function </span><span class="default">var_format</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">) </span><span class="comment">// pretty-print var_export
<br /></span><span class="keyword">{
<br />    return (</span><span class="default">str_replace</span><span class="keyword">(array(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="string">"array"</span><span class="keyword">),
<br />array(</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,</span><span class="string">"&amp;nbsp;"</span><span class="keyword">,</span><span class="string">"&amp;nbsp;&lt;i&gt;array&lt;/i&gt;"</span><span class="keyword">),
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">,</span><span class="default">true</span><span class="keyword">)).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">);
<br />}
<br />function </span><span class="default">myDie</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">) 
<br />{
<br />    </span><span class="default">$mysqlerr</span><span class="keyword">=</span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">,</span><span class="string">"ERROR=You have an error in your SQL syntax"</span><span class="keyword">);
<br />    if(</span><span class="default">$mysqlerr</span><span class="keyword">&gt;</span><span class="default">0</span><span class="keyword">)</span><span class="default">$info</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">$mysqlerr</span><span class="keyword">).</span><span class="string">" mySql format error"</span><span class="keyword">;
<br />    </span><span class="default">$out</span><span class="keyword">=</span><span class="string">"&lt;br&gt;MSG='</span><span class="default">$info</span><span class="string">'&lt;br&gt;"</span><span class="keyword">.</span><span class="default">var_format</span><span class="keyword">(</span><span class="default">$_REQUEST</span><span class="keyword">).</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;
<br />    </span><span class="default">$bt</span><span class="keyword">=</span><span class="default">debug_backtrace</span><span class="keyword">();
<br />    </span><span class="default">$sp</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />    </span><span class="default">$trace</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;
<br />    foreach(</span><span class="default">$bt </span><span class="keyword">as </span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$v</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">extract</span><span class="keyword">(</span><span class="default">$v</span><span class="keyword">);
<br />        </span><span class="default">$file</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">+</span><span class="default">strrpos</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">,</span><span class="string">"/"</span><span class="keyword">));
<br />        if(</span><span class="default">$file</span><span class="keyword">==</span><span class="string">"db.php"</span><span class="keyword">)continue; </span><span class="comment">// the db object
<br />        </span><span class="default">$trace</span><span class="keyword">.=</span><span class="default">str_repeat</span><span class="keyword">(</span><span class="string">"&amp;nbsp;"</span><span class="keyword">,++</span><span class="default">$sp</span><span class="keyword">); </span><span class="comment">//spaces(++$sp);
<br />        </span><span class="default">$trace</span><span class="keyword">.=</span><span class="string">"file=</span><span class="default">$file</span><span class="string">, line=</span><span class="default">$line</span><span class="string">, function=</span><span class="default">$function</span><span class="string">&lt;br&gt;"</span><span class="keyword">;        
<br />    } 
<br />    </span><span class="default">$out</span><span class="keyword">.=</span><span class="string">"&lt;br&gt;"</span><span class="keyword">.</span><span class="default">backTrace</span><span class="keyword">();
<br />    if(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$info</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">)==</span><span class="string">"XXX "</span><span class="keyword">) </span><span class="comment">// special errrors when db is inaccessible
<br />    </span><span class="keyword">{
<br />        </span><span class="default">$out</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />        </span><span class="default">$out</span><span class="keyword">=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"&amp;nbsp;"</span><span class="keyword">,</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />        </span><span class="default">mail</span><span class="keyword">(</span><span class="string">"me@example.com"</span><span class="keyword">,</span><span class="string">"Database Execution Error for user "</span><span class="keyword">.</span><span class="default">$REMOTE_ADDR</span><span class="keyword">,</span><span class="string">"</span><span class="default">$out</span><span class="string">"</span><span class="keyword">);
<br />        exit(</span><span class="string">"Database Access Error. Please try again later."</span><span class="keyword">);
<br />    }
<br />    </span><span class="default">mail</span><span class="keyword">(</span><span class="string">"me@example.com"</span><span class="keyword">,</span><span class="string">'Error Monitor'</span><span class="keyword">,</span><span class="string">'Execution Error'</span><span class="keyword">,</span><span class="default">$out</span><span class="keyword">);
<br />    exit(</span><span class="string">"DANG! An execution error in the program has been sent to the webmaster. 
<br />If you don't get an email from him soon, please call him."</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />This produces an output like this
<br />
<br /> file=badmode.php, line=5, function=backTrace
<br />  file=login.php, line=209, function=require
<br />   file=midScreen.php, line=264, function=require
<br />    file=masterindex.php, line=161, function=require
<br />     file=production2.php, line=121, function=require
<br />      file=index.php, line=16, function=require</span></code></div>
  </div>
 </div>
  <div class="note" id="83033">  <div class="votes">
    <div id="Vu83033">
    <a href="/manual/vote-note.php?id=83033&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83033">
    <a href="/manual/vote-note.php?id=83033&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83033" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83033" class="name">
  <strong class="user"><em>frank at frank dot com</em></strong></a><a class="genanchor" href="#83033"> &para;</a><div class="date" title="2008-05-07 11:12"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83033">
<div class="phpcode"><code><span class="html">Here is my simple example:<br />Code printing variable of class which instatiates the printing class.<br /><br />Well, I am sure you understand when looking at the code:<br />Print result is: jippii<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A </span><span class="keyword">{<br /><br />        function </span><span class="default">something</span><span class="keyword">() {<br />                </span><span class="default">$s </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />                <br />                </span><span class="default">$callingObject </span><span class="keyword">= </span><span class="default">$s</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">][</span><span class="string">'object'</span><span class="keyword">]; <br />                </span><span class="default">$test </span><span class="keyword">= </span><span class="default">$callingObject</span><span class="keyword">-&gt;</span><span class="default">jip</span><span class="keyword">;<br />                print </span><span class="default">$test</span><span class="keyword">;<br />        }<br /><br />}<br /><br />class </span><span class="default">B </span><span class="keyword">{<br />      var </span><span class="default">$jip</span><span class="keyword">; <br />      <br />        function </span><span class="default">execute</span><span class="keyword">() {<br />                </span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">jip </span><span class="keyword">= </span><span class="string">"jippii"</span><span class="keyword">;  <br />                </span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">something</span><span class="keyword">(); <br />        }<br /><br />}<br /></span><span class="default">$control </span><span class="keyword">= new </span><span class="default">B</span><span class="keyword">();<br /></span><span class="default">$control</span><span class="keyword">-&gt;</span><span class="default">execute</span><span class="keyword">();<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81013">  <div class="votes">
    <div id="Vu81013">
    <a href="/manual/vote-note.php?id=81013&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81013">
    <a href="/manual/vote-note.php?id=81013&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81013" title="no votes...">
    0
    </div>
  </div>
  <a href="#81013" class="name">
  <strong class="user"><em>samthor</em></strong></a><a class="genanchor" href="#81013"> &para;</a><div class="date" title="2008-02-11 12:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81013">
<div class="phpcode"><code><span class="html">Here's a way to get the arguments for an upstream function in your stack (works with class methods, static methods and non-class methods):<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * getArgs - find arguments of upstream method<br /> * can be called with, e.g. "funcname", "class::staticmethod", "class-&gt;instancemethod".<br /> */<br /></span><span class="keyword">function </span><span class="default">getArgs</span><span class="keyword">( </span><span class="default">$target</span><span class="keyword">, </span><span class="default">$subclass_ok </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">) {<br /><br />    if( </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$target</span><span class="keyword">, </span><span class="string">"::" </span><span class="keyword">) ) {<br />        list( </span><span class="default">$class</span><span class="keyword">, </span><span class="default">$target </span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">( </span><span class="string">"::"</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">);<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"::"</span><span class="keyword">;<br />    }<br />    else if( </span><span class="default">strpos</span><span class="keyword">( </span><span class="default">$target</span><span class="keyword">, </span><span class="string">"-&gt;" </span><span class="keyword">) ) {<br />        list( </span><span class="default">$class</span><span class="keyword">, </span><span class="default">$target </span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">( </span><span class="string">"-&gt;"</span><span class="keyword">, </span><span class="default">$target</span><span class="keyword">, </span><span class="default">2 </span><span class="keyword">);<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="string">"-&gt;"</span><span class="keyword">;<br />    }<br />    else {<br />        </span><span class="default">$type </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />        </span><span class="default">$class </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />    }<br />    </span><span class="default">$class </span><span class="keyword">and </span><span class="default">$class </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">( </span><span class="default">$class </span><span class="keyword">);<br /><br />    foreach( </span><span class="default">debug_backtrace</span><span class="keyword">() as </span><span class="default">$obj </span><span class="keyword">) {<br /><br />        if( </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="default">$target </span><span class="keyword">) {<br />            if( </span><span class="default">$type </span><span class="keyword">and </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">] == </span><span class="default">$type </span><span class="keyword">) {<br />                </span><span class="default">$_cl </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">( </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">] );<br />                if( </span><span class="default">$_cl</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() == </span><span class="default">$class</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">() or ( </span><span class="default">$subclass_ok </span><span class="keyword">and </span><span class="default">$_cl</span><span class="keyword">-&gt;</span><span class="default">isSubclassOf</span><span class="keyword">( </span><span class="default">$class </span><span class="keyword">) ) ) {<br />                    return </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">];<br />                }<br />                unset( </span><span class="default">$_cl </span><span class="keyword">);<br />            }<br />            else if( !</span><span class="default">$type </span><span class="keyword">) {<br />                return </span><span class="default">$obj</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">];<br />            }<br />        }<br /><br />    }<br /><br />    return </span><span class="default">NULL</span><span class="keyword">;<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />Some example usage:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />    function </span><span class="default">test</span><span class="keyword">() {<br />        </span><span class="default">$args </span><span class="keyword">= </span><span class="default">getArgs</span><span class="keyword">( </span><span class="string">"Foo-&gt;base" </span><span class="keyword">);<br />        print( </span><span class="string">"the parameter 'v' to my call of base was: </span><span class="keyword">{</span><span class="default">$args</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]}</span><span class="string">\n" </span><span class="keyword">);<br />    }<br />    function </span><span class="default">base</span><span class="keyword">( </span><span class="default">$v </span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">test</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$f </span><span class="keyword">= new </span><span class="default">Foo</span><span class="keyword">();<br /></span><span class="default">$f</span><span class="keyword">-&gt;</span><span class="default">base</span><span class="keyword">( </span><span class="default">713 </span><span class="keyword">); </span><span class="comment">// will print.. ".. my call of base was: 713"<br /><br /></span><span class="default">?&gt;<br /></span><br />Trust me, there are some reasons for why you might want to do this :)</span></code></div>
  </div>
 </div>
  <div class="note" id="69854">  <div class="votes">
    <div id="Vu69854">
    <a href="/manual/vote-note.php?id=69854&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69854">
    <a href="/manual/vote-note.php?id=69854&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69854" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69854" class="name">
  <strong class="user"><em>icefragment at gmail dot com</em></strong></a><a class="genanchor" href="#69854"> &para;</a><div class="date" title="2006-09-23 09:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69854">
<div class="phpcode"><code><span class="html">A simple python-like backtrace. Note that I don't recurse into arrays if they are passed as arguments to functions.<br /><br />function backtrace()<br />{<br />    $bt = debug_backtrace();<br />    <br />    echo("&lt;br /&gt;&lt;br /&gt;Backtrace (most recent call last):&lt;br /&gt;&lt;br /&gt;\n");    <br />    for($i = 0; $i &lt;= count($bt) - 1; $i++)<br />    {<br />        if(!isset($bt[$i]["file"]))<br />            echo("[PHP core called function]&lt;br /&gt;");<br />        else<br />            echo("File: ".$bt[$i]["file"]."&lt;br /&gt;");<br />        <br />        if(isset($bt[$i]["line"]))<br />            echo("&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;line ".$bt[$i]["line"]."&lt;br /&gt;");<br />        echo("&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;function called: ".$bt[$i]["function"]);<br />        <br />        if($bt[$i]["args"])<br />        {<br />            echo("&lt;br /&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;args: ");<br />            for($j = 0; $j &lt;= count($bt[$i]["args"]) - 1; $j++)<br />            {<br />                if(is_array($bt[$i]["args"][$j]))<br />                {<br />                    print_r($bt[$i]["args"][$j]);<br />                }<br />                else<br />                    echo($bt[$i]["args"][$j]);    <br />                            <br />                if($j != count($bt[$i]["args"]) - 1)<br />                    echo(", ");<br />            }<br />        }<br />        echo("&lt;br /&gt;&lt;br /&gt;");<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="69786">  <div class="votes">
    <div id="Vu69786">
    <a href="/manual/vote-note.php?id=69786&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69786">
    <a href="/manual/vote-note.php?id=69786&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69786" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69786" class="name">
  <strong class="user"><em>zmorris at mac dot com</em></strong></a><a class="genanchor" href="#69786"> &para;</a><div class="date" title="2006-09-20 07:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69786">
<div class="phpcode"><code><span class="html">Hi, I got tired of using a trace( $message, __FILE__, __LINE__ ) function I made.  It forced me to include the file and line params (since php doesn't have macros) so I decided to make an alternative.<br /><br />Simply call this new version using trace( 'my message' ); and it prints out a stack trace in a clearer way than the one stored in the debug_backtrace() array.  It handles traces from outside of functions, traces in nested functions, and traces in included files, and also displays the function in a way that can be pasted right back into your php code for faster testing!<br /><br />NOTE - be sure to save your files with the correct line endings for the line numbers to work correctly, which for Mac OS X is unix.  You can get to this option in the popup menu in the toolbar at the top of each window in BBEdit.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function    </span><span class="default">print_var</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">)<br />{<br />   if( </span><span class="default">is_string</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">) )<br />       return( </span><span class="string">'"'</span><span class="keyword">.</span><span class="default">str_replace</span><span class="keyword">( array(</span><span class="string">"\x00"</span><span class="keyword">, </span><span class="string">"\x0a"</span><span class="keyword">, </span><span class="string">"\x0d"</span><span class="keyword">, </span><span class="string">"\x1a"</span><span class="keyword">, </span><span class="string">"\x09"</span><span class="keyword">), array(</span><span class="string">'\0'</span><span class="keyword">, </span><span class="string">'\n'</span><span class="keyword">, </span><span class="string">'\r'</span><span class="keyword">, </span><span class="string">'\Z'</span><span class="keyword">, </span><span class="string">'\t'</span><span class="keyword">), </span><span class="default">$var </span><span class="keyword">).</span><span class="string">'"' </span><span class="keyword">);<br />   else if( </span><span class="default">is_bool</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">) )<br />   {<br />       if( </span><span class="default">$var </span><span class="keyword">)<br />           return( </span><span class="string">'true' </span><span class="keyword">);<br />       else<br />           return( </span><span class="string">'false' </span><span class="keyword">);<br />   }<br />   else if( </span><span class="default">is_array</span><span class="keyword">( </span><span class="default">$var </span><span class="keyword">) )<br />   {<br />       </span><span class="default">$result </span><span class="keyword">= </span><span class="string">'array( '</span><span class="keyword">;<br />       </span><span class="default">$comma </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />       foreach( </span><span class="default">$var </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val </span><span class="keyword">)<br />       {<br />           </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$comma</span><span class="keyword">.</span><span class="default">print_var</span><span class="keyword">( </span><span class="default">$key </span><span class="keyword">).</span><span class="string">' =&gt; '</span><span class="keyword">.</span><span class="default">print_var</span><span class="keyword">( </span><span class="default">$val </span><span class="keyword">);<br />           </span><span class="default">$comma </span><span class="keyword">= </span><span class="string">', '</span><span class="keyword">;<br />       }<br />       </span><span class="default">$result </span><span class="keyword">.= </span><span class="string">' )'</span><span class="keyword">;<br />       return( </span><span class="default">$result </span><span class="keyword">);<br />   }<br />   <br />   return( </span><span class="default">var_export</span><span class="keyword">( </span><span class="default">$var</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">) );    </span><span class="comment">// anything else, just let php try to print it<br /></span><span class="keyword">}<br /><br />function    </span><span class="default">trace</span><span class="keyword">( </span><span class="default">$msg </span><span class="keyword">)<br />{<br />   echo </span><span class="string">"&lt;pre&gt;\n"</span><span class="keyword">;<br />   <br />   </span><span class="comment">//var_export( debug_backtrace() ); echo "&lt;/pre&gt;\n"; return;    // this line shows what is going on underneath<br />   <br />   </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">( </span><span class="default">debug_backtrace</span><span class="keyword">() );<br />   </span><span class="default">$indent </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />   </span><span class="default">$func </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />   <br />   echo </span><span class="default">$msg</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />   <br />   foreach( </span><span class="default">$trace </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">)<br />   {<br />       echo </span><span class="default">$indent</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">' on line '</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">];<br />       <br />       if( </span><span class="default">$func </span><span class="keyword">) echo </span><span class="string">' in function '</span><span class="keyword">.</span><span class="default">$func</span><span class="keyword">;<br />       <br />       if( </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="string">'include' </span><span class="keyword">||<br />           </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="string">'require' </span><span class="keyword">||<br />           </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="string">'include_once' </span><span class="keyword">||<br />           </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] == </span><span class="string">'require_once' </span><span class="keyword">)<br />           </span><span class="default">$func </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />       else<br />       {<br />           </span><span class="default">$func </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">].</span><span class="string">'('</span><span class="keyword">;<br />           <br />           if( isset( </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">] ) )<br />           {<br />               </span><span class="default">$func </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">;<br />               </span><span class="default">$comma </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />               foreach( </span><span class="default">$val</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">] as </span><span class="default">$val </span><span class="keyword">)<br />               {<br />                   </span><span class="default">$func </span><span class="keyword">.= </span><span class="default">$comma</span><span class="keyword">.</span><span class="default">print_var</span><span class="keyword">( </span><span class="default">$val </span><span class="keyword">);<br />                   </span><span class="default">$comma </span><span class="keyword">= </span><span class="string">', '</span><span class="keyword">;<br />               }<br />               </span><span class="default">$func </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">;<br />           }<br />           <br />           </span><span class="default">$func </span><span class="keyword">.= </span><span class="string">')'</span><span class="keyword">;<br />       }<br />       <br />       echo </span><span class="string">"\n"</span><span class="keyword">;<br />       <br />       </span><span class="default">$indent </span><span class="keyword">.= </span><span class="string">"\t"</span><span class="keyword">;<br />   }<br />   <br />   echo </span><span class="string">"&lt;/pre&gt;\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">trace</span><span class="keyword">( </span><span class="string">'error outside function' </span><span class="keyword">);<br /><br />function    </span><span class="default">test</span><span class="keyword">( </span><span class="default">$param1</span><span class="keyword">, </span><span class="default">$param2</span><span class="keyword">, </span><span class="default">$param3</span><span class="keyword">, </span><span class="default">$param4 </span><span class="keyword">)<br />{<br />   </span><span class="default">trace</span><span class="keyword">( </span><span class="string">'error in test()' </span><span class="keyword">);<br />}<br /><br /></span><span class="default">test</span><span class="keyword">( </span><span class="default">1.1</span><span class="keyword">, </span><span class="string">"param2\n"</span><span class="keyword">, array( </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">"a\n"</span><span class="keyword">, </span><span class="string">"b\n" </span><span class="keyword">=&gt; </span><span class="default">2 </span><span class="keyword">), </span><span class="default">false </span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="30296">  <div class="votes">
    <div id="Vu30296">
    <a href="/manual/vote-note.php?id=30296&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30296">
    <a href="/manual/vote-note.php?id=30296&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30296" title="100% like this...">
    1
    </div>
  </div>
  <a href="#30296" class="name">
  <strong class="user"><em>jlim#natsoft.com.my</em></strong></a><a class="genanchor" href="#30296"> &para;</a><div class="date" title="2003-03-13 05:51"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30296">
<div class="phpcode"><code><span class="html">Pretty print the backtrace(). Functions are indented based on call value, and file is linked using file:// for convenience. <br /><br />Enjoy, John Lim<br /><br />    function adodb_backtrace($print=true)<br />    {<br />        $s = '';<br />        if (PHPVERSION() &gt;= 4.3) {<br />        <br />            $MAXSTRLEN = 64;<br />        <br />            $s = '&lt;pre align=left&gt;';<br />            $traceArr = debug_backtrace();<br />            array_shift($traceArr);<br />            $tabs = sizeof($traceArr)-1;<br />            foreach ($traceArr as $arr) {<br />                for ($i=0; $i &lt; $tabs; $i++) $s .= ' &amp;nbsp; ';<br />                $tabs -= 1;<br />                $s .= '&lt;font face="Courier New,Courier"&gt;';<br />                if (isset($arr['class'])) $s .= $arr['class'].'.';<br />                foreach($arr['args'] as $v) {<br />                    if (is_null($v)) $args[] = 'null';<br />                    else if (is_array($v)) $args[] = 'Array['.sizeof($v).']';<br />                    else if (is_object($v)) $args[] = 'Object:'.get_class($v);<br />                    else if (is_bool($v)) $args[] = $v ? 'true' : 'false';<br />                    else { <br />                        $v = (string) @$v;<br />                        $str = htmlspecialchars(substr($v,0,$MAXSTRLEN));<br />                        if (strlen($v) &gt; $MAXSTRLEN) $str .= '...';<br />                        $args[] = $str;<br />                    }<br />                }<br />                <br />                $s .= $arr['function'].'('.implode(', ',$args).')';<br />                $s .= sprintf("&lt;/font&gt;&lt;font color=#808080 size=-1&gt; # line %4d,".<br />  " file: &lt;a href=\"file:/%s\"&gt;%s&lt;/a&gt;&lt;/font&gt;",<br />  $arr['line'],$arr['file'],$arr['file']);<br />                $s .= "\n";<br />            }    <br />            $s .= '&lt;/pre&gt;';<br />            if ($print) print $s;<br />        }<br />        return $s;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="38133">  <div class="votes">
    <div id="Vu38133">
    <a href="/manual/vote-note.php?id=38133&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38133">
    <a href="/manual/vote-note.php?id=38133&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38133" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#38133" class="name">
  <strong class="user"><em>spagmoid at yahoo dot NOSPAMcom</em></strong></a><a class="genanchor" href="#38133"> &para;</a><div class="date" title="2003-12-09 11:47"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38133">
<div class="phpcode"><code><span class="html">ATTN: jlim#natsoft.com.my<br /><br />Great function, but you have a few bugs.<br /><br />At the line: <br />foreach($arr['args'] as $v)<br /><br />Change it to:<br />$args = array();<br />if(!empty($arr['args'])) foreach($arr['args'] as $v)<br /><br />And since line &amp; file are not present in the array if calling from the error handler,<br /><br />$Line = (isset($arr['line'])? $arr['line'] : "unknown");<br />$File = (isset($arr['file'])? $arr['file'] : "unknown");<br /><br />and substitute accordingly.<br /><br />Here's my version of it, alas with different formatting:<br />----------------------------------------<br /><br />function DBG_GetBacktrace()<br />{<br />    $s = '';<br />    $MAXSTRLEN = 64;<br />    <br />    $s = '&lt;pre align=left&gt;';<br />    $traceArr = debug_backtrace();<br />    array_shift($traceArr);<br />    $tabs = sizeof($traceArr)-1;<br />    foreach($traceArr as $arr)<br />    {<br />        for ($i=0; $i &lt; $tabs; $i++) $s .= ' &amp;nbsp; ';<br />        $tabs -= 1;<br />        $s .= '&lt;font face="Courier New,Courier"&gt;';<br />        if (isset($arr['class'])) $s .= $arr['class'].'.';<br />        $args = array();<br />        if(!empty($arr['args'])) foreach($arr['args'] as $v)<br />        {<br />            if (is_null($v)) $args[] = 'null';<br />            else if (is_array($v)) $args[] = 'Array['.sizeof($v).']';<br />            else if (is_object($v)) $args[] = 'Object:'.get_class($v);<br />            else if (is_bool($v)) $args[] = $v ? 'true' : 'false';<br />            else<br />            { <br />                $v = (string) @$v;<br />                $str = htmlspecialchars(substr($v,0,$MAXSTRLEN));<br />                if (strlen($v) &gt; $MAXSTRLEN) $str .= '...';<br />                $args[] = "\"".$str."\"";<br />            }<br />        }<br />        $s .= $arr['function'].'('.implode(', ',$args).')&lt;/font&gt;';<br />        $Line = (isset($arr['line'])? $arr['line'] : "unknown");<br />        $File = (isset($arr['file'])? $arr['file'] : "unknown");<br />        $s .= sprintf("&lt;font color=#808080 size=-1&gt; # line %4d, file: &lt;a href=\"file:/%s\"&gt;%s&lt;/a&gt;&lt;/font&gt;",<br />            $Line, $File, $File);<br />        $s .= "\n";<br />    }    <br />    $s .= '&lt;/pre&gt;';<br />    return $s;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="100350">  <div class="votes">
    <div id="Vu100350">
    <a href="/manual/vote-note.php?id=100350&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100350">
    <a href="/manual/vote-note.php?id=100350&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100350" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#100350" class="name">
  <strong class="user"><em>henzeberkheij at gmail dot com</em></strong></a><a class="genanchor" href="#100350"> &para;</a><div class="date" title="2010-10-10 02:07"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100350">
<div class="phpcode"><code><span class="html">I find it useful to know if a function is being called. in Java for instance you usually print a line with the functionname and arguments in the beginning of the function. I wanted to achieve the same thing in php thus i wrote the following class:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Debug 
<br /></span><span class="keyword">{
<br />    private static </span><span class="default">$calls</span><span class="keyword">;
<br />
<br />    public static function </span><span class="default">log</span><span class="keyword">(</span><span class="default">$message </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)
<br />    {
<br />        if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$calls</span><span class="keyword">))
<br />            </span><span class="default">self</span><span class="keyword">::</span><span class="default">$calls </span><span class="keyword">= array();
<br />
<br />        </span><span class="default">$call </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">(</span><span class="default">false</span><span class="keyword">);
<br />        </span><span class="default">$call </span><span class="keyword">= (isset(</span><span class="default">$call</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))?</span><span class="default">$call</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]:</span><span class="default">$call</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />        </span><span class="default">$call</span><span class="keyword">[</span><span class="string">'message'</span><span class="keyword">] = </span><span class="default">$message</span><span class="keyword">;
<br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$calls</span><span class="keyword">, </span><span class="default">$call</span><span class="keyword">);
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />include this class before anything else
<br />usage: Debug::log($message); at the beginning of your function.
<br />
<br />write yourself a nice printout of the data;</span></code></div>
  </div>
 </div>
  <div class="note" id="106572">  <div class="votes">
    <div id="Vu106572">
    <a href="/manual/vote-note.php?id=106572&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106572">
    <a href="/manual/vote-note.php?id=106572&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106572" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#106572" class="name">
  <strong class="user"><em>ciprian dot stingu at gmail dot com</em></strong></a><a class="genanchor" href="#106572"> &para;</a><div class="date" title="2011-11-19 12:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106572">
<div class="phpcode"><code><span class="html">A function that i use for debug<br />I shortened variables name and i eliminated the spaces from second function in order fit in post :(<br /><br /><span class="default">&lt;?php<br />define</span><span class="keyword">(</span><span class="string">"LFP"</span><span class="keyword">, </span><span class="string">'./lt.log'</span><span class="keyword">);<br />function </span><span class="default">LogTrace</span><span class="keyword">(</span><span class="default">$Argument</span><span class="keyword">, </span><span class="default">$lfn </span><span class="keyword">= </span><span class="default">LFP</span><span class="keyword">, </span><span class="default">$itw </span><span class="keyword">= </span><span class="string">'  '</span><span class="keyword">)<br />{<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"=====\r"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$lfn</span><span class="keyword">); <br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"[BEGIN BACKTRACE]\r"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$lfn</span><span class="keyword">); <br />    </span><span class="default">$it </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$Ts </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">debug_backtrace</span><span class="keyword">());<br />    foreach(</span><span class="default">$Ts </span><span class="keyword">as </span><span class="default">$T</span><span class="keyword">)<br />       {  <br />        if(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'include' </span><span class="keyword">&amp;&amp; </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'require' </span><span class="keyword">&amp;&amp; </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'include_once' </span><span class="keyword">&amp;&amp; </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'require_once'</span><span class="keyword">)<br />        {<br />            </span><span class="default">$ft </span><span class="keyword">= </span><span class="default">$it </span><span class="keyword">. </span><span class="string">'&lt;'</span><span class="keyword">. </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">]) . </span><span class="string">'&gt; on line ' </span><span class="keyword">. </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">];  <br />            if(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'LogTrace'</span><span class="keyword">)<br />            {<br />                if(isset(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">]))<br />                    </span><span class="default">$ft </span><span class="keyword">.= </span><span class="string">' in method ' </span><span class="keyword">. </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'class'</span><span class="keyword">] . </span><span class="default">$T</span><span class="keyword">[</span><span class="string">'type'</span><span class="keyword">];<br />                else <br />                    </span><span class="default">$ft </span><span class="keyword">.= </span><span class="string">' in function '</span><span class="keyword">;<br />                </span><span class="default">$ft </span><span class="keyword">.= </span><span class="default">$Trace</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] . </span><span class="string">'('</span><span class="keyword">;<br />            }<br />            else<br />                </span><span class="default">$ft </span><span class="keyword">.= </span><span class="string">'('</span><span class="keyword">;<br />            if(isset(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]))<br />            {<br />                if(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">] != </span><span class="string">'LogTrace'</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$ct </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />                    foreach(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">] as </span><span class="default">$A</span><span class="keyword">)<br />                    {<br />                        </span><span class="default">$ft </span><span class="keyword">.= </span><span class="default">$ct </span><span class="keyword">. </span><span class="default">LogVar</span><span class="keyword">(</span><span class="default">$A</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$it</span><span class="keyword">, </span><span class="default">$itw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />                        </span><span class="default">$ct </span><span class="keyword">= </span><span class="default">$it </span><span class="keyword">. </span><span class="default">$itw </span><span class="keyword">. </span><span class="string">','</span><span class="keyword">;<br />                    }<br />                }<br />                else<br />                    </span><span class="default">$ft </span><span class="keyword">.= </span><span class="default">LogVar</span><span class="keyword">(</span><span class="default">$T</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">], </span><span class="string">''</span><span class="keyword">, </span><span class="default">$it</span><span class="keyword">, </span><span class="default">$itw</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />            }<br />            </span><span class="default">$ft </span><span class="keyword">.= </span><span class="default">$it </span><span class="keyword">. </span><span class="string">")\r"</span><span class="keyword">;<br />            </span><span class="default">error_log</span><span class="keyword">(</span><span class="default">$ft</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$lfn</span><span class="keyword">); <br />            </span><span class="default">$it </span><span class="keyword">.= </span><span class="default">$itw</span><span class="keyword">;<br />        }            <br />    }<br />    </span><span class="default">error_log</span><span class="keyword">(</span><span class="string">"[END BACKTRACE]\r"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">$lfn</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">LogVar</span><span class="keyword">(&amp;</span><span class="default">$Var</span><span class="keyword">, </span><span class="default">$vn</span><span class="keyword">, </span><span class="default">$pit</span><span class="keyword">, </span><span class="default">$itw</span><span class="keyword">, </span><span class="default">$nlvl</span><span class="keyword">, </span><span class="default">$m </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">)<br />{<br />    if(</span><span class="default">$nlvl</span><span class="keyword">&gt;=</span><span class="default">16</span><span class="keyword">) return;<br />    if(</span><span class="default">$nlvl</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">){</span><span class="default">$tv</span><span class="keyword">=</span><span class="default">serialize</span><span class="keyword">(</span><span class="default">$Var</span><span class="keyword">);</span><span class="default">$tv</span><span class="keyword">=</span><span class="default">unserialize</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">);}<br />    else </span><span class="default">$tv</span><span class="keyword">=&amp;</span><span class="default">$Var</span><span class="keyword">; <br />    </span><span class="default">$it</span><span class="keyword">=</span><span class="default">$pit</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />    for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nlvl</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$it</span><span class="keyword">.=</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />    </span><span class="default">$o</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;</span><span class="default">$nl</span><span class="keyword">=</span><span class="string">"\n"</span><span class="keyword">;<br />    if(</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">))<br />    {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vn</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;array&gt; $'</span><span class="keyword">.</span><span class="default">$vn</span><span class="keyword">.</span><span class="string">' = ('</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">"\r"</span><span class="keyword">.</span><span class="default">$it</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;array&gt; = ('</span><span class="keyword">;<br />        </span><span class="default">$o</span><span class="keyword">.= </span><span class="default">$nl</span><span class="keyword">;</span><span class="default">$AK</span><span class="keyword">=</span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">);<br />        foreach(</span><span class="default">$AK </span><span class="keyword">as </span><span class="default">$AN</span><span class="keyword">) {</span><span class="default">$AV</span><span class="keyword">=&amp;</span><span class="default">$tv</span><span class="keyword">[</span><span class="default">$AN</span><span class="keyword">];</span><span class="default">$o</span><span class="keyword">.=</span><span class="default">LogVar</span><span class="keyword">(</span><span class="default">$AV</span><span class="keyword">,</span><span class="default">$AN</span><span class="keyword">,</span><span class="default">$pit</span><span class="keyword">,</span><span class="default">$itw</span><span class="keyword">,</span><span class="default">$nlvl</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);}<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">')'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />    }<br />    else if(</span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">))<br />    {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vn</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)</span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;string&gt; $'</span><span class="keyword">.</span><span class="default">$vn</span><span class="keyword">.</span><span class="string">' = '</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;string&gt; = '</span><span class="keyword">;<br />        if(</span><span class="default">$tv</span><span class="keyword">===</span><span class="default">null</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'NULL'</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'"'</span><span class="keyword">.</span><span class="default">$tv</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">;<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$nl</span><span class="keyword">;<br />    }<br />    else if(</span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">))<br />    {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vn</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;boolean&gt; $'</span><span class="keyword">.</span><span class="default">$vn</span><span class="keyword">.</span><span class="string">' = '</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;boolean&gt; = '</span><span class="keyword">;<br />        if(</span><span class="default">$tv</span><span class="keyword">===</span><span class="default">true</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'TRUE'</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'FALSE'</span><span class="keyword">;<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$nl</span><span class="keyword">;<br />    }<br />    else if(</span><span class="default">is_object</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">))<br />    {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vn</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$pit</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nlvl</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />            </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;'</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">).</span><span class="string">'::$'</span><span class="keyword">.</span><span class="default">$vn</span><span class="keyword">.</span><span class="string">'&gt; = {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />        }<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;'</span><span class="keyword">.</span><span class="default">get_class</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">).</span><span class="string">'::&gt; = {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />        </span><span class="default">$R</span><span class="keyword">=new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">);<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'Class methods {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />        </span><span class="default">$CM</span><span class="keyword">=</span><span class="default">$R</span><span class="keyword">-&gt;</span><span class="default">getMethods</span><span class="keyword">();<br />        foreach(</span><span class="default">$CM </span><span class="keyword">as </span><span class="default">$MN </span><span class="keyword">=&gt; </span><span class="default">$MV</span><span class="keyword">)<br />        {<br />            </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">Reflection</span><span class="keyword">::</span><span class="default">getModifierNames</span><span class="keyword">(</span><span class="default">$MV</span><span class="keyword">-&gt;</span><span class="default">getModifiers</span><span class="keyword">())).</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$MV</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">().</span><span class="string">'('</span><span class="keyword">;<br />            </span><span class="default">$MP</span><span class="keyword">=</span><span class="default">$MV</span><span class="keyword">-&gt;</span><span class="default">getParameters</span><span class="keyword">(); </span><span class="default">$ct</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />            foreach(</span><span class="default">$MP </span><span class="keyword">as </span><span class="default">$MPN </span><span class="keyword">=&gt; </span><span class="default">$MPV</span><span class="keyword">)<br />            {<br />                </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$ct</span><span class="keyword">; </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">isOptional</span><span class="keyword">()?</span><span class="string">'['</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">;<br />                if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">isArray</span><span class="keyword">()) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'&lt;array&gt; '</span><span class="keyword">;<br />                else if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getClass</span><span class="keyword">()!==</span><span class="default">null</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'&lt;'</span><span class="keyword">.</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getClass</span><span class="keyword">()-&gt;</span><span class="default">getName</span><span class="keyword">().</span><span class="string">'::&gt; '</span><span class="keyword">;<br />                </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">isPassedByReference</span><span class="keyword">()?</span><span class="string">'&amp;'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">; </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'$'</span><span class="keyword">.</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">();<br />                if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">isDefaultValueAvailable</span><span class="keyword">())<br />                 {<br />                    if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">()===</span><span class="default">null</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' = NULL'</span><span class="keyword">;<br />                    else if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">()===</span><span class="default">true</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' = TRUE'</span><span class="keyword">;<br />                    else if(</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">()===</span><span class="default">false</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' = FALSE'</span><span class="keyword">;    <br />                    else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' = '</span><span class="keyword">.</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">getDefaultValue</span><span class="keyword">();    <br />                }<br />                </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$MPV</span><span class="keyword">-&gt;</span><span class="default">isOptional</span><span class="keyword">()?</span><span class="string">']'</span><span class="keyword">:</span><span class="string">''</span><span class="keyword">; </span><span class="default">$ct</span><span class="keyword">=</span><span class="string">', '</span><span class="keyword">;<br />            }<br />            </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">')'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />        }<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'}'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">; </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'Class properties {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />        </span><span class="default">$CV</span><span class="keyword">=</span><span class="default">$R</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();<br />        foreach(</span><span class="default">$CV </span><span class="keyword">as </span><span class="default">$CN </span><span class="keyword">=&gt; </span><span class="default">$CV</span><span class="keyword">)<br />        {<br />            </span><span class="default">$M</span><span class="keyword">=</span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="default">Reflection</span><span class="keyword">::</span><span class="default">getModifierNames</span><span class="keyword">(</span><span class="default">$CV</span><span class="keyword">-&gt;</span><span class="default">getModifiers</span><span class="keyword">())).</span><span class="string">' '</span><span class="keyword">;<br />            </span><span class="default">$CV</span><span class="keyword">-&gt;</span><span class="default">setAccessible</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">); <br />            </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">LogVar</span><span class="keyword">(</span><span class="default">$CV</span><span class="keyword">-&gt;</span><span class="default">getValue</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">),</span><span class="default">$CV</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(),</span><span class="default">$pit</span><span class="keyword">,</span><span class="default">$itw</span><span class="keyword">,</span><span class="default">$nlvl</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">,</span><span class="default">$M</span><span class="keyword">);<br />        }<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'}'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">; </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'Object variables {'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />         </span><span class="default">$OVs</span><span class="keyword">=</span><span class="default">get_object_vars</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">);    <br />        foreach(</span><span class="default">$OVs </span><span class="keyword">as </span><span class="default">$ON </span><span class="keyword">=&gt; </span><span class="default">$OV</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">LogVar</span><span class="keyword">(</span><span class="default">$OV</span><span class="keyword">,</span><span class="default">$ON</span><span class="keyword">,</span><span class="default">$pit</span><span class="keyword">,</span><span class="default">$itw</span><span class="keyword">,</span><span class="default">$nlvl</span><span class="keyword">+</span><span class="default">2</span><span class="keyword">);<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">.</span><span class="string">'}'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">; </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$pit</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />        for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$nlvl</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)    </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$itw</span><span class="keyword">;<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">'}'</span><span class="keyword">.</span><span class="default">$nl</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        if(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$vn</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">) </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$it</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;'</span><span class="keyword">.</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">).</span><span class="string">'&gt; $'</span><span class="keyword">.</span><span class="default">$vn</span><span class="keyword">.</span><span class="string">' = '</span><span class="keyword">.</span><span class="default">$tv</span><span class="keyword">;<br />        else </span><span class="default">$o</span><span class="keyword">.=</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$m</span><span class="keyword">.</span><span class="string">'&lt;'</span><span class="keyword">.</span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$tv</span><span class="keyword">).</span><span class="string">'&gt; = '</span><span class="keyword">.</span><span class="default">$tv</span><span class="keyword">;<br />        </span><span class="default">$o</span><span class="keyword">.=</span><span class="default">$nl</span><span class="keyword">;<br />    }          <br />    return </span><span class="default">$o</span><span class="keyword">;    <br />}<br /></span><span class="comment">//test<br /></span><span class="default">date_default_timezone_set</span><span class="keyword">(</span><span class="string">'Europe/Bucharest'</span><span class="keyword">);<br /></span><span class="default">$date </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'2010-01-28'</span><span class="keyword">);<br /></span><span class="default">LogTrace</span><span class="keyword">(</span><span class="default">$date</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80712">  <div class="votes">
    <div id="Vu80712">
    <a href="/manual/vote-note.php?id=80712&amp;page=function.debug-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80712">
    <a href="/manual/vote-note.php?id=80712&amp;page=function.debug-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80712" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#80712" class="name">
  <strong class="user"><em>aryel at iku dot com dot br</em></strong></a><a class="genanchor" href="#80712"> &para;</a><div class="date" title="2008-01-29 02:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80712">
<div class="phpcode"><code><span class="html">An easy function to pull all details of the debug backtrace:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">getDebugBacktrace</span><span class="keyword">(</span><span class="default">$NL </span><span class="keyword">= </span><span class="string">"&lt;BR&gt;"</span><span class="keyword">) {<br />    </span><span class="default">$dbgTrace </span><span class="keyword">= </span><span class="default">debug_backtrace</span><span class="keyword">();<br />    </span><span class="default">$dbgMsg </span><span class="keyword">.= </span><span class="default">$NL</span><span class="keyword">.</span><span class="string">"Debug backtrace begin:</span><span class="default">$NL</span><span class="string">"</span><span class="keyword">;<br />    foreach(</span><span class="default">$dbgTrace </span><span class="keyword">as </span><span class="default">$dbgIndex </span><span class="keyword">=&gt; </span><span class="default">$dbgInfo</span><span class="keyword">) {<br />        </span><span class="default">$dbgMsg </span><span class="keyword">.= </span><span class="string">"\t at </span><span class="default">$dbgIndex</span><span class="string">  "</span><span class="keyword">.</span><span class="default">$dbgInfo</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">].</span><span class="string">" (line </span><span class="keyword">{</span><span class="default">$dbgInfo</span><span class="keyword">[</span><span class="string">'line'</span><span class="keyword">]}</span><span class="string">) -&gt; </span><span class="keyword">{</span><span class="default">$dbgInfo</span><span class="keyword">[</span><span class="string">'function'</span><span class="keyword">]}</span><span class="string">("</span><span class="keyword">.</span><span class="default">join</span><span class="keyword">(</span><span class="string">","</span><span class="keyword">,</span><span class="default">$dbgInfo</span><span class="keyword">[</span><span class="string">'args'</span><span class="keyword">])</span><span class="string">")</span><span class="default">$NL</span><span class="string">"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$dbgMsg </span><span class="keyword">.= </span><span class="string">"Debug backtrace end"</span><span class="keyword">.</span><span class="default">$NL</span><span class="keyword">;<br />    return </span><span class="default">$dbgMsg</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />Then you can call it anywhere you want to get a string with the debug backtrace in readable format (i.e. your error handling function)<br /><br /><span class="default">&lt;?php<br />$backtrace </span><span class="keyword">= </span><span class="default">getDebugBacktrace</span><span class="keyword">();<br />echo </span><span class="string">"Fatal error! Cannot connect to database!"</span><span class="keyword">;<br />echo </span><span class="default">$backtrace</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />If you're running on command line, you might want to replace the line split. You can do that thru the function argument:<br /><br /><span class="default">&lt;?php<br />$backtrace </span><span class="keyword">= </span><span class="default">getDebugBacktrace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">);<br />echo </span><span class="string">"Error! Server is running out of foos! Dumping error backtrace"</span><span class="keyword">;<br />echo </span><span class="default">$backtrace</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Hope that helps,<br />Aryel</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.debug-backtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.debug-backtrace.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.errorfunc.php">Error Handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.debug-backtrace.php" title="debug_&#8203;backtrace">debug_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-print-backtrace.php" title="debug_&#8203;print_&#8203;backtrace">debug_&#8203;print_&#8203;backtrace</a>
                        </li>
                                                <li class="">
                            <a href="function.error-clear-last.php" title="error_&#8203;clear_&#8203;last">error_&#8203;clear_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-get-last.php" title="error_&#8203;get_&#8203;last">error_&#8203;get_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.error-log.php" title="error_&#8203;log">error_&#8203;log</a>
                        </li>
                                                <li class="">
                            <a href="function.error-reporting.php" title="error_&#8203;reporting">error_&#8203;reporting</a>
                        </li>
                                                <li class="">
                            <a href="function.get-error-handler.php" title="get_&#8203;error_&#8203;handler">get_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.get-exception-handler.php" title="get_&#8203;exception_&#8203;handler">get_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-error-handler.php" title="restore_&#8203;error_&#8203;handler">restore_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.restore-exception-handler.php" title="restore_&#8203;exception_&#8203;handler">restore_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-error-handler.php" title="set_&#8203;error_&#8203;handler">set_&#8203;error_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.set-exception-handler.php" title="set_&#8203;exception_&#8203;handler">set_&#8203;exception_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.trigger-error.php" title="trigger_&#8203;error">trigger_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.user-error.php" title="user_&#8203;error">user_&#8203;error</a>
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
