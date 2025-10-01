<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: New Features - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/migration73.new-features.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/migration73.new-features.php">
 <link rel="alternate" href="https://www.php.net/manual/en/migration73.new-features.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/migration73.php">
 <link rel="prev" href="https://www.php.net/manual/en/migration73.php">
 <link rel="next" href="https://www.php.net/manual/en/migration73.new-functions.php">

 <link rel="alternate" href="https://www.php.net/manual/en/migration73.new-features.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/migration73.new-features.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/migration73.new-features.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/migration73.new-features.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/migration73.new-features.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/migration73.new-features.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/migration73.new-features.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/migration73.new-features.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/migration73.new-features.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/migration73.new-features.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/migration73.new-features.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="New Features" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: New Features - Manual" />
<meta name="twitter:description" content="New Features" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: New Features - Manual" />
<meta itemprop="description" content="New Features" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="New Features" />

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
        <a href="migration73.new-functions.php">
          New Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="migration73.php">
          &laquo; Migrating from PHP 7.2.x to PHP 7.3.x        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='appendices.php'>Appendices</a></li>      <li><a href='migration73.php'>Migrating from PHP 7.2.x to PHP 7.3.x</a></li>      </ul>
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
            <option value='en/migration73.new-features.php' selected="selected">English</option>
            <option value='de/migration73.new-features.php'>German</option>
            <option value='es/migration73.new-features.php'>Spanish</option>
            <option value='fr/migration73.new-features.php'>French</option>
            <option value='it/migration73.new-features.php'>Italian</option>
            <option value='ja/migration73.new-features.php'>Japanese</option>
            <option value='pt_BR/migration73.new-features.php'>Brazilian Portuguese</option>
            <option value='ru/migration73.new-features.php'>Russian</option>
            <option value='tr/migration73.new-features.php'>Turkish</option>
            <option value='uk/migration73.new-features.php'>Ukrainian</option>
            <option value='zh/migration73.new-features.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="migration73.new-features" class="sect1">
 <h2 class="title">New Features</h2>

 <div class="sect2" id="migration73.new-features.core">
  <h3 class="title">PHP Core</h3>

  <div class="sect3" id="migration73.new-features.core.heredoc">
   <h4 class="title">More Flexible Heredoc and Nowdoc Syntax</h4>

   <p class="para">
    The closing marker for doc strings is no longer required to be followed by a
    semicolon or newline. Additionally the closing marker may be indented, in
    which case the indentation will be stripped from all lines in the doc string.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.core.destruct-reference">
   <h4 class="title">Array Destructuring supports Reference Assignments</h4>

   <p class="para">
    Array destructuring now supports reference assignments using the syntax
    <code class="literal">[&amp;$a, [$b, &amp;$c]] = $d</code>. The same is also supported
    for <span class="function"><a href="function.list.php" class="function">list()</a></span>.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.core.instanceof-literals">
   <h4 class="title">Instanceof Operator accepts Literals</h4>

   <p class="para">
    <code class="literal">instanceof</code> now allows literals as the first operand, in
    which case the result is always <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.core.compileerror">
   <h4 class="title">CompileError Exception instead of some Compilation Errors</h4>

   <p class="para">
    A new <span class="classname"><a href="class.compileerror.php" class="classname">CompileError</a></span> exception has been added, from
    which <span class="classname"><a href="class.parseerror.php" class="classname">ParseError</a></span> inherits. A small number of
    compilation errors will now throw a <span class="classname"><a href="class.compileerror.php" class="classname">CompileError</a></span>
    instead of generating a fatal error. Currently this only affects compilation
    errors that may be thrown by <span class="function"><a href="function.token-get-all.php" class="function">token_get_all()</a></span> in
    <strong><code><a href="tokenizer.constants.php#constant.token-parse">TOKEN_PARSE</a></code></strong> mode, but more errors may be converted in
    the future.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.core.trailing-commas">
   <h4 class="title">Trailing Commas are allowed in Calls</h4>

   <p class="para">
    Trailing commas in function and method calls are now allowed.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.core.argon2id">
   <h4 class="title">Argon2id Support</h4>

   <p class="para">
    The <strong class="option configure">--with-password-argon2[=dir]</strong> configure
    argument now provides support for both Argon2i and Argon2id hashes in the
    <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span>, <span class="function"><a href="function.password-verify.php" class="function">password_verify()</a></span>,
    <span class="function"><a href="function.password-get-info.php" class="function">password_get_info()</a></span>, and
    <span class="function"><a href="function.password-needs-rehash.php" class="function">password_needs_rehash()</a></span> functions. Passwords may be hashed
    and verified using the <strong><code><a href="password.constants.php#constant.password-argon2id">PASSWORD_ARGON2ID</a></code></strong> constant.
    Support for both Argon2i and Argon2id in the <span class="function"><strong>password_*()</strong></span>
    functions now requires PHP be linked against libargon2 reference library ≥
    20161029.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration73.new-features.fpm">
  <h3 class="title">FastCGI Process Manager</h3>

  <p class="para">
   New options have been added to customize the FPM logging:
   <dl>
    
     <dt><code class="literal">log_limit</code></dt>
     <dd>
      <span class="simpara">
       This global option can be used for setting the log limit for the logged
       line which allows to log messages longer than 1024 characters without
       wrapping. It also fixes various wrapping issues.
      </span>
     </dd>
    
    
     <dt><code class="literal">log_buffering</code></dt>
     <dd>
      <span class="simpara">
       This global option allows an experimental logging without extra buffering.
      </span>
     </dd>
    
    
     <dt><code class="literal">decorate_workers_output</code></dt>
     <dd>
      <span class="simpara">
       This pool option allows to disable the output decoration for workers
       output when <code class="literal">catch_workers_output</code> is enabled.
      </span>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="sect2" id="migration73.new-features.bc">
  <h3 class="title">BC Math Functions</h3>

  <p class="para">
   <span class="function"><a href="function.bcscale.php" class="function">bcscale()</a></span> can now also be used as getter to retrieve the
   current scale in use.
  </p>
 </div>

 <div class="sect2" id="migration73.new-features.ldap">
  <h3 class="title">Lightweight Directory Access Protocol</h3>

  <p class="para">
   Full support for LDAP Controls has been added to the <a href="book.ldap.php" class="link">LDAP</a> querying functions and
   <span class="function"><a href="function.ldap-parse-result.php" class="function">ldap_parse_result()</a></span>:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      A <code class="literal">$controls</code> parameter to send controls to the
      server in <span class="function"><a href="function.ldap-add.php" class="function">ldap_add()</a></span>,
      <span class="function"><a href="function.ldap-mod-replace.php" class="function">ldap_mod_replace()</a></span>, <span class="function"><a href="function.ldap-mod-add.php" class="function">ldap_mod_add()</a></span>,
      <span class="function"><a href="function.ldap-mod-del.php" class="function">ldap_mod_del()</a></span>, <span class="function"><a href="function.ldap-rename.php" class="function">ldap_rename()</a></span>,
      <span class="function"><a href="function.ldap-compare.php" class="function">ldap_compare()</a></span>, <span class="function"><a href="function.ldap-delete.php" class="function">ldap_delete()</a></span>,
      <span class="function"><a href="function.ldap-modify-batch.php" class="function">ldap_modify_batch()</a></span>,
      <span class="function"><a href="function.ldap-search.php" class="function">ldap_search()</a></span>, <span class="function"><a href="function.ldap-list.php" class="function">ldap_list()</a></span> and
      <span class="function"><a href="function.ldap-read.php" class="function">ldap_read()</a></span> has been added.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      The out parameter <code class="literal">$controls</code> to get controls from the server in
      <span class="function"><a href="function.ldap-parse-result.php" class="function">ldap_parse_result()</a></span> has been added.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      Support for <strong><code><a href="ldap.constants.php#constant.ldap-opt-server-controls">LDAP_OPT_SERVER_CONTROLS</a></code></strong> and
      <strong><code><a href="ldap.constants.php#constant.ldap-opt-client-controls">LDAP_OPT_CLIENT_CONTROLS</a></code></strong> in
      <span class="function"><a href="function.ldap-get-option.php" class="function">ldap_get_option()</a></span> and
      <span class="function"><a href="function.ldap-set-option.php" class="function">ldap_set_option()</a></span> has been fixed.
     </span>
    </li>
   </ul>
  </p>
 </div>

 <div class="sect2" id="migration73.new-features.mbstring">
  <h3 class="title">Multibyte String Functions</h3>

  <div class="sect3" id="migration73.new-features.mbstring.case-mapping-folding">
   <h4 class="title">Full Case-Mapping and Case-Folding Support</h4>

   <p class="para">
    Support for full case-mapping and case-folding has been added. Unlike simple
    case-mapping, full case-mapping may change the length of the string. For
    example:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />mb_strtoupper</span><span style="color: #007700">(</span><span style="color: #DD0000">"Straße"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// Produces STRAßE on PHP 7.2<br />// Produces STRASSE on PHP 7.3<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    The different casing mapping and folding modes are available through
    <span class="function"><a href="function.mb-convert-case.php" class="function">mb_convert_case()</a></span>:
    <ul class="itemizedlist">
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-lower">MB_CASE_LOWER</a></code></strong> (used by <span class="function"><a href="function.mb-strtolower.php" class="function">mb_strtolower()</a></span>)
      </span>
     </li>
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-upper">MB_CASE_UPPER</a></code></strong> (used by <span class="function"><a href="function.mb-strtoupper.php" class="function">mb_strtoupper()</a></span>)
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-title">MB_CASE_TITLE</a></code></strong>
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-fold">MB_CASE_FOLD</a></code></strong>
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-lower-simple">MB_CASE_LOWER_SIMPLE</a></code></strong>
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-upper-simple">MB_CASE_UPPER_SIMPLE</a></code></strong>
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-title-simple">MB_CASE_TITLE_SIMPLE</a></code></strong>
      </span>
     </li> 
     <li class="listitem">
      <span class="simpara">
       <strong><code><a href="mbstring.constants.php#constant.mb-case-fold-simple">MB_CASE_FOLD_SIMPLE</a></code></strong> (used by case-insensitive operations)
      </span>
     </li> 
    </ul>
    Only unconditional, language agnostic full case-mapping is performed.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.case-insensitive-ops">
   <h4 class="title">Case-Insensitive String Operations use Case-Folding</h4>

   <p class="para">
    Case-insensitive string operations now use case-folding instead of case-
    mapping during comparisons. This means that more characters will be
    considered (case insensitively) equal now.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.mb-case-title">
   <h4 class="title">MB_CASE_TITLE performs Title-Case Conversion</h4>

   <p class="para">
    <span class="function"><a href="function.mb-convert-case.php" class="function">mb_convert_case()</a></span> with <strong><code><a href="mbstring.constants.php#constant.mb-case-title">MB_CASE_TITLE</a></code></strong>
    now performs title-case conversion based on the Cased and CaseIgnorable
    derived Unicode properties. In particular this also improves handling of
    quotes and apostrophes.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.ucd11">
   <h4 class="title">Unicode 11 Support</h4>

   <p class="para">
    The <a href="book.mbstring.php" class="link">Multibyte String</a> data tables have
    been updated for Unicode 11.
   </p> 
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.long-strings">
   <h4 class="title">Long String Support</h4>

   <p class="para">
    The <a href="ref.mbstring.php" class="link">Multibyte String Functions</a> now
    correctly support strings larger than 2GB.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.performance">
   <h4 class="title">Performance Improvements</h4>

   <p class="para">
    Performance of the <a href="book.mbstring.php" class="link">Multibyte String</a>
    extension has been significantly improved across the board. The largest
    improvements are in case conversion functions.
   </p>
  </div>

  <div class="sect3" id="migration73.new-features.mbstring.named-captures">
   <h4 class="title">Named Captures Support</h4>

   <p class="para">
    The <code class="literal">mb_ereg_*</code> functions now support named captures.
    Matching functions like <span class="function"><a href="function.mb-ereg.php" class="function">mb_ereg()</a></span> will now return named
    captures both using their group number and their name, similar to PCRE:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />mb_ereg</span><span style="color: #007700">(</span><span style="color: #DD0000">'(?&lt;word&gt;\w+)'</span><span style="color: #007700">, </span><span style="color: #DD0000">'国'</span><span style="color: #007700">, </span><span style="color: #0000BB">$matches</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// =&gt; [0 =&gt; "国", 1 =&gt; "国", "word" =&gt; "国"];<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    Additionally, <span class="function"><a href="function.mb-ereg-replace.php" class="function">mb_ereg_replace()</a></span> now supports the
    <code class="code">\k&lt;&gt;</code> and <code class="code">\k&#039;&#039;</code> notations to reference named
    captures in the replacement string:
    <div class="informalexample">
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />mb_ereg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\s*(?&lt;word&gt;\w+)\s*'</span><span style="color: #007700">, </span><span style="color: #DD0000">"_\k&lt;word&gt;_\k'word'_"</span><span style="color: #007700">, </span><span style="color: #DD0000">' foo '</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// =&gt; "_foo_foo_"<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

    </div>
    <code class="code">\k&lt;&gt;</code> and <code class="code">\k&#039;&#039;</code> can also be used for numbered
    references, which also works with group numbers greater than 9.
   </p>
  </div>

 </div>

 <div class="sect2" id="migration73.new-features.realine">
  <h3 class="title">Readline</h3>

  <p class="para">
   Support for the <code class="literal">completion_append_character</code> and
   <code class="literal">completion_suppress_append</code> options has been added to
   <span class="function"><a href="function.readline-info.php" class="function">readline_info()</a></span>. These options are only available if PHP
   is linked against libreadline (rather than libedit).
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/appendices/migration73/new-features.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmigration73.new-features%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=migration73.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration73.new-features.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="123898">  <div class="votes">
    <div id="Vu123898">
    <a href="/manual/vote-note.php?id=123898&amp;page=migration73.new-features&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123898">
    <a href="/manual/vote-note.php?id=123898&amp;page=migration73.new-features&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123898" title="58% like this...">
    11
    </div>
  </div>
  <a href="#123898" class="name">
  <strong class="user"><em>yoander dot valdes at yahoo dot com</em></strong></a><a class="genanchor" href="#123898"> &para;</a><div class="date" title="2019-05-31 11:34"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123898">
<div class="phpcode"><code><span class="html">"Trailing commas in function and method calls are now allowed" means function parameters, example:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">my1</span><span class="keyword">() {<br />        echo </span><span class="string">"xxxxxx\n"</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">my2</span><span class="keyword">() {<br />        echo </span><span class="string">"yyyyyy\n"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">my1</span><span class="keyword">(),</span><span class="default">my2</span><span class="keyword">(); </span><span class="comment">// PHP Parse error:  syntax error<br /><br /></span><span class="default">my1</span><span class="keyword">(,); </span><span class="comment">// PHP Parse error:  syntax error<br /><br /></span><span class="default">my1</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">,); </span><span class="default">my2</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">,); </span><span class="comment">// OK<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=migration73.new-features&amp;repo=en&amp;redirect=https://www.php.net/manual/en/migration73.new-features.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="migration73.php">Migrating from PHP 7.2.x to PHP 7.3.x</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="migration73.new-features.php" title="New Features">New Features</a>
                        </li>
                                                <li class="">
                            <a href="migration73.new-functions.php" title="New Functions">New Functions</a>
                        </li>
                                                <li class="">
                            <a href="migration73.constants.php" title="New Global Constants">New Global Constants</a>
                        </li>
                                                <li class="">
                            <a href="migration73.incompatible.php" title="Backward Incompatible Changes">Backward Incompatible Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.deprecated.php" title="Deprecated Features">Deprecated Features</a>
                        </li>
                                                <li class="">
                            <a href="migration73.other-changes.php" title="Other Changes">Other Changes</a>
                        </li>
                                                <li class="">
                            <a href="migration73.windows-support.php" title="Windows Support">Windows Support</a>
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
