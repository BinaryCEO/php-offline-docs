<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: proc_open - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.proc-open.php">
 <link rel="shorturl" href="https://www.php.net/proc-open">
 <link rel="alternate" href="https://www.php.net/proc-open" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.proc-nice.php">
 <link rel="next" href="https://www.php.net/manual/en/function.proc-terminate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.proc-open.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.proc-open.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.proc-open.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.proc-open.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.proc-open.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.proc-open.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.proc-open.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.proc-open.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.proc-open.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.proc-open.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.proc-open.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute a command and open file pointers for input/output" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: proc_open - Manual" />
<meta name="twitter:description" content="Execute a command and open file pointers for input/output" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: proc_open - Manual" />
<meta itemprop="description" content="Execute a command and open file pointers for input/output" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute a command and open file pointers for input/output" />

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
        <a href="function.proc-terminate.php">
          proc_terminate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.proc-nice.php">
          &laquo; proc_nice        </a>
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
            <option value='en/function.proc-open.php' selected="selected">English</option>
            <option value='de/function.proc-open.php'>German</option>
            <option value='es/function.proc-open.php'>Spanish</option>
            <option value='fr/function.proc-open.php'>French</option>
            <option value='it/function.proc-open.php'>Italian</option>
            <option value='ja/function.proc-open.php'>Japanese</option>
            <option value='pt_BR/function.proc-open.php'>Brazilian Portuguese</option>
            <option value='ru/function.proc-open.php'>Russian</option>
            <option value='tr/function.proc-open.php'>Turkish</option>
            <option value='uk/function.proc-open.php'>Ukrainian</option>
            <option value='zh/function.proc-open.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.proc-open" class="refentry">
   <div class="refnamediv">
    <h1 class="refname">proc_open</h1>
    <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">proc_open</span> &mdash; <span class="dc-title">
     Execute a command and open file pointers for input/output
    </span></p>

   </div>
   <div class="refsect1 description" id="refsect1-function.proc-open-description">
    <h3 class="title">Description</h3>
     <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>proc_open</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$command</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$descriptor_spec</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$pipes</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$cwd</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$env_vars</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$options</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

    <p class="para rdfs-comment">
     <span class="function"><strong>proc_open()</strong></span> is similar to <span class="function"><a href="function.popen.php" class="function">popen()</a></span>
     but provides a much greater degree of control over the program execution.
    </p>



   </div>


 <div class="refsect1 parameters" id="refsect1-function.proc-open-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The commandline to execute as <span class="type"><a href="language.types.string.php" class="type string">string</a></span>. Special characters have to be properly escaped,
       and proper quoting has to be applied.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        On <em>Windows</em>, unless <code class="literal">bypass_shell</code> is set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> in
        <code class="parameter">options</code>, the <code class="parameter">command</code> is
        passed to <strong class="command">cmd.exe</strong> (actually, <code class="literal">%ComSpec%</code>)
        with the <code class="literal">/c</code> flag as <em>unquoted</em> string
        (i.e. exactly as has been given to <span class="function"><strong>proc_open()</strong></span>).
        This can cause <strong class="command">cmd.exe</strong> to remove enclosing quotes from
        <code class="parameter">command</code> (for details see the <strong class="command">cmd.exe</strong> documentation),
        resulting in unexpected, and potentially even dangerous behavior, because
        <strong class="command">cmd.exe</strong> error messages may contain (parts of) the passed
        <code class="parameter">command</code> (see example below).
       </span>
      </p></blockquote>
      <p class="para">
       As of PHP 7.4.0, <code class="parameter">command</code> may be passed as <span class="type"><a href="language.types.array.php" class="type array">array</a></span> of command parameters.
       In this case the process will be opened directly (without going through a shell)
       and PHP will take care of any necessary argument escaping.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        On Windows, the argument escaping of the <span class="type"><a href="language.types.array.php" class="type array">array</a></span> elements assumes that the
        command line parsing of the executed command is compatible with the parsing
        of command line arguments done by the VC runtime.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">descriptor_spec</code></dt>
     <dd>
      <p class="para">
       An indexed array where the key represents the descriptor number and the
       value represents how PHP will pass that descriptor to the child
       process. 0 is stdin, 1 is stdout, while 2 is stderr.
      </p>
      <p class="para">
       Each element can be:
       <ul class="simplelist">
        <li>An array describing the pipe to pass to the process. The first
         element is the descriptor type and the second element is an option for
         the given type. Valid types are <code class="literal">pipe</code> (the second
         element is either <code class="literal">r</code> to pass the read end of the pipe
         to the process, or <code class="literal">w</code> to pass the write end) and
         <code class="literal">file</code> (the second element is a filename).
         Note that anything else than <code class="literal">w</code> is treated like <code class="literal">r</code>.
        </li>
        <li>
         A stream resource representing a real file descriptor (e.g. opened file,
         a socket, <strong><code><a href="reserved.constants.php#constant.stdin">STDIN</a></code></strong>).
        </li>
       </ul>
      </p>
      <p class="para">
       The file descriptor numbers are not limited to 0, 1 and 2 - you may
       specify any valid file descriptor number and it will be passed to the
       child process. This allows your script to interoperate with other
       scripts that run as &quot;co-processes&quot;. In particular, this is useful for
       passing passphrases to programs like PGP, GPG and openssl in a more
       secure manner. It is also useful for reading status information
       provided by those programs on auxiliary file descriptors.
      </p>
     </dd>
    
    
     <dt><code class="parameter">pipes</code></dt>
     <dd>
      <p class="para">
       Will be set to an indexed array of file pointers that correspond to
       PHP&#039;s end of any pipes that are created.
      </p>
     </dd>
    
    
     <dt><code class="parameter">cwd</code></dt>
     <dd>
      <p class="para">
       The initial working dir for the command. This must be an
       <strong>absolute</strong> directory path, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>
       if you want to use the default value (the working dir of the current
       PHP process)
      </p>
     </dd>
    
    
     <dt><code class="parameter">env_vars</code></dt>
     <dd>
      <p class="para">
       An array with the environment variables for the command that will be
       run, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to use the same environment as the current PHP process
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Allows you to specify additional options. Currently supported options
       include:
       <ul class="simplelist">
        <li>
         <code class="literal">suppress_errors</code> (windows only): suppresses errors
         generated by this function when it's set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
        </li>
        <li>
         <code class="literal">bypass_shell</code> (windows only): bypass
         <code class="literal">cmd.exe</code> shell when set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
        </li>
        <li>
         <code class="literal">blocking_pipes</code> (windows only): force
         blocking pipes when set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
        </li>
        <li>
         <code class="literal">create_process_group</code> (windows only): allow the
         child process to handle <code class="literal">CTRL</code> events when set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>
        </li>
        <li>
         <code class="literal">create_new_console</code> (windows only): the new process
         has a new console, instead of inheriting its parent's console
        </li>
       </ul>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.proc-open-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a resource representing the process, which should be freed using
   <span class="function"><a href="function.proc-close.php" class="function">proc_close()</a></span> when you are finished with it. On failure
   returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.proc-open-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   As of PHP 8.3.0, throws a <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
   <code class="parameter">command</code> is an array without at least one
   non-empty element.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.proc-open-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
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
        A <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> will be thrown if
        <code class="parameter">command</code> is an array without at least one
        non-empty element.
       </td>
      </tr>

      <tr>
       <td>7.4.4</td>
       <td>
        Added the <code class="literal">create_new_console</code> option to the
        <code class="parameter">options</code> parameter.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        <span class="function"><strong>proc_open()</strong></span> now also accepts an <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
        for the <code class="parameter">command</code>.
       </td>
      </tr>

      <tr>
       <td>7.4.0</td>
       <td>
        Added the <code class="literal">create_process_group</code> option to the
        <code class="parameter">options</code> parameter.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.proc-open-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3604">
    <p><strong>Example #1 A <span class="function"><strong>proc_open()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$descriptorspec </span><span style="color: #007700">= array(<br />   </span><span style="color: #0000BB">0 </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"pipe"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">),  </span><span style="color: #FF8000">// stdin is a pipe that the child will read from<br />   </span><span style="color: #0000BB">1 </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"pipe"</span><span style="color: #007700">, </span><span style="color: #DD0000">"w"</span><span style="color: #007700">),  </span><span style="color: #FF8000">// stdout is a pipe that the child will write to<br />   </span><span style="color: #0000BB">2 </span><span style="color: #007700">=&gt; array(</span><span style="color: #DD0000">"file"</span><span style="color: #007700">, </span><span style="color: #DD0000">"/tmp/error-output.txt"</span><span style="color: #007700">, </span><span style="color: #DD0000">"a"</span><span style="color: #007700">) </span><span style="color: #FF8000">// stderr is a file to write to<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$cwd </span><span style="color: #007700">= </span><span style="color: #DD0000">'/tmp'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$env </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'some_option' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'aeiou'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$process </span><span style="color: #007700">= </span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'php'</span><span style="color: #007700">, </span><span style="color: #0000BB">$descriptorspec</span><span style="color: #007700">, </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">, </span><span style="color: #0000BB">$cwd</span><span style="color: #007700">, </span><span style="color: #0000BB">$env</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$process</span><span style="color: #007700">)) {<br />    </span><span style="color: #FF8000">// $pipes now looks like this:<br />    // 0 =&gt; writeable handle connected to child stdin<br />    // 1 =&gt; readable handle connected to child stdout<br />    // Any error output will be appended to /tmp/error-output.txt<br /><br />    </span><span style="color: #0000BB">fwrite</span><span style="color: #007700">(</span><span style="color: #0000BB">$pipes</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">], </span><span style="color: #DD0000">'&lt;?php print_r($_ENV); ?&gt;'</span><span style="color: #007700">);<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$pipes</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]);<br /><br />    echo </span><span style="color: #0000BB">stream_get_contents</span><span style="color: #007700">(</span><span style="color: #0000BB">$pipes</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br />    </span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$pipes</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]);<br /><br />    </span><span style="color: #FF8000">// It is important that you close any pipes before calling<br />    // proc_close in order to avoid a deadlock<br />    </span><span style="color: #0000BB">$return_value </span><span style="color: #007700">= </span><span style="color: #0000BB">proc_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$process</span><span style="color: #007700">);<br /><br />    echo </span><span style="color: #DD0000">"command returned </span><span style="color: #0000BB">$return_value</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [some_option] =&gt; aeiou
    [PWD] =&gt; /tmp
    [SHLVL] =&gt; 1
    [_] =&gt; /usr/local/bin/php
)
command returned 0</pre>
</div>
    </div>
   </div>
  </p>

  <p class="para">
   <div class="example" id="example-3605">
    <p><strong>Example #2 <span class="function"><strong>proc_open()</strong></span> quirk on Windows</strong></p>
    <div class="example-contents"><p>
     While one may expect the following program to search the file
     <var class="filename">filename.txt</var> for the text <code class="literal">search</code> and
     to print the results, it behaves rather differently.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$descriptorspec </span><span style="color: #007700">= [</span><span style="color: #0000BB">STDIN</span><span style="color: #007700">, </span><span style="color: #0000BB">STDOUT</span><span style="color: #007700">, </span><span style="color: #0000BB">STDOUT</span><span style="color: #007700">];<br /></span><span style="color: #0000BB">$cmd </span><span style="color: #007700">= </span><span style="color: #DD0000">'"findstr" "search" "filename.txt"'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$proc </span><span style="color: #007700">= </span><span style="color: #0000BB">proc_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$cmd</span><span style="color: #007700">, </span><span style="color: #0000BB">$descriptorspec</span><span style="color: #007700">, </span><span style="color: #0000BB">$pipes</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">proc_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$proc</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">&#039;findstr&quot; &quot;search&quot; &quot;filename.txt&#039; is not recognized as an internal or external command,
operable program or batch file.</pre>
</div>
    </div>
    <div class="example-contents"><p>
     To work around that behavior, it is usually sufficient to enclose the
     <code class="parameter">command</code> in additional quotes:
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">$cmd = '""findstr" "search" "filename.txt""';</span></code></div>
    </div>

   </div>
  </p>



 </div>


 <div class="refsect1 notes" id="refsect1-function.proc-open-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Windows compatibility: Descriptors beyond 2 (stderr) are made available to
    the child process as inheritable handles, but since the Windows
    architecture does not associate file descriptor numbers with low-level
    handles, the child process does not (yet) have a means of accessing those
    handles. Stdin, stdout and stderr work as expected.
   </p>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
   If you only need a uni-directional (one-way) process pipe, use
   <span class="function"><a href="function.popen.php" class="function">popen()</a></span> instead, as it is much easier to use.
   </p>
  </p></blockquote>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-function.proc-open-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
    <li><span class="function"><a href="function.exec.php" class="function" rel="rdfs-seeAlso">exec()</a> - Execute an external program</span></li>
    <li><span class="function"><a href="function.system.php" class="function" rel="rdfs-seeAlso">system()</a> - Execute an external program and display the output</span></li>
    <li><span class="function"><a href="function.passthru.php" class="function" rel="rdfs-seeAlso">passthru()</a> - Execute an external program and display raw output</span></li>
    <li><span class="function"><a href="function.stream-select.php" class="function" rel="rdfs-seeAlso">stream_select()</a> - Runs the equivalent of the select() system call on the given
   arrays of streams with a timeout specified by seconds and microseconds</span></li>
    <li>The <a href="language.operators.execution.php" class="link">backtick operator</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/proc-open.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.proc-open%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.proc-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-open.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">35 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="128252">  <div class="votes">
    <div id="Vu128252">
    <a href="/manual/vote-note.php?id=128252&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128252">
    <a href="/manual/vote-note.php?id=128252&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128252" title="100% like this...">
    18
    </div>
  </div>
  <a href="#128252" class="name">
  <strong class="user"><em>Bobby Dylan</em></strong></a><a class="genanchor" href="#128252"> &para;</a><div class="date" title="2023-02-25 06:32"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128252">
<div class="phpcode"><code><span class="html">I'm not sure when the "blocking_pipes (windows only)" option was added to PHP, but users of this function should be fully aware that there is no such thing as a non-blocking pipe in PHP on Windows and that the "blocking_pipes" option does NOT function like you might expect.  Passing "blocking_pipes" =&gt; false does NOT mean non-blocking pipes.<br /><br />PHP uses anonymous pipes to start processes on Windows.  The Windows CreatePipe() function does not directly support overlapped I/O (aka asynchronous), which is typically how async/non-blocking I/O happens on Windows.  SetNamedPipeHandleState() has an option called PIPE_NOWAIT but Microsoft has long discouraged the use of that option.  PHP does not use PIPE_NOWAIT anywhere in the source code tree.  PHP FastCGI startup code is the only place within the PHP source code that uses overlapped I/O (and also the only place that calls SetNamedPipeHandleState() with PIPE_WAIT).  Further, stream_set_blocking() on Windows is only implemented for sockets - not file handles or pipes.  That is, calling stream_set_blocking() on pipe handles returned by proc_open() will actually do nothing on Windows.  We can derive from these facts that PHP does not have a non-blocking implementation for pipes on Windows and will therefore block/deadlock when using proc_open().<br /><br />PHP's pipe read implementation on Windows uses PeekNamedPipe() by polling on the pipe until there is some data available to read OR until ~32 seconds (3200000 * 10 microseconds of sleep) have passed before giving up, whichever comes first.  The "blocking_pipes" option, when set to true, changes that behavior to wait indefinitely (i.e. always block) until there is data on the pipe.  It's better to view the "blocking_pipes" option as a "possibly 32 second busy wait" timeout (false - the default value) vs. no timeout (true).  In either case, the boolean value for this option effectively blocks...it just happens to block a lot longer when set to true.<br /><br />The undocumented string "socket" descriptor type can be passed to proc_open() and PHP will start a temporary TCP/IP server and generate a pre-connected TCP/IP socket pair for the pipe and pass one socket to the target process and return the other as the associated pipe.  However, passing a socket handle for stdout/stderr on Windows causes the last chunk(s) of output to occasionally get lost and not be delivered to the receiving end.  This is actually a known bug in Windows itself and Microsoft's response at one point was that CreateProcess() only officially supports anonymous pipes and file handles for the standard handles (i.e. not named pipes or socket handles) and that other handle types will produce "undefined behavior."  For sockets, it will "sometimes work fine and sometimes truncate the output."  The "socket" descriptor type also introduces a race condition that is probably a security vulnerability in proc_open() where another process can successfully connect to the server side BEFORE the original process connects to the socket to create the socket pair.  This allows a rogue application to send malformed data to a process, which could trigger anything from privilege escalation to SQL injection depending on what the application does with the information on stdout/stderr.<br /><br />To get true non-blocking I/O in PHP for Windows for standard process handles (i.e. stdin, stdout, stderr) without obscure bugs cropping up, the only currently working option is to use an intermediary process that uses TCP/IP blocking sockets to route data to blocking standard handles via multithreading (i.e. start three threads to route data between the TCP/IP socket and the standard HANDLE and use a temporary secret to prevent race conditions when establishing the TCP/IP socket handles).  For those who lost count:  That's one extra process, up to four extra threads, and up to four TCP/IP sockets just to get functionally correct non-blocking I/O for proc_open() on Windows.  If you vomited a little bit at that idea/concept, well, people actually do this!  Feel free to vomit some more.</span></code></div>
  </div>
 </div>
  <div class="note" id="97379">  <div class="votes">
    <div id="Vu97379">
    <a href="/manual/vote-note.php?id=97379&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97379">
    <a href="/manual/vote-note.php?id=97379&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97379" title="78% like this...">
    28
    </div>
  </div>
  <a href="#97379" class="name">
  <strong class="user"><em>php at keith tyler dot com</em></strong></a><a class="genanchor" href="#97379"> &para;</a><div class="date" title="2010-04-16 11:32"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97379">
<div class="phpcode"><code><span class="html">Interestingly enough, it seems you actually have to store the return value in order for your streams to exist. You can't throw it away.<br /><br />In other words, this works:<br /><br /><span class="default">&lt;?php<br />$proc</span><span class="keyword">=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">"echo foo"</span><span class="keyword">,<br />  array(<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">),<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">),<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">)<br />  ),<br />  </span><span class="default">$pipes</span><span class="keyword">);<br />print </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />prints:<br />foo<br /><br />but this doesn't work:<br /><br /><span class="default">&lt;?php<br />proc_open</span><span class="keyword">(</span><span class="string">"echo foo"</span><span class="keyword">,<br />  array(<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"r"</span><span class="keyword">),<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">),<br />    array(</span><span class="string">"pipe"</span><span class="keyword">,</span><span class="string">"w"</span><span class="keyword">)<br />  ),<br />  </span><span class="default">$pipes</span><span class="keyword">);<br />print </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /></span><span class="default">?&gt;<br /></span><br />outputs:<br />Warning: stream_get_contents(): &lt;n&gt; is not a valid stream resource in Command line code on line 1<br /><br />The only difference is that in the second case we don't save the output of proc_open to a variable.</span></code></div>
  </div>
 </div>
  <div class="note" id="107856">  <div class="votes">
    <div id="Vu107856">
    <a href="/manual/vote-note.php?id=107856&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107856">
    <a href="/manual/vote-note.php?id=107856&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107856" title="70% like this...">
    24
    </div>
  </div>
  <a href="#107856" class="name">
  <strong class="user"><em>devel at romanr dot info</em></strong></a><a class="genanchor" href="#107856"> &para;</a><div class="date" title="2012-03-10 08:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107856">
<div class="phpcode"><code><span class="html">The call works as should. No bugs.<br />But. In most cases you won't able to work with pipes in blocking mode.<br />When your output pipe (process' input one, $pipes[0]) is blocking, there is a case, when you and the process are blocked on output.<br />When your input pipe (process' output one, $pipes[1]) is blocking, there is a case, when you and the process both are blocked on own input.<br />So you should switch pipes into NONBLOCKING mode (stream_set_blocking).<br />Then, there is a case, when you're not able to read anything (fread($pipes[1],...) == "") either write (fwrite($pipes[0],...) == 0). In this case, you better check the process is alive (proc_get_status) and if it still is - wait for some time (stream_select). The situation is truly asynchronous, the process may be busy working, processing your data.<br />Using shell effectively makes not possible to know whether the command is exists - proc_open always returns valid resource. You may even write some data into it (into shell, actually). But eventually it will terminate, so check the process status regularly.<br />I would advice not using mkfifo-pipes, because filesystem fifo-pipe (mkfifo) blocks open/fopen call (!!!) until somebody opens other side (unix-related behavior). In case the pipe is opened not by shell and the command is crashed or is not exists you will be blocked forever.</span></code></div>
  </div>
 </div>
  <div class="note" id="117531">  <div class="votes">
    <div id="Vu117531">
    <a href="/manual/vote-note.php?id=117531&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117531">
    <a href="/manual/vote-note.php?id=117531&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117531" title="100% like this...">
    4
    </div>
  </div>
  <a href="#117531" class="name">
  <strong class="user"><em>vanyazin at gmail dot com</em></strong></a><a class="genanchor" href="#117531"> &para;</a><div class="date" title="2015-06-25 04:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117531">
<div class="phpcode"><code><span class="html">If you want to use proc_open() function with socket streams, you can open connection with help of fsockopen() function and then just put handlers into array of io descriptors:<br /><br /><span class="default">&lt;?php<br /><br />    $fh </span><span class="keyword">= </span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$address</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">);<br />    </span><span class="default">$descriptors </span><span class="keyword">= [<br />        </span><span class="default">$fh</span><span class="keyword">,   </span><span class="comment">// stdin<br />        </span><span class="default">$fh</span><span class="keyword">,   </span><span class="comment">// stdout<br />        </span><span class="default">$fh</span><span class="keyword">,   </span><span class="comment">// stderr<br />    </span><span class="keyword">];<br />    </span><span class="default">$proc </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$descriptors</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118111">  <div class="votes">
    <div id="Vu118111">
    <a href="/manual/vote-note.php?id=118111&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118111">
    <a href="/manual/vote-note.php?id=118111&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118111" title="87% like this...">
    12
    </div>
  </div>
  <a href="#118111" class="name">
  <strong class="user"><em>aaronw at catalyst dot net dot nz</em></strong></a><a class="genanchor" href="#118111"> &para;</a><div class="date" title="2015-10-05 11:16"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118111">
<div class="phpcode"><code><span class="html">If you have a CLI script that prompts you for a password via STDIN, and you need to run it from PHP, proc_open() can get you there. It's better than doing "echo $password | command.sh", because then your password will be visible in the process list to any user who runs "ps". Alternately you could print the password to a file and use cat: "cat passwordfile.txt | command.sh", but then you've got to manage that file in a secure manner.<br /><br />If your command will always prompt you for responses in a specific order, then proc_open() is quite simple to use and you don't really have to worry about blocking &amp; non-blocking streams. For instance, to run the "passwd" command:<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(<br />   </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),<br />   </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),<br />   </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)<br />);<br /></span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(<br />        </span><span class="string">'/usr/bin/passwd ' </span><span class="keyword">. </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">),<br />        </span><span class="default">$descriptorspec</span><span class="keyword">,<br />        </span><span class="default">$pipes<br /></span><span class="keyword">);<br /><br /></span><span class="comment">// It wil prompt for existing password, then new password twice.<br />// You don't need to escapeshellarg() these, but you should whitelist<br />// them to guard against control characters, perhaps by using ctype_print()<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">"</span><span class="default">$oldpassword</span><span class="string">\n</span><span class="default">$newpassword</span><span class="string">\n</span><span class="default">$newpassword</span><span class="string">\n"</span><span class="keyword">);<br /><br /></span><span class="comment">// Read the responses if you want to look at them<br /></span><span class="default">$stdout </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$stderr </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br /></span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /></span><span class="default">$exit_status </span><span class="keyword">= </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br /><br /></span><span class="comment">// It returns 0 on successful password change<br /></span><span class="default">$success </span><span class="keyword">= (</span><span class="default">$exit_status </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="102239">  <div class="votes">
    <div id="Vu102239">
    <a href="/manual/vote-note.php?id=102239&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102239">
    <a href="/manual/vote-note.php?id=102239&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102239" title="86% like this...">
    11
    </div>
  </div>
  <a href="#102239" class="name">
  <strong class="user"><em>mattis at xait dot no</em></strong></a><a class="genanchor" href="#102239"> &para;</a><div class="date" title="2011-02-03 07:41"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102239">
<div class="phpcode"><code><span class="html">If you are, like me, tired of the buggy way proc_open handles streams and exit codes; this example demonstrate the power of pcntl, posix and some simple output redirection:<br /><br /><span class="default">&lt;?php<br />$outpipe </span><span class="keyword">= </span><span class="string">'/tmp/outpipe'</span><span class="keyword">;<br /></span><span class="default">$inpipe </span><span class="keyword">= </span><span class="string">'/tmp/inpipe'</span><span class="keyword">;<br /></span><span class="default">posix_mkfifo</span><span class="keyword">(</span><span class="default">$inpipe</span><span class="keyword">, </span><span class="default">0600</span><span class="keyword">);<br /></span><span class="default">posix_mkfifo</span><span class="keyword">(</span><span class="default">$outpipe</span><span class="keyword">, </span><span class="default">0600</span><span class="keyword">);<br /><br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br /><br /></span><span class="comment">//parent<br /></span><span class="keyword">if(</span><span class="default">$pid</span><span class="keyword">) {<br />    </span><span class="default">$in </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$inpipe</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">);<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">, </span><span class="string">"A message for the inpipe reader\n"</span><span class="keyword">);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$in</span><span class="keyword">);<br />    <br />    </span><span class="default">$out </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$outpipe</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">);<br />    while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">)) {<br />        echo </span><span class="string">"From out pipe: " </span><span class="keyword">. </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$out</span><span class="keyword">);<br /><br />    </span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">);<br />    <br />    if(</span><span class="default">pcntl_wifexited</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">)) {<br />        echo </span><span class="string">"Reliable exit code: " </span><span class="keyword">. </span><span class="default">pcntl_wexitstatus</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />    <br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$outpipe</span><span class="keyword">);<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$inpipe</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//child<br /></span><span class="keyword">else {<br />    </span><span class="comment">//parent<br />    </span><span class="keyword">if(</span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">()) {<br />        </span><span class="default">pcntl_exec</span><span class="keyword">(</span><span class="string">'/bin/sh'</span><span class="keyword">, array(</span><span class="string">'-c'</span><span class="keyword">, </span><span class="string">"printf 'A message for the outpipe reader' &gt; </span><span class="default">$outpipe</span><span class="string"> 2&gt;&amp;1 &amp;&amp; exit 12"</span><span class="keyword">));<br />    }<br />    <br />    </span><span class="comment">//child<br />    </span><span class="keyword">else {<br />        </span><span class="default">pcntl_exec</span><span class="keyword">(</span><span class="string">'/bin/sh'</span><span class="keyword">, array(</span><span class="string">'-c'</span><span class="keyword">, </span><span class="string">"printf 'From in pipe: '; cat </span><span class="default">$inpipe</span><span class="string">"</span><span class="keyword">));<br />    }    <br />}<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />From in pipe: A message for the inpipe reader<br />From out pipe: A message for the outpipe reader<br />Reliable exit code: 12</span></code></div>
  </div>
 </div>
  <div class="note" id="89338">  <div class="votes">
    <div id="Vu89338">
    <a href="/manual/vote-note.php?id=89338&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89338">
    <a href="/manual/vote-note.php?id=89338&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89338" title="81% like this...">
    14
    </div>
  </div>
  <a href="#89338" class="name">
  <strong class="user"><em>simeonl at dbc dot co dot nz</em></strong></a><a class="genanchor" href="#89338"> &para;</a><div class="date" title="2009-03-03 06:39"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89338">
<div class="phpcode"><code><span class="html">Note that when you call an external script and retrieve large amounts of data from STDOUT and STDERR, you may need to retrieve from both alternately in non-blocking mode (with appropriate pauses if no data is retrieved), so that your PHP script doesn't lock up. This can happen if you waiting on activity on one pipe while the external script is waiting for you to empty the other, e.g:<br /><br /><span class="default">&lt;?php<br />$read_output </span><span class="keyword">= </span><span class="default">$read_error </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$buffer_len  </span><span class="keyword">= </span><span class="default">$prev_buffer_len </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; <br /></span><span class="default">$ms          </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$output      </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$read_output </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">$error       </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /></span><span class="default">$read_error  </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">// dual reading of STDOUT and STDERR stops one full pipe blocking the other, because the external script is waiting<br /></span><span class="keyword">while (</span><span class="default">$read_error </span><span class="keyword">!= </span><span class="default">false </span><span class="keyword">or </span><span class="default">$read_output </span><span class="keyword">!= </span><span class="default">false</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$read_output </span><span class="keyword">!= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) <br />        {<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />            </span><span class="default">$read_output </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />        else <br />        {<br />            </span><span class="default">$str </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br />            </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />            if (</span><span class="default">$len</span><span class="keyword">)<br />            {<br />                </span><span class="default">$output </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">; <br />                </span><span class="default">$buffer_len </span><span class="keyword">+= </span><span class="default">$len</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    <br />    if (</span><span class="default">$read_error </span><span class="keyword">!= </span><span class="default">false</span><span class="keyword">)<br />    {<br />        if(</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">])) <br />        {<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />            </span><span class="default">$read_error </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />        }<br />        else <br />        {<br />            </span><span class="default">$str </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br />            </span><span class="default">$len </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br />            if (</span><span class="default">$len</span><span class="keyword">)<br />            {<br />                </span><span class="default">$error </span><span class="keyword">.= </span><span class="default">$str</span><span class="keyword">; <br />                </span><span class="default">$buffer_len </span><span class="keyword">+= </span><span class="default">$len</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    <br />    if (</span><span class="default">$buffer_len </span><span class="keyword">&gt; </span><span class="default">$prev_buffer_len</span><span class="keyword">)<br />    {<br />        </span><span class="default">$prev_buffer_len </span><span class="keyword">= </span><span class="default">$buffer_len</span><span class="keyword">;<br />        </span><span class="default">$ms </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br />    }<br />    else <br />    {<br />        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$ms </span><span class="keyword">* </span><span class="default">1000</span><span class="keyword">); </span><span class="comment">// sleep for $ms milliseconds<br />        </span><span class="keyword">if (</span><span class="default">$ms </span><span class="keyword">&lt; </span><span class="default">160</span><span class="keyword">)<br />        {<br />            </span><span class="default">$ms </span><span class="keyword">= </span><span class="default">$ms </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">;<br />        }<br />    }<br />}<br />        <br />return </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81317">  <div class="votes">
    <div id="Vu81317">
    <a href="/manual/vote-note.php?id=81317&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81317">
    <a href="/manual/vote-note.php?id=81317&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81317" title="76% like this...">
    14
    </div>
  </div>
  <a href="#81317" class="name">
  <strong class="user"><em>chris AT w3style DOT co.uk</em></strong></a><a class="genanchor" href="#81317"> &para;</a><div class="date" title="2008-02-22 02:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81317">
<div class="phpcode"><code><span class="html">It took me a long time (and three consecutive projects) to figure this out.  Because popen() and proc_open() return valid processes even when the command failed it's awkward to determine when it really has failed if you're opening a non-interactive process like "sendmail -t".<br /><br />I had previously guess that reading from STDERR immediately after starting the process would work, and it does... but when the command is successful PHP just hangs because STDERR is empty and it's waiting for data to be written to it.<br /><br />The solution is a simple stream_set_blocking($pipes[2], 0) immediately after calling proc_open().<br /><br /><span class="default">&lt;?php<br /><br />    $this</span><span class="keyword">-&gt;</span><span class="default">_proc </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">, </span><span class="default">$descriptorSpec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />    if (</span><span class="default">$err </span><span class="keyword">= </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]))<br />    {<br />      throw new </span><span class="default">Swift_Transport_TransportException</span><span class="keyword">(<br />        </span><span class="string">'Process could not be started [' </span><span class="keyword">. </span><span class="default">$err </span><span class="keyword">. </span><span class="string">']'<br />        </span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />If the process is opened successfully $pipes[2] will be empty, but if it failed the bash/sh error will be in it.<br /><br />Finally I can drop all my "workaround" error checking.<br /><br />I realise this solution is obvious and I'm not sure how it took me 18 months to figure it out, but hopefully this will help someone else.<br /><br />NOTE: Make sure your descriptorSpec has ( 2 =&gt; array('pipe', 'w')) for this to work.</span></code></div>
  </div>
 </div>
  <div class="note" id="82889">  <div class="votes">
    <div id="Vu82889">
    <a href="/manual/vote-note.php?id=82889&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82889">
    <a href="/manual/vote-note.php?id=82889&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82889" title="85% like this...">
    5
    </div>
  </div>
  <a href="#82889" class="name">
  <strong class="user"><em>joachimb at gmail dot com</em></strong></a><a class="genanchor" href="#82889"> &para;</a><div class="date" title="2008-04-30 08:24"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82889">
<div class="phpcode"><code><span class="html">I'm confused by the direction of the pipes. Most of the examples in this documentation opens pipe #2 as "r", because they want to read from stderr. That sounds logical to me, and that's what I tried to do. That didn't work, though. When I changed it to w, as in<br /><span class="default">&lt;?php<br />        $descriptorspec </span><span class="keyword">= array(<br />           </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">), </span><span class="comment">// stdin<br />           </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">), </span><span class="comment">// stdout<br />           </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">) </span><span class="comment">// stderr<br />        </span><span class="keyword">);<br />        <br />        </span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$scriptFile</span><span class="keyword">), </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">wd</span><span class="keyword">);<br />...<br />        while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />            foreach(</span><span class="default">$pipes </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt;</span><span class="default">$pipe</span><span class="keyword">) {<br />                </span><span class="default">$line </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">, </span><span class="default">128</span><span class="keyword">);<br />                if(</span><span class="default">$line</span><span class="keyword">) {<br />                    print(</span><span class="default">$line</span><span class="keyword">);<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">(</span><span class="default">$line</span><span class="keyword">);<br />                }<br />            }<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">0.5</span><span class="keyword">);<br />        }<br />...<br /></span><span class="default">?&gt;<br /></span><br />everything works fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="38870">  <div class="votes">
    <div id="Vu38870">
    <a href="/manual/vote-note.php?id=38870&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38870">
    <a href="/manual/vote-note.php?id=38870&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38870" title="85% like this...">
    5
    </div>
  </div>
  <a href="#38870" class="name">
  <strong class="user"><em>ralf at dreesen[*NO*SPAM*] dot net</em></strong></a><a class="genanchor" href="#38870"> &para;</a><div class="date" title="2004-01-09 11:49"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38870">
<div class="phpcode"><code><span class="html">The behaviour described in the following may depend on the system php runs on. Our platform was "Intel with Debian 3.0 linux".<br /><br />If you pass huge amounts of data (ca. &gt;&gt;10k) to the application you run and the application for example echos them directly to stdout (without buffering the input), you will get a deadlock. This is because there are size-limited buffers (so called pipes) between php and the application you run. The application will put data into the stdout buffer until it is filled, then it blocks waiting for php to read from the stdout buffer. In the meantime Php filled the stdin buffer and waits for the application to read from it. That is the deadlock.<br /><br />A solution to this problem may be to set the stdout stream to non blocking (stream_set_blocking) and alternately write to stdin and read from stdout.<br /><br />Just imagine the following example:<br /><br />&lt;?<br />/* assume that strlen($in) is about 30k<br />*/<br /><br />$descriptorspec = array(<br />   0 =&gt; array("pipe", "r"),<br />   1 =&gt; array("pipe", "w"),<br />   2 =&gt; array("file", "/tmp/error-output.txt", "a")<br />);<br /><br />$process = proc_open("cat", $descriptorspec, $pipes);<br /><br />if (is_resource($process)) {<br /> <br />   fwrite($pipes[0], $in);<br />    /* fwrite writes to stdin, 'cat' will immediately write the data from stdin<br />    * to stdout and blocks, when the stdout buffer is full. Then it will not<br />    * continue reading from stdin and php will block here.<br />    */<br /><br />   fclose($pipes[0]);<br /><br />   while (!feof($pipes[1])) {<br />       $out .= fgets($pipes[1], 1024);<br />   }<br />   fclose($pipes[1]);<br /><br />   $return_value = proc_close($process);<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="55502">  <div class="votes">
    <div id="Vu55502">
    <a href="/manual/vote-note.php?id=55502&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55502">
    <a href="/manual/vote-note.php?id=55502&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55502" title="81% like this...">
    7
    </div>
  </div>
  <a href="#55502" class="name">
  <strong class="user"><em>Kyle Gibson</em></strong></a><a class="genanchor" href="#55502"> &para;</a><div class="date" title="2005-08-05 12:16"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55502">
<div class="phpcode"><code><span class="html">proc_open is hard coded to use "/bin/sh". So if you're working in a chrooted environment, you need to make sure that /bin/sh exists, for now.</span></code></div>
  </div>
 </div>
  <div class="note" id="109951">  <div class="votes">
    <div id="Vu109951">
    <a href="/manual/vote-note.php?id=109951&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109951">
    <a href="/manual/vote-note.php?id=109951&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109951" title="80% like this...">
    6
    </div>
  </div>
  <a href="#109951" class="name">
  <strong class="user"><em>bilge at boontex dot com</em></strong></a><a class="genanchor" href="#109951"> &para;</a><div class="date" title="2012-09-05 02:56"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109951">
<div class="phpcode"><code><span class="html">$cmd can actually be multiple commands by separating each command with a newline. However, due to this it is not possible to split up one very long command over multiple lines, even when using "\\\n" syntax.</span></code></div>
  </div>
 </div>
  <div class="note" id="110993">  <div class="votes">
    <div id="Vu110993">
    <a href="/manual/vote-note.php?id=110993&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110993">
    <a href="/manual/vote-note.php?id=110993&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110993" title="76% like this...">
    7
    </div>
  </div>
  <a href="#110993" class="name">
  <strong class="user"><em>michael dot gross at NOSPAM dot flexlogic dot at</em></strong></a><a class="genanchor" href="#110993"> &para;</a><div class="date" title="2013-01-03 08:33"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110993">
<div class="phpcode"><code><span class="html">Please note that if you plan to spawn multiple processes you have to save all the results in different variables (in an array for example). If you for example would call $proc = proc_open..... multiple times the script will block after the second time until the child process exits (proc_close is called implicitly).</span></code></div>
  </div>
 </div>
  <div class="note" id="67109">  <div class="votes">
    <div id="Vu67109">
    <a href="/manual/vote-note.php?id=67109&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67109">
    <a href="/manual/vote-note.php?id=67109&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67109" title="77% like this...">
    5
    </div>
  </div>
  <a href="#67109" class="name">
  <strong class="user"><em>php dot net_manual at reimwerker dot de</em></strong></a><a class="genanchor" href="#67109"> &para;</a><div class="date" title="2006-06-03 04:47"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67109">
<div class="phpcode"><code><span class="html">If you are going to allow data coming from user input to be passed to this function, then you should keep in mind the following warning that also applies to exec() and system():<br /><br /><a href="http://www.php.net/manual/en/function.exec.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.exec.php</a><br /><a href="http://www.php.net/manual/en/function.system.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/function.system.php</a><br /><br />Warning:<br /><br />If you are going to allow data coming from user input to be passed to this function, then you should be using escapeshellarg() or escapeshellcmd() to make sure that users cannot trick the system into executing arbitrary commands.</span></code></div>
  </div>
 </div>
  <div class="note" id="79665">  <div class="votes">
    <div id="Vu79665">
    <a href="/manual/vote-note.php?id=79665&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79665">
    <a href="/manual/vote-note.php?id=79665&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79665" title="75% like this...">
    6
    </div>
  </div>
  <a href="#79665" class="name">
  <strong class="user"><em>John Wehin</em></strong></a><a class="genanchor" href="#79665"> &para;</a><div class="date" title="2007-12-06 10:52"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79665">
<div class="phpcode"><code><span class="html">STDIN STDOUT example<br />test.php<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(<br />   </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">), <br />   </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">), <br />   </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)<br />);<br /></span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">'php test_gen.php'</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">); </span><span class="comment">//run test_gen.php<br /></span><span class="keyword">echo (</span><span class="string">"Start process:\n"</span><span class="keyword">);<br />if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) <br />{<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">"start\n"</span><span class="keyword">);    </span><span class="comment">// send start<br />    </span><span class="keyword">echo (</span><span class="string">"\n\nStart ...."</span><span class="keyword">.</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">4096</span><span class="keyword">)); </span><span class="comment">//get answer<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">"get\n"</span><span class="keyword">);    </span><span class="comment">// send get<br />    </span><span class="keyword">echo (</span><span class="string">"Get: "</span><span class="keyword">.</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">4096</span><span class="keyword">));    </span><span class="comment">//get answer<br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="string">"stop\n"</span><span class="keyword">);    </span><span class="comment">//send stop<br />    </span><span class="keyword">echo (</span><span class="string">"\n\nStop ...."</span><span class="keyword">.</span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">],</span><span class="default">4096</span><span class="keyword">));  </span><span class="comment">//get answer<br /><br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />    </span><span class="default">$return_value </span><span class="keyword">= </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);  </span><span class="comment">//stop test_gen.php<br />    </span><span class="keyword">echo (</span><span class="string">"Returned:"</span><span class="keyword">.</span><span class="default">$return_value</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />test_gen.php<br /><span class="default">&lt;?php<br />$keys</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />function </span><span class="default">play_stop</span><span class="keyword">()<br />{<br />global </span><span class="default">$keys</span><span class="keyword">;<br />        </span><span class="default">$stdin_stat_arr</span><span class="keyword">=</span><span class="default">fstat</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">);<br />        if(</span><span class="default">$stdin_stat_arr</span><span class="keyword">[</span><span class="default">size</span><span class="keyword">]!=</span><span class="default">0</span><span class="keyword">)<br />        {<br />            </span><span class="default">$val_in</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">STDIN</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">);<br />            switch(</span><span class="default">$val_in</span><span class="keyword">)<br />            {<br />            case </span><span class="string">"start\n"</span><span class="keyword">:    echo </span><span class="string">"Started\n"</span><span class="keyword">;<br />                    return </span><span class="default">false</span><span class="keyword">;<br />                    break;<br />            case </span><span class="string">"stop\n"</span><span class="keyword">:    echo </span><span class="string">"Stopped\n"</span><span class="keyword">;<br />                    </span><span class="default">$keys</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />                    return </span><span class="default">false</span><span class="keyword">;<br />                    break;<br />            case </span><span class="string">"pause\n"</span><span class="keyword">:    echo </span><span class="string">"Paused\n"</span><span class="keyword">;<br />                    return </span><span class="default">false</span><span class="keyword">;<br />                    break;<br />            case </span><span class="string">"get\n"</span><span class="keyword">:    echo (</span><span class="default">$keys</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br />                    return </span><span class="default">true</span><span class="keyword">;<br />                    break;<br />            default:    echo(</span><span class="string">"Передан не верный параметр: "</span><span class="keyword">.</span><span class="default">$val_in</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">); <br />                    return </span><span class="default">true</span><span class="keyword">;<br />                    exit();<br />            }<br />        }else{return </span><span class="default">true</span><span class="keyword">;}<br />}<br />while(</span><span class="default">true</span><span class="keyword">)<br />{<br />while(</span><span class="default">play_stop</span><span class="keyword">()){</span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1000</span><span class="keyword">);}<br />while(</span><span class="default">play_stop</span><span class="keyword">()){</span><span class="default">$keys</span><span class="keyword">++;</span><span class="default">usleep</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">);}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="31276">  <div class="votes">
    <div id="Vu31276">
    <a href="/manual/vote-note.php?id=31276&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31276">
    <a href="/manual/vote-note.php?id=31276&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31276" title="75% like this...">
    6
    </div>
  </div>
  <a href="#31276" class="name">
  <strong class="user"><em>daniela at itconnect dot net dot au</em></strong></a><a class="genanchor" href="#31276"> &para;</a><div class="date" title="2003-04-16 02:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31276">
<div class="phpcode"><code><span class="html">Just a small note in case it isn't obvious, its possible to treat the filename as in fopen, thus you can pass through the standard input from php like<br />    $descs = array (<br />                0 =&gt; array ("file", "php://stdin", "r"),<br />                1 =&gt; array ("pipe", "w"),<br />                2 =&gt; array ("pipe", "w")<br />        );<br />        $proc = proc_open ("myprogram", $descs, $fp);</span></code></div>
  </div>
 </div>
  <div class="note" id="111858">  <div class="votes">
    <div id="Vu111858">
    <a href="/manual/vote-note.php?id=111858&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111858">
    <a href="/manual/vote-note.php?id=111858&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111858" title="71% like this...">
    6
    </div>
  </div>
  <a href="#111858" class="name">
  <strong class="user"><em>mcuadros at gmail dot com</em></strong></a><a class="genanchor" href="#111858"> &para;</a><div class="date" title="2013-04-05 10:56"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111858">
<div class="phpcode"><code><span class="html">This is a example of how run a command using as output the TTY, just like crontab -e or git commit does.<br /><br /><span class="default">&lt;?php<br /><br />$descriptors </span><span class="keyword">= array(<br />        array(</span><span class="string">'file'</span><span class="keyword">, </span><span class="string">'/dev/tty'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">),<br />        array(</span><span class="string">'file'</span><span class="keyword">, </span><span class="string">'/dev/tty'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">),<br />        array(</span><span class="string">'file'</span><span class="keyword">, </span><span class="string">'/dev/tty'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">)<br />);<br /><br /></span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">'vim'</span><span class="keyword">, </span><span class="default">$descriptors</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97012">  <div class="votes">
    <div id="Vu97012">
    <a href="/manual/vote-note.php?id=97012&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97012">
    <a href="/manual/vote-note.php?id=97012&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97012" title="65% like this...">
    8
    </div>
  </div>
  <a href="#97012" class="name">
  <strong class="user"><em>Luceo</em></strong></a><a class="genanchor" href="#97012"> &para;</a><div class="date" title="2010-03-28 07:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97012">
<div class="phpcode"><code><span class="html">It seems that stream_get_contents() on STDOUT blocks infinitly under Windows when STDERR is filled under some circumstances.<br /><br />The trick is to open STDERR in append mode ("a"), then this will work, too.<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(<br />    </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">), </span><span class="comment">// stdin<br />    </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">), </span><span class="comment">// stdout<br />    </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'a'</span><span class="keyword">) </span><span class="comment">// stderr<br /></span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="60187">  <div class="votes">
    <div id="Vu60187">
    <a href="/manual/vote-note.php?id=60187&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60187">
    <a href="/manual/vote-note.php?id=60187&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60187" title="75% like this...">
    2
    </div>
  </div>
  <a href="#60187" class="name">
  <strong class="user"><em>andrew dot budd at adsciengineering dot com</em></strong></a><a class="genanchor" href="#60187"> &para;</a><div class="date" title="2005-12-28 09:55"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60187">
<div class="phpcode"><code><span class="html">The pty option is actually disabled in the source for some reason via a #if 0 &amp;&amp; condition.  I'm not sure why it's disabled.  I removed the 0 &amp;&amp; and recompiled, after which the pty option works perfectly.  Just a note.</span></code></div>
  </div>
 </div>
  <div class="note" id="113319">  <div class="votes">
    <div id="Vu113319">
    <a href="/manual/vote-note.php?id=113319&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113319">
    <a href="/manual/vote-note.php?id=113319&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113319" title="66% like this...">
    3
    </div>
  </div>
  <a href="#113319" class="name">
  <strong class="user"><em>exel at example dot com</em></strong></a><a class="genanchor" href="#113319"> &para;</a><div class="date" title="2013-09-26 10:05"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113319">
<div class="phpcode"><code><span class="html">pipe communications may break brains off. i want to share some stuff to avoid such result.<br />for proper control of the communications through the "in" and "out" pipes of the opened sub-process, remember to set both of them into non-blocking mode and especially notice that fwrite may return (int)0 but it's not an error, just process might not except input at that moment. <br /><br />so, let us consider an example of decoding gz-encoded file by using funzip as sub-process: (this is not the final version, just to show important things)<br /><br /><span class="default">&lt;?php<br />            </span><span class="comment">// make gz file<br />            </span><span class="default">$fd</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/tmp/testPipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">);<br />            for(</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">100000</span><span class="keyword">;</span><span class="default">$i</span><span class="keyword">++)<br />                </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">md5</span><span class="keyword">(</span><span class="default">$i</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br /><br />            if(</span><span class="default">is_file</span><span class="keyword">(</span><span class="string">"/tmp/testPipe.gz"</span><span class="keyword">))<br />                </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"/tmp/testPipe.gz"</span><span class="keyword">);<br />            </span><span class="default">system</span><span class="keyword">(</span><span class="string">"gzip /tmp/testPipe"</span><span class="keyword">);<br /><br />            </span><span class="comment">// open process<br />            </span><span class="default">$pipesDescr</span><span class="keyword">=array(<br />                </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),<br />                </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),<br />                </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"file"</span><span class="keyword">, </span><span class="string">"/tmp/testPipe.log"</span><span class="keyword">, </span><span class="string">"a"</span><span class="keyword">),<br />            );<br /><br />            </span><span class="default">$process</span><span class="keyword">=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">"zcat"</span><span class="keyword">, </span><span class="default">$pipesDescr</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);<br />            if(!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"popen error"</span><span class="keyword">);<br /><br />            </span><span class="comment">// set both pipes non-blocking<br />            </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />            </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br /><br />            </span><span class="comment">////////////////////////////////////////////////////////////////////<br /><br />            </span><span class="default">$text</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">;<br />            </span><span class="default">$fd</span><span class="keyword">=</span><span class="default">fopen</span><span class="keyword">(</span><span class="string">"/tmp/testPipe.gz"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">);<br />            while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">))<br />            {<br />                </span><span class="default">$str</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">, </span><span class="default">16384</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">);<br />                </span><span class="default">$try</span><span class="keyword">=</span><span class="default">3</span><span class="keyword">;<br />                while(</span><span class="default">$str</span><span class="keyword">)<br />                {<br />                    </span><span class="default">$len</span><span class="keyword">=</span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$str</span><span class="keyword">);<br />                    while(</span><span class="default">$s</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">16384</span><span class="keyword">*</span><span class="default">4</span><span class="keyword">))<br />                        </span><span class="default">$text</span><span class="keyword">.=</span><span class="default">$s</span><span class="keyword">;<br /><br />                    if(!</span><span class="default">$len</span><span class="keyword">)<br />                    {<br />                        </span><span class="comment">// if yo remove this paused retries, process may fail<br />                        </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">200000</span><span class="keyword">);<br />                        </span><span class="default">$try</span><span class="keyword">--;<br />                        if(!</span><span class="default">$try</span><span class="keyword">)<br />                            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">"fwrite error"</span><span class="keyword">);<br />                    }<br />                    </span><span class="default">$str</span><span class="keyword">=</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$len</span><span class="keyword">);<br />                }<br />                echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br />            }<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /><br />            </span><span class="comment">// reading the rest of output stream<br />            </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1</span><span class="keyword">);<br />            while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))<br />            {<br />                </span><span class="default">$s</span><span class="keyword">=</span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">16384</span><span class="keyword">);<br />                </span><span class="default">$text</span><span class="keyword">.=</span><span class="default">$s</span><span class="keyword">;<br />            }<br /><br />            echo </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$text</span><span class="keyword">).</span><span class="string">" / 3 300 000\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="120608">  <div class="votes">
    <div id="Vu120608">
    <a href="/manual/vote-note.php?id=120608&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120608">
    <a href="/manual/vote-note.php?id=120608&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120608" title="66% like this...">
    1
    </div>
  </div>
  <a href="#120608" class="name">
  <strong class="user"><em>weirdall at hotmail dot com</em></strong></a><a class="genanchor" href="#120608"> &para;</a><div class="date" title="2017-02-07 03:01"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120608">
<div class="phpcode"><code><span class="html">This script will tail a file using tail -F to follow scripts that are rotated.<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(<br />   </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),  </span><span class="comment">// stdin is a pipe that the child will read from<br />   </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),  </span><span class="comment">// stdout is a pipe that the child will write to<br />   </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)   </span><span class="comment">// stderr is a pipe that stdout will to write to<br /></span><span class="keyword">);<br /><br /></span><span class="default">$filename </span><span class="keyword">= </span><span class="string">'/var/log/nginx/nginx-access.log'</span><span class="keyword">;<br />if( !</span><span class="default">file_exists</span><span class="keyword">( </span><span class="default">$filename </span><span class="keyword">) ) {<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);<br />}<br /></span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="string">'tail -F /var/log/nginx/stats.bluebillywig.com-access.log'</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);<br /><br />if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) {<br />    </span><span class="comment">// $pipes now looks like this:<br />    // 0 =&gt; writeable handle connected to child stdin<br />    // 1 =&gt; readable handle connected to child stdout<br />    // Any error output will be sent to $pipes[2]<br /><br />    // Closing $pipes[0] because we don't need it<br />    </span><span class="default">fclose</span><span class="keyword">( </span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] );<br /><br />    </span><span class="comment">// stderr should not block, because that blocks the tail process<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">$count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br /><br />    while ( (</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">,</span><span class="default">4096</span><span class="keyword">)) ) {<br />        </span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$buf</span><span class="keyword">);<br />        </span><span class="comment">// Read stderr to see if anything goes wrong<br />        </span><span class="default">$stderr </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">4096</span><span class="keyword">);<br />        if( !empty( </span><span class="default">$stderr </span><span class="keyword">) ) {<br />            print( </span><span class="string">'log: ' </span><span class="keyword">. </span><span class="default">$stderr </span><span class="keyword">);<br />        }<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br />    </span><span class="comment">// It is important that you close any pipes before calling<br />    // proc_close in order to avoid a deadlock<br />    </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119134">  <div class="votes">
    <div id="Vu119134">
    <a href="/manual/vote-note.php?id=119134&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119134">
    <a href="/manual/vote-note.php?id=119134&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119134" title="66% like this...">
    1
    </div>
  </div>
  <a href="#119134" class="name">
  <strong class="user"><em>stoller at leonex dot de</em></strong></a><a class="genanchor" href="#119134"> &para;</a><div class="date" title="2016-04-08 07:37"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119134">
<div class="phpcode"><code><span class="html">If you are working on Windows and try to proc_open an executable that contains spaces in its path, you will get into trouble.<br /><br />But there's a workaround which works quite well. I have found it here: <a href="http://stackoverflow.com/a/4410389/1119601" rel="nofollow" target="_blank">http://stackoverflow.com/a/4410389/1119601</a><br /><br />For example, if you want to execute "C:\Program Files\nodejs\node.exe", you will get the error that the command could not be found.<br />Try this:<br /><span class="default">&lt;?php<br />$cmd </span><span class="keyword">= </span><span class="string">'C:\\Program Files\\nodejs\\node.exe'</span><span class="keyword">;<br />if (</span><span class="default">strtolower</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">PHP_OS</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">)) === </span><span class="string">'win'</span><span class="keyword">) {<br />    </span><span class="default">$cmd </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'cd %s &amp;&amp; %s'</span><span class="keyword">, </span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">)), </span><span class="default">basename</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80064">  <div class="votes">
    <div id="Vu80064">
    <a href="/manual/vote-note.php?id=80064&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80064">
    <a href="/manual/vote-note.php?id=80064&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80064" title="63% like this...">
    3
    </div>
  </div>
  <a href="#80064" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#80064"> &para;</a><div class="date" title="2007-12-27 07:40"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80064">
<div class="phpcode"><code><span class="html">I needed to emulate a tty for a process (it wouldnt write to stdout or read from stdin), so I found this:<br /><br /><span class="default">&lt;?php<br />$descriptorspec </span><span class="keyword">= array(</span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">'pty'</span><span class="keyword">),<br />                        </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'pty'</span><span class="keyword">),<br />                        </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'pty'</span><span class="keyword">));  <br /></span><span class="default">?&gt;<br /></span><br />pipes are bidirectional then</span></code></div>
  </div>
 </div>
  <div class="note" id="117107">  <div class="votes">
    <div id="Vu117107">
    <a href="/manual/vote-note.php?id=117107&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117107">
    <a href="/manual/vote-note.php?id=117107&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117107" title="62% like this...">
    2
    </div>
  </div>
  <a href="#117107" class="name">
  <strong class="user"><em>hablutzel1 at gmail dot com</em></strong></a><a class="genanchor" href="#117107"> &para;</a><div class="date" title="2015-04-15 05:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117107">
<div class="phpcode"><code><span class="html">Note that the usage of "bypass_shell" in Windows allows you to pass a command of length around ~32767 characters. If you do not use it, your limit is around ~8191 characters only. <br /><br />See <a href="https://support.microsoft.com/en-us/kb/830473." rel="nofollow" target="_blank">https://support.microsoft.com/en-us/kb/830473.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="117912">  <div class="votes">
    <div id="Vu117912">
    <a href="/manual/vote-note.php?id=117912&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117912">
    <a href="/manual/vote-note.php?id=117912&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117912" title="60% like this...">
    2
    </div>
  </div>
  <a href="#117912" class="name">
  <strong class="user"><em>stevebaldwin21 at googlemail dot com</em></strong></a><a class="genanchor" href="#117912"> &para;</a><div class="date" title="2015-08-31 06:32"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117912">
<div class="phpcode"><code><span class="html">For those who are finding that using the $cwd and $env options cause proc_open to fail (windows). You will need to pass all other server environment variables; <br /><br />$descriptorSpec = array(<br />       0 =&gt; array("pipe", "r"),<br />       1 =&gt; array("pipe", "w"),     <br />    );<br /><br />proc_open(<br />        "C:\\Windows\\System32\\PING.exe localhost, <br />        $descriptorSpec , <br />        $pipes, <br />        "C:\\Windows\\System32", <br />        array($_SERVER)<br />);</span></code></div>
  </div>
 </div>
  <div class="note" id="97329">  <div class="votes">
    <div id="Vu97329">
    <a href="/manual/vote-note.php?id=97329&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97329">
    <a href="/manual/vote-note.php?id=97329&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97329" title="58% like this...">
    2
    </div>
  </div>
  <a href="#97329" class="name">
  <strong class="user"><em>Matou Havlena - matous at havlena dot net</em></strong></a><a class="genanchor" href="#97329"> &para;</a><div class="date" title="2010-04-14 01:03"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97329">
<div class="phpcode"><code><span class="html">There is some smart object Processes Manager which i have created for my application. It can control the maximum of simultaneously running processes.<br /><br />Proccesmanager class:<br /><span class="default">&lt;?php <br /></span><span class="keyword">class </span><span class="default">Processmanager </span><span class="keyword">{<br />    public </span><span class="default">$executable </span><span class="keyword">= </span><span class="string">"C:\\www\\_PHP5_2_10\\php"</span><span class="keyword">;<br />    public </span><span class="default">$root </span><span class="keyword">= </span><span class="string">"C:\\www\\parallelprocesses\\"</span><span class="keyword">;<br />    public </span><span class="default">$scripts </span><span class="keyword">= array();<br />    public </span><span class="default">$processesRunning </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public </span><span class="default">$processes </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br />    public </span><span class="default">$running </span><span class="keyword">= array();<br />    public </span><span class="default">$sleep_time </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    <br />    function </span><span class="default">addScript</span><span class="keyword">(</span><span class="default">$script</span><span class="keyword">, </span><span class="default">$max_execution_time </span><span class="keyword">= </span><span class="default">300</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">[] = array(</span><span class="string">"script_name" </span><span class="keyword">=&gt; </span><span class="default">$script</span><span class="keyword">,<br />                            </span><span class="string">"max_execution_time" </span><span class="keyword">=&gt; </span><span class="default">$max_execution_time</span><span class="keyword">);<br />    }<br />    <br />    function </span><span class="default">exec</span><span class="keyword">() {<br />        </span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        for(;;) {<br />        </span><span class="comment">// Fill up the slots<br />        </span><span class="keyword">while ((</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processesRunning</span><span class="keyword">&lt;</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processes</span><span class="keyword">) and (</span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">))) {<br />        echo </span><span class="string">"&lt;span style='color: orange;'&gt;Adding script: "</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"script_name"</span><span class="keyword">].</span><span class="string">"&lt;/span&gt;&lt;br /&gt;"</span><span class="keyword">;<br />        </span><span class="default">ob_flush</span><span class="keyword">();<br />        </span><span class="default">flush</span><span class="keyword">();<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">running</span><span class="keyword">[] =&amp; new </span><span class="default">Process</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">executable</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">root</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"script_name"</span><span class="keyword">], </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"max_execution_time"</span><span class="keyword">]);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processesRunning</span><span class="keyword">++;<br />        </span><span class="default">$i</span><span class="keyword">++;<br />        }<br />        <br />        </span><span class="comment">// Check if done<br />        </span><span class="keyword">if ((</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processesRunning</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) and (</span><span class="default">$i</span><span class="keyword">&gt;=</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">scripts</span><span class="keyword">))) {<br />            break;<br />        }<br />        </span><span class="comment">// sleep, this duration depends on your script execution time, the longer execution time, the longer sleep time<br />      </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">sleep_time</span><span class="keyword">);<br />      <br />      </span><span class="comment">// check what is done<br />        </span><span class="keyword">foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">running </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">) {<br />                if (!</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">isRunning</span><span class="keyword">() or </span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">isOverExecuted</span><span class="keyword">()) {<br />            if (!</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">isRunning</span><span class="keyword">()) echo </span><span class="string">"&lt;span style='color: green;'&gt;Done: "</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">script</span><span class="keyword">.</span><span class="string">"&lt;/span&gt;&lt;br /&gt;"</span><span class="keyword">;<br />            else echo </span><span class="string">"&lt;span style='color: red;'&gt;Killed: "</span><span class="keyword">.</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">script</span><span class="keyword">.</span><span class="string">"&lt;/span&gt;&lt;br /&gt;"</span><span class="keyword">;<br />                    </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">-&gt;</span><span class="default">resource</span><span class="keyword">);<br />                    unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">running</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">processesRunning</span><span class="keyword">--;<br />            </span><span class="default">ob_flush</span><span class="keyword">();<br />            </span><span class="default">flush</span><span class="keyword">();<br />                }<br />            }<br />        }<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Process class:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Process </span><span class="keyword">{<br />    public </span><span class="default">$resource</span><span class="keyword">;<br />    public </span><span class="default">$pipes</span><span class="keyword">;<br />    public </span><span class="default">$script</span><span class="keyword">;<br />    public </span><span class="default">$max_execution_time</span><span class="keyword">;<br />    public </span><span class="default">$start_time</span><span class="keyword">;<br />    <br />    function </span><span class="default">__construct</span><span class="keyword">(&amp;</span><span class="default">$executable</span><span class="keyword">, &amp;</span><span class="default">$root</span><span class="keyword">, </span><span class="default">$script</span><span class="keyword">, </span><span class="default">$max_execution_time</span><span class="keyword">) {<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">script </span><span class="keyword">= </span><span class="default">$script</span><span class="keyword">;<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">max_execution_time </span><span class="keyword">= </span><span class="default">$max_execution_time</span><span class="keyword">;<br />        </span><span class="default">$descriptorspec    </span><span class="keyword">= array(<br />            </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">),<br />            </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">),<br />            </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">)<br />        );<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resource    </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$executable</span><span class="keyword">.</span><span class="string">" "</span><span class="keyword">.</span><span class="default">$root</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">script</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pipes</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$_ENV</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start_time </span><span class="keyword">= </span><span class="default">mktime</span><span class="keyword">();<br />    }<br />    <br />    </span><span class="comment">// is still running?<br />    </span><span class="keyword">function </span><span class="default">isRunning</span><span class="keyword">() {<br />        </span><span class="default">$status </span><span class="keyword">= </span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">resource</span><span class="keyword">);<br />        return </span><span class="default">$status</span><span class="keyword">[</span><span class="string">"running"</span><span class="keyword">];<br />    }<br /><br />    </span><span class="comment">// long execution time, proccess is going to be killer<br />    </span><span class="keyword">function </span><span class="default">isOverExecuted</span><span class="keyword">() {<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">start_time</span><span class="keyword">+</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">max_execution_time</span><span class="keyword">&lt;</span><span class="default">mktime</span><span class="keyword">()) return </span><span class="default">true</span><span class="keyword">;<br />        else return </span><span class="default">false</span><span class="keyword">;<br />    }<br /><br />}<br /></span><span class="default">?&gt;<br /></span><br />Example of using:<br /><span class="default">&lt;?php<br />$manager </span><span class="keyword">= new </span><span class="default">Processmanager</span><span class="keyword">();<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">executable </span><span class="keyword">= </span><span class="string">"C:\\www\\_PHP5_2_10\\php"</span><span class="keyword">;<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">path </span><span class="keyword">= </span><span class="string">"C:\\www\\parallelprocesses\\"</span><span class="keyword">;<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">processes </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">sleep_time </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script1.php"</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script2.php"</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script3.php"</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script4.php"</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script5.php"</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">addScript</span><span class="keyword">(</span><span class="string">"script6.php"</span><span class="keyword">);<br /></span><span class="default">$manager</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />And possible output:<br /><br />Adding script: script1.php<br />Adding script: script2.php<br />Adding script: script3.php<br />Done: script2.php<br />Adding script: script4.php<br />Killed: script1.php<br />Done: script3.php<br />Done: script4.php<br />Adding script: script5.php<br />Adding script: script6.php<br />Done: script5.php<br />Done: script6.php</span></code></div>
  </div>
 </div>
  <div class="note" id="62663">  <div class="votes">
    <div id="Vu62663">
    <a href="/manual/vote-note.php?id=62663&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62663">
    <a href="/manual/vote-note.php?id=62663&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62663" title="60% like this...">
    1
    </div>
  </div>
  <a href="#62663" class="name">
  <strong class="user"><em>Kevin Barr</em></strong></a><a class="genanchor" href="#62663"> &para;</a><div class="date" title="2006-03-06 12:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62663">
<div class="phpcode"><code><span class="html">I found that with disabling stream blocking I was sometimes attempting to read a return line before the external application had responded. So, instead, I left blocking alone and used this simple function to add a timeout to the fgets function:<br /><br />// fgetsPending( $in,$tv_sec ) - Get a pending line of data from stream $in, waiting a maximum of $tv_sec seconds<br />function fgetsPending(&amp;$in,$tv_sec=10) {<br />    if ( stream_select($read = array($in),$write=NULL,$except=NULL,$tv_sec) ) return fgets($in);<br />    else return FALSE;    <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="83436">  <div class="votes">
    <div id="Vu83436">
    <a href="/manual/vote-note.php?id=83436&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83436">
    <a href="/manual/vote-note.php?id=83436&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83436" title="57% like this...">
    1
    </div>
  </div>
  <a href="#83436" class="name">
  <strong class="user"><em>radone at gmail dot com</em></strong></a><a class="genanchor" href="#83436"> &para;</a><div class="date" title="2008-05-26 05:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83436">
<div class="phpcode"><code><span class="html">To complete the examples below that use proc_open to encrypt a string using GPG, here is a decrypt function:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">gpg_decrypt</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$secret</span><span class="keyword">) {
<br />    </span><span class="default">$homedir </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; </span><span class="comment">// path to you gpg keyrings
<br />    </span><span class="default">$tmp_file </span><span class="keyword">= </span><span class="string">'/tmp/gpg_tmp.asc' </span><span class="keyword">; </span><span class="comment">// tmp file to write to        
<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">, </span><span class="default">$string</span><span class="keyword">);
<br />
<br />    </span><span class="default">$text </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$error </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />    </span><span class="default">$descriptorspec </span><span class="keyword">= array(
<br />        </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),  </span><span class="comment">// stdin
<br />        </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),  </span><span class="comment">// stdout
<br />        </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)   </span><span class="comment">// stderr ?? instead of a file
<br />        </span><span class="keyword">);
<br />    </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'gpg --homedir ' </span><span class="keyword">. </span><span class="default">$homedir </span><span class="keyword">. </span><span class="string">' --batch --no-verbose --passphrase-fd 0 -d ' </span><span class="keyword">. </span><span class="default">$tmp_file </span><span class="keyword">. </span><span class="string">' '</span><span class="keyword">;
<br />    </span><span class="default">$process </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">);
<br />    if (</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">)) {
<br />        </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$secret</span><span class="keyword">);
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />        while(</span><span class="default">$s</span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">)) {
<br />          </span><span class="comment">// read from the pipe
<br />          </span><span class="default">$text </span><span class="keyword">.= </span><span class="default">$s</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />        </span><span class="comment">// optional:
<br />        </span><span class="keyword">while(</span><span class="default">$s</span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">)) {
<br />          </span><span class="default">$error </span><span class="keyword">.= </span><span class="default">$s </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />    }
<br />            
<br />    </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$tmp_file</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">);
<br />    
<br />    if (</span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/decryption failed/i'</span><span class="keyword">, </span><span class="default">$error</span><span class="keyword">)) {
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    } else {
<br />        return </span><span class="default">$text</span><span class="keyword">;
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="38496">  <div class="votes">
    <div id="Vu38496">
    <a href="/manual/vote-note.php?id=38496&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38496">
    <a href="/manual/vote-note.php?id=38496&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38496" title="57% like this...">
    1
    </div>
  </div>
  <a href="#38496" class="name">
  <strong class="user"><em>MagicalTux at FF.ST</em></strong></a><a class="genanchor" href="#38496"> &para;</a><div class="date" title="2003-12-24 04:20"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38496">
<div class="phpcode"><code><span class="html">Note that if you need to be "interactive" with the user *and* the opened application, you can use stream_select to see if something is waiting on the other side of the pipe.<br /><br />Stream functions can be used on pipes like :<br /> - pipes from popen, proc_open<br /> - pipes from fopen('php://stdin') (or stdout)<br /> - sockets (unix or tcp/udp)<br /> - many other things probably but the most important is here<br /><br />More informations about streams (you'll find many useful functions there) :<br /><a href="http://www.php.net/manual/en/ref.stream.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/ref.stream.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="95207">  <div class="votes">
    <div id="Vu95207">
    <a href="/manual/vote-note.php?id=95207&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95207">
    <a href="/manual/vote-note.php?id=95207&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95207" title="55% like this...">
    1
    </div>
  </div>
  <a href="#95207" class="name">
  <strong class="user"><em>cbn at grenet dot org</em></strong></a><a class="genanchor" href="#95207"> &para;</a><div class="date" title="2009-12-18 07:30"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95207">
<div class="phpcode"><code><span class="html">Display output (stdout/stderr) in real time, and get the real exit code in pure PHP (no shell workaround!). It works well on my machines (debian mostly).<br /><br />#!/usr/bin/php<br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br /> * Execute and display the output in real time (stdout + stderr).<br /> *<br /> * Please note this snippet is prepended with an appropriate shebang for the <br /> * CLI. You can re-use only the function.<br /> * <br /> * Usage example:<br /> * chmod u+x proc_open.php<br /> * ./proc_open.php "ping -c 5 google.fr"; echo RetVal=$?<br /> */<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">BUF_SIZ</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">);        </span><span class="comment"># max buffer size<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">FD_WRITE</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);        </span><span class="comment"># stdin<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">FD_READ</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);        </span><span class="comment"># stdout<br /></span><span class="default">define</span><span class="keyword">(</span><span class="default">FD_ERR</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);        </span><span class="comment"># stderr<br /><br />/*<br /> * Wrapper for proc_*() functions.<br /> * The first parameter $cmd is the command line to execute.<br /> * Return the exit code of the process.<br /> */<br /></span><span class="keyword">function </span><span class="default">proc_exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">)<br />{<br />    </span><span class="default">$descriptorspec </span><span class="keyword">= array(<br />        </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),<br />        </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),<br />        </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">)<br />    );<br /><br />    </span><span class="default">$ptr </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$descriptorspec</span><span class="keyword">, </span><span class="default">$pipes</span><span class="keyword">, </span><span class="default">NULL</span><span class="keyword">, </span><span class="default">$_ENV</span><span class="keyword">);<br />    if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">))<br />        return </span><span class="default">false</span><span class="keyword">;<br /><br />    while ((</span><span class="default">$buffer </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">FD_READ</span><span class="keyword">], </span><span class="default">BUF_SIZ</span><span class="keyword">)) != </span><span class="default">NULL <br />            </span><span class="keyword">|| (</span><span class="default">$errbuf </span><span class="keyword">= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">FD_ERR</span><span class="keyword">], </span><span class="default">BUF_SIZ</span><span class="keyword">)) != </span><span class="default">NULL</span><span class="keyword">) {<br />        if (!isset(</span><span class="default">$flag</span><span class="keyword">)) {<br />            </span><span class="default">$pstatus </span><span class="keyword">= </span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">);<br />            </span><span class="default">$first_exitcode </span><span class="keyword">= </span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"exitcode"</span><span class="keyword">];<br />            </span><span class="default">$flag </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">))<br />            echo </span><span class="default">$buffer</span><span class="keyword">;<br />        if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$errbuf</span><span class="keyword">))<br />            echo </span><span class="string">"ERR: " </span><span class="keyword">. </span><span class="default">$errbuf</span><span class="keyword">;<br />    }<br /><br />    foreach (</span><span class="default">$pipes </span><span class="keyword">as </span><span class="default">$pipe</span><span class="keyword">)<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipe</span><span class="keyword">);<br /><br />    </span><span class="comment">/* Get the expected *exit* code to return the value */<br />    </span><span class="default">$pstatus </span><span class="keyword">= </span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">);<br />    if (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"exitcode"</span><span class="keyword">]) || </span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"running"</span><span class="keyword">]) {<br />        </span><span class="comment">/* we can trust the retval of proc_close() */<br />        </span><span class="keyword">if (</span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"running"</span><span class="keyword">])<br />            </span><span class="default">proc_terminate</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">);<br />        </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">);<br />    } else {<br />        if (((</span><span class="default">$first_exitcode </span><span class="keyword">+ </span><span class="default">256</span><span class="keyword">) % </span><span class="default">256</span><span class="keyword">) == </span><span class="default">255 <br />                </span><span class="keyword">&amp;&amp; ((</span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"exitcode"</span><span class="keyword">] + </span><span class="default">256</span><span class="keyword">) % </span><span class="default">256</span><span class="keyword">) != </span><span class="default">255</span><span class="keyword">)<br />            </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"exitcode"</span><span class="keyword">];<br />        elseif (!</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$first_exitcode</span><span class="keyword">))<br />            </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$pstatus</span><span class="keyword">[</span><span class="string">"exitcode"</span><span class="keyword">];<br />        elseif (((</span><span class="default">$first_exitcode </span><span class="keyword">+ </span><span class="default">256</span><span class="keyword">) % </span><span class="default">256</span><span class="keyword">) != </span><span class="default">255</span><span class="keyword">)<br />            </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">$first_exitcode</span><span class="keyword">;<br />        else<br />            </span><span class="default">$ret </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="comment">/* we "deduce" an EXIT_SUCCESS ;) */<br />        </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$ptr</span><span class="keyword">);<br />    }<br /><br />    return (</span><span class="default">$ret </span><span class="keyword">+ </span><span class="default">256</span><span class="keyword">) % </span><span class="default">256</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">/* __init__ */<br /></span><span class="keyword">if (isset(</span><span class="default">$argv</span><span class="keyword">) &amp;&amp; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">) &gt; </span><span class="default">1 </span><span class="keyword">&amp;&amp; !empty(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />    if ((</span><span class="default">$ret </span><span class="keyword">= </span><span class="default">proc_exec</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) === </span><span class="default">false</span><span class="keyword">)<br />        die(</span><span class="string">"Error: not enough FD or out of memory.\n"</span><span class="keyword">);<br />    elseif (</span><span class="default">$ret </span><span class="keyword">== </span><span class="default">127</span><span class="keyword">)<br />        die(</span><span class="string">"Command not found (returned by sh).\n"</span><span class="keyword">);<br />    else<br />        exit(</span><span class="default">$ret</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128449">  <div class="votes">
    <div id="Vu128449">
    <a href="/manual/vote-note.php?id=128449&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128449">
    <a href="/manual/vote-note.php?id=128449&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128449" title="100% like this...">
    2
    </div>
  </div>
  <a href="#128449" class="name">
  <strong class="user"><em>Gil Potts</em></strong></a><a class="genanchor" href="#128449"> &para;</a><div class="date" title="2023-05-04 03:58"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128449">
<div class="phpcode"><code><span class="html">This is not really a bug but more of an unexpected gotcha.  If you pass in an array for $env and include a modified PATH, that path does not take effect in PHP itself when starting the process.  So if you are trying to start an executable in the modified PATH by using just the executable name, PHP and the OS won't find it and therefore will fail to start the process.<br /><br />The fix is to let PHP know about the modified PATH by calling putenv("PATH=" . $newpath) with the new path string so that the call to proc_open() will correctly locate the executable and successfully run it.</span></code></div>
  </div>
 </div>
  <div class="note" id="83635">  <div class="votes">
    <div id="Vu83635">
    <a href="/manual/vote-note.php?id=83635&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83635">
    <a href="/manual/vote-note.php?id=83635&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83635" title="100% like this...">
    2
    </div>
  </div>
  <a href="#83635" class="name">
  <strong class="user"><em>snowleopard at amused dot NOSPAMPLEASE dot com dot au</em></strong></a><a class="genanchor" href="#83635"> &para;</a><div class="date" title="2008-06-05 07:46"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83635">
<div class="phpcode"><code><span class="html">I managed to make a set of functions to work with GPG, since my hosting provider refused to use GPG-ME.<br />Included below is an example of decryption using a higher descriptor to push a passphrase.<br />Comments and emails welcome. :)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">GPGDecrypt</span><span class="keyword">(</span><span class="default">$InputData</span><span class="keyword">, </span><span class="default">$Identity</span><span class="keyword">, </span><span class="default">$PassPhrase</span><span class="keyword">, </span><span class="default">$HomeDir</span><span class="keyword">=</span><span class="string">"~/.gnupg"</span><span class="keyword">, </span><span class="default">$GPGPath</span><span class="keyword">=</span><span class="string">"/usr/bin/gpg"</span><span class="keyword">) {<br />    <br />    if(!</span><span class="default">is_executable</span><span class="keyword">(</span><span class="default">$GPGPath</span><span class="keyword">)) {<br />        </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="default">$GPGPath </span><span class="keyword">. </span><span class="string">" is not executable"</span><span class="keyword">,<br />        </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />        die();<br />    } else {<br />        </span><span class="comment">// Set up the descriptors<br />        </span><span class="default">$Descriptors </span><span class="keyword">= array(<br />            </span><span class="default">0 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">),<br />            </span><span class="default">1 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),<br />            </span><span class="default">2 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"w"</span><span class="keyword">),<br />            </span><span class="default">3 </span><span class="keyword">=&gt; array(</span><span class="string">"pipe"</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">) </span><span class="comment">// This is the pipe we can feed the password into<br />        </span><span class="keyword">);<br /><br />        </span><span class="comment">// Build the command line and start the process<br />        </span><span class="default">$CommandLine </span><span class="keyword">= </span><span class="default">$GPGPath </span><span class="keyword">. </span><span class="string">' --homedir ' </span><span class="keyword">. </span><span class="default">$HomeDir </span><span class="keyword">. </span><span class="string">' --quiet --batch --local-user "' </span><span class="keyword">. </span><span class="default">$Identity </span><span class="keyword">. </span><span class="string">'" --passphrase-fd 3 --decrypt -'</span><span class="keyword">;<br />        </span><span class="default">$ProcessHandle </span><span class="keyword">= </span><span class="default">proc_open</span><span class="keyword">( </span><span class="default">$CommandLine</span><span class="keyword">, </span><span class="default">$Descriptors</span><span class="keyword">, </span><span class="default">$Pipes</span><span class="keyword">);<br /><br />        if(</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$ProcessHandle</span><span class="keyword">)) {<br />            </span><span class="comment">// Push passphrase to custom pipe<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">], </span><span class="default">$PassPhrase</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">3</span><span class="keyword">]);<br />            <br />            </span><span class="comment">// Push input into StdIn<br />            </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$InputData</span><span class="keyword">);<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br />            <br />            </span><span class="comment">// Read StdOut<br />            </span><span class="default">$StdOut </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">])) {<br />                </span><span class="default">$StdOut </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br />            }<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />            <br />            </span><span class="comment">// Read StdErr<br />            </span><span class="default">$StdErr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />            while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]))    {<br />                </span><span class="default">$StdErr </span><span class="keyword">.= </span><span class="default">fgets</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">1024</span><span class="keyword">);<br />            }<br />            </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$Pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br />            </span><span class="comment">// Close the process<br />            </span><span class="default">$ReturnCode </span><span class="keyword">= </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$ProcessHandle</span><span class="keyword">);<br /><br />        } else {<br />            </span><span class="default">trigger_error</span><span class="keyword">(</span><span class="string">"cannot create resource"</span><span class="keyword">, </span><span class="default">E_USER_ERROR</span><span class="keyword">);<br />            die();<br />        }<br />    }<br />    <br />    if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$StdOut</span><span class="keyword">) &gt;= </span><span class="default">1</span><span class="keyword">) {<br />        if (</span><span class="default">$ReturnCode </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$ReturnValue </span><span class="keyword">= </span><span class="default">$StdOut</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$ReturnValue </span><span class="keyword">= </span><span class="string">"Return Code: " </span><span class="keyword">. </span><span class="default">$ReturnCode </span><span class="keyword">. </span><span class="string">"\nOutput on StdErr:\n" </span><span class="keyword">. </span><span class="default">$StdErr </span><span class="keyword">. </span><span class="string">"\n\nStandard Output Follows:\n\n"</span><span class="keyword">;<br />        }<br />    } else {<br />        if (</span><span class="default">$ReturnCode </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$ReturnValue </span><span class="keyword">= </span><span class="default">$StdErr</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$ReturnValue </span><span class="keyword">= </span><span class="string">"Return Code: " </span><span class="keyword">. </span><span class="default">$ReturnCode </span><span class="keyword">. </span><span class="string">"\nOutput on StdErr:\n" </span><span class="keyword">. </span><span class="default">$StdErr</span><span class="keyword">;<br />        }<br />    }<br />    return </span><span class="default">$ReturnValue</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="58044">  <div class="votes">
    <div id="Vu58044">
    <a href="/manual/vote-note.php?id=58044&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58044">
    <a href="/manual/vote-note.php?id=58044&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58044" title="100% like this...">
    2
    </div>
  </div>
  <a href="#58044" class="name">
  <strong class="user"><em>mendoza at pvv dot ntnu dot no</em></strong></a><a class="genanchor" href="#58044"> &para;</a><div class="date" title="2005-10-21 10:42"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58044">
<div class="phpcode"><code><span class="html">Since I don't have access to PAM via Apache, suexec on, nor access to /etc/shadow I coughed up this way of authenticating users based on the system users details. It's really hairy and ugly, but it works.<br /><br />&lt;?<br />function authenticate($user,$password) {<br />  $descriptorspec = array(<br />     0 =&gt; array("pipe", "r"),  // stdin is a pipe that the child will read from<br />     1 =&gt; array("pipe", "w"),  // stdout is a pipe that the child will write to<br />     2 =&gt; array("file","/dev/null", "w") // stderr is a file to write to<br />  );<br /><br />  $process = proc_open("su ".escapeshellarg($user), $descriptorspec, $pipes);<br /><br />  if (is_resource($process)) {<br />    // $pipes now looks like this:<br />    // 0 =&gt; writeable handle connected to child stdin<br />    // 1 =&gt; readable handle connected to child stdout<br />    // Any error output will be appended to /tmp/error-output.txt<br /><br />    fwrite($pipes[0],$password);<br />    fclose($pipes[0]);<br />    fclose($pipes[1]);<br /><br />    // It is important that you close any pipes before calling<br />    // proc_close in order to avoid a deadlock<br />    $return_value = proc_close($process);<br /><br />    return !$return_value;<br />  }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="57857">  <div class="votes">
    <div id="Vu57857">
    <a href="/manual/vote-note.php?id=57857&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57857">
    <a href="/manual/vote-note.php?id=57857&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57857" title="100% like this...">
    2
    </div>
  </div>
  <a href="#57857" class="name">
  <strong class="user"><em>picaune at hotmail dot com</em></strong></a><a class="genanchor" href="#57857"> &para;</a><div class="date" title="2005-10-16 04:51"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57857">
<div class="phpcode"><code><span class="html">The above note on Windows compatibility is not entirely correct.<br /><br />Windows will dutifully pass on additional handles above 2 onto the child process, starting with Windows 95 and Windows NT 3.5. It even supports this capability (starting with Windows 2000) from the command line using a special syntax (prefacing the redirection operator with the handle number).<br /><br />These handles will be, when passed to the child, preopened for low-level IO (e.g. _read) by number. The child can reopen them for high-level (e.g. fgets) using the _fdopen or _wfdopen methods. The child can then read from or write to them the same way they would stdin or stdout.<br /><br />However, child processes must be specially coded to use these handles, and if the end user is not intelligent enough to use them (e.g. "openssl &lt; commands.txt 3&lt; cacert.der") and the program not smart enough to check, it could cause errors or hangs.</span></code></div>
  </div>
 </div>
  <div class="note" id="129012">  <div class="votes">
    <div id="Vu129012">
    <a href="/manual/vote-note.php?id=129012&amp;page=function.proc-open&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129012">
    <a href="/manual/vote-note.php?id=129012&amp;page=function.proc-open&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129012" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#129012" class="name">
  <strong class="user"><em>mamedul.github.io</em></strong></a><a class="genanchor" href="#129012"> &para;</a><div class="date" title="2023-11-06 11:18"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129012">
<div class="phpcode"><code><span class="html">Cross function solutions for execute command using PHP-<br /><br />function php_exec( $cmd ){<br /><br />    if( function_exists('exec') ){<br />        $output = array();<br />        $return_var = 0;<br />        exec($cmd, $output, $return_var);<br />        return implode( " ", array_values($output) );<br />    }else if( function_exists('shell_exec') ){<br />        return shell_exec($cmd);<br />    }else if( function_exists('system') ){<br />        $return_var = 0;<br />        return system($cmd, $return_var);<br />    }else if( function_exists('passthru') ){<br />        $return_var = 0;<br />        ob_start();<br />        passthru($cmd, $return_var);<br />        $output = ob_get_contents();<br />        ob_end_clean(); //Use this instead of ob_flush()<br />        return $output;<br />    }else  if( function_exists('proc_open') ){<br />        $proc=proc_open($cmd,<br />            array(<br />                array("pipe","r"),<br />                array("pipe","w"),<br />                array("pipe","w")<br />            ),<br />            $pipes);<br />        return stream_get_contents($pipes[1]);<br />    }else{<br />        return "@PHP_COMMAND_NOT_SUPPORT";<br />    }    <br /><br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.proc-open&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.proc-open.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.exec.php">Program execution Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
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
                                                <li class="current">
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
