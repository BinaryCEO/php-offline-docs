<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: debug_print_backtrace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.debug-print-backtrace.php">
 <link rel="shorturl" href="https://www.php.net/debug-print-backtrace">
 <link rel="alternate" href="https://www.php.net/debug-print-backtrace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.errorfunc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.debug-backtrace.php">
 <link rel="next" href="https://www.php.net/manual/en/function.error-clear-last.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.debug-print-backtrace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.debug-print-backtrace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.debug-print-backtrace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.debug-print-backtrace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.debug-print-backtrace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.debug-print-backtrace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.debug-print-backtrace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.debug-print-backtrace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.debug-print-backtrace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.debug-print-backtrace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.debug-print-backtrace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Prints a backtrace" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: debug_print_backtrace - Manual" />
<meta name="twitter:description" content="Prints a backtrace" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: debug_print_backtrace - Manual" />
<meta itemprop="description" content="Prints a backtrace" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Prints a backtrace" />

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
        <a href="function.error-clear-last.php">
          error_clear_last &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.debug-backtrace.php">
          &laquo; debug_backtrace        </a>
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
            <option value='en/function.debug-print-backtrace.php' selected="selected">English</option>
            <option value='de/function.debug-print-backtrace.php'>German</option>
            <option value='es/function.debug-print-backtrace.php'>Spanish</option>
            <option value='fr/function.debug-print-backtrace.php'>French</option>
            <option value='it/function.debug-print-backtrace.php'>Italian</option>
            <option value='ja/function.debug-print-backtrace.php'>Japanese</option>
            <option value='pt_BR/function.debug-print-backtrace.php'>Brazilian Portuguese</option>
            <option value='ru/function.debug-print-backtrace.php'>Russian</option>
            <option value='tr/function.debug-print-backtrace.php'>Turkish</option>
            <option value='uk/function.debug-print-backtrace.php'>Ukrainian</option>
            <option value='zh/function.debug-print-backtrace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.debug-print-backtrace" class="refentry">
   <div class="refnamediv">
    <h1 class="refname">debug_print_backtrace</h1>
    <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">debug_print_backtrace</span> &mdash; <span class="dc-title">
     Prints a backtrace
    </span></p>

   </div>
  
   <div class="refsect1 description" id="refsect1-function.debug-print-backtrace-description">
    <h3 class="title">Description</h3>
    <div class="methodsynopsis dc-description">
     <span class="methodname"><strong>debug_print_backtrace</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$limit</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

    <p class="para rdfs-comment">
     <span class="function"><strong>debug_print_backtrace()</strong></span> prints a PHP backtrace. It
     prints the function calls, <span class="function"><a href="function.include.php" class="function">include</a></span>d/<span class="function"><a href="function.require.php" class="function">require</a></span>d files and
     <span class="function"><a href="function.eval.php" class="function">eval()</a></span>ed stuff.
    </p>
   </div>


 <div class="refsect1 parameters" id="refsect1-function.debug-print-backtrace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       This parameter is a bitmask for the following options:
       <table class="doctable table">
        <caption><strong><span class="function"><strong>debug_print_backtrace()</strong></span> options</strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td>DEBUG_BACKTRACE_IGNORE_ARGS</td>
           <td>
            Whether or not to omit the &quot;args&quot; index, and thus all the function/method arguments,
            to save memory.
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
    
     <dt><code class="parameter">limit</code></dt>
     <dd>
      <p class="para">
       This parameter can be used to limit the number of stack frames printed.
       By default (<code class="parameter">limit</code>=<code class="literal">0</code>) it prints all stack frames.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


   <div class="refsect1 returnvalues" id="refsect1-function.debug-print-backtrace-returnvalues">
    <h3 class="title">Return Values</h3>
    <p class="para">
     No value is returned.
    </p>
   </div>


   <div class="refsect1 examples" id="refsect1-function.debug-print-backtrace-examples">
    <h3 class="title">Examples</h3>
    <p class="para">
     <div class="example" id="example-596">
      <p><strong>Example #1 <span class="function"><strong>debug_print_backtrace()</strong></span> example</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// include.php file<br /><br /></span><span style="color: #007700">function </span><span style="color: #0000BB">a</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">b</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">b</span><span style="color: #007700">() {<br />    </span><span style="color: #0000BB">c</span><span style="color: #007700">();<br />}<br /><br />function </span><span style="color: #0000BB">c</span><span style="color: #007700">(){<br />    </span><span style="color: #0000BB">debug_print_backtrace</span><span style="color: #007700">();<br />}<br /><br /></span><span style="color: #0000BB">a</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// test.php file<br />// this is the file you should run<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'include.php'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output
something similar to:</p></div>
     <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">#0  c() called at [/tmp/include.php:10]
#1  b() called at [/tmp/include.php:6]
#2  a() called at [/tmp/include.php:17]
#3  include(/tmp/include.php) called at [/tmp/test.php:3]</pre>
</div>
     </div>
    </div>
   </p>
  </div>


  <div class="refsect1 seealso" id="refsect1-function.debug-print-backtrace-seealso">
   <h3 class="title">See Also</h3>
   <p class="para">
    <ul class="simplelist">
     <li><span class="function"><a href="function.debug-backtrace.php" class="function" rel="rdfs-seeAlso">debug_backtrace()</a> - Generates a backtrace</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/errorfunc/functions/debug-print-backtrace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.debug-print-backtrace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.debug-print-backtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.debug-print-backtrace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92542">  <div class="votes">
    <div id="Vu92542">
    <a href="/manual/vote-note.php?id=92542&amp;page=function.debug-print-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92542">
    <a href="/manual/vote-note.php?id=92542&amp;page=function.debug-print-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92542" title="86% like this...">
    89
    </div>
  </div>
  <a href="#92542" class="name">
  <strong class="user"><em>bishop</em></strong></a><a class="genanchor" href="#92542"> &para;</a><div class="date" title="2009-07-28 01:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92542">
<div class="phpcode"><code><span class="html">Another way to manipulate and print a backtrace, without using output buffering:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// print backtrace, getting rid of repeated absolute path on each file<br /></span><span class="default">$e </span><span class="keyword">= new </span><span class="default">Exception</span><span class="keyword">();<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">'/path/to/code/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$e</span><span class="keyword">-&gt;</span><span class="default">getTraceAsString</span><span class="keyword">()));<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129819">  <div class="votes">
    <div id="Vu129819">
    <a href="/manual/vote-note.php?id=129819&amp;page=function.debug-print-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129819">
    <a href="/manual/vote-note.php?id=129819&amp;page=function.debug-print-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129819" title="100% like this...">
    3
    </div>
  </div>
  <a href="#129819" class="name">
  <strong class="user"><em>sun at drupal dot org</em></strong></a><a class="genanchor" href="#129819"> &para;</a><div class="date" title="2024-10-24 01:51"><strong>11 months ago</strong></div>
  <div class="text" id="Hcom129819">
<div class="phpcode"><code><span class="html">If you see string arguments and parameters getting cut off like this:<br /><br />#0 hook.php(324): output_notice('checkout_before...')<br />#1 hook.php(348): invoke_hook('checkout_before...', Array)<br /><br />You can increase the maximum length of arguments and parameters in the printed trace through an PHP INI setting:<br /><br /><span class="default">&lt;?php<br />ini_set</span><span class="keyword">(</span><span class="string">'zend.exception_string_param_max_len'</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">debug_print_backtrace</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />…so you can read the full arguments:<br /><br />#0 hook.php(324): output_notice('checkout_before_payment')<br />#1 hook.php(348): invoke_hook('checkout_before_payment', Array)<br /><br />In edge cases, it might even uncover nested traces that you didn't notice before.</span></code></div>
  </div>
 </div>
  <div class="note" id="86932">  <div class="votes">
    <div id="Vu86932">
    <a href="/manual/vote-note.php?id=86932&amp;page=function.debug-print-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86932">
    <a href="/manual/vote-note.php?id=86932&amp;page=function.debug-print-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86932" title="68% like this...">
    24
    </div>
  </div>
  <a href="#86932" class="name">
  <strong class="user"><em>dany dot dylan at gmail dot com</em></strong></a><a class="genanchor" href="#86932"> &para;</a><div class="date" title="2008-11-10 09:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86932">
<div class="phpcode"><code><span class="html">I like the output of debug_print_backtrace() but I sometimes want it as a string.
<br />
<br />bortuzar's solution to use output buffering is great, but I'd like to factorize that into a function.  Doing that however always results in whatever function name I use appearing at the top of the stack which is redundant.
<br />
<br />Below is my noddy (simple) solution.  If you don't care for renumbering the call stack, omit the second preg_replace().
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">function </span><span class="default">debug_string_backtrace</span><span class="keyword">() {
<br />        </span><span class="default">ob_start</span><span class="keyword">();
<br />        </span><span class="default">debug_print_backtrace</span><span class="keyword">();
<br />        </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">ob_get_contents</span><span class="keyword">();
<br />        </span><span class="default">ob_end_clean</span><span class="keyword">();
<br />
<br />        </span><span class="comment">// Remove first item from backtrace as it's this function which
<br />        // is redundant.
<br />        </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/^#0\s+' </span><span class="keyword">. </span><span class="default">__FUNCTION__ </span><span class="keyword">. </span><span class="string">"[^\n]*\n/"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />
<br />        </span><span class="comment">// Renumber backtrace items.
<br />        </span><span class="default">$trace </span><span class="keyword">= </span><span class="default">preg_replace </span><span class="keyword">(</span><span class="string">'/^#(\d+)/me'</span><span class="keyword">, </span><span class="string">'\'#\' . ($1 - 1)'</span><span class="keyword">, </span><span class="default">$trace</span><span class="keyword">);
<br />
<br />        return </span><span class="default">$trace</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="130389">  <div class="votes">
    <div id="Vu130389">
    <a href="/manual/vote-note.php?id=130389&amp;page=function.debug-print-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd130389">
    <a href="/manual/vote-note.php?id=130389&amp;page=function.debug-print-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V130389" title="no votes...">
    0
    </div>
  </div>
  <a href="#130389" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#130389"> &para;</a><div class="date" title="2025-06-24 07:48"><strong>3 months ago</strong></div>
  <div class="text" id="Hcom130389">
<div class="phpcode"><code><span class="html">This is for latest php version<br /><br />function debugStringBacktrace()<br />    {<br />        ob_start();<br />        debug_print_backtrace();<br />        $trace = ob_get_contents();<br />        ob_end_clean();<br />        $trace = preg_replace('/^#0\s+' . __FUNCTION__ . "[^\n]*\n/", '', $trace, 1);<br /><br />        $trace = preg_replace_callback('/^#(\d+)/m', function ($matches) {<br />            return '#' . ($matches[1] - 1);<br />        }, $trace);<br />        return $trace;<br />    }</span></code></div>
  </div>
 </div>
  <div class="note" id="125237">  <div class="votes">
    <div id="Vu125237">
    <a href="/manual/vote-note.php?id=125237&amp;page=function.debug-print-backtrace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125237">
    <a href="/manual/vote-note.php?id=125237&amp;page=function.debug-print-backtrace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125237" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#125237" class="name">
  <strong class="user"><em>David Spector</em></strong></a><a class="genanchor" href="#125237"> &para;</a><div class="date" title="2020-08-02 02:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125237">
<div class="phpcode"><code><span class="html">If your show your error messages in HTML (with suitable safety using entities), this function won't work nicely because it uses newlines for formatting.<br /><br />Here is a function that works similarly, but using &lt;BR&gt; tags. Insert it near the beginning of your program to add a stack to Warning output only, or modify it as you like:<br /><br />// Here is code for error stack output in HTML:<br />function error_handler_callback($errno,$message,$file,$line,$context)<br />    {<br />    if ($errno === E_WARNING)<br />        echo "Stack, innermost first:&lt;br&gt;".nl2br((new Exception())-&gt;getTraceAsString());<br />    return false; // to execute the regular error handler<br />    }<br />set_error_handler("error_handler_callback");</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.debug-print-backtrace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.debug-print-backtrace.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.errorfunc.php">Error Handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.debug-backtrace.php" title="debug_&#8203;backtrace">debug_&#8203;backtrace</a>
                        </li>
                                                <li class="current">
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
