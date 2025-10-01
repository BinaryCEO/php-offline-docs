<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pcntl_signal - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pcntl-signal.php">
 <link rel="shorturl" href="https://www.php.net/pcntl-signal">
 <link rel="alternate" href="https://www.php.net/pcntl-signal" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pcntl-setpriority.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pcntl-signal-dispatch.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pcntl-signal.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pcntl-signal.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pcntl-signal.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pcntl-signal.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pcntl-signal.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pcntl-signal.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pcntl-signal.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pcntl-signal.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pcntl-signal.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pcntl-signal.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pcntl-signal.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Installs a signal handler" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pcntl_signal - Manual" />
<meta name="twitter:description" content="Installs a signal handler" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pcntl_signal - Manual" />
<meta itemprop="description" content="Installs a signal handler" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Installs a signal handler" />

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
        <a href="function.pcntl-signal-dispatch.php">
          pcntl_signal_dispatch &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pcntl-setpriority.php">
          &laquo; pcntl_setpriority        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.pcntl.php'>PCNTL</a></li>      <li><a href='ref.pcntl.php'>PCNTL Functions</a></li>      </ul>
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
            <option value='en/function.pcntl-signal.php' selected="selected">English</option>
            <option value='de/function.pcntl-signal.php'>German</option>
            <option value='es/function.pcntl-signal.php'>Spanish</option>
            <option value='fr/function.pcntl-signal.php'>French</option>
            <option value='it/function.pcntl-signal.php'>Italian</option>
            <option value='ja/function.pcntl-signal.php'>Japanese</option>
            <option value='pt_BR/function.pcntl-signal.php'>Brazilian Portuguese</option>
            <option value='ru/function.pcntl-signal.php'>Russian</option>
            <option value='tr/function.pcntl-signal.php'>Turkish</option>
            <option value='uk/function.pcntl-signal.php'>Ukrainian</option>
            <option value='zh/function.pcntl-signal.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pcntl-signal" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pcntl_signal</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal</span> &mdash; <span class="dc-title">Installs a signal handler</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.pcntl-signal-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pcntl_signal</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signal</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$handler</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$restart_syscalls</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>pcntl_signal()</strong></span> function installs a new
   signal handler or replaces the current signal handler for the signal indicated by <code class="parameter">signal</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">signal</code></dt>
     <dd>
      <p class="para">
       The signal number.
      </p>
     </dd>
    
    
     <dt><code class="parameter">handler</code></dt>
     <dd>
      <p class="para">
       The signal handler. This may be either a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span>, which
       will be invoked to handle the signal, or either of the two global
       constants <strong><code><a href="pcntl.constants.php#constant.sig-ign">SIG_IGN</a></code></strong> or <strong><code><a href="pcntl.constants.php#constant.sig-dfl">SIG_DFL</a></code></strong>,
       which will ignore the signal or restore the default signal handler
       respectively. 
      </p>
      <p class="para">
       If a <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> is given, it must implement the following
       signature:
      </p>
      <p class="para">
       <div class="methodsynopsis dc-description">
        <span class="methodname"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$signo</code></span>, <span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$siginfo</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

       <dl>
        
         <dt><code class="parameter">signal</code></dt>
         <dd>
          <span class="simpara">
           The signal being handled.
          </span>
         </dd>
        
        
         <dt><code class="parameter">siginfo</code></dt>
         <dd>
          <span class="simpara">
           If operating systems supports siginfo_t structures, this will be an array of signal information dependent on the signal.
          </span>
         </dd>
        
       </dl>
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        Note that when you set a handler to an object method, that object&#039;s
        reference count is increased which makes it persist until you either
        change the handler to something else, or your script ends.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">restart_syscalls</code></dt>
     <dd>
      <p class="para">
       Specifies whether system call restarting should be used when this
       signal arrives.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.pcntl-signal-changelog">
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
       <td>7.1.0</td>
       <td>
        As of PHP 7.1.0 the handler callback is given a second argument
        containing the siginfo of the specific signal.  This data is only
        supplied if the operating system has the siginfo_t structure.
        If the OS does not implement siginfo_t NULL is supplied.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.pcntl-signal-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3564">
    <p><strong>Example #1 <span class="function"><strong>pcntl_signal()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />pcntl_async_signals</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// signal handler function<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">sig_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$signo</span><span style="color: #007700">)<br />{<br /><br />     switch (</span><span style="color: #0000BB">$signo</span><span style="color: #007700">) {<br />         case </span><span style="color: #0000BB">SIGTERM</span><span style="color: #007700">:<br />             </span><span style="color: #FF8000">// handle shutdown tasks<br />             </span><span style="color: #007700">exit;<br />             break;<br />         case </span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">:<br />             </span><span style="color: #FF8000">// handle restart tasks<br />             </span><span style="color: #007700">break;<br />         case </span><span style="color: #0000BB">SIGUSR1</span><span style="color: #007700">:<br />             echo </span><span style="color: #DD0000">"Caught SIGUSR1...\n"</span><span style="color: #007700">;<br />             break;<br />         default:<br />             </span><span style="color: #FF8000">// handle all other signals<br />     </span><span style="color: #007700">}<br /><br />}<br /><br />echo </span><span style="color: #DD0000">"Installing signal handler...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// setup signal handlers<br /></span><span style="color: #0000BB">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGTERM</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">,  </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// or use an object<br />// pcntl_signal(SIGUSR1, array($obj, "do_something"));<br /><br /></span><span style="color: #007700">echo</span><span style="color: #DD0000">"Generating signal SIGUSR1 to self...\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// send SIGUSR1 to current process id<br />// posix_* functions require the posix extension<br /></span><span style="color: #0000BB">posix_kill</span><span style="color: #007700">(</span><span style="color: #0000BB">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #0000BB">SIGUSR1</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Done\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.pcntl-signal-notes">
  <h3 class="title">Notes</h3>
  <p class="para">
   <span class="function"><strong>pcntl_signal()</strong></span> doesn&#039;t stack the signal handlers, but replaces them.
  </p>
  <div class="refsect2 unknown-25" id="refsect2-function.pcntl-signal-unknown-25">
   <h4 class="title">Dispatch Methods</h4>
   <p class="para">
    There are several methods of dispatching signal handlers:
    <ul class="simplelist">
     <li>Asynchronous dispatch with <span class="function"><a href="function.pcntl-async-signals.php" class="function">pcntl_async_signals()</a></span> enabled. This is the recommended method</li>
     <li>Setting <a href="control-structures.declare.php#control-structures.declare.ticks" class="link">tick</a> frequency</li>
     <li>Manual dispatch with <span class="function"><a href="function.pcntl-signal-dispatch.php" class="function">pcntl_signal_dispatch()</a></span></li>
    </ul>
   </p>
   <p class="para">
    When signals are dispatched asynchronously or using tick-based execution, blocking functions like
    <span class="function"><a href="function.sleep.php" class="function">sleep()</a></span> may be interrupted.
   </p>
  </div>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="https://en.wikipedia.org/wiki/Signal_(IPC)" class="link external">&raquo;&nbsp;Signal (IPC)</a> on Wikipedia</li>
    <li><span class="function"><a href="function.pcntl-async-signals.php" class="function" rel="rdfs-seeAlso">pcntl_async_signals()</a> - Enable/disable asynchronous signal handling or return the old setting</span></li>
    <li><span class="function"><a href="function.pcntl-fork.php" class="function" rel="rdfs-seeAlso">pcntl_fork()</a> - Forks the currently running process</span></li>
    <li><span class="function"><a href="function.pcntl-signal-dispatch.php" class="function" rel="rdfs-seeAlso">pcntl_signal_dispatch()</a> - Calls signal handlers for pending signals</span></li>
    <li><span class="function"><a href="function.pcntl-waitpid.php" class="function" rel="rdfs-seeAlso">pcntl_waitpid()</a> - Waits on or returns the status of a forked child</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/functions/pcntl-signal.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pcntl-signal%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pcntl-signal&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-signal.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">28 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121894">  <div class="votes">
    <div id="Vu121894">
    <a href="/manual/vote-note.php?id=121894&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121894">
    <a href="/manual/vote-note.php?id=121894&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121894" title="90% like this...">
    66
    </div>
  </div>
  <a href="#121894" class="name">
  <strong class="user"><em>Ryan Jentzsch</em></strong></a><a class="genanchor" href="#121894"> &para;</a><div class="date" title="2017-11-21 08:53"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121894">
<div class="phpcode"><code><span class="html">If you are using PHP &gt;= 7.1 then DO NOT use `declare(ticks=1)` instead use `pcntl_async_signals(true)`<br /><br />There's no performance hit or overhead with `pcntl_async_signals()`. See this blog post <a href="https://blog.pascal-martin.fr/post/php71-en-other-new-things.html" rel="nofollow" target="_blank">https://blog.pascal-martin.fr/post/php71-en-other-new-things.html</a> for a simple example of how to use this.</span></code></div>
  </div>
 </div>
  <div class="note" id="124049">  <div class="votes">
    <div id="Vu124049">
    <a href="/manual/vote-note.php?id=124049&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124049">
    <a href="/manual/vote-note.php?id=124049&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124049" title="95% like this...">
    37
    </div>
  </div>
  <a href="#124049" class="name">
  <strong class="user"><em>kuba at valentine dot dev</em></strong></a><a class="genanchor" href="#124049"> &para;</a><div class="date" title="2019-07-19 12:13"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124049">
<div class="phpcode"><code><span class="html">Remember that signal handlers are called immediately, so every time when your process receives registered signal blocking functions like sleep() and usleep() are interrupted (or more like ended) like it was their time to finish.<br /><br />This is expected behaviour, but not mentioned in this documentation. Sleep interruption can be very unfortunate when for example you run a daemon that is supposed to execute some important task exactly every X seconds/minutes - this task could be called too early or too often and it would be hard to debug why it's happening exactly.<br /><br />Simply remember that signal handlers might interfere with other parts of your code.<br />Here is example workaround ensuring that function gets executed every minute no matter how many times our loop gets interrupted by incoming signal (SIGUSR1 in this case).<br /><br /><span class="default">&lt;?php<br /><br />  pcntl_async_signals</span><span class="keyword">(</span><span class="default">TRUE</span><span class="keyword">);<br /><br />  </span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGUSR1</span><span class="keyword">, function(</span><span class="default">$signal</span><span class="keyword">) {<br />    </span><span class="comment">// do something when signal is called<br />  </span><span class="keyword">});<br /><br />  function </span><span class="default">everyMinute</span><span class="keyword">() {<br />    </span><span class="comment">// do some important stuff<br />  </span><span class="keyword">}<br /><br />  </span><span class="default">$wait </span><span class="keyword">= </span><span class="default">60</span><span class="keyword">;<br />  </span><span class="default">$next </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /><br />  while (</span><span class="default">TRUE</span><span class="keyword">) {<br />    </span><span class="default">$stamp </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    do {<br />      if (</span><span class="default">$stamp </span><span class="keyword">&gt;= </span><span class="default">$next</span><span class="keyword">) { break; }<br />      </span><span class="default">$diff </span><span class="keyword">= </span><span class="default">$next </span><span class="keyword">- </span><span class="default">$stamp</span><span class="keyword">;<br />      </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$diff</span><span class="keyword">);<br />      </span><span class="default">$stamp </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    } while (</span><span class="default">$stamp </span><span class="keyword">&lt; </span><span class="default">$next</span><span class="keyword">);<br />    <br />    </span><span class="default">everyMinute</span><span class="keyword">();<br />    <br />    </span><span class="default">$next </span><span class="keyword">= </span><span class="default">$stamp </span><span class="keyword">+ </span><span class="default">$wait</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$wait</span><span class="keyword">);<br />  }<br /><br /></span><span class="default">?&gt;<br /></span><br />So in this infinite loop do {} while() calculates and adds missing sleep() to ensure that our everyMinute() function is not called too early. Both sleep() functions here are covered so everyMinute() will never be executed before it's time even if process receives multiple SIGUSR1 signals during it's runtime.</span></code></div>
  </div>
 </div>
  <div class="note" id="111428">  <div class="votes">
    <div id="Vu111428">
    <a href="/manual/vote-note.php?id=111428&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111428">
    <a href="/manual/vote-note.php?id=111428&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111428" title="82% like this...">
    18
    </div>
  </div>
  <a href="#111428" class="name">
  <strong class="user"><em>Zsolt Szilagyi</em></strong></a><a class="genanchor" href="#111428"> &para;</a><div class="date" title="2013-02-19 09:04"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111428">
<div class="phpcode"><code><span class="html">Remember that declaring a tick handler can become really expensive in terms of CPU cycles: Every n ticks the signal handling overhead will be executed. <br /><br />So instead of declaring tick=1, test if tick=100 can do the job. If so, you are likely to gain fivefold speed.<br /><br />As your script might always might miss some signals due to blocking operations like cURL downloads, call pcntl_signal_dispatch() on vital spots, e.g. at the beginning of your main loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="92803">  <div class="votes">
    <div id="Vu92803">
    <a href="/manual/vote-note.php?id=92803&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92803">
    <a href="/manual/vote-note.php?id=92803&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92803" title="77% like this...">
    25
    </div>
  </div>
  <a href="#92803" class="name">
  <strong class="user"><em>webmaster at ajeux dot com</em></strong></a><a class="genanchor" href="#92803"> &para;</a><div class="date" title="2009-08-10 06:56"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92803">
<div class="phpcode"><code><span class="html">For PHP &gt;= 5.3.0, instead of declare(ticks = 1), you should now use pcntl_ signal_ dispatch().</span></code></div>
  </div>
 </div>
  <div class="note" id="83981">  <div class="votes">
    <div id="Vu83981">
    <a href="/manual/vote-note.php?id=83981&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83981">
    <a href="/manual/vote-note.php?id=83981&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83981" title="77% like this...">
    20
    </div>
  </div>
  <a href="#83981" class="name">
  <strong class="user"><em>rbotzer at yahoo dot com</em></strong></a><a class="genanchor" href="#83981"> &para;</a><div class="date" title="2008-06-21 11:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83981">
<div class="phpcode"><code><span class="html">You cannot assign a signal handler for SIGKILL (kill -9).</span></code></div>
  </div>
 </div>
  <div class="note" id="92455">  <div class="votes">
    <div id="Vu92455">
    <a href="/manual/vote-note.php?id=92455&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92455">
    <a href="/manual/vote-note.php?id=92455&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92455" title="80% like this...">
    6
    </div>
  </div>
  <a href="#92455" class="name">
  <strong class="user"><em>benjamin at josefus dot /NO+SPAM/ net</em></strong></a><a class="genanchor" href="#92455"> &para;</a><div class="date" title="2009-07-24 01:25"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92455">
<div class="phpcode"><code><span class="html">Since php &gt;= 5.3 handles Closures, you are now able to define the Callback directly.
<br />Try this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">declare(</span><span class="default">ticks </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">);
<br />
<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGUSR1</span><span class="keyword">, function (</span><span class="default">$signal</span><span class="keyword">) {
<br />            echo </span><span class="string">'HANDLE SIGNAL ' </span><span class="keyword">. </span><span class="default">$signal </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;
<br />});
<br />
<br /></span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">posix_getpid</span><span class="keyword">(), </span><span class="default">SIGUSR1</span><span class="keyword">);
<br />
<br />die;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="49202">  <div class="votes">
    <div id="Vu49202">
    <a href="/manual/vote-note.php?id=49202&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49202">
    <a href="/manual/vote-note.php?id=49202&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49202" title="76% like this...">
    9
    </div>
  </div>
  <a href="#49202" class="name">
  <strong class="user"><em>ieure at php dot net</em></strong></a><a class="genanchor" href="#49202"> &para;</a><div class="date" title="2005-01-19 05:15"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49202">
<div class="phpcode"><code><span class="html">Some weird signal interactions going on here. I'm running PHP 4.3.9.<br /><br />sleep() calls seem to be interrupted when any signal is received by the PHP script. But things get weird when you sleep() inside a signal handler.<br /><br />Ordinarily, signal handlers are non-reentrant. That is, if the signal handler is running, sending another signal has no effect. However, sleep() seems to override PHP's signal handling. If you sleep() inside a signal handler, the signal is received and the sleep() is interrupted.<br /><br />This can be worked around like this:<br /><br />function handler($signal)<br />{<br />    // Ignore this signal<br />    pcntl_signal($signal, SIG_IGN);<br /><br />    sleep(10);<br /><br />    // Reinstall signal handler<br />    pcntl_signal($signal, __FUNCTION__);<br />}<br /><br />I don't see any mention of this behavior in the documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="71205">  <div class="votes">
    <div id="Vu71205">
    <a href="/manual/vote-note.php?id=71205&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71205">
    <a href="/manual/vote-note.php?id=71205&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71205" title="66% like this...">
    4
    </div>
  </div>
  <a href="#71205" class="name">
  <strong class="user"><em>rob at robertjohnkaper dot com</em></strong></a><a class="genanchor" href="#71205"> &para;</a><div class="date" title="2006-11-16 03:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71205">
<div class="phpcode"><code><span class="html">Tip: when using objects, don't set the signal handler from the constructor or even a method called from the constructor - your internal variables will be uninitialised.</span></code></div>
  </div>
 </div>
  <div class="note" id="102765">  <div class="votes">
    <div id="Vu102765">
    <a href="/manual/vote-note.php?id=102765&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102765">
    <a href="/manual/vote-note.php?id=102765&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102765" title="66% like this...">
    1
    </div>
  </div>
  <a href="#102765" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#102765"> &para;</a><div class="date" title="2011-03-04 07:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102765">
<div class="phpcode"><code><span class="html">I was having some issues with processing a signal using an object method I use for something else as well. In particular, I wanted to handle SIGCHLD with my own method "do_reap()" which I also call after a stream_select timeout and that uses a non-blocking pcntl_waitpid function.
<br />
<br />The method was called when the signal was received but it couldn't reap the child.
<br />
<br />The only way it worked was by creating a new handler that itself called do_reap().
<br />
<br />So in other words, the following does not work:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Parent </span><span class="keyword">{
<br />  </span><span class="comment">/* ... */
<br />  </span><span class="keyword">private function </span><span class="default">do_reap</span><span class="keyword">(){
<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$status</span><span class="keyword">,</span><span class="default">WNOHANG</span><span class="keyword">);
<br />    if(</span><span class="default">$p </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){
<br />      echo </span><span class="string">"\nReaped zombie child " </span><span class="keyword">. </span><span class="default">$p</span><span class="keyword">;
<br />    }
<br />
<br />   public function </span><span class="default">run</span><span class="keyword">(){
<br />    </span><span class="comment">/* ... */
<br />    </span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">,array(&amp;</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"do_reap"</span><span class="keyword">));
<br />    </span><span class="default">$readable </span><span class="keyword">= @</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// 5 sec timeout
<br />    </span><span class="keyword">if(</span><span class="default">$readable </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">){
<br />      </span><span class="comment">// we got a timeout
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">do_reap</span><span class="keyword">();
<br />   }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />But this work:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">Parent </span><span class="keyword">{
<br />  </span><span class="comment">/* ... */
<br />  </span><span class="keyword">private function </span><span class="default">do_reap</span><span class="keyword">(){
<br />    </span><span class="default">$p </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">,</span><span class="default">$status</span><span class="keyword">,</span><span class="default">WNOHANG</span><span class="keyword">);
<br />    if(</span><span class="default">$p </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">){
<br />      echo </span><span class="string">"\nReaped zombie child " </span><span class="keyword">. </span><span class="default">$p</span><span class="keyword">;
<br />    }
<br />
<br />   public function </span><span class="default">run</span><span class="keyword">(){
<br />    </span><span class="comment">/* ... */
<br />    </span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">,array(&amp;</span><span class="default">$this</span><span class="keyword">,</span><span class="string">"child_died"</span><span class="keyword">));
<br />    </span><span class="default">$readable </span><span class="keyword">= @</span><span class="default">stream_select</span><span class="keyword">(</span><span class="default">$read</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">$null</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">); </span><span class="comment">// 5 sec timeout
<br />    </span><span class="keyword">if(</span><span class="default">$readable </span><span class="keyword">=== </span><span class="default">0</span><span class="keyword">){
<br />      </span><span class="comment">// we got a timeout
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">do_reap</span><span class="keyword">();
<br />   }
<br />
<br />    private function </span><span class="default">child_died</span><span class="keyword">(){
<br />      </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">do_reap</span><span class="keyword">();
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119246">  <div class="votes">
    <div id="Vu119246">
    <a href="/manual/vote-note.php?id=119246&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119246">
    <a href="/manual/vote-note.php?id=119246&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119246" title="60% like this...">
    1
    </div>
  </div>
  <a href="#119246" class="name">
  <strong class="user"><em>wally at soggysoftware dot co dot uk</em></strong></a><a class="genanchor" href="#119246"> &para;</a><div class="date" title="2016-04-26 12:27"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119246">
<div class="phpcode"><code><span class="html">A word of caution around the third parameter (restart_syscalls) in pcntl_signal(...).<br /><br />I kept having a repeated issue where (seemingly randomly) my script would "exit unexpectedly" (_exit_, not crash: the exit code was always 0) while tracking forked children using signal handlers.<br /><br />It appears that the signal handling is not at fault (indeed, PHP isn't "at fault").  Having "restart_syscalls" set to FALSE seemed to be the problem's cause.<br /><br />I haven't debugged the issue extensively - except to observe that the issue was highly intermittent and seemed to relate to my use of usleep() in conjunction with restart_syscalls=FALSE.<br /><br />My theory is the usleep() was wrongly tracking time - as described over here: <a href="http://man7.org/linux/man-pages/man2/restart_syscall.2.html" rel="nofollow" target="_blank">http://man7.org/linux/man-pages/man2/restart_syscall.2.html</a><br /><br />Long story short, I re-enabled (which is the default value) restart_syscalls, and the issue went away.<br /><br />If you're curious - register_shutdown_function was still being handled correctly - so PHP definitely was _NOT_ crashing.  Interestingly however, my procedural code never "resumed" after the signal was handled.<br /><br />I do not believe this is a bug.  I believe it was ignorant user error.  YMMV.</span></code></div>
  </div>
 </div>
  <div class="note" id="70807">  <div class="votes">
    <div id="Vu70807">
    <a href="/manual/vote-note.php?id=70807&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70807">
    <a href="/manual/vote-note.php?id=70807&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70807" title="58% like this...">
    2
    </div>
  </div>
  <a href="#70807" class="name">
  <strong class="user"><em>nate at example dot com</em></strong></a><a class="genanchor" href="#70807"> &para;</a><div class="date" title="2006-10-29 04:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70807">
<div class="phpcode"><code><span class="html">If you have a script that needs certain sections to not be interrupted by a signal (especially SIGTERM or SIGINT), but want to make your script ready to process that signal ASAP, there's only one way to do it. Flag the script as having received the signal, and wait for your script to say its ready to process it.<br /><br />Here's a sample script:<br /><br />&lt;?<br />    $allow_exit = true;  // are we permitting exit?<br />    $force_exit = false; // do we need to exit?<br /><br />    declare(ticks = 1);<br />    register_tick_function('check_exit');<br />    pcntl_signal(SIGTERM, 'sig_handler');<br />    pcntl_signal(SIGINT, 'sig_handler');<br /><br />    function sig_handler () {<br />        global $allow_exit, $force_exit;<br /><br />        if ($allow_exit)<br />            exit;<br />        else<br />            $force_exit = true;<br />    }<br /><br />    function check_exit () {<br />        global $allow_exit, $force_exit;<br /><br />        if ($force_exit &amp;&amp; $allow_exit)<br />            exit;<br />    }<br /><br />    $allow_exit = false;<br /><br />    $i = 0;<br />    while (++$i) {<br />        echo "still going (${i})\n";<br />        if ($i == 10)<br />            $allow_exit = true;<br /><br />        sleep(2);<br />    }<br />?&gt;<br /><br />You set $allow_exit to true at all times when it is perfectly acceptable that your script could exit without warning. In sections where you really need the script to continue running, you set $allow_exit to false. Any signals received while $allow_exit is false will not take effect until you set $allow_exit to true.<br /><br />&lt;?<br />    $allow_exit = true;<br /><br />    // unimportant stuff here. exiting will not harm anything<br /><br />    $allow_exit = false;<br /><br />    // really important stuff not to be interrupted<br /><br />    $allow_exit = true;<br /><br />    // more unimportant stuff. if signal was received during<br />    // important processing above, script will exit here<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="115984">  <div class="votes">
    <div id="Vu115984">
    <a href="/manual/vote-note.php?id=115984&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115984">
    <a href="/manual/vote-note.php?id=115984&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115984" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115984" class="name">
  <strong class="user"><em>dorogikh dot alexander at gmail dot com</em></strong></a><a class="genanchor" href="#115984"> &para;</a><div class="date" title="2014-10-22 07:40"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom115984">
<div class="phpcode"><code><span class="html">Looks like php uses  RealTime signals. This means that if one signal is currently processed, then other signals will not be lost.<br /><br />just for example<br /><span class="default">&lt;?php<br />pcntl_signal</span><span class="keyword">(</span><span class="default">SIGHUP</span><span class="keyword">, </span><span class="default">SIG_IGN</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />in strace log looks like this<br /><br />"rt_sigaction(SIGHUP, {SIG_IGN, [], SA_RESTORER|SA_RESTART, 0x7f8caf83cc30}, {SIG_DFL, [], 0}, 8) = 0"<br /><br />And code for testing<br /><br /><span class="default">&lt;?php<br />pcntl_signal</span><span class="keyword">(</span><span class="default">SIGHUP</span><span class="keyword">, function(</span><span class="default">$signo</span><span class="keyword">){<br />  echo </span><span class="string">"1\n"</span><span class="keyword">;<br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br />  echo </span><span class="string">"2\n"</span><span class="keyword">;<br />});<br /><br />while(</span><span class="default">true</span><span class="keyword">){<br />  </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  </span><span class="default">pcntl_signal_dispatch</span><span class="keyword">();<br />}<br /></span><span class="default">?&gt;<br /></span><br />Run this and send how many SIGHUP signals as you want. All of them will be processed.<br /><br />P.S.<br />I guess "all of them". I couldn't found real signal queue size. Will appreciate if someone points me.</span></code></div>
  </div>
 </div>
  <div class="note" id="122894">  <div class="votes">
    <div id="Vu122894">
    <a href="/manual/vote-note.php?id=122894&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122894">
    <a href="/manual/vote-note.php?id=122894&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122894" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#122894" class="name">
  <strong class="user"><em>Aurelien Marchand</em></strong></a><a class="genanchor" href="#122894"> &para;</a><div class="date" title="2018-06-29 02:29"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122894">
<div class="phpcode"><code><span class="html">To be clear, the phrase "pcntl_signal() doesn't stack the signal handlers, but replaces them. " means that you can still have different functions for different signals but only one function per signal.<br /><br />In other words, this will work as expected<br /><br /><span class="default">&lt;?php<br /><br />pcntl_async_signals</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGUSR1</span><span class="keyword">,function(){echo </span><span class="string">"received SIGUSR1"</span><span class="keyword">;});<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGUSR2</span><span class="keyword">,function(){echo </span><span class="string">"received SIGUSR2"</span><span class="keyword">;});<br /></span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">posix_getpid</span><span class="keyword">(),</span><span class="default">SIGUSR1</span><span class="keyword">);<br /></span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">posix_getpid</span><span class="keyword">(),</span><span class="default">SIGUSR2</span><span class="keyword">);<br /><br /></span><span class="comment">// returns "received SIGUSR1" and then "received SIGUSR2"<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="66808">  <div class="votes">
    <div id="Vu66808">
    <a href="/manual/vote-note.php?id=66808&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66808">
    <a href="/manual/vote-note.php?id=66808&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66808" title="100% like this...">
    1
    </div>
  </div>
  <a href="#66808" class="name">
  <strong class="user"><em>aeolianmeson at NOSPAM dot blitzeclipse dot com</em></strong></a><a class="genanchor" href="#66808"> &para;</a><div class="date" title="2006-05-29 08:43"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66808">
<div class="phpcode"><code><span class="html">In at least version 5.1.4, the parameter passed to the handler is not a strict integer.<br /><br />I have had such problems as trying to add the signal to an array, but the array is completely screwed up when viewed (but not viewed immediately after being added). This occurs when the handler is a method (array($this, 'methodname')), or a traditional functions.<br /><br />To avoid this bug, typecast the parameter to an integer:<br />(note that each newline may appear to just be 'n'.)<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print(</span><span class="string">"pid= " </span><span class="keyword">. </span><span class="default">posix_getpid</span><span class="keyword">() . </span><span class="string">"\n"</span><span class="keyword">);<br />declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$arrsignals </span><span class="keyword">= array();<br /><br />function </span><span class="default">handler</span><span class="keyword">(</span><span class="default">$nsig</span><span class="keyword">)<br />{<br />    global </span><span class="default">$arrsignals</span><span class="keyword">;<br />    </span><span class="default">$arrsignals</span><span class="keyword">[] = (int)</span><span class="default">$nsig</span><span class="keyword">;<br />    print(</span><span class="string">"Signal caught and registered.\n"</span><span class="keyword">);<br />    </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arrsignals</span><span class="keyword">);<br />}<br /><br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGTERM</span><span class="keyword">, </span><span class="string">'handler'</span><span class="keyword">);<br /><br /></span><span class="comment">// Wait for signals from the command-line (just a simple 'kill (pid)').<br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">15</span><span class="keyword">;<br />while(</span><span class="default">$n</span><span class="keyword">)<br />{<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$n</span><span class="keyword">--;<br />}<br /><br />print(</span><span class="string">"terminated.\n\n"</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$arrsignals</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Dustin</span></code></div>
  </div>
 </div>
  <div class="note" id="60553">  <div class="votes">
    <div id="Vu60553">
    <a href="/manual/vote-note.php?id=60553&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60553">
    <a href="/manual/vote-note.php?id=60553&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60553" title="100% like this...">
    1
    </div>
  </div>
  <a href="#60553" class="name">
  <strong class="user"><em>wm161 at wm161 dot net</em></strong></a><a class="genanchor" href="#60553"> &para;</a><div class="date" title="2006-01-10 03:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60553">
<div class="phpcode"><code><span class="html">When you are running a script inside of a loop that checks a socket, and it hangs on that checking (Either by flaw or design), it can't handle signals until some data is received.<br /><br />A suggested workaround would be to use the stream_set_blocking function, or stream_select on the offending reads.</span></code></div>
  </div>
 </div>
  <div class="note" id="79948">  <div class="votes">
    <div id="Vu79948">
    <a href="/manual/vote-note.php?id=79948&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79948">
    <a href="/manual/vote-note.php?id=79948&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79948" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79948" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#79948"> &para;</a><div class="date" title="2007-12-20 08:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79948">
<div class="phpcode"><code><span class="html">Multiple children return less than the number of children exiting at a given moment SIGCHLD signals is normal behavior for Unix (POSIX) systems.  SIGCHLD might be read as "one or more children changed status -- go examine your children and harvest their status values".  Signals are implemented as bit masks in most Unix systems, so there can only be 1 SIGCHLD bit set in any given kernel tick for a process.</span></code></div>
  </div>
 </div>
  <div class="note" id="70161">  <div class="votes">
    <div id="Vu70161">
    <a href="/manual/vote-note.php?id=70161&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70161">
    <a href="/manual/vote-note.php?id=70161&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70161" title="50% like this...">
    0
    </div>
  </div>
  <a href="#70161" class="name">
  <strong class="user"><em>imslushie at hotmaildotcom dot com</em></strong></a><a class="genanchor" href="#70161"> &para;</a><div class="date" title="2006-10-04 07:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70161">
<div class="phpcode"><code><span class="html">I have been having trouble reaping my child process. It seemed most of the time, children were reaped properly but *sometimes* they would stay as zombies. I was catching the CHLD signal to reap child processes with the following code:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">childFinished</span><span class="keyword">(</span><span class="default">$signal</span><span class="keyword">)<br />{<br />  global </span><span class="default">$kids</span><span class="keyword">;<br />  </span><span class="default">$kids</span><span class="keyword">--;<br />  </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$kids </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGCHLD</span><span class="keyword">, </span><span class="string">"childFinished"</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)<br />{<br />  while (</span><span class="default">$kids </span><span class="keyword">&gt;= </span><span class="default">50</span><span class="keyword">) </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />  <br />  </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />  if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) die(</span><span class="string">'failed to fork :('</span><span class="keyword">);<br /><br />  </span><span class="comment">/* child process */<br />  </span><span class="keyword">if (</span><span class="default">$pid </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) <br />  {<br />    </span><span class="comment">/* do something */<br />    </span><span class="keyword">exit(</span><span class="default">0</span><span class="keyword">);<br />  }<br /><br />  </span><span class="comment">/* parent */<br />  </span><span class="keyword">else { </span><span class="default">$kids</span><span class="keyword">++; }<br />}<br /><br /></span><span class="comment">/* when finished, just clean up the children */<br /></span><span class="keyword">print </span><span class="string">"Reaping </span><span class="default">$kids</span><span class="string"> children...\n"</span><span class="keyword">;<br />while (</span><span class="default">$kids</span><span class="keyword">) </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /><br />print </span><span class="string">"Finished.\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The problem was, $kids never became zero so it would effectively wait forever. After wracking my brains (UNIX forks are new to me) I finally read the Perl IPC docs and viola, a solution! It turns out that because signal handlers are not re-entrant, my handler will not be called again while it is in use. The scenario that caused me trouble was that one child would exit and call the signal handler, which would pcntl_waitpid() it and decrement the counter. Meanwhile, another child would exit while the first child was still being reaped,  so the second would never get to notify the parent! <br /><br />The solution was to continually reap children from the SIGCHLD handler, so long as there were children to reap. Here is the *fixed* childFinished function:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">childFinished</span><span class="keyword">(</span><span class="default">$signal</span><span class="keyword">)<br />{<br />  global </span><span class="default">$kids</span><span class="keyword">;<br /><br />  while( </span><span class="default">pcntl_waitpid</span><span class="keyword">(-</span><span class="default">1</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">) &gt; </span><span class="default">0 </span><span class="keyword">)<br />    </span><span class="default">$kids</span><span class="keyword">--;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="67704">  <div class="votes">
    <div id="Vu67704">
    <a href="/manual/vote-note.php?id=67704&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67704">
    <a href="/manual/vote-note.php?id=67704&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67704" title="50% like this...">
    0
    </div>
  </div>
  <a href="#67704" class="name">
  <strong class="user"><em>aeolianmeson at NOSPAXM dot blitzeclipse dot com</em></strong></a><a class="genanchor" href="#67704"> &para;</a><div class="date" title="2006-06-09 01:19"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67704">
<div class="phpcode"><code><span class="html">This issue occurs in at least PHP 5.1.2.<br /><br />When a SIGINT is sent via CTRL+C or CTRL+BREAK, the handler is called. If this handler sends a SIGTERM to other children, the signals are not received.<br /><br />SIGINT can be sent via posix_kill() and it work exactly as expected-- This only applies when initiated via a hard break.</span></code></div>
  </div>
 </div>
  <div class="note" id="63710">  <div class="votes">
    <div id="Vu63710">
    <a href="/manual/vote-note.php?id=63710&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63710">
    <a href="/manual/vote-note.php?id=63710&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63710" title="50% like this...">
    0
    </div>
  </div>
  <a href="#63710" class="name">
  <strong class="user"><em>zenyatta22 at hotmail</em></strong></a><a class="genanchor" href="#63710"> &para;</a><div class="date" title="2006-03-28 02:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63710">
<div class="phpcode"><code><span class="html">Process handling is not available when using a blocking socket! Bear this in mind.</span></code></div>
  </div>
 </div>
  <div class="note" id="90418">  <div class="votes">
    <div id="Vu90418">
    <a href="/manual/vote-note.php?id=90418&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90418">
    <a href="/manual/vote-note.php?id=90418&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90418" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#90418" class="name">
  <strong class="user"><em>ewout dot NOSPAM dot zigterman at custosys dot nl</em></strong></a><a class="genanchor" href="#90418"> &para;</a><div class="date" title="2009-04-21 08:32"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90418">
<div class="phpcode"><code><span class="html">I found out then when you use pcntl_signal in a 'deamon' script and you run it before you fork childs it does not work as expected.<br /><br />instead you need to use pcntl_signal in the child code of the child you are forking<br /><br />and if you want to cach signals for the 'deamon' part you should use pcntl_signal in the parent code.</span></code></div>
  </div>
 </div>
  <div class="note" id="19454">  <div class="votes">
    <div id="Vu19454">
    <a href="/manual/vote-note.php?id=19454&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19454">
    <a href="/manual/vote-note.php?id=19454&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19454" title="100% like this...">
    1
    </div>
  </div>
  <a href="#19454" class="name">
  <strong class="user"><em>daniel[at]lorch.cc</em></strong></a><a class="genanchor" href="#19454"> &para;</a><div class="date" title="2002-02-27 06:17"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19454">
<div class="phpcode"><code><span class="html">There are two documents I consider reading:<br /><br />  Unix Signals Programming<br />  <a href="http://users.actcom.co.il/~choo/lupg/tutorials/" rel="nofollow" target="_blank">http://users.actcom.co.il/~choo/lupg/tutorials/</a><br /><br />  Beej's Guide to Unix Interprocess Communication <br />  <a href="http://www.ecst.csuchico.edu/~beej/guide/ipc/" rel="nofollow" target="_blank">http://www.ecst.csuchico.edu/~beej/guide/ipc/</a><br /><br />Also, have a look at the manpage:<br /><br />  <a href="http://www.mcsr.olemiss.edu/cgi-bin/man-cgi?signal+5" rel="nofollow" target="_blank">http://www.mcsr.olemiss.edu/cgi-bin/man-cgi?signal+5</a></span></code></div>
  </div>
 </div>
  <div class="note" id="49663">  <div class="votes">
    <div id="Vu49663">
    <a href="/manual/vote-note.php?id=49663&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49663">
    <a href="/manual/vote-note.php?id=49663&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49663" title="50% like this...">
    0
    </div>
  </div>
  <a href="#49663" class="name">
  <strong class="user"><em>codeslinger at compsalot dot com</em></strong></a><a class="genanchor" href="#49663"> &para;</a><div class="date" title="2005-02-03 09:23"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49663">
<div class="phpcode"><code><span class="html">I ran into an interesting problem. CLI 4.3.10 Linux<br /><br />The parent forked a child.  The child did a bunch of stuff, and when it was done it sent SIGUSR1 to the parent and immediately exited.<br /><br />Result: <br />The child turned into a zombie process waiting for the parent to harvest it, as it should.<br /><br />But the parent was unable to harvest the child because it was receiving an endless barrage of SIGUSR1s.  In fact, it logged over 200000 before I shut it down (SIGKILL).  The parent was not able to do anything else (respond to other events) during that time.<br /><br />No, it wasn't a bug in my child code.  Apparently, after sending a signal there is some "behind the covers" work that needs to occur to acknowledge signal completion, and when you exit immediately it is not able to happen, so the system just keeps trying.<br /><br />Solution:  I introduced a small delay in the child, after sending the signal, and before exiting.  <br />No more Sig loops...<br /><br />----------<br /><br />P.S.  With respect to the note below.  The whole point of the sleep function is to enable the processing of other events.  So, yes, your non-renterent code, will suddenly get re-entered when you do a sleep, because you have just handed off control to the next pending event.<br /><br />Ignoring the signal is only an option if the signal is unimportant to your program....   The better way to approach it, is to not do lengthy processing inside of the signal event.  Instead set a global flag and get the heck out of there as fast as possible.  Allow another part of your program to check the flag and do the processing outside of the signal event.  Usually your program is in some kind of loop when it is receiving signals, so checking a flag regularly shouldn't be a problem.</span></code></div>
  </div>
 </div>
  <div class="note" id="83719">  <div class="votes">
    <div id="Vu83719">
    <a href="/manual/vote-note.php?id=83719&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83719">
    <a href="/manual/vote-note.php?id=83719&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83719" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#83719" class="name">
  <strong class="user"><em>Holger Hees</em></strong></a><a class="genanchor" href="#83719"> &para;</a><div class="date" title="2008-06-09 12:49"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83719">
<div class="phpcode"><code><span class="html">you should use following code to prevent situation described by anxious2006 (children exit near simultaneously)<br /><br />public function sig_handler($signo){<br />  switch ($signo) {<br />    case SIGCLD:<br />      while( ( $pid = pcntl_wait ( $signo, WNOHANG ) ) &gt; 0 ){<br />        $signal = pcntl_wexitstatus ( $signo );<br />      }<br />      break;<br />  }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="78859">  <div class="votes">
    <div id="Vu78859">
    <a href="/manual/vote-note.php?id=78859&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78859">
    <a href="/manual/vote-note.php?id=78859&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78859" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#78859" class="name">
  <strong class="user"><em>anxious2006</em></strong></a><a class="genanchor" href="#78859"> &para;</a><div class="date" title="2007-10-30 09:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78859">
<div class="phpcode"><code><span class="html">Under my setup (FreeBSD 6.2-RELEASE / PHP 5.2.4 CLI) I've noticed that when a child exits the SIGCHLD handler in the parent is not always invoked. It seems to happen when two children exit near simultaneously.<br /><br />In this instance the child prints "EXIT" and the parent prints "SIGCHLD received":<br /><br />- EXIT<br />- SIGCHLD received<br /><br />This works as expected, but now look what happens when three exit in quick succession:<br /><br />- EXIT<br />- EXIT<br />- EXIT<br />- SIGCHLD received<br />- SIGCHLD received<br /><br />Because of this quirk any code which tries to limit the maximum number of children by incrementing on fork and decrementing on SIGCHLD will eventually end up with a single child (or no further forks), since the "active children" count is always above the maximum. I've noticed similar behaviour with using decrement after pcntl_wait(). Hopefully there's a workaround for this.</span></code></div>
  </div>
 </div>
  <div class="note" id="108873">  <div class="votes">
    <div id="Vu108873">
    <a href="/manual/vote-note.php?id=108873&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108873">
    <a href="/manual/vote-note.php?id=108873&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108873" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#108873" class="name">
  <strong class="user"><em>S. Kr@cK</em></strong></a><a class="genanchor" href="#108873"> &para;</a><div class="date" title="2012-05-31 12:25"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108873">
<div class="phpcode"><code><span class="html">static class method to get the name of a process signal as string:
<br />
<br />(self::$processSignalDescriptions is used to cache the results)
<br />
<br /><span class="default">&lt;?php
<br />    </span><span class="keyword">public static function </span><span class="default">getPOSIXSignalText</span><span class="keyword">(</span><span class="default">$signo</span><span class="keyword">) {
<br />
<br />        try {
<br />            if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$processSignalDescriptions</span><span class="keyword">)) {
<br />
<br />                </span><span class="default">self</span><span class="keyword">::</span><span class="default">$processSignalDescriptions </span><span class="keyword">= array();
<br />
<br />                </span><span class="default">$signal_list </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"kill -l"</span><span class="keyword">)));
<br />                foreach (</span><span class="default">$signal_list </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {
<br />                    </span><span class="default">self</span><span class="keyword">::</span><span class="default">$processSignalDescriptions</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">] = </span><span class="string">"SIG"</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">;
<br />                }
<br />            }
<br />
<br />            return isset(</span><span class="default">self</span><span class="keyword">::</span><span class="default">$processSignalDescriptions</span><span class="keyword">[</span><span class="default">$signo</span><span class="keyword">])?</span><span class="default">self</span><span class="keyword">::</span><span class="default">$processSignalDescriptions</span><span class="keyword">[</span><span class="default">$signo</span><span class="keyword">]:</span><span class="string">"UNKNOWN"</span><span class="keyword">;
<br />
<br />        } catch (</span><span class="default">Exception $e</span><span class="keyword">) {}
<br />
<br />        return </span><span class="string">"UNKNOWN"</span><span class="keyword">;
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115715">  <div class="votes">
    <div id="Vu115715">
    <a href="/manual/vote-note.php?id=115715&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115715">
    <a href="/manual/vote-note.php?id=115715&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115715" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#115715" class="name">
  <strong class="user"><em>fx4084 at gmail dot com</em></strong></a><a class="genanchor" href="#115715"> &para;</a><div class="date" title="2014-09-12 08:13"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115715">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />pcntl_signal</span><span class="keyword">(</span><span class="default">SIGTERM</span><span class="keyword">,  function(</span><span class="default">$signo</span><span class="keyword">) {<br />    echo </span><span class="string">"\n This signal is called. [</span><span class="default">$signo</span><span class="string">] \n"</span><span class="keyword">;<br />    </span><span class="default">Status</span><span class="keyword">::</span><span class="default">$state </span><span class="keyword">= -</span><span class="default">1</span><span class="keyword">;<br />});<br /><br />class </span><span class="default">Status</span><span class="keyword">{<br />    public static </span><span class="default">$state </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />if (</span><span class="default">$pid </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {<br />    die(</span><span class="string">'could not fork'</span><span class="keyword">);<br />}<br /><br />if(</span><span class="default">$pid</span><span class="keyword">) {<br />    </span><span class="comment">// parent<br /></span><span class="keyword">} else {<br />    while(</span><span class="default">true</span><span class="keyword">) {<br />        </span><span class="comment">// Dispatching...<br />        </span><span class="default">pcntl_signal_dispatch</span><span class="keyword">();<br />        if(</span><span class="default">Status</span><span class="keyword">::</span><span class="default">$state </span><span class="keyword">== -</span><span class="default">1</span><span class="keyword">) {<br />            </span><span class="comment">// Do something and end loop.<br />            </span><span class="keyword">break;<br />        }<br />        <br />        for(</span><span class="default">$j </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$j </span><span class="keyword">&lt; </span><span class="default">2</span><span class="keyword">; </span><span class="default">$j</span><span class="keyword">++) {<br />            echo </span><span class="string">'.'</span><span class="keyword">;<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />        }<br />        echo </span><span class="string">"\n"</span><span class="keyword">;<br />    }<br />    <br />    echo </span><span class="string">"Finish \n"</span><span class="keyword">;<br />    exit();<br />}<br /><br /></span><span class="default">$n </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while(</span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="default">$res </span><span class="keyword">= </span><span class="default">pcntl_waitpid</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">$status</span><span class="keyword">, </span><span class="default">WNOHANG</span><span class="keyword">);<br />    <br />    </span><span class="comment">// If the child process ends, then end the main process.<br />    </span><span class="keyword">if(-</span><span class="default">1 </span><span class="keyword">== </span><span class="default">$res </span><span class="keyword">|| </span><span class="default">$res </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)<br />        break;<br />    <br />    </span><span class="comment">// Send a signal after 5 seconds..<br />    </span><span class="keyword">if(</span><span class="default">$n </span><span class="keyword">== </span><span class="default">5</span><span class="keyword">)<br />        </span><span class="default">posix_kill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">, </span><span class="default">SIGTERM</span><span class="keyword">);<br />    <br />    </span><span class="default">$n</span><span class="keyword">++;<br />    <br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88945">  <div class="votes">
    <div id="Vu88945">
    <a href="/manual/vote-note.php?id=88945&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88945">
    <a href="/manual/vote-note.php?id=88945&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88945" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#88945" class="name">
  <strong class="user"><em>seong at respice dot net</em></strong></a><a class="genanchor" href="#88945"> &para;</a><div class="date" title="2009-02-14 08:48"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88945">
<div class="phpcode"><code><span class="html">Be careful, when using an object in your callback. It seems this elevates the reference count. You may not want it to happen in repeated child processes.</span></code></div>
  </div>
 </div>
  <div class="note" id="114575">  <div class="votes">
    <div id="Vu114575">
    <a href="/manual/vote-note.php?id=114575&amp;page=function.pcntl-signal&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114575">
    <a href="/manual/vote-note.php?id=114575&amp;page=function.pcntl-signal&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114575" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#114575" class="name">
  <strong class="user"><em>frustrated at outdated docs</em></strong></a><a class="genanchor" href="#114575"> &para;</a><div class="date" title="2014-03-07 11:01"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114575">
<div class="phpcode"><code><span class="html">Please be aware that declaring ticks or calling pcntl_signal_dispatch() in 5.3 and later is required to make pcntl_signal do anything useful. I wish the documentation made this more clear.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pcntl-signal&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-signal.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.pcntl.php">PCNTL Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.pcntl-alarm.php" title="pcntl_&#8203;alarm">pcntl_&#8203;alarm</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-async-signals.php" title="pcntl_&#8203;async_&#8203;signals">pcntl_&#8203;async_&#8203;signals</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-errno.php" title="pcntl_&#8203;errno">pcntl_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-exec.php" title="pcntl_&#8203;exec">pcntl_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-fork.php" title="pcntl_&#8203;fork">pcntl_&#8203;fork</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-get-last-error.php" title="pcntl_&#8203;get_&#8203;last_&#8203;error">pcntl_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-getcpuaffinity.php" title="pcntl_&#8203;getcpuaffinity">pcntl_&#8203;getcpuaffinity</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-getpriority.php" title="pcntl_&#8203;getpriority">pcntl_&#8203;getpriority</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-rfork.php" title="pcntl_&#8203;rfork">pcntl_&#8203;rfork</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-setcpuaffinity.php" title="pcntl_&#8203;setcpuaffinity">pcntl_&#8203;setcpuaffinity</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-setpriority.php" title="pcntl_&#8203;setpriority">pcntl_&#8203;setpriority</a>
                        </li>
                                                <li class="current">
                            <a href="function.pcntl-signal.php" title="pcntl_&#8203;signal">pcntl_&#8203;signal</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-signal-dispatch.php" title="pcntl_&#8203;signal_&#8203;dispatch">pcntl_&#8203;signal_&#8203;dispatch</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-signal-get-handler.php" title="pcntl_&#8203;signal_&#8203;get_&#8203;handler">pcntl_&#8203;signal_&#8203;get_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigprocmask.php" title="pcntl_&#8203;sigprocmask">pcntl_&#8203;sigprocmask</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigtimedwait.php" title="pcntl_&#8203;sigtimedwait">pcntl_&#8203;sigtimedwait</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-sigwaitinfo.php" title="pcntl_&#8203;sigwaitinfo">pcntl_&#8203;sigwaitinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-strerror.php" title="pcntl_&#8203;strerror">pcntl_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-unshare.php" title="pcntl_&#8203;unshare">pcntl_&#8203;unshare</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wait.php" title="pcntl_&#8203;wait">pcntl_&#8203;wait</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-waitid.php" title="pcntl_&#8203;waitid">pcntl_&#8203;waitid</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-waitpid.php" title="pcntl_&#8203;waitpid">pcntl_&#8203;waitpid</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wexitstatus.php" title="pcntl_&#8203;wexitstatus">pcntl_&#8203;wexitstatus</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifexited.php" title="pcntl_&#8203;wifexited">pcntl_&#8203;wifexited</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifsignaled.php" title="pcntl_&#8203;wifsignaled">pcntl_&#8203;wifsignaled</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wifstopped.php" title="pcntl_&#8203;wifstopped">pcntl_&#8203;wifstopped</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wstopsig.php" title="pcntl_&#8203;wstopsig">pcntl_&#8203;wstopsig</a>
                        </li>
                                                <li class="">
                            <a href="function.pcntl-wtermsig.php" title="pcntl_&#8203;wtermsig">pcntl_&#8203;wtermsig</a>
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
