<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_set_option - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-set-option.php">
 <link rel="shorturl" href="https://www.php.net/socket-set-option">
 <link rel="alternate" href="https://www.php.net/socket-set-option" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-set-nonblock.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-setopt.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-set-option.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-set-option.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-set-option.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-set-option.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-set-option.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-set-option.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-set-option.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-set-option.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-set-option.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-set-option.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-set-option.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Sets socket options for the socket" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_set_option - Manual" />
<meta name="twitter:description" content="Sets socket options for the socket" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_set_option - Manual" />
<meta itemprop="description" content="Sets socket options for the socket" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Sets socket options for the socket" />

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
        <a href="function.socket-setopt.php">
          socket_setopt &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-set-nonblock.php">
          &laquo; socket_set_nonblock        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.sockets.php'>Sockets</a></li>      <li><a href='ref.sockets.php'>Socket Functions</a></li>      </ul>
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
            <option value='en/function.socket-set-option.php' selected="selected">English</option>
            <option value='de/function.socket-set-option.php'>German</option>
            <option value='es/function.socket-set-option.php'>Spanish</option>
            <option value='fr/function.socket-set-option.php'>French</option>
            <option value='it/function.socket-set-option.php'>Italian</option>
            <option value='ja/function.socket-set-option.php'>Japanese</option>
            <option value='pt_BR/function.socket-set-option.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-set-option.php'>Russian</option>
            <option value='tr/function.socket-set-option.php'>Turkish</option>
            <option value='uk/function.socket-set-option.php'>Ukrainian</option>
            <option value='zh/function.socket-set-option.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-set-option" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_set_option</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_set_option</span> &mdash; <span class="dc-title">Sets socket options for the socket</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-set-option-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_set_option</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$level</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$value</code></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>socket_set_option()</strong></span> function sets the option
   specified by the <code class="parameter">option</code> parameter, at the
   specified protocol <code class="parameter">level</code>, to the value pointed to
   by the <code class="parameter">value</code> parameter for the 
   <code class="parameter">socket</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-set-option-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance created with <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>
       or <span class="function"><a href="function.socket-accept.php" class="function">socket_accept()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">level</code></dt>
     <dd>
      <p class="para">
       The <code class="parameter">level</code> parameter specifies the protocol
       level at which the option resides. For example, to set options at
       the socket level, a <code class="parameter">level</code> parameter of
       <strong><code><a href="sockets.constants.php#constant.sol-socket">SOL_SOCKET</a></code></strong> would be used. Other levels, such as
       TCP, can be used by specifying the protocol number of that level. 
       Protocol numbers can be found by using the 
       <span class="function"><a href="function.getprotobyname.php" class="function">getprotobyname()</a></span> function.
      </p>
     </dd>
    
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       The available socket options are the same as those for the
       <span class="function"><a href="function.socket-get-option.php" class="function">socket_get_option()</a></span> function.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The option value.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-set-option-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-set-option-changelog">
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
   <code class="parameter">socket</code> is a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance now;
   previously, it was a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
  </td>
 </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.socket-set-option-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4810">
    <p><strong>Example #1 <span class="function"><strong>socket_set_option()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$socket </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_create</span><span style="color: #007700">(</span><span style="color: #0000BB">AF_INET</span><span style="color: #007700">, </span><span style="color: #0000BB">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_TCP</span><span style="color: #007700">);<br /><br />if (!</span><span style="color: #0000BB">is_resource</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'Unable to create socket: '</span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br />if (!</span><span style="color: #0000BB">socket_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #0000BB">SO_REUSEADDR</span><span style="color: #007700">, </span><span style="color: #0000BB">1</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'Unable to set option on socket: '</span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br />if (!</span><span style="color: #0000BB">socket_bind</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #0000BB">1223</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">'Unable to bind socket: '</span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$rval </span><span style="color: #007700">= </span><span style="color: #0000BB">socket_get_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$socket</span><span style="color: #007700">, </span><span style="color: #0000BB">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #0000BB">SO_REUSEADDR</span><span style="color: #007700">);<br /><br />if (</span><span style="color: #0000BB">$rval </span><span style="color: #007700">=== </span><span style="color: #0000BB">false</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'Unable to get socket option: '</span><span style="color: #007700">. </span><span style="color: #0000BB">socket_strerror</span><span style="color: #007700">(</span><span style="color: #0000BB">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />} else if (</span><span style="color: #0000BB">$rval </span><span style="color: #007700">!== </span><span style="color: #0000BB">0</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">'SO_REUSEADDR is set on socket !' </span><span style="color: #007700">. </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.socket-set-option-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.socket-create.php" class="function" rel="rdfs-seeAlso">socket_create()</a> - Create a socket (endpoint for communication)</span></li>
    <li><span class="function"><a href="function.socket-bind.php" class="function" rel="rdfs-seeAlso">socket_bind()</a> - Binds a name to a socket</span></li>
    <li><span class="function"><a href="function.socket-strerror.php" class="function" rel="rdfs-seeAlso">socket_strerror()</a> - Return a string describing a socket error</span></li>
    <li><span class="function"><a href="function.socket-last-error.php" class="function" rel="rdfs-seeAlso">socket_last_error()</a> - Returns the last error on the socket</span></li>
    <li><span class="function"><a href="function.socket-get-option.php" class="function" rel="rdfs-seeAlso">socket_get_option()</a> - Gets socket options for the socket</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-set-option.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-set-option%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-set-option.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="52429">  <div class="votes">
    <div id="Vu52429">
    <a href="/manual/vote-note.php?id=52429&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52429">
    <a href="/manual/vote-note.php?id=52429&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52429" title="76% like this...">
    7
    </div>
  </div>
  <a href="#52429" class="name">
  <strong class="user"><em>drenintell</em></strong></a><a class="genanchor" href="#52429"> &para;</a><div class="date" title="2005-04-30 05:19"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52429">
<div class="phpcode"><code><span class="html">To expand a bit more on what "tim at e2-media dot co dot nz" started.<br /><br />SO_SNDTIMEO is one of the many constants you can use with socket_set_option.<br /><br />See <a href="http://ca.php.net/manual/en/ref.sockets.php" rel="nofollow" target="_blank">http://ca.php.net/manual/en/ref.sockets.php</a> for the available Predefind Constants and visit <a href="http://man.he.net/man2/setsockopt" rel="nofollow" target="_blank">http://man.he.net/man2/setsockopt</a> for the meaning of the ones relevant.<br /><br />Tim's example might seem at first a bit non-intuitive since he is using the SO_SNDTIMEO constant. Which means, if the socket has to send out data, it must do it within the limit specified - in his case 10 seconds. Usually you won't set a timeout for sending out data. Nevertheless, the example is valid, and there are situations where you need to do so.<br /><br />A more intuitive use of socket_set_option would be to set a time out for a blocking socket (a socket that waits for data to be receive when read from). You would do this like so:<br /><br />socket_set_option($socket,SOL_SOCKET, SO_RCVTIMEO, array("sec"=&gt;0, "usec"=&gt;100));<br /><br />Notice that sec= 0 and usec= 100; Depending on how long you want your program to wait to recieve data, you might want to change these values.<br /><br />Regards,<br />  drenintell</span></code></div>
  </div>
 </div>
  <div class="note" id="84083">  <div class="votes">
    <div id="Vu84083">
    <a href="/manual/vote-note.php?id=84083&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84083">
    <a href="/manual/vote-note.php?id=84083&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84083" title="66% like this...">
    1
    </div>
  </div>
  <a href="#84083" class="name">
  <strong class="user"><em>aeolianmeson at ifacfchi dot blitzeclipse dot com</em></strong></a><a class="genanchor" href="#84083"> &para;</a><div class="date" title="2008-06-26 03:31"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84083">
<div class="phpcode"><code><span class="html">Lingering will sometimes not work when you're working with non-blocking sockets. Even if the socket is set to linger and you keep tying to close until the socket doesn't return an error and the resource is no longer identifiable as type 'Socket', the socket may STILL close without sending everything.<br /><br />Therefore, in the event that you are using non-blocking sockets (which is preferable if you care at all about signaling), you should set the socket as blocking (socket_set_block()) before calling to close it. This will allow everything to flush before it returns.<br /><br />Dustin Oprea</span></code></div>
  </div>
 </div>
  <div class="note" id="123992">  <div class="votes">
    <div id="Vu123992">
    <a href="/manual/vote-note.php?id=123992&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123992">
    <a href="/manual/vote-note.php?id=123992&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123992" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123992" class="name">
  <strong class="user"><em>gmail user asmqb7</em></strong></a><a class="genanchor" href="#123992"> &para;</a><div class="date" title="2019-06-29 05:31"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123992">
<div class="phpcode"><code><span class="html">PLEASE NOTE<br /><br />PHP 7.3.6, and probably many previous versions, automatically sets SO_REUSEADDR when you use stream_socket_server().<br /><br />php_network_bind_socket_to_local_addr() is called at <a href="https://github.com/php/php-src/blob/623911f993f39ebbe75abe2771fc89faf6b15b9b/main/streams/xp_socket.c#L675" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/623911f993f39ebbe75abe2771fc89faf6b15b9b/main/streams/xp_socket.c#L675</a> and defined at <a href="https://github.com/php/php-src/blob/61a6a6ec51297506c54f3c6e60ace9b892d0a3e4/main/network.c#L401" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/61a6a6ec51297506c54f3c6e60ace9b892d0a3e4/main/network.c#L401</a> and if you take a look you'll see<br /><br />#ifdef SO_REUSEADDR<br />            setsockopt(sock, SOL_SOCKET, SO_REUSEADDR, (char*)&amp;sockoptval, sizeof(sockoptval));<br />#endif<br /><br />I initially thought I'd need to play with context options to turn this on, but no, the simplest single-arg call with no error checking and just an address, works for me.<br /><br />strace your PHP binary to be 100% sure:<br /><br />...<br />setsockopt(3, SOL_SOCKET, SO_REUSEADDR, [1], 4) = 0<br />...<br /><br />The chances are you ARE using SO_REUSEADDR unless you're using a 100-year old UNIX clone in a month with a Z in it.</span></code></div>
  </div>
 </div>
  <div class="note" id="123753">  <div class="votes">
    <div id="Vu123753">
    <a href="/manual/vote-note.php?id=123753&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123753">
    <a href="/manual/vote-note.php?id=123753&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123753" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123753" class="name">
  <strong class="user"><em>renmengyang567 at gmail dot com</em></strong></a><a class="genanchor" href="#123753"> &para;</a><div class="date" title="2019-04-07 10:04"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123753">
<div class="phpcode"><code><span class="html">&lt;question&gt;<br /> Why is the size of the buffer 2 times that set by me?<br /><span class="default">&lt;?php<br /></span><span class="comment">//Before setting the cache area<br /></span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'tcp'</span><span class="keyword">));<br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="string">'127.0.0.1'</span><span class="keyword">,</span><span class="default">5000</span><span class="keyword">);<br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$sndbuf </span><span class="keyword">= </span><span class="default">socket_get_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_SNDBUF</span><span class="keyword">);<br /></span><span class="default">$rcvbuf </span><span class="keyword">= </span><span class="default">socket_get_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_RCVBUF</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"send buffer size(写缓存区大小):%sm \n"</span><span class="keyword">,</span><span class="default">$sndbuf</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"receive buffer(读缓存区大小)%sm \n"</span><span class="keyword">,</span><span class="default">$rcvbuf</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br /><br /></span><span class="comment">//After setting the cache area<br /></span><span class="default">$snd_buf </span><span class="keyword">= </span><span class="default">1024</span><span class="keyword">*</span><span class="default">3</span><span class="keyword">;<br /></span><span class="default">$rcv_buf </span><span class="keyword">= </span><span class="default">1024</span><span class="keyword">*</span><span class="default">3</span><span class="keyword">;<br /><br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_SNDBUF</span><span class="keyword">, </span><span class="default">$snd_buf</span><span class="keyword">);<br /></span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_RCVBUF</span><span class="keyword">, </span><span class="default">$rcv_buf</span><span class="keyword">);<br /></span><span class="default">$sndbuf </span><span class="keyword">= </span><span class="default">socket_get_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_SNDBUF</span><span class="keyword">);<br /></span><span class="default">$rcvbuf </span><span class="keyword">= </span><span class="default">socket_get_option</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_RCVBUF</span><span class="keyword">);<br /><br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"send buffer size(写缓存区大小):%sm \n"</span><span class="keyword">,</span><span class="default">$sndbuf</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"receive buffer size(读缓存区大小)%sm \n"</span><span class="keyword">,</span><span class="default">$rcvbuf</span><span class="keyword">/</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71904">  <div class="votes">
    <div id="Vu71904">
    <a href="/manual/vote-note.php?id=71904&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71904">
    <a href="/manual/vote-note.php?id=71904&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71904" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71904" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#71904"> &para;</a><div class="date" title="2006-12-21 01:06"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71904">
<div class="phpcode"><code><span class="html">I would like to comment on the previous note regarding blocking sockets.<br />There is more to blocking sockets than waiting for data to be received when trying to be read upon, just to make example, a listening blocking socket will wait for a client to try to connect before it returns when you socket_accept() it.</span></code></div>
  </div>
 </div>
  <div class="note" id="42438">  <div class="votes">
    <div id="Vu42438">
    <a href="/manual/vote-note.php?id=42438&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42438">
    <a href="/manual/vote-note.php?id=42438&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42438" title="50% like this...">
    0
    </div>
  </div>
  <a href="#42438" class="name">
  <strong class="user"><em>tim at e2-media dot co dot nz</em></strong></a><a class="genanchor" href="#42438"> &para;</a><div class="date" title="2004-05-16 08:00"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42438">
<div class="phpcode"><code><span class="html">To set a socket timeout value (assuming you've set it blocking) use:<br /><br />socket_set_option(<br />  $socket,<br />  SOL_SOCKET,  // socket level<br />  SO_SNDTIMEO, // timeout option<br />  array(<br />    "sec"=&gt;10, // Timeout in seconds<br />    "usec"=&gt;0  // I assume timeout in microseconds<br />    )<br />  );</span></code></div>
  </div>
 </div>
  <div class="note" id="101108">  <div class="votes">
    <div id="Vu101108">
    <a href="/manual/vote-note.php?id=101108&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101108">
    <a href="/manual/vote-note.php?id=101108&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101108" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#101108" class="name">
  <strong class="user"><em>DaveRandom</em></strong></a><a class="genanchor" href="#101108"> &para;</a><div class="date" title="2010-11-26 04:13"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101108">
<div class="phpcode"><code><span class="html">Setting the socket timeout microseconds ('usec') does not work under Windows, at least under PHP/5.2.9:<br /><br /><span class="default">&lt;?php<br /><br />  $timeout </span><span class="keyword">= array(</span><span class="string">'sec'</span><span class="keyword">=&gt;</span><span class="default">1</span><span class="keyword">,</span><span class="string">'usec'</span><span class="keyword">=&gt;</span><span class="default">500000</span><span class="keyword">);<br />  </span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_RCVTIMEO</span><span class="keyword">,</span><span class="default">$timeout</span><span class="keyword">);<br />  </span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">socket_set_option</span><span class="keyword">(</span><span class="default">$socket</span><span class="keyword">,</span><span class="default">SOL_SOCKET</span><span class="keyword">,</span><span class="default">SO_RCVTIMEO</span><span class="keyword">));<br /><br /></span><span class="default">?&gt;<br /></span><br />Output on Windows box:<br /><br />array(2) {<br />  ["sec"]=&gt;<br />  int(1)<br />  ["usec"]=&gt;<br />  int(0)<br />}<br /><br />Output on Linux box:<br /><br />array(2) {<br />  ["sec"]=&gt;<br />  int(1)<br />  ["usec"]=&gt;<br />  int(500000)<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="107980">  <div class="votes">
    <div id="Vu107980">
    <a href="/manual/vote-note.php?id=107980&amp;page=function.socket-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107980">
    <a href="/manual/vote-note.php?id=107980&amp;page=function.socket-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107980" title="27% like this...">
    -5
    </div>
  </div>
  <a href="#107980" class="name">
  <strong class="user"><em>ckozler at kozler dot net</em></strong></a><a class="genanchor" href="#107980"> &para;</a><div class="date" title="2012-03-19 07:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107980">
<div class="phpcode"><code><span class="html">It appears that Winsock does not acknowledge timeout (send and receive) on Windows.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-set-option.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sockets.php">Socket Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.socket-accept.php" title="socket_&#8203;accept">socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-bind.php" title="socket_&#8203;addrinfo_&#8203;bind">socket_&#8203;addrinfo_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-connect.php" title="socket_&#8203;addrinfo_&#8203;connect">socket_&#8203;addrinfo_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-explain.php" title="socket_&#8203;addrinfo_&#8203;explain">socket_&#8203;addrinfo_&#8203;explain</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-lookup.php" title="socket_&#8203;addrinfo_&#8203;lookup">socket_&#8203;addrinfo_&#8203;lookup</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-atmark.php" title="socket_&#8203;atmark">socket_&#8203;atmark</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-bind.php" title="socket_&#8203;bind">socket_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-clear-error.php" title="socket_&#8203;clear_&#8203;error">socket_&#8203;clear_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-close.php" title="socket_&#8203;close">socket_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-cmsg-space.php" title="socket_&#8203;cmsg_&#8203;space">socket_&#8203;cmsg_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-connect.php" title="socket_&#8203;connect">socket_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create.php" title="socket_&#8203;create">socket_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-listen.php" title="socket_&#8203;create_&#8203;listen">socket_&#8203;create_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-pair.php" title="socket_&#8203;create_&#8203;pair">socket_&#8203;create_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-export-stream.php" title="socket_&#8203;export_&#8203;stream">socket_&#8203;export_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-option.php" title="socket_&#8203;get_&#8203;option">socket_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getopt.php" title="socket_&#8203;getopt">socket_&#8203;getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getpeername.php" title="socket_&#8203;getpeername">socket_&#8203;getpeername</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getsockname.php" title="socket_&#8203;getsockname">socket_&#8203;getsockname</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-import-stream.php" title="socket_&#8203;import_&#8203;stream">socket_&#8203;import_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-last-error.php" title="socket_&#8203;last_&#8203;error">socket_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-listen.php" title="socket_&#8203;listen">socket_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-read.php" title="socket_&#8203;read">socket_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recv.php" title="socket_&#8203;recv">socket_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvfrom.php" title="socket_&#8203;recvfrom">socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvmsg.php" title="socket_&#8203;recvmsg">socket_&#8203;recvmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-select.php" title="socket_&#8203;select">socket_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-send.php" title="socket_&#8203;send">socket_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendmsg.php" title="socket_&#8203;sendmsg">socket_&#8203;sendmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendto.php" title="socket_&#8203;sendto">socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-block.php" title="socket_&#8203;set_&#8203;block">socket_&#8203;set_&#8203;block</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-nonblock.php" title="socket_&#8203;set_&#8203;nonblock">socket_&#8203;set_&#8203;nonblock</a>
                        </li>
                                                <li class="current">
                            <a href="function.socket-set-option.php" title="socket_&#8203;set_&#8203;option">socket_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-setopt.php" title="socket_&#8203;setopt">socket_&#8203;setopt</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-shutdown.php" title="socket_&#8203;shutdown">socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-strerror.php" title="socket_&#8203;strerror">socket_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-write.php" title="socket_&#8203;write">socket_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-export.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;export">socket_&#8203;wsaprotocol_&#8203;info_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-import.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;import">socket_&#8203;wsaprotocol_&#8203;info_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-release.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;release">socket_&#8203;wsaprotocol_&#8203;info_&#8203;release</a>
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
