<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: escapeshellarg - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.escapeshellarg.php">
 <link rel="shorturl" href="https://www.php.net/escapeshellarg">
 <link rel="alternate" href="https://www.php.net/escapeshellarg" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="next" href="https://www.php.net/manual/en/function.escapeshellcmd.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.escapeshellarg.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.escapeshellarg.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.escapeshellarg.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.escapeshellarg.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.escapeshellarg.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.escapeshellarg.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.escapeshellarg.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.escapeshellarg.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.escapeshellarg.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.escapeshellarg.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.escapeshellarg.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Escape a string to be used as a shell argument" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: escapeshellarg - Manual" />
<meta name="twitter:description" content="Escape a string to be used as a shell argument" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: escapeshellarg - Manual" />
<meta itemprop="description" content="Escape a string to be used as a shell argument" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Escape a string to be used as a shell argument" />

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
        <a href="function.escapeshellcmd.php">
          escapeshellcmd &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.exec.php">
          &laquo; Program execution Functions        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.exec.php'>Program execution</a></li>      <li><a href='ref.exec.php'>Program execution Functions</a></li>      </ul>
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
            <option value='en/function.escapeshellarg.php' selected="selected">English</option>
            <option value='de/function.escapeshellarg.php'>German</option>
            <option value='es/function.escapeshellarg.php'>Spanish</option>
            <option value='fr/function.escapeshellarg.php'>French</option>
            <option value='it/function.escapeshellarg.php'>Italian</option>
            <option value='ja/function.escapeshellarg.php'>Japanese</option>
            <option value='pt_BR/function.escapeshellarg.php'>Brazilian Portuguese</option>
            <option value='ru/function.escapeshellarg.php'>Russian</option>
            <option value='tr/function.escapeshellarg.php'>Turkish</option>
            <option value='uk/function.escapeshellarg.php'>Ukrainian</option>
            <option value='zh/function.escapeshellarg.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.escapeshellarg" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">escapeshellarg</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">escapeshellarg</span> &mdash; <span class="dc-title">Escape a string to be used as a shell argument</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.escapeshellarg-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>escapeshellarg</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$arg</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>escapeshellarg()</strong></span> adds single quotes around a string
   and quotes/escapes any existing single quotes allowing you to pass a
   string directly to a shell function and having it be treated as a single
   safe argument.  This function should be used to escape individual
   arguments to shell functions coming from user input.  The shell functions
   include <span class="function"><a href="function.exec.php" class="function">exec()</a></span>, <span class="function"><a href="function.system.php" class="function">system()</a></span> and the
   <a href="language.operators.execution.php" class="link">backtick operator</a>.
  </p>
  <p class="para">
   On Windows, <span class="function"><strong>escapeshellarg()</strong></span> instead replaces percent
   signs, exclamation marks (delayed variable substitution) and double quotes
   with spaces and adds double quotes around the string.
   Furthermore, each streak of consecutive backslashes (<code class="literal">\</code>)
   is escaped by one additional backslash.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.escapeshellarg-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">arg</code></dt>
     <dd>
      <p class="para">
       The argument that will be escaped.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.escapeshellarg-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The escaped string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.escapeshellarg-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3600">
    <p><strong>Example #1 <span class="function"><strong>escapeshellarg()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />system</span><span style="color: #007700">(</span><span style="color: #DD0000">'ls '</span><span style="color: #007700">.</span><span style="color: #0000BB">escapeshellarg</span><span style="color: #007700">(</span><span style="color: #0000BB">$dir</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.escapeshellarg-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.escapeshellcmd.php" class="function" rel="rdfs-seeAlso">escapeshellcmd()</a> - Escape shell metacharacters</span></li>
    <li><span class="function"><a href="function.exec.php" class="function" rel="rdfs-seeAlso">exec()</a> - Execute an external program</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.system.php" class="function" rel="rdfs-seeAlso">system()</a> - Execute an external program and display the output</span></li>
    <li><a href="language.operators.execution.php" class="link">backtick operator</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/escapeshellarg.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.escapeshellarg%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.escapeshellarg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.escapeshellarg.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99213">  <div class="votes">
    <div id="Vu99213">
    <a href="/manual/vote-note.php?id=99213&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99213">
    <a href="/manual/vote-note.php?id=99213&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99213" title="79% like this...">
    105
    </div>
  </div>
  <a href="#99213" class="name">
  <strong class="user"><em>phil at philfreo dot com</em></strong></a><a class="genanchor" href="#99213"> &para;</a><div class="date" title="2010-08-03 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99213">
<div class="phpcode"><code><span class="html">When escapeshellarg() was stripping my non-ASCII characters from a UTF-8 string, adding the following fixed the problem:<br /><br /><span class="default">&lt;?php<br />setlocale</span><span class="keyword">(</span><span class="default">LC_CTYPE</span><span class="keyword">, </span><span class="string">"en_US.UTF-8"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128249">  <div class="votes">
    <div id="Vu128249">
    <a href="/manual/vote-note.php?id=128249&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128249">
    <a href="/manual/vote-note.php?id=128249&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128249" title="90% like this...">
    9
    </div>
  </div>
  <a href="#128249" class="name">
  <strong class="user"><em>lucgommans.nl</em></strong></a><a class="genanchor" href="#128249"> &para;</a><div class="date" title="2023-02-24 05:55"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128249">
<div class="phpcode"><code><span class="html">This does not prevent all forms of command injection.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// GET /example.php?file[]=x&amp;file[]=-I&amp;file[]=bash%20-c%20touch\%20/tmp/lucwashere<br /><br /></span><span class="default">$files_to_archive </span><span class="keyword">= [];<br />foreach (</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'file'</span><span class="keyword">] as </span><span class="default">$file</span><span class="keyword">) {<br />    </span><span class="default">$files_to_archive</span><span class="keyword">[] = </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">);<br />}   <br /><br /></span><span class="default">exec</span><span class="keyword">(</span><span class="string">"tar cf my.tar " </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$files_to_archive</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Despite correct escaping to prevent shell injection, this will run the specified code. The arguments instruct tar to run a command in bash. You can then check the /tmp directory to verify that the code ran.<br /><br />Of course, an attacker would replace this with a more malicious variant. For black box vulnerability testing, a sleep of a few seconds can be safely used to determine whether the parameter is vulnerable.<br /><br />The vulnerability here is that tar, like nearly every other program, will interpret arguments that start with a hyphen as an option that modifies its behaviour. Many programs, such as tcpdump, man, zip, gpg, tar, etc., have an option to execute another command. Even if you use a program that does not (and will never) have such an execution option, its functioning would be influenced by the specified extra options, either on purpose or by accident because some string just happens to start with a hyphen (similar to how fields vulnerable to SQL injection accidentally break on any data with an apostrophe or quote symbol in it: it's just bad UX).<br /><br />Many programs allow using a double hyphen, --, to separate positional arguments from options. If you change the above code to use this exec line, it is no longer vulnerable:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// notice the -- after specifying the options we want<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="string">"tar cf my.tar -- " </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">$files_to_archive</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Not every program supports this separator, in which case you need to find an alternative input method (e.g., nmap -iL targets.txt instead of nmap 2001:db8::/96) or deny starting arguments with a hyphen.<br /><br />Of course, ideally one would use data bindings via libraries to avoid having to do the dangerous escaping dance altogether, similar to parameterized SQL queries, but I did not yet see this caveat mentioned and thought it worth adding for when escapeshellarg() is still used.</span></code></div>
  </div>
 </div>
  <div class="note" id="123718">  <div class="votes">
    <div id="Vu123718">
    <a href="/manual/vote-note.php?id=123718&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123718">
    <a href="/manual/vote-note.php?id=123718&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123718" title="79% like this...">
    14
    </div>
  </div>
  <a href="#123718" class="name">
  <strong class="user"><em>daverandom</em></strong></a><a class="genanchor" href="#123718"> &para;</a><div class="date" title="2019-03-23 02:32"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123718">
<div class="phpcode"><code><span class="html">On Windows, this function naively strips special characters and replaces them with spaces. The resulting string is always safe for use with exec() etc, but the operation is not lossless - strings containing " or % will not be passed through to the child process correctly.
<br />
<br />Correctly escaping shell commands on Windows is not a simple matter. Programs must consider two distinct escape mechanisms which serve different purposes:
<br /> 1) The convention used by the CommandLineToArgV() windows system function, used by the child process to interpret the command line string
<br /> 2) The convention used by cmd.exe to escape shell meta-characters (e.g. output redirection controls)
<br />
<br />All commands should be escaped for CommandLineToArgV() - this mechanism is applied to each argument individually before it is appended to the command line string. The resulting string may be safely used with the CreateProcess() family of system functions. However...
<br />
<br />In almost all cases when creating a child process from PHP on Windows, it is done indirectly by invoking cmd.exe - this is to enable the use of shell functionality such as I/O redirection and environment variable substitution. As a consequence, the entire command string must be further escaped for cmd.exe. If the executed command contains further indirect calls through cmd.exe, each child command must be escaped again for each level of indirection.
<br />
<br />The following functions can be used to correctly escape strings such that they are safely passed through to a child process:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">/**
<br /> * Escape a single value in accordance with CommandLineToArgV()
<br /> * <a href="https://docs.microsoft.com/en-us/previous-versions/17w5ykft(v=vs.85" rel="nofollow" target="_blank">https://docs.microsoft.com/en-us/previous-versions/17w5ykft(v=vs.85</a>)
<br /> */
<br /></span><span class="keyword">function </span><span class="default">escape_win32_argv</span><span class="keyword">(</span><span class="default">string $value</span><span class="keyword">): </span><span class="default">string
<br /></span><span class="keyword">{
<br />    static </span><span class="default">$expr </span><span class="keyword">= </span><span class="string">'(
<br />        [\x00-\x20\x7F"] # control chars, whitespace or double quote
<br />      | \\\\++ (?=("|$)) # backslashes followed by a quote or at the end
<br />    )ux'</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$value </span><span class="keyword">=== </span><span class="string">''</span><span class="keyword">) {
<br />        return </span><span class="string">'""'</span><span class="keyword">;
<br />    }
<br />
<br />    </span><span class="default">$quote </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;
<br />    </span><span class="default">$replacer </span><span class="keyword">= function(</span><span class="default">$match</span><span class="keyword">) use(</span><span class="default">$value</span><span class="keyword">, &amp;</span><span class="default">$quote</span><span class="keyword">) {
<br />        switch (</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]) { </span><span class="comment">// only inspect the first byte of the match
<br />
<br />            </span><span class="keyword">case </span><span class="string">'"'</span><span class="keyword">: </span><span class="comment">// double quotes are escaped and must be quoted
<br />                </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'\\"'</span><span class="keyword">;
<br />            case </span><span class="string">' '</span><span class="keyword">: case </span><span class="string">"\t"</span><span class="keyword">: </span><span class="comment">// spaces and tabs are ok but must be quoted
<br />                </span><span class="default">$quote </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;
<br />                return </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />            case </span><span class="string">'\\'</span><span class="keyword">: </span><span class="comment">// matching backslashes are escaped if quoted
<br />                </span><span class="keyword">return </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] . </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />            default: throw new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(
<br />                </span><span class="string">"Invalid byte at offset %d: 0x%02X"</span><span class="keyword">,
<br />                </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]), </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$match</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])
<br />            ));
<br />        }
<br />    };
<br />
<br />    </span><span class="default">$escaped </span><span class="keyword">= </span><span class="default">preg_replace_callback</span><span class="keyword">(</span><span class="default">$expr</span><span class="keyword">, </span><span class="default">$replacer</span><span class="keyword">, (string)</span><span class="default">$value</span><span class="keyword">);
<br />
<br />    if (</span><span class="default">$escaped </span><span class="keyword">=== </span><span class="default">null</span><span class="keyword">) {
<br />        throw </span><span class="default">preg_last_error</span><span class="keyword">() === </span><span class="default">PREG_BAD_UTF8_ERROR
<br />            </span><span class="keyword">? new </span><span class="default">InvalidArgumentException</span><span class="keyword">(</span><span class="string">"Invalid UTF-8 string"</span><span class="keyword">)
<br />            : new </span><span class="default">Error</span><span class="keyword">(</span><span class="string">"PCRE error: " </span><span class="keyword">. </span><span class="default">preg_last_error</span><span class="keyword">());
<br />    }
<br />
<br />    return </span><span class="default">$quote </span><span class="comment">// only quote when needed
<br />        </span><span class="keyword">? </span><span class="string">'"' </span><span class="keyword">. </span><span class="default">$escaped </span><span class="keyword">. </span><span class="string">'"'
<br />        </span><span class="keyword">: </span><span class="default">$value</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">/** Escape cmd.exe metacharacters with ^ */
<br /></span><span class="keyword">function </span><span class="default">escape_win32_cmd</span><span class="keyword">(</span><span class="default">string $value</span><span class="keyword">): </span><span class="default">string
<br /></span><span class="keyword">{
<br />    return </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'([()%!^"&lt;&gt;&amp;|])'</span><span class="keyword">, </span><span class="string">'^$0'</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">/** Like shell_exec() but bypass cmd.exe */
<br /></span><span class="keyword">function </span><span class="default">noshell_exec</span><span class="keyword">(</span><span class="default">string $command</span><span class="keyword">): </span><span class="default">string
<br /></span><span class="keyword">{
<br />    static </span><span class="default">$descriptors </span><span class="keyword">= [[</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">],[</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">],[</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">]],
<br />           </span><span class="default">$options </span><span class="keyword">= [</span><span class="string">'bypass_shell' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">];
<br />
<br />    if (!</span><span class="default">$proc </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">, </span><span class="default">$descriptors</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">)) {
<br />        throw new </span><span class="default">\Error</span><span class="keyword">(</span><span class="string">'Creating child process failed'</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />    </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />    </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">);
<br />
<br />    return </span><span class="default">$result</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="comment">// usage
<br />
<br /></span><span class="default">$badString </span><span class="keyword">= </span><span class="string">'String with "C:\\quotes\\" or malicious %OS% stuff \\'</span><span class="keyword">;
<br /></span><span class="default">$cmdParts </span><span class="keyword">= [
<br />    </span><span class="string">'php'</span><span class="keyword">,
<br />    </span><span class="string">'-d'</span><span class="keyword">, </span><span class="string">'display_errors=1'</span><span class="keyword">, </span><span class="string">'-d'</span><span class="keyword">, </span><span class="string">'error_reporting=-1'</span><span class="keyword">,
<br />    </span><span class="string">'-r'</span><span class="keyword">, </span><span class="string">'echo $argv[1];'</span><span class="keyword">,
<br />    </span><span class="default">$badString </span><span class="comment">// child process $argv[1] value
<br /></span><span class="keyword">];
<br />
<br /></span><span class="comment">/* The typical approach - works fine on POSIX shells but totally wrong
<br />   on Windows */
<br /></span><span class="default">$wrong </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'escapeshellarg'</span><span class="keyword">, </span><span class="default">$cmdParts</span><span class="keyword">));
<br />
<br /></span><span class="comment">/* Always escape each argument individually */
<br /></span><span class="default">$escaped </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'escape_win32_argv'</span><span class="keyword">, </span><span class="default">$cmdParts</span><span class="keyword">));
<br />
<br /></span><span class="comment">/* In almost all cases, escape for cmd.exe as well - the only exception is
<br />   when using proc_open() with the bypass_shell option. cmd doesn't handle
<br />   arguments individually, so the entire command line string can be escaped,
<br />   no need to process arguments individually */
<br /></span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">escape_win32_cmd</span><span class="keyword">(</span><span class="default">$escaped</span><span class="keyword">);
<br />
<br /></span><span class="default">$cmds </span><span class="keyword">= [
<br />    </span><span class="string">'escapeshellarg() - wrong' </span><span class="keyword">=&gt; </span><span class="default">$wrong</span><span class="keyword">,
<br />    </span><span class="string">'escape_win32_argv() - correct for bypass_shell' </span><span class="keyword">=&gt; </span><span class="default">$escaped</span><span class="keyword">,
<br />    </span><span class="string">'escape_win32_cmd(escape_win32_argv()) - correct everywhere else' </span><span class="keyword">=&gt; </span><span class="default">$cmd</span><span class="keyword">,
<br />];
<br />
<br />function </span><span class="default">check</span><span class="keyword">(</span><span class="default">$original</span><span class="keyword">, </span><span class="default">$received</span><span class="keyword">)
<br />{
<br />    </span><span class="default">$match </span><span class="keyword">= </span><span class="default">$original </span><span class="keyword">=== </span><span class="default">$received </span><span class="keyword">? </span><span class="string">'=' </span><span class="keyword">: </span><span class="string">'X'</span><span class="keyword">;
<br />    return </span><span class="string">"</span><span class="default">$match</span><span class="string"> '</span><span class="default">$received</span><span class="string">'"</span><span class="keyword">;
<br />}
<br />
<br />foreach (</span><span class="default">$cmds </span><span class="keyword">as </span><span class="default">$description </span><span class="keyword">=&gt; </span><span class="default">$cmd</span><span class="keyword">) {
<br />    echo </span><span class="string">"</span><span class="default">$description</span><span class="string">\n"</span><span class="keyword">;
<br />    echo </span><span class="string">" </span><span class="default">$cmd</span><span class="string">\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"  original:         '</span><span class="default">$badString</span><span class="string">'\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"  shell_exec():   " </span><span class="keyword">. </span><span class="default">check</span><span class="keyword">(</span><span class="default">$badString</span><span class="keyword">, </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"  noshell_exec(): " </span><span class="keyword">. </span><span class="default">check</span><span class="keyword">(</span><span class="default">$badString</span><span class="keyword">, </span><span class="default">noshell_exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">)) . </span><span class="string">"\n"</span><span class="keyword">;
<br />    echo </span><span class="string">"\n"</span><span class="keyword">;
<br />}</span></span></code></div>
  </div>
 </div>
  <div class="note" id="74815">  <div class="votes">
    <div id="Vu74815">
    <a href="/manual/vote-note.php?id=74815&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74815">
    <a href="/manual/vote-note.php?id=74815&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74815" title="77% like this...">
    15
    </div>
  </div>
  <a href="#74815" class="name">
  <strong class="user"><em>egorinsk at gmail dot com</em></strong></a><a class="genanchor" href="#74815"> &para;</a><div class="date" title="2007-04-28 04:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74815">
<div class="phpcode"><code><span class="html">Under Windows, this function puts string into double-quotes, not single, and replaces %(percent sign) with a space, that's why it's impossible to pass a filename with percents in its name through this function.</span></code></div>
  </div>
 </div>
  <div class="note" id="66430">  <div class="votes">
    <div id="Vu66430">
    <a href="/manual/vote-note.php?id=66430&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66430">
    <a href="/manual/vote-note.php?id=66430&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66430" title="75% like this...">
    22
    </div>
  </div>
  <a href="#66430" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#66430"> &para;</a><div class="date" title="2006-05-22 05:25"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66430">
<div class="phpcode"><code><span class="html">Most of the comments above have misunderstood this function. It does not need to escape characters such as '$' and '`' - it uses the fact that the shell does not treat any characters as special inside single quotes (except the single quote character itself). The correct way to use this function is to call it on a variable that is intended to be passed to a command-line program as a single argument to that program - you do not call it on command-line as a whole.<br /><br />The person above who comments that this function behaves badly if given the empty string as input is correct - this is a bug. It should indeed return two single quotes in this case.</span></code></div>
  </div>
 </div>
  <div class="note" id="123281">  <div class="votes">
    <div id="Vu123281">
    <a href="/manual/vote-note.php?id=123281&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123281">
    <a href="/manual/vote-note.php?id=123281&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123281" title="77% like this...">
    5
    </div>
  </div>
  <a href="#123281" class="name">
  <strong class="user"><em>Jasen</em></strong></a><a class="genanchor" href="#123281"> &para;</a><div class="date" title="2018-10-30 07:49"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123281">
<div class="phpcode"><code><span class="html">if you want empty arguments for empty input <br /><br />use the form  <br />    <br />     escapeshellarg($input)."''"<br /><br />the shell will treat foo'' as foo  but empty input will become an empty argument instead of a missing one.</span></code></div>
  </div>
 </div>
  <div class="note" id="94020">  <div class="votes">
    <div id="Vu94020">
    <a href="/manual/vote-note.php?id=94020&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94020">
    <a href="/manual/vote-note.php?id=94020&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94020" title="70% like this...">
    7
    </div>
  </div>
  <a href="#94020" class="name">
  <strong class="user"><em>phpman at crustynet dot org dot uk</em></strong></a><a class="genanchor" href="#94020"> &para;</a><div class="date" title="2009-10-12 10:53"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94020">
<div class="phpcode"><code><span class="html">The comment from 'rmays at castlecomm dot com' is incorrect: single quotes cannot be backslash-escaped inside a single-quoted string when constructing a shell argument. The output from this function is in fact correct. It drops out of the single-quoted string, includes a literal single quote with a backslash-escape, then resumes the single-quoted string. Observe:<br /><br />[shellarg.php]<br /><span class="default">&lt;?php<br /><br />system</span><span class="keyword">(</span><span class="string">"echo ' single quote\'d '"</span><span class="keyword">);<br /></span><span class="default">system</span><span class="keyword">(</span><span class="string">"echo ' single quote'\''d '"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />$ php shellarg.php <br />sh: -c: line 0: unexpected EOF while looking for matching `''<br />sh: -c: line 1: syntax error: unexpected end of file<br /> single quote'd</span></code></div>
  </div>
 </div>
  <div class="note" id="84789">  <div class="votes">
    <div id="Vu84789">
    <a href="/manual/vote-note.php?id=84789&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84789">
    <a href="/manual/vote-note.php?id=84789&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84789" title="69% like this...">
    9
    </div>
  </div>
  <a href="#84789" class="name">
  <strong class="user"><em>Audun</em></strong></a><a class="genanchor" href="#84789"> &para;</a><div class="date" title="2008-07-30 05:02"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84789">
<div class="phpcode"><code><span class="html">The reason why % are replaced with space on windows is that it is impossible in cmd.exe to escape or quote them so that environment variables are not expanded.  If for instance %path% is in your argument it will always be expanded, so the only safe thing to do is to replace % with something else.<br /><br />Alternatively, you could wipe the environment before making the call to exec(), but that has its side-effects.</span></code></div>
  </div>
 </div>
  <div class="note" id="88325">  <div class="votes">
    <div id="Vu88325">
    <a href="/manual/vote-note.php?id=88325&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88325">
    <a href="/manual/vote-note.php?id=88325&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88325" title="70% like this...">
    4
    </div>
  </div>
  <a href="#88325" class="name">
  <strong class="user"><em>info at infosoporte dot com</em></strong></a><a class="genanchor" href="#88325"> &para;</a><div class="date" title="2009-01-20 04:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88325">
<div class="phpcode"><code><span class="html">If escapeshellarg() function removes your accents (like á, a with an 'accute') from the given string, ensure your LC_ALL variable is correct. If using it via web, you need to restart Apache or the corresponding web server after setting LC_ALL with a export LC_ALL=es_ES.utf8 (for example) from your shell.</span></code></div>
  </div>
 </div>
  <div class="note" id="127603">  <div class="votes">
    <div id="Vu127603">
    <a href="/manual/vote-note.php?id=127603&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127603">
    <a href="/manual/vote-note.php?id=127603&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127603" title="66% like this...">
    1
    </div>
  </div>
  <a href="#127603" class="name">
  <strong class="user"><em>Tony C</em></strong></a><a class="genanchor" href="#127603"> &para;</a><div class="date" title="2022-09-08 09:59"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127603">
<div class="phpcode"><code><span class="html">While using this function to pass filenames to the command line I noticed shell_exec() was failing. Upon further investigation it appears escapeshellarg() removes double spaces from file names. <br /><br />For example:<br /><br />$filename = "my  super file.txt"; // notice the double space after "my"<br /><br />echo escapeshellarg($filename);<br /><br />Produces:<br />'my super file.txt'<br /><br />(second space was removed)</span></code></div>
  </div>
 </div>
  <div class="note" id="126916">  <div class="votes">
    <div id="Vu126916">
    <a href="/manual/vote-note.php?id=126916&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126916">
    <a href="/manual/vote-note.php?id=126916&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126916" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126916" class="name">
  <strong class="user"><em>Jannis</em></strong></a><a class="genanchor" href="#126916"> &para;</a><div class="date" title="2022-03-11 07:17"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126916">
<div class="phpcode"><code><span class="html">escapeshellarg() will strip all invalid characters according to your locale settings (e.g. latin-1 characters are stripped when locale/LC_CTYPE is UTF-8).<br /><br />Please keep in mind that the locale support depends on your C standard library while compiling. This might result in strange behavior on embedded systems that use a standard library with poor locale support, other  than glibc.</span></code></div>
  </div>
 </div>
  <div class="note" id="109514">  <div class="votes">
    <div id="Vu109514">
    <a href="/manual/vote-note.php?id=109514&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109514">
    <a href="/manual/vote-note.php?id=109514&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109514" title="64% like this...">
    7
    </div>
  </div>
  <a href="#109514" class="name">
  <strong class="user"><em>sblyons+php at gmail dot com</em></strong></a><a class="genanchor" href="#109514"> &para;</a><div class="date" title="2012-07-24 02:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109514">
<div class="phpcode"><code><span class="html">Take care if using escapeshellarg() on serialized objects. Serialized objects contain null bytes, and escapeshellarg stops on the first null byte so you will not receive the full argument. (I consider this a bug, though not sure what it should do in this case. Probably serialize shouldn't have used null bytes, but too late for that now).<br />The workaround I've found to pass serialized objects on the command line is to base64_encode() them first and decode on the other side.</span></code></div>
  </div>
 </div>
  <div class="note" id="125018">  <div class="votes">
    <div id="Vu125018">
    <a href="/manual/vote-note.php?id=125018&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125018">
    <a href="/manual/vote-note.php?id=125018&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125018" title="no votes...">
    0
    </div>
  </div>
  <a href="#125018" class="name">
  <strong class="user"><em>crose</em></strong></a><a class="genanchor" href="#125018"> &para;</a><div class="date" title="2020-05-16 01:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125018">
<div class="phpcode"><code><span class="html">Ubuntu: wondering why your system locale (e.g. 'en_US.UTF-8') is  not inherited to your Apache (still 'C')? <br /><br />Check `/etc/apache2/envvars`  ... activate the line `. /etc/default/locale`</span></code></div>
  </div>
 </div>
  <div class="note" id="125808">  <div class="votes">
    <div id="Vu125808">
    <a href="/manual/vote-note.php?id=125808&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125808">
    <a href="/manual/vote-note.php?id=125808&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125808" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125808" class="name">
  <strong class="user"><em>divinity76 at gmail dot com</em></strong></a><a class="genanchor" href="#125808"> &para;</a><div class="date" title="2021-02-11 01:45"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125808">
<div class="phpcode"><code><span class="html">if you need to generate Linux arguments even when running on Windows, try<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/**<br />     * quote arguments using linux escape rules, regardless of host OS<br />     * (eg, it will use linux escape rules even when running on Windows)<br />     *<br />     * @param string $arg<br />     * @throws \InvalidArgumentException if argument contains null bytes<br />     * @return string<br />     */<br />    /*public static*/ </span><span class="keyword">function </span><span class="default">linux_escapeshellarg</span><span class="keyword">(</span><span class="default">string $arg</span><span class="keyword">): </span><span class="default">string<br />    </span><span class="keyword">{<br />        if (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="string">"\x00"</span><span class="keyword">)) {<br />            throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">"argument contains null bytes, it's impossible to escape null bytes!"</span><span class="keyword">);<br />        }<br />        return </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, [<br />            </span><span class="string">"'" </span><span class="keyword">=&gt; </span><span class="string">"'\\''"<br />        </span><span class="keyword">]) . </span><span class="string">"'"</span><span class="keyword">;<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125807">  <div class="votes">
    <div id="Vu125807">
    <a href="/manual/vote-note.php?id=125807&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125807">
    <a href="/manual/vote-note.php?id=125807&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125807" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#125807" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125807"> &para;</a><div class="date" title="2021-02-11 01:44"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125807">
<div class="phpcode"><code><span class="html">if you need to generate Linux arguments even when running on Windows, try<br /><br /><span class="default">&lt;?php<br /><br />    </span><span class="comment">/**<br />     * quote arguments using linux escape rules, regardless of host OS<br />     * (eg, it will use linux escape rules even when running on Windows)<br />     *<br />     * @param string $arg<br />     * @throws \InvalidArgumentException if argument contains null bytes<br />     * @return string<br />     */<br />    /*public static*/ </span><span class="keyword">function </span><span class="default">linux_escapeshellarg</span><span class="keyword">(</span><span class="default">string $arg</span><span class="keyword">): </span><span class="default">string<br />    </span><span class="keyword">{<br />        if (</span><span class="default">false </span><span class="keyword">!== </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, </span><span class="string">"\x00"</span><span class="keyword">)) {<br />            throw new </span><span class="default">\InvalidArgumentException</span><span class="keyword">(</span><span class="string">"argument contains null bytes, it's impossible to escape null bytes!"</span><span class="keyword">);<br />        }<br />        return </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">, [<br />            </span><span class="string">"'" </span><span class="keyword">=&gt; </span><span class="string">"'\\''"<br />        </span><span class="keyword">]) . </span><span class="string">"'"</span><span class="keyword">;<br />    }</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114873">  <div class="votes">
    <div id="Vu114873">
    <a href="/manual/vote-note.php?id=114873&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114873">
    <a href="/manual/vote-note.php?id=114873&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114873" title="50% like this...">
    0
    </div>
  </div>
  <a href="#114873" class="name">
  <strong class="user"><em>jon at wroth dot org</em></strong></a><a class="genanchor" href="#114873"> &para;</a><div class="date" title="2014-04-18 07:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114873">
<div class="phpcode"><code><span class="html">the best alternative to escapeshellarg() for windows i've come up with is this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">w32escapeshellarg</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">)<br />{ return </span><span class="string">'"' </span><span class="keyword">. </span><span class="default">addcslashes</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="string">'\\"'</span><span class="keyword">) . </span><span class="string">'"'</span><span class="keyword">; }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="111919">  <div class="votes">
    <div id="Vu111919">
    <a href="/manual/vote-note.php?id=111919&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111919">
    <a href="/manual/vote-note.php?id=111919&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111919" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#111919" class="name">
  <strong class="user"><em>wijnand at jpresult dot nl</em></strong></a><a class="genanchor" href="#111919"> &para;</a><div class="date" title="2013-04-11 11:32"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111919">
<div class="phpcode"><code><span class="html">Here's a quick and dirty replacement of this function in case you need to deal with special characters.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * An ugly, non-ASCII-character safe replacement of escapeshellarg().<br /> */<br /></span><span class="keyword">function </span><span class="default">escapeshellarg_special</span><span class="keyword">(</span><span class="default">$file</span><span class="keyword">) {<br />  return </span><span class="string">"'" </span><span class="keyword">. </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"'"</span><span class="keyword">, </span><span class="string">"'\"'\"'"</span><span class="keyword">, </span><span class="default">$file</span><span class="keyword">) . </span><span class="string">"'"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="91814">  <div class="votes">
    <div id="Vu91814">
    <a href="/manual/vote-note.php?id=91814&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd91814">
    <a href="/manual/vote-note.php?id=91814&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V91814" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#91814" class="name">
  <strong class="user"><em>jrbeaure at uvm dot edu</em></strong></a><a class="genanchor" href="#91814"> &para;</a><div class="date" title="2009-06-26 06:51"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom91814">
<div class="phpcode"><code><span class="html">When running a string of LaTeX code containing hyphens through as an argument to pdflatex escaped using this command, it will result in failure.</span></code></div>
  </div>
 </div>
  <div class="note" id="40996">  <div class="votes">
    <div id="Vu40996">
    <a href="/manual/vote-note.php?id=40996&amp;page=function.escapeshellarg&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40996">
    <a href="/manual/vote-note.php?id=40996&amp;page=function.escapeshellarg&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40996" title="33% like this...">
    -5
    </div>
  </div>
  <a href="#40996" class="name">
  <strong class="user"><em>vosechu at roman-fleuve dot com</em></strong></a><a class="genanchor" href="#40996"> &para;</a><div class="date" title="2004-03-25 05:05"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40996">
<div class="phpcode"><code><span class="html">If escapeshellarg() returned something on a null input it would probably break more programs than it helps. Even if it's two "'s or two ''s, this function wouldn't work the way it's supposed to (that is, returning nothing). <br /><br />However, most people do not put "" into their commands but I can see where it might be useful at the same time. <br />Perhaps an option in the command that would return the type of null we want. I might want the null character to be returned, someone else might want '', and someone else might want nothing at all.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.escapeshellarg&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.escapeshellarg.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.escapeshellarg.php" title="escapeshellarg">escapeshellarg</a>
                        </li>
                                                <li class="">
                            <a href="function.escapeshellcmd.php" title="escapeshellcmd">escapeshellcmd</a>
                        </li>
                                                <li class="">
                            <a href="function.exec.php" title="exec">exec</a>
                        </li>
                                                <li class="">
                            <a href="function.passthru.php" title="passthru">passthru</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-close.php" title="proc_&#8203;close">proc_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-get-status.php" title="proc_&#8203;get_&#8203;status">proc_&#8203;get_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-nice.php" title="proc_&#8203;nice">proc_&#8203;nice</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.system.php" title="system">system</a>
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
